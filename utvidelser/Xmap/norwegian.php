<?php 
/**
 * $Id: norwegian.php  root $
 * $LastChangedDate:  $
 * $LastChangedBy: root $
 * Xmap by Guillermo Vargas
 * A sitemap component for Joomla! CMS (http://www.joomla.org)
 * Author Website: http://joomla.vargas.co.cr
 * Project License: GNU/GPL http://www.gnu.org/copyleft/gpl.html
*/

defined( '_JEXEC' ) or die( 'Direct Access to this location is not allowed.' );

if( !defined( 'JOOMAP_LANG' )) {
	define('JOOMAP_LANG', 1 );
	// -- General ------------------------------------------------------------------
	define('_XMAP_CFG_OPTIONS',			'Vis valgmuligheter');
	define('_XMAP_CFG_CSS_CLASSNAME',		'Navn på CSS klasse');
	define('_XMAP_CFG_EXPAND_CATEGORIES',	'Utfold innholdskategorier');
	define('_XMAP_CFG_EXPAND_SECTIONS',	'Utfold innholdsseksjoner');
	define('_XMAP_CFG_SHOW_MENU_TITLES',	'Vis menytitler');
	define('_XMAP_CFG_NUMBER_COLUMNS',	'Antall kolonner');
	define('_XMAP_EX_LINK',				'Merk eksterne lenker');
	define('_XMAP_CFG_CLICK_HERE', 		'Klikk her');
	define('_XMAP_CFG_GOOGLE_MAP',		'Google Sidekart');
	define('_XMAP_EXCLUDE_MENU',			'Eksluder meny id nummer');
	define('_XMAP_TAB_DISPLAY',			'Vis');
	define('_XMAP_TAB_MENUS',				'Menyer');
	define('_XMAP_CFG_WRITEABLE',			'Skrivbar');
	define('_XMAP_CFG_UNWRITEABLE',		'Skrivebeskyttet');
	define('_XMAP_MSG_MAKE_UNWRITEABLE',	'Gjøre skrivebeskyttet etter lagring');
	define('_XMAP_MSG_OVERRIDE_WRITE_PROTECTION', 'Ignorer skrivebeskyttelse ved lagring');
	define('_XMAP_GOOGLE_LINK',			'Google lenke');
	define('_XMAP_CFG_INCLUDE_LINK',		'Inkluder lenke til forfatter');

	// -- Tips ---------------------------------------------------------------------
	define('_XMAP_EXCLUDE_MENU_TIP',		'Spesifiser meny id numre du IKKE vil ha med i sitemap, <br /><strong>MERK</strong><br />Separer id nummer med komma!');

	// -- Menus --------------------------------------------------------------------
	define('_XMAP_CFG_SET_ORDER',			'Sett visnings orden for menyer');
	define('_XMAP_CFG_MENU_SHOW',			'Vis');
	define('_XMAP_CFG_MENU_REORDER',		'Ordne på ny');
	define('_XMAP_CFG_MENU_ORDER',		'Sortere');
	define('_XMAP_CFG_MENU_NAME',			'Menynavn');
	define('_XMAP_CFG_DISABLE',			'Klikk for å slå av');
	define('_XMAP_CFG_ENABLE',			'Klikk for å slå på');
	define('_XMAP_SHOW',					'Vis');
	define('_XMAP_NO_SHOW',				'Ikke vis');

	// -- Toolbar ------------------------------------------------------------------
	define('_XMAP_TOOLBAR_SAVE', 			'Lagre');
	define('_XMAP_TOOLBAR_CANCEL', 			'Avbryt');

	// -- Errors -------------------------------------------------------------------
	define('_XMAP_ERR_NO_LANG',			'Språkfil [ %s ] ikke funnet, lastet standard språk: engelsk<br />');
	define('_XMAP_ERR_CONF_SAVE',         'FEIL: kunne ikke lagre konfigurasjonen');
	define('_XMAP_ERR_NO_CREATE',         'FEIL: kunne ikke lage tabell innstillinger');
	define('_XMAP_ERR_NO_DEFAULT_SET',    'FEIL: kunne ikke legge inn standard innstillinger');
	define('_XMAP_ERR_NO_PREV_BU',        'ADVARSEL: kunne ikke droppe den forrige backupen');
	define('_XMAP_ERR_NO_BACKUP',         'FEIL: kunne ikke lage backup');
	define('_XMAP_ERR_NO_DROP_DB',        'FEIL: kunne ikke droppe settings tabellen');
	define('_XMAP_ERR_NO_SETTINGS',		'FEIL: kunne ikke laste inn innstillinger fra database: <a href="%s">Lag tabell innstillinger</a>');

	// -- Config -------------------------------------------------------------------
	define('_XMAP_MSG_SET_RESTORED',      'Innstillinger gjenskapt');
	define('_XMAP_MSG_SET_BACKEDUP',      'Innstillinger lagret');
	define('_XMAP_MSG_SET_DB_CREATED',    'Tabell innstillinger opprettet');
	define('_XMAP_MSG_SET_DEF_INSERT',    'Standard innstillinger lastet inn');
	define('_XMAP_MSG_SET_DB_DROPPED','Xmap\'s tabeller har blitt lagret!');
	
	// -- CSS ----------------------------------------------------------------------
	define('_XMAP_CSS',					'Xmap CSS');
	define('_XMAP_CSS_EDIT',				'Rediger malen'); // Edit template
	
	// -- Sitemap (Frontend) -------------------------------------------------------
	define('_XMAP_SHOW_AS_EXTERN_ALT',	'Lenke vil åpne i nytt vindu');
	
	// -- Added for Xmap 
	define('_XMAP_CFG_MENU_SHOW_HTML',		'Vist på nettsted sitemap');
	define('_XMAP_CFG_MENU_SHOW_XML',		'Vist på XML sitemap');
	define('_XMAP_CFG_MENU_PRIORITY',		'Prioritet');
	define('_XMAP_CFG_MENU_CHANGEFREQ',		'Forandre hyppighet (frekvens)');
	define('_XMAP_CFG_CHANGEFREQ_ALWAYS',		'Alltid');
	define('_XMAP_CFG_CHANGEFREQ_HOURLY',		'Hver time');
	define('_XMAP_CFG_CHANGEFREQ_DAILY',		'Daglig');
	define('_XMAP_CFG_CHANGEFREQ_WEEKLY',		'Ukentlig');
	define('_XMAP_CFG_CHANGEFREQ_MONTHLY',		'Månedlig');
	define('_XMAP_CFG_CHANGEFREQ_YEARLY',		'årlig');
	define('_XMAP_CFG_CHANGEFREQ_NEVER',		'Aldri');

	define('_XMAP_TIT_SETTINGS_OF',			'Preferanser for %s');
	define('_XMAP_TAB_SITEMAPS',			'Sidekart');
	define('_XMAP_MSG_NO_SITEMAPS',			'Det er ikke laget noe sidekart ennå');
	define('_XMAP_MSG_NO_SITEMAP',			'Dette sidekartet er ikke tilgjengelig');
	define('_XMAP_MSG_LOADING_SETTINGS',		'Laster inn preferanser...');
	define('_XMAP_MSG_ERROR_LOADING_SITEMAP',		'FEIL. Kan ikke laste inn sidekartet');
	define('_XMAP_MSG_ERROR_SAVE_PROPERTY',		'FEIL. Kan ikke lagre sidekartets attributter.');
	define('_XMAP_MSG_ERROR_CLEAN_CACHE',		'FEIL. Kan ikke rense sidekartets cache');
	define('_XMAP_ERROR_DELETE_DEFAULT',		'Kan ikke slette standard (default) sidekartet!');
	define('_XMAP_MSG_CACHE_CLEANED',			'Hurtiglager er renset!');
	define('_XMAP_CHARSET',				'UTF-8');
	define('_XMAP_SITEMAP_ID',				'Sidekartets ID nummer');
	define('_XMAP_ADD_SITEMAP',				'Legg til sidekart');
	define('_XMAP_NAME_NEW_SITEMAP',			'Nytt sidekart');
	define('_XMAP_DELETE_SITEMAP',			'Slett');
	define('_XMAP_SETTINGS_SITEMAP',			'Preferanser');
	define('_XMAP_COPY_SITEMAP',			'Kopier');
	define('_XMAP_SITEMAP_SET_DEFAULT',			'Sett som standard');
	define('_XMAP_EDIT_MENU',				'Valgmuligheter');
	define('_XMAP_DELETE_MENU',				'Slett');
	define('_XMAP_CLEAR_CACHE',				'Tøm hurtiglager');
	define('_XMAP_MOVEUP_MENU',		'Opp');
	define('_XMAP_MOVEDOWN_MENU',	'Ned');
	define('_XMAP_ADD_MENU',		'Legg til menyer');
	define('_XMAP_COPY_OF',		'Kopi av %s');
	define('_XMAP_INFO_LAST_VISIT',	'Siste besøk');
	define('_XMAP_INFO_COUNT_VIEWS',	'Antall besøk');
	define('_XMAP_INFO_TOTAL_LINKS',	'Antall lenker');
	define('_XMAP_CFG_URLS',		'Sidekartets nettadresse');
	define('_XMAP_XML_LINK_TIP',	'Kopier denne lenken og gi til Google og Yahoo');
	define('_XMAP_HTML_LINK_TIP',	'Dette er sidekartets nettadresse.');
	define('_XMAP_CFG_XML_MAP',		'XML Sidekart');
	define('_XMAP_CFG_HTML_MAP',	'HTML Sidekart');
	define('_XMAP_XML_LINK',		'Google lenke');
	define('_XMAP_CFG_XML_MAP_TIP',	'XML filen som er generert for søkemotorer');
	define('_XMAP_ADD', 'Lagre');
	define('_XMAP_CANCEL', 'Avbryt');
	define('_XMAP_LOADING', 'Laster inn...');
	define('_XMAP_CACHE', 'Hurtiglager');
	define('_XMAP_USE_CACHE', 'Bruk hurtiglager');
	define('_XMAP_CACHE_LIFE_TIME', 'Tid i hurtiglagret');
	define('_XMAP_NEVER_VISITED', 'Aldri');
	
	// New on Xmap 1.1 beta 1
	define('_XMAP_PLUGINS','Programtillegg (plugins)');	
	define( '_XMAP_INSTALL_3PD_WARN', 'Advarsel: å installere utvidelser kan potensielt kompromittere sikkerheten på din Joomla installasjon' );
	define('_XMAP_INSTALL_NEW_PLUGIN', 'Installer nye programtillegg');
	define('_XMAP_UNKNOWN_AUTHOR','Ukjent forfatter');
	define('_XMAP_PLUGIN_VERSION','Versjon %s');
	define('_XMAP_TAB_INSTALL_PLUGIN','Installer');
	define('_XMAP_TAB_EXTENSIONS','Utvidelser');
	define('_XMAP_TAB_INSTALLED_EXTENSIONS','Installerte utvidelser');
	define('_XMAP_NO_PLUGINS_INSTALLED','Ingen custom programtillegg installert');
	define('_XMAP_AUTHOR','Forfatter');
	define('_XMAP_CONFIRM_DELETE_SITEMAP','Er du sikker at du vil slette dette sidekartet?');
	define('_XMAP_CONFIRM_UNINSTALL_PLUGIN','Er du sikker du vil avinstallere dette programtillegget?');
	define('_XMAP_UNINSTALL','Avinstaller');
	define('_XMAP_EXT_PUBLISHED','Publisert');
	define('_XMAP_EXT_UNPUBLISHED','Avpublisert');
	define('_XMAP_PLUGIN_OPTIONS','Valgmuligheter');
	define('_XMAP_EXT_INSTALLED_MSG','Uvidelsen ble installert, vennligst sjekk utvidelsens settinger og publiser den.');
	define('_XMAP_CONTINUE','Fortsett');
	define('_XMAP_MSG_EXCLUDE_CSS_SITEMAP','Ikke inkluder CSS innen sidekartet');
	define('_XMAP_MSG_EXCLUDE_XSL_SITEMAP','Bruk klassisk XML sidekart visningsmåte');

	// New on Xmap 1.1
	define('_XMAP_MSG_SELECT_FOLDER','Vennligst velg en mappe');
	define('_XMAP_UPLOAD_PKG_FILE','Last opp pakkefilen');
	define('_XMAP_UPLOAD_AND_INSTALL','Last opp fil &amp; installer');
	define('_XMAP_INSTALL_F_DIRECTORY','Installer fra mappe');
	define('_XMAP_INSTALL_DIRECTORY','Installasjonsmappe');
	define('_XMAP_INSTALL','Installer');
	define('_XMAP_WRITEABLE','Skrivbar');
	define('_XMAP_UNWRITEABLE','Skrivebeskyttet');

	// New on Xmap 1.2
	define('_XMAP_COMPRESSION','Kompresjon');
	define('_XMAP_USE_COMPRESSION','Komprimer XML sidekart for å spare båndbredde');

	// New on Xmap 1.2.1
	define('_XMAP_CFG_NEWS_MAP',		'Sidekart nyheter');
	define('_XMAP_NEWS_LINK_TIP',   'Dette er nettadressen til sidekart for nyheter.');

    // New on Xmap 1.2.2
    define('_XMAP_CFG_MENU_MODULE',            'Modul');
    define('_XMAP_CFG_MENU_MODULE_TIP',            'Angi modulen du bruker til å vise denne menyen på nettstedet ditt (Standard: mod_mainmenu).');

	// New on Xmap 1.2.3
    define('_XMAP_TEXT',            'Lenke tekst');
	define('_XMAP_TITLE',            'Lenke tittel');
	define('_XMAP_LINK',            'Nettadresse');
	define('_XMAP_CSS_STYLE',            'CSS stil');
	define('_XMAP_CSS_CLASS',            'CSS klasse');
	define('_XMAP_INVALID_SITEMAP',            'Ugyldig sidekart');
	define('_XMAP_OK', 'Ok');

        // New on Xmap 1.2.10
        define('_XMAP_CFG_IMAGES_MAP','Bilder sidekart');
}