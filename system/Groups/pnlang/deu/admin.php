<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2008, Zikula German Translation Team
 * @link http://www.zikula.de
 * @version $Id$
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 */

 // general
define('_GROUPS_PENDINGACCEPT',                'Akzeptieren');
define('_GROUPS_PENDINGDENY',                  'Ablehnen');

// singular/plural
define('_GROUPS_GROUP',                         'Gruppe');
define('_GROUPS_GROUPS',                        'Gruppen');

 // menus
define('_GROUPS_VIEWGROUPS',                   'Gruppen anzeigen'); 	 
define('_GROUPS_MODIFYGROUP',                  'Gruppe bearbeiten');
define('_GROUPS_CREATEGROUP',                  'Gruppe anlegen');
define('_GROUPS_CONFIRMDELETE',                'Soll die Gruppe wirklich gelöscht werden?');

// ajax interface
define('_GROUPS_ADDINGNEW',                    '--neue Gruppe--');
define('_GROUPS_DELETINGGROUP',                '...lösche Gruppe...');
define('_GROUPS_UPDATINGGROUP',                '...aktualisiere Gruppe...');

// group states and types
define('_GROUPS_CLOSED',                       'geschlossen');
define('_GROUPS_CORE',                         'Core');
define('_GROUPS_NEWGROUPINDB',                 'Neue Gruppe in DB');
define('_GROUPS_OPEN',                         'offen');
define('_GROUPS_PRIVATESHORT',                 'Privat');
define('_GROUPS_PUBLICSHORT',                  'Öffentlich');
define('_GROUPS_TYPE',                         'Typ');

// notifation methods
define('_GROUPS_NOTIFYBYEMAIL',                'E-Mail-Adresse');
define('_GROUPS_NOTIFYBYPM',                   'Private Nachricht');
define('_GROUPS_NOTIFYNONE',                   'keine');

// view template
define('_GROUPS_APPEND',                       'Neue Gruppe hinzufügen');
define('_GROUPS_USERCOMMENT',                  'Kommentar');
define('_GROUPS_ISDEFAULTUSERGROUP',           '(*) = Startgruppe - kann nicht gelöscht werden');
define('_GROUPS_MEMBERSHIP',                   'Gruppen-Mitgliedschaft');
define('_GROUPS_NBUMAX',                       'Maximum');
define('_GROUPS_NBUSERS',                      'Mitglieder');
define('_GROUPS_PENDINGTITLE',                 'Ausstehende Anfragen');

// modify config template
define('_GROUPS_ADMMAILWARNING',               'E-Mail bei neuen Gruppenanfragen');
define('_GROUPS_DEFAULTGROUP',                 'Startgruppe für registrierte Benutzer');
define('_GROUPS_HIDECLOSEDGROUPS',             'Geschlossene Gruppen verstecken');

// group applications template
define('_GROUPS_DEFAULTACCEPTTEXT',            'Die Anfrage für die Gruppe wurde akzeptiert, die entsprechenden Zugriffsrechte sind eingerichtet.');
define('_GROUPS_DEFAULTDENYREASON',            'Die Anfrage für die Gruppe wurde nicht akzeptiert.');

// group membership template
define('_GROUPS_ADDUSER',                      'Benutzer zu Gruppe hinzufügen');
define('_GROUPS_NOMOREUSERS',                  'Für die Gruppe verfügbare Benutzer.');
define('_GROUPS_REMOVEUSER',                   'Benutzer entfernen');
define('_GROUPS_UID',                          'User ID');

// user pending template
define('_GROUPS_REASON',                       'Grund');
define('_GROUPS_SENDREASONBYMAIL',             'Grund/Benachrichtigung schicken');
define('_GROUPS_USERAPPLICATION',              'Benutzeranfrage');
define('_GROUPS_USERAPPLICATIONTEXT',          'Benutzer Text');

// errors/statuses
define('_GROUPS_ACCEPTTITLE',                  'Hinzugefügt in die Gruppe ');
define('_GROUPS_ACCEPTUSERFAILED',             'Fehler beim Hinzufügen in die Gruppe');
define('_GROUPS_ADDERROR',                     'Fehler beim Einrichten der Gruppe');
define('_GROUPS_ALREADYEXISTS',                'Gruppe existiert bereits');
define('_GROUPS_DEFAULTGROUPCANNOTBEDELETED',  'Die Startgruppe kann nicht gelöscht werden');
define('_GROUPS_DELETEERROR',                  'Fehler beim Löschen der Gruppe ');
define('_GROUPS_DENYTITLE',                    'Fehler! Die Anfrage wurde abgelehnt ');
define('_GROUPS_DENYUSERFAILED',               'Ablehnung fehlgeschlagen');
define('_GROUPS_MISSINGNAME',                  'Fehlender Gruppenname');
define('_GROUPS_USERADDED',                    'Benutzer zu Gruppe hinzugefügt');
define('_GROUPS_USERDENIED',                   'Anfrage abgelehnt');
define('_GROUPS_USERNOTADDED',                 'Benutzer nicht zur Gruppe hinzugefügt');
define('_GROUPS_USERREMOVED',                  'Benutzer aus der Gruppe entfernt');
define('_GROUPS_USERREMOVEDERROR',             'Entfernen des Benutzers fehlgeschlagen');

