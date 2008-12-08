<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2008, Zikula German Translation Team
 * @link http://www.zikula.de
 * @version $Id$
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 */

// language defines for the upgrade process
define('_UPG_DONOTFORGETTOREMOVEFILES', 'Bitte nicht vergessen, die Dateien install.php, upgrade.php, upgrade10xto11x.php und den Ordner install aus dem Webspace zu l�schen. Diese sind nicht mehr erforderlich und k�nnten den Internetauftritt gef�hrden.');
define('_UPG_NEWFEATURESINTRO', 'Hier ist eine grobe �bersicht �ber die wichtigsten �nderungen in Zikula 1.1.0. Eine komplette Liste der �nderungen und Bugfixes befindet sich in <a href="http://code.zikula.org/core/report/13">dieser Liste</a>');
define('_UPG_THANKSFORUPGRADINGTO110', 'Vielen Dank f�r das Aktualisieren auf Zikula 1.1.0');
define('_UPG_CONTINUETO110NEWS', '<a href="upgrade10xto11x.php?action=learnmore">Hier klicken</a>, um mehr �ber die neuen Funktionen in dieser Version zu erfahren oder mit dem <a href="index.php">Besuch der Seite fortfahren</a>.');
define('_UPG_110FEATURE01', 'hinzugef�gt: System Init Hooks: Funktionen w�hrend des Systemstarts ausf�hren, um z.B. Code f�r spezielle Module wie <a title="scribite!: der WYSIWYG Editor f�r Zikula" href="http://code.zikula.org/scribite">scribite!</a> einzubinden - �nderungen im Theme sind nicht mehr notwendig (<a href="http://code.zikula.org/core/ticket/214">#214</a>).');
define('_UPG_110FEATURE02', 'hinzugef�gt: Das Plugin modulestylesheet wird mehr ben�tigt. Die Stylesheets eines Modules werden nun automatisch geladen, wenn eine Modulfunktion aufgerufen wird. Falls das Plugin noch in den Theme-Templates vorhanden ist, wird ein Hinweis f�r die Administratoren eingeblendet. (<a href="http://code.zikula.org/core/ticket/269">#269</a>).');
define('_UPG_110FEATURE03', 'hinzugef�gt: Freie Auswahl des Profil-Moduls: Auswahl zwischen Profile, <a href="http://code.zikula.org/myprofile">MyProfile</a> und sonstigen m�glichen Modulen, die f�r die Darstellung der Benutzerinformationen entwickelt wurden (<a href="http://code.zikula.org/core/ticket/249">#249</a>).');
define('_UPG_110FEATURE04', 'hinzugef�gt: Das Modul MailUsers wurde in das Modul Users integriert (<a href="http://code.zikula.org/core/ticket/69">#69</a>).');
define('_UPG_110FEATURE05', 'hinzugef�gt: Das Modul Members_List wurde in das Modul Profile integriert (<a href="http://code.zikula.org/core/ticket/68">#68</a>).');
define('_UPG_110FEATURE06', 'hinzugef�gt: Erweiterte Funktionalit�ten in den Modulen Pages, Feeds und AuthLDAP (<a href="http://code.zikula.org/core/ticket/94">#94</a>, <a href="http://code.zikula.org/core/ticket/100">#100</a>, <a href="http://code.zikula.org/core/ticket/103">#103</a>, <a href="http://code.zikula.org/core/ticket/108">#108</a>, <a href="http://code.zikula.org/core/ticket/120">#120</a>, <a href="http://code.zikula.org/core/ticket/222">#222</a>, <a href="http://code.zikula.org/core/ticket/263">#263</a>, <a href="http://code.zikula.org/core/ticket/264">#264</a>, <a href="http://code.zikula.org/core/ticket/337">#337</a>).');
define('_UPG_110FEATURE07', 'behoben: diverse Fehler in ObjectLib (<a href="http://code.zikula.org/core/ticket/215">#215</a>, <a href="http://code.zikula.org/core/ticket/291">#291</a>).');
define('_UPG_110FEATURE08', 'behoben: sonstige Fehler');

