<?php
/**
* Language file for the default invoice template
* @version 1
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

//Invoicing Template
define("NBILL_PRT_INVOICE_TITLE", "INVOICE");
define("NBILL_PRT_INVOICE_NO", "Invoice No:");
define("NBILL_PRT_AMOUNT_DUE", "Invoice Total:");
define("NBILL_PAYMENT_RECEIVED", "The following payment(s) have been received (thank you):");
define("NBILL_FULL_PAYMENT_RECEIVED", "Paid in Full. Thank you.");
define("NBILL_REMITTANCE_ADVICE", "Remittance Advice");
define("NBILL_REMITTANCE_INTRO", "If sending payment in the mail, please enclose this remittance advice to enable us to identify what your payment is for. Thank you.");
define("NBILL_RECEIVED_FROM", "Received From");
define("NBILL_PAYMENT_DATE", "Payment Date");
define("NBILL_PAYMENT_METHOD", "Method");
define("NBILL_PAYMENT_AMOUNT" , "Payment Amount");
define("NBILL_PAYMENT_REFERENCE", "Our Reference");
define("NBILL_TOTAL_PAID", "Total Amount Paid");
define("NBILL_TOTAL_DUE", "Amount Outstanding:");
define("NBILL_REFERENCE_UNKNOWN", "Not Yet Assigned");
define("NBILL_IF_NO_SCHEDULE", "If you do not already have a payment schedule set up for this, please");
define("NBILL_PAY_THIS_INVOICE", "click here to pay this invoice");