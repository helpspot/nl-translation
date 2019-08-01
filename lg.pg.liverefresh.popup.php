<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_liverefresh_title','Live Refresh');
define('lg_liverefresh_body','Live Refresh controleert de server elke 30 seconden om te zien of aanvragen die verbonden zijn aan uw account  
							  gewijzigd of toegevoegd zijn. Als er veranderingen gevonden zijn dan wordt uw venster bijgewerkt. Ook de tellers in uw 
							  navigatiebalk worden bijgewerkt. Live Refresh houdt de weergave instellingen van uw wachtrij of filter in stand.
							  De door u ingestelde sorteerwijze en dergelijke wordt dus niet veranderd na een Live Refresh.');
?>