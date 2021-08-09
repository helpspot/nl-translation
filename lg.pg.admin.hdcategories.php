<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_admin_categories_title','Categorien');	
define('lg_admin_categories_showdel','Toon inactieve categorien');
define('lg_admin_categories_noshowdel','Terug naar categorien');
define('lg_admin_categories_cathelp','Categorien worden gebruikt om aanvragen te groeperen. Deze groeperingen stroomlijnen workflow en rapportages.');
define('lg_admin_categories_category','Categorie naam');
define('lg_admin_categories_categorygroup','Categorie groepering');
define('lg_admin_categories_nogroup','Geen groep');
define('lg_admin_categories_staffmem','Medewerkers in deze categorie');
define('lg_admin_categories_staffdesc','Beschikbare medewerkers voor deze categorie');
define('lg_admin_categories_defcontact','Default medewerker');
define('lg_admin_categories_autoassign','Automatisch aanvragen toewijzen');
define('lg_admin_categories_autoassignex','Iedere aanvraag in de inbox (nieuw of teruggezet naar de inbox) zal automatisch aan een medewerker worden toegewezen volgens een formule.');
define('lg_admin_categories_aaoff','Uit');
define('lg_admin_categories_visibility','Zichtbaarheid');
define('lg_admin_categories_aadefault','Naar default medewerker');
define('lg_admin_categories_aarandom','Willekeurige medewerker in categorie');
define('lg_admin_categories_aarandomboth','Willekeurige medewerker in categorie maar geen admin');
define('lg_admin_categories_aaleast','Medewerker in de categorie met de minste open aanvragen');
define('lg_admin_categories_aaleastboth','Medewerker in de categorie met de minste open aanvragen maar geen admins');
define('lg_admin_categories_aarr','Gelijke verdeling');
define('lg_admin_categories_aarrnoadmin','Gelijke verdeling maar geen admins');
define('lg_admin_categories_reportingtags','Rapportage tags');
define('lg_admin_categories_customfields','Vrije velden');
define('lg_admin_categories_customfieldsdesc','Selecteer de vrije velden die getoond moeten worden wanneer deze categorie gekozen wordt.');
define('lg_admin_categories_customfields_none','Deze installatie heeft nog geen vrije velden. Ga naar Admin->Organiseren om vrije velden te maken.');
define('lg_admin_categories_websub','Categorie tonen op het openbare webformulier');
define('lg_admin_categories_public','Publiek');
define('lg_admin_categories_private','Prive');
define('lg_admin_categories_addcat','Categorie toevoegen');
define('lg_admin_categories_addbutton','Categorie toevoegen');
define('lg_admin_categories_editcat','bewerken: ');
define('lg_admin_categories_editbutton','Bewerkingen opslaan');
define('lg_admin_categories_er_cat','Vul de categorie in');
define('lg_admin_categories_er_staff','Selecteer tenminste een medewerker voor deze categorie');
define('lg_admin_categories_er_catexists','Er bestaat al een categorie met deze naam.');
define('lg_admin_categories_er_inmailbox','Deze categorie is gekoppeld aan een mailbox en kan daarom niet inactief gemaakt worden.');
define('lg_admin_categories_fbadded','Categorie toegevoegd');	
define('lg_admin_categories_fbedited','Categorie bewerkt');
define('lg_admin_categories_fbdeleted','Categorie verwijderd');	
define('lg_admin_categories_fbundeleted','Categorie hersteld');	
define('lg_admin_categories_colid','ID');
define('lg_admin_categories_colcat','Categorie');
define('lg_admin_categories_colgrouping','Groepering');
define('lg_admin_categories_coldefcon','Default contact');
define('lg_admin_categories_colwf','Publiek');
define('lg_admin_categories_colassign','Automatisch toewijzen');
define('lg_admin_categories_coldel','Maak categorie inactief');
define('lg_admin_categories_coldelwarn','Weet u zeker dat u deze categorie inactief wilt maken?');

/* HelpSpot 5 Additions */
define('lg_admin_categories_addgroup', 'Add Group');
