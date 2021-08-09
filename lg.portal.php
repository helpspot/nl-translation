<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_portal_phonesupport','Telefonische support');	
define('lg_portal_home','Home');	
define('lg_portal_submitrequest','Een aanvraag indienen');	
define('lg_portal_checkrequest','Een lopende aanvraag inzien');
define('lg_portal_requesthistory','Aanvraag geschiedenis');
define('lg_portal_accessidheader','Uw toegangscode');
define('lg_portal_accessnote','De toegangscode die u hierboven aantreft kunt u gebruiken om de status van uw aanvraag te bekijken. <br> Als u vaker statussen op wilt vragen, is het misschien handig om deze pagina aan uw favorieten toe te voegen.');
define('lg_portal_updatebox','Heeft u aanvullende informatie in verband met uw aanvraag? Vul deze in het vak hieronder in en uw update wordt toegevoegd aan de aanvraag.');
define('lg_portal_kb','Kennisbank');	
define('lg_portal_kbprinter','Printervriendelijke versie');
define('lg_portal_forums','Forums');
define('lg_portal_downloads','Downloads');
define('lg_portal_relatedpages','Verwante paginas');
define('lg_portal_search','Zoeken');
define('lg_portal_latesttopic','Meeste recente onderwerpen op het Forum');
define('lg_portal_helpfulpages','Hoogst gewaardeerde Kennisbank onderdelen');
define('lg_portal_highlightedpages','Uitgelichte paginas uit de Kennisbank');
define('lg_portal_searchkb','Kennisbank onderdelen');
define('lg_portal_tags','Kennis tags');
define('lg_portal_searchtags','Verwante tags');
define('lg_portal_searchforum','Forums');
define('lg_portal_hf','Deze pagina was');
define('lg_portal_helpful','Nuttig');
define('lg_portal_nothelpful','Niet nuttig');
define('lg_portal_hasvoted','Bedankt voor uw feedback');
define('lg_portal_sticky','Blijft bovenaan');
define('lg_portal_email','email');
define('lg_portal_postreply','Een reactie plaatsen');
define('lg_portal_reply','Reageren');
define('lg_portal_createatopic','Maak een onderwerp aan');
define('lg_portal_createtopic','Onderwerp aanmaken');
define('lg_portal_topictitle','Onderwerp (titel)');
define('lg_portal_topicclosed','Dit onderwerp is gesloten');
define('lg_portal_forumclosed','Dit forum is gesloten');
define('lg_portal_emailposter','Stuur een prive bericht naar de forum deelnemer');
define('lg_portal_to','Aan');
define('lg_portal_subject','Onderwerp');
define('lg_portal_message','Bericht');
define('lg_portal_yourname','Uw naam');
define('lg_portal_youremail','Uw emailadres');
define('lg_portal_sendemail','Stuur email');
define('lg_portal_yourpost','Uw post');
define('lg_portal_postername','Naam');
define('lg_portal_posteremail','Email');
define('lg_portal_posterurl','Uw website');
define('lg_portal_er_topic','Geef een onderwerp op');
define('lg_portal_er_message','Voer een bericht in');
define('lg_portal_er_name','Geef een naam op');
define('lg_portal_er_validcaptcha','Voer het afgebeelde woord in');
define('lg_portal_er_validrecaptcha','Voer hieronder het afgebeelde woord in');
define('lg_portal_prev','Vorige pagina');
define('lg_portal_next','Volgende pagina');
define('lg_portal_emailupdate','Abonneer u op updates via email');
define('lg_portal_request','Doe een aanvraag voor ondersteuning');
define('lg_portal_req_account','Account ID');
define('lg_portal_req_name','Naam');
define('lg_portal_req_file_upload','Voeg een bijlage toe (als u wilt)');
define('lg_portal_req_note','Omschrijf hieronder uw vraag en een supportmedewerker neemt contact met u op.');
define('lg_portal_req_firstname','Voornaam');
define('lg_portal_req_lastname','Achternaam');
define('lg_portal_req_email','Email');
define('lg_portal_req_phone','Telefoonnummer');
define('lg_portal_req_urgent','Is deze aanvraag dringend?');
define('lg_portal_req_category','In welke categorie zou u deze aanvraag indelen?');
define('lg_portal_req_yes','Ja');
define('lg_portal_req_no','Nee');
define('lg_portal_req_submitrequest','Aanvraag indienen');
define('lg_portal_req_update','Een update toevoegen');
define('lg_portal_req_updaterequest','Aanvraag updaten');
define('lg_portal_req_detailsheader','Aanvraag details');
define('lg_portal_req_generalerror','Er heeft zich een fout voorgedaan bij het verwerken van uw aanvraag. Probeert u het nogmaals.');
define('lg_portal_req_required','Dit veld is verplicht');
define('lg_portal_req_numberreq','In dit veld moet u een getal invoeren');
define('lg_portal_req_validemail','Geef een geldig emailadres op');
define('lg_portal_req_enterkey','Voer een toegangscode in om de status van een aanvraag in te zien');
define('lg_portal_subjectdefaultnew','Informatie over uw aanvraag');
define('lg_portal_req_login','Login om uw hele aanvraag geschiedenis in te zien');
define('lg_portal_req_emailpassword','een password maken of wijzigen');
define('lg_portal_req_loginemail','Email');
define('lg_portal_req_loginusername','Username');
define('lg_portal_req_loginpassword','Password');
define('lg_portal_req_loginbutton','Login');
define('lg_portal_req_loginfailed','Uw login is mislukt. Probeert het alstublieft nogmaals.');
define('lg_portal_req_logout','Log uit');
define('lg_portal_req_changepassword','Password wijzigen');
define('lg_portal_req_newpassword','Nieuw password');
define('lg_portal_req_confirm','Bevestig');
define('lg_portal_req_save','Opslaan');
define('lg_portal_req_sending','Bezig met versturen...');
define('lg_portal_req_passwordsaved','Password opgeslagen');
define('lg_portal_req_passwordposterror','Kon het password niet opslaan');
define('lg_portal_req_passworderror','Passwords moeten overeenkomen. Probeer het nogmaals.');
define('lg_portal_req_emailempty','Voer uw emailadres in');
define('lg_portal_req_emailerror','Voer een geldig emailadres in');
define('lg_portal_req_passwordsent','De mail om uw password te resetten is verstuurd. Controleer uw email.');
define('lg_portal_norequesthistory','Er zijn geen aanvragen bekend bij dit emailadres.');

