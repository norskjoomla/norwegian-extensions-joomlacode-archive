<?php
/*
 **********************************************
 Copyright (c) 2006-2009 Anything-Digital.com
 **********************************************
 JCal Pro is a fork of the existing Extcalendar component for Joomla!
 (com_extcal_0_9_2_RC4.zip from mamboguru.com).
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

 $Id$

 **********************************************
 Get the latest version of JCal Pro at:
 http://dev.anything-digital.com//
 **********************************************
 */

/** ensure this file is being included by a parent file */
defined( '_JEXEC' ) or die( 'Direct Access to this location is not allowed.' );

// New language structure
$lang_info = array (
	'name' => 'Norwegian'
	,'nativename' => 'Norsk' // Language name in native language. E.g: 'Franï¿½ais' for 'French'
	,'locale' => array('nb','norwegian','no_NO','no_NO.utf8') // Standard locale alternatives for a specific language. For reference, go to: http://www.php.net/manual/en/function.setlocale.php
	,'charset' => 'UTF-8' // For reference, go to : http://www.w3.org/International/O-charset-lang.html
	,'direction' => 'ltr' // 'ltr' for Left to Right. 'rtl' for Right to Left languages such as Arabic.
	,'author' => 'Erik Spieler'
	,'author_email' => 'erik@spieler.no'
	,'author_url' => 'http://www.camira.no'
	,'transdate' => '10/10/2009'
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
	,'everyday' => 'Daglig'
	,'everymonth' => 'Månedlig'
	,'everyyear' => 'Årlig'
	,'active' => 'Aktiv'
	,'not_active' => 'Inaktiv'
	,'today' => 'I dag'
	,'signature' => 'Powered by %s'
	,'expand' => 'Ekspander'
	,'collapse' => 'Kollaps'
	,'any_calendar' => 'Vis alle kalendre'
    ,'noon' => 'noon'
	,'midnight' => 'midnatt'
	,'am' => 'am'
  ,'pm' => 'pm'
	
	);

	// Date formats, For reference, go to : http://www.php.net/manual/en/function.strftime.php
	$lang_date_format = array (
	'full_date' => '%A, %B %d, %Y' // e.g. Wednesday, June 05, 2002
	,'full_date_time_24hour' => '%A, %B %d, %Y At %H:%M' // e.g. Wednesday, June 05, 2002 At 21:05
	,'full_date_time_12hour' => '%A, %B %d, %Y At %I:%M %p ' // e.g. Wednesday, June 05, 2002 At 9:05 pm
	,'day_month_year' => '%d-%b-%Y' // e.g 10-Sep-2004
	,'local_date' => '%c' // Preferred date and time representation for current language
	,'mini_date' => '%a. %d %b, %Y'
	,'month_year' => '%B %Y'
	,'day_of_week' => array('søndag','mandag','tirsdag','onsdag','torsdag','fredag','lørdag')
	,'months' => array('januar','februar','mars','april','mai','juni','juli','august','september','oktober','november','desember')
	// Jcal Pro 2.1.x
	,'date_entry' => '%Y-%m-%d'
	);

	$lang_system = array (
	'system_caption' => 'Systemmelding'
	,'page_access_denied' => 'Du har ikke tilstrekkelige rettigheter for å hente frem denne siden.'
	,'page_requires_login' => 'Du må være logget inn for å få hente frem denne siden.'
	,'operation_denied' => 'Du har ikke tilstrekkelige rettigheter for å utføre denne operasjonen.'
	,'section_disabled' => 'Denne seksjonen er ikke tilgjengelig !'
	,'non_exist_cat' => 'Valgt kategori eksisterer ikke !'
	,'non_exist_event' => 'Valgt aktivitet eksisterer ikke !'
	,'param_missing' => 'Oppgitte parametre er feil.'
	,'no_events' => 'Det er ingen aktiviteter å vise'
	,'config_string' => 'Du benytter for øyeblikket \'%s\' som kjører på %s, %s og %s.'
	,'no_table' => '\'%s\' tabellen eksisterer ikke !'
	,'no_anonymous_group' => '%s tabellen inneholder ikke gruppen \'Anonymous\' !'
	,'calendar_locked' => 'Tjenesten er nede grunnet vedlikehold eller oppgradering.'
	,'new_upgrade' => 'Systemet har oppdaget en ny versjon. Det anbefales å oppgradere nå. Klikk "Fortsett" for å starte oppgraderingsverktøyet.'
	,'no_profile' => 'En feil oppstod under henting av din profil'
	,'unknown_component' => 'Ukjent komponent'
	// Mail messages
	,'new_event_subject' => 'Aktivitet til godkjenning %s'
	,'event_notification_failed' => 'En feil oppstod under sending av e-postvarsel!'

	,'show_required_privileges' => 'Ditt tilgangsnivå er %s, mens %s er påkrevet'  // JCal 2.1
	,'template_block_not_found' => '<b>malfeil<b><br />Klarte ikke å finne blokk \'%s\' i :<br /><pre>%s</pre>'
	,'template_file_not_found' => '<b>JCAL Pro kritisk feil</b>:<br />Kan ikke laste malfil %s!</b>'
	);

	// Message body for new event email notification
	$lang_system['event_notification_body'] = <<<EOT
Følgende aktivitet har blitt lagt til på {CALENDAR_NAME}
og må godkjennes:

Tittel: "{TITLE}"
Dato: "{DATE}"
Varighet: "{DURATION}"

Du kan se denne aktiviteten ved å klikke på lenken under 
eller å lime den inn i din nettleser.

{LINK}

(MERK at du må være innlogget som administrator for
at lenken skal virke.)

Med vennlig hilsen

administrator for {CALENDAR_NAME}

