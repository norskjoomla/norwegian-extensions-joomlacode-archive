<?php
/**
 * DOCman 1.4.x - Joomla! Document Manager
 * @version $Id$
 * @package DOCman_1.4
 * @copyright (C) 2003-2007 The DOCman Development Team
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.joomlatools.org/ Official web site
 **/
defined('_VALID_MOS') or die('Restricted access');

/**
 * TRANSLATORS:
 * PLEASE CHANGE THE INFO BELOW
 *
 * Default Norwegian language file
 *
 * Creator:  Rune Rasmussen
 * Website:  http://www.syntaxerror.no/
 * E-mail:   nopsam@syntaxerror.no
 * Revision: 1.4
 * Date:     September 2007
 **/

// -- Toolbar
define('_DML_TOOLBAR_SAVE', "Lagre");
define('_DML_TOOLBAR_CANCEL', "Avbryt");
define('_DML_TOOLBAR_NEW', "Ny");
define('_DML_TOOLBAR_NEW_DOC', "Ny oppfør.");
define('_DML_TOOLBAR_HOME', "Hjem");
define('_DML_TOOLBAR_UPLOAD', "Last opp");
define('_DML_TOOLBAR_MOVE', "Flytt");
define('_DML_TOOLBAR_COPY', "Kopier");
define('_DML_TOOLBAR_SEND', "Send");
define('_DML_TOOLBAR_BACK', "Tilbake");
define('_DML_TOOLBAR_PUBLISH', "Publiser");
define('_DML_TOOLBAR_UNPUBLISH', "Avpubliser");
define('_DML_TOOLBAR_DEFAULT', "Standard");
define('_DML_TOOLBAR_DELETE', "Slett");
define('_DML_TOOLBAR_CLEAR', "Slett");
define('_DML_TOOLBAR_EDIT', "Rediger");
define('_DML_TOOLBAR_EDIT_CSS', "Rediger CSS");
define('_DML_TOOLBAR_APPLY', "Bruk");


// -- Files
define('_DML_ORPHANS', "Foreldreløse");
define('_DML_ORPHANS_LINKED', "Fil(er) ikke slettet. Kan ikke slette fil(er) som er lenket til filer.");
define('_DML_ORPHANS_PROBLEM', "Fil(er) ikke slettet. Det er problemer med filrettighetene.");
define('_DML_ORPHANS_DELETED', "Fil(er) slettet.");
define('_DML_LINKS', "Lenker");
define('_DML_NEXT', "Neste");
define('_DML_SUCCESS', "Suksess!");
define('_DML_UPLOADMORE', "Last opp mer");
define('_DML_UPLOADWIZARD', "Opplastingsguide");
define('_DML_UPLOADMETHOD', "Velg opplastingsmetode");
define('_DML_ISUPLOADING', "DOCman laster opp");
define('_DML_PLEASEWAIT', "Vennligst vent");
define('_DML_UPLOADDISK', "Opplastingsguide - Last opp en fil fra din harddisk");
define('_DML_FILETOUPLOAD', "Velg fil som skal lastes opp");
define('_DML_BATCHMODE', "Pakkemodus");
define('_DML_BATCHMODETT', "Pakkemodus laster opp en pakke (zip) som inneholder flere filer. Pakken vil bli utpakket automatisk etter opplasting. Du bør ikke inkludere pakkede kataloger eller underkataloger i pakken. Husk at prosessen kan overskrive filer i DocMan filkatalogen som har samme filnavn, det finnes ingen overskrivingsbeskyttelse når man bruker filpakker. Dette er en eksprimentel funksjon, og du bør bruke den forsiktig.");
define('_DML_DOCMANISTRANSF', "DOCman overfører<br />filen");
define('_DML_TRANSFERFROMWEB', _DML_UPLOADWIZARD . " - " . "overfører en fil fra en webserver");
define('_DML_REMOTEURL', "Nettadresse");
define('_DML_LINKURLTT', "Skriv inn nettadressen du vil koble til. Nettadressen må inneholde http:// eller ftp:// og annen nødvendig informasjon for tilkobling. For eksempel: http://mamboforge.net/frs/download.php/2026/docmanV1.3.zip.");
define('_DML_REMOTEURLTT', _DML_LINKURLTT . "<br />Du kan navngi filen slik du ønsker på dette systemet ved å bruke &quot;Lokalt navn&quot;-feltet.");
define('_DML_LOCALNAME', "Lokalt navn");
define('_DML_LOCALNAMETT', "Skriv inn lokalt navn for filen slik du vil lagre den på dette systemet."
     . "Dette er et påkrevd felt siden nettadressen ikke gir tilstrekkelig informasjon for filen.");
