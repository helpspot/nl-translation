<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_portals_title','Secondaire portalen');
define('lg_admin_portals_instructions','Installatie instructies');
define('lg_admin_portals_viewinstructions','Instructies bekijken');
define('lg_admin_portals_instructionsnote','Deze instructies hoeven alleen uitgevoerd te worden als de URL is aangepast. Zo niet, dan is er geen reden om de config.php of index.php bestanden te updaten.');
define('lg_admin_portals_desc','Secondaire portalen worden gebruikt om meerdere websites, klantengroepen of divisies te ondersteunen. Een portaal aanmaken is een 2 stappen proces. De eerste stap is het formulier hieronder invullen. De tweede stap omvat de configuratie van bestanden op de server. Meer informatie over secundaire portalen is te vinden in de <a href="http://www.userscape.com/helpdesk/index.php?pg=kb.chapter&id=63" target="_blank">admin handleiding</a>.');
define('lg_admin_portals_showdel','Toon inactieve portalen');
define('lg_admin_portals_noshowdel','Terug naar portalen');
define('lg_admin_portals_colid','ID');
define('lg_admin_portals_colname','Portaal');
define('lg_admin_portals_colhost','URL');
define('lg_admin_portals_visit','bezoek');
define('lg_admin_portals_add','Een secundair portaal toevoegen');
define('lg_admin_portals_edit','Portaal bewerken');
define('lg_admin_portals_del','Portaal inactief maken');
define('lg_admin_portals_delwarn','Weet u zeker dat u dit portaal inactief wilt maken?');
define('lg_admin_portals_buttonadd','Portaal toevoegen');
define('lg_admin_portals_buttonsave','Portaal opslaan');
define('lg_admin_portals_sportalname','Portaal naam');
define('lg_admin_portals_sportalnameex','Naam die getoond wordt in de portaalbanner');
define('lg_admin_portals_terms_enable','Ask customer to accept privacy policy and terms');
define('lg_admin_portals_portalterms','URL of terms of service');
define('lg_admin_portals_portalprivacy','URL of privacy policy');
define('lg_admin_portals_portalterms_info','If you enter a URL, then the users must accept before submitting a request');
define('lg_admin_portals_sportalphone','Telefoonnummer op de portaal');
define('lg_admin_portals_sportalphoneex','Telefoonnummer om weer te geven op de portaal');
define('lg_admin_portals_tportalmsg','Bericht op de homepage van de portaal');
define('lg_admin_portals_tportalmsgex','Als u dit leeglaat, dan zal het bericht van de primaire portaal getoond worden. HTML is toegestaan.');
define('lg_admin_portals_shost','Portaal URL');
define('lg_admin_portals_shostex','URL van de homepage. Dit mag zowel hetzelfde domein zijn als de primaire portaal als ook een ander domein.');
define('lg_admin_portals_shostnote','Als u deze instelling verandert dan moet config.php bijgewerkt worden');
define('lg_admin_portals_sportalpath','Pad naar bestandsmap');
define('lg_admin_portals_sportalpathex','De map die overeenkomt met de URL hierboven. Het pad moet op dezelfde server zijn als de primaire portaal.');
define('lg_admin_portals_cfs','Vrije velden');
define('lg_admin_portals_cfsex','Geselecteerde vrije velden zijn beschikbaar in dit portaal');
define('lg_admin_portals_cfsempty','Er zijn geen publieke vrije velden beschikbaar.');
define('lg_admin_portals_cats','Categorien');
define('lg_admin_portals_catsex','Geselecteerde categorien zullen beschikbaar zijn in deze portaal');
define('lg_admin_portals_catsempty','Er zijn geen publieke categorien aanwezig.');
define('lg_admin_portals_kbs','Kennisbank onderdelen');
define('lg_admin_portals_kbsex','Geselecteerde onderdelen zullen in de portaal beschikbaar zijn');
define('lg_admin_portals_kbsempty','Er zijn geen openbare kennisbank onderdelen beschikbaar.');
define('lg_admin_portals_forums','Forums');
define('lg_admin_portals_forumsex','Geselecteerde forums zullen beschikbaar zijn in deze portaal');
define('lg_admin_portals_forumsempty','Er zijn geen publieke forums beschikbaar.');
define('lg_admin_portals_mailboxes','View voor ingelogde klanten');
define('lg_admin_portals_mailboxesex','Ingelogde klanten op dit portaal zullen aanvragen zien die gemaakt zijn via deze portaal en ook de aanvragen die via de geselecteerde mailboxen binnen zijn gekomen.');
define('lg_admin_portals_mailboxesempty','Geen mailboxen beschikbaar.');
define('lg_admin_portals_sendfrom','Stuur emails vanuit');
define('lg_admin_portals_sendfromex','Email gegenereerd vanuit dit portaal zullen verstuurd worden vanuit deze mailbox.');
define('lg_admin_portals_sendfromdef','Default mailbox');
define('lg_admin_portals_created','Portaal aangemaakt');
define('lg_admin_portals_edited','Portal bewerkt');
define('lg_admin_portals_ername','Het is verplicht de portaal een naam te geven');
define('lg_admin_portals_erhost','Een URL is vereist');
define('lg_admin_portals_erpath','Een bestandspad is vereist');

