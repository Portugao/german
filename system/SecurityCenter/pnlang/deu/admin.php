<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2008, Zikula German Translation Team
 * @link http://www.zikula.de
 * @version $Id$
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 */


// general
define('_SECURITYCENTER','Security Center');

// singular/plural
define('_SECURITYCENTER_HACKATTEMPT', 'Angriffsversuch');
define('_SECURITYCENTER_HACKATTEMPT_LC', 'Angriffsversuch');
define('_SECURITYCENTER_HACKATTEMPTS', 'Angriffsversuche');

// navigation
define('_SECURITYCENTER_VIEWHACKATTEMPTSFROMDB','Angriffsversuche anzeigen');
define('_SECURITYCENTER_VIEWLOGGEDEVENTS', 'Logeinträge anzeigen');
define('_SECURITYCENTER_VIEWHACKATTEMPTS', 'Angriffsversuche anzeigen');
define('_SECURITYCENTER_DELETEHACKATTEMPT', 'Angriffsversuch löschen');
define('_SECURITYCENTER_CONFIRMDELETEHACKATTEMPT', 'Soll der Angriffsversuch wirklich gelöscht werden?');

// view templates
define('_SECURITYCENTER_CLEAR_FITLER', 'Filter löschen');
define('_SECURITYCENTER_COMPONENT', 'Komponente');
define('_SECURITYCENTER_FILE','Datei');
define('_SECURITYCENTER_FUNCTION', 'Funktion');
define('_SECURITYCENTER_INFO','Weitere Informationen');
define('_SECURITYCENTER_LINE','Zeile');
define('_SECURITYCENTER_MESSAGE', 'Nachricht');
define('_SECURITYCENTER_SECURITY', 'Sicherheit');
define('_SECURITYCENTER_TYPE','Typ');
define('_SECURITYCENTER_USERID','Benutzer ID');
define('_SECURITYCENTER_VIEW_FILTER', 'Filter');
define('_SECURITYCENTER_VIEW_LOGEVENT', 'Logeintrag anzeigen');

// options available for a hack attempt
define('_SECURITYCENTER_BROWSERINFO', 'Browser-Info anzeigen');
define('_SECURITYCENTER_COOKIEARRAY', '\'cookie\'-Info anzeigen');
define('_SECURITYCENTER_ENVARRAY', '\'env\'-Info anzeigen');
define('_SECURITYCENTER_FILESARRAY', '\'files\'-Info anzeigen');
define('_SECURITYCENTER_GETARRAY', '\'get\'-Info anzeigen');
define('_SECURITYCENTER_POSTARRAY', '\'post\'-Info anzeigen');
define('_SECURITYCENTER_REQUESTARRAY', '\'request\'-Info anzeigen');
define('_SECURITYCENTER_SERVERARRAY','\'server\'-Info anzeigen');
define('_SECURITYCENTER_SESSIONARRAY', '\'session\'-Info anzeigen');

// display template
define('_SECURITYCENTER_VARIABLE', 'Variable');
define('_SECURITYCENTER_VARIABLEVALUE', 'Variablenwert');