define('_DML_DOCUPDATED', "Fil har blitt oppdatert.");
define('_DML_FILEUPLOADED', "Fil har blitt lastet opp.");
define('_DML_MAKENEWENTRY', "Lag en ny filoppføring med denne filen.");
define('_DML_DISPLAYFILES', "Vis filer.");
define('_DML_ALLFILES', "Alle filer");
define('_DML_DOCFILES', "Dokumentfiler");
define('_DML_CREATEALINK', "Opprett en lenket fil");
define('_DML_SELECTMETHODFIRST', "Velg en metode for filoverføring");
define('_DML_ERROR_UPLOADING', "Feil under opplasting.");
define('_DML_ZLIB_ERROR', "Operasjonen kunne ikke fortsette siden zlib biblioteket ikke finnes i php.");
define('_DML_UNZIP_ERROR', "Kunne ikke pakke ut filene.");
define('_DML_SUBMIT', "Last opp");
define('_DML_NEW_FILE', "Ny fil");
define('_DML_MAKE_SELECTION', "Gjør et valg fra listen.");

// -- Documents
define('_DML_MOVECAT', "Flytt kategori");
define('_DML_MOVETOCAT', "Flytt til kategori");
define('_DML_DOCSMOVED', "Filer som flyttes");
define('_DML_COPYCAT', "Kopier kategori");
define('_DML_COPYTOCAT', "Kopier til kategori");
define('_DML_COPY_OF', "Kopi av"); // Copy of [document name]
define('_DML_DOCSCOPIED', "Oppføringer som kopieres");
define('_DML_DOCS_NOT_APPROVED', "filer ikke godkjent");
define('_DML_DOCS_NOT_PUBLISHED', "filer ikke publisert");
define('_DML_NO_PENDING_DOCS', "Ingen ventende filer.");
define('_DML_FILE_MISSING', "***fil mangler***");
define('_DML_YOU_MUST_UPLOAD', "Du må laste opp en fil for denne seksjonen først.");
define('_DML_THE_MODULE', "Modulen");
define('_DML_IS_BEING', "blir for øyeblikket redigert av en annen administrator");
define('_DML_NO_LICENSE', "ingen lisens");
define('_DML_LINKED', "->LENKET FIL<-");
define('_DML_CURRENT', "Gjeldende");
define('_DML_LICENSE_TYPE', "Lisenstype");
define('_DML_FILETITLE', "Filtittel");
define('_DML_OWNER_TOOLTIP', "Dette bestemmer hvem som kan laste ned og se filen. Velg: "
     . "*Alle* om du vil at alle skal ha tilgang til filen. "
     . "*Alle registrerte bruker* gir bare brukere som har en konto på din side tilgang til filen. "
     . "Du kan tildele filen til en enkelt registrert bruker ved å velge et navn " . _DML_USERS . "; "
     . "bare den brukeren vil ha tilgang til filen. "
     . "Du kan tildele filen til en gruppe registrerte bruker ved å velge gruppe under " . _DML_GROUPS . "; "
     . "bare denne gruppens medlemmer vil ha tilgang til filen.");
define('_MANT_TOOLTIP', "Dette bestemmer hvem som kan redigere, eller vedlikeholde filen. "
     . "Når en bruker, eller medlemm av en gruppe, er " . _DML_MAINTAINER . " av en fil betyr det at de kan bruke følgende valg for filbehandling: rediger, oppdater, flytt, sjekk inn/ut og slett.");
define('_DML_MAKE_SURE', "Husk å starte nettadressen<br />med 'http://'");
define('_DML_DOCURL', "Nettadresse til fil");
define('_DML_DOCURL_TOOLTIP', "Når du har LENKEDE filer må du fylle inn nettsideadressen (URL) for filen her. Inkluder alltid http:// eller ftp:// på begynnelsen.");
define('_DML_HOMEPAGE_TOOLTIP', "Du kan om du ønsker fylle inn en nettsideadresse (URL) for informasjon som er relatert til denne filen. Inkluder alltid http:// på begynnelsen ellers vil den ikke virke.");
define('_DML_LICENSE_TOOLTIP', "En fil kan ha en lisensavtale tilknyttet, som må aksepteres av de som vil ha tilgang til filen. Her kan du definere lisenstypen.");
define('_DML_DISPLAY_LICENSE', "Vis lisensavtale ved visning");
define('_DML_DISPLAY_LIC_TOOLTIP', "Velg`*ja* om du vil vise lisensavtale for bruker før tilgang gis.");
define('_DML_APPROVED_TOOLTIP', "En fil må godkjennes før den vises og er tilgjengelig i fillisten. Svar *ja* her og ikke glem å publisere den også! Begge valg må velges for at filen skal vises på brukersidene");
define('_DML_PLEASE_SEL_CAT', "Vennligst opprett minst en kategori først");
define('_DML_MANT_TOOLTIP', "Dette bestemmer hvem som kan endre eller vedlikeholde filoppføringen. "
     . "Når en bruker, eller et medlemm av en gruppe, er " . _DML_MAINTAINER . " av en fil betyr det at de kan bruke følgende filbehandlingsvalg: endre, oppdatere, flytte, sjekke inn/ut og slette.");
