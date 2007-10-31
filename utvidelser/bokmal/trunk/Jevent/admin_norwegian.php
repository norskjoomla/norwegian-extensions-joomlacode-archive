<?php
/**
 * Events Component for Joomla 1.0.x
 *
 * @version     $Id: admin_norwegian.php 844 2007-10-30 10:34:31Z gusse500 $
 * @package     Events
 * @author      Karl-Gustav Freding
 * @copyright  (C) Norwegian Translation Project
 * @licence     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link        http://oversettelser.joomlainorge.no/
 */


defined( '_VALID_MOS' ) or die( 'No Direct Access' );

//Check
if( defined( '_CAL_ADMIN_LANG_INCLUDED' )) {
	return;
}

DEFINE( '_CAL_ADMIN_LANG_INCLUDED', 1 );

/* +++++++++++++++++++ */
define( '_CAL_HIDE_OLD_EVENTS',			'Skjul tidligere hendelser'); // NEW 1.4
define( '_CAL_LANG_CATEGORIES',   		'Kategorier' );
define( '_CAL_LANG_DISPLAY',			'Vis' );
define( '_CAL_LANG_CATEGORY_NAME',		'Kategorinavn' );
define( '_CAL_LANG_RECORDS',			'av&nbsp;oppf�ringer' );
define( '_CAL_LANG_CHECKED_OUT',		'Sjekket&nbsp;ut' );
define( '_CAL_LANG_PUBLISHED',			'Publisert' );
define( '_CAL_LANG_NOT_PUBLISHED',		'Ikke publisert' );
define( '_CAL_LANG_ACCESS',				'Tilgang' );
define( '_CAL_LANG_REORDER',			'Omorganiser' );
define( '_CAL_LANG_UNPUBLISH',			'Upublisert' );
define( '_CAL_LANG_PUBLISH',			'Publiser' );
define( '_CAL_LANG_CLICK_TO_EDIT',		'Klikk for � forandre' );
define( '_CAL_LANG_MOVE_UP',			'Flytt opp' );
define( '_CAL_LANG_MOVE_DOWN',			'Flytt ned' );
define( '_CAL_LANG_EDIT_CAT',			'Forandre kategori' );
define( '_CAL_LANG_ADD_CAT',			'Legg til kategori' );
define( '_CAL_LANG_CAT_TITLE',			'Tittel p� kategori' );
define( '_CAL_LANG_CAT_NAME',			'Navn p� kategori' );
define( '_CAL_LANG_IMAGE',				'Bilde' );
define( '_CAL_LANG_PREVIEW',			'Forh�ndsvis' );
define( '_CAL_LANG_IMG_POSITION',		'Bildeposisjon' );
define( '_CAL_LANG_ORDERING',			'Rekkef�lge' );
define( '_CAL_LANG_LEFT',				'Venstre' );
define( '_CAL_LANG_CENTER',				'Senter' );
define( '_CAL_LANG_RIGHT',				'H�yre' );
define( '_CAL_LANG_SELECT_IMAGE',		'Velg bilde' );
define( '_CAL_LANG_SEARCH',				'S�k' );
define( '_CAL_LANG_TITLE',				'Tittel' );
define( '_CAL_LANG_REPEAT',				'Gjentakelse' );
define( '_CAL_LANG_TIME_SHEET',			'Tidsskjema' );
define( '_CAL_CLICK_TO_CHANGE_STATUS',	'Klikk p� ikonet for � forandre status' );
define( '_CAL_LANG_PUB_BUT_COMING',		'Publisert og <u>kommer</u>' );
define( '_CAL_LANG_PUB_ACTUAL',			'Publisert og er <u>n�</u>' );
define( '_CAL_LANG_PUB_FINISHED',		'Publisert og har <u>v�rt</u>' );
define( '_CAL_LANG_EDIT_EVENT',			'Forandre hendelse' );
define( '_CAL_LANG_ADD_EVENT',			'Legg til hendelse' );
define( '_CAL_LANG_REQUIRED',			'obligatorisk' );
define( '_CAL_LANG_IMG_FOLDER',			'Undermappe' );
define( '_CAL_LANG_IMAGES',				'Galleribilder' );
define( '_CAL_LANG_AVAL_IMAGES',		'Tilgjengelige bilder' );
define( '_CAL_LANG_INSERT_IMG',			'Legg til &raquo;' );
define( '_CAL_LANG_CONTENT_IMGS',		'Innhold bilder' );
define( '_CAL_LANG_REMOVE',				'ta bort' );
define( '_CAL_LANG_EDITED_SEL_IMG',		'Forandre p� valgte bilde' );
define( '_CAL_LANG_SOURCE',				'Kilde' );
define( '_CAL_LANG_ALIGN',				'Juster' );
define( '_CAL_LANG_ALT_TXT',			'Alternativ tekst' );
define( '_CAL_LANG_BORDER',				'Rammebredde' );
define( '_CAL_LANG_CAPTION',			'Bildetekst');
define( '_CAL_LANG_CAPTION_POSITION',	'Posisjon til bildetekst');
define( '_CAL_LANG_CAPTION_POS_BOTTOM',	'Bunn');
define( '_CAL_LANG_CAPTION_POS_TOP',	'Topp');
define( '_CAL_LANG_CAPTION_ALIGN',		'Justering for bildetekst');
define( '_CAL_LANG_CAPTION_WIDTH',		'Bredde p� bildetekst');
define( '_CAL_LANG_APPLY',				'Legg til' );
define( '_CAL_LANG_ADD_INFO',			'Tilleggsinformasjon' );
define( '_CAL_LANG_EVENT_STATUS',		'Status for hendelse' );
define( '_CAL_LANG_ARCHIVED',			'Arkivert' );
define( '_CAL_LANG_DRAFT_UNPUB',		'Kladd, upublisert' );
define( '_CAL_LANG_NEVER',				'Aldri' );
define( '_CAL_LANG_CUT_TITLE',			'Tittellengde' );
define( '_CAL_LANG_MAX_DISPLAY',		'Maks hendelser' );
define( '_CAL_LANG_DIS_STARTTIME',		'Vis starttid' );

	// config
