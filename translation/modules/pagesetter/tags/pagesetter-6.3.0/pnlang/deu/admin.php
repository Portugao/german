<?php
/**
 * German Translation for PostNuke Pagesetter module
 * 
 * @package Pagesetter module
 * @subpackage Languages
 * @version $Id: admin.php,v 1.31 2006/08/20 21:34:56 jornlind Exp $
 * @author Jorn Lind-Nielsen 
 * @author klausd
 * @author Jörg Napp 
 * @author Henning Hraban Ramm
 * @author Aleksander Vrcko
 * @author Thomas Smiatek
 * @link http://www.elfisk.de The Pagesetter Home Page
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
 */

require_once 'modules/pagesetter/guppy/lang/deu/global.php';
require_once 'modules/pagesetter/pnlang/deu/common.php';

define('_PGPUBTYPEEDITADDSTEP1', 'Schritt 1: Name und Beschreibung angeben');
define('_PGPUBTYPEEDITADDSTEP2', 'Schritt 2: Definition der Publikationsfelder.');
define('_PGPUBTYPEEDITADDSTEP2NOTE', 'Klicken Sie [+], um eine eine neue Zeile unterhalb der aktuellen einzufügen. Wiederholen Sie diesen Vorgang bis zur vollständigen Definition aller Felder. Dies kann später aus dem Hauptmenü bearbeitet werden: Publikationen -> Typen');
define('_PGBACKTOADMIN', 'Zurück zur Administration');
define('_PGBTBACKTOPUBLIST', 'Zurück zu den Publikationen');
define('_PGBTTYPEEXTRA', 'Hier klicken, um spezielle Parameter für diesen Eingabetyp zu bestimmen');
define('_PGCANCEL', 'Abbrechen');
define('_PGCOMMIT', 'Ausführen');
define('_PGCONFIGURATION', 'Pagesetter Konfiguration');
define('_PGCONFIGAUTOFILLPUBDATE', 'Veröffentlichungsdatum automatisch ausfüllen');
define('_PGCONFIGEDITOR', 'Editor');
define('_PGCONFIGEDITORENABLED', 'WYSIWYG-Editor einschalten');
define('_PGCONFIGEDITORSTYLED', 'Benutze die Style-Sheets aus dem Theme im Editor');
define('_PGCONFIGEDITORUNDO', 'Undo im Editor einschalten (verdeckt die Statuszeile)');
define('_PGCONFIGEDITORWORDKILL', 'Word Code Kill bei Paste im Editor einschalten');
define('_PGCONFIGGENERAL', 'Allgemein');
define('_PGCONFIGUPLOAD', 'Upload-Konfiguration');
define('_PGCONFIRMLISTDELETE', 'Sind Sie WIRKLICH sicher, dass Sie diese Liste löschen wollen?');
define('_PGCONFIRMPUBTYPEDELETE', 'Sind Sie WIRKLICH sicher, dass Sie diesen Publikationstyp löschen wollen - mit allen bereits angelegten Einträgen?');
define('_PGCREATEDDATE', 'Created');
define('_PGCREATETEMPLATES', 'Wählen Sie die Vorlagen aus, die automatisch generiert werden sollen');
define('_PGDEFAULTFOLDER', 'Voreingestelter Ordner');
define('_PGDEFAULTPUBTYPE', 'Standard Publikationstyp (zur Anzeige auf der Startseite)');
define('_PGDEFAULTSUBFOLDER', 'Voreingestelter Unterordner');
define('_PGDESCRIPTION', 'Beschreibung');
define('_PGDOWNLOADINGSCHEMA', 'Der Download der Schema-Datei sollte jetzt starten. Sollte nicht passieren, klicken Sie bitte auf "Download"');
define('_PGDOWNLOAD', 'Download');
define('_PGEDIT', 'Ändern');
define('_PGNERROROTACCESSIBLEDIR', 'In das angegebene Verzeichnis kann nicht geschrieben werden!');
define('_PGERRORUPLOAD', 'Fehler beim Upload dieser Datei: ');
define('_PGERRORUPLOADDIREMPTY', 'Es wurde kein temporäres Upload-Verzeichnis angegeben. Legen Sie dieses Verzeichnis fest in Administration > Pagesetter > Konfiguration > Allgemein.');
define('_PGERRORUPLOADMOVE', 'Die Datei des Uploads konnte nicht verschoben werden von/nach: ');
define('_PGENABLEHOOKS', 'PostNuke-Hooks einschalten');
define('_PGENABLEREVISIONS', 'Revisionsprüfung einschalten');
define('_PGENABLEEDITOWN', 'Bearbeiten der eigenen Publikationen ermöglichen');
define('_PGENABLETOPICACCESS', 'Thematische Zugriffsberechtigung einschalten');
define('_PGEXPORT', 'Export');
define('_PGEXPORTFORM', 'Pagesetter Struktur exportieren');
define('_PGEXPORTSCHEMA', 'Export Datenbankstruktur (ohne Daten)');
define('_PGFIELDTYPE', 'Typ');
define('_PGFIELDISTITLE', 'Feld als Titel benutzen');
define('_PGFOLDERNOTINSTALLED', 'Ordner Modul nicht installiert');
define('_PGFOLDERNONE', 'Keine Ordner benutzen');
define('_PGFOLDERSETUP','Einstellungen zur Benutzung mit dem Ordner-Modul');
define('_PGFOLDERDEFAULT','Voreingellter Ordner');
define('_PGFOLDERDEFAULTTOPIC','Voreingestelltes Thema');
define('_PGFOLDERSUBDEFAULT','Voreingellter Unterordner');
define('_PGFOLDERSTRANSFERED', 'Alle Publikationen transferiert zum Ordner Modul');
define('_PGFTMANDATORY', 'M'); // ENG
define('_PGFTMULTIPLEPAGES', 'MP');
define('_PGFTPUBLISHDATE', 'Veröffentlichungsdatum');
define('_PGFTSEARCHABLE', 'S');
define('_PGID', 'id');
define('_PGIMPORTPUBLICATIONS', 'Publikationen importieren');
define('_PGIMPORTARTICLE', 'Artikel erstellen');
define('_PGIMPORTARTICLEDESC', 'Erzeugt einen neuen Publiaktionstyp zur allgemeinen Veröffentlichung von News mit Titel, Text und Bildern.'); // ENG
define('_PGIMPORTCE', 'Import von ContentExpress');
define('_PGIMPORTCEDESC', 'Erzeugt einen neuen Publikationstyp CE und importiert alle ContentExpress-Artikel.');
define('_PGIMPORTFILEUPLOAD', 'Erzeuge FileUpload');
define('_PGIMPORTFILEUPLOADDESC', 'Erzeugt einen neuen Publikationstyp zur behandlung generischer Datei-uploads. Dieser Typ wurde zur Zusammenarbeit mit dem Ordner Modul etwickelt');
define('_PGIMPORTIMAGE', 'Erzeuge Bild');
define('_PGIMPORTIMAGEDESC', 'Bildet einen neuen Publikationstyp zur behandlung von Bildern. Dieser Typ wurde zur Zusammenarbeit mit dem Ordner Modul etwickelt');
define('_PGIMPORTNEWS', 'News importieren');
define('_PGIMPORTNEWSDESC', 'Erzeugt einen neuen Publikationstyp PN-News und importiert alle PostNuke-News-Beiträge.');
define('_PGIMPORTNEWSEXTRA', 'Ein Bild-Feld hinzufügen');
define('_PGIMPORTNOTE', 'Anmerkung erstellen');
define('_PGIMPORTNOTEDESC', 'Erzeugt einen neuen Publikationstyp für kleine Anmerkungen. Dieser Typ wurde für die Anwendung des "Ordner"-Moduls konzipiert');
define('_PGIMPORTPC', 'Import von PostCalendar');
define('_PGIMPORTPCDESC', 'Erzeugt einen neuen Publikationstyp PostCalendar und importiert alle PostCalendar-Einträge.');
define('_PGIMPORTXMLSCHEMA', 'XML-Schema importieren');
define('_PGIMPORTXMLSCHEMADESC', 'Erzeugt einen neuen Publikationstyp, basierend auf der übermittelten Pagesetter XML-Schema-Datei.');
define('_PGIMPORTXMLSCHEMAFILE', 'XML-Schema Datei');
define('_PGINCLUDECAT', 'Kategorien einschließen');
define('_PGLISTAUTHORHELP', 'Hier können Sie neue Publikationen erstellen und sehen alle bereits existierenden. Klicken Sie auf "Neue Publikation", um eine neue Instanz zu erstellen oder verwenden Sie den Filter, um eine bestimmte bereits erstellte Publikation zu finden.');
define('_PGLISTEDIT', 'Listen bearbeiten');
define('_PGLISTITEMS', 'Elemente auflisten');
define('_PGLISTLIST', 'Listen');
define('_PGLISTSETUP', 'Einstellungen für Listen');
define('_PGLISTSHOWCOUNT', 'Anzahl von Publikationen in der Liste');
define('_PGLISTTITLE', 'Titel');
define('_PGMISSINGFIELDROW', 'Sie müssen mindestens ein Publikationsfeld hinzufügen');
define('_PGNAME', 'Name');
define('_PGNEWPUBINSTANCE', 'Neu');
define('_PGNEWLIST', 'Neue Liste');
define('_PGNOAUTH', 'Sie sind nicht berechtigt, diese Funktion zu benutzen.');
define('_PGNODEFAULTSUBFOLDER', 'Kein Ordner voreingestellt');
define('_PGNONE', 'Nichts');
define('_PGONLYONEPAGEABLE', 'Zur Seitentrennung kann nur ein Feld verwendet werden!');
define('_PGPAGESETTERBASEDIR', 'Pagesetter Installationsverzeichnis');
define('_PGPUBLICATIONFIELDS', 'Publikationsfelder');
define('_PGPUBLICATIONTYPES', 'Publikationstypen');
define('_PGPUBLICATIONTYPEEDIT', 'Konfiguration des Publikationstyps');
define('_PGPUBLICATIONTYPEADD1', 'Einen neuen Publikationstyp erstellen');
define('_PGPUBLICATIONTYPEADD2', 'Vorlagen erstellen und Festlegung der Sortierung');
define('_PGPUBLIST', 'Liste');
define('_PGPUBTYPETITLE', 'Titel');
define('_PGPUBTYPEFILENAME', 'Vorlage'); 
define('_PGPUBTYPEFORMNAME', 'Formularname');
define('_PGPUBTYPETEMPLATES', 'Erstellung der Ausgabevorlagen');
define('_PGPUBTYPELISTGENERATE', 'Vorlage für die Startseitenliste erzeugen');
define('_PGPUBTYPELISTTEMPLATE', 'Dateiname der Listenvorlage');
define('_PGPUBTYPEFULLGENERATE', 'Vorlage für die Seitenanzeige erzeugen');
define('_PGPUBTYPEFULLTEMPLATE', 'Dateiname der Seitenvorlage');
define('_PGPUBTYPEPRINTGENERATE', 'Vorlage für die Druckansicht erzeugen');
define('_PGPUBTYPEPRINTTEMPLATE', 'Dateiname der Druckansichtsvorlage');
define('_PGPUBTYPERSSGENERATE', 'Vorlage für den RSS-Feed erzeugen');
define('_PGPUBTYPERSSTEMPLATE', 'Dateiname der RSS-Vorlage');
define('_PGPUBTYPEBLOCKGENERATE', 'Vorlage für einen Listenblock erzeugen');
define('_PGPUBTYPEBLOCKTEMPLATE', 'Dateiname der Blockvorlage');
define('_PGPUBTYPEEDITCOLINFO', 'M = Pflichtfeld, S = Durchsuchbar, MP = Multipage');
define('_PGPUBTYPESHELP', '<p>TIn diesem Fenster können Sie neue Publikationstypen hinzufügen (z.B. News,
        Anleitngen oder Artikel&mdash;entscheiden Sie selbst).</p>
        <p>Klicken Sie auf "Neuer Publikationstyp" und defnieren Sie die Datenfelder, aus denen Ihre
        Publikationen aufgebaut werden soll (z.B. Titel, Intro, Haupttext für einen typischen
        News-Publikationstyp).</p>
        <p>Sie können auch <em>vordefinierte Publikationstypen</em> installieren.
        Sie erhalten einen Überblick im Menü "Tools:Daten importieren".</p>');
