<?php
/**
 * PostNuke Application Framework
 * @copyright (c) 2001, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: admin.php 20572 2006-11-22 18:33:36Z rgasch $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 */

/**
 * @package     PostNuke_System_Modules
 * @subpackage  PostNuke_AntiCracker
 */
define('_SECURITYCENTER_OUTPUTFILTER', 'Output filter settings');
define('_SECURITYCENTER_SELECTOUTPUTFILTER', 'Select outputfilter');
define('_SECURITYCENTER_OUTPUTFILTERINTERNAL', 'internal output filter');
define('_SECURITYCENTER_OUTPUTFILTERSAFEHTML', 'Use SafeHTML as output filter');

define('_SECURITYCENTER_','Security Center');
define('_SECURITYCENTER_VIEWHACKATTEMPTSFROMDB','View hacking attempts in database');
define('_SECURITYCENTER_VIEWHACKATTEMPTSFROMFILE','View hacking attempts in log file');
define('_SECURITYCENTER_MODIFYCONFIG','Modify Security configuration');
define('_SECURITYCENTER_DISPLAYENABLE','Enable Hacker Protection');
define('_SECURITYCENTER_DISPLAYEMAIL','Notify about hacking attempts via e-mail');
define('_SECURITYCENTER_DISPLAYLOGTODB','Log hacking attempts to database');
define('_SECURITYCENTER_ONLYSENDSUMMARYBYEMAIL','When logging to database, only send a summary e-mail message');
define('_SECURITYCENTER_DISPLAYITEMSPERPAGE','Items per page');
define('_SECURITYCENTER_UPDATE','Update Security Center');
define('_SECURITYCENTER_VIEW','View hacking attempts');
define('_SECURITYCENTER_NUMBER', 'ID');
define('_SECURITYCENTER_FILE','File');
define('_SECURITYCENTER_LINE','Line');
define('_SECURITYCENTER_TYPE','Type');
define('_SECURITYCENTER_INFO','Additional information');
define('_SECURITYCENTER_TIME','Time');
define('_SECURITYCENTER_USERID','User ID');
define('_SECURITYCENTER_OPTIONS','Options');
define('_SECURITYCENTER_BROWSERINFO', 'View browser info');
define('_SECURITYCENTER_REQUESTARRAY', 'View \'request\' array');
define('_SECURITYCENTER_GETARRAY', 'View \'get\' array');
define('_SECURITYCENTER_POSTARRAY', 'View \'post\' array');
define('_SECURITYCENTER_SERVERARRAY',' View \'server\'  array');
define('_SECURITYCENTER_ENVARRAY', 'View \'env\' array');
define('_SECURITYCENTER_COOKIEARRAY', 'View \'cookie\'  array');
define('_SECURITYCENTER_FILESARRAY', 'View \'files\' array');
define('_SECURITYCENTER_SESSIONARRAY', 'View \'session\' array');
define('_SECURITYCENTER_VARIABLE', 'Variable');
define('_SECURITYCENTER_VARIABLEVALUE', 'Variable value');
define('_SECURITYCENTER_DELETE', 'Delete crack attempt');
define('_SECURITYCENTER_CONFIRMDELETE', 'Confirm deletion of hacking attempt report');
define('_SECURITYCENTER_CANCELDELETE', 'Cancel deleteion of hacking attempt report');
define('_SECURITYCENTER_NOSUCHITEM', 'No such item');
define('_SECURITYCENTER_DELETED', 'Hacking attempt report deleted');
define('_SECURITYCENTER_MAILTEXT', 'Mailtext');
define('_SECURITYCENTER_SUMMARYCONTENT', 'Summary content');
define('_SECURITYCENTER_FULLCONTENT', 'Additional content for full mail message');
define('_SECURITYCENTER_USEHTACCESSBANS', 'Use .htaccess to ban IP addresses');
define('_SECURITYCENTER_FILTERGETVARS', 'Sanitize \'$_GET\' variables');
define('_SECURITYCENTER_FILTERCOOKIEVARS', 'Sanitize \'$_COOKIE\' variables');
define('_SECURITYCENTER_FILTERPOSTVARS', 'Sanitize \'$_POST\' variables');
define('_SECURITYCENTER_EXTRAPOSTPROTECTION', 'Use extra \'post\' protection');
define('_SECURITYCENTER_EXTRAGETPROTECTION', 'Use extra \'get\' protection');
define('_SECURITYCENTER_CHECKMULTIPOST', 'Only allow \'maxmultiPOST\' number of successive posts');
define('_SECURITYCENTER_MAXMULTIPOST', 'Maximum number of post operations in succession, if checkmultipost is enabled');
define('_SECURITYCENTER_CPULOADMONITOR', 'Block access if system load exceeds certain value');
define('_SECURITYCENTER_CPUMAXLOAD', 'Maximum 5-minute system load average before blocking access');
define('_SECURITYCENTER_CCISESSIONPATH', 'Directory path for storing session files');
define('_SECURITYCENTER_HTACCESSFILELOCATION', '.htaccess file location');
define('_SECURITYCENTER_NOCOOKIEBANTHRESHOLD', 'Number of attempts before banning, when site accessed without cookies being enabled');
define('_SECURITYCENTER_NOCOOKIEWARNINGTHRESHOLD', 'Number of attempts before warning, when site accessed without cookies being enabled');
define('_SECURITYCENTER_FASTACCESSBANTHRESHOLD', 'Number of fast attempts before banning');
define('_SECURITYCENTER_FASTACCESSWARNTHRESHOLD', 'Number of fast attempts before warning');
define('_SECURITYCENTER_JAVABABBLE', 'Use encoding/encrypting (must be on for any)');
define('_SECURITYCENTER_JAVAENCRYPT', 'Do actual encrypting of HTML, not just escaping (warning: may slow display)');
define('_SECURITYCENTER_PRESERVEHEAD', 'Only encode/encrypt between BODY tags');
define('_SECURITYCENTER_GENERALCONFIG', 'General configuration');
define('_SECURITYCENTER_VARIABLECLEANSING', 'HTTP variable cleansing');
define('_SECURITYCENTER_DENIALOFSERVICE', 'Denial of service');
define('_SECURITYCENTER_ENCRYPTION', 'Encryption');
define('_SECURITYCENTER_FILTERARRAYS', 'Filter arrays in HTTP variables');

