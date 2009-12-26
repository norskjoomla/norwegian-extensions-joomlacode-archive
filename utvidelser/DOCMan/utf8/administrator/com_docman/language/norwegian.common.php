<?php
/**
 * @version		$Id$
 * @category	DOCman
 * @package		DOCman15
 * @copyright	Copyright (C) 2003 - 2009 Johan Janssens and Mathias Verraes. All rights reserved.
 * @license		GNU GPLv2 <http://www.gnu.org/licenses/old-licenses/gpl-2.0.html>
 * @link     	http://www.joomladocman.org
 */
defined('_JEXEC') or die('Restricted access');

/**
 * TRANSLATORS:
 * PLEASE ADD THE INFO BELOW
 */

/**
 * Language: Norwegian
 * Creator: Rune Rasmussen
 * Website: http://www.syntaxerror.no
 * E-mail: nospam@syntaxerror.no
 * Revision: 1.5
 * Date: Desember 2009
 */

define ('_DM_DATEFORMAT_LONG', "%d.%m.%Y %H:%M"); // use PHP strftime Format, more info at http://php.net
define ('_DM_DATEFORMAT_SHORT', "%d.%m.%Y");		 // use PHP strftime Format, more info at http://php.net
define ('_DM_ISO', "utf-8");
define ('_DM_LANG', "no");

// -- General
define('_DML_NAME', "Navn");
define('_DML_DATE', "Dato");
define('_DML_DATE_MODIFIED', "Endret");
define('_DML_HITS', "Treff");
define('_DML_SIZE', "Størrelse");
define('_DML_EXT', "Endelse");
define('_DML_MIME', "Type");
define('_DML_THUMBNAIL', "Miniatyrbilde");
define('_DML_DESCRIPTION', "Beskrivelse:");
define('_DML_VERSION', "Versjon");
define('_DML_DEFAULT', "Standard");
define('_DML_FOLDER', "Mappe");
define('_DML_FOLDERS', "Mapper");
define('_DML_FILE', "Fil");
define('_DML_FILES', "Filer");
define('_DML_URL', "URL");
define('_DML_PARAMS', "Parametre");
define('_DML_PARAMETERS', "Parametre");
define('_DML_TOP' 	,"Topp");
define('_DML_PROPERTY', "Egenskap");
define('_DML_VALUE', "Verdi");
define('_DML_PATH', "Sti");

define('_DML_DOC', "Oppføring");
define('_DML_DOCS', "Oppføringer");
define('_DML_DOCUMENT', "Oppføring");
define('_DML_CAT', "Kategori");
define('_DML_CATS', "Kategorier");
define('_DML_CATEGORY', "Kategori");

define('_DML_UPLOAD', "Last opp");
define('_DML_SECURITY', "Sikkerhet");
define('_DML_CPANEL', "Kontrollpanel");
define('_DML_CONFIG', "Konfigurasjon");
define('_DML_LICENSE', "Lisens");
define('_DML_LICENSES', "Lisenser");
define('_DML_UPDATES', "Oppdateringer");
define('_DML_DOWNLOADS', "Nedlastinger");

define('_DML_HOMEPAGE', "Hjemmeside");

define('_DML_NO', "Nei");
define('_DML_YES', "Ja");
define('_DML_OK', "OK");
define('_DML_CANCEL', "Avbryt");
define('_DML_ADD', "Legg til");
define('_DML_EDIT' ,"Rediger");
define('_DML_CONTINUE', "Fortsett");
define('_DML_SAVE', "Lagre");

define('_DML_APPROVED', "Godkjent");
define('_DML_DELETED', "Slettet");

define('_DML_INSTALL', "Installer");
define('_DML_PUBLISHED', "Publisert");
define('_DML_UNPUBLISH', "Upublisert");
define('_DML_CHECKED_OUT', "Sjekket ut");

define('_DML_TOOLTIP', "Vertøytips");
define('_DML_FILTER_NAME', "Sorter etter navn");

