<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2002, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id$
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package Zikula_System_Modules
 * @subpackage  Zikula_Settings
 */

define('_SETTINGS_ACTAUTODETECT', 'Erkennung der Browser-Sprache');
define('_SETTINGS_ACTMULTILINGUAL','Multilingual-Umgebung aktivieren');
define('_SETTINGS_ADMINEMAIL','Administrator E-Mail-Adresse');
define('_SETTINGS_ADMINGRAPHIC','Icons in Administration');
define('_SETTINGS_ALLOWUSERS','Benutzern die E-Mail-Adresse zeigen');
define('_SETTINGS_ANONYMOUSSESSIONS', 'Sessions für Gäste benutzen');
define('_SETTINGS_AUTHKEYUA', 'Authkey an UserAgent binden');

define('_SETTINGS_BACKENDCONF','Backend Konfiguration');
define('_SETTINGS_BACKENDLANG','Backend Sprache');
define('_SETTINGS_BACKENDTITLE','Backend Titel');
define('_SETTINGS_BASESITECONFIG', 'Basiskonfiguration');
define('_SETTINGS_BASESITEINFO', 'Info');
define('_SETTINGS_HTMLENTITIESBOX', 'HTML Entitäten');
define('_SETTINGS_HTMLALLOWEDBOX', 'HTML Tags');
define('_SETTINGS_MULTILINGUALBOX', 'Sprachsystem');
define('_SETTINGS_BROWSERBOX', 'Browser');
define('_SETTINGS_SERVERBOX', 'Server');
define('_SETTINGS_SCREENMESSAGESBOX', 'Fehlermeldungen');
define('_SETTINGS_ERRORLOGGINGBOX', 'Fehler-Log');

define('_SETTINGS_CENSORTEXT','Censor-Modul verwenden');

define('_SETTINGS_DB', 'in Datenbank (empfohlen)');
define('_SETTINGS_DETECTLANGUAGE','Spracherkennung');
define('_SETTINGS_DYNKEYWORDS','Dynamische Meta-Keywords');

define('_SETTINGS_ENTRYPOINT', 'Einstiegspunkt für die Seite');
define('_SETTINGS_ENTRYPOINTDESC', 'Datei, über die der Seiteneinstieg erfolgt (Default: index.php)');
define('_SETTINGS_ENTRYPOINTERROR', 'Fehler! Ungüliger Seiteneinstieg oder Seiteneinstieg existiert nicht im Zikula-Rootverzeichnis');
define('_SETTINGS_ENTRYPOINTTIP', 'Tipp: Der Seiteneinstieg muss vor der Änderung im Zikula-Rootverzeichnis existieren.');
define('_SETTINGS_ERRORDISPLAY','Welche Fehlertypen sollen angezeigt werden?');
define('_SETTINGS_ERRORHANDLING','Errorhandling');
define('_SETTINGS_ERRORREPORTINGLEVEL', 'Fehlerberichtsebene');
define('_SETTINGS_ERRORLOGGING','Welche Fehlertypen sollen geloggt werden?');
define('_SETTINGS_ERRORLOGTYPE','Typ des Error Logs');
define('_SETTINGS_ERRORMAILTO','Fehler E-Mail schicken an');
define('_SETTINGS_ERRORREPORTING','Error Reporting');

define('_SETTINGS_FILE', 'in Datei');

define('_SETTINGS_GC_PROBABILITY', 'Garbage collection probability');
define('_SETTINGS_GC_RATIO', 'von 10000');
define('_SETTINGS_GENERAL', 'Grundeinstellungen');
define('_SETTINGS_GENSITEINFO','Allgemein');

define('_SETTINGS_HTMLALLOWENTITIES','HTML Entitäten in Zeichen wandeln');
define('_SETTINGS_HTMLOPT','HTML');
define('_SETTINGS_HTMLTAGABOUT', 'Info "&lt;%t%&gt;"');
define('_SETTINGS_HTMLTAGALLOWED','erlaubt');
define('_SETTINGS_HTMLTAGALLOWEDWITHPARAMS','erlaubt mit Parametern');
define('_SETTINGS_HTMLTAGNAME','Tag');
define('_SETTINGS_HTMLTAGNOTALLOWED','nicht erlaubt');
define('_SETTINGS_HTMLTAGUSAGE', 'Taginfo (von <a href="http://www.w3schools.com">W3Schools</a>)');
define('_SETTINGS_HTMLWARNING','HINWEIS: Um das Risiko von Cross-Site-Scripting zu minimieren sollte - insbesondere bei Freigabe von Tags mit Parametern - der safehtml-Outputfilter im SecurityCenter aktiviert werden.');
define('_SETTINGS_INVALIDEMAIL', 'Ungültige E-Mail-Adresse - bitte prüfen');
define('_SETTINGS_JSQUICKTAGS', 'JS Quicktags Buttons benutzen');
define('_SETTINGS_JSQUICKTAGSNOTE', 'JS Quicktags sind Buttons für häufige HTML-Tags in bestimmten Textareas. Eine \'aktivierte\' Textarea sollte ein Quicktags-Template Tag im Template haben. Deaktivieren, falls ein visueller Editor verwendet wird.');
define('_SETTINGS_KEYEXPIRY', 'Zeitlimit für Authkeys in Sekunden (default 0)');

