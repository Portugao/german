<?php

// installer page language strings
define('_INSTALLER', 'PostNuke installation');
define('_INSTALLERPLEASEREFER', 'Please refer to the');
define('_INSTALLERDURINGPROCESS', 'during this process');
define('_INSTALLERQUALITY', 'NOTE: Official PostNuke distributions are ONLY available from PostNuke.com. For certitude of quality, please ensure you are installing an official distribution.');

// installer tasks
define('_INSTALLERTASKS', 'Installer tasks');
define('_INSTALLERTASK0', 'Existing Install Login');
define('_INSTALLERTASK1', 'Select language');
define('_INSTALLERTASK2', 'Accept licence');
define('_INSTALLERTASK3', 'System requirements');
define('_INSTALLERTASK4', 'Enter database information');
define('_INSTALLERTASK5', 'Select installation type');
define('_INSTALLERTASK6', 'Create admin user');
define('_INSTALLERTASK7', 'Select theme');
define('_INSTALLERTASK8', 'All done!');

// installer resources
define('_INSTALLERESOURCES', 'Useful resources');
define('_INSTALLERGUIDE', 'Installation guide');
define('_INSTALLERDOCS', 'PostNuke Documentation');
define('_INSTALLERFORUMS', 'Support Forums');

// standard buttons
define('_RECHECK', 'Recheck');

// task templates
// _lang.htm
define('_INSTALLERCHOOSELANG', 'Choose language');

