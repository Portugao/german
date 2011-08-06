ALLGEMEIN
=========
- Das Format der Datei config.php hat sich geändert, daher müssen die Werte in
  der bereitgestellten config.php komplettiert werden. Zu beachten ist, dass die
  Base64-Kodierung nicht mehr verwendet wird und daher alle Angaben in reiner
  Textform zu erfolgen haben (Hintergrund ist, dass Base64 keine Verschlüsselung
  beinhaltet).

TEMPLATES
=========
- Die Plugin-Delimiter in den Modul-Templates müssen auf { und } geändert werden.
  Für Aufrufe von Variablen und Plugins innerhalb von JavaScript-Blöcken
  (<script></script>) oder CSS-Blöcken (<style></style>) gibt es die Alternativ-
  Varianten {{ und }}.

- Das pn-Präfix wurde bei allen Render- und Theme-Plugins entfernt. Das pndebug-
  Plugin wurde umbenannt in zdebug. Alle veralteten Plugins können im Verzeichnis
  lib/legacy/plugins angesehen werden. Bitte alle eigenen Templates entsprechend
  anpassen.

- Um einen einfachen Übergang zu den neuen Templates zu gewährleisten verwendet
  Zikula einen Prefilter, der die alten Delimiter in die neuen konvertiert und
  auch das pn-Präfix aus den Plugin-Aufrufen entfernt. Dies betrifft auch Module
  von Drittpartien, daher muss das pn-Präfix aus eigenen Plugins entfernt werden,
  damit selbige gefunden werden. Als Workaround kann man die Plugin-Datei kopieren
  und sie zusammen mit dem Funktionsnamen darin umbenennen.

- Das Plugin {gt} benötigt nun kein domain="" mehr, die Domain wird automatisch ermittelt.

- Statt dem Modifier 'pndate_format' muss nun 'dateformat' verwendet werden.

- Ausgabefilterung wird nun mit den Modifiern safetext und safehtml erledigt.

- Die Verwendung von pnML() und {ml} ist nun veraltet und wird nicht mehr funktionieren,
  da Zikula Define-basierte Sprachpakete nicht mehr unterstützt.
  Themes und Module müssen nun aktualisiert werden und Gettext nutzen.

- Template-Dateien sollten von *.htm umbenannt werden in *.tpl

- Wenn man Conditional Comments für Browserhacks nutzen muss, kann man nun einen Smarty-Block
  dazu verwenden, zum Beispiel
  {browserhack condition="if lte IE 7"}foo{/browserback}
  Dieser Block versteht auch den Parameter assign="var", damit man die Ausgabe zuweisen statt
  anzeigen kann.

- Das Plugin {addition_headers} funktioniert nicht mehr und muss daher aus allen Themes
  entfernt werden.

- Alle Vorkommen von "javascript/style.css" müssen ersetzt werden durch "styles/core.css".

- Das Plugin {pager} benötigt nun den Parameter shift nicht mehr.

- Es gibt nun eine Variable $metatags für allgemeine SEO-Zwecke.

- Themes sollten aktualisiert werden, damit sie {$metatags.description} und {$metatags.keywords}
  einsetzen.

- Der Titel einer Seite kommt nun von {pagegetvar name="title"} und nicht mehr {title}.

- Es gibt nun eine Variable $coredata für verschiedene Daten, die in Templates relevant sind.

- Es gibt nun eine Variable $modvars mit allen Modulvariablen.

- Die Variable $pncore ist veraltet, statt dessen ist $coredata zu nutzen.

- Die folgenden Variablen sind für die Klasse Zikula_View reserviert und dürfen nicht zugewiesen werden.
  - servicemanager
  - eventmanager
  - metatags
  - coredata
  - zikula_view
  - zikula_core
  - modvars

- Das Plugin {configgetvar} ist veraltet, statt dessen kann {$modvars.ZConfig.<name>} verwendet werden.

- Das Plugin {blockshow} benötigt nun den Parameter "position".

- Die Page Variables für Themes wurden ein wenig verändern. Alle Metatags können aus dem Array
  {$metatags.foo} gewonnen werden, das in allen Templates verfügbar ist. Metatags können nach Belieben
  im Template verändert werden über {setmetatag name='foo' value='bar'}. In Controllern geht es
  mit `$this->serviceManager['zikula_view.metatags][$foo] = $bar;`, eine spezielle API ist nicht
  notwendig.


