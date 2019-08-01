<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_forums_manage','Beheren');
define('lg_forums_order','Volgorde');
define('lg_forums_saveorder','Volgorde opslaan');
define('lg_forums_orderchanged','Volgorde aangepast');
define('lg_forums_addforum','Forums beheren');
define('lg_forums_title','Forums');
define('lg_forums_spamtitle','Forum SPAM');
define('lg_forums_public','Publieke forums');
define('lg_forums_private','Prive forums');
define('lg_forums_forum','Forum');
define('lg_forums_topic','Onderwerp');
define('lg_forums_message','Bericht');
define('lg_forums_desc','Omschrijving');
define('lg_forums_author','Auteur');
define('lg_forums_post','Post');
define('lg_forums_postcount','Posts');
define('lg_forums_postreply','Post antwoord');
define('lg_forums_posttopic','Post onderwerp');
define('lg_forums_latesttopics','Nieuwste %s onderwerpen');
define('lg_forums_latestposts','Nieuwste %s posts');
define('lg_forums_closed','Gesloten');
define('lg_forums_closedtopdesc','U kunt hier niet meer op antwoorden');
define('lg_forums_updatetopic','Onderwerp bijgewerkt');
define('lg_forums_sticky','Plakkend onderwerp');
define('lg_forums_stickydesc','Dit onderwerp zal altijd bovenaan de lijst blijven staan');
define('lg_forums_kudelcheck','Weet u zeker dat u deze persoon wilt verwijderen uit de lijst met bekende gebruikers?');

define('lg_forums_name','Forum naam');
define('lg_forums_choosemods','Kies beheerders');
define('lg_forums_modsdesc','Beheerders hebben zeggenschap over alle uitwisselingen op het betreffende forum.');
define('lg_forums_forumtype','Forum type');
define('lg_forums_forumtype_public','Publiek');
define('lg_forums_forumtype_private','Prive');
define('lg_forums_privatelabeldesc','Prive forums zijn alleen toegangkelijk voor gebruikers met een HelpSpot account.');
define('lg_forums_closeddesc','Door te sluiten kunnen er geen nieuwe onderwerpen of posts meer toegevoegd worden.');
define('lg_forums_addbutton','Forum toevoegen');
define('lg_forums_editbutton','Wijzigingen opslaan');
define('lg_forums_edit','Bewerken:');
define('lg_forums_er_noname','Geef een naam op voor het forum');
define('lg_forums_er_notopic','Geef een onderwerp op');
define('lg_forums_er_nopost','Voer een bericht in');
define('lg_forums_er_nopostername','Geef een naam op');
define('lg_forums_added','Forum toegevoegd');
define('lg_forums_updated','Forum gewijzigd');
define('lg_forums_deleteforum','Forum verwijderen');
define('lg_forums_deleted','Forum verwijderd');
define('lg_forums_deletetopic','Onderwerp verwijderen');
define('lg_forums_deletetopicspam','Verwijder onderwerp als SPAM');
define('lg_forums_deletetopicwarn','Weet u zeker dat u dit onderwerp wilt verwijderen? U kunt dit niet ongedaan maken.');
define('lg_forums_deletetopicwarnspam','Weet u zeker dat u dit onderwerp wilt verwijderen? Deze actie draagt bij aan het zelflerend vermogen van Helpspot om SPAM te herkennen.');
define('lg_forums_deletepost','Post verwijderen');
define('lg_forums_lastpostdelete','Dit is de enige post in dit onderwerp. U kunt dit niet verwijderen zonder het hele onderwerp te verwijderen.');
define('lg_forums_deletepostspam','Post verwijderen als SPAM');
define('lg_forums_deletepostwarn','Weet u zeker dat u deze post wilt verwijderen? U kunt dit niet ongedaan maken.');
define('lg_forums_deletepostspamwarn','Weet u zeker dat u deze post wilt verwijderen als SPAM? Deze actie draagt bij aan het zelflerend vermogen van HelpSpot om SPAM te herkennen.');
define('lg_forums_deleteforumcheck','Weet u zeker dat u dit forum wilt verwijderen? Deze actie kan niet ongedaan gemaakt worden en kan enkele minuten duren.');
define('lg_forums_createtopic','Maak een nieuw onderwerp');
define('lg_forums_postername','Naam');
define('lg_forums_posteremail','Email');
define('lg_forums_ip','IP');
define('lg_forums_subbyemail','Geabonneerd via email');
define('lg_forums_opsys','Operating System');
define('lg_forums_browser','Browser');
define('lg_forums_posterurl','Website URL');
define('lg_forums_emailupdate','Abonneren op emailberichten over nieuwe posts');
define('lg_forums_modtopiccontrol','Onderwerpbeheer voor beheerders');
define('lg_forums_topicclosed','Dit onderwerp is gesloten');
define('lg_forums_forumclosed','Dit forum is gesloten');
define('lg_forums_modpost','Posts beheren');
define('lg_forums_turnreq','Omzetten in een aanvraag');
define('lg_forums_knownuser','Bekende gebruiker');
define('lg_forums_mgknownuser','Bekende gebruiker beheren');
define('lg_forums_mgknownuserdesc','Een forumgebruiker aanmerken als bekende gebruiker maakt het voor de beheerders gemakkelijker om de juiste toegang te geven.');
define('lg_forums_mgknownuserremove','Verwijderen');
define('lg_forums_kunewlabel','Of gebruik een nieuw label');
define('lg_forums_kuexistinglabels','Kies een bestaand label');
define('lg_forums_kusaveuser','Bekende gebruiker opslaan');
define('lg_forums_opml','Forum RSS feeds');
define('lg_forums_exportopml','Exporteer feeds als OPML');

define('lg_forums_initlabels','helpdeskmedewerker,klant, expert-gebruiker, beheerder');

define('lg_forums_spam_mod','Beheerde SPAM');
define('lg_forums_spam_prob','Waarschijnlijkheid');
define('lg_forums_spam_markdelspam','SPAM verwijderen');
define('lg_forums_spam_marknotspam','Markeer als NIET SPAM');
define('lg_forums_spam_submit','Indienen');
define('lg_forums_spam_deleted','Posts verwijderd, filter getraind');
define('lg_forums_spam_notdeleted','Posts verwijder uit de SPAM rij, filter getraind');
define('lg_forums_spam_spammessage','opmerking: SPAM moet verwijderd worden voor het filter er van kan leren');
define('lg_forums_meta_web','Web');
define('lg_forums_meta_email','Email');
define('lg_forums_batchchange','Verwerken van batch');
?>