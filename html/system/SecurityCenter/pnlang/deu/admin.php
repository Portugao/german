<?php
/**
 * PostNuke Application Framework
 * @copyright (c) 2001, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: admin.php 21511 2007-02-25 11:45:01Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package PostNuke_System_Modules
 * @subpackage SecurityCenter
 */

// general
define('_SECURITYCENTER_','Security Center');

// singular/plural
define('_SECURITYCENTER_HACKATTEMPT', 'Angriffsversuch');
define('_SECURITYCENTER_HACKATTEMPTS', 'Angriffsversuche');

define('_SECURITYCENTER_OUTPUTFILTER', 'Einstellungen des Ausgabefilters');
define('_SECURITYCENTER_SELECTOUTPUTFILTER', 'Ausgabefilter wählen');
define('_SECURITYCENTER_OUTPUTFILTERINTERNAL', 'interner Ausgabefilter');
define('_SECURITYCENTER_OUTPUTFILTERSAFEHTML', 'SafeHTML als Augabefilter verwenden');

define('_SECURITYCENTER_VIEWHACKATTEMPTSFROMDB','Angriffsversuche in der Datenbank anzeigen');
define('_SECURITYCENTER_VIEWHACKATTEMPTSFROMFILE','Angriffsversuche in einer Logdatei anzeigen');
define('_SECURITYCENTER_MODIFYCONFIG','Sicherheitskonfiguration bearbeiten');
define('_SECURITYCENTER_DISPLAYENABLE','Angiffsschutz aktivieren');
define('_SECURITYCENTER_DISPLAYEMAIL','Bei Angriffen via Email benachrichtigen');
define('_SECURITYCENTER_DISPLAYLOGTODB','Angriffsversuche in der Datenbank speichern');
define('_SECURITYCENTER_ONLYSENDSUMMARYBYEMAIL','Bei Speicherung in der Datenbank, nur eine Zusammenfassung per Email senden');
define('_SECURITYCENTER_DISPLAYITEMSPERPAGE','Einträge pro Seite');
define('_SECURITYCENTER_UPDATE','Security Center aktualisieren');
define('_SECURITYCENTER_VIEW','Angriffsversuche anzeigen');
define('_SECURITYCENTER_NUMBER', 'ID');
define('_SECURITYCENTER_FILE','Datei');
define('_SECURITYCENTER_LINE','Zeile');
define('_SECURITYCENTER_TYPE','Typ');
define('_SECURITYCENTER_INFO','Weitere Informationen');
define('_SECURITYCENTER_TIME','Zeit');
define('_SECURITYCENTER_USERID','Benutzer ID');
define('_SECURITYCENTER_OPTIONS','Optionen');
define('_SECURITYCENTER_BROWSERINFO', 'Browser-Info anzeigen');
define('_SECURITYCENTER_REQUESTARRAY', '\'request\'-Info anzeigen');
define('_SECURITYCENTER_GETARRAY', '\'get\'-Info anzeigen');
define('_SECURITYCENTER_POSTARRAY', '\'post\'-Info anzeigen');
define('_SECURITYCENTER_SERVERARRAY','\'server\'-Info anzeigen');
define('_SECURITYCENTER_ENVARRAY', '\'env\'-Info anzeigen');
define('_SECURITYCENTER_COOKIEARRAY', '\'cookie\'-Info anzeigen');
define('_SECURITYCENTER_FILESARRAY', '\'files\'-Info anzeigen');
define('_SECURITYCENTER_SESSIONARRAY', '\'session\'-Info anzeigen');
define('_SECURITYCENTER_VARIABLE', 'Variable');
define('_SECURITYCENTER_VARIABLEVALUE', 'Variablenwert');
define('_SECURITYCENTER_DELETE', 'Crack-Versuch löschen');
define('_SECURITYCENTER_CONFIRMDELETE', 'Löschen des Angriffsberichts bestätigen');
define('_SECURITYCENTER_CANCELDELETE', 'Löschen des Angriffsberichts bestätigen');
define('_SECURITYCENTER_NOSUCHITEM', 'Kein Eintrag gefunden');
define('_SECURITYCENTER_DELETED', 'Angriffsbericht gelöscht');
define('_SECURITYCENTER_MAILTEXT', 'Mail-Text');
define('_SECURITYCENTER_SUMMARYCONTENT', 'Inhalt der Zusammenfassung');
define('_SECURITYCENTER_FULLCONTENT', 'Weiterer Inhalt für komplette Mailnachrichten');
define('_SECURITYCENTER_USEHTACCESSBANS', '.htaccess verwenden, um IP-Addressen zu bannen');
define('_SECURITYCENTER_FILTERGETVARS', '\'$_GET\'-Variable bereinigen');
define('_SECURITYCENTER_FILTERCOOKIEVARS', '\'$_COOKIE\'-Variable bereinigen');
define('_SECURITYCENTER_FILTERPOSTVARS', '\'$_POST\'-Variable bereinigen');
define('_SECURITYCENTER_EXTRAPOSTPROTECTION', 'Extra \'post\'-Schutz verwenden');
define('_SECURITYCENTER_EXTRAGETPROTECTION', 'Extra \'get\'-Schutz verwenden');
define('_SECURITYCENTER_CHECKMULTIPOST', 'Nur die Anzahl von \'maxmultiPOST\' von aufeinander folgenden posts erlauben');
define('_SECURITYCENTER_MAXMULTIPOST', 'Maximale Anzahl an post operations in Folge, falls checkmultipost aktiviert ist');
define('_SECURITYCENTER_CPULOADMONITOR', 'Zugriff blockieren, wenn das Systembelastung einen gewissen Wert überschreitet');
define('_SECURITYCENTER_CPUMAXLOAD', 'Maximal 5-Minuten durchschnittliche Systembelastung, bevor der Zugriff blockiert wird');
define('_SECURITYCENTER_CCISESSIONPATH', 'Verzeichnispfad zur Speicherung der Session-Dateien');
define('_SECURITYCENTER_HTACCESSFILELOCATION', 'Pfad zur .htaccess-Datei');
define('_SECURITYCENTER_NOCOOKIEBANTHRESHOLD', 'Anzahl der Versuche vor dem Bannen, wenn auf die Site ohne aktivierte Cookies zugegriffen wird');
define('_SECURITYCENTER_NOCOOKIEWARNINGTHRESHOLD', 'Anzahl der Versuche vor einer Warnung, wenn auf die Site ohne aktivierte Cookies zugegriffen wird');
define('_SECURITYCENTER_FASTACCESSBANTHRESHOLD', 'Anzahl der \'fast attempts\' vor dem Bannen');
define('_SECURITYCENTER_FASTACCESSWARNTHRESHOLD', 'Anzahl der \'fast attempts\' vor einer Warnung');
define('_SECURITYCENTER_JAVABABBLE', 'Kodierung/Verschlüsselung verwenden (muss für min. eine Option aktiviert werden)');
define('_SECURITYCENTER_JAVAENCRYPT', 'Aktuelles Encrypting von HTML verwenden, nicht nur escaping (Warnung: die Anzeige kann verlangsamt werden)');
define('_SECURITYCENTER_PRESERVEHEAD', 'Nur zwischen den BODY Tags kodieren/dekodieren');
define('_SECURITYCENTER_GENERALCONFIG', 'Allgemeine Einstellungen');
define('_SECURITYCENTER_VARIABLECLEANSING', 'Bereinigung von HTTP-Variablen');
define('_SECURITYCENTER_DENIALOFSERVICE', 'Denial of Service');
define('_SECURITYCENTER_ENCRYPTION', 'Kodierung');
define('_SECURITYCENTER_FILTERARRAYS', 'Arrays in HTTP-Variablen filtern');

