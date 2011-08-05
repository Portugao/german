<?php
/**
 * Zikula Application Framework
 *
 * @copyright  Giacomo Gatelli
 * @link       http://www.arthens.it
 * @license    GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @author     Giacomo Gatelli <arthens@gmail.com>
 * @category   Zikula_Extension
 * @package    Content
 * @subpackage SimpleGallery
 */

/*
 * Menu
 */

define('_SIMPLEGALLERY_ADD_ALBUM',          'Neues Album');
define('_SIMPLEGALLERY_ADD_IMAGES',         'Bilder hinzufügen');
define('_SIMPLEGALLERY_ALBUMS_LIST',        'Albenliste');
define('_SIMPLEGALLERY_PREFS_AND_STATS',    'Einstellungen und Statistik');

/*
 * Preferences
 */

define('_SIMPLEGALLERY_ADMIN_ITEMSPERPAGE', 'Einträge pro Seite im Adminbereich');
define('_SIMPLEGALLERY_ALBUMS_AS_HOMEPAGE', 'Albenliste auf der Startseite anzeigen');
define('_SIMPLEGALLERY_BIG_IMAGE_SIZE',     'Bildgröße (Breite x Höhe)');
define('_SIMPLEGALLERY_CHECK_DIRECTORY',    'Bitte den Pfad überprüfen');
define('_SIMPLEGALLERY_FILE_DOES_NOT_EXIST','Die Datei ist nicht zu finden');
define('_SIMPLEGALLERY_FILE_NOT_READABLE',  'Die Datei kann nicht gelesen werden');
define('_SIMPLEGALLERY_FOLDER_DOES_NOT_EXIST','Der Ordner existiert nicht');
define('_SIMPLEGALLERY_FOLDER_NOT_WRITABLE','Der Ordner kann nicht gelesen werden');
define('_SIMPLEGALLERY_HIDE_EMPTY_ALBUMS',  'Leere Alben verstecken (Sie werden als Unteralben gezählt)');
define('_SIMPLEGALLERY_IMAGE_PATH',         'Pfad zum Bilderordner');
define('_SIMPLEGALLERY_IMAGE_SIZE_WARNING', 'Achtung: Nach Änderung der generellen Bildgrößen müssen evtl. die Templates und das Stylesheet angepasst werden');
define('_SIMPLEGALLERY_LASTALBUMS',         'Anzahl der zuletzt angelegten Alben auf der Startseite');
define('_SIMPLEGALLERY_LASTIMAGES',         'Anzahl der zuletzt eingestellten Bilder auf der Startseite');
define('_SIMPLEGALLERY_PREFS',              'Einstellungen');
define('_SIMPLEGALLERY_SMALL_IMAGE_SIZE',   'Thumbnail Abmessungen (Breite x Höhe)');
define('_SIMPLEGALLERY_STATS',              'Statistik');
define('_SIMPLEGALLERY_TEMP_PATH',          'Pfad zum temporären Ordner');
define('_SIMPLEGALLERY_TINY_IMAGE_SIZE',    'Tiny Bildabmessungen (Breite x Höhe)');
define('_SIMPLEGALLERY_USE_LIGHTBOX',       'Lightbox zur Bildanzeige nutzen');


/*
 * Stats
 */

define('_SIMPLEGALLERY_STATS_NUM_OF_IMAGES',    'Bilderanzahl');
define('_SIMPLEGALLERY_STATS_NUM_OF_ALBUMS',    'Albenanzahl');
define('_SIMPLEGALLERY_STATS_FOLDER_SIZE',      'Speicherverbrauch');

/*
 * Albums
 */

