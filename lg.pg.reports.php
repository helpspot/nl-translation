<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_reports_title','Rapportages');
define('lg_reports_my_reports','Mijn rapportages');
define('lg_reports_my_reports_none','Nog geen opgeslagen rapporten');
define('lg_reports_reqs_over_time','Aanvragen door de tijd heen');
define('lg_reports_reqs_over_time_desc','Samengevoegde aanvraatellingen, filterbaar en groepeerbaar');
define('lg_reports_speed_to_first','Tijd tot eerste reactie');
define('lg_reports_speed_to_first_desc','Hoe lang klanten wachten voor ze een eerste antwoord krijgen');
define('lg_reports_speed_to_first_spec','Dit rapport omvat alleen aanvragen met tenminste 1 publieke reactie door een medewerker.');
define('lg_reports_speed_to_first_assignment','Tijd tot toewijzing');
define('lg_reports_speed_to_first_assignment_desc','Hoe lang het duurt voor een nieuwe aanvraag toegewezen wordt aan een medewerker');
define('lg_reports_speed_to_first_assignment_spec','Dit rapport omvat alleen aanvragen die toegewezen zijn. Niet toegewezen aanvragen worden niet meegeteld.');
define('lg_reports_replies_to_close','Antwoordtelling');
define('lg_reports_replies_to_close_desc','Telling van aanvragen naar het aantal reacties wat medewerkers geven');
define('lg_reports_replies_to_close_spec','Gebruik open/gesloten = gesloten om te zien hoeveel reacties er nodig zijn om een aanvraag te sluiten');
define('lg_reports_interactions','Interacties door de tijd heen');
define('lg_reports_interactions_desc','De soort en het aantal notities door de tijd heen');
define('lg_reports_resolution_speed','Oplos snelheid');
define('lg_reports_resolution_speed_desc','De tijd die nodig is om een aanvraag te sluiten');
define('lg_reports_tt_over_time','Totaal door de tijd heen');
define('lg_reports_tt_over_time_desc','Samengetelde Time Tracker registraties');
define('lg_reports_tt_events','Tijd registraties');
define('lg_report_searches_no_results','Zoekresultaten');
define('lg_report_searches_agg','Samengetelde zoekresultaten');
define('lg_report_dash_requests','Aanvragen vandaag');
define('lg_reports_matrix','Comparison Matrix');
define('lg_reports_matrix_desc','Compare related elements into a spreadsheet like grid.');

