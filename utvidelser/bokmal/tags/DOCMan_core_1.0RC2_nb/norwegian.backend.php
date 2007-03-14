<?php
/*
* DOCMan 1.3.0 for Mambo 4.5.1 CMS
* @version $Id: norwegian.backend.php,v 1.0 2006/03/19 01:26:17 rued Exp $
* @package DOCMan_1.3.0
* @copyright (C) 2003 - 2005 The DOCMan Development Team
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Official website: http://www.mambodocman.com/
* -------------------------------------------
* Norwegian language file
* Translator: Rune Rasmussen & Leif H. Lied
* Email: oversettelser@joomlainorge.no
* Revision: 1.3
* Date: 2006.09.18
*/
// ensure this file is being included by a parent file */
defined("_VALID_MOS") or die("Direct Access to this location is not allowed.");

// -- Files
DEFINE("_DML_ORPHANS" 			, "Foreldreløse");
DEFINE("_DML_ORPHANS_LINKED" 	, "Fil(er) ikke slettet. Kan ikke slette fil(er) som er lenket til filer.");
DEFINE("_DML_ORPHANS_PROBLEM" 	, "Fil(er) ikke slettet. Det er problemer med filrettighetene.");
DEFINE("_DML_ORPHANS_DELETED" 	, "Fil(er) slettet.");
DEFINE("_DML_LINKS" 		, "Lenker");
DEFINE("_DML_NEXT" 			, "Neste");
DEFINE("_DML_SUCCESS" 		, "Suksess!");
DEFINE("_DML_UPLOADMORE" 	, "Last opp mer");
DEFINE("_DML_UPLOADWIZARD" 	, "Opplastingsguide");
DEFINE("_DML_UPLOADMETHOD" 	, "Velg opplastingsmetode");
DEFINE("_DML_ISUPLOADING" 	, "DOCMan laster opp");
DEFINE("_DML_PLEASEWAIT" 	, "Vennligst vent");
DEFINE("_DML_UPLOADDISK" 	, "Opplastingsguide - Last opp en fil fra din harddisk");
DEFINE("_DML_FILETOUPLOAD" 	, "Velg fil som skal lastes opp");
DEFINE("_DML_BATCHMODE" 	, "Pakkemodus");
DEFINE("_DML_BATCHMODETT" 	, "Pakkemodus laster opp en pakke (zip) som inneholder flere filer. Pakken vil bli utpakket automatisk etter opplasting. Du bør ikke inkludere pakkede kataloger eller underkataloger i pakken. Husk at prosessen kan overskrive filer i DocMan filkatalogen som har samme filnavn, det finnes ingen overskrivingsbeskyttelse når man bruker filpakker. Dette er en eksprimentel funksjon, og du bør bruke den forsiktig.");

DEFINE("_DML_DOCMANISTRANSF" 	, "DOCMan overfører<br />filen");
DEFINE("_DML_TRANSFERFROMWEB" 	, _DML_UPLOADWIZARD . " - " . "overfører en fil fra en webserver");
DEFINE("_DML_REMOTEURL" 		, "Nettadresse");
DEFINE("_DML_LINKURLTT" 		, "Skriv inn nettadressen du vil koble til. Nettadressen må inneholde http:// eller ftp:// og annen nødvendig informasjon for tilkobling. For eksempel: http://mamboforge.net/frs/download.php/2026/docmanV1.3.zip.");
DEFINE("_DML_REMOTEURLTT" 		, _DML_LINKURLTT . "<br />Du kan navngi filen slik du ønsker på dette systemet ved å bruke &quot;Lokalt navn&quot;-feltet.");
DEFINE("_DML_LOCALNAME" 		, "Lokalt navn");
DEFINE("_DML_LOCALNAMETT" 		, "Skriv inn lokalt navn for filen slik du vil lagre den på dette systemet."
     . "Dette er et påkrevd felt siden nettadressen ikke gir tilstrekkelig informasjon for filen.");
