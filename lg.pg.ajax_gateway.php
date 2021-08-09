<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_ajax_workspacedefault','Deze pagina is nu uw default werkruimte');
define('lg_ajax_au','Toegewezen gebruiker');
define('lg_ajax_sub','Geabonneerd');
define('lg_ajax_timeadded','Tijd gelogd');
define('lg_ajax_timedeleted','Tijd verwijderd');
define('lg_ajax_timeerr','Er heeft zich een fout voorgedaan bij het loggen van tijd');
define('lg_ajax_timedelerr','Er heeft zich een fout voorgedaan bij het verwijderen van tijd');
define('lg_ajax_foldername','Nieuwe mapnaam');
define('lg_ajax_groupname','Groep naam');
define('lg_ajax_myfilters','Mijn filters');

define('lg_ajax_filtersql','Toon SQL van filter');
define('lg_ajax_showing','alleen eerste %s');

define('lg_ajax_email_sendtestto','adres om naar te mailen');
define('lg_ajax_email_method','Met methode');
define('lg_ajax_email_methodsmtp','SMTP server');
define('lg_ajax_email_methodphp','Ingebouwde PHP mail');
define('lg_ajax_email_sendtest','Test versturen');
define('lg_ajax_email_subject','HelpSpot emailtest');
define('lg_ajax_email_body','Uw uitgaande mail verbinding lijkt goed te werken.');
define('lg_ajax_email_failed','Fout');
define('lg_ajax_email_success','Uw email lijkt verzonden te zijn, controleer uw inbox.');


define('lg_livelookup_table','Overeenkomsten');
define('lg_livelookup_noxml','Live Lookup vereist dat de PHP XML parser is geinstalleerd');
define('lg_livelookup_xmlerror','Er heeft zich een fout voorgedaan');
define('lg_livelookup_notfound','Geen klanten gevonden');
define('lg_livelookup_insertdata','Klantinformatie invoegen');
define('lg_livelookup_xmlparsermsg','De XML parser heeft een fout terug gegeven');
define('lg_livelookup_xmlview','XML bekijken');
define('lg_livelookup_sourcepath','Pad naar bron');
define('lg_livelookup_sourcetype','Type call');
define('lg_livelookup_shellexec','De shell_exec PHP functie is vereist om Live Lookup vanaf de commmandline te starten');
define('lg_livelookup_livelookupnotsetup1','Live Lookup is niet geconfigureerd door uw administrator.');
define('lg_livelookup_livelookupnotsetup2','Live Lookup maakt directe integratie mogelijk met uw bronsystemen die klantgegevens bevatten, zoals CRM, Active Directory en dergelijke. <br /><br />Bekijk <a href="http://www.userscape.com/helpdesk/index.php?pg=kb.page&id=174" target="_blank">hier</a> het overzicht voor meer details.');

define('lg_ajaxfield_noxml','Voor gebruik van AJAX vrije velden is het vereist dat de PHP XML parser geinstalleerd is');
define('lg_ajaxfield_xmlerror','Er heeft zich een fout voor gedaan. Bekijk het error log voor details');
define('lg_ajaxfield_notfound','Geen resultaten terug ontvangen');

define('lg_historysearch_openclose','Open/gesloten');
define('lg_historysearch_date','Aangemaakt op');
define('lg_historysearch_tnote','Aanvraag');

define('lg_ajax_origmsg','-----Oorspronkelijk bericht-----');

define('lg_ajax_newversion','Er is een nieuwe versie van HelpSpot (%s) beschikbaar. Kijk voor details <a href="admin.php?pg=admin">hier</a>');

define('lg_ajax_at_insertmin','Invoegen');

define('lg_ajax_mailboxtestingsuccess','Verbinding geslaagd');
define('lg_ajax_mailboxerror','Fout');

define('lg_ajax_ldapsuccess','Verbinding geslaagd');
define('lg_ajax_ldaperror','Fout');

define('lg_reminderpopup_reqreminders','Aanvraag herinneringen');
define('lg_reminderpopup_submit','Aanmaken');
define('lg_reminderpopup_reminder','Notitie');
define('lg_reminderpopup_date','Datum en tijd');
define('lg_reminderpopup_also','Email herinnering naar');
define('lg_reminderpopup_remerror','Voeg een herinnering toe');

