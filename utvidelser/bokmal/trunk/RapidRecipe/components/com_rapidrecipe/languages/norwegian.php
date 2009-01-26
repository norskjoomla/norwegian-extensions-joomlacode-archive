<?php
/**
 * $Id$
 * 
 * <p>Norwegian language file.</p>
 * 
 * @subpackage languages
 * @copyright (C) 2005 Konstantinos Kokkorogiannis All Rights Reserved
 * @copyright Translation (C) 2007-2008 Rune Rasmussen - www.syntaxerror.no
 * @author Konstantinos (koyan) Kokkorogiannis <koyan@dianthos.net>
 * @version 0.1
 */

/**#@+
 * LANGUAGE MESSAGES FOR DEMOS
 */
define('_RR_RECIPES', 'Oppskrifter'); 
 
// Recipe Display
define('_RR_CREATED_BY', 'Lagt inn av'); 
define('_RR_INTRO_HEADING', 'Beskrivelse'); 
define('_RR_INGREDIENTS', 'Ingredienser'); 
define('_RR_STEPS', 'Fremgangsmåte'); 
define('_RR_COMMENT_TITLE', 'Ekstra tips og informasjon'); 
define('_RR_REVIEWS', 'Omtaler');
define('_RR_RATE', 'Gi din vurdering');
define('_RR_MAKES', 'Mengde');
define('_RR_SERVES', 'Porsjoner');
define('_RR_USER_RATING', 'Gjennomsnittlig brukervurdering');
define('_RR_USERS_VOTED', 'Antall brukerstemmer');
define('_RR_NOT_AVAILABLE', 'Beklager, oppskriften er ikke tilgjengelig.');
define('_RR_PRINTER_FRIENDLY_PAGE_TITLE', 'Oppskrift fra nettsiden ' . $mainframe->getCfg('sitename'));
define('_RR_PRINTING_FOOTER', 'Oppskrift skrevet ut fra nettsiden ' . $mainframe->getCfg('sitename') . ' - ' . $mainframe->getCfg('live_site'));
define('_RR_ONLY_REGISTERED', 'Bare registrerte brukere kan se fremgangsmåte for denne oppskriften');
define('_RR_USER_RECIPES', 'Oppskriftene til brukeren ');
	
// INFO
define('_RR_INFOMAINTITLE', 'Oversikt / Stikkord');

// Favourites
define('_RR_ADDED_TO_FAVOURITES', 'Oppskriften ble lagt til dine favoritter');
define('_RR_YOU_HAVE_TO_REGISTER_FOR_FAVOURITES', 'Du må være registrert og innlogget for å kunne lagre og se egne favoritter.');
define('_RR_NO_FAVOURITES_FOR_USER', 'Du har ingen oppskrifter som favoritter');
define('_RR_REMOVE_FROM_FAVOURITES', 'Fjern fra favoritter');
define('_RR_REMOVED_FROM_FAVOURITES', 'Oppskriften ble fjernet fra dine favoritter');

//Listings
define('_RR_ALLRECIPES', 'Oppskrifter fra alle underkategorier');
define('_RR_LISTING', 'Underkategorier og oppskrifter');
define('_RR_SUBCATEGORIES', 'Underkategorier');
define('_RR_CATEGORIES', 'Kategorier');
define('_RR_FAVOURITES_INTRO', 'Her kan du se de oppskrifter du har sendt inn, eller som du har satt som dine favoritter.');

//Featured
define('_RR_FEATURED_RECIPE_RANDOM_EACH_TIME', 'Din lykkeoppskrift');
define('_RR_FEATURED_RECIPE_RANDOM_EACH_DAY', 'Dagens oppskrift');
define('_RR_FEATURED_RECIPE_RANDOM_EACH_WEEK', 'Ukens oppskrift');
define('_RR_FEATURED_RECIPE_MANUAL', 'Utvalgt oppskrift');

