<?php
/**
 * PostNuke Application Framework
 *
 * @copyright (c) 2001, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: user.php 20667 2006-11-29 16:58:50Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package     PostNuke_System_Modules
 * @subpackage  PostNuke_Users
*/

// general
define('_USERS', 'Registrierung und Anmeldung');

// view template
define('_USERS_REGISTER','Registrierung');
define('_USERS_REGISTRATIONANDLOGIN','Benutzeranmeldung');
define('_USERS_RETRIEVEPASS','Vergessenes Kennwort anfordern');
define('_USERS_SELECTOPTION','Bitte aus den folgenden Optionen wählen:');

// loginscreen template
define('_USERS_REMEMBERME', 'Cookie setzen');

// check age template
define('_USERS_CONSENT','(Bestätigung für das Mindestalter von %a% Jahren und älter bzw. das Vorliegen der Erlaubnis der Erziehungsberechtigten.)');
define('_USERS_MUSTBE','Das Mindestalter für diese Seite ist %a% Jahre und älter bzw. das Vorliegen einer Erlaubnis der Erziehungsberechtigten');
define('_USERS_OVERAGE','Ich bin %a% Jahre oder älter bzw. das Einverständnis der Erziehungsberechtigten liegt vor.');
define('_USERS_REGISTRATION','Willkommen bei der Benutzer-Registrierung von %s%');
define('_USERS_UNDERAGE','Ich bin jünger als %a% Jahre und das Einverständnis der Erziehungsberechtigten liegt nicht vor');

// registration page
define('_USERS_SUBMITREGISTRATION', 'Registrierung senden');
define('_USERS_ADDITIONALINFO', 'Optionale Informationen');
define('_USERS_ALLOWEMAILVIEW','E-Mail-Adresse im Profil anzeigen');
define('_USERS_COOKIEWARNING','Diese Seite verwendet für die Session-Authentifizierung und teilweise für individuelle Einstellungen Cookies');
define('_USERS_EMAILAGAIN','E-Mail-Adresse bestätigen');
define('_USERS_PASSWDAGAIN','Kennwort (Wiederholung)');
define('_USERS_PASSWILLSEND','Das Kennwort wird an die hinterlegte E-Mail-Adresse gesendet');
define('_USERS_REGNEWUSER','Benutzer-Registrierung');
define('_USERS_REGISTRATIONAGREEMENT','Einverständniserklärung zu');
define('_USERS_REGISTRATIONCHECK', 'Angaben prüfen');
// define('_USERS_REGISTERNOW','Jetzt registrieren!');
// define('_USERS_WEDONTGIVE','Persönliche Daten werden gemäß Bundesdatenschutzgesetz vertraulich behandelt.');
define('_USERS_REQUIREDTEXT','Mit (*) markierte Angaben sind erforderlich.');

// terms of use (tied to the legal module
define('_USERS_CONFIRMTERMSOFUSEHINT', 'Die Allgemeinen Nutzungsbedingungen wurden aktualisiert, bitte lesen und durch Markierung der Checkbox akzeptieren. Solange die Allgemeinen Nutzungsbedingungen nicht akzeptiert wurden ist keine Anmeldung möglich.');
define('_USERS_CONFIRMTERMSOFUSE', 'Ich akzeptiere die <a href="index.php?module=Legal&amp;func=termsofuse">Allgemeinen Nutzungsbedingungen</a>');

// finished registration template
define('_USERS_RETURNTOSTART', 'Zurück zur Startseite');

// lost password template
define('_USERS_CONFIRMATIONCODE','Bestätigungs-Code');
define('_USERS_NOPROBLEM','Kein Problem! Einfach den Benutzernamen oder die hinterlegte E-Mail-Adresse angeben und \'Anforderung senden\' klicken. Es wird dann zur Verifizierung ein \'Bestätigungs-Code\' über E-Mail verschickt mit dem in einem zweiten Schritt auf dieser Seite ein neues Kennwort angefordert werden kann.');
define('_USERS_PASSWORDLOST','Vergessenes Kennwort?');
define('_USERS_SENDPASSWORD','Anforderung senden');

// login/logout templates
define('_USERS_LOGGINGREDIRECT', 'Falls keine Weiterleitung erfolgt bitte hier klicken');
define('_USERS_LOGGINGYOUIN','Anmeldung -- bitte warten!');
define('_USERS_YOUARELOGGEDOUT','Abmeldung erfolgt.');

