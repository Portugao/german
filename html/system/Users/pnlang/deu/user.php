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

define('_CONFIRMTERMSOFUSEHINT', 'Die Nutzungsbedingungen wurden aktualisiert, bitte lesen und durch Markierung der Checkbox akzeptieren. Solange die Nutzungsbedingzbgen nicht akzeptiert wurden ist keine Anmeldung möglich.');
define('_CONFIRMTERMSOFUSE', 'Ich akzeptiere die <a href="index.php?module=Legal&amp;func=termsofuse">Nutzungsbedingungen</a>');
define('_USERACTIVATION','Account Aktivierung');
define('_YOUACTIVATED','Der Account wurde aktiviert. Bitte <a href="index.php?module=Users&func=view&op=loginscreen">hier</a> anmelden.');
define('_ACTIVATIONFAILED','Fehler: Der Aktivierungslink ist ungültig.');

if (!defined('_CHARLONG')) {
  define('_CHARLONG','Zeichen lang');

}

define('_ADDITIONALINFO', 'Optionale Informationen');
define('_ALLOWEMAILVIEW','Allow other users to view your e-mail address');
define('_ANDCONNECTOR','and');
define('_ASREG1','Post comments signed with your user name');
define('_ASREG2','Submit articles signed with your user name');
define('_ASREG3','Display a personal menu box and set other display options via your personal account control panel');
define('_ASREG4','Choose how many articles should display');
define('_ASREG5','Customize how comments are displayed');
define('_ASREG6','Select different graphic themes to change the site\'s appearance');
define('_ASREG7','Benefit from various other facilities...');
define('_ASREGUSER','As a registered user, you can:');
if (!defined('_CANKNOWABOUT')) {
  define('_CANKNOWABOUT','(255 characters maximum. Enter any information you would like other users to know about you)');
}
define('_CODEFOR','Confirmation code for');
define('_CONFIRMATIONCODE','Confirmation code');
define('_CONSENT','(By clicking on the above link you certify that you are either %a% or over, or that you have parental consent to register here.)');
define('_COOKIEWARNING','NOTICE: The preferences you set for your user account are stored in cookies.');
define('_EMAILAGAIN','E-mail address (repeat for verification)');
define('_EMAILDOMAINBANNED','Error! Sorry! The email domain is banned');
define('_EMAILREGISTERED','ERROR: This e-mail address has already been registered');
define('_EMAILSDIFF','The two e-mail addresses you typed are different.');
define('_ERRORINREQUIREDFIELDS', 'Sorry! A required field is empty or unset.');
define('_ERRORINVEMAIL','Error! Sorry! There is an error in the e-mail address that you provided.  Please double-check what you entered');
define('_ERRORINVNICK','Error! Sorry! The user name you entered is not acceptable. This could be because you included a space in the user name');
define('_ERRORMUSTAGREE','Error! Sorry! To use this site, you must agree to the site terms of service and privacy policy. Please go back and click on the check box to signify that you agree.');
define('_LOGINSITE','Log in');
define('_LOGGINGREDIRECT', 'If you are not automatically redirected please click here.');
define('_LOGGINGYOU','Processing login -- please wait!');
define('_LOGININCOR','Error! Sorry! Wrong user name or password. Please try again...');
define('_LOGININCOMPLETE', 'Login incomplete, please read the note below');
if (!defined('_HERE')) {
  define('_HERE','here');
}
define('_MAILED','mailed.');
define('_MISSINGUSERNAME','Please enter a user name.<br /><a href="javascript:history.back()">Click here to go back to the previous page</a>');
define('_MODERATEDREGSAVED', 'Thanks for registering ! We will review your application soon.');
define('_MUSTBE','You must be %a% or over, or have parental permission to register here.');
define('_NAMERESERVED','Error! Sorry! This user name is reserved');
define('_NEWUSER', 'Accept registration');
define('_NICK2LONG','Error! Sorry! This user name is too long. It must be less than 25 characters in length');
define('_NICKNAME', 'User name');
define('_NICKNOSPACES','Error! Sorry! Your user name cannot contain any spaces');
define('_NICKTAKEN','Error! Sorry! This user name has already been registered');
define('_NOPROBLEM','No problem! Just enter your user name  or your e-mail address and press the \'Submit\' button. An e-mail message will be sent to you with a \'confirmation code\'. After you receive your confirmation code, return to this page and enter your user name or e-mail address and your confirmation code into this form and then press the \'Submit\' button: a new password will be generated and mailed to you.');
define('_NOPROBLEMDETECTED', 'No problem detected !');
define('_NOTALLOWREG','Sorry! New user account registration is currently disabled');
define('_OPTION', 'Option');
define('_OPTIONALITEMS','Optional items');
define('_OVERAGE','I am %a% or over, or I have parental consent.');
define('_PASSDIFFERENT','Error! Sorry! You did not enter the same  password in each password field. Please enter the same password twice (this is for verification).');
define('_PASSWDAGAIN','Password (repeat for verification)');
define('_PASSWDNEEDED','Please enter a password.');
define('_PASSWORD4','Password for');
define('_PASSWORDLOST','Lost your password?');
define('_PASSWILLSEND','(Your password will be sent to the e-mail address you enter)');
define('_PLEASEINSTALLPROFILE','Error! Sorry! Please install PostNuke\'s Profile module first!');
define('_PRIVACYPOLICY','Privacy policy');
define('_REASONS','Reasons:');
define('_REGISTER','Register');
define('_REGISTERNOW','Register now! It\'s free!');
define('_REGISTRATION','Welcome to %s% user registration area.');
define('_REGISTRATIONAGREEMENT','I agree to be bound by this web site\'s');
define('_REGISTRATIONCHECK', 'Check information');
define('_REGISTRATIONFAILED','Error! Sorry! Failed to register you. Please contact the site administrator.');
define('_REGNEWUSER','New user registration');
define('_REMEMBERME', 'Remember me');
define('_RETRIEVEPASS','Lost password recovery');
define('_RETURN','to return');
define('_SELECTOPTION','Please choose one of the options below:');
define('_SENDPASSWORD','Send password');
define('_SORRY','Sorry.');
define('_SORRYNOUSERINFO','Error! Sorry! no corresponding user information was found');
define('_TERMSOFUSE','Terms of use');
define('_WEDONTGIVE','Your personal information will not be sold or given to any other party.');
define('_UNDERAGE','I am under %a%, and do not have parental consent.');
define('_USERAGENTBANNED','Error! Sorry! The useragent is banned');
define('_USERLOGIN','User name');
define('_USERREGLOGIN','User log-in and registration');
define('_YOUARELOGGEDOUT','You have been logged out.');
define('_YOUAREREGISTERED','You are now registered. You should receive your user account information, including your password, at the e-mail address you provided.');
define('_YOURPASSMUSTBETHISLONG','Error! Sorry! Your password must be at least %x% characters long');
define('_USERS', 'User registration and log-in');
define('_USERSUSERACTIVATED','Account activated');
define('_USERSCLICKHETETOLOGIN','Click here to log in');
define('_USERSINVALIDREGCODE','Invalid registration code');
// user profile defines
define('_USERSUSERPROFILE', 'User profile for');
define('_USERSNOSUCHUSER', 'User not found');

define('_USERS_USERSBLOCK', 'Custom block');
define('_USERS_USERSBLOCKCONFIG', 'Configure custom block');
define('_USERS_USERBLOCKENABLEHELP', 'If you enable this option, the following text will display on your personal home page.');
define('_USERS_USERBLOCKENABLE', 'Enable your personal menu block');
define('_USERS_USERBLOCKCONTENTTIP', 'Tip: you can use HTML code to include links to web pages on this site or another site.');
define('_USERS_USERBLOCKUPDATED', 'Custom block updated');
define('_USERS_USERBLOCKMENUFOR', 'Menu for');

?>