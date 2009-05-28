<?php
/**
* @version 1.1.x
* @package nBill
* @copyright (C) 2006-2007 Netshine Software Limited
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
define("INV_CURRENCY_TITLE", "Currencies");
define("INV_CURRENCY_INTRO", "If your products are priced in multiple currencies, you can define those currencies here. You must have at least one currency.");
define("INV_CURRENCY_NAME", "Name of Currency");
define("INV_CURRENCY_CODE", "ISO Code");
define("INV_CURRENCY_SYMBOL", "Symbol");
define("INV_CURRENCY_RATE", "Conversion Rate");
define("INV_EDIT_CURRENCY_RATE", "Edit Currency");
define("INV_NEW_CURRENCY_RATE", "New Currency");
define("INV_CURRENCY_DETAILS", "Currency Details");
define("INV_CURRENCY_NAME_REQUIRED", "Please enter the name of the currency.");
define("INV_CURRENCY_CODE_REQUIRED", "Please enter the ISO Code of the currency.");
define("INV_INSTR_CURRENCY_NAME", "Proper name of currency (eg. 'US Dollars', 'Euros')");
define("INV_INSTR_CURRENCY_CODE", "ISO Code of currency (eg. 'USD', 'EUR')");
define("INV_INSTR_CURRENCY_SYMBOL", "Symbol used to prefix amounts (eg. '&#36;', '&euro;') - note: it is safest to use HTML codes (eg. &amp;#36; &amp;euro;).");
define("INV_ERR_CANNOT_DELETE_LAST_CURRENCY", "You cannot delete the last currency!");
define("INV_ERR_CANNOT_DELETE_CURRENCY_IN_USE", "One or more currencies you tried to delete are in use by one or more vendors. Process aborted - you cannot delete a currency that is being used by a vendor.");
?>