define('_DML_DISPLAY_LIC', "Vis lisensavtale");

define('_DML_TAB_PERMISSIONS', "Rettigheter");
define('_DML_TAB_LICENSE', "Lisens");
define('_DML_TAB_DETAILS', "Detaljer");
define('_DML_TAB_PARAMS', "Parametre");

define('_DML_TITLE_DOCINFORMATION', "Filinformasjon");
define('_DML_TITLE_DOCPERMISSIONS', "Filrettigheter");
define('_DML_TITLE_DOCLICENSES', "Fillisenser");
define('_DML_TITLE_DOCDETAILS', "Fildetaljer");
define('_DML_TITLE_DOCPARAMETERS', "Filparametre");

define('_DML_CREATED_BY', "Opprettet av");
define('_DML_UPDATED_BY', "Sist oppdatert av");
define('_DML_SELECT_ITEM_DEL', "Velg objekt som skal slettes");
define('_DML_SELECT_ITEM_MOVE', "Velg objekt som skal flyttes");
define('_DML_SELECT_ITEM_COPY', "Select an item to copy");
define('_STATUS_YOU', "Denne filen er sjekket ut av deg.");
define('_STATUS_NOT_OUT', "Denne filen er ikke sjekket ut.");
define('_DML_NEW_DOCUMENT', "Ny oppføring");
define('_DML_DOCUMENTS_MOVED_TO', "Oppføringer flyttet til"); // [Number of] Documents moved to [location]
define('_DML_DOCUMENTS_COPIED_TO', "Oppføringer kopiert til"); // [Number of] Documents moved to [location]


// -- Categories
define('_DML_CATDETAILS', "Kategoridetaljer");
define('_DML_CATTITLE', "Kategoritittel");
define('_DML_CATNAME', "Kategorinavn");
define('_DML_LONGNAME', "Et langt navn til å vise i headings");
define('_DML_PARENTITEM', "Overordnet objekt");
define('_DML_IMAGE', "Bilde");
define('_DML_PREVIEW', "Forhåndsvisning");
define('_DML_IMAGEPOS', "Bildeposisjon");
define('_DML_ORDERING', "Sortering");
define('_DML_ACCESSLEVEL', "Tilgangsnivå");
define('_DML_CREATEMENUITEM', "Dette vil opprette et nytt menypunkt i menyen du velger");
define('_DML_SELECTMENU', "Velg en meny");
define('_DML_SELECTMENUTYPE', "Velg en menytype");
define('_DML_MENUITEMNAME', "Menypunkt-navn");
define('_DML_SELECTCATTO', "Velg kategori til");
define('_DML_SELECTCATTODELETE', "Velg kategori som skal slettes");
define('_DML_REORDER', "Sorter");
define('_DML_ACCESS', "Tilgang");
define('_DML_CAT_MUST_SELECT_NAME', "Kategorien må ha et navn");
define('_DML_CATS_CANT_BE_REMOVED', "kan ikke fjernes. Det finnes assosierte oppføringer og/eller underkategorier.");

// -- Groups
define('_DML_TITLE_GROUPS', "Grupper");
define('_DML_CANNOT_DEL_GROUP', "Kan ikke slette en gruppe for øyeblikket, dette siden en fil er eiet av denne.");
define('_DML_USERS_AVAILABLE', "Brukere tilgjengelig");
define('_DML_MEMBERS_IN_GROUP', "Medlemmer i denne gruppen");
define('_DML_ADD_GROUP_TIP', "Dobbelklikk på et navn, eller velg et og bruk pilen, for å legge til/slette et brukermedlem. "
     . "For å velge mer enn et medlem av gangen: " . _DML_MULTIPLE_SELECTS);
define('_DML_ADDING_USERS', "Legge til brukermedlemmer til grupper");
define('_DML_FILL_FORM', "Du må fylle ut skjema riktig");
define('_DML_ONLY_ADMIN_EMAIL', "Bare en Superadministrator kan masseutsende e-post!");
define('_DML_NO_TARGET_EMAIL', "Det finnes ingen brukere med gyldige e-postadresser i gruppen");
define('_DML_THIS_IS', "Dette er en e-postmelding fra");
define('_DML_SENT_BY', "sendt av DOCman til medlemmene av filgruppen");
define('_DML_EMAIL_SENT_TO', "E-post sendt til");
define('_DML_MEMBERS', "Medlemmer");
define('_DML_EMAIL', "E-post");
define('_DML_USER_BLOCKED', "blokkert");

// -- Licenses
define('_DML_LICENSE_TEXT', "Lisenstekst");
define('_DML_CANNOT_DEL_LICENSE', "Kan ikke slette lisens siden en fil bruker den.");