MODULE
======
- Die Ordnerstruktur in Modulen hat sich geändert. Zunächst sollte man daher einen Ordner lib/$modname
  innerhalb des Modulordners erstellen. Zum Beispiel für das Modul MyModule fügt man die Ordner lib/
  und lib/MyModule/ hinzu.

    Die alten Ordner sind immer noch in der Abwärtskompatibilität unterstützt, allerdings ist die neue
    wesentlich effizienter, weil das Dateisystem nicht gescannt werden muss.

    - Das Verzeichnis pndocs in docs umbenennen
    - Das Verzeichnis pnincludes in lib/ umbenennen, oder lib/vendor/ für 3rd Party Bibliotheken
    - Das Verzeichnis pnstyle in style umbenennen
    - Das Verzeichnis pnjavascript in javascript umbenennen
    - Das Verzeichnis pntemplates in templates umbenennen

- Die Datei pntables.php umbenennen in tables.php. Den Namen der Funktion ändern in $modulename_tables().

- Der Hauptordner des Moduls MUSS nun mit einem Großbuchstaben beginnen.

- Die Datei pnversion.php umbenennen in lib/MyModule/Version.php.
  Den Inhalt ändern wie folgt:

    class MyModule_Version extends Zikula_Version
    {
        public function getMetaData()
        {
            $meta = array();
            $meta['displayname']    = $this->__('MyModule example');
            $meta['description']    = $this->__("Example MyModule description.");
            //! module name that appears in URL
            $meta['url']            = $this->__('mymodule');
            $meta['version']        = '1.5.3';
            $meta['capabilities']   = array('profile' => array('version' => '1.0'));
            $meta['securityschema'] = array('MyModule::' => '::');
            return $meta;
        }
    }

  HINWEIS: Versionsnummern müssen die Form 'a.b.c' haben, z.B. '1.0.0'.

  Zu beachten ist die neue Eigenschaft capabilities. Dies ist ein indiziertes Array mit Arrays.
  Es dient der Angabe, ob und welche besonderen Fähigkeiten ein Modul unterstützt.
  array('profile' => array('version' => '1.0', 'anotherkey' => 'anothervalue')
        'message' => array('version' => '1.0', 'anotherkey' => 'anothervalue'));

  Die folgenden APIs können in dem Zusammenhang verwendet werden.
    ModUtil::getModulesCapableOf()
    ModUtil::isCapable()
    ModUtil::getCapabilitiesOf()
    {html_select_modules capability='...'}

(Man beachte in den folgenden Beispielen, dass $type immer mit einem Großbuchstaben anfangen muss
 und alle weiteren Buchstaben klein sein müssen).

- Die Modul-Controller (pnuser.php, pnadmin.php etc) werden verschoben nach lib/$modname/Controller/$type
  z.B.
    pnuser.php => lib/MyModule/Controller/User.php

  In den Controllern werden die Funktionen gekapselt in einer Klasse
  class $modname_Controller_$type extends Zikula_Controller
  z.B.
    class MyModule_Controller_User extends Zikula_Controller

  Make all functions public which should be accessible from the browser.
  Internal methods which should not be accessible outside the class should be made
  protected or private.  If you subclass Zikula_Controller, inherited methods
  will not be accessible even if they are public.

- Die APIs (pnuserapi.php, pnadminapi.php etc) verschieben nach lib/$modname/Api/$type
  z.B.
    pnuserapi.php => lib/MyModule/Api/User.php

  Auch bei den APIs werden die Funktionen in Klassen gesetzt
  class $modname_Api_$type extends Zikula_Api
  z.B.
    class MyModule_Api_User extends Zikula_Api

  Alle Funktionen, die über ModUtil::apiFunc() erreichbar sein sollen, werden auf public gestellt.
  Interne Methoden, die nicht außerhalb der Klasse aufgerufen werden sollen, sollten als protected
  oder private markiert werden.

- Die Blöcke des Modules (pnblocks/foo.php etc) verschieben nach lib/$modname/$type
  z.B.
    blocks/foo.php => lib/MyModule/Block/Foo.php

  Die Block-Funktionen in Klassenmethoden umwandeln.
  class $modname_Block_$type extends Zikula_Block
  z.B.
    class MyModule_Block_Foo extends Zikula_Block

  Alle Funktionen, die außerhalb der Klasse erreichbar sein sollen, werden auf public gestellt.
  Interne Methoden, die nicht außerhalb der Klasse aufgerufen werden sollen, sollten als protected
  oder private markiert werden.

