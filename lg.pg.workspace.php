<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_workspace_title','Werkruimte');

define('lg_workspace_options','Opties');

define('lg_workspace_filterop','Filter opties');
define('lg_workspace_mkdefault','Maak dit de default werkruimte');
define('lg_workspace_edit','Filter bewerken');
define('lg_workspace_delete','Filter verwijderen');
define('lg_workspace_grid','Aanvragen lijst');
define('lg_workspace_stream','Notitie stream');
define('lg_workspace_report','Rapportage view');
define('lg_workspace_triage','Aanvragen beoordelen');
define('lg_workspace_rss','RSS feed');
define('lg_workspace_export','CSV export');
define('lg_workspace_triagepanel','Aan het beoordelen');
define('lg_workspace_triageassign','Toewijzen');
define('lg_workspace_triagecategory','Categorie');
define('lg_workspace_triageassignto','Toewijzen aan');
define('lg_workspace_deleteconf','Weet u zeker dat u dit filter wilt verwijderen?');
define('lg_workspace_merge','Samenvoegen');
define('lg_workspace_movetotrash','Trash');
define('lg_workspace_changestatus','Status');
define('lg_workspace_markspam','SPAM');
define('lg_workspace_marknotspam','Markeren als geen SPAM');
define('lg_workspace_nottrash','Verwijderen uit trash');
define('lg_workspace_close','Sluiten');
define('lg_workspace_respond','Batchgewijs beantwoorden');
define('lg_workspace_markdelspam','SPAM verwijderen');
define('lg_workspace_moveto','Opnieuw toewijzen');
define('lg_workspace_selectcat','Selecter een categorie');
define('lg_workspace_assignto','Toewijzen aan');
define('lg_workspace_selstatus','Kies een status');
define('lg_workspace_closestatus','Kies een afsluit status');
define('lg_workspace_selmerge','Voeg alle geselecteerde aanvragen samen tot');
define('lg_workspace_customize','Kolommen instellen');
define('lg_workspace_notemail','Sommige aanvragen zijn als SPAM gemarkeerd omdat ze niet uit email of van de portaal afkomstig zijn');
define('lg_workspace_notemailqm','De aanvraag is niet gemarkeerd als SPAM omdat deze niet van email of de portaal afkomstig is');
define('lg_workspace_spammessage','Opmerking: SPAM moet verwijderd wordt om het zelflerend vermogen van het SPAM filter te trainen');
define('lg_workspace_spammessageoff','Opmerking: het SPAM filter is uitgeschakeld in Admin->Instellingen->Email integratie. Met deze instelling verwijderd u met SPAM de aanvraag, maar het zelflerend vermogen van het filter wordt niet getraind.');
define('lg_workspace_trashmessage','Aanvragen in de trash worden verwijderd %s nadat ze daarin geplaatst zijn. Verwijdering kan niet ongedaan gemaakt worden.');
define('lg_workspace_trashmessagenever','Aanvragen in trash zullen niet verwijderd worden.');
define('lg_workspace_stuckmsg','HelpSpot is niet in staat om een of meerdere emails uit de mailbox te halen.');
define('lg_workspace_stuckmsg3','Om deze boodschap te vermijden, verwijdert u de email(s) handmatig uit de emailbox.');
define('lg_workspace_stuckmsg2','Een van de mogelijke oorzaken is dat er te weinig PHP geheugen beschikbaar is voor het importeren van email. <a href="http://www.userscape.com/helpdesk/index.php?pg=kb.page&id=34" target="_blank">Klik hier</a> voor informatie over het beheren van geheugeninstellingen. Een andere mogelijke reden is dat de email niet in het juiste formaat is en daardoor niet geparsed/geimporteerd kan worden.');
define('lg_workspace_stucklist','Lijst van vasthangende emails');
define('lg_workspace_stuckbox','Mailbox');
define('lg_workspace_stuckfrom','Email van');
define('lg_workspace_stuckdate','Datum');
define('lg_workspace_stuckviewdetails','Bekijk details.');
define('lg_workspace_stuckretry','Leegmaken en opnieuw proberen');
define('lg_workspace_markunread_msg','Markeer als ongelezen');
define('lg_workspace_markread_msg','Markeer als gelezen');
define('lg_workspace_batchchange','Bezig met verwerken van batch');
define('lg_workspace_viewable','Zichtbaar voor');
define('lg_workspace_viewable_onlyme','Alleen ikzelf');
define('lg_workspace_viewable_permstaff','Medewerkers met toestemming');
define('lg_workspace_viewable_everyone','Iedereen');
define('lg_workspace_viewable_group','Groep');