define( '_CAL_LANG_EVENTS_CONFIG',		'JEvents konfigurering' );
define( '_CAL_LANG_CONFIG_WRITEABLE',	'Konfigureringsfilen kan skrives til' );
define( '_CAL_LANG_CONFIG_NOT_WRITEABLE','Konfigureringsfilen kan ikke skrives til' );
define( '_CAL_LANG_CSS_WRITEABLE',		'CSS filen kan skrives til' );
define( '_CAL_LANG_CSS_NOT_WRITEABLE',	'CSS filen kan ikke skrives til' );
define( '_CAL_LANG_ADMIN_EMAIL',		'E-post til systemadministrator' );
define( '_CAL_LANG_FRONTEND_PUBLISHING','Publiser fra sidene til nettstedet' );
define( '_CAL_LANG_SETT_FOR_COM',		'Disse valgene er bare for komponenten' );
define( '_CAL_LANG_SETT_FOR_CAL_MOD',	'Disse valgene er bare for kalender modulen' );
define( '_CAL_LANG_SETT_FOR_MOD_LATEST','Disse valgene er bare for tillegget [ Latest Events ]' );
define( '_CAL_LANG_ICONIC_NAVBAR'		,'Bruk den nye navigasjonslinjen'); // 1.4
define( '_CAL_LANG_CHECK_VERSION'		,"Sjekk for nyere versjon"); // 1.4

// errors
define( '_CAL_LANG_ERR_CAT_MUST_HAVE_NAME',	'Kategorien m� ha et navn' );

// title & alts
define( '_CAL_LANG_TIT_NAME_FOR_MENUS',	'Et kort navn som vises i menyene' );
define( '_CAL_LANG_TIT_LONG_NAME',		'Et langt navn som vises i overskriftene' );
define( '_CAL_LANG_TIT_PENDING',		'Ventende' );

