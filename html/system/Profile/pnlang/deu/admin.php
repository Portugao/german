<?php
/**
 * PostNuke Application Framework
 *
 * @copyright (c) 2002, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: admin.php 19449 2006-07-24 08:32:28Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package PostNuke_System_Modules
 * @subpackage  PostNuke_Profile
 */

define('_PROFILEDUD','Dynamic user data');
define('_PROFILENEW','New dynamic user data');
define('_PROFILEADD','Create dynamic user data');
define('_PROFILEVIEWDUD','View dynamic user data');
define('_PROFILEEDIT', 'Edit dynamic user data');
define('_PROFILEFIELDACTIVE','Active');
define('_PROFILEFIELDLABEL','Field label');
define('_PROFILEFIELDWEIGHT','Weight');
define('_PROFILEFIELDTYPE','Data type');
define('_PROFILEFIELDLENGTH','Length');
define('_PROFILEFIELDVALIDATION','Validation rules');
define('_PROFILEOPTIONS','Options');
define('_PROFILEITEMSPERPAGE','Items per page');
define('_PROFILEITEMSPERROW','Items per row (Account Icons)');
define('_PROFILEUPDATE','Update dynamic user data');
define('_PROFILECREATED','Dynamic user data created');
define('_PROFILENOSUCHITEM', 'No such dynamic user data item');
define('_PROFILEADDINSTRUCTIONS', 'Example: _MYINT -- you must create a define in config/languages/(current language)/global.php for this variable');
define('_PROFILESTRINGINSTRUCTIONS', 'STRINGS ONLY: Data Length Range (1,254)');
define('_DYNAMICUSETDATANOSUCHITEM', 'No such dynamic user data Item');
define('_PROFILEUPDATEFAILED', 'Dynamic user data update failed');
define('_PROFILECREATEFAILED', 'Dynamic user data create failed');
define('_PROFILEDELETEFAILED', 'Dynamic user data deletion failed');
define('_PROFILEUPDATED', 'Dynamic user data updated');
define('_PROFILEDELETED', 'Dynamic user data deleted');
define('_PROFILEDELETE', 'Delete DUD  property');
define('_PROFILECONFIRMDELETE', 'Confirm deletion of DUD property');
define('_PROFILECANCELDELETE', 'Cancel deletion of DUD property');
define('_FIELD_DEACTIVATE', 'Deactivate');
define('_FIELD_ACTIVATE', 'Activate');
define('_FIELD_REQUIRED', 'Required');
if (!defined('UDCONST_MANDATORY')) {
    define('UDCONST_MANDATORY',-1);
}
if (!defined('UDCONST_CORE')) {
    define('UDCONST_CORE', 0);
}
if (!defined('UDCONST_STRING')) {
    define('UDCONST_STRING', 1);
}
if (!defined('UDCONST_TEXT')) {
    define('UDCONST_TEXT', 2);
}
if (!defined('UDCONST_FLOAT')) {
    define('UDCONST_FLOAT', 3);
}
if (!defined('UDCONST_INTEGER')) {
    define('UDCONST_INTEGER', 4);
}
define('_UDT_CORE','Core');
define('_UDT_COREREQUIRED','Core-Required');
define('_UDT_FLOAT','Float');
define('_UDT_FLOATREQUIRED','Float-Required');
define('_UDT_INTEGER','Integer');
define('_UDT_INTEGERREQUIRED','Integer-Required');
define('_UDT_MANDATORY','Core-required');
define('_UDT_STRING','String');
define('_UDT_STRINGREQUIRED','String-Required');
define('_UDT_TEXT','Text');
define('_UDT_TEXTREQUIRED','Text-Required');
define('_FIELD_NA','N/A');
define('_PROFILEDISPLAYGRAPHICS', 'Dispay graphics in user\'s account control panel');
define('_PROFILERREQUIRED', 'Required');
define('_PROFILEFORADMINONLY', 'For administrator only');
define('_PROFILEVIEWABLEBY', 'Viewable by');
define('_PROFILEVIEWBYOPTIONADM', 'Admins only');
define('_PROFILEVIEWBYOPTIONUSR', 'Members only');
define('_PROFILEVIEWBYOPTIONALL', 'Everyone');
define('_PROFILEDISPLAYTYPE', 'Display type');
define('_PROFILELISTOPTIONS', 'List content: <br /> Precede each option by @@');
define('_PROFILENOTE', 'Note');
define('_PROFILEVALIDATION', 'Validation');
define('_PROFILEFIELDTEXT', 'TEXT');
define('_PROFILEFIELDTEXTAREA', 'TEXTAREA');
define('_PROFILEFIELDCHECKBOX', 'CHECKBOX');
define('_PROFILEFIELDRADIO', 'RADIO');
define('_PROFILEFIELDSELECT', 'SELECT');
define('_PROFILEFIELDDATE', 'CALENDAR');
define('_PROFILEFIELDEXTDATE', 'DATE (Extended)');
define('_PROFILEFIELDCOMBOTEXT', 'COMBO (Text)');
define('_PROFILEFIELDCOMBONOTE', 'Combos : id1,item1;id2,item2; - fields are separated by a ";" and the id and label of each field by a ","');
define('_PROFILEDRAGANDDROPHINT', 'Arrange the order of the fields using drag and drop. The field order will be saved when you drop it at another place.');
?>