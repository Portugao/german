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

// new/edit template
define('_CATEGORIES_ADDITIONALDATA',          'Zusätzliche Datenfelder');
define('_CATEGORIES_BASEINFO',                'Basisinformation zur Kategorie');
define('_CATEGORIES_DATA',                    'Datenfeld');
define('_CATEGORIES_DOMAIN',                  'Domain');
define('_CATEGORIES_LOCALISATION',            'Lokalisierte Ausgabe');
define('_CATEGORIES_META',                    'Metadaten der Kategorie');
define('_CATEGORIES_PARENT',                  'Parent');
define('_CATEGORIES_SECURITY_DOMAIN',         'Sicherheits-Domain');
define('_CATEGORIES_SORT_VALUE',              'Sortier-Wert');
define('_CATEGORIES_STATUS',                  'Aktiv');
define('_CATEGORIES_VALUE',                   'Wert');

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
define('_CATEGORIES_CONFIG_REBUILD_PATHS',    'Pfade neu erstellen');

// error/status messages
define('_CATEGORIES_DOCROOT_CANT_RETRIEVE',   'Kann docroot nicht laden');
define('_CATEGORIES_DOCROOT_INVALID',         'Ungültiger docroot Parameter im URL');
define('_CATEGORIES_EDITCAT_INVALID',         'Ungültige Kategorie kann nicht editiert werden');
define('_CATEGORIES_EDITCAT_NOT_VALUEPARENT', 'Angegebene Kategorie ist keine übergeordnete Werte-Kategorie');
define('_CATEGORIES_EDITCAT_NOT_SUBCAT',      'Angegebene Kategorie ist keine Tochter-Kateogorie von docroot');
define('_CATEGORIES_ROOT_CANT_EDIT',          'Das root Verzeichnis kann nicht im User-Modus editiert werden');
define('_CATEGORIES_VALUE_EMPTY',             'Wert darf nicht leer sein');

?>