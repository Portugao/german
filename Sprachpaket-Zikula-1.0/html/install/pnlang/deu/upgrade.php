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

// upgrade76.php
define('_UPG_PROCEEDTOUPGRADE', 'Mit dem Upgrade fortfahren');
define('_UPG_TITLE', 'Zikula 1.0 Upgradeskript (ab Postnuke Version .764)');
define('_UPG_SUBTITLE', 'Zikula Upgradeskript (nur für die Postnuke Version .764)');
define('_UPG_DESCRIPTION', 'Dieses Skript aktualisiert Postnuke 0.764 auf die aktuellste Zikula 1.0.x Version. Upgrades von älteren Veröffentlichungen werden nicht unterstützt.');
define('_UPG_BACKUPNOTICE', 'Bitte unbedingt VOR dem Fortfahren eine Sicherung der Datenbanken anlegen!');
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
define('_UPG_FOOTERINFO', 'Bitte unbedingt die <a href="docs/upgrade.html">Upgradeanleitung</a> beachten. Weitere Informationen gibt es im <a href="http://code.zikula.org/community-german">Deutschen Dokumentationsprojekt</a> und im Forum unter <a href="http://support.pn-cms.de">support.pn-cms.de</a>');
define('_UPG_TIMEHINT', 'Achtung: Je nachdem wie umfangreich die Ausgansinstallation (z.B. Anzahl der Benutzer) ist, kann das Upgrade einige Zeit in Anspruch nehmen. Vorsichtshalber sollte ein Upgrade lokal mit einer Sicherung getestet werden.');
define('_UPG_STARTUPGRADE', 'Upgrade starten');
define('_UPG_USERSACTIVATED', 'existierende Benutzer wurden aktiviert');

// upgrade.php
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
