<?php
/**
* @package Joomla
* @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// Den norske oversettelse av:
//  - Kai Røen (kai.roen@joomlacms.no)
//  - Willy Bergsnov (admin@motherocean.no)
//  - Jens-Christian Skibakk (jens.christian@start.no)

//no direct access
defined( '_VALID_MOS' ) or die( 'Begrenset tilgang' );

/** common */
DEFINE('_LANGUAGE','no');
DEFINE('_NOT_AUTH','Du er ikke autorisert til å se denne siden.');
DEFINE('_DO_LOGIN','Du må logge inn.');
DEFINE('_VALID_AZ09',"Vennligst oppgi et gyldig %s.  Ikke bruk mellomrom. Bruk mer enn %d tegn og tegnene 0-9,a-z,A-Z");
DEFINE('_CMN_YES','Ja');
DEFINE('_CMN_NO','Nei');
DEFINE('_CMN_SHOW','Vis');
DEFINE('_CMN_HIDE','Skjul');

DEFINE('_CMN_NAME','Navn');
DEFINE('_CMN_DESCRIPTION','Beskrivelse');
DEFINE('_CMN_SAVE','Lagre');
DEFINE('_CMN_CANCEL','Avbryt');
DEFINE('_CMN_PRINT','Skriv ut');
DEFINE('_CMN_PDF','PDF');
DEFINE('_CMN_EMAIL','E-post');
DEFINE('_ICON_SEP','|');
DEFINE('_CMN_PARENT','Eier');
DEFINE('_CMN_ORDERING','Rekkefølge');
DEFINE('_CMN_ACCESS','Adgangsnivå');
DEFINE('_CMN_SELECT','Velg');

DEFINE('_CMN_NEXT','Neste');
DEFINE('_CMN_NEXT_ARROW'," &gt;&gt;");
DEFINE('_CMN_PREV','Forrige');
DEFINE('_CMN_PREV_ARROW',"&lt;&lt; ");

DEFINE('_CMN_SORT_NONE','Ingen sortering');
DEFINE('_CMN_SORT_ASC','Stigende sortering');
DEFINE('_CMN_SORT_DESC','Synkende sortering');

DEFINE('_CMN_NEW','Ny');
DEFINE('_CMN_NONE','Ingen');
DEFINE('_CMN_LEFT','Venstre');
DEFINE('_CMN_RIGHT','Høyre');
DEFINE('_CMN_CENTER','Sentrert');
DEFINE('_CMN_ARCHIVE','Arkiver');
DEFINE('_CMN_UNARCHIVE','Omgjør arkiver');
DEFINE('_CMN_TOP','Start');
DEFINE('_CMN_BOTTOM','Slutt');

DEFINE('_CMN_PUBLISHED','Publisert');
DEFINE('_CMN_UNPUBLISHED','Ikke publisert');

DEFINE('_CMN_EDIT_HTML','Rediger HTML');
DEFINE('_CMN_EDIT_CSS','Rediger CSS');

DEFINE('_CMN_DELETE','Slett');

DEFINE('_CMN_FOLDER','Mappe');
DEFINE('_CMN_SUBFOLDER','Undermappe');
DEFINE('_CMN_OPTIONAL','Valgfritt');
DEFINE('_CMN_REQUIRED','Påkrevd');

DEFINE('_CMN_CONTINUE','Fortsett');

DEFINE('_CMN_NEW_ITEM_LAST','Nye artikler legges automatisk sist. Rekkefølgen kan endres etter at du har lagret.');
DEFINE('_CMN_NEW_ITEM_FIRST','Nye artikler legges automatisk først. Rekkefølgen kan endres etter lagring.');
DEFINE('_LOGIN_INCOMPLETE','Vennligst fyll ut felt for brukernavn og passord.');
DEFINE('_LOGIN_BLOCKED','Din innlogging har blitt blokkert. Vennligst kontakt administrator.');
DEFINE('_LOGIN_INCORRECT','Feil brukernavn eller passord. Vennligst prøv igjen.');
DEFINE('_LOGIN_NOADMINS','Du kan ikke logge inn. Det er ikke satt opp noen administrator.');
DEFINE('_CMN_JAVASCRIPT','Advarsel. Javascript må aktiveres for rett visning av sidene.');