//Search Recipes
define('_RR_SEARCH_RECIPES', 'Søk etter oppskrifter');
define('_RR_SEARCH_TITLE_ALPHA', 'Søk etter tittel, alfabetisk.');
define('_RR_SEARCH_BY_CATEGORIES', 'Velg kategorier for kombinert oppskrift-søk');
define('_RR_SEARCH_RESULTS', 'Søkeresultat');
define('_RR_SEARCH_NO_RESULTS', 'Det finnes ingen oppskrifter med de kriterier som du spesifiserte.');
define('_RR_SEARCH_NO_CRITERIA', 'Du må spesifisere noen kriterier for ditt søk');
define('_RR_SEARCH_YOUR_CRITERIA', 'Du søkte etter oppskrifter med følgende kriterier:');


// Recipes Menu
define('_RR_FAVOURITES', 'Mine favoritter'); 
define('_RR_ADD_TO_FAVOURITES', 'Lagre som favoritt'); 
define('_RR_EMAIL_RECIPE', 'Send i e-post');
define('_RR_PRINT_RECIPE', 'Skriv ut');
define('_RR_EMAIL_MSG','Dette er en e-post fra (%s), sendt av %s (%s). Du vil kunne finne følgende lenke av interesse: %s');


// Add Edit Recipe
define('_RR_ADD_RECIPE', 'Legg til oppskrift');
define('_RR_EDIT_RECIPE', 'Rediger oppskrift');
define('_RR_ADD_INTRO', 'Når du har sendt inn en oppskrift vil den bli vurdert og eventuelt godkjent av vår oppskriftadministrator, administratoren vil forsikre seg om at du ikke bruker upassende innhold for våre besøkende. Så snart den er gjennomsett og godkjent kan du stikke innom for å legge den til din oppskriftboks, og dele den med dine venner.');
define('_RR_ADD_TITLE', 'Fyll inn en passende tittel for oppskriften');
define('_RR_ADD_UPLOAD', 'Last opp et bilde til oppskriften');
define('_RR_ADD_DESCRIPTION', 'Fyll inn en beskrivelse for oppskriften');
define('_RR_ADD_INGREDIENTS', 'Fyll inn ingrediensene for oppskriften. <br> Forsøk å være så tydelig som mulig, f.eks. "1 kopp finmalt og siktet hvetemel"');
define('_RR_ADD_STEPS', 'Fyll inn fremgangsmåte for oppskriften, du kan gjerne tydeliggjøre stegene ved å legget til "1)- " foran hvert steg.');
define('_RR_ADD_COMMENT', 'Ekstra tips og informasjon, her kan du legge inn ekstra tips eller informasjon som du tror kan være nyttig for de som skal bruke oppskriften. Et eksempel kan være tips om hvilke produkter og ingredienser som er brukt, og også om den passer for allergikere (eks. uten egg, laktoseredusert, glutenfri) eller sukkersyke.');
define('_RR_ADD_PORTIONS', 'Her kan du angi opplysninger om oppskriftens mengde. F.eks hvor mange personer den rekker til, eller hvor mange enheter (stk.) den gir.');
define('_RR_ADD_SUBMIT', 'Send inn oppskriften');
define('_RR_ADD_NOTITLE', 'Du må fylle inn en tittel for oppskriften');
define('_RR_ADD_NOINGREDIENTS', 'Du må fylle inn ingredienser for oppskriften');
define('_RR_ADD_NOSTEPS', 'Du må fylle inn fremgangsmåte for oppskriften');
define('_RR_EDIT_NOWRITES', 'Du kan ikke redigere denne oppskriften. Den er enten lagt til av en annen bruker, eller den er allerede godkjent av en administrator.');
define('_RR_ADDEDIT_SUCCESS', 'Oppskriften ble vellykket lagret, du kan se på den ved å klikke på følgende lenke.');
define('_RR_ADD_HAVE_TO_LOGIN', 'Du må være registrert og innlogget for å kunne legge til (foreslå) oppskrifter.');