// -- Config
define('_DML_FRONTEND', "Forside");
define('_DML_PERMISSIONS', "Rettigheter");
define('_DML_RESETDEFAULT', "Gjenopprett standard");
define('_DML_ASCENDENT', "Stigende");
define('_DML_DESCENDENT', "Synkende");

define('_DML_CONFIGURATION', "DOCman konfigurasjon");
define('_DML_CONFIG_UPDATED', "Konfigurasjonsdetajene har blitt oppdatert.");
define('_DML_CONFIG_WARNING', "ADVARSEL: Konfigurasjon er oppdatert, men maks filstørrelse for opplasting er større enn PHP maksimum: ");
define('_DML_CONFIG_ERROR', "En feil har oppstått: Konfigurasjonsfilen kan ikke åpnes for skriving!");
define('_DML_CONFIG_ERROR_UPLOAD', "FEIL: Maks filstørrelse for opplasting kan ikke være negativ.");

define('_DML_CFG_DOCMANTT', "DOCman verktøytips...");
define('_DML_CFG_ALLOWBLANKS', "Tillate mellomrom");
define('_DML_CFG_REJECT', "Avvis");
define('_DML_CFG_CONVERTUNDER', "Konverter til understreking");
define('_DML_CFG_CONVERTDASH', "Konverter til dash");
define('_DML_CFG_REMOVEBLANKS', "Fjern mellomrom");
define('_DML_CFG_PATHFORSTORING', "Sti for fillagring");
define('_DML_CFG_PATHTT', "Her skal du angi den lokale mappen hvor alle filene skal lagres. Dette skal være den fulle stibanen. Du kan akseptere standard verdien, eller om du foretrekker en annen filmappe angir du full sti til den her.<br /><br />"
     . "For eksempel, på et *NIX system kan dette være /var/usr/www/dmdocuments<br /><br />"
     . "Om du bruker en windows basert server kan du f.eks bruke c:/inetpub/www/dmdocuments");
define('_DML_CFG_SECTIONISDOWN', "Seksjon er nede?");
define('_DML_CFG_SECTIONTT', "Om du vil hindre tilgang til fil-listen for vanlige brukere, sett dette valget til *Ja*. <br />"
     . "Dette er nyttig ved testing eller oppgraderinger.<br /><br />"
     . "Administratorer og spesielle brukere vil alltid ha tilgang selv om valget er satt til *Nei*. <br />"
    );
define('_DML_CFG_NUMBEROFDOCS', "Antall filer per side");
define('_DML_CFG_NUMBERTT', "Antall filer som skal vises på en side. Om det totale antall filer er høyere enn dette, vil en sideliste bli vist for enklere navigasjon.");

define('_DML_CFG_GUEST', "Gjester");
define('_DML_CFG_GUEST_NO', "Ingen adgang");
define('_DML_CFG_GUEST_X', "Bare navigere");
define('_DML_CFG_GUEST_RX', "Navigere, laste ned og se");
define('_DML_CFG_GUEST_TT', "Dette bestemmer hva gjester (ikke registrerte brukere) kan gjøre: <br />*"
     . _DML_CFG_GUEST_NO . "* Ingen filer vises<br />*"
     . _DML_CFG_GUEST_X . "* Tillater dem å se at filer eksisterer, men gir ikke adgang til dem. <br />*"
     . _DML_CFG_GUEST_RX . "* Tillater dem å se at filene eksisterer, og gir adgang til dem."
     . "<br /><br />Denne rettigheten er i tillegg til en individuell filtilgangrettighet."
     . "</span>");

define('_DML_CFG_AUTHOR_NONE', "Ingen adgang");
define('_DML_CFG_AUTHOR_READ', "Bare nedlasting");
define('_DML_CFG_AUTHOR_BOTH', "Laste ned og redigere");

define('_DML_CFG_ICONSIZE', "Ikonstørrelse");
define('_DML_CFG_DAYSFORNEW', "Dager for ny");
define('_DML_CFG_DAYSFORNEWTT', "Antall dager en fil blir sett på som ny. Viser: *" . _DML_NEW . "*, ved siden av filnavnet når listen av filer vises. Om verdien settes til 0 vil ikke " . _DML_NEW . " vises.");
define('_DML_CFG_HOT', "Populære nedlastninger");
define('_DML_CFG_HOTTT', "Antallet nedlastninger som må til for at en fil blir satt som populært. Viser *" . _DML_HOT . "* nær filnavnet når det totale antallet nedlastninger når verdien. Om verdien er satt til null, vil ikke " . _DML_HOT . " vises.");
define('_DML_CFG_DISPLAYLICENSES', "Vis lisens?");