define('_SIMPLEGALLERY_ALBUM_CONFIRMDELETE',        'Wollen Sie wirklich das folgende Album löschen:');
define('_SIMPLEGALLERY_ALBUM_DELETE',               'Album löschen');
define('_SIMPLEGALLERY_ALBUM_DELETE_IMAGES',        'Bilder des Albums löschen');
define('_SIMPLEGALLERY_ALBUM_DELETE_IMAGES_CONFIRM','Wollen Sie die ausgewählten Bilder wirklich löschen? Es erfolgt keine weitere Abfrage!');
define('_SIMPLEGALLERY_ALBUM_DELETE_SUBALBUMS',     'Album mit Unteralben löschen');
define('_SIMPLEGALLERY_ALBUM_DELETED',              'Album wurde gelöscht');
define('_SIMPLEGALLERY_ALBUM_DESCRIPTION',          'Albumbeschreibung');
define('_SIMPLEGALLERY_ALBUM_COUNT_IMAGES',         'Bilderanzahl');
define('_SIMPLEGALLERY_ALBUM_COUNT_SUBALBUMS',      'Anzahl der Unteralben');
define('_SIMPLEGALLERY_ALBUM_CREATED',              'Album wurde erstellt');
define('_SIMPLEGALLERY_ALBUM_EDIT_ALBUM',           'Album bearbeiten');
define('_SIMPLEGALLERY_ALBUM_IMAGES',               'Bilder im Album');
define('_SIMPLEGALLERY_ALBUM_IS_LEAF',              'Keine Unteralben möglich');
define('_SIMPLEGALLERY_ALBUM_IS_LEAF_SHORT',        'Tiefste Ebene');
define('_SIMPLEGALLERY_ALBUM_MAIN_ALBUM',           'Hauptalbum');
define('_SIMPLEGALLERY_ALBUM_MOVE_ALBUMS_TO',       'oder verschiebe nach:');
define('_SIMPLEGALLERY_ALBUM_MOVE_IMAGES_TO',       'oder verschiebe nach:');
define('_SIMPLEGALLERY_ALBUM_NOTFOUND',             'Album nicht gefunden');
define('_SIMPLEGALLERY_ALBUM_NO_ITEM_SELECTED',     'Keine Auswahl getroffen');
define('_SIMPLEGALLERY_ALBUM_NO_SUBALBUMS',         'Keine Unteralben');
define('_SIMPLEGALLERY_ALBUM_PARENT',               'Übergeordnetes Album');
define('_SIMPLEGALLERY_ALBUM_PARENT_SHORT',         'Pfad');
define('_SIMPLEGALLERY_ALBUM_SORTING',              'Bildersortierung');
define('_SIMPLEGALLERY_ALBUM_SUBALBUMS',            'Unteralben des Albums');
define('_SIMPLEGALLERY_ALBUM_TITLE',                'Albumüberschrift');
define('_SIMPLEGALLERY_ALBUM_UPDATED',              'Album erfolgreich aktualisiert');
define('_SIMPLEGALLERY_ALBUM_DELETE_OR_MOVE_ALBUMS','Bitte wählen, ob dieses Album/Unteralbum gelöscht oder verschoben werden soll');
define('_SIMPLEGALLERY_ALBUM_DELETE_OR_MOVE_IMAGES','Bitte wählen, ob die Bilder des Albums gelöscht oder verschoben werden sollen');

/*
 * Images
 */
