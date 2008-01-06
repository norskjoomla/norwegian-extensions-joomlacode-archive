<?php
/*
**********************************************
JCal Client v1.6.0 Beta
Copyright (c) 2006-2007 Anything-Digital.com
**********************************************
JCal Client is a fork of the existing Extcalendar component for Joomla! and Mambo.
Extcal (http://sourceforge.net/projects/extcal) was renamed 
and adapted to become a Mambo/Joomla! component by 
Matthew Friedman, and further modified by David McKinnis
(mamboguru.com) to repair some security holes. 

This program is free software; you can redistribute it and/or modify 
it under the terms of the GNU General Public License as published by 
the Free Software Foundation; either version 2 of the License, or 
(at your option) any later version.

This header must not be removed. Additional contributions/changes
may be added to this header as long as no information is deleted.
**********************************************

$File: index.php - language file$

Revision date: 01-Nov-2007

**********************************************
Get the latest version of JCal Client at:
http://dev.anything-digital.com//
**********************************************
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

// New language structure
$lang_info = array (
	'name' => 'Norwegian'
	,'nativename' => 'Norsk' // Language name in native language. E.g: 'Français' for 'French'
	,'locale' => array('no','norwegian') // Standard locale alternatives for a specific language. For reference, go to: http://www.php.net/manual/en/function.setlocale.php
	,'charset' => 'ISO-8859-1' // For reference, go to : http://www.w3.org/International/O-charset-lang.html
	,'direction' => 'ltr' // 'ltr' for Left to Right. 'rtl' for Right to Left languages such as Arabic.
	,'author' => 'Jeanette'
	,'author_email' => 'jeanette@bewebbed.no'
	,'author_url' => 'http://www.bewebbed.no'
	,'transdate' => '12/19/2006'
);

$lang_general = array (
	'yes' => 'Ja'
	,'no' => 'Nei'
	,'back' => 'Tilbake'
	,'continue' => 'Fortsett'
	,'close' => 'Lukk'
	,'errors' => 'Feil'
	,'info' => 'Informasjon'
	,'day' => 'Dag'
	,'days' => 'Dager'
	,'month' => 'Måned'
	,'months' => 'Måneder'
	,'year' => 'År'
	,'years' => 'År'
	,'hour' => 'Time'
	,'hours' => 'Timer'
	,'minute' => 'Minutt'
	,'minutes' => 'Minutter'
	,'everyday' => 'Hver Dag'
	,'everymonth' => 'Hver Måned'
	,'everyyear' => 'Hvert år'
	,'active' => 'Aktiv'
	,'not_active' => 'Inaktiv'
	,'today' => 'Idag'
	,'signature' => 'Drevet av %s'
	,'expand' => 'Ekspander'
	,'collapse' => 'Slå sammen'
);


$lang_ordinals = array (

	1 => "Første",

	2 => "Andre",

	3 => "Tredje",

	4 => "Fjerde",

	5 => "Femte",

);


// Date formats, For reference, go to : http://www.php.net/manual/en/function.strftime.php
$lang_date_format = array (
	'full_date' => '%A, %B %d, %Y' // e.g. Wednesday, June 05, 2002
	,'full_date_time_24hour' => '%A, %B %d, %Y At %H:%M' // e.g. Wednesday, June 05, 2002 At 21:05
	,'full_date_time_12hour' => '%A, %B %d, %Y At %I:%M %p' // e.g. Wednesday, June 05, 2002 At 9:05 pm
	,'day_month_year' => '%d-%b-%Y' // e.g 10-Sep-2004
	,'local_date' => '%c' // Preferred date and time representation for current language 
	,'mini_date' => '%a. %d %b, %Y' 
	,'month_year' => '%B %Y'
	,'day_of_week' => array('Søndag','Mandag','Tisdag','Onsdag','Torsdag','Fredag','Lørdag')
	,'months' => array('Januar','Februar','Mars','April','Mai','Juni','Juli','August','September','Oktober','November','Desember')
);

$lang_system = array (
	'system_caption' => 'Systemmelding'
  ,'page_access_denied' => 'Du har ikke nok rettigheter til å hente frem denne siden.'
  ,'page_requires_login' => 'Du må logge på for å hente frem denne siden.'
  ,'operation_denied' => 'Du har ikke nok rettigheter til å utføre denne operasjonen.'
	,'section_disabled' => 'Seksjonen er ikke tilgjengelig !'
  ,'non_exist_cat' => 'Kategorien eksisterer ikke !'
  ,'non_exist_event' => 'Aktiviteten finnes ikke !'
  ,'param_missing' => 'Oppgitte parametre er feil.'
  ,'no_events' => 'Det er ingen aktiviteter å vise.'
  ,'config_string' => 'Du bruker for øyeblikket \'%s\' som kjører på %s, %s och %s.'
  ,'no_table' => '\'%s\' tabellen finnes ikke !'
  ,'no_anonymous_group' => '%s tabellen inneholder ikke gruppen \'Anonymous\' !'
  ,'calendar_locked' => 'Tjenesten er nede for service og oppgradering. Vi beklager detta !'
	,'new_upgrade' => 'Systemet har funnet en ny version. Det anbefales å oppgradere nå. Klikk "Fortsett" for å starte oppgraderingen.'
	,'no_profile' => 'Det oppstod en feil ved henting av din profil.'
	,'unknown_component' => 'Ukjent komponent'
// Mail messages
	,'new_event_subject' => 'Ny aktivitet %s'
	,'event_notification_failed' => 'En feil oppstod når notifikasjons-epost skulle sendes !'
);

// Message body for new event email notification
$lang_system['event_notification_body'] = <<<EOT
Følgende aktivitet har akkurat blitt postet i din {CALENDAR_NAME}
og trenger godkjennelse:

Tittel: "{TITLE}"
Dato: "{DATE}"
Varighet: "{DURATION}"

Du kan nå denne aktiviteten ved å klikke på lenken nederst
eller kopiere og lime inn i din nettleser.

{LINK}

(NOTER at du må være pålogget som en Administrator for
at lenken skal virke.)

Med hilsen

Administratorene for {CALENDAR_NAME}

EOT;

// Admin menu entries
$lang_admin_menu = array (
	'login' => 'Logg inn'
	,'register' => 'Registrer'
  ,'logout' => 'Logg ut <span style="color:#FF9922">[<span style="color:#606F79">%s</span>]</span>'
  ,'user_profile' => 'Min Profil'
	,'admin_events' => 'Aktiviteter'
  ,'admin_categories' => 'Kategorier'
  ,'admin_groups' => 'Grupper'
  ,'admin_users' => 'Brukere'
  ,'admin_settings' => 'Instillinger'
);

// Main menu entries
$lang_main_menu = array (
	'add_event' => 'Legg till aktivitet'
	,'cal_view' => 'Månedsformat'
	,'year_view' => 'Årsformat'
  ,'flat_view' => 'Listeformat'
  ,'weekly_view' => 'Ukeformat'
  ,'daily_view' => 'Dagformat'
  ,'categories_view' => 'Kategorier'
  ,'search_view' => 'Søk'
);

// ======================================================
// Add Event view
// ======================================================

$lang_add_event_view = array(
	'section_title' => 'Legg till aktivitet'
	,'edit_event' => 'Rediger aktivitet [id%d] \'%s\''
	,'update_event_button' => 'Oppdater aktivitet'

// Event details
	,'event_details_label' => 'Aktivitetsdetaljer'
	,'event_title' => 'Aktivitetstittel'
	,'event_desc' => 'Aktivitetsbeskrivelse'
	,'event_cal' => 'Kalender'
	,'choose_cal' => 'Velg en kalender'
	,'event_cat' => 'Kategori'
	,'choose_cat' => 'Velg en kategori'
	,'event_date' => 'Aktivitetsdato'
	,'day_label' => 'Dag'
	,'month_label' => 'Måned'
	,'year_label' => 'År'
	,'start_date_label' => 'Starttid'
	,'start_time_label' => 'ved'
	,'end_date_label' => 'Varighet'
	,'all_day_label' => 'Hele dagen'
// Contact details
	,'contact_details_label' => 'Kontaktdetailjer'
	,'contact_info' => 'Kontaktinfo'
	,'contact_email' => 'E-post'
	,'contact_url' => 'URL'
// Repeat events
	,'repeat_event_label' => 'Gjenta aktivitet'
	,'repeat_method_label' => 'Gjenta-metode'
	,'repeat_none' => 'Ikke gjenta denne aktiviteten'
	,'repeat_every' => 'Gjenta hver'
	,'repeat_days' => 'Dag(er)'
	,'repeat_weeks' => 'Uke(r)'
	,'repeat_months' => 'Måned(er)'
	,'repeat_years' => 'År'
	,'repeat_end_date_label' => 'Gjenta sluttdato'
	,'repeat_end_date_none' => 'Ingen sluttdato'
	,'repeat_end_date_count' => 'Avslutt etter %s forekomster'
	,'repeat_end_date_until' => 'Gjenta til'
// Other details
	,'other_details_label' => 'Andre detaljer'
	,'picture_file' => 'Bildefil'
	,'file_upload_info' => '(Maksimal størrelse: %d Kb  - Gyldige filtyper : %s )' 
	,'del_picture' => 'Slett nåværende bilde ?'
// Administrative options
	,'admin_options_label' => 'Administrative valg'
	,'auto_appr_event' => 'Aktivitet godkjent'

// Error messages
	,'no_title' => 'Du må angi en tittel for aktiviteten !'
	,'no_desc' => 'Du må legge inn en beskrivelse for denne aktiviteten !'
	,'no_cat' => 'Du må velge en kategori fra nedtrekksmenyen !'
	,'date_invalid' => 'Du må angi en gyldig dato for denne aktiviteten !'
	,'end_days_invalid' => 'The value entered in the \'Days\' field is not valid !'
	,'end_hours_invalid' => 'The value entered in the \'Hours\' field is not valid !'
	,'end_minutes_invalid' => 'The value entered in the \'Minutes\' field is not valid !'
	,'move_image_failed' => 'The system failed to properly upload the image. Please make sure it is the proper type and not too large, or notify the site administrator.'
	,'non_valid_dimensions' => 'The picture width or height is larger than %s pixels !'

	,'recur_val_1_invalid' => 'The value entered as \'repeat interval\' is not valid. This value must be a number greater than \'0\' !'
	,'recur_end_count_invalid' => 'The value entered as \'number of occurrences\' is not valid. This value must be a number greater than \'0\' !'
	,'recur_end_until_invalid' => 'The \'repeat until\' date must be greater than the event start date !'
// Misc. messages
	,'submit_event_pending' => 'Din aktivitet er sendt. Den vil ikke kunne ses i kalenderen før den er godkjent av en administrator. Takk for ditt bidrag!'
	,'submit_event_approved' => 'Din aktivitet er automatisk godkjent. Takk for ditt bidrag!'
	,'event_repeat_msg' => 'Denne aktiviteten gjentas'
	,'event_no_repeat_msg' => 'Denne aktiviteten gjentas ikke'
);

// ======================================================
// daily view
// ======================================================

$lang_daily_event_view = array(
	'section_title' => 'Daglig'
	,'next_day' => 'Neste dag'
	,'previous_day' => 'Forrige dag'
	,'no_events' => 'Det er ingen aktiviteter denne dag.'
);

// ======================================================
// weekly view
// ======================================================

$lang_weekly_event_view = array(
	'section_title' => 'Ukentlig'
	,'week_period' => '%s - %s'
	,'next_week' => 'Neste uke'
	,'previous_week' => 'Forrige uke'
	,'selected_week' => 'Uke %d'
	,'no_events' => 'Det er ingen aktiviteter denne uke'
);

// ======================================================
// monthly view
// ======================================================

$lang_monthly_event_view = array(
	'section_title' => 'Månedlig'
	,'next_month' => 'Neste måned'
	,'previous_month' => 'Forrige måned'
);

// ======================================================
// flat view
// ======================================================

$lang_flat_event_view = array(
	'section_title' => 'Flat visning'
	,'week_period' => '%s - %s'
	,'next_month' => 'Neste måned'
	,'previous_month' => 'Forrige måned'
	,'contact_info' => 'Kontaktinformasjon'
	,'contact_email' => 'E-mail'
	,'contact_url' => 'Webside'
	,'no_events' => 'Det er ingen aktiviteter denne måned'
);

// ======================================================
// Event view
// ======================================================

$lang_event_view = array(
	'section_title' => 'Vis aktivitet'
	,'display_event' => 'Aktivitet: \'%s\''
	,'in_calendar' => ' i kalender \'%s\''
	,'cat_name' => 'Kategori'
	,'event_start_date' => 'Dato'
	,'event_end_date' => 'Inntil'
	,'event_duration' => 'Varighet'
	,'contact_info' => 'Kontaktinformasjon'
	,'contact_email' => 'E-mail'
	,'contact_url' => 'Webside'
	,'no_event' => 'Det er ingen aktiviteter'
	,'stats_string' => '<strong>%d</strong> aktiviteter i alt'
	,'edit_event' => 'Rediger aktivitet'
	,'delete_event' => 'Slett aktivitet'
	,'delete_confirm' => 'Er du sikker på at du vil slette denne aktiviteten?'
	
);

// ======================================================
// Categories view
// ======================================================

$lang_cats_view = array(
	'section_title' => 'Vis kategorier'
	,'cat_name' => 'Kategorinavn'
	,'total_events' => 'Aktiviteter i alt'
	,'upcoming_events' => 'Kommende aktiviteter'
	,'no_cats' => 'Der er ingen kategorier.'
	,'stats_string' => 'Det er <strong>%d</strong> aktiviteter i <strong>%d</strong> kategorier'
);

// ======================================================
// Kategori Begivenheder view
// ======================================================

$lang_cat_events_view = array(
	'section_title' => 'Aktiviteter for \'%s\''
	,'event_name' => 'Aktivitetsnavn'
	,'event_cal' => 'Kalender'
	,'event_date' => 'Dato'
	,'no_events' => 'Det finnes ingen aktiviteter under denne kategorien.'
	,'stats_string' => '<strong>%d</strong> Antall aktiviteter'
	,'stats_string1' => '<strong>%d</strong> Aktivitet(er) i <strong>%d</strong> side(r)'
);

// ======================================================
// cal_search.php
// ======================================================

$lang_event_search_data = array(
	'section_title' => 'Søk i kalender',
	'search_results' => 'Søkeresultat',
	'calendar_label' => 'Kalender',
	'category_label' => 'Kategori',
	'date_label' => 'Dato',
	'no_events' => 'Det er ingen aktiviteter for denne kategorien.',
	'search_caption' => 'Registrer noen søkeord...',
	'search_again' => 'Søk igjen',
	'search_button' => 'Søk',
// Misc.
	'no_results' => 'Søkingen ga ingen resultater.',	
// Stats
	'stats_string1' => 'Søkingen fant <strong>%d</strong> aktivitet(er)',
	'stats_string2' => 'Søkingen fant <strong>%d</strong> aktivitet(er) på <strong>%d</strong> side(r)'
);

// ======================================================
// profile.php
// ======================================================

if (defined('PROFILE_PHP')) 

$lang_user_profile_data = array(
	'section_title' => 'Min profil',
	'edit_profile' => 'Endre min profil',
	'update_profile' => 'Oppdater min profil',
	'actions_label' => 'Aksjoner',  
// Account Info
	'account_info_label' => 'Profil-information',
	'user_name' => 'Brukernavn',
	'user_pass' => 'Passord',
	'user_pass_confirm' => 'Bekreft passord',
	'user_email' => 'E-mail-adresse',
	'group_label' => 'Gruppemedlemsskap',
// Andre Oplysninger
	'other_details_label' => 'Andre detaljer',
	'first_name' => 'Fornavn',
	'last_name' => 'Etternavn',
	'full_name' => 'Fullt navn',
	'user_website' => 'Hjemmeside',
	'user_location' => 'Sted',
	'user_occupation' => 'Yrke',
// Misc.
	'select_language' => 'Velg språk',
	'edit_profile_success' => 'Din profil er oppdateret',
	'update_pass_info' => 'La passordfeltene være tomme, hvis du ikke vil endre ditt nåværende passord',
// Error messages
	'invalid_password' => 'Registrer et passord som består av bare bokstaver eller tall, mellom 4 og 16 karakterer langt!',
	'password_is_username' => 'Passordet må være forskjellig fra brukernavnet!',
	'password_not_match' =>'Passordet du registrerte stemmer ikke med det \'confirm password\'',
	'invalid_email' => 'Du må angi en gyldig e-postadresse!',
	'email_exists' => 'En annen bruker har allerede registrert seg med e-postadressen du anga. Bruk en annen e-postadresse!',
	'no_email' => 'Du må angi en e-postadresse!',
	'invalid_email' => 'Du må angi en gyldig e-postadresse!',
	'no_password' => 'Du må angi et passord for denne nye kontoen!'
);

// ======================================================
// register.php
// ======================================================

if (defined('USER_REGISTRATION_PHP')) 

$lang_user_registration_data = array(
	'section_title' => 'Brukerregistrering',
// Step 1: Terms & Conditions
	'terms_caption' => 'Brukerbetingelser',
	'terms_intro' => 'For å fortsette, må du godkjenne følgende:',
	'terms_message' => 'Les venligst reglerne herunder. Hvis du kan acceptere dem og ønsker at fortsætte med registreringen, så klik på "Godkend"-knappen herunder. For at afbryde registreringen, tryk på din \'Tilbage\'-knap i din browser.<br /><br />Bemærk venligst at vi ikke er ansvarlige for begivenheder indtastet af brugerne. Vi er ikke ansvarlige for nøjagtigheden, fuldstændigheden eller brugbarheden af de offentliggjorte begivenheder, ej heller for indholdet af begivenhederne.<br /><br />Teksterne udtrykker forfatteren af begivenhedernes synspunkt, ikke nødvendigvis denne kalenderapplikations synspunkt. Enhver bruger, som finder at en offentliggjort begivenhed er anstødelig, opfordres til straks at kontakte os via e-mail. Vi har mulighed for at slette anstødeligt indhold, og vi bestræber os på at gøre dette indenfor en rimelig tidsramme, såfremt vi afgør at sletning er nødvendig.<br /><br />Du samtykker i forbindelse med brugen af denne service i, at du ikke vil bruge denne kalenderapplikation til at offentliggøre materiale, som du ved er usand og/eller ærekrænkende, unøjagtig, stødende, vulgært, hadefuldt, chikanerende, uanstændigt, blasfemisk, seksuelt orienteret, truende, krænker privatlivets fred eller på anden måder krænker danske love.<br/><br/>Du samtykker i, at du ikke vil offentliggøre copyright-beskyttet materiale medmindre rettighederne ejes af dig eller af %s.',
	'terms_button' => 'Godkjenn',
	
// Account Info
	'account_info_label' => 'Profil-informasjon',
	'user_name' => 'Brukernavn',
	'user_pass' => 'Passord',
	'user_pass_confirm' => 'Godkjenn passord',
	'user_email' => 'E-mail',
// Andre Oplysninger
	'other_details_label' => 'Andre oplysninger',
	'first_name' => 'Fornavn',
	'last_name' => 'Etternavn',
	'user_website' => 'Hjemmeside',
	'user_location' => 'Sted',
	'user_occupation' => 'Yrke',
	'register_button' => 'Send registrering',

// Stats
	'stats_string1' => '<strong>%d</strong> brukere',
	'stats_string2' => '<strong>%d</strong> brukere på <strong>%d</strong> side(r)',
// Misc.
	'reg_nomail_success' => 'Takk for din registrering.',
	'reg_mail_success' => 'En e-mail med informasjon om hvordan du aktiverer din konto er blitt sendt til den e-mail-adresse du oppga.',
	'reg_activation_success' => 'Gratulerer! Din profil er nå aktiv og du kan logge inn med ditt brukernavn og passord. Takk for din registrering.',
// Mail messages
	'reg_confirm_subject' => 'Registrering hos %s',
	
// Error messages
	'no_username' => 'Du må oppgi et brukernavn!',
	'invalid_username' => 'Oppgi et brukernavn, som kun består av bokstaver og tall, og er mellom 4 og 30 tegn langt!',
	'username_exists' => 'Brukernavnet du valgte er opptatt. Tast inn et nyyt brukernavn!',
	'no_password' => 'Du må oppgi et passord!',
	'invalid_password' => 'Tast inn passord, som kun består af bokstaver og tall, og er mellom 4 og 16 tegn langt!',
	'password_is_username' => 'Passordet skal være forskjellig fra brukernavnet!',
	'password_not_match' =>'Inntastede passord er forskellige',
	'no_email' => 'Du må oppgi en e-mail!',
	'invalid_email' => 'Du må oppgi en gyldig e-mail-adresse!',
	'email_exists' => 'En annen bruker er registreret med den e-mail-adresse du oppga. Tast inn en annen e-mail-adresse.!',
	'delete_user_failed' => 'Denne profilen kan ikke slettes',
	'no_users' => 'Det er ingen brukerprofiler!',
	'already_logged' => 'Du er allerede logget inn som medlem!',
	'registration_not_allowed' => 'Brukerregistrering er ikke aktiv!',
	'reg_email_failed' => 'Der skjedde en feil under avsendelse af aktiveringsmail!',
	'reg_activation_failed' => 'Der skjedde en feil under godkjennelsen av aktiveringen'

);
// Message body for email activation
$lang_user_registration_data['reg_confirm_body'] = <<<EOT
Takk fordi du registrerte deg i {CALENDAR_NAME}

Ditt brukernavn er: "{USERNAME}"
Ditt passord er: "{PASSWORD}"

For at aktivere din profil skal du klikke på linket herunder
eller kopiere det til din webbrowser

{REG_LINK}

Vennlig hilsen

Administratoren i {CALENDAR_NAME}

EOT;

// ======================================================
// theme.php
// ======================================================

// To Be Done

// ======================================================
// functions.inc.php
// ======================================================

// To Be Done

// ======================================================
// dblib.php
// ======================================================

// To Be Done

// ======================================================
// admin_events.php
// ======================================================

if (defined('ADMIN_EVENTS_PHP')) 

$lang_event_admin_data = array(
	'section_title' => 'Event Administration',
	'events_to_approve' => 'Event Administration: Events to Approve',
	'upcoming_events' => 'Event Administration: Upcoming Events',
	'past_events' => 'Event Administration: Past Events',
	'add_event' => 'Add New Event',
	'edit_event' => 'Edit Event',
	'view_event' => 'View Event',
	'approve_event' => 'Approve Event',
	'update_event' => 'Update Event Info',
	'delete_event' => 'Delete Event',
	'events_label' => 'Events',
	'auto_approve' => 'Auto Approve',
	'calendar_label' => 'Calendar',
	'date_label' => 'Date',
	'actions_label' => 'Actions',
	'events_filter_label' => 'Filter Events',
	'events_filter_options' => array('Show all events','Show unapproved events only','Show upcoming events only','Show past events only'),
	'picture_attached' => 'Picture attached',
// View Event
	'view_event_name' => 'Event: \'%s\'',
	'in_calendar' => 'in calendar \'%s\'',
	'event_start_date' => 'Date',
	'event_end_date' => 'Until',
	'event_duration' => 'Duration',
	'contact_info' => 'Contact Info',
	'contact_email' => 'Email',
	'contact_url' => 'URL',
// General Info
	'edit_event_title' => 'Aktivitet: \'%s\'',
	'cat_name' => 'Kategori',
	'event_start_date' => 'Dato',
	'event_end_date' => 'Inntil',
	'contact_info' => 'Kontaktinformasjon',
	'contact_email' => 'E-mail',
	'contact_url' => 'Webside',
	'no_event' => 'Det finnes ingen aktiviteter',
	'stats_string' => '<strong>%d</strong> Aktiviteter ialt',
// Stats
	'stats_string1' => '<strong>%d</strong> Begivenhet(er)',
	'stats_string2' => 'Total: <strong>%d</strong> Aktiviteter på <strong>%d</strong> side(r)',
// Misc.
	'add_event_success' => 'Ny aktivitet lagt til',
	'edit_event_success' => 'Aktivitet oppdatert',
	'approve_event_success' => 'Aktivitet godkjent',
	'delete_confirm' => 'Er du sikker på at du vil slette denne aktiviteten ?',
	'delete_event_success' => 'Aktivitet slettet',
	'active_label' => 'Aktiv',
	'not_active_label' => 'Inaktiv',
// Error messages
	'no_event_name' => 'You must provide a name for this event !',
	'no_event_desc' => 'You must provide a description for this event !',
	'no_cal' => 'You must select a calendar for this event !',
	'no_cat' => 'You must select a category for this event !',
	'no_day' => 'You must select a day !',
	'no_month' => 'You must select a month !',
	'no_year' => 'You must select a year !',
	'non_valid_date' => 'Please enter a valid date !',
	'end_days_invalid' => 'Please make sure the \'Days\' field under \'Duration\' consists of numbers only !',
	'end_hours_invalid' => 'Please make sure the \'Hours\' field under \'Duration\' consists of numbers only !',
	'end_minutes_invalid' => 'Please make sure the \'Minutes\' field under \'Duration\' consists of numbers only !',
	'delete_event_failed' => 'This event cannot be deleted',
	'approve_event_failed' => 'This event cannot not be approved',
	'no_events' => 'There are no events to display !',
	'recur_val_1_invalid' => 'The value entered as \'repeat interval\' is not valid. This value must be a number greater than \'0\' !',
	'recur_end_count_invalid' => 'The value entered as \'number of occurrences\' is not valid. This value must be a number greater than \'0\' !',
	'recur_end_until_invalid' => 'The \'repeat until\' date must be greater than the event start date !'

);

//Multiple calendars
if (defined('ADMIN_CALENDARS_PHP')) 
$lang_calendar_admin_data = array(
	'section_title' => 'Calendar Administration',
	'add_calendar' => 'Add New Calendar',
	'edit_calendar' => 'Edit Calendar',
	'update_calendar' => 'Update Calendar Info',
	'delete_calendar' => 'Delete Calendar',
	'events_label' => 'Events',
	'visibility' => 'Visibility',
	'actions_label' => 'Actions',
	'users_label' => 'Users',
	'admins_label' => 'Admins',
// General Info
	'general_info_label' => 'General Information',
	'cal_name' => 'Calendar Name',
	'cal_desc' => 'Calendar Description',
	'status_label' => 'Status',
	'calendar_label' => 'Calendar permissions',
// Stats
	'stats_string1' => '<strong>%d</strong> calendars',
	'stats_string2' => 'Active: <strong>%d</strong>&nbsp;&nbsp;&nbsp;Total: <strong>%d</strong>&nbsp;&nbsp;&nbsp;on <strong>%d</strong> page(s)',
// Misc.
	'add_calendar_success' => 'New calendar added succesfully',
	'edit_calendar_success' => 'Calendar updated succesfully',
	'delete_confirm' => 'Are you sure you want to delete this calendar ?',
	'delete_cat_success' => 'Calendar deleted succesfully',
	'active_label' => 'Active',
	'not_active_label' => 'Not Active',
// Error messages
	'no_calendar_name' => 'You must provide a name for this calendar !',
	'no_calendar_desc' => 'You must provide a description for this calendar !',
	'delete_calendar_failed' => 'This calendar cannot be deleted',
	'no_calendars' => 'There are no calendars to display !',
	'calendar_has_events' => 'This calendar contains %d event(s) and therefore cannot be deleted!<br>Please delete remaining events under this category and try again!',
	'default' => 'Use default from settings'
);

// ======================================================
// admin_categories.php
// ======================================================

if (defined('ADMIN_CATS_PHP')) 

$lang_cat_admin_data = array(
	'section_title' => 'Kategori-administrasjon',
	'add_cat' => 'Legg til ny kategori',
	'edit_cat' => 'Endre kategori',
	'update_cat' => 'Oppdater kategori-info',
	'delete_cat' => 'Slett kategori',
	'events_label' => 'Aktiviteter',
	'visibility' => 'Offentliggjort',
	'actions_label' => 'Aksjoner',
	'users_label' => 'Brukere',
	'admins_label' => 'Administratorer',
// General Info
	'general_info_label' => 'Generell informasjon',
	'cat_name' => 'Kategorinavn',
	'cat_desc' => 'Kategoribeskrivelse',
	'cat_color' => 'Farve',
	'pick_color' => 'Velg en farve!',
	'status_label' => 'Status',
	'category_label' => 'Category permissions',
// Stats
	'stats_string1' => '<strong>%d</strong> kategorier',
	'stats_string2' => 'Aktiv: <strong>%d</strong>&nbsp;&nbsp;&nbsp;Total: <strong>%d</strong>&nbsp;&nbsp;&nbsp;på <strong>%d</strong> side(r)',
// Misc.
	'add_cat_success' => 'Ny kategori lagt til',
	'edit_cat_success' => 'Kategori oppdatert',
	'delete_confirm' => 'Er du sikker på at du vil slette denne kategorien ?',
	'delete_cat_success' => 'Kategori slettet',
	'active_label' => 'Aktiv',
	'not_active_label' => 'Inaktiv',
// Error messages
	'no_cat_name' => 'You must provide a name for this category !',
	'no_cat_desc' => 'You must provide a description for this category !',
	'no_color' => 'You must provide a color for this category !',
	'delete_cat_failed' => 'This category cannot be deleted',
	'no_cats' => 'There are no categories to display !',
	'cat_has_events' => 'This category contains %d event(s) and therefore cannot be deleted!<br>Please delete remaining events under this category and try again!',
	'default' => 'Use default from settings'

);
// ======================================================
// admin_users.php
// ======================================================

if (defined('ADMIN_USERS_PHP')) 

$lang_user_admin_data = array(
	'section_title' => 'Brukeradministration',
	'add_user' => 'Legg til ny bruker',
	'edit_user' => 'Rediger bruker',
	'update_user' => 'Oppdater bruker',
	'delete_user' => 'Slett bruker',
	'last_access' => 'Siste innlogging',
	'actions_label' => 'Aksjoner',
	'active_label' => 'Aktiv',
	'not_active_label' => 'Inaktiv',
// Account Info
	'account_info_label' => 'Brukerinformasjon',
	'user_name' => 'Brukernavn',
	'user_pass' => 'Passord',
	'user_pass_confirm' => 'Bekreft passord',
	'user_email' => 'E-mail',
	'group_label' => 'Gruppemedlemskap',
	'status_label' => 'Brukerstatus',
// Andre Oplysninger
	'other_details_label' => 'Andre opplysninger',
	'first_name' => 'Fornavn',
	'last_name' => 'Etternavn',
	'user_website' => 'Hjemmeside',
	'user_location' => 'Sted',
	'user_occupation' => 'Yrke',
// Stats
	'stats_string1' => '<strong>%d</strong> brukere',
	'stats_string2' => '<strong>%d</strong> brukere på <strong>%d</strong> side(r)',
// Misc.
	'select_group' => 'Velg...',
	'add_user_success' => 'Bruker lagt til',
	'edit_user_success' => 'Bruker oppdatert',
	'delete_confirm' => 'Er du sikker på du vil slette denne brueren?',
	'delete_user_success' => 'Bruker slettet',
	'update_pass_info' => 'La passord-feltet være tomt, hvis du ikke vil endre det',
	'access_never' => 'Aldri',
// Error messages
	'no_username' => 'Du må oppgi et brukernavn!',
	'invalid_username' => 'Oppgi et brukernavn, som består av tall og bokstaver, og er mellom 4 og 30 tegn langt!',
	'invalid_password' => 'Oppgi et passord, som består av tall og bokstaver, og er mellom 4 og 16 tegn langt!',
	'password_is_username' => 'Passord skal være forskellig fra brukernavnet!',
	'password_not_match' =>'De 2 oppgitte passord var forskellige',
	'invalid_email' => 'Du må oppgi en gyldig e-mail-adresse!',
	'email_exists' => 'En annen bruker er registreret med den e-mail-adresse du oppga. Oppgi en annen e-mail-adresse.!',
	'username_exists' => 'Brukernavnet er opptatt, vennligst velg et annet!',
	'no_email' => 'Du må oppgi en e-mail-adresse!',
	'invalid_email' => 'Du må oppgi en gyldig e-mail-adresse!',
	'no_password' => 'Du må oppgi et passord!',
	'no_group' => 'Velg en gruppe til denne brukeren!',
	'delete_user_failed' => 'Denne profilen kan ikke slettes',
	'no_users' => 'Det finnes ingen brukerprofiler!'

);

// ======================================================
// admin_groups.php
// ======================================================

if (defined('ADMIN_GROUPS_PHP')) 

$lang_group_admin_data = array(
	'section_title' => 'Gruppeadministration',
	'add_group' => 'Legg til ny gruppe',
	'edit_group' => 'Rediger gruppe',
	'update_group' => 'Oppdater gruppe',
	'delete_group' => 'Slett gruppe',
	'view_group' => 'Vis gruppe',
	'users_label' => 'Brukere',
	'actions_label' => 'Aksjoner',
// General Info
	'general_info_label' => 'Generell information',
	'group_name' => 'Gruppenavn',
	'group_desc' => 'Gruppebeskrivelse',
// Group Access Level
	'access_level_label' => 'Gruppe-adgangsnivå',
	'Administrator' => 'Brukere i denne gruppen har administratortilgang',
	'can_manage_accounts' => 'Brukere i denne gruppen kan redigere brukere',
	'can_change_settings' => 'Brukere i denne gruppen kan endre kalenderegenskaper',
	'can_manage_cats' => 'Brukere i denne gruppen kan redigere kategorier',
	'upl_need_approval' => 'Registrerte aktiviteter krever administrativ godkjennelse',
// Stats
	'stats_string1' => '<strong>%d</strong> grupper',
	'stats_string2' => 'Total: <strong>%d</strong> grupper på <strong>%d</strong> side(r)',
	'stats_string3' => 'Total: <strong>%d</strong> brukere på <strong>%d</strong> side(r)',
// View Group Members
	'group_members_string' => 'Medlemmer av \'%s\' gruppen',
	'username_label' => 'Brukernavn',
	'firstname_label' => 'Fornavn',
	'lastname_label' => 'Etternavn',
	'email_label' => 'E-mail',
	'last_access_label' => 'Siste login',
	'edit_user' => 'Rediger bruker',
	'delete_user' => 'Slett bruker',
// Misc.
	'add_group_success' => 'Ny gruppe lagt til',
	'edit_group_success' => 'Gruppe oppdatert',
	'delete_confirm' => 'Er du sikker på du vil slette denne gruppen?',
	'delete_user_confirm' => 'Er du sikker på du vil slette denne brukeren?',
	'delete_group_success' => 'Gruppe slettet',
	'no_users_string' => 'Der er ingen brukere i denne gruppen',
// Error messages
	'no_group_name' => 'Du må oppgi et navn på gruppen!',
	'no_group_desc' => 'Du må oppgi en beskrivelse for gruppen!',
	'delete_group_failed' => 'Denne gruppen kunne ikke slettes',
	'no_groups' => 'Det finnes ingen grupper!',
	'group_has_users' => 'Denne gruppen inneholder %d bruker(e) og kan derfor ikke slettes!<br>Fjern resterende brukere fra gruppen og prøv igen!'

);

// ======================================================
// admin_settings.php / admin_settings_template.php / 
// admin_settings_updates.php
// ======================================================

$lang_settings_data = array(
	'section_title' => 'Kalenderinnstillinger'
// Links
	,'admin_links_text' => 'Velg seksjon'
	,'admin_links' => array('Hovedinnstillinger','Malinnstillinger','Oppdateringer')
// General Settings
	,'general_settings_label' => 'Hovedinnstillinger'
	,'calendar_name' => 'Kalendernavn'
	,'calendar_description' => 'Kalenderbeskrivelse'
	,'calendar_admin_email' => 'Kalenderadministrators e-post'
	,'cookie_name' => 'Navn på cookie brukt af komponenten'
	,'cookie_path' => 'Sti på cookie brukt af komponenten'
	,'debug_mode' => 'Aktiver debug mode'
// Environment Settings
	,'env_settings_label' => 'Miljøinnstillinger'
	,'lang' => 'Språk'
		,'lang_name' => 'Språk'
		,'lang_native_name' => 'Navn'
		,'lang_trans_date' => 'Oversatt dato'
		,'lang_author_name' => 'Forfatter'
		,'lang_author_email' => 'E-post'
		,'lang_author_url' => 'Nettside'
	,'charset' => 'Landkode'
	,'theme' => 'Tema'
		,'theme_name' => 'Temanavn'
		,'theme_date_made' => 'Laget den'
		,'theme_author_name' => 'Forfatter'
		,'theme_author_email' => 'E-post'
		,'theme_author_url' => 'Nettside'
	,'timezone' => 'Tidssone-forskyvning'
	,'time_format' => 'Format for klokkeslett'
		,'24hours' => '24 timer'
		,'12hours' => '12 timer'
	,'auto_daylight_saving' => 'Automatisk innstilling av sommertid'
	,'main_table_width' => 'Bredde på hovedtabell (pixels eller %)'
	,'day_start' => 'Ukedager starter med'
	,'default_view' => 'Standardvisning'
	,'search_view' => 'Tillat søking'
	,'archive' => 'Vis tidligere aktiviteter'
	,'events_per_page' => 'Antall aktiviteter pr. side'
	,'sort_order' => 'Standardsortering'
		,'sort_order_title_a' => 'Tittel stigende'
		,'sort_order_title_d' => 'Tittel synkende'
		,'sort_order_date_a' => 'Dato stigende'
		,'sort_order_date_d' => 'Dato synkende'
	,'show_recurrent_events' => 'Vis repeterende aktiviteter'
	,'multi_day_events' => 'Flerdagsaktiviteter'
		,'multi_day_events_all' => 'Vis alle datoer'
		,'multi_day_events_bounds' => 'Vis kun start og sluttdatoer'
		,'multi_day_events_start' => 'Vis kun startdato'
	// User Settings
	,'user_settings_label' => 'User Settings'
	,'allow_user_registration' => 'Allow user registrations'
	,'reg_duplicate_emails' => 'Allow duplicate emails'
	,'reg_email_verify' => 'Enable account activation through email'
// Event View
	,'event_view_label' => 'Event View'
	,'popup_event_mode' => 'Pop-up Event'
	,'popup_event_width' => 'Width of the Pop-up window'
	,'popup_event_height' => 'Height of the Pop-up window'
// Add Event View
	,'add_event_view_label' => 'Add Event'
	,'add_event_view' => 'Enabled'
	,'addevent_allow_html' => 'Allow <b>HTML</b> in the description'
	,'addevent_allow_contact' => 'Allow Contact'
	,'addevent_allow_email' => 'Allow Email'
	,'addevent_allow_url' => 'Allow URL'
	,'addevent_allow_picture' => 'Allow Pictures'
	,'new_post_notification' => 'Email Me When Events Need Approval'
	// Year View
	,'year_view_label' => 'Year View'
	,'year_view' => 'Enabled'
// Calendar View
	,'calendar_view_label' => 'Vis kalender (månedlig)'
	,'monthly_view' => 'Aktivert'
	,'cal_view_show_week' => 'Vis ukenummer'
	,'cal_view_max_chars' => 'Maks. tegn i beskrivelse'
// Flyer View
	,'flyer_view_label' => 'Vis brosjyre'
	,'flyer_view' => 'Aktivert'
	,'flyer_show_picture' => 'Vis bilder i brosjyrevisning'
	,'flyer_view_max_chars' => 'Maks. tegn i beskrivelse'
// Weekly View
	,'weekly_view_label' => 'Vis ukentlig'
	,'weekly_view' => 'Aktivert'
	,'weekly_view_max_chars' => 'Maks. tegn i beskrivelse'
// Daily View
	,'daily_view_label' => 'Vis daglig'
	,'daily_view' => 'Aktivert'
	,'daily_view_max_chars' => 'Maks. tegn i beskrivelse'
// Vis Kategorier
	,'categories_view_label' => 'Vis kategorier'
	,'cats_view' => 'Aktivert'
	,'cats_view_max_chars' => 'Maks. tegn i beskrivelse'
// Mini Calendar
	,'mini_cal_label' => 'Minikalender'
	,'mini_cal_def_picture' => 'Standardbilde'
	,'mini_cal_display_picture' => 'Vis bilde'
	,'mini_cal_diplay_options' => array('Intet','Standardbilde', 'Daglig bilde','Ukentligt bilde','Tilfeldig bilde')
// Mail Settings
	,'mail_settings_label' => 'Mail Settings'
	,'mail_method' => 'Method to Send Mail'
	,'mail_smtp_host' => 'SMTP Hosts (separated by a semicolon ;)'
	,'mail_smtp_auth' => ' SMTP Authentication'
	,'mail_smtp_username' => 'SMTP Username'
	,'mail_smtp_password' => 'SMTP Password'
// Remote Settings
	,'remote_settings_label' => 'Remote'
	,'remote_enable' => 'Remote Events Enabled'
	,'remote_url' => 'Remote URL<br /><small>example: "http://server.com/modules/jcalserver.php"</small>'
	,'remote_auth' => 'Server Key (must match event server)'
	,'remote_pass' => 'Server Password (must match event server)'
	,'remote_cat' => 'Remote Category (name or id)'
	,'remote_localcal' => 'Local Calendar'
	,'remote_localcat' => 'Local Category'
	,'remote_cache' => 'Cache Life (seconds)'

// Form Buttons
	,'update_config' => 'Lagre ny konfigurasjon'
	,'restore_config' => 'Tilbakestill standardinnstillinger'
// Misc.
	,'update_settings_success' => 'Innstillinger oppdatert'
	,'restore_default_confirm' => 'Er du sikker på at du vil tilbakestille til standardinnstillinger?'
// Template Configuration
	,'template_type' => 'Templatetype'
	,'template_header' => 'Hovedtekst'
	,'template_footer' => 'Fottekst'
	,'template_status_default' => 'Bruk standardmalen'
	,'template_status_custom' => 'Bruk flg. mal:'
	,'template_custom' => 'Brukerdefinert mal'

	,'info_meta' => 'Meta-informasjon'
	,'info_status' => 'Statuskontroll'
	,'info_status_default' => 'Deaktiver dette innhold'
	,'info_status_custom' => 'Vis flg. innhold:'
	,'info_custom' => 'Brugerdefineret innhold'

	,'dynamic_tags' => 'Dynamiske tags'

// Product updates
	,'updates_check_text' => 'Vent mens vi henter informasjon fra serveren...'
	,'updates_no_response' => 'Ikke svar fra serveren, prøv igjen senere.'
	,'avail_updates' => 'Tilgjengelige oppdateringer:'
	,'updates_download_zip' => 'Last ned ZIP-fil (.zip)'
	,'updates_download_tgz' => 'Last ned TGZ-fil (.tar.gz)'
	,'updates_released_label' => 'Utgivelsesdag: %s'
	,'updates_no_update' => 'Du bruker den siste versjonen. Ingen oppdatering nødvendig.'
);

// ======================================================
// cal_mini.inc.php
// ======================================================

$lang_mini_cal = array(
	'def_pic' => 'Standardbilde'
	,'daily_pic' => 'Dagens bilde (%s)'
	,'weekly_pic' => 'Ukens bilde (%s)'
	,'rand_pic' => 'Tilfeldigt bilde (%s)'
	,'post_event' => 'Legg til ny aktivitet'
	,'num_events' => '%d aktivitet(er)'
	,'selected_week' => 'Uke %d'
);

// ======================================================
// extcalendar.php
// ======================================================

// To Be Done

// ======================================================
// config.inc.php
// ======================================================

// To Be Done

// ======================================================
// installe.php
// ======================================================

// To Be Done

// ======================================================
// login.php
// ======================================================

if (defined('LOGIN_PHP')) 

$lang_login_data = array(
	'section_title' => 'Logg inn'
// General Settings
	,'login_intro' => 'Oppgi brukernavn og passord for å logge inn'
	,'username' => 'Brukernavn'
	,'password' => 'Passord'
	,'remember_me' => 'Husk meg'
	,'login_button' => 'Logg inn'
// Errors
	,'invalid_login' => 'Sjekk dine inntastede opplysninger og prøv igjen!'
	,'no_username' => 'Du må oppgi ditt brukernavn!'
	,'already_logged' => 'Du er allerede logget inn!'
);

// ======================================================
// logout.php
// ======================================================

// To Be Done


// ======================================================
// plugins.php
// ======================================================

// To Be Done




// New defined constants, used to make a start with new language system

if (!defined('_EXTCAL_THEMES_INSTALL_HEADING'))
{
	DEFINE('_EXTCAL_THEMES_INSTALL_HEADING', 'JCal Client Themes Manager');
	
	//Common
	DEFINE('_EXTCAL_VERSION', 'Versjon');
	DEFINE('_EXTCAL_DATE', 'Dato');
	DEFINE('_EXTCAL_AUTHOR', 'Forfatter');
	DEFINE('_EXTCAL_AUTHOR_EMAIL', 'Forfatters e-post');
	DEFINE('_EXTCAL_AUTHOR_URL', 'Forfatters URL');
	DEFINE('_EXTCAL_PUBLISHED', 'Publisert');
	
	//Plugins
	DEFINE('_EXTCAL_THEME_PLUGIN', 'Theme');
	DEFINE('_EXTCAL_THEME_PLUGCOM', 'Theme/Command');
	DEFINE('_EXTCAL_THEME_NAME', 'Name');
	DEFINE('_EXTCAL_THEME_HEADING', 'JCal Client Themes Manager');
	DEFINE('_EXTCAL_THEME_FILTER', 'Filter');
	DEFINE('_EXTCAL_THEME_ACCESS_LIST', 'Access List');
	DEFINE('_EXTCAL_THEME_ACCESS_LVL', 'Access Level');
	DEFINE('_EXTCAL_THEME_CORE', 'Core');
	DEFINE('_EXTCAL_THEME_DEFAULT', 'Standard');
	DEFINE('_EXTCAL_THEME_ORDER', 'Sortering');
	DEFINE('_EXTCAL_THEME_ROW', 'Linje');
	DEFINE('_EXTCAL_THEME_TYPE', 'Type');
	DEFINE('_EXTCAL_THEME_ICON', 'Ikon');
	DEFINE('_EXTCAL_THEME_LAYOUT_ICON', 'Layout Icon');
	DEFINE('_EXTCAL_THEME_DESC', 'Beskrivelse');
	DEFINE('_EXTCAL_THEME_EDIT', 'Rediger');
	DEFINE('_EXTCAL_THEME_NEW', 'Ny');
	DEFINE('_EXTCAL_THEME_DETAILS', 'Plugin Details');
	DEFINE('_EXTCAL_THEME_PARAMS', 'Parametre');
	DEFINE('_EXTCAL_THEME_ELMS', 'Elementer');
	//Plugin Installer
	DEFINE('_EXTCAL_THEMES_INSTALL_MSG', 'Only those Themes that can be uninstalled are displayed - the Core Theme cannot be removed.');
	DEFINE('_EXTCAL_THEME_NONE', 'There are no non-core themes installed');
	
	//Language Manager
	DEFINE('_EXTCAL_LANG_HEADING', 'EXTCAL Language Manager');
	DEFINE('_EXTCAL_LANG_LANG', 'Språk');
	
	//Language Installer
	DEFINE('_EXTCAL_LANG_HEADING_INSTALL', 'Installer nytt EXTCAL-språk');
	DEFINE('_EXTCAL_LANG_BACK', 'Back to Language Manager');
	//
	
	//Global Installer
	DEFINE('_EXTCAL_INS_PACKAGE_UPLOAD', 'Upload Package File');
	DEFINE('_EXTCAL_INS_PACKAGE_FILE', 'Package File');
	DEFINE('_EXTCAL_INS_INSTALL', 'Install From Directory');
	DEFINE('_EXTCAL_INS_INSTALL_DIR', 'Install Directory');
	DEFINE('_EXTCAL_INS_UPLOAD_BUTTON', 'Upload File &amp; Install');
	DEFINE('_EXTCAL_INS_INSTALL_BUTTON', 'Installer');
}
?>
