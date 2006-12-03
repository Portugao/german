<?php

// installer page language strings
define('_INSTALLER', 'PostNuke Installation');
define('_INSTALLERPLEASEREFER', 'Bitte während der Installation');
define('_INSTALLERDURINGPROCESS', 'beachten');
define('_INSTALLERQUALITY', 'NOTE: Official PostNuke distributions are ONLY available from PostNuke.com. For certitude of quality, please ensure you are installing an official distribution.');

// installer tasks
define('_INSTALLERTASKS', 'Installer Aufgaben');
define('_INSTALLERTASK0', 'Bestehendes Installations-Login');
define('_INSTALLERTASK1', 'Sprache wählen');
define('_INSTALLERTASK2', 'Lizenz akzeptieren');
define('_INSTALLERTASK3', 'System-Voraussetzungen');
define('_INSTALLERTASK4', 'Datenbank Information');
define('_INSTALLERTASK5', 'Installationstyp wählen');
define('_INSTALLERTASK6', 'Administrator einrichten');
define('_INSTALLERTASK7', 'Theme wählen');
define('_INSTALLERTASK8', 'Fertig!');

// installer resources
define('_INSTALLERESOURCES', 'Zusätzliche Informationen');
define('_INSTALLERGUIDE', 'Installationsanleitung');
define('_INSTALLERDOCS', 'PostNuke Dokumentation');
define('_INSTALLERFORUMS', 'Support Foren');

// standard buttons
define('_RECHECK', 'erneut prüfen');

// task templates
// _lang.htm
define('_INSTALLERCHOOSELANG', 'Sprache wählen');