// Rate Recipe
define('_RR_YOU_HAVE_TO_REGISTER_TO_VOTE', 'Du må være registrert for å vurdere'); 
define('_RR_ALLREADY_VOTED', 'Du har allerede vurdert denne oppskriften');  
define('_RR_REVIEWS_TITLE', 'Kommenter og vurder denne oppskriften'); 
define('_RR_REVIEWS_INSTRUCTIONS', 'Du kan vurdere denne oppskriften ved å gi den en, to, tre eller fire gafler - som vil bli lagt til gjennomsnitt for alle stemmer. Du kan også gi en kommentar, positiv eller negativ, tips eller tillegg/merknader, i tekstfeltet.'); 
define('_RR_RATE_THIS_RECIPE', 'Vurder denne oppskriften');
define('_RR_REVIEWS_INSTRUCTIONS_AFTER_VOTES', "En gaffel: Liker den ikke.<br> To gafler: Liker den, men ikke mer enn det.<br> Tre gafler: Nydelig. <br>Fire gafler: Blant de beste.<br>");
define('_RR_REVIEW_THIS_RECIPE', 'Fullfør din vurdering ved å fylle inn dine kommentarer for oppskriften her, husk å være konstruktiv og sivilisert. Takk!');
define('_RR_SUBMIT_REVIEW', 'Send inn vurdering');
define('_RR_REVIEWS_YOU_NEED_TO_VOTE', 'Du må vurdering før omtalen kan lagres');
define('_RR_THANKS_FOR_VOTING', 'Takk for din vurdering og omtale');
define('_RR_COMMENT_BY', 'Omtalt av');
define('_RR_REVIEWS_YOU_NEED_TO_REVIEW', 'Du må gi omtale før vurdering kan lagres');
define('_RR_REVIEWS_YOU_NEED_TO_VOTE_AND_REVIEW', 'Du må vurdere og gi omtale før du kan lagre');


//Email Send
define('_RR_EMAIL_FROM_WEBSITE', 'Fra nettside'); 
define('_RR_EMAIL_ADMIN_SUBJECT', 'En ny oppskrift er lagt til på nettsiden, denne venter nå på godkjenning.'); 
define('_RR_EMAIL_USER_SUBJECT', 'Takk for at du deler din oppskrift'); 
define('_RR_EMAIL_USER_BODY', 'Din oppskrift har blitt lagret og avventer nå godkjenning. Vår administrator er blitt varslet. Du kan se oppskriften din på følgende adresse:'); 
define('_RR_EMAIL_ADMIN_COMMENT_SUBJECT', 'Ny vurdering/omtale');
define('_RR_EMAIL_ADMIN_COMMENT_BODY', 'En vurdering er akkurat gitt for oppskriften:');
define('_RR_EMAIL_SEND', 'Din e-post har blitt sendt');

//Administration: Menu
define('_RR_MENU_CATEGORY_MANAGER', 'Kategorier'); 
define('_RR_MENU_RECIPES_ADMINISTRATION', 'Oppskrifter'); 
define('_RR_MENU_GENERAL_CONFIGURATION', 'Konfigurasjon');
define('_RR_MENU_LANG_MANAGER', 'Språkfiler');


