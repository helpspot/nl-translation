<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_groups_title','Rechtengroepen');	
define('lg_admin_groups_addcat','Groep toevoegen');
define('lg_admin_groups_addbutton','Voeg groep toe');
define('lg_admin_groups_delbutton','Groep verwijderen');
define('lg_admin_groups_delbuttonwarn','Weet u zeker dat u deze groep wilt verwijderen? Dit kan niet ongedaan gemaakt worden.');
define('lg_admin_groups_delbuttoncant','Deze groep bevat nog medewerkers en kan daarom niet verwijderd worden.');
define('lg_admin_groups_editcat','Bewerken: ');
define('lg_admin_groups_editbutton','Bewerkingen opslaan');
define('lg_admin_groups_adminmsg','Het administrator niveau kan niet bewerkt worden.');

define('lg_admin_groups_permissions','Modulerechten');
define('lg_admin_groups_permissionsaccess','Toegangsrechten');
define('lg_admin_groups_fModuleReports','Rapportages');
define('lg_admin_groups_fModuleForumsPriv','Priveforums bekijken');
define('lg_admin_groups_fModuleKbPriv','Prive kennisbank items bekijken');
define('lg_admin_groups_fViewInbox','Werkruimte inbox');

define('lg_admin_groups_fCanBatchRespond','Batchgewijs beantwoorden van aanvragen');
define('lg_admin_groups_fCanMerge','Aanvragen samenvoegen');
define('lg_admin_groups_fCanViewOwnReqsOnly','Kan alleen eigen aanvragen inzien');
define('lg_admin_groups_fCanViewOwnReqsOnlyex','Deze rol is erg beperkt omdat de gebruiker alleen de eigen aanvragen kan zien. Dit geldt ook voor de zoekfuncties.');
define('lg_admin_groups_fLimitedToAssignedCats','Beperken tot uitsluitend toegewezen categorien');
define('lg_admin_groups_fLimitedToAssignedCatsex','Deze gebruiker kan alleen aanvragen toewijzen aan gebruikers in dezelfde categorie.');
define('lg_admin_groups_fCanAdvancedSearch','Toegang tot geavanceerd zoeken');
define('lg_admin_groups_fCanManageSpam','Manage SPAM (als spam markeren en verwijderen)');
define('lg_admin_groups_fCanManageTrash','Manage Trash (als trash aanmerken en verwijderen)');
define('lg_admin_groups_fCanManageKB','Manage Knowledge Books (aanmaken, bewerken, verwijderen)');
define('lg_admin_groups_fCanManageForum','Manage forums  (aanmaken, bewerken, verwijderen)');


define('lg_admin_groups_colid','ID');
define('lg_admin_groups_colgroup','Naam');
define('lg_admin_groups_colclonegrp','Kloon groep');
define('lg_admin_groups_colclone','Kloon');

define('lg_admin_groups_fbdeleted','Groep verwijderd');	
define('lg_admin_groups_fbedited','Groep bewerkt');	
define('lg_admin_groups_fbadded','Groep toegevoegd');
define('lg_admin_groups_er_groups','Vul de naam van de groep in');

?>