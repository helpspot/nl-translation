<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_kb_title','Kennisbank onderdelen');
define('lg_kb_home','Kennisbank home');
define('lg_kb_book','Onderdeel');
define('lg_kb_toc','Inhoudsopgave');
define('lg_kb_tagcloud','Kennisbank tag cloud');
define('lg_kb_highlighted','Uitgelichte paginas');
define('lg_kb_notags','Nog geen tags aanwezig');
define('lg_kb_nohighlights','Geen uitgelichte onderwerpen aanwezig');
define('lg_kb_public','Publieke Kennisbank onderdelen');
define('lg_kb_private','Prive Kennisbank onderdelen');
define('lg_kb_addbook','Voeg een onderdeel toe');
define('lg_kb_bookorder','Volgorde van onderdelen');
define('lg_kb_manage','Beheren');
define('lg_kb_order','Volgorde');
define('lg_reports_productivity', 'Productiviteit');
define('lg_kb_saveorder','Volgorde opslaan');
define('lg_kb_orderchanged','Volgorde gewijzigd');
define('lg_kb_deletekbcheck','Weet u zeker dat u dit onderdeel wilt verwijderen? U kunt dit niet ongedaan maken en het kan enkele minuten duren.');
define('lg_kb_addkb','Kennisbank onderdeel toevoegen');
define('lg_kb_addbutton','Kennisbank onderdeel toevoegen');
define('lg_kb_editbutton','Wijzigingen opslaan');
define('lg_kb_edit','Bewerken:');
define('lg_kb_deletekb','Verwijder onderdeel');
define('lg_kb_name','Onderdeel titel');
define('lg_kb_desc','Omschrijving');
define('lg_kb_descnote','Deze korte omschrijving verschijnt in de portaal bij de titel van het onderdeel');
define('lg_kb_chooseeditors','Kies redacteurs voor dit onderdeel');
define('lg_kb_editordesc','Redacteuren kunnen alle inhoud van een onderwerp bewerken');
define('lg_kb_editors','Redacteurs');
define('lg_kb_privatelabel','Prive');
define('lg_kb_booktype','Type onderdeel');
define('lg_kb_booktype_public','Publiek');
define('lg_kb_booktype_private','Prive');
define('lg_kb_privatelabeldesc','Prive onderdelen zijn alleen toegankelijk voor gebruikers met een HelpSpot account.');
define('lg_kb_bookadded','Kennisbank onderdeel toegevoegd');
define('lg_kb_bookupdated','Kennisbank onderdeel bijgewerkt');
define('lg_kb_bookdel','Kennisbank onderdeel verwijderd');
define('lg_kb_downloads','Downloads');
define('lg_kb_editbook','Onderdeel bewerken');
define('lg_kb_addchap','Hoofdstuk toevoegen');
define('lg_kb_editchap','Hoofdstuk bewerken');
define('lg_kb_addpage','Pagina toevoegen');
define('lg_kb_pagedata','Pagina data');
define('lg_kb_pageid','ID');
define('lg_kb_createdon','Gemaakt op');
define('lg_kb_updatedon','Laatst bijgewerkt');
define('lg_kb_createdby','Gemaakt door');
define('lg_kb_lastupdateby','Laatst bijgewerkt door');
define('lg_kb_helpfulness','Waardering');
define('lg_kb_highlightedlabel','Uitgelicht');
define('lg_kb_pagehidden','Deze pagina is verborgen');
define('lg_kb_editpage','Pagina bewerken');
define('lg_kb_viewinportal','Bekijken in portaal');
define('lg_kb_clearhelpful','reset');
define('lg_kb_clearhelpfulcheck','Weet u zeker dat u de stemmen wilt wissen? U kunt dit niet ongedaan maken.');
define('lg_kb_chapname','Hoofdstuk titel');
define('lg_kb_pagename','Pagina titel');
define('lg_kb_isappen','Is een aanhangsel');
define('lg_kb_appendesc','Aanhangsels verschijnen vanzelf aan het einde van het onderdeel en worden niet genummerd.');
define('lg_kb_hidden','Verborgen');
define('lg_kb_hiddendesc','Verborgen hoofdstukken zijn alleen zichtbaar voor redacteurs.');
define('lg_kb_hiddenpagedesc','Verborgen paginas zijn alleen zichtbaar voor redacteuren.');
define('lg_kb_orderafter','Volgorde in hoofdstuk');
define('lg_kb_orderinbook','Volgorde in onderdeel');
define('lg_kb_inbook','Onderdeel');
define('lg_kb_firstchap','Eerste hoofdstuk in het onderdeel');
define('lg_kb_after','Na:');
define('lg_kb_deletechap','Verwijder hoofdstuk');
define('lg_kb_deletechapwarn','Weet u zeker dat dit hoofdstuk wilt verwijderen? Hiermee verwijderd u ook meteen alle paginas in het hoofdstuk. U kunt dit niet ongedaan maken en het kan enkele minuten duren.');
define('lg_kb_firstpage','Eerste pagina in het hoofdstuk');
define('lg_kb_deletepage','Verwijder pagina');
define('lg_kb_deletepagewarn','Weet u zeker dat u deze pagina wilt verwijderen? Dit kan niet ongedaan gemaakt worden.');
define('lg_kb_pagebody','Pagina HTML');
define('lg_kb_pagedetails','Pagina details');
define('lg_kb_highlight','Licht pagina uit');
define('lg_kb_highlightdesc','Laat de pagina meer opvallen in de inhoudsopgave.');
define('lg_kb_related','Verwante paginas');
define('lg_kb_addeditrelated','Selecteer verwante paginas');
define('lg_kb_download','Downloads');
define('lg_kb_adddownload','Voeg een bestand toe');
define('lg_kb_inchapter','Hoofdstuk');
define('lg_kb_deldoc','Verwijderen');
define('lg_kb_deldoccheck','Weet u zeker dat u dit document wilt verwijderen? Dit kan niet ongedaan gemaakt worden.');
define('lg_kb_savepages','Paginas opslaan');
define('lg_kb_imageinsert','Afbeelding upload/selectie');
define('lg_kb_uploadimage','Afbeelding uploaden');
define('lg_kb_selectimagelabel','Selecteer de afbeelding die u in wilt voegen');
define('lg_kb_noimages','Geen afbeeldingen voor deze pagina');
define('lg_kb_selectimage','Selecteer afbeelding');
define('lg_kb_deleteimage','Verwijder afbeelding');
define('lg_kb_deleteimageconf','Weet u zeker dat u deze afbeelding wilt verwijderen? Als de afbeelding al in een pagina is verwerkt zal er een "gebroken afbeeldingslink" getoond worden.');

define('lg_kb_er_noname','Geef een naam op voor dit onderdeel');
define('lg_kb_nochapters','Nog geen hoofdstukken aanwezig');
define('lg_kb_er_nochapname','Geef een titel op voor dit hoofdstuk');
define('lg_kb_er_nopagename','Geef een titel op voor deze pagina');
?>
