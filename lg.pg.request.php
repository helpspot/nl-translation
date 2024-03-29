<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_request_pagetitle','Aanvraag aanmaken');
define('lg_request_pagetitleedit','Aanvraag beheren');
define('lg_request_custid','Klant ID');
define('lg_request_fname','Voornaam');
define('lg_request_lname','Achternaam');
define('lg_request_email','Email');
define('lg_request_phone','Telefoon');
define('lg_request_headcust','Klant');
define('lg_request_note','Notitie');
define('lg_request_newrequest','Nieuwe aanvraag');
define('lg_request_batchreply','Batch antwoord');
define('lg_request_customer','Klant'); //used sep from above
define('lg_request_livelookup','Live Lookup');
define('lg_request_timetracker','Time Tracker');
define('lg_request_timeevents','Gelogde tijd');
define('lg_request_timeevents_for','Voor datum');
define('lg_request_timeevents_entered','Ingevoerd op');
define('lg_request_timetrackerdel','Verwijderen');
define('lg_request_timetrackerempty','Nog geen tijd gelogd');
define('lg_request_timehrmin','uu:mm');
define('lg_request_timedesc','Omschrijving');
define('lg_request_billable','Facturabel');
define('lg_request_timedelcheck','Weet u zeker dat u deze tijdvastlegging wilt verwijderen?');
define('lg_request_logtime','Tijd registreren');
define('lg_request_headreqnotes','Aanvraag geschiedenis');
define('lg_request_closed','Gesloten');
define('lg_request_showing','Tonen');
define('lg_request_show','Toon');
define('lg_request_fullview','Volledige geschiedenis');
define('lg_request_publicview','Publieke notities');
define('lg_request_justnotes','Alleen notities');
define('lg_request_fileview','Bestanden');
define('lg_request_cancel','Verwijder');
define('lg_request_contactedvia','Contact via');
define('lg_request_category','Categorie');
define('lg_request_notedrafts','Concepten');
define('lg_request_fileupload','Attach');
define('lg_request_fileuploadtab','Attachment');
define('lg_request_er_fileupload','Error! Error! The file ({filename}) is too large to upload. Please make sure it is less than {mb} MB.');
define('lg_request_reattachedfile','Reattached File');
define('lg_request_notifystafftab','Collega inlichten');
define('lg_request_addstaff','Kies collegas');
define('lg_request_cc','Ingelicht');
define('lg_request_appresponse','Antwoorden');
define('lg_request_searchresponses','Zoek: antwoorden');
define('lg_request_insertkblink','Kennis');
define('lg_request_kbprivate','Prive');
define('lg_request_assignedto','Toegewezen aan');
define('lg_request_assignedto_change','Wijzigen...');
define('lg_request_reportingtags','Rapportage tags');
define('lg_request_isurgent','Urgent');
define('lg_request_status','Status');
define('lg_request_custupdate','Publiek');
define('lg_request_custupdatepriv','Prive');
define('lg_request_custupdateexternal','Extern');
define('lg_request_pubdesc','Publieke notitie opties');
define('lg_request_privdesc','Prive notitie opties');
define('lg_request_privdescexp','Alleen medewerkers, niet zichtbaar voor klanten');
define('lg_request_extdesc','Externe notitie opties');
define('lg_request_extdescexp','Stuur een email naar extern contact, niet zichtbaar voor klant');
define('lg_request_sendemailfrom','Stuur email vanuit');
define('lg_request_emailsubject','Email onderwerp');
define('lg_request_emailreply','Antwoord aan');
define('lg_request_emailcc','Cc');
define('lg_request_emailbcc','Bcc');
define('lg_request_emailto','Aan');
define('lg_request_addtoemail','Voeg een ontvanger toe');
define('lg_request_addccemail','Voeg een CC ontvanger toe');
define('lg_request_addbccemail','Voeg een BCC ontvanger toe');
define('lg_request_subscribers','Geabonneerde medewerkers');
define('lg_request_subjectdefaultnew','Informatie over uw aanvraag');
define('lg_request_subjectdefault','Update van uw aanvraag');
define('lg_request_showingx','De laatste %s van %s items uit de aanvraag geschiedenis worden nu getoond.');
define('lg_request_showingxdirect','Tonen: 1 of %s aanvraag geschiedenis items.');
define('lg_request_showall','Alles tonen');
define('lg_request_create','Aanvraag aanmaken');
define('lg_request_update','Aanvraag bijwerken');
define('lg_request_emailcustomermsg','De klant krijgt geen bericht');
define('lg_request_emailcustomermsg_active','De klant wordt <strong>wel</strong> ge-emailed');
define('lg_request_updatenclose','Updaten en sluiten');
define('lg_request_batchremove','verwijderen');
define('lg_request_batch','Begin met batchgewijs beantwoorden');
define('lg_request_batch_close','Begin met batchgewijs beantwoorden en sluit de aanvragen');
define('lg_request_batchconfirm','Weet u zeker dat u alle getoonde aanvragen wilt sluiten?');
define('lg_request_batchlist','Aanvragen in batch');
define('lg_request_historysearch','Geschiedenis doorzoeken');
define('lg_request_searchtype','Soort zoekopdracht');
define('lg_request_search1','Algemeen');
define('lg_request_search2','Op emailadres');
define('lg_request_search3','Op volledige naam');
define('lg_request_search4','Op klant ID');
define('lg_request_search5','Op emaildomein');
define('lg_request_search6','Op achternaam');
define('lg_request_search7','Op voornaam');
define('lg_request_searchnomatch','Geen overeenkomsten');
define('lg_request_insertdata','Klant informatie invoegen');
define('lg_request_mergerequest','Invoegen');
define('lg_request_returntosearch','terug naar zoeken');
define('lg_request_fb_reqadded','Aanvraag toegevoegd');
define('lg_request_fb_requpdated','Aanvraag bijgewerkt');
define('lg_request_fb_requpdatenclosed','Aanvraag bijgewerkt en gesloten');
define('lg_request_batchwarninghead','Batch informatie');
define('lg_request_batchwarning','Vrije velden, categorien en toewijzingen die u opgeeft overschrijven de bestaande inhoud van de velden voor alle aanvragen in de batch. Als u lege vrije velden opgeeft voor de batch, dan blijft de bestaande inhoud van de betreffende vrije velden ongewijzigd voor alle aanvragen in de batch.');
define('lg_request_batchwarning2','Maak filter voor latere updates');
define('lg_request_reqid','ID');
define('lg_request_options','Opties');
define('lg_request_pushdetailsbox','Aanvraag push Details');
define('lg_request_pushcomment','Opmerking (optioneel)');
define('lg_request_print','Print dit overzicht');
define('lg_request_reminders','Herinneringen');
define('lg_request_viewinportal','Bekijk in portaal');
define('lg_request_savedraft','Concept opslaan');
define('lg_request_passwords','Toon toegangscode');
define('lg_request_add_notifications','Notificaties toevoegen');
define('lg_request_subscribebutton','Abonneren');
define('lg_request_subscribedbutton','Geabonneerd');
define('lg_request_reminderbutton','Herinnering instellen');
define('lg_request_merge','Start samenvoegen');
define('lg_request_merged','Samengevoegd');
define('lg_request_mergeid','Voeg aanvraag ID samen met');
define('lg_request_mergebutton','Aanvraag samenvoegen');
define('lg_request_mergeconfirm','Bevestig samenvoegen');
define('lg_request_mergebadid','Die aanvraag ID is niet geldig');
define('lg_request_mergetoself','U kunt een aanvraag niet met zichzelf samenvoegen');
define('lg_request_mergeconftext1','Voeg de huidige aanvraag samen');
define('lg_request_mergeconftext2','tot');
define('lg_request_mergeconfirmid','Aanvraag ID');
define('lg_request_mergeconfirmopen','Geopend op');
define('lg_request_mergeconfbutton','Bevestig samenvoegen');
define('lg_request_mergefailed','Aanvraag samenvoegen mislukt');
define('lg_request_reqpush','Aanvraag push');
define('lg_request_reqpushok','De aanvraag is gepushed');
define('lg_request_push','Push');
define('lg_request_pushselect','Push naar');
define('lg_request_pushdetails','Details');
define('lg_request_quotepublic','Haal publieke opmerkingenhistorie aan');
define('lg_request_movetotrash','Verplaats naar trash');
define('lg_request_trashconfirm','Weet u zeker dat u deze aanvraag naar de trash wilt verplaatsen?');
define('lg_request_log','Log');
define('lg_request_from','Van');
define('lg_request_sent','Verstuurd');
define('lg_request_to','Aan');
define('lg_request_viaportal','Via portaal');
define('lg_request_subject','Onderwerp');
define('lg_request_fb_subscribed','U bent nu geabonneerd');
define('lg_request_fb_unsubscribed','Uw heeft uw abonnement afgemeld');
define('lg_request_fb_unpublic','Aanvraag geschiedenis verwijder uit publieke view');
define('lg_request_fb_public','Aanvraag historie publiek gemaakt');
define('lg_request_fb_spam','Aanvraag gemarkeerd als SPAM');
define('lg_request_accesskey','Toegangscode');
define('lg_request_showheaders','Toon headers');
define('lg_request_showsource','Toon bron');
define('lg_request_reopen','Heropen aanvraag');
define('lg_request_public','Maak notitie prive');
define('lg_request_makepublic','Maak notitie publiek');
define('lg_request_makepubliccheck','Opmerking: hierdoor wordt de notitie wel zichtbaar in de klantenportaal, maar er zal geen email van gestuurd worden.');
define('lg_request_makelog','Aanvraag geschiedenis');
define('lg_request_makepublog','publiek gemaakt');
define('lg_request_makeprivlog','prive gemaakt');
define('lg_request_publicrss','Publiek');
define('lg_request_quote','Quote');
define('lg_request_forward','Doorsturen');
define('lg_request_directlink','Directe link');
define('lg_request_converttorequest','Omzetten naar aanvraag');
define('lg_request_converttorequestconfirm','Weet u zeker dat u dit item uit de geschiedenis om wilt zetten naar een aanvraag?');
define('lg_request_publiccheck','Weet u zeker dat u dit bericht uit de publieke view wilt verwijderen?');
define('lg_request_deleterem','verwijderen');
define('lg_request_trashbox','Deze aanvraag bevindt zich in de TRASH. Als de aanvraag wijzigt of aanvult, dan wordt deze automatisch uit de trash gehaald.');
define('lg_request_fb_reqerror','Er heeft zich een probleem voorgedaan bij het toevoegen van de aanvraag');
define('lg_request_fb_remdeleted','Herinnering verwijderd');
define('lg_request_fb_fromhdinprocess','Deze aanvraag wordt al verwerkt door: ');
define('lg_request_er_closewhileactive','U kunt geen aanvraag sluiten die de status actief heeft');
define('lg_request_er_choosestatus','Kies een afsluitstatus');
define('lg_request_er_nocategory','U moet deze aanvraag aan een categorie toewijzen');
define('lg_request_er_nocustinfo','U moet hier enige klantinformatie toevoegen');
define('lg_request_er_nocontactvia','U moet de contact methode selecteren');
define('lg_request_er_noexternalto','Kies een "aan" geadresseerde voor uw externe notitie');
define('lg_request_er_resumeedit','Hervat het bewerken met de spellingscontrole voor u indient');
define('lg_request_er_nonotewfile','U moet een notitite toevoegen bij uw attachments');
define('lg_request_er_nonotecreate','U moet een notitie maken om een aanvraag in te kunnen dienen');
define('lg_request_er_nonoteattach','U moet een notitie hebben om attachments toe te kunnen voegen');
define('lg_request_er_customempty','Vul in');
define('lg_request_er_decimal','Voer een decimaal getal in voor');
define('lg_request_er_number','Voer een getal in voor');
define('lg_request_er_regex','Zorg voor het juiste format');
define('lg_request_er_delreminder','Er heeft zich een fout voorgedaan bij het verwijderen van uw aanvraag');
define('lg_request_er_unpublic','Er heeft zich een fout voorgedaan, waardoor de notitie niet verwijderd kon worden uit de publieke view');
define('lg_request_er_makepublic','Er heeft zich een fout voorgedaan, waardoor deze notitie niet publiek gemaakt kon worden');
define('lg_request_er_emailcusterror','EMAIL ERROR: email naar de klant is mislukt. Het emailsysteem gaf deze foutmelding terug');
define('lg_request_er_emailccerror','EMAIL ERROR: CC email mislukt. Het emailsysteem gaf deze foutmelding terug');
define('lg_request_er_emailexterror','EMAIL ERROR: externe email mislukt. Het emailsysteem gaf deze foutmelding terug');
define('lg_request_mark_todo','Om dit te bereiken...');
define('lg_request_mark_type','Type dit...');
define('lg_request_mark_full','Complete syntax bekijken');
define('lg_request_viewfull','Volledige grootteFull Size');
define('lg_request_fwd','Doorsturen');
define('lg_request_unkownid','Onbekende aanvraag ID');
define('lg_request_not_a_valid_email', 'is geen geldig emailadres.');
define('lg_request_lose_attachment', 'Het wijzigen van het notitie type heeft tot gevolgd dat de huidige attachments verdwijnen. Als u ze wilt behouden na de wijziging van het notitie type moet u ze opnieuw attachen.');
define('lg_request_drop_here', 'Drop files on the screen to upload');
define('lg_request_pin', 'Pin');
define('lg_request_pinned', 'Pinned');

define('lg_admin_thermostat_label_see_results', 'See Survey Results');

/* HelpSpot 5 Additions */
define('lg_request_requesthistory', 'Request History');
define('lg_request_customer_edit', 'Edit');
define('lg_request_starttimer', 'Start Timer');
define('lg_request_stoptimer', 'Stop Timer');
define('lg_request_timetrackeroptions', 'Options');
define('lg_request_contactedvia_short', 'Via');
define('lg_request_attachbox', 'Click or drag/drop to attach');
define('lg_request_isnoturgent', 'Mark Urgent');
define('lg_request_search8', 'Search');
define('lg_request_search9', 'Results');
define('lg_request_emailoptions', 'Email Options');
define('lg_request_fb_reqsmerged', 'Requests merged');
define('lg_request_er_emailsenderror', 'EMAIL ERROR: An email failed to send.');
define('lg_request_close', 'Close');
define('lg_request_transfer_warning',"You are assigning this request to a category you do not have access to. After update you will no longer be able to view this request");
define('lg_request_missing_attachment', 'The file %s was not found on the disk, please attach it again.');
