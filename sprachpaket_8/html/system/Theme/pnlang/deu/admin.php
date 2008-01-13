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

// general
define('_THEME_ENGINE', 'Xanthia Theme Engine');

// singular/plural
define('_THEME_PAGECONFIGURATION' , 'Seitenkonfiguration');
define('_THEME_PAGECONFIGURATIONS', 'Seitenkonfigurationen');
define('_THEME_PAGECONFIGURATIONASSIGNMENT' , 'Seitenkonfiguration Zuordnung');
define('_THEME_PAGECONFIGURATIONASSIGNMENT_LC', 'Seitenkonfiguration Zuordnung');
define('_THEME_PAGECONFIGURATIONASSIGNMENTS', 'Seitenkonfiguration Zuordnungen');
define('_THEME_PALETTE', 'Farbpalette');
define('_THEME_THEME', 'Theme');
define('_THEME_THEME_LC', 'Theme');
define('_THEME_THEMES', 'Themes');
define('_THEME_VARIABLE', 'Variable');

// nav menu
define('_THEME_NEW_DISABLED', 'Theme-Erzeugung deaktiviert da das Verzeichnis nicht beschreibbar ist.');
define('_THEME_REGENERATE', 'Themeliste neu einlesen');
define('_THEME_VIEWTHEMES', 'Themes anzeigen');
define('_THEME_CREATETHEME', 'Theme anlegen');
define('_THEME_MODIFYTHEME', 'Theme berabeiten');
define('_THEME_DELETETHEME', 'Theme löschen');
define('_THEME_CONFIRMDELETETHEME', 'Soll das Theme wirklich gelöscht werden?');
define('_THEME_CREATEPAGECONFIGURATIONASSIGNMENT', 'Seitenkonfiguration Zuordnung anlegen');
define('_THEME_MODIFYPAGECONFIGURATIONASSIGNMENT', 'Seitenkonfiguration Zuordnung bearbeiten');
define('_THEME_MODIFYPAGECONFIGURATION', 'Seitenkonfiguration bearbeiten');
define('_THEME_DELETEPAGECONFIGURATIONASSIGNMENT', 'Seitenkonfiguration Zuordnung löschen');
define('_THEME_CONFIRMDELETEPAGECONFIGURATIONASSIGNMENT', 'Soll die Seitenkonfiguration Zuordnung wirklich gelöscht werden?');
define('_THEME_CREATEPALETTE', 'Farbpalette anlegen');
define('_THEME_ADDNEWVARIABLE', 'Variable hinzufügen');

// status/error messages
define('_THEME_UNABLETODELETEFILES', 'Die Themedateien können nicht gelöscht werden, weil das System kein Schreibzugriff auf das Themeverzeichnis themes/%themedirectory% bzw. die Dateien hat.');
define('_THEME_CACHE_CLEARED', 'Template-Cache gelöscht');
define('_THEME_COMPILED_CLEARED', 'Compile-Cache gelöscht');
define('_THEME_COULDNOTINCLUDE', 'Theme Versionsdatei konnte nicht eingebunden werden: ');
define('_THEME_DEFAULTCHANGED', 'Standard Theme geändert');
define('_THEME_ERRORDELETINGTHEMEFILES', 'Beim Versuch, die Dateien zu löschen, ist ein Fehler aufgetreten. Bitte die Dateien mit einem FTP-Client entfernen.');
define('_THEME_FAILEDCREATECONFIGDIR', 'Verzeichnis für die Theme-Konfiguration konnte nicht angelegt werden');
define('_THEME_FAILEDTOOPENFILEFORWRITING', 'Datei konnte nicht zum schreiben geöffnet werden');
define('_THEME_FAILEDTOWRITETOFILE', 'Datei konnte nicht beschrieben werden');
define('_THEME_INCORRECTTYPE', 'Upgrade für dieses Theme nicht möglich (kein Xanthia 2 Theme)');
define('_THEME_REGENERATED', 'Themeliste neu eingelesen');
define('_THEME_SETTINGSUPDATED', 'Einstellugen aktualisiert');
define('_THEME_THEMEDIRMUSTBEWRITABLE', 'Theme-Verzeichnis muss beschreibbar sein');
define('_THEME_THEMEFILESDELETED', 'Die Themedateien wurden erfolgreich im Dateisystem gelöscht');
define('_THEME_UNDEFINEDBLOCKPOSITIONS', '<p>Die folgenden Blockpositionen in der Seitenkonfiguration sind nicht im Block-Modul eingerichtet</p>%p%<p>Zum Anlegen Blockposition anklicken.</p>');
define('_THEME_UPGRADED', 'Theme aktualisiert');

// view template
define('_THEME_AVAILABLETHEMES', 'Verfügbare Themes');
define('_THEME_CREDITS', 'Credits');
define('_THEME_DEFAULT', 'Standard Theme');
define('_THEME_SETASDEFAULT', 'Als Standard setzen');
define('_THEME_UPGRADE', 'Upgrade');

