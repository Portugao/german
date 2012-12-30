<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2008, Pawel Preneta <jusuff@jabster.pl>
 * @link http://code.zikula.org/bianor/
 * @version $Id$
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package menutree
 */

Loader::loadFile('modules/menutree/pnlang/deu/global.php');

define('_MENUTREE_ADDCURRENTURL','Aktuelle URL hinzufügen');
define('_MENUTREE_ADDCURRENTURL_TITLE','Aktuelle URL als neuen Link in diesem Block hinzufügen');
define('_MENUTREE_EDITTHISBLOCK','Diesen Block editieren');
define('_MENUTREE_EDITTHISBLOCK_TITLE','Diesen block editieren');

define('_MENUTREE_BLOCKPERMISSIONS','Rechteverwaltung');
define('_MENUTREE_BLOCKPERMISSIONS_HINT','Sie können für bestimmte Optionen erweiterte Rechte vergeben (Standard ist "Edit"). Unten sehen Sie eine Liste dieser Optionen.');

define('_MENUTREE_BLOCKTITLES','Block-Titel');
define('_MENUTREE_BLOCKTITLES_HINT','Sie können für jede Sprache einen eigenen Block-Titel spezifizieren. Wenn Sie das Feld nicht füllen wird der Standard Block-Titel (s. o. ) angezeigt.');

define('_MENUTREE_BLOCKDISPLAYSETTINGS','Block Darstellung');
define('_MENUTREE_BLOCKSETTINGS','Block Einstellungen');

define('_MENUTREE_TPL','Template');
define('_MENUTREE_STYLESHEET','Stylesheet');
define('_MENUTREE_STYLESHEET_SELECT','Stylesheet auswählen');
define('_MENUTREE_STYLESHEET_HELPER','Die Liste wurde auf die zu diesem Template passenden Stylesheets eingeschränkt.<br />Wenn Sie hier das passende Stylesheet nicht finden können klicken Sie hier: <a href="#" title="Click here, to display all stylesheets">Alle Stylesheets anzeigen</a>.');

define('_MENUTREE_MAXDEPTH','Maximale Verzeichnistiefe');
define('_MENUTREE_MAXDEPTH_HINT','0 bedeutet keine Einschränkungen.');
define('_MENUTREE_EDITLINKS','Links im Menü-Block anzeigen');
define('_MENUTREE_EDITLINKS_HINT','Links im Menü-Block: "'. _MENUTREE_ADDCURRENTURL .'" und "'. _MENUTREE_EDITTHISBLOCK .'"');

define('_MENUTREE_LINKCLASSES','Klassenliste für Links');
define('_MENUTREE_LINKCLASSES_HINT','Sie können für jeden Menüpunkt einen eigene CSS Klasse vergeben. Diese Option erlaubt Ihnen aus einer Liste die Klasse zu wählen.');
define('_MENUTREE_LINKCLASSES_HINT2','Der Titel der Klasse wird für den menutree-Administrator sichtbar sein, der Name der Klasse ist der Attributwert.');
define('_MENUTREE_LINKCLASSNAME','Klassen Name');
define('_MENUTREE_LINKCLASSTITLE','Klassen Titel');
define('_MENUTREE_LINKCLASS_DELETE','Klasse löschen');
define('_MENUTREE_LINKCLASS_ADD','Klasse hinzufügen');


define('_MENUTREE_MENUCONTENT','Menü');

define('_MENUTREE_IMPORT','Sie können bereits erstellte Menüs importieren. Dafür wählen Sie ein Menü aus der Drop-Down-Liste aus. Sofern möglich werden werden die Links aus dem anderen Menü importiert.');
define('_MENUTREE_NULL','Menü auswählen');
define('_MENUTREE_NULLNAME','kein Name');

define('_MENUTREE_EXPANDALL','Alle aufklappen');
define('_MENUTREE_COLLAPSEALL','Alle zuklappen');

define('_MENUTREE_CHANGELANG','Aktive Sprache ändern: ');

