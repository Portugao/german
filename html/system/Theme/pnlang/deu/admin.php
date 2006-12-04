<?php
/**
 * PostNuke Application Framework
 *
 * @copyright (c) 2001, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: admin.php 20618 2006-11-25 17:35:24Z landseer $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package PostNuke_System_Modules
 * @subpackage Theme
*/

define('_THEME_MAKEURLSCLICKABLE', 'URLs klickbar machen');
define('_THEME_MAXSIZEFORLINKS', 'Linktext auf x Zeichen begrenzen');
define('_THEME_MAXSIZEDEFAULTHINT', '(Default: 30)');
define('_THEME_VIEWTHEMES','Themes anzeigen');
define('_THEME_ENGINE', 'Xanthia Theme Engine');
define('_THEME_AVAILABLETHEMES', 'Verfügbare Themes');
define('_THEME_THEMENAME', 'Theme Name');
define('_THEME_THEMECREDITS', 'Credits');
define('_THEME_INIFILENOTFOUND', 'Theme Konfigurationsdatei nicht gefunden');
define('_THEME_NOHTACCESS', 'Fehler! Die .htaccess Datei für XTE ist nicht im Root der Webseite.');
define('_THEME_USECACHE','Seiten-Caching aktivieren');
define('_THEME_CACHETYPE','Cachedata in Datenbank speichern');
define('_THEME_CACHETIME','Dauer des Cachings');
define('_THEME_TEMPLATECHECK','Prüfung auf aktualisierte Templates');
define('_THEME_FORCETEMPLATECHECK', 'Template-Generierung erzwingen');
define('_THEME_NOCACHE', 'Vom Caching ausgenommene Module');
define('_THEME_TRIMWHITESPACE', 'trimwhitespace Outputfilter nutzen');
define('_THEME_COMMASEPERATED', 'kommasepariert');
define('_THEME_PAGECONFIGURATIONS', 'Seitenkonfiguration');
define('_THEME_PAGECONFIGURATIONASSIGNMENTS', 'Seiten Konfiguration Zuordnungen');
define('_THEME_PALETTES', 'Farbpaletten');
define('_THEME_VARIABLES', 'Variablen');
define('_THEME_BLOCKCONTROL', 'Block Kontrolle');
define('_THEME_MODIFY', 'Theme modifizieren');
define('_THEME_VARIABLENAME', 'Name');
define('_THEME_VARIABLEVALUE', 'Wert');
define('_THEME_CONFIGURATIONNAME', 'Name');
define('_THEME_MODIFYPAGECONFIG', 'Seitenkonfiguration modifizieren');
define('_THEME_MODIFYPAGECONFIGASSIGNMENT', 'Seitenkonfiguration Zuordnungen modifizieren');
define('_THEME_PAGETEMPLATE', 'Seiten Template');
define('_THEME_BLOCKPOSITIONTEMPLATES', 'Block Position Templates');
define('_THEME_BLOCKTYPETEMPLATES', 'Block Typ Templates');
define('_THEME_BLOCKINSTANCETEMPLATES', 'Block Instance Templates');
define('_THEME_DEFAULTTEMPLATE', 'Default Template');
define('_THEMERUNNINGCONFIGCREATED', 'Laufzeitkonfiguration erzeugt');
define('_THEME_CREATENEWVARIABLE', 'Neue Variable angelegt');
define('_THEME_CREATEPALETTE', 'Palette anlegen');
define('_THEME_PALETTENAME', 'Palette Name');
define('_THEME_CREDITS', 'Credits');
define('_THEME_BLOCKNAME', 'Block Name');
define('_THEME_CREATENEWPAGECONFIGURATION', 'Neue Seitenkonfiguration anlegen');
define('_THEME_CONFIGURATIONMODULE', 'Modul');
define('_THEME_CONFIGURATIONTYPE', 'Funktion Typ');
define('_THEME_CONFIGURATIONFUNC', 'Funktion Name');
define('_THEME_CONFIGURATIONCUSTOMARGS', 'Custom Arguments');
define('_THEME_CONFIGURATIONFILE', 'Konfigurationsdatei');
define('_THEME_HOMEPAGE', 'Homepage');
define('_THEME_FAILEDTOOPENFILEFORWRITING', 'Datei konnte nicht zum schreiben geöffnet werden');
define('_THEME_FAILEDTOWRITETOFILE', 'Datei konnte nicht beschrieben werden');
define('_THEME_MASTER', 'Master');
define('_THEME_ADMINPAGES', 'Admin Seiten');
define('_THEME_NOSUCHPAGECONFIGASSIGNMENT', 'Keine entsprechende Seitenzuordnugn');
define('_THEMES_REGENERATED', 'Themeliste neu eingelesen');
define('_THEME_THEMETYPE', 'Typ');
define('_THEME_LEGACY', 'Legacy');
define('_THEME_OLDXANTHIA', 'Xanthia 2.0');
define('_THEME_XANTHIA', 'Xanthia 3.0');
define('_THEME_AUTOTHEME', 'Autotheme');
define('_THEME_SETTINGS', 'Einstellungen');
define('_THEME_REGENERATE', 'Themeliste neu einlesen');
define('_THEME_DISPLAYNAME', 'Displayname');
define('_THEME_USERTHEME', 'User Theme');
define('_THEME_SYSTEMTHEME', 'System Theme');
define('_THEME_ADMINTHEME', 'Admin Theme');
define('_THEME_USERTHEMENOTE', 'Theme die Benutzer für die Seitenansicht wählen können');
define('_THEME_SYSTEMTHEMENOTE', 'Themes für Backend-Dienste (z.B. RSS)');
define('_THEME_ADMINTHEMENOTE', 'Themes für den Adminbereich');
define('_THEME_COULDNOTINCLUDE', 'Theme Versionsdatei konnte nicht eingebunden werden: ');
define('_THEME_ID', 'ID');
define('_THEME_NAME', 'Name');
define('_THEME_TYPE', 'Typ');
define('_THEME_DESCRIPTION', 'Beschreibung');
define('_THEME_REGID', 'Registrierungs ID');
define('_THEME_DIRECTORY', 'Verzeichnis');
define('_THEME_VERSION', 'Version');
define('_THEME_OFFICIAL', 'Official');
define('_THEME_AUTHOR', 'Autor');
define('_THEME_CONTACT', 'Kontakt');
define('_THEME_ADMIN' ,'Admin Theme');
define('_THEME_USER', 'User Theme');
define('_THEME_SYSTEM', 'System Theme (z.B. RSS)');
define('_THEME_STATE', 'Status');
define('_THEME_CHANGELOG', 'Changelog');
define('_THEME_HELP', 'Hilfe');
define('_THEME_LICENSE', 'Lizenz');
define('_THEME_SETTINGSUPDATED', 'Einstellugen aktualisiert');
define('_THEME_CACHINGOPTONS', 'Caching');
define('_THEME_DELETECACHEDTEMPLATES', 'Template-Cache löschen');
define('_THEME_COMPILATIONOPTONS', 'Kompilierung');
define('_THEME_DELETECOMPILEDTEMPLATES', 'Compile-Cache löschen');
define('_THEME_FILTEROPTIONS', 'Filter');
define('_THEME_SELECTIONOPTONS', 'Theme Wahl');
define('_THEME_ALLOWUSERSTOCHANGE', 'Benutzer können Theme wählen');
define('_THEME_SETASDEFAULT', 'Als Default setzen');
define('_THEME_SETDEFAULT', 'Default Theme setzen');
define('_THEME_DEFAULTNOTE', 'Setzt %t% als aktives Theme für alle Benutzer!');
define('_THEME_RESETUSERSELECTED', 'individuelle Benutzer-Themes übersteuern');
define('_THEME_DEFAULTCHANGED', 'Default Theme geändert');
define('_THEME_DEFAULT', 'Default Theme');
define('_THEME_UPGRADE', 'Upgrade');
define('_THEME_UPGRADED', 'Theme upgraded');
define('_THEME_CACHE_CLEARED', 'Template-Cache gelöscht');
define('_THEME_COMPILED_CLEARED', 'Compile-Cache gelöscht');
define('_THEME_PAGEPALETTE', 'Palette');
define('_THEME_PAGESETTINGS', 'Page Settings');
define('_THEME_THEMEDIRMUSTBEWRITABLE', 'Theme-Verzeichnis muss beschreibbar sein');
define('_THEME_ITEMSPERPAGE', 'Einträge pro Seite');
define('_THEME_GENERALSETTINGS', 'Einstellungen');
define('_THEME_DELETE', 'Theme löschen');
define('_THEME_CONFIRMDELETE', 'Löschen des Themes bestätigen');
define('_THEME_DELETED', 'Theme gelöscht');
define('_THEME_CACHETIMENOTE1', 'Eine Cache-Lifetime von 0 deaktiviert das Caching.');
define('_THEME_CACHETIMENOTE2', 'Eine Cache-Lifetime von -1 sorgt für dauerhaftes Caching'); 
define('_THEME_XHTML', 'XHTML');
define('_THEME_NEW', 'Theme anlegen');
define('_THEME_LAYOUT', 'Layout');
define('_THEME_NOLAYOUT', 'leeres Template');
define('_THEME_2COLLEFT', '2 columns - Menü links');
define('_THEME_2COLRIGHT', '2 columns - Menü rechts');
define('_THEME_3COL', '3 columns - Menüs beidseitig');
define('_THEME_LAYOUTSBLUEROBOT', 'Layout von <a href="http://www.bluerobot.com/web/layouts/">Layout reservoir</a> unter <a href="http://www.bluerobot.com/">BlueRobot.com</a>.');
define('_THEME_CREATIONFAILED', 'Theme Erzeugung fehlgeschlagen');
define('_THEME_CREATED', 'Theme angelegt');
define('_THEME_UNDEFINEDBLOCKPOSITIONS', '<p>Die folgenden Blockpositionen in der Seitenkonfiguration sind nicht im Block-Modul eingerichtet</p>%p%<p>Zum Anlegen Blockposition anklicken.</p>');
define('_THEME_UNTITLEDBLOCK', 'Namenloser Block vom Typ %k%, ID %b%');
define('_THEME_MODULEWRAPPER', 'Module Wrapper DIV anzeigen');
define('_THEME_BLOCKWRAPPER', 'Block Wrapper DIV anzeigen');
define('_THEME_NEW_DISABLED', 'Theme-Erzeugung deaktiviert da das Verzeichnis nicht beschreibbar ist.');

?>