define('_SECURITYCENTER_VIEWLOGGEDEVENTS', 'View Logged Events');
define('_SECURITYCENTER_VIEW_LOGEVENT', 'View Logged Events');
define('_SECURITYCENTER_VIEW_FILTER', 'Filter');
define('_SECURITYCENTER_LOGEVENT_DELETE', 'Delete Log Event');
define('_SECURITYCENTER_LOGEVENT_DATE', 'Date');
define('_SECURITYCENTER_LOGEVENT_USER', 'User');
define('_SECURITYCENTER_LOGEVENT_COMPONENT', 'Component');
define('_SECURITYCENTER_LOGEVENT_MODULE', 'Module');
define('_SECURITYCENTER_LOGEVENT_TYPE', 'Type');
define('_SECURITYCENTER_LOGEVENT_FUNCTION', 'Function');
define('_SECURITYCENTER_LOGEVENT_SECURITY', 'Security');
define('_SECURITYCENTER_LOGEVENT_MESSAGE', 'Message');
define('_SECURITYCENTER_LOGEVENT_ACTION', 'Action');

define('_SECURITYCENTER_FILTER_ALL', 'All');
define('_SECURITYCENTER_FILTER_CLEAR', 'Clear');
define('_SECURITYCENTER_FILTER_DATE', 'Date');
define('_SECURITYCENTER_FILTER_COMPONENT', 'Component');
define('_SECURITYCENTER_FILTER_TYPE', 'Type');
define('_SECURITYCENTER_FILTER_MODULE', 'Module');
define('_SECURITYCENTER_FILTER_USER', 'User');
?>