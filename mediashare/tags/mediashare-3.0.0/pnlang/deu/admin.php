<?php
// ------------------------------------------------------------------------------------
// Translation for PostNuke Mediashare module
// Translation by: Daniel Neugebauer / Thomas Smiatek
// ------------------------------------------------------------------------------------

require_once('modules/mediashare/pnlang/deu/common.php');

define('_MSALLOWTEMPLATEOVERRIDE', '�berschreiben der Templates in Alben erlauben?');
define('_MSAPPLYGLOBALTEMPLATE', 'Global zuweisen');
define('_MSAPPLYGLOBALTEMPLATECONFIRM', 'Alle Album-Templates �berschreiben');
define('_MSDEFAULTALBUMTEMPLATE', 'Standard Album-Template');
define('_MSDEFAULTSLIDESHOWTEMPLATE', 'Standard Diashow-Template');
define('_MSDIRNOTWRITABLE', 'Kein Schreibzugriff auf dieses Verzeichnis.');
define('_MSGENERAL', 'Allgemein');
define('_MSGENERALSETUP', 'Allgemeines Setup');
define('_MSIMPORT', 'Import');
define('_MSMEDIADIR', 'Medien-Upload Verzeichnis');
define('_MSMEDIADIRHELP', "Hier werden ihre Medien-Dateien gespeichert. Achten Sie darauf, dass es sich auf ein 'mediashare'-Verzeichnis im PostNuke-Verzeichnis bezieht und dass Schreibzugriff f�r den Webserver besteht.");
define('_MSMEDIAHANDLERS', 'Medien-Treiber');
define('_MSMEDIAHANDLERSINFO', 'Die untenstehende Liste zeigt die verf�gbaren Medien-Handler. Die Plugins erstellen Thumbnails (Vorschaubilder) und stellen die von Ihnen hochgeladenen Dateien dar.');
define('_MSMEDIASOURCES', 'Medien-Quellen');
define('_MSMEDIASOURCESINFO', 'Die untenstehende Liste zeigt die verf�gbaren Medien-Quellen. Diese Plugins beinhalten verschiedenste M�glichkeiten, Medienobjekte Ihren Alben hinzuzuf�gen.');
define('_MSMODULEDIR', 'Aktuelles Modul-Verzeichnis');
define('_MSOPENBASEDIR', 'Open-base dir (PHP restriction)');
define('_MSPLUGINS', 'Plugins');
define('_MSPREVIEWSIZE', 'Vorschau-Gr��e (Pixel)');
define('_MSSCANFORPLUGINS', 'Nach Plugins suchen');
define('_MSSINGLEALLOWEDSIZE', 'Max. Gr��e einer Media-Datei (kb)');
define('_MSTOTALALLOWEDSIZE', 'Max. Gr��e aller Dateien eines Users (kb)');
define('_MSTHUMBNAILSIZE', 'Gr��e der Thumbnails (Pixel)');
define('_MSTMPDIR', 'Temp-Verzeichnis');
define('_MSTMPDIRHELP', "Dieses Verzeichnis ben�tigt Mediashare w�hrend des Uploadvorgangs f�r tempor�re Dateien. Stellen Sie sicher, dass Schreibzugriff f�r den Webserver besteht.");
define('_MSVFSDBSELECTION', 'Speichern in der Datenbank');
define('_MSVFSDBSELECTIONHELP', 'Das Speichern der Dateien in der Datenbank erh�ht die Sicherheit und erm�glicht die Nutzung mehrerer Webserver auf Kosten der Performance.');
define('_MSVFSDIRECTSELECTION', 'Speichern im lokalen Dateisystem');
define('_MSVFSDIRECTSELECTIONHELP', 'Das Speichern im lokalen Dateisystem erh�ht die Performance auf Kosten einiger Sicherheitsaspekte und der Nutzungsm�glichkeit mehrerer Webserver.');
define('_MSSHARPEN', 'Thumbnail-Sch�rfung aktivieren');
define('_MSSHARPENHELP', 'Die Sch�rfung von Thumbnails und Vorschaubildern erh�ht die Bildqualit�t, belastet aber die CPU Ressourcen');
define('_MSTHUMBNAILSTART', 'Thumbnails anzeigen');
define('_MSTHUMBNAILSTARTHELP', 'Die Standardansicht eines Albums kann entweder eine Thumbnail-�bersicht sein, oder eine Folge von 1-Bild-Ansichten');

define('_MSREC_PAGETITLE', 'Thumbnails und Vorschaubilder neu erzeugen');
define('_MSREC_INTRO', 'Die Neuerzeugung aller Thumnails und Vorschaubilder beansprucht eine gewisse Zeit. Dieses Feature verwendet JavaScript zur Erstellung jeweils einer Datei ohne dabei eine PHP Laufzeit�berschreitung auszul�sen. Der Rahmen rechts wird zur Kommunikation mit dem Server genutzt. Der Fortschritt kann sowohl in diesem Rahmen wie auch in der Markierungsliste unten verfolgt werden.');
define('_MSREC_RECALCULATE', 'Neu erzeugen');

?>
