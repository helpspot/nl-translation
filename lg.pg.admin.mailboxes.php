<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_mailboxes_title','Mailboxen');	
define('lg_admin_mailboxes_nomailboxes','Er zijn nog geen mailboxen aangemaakt');
define('lg_admin_mailboxes_view','Bekijken');
define('lg_admin_mailboxes_edit','Bewerken');
define('lg_admin_mailboxes_preview','Preview');
define('lg_admin_mailboxes_showdel','Toon inactieve mailboxen');
define('lg_admin_mailboxes_noshowdel','Terug naar mailboxen');
define('lg_admin_mailboxes_options','Opties');
define('lg_admin_mailboxes_emailtemplates','Email templates');
define('lg_admin_mailboxes_insertdefault','Voorvullen met default');
define('lg_admin_mailboxes_trackidmissing','Tracking ID ({{ $tracking_id }}) ontbreekt in de onderwerpregel van de publieke notitie naar de klant. Het weglaten van deze ID verhinderd dat Helpspot antwoorden van de klant juist kan herleiden.');
define('lg_admin_mailboxes_help','Door een mailbox te configureren kan Helpspot de mail op een specifieke account controleren.Binnenkomende mail wordt gefilterd op spam en omgezet in aanvragen. 
									Admins kunnen ervoor kiezen om mail automatisch toe te wijzen aan medewerkers en categorien.');
define('lg_admin_mailboxes_mailbox','Mailbox');
define('lg_admin_mailboxes_mbuser','Username');
define('lg_admin_mailboxes_mbhost','Host naam');
define('lg_admin_mailboxes_mbpass','Password');
define('lg_admin_mailboxes_mbport','Poort');
define('lg_admin_mailboxes_mbtype','Account type');
define('lg_admin_mailboxes_mbsecurity','Security type');
define('lg_admin_mailboxes_mbsecurityex','Gebruikt voor beveiligde mailbox verbindingen');
define('lg_admin_mailboxes_secure','(beveiligd)');
define('lg_admin_mailboxes_replyname','Account naam');
define('lg_admin_mailboxes_replyemail','Antwoord aan email account');
define('lg_admin_mailboxes_replyemailnote','De email account die verbonden is aan deze box, bijvoorbeeld: support@mydomain.com');
define('lg_admin_mailboxes_replynamenote','Afzender die getoond wordt bij mail die van deze account verzonden worden');
define('lg_admin_mailboxes_enablear','Autmatisch antwoorden inschakelen');
define('lg_admin_mailboxes_etar','Automatisch antwoorden');
define('lg_admin_mailboxes_etpublic','Publieke notities aan klant');
define('lg_admin_mailboxes_etexternal','Externe notities');
define('lg_admin_mailboxes_etreqcreatedbyform','Aanvraag gemaakt middels portaal formulier');
define('lg_admin_mailboxes_etreqcreatedbyform_note','Noot: Deze template wordt alleen gebruikt voor secundaire portalen waarin deze mailbox is gedefinieerd als "Zend emails vanuit account".');
define('lg_admin_mailboxes_enablearnote','Beantwoord alle mail in deze box automatisch');
define('lg_admin_mailboxes_mbusernote','Bijvoorbeeld: bjones, bjones@mycompany.com');
define('lg_admin_mailboxes_mbhostnote','Bijvoorbeeld: pop.mycompany.com, mail.mycompany.com');
define('lg_admin_mailboxes_mbpassnote','Account password, geen @# tekens toegestaan');
define('lg_admin_mailboxes_mailboxnote','Normaliter kan de Inbox van Helpspot iedere mailbox binnen de account zijn.');
define('lg_admin_mailboxes_mbportnote','Doorgaans 110 voor POP3, 143 - IMAP, 995 - POP3S, 993 - IMAPS');
define('lg_admin_mailboxes_mbtypenote','Doorgaans POP3 of IMAP');
define('lg_admin_mailboxes_msgnote','De templates zullen de versies overschrijven die hier <a href="admin.php?pg=admin.tools.email">systeem email templates</a> staan, wanneer emails verzonden worden vanuit deze mailbox.');
define('lg_admin_mailboxes_defcat','Default categorie');
define('lg_admin_mailboxes_defcatnote','Email in deze mailbox zal automatisch toegewezen worden aan de geselecteerde categorie.');
define('lg_admin_mailboxes_nodefault','Geen default');
define('lg_admin_mailboxes_testmailbox','Test mailbox instellingen');
define('lg_admin_mailboxes_testmailboxex','Deze test bevestigd of de mailbox correct geconfigureerd is. U moet nog wel uw mailserver configureren om periodiek tasks.php aan te roepen, anders wordt geen mail opgehaald.');
define('lg_admin_mailboxes_testing','Aan het testen ...');
define('lg_admin_mailboxes_testnotesecure','Mogelijk vereist deze mailbox een beveiligde verbinding:');
define('lg_admin_mailboxes_testnotepop','Algemene POP instellingen: POP3S, Port 995, SSL-no validate');
define('lg_admin_mailboxes_testnoteimap','Algemene IMAP instellingen: IMAPS, Port 993, SSL-no validate');
define('lg_admin_mailboxes_addbox','Mailbox toevoegen');
define('lg_admin_mailboxes_addbutton','Mailbox toevoegen');
define('lg_admin_mailboxes_editbox','Bewerken: ');
define('lg_admin_mailboxes_editbutton','Bewerkingen opslaan');
define('lg_admin_mailboxes_savetoview','Opslaan om wijzigingen te kunnen zien');
define('lg_admin_mailboxes_samplesubject','RE: oorspronkelijk bericht van de klant');
define('lg_admin_mailboxes_deletemsg','Attentie: HelpSpot verwijderd email uit de mailbox.');
define('lg_admin_mailboxes_er_mailbox','<br>Voer een mailbox in');
define('lg_admin_mailboxes_er_username','<br>Geef een username op');
define('lg_admin_mailboxes_er_hostname','<br>Geef een hostname op');
define('lg_admin_mailboxes_er_pass','<br>Gee een password op');
define('lg_admin_mailboxes_er_passbadsymbol','<br>Uw password mag geen @ symbool bevatten');
define('lg_admin_mailboxes_er_type','<br>Selecteer een account type');
define('lg_admin_mailboxes_er_port','<br>Geef een poortnummer op');
define('lg_admin_mailboxes_er_autoname','<br>Geef een accountnaam op');
define('lg_admin_mailboxes_er_autoemail','<br>Geef een antwoord aan email account op');
define('lg_admin_mailboxes_er_autoemail2','<br>De emailaccount mag niet dezelfde zijn als die van een Helpspot gebruiker');
define('lg_admin_mailboxes_er_autoresp','<br>U heeft automatisch antwoorden ingeschakeld, maar geen antwoordtekst ingesteld');
define('lg_admin_mailboxes_fbadded','Mailbox toegevoegd');	
define('lg_admin_mailboxes_fbedited','Mailbox bewerkt');
define('lg_admin_mailboxes_fbdeleted','Mailbox inactief gemaakt');	
define('lg_admin_mailboxes_fbundeleted','Mailbox hersteld');
define('lg_admin_mailboxes_outbound','Uitgaande email');
define('lg_admin_mailboxes_outboundex','U kunt de default systeem instellingen voor SMTP gebruiken vanuit Admin->instellingen of zelf voor deze mailbox specifieke instellingen maken voor uitgaande mail (SMTP).');
define('lg_admin_mailboxes_outbounduse','SMTP die gebruikt moet worden');
define('lg_admin_mailboxes_outboundinternal','Systeem default');
define('lg_admin_mailboxes_outboundcustom','Aangepast');
define('lg_admin_mailboxes_noimap','De PHP IMAP extensie is niet geinstalleerd. Deze extensie is verplicht voor email integratie.');
define('lg_admin_mailboxes_outbound','Outbound Email');
define('lg_admin_mailboxes_outboundex','You can use the system default SMTP settings from Admin->Settings or set specific SMTP settings for outbound email just for this mailbox.');
define('lg_admin_mailboxes_outbounduse','SMTP Setting to Use');
define('lg_admin_mailboxes_outboundinternal','System Default');
define('lg_admin_mailboxes_outboundcustom','Custom');
define('lg_admin_mailboxes_noimap','The PHP IMAP extension is not installed. This extension is required to use the email integration features.');
	define('lg_admin_mailboxes_colid','ID');
	define('lg_admin_mailboxes_colbox','Mailbox');
	define('lg_admin_mailboxes_coldel','Mailbox inactief maken');
	define('lg_admin_mailboxes_coldelwarn','Weet u zeker dat u deze mailbox inactief wilt maken?');	
define('lg_admin_mailboxes_msgdefault','{{ $replyabove }}

Bedankt voor uw bericht. Uw aanvraag is goed ontvangen en wordt beoordeeld door onze supportmedewerkers. Hieronder vindt u links waarmee u zelf online de status van uw aanvraag kunt bekijken.
									
Bekijk uw aanvraag online: {{ $requestcheckurl }}&id={{ $accesskey }}
Aanvraag toegangscode:  {{ $accesskey }}

____________________________________
Raadpleeg ook eens onze andere bronnen:
Kennisbank: {{ $knowledgebookurl }}');	
define('lg_admin_mailboxes_msgdefault_html','
<html>
<body>
{{ $replyabove }}

<table width="100%" cellpadding="6" cellspacing="0" bgcolor="#dfe5ff">
<tr>
<td style="font-weight:bold;">Request Received</td>
<td align="right">
<a href="{{ $requestcheckurl }}&id={{ $accesskey }}">Volledige geschiedenis van aanvraag bekijken</a>
</td>
</tr>
</table>

<br />

<p>Bedankt voor uw bericht. Uw aanvraag is goed ontvangen en wordt beoordeeld door onze supportmedewerkers. Hieronder vindt u links waarmee u zelf online de status van uw aanvraag kunt bekijken.</p>

<br />
									
<p>Bekijk uw aanvraag online: <a href="{{ $requestcheckurl }}&id={{ $accesskey }}">{{ $requestcheckurl }}&id={{ $accesskey }}</a><br />
Aanvraag toegangscode: {{ $accesskey }}</p>

<hr width="80%">

<p>Raadpleeg ook eens onze andere bronnen:<br />
Kennisbank: <a href="{{ $knowledgebookurl }}">{{ $knowledgebookurl }}</a><br />


</body>
</html>
');	

/* HelpSpot 5 Additions */
define('lg_admin_mailboxes_archive', 'Archive Mail');
define('lg_admin_mailboxes_archive_note', 'With this enabled mail will be moved to a "helpspot_archive_folder" instead of deleting the email. This only works with imap.');
define('lg_admin_mailboxes_deletemsg', 'Note: HelpSpot deletes emails from the mailbox if this is disabled.');
define('lg_admin_mailboxes_depreciated', 'depreciated');