EOT;

	// Admin menu entries
	$lang_admin_menu = array (
	'login' => 'Logg inn'
	,'register' => 'Registrer'
	,'logout' => 'Logg ut <span style="color:#FF9922">[<span style="color:#606F79">%s</span>]</span>'
	,'user_profile' => 'Min profil'
	,'admin_events' => 'Aktiviteter'
	,'admin_categories' => 'Kategorier'
	,'admin_groups' => 'Grupper'
	,'admin_users' => 'Brukere'
	,'admin_settings' => 'Innstillinger'
	);

	// Main menu entries
	$lang_main_menu = array (
	'add_event' => 'Legg til aktivitet'
	,'cal_view' => 'Månedsformat'
	,'flat_view' => 'Listeformat'
	,'weekly_view' => 'Ukesformat'
	,'daily_view' => 'Dagsformat'
	,'yearly_view' => 'Årsformat'
	,'categories_view' => 'Kategorier'
	,'search_view' => 'Søk'
	,'ical_view' => 'hent som iCal'
	,'print_view' => 'Utskrift'
	);

	// ======================================================
	// Add Event view
	// ======================================================

	$lang_add_event_view = array(
	'section_title' => 'Legg til aktivitet'
	,'edit_event' => 'Rediger aktivitet [id%d] \'%s\''
	,'update_event_button' => 'Oppdater aktivitet'

	// Event details
	,'event_details_label' => 'Aktivitetsdetaljer'
	,'event_title' => 'Aktivitetstittel'
	,'event_desc' => 'Aktivitetsbeskrivelse'
	,'event_cat' => 'Kategori'
	,'choose_cat' => 'Velg en kategori'
	,'event_date' => 'Aktivitetsdato'
	,'day_label' => 'Dag'
	,'month_label' => 'Måned'
	,'year_label' => 'År'
	,'start_date_label' => 'Starttid'
	,'start_time_label' => 'kl.'
	,'end_date_label' => 'Varighet'
	,'all_day_label' => 'Hele dagen'
	// Contact details
	,'contact_details_label' => 'Kontaktdetaljer'
	,'contact_info' => 'Kontaksinformasjon'
	,'contact_email' => 'E-post'
	,'contact_url' => 'URL'
	// Repeat events
	,'repeat_event_label' => 'Gjenta aktivitet'
	,'repeat_method_label' => 'Gjentagningsmetode'
	,'repeat_none' => 'Ikke gjenta denne aktiviteten'
	,'repeat_every' => 'Gjenta hver'
	,'repeat_days' => 'Dag(er)'
	,'repeat_weeks' => 'Uke(r)'
	,'repeat_months' => 'Måned(er)'
	,'repeat_years' => 'År'
	,'repeat_end_date_label' => 'Sluttdato'
	,'repeat_end_date_none' => 'Ingen sluttdato'
	,'repeat_end_date_count' => 'Avslutt etter %s forekomster'
	,'repeat_end_date_until' => 'Gjenta til'
	// new JCalpro 2
	,'repeat_event_detached' => 'Denne aktiviteten var en del av en gjentagende serie, men har blitt endret og løsrevet fra serien'
	,'repeat_event_detached_short' => 'Løsrevet fra serie'
	,'repeat_event_not_detached' => 'denne aktiviteten er en del av en gjentagende serie'
	,'repeat_edit_parent_event' => 'Rediger hovedaktivitet'
	,'deleted_child_events' => 'Slettet %d foregående gjentagelser'
	,'created_child_events' => 'Opprettet totalt %d gjentagelser for aktiviteten %s. Vis aktiviteten ved å <a href="%s" >Klikke her.</a>.'  // Jcal Pro 2.1.x

	// Other details
	,'other_details_label' => 'Andre detaljer'
	,'picture_file' => 'Bildefil'
	,'file_upload_info' => '(%d KB grense - Gyldige filendelser : %s )'
	,'del_picture' => 'Slett gjeldende bilde?'
	// Administrative options
	,'admin_options_label' => 'Administrative valg'
	,'auto_appr_event' => 'Aktivitet godkjent'

	// Error messages
	,'no_title' => 'Du må oppgi en aktivitetstittel!'
	,'no_desc' => 'Du må gi en beskrivelse av aktiviteten!'
	,'no_cat' => 'Du må velge en kategori fra nedtrekksmenyen!'
	,'date_invalid' => 'Du må oppgi en gyldig dato for aktiviteten!'
	,'end_days_invalid' => 'Verdien i \'Dager\' feltet er ikke gyldig!'
	,'end_hours_invalid' => 'Verdien i \'Timer\' feltet er ikke gyldig!'
	,'end_minutes_invalid' => 'Verdien i \'Minutter\' feltet er ikke gyldig!'
	,'move_image_failed' => 'En feil oppstod under opplasting av bildet. Påse at bildefilen er av en gydlig type, og ikke er for stor. Ta eventuelt kontakt med administrator.'
	,'non_valid_dimensions' => 'Bildets bredde eller høyde er større enn %s piksler!'

	,'recur_val_1_invalid' => 'Verdien oppgitt som \'gjentagelsesintervall\' er ugyldig. Denne verdien må være større enn \'0\'!'
	,'recur_end_count_invalid' => 'Verdien oppgitt som \'antall gjentagelser\' er ugyldig. Denne verdien må være større enn \'0\'!'
	,'recur_end_until_invalid' => '\'gjenta til\' datoen er ikke gyldig!'
	,'no_recur_end_date' => 'En aktivitet som gjentas, må ha en sluttdato eller et antall ganger den skal gjentas.'
	
	// new JCalpro 2
	,'failed_existing_event_update' => 'Databasefeil oppstod under oppdatering av aktiviteten %s (%d)'
	,'failed_child_event_deletion' => 'Databasefeil oppstod under sletting av underoppføring til aktiviteten %s (%d)'
	,'failed_child_event_creation' => 'Databasefeil oppstod under opprettelsen av underoppføring til aktiviteten %s (%d)'
	,'no_calendar' => 'Du må velge en kalender fra nedtrekksmenyen!'
	,'event_cal' => 'Kalender'
	,'private_event' => 'Privat aktivitet'
	,'private_event_read_only' => 'Privat aktivitet, andre kan lese'
	,'public_event' => 'Offentlig aktivitet'
	,'privacy' => 'Personvern'
	,'failed_event_creation' => 'En databasefeil oppstod under opprettelsen av denne aktiviteten'
	// Misc. messages JCal 2.1
	,'submit_event_pending' => 'Din aktiviten har blitt lagt inn, men vil ikke bli synlig i kalenderen før en administrator har godkjent den for publisering.'
	,'submit_event_approved' => 'Din aktivitet ble godkjent for publisering automatisk. Se denne ved å <a href="%s" >klikke her.</a>. '
	,'event_repeat_msg' => 'Denne aktiviteten gjentas'
	,'event_no_repeat_msg' => 'Denne aktiviteten gjentas ikke'
	,'recur_start_date_invalid' => 'Ugyldig startdato. For en aktivitet som gjentar, må startdatoen være satt til den første dagen aktiviteten i en serie finnes (f.eks: hvis den gjentar hver tirsdag, må startdatoen være på en tirsdag)'
	
	// new JCalPro 2.1
	,'repeat_daily' => 'Gjenta daglig'
	,'repeat_weekly' => 'Gjenta ukentlig'
	,'repeat_monthly' => 'Gjenta månedlig'
	,'repeat_yearly' => 'Gjenta årlig'
	,'rec_weekly_on' => 'på:'
	,'rec_monthly_on' => 'den:'
	,'rec_yearly_on' => 'den:'
	,'rec_day_first' => 'første'
	,'rec_day_second' => 'andre'
	,'rec_day_third' => 'tredje'
	,'rec_day_fourth' => 'fjerde'
	,'rec_day_last' => 'siste'
	,'rec_day_day' => 'dag'
	,'rec_day_week_day' => 'ukedag'
	,'rec_day_weekend_day' => 'helgedag'
	,'rec_yearly_on_month_label' => 'i'
	
	);

	// ======================================================
	// daily view
	// ======================================================

	$lang_daily_event_view = array(
	'section_title' => 'Dagsformat'
	,'next_day' => 'Neste dag'
	,'previous_day' => 'Forrige dag'
	,'no_events' => 'Det er ingen aktiviteter denne dagen.'
	);

	// ======================================================
	// weekly view
	// ======================================================

	$lang_weekly_event_view = array(
	'section_title' => 'Ukesformat'
	,'week_period' => '%s - %s'
	,'next_week' => 'Neste uke'
	,'previous_week' => 'Forrige uke'
	,'selected_week' => 'Uke %d'
	,'no_events' => 'Det er ingen aktiviteter denne uken'
	);

	// ======================================================
	// monthly view
	// ======================================================

	$lang_monthly_event_view = array(
	'section_title' => 'Månedsformat'
	,'next_month' => 'Neste måned'
	,'previous_month' => 'Forrige måned'
	);

	// ======================================================
	// flat view
	// ======================================================

	$lang_flat_event_view = array(
	'section_title' => 'Listeformat'
	,'week_period' => '%s - %s'
	,'next_month' => 'Neste måned'
	,'previous_month' => 'Forrige måned'
	,'contact_info' => 'Kontaktinfo'
	,'contact_email' => 'E-post'
	,'contact_url' => 'URL'
	,'no_events' => 'Det er ingen aktiviteter denne måneden'
	);

	// ======================================================
	// Event view
	// ======================================================

	$lang_event_view = array(
	'section_title' => 'Aktivitetsformat'
	,'display_event' => 'Aktivitet: \'%s\''
	,'cat_name' => 'Kategori'
	,'event_start_date' => 'Dato'
	,'event_end_date' => 'Til'
	,'event_duration' => 'Varighet'
	,'contact_info' => 'Kontaktinfo'
	,'contact_email' => 'E-post'
	,'contact_url' => 'URL'
	,'no_event' => 'Det er ingen aktiviteter å vise.'
	,'stats_string' => '<strong>%d</strong> aktiviteter totalt'
	,'edit_event' => 'Rediger aktivitet'
	,'delete_event' => 'Slett aktivitet'
	,'delete_confirm' => 'Er du sikker på at du vil slette dennne aktiviteten?'
	
	);

	// ======================================================
	// Categories view
	// ======================================================

	$lang_cats_view = array(
	'section_title' => 'Kategoriformat'
	,'cat_name' => 'Kategorinavn'
	,'total_events' => 'Aktiviteter totalt'
	,'upcoming_events' => 'Forestående aktiviteter'
	,'no_cats' => 'Det er ingen kategorier å vise.'
	,'stats_string' => 'Det finnes <strong>%d</strong> aktiviteter i <strong>%d</strong> kategorier'
	);

	// ======================================================
	// Category Events view
	// ======================================================

	$lang_cat_events_view = array(
	'section_title' => 'Aktiviteter under \'%s\''
	,'event_name' => 'Aktivitetsnavn'
	,'event_date' => 'Dato'
	,'no_events' => 'Det finnes ingen aktiviteter i denne kategorien.'
	,'stats_string' => '<strong>%d</strong> aktiviteter totalt'
	,'stats_string1' => '<strong>%d</strong> aktivitet(er) på <strong>%d</strong> side(r)'
	);

	// ======================================================
	// cal_search.php
	// ======================================================

	$lang_event_search_data = array(
	'section_title' => 'Søk i kalender',
	'search_results' => 'Søkeresultat',
	'category_label' => 'Kategori',
	'date_label' => 'Dato',
	'no_events' => 'Det er ingen aktiviteter under denne kategorien.',
	'search_caption' => 'Skriv inn søkeord...',
	'search_again' => 'Søk igjen',
	'search_button' => 'Søk',
	// Misc.
	'no_results' => 'Ingen treff ble funnet',	
	// Stats
	'stats_string1' => '<strong>%d</strong> aktivitet(er) funnet',
	'stats_string2' => '<strong>%d</strong> aktivitet(er) på <strong>%d</strong> side(r)'
	);

	// ======================================================
	// profile.php
	// ======================================================

	if (defined('PROFILE_PHP'))

	$lang_user_profile_data = array(
	'section_title' => 'Min profil',
	'edit_profile' => 'Rediger profil',
	'update_profile' => 'Oppdater profil',
	'actions_label' => 'Aksjoner',
	// Account Info
	'account_info_label' => 'Kontoinformasjon',
	'user_name' => 'Brukernavn',
	'user_pass' => 'Passord',
	'user_pass_confirm' => 'Bekreft passord',
	'user_email' => 'E-postadresse',
	'group_label' => 'Gruppemedlemskap',
	// Other Details
	'other_details_label' => 'Andre detaljer',
	'first_name' => 'Fornavn',
	'last_name' => 'Etternavn',
	'full_name' => 'For- og etternavn',
	'user_website' => 'Hjemmeside',
	'user_location' => 'Sted',
	'user_occupation' => 'Yrke',
	// Misc.
	'select_language' => 'Velg språk',
	'edit_profile_success' => 'Profilen ble oppdatert',
	'update_pass_info' => 'La passordfeltet stå åpent dersom du ikke ønsker å endre det',
	// Error messages
	'invalid_password' => 'Vennligst oppgi et passord bestående kun av tall og bostaver, og som har mellom 4 og 16 tegn !',
	'password_is_username' => 'Passordet kan ikke være det samme som brukernavnet!',
	'password_not_match' =>'Passordet du oppga stemmer ikke overens med \'bekreft passord\'',
	'invalid_email' => 'Du må oppgi en gyldig e-postadresse!',
	'email_exists' => 'En annen bruker er registrert med e-postadressen du oppga. Vennligst bruk en annen e-postadresse!',
	'no_email' => 'Du må oppgi en e-postadresse!',
	'invalid_email' => 'Du må oppgi en gyldig e-postadresse!',
	'no_password' => 'Du må oppgi et passord for kontoen!'
	);

	// ======================================================
	// register.php
	// ======================================================

	if (defined('USER_REGISTRATION_PHP'))

	$lang_user_registration_data = array(
	'section_title' => 'Brukerregistrering',
	// Steg 1: Brukervilkår
	'terms_caption' => 'Brukervilkår',
	'terms_intro' => 'For å kunne fortsette, må du kunne si deg enig i følgende:',
	'terms_message' => 'Vennligst bruk et par minutter for å gå gjennom vilkårene for bruk. Hvis du samtykker, og ønsker å fortsette med din registrering,  klikker du på "Jeg godtar"-knappen under. For å avbryte, klikk på \'tilbake\' knappen i din nettleser.<br /><br />Vennligst merk at vi ikke er ansvarlige for aktiviteter publisert av brukere av denne kalender-programvaren. Vi går ikke god for eller garanterer for at publiserte aktiviteter er korrekte, komplette eller nyttige, og vi er heller ikke ansvarlige for innholdet i aktivitetene.<br /><br />Tekstene uttrykker kun synspunktene til den som oppretter eller eier aktivitetene, og ikke nødvendigvis synspunktene til utviklerne av denne applikasjonen. Enhver bruker som finner aktiviteter støtende, oppfordres til straks å kontakte administrator via e-post. Vi har mulighet til å slette slikt innhold, og vi bestreber oss å gjøre dette innenfor en rimelig tidsramme, såfremt vi finner at din henvendelse er berettiget.<br /><br />Du samtykker i forbindelse med bruk av kalenderen, at du ikke vil bruke den til å offentliggjøre materiale, som du du vet er usant og/eller ærekrenkende, unøyaktig, støtende, vulgært, hatefullt, sjikanerende, uanstendig, blasfemisk, seksuelt orientert, truende, krenker privatlivets fred eller på annen måte går i mot norsk lov.<br/><br/>Du samtykker i at du ikke vil offentliggøre opphavsrettighets-beskyttet materiale med mindre rettighetene eies av deg eller av %s.',
	'terms_button' => 'Jeg godtar',

	// Account Info
	'account_info_label' => 'Kontoinformasjon',
	'user_name' => 'Brukernavn',
	'user_pass' => 'Passord',
	'user_pass_confirm' => 'Bekreft Passord',
	'user_email' => 'E-postadresse',
	// Other Details
	'other_details_label' => 'Andre opplysninger',
	'first_name' => 'Fornavn',
	'last_name' => 'Etternavn',
	'user_website' => 'Hjemmeside',
	'user_location' => 'Sted',
	'user_occupation' => 'Yrke',
	'register_button' => 'Send min registrering',

	// Stats
	'stats_string1' => '<strong>%d</strong> brukere',
	'stats_string2' => '<strong>%d</strong> brukere på <strong>%d</strong> side(r)',
	// Misc.
	'reg_nomail_success' => 'Takk for at du registrerte deg.',
	'reg_mail_success' => 'En e-post med informasjon om hvordan du aktiverer din konto har blitt sendt til e-postadressen du oppga.',
	'reg_activation_success' => 'Gratulerer. Din konto er nå aktiv, og du kan logge deg inn med ditt brukernavn og passord.',
	// Mail messages
	'reg_confirm_subject' => 'Registrert på %s',

	// Error messages
	'no_username' => 'Du må oppgi et brukernavn!',
	'invalid_username' => 'Vennligst oppgi et brukernavn bestående kun av tall og bokstaver, og som har mellom 4 og 16 tegn !',
	'username_exists' => 'Brukernavnet du la inn er allerede i bruk. Prøv et annet!',
	'no_password' => 'Du må oppgi et passord!',
	'invalid_password' => 'Vennligst oppgi et passord bestående kun av tall og bostaver, og som har mellom 4 og 16 tegn !',
	'password_is_username' => 'Passordet kan ikke være det samme som brukernavnet!',
	'password_not_match' =>'Passordet du oppga stemmer ikke overens med \'bekreft passord\'',
	'no_email' => 'Du må oppgi en e-postadresse!',
	'invalid_email' => 'Du må oppgi en gyldig e-postadresse!',
	'email_exists' => 'En annen bruker er registrert med e-postadressen du oppga. Vennligst bruk en annen e-postadresse !',
	'delete_user_failed' => 'Denne brukerkontoen kan ikke slettes',
	'no_users' => 'Det er ingen brukerkontoer å vise!',
	'already_logged' => 'Du er allerede innlogget!',
	'registration_not_allowed' => 'Brukerregistrering er for tiden deaktivert!',
	'reg_email_failed' => 'En feil oppstod under sending av aktiviserings e-posten!',
	'reg_activation_failed' => 'En feil oppstod under prosessering av aktiveringen!'

	);
	// Message body for email activation
	$lang_user_registration_data['reg_confirm_body'] = <<<EOT
