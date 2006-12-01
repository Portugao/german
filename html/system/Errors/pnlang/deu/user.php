<?php
/**
 * PostNuke Application Framework
 *
 * @copyright (c) 2004, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: user.php 20341 2006-10-19 14:10:52Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package PostNuke_System_Modules
 * @subpackage  PostNuke_Errors
 */

// 404 template
define('_ERRORS_404', 'Page not found');
define('_ERRORS_COMMONH','Below are the most common mistakes in accessing %sitename%');
define('_ERRORS_COMMONM','Common mistakes');
define('_ERRORS_MAILED','The details of this error have automatically been mailed to the site administrator.');
define('_ERRORS_SORRY_404','We\'re sorry. The page you requested, %page%, doesn\'t exist on "%sitename%".');
define('_ERRORS_UPPERCASE','Using UPPER CASE CHARACTERS- <strong>all names should be in lower case only</strong>.');
define('_ERRORS_SEARCH', 'Search');
define('_ERRORS_USESEARCH', 'You can also like to <a href="%url%">search</a> this site.');

// 403 template
define('_ERRORS_403', 'Access Denied');
define('_ERRORS_LOGIN', 'Login');
define('_ERRORS_LOGINTEXT', 'You are not logged in. <a href="%url%">Logging in</a> <em>may</em> give you the permission to access this page.');
define('_ERRORS_SORRY_403', 'Sorry! You do not have authorization to access this page');

// error type text
define('_ERRORS_USER_NOTICE', 'Non critical error');
define('_ERRORS_USER_NOTICE_TEXT', 'A non-critical error has occured. The following error message was returned by the system');
define('_ERRORS_USER_WARNING', 'Non critical error');
define('_ERRORS_USER_WARNING_TEXT', 'A non-critical error has occured. The following error message was returned by the system');
define('_ERRORS_USER_ERROR', 'Critical error');
define('_ERRORS_USER_ERROR_TEXT', 'A critical error has occured. The following error message was returned by the system');

// system error template
define('_ERRORS_SYSTEMERROR', 'System Error');
define('_ERRORS_TECHNICALINFO', 'Additional technical information');
define('_ERRORS_LOCATION', 'in file <strong>%file%</strong> on line %line%');

// postnuke error template
define('_ERRORS_POSTNUKEERROR', 'PostNuke Error');

?>