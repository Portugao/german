==========================================================================================
WICHTIG
Zur Kenntnisnahme: Die englischsprachigen Dateien im Verzeichnis docs/en/dev/ sind 
aktueller, als das hier vorliegende Material.
==========================================================================================


ZIKULA HOOKS
============
Dieses Dokument beschreibt das Zikula Hook System.

Was ist ein Hook?
-----------------
Ein Hook ist eine andere Art von Ereignis, das in Zikula auftreten kann und als 'Hookable Event'
bezeichnet wird. Im Gegensatz zu Events werden Hookable Events benutzt um Module/Plugins an
andere Module anzuhängen, so dass sie UI-Funktionalität anreichern können. Sie sind komplett
durch den Seitenadministrator konfigurierbar, so dass der Administrator wählen kann, welche
Module Hooks für welche anderen sind, und in welcher Reihenfolge sie ausgeführt werden.
Ein Kommentar-Modul könnte beispielsweise Kommentare an ein Blog-Modul anhängen. Auf ähnliche
Weise könnte ein Ratings-Modul an ein Blog-Modul angehängt werden, damit alle Artikel
Bewertungen haben.

Ein weiteres mögliches Beispiel ist das Hinzufügen von Extra-Feldern zu Formularen zur
Abfrage zusätzlicher Informationen.

Anbieter und Abonnenten
-----------------------
In diesem Dokument benutzen wir "Hook Providers" und "Hook Subscribers". Ein Provider ist
ein Modul/Plugin, das eine Funktionalität bietet, die an die Ausgabe anderer Module angehängt
werden kann/soll.

Ein Subscriber ist ein Modul, das Hooks versteht. Es kann Hooks verarbeiten, die von anderen
Modulen angeboten werden.

Bereiche
--------
Dies ist ein erweitertes Feature für komplexe Module. Allgemein beziehen sich Modules als
Provider oder Subscriber auf eine Area. Areas erlauben Subscriber und Provider eine Gruppierung
ihrer Features.
Damit können Module verschiedene Gruppen von Hooks anbieten. Ein Provider könnte verschiedene
Hook-Features anbieten. Aus Subscriber-Sicht erlaubt es einem Modul Hooks zu einem Teil des
Moduls zuzuweisen, während ein anderer Teil diese Hooks nicht bekommt.

Areas müssen alle eindeutig sein, daher sollte dieses Format verwendet werden:

    modulehook_area.mymodule.<areaname>
    modulehook_area.comments.general (the provider area)
    modulehook_area.news.articles    (the subscriber area)

Subscriber-Module
-----------------
Modules, die Hooks verstehen, müssen dies dem Zikula-Framework in der Datei Version.php bekannt machen.
Dies erfolgt durch Hinzufügen einer Methode:

    protected function setupHookBundles()
    {
        $bundle = new Zikula_Version_HookSubscriberBundle('modulehook_area.news.articles', $this->__('News Display Hooks'));
        $bundle->addType('ui.view', 'news.hook.ui.view');
        $bundle->addType('ui.create', 'news.hook.ui.create');
        $this->registerHookSubscriberBundle($bundle);
    }

Während der Installation oder Aktualisierung des Modules müssen diese Bundles mit
dem Persistence Layer registriert werden:

    HookUtil::registerHookSubscriberBundles($this->version);

Ein komplexes Modul kann mehrere Bereiche haben, bei denen das Anhängen von Hooks passend oder
unpassend sein kann, oder unterschiedliche Hooks für verschiedene Bereiche anfordern.
Aus diesem Grund kann man verschiedene Areas in der API spezifizieren. Jeder Bereich
benötigt sein eigenes Set eindeutiger Event-Namen.

Die Methode addType() benötigt einige Erklärungen. Der erste Parameter ist der Hook-Typ;
der zweite Parameter ist der Name des Events, das von *DIESEM* Modul ausgelöst wird.
Wenn also das Modul etwa ein News-Modul ist, dann sind dies die eindeutigen Namen, die nur
*dieses* News-Modul triggert. Wenn der Benutzer z.B. ein Kommentar-Modul anhängt (Provider),
wird unter der Oberfläche der Hook-Handler des Kommentar-Moduls an den EventManager angehängt
unter Benutzung des Event-Namens, der vom Subscriber-Modul (News) angegeben wurde. Zum Beispiel
wird news.ui.view an comments.handler.ui.view gehängt, was der Name eines Callable Handlers ist,
registriert durch den Hook-Provider (News).