DEFINE('_NEW_MESSAGE','En ny privat melding er mottatt');
DEFINE('_MESSAGE_FAILED','Brukeren har sperret postboksen. Meldingen ble ikke levert.');

DEFINE('_CMN_IFRAMES', 'Dette valget vil desverre ikke vises tilfredsstillende.  Nettleseren din støtter ikke inline-rammer');

DEFINE('_INSTALL_WARN','Av sikkerhetsårsaker må du slette hele innstallasjonsmappen med alle filer og undermapper. Deretter kan du oppdatere denne side på nytt i nettleseren din.');
DEFINE('_TEMPLATE_WARN','<font color=\"red\"><b>Malfilen ble ikke funnet!</b></font><br />Har du nylig forsøkt en oppgradering?<br />Hvis ja, så må du også oppgradere din database.<br />');
DEFINE('_NO_PARAMS','Det er ingen parametre for dette objektet');
DEFINE('_HANDLER','Behandler for denne typen er ikke definert');

/** mambots */
DEFINE('_TOC_JUMPTO','Artikkeloversikt');

/**  content */
DEFINE('_READ_MORE','Les mer…');
DEFINE('_READ_MORE_REGISTER','Registrer deg for å lese mer…');
DEFINE('_MORE','Mer…');
DEFINE('_ON_NEW_CONTENT', "Et nytt bidrag har blitt innsendt av [ %s ] med tittel [ %s ] fra seksjon [ %s ] og kategori [ %s ]" );
DEFINE('_SEL_CATEGORY','- Velg kategori -');
DEFINE('_SEL_SECTION','- Velg seksjon -');
DEFINE('_SEL_AUTHOR','- Velg forfatter -');
DEFINE('_SEL_POSITION','- Velg posisjon -');
DEFINE('_SEL_TYPE','- Velg type -');
DEFINE('_EMPTY_CATEGORY','Denne kategorien er for øyeblikket tom');
DEFINE('_EMPTY_BLOG','Det er ingen artikler som kan vises');
DEFINE('_NOT_EXIST','Siden du forsøker å nå eksisterer ikke.<br />Vennligst velg en side fra hovedmenyen.');

/** classes/html/modules.php */
DEFINE('_BUTTON_VOTE','Stem');
DEFINE('_BUTTON_RESULTS','Resultater');
DEFINE('_USERNAME','Brukernavn');
DEFINE('_LOST_PASSWORD','Glemt passord?');
DEFINE('_PASSWORD','Passord');
DEFINE('_BUTTON_LOGIN','Logg inn');
DEFINE('_BUTTON_LOGOUT','Logg ut');
DEFINE('_NO_ACCOUNT','Ingen konto?');
DEFINE('_CREATE_ACCOUNT','Opprett en');
DEFINE('_VOTE_POOR','Dårlig');
DEFINE('_VOTE_BEST','Best');
DEFINE('_USER_RATING','Brukerrangering');
DEFINE('_RATE_BUTTON','Rangér');
DEFINE('_REMEMBER_ME','Husk meg');

/** contact.php */
DEFINE('_ENQUIRY','Tilbakemelding');
DEFINE('_ENQUIRY_TEXT','Dette er en tilbakemelding via %s fra:');
DEFINE('_COPY_TEXT','Dette er en kopi av meldingen du sendte til %s via %s');
DEFINE('_COPY_SUBJECT','Kopi av: ');
DEFINE('_THANK_MESSAGE','Takk for din melding');
DEFINE('_CLOAKING','Denne e-postadressen er beskyttet mot programmer som samler e-postadresser. Du må aktivere javascript for å kunne se adressen.');
DEFINE('_CONTACT_HEADER_NAME','Navn');
DEFINE('_CONTACT_HEADER_POS','Stilling');
DEFINE('_CONTACT_HEADER_EMAIL','E-post');
DEFINE('_CONTACT_HEADER_PHONE','Telefon');
DEFINE('_CONTACT_HEADER_FAX','Faks');
DEFINE('_CONTACTS_DESC','Kontaktlisten for dette nettstedet.');

