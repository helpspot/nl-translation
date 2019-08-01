<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_trigger_title','Triggers');
define('lg_admin_trigger_namecol','Trigger naam');
define('lg_admin_trigger_add','Trigger toevoegen');
define('lg_admin_trigger_button','Trigger toevoegen');
define('lg_admin_trigger_buttonedit','Trigger opslaan');
define('lg_admin_trigger_anyall','Als een aanvraag is %s of aan %s van de volgende voorwaarden is voldaan');
define('lg_admin_trigger_edit','Trigger bewerken');
define('lg_admin_trigger_name','Naam');
define('lg_admin_trigger_then','Voer deze acties uit');
define('lg_admin_trigger_any','enige');
define('lg_admin_trigger_all','alle');
define('lg_admin_trigger_oncreate','Aangemaakt');
define('lg_admin_trigger_onupdate','Bijgewerkt');
define('lg_admin_trigger_colid','ID');
define('lg_admin_trigger_options','Opties');
define('lg_admin_trigger_hourlabel','Trigger actief');
define('lg_admin_trigger_log','Log trigger runs in request history');
define('lg_admin_trigger_anyhours','Altijd');
define('lg_admin_trigger_bizhours','Alleen tijdens kantooruren');
define('lg_admin_trigger_offhours','Alleen buiten kantooruren');
define('lg_admin_trigger_options_nonotificaitons','Onderdruk notificaties aan medewerkers die voortkomen uit deze acties');
define('lg_admin_trigger_del','Maak trigger inactief');
define('lg_admin_trigger_delwarn','Weet u zeker dat u de trigger inactief wilt maken?');
define('lg_admin_trigger_showdel','Toon inactieve triggers');
define('lg_admin_trigger_noshowdel','Terug naar triggers');
define('lg_admin_trigger_noname','Geef de trigger een naam');
define('lg_admin_trigger_fbinactive','Trigger inactief gemaakt');
define('lg_admin_trigger_fbrestored','Trigger hersteld');
define('lg_admin_trigger_fbadded','Trigger toegevoegd');
define('lg_admin_trigger_fbedited','Trigger bewerkt');
define('lg_admin_trigger_sorttitle','Trigger Volgorde');
define('lg_admin_trigger_note','Houdt realtime wijzigingen in aanvragen in de gaten en neemt onmiddellijk actie. <br /><b>Intensieve of talrijke triggers kunnen de performance van het systeem verlagen</b>');
define('lg_admin_trigger_confirm','Weet u zeker dat u deze trigger toe wilt voegen? De trigger zal onmiddellijk actief worden.');
?>