define('_MENUTREE_SHOWHELP','Hilfe');
define('_MENUTREE_HELP','
<p>Block "'._MENUTREE_DESC.'" erlaubt Ihnen ein Menü mit verschachtelter Struktur zu erstellen. Unten finden Sie einige Basisinformation hierzu. </p><h4>Wie starte ich?</h4><p>Zur <strong>Anlage des ersten Menüpunktes</strong>, klicken Sie auf "<strong>hinzufügen</strong>". Es wird ein Formular geöffnet in dem Sie den Namen sowie die dazugehörigen anderen Parameter (Titel, URL, CSS-Klasse) eintragen können. Hier finden Sie auch eine Drop-Down-Liste mit den installierten Sprachen, welches ermöglicht, zwischen den Sprachen zu wechseln.</p><p>Sie können auch ein bereits vorhandes Menü ("menu", "extmenu", "menutree") <strong>importieren </strong>. Zu diesem Zweck wählen Sie einen Block aus der Drop-Down-Liste aus.</p><h4>Basis-Einstellungen</h4><p>Zum <strong>verschieben </strong>eines Menüeintrages,<strong>klicken Sie einfach auf ein Ordnersymbol und halten Sie die Maustaste gedrückt</strong> und lassen Sie die Maustaste an geeigneter Stelle wieder los (drag & drop).</p><p><strong>Wenn Sie auf den Namen</strong> des Objekts klicken, sehen Sie das <strong>Kontext-Menü</strong>, welches die folgende Optionen beinhaltet:</p><ul><li><strong>bearbeiten</strong>: öffnet ein Formular zum bearbeiten des Objektes</li><li><strong>Löschen</strong>: löscht den Menüpunkt und alle Untermenüs</li><li><strong>Hinzufügen...</strong><ul><li><strong>Vor</strong>: öffnet ein Formular zum hinzufügen eines Menüpunktes vor dem markierten Objekt</li><li><strong>Hinter</strong>: öffnet ein Formular zum hinzufügen eines Menüpunktes hinter dem markierten Objekt</li><li><strong>als Unterverzeichnis</strong>:öffnet ein Formular zum hinzufügen eines Menüpunktes als Unterverzeichnis zum markierten Objekt</li></ul></li><li><strong>Dieses Verzeichnis auf/zuklappen</strong>: zeigt bzw. verbirgt die Untervzeichnisse zu diesem Menüpunkt</li><li><strong>Aktivieren/Deaktivieren</strong>: Schaltet das markierte Verzeichnis (und dessen Unterverzeichnisse) für die aktuelle Sprache ein bzw. aus</li><li><strong>Status</strong><ul><li><strong>Für alle Sprachen aktivieren</strong>: Schaltet die Anzeige des markierten Objektes (und dessen Unterverzeichnisse) für alle Sprachen ein</li><li><strong>Für alle Sprachen deaktivieren</strong>:Schaltet die Anzeige des markierten Objektes (und dessen Unterverzeichnisse) für alle Sprachen ein </li></ul></li></ul><h4>Mehrsprachen-Optionen</h4><p>Falls für die Seite mehrere Sprachen aktiviert sind, arbeitet menutree mit diesen. Zu jedem Menüpunkt kann für die jeweilige Sprache ein anderer Name bzw. Titel verwendet werden. Url-Adressen und CSS-Klassen können (müssen aber nicht) für alle Sprachen gemeinsam verwendet werden.</p><h4>Weitere Informationen</h4><p>Wenn Sie mehr wissen wollen, lesen Sie die<strong> help.txt</strong> Datei, welche sich in dem Modulordner befindet oder besuchen Sie die <strong><a href="http://code.zikula.org/bianor">menutree Projektseite</a></strong>.</p>
');

define('_MENUTREE_LINKNAME','Name');
define('_MENUTREE_LINKHREF','URL');
define('_MENUTREE_LINKTITLE','Titel');
define('_MENUTREE_LINKCLASS','CSS Klasse');
define('_MENUTREE_LINKCLASSBLANK','Klasse wählen');
define('_MENUTREE_LINKLANG','Sprache');
define('_MENUTREE_LINKSTATE','Aktiv?');
define('_MENUTREE_ACTIVATE','aktivieren');
define('_MENUTREE_DEACTIVATE','deaktivieren');
define('_MENUTREE_LINKADD','hinzufügen...');
define('_MENUTREE_LINKADDBEFORE','vor');
define('_MENUTREE_LINKADDAFTER','nach');
define('_MENUTREE_LINKADDBOTTOM','als Unterverzeichnis');
define('_MENUTREE_EXPAND','Diesen Ordner aufklappen');
define('_MENUTREE_COLLAPSE','Diesen Ordner zuklappen');
define('_MENUTREE_MULTITOGGLE','Status');
define('_MENUTREE_MULTIACTIVATE','Für alle Sprachen aktivieren');
define('_MENUTREE_MULTIDEACTIVATE','Für alle Sprachen deaktivieren');
define('_MENUTREE_USEDEFAULT','Diese für alle Sprachen einstellen');

define('_MENUTREE_MAXDEPTHREACHED','Maximale Verzeichnistiefe. Das Limit ist: s');
define('_MENUTREE_REQUIRED','Bitte die Felder füllen');
define('_MENUTREE_FORMINFO','Das Feld '._MENUTREE_LINKNAME.' wird benötigt.');
define('_MENUTREE_DELCONFIRM','Möchten Sie wirklich dieses Element und alle Unterelemente löschen?');
define('_MENUTREE_WARNBEFOREUNLOAD','Sie haben noch nicht gespeichert. Wenn Sie jetzt die Seite verlassen, werden Ihre Änderungen nicht wirksam!');

define('_MENUTREE_BLOCKMUSTRELOAD','<strong>Note</strong>: Sie müssen die Seite neu laden, damit die Änderungen erfolgen.');
define('_MENUTREE_BLOCKMUSTRELOAD_OK','Ok - diese Information verbergen');

define('_MENUTREE_TOGGLE','Zeigen / Verbergen');

define('_MENUTREE_TABCONTENT','Block Inhalt ');
define('_MENUTREE_TABSETTINGS','Block Einstellungen');