/** classes/html/contact.php */
DEFINE('_CONTACT_TITLE','Kontakt');
DEFINE('_EMAIL_DESCRIPTION','Send en melding til denne kontakten:');
DEFINE('_NAME_PROMPT',' Ditt navn:');
DEFINE('_EMAIL_PROMPT',' Din e-postadresse:');
DEFINE('_MESSAGE_PROMPT',' Melding:');
DEFINE('_SEND_BUTTON','Send');
DEFINE('_CONTACT_FORM_NC','Kontroller at skjemaet er komplett og korrekt utfylt.');
DEFINE('_CONTACT_TELEPHONE','Telefon: ');
DEFINE('_CONTACT_MOBILE','Mobil: ');
DEFINE('_CONTACT_FAX','Faks: ');
DEFINE('_CONTACT_EMAIL','E-post: ');
DEFINE('_CONTACT_NAME','Navn: ');
DEFINE('_CONTACT_POSITION','Stilling: ');
DEFINE('_CONTACT_ADDRESS','Adresse: ');
DEFINE('_CONTACT_MISC','Informasjon: ');
DEFINE('_CONTACT_SEL','Velg kontakt:');
DEFINE('_CONTACT_NONE','Ingen kontaktdetaljer oppført.');
DEFINE('_EMAIL_A_COPY','Send en kopi av denne meldingen til din egen e-postadresse');
DEFINE('_CONTACT_DOWNLOAD_AS','Last ned informasjonen som');
DEFINE('_VCARD','VCard');

/** pageNavigation */
DEFINE('_PN_LT','&lt;');
DEFINE('_PN_RT','&gt;');
DEFINE('_PN_PAGE','Side');
DEFINE('_PN_OF','av');
DEFINE('_PN_START','Start');
DEFINE('_PN_PREVIOUS','Forrige');
DEFINE('_PN_NEXT','Neste');
DEFINE('_PN_END','Siste');
DEFINE('_PN_DISPLAY_NR','Vis nr.');
DEFINE('_PN_RESULTS','Resultat');

