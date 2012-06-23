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

define ('_DM_DATEFORMAT_LONG', "%d.%m.%Y %H:%M"); // use PHP strftime Format, more info at http://php.net
define ('_DM_DATEFORMAT_SHORT', "%d.%m.%Y");		 // use PHP strftime Format, more info at http://php.net
define ('_DM_ISO', "iso-8859-1");
define ('_DM_LANG', "no");

// -- General
define('_DML_NAME', "Navn");
define('_DML_DATE', "Dato");
define('_DML_DATE_MODIFIED', "Endret");
define('_DML_HITS', "Treff");
define('_DML_SIZE', "St�rrelse");
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

define('_DML_DOC', "Oppf�ring");
define('_DML_DOCS', "Oppf�ringer");
define('_DML_DOCUMENT', "Oppf�ring");
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

define('_DML_TOOLTIP', "Vert�ytips");
define('_DML_FILTER_NAME', "Sorter etter navn");

define('_DML_TITLE', "Tittel");
define('_DML_MULTIPLE_SELECTS', "hold nede <b>Ctrl</b> tasten (i Windows/Unix/Linux) eller <b>Command</b> tasten (p� Mac) n�r du velger.");

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
define('_DML_SELECT_DOC', "Velg oppf�ring");
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
define('_DML_OPTION_XFER', "Overf�r en fil fra en annen tjener til denne");
define('_DML_OPTION_LINK', "Lenke til en fil p� en annen tjener");
define('_DML_SIZEEXCEEDS', "St�rrelsen overskrider maks tillatt st�rrelse.");
define('_DML_ONLYPARTIAL', "Bare en del av fil mottatt, pr�v igjen.");
define('_DML_NOUPLOADED', "Ingen fil opplastet.");
define('_DML_TRANSFERERROR', "Overf�ring feilet");
define('_DML_DIRPROBLEM', "Katalogproblem, kan ikke flytte fil.");
define('_DML_DIRPROBLEM2', "Katalogproblem");
define('_DML_COULDNOTCONNECT', "Kunne ikke koble til tjener");
define('_DML_COULDNOTOPEN', "Kunne ikke �pne m�lkatalog. Sjekk rettigheter.");
define('_DML_FILETYPE', "Filtype");
define('_DML_NOTPERMITED', "ikke tillatt");
define('_DML_EMPTY', "Tom");

define('_DML_ALREADYEXISTS', "eksistrer allerede.");
define('_DML_PROTOCOL', "Protokoll");
define('_DML_NOTSUPPORTED', "ikke st�ttet.");
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
define('_DML_ENTRY_ERRORS', "Systemmelding - F�lgende feil m� korrigeres:");
define('_DML_ENTRY_TITLE', "Oppf�ring m� ha en tittel.");
define('_DML_ENTRY_NAME', "Oppf�ring m� ha et navn.");
define('_DML_ENTRY_DATE', "Oppf�ring m� ha en dato.");
define('_DML_ENTRY_OWNER', "Oppf�ring m� ha en eier.");
define('_DML_ENTRY_CAT', "Oppf�ring m� ha en katgori.");
define('_DML_ENTRY_DOC', "Oppf�ring m� ha en valgt fil.");
define('_DML_ENTRY_MAINT', "Oppf�ring m� ha en vedlikeholder angitt.");

define('_DML_ENTRY_DOCLINK_LINK', "Fil m� ha en valgt LENKE.");
define('_DML_ENTRY_DOCLINK', "Fil har b�de filnavn og lenke angitt under detaljer.");
define('_DML_ENTRY_DOCLINK_PROTOCOL', "Ukjent protokoll for fillenke angitt under detaljer");
define('_DML_ENTRY_DOCLINK_NAME', "Beh�ver full fillenke angitt under detaljer");
define('_DML_ENTRY_DOCLINK_HOST', "En komplett nettadresse er p�krevd");
define('_DML_ENTRY_DOCLINK_INVALID', "Fil ikke funnet");
define('_DML_FILENAME_REQUIRED', "Et filnavn er p�krevd");

// Missing  constants from J!1.0.x
define('_DML_FILTER', "Filter");
define('_DML_UPDATE', "Oppdater");
define('_DML_SEARCH_ANYWORDS', "Hvilket som helst ord");
define('_DML_SEARCH_ALLWORDS', "Alle ord");
define('_DML_SEARCH_PHRASE', "N�yaktig frase");
define('_DML_SEARCH_NEWEST', "Nyeste f�rst");
define('_DML_SEARCH_OLDEST', "Eldste f�rst");
define('_DML_SEARCH_POPULAR', "Mest popul�r");
define('_DML_SEARCH_ALPHABETICAL', "Alfabetisk");
define('_DML_SEARCH_CATEGORY', "Kategori");
define('_DML_SEARCH_MESSAGE', "S�keterm m� v�re minimum 3 tegn, og maks 20 tegn");
define('_DML_SEARCH_TITLE', "S�k");
define('_DML_PROMPT_KEYWORD', "S�k n�kkelord");
define('_DML_SEARCH_MATCHES', "returnerte %d treff");
define('_DML_NOKEYWORD', "Ingen treff ble funnet");
define('_DML_IGNOREKEYWORD', "En eller flere vanlinge ord ble ignorert i s�ket");
define('_DML_CMN_ORDERING', "Sortering");

// Added DOCman 1.4 RC3
define('_DML_HELP', "Hjelp");

// Added DOCman 1.4.0.stable
define('_DML_DONATE', "Bidra");