define('_SECURITYCENTER_VIEWLOGGEDEVENTS', 'Logeinträge anzeigen');
define('_SECURITYCENTER_VIEW_LOGEVENT', 'Logeintrag anzeigen');
define('_SECURITYCENTER_VIEW_FILTER', 'Filter');
define('_SECURITYCENTER_LOGEVENT_DELETE', 'Logeintrag löschen');
define('_SECURITYCENTER_LOGEVENT_DATE', 'Datum');
define('_SECURITYCENTER_LOGEVENT_USER', 'Benutzer');
define('_SECURITYCENTER_LOGEVENT_COMPONENT', 'Komponente');
define('_SECURITYCENTER_LOGEVENT_MODULE', 'Modul');
define('_SECURITYCENTER_LOGEVENT_TYPE', 'Typ');
define('_SECURITYCENTER_LOGEVENT_FUNCTION', 'Funktion');
define('_SECURITYCENTER_LOGEVENT_SECURITY', 'Sicherheit');
define('_SECURITYCENTER_LOGEVENT_MESSAGE', 'Nachricht');
define('_SECURITYCENTER_LOGEVENT_ACTION', 'Aktion');

define('_SECURITYCENTER_FILTER_ALL', 'Alle');
define('_SECURITYCENTER_FILTER_CLEAR', 'Löschen');
define('_SECURITYCENTER_FILTER_DATE', 'Datum');
define('_SECURITYCENTER_FILTER_COMPONENT', 'Komponente');
define('_SECURITYCENTER_FILTER_TYPE', 'Typ');
define('_SECURITYCENTER_FILTER_MODULE', 'Modul');
define('_SECURITYCENTER_FILTER_USER', 'Benutzer');
?>