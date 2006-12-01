<?php
/**
 * PostNuke Application Framework
 *
 * @copyright (c) 2002, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: admin.php 20655 2006-11-29 11:01:15Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package PostNuke_System_Modules
 * @subpackage  PostNuke_Settings
 */

define('_ACTAUTODETECT', 'Auto detect language from browser settings');
define('_ACTMULTILINGUAL','Activate multilingual features');
define('_ADMINEMAIL','Administrator\'s e-mail address');
define('_ADMINGRAPHIC','Enable graphics in administration menu');
define('_ALLOWUSERS','Allow other users to view your e-mail address');
define('_ANONYMOUSSESSIONS', 'Use sessions for unregistered users');
define('_BACKENDCONF','Back-end configuration');
define('_BACKENDLANG','Back-end language');
define('_BACKENDTITLE','Back-end title');
define('_CENSORTEXT','Enable censorship');
define('_DETECTLANGUAGE','Detect language');
define('_DYNKEYWORDS','Dynamic meta-keywords');
define('_ENTRYPOINT', 'Entry point for site');
define('_ENTRYPOINTDESC', 'File through will all site operations are directed (default: index.php)');
define('_ERRORDISPLAY','What errors shall be shown?');
define('_ERRORHANDLING','Error handling');
define('_ERRORLOGGING','What errors shall be logged?');
define('_ERRORLOGTYPE','Type of error log');
define('_ERRORMAILTO','Send error mails to');
define('_ERRORREPORTING','Error reporting');
define('_GENSITEINFO','General site information');
define('_HTMLALLOWED','HTML tags allowed in posts');
define('_HTMLALLOWENTITIES','Translate embedded HTML entities into real characters');
define('_HTMLOPT','HTML options');
define('_HTMLTAGALLOWED','Allowed');
define('_HTMLTAGALLOWEDWITHPARAMS','Allowed with attributes');
define('_HTMLTAGNAME','Tag');
define('_HTMLTAGNOTALLOWED','Not allowed');
define('_HTMLWARNING','WARNING: enabling the &lt;img&gt;, &lt;span&gt;, &lt;marquee&gt; &lt;script&gt; &lt;embed&gt; &lt;object&gt; or &lt;iframe&gt; tags can leave your users open to attacks that will reveal their personal information, and so you are recommended to keep the setting for this tag to "Not allowed" unless you are absolutely sure that you understand what enabling the tag will allow');
define('_INVALIDEMAIL', 'Invalid email address - please check');
define('_LANGDETECTBROWSER','Browser language');
define('_LANGDETECTOFF','No detection');
define('_LOCALEFORMAT','Local time format');
define('_LOGALLERRORS','Log all notices, warnings and errors');
define('_LOGERRORSONLY','Log real errors only');
define('_LOGFILEPERMODULE','Write to log file depending on module');
define('_LOGNOERRORS','Don\'t log any error');
define('_METAKEYWORDS','Meta-keywords');
define('_METATAGSETTINGS', 'Meta-tags');
define('_MISCSETTINGS', 'Miscellaneous');
define('_MLOPT', 'Multi-lingual options');
define('_MLSETTINGS', 'Multi-lingual settings');
define('_MULTILANGUAGESETTNGS', 'Multilingual settings');
define('_PASSBYMAIL','(Send users their password by e-mail after registration)');
define('_PHPSYSTEMLOG', 'Use PHP system log as configured in php.ini');
define('_REFERERONPRINT','Check referrer on printer-friendly page');
define('_SECHIGH','High (users must log-in each time they return to the site)');
define('_SECINACTIVELENGTH','Users become inactive after having been idle for');
define('_SECLEVEL','Security level');
define('_SECLOW','Low (users stay logged-in permanently)');
define('_SECMEDIUM','Medium (users stay logged-in for a set number of days)');
define('_SECMEDLENGTH','For medium security, users stay logged-in for');
define('_SECOPT','Security options');
define('_SELLANGUAGE','Default language to use for this web site');
define('_SESSIONIPCHECK', 'IP checks on session (may stop correct function for AOL users)');
define('_SESSIONNAME', 'Session cookie name');
define('_SESSIONNAMEWARNING', 'After changing this value all users will have to log in again');
define('_SETTINGSALLOWEDHTML', 'Permitted HTML');
define('_SETTINGSGENERAL', 'General settings');
define('_SETTINGSUSERCONFIGURATION', 'User configuration');
define('_SHORTURLS', 'Short URLs');
define('_SHORTURLSDIRECTORY', 'Directory');
define('_SHORTURLSENABLE', 'Enable short urls');
define('_SHORTURLSFILE', 'File');
define('_SHORTURLSHTACCESS', 'File based short urls and \'strip entry point from directory based urls\' require .htaccess files placed in the PostNuke root. Sample .htaccess files can be found in the docs directory');
define('_SHORTURLSSTRIPENTRYPOINT', 'Strip entry point from directory based urls');
define('_SHORTURLSTYPE', 'Type of urls generated');
define('_SHORTURLS_EXTENSION', 'Extension for file based urls');
define('_SHOWALLERRORS','Show all notices, warnings and errors');
define('_SHOWERRORSONLY','Show real errors only');
define('_SHOWNOERRORS','Suppress all errors');
define('_SIGNCOOKIES', 'Sign cookies?');
define('_KEYEXPIRY', 'Time limit for authkeys in seconds (default 0)');
define('_SIGNINGKEY', 'Signing key');
define('_SINGLELOGFILE','Write to global log file');
define('_SITECONFIG','Web site configuration');
define('_SITELOGO','Site description (used on back-end pages only, such as printer-friendly page and RSS feed)');
define('_SITENAME', 'Site name');
define('_SITEOFF', 'Disable access to site');
define('_SITEOFFREASON', 'Reason for disabling access to site');
define('_SITESECUREURL','Secure host name');
define('_SITESECUREURL1','Only insert an entry here if you use a different host name for HTTPS');
define('_SITESECUREURL2','Include a trailing slash');
define('_SITESECUREURL3','for example:  secure.yourdomain.com/');
define('_SITESECUREURL4','for example: secure.host.com/~username/');
define('_SITESLOGAN','Site description');
define('_STARTARGS', 'Arguments for start function');
define('_STARTARGSDESCR', 'comma-separated, Example:  name=value,name2=value2');
define('_STARTDATE','Site launch date');
define('_STARTFUNC','Start function');
define('_STARTMODULE', 'Start page');
define('_STARTPAGE','Start module');
define('_STARTPAGEDESCR','(The module index.php is pointing to)');
define('_STARTTYPE', 'Start function type');
define('_TIMEZONEOFFSET', 'Unregistered users time zone');
define('_TIMEZONESERVER', 'Server time zone');
define('_USECOMPRESSION','Activate compression');
define('_SETTINGSBASESITECONFIG', 'Base site configuration');
define('_SETTINGS_GC_PROBABILITY', 'Garbage collection probability');
define('_SETTINGS_GC_RATIO', 'out of 10000');
define('_SETTINGSWHERETOSAVE', 'Where to save sessions');
define('_SETTINGSFILE', 'To file');
define('_SETTINGSDB', 'To database (recommended)');
define('_SETTINGS_SESSIONSAVEPATH', 'Path to save session files to');
define('_SETTINGS_SESSIONSAVEPATHTXT1', 'Set this before you change session storage to files');
define('_SETTINGS_SESSIONSAVEPATHTXT2', 'Path must be writable!');
define('_SETTINGS_SESSIONSAVEPATHTXT3', 'for example: C:\WINDOWS\TEMP');
define('_SETTINGS_SESSIONSAVEPATHTXT4', 'for example: /tmp');
define('_SETTINGSWHERETOSAVETXT1', 'Warning, changing this will cause you to be logged out.');
define('_SETTINGS_SESSIONPATHNOTWRITABLE', 'Session path not writable!');
define('_SETTINGS_SESSIONS', 'Sessions');
define('_SETTINGS_OTHERSEC', 'Other security options');
define('_SETTINGS_AUTHKEY', 'Authkey');
define('_SETTINGS_AUTHKEYUA', 'Bind authkey to UserAgent');
define('_SETTINGS_SESSIONREGENERATE', 'Regenerate session ID on login/logout');
define('_SETTINGS_SESSIONRANDREGENERATE', 'Periodically regenerate session ID');
define('_SETTINGS_SESSIONREGENERATEFREQ', 'Regeneration probability');
define('_SETTINGS_SESSIONREGENERATEFREQ_RATIO', 'out of 100');

define('_HTMLTAGUSAGE', 'Tag usage (from <a href="http://www.w3schools.com">W3Schools</a>)');
define('_HTMLTAGABOUT', 'About "&lt;%t%&gt;"');

?>
