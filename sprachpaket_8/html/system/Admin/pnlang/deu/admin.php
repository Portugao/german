<?php
/**
 * PostNuke Application Framework
 *
 * @copyright (c) 2002, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: admin.php 20628 2006-11-26 11:16:35Z landseer $
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
define('_MODULECATEGORIESLISTVIEW', 'Liste der Modulkategorisierung');
define('_NEWMODULECATEGORY', 'Modulkategorie erstellen');
define('_ADMIN_NEWCATEGORY', 'Neue Modulkategorie');
define('_ADMIN_EXISTINGCATEGORY', 'Bestehende Modulkategorie');
// error messages
define('_ADMIN_DELETEFAILEDDEFAULT', 'Die Default-Kategorie kann nicht gelöscht werden');
define('_ADMIN_DELETEFAILEDSTART', 'Die Start-Kategorie kann nicht gelsöcht werden');
define('_ADMIN_FAILEDADDMODTOCAT', 'Fehler! Modul konnte nicht zur Kategorie hinzugefügt werden');
define('_ADMIN_NOADMINLINKS', 'Die Administrationskategorie ist leer. Sie sehen diese Meldung vermutlich, weil Sie administrativen Zugriff auf ein Modul besitzen, das nicht in der Standardkategorie der Administration eingeordnet ist.');

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
define('_ADMINCATEGORYCONFIGURATIONHELP', 'Im Abschnitt Modulkategorisierung können Sie zwei Optionen wählen:');
define('_ADMIN_DEFAULTCATEGORYEXPLAINED', 'Öffnen Sie die Dropdownliste und wählen Sie die Modulkategorie aus, die für alle neu installierten und aktivierten Module gelten soll.');
define('_YOUGETTHEMESSAGE','Sie erhalten die Nachricht:');
define('_ADMINADDCATEGORYHELP','Hier können Sie eine neue Kategorie zu den bestehenden Kategorietabs hinzufügen. Geben Sie bei  \'Name\' die gewünschte Bezeichnung des Tabs ein. Unter Beschreibung \'Description\' geben Sie eine aussagekräftige Umschreibung ein, die unterhalb des Namens eingeblendet wird, wenn die entsprechende Kategorie angezeigt wird.');
define('_ADMINADDCATEGORYHELP1', 'Geben Sie den Namen ein, der im Tabmenü angezeigt werden soll.');
define('_ADMINADDCATEGORYHELP2', 'Geben Sie eine informative Beschreibung ein, die unter dem Kategorienamen angezeigt wird, sobald die Kategorie in der Administration ausgewählt wird.');
define('_ADMINUPDATECATEGORY','Modulkategorie bearbeiten');
define('_ADMINUPDATECATEGORYHELP','Hier können Name und Beschreibung einer Modulkategorie bearbeitet werden.');
define('_ADMINDELETECATEGORY','Modulkategorie löschen');
define('_ADMINDELETECATEGORYHELP','Hier kann eine Kategorie aus dem Tab-Menü gelöscht werden. Vor dem endgültigen Löschen muss diese Aktion bestätigt werden.');
define('_ADMINVIEW','Listenansicht der Modulkategorien');
define('_ADMINVIEWHELP','Zeigt eine Liste aller Kategorien an, die das Tab-Menü enthält.');
define('_ADMINMODIFYCONFIGHELP','Zu Beginn der Konfigurationsseite kann die Anzeige der Administration konfiguriert werden (das Theme und das CSS Stylesheet, die Anzahl anzuzeigender Module pro Seite.<br /><br />Weiter unten können Sie mit Dropdown-Listen für jedes installierte und aktivierte Modul eine entspechende Kategorie auswählen.');
define('_MODULECATEGORIZATION', 'Auswahl der Modulkategorie');
define('_ADMIN_DISPLAYICONSEXPLAINED','Bei Auswahl dieser Option werden für jedes Modul Icons in der Administration angezeigt.');
define('_ADMIN_MODULESPERPAGEEXPLAINED','Geben Sie eine ganze Zahl für die Anzahl der Module ein, die auf einer Seite in der Administration angezeigt werden sollen.');
define('_ADMIN_MODULESPERROWEXPLAINED','Geben Sie eine ganze Zahl für die Anzahl der Module ein, die auf einer Zeile in der Administration angezeigt werden sollen.');
define('_ADMIN_THEMEEXPLAINED','Öffnen Sie die Dropdownliste und wählen Sie das Theme, das der Administration zugewiesen werden soll.');
define('_ADMIN_SKINNSEXPLAINED','Öffnen Sie die Dropdownliste und wählen Sie das Stylesheet, das der Administration zugewiesen werden soll.');
define('_ADMIN_STARTCATEGORYEXPLAINED','Öffnen Sie die Dropdownliste und wählen Sie die Modulkategorie aus, die in der Administration bei Erstbenutzung angezeigt werden soll.');
define('_ADMINIGNOREINSTALLERCHECKHELP','Diese Option ermöglicht die Deaktivierung der Sicherheitsanalyse, die prüft, ob die Installationsroutine noch im Wurzelverzeichnis vorhanden ist. Vorzugsweise sollte diese Option aktiviert bleiben. da sonst ein Sicherheitsrisiko entstehen könnte, falls das Löschen des Installationsskriptes nach Beendigung der vollständigen Installation vergessen wurde.');
define('_ADMINSECURITYWARNINGSHELP','Falls die Sicherheitsanalyse potentielle Gefahren innerhalb der Installation erkennt, werden Sicherheitswarnungen angezeigt. Lesen Sie bitte die Dokumentation für weitere sicherheitsrelevante Informationen. Weiter unten stehen Erläuterungen für jedes möglicherweise identifizierte Sicherheitsrisiko. (Die sind nur Beispiele für mögliche Sicherheitslücken und sie bedeuten nicht, dass diese tatsächlich entdeckt wurden. Um den Sicherheitsstatus dieser Website zu prüfen, beachten Sie bitte - falls angezeigt - den Warnhinweis am Kopf der Administrationsseite. Sehen Sie keinen solchen Hinweis, wurden kein Sicherheitsrisiko entdeckt.)');
define('_ADMIN_INSTALLWARNING_HELP','Nach erfolgreicher Installtion sollte die Installationsdatei \'install.php\' sowie das Verzeichnis \'install\' unbedingt aus dem Wurzelverzeichnis gelöscht werden, insbesondere dann, wenn Sie Site online im Internet zur Verfügung steht, da andernfalls eine Sicherheitslücke besteht. Wenn die Sicherheitsanalyse diese Gefährung erkennt, wird der Zugriff auf die Adminstration solange verhindert, bis die entsprechende Datei und das Verzeichnis gelöscht wurden. Lesen Sie bitte auch die Dokumentation zur optimalen Konfiguration dieser Site.');
define('_ADMIN_PSAKWARNING_HELP','Das Tool Swiss Army Knife (eine Datei namens \'psak.php\') ist ein nützliches Werkzeug, um bestimmte Probleme zu lösen, aber es sollte niemals innerhalb eines Verzeichnis bleiben, auf das über das Internet zugegriffen werden kann, weil dies eine Sicherheitslücke darstellt. Wenn die Sicherheitsanalyse diese Gefährung erkennt, wird der Zugriff auf die Adminstration solange verhindert, bis die Datei \'psak.php\' gelöscht wurde.');
define('_ADMIN_CONFIG_PHP_HELP','Nach erfolgter Installation erzeugt das Installationsskript eine Konfigurationsdatei \'config.php\', die im Unterverzeichnis \'config\' des Wurzelverzeichnis zu finden ist. Falls diese Datei beschreibbar ist, stellt dies eine Sicherheitslücke dar. Sie sollten die Zugriffsrechte für diese Datei auf nur-lesbar (644 or 444) setzen. Lesen Sie bitte auch die Dokumentation zur optimalen Konfiguration dieser Site.');
define('_ADMIN_LEGACY_MODE_HELP','PostNuke ermöglicht die Unterstützung Module älterer Versionen. Solche Module können jedoch Sicherheitslöcher enthalten, die die Website kompromittieren können. Es wird dringend empfohlen, nur aktuelle Modulversionen zu verwenden, die konform zur alktuellen PostNuke API sind. In einem solchen Fall kann die Unterstützung älterer Module angeschaltet werden (dies ist die Standardeinstellung nach der erstmaligen Installation).');
define('_ADMIN_MAGIC_QUOTES_HELP','In einigen Hostingumgebungen ist die PHP-Einstellung \'magic_quotes_gpc\' aktiv. Dies stellt jedoch eine potentielle Gefährdung dar. Falls das Web über das Internet verfügbar ist, wird dringend empfohlen, sicher zu stellen, dass diese Einstellung für \'magic_quotes_gpc\' deaktiviert ist. Anleitungen hierzu finden Sie in der Dokumentation.');
define('_ADMIN_PNTEMP_HTACCESS_HELP','Nach erfolgter Installation enthält das Verzeichnis \'/pnTemp\' eine Datei \'.htaccess\'. Es gibt allerdings auch einige Verfahren der Dateiuploads, bei denen diese Datei nicht zum Webspace transferiert wird. In einem solchen Fall wird dringend empfohlen, eine solche Datei zu erzeugen (und sicher zu stellen, dass die Dateien \'.htaccess\' in einigen anderen Verzeichnissen ebenfalls existiert). Weitere Informationen hierzu finden Sie in der Dokumentation.');
define('_ADMIN_REGISTER_GLOBALS_HELP','In einigen Hostingumgebungen ist die PHP-Einstellung \'register_globals\' aktiv. Dies stellt jedoch eine potentielle Gefährdung dar. Falls das Web über das Internet verfügbar ist, wird dringend empfohlen, sicher zu stellen, dass diese Einstellung für \'register_globals\' deaktiviert ist. Anleitungen hierzu finden Sie in der Dokumentation.');
define('_ADMIN_SAFEHTML_HELP','Der Ausgabefilter SafeHTML ist ein Feature des Security Center Moduls, dass die Sicherheit dieser Webiste erhöht. Die Sicherheitsanalyse hat entdeckt, dass dieser Filter nicht aktiviert ist. Es wird empfohlen, diesen zu aktivieren. Diesen Hinweis wird auch angezeigt, wenn das Modul Seciúrity Center nicht installiert oder deaktiviert ist. Weitere Informationen können der Onlinehilfe des Security Centers entnommen werden.');
define('_ADMIN_SECURITYCENTERNOTINSTALLED_HELP','Nach der Installation ist das Security Center standardmäßig installiert und aktiviert. Sie sehen den obenstehenden Hinweis, falls das Security Center entfernt wurde. Es wird empfohlen, die Installation des Security Center nicht zu entfernen, da dies die Sicherheit der Site erhöht.');
define('_ADMIN_SECURITYCENTERNOTENABLED_HELP','Nach der Installation ist das Security Center standardmäßig installiert und aktiviert. Sie sehen den obenstehenden Hinweis, falls das Security Center deaktiviert wurde. Es wird empfohlen, die das Security Center nicht zu deaktivieren, da dies die Sicherheit der Site erhöht.');
define('_ADMIN_UPGRADE_PHP_HELP','Die Datei \'upgrade.php\' wird vom Installationsskript verwendet, falls eine bereits existierende Postnuke Site der Version 0.8x auf eine neuere Version aktualisiert wird. Nach erfolgreicher Aktualisierung sollte diese Datei Datei gelöscht werden, da sie nicht länger benötigt wird und ein mögliches Sicherheitsrisiko darstellt.');
define('_ADMIN_UPGRADE76_PHP_HELP','Die Datei \'upgrade76.php\' wird vom Installationsskript verwendet, falls eine bereits existierende Postnuke Site der Version 0.76 auf eine neuere Version 0.8x aktualisiert wird. Nach erfolgreicher Aktualisierung sollte diese Datei Datei gelöscht werden, da sie nicht länger benötigt wird und ein mögliches Sicherheitsrisiko darstellt.');
define('_ADMIN_MODULESCATEGORIZATIONEXPLAINED', 'Alle derzeit installierten und aktivierten Module werden aufgelistet. Neben jedem Modul kann anhand einer Dropdownliste ausgewählt werden, in welche Kategorie das jeweilige Module eingeordnet werden soll.');

?>