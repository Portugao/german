PENDING CONTENT
===============

Dieses Dokument beschreibt das Event get.pending_content, das benutzt wird um Informationen
von Modulen über wartende Inhalte (wie z.B. eingereichte News-Artikel) zu sammeln.

Module, die diese Informationen publizieren möchten, sollten einen persistenten Handler
für 'get.pending_content' erstellen.

Hier ist ein Beispiel für solch einen Handler:

    [php]
    // event handler
    class News_Handlers
    {
        public static function handler(Zikula_Event $event)
        {
            $collection = new Zikula_Collection_Container('News');
            $collection->add(new Zikula_Provider_AggregateItem('submission', __('pending news'), 5, 'Admin', 'viewsubmissions'));
            $collection->add(new Zikula_Provider_AggregateItem('comments', __('pending comments'), 7, 'Admin', 'viewcomments'));
            $event->getSubject()->add($collection);
        }
    }


Auch wenn man dies nicht insbesondere wissen muss, solange man diese Informationen nicht
verarbeiten möchte, ist hier eine Beispiel-Implementierung, welche die Daten
sammelt und eine Liste von Links zu den wartenden Inhalten jedes Moduls erstellt:

    [php]
    // trigger event
    $event = new Zikula_Event('get.pending_content', new Zikula_Collection_Container('pending_content'));
    $pendingCollection = EventUtil::getManager()->notify($event)->getSubject();

    // process results
    foreach ($pendingCollection as $collection) {
        $module = $collection->getName();
        foreach ($collection as $item) {
            $link = ModUtil::url($module, $item->getController(), $item->getMethod(), $item->getArgs());
            echo "{$item->getDescription()}: <a href='$link'>{$item->getNumber()}</a><br />\n";
        }
    }

Nachfolgend ein komplettes Beispiel, das benutzt und ausgeführt werden kann, um zu sehen, wie dies in
der Praxis funktioniert:

    [php]
    include 'lib/ZLoader.php';
    ZLoader::register();
    System::init();

    // setup test
    EventUtil::getManager()->attach('get.pending_content', array('News_Handlers', 'handler'));

    // trigger event
    $event = new Zikula_Event('get.pending_content', new Zikula_Collection_Container('pending_content'));
    $pendingCollection = EventUtil::getManager()->notify($event)->getSubject();

    // process results
    foreach ($pendingCollection as $collection) {
        $module = $collection->getName();
        foreach ($collection as $item) {
            $link = ModUtil::url($module, $item->getController(), $item->getMethod(), $item->getArgs());
            echo "{$item->getDescription()}: <a href='$link'>{$item->getNumber()}</a><br />\n";
        }
    }

    // event handler
    class News_Handlers
    {
        public function handler(Zikula_Event $event)
        {
            $collection = new Zikula_Collection_Container('News');
            $collection->add(new Zikula_Provider_AggregateItem('submission', __('pending news'), 5, 'Admin', 'viewsubmissions'));
            $collection->add(new Zikula_Provider_AggregateItem('comments', __('pending comments'), 7, 'Admin', 'viewcomments'));
            $event->getSubject()->add($collection);
        }
    }