DEFINE("_DML_DOCUPDATED" 		, "Fil har blitt oppdatert.");
DEFINE("_DML_FILEUPLOADED" 		, "Fil har blitt lastet opp.");
DEFINE("_DML_MAKENEWENTRY" 		, "Lag en ny filoppføring med denne filen.");
DEFINE("_DML_DISPLAYFILES" 		, "Vis filer.");
DEFINE("_DML_ALLFILES" 			, "Alle filer");
DEFINE("_DML_DOCFILES" 			, "Dokumentfiler");
DEFINE("_DML_CREATEALINK" 		, "Opprett en lenket fil");
DEFINE("_DML_SELECTMETHODFIRST" , "Velg en metode for filoverføring");
DEFINE("_DML_ERROR_UPLOADING" 	, "Feil under opplasting.");
DEFINE("_DML_ZLIB_ERROR" 		, "Operasjonen kunne ikke fortsette siden zlib biblioteket ikke finnes i php.");
DEFINE("_DML_UNZIP_ERROR" 		, "Kunne ikke pakke ut filene.");
DEFINE("_DML_SUBMIT" 			, "Last opp");
DEFINE("_DML_SELECT_FILE" 		, "Velg en fil:");

// -- Documents
DEFINE("_DML_MOVECAT" 			, "Flytt kategori");
DEFINE("_DML_MOVETOCAT" 		, "Flytt til kategori");
DEFINE("_DML_DOCSMOVED" 		, "Filer blir flyttet");
DEFINE("_DML_DOCS_NOT_APPROVED" , "filer ikke godkjent");
DEFINE("_DML_DOCS_NOT_PUBLISHED", "filer ikke publisert");
DEFINE("_DML_NO_PENDING_DOCS" 	, "Ingen ventende filer.");
DEFINE("_DML_FILE_MISSING" 		, "***fil mangler***");
DEFINE("_DML_YOU_MUST_UPLOAD" 	, "Du må laste opp en fil for denne seksjonen først.");
DEFINE("_DML_THE_MODULE" 		, "Modulen");
DEFINE("_DML_IS_BEING" 			, "blir for øyeblikket redigert av en annen administrator");
DEFINE("_DML_NO_LICENSE" 		, "ingen lisens");
DEFINE("_DML_LINKED" 			, "->LENKET FIL<-");
DEFINE("_DML_CURRENT" 			, "Gjeldende");
DEFINE("_DML_LICENSE_TYPE" 		, "Lisenstype");
DEFINE("_DML_FILETITLE" 		, "Filtittel");
DEFINE("_DML_OWNER_TOOLTIP" , "Dette bestemmer hvem som kan laste ned og se filen. Velg: "
     . "*Alle* om du vil at alle skal ha tilgang til filen. "
     . "*Alle registrerte bruker* gir bare brukere som har en konto på din side tilgang til filen. "
     . "Du kan tildele filen til en enkelt registrert bruker ved å velge et navn " . _DML_USERS . "; "
     . "bare den brukeren vil ha tilgang til filen. "
     . "Du kan tildele filen til en gruppe registrerte bruker ved å velge gruppe under " . _DML_GROUPS . "; "
     . "bare denne gruppens medlemmer vil ha tilgang til filen.");
DEFINE("_MANT_TOOLTIP" 			, "Dette bestemmer hvem som kan redigere, eller vedlikeholde filen. "
     . "Når en bruker, eller medlemm av en gruppe, er " . _DML_MAINTAINER . " av en fil betyr det at de kan bruke følgende valg for filbehandling: rediger, oppdater, flytt, sjekk inn/ut og slett.");
