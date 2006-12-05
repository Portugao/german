<?php
/**
 * PostNuke Application Framework
 * @copyright (c) 2002, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: admin.php 19260 2006-06-12 13:08:15Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package PostNuke_System_Modules
 * @subpackage  PostNuke_Permissions
*/

define('_PERM_ERRORUPDATINGCONFIG', 'Fehler beim Aktualisieren der Konfiguration: unbekannte ID');
define('_PERM_PERMISSIONLOCKED', 'Dieses Zugriffsrecht ist fixiert, erst in der Konfiguration freigeben');
define('_PERM_ADMINPERMISSIONID', 'ID der generischen Admin-Berechtigung');
define('_PERM_LOCKADMINPERMISSION', 'Generische Admin-Berechtigung fixieren');
define('_PERM_LOCKADMINLOCKEDHINT','Die in der Konfiguration definierte generische Admin-Berechtigung (in der Liste hervorgehoben) ist <strong>fixiert</strong>, kann also nicht editiert, verschoben oder gelöscht werden. Falls notwendig die Freigabe in der Konfiguration erteilen.');
define('_PERM_LOCKADMINUNLOCKEDHINT','Die in der Konfiguration definierte generische Admin-Berechtigung (in der Liste hervorgehoben) ist <strong>nicht fixiert</strong>, kann also editiert, verschoben oder gelöscht werden. In der Konfiguration sollte die Fixierung aktiviert werden um Konfigurationsprobleme zu vermeiden.');
define('_PERM_DRAGANDDROPHINT','Die Zugriffsrechte können via "Drag and Drop" sortiert werden. Die Reihenfolge ist sofort gültig.');
define('_PERM_YOUCANNOTDELETETHEMAINADMINPERMISSION', 'Achtung: Die generische Admin-Berechtigung kann nicht gelöscht werden');
define('_PERM_UPDATINGPERMISSION', '...aktualisiere Zugriffsrecht...');
define('_PERM_DELETINGPERMISSION', '...lösche Zugriffsrecht...');
define('_PERM_TESTINGPERMISSION', '...teste Zugriffsrecht...');

define('_PERM_APPEND', 'Zugriffsrecht hinzufügen');
define('_PERM_CHECKRESULT', 'Ergebnis der Prüfung');
define('_PERM_GRANTED', 'Zugriffsrecht');
define('_PERM_NOTGRANTED', 'kein Zugriffsrecht');
define('_PERM_UNKNOWNUSER', 'unbekannter Benutzer');
define('_PERM_CHECKPERMISSIONS', 'Benutzer-Berechtigung prüfen');
define('_PERM_CHECKCOMPONENT', 'Komponente');
define('_PERM_CHECKINSTANCE', 'Instanz');
define('_PERM_CHECKUSER', 'Benutzer');
define('_PERM_CHECKLEVEL', 'Zugriffsrecht');
define('_PERM_CHECK', 'prüfen');
define('_PERMISSIONS','Zugriffsrechte');
define('_ALLGROUPS','Alle Gruppen');
define('_ALLREALMS','Alle Realms'); // Realms defines until they get their own home
define('_ALLUSERS','Alle Benutzer');
define('_REALM','Realm');
define('_INSTANCE','Instanz');
define('_COMPONENT','Komponente');
define('_GROUPPERMS','Gruppe');
define('_VIEWGROUPPERMS','Zugriffsrechte');
define('_MODIFYPERM','modifizieren');
define('_MODIFYGROUPPERM','Zugriffsrechte modifizieren');
define('_NEWPERM',' hinzufügen ');
define('_NEWGROUPPERM','Neues Zugriffsrecht');
define('_PERMLEVEL','Zugriffsrecht');
define('_PERMOPS','Operations');
define('_SEQUENCE','Seq.');
define('_UNREGISTEREDGROUP','Gäste');
define('_UNREGISTEREDUSER','unregistrierte (Benutzer)');
define('_PERMISSIONINFO','Information');
define('_REGISTEREDCOMP','Komponente');
define('_INSTANCETEMP','Instanz Vorlage');

// MMaes: Removed some hard-coded text
define('_PERM_INC','Zugriffsrecht höher platziert');
define('_PERM_DEC','Zugriffsrecht niedriger platziert');
define('_PERM_UPD','Zugriffsrecht aktualisiert');
define('_PERM_CREATED','Zugriffsrecht angelegt');
define('_PERM_DEL','Zugriffsrecht gelöscht');
define('_PERM_DECINCERR_NOID','Fehler! Keine ID für Zugriffsrecht: ');
define('_PERM_DECERR_NOSWAP','Kein Zugriffsrecht direkt unterhalb dieser Berechtigung');
define('_PERM_INCERR_NOSWAP','Kein Zugriffsrecht direkt oberhalb dieser Berechtigung');
// MMaes: Direct Insert capability
// define('_PERM_THINS','Ins.');
define('_PERMINSBEFORE_ALTTXT','Zugriffsrecht oberhalb einfügen');
define('_PERM_INSERR','Fehler! Anordnung der Zugriffsrechte konnte nicht akutalisiert werden');
define('_PERM_INSNOTIFY','Zugriffsrecht eingefügt an Position ');
// MMaes: Only show permissions applying to a group
define('_SEQ_ADJUST','Bewegen');
define('_PERM_VWSHOWONLY','Nur Zugriffsrechte anzeigen für: ');
define('_PERM_VWFILTER','Filter');
define('_PERM_WARN_FILTERACTIVE','<strong>- TEIL-ANSICHT -</strong>');
define('_PERM_PARTLY','Zugriffsliste wirde nicht vollständig anzeigt, Filter aktiv');
define('_PERM_SHOWING','Gruppe: ');
define('_PERM_DECINCERR_NOSWAPPART','Fehler! Sorry! In der Teilansicht können nur sichtbare Zugriffsrechte beeinflusst werden. Bitte den Filter deaktivieren');
// MMaes: ListEdit-function, editing in the mainview
define('_PERM_LISTNONEFOUND','Fehler! Keine solches Zugriffsrecht vorhanden, ggfs. zuerst anlegen');
define('_PERM_COMP_INPUTERR',' [Ungültige Angabe in der Komponente!] ');
define('_PERM_INST_INPUTERR',' [Ungültige Angabe in der Instanz!] ');
// MMaes: Module-settings
define('_PERM_ENABLEFILTER','Filter in der Ansicht aktivieren');
define('_PERM_DISPLAYWARNING','Infonmeldung bei aktivem Filter anzeigen');
define('_PERM_ROWHEIGHTVIEW','Zeilenhöhe in Ansicht (min, in Pixel)');
define('_PERM_ROWHEIGHTEDIT','Zeilenhöhe in Beabeitung (min, in Pixel)');
define('_PERMISSIONSDELETE', 'Zugriffsrecht löschen');
define('_PERMISSIONSCONFIRMDELETE', 'Löschen des Zugriffsrechtes bestätigen');

?>