define('_DML_CFG_VIEW', "Vis");
define('_DML_CFG_VIEWTT', "Setter hvilken bruker/gruppe som har tilgang til å laste ned og vise filer. Det er mulig å overstyre dette for hver enkelt fil.");
define('_DML_CFG_MAINTAIN', "Vedlikeholde");
define('_DML_CFG_MAINTAINTT', "Setter hvilken bruker/gruppe som har tilgang til å vedlikeholde filen. Det er mulig å overstyre dette for hver enkel fil.");
define('_DML_CFG_CREATORS_PERM', "Opphavspersonen kan");
define('_DML_CFG_CREATORSPERMTT', "Dette setter globalt hva opphavspersonen har rettigheter til å gjøre.<br /><br />"
     . "Dette er et tillegg til rettighetene gitt av Vises for og Vedlikeholder feltene for hver fil.");
define('_DML_CFG_WHOCANAREADER', "Last ned");
define('_DML_CFG_WHOCANAREADERTT', "Dette lar deg bestemme om opphavsperson/vedlikeholder av filen kan endre hvem som kan se filen.<br /><br />"
     . "N.B.: Administratorer kan alltid endre rettighetene for hvem som kan se filen.");
define('_DML_CFG_WHOCANAEDITOR', "Rediger");
define('_DML_CFG_WHOCANAEDITORTT', "Dette lar deg bestemme om opphavsperson/vedlikeholder kan endre hvem som kan vedlikeholde filen.<br /><br />"
     . "N.B.: Administratorer kan allid endre rettighetene for hvem som kan vedlikeholde filen.");

define('_DML_CFG_EMAILGROUP', "Sende e-post til gruppens brukere?");
define('_DML_CFG_EMAILGROUPTT', "Hvis *ja*, og første alternativ er *ja*, vil en link vises på hver fil, hvor brukeren som medlem av gruppen som eier filen, kan sende en e-post for å diskutere.");

define('_DML_CFG_UPLOAD', "Last opp");
define('_DML_CFG_UPLOADTT', "Dette lar deg sette hvilken bruker/gruppe som kan laste opp filer. Alle opplastningsmetoder (http, linker og direkte overføring) blir styrt av dette valget.");
define('_DML_CFG_APPROVE', "Godkjenne");
define('_DML_CFG_APPROVETT', "Dette lar deg sette hvilken bruker/gruppe som kan godkjenne filer.<br />Filer må bli godkjent og publisert, før de er tilgjengelig for nedlastning.");
define('_DML_CFG_PUBLISH', "Publiser");
define('_DML_CFG_PUBLISHTT', "Dette lar deg sette hvilken bruker/gruppe som kan publisere filer.<br />Filer må bli godkjent og publisert, før de er tilgjengelig for nedlastning.");
define('_DML_CFG_USER_UPLOAD', "Velg hvem som kan laste opp");
define('_DML_CFG_USER_APPROVE', "Velg hvem som kan godkjenne");
define('_DML_CFG_USER_PUBLISH', "Velg hvem som kan publisere");

define('_DML_CFG_EXTALLOWED', "Tillate utvidelser");
define('_DML_CFG_EXTALLOWEDTT', "Filtyper som er tillat, separert med |. Backend-brukere kan laste opp alle filtyper.");
define('_DML_CFG_MAXFILESIZE', "Maks filstørrelse tillat for opplastning.");
define('_DML_CFG_MAXFILESIZETT', "Maks tillatt filstørrelse for opplastning via frontend. Om ønskelig kan du bruke K/M/G for å angi størrelse..<br />Denne grensen gjelder ikke (admin)opplastning via backend. <br /><hr />PHP konfigurasjonsverdien , upload_max_filesize, vil også gjelde. Den er satt til ");
define('_DML_CFG_USERCANUPLOAD', "Bruker kan laste opp alle filtyper?");
define('_DML_CFG_USERCANUPLOADTT', "Hvis *ja*, og forrige *bruker opplastning* var *ja* kan registrerte brukere laste opp alle typer filer, og dermed ignorere tidligere restriksjoner.");
define('_DML_CFG_OVERWRITEFILES', "Skrive over filer?");
define('_DML_CFG_OVERWRITEFILESTT', "Hvis ja, vil eksisterende fil(er) bli skrevet over ved opplastninger med filnavn som er lik(e).");
define('_DML_CFG_LOWERCASE', "Filnavn med små bokstaver?");
define('_DML_CFG_LOWERCASETT', "Hvis *ja* vil opplastede filer bli konvertert til filnavn med små bokstaver. F.eks.&nbsp;DinFil.TXT vil bli dinfil.txt.<br />Hvis *nei*, vil filnavn bli lagret både med store og små bokstaver.");
define('_DML_CFG_FILENAMEBLANKS', "Filnavn med mellomrom");
define('_DML_CFG_FILENAMEBLANKSTT', "Håndtering av filnavn som inneholder mellomrom:<br />"
     . "*Tillate mellomrom* vil lagre filene med mellomrom.<br />"
     . "*Forkaste* vil ikke tillate filnavn med mellomrom å bli lastet opp.<br /><br />"
     . "Du kan alternativt få konvertert mellomrom til nedestrek (_), bindestrek (-), eller fjerne mellomrommene fra filnavnet.");