//Administration: Edit Language File
define('_RR_LANG_WARNING', '	Vær oppmerksom når du redigerer språkfiler. 
				<br>Ikke fjern noen eksisterende enkle eller doble gåseøyne 
				( ' . "'" . ' or " ), og ikke legg til noen selv ed mindre du vet hva du gjør.
				 <br>Om du gjør noen feil vil det kunne resultere i at filen ikke virker, og du vil få 
				feil på applikasjonen'); 
define('_RR_LANG_EDITOR', 'Rapid Recipe språkbehandling');
define('_RR_HEAD_LANG_MANAGER', 'Rapid Recipes språkfilbehandling');
define('_RR_HEAD_LANG_NAME', 'Språkfilnavn');
define('_RR_LANGFILE_WARNING', 'Vi kunne ikke åpne filen.
			<br>Du kan forsøke laste den ned med en ftp-klient, for å redigere manuelt.<br>
			Sti til filen er:');

//Administration: Trash Manager
define('_RR_TRASH_MANAGER', 'Papirkurv');
define('_RR_TRASH_REC_NAME', 'Oppskriftnavn');
define('_RR_TRASH_NO_TRASH', 'Det er ingen oppskrifter i papirkurven din');


//Administration: Configuration
define('_RR_CONF_REC',              'Konfigurasjon');
define('_RR_CONF_ADM',              'Administrator (bruker som mottar e-postmeldinger): ');
define('_RR_CONF_IMAGE_WIDTH',      'Oppskriftbilde - bredde: ');
define('_RR_CONF_STEP_IMAGE_WIDTH', 'Stegbilde - bredde:');
define('_RR_CONF_AUTHOR_APPEAR',    'Author name appears in info box (if you answer no, it will appear under the name of the recipe): ');
define('_RR_CONF_NAVIGATION', 'Navigation Module In Recipe Display Page:');
define('_RR_CONF_BACKBUTTON', 'Back Button: ');
define('_CMN_USE_GLOBAL', 'Use Global');
define('_RR_CONF_CAT_IMAGE_WIDTH', 'Category Listing Image Width: ');
define('_RR_CONF_CAT_LOGO', 'In categories page, do you want the site logo to appear always (the category image will appear if you select "No"): ');
define('_RR_CONF_PAGES', 'The category pages top image width ');
define('_RR_CONF_NR_REC', 'Number Of Recipes Per Category Page');
define('_RR_CONF_NAV_POSITION', 'Navigation Module In Category Page:  ');
define('_RR_CONF_LOGO_IMAGE', 'Logo Image (selects an image from the directory ');
define('_RR_CONF_VOTES', 'Votes');
define('_RR_CONF_VOTE_NR', 'Number of Maximum Votes:  ');
define('_RR_CONF_VOTE_IMAGE', 'Votes Image: ');
define('_RR_CONF_FEATURED', 'Featured');
define('_RR_CONF_FEATURE_HOME', 'Featured Recipe Module In First Page: ');
define('_RR_CONF_FEATURE_WAY', 'Featured Recipe Selection Way: ');
define('_RR_CONF_FEATURE_TYPE_RANDOM', 'Random at each request of page ');
define('_RR_CONF_FEATURE_TYPE_DAY', 'Random, changing once per day     ');
define('_RR_CONF_FEATURE_TYPE_WEEK', 'Random, changing once per week     ');
define('_RR_CONF_FEATURE_TYPE_MANUAL', 'Manually (set by administrator)     ');
define('_RR_CONF_HIDE_FROM_UNREGISTERED', 'Hide instructions from unregistered users');
define('_RR_USER_GROUP', 'Group allowed to see the recipe');

//Administration: Recipes
define('_RR_RECIPE', 'Oppskrift');
define('_RR_RECIPE_DETAILS', 'Detaljer');
define('_RR_RECIPE_TITLE', 'Tittel:');
define('_RR_RECIPE_YIELD', 'Du kan her angi hvor mange porsjoner, eller mengde, oppskriften gir:');
define('_RR_DESCRIPTION', 'Beskrivelse:');
define('_RR_RECIPE_COMMENT', 'Ekstra tips og informasjon:');
define('_RR_RECIPE_IMAGE', 'Bilde:');
define('_RR_RECIPE_MANAGER', 'Oppskrifter');
define('_RR_RECIPE_RECORD', ' oppføringer');
define('_RR_SHOW_ALL', 'Vis alle');
define('_RR_SHOW_UNPUBLISHED', 'Vis bare upubliserte');
define('_RR_FEATURE_RECIPE', 'Utvalgt');
define('_RR_RECIPE_ID', 'ID');
define('_RR_SEARCH_CATEGORY', 'Søk etter kategori');
define('_RR_SELECT_CATEGORY', 'Velg kategori for oppskriften');

//Administration: Comments
define('_RR_COMMENT_TEXT', 'Kommentartekst');
define('_RR_USER_REVIEW', 'Brukeromtale:');


//Administration: Steps
define('_RR_STEP_DESCRIPTION', 'Stegbeskrivelse');
define('_RR_STEP_ID', 'Steg-Id');
define('_RR_NEW_ORDERING', 'ny sortering er ');
define('_RR_STEP_ADDED', 'Steg er lagt til i databasen');
define('_RR_RECIPE_STEP', 'Oppskriftsteg:');
define('_RR_STEP_DETAILS', 'Stegdetaljer');
define('_RR_STEP_IMAGE', 'Stegbilde:');


//Administration: Categories
define('_RR_CATEGORY_MANAGER', 'Kategorier');
define('_RR_CAT_TOPLEVEL', '- Toppnivå -');
define('_RR_CAT_FRONTPAGE', '- Forside -');
define('_RR_CATEGORY_NAME', 'Navn');
define('_RR_CATEGORY_ID', 'ID');
define('_RR_CATEGORY_TREE', 'Kategoritre');
define('_RR_RECIPE_CATEGORY', 'Kategori:');
define('_RR_CATEGORY_DETAILS', 'Detaljer:');
define('_RR_CATEGORY_TITLE', 'Tittel:');
define('_RR_PARENT_CATEGORY', 'Overordnet kategori:');
define('_RR_CAT_NAV_APPEAR', 'Vises i navigasjonsmodul:');
define('_RR_CAT_GLANCE_APPEAR', 'Vises i Oversikt / Stikkord-boks:');
define('_RR_CAT_HOME_APPEAR', 'Vises på oppskrift-forsiden:');
define('_RR_CATEGORY_IMAGE', 'Bilde:');
define('_RR_CAT_FEATURED_APPEAR', 'Vises i utvalgte:');


//Administration: General Messages
define('_RR_CHANGES_COMMITED', 'Dine endringer har blitt lagret ');
define('_RR_SELECT_TITLE', 'Du må fylle inn en tittel');
define('_RR_SELECT_DESCRIPTION', 'Du må fylle inn en beskrivelse');
define('_RR_UPLOAD_EXISTING_FAILED', 'Opplasting <b>feilet</b>, filen finnes allerede.');
define('_RR_IMAGE_TYPES', 'Bare filer med endelse gif, png, jpg, pdf, swf, doc, xls eller ppt kan lastes opp');
define('_RR_UPLOAD_FAILED', 'Opplasting <b>feilet</b>');
define('_RR_CATEGORY', 'Kategori');
define('_RR_ADDED_DATABASE', 'lagret i database');
define('_RR_CANNOT_REMOVE', 'kan ikke slettes siden den inneholder underkategorier');
define('_RR_REMOVE_REVIEW', 'Omtalen ble fjernet');
define('_RR_REMOVE_STEP', 'Steget ble fjernet');
define('_RR_SELECT_IMAGE', 'Velg bilde fra mediabehandler');
define('_RR_UPLOAD_IMAGE', 'Eller last opp et nytt bilde');
define('_RR_IMAGE_SAVE_LOCATION', '(bildet vil bli lagret i mappen');
define('_RR_IMAGE_MAXSIZE', 'Maks størrelse = 16M ');


//Administration: buttons
define('_RR_UPLOAD_BUTTON', 'Last opp ');
define('_RR_CHOOSE_BUTTON', 'Velg');
define('_RR_NOIMAGE_BUTTON', 'Ikke bruk bilde');
define('_RR_PREVIEW_BUTTON', 'Forhåndsvisning');

/**#@-*/
?>
