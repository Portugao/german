<?php 
/**
 * Advanced Polls module for Zikula
 *
 * @author Mark West <mark@markwest.me.uk>
 * @copyright (C) 2002-2007 by Mark West
 * @link http://www.markwest.me.uk Advanced Polls Support Site
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package Zikula_3rdParty_Modules
 * @subpackage Advanced_Polls
 *
 * @version $Id$
 * translation by Carsten Volmer (herr.vorragend) <carsten@zikula.org> 
 */


// main admin menu
define('_ADVANCEDPOLLSADMIN', 'Advanced Polls Administration');
define('_ADVANCEDPOLLSNEW', 'Umfrage anlegen');
define('_ADVANCEDPOLLSVIEW', 'Umfragen anzeigen');

// delete template
define('_ADVANCEDPOLLSCONFIRMDELETE', 'Löschen der Umfrage bestätigen');
define('_ADVANCEDPOLLSDELETE', 'Umfrage löschen');

// create/edit templates
define('_ADVANCEDPOLLSADD', 'Umfrage anlegen');
define('_ADVANCEDPOLLSAUTHTYPE', 'Autorisierungsmethode');
define('_ADVANCEDPOLLSBASICINFO', 'Grundlegende Informationen');
define('_ADVANCEDPOLLSDATETIMESTART', 'Beginn der Umfrage (Datum/Zeit)');
define('_ADVANCEDPOLLSDATETIMECLOSE', 'Ende der Umfrage (Datum/Zeit)');
define('_ADVANCEDPOLLSDESCRIPTION', 'Beschreibung');
define('_ADVANCEDPOLLSEDIT', 'Umfrage bearbeiten');
define('_ADVANCEDPOLLSMULTIPLESELECT', 'Auswahlmethode');
define('_ADVANCEDPOLLSMULTIPLESELECTCOUNT', 'Anzahl der erlaubten Möglichkeiten');
define('_ADVANCEDPOLLSMULTIPLESELECTCOUNTUNLIMITED', '(-1 für unbegrenzte Auswahl)');
define('_ADVANCEDPOLLSNAME', 'Name der Umfrage');
define('_ADVANCEDPOLLSNOCLOSE', 'Kein Enddatum');
define('_ADVANCEDPOLLSONLYMULTIPLESELECT', 'Folgende Optionen sind nur relevant, wenn eine Mehrfachauswahl möglich ist.');
define('_ADVANCEDPOLLSONLYRECURRING', 'Folgende Optionen sind nur relevant, wenn es sich um eine wiederholende Umfrage handelt.');
define('_ADVANCEDPOLLSOPTION', 'Auswahl');
define('_ADVANCEDPOLLSOPTIONCOUNT', 'Anzahl der Optionen in dieser Umfrage');
define('_ADVANCEDPOLLSOPTIONS', 'Optionen');
define('_ADVANCEDPOLLSRECURRING','Wiederholende Umfrage?');
define('_ADVANCEDPOLLSRECURRINGINTERVAL', 'Anzahl der Tage nachdem die Umfrage wiederholt werden soll');
define('_ADVANCEDPOLLSRECURRINGOFFSET','Anzahl der Stunden nachdem die Umfrage wiederholt werden soll');
define('_ADVANCEDPOLLSREGULATIONS', 'Stimmenvorschriften');
define('_ADVANCEDPOLLSTIEBREAK', 'Tiebreak-Methode');
define('_ADVANCEDPOLLSTIMING', 'Zeitsteuerung');

// view template
define('_ADVANCEDPOLLSADMINSTATS', 'Statistik');
define('_ADVANCEDPOLLSDUPLICATE', 'Duplizieren'); 
define('_ADVANCEDPOLLSISOPEN', 'Ist Umfrage offen?'); 
define('_ADVANCEDPOLLSNUMBER', 'Umfrage-ID');
define('_ADVANCEDPOLLSRESETVOTES', 'Zurücksetzen');

