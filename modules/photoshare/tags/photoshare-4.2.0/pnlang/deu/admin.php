<?php
// ------------------------------------------------------------------------------------
// Translation for Photoshare PostNuke Module
// Language:              German
// Translation by:        Jorn Lind-Nielsen (last release: Aurelio Caliaro)
// ------------------------------------------------------------------------------------
define('_PSALLOWACCESSPERUSER', 'Veröffentlichung von Alben durch individuelle Benutzer erlaubt (ermöglicht den Photoshare-Benutzern Einsicht in Benutzerliste)');
define('_PSALLOWFRAMEREMOVE', 'Den Benutzern erlauben, ihre Alben ohne Postnuke-Rahmen darzustellen');
define('_PSBADAUTHKEY', 'Falscher Authentifizierungscode - Sie können immer nur eine Seite gleichzeitig abschicken');
define('_PSBASEDIRFIX', 'Ihre Verzeichnisse <b>müssen</b> sich unter diesem Verzeichnis befinden.');
define('_PSBASEDIRSET', 'Ihr PHP server hat die Variable "open_basedir" gesetzt auf');
define('_PSCANCEL', 'Abbrechen');
define('_PSCONTINUE', 'Weiterfahren');
define('_PSCURRENTDIR', 'Photoshare installiert in');
define('_PSDEFAULTFOLDERACCESS', 'Setze Standardalbum-Zugriffsberechtigung auf "für alle sichtbar"');
define('_PSDEFAULTTOPIC', 'Standardthema für Alben');
define('_PSDEFAULTTEMPLATE', 'Standardtemplate für Alben');
define('_PSIMAGEDIRNAME', 'Verzeichnis um Bilder auf der Festplatte zu speichern (wenn notwendig)');
define('_PSIMAGESIZELIMITSINGLE', 'maximal erlaubte Größe eines Bildes (in Bytes)');
define('_PSIMAGESIZELIMITTOTAL', 'maximal erlaubte Größe aller Bilder für einen einzelnen User (in Bytes)');
define('_PSMENUMYFOLDERS', 'Meine Alben');
define('_PSNOAUTH', 'Zugriff auf diese Funktion ist nicht erlaubt');
define('_PSNOTOPIC', '- Keines -');
define('_PSPHOTOSHARESETUP', 'Photoshare Einstellungen');
define('_PSSETUPMAIN', 'Haupteinstellungen');
define('_PSSETUPFIELDS', 'Sonderfelder');
define('_PSSETUPFIELDSINFO', 'Hier kann man die Sonderfelder von Photoshare definieren. Leere Felder werden ignoriert.');
define('_PSSETUPSTORAGE', 'Speichereinstellungen');
define('_PSSETUPRECALCULATE', 'Grössen neu berechnen');

define('_PSRECALCSIZES', 'Bildgrössen neu berechnen');
define('_PSRECALCSIZESINFO', 'Die x/y-Bildgrössen wurden in Photoshare bis Version 3.4.0 nicht gespeichert. Ab jener Version werden sie benötigt und unterhalten, aber die alten Bilder bleiben ohne Grössenangaben. Du kannst die fehlenden Grössen hier berechnen, sei Dir aber bewusst dass die Berechnung die maximale Rechenzeit des PHP-Servers überschreiten könnte. In jenem Fall bekommst Du irgendwann einen weissen Bildschirm. Gehe dann zurück, lade die Seite neu - finde die fehlenden Bilder und versuche es nochmals.');
define('_PSRECALCSIZESSTATUS', 'Übrige Bilder: ');
define('_PSRECALCSIZESGO', 'Neu berechnen');
define('_PSRECALCSIZESDONE', 'Neuberechnung fertig');
define('_PSRECALCSIZESOK', 'Die Neuberechnung hatte Erfolg.');

define('_PSSUBMITUPDATE', 'Abschicken');
define('_PSTEMPDIRNAME', 'Verzeichnis für "temp" Dateien');
define('_PSUSEIMAGEDATABASE', 'Bilder in Datenbank speichern');
define('_PSUSEIMAGEDIR', 'Bilder auf Festplatte speichern');
define('_PSTHUMBNAILSIZE', 'Größe der Thumbnails (in Pixel)');
define('_PSNONSUITABLEDIR', '<i>Dies ist entweder kein Verzeichnis oder das Verzeichnis ist nicht durch den Webserver beschreibbar. Bitte prüfe die Berechtigungen.</i>');
define('_PSDIROK','<i>Der Webserver kann schreibend auf dieses Verzeichnis zugreifen.</i>');
define('_PSWHILEEXECUTING', ' während der Ausführung: ');
define('_PSMAINFOLDERLIST', 'Standard-Template für die Hauptalbumsliste');

define('_PSGROUPS', 'Gruppen');
define('_PSUSERS', 'Benutzer');
define('_PSNAME', 'Name');
define('_PSSTORAGE', 'Speicher (kb)');
define('_PSUPLOADNOTENABLED', 'Fehler: Datei-Upload ist auf diesem Server nicht erlaubt (prüfe file_uploads in php.ini)');

// V4B 26-01-2004 TS start
define('_PSMAXDISPLAYWIDTH', 'Maximale Seitenbreite (0 = keine Standardeinstellung)');
define('_PSMAXDISPLAYHEIGHT', 'Maximale Seitenhöhe (0 = keine Standardeinstellung)');
// V4B 26-01-2004 TS end
?>