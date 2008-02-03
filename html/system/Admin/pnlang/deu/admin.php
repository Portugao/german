<?php
/**
 * PostNuke Application Framework
 *
 * @copyright (c) 2002, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id$
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package     PostNuke_System_Modules
 * @subpackage  PostNuke_Admin
 */

// general defines
define('_ADMIN', 'Administration');
define('_ADMINPANEL', 'Administration');
define('_ADMIN_ONLINEMANUAL', 'Online-Handbuch');
define('_ADMIN_TITLE', 'Administration');
define('_ADMIN_PNSECURITYANALYZER', 'Warnungen der Sicherheitsanalyse');
define('_MODULESCATEGORIZATION', 'Modulkategorisierung');
define('_MODIFYADMINPANELCONFIG', 'Administration-Einstellungen');
define('_MODULECATEGORIESLISTVIEW', 'Liste der Modulkategorien');
define('_NEWMODULECATEGORY', 'Modulkategorie erstellen');
define('_ADMIN_NEWCATEGORY', 'Neue Modulkategorie');
define('_ADMIN_EXISTINGCATEGORY', 'Bestehende Modulkategorie');

// menu
define('_VIEWMODULECATEGORIES', 'Listenansicht der Modulkategorien');
define('_ADMIN_MODIFYMODULECATEGORY', 'Modulkategorie bearbeiten');
define('_ADMIN_CREATEMODULECATEGORY', 'Modulkategorie anlegen');
define('_ADMIN_DELETEMODULECATEGORY', 'Modulkategorie löschen');
define('_ADMIN_CONFIRMDELETEMODULECATEGORY', 'Soll die Modulkategorie wirklich gelöscht werden?');

// error messages
define('_ADMIN_DELETEFAILEDDEFAULT', 'Die Default-Kategorie kann nicht gelöscht werden');
define('_ADMIN_DELETEFAILEDSTART', 'Die Start-Kategorie kann nicht gelöscht werden');
define('_ADMIN_FAILEDADDMODTOCAT', 'Fehler! Modul konnte nicht zur Kategorie hinzugefügt werden');
define('_ADMIN_NOADMINLINKS', 'Die Administrationskategorie ist leer. Diese Meldung wird vermutlich angezeigt, weil administrativer Zugriff auf ein Modul besteht, das nicht in der Standardkategorie ist.');

// modify config
define('_ADMIN_GENERALSETTINGS', 'Allgemein');
define('_ADMIN_DISPLAYICONS', 'Icons in der Administration anzeigen');
define('_ADMIN_IGNOREINSTALLERCHECK', 'Installer-Check deaktivieren');
define('_ADMIN_IGNOREINSTALLERCHECKWARNING', 'WARNUNG: nur in Entwicklungsumgebungen setzen!');
define('_ADMIN_PANELDISPLAYSETTINGS', 'Ansicht');
define('_ADMIN_MODULESPERPAGE', 'Module pro Seite');
define('_ADMIN_MODULESPERROW', 'Module pro Reihe');
define('_ADMIN_THEME', 'Theme für Administration');
define('_ADMIN_THEMESITE', 'Theme der Webseite nutzen');
define('_ADMIN_SKIN', 'Stylesheet für Administration');
define('_ADMIN_STARTCATEGORY', 'Start-Kategorie');
define('_ADMIN_DEFAULTCATEGORY', 'Default-Kategorie für neue Module');

// checks for install/upgrade files prior to admin panel being displayed
define('_ADMIN_PSAKWARNING', 'Warnung! Bitte das "Swiss army knife tool" im Root der Präsenz löschen');
define('_ADMIN_INSTALLWARNING','Warnung! Bitte die Datei "install.php" und den "install" Ordner im Root der Präsenz löschen');