DEFINE("_DML_MAKE_SURE" 		, 'Husk å starte nettadressen<br />med "http://"');
DEFINE("_DML_DOCURL" 			, "Nettadresse til fil:");
DEFINE("_DML_DOCURL_TOOLTIP" 	, "Når du har LENKEDE filer må du fylle inn nettsideadressen (URL) for filen her. Inkluder alltid http:// eller ftp:// på begynnelsen.");
DEFINE("_DML_HOMEPAGE_TOOLTIP" 	, "Du kan om du ønsker fylle inn en nettsideadresse (URL) for informasjon som er relatert til denne filen. Inkluder alltid http:// på begynnelsen ellers vil den ikke virke.");
DEFINE("_DML_LICENSE_TOOLTIP" 	, "En fil kan ha en lisensavtale tilknyttet, som må aksepteres av de som vil ha tilgang til filen. Her kan du definere lisenstypen.");
DEFINE("_DML_DISPLAY_LICENSE" , "Vis lisensavtale ved visning");
DEFINE("_DML_DISPLAY_LIC_TOOLTIP" , "Velg`*ja* om du vil vise lisensavtale for bruker før tilgang gis.");
DEFINE("_DML_APPROVED_TOOLTIP" , "En fil må godkjennes før den vises og er tilgjengelig i fillisten. Svar *ja* her og ikke glem å publisere den også! Begge valg må velges for at filen skal vises på brukersidene");
DEFINE("_DML_PLEASE_SEL_CAT"        , "Vennligst opprett minst en kategori først");
DEFINE("_DML_MANT_TOOLTIP" 		, "Dette bestemmer hvem som kan endre eller vedlikeholde filoppføringen. "
     . "Når en bruker, eller et medlemm av en gruppe, er " . _DML_MAINTAINER . " av en fil betyr det at de kan bruke følgende filbehandlingsvalg: endre, oppdatere, flytte, sjekke inn/ut og slette.");
DEFINE("_DML_DISPLAY_LIC" 		, "Vis lisensavtale");

DEFINE("_DML_TAB_PERMISSIONS" 	, "Rettigheter");
DEFINE("_DML_TAB_LICENSE" 		, "Lisens");
DEFINE("_DML_TAB_DETAILS" 		, "Detaljer");
DEFINE("_DML_TAB_PARAMS" 		, "Parametre");

DEFINE("_DML_TITLE_DOCINFORMATION",	"Filinformasjon");
DEFINE("_DML_TITLE_DOCPERMISSIONS", "Filrettigheter");
DEFINE("_DML_TITLE_DOCLICENSES"   , "Fillisenser");
DEFINE("_DML_TITLE_DOCDETAILS"	  , "Fildetaljer");
DEFINE("_DML_TITLE_DOCPARAMETERS" , "Filparametre");

DEFINE("_DML_CREATED_BY" 		, "Opprettet av");
DEFINE("_DML_UPDATED_BY" 		, "Sist oppdatert av");
DEFINE("_DML_SELECT_ITEM_DEL" 	, "Velg objekt som skal slettes");
DEFINE("_DML_SELECT_ITEM_MOVE" 	, "Velg objekt som skal flyttes");
DEFINE("_STATUS_YOU"     		, "Denne filen er sjekket ut av deg.");
DEFINE("_STATUS_NOT_OUT" 		, "Denne filen er ikke sjekket ut.");

// -- Categories
DEFINE("_DML_CATDETAILS" 		, "Kategoridetaljer");
DEFINE("_DML_CATTITLE" 			, "Kategoritittel");
DEFINE("_DML_CATNAME" 			, "Kategorinavn");
DEFINE("_DML_LONGNAME" 			, "Et langt navn til å vise i headings");
DEFINE("_DML_PARENTITEM" 		, "Overordnet objekt");
DEFINE("_DML_IMAGE" 			, "Bilde");
DEFINE("_DML_PREVIEW" 			, "Forhåndsvisning");
DEFINE("_DML_IMAGEPOS" 			, "Bildeposisjon");
DEFINE("_DML_ORDERING" 			, "Sortering");
DEFINE("_DML_ACCESSLEVEL" 		, "Tilgangsnivå");
DEFINE("_DML_CREATEMENUITEM"	, "Dette vil opprette et nytt menypunkt i menyen du velger");
DEFINE("_DML_SELECTMENU" 		, "Velg en meny");
DEFINE("_DML_SELECTMENUTYPE"	, "Velg en menytype");
DEFINE("_DML_MENUITEMNAME" 		, "Meny objektnavn");
DEFINE("_DML_SELECTCATTO" 		, "Velg kategori til");
DEFINE("_DML_REORDER" 			, "Sorter");
DEFINE("_DML_ACCESS" 			, "Tilgang");
DEFINE("_DML_CAT_MUST_SELECT_NAME" , "Kategorien må ha et navn");