define('_SETTINGS_LANGDETECTBROWSER','Browser Sprache');
define('_SETTINGS_LANGDETECTOFF','Keine Erkennung');
define('_SETTINGS_LOCALEFORMAT','Zeitformat');
define('_SETTINGS_LOGALLERRORS','Loggen von notices, warnings und errors');
define('_SETTINGS_LOGERRORSONLY','Loggen von ausschliesslich errors');
define('_SETTINGS_LOGFILEPERMODULE','Modulabhängig Logfile schreiben');
define('_SETTINGS_LOGNOERRORS','Errors nicht loggen');

define('_SETTINGS_METAKEYWORDS','Meta-Keywords');
define('_SETTINGS_METATAGSETTINGS', 'Meta-Keywords');
define('_SETTINGS_MISCSETTINGS', 'Verschiedenes');
define('_SETTINGS_MLOPT', 'Multilingual');
define('_SETTINGS_MLSETTINGS', 'Multilingual Einstellungen');

define('_SETTINGS_OTHERSEC', 'Weitere Sicherheitsoptionen');
define('_SETTINGS_COOKIES', 'Cookie-Einstellungen');

define('_SETTINGS_PASSBYMAIL','(Benutzern nach Registrierung das Kennwort via E-Mail schicken)');
define('_SETTINGS_PHPSYSTEMLOG', 'Das PHP System Log (definiert in php.ini) nutzen');
define('_SETTINGS_PROFILEMODULE', 'Modul für die Benutzerprofilverwaltung'); 
define('_SETTINGS_PROFILEMODULE_NONE', 'Keine Benutzerprofile'); 

define('_SETTINGS_REFERERONPRINT','Referrer auf der Druckansicht prüfen');

