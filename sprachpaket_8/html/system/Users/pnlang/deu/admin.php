<?php
/**
 * PostNuke Application Framework
 *
 * @copyright (c) 2001, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: admin.php 20591 2006-11-23 20:41:30Z landseer $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package     PostNuke_System_Modules
 * @subpackage  PostNuke_Users
*/

if (!defined('_CANKNOWABOUT')) {
    define('_CANKNOWABOUT','(Informationen über sich eingeben - maximal 255 Zeichen)');
}
define('_USERACTIVE', 'Benutzer ist aktiv');
define('_USERINACTIVE', 'Benutzer ist inaktiv');
define('_USERMUSTACCEPTTOU', 'Benutzer ist inaktiv bis Zustimmung zu Nutzungsbedingungen erteilt');
define('_USERSTATUS', 'Benutzer Status');
 
define('_ADDUSER','Neuen Benutzer hinzufügen');
define('_ADDUSERBUT','Benutzer hinzufügen');
define('_ALLOWREG','Neu-Reistrierungen ermöglichen:');
define('_ANONYMOUS','Name für unregistrierte Benutzer:');
define('_AREYOUSUREDEL','Wirklich Benutzer löschen?');
define('_AIMCONTAINS','AIM Screenname enthält');
define('_ANY','alle');
define('_BACK','Zurück zur Benutzer-Administration');
define('_CLICKTO','Um alle Benutzer anzuzeigen,<br />diesen Knopf klicken ohne vorher eine Wahl getroffen zu haben');
define('_CHARLONG','Zeichen lang');
define('_DENYUSER', 'Neuen Benutzer ablehnen');
define('_DESELECTALL','Alle abwählen');
define('_DYNAMICDATA','Dynamische Benutzerdaten');
define('_EDITUSER','Benutzer zum Editieren wählen');
define('_EMAILCONTAINS','E-Mail-Adresse enthält');
define('_EMAILNOTPUBLIC','(Die E-Mail-Adresse ist nicht öffentlich, aber ein Pflichtfeld. Sie wird zum Kennwort-Versand benötigt');
define('_ERRORINVEMAIL', 'Fehler! Unfültige E-Mail-Adresse');
define('_FIND','Finden');
define('_GOGO','Go!');
define('_HASHMETHOD','Kennwort-Verschlüsselung (Default SHA256):');
define('_HOMEPAGECONTAINS','Homepage enthält');
define('_ICQCONTAINS','ICQ Nummer enthält');
define('_IFNO','(Falls \'Nein\' bitte im folgenden die Gründe angeben)');
define('_ILLEGALDOMAINDESC', 'Kommagetrennte Liste an E-Mail-Domains über die keine Registrierung erlaubt ist');
define('_ILLEGALUSERAGENTS', 'Verbotene Useragents: ');
define('_ILLEGALUSERAGENTDESC', '(Kommagetrennte Liste an Userragents über die keine Registrierung erlaubt ist)');
define('_ILLEGALUNAME','Verbotene Benutzernamen: ');
define('_ILLEGALUNAMEDESC',' (Mit Leerzeichen getrennte Liste an Benutzernamen die nicht erlaubt sind)');
define('_LOGINCONF', 'Konfiguration Benutzeranmeldung');
define('_LOGIN_REDIRECT_WCAG', 'WCAG-konforme An- und Abmeldung');
define('_LOGIN_REDIRECT_META', '(Benutzung von Meta-Refresh)');
define('_MINAGE','Mindestalter:');
define('_MINAGEDESCR','(Das Mindestalter wird während der Registrierung abgefragt; 0 = keine Prüfung)');
define('_MSNMCONTAINS','MSN Passport enthält');
define('_MAIL','Mail');
define('_MAILUSERS','Benutzer anmailen');
define('_MAILSENT','Mail gesendet');
define('_MAILSENTFAILED','Fehler! Mailversand fehlgeschlagen');
define('_NICKNAME', 'Benutzername');
define('_NOUSERSELECTED','Fehler! Kein Benutzer ausgewählt');
define('_NM_FROM','Absender:');
define('_NM_REPLYTOADDRESS','Antwort-Adresse:');
define('_NM_SUBJECT','Thema:');
define('_NM_MESSAGE','Nachricht:');
define('_NM_SEND_MAIL','E-Mail-Nachricht(en) senden');
define('_NOUSERFOUND','Kein passender Benutzer gefunden');
define('_NOPASS','Kennwort fehlt');
define('_NOTIFYEMAIL','Info-Mail über neue Benutzer: ');
define('_NOTIFYEMAILDESC',' (Bei Neugregistrierungen erfolgt nach Freischaltung optional eine Benachrichtigung)');
define('_OPTITEMS', 'Dynamische Benutzerdaten anzeigen:');
define('_OPTITEMSDESC', 'Dynamische Benutzerdaten während der Registrierung anzeigen');
define('_PASSWDLEN','Mindestlänge für Kennwort:');
define('_PASSDIFFERENT','Kennwörter stimmen nicht überein');
define('_REALNAMECONTAINS','Name enthält');
define('_REQUIRED', '(notwendiges Feld)');
define('_REGCONF','Benutzer Registrierung');
define('_REGDATEAFTER','Registrierung erfolgte nach<br />(yyyy-mm-dd)');
define('_REGDATEBEFORE','Registrierung erfolgte vor<br />(yyyy-mm-dd)');
define('_REGMODERATION','Benutzerregistrierung moderieren');
define('_SELECTALL','Alle wählen');
define('_SAVELASTLOGINDATE', 'Letzte Benutzeranmeldung in Datenbank speichern');
define('_SIGNCONTAINS','Signatur enthält');
define('_TYPENEWPASSWORD','(Zur Änderung das Kennwort zweimal angeben)');
define('_UNIEMAIL','Eindeutige E-Mail-Adresse');
define('_UNIEMAILDESC','(E-Mail-Adresse muß systemweit einmalig sein)');
define('_USERADDED','Benutzer hinzugefügt');
define('_USERADDFAILED','Fehler! Benutzer konnte nicht hinzugefügt werden');
define('_USERADMINISTRATION','Benutzer Administration');
define('_USERGROUPIS','Gruppe ist');
define('_USERGRAPHIC','Icons in der Benutzerseite anzeigen');
define('_USERGROUP', 'Gruppe');
define('_USERGROUPMEMBERSHIP', 'Gruppen Mitgliedschaft');
define('_USERMEMBEROF', 'Mitglied');
define('_USERPATH','Pfad für Icons auf der Benutzerseite');
define('_USERNAMECONTAINS','Benutzername enthält');
define('_USERSDELETED','Benutzer wurde(n) gelöscht');
define('_USEREDITED','Benutzer wurde editiert');
define('_USEREXISTS', 'Fehler! Benutzername existiert bereits');
define('_USERSEDIT', 'Benutzer editieren');
define('_USERSFOUND','Suchergebnisse');
define('_VERIFYEMAIL','E-Mail-Adresse während der Registrierung verifizieren ');
define('_YES_ACTIVEMAIL','Ja: Benutzer kann das Kennwort während der Registrierung wählen, muß den Account aber via Mail-Benachrichtung bestätigen');
define('_YES_PASSWORDMAIL','Ja: Kennwort wird direkt an die E-Mail-Adresse geschickt');
define('_YIMCONTAINS','Yahoo! Messenger ID enthält');
define('_USERLOGINVIA', 'Benutzernanmeldung über (E-Mail-Adresse nur in Verbindung mit der Option für systemweit eindeutige E-Mail möglich) ');
define('_USERSADMINVIEW', 'Benutzer anzeigen');
define('_USERSREALNAME', 'Realer Name');
define('_USERSID', 'Benutzer ID');
define('_USERSEARCH', 'Benutzer durchsuchen');
define('_USERSVIEW', 'Benutzer anzeigen');
define('_USERSITEMSPERPAGE', 'Einträge pro Seite');
define('_USERSNEW', 'Benutzer anlegen');
define('_USERSPENDING', 'Ausstehende Anmeldungen zur Freigabe');
define('_USERSGENERALSETTINGS', 'Einstellungen');
define('_USERSUPDATEUSER', 'Benutzer aktualisieren');
if (!defined('_DETAILS')) {
    define('_DETAILS', 'Details');
}
define('_CONFIRMAPPLICATION', 'Aktion bestätigen');
define('_USERDELETED', 'Benutzer gelöscht');

?>