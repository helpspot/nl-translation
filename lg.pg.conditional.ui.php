<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_conditional_remcon','Voorwaarde verwijderen');
define('lg_conditional_addcon','Voorwaarde toevoegen');
define('lg_conditional_phpregex','Voer een PHP expressie in');
define('lg_conditional_ftwarning','Full tekst zoekopdrachten in een filter kunt u het beste spaarzaam toepassen, omdat ze veel beslag leggen op de database en de performance van het systeem negatief kunnen beinvloeden.');
define('lg_conditional_ftwarning2','Tellingen kunnen niet weergegeven worden in Werkruimte filters waarvoor full tekst zoeken gebruikt wordt.');

define('lg_conditional_mr_to','Aan');
define('lg_conditional_mr_from','Van');
define('lg_conditional_mr_cc','Cc');
define('lg_conditional_mr_subject','Onderwerp');
define('lg_conditional_mr_headers','Headers');
define('lg_conditional_mr_emailbody','Email body');
define('lg_conditional_mr_customerid','Klant ID');
define('lg_conditional_mr_mailbox','Mailbox');
define('lg_conditional_mr_hasattach','Heeft attachments');
define('lg_conditional_mr_urgent','Is urgent');
define('lg_conditional_mr_spam','Is SPAM');
define('lg_conditional_mr_notspam','Is geen SPAM');

define('lg_conditional_mr_is','Is');
define('lg_conditional_mr_isnot','Is niet');
define('lg_conditional_mr_begins','Begint met');
define('lg_conditional_mr_ends','Eindigt met');
define('lg_conditional_mr_contains','Bevat');
define('lg_conditional_mr_notcontain','Bevat niet');
define('lg_conditional_mr_matches','Overeenkomsten');

define('lg_conditional_mra_setcat','Wijzig categorie/toegewezen medewerker naar');
define('lg_conditional_mra_setcustom','Wijzig vrij veld naar');
define('lg_conditional_mra_close','Sluit aanvraag');
define('lg_conditional_mra_setstatus','Wijzig status in');
define('lg_conditional_mra_markurgent','Markeer als urgent');
define('lg_conditional_mra_marknoturgent','Markeer als niet urgent');
define('lg_conditional_mra_movetotrash','Verplaats naar trash');
define('lg_conditional_mra_movetoinbox','Verplaats naar inbox');
define('lg_conditional_mra_notify','Stuur een email notificatie naar');
define('lg_conditional_mra_instantreply','Antwoord meteen');
define('lg_conditional_mra_addprivatenote','Voeg een prive notitie toe');


