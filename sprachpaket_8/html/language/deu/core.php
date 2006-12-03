<?php
/**
 * PostNuke Application Framework
 *
 * @copyright (c) 2001, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: core.php 20671 2006-11-29 17:28:16Z landseer $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 */

// date and time defines
define('_DATE','Datum');
define('_DATEBRIEF', '%d. %b %Y');
define('_DATELONG', '%A, %d. %B %Y');
define("_DATESTRING","%A, %d. %B %Y um %H:%M Uhr");
define('_DATETIMEBRIEF', '%d.%m.%Y, %H:%M Uhr');
define('_DATETIMELONG', '%A, %d. %B %Y, %H:%M Uhr');
define('_DATEINPUT', '%Y-%m-%d'); // Dateformat for input fields (parsable - do not try other formats!)
define('_DATETIMEINPUT', '%Y-%m-%d %H:%M'); // Date+time format for input fields (parsable - do not try other formats!)
define('_DATEFIRSTWEEKDAY', 0); // 0 = sunday, 1 monday and so on
define('_DAY_OF_WEEK_LONG','Sonntag Montag Dienstag Mittwoch Donnerstag Freitag Samstag');
define('_DAY_OF_WEEK_SHORT','Son Mon Die Mit Don Fre Sam');
define('_MONTH_LONG','Januar Februar M�rz April Mai Juni Juli August September Oktober November Dezember');
define('_MONTH_SHORT','Jan Feb Mar Apr Mai Jun Jul Aug Sep Okt Nov Dez');
define('_TIME', 'Zeit');
define('_TIMEBRIEF', '%H:%M');
define('_TIMEFORMAT', 24);  // use 24 here in other countries
define('_SECOND', 'Sekunde');
define('_SECONDS', 'Sekunden');
define('_MINUTE', 'Minute');
define('_MINUTES', 'Minuten');
define('_DAY', 'Tag');
define('_DAYS', 'Tage');
define('_WEEK', 'Woche');
define('_WEEKS', 'Wochen');
define('_MONTH', 'Monat');
define('_MONTHS', 'Monate');
define('_YEAR', 'Jahr');
define('_YEARS', 'Jahre');
define('_NOTAVALIDDATE', 'ung�ltiges Datum');
define('_NOTAVALIDINT', 'ung�ltige Zahl');
define('_NOTAVALIDNUMBER', 'ung�ltige Zahl');

// time zone defines
define('_TIMEZONES','GMT-12 GMT-11 HST GMT-9:30 AKST PST MST CST EST AST GMT-3:30 GMT-3 GMT-2 GMT-1 GMT CET EET GMT+3 GMT+3:30 GMT+4 GMT+4:30 GMT+5 GMT+5:30 GMT+5:45 GMT+6 GMT+6:30 GMT+7 AWST ACDT JST ACST AEST GMT+11 GMT+11:30 GMT+12 GMT+12:45 GMT+13 GMT+14');
define('_TZOFFSETS','-12 -11 -10 -9.5 -9 -8 -7 -6 -5 -4 -3.5 -3 -2 -1 0 1 2 3 3.5 4 4.5 5 5.5 5.75 6 6.5 7 8 9 9.5 10 10.5 11 11.5 12 12.75 13 14');

// locale defines
define('_CHARSET','ISO-8859-15');
define('_LOCALE','de_DE');
define('_LOCALEWIN', 'deu');

// common words
define('_ALL','Alle');
define('_AND','und');
define('_BY','von');
define('_DOWN','runter');
define('_FOR', 'f�r');
define('_NO','Nein');
define('_OF','von');
define('_OK','OK');
define('_ON','am');
define('_OR', 'oder');
define('_TO','an');
define('_THE', 'Ein');
define('_UP','hoch');
define('_URL', 'URL');
define('_YES','Ja');

// standard permissions levels
define('_ACCESS_ADD','Hinzuf�gen');
define('_ACCESS_ADMIN','Administrieren');
define('_ACCESS_COMMENT','Kommentieren');
define('_ACCESS_DELETE','L�schen');
define('_ACCESS_EDIT','Editieren');
define('_ACCESS_MODERATE','Moderieren');
define('_ACCESS_NONE','Keine Rechte');
define('_ACCESS_OVERVIEW','�bersicht');
define('_ACCESS_READ','Lesen');

