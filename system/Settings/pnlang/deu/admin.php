<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2008, Zikula German Translation Team
 * @link http://www.zikula.de
 * @version $Id$
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 */

define('_SETTINGS_ACTAUTODETECT', 'Erkennung der Browser-Sprache');
define('_SETTINGS_ACTMULTILINGUAL','Multilingual-Umgebung aktivieren');
define('_SETTINGS_ADMINEMAIL','E-Mail-Adresse des Administrators');
define('_SETTINGS_ADMINGRAPHIC','Symbole in Administration');
define('_SETTINGS_ALLOWUSERS','Benutzern die E-Mail-Adresse zeigen');

define('_SETTINGS_BACKENDCONF','Backend Konfiguration');
define('_SETTINGS_BASESITECONFIG', 'Basiskonfiguration');
define('_SETTINGS_BASESITEINFO', 'Informationen');
define('_SETTINGS_MULTILINGUALBOX', 'Sprachsystem');
define('_SETTINGS_BROWSERBOX', 'Browser');
define('_SETTINGS_SERVERBOX', 'Server');
define('_SETTINGS_SCREENMESSAGESBOX', 'Fehlermeldungen');
define('_SETTINGS_ERRORLOGGINGBOX', 'Fehler-Log');

define('_SETTINGS_CENSORTEXT','Censor-Modul verwenden');

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

define('_SETTINGS_GENERAL', 'Grundeinstellungen');
define('_SETTINGS_GENSITEINFO','Allgemein');

define('_SETTINGS_INVALIDEMAIL', 'Ungültige E-Mail-Adresse - bitte prüfen');

define('_SETTINGS_LANGDETECTBROWSER','Browser Sprache');
define('_SETTINGS_LANGDETECTOFF','Keine Erkennung');
define('_SETTINGS_LOCALEFORMAT','Zeitformat');
define('_SETTINGS_LOGALLERRORS','Loggen von notices, warnings und errors');
define('_SETTINGS_LOGERRORSONLY','Loggen von ausschliesslich errors');
define('_SETTINGS_LOGFILEPERMODULE','Modulabhängig Logfile schreiben');
define('_SETTINGS_LOGNOERRORS','Errors nicht loggen');

define('_SETTINGS_MESSAGEMODULE', 'Modul für interne Mitteilungen (PN)');
define('_SETTINGS_MESSAGEMODULE_NONE', 'Kein Mitteilungsmodul');
define('_SETTINGS_METAKEYWORDS','Meta-Keywords');
define('_SETTINGS_METATAGSETTINGS', 'Meta-Keywords');
define('_SETTINGS_MISCSETTINGS', 'Verschiedenes');
define('_SETTINGS_MLOPT', 'Multilingual');
define('_SETTINGS_MLSETTINGS', 'Multilingual Einstellungen');

define('_SETTINGS_PASSBYMAIL','(Benutzern nach Registrierung das Kennwort via E-Mail schicken)');
define('_SETTINGS_PHPSYSTEMLOG', 'Das PHP System Log (definiert in php.ini) nutzen');
define('_SETTINGS_PROFILEMODULE', 'Modul für Benutzerprofilverwaltung');
define('_SETTINGS_PROFILEMODULE_NONE', 'Kein Profilmodul');

define('_SETTINGS_SELLANGUAGE','Standardsprache für diese Webseite');
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
define('_SETTINGS_SINGLELOGFILE','In das Global Logfile schreiben');
define('_SETTINGS_SITECONFIG','Webseite Konfiguration');
define('_SETTINGS_SITELOGO','Logo für RSS und Druckerthemes');
define('_SETTINGS_SITENAME', 'Seitenname');
define('_SETTINGS_SITEOFF', 'Seite deaktivieren');
define('_SETTINGS_SITEOFFREASON', 'Grund für Deaktivierung');
define('_SETTINGS_SITESLOGAN','Beschreibung');
define('_SETTINGS_STARTARGS', 'Parameter für die Modulfunktion (optional)');
define('_SETTINGS_STARTARGSDESCR', '(kommasepariert z.B. pid=1,tid=2)');
define('_SETTINGS_STARTFUNC','Modulfunktion (func=xyz)');
define('_SETTINGS_STARTMODULE', 'Startseite');
define('_SETTINGS_STARTPAGE','Startmodul');
define('_SETTINGS_STARTPAGEDESCR','(Modul für die Startseite)');
define('_SETTINGS_STARTPAGE_NOMODULE', 'Kein Startmodul (statische Startseite)');
define('_SETTINGS_STARTTYPE', 'Funktionstyp (Standard=user)');

define('_SETTINGS_TIMEZONEOFFSET', 'Zeitzone für unregistrierte Benutzer');
define('_SETTINGS_TIMEZONESERVER', 'Zeitzone des Servers');

define('_SETTINGS_USECOMPRESSION','GZip-Kompression aktivieren');
define('_SETTINGS_USERCONFIGURATION', 'Benutzerkonfiguration');
