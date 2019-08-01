<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_rules_title','Mail regels');
define('lg_admin_rules_namecol','Regel naam');
define('lg_admin_rules_add','Een mail regel toevoegen');
define('lg_admin_rules_button','Regel toevoegen');
define('lg_admin_rules_buttonedit','Regel opslaan');
define('lg_admin_rules_edit','Regel bewerken');
define('lg_admin_rules_name','Naam');
define('lg_admin_rules_anyall','Als aan %s van de volgende condities wordt voldaan');
define('lg_admin_rules_then','Voer deze acties uit');
define('lg_admin_rules_any','enige');
define('lg_admin_rules_all','alle');
define('lg_admin_rules_colid','ID');
define('lg_admin_rules_del','Maak regel inactief');
define('lg_admin_rules_delwarn','Weet u zeker dat u deze regel inactief wilt maken?');
define('lg_admin_rules_showdel','Toon inactieve regels');
define('lg_admin_rules_noshowdel','Terug naar actieve regels');
define('lg_admin_rules_noname','Geef een naam op voor deze regel');
define('lg_admin_rules_fbinactive','Regel inactief gemaakt');
define('lg_admin_rules_fbrestored','Regel hersteld');
define('lg_admin_rules_fbadded','Regel toegevoegd');
define('lg_admin_rules_fbedited','Regel bewerkt');
define('lg_admin_rules_sorttitle','Volgorde van mailregels');
define('lg_admin_rules_note','Regels zijn alleen van toepassing op nieuwe emails; eventuele opvolging van bestaande aanvragen wordt niet beinvloed. Belangrijk: mail regels beinvloeden de tijd die Helpspot nodig heeft om email te importeren. Als u veel mail regels heeft ingesteld moet u mogelijk de toegestane tijd voor het importeren (tasks.php) verhogen.');
define('lg_admin_rules_hourlabel','Regel actief');
define('lg_admin_rules_anyhours','Altijd');
define('lg_admin_rules_bizhours','Alleen tijdens kantooruren');
define('lg_admin_rules_offhours','Alleen buiten kantoortijden');
define('lg_admin_rules_options','Opties');
?>