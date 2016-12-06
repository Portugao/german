==========================================================================================
WICHTIG
Zur Kenntnisnahme: Die englischsprachigen Dateien im Verzeichnis docs/en/dev/ sind 
aktueller, als das hier vorliegende Material.
==========================================================================================


Zikula Plugin System
--------------------

Das Plugin-System in Zikula basiert auf dem System Zikula_EventManager.

Plugins können für verschiedene Zwecke eingesetzt werden. Zum Beispiel könnten sie
ganz simpel zur Registrierung eines Klassen-Namensraums oder zum Hinzufügen einiger
Suchpfade für Smarty-Plugins verwendet werden. Sie können auch benutzt werden, um
Features zu bestehenden Modulen hinzuzufügen. Damit können Module noch einmal modularisiert
werden, ein Beispiel wäre das Hinzufügen von Versandmethoden zu einem Shop-System.

Es gibt zwei Arten von Plugins:

1.  System Plugins (nicht verwechseln mit Modulen in system/).
    Diese liegen im Verzeichnis plugins/
    Die Klassen heißen SystemPlugin_$PluginName_Plugin
    z.B. plugins/Example/Plugin.php (beinhaltet class SystemPlugin_Example_Plugin extends Zikula_Plugin)

    System Plugins werden nach System::init() aufgerufen, bevor die System Hooks initialisiert werden.

    System Plugins können benutzt werden zum Hinzufügen von Template Plugins oder JS-Bibliotheken
    für die komplette Zikula-Installation.

2.  Modul Plugins
    Diese können sich in system/$modname/plugins oder modules/$modame/plugins befinden.
    Die Klassen heißen ModulePlugin_$Modname_$PluginName_Plugin
    z.B. modules/News/plugins/Example/Plugin.php (beinhaltet class ModulePlugin_News_Example_Plugin extends Zikula_Plugin)

    Modul Plugins werden nur geladen, wenn die Methode ModUtil::loadGeneric für dieses Modul aufgerufen wurde.

    Modul Plugins erlauben Drittpartien ein Modul zu erweitern oder Funktionalität hinzuzufügen.
    Modul Plugins bieten lokale Funktionalität für das Modul und zielen (allgemein) nicht auf das komplette
    Zikula-System, da sie nur initialisiert werden, wenn das Modul, oder eine API davon, aufgerufen werden.

Plugin-Klassen sind wie Event-Handler, aber erben von der Klasse Zikula_Plugin,
aber am Ende erben sie von der gleichen abstrakten Oberklasse Zikula_EventHandler.
Der Unterschied ist, dass ein Plugin eine konkrete Dateihierarchie besitzt, in der man
relevante Dateien und Bibliotheken speichern kann.

Plugins unterscheiden sich von reinen Event-Handlern (Instanzen von Zikula_EventHandler),
da Zikula_EventHandlers nicht aktiviert oder deaktiviert werden können und nur aus einer Datei bestehen.
Reine Handler sind also immer aktiv und mehr low level als Plugins.

Instanzen von Zikula_Plugin können ihren Zustand verändern. Die abstrakte Oberklasse Zikula_Plugin bietet
viele nützliche Funktionen, wie Übersetzung, automatisches Domain-Binding, usw.

Nutzung für Plugins
-------------------
Bereitstellung von Bibliotheken für PHP, JS, CSS, usw.
Erweiterung von Funktionalität, sowohl systemweit (kompletter Zikula Core) oder für individuelle Module.

Architektur
-----------
Plugins bieten ein ziemlich freies System. Man braucht nur das zu tun, was man benötigt. Das Herz eines
Plugins ist die Klasse in Plugin.php.

Plugins bieten die folgenden Methoden:

initialize()

get*() Methoden.

install()
upgrade()
uninstall()
enable()
disable()

Die Plugin Klasse bietet die folgenden Hooks:
preInitialize()
postInitialize()

preInstall()
postInstall()

preUpgrade()
postUpgrade()

preInstall()
postInstall()

postEnable()

postDisable()

Wenn ein Plugin Lokalisierung benötigt, wird die übliche Ordnerstruktur innerhalb des Plugins benötigt.
Die Gettext-Domain dafür lautet:
systemplugin_$name or
moduleplugin_$modname_$pluginname

Per Standard ist die protected Eigenschaft $gettextEnabled = true; und daher werden diese Domain-relevanten
Dinge automatisch erledigt. Ausgeschaltet werden kann dies einfach durch Setzen der Eigenschaft auf false
in einer Unterklasse.