define('_DML_CFG_REJECTFILENAMES', "Forkaste filnavn");
define('_DML_CFG_REJECTFILENAMESTT', "Skriv inn en liste med filnavn som det ikke er tillatt å laste opp, med | (pipe) som separator. Dette er filnavn som har en spesiell betydning for systemet.<br /> Du kan også bruke tegn mellom to pipes for å stoppe tegn som lager trøbbel. (F.eks: * $ ?)");
define('_DML_CFG_UPMETHODS', "Opplastningsmetoder?");
define('_DML_CFG_UPMETHODSTT', "Velg opplastningsmetode brukerne kan bruke. For multiple metoder, " . _DML_MULTIPLE_SELECTS);

define('_DML_CFG_ANTILEECH', "Anti-leech system?");
define('_DML_CFG_ANTILEECHTT', "Anti-leech systemet hindrer uautorisert lenking til din fil."
     . "Når satt til *ja* vil alle (http-) forespørsler bli sjekket for å se om de "
     . "kommer fra et system som ligger i listen over \'Tillate verter\'. Om den ikke gjør det vil tilgang bli nektet. "
     . "Dette forhindrer andre systemer fra å bruke ditt fillager til egen fordel. "
     . "N.B. DOCman støtter direkte lenking mellom systemer. "
     . "Om du bruker lenker må du påse at kildesystemet ligger i listen over \'Tillate verter\'."
    );
define('_DML_CFG_ALLOWEDHOSTS', "Tillate verter");
define('_DML_CFG_ALLOWEDHOSTSTT', "En liste av verter som kan spørre etter filer når anti-leech systemet er aktivert. Om du ønsker flere verter tilgang til filene, så bruk | (pipe) som separator mellom de ulike vertene.<br />Normalt vil standardverdi her være sikker.");

define('_DML_CFG_LOG', "Loggfør visninger?");
define('_DML_CFG_LOGTT', "Dette loggfører vertens ip-adresse, dato, tidspunkt og hvilken fil verten ønsket å vise. "
     . "Mye data vil bli lagt til i din database om dette valget er aktivert.<hr />"
     . "Det er tilgjengelige Mamboter for utvide loggingsmulighetene.");

define('_DML_CFG_UPDATESERVER', "Oppgrader DOCman");
define('_DML_CFG_UPDATESERVERTT', "DOCman kan oppgradere seg selv over web, i tillegg til å installere nye DOCman relaterte moduler, tilleggsmoduler og boter. Selv database-endringer kan gjøres on-the-fly som endel av oppgraderingen. Her kan du skrive inn url til DOCman sin oppgraderingsserver. Forhåpentligvis vil standardverdi være korrekt her.");
define('_DML_CFG_DEFAULTLISTING', "Standard visningsrekkefølge");
define('_DML_CFG_TRIMWHITESPACE', "Fjern tomrom");
define('_DML_CFG_TRIMWHITESPACETT', "Fjern innledende tomrom og blanke linjer fra mal, som rydder opp koden og sparer båndbredde.");

define('_DML_CFG_ERR_DOCPATH', "Tab [' . _DML_GENERAL . '] \'' . _DML_CFG_PATHFORSTORING . '\' må være gitt.");
define('_DML_CFG_ERR_PERPAGE', "Tab [' . _DML_FRONTEND . '] \'' . _DML_CFG_NUMBEROFDOCS . '\' må være numerisk og større enn null.");
define('_DML_CFG_ERR_NEW', "Tab [' . _DML_FRONTEND . '] \'' . _DML_CFG_DAYSFORNEW . '\' må være numerisk og null eller større.");
define('_DML_CFG_ERR_HOT', "Tab [' . _DML_FRONTEND . '] \'' . _DML_CFG_HOT . '\' må være numerisk og null eller større.");
define('_DML_CFG_ERR_UPLOAD', "Tab [' . _DML_PERMISSIONS . '] \'' . _DML_CFG_UPLOAD . '\': Velg hvem som kan laste opp filer.");
define('_DML_CFG_ERR_APPROVE', "Tab [' . _DML_PERMISSIONS . '] \'' . _DML_CFG_APPROVE . '\': Velg hvem som kan godkjenne filer.");
define('_DML_CFG_ERR_DOWNLOAD', "Tab [' . _DML_PERMISSIONS . '] \'' . _DML_CFG_VIEW . '\': Velg en standard bruker/gruppe.");
define('_DML_CFG_ERR_EDIT', "Tab [' . _DML_PERMISSIONS . '] \'' . _DML_CFG_MAINTAIN . '\': Velg en standard bruker/gruppe for filvedlikehold.");
define('_DML_CFG_EXTENSIONSVIEWING', "Tillegg for visning");
define('_DML_CFG_EXTENSIONSVIEWINGTT', "Filtyper som kan bli vist. Bruk blank for ingen, * for alle, eller noter ned de som er tillatte og bruk | (pipe) for å separere de med, f.eks. (txt|pdf).");