// PostNuke Security Analyzer defines
define('_ADMIN_UPGRADE_PHP','Hinweis: upgrade.php im Root der Präsenz sollte gelöscht werden!');
define('_ADMIN_UPGRADE76_PHP','Hinweis: upgrade76.php im Root der Präsenz sollte gelöscht werden!');
define('_ADMIN_CONFIG_PHP','Hinweis: config/config.php ist beschreibbar (ggfs. chmod 644 oder chmod 444 setzen)!');
define('_ADMIN_MAGIC_QUOTES','Hinweis: <a href="http://php.net/magic_quotes">magic_quotes_gpc</a> ist aktiv!');
define('_ADMIN_REGISTER_GLOBALS','Hinweis: <a href="http://php.net/register_globals">register_globals</a> ist aktiv!');
define('_ADMIN_PNTEMP_HTACCESS','Hinweis: der /pnTemp-Ordner sollte mit einer .htaccess vor externem Zugriff geschützt werden.');
define('_ADMIN_SAFEHTML', 'WARNUNG: Der <a href="index.php?module=SecurityCenter&type=admin&func=modifyconfig">SafeHTML-Outputfilter</a> sollte aktiviert werden');
define('_ADMIN_SECURITYCENTERNOTINSTALLED', 'WARNUNG: Das SecurityCenter Modul ist nicht installiert!');
define('_ADMIN_SECURITYCENTERNOTENABLED', 'WARNUNG: Das <a href="index.php?module=SecurityCenter&type=admin&func=modifyconfig">SecurityCenter</a> Modul ist nicht aktiv!');
define('_ADMIN_LEGACY_MODE','Hinweis: der "legacy-modus" ist aktiv!');

