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

define('_MENUTREE_ADDCURRENTURL','Aktuelle URL hinzuf�gen');
define('_MENUTREE_ADDCURRENTURL_TITLE','Aktuelle URL als neuen Link in diesem Block hinzuf�gen');
define('_MENUTREE_EDITTHISBLOCK','Diesen Block editieren');
define('_MENUTREE_EDITTHISBLOCK_TITLE','Diesen block editieren');

define('_MENUTREE_BLOCKPERMISSIONS','Rechteverwaltung');
define('_MENUTREE_BLOCKPERMISSIONS_HINT','Sie k�nnen f�r bestimmte Optionen erweiterte Rechte vergeben (Standard ist "Edit"). Unten sehen Sie eine Liste dieser Optionen.');

define('_MENUTREE_BLOCKTITLES','Block-Titel');
define('_MENUTREE_BLOCKTITLES_HINT','Sie k�nnen f�r jede Sprache einen eigenen Block-Titel spezifizieren. Wenn Sie das Feld nicht f�llen wird der Standard Block-Titel (s. o. ) angezeigt.');

define('_MENUTREE_BLOCKDISPLAYSETTINGS','Block Darstellung');
define('_MENUTREE_BLOCKSETTINGS','Block Einstellungen');

define('_MENUTREE_TPL','Template');
define('_MENUTREE_STYLESHEET','Stylesheet');
define('_MENUTREE_STYLESHEET_SELECT','Stylesheet ausw�hlen');
define('_MENUTREE_STYLESHEET_HELPER','Die Liste wurde auf die zu diesem Template passenden Stylesheets eingeschr�nkt.<br />Wenn Sie hier das passende Stylesheet nicht finden k�nnen klicken Sie hier: <a href="#" title="Click here, to display all stylesheets">Alle Stylesheets anzeigen</a>.');

define('_MENUTREE_MAXDEPTH','Maximale Verzeichnistiefe');
define('_MENUTREE_MAXDEPTH_HINT','0 bedeutet keine Einschr�nkungen.');
define('_MENUTREE_EDITLINKS','Links im Men�-Block anzeigen');
define('_MENUTREE_EDITLINKS_HINT','Links im Men�-Block: "'. _MENUTREE_ADDCURRENTURL .'" und "'. _MENUTREE_EDITTHISBLOCK .'"');

define('_MENUTREE_LINKCLASSES','Klassenliste f�r Links');
define('_MENUTREE_LINKCLASSES_HINT','Sie k�nnen f�r jeden Men�punkt einen eigene CSS Klasse vergeben. Diese Option erlaubt Ihnen aus einer Liste die Klasse zu w�hlen.');
define('_MENUTREE_LINKCLASSES_HINT2','Der Titel der Klasse wird f�r den menutree-Administrator sichtbar sein, der Name der Klasse ist der Attributwert.');
define('_MENUTREE_LINKCLASSNAME','Klassen Name');
define('_MENUTREE_LINKCLASSTITLE','Klassen Titel');
define('_MENUTREE_LINKCLASS_DELETE','Klasse l�schen');
define('_MENUTREE_LINKCLASS_ADD','Klasse hinzuf�gen');


define('_MENUTREE_MENUCONTENT','Men�');

define('_MENUTREE_IMPORT','Sie k�nnen bereits erstellte Men�s importieren. Daf�r w�hlen Sie ein Men� aus der Drop-Down-Liste aus. Sofern m�glich werden werden die Links aus dem anderen Men� importiert.');
define('_MENUTREE_NULL','Men� ausw�hlen');
define('_MENUTREE_NULLNAME','kein Name');

define('_MENUTREE_EXPANDALL','Alle aufklappen');
define('_MENUTREE_COLLAPSEALL','Alle zuklappen');

define('_MENUTREE_CHANGELANG','Aktive Sprache �ndern: ');