// modify config template
define('_ADVANCEDPOLLSADMINITEMSPERPAGE', 'Einträge pro Seite in der Adminansicht');
define('_ADVANCEDPOLLSADMINDATEFORMAT', 'Datumsformat im der Adminansicht');
define('_ADVANCEDPOLLSUSERDATEFORMAT', 'Datumsformat in der Benutzeransicht');
define('_ADVANCEDPOLLSDEFAULTCOLOUR', 'Standardfarbe');
define('_ADVANCEDPOLLSDEFAULTOPTIONCOUNT', 'Standardanzahl der Umfrageoptionen');
define('_ADVANCEDPOLLSDISPLAYBOLD', 'Einträge fettgedruckt anzeigen');
define('_ADVANCEDPOLLSGENERAL', 'Allgemeine Einstellungen'); 
define('_ADVANCEDPOLLSINTERFACE', 'Oberfläche'); 
define('_ADVANCEDPOLLSSCALINGFACTOR', 'Skalierungsfaktor für Ergebnisbalken'); 
define('_ADVANCEDPOLLSUSEREVERSEDNS', 'DNS-Auflösung der IP-Adressen benutzen');
define('_ADVANCEDPOLLSUSERITEMSPERPAGE', 'Einträge pro Seite in der Useransicht');

// reset votes template
define('_ADVANCEDPOLLSCONFIRMVOTESRESET', 'Zurücksetzen der Stimmabgaben bestätigen'); 
define('_ADVANCEDPOLLSRESETVOTESCONFIRM', 'Stimmeabgaben zurücksetzen'); 

// duplicate poll template
define('_ADVANCEDPOLLSCONFIRMDUPLICATE', 'Duplizieren der Umfrage bestätigen');
define('_ADVANCEDPOLLSCANCELDUPLICATE', 'Duplizieren abbrechen');

// voting statistics template
define('_ADVANCEDPOLLSVOTECOUNT', 'Stimme zählen');
define('_ADVANCEDPOLLSSORTVOTES', 'Stimmen sortieren');
define('_ADVANCEDPOLLSSORTVOTESBY', 'Sortiere Stimmen nach');
define('_ADVANCEDPOLLSSORTVOTESORDER', 'Sortierung');
define('_ADVANCEDPOLLSVOTEID', 'Vote-ID');
define('_ADVANCEDPOLLSVOTEIP', 'IP-Addresse');
define('_ADVANCEDPOLLSVOTEOPTIONID', 'Optionen');
define('_ADVANCEDPOLLSVOTERANK', 'Bewertung');
define('_ADVANCEDPOLLSVOTETIME', 'Zeitpunkt');
define('_ADVANCEDPOLLSVOTEUID', 'Benutzername');
define('_ADVANCEDPOLLSADMINVOTINGSTATISTICS', 'Stimmenstatistik');
define('_ADVANCEDPOLLSADMINVOTINGSTATISTICSTABLE', 'Stimmenhistorie');

// voting regulations drop down
define('_ADVANCEDPOLLSCOOKIE', 'Cookie');
define('_ADVANCEDPOLLSFREE', 'Frei');
define('_ADVANCEDPOLLSIPADDRESS', 'IP-Addresse');
define('_ADVANCEDPOLLSUSERID', 'Benutzer-ID');

// tiebreak drop down
define('_ADVANCEDPOLLSALPHABETICAL', 'Alphabetisch');
define('_ADVANCEDPOLLSNONE', 'Keine');
define('_ADVANCEDPOLLSVOTETIMECOUNTBACK', 'Zeit rückwärtszählen');

// multiple select drop down
define('_ADVANCEDPOLLSSINGLE', 'Einfach');
define('_ADVANCEDPOLLSMULTIPLE', 'Mehrfach');
define('_ADVANCEDPOLLSRANKED', 'Bewertet');

// sort order drop down
define('_ADVANCEDPOLLSSORTASCENDING', 'Aufsteigend');
define('_ADVANCEDPOLLSSORTDESCENDING', 'Absteigend');

// error status messages
define('_ADVANCEDPOLLSCREATED', 'Umfrage angelegt');
define('_ADVANCEDPOLLSDELETED', 'Umfrage gelöscht');
define('_ADVANCEDPOLLSDUPLICATED', 'Stimme dupliziert');
define('_ADVANCEDPOLLSUPDATED', 'Umfrage aktualisiert');
define('_ADVANCEDPOLLSVOTESRESETFAILED', 'Zurücksetzen fehlgeschlagen'); 
