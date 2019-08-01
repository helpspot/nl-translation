<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_responses_title','Antwoorden op aanvraag');	
define('lg_admin_responses_perms','Te gebruiken door');	
define('lg_admin_responses_foldernameex','U kunt submappen aanleggen tot drie niveaus diep. Gebruik hiervoor / als scheidingsteken tussen de mapnamen. Bijvoorbeeld: Accounts / Login / Passwords');
define('lg_admin_responses_myfolder','Mijn antwoorden');
define('lg_admin_responses_addfolder','Map toevoegen');
define('lg_admin_responses_folder','Map');
define('lg_admin_responses_advoptions','Aanvraag acties');
define('lg_admin_responses_adv_change','Wijzigen');
define('lg_admin_responses_adv_add','Invoegen bij');
define('lg_admin_responses_adv_subject','Email onderwerp');
define('lg_admin_responses_adv_status','Status');
define('lg_admin_responses_adv_category','Categorie');
define('lg_admin_responses_adv_reptags','Rapportage Tags');
define('lg_admin_responses_adv_assigned','Toegewezen medewerker');
define('lg_admin_responses_adv_assignednote','De medewerker moet aan de betreffende categorie toegevoegd zijn');
define('lg_admin_responses_adv_note','Notitie');
define('lg_admin_responses_adv_pub','Publieke notitie');
define('lg_admin_responses_adv_priv','Prive notitie');
define('lg_admin_responses_adv_ext','Externe notitie');
define('lg_admin_responses_adv_tofield','AAN veld (alleen voor externe notities)');
define('lg_admin_responses_adv_cc','CC veld');
define('lg_admin_responses_adv_bcc','BCC veld');
define('lg_admin_responses_adv_sepcomma','Scheidt emailadressen met een comma');
define('lg_admin_responses_adv_emailfrom','Stuur email namens');
define('lg_admin_responses_showdel','Toon inactieve antwoorden');
define('lg_admin_responses_noshowdel','Terug naar actieve antwoorden');
define('lg_admin_responses_colrestitle','Antwoord titel');
define('lg_admin_responses_resdel','Inactief maken');
define('lg_admin_responses_resdelwarn','Weet u zeker dat u dit antwoord inactief wilt maken?');
define('lg_admin_responses_search','Zoek: antwoorden');
define('lg_admin_responses_add','Antwoord toevoegen');
define('lg_admin_responses_edit','Bewerken: ');
define('lg_admin_responses_addbutton','Antwoord toevoegen');
define('lg_admin_responses_editbutton','Bewerkingen opslaan');
define('lg_admin_responses_restitle','Antwoord titel');
define('lg_admin_responses_response','Antwoord tekst');
define('lg_admin_responses_createdby','Gemaakt door');
define('lg_admin_responses_typeuser','Alleen aanmaker');
define('lg_admin_responses_typegroup','Groep');
define('lg_admin_responses_typeppl','Geselecteerde mensen');
define('lg_admin_responses_er_title','Geef een titel op voor dit antwoord');
define('lg_admin_responses_er_response','Geef een antwoordtekst op');
define('lg_admin_responses_er_folder','Maak of selecteer een map voor dit antwoord');
define('lg_admin_responses_fbedited','Antwoord bewerkt');
define('lg_admin_responses_fbadded','Antwoord toegevoegd');
define('lg_admin_responses_setactive','Het antwoord is geactiveerd');
define('lg_admin_responses_setinactive','Het antwoord is inactief gemaakt');
define('lg_admin_responses_explanation','Antwoorden zijn voorgedefinieerde teksten om snel te kunnen antwoorden op veel voorkomende vragen.');										
define('lg_admin_responses_saveas_details','Geef een naan aan het nieuwe antwoord.');
define('lg_admin_responses_togglerd','Aanvraagdetails');
define('lg_admin_responses_togglecf','Vrije velden');
define('lg_admin_responses_togglenote','Notitie opties');
define('lg_admin_responses_dontemail','Geen email versturen');
define('lg_admin_responses_owner', 'Response Owner');
?>
