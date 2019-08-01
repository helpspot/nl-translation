<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_home_admin_title','Administrator Home');
define('lg_home_admin_newhelpspot','Een nieuwe versie van HelpSpot is beschikbaar');
define('lg_home_admin_download','download');
define('lg_home_admin_releasenotes','notities');
define('lg_home_admin_instructions','instructies');
define('lg_home_admin_permwarning','Deze installatie bronfiles (sommigen of allemaal) lijken schrijfbaar te zijn voor de webserver(777). Pas om veiligheidsredenen de file permissions aan.');

define('lg_home_admin_install','HelpSpot installatie');
define('lg_home_admin_renew','Vernieuwen');
define('lg_home_admin_licupload','Licentie uploaden');
define('lg_home_admin_licuploadok','Nieuwe licentie geupload');
define('lg_home_admin_licnotvalid','Deze licentie is niet geldig. Controleer of u de meest recente heeft geupload.');
define('lg_home_admin_toomanyusers','U heeft meer actieve gebruikers dan uw licentie toestaat. Deactiveer een aantal gebruikers en probeer opnieuw om de licentie te uploaden.');
define('lg_home_admin_customerid','Klant ID');
define('lg_home_admin_licusers','Medewerkers/licenties');
define('lg_home_admin_licsupport','Support eindigt');
define('lg_home_admin_version','HelpSpot versie');
define('lg_home_admin_maintenance','Onderhoudsmodus');
define('lg_home_admin_maintenance_desc','Het systeem onmiddellijk in onderhoudsmodus plaatsen (er kunnen geen nieuwe aanvragen gemaakt worden en medewerkers kunnen niet inloggen). De onderhoudsmodus wordt automatisch in- en uitgeschakeld tijdens een update van Helpspot.');
define('lg_home_admin_maintenance_button','Onderhoudsmodus inschakelen');
define('lg_home_admin_maintenance_button_conf','Weet u het zeker?');
define('lg_home_admin_addlicenses','Licenties toevoegen');
define('lg_home_admin_unlimited','Site licentie');
?>