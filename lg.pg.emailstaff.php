<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_emailpopup_sendbutton','Verstuur email');
define('lg_emailpopup_subject','Onderwerp');
define('lg_emailpopup_body','Bericht');
define('lg_emailpopup_failed','Niet in staat email te verzenden');
define('lg_emailpopup_success','Email verstuurd');

define('lg_emailstaff_title','Email medewerker');
define('lg_emailstaff_select','Kies medewerkers om te emailen');
?>