<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2008, Zikula German Translation Team
 * @link http://www.zikula.de
 * @version $Id$
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 */

define('_SECURITYCENTER_EMAILEMAILSECTIONBREAKER','\n=====================================\n');
define('_SECURITYCENTER_EMAILATTENTION','Information für den Administrator der Seite %sitename.\n');
define('_SECURITYCENTER_ANTICRACKERATDATEANDTIME','Am %date um %time');
define('_SECURITYCENTER_EMAILDETECTEDANDBLOCKED',' wurden Informationen zu der Seite gesendet, die als Angriffsversuch ausgelegt wurden. Dies kann durchaus harmlos sein, vielleicht wurde dies im regulären Betrieb ausgelöst. Wie dem auch sei, es wurde festgestellt und der Zugriff wurde blockiert.\n');
define('_SECURITYCENTER_EMAILFILELINEANDTYPE','Die verdächtige Aktivität wurde in der Datei %file in Zeile %line festgestellt und ist vom Typ %type. \n');
define('_SECURITYCENTER_EMAILADDINITIONALINFO','Als weitere Information wurde übermittelt: %info');
define('_SECURITYCENTER_EMAILSTARTFULLREPORT','\n\nEs folgen die gesammelten Informationen - dies kann dabei helfen, Grund und Verursacher zu finden.\n\n');
define('_SECURITYCENTER_EMAILUSERINFOHEADER','Informationen über den Benutzer:\n');
define('_SECURITYCENTER_EMAILNOTLOGGEDIN','Die Person ist nicht angemeldet.\n');
define('_SECURITYCENTER_ANTICRACKERUSERINFO','Benutzername:  %uname\nE-Mail-Adresse: %email\nName: %name');
define('_SECURITYCENTER_EMAILIPNUMBERS','IP-Addresse (Anmerkung: IP-Addressen können gefälscht sein):\n\t IP entsprechend HTTP_CLIENT_IP: %HTTP_CLIENT_IP\n\t IP entsprechend REMOTE_ADDR: %REMOTE_ADDR\n\n');
define('_SECURITYCENTER_EMAILREQUESTARRAY','Inhalt der \$_REQUEST Daten\n');
define('_SECURITYCENTER_EMAILGETARRAY','Inhalt der \$_GET Daten\n(Dies beinhaltet Variablen, die in der Zeichenkette des URL oder aus einem Formular mit \'GET\' übermittelt wurden)\n');
define('_SECURITYCENTER_EMAILPOSTARRAY','Inhalt der \$_POST Daten\n(Dies beinhaltet Variablen, die a su einem Formular mit \'POST\' übermittelt wurden)\n');
define('_SECURITYCENTER_EMAILBROWSERINFO','Browser-Information\n');
define('_SECURITYCENTER_EMAILSERVERARRAY','Inhalt der \$_SERVER Daten\n');
define('_SECURITYCENTER_EMAILENVARRAY','Inhalt der \$_ENV Daten\n');
define('_SECURITYCENTER_EMAILCOOKIEARRAY','Inhalt der \$_COOKIE Daten\n');
define('_SECURITYCENTER_EMAILFILESARRAY','Inhalt der \$_FILES Daten\n');
define('_SECURITYCENTER_EMAILSESSIONARRAY','Inhalt der \$_SESSION Daten\n(Dies sind Informationen aus der Session. Die Variablen,\ndie mit PNSV beginnen, sind PostNukeSessionVariablen)\n');
define('_SECURITYCENTER_EMAILEMAILSUBJECT','Security Center Meldung (Typ: %hack_type)');

