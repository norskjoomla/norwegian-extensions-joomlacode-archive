<?php
/**
* Language file for Currencies
* @version 2
* @package nBill
* @copyright (C) 2006-2009 Netshine Software Limited
* @license http://www.nbill.co.uk/eula.html
* 
* @access private
* PLEASE NOTE: This is NOT free software. You must purchase a license in order to use this component.
* For more information, see www.nbill.co.uk and the license agreement at www.nbill.co.uk/eula.html
*
* All Rights Reserved. You may make amendments to any unencrypted files for your own use only or
* for the use of your customers if you are a website developer. HOWEVER, you are not permitted to
* re-distribute or re-sell this software in any form without the express permission of the copyright 
* holder. This software is NOT open source.
*
* This component was developed by Netshine Software Limited (www.netshinesoftware.com). Use of this
* software is entirely at your own risk.
*/

//Ensure this file has been reached through a valid entry point (not always necessary eg. for class files, but included on every file to be safe!)
(defined('_VALID_MOS') || defined('_JEXEC') || defined('NBILL_VALID_NBF')) or die('Access Denied.');

//Currency
define("NBILL_CURRENCY_TITLE", "Valutaer");
define("NBILL_CURRENCY_INTRO", "Dersom dine produkter er priset i flere valutaer, kan du definere disse valutaene her. Du må minst velge en valuta.");
define("NBILL_CURRENCY_NAME", "Valutanavn");
define("NBILL_CURRENCY_CODE", "ISO-kode");
define("NBILL_CURRENCY_SYMBOL", "Symbol");
define("NBILL_CURRENCY_RATE", "Konverteringsfrekvens");
define("NBILL_EDIT_CURRENCY_RATE", "Endre valuta");
define("NBILL_NEW_CURRENCY_RATE", "Ny valuta");
define("NBILL_CURRENCY_DETAILS", "Valutadetaljer");
define("NBILL_CURRENCY_NAME_REQUIRED", "Vennligst skriv inn navnet på valutaen.");
define("NBILL_CURRENCY_CODE_REQUIRED", "Vennligst skriv inn ISO-koden for valutaen.");
define("NBILL_INSTR_CURRENCY_NAME", "Navn på valuta (f.eks. 'US Dollar', 'Norske kroner')");
define("NBILL_INSTR_CURRENCY_CODE", "ISO-kode for valuta (f.eks. 'USD', 'NOK')");
define("NBILL_INSTR_CURRENCY_SYMBOL", "Symbol brukt som prefiks for beløpene (f.eks. '&#36;', '&euro;') - husk: det er sikrest å bruke HTML koder (f.eks. &amp;#36; &amp;euro;).");
define("NBILL_ERR_CANNOT_DELETE_LAST_CURRENCY", "Du kan ikke slette den eneste valutaen!");
define("NBILL_ERR_CANNOT_DELETE_CURRENCY_IN_USE", "En eller flere valutaer du prøvde å slette, er i bruk av en eller flere leverandører. Prosess avbrutt - du kan ikke slette en valuta som blir brukt av en leverandør.");