- In allen Controllern, APIs und Blöcken werden ferner die Gettext-Funktionsaufrufe geändert.
  Module mit der objektorientierten Struktur haben Zugriff auf einfache Methoden, bei deren
  Verwendung die Domain automatisch berechnet wird.

    $this->__($msgid)
    $this->__f($msgid, $params)
    $this->_n($singular, $plural, $count)
    $this->_fn($sin, $plu, $n, $params)

  Alle Aufrufe von $dom = ZLanguage::getModuleDomain() können entfernt werden, außer in der
  Datei version.php

- In allen Controllern und Blöcken können Aufrufe von pnRender::getInstance() komplett entfernt
  werden. Das Objekt $this->view ist automatisch verfügbar und man kann es wie gewohnt nutzen:
  $this->view->assign(), $this->view->fetch() etc.

- Die Datei pninit.php umbenennen und nach lib/MyModule/Installer.php verschieben.
  Alle Funktionen kapseln in der Klasse
  class $modname_Installer extends Zikula_Installer
  z.B.
    class MyModule_Installer extends Zikula_Installer
  
  Die Methode init() umbenennen in install().
  Die Methode delete() umbenennen in uninstall().

  Alle Funktionen, die von außerhalb der Klasse erreichbar sein sollen, werden auf public gestellt, die übrigen
  protected oder private. Allgemein sollten nur install(), upgrade() und uninstall() mit public versehen werden.

  Wenn ein Modul nicht konform zu den vorherigen Standards ist, muss man folgende Schritte durchführen
  - In Version.php hinzufügen: $meta['oldnames'] = array(oldnames,....);
  - Bestehende Modulvariablen migrieren mit

        $modvars = ModUtil::getVar($oldname);
        if ($modvars) {
            foreach ($modvars as $key => $value) {
                $this->setVar($key, $value);
            }
            ModUtil::delVar($oldname);
        }

- Interaktive Installation/Aktualisierung/Deinstallation
  Falls es interaktive Installationsmethoden gibt, sollten diese hinzugefügt werden zu lib/$modname/Controller/Interactiveinstaller.php
  z.B.
    lib/MyModule/Controller/Interactiveinstaller.php
    beinhaltet class MyModule_Controller_Interactiveinstaller extends Zikula_InteractiveInstaller
    (man beachte die Groß- und Kleinschreibung dabei).

  Falls ein interaktiver Installer über eine Methode namens install()/upgrade()/uninstall() verfügt,
  überschreibt dies die gleichnamigen Methoden in der primären Installer.php.  Man beachte, dass dieses
  Override nur für die initiale Installation, Aktualisierung und Deinstallation geschieht, wenn der Benutzer
  auf den entsprechenden Button geklickt hat. Im letzten Schritt des interaktiven Prozesses ruft der
  Installer die Methoden von Installer.php auf um den finalen Prozess durchzuführen.

  Nachfolgende Schritte können beliebig in der interaktiven Installer-Klasse benannt werden. Zum Beispiel könnte
  man folgende Methoden haben:
    upgrade_step1()
    upgrade_step2()
    etc.

  Aus Sicherheitsgründen wird eine Session-Variable namens 'interactive_process' gesetzt, sobald ein interaktiver
  Prozess startet. Wenn der interaktive Installer beendet wird, entweder erfolgreich oder auf Grund eines Fehlers,
  muss diese Variable wieder entfernt werden mit SessionUtil::delVar('interactive_process');

- Falls man irgendwelche allgemeinen Initialisierungsarbeiten durchführen möchte, wie zum Beispiel die Bereit-
  stellung einer Bibliothek, kann man eine Datei bootstrap.php erstellen. Diese wird inkludiert, wenn das Modul
  das erste mal 'geladen' wird.

- Wenn an Kategorisierung nutzt, muss diese refaktorisiert werden und die folgenden Klassen nutzen:
    PNCategory => Categories_DBObject_Category
    PNCategoryArray => Categories_DBObject_CategoryArray
    PNCategoryRegistry => Categories_DBObject_Registry
    PNCategoryRegistryArray => Categories_DBObject_RegistryArray

    Alle Referenzen zu Loader::loadClassFromModule und Loader::loadClassFromModuleArray() sind zu entfernen.

- Falls man irgendwelche Filter für FilterUtil hat, darin alle Vorkommen von $this->pntable ersetzen durch
  $this->dbtable.

