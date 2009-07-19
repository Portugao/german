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
define('_UPG_DONOTFORGETTOREMOVEFILES', 'Bitte nicht vergessen die Dateien install.php, upgrade.php, upgrade10xto11x.php und das Verzeichnis install aus dem Webspace zu löschen. Diese sind nicht mehr erforderlich und könnten den Internetauftritt gefährden.');
define('_UPG_NEWFEATURESINTRO', 'Hier ist eine grobe Übersicht über die wichtigsten Änderungen in Zikula. Eine komplette Liste der Änderungen und Bugfixes befindet sich in <a href="http://code.zikula.org/core/roadmap?show=all">dieser Liste</a>');
define('_UPG_THANKSFORUPGRADINGTO110', 'Vielen Dank für das Aktualisieren der Zikula-Installation.');
define('_UPG_CONTINUETO110NEWS', '<a href="upgrade10xto11x.php?action=learnmore&lang=deu">Hier klicken</a>, um mehr über die neuen Funktionen in dieser Version zu erfahren oder mit dem <a href="admin.php">Besuch der Seite fortfahren</a>.');
define('_UPG_110FEATURE01', 'Neu: System Init Hooks: Funktionen können nun automatisch während des Systemstarts ausgeführt werden, um z.B. Code für spezielle Module wie <a title="scribite!: der WYSIWYG Editor für Zikula" href="http://code.zikula.org/scribite">scribite!</a> einzubinden. Änderungen im Theme, z.B. über Smarty-Plugins, sind nicht mehr notwendig (<a href="http://code.zikula.org/core/ticket/214">#214</a>).');
define('_UPG_110FEATURE02', 'Neu: Das Plugin modulestylesheet wird mehr benötigt. Die Stylesheets eines Modules werden nun automatisch geladen, wenn eine Modulfunktion aufgerufen wird. Falls das Plugin noch in den Theme-Templates vorhanden ist, wird ein entsprechender Hinweis für die Administratoren eingeblendet. (<a href="http://code.zikula.org/core/ticket/269">#269</a>).');
define('_UPG_110FEATURE03', 'Neu: Freie Auswahl des Profil-Moduls: Auswahl zwischen Profile, <a href="http://code.zikula.org/myprofile">MyProfile</a> und sonstigen möglichen Modulen, die für die Darstellung der Benutzerinformationen entwickelt wurden (<a href="http://code.zikula.org/core/ticket/249">#249</a>).');
define('_UPG_110FEATURE04', 'Neu: Das Modul MailUsers wurde in das Modul Users integriert (<a href="http://code.zikula.org/core/ticket/69">#69</a>).');
define('_UPG_110FEATURE05', 'Neu: Das Modul Members_List wurde in das Modul Profile integriert (<a href="http://code.zikula.org/core/ticket/68">#68</a>).');
define('_UPG_110FEATURE06', 'Neu: Erweiterte Funktionalitäten in den Modulen Pages, Feeds und AuthLDAP (<a href="http://code.zikula.org/core/ticket/94">#94</a>, <a href="http://code.zikula.org/core/ticket/100">#100</a>, <a href="http://code.zikula.org/core/ticket/103">#103</a>, <a href="http://code.zikula.org/core/ticket/108">#108</a>, <a href="http://code.zikula.org/core/ticket/120">#120</a>, <a href="http://code.zikula.org/core/ticket/222">#222</a>, <a href="http://code.zikula.org/core/ticket/263">#263</a>, <a href="http://code.zikula.org/core/ticket/264">#264</a>, <a href="http://code.zikula.org/core/ticket/337">#337</a>).');
define('_UPG_110FEATURE07', 'Änderungen: diverse Fehler in ObjectLib (<a href="http://code.zikula.org/core/ticket/215">#215</a>, <a href="http://code.zikula.org/core/ticket/291">#291</a>).');
define('_UPG_110FEATURE08', 'Änderungen: sonstige Fehler');