// _licence.htm
define('_INSTALLERTHISSCRIPT', 'This script will install the PostNuke database and help you set up the variables that you need to start.
You will be taken through a variety of pages. Each page sets a different portion of the script. We estimate that this entire process
will take about ten minutes. At any time that you get stuck, please visit our support forums for help.');
define('_INSTALLERLICENSE', 'Our License Please read through the GNU General Public License. PostNuke is developed as free software,
but there are certain requirements for distributing and editing.');
define('_INSTALLERGNUURL1', 'http://www.gnu.org/licenses/gpl.html');
define('_INSTALLERGNULINKTEXT1', 'GNU General Public License');
define('_INSTALLERGNUURL2', 'http://www.gnu.org/philosophy/');
define('_INSTALLERGNULINKTEXT2', 'Philosophy of the GNU Project');
define('_ACCEPTLICENCE', 'Accept Licence');

// _requirements.htm
define('_INSTALLERPHP', 'PHP');
define('_INSTALLERYOURPHPVER', 'Your php version is');
define('_INSTALLERPHPTOKENOK', 'Your php installation has the token functions available.');
define('_INSTALLERPHPTOKENNOTOK', 'Your php installation doesn\'t have the token functions available - these are required for PostNuke\'s output system.');
define('_INSTALLERPHPVEROK', 'which meets our system requirement of php version 4.3.0.');
define('_INSTALLERPHPVERNOTOK', 'which doesn\'t meet our system requirement of php version 4.3.0.');
define('_INSTALLERFILESYSTEMPERMS', 'File system permissions');
define('_INSTALLERFILEWRITABLE', '%f is writable.');
define('_INSTALLERFILENOTWRITABLE', 'Cannot write to %f - please ensure that the file permissions are correct.');
define('_INSTALLERWPPERMISSIONURL', 'http://www.wikipedia.org/wiki/File_system_permissions');
define('_INSTALLERWPPERMISSIONLINKTEXT', 'File system permissions');
define('_INSTALLERPERSONALCONFIG', 'Personal configuration file');
define('_INSTALLERPERSONALCONFIGDOESNOTEXIST', '%f does not exist');
define('_INSTALLERPERSONALCONFIGEXISTS', '%f exists. Rename this file before continuing with this installation.');

// _dbinformation.htm
// database field labels
define('_INSTALLERDBTYPE', 'Database type');
define('_INSTALLERDBTABLETYPE', 'Database table type (MySQL only)');
define('_INSTALLERDBHOST', 'Host');
define('_INSTALLERDBUSERNAME', 'Username');
define('_INSTALLERDBPASSWORD', 'Password');
define('_INSTALLERDBNAME', 'Database Name');
define('_INSTALLERTABLEPREFIX', 'Table Prefix (for Table Sharing)');
define('_INSTALLERCREATEDB', 'Create the database');
define('_INSTALLERCREATEDBFAILED', 'Failed to create database - please verify database information');
define('_INSTALLERDBINFOFROMHOST', 'Database credentials are provided to you by your host or administrator.');
define('_INSTALLERCONNECTDBFAILED', 'Failed to connect to the database - please verify database information');

// _login.htm
define('_INSTALLERADMINLOGINREQUIRED', 'We detected an existing installation.  You must log in as the Administrative user to proceed.');
define('_INSTALLERLOGINUSERNAME', 'Administrative username:');
define('_INSTALLERLOGINPASSWORD', 'Password:');
define('_INSTALLERLOGINFAILED', 'Failed to login, please check and try again.');
define('_INSTALLERNOTADMINUSER', 'The username you used does not have administrative rights.');


// _installationtype.htm
define('_INSTALLERSELECTTYPE', 'Please select your installation type');
define('_INSTALLERBASIC', 'Basic - only the modules required for the basic operation of a site are installed');
define('_INSTALLERCOMPLETE', 'Complete - all modules found in the system are installed.');
define('_INSTALLERBLOG', 'Blogging site');

// _createadmin.htm
define('_INSTALLERADMINNAME', 'Name');
define('_INSTALLERADMINUSERNAME', 'Username');
define('_INSTALLERADMINPASSWORD', 'Password');
define('_INSTALLERADMINRETYPEPASSWORD', 'Re-type password');
define('_INSTALLERADMINEMAIL', 'E-Mail address');
define('_INSTALLERADMINURL', 'URL');
define('_INSTALLERPASSWORDCOMPAREFAILED', 'Failed to create admin user - please verify user credentials');
define('_INSTALLEREMAILVALIDATEFAILED', 'Failed to validate admin e-mail address - please verify address');
define('_INSTALLERURLVALIDATECOMPAREFAILED', 'Failed to validate admin url - please verify url');

// _gotosite.htm
define('_INSTALLERCREDITS', 'The Credits');
define('_INSTALLERTEAM', 'These are the scripts and people that make PostNuke go. Take some time and let these people know how much you appreciate their work.
If you would like to be listed here, contact us about being a part of the developement team. We are always looking for some help.');
define('_INSTALLERPROBLEMS', 'You are now done with the PostNuke installation. If you run into any problems, let us know.  Make sure that you delete this script.
You will not need it again.');
define('_INSTALLERGOTOSITE', 'Go to your PostNuke site');

// _selecttheme.htm
define('_INSTALLERSELECTHEME', 'Select default theme');
define('_INSTALLERTHEMES', 'Themes are used to alter the entire look of a site. PostNuke ships with a small number of default themes. Many more are available from <a href="http://community.postnuke.com/module-Database-main-tid-4.htm">Theme Release Database</a>. Please select a default theme for your new site - you may change the theme later.');
define('_INSTALLERPNTHEMESURL', 'http://community.postnuke.com/module-Database-main-tid-4.htm');
define('_INSTALLERPNTHEMES', 'Theme Release Database');

// modify_config.php
define('_INSTALLERMODIFYFILE_1','Error: unable to open for read:');
define('_INSTALLERMODIFYFILE_2','Error: unable to open for write:');
define('_INSTALLERMODIFYFILE_3','0 lines changed, did nothing');

// default blocks
define('_BLOCKS_00_b','Main menu');
define('_BLOCKS_00_c','a:5:{s:14:"displaymodules";s:1:"1";s:5:"style";i:1;s:10:"stylesheet";s:0:"";s:8:"template";s:4:"menu";s:7:"content";s:230:"index.php|Home|Back to the home page.LINESPLITuser.php|Your account|Go to your personal account control panel.LINESPLITadmin.php|Administration|Administer this PostNuke site.LINESPLIT{Users:logout}|Log out|Log out of your account.";}');
define('_BLOCKS_01_b','Languages');
define('_BLOCKS_02_b','Administration Messages');
define('_USER_LOGINBLOCK_TITLE', 'User log-in');
define('_USER_ONLINEBLOCK_TITLE', 'Who\'s online');
define('_BLOCKS_LEFTBLOCKS', 'Left blocks');
define('_BLOCKS_RIGHTBLOCKS', 'Right blocks');
define('_BLOCKS_CENTERBLOCKS', 'Center blocks');

?>