<?php
/**
 * PostNuke Application Framework
 * @copyright (c) 2001, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: userapi.php 21511 2007-02-25 11:45:01Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package PostNuke_System_Modules
 * @subpackage SecurityCenter
*/

define('_SECURITYCENTER_EMAILEMAILSECTIONBREAKER','\n=====================================\n');
define('_SECURITYCENTER_EMAILATTENTION','Zur Kenntnisnahme des Administrators der Seite %sitename.\n');
define('_SECURITYCENTER_ANTICRACKERATDATEANDTIME','Am %date um %time');
define('_SECURITYCENTER_EMAILDETECTEDANDBLOCKED',' hat der PostNuke Code festgestellt, dass jemand versucht hat, Informationen zu Ihrer Seite zu senden, die als Angriffsversuch ausgelegt wurden. Keine Panik: dies kann harmlos sein -- vielleicht wurde dies durch etwas ausgelöst, was Sie selbst verursacht haben! Wie dem auch sei, es wurde festgestellt und der Zugriff wurde blockiert.\n');
define('_SECURITYCENTER_EMAILFILELINEANDTYPE','Die verdächtige Aktivität wurde in der Datei %file in Zeile %line festgestellt und ist vom Typ %type. \n');
define('_SECURITYCENTER_EMAILADDINITIONALINFO','Als weitere Information wurden von diesem Code übermittelt: %info');
define('_SECURITYCENTER_EMAILSTARTFULLREPORT','\n\nWeiter unten finden Sie einige Informationen, die für diesen Versuch gesammelt werden konnten. Dies kann Ihnen dabei helfen herauszufinden, was passiert ist und vielleicht auch, wer der Verursacher war.\n\n');
define('_SECURITYCENTER_EMAILUSERINFOHEADER','Informationen über diesen Benutzer:\n');
define('_SECURITYCENTER_EMAILNOTLOGGEDIN','Diese Person ist nicht angemeldet.\n');
define('_SECURITYCENTER_ANTICRACKERUSERINFO','PostNuke-Benutzername:  %uname\nRegistrierte Email-Adresse dieses PostNuke-Benutzers: %email\nRegistrierter tatsächlicher Name dieses PostNuke-Benutzers: %name');
define('_SECURITYCENTER_EMAILIPNUMBERS','IP-Addresse: [Anmerkung: falls es sich um wirklichen Cracker handelt, sind diese IP-Addressen vermutlich nicht die seines aktuellen Computers]\n\t IP entsprechend der HTTP_CLIENT_IP: %HTTP_CLIENT_IP\n\t IP entsprechend der REMOTE_ADDR: %REMOTE_ADDR\n\t IP entsprechend GetHostByName(\$REMOTE_ADDR): %$REMOTE_ADDR\n\n');
define('_SECURITYCENTER_EMAILREQUESTARRAY','Information der \$_REQUEST Daten\n');
define('_SECURITYCENTER_EMAILGETARRAY','Information der \$_GET Daten\nDies beinhaltet Variablen, die in der Zeichenkette des URL oder aus einer Maske des Typs \'GET\' vorkommen können.\n');
define('_SECURITYCENTER_EMAILPOSTARRAY','Information der \$_POST Daten\nDies beinhaltet sichtbare und nicht sichtbare Elemente.\n');
define('_SECURITYCENTER_EMAILBROWSERINFO','Browser-Information\n');
define('_SECURITYCENTER_EMAILSERVERARRAY','Information der \$_SERVER Daten\n');
define('_SECURITYCENTER_EMAILENVARRAY','Information der \$_ENV Daten\n');
define('_SECURITYCENTER_EMAILCOOKIEARRAY','Information der \$_COOKIE Daten\n');
define('_SECURITYCENTER_EMAILFILESARRAY','Information der \$_FILES Daten\n');
define('_SECURITYCENTER_EMAILSESSIONARRAY','Information der \$_SESSION Daten\nDies sind Informationen aus der Session. Die Variablen,\ndie mit PNSV beginnen, sind PostNukeSessionVariablen.\n');
define('_SECURITYCENTER_EMAILEMAILSUBJECT','Angriffsversuch auf Ihre Seite? (Typ: %hack_type)');