define('_PGREL_PUBLICATION_SELECT', 'Publikationstyp');
define('_PGREL_FIELD_SELECT', 'Feld');
define('_PGREL_STYLE_SELECT', 'Selektortyp');
define('_PGREL_STYLE_ASPOPUP', 'Popupfenster');
define('_PGREL_FILTER_INPUT', 'Standardfilter');
define('_PGREL_STYLE_SELECTLIST', 'Liste');
define('_PGREL_STYLE_ADVANCEDSELECT', 'Geteilte Liste');
define('_PGREL_STYLE_CHECKBOX', 'Checkbox');
define('_PGREL_STYLE_HIDDEN', 'Hidden (wird nicht angezeigt)');
define('_PGSORTCREATED', 'Erstellt am');
define('_PGSORTFIELD1', 'Erster Sortierschlüssel');
define('_PGSORTFIELD2', 'Zweiter Sortierschlüssel');
define('_PGSORTFIELD3', 'Dritter Sortierschlüssel');
define('_PGDEFAULTFILTER', 'Standardfilter');
define('_PGSETUPFOLDER', 'Übertrage Pagesetter Publikationen zum Ordner Modul');
define('_PGSETUPFOLDERNONESEL', 'Kein Ordner voreingestellt. Diese Publicationen können nicht übertragen werden.');
define('_PGSORTID', 'Publikations-ID');
define('_PGSORTDESC', 'Sortierung absteigend');
define('_PGSORTLASTUPDATED', 'Zuletzt geändert am');
define('_PGTITLE', 'Titel');
define('_PGTRANSFER', 'Übertragung');
define('_PGTS_EXTRATYPEINFO', 'Besondere Typinformation');
define('_PGTS_EXTRATYPEINFOFOR', 'Besondere Typinformation für');
define('_PGTS_PUBLICATION_SELECT', 'Publikationstyp wählen');
define('_PGTS_OK', 'OK');
define('_PGTS_CANCEL', 'Abbrechen');
define('_PGTYPE', 'Typ');
define('_PGTYPESTRING', 'string');
define('_PGTYPETEXT', 'text');
define('_PGTYPEHTML', 'html');
define('_PGTYPEBOOL', 'bool');
define('_PGTYPEINT', 'int');
define('_PGTYPEREAL', 'real');
define('_PGTYPETIME', 'time');
define('_PGTYPEDATE', 'date');
define('_PGTYPEIMAGE', 'image (url)');
define('_PGTYPEIMAGEUPLOAD', 'Bild-Upload');
define('_PGTYPEUPLOAD', 'Beliebiger Upload');
define('_PGTYPEEMAIL', 'E-Mail');
define('_PGTYPEURL', 'Hyperlink');
define('_PGTYPECURRENCY', 'Währung');
define('_PGTYPEPUBID', 'Publikations-ID');
define('_PGUNKNOWNFOLDER', 'Unbekannter Ordner');
define('_PGUPDATE', 'Aktualisieren');
define('_PGUPLOADDIR', 'Verzeichnis für Uploads');
define('_PGUPLOADDIRDOCS', 'Verzeichnis für Dokument-Uploads');
define('_PGVALUE', 'Wert');
define('_PGWFCFGLIST', 'Workflow-Konfiguration - Publikationstyp auswählen');
define('_PGWFCFG', 'Arbeitsablauf Konfiguration');
define('_PGWFWORKFLOW', 'Arbeitsablauf');
define('_PGWORKFLOW', 'Arbeitsablauf');

?>