/* Defines for the Admin module's help page (davidnelson) */
define('_ADMINGENERALSETTINGSHELP', 'Es gibt derzeit nur eine Option im Abschnitt Allgemeine Einstellungen:');
define('_ADMINDISPLAYSETTINGSHELP', 'Es gibt sechs Einstellungen für die Anzeige:');
define('_ADMINCATEGORYCONFIGURATIONHELP', 'Im Abschnitt Modulkategorisierung können zwei Optionen gewählt werden:');
define('_ADMIN_DEFAULTCATEGORYEXPLAINED', 'In der Dropdownliste die Modulkategorie auswählen, die für alle neu installierten und aktivierten Module gelten soll.');
define('_YOUGETTHEMESSAGE','Man erhält die Nachricht:');
define('_ADMINADDCATEGORYHELP','Hier können neue Kategorien zu den bestehenden Kategorietabs hinzugefügt werden. Bei \'Name\' die gewünschte Bezeichnung des Tabs, bei \'Beschreibung\' (die bei Auswahl der Kategorie unterhalb des Names angezeigt wird) eine aussagekräftige Umschreibung eingeben.');
define('_ADMINADDCATEGORYHELP1', 'Den Namen eingeben, der im Tabmenü angezeigt werden soll.');
define('_ADMINADDCATEGORYHELP2', 'Eine informative Beschreibung eingeben, die unter dem Namen angezeigt wird, sobald die Kategorie in der Administration ausgewählt wird.');
define('_ADMINUPDATECATEGORY','Modulkategorie bearbeiten');
define('_ADMINUPDATECATEGORYHELP','Hier können Name und Beschreibung einer Modulkategorie bearbeitet werden.');
define('_ADMINDELETECATEGORY','Modulkategorie löschen');
define('_ADMINDELETECATEGORYHELP','Hier kann eine Kategorie aus dem Tab-Menü gelöscht werden. Vor dem endgültigen Löschen muß diese Aktion bestätigt werden.');
define('_ADMINVIEW','Listenansicht der Modulkategorien');
define('_ADMINVIEWHELP','Zeigt eine Liste aller Kategorien an, die das Tab-Menü enthält.');
define('_ADMINMODIFYCONFIGHELP','Zu Beginn der Konfigurationsseite kann die Anzeige der Administration konfiguriert werden (das Theme und das CSS Stylesheet, die Anzahl anzuzeigender Module pro Seite.<br /><br />Weiter unten können mit Dropdown-Listen für jedes installierte und aktivierte Modul eine entspechende Kategorie ausgewählt werden.');
define('_MODULECATEGORIZATION', 'Auswahl der Modulkategorie');
define('_ADMIN_DISPLAYICONSEXPLAINED','Bei Auswahl dieser Option werden für jedes Modul Icons in der Administration angezeigt.');
define('_ADMIN_MODULESPERPAGEEXPLAINED','Die Anzahl der Module eingeben, die auf einer Seite in der Administration angezeigt werden sollen.');
define('_ADMIN_MODULESPERROWEXPLAINED','Die Anzahl der Module eingeben, die auf einer Zeile in der Administration angezeigt werden sollen.');
define('_ADMIN_THEMEEXPLAINED','In der Dropdownliste das Theme auswählen, das der Administration zugewiesen werden soll.');
define('_ADMIN_SKINNSEXPLAINED','In der Dropdownliste das Stylesheet auswählen, das der Administration zugewiesen werden soll.');
define('_ADMIN_STARTCATEGORYEXPLAINED','In der Dropdownliste die Modulkategorie auswählen, die in der Administration bei Erstbenutzung angezeigt werden soll.');
define('_ADMINIGNOREINSTALLERCHECKHELP','Diese Option ermöglicht die Deaktivierung der Prüfung ob die Installationsroutine noch im Rootverzeichnis vorhanden ist. Diese Option sollte nur in Entwicklungsumgebungen gesetzt werden, da sonst ein Sicherheitsrisiko entstehen kann.');
define('_ADMINSECURITYWARNINGSHELP','Falls die Sicherheitsanalyse potentielle Gefahren innerhalb der Installation erkennt, werden Sicherheitswarnungen angezeigt - bitte in diesem Fal die Dokumentation für sicherheitsrelevante Informationen lesen. Weiter unten stehen Erläuterungen für jedes möglicherweise identifizierte Sicherheitsrisiko (die sind nur Beispiele für mögliche Sicherheitsrisiken und sie bedeuten nicht, dass diese tatsächlich entdeckt wurden). Um den Sicherheitsstatus dieser Website zu prüfen, bitte - falls angezeigt - den Warnhinweis am Kopf der Administrationsseite beachten. Falls kein solcher Hinweis angezeigt wird, wurden keine Sicherheitsrisiken entdeckt.)');
define('_ADMIN_INSTALLWARNING_HELP','Nach erfolgreicher Installtion sollte die Installationsdatei \'install.php\' sowie das Verzeichnis \'install\' unbedingt aus dem Wurzelverzeichnis gelöscht werden, da andernfalls eine Sicherheitslücke besteht. Wenn die Sicherheitsanalyse diese Gefährdung erkennt, wird der Zugriff auf die Adminstration solange verhindert, bis die entsprechende Datei und das Verzeichnis gelöscht wurden. Bitte auch die Dokumentation zur optimalen Konfiguration der Webseite lesen.');
define('_ADMIN_PSAKWARNING_HELP','Das Tool Swiss Army Knife (eine Datei namens \'psak.php\') ist ein nützliches Werkzeug, um bestimmte Probleme zu lösen, aber es sollte niemals innerhalb eines Verzeichnis bleiben, auf das über das Internet zugegriffen werden kann, weil dies ein Sicherheitsrisiko darstellt. Wenn die Sicherheitsanalyse diese Gefährdung erkennt, wird der Zugriff auf die Adminstration solange verhindert, bis die Datei \'psak.php\' gelöscht wurde.');
define('_ADMIN_CONFIG_PHP_HELP','Nach erfolgter Installation erzeugt das Installationsskript eine Konfigurationsdatei \'config.php\', die im Unterverzeichnis \'config\' des Rootverzeichnis zu finden ist. Falls diese Datei beschreibbar ist, stellt dies ein Sicherheitsrisiko dar. Das Zugriffsrecht für diese Datei sollte auf nur-lesbar (644 or 444) gesetzt werden. Bitte auch die Dokumentation zur optimalen Konfiguration der Webseite lesen.');
define('_ADMIN_LEGACY_MODE_HELP','PostNuke ermöglicht die Unterstützung älterer Modulversionen bzw. der früheren API-Schnittstelle. Solche Module können jedoch Sicherheitsrisiken enthalten, die die Website kompromittieren können. Es wird dringend empfohlen, nur aktuelle Modulversionen zu verwenden, die konform zur aktuellen PostNuke API sind. In einem solchen Fall kann die Unterstützung älterer Module ausgeschaltet werden (dies ist die Standardeinstellung nach der erstmaligen Installation).');
define('_ADMIN_MAGIC_QUOTES_HELP','In einigen Hostingumgebungen ist die PHP-Einstellung \'magic_quotes_gpc\' aktiv. Dies kann jedoch Probleme bei Uploads und auch Performance-Einbußen bedeuten. Es wird empfohlen, dass diese Einstellung für \'magic_quotes_gpc\' deaktiviert ist. Anleitungen hierzu finden sich in der Dokumentation.');
define('_ADMIN_PNTEMP_HTACCESS_HELP','Nach erfolgter Installation enthält das Verzeichnis \'/pnTemp\' eine Datei \'.htaccess\'. Teilweise wird diese Datei aber beim Upload nicht übertragen, in einem solchen Fall wird dringend empfohlen, die Datei zu erzeugen (und sicher zu stellen, dass die Dateien \'.htaccess\' in einigen anderen Verzeichnissen ebenfalls existiert). Weitere Informationen hierzu finden sich in der Dokumentation.');
define('_ADMIN_REGISTER_GLOBALS_HELP','In einigen Hostingumgebungen ist die PHP-Einstellung \'register_globals\' aktiv. Dies stellt jedoch ein erhebliches Sicherheitsrisiko dar. Falls das Web über das Internet verfügbar ist, wird dringend empfohlen, sicher zu stellen, dass die Einstellung für \'register_globals\' deaktiviert ist. Anleitungen hierzu finden sich in der Dokumentation.');
define('_ADMIN_SAFEHTML_HELP','Der Ausgabefilter SafeHTML ist eine Option des Security Center Moduls, dass die Sicherheit dieser Webseite erhöht. Die Sicherheitsanalyse hat entdeckt, dass dieser Filter nicht aktiviert ist. Es wird empfohlen, den Filter zu aktivieren. Dieser Hinweis wird auch angezeigt, wenn das Modul Security Center nicht installiert oder deaktiviert ist. Weitere Informationen können der Onlinehilfe des Security Centers entnommen werden.');
define('_ADMIN_SECURITYCENTERNOTINSTALLED_HELP','Nach der Installation ist das Security Center standardmäßig installiert und aktiviert. Der obenstehende Hinweis wird angezeigt, falls das Security Center entfernt wurde. Es wird empfohlen, das \'Security Center\' zu aktivieren, da es helfen kann, die Sicherheit der Webseite zu erhöhen.');
define('_ADMIN_SECURITYCENTERNOTENABLED_HELP','Nach der Installation ist das Security Center standardmäßig installiert und aktiviert. Der obenstehende Hinweis, falls das Security Center deaktiviert wurde. Es wird empfohlen, das \'Security Center\' zu aktivieren, da es helfen kann, die Sicherheit der Webseite zu erhöhen.');
define('_ADMIN_UPGRADE_PHP_HELP','Die Datei \'upgrade.php\' wird vom Installationsskript verwendet, falls eine bereits existierende Installation der Version 0.8x auf eine neuere Version aktualisiert wird. Nach erfolgreicher Aktualisierung sollte diese Datei gelöscht werden, da sie nicht länger benötigt wird und ein mögliches Sicherheitsrisiko darstellt.');
define('_ADMIN_UPGRADE76_PHP_HELP','Die Datei \'upgrade76.php\' wird vom Installationsskript verwendet, falls eine bereits existierende Installation der Version 0.76 auf eine neuere Version 0.8x aktualisiert wird. Nach erfolgreicher Aktualisierung sollte diese Datei Datei gelöscht werden, da sie nicht länger benötigt wird und ein mögliches Sicherheitsrisiko darstellt.');
define('_ADMIN_MODULESCATEGORIZATIONEXPLAINED', 'Alle derzeit installierten und aktivierten Module werden aufgelistet. Neben jedem Modul kann anhand einer Dropdownliste ausgewählt werden, in welche Kategorie das jeweilige Module eingeordnet werden soll.');