define('_DML_TITLE', "Tittel");
define('_DML_MULTIPLE_SELECTS', "hold nede <b>Ctrl</b> tasten (i Windows/Unix/Linux) eller <b>Command</b> tasten (på Mac) når du velger.");

define('_DML_USER', "Bruker");
define('_DML_OWNER', "Vises for");
define('_DML_CREATOR', "Opphav");
define('_DML_EDITOR', "Redigerer");
define('_DML_MAINTAINER', "Vedlikeholder");
define('_DML_UNKNOWN', "Ukjent");

define('_DML_FILEICON_ALT', "Filikon");

define('_DML_NOT_AUTHORIZED', "Ikke autorisert");
define('_DML_ERROR', "Error");
define('_DML_OPERATION_FAILED', "Operasjon feilet");

define('_DML_EDIT_THIS_MODULE', "Rediger denne modulen");
define('_DML_UNPUBLISH_THIS_MODULE', "Avpubliser denne modulen");
define('_DML_ORDER_THIS_MODULE', "Sorter denne modulen");

define('_DML_WRITABLE', "Skrivbar");
define('_DML_UNWRITABLE', "Ikke skrivbar");

define('_DML_SAVED_CHANGES', "Lagre endringer");
define('_DML_ARE_YOU_SURE', "Er du sikker?");


// -- HTML Class
define('_DML_SELECT_CAT', "Velg kategori");
define('_DML_SELECT_DOC', "Velg oppføring");
define('_DML_SELECT_FILE', "Velg fil");
define('_DML_ALL_CATS', "- Alle kategorier");
define('_DML_SELECT_USER', "Velg bruker");
define('_DML_GENERAL', "Generelt");
define('_DML_GROUPS', "Grupper");
define('_DML_DOCMAN_GROUPS', "DOCman-grupper");
define('_DML_MAMBO_GROUPS', "Joomla!-grupper");
define('_DML_JOOMLA_GROUPS', "Joomla!-grupper"); // alias
define('_DML_USERS', "Brukere");
define('_DML_EVERYBODY', "Alle");
define('_DML_ALL_REGISTERED', "Alle registrerte brukere");
define('_DML_NO_USER_ACCESS', "Ingen brukertilgang");
define('_DML_AUTO_APPROVE', "Autogodkjenn");
define('_DML_AUTO_PUBLISH', "Autopubliser");
define('_DML_GROUP', " Gruppe");
define('_DML_GROUP_PUBLISHER', "Utgiver");
define('_DML_GROUP_EDITOR', "Redigerer");
define('_DML_GROUP_AUTHOR', "Opphav");

// -- File Clas
define('_DML_OPTION_HTTP', "Last opp en fil fra din datamaskin");
define('_DML_OPTION_XFER', "Overfør en fil fra en annen tjener til denne");
define('_DML_OPTION_LINK', "Lenke til en fil på en annen tjener");
define('_DML_SIZEEXCEEDS', "Størrelsen overskrider maks tillatt størrelse.");
define('_DML_ONLYPARTIAL', "Bare en del av fil mottatt, prøv igjen.");
define('_DML_NOUPLOADED', "Ingen fil opplastet.");
define('_DML_TRANSFERERROR', "Overføring feilet");
define('_DML_DIRPROBLEM', "Katalogproblem, kan ikke flytte fil.");
define('_DML_DIRPROBLEM2', "Katalogproblem");
define('_DML_COULDNOTCONNECT', "Kunne ikke koble til tjener");
define('_DML_COULDNOTOPEN', "Kunne ikke åpne målkatalog. Sjekk rettigheter.");
define('_DML_FILETYPE', "Filtype");
define('_DML_NOTPERMITED', "ikke tillatt");
define('_DML_EMPTY', "Tom");