- FilterUtil kann mit Doctrine zusammen arbeiten, wenn es den Namen der Record-Klasse im Konstruktor übergeben
  bekommt. Zum Beispiel:

    [php]
    $query = Doctrine_Query::create()
         ->from('MyModule_Model_MyModel tbl');

    $filter = new FilterUtil('MyModule', 'MyModule_Model_MyModel', $filter_args);
    $fwhere = $filter->GetSQL();

    $query->where($where)
          ->addWhere($fwhere);

    Um FilterUtil über in der Doctrine Query vorhandene JOINs zu unterrichten, kann man das Alias der
    Haupttabelle sowie die Join-Informationen in $args übergeben:

    [php]
    $joinInfo[] = array('join_table'         =>  'MyModule_Model_AnotherModel',
                        'join_alias'         =>  'another',
                        'join_field'         =>  array('fieldName1', 'fieldName2'),
                        'object_field_name'  =>  array('fieldAlias1', 'fieldAlias2'));

    $filter_args = array(
                         'varname' => 'filter',
                         'alias'   => 'tbl',
                         'join'    => $joinInfo
                        );

    $query->select('another.fieldName1 fieldAlias1, another.fieldName2 fieldAlias2')
          ->leftJoin('MyModule_Model_AnotherModel another ON another.id = tbl.another_id')

    Der JOIN kann dann auch zum Filtern verwendet werden mit filter=fieldAlias1:eq:value

- Alle Referenzen zu Loader::loadClass() entfernen - Klassen werden automatisch geladen.

- Nun kann an die folgenden Convenience-Methoden von OO-Controllern und APIs nutzen.
    (Details in lib/Zikula/Base.php)

    $this->throwNotFound()
    $this->throwNotFoundIf()
    $this->throwNotFoundUnless()

    $this->throwForbidden()
    $this->throwForbiddenIf()
    $this->throwForbiddenUnless()

    $this->redirect()
    $this->redirectIf()
    $this->redirectUnless()

HOOKS
=====
Hooks in Zikula 1.3.0 sind nicht kompatibel mit dem Legacy Hook-System aus früheren Zikula-Versionen.
Allgemein werden Module, die für Zikula 1.3.0 geschrieben wurden, das alte Hook-System nicht mehr aufrufen.
Das alte Hook-System wird auch nicht mehr funktionieren, wenn der Legacy-Modus ausgeschaltet ist. Mehr
Informationen lassen sich der HOOKS-Dokumentation entnehmen.

DBOBJECT
========
- Die Klassen unbenennen in $modname_DBObject_$type und verschieben nach lib/$modname/DBObject/$type.php
  z.B.
    MyModule_DBObject_Payments und verschieben nach lib/MyModule/DBObject/Payments.php
    MyModule_DBObject_PaymentsArray und verschieben nach lib/MyModule/DBObject/PaymentsArray.php

- Den Konstruktor der DBObjects (früher PNObject) von ClassName() zu __construct() ändern und den Konstruktor
  der Oberklasse aufrufen. Außerdem $this->PNObject() ändern in parent::__construct().

- Die Methode Loader::loadClassFromModule nicht mehr verwenden um Klassennamen für DBObjects zu erhalten.
  Einfach den Klassennamen bauen oder hartkodieren.

DBUTIL
======
- DBUtil::executeSQL hat früher ein ADODB-Objekt zurückgeliefert, gibt nun aber ein PHP PDO Objekt zurück.
  Das heißt, dass Code, der früher über das ADODB-Objekt iteriert hat, nun nicht mehr funktioniert.
  Man sollte DBUtil::marshallObjects() nach einem manuellen SELECT über DBUtil::executeSQL() nutzen, z.B.:

    [php]
    $res = DBUtil::executeSql ($sql);
    $objectArray = DBUtil::marshallObjects ($res, $ca, ...);

  Alternativ kann man das PDO-Rückgabeobjekt nutzen. PDO ist in PHP eingebaut, daher kann der Zugriff auf
  ein PDO-Objekt als API-konform angesehen werden. Die Dokumentation zu PDO ist unter http://php.net/PDO
  verfügbar.


VERSCHIEDENES
=============
- Die APIs theme_userapi_clear_compiled(), theme_userapi_clear_cache() sowie
  pnrender_userapi_clear_compiled() und pnrender_userapi_clear_cache() im Theme-Modul sind veraltet.
  Bitte nun Zikula_View::clear_compiled(), Zikula_View::clear_cache() und
  Theme::clear_compiled(), Theme::clear_cache() nutzen.

- Man kann nun einen Requirement Check für Blöcke einbauen, so dass eine Nachricht im Admin-Bereich
  eingeblendet wird, falls notwendig. Zum Beispiel wird der Language Block nur sichtbar sein, sofern
  die Mehrsprachigkeit aktiviert ist. Daher wurde für diesen Block eine Requirement Nachricht hinzu-
  gefügt um den Admin zu informieren, dass dieser Block nicht sichtbar sein wird, bis die Mehrsprachig-
  keit aktiviert wurde.

