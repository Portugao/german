<?php
/**
 * PostNuke Application Framework
 *
 * @copyright value4business GmbH
 * @link http://www.postnuke.com
 * @version $Id: common.php 21568 2007-02-28 16:40:04Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @author Robert Gasch robert.gasch@value4business.com
 * @package PostNuke_Core
 */

// general
define('_CATEGORIES_IPATH',                  'IPfad');
define('_CATEGORIES_PATH',                   'Pfad');
define('_CATEGORIES_ROOTCAT',                'Stammkategorie');

// navigation
define('_CATEGORIES_REGISTRY',                'Kategoriezuweisung bearbeiten');

// view template
define('_CATEGORIES_VIEW_TITLE',              'Alle Kategorien');

// user template
define('_CATEGORIES_EDIT_SUBCATEGORIES',    	'Bearbeite Unterkategorien ab diesen Knoten');
define('_CATEGORIES_EDIT_USER',			          'Benutzerkategorien bearbeiten');
define('_CATEGORIES_EDIT_USER_DISABLED',     	'Die Bearbeitung von Benutzerkategorien ist deaktiviert. Der Administrator kann diese Funktion aktivieren.');
define('_CATEGORIES_EDIT_USER_NOT_OWN',	    	'Die Bearbeitung von fremden Benutzerkategorien ist nicht möglich. Diese Funktion kann nur vom Administrator ausgeführt werden.');

// new/edit template
define('_CATEGORIES_ADDITIONALDATA',          'Zusätzliche Datenfelder');
define('_CATEGORIES_ADVANCED',                'Umschalten zum erwiterten Modus');
define('_CATEGORIES_BASEINFO',                'Basisinformation zur Kategorie');
define('_CATEGORIES_CATEGORY_IS_LOCKED',    	'Diese Kategorie ist gesperrt und kann nur vom Administrator bearbeitet werden.');
define('_CATEGORIES_IS_LEAF',		             	'Kategorie ist eine Unterkategorie');
define('_CATEGORIES_IS_LOCKED',		           	'Kategorie ist gesperrt');
define('_CATEGORIES_LOCALISATION',            'Lokalisierte Ausgabe');
define('_CATEGORIES_META',                    'Metadaten der Kategorie');
define('_CATEGORIES_PARENT',                  'Parent');
define('_CATEGORIES_ROOT_PARENT_LOCKED',	    'Die Stammkategorie eines Startknoten kann nicht geändert werden.');
define('_CATEGORIES_SECURITY_DOMAIN',         'Sicherheitsdomain');
define('_CATEGORIES_SORT_VALUE',              'Sortierwert');
define('_CATEGORIES_STATUS',                  'Aktiv');
define('_CATEGORIES_VALUE',                   'Wert');

// preferences template
define('_CATEGORIES_PREFS',		               	'Einstellungen');
define('_CATEGORIES_PREFS_USERROOTCAT',		    'Stammkategorie für Benutzerkategorien');
define('_CATEGORIES_PREFS_ALLOWUSERCATEDIT',	'Benutzer erlauben, die eigenen Kategorien bearbeiten zu dürfen');
define('_CATEGORIES_PREFS_AUTOCREATEUSERCAT',	'Automatisches Erstellen des Stammverzeichnis für Benutzerkategorien');
define('_CATEGORIES_REBUILDPATHS', 	        	'Pfade neu erstellen');

// list template
define('_CATEGORIES_RESEQUENCE',              'Index erneuern');

// delete template
define('_CATEGORIES_SUBCATS_DELETE',         'Unterkategorien löschen');
define('_CATEGORIES_SUBCATS_MOVE',           'In folgende Kategorie verschieben');
define('_CATEGORIES_SUBCATS_STATUS',         'Diese Kategorie enthält %c% direkte Unterkategorie(n).');
define('_CATEGORIES_SUBCATS_WARNING',        'Was soll mit den Unterkategorien dieser Kategorie passieren?');

// module registry template
define('_CATEGORIES_REGISTRY_PROPERTY',       'Name der Eigenschaft');
define('_CATEGORIES_REGISTRY_TABLE',          'Tabelle');

// move template
define('_CATEGORIES_MOVE_TITLE',              'Kategorie verschieben');

// copy template
define('_CATEGORIES_COPY_DESCRIPTION',        'Diese Kategorie und ihre Unterkategorien unter folgende Kategorie kopieren');
define('_CATEGORIES_COPY_TITLE',              'Kategorie kopieren');

// modify config template
define('_CATEGORIES_CONFIG_REBUILD',          'Hier können alle systeminternen Pfade neu erstellt werden');
define('_CATEGORIES_CONFIG_REBUILD_INFO', 	  '<br /><br />Sie können die Aktion auslösen, wenn Sie auf den Submit-Button klicken. Je nach Anzahl der Kategorien könnte ein Time-Out auftreten oder das PHP-Speicherlimit überschritten werden.');
define('_CATEGORIES_CONFIG_REBUILD_PATHS',    'Pfade neu erstellen');

// error/status messages
define('_CATEGORIES_DOCROOT_CANT_RETRIEVE',   'Kann docroot nicht laden');
define('_CATEGORIES_DOCROOT_INVALID',         'Ungültiger docroot Parameter im URL');
define('_CATEGORIES_EDITCAT_INVALID',         'Ungültige Kategorie kann nicht editiert werden');
define('_CATEGORIES_EDITCAT_NOT_VALUEPARENT', 'Angegebene Kategorie ist keine übergeordnete Werte-Kategorie');
define('_CATEGORIES_EDITCAT_NOT_SUBCAT',      'Angegebene Kategorie ist keine Tochter-Kateogorie von docroot');
define('_CATEGORIES_NAME_EMPTY',              'Name darf nicht leer sein');
define('_CATEGORIES_NO_USERCATNAME',		      'Fehler! Der Name des Stammknoten für die Benutzerkategorie konnte nicht ermittelt werden');
define('_CATEGORIES_ROOT_CANT_EDIT',          'Fehler! Das Stammverzeichnis kann nicht im Benutzermodus editiert werden');
define('_CATEGORIES_USERCAT_NOAUTOCREATE',  	'Fehler! Der Benutzerstammknoten für diesen Benutzer existiert nicht und das automatische Erstellung ist nicht gesetzt.');
define('_CATEGORIES_USERCAT_LOGGED_IN',	    	'Fehler! Das Bearbeiten der Benutzerkategorien ist nur für angemeldete Benutzer möglich');
define('_CATEGORIES_USERDOCROOT_EMPTY',	    	'Fehler! Der Benutzerstammknoten konnte nicht ermittelt werden');
define('_CATEGORIES_USERDOCROOT_INVALID',   	'Fehler! Der Benutzerstammknoten scheint auf eine ungültige Kategorie zu verweisen');
define('_CATEGORIES_VALUE_EMPTY',             'Wert darf nicht leer sein');


