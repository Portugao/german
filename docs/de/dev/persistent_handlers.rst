PERSISTENTE EVENT HANDLER
-------------------------
Zikula lädt normalerweise nur Module, auf die zugegriffen werden muss. Daher würden die
Event Listener von Modulen nicht allgemein bzw. immer registriert.
Allerdings gibt es Momente, in denen ein Modul oder ein Plugin eines Modules auf ein Ereignis
warten/horchen muss, das irgendwo anders im System aufgetreten ist. Zum Beispiel ist 'user.delete'
solch ein Ereignis, ein Modul kann im Handler Referenzen zu einer gelöschten Benutzer-ID auflösen.

Module können daher persistente Event Handler registrieren mit der API EventUtil::register*():

    EventUtil::registerPersistentModuleHandler($moduleName, $eventName, $callable)
    EventUtil::unregisterPersistentModuleHandler($moduleName, $eventName, $callable)
    EventUtil::registerPersistentPluginHandler($moduleName, $pluginName, $eventName, $callable)
    EventUtil::unregisterPersistentPluginHandler($moduleName, $pluginName, $eventName, $callable)

Callables sollten aussehen wie `array('ClassName', 'methodName')`, was nichts anderes darstellt als
eine Repräsentation von ClassName::MethodName($event).

Die einzige Einschränkung ist, dass die Handler PHP Callables von statischen Klassenmethoden sein müssen.

Diese Methodik kann auch als besserer Weg benutzt werden um ältere 'API Plugins' bereitzustellen, zum Beispiel
Needles in Multihook. Hier ein fiktives Beispiel als Alternative mit MultiHook:

Normalerweise scannt MultiHook das komplette Dateisystem und sucht nach Modulen, die multihookapis implementieren.
Statt dessen kann MultiHook einfach ein Ereignis namens 'multihook.get_providers' vorgeben.
Listener können dann einfach ein Array mit Klassennamen oder Callables zurückliefern, die alle
das Interface bzw. die abstrakte Klasse der MultiHook Needles implementieren.
MultiHook kann dann diese instantiieren (und bei jeder Instanz über Reflection sicherstellen, dass es sich
um eine Instanz von Multihook_NeedleApi handelt).

abstract class Multihook_NeedleApi
{
    protected $name;

    public function getName()
    {
        return $this->name;
    }

    abstract public function filter($input);
}

MyModule sollte nun einen persistenten Listener für 'module.multihook.get_providers' registrieren, mit dem folgenden
Code in Installer.php

    EventUtil::registerPersistentModuleHandler('MyModule', 'module.multihook.get_providers', array('MyModule_Listeners', 'getProvider'));

In einer separaten Datei lib/MyModule/Listeners.php wird der folgende Code platziert (zum Empfangen der $events).

    class MyModule_Listeners
    {
        public static function getProvider(Zikula_Event $event)
        {
            $event->data = array_merge($event->data, array('MyModule_Needles_Foo'));
        }
    }

Zurück zum MultiHook-Module. Die Implementierung könnte in etwa so aussehen:

    // create and dispatch the event
    $event = Zikula_Event('module.multihook.get_providers');
    $classes = $eventManager->notify($event)->getData();

    // now we got back any results we can process them like this
    foreach ($classes as $class) {
        $needle = new $class();
        if (!$needle instanceof MultiHook_NeedleApi) {
            //.. error
        }

        $output = $needle->filter($output);
    }