// status/error messages
define('_USERS_ACTIVATIONINFO','Use the link in the e-mail to activate your account.');
define('_USERS_AGEREQUIREMENTNOTMET','Error! Sorry! You must be %a% or over, or have parental permission to register here.');
define('_USERS_APPLICATIONRECEIVED', 'Thanks for registering! We will review your application soon.');
define('_USERS_CODEMAILED','Der Bestätigungscode für %uname% wurde gedendet.');
define('_USERS_EMAILDOMAINBANNED','Fehler! Domain ist für Registrierung gesperrt');
define('_USERS_EMAILREGISTERED','Fehler! Die E-Mail-Adresse wurde bereits registriert');
define('_USERS_EMAILSDIFF','Fehler! Die beiden E-Mail-Adressen sind unterschiedlich');
define('_USERS_ERRORINREQUIREDFIELDS', 'Fehler! Ein Pflichfeld ist leer bzw. nicht gesetzt');
define('_USERS_ERRORMUSTAGREE','Fehler! Für die Registrierung muß den Allgemeinen Nutzungsbedingungen und der Erklärung zum Datenschutz zugestimmt werden');
define('_USERS_INVALIDREGCODE','Error! Sorry! Invalid registration code');
define('_USERS_LOGININCOMPLETE', 'Anmeldung nicht vollständig, bitte Hinweis lesen');
define('_USERS_LOGININCORRECT','Fehler! Falscher Benutzername bzw. ungültiges Kennwort...');
define('_USERS_MISSINGUSERNAME','Bitte Benutzernamen angeben.<br /><a href="javascript:history.back()">Hier klicken für vorherige Seite</a>');
define('_USERS_NOPROBLEMDETECTED', 'Kein Problem!');
define('_USERS_NOTALLOWREG','Registrierung deaktiviert');
define('_USERS_NOTALLOWREGREASONS','Begründung:');
define('_USERS_NOUSERINFOFOUND','Error! Sorry! no corresponding user information was found');
define('_USERS_PASSWORDMAILED','Kennwort für %uname% wurde gesendet');
define('_USERS_PASSWORDREQUIRED','Bitte Kennwort eingeben');
define('_USERS_PPROFILEMODULENOTAVAILABLE','Error! Sorry! Please install PostNuke\'s Profile module first!');
define('_USERS_REGISTRATIONFAILED','Fehler! Registrierung nicht erfolgreich, bitte Seitenbetreiber verständigen');
define('_USERS_USERACTIVATED','Der Account wurde aktiviert.');
define('_USERS_USERAGENTBANNED','Fehler! Der verwendete Useragent ist gesperrt');
define('_USERS_USERNAMEINVALID','Fehler! Der Benutzername kann nicht verwendet werden, Leerzeichen sind beispielsweise nicht erlaubt');
define('_USERS_USERNAMENOSPACES','Fehler! Der Benutzername darf keine Leerzeichen enthalten');
define('_USERS_USERNAMETAKEN','Fehler! Der Benutzername wurde bereits registriert');
define('_USERS_USERNAMERESERVED','Fehler! Der Benutzername ist nicht verfügbar');
define('_USERS_USERNAMETOOLONG','ehler! Der Benutzername ist nicht zu lang. Er muss kürzer als 25 Zeichen sein.');
define('_USERS_YOUAREREGISTERED','Registrierung abgeschlossen. Die Zugangsinformationen werden an die hinterlegt E-Mail-Adresse verschickt.');
define('_USERS_YOURPASSMUSTBETHISLONG','Fehler! Das Kennwort muß mindestens %x% Zeichen lang sein');

// users block - these defines are here because the blockey is 'user'
// hence this file is loaded by the block
define('_USERS_USERSBLOCK', 'Benutzer-Block');
define('_USERS_USERSBLOCKCONFIG', 'Benutzer-Block konfigurieren');
define('_USERS_USERBLOCKENABLEHELP', 'Mit dieser Option kann ein individueller Block konfiguriert werden.');
define('_USERS_USERBLOCKENABLE', 'Benutzer-Block aktivieren');
//define('_USERS_USERBLOCKCONTENTTIP', 'Tipp: Es kann für Links etc. HTML verwendet werden');
define('_USERS_USERBLOCKUPDATED', 'Benutzer-Block aktualisiert');
define('_USERS_USERBLOCKMENUFOR', 'Block für %user%');

?>