- Man kann nun den Core mit Event Handlern anpassen. Diese können in config/EventHandlers geladen werden.
  Die Klassen sollten genauso heißen wie der Dateiname und die Oberklasse CustomEventHandler erweitern.

- In Modulen kann man Event Handler automatisch laden durch Aufruf von
  EventManagerUtil::attachCustomHandlers($path), das ein Ordner mit Event Handlern sein sollte.
  Falls man statische Methoden hat, können sie direkt mit EventManagerUtil::attach($name, $callable)
  geladen werden [siehe ** unten].
  Diese Methode könnte benutzt werden um Event Handler dynamisch von einer ConfigVar() Methode zu laden,
  die ein array('name' => $name, 'callable' => $callable) enthält.

  ** Man beachte, dass ein Callable in dem folgenden Format vorliegen muss:
       Foo::bar() = array('Foo', 'bar')
       $foo->bar = array($foo, 'bar')
       myfunction() = 'myfunction'

- Der Name der Klassen lautet Modulename_$type (Groß- und Kleinschreibung beachten).
  Das Argument $func entspricht den public-Methoden in den Klassen.
  Auch anschauen sollte man sich den Ordner EventHandlers, welcher zeigt, wie eine Methode
  zu einem Controller hinzugefügt werden kann über notifyUntil() für Events namens
  'controller.method_not_found' und 'controllerapi.method_not_found' für APIs.

- OO-Module initialisieren automatisch einen AutoLoader, so dass ein Aufruf der Klasse
  Example_DBObject_Users die Datei module/Example/lib/Example/DBObject/Users.php lädt -
  die enthaltene Klasse sollte Example_DBObject_Users heißen.

  Zu beachten ist, dass durch die Nutzung von ModUtil::func() und ModUtil::apiFunc()
  die Benennung von Controller- und API-Klassen mit Camel Case erfolgen muss.
  Z.B. type = adminform bedeutet, dass die Datei Adminform genannt werden *muss* und
  NICHT AdminForm. Der Klassenname wäre dann Modulename_Adminform.

- Man kann nun optional eine Datei namens bootstrap.php im Hauptordner des Moduls anlegen.
  Diese wird beim Laden des Moduls mit ModUtil::load/ModUtil::loadGeneric() automatisch
  eingebunden.

- Man kann zusätzliche AutoLoader mit ZLoader::addAutoloader($namespace, $path) registrieren,
  wobei $namespace der erste Teil des PEAR-Klassennamens und $path der Pfad zu dem
  beinhaltenden Ordner ist. Der geeignete Ort für solche Initialisierungen ist bootstrap.php.


API ÄNDERUNGEN
==============
Es gibt ein Shell-Skript im SVN-Verzeichnis tool/, mit dem man diese Umbenennungen automatisch
und präzise vornehmen kann.

- pnMod* ist veraltet, siehe ModUtil::*
- pnUser* ist veraltet, siehe UserUtil::*
- pnBlock ist veraltet, siehe BlockUtil::*
- pn* ist veraltet, siehe System::*
- Die Legacy-APIs zur Abwärtskompatibilität liegen in legacy/Compat.php und legacy/Api.php.

- Die Präfixe sind NICHT verschwunden für funktionsbasierte Controller wie pnadmin etc.
  Dies ist beabsichtigt um den Wechsel zu den neuen Klassen schmackhafter zu machen.


WORKFLOW ÄNDERUNGEN
===================
- Wenn man WorkflowUtil benutzt, gibt es vier Änderungen für Zikula 1.3:
   - getActionsByStateArray:
       ist nun veraltet.
   - getActionsByState:
       liefert nun alle Action-Daten als array($action.id => $action),
       nicht mehr als array(id => id).
   - getActionTitlesByState:
       nützliche Methode zur Erstellung der Buttons für den aktuellen Zustand,
       liefert die erlaubten Actions als array($action.id => $action.title).
   - getActionsForObject:
       liefert nun das Ergebnis von getActionsByState.
   Wenn man Werte verwendet hat, ersetzt man diese mit den Result Keys, und
   kann die Vorteile nutzen, die sich daraus ergeben, dass die Daten der Actions
   nun verfügbar sind.
- Workflow-Actions können zusätzliche Parameter im XML definieren:
  <parameter className="z-bt-ok" titleText="Klick mich">Button</parameter>
  Dabei wird Groß- und Kleinschreibung berücksichtigt.


AJAX WORKFLOW ÄNDERUNGEN
========================

Der Ajax-Workflow hat sich in Zikula 1.3 sowohl auf Seite von PHP als auch JavaScript
verändert.

