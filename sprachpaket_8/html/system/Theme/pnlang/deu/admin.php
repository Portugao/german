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

define('_THEME_MAKEURLSCLICKABLE', 'Make urls clickable');
define('_THEME_MAXSIZEFORLINKS', 'Limit linktexts to x Bytes');
define('_THEME_MAXSIZEDEFAULTHINT', '(default: 30)');
define('_THEME_VIEWTHEMES','View themes');
define('_THEME_ENGINE', 'Xanthia Theme Engine');
define('_THEME_AVAILABLETHEMES', 'Available themes');
define('_THEME_THEMENAME', 'Theme name');
define('_THEME_THEMECREDITS', 'Credits');
define('_THEME_INIFILENOTFOUND', 'Theme configuration file not found');
define('_THEME_NOHTACCESS', 'Sorry! The .htaccess file supplied with Xanthia is not in your web root. That file has to be in your web root for short URLs to work');
define('_THEME_USECACHE','Enable caching');
define('_THEME_CACHETYPE','Store cache data in database');
define('_THEME_CACHETIME','Length of time to cache pages');
define('_THEME_TEMPLATECHECK','Check for updated version of templates');
define('_THEME_FORCETEMPLATECHECK', 'Force templates recompilation');
define('_THEME_NOCACHE', 'Modules to exclude from caching');
define('_THEME_TRIMWHITESPACE', 'Use trimwhitespace output filter');
define('_THEME_COMMASEPERATED', 'Comma-separated');
define('_THEME_PAGECONFIGURATIONS', 'Page configurations');
define('_THEME_PAGECONFIGURATIONASSIGNMENTS', 'Page configuration assignments');
define('_THEME_PALETTES', 'Color palettes');
define('_THEME_VARIABLES', 'Variables');
define('_THEME_BLOCKCONTROL', 'Block control');
define('_THEME_MODIFY', 'Modify theme');
define('_THEME_VARIABLENAME', 'Name');
define('_THEME_VARIABLEVALUE', 'Value');
define('_THEME_CONFIGURATIONNAME', 'Name');
define('_THEME_MODIFYPAGECONFIG', 'Modify page configuration');
define('_THEME_MODIFYPAGECONFIGASSIGNMENT', 'Modify page configuration assignment');
define('_THEME_PAGETEMPLATE', 'Page template');
define('_THEME_BLOCKPOSITIONTEMPLATES', 'Block postion templates');
define('_THEME_BLOCKTYPETEMPLATES', 'Block type templates');
define('_THEME_BLOCKINSTANCETEMPLATES', 'Block instance templates');
define('_THEME_DEFAULTTEMPLATE', 'Default template');
define('_THEMERUNNINGCONFIGCREATED', 'Running configuration generated');
define('_THEME_CREATENEWVARIABLE', 'Create new variable');
define('_THEME_CREATEPALETTE', 'Create palette');
define('_THEME_PALETTENAME', 'Palette name');
define('_THEME_CREDITS', 'Credits');
define('_THEME_BLOCKNAME', 'Block name');
define('_THEME_CREATENEWPAGECONFIGURATION', 'Create new page configuration');
define('_THEME_CONFIGURATIONMODULE', 'Module');
define('_THEME_CONFIGURATIONTYPE', 'Function type');
define('_THEME_CONFIGURATIONFUNC', 'Function name');
define('_THEME_CONFIGURATIONCUSTOMARGS', 'Custom arguments');
define('_THEME_CONFIGURATIONFILE', 'Configuration file');
define('_THEME_HOMEPAGE', 'Homepage');
define('_THEME_FAILEDTOOPENFILEFORWRITING', 'Failed to open file for writing');
define('_THEME_FAILEDTOWRITETOFILE', 'Failed to write to file');
define('_THEME_MASTER', 'Master');
define('_THEME_ADMINPAGES', 'Admin pages');
define('_THEME_NOSUCHPAGECONFIGASSIGNMENT', 'No such page configuration assignment');
define('_THEMES_REGENERATED', 'Regenerated themes list');
define('_THEME_THEMETYPE', 'Type');
define('_THEME_LEGACY', 'Legacy');
define('_THEME_OLDXANTHIA', 'Xanthia 2.0');
define('_THEME_XANTHIA', 'Xanthia 3.0');
define('_THEME_AUTOTHEME', 'Autotheme');
define('_THEME_SETTINGS', 'Settings');
define('_THEME_REGENERATE', 'Regenerate themes list');
define('_THEME_DISPLAYNAME', 'Display name');
define('_THEME_USERTHEME', 'User theme');
define('_THEME_SYSTEMTHEME', 'System theme');
define('_THEME_ADMINTHEME', 'Admin theme');
define('_THEME_USERTHEMENOTE', 'Themes selectable by users to view the site');
define('_THEME_SYSTEMTHEMENOTE', 'Themes used to deliver backend services (e.g. RSS)');
define('_THEME_ADMINTHEMENOTE', 'Themes used to display admin panel');
define('_THEME_COULDNOTINCLUDE', 'Could not include theme version file: ');
define('_THEME_ID', 'ID');
define('_THEME_NAME', 'Name');
define('_THEME_TYPE', 'Type');
define('_THEME_DESCRIPTION', 'Description');
define('_THEME_REGID', 'Registration ID');
define('_THEME_DIRECTORY', 'Directory');
define('_THEME_VERSION', 'Version');
define('_THEME_OFFICIAL', 'Official');
define('_THEME_AUTHOR', 'Author');
define('_THEME_CONTACT', 'Contact');
define('_THEME_ADMIN' ,'Admin panel theme');
define('_THEME_USER', 'User theme');
define('_THEME_SYSTEM', 'System theme (e.g. rss)');
define('_THEME_STATE', 'State');
define('_THEME_CHANGELOG', 'Changelog');
define('_THEME_HELP', 'Help');
define('_THEME_LICENSE', 'License');
define('_THEME_SETTINGSUPDATED', 'Settings updated');
define('_THEME_CACHINGOPTONS', 'Caching');
define('_THEME_DELETECACHEDTEMPLATES', 'Delete cached templates');
define('_THEME_COMPILATIONOPTONS', 'Compilation');
define('_THEME_DELETECOMPILEDTEMPLATES', 'Delete compiled templates');
define('_THEME_FILTEROPTIONS', 'Filters');
define('_THEME_SELECTIONOPTONS', 'Theme selection');
define('_THEME_ALLOWUSERSTOCHANGE', 'Allow users to change themes');
define('_THEME_SETASDEFAULT', 'Set as default');
define('_THEME_SETDEFAULT', 'Set default theme');
define('_THEME_DEFAULTNOTE', 'This will set %t% as the active theme for all users of your site!');
define('_THEME_RESETUSERSELECTED', 'Reset user theme overrides');
define('_THEME_DEFAULTCHANGED', 'Default theme changed');
define('_THEME_DEFAULT', 'Default theme');
define('_THEME_UPGRADE', 'Upgrade');
define('_THEME_UPGRADED', 'Theme upgraded');
define('_THEME_CACHE_CLEARED', 'Cache cleared');
define('_THEME_COMPILED_CLEARED', 'Compiled templates deleted');
define('_THEME_PAGEPALETTE', 'Palette');
define('_THEME_PAGESETTINGS', 'Page settings');
define('_THEME_THEMEDIRMUSTBEWRITABLE', 'Theme directory must be writable');
define('_THEME_ITEMSPERPAGE', 'Items per page');
define('_THEME_GENERALSETTINGS', 'General Settings');
define('_THEME_DELETE', 'Delete Theme');
define('_THEME_CONFIRMDELETE', 'Confirm removal of theme');
define('_THEME_DELETED', 'Theme deleted');
define('_THEME_CACHETIMENOTE1', 'A cache lifetime of 0 will set to cache to always regenerate - equivalent to no caching.');
define('_THEME_CACHETIMENOTE2', ' A cache lifetime of -1 will never expire the cached output'); 
define('_THEME_XHTML', 'XHTML capable');
define('_THEME_NEW', 'Create theme');
define('_THEME_LAYOUT', 'Layout');
define('_THEME_NOLAYOUT', 'Empty template');
define('_THEME_2COLLEFT', '2 columns - left menu');
define('_THEME_2COLRIGHT', '2 columns - right menu');
define('_THEME_3COL', '3 columns - flanking menus');
define('_THEME_LAYOUTSBLUEROBOT', 'Layouts from the <a href="http://www.bluerobot.com/web/layouts/">Layout reservoir</a> at <a href="http://www.bluerobot.com/">BlueRobot.com</a>.');
define('_THEME_CREATIONFAILED', 'Theme creation failed');
define('_THEME_CREATED', 'Theme created');
define('_THEME_UNDEFINEDBLOCKPOSITIONS', '<p>The following block positions, used by this page configuration, are not defined in the blocks module;</p>%p%<p>Click on a block position to create it.</p>');
define('_THEME_UNTITLEDBLOCK', 'Untitled block of type %k%, ID %b%');
define('_THEME_MODULEWRAPPER', 'Display module wrapper DIV');
define('_THEME_BLOCKWRAPPER', 'Display block wrapper DIV');
define('_THEME_NEW_DISABLED', 'Theme creation is disabled as the theme directory isn\'t writable');

?>