// modify config
define('_SECURITYCENTER_GENERALCONFIG', 'Allgemeine Einstellungen');
define('_SECURITYCENTER_DISPLAYEMAIL','Bei Angriffen via E-Mail benachrichtigen');
define('_SECURITYCENTER_DISPLAYENABLE','Angiffsschutz aktivieren');
define('_SECURITYCENTER_DISPLAYLOGTODB','Angriffsversuche in der Datenbank speichern');
define('_SECURITYCENTER_ONLYSENDSUMMARYBYEMAIL','Bei Speicherung in der Datenbank, nur eine Zusammenfassung per E-Mail senden');
define('_SECURITYCENTER_VARIABLECLEANSING', 'Bereinigung von HTTP-Variablen');
define('_SECURITYCENTER_FILTERGETVARS', '\'$_GET\'-Variable bereinigen');
define('_SECURITYCENTER_FILTERPOSTVARS', '\'$_POST\'-Variable bereinigen');
define('_SECURITYCENTER_FILTERCOOKIEVARS', '\'$_COOKIE\'-Variable bereinigen');
define('_SECURITYCENTER_UPDATESETTINGS', 'Automatische Updateüberprüfung');
define('_SECURITYCENTER_UPDATECHECK', 'Nach Updates suchen');
define('_SECURITYCENTER_UPDATEFREQUENCY', 'Häufigkeit');
define('_SECURITYCENTER_MONTHLY', 'Monatlich');
define('_SECURITYCENTER_WEEKLY', 'Wöchentlich');
define('_SECURITYCENTER_DAILY', 'Täglich');
define('_SECURITYCENTER_OTHERSEC', 'Weitere Sicherheitsoptionen');
define('_SECURITYCENTER_KEYEXPIRY', 'Zeitlimit für Authkeys in Sekunden (Standard=0)');
define('_SECURITYCENTER_AUTHKEYUA', 'Authkey an UserAgent binden');
define('_SECURITYCENTER_SITESECUREURL','Secure Hostname');
define('_SECURITYCENTER_SITESECUREURL1','Nur angeben wenn ein anderer Hostname für HTTPS verwendet wird');
define('_SECURITYCENTER_COOKIES', 'Cookie-Einstellungen');
define('_SECURITYCENTER_SIGNCOOKIES', 'Cookies signieren?');
define('_SECURITYCENTER_SIGNINGKEY', 'Signaturschlüssel');
define('_SECURITYCENTER_SESSIONS', 'Sessions');
define('_SECURITYCENTER_SECLEVEL','Sicherheitsstufe');
define('_SECURITYCENTER_SECHIGH','Hoch (Benutzer müssen sich bei jedem Besuch anmelden)');
define('_SECURITYCENTER_SECMEDIUM','Mittel (Benutzer bleiben für eine definierte Tageszahl angemeldet)');
define('_SECURITYCENTER_SECLOW','Niedrig (Benutzer bleiben dauerhaft angemeldet)');
define('_SECURITYCENTER_SECMEDLENGTH','Bei mittlerer Sicherheitsstufe bleiben Benutzer angemeldet für');
define('_SECURITYCENTER_SECMEDTXT','Tagen (bei aktivierter Erinnerung)');
define('_SECURITYCENTER_SECINACTIVELENGTH','Benutzer werden inaktiv nach');
define('_SECURITYCENTER_SECINACTIVETXT','Minuten ohne Aktivität');
define('_SECURITYCENTER_WHERETOSAVE', 'Session-Speicherung');
define('_SECURITYCENTER_WHERETOSAVETXT1', 'Warnung! Änderungen führen zur Abmeldung.');
define('_SECURITYCENTER_FILE', 'in Datei');
define('_SECURITYCENTER_DB', 'in Datenbank (empfohlen)');
define('_SECURITYCENTER_SESSIONSAVEPATH', 'Pfad für Speicherung der Session-Dateien');
define('_SECURITYCENTER_SESSIONSAVEPATHTIP', 'Achtung: Wenn die Option \'Session-Speicherung\' auf  \'Datei\' gesetzt wird, muss der Pfad in im Feld weiter oben angegeben werden. Der Pfad muss beschreibbar sein.');
define('_SECURITYCENTER_GC_PROBABILITY', 'Garbage-Collection Wahrscheinlichkeit');
define('_SECURITYCENTER_GC_RATIO', 'von 10000');
define('_SECURITYCENTER_ANONYMOUSSESSIONS', 'Sessions für Gäste benutzen');
define('_SECURITYCENTER_SESSIONRANDREGENERATE', 'Periodisch Session ID neu erzeugen');
define('_SECURITYCENTER_SESSIONREGENERATE', 'Session ID bei An-/Abmeldung neu erzeugen');
define('_SECURITYCENTER_SESSIONREGENERATEFREQ', 'Wahrscheinlichkeit');
define('_SECURITYCENTER_SESSIONREGENERATEFREQ_RATIO', 'von 100');
define('_SECURITYCENTER_SESSIONIPCHECK', 'IP Check für Session (eventuell Probleme mit AOL und Proxy-Benutzern)');
define('_SECURITYCENTER_SESSIONNAME', 'Name Session-Cookie');
define('_SECURITYCENTER_SESSIONNAMEWARNING', 'Nach Änderung müssen sich alle Benutzer neu anmelden');
define('_SECURITYCENTER_SESSIONPATHNOTWRITABLE', 'Pfad für Sessions nicht beschreibbar!');
define('_SECURITYCENTER_OUTPUTFILTER', 'Einstellungen des Ausgabefilters');
define('_SECURITYCENTER_OUTPUTFILTERINTERNAL', 'interner Ausgabefilter');
define('_SECURITYCENTER_OUTPUTFILTERSAFEHTML', 'SafeHTML als Augabefilter verwenden');
define('_SECURITYCENTER_SELECTOUTPUTFILTER', 'Ausgabefilter wählen');
define('_SECURITYCENTER_MAILTEXT', 'Mail-Text');
define('_SECURITYCENTER_SUMMARYCONTENT', 'Inhalt der Zusammenfassung');
define('_SECURITYCENTER_FULLCONTENT', 'Weiterer Inhalt für komplette Mail-Nachrichten');

// html settings
define('_SECURITYCENTER_HTMLOPT','HTML Einstellungen');
define('_SECURITYCENTER_HTMLENTITIESBOX', 'HTML Entitäten');
define('_SECURITYCENTER_HTMLALLOWEDBOX', 'HTML Tags');
define('_SECURITYCENTER_HTMLALLOWENTITIES','HTML Entitäten in Zeichen wandeln');
define('_SECURITYCENTER_HTMLWARNING','HINWEIS: Um das Risiko von Cross-Site-Scripting zu minimieren sollte - insbesondere bei Freigabe von Tags mit Parametern - der safehtml-Outputfilter im SecurityCenter aktiviert werden.');
define('_SECURITYCENTER_HTMLTAGABOUT', 'Info "&lt;%t%&gt;"');
define('_SECURITYCENTER_HTMLTAGALLOWED','erlaubt');
define('_SECURITYCENTER_HTMLTAGALLOWEDWITHPARAMS','erlaubt mit Parametern');
define('_SECURITYCENTER_HTMLTAGNAME','Tag');
define('_SECURITYCENTER_HTMLTAGNOTALLOWED','nicht erlaubt');
define('_SECURITYCENTER_HTMLTAGUSAGE', 'Taginfo (von <a href="http://www.w3schools.com">W3Schools</a>)');
define('_SECURITYCENTER_SAFEHTMLWARNING', 'Achtung! Der <a href="%url%">SafeHTML Output-Filter</a> überschreibt einige Einstellungen von HTML-Tags (z.B. object und embed)');