Auf der JavaScript-Seite:
- Alle Requests sollten mit Zikula.Ajax.Request durchgeführt werden. Diese Klasse ist
  eine Erweiterung von dem Prototype Ajax.Request und erbt alle dessen Methoden,
  Optionen und Properties.
- Für durch Zikula.Ajax.Request versendete Requests wurde ein neuer Parameter "authid"
  eingeführt. Wenn man die ID eines Elementes angibt, das den authid-Token enthält,
  wird dieser automatisch zum Request hinzugefügt und auch aktualisiert, nachdem die
  Antwort empfangen wurde. Dies ist die empfohlene Methode zur Behandlung der
  Authentifizierungsschlüssel in Ajax-Requests.
- Die von Zikula.Ajax.Request zurückgelieferte Response hat nun neue Methoden für die
  Daten-Kollektion:
    - getAuthid - liefert den neuen authid-Token - üblicherweise muss man diese Methode
      nicht manuell ansprechen, da die authid automatisch aktualisiert werden sollte.
    - getMessage - liefert die Fehler oder Status Nachricht (oder Liste von Nachrichten),
      die im Modul-Controller durch LogUtil registriert wurde.
    - getData - liefert die Hauptdaten, die durch den Modul-Controller bereitgestellt werden.
    - isSuccess - prüft, ob der Request erfolgreich war oder nicht.
- Die Verwendung dieser Methoden ist der einzige empfohlene Weg zum Auslesen der Response.
  Natürlich hat die Response immer noch alle Methode und Properties des originalen
  Ajax.Response-Objektes.
- In einigen Fällen werden Ajax-Aufrufe ohne Zikula.Ajax.Request durchgeführt (z.B. einige
  vordefinierte Skripte, wie etwa Ajax.InPlaceEditor etc.) und die zurückgelieferte
  Response wurde nicht mit den Methoden von Zikula.Ajax.Response erweitert.
  In solchen Fällen nutzt man die Methode Zikula.Ajax.Response.extend um die Response
  manuell zu erweitern.

Auf der PHP-Seite:
- Es wurde eine ganze Reihe von Klassen entwickelt, die Antworten an Ajax-Requests unterstützen.
  Auch die Fehlerbehandlung wurde dabei verändert.
- Modul-Controller sollten im Erfolgsfall als Response immer einen oder zwei Typen von Objekten
  zurückliefern: Zikula_Response_Ajax_Base oder Zikula_Response_Ajax_Plain.
- Zikula_Response_Ajax_Base hat 3 Argumente:
      - $data - akzeptiert als Argument jeden Wert - eine einfache Variable oder ein Array,
        das Argument kann dann auf JS-Seite mit der Methode getData gelesen werden.
      - $message - optionaler Parameter, der die Übergabe einer Nachricht (oder eines Arrays
        mit Nachrichten) an die Response erlaubt; diese Nachricht werden als nächstes mit
        möglichen Nachrichten aus LogUtil verschmolzen.
      - $options - optionaler Parameter, der das Hinzufügen zusätzlicher Daten zur Response
        erlaubt.
  In den meisten Fällen sollte das Modul eine Antwort von diesem Typ zurückliefern. Außerdem
  wird diese Art von Response angenommen, wenn ein neuer authid-Token generiert wird.
- Falls es notwendig ist eine Response zu senden, die nur reinen Plain Text oder HTML enthält
  (zum Beispiel benötigen Ajax.Autocompleter von Scriptaculous solch eine Response), muss der
  Modul-Controller als Response ein Objekt der Klasse Zikula_Response_Ajax_Plain zurückgeben.
  Diese Klasse akzeptiert als $data Argument reinen Text. Für diesen Response-Typ wird kein
  neuer authid-Token generiert.
- Mögliche Fehler (nicht bezogen auf Datenvalidierung) im Modul-Controller müssen mit Exceptions
  behandelt werden. Man kann zuerst eine Fehlermeldung mit LogUtil registrieren und dann eine
  Exception werfen (z.B. Zikula_Exception_Forbidden bei fehlenden Zugriffsrechten oder
  Zikula_Exception_Fatal für ungültige authid-Tokens). Man kann auch eine Fehlermeldung direkt
  an die Exception übergeben.
- Falls der Modul-Controller einen Fehler auf Grund von Datenvalidierung deklarieren muss und/oder
  einige Daten an JS senden muss, dann sollte das Modul keine Exception werfen, sondern ein Objekt
  vom Typ Zikula_Response_Ajax_BadData zurückliefern. Diese Klasse erlaubt die Übergabe der gleichen
  Argumente wie die anderen Ajax-Response-Typen.