// common actions
define('_ACTIONS', 'Aktion');
define('_ACTIVATE','Aktivieren');
define('_ACTIVE','Aktiv');
define('_ACTIVATED', 'aktiviert');
define('_ADD','Hinzuf�gen');
define('_BACK', 'zur�ck');
define('_CANCEL', 'Abbruch');
define('_CLEAR', 'L�schen');
define('_COMMIT', 'Best�tigen');
define('_CREATE', 'Anlegen');
define('_DEACTIVATE','Deaktivieren');
define('_DEACTIVATED', 'deaktiviert');
define('_DELETE','L�schen');
define('_EDIT','Editieren');
define('_FORWARD', 'weiter');
define('_HELP', 'Hilfe');
define('_IGNORE','Ignorieren');
define('_INACTIVE','Inaktiv');
define('_LOGIN','Anmelden');
define('_LOGOUT','Abmelden');
define('_MODIFY','Modifizieren');
define('_NEW','Neu');
define('_NEXT', 'weiter');
define('_PREVIOUS', 'zur�ck');
define('_REMOVE', 'entfernen');
define('_RESET', 'Reset');
define('_SEARCH', 'Suchen');
define('_SUBMIT','Abschicken');
define('_UPDATE', 'Aktualisieren');
define('_VIEW', 'Ansicht');

//common module fields
define('_CONTENT', 'Inhalt');
define('_DESCRIPTION', 'Beschreibung');
define('_EMAIL' ,'E-Mail Adresse');
define('_ID', 'ID');
define('_LANGUAGE', 'Sprache');
define('_META', 'Metadata');
define('_NAME', 'Name');
define('_OPTIONS', 'Optionen');
define('_PASSWORD', 'Kennwort');
define('_PERMALINKTITLE', 'URL (f�r Permalinks)');
define('_PERMALINKTITLEBLANK', 'Leer lassen f�r automatischen Permalink Titel');
define('_TITLE', 'Titel');
define('_USERNAME' ,'Benutzername');

// member descriptors
define('_GUEST','Gast');
define('_GUEST0','G�ste');
define('_GUESTS','G�ste');
define('_MEMBER','registrierte Benutzer');
define('_MEMBER0','registrierte Benutzer');
define('_MEMBERS','registrierte Benutzer');

// member states
define('_ONLINE','online');
define('_OFFLINE','offline');

// common postnuke terms
define('_BLOCK' ,'Block');
define('_BLOCKS' ,'Bl�cke');
define('_HOOK', 'Hook');
define('_HOOKS', 'Hooks');
define('_MODULE', 'Modul');
define('_MODULES', 'Module');
define('_PLUGIN', 'Plugin');
define('_PLUGINS', 'Plugins');
define('_TEMPLATE', 'Template');
define('_TEMPLATES', 'Templates');
define('_THEME', 'Theme');
define('_THEMES', 'Themes');

// other common terms
define('_DIRECTORY', 'Directory');
define('_VERSION', 'Version');