define('_SIMPLEGALLERY_ADD_ARCHIVE',                'Bilderarchiv laden');
define('_SIMPLEGALLERY_ADD_ARCHIVE_MSG',            'Bei Benutzung dieser Auswahl können Sie mehrere Bilder - die sich in einem *.zip-Archiv befinden müssen - zur selben Zeit hochladen!');
define('_SIMPLEGALLERY_ADD_ARCHIVE_MSG2',           'Überschriften und Beschreibungen für die einzelnen Bilder können später eingegeben werden (optional).');
define('_SIMPLEGALLERY_ADD_IMAGE',                  'Bild hinzufügen');
define('_SIMPLEGALLERY_EDIT_IMAGE',                 'Bild bearbeiten');
define('_SIMPLEGALLERY_EDIT_IMAGE_INFO',            'Soll das Bild geändert werden, dieses bitte löschen und anschließend neu bereitstellen.');
define('_SIMPLEGALLERY_IMAGE_ARCHIVE',              'Bilderarchiv');
define('_SIMPLEGALLERY_IMAGE_ALBUM',                'Album');
define('_SIMPLEGALLERY_IMAGE_CONFIRMDELETE',        'Wollen Sie wirklich dieses Bild löschen?');
define('_SIMPLEGALLERY_IMAGE_DELETE',               'Bild löschen');
define('_SIMPLEGALLERY_IMAGE_DELETED',              'Bild wurde gelöscht');
define('_SIMPLEGALLERY_IMAGE_DESCRIPTION',          'Bildbeschreibung');
define('_SIMPLEGALLERY_IMAGE_FILE',                 'Bilddatei: ');
define('_SIMPLEGALLERY_IMAGE_HIDDEN',               'Bild verstecken'); 
define('_SIMPLEGALLERY_IMAGE_LOADED',               'Bild wurde bereitgestellt');
define('_SIMPLEGALLERY_IMAGE_MAX_SIZE',             'Max. Größe');
define('_SIMPLEGALLERY_IMAGE_NEXT',                 'Nächstes Bild');
define('_SIMPLEGALLERY_IMAGE_NOTFOUND',             'Bild nicht gefunden');
define('_SIMPLEGALLERY_IMAGE_PREVIOUS',             'Vorheriges Bild');
define('_SIMPLEGALLERY_IMAGE_SUBMITTED_BY',         'Eingestellt von');
define('_SIMPLEGALLERY_IMAGE_SUBMITTED_ON',         'Eingestellt am');
define('_SIMPLEGALLERY_IMAGE_TITLE',                'Bildüberschrift');
define('_SIMPLEGALLERY_IMAGE_UPDATED',              'Bilder wurde aktualisiert');
define('_SIMPLEGALLERY_IMAGEPATH_WRONG',            'Bilder konnten nicht geladen werden, bitte den Bilderordner überprüfen');
define('_SIMPLEGALLERY_IMAGES_DELETED',             'Bilder wurden gelöscht');
define('_SIMPLEGALLERY_IMAGES_EMPTY_ARCHIVE',       'Das Archiv ist leer. Es können keine Bilder geladen werden.');
define('_SIMPLEGALLERY_IMAGES_LIST',                'Albuminhalt');
define('_SIMPLEGALLERY_IMAGES_LOADED',              'Bilder wurden hinzugefügt');
define('_SIMPLEGALLERY_IMAGES_LOADED_INCOMP',       '%p% Bilder erfolgreich hinzugefügt, %f% Dateien konnten nicht verarbeitet werden.');
define('_SIMPLEGALLERY_IMAGES_MOVED',               'Bilder wurden verschoben');
define('_SIMPLEGALLERY_IMAGES_MULTIEDIT',           'Bearbeite Bilder');
define('_SIMPLEGALLERY_IMAGES_SELECT_ALBUM',        'Es muss ein Album ausgewählt werden'); 
define('_SIMPLEGALLERY_IMAGES_UPDATED',             'Bilder wurden aktualisiert');
define('_SIMPLEGALLERY_IMAGES_WRONG_OR_TOO_BIG',    'Archiv zu groß oder fehlerhafte URL'); 
define('_SIMPLEGALLERY_FAILED_UPLOAD',              'Upload fehlgeschlagen: ');
define('_SIMPLEGALLERY_NO_ALBUM_SELECTED',          'Wählen Sie ein unterschiedliches Album aus, in welches die Bilder verschoben werden sollen.');
define('_SIMPLEGALLERY_FORMAT_NOT_SUPPORTED',       'Dateiformat wird nicht unterstützt: ');
define('_SIMPLEGALLERY_RESIZE_FAILED',              'Bildgrößenänderung fehlgeschlagen');
define('_SIMPLEGALLERY_SAVE_COVER',                 'Titelbild sichern');
define('_SIMPLEGALLERY_SELECT_AN_ALBUM',            'Album auswählen');
define('_SIMPLEGALLERY_TEMPPATH_WRONG',             'Bilder können nicht geladen werden, bitte den temporären Ordner überprüfen!');
define('_SIMPLEGALLERY_THUMBNAIL_MISSING',          'Das thumbnail Modul muss installiert und aktiviert sein, damit die Bilder geladen werden können.');
define('_SIMPLEGALLERY_UPLOAD_FAILED',              'Bereitstellung fehlgeschlagen');


