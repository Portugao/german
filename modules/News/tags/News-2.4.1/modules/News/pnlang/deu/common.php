<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) Zikula German Translation Team
 * @link http://www.zikula.de
 * @version $Id$
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @translation: Carsten Volmer (herr.vorragend) <carsten@zikula.org>
 */

// general
define('_NEWS', 'News');
define('_NEWS_AUTHOR', 'Autor');

// singular/plural
define('_NEWS_STORY', 'Beitrag');
define('_NEWS_STORY_LC', 'Beitrag');
define('_NEWS_STORIES', 'Beiträge');

// status
define('_NEWS_ARCHIVED', 'Archiviert');
define('_NEWS_DRAFT', 'Entwurf');
define('_NEWS_PENDING', 'Wartend');
define('_NEWS_PUBLISHED', 'Veröffentlicht');
define('_NEWS_REJECTED', 'Zurückgezogen');
define('_NEWS_SCHEDULED', 'Terminiert');

// common defines
define('_NEWS_ALLOWCOMMENTS', 'Kommentare für diesen Beitrag erlauben');
define('_NEWS_NOCOMMENTS', 'Keine Kommentierung');
define('_NEWS_COMMENT', '1 Kommentar');
define('_NEWS_COMMENTS', '%count% Kommentare');
define('_NEWS_COMMENTSQ', 'Kommentare?');
define('_NEWS_POSTEDBYANDON', 'Geschrieben von %username% am %date%');
define('_NEWS_READ', '1 Aufruf');
define('_NEWS_READS', '%count% Aufrufe');
define('_NEWS_SELFWRITTEN', ', %count% selbst geschrieben');
define('_NEWS_NOARTICLES', 'keine Beiträge');
define('_NEWS_RSSFEED', 'RSS Feed');
define('_NEWS_NOARTICLESFOUND', 'Keine veröffentlichten Beiträge vorhanden');
define('_NEWS_NOARTICLESFOUNDINCAT', 'Keine veröffentlichten Beiträge in Kategorie %cat% vorhanden');

// date format nice defines
define('_NEWS_DAYSAGO', 'vor %days% Tag/e');
define('_NEWS_DAYSFROMNOW', 'vor %days% Tag/e ab jetzt');
define('_NEWS_HOURSAGO', 'vor %hours% Stunde/n');
define('_NEWS_HOURSFROMNOW', 'vor %hours% Stunde/n ab jetzt');
define('_NEWS_MINSAGO', 'vor %mins% Minute/n');
define('_NEWS_MINSFROMNOW', 'vor %mins% Minute/n ab jetzt');
define('_NEWS_SECSAGO', 'vor %secs% Sekunde/n');
define('_NEWS_SECSFROMNOW', 'vor %secs% Sekunde/n ab jetzt');
define('_NEWS_YESTERDAY', 'Gestern');
define('_NEWS_TOMORROW', 'Morgen');

// new/modify templates
// these are located in the common file to support user submission
// the following string is used in javascript, #{chars} is like %chars% in pnML
// for more information see http://prototypejs.org/api/template
// modules/News/pnjavascript/sizecheck.js
define('_NEWS_CHARSUSED', '#{chars} Zeichen von 65536');
define('_NEWS_CONTENTTYPE', 'Formatierungstyp');
define('_NEWS_EXTENDEDTEXT', 'Erweiterter Text');
define('_ARTICLETITLE_FLC', 'Beitragstitel');
define('_NEWS_NEWSARTICLEPREVIEW', 'Beitragsvorschau');

define('_NEWS_ATTRIBUTES', 'Beitragsattribute');
define('_NEWS_ATTRIBUTE_NEW', 'Neue Beitragsattribute');
define('_NEWS_ENABLEATTRIBUTION', 'Aktiviere Attribute');
define('_NEWS_FORMATTEDTEXT', 'Formatierter Text');
define('_NEWS_FROM', 'Startdatum');
define('_NEWS_HOMETEXT', 'Textanlauf');
define('_NEWS_INHOME', 'Auf der Titelseite anzeigen');
define('_NEWS_MAXCHARS', '(max. 65536 Zeichen)');
define('_NEWS_NOTES', 'Anmerkungen anzeigen');
define('_NEWS_OVERVIEW', 'Info');
define('_NEWS_ARTICLECONTENT', 'Beitragsinhalt');
define('_NEWS_PLAINTEXT', 'normaler Text');
define('_NEWS_POSTORPREVIEW', 'Aktion');
define('_NEWS_POSTSTORY', 'Freigabe');
define('_NEWS_PUBLISHEDSTATUS', 'Status');
define('_NEWS_SUBMIT', 'Beitrag einreichen');
define('_NEWS_PREVIEW', 'Vorschau');
define('_NEWS_PREVIEWSTORY', 'Vorschau');
define('_NEWS_PUBLICATIONSHOW', 'Freigabeoptionen anzeigen');
define('_NEWS_PUBLICATIONHIDE', 'Freigabeoptionen verstecken');
define('_NEWS_NOLIMIT', 'Kein Enddatum');
define('_NEWS_TO', 'Enddatum');
define('_NEWS_UNLIMITED', 'ohne Zeitsteuerung');
