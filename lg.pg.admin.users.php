<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_users_title','Medewerkers');	
define('lg_admin_users_showdel','Toon inactieve medewerkers');
define('lg_admin_users_noshowdel','Terug naar actieve medewerkers');
define('lg_admin_users_addcat','Medewerker toevoegen');
define('lg_admin_users_addbutton','Medewerker toevoegen');
define('lg_admin_users_editcat','Bewerken: ');
define('lg_admin_users_mgprefs','Instellingen beheren');
define('lg_admin_users_editbutton','Medewerker opslaan');
define('lg_admin_users_firstname','Voornaam');
define('lg_admin_users_lastname','Achternaam');
define('lg_admin_users_email','Email');
define('lg_admin_users_email_confirm','Confirm Email');
define('lg_admin_users_username','Black Box/LDAP/AD username');
define('lg_admin_users_usernameex','Alleen nodig als u gebruikt maakt van authenticatie met black box of LDAP/AD');
define('lg_admin_users_password','Password');
define('lg_admin_users_changepassword','Voer een password in om te wijzigen');
define('lg_admin_users_changeavatar','Afbeelding aanpassen');
define('lg_admin_users_uploadavatar','En afbeelding uploaden');
define('lg_admin_users_avatars_classics','Klassiek');
define('lg_admin_users_avatars_monsters','Monsters');
define('lg_admin_users_avatars_robots','Robots');
define('lg_admin_users_avatars_animals','Dieren');
define('lg_admin_users_avatars_generic','Mensen');
define('lg_admin_users_avatars_nature','Natuur');
define('lg_admin_users_avatars_upload','Afbeeldingen moeten in GIF, PNG, of JPG formaat zijn, 48px breed en 48px hoog, en kleiner dan 50K');
define('lg_admin_users_emailnewuser','Wilt u deze nieuwe medewerker zijn of haar toegangsgegevens emailen?');	
define('lg_admin_users_nofyemail','Notificaties per mail sturen');
define('lg_admin_users_nofyemail2','Verstuur notificaties via alternatief emailadres');
define('lg_admin_users_nofysms','Stuur ALLE notificaties per SMS bericht');
define('lg_admin_users_nofysmsurgent','Verstuur alleen urgente berichten via SMS');
define('lg_admin_users_comm','Communicatie');
define('lg_admin_users_prefs','Voorkeuren');
define('lg_admin_users_defpublic','Default notities publiek op aanvraagpagina');
define('lg_admin_users_hidewysy','Gebruik geen WYSIWYS editor in de kennisbank');
define('lg_admin_users_shortcuts','Schakel toetsenbord sneltoetsen in voor de Werkruimte');
define('lg_admin_users_shortcutstitle','Toetsenbord snelcombinaties');
define('lg_admin_users_rhview','Default geschiedenisview');
define('lg_admin_users_rhview1','Volledige historie');
define('lg_admin_users_rhview4','Alleen notities');
define('lg_admin_users_htmlemail_editor','Editor voor aanvraag notities');
define('lg_admin_users_htmlemail_editorex','Default editor voor HTML aanvraag notities (HTML email moet ingeschakeld zijn)');
define('lg_admin_users_htmlemail_default','Systeem default');
define('lg_admin_users_htmlemail_wysiwyg','WYSIWYG - visuele editor');
define('lg_admin_users_htmlemail_markdown','Opgemaakte tekst - converteer tekst naar HTML');
define('lg_admin_users_noembed','Embed geen afbeeldingen in de aanvraaghistorie');
define('lg_admin_users_returntorequest','Na het sluiten van de aanvraag');
define('lg_admin_users_returntorequest0','Terug naar de Werkruimte');
define('lg_admin_users_returntorequest1','Terug naar aanvraag');
define('lg_admin_users_returntorequest2','Ga naar de volgende aanvraag in de rij/het filter');
define('lg_admin_users_showgs','Toon de start tab');
define('lg_admin_users_reqhistorylimit','# aanvraag historie items');
define('lg_admin_users_reqhistorylimitex','Aantal aanvraag historie items wat default getoond wordt');
define('lg_admin_users_notification','Notificatie');
define('lg_admin_users_notifynewreq','Notificeer bij niet toegekende nieuwe aanvragen');
define('lg_admin_users_notifynewreqdesc','Notificaties via de hierboven genoemde methodes');
define('lg_admin_users_email2','Alternatieve email');
define('lg_admin_users_phone','Telefoon');
define('lg_admin_users_sig','Email handtekening');
define('lg_admin_users_smsnum','SMS Phone Number');
define('lg_admin_users_smsnumex','exclude dashes');
define('lg_admin_users_default','Default contact');
define('lg_admin_users_assigncats','Toewijzen aan categorien');
define('lg_admin_users_assigncatsdesc','Categorien worden gebruikt om aanvragen te groeperen. Door medewerkers te koppelen aan categorien kunnen aanvragen aan hen toegewezen worden.');
define('lg_admin_users_outofoffice','Out of Office status');
define('lg_admin_users_outofofficedef','Medewerker is beschikbaar');
define('lg_admin_users_outofofficefwd','Stuur aanvragen door naar: ');
define('lg_admin_users_photo','Foto/icoon');
define('lg_admin_users_phototitle','Selecteer een foto/icoon');
define('lg_admin_users_fbadded','Medewerker toegevoegd');	
define('lg_admin_users_fbedited','Medewerker gewijzigd');
define('lg_admin_users_fbupdated','Instellingen geupdate');
define('lg_admin_users_fbdeleted','Medewerker inactief gezet');	
define('lg_admin_users_fbundeleted','Medewerker hersteld');
define('lg_admin_users_er_fname','Geef een voornaam op');
define('lg_admin_users_er_lname','Geef een achternaam op');
define('lg_admin_users_er_pass','Geef een password op. Dit is verplicht, ook als u Black Box authenticatie gebruikt.');
define('lg_admin_users_er_email','Geef een geldig emailadres op');
define('lg_admin_users_er_email_confirm','Please confirm the email');
define('lg_admin_users_er_email2','Geef een geldig alternatief emailadres op');
define('lg_admin_users_er_emaildup','Een andere medewerker gebruikt dit emailadres al');
define('lg_admin_users_er_sms','Geef een nummer op waar SMS berichten naar verstuurd kunnen worden');
define('lg_admin_users_er_usernamedup','Een andere medewerker gebruikt deze username al');
define('lg_admin_users_er_mailboxcheck','U kunt hier geen emailadres doorgeven wat al aan Helpdesk is gekoppeld voor binnenkomende aanvragen.');
define('lg_admin_users_er_user','Als u Black Box gebruikt moet u een username opgeven');
define('lg_admin_users_nomoreusers','Alle licenties zijn in gebruik. Maak een user inactief of schaf extra licenties aan.');
define('lg_admin_users_colid','ID');
define('lg_admin_users_coluser','Medewerker');
define('lg_admin_users_colut','Rechtengroep');		
define('lg_admin_users_colemail','Email');		
define('lg_admin_users_coldel','Maak inactief');
define('lg_admin_users_coldelwarn','Bent u er zeker dat u deze medewerker inactief wilt stellen?');
define('lg_admin_users_search','Zoeken: medewerkers');
define('lg_admin_users_er_default_cat', 'This user is the default contact in at least one category. You must reassign the default contact before this user can be made inactive.');

