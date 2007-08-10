<?php

// installer page language strings
define('_INSTALLER', 'PostNuke Installation');
define('_INSTALLERPLEASEREFERTOGUIDE', 'Bitte die <a style="color:red" href="docs/install.html" onclick="window.open(\'docs/install.html\');return false;">
Installationsanleitung</a> beachten. Weitere deutschsprachige Informationen gibt es auch unter <a href="http://support.pn-cms.de">support.pn-cms.de</a>.');
define('_INSTALLERQUALITY', 'HINWEIS: PostNuke-Download-Pakete sollten vor der Installation über die MD5 bzw. SHA1 Prüfsummen validiert werden. Die entsprechenden Angaben dazu finden sich im Downloadbereich bei <a href="http://community.postnuke.com">community.postnuke.com</a> bzw. <a href="http://support.pn-cms.de">support.pn-cms.de</a>.');

// installer tasks
define('_INSTALLERTASKS', 'Installer Aufgaben');
define('_INSTALLERTASK0', 'Bestehendes Installations-Login');
define('_INSTALLERTASK1', 'Sprache wählen');
define('_INSTALLERTASK2', 'Lizenz akzeptieren');
define('_INSTALLERTASK3', 'Voraussetzungen');
define('_INSTALLERTASK4', 'Datenbank Information');
define('_INSTALLERTASK5', 'Installationstyp wählen');
define('_INSTALLERTASK6', 'Administrator anlegen');
define('_INSTALLERTASK7', 'Startseite wählen');
define('_INSTALLERTASK8', 'Theme wählen');
define('_INSTALLERTASK9', 'Fertig!');

// installer resources
define('_INSTALLERESOURCES', 'Zusätzliche Informationen');
define('_INSTALLERGUIDE', 'Anleitung zur Installation');
define('_INSTALLERDOCS', 'PostNuke Dokumentation');
define('_INSTALLERFORUMS', 'Support Foren');

// standard buttons
define('_RECHECK', 'erneut prüfen');

// task templates
// _lang.htm
define('_INSTALLERCHOOSELANG', 'Sprache wählen');

// _licence.htm
define('_INSTALLERTHISSCRIPT', 'Die Installationsroutine hilft bei der Grundeinrichtung einer neuen PostNuke Webseite.
Die Installation erfolgt in mehreren Schritten in ca. 5-10 Minuten.');
define('_INSTALLERLICENSE', 'Bitte vor der Installation die zugrundeliegende GNU General Public License durchlesen. PostNuke wird als "freie" Software entwickelt,
es gibt aber Richtlinien zur Verteilung und Bearbeitung.');
define('_INSTALLERGNUURL1', 'http://www.gnu.org/licenses/gpl.html');
define('_INSTALLERGNULINKTEXT1', 'GNU General Public License');
define('_INSTALLERGNUURL2', 'http://www.gnu.org/philosophy/');
define('_INSTALLERGNULINKTEXT2', 'Philosophie des GNU Projektes');
define('_ACCEPTLICENCE', 'Lizenz akzeptieren');

// _requirements.htm
define('_INSTALLERPHP', 'PHP');
define('_INSTALLERPHPMBSTRINGOK', 'In der PHP-Version ist die "multibyte string" Funktion verfügbar.');
define('_INSTALLERPHPMBSTRINGNOTOK', 'In der PHP-Version ist die "multibyte string" Funktion nicht verfügbar - diese Funktion ist aber Voraussetzung für das PostNuke AJAX System.');
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
define('_INSTALLERDBTYPE', 'Datenbank');
define('_INSTALLERDBTABLETYPE', 'Tabellentyp (nur MySQL)');
define('_INSTALLERDBHOST', 'Datenbank-Server');
define('_INSTALLERDBUSERNAME', 'Name des Datenbank-Benutzers');
define('_INSTALLERDBPASSWORD', 'Kennwort des Datenbank-Benutzers');
define('_INSTALLERDBNAME', 'Name der Datenbank');
define('_INSTALLERTABLEPREFIX', 'Tabellenpräfix (für Table-Sharing)');
define('_INSTALLERCREATEDB', 'Datenbank anlegen<br />Hinweis: Falls kein Root-Zugriff auf die Datenbank besteht, können in aller Regel auch keine neuen Datenbanken angelegt werden - in diesem Fall nur die Datenbank angeben, in die das Skript die erforderlichen Tabellen anlegen soll.');
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
define('_INSTALLERUSERVALIDATECOMPAREFAILED', 'Im Benutzernamen sind Leerzeichen und Symbole nicht zuässig');

// _gotosite.htm
define('_INSTALLERCREDITS', 'Credits');
define('_INSTALLERTEAM', 'Das sind die Skripte und Personen, welche PostNuke ausmachen - wir freuen uns über jede Art von Feedback unserer Benutzer.<br />Wir können immer Hilfe gebrauchen - wer hier gelistet werden möchte, sollte uns einfach kontaktieren.');
define('_INSTALLERPROBLEMS', 'Die PostNuke Installation ist abgeschlossen. Falls Probleme oder Schwierigkeiten aufgetreten sind bitte eine Rückmeldung in den Support-Foren. Das install-Skript und der /install-Ordner sollten jetzt gelöscht werden.');
define('_INSTALLERGOTOSITE', 'Zur neu eingerichteten PostNuke-Seite');

// _selectmodule.htm
define('_INSTALLERSELECTMODULE', 'Modul für die Startseite wählen');
define('_INSTALLERMODULES', 'Module erweitern die Funktionalität einer Seite. Viele weitere Module sind im <a href="http://noc.postnuke.com/frs/?group_id=5">Value Addons Paket</a> verfügbar und sind zudem in einer losen <a href="http://community.postnuke.com/module-Database-main-tid-3.htm">Modulliste</a> durch Drittanbieter verfügbar. Bitte ein Standardmodul für die neue Seite wählen - dies kann später geändert werden.');
define('_INSTALLERPNMODULESSURL', 'http://community.postnuke.com/module-Database-main-tid-3.htm');
define('_INSTALLERPNMODULES', 'Modulveröffentlichungs-Datenbank');

// _selecttheme.htm
define('_INSTALLERSELECTHEME', 'Standard-Theme der Seite');
define('_INSTALLERTHEMES', 'Die Themes bestimmen das Aussehen der Webseite. In der PostNuke Grundinstallation sind nur einige Themes enthalten, weitere gibt es z.B. unter <a href="http://support.pn-cms.de">support.pn-cms.de</a>.<br />Bitte ein Theme für die Grundinstallation wählen, es kann später verändert werden.');
define('_INSTALLERPNTHEMESURL', 'http://community.postnuke.com/module-Database-main-tid-4.htm');
define('_INSTALLERPNTHEMES', 'Theme Release Database');

// modify_config.php
define('_INSTALLERMODIFYFILE_1','Fehler: kein Lesezugriff:');
define('_INSTALLERMODIFYFILE_2','Fehler: kein Schreibzugriff:');
define('_INSTALLERMODIFYFILE_3','0 Zeilen geändert, nicht gemacht');

// default blocks
define('_BLOCKS_00_b','Navigation');
define('_BLOCKS_00_c','a:5:{s:14:"displaymodules";i:0;s:5:"style";i:1;s:10:"stylesheet";s:0:"";s:8:"template";s:4:"menu";s:7:"content";s:199:"index.php|Startseite|Zur StartseiteLINESPLITuser.php|Profil|Individuelle ProfilseiteLINESPLITadmin.php|Administration|Administration der SeiteLINESPLIT{Users:logout}|Abmeldung|Abmeldung von der Seite";}');
define('_BLOCKS_01_b','Sprachen');
define('_BLOCKS_02_b','Admin-Nachrichten');
define('_USER_LOGINBLOCK_TITLE', 'Anmeldung');
define('_USER_ONLINEBLOCK_TITLE', 'Wer ist angemeldet');

?>