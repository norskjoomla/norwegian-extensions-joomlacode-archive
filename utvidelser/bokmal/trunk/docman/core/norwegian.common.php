<?php
/*
* DOCMan 1.3.0 for Mambo 4.5.1 CMS
* @version $Id: norwegian.common.php 60 2006-12-19 15:52:50Z rued $
* @package DOCMan_1.3.0
* @copyright (C) 2003 - 2005 The DOCMan Development Team
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Official website: http://www.mambodocman.com/
* -------------------------------------------
* Norwegian language file
* Translator: Rune Rasmussen - http://www.syntaxerror.no/ (rued)
* Email: nospam@syntaxerror.no
* Revision: 1.1
* Date: 2006.03.19
*/
// ensure this file is being included by a parent file */
defined("_VALID_MOS") or die("Direct Access to this location is not allowed.");

define ('_DM_DATEFORMAT_LONG','%d.%m.%Y %H:%M'); // use PHP strftime Format, more info at http://php.net
define ('_DM_DATEFORMAT_SHORT','%d.%m.%Y');		 // use PHP strftime Format, more info at http://php.net
define ('_DM_ISO','iso-8859-1');
define ('_DM_LANG','no');

// -- General
DEFINE("_DML_NAME"			, "Navn");
DEFINE("_DML_DATE"			, "Dato");
DEFINE("_DML_DATE_MODIFIED"	, "Endret dato");
DEFINE("_DML_HITS" 			, "Treff");
DEFINE("_DML_SIZE" 			, "Størrelse");
DEFINE("_DML_EXT" 			, "Endelse");
DEFINE("_DML_MIME" 			, "Type");
DEFINE("_DML_THUMBNAIL" 	, "Miniatyrbilde");
DEFINE("_DML_DESCRIPTION" 	, "Beskrivelse:");

DEFINE("_DML_FOLDER"		, "Mappe");
DEFINE("_DML_FOLDERS"		, "Mapper");
DEFINE("_DML_FILE" 			, "Fil");
DEFINE("_DML_FILES" 		, "Filer");

DEFINE("_DML_TOP" 			, "Topp");

DEFINE("_DML_DOC" 			, "Oppføring");
DEFINE("_DML_DOCS" 			, "Oppføringer");
DEFINE("_DML_DOCUMENT" 		, "Oppføring");

DEFINE("_DML_CAT" 			, "Kategori");
DEFINE("_DML_CATS" 			, "Kategorier");
DEFINE("_DML_CATEGORY" 		, "Kategori");

DEFINE("_DML_UPLOAD" 		, "Last opp");
DEFINE("_DML_SECURITY" 		, "Sikkerhet");
DEFINE("_DML_CPANEL" 		, "Kontrollpanel");
DEFINE("_DML_CONFIG" 		, "Konfigurasjon");
DEFINE("_DML_LICENSES" 		, "Lisenser");
DEFINE("_DML_UPDATES" 		, "Oppdateringer");
DEFINE("_DML_DOWNLOADS" 	, "Nedlastinger");

DEFINE("_DML_HOMEPAGE" 		, "Hjemmeside");

DEFINE("_DML_NO" 			, "Nei");
DEFINE("_DML_YES" 			, "Ja");
DEFINE("_DML_OK" 			, "OK");
DEFINE("_DML_CANCEL"		, "Avbryt");
DEFINE("_DML_ADD" 			, "Legg til");
DEFINE("_DML_EDIT"	 		, "Rediger");

DEFINE("_DML_APPROVED" 		, "Godkjent");
DEFINE("_DML_DELETED"		, "Slettet");

DEFINE("_DML_INSTALL" 		, "Installer");
DEFINE("_DML_PUBLISHED" 	, "Publisert");
DEFINE("_DML_UNPUBLISH" 	, "Upublisert");
DEFINE("_DML_CHECKED_OUT" 	, "Sjekket ut");

DEFINE("_DML_TOOLTIP"		, "Vertøytips");
DEFINE("_DML_FILTER_NAME" 	, "Sorter etter navn");

DEFINE("_DML_TITLE" 		, "Tittel");
DEFINE("_DML_MULTIPLE_SELECTS" , "hold nede <b>Ctrl</b> tasten (i Windows/Unix/Linux) eller <b>Command</b> tasten (på Mac) når du velger.");

DEFINE("_DML_USER" 			, "Bruker");
DEFINE("_DML_OWNER" 		, "Vises for");
DEFINE("_DML_CREATOR" 		, "Opphav");
DEFINE("_DML_EDITOR" 		, "Vedlikeholder");
DEFINE("_DML_MAINTAINER" 	, "Vedlikeholder");

DEFINE("_DML_FILEICON_ALT"	, "Filikon");

DEFINE("_DML_NOT_AUTHORIZED", "Ikke autorisert");