// -- Groups
DEFINE("_DML_TITLE_GROUPS" 		, "Grupper");
DEFINE("_DML_CANNOT_DEL_GROUP" 	, "Kan ikke slette en gruppe for øyeblikket, dette siden en fil er eiet av denne.");
DEFINE("_DML_USERS_AVAILABLE" 	, "Brukere tilgjengelig");
DEFINE("_DML_MEMBERS_IN_GROUP" 	, "Medlemmer i denne gruppen");
DEFINE("_DML_ADD_GROUP_TIP" 	, "Dobbelklikk på et navn, eller velg et og bruk pilen, for å legge til/slette et brukermedlem. "
     . "For å velge mer enn et medlem av gangen: " . _DML_MULTIPLE_SELECTS);
DEFINE("_DML_ADDING_USERS" 		, "Legge til brukermedlemmer til grupper");
DEFINE("_DML_FILL_FORM" 		, "Du må fylle ut skjema riktig");
DEFINE("_DML_ONLY_ADMIN_EMAIL" 	, "Bare en Superadministrator kan masseutsende e-post!");
DEFINE("_DML_NO_TARGET_EMAIL" 	, "Det finnes ingen brukere med gyldige e-postadresser i gruppen");
DEFINE("_DML_THIS_IS" 			, "Dette er en e-postmelding fra");
DEFINE("_DML_SENT_BY" 			, "sendt av DOCMan til medlemmene av filgruppen");
DEFINE("_DML_EMAIL_SENT_TO" 	, "E-post sendt til");
DEFINE("_DML_MEMBERS" 			, "Medlemmer");
DEFINE("_DML_EMAIL"				, "E-post");

// -- Licenses
DEFINE("_DML_LICENSE_TEXT" 		, "Lisenstekst");
DEFINE("_DML_CANNOT_DEL_LICENSE", "Kan ikke slette lisens siden en fil bruker den.");

// -- Config
DEFINE("_DML_VERSION" 			, "Versjon");
DEFINE("_DML_FRONTEND" 			, "Forside");
DEFINE("_DML_PERMISSIONS" 		, "Rettigheter");
DEFINE("_DML_RESETDEFAULT" 		, "Gjenopprett standard");
DEFINE("_DML_ASCENDENT" 		, "Stigende");
DEFINE("_DML_DESCENDENT" 		, "Synkende");

DEFINE("_DML_CONFIGURATION" 	, "DOCMan konfigurasjon");
DEFINE("_DML_CONFIG_UPDATED" 	, "Konfigurasjonsdetajene har blitt oppdatert.");
DEFINE("_DML_CONFIG_WARNING" 	, "ADVARSEL: Konfigurasjon er oppdatert, men maks filstørrelse for opplasting er større enn PHP maksimum: ");
DEFINE("_DML_CONFIG_ERROR" 		, "En feil har oppstått: Konfigurasjonsfilen kan ikke åpnes for skriving!");
DEFINE("_DML_CONFIG_ERROR_UPLOAD", "FEIL: Maks filstørrelse for opplasting kan ikke være negativ.");

DEFINE("_DML_CFG_DOCMANTT" 		, "DOCMan verktøytips...");
DEFINE("_DML_CFG_ALLOWBLANKS" 	, "Tillate mellomrom");
DEFINE("_DML_CFG_REJECT" 		, "Avvis");
DEFINE("_DML_CFG_CONVERTUNDER" 	, "Konverter til understreking");
DEFINE("_DML_CFG_CONVERTDASH" 	, "Konverter til dash");
DEFINE("_DML_CFG_REMOVEBLANKS" 	, "Fjern mellomrom");
DEFINE("_DML_CFG_PATHFORSTORING", "Sti for fillagring");
DEFINE("_DML_CFG_PATHTT" 		, "Her skal du angi den lokale mappen hvor alle filene skal lagres. Dette skal være den fulle stibanen. Du kan akseptere standard verdien, eller om du foretrekker en annen filmappe angir du full sti til den her.<br /><br />"
     . "For eksempel, på et *NIX system kan dette være /var/usr/www/dmdocuments<br /><br />"
     . "Om du bruker en windows basert server kan du f.eks bruke c:/inetpub/www/dmdocuments");
