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

// general 
define('_PROFILE_DUD','Dynamische Benutzerdaten');
define('_MODIFYACCOUNTPANELCONFIG', 'Konfiguration der dynamische Benutzerdaten');
define('_NEWPANELCONTROL', 'Dynamische Benutzereigenschaft erstellen');
define('_ACCOUNTPANELCONTROLSLISTVIEW', 'Liste der dynamischen Benutzerdaten');
define('_DISPLAYSETTINGS', 'Anzeige');

// singular
define('_PROFILE_PROPERTIES', 'Eigenschaften');
define('_PROFILE_PROPERTY', 'Eigenschaft');
define('_PROFILE_PROPERTY_LC', 'Eigenschaft');
define('_PROFILE_EXISTINGPROPERTY', 'Bestehende Eigenschaft');
define('_PROFILE_NEWPROPERTY', 'Neue Eigenschaft');

// view template
define('_PROFILE_DRAGANDDROPHINT', 'Anordnung via Drag and Drop, die neue Reihenfolge wird sofort gültig.');
define('_PROFILE_NA','nicht verfügbar');

// modify config template
define('_PROFILE_DISPLAYGRAPHICS', 'Icons auf der Profilseite anzeigen');
define('_PROFILE_ITEMSPERROW','Einträge pro Reihe (Icons)');

// new/modify templates
define('_PROFILE_ADDINSTRUCTIONS', 'Beispiel: _MYINT - entsprechendes Sprachdefine in config/languages/(Sprache)/global.php anlegen');
define('_PROFILE_DISPLAYTYPE', 'Display Typ');
define('_PROFILE_FIELDCOMBONOTE', 'Combos : id1,item1;id2,item2; - Feldtrennung mit ";" - ID und Label mit ","');
define('_PROFILE_FIELDLABEL_FLC','Feldname');
define('_PROFILE_FIELDLABEL','Feldname');
define('_PROFILE_FIELDLENGTH','Länge');
define('_PROFILE_FIELDTYPE_FLC','Datentyp');
define('_PROFILE_FIELDTYPE','Datentyp');
define('_PROFILE_FIELDVALIDATION','Validierungs-Regel');
define('_PROFILE_LISTOPTIONS', 'Inhalt: <br /> Option mit @@ beginnen');
define('_PROFILE_STRINGINSTRUCTIONS', 'Bei Strings: Längenbereich (1,254)');
define('_PROFILE_VALIDATION', 'Validierung');
define('_PROFILE_VIEWABLEBY', 'Leseberechtiung für');

// error/status messages
define('_PROFILE_ACTIVATIONFAILED', 'Fehler! Aktivierung fehlgeschlagen');
define('_PROFILE_DEACTIVATIONFAILED', 'Fehler! Deaktivierung fehlgeschlagen');
define('_PROFILE_EMPTYLABEL', 'Fehler! Das Feld muss einen Namen haben, Beipiel: _MYINT');
define('_PROFILE_LABELEXISTS', 'Fehler! Dieser Feldname existiert bereits');

// viewable by drop down
define('_PROFILE_VIEWBYOPTIONADM', 'nur Admins');
define('_PROFILE_VIEWBYOPTIONUSR', 'nur registrierte Benutzer');
define('_PROFILE_VIEWBYOPTIONALL', 'Jeder');

// field types
define('_PROFILE_CORE','Core');
define('_PROFILE_COREREQUIRED','Core-Pflichtfeld');
define('_PROFILE_FLOAT','Float');
define('_PROFILE_FLOATREQUIRED','Float-Pflichtfeld');
define('_PROFILE_INTEGER','Integer');
define('_PROFILE_INTEGERREQUIRED','Integer-Pflichtfeld');
define('_PROFILE_MANDATORY','Core-Pflichtfeld');
define('_PROFILE_STRING','String');
define('_PROFILE_STRINGREQUIRED','String-Pflichtfeld');
define('_PROFILE_TEXT','Text');
define('_PROFILE_TEXTREQUIRED','Text-Pflichtfeld');

// field control types
define('_PROFILE_FIELDTEXT', 'TEXT');
define('_PROFILE_FIELDTEXTAREA', 'TEXTAREA');
define('_PROFILE_FIELDCHECKBOX', 'CHECKBOX');
define('_PROFILE_FIELDRADIO', 'RADIO');
define('_PROFILE_FIELDSELECT', 'SELECT');
define('_PROFILE_FIELDDATE', 'CALENDAR');
define('_PROFILE_FIELDEXTDATE', 'DATE (Extended)');
define('_PROFILE_FIELDCOMBOTEXT', 'COMBO (Text)');

?>