// modify config
define('_THEME_ALLOWUSERSTOCHANGE', 'Benutzer können Theme wählen');
define('_THEME_CACHETIME','Dauer des Cachings');
define('_THEME_CACHETIMENOTE1', 'Cache-Lifetime von 0 deaktiviert das Caching');
define('_THEME_CACHETIMENOTE2', 'Cache-Lifetime von -1 sorgt für dauerhaftes Caching'); 
define('_THEME_CACHINGOPTONS', 'Caching');
define('_THEME_COMPILATIONOPTONS', 'Kompilierung (für Arbeiten an Theme-Templates)');
define('_THEME_DELETECACHEDTEMPLATES', 'Template-Cache löschen');
define('_THEME_DELETECOMPILEDTEMPLATES', 'Compile-Cache löschen');
define('_THEME_FILTEROPTIONS', 'Filter');
define('_THEME_FORCETEMPLATECHECK', 'Templates immer neu kompilieren');
define('_THEME_GENERALSETTINGS', 'Einstellungen');
define('_THEME_MAXSIZEDEFAULTHINT', '(Default: 30 Zeichen)');
define('_THEME_MAXSIZEFORLINKS', 'Zeichenbegrenzung für Linktext');
define('_THEME_MAKEURLSCLICKABLE', 'URLs klickbar machen');
define('_THEME_NOCACHE', 'Vom Caching ausgenommene Module');
define('_THEME_SELECTIONOPTONS', 'Freigabe');
define('_THEME_TEMPLATECHECK','Aktualisierte Templates neu kompilieren');
define('_THEME_TRIMWHITESPACE', 'trimwhitespace Outputfilter nutzen');
define('_THEME_USECACHE','Seiten-Caching aktivieren');

// new template
define('_THEME_2COLLEFT', '2 Spalten - Menü links');
define('_THEME_2COLRIGHT', '2 Spalten - Menü rechts');
define('_THEME_3COL', '3 Spalten - Menüs beidseitig');
define('_THEME_ADMINTHEME', 'Admin Theme');
define('_THEME_ADMINTHEMENOTE', 'Themes für den Adminbereich');
define('_THEME_CONFIRMDELETEFILES', 'Falls möglich, Themedateien löschen');
define('_THEME_DISPLAYNAME', 'Displayname');
define('_THEME_LAYOUT', 'Layout');
define('_THEME_LAYOUTSBLUEROBOT', 'Layout von <a href="http://www.bluerobot.com/web/layouts/">Layout reservoir</a> unter <a href="http://www.bluerobot.com/">BlueRobot.com</a>.');
define('_THEME_NOLAYOUT', 'leeres Template');
define('_THEME_SYSTEMTHEME', 'System Theme');
define('_THEME_SYSTEMTHEMENOTE', 'Themes für Backend-Dienste (z.B. RSS)');
define('_THEME_USERTHEME', 'User Theme');
define('_THEME_USERTHEMENOTE', 'Themes, das Benutzer für die Seitenansicht wählen können');

// modify menu template
define('_THEME_PALETTES', 'Farbpaletten');
define('_THEME_SETTINGS', 'Einstellungen');
define('_THEME_VARIABLES', 'Variablen');

// pageconfigurations templates
define('_THEME_ADMINPAGES', 'Admin Seiten');
define('_THEME_BLOCKINSTANCETEMPLATES', 'Blockinstanz Templates');
define('_THEME_BLOCKPOSITIONTEMPLATES', 'Blockposition Templates');
define('_THEME_BLOCKTYPETEMPLATES', 'Blocktyp Templates');
define('_THEME_BLOCKWRAPPER', 'Block Wrapper DIV anzeigen');
define('_THEME_CONFIGURATIONEXISTS', 'Existiert eine Konfigurationsdatei?');
define('_THEME_CONFIGURATIONEXISTSNOTE', 'Fehlende Konfigurationsdateien müssen erstellt werden in <em>%path%</em>.');
define('_THEME_CONFIGURATIONFILE', 'Konfigurationsdatei');
define('_THEME_CONFIGURATIONNAME', 'Name');
define('_THEME_CUSTOMARGSNOTE', 'Liste der Argumente in der URL getrennt nach /.');
define('_THEME_DEFAULTTEMPLATE', 'Standard Template');
define('_THEME_HOMEPAGE', 'Homepage');
define('_THEME_MASTER', 'Master');
define('_THEME_MODULEWRAPPER', 'Module Wrapper DIV anzeigen');
define('_THEME_PAGEPALETTE', 'Palette');
define('_THEME_PAGESETTINGS', 'Page Settings');
define('_THEME_PAGETEMPLATE', 'Seiten Template');
define('_THEME_UNTITLEDBLOCK', 'Namenloser Block vom Typ %k%, ID %b%');

// set as default template
define('_THEME_SETDEFAULT', 'Standard Theme setzen');
define('_THEME_DEFAULTNOTE', 'Setzt %t% als aktives Theme für alle Benutzer!');
define('_THEME_RESETUSERSELECTED', 'individuelle Benutzer-Themes übersteuern');

// colour palettes
define('_THEME_PALETTE_ALLREQUIRED', 'Bitte stellen Sie sicher, dass alle einzelnen Felder gefüllt sind. Ansonsten kann die Farbpalette nicht gespeichert werden.');

// theme types
define('_THEME_AUTOTHEME', 'Autotheme');
define('_THEME_LEGACY', 'Legacy');
define('_THEME_OLDXANTHIA', 'Xanthia 2.0');
define('_THEME_XANTHIA', 'Xanthia 3.0');

// theme version file parameters
define('_THEME_AUTHOR', 'Autor');
define('_THEME_CHANGELOG', 'Changelog');
define('_THEME_CONTACT', 'Kontakt');
define('_THEME_DIRECTORY', 'Verzeichnis');
define('_THEME_HELP', 'Hilfe');
define('_THEME_LICENSE', 'Lizenz');
define('_THEME_OFFICIAL', 'Offiziell');
define('_THEME_REGID', 'Registrierungs ID');
define('_THEME_STATE', 'Status');
define('_THEME_TYPE', 'Typ');
define('_THEME_VERSION', 'Version');
define('_THEME_XHTML', 'XHTML');
