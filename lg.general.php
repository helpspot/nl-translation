<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

//Language used in WYSIWYG - to change you must provide a 639-2 abbreviation from this list: http://www.loc.gov/standards/iso639-2/englangn.html
// The language must also be available. You can see the ones available in this folder: js/tiny_mce/langs
define('lg_WYSIWYG_Lang','en');

define('lg_inbox','Inbox');
define('lg_email','Email');
define('lg_username','Username');
define('lg_password','Password');
define('lg_sessionexpired','HelpSpot Sessie Verlopen');
define('lg_js_notification','Notificatie');
define('lg_js_error','Error');
define('lg_js_confirmation','Bevestig');
define('lg_button_ok','OK');
define('lg_button_cancel','Annuleren');
define('lg_button_close','Sluiten');
define('lg_mobilehs','Mobiele Login');
define('lg_maxattempts','Login mislukt. 5 pogingen verbruikt, wacht a.u.b. een minuut voor uw volgende poging.');
define('lg_loginfailed','Login mislukt. Probeer het a.u.b. nogmaals');
define('lg_logintitle','Login');
define('lg_loginbutton','Inloggen');
define('lg_emailpassword','Reset Password');
define('lg_emailpasswordsent','De link om uw password te resetten is verstuurd. Controleer uw email.');
define('lg_providemail','Geef een geldig emailadres op');
define('lg_logout','Log uit');
define('lg_prefs','Voorkeuren');
define('lg_spam','SPAM');
define('lg_trash','Trash');
define('lg_error','Fout');
define('lg_done','Gereed');
define('lg_errorbox','Er heeft zich een fout voorgedaan, zie hieronder.');
define('lg_databaseerror','Er heeft zich een databasefout voor gedaan.');
define('lg_inactive_text','inactief');
define('lg_inactive','<span class="red"> - '.lg_inactive_text.'</span>');
define('lg_restore','Herstellen');
define('lg_restorewarn','Weet u zeker dat u wilt herstellen?');
define('lg_default','Default');
define('lg_out','Uit');
define('lg_enable','Inschakelen');
define('lg_disable','Uitschakelen');
define('lg_cancel','Annuleren');
define('lg_close','Sluiten');
define('lg_or','of');
define('lg_saveas','Opslaan als');
define('lg_download','Download');
define('lg_attach','Attach');
define('lg_reattach','Reattach');
define('lg_admin','Administrator');
define('lg_loadingwait','Bezig met laden..... even geduld');
define('lg_noassign','Niet toegewezen');
define('lg_documentation','Documentatie & Support');
define('lg_forums','Forums');
define('lg_academy','Training');
define('lg_rss','RSS Feed');
define('lg_social','Social');
define('lg_partner','Affiliate Program');
define('lg_betafeedback','Beta Feedback');
define('lg_twitter','Twitter');
define('lg_twitter_ex','Chat with us on Twitter');
define('lg_facebook','Facebook');
define('lg_facebook_ex','Like ons op Facebook');
define('lg_email_ex','Spread the word');
define('lg_trialexpires','Uw trial verloopt');
define('lg_purchase','Aankopen');
define('lg_enabled','Inschakeld');
define('lg_disabled','Uitgeschakeld');
define('lg_setorder','Volgorde');
define('lg_trialover','Uw trial is voorbij');
define('lg_trialnote','Uw trial is verlopen. Bezoek de website van Userscape voor informatie en aankoop van een licentie');
define('lg_trialcustid','Customer ID');
define('lg_trialupload','Licentie');
define('lg_trialbutton','Upload Licentie');
define('lg_mailrule','Mail Regel Overeenkomst');
define('lg_automation','Automation Overeenkomst');
define('lg_trigger','Trigger Overeenkomst');
define('lg_notified','Ingelicht');
define('lg_notifiedsms','Ingelicht via SMS');
define('lg_sp_check','Controleer spelling');
define('lg_sp_resume','Hervat');
define('lg_sp_nomisspell','Geen verkeerde spelling gevonden');
define('lg_sp_nosugg','Geen Suggesties');
define('lg_sp_revert','Terugdraaien naar');
define('lg_sp_close','Sluiten');
define('lg_sp_checking','Bezig met controleren...');
define('lg_quicktimeselect','Snel tijdspad selecteren');
define('lg_quicktimeselectalltime','Alle tijden en data');
define('lg_quicktimeselect_today','Vandaag');
define('lg_quicktimeselect_yesterday','Gisteren');
define('lg_mr_emailcusterror','Mail Regel ERROR: instant antwoord email naar klant MISLUKT. De emailserver van de klant geeft de volgende foutmelding');
define('lg_at_emailcusterror','Automation ERROR: EMAIL MISLUKT. De emailserver gaf de volgende foutmelding');
define('lg_at_reqpusherror1','Request Push ERROR: ');
define('lg_at_reqpusherror2','Request Push ERROR: Uw class kon niet geinitieerd worden. Controleer de class naam in uw push file om er zeker van te zijn dat deze overeenkomt met de bestandsnaam.');
define('lg_systemname','Systeem');
define('lg_systemnameportal','Help Desk Boodschap');
define('lg_jsmenu_appresponseempty','Niets aanwezig. Gebruik de knop hierboven om een nieuw item aan te maken.');
define('lg_jsmenu_nokb','Geen Kennisbank items beschikbaar');
define('lg_jsmenu_respmostused','Meest gebruikt');
define('lg_jsmenu_manageresponses','Antwoorden beheren');
define('lg_textversion','Tekst Versie');
define('lg_htmlversion','HTML Versie');
define('lg_subjectline','Betreft regel');
define('lg_no_wysiwyg_textarea_formatting','Opmaak opties');
define('lg_markdown_format_label','Syntax van opgemaakte tekst');
define('lg_preview','Preview');
define('lg_details','Details');
define('lg_requests','Verzoeken');
define('lg_cumulative_percent','Cumulatief percentage');
define('lg_maintenance_title','Onderhoudsmodus');
define('lg_maintenance_mode','HelpSpot is door de beheerder in de onderhoudsmodus gezet. Probeer het later nog eens.');
define('lg_maintenance_off','Onderhoudsmodus uitschakelen (alleen voor admins)');
define('lg_default_mailbox','Default Mailbox');
define('lg_primaryportal','Primair Portaal');
define('lg_selectportal','Kies een Portaal');
define('lg_licenseuploader','Uw licentie heeft minder gebruikers dan u nu actief heeft. Daarom zijn enkele gebruikers gedeactiveerd.');
define('lg_licnotvalid','Licentie is niet geldig');
define('lg_sort','Sorteren');
define('lg_to','tot');
define('lg_and','en');
define('lg_menu','Menu');
define('lg_everyone','Iedereen');
define('lg_onlyme','Alleen ik');
define('lg_mypermgroup','Mijn groep');
define('lg_permgroup','Rechtengroep...');
define('lg_selectedppl','Specifieke mensen...');
define('lg_request_initassign','Toegekend bij aanmaken');
define('lg_inline_image','afbeelding');
define('lg_checkbox_checkall', 'Check/Uncheck All');
define('lg_latestblog', 'News From HelpSpot');
define('lg_newsblog', 'News');
define('lg_passwordresetfor','Password reset link voor: %s');
define('lg_passwordresetcomplete','Password reset voor: %s');
define('lg_passwordresetsent','Een nieuw password is verstuurd, controleer uw email.');
define('lg_passwordresetexpired','Reset link verlopen, probeer het opnieuw.');
define('lg_passwordreset_email_reset','Klik op de link hieronder om uw password te resetten. Een nieuw password wordt automatisch gegenereerd en naar dit emailadres gestuurd. Attentie: deze link verloopt na 15 minuten.

RESET LINK:
%s');
define('lg_passwordreset_email_complete','Uw password is gereset.

Nieuw password:
%s

U kunt uw password zelf veranderen in het menu rechtsboven, onder Voorkeuren.');

//This is a regular expression to match the different ways various versions of Microsoft Outlook mark the orginal part of an
//	email message. This is known to work in Outlook 2003 and Outlook Express. You may need to customize it if your organization
//	uses a custom separator.
define('lg_outlookseparator','/-----\s*Oorspronkelijk bericht\s*-----/');	 

//time
define('lg_year','jaar');
define('lg_month','maand');
define('lg_week','week');
define('lg_day','dag');
define('lg_days','dagen');
define('lg_hour','uur');
define('lg_hours','uren');
define('lg_minute','minuut');
define('lg_years','jaren');
define('lg_months','maanden');
define('lg_weeks','weken');
define('lg_minutes','minuten');
define('lg_second','seconde');
define('lg_seconds','seconden');
define('lg_creation','verzoek aangemaakt op %s');
define('lg_sincepost','%s sinds eerste verschijning');
define('lg_selectdate','Selecteer een datum');
define('lg_selectdatetime','Selecteer een datum en tijd');

// lookups
define('lg_lookup_email','Email');
define('lg_lookup_phone','Telefonisch');
define('lg_lookup_walkin','Binnen gelopen');
define('lg_lookup_mail','Mail');
define('lg_lookup_webform','Web formulier');
define('lg_lookup_other','Anders');
define('lg_lookup_webservice','Web Service');
define('lg_lookup_forum','Forum');
define('lg_lookup_im','Instant Messenger');
define('lg_lookup_fax','Fax');
define('lg_lookup_voicemail','Voicemail');
define('lg_lookup_staffinit','Door medewerker gestart');
define('lg_lookup_widget','Tab Widget');

define('lg_lookup_1','Overgedragen van "%s" naar "%s"');
define('lg_lookup_2','Vrij veld "%s" veranderd van "%s" naar "%s"');
define('lg_lookup_3','Aanvraag veranderd van "%s" naar "%s"');
define('lg_lookup_4','Status veranderd van "%s" naar "%s"');
define('lg_lookup_7','Aanvraag veranderd van "%s" naar "%s"');
define('lg_lookup_8','Categorie veranderd van "%s" naar "%s"');
define('lg_lookup_9','Customer ID veranderd van "%s" naar "%s"');
define('lg_lookup_10','Voornaam veranderd van "%s" naar "%s"');
define('lg_lookup_11','Achternaam veranderd van "%s" naar "%s"');
define('lg_lookup_12','Email veranderd van "%s" naar "%s"');
define('lg_lookup_13','Telefoonnummer veranderd van "%s" naar "%s"');
define('lg_lookup_14','Vrij veld "%s" is bijgewerkt');
define('lg_lookup_15','Rapportage tags veranderd naar');
define('lg_lookup_17','Automatisch overgedragen van "%s" naar "%s"');
define('lg_lookup_18','Vanwege Out of Office overgedragen van "%s" naar "%s"');
define('lg_lookup_19','Naar trash verplaatst');
define('lg_lookup_20','Verwijderd uit trash');
define('lg_lookup_21','Samengevoegde aanvraag %s');
define('lg_lookup_22','Batchgewijs beantwoorden/wijzigen uitgevoerd');
define('lg_lookup_23','Email onderwerp gewijzigd van "%s" naar "%s"');
define('lg_lookup_24','Afzender veranderd van "%s" naar "%s"');
define('lg_lookup_25','Notitie omgezet van %s omgezet in een nieuwe aanvraag');
define('lg_lookup_26','Notitie (#%s) omgezet in nieuwe aanvraag: %s');

// custom field name lookups
define('lg_lookup_cfields_dropdown','Voorgevulde lijst');
define('lg_lookup_cfields_text','Tekstveld');
define('lg_lookup_cfields_lrgtext','Groot tekstveld');
define('lg_lookup_cfields_checkbox','Checkbox');
define('lg_lookup_cfields_numfield','Numeriek veld');
define('lg_lookup_cfields_decimal','Decimaal veld');
define('lg_lookup_cfields_regex','Normale uitdrukkingsveld');
define('lg_lookup_cfields_ajax','AJAX selectieveld');
define('lg_lookup_cfields_date','Datumveld');
define('lg_lookup_cfields_datetime','Datum- en tijdveld');
define('lg_lookup_cfields_drilldown','Drill Down lijst');

// filter columns
define('lg_lookup_filter_custname','Klant');
define('lg_lookup_filter_lastname','Achternaam');
define('lg_lookup_filter_custemail','Email');
define('lg_lookup_filter_custphone','Telefoon');
define('lg_lookup_filter_custid','Klant ID');
define('lg_lookup_filter_emailtitle','Email onderwerp');
define('lg_lookup_filter_timeopen','Geopend');
define('lg_lookup_filter_timeopen2','Geopend op datum');
define('lg_lookup_filter_timeclosed','Gesloten');
define('lg_lookup_filter_timeclosed2','Gesloten op datum');
define('lg_lookup_filter_trashedon','Naar trash op datum');
define('lg_lookup_filter_category','Categorie');
define('lg_lookup_filter_status','Status');
define('lg_lookup_filter_open','Open');
define('lg_lookup_filter_open2','Open/gesloten');
define('lg_lookup_filter_isrepliedto','');
define('lg_lookup_filter_isrepliedto2','Beantwoord aan');
define('lg_lookup_filter_assignedto','Toegewezen aan');
define('lg_lookup_filter_openedby','Geopend door');
define('lg_lookup_filter_openedvia','');
define('lg_lookup_filter_openedvia2','Binnengekomen via');
define('lg_lookup_filter_currentlyviewing','');
define('lg_lookup_filter_currentlyviewing2','Nu bekeken');
define('lg_lookup_filter_mailbox','Mailbox');
define('lg_lookup_filter_portal','Portaal');
define('lg_lookup_filter_reqsummary','Oorspronkelijke aanvraag');
define('lg_lookup_filter_lastpublicnote','Laatste bezoekersnotitie');
define('lg_lookup_filter_lastpublicnoteby','Laatste bezoekersnotitie door');
define('lg_lookup_filter_lastupdateby','Latest Update By');
define('lg_lookup_filter_age','Leeftijd');
define('lg_lookup_filter_attachment','&nbsp;');
define('lg_lookup_filter_attachment2','Attachments');
define('lg_lookup_filter_timetrack','Tijd');
define('lg_lookup_filter_timetrack2','Tijd Tracker Totaal');
define('lg_lookup_filter_lastupdate','Laatste bewerking');
define('lg_lookup_filter_thermostat_nps_score','Thermostat NPS Score');
define('lg_lookup_filter_thermostat_csat_score','Thermostat CSAT Score');
define('lg_lookup_filter_thermostat_feedback','Thermostat Feedback');
define('lg_lookup_filter_lastpubupdate','Laatste publieke bewerking');
define('lg_lookup_filter_lastcustupdate','Laatste bewerking door klant');
define('lg_lookup_filter_speedtofirstresponse','Doorlooptijd eerste antwoord (alle tijden)');
define('lg_lookup_filter_speedtofirstresponse_biz','Doorlooptijd eerste antwoord (kantooruren)');
define('lg_lookup_filter_reqid','ID');
define('lg_lookup_filter_reqid2','Aanvraag ID');
define('lg_lookup_filter_takeit','Aannemen');
define('lg_lookup_filter_reminder','Herinnering');
define('lg_lookup_filter_remdate','Herinnering ingesteld voor');
define('lg_lookup_filter_reqhaschanged','Deze aanvraag is gewijzigd na je laatste bezoek');
define('lg_lookup_filter_markunread','Markeer als ongelezen');
define('lg_lookup_filter_repliedtoby','Laatste antwoord was van medewerker');
define('lg_lookup_filter_ctpublicupdates2','Aantal bijwerkingen vanuit publiek');
define('lg_lookup_filter_ctpublicupdates','#');
define('lg_lookup_filter_reportingtags','Rapportage tags');
define('lg_lookup_filter_timegroup_today_yesterday','Tijd: vandaag, gisteren');
define('lg_lookup_filter_timegroup_hourly','Tijd: uur');
define('lg_lookup_filter_timegroup_daily','Tijd: dag');
define('lg_lookup_filter_timegroup_monthly','Tijd: maand');
define('lg_lookup_filter_timegroup_label','Tijd');
define('lg_lookup_filter_timegroup_today','Vandaag');
define('lg_lookup_filter_timegroup_yesterday','Gisteren');
define('lg_lookup_filter_timegroup_older','Ouder');
define('lg_lookup_filter_nps','NPS Score');
define('lg_lookup_filter_csat','CSAT Score');

// workflow
define('lg_wf_open','Open');
define('lg_wf_single','Single Point of Contact');

// tz
define('lg_tz_city','Plaats');
define('lg_tz_date','Datum');
define('lg_tz_time','Tijd');
define('lg_tz_offset','GMT Offset');

// for pages
define('lg_help','Help');
define('lg_loading','Bezig met laden...');
define('lg_yes','Ja');
define('lg_no','Nee');
define('lg_off','Uit');
define('lg_on','Aan');
define('lg_required','*verplicht');
define('lg_all','alle');
define('lg_checked','Aangevinkt');
define('lg_notchecked','Uitgevinkt');
define('lg_isopen','OPEN');
define('lg_isclosed','GESLOTEN');
define('lg_isurgent','URGENT');
define('lg_isnormal','NORMAAL');
define('lg_ispublic','publiek');
define('lg_label_public','Publiek');
define('lg_label_private','Prive');
define('lg_label_external','Extern');
define('lg_label_customer','Klant');
define('lg_alwaysvis','altijd zichtbaar');
define('lg_hiddenemail','verborgen email geschiedenis');
define('lg_noresults','Geen gegevens gevonden');
define('lg_noresults_inbox','De Inbox is leeg');
define('lg_noresults_filter','Geen enkele aanvraag komt overeen met dit filter');
define('lg_noresults_myq','U heeft geen openstaande aanvragen');
define('lg_nohistory','Geen overeenkomstige geschiedenis');
define('lg_rserror','Query fout');
define('lg_nextpage','Volgende pagina');
define('lg_prevpage','Vorige pagina');
define('lg_next','Volgende');
define('lg_prev','Vorige');
define('lg_loadmore','Meer laden');
define('lg_save','Opslaan');
define('lg_saving','Bezig met opslaan');
define('lg_add','Toevoegen');
define('lg_streamview_end','Einde van de aanvragen');
define('lg_streamview_desc_triage','TRIAGE: snel aanvragen beoordelen');
define('lg_streamview_desc_stream','STREAM: bekijk notities onder dit filter');
define('lg_streamview_desc_overflow','PEEK: snel aanvragen bekijken');

//Amusing quotes for when the inbox reaches 0. If you don't want these simply fill them all with the same thing
define('lg_noresults_alt1','Inbox zero! Good job!');
define('lg_noresults_alt2','Nothing to see here. Move along.');
define('lg_noresults_alt3','This inbox isn\'t half full, it\'s fully empty!');
define('lg_noresults_alt4','"To me nothing - the negative, the empty - is exceedingly powerful." - Alan Watts');
define('lg_noresults_alt5','I reached inbox zero, and that\'s when I came up with the idea of the Flux Capacitor.');
define('lg_noresults_alt6','I love the smell of an empty inbox in the morning.');
define('lg_noresults_alt7','"%s, viewing this inbox can serve no purpose anymore. Goodbye." - HAL 9000');
define('lg_noresults_alt8','I thought inbox zero wasn\'t real? Your mind makes it real.');
define('lg_noresults_alt9','It\'s not personal, Inbox. It\'s strictly business.');
define('lg_noresults_alt10','Bueller?... Bueller?... Bueller?');
define('lg_noresults_alt11','Lunch is for wimps.');
define('lg_noresults_alt12','You\'re a lean, mean inbox clearing machine.');
define('lg_noresults_alt13','Hasta la vista, requests');
define('lg_noresults_alt14','Life is like the inbox, you never know what you\'re going to get.');
define('lg_noresults_alt15','<span class="bigzero">0</span>');
define('lg_noresults_alt16','https://www.youtube.com/embed/zpN00-UTrY0');
define('lg_noresults_alt_lunch','Lunch is for wimps.');
define('lg_noresults_alt_latenight',"I'll sleep when I'm dead.");
define('lg_noresults_share','~ celebrating inbox zero with @helpspot');
define('lg_noresults_tweet','Celebrate on Twitter');

//No match for searches
define('lg_search_nomatch','Niets gevonden');

//Email auto reply
define('lg_mailre','RE');

//Reply above this line
define('lg_replyabove','## Antwoord aub BOVEN DEZE REGEL om iets aan uw aanvraag toe te voegen ## ');

//Syntax Highlighting
define('lg_double_click','Dubbelklik op de code hierboven om te kopieren');

// For filter
define('lg_globalfilters','Globale filters');

//Select multiple fields
define('lg_addallstaff','Iedereen toevoegen');
define('lg_removeallstaff','Iedereen verwijderen');
define('lg_expand','Uitklappen');
define('lg_subscribeall','Abonneren op geselecteerd');

// Tags
define('lg_tags_knowledgetags','Kennis tags');
define('lg_tags_add','Tag toevoegen');
define('lg_tags_label','Nieuwe tag toevoegen');
define('lg_tags_save','Opslaan');
define('lg_tags_delete','Verwijderen');
define('lg_tags_reorder','Verander volgorde tot');
define('lg_tags_confirmdel','Weet je zeker dat je deze tag wilt verwijderen?');
define('lg_tags_none','Nog geen tags aangemaakt');
define('lg_tags_updated','Tags bijgewerkt');

// Tip menu
define('lg_tm_view','Aanvragen bekijken');
define('lg_tm_markunread','Gelezen/Ongelezen');
define('lg_tm_actiontrash','Trash');
define('lg_tm_actionspam','SPAM');
define('lg_tm_skip','Overslaan');

// Person Status Type
define('lg_ps_is','is');
define('lg_ps_viewingrequest','<strong>viewing</strong> deze aanvraag');
define('lg_ps_editingrequest','<strong>editing</strong> deze aanvraag');

// Address book
define('lg_addressbook_title','Adresboek');
define('lg_addressbook_contacts','Contactpersonen');
define('lg_addressbook_livelookup','Live Lookup zoeken');
define('lg_addressbook_livelookup_ex','Live Lookup personen zoeken');
define('lg_addressbook_livelookup_na','In deze installatie is Live Lookup niet ingeschakeld. <a href="https://www.helpspot.com/helpdesk/index.php?pg=kb.page&id=174" target="_blank">Meer informatie</a>');
define('lg_addressbook_addcontact','Contactpersoon toevoegen');
define('lg_addressbook_search','Zoeken');
define('lg_addressbook_llsource','Live Lookup bron');
define('lg_addressbook_llheader','Live Lookup contactpersonen');
define('lg_addressbook_fname','Voornaam');
define('lg_addressbook_lname','Achternaam');
define('lg_addressbook_email','Email');
define('lg_addressbook_desc','Korte omschrijving');
define('lg_addressbook_add','Contactpersoon toevoegen');
define('lg_addressbook_persontitle','Titel');
define('lg_addressbook_highlight','Uitlichten');
define('lg_addressbook_highlightex','Wordt altijd als eerste getoond');
define('lg_addressbook_highlighted','Uitgelicht');
define('lg_addressbook_confirmdelete','Deze contactpersoon verwijderen?');

define('lg_validation_required','Dit veld is verplicht');
define('lg_validation_email','In dit veld is een geldige email verplicht');

define('lg_dontemail','Geen email versturen');

/*****************************************
NAVIGATION
*****************************************/
define('lg_adminhome','Admin');
define('lg_admin_categories_nav','Categorien');
define('lg_admin_users_nav','Medewerkers');
define('lg_admin_emailstaff','Email medewerkers');
define('lg_admin_mailboxes_nav','Email mailboxen');
define('lg_admin_status_nav','Status types');
define('lg_admin_groups_nav','Rechtengroepen');
define('lg_admin_themes_nav','Themes');
define('lg_admin_tools_nav','Triggers & regels');
define('lg_admin_data_nav','Organiseren');
define('lg_admin_customize_nav','Aanpassen');
define('lg_admin_settings_nav','Instellingen');
define('lg_admin_overview_nav','Systeemoverzicht');
define('lg_admin_widgets_nav','Widgets');
define('lg_admin_integration_nav','Integratie');
define('lg_admin_system_nav','Systeem');
define('lg_helpdesknav','Inbox');
define('lg_portalnav','Portaal');
define('lg_queue','Werkruimte');
define('lg_myq','Mijn open aanvragen');
define('lg_subscriptions','Abonnementen');
define('lg_reminders','Herinneringen');
define('lg_todayboard','Vandaagbord');
define('lg_wallboard','Infobord');
define('lg_filter_requests_nav','Filter instellen');
define('lg_responses_nav','Antwoorden');
define('lg_orderkb_nav','Kennisbankboeken volgorde');
define('lg_orderforums_nav','Forum volgorde');
define('lg_newrequest','Nieuwe aanvraag maken');
define('lg_forum','Forum');
define('lg_reports','Rapportages');
define('lg_welcome','Beginnen');
define('lg_search','ID of klant');
define('lg_search_kb','Kennisbank');
define('lg_search_forum','Search: Forum');
define('lg_advsearch','Geavanceerd zoeken');
define('lg_kb','Kennis');
define('lg_admin_tools_sysinfo','Systeeminformatie');
define('lg_admin_tools_filtermgmt','Filterbeheer');
define('lg_admin_tools_responsemgmt','Antwoordbeheer');
define('lg_admin_tools_archive','Archieftool');
define('lg_admin_tools_errorlog','Errorlog');
define('lg_admin_tools_email','Email templates');
define('lg_admin_tools_templates','Portaal templates');
define('lg_admin_tools_reqfields','Vrije velden');
define('lg_admin_tools_mailrules','Mailregels');
define('lg_admin_tools_mailrules_info','Reageer op email net zoals een mailclient');
define('lg_admin_tools_auto','Automationregels');
define('lg_admin_tools_auto_info','Geplande acties voor escalaties, SLAs en meer');
define('lg_admin_tools_triggers','Triggers');
define('lg_admin_tools_triggers_info','Realtime acties wanneer aanvragen gemaakt of gewijzigd worden');
define('lg_admin_tools_portals','Secundaire portalen');
define('lg_admin_integration_surveytools','Enquetetools');
define('lg_custom_pages','Maatwerk paginas');
define('lg_admin_integrations','Integrations');
define('lg_admin_customer_tools','Customer Tools');

/*****************************************
MAIL SUBJECTS
*****************************************/
define('lg_mailsub_cc','HelpSpot: aanvraag notificatie');
define('lg_mailsub_new','HelpSpot: nieuwe aanvraag');
define('lg_mailsub_mailrule','HelpSpot: mailregel notificatie');
define('lg_mailsub_automation','HelpSpot: automation notificatie');
define('lg_mailsub_existing','HelpSpot: bijgewerkte aanvraag');
define('lg_mailsub_reminder','HelpSpot: herinnering');

define('lg_mail_newstaffsub','Uw %s accountinformatie');

define('lg_feed_viewlink','Volledige aanvraag bekijken');
define('lg_feed_customer','Klantdetails');
define('lg_feed_reqinfo','Aanvraaginformatie');
define('lg_feed_reqhistory','Aanvraaghistorie');
define('lg_feed_cid','Klant ID');
define('lg_feed_cemail','Email');
define('lg_feed_cphone','Telefoon');
define('lg_feed_cname','Naam');
define('lg_feed_status','Status');
define('lg_feed_assign','Toegewezen aan');
define('lg_feed_category','Categorie');
define('lg_feed_createdby','Aangemaakt door');
define('lg_feed_helpdeskfilters','Helpdesk filters');
define('lg_feed_update','UPDATE');
define('lg_feed_request','NIEUWE AANVRAAG');
define('lg_feed_notification','NOTIFICATIE');
define('lg_feed_log','Event Log');

/*****************************************
PLACEHOLDERS
*****************************************/
define('lg_insertplaceholder','Veld invoegen');
define('lg_insertplaceholderopt','Veld invoegen (optioneel)');
define('lg_inserttemplatetag','Template tag invoegen');
define('lg_placeholderspopup_reqid','Aanvraag ID');
define('lg_placeholderspopup_acckey','Access Key');
define('lg_placeholderspopup_replyabove','"Antwoord boven" tekst');
define('lg_placeholderspopup_custfirst','Klant voornaam');
define('lg_placeholderspopup_custlast','Klant achternaam');
define('lg_placeholderspopup_custid','Klant ID');
define('lg_placeholderspopup_custemail','Klant email');
define('lg_placeholderspopup_custphone','Klant telefoon');
define('lg_placeholderspopup_status','Status');
define('lg_placeholderspopup_category','Categorie');
define('lg_placeholderspopup_urgent','Urgent');
define('lg_placeholderspopup_openclosed','Open/gesloten');
define('lg_placeholderspopup_dateopened','Datum geopend');
define('lg_placeholderspopup_datenow','Huidige datum/tijd');
define('lg_placeholderspopup_assignedfirst','Verantwoordelijke medewerker: voornaam');
define('lg_placeholderspopup_assignedlast','Verantwoordelijke medewerker: achternaam');
define('lg_placeholderspopup_assignedfull','Toegewezen medewerker: volledige naam');
define('lg_placeholderspopup_assignedlastfirst','Toegewezen medewerker: achternaam, voornaam');
define('lg_placeholderspopup_assignedemail','Toegewezen medewerker: email');
define('lg_placeholderspopup_assignedphone','Toegewezen medewerker: telefoonnummer');
define('lg_placeholderspopup_loggedinfirst','Ingelogde medewerker: voornaam');
define('lg_placeholderspopup_loggedinlast','Ingelogde medewerker: achternaam');
define('lg_placeholderspopup_loggedinfull','Ingelogde medewerker: volledige naam');
define('lg_placeholderspopup_loggedinlastfirst','Ingelogde medewerker: achternaam, voornaam');
define('lg_placeholderspopup_loggedinemail','Ingelogde medewerker: email');
define('lg_placeholderspopup_loggedinphone','Ingelogde medewerker: telefoonnummer');
define('lg_placeholderspopup_customfield','Vrj veld');
define('lg_placeholderspopup_orgname','Bedrijfsnaam');
define('lg_placeholderspopup_helpdeskurl','Helpdesk URL');
define('lg_placeholderspopup_reqformurl','Aanvraagformulier URL');
define('lg_placeholderspopup_reqcheckurl','Aanvraag status URL');
define('lg_placeholderspopup_kburl','Kennisbank URL');
define('lg_placeholderspopup_forum','Forum URL');
define('lg_placeholderspopup_subject','Email onderwerpregel');
define('lg_placeholderspopup_origsubject','Onderwerp van oorspronkelijke email');
define('lg_placeholderspopup_mobilelink','Mobile app request link');
define('lg_placeholderspopup_initialrequest','Notitie bij oorspronkelijke aanvraag');
define('lg_placeholderspopup_trackerid','Tracking ID - {#####}');
define('lg_placeholderspopup_message','Notitie body');
define('lg_placeholderspopup_lastcustomernote','Laatste notitie van klant');
define('lg_placeholderspopup_fullpublichistory','Geschiedenis van publieke notities (inclusief huidige)');
define('lg_placeholderspopup_fullpublichistory_ex','Geschiedenis van publieke notities (exclusief huidige)');
define('lg_placeholderspopup_requestcheckurl','URL om de aanvraag in te zien');
define('lg_placeholderspopup_accesskey','Toegangscode');
define('lg_placeholderspopup_label','Email label');
define('lg_placeholderspopup_reqdetails','Samenvatting aanvraag details (tekst formaat)');
define('lg_placeholderspopup_reqdetailshtml','Samenvatting aanvraag details (HTML formaat)');
define('lg_placeholderspopup_staffname','Naam medewerker');
define('lg_placeholderspopup_postername','Naam van forumgebruiker');
define('lg_placeholderspopup_topic','Onderwerp');
define('lg_placeholderspopup_replyurl','Onderwerp URL');
define('lg_placeholderspopup_email','Gebruiker email');
define('lg_placeholderspopup_password','Gebruiker password');
define('lg_placeholderspopup_helpspoturl','HelpSpot login URL');
define('lg_placeholderspopup_portalemail','Portaal login email');
define('lg_placeholderspopup_portalpassword','Portaal login password');
define('lg_placeholderspopup_mobilereqpage','Mobiele aanvraag URL');
define('lg_placeholderspopup_reseturl','Password reset URL');
define('lg_placeholderspopup_newportalpassword','Nieuw password voor portaal');

/*****************************************
PORTAL
*****************************************/
//These must be available outside of the portal
define('lg_portal_req_did','Dit is wat IK gedaan heb');
define('lg_portal_req_expected','Dit is wat IK verwacht had');
define('lg_portal_req_actual','Dit is wat feitelijk gebeurde');
define('lg_portal_req_additional','Aanvullende informatie');
define('lg_portal_re','RE');
define('lg_portal_req_simple','Details');

/*****************************************
SPECIAL
*****************************************/
// Mail import
define('lg_no_subject','Geen onderwerp');
define('lg_loop_break','Aanvraag %s zou in een email lus geraakt kunnen zijn met %s. De lus is verbroken.');
define('lg_autoreply_loop_break','Een mailbox is in een email lus geraakt met %s. De lus is verbroken.');

/*****************************************
CALENDAR
*****************************************/
define('lg_cal_fdow','0'); // first day of week for this locale; 0 = Sunday, 1 = Monday, etc.
define('lg_cal_gotoday','Ga naar vandaag');
define('lg_cal_today','Vandaag');
define('lg_cal_wk','wk');
define('lg_cal_weekend','0,6'); // 6 = Saturday, 0 = Sunday, 1 = Monday, etc.
define('lg_cal_am','am');
define('lg_cal_pm','pm');
define('lg_cal_mn_jan','Januari');
define('lg_cal_mn_feb','Februari');
define('lg_cal_mn_mar','Maart');
define('lg_cal_mn_apr','April');
define('lg_cal_mn_may','Mei');
define('lg_cal_mn_jun','Juni');
define('lg_cal_mn_jul','Juli');
define('lg_cal_mn_aug','Augustus');
define('lg_cal_mn_sep','September');
define('lg_cal_mn_oct','Oktober');
define('lg_cal_mn_nov','November');
define('lg_cal_mn_dec','December');
define('lg_cal_dn_su','Zondag');
define('lg_cal_dn_mo','Maandag');
define('lg_cal_dn_tu','Dinsdag');
define('lg_cal_dn_we','Woensdag');
define('lg_cal_dn_th','Donderdag');
define('lg_cal_dn_fr','Vrijdag');
define('lg_cal_dn_sa','Zaterdag');
define('lg_cal_sdn_su','Zon');
define('lg_cal_sdn_mo','Ma');
define('lg_cal_sdn_tu','Di');
define('lg_cal_sdn_we','Woe');
define('lg_cal_sdn_th','Do');
define('lg_cal_sdn_fr','Vr');
define('lg_cal_sdn_sa','Za');

/* HelpSpot 5 Additions */
define('lg_logbackin', 'Log Back In');
define('lg_logged_out', 'You have been logged out!');
define('lg_login_trouble', 'Having trouble logging in?');
define('lg_login_use_default', 'Use HelpSpot\'s default authentication to login and fix any issues');
define('lg_login_authenticating', 'Authenticating...');
define('lg_options', 'Options');
define('lg_freestart', 'Need more users, support, or hosting?');
define('lg_upgrade', 'Upgrade to Paid');
define('lg_purchase_here', 'Purchase here');
define('lg_response_shortcut', 'Type # for autocompletion');
define('lg_noresults_search', 'No results.<br /> <a href="admin?pg=search">Try advanced search</a>');
define('lg_thermostat_label_see_results', 'See Survey Results');
define('lg_conditional_at_thermostat_promoter', 'promoter');
define('lg_conditional_at_thermostat_passive', 'passive');
define('lg_conditional_at_thermostat_detractor', 'detractor');
define('lg_conditional_at_thermostat_satisfied', 'satisfied');
define('lg_conditional_at_thermostat_dissatisfied', 'dissatisfied');
define('lg_requestchanged', 'Request Changed');
define('lg_admin_customize_admin_nav', 'Customize Admin');
define('lg_darkmode_on', 'Dark Mode: On');
define('lg_darkmode_off', 'Dark Mode: Off');
define('lg_search_tab', 'Search');
define('lg_responses', 'Responses');
define('lg_admin_tools_jobsmgmt', 'Failed Jobs');
define('lg_not_email_send_error', 'Email send error for request');
define('lg_not_see_details', 'See Details');
define('lg_not_dismiss', 'Dismiss');
