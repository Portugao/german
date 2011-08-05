<?php
/**
 * crpVideo
 *
 * @copyright (c) 2007-2008, Daniele Conca
 * @link http://code.zikula.org/projects/crpvideo Support and documentation
 * @author Daniele Conca <conca.daniele@gmail.com>
 * @license GNU/GPL - v.2.1
 * @package crpVideo
 *
 * @version $Id$
 * translation by Carsten Volmer (herr.vorragend) <carsten@zikula.org> 
 *                Pascal Wieners(Pascal_Wieners) 
 */

define('_CRPVIDEO', 'Video');
define('_CRPVIDEO_VIDEO', 'Video');
define('_CRPVIDEO_VIDEOS', 'Videos');

define('_CRPVIDEO_DISPLAYWRAPPER', 'Erweiterte Informationen in Seite anzeigen');
define('_CRPVIDEO_GENERAL', 'Konfiguration');

// main list
define('_CRPVIDEO_CHANGE_STATUS','Status ändern');
define('_CRPVIDEO_CHANGE_STATUS_MODIFYING','Status des Videos ändern');
define('_CRPVIDEO_NOT_SPECIFIED','Nicht spezifiziert');
define('_CRPVIDEO_PENDING','Wartend');
define('_CRPVIDEO_REJECTED','Abgelehnt');
define('_CRPVIDEO_STATUS','Status');

// creation form
define('_CRPVIDEO_AUTHOR','Autor');
define('_CRPVIDEO_CURRENT_FILE','Aktuelle Datei');
define('_CRPVIDEO_DELETE_FILE','Datei löschen');
define('_CRPVIDEO_FILE','Video-Datei (.flv or .mp3) - Maximal');
define('_CRPVIDEO_FILEBLANK','(Muss der Name des flv-Videos in pnmedia/video sein)');
define('_CRPVIDEO_EXTERNAL','Externe URL (http://)');
define('_CRPVIDEO_IMAGE','Video-Cover (.gif, .jpg, .png) - Maximal');
define('_CRPVIDEO_IMAGE_WIDTH','Max. Bilderbreite');
define('_CRPVIDEO_REQUIRED','(*)');
define('_CRPVIDEO_REQUIRED_EXT','Pflichtfelder');
define('_CRPVIDEO_SHOW_FILE','Zeige Datei');
define('_CRPVIDEO_TAGS','Tags');

// config
define('_CRPVIDEO_BROWSER_PATH','Relativer Pfad (mit führendem Slash)');
define('_CRPVIDEO_COVER_DIMENSION','Max. Cover Upload-Größe (Bytes)');
define('_CRPVIDEO_DISPLAY_EMBED','Eingebetteten Code anzeigen');
define('_CRPVIDEO_DISPLAY_HEIGHT','Anzeigehöhe');
define('_CRPVIDEO_FILE_DIMENSION','Max. Upload-Größe (Bytes)');
define('_CRPVIDEO_GD_AVAILABLE','GD Library');
define('_CRPVIDEO_IMAGES','Bilder');
define('_CRPVIDEO_IMAGE_RESIZE','Das Bild wird angepasst auf');
define('_CRPVIDEO_MAIN_ITEMS','Elemente auf Hauptseite');
define('_CRPVIDEO_MANDATORY_COVER','Cover als Pflichtfeld');
define('_CRPVIDEO_NOTIFICATION_MAIL','Mail-Benachrichtigung bei neuen Videos (leer=kein Eintrag)');
define('_CRPVIDEO_PLAYER','Player');
define('_CRPVIDEO_PLAYER_HEIGHT','Player-Höhe');
define('_CRPVIDEO_PLAYER_WIDTH','Player-Breite');
define('_CRPVIDEO_SHARE','Sharing');
define('_CRPVIDEO_UPLOAD','Upload');
define('_CRPVIDEO_UPLOAD_PATH','Upload-Pfad (relativer Pfad, ohne anhängenden Slash, chmod 777 erforderlich)');
define('_CRPVIDEO_USE_BROWSER','Browser benutzen');
define('_CRPVIDEO_USE_GD','GD Library benutzen');
define('_CRPVIDEO_USERLIST_IMAGE','Thumbnails in Benutzerliste anzeigen');
define('_CRPVIDEO_USERLIST_WIDTH','Thumbnailbreite in der Benutzerliste');