Beispiel (aus dem Permissions-Modul):
Einen Request von JS senden:
    // build parameters object
    var pars = {pid: permid};
    // call request class
    new Zikula.Ajax.Request(
        "ajax.php?module=permissions&func=deletepermission",
        {
            method: 'get',
            parameters: pars,
            authid 'permissionsauthid', // value of "permissionsauthid" will be
                                           added to request as authid and with
                                           response arrive it will be updated
            onComplete: permdelete_response
        }
    );

Den Request im Modul-Controller verarbeiten:
    // test permissions and throw an exception on failure
    if (!SecurityUtil::checkPermission('Permissions::','::', ACCESS_ADMIN)) {
        LogUtil::registerPermissionError(null, true);
        throw new Zikula_Exception_Forbidden();
    }

    // test authid and throw an exception on failure
    if (!SecurityUtil::confirmAuthKey()) {
        LogUtil::registerAuthidError();
        throw new Zikula_Exception_Fatal();
    }

    // when controller needs to return failure due to data validation:
    return new Zikula_Response_Ajax_BadData($data, 'message');

    // throw an exception from some other reason
    throw new Zikula_Exception_Fatal($this->__f('Error! Could not delete permission rule with ID %s.', $pid));

    // return response
    return new Zikula_Response_Ajax(array('pid' => $ pid));

Die Response in JS einlesen:
    // check if request was successful
    if (!req.isSuccess()) {
        Zikula.showajaxerror(req.getMessage());
        return;
    }
    // get data returned by module
    // if you passed eg array('pid'=>123), then you will have data.pid = 123
    var date = req.getData();

    // when ajax call was made without Zikula.Ajax.Request you have to
    // manually extend response
    transport = Zikula.Ajax.Response.extend(transport);
    // no you have access to new methods:
    transport.getData();


PAGEADDVAR ÄNDERUNGEN
=====================
Diese API wurde mit verschiedenen Funktionen erweitert. Die Änderungen sind komplett
abwärtskompatibel, aber man wird bemerken, dass die inkludierten Dateien sich verändert
haben im Vergleich zu früheren Referenzen.

Prototype und Scriptaculous wurden in eine gemeinsame komprimierte Datei kombiniert.
Nur validation.js und unittest.js wurden nicht mit einbezogen.

Das einfache Einbinden von Prototype inkludiert diese kombinierte Version. Man muss nun
Ajax, Prototype und Scriptaculous nicht mehr separat angeben, sondern spezifiziert nur
noch 'prototype'.

Um Livepipe hinzuzufügen, gibt man einfach 'livepipe' an. Alle Livepipe-Dateien wurden in
eine einzige komprimiert.

Um jQuery hinzuzufügen, gibt man einfach 'jquery' an. Dies setzt auch jQuery.noConflict()
automatisch, um die parallele Nutzung mit Prototype zu ermöglichen.

Seit Zikula 1.3 ist es empfohlen Core-Skripte mit definierten Shortcuts zu laden.
Auf diesem Weg werden alle Abhängigkeiten aufgelöst (und auch benötigte Stylesheets
werden geladen). Hier ist eine Liste der aktuell unterstützten Shortcuts:
- prototype,
- livepipe,
- zikula,
- zikula.ui,
- zikula.imageviewer,
- zikula.itemlist,
- zikula.tree,
- validation,
- jquery


ZIKULA_VIEW / ZIKULA_THEME KLASSEN
==================================
Dutzende von Getter- und Setter-Funktionen wurden hinzugefügt um einige Dinge besser zu kapseln
und eines Tages eine einfache Migration weg von Smarty 2 zu erlauben. Man sollte von direkten
Zugriffen auf Eigenschaften ablassen und immer die Getter/Setter verwenden.

Zikula_View (und damit auch Zikula_Theme, Form_View etc.) benutzen nun alle Zikula_Translatable,
was bedeutet, dass die Methoden zur Übersetzung immer verfügbar und für die korrekte Domain
vorkonfiguriert sind (z.B. $this->__() usw.).

Innerhalb eines Template-Plugins nutzt man einfach $view->__() etc.


FORMS
=====
Es gab einige sehr wichtige und mächtige Änderungen im Forms-Framework.

Form-Handler
------------
Das Interface Form_Handler wird nun erzwungen, daher müssen Handler von Form_Handler erben.

