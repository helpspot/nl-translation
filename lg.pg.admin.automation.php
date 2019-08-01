<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_automation_title','Automation regels');
define('lg_admin_automation_namecol','Regelnaam');
define('lg_admin_automation_add','Automation regel toevoegen');
define('lg_admin_automation_button','Regel toevoegen');
define('lg_admin_automation_buttonedit','Regel opslaan');
define('lg_admin_automation_anyall','Als aan %s van de volgende condities wordt voldaan');
define('lg_admin_automation_edit','Regel bewerken');
define('lg_admin_automation_name','Naam');
define('lg_admin_automation_then','Voer deze acties uit');
define('lg_admin_automation_any','enige');
define('lg_admin_automation_all','alle');
define('lg_admin_automation_colid','ID');
define('lg_admin_automation_options','Opties');
define('lg_admin_automation_options_nonotificaitons','Onderdruk alle notificaties aan medewerkers die voortkomen uit deze acties');
define('lg_admin_automation_options_directcallonly','Voer deze regel alleen uit als tasks2.php direct aangeroepen wordt met deze regel ID.');
define('lg_admin_automation_options_directcallonlyex','Normaal gesproken draaien alle regels zodra tasks2.php wordt uitgevoerd. Door deze optie aan te vinken zal deze regel niet draaien wanneer tasks2.php wordt aangeroepen tenzij tasks2.php rechtstreeks wordt aangeroepen met de ID van deze regel. <br /><a href="http://www.userscape.com/helpdesk/index.php?pg=kb.page&id=143" target="_blank">Informatie over hoe tasks2.php aan te roepen voor een enkele regel</a>.');
define('lg_admin_automation_del','Regel inactief maken');
define('lg_admin_automation_delwarn','Weet u zeker dat u deze regel inactief wilt maken?');
define('lg_admin_automation_showdel','Inactieve regels tonen');
define('lg_admin_automation_noshowdel','Terug naar regels');
define('lg_admin_automation_noname','Geef een naam op voor deze regel');
define('lg_admin_automation_nottested','U moet deze regel testen voor opslaan');
define('lg_admin_automation_fbinactive','Inactief gemaakte regel');
define('lg_admin_automation_fbrestored','Herstelde regel');
define('lg_admin_automation_fbadded','Regel toegevoegd');
define('lg_admin_automation_fbedited','Regel bewerkt');
define('lg_admin_automation_sorttitle','Volgorde van automation regels');
define('lg_admin_automation_note','Gebruik automation om aanvragen te escaleren, medewerkers en klanten te informeren, aanvragen te herverdelen, en meer. Attentie: onjuist ingerichte automation regels kunnen gevaarlijk zijn. Test altijd uw condities voor u een regel opslaat. Als een aanvraag eenmaal gewijzigd is door een regel kan dit niet ongedaan gemaakt worden.');
define('lg_admin_automation_confirm','Weet u zeker dat u deze regel toe wilt voegen? De regel zal meteen actief worden.');
?>