define('_SETTINGS_SAFEHTMLWARNING', 'Achtung! Der <a href="%url%">SafeHTML Output-Filter</a> überschreibt einige Einstellungen von HTML-Tags (z.B. object und embed)');
define('_SETTINGS_SECHIGH','Hoch (Benutzer müssen sich bei jedem Besuch anmelden)');
define('_SETTINGS_SECINACTIVELENGTH','Benutzer werden inaktiv nach');
define('_SETTINGS_SECINACTIVETXT','Minuten ohne Aktivität');
define('_SETTINGS_SECLEVEL','Sicherheitsstufe');
define('_SETTINGS_SECLOW','Niedrig (Benutzer bleiben dauerhaft angemeldet)');
define('_SETTINGS_SECMEDIUM','Mittel (Benutzer bleiben für eine definierte Tageszahl angemeldet)');
define('_SETTINGS_SECMEDLENGTH','Bei mittlerer Sicherheitsstufe bleiben Benutzer angemeldet für');
define('_SETTINGS_SECMEDTXT','Tagen (bei aktivierter Erinnerung)');
define('_SETTINGS_SECOPT','Sicherheit');
define('_SETTINGS_SELLANGUAGE','Default Sprache für diese Webseite');
define('_SETTINGS_SESSIONIPCHECK', 'IP Check für Session (eventuell Probleme mit AOL und Proxy-Benutzern)');
define('_SETTINGS_SESSIONNAME', 'Session-Cookie Name');
define('_SETTINGS_SESSIONNAMEWARNING', 'Nach Änderung müssen sich alle Benutzer neu anmelden');
define('_SETTINGS_SESSIONPATHNOTWRITABLE', 'Pfad für Sessions nicht beschreibbar!');
define('_SETTINGS_SESSIONREGENERATE', 'Session ID bei An-/Abmeldung neu erzeugen');
define('_SETTINGS_SESSIONRANDREGENERATE', 'Periodisch Session ID neu erzeugen');
define('_SETTINGS_SESSIONREGENERATEFREQ', 'Wahrscheinlichkeit');
define('_SETTINGS_SESSIONREGENERATEFREQ_RATIO', 'von 100');
define('_SETTINGS_SESSIONS', 'Sessions');
define('_SETTINGS_SESSIONSAVEPATH', 'Pfad für Speicherung der Session-Dateien');
define('_SETTINGS_SESSIONSAVEPATHTIP', 'Achtung: Wenn die Option \'Session-Speicherung\' auf  \'Datei\' gesetzt wird, muss der Pfad in im Feld weiter oben angegeben werden. Der Pfad muss beschreibbar sein.');
define('_SETTINGS_SHORTURLS', 'Short URLs');
define('_SETTINGS_SHORTURLSDIRECTORY', 'Verzeichnis');
define('_SETTINGS_SHORTURLSENABLE', 'Short URLs aktivieren');
define('_SETTINGS_SHORTURLSFILE', 'Datei');
define('_SETTINGS_SHORTURLSHTACCESS', 'Short URLs benötigen eine .htaccess Datei im Rootverzeichnis. Entsprechende .htaccess-Vorlagen finden sich im /docs Verzeichnis');
define('_SETTINGS_SHORTURLSNOTE', "Für Short URLs muß die Apache-Option modrewrite aktiv sein. Falls PHP im CGI-Modus läuft, sollte die Option 'cgi.fix_pathinfo = 0' in der php.ini aktiv sein, damit Short URLs einwandfrei funktionieren.");
define('_SETTINGS_SHORTURLSSTRIPENTRYPOINT', 'Einstiegspunkt aus Verzeichnisbasierenden URLs entfernen');
define('_SETTINGS_SHORTURLSTYPE', 'Typ der Short URLs');
define('_SETTINGS_SHORTURLS_DEFAULTMODULE', 'Zu benutzendes Modul, wenn Permalink keinen Modulnamen beinhaltet'); 
define('_SETTINGS_SHORTURLS_EXTENSION', 'Erweiterung für Dateibasierende URLs');
define('_SETTINGS_SHORTURLS_NODEFAULTMODULE', 'Keine Standardmodul'); 
define('_SETTINGS_SHORTURLS_SEPARATOR', 'Trennzeichen im Permalink Titel');
define('_SETTINGS_SHOWALLERRORS','notices, warnings und errors anzeigen');
define('_SETTINGS_SHOWERRORSONLY','real errors anzeigen');
define('_SETTINGS_SHOWNOERRORS','errors nicht anzeigen');
define('_SETTINGS_SIGNCOOKIES', 'Cookies signieren?');
define('_SETTINGS_SIGNINGKEY', 'Signatur Key');
define('_SETTINGS_SINGLELOGFILE','In das Global Logfile schreiben');
define('_SETTINGS_SITECONFIG','Webseite Konfiguration');
define('_SETTINGS_SITELOGO','Beschreibung (nur für Backend-Seiten wie Druckeransicht und RSS Feed)');
define('_SETTINGS_SITENAME', 'Name');
define('_SETTINGS_SITEOFF', 'Seite deaktivieren');
define('_SETTINGS_SITEOFFREASON', 'Grund für Deaktivierung');
define('_SETTINGS_SITESECUREURL','Secure Hostname');
define('_SETTINGS_SITESECUREURL1','Nur angeben wenn ein anderer Hostname für HTTPS verwendet wird');
define('_SETTINGS_SITESLOGAN','Beschreibung');
define('_SETTINGS_STARTARGS', 'optional: Argumente für die Modulfunktion');
define('_SETTINGS_STARTARGSDESCR', 'kommasepariert (name=value,name2=value2)');
define('_SETTINGS_STARTDATE','Startdatum');
define('_SETTINGS_STARTFUNC','Modulfunktion');
define('_SETTINGS_STARTMODULE', 'Startseite');
define('_SETTINGS_STARTPAGE','Startmodul');
define('_SETTINGS_STARTPAGEDESCR','(Modul, auf das index.php verweist)');
define('_SETTINGS_STARTPAGE_NOMODULE', 'Kein Startmodul (statische Startseite)'); 
define('_SETTINGS_STARTTYPE', 'Funktionstyp');

define('_SETTINGS_TIMEZONEOFFSET', 'Timezone für unregistrierte Benutzer');
define('_SETTINGS_TIMEZONESERVER', 'Timezone des Servers');

define('_SETTINGS_USECOMPRESSION','GZip-Kompression aktivieren');
define('_SETTINGS_USERCONFIGURATION', 'Benutzerkonfiguration');

define('_SETTINGS_WHERETOSAVE', 'Session-Speicherung');
define('_SETTINGS_WHERETOSAVETXT1', 'Warnung! Änderungen führen zur Abmeldung.');

