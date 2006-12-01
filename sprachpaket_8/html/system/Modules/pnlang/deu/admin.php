<?php
/**
 * PostNuke Application Framework
 * @copyright (c) 2002, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: admin.php 20039 2006-09-15 12:51:12Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package PostNuke_System_Modules
 * @subpackage  PostNuke_Modules
*/

// hooks
define('_MODULES_ENABLEHOOKSEXTENDED', 'Hooks to enable for this module (extended settings)');
define('_MODULES_ENABLEHOOKS', 'Hooks to enable for this module');
define('_MODULES_EXTENDEDHOOKS', 'Extended Hook Settings');
define('_MODULES_EXTENDEDHOOKSWARNING', 'Caution! Here you can enable single hooks and change the order in which they are invoked. If you are not sure about the effects, leave this as is.<br /><br />You can move the hooks using drag&drop within the sections. Moving a hook from one section to another does not work as it makes no sense.');
define('_MODULES_STANDARDHOOKS', 'Standard Hook Settings');

// module dependencies
define('_MODULES_DEPENDENCYSTATE', 'Level');
define('_MODULES_DEPENDENCY_NOTFOUND', 'Not found in system');
define('_MODULES_DEPENDENCY_NOTFOUNDREGENERATE', 'Ensure that this module is present in the system (and modules list is regenereated!)');
define('_MODULES_DEPENDENCY_REQUIRED', 'Required');
define('_MODULES_DEPENDENCY_RECOMMENDED', 'Recommended');
define('_MODULES_HASDEPENDENCIES', 'This module has dependencies that are currently not met by the system.');
define('_MODULES_REMOVEDEPENDENTS', 'This module is used by other modules present in your system. Any modules listed as required dependents will be removed when removing this module.');

// errors, warnings and statuses
define('_MODULES_ACTIVATED', 'Module activated');
define('_MODULES_BLOCKSEXIST', 'This module cannot be removed as there are blocks related to this module active.');
define('_MODULES_CONFIRMDELETE', 'Warning: This action will permantly remove all data associated with this module including data held by modules hooked to this module!');
define('_MODULES_DEACTIVATED', 'Module deactivated');
define('_MODULES_DUPLICATEDISPLAYNAME', 'Cannot update module display info - a duplicate display name was detected!');
define('_MODULES_FILESMISSING', 'Files missing');
define('_MODULES_INITIALISED', 'Module installed');
define('_MODULES_ITEMSPERPAGENUMERIC', 'The setting \'Items per page\' must be a positive integer. The value you entered was corrected.');
define('_MODULES_NOHOOKS', 'No hooks installed');
define('_MODULES_NOSUCHMODID', 'Error! No such module ID');
define('_MODULES_NOMODID', 'No module ID supplied');
define('_MODULES_NOMODS', 'No modules available');
define('_MODULES_UPGRADED', 'New version installed');
define('_MODULES_REGENERATED', 'Modules list regenerated from file system');
define('_MODULES_REMOVED', 'Module uninstalled');
define('_MODULES_UPDATEDINFORMATION', 'Updated module information');

// interface components
define('_MODULES_ADMIN', 'Go to module administration panel');
define('_MODULES_CONFIRMINITIALISE', 'Confirm initialisation of module');
define('_MODULES_DELETE', 'Remove module');
define('_MODULES_DISPNAME', 'Display name');
define('_MODULES_GENERATE', 'Generate list of modules');
define('_MODULES_INITIALISE', 'Install');
define('_MODULES_FILTERBYSTATE', 'Filter by state');
define('_MODULES_INVALID', 'Invalid');
define('_MODULES_LOADLEGACY', 'Load legacy module support');
define('_MODULES_MODIFY', 'Modify module');
define('_MODULES_NEWDESCRIPTION', 'Enter new description');
define('_MODULES_NEWNAME', 'Enter new name');
define('_MODULES_REGENERATE', 'Regenerate List');
define('_MODULES_UNINIT', 'Not installed');
define('_MODULES_UPGRADE', 'Upgrade');
define('_MODULES_REMOVE', 'Remove module');
define('_MODULES_STATE', 'State');
define('_MODULES_VERSION', 'Version');

?>