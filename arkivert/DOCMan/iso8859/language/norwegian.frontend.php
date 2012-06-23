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
 * E-mail:   nospam@syntaxerror.no
 * Revision: 1.4
 * Date:     September 2007
 **/

// -- General
define('_DML_NOLOG', "Du m� v�re innlogget for � f� adgang til filene.");
define('_DML_NOLOG_UPLOAD', "Du m� v�re innlogget og autorisert for � laste opp filer.");
define('_DML_NOLOG_DOWNLOAD', "Du m� v�re innlogget og autorisert for � f� adgang til filene.");
define('_DML_NOAPPROVED_DOWNLOAD', "Oppf�ringen m� godkjennes f�r nedlasting.");
define('_DML_NOPUBLISHED_DOWNLOAD', "Oppf�ringen publiseres f�r nedlasting.");
define('_DML_ISDOWN', "Beklager, denne delen er midlertidig nede for vedlikehold. Pr�v igjen senere.");
define('_DML_SECTION_TITLE', "Nedlastinger");

// -- Files
define('_DML_DOCLINKTO', "Fil lenket til ");
define('_DML_DOCLINKON', "Lenke opprettet ");
define('_DML_ERROR_LINKING', "Feil ved tilkobling til tjener.");
define('_DML_LINKTO', "Lenke til ");
define('_DML_DONE', "Utf�rt!");
define('_DML_FILE_UNAVAILABLE', "Filen er ikke tilgjengelig p� tjeneren");

// -- Documents
define('_DML_TAB_BASIC', "Enkel");
define('_DML_TAB_PERMISSIONS', "Rettigheter");
define('_DML_TAB_LICENSE', "Lisens");
define('_DML_TAB_DETAILS', "Detaljer");
define('_DML_TAB_PARAMS', "Parametre");
define('_DML_OP_CANCELED', "Handling avbrutt");
define('_DML_CREATED_BY', "Opprettet av");
define('_DML_UPDATED_BY', "Sist oppdatert av");
define('_DML_DOCMOVED', "Filen har blitt flyttet");
define('_DML_MOVETO', "Flytt til");
define('_DML_MOVETHEFILES', "Flytt filene");
define('_DML_SELECTFILE', "Velg en fil");
define('_DML_THANKSDOCMAN', "Takk for ditt tillegg.");
define('_DML_NO_LICENSE', "ingen lisens");
define('_DML_DISPLAY_LIC', "Vis betingelser");
define('_DML_LICENSE_TYPE', "Lisenstype");
define('_DML_MANT_TOOLTIP', "Dette bestemmer hvem som kan redigere, eller vedlikeholde filen. "
     . "N�r en bruker, eller medlem av av en gruppe er " . _DML_MAINTAINER . " av en fil betyr det at de kan bruke disse behandlingsvalgene: rediger, oppdater, flytt, sjekk inn/ut og slett.");
define('_DML_ON', "p�");
define('_DML_CURRENT', "Gjeldende");
define('_DML_YOU_MUST_UPLOAD', "Du m� laste opp en fil for denne seksjonen f�rst.");
define('_DML_THE_MODULE', "Modulen");
define('_DML_IS_BEING', "blir for �yeblikket rediger av en annen administrator");
define('_DML_LINKED', "->LENKET FIL<-");
define('_DML_FILETITLE', "Filtittel");
define('_DML_OWNER_TOOLTIP', "Dette bestemmer hvem som kan laste ned og se filen. Velg: "
     . "*Alle* om du vil at alle skal ha tilgang til filen. "
     . "*Alle registrerte brukere* gir bare registrerte brukere tilgang til filen. "
     . "Du kan tildele filen til en enkelt bruker ved � velge navn under " . _DML_USERS . "; "
     . "bare den brukeren vil f� tilgang til filen. "
     . "Du kan tildele filen til en gruppe brukere ved � velge gruppenavn under " . _DML_GROUPS . "; "
     . "bare denne gruppens medlemmer vil f� tilgang til filen.");
define('_DML_MAKE_SURE', "Pass p� � starte nettadressen<br />med \'http://\'");
define('_DML_DOCURL', "Nettlenke til fil:");
define('_DML_DOCDELETED', "Fil slettet.");
define('_DML_DOCURL_TOOLTIP', "N�r du har LENKEDE filer m� du fylle inn nettsideadressen (URL) for filen her. Inkluder alltid http:// eller ftp:// p� begynnelsen.");
define('_DML_HOMEPAGE_TOOLTIP', "Du kan om du �nsker fylle inn en nettsideadresse (URL) for informasjon som er relatert til denne filen. Inkluder alltid http:// p� begynnelsen ellers vil den ikke virke.");
define('_DML_LICENSE_TOOLTIP', "En fil kan ha en lisensavtale tilknyttet, som m� aksepteres av de som vil ha tilgang til filen. Her kan du definere lisenstypen.");
define('_DML_DISPLAY_LICENSE', "Vis avtale/lisens ved visning");
define('_DML_DISPLAY_LIC_TOOLTIP', "Velg`*ja* om du vil at lisens skal vises til bruker f�r tilgang gis.");
define('_DML_APPROVED_TOOLTIP', "En fil m� godkjennes f�r den vises og er tilgjengelig i fillisten. Svar *ja* her og ikke glem � publisere den ogs�! Begge valg m� angis f�r filen kan listes p� brukersidene");
define('_DML_RESET_COUNTER', "Tilbakestill teller");
define('_DML_PROBLEM_SAVING_DOCUMENT', "Problem ved lagring av oppf�ring");