DEFINE("_DML_CFG_SECTIONISDOWN" , "Seksjon er nede?");
DEFINE("_DML_CFG_SECTIONTT" 	, "Om du vil hindre tilgang til fil-listen for vanlige brukere, sett dette valget til *Ja*. <br />"
     . "Dette er nyttig ved testing eller oppgraderinger.<br /><br />"
     . "Administratorer og spesielle brukere vil alltid ha tilgang selv om valget er satt til *Nei*. <br />"
    );
DEFINE("_DML_CFG_NUMBEROFDOCS" 	, "Antall filer per side");
DEFINE("_DML_CFG_NUMBERTT" 		, "Antall filer som skal vises på en side. Om det totale antall filer er høyere enn dette, vil en sideliste bli vist for enklere navigasjon.");

DEFINE("_DML_CFG_GUEST" 		, "Gjester");
DEFINE("_DML_CFG_GUEST_NO" 		, "Ingen adgang");
DEFINE("_DML_CFG_GUEST_X" 		, "Bare navigere");
DEFINE("_DML_CFG_GUEST_RX" 		, "Navigere, laste ned og se");
DEFINE("_DML_CFG_GUEST_TT" 		, "Dette bestemmer hva gjester (ikke registrerte brukere) kan gjøre: <br />*"
     . _DML_CFG_GUEST_NO . "* Ingen filer vises<br />*"
     . _DML_CFG_GUEST_X . "* Tillater dem å se at filer eksisterer, men gir ikke adgang til dem. <br />*"
     . _DML_CFG_GUEST_RX . "* Tillater dem å se at filene eksisterer, og gir adgang til dem."
     . "<br /><br />Denne rettigheten er i tillegg til en individuell filtilgangrettighet."
     . "</span>");

DEFINE("_DML_CFG_AUTHOR_NONE" 	, "Ingen adgang");
DEFINE("_DML_CFG_AUTHOR_READ" 	, "Bare nedlasting");
DEFINE("_DML_CFG_AUTHOR_BOTH"	, "Nedlasting og redigering");

DEFINE("_DML_CFG_ICONSIZE" 		, "Ikonstørrelse");
DEFINE("_DML_CFG_DAYSFORNEW" 	, "Dager for ny");
DEFINE("_DML_CFG_DAYSFORNEWTT" 	, "Antall dager en fil blir sett på som ny. Viser: *" . _DML_NEW . "*, ved siden av filnavnet når listen av filer vises. Om verdien settes til 0 vil ikke " . _DML_NEW . " vises.");
DEFINE("_DML_CFG_HOT" 			, "Populære nedlastninger");
DEFINE("_DML_CFG_HOTTT" 		, "Antallet nedlastninger som må til for at en fil blir satt som populært. Viser *" . _DML_HOT . "* nær filnavnet når det totale antallet nedlastninger når verdien. Om verdien er satt til null, vil ikke " . _DML_HOT . " vises.");
DEFINE("_DML_CFG_DISPLAYLICENSES" , "Vis lisens?");

DEFINE("_DML_CFG_VIEW" 				, "Vis");
DEFINE("_DML_CFG_VIEWTT" 			, "Setter hvilken bruker/gruppe som har tilgang til å laste ned og vise filer. Det er mulig å overstyre dette for hver enkelt fil.");
DEFINE("_DML_CFG_MAINTAIN" 			, "Vedlikeholde");
DEFINE("_DML_CFG_MAINTAINTT" 		, "Setter hvilken bruker/gruppe som har tilgang til å vedlikeholde filen. Det er mulig å overstyre dette for hver enkel fil.");
DEFINE("_DML_CFG_CREATORS_PERM" 	, "Opphavspersonen kan");
DEFINE("_DML_CFG_CREATORSPERMTT" 	, "Dette setter globalt hva opphavspersonen har rettigheter til å gjøre.<br /><br />"
     . "Dette er et tillegg til rettighetene gitt av Vises for og Vedlikeholder feltene for hver fil.");
DEFINE("_DML_CFG_WHOCANAREADER" 	, "Last ned");
DEFINE("_DML_CFG_WHOCANAREADERTT" 	, "Dette lar deg bestemme om opphavsperson/vedlikeholder av filen kan endre hvem som kan se filen.<br /><br />"
     . "N.B.: Administratorer kan alltid endre rettighetene for hvem som kan se filen.");