// msgs
define( '_CAL_LANG_MSG_CAT_IS_EDITED',	'Kategorien [ %s ] blir for tiden brukt av en systemadministrator' ); // %s = $row->title
define( '_CAL_LANG_MSG_OP_FAILED',		'Operasjonen mislykkes: Kunne ikke �pne [ %s ]' ); // %s = $filename
define( '_CAL_LANG_MSG_CHANGE_EMAIL',	'G� f�rst til hendelseskonfigurering og forandre e-postadressen' );
define( '_CAL_LANG_MSG_ADD_CAT_BEFORE',	'Du m� velge en kategori for denne seksjonen' );
define( '_CAL_LANG_MSG_CONFIG_SAVED',	'Konfigurasjon er lagret' );
define( '_CAL_LANG_MSG_WARNING',		'Advarsel...' );
define( '_CAL_LANG_MSG_CHMOD_CONFIG',	'Du m� forandre rettighetene til 0777 p� konfigurasjonsfilen for � kunne lagre' );
define( '_CAL_LANG_MSG_CHMOD_CSS',		'Du m� forandre rettighetene til 0777 p� css filen for � kunne lagre' );
define( '_CAL_LANG_MSG_MOD_NOT_INSTALLED','Kalendermodulen er ikke istallert' );
define( '_CAL_LANG_MSG_NO_MOD_LATEST',	'Modulen [ latest events ] er ikke installert' );

// tips
define( '_CAL_LANG_TIP_ACCESS',			'Hvem som kan lage nye hendelser' );
define( '_CAL_LANG_TIP_FRONT_PUB',		'Hvem som kan publisere fra forsiden' );
define( '_CAL_LANG_TIP_NR_OF_LIST',		'Antall hendelser som skal vises pr. side for uke, m�ned eller �rs-visning' );
define( '_CAL_LANG_TIP_FE_SIMPLE_FORM',	'Bruk forenklet(d.v.s. ingen repeterende ) hendelsesinnlegg for forsidepublisering' );
define( '_CAL_LANG_TIP_DEF_EC_HIDE_FORCE',	'<b>Kategorifarge tillatt</b><br/>Skribenter og administratorer kan bruke spesifikke farger for hendelser<br/><b>Kategorifarge bare tillatt i administrasjonssystemet</b><br/>Bare administrasjonssystemet kan spesifisere hendelsesfarger<br/><b>Alltid bruk kategorifarger</b><br/>Skribenter kan ikke bruke spesifikke farger for hendelser. Spesifikke farger definert f�r vil bli ignorert og kategorifarge vil bli brukt' );
define( '_CAL_LANG_TIP_DLM_STOP_DAY',		'Dag i m�neden for � stoppe visning av forrige m�ned' );
define( '_CAL_LANG_TIP_DNM_START_DAY',		'Dager igjen i m�neden for � starte visning av neste m�ned' );
define( '_CAL_LANG_TIP_LEV_DAY_RANGE',		'Antall dager relativt til dagen for � vise hendelser(bare modus 1 og 3)' );
define( '_CAL_LANG_TIP_LEV_DISPLAY_YEAR',	'Viser �r i hendelsen\\\s dato (bare standardformat)' );
define( '_CAL_LANG_TIP_BTN_DEF_CONFIG',		'Henter standardverdier [hvis noe gikk galt]' );
define( '_CAL_LANG_TIP_LEV_DISPLAY_MODE',	'0 (standard) viser n�rmeste hendelser for aktuell uke og neste uke. Bare maks antall hendelser<br />1 samme som [ modus = 0 ] noen hendelser som har v�rt i aktuell uke vil vises n�r antall hendelser er mindre enn maks antall<br />2 viser n�rmeste hendelse for [ + dager ] rangert relativt til aktuell dag opp til $maxEvents<br />3  samme som modus 2 unntatt n�r det er mindre enn maks antall hendelser i intervallet da vises hendelser som har v�rt [ - days ] relativt til aktuell dag<br />4 viser n�rmeste hendelse for aktuell m�ned opp til maks antall hendelser relativt til aktuell dag' );
define( '_CAL_LANG_TIP_CUT_TITLE',			'Hvis en tittel har for mange tegn, kan resultatet bli et u�nsket design.<br />Definer her x tegn. Etter antall tegn vil tittelen bli kuttet og ... bli lagt til' );
define( '_CAL_LANG_TIP_LEV_HIDE_LINK',		'Satt til JA, vil lenken settes dynamisk av et javascript &lt;b&gt;onclick&lt;/b&gt; hendelse. Dette forhindrer s�kemotorer � f�lge linken');
define( '_CAL_LANG_TIP_MAX_DISPLAY',		'Maks antall hendelser vist <strong>som tekst</strong> pr. dag i m�nedsvisning<br />For mange hendelser pr. dag kan �delegge utseende.<br />Definer her hvor mange hendelser som skal vises som tekst, for mange vil vises som ikoner (tipsvinduet vil ikke bli ber�rt)<br /><strong>Tips</strong>: Sett verdien til 0 [null], vil tvinge visningen av alle hendelsene som ikoner' );
define( '_CAL_LANG_TIP_DIS_STARTTIME',		'Skal starttiden vises [ month view ]' );
	// tooltips