define('_DML_CFG_GENERALSET', "Generelle innstillinger");
define('_DML_CFG_THEMES', "Maler");
define('_DML_CFG_EXTRADOCINFO', "Ekstrainformasjon på oppføring");
define('_DML_CFG_GUESTPERM', "Gjesterettigheter");
define('_DML_CFG_FRONTPERM', "Brukersiderettigheter");
define('_DML_CFG_DOCPERM', "Oppføringsrettigheter");
define('_DML_CFG_OVERRIDEVIEW', "Overstyr visning");
define('_DML_CFG_OVERRIDEMANT', "Overstyr vedlikehold");
define('_DML_CFG_CREATORPERM', "Opphavs rettigheter");
define('_DML_CFG_FILEXTENSIONS', "Filendelser");
define('_DML_CFG_FILENAMES', "Filnavn");

define('_DML_CFG_PROCESS_BOTS', "Laste innholds-mamboter?");
define('_DML_CFG_PROCESS_BOTSTT', "Laster innholds-mamboter på oppførings- eller kategoribeskrivelsen. Dette lar deg bruke {tags} i din beskrivelse. *Advarsel* Ikke alle mamboter vil virke med denne funksjonen.");
define('_DML_CFG_INDIVIDUAL_PERM', "Tillatt individuelle brukerrettigheter");
define('_DML_CFG_INDIVIDUAL_PERMTT', "Når du slår denne av vil du fortsatt kunne tildele rettigheter til en gruppe, men ikke lengre til en individuell bruker. Dine eksisterende rettigheter for oppføringer vil bli bevart, men når en oppføring som er tildelt en enkelt bruker blir redigert må man velge en brukergruppe. Slå denne av for bedre ytelse og minnebruk på store brukerbaser. ");
define('_DML_CFG_HIDE_REMOTE', "Skjul eksterne lenker");
define('_DML_CFG_HIDE_REMOTETT', "Dette valget skjuler lenker til eksterne filer i oppføringens detaljevisning. Brukere med redigeringsrettigheter vil fortsatt se lenken. *MERK* Dette gir _IKKE_ fullstendig beskyttelse for eksterne lenker, brukere vil fortsatt kunne finne ekstern plassering for filen.");

// -- Statistics
define('_DML_STATS', "Statistikker");
define('_DML_DOCSTATS', "DOCman statistikker - Topp 50 nedlastinger");
define('_DML_RANK', "Rangering");

// -- Logs
define('_DML_DOWNLOAD_LOGS', "Nedlastingslogger");
define('_DML_IP', "IP");
define('_DML_BROWSER', "Nettleser");
define('_DML_OS', "Operativsystem");
define('_DML_ANONYMOUS', "Anonym");

// -- Updates
define('_DML_UPGRADE', "Oppgradering");
define('_DML_YOU_HAVE_VERSION', "du har versjon");
define('_DML_UPTODATE', "Din versjon er oppdatert.");
define('_DML_NO_UP_AVAIL', "Ingen oppdateringer finnes for øyeblikket.");
define('_DML_COULD_NOT_COPY', "Kunne ikke kopiere alle filer til deres mapper, sjekk rettigheter. Stoppet på fil");
define('_DML_UPDATING_DB', "Oppdaterer database...");
define('_DML_DELETING_OLD', "Sletter gamle filer...");
define('_DML_ERROR_DELETING_OLD', "Feil ved sletting av gamle filer. Ingen kritisk feil.");
define('_DML_PACKAGE', "Pakke");
define('_DML_INST_CLICK', "installert. Klikk");
define('_DML_HERE', "her");
define('_DML_TO_CONT', "for å fortsette");
define('_DML_ERROR_READING', "feil ved lesing");
define('_DML_XML_ERROR', "Ugyldig XML-fil");
define('_DML_CHECKING_UP', "Ser etter oppdateringer");
define('_DML_RELEASED_ON', "Utgitt");

