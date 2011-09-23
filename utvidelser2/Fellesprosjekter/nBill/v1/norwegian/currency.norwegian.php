<?php
/**
* @version 1.1.x
* @package nBill
* @copyright (C) 2006-2007 Netshine Software Limited
* @copyright Translation 2009 Joomla! i Norge
* @license Commercial
* 
* PLEASE NOTE: This is NOT free software. You must purchase a license in order to use this component.
* For more information, see www.nbill.co.uk
*
* All Rights Reserved. You may make amendments to any unencrypted files for your own use only or
* for the use of your customers if you are a website developer. HOWEVER, you are not permitted to
* re-distribute or re-sell this software in any form without the express permission of the copyright 
* holder. This software is NOT open source.
*
* This component was developed by Netshine Software Limited (www.netshinesoftware.com). Use of this
* software is entirely at your own risk.
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

//Currency
define("INV_CURRENCY_TITLE", "Valutaer");
define("INV_CURRENCY_INTRO", "Dersom dine produkter er priset i flere valutaer, du kan definere disse valutaene her. Du må minst velge en valuta.");
define("INV_CURRENCY_NAME", "Valutanavn");
define("INV_CURRENCY_CODE", "ISO-kode");
define("INV_CURRENCY_SYMBOL", "Symbol");
define("INV_CURRENCY_RATE", "Konverteringsfrekvens");
define("INV_EDIT_CURRENCY_RATE", "Endre valuta");
define("INV_NEW_CURRENCY_RATE", "Ny valuta");
define("INV_CURRENCY_DETAILS", "Valutadetaljer");
define("INV_CURRENCY_NAME_REQUIRED", "Vennligst skriv inn navnet på valutaen.");
define("INV_CURRENCY_CODE_REQUIRED", "Vennligst skriv inn ISO-koden for valutaen.");
define("INV_INSTR_CURRENCY_NAME", "Navn på valuta (f.eks. 'US Dollar', 'Norske kroner')");
define("INV_INSTR_CURRENCY_CODE", "ISO-kode for valuta (f.eks. 'USD', 'NOK')");
define("INV_INSTR_CURRENCY_SYMBOL", "Symbol brukt som prefiks for beløpene (f.eks. '&#36;', '&euro;') - husk: det er sikrest å bruke HTML koder (f.eks. &amp;#36; &amp;euro;).");
define("INV_ERR_CANNOT_DELETE_LAST_CURRENCY", "Du kan ikke slette den eneste valutaen!");
define("INV_ERR_CANNOT_DELETE_CURRENCY_IN_USE", "En eller flere valutaer du prøvde å slette, er i bruk av en eller flere leverandører. Prosess avbrutt - du kan ikke slette en valuta som blir brukt av en leverandør.");
?>
