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
define("NBILL_CURRENCY_TITLE", "Currencies");
define("NBILL_CURRENCY_INTRO", "If your products are priced in multiple currencies, you can define those currencies here. You must have at least one currency.");
define("NBILL_CURRENCY_NAME", "Name of Currency");
define("NBILL_CURRENCY_CODE", "ISO Code");
define("NBILL_CURRENCY_SYMBOL", "Symbol");
define("NBILL_CURRENCY_RATE", "Conversion Rate");
define("NBILL_EDIT_CURRENCY_RATE", "Edit Currency");
define("NBILL_NEW_CURRENCY_RATE", "New Currency");
define("NBILL_CURRENCY_DETAILS", "Currency Details");
define("NBILL_CURRENCY_NAME_REQUIRED", "Please enter the name of the currency.");
define("NBILL_CURRENCY_CODE_REQUIRED", "Please enter the ISO Code of the currency.");
define("NBILL_INSTR_CURRENCY_NAME", "Proper name of currency (eg. 'US Dollars', 'Euros')");
define("NBILL_INSTR_CURRENCY_CODE", "ISO Code of currency (eg. 'USD', 'EUR')");
define("NBILL_INSTR_CURRENCY_SYMBOL", "Symbol used to prefix amounts (eg. '&#36;', '&euro;') - note: it is safest to use HTML codes (eg. &amp;#36; &amp;euro;).");
define("NBILL_ERR_CANNOT_DELETE_LAST_CURRENCY", "You cannot delete the last currency!");
define("NBILL_ERR_CANNOT_DELETE_CURRENCY_IN_USE", "One or more currencies you tried to delete are in use by one or more vendors. Process aborted - you cannot delete a currency that is being used by a vendor.");