// module system
define('_BADAUTHKEY', 'Ung�ltiger Authkey:  M�gliche Fehlerquellen: Navigation via Browser-Back oder aber der "Authkey" ist abgelaufen. Bitte die Seite neu laden und erneut probieren.');
define('_CANCELDELETE', 'L�schen abbrechen');
define('_CONFIGUPDATED', 'Modulkonfiguration aktualisiert');
define('_CONFIGUPDATEFAILED', 'Modulkonfiguration konnte nicht aktualisiert werden');
define('_CONFIRMDELETE', 'L�schen best�tigen');
define('_CONFIRMDELETEITEM', 'L�schen best�tigen von: %i%');
define('_CREATEDBY', 'Angelegt von');
define('_CREATEDON', 'Angelegt am');
define('_CREATEITEM', '%i% anlegen');
define('_CREATEFAILED','Fehler! Anlegen fehlgeschlagen');
define('_CREATEINDEXFAILED', 'Fehler! Index konnte nicht angelegt werden');
define('_CREATESUCCEDED','Eintrag angelegt');
define('_CREATETABLEFAILED','Fehler! Tabelle konnte nicht angelegt werden');
define('_DELETEITEM', '%i% l�schen');
define('_DELETEFAILED','Fehler! Eintrag konnte nicht gel�scht werden');
define('_DELETESUCCEDED','Eintrag gel�scht');
define('_DELETETABLEFAILED','Fehler! Tabelle konnte nicht gel�scht werden');
define('_FAILEDTOLOADMODULE', 'Modul <strong>%m%<strong> konnte nicht geladen werden');
define('_FAILEDTOLOADMODULEATFUNC', 'Modul <strong>%m%</strong> konnte nicht geladen werden (Funktion: <strong>%f%</strong>)');
define('_GETFAILED', 'Fehler! Eintrag konnte nicht geladen werden');
define('_LOADAPIFAILED', 'Fehler! Beim Laden der API ist ein Problem aufgetreten');
define('_LOADFAILED','Fehler! Beim Laden des Moduls ist ein Fehler aufgetreten');
define('_MODARGSERROR','Fehler! Variablen wurden von der API Funktion nicht akzeptiert');
define('_MODIFYCONFIG', 'Konfiguration modifizieren');
define('_MODIFYITEM', '%i% modifizieren');
define('_MODULENOAUTH', 'Fehler! Keine Berechtigung f�r das Modul');
define('_MODULENODIRECTACCESS', 'Fehler! Das Modul kann nicht direkt aufgerufen werden');
define('_MODULENOTAVAILABLE', 'Modul <strong>%m%</strong> nicht verf�gbar');
define('_MODULERETURNED', 'Funktion <strong>%f%</strong> im Modul <strong>%m%</strong> abgeschlossen.');
define('_NEWITEM', 'Neu %i%');
define('_NOSUCHITEM', 'Keine entsprechenden Eintr�ge');
define('_NOSUCH', 'Kein %i%');
define('_REGISTERFAILED', 'Fehler! Hook konnte nicht registriert werden');
define('_TEMPLATENOTAVAILABLE', 'Template <strong>%t%</strong> f�r Modul <strong>%m%</strong> nicht gefunden');
define('_TRANSACTIONFAILED', 'Transaction fehlgeschlagen ... Rollback erfolgt!<br />');
define('_UNKNOWNFUNC', 'Fehler: Unbekannte Funktion');
define('_UNREGISTERFAILED', 'Fehler: Hook konnte nicht unregistriert werden');
define('_UPDATEITEM', 'Aktualisiere %i%');
define('_UPDATECONFIG', 'Aktualisieren');
define('_UPDATEDBY', 'Aktualisiert von');
define('_UPDATEDON', 'Aktualisiert am');
define('_UPDATEFAILED','Fehler! Aktualisierungsversuch fehlgeschlagen');
define('_UPDATETABLEFAILED','Fehler! Tabellenaktualisierung fehlgeschlagen');
define('_UPDATESUCCEDED','Eintrag aktualisiert');
define('_VIEWCONFIG', 'Konfiguration anzeigen');
define('_VIEWITEMS', 'Zeige %i%');

// Central administration define
define('_ADMINMENU','Administration');

// defines for the pager plugin
define('_FIRSTPAGE', 'Erste');
define('_FIRSTPAGE_TITLE', 'Erste Seite');
define('_ITEMSPERPAGE', 'Eintr�ge pro Seite');
define('_PREVIOUSPAGE', 'Vorherige');
define('_PREVIOUSPAGE_TITLE', 'Vorherige Seite');
define('_LASTPAGE', 'Letzte');
define('_LASTPAGE_TITLE', 'Letzte Seite');
define('_NEXTPAGE', 'N�chste');
define('_NEXTPAGE_TITLE', 'N�chste Seite');
define('_NONEXTPAGE', 'Keine weiteren Seiten');
define('_NOPREVIOUSPAGE', 'Keine vorherige Seiten');
define('_PAGE', 'Seite');
define('_TOTAL', 'Insgesamt');

// WorkflowUtil
define('_PNWF_STATEERROR', 'Workflow Statusfehler');

// Form utilities
define('_PNFORM_MANDATORYERROR', 'Bitte dieses Feld ausf�llen');
define('_PNFORM_MAXLENGTHERROR', 'Text darf maximal %s Zeichen lang sein');
define('_PNFORM_SELECTDATE', 'Datum w�hlen');

// categories system
define('_ALLCATEGORIES', '-- Alle --');
define('_CATEGORY', 'Kategorie');
define('_CATEGORIES', 'Katgeorien');
define('_CATEGORIESMAPPINGS', 'Multi-Kategorie Mappings');
define('_CATEGORIESMAPPINGSCOUNT', 'Anzahl der Multi-Kategorie Mappings');
define('_CHOOSECATEGORY', '-- w�hlen --');

// 'templates' for error message
define('_ERROR_TEXT', '%s [%s]');
define('_ERROR_ADMIN', ' in Zeile %d in Datei %s');

// userlinks plugin
define('_YOURACCOUNT', 'Profil');
define('_CREATEACCOUNT', 'Profil anlegen');

// login/logout procedure
define('_UNABLETOSAVELOGINDATE', 'Anmeldedatum konnte nicht gespeichert werden');
define('_LOGOUTFORCED', 'Es erfolgte eine Abmeldung durch einen Administrator. Bitte neu anmelden');

// jscalendar
define('_DATE_SELECTOR', 'Datum w�hlen');

?>