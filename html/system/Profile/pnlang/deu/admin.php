<?php
/**
 * PostNuke Application Framework
 *
 * @copyright (c) 2002, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: admin.php 19449 2006-07-24 08:32:28Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package PostNuke_System_Modules
 * @subpackage  PostNuke_Profile
 */

define('_PROFILEDUD','Dynamische Benutzerdaten');
define('_PROFILENEW','Dynamische Benutzerdaten anlegen');
define('_PROFILEADD','Dynamische Benutzerdaten hinzufügen');
define('_PROFILEVIEWDUD','Dynamische Benutzerdaten anzeigen');
define('_PROFILEEDIT', 'Dynamische Benutzerdaten editieren');
define('_PROFILEFIELDACTIVE','Aktiv');
define('_PROFILEFIELDLABEL','Feldname');
define('_PROFILEFIELDWEIGHT','Geichtung');
define('_PROFILEFIELDTYPE','Datentyp');
define('_PROFILEFIELDLENGTH','Länge');
define('_PROFILEFIELDVALIDATION','Validierungs-Regel');
define('_PROFILEOPTIONS','Optionen');
define('_PROFILEITEMSPERPAGE','Einträge pro Seite');
define('_PROFILEITEMSPERROW','Einträge pro Reihe (Icons)');
define('_PROFILEUPDATE','Dynamische Benutzerdaten aktualisieren');
define('_PROFILECREATED','Dynamische Benutzerdaten angelegt');
define('_PROFILENOSUCHITEM', 'Kein Eintrag in den Dynamischen Benutzerdaten');
define('_PROFILEADDINSTRUCTIONS', 'Beispiel: _MYINT - entsprechendes Sprachdefine in config/languages/(Sprache)/global.php anlegen');
define('_PROFILESTRINGINSTRUCTIONS', 'Bei Strings: Längenbereich (1,254)');
define('_DYNAMICUSETDATANOSUCHITEM', 'Kein Eintrag in den Dynamischen Benutzerdaten');
define('_PROFILEUPDATEFAILED', 'Dynamische Benutzerdaten konnten nicht aktualisiert werden');
define('_PROFILECREATEFAILED', 'Dynamische Benutzerdaten konnten nicht angelegt werden');
define('_PROFILEDELETEFAILED', 'Dynamische Benutzerdaten konnten nicht gelöscht werden');
define('_PROFILEUPDATED', 'Dynamische Benutzerdaten aktualisiert');
define('_PROFILEDELETED', 'Dynamische Benutzerdaten gelöscht');
define('_PROFILEDELETE', 'DUD Werte löschen');
define('_PROFILECONFIRMDELETE', 'DUD Löschung bestätigen');
define('_PROFILECANCELDELETE', 'DUD Löschung abbrechen');
define('_FIELD_DEACTIVATE', 'deaktivieren');
define('_FIELD_ACTIVATE', 'aktivieren');
define('_FIELD_REQUIRED', 'Pflichtfeld');
if (!defined('UDCONST_MANDATORY')) {
    define('UDCONST_MANDATORY',-1);
}
if (!defined('UDCONST_CORE')) {
    define('UDCONST_CORE', 0);
}
if (!defined('UDCONST_STRING')) {
    define('UDCONST_STRING', 1);
}
if (!defined('UDCONST_TEXT')) {
    define('UDCONST_TEXT', 2);
}
if (!defined('UDCONST_FLOAT')) {
    define('UDCONST_FLOAT', 3);
}
if (!defined('UDCONST_INTEGER')) {
    define('UDCONST_INTEGER', 4);
}
define('_UDT_CORE','Core');
define('_UDT_COREREQUIRED','Core-Pflichtfeld');
define('_UDT_FLOAT','Float');
define('_UDT_FLOATREQUIRED','Float-Pflichtfeld');
define('_UDT_INTEGER','Integer');
define('_UDT_INTEGERREQUIRED','Integer-Pflichtfeld');
define('_UDT_MANDATORY','Core-Pflichtfeld');
define('_UDT_STRING','String');
define('_UDT_STRINGREQUIRED','String-Pflichtfeld');
define('_UDT_TEXT','Text');
define('_UDT_TEXTREQUIRED','Text-Pflichtfeld');
define('_FIELD_NA','nicht verfügbar');
define('_PROFILEDISPLAYGRAPHICS', 'Icons auf der Profilseite anzeigen');
define('_PROFILERREQUIRED', 'Pflichtfeld');
define('_PROFILEFORADMINONLY', 'nur für Adminstratoren');
define('_PROFILEVIEWABLEBY', 'Leseberechtiung für');
define('_PROFILEVIEWBYOPTIONADM', 'nur Admins');
define('_PROFILEVIEWBYOPTIONUSR', 'nur registrierte Benutzer');
define('_PROFILEVIEWBYOPTIONALL', 'Jeder');
define('_PROFILEDISPLAYTYPE', 'Display Typ');
define('_PROFILELISTOPTIONS', 'Inhalt: <br /> Option mit @@ beginnen');
define('_PROFILENOTE', 'Hinweis');
define('_PROFILEVALIDATION', 'Validierung');
define('_PROFILEFIELDTEXT', 'TEXT');
define('_PROFILEFIELDTEXTAREA', 'TEXTAREA');
define('_PROFILEFIELDCHECKBOX', 'CHECKBOX');
define('_PROFILEFIELDRADIO', 'RADIO');
define('_PROFILEFIELDSELECT', 'SELECT');
define('_PROFILEFIELDDATE', 'CALENDAR');
define('_PROFILEFIELDEXTDATE', 'DATE (Extended)');
define('_PROFILEFIELDCOMBOTEXT', 'COMBO (Text)');
define('_PROFILEFIELDCOMBONOTE', 'Combos : id1,item1;id2,item2; - Feldtrennung mit ";" - ID und Label mit ","');
define('_PROFILEDRAGANDDROPHINT', 'Anordnung via Drag and Drop, die neue Reihenfolge wird sofort gültig.');
?>