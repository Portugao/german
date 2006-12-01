<?php
/**
 * PostNuke Application Framework
 * @copyright (c) 2002, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: admin.php 19260 2006-06-12 13:08:15Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package PostNuke_System_Modules
 * @subpackage  PostNuke_Permissions
*/

define('_PERM_ERRORUPDATINGCONFIG', 'Error updating config: unknown permission id');
define('_PERM_PERMISSIONLOCKED', 'This permission has been locked, modify the Permissions module configuration to unlock it');
define('_PERM_ADMINPERMISSIONID', 'ID of main administration permission');
define('_PERM_LOCKADMINPERMISSION', 'Lock main administration permission');
define('_PERM_LOCKADMINLOCKEDHINT','The permission rule you have defined as your main administration permission (emphasised in the list below) has been <strong>locked</strong> which means you cannot edit, move or delete it. If this permission rule is not on top of the list others may be moved around it anyway! Go to the module configuration to unlock it if necessary.');
define('_PERM_LOCKADMINUNLOCKEDHINT','The permission rule you have defined as your main administration permission (emphasised in the list below) is <strong>unlocked</strong> which means you can now edit, move or delete it. Go to the module configuration to lock it.');
define('_PERM_DRAGANDDROPHINT','Arrange your permissions using drag and drop. The sort order will be saved immediately.');
define('_PERM_YOUCANNOTDELETETHEMAINADMINPERMISSION', 'Caution: You cannot delete the main admin permission rule');
define('_PERM_UPDATINGPERMISSION', '...updating permission rule...');
define('_PERM_DELETINGPERMISSION', '...deleting permission rule...');
define('_PERM_TESTINGPERMISSION', '...testing permission...');

define('_PERM_APPEND', 'Append a new permission rule');
define('_PERM_CHECKRESULT', 'Result of permission check');
define('_PERM_GRANTED', 'permission granted');
define('_PERM_NOTGRANTED', 'permission not granted');
define('_PERM_UNKNOWNUSER', 'unknown user');
define('_PERM_CHECKPERMISSIONS', 'Check a users permission');
define('_PERM_CHECKCOMPONENT', 'Component to check');
define('_PERM_CHECKINSTANCE', 'Instance to check');
define('_PERM_CHECKUSER', 'Username');
define('_PERM_CHECKLEVEL', 'Access level');
define('_PERM_CHECK', 'Check permission');
define('_PERMISSIONS','Permissions');
define('_ALLGROUPS','All groups');
define('_ALLREALMS','All realms'); // Realms defines until they get their own home
define('_ALLUSERS','All users');
define('_REALM','Realm');
define('_INSTANCE','Instance');
define('_COMPONENT','Component');
define('_GROUPPERMS','Group');
define('_VIEWGROUPPERMS','View group permissions');
define('_MODIFYPERM','Modify');
define('_MODIFYGROUPPERM','Modify group permissions');
define('_NEWPERM',' Add ');
define('_NEWGROUPPERM','New group permission');
define('_PERMLEVEL','Permissions level');
define('_PERMOPS','Operations');
define('_SEQUENCE','Seq.');
define('_UNREGISTEREDGROUP','Unregistered');
define('_UNREGISTEREDUSER','Unregistered');
define('_PERMISSIONINFO','Permissions information');
define('_REGISTEREDCOMP','Registered component');
define('_INSTANCETEMP','Instance template');

// MMaes: Removed some hard-coded text
define('_PERM_INC','Incremented permission rule');
define('_PERM_DEC','Decremented permission rule');
define('_PERM_UPD','Updated permission rule');
define('_PERM_CREATED','Created permission rule');
define('_PERM_DEL','Removed permission rule');
define('_PERM_DECINCERR_NOID','Error! Sorry! No such permissions ID: ');
define('_PERM_DECERR_NOSWAP','No permission directly below that one');
define('_PERM_INCERR_NOSWAP','No permission directly above that one');
// MMaes: Direct Insert capability
// define('_PERM_THINS','Ins.');
define('_PERMINSBEFORE_ALTTXT','Insert permission rule  before');
define('_PERM_INSERR','Error! Sorry! Could not update permission sequences');
define('_PERM_INSNOTIFY','Inserted permission rule at position ');
// MMaes: Only show permissions applying to a group
define('_SEQ_ADJUST','Shift');
define('_PERM_VWSHOWONLY','Only show permissions applying to: ');
define('_PERM_VWFILTER','Filter');
define('_PERM_WARN_FILTERACTIVE','<strong>- PARTIAL VIEW -</strong>');
define('_PERM_PARTLY','Partial view of permissions list');
define('_PERM_SHOWING','Group: ');
define('_PERM_DECINCERR_NOSWAPPART','Error! Sorry! Permission-swapping in partial view can only be done if both affected permissions are visible. Please use full view');
// MMaes: ListEdit-function, editing in the mainview
define('_PERM_LISTNONEFOUND','Error! Sorry! No permissions of this kind were found. Please add some first');
define('_PERM_COMP_INPUTERR',' [Illegal input in component!] ');
define('_PERM_INST_INPUTERR',' [Illegal input in instance!] ');
// MMaes: Module-settings
define('_PERM_ENABLEFILTER','Enable filtering of group permissions');
define('_PERM_DISPLAYWARNING','Show warning bar when in filter list');
define('_PERM_ROWHEIGHTVIEW','Minimum viewing row height (in pixels)');
define('_PERM_ROWHEIGHTEDIT','Minimum editing row height (in pixels)');
define('_PERMISSIONSDELETE', 'Delete permission rule');
define('_PERMISSIONSCONFIRMDELETE', 'Confirm deletion of rule');

?>