Es ist auch notwendig die folgende Zeile zur Methode getMetaData() in der Datei Version.php hinzuzufügen,
um Zikula wissen zu lassen, dass das Modul Hooks versteht und diese abonnieren (subscriben) kann.
Zikula fügt dann ein Konfigurationsmenü zum Verwaltungsbereich des Modules hinzu. Aus diesem Grund
*muss* man einen Admin Controller im Modul haben.

    $meta['capabilities'] = array(HookUtil::SUBSCRIBER_CAPABLE => array('enabled' => true));

Provider-Module
---------------
Provider-Module müssen ihre verfügbaren Hook-Handler Zikula bekannt machen. Dazu muss man drei Aufgaben durchführen:

Zuerst wird die hook_provider Capability zur Datei Version.php in der Methode getMetaData() hinzugefügt.

    $meta['capabilities'] = array(HookUtil::PROVIDER_CAPABLE => array('enabled' => true));

Als zweites müssen Provider Bundles konfiguriert werden, indem die folgende Methode in Version.php eingebaut wird.

    protected function setupHookBundles()
    {
        $bundle = new Zikula_Version_HookProviderBundle('modulehook_area.ratings.item', $this->__('Ratings Hook Poviders'));
        $bundle->addHook('hookhandler.ratings.ui.view', 'Ratings', 'ui.view', 'Ratings_Hooks', 'uiview');
        //...
        $this->registerHookProviderBundle($bundle);

        //... repeat as many times as necessary
    }

Der dritte Schritt ist das Registrieren dieser Bundles während der Installation oder Aktualisierung des Moduls.
Dies erfolgt unter Verwendung des Persistence Layers:

    HookUtil::registerHookProviderBundles($this->version);

Dies registriert die Hook Event Handler (bzw. die eigentlichen PHP Klassen/Methoden), die auf Hook-Events,
die von Subscriber-Modulen ausgelöst werden, reagieren und antworten.

Ein Modul kann entweder statische Klassenmethoden registrieren, wie Foo::Bar($event) oder
Services (welche instantiierte Klassenobjekte sind). Bei der Benutzung von Services müssen
diese Instanzen von Zikula_EventHandler sein. Wir verwenden eine API für die Registrierung.

Wenn $serviceId = null ist, heißt dies für Zikula, dass das Callable eine statische Klassenmethode ist.
Wenn man eine $serviceId angibt, dann wird diese Klasse instantiiert und benutzt. Das bedeutet, dass
man die gleiche $serviceId nutzen und mehrere Methoden haben kann, wenn man dies möchte.

Der $name des Hooks ist der Name des Handlers - ein gemeinsamer Name. Dies ist NICHT ein Event-Name.

    $bundle->addHook($name, $owner, $type, $className, $method, $serviceId, $weight);

    // registering a static method handler.
    $bundle->addHook('hookhandler.ratings.ui.view', 'Ratings', 'ui.view', 'Ratings_Hooks', 'uiview');

    // registering a service
    $bundle->addHook('hookhandler.ratings.ui.view', 'Ratings', 'ui.view', 'Ratings_Hooks', 'uiview', 'module.ratings_hooks');

Der Parameter $weight kann verwendet werden um die Standardgewichtungen für Handler festzulegen, die eventuell
an den EventManager angehängt werden. Allgemein kann dieser Parameter auch unterdrückt werden.

Hook-Typen
----------
Das folgende ist eine Liste valider Hook-Typen. Nicht alle müssen verwendet werden, aber allgeein sollte
ein HookBundle zuindest die ui.* und process.* Handler implementieren, um eine Action valide zu komplettieren.

