<?php
/**
 * PostNuke Application Framework
 * @copyright (c) 2001, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: userapi.php 19790 2006-08-22 22:12:14Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 */

/**
 * @package     PostNuke_System_Modules
 * @subpackage  PostNuke_AntiCracker
*/

define('_SECURITYCENTER_EMAILEMAILSECTIONBREAKER','\n=====================================\n');
define('_SECURITYCENTER_EMAILATTENTION','For the attention of %sitename site administrator.\n');
define('_PNATICRACKERATDATEANDTIME','On %date at %time');
define('_SECURITYCENTER_EMAILDETECTEDANDBLOCKED',' the PostNuke code detected that somebody tried to send information to your site that may have been intended as a hack. Do not panic: it may be harmless -- maybe this detection was triggered by something you did! Anyway, it was detected and blocked.\n');
define('_SECURITYCENTER_EMAILFILELINEANDTYPE','The suspicious activity was recognized in %file on line %line, and is of the type %type. \n');
define('_SECURITYCENTER_EMAILADDINITIONALINFO','Additional information given by the code which detected this: %info');
define('_SECURITYCENTER_EMAILSTARTFULLREPORT','\n\nBelow you will find much information obtained about this attempt, that may help you to find  what happened and maybe who did it.\n\n');
define('_SECURITYCENTER_EMAILUSERINFOHEADER','Information about this user:\n');
define('_SECURITYCENTER_EMAILNOTLOGGEDIN','This person is not logged in.\n');
define('_PNHANTICRACKERUSERINFO','PostNuke user name:  %uname\nRegistered e-mail address of this PostNuke user: %email\nRegistered real name of this PostNuke user: %name');
define('_SECURITYCENTER_EMAILIPNUMBERS','IP address: [note: if you are dealing with a real cracker, these IP addresses might not be from the actual computer he/she is working on]\n\t IP according to HTTP_CLIENT_IP: %HTTP_CLIENT_IP\n\t IP according to REMOTE_ADDR: %REMOTE_ADDR\n\t IP according to GetHostByName(\$REMOTE_ADDR): %$REMOTE_ADDR\n\n');
define('_SECURITYCENTER_EMAILREQUESTARRAY','Information in the \$_REQUEST array\n');
define('_SECURITYCENTER_EMAILGETARRAY','Information in the \$_GET array\nThis is about variables that may have been in the URL string or in a \'GET\' type form.\n');
define('_SECURITYCENTER_EMAILPOSTARRAY','Information in the \$_POST array\nThis is about visible and invisible form elements.\n');
define('_SECURITYCENTER_EMAILBROWSERINFO','Browser information\n');
define('_SECURITYCENTER_EMAILSERVERARRAY','Information in the \$_SERVER array\n');
define('_SECURITYCENTER_EMAILENVARRAY','Information in the \$_ENV array\n');
define('_SECURITYCENTER_EMAILCOOKIEARRAY','Information in the \$_COOKIE array\n');
define('_SECURITYCENTER_EMAILFILESARRAY','Information in the \$_FILES array\n');
define('_SECURITYCENTER_EMAILSESSIONARRAY','Information in the \$_SESSION array\nThis is session information. The variables\nstarting with PNSV are PostNukeSessionVariables.\n');
define('_SECURITYCENTER_EMAILEMAILSUBJECT','Attempted hack on your site? (type: %hack_type)');

?>