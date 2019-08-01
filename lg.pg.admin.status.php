<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_status_title','Status types');	
define('lg_admin_status_addcat','Voeg een status toe');
define('lg_admin_status_addbutton','Voeg status toe');
define('lg_admin_status_editcat','Bewerken: ');
define('lg_admin_status_editbutton','Bewerkingen opslaan');
define('lg_admin_status_showdel','Toon inactieve statussen');
define('lg_admin_status_noshowdel','Terug naar statussen');
define('lg_admin_status_colid','ID');
define('lg_admin_status_colstatus','Status');
define('lg_admin_status_coldel','Maak status inactief');
define('lg_admin_status_coldelwarn','Weet u zeker dat u deze status inactief wilt maken?');
define('lg_admin_status_fbdeleted','Status verwijderd');	
define('lg_admin_status_fbundeleted','Status hersteld');
define('lg_admin_status_fbedited','Status bewerkt');	
define('lg_admin_status_fbadded','Status toegevoegd');
define('lg_admin_status_er_status','Vul de status in');

?>