define( '_CAL_LANG_TIP_TT_BGROUND',			'Skal tipsvinduet bruke sammme bakgrunn som hendelsen<br />velg nei for � bruke standardfarge' );
define( '_CAL_LANG_TIP_TT_POSX',			'Posisjonen til tipsvinduet kan v�re venstre, senter eller h�yre' );
define( '_CAL_LANG_TIP_TT_POSY',			'Vertikal posisjon til tipsvinduet kan v�re under eller over' );
define( '_CAL_LANG_TIP_TT_SHADOW',			'Tipsvinduet kan ha en skygge som settes venstre eller h�yre, under eller over' );

// tabs
define( '_CAL_LANG_TAB_COMMON',			'Vanlig' );
define( '_CAL_LANG_TAB_IMAGES',			'Bilder' );
define( '_CAL_LANG_TAB_CALENDAR',		'Kalender' );
define( '_CAL_LANG_TAB_HELP',			'Hjelp' );
define( '_CAL_LANG_TAB_EXTRA',			'Ekstra' );
define( '_CAL_LANG_TAB_ABOUT',			'Om' );
define( '_CAL_LANG_TAB_COMPONENT',		'Komponent' );
define( '_CAL_LANG_TAB_CAL_MOD',		'Kalender' );
define( '_CAL_LANG_TAB_LATEST_MOD',		'Siste hendelse' );
define( '_CAL_LANG_TAB_CSS',			'CSS' );
define( '_CAL_LANG_TAB_TOOLTIP',		'Tipsvindu' );

// select lists
	//common
define( '_CAL_LANG_YES',				'Ja' );
define( '_CAL_LANG_NO',					'Nei' );
define( '_CAL_LANG_ALWAYS',				'ALLTID' );
	// access
define( '_CAL_LANG_SEL_ACCESS_ALL_REGGED',	'Alle registrerte brukere' );
define( '_CAL_LANG_SEL_ACCESS_SPECIAL',		'Bare spesialrettigheter og systemadministratorer' );
define( '_CAL_LANG_SEL_ACCESS_ALL_ANONYM',	'Alle (anonyme) - ikke anbefalt' );
define( '_CAL_LANG_SEL_ACCESS_ALL_AUTHORS',	'Forfatter og over' );
define( '_CAL_LANG_SEL_ACCESS_ALL_EDITORS',	'Skribent (kan redigere) og over' );
define( '_CAL_LANG_SEL_ACCESS_ALL_PUBLISHERS',	'Skribent (kan publisere) og over' );
define( '_CAL_LANG_SEL_ACCESS_ALL_MANAGERS',	'Innholdsadministratorere og over' );
define( '_CAL_LANG_SEL_ACCESS_ALL_ADMIN',	'Bare systemadministratorer og superadministratorer' );
	// first day