// -- Download
define('_DML_PROCEED', "Klikk her for � fortsette");
define('_DML_YOU_MUST', "Du m� godta avtalen for � f� tilgang til filen.");
define('_DML_NOTDOWN', "Filen blir redigert/oppdatert av en annen bruker og er ikke tilgjengelig for �yeblikket.");
define('_DML_ANTILEECH_ACTIVE', "Du pr�ver � f� tilgang fra et ikke-autorisert domene.");
define('_DML_DONT_AGREE', "Jeg samtykker ikke.");
define('_DML_AGREE', "Jeg samtykker.");

// -- Upload
define('_DML_UPLOADED', "opplastet.");
define('_DML_SUBMIT', "Legg til");
define('_DML_NEXT', "Neste >>>");
define('_DML_BACK', "<<< Tilbake");
define('_DML_LINK', "Lenke");
define('_DML_EDITDOC', "Rediger denne filen");
define('_DML_UPLOADWIZARD', "Opplastingsguide");
define('_DML_UPLOADMETHOD', "Velg opplastingsm�te");
define('_DML_ISUPLOADING', "DOCman laster opp");
define('_DML_PLEASEWAIT', "Vennligst vent");
define('_DML_DOCMANISLINKING', "DOCman sjekker<br />lenken");
define('_DML_DOCMANISTRANSF', "DOCman overf�rer<br />filen");
define('_DML_TRANSFER', "Overf�r");
define('_DML_REMOTEURL', "Ekstern nettadresse");
define('_DML_LINKURLTT', "Fyll inn den eksterne nettadressen som du vil koble til. Nettardessen m� inneholde http:// eller ftp:// og all annen p�krevd tilgangsinnformasjon. For eksempel: http://mamboforge.net/frs/download.php/2026/DOCmanV1.3.zip.");
define('_DML_REMOTEURLTT', _DML_LINKURLTT . "<br />Du kan kalle filen hva du vil p� dette systemet ved � bruke &quot;Lokalt navn&quot;-feltet.");
define('_DML_LOCALNAME', "Lokalt navn");
define('_DML_LOCALNAMETT', "Fyll inn et lokalt navn p� filen som du vil lagre den som p� dette systemet."
     . "Dette er et p�krevd felt siden nettadressen ikke gir utfylende informasjon for filen.");
define('_DML_ERROR_UPLOADING', "Feil ved opplasting.");

// -- Search
define('_DML_SELECCAT', "Velg kategori");
define('_DML_ALLCATS', "Alle kategorier");
define('_DML_SEARCH_WHERE', "S�k hvor");
define('_DML_SEARCH_MODE', "S�k etter");
define('_DML_SEARCH', "S�k");
define('_DML_SEARCH_REVRS', "Reverser");
define('_DML_SEARCH_REGEX', "Vanlig uttrykk");
define('_DML_NOT', "Ikke"); // Used for Inversion

// -- E-mail
define('_DML_EMAIL_GROUP', "Send e-post til gruppe");
define('_DML_SUBJECT', "Emne");
define('_DML_EMAIL_LEADIN', "Innledende tekst");
define('_DML_MESSAGE', "Hovedmelding");
define('_DML_SEND_EMAIL', "Send");

//Document tasks
define('_DML_BUTTON_DOWNLOAD'  , "Last ned");
define('_DML_BUTTON_VIEW'      , "Se p�");
define('_DML_BUTTON_DETAILS'   , "Detaljer");
define('_DML_BUTTON_EDIT'      , "Rediger");
define('_DML_BUTTON_MOVE'      , "Flytt");
define('_DML_BUTTON_DELETE'    , "Slett");
define('_DML_BUTTON_UPDATE'    , "Oppdater");
define('_DML_BUTTON_CHECKOUT'  , "Sjekk ut");
define('_DML_BUTTON_CHECKIN'   , "Sjekk inn");
define('_DML_BUTTON_UNPUBLISH' , "Avpubliser");
define('_DML_BUTTON_PUBLISH'   , "Publiser");
define('_DML_BUTTON_RESET'     , "Tilbakestill");
define('_DML_BUTTON_APPROVE'   , "Godkjenn");

// -- Added v1.4.0 RC1
define('_DML_CHECKED_IN', "Sjekket inn");