// -- HTML Class
DEFINE("_DML_SELECT_CAT" 	, "Velg kategori");
DEFINE("_DML_SELECT_DOC" 	, "Velg fil");
DEFINE("_DML_ALL_CATS" 		, "- Alle kategorier");
DEFINE("_DML_SELECT_USER" 	, "Velg bruker");
DEFINE("_DML_GENERAL" 		, "Generelt");
DEFINE("_DML_GROUPS" 		, "Grupper");
DEFINE("_DML_DOCMAN_GROUPS" , "Docman-grupper");
DEFINE("_DML_MAMBO_GROUPS" 	, "Joomla!-grupper");
DEFINE("_DML_USERS" 		, "Brukere");
DEFINE("_DML_EVERYBODY" 	, "Alle");
DEFINE("_DML_ALL_REGISTERED", "Alle registrerte brukere");
DEFINE("_DML_NO_USER_ACCESS", "Ingen brukertilgang");
DEFINE("_DML_AUTO_APPROVE" 	, "Autogodkjenn");
DEFINE("_DML_AUTO_PUBLISH" 	, "Autopubliser");
DEFINE("_DML_GROUP"			, " Gruppe");

// -- File Clas
DEFINE("_DML_OPTION_HTTP" 	, 'Last opp en fil fra din datamaskin');
DEFINE("_DML_OPTION_XFER" 	, 'Overfør en fil fra en annen server til denne');
DEFINE("_DML_OPTION_LINK" 	, 'Lenke til en fil på en annen server');
DEFINE("_DML_SIZEEXCEEDS" 	, "Størrelsen overskrider maks tillatt størrelse.");
DEFINE("_DML_ONLYPARTIAL" 	, "Bare en del av fil mottatt, prøv igjen.");
DEFINE("_DML_NOUPLOADED" 	, "Ingen fil opplastet.");
DEFINE("_DML_TRANSFERERROR" , "Overføring feilet");
DEFINE("_DML_DIRPROBLEM" 	, "Katalogproblem, kan ikke flytte fil.");
DEFINE("_DML_DIRPROBLEM2" 	, "Katalogproblem");
DEFINE("_DML_COULDNOTCONNECT" , "Kunne ikke koble til tjener");
DEFINE("_DML_COULDNOTOPEN" 	  , "Kunne ikke åpne målkatalog. Sjekk rettigheter.");
DEFINE("_DML_FILETYPE" 		, "Filtype");
DEFINE("_DML_NOTPERMITED" 	, "ikke tillatt");

DEFINE("_DML_ALREADYEXISTS" , "eksistrer allerede.");
DEFINE("_DML_PROTOCOL" 		, "Protokoll");
DEFINE("_DML_NOTSUPPORTED" 	, "ikke støttet.");
DEFINE("_DML_NOFILENAME" 	, "Ingen filnavn angitt.");
DEFINE("_DML_FILENAME" 		, "Filenavn");
DEFINE("_DML_CONTAINBLANKS" , "inneholder mellomrom.");
DEFINE("_DML_ISNOTVALID" 	, "er ikke et gyldig filnavn");
DEFINE("_DML_SELECTIMAGE" 	, "Velg bilde");
DEFINE("_DML_FAILEDTOCREATEDIR" , "Kunne ikke opprette katalog");
DEFINE("_DML_DIRNOTEXISTS" 	, "Katalog eksisterer ikke, kan ikke flytte filer");
DEFINE("_DML_TEMPLATEEMPTY" , "Mal-id er tom, kan ikke fjerne filer");
DEFINE("_DML_INTERRORMABOT" , "Intern feil: ingen mambot angitt");
DEFINE("_DML_NOTARGGIVEN" 	, "ikke nok argumenter gitt");
DEFINE("_DML_ARG" 			, "argument");
DEFINE("_DML_ISNOTARRAY" 	, "er ikke en oppstilling");

DEFINE("_DML_NEW" , "ny!");
DEFINE("_DML_HOT" , "het!");

// -- Form Validation
DEFINE("_DML_ENTRY_ERRORS" 	, "Systemmelding - Følgende feil må korrigeres:");
DEFINE("_DML_ENTRY_TITLE" 	, "Oppføring må ha en tittel.");
DEFINE("_DML_ENTRY_NAME" 	, "Oppføring må ha et navn.");
DEFINE("_DML_ENTRY_DATE" 	, "Oppføring må ha en dato.");
DEFINE("_DML_ENTRY_OWNER" 	, "Oppføring må ha en eier.");
DEFINE("_DML_ENTRY_CAT" 	, "Oppføring må ha en katgori.");
DEFINE("_DML_ENTRY_DOC" 	, "Oppføring må ha en valgt fil.");
DEFINE("_DML_ENTRY_MAINT" 	, "Oppføring må ha en vedlikeholder angitt.");

DEFINE("_DML_ENTRY_DOCLINK_LINK" 	, "Fil behøver å ha LENKE valgt. (Lenket fil på detaljer.)");
DEFINE("_DML_ENTRY_DOCLINK" 		, "Fil har både filnavn og lenke på detaljer.");
DEFINE("_DML_ENTRY_DOCLINK_PROTOCOL", "Ukjent protokoll for fillenke på detaljer");
DEFINE("_DML_ENTRY_DOCLINK_NAME" 	, "Behøver full fillenke på detaljer");
DEFINE("_DML_ENTRY_DOCLINK_HOST" 	, "En komplett nettadresse er påkrevd");
DEFINE("_DML_ENTRY_DOCLINK_INVALID" , "Fil ikke funnet");
?>