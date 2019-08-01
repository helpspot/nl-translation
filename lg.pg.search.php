<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_search_customer','Klanten');
define('lg_search_data','Full text');
define('lg_search_advanced','Gedetailleerd');
define('lg_search_tags','Kennis tags');
define('lg_search_tagspick','Tag toevoegen');
define('lg_search_tagsnone','Geen tags toegevoegd om te zoeken');
define('lg_search_tips','Zoektips');
define('lg_search_fulltext','Full text zoeken');
define('lg_search_saveasfilter','Opslaan als filter');
define('lg_search_saveasfilterlabel','Filter naam');
define('lg_search_saveasfilterex','Opmerking: meer geavanceerde filters kunt u maken in Werkruimte->Aanvragen filteren');
define('lg_search_reporttimeclosed','Aanvragen gesloten tussen');
define('lg_search_reporttime','Aanvragen geopend tussen');

define('lg_search_title','Zoeken');
define('lg_search_cust_title','Klanthistorie');
define('lg_search_cust_titletips','Tips voor zoeken in klanthistorie');
define('lg_search_info','Data zoeken');
define('lg_search_infotips','Tips voor full text zoeken');
define('lg_search_all','Alle modules');
define('lg_search_requests','Aanvragen');
define('lg_search_forums','Forums');
define('lg_search_wild','Gebruik * ls wildcard. Bjvoorbeeld: yahoo*, *yahoo.com, *yahoo*');
define('lg_search_boolsearching','Boolean zoeken is mogelijk: + betekent moet aanwezig zijn, - betekent mag niet aanwezig zijn, tussen aanhalingstekens:"zinnen zoeken"');
define('lg_search_request','Aanvraag');
define('lg_search_my_tip1','Gebruik  + voor "moet bevatten", bijvoorbeeld: +printer, +password');
define('lg_search_my_tip2','Gebruik  - voor "mag niet bevatten", bijvoorbeeld: -printer, -password');
define('lg_search_my_tip3','Gebruik " " voor een zin, bijvoorbeeld: "lost my password"');
define('lg_search_my_tip4','Gebruik * als wildcard, bijvoorbeeld print*');
define('lg_search_my_tip5','Combinaties kunnen ook, bijvoorbeeld: +printer +paper -Lexmark, "printer paper" -Lexmark');
define('lg_search_ms_tip1','Gebruik AND om te zoeken op meerdere woorden, bijvoorbeeld: printer AND paper');
define('lg_search_ms_tip2','Gebruik OR om te zoeken op een of meerdere woorden, bijvoorbeeld: printer OR paper');
define('lg_search_ms_tip3','Combineer AND/OR, bijvoorbeeld: (printer AND paper) OR Lexmark');
define('lg_search_ms_tip4','Gebruik " " voor een zin, bijvoorbeeld: "lost my password');
define('lg_search_ms_tip5','Use * as a wildcard: "print*" (quotes required)');
define('lg_search_pg_tip1','Use " " for a phrase: "lost my password"');

// Added for SphinxSearch
define('lg_search_sphinx_tip1','Use * as a wildcard: print*');
define('lg_search_sphinx_tip2','Use - or ! for must not contain: -printer, -password, !printer, !password');
define('lg_search_sphinx_tip3','Use = for must exact form: lost all =passwords (ensures passwords is plural)');
define('lg_search_sphinx_tip4','Use @ to search specific fields: @sEmail "ian@userscape.com", @(sEmail,sTitle) *userscape. Surround the search term with double quotes when searching full email addresses.');
define('lg_search_sphinx_tip5','Valid fields: sFirstName, sLastName, fOpenedVia, sEmail, sPhone, sUserId (for Customer ID), tNote, Custom# (e.g. Custom5)');
define('lg_search_sphinx_tip6','More search modifiers for <a href="http://sphinxsearch.com/docs/current.html#extended-syntax" target="_blank">SphinxSearch are explained here</a>.');
?>