Zum Zugriff auf die Übersetzung kann man die Shortcuts `$this->__()` etc. nutzen.

Die POT-Datei wäre dann vom Hauptordner des Plugins aus gesehen in
locale/$domain.pot

Plugins unterstützen NICHT DBUtil oder die alten Datenbank-Definitionen in tables.php. Man MUSS also Doctrine-Modelle
nutzen, falls man Persistenz benötigt.

PLUGIN (modvar) VARIABLEN
-------------------------
Um die korrekten Namen für ModVars zu erhalten, nutzt man $this->serviceId. Dies führt dann automatisch zu
den richtigen Bezeichnern.
    ModUtil::set/getVar("systemplugin.$pluginname", ...);
    ModUtil::set/getVar("moduleplugin.$modname.$pluginname", ...);

Zum Beispiel:
    ModUtil::set/getVar($this->serviceId, 'myvar');

RENDERING
---------
Wenn an Ausgaben aus Templates produzieren muss, erstellt man einen Ordner templates/ und speichert dort die
Template-Dateien. Man muss in dem Fall den Ort explizit angeben:

z.B.
    // module plugin
    $view = Zikula_View_Plugin::getModulePluginInstance($this->moduleName, $this->pluginName);
    $view->fetch('myview.tpl');

    // system plugin
    $view = Zikula_View_Plugin::getSystemPluginInstance($this->pluginName);
    $view->fetch('myview.tpl');

    Dies setzt die korrekte Domains, aber in den Templates braucht man daher NICHT domain= innerhalb
    der Gettext-Aufrufe.

Wenn man eine Render-Instanz erhält, wird der Plugin-Pfad automatisch als templates/plugins innerhalb
des Plugin-Verzeichnisses hinzugefügt.

Hinweis: man kann auch eine Controller-Instanz (Controller.php) nutzen, um an die View zu gelangen. Controller haben
Zugriff auf alle Convenience-Methoden aus der Klasse Zikula_Controller. Die Controller-Methode liefert
dann die fertige Ausgabe, die man dann weiterleiten kann.

Anstatt:
    $event->setData($view->fetch('anotherfunction.tpl'));
    $event->setNotified();

Kann man tun:
    $controller = new SystemPlugin_Example_Controller($this->serviceManager);
    $event->setData($controller->someview());
    $event->setNotified();

Das ist deswegen schön, weil alle Renderer-Domains usw. vorkonfiguriert sind und man viele hilfreiche Funktionen
verwenden kann, wie etwa $this->__().

KONFIGURATION DER PLUGIN-ADMINISTRATION
---------------------------------------
Manchmal ist es notwendig eine Seite für die Konfiguration eines Plugins bereitzustellen.
Diese Verwaltung ist verfügbar, wenn an auf das Settings-Icon in der Liste von Plugins klickt,
verfügbar unter Admin -> Modules -> Module Plugins/System Plugins.

Als erstes, um ein Plugin konfigurierbar zu machen, muss das Interface Zikula_Plugin_Configurable
implementiert werden, das eine Methode namens getConfigurationController() erfordert. Diese Methode
sollte eine Instanz des Controllers zurückliefern, im DocBlock des Interface gibt es ein entsprechendes
Beispiel.

Als nächstes wird der Controller erstellt innerhalb des lib-Verzeichnisses des Plugins lib/$PluginName/Controller.php

    class SystemPlugin_Example_Controller extends Zikula_Plugin_Controller

oder für Modul-Plugins so etwas wie

    class ModulePlugin_ExampleMod_ExamplePlugin_Controller extends Zikula_Plugin_Controller

Die zu integrierende Methode heißt 'configure()':

    class SystemPlugin_SwiftMailer_Controller extends Zikula_Plugin_Controller
    {
        public function configure()
        {
            return $this->view->fetch('configure.tpl');
        }
    }

Es gibt keine Notwendigkeit für einen Security-Check an dieser Stelle, da man diese Funktionalität nur aus
der Administration heraus erreichen kann.

Wenn man mehrere Seiten zur Administration benötigt, kann man das durch die Erstellung von Links erreichen:
Für System Plugins:
 ?module=Modules&type=adminplugin&func=dispatch&_plugin=<PLUGINNAME>&_action=<ACTIONNAME>
Für Modul Plugins:
 ?module=Modules&type=adminplugin&func=dispatch&_module=<MODULENAME>&_plugin=<PLUGINNAME>&_action=<ACTIONNAME>