define('_MENUTREE_SHOWHELP','Hilfe');
define('_MENUTREE_HELP','
<p>Block "'._MENUTREE_DESC.'" erlaubt Ihnen ein Men� mit verschachtelter Struktur zu erstellen. Unten finden Sie einige Basisinformation hierzu. </p><h4>Wie starte ich?</h4><p>Zur <strong>Anlage des ersten Men�punktes</strong>, klicken Sie auf "<strong>hinzuf�gen</strong>". Es wird ein Formular ge�ffnet in dem Sie den Namen sowie die dazugeh�rigen anderen Parameter (Titel, URL, CSS-Klasse) eintragen k�nnen. Hier finden Sie auch eine Drop-Down-Liste mit den installierten Sprachen, welches erm�glicht, zwischen den Sprachen zu wechseln.</p><p>Sie k�nnen auch ein bereits vorhandes Men� ("menu", "extmenu", "menutree") <strong>importieren </strong>. Zu diesem Zweck w�hlen Sie einen Block aus der Drop-Down-Liste aus.</p><h4>Basis-Einstellungen</h4><p>Zum <strong>verschieben </strong>eines Men�eintrages,<strong>klicken Sie einfach auf ein Ordnersymbol und halten Sie die Maustaste gedr�ckt</strong> und lassen Sie die Maustaste an geeigneter Stelle wieder los (drag & drop).</p><p><strong>Wenn Sie auf den Namen</strong> des Objekts klicken, sehen Sie das <strong>Kontext-Men�</strong>, welches die folgende Optionen beinhaltet:</p><ul><li><strong>bearbeiten</strong>: �ffnet ein Formular zum bearbeiten des Objektes</li><li><strong>L�schen</strong>: l�scht den Men�punkt und alle Untermen�s</li><li><strong>Hinzuf�gen...</strong><ul><li><strong>Vor</strong>: �ffnet ein Formular zum hinzuf�gen eines Men�punktes vor dem markierten Objekt</li><li><strong>Hinter</strong>: �ffnet ein Formular zum hinzuf�gen eines Men�punktes hinter dem markierten Objekt</li><li><strong>als Unterverzeichnis</strong>:�ffnet ein Formular zum hinzuf�gen eines Men�punktes als Unterverzeichnis zum markierten Objekt</li></ul></li><li><strong>Dieses Verzeichnis auf/zuklappen</strong>: zeigt bzw. verbirgt die Untervzeichnisse zu diesem Men�punkt</li><li><strong>Aktivieren/Deaktivieren</strong>: Schaltet das markierte Verzeichnis (und dessen Unterverzeichnisse) f�r die aktuelle Sprache ein bzw. aus</li><li><strong>Status</strong><ul><li><strong>F�r alle Sprachen aktivieren</strong>: Schaltet die Anzeige des markierten Objektes (und dessen Unterverzeichnisse) f�r alle Sprachen ein</li><li><strong>F�r alle Sprachen deaktivieren</strong>:Schaltet die Anzeige des markierten Objektes (und dessen Unterverzeichnisse) f�r alle Sprachen ein </li></ul></li></ul><h4>Mehrsprachen-Optionen</h4><p>Falls f�r die Seite mehrere Sprachen aktiviert sind, arbeitet menutree mit diesen. Zu jedem Men�punkt kann f�r die jeweilige Sprache ein anderer Name bzw. Titel verwendet werden. Url-Adressen und CSS-Klassen k�nnen (m�ssen aber nicht) f�r alle Sprachen gemeinsam verwendet werden.</p><h4>Weitere Informationen</h4><p>Wenn Sie mehr wissen wollen, lesen Sie die<strong> help.txt</strong> Datei, welche sich in dem Modulordner befindet oder besuchen Sie die <strong><a href="http://code.zikula.org/bianor">menutree Projektseite</a></strong>.</p>
');

define('_MENUTREE_LINKNAME','Name');
define('_MENUTREE_LINKHREF','URL');
define('_MENUTREE_LINKTITLE','Titel');
define('_MENUTREE_LINKCLASS','CSS Klasse');
define('_MENUTREE_LINKCLASSBLANK','Klasse w�hlen');
define('_MENUTREE_LINKLANG','Sprache');
define('_MENUTREE_LINKSTATE','Aktiv?');
define('_MENUTREE_ACTIVATE','aktivieren');
define('_MENUTREE_DEACTIVATE','deaktivieren');
define('_MENUTREE_LINKADD','hinzuf�gen...');
define('_MENUTREE_LINKADDBEFORE','vor');
define('_MENUTREE_LINKADDAFTER','nach');
define('_MENUTREE_LINKADDBOTTOM','als Unterverzeichnis');
define('_MENUTREE_EXPAND','Diesen Ordner aufklappen');
define('_MENUTREE_COLLAPSE','Diesen Ordner zuklappen');
define('_MENUTREE_MULTITOGGLE','Status');
define('_MENUTREE_MULTIACTIVATE','F�r alle Sprachen aktivieren');
define('_MENUTREE_MULTIDEACTIVATE','F�r alle Sprachen deaktivieren');
define('_MENUTREE_USEDEFAULT','Diese f�r alle Sprachen einstellen');

define('_MENUTREE_MAXDEPTHREACHED','Maximale Verzeichnistiefe. Das Limit ist: s');
define('_MENUTREE_REQUIRED','Bitte die Felder f�llen');
define('_MENUTREE_FORMINFO','Das Feld '._MENUTREE_LINKNAME.' wird ben�tigt.');
define('_MENUTREE_DELCONFIRM','M�chten Sie wirklich dieses Element und alle Unterelemente l�schen?');
define('_MENUTREE_WARNBEFOREUNLOAD','Sie haben noch nicht gespeichert. Wenn Sie jetzt die Seite verlassen, werden Ihre �nderungen nicht wirksam!');

define('_MENUTREE_BLOCKMUSTRELOAD','<strong>Note</strong>: Sie m�ssen die Seite neu laden, damit die �nderungen erfolgen.');
define('_MENUTREE_BLOCKMUSTRELOAD_OK','Ok - diese Information verbergen');

define('_MENUTREE_TOGGLE','Zeigen / Verbergen');

define('_MENUTREE_TABCONTENT','Block Inhalt ');
define('_MENUTREE_TABSETTINGS','Block Einstellungen');
