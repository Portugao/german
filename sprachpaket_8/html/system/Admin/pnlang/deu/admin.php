<?php
/**
 * PostNuke Application Framework
 *
 * @copyright (c) 2002, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: admin.php 20628 2006-11-26 11:16:35Z landseer $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package     PostNuke_System_Modules
 * @subpackage  PostNuke_Admin
 */

// general defines
define('_ADMIN', 'PostNuke Administration');
define('_ADMIN_ONLINEMANUAL', 'Online-Handbuch');
define('_ADMIN_TITLE', 'Administration');
define('_ADMIN_VIEW', 'Hauptkategorien');

// error messages
define('_ADMIN_DELETEFAILEDDEFAULT', 'Die Default-Kategorie kann nicht gelöscht werden');
define('_ADMIN_DELETEFAILEDSTART', 'Die Start-Kategorie kann nicht gelsöcht werden');
define('_ADMIN_FAILEDADDMODTOCAT', 'Fehler! Modul konnte nicht zur Kategorie hinzugefügt werden');

// modify config
define('_ADMIN_DEFAULTCATEGORY', 'Default-Kategorie für neue Module');
define('_ADMIN_DISPLAYICONS', 'Icons in der Administration anzeigen');
define('_ADMIN_GENERALSETTINGS', 'Allgemein');
define('_ADMIN_IGNOREINSTALLERCHECK', 'Installer-Check deaktivieren');
define('_ADMIN_IGNOREINSTALLERCHECKWARNING', 'WARNUNG: nur in Entwicklungsumgebungen setzen!');
define('_ADMIN_MODULESPERROW', 'Module pro Reihe');
define('_ADMIN_PANELDISPLAYSETTINGS', 'Ansicht');
define('_ADMIN_SKIN', 'Stylesheet für Administration');
define('_ADMIN_STARTCATEGORY', 'Start-Kategorie');
define('_ADMIN_THEME', 'Theme für Administration');
define('_ADMIN_THEMESITE', 'Theme der Webseite nutzen');

// checks for install/upgrade files prior to admin panel being displayed
define('_ADMIN_INSTALLWARNING','Warnung! Bitte die Datei "install.php" und den "install" Ordner im Root der Präsenz löschen');
define('_ADMIN_PSAKWARNING', 'Warnung! Bitte das "Swiss army knife tool" im Root der Präsenz löschen');

// PostNuke Security Analyzer defines
define('_ADMIN_PNSECURITYANALYZER', 'PostNuke Security Analyzer');
define('_ADMIN_CONFIG_PHP','Hinweis: config/config.php ist beschreibbar (ggfs. chmod 644 oder chmod 444 setzen)!');
define('_ADMIN_CONFIG_OLD_PHP','Hinweis: config/config-old.php ist beschreibbar (ggfs. chmod 644 oder chmod 444 setzen)!');
define('_ADMIN_LEGACY_MODE','Hinweis: der "legacy-modus" ist aktiv!');
define('_ADMIN_MAGIC_QUOTES','Hinweis: <a href="http://php.net/magic_quotes">magic_quotes_gpc</a> ist aktiv!');
define('_ADMIN_PNTEMP_HTACCESS','Hinweis: der /pnTemp-Ordner sollte mit einer .htaccess vor externem Zugriff geschützt werden.');
define('_ADMIN_REGISTER_GLOBALS','Hinweis: <a href="http://php.net/register_globals">register_globals</a> ist aktiv!');
define('_ADMIN_SAFEHTML', 'WARNUNG: Der <a href="index.php?module=SecurityCenter&type=admin&func=modifyconfig">SafeHTML-Outputfilter</a> sollte aktiviert werden');
define('_ADMIN_SECURITYCENTERNOTINSTALLED', 'WARNUNG: Das SecurityCenter Modul ist nicht installiert!');
define('_ADMIN_SECURITYCENTERNOTENABLED', 'WARNUNG: Das <a href="index.php?module=SecurityCenter&type=admin&func=modifyconfig">SecurityCenter</a> Modul ist nicht aktiv!');
define('_ADMIN_UPGRADE_PHP','Hinweis: upgrade.php im Root der Präsenz sollte gelöscht werden!');
define('_ADMIN_UPGRADE76_PHP','Hinweis: upgrade76.php im Root der Präsenz sollte gelöscht werden!');

?>