DEFINE("_DML_CFG_WHOCANAEDITOR" 	, "Rediger");
DEFINE("_DML_CFG_WHOCANAEDITORTT" 	, "Dette lar deg bestemme om opphavsperson/vedlikeholder kan endre hvem som kan vedlikeholde filen.<br /><br />"
     . "N.B.: Administratorer kan allid endre rettighetene for hvem som kan vedlikeholde filen.");

DEFINE("_DML_CFG_EMAILGROUP" 	, "Sende e-post til gruppens brukere?");
DEFINE("_DML_CFG_EMAILGROUPTT" 	, "Hvis *ja*, og første alternativ er *ja*, vil en link vises på hver fil, hvor brukeren som medlem av gruppen som eier filen, kan sende en e-post for å diskutere.");

DEFINE("_DML_CFG_UPLOAD" 		, "Last opp");
DEFINE("_DML_CFG_UPLOADTT" 		, "Dette lar deg sette hvilken bruker/gruppe som kan laste opp filer. Alle opplastningsmetoder (http, linker og direkte overføring) blir styrt av dette valget.");
DEFINE("_DML_CFG_APPROVE" 		, "Godkjenne");
DEFINE("_DML_CFG_APPROVETT" 	, "Dette lar deg sette hvilken bruker/gruppe som kan godkjenne filer.<br />Filer må bli godkjent og publisert, før de er tilgjengelig for nedlastning.");
DEFINE("_DML_CFG_PUBLISH" 		, "Publiser");
DEFINE("_DML_CFG_PUBLISHTT" 	, "Dette lar deg sette hvilken bruker/gruppe som kan publisere filer.<br />Filer må bli godkjent og publisert, før de er tilgjengelig for nedlastning.");
DEFINE("_DML_CFG_USER_UPLOAD" 		, "Velg hvem som kan laste opp");
DEFINE("_DML_CFG_USER_APPROVE" 		, "Velg hvem som kan godkjenne");
DEFINE("_DML_CFG_USER_PUBLISH" 		, "Velg hvem som kan publisere");

DEFINE("_DML_CFG_EXTALLOWED" 	, "Tillate utvidelser");
DEFINE("_DML_CFG_EXTALLOWEDTT" 	, "Filtyper som er tillat, separert med |. Backend-brukere kan laste opp alle filtyper.");
DEFINE("_DML_CFG_MAXFILESIZE" 	, "Maks filstørrelse tillat for opplastning.");
DEFINE("_DML_CFG_MAXFILESIZETT" , "Maks tillatt filstørrelse for opplastning via frontend. Om ønskelig kan du bruke K/M/G for å angi størrelse..<br />Denne grensen gjelder ikke (admin)opplastning via backend. <br /><hr />PHP konfigurasjonsverdien , upload_max_filesize, vil også gjelde. Den er satt til ");
DEFINE("_DML_CFG_USERCANUPLOAD" , "Bruker kan laste opp alle filtyper?");
DEFINE("_DML_CFG_USERCANUPLOADTT" 	, "Hvis *ja*, og forrige *bruker opplastning* var *ja* kan registrerte brukere laste opp alle typer filer, og dermed ignorere tidligere restriksjoner.");
DEFINE("_DML_CFG_OVERWRITEFILES" 	, "Skrive over filer?");
DEFINE("_DML_CFG_OVERWRITEFILESTT" 	, "Hvis ja, vil eksisterende fil(er) bli skrevet over ved opplastninger med filnavn som er lik(e).");
DEFINE("_DML_CFG_LOWERCASE" 		, "Filnavn med små bokstaver?");
DEFINE("_DML_CFG_LOWERCASETT" 		, "Hvis *ja* vil opplastede filer bli konvertert til filnavn med små bokstaver. F.eks.&nbsp;DinFil.TXT vil bli dinfil.txt.<br />Hvis *nei*, vil filnavn bli lagret både med store og små bokstaver.");
DEFINE("_DML_CFG_FILENAMEBLANKS" 	, "Filnavn med mellomrom");
DEFINE("_DML_CFG_FILENAMEBLANKSTT" 	, "Håndtering av filnavn som inneholder mellomrom:<br />"
     . "*Tillate mellomrom* vil lagre filene med mellomrom.<br />"
     . "*Forkaste* vil ikke tillate filnavn med mellomrom å bli lastet opp.<br /><br />"
     . "Du kan alternativt få konvertert mellomrom til nedestrek (_), bindestrek (-), eller fjerne mellomrommene fra filnavnet.");
