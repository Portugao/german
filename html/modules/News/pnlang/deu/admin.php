<?php
/**
 * PostNuke Application Framework
 *
 * @copyright (c) 2001, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: admin.php 22223 2007-06-14 10:37:21Z davidnelson $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package PostNuke_Value_Addons
 * @subpackage News
*/

// view template
define('_NEWS_ARCHIVED', 'Archiviert');
define('_NEWS_INHOMEQUESTION', 'Startseite');
define('_NEWS_NEWSPUBLISHER', 'Newsbeiträge');
define('_NEWS_PENDING', 'Wartend');
define('_NEWS_PUBLISHEDSTATUS', 'Status');
define('_NEWS_PUBLISHED', 'Veröffentlicht');
define('_NEWS_REJECTED', 'Zurückgezogen');
define('_NEWS_UNKNOWN', 'Unbekannt');

// ajax modify
define('_NEWS_MAKEPENDING', 'Setze Warten-Status');

// modify config
define('_MODIFYNEWSCONFIG', 'Konfiguration modifizieren');
define('_NEWS_DISPLAY', 'Anzeigeeinstellungen');
define('_NEWS_STORIESHOME','anzuzeigende Beiträge auf der Startseite');
define('_NEWS_ITEMSONINDEXPAGE', 'anzuzeigende Beiträge im Index');
define('_NEWS_STORIESORDER','Sortiere Beiträge nach');
define('_NEWS_STORIESORDER0','News ID');
define('_NEWS_STORIESORDER1','News Datum/Zeit');
define('_NEWS_URLS', 'Permalinks');
define('_NEWS_URLSCUSTOM', 'Individuell');
define('_NEWS_URLSCUSTOMREQUIRED', 'Achtung: Bei individuellen Permalinks muß entweder %storyid% oder %storytitle% enthalten sein.');
define('_NEWS_URLSCUSTOMSTRUCTURE', 'Struktur');
define('_NEWS_URLSDATENAME', 'Datum und Name');
define('_NEWS_URLSHELP', 'Vorderfinierte Permalinkstruktur wählen bzw. individuell definieren');
define('_NEWS_URLSNUMERIC' , 'Numerisch');
define('_NEWS_URLVARS', 'Mögliche Variablen für individuelle Permalinks');
define('_NEWS_URLVARSDAY', 'Tag');
define('_NEWS_URLVARSMONTHNUM', 'Monatsnummer (1-12)');
define('_NEWS_URLVARSMONTHNAME', 'Monatsname (Jan-Dez)');
define('_NEWS_URLVARSSTORYID', 'Beitrags-ID');
define('_NEWS_URLVARSSTORYTITLE', 'Beitrags-Titel');
define('_NEWS_URLVARSYEAR', 'Jahr (einschließlich Jahrzehnt)');
