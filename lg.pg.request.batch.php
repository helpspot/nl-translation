<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_request_batch_title','Batchgewijs aanvragen wijzigen');
define('lg_request_batch_instr','Verlaat deze pagina niet tot het proces voltooid is');
define('lg_request_batch_processed','%s van %s voltooid');
define('lg_request_batch_processing','Bezig met verwerken...');
define('lg_request_batch_complete_link','Ga naar bacth filter');
define('lg_request_batch_smtp','SMTP fout, email niet verstuurd');
define('lg_request_batch_ergeneral','Fout, aanvraag niet bijgewerkt');
define('lg_request_batch_batch','Batch');
define('lg_request_batch_batchhistory','Batch geschiedenis');
?>