DEFINE("_DML_CFG_REJECTFILENAMES" 	, "Forkaste filnavn");
DEFINE("_DML_CFG_REJECTFILENAMESTT" , "Skriv inn en liste med filnavn som det ikke er tillatt å laste opp, med | (pipe) som separator. Dette er filnavn som har en spesiell betydning for systemet.<br /> Du kan også bruke tegn mellom to pipes for å stoppe tegn som lager trøbbel. (F.eks: * $ ?)");
DEFINE("_DML_CFG_UPMETHODS" 		, "Opplastningsmetoder?");
DEFINE("_DML_CFG_UPMETHODSTT" 		, "Velg opplastningsmetode brukerne kan bruke. For multiple metoder, " . _DML_MULTIPLE_SELECTS);

DEFINE("_DML_CFG_ANTILEECH" 		, "Anti-leech system?");
DEFINE("_DML_CFG_ANTILEECHTT" 		, "Anti-leech systemet hindrer uautorisert linking til din fil."
     . "Ved *ja* vil alle (http)forespørsler bli sjekket for å se om forespørslen(laste ned  "
     . "/ vise) kom fra et system som ligger innenfor tillate verter. Hvis forespørslen er "
     . " utenfor vil det ikke bli gitt tilgang. Dette beskytter våre "
     . " filer fra å bli misbrukt av andres sine systemer til deres fortjeneste.<br /><br />"
     . "N.B. DocMAN støtter direkte linking mellom systemer. "
     . "Om du bruker denne muligheten, sørg for at systemene ligger i listen over Tillate verter."
    );
DEFINE("_DML_CFG_ALLOWEDHOSTS" 		, "Tillate verter");
DEFINE("_DML_CFG_ALLOWEDHOSTSTT" 	, "En liste av verter som kan spørre etter filer når anti-leech systemet er aktivert. Om du ønsker flere verter tilgang til filene, så bruk | (pipe) som separator mellom de ulike vertene.<br />Normalt vil standardverdi her være sikker.");

DEFINE("_DML_CFG_LOG" 	, "Loggfør visninger?");
DEFINE("_DML_CFG_LOGTT" , "Dette loggfører vertens ip-adresse, dato, tidspunkt og hvilken fil verten ønsket å vise. "
     . "Mye data vil bli lagt til i din database om dette valget er aktivert.<hr />"
     . "Det er tilgjengelige Mamboter for utvide loggingsmulighetene.");

DEFINE("_DML_CFG_UPDATESERVER" 		, "Oppgrader DOCMan");
DEFINE("_DML_CFG_UPDATESERVERTT" 	, "DOCMan kan oppgradere seg selv over web, i tillegg til å installere nye DOCMan relaterte moduler, tilleggsmoduler og boter. Selv database-endringer kan gjøres on-the-fly som endel av oppgraderingen. Her kan du skrive inn url til DOCMan sin oppgraderingsserver. Forhåpentligvis vil standardverdi være korrekt her.");
DEFINE("_DML_CFG_DEFAULTLISTING" 	, "Standard visningsrekkefølge");
DEFINE("_DML_CFG_TRIMWHITESPACE" 	, "Fjern tomrom");
DEFINE("_DML_CFG_TRIMWHITESPACETT" 	, "Fjern innledende tomrom og blanke linjer fra tema, som rydder opp koden og sparer båndbredde.");

