<?php
/*
* DOCMan 1.3.0 default template
* @version $Id: norwegian.php,v 1.0 2005/12/06 23:52:23 rued Exp $
* @package DOCMan_1.3.0
* @copyright (C) 2003 - 2005 The DOCMan Development Team
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Oficial website: http://www.mambodocman.com/
* -------------------------------------------
* Norwegian language file
* Translator: Rune Rasmussen
* Email: nospam@syntaxerror.no
* Revision: 1.0
* Date: December 2005
*/
// ensure this file is being included by a parent file */
defined("_VALID_MOS") or die("Direct Access to this location is not allowed.");

DEFINE ('_DML_TPL_DATEFORMAT_LONG','%d.%m.%Y %H:%M');
DEFINE ('_DML_TPL_DATEFORMAT_SHORT','%d.%m.%Y');

// General
DEFINE("_DML_TPL_FILES" 		, "Filer");
DEFINE("_DML_TPL_CATS" 			, "Kategorier");
DEFINE("_DML_TPL_DOCS" 			, "Dokumenter");
DEFINE("_DML_TPL_CAT_VIEW" 		, "Hovedside nedlastinger");
DEFINE("_DML_TPL_MUST_LOGIN" 	, "Du m&#229; logge inn for &#229; legge til nytt dokument");
DEFINE("_DML_TPL_SUBMIT" 		, "Legg til dokument");
DEFINE("_DML_TPL_SEARCH_DOC" 	, "S&#248;k dokument");
DEFINE("_DML_TPL_LICENSE_DOC" 	, "Dokumentlisens");

// Titles
DEFINE("_DML_TPL_TITLE_BROWSE"  , "Nedlastinger");
DEFINE("_DML_TPL_TITLE_EDIT" 	, "Rediger dokumentet");
DEFINE("_DML_TPL_TITLE_SEARCH"  , "S&#248;k etter et dokument");
DEFINE("_DML_TPL_TITLE_DETAILS" , "Dokumentdetaljer");
DEFINE("_DML_TPL_TITLE_MOVE"    , "Flytt dokument");
DEFINE("_DML_TPL_TITLE_UPDATE"  , "Oppdater dokument");
DEFINE("_DML_TPL_TITLE_UPLOAD"  , "Legg til dokument");

// Documents
DEFINE("_DML_TPL_HITS" 			, "Treff");
DEFINE("_DML_TPL_DATEADDED" 	, "Dato lagt til");
DEFINE("_DML_TPL_HOMEPAGE" 		, "Hjemmeside");

//Document search
DEFINE ("_DML_TPL_ORDER_BY" 	, "Sorter etter");
DEFINE ("_DML_TPL_ORDER_NAME" 	, "navn");
DEFINE ("_DML_TPL_ORDER_DATE" 	, "dato");
DEFINE ("_DML_TPL_ORDER_HITS" 	, "treff");
DEFINE ("_DML_TPL_ORDER_ASCENT" , "stigende");
DEFINE ("_DML_TPL_ORDER_DESCENT", "synkende");

//Document edit

//Document move
DEFINE("_DML_TPL_MOVE_DOC" 		, "Flytt dokument til annen kategori");

//Document update
DEFINE("_DML_TPL_UPDATE_DOC" 	   , "Oppdater dokumentet");
DEFINE("_DML_TPL_UPDATE_OVERWRITE" , "Dette vil alltid overskrive dokumentet om filnavnet er det samme.");

//Document upload
DEFINE("_DML_TPL_UPLOAD_STEP" 	   , "Steg");
DEFINE("_DML_TPL_UPLOAD_OF" 	   , "av");
DEFINE("_DML_TPL_UPLOAD_NEXT" 	   , "Neste");
DEFINE("_DML_TPL_UPLOAD_DOC" 	   , "Opplastingsveileder");
DEFINE("_DML_TPL_TRANSFER" 		   , "Overf&#248;r en fil fra en webserver");
DEFINE("_DML_TPL_LINK" 		   	   , "Link til en fil p&#229; annen server");
DEFINE("_DML_TPL_UPLOAD" 		   , "Last opp en fil fra din datamaskin");

//Document tasks
DEFINE("_DML_TPL_DOC_DOWNLOAD" 	, "Last ned");
DEFINE("_DML_TPL_DOC_VIEW" 		, "Se p&#229;");
DEFINE("_DML_TPL_DOC_DETAILS" 	, "Detaljer");
DEFINE("_DML_TPL_DOC_EDIT" 		, "Rediger");
DEFINE("_DML_TPL_DOC_MOVE" 		, "Flytt");
DEFINE("_DML_TPL_DOC_DELETE" 	, "Slett");
DEFINE("_DML_TPL_DOC_UPDATE" 	, "Oppdater");
DEFINE("_DML_TPL_DOC_CHECKOUT" 	, "Sjekk ut");
DEFINE("_DML_TPL_DOC_CHECKIN" 	, "Sjekk inn");
DEFINE("_DML_TPL_DOC_UNPUBLISH"	, "Avpubliser");
DEFINE("_DML_TPL_DOC_PUBLISH" 	, "Publiser");
DEFINE("_DML_TPL_DOC_RESET" 	, "Tilbakestill");
DEFINE("_DML_TPL_DOC_APPROVE" 	, "Godkjenn");

DEFINE("_DML_TPL_BACK" 		   , "Tilbake");

//Document details
DEFINE("_DML_TPL_DETAILSFOR" 	, "Detaljer for");
DEFINE("_DML_TPL_NAME" 			, "Navn");
DEFINE("_DML_TPL_DESC" 			, "Beskrivelse");
DEFINE("_DML_TPL_FNAME"			, "Filnavn");
DEFINE("_DML_TPL_FSIZE"			, "Filst&#248;rrelse");
DEFINE("_DML_TPL_FTYPE"			, "Filtype");
DEFINE("_DML_TPL_SUBBY"			, "Opphav");
DEFINE("_DML_TPL_SUBDT"			, "Opprettet:");
DEFINE("_DML_TPL_OWNER"			, "Vises for");
DEFINE("_DML_TPL_MAINT"			, "Vedlikeholdt av");
DEFINE("_DML_TPL_DOWNLOADS" 	, "Nedlastinger");
DEFINE("_DML_TPL_LASTUP"		, "Sist oppdatert");
DEFINE("_DML_TPL_LASTBY"		, "Sist oppdatert av");
DEFINE("_DML_TPL_HOME" 			, "Hjemmeside" );
DEFINE("_DML_TPL_MIME" 			, "Mime Type");
DEFINE("_DML_TPL_CHECKED_OUT"	, "Sjekket ut");
DEFINE("_DML_TPL_CHECKED_BY"	, "Sjekket ut av");
DEFINE("_DML_TPL_MD5_CHECKSUM"	, "MD5 sjekksum");
DEFINE("_DML_TPL_CRC_CHECKSUM"	, "CRC sjekksum");

?>