ui.view          - Display-Hook für View- un Display-Templates.
ui.edit          - Display-Hook für Create- und Edit-Formulare.
validate.update  - Zur Validierung von Eingaben aus einem Create-/Edit-Form.
process.update   - Führt die finalen Update-Aktionen für ein Create-/Edit-Form durch.
process.delete   - Führt die finalen Delete-Aktionen für ein Formular aus.

Hookable Events
---------------
In diesem Abschnitt geht es um das eigentliche "hookable event", das von einem
Subscriber-Modul ausgelöst wird.

Das Event kapselt Informationen über das Hookable Event. Prinzipiell benötigen wir
den Namen des Hook Events, z.B. 'news.hook.ui.create'. Der Name des Event-Eigners
(des besitzenden Moduls) wird allgemein als Prefix vorangestellt.

Als nächstes benötigen wir das Subjekt des Ereignisses. Dies ist ein Objekt oder Array mit Daten.
Wenn es zum Beispiel um einen Blog-Beitrag geht, dann wäre es entsprechend das Objekt mit diesem
Beitrag (wenn Doctrine benutzt wird, oder ein Array mit den gleichen Daten). Zu beachten ist, das
man dies in allen Fällen braucht außer bei Create (wo es noch keine Daten oder nur ein leeres
Objekt gibt). Dies gilt auch für Delete-Operationen, was zwar auf den ersten Blick nicht viel
Sinn macht, aber sogar Delete-Operationen kommen normalerweise von einem Formular, das das zu löschende
Objekt angezeigt hat, und somit ist das Objekt bereits verfügbar.

In den Argumenten eines Events können wir auch ein Array einbinden in der Form
'module' => $moduleName,
'id'     => das ID-Feld dieses Arrays, oder ID-Property des Objektes

Das kann dann zum Beispiel so aussehen:

    new Zikula_Event('news.hook.process.update', $article, array('module' => 'News', 'id' => 'id'));

Allgemein können Hook-Provider annehmen, dass die ID 'id' ist, falls kein 'id'-Key angegeben wurde.

Hooks von der Subscriber-Seite implementieren
---------------------------------------------
Der wichtigste Zweck für Hooks ist es, dass ein Modul an ein anderes angehängt werden kann,
wie Bewertungen für Blog-Beiträge. In diesem Abschnitt wird die Implementierung von Hooks
auf Seite des Subscribers behandelt. In unserem Beispiel wäre dies das Blog-Modul.

Wir müssen uns nicht um das Anhängen der Hooks an Module kümmern, dies wird automatisch von
der UI in der Administration erledigt.

Das Anhängen von Display-Hooks ist sehr einfach. Innerhalb des Templates fügt man einfach so etwas hinzu:

    {notifydisplayhooks eventname='news.hook.ui.view' subject=$subject module=$module assign='display_hooks'}

$module wird automatisch (basierend auf dem Wert in der Zikula_View Instanz) hinzugefügt, wenn man es nicht
explizit angibt.

Das Plugin liefert alle Display-Hooks, sortiert entsprechend der Einstellungen in der Administration.
Die Rückgabe ist ein Array in der Form

    array('moduleName1' => 'output1',
          'moduleName2' => 'output2');

In den Controller-Klassen des Moduls müssen die Hook-Typen für "Process" und/oder "Validation" implementiert werden.
Dies kann wie folgt erledigt werden:

    // the long way
    $event = new Zikula_Event('news.hook.process.create', $subject, array('module' => $moduleName));
    $this->eventManager->notify($event);

   // the short way, provided in instances of Zikula_Base (controllers, APIs etc).
   $this->notifyHooks('news.hook.process.create', $subject);

HOOK ANTWORTEN VOM PROVIDER
---------------------------
Ein Hook-Handler sollte mit einem Zikula_Response_DisplayHook Object auf folgende Weise antworten.

    public function hookHandler(Zikula_Event $event)
    {
        $name = 'Foo'; // this module's name.
        $template = 'template_name.tpl'; // the name of the module's template
        $view = Zikula_View::getInstance($name);

        // do stuff...

        // add this response to the event stack
        $event->data[$name] = new Zikula_Response_DisplayHook($name, $view, $template);
    }