DEFINE("_DML_CFG_ERR_DOCPATH" 		, 'Tab [' . _DML_GENERAL . '] \'' . _DML_CFG_PATHFORSTORING . '\' må være gitt.');
DEFINE("_DML_CFG_ERR_PERPAGE" 		, 'Tab [' . _DML_FRONTEND . '] \'' . _DML_CFG_NUMBEROFDOCS . '\' må være numerisk og større enn null.');
DEFINE("_DML_CFG_ERR_NEW" 			, 'Tab [' . _DML_FRONTEND . '] \'' . _DML_CFG_DAYSFORNEW . '\' må være numerisk og null eller større.');
DEFINE("_DML_CFG_ERR_HOT" 			, 'Tab [' . _DML_FRONTEND . '] \'' . _DML_CFG_HOT . '\' må være numerisk og null eller større.');
DEFINE("_DML_CFG_ERR_UPLOAD" 		, 'Tab [' . _DML_PERMISSIONS . '] \'' . _DML_CFG_UPLOAD . '\': Velg hvem som kan laste opp filer.');
DEFINE("_DML_CFG_ERR_APPROVE" 		, 'Tab [' . _DML_PERMISSIONS . '] \'' . _DML_CFG_APPROVE . '\': Velg hvem som kan godkjenne filer.');
DEFINE("_DML_CFG_ERR_DOWNLOAD" 		, 'Tab [' . _DML_PERMISSIONS . '] \'' . _DML_CFG_VIEW . '\': Velg en standard bruker/gruppe.');
DEFINE("_DML_CFG_ERR_EDIT" 			, 'Tab [' . _DML_PERMISSIONS . '] \'' . _DML_CFG_MAINTAIN . '\': Velg en standard bruker/gruppe for filvedlikehold.');
DEFINE("_DML_CFG_EXTENSIONSVIEWING" , "Tillegg for visning");
DEFINE("_DML_CFG_EXTENSIONSVIEWINGTT" , "Filtyper som kan bli vist. Bruk blank for ingen, * for alle, eller noter ned de som er tillatte og bruk | (pipe) for å separere de med, f.eks. (txt|pdf).");

// -- Statistics
DEFINE("_DML_STATS" 	, "Statistikker");
DEFINE("_DML_DOCSTATS" 	, "DOCMan statistikker - Topp 50 nedlastinger");
DEFINE("_DML_RANK" 		, "Rangering");

// -- Logs
DEFINE("_DML_DOWNLOAD_LOGS"	, "Nedlastingslogger");
DEFINE("_DML_IP" 			, "IP");
DEFINE("_DML_BROWSER" 		, "Nettleser");
DEFINE("_DML_OS" 			, "Operativsystem");
DEFINE("_DML_ANONYMOUS" 	, "Anonym");

// -- Updates
DEFINE("_DML_UPGRADE" 			, "Oppgradering");
DEFINE("_DML_YOU_HAVE_VERSION" 	, "du har versjon");
DEFINE("_DML_UPTODATE" 			, "Din versjon er oppdatert.");
DEFINE("_DML_NO_UP_AVAIL" 		, "Ingen oppdateringer finnes for øyeblikket.");
DEFINE("_DML_COULD_NOT_COPY" 	, "Kunne ikke kopiere alle filer til deres mapper, sjekk rettigheter. Stoppet på fil");
DEFINE("_DML_UPDATING_DB" 		, "Oppdaterer database...");
DEFINE("_DML_DELETING_OLD" 		, "Sletter gamle filer...");
DEFINE("_DML_ERROR_DELETING_OLD", "Feil ved sletting av gamle filer. Ingen kritisk feil.");
DEFINE("_DML_PACKAGE" 			, "Pakke");
DEFINE("_DML_INST_CLICK" 		, "installert. Klikk");
DEFINE("_DML_HERE" 				, "her");
DEFINE("_DML_TO_CONT" 			, "for å fortsette");
DEFINE("_DML_ERROR_READING" 	, "feil ved lesing");
DEFINE("_DML_XML_ERROR" 		, "XML-fil ugyldig");
DEFINE("_DML_CHECKING_UP" 		, "Ser etter oppdateringer");
DEFINE("_DML_RELEASED_ON" 		, "Utgitt");

// -- Themes
DEFINE("_DML_THEMES" 			, "Temaer");
DEFINE("_DML_THEME_INSTALLED" 	, "Tema installert.");
DEFINE("_DML_ADJUST_CONFIG" 	, "Rediger konfigurasjon.");

?>