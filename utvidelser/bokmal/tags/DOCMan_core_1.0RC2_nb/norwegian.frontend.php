<?php
/*
* DOCMan 1.3.0 for Mambo 4.5.1 CMS
* @version $Id: norwegian.frontend.php,v 1.0 2006/03/19 01:28:23 rued Exp $
* @package DOCMan_1.3.0
* @copyright (C) 2003 - 2005 The DOCMan Development Team
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Oficial website: http://www.mambodocman.com/
* -------------------------------------------
* Norwegian language file
* Translator: Rune Rasmussen - http://www.syntaxerror.no/
* Email: nospam@syntaxerror.no
* Revision: 1.1
* Date: 2006.03.19
*/
// ensure this file is being included by a parent file */
defined("_VALID_MOS") or die("Direct Access to this location is not allowed.");

// -- General
DEFINE("_DML_NOLOG" 			, "Du må være innlogget for å få adgang til filene.");
DEFINE("_DML_NOLOG_UPLOAD" 		, "Du må være innlogget og autorisert for å laste opp filer.");
DEFINE("_DML_NOLOG_DOWNLOAD" 	, "Du må være innlogget og autorisert for å få adgang til filene.");
DEFINE("_DML_ISDOWN" 			, "Beklager, denne delen er midlertidig nede for vedlikehold. Prøv igjen senere.");
DEFINE("_DML_SECTION_TITLE" 	, "Nedlastinger");

// -- Files
DEFINE("_DML_DOCLINKTO" 	, "Fil lenket til ");
DEFINE("_DML_DOCLINKON" 	, "Lenke opprettet ");
DEFINE("_DML_ERROR_LINKING" , "Feil ved tilkobling til tjener.");
DEFINE("_DML_LINKTO" 		, "Lenke til ");
DEFINE("_DML_DONE" 			, "Utført!");

// -- Documents
DEFINE("_DML_TAB_PERMISSIONS" 	, "Rettigheter");
DEFINE("_DML_TAB_LICENSE" 		, "Lisens");
DEFINE("_DML_TAB_DETAILS" 		, "Detaljer");
DEFINE("_DML_TAB_PARAMS" 		, "Parametre");
DEFINE("_DML_OP_CANCELED" 		, "Handling avbrutt");
DEFINE("_DML_CREATED_BY" 		, "Opprettet av");
DEFINE("_DML_UPDATED_BY" 		, "Sist oppdatert av");
DEFINE("_DML_DOCMOVED" 			, "Filen har blitt flyttet");
DEFINE("_DML_MOVETO" 			, "Flytt til");
DEFINE("_DML_MOVETHEFILES" 		, "Flytt filene");
DEFINE("_DML_SELECTFILE"		, "Velg en fil");
DEFINE("_DML_THANKSDOCMAN" 		, "Takk for ditt tillegg.");
DEFINE("_DML_NO_LICENSE" 		, "ingen lisens");
DEFINE("_DML_DISPLAY_LIC" 		, "Vis betingelser");
DEFINE("_DML_LICENSE_TYPE" 		, "Lisenstype");
DEFINE("_DML_MANT_TOOLTIP" 		, "Dette bestemmer hvem som kan redigere, eller vedlikeholde filen. "
     . "Når en bruker, eller medlem av av en gruppe er " . _DML_MAINTAINER . " av en fil betyr det at de kan bruke disse behandlingsvalgene: rediger, oppdater, flytt, sjekk inn/ut og slett.");
DEFINE("_DML_ON" 				, "på");
DEFINE("_DML_CURRENT" 			, "Gjeldende");
DEFINE("_DML_YOU_MUST_UPLOAD" 	, "Du må laste opp en fil for denne seksjonen først.");
DEFINE("_DML_THE_MODULE" 		, "Modulen");
DEFINE("_DML_IS_BEING" 			, "blir for øyeblikket rediger av en annen administrator");
DEFINE("_DML_LINKED" 			, "->LENKET FIL<-");
DEFINE ("_DML_FILETITLE" 		, "Filtittel");
DEFINE("_DML_OWNER_TOOLTIP" , "Dette bestemmer hvem som kan laste ned og se filen. Velg: "
     . "*Alle* om du vil at alle skal ha tilgang til filen. "
     . "*Alle registrerte brukere* gir bare registrerte brukere tilgang til filen. "
     . "Du kan tildele filen til en enkelt bruker ved å velge navn under " . _DML_USERS . "; "
     . "bare den brukeren vil få tilgang til filen. "
     . "Du kan tildele filen til en gruppe brukere ved å velge gruppenavn under " . _DML_GROUPS . "; "
     . "bare denne gruppens medlemmer vil få tilgang til filen.");