Die Klasse Form_Handler wurde mit einigen praktischen Zusätzen versehen.
  - Form_View::execute() konfiguriert nun den Handler
    - Injiziert die Form_View in die view-Property des Handlers
    - Konfiguriert den Handler mit der Domain der Form_View.
    - Ruft den setup()-Hook im Handler auf.
    - Der Handler führt nun preInitialize() und postInitialize() vor und nach der Methode
      initialize() aus.
    - Form-Handler implementieren nun Zikula_Translatable, daher kann man einfach
      $this->__() etc. nutzen. Die Methoden werden mit der Domain des Handlers konfiguriert.
  
Plugins
-------
Das Interface Form_Plugin wird nun erzwungen, daher müssen Plugins von Form_Plugin erben.

Die Klasse Form_Plugin hat ebenfalls neue Erweiterungen bekommen.
    - Form_View::registerPlugin() konfiguriert die Plugins nach Instantiierung.
    - Injiziert die Form_View in die view-Property des Plugins.
    - Konfiguriert das plugin mit der Domain der Form_View.
    - Ruft den setup()-Hook im Handler auf.
    - Die Hooks preInitialize() und postInitialize() werden vor und nach der Methode
      initialize() aufgerufen.
    - Form-Plugins implementieren nun Zikula_Translatable, daher kann man auch hier
      die Gettext-Funktionen einfach nutzen. Sie werden mit der Domain des Plugins konfiguriert.

In einigen Fällen, in denen Plugins wiederverwendet werden, ist zu beachten, dass sie mit
ihrer eigenen Domain konfiguriert werden müssen, hartkodiert in setup() wie etwa
`$this->domain = 'foo';`. Hintergrund ist, dass sie per Standard die Charakteristika der
View, von der sie aufgerufen wurden, übernehmen.

Plugins, Handler und Template-Plugins sollten nun alle separiert voneinander sein. Alles wird
über AutoLoading geladen.

Beispiel-Layout:

lib/Foo/Form/Handler/Admin/Config.php      Foo_Form_Handler_Admin_Config
lib/Foo/Form/Handler/User/View.php         Foo_Form_Handler_User_Config
lib/Foo/Form/Plugin/Youtube.php            Foo_Form_Plugin_Youtube
templates/plugins/function.formyoutube.php Das eigentliche Template-Plugin.

Ein Parameter 'zparameters' wurde hinzugefügt und stellt einen direkten Weg bereit, um die Werte
der Attribute der Form-Plugins zuzuweisen. Zum Beispiel:
$attributes = {class:z-bt-ok; confirmMessage:Sind Sie sicher?}
{formbutton commandName='delete' __text='Löschen' zparameters=$attributes}

Der {linkbutton} unterstützt nun ein Bild (durch das {img}-Plugin) und nutzt dabei die
neuen Parameter 'imgset' und 'imgsrc'. imgset ist per Standard 'icons/extrasmall'.
Beispiele:
{linkbutton commandName='edit' __text='Edit' imgsrc='edit.gif'}
oder mit dem Core-CSS:
{linkbutton commandName='edit' __text='Edit' class='z-icon-es-edit'}
{button commandName='cancel' __text='Cancel' class='z-bt-cancel'}

API KONFORMITÄT
===============
Die folgende Liste von Dingen werden als nicht Zikula-API-konform angesehen. Falls man sich auf
sie verlässt, gibt es keine Garantie, dass sie weiter so funktionieren, sogar bei kleinen Upgrades
zwischen Bugfix-Releases.

  - Zugriff auf Klasseneigenschaften der Klassen Smarty, Zikula_View, Zikula_View_* ist komplett
verboten, aber immer noch möglich, da Smarty viele Zugriffe erlaubt. Wir haben Getter und Setter
sowie neue Methoden in Zikula_View hinzugefügt um Einstellungen verändern zu können.
  - Die gleichen Regeln gelten für das Forms-Framework. Bitte alles über die bereitgestellten
    Getter und Setter ansprechen.
  - $GLOBALS['ZConfig'] und $GLOBALS['ZRuntime'].
  - Das von DBUtil::executeSQL() zurückgelieferte Zikula_Adapter_AdodbStatement.

VERSCHIEDENES
=============
Wenn man irgendwelche Front-Controller hat, sollte man beachten, dass der Bootstrapping-Prozess
sich geändert hat. Siehe index.php für ein Beispiel.

SICHERHEIT
==========
Man MUSS Eingabe-Variablen validieren und reinigen. Bitte NIE annehmen, dass etwas valide oder sicher
ist, nur weil es über FormUtil::getPassedValues() erhalten wurde.
FormUtil::getPassedValues() kann nun Filter und Bereinigungen mit den nativen PHP filter_* Funktionen
vornehmen oder man kann es auch manuell machen.