define('lg_conditional_at_userid','Klant ID');
define('lg_conditional_at_xrequest','Aanvraag ID');
define('lg_conditional_at_email','Email');
define('lg_conditional_at_fname','Voornaam');
define('lg_conditional_at_lname','Achternaam');
define('lg_conditional_at_phone','Telefoonnummer');
define('lg_conditional_at_openvia','Contact via');
define('lg_conditional_at_status','Status');
define('lg_conditional_at_open','Open/gesloten');
define('lg_conditional_at_urgent','Is urgent');
define('lg_conditional_at_category','Categorie');
define('lg_conditional_at_reportingtags','Rapportage tags');
define('lg_conditional_at_unassigned','Niet toegewezen');
define('lg_conditional_at_currentlyloggedin','Ingelogde gebruiker');
define('lg_conditional_at_assignedto','Toegewezen aan');
define('lg_conditional_at_acwasever','Was op enig moment toegewezen aan');
define('lg_conditional_at_acfromto','Opnieuw toegewezen van/naar');
define('lg_conditional_at_acreassignedby','Opnieuw toegewezen door');
define('lg_conditional_at_openedby','Geopend door');
define('lg_conditional_at_updatedby','Bijgewerkt door (gebruik in combinatie met andere voorwaarden)');
define('lg_conditional_at_relativedate','Verstreken tijd sinds openen');
define('lg_conditional_at_relativedateclosed','Verstreken tijd sinds sluiten');
define('lg_conditional_at_relativedatetoday','Aanvraag bijgewerkt');
define('lg_conditional_at_relativedatelastpub','Aanvraag publiek bijgewerkt');
define('lg_conditional_at_relativedatelastcust','Door klant bijgewerkte aanvraag');
define('lg_conditional_at_today','Vandaag');
define('lg_conditional_at_tomorrow','Morgen');
define('lg_conditional_at_yesterday','Gisteren');
define('lg_conditional_at_dateset','Datum is ingesteld op');
define('lg_conditional_at_datenotset','Datum is niet ingesteld');
define('lg_conditional_at_past7','Laatste 7 dagen');
define('lg_conditional_at_past14','Laatste 14 dagen');
define('lg_conditional_at_past30','Laatste 30 dagen');
define('lg_conditional_at_past60','Laatste 60 dagen');
define('lg_conditional_at_past90','Laatste 90 dagen');
define('lg_conditional_at_past365','Laatste 365 dagen');
define('lg_conditional_at_next7','Volgende 7 dagen');
define('lg_conditional_at_next14','Volgende 14 dagen');
define('lg_conditional_at_next30','Volgende 30 dagen');
define('lg_conditional_at_next90','Volgende 90 dagen');
define('lg_conditional_at_next365','Volgende 365 dagen');
define('lg_conditional_at_thisweek','Deze week (Zon - Zat)');
define('lg_conditional_at_thismonth','Deze maand');
define('lg_conditional_at_thisyear','Dit jaar');
define('lg_conditional_at_lastweek','Afgelopen week (Zon - Zat)');
define('lg_conditional_at_lastmonth','Afgelopen maand');
define('lg_conditional_at_lastyear','Afgelopen jaar');
define('lg_conditional_at_nextweek','Volgende week (Zon - Zat)');
define('lg_conditional_at_nextmonth','Volgende maand');
define('lg_conditional_at_nextyear','Volgend jaar');
define('lg_conditional_at_beforedate','Geopend voor datum');
define('lg_conditional_at_afterdate','Geopend na datum');
define('lg_conditional_at_closedbeforedate','Gesloten voor datum');
define('lg_conditional_at_closedafterdate','Gesloten na datum');
define('lg_conditional_at_title','Email onderwerp');
define('lg_conditional_at_mailbox','Mailbox');
define('lg_conditional_at_portal','Portaal');
define('lg_conditional_at_portal_default','Primair portaal');
define('lg_conditional_at_sincecreated','Minuten sinds opening');
define('lg_conditional_at_sinceclosed','Minuten sinds sluiting');
define('lg_conditional_at_sincelastupdate','Minuten sinds laatste update');
define('lg_conditional_at_sincelastpubupdate','Minuten sinds laatste publieke update');
define('lg_conditional_at_sincelastcustupdate','Minuten sinds laatste klant update');
define('lg_conditional_at_speedtofirstresponse','Minuten sinds eerste antwoord (alle tijden)');
define('lg_conditional_at_pubupdates','Aantal publieke updates');
define('lg_conditional_at_lastreplyby','Laatste publieke antwoord van');
define('lg_conditional_at_lastreplyby_cust','Klant');
define('lg_conditional_at_lastreplyby_staff','Willekeurige medewerker');
define('lg_conditional_at_acting_person_cust','Klant');
define('lg_conditional_at_search','Full tekst zoekactie op aanvraag geschiedenis voor');
define('lg_conditional_at_wheresql','Aangepaste "where" conditie (SQL)');
define('lg_conditional_at_subcondand','ALLES van het volgende is waar');
define('lg_conditional_at_subcondor','1 of meerdere van het volgende is waar');
define('lg_conditional_at_testcond','Voorwaarden testen');
define('lg_conditional_at_showall','Alle aanvragen tonen');
define('lg_conditional_at_openreq','Open aanvraag');
define('lg_conditional_at_stafftonotify','Medewerker');
define('lg_conditional_at_externalemail','Emailadres');
define('lg_conditional_at_assignedstaffer','Toegewezen medewerker');
define('lg_conditional_at_mailboxselect','Versturen vanuit');
define('lg_conditional_at_subject','Onderwerp');
define('lg_conditional_at_frommailbox','Ontvangen vanuit mailbox (indien beschikbaar)');
define('lg_conditional_at_calcmin','Bereken minuten');
define('lg_conditional_at_notifysms','Verstuur SMS notificatie naar');
define('lg_conditional_at_notifyexternal','Stuur naar extern emailadres');