define( '_CAL_LANG_FIRST_DAY',			'F�rste dag' );
define( '_CAL_LANG_SUNDAY_FIRST',		'S�ndag f�rst' );
define( '_CAL_LANG_MONDAY_FIRST',		'Mandag f�rst' );

define( '_CAL_LANG_VIEW_MAIL',			'Vis e-post' );
define( '_CAL_LANG_VIEW_BY',			'Vis "Av"' );
define( '_CAL_LANG_VIEW_HITS',			'Vis "Treff"' );
define( '_CAL_LANG_VIEW_REPEAT_TIME',	'Vis repetisjoner og tid' );
define( '_CAL_LANG_VIEW_REPEAT_YEAR_LIST',	'Vis alle repeterende hendelser i �rslisting' );
define( '_CAL_LANG_SHOW_CATS',			'Skjul "Vis etter kategori (vises bare hvis events legend module er synlig)' );
define( '_CAL_LANG_SHOW_COPYRIGHT',		'Vis Copyright Footer');
	// date format
define( '_CAL_LANG_DATE_FORMAT',		'Datoformat' );
define( '_CAL_LANG_DATE_FORMAT_FR_EN',	'Fransk-Engelsk' );
define( '_CAL_LANG_DATE_FORMAT_US',		'US' );
define( '_CAL_LANG_DATE_FORMAT_GERMAN',	'Kontinental - tysk' );

define( '_CAL_LANG_TIME_FORMAT_12',		'Bruk 12 timers format' );
	// nav bar
define( '_CAL_LANG_NAV_BAR_COLOR',		'Farge for navigasjonslinjen' );
define( '_CAL_LANG_NAV_BAR_GREEN',		'Gr�nn' );
define( '_CAL_LANG_NAV_BAR_ORANGE',		'Oransje' );
define( '_CAL_LANG_NAV_BAR_BLUE',		'Bl�' );
define( '_CAL_LANG_NAV_BAR_RED',		'R�d' );
define( '_CAL_LANG_NAV_BAR_GRAY',		'Gr�' );
define( '_CAL_LANG_NAV_BAR_YELLOW',		'Gul' );

	// start page
define( '_CAL_LANG_START_PAGE',			'Startside' );
define( '_CAL_LANG_SP_DAY',				'Dag' );
define( '_CAL_LANG_SP_WEEK',			'Uke' );
define( '_CAL_LANG_SP_MONTH_CAL',		'M�ned (Kalender)' );
define( '_CAL_LANG_SP_MONTH_LIST',		'M�ned (Liste)' );
define( '_CAL_LANG_SP_YEAR',			'�r' );
define( '_CAL_LANG_SP_CATEGORIES',		'Kategorier' );
define( '_CAL_LANG_SP_SEARCH',			'S�k' );

define( '_CAL_LANG_NR_OF_LIST',			'Antall hendelser' );
define( '_CAL_LANG_FE_SIMPLE_FORM',		'Bruk enkel' );
	// event color
define( '_CAL_LANG_DEF_EVENT_COLOR',	'Standard kategorifarge' );
define( '_CAL_LANG_DEF_EC_RANDOM',		'Tilfeldig' );
define( '_CAL_LANG_DEF_EC_NONE',		'Ingen' );
define( '_CAL_LANG_DEF_EC_CATEGORY',	'Kategori' );
define( '_CAL_LANG_DEF_EC_HIDE_FORCE',	'Regel for kategorifarge' );
define( '_CAL_LANG_EVENT_COLS_ALLOWED',	'Kategorifarge tillatt' );
define( '_CAL_LANG_EVENT_COLS_BACKED',	'Kategorifarge tillatt bare i administrasjonssystemet' );
define( '_CAL_LANG_ALWAYS_CAT_COLOR',	'Alltid bruk kategorifarger' );

	// tooltips
define( '_CAL_LANG_ABOVE',				'Over' );
define( '_CAL_LANG_BELOW',				'Under' );

// calendar module
	// display last month