// _licence.htm
define('_INSTALLERTHISSCRIPT', 'This script will install the PostNuke database and help you set up the variables that you need to start.
You will be taken through a variety of pages. Each page sets a different portion of the script. We estimate that this entire process
will take about ten minutes. At any time that you get stuck, please visit our support forums for help.');
define('_INSTALLERLICENSE', 'Our License Please read through the GNU General Public License. PostNuke is developed as free software,
but there are certain requirements for distributing and editing.');
define('_INSTALLERGNUURL1', 'http://www.gnu.org/licenses/gpl.html');
define('_INSTALLERGNULINKTEXT1', 'GNU General Public License');
define('_INSTALLERGNUURL2', 'http://www.gnu.org/philosophy/');
define('_INSTALLERGNULINKTEXT2', 'Philosophie des GNU Projektes');
define('_ACCEPTLICENCE', 'Lizenz akzeptieren');

// _requirements.htm
define('_INSTALLERPHP', 'PHP');
define('_INSTALLERYOURPHPVER', 'Die aktuelle PHP-Version ist');
define('_INSTALLERPHPTOKENOK', 'In der PHP-Version ist die "token" Funktion verfügbar.');
define('_INSTALLERPHPTOKENNOTOK', 'In der PHP-Version ist die "token" Funktion nicht verfügbar - diese Funktion ist aber Voraussetzung.');
define('_INSTALLERPHPVEROK', 'und erfüllt die Mindestanforderung (4.3.0).');
define('_INSTALLERPHPVERNOTOK', 'und erfüllt die Mindestanforderung (4.3.0) nicht.');
define('_INSTALLERFILESYSTEMPERMS', 'Datei Zugriffsrechte');
define('_INSTALLERFILEWRITABLE', '%f ist beschreibbar.');
define('_INSTALLERFILENOTWRITABLE', '%f kann nicht verändert werden - bitte die Zugriffsrechte kontrollieren.');
define('_INSTALLERWPPERMISSIONURL', 'http://www.wikipedia.org/wiki/File_system_permissions');
define('_INSTALLERWPPERMISSIONLINKTEXT', 'Datei Zugriffsrechte');
define('_INSTALLERPERSONALCONFIG', 'Eigene Konfigurationsdatei');
define('_INSTALLERPERSONALCONFIGDOESNOTEXIST', '%f existiert nicht');
define('_INSTALLERPERSONALCONFIGEXISTS', '%f existiert. Bitte vor der Installation umbenennen');

// _dbinformation.htm
// database field labels
define('_INSTALLERDBTYPE', 'Datenbank Typ');
define('_INSTALLERDBTABLETYPE', 'Tabellentyp (nur MySQL)');
define('_INSTALLERDBHOST', 'Host');
define('_INSTALLERDBUSERNAME', 'Benutzername');
define('_INSTALLERDBPASSWORD', 'Kennwort');
define('_INSTALLERDBNAME', 'Datenbank Name');
define('_INSTALLERTABLEPREFIX', 'Tabellenprefix');
define('_INSTALLERCREATEDB', 'Datenbank anlegen');
define('_INSTALLERCREATEDBFAILED', 'Datenbank konnte nicht angelegt werden - bitte die Account-Informationen kontrollieren');
define('_INSTALLERDBINFOFROMHOST', 'Die entsprechenden Informationen liefert normalerweise der Provider bzw. Administrator.');
define('_INSTALLERCONNECTDBFAILED', 'Keine Verbindung zur Datenbank - bitte die Account-Informationen kontrollieren');

// _login.htm
define('_INSTALLERADMINLOGINREQUIRED', 'Es besteht bereits eine Installation. Bitte als Administrator anmelden.');
define('_INSTALLERLOGINUSERNAME', 'Name:');
define('_INSTALLERLOGINPASSWORD', 'Kennwort:');
define('_INSTALLERLOGINFAILED', 'Login fehlgeschlagen, bitte erneut probieren.');
define('_INSTALLERNOTADMINUSER', 'Der Benutzer hat keine administrativen Rechte.');


// _installationtype.htm
define('_INSTALLERSELECTTYPE', 'Installationstyp wählen');
define('_INSTALLERBASIC', 'Basis - nur Grundinstallation des Core');
define('_INSTALLERCOMPLETE', 'Komplett - alle verfügbaren Module installieren');
define('_INSTALLERBLOG', 'Blogging Webseite');

// _createadmin.htm
define('_INSTALLERADMINNAME', 'Name');
define('_INSTALLERADMINUSERNAME', 'Benutzername');
define('_INSTALLERADMINPASSWORD', 'Kennwort');
define('_INSTALLERADMINRETYPEPASSWORD', 'Kennwort wiederholen');
define('_INSTALLERADMINEMAIL', 'E-Mail-Adresse');
define('_INSTALLERADMINURL', 'URL');
define('_INSTALLERPASSWORDCOMPAREFAILED', 'Adminbenutzer konnte nicht angelegt werden - bitte Eingaben überprüfen');
define('_INSTALLEREMAILVALIDATEFAILED', 'E-Mail-Adresse scheinbar ungültig - bitte Eingabe überprüfen');
define('_INSTALLERURLVALIDATECOMPAREFAILED', 'URL-Angabe scheinbar ungültig - bitte Eingabe überprüfen');

// _gotosite.htm
define('_INSTALLERCREDITS', 'Credits');
define('_INSTALLERTEAM', 'These are the scripts and people that make PostNuke go. Take some time and let these people know how much you appreciate their work.
If you would like to be listed here, contact us about being a part of the developement team. We are always looking for some help.');
define('_INSTALLERPROBLEMS', 'You are now done with the PostNuke installation. If you run into any problems, let us know.  Make sure that you delete this script.
You will not need it again.');
define('_INSTALLERGOTOSITE', 'Go to your PostNuke site');

// _selecttheme.htm
define('_INSTALLERSELECTHEME', 'Default Theme der Seite');
define('_INSTALLERTHEMES', 'Die Themes bestimmen das Aussehen der Webseite. In der PostNuke Grundinstallation sind nur einige Themes enthalten, weitere gibt es z.B. unter <a href="http://community.postnuke.com/module-Database-main-tid-4.htm">Theme Release Database</a>. Bitte ein Theme für die Grundinstallation wählen, es kann später verändert werden.');
define('_INSTALLERPNTHEMESURL', 'http://community.postnuke.com/module-Database-main-tid-4.htm');
define('_INSTALLERPNTHEMES', 'Theme Release Database');

// modify_config.php
define('_INSTALLERMODIFYFILE_1','Fehler: kein Lesezugriff:');
define('_INSTALLERMODIFYFILE_2','Fehler: kein Schreibzugriff:');
define('_INSTALLERMODIFYFILE_3','0 Zeilen geändert, nicht gemacht');

// default blocks
define('_BLOCKS_00_b','Hauptmenü');
define('_BLOCKS_00_c','a:5:{s:14:"displaymodules";s:1:"1";s:5:"style";i:1;s:10:"stylesheet";s:0:"";s:8:"template";s:4:"menu";s:7:"content";s:230:"index.php|Home|Back to the home page.LINESPLITuser.php|Your account|Go to your personal account control panel.LINESPLITadmin.php|Administration|Administer this PostNuke site.LINESPLIT{Users:logout}|Log out|Log out of your account.";}');
define('_BLOCKS_01_b','Sprachen');
define('_BLOCKS_02_b','Admin-Nachrichten');
define('_USER_LOGINBLOCK_TITLE', 'Anmeldung');
define('_USER_ONLINEBLOCK_TITLE', 'Wer ist angemeldet');
define('_BLOCKS_LEFTBLOCKS', 'Linke Blöcke');
define('_BLOCKS_RIGHTBLOCKS', 'Rechte Blöcke');
define('_BLOCKS_CENTERBLOCKS', 'Mittlere Blöcke');

?>