DEFINE("_DML_MAKE_SURE" 		, 'Pass på å starte nettadressen<br />med "http://"');
DEFINE("_DML_DOCURL" 			, "Nettlenke til fil:");
DEFINE("_DML_DOCDELETED" 		, "Fil slettet.");
DEFINE("_DML_DOCURL_TOOLTIP" 	, "Når du har LENKEDE filer må du fylle inn nettsideadressen (URL) for filen her. Inkluder alltid http:// eller ftp:// på begynnelsen.");
DEFINE("_DML_HOMEPAGE_TOOLTIP" 	, "Du kan om du ønsker fylle inn en nettsideadresse (URL) for informasjon som er relatert til denne filen. Inkluder alltid http:// på begynnelsen ellers vil den ikke virke.");
DEFINE("_DML_LICENSE_TOOLTIP" 	, "En fil kan ha en lisensavtale tilknyttet, som må aksepteres av de som vil ha tilgang til filen. Her kan du definere lisenstypen.");
DEFINE("_DML_DISPLAY_LICENSE" 	, "Vis avtale/lisens ved visning");
DEFINE("_DML_DISPLAY_LIC_TOOLTIP" , "Velg`*ja* om du vil at lisens skal vises til bruker før tilgang gis.");
DEFINE("_DML_APPROVED_TOOLTIP" 	, "En fil må godkjennes før den vises og er tilgjengelig i fillisten. Svar *ja* her og ikke glem å publisere den også! Begge valg må angis før filen kan listes på brukersidene");
DEFINE("_DML_RESET_COUNTER"		,"Tilbakestill teller");

// -- Download
DEFINE("_DML_PROCEED" 	, "Klikk her for å fortsette");
DEFINE("_DML_YOU_MUST" 	, "Du må godta avtalen for å få tilgang til filen.");
DEFINE("_DML_NOTDOWN" 	, "Filen blir redigert/oppdatert av en annen bruker og er ikke tilgjengelig for øyeblikket.");
DEFINE("_DML_ANTILEECH_ACTIVE" , "Du prøver å få tilgang fra et ikke-autorisert domene.");
DEFINE("_DML_DONT_AGREE" 	, "Jeg samtykker ikke.");
DEFINE("_DML_AGREE" 		, "Jeg samtykker.");

// -- Upload
DEFINE("_DML_UPLOADED" 		, "opplastet.");
DEFINE("_DML_SUBMIT"		, "Legg til");
DEFINE("_DML_NEXT"			, "Neste >>>");
DEFINE("_DML_BACK"			, "<<< Tilbake");
DEFINE("_DML_LINK"			, "Lenke");
DEFINE("_DML_EDITDOC" 		, "Rediger denne filen");
DEFINE("_DML_UPLOADWIZARD" 	, "Opplastingsguide");
DEFINE("_DML_UPLOADMETHOD" 	, "Velg opplastingsmåte");
DEFINE("_DML_ISUPLOADING" 	, "DOCMan laster opp");
DEFINE("_DML_PLEASEWAIT" 	, "Vennligst vent");
DEFINE("_DML_DOCMANISLINKING" 	, "DOCMan sjekker<br />lenken");
DEFINE("_DML_DOCMANISTRANSF" 	, "DOCMan overfører<br />filen");
DEFINE("_DML_TRANSFER" 		, "Overfør");
DEFINE("_DML_REMOTEURL" 	, "Ekstern nettadresse");
DEFINE("_DML_LINKURLTT" 	, "Fyll inn den eksterne nettadressen som du vil koble til. Nettardessen må inneholde http:// eller ftp:// og all annen påkrevd tilgangsinnformasjon. For eksempel: http://mamboforge.net/frs/download.php/2026/docmanV1.3.zip.");
DEFINE("_DML_REMOTEURLTT" 	, _DML_LINKURLTT . "<br />Du kan kalle filen hva du vil på dette systemet ved å bruke &quot;Lokalt navn&quot;-feltet.");
DEFINE("_DML_LOCALNAME" 	, "Lokalt navn");
DEFINE("_DML_LOCALNAMETT" 	, "Fyll inn et lokalt navn på filen som du vil lagre den som på dette systemet."
     . "Dette er et påkrevd felt siden nettadressen ikke gir utfylende informasjon for filen.");
DEFINE("_DML_ERROR_UPLOADING" , "Feil ved opplasting.");

// -- Search
DEFINE("_DML_SELECCAT" 		, "Velg kategori");
DEFINE("_DML_ALLCATS" 		, "Alle kategorier");
DEFINE("_DML_SEARCH_WHERE" 	, "Søk hvor");
DEFINE("_DML_SEARCH_MODE" 	, "Søk etter");
DEFINE("_DML_SEARCH" 		, "Søk");
DEFINE("_DML_SEARCH_REVRS" 	, "Reverser");
DEFINE("_DML_SEARCH_REGEX" 	, "Vanlig uttrykk");
DEFINE("_DML_NOT" 			, "Ikke"); // Used for Inversion
?>