// upgrade76.php
define('_UPG_PROCEEDTOUPGRADE', 'Mit dem Upgrade fortfahren');
define('_UPG_TITLE', 'Zikula 1.0 Upgradeskript (ab Postnuke Version .764)');
define('_UPG_TITLE10X', 'Zikula v1.1 Upgradeskript (für Zikula-Serie 1.0)'); 
define('_UPG_SUBTITLE', 'Zikula Migrationsskript (nur für die Postnuke Version .764)');
define('_UPG_SUBTITLE10X', 'Zikula Upgradeskript (nur für die Zikula-Serie 1.0)'); 
define('_UPG_DESCRIPTION', 'Dieses Skript aktualisiert Postnuke 0.764 auf die aktuellste Version der Zikula 1.1-Serie. Upgrades von älteren Veröffentlichungen werden nicht unterstützt.');
define('_UPG_DESCRIPTION10X', 'Dieses Skript aktualisiert Zikula 1.0 auf Zikula v1.1. Upgrades von älteren Veröffentlichungen werden nicht unterstützt.'); 
define('_UPG_BACKUPNOTICE', 'Bitte unbedingt VOR dem Fortfahren eine Sicherung der Datenbanken anlegen!');
define('_UPG_BACKUPHINT', 'Ein empfehlenswertes Tool zum Sicherung und Rücksicherung von Datenbanken ist <a href="http://mysqldumper.de/">MySQLDumper</a>. Die meisten Provider bieten zudem auch <a href="http://www.phpmyadmin.net">phpMyAdmin</a> an, was den gleichen Zweck erfüllt - jedoch mit weniger Komfort.'); 
define('_UPG_BACKINGUPDB', 'Sichere Benutzerdatenbank...');
define('_UPG_DONE', 'erledigt');
define('_UPG_USERDBSTRUCTUREUPGRADED', 'Datenbankstruktur -Users- aktualisiert');
define('_UPG_MODULEDBSTRUCTUREUPGRADED', 'Datenbankstruktur -Modules- aktualisiert');
define('_UPG_SUCCESSFUL', 'erfolgreich');
define('_UPG_FAILED', 'FEHLGESCHLAGEN!');
define('_UPG_BLOCKSTABLEUPGRADED', 'Blocktabelle aktualisiert');
define('_UPG_RESETTHEMETOEXTRALITE', 'Theme auf ExtraLite zurückgesetzt');
define('_UPG_DUDMIGRATED', 'Benutzerattribute migriert');
define('_UPG_SEARCHMODULEREINSTALLED', 'Suchmodul reinstalliert');
define('_UPG_FOOTERINFO', 'Bitte unbedingt die <a href="docs/upgrade_deu.html">Upgradeanleitung</a> beachten. Weitere Informationen gibt es im <a href="http://code.zikula.org/community-german">Deutschen Dokumentationsprojekt</a> und im Forum unter <a href="http://support.zikula.de">support.zikula.de</a>');
define('_UPG_TIMEHINT', 'Achtung: Je nachdem wie umfangreich die Ausgansinstallation (z.B. Anzahl der Benutzer) ist, kann das Upgrade einige Zeit in Anspruch nehmen. Vorsichtshalber sollte ein Upgrade lokal mit einer Sicherung getestet werden.');
define('_UPG_STARTUPGRADE', 'Upgrade starten');
define('_UPG_USERSACTIVATED', 'existierende Benutzer wurden aktiviert');
define('_UPG_MEMHINT', 'Das Speicherlimit kann nicht verändert werden (64 MB). Es könnten Probleme beim Upgrade größerer Sites auftreten.');

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
define('_UPG_GOTOADMINPANEL', 'Bitte Administration für <a href="%s">%s</a> aufrufen.');
define('_UPG_FORTHENEXTSTEPSPLEASELOGIN', 'Für die nächsten Aktualisierungsschritte ist eine Anmeldung erforderlich. Bitte die Zugangsdaten für das Administrationskonto eingeben.');
define('_UPG_USERNAME', 'Benutzername');
define('_UPG_PASSWORD', 'Kennwort');
define('_UPG_SUBMIT', 'Fortfahren');
define('_UPG_LOGINFAILED', 'Fehler bei der Anmeldung auf der Website');
