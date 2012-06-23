<?php
/**
* /language/norwegian.php
* * * ElearningForce DK
* * * Translation : Knut Carlsen (knut.carlsen@joocom.no)
**/

// no direct access
defined( '_VALID_MOS' ) or die( 'Restricted access' );
global $mosConfig_live_site;
//locale
if( (substr(PHP_OS, 0, 3) == 'WIN') ) {
	// For windows server see locale here: 
	// http://msdn.microsoft.com/library/default.asp?url=/library/en-us/vclib/html/_crt_language_strings.asp
	setlocale (LC_TIME, 'norwegian');// set norwegian locale, change second constant('norwegian') according your language

} else {
	// See this link for details: 
	// http://en.wikipedia.org/wiki/Locale
	setlocale (LC_TIME, 'nb_NO');// set norwegian locale, change second constant('nb_NO') according your language
}
define( '_RB_EMAIL_SUBJECT',       	 "Du har reservert et rom"); 
define( '_RB_EMAIL_MSG1',       	 "Du har plassert en ordre for et rom (reservasjon) med følgende valg:"); 
// $mosConfig_live_site is a constant for your site
define( '_RB_EMAIL_MSG2',       	 "Dersom noe er feil besøk $mosConfig_live_site for å rette dette eller slette ordren."); 

define( '_RB_SCREEN_MSG',			 "Ordren din er bekreftet.  En epost med ordreinformasjonen har blitt sendt deg.");

define( '_RB_NEW_BOOKING',       	 'Ny reservasjon'); 
define( '_RB_BUILDINGS_ROOMS',       'Bygninger og rom'); 
define( '_RB_MY_BOOKINGS',       	 'Mine reservasjoner'); 
define( '_RB_REPORT',       		 'Rapport'); 
define( '_RB_EDIT_BOOKING',       	 'Rediger reservasjon'); 
define( '_RB_SHORT_DESCRIPTION',     'Kort beskrivelse'); 
define( '_RB_LONG_DESCRIPTION',      'Lang beskrivelse'); 
define( '_RB_DATE',       			 'Dato'); 
define( '_RB_PERIODS',       		 'Perioder'); 
define( '_RB_TIME',       		 	 'Tid');
define( '_RB_PERIOD',       		 'Periode'); 
define( '_RB_BUILDING',       		 'Bygning'); 
define( '_RB_ROOM',       			 'Rom'); 
define( '_RB_TYPE',       	         'Type'); 
define( '_RB_IMPORTANCE',       	 'Prioritet'); 
define( '_RB_CLASS',       			 'Klasse'); 
define( '_RB_RECURRING',       		 'Repeterende'); 
define( '_RB_RECURRING_END',       	 'Repetisjon slutter'); 
define( '_RB_RECURRING_START',       'Repetisjon starter'); 
define( '_RB_USERNAME',       		 'Brukernavn'); 
define( '_RB_SELECT_DAY_OF_WEEK',    'Velg dag i uken'); 
define( '_RB_ENTER_NUMBER_OF_WEEKS', 'Registrer antall uker'); 
define( '_RB_ENTER_SHORT_DESCR',	 'Registrer en kort beskrivelse.'); 
define( '_RB_ENTER_DIFFRENT_TIME',	 'Registrer korrekt tid.'); 
define( '_RB_ENTER_LONG_DESCR',		 'Registrer en lang beskrivelse.'); 
define( '_RB_ENTER_BOOKING_DATE',	 'Registrer reservasjonsdato.'); 
define( '_RB_ENTER_START_OR_END_DATE', 'Registrer start- eller sluttdato.');
define( '_RB_SELECT_BUILDING',		 'Velg bygning.'); 
define( '_RB_SELECT_ROOM',		     'Velg rom.'); 
define( '_RB_SELECT_BOOKING_TYPE',	 'Velg reservasjonstype.'); 
define( '_RB_SELECT_IMPORTANCE',	 'Velg prioritet.'); 
define( '_RB_SELECT_CLASS',			 'Velg klasse.'); 
define( '_RB_ENTER_SEARCH_DATE',	 'Registrer dato for søk.');
define( '_RB_ENTER_END_DATE',		 'Registrer sluttdato.'); 
define( '_RB_WRONG_BOOKING_DATE_F',	 'Feil datoformat for reservasjonen.');
define( '_RB_WRONG_START_DATE_F',	 'Feil format for startdato.');  
define( '_RB_WRONG_END_DATE_F',		 'Feil format for sluttdato.'); 
define( '_RB_DATE_FORMAT',			 'Feil datoformat.');
define( '_RB_WRONG_END_DATE',		 'Feil sluttdato.'); 
define( '_RB_WRONG_BOOKING_DATE_DATE', 'Feil reservasjonsdato.');
define( '_RB_BOOKING_COLLIDES', 	 'OBS! Din forespørsel om reservasjon kolliderer med en annen reservasjon med følgende info' );

define( '_RB_TODAY', 				 'Idag');

