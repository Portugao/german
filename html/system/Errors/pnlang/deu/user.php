<?php
/**
 * PostNuke Application Framework
 *
 * @copyright (c) 2004, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id$
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package PostNuke_System_Modules
 * @subpackage  PostNuke_Errors
 */

// 404 template
define('_ERRORS_404', 'Seite nicht gefunden');
define('_ERRORS_MAILED','Die Details zu diesem Fehlers wurden automatisch an den Administrator der Site gesendet.');
define('_ERRORS_SORRY_404','Schade. Die angeforderte Seite %page%, existiert nicht auf "%sitename%".');
define('_ERRORS_SEARCH', 'Suche');
define('_ERRORS_USESEARCH', 'Vielleicht die <a href="%url%">Suche</a> benutzen.');

// 403 template
define('_ERRORS_403', 'Zugriff verweigert');
define('_ERRORS_LOGIN', 'Login');
define('_ERRORS_LOGINTEXT', 'Nicht angemeldet - eine <a href="%url%">Anmeldung</a> <em>kann</em> unter Umständen den Zugriff auf diese Seite ermöglichen.');
define('_ERRORS_SORRY_403', 'Stop! Nicht zum Zugriff auf diese Seite berechtigt');

// error type text
define('_ERRORS_USER_NOTICE', 'Unkritischer Fehler');
define('_ERRORS_USER_NOTICE_TEXT', 'Ein unkritischer Fehler ist aufgetreten. Die folgende Fehlermeldung wurde vom System zurückgegeben');
define('_ERRORS_USER_WARNING', 'Unkritischer Fehler');
define('_ERRORS_USER_WARNING_TEXT', 'Ein unkritischer Fehler ist aufgetreten. Die folgende Fehlermeldung wurde vom System zurückgegeben');
define('_ERRORS_USER_ERROR', 'Kritischer Fehler');
define('_ERRORS_USER_ERROR_TEXT', 'Ein kritischer Fehler ist aufgetreten. Die folgende Fehlermeldung wurde vom System zurückgegeben');
define('_ERRORS_USER_UNKNOWN', 'Unbekannter Fehler');
define('_ERRORS_USER_UNKNOWN_TEXT', 'Ein unbekannter Fehler ist aufgetreten. Die folgende Fehlermeldung wurde vom System zurückgegeben');

// system error template
define('_ERRORS_SYSTEMERROR', 'Systemfehler');
define('_ERRORS_TECHNICALINFO', 'Zusätzliche technische Informationen');
// additional text appended to any error mesages should the user have administrative permissions
// format is error message (_ERRORS_LOCATION)
define('_ERRORS_LOCATION', 'in Datei <strong>%file%</strong> in Zeile %line%');

// general error template
define('_ERRORS_ERROR', '%sitename%-Fehler');
