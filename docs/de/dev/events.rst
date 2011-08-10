==========================================================================================
WICHTIG
Zur Kenntnisnahme: Die englischsprachigen Dateien im Verzeichnis docs/en/dev/ sind 
aktueller, als das hier vorliegende Material.
==========================================================================================


Man kann Event Listener registrieren mit EventUtil::attach($name, $handler);

Man kann Ereignisse auslösen mit

    [php]
    $event = new Zikula_Event($eventName, $subject, $args, $data);
    EventUtil::notify($event);

Alle Änderungen, die innerhalb der Handler an dem $event Object oder an $subject durchgeführt werden, bleiben bestehen (Standardverhalten in PHP5).

Liste der Ereignisnamen im Core, die man nutzen kann.

api.method_not_found aufgerufen in Instanzen von Zikula_Api von __call()
    Erhält Argumente von __call($method, argument) als $args
    $event['method'] = die Methode, die in der Hauptklasse nicht existierte.
    $event['args'] = die übergebenen Argumente
    Das Subjekt des Ereignisses ist die Klasse, in der die Methode nicht gefunden wurde.
    Muss existieren, falls $event['method'] nicht mit dem übereinstimmt, was der Handler erwartet.
    Modifizieren: $event->data und $event->setNotify().

core.preinit
    Tritt auf, nachdem die Datei config.php geladen wurde.

core.init
    Tritt nach jeder System::init() Stage auf, $event['stage'] beinhaltet die Stage.
    Um zu prüfen, ob der Handler ausgeführt werden soll, tut man so etwas wie
        if($event['stage'] & System::CORE_STAGES_*)

core.postinit
    Tritt auf, bevor System::init() die normale Ausführung beendet.

controller.method_not_found aufgerufen in Instanzen von Zikula_Controller von __call()
    Erhält Argumente von __call($method, argument) als $args
    $event['method'] = die Methode, die in der Hauptklasse nicht existierte.
    $event['args'] = die übergebenen Argumente
    Das Subjekt des Ereignisses ist die Klasse, in der die Methode nicht gefunden wurde.
    Muss existieren, falls $event['method'] nicht mit dem übereinstimmt, was der Handler erwartet.
    Modifizieren: $event->data und $event->setNotify().

dbobject.pre/post*
    Nimmt das Subjekt von $this.

installer.module.uninstalled aufgerufen, nachdem ein Modul erfolgreich deinstaliert wurde
    Erhält $modinfo als $args

group.create
    Tritt auf, nachdem eine Gruppe erstellt wurde. Der volle Datensatz der erstellten Gruppe ist als Subjekt verfügbar.

group.update
    Tritt auf, nachdem eine Gruppe geändert wurde. Der volle Datensatz der geänderten Gruppe ist als Subjekt verfügbar.

group.delete
    Tritt auf, nachdem eine Gruppe vom System gelöscht wurde. Der volle Datensatz der gelöschten Gruppe ist als Subjekt verfügbar.

group.adduser
    Tritt auf, nachdem ein Benutzer zu einer Gruppe hinzugefügt wurde. Wird nicht auf wartende Anträge für Mitgliedschaften angewendet.
    Die uid und gid sind als Subjekt verfügbar.

group.removeuser
    Tritt auf, nachdem ein Benutzer von einer Gruppe entfernt wurde. Die uid und gid sind als Subjekt verfügbar.

module_dispatch.postloadgeneric
    erhält das args array('modinfo' => $modinfo, 'type' => $type, 'force' => $force, 'api' => $api).

module_dispatch.preexecute
    Tritt auf in ModUtil::exec() vor einem Funktionsaufruf mit den folgenden Argumenten:
    array('modname' => $modname, 'modfunc' => $modfunc, 'args' => $args, 'modinfo' => $modinfo, 'type' => $type, 'api' => $api)

module_dispatch.postexecute
    Tritt auf in ModUtil::exec() nach einem Funktionsaufruf mit den folgenden Argumenten:
    array('modname' => $modname, 'modfunc' => $modfunc, 'args' => $args, 'modinfo' => $modinfo, 'type' => $type, 'api' => $api)
    erhält die Modulausgabe mit $event->getData();
    kann diese Ausgabe mit $event->setData($data); verändern

