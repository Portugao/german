<?php
// Generated: $Id$
// ----------------------------------------------------------------------
// PostNuke Content Management System
// Copyright (C) 2001 by the PostNuke Development Team.
// http://www.postnuke.com/
// ----------------------------------------------------------------------
// Based on:
// PHP-NUKE Web Portal System - http://phpnuke.org/
// Thatware - http://thatware.org/
// ----------------------------------------------------------------------
// LICENSE
//
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License (GPL)
// as published by the Free Software Foundation; either version 2
// of the License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY -- without even the implied warranty -- of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// To read the license please visit http://www.gnu.org/copyleft/gpl.html
// ----------------------------------------------------------------------
// Original Author of file: Andreas Krapohl <larsneo@postnuke.com>
// Purpose of file: Translation files
// Translation team: Read credits in /docs/CREDITS.txt
// ----------------------------------------------------------------------

// date and time defines
define('_DATE','Datum');
define('_DATEBRIEF', '%d. %b %Y');
define('_DATELONG', '%A, %d. %B %Y');
define("_DATESTRING","%A, %d. %B %Y um %H:%M Uhr");
define('_DATETIMEBRIEF', '%d.%m.%Y, %H:%M Uhr');
define('_DATETIMELONG', '%A, %d. %B %Y, %H:%M Uhr');
define('_DAY_OF_WEEK_LONG','Sonntag Montag Dienstag Mittwoch Donnerstag Freitag Samstag');
define('_DAY_OF_WEEK_SHORT','Son Mon Die Mit Don Fre Sam');
define('_MONTH_LONG','Januar Februar März April Mai Juni Juli August September Oktober November Dezember');
define('_MONTH_SHORT','Jan Feb Mar Apr Mai Jun Jul Aug Sep Okt Nov Dez');
define('_TIME', 'Zeit');
define('_TIMEBRIEF', '%H:%M');
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

// time zone defines
define('_TIMEZONES','IDLW NT HST YST PST MST CST EST AST GMT-3:30 GMT-3 AT WAT GMT CET EET BT GMT+3:30 GMT+4 GMT+4:30 GMT+5 GMT+5:30 GMT+6 WAST CCT JST ACS GST GMT+11 NZST');
define('_TZOFFSETS','0 1 2 3 4 5 6 7 8 8.5 9 10 11 12 13 14 15 15.5 16 16.5 17 17.5 18 19 20 21 21.5 22 23 24');

// locale defines
define('_CHARSET','ISO-8859-15');
define('_LOCALE', 'de_DE');
define('_LOCALEWIN', 'German_Germany');

// common words
define('_ALL','Alle');
define('_AND','und');
define('_BY','von');
define('_DOWN','runter');
define('_NO','Nein');
define('_OF','von');
define('_OK','OK');
define('_ON','am');
define('_TO','an');
define('_THE', 'Ein');
define('_UP','hoch');
define('_YES','Ja');

// standard permissions levels
define('_ACCESS_ADD','Hinzufügen');
define('_ACCESS_ADMIN','Administrieren');
define('_ACCESS_COMMENT','Kommentieren');
define('_ACCESS_DELETE','Löschen');
define('_ACCESS_EDIT','Editieren');
define('_ACCESS_MODERATE','Moderieren');
define('_ACCESS_NONE','keines');
define('_ACCESS_OVERVIEW','Übersicht');
define('_ACCESS_READ','Lesen');

// common actions
define('_ACTIVATE','Aktivieren');
define('_ADD','Hinzufügen');
define('_CANCEL', 'Abbrechen');
define('_COMMIT', 'Aktualisieren');
define('_CREATE', 'Anlegen');
define('_DEACTIVATE','Deaktivieren');
define('_DELETE','Löschen');
define('_EDIT','Editieren');
define('_IGNORE','Ignorieren');
define('_LOGIN','Anmelden');
define('_LOGOUT','Abmelden');
define('_MODIFY','Modifizieren');
define('_NEW','Neu');
define('_SEARCH', 'Suchen');
define('_SUBMIT','Bestätigen');
define('_UPDATE', 'Aktualisieren');
define('_VIEW', 'Ansicht');

//common module fields
define('_LANGUAGE', 'Sprache');
define('_OPTIONS', 'Optionen');

// states
define('_ACTIVE','aktiv');
define('_INACTIVE','inaktiv');

// member descriptors
define('_GUEST0','Gäste');  // if numguests == 0
define('_GUEST','Gast');    // if numguests == 1
define('_GUESTS','Gäste');  // if numguests > 1
define('_MEMBER0','registrierte Benutzer');  // if numusers == 0
define('_MEMBER','registrierter Benutzer');  // if numusers == 1
define('_MEMBERS','registrierte Benutzer');  // if numusers > 1

// member states
define('_ONLINE','online');
define('_OFFLINE','offline');

// module system
define('_BADAUTHKEY','Keine Autorisierung für die Aktion (Browser-Back verwendet?)');
define('_CANCELDELETE', 'Löschen abbrechen');
define('_CONFIGUPDATED', 'Modulkonfiguration aktualisiert');
define('_CONFIGUPDATEFAILED', 'Modulkonfiguration konnte nicht aktualisiert werden');
define('_CONFIRMDELETE', 'Löschen bestätigen');
define('_CREATEFAILED','Fehler! Anlegen fehlgeschlagen');
define('_CREATESUCCEDED','Angelegt');
define('_CREATETABLEFAILED','Fehler! Tabelle konnte nicht angelegt werden');
define('_DELETEFAILED','Fehler! Löschen fehlgeschlagen');
define('_DELETESUCCEDED','Gelöscht');
define('_DELETETABLEFAILED','Fehler! Tabelle konnte nicht gelöscht werden');
define('_GETFAILED', 'Fehler! Beim Laden ist ein Problem aufgetreten');
define('_LOADAPIFAILED', 'Fehler! Beim Laden der API ist ein Problem aufgetreten');
define('_LOADFAILED','Fehler! Beim Laden des Moduls ist ein Problem aufgetreten');
define('_MODARGSERROR','Fehler! Übergabewerte von API nicht akzeptiert');
define('_MODIFYCONFIG', 'Konfiguration modifizieren');
define('_MODULENOAUTH', 'Fehler! Keine Autorisierung für das Modul');
define('_MODULENODIRECTACCESS', 'Fehler! Das Modul kann nicht direkt aufgerufen werden');
define('_NOSUCHITEM', 'nicht gefunden');
define('_REGISTERFAILED', 'Fehler! Hook konnte nicht registriert werden');
define('_UNKNOWNAPIFUNCADMIN', 'Fehler! Unbekannte API-Funktion aufgerufen:');
define('_UNKNOWNAPIFUNCUSER', 'Fehler! Unbekannte Funktion aufgerufen');
define('_UNREGISTERFAILED', 'Fehler! Hook konnte nicht unregistriert werden');
define('_UPDATECONFIG', 'Konfiguration aktualisieren');
define('_UPDATEFAILED','Fehler! Aktualisierung fehlgeschlagen');
define('_UPDATETABLEFAILED','Fehler! Tabellen konnten nicht aktualisiert werden');
define('_UPDATESUCCEDED','aktualisiert');

// Central administration define
define('_ADMINMENU','Administrationsmenü');

// Xanthia theme engine failed to initialize define
define('_XA_FAILEDTOINITENGINE', 'Fehler! Die Xanthia-Theme-Engine konnte nicht gestartet werden für: ');
?>