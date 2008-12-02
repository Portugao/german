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

define('_UPG_NEWFEATURESINTRO', 'Here is a rough overview about the major in Zikula 1.1.0. For a comprehensive list of changes and bugfixes see <a href="http://code.zikula.org/core/report/13">this list</a>');
define('_UPG_THANKSFORUPGRADINGTO110', 'Thank you for upgrading to Zikula 1.1.0');
define('_UPG_CONTINUETO110NEWS', '<a href="upgrade10x.php?action=learnmore">Click here</a> to learn more about the new features in this version or <a href="index.php">continue to your site</a>.');
define('_UPG_110FEATURE01', 'added: System init hooks: execute functionality when the system starts up, eg. to include code needed to run special modules like <a title="scribite!: the WYSIWYG editor for Zikula" href="http://code.zikula.org/scribite">scribite!</a> - no theme changes needed any longer (<a href="http://code.zikula.org/core/ticket/214">#214</a>).');
define('_UPG_110FEATURE02', 'added: The modulestylesheet plugin is not longer needed, stylesheets are loaded automatically when a module function is called. If you use this plugin in your theme template, you will see a special notice which is shown to administrators only (<a href="http://code.zikula.org/core/ticket/269">#269</a>).');
define('_UPG_110FEATURE03', 'added: Select your profile module: Choose between Profile, <a href="http://code.zikula.org/myprofile">myprofile</a> and any other possible module which identifies itself as being able to show user information (<a href="http://code.zikula.org/core/ticket/249">#249</a>).');
define('_UPG_110FEATURE04', 'added: MailUsers module has been integrated into Users module (<a href="http://code.zikula.org/core/ticket/69">#69</a>).');
define('_UPG_110FEATURE05', 'added: Members_List module has been integrated into the Profile module (<a href="http://code.zikula.org/core/ticket/68">#68</a>).');
define('_UPG_110FEATURE06', 'added: Enhanced functionality of Pages, Feeds and AuthLDAP (<a href="http://code.zikula.org/core/ticket/94">#94</a>, <a href="http://code.zikula.org/core/ticket/100">#100</a>, <a href="http://code.zikula.org/core/ticket/103">#103</a>, <a href="http://code.zikula.org/core/ticket/108">#108</a>, <a href="http://code.zikula.org/core/ticket/120">#120</a>, <a href="http://code.zikula.org/core/ticket/222">#222</a>, <a href="http://code.zikula.org/core/ticket/263">#263</a>, <a href="http://code.zikula.org/core/ticket/264">#264</a>, <a href="http://code.zikula.org/core/ticket/337">#337</a>).');
define('_UPG_110FEATURE07', 'fixed: several bugs in ObjectLib (<a href="http://code.zikula.org/core/ticket/215">#215</a>, <a href="http://code.zikula.org/core/ticket/291">#291</a>).');
define('_UPG_110FEATURE08', 'fixed: several other bugs');

// upgrade76.php
define('_UPG_PROCEEDTOUPGRADE', 'Mit dem Upgrade fortfahren');
define('_UPG_TITLE', 'Zikula 1.0 Upgradeskript (ab Postnuke Version .764)');
define('_UPG_TITLE10X', 'Zikula v1.1.0 Upgradeskript (ab Zikula Version 1.0.x)'); 
define('_UPG_SUBTITLE', 'Zikula Upgradeskript (nur für die Postnuke Version .764)');
define('_UPG_SUBTITLE10X', 'Zikula Upgradeskript (nur für die Zikula Versionen 1.0.x)'); 
define('_UPG_DESCRIPTION', 'Dieses Skript aktualisiert Postnuke 0.764 auf die aktuelle Version Zikula Version. Upgrades von älteren Veröffentlichungen werden nicht unterstützt.');
define('_UPG_DESCRIPTION10X', 'Dieses Skript aktualisiert Zikula 1.0.x auf Zikula v1.1.0. Upgrades von älteren Veröffentlichungen werden nicht unterstützt.'); 
define('_UPG_BACKUPNOTICE', 'Unbedingt VOR dem Fortfahren eine Sicherung der Datenbanken anlegen');
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
define('_UPG_FOOTERINFO', 'Bitte unbedingt die <a href="docs/upgrade.html">Upgradeanleitung</a> beachten. Weitere deutschsprachige Informationen gibt es auch unter <a href="http://support.zikula.de">support.zikula.de</a>');
define('_UPG_TIMEHINT', 'Achtung: Je nachdem wie viele Benutzer in der Installation vorhanden sind, kann das Upgrade einige Zeit in Anspruch nehmen. Vorsichtshalber sollte ein Upgrade mit einer lokalen Sicherung getestet werden.');
define('_UPG_STARTUPGRADE', 'Upgrade starten');
define('_UPG_USERSACTIVATED', 'existierende Benutzer wurden aktiviert');

// upgrade.php
define('_UPG_CONTINUETOYOURSITE', 'Continue to your site'); 
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
