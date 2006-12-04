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

define('_ACTAUTODETECT', 'Erkennung der Browser-Sprache');
define('_ACTMULTILINGUAL','Multilingual-Umgebung aktivieren');
define('_ADMINEMAIL','Administrator E-Mail-Adresse');
define('_ADMINGRAPHIC','Icons in Administration');
define('_ALLOWUSERS','Benutzern die E-Mail-Adresse zeigen');
define('_ANONYMOUSSESSIONS', 'Sessions für Gäste benutzen');
define('_BACKENDCONF','Backend Konfiguration');
define('_BACKENDLANG','Backend Sprache');
define('_BACKENDTITLE','Backend Titel');
define('_CENSORTEXT','Censor-Modul verwenden');
define('_DETECTLANGUAGE','Spracherkennung');
define('_DYNKEYWORDS','Dynamische Meta-Keywords');
define('_ENTRYPOINT', 'Einstiegspunkt für die Seite');
define('_ENTRYPOINTDESC', 'Datei über die der Seiteneinstieg erfolgt (Default: index.php)');
define('_ERRORDISPLAY','Welche Fehlertypen sollen angezeigt werden?');
define('_ERRORHANDLING','Errorhandling');
define('_ERRORLOGGING','Welche Fehlertypen sollen geloggt werden?');
define('_ERRORLOGTYPE','Typ des Error Logs');
define('_ERRORMAILTO','Fehler E-Mail schicken an');
define('_ERRORREPORTING','Error Reporting');
define('_GENSITEINFO','Allgemein');
define('_HTMLALLOWED','erlaubte HTML Tags');
define('_HTMLALLOWENTITIES','HTML Entitäten in Zeichen wandeln');
define('_HTMLOPT','HTML');
define('_HTMLTAGALLOWED','erlaubt');
define('_HTMLTAGALLOWEDWITHPARAMS','erlaubt mit Parametern');
define('_HTMLTAGNAME','Tag');
define('_HTMLTAGNOTALLOWED','nicht erlaubt');
define('_HTMLWARNING','WARNUNG:  &lt;img&gt;, &lt;span&gt;, &lt;marquee&gt; &lt;script&gt; &lt;embed&gt; &lt;object&gt; or &lt;iframe&gt; tags can leave your users open to attacks that will reveal their personal information, and so you are recommended to keep the setting for this tag to "Not allowed" unless you are absolutely sure that you understand what enabling the tag will allow');
define('_INVALIDEMAIL', 'Ungültige E-Mail-Adresse - bitte prüfen');
define('_LANGDETECTBROWSER','Browser Sprache');
define('_LANGDETECTOFF','Keine Erkennung');
define('_LOCALEFORMAT','Zeitformat');
define('_LOGALLERRORS','Loggen von notices, warnings und errors');
define('_LOGERRORSONLY','Loggen von ausschliesslich errors');
define('_LOGFILEPERMODULE','Modulabhängig Logfile schreiben');
define('_LOGNOERRORS','Errors nicht loggen');
define('_METAKEYWORDS','Meta-Keywords');
define('_METATAGSETTINGS', 'Meta-Tags');
define('_MISCSETTINGS', 'Verschiedenes');
define('_MLOPT', 'Multilingual');
define('_MLSETTINGS', 'Multilingual Einstellungen');
define('_MULTILANGUAGESETTNGS', 'Multilingual Einstellungen');
define('_PASSBYMAIL','(Benutzern nach Registrierung das Kennwort via E-Mail schicken)');
define('_PHPSYSTEMLOG', 'Das PHP System Log (definiert in php.ini) nutzen');
define('_REFERERONPRINT','Referrer auf der Druckansicht prüfen');
define('_SECHIGH','Hoch (Benutzer müssen sich bei jedem Besuch anmelden)');
define('_SECINACTIVELENGTH','Benutzer werden inaktiv nach');
define('_SECLEVEL','Sicherheitsstufe');
define('_SECLOW','Niedrig (Benutzer bleiben dauerhaft angemeldet)');
define('_SECMEDIUM','Mittel (Benutzer bleiben für eine definierte Tageszahl angemeldet)');
define('_SECMEDLENGTH','Bei mittlerer Sicherheitsstufe bleiben Benutzer angemeldet für');
define('_SECOPT','Sicherheit');
define('_SELLANGUAGE','Default Sprache für diese Webseite');
define('_SESSIONIPCHECK', 'IP Check für Session (eventuell Probleme mit AOL Benutzern)');
define('_SESSIONNAME', 'Session-Cookie Name');
define('_SESSIONNAMEWARNING', 'Nach Änderung müssen sich alle Benutzer neu anmelden');
define('_SETTINGSALLOWEDHTML', 'Erlaubtes HTML');
define('_SETTINGSGENERAL', 'Grundeinstellungen');
define('_SETTINGSUSERCONFIGURATION', 'Benutzerkonfiguration');
define('_SHORTURLS', 'Short URLs');
define('_SHORTURLSDIRECTORY', 'Directory');
define('_SHORTURLSENABLE', 'Short URLs aktivieren');
define('_SHORTURLSFILE', 'File');
define('_SHORTURLSHTACCESS', 'File basierende Short URLs und \'strip entry point from directory based urls\' benötigen eine .htaccess Datei im PostNuke Root. .htaccess-Vorlagen finden sich im /docs Verzeichnis');
define('_SHORTURLSSTRIPENTRYPOINT', 'Strip entry point from directory based urls');
define('_SHORTURLSTYPE', 'Typ der verwendeten Short URLs');
define('_SHORTURLS_EXTENSION', 'Erweiterung für File-basierende URLs');
define('_SHOWALLERRORS','notices, warnings und errors anzeigen');
define('_SHOWERRORSONLY','real errors anzeigen');
define('_SHOWNOERRORS','errors nicht anzeigen');
define('_SIGNCOOKIES', 'Cookies signieren?');
define('_KEYEXPIRY', 'Zeitlimit für Authkeys in Sekunden (default 0)');
define('_SIGNINGKEY', 'Signatur Key');
define('_SINGLELOGFILE','In das Global Logfile schreiben');
define('_SITECONFIG','Webseite Konfiguration');
define('_SITELOGO','Beschreibung (nur für Backend-Seiten wie Druckeransicht und RSS Feed)');
define('_SITENAME', 'Name');
define('_SITEOFF', 'Seite deaktivieren');
define('_SITEOFFREASON', 'Grund für Deaktivierung');
define('_SITESECUREURL','Secure Hostname');
define('_SITESECUREURL1','Nur angeben wenn ein anderer Hostname für HTTPS verwendet wird');
define('_SITESECUREURL2','Führenden Slash angeben');
define('_SITESECUREURL3','z.B.:  secure.yourdomain.com/');
define('_SITESECUREURL4','z.B.: secure.host.com/~username/');
define('_SITESLOGAN','Beschreibung');
define('_STARTARGS', 'Argumente für die Start Function');
define('_STARTARGSDESCR', 'komma separiert, z.B.:  name=value,name2=value2');
define('_STARTDATE','Startdatum');
define('_STARTFUNC','Start Funktion');
define('_STARTMODULE', 'Startseite');
define('_STARTPAGE','Startmodul');
define('_STARTPAGEDESCR','(Modul auf das index.php verweist)');
define('_STARTTYPE', 'Start Function Type');
define('_TIMEZONEOFFSET', 'Timezone für unregistrierte Benutzer');
define('_TIMEZONESERVER', 'Timezone des Servers');
define('_USECOMPRESSION','GZip-Kompression aktivieren');
define('_SETTINGSBASESITECONFIG', 'Basiskonfiguration');
define('_SETTINGS_GC_PROBABILITY', 'Garbage collection probability');
define('_SETTINGS_GC_RATIO', 'von 10000');
define('_SETTINGSWHERETOSAVE', 'Session-Speicherung');
define('_SETTINGSFILE', 'in Datei');
define('_SETTINGSDB', 'in Datenbank (empfohlen)');
define('_SETTINGS_SESSIONSAVEPATH', 'Pfad für Speicherung der Session-Dateien');
define('_SETTINGS_SESSIONSAVEPATHTXT1', 'Eintragen bevor die Datei-basierende Speicherung aktiviert wird!');
define('_SETTINGS_SESSIONSAVEPATHTXT2', 'Pfad muss beschreibbar sein!');
define('_SETTINGS_SESSIONSAVEPATHTXT3', 'z.B.: C:\WINDOWS\TEMP');
define('_SETTINGS_SESSIONSAVEPATHTXT4', 'z.B.: /tmp');
define('_SETTINGSWHERETOSAVETXT1', 'Warnung! Änderungen führen zur Abmeldung.');
define('_SETTINGS_SESSIONPATHNOTWRITABLE', 'Pfad für Sessions nicht beschreibbar!');
define('_SETTINGS_SESSIONS', 'Sessions');
define('_SETTINGS_OTHERSEC', 'Weitere Sicherheitsoptionen');
define('_SETTINGS_AUTHKEY', 'Authkey');
define('_SETTINGS_AUTHKEYUA', 'Authkey an UserAgent binden');
define('_SETTINGS_SESSIONREGENERATE', 'Session ID bei An-/Abmeldung neu erzeugen');
define('_SETTINGS_SESSIONRANDREGENERATE', 'Periodisch Session ID neu erzeugen');
define('_SETTINGS_SESSIONREGENERATEFREQ', 'Wahrscheinlichkeit');
define('_SETTINGS_SESSIONREGENERATEFREQ_RATIO', 'von 100');

define('_HTMLTAGUSAGE', 'Tag-Info (aus <a href="http://www.w3schools.com">W3Schools</a>)');
define('_HTMLTAGABOUT', 'Info "&lt;%t%&gt;"');

?>