define( '_RB_SHOW_DAILY', 			 'Vis daglige reservasjoner');
define( '_RB_BOOKING_INFO_FOR', 	 'Reservasjonsinfo for');
define( '_RB_NO_BOOKINGS', 			 'Ingen reservasjoner for');
define( '_RB_SEARCH_RESULTS', 		 'Søkeresultat');
define( '_RB_STAFF_MEMBER_NAME', 	 'Navn på ansatte');
define( '_RB_START_DATE', 			 'Startdato');
define( '_RB_END_DATE', 			 'Sluttdato');
define( '_RB_SHORT_MUST_CONTAIN', 	 'Kort beskrivelse <br/> må inneholde tekst');
define( '_RB_LONG_MUST_CONTAIN', 	 'Lang beskrivelse <br/> må inneholde tekst');
define( '_RB_SORT_BY', 				 'Sorter etter');
define( '_RB_SHOW_IN_REPORT', 		 'Vis i rapport');
define( '_RB_ALL_INFO', 			 'All info.');
define( '_RB_SHOW_BOOKINGS', 		 'Vis reservasjoner');
define( '_RB_ARE_YOU_SURE_DELETE',   'Ønsker du å slette denne reservasjonen?');
define( '_RB_CORRECT_YOUR_CHOICES',  'Korriger valgene dine');
define( '_RB_TO_GO_CLICK_ON_ROW', 	 'For å gå til den kolliderende reservasjonen, klikk på en rad.');
define( '_RB_APPLY_CHANGES_TO_QUEST', 'Bruk endringene på bare denne eller også alle repeterende reservasjoner?');
define( '_RB_APPLY_ONLY_THIS', 		 'Bruk for bare denne');
define( '_RB_APPLY_ANY_RECURRING',   'Bruk for alle repeterende');
define( '_RB_CANCEL', 				 'Avbryt');
define( '_RB_DELETE_ANY_RECURRING',  'Slett alle repeterende');
define( '_RB_DELETE_ONLY_THIS', 	 'Slett bare denne');
define( '_RB_DELETE_ALL', 	 		 'Slett alle');
define( '_RB_ONLY_DELETE_QUESTION',  'Slette bare denne reservasjonen eller også alle repeterende?');
define( '_RB_BOOKING_INFO', 		 'Reservasjonsinfo.');
define( '_RB_REPORT_SEARCH_RESULT',  'Søkeresultat for rapport');
define( '_RB_TO_PDF', 				 'PDF');
define( '_RB_TO_CSV', 				 'CSV');
define( '_RB_PRINT', 				 'Utskrift');
define( '_RB_BOOKINGS_FOUND', 		 'reservasjoner funnet');
define( '_RB_SAVE_BOOKING', 		 'Lagre reservasjon');
define( '_RB_SAVE_CHANGES', 		 'Lagre endringer');
define( '_RB_DELETE_BOOKING', 		 'Slett reservasjon');
define( '_RB_SEARCH_BOOKING', 		 'Søk etter reservasjon');
define( '_RB_ROOM_BOOKER_TITLE', 	 'Romreservasjoner'); 
define( '_RB_BOOKING', 				 'Reservasjon'); 
define( '_RB_CHOOSE_DATE', 			 'Velg dato '); 
define( '_RB_GO_DATE', 				 'Gå til dato'); 
define( '_RB_WEEKLY_VIEW_FOR_ROOM',  'Vis ukentlig visning for valgt rom');
define( '_RB_PREV_WEEK',  'Forrige uke');
define( '_RB_NEXT_WEEK',  'Neste uke');
define( '_RB_GOTO_WEEK',  'Gå til uke for valgt dato');

define( '_RB_NO_BOOKINGS_FOUND',  'Ingen reservasjoner funnet');

define( '_RB_ALL_BUSY_COLOR',  'ffff50');

define( '_RB_SELECT_ALL',  'Velg alle');

define( '_RB_WARNING', 'Warning: If you delete booking for this day your whole recurring booking will be separated and will be considered as two separate recurring bookings. Please confirm if you want to separate your booking.');

define('_RB_JANUARY', 'Januar');
define('_RB_FEBRUARY', 'Februar');
define('_RB_MARCH', 'Mars');
define('_RB_APRIL', 'April');
define('_RB_MAY', 'Mai');
define('_RB_JUNE', 'Juni');
define('_RB_JULY', 'Juli');
define('_RB_AUGUST', 'August');
define('_RB_SEPTEMBER', 'September');
define('_RB_OCTOBER', 'Oktober');
define('_RB_NOVEMBER', 'November');
define('_RB_DECEMBER', 'Desember');

define('_RB_MONDAY', 'Mandag');
define('_RB_TUESDAY', 'Tirsdag');
define('_RB_WEDNESDAY', 'Onsdag');
define('_RB_THURSDAY', 'Torsdag');
define('_RB_FRIDAY', 'Fredag');
define('_RB_SATURDAY', 'Lørdag');
define('_RB_SANDAY', 'Søndag');

define('_RB_MON', 'Man');
define('_RB_TUE', 'Tir');
define('_RB_WED', 'Ons');
define('_RB_THU', 'Tor');
define('_RB_FRI', 'Fre');
define('_RB_SAT', 'Lør');
define('_RB_SAN', 'Søn');

define('_RB_YEAR', 'År');

define('_RB_ALL_ROOMS', 'Alle rom');
define('_RB_ALL_USERS', 'Alle brukere');

define('_RB_MONTHLY', 'Månedsvisning');
define('_RB_WEEKLY', 'Ukentlig visning');
define('_RB_START_TIME', 'Starttid');
define('_RB_END_TIME', 'Sluttid');

define('_RB_RK_NONE', 'Ingen');
define('_RB_RK_DAILY', 'Daglig');
define('_RB_RK_WEEKLY', 'Ukentlig');
define('_RB_RK_MONTHLY', 'Månedlig');
define('_RB_RK_MONTHLY_SD', 'Samme dag månedlig');
define('_RB_RK_MONTHLY_SWD', 'Samme uke og dag månedlig');
define('_RB_RK_FOR_X_WEEKS', 'For X uker');
?>