Du er nå registrert som bruker på {CALENDAR_NAME}

Ditt brukernavn er: "{USERNAME}"
Ditt passord er: "{PASSWORD}"

For å aktivere din konto, må du klikke på lenken under,
eller å lime den inn i nettleseren din.

{REG_LINK}

Med vennlig hilsen

administrator for {CALENDAR_NAME}

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
	'section_title' => 'Aktivitetsadministrasjon',
	'events_to_approve' => 'Aktivitetsadministrasjon: Aktiviteter til godkjenning',
	'upcoming_events' => 'Aktivitetsadministrasjon: Forestående aktiviteter',
	'past_events' => 'Aktivitetsadministrasjon: Tidligere aktiviteter',
	'add_event' => 'Opprett aktivitet',
	'edit_event' => 'Rediger aktivitet',
	'view_event' => 'Vis aktivitet',
	'approve_event' => 'Godkjenn aktivitet',
	'update_event' => 'Oppdater aktivitetsinfo',
	'delete_event' => 'Slett aktivitet',
	'events_label' => 'Aktiviteter',
	'auto_approve' => 'Auto-godkjenn',
	'date_label' => 'Dato',
	'actions_label' => 'Aksjoner',
	'events_filter_label' => 'Filtrer aktiviteter',
	'events_filter_options' => array('Vis alle aktiviteter','Vis kun ikke-godkjente aktiviteter','Vis kun forestående aktiviteter','Vis kun tidligere aktiviteter'),
	'picture_attached' => 'Bilde vedlagt',
	// View Event
	'view_event_name' => 'Aktivitet: \'%s\'',
	'event_start_date' => 'Dato',
	'event_end_date' => 'Til',
	'event_duration' => 'varighet',
	'contact_info' => 'Kontaktsinformasjon',
	'contact_email' => 'E-post',
	'contact_url' => 'URL',
	// General Info
	// Event form
	'edit_event_title' => 'Aktivitet: \'%s\'',
	'cat_name' => 'Kategori',
	'event_start_date' => 'Dato',
	'event_end_date' => 'Til',
	'contact_info' => 'Kontaktsinformasjon',
	'contact_email' => 'E-post',
	'contact_url' => 'URL',
	'no_event' => 'Det er ingen aktiviteter å vise.',
	'stats_string' => '<strong>%d</strong> aktiviteter totalt',
	// Stats
	'stats_string1' => '<strong>%d</strong> aktivitet(er)',
	'stats_string2' => 'Total: <strong>%d</strong> aktiviteter på <strong>%d</strong> side(r)',
	// Misc.
	'add_event_success' => 'Ny aktivitet ble opprettet',
	'edit_event_success' => 'Aktiviteten ble oppdatert. Se denne aktiviteten ved å <a href="%s" >klikke her.</a>',  // Jcal Pro 2.1.x
	'approve_event_success' => 'Aktiviteten ble godkjent',
	'delete_confirm' => 'Er du sikker på at du vil slette denne aktiviteten?',
	'delete_event_success' => 'Aktiviteten ble slettet',
	'active_label' => 'Aktiv',
	'not_active_label' => 'Inaktiv',
	// Error messages
	'no_event_name' => 'Vennligst oppgi et navn for denne aktiviteten!',
	'no_event_desc' => 'Du må angi en beskrivelse av denne aktiviteten!',
	'no_cat' => 'Du må velge en kategori for denne aktiviteten!',
	'no_day' => 'Du må velge en dag!',
	'no_month' => 'Du må velge en måned!',
	'no_year' => 'Du må velge et år!',
	'non_valid_date' => 'Vennligst oppgi en gyldig dato!',
	'end_days_invalid' => 'Vennligst påse at \'Dager\' feltet under \'Varighet\' består kun av tall!',
	'end_hours_invalid' => 'Vennligst påse at \'Timer\' feltet under \'Varighet\' består kun av tall!',
	'end_minutes_invalid' => 'Vennligst påse at \'Minutter\' feltet under \'Varighet\' består kun av tall!',
	'delete_event_failed' => 'Denne aktiviteten kan ikke slettes',
	'approve_event_failed' => 'denne aktiviteten kan ikke godkjennes',
	'no_events' => 'det er ingen aktiviteter å vise!',
	'recur_val_1_invalid' => 'Verdien oppgitt som \'gjentagelsesintervall\' er ugyldig. Denne verdien må være større enn \'0\'!',
	'recur_end_count_invalid' => 'Verdien oppgitt som \'antall gjentagelser\' er ugyldig. Denne verdien må være større enn \'0\'!',
	'recur_end_until_invalid' => '\'gjenta til\' datoen må være større enn startdatoen!'

	);

	// ======================================================
	// admin_categories.php
	// ======================================================

	if (defined('ADMIN_CATS_PHP'))

	$lang_cat_admin_data = array(
	'section_title' => 'Kategoriadministrasjon',
	'add_cat' => 'Legg til kategori',
	'edit_cat' => 'rediger kategori',
	'update_cat' => 'Oppdater kategori-info',
	'delete_cat' => 'Slett kategori',
	'events_label' => 'Aktiviteter',
	'visibility' => 'Synlighet',
	'actions_label' => 'Aksjoner',
	'users_label' => 'Brukere',
	'admins_label' => 'Administratorer',
	// General Info
	'general_info_label' => 'Generell informasjon',
	'cat_name' => 'Kategorinavn',
	'cat_desc' => 'kategoribeskrivelse',
	'cat_color' => 'Farge',
	'pick_color' => 'Velg en farge!',
	'status_label' => 'Status',
	'category_label' => 'Kategoritillatelser',
	// Stats
	'stats_string1' => '<strong>%d</strong> kategorier',
	'stats_string2' => 'Aktive: <strong>%d</strong>&nbsp;&nbsp;&nbsp;Totalt: <strong>%d</strong>&nbsp;&nbsp;&nbsp;på <strong>%d</strong> side(r)',
	// Misc.
	'add_cat_success' => 'Ny kategori ble opprettet',
	'edit_cat_success' => 'Kategorien ble oppdatert',
	'delete_confirm' => 'Er du sikker på at du vil slette denne kategorien?',
	'delete_cat_success' => 'Kategorien ble slettet',
	'active_label' => 'Aktiv',
	'not_active_label' => 'Inaktiv',
	// Error messages
	'no_cat_name' => 'Vennligst oppgi et navn for denne kategorien!',
	'no_cat_desc' => 'Du må angi en beskrivelse for denne kategorien!',
	'no_color' => 'Du må velge en farge for denne kategorien!',
	'delete_cat_failed' => 'Kategorien kan ikke slettes',
	'no_cats' => 'Det er ingen kategorier å vise !',
	'cat_has_events' => 'Kategorien #%d inneholder %d aktivitet(er) og kan derfor ikke slettes! Slett først alle aktiviteter under denne kategorien og prøv igjen!'
	,'default' => 'Bruk standard fra innstillinger'
	,'no_cats_to_delete' => 'Den finnes ingen kategorier som kan slettes'

	);

	// JCAL pro 2
	// ======================================================
	// admin_calendars
	// ======================================================

	if (defined('ADMIN_CALS_PHP'))

	$lang_cal_admin_data = array(
	'section_title' => 'Kalenderadministrasjon',
	'add_cal' => 'Legg til kalender',
	'edit_cal' => 'Rediger kalender',
	'update_cal' => 'Oppdater kalenderinformasjon',
	'delete_cal' => 'Slett kalender',
	'events_label' => 'Aktiviteter',
	'visibility' => 'Synlighet',
	'actions_label' => 'Aksjoner',
	'users_label' => 'Brukere',
	'admins_label' => 'Administratorer',
	// General Info
	'general_info_label' => 'Generell informasjon',
	'cal_name' => 'kalendernavn',
	'cal_desc' => 'Kalenderbeskrivelse',
	'status_label' => 'Status',
	'calendar_label' => 'Kalendertillatelser',
	// Stats
	'stats_string1' => '<strong>%d</strong> kalendre',
	'stats_string2' => 'Aktive: <strong>%d</strong>&nbsp;&nbsp;&nbsp;Totalt: <strong>%d</strong>&nbsp;&nbsp;&nbsp;på <strong>%d</strong> side(r)',
	// Misc.
	'add_cal_success' => 'Ny kalender ble opprettet',
	'edit_cal_success' => 'Kalenderen ble oppdatert',
	'delete_confirm' => 'Er du sikker på at du vil slette denne kalenderen?',
	'delete_cal_success' => 'Kalenderen ble slettet',
	'active_label' => 'Aktiv',
	'not_active_label' => 'Inaktiv',
	// Error messages
	'no_cal_name' => 'Du må oppgi et navn for denne kalenderen!',
	'no_cal_desc' => 'Du må angi en beskrivelse for denne kalenderen!',
	'delete_cal_failed' => 'Denne kalenderen kan ikke slettes',
	'no_cals' => 'Det er ingen kalendre å vise !',
	'cal_has_events' => 'Kalenderen #%d inneholder %d aktivitet(er) og kan derfor ikke slettes! Slett først alle aktiviteter under denne kalenderen og prøv igjen!',
	'default' => 'Bruk standard fra innstillinger'
	,'no_cals_to_delete' => 'Det finnes ingen kalendre som kan slettes'
	);

	// ======================================================
	// admin_users.php
	// ======================================================

	if (defined('ADMIN_USERS_PHP'))

	$lang_user_admin_data = array(
	'section_title' => 'Brukeradministrasjon',
	'add_user' => 'Opprett bruker',
	'edit_user' => 'Rediger brukerinfo',
	'update_user' => 'Oppdater brukerinfo',
	'delete_user' => 'Slett brukerkonto',
	'last_access' => 'Siste besøk',
	'actions_label' => 'Aksjoner',
	'active_label' => 'Aktiv',
	'not_active_label' => 'Inaktiv',
	// Account Info
	'account_info_label' => 'Kontoinformasjon',
	'user_name' => 'Brukernavn',
	'user_pass' => 'Passord',
	'user_pass_confirm' => 'Bekreft passord',
	'user_email' => 'E-postadresse',
	'group_label' => 'Gruppemedlemskap',
	'status_label' => 'Kontostatus',
	// Other Details
	'other_details_label' => 'Andre detaljer',
	'first_name' => 'Fornavn',
	'last_name' => 'Etternavn',
	'user_website' => 'Hjemmeside',
	'user_location' => 'Sted',
	'user_occupation' => 'Yrke',
	// Stats
	'stats_string1' => '<strong>%d</strong> brukere',
	'stats_string2' => '<strong>%d</strong> brukere på <strong>%d</strong> side(r)',
	// Misc.
	'select_group' => 'Velg en...',
	'add_user_success' => 'Brukerkontoen ble opprettet',
	'edit_user_success' => 'Brukerkontoen ble oppdatert',
	'delete_confirm' => 'Er du sikker på at du vil slette denne kontoen?',
	'delete_user_success' => 'Brukerkontoen ble slettet',
	'update_pass_info' => 'La passordfeltet stå åpent dersom du ikke ønsker å endre det',
	'access_never' => 'Aldri',
	// Error messages
	'no_username' => 'Du må oppgi et brukernavn!',
	'invalid_username' => 'Vennligst oppgi et brukernavn bestående kun av tall og bostaver, og som har mellom 4 og 16 tegn !',
	'invalid_password' => 'Vennligst oppgi et passord bestående kun av tall og bokstaver, og som har mellom 4 og 16 tegn !',
	'password_is_username' => 'Passordet kan ikke være det samme som brukernavnet!',
	'password_not_match' =>'Passordet du oppga stemmer ikke overens med \'bekreft passord\'',
	'invalid_email' => 'Du må oppgi en gyldig e-postadresse!',
	'email_exists' => 'En annen bruker er registrert med e-postadressen du oppga. Vennligst bruk en annen e-postadresse!',
	'username_exists' => 'Brukernavnet du la inn er allerede i bruk. Prøv et annet!',
	'no_email' => 'Du må oppgi en e-postadresse !',
	'invalid_email' => 'Du må oppgi en gyldig e-postadresse!',
	'no_password' => 'Du må oppgi et gyldig passord for denne brukeren!',
	'no_group' => 'Vennligst velg en gruppetilnytning for denne brukeren!',
	'delete_user_failed' => 'Denne brukerkontoen kan ikke slettes',
	'no_users' => 'Det er ingen brukerkontoer å vise!'

	);

	// ======================================================
	// admin_groups.php
	// ======================================================

	if (defined('ADMIN_GROUPS_PHP'))

	$lang_group_admin_data = array(
	'section_title' => 'Gruppeadministrasjon',
	'add_group' => 'Opprett ny gruppe',
	'edit_group' => 'Rediger gruppe',
	'update_group' => 'Oppdater gruppeinformasjon',
	'delete_group' => 'Slett gruppe',
	'view_group' => 'Vis gruppe',
	'users_label' => 'Medlemmer',
	'actions_label' => 'Aksjoner',
	// General Info
	'general_info_label' => 'Generell informasjon',
	'group_name' => 'Gruppenavn',
	'group_desc' => 'Gruppebeskrivelse',
	// Group Access Level
	'access_level_label' => 'Gruppens tilgangsnivå',
	'Administrator' => 'Denne gruppens medlemmer har administratortilgang',
	'can_manage_accounts' => 'Denne gruppens medlemmer kan administrere brukerkontoer',
	'can_change_settings' => 'Denne gruppens medlemmer kan endre kalenderinnstillingene',
	'can_manage_cats' => 'Denne gruppens medlemmer kan administrere kategorier',
	'upl_need_approval' => 'Innsendte aktiviteter krever administrators godkjenning',
	// Stats
	'stats_string1' => '<strong>%d</strong> grupper',
	'stats_string2' => 'Totalt: <strong>%d</strong> grupper på <strong>%d</strong> side(r)',
	'stats_string3' => 'Totalt: <strong>%d</strong> brukere på <strong>%d</strong> side(r)',
	// View Group Members
	'group_members_string' => 'medlemmer av \'%s\'-gruppen',
	'username_label' => 'Brukernavn',
	'firstname_label' => 'Fornavn',
	'lastname_label' => 'Etternavn',
	'email_label' => 'E-post',
	'last_access_label' => 'Siste besøk',
	'edit_user' => 'Rediger bruker',
	'delete_user' => 'Slett bruker',
	// Misc.
	'add_group_success' => 'Gruppen ble opprettet',
	'edit_group_success' => 'Gruppen ble oppdatert',
	'delete_confirm' => 'Er du sikker på at du vil slette denne gruppen?',
	'delete_user_confirm' => 'Er du sikker på at du vil slette denne gruppen?',
	'delete_group_success' => 'Gruppen ble slettet',
	'no_users_string' => 'Det finnes ingen brukere i denne gruppen',
	// Error messages
	'no_group_name' => 'Du må oppgi et navn på denne gruppen!',
	'no_group_desc' => 'Du må angi en beskrivelse for denne gruppen!',
	'delete_group_failed' => 'Denne gruppen kan ikke slettes',
	'no_groups' => 'Det er ingen grupper å vise!',
	'group_has_users' => 'Denne gruppen inneholder %d bruker(e) og kan derfor ikke slettes!<br>Vennligst koble gjenværende brukere fra gruppen og prøv igjen!'

	);

	// ======================================================
	// admin_settings.php / admin_settings_template.php /
	// admin_settings_updates.php
	// ======================================================

	$lang_settings_data = array(
	'section_title' => 'Kalenderinnstillinger'
	// Links
	,'admin_links_text' => 'Velg seksjon'
	,'admin_links' => array('Hovedinnstillinger','Malkonfigurasjon','Produktoppdateringer')
	// General Settings
	,'general_settings_label' => 'Generell'
	,'calendar_name' => 'Kalendernavn'
	,'calendar_description' => 'Kalenderbeskrivelse'
	,'calendar_admin_email' => 'Kalenderadministrators e-post'
	,'cookie_name' => 'Navn på informasjonskapsel brukt av scriptet'
	,'cookie_path' => 'Sti til informasjonskapsel brukt av scriptet'
	,'debug_mode' => 'Aktiver debug-modus'
	// Environment Settings
	,'env_settings_label' => 'Miljøinnstillinger'
	,'lang' => 'Språk'
	,'lang_name' => 'Språk'
	,'lang_native_name' => 'Språk'
	,'lang_trans_date' => 'Oversatt den'
	,'lang_author_name' => 'Oversetter'
	,'lang_author_email' => 'E-post'
	,'lang_author_url' => 'Nettsted'
	,'charset' => 'Kodesett'
	,'theme' => 'Mal'
	,'theme_name' => 'Malnavn'
	,'theme_date_made' => 'Laget den'
	,'theme_author_name' => 'Designer'
	,'theme_author_email' => 'E-post'
	,'theme_author_url' => 'Nettsted'
	,'timezone' => 'Tisdssoneforskyvning'
	,'time_format' => 'Klokkeformat'
	,'24hours' => '24 timer'
	,'12hours' => '12 timer'
	,'auto_daylight_saving' => 'Juster for sommertid automatisk'
	,'main_table_width' => 'Bredde på hovedtabell (Piksler eller %)'
	,'day_start' => 'Uken starter på'
	,'default_view' => 'Standardformat'
	,'search_view' => 'Aktiver søk'
	,'archive' => 'Vis tidligere aktiviteter'
	,'events_per_page' => 'Antall aktiviteter pr. side'
	,'sort_order' => 'Standardsortering'
	,'sort_order_title_a' => 'Tittel alfabetisk'
	,'sort_order_title_d' => 'Tittel omvendt alfabetisk'
	,'sort_order_date_a' => 'Dato eldste først '
	,'sort_order_date_d' => 'Date nyeste først'
	,'show_recurrent_events' => 'Vis gjentagende aktiviteter'
	,'multi_day_events' => 'Flerdagsaktiviteter'
	,'multi_day_events_all' => 'Vis hele datospennet'
	,'multi_day_events_bounds' => 'Vis kun start- og sluttdato'
	,'multi_day_events_start' => 'Vis kun startdato'
	// User Settings
	,'user_settings_label' => 'brukerinnstillinger'
	,'allow_user_registration' => 'Tillat brukerregistrering'
	,'reg_duplicate_emails' => 'Tillat dupliserte e-postadresser'
	,'reg_email_verify' => 'Aktiver brukerkontoaktivering via e-post'
	// Event View
	,'event_view_label' => 'Aktivitetsvisning'
	,'popup_event_mode' => 'Pop-up aktivitet'
	,'popup_event_width' => 'Bredde på pop-up vinduet'
	,'popup_event_height' => 'Høyde på pop-up vinduet'
	// Add Event View
	,'add_event_view_label' => 'Opprett aktivitet'
	,'add_event_view' => 'Aktivert'
	,'addevent_allow_html' => 'Tillat <b>HTML</b> i beskrivelsen'
	,'addevent_allow_contact' => 'Tillat kontakt'
	,'addevent_allow_email' => 'Tillat e-post'
	,'addevent_allow_url' => 'Tillat URL'
	,'addevent_allow_picture' => 'Tillat bilder'
	,'new_post_notification' => 'Send meg e-post når aktiviteter krever godkjenning'
	// Calendar View
	,'calendar_view_label' => 'Månedsformat'
	,'monthly_view' => 'Aktivert'
	,'cal_view_show_week' => 'Vis ukenumre'
	,'cal_view_max_chars' => 'Maks antall tegn i tittel'
	// Flyer View
	,'flyer_view_label' => 'Listeformat'
	,'flyer_view' => 'Aktivert'
	,'flyer_show_picture' => 'Vis bilder i listeformat'
	,'flyer_view_max_chars' => 'Maks antall tegn i beskrivelse'
	// Weekly View
	,'weekly_view_label' => 'Ukesformat'
	,'weekly_view' => 'Aktivert'
	,'weekly_view_max_chars' => 'Maks antall tegn i tittel'
	// Daily View
	,'daily_view_label' => 'Dagsformat'
	,'daily_view' => 'Aktivert'
	,'daily_view_max_chars' => 'Maks antall tegn i tittel'
	// Categories View
	,'categories_view_label' => 'Kategoriformat'
	,'cats_view' => 'Aktivert'
	,'cats_view_max_chars' => 'Maks antall tegn i tittel'
	// Mini Calendar
	,'mini_cal_label' => 'Minikalender'
	,'mini_cal_def_picture' => 'Standardbilde'
	,'mini_cal_display_picture' => 'Vis bilde'
	,'mini_cal_diplay_options' => array('Ingen','Standardbilde', 'Daglig bilde','Ukentlig bilde','Tilfeldig bilde')
	// Mail Settings
	,'mail_settings_label' => 'E-postinnstillinger'
	,'mail_method' => 'Sendemetode'
	,'mail_smtp_host' => 'SMTP-tjenere (separert med semikolon ;)'
	,'mail_smtp_auth' => ' SMTP godkjenning'
	,'mail_smtp_username' => 'SMTP brukernavn'
	,'mail_smtp_password' => 'SMTP Passord'

	// Form Buttons
	,'update_config' => 'Lagre ny konfigurasjon'
	,'restore_config' => 'Gjenopprett standard fra innstallasjonen'
	// Misc.
	,'update_settings_success' => 'innstillingene ble oppdatert'
	,'restore_default_confirm' => 'Er du sikker på at du vil gjenopprette til standard fra installasjonen?'
	// Template Configuration
	,'template_type' => 'Maltype'
	,'template_header' => 'Tilpass topptekst'
	,'template_footer' => 'Tilpass bunntekst'
	,'template_status_default' => 'Bruk standardmal'
	,'template_status_custom' => 'Bruk følgende mal:'
	,'template_custom' => 'Tilpasset mal'

	,'info_meta' => 'Metainformasjon'
	,'info_status' => 'Statuskontroll'
	,'info_status_default' => 'Deaktiver dette innholdet'
	,'info_status_custom' => 'Vis følgende innhold:'
	,'info_custom' => 'Tilpasset innhold'

	,'dynamic_tags' => 'Dynamiske tagger'

	// Product Updates
	,'updates_check_text' => 'Vennligst vent mens systemet henter informasjon fra server...'
	,'updates_no_response' => 'Serveren svarte ikke. Prøv igjen senere.'
	,'avail_updates' => 'Tilgjengelige oppdateringer'
	,'updates_download_zip' => 'Last ned ZIP-pakke (.zip)'
	,'updates_download_tgz' => 'Last ned TGZ-pakke (.tar.gz)'
	,'updates_released_label' => 'Utgivelsesdato: %s'
	,'updates_no_update' => 'Du bruker siste tilgjengelige versjon. Ingen oppdatering nødvendig.'
	);

	// ======================================================
	// cal_mini.inc.php
	// ======================================================

	$lang_mini_cal = array(
	'def_pic' => 'Standardbilde'
	,'daily_pic' => 'Dagens bilde (%s)'
	,'weekly_pic' => 'Ukens bilde (%s)'
	,'rand_pic' => 'Tilfeldig bilde (%s)'
	,'post_event' => 'Legg til aktivitet'
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
	// install.php
	// ======================================================

	// To Be Done

	// ======================================================
	// login.php
	// ======================================================

	if (defined('LOGIN_PHP'))

	$lang_login_data = array(
	'section_title' => 'Innlogging'
	// General Settings
	,'login_intro' => 'Legg inn brukernavn og passord'
	,'username' => 'Brukernavn'
	,'password' => 'Passord'
	,'remember_me' => 'Husk meg'
	,'login_button' => 'Logg inn'
	// Errors
	,'invalid_login' => 'Sjekk ditt brukernavn og passord og prøv igjen!'
	,'no_username' => 'Du må oppgi et brukernavn!'
	,'already_logged' => 'Du er allerede innlogget!'
	);

	// ======================================================
	// logout.php
	// ======================================================

	// To Be Done


	// ======================================================
	// plugins.php
	// ======================================================

	// To Be Done

	// ======================================================
	// latest_events module
	// ======================================================

	$lang_latest_events = array(
  'view_full_cal' => 'Vis hele kalenderen'
  ,'add_new_event' => 'Legg til aktivitet'
  ,'recent_events' => 'Tidligere aktiviteter'
  ,'no_events_scheduled' => 'Det finnes ingen planlagte aktiviteter.'
  ,'more_days' => ' Flere dager'
  ,'days_ago' => ' Dager siden'
  );



  // New defined constants, used to make a start with new language system

  if (!defined('_EXTCAL_THEMES_INSTALL_HEADING'))
  {
    DEFINE('_EXTCAL_THEMES_INSTALL_HEADING', 'JCal Pro maladministrator');

    //Common
    DEFINE('_EXTCAL_VERSION', 'Versjon');
    DEFINE('_EXTCAL_DATE', 'Dato');
    DEFINE('_EXTCAL_AUTHOR', 'Forfatter');
    DEFINE('_EXTCAL_AUTHOR_EMAIL', 'Forfatters e-post');
    DEFINE('_EXTCAL_AUTHOR_URL', 'Forfatters URL');
    DEFINE('_EXTCAL_PUBLISHED', 'Publisert');

    //Plugins
    DEFINE('_EXTCAL_THEME_PLUGIN', 'Mal');
    DEFINE('_EXTCAL_THEME_PLUGCOM', 'Mal/Kommando');
    DEFINE('_EXTCAL_THEME_NAME', 'Navn');
    DEFINE('_EXTCAL_THEME_HEADING', 'JCal Pro maladministrasjon');
    DEFINE('_EXTCAL_THEME_FILTER', 'Filter');
    DEFINE('_EXTCAL_THEME_ACCESS_LIST', 'Tilgangsliste');
    DEFINE('_EXTCAL_THEME_ACCESS_LVL', 'Tilgangsnivå');
    DEFINE('_EXTCAL_THEME_CORE', 'Kjerne');
    DEFINE('_EXTCAL_THEME_DEFAULT', 'Standard');
    DEFINE('_EXTCAL_THEME_ORDER', 'Sortering');
    DEFINE('_EXTCAL_THEME_ROW', 'Rad');
    DEFINE('_EXTCAL_THEME_TYPE', 'Type');
    DEFINE('_EXTCAL_THEME_ICON', 'Ikon');
    DEFINE('_EXTCAL_THEME_LAYOUT_ICON', 'Utseendeikon');
    DEFINE('_EXTCAL_THEME_DESC', 'Beskrivelse');
    DEFINE('_EXTCAL_THEME_EDIT', 'Rediger');
    DEFINE('_EXTCAL_THEME_NEW', 'Ny');
    DEFINE('_EXTCAL_THEME_DETAILS', 'Plugindetaljer');
    DEFINE('_EXTCAL_THEME_PARAMS', 'Parametre');
    DEFINE('_EXTCAL_THEME_ELMS', 'Elementer');
    //Plugin Installer
    DEFINE('_EXTCAL_THEMES_INSTALL_MSG', 'Kun de maler som kan avinstalleres vises - Kjernemalen kan ikke fjernes.');
    DEFINE('_EXTCAL_THEME_NONE', 'Det er ingen maler annet enn kjernemalen, installert');

    //Language Manager
    DEFINE('_EXTCAL_LANG_HEADING', 'EXTCAL språkadministrator');
    DEFINE('_EXTCAL_LANG_LANG', 'Språk');

    //Language Installer
    DEFINE('_EXTCAL_LANG_HEADING_INSTALL', 'Legg til EXTCAL språk');
    DEFINE('_EXTCAL_LANG_BACK', 'Tilbake til språkadministrator');
    //

    //Global Installer
    DEFINE('_EXTCAL_INS_PACKAGE_UPLOAD', 'Last opp pakkefil');
    DEFINE('_EXTCAL_INS_PACKAGE_FILE', 'Pakkefil');
    DEFINE('_EXTCAL_INS_INSTALL', 'Installer fra mappe');
    DEFINE('_EXTCAL_INS_INSTALL_DIR', 'Installasjonsmappe');
    DEFINE('_EXTCAL_INS_UPLOAD_BUTTON', 'Last opp og installer');
    DEFINE('_EXTCAL_INS_INSTALL_BUTTON', 'Installer');
  }
