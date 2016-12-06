==========================================================================================
WICHTIG
Zur Kenntnisnahme: Die englischsprachigen Dateien im Verzeichnis docs/en/dev/ sind 
aktueller, als das hier vorliegende Material.
==========================================================================================

PURES AJAX IN THEMES
====================
Es ist nun möglich Ajax direkt innerhalb eines Themes zu verarbeiten. Um einen Ajax Controller
aufzurufen, muss einfach die folgende URL zusammen mit eventuell zusätzlichen Parametern
geladen werden.

    ajax.php?module=theme&func=dispatch

Innerhalb des Themes muss ein Event Handler namens 'theme.ajax_request' implementiert werden.
Da immer nur ein Theme zur gleichen Zeit instantiiert wird, werden nur die Handler dieses
Themes an den EventManager angehängt. Der Handler könnte Tests durchführen um zu ermitteln,
ob die Funktion in jedem Fall durchgeführt werden soll, oder dies abhängig von einer bestimmten
$_GET- oder $_POST-Variable geschehen soll. Die Funktion kann ohne Validierung aufgerufen werden,
aber natürlich kann auch mit Prüfungen und Validierungen eingeschränkt werden, wann der Handler
ausgeführt werden darf und wann nicht.

Der Handler muss seine Ausgabe über einen Aufruf von `$event->setData($data)` zurückliefern und
die Tatsache, dass er ausgeführt wurde, mit `$event->setNotified()` angeben. Hier ein Beispiel

    class Themes_Foo_EventHandler_Handlers
    {
        protected $eventNames = array('theme.ajax_request' => 'ajaxHandler');

        public function ajaxHandler(Zikula_Event $event)
        {
            // check if we should execute
            if (!isset($_GET['sort'])) {
                return;
            }

            //... do something
            $event->setData($output);
            $event->setNotified();
        }
    }

Wenn man diese Datei in den Ordner lib/Foo/EventHandler im Theme ablegt, wird sie automatisch geladen,
wenn das Theme in System::init() initialisiert wird.

Themes können AutoLoading verwenden, daher kann man jede Klasse genauso wie in einem Modul verwenden.
Der Namensraum startet jedoch immer mit Themes_$name und wird zu dem lib/-Ordner im Theme gemappt
(genauso wie es auch bei Modulen läuft).