/* HelpSpot 5 Additions */
define('lg_admin_users_darkmode', 'Dark Mode');
define('lg_admin_users_password_info', 'Minimum of 8 characters');
define('lg_admin_users_avatars_emoji', 'Type in emoji using your device\'s emoji keyboard.<br /> Mac: CTRL + CMD + Space, Windows: Win + ;');
define('lg_admin_users_sig_desc', 'This signature will be included in your outbound email. You will usually want to supply the HTML version below as well.');
define('lg_admin_users_sig_html', 'Email Signature - HTML');
define('lg_admin_users_sig_html_desc', 'This signature will be included in your outbound email. You will usually want to supply the text version above as well.');
define('lg_admin_users_er_passlen', 'Password must be 8 characters or longer');
define('lg_admin_users_api_auth', 'API Authentication Tokens');
define('lg_admin_users_api_no_tokens', 'No API Tokens Created');
define('lg_admin_users_api_label_id', 'ID');
define('lg_admin_users_api_label_token', 'Token');
define('lg_admin_users_api_label_created_at', 'Created');
define('lg_admin_users_api_label_last_used', 'Last Used');
define('lg_admin_users_api_label_show', 'show');
define('lg_admin_users_api_label_unused', 'unused');
define('lg_admin_users_api_label_token_name', 'Name');
define('lg_admin_users_api_issue_new', 'Issue New Token');
define('lg_admin_users_api_token_name', 'Token Name');
define('lg_admin_users_api_token_new', 'Your API Token');
define('lg_admin_users_api_token_revoke_confirm', 'Are you sure you want to revoke this token?');
define('lg_admin_users_api_explanation', 'API Tokens are used to authenticate against HelpSpot\'s Private API. More information <a href="https://support.helpspot.com/index.php?pg=kb.page&id=162" target="_blank"> here</a>.');
define('lg_admin_users_emojiavatar', 'Set Emoji Avatar');
