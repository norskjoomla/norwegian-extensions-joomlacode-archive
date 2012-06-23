<?php
/**
* Language file for Credit Notes
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

define("NBILL_CREDITS_TITLE", "Credit Notes (Refunds)");
define("NBILL_CREDITS_INTRO", "Whenever you issue a refund, you should also produce an accompanying credit note detailing what the refund was for, and including a tax breakdown, if applicable.");
define("NBILL_INVOICE_NUMBER_CR", "Credit Note Number");
define("NBILL_BILLING_NAME_CR", "Payee");
define("NBILL_INVOICE_DATE_CR", "Credit Date");
define("NBILL_FIRST_ITEM_CR", "First Item on Credit Note");
define("NBILL_EDIT_INVOICE_CR", "Edit Credit Note");
define("NBILL_EMAIL_NOW_CR", "Send this credit note to the client by e-mail now");
define("NBILL_BILLING_NAME_REQUIRED_CR", "Please enter the payee name");
define("NBILL_BILLING_ADDRESS_REQUIRED_CR", "Please enter the payee address");
define("NBILL_NEW_INVOICE_CR", "New Credit Note");
define("NBILL_INVOICE_DETAILS_CR", "Credit Note Details");
define("NBILL_INSTR_INVOICE_NUMBER_CR", "<strong>Note:</strong> Leave blank if adding a new credit note - the component will automatically assign the next available credit note number.");
define("NBILL_INSTR_BILLING_NAME_CR", "The name of the person and/or company being refunded.");
define("NBILL_BILLING_ADDRESS_CR", "Payee Address");
define("NBILL_INVOICE_ITEMS_CR", "Credit Note Items");
define("NBILL_INSTR_INVOICE_PAID_IN_FULL_CR", "<strong>WARNING!</strong> Setting this value from here overrides the normal process of creating an 'Expenditure' item. This is OK if you do not intend to use the expenditure feature, but it is recommended that you mark credit notes as paid by clicking on the red 'X' on the credit note list, rather than setting the value here.");
define("NBILL_INSTR_VENDOR_NAME_CR", "Enter the name that you want to appear on your credit notes");
define("NBILL_INSTR_VENDOR_ADDRESS_CR", "Enter the address that you want to appear on your credit notes");

//Version 1.2.6
define("NBILL_INVOICE_RECORD_LIMIT_WARNING_CR", "WARNING! As there are %s or more clients in your database, only the first %s have been loaded into the above list. If the client you require is not here, please use the 'create new credit note' icon on the client list (the appropriate record will then be selected here automatically).");

//Version 2.0.0
define("NBILL_INVOICE_TOTAL_THIS_PAGE_CR", "Total for all credit notes shown on THIS page:");
define("NBILL_INVOICE_TOTAL_ALL_PAGES_CR", "Total for ALL credit notes on ALL pages in the selected date range:");