// -- Themes
define('_DML_THEMES', "Maler");
define('_DML_EDIT_DEFAULT_THEME', "Rediger gjeldende mal");
define('_DML_THEME_INSTALLED', "Mal installert.");
define('_DML_ADJUST_CONFIG', "Rediger konfigurasjon.");
define('_DML_NEED_ZLIB', "Installasjon kan ikke fortsette før zlib er installert på tjener");
define('_DML_INSTALLER_ERROR', "Installering - Feil");
define('_DML_SUCCESFULLY_INSTALLED', "Velykket installert");
define('_DML_ENABLE_FILE_UPLOADS', "Filopplasting må være aktivert for å fortsette");
define('_DML_UPLOAD_ERROR', "Opplastingsfeil");
define('_DML_EXTRACT_FAILED', "Utpakkingsfeil");
define('_DML_INSTALL_FAILED', "Installasjonsfeil");
define('_DML_UNINSTALL_FAILED', "Avinstallasjonsfeil");
define('_DML_INSTALL_FROM_DIRECTORY', "Installer fra mappe");
define('_DML_INSTALL_DIRECTORY', "Installasjonsmappe");
define('_DML_PACKAGE_FILE', "Pakkefil");
define('_DML_UPLOAD_PACKAGE_FILE', "Last opp pakkefil");
define('_DML_UPLOAD_AND_INSTALL', "Last opp og installer fil");
define('_DML_INSTALL_THEME', "Installer mal");
define('_DML_SELECT_DIRECTORY', "Velg en mappe");
define('_DML_SELECT_PACKAGE', "Velg en pakke");
define('_DML_STYLESHEET_EDITOR', "Stilarkbehandler for mal");
define('_DML_OPFAILED_NO_TEMPLATE', _DML_OPERATION_FAILED.": Ingen mal angitt");
define('_DML_OPFAILED_CONTENT_EMPTY', _DML_OPERATION_FAILED.": Ingen innhold");
define('_DML_OPFAILED_UNWRITABLE', _DML_OPERATION_FAILED.": Filen er ikke skrivbar");
define('_DML_OPFAILED_CANT_OPEN_FILE', _DML_OPERATION_FAILED.": Kunne ikke skrive til filen");
define('_DML_OPFAILED_COULDNT_OPEN', _DML_OPERATION_FAILED.": Kunne ikke åpne ");
define('_DML_AUTHOR_URL', "Opphavs nettadresse");
define('_DML_AUTHOR', "Opphav");
define('_DML_INSTALLED_THEMES', "Installerte maler");
define('_DML_THEME_DETAILS', "Maldetaljer");
define('_DML_EDIT_THEME', "Rediger mal");


// -- E-mail
define('_DML_EMAIL_GROUP', "Send e-post til gruppe");
define('_DML_SUBJECT', "Emne");
define('_DML_EMAIL_LEADIN', "Innledende tekst");
define('_DML_MESSAGE', "Hovedmelding");
define('_DML_SEND_EMAIL', "Send");

// -- Credits
define('_DML_CREDITS', "Bidragsytere");
define('_DML_APPLICATION', "Applikasjon");
define('_DML_ICONS', "Ikoner");
define('_DML_ICONS_PERMISSION', "Ikoner med rettigheter fra");
define('_DML_CHANGELOG', "Endringslogg");

// -- Clear Data
define('_DML_CLEARDATA', "Slett data");
define('_DML_CLEARDATA_CLEARED', "Data slettet ");
define('_DML_CLEARDATA_FAILED', "Sletting feilet: ");
define('_DML_CLEARDATA_ITEM', "Element");
define('_DML_CLEARDATA_CLEAR', "Slett");
define('_DML_CLEARDATA_CATS_CONTAIN_DOCS', "Slett oppføringer før sletting av kategorier");
define('_DML_CLEARDATA_DELETE_DOCS_FIRST', "Slett oppføringer før sletting av filer");

// -- Sample data
define('_DML_SAMPLE_CATEGORY', "Eksempelkategori");
define('_DML_SAMPLE_CATEGORY_DESC', "Du kan slette denne eksempelkategorien.");
define('_DML_SAMPLE_DOC', "Eksempeloppføring");
define('_DML_SAMPLE_DOC_DESC', "Du kan slette denne eksempeloppføringen og filen den er lenket til.");
define('_DML_SAMPLE_FILENAME', "sample_file.png");
define('_DML_SAMPLE_COMPLETED', "Ferdig med å legge til eksempeldata.");
define('_DML_SAMPLE_GROUP', "Eksempelgruppe");
define('_DML_SAMPLE_GROUP_DESC', "Du kan bruke grupper for å tildele rettigheter til en gruppe brukere.");
define('_DML_SAMPLE_LICENSE', "Eksempellisens");
define('_DML_SAMPLE_LICENSE_DESC', "Du kan, om du vil, tildele lisenser til oppføringene.");

// -- Added v1.4.0 RC1
define('_DML_CFG_COMPAT', "Kompatibilitet");
define('_DML_CFG_SPECIALCOMPATMODE', "&quot;Special&quot; kompatibiltetmodus");
define('_DML_CFG_SPECIALCOMPATMODETT', "I DOCman 1.3 kompatibilitetmodus, &quot;Special&quot;-brukere er Manager, Administrator og Super Administrator. I Joomla!-modus inkluderer dette også Author, Publisher og Editor");
define('_DML_CFG_SPECIALCOMPAT_DM13', "DOCman 1.3");
define('_DML_CFG_SPECIALCOMPAT_J10', "Joomla!");
