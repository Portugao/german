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
    define('_CANKNOWABOUT','(255 characters maximum. Enter any information you would like other users to know about you)');
}
define('_USERACTIVE', 'User is active');
define('_USERINACTIVE', 'User is inactive');
define('_USERMUSTACCEPTTOU', 'User is inactive until terms of use are accepted');
define('_USERSTATUS', 'User status');
 
define('_ADDUSER','Add new user');
define('_ADDUSERBUT','Add user');
define('_ALLOWREG','Allow new user registrations:');
define('_ANONYMOUS','Name of anonymous user:');
define('_AREYOUSUREDEL','Are you sure you want to delete this/these user(s)?');
define('_AIMCONTAINS','AIM screenname contains');
define('_ANY','Any');
define('_BACK','Back to user administration');
define('_CLICKTO','If you want to list all users,<br />click this button without making any entries in the text fields');
define('_CHARLONG','characters long');
define('_DENYUSER', 'Deny new user');
define('_DESELECTALL','Deselect all');
define('_DYNAMICDATA','Dynamic user data');
define('_EDITUSER','Find a user to edit');
define('_EMAILCONTAINS','E-mail address contains');
define('_EMAILNOTPUBLIC','(This e-mail address will not be public, but is required. It will be used to send you your password if you lose it)');
define('_ERRORINVEMAIL', 'Error, invalid email address');
define('_FIND','Find now');
define('_GOGO','Go');
define('_HASHMETHOD','Password hashing method (default SHA256):');
define('_HOMEPAGECONTAINS','Control panel information  contains');
define('_ICQCONTAINS','ICQ number contains');
define('_IFNO','(If you specify \'No\', please state reasons below)');
define('_ILLEGALDOMAINDESC', 'Comma seperated list of e-mail domains from which registration will not be allowed');
define('_ILLEGALUSERAGENTS', 'Banned Useragents: ');
define('_ILLEGALUSERAGENTDESC', '(Comma seperated list of useragents from which registration will not be allowed)');
define('_ILLEGALUNAME','Reserved user names: ');
define('_ILLEGALUNAMEDESC',' (Enter names here that new users should not be able to register. Separate names with spaces)');
define('_LOGINCONF', 'User Login Configuration');
define('_LOGIN_REDIRECT_WCAG', 'WCAG-compliant login & out');
define('_LOGIN_REDIRECT_META', 'use of meta-refresh');
define('_MINAGE','Minimum age:');
define('_MINAGEDESCR','(Sets the required minimum age for registration; 0 = no age check)');
define('_MSNMCONTAINS','MSN Passport contains');
define('_MAIL','Mail');
define('_MAILUSERS','Mail users');
define('_MAILSENT','Mail dispatched');
define('_MAILSENTFAILED','Error! Sorry! Mail dispatch failed');
define('_NICKNAME', 'User name');
define('_NOUSERSELECTED','Error! Sorry! No user has been selected');
define('_NM_FROM','From name:');
define('_NM_REPLYTOADDRESS','Reply-to address:');
define('_NM_SUBJECT','Subject:');
define('_NM_MESSAGE','Message:');
define('_NM_SEND_MAIL','Send e-mail message(s)');
define('_NOUSERFOUND','No user was found who matched your condition(s)');
define('_NOPASS','Password is missing');
define('_NOTIFYEMAIL','Receive notification of new user registrations: ');
define('_NOTIFYEMAILDESC',' (When a new user registers, an e-mail message will be sent to this address when the account is enabled. Leave blank for no e-mail notification)');
define('_OPTITEMS', 'Show dynamic user data:');
define('_OPTITEMSDESC', 'Display the optional dynamic user data boxes and buttons during the registration process');
define('_PASSWDLEN','Minimum length for user passwords :');
define('_PASSDIFFERENT','Passwords do not match');
define('_REALNAMECONTAINS','Real name contains');
define('_REQUIRED', 'Required field');
define('_REGCONF','User registration');
define('_REGDATEAFTER','Registration date is after<br />(yyyy-mm-dd)');
define('_REGDATEBEFORE','and registration date is before<br />(yyyy-mm-dd)');
define('_REGMODERATION','Moderate user registration');
define('_SELECTALL','Select all');
define('_SAVELASTLOGINDATE', 'Store the users lastlogin date in the database');
define('_SIGNCONTAINS','Signature contains');
define('_TYPENEWPASSWORD','(Please enter a new password twice, for verification, if you want to change it)');
define('_UNIEMAIL','Require that each e-mail address can only be registered once');
define('_UNIEMAILDESC','(Require that each e-mail address can only be registered once by any registered user)');
define('_USERADDED','User added');
define('_USERADDFAILED','Error! Sorry! User addition failed');
define('_USERADMINISTRATION','User administration');
define('_USERGROUPIS','User group is');
define('_USERGRAPHIC','Enable graphics in the user\'s control panel');
define('_USERGROUP', 'Group');
define('_USERGROUPMEMBERSHIP', 'Group Membership');
define('_USERMEMBEROF', 'Member');
define('_USERPATH','Path to user control panel images');
define('_USERNAMECONTAINS','User name contains');
define('_USERSDELETED','User(s) has/have been deleted');
define('_USEREDITED','User has been edited');
define('_USEREXISTS', 'Error, user already exists');
define('_USERSEDIT', 'Edit user');
define('_USERSFOUND','Search results');
define('_VERIFYEMAIL','Verify e-mail address during registration ');
define('_YES_ACTIVEMAIL','Yes, user can choose password when registering, but will need to activate his/her account via an account activation e-mail message');
define('_YES_PASSWORDMAIL','Yes, password should be sent directly to that e-mail address');
define('_YIMCONTAINS','Yahoo! Messenger ID contains');
define('_USERLOGINVIA', 'User can log in via their (Emails must be unique for the email option) ');
define('_USERSADMINVIEW', 'View users');
define('_USERSREALNAME', 'Real name');
define('_USERSID', 'User ID');
define('_USERSEARCH', 'Search users');
define('_USERSVIEW', 'View users');
define('_USERSITEMSPERPAGE', 'Items per page');
define('_USERSNEW', 'Create user');
define('_USERSPENDING', 'Pending applications');
define('_USERSGENERALSETTINGS', 'General settings');
define('_USERSUPDATEUSER', 'Update user');
if (!defined('_DETAILS')) {
    define('_DETAILS', 'Details');
}
define('_CONFIRMAPPLICATION', 'Confirm action for user application');
define('_USERDELETED', 'User deleted');

?>