define('_DML_ALREADYEXISTS', "eksistrer allerede.");
define('_DML_PROTOCOL', "Protokoll");
define('_DML_NOTSUPPORTED', "ikke støttet.");
define('_DML_NOFILENAME', "Ingen filnavn angitt.");
define('_DML_FILENAME', "Filenavn");
define('_DML_CONTAINBLANKS', "inneholder mellomrom.");
define('_DML_ISNOTVALID', "er ikke et gyldig filnavn");
define('_DML_SELECTIMAGE', "Velg bilde");
define('_DML_FAILEDTOCREATEDIR', "Kunne ikke opprette katalog");
define('_DML_DIRNOTEXISTS', "Katalog eksisterer ikke, kan ikke flytte filer");
define('_DML_TEMPLATEEMPTY', "Mal-id er tom, kan ikke fjerne filer");
define('_DML_INTERRORMAMBOT', "Intern feil: ingen mambot angitt");
define('_DML_INTERRORMABOT', _DML_INTERRORMAMBOT); // alias
define('_DML_NOTARGGIVEN', "ikke nok argumenter gitt");
define('_DML_ARG', "argument");
define('_DML_ISNOTARRAY', "er ikke en oppstilling");

define('_DML_NEW', "ny!");
define('_DML_HOT', "het!");

define('_DML_BYTES', "Bytes");
define('_DML_KB', "kB");
define('_DML_MB', "MB");
define('_DML_GB', "GB");
define('_DML_TB', "TB");


// -- Form Validation
define('_DML_ENTRY_ERRORS', "Systemmelding - Følgende feil må korrigeres:");
define('_DML_ENTRY_TITLE', "Oppføring må ha en tittel.");
define('_DML_ENTRY_NAME', "Oppføring må ha et navn.");
define('_DML_ENTRY_DATE', "Oppføring må ha en dato.");
define('_DML_ENTRY_OWNER', "Oppføring må ha en eier.");
define('_DML_ENTRY_CAT', "Oppføring må ha en katgori.");
define('_DML_ENTRY_DOC', "Oppføring må ha en valgt fil.");
define('_DML_ENTRY_MAINT', "Oppføring må ha en vedlikeholder angitt.");

define('_DML_ENTRY_DOCLINK_LINK', "Fil må ha en valgt LENKE.");
define('_DML_ENTRY_DOCLINK', "Fil har både filnavn og lenke angitt under detaljer.");
define('_DML_ENTRY_DOCLINK_PROTOCOL', "Ukjent protokoll for fillenke angitt under detaljer");
define('_DML_ENTRY_DOCLINK_NAME', "Behøver full fillenke angitt under detaljer");
define('_DML_ENTRY_DOCLINK_HOST', "En komplett nettadresse er påkrevd");
define('_DML_ENTRY_DOCLINK_INVALID', "Fil ikke funnet");
define('_DML_FILENAME_REQUIRED', "Et filnavn er påkrevd");

// Missing  constants from J!1.0.x
define('_DML_FILTER', "Filter");
define('_DML_UPDATE', "Oppdater");
define('_DML_SEARCH_ANYWORDS', "Hvilket som helst ord");
define('_DML_SEARCH_ALLWORDS', "Alle ord");
define('_DML_SEARCH_PHRASE', "Nøyaktig frase");
define('_DML_SEARCH_NEWEST', "Nyeste først");
define('_DML_SEARCH_OLDEST', "Eldste først");
define('_DML_SEARCH_POPULAR', "Mest populær");
define('_DML_SEARCH_ALPHABETICAL', "Alfabetisk");
define('_DML_SEARCH_CATEGORY', "Kategori");
define('_DML_SEARCH_MESSAGE', "Søketerm må være minimum 3 tegn, og maks 20 tegn");
define('_DML_SEARCH_TITLE', "Søk");
define('_DML_PROMPT_KEYWORD', "Søk nøkkelord");
define('_DML_SEARCH_MATCHES', "returnerte %d treff");
define('_DML_NOKEYWORD', "Ingen treff ble funnet");
define('_DML_IGNOREKEYWORD', "En eller flere vanlinge ord ble ignorert i søket");
define('_DML_CMN_ORDERING', "Sortering");

// Added DOCman 1.4 RC3
define('_DML_HELP', "Hjelp");

// Added DOCman 1.4.0.stable
define('_DML_DONATE', "Bidra");