/*
 * Sorting
 */

define('_SIMPLEGALLERY_ORDER_DATA_ASC',     'Älteste zuerst');
define('_SIMPLEGALLERY_ORDER_DATA_DESC',    'Neueste zuerst');
define('_SIMPLEGALLERY_ORDER_DEFAULT',      'Standard');
define('_SIMPLEGALLERY_ORDER_TITLE',        'Nach Überschriften');

/*
 * General
 */

define('_SIMPLEGALLERY_ALBUMS',         'Alben');
define('_SIMPLEGALLERY_COVER',          'Titelbild');
define('_SIMPLEGALLERY_ID',             'ID');
define('_SIMPLEGALLERY_IF_SELECTED',    'Wenn ausgewählt');
define('_SIMPLEGALLERY_IMAGE',          'Bild');
define('_SIMPLEGALLERY_IMAGES',         'Bilder');
define('_SIMPLEGALLERY_NAME',           pnModGetName());
define('_SIMPLEGALLERY_OR',             'oder');
define('_SIMPLEGALLERY_SELECT',         'Auswahl');
define('_SIMPLEGALLERY_SUBALBUMS',      'Unteralbum');
define('_SIMPLEGALLERY_TO',             'zu');

/*
 * User Interface
 */

define('_SIMPLEGALLERY_HOMEPAGE',       'Startseite');
define('_SIMPLEGALLERY_ALBUM_LIST',     'Albenliste');
define('_SIMPLEGALLERY_SUB_ALBUMS',     'Unteralben von ');
define('_SIMPLEGALLERY_SUB_IMAGES',     'Bilder von ');
define('_SIMPLEGALLERY_EMPTY_ALBUM',    'Dieses Album ist leer');
define('_SIMPLEGALLERY_LAST_ALBUMS',    'Zuletzt erstellte Alben');
define('_SIMPLEGALLERY_LAST_IMAGES',    'Zuletzt eingestellte Bilder');
define('_SIMPLEGALLERY_NO_ALBUMS',      'Bisher wurden keine Alben erstellt');
define('_SIMPLEGALLERY_NO_IMAGES',      'Bisher wurden keine Bilder eingestellt');
define('_SIMPLEGALLERY_POWERED_BY',     'Powered by');
define('_SIMPLEGALLERY_GO_UP',          'Eine Ebene höher');
define('_SIMPLEGALLERY_NO_DESCRIPTION', 'Keine Beschreibung');
define('_SIMPLEGALLERY_NO_TITLE',       'Keine Überschrift');

/*
 * Blocks
 */

define('_SIMPLEGALLERY_BLOCK_ALBUMLIST',            'Albumliste'); 
define('_SIMPLEGALLERY_BLOCK_ALBUMLIST_SUBALBUMS_OF','Unteralbum von:'); 
define('_SIMPLEGALLERY_BLOCK_ANYALBUM',             'Beliebiges Album');
define('_SIMPLEGALLERY_BLOCK_LASTIMAGES',           'Letzte Bilder');
define('_SIMPLEGALLERY_BLOCK_LASTIMAGES_ALBUM',     'Album');
define('_SIMPLEGALLERY_BLOCK_LASTIMAGES_NUM',       'Anzahl der Bilder');
define('_SIMPLEGALLERY_BLOCK_RANDOMIMAGES',         'Zufallsbilder');
define('_SIMPLEGALLERY_BLOCK_RANDOMIMAGES_ALBUM',   'Album');
define('_SIMPLEGALLERY_BLOCK_RANDOMIMAGES_NUM',     'Anzahl der Bilder');
define('_SIMPLEGALLERY_BLOCK_VIEWALBUM',            'Gehe zu Album');
define('_SIMPLEGALLERY_BLOCK_VIEWSIMPLEGALLERY',    'Gehe zu Bildergalerie');

