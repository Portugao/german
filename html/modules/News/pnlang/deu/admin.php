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
define('_NEWS_NEWSPUBLISHER', 'Newsbeitr�ge');
define('_NEWS_PENDING', 'Wartend');
define('_NEWS_PUBLISHEDSTATUS', 'Status');
define('_NEWS_PUBLISHED', 'Ver�ffentlicht');
define('_NEWS_REJECTED', 'Zur�ckgezogen');
define('_NEWS_UNKNOWN', 'Unbekannt');

// menu
define('_NEWS_CONFIRMDELETE', 'Soll der Newsbeitrag wirklich gel�scht werden?');
define('_NEWS_CREATE', 'Newsbeitrag anlegen');
define('_NEWS_DELETE', 'Newsbeitrag l�schen');
define('_NEWS_MODIFY', 'Newsbeitrag bearbeiten');
define('_NEWS_VIEW', 'Newsbeitr�ge anzeigen');

// ajax modify
define('_NEWS_MAKEPENDING', 'Setze Warten-Status');

// modify config
define('_MODIFYNEWSCONFIG', 'Konfiguration modifizieren');
define('_NEWS_DISPLAY', 'Anzeigeeinstellungen');
define('_NEWS_STORIESHOME','anzuzeigende Beitr�ge auf der Startseite');
define('_NEWS_ITEMSONINDEXPAGE', 'anzuzeigende Beitr�ge im Index');
define('_NEWS_STORIESORDER','Sortiere Beitr�ge nach');
define('_NEWS_STORIESORDER0','News ID');
define('_NEWS_STORIESORDER1','News Datum/Zeit');
define('_NEWS_URLS', 'Permalinks');
define('_NEWS_URLSCUSTOM', 'Individuell');
define('_NEWS_URLSCUSTOMREQUIRED', 'Achtung: Bei individuellen Permalinks mu� entweder %storyid% oder %storytitle% enthalten sein.');
define('_NEWS_URLSCUSTOMSTRUCTURE', 'Struktur');
define('_NEWS_URLSDATENAME', 'Datum und Name');
define('_NEWS_URLSHELP', 'Vorderfinierte Permalinkstruktur w�hlen bzw. individuell definieren');
define('_NEWS_URLSNUMERIC' , 'Numerisch');
define('_NEWS_URLVARS', 'M�gliche Variablen f�r individuelle Permalinks');
define('_NEWS_URLVARSDAY', 'Tag');
define('_NEWS_URLVARSMONTHNUM', 'Monatsnummer (1-12)');
define('_NEWS_URLVARSMONTHNAME', 'Monatsname (Jan-Dez)');
define('_NEWS_URLVARSSTORYID', 'Beitrags-ID');
define('_NEWS_URLVARSSTORYTITLE', 'Beitrags-Titel');
define('_NEWS_URLVARSYEAR', 'Jahr (einschlie�lich Jahrzehnt)');
