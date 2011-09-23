<?php
/**
* Language file for the Transaction Report
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

define("NBILL_TRANSACTIONS_TITLE", "Transaction Statement");
define("NBILL_TRANSACTIONS_INTRO", "This is a list of all of the income and expenditure items that have been recorded for the given date range. No income or expenditure items are excluded, but this report does not include any unpaid invoices.");
define("NBILL_TR_INCOME", "Gross In");
define("NBILL_TR_EXPENDITURE", "Gross Out");
define("NBILL_TR_ITEM_NO", "Number");
define("NBILL_TR_RECEIPT", "Rct");
define("NBILL_TR_PAYMENT", "Pyt");
define("NBILL_TR_DATE", "Date");
define("NBILL_TR_FROM_TO", "From/To");
define("NBILL_TR_FOR", "For");
define("NBILL_TR_INVOICE", "Invoice");
define("NBILL_TR_CREDIT_NOTE", "Credit Note");
define("NBILL_TR_LEDGER", "Ledger");
define("NBILL_TR_NET_AMOUNT", "Net Amount");
define("NBILL_TR_TAX", "Tax");
define("NBILL_TR_TOTAL", "Total (%s transactions)");
define("NBILL_TR_BALANCE", "Balance");
define("NBILL_TR_AWAITING_RCT_NO", "Awaiting Receipt No.");
define("NBILL_TR_AWAITING_PYT_NO", "Awaiting Payment No.");
define("NBILL_TR_CLIENT_REFUND", "Client Refund");

//Version 2.0.0
define("NBILL_TR_NET_INCOME", "Net In");
define("NBILL_TR_TAX_INCOME", "Tax In");
define("NBILL_TR_NET_EXPENDITURE", "Net Out");
define("NBILL_TR_TAX_EXPENDITURE", "Tax Out");