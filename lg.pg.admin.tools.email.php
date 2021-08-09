<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_emailtemplates_title','Email templates aanpassen');
define('lg_admin_emailtemplates_savebutton','Templates opslaan');
define('lg_admin_emailtemplates_saved','Templates opgeslagen');
define('lg_admin_emailtemplates_forumreply','Forumonderwerp abonnee');
define('lg_admin_emailtemplates_staff','Medewerker notificaties');
define('lg_admin_emailtemplates_newstaff','Welkom nieuwe medewerker');
define('lg_admin_emailtemplates_retrievepassword','Reset portaal password');
define('lg_admin_emailtemplates_newportalpass','Nieuw portaal password');
define('lg_admin_emailtemplates_ccstaff','Licht medewerker in bij aanvraag');
define('lg_admin_emailtemplates_public','Publieke notities voor klanten');
define('lg_admin_emailtemplates_publicex','Dit is de default publieke notitie template. Per mailbox kan ingesteld worden of er een andere template dan de default gebruikt moet worden. Bekijk de individuele mailboxen <br /><a href="admin.php?pg=admin.mailboxes">hier</a>');
define('lg_admin_emailtemplates_externalex','Dit is de default publieke notitie template. Per mailbox kan ingesteld worden of een andere template dan de default gebruikt moet worden.');
define('lg_admin_emailtemplates_reminders','Herinneringen');
define('lg_admin_emailtemplates_sms','SMS berichten');
define('lg_admin_emailtemplates_trackidmissing','Tracking ID ({{ $tracking_id }}) ontbreekt in de onderwerpregel van de publieke notitie aan de klant. Deze ID weglaten verhinderd dat Helpspot mail juist gekoppeld wordt aan openstaande aanvragen.');
define('lg_admin_emailtemplates_partials','Gedeeltelijke templates');
define('lg_admin_emailtemplates_replyabove','Hierboven antwoorden');
