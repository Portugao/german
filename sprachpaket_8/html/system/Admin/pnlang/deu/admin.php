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

define('_ADMIN_ONLINEMANUAL', 'Onlinemanual');
define('_ADMIN_UPGRADE_PHP','Notice: upgrade.php should be removed from root!');
define('_ADMIN_UPGRADE76_PHP','Notice: upgrade76.php should be removed from root!');
define('_ADMIN_LEGACY_MODE','Notice: legacy mode is turned on!');
define('_ADMIN_MAGIC_QUOTES','Notice: <a href="http://php.net/magic_quotes">magic_quotes_gpc</a> is on!');
define('_ADMIN_REGISTER_GLOBALS','Notice: <a href="http://php.net/register_globals">register_globals</a> is on!');
define('_ADMIN_CONFIG_PHP','Notice: config/config.php is writable (hint: chmod 644 or chmod 444)!');
define('_ADMIN_CONFIG_OLD_PHP','Notice: config/config-old.php is writable (hint: chmod 644 or chmod 444)!');
define('_ADMIN_PNTEMP_HTACCESS','Notice: /pnTemp-folder should be secured with .htaccess.');
define('_ADMINCONTINUE','Continue');
define('_ADMININSTALLWARNING','Warning! Please remove the file  install.php and the folder called install from the root of your PostNuke web site before proceeding');
define('_ADMINPSAKWARNING', 'Warning! Please remove the Swiss army knife tool from the root of your PostNuke web site before proceeding');
define('_ADMIN', 'PostNuke Admin Panel');
define('_ADMINSYSTEMMODULES', 'System modules');
define('_ADMINCONTENTMODULES', 'Content modules');
define('_ADMINUTILITYMODULES', 'Utility modules');
define('_ADMINRESOURCEPACKMODULES', 'Resource pack');
define('_ADMINTHIRDPARTYMODULES', '3rd-party modules');
define('_ADMINUNCATEGORISEDMODULES',' Uncategorized modules');
define('_ADMINMODULESPERROW', 'Modules per row');
define('_ADMINNEW', 'Add');
define('_ADMINADMINVIEW', 'Main');
define('_ADMINADDCATEGORY', 'Add');
define('_ADMINNAME', 'Category name');
define('_ADMINDESCRIPTION', 'Category description');
define('_ADMINCATEGORYCREATED', 'Category created');
define('_ADMINUPDATEFAILED', 'Error! Sorry! Failed to update administration category');
define('_ADMINNOSUCHITEM', 'No such administration category');
define('_ADMINDELETEFAILED', 'Error! Sorry! Failed to delete administration category');
define('_ADMINCREATEFAILED', 'Error! Sorry! Failed to create administration category');
define('_ADMINDELETEFAILEDDEFAULT', 'You cannot delete the default Admin category');
define('_ADMINDELETEFAILEDSTART', 'You cannot delete the start Admin category');
define('_ADMINVIEW', 'Main categories');
define('_ADMINOPTIONS', 'Options');
define('_ADMINUPDATECATEGORY', 'Edit category');
define('_ADMINCATEGORYUPDATED', 'Administration category updated');
define('_ADMINDELETECATEGORY', 'Delete category');
define('_ADMINCONFIRMCATEGORYDELETE', 'Confirm deletion of administration category');
define('_ADMINCANCELCATEGORYDELETE', 'Cancel deletion of administration category');
define('_ADMINDELETED', 'Administration category deleted');
define('_ADMINFAILEDADDMODTOCAT', 'Error! Sorry! Failed to add module to category');
define('_ADMINDISPLAYICONS', 'Display icons in administration panel');
define('_ADMINDEFAULTCATEGORY', 'Default category for newly-added modules');
define('_ADMINITEMSPERPAGE', 'Categories per page');
define('_ADMINSKIN', 'Stylesheet for rendering administration panel');
define('_ADMINSTARTCATEGORY', 'Start category');
define('_ADMINIGNOREINSTALLERCHECK', 'Ignore check for installer');
define('_ADMINIGNOREINSTALLERCHECKWARNING', 'WARNING: only check this box if on an isolated system otherwise your installation could be compromised.');
define('_ADMINAUTOMATEDARTICLES','Programmed articles');
define('_ADMINNOAUTOARTICLES','There are no programmed articles');
define('_ADMINSTORYID', 'Story ID');
define('_ADMINCURRENTPOLL', 'Current poll');
define('_ADMINMODSPERROWNUMERIC', 'The \'Modules per row\' setting must be numeric');
define('_ADMINCATPERPAGENUMERIC', 'The \'Categories per row\' setting must be numeric');
define('_ADMINTHEME', 'Theme for admin panel');
define('_ADMINTHEMESITE', 'Use site theme');
define('_ADMINGENERALSETTINGS', 'General');
define('_ADMINCATEGORYSETTINGS', 'Categories');
define('_ADMINTITLE', 'Admin');
define('_ADMIN_SECURITYCENTERNOTINSTALLED', 'WARNING: The SecurityCenter module is not installed!');
define('_ADMIN_SECURITYCENTERNOTENABLED', 'WARNING: The <a href="index.php?module=SecurityCenter&type=admin&func=modifyconfig">SecurityCenter</a> module is not enabled!');
define('_ADMIN_SAFEHTML', 'WARNING: <a href="index.php?module=SecurityCenter&type=admin&func=modifyconfig">SafeHTML-Outputfilter</a> should be used');
define('_ADMIN_PNSECURITYANALYZER', 'PostNuke Security Analyzer');
?>