define('lg_conditional_at_emailcustomer','Email klant');
define('lg_conditional_at_emailresults','Email lijst met resultaten aan');
define('lg_conditional_at_subscribestaff','Subscribe Staff');
define('lg_conditional_at_unsubscribestaff','Unsubscribe Staff');
define('lg_conditional_at_requestpush','Voer een aanvraag push uit');
define('lg_conditional_at_thermostat_send','Send a Thermostat Survey');
define('lg_conditional_at_thermostat_add_email','Add Email to Survey Campaign');
define('lg_conditional_at_thermostat_nps_score', 'Thermostat NPS Score');
define('lg_conditional_at_thermostat_csat_score', 'Thermostat CSAT Score');
define('lg_conditional_at_thermostat_feedback', 'Has Thermostat Feedback');
define('lg_conditional_at_thermostat_promoter', 'promoter');
define('lg_conditional_at_thermostat_passive', 'passive');
define('lg_conditional_at_thermostat_detractor', 'detractor');
define('lg_conditional_at_thermostat_satisfied', 'satisfied');
define('lg_conditional_at_thermostat_dissatisfied', 'dissatisfied');
define('lg_conditional_at_thermostat_has_feedback', 'has feedback');
define('lg_conditional_at_thermostat_does_not_have_feedback', 'doesn\'t have feedback');
define('lg_conditional_at_norequestpush','U heeft geen aanvraag Push classes gedefinieerd. <a href="http://www.helpspot.com/helpdesk/index.php?pg=kb.page&id=153" target="_blank">Lees meer over aanvraag Push</a>.');
define('lg_conditional_at_pushto','Push naar');
define('lg_conditional_at_pushcomment','Opmerking (optioneel)');
define('lg_conditional_at_lessthan','Minder dan');
define('lg_conditional_at_greaterthan','Meer dan');

define('lg_conditional_at_ogadvanced','Geavanceerd');
define('lg_conditional_at_ogcustinfo','Klant informatie');
define('lg_conditional_at_ogreqdetails','Aanvraag details');
define('lg_conditional_at_ogassignmentchain','Opeenvolgende toewijzingen');
define('lg_conditional_at_ogcustomfields','Vrije velden');
define('lg_conditional_at_ogdatetime','Datum en tijd');
define('lg_conditional_at_ogsearch','Zoeken');
define('lg_conditional_at_ogother','Andere');
define('lg_conditional_at_ognotifications','Notificaties');
define('lg_conditional_at_ogemaildetails','Email details');

define('lg_conditional_at_otrigger','Trigger specifiek');
define('lg_conditional_at_acting_person','Betrokken persoon');
define('lg_conditional_at_notetype','Notitie type');
define('lg_conditional_at_notecontent','Notitie inhoud');

define('lg_conditional_tr_is','Is nu');
define('lg_conditional_tr_isnot','Is nu niet');
define('lg_conditional_tr_begins','Begint nu met');
define('lg_conditional_tr_ends','Eindigt nu met');
define('lg_conditional_tr_contains','Bevat nu');
define('lg_conditional_tr_notcontain','Bevat nu niet');
define('lg_conditional_tr_matches','Komt nu overeen met');
define('lg_conditional_tr_lessthan','Nu meer dan');
define('lg_conditional_tr_greaterthan','Nu minder dan');

define('lg_conditional_tr_changed','Gewijigd');
define('lg_conditional_tr_changed_to','Gewijzigd in');
define('lg_conditional_tr_changed_from','Gewijzigd van');
define('lg_conditional_tr_notchanged','Niet gewijzigd');
define('lg_conditional_tr_notchanged_to','Niet gewijzigd in');
define('lg_conditional_tr_notchanged_from','Niet gewijzigd van');

define('lg_conditional_tr_rt_is_selected','Is nu geselecteerd');
define('lg_conditional_tr_rt_is_not_selected','Is nu niet geselecteerd');
define('lg_conditional_tr_rt_was_selected','Was oorspronkelijk geselecteerd');
define('lg_conditional_tr_rt_was_not_selected','Was oorspronkelijk niet geselecteerd');

define('lg_conditional_tr_public','Publiek');
define('lg_conditional_tr_private','Prive');
define('lg_conditional_tr_external','Extern');

define('lg_conditional_tr_livelookup','Voer een Live Lookup met');
define('lg_conditional_tr_nolivelookup','U heeft Live Lookup niet ingesteld. <a href="http://www.helpspot.com/helpdesk/index.php?pg=kb.page&id=174" target="_blank">Lees meer over Live Lookup</a>.');

define('lg_conditional_tr_webhook','POST a webhook to this URL:');
define('lg_conditional_setreptags','Stel rapportagetags in');
?>