define('lg_reports_total','Total');
define('lg_reports_xaxis','X Axis Data');
define('lg_reports_yaxis','Y Axis Data');
define('lg_reports_active_only','Active Only');
define('lg_reports_active_only_exp','Some fields such as assigned user and category may have inactive values, an employee who no longer works with you for example. This setting determines if those inactive values are displayed or not.');
define('lg_reports_portal','Portaal');
define('lg_reports_timetracker','Time Tracker');
define('lg_reports_graph','Grafiek');
define('lg_reports_data','Data');
define('lg_reports_error','er heeft zich een fout voorgedaan bij het maken van dit rapport');
define('lg_reports_from','Van');
define('lg_reports_to','Tot');
define('lg_reports_limit','Limiet');
define('lg_reports_groupabove','Groepeer boven');
define('lg_reports_speedby','Speed By');
define('lg_reports_speedby_hour','Uren');
define('lg_reports_speedby_min','Minuten');
define('lg_reports_billable','Facturabel');
define('lg_reports_billable_all','Alle');
define('lg_reports_billable_is','Facturabel');
define('lg_reports_billable_isnt','Niet facturabel');
define('lg_reports_basedon','Gebaseerd op');
define('lg_reports_basedon_open','Openingsdatum');
define('lg_reports_basedon_close','Sluitingsdatum');
define('lg_reports_grouping_date_hour','Date: Hour');
define('lg_reports_grouping_date_day','Date: Day');
define('lg_reports_grouping_date_month','Date: Month');
define('lg_reports_grouping_date_hour','Datum: uur');
define('lg_reports_grouping_opendate_day','Open Date: Day');
define('lg_reports_grouping_date_day','Datum: dag');
define('lg_reports_grouping_date_month','Datum: maand');
define('lg_reports_grouping_date_year','Datum: jaar');
define('lg_reports_grouping_agg_hour','Uur van de dag');
define('lg_reports_grouping_agg_day','Dag van de week');
define('lg_reports_grouping_agg_month','Maand van het jaar');
define('lg_reports_grouping_notecreator','Notitie aanmaker');
define('lg_reports_grouping_trackerstaff','Medewerker');
define('lg_reports_grouping_customerid','Customer ID');
define('lg_reports_grouping_customer_email','Customer Email');
define('lg_reports_grouping_category','Categorie');
define('lg_reports_grouping_status','Status');
define('lg_reports_grouping_assigned','Toegewezen gebruiker');
define('lg_reports_grouping_contactvia','Contact via');
define('lg_reports_grouping','Groepering');
define('lg_reports_grouping_tracker','Tracker details');
define('lg_reports_grouping_reqhistory','Notitie details');
define('lg_reports_grouping_reqdetails','Aanvraag details');
define('lg_reports_grouping_aggtime','Opgetelde tijd');
define('lg_reports_grouping_customfields','Vrije velden');
define('lg_reports_grouping_catreptags','Categorie rapportage tags');
define('lg_reports_hourcalcon','Bereken op basis van');
define('lg_reports_usebizhours','Alleen kantooruren');
define('lg_reports_allhours','Alle tijden');
define('lg_reports_allhours_exp','De berekening wordt gedaan door simpelweg de opentijd af te trekken van de eerste antwoord tijd. Kantooruren worden buiten beschouwing gelaten.');
define('lg_reports_usebizhours_exp','<b>Kantooruren kunnen ingesteld worden in Admin->Installingen->Kantooruren</b><br /> Het is verrassend moeilijk om te bepalen wat nu wel of niet een kantoortijd is. HelpSpot bepaalt dit naar beste kunnen, maar toch kunnen statistieken waarin gerekend wordt met kantooruren het beste als een benadering worden gezien.
											 <br /><br />De uitgangspunten die wij hanteren zijn:
											 <ul>
											 	<li>Handmatig geopende aanvragen worden niet meegeteld</li>
											 	<li>Aanvragen zonder beantwoording worden niet meegeteld</li>
											 	<li>Als een aanvraag geopend wordt tijdens kantooruren, maar het eerste antwoord volgt buiten kantooruren, dan wordt het dichtstbij liggende voorafgaande kantooruur geteld als tijdstip van eerste antwoord.</li>
											 	<li>Als een aanvraag geopend wordt buiten kantooruren, maar het eerste antwoord is tijdens kantooruren, dan wordt het eerstvolgende kantooruur gerekend als de tijd van openen.</li>
											 	<li>Als het openen en de eerste beantwoording allebei buiten kantooruren vallen dan wordt het eerst volgende kantooruur na de tijd van opening van de aanvraag gebruikt en het dichtstbijliggende voorgaande kantooruur als tijd van eerste antwoord.</li>
											 </ul>');
define('lg_reports_chartlabel_requests','Aanvragen');
define('lg_reports_chartlabel_requeststoday','Aanvragen vandaag');
define('lg_reports_chartlabel_replies','Aantal antwoorden');
define('lg_reports_chartlabel_median','Mediaan');
define('lg_reports_chartlabel_average','Gemiddelde');
define('lg_reports_chartlabel_medianwinfo','Mediaan (uren)');
define('lg_reports_chartlabel_averagewinfo','Gemiddelde (uren)');
define('lg_reports_chartlabel_staffpub','Medewerkers publiek');
define('lg_reports_chartlabel_staffpriv','Medewerkers prive');
define('lg_reports_chartlabel_customer','Klant notities');
define('lg_reports_chartlabel_trackertime','Tracker tijd');
define('lg_reports_chartlabel_trackertime_hrs','Tracker tijd (uren)');
define('lg_reports_chartlabel_last','Laatste');
define('lg_reports_run','Rapport opstarten');
define('lg_reports_save','Rapport opslaan');
define('lg_reports_resave','Wijzigingen opslaan');
define('lg_reports_deletereport','Rapport verwijderen');
define('lg_reports_reportsaved','Rapport opgeslagen');
define('lg_reports_resavedone','Wijzigingen opgeslagen');
define('lg_reports_filters','Filters');
define('lg_reports_years','Jaren');
define('lg_reports_months','Maanden');
define('lg_reports_email','Email');
define('lg_reports_portal_primary','Primair');
define('lg_reports_otheremail','Andere email');
define('lg_reports_export','Exporteer CSV');
define('lg_reports_viewrequests','Aanvragen bekijken');
define('lg_reports_greaterthan','Groter dan');

define('lg_reports_emptygroup_unassigned','Niet toegewezen');
define('lg_reports_emptygroup_customer','Klant');
define('lg_reports_emptygroup_empty','Leeg');

define('lg_reports_stats','Statistieken');
define('lg_reports_average','gemiddeld');
define('lg_reports_median','mediaan');
define('lg_reports_statsaverage','Gemiddeld');
define('lg_reports_statsmedian','Mediaan');
define('lg_reports_statsmin','Min');
define('lg_reports_statsmax','Max');
define('lg_reports_statssum','Som');
define('lg_reports_na','Niet beschikbaar');

define('lg_reports_col_grouping','Groepering');

define('lg_reports_analysis','Analyse');
define('lg_reports_eventdate','Datum gebeurtenis');
define('lg_reports_person','Medewerker');
define('lg_reports_customer','Klant');
define('lg_reports_customerid','Klant ID');
define('lg_reports_desc','Omschrijving');
define('lg_reports_hoursmin','Uren:Min');
define('lg_reports_xrequest','Aanvraag');
define('lg_reports_seconds','Seconden');

define('lg_reports_searchquery','Zoekopdracht');
define('lg_reports_resultcount','# Resultaten');
define('lg_reports_searchcount','# Zoekacties');
define('lg_reports_searchportal','Secondair portal');

define('lg_reports_staff','Medewerkers');
define('lg_reports_responses','Antwoorden');
define('lg_reports_response_title','Titel');
define('lg_reports_response_creator','Aanmaker');
define('lg_reports_response_count','Aantal');
define('lg_reports_response_by','Gebruikt door');
define('lg_reports_response_anystaff','Willekeurige medewerker');

define('lg_reports_customers','Klanten');
define('lg_reports_customer_activity','Klant activiteit');
define('lg_reports_customer_unique_email','Email adres');
define('lg_reports_customer_unique_name','Naam');
define('lg_reports_customer_unique_id','Klant ID');
define('lg_reports_customer_requests','Aanvragen');
define('lg_reports_customer_uniqueby','Uniek op grond van');

define('lg_reports_kb_helpful','Kennisbank waardering');
define('lg_reports_kb_helpful_book','Onderdeel');
define('lg_reports_kb_helpful_page','Pagina');
define('lg_reports_kb_helpful_count','Aantal');
define('lg_reports_kb_helpful_orderby','Sorteren op');
define('lg_reports_kb_helpful_type_helpful','Nuttig');
define('lg_reports_kb_helpful_type_not','Niet nuttig');
?>
