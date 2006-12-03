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

define('_ADMIN_ONLINEMANUAL', 'Online-Handbuch');
define('_ADMIN_UPGRADE_PHP','Hinweis: upgrade.php sollte im Root der Präsenz gelöscht werden!');
define('_ADMIN_UPGRADE76_PHP','Hinweis: upgrade76.php sollte im Root der Präsenz gelöscht werden!');
define('_ADMIN_LEGACY_MODE','Hinweis: der "legacy-modus" ist aktiv!');
define('_ADMIN_MAGIC_QUOTES','Hinweis: <a href="http://php.net/magic_quotes">magic_quotes_gpc</a> ist aktiv!');
define('_ADMIN_REGISTER_GLOBALS','Hinweis: <a href="http://php.net/register_globals">register_globals</a> ist aktiv!');
define('_ADMIN_CONFIG_PHP','Hinweis: config/config.php ist beschreibbar (ggfs. chmod 644 oder chmod 444 setzen)!');
define('_ADMIN_CONFIG_OLD_PHP','Hinweis: config/config-old.php ist beschreibbar (ggfs. chmod 644 oder chmod 444 setzen)!');
define('_ADMIN_PNTEMP_HTACCESS','Hinweis: der /pnTemp-Ordner sollte mit einer .htaccess vor externem Zugriff geschützt werden.');
define('_ADMINCONTINUE','weiter');
define('_ADMININSTALLWARNING','Warnung! Bitte die Datei "install.php" und den "install" Ordner im Root der Präsenz löschen');
define('_ADMINPSAKWARNING', 'Warnung! Bitte das "Swiss army knife tool" im Root der Präsenz löschen');
define('_ADMIN', 'PostNuke Administration');
define('_ADMINSYSTEMMODULES', 'System-Module');
define('_ADMINCONTENTMODULES', 'Content-Module');
define('_ADMINUTILITYMODULES', 'Utility-Module');
define('_ADMINRESOURCEPACKMODULES', 'Resource Pack');
define('_ADMINTHIRDPARTYMODULES', 'Drittanbieter-Module');
define('_ADMINUNCATEGORISEDMODULES','nicht kategorisierte Module');
define('_ADMINMODULESPERROW', 'Module pro Reihe');
define('_ADMINNEW', 'Hinzufügen');
define('_ADMINADMINVIEW', 'Ansicht');
define('_ADMINADDCATEGORY', 'Hinzufügen');
define('_ADMINNAME', 'Name');
define('_ADMINDESCRIPTION', 'Beschreibung');
define('_ADMINCATEGORYCREATED', 'Kategorie eingerichtet');
define('_ADMINUPDATEFAILED', 'Fehler! Kategorie konnte nicht aktualisiert weden');
define('_ADMINNOSUCHITEM', 'Keine solche Kategorie');
define('_ADMINDELETEFAILED', 'Fehler! Kategorie konnte nicht gelöscht werden');
define('_ADMINCREATEFAILED', 'Fehler! Kategorie konnte nicht eingerichtet werden');
define('_ADMINDELETEFAILEDDEFAULT', 'Die Default-Kategorie kann nicht gelöscht werden');
define('_ADMINDELETEFAILEDSTART', 'Die Start-Kategorie kann nicht gelsöcht werden');
define('_ADMINVIEW', 'Hauptkategorien');
define('_ADMINOPTIONS', 'Optionen');
define('_ADMINUPDATECATEGORY', 'Kategorie editieren');
define('_ADMINCATEGORYUPDATED', 'Kategorie aktualisiert');
define('_ADMINDELETECATEGORY', 'Kategorie löschen');
define('_ADMINCONFIRMCATEGORYDELETE', 'Löschen der Kategorie bestätgen');
define('_ADMINCANCELCATEGORYDELETE', 'Löschen der Kategorie abbrechen');
define('_ADMINDELETED', 'Kategorie gelöscht');
define('_ADMINFAILEDADDMODTOCAT', 'Fehler! Modul konnte nicht zur Kategorie hinzugefügt werden');
define('_ADMINDISPLAYICONS', 'Icons in der Administration anzeigen');
define('_ADMINDEFAULTCATEGORY', 'Default-Kategorie für neue Module');
define('_ADMINITEMSPERPAGE', 'Kategorien pro Seite');
define('_ADMINSKIN', 'Stylesheet für Administration');
define('_ADMINSTARTCATEGORY', 'Start-Kategorie');
define('_ADMINIGNOREINSTALLERCHECK', 'Installer-Check deaktivieren');
define('_ADMINIGNOREINSTALLERCHECKWARNING', 'WARNUNG: nur in Entwicklungsumgebungen setzen!');
define('_ADMINAUTOMATEDARTICLES','Zeitgesteuerte Beiträge');
define('_ADMINNOAUTOARTICLES','Keine zeitgesteuerten Beiträge');
define('_ADMINSTORYID', 'Beitrag ID');
define('_ADMINCURRENTPOLL', 'Aktuelle Umfrage');
define('_ADMINMODSPERROWNUMERIC', '\'Module pro Reihe\' muß als Zahl angegeben werden');
define('_ADMINCATPERPAGENUMERIC', '\'Kategorien pro Reihe\' muß als Zahl angegeben werden');
define('_ADMINTHEME', 'Theme für Administration');
define('_ADMINTHEMESITE', 'Theme der Webseite nutzen');
define('_ADMINGENERALSETTINGS', 'Allgemein');
define('_ADMINCATEGORYSETTINGS', 'Kategorien');
define('_ADMINTITLE', 'Administration');
define('_ADMIN_SECURITYCENTERNOTINSTALLED', 'WARNUNG: Das SecurityCenter Modul ist nicht installiert!');
define('_ADMIN_SECURITYCENTERNOTENABLED', 'WARNUNG: Das <a href="index.php?module=SecurityCenter&type=admin&func=modifyconfig">SecurityCenter</a> Modul ist nicht aktiv!');
define('_ADMIN_SAFEHTML', 'WARNUNG: Der <a href="index.php?module=SecurityCenter&type=admin&func=modifyconfig">SafeHTML-Outputfilter</a> sollte aktiviert werden');
define('_ADMIN_PNSECURITYANALYZER', 'PostNuke Security Analyzer');
?>