define('lg_ajax_push_notobject','Uw class kon niet geinitieerd worden. Controleer of de class naam in uw pushfile wel overeenkomt met de bestandsnaam.');
define('lg_ajax_push_error','Aanvraag push niet gelukt. Foutmelding ontvangen: ');
define('lg_ajax_push_nofile','De aanvraag pushfile is niet gevonden op deze server.');
define('lg_ajax_push_metaby','Gepushed door');
define('lg_ajax_push_metacomment','Opmerking');
define('lg_ajax_push_metadate','Datum');
define('lg_ajax_push_metato','Aan');
define('lg_ajax_push_metaid','Teruggekregen ID');

define('lg_ajax_select_draft','Een opgeslagen concept herstellen');

define('lg_ajax_nh_error','Fout');
define('lg_ajax_nh_errormsg','We konden geen verbinding maken met de Userscape servers. Dit wordt mogelijk veroorzaakt door een firewall of een netwerkprobleem. Neem <a href="http://www.userscape.com/helpdesk/index.php?pg=request" target="_blank">hier direct contact met ons op</a>.');
define('lg_ajax_nh_success','Dank u, uw vraag is ontvangen!');
define('lg_ajax_nh_success1','We zullen u antwoorden op');
define('lg_ajax_nh_success2','binnenkort.');

define('lg_search_result','Zoekresultaten');
define('lg_search_resultkb','Kennisbank onderdeel resultaten');
define('lg_search_resultforum','Forum resultaten');

define('lg_kbui_private','Prive');
define('lg_kbui_insertlink','Link naar pagina');
define('lg_kbui_linkchapter','Link to hoofdstuk');
define('lg_kbui_linkbook','Link naar onderdeel');
define('lg_kbui_primaryportal','Primaire portaal');

define('lg_stream_loadmore','Meer laden');

define('lg_ajax_valid_wysiwyg_values','
<ul>
	<li>separator - Een regel voor visuele scheiding van knoppengroepen</li>
	<li>tabel - commandos om HTML tabellen te maken</li>
	<li>plaktekst - plakken uit tekstbron</li>
	<li>plakword - plakken uit Microsoft Word</li>
	<li>vet - geselecteerde tekst vet weergeven</li>
	<li>italic - geselecteerde tekst schuin weergeven</li>
	<li>onderstrepen - geselecteerde tekst onderstrepen</li>
	<li>doorstrepen - geselecteerde tekst doorstrepen</li>
	<li>lnks uitlijnen - links uitlijnen</li>
	<li>centreren - centreren</li>
	<li>rechts uitlijnen - rechts uitlijnen</li>
	<li>uitvullen - uitvullen</li>
	<li>lijst bol - lijst met bolletjes</li>
	<li>lijst met nummers - lijst met nummers</li>
	<li>uitspringen - een item uit laten springen</li>
	<li>inspringen - een item in laten springen</li>
	<li>blockquote - HTML blockquote invoegen</li>
	<li>knippen - geselecteerde tekst knippen</li>
	<li>kopieren - geselecteerde tekst naar clipboard kopieren</li>
	<li>plakken - tekst op clipboard</li>
	<li>ongedaan maken - laatste actie ongedaan maken</li>
	<li>herhalen - laatste actie herhalen</li>
	<li>link - maak of wijzig een HTML link</li>
	<li>link verwijderen - verwijder link uit tekst</li>
	<li>afbeelding - voeg afbeelding in</li>
	<li>cleanup - HTML opschonen</li>
	<li>help - help</li>
	<li>code - toon HTML code gegenereerd door WYSIWYG</li>
	<li>hr - voeg horizontale lijn in</li>
	<li>opmaak verwijderen - verwijder alle HTML opmaak</li>
	<li>selecteer geformateerd - lijst met opmaak tekens</li>
	<li>font kiezen - lijst met fonts</li>
	<li>font grootte - wijzig lettergrootte</li>
	<li>stijle selecteren - toon de lijst van aangepaste CSS stijlen</li>
	<li>sub - kleine letters</li>
	<li>sup - grote letters</li>
	<li>tekstkleur - tekstkleur</li>
	<li>achtergrondkl - achtergrondkleur</li>
	<li>charmap - lijst van speciale HTML karakters</li>
</ul>
');

define('lg_theme_changed','Uw thema is gewijzigd');

define('lg_admin_portaltemplates_savebutton','Template opslaan');
define('lg_admin_portaltemplates_viewprev','Bekijke voorgaande aanpassingen aan');
define('lg_admin_portaltemplates_originaltemplate','Originele template');

/* HelpSpot 5 Additions */
define('lg_saved_success', 'Your settings have been saved');
