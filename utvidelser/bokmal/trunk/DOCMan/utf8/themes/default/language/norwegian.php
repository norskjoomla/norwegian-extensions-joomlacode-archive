<?php
/**
 * DOCman 1.4.x - Joomla! Document Manager
 * @version $Id$
 * @package DOCman_1.4
 * @copyright (C) 2003-2007 The DOCman Development Team
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.joomlatools.org/ Official website
 **/
defined('_VALID_MOS') or die('Restricted access');

/**
 * Default Norwegian language file
 *
 * Creator:  Rune Rasmussen
 * Website:  http://www.syntaxerror.no/
 * Email:    nospam@syntaxerror.no
 * Revision: 1.4
 * Date:     September 2007
 **/

define('_DML_TPL_DATEFORMAT_LONG','%d.%m.%Y %H:%M');
define('_DML_TPL_DATEFORMAT_SHORT','%d.%m.%Y');

// General
define('_DML_TPL_FILES' 		, "Filer");
define('_DML_TPL_CATS' 			, "Kategorier");
define('_DML_TPL_DOCS' 			, "Filer");
define('_DML_TPL_CAT_VIEW' 		, "Hovedside nedlastinger");
define('_DML_TPL_MUST_LOGIN' 	, "Du må logge inn for å legge til ny fil");
define('_DML_TPL_SUBMIT' 		, "Legg til fil");
define('_DML_TPL_SEARCH_DOC' 	, "Søk fil");
define('_DML_TPL_LICENSE_DOC' 	, "Fillisens");

// Titles
define('_DML_TPL_TITLE_BROWSE'  , "Nedlastinger");
define('_DML_TPL_TITLE_EDIT' 	, "Rediger filen");
define('_DML_TPL_TITLE_SEARCH'  , "Søk etter en fil");
define('_DML_TPL_TITLE_DETAILS' , "Fildetaljer");
define('_DML_TPL_TITLE_MOVE'    , "Flytt fil");
define('_DML_TPL_TITLE_UPDATE'  , "Oppdater fil");
define('_DML_TPL_TITLE_UPLOAD'  , "Legg til fil");

// Documents
define('_DML_TPL_HITS' 			, "Treff");
define('_DML_TPL_DATEADDED' 	, "Dato lagt til");
define('_DML_TPL_HOMEPAGE' 		, "Hjemmeside");
define('_DML_TPL_NO_DOCS', "Det finnes ingen filer i denne kategorien");

//Document search
DEFINE ("_DML_TPL_ORDER_BY" 	, "Sorter etter");
DEFINE ("_DML_TPL_ORDER_NAME" 	, "navn");
DEFINE ("_DML_TPL_ORDER_DATE" 	, "dato");
DEFINE ("_DML_TPL_ORDER_HITS" 	, "treff");
DEFINE ("_DML_TPL_ORDER_ASCENT" , "stigende");
DEFINE ("_DML_TPL_ORDER_DESCENT", "synkende");
define('_DML_TPL_NO_ITEMS_FOUND', "Ingen oppføringer ble funnet");

//Document edit

//Document move
define('_DML_TPL_MOVE_DOC' 		, "Flytt fil til annen kategori");

//Document update
define('_DML_TPL_UPDATE_DOC' 	   , "Oppdater filen");
define('_DML_TPL_UPDATE_OVERWRITE' , "Dette vil alltid overskrive filen om filnavnet er det samme.");

//Document upload
define('_DML_TPL_UPLOAD_STEP' 	   , "Steg");
define('_DML_TPL_UPLOAD_OF' 	   , "av");
define('_DML_TPL_UPLOAD_NEXT' 	   , "Neste");
define('_DML_TPL_UPLOAD_DOC' 	   , "Opplastingsveileder");
define('_DML_TPL_TRANSFER' 		   , "Overfør en fil fra en webserver");
define('_DML_TPL_LINK' 		   	   , "Link til en fil på annen server");
define('_DML_TPL_UPLOAD' 		   , "Last opp en fil fra din datamaskin");

//Document tasks
define('_DML_TPL_DOC_DOWNLOAD' 	, "Last ned");
define('_DML_TPL_DOC_VIEW' 		, "Se på");
define('_DML_TPL_DOC_DETAILS' 	, "Detaljer");
define('_DML_TPL_DOC_EDIT' 		, "Rediger");
define('_DML_TPL_DOC_MOVE' 		, "Flytt");
define('_DML_TPL_DOC_DELETE' 	, "Slett");
define('_DML_TPL_DOC_UPDATE' 	, "Oppdater");
define('_DML_TPL_DOC_CHECKOUT' 	, "Sjekk ut");
define('_DML_TPL_DOC_CHECKIN' 	, "Sjekk inn");
define('_DML_TPL_DOC_UNPUBLISH'	, "Avpubliser");
define('_DML_TPL_DOC_PUBLISH' 	, "Publiser");
define('_DML_TPL_DOC_RESET' 	, "Tilbakestill");
define('_DML_TPL_DOC_APPROVE' 	, "Godkjenn");

define('_DML_TPL_BACK' 		   , "Tilbake");

//Document details
define('_DML_TPL_DETAILSFOR' 	, "Detaljer for");
define('_DML_TPL_NAME' 			, "Navn");
define('_DML_TPL_DESC' 			, "Beskrivelse");
define('_DML_TPL_FNAME'			, "Filnavn");
define('_DML_TPL_FSIZE'			, "Filstørrelse");
define('_DML_TPL_FTYPE'			, "Filtype");
define('_DML_TPL_SUBBY'			, "Opphav");
define('_DML_TPL_SUBDT'			, "Opprettet:");
define('_DML_TPL_OWNER'			, "Vises for");
define('_DML_TPL_MAINT'			, "Vedlikeholdt av");
define('_DML_TPL_DOWNLOADS' 	, "Nedlastinger");
define('_DML_TPL_LASTUP'		, "Sist oppdatert");
define('_DML_TPL_LASTBY'		, "Sist oppdatert av");
define('_DML_TPL_HOME' 			, "Hjemmeside" );
define('_DML_TPL_MIME' 			, "Mime-type");
define('_DML_TPL_CHECKED_OUT'	, "Sjekket ut");
define('_DML_TPL_CHECKED_BY'	, "Sjekket ut av");
define('_DML_TPL_MD5_CHECKSUM'	, "MD5 sjekksum");
define('_DML_TPL_CRC_CHECKSUM'	, "CRC sjekksum");