define('lg_portal_check','Controleer');	
define('lg_portal_invalidkey','Deze toegangscode is niet bekend');	
define('lg_portal_requestclosed','Deze aanvraag is gesloten en kan niet meer ingezien worden. U kunt op de link hieronder klikken om een nieuwe aanvraag te maken of inloggen om uw complete aanvraag geschiedenis in te zien.');
define('lg_portal_closedsubmitnew','Nieuwe aanvraag indienen');
define('lg_portal_closedlogin','Login');
define('lg_portal_closedor','of');
define('lg_portal_checkboxchecked','Aangevinkt');
define('lg_portal_checkboxempty','Niet aangevinkt');

define('lg_portal_spamredirect','Post te beoordelen');
define('lg_portal_spamrenote','Deze post is gemarkeerd voor beoordeling door een beheerder. De post verschijnt op de site zodra de beheerder het heeft kunnen controleren.');
define('lg_portal_spamreturn','Klik om terug te gaan');
define('lg_portal_captcha','Voer het afgebeelde woord in');
define('lg_portal_recaptcha','Typ het afgebeelde woord over');
define('lg_portal_recaptcha_changewords','ander woord');

define('lg_portal_maintenance_title','Onderhoudsmodus');
define('lg_portal_maintenance_note','De helpdesk is nu offline voor onderhoud. Probeer het later nog eens.');

define('lg_portal_password_reset','Er is een nieuw password gemaakt voor uw account. Controleer uw email.');

define('lg_portal_tagsearch','Tag');
define('lg_portal_tagsearch_books','Overeenkomsten uit de Kennisbank');
define('lg_portal_tagsearch_forums','Overeenkomsten uit het Forum');

define('lg_portal_agree_terms_privacy', 'I agree to the <a href="%s" target="_blank">Terms of Service</a> and <a href="%s" target="_blank">Privacy Policy</a>');
define('lg_portal_agree_terms', 'I agree to the <a href="%s" target="_blank">Terms of Service</a>');
define('lg_portal_agree_privacy', 'I agree to the <a href="%s" target="_blank">Privacy Policy</a>');
define('lg_portal_req_terms', 'You must agree to the terms');

/* HelpSpot 5 Additions */
define('lg_portal_create_login', 'Create an account');
define('lg_portal_loginrequired', 'Login Required');
define('lg_portal_login_forgot', 'Forgot Password');
define('lg_portal_er_unique_email', 'That username already exists. <a href=index.php?pg=login.forgot>Reset your password here.</a>');
define('lg_portal_create_login_ex', 'Create an account to view your request history');
define('lg_portal_login_forgot_ex', 'Reset Your Password');
define('lg_portal_req_logincreate', 'Create an Account');
define('lg_portal_req_loginpassword_confirm', 'Confirm Password');
define('lg_portal_req_createbutton', 'Create Account');
define('lg_portal_req_pw_reset_link', 'Send Password Reset Link');

define('lg_portal_agree_terms_privacy', 'I agree to the <a href="%s" target="_blank">Terms of Service</a> and <a href="%s" target="_blank">Privacy Policy</a>');
define('lg_portal_agree_terms', 'I agree to the <a href="%s" target="_blank">Terms of Service</a>');
define('lg_portal_agree_privacy', 'I agree to the <a href="%s" target="_blank">Privacy Policy</a>');
define('lg_portal_req_terms', 'You must agree to the terms');
