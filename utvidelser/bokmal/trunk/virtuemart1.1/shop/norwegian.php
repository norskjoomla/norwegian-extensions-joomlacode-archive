<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : italian.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translator soeren
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
global $VM_LANG;
$langvars = array (
	'CHARSET' => 'ISO-8859-1',
	'PHPSHOP_BROWSE_LBL' => 'Oversikt',
	'PHPSHOP_FLYPAGE_LBL' => 'Produktdetaljer',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Endre dette produktet',
	'PHPSHOP_DOWNLOADS_START' => 'Start nedlasting',
	'PHPSHOP_DOWNLOADS_INFO' => 'Venligst skriv inn nedlastings-ID\'en du fikk per e-post. Deretter trykker du \'Start nedlasting\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Venligst skriv inn e-postadresse for � f� beskjed n�r dette produktet er p� lager igjen.',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Takk for at du venter! <br />Vi vil gi deg beskjed s� snart vi f�r ny vare p� lager.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Gi meg melding!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Velg alle kategorier',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'S�k i all produktinfo',
	'PHPSHOP_SEARCH_PRODNAME' => 'Kun produktnavn',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Kun produsent/leverand�r',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Kun produktbeskrivelse',
	'PHPSHOP_SEARCH_AND' => 'og',
	'PHPSHOP_SEARCH_NOT' => 'ikke',
	'PHPSHOP_SEARCH_TEXT1' => 'F�rste drop-down-liste lar deg begrense s�ket til en kategori.',
	'PHPSHOP_SEARCH_TEXT2' => 'Du kan videre legge til et n�kkelord  og velg deretter OG eller IKKE.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Handle mer',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Tilgjengelige bilder for',
	'PHPSHOP_BACK_TO_DETAILS' => 'Tilbake til produktdetaljer',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Kan ikke finne bildet!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Vil du finne produkter etter tekniske parameter?<br />Du kan bruke en forh�ndslaget form:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Beklager, det er ingen kategori for s�ket.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Beklager, det er ingen publisert produkttype med dette navnet.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Er lik',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'Er ikke lik',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Fullteksts�k',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Alle valgte',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'En av de valgte',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Nullstill',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Beklager, kan ikke finne produktet du s�ker!',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Antall {unit} per pakken:',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Antall {unit} per boks:',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'Pris',
	'VM_PRODUCT_ENQUIRY_LBL' => 'Send sp�rsm�l om dette produktet',
	'VM_RECOMMEND_FORM_LBL' => 'Anbefal dette produktet for en venn',
	'PHPSHOP_EMPTY_YOUR_CART' => 'T�m handlekurv',
	'VM_RETURN_TO_PRODUCT' => 'Tilbake til produkt',
	'EMPTY_CATEGORY' => 'Kategorien er for �yeblikket tom.',
	'ENQUIRY' => 'Henvendelse',
	'NAME_PROMPT' => 'Ditt navn',
	'EMAIL_PROMPT' => 'E-postadresse',
	'MESSAGE_PROMPT' => 'Din melding',
	'SEND_BUTTON' => 'Send',
	'THANK_MESSAGE' => 'Takk for din henvendelse, vi vil kontakte deg s� snart som mulig.',
	'PROMPT_CLOSE' => 'Lukk',
	'VM_RECOVER_CART_REPLACE' => 'Erstatt med lagret handlekurv',
	'VM_RECOVER_CART_MERGE' => 'Sl� sammen med lagret handlekurv.',
	'VM_RECOVER_CART_DELETE' => 'Slett lagret handlekurv.',
	'VM_EMPTY_YOUR_CART_TIP' => 'Fjern alt innhold fra handlekurv.'
); $VM_LANG->initModule( 'shop', $langvars );
?>