define( '_CAL_LANG_DISPLAY_LAST_MONTH',	'Vis siste m�ned' );
define( '_CAL_LANG_DLM_YES_STOP_DAY',	'JA - med stoppdag' );
define( '_CAL_LANG_DLM_YES_EVENT_SDAY',	'JA - hvis det er hendelser OG med stoppdag' );
define( '_CAL_LANG_DLM_ALWYS_IF_EVENTS','ALLTID - hvis det er hendelser' );
	// stop day
define( '_CAL_LANG_DLM_STOP_DAY',		'Dag i m�neden for � stoppe' );
	// display next month
define( '_CAL_LANG_DISPLAY_NEXT_MONTH',	'Vis neste m�ned' );
define( '_CAL_LANG_DNM_YES_START_DAY',	'JA - med startdag' );
define( '_CAL_LANG_DNM_YES_EVENT_SDAY', 'Ja - hvis det er hendelser OG med startdag' );
define( '_CAL_LANG_DNM_ALWYS_IF_EVENTS','ALLTID - hvis det er hendelser' );
	// start day
define( '_CAL_LANG_DNM_START_DAY',		'Dager igjen i m�neden for � starte' );

// latest events module
define( '_CAL_LANG_LEV_MAX_DISPLAY',	'Maks antall hendelser � vise' );
define( '_CAL_LANG_LEV_DISPLAY_MODE',	'Visningsmodus' );
define( '_CAL_LANG_LEV_DAY_RANGE',		'Dager f�r-etter' );
define( '_CAL_LANG_LEV_REP_EV_ONCE',	'Bare vis en repeterende hendelse en gang' );
define( '_CAL_LANG_LEV_EV_AS_LINK',		'Vis hendelser som lenke' );
define( '_CAL_LANG_LEV_DISPLAY_YEAR',	'Vis �r' );
define( '_CAL_LANG_LEV_CSS_DATE_FIELD',	'Ikke bruk standard CSS Date Field Style' );
define( '_CAL_LANG_LEV_CSS_TITLE_FIELD','Ikke bruk standard CSS Title Field Style' );
define( '_CAL_LANG_LEV_HIDE_LINK',		'Skjul lenke til tittel');
define( '_CAL_LANG_LEV_CUST_FORM_STRING','Tilpasset formateringsstreng' );

// tooltips frontpage (overlib)
define( '_CAL_LANG_TOOLTIP',			'Valg bare for tipsvinduet i m�nedsvisning' );
define( '_CAL_LANG_TT_MAINWINDOW',		'Hovedtipsvindu' );
define( '_CAL_LANG_TT_BGROUND',			'Samme bakgrunn som hendelser' );
define( '_CAL_LANG_TT_POSX',			'Horisontal posisjon' );
define( '_CAL_LANG_TT_POSY',			'Vertikal Posisjon' );
define( '_CAL_LANG_TT_SHADOW',			'Skygge' );
define( '_CAL_LANG_TT_SHADOWX',			'Venstre' );
define( '_CAL_LANG_TT_SHADOWY',			'Over' );

// buttons
define( '_CAL_LANG_BTN_DEF_CONFIG',		'Tilbakestill til standard' );

// installation
define( '_CAL_LANG_INSTAL_MAIN',		'Hendelser' );
define( '_CAL_LANG_INSTAL_MANAGE',		'Behandle hendelser' );
define( '_CAL_LANG_INSTAL_CATS',		'Behandle kategorier' );
define( '_CAL_LANG_INSTAL_CONFIG',		'Konfigurering' );
define( '_CAL_LANG_INSTAL_ARCHIVE',		'Arkiv' );
define( '_CAL_LANG_INSTAL_ERROR',		'F�lgende feil oppstod' );
define( '_CAL_LANG_INSTAL_SUCCESS',		'Events er installert uten feil' );
define( '_CAL_LANG_INSTALL_DB_ENTRIES',	'Database, forandringer' );
define( '_CAL_LANG_INSTALL_PREV_INST',	'Dobble Databaseinnlegg er fjernet' );

DEFINE("_CAL_LANG_EVENT_ALLDAY","Hendelser hele dagen eller uspesifisert tid");  // new for 1.4


?>

