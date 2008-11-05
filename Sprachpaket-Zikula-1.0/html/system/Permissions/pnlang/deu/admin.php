<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2008, Zikula German Translation Team
 * @link http://www.zikula.de
 * @version $Id$
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 */

// general
define('_PERMISSIONS','Zugriffsrechte');
define('_PERMISSIONS_COMPONENT','Komponente');
define('_PERMISSIONS_INSTANCE','Instanz');

// singular/plural
define('_PERMISSIONS_PERMISSION', 'Zugriffsrecht');
define('_PERMISSIONS_PERMISSION_LC', 'Zugriffsrecht');
define('_PERMISSIONS_PERMISSIONS', 'Zugriffsrechte');

// links
define('_PERMISSIONS_MODIFYPERMISSION', 'Zugriffsrecht bearbeiten');
define('_PERMISSIONS_CREATEPERMISSION', 'Zugriffsrecht anlegen');
define('_PERMISSIONS_VIEWPERMISSIONS', 'Zugriffsrechte anzeigen');
define('_PERMISSIONS_DELETEPERMISSION', 'Zugriffsrecht löschen');
define('_PERMISSIONS_CONFIRMDELETE', 'Soll das Zugriffsrecht wirklich gelöscht werden?');

// view template
define('_PERMISSIONS_APPEND', 'Zugriffsrecht hinzufügen');
define('_PERMISSIONS_BEFOREALTTEXT','Zugriffsrecht oberhalb einfügen');
define('_PERMISSIONS_CHECK', 'prüfen');
define('_PERMISSIONS_CHECKCOMPONENT', 'Komponente');
define('_PERMISSIONS_CHECKINSTANCE', 'Instanz');
define('_PERMISSIONS_CHECKLEVEL', 'Zugriffsrecht');
define('_PERMISSIONS_CHECKPERMISSIONS', 'Benutzer-Berechtigung prüfen');
define('_PERMISSIONS_CHECKRESULT', 'Ergebnis der Prüfung');
define('_PERMISSIONS_DRAGANDDROPHINT','Die Zugriffsrechte können via "Drag and Drop" sortiert werden. Die Reihenfolge ist sofort gültig.');
define('_PERMISSIONS_GROUPPERMS','Gruppe');
define('_PERMISSIONS_LOCKADMINLOCKEDHINT','Die in der Konfiguration definierte generische Admin-Berechtigung (in der Liste hervorgehoben) ist <strong>fixiert</strong>, kann also nicht editiert, verschoben oder gelöscht werden. Falls notwendig die Freigabe in der Konfiguration erteilen.');
define('_PERMISSIONS_LOCKADMINUNLOCKEDHINT','Die in der Konfiguration definierte generische Admin-Berechtigung (in der Liste hervorgehoben) ist <strong>nicht fixiert</strong>, kann also editiert, verschoben oder gelöscht werden. In der Konfiguration sollte die Fixierung aktiviert werden um Konfigurationsprobleme zu vermeiden.');
define('_PERMISSIONS_PERMISSIONLOCKED', 'Dieses Zugriffsrecht ist fixiert, erst in der Konfiguration freigeben');
define('_PERMISSIONS_PERMLEVEL','Zugriffsrecht');
define('_PERMISSIONS_VWFILTER','Filter');

// filter drop down
define('_PERMISSIONS_ALLGROUPS','Alle Gruppen');
define('_PERMISSIONS_UNREGISTEREDGROUP','Gäste');

// view registered permission schemas
define('_PERMISSIONS_INFO','Information');
define('_PERMISSIONS_REGISTEREDCOMP','Komponente');
define('_PERMISSIONS_INSTANCETEMP','Instanz Vorlage');

// listedit template
define('_PERMISSIONS_SEQUENCE','Seq.');

// modify config template
define('_PERMISSIONS_ADMINPERMISSIONID', 'ID der generischen Admin-Berechtigung');
define('_PERMISSIONS_DISPLAYWARNING','Infomeldung bei aktivem Filter anzeigen');
define('_PERMISSIONS_ENABLEFILTER','Filter in der Ansicht aktivieren');
define('_PERMISSIONS_LOCKADMINPERMISSION', 'Generische Admin-Berechtigung fixieren');
define('_PERMISSIONS_ROWHEIGHTVIEW','Zeilenhöhe in Ansicht (min, in Pixel)');
define('_PERMISSIONS_ROWHEIGHTEDIT','Zeilenhöhe in Beabeitung (min, in Pixel)');

// siernbar template
define('_PERMISSIONS_PARTLY','TEILANSICHT :: aktiver Filter');
define('_PERMISSIONS_SHOWING','Gruppe: ');

// status/error messages
define('_PERMISSIONS_COMP_INPUTERR',' [Ungültige Angabe in der Komponente!] ');
define('_PERMISSIONS_DEC','Zugriffsrecht niedriger platziert');
define('_PERMISSIONS_DECERR_NOSWAP','Kein Zugriffsrecht direkt unterhalb dieser Berechtigung');
define('_PERMISSIONS_DECINCERR_NOID','Fehler! Keine ID für Zugriffsrecht: ');
define('_PERMISSIONS_DECINCERR_NOSWAPPART','Fehler! Sorry! In der Teilansicht können nur sichtbare Zugriffsrechte beeinflusst werden. Bitte den Filter deaktivieren');
define('_PERMISSIONS_DELETINGPERMISSION', '...lösche Zugriffsrecht...');
define('_PERMISSIONS_ERRORUPDATINGCONFIG', 'Fehler beim Aktualisieren der Konfiguration: unbekannte ID');
define('_PERMISSIONS_WARN_FILTERACTIVE','<strong>- TEIL-ANSICHT -</strong>');
define('_PERMISSIONS_GRANTED', 'Zugriffsrecht');
define('_PERMISSIONS_INC','Zugriffsrecht höher platziert');
define('_PERMISSIONS_INCERR_NOSWAP','Kein Zugriffsrecht direkt oberhalb dieser Berechtigung');
define('_PERMISSIONS_INSERR','Fehler! Anordnung der Zugriffsrechte konnte nicht akutalisiert werden');
define('_PERMISSIONS_INST_INPUTERR',' [Ungültige Angabe in der Instanz!] ');
define('_PERMISSIONS_LISTNONEFOUND','Fehler! Keine solches Zugriffsrecht vorhanden, ggfs. zuerst anlegen');
define('_PERMISSIONS_NOTGRANTED', 'kein Zugriffsrecht');
define('_PERMISSIONS_TESTINGPERMISSION', '...teste Zugriffsrecht...');
define('_PERMISSIONS_UNKNOWNUSER', 'unbekannter Benutzer');
define('_PERMISSIONS_UPDATINGPERMISSION', '...aktualisiere Zugriffsrecht...');
define('_PERMISSIONS_VWSHOWONLY','Nur Zugriffsrechte anzeigen für: ');
define('_PERMISSIONS_YOUCANNOTDELETETHEMAINADMINPERMISSION', 'Achtung: Die generische Admin-Berechtigung kann nicht gelöscht werden');

