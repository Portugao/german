<?php
/**
 * PostNuke Application Framework
 *
 * @copyright (c) 2001, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: admin.php 20515 2006-11-12 20:23:16Z larsneo $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package PostNuke_System_Modules
 * @subpackage  SysInfo
 */

define('_SYSINFO', 'System Information');
define('_SYSINFO_DATABASEVERSION', 'Datenbank Version:');
define('_SYSINFO_DISPLAYNAME', 'Display Name');
define('_SYSINFO_EXTTEXTMOD', 'Liste aller installierten Module mit Versionsangabe.');
define('_SYSINFO_EXTTEXTTHEME', 'Liste aller installierten Themes mit Versionsangabe.');
define('_SYSINFO_GENERALINFO', 'Allgemeine Information');
define('_SYSINFO_NAME', 'Name');
define('_SYSINFO_OPTIONALDPHPEXT', 'Optionale PHP Erweiterungen');
define('_SYSINFO_OPTIONALDPHPPATCHES', 'Optionale PHP Patches');
define('_SYSINFO_POSTNUKEEXTENSIONS', 'PostNuke Extensions');
define('_SYSINFO_PHPVERSION', 'PHP Version:');
define('_SYSINFO_VERSION', 'Version');
define('_SYSINFO_POSTNUKEVERSION', 'PostNuke Version:');
define('_SYSINFO_REASON', 'Grund');
define('_SYSINFO_REQUIREDPHPEXT', 'Notwendige PHP Erweiterungen');
define('_SYSINFO_SERVERINFO', 'Server Information:');
define('_SYSINFO_STATUS', 'Status');
define('_SYSINFO_SYSTEMSUMMARY', 'System Zusammenfassung');
define('_SYSINFO_SYSSUMTEXT', 'Zusammenfassung der Systemumgebung für Diagnosezwecke. Weitere Informationen zur Sicherheit auch unter <a href="http://support.pn-cms.de/modules/dokuwiki/doku.php?id=postnuke:sicherheit">postnuke:sicherheit</a> bei pn-cms.de.');
define('_SYSINFO_PHP_RECOMMENDED_SECURITY_SETTINGS', 'Das PostNuke Development Team empfiehlt die folgenden Server-Einstellungen zur optimalen Sicherheit:<br />(Infos zur PHP Konfiguration unter <a href="http://php.net/manual/de/ini.php">Liste von php.ini Einstellungen</a> und <a href="http://php.net/manual/de/configuration.changes.php">Wie man Konfigurationseinstellungen ändert</a>.)');
define('_SYSINFO_PHP_ADDITIONAL_SECURITY', 'Die <a href="http://lists.postnuke.com/mailman/listinfo/postnuke-security">PostNuke Security Mailingliste</a> sollte abonniert werden<br />Security Trackers: <a href="http://secunia.com/product/350/">Secunia</a>, <a href="http://www.securitytracker.com/archives/target/1275.html">Securitytracker</a>, <a href="http://cve.mitre.org/cgi-bin/cvekey.cgi?keyword=postnuke">Common Vulnerabilities and Exposures</a>.');
define('_SYSINFO_PHP_DISPLAY_ERRORS', 'display_errors=on - sollte off sein');
define('_SYSINFO_PHP_DISPLAY_STARTUP_ERRORS', 'display_startup_errors=on - sollte off sein');
define('_SYSINFO_PHP_EXPOSE_PHP', 'expose_php=on - sollte off sein');
define('_SYSINFO_PHP_REGISTER_GLOBALS', 'register_globals=on - sollte off sein');
define('_SYSINFO_PHP_MAGIC_QUOTES_GPC', 'magic_quotes_gpc=on - sollte off sein');
define('_SYSINFO_PHP_MAGIC_QUOTES_RUNTIME', 'magic_quotes_runtime=on - sollte off sein');
define('_SYSINFO_PHP_ALLOW_URL_FOPEN', 'allow_url_fopen=on - sollte off sein');
define('_SYSINFO_PHP_ALLOW_URL_INCLUDE', 'allow_url_include=on - sollte off sein');
define('_SYSINFO_PHP_DISABLE_FUNCTIONS', 'empfohlene disable_functions: show_source, system, shell_exec, passthru, exec, popen, proc_open');
define('_SYSINFO_PHP_DISABLE_FUNCTIONS_CURRENT', 'aktuelle disable_functions:');
define('_SYSINFO_FOLDER', 'Ordner');
define('_SYSINFO_FILE', 'Datei');
define('_SYSINFO_POSTNUKE_FILESYSTEM', 'Filesystem Check');
define('_SYSINFO_ISWRITABLE', 'Prüfen ob alle beschreibbaren Dateien und Ordner vor externem Zugriff geschützt sind.<br />Das pnTemp-Verzeichnis sollte nach Möglichkeit ausserhalb der Webroot platziert werden, der aktuelle pnTemp-Pfad ist: ');
define('_SYSINFO_FSTYPE', 'Typ');
define('_SYSINFO_PATH', 'Pfad');
define('_SYSINFO_MODSECURITY_APACHE2', 'Apache2 und <a href="http://www.modsecurity.org">modsecurity</a> empfohlen');
define('_SYSINFO_', 'PostNuke ADODB');

define('_SYSINFO_ADODB', 'ADODB Database Layer');
define('_SYSINFO_FLUSHCACHE', 'Flush cache');
define('_SYSINFO_QUERYCACHEINTERVAL', 'Database query caching interval (seconds)');
define('_SYSINFO_CONFIRMFLUSHCACHE', 'Confirm flushing of database cache');
define('_SYSINFO_CACHEFLUSHED', 'Database cache flushed');
define('_SYSINFO_CACHEDIRECTORY', 'Cache directory');
define('_SYSINFO_DATABASETYPE', 'Database type');
define('_SYSINFO_DATAPROVIDER', 'Database provider');
define('_SYSINFO_DATABASEHOST', 'Database host');
define('_SYSINFO_DATABASENAME', 'Database name');
define('_SYSINFO_ADODBVERSION', 'ADODB version');
define('_SYSINFO_DATABASEDESCRIPTION', 'Database server description');

?>