module_dispatch.type_not_found wenn $type nicht in ModUtil::exec() gefunden (z.B. keine admin.php)
    Dies ist nur für die klassischen Modul-Typen.
    array('modname' => $modname, 'modfunc' => $modfunc, 'args' => $args, 'modinfo' => $modinfo, 'type' => $type, 'api' => $api)
    Diese Art von Event Handler sollte
        1. $event['modfunc'] prüfen, um zu sehen, ob Ausführung erwünscht, ansonsten stilles Exit
        2. so etwas wie $result = {$event['modfunc']}({$event['args'});
        3. das Ergebnis mit $event->setData($result) speichern.
        4. $event->setNotify().
        5. return void

module_dispatch.custom_classname zum Überschreiben der in ModUtil::exec() kalkulierten Klassennamen
    Um eine existierende Controller- oder API-Methode zu überschreiben, wird dieser Event-Typ für Overrides der Klassennamen benutzt.
    Dies erlaubt das Überschreiben der Methoden durch Benutzung von Vererbung.
    Erhält kein Subjekt, args im array('modname' => $modname, 'modinfo' => $modinfo, 'type' => $type, 'api' => $api)
    und 'event data' in $className. Dies kann verändert werden durch Setzen von $event->setData(), gefolgt von $event->setNotified().

module.mailer.api.sendmessage
    Aufgerufen von Mailer_Api_User#sendmessage. Subjekt ist Mailer_Api_User mit $args.
    Das ist ein notifyUntil Event, das Ereignis muss also $event->setNotified() und irgendwelche
    Rückgabedaten in $event->data oder $event->setData() setzen.

pageutil.addvar_filter
    Verwendet zum Überschreiben von Dingen wie System- oder Modul-Stylesheets oder JavaScript.
    Subjekt ist der $varname, und $event->data ein Array mit durch den Filter zu modifizierenden Werten.
    Einfach testen mit etwas wie
        if (($key = array_search('system/Users/javascript/somescript.js', $event->data)) !== false) {
            $event->data[$key] = 'config/javascript/myoverride.js';
        }
    Dieser Filter kann verwendet werden um alle CSS- oder JS-Skripte oder andere, an PageUtil::addVar()
    gesendete, Variablen-Typen zu überschreiben.

setup.errorreporting
    Aufgerufen während System::init(). Benutzt zur Aktivierung von set_error_handler(). Das Event muss setNotified().

system.outputfilter
    Filter-Event für HTML-Encoding der Output Filter

systemerror
    args bekommt array('errorno' => $errno, 'errstr' => $errstr, 'errfile' => $errfile, 'errline' => $errline, 'errcontext' => $errcontext)

theme.ajax_request
    Aufgerufen über einen nativen Ajax-Request aus einem Theme. Dies tritt auf, wenn der folgende Aufruf gemacht wird
    ajax.php?module=theme&func=dispatch&.....
    Handler sollten im Theme registriert werden.

theme.init
    Tritt auf, bevor Theme#__construct() beendet wird. Das Subjekt ist $this, args sind
    array('theme' => $theme, 'usefilters' => $usefilters, 'themeinfo' => $themeinfo)

theme.load_config
   Läuft bevor Theme#_load_config() komplettiert wird. Das Subjekt ist die Theme-Instanz.

theme.prefooter
    Tritt auf in Theme::themefooter() direkt nach dem Erhalten von $maincontent. Das Subjekt
    des Ereignisses ist $this (Theme-Instanz) und hat Event-Daten, die man mit $event->setData()
    im Event Handler modifizieren kann.

view.init
    Tritt auf, bevor Zikula_View#__construct() beendet wird. Das Subjekt ist $this, args sind
    array('module' => $module, 'modinfo' => $modinfo, 'themeinfo' => $themeinfo)

view.fetch
    Filter eines Ergebnisses eines Fetch. Erhält eine Instanz von Zikula_View als Subjekt, args sind
    array('template' => $template), $data war das zu filternde Ergebnis des Fetch.

user.login
    Tritt direkt nach Login auf, $event['user'] ist die UID des angemeldeten Benutzers.
    $event['authmodule'] mit dem Namen des Moduls, das authentifiziert hat.
    $event['loginid'] mit dem Äquivalent des Benutzernamens, der authentifiziert wurde (nicht alle authmodules benutzen loginid,
    und daher kann dies nicht immer gegeben sein). Falls die Authentifizierung mit dem Users-Modul von Zikula versucht wurde, dann
    enthält $event['loginid'] den Benutzernamen (uname).

user.logout
    Tritt direkt nach Logout auf, $event['user'] ist die UID des abgemeldeten Benutzers.
    $event['authmodule'] mit dem Namen des Moduls, das abgemeldet hat (zusätzlich zum Zikula Core).

user.logout.failed
    Tritt direkt nach fehlgeschlagenem Logout auf, $event['user'] ist die UID des Benutzers, der die Abmeldung versucht hat.
    $event['authmodule'] mit dem Namen des Moduls, das die Abmeldung versucht hat.

user.login.failed
    Tritt bei fehlgeschlagenem Login auf. $event['authmodule'] with the name of the module that attempted to authenticate.
    $event['loginid'] mit dem Äquivalent des Benutzernamens, der abzumelden versucht wurde (nicht alle authmodules benutzen loginid,
    und daher kann dies nicht immer gegeben sein). Falls die Authentifizierung mit dem Users-Modul von Zikula versucht wurde, dann
    enthält $event['loginid'] den Benutzernamen (uname).

user.gettheme
    Wird mit notifyUntil aufgerufen, also sollte man $event->setNotified() im Event Handler ausführen.
    Erhält in $event['name'] den gewählten Theme-Namen, kann diesen auch verändern.

user.create
    Tritt auf, nachdem ein Benutzer erstellt wurde. Wird nicht auf die Erstellung einer wartenden Registrierung angewendet.
    Der volle Datensatz des erstellten Benutzers ist als Subjekt verfügbar.

user.update
    Tritt auf, nachdem ein Benutzer geändert wurde. Der volle Datensatz des geänderten Benutzers ist als Subjekt verfügbar.

user.delete
    Tritt auf, nachdem ein Benutzer vom System gelöscht wurde. Der volle Datensatz des gelöschten Benutzers ist als Subjekt verfügbar.
