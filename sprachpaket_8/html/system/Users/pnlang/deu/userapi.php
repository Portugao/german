<?php
/**
 * PostNuke Application Framework
 *
 * @copyright (c) 2001, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id$
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @author Xiaoyu Huang
 * @package PostNuke_System_Modules
 * @subpackage  PostNuke_Users
*/

// welcome e-mail
define('_USERS_YOURACCOUNTPENDING', 'Die Anmeldung muß noch durch den Seitenbetreiber freigeschaltet werden. Nach der Freigabe erfolgt eine E-Mail-Benachrichtigung.');
define('_USERS_FOLLOWINGMEM','Die gespeicherte Information ist:');
define('_USERS_KEEPTHISEMAILSAFE', 'Bitte diese E-Mail speichern, da es ist die einzige Kennwort-Benachrichtigung ist!');
define('_USERS_USEDEMAILTOREGISTER','Jemand mit der E-Mail-Adresse (%email%) hat ein Benutzerkonto eingerichtet bei: %sitename%.');
define('_USERS_WELCOMESUBJECT','Zugangsdaten für %uname% von %sitename%');
define('_USERS_WELCOMETOSITE', 'Willkommen bei %sitename% (%siteurl%)!');
define('_USERS_YOURAPPLICATIONAPPROVED', 'Die Anmeldung wurde jetzt freigeschaltet. Das Kennwort wurde bereits per E-Mail versendet.');
define('_USERS_YOUCANCHANGEITAT','Es kann nach einem Login unter %url% geändert werden.');

// password e-mail
define('_USERS_ACCOUNTHASEMAIL','Der Benutzer-Account %uname% bei %sitename% hat diese E-Mail-Adresse hinterlegt.');
define('_USERS_AWEBUSERHASREQUESTEDPASSWORD','Jemand mit der IP-Adresse %hostname% hat einen Kennwort-Versand angefordert.');
define('_USERS_IFYOUDIDNOTASK','Falls keine entsprechende Anforderung gestellt wurde, kann diese Benachrichtigung ignoriert werden.');
define('_USERS_PASSWORDFOR','Benutzer-Kennwort für %uname%');
define('_USERS_YOURNEWPASSWORDIS','Das neue Kennwort ist: %password%.');

// lost password code e-mail
define('_USERS_CODEFOR','Bestätigungscode für %uname%');
define('_USERS_AWEBUSERHASREQUESTEDCODE', 'Jemand mit der IP-Adresse %hostname% hat eine Bestätigung angefordert um das Kennwort zu ändern.');
define('_USERS_YOURCODEIS','Der Bestätigungs-Code ist: %code%');
define('_USERS_WITHTHISCODE','Mit diesem Bestätigungs-Code kann ein neues Kennwort unter %url% angelegt werden.');
define('_USERS_IFYOUDIDNOTASK2','Falls keine entsprechende Anforderung gestellt wurde, kann diese Benachrichtigung ignoriert werden.');

// activation e-mail
define('_USERS_ACTIVATIONSUBJECT', 'Aktivierung von %uname%');
define('_USERS_ACIVATEYOURACCOUNTLINK', 'Bitte den folgenden Link anklicken um die Registrierung abzuschliessen.');
define('_USERS_ONCEACTIVATED', 'Nach der Freischaltung sind die Account-Daten:');

// admin notification e-mail
define('_USERS_NOTIFYEMAILSUBJECT','Benutzerregistrierung');
define('_USERS_NOTIFYEMAILBODY','Ein neuer Benutzer hat sich registriert. Benutzername: %uname% ');

// session expired template
define('_USERS_SESSIONEXPIREDHEADER', 'Die Benutzer-Session ist abgelaufen.');
define('_USERS_SESSIONEXPIREDTEXT', 'Die vorhergehende Anmeldung wurde nach Inaktivität geschlossen - <a href="%u%">Anmeldung</a>');

