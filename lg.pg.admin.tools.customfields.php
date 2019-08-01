<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_cfields_title','Vrije velden aanvragen');
define('lg_admin_cfields_create','Een vrij veld maken');
define('lg_admin_cfields_create2','Een vrij veld maken: stap 2');
define('lg_admin_cfields_createnote','Een vrij veld toevoegen is een proces in 2 stappen. Kies eerst het type veld wat u toe wilt voegen, daarna vult u de specifieke eigenschappen van het veld in.');
define('lg_admin_cfields_dropdowndesc','Optimaal om een gestandardiseerd antwoord te verkrijgen');
define('lg_admin_cfields_selsamp','Voorbeeld waarde ');
define('lg_admin_cfields_textdesc','Optimaal voor een korte omschrijving');
define('lg_admin_cfields_checkboxdesc','Ideaal om een aanvraag mee te labelen om later te kunnen filteren en rapporteren.');
define('lg_admin_cfields_lrgtextdesc','Optimaal voor langere tekstinvoer.');
define('lg_admin_cfields_textsamp','Voorbeeld tekstveld');
define('lg_admin_cfields_lrgtextsamp','Voorbeeld groot tekstveld');
define('lg_admin_cfields_numtextdesc','Gebruik dit voor numerieke waarden');
define('lg_admin_cfields_numtextsamp','30');
define('lg_admin_cfields_decimaldesc','Gebruik dit voor decimale waarden');
define('lg_admin_cfields_decimalsamp','5.62');
define('lg_admin_cfields_regexdesc','Valideer de invoer tegen een bepaald formaat (bijvoorbeeld: een postcode)');
define('lg_admin_cfields_regexsamp','/^\d{5}([\-]\d{4})?$/');
define('lg_admin_cfields_ajaxdesc','Vul het tekstveld voor met waarden die dynamisch middels AJAX opgehaald worden. Dit kan geen publiek veld zijn.');
define('lg_admin_cfields_datedesc','Een datum');
define('lg_admin_cfields_datetimedesc','Een datum en tijd');
define('lg_admin_cfields_drilldowndesc','Selectielijst met meerdere niveaus');
define('lg_admin_cfields_step2','Ga naar stap 2');
define('lg_admin_cfields_createfield','Maak veld aan');
define('lg_admin_cfields_savefield','Sla veld op');
define('lg_admin_cfields_timenote','Dit proces kan enkele minuten duren. Voer geen andere acties uit tot het proces voltooid is.');
define('lg_admin_cfields_reqfield','Dit is een verplicht veld');
define('lg_admin_cfields_webform','Toon dit veld in een publiek aanvraagformulier');
define('lg_admin_cfields_fieldname','Veldnaam');
define('lg_admin_cfields_textsize','Lengte van het tekstveld');
define('lg_admin_cfields_textsizedesc','Een getal tussen 0 en 200');
define('lg_admin_cfields_lrgtextrows','Aanal regels in het tekstveld');
define('lg_admin_cfields_ajaxurl','AJAX data URL');
define('lg_admin_cfields_ajaxurldesc','De URL waar het script of bestand zich bevindt wat de data terugstuurt naar Helpspot, in het formaat zoals dat <a href="http://www.userscape.com/helpdesk/index.php?pg=kb.page&id=158" target="_blank">hier</a>gespecificeerd wordt.');
define('lg_admin_cfields_decimalplaces','Aantal decimalen');
define('lg_admin_cfields_regexexpression','Javascript uitdrukking');
define('lg_admin_cfields_regexexpressiondesc','Uw uitdrukking moet Javascript compatible zijn.');
define('lg_admin_cfields_regextest','Test');
define('lg_admin_cfields_regextestvaluedesc','Geef een waarde op om te testen aan de uitdrukking');
define('lg_admin_cfields_regexreq','Uitdrukking vereist');
define('lg_admin_cfields_regexvalid','De uitdrukking is niet geldig en veroorzaakt een Javascript fout, corrigeer de uitdrukking');
define('lg_admin_cfields_drilldown','Drill down lijst');
define('lg_admin_cfields_drillmanage','Lijst beheren');
define('lg_admin_cfields_drillview','Preview van de lijst');
define('lg_admin_cfields_drilladdalert','U kunt maar 1 item tegelijk aan de lijst toevoegen');
define('lg_admin_cfields_drillremovealert','Weet u zeker dat u dit element wilt verwijderen? Eventuele sub elementen worden ook verwijderd.');
define('lg_admin_cfields_drillquotes','Aanhalingstekens zijn niet toegestaan in een drill down lijst');
define('lg_admin_cfields_removeitem','Weet u zeker dat u dit item wilt verwijderen?');
define('lg_admin_cfields_options','Opties');
define('lg_admin_cfields_visibility','Zichtbaarheid van vrij veld');
define('lg_admin_cfields_visibility_cat','Zichtbaar in geselecteerde categorien');
define('lg_admin_cfields_visibility_all','Altijd zichtbaar (in alle categorien en als er geen categorie gekozen is)');
define('lg_admin_cfields_addlistitem','Item toevoegen');
define('lg_admin_cfields_enterlistitem','Items aan lijst toevoegen');
define('lg_admin_cfields_closecolors','Close');
define('lg_admin_cfields_fbadded',' Vrij veld toegevoegd');
define('lg_admin_cfields_fbdeleted','Dit veld is verwijderd');
define('lg_admin_cfields_fbnotdeleted','Het veld is niet verwijderd, controleer het error log.');
define('lg_admin_cfields_fbedited',' is gewijzigd');
define('lg_admin_cfields_moved','Het veld is verplaatst');
define('lg_admin_cfields_edit','Bewerken: ');
define('lg_admin_cfields_delete','Vrij veld verwijderen');
define('lg_admin_cfields_delwarn','Weet u zeker dat u dit veld wilt verwijderen? U kunt dit niet ongedaan maken. Alle data gaat verloren. Deze procedure kan enkele minuten duren. Klik op annuleren als u niet verder wilt gaan.');
define('lg_admin_cfields_colname','Naam');
define('lg_admin_cfields_colid','ID');
define('lg_admin_cfields_coltype','Type');
define('lg_admin_cfields_colreq','Verplicht');
define('lg_admin_cfields_colpub','Publiek');
define('lg_admin_cfields_erfieldname','Geef een naam op voor het veld');
?>