// error messages
define('_CRPVIDEO_ERROR_IMAGE_FILE_SIZE_TOO_BIG','Dateigröße des Bildes nicht erlaubt');
define('_CRPVIDEO_ERROR_IMAGE_NO_FILE','Bild nicht hochgeladen oder leer');
define('_CRPVIDEO_ERROR_VIDEO_FILE_SIZE_TOO_BIG','Dateigröße des Videos nicht erlaubt');
define('_CRPVIDEO_ERROR_VIDEO_NO_AUTHOR','Bitte Autor eintragen');
define('_CRPVIDEO_ERROR_VIDEO_NO_CATEGORY','Bitte Kategorie auswählen');
define('_CRPVIDEO_ERROR_VIDEO_NO_CONTENT','Bitte alle Pflichtfelder füllen');
define('_CRPVIDEO_ERROR_VIDEO_NO_FILE','Video nicht hochgeladen');
define('_CRPVIDEO_ERROR_VIDEO_NO_TITLE','Bitte Titel eintragen');
define('_CRPVIDEO_IMAGE_INVALID_TYPE','Ungültiger Bild-Typ');
define('_CRPVIDEO_VIDEO_INVALID_TYPE','Ungültiger Video-Typ');
define('_CRPVIDEO_INVALID_URL','Ungültige URL');
define('_CRPVIDEO_INVALID_NOTIFICATION','Ungültige Benachrichtigungsadresse');

// RSS define
define('_CRPVIDEO_ATOM','Atom');
define('_CRPVIDEO_RSS','Video-Feed');
define('_CRPVIDEO_RSS1','RSS 1.0');
define('_CRPVIDEO_RSS2','RSS 2.0');
define('_CRPVIDEO_ENABLE_RSS','RSS Feed einschalten');
define('_CRPVIDEO_SHOW_RSS','Link zum RSS Feed anzeigen');
define('_CRPVIDEO_USE_RSS','Feed-Format');

// PodCast
define('_CRPVIDEO_PODCAST','Video-Podcast');
define('_CRPVIDEO_ENABLE_PODCAST','Podcasting einschalten');
define('_CRPVIDEO_PODCAST_CATEGORY','Podcast-Kategorie');
define('_CRPVIDEO_PODCAST_DESCRIPTION','Podcast-Beschreibung');
define('_CRPVIDEO_PODCAST_EDITOR','Managing Editor');
define('_CRPVIDEO_PODCAST_ICATEGORY','Kategorie-Beschreibung');

// Playlist
define('_CRPVIDEO_ENABLE_PLAYLIST','Playlist einschalten');
define('_CRPVIDEO_PLAYLIST_BY_CATEGORY','nach Kategorie');
define('_CRPVIDEO_PLAYLIST_BY_DATE','nach Datum');
define('_CRPVIDEO_PLAYLIST_BY_UPLOADER','nach Uploader');
define('_CRPVIDEO_PLAYLIST_BY_VIEWS','nach Anzahl der Views');
define('_CRPVIDEO_PLAYLIST_ITEMS','Playlist-Einträge');
define('_CRPVIDEO_PLAYLIST_POSITION','Position');
define('_CRPVIDEO_PLAYLIST_POSITION_BOTTOM','unter');
define('_CRPVIDEO_PLAYLIST_POSITION_OVER','über');
define('_CRPVIDEO_PLAYLIST_POSITION_RIGHT','rechts');
define('_CRPVIDEO_PLAYLIST_SIZE','Playliste-Größe(px)');
define('_CRPVIDEO_PLAYLIST_TYPE','Sortierung der Playlist');