define('lg_admin_portals_inst_step1','Stap 1');
define('lg_admin_portals_inst_step2','Stap 2');
define('lg_admin_portals_inst_step3','Stap 3');
define('lg_admin_portals_inst_step4','Stap 4');
define('lg_admin_portals_inst_step1_p1','Maak een bestand met de naam config.php op deze locatie');
define('lg_admin_portals_inst_step1_p2','Knip en plak de onderstaande tekst in het config.php bestand');
define('lg_admin_portals_inst_step2_p1','Maak een bestand met de naam index.php op deze locatie');
define('lg_admin_portals_inst_step2_p2','Knip en plak de onderstaande tekst in het bestand index.php');
define('lg_admin_portals_inst_step3_p1','Maak een lege map met de naam <b>custom_templates</b> op deze locatie');
define('lg_admin_portals_inst_step3_p2','Dit is waar u uw eigen versies van de templates voor de betreffende portaal kunt opslaan. Deze map werkt precies hetzelfde als de /custom_templates map van het primaire portaal, maar is specifiek voor alleen dit secundaire portaal.');
define('lg_admin_portals_inst_step3_p3','De bestandstructuur van');
define('lg_admin_portals_inst_step3_p4','zou zichtbaar moeten zijn zoals hieronder');
define('lg_admin_portals_inst_note2','Als u wilt dat emails naar klanten een link bevatten naar dit specifieke portaal, vergeet dan niet om de <u>publieke notities naar klanten</u> template op de mailbox pagina (Admin->Mailboxen) aan te passen. Vervang <b>##REQUESTCHECKURL##</b> door <b>##PORTAL%s_REQUESTCHECKURL##&id=##ACCESSKEY##</b> in zowel de tekst als de HTML versie van de emailtemplate.');
define('lg_admin_portals_inst_note1','Het portaal zou nu zichtbaar moeten zijn op');

/* HelpSpot 5 Additions */
define('lg_admin_portals_instructionsnote_secondary', 'However, if portal files failed to be created, or need to be created manually, you can do the following.');
define('lg_admin_portals', 'Portals');
define('lg_admin_portals_colprimary', 'Is Primary');
define('lg_admin_portals_sportalprimary', 'Use as Primary Portal');
define('lg_admin_portals_sportalprimaryex', 'Override the primary portal and use this portal in its place. Only one Secondary Portal can be used as the primary portal.');
define('lg_admin_portals_erprimary', 'Only one secondary portal can act has the primary portal');
define('lg_admin_portals_ernonprimarypath', 'Secondary portals cannot have the same file path as the primary portal');
define('lg_admin_portals_require_auth', 'Require Portal Authentication');
define('lg_admin_portals_require_auth_ex', 'Users will not be able to submit requests or browse knowledge bases until they login');
define('lg_admin_portals_instructionsnote_main', 'These steps are performed automatically by HelpSpot.');
define('lg_admin_portals_inst_step2_p3', 'The file structure of');
define('lg_admin_portals_inst_step2_p4', 'should appear as below');
