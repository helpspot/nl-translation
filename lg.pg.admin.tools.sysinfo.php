<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_sysinfo_title','Systeem Informatie');
define('lg_admin_sysinfo_systemvars','System variabelen');
define('lg_admin_sysinfo_phpvars','PHP server variabelen');
define('lg_admin_sysinfo_extensions','Geinstalleerde PHP extensies');
define('lg_admin_sysinfo_hsdb','HelpSpot database');
define('lg_admin_sysinfo_tablerepair','Tabel gerepareerd');
?>