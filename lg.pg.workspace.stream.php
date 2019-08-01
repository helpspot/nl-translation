<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_workspacestream_title','Werkruimte stream');
define('lg_workspacestream_streaming','Live stream');
define('lg_workspacestream_streamex','Realtime lijst van aanvraaghistorie van alle aanvragen in dit filter');
define('lg_workspacestream_live','LIVE');
define('lg_workspacestream_grid','Lijstweergave');
define('lg_workspacestream_stream','Alleen medewerkers');
define('lg_workspacestream_streamwpriv','Alleen medewerkers met prive notities');
define('lg_workspacestream_streamcustomers','Alleen klanten');
define('lg_workspacestream_streamcuststaff','Klanten en medewerkers');
?>