// upgrade76.php
define('_UPG_PROCEEDTOUPGRADE', 'Mit dem Upgrade fortfahren');
define('_UPG_TITLE', 'Zikula 1.0 Upgradeskript (ab Postnuke Version .764)');
define('_UPG_TITLE10X', 'Zikula v1.1.0 Upgradeskript (ab Zikula Version 1.0.x)'); 
define('_UPG_SUBTITLE', 'Zikula Upgradeskript (nur f�r die Postnuke Version .764)');
define('_UPG_SUBTITLE10X', 'Zikula Upgradeskript (nur f�r die Zikula Versionen 1.0.x)'); 
define('_UPG_DESCRIPTION', 'Dieses Skript aktualisiert Postnuke 0.764 auf die aktuelle Version Zikula Version. Upgrades von �lteren Ver�ffentlichungen werden nicht unterst�tzt.');
define('_UPG_DESCRIPTION10X', 'Dieses Skript aktualisiert Zikula 1.0.x auf Zikula v1.1.x. Upgrades von �lteren Ver�ffentlichungen werden nicht unterst�tzt.'); 
define('_UPG_BACKUPNOTICE', 'Unbedingt VOR dem Fortfahren eine Sicherung der Datenbanken anlegen');
define('_UPG_BACKUPHINT', 'Ein empfehlenswertes Tool zum Sicherung und R�cksicherung von Datenbanken ist <a href="http://mysqldumper.de/">MySQLDumper</a>. Die meisten Provider bieten zudem auch <a href="http://www.phpmyadmin.net">phpMyAdmin</a> an, was den gleichen Zweck erf�llt - jedoch mit weniger Komfort.'); 
define('_UPG_BACKINGUPDB', 'Sichere Benutzerdatenbank...');
define('_UPG_DONE', 'erledigt');
define('_UPG_USERDBSTRUCTUREUPGRADED', 'Datenbankstruktur -Users- aktualisiert');
define('_UPG_MODULEDBSTRUCTUREUPGRADED', 'Datenbankstruktur -Modules- aktualisiert');
define('_UPG_SUCCESSFUL', 'erfolgreich');
define('_UPG_FAILED', 'FEHLGESCHLAGEN!');
define('_UPG_BLOCKSTABLEUPGRADED', 'Blocktabelle aktualisiert');
define('_UPG_RESETTHEMETOEXTRALITE', 'Theme auf ExtraLite zur�ckgesetzt');
define('_UPG_DUDMIGRATED', 'Benutzerattribute migriert');
define('_UPG_SEARCHMODULEREINSTALLED', 'Suchmodul reinstalliert');
define('_UPG_FOOTERINFO', 'Bitte unbedingt die <a href="docs/upgrade.html">Upgradeanleitung</a> beachten. Weitere deutschsprachige Informationen gibt es auch unter <a href="http://support.zikula.de">support.zikula.de</a>');
define('_UPG_TIMEHINT', 'Achtung: Je nachdem wie viele Benutzer in der Installation vorhanden sind, kann das Upgrade einige Zeit in Anspruch nehmen. Vorsichtshalber sollte ein Upgrade mit einer lokalen Sicherung getestet werden.');
define('_UPG_STARTUPGRADE', 'Upgrade starten');
define('_UPG_USERSACTIVATED', 'existierende Benutzer wurden aktiviert');

// upgrade.php
define('_UPG_CONTINUETOYOURSITE', 'Zur aktualisierten Zikula-Seite'); 
define('_UPG_MODULELISTREGENERATED', 'Modulliste abgeglichen');
define('_UPG_INSTALLNEWMODULES', 'Neue Systemmodule installieren');
define('_UPG_STARTNEWMODULEINSTALL', 'Starte Installation der neuen Systemmodule.');
define('_UPG_INITIALISED', 'initialisiert');
define('_UPG_NOTINITIALISED', 'nicht initialisiert');
define('_UPG_NONEWMODSNEEDINIT', 'Keine neuen zu initialisierenden Systemmodule');
define('_UPG_INSTALLOFMODULESCOMPLETE', 'Installation der neuen Systemmodule fertiggestellt.');
define('_UPG_UPGRADEALLMODULES', 'Alle Module aktualisieren');
define('_UPG_STARTINGUPGRADE', 'Upgrade starten.');
define('_UPG_UPGRADED', 'aktualisiert');
define('_UPG_NOTUPGRADED', 'nicht aktualisiert');
define('_UPG_NOMODSNEEDUPGRADE', 'Keine zu aktualisierenden Module');
define('_UPG_FINISHEDUPGRADE', 'Upgrade abgeschlossen - ');
define('_UPG_GOTOADMINPANEL', 'Bitte Administration f�r <a href="%s">%s</a> aufrufen.');
define('_UPG_FORTHENEXTSTEPSPLEASELOGIN', 'F�r die n�chsten Aktualisierungsschritte ist eine Anmeldung erforderlich. Bitte die Zugangsdaten f�r das Administrationskonto eingeben.');
define('_UPG_USERNAME', 'Benutzername');
define('_UPG_PASSWORD', 'Kennwort');
define('_UPG_SUBMIT', 'Fortfahren');
define('_UPG_LOGINFAILED', 'Fehler bei der Anmeldung auf der Website');
