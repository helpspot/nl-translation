<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_tools_customer_title','Klantenservice');
define('lg_admin_tools_customer_manage_data','Klanten Data Bewerken');
define('lg_admin_tools_customer_export_data','Data Klant Exporteren');
define('lg_admin_tools_customer_export_email','Exporteren via Email');
define('lg_admin_tools_customer_email','Email');
define('lg_admin_tools_customer_email_address','Emailadres');
define('lg_admin_tools_customer_export','Exporteren');
define('lg_admin_tools_customer_delete_data','Data Klant Verwijderen');
define('lg_admin_tools_customer_delete_request','Verzoek verwijderen');
define('lg_admin_tools_customer_delete_request_note','Notitie van verzoek verwijderen');
define('lg_admin_tools_customer_delete_request_note_id','ID Notitie');
define('lg_admin_tools_customer_delete_request_note_info','Hiermee wordt een enkel item uit de verzoekgeschiedenis permanent verwijderd, samen met eventuele bijbehorende bijlagen.');
define('lg_admin_tools_customer_delete','Verwijderen');
define('lg_admin_tools_customer_request_id','ID Verzoek');
define('lg_admin_tools_customer_request_id_note','Hiermee wordt één verzoek definitief verwijderd');
define('lg_admin_tools_customer_delete_by_email','Verwijderen via Email');
define('lg_admin_tools_customer_delete_by_email_note','Hiermee wordt alles in de database dat betrekking heeft op een e-mailadres definitief verwijderd.');
define('lg_admin_tools_customer_delete_by_id','Verwijderen via Klant ID');
define('lg_admin_tools_customer_delete_by_id_note','Hiermee wordt alles in de database met betrekking tot een klant-ID permanent verwijderd.');
define('lg_admin_tools_customer_sure','Weet u zeker dat u dit wilt verwijderen?');
define('lg_admin_tools_customer_agree','U moet "I AGREE" typen om te bevestigen.');
define('lg_admin_tools_customer_mutli_found','We hebben %s verzoeken gevonden voor %s. Weet u zeker dat u deze wilt verwijderen?');
define('lg_admin_tools_customer_one_found','Weet u zeker dat u dit wilt verwijderen?');
define('lg_admin_tools_customer_warning','<b>WAARSCHUWING:</b> Deze actie zal gelijk worden uitgevoerd en is <b>permanent</b>. Typ "I AGREE" hieronder om te bevestigen.');
define('lg_admin_tools_customer_confirm','Bevestigen');
define('lg_admin_tools_customer_finished','Het/de verzoek(en) zijn verwijdert.');
?>