/** emailfriend */
DEFINE('_EMAIL_TITLE','Send e-post til en venn');
DEFINE('_EMAIL_FRIEND','Send dette som e-post til en venn.');
DEFINE('_EMAIL_FRIEND_ADDR','Din venns e-postadresse:');
DEFINE('_EMAIL_YOUR_NAME','Ditt navn:');
DEFINE('_EMAIL_YOUR_MAIL','Din e-postadresse:');
DEFINE('_SUBJECT_PROMPT',' Emne:');
DEFINE('_BUTTON_SUBMIT_MAIL','Send e-post');
DEFINE('_BUTTON_CANCEL','Avbryt');
DEFINE('_EMAIL_ERR_NOINFO','Du må oppgi din gyldige e-postadresse, samt en gyldig e-postadresse til den du vil sende til.');
DEFINE('_EMAIL_MSG',' Den følgende siden fra nettstedet "%s" har blitt sendt til deg av %s ( %s ).

Du kan nå den fra følgende nettadresse:
%s');
DEFINE('_EMAIL_INFO','Siden sendt av');
DEFINE('_EMAIL_SENT','Denne siden er sendt til');
DEFINE('_PROMPT_CLOSE','Lukk vindu');

/** classes/html/content.php */
DEFINE('_AUTHOR_BY', ' Bidrag fra');
DEFINE('_WRITTEN_BY', ' Skrevet av');
DEFINE('_LAST_UPDATED', 'Sist oppdatert');
DEFINE('_BACK','[ Tilbake ]');
DEFINE('_LEGEND','Tegnforklaring');
DEFINE('_DATE','Dato');
DEFINE('_ORDER_DROPDOWN','Rekkefølge');
DEFINE('_HEADER_TITLE','Tittel');
DEFINE('_HEADER_AUTHOR','Forfatter');
DEFINE('_HEADER_SUBMITTED','Innsendt');
DEFINE('_HEADER_HITS','Treff');
DEFINE('_E_EDIT','Rediger');
DEFINE('_E_ADD','Legg til');
DEFINE('_E_WARNUSER','Vennligst lagre endringene eller avbryt');
DEFINE('_E_WARNTITLE','Du må oppgi en tittel');
DEFINE('_E_WARNTEXT','Du må ha en introduksjonstekst');
DEFINE('_E_WARNCAT','Velg en kategori');
DEFINE('_E_CONTENT','Innhold');
DEFINE('_E_TITLE','Tittel:');
DEFINE('_E_CATEGORY','Kategori:');
DEFINE('_E_INTRO','Introduksjonstekst');
DEFINE('_E_MAIN','Hovedtekst');
DEFINE('_E_MOSIMAGE','Sett inn {mosimage}');
DEFINE('_E_IMAGES','Bilder');
DEFINE('_E_GALLERY_IMAGES','Galleribilder');
DEFINE('_E_CONTENT_IMAGES','Innholdsbilder');
DEFINE('_E_EDIT_IMAGE','Rediger bilde');
DEFINE('_E_INSERT','Sett inn');
DEFINE('_E_UP','Opp');
DEFINE('_E_DOWN','Ned');
DEFINE('_E_REMOVE','Fjern');
DEFINE('_E_SOURCE','Kilde:');
DEFINE('_E_ALIGN','Plassering:');
DEFINE('_E_ALT','Alternativ tekst:');
DEFINE('_E_BORDER','Ramme:');
DEFINE('_E_CAPTION','Bildetekst');
DEFINE('_E_APPLY','Bruk');
DEFINE('_E_PUBLISHING','Publisering');
DEFINE('_E_STATE','Status:');
DEFINE('_E_AUTHOR_ALIAS','Forfatter-alias:');
DEFINE('_E_ACCESS_LEVEL','Adgangsnivå:');
DEFINE('_E_ORDERING','Rekkefølge:');
DEFINE('_E_START_PUB','Start publisering:');
DEFINE('_E_FINISH_PUB','Avslutt publisering:');
DEFINE('_E_SHOW_FP','Vis på forsiden:');
DEFINE('_E_HIDE_TITLE','Skjul tittel:');
DEFINE('_E_METADATA','Metadata');
DEFINE('_E_M_DESC','Beskrivelse:');
DEFINE('_E_M_KEY','Nøkkelord:');
DEFINE('_E_SUBJECT','Emne:');
DEFINE('_E_EXPIRES','Utløpsdato:');
DEFINE('_E_VERSION','Versjon:');
DEFINE('_E_ABOUT','Om');
DEFINE('_E_CREATED','Opprettet:');
DEFINE('_E_LAST_MOD','Sist endret:');
DEFINE('_E_HITS','Treff:');
DEFINE('_E_SAVE','Lagre');
DEFINE('_E_CANCEL','Avbryt');
DEFINE('_E_REGISTERED','Kun for registrerte brukere');
DEFINE('_E_ITEM_INFO','Informasjon');
DEFINE('_E_ITEM_SAVED','Lagringen var vellykket.');
DEFINE('_ITEM_PREVIOUS','&lt; Forrige');
DEFINE('_ITEM_NEXT','Neste &gt;');


/** content.php */
DEFINE('_SECTION_ARCHIVE_EMPTY','Det er for tiden ingen arkiverte artikler i denne seksjonen, vennligst kom tilbake senere');
DEFINE('_CATEGORY_ARCHIVE_EMPTY','Det er for tiden ingen arkiverte artikler i denne kategorien, vennligst kom tilbake senere');
DEFINE('_HEADER_SECTION_ARCHIVE','Seksjonsarkiv');
DEFINE('_HEADER_CATEGORY_ARCHIVE','Kategoriarkiv');
DEFINE('_ARCHIVE_SEARCH_FAILURE','Det er ingen arkiverte artikler for %s %s');	// values are month then year
DEFINE('_ARCHIVE_SEARCH_SUCCESS','Her er de arkiverte artiklene for %s %s');	// values are month then year
DEFINE('_FILTER','Filter');
DEFINE('_ORDER_DROPDOWN_DA','Dato stigende');
DEFINE('_ORDER_DROPDOWN_DD','Dato synkende');
DEFINE('_ORDER_DROPDOWN_TA','Tittel stigende');
DEFINE('_ORDER_DROPDOWN_TD','Tittel synkende');
DEFINE('_ORDER_DROPDOWN_HA','Treff stigende');
DEFINE('_ORDER_DROPDOWN_HD','Treff synkende');
DEFINE('_ORDER_DROPDOWN_AUA','Forfatter stigende');
DEFINE('_ORDER_DROPDOWN_AUD','Forfatter synkende');
DEFINE('_ORDER_DROPDOWN_O','Rekkefølge');

/** poll.php */
DEFINE('_ALERT_ENABLED','Informasjonskapsler må være aktivert.');
DEFINE('_ALREADY_VOTE','Du har allerede stemt på denne spørreundersøkelsen i dag.');
DEFINE('_NO_SELECTION','Du har ikke valgt et alternativ. Vennligst prøv igjen');
DEFINE('_THANKS','Takk for din stemme.');
DEFINE('_SELECT_POLL','Velg spørreundersøkelse fra listen');

/** classes/html/poll.php */
DEFINE('_JAN','januar');
DEFINE('_FEB','februar');
DEFINE('_MAR','mars');
DEFINE('_APR','april');
DEFINE('_MAY','mai');
DEFINE('_JUN','juni');
DEFINE('_JUL','juli');
DEFINE('_AUG','august');
DEFINE('_SEP','september');
DEFINE('_OCT','oktober');
DEFINE('_NOV','november');
DEFINE('_DEC','desember');
DEFINE('_POLL_TITLE','Spørreundersøkelse – Resultater');
DEFINE('_SURVEY_TITLE','Tittel på spørreunderskelsen:');
DEFINE('_NUM_VOTERS','Antall stemmer');
DEFINE('_FIRST_VOTE','Første stemme');
DEFINE('_LAST_VOTE','Siste stemme');
DEFINE('_SEL_POLL','Velg spørreundersøkelse:');
DEFINE('_NO_RESULTS','Ingen resultater for denne spørreundersøkelsen.');

/** registration.php */
DEFINE('_ERROR_PASS','Beklager, ingen tilsvarende bruker ble funnet');
DEFINE('_NEWPASS_MSG','Brukerkontoen $checkusername er tilknyttet denne e-postadressen.\n'
.'En bruker ved $mosConfig_live_site har bedt om å få tilsendt nytt passord.\n\n'
.' Ditt nye passord er: $newpass\n\nIkke bli bekymret dersom du ikke har bedt om dette.'
.' Du ser denne beskjeden, ikke andre. Hvis dette var en feil, logg inn med ditt'
.' nye passord og deretter endre det.');
DEFINE('_NEWPASS_SUB','$_sitename :: Nytt passord for - $checkusername');
DEFINE('_NEWPASS_SENT','Nytt passord opprettet og sendt.');
DEFINE('_REGWARN_NAME','Vennligst oppgi navnet ditt.');
DEFINE('_REGWARN_UNAME','Vennligst oppgi et brukernavn.');
DEFINE('_REGWARN_MAIL','Vennligst oppgi en gyldig e-postadresse.');
DEFINE('_REGWARN_PASS','Vennligst oppgi et gyldig passord. Ingen mellomrom, mer enn 6 tegn og kun tegnene 0-9,a-z,A-Z');
DEFINE('_REGWARN_VPASS1','Vennligst gjenta passordet.');
DEFINE('_REGWARN_VPASS2','Passordet og gjentakelsen er ikke like. Vennligst prøv igjen.');
DEFINE('_REGWARN_INUSE','Dette brukernavnet/passordet er allerede i bruk. Vennligst velg et annet.');
DEFINE('_REGWARN_EMAIL_INUSE', 'Denne e-posten er allerede registrert. Hvis du har glemt passordet, klikk på "Glemt passord?" og et nytt passord vil bli sendt til deg.');
DEFINE('_SEND_SUB','Kontodetaljer for %s ved %s');
DEFINE('_USEND_MSG_ACTIVATE', 'Hei %s,

Takk for at du registrerte deg ved %s. Din konto har blitt opprettet, men må aktiveres før du kan bruke den.
Klikk følgende lenke for å aktivere kontoen, eller kopiér adressen og lim den inn i adressefeltet i din nettleser:
%s

Etter aktivering kan du logge inn ved %s med følgende brukernavn og passord:

Brukernavn - %s
Passord - %s');
DEFINE('_USEND_MSG', "Hei %s,

Takk for at du registrerte deg ved %s.

Du kan nå logge inn ved %s med brukernavnet og passordet du er registrert med.");
DEFINE('_USEND_MSG_NOPASS','Hei $name,\n\nDu har blitt lagt til som bruker ved $mosConfig_live_site.\n'
.'Du kan logge inn ved $mosConfig_live_site med brukernavnet og passordet du er registrert med.\n\n'
.'Ikke svar på denne e-posten. Den er automatisk opprettet og kun til informasjon\n');
DEFINE('_ASEND_MSG','Hei %s,

En ny bruker er registrert ved %s.
Denne e-posten inneholder detaljene:

Navn - %s
E-post - %s
Brukernavn - %s

Ikke svar på denne e-posten. Den er automatisk opprettet og kun til informasjon');
DEFINE('_REG_COMPLETE_NOPASS','<div class="componentheading">Registreringen er gjennomført.</div><br />&nbsp;&nbsp;'
.'Du kan nå logge inn.<br />&nbsp;&nbsp;');
DEFINE('_REG_COMPLETE', '<div class="componentheading">Registreringen er gjennomført.</div><br />Du kan nå logge inn.');
DEFINE('_REG_COMPLETE_ACTIVATE', '<div class="componentheading">Registreringen er gjennomført.</div><br />Din brukerkonto har blitt opprettet og aktiviseringslenke er sendt til e-postadressen du har oppgitt. Husk at du må aktivere kontoen ved å klikke på lenken i e-posten du mottar, før du kan logge inn.');
DEFINE('_REG_ACTIVATE_COMPLETE', '<div class="componentheading">Kontoen er aktivert.</div><br />Din konto har blitt aktivert. Du kan nå logge inn med brukernavnet og passordet du valgte ved registreringen.');
DEFINE('_REG_ACTIVATE_NOT_FOUND', '<div class="componentheading">Ugyldig aktiveringslenke.</div><br />Denne kontoen finnes ikke i vår database, eller kontoen har allerede blitt aktivert.');

/** classes/html/registration.php */
DEFINE('_PROMPT_PASSWORD','Glemt passordet?');
DEFINE('_NEW_PASS_DESC','Vennligst oppgi brukernavn og e-postadresse og klikk "Send passord".<br />'
.'Du vil snart motta ett nytt passord. Bruk det nye passordet for å logge inn.');
DEFINE('_PROMPT_UNAME','Brukernavn:');
DEFINE('_PROMPT_EMAIL','E-postadresse:');
DEFINE('_BUTTON_SEND_PASS','Send passord');
DEFINE('_REGISTER_TITLE','Registrering');
DEFINE('_REGISTER_NAME','Navn:');
DEFINE('_REGISTER_UNAME','Brukernavn:');
DEFINE('_REGISTER_EMAIL','E-post:');
DEFINE('_REGISTER_PASS','Passord:');
DEFINE('_REGISTER_VPASS','Gjenta passord:');
DEFINE('_REGISTER_REQUIRED','Felt markert med stjerne (*) er påkrevd.');
DEFINE('_BUTTON_SEND_REG','Send registrering');
DEFINE('_SENDING_PASSWORD','Ditt passord vil bli sendt til e-postadresse over.<br />Når du har mottatt ditt'
.' nye passord kan du logge inn og endre det.');

/** classes/html/search.php */
DEFINE('_SEARCH_TITLE','Søk');
DEFINE('_PROMPT_KEYWORD','Søkeord');
DEFINE('_SEARCH_MATCHES','returnerte %d treff');
DEFINE('_CONCLUSION','Totalt $totalRows resultater funnet.  Søk etter <b>$searchword</b> med');
DEFINE('_NOKEYWORD','Ingen resultater ble funnet');
DEFINE('_IGNOREKEYWORD','Et eller flere ord ble utelatt i søket');
DEFINE('_SEARCH_ANYWORDS','Med noen av ordene');
DEFINE('_SEARCH_ALLWORDS','Alle ordene');
DEFINE('_SEARCH_PHRASE','Eksakt frase');
DEFINE('_SEARCH_NEWEST','Nyeste først');
DEFINE('_SEARCH_OLDEST','Eldste først');
DEFINE('_SEARCH_POPULAR','Mest populær');
DEFINE('_SEARCH_ALPHABETICAL','Alfabetisk');
DEFINE('_SEARCH_CATEGORY','Seksjon/Kategori');
DEFINE('_SEARCH_MESSAGE','Søkestrengen må være mellom 3 bokstaver 20 bokstaver');
DEFINE('_SEARCH_ARCHIVED','Arkivert');
DEFINE('_SEARCH_CATBLOG','Kategoriblogg');
DEFINE('_SEARCH_CATLIST','Kategoriliste');
DEFINE('_SEARCH_NEWSFEEDS','Nyhetsmating');
DEFINE('_SEARCH_SECLIST','Seksjonliste');
DEFINE('_SEARCH_SECBLOG','Seksjonblogg');

/** templates/*.php */
DEFINE('_ISO','charset=iso-8859-1');
DEFINE('_DATE_FORMAT','l d F Y');  //Uses PHP's DATE Command Format - Depreciated
/**
* Modify this line to reflect how you want the date to appear in your site
*
*e.g. DEFINE("_DATE_FORMAT_LC","%A, %d %B %Y %H:%M"); //Uses PHP's strftime Command Format
*/
DEFINE('_DATE_FORMAT_LC',"%A %d. %B %Y"); //Uses PHP's strftime Command Format
DEFINE('_DATE_FORMAT_LC2',"%A %d. %B %Y %H:%M");
DEFINE('_SEARCH_BOX','søk…');
DEFINE('_NEWSFLASH_BOX','Siste nytt');
DEFINE('_MAINMENU_BOX','Hovedmeny');

/** classes/html/usermenu.php */
DEFINE('_UMENU_TITLE','Brukermeny');
DEFINE('_HI','Hei, ');

/** user.php */
DEFINE('_SAVE_ERR','Vennligst fyll ut alle feltene.');
DEFINE('_THANK_SUB','Takk for ditt bidrag. Det vil nå sendes til godkjenning før publisering.');
DEFINE('_UP_SIZE','Du kan ikke laste opp filer større enn 15kb.');
DEFINE('_UP_EXISTS','Et bilde med navnet $userfile_name finnes allerede. Vennligst gi filen et nytt navn og prøv igjen.');
DEFINE('_UP_COPY_FAIL','Kopieringen feilet');
DEFINE('_UP_TYPE_WARN','Du kan kun laste opp gif- eller jpg-bilder.');
DEFINE('_MAIL_SUB','Sendt av bruker');
DEFINE('_MAIL_MSG','Hei $adminName,\n\n\nEn $type:\n [ $title ]\n har nettopp blitt sendt av:\n [ $author ]\n'
.' for $mosConfig_live_site.\n\n\n\n'
.'Vennligst gå til $mosConfig_live_site/administrator for å se og godkjenne denne $type.\n\n'
.'Ikke svar på denne eposten. Den er automatisk opprettet og kun til informasjon\n');
DEFINE('_PASS_VERR1','Dersom du endrer passordet, så gjenta passordet for å bekrefte det.');
DEFINE('_PASS_VERR2','Dersom du endrer passordet, så pass på at passordet og gjentakelsen av passordet blir like.');
DEFINE('_UNAME_INUSE','Dette brukernavnet er allerede i bruk.');
DEFINE('_UPDATE','Oppdater');
DEFINE('_USER_DETAILS_SAVE','Dine innstillinger har blitt lagret.');
DEFINE('_USER_LOGIN','Brukerinnlogging');

/** components/com_user */
DEFINE('_EDIT_TITLE','Rediger dine personlige opplysninger');
DEFINE('_YOUR_NAME','Ditt navn:');
DEFINE('_EMAIL','E-post:');
DEFINE('_UNAME','Brukernavn:');
DEFINE('_PASS','Passord:');
DEFINE('_VPASS','Gjenta passord:');
DEFINE('_SUBMIT_SUCCESS','Innsendt!');
DEFINE('_SUBMIT_SUCCESS_DESC','Ditt bidrag har blitt sendt til våre administratorer. Det vil bli vurdert før publisering.');
DEFINE('_WELCOME','Velkommen!');
DEFINE('_WELCOME_DESC','Velkommen til brukerseksjonen');
DEFINE('_CONF_CHECKED_IN','Alle dine utsjekkede bidrag har blitt sjekket inn');
DEFINE('_CHECK_TABLE','Kontrollerer tabell');
DEFINE('_CHECKED_IN','Innsjekket ');
DEFINE('_CHECKED_IN_ITEMS',' Bidrag');
DEFINE('_PASS_MATCH','Passordene stemmer ikke overens');

/** components/com_banners */
DEFINE('_BNR_CLIENT_NAME','Du må velge et navn for klienten.');
DEFINE('_BNR_CONTACT','Du må velge en kontakt for klienten.');
DEFINE('_BNR_VALID_EMAIL','Du må velge en gyldig e-postadresse for klienten.');
DEFINE('_BNR_CLIENT','Du må velge en klient,');
DEFINE('_BNR_NAME','Du må velge et navn for banneret.');
DEFINE('_BNR_IMAGE','Du må velge et bilde for banneret.');
DEFINE('_BNR_URL','Du må velge en nettadresse/egen kode for banneret.');

/** components/com_login */
DEFINE('_ALREADY_LOGIN','Du er allerede innlogget.');
DEFINE('_LOGOUT','Klikk her for å logge ut');
DEFINE('_LOGIN_TEXT','Bruk brukernavn- og passordfeltene på siden for full tilgang');
DEFINE('_LOGIN_SUCCESS','Du har blitt logget inn');
DEFINE('_LOGOUT_SUCCESS','Du har blitt logget ut');
DEFINE('_LOGIN_DESCRIPTION','Vennligst logg inn for tilgang til den private delen av nettstedet');
DEFINE('_LOGOUT_DESCRIPTION','Du er innlogget i den private delen av nettstedet');


/** components/com_weblinks */
DEFINE('_WEBLINKS_TITLE','Nettlenker');
DEFINE('_WEBLINKS_DESC','Vi er ofte på nettet. Når vi finner et godt nettsted vil vi liste det'
.' her for at du kan ha glede av det. <br />Velg et av emnene under, deretter velg en adresse du vil besøke.');
DEFINE('_HEADER_TITLE_WEBLINKS','Nettlenker');
DEFINE('_SECTION','Seksjon:');
DEFINE('_SUBMIT_LINK','Bidra med en nettlenke');
DEFINE('_URL','Nettadresse:');
DEFINE('_URL_DESC','Beskrivelse:');
DEFINE('_NAME','Navn:');
DEFINE('_WEBLINK_EXIST','Det finnes allerede en lenke med det navnet. Vennligst prøv igjen.');
DEFINE('_WEBLINK_TITLE','Nettlenken må ha en tittel.');

/** components/com_newfeeds */
DEFINE('_FEED_NAME','Syndikasjons navn');
DEFINE('_FEED_ARTICLES','Antall artikler');
DEFINE('_FEED_LINK','Syndikasjons lenke');

/** whos_online.php */
DEFINE('_WE_HAVE', 'Vi har ');
DEFINE('_AND', ' og ');
DEFINE('_GUEST_COUNT','$guest_array gjester');
DEFINE('_GUESTS_COUNT','$guest_array gjester');
DEFINE('_MEMBER_COUNT','$user_array brukere');
DEFINE('_MEMBERS_COUNT','$user_array brukere');
DEFINE('_ONLINE',' her nå');
DEFINE('_NONE','Ingen brukere her nå');

/** modules/mod_stats.php */
DEFINE('_TIME_STAT','Tid');
DEFINE('_MEMBERS_STAT','Brukere');
DEFINE('_HITS_STAT','Treff');
DEFINE('_NEWS_STAT','Nyheter');
DEFINE('_LINKS_STAT','Nettlenker');
DEFINE('_VISITORS','Besøkende');

/** /adminstrator/components/com_menus/admin.menus.html.php */
DEFINE('_MAINMENU_HOME','* Den første publiserte artikkelen i denne menyen [mainmenu] er standard `åpningsside` for nettstedet *');
DEFINE('_MAINMENU_DEL','* Du kan ikke `slette` denne menyen, da den er en nødvendig del av Joomla! *');
DEFINE('_MENU_GROUP','* Visse `menytyper` er synlige i mer enn en gruppe *');


/** administrators/components/com_users */
DEFINE('_NEW_USER_MESSAGE_SUBJECT', 'Detaljer for ny bruker' );
DEFINE('_NEW_USER_MESSAGE', 'Hei %s,


Du har blitt lagt til som bruker ved %s av en administrator.

Denne eposten inneholder brukernavn og passord for innlogging ved %s

Brukernavn - %s
Passord - %s


Ikke svar på denne e-posten. Den er automatisk opprettet og kun til informasjon');

/** administrators/components/com_massmail */
DEFINE('_MASSMAIL_MESSAGE', 'Dette er en e-post fra %s

Melding:
' );

/** includes/pdf.php */
DEFINE('_PDF_GENERATED','Produsert:');
DEFINE('_PDF_POWERED','Drevet av Joomla!');
?>