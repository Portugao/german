<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2008, Zikula German Translation Team
 * @link http://www.zikula.de
 * @version $Id$
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 */

// change account data 
define('_USERS_CHANGEPASSWORD', 'Das Users-Modul zur Passwortverwaltung benutzen'); 
define('_USERS_CHANGEEMAIL', 'Das Users-Modul zur E-Mailverwaltung benutzen'); 

// general
define('_PASSWORDAGAIN', 'Kennwortwiederholung (zur Verifikation)');
define('_USERADMINISTRATION','Benutzer Administration');
define('_USERS_NEWUSER', 'Neuer Benutzer');
define('_WARNINGALLFIELDSREQUIRED', 'Hinweis: In jedem Feld muss ein Eintrag erfolgen. In den Kennwort-Feldern bitte jeweils dasselbe Kennwort eingeben.');

// singular/plural
define('_USERS_USER', 'Benutzer');
define('_USERS_USER_LC', 'Benutzer');
define('_USERS_USERS', 'Benutzer');

// navigation
define('_USERS_DYNAMICDATA','Benutzerattribute');
define('_USERS_PENDINGAPPLICATIONS', 'Wartende Anmeldungen');
define('_MODIFYUSERSCONFIG', 'Benutzerkonfiguration bearbeiten');
define('_SEARCHUSERS', 'Benutzer suchen');
define('_USERS_MAILUSERS', 'Benutzer anschreiben'); 
define('_USERPROPERTIES', 'Benutzereigenschaften');
define('_USERS_VIEWUSERS', 'Benutzer anzeigen');
define('_USERS_CREATEUSER', 'Benutzer anlegen');
define('_USERS_MODIFYUSER', 'Benutzer bearbeiten');
define('_USERS_DELETEUSER', 'Benutzer löschen');
define('_USERS_CONFIRMDELETE', 'Soll der Benutzer wirklich gelöscht werden?');

// modify config template
//  general settings
define('_USERS_ANONYMOUSNAME','Name für unregistrierte Benutzer:');
define('_USERS_GENERALSETTINGS', 'Einstellungen');
define('_USERS_HASHMETHOD','Kennwort-Verschlüsselung (Default SHA256):');
define('_USERS_IMAGEPATH','Pfade für die Bilder der Benutzerebene');
define('_USERS_LOGINVIA', 'Benutzernanmeldung über (E-Mail-Adresse nur in Verbindung mit der Option für systemweit eindeutige E-Mail möglich) ');
define('_USERS_UNIQUEMAILADDRESSWARNING', 'Falls \'Benutzeranmeldung\' auf \'E-Mail\' eingestellt ist, muss die Option \'Eindeutige E-Mail-Adresse\' weiter unten mit \'Ja\' aktiviert sein.');
define('_USERS_MINAGE','Mindestalter:');
define('_USERS_PASSWDLEN','Mindestlänge für Kennwort:');
define('_USERS_SAVELASTLOGINDATE', 'Letzte Benutzeranmeldung in Datenbank speichern');
define('_USERS_SPAMQUESTION', 'Registrierungsfrage');
define('_USERS_SPAMQUESTIONHINT', 'individuelle Fragen können helfen, Spamregistrierungen zu vermeiden');
define('_USERS_SPAMANSWER', 'Registrierungsantwort');
define('_USERS_SPAMANSWERHINT', 'Antwort auf die Spamprotect-Frage');

//  registration options
define('_USERS_ALLOWREGISTRATIONS','Registrierung von Accounts ermöglichen:');
define('_USERS_ALLOWREGISTRATIONSDISABLED','(Falls \'Nein\' können im folgenden Feld die Gründe angegeben werden)');
define('_USERS_ILLEGALDOMAINS', 'Kommagetrennte Liste an E-Mail-Domains über die keine Registrierung erlaubt ist');
define('_USERS_ILLEGALUNAME','Gesperrte Benutzernamen: ');
define('_USERS_ILLEGALUSERAGENTS', 'Gesperrte Useragents: ');
define('_USERS_REGISTRATIONSETTINGS','Benutzerregistrierung');
define('_USERS_MODERATION','Benutzerregistrierung moderieren');
define('_USERS_NOTIFYEMAIL','Info-Mail über neue Benutzer: ');
define('_USERS_OPTIONALITEMS', 'Attribute anzeigen:');
define('_USERS_UNIQUEEMAIL','Eindeutige E-Mail-Adresse');
define('_USERS_VERIFYEMAIL','E-Mail-Adresse während der Registrierung verifizieren ');
define('_USERS_VERIFYEMAIL_YES_ACTIVEMAIL','Ja: Benutzer kann das Kennwort während der Registrierung wählen, muß den Account aber via Mail-Benachrichtung bestätigen');
define('_USERS_VERIFYEMAIL_YES_PASSWORDMAIL','Ja: Vom System generiertes Kennwort wird zur Verifizierung an die E-Mail-Adresse geschickt');
define('_USERS_IDNNAMES','IDN-Domains:'); 
define('_USERS_IDNNAMESDESC', 'Erlaube Umlaute und Sonderzeichen in E-Mailadressen und URLs'); 

//  login options
define('_USERS_LOGINSETTINGS', 'Konfiguration der Benutzerregistrierung');
define('_USERS_LOGIN_REDIRECT_WCAG', 'WCAG-konforme An- und Abmeldung');
define('_USERS_LOGIN_REDIRECT_META', '(Benutzung von Meta-Refresh)');

// new/modify template
define('_USERS_GROUP', 'Gruppe');
define('_USERS_GROUPMEMBERSHIP', 'Gruppen Mitgliedschaft');
define('_USERS_MEMBEROF', 'Mitglied');

// search template
// Note: all of the strings ending in 'Contains' precede an input field so incomplete sentences here are fine.
define('_USERS_ANYGROUP','alle');
define('_USERS_CLICKTOFINDALL','Um alle Benutzer anzuzeigen,<br />diesen Knopf klicken ohne vorher eine Wahl getroffen zu haben');
define('_USERS_REGDATEAFTER','Registrierung erfolgte nach (yyyy-mm-dd)');
define('_USERS_REGDATEBEFORE','Registrierung erfolgte vor (yyyy-mm-dd)');
define('_USERS_STATUS', 'Benutzer Status');
define('_USERS_USERGROUPIS','Der Benutzer gehört zu');
define('_USERS_SEARCHSUBSTRING', 'Partial strings are matched with all fields');

// search results
define('_USERS_DESELECTALL','Alle abwählen');
define('_USERS_MAIL','Mail');
define('_USERS_SELECTALL','Alle wählen');

// pending applications template
define('_USERS_VIEWAPPLICATIONS', 'Benutzeranmeldungen anzeigen');
define('_USERS_APPROVEUSERAPPLICATION','Neue Benutzer bestätigen');
define('_USERS_APPROVEUSERAPPLICATIONBUT','Bestätigen');
define('_USERS_CONFIRMAPPLICATION', 'Neuen Benutzer akzeptieren');
define('_USERS_DENYUSERAPPLICATION', 'Neuen Benutzer ablehnen');

// application details template
define('_USERS_VIEWAPPLICATION', 'Benutzeranmeldungen anzeigen');

// user statuses
define('_USERS_ACTIVE', 'Benutzer ist aktiv');
define('_USERS_INACTIVE', 'Benutzer ist inaktiv');
define('_USERS_MUSTACCEPTTOU', 'Benutzer ist inaktiv bis Zustimmung zu Nutzungsbedingungen erteilt');
define('_USERS_SEARCHRESULTS','Suchergebnisse');

// error status messages
define('_USERS_MAILSENT','Mail gesendet');
define('_USERS_MAILSENTFAILED','Fehler! Mailversand fehlgeschlagen');
define('_USERS_NOPASS','Kennwort fehlt');
define('_USERS_NOUSERSELECTED','Fehler! Kein Benutzer ausgewählt');

// mail users template
define('_USERS_SEND_MAIL','E-Mail-Nachricht(en) senden');
define('_USERS_NM_AIMCONTAINS','und AIM Screenname enthält:');
define('_USERS_NM_ANY', 'Alle');
define('_USERS_NM_EMAIL','E-Mail:');
define('_USERS_NM_EMAILCONTAINS','und E-Mail enthält:');
define('_USERS_NM_ERROR2','Kein Absender eingegeben');
define('_USERS_NM_ERROR3','Falsche Antwortadresse');
define('_USERS_NM_ERROR4','Kein Betreff eingegeben');
define('_USERS_NM_ERROR5','Keine Nachricht eingegeben');
define('_USERS_NM_FINISH','fertig');
define('_USERS_NM_FROM','Absender:');
define('_USERS_NM_HOMEPAGECONTAINS','und Homepage enthält:');
define('_USERS_NM_ICQCONTAINS','und ICQ Nummer enthält:');
define('_USERS_NM_MAILUSERWHERE','E-Mail an Benutzer die:');
define('_USERS_NM_MESSAGE','Nachricht:');
define('_USERS_NM_MODNAME','Benutzer anmailen');
define('_USERS_NM_MSNMCONTAINS','und MSN Passport enthält:');
define('_USERS_NM_NOMATCHUSER','Kein passender Benutzer.');
define('_USERS_NM_NOWPROCCESS',' Weiter nur nächsten Seite...');
define('_USERS_NM_OK',' OK.');
define('_USERS_NM_PAGE1',' Seite ');
define('_USERS_NM_PAGE2',' von ');
define('_USERS_NM_PAGE3',' ');
define('_USERS_NM_PAGE4',' ');
define('_USERS_NM_REALNAMECONTAINS','und realer Name enthält:');
define('_USERS_NM_REGDATEAFTER','und Registrierungs-Datum ist nach:<br />(yyyy-mm-dd)');
define('_USERS_NM_REGDATEBEFORE','und Registrierungs-Datum ist vor:<br />(yyyy-mm-dd)');
define('_USERS_NM_REPLYTOADDRESS','Antwort-an-Adresse:');
define('_USERS_NM_RESET','zurücksetzen');
define('_USERS_NM_SEND','Senden');
define('_USERS_NM_SEND2','Mails pro Seite');
define('_USERS_NM_SENDING','Sende...');
define('_USERS_NM_SENDNEXTPAGE','Sende nächste Seite');
define('_USERS_NM_SEND_MAIL','Sende Mail');
define('_USERS_NM_SIGNCONTAINS','und Signatur enthält:');
define('_USERS_NM_SUBJECT','Betreff:');
define('_USERS_NM_TESTING','Teste...');
define('_USERS_NM_TESTONLY','nur zum Testen.');
define('_USERS_NM_USERGROUPIS','und Benutzergruppe ist:');
define('_USERS_NM_USERNAMEIS', 'Benutzername ist:');
define('_USERS_NM_USERNAMECONTAINS','Benutzername enthält:');
define('_USERS_NM_USERS',' Benutzer');
define('_USERS_NM_YIMCONTAINS','und Yahoo Messenger enthält:');