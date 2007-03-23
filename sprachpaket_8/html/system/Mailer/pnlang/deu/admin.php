<?php
/**
 * PostNuke Application Framework
 *
 * @copyright (c) 2001, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: admin.php 20589 2006-11-23 12:34:25Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package PostNuke_System_Modules
 * @subpackage  PostNuke_Mailer
 */

// general 
define('_MAILER','Mailer');

// navigation
define('_MAILER_TESTCONFIG', 'Konfiguration testen');

// modify config
define('_MAILER_CHARSET', 'Characterset (Default: iso-8859-1)');
define('_MAILER_CONTENTTYPE', 'E-Mails HTML-kodiert senden');
define('_MAILER_ENCODING', 'Encoding (Default: 8-bit)');
define('_MAILER_GENERALSETTINGS', 'Grundeinstellungen');
define('_MAILER_MSMAILHEADERS', 'Microsoft Mailclient Header setzen');
define('_MAILER_SENDMAILSETTINGS', 'SendMail Einstellungen');
define('_MAILER_TRANSPORT', 'Mail-Transport');
define('_MAILER_WORDWRAP', 'Zeilenlänge (Default: 50 Zeichen)');

// send mail settings
define('_MAILER_SENDMAIL', 'Sendmail');
define('_MAILER_SENDMAILPATH', 'Sendmail Path');

// smtp settings
define('_MAILER_SMTPAUTH', 'SMTP Authentifizierung');
define('_MAILER_SMTPMAIL', 'SMTP');
define('_MAILER_SMTPPASSWORD', 'SMTP password');
define('_MAILER_SMTPPORT','SMTP Port (default: 25)');
define('_MAILER_SMTPSERVER','SMTP Server (Default: localhost)');
define('_MAILER_SMTPSETTINGS', 'SMTP Einstellungen');
define('_MAILER_SMTPTIMEOUT', 'SMTP timeout (Sekunden, Default: 10)');
define('_MAILER_SMTPUSERNAME', 'SMTP username');

// other mail transports
define('_MAILER_PHPMAIL', 'PHP mail()');
define('_MAILER_QMAIL', 'QMail');

// test configuration
define('_MAILER_HTML', 'HTML-formatiert');
define('_MAILER_BODY', 'Nachricht');
define('_MAILER_FROMADDRESS', 'Absender E-Mail');
define('_MAILER_FROMNAME', 'Absender Name');
define('_MAILER_PNMAIL', 'Nachricht via pnMail-API senden');
define('_MAILER_SUBJECT', 'Betreff');
define('_MAILER_TOADDRESS', 'Empfänger E-Mail');
define('_MAILER_TONAME', 'Empfänger Name');

// errors/statuses
define('_MAILER_MESSAGESENT', 'Nachricht gesendet');
define('_MAILER_MESSAGENOTSENT', 'Nachricht nicht gesendet');

?>