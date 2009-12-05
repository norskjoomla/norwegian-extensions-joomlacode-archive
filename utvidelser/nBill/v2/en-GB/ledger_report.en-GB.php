<?php
/**
* Language file for the Ledger Report
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

define("NBILL_LEDGER_REPORT_TITLE", "Nominal Ledger Report");
define("NBILL_LEDGER_REPORT_INTRO", "This report shows a breakdown of the income and expenditure against each nominal ledger code. You can expand each ledger code to see the individual items that make up the total. The 'Balance' column just refers to the net profit/loss for the given date range, and bears no relation to the balance in your bank account!");
define("NBILL_LEDGER_REPORT_INCOME", "Income");
define("NBILL_LEDGER_REPORT_EXPENDITURE", "Expenditure");
define("NBILL_LEDGER_REPORT_NOMINAL_CODE", "Nominal Ledger Code");
define("NBILL_LEDGER_REPORT_NET_AMOUNT", "Net Amount");
define("NBILL_LEDGER_REPORT_TAX_AMOUNT", "Tax Amount");
define("NBILL_LEDGER_REPORT_GROSS_AMOUNT", "Gross Amount");
define("NBILL_LEDGER_REPORT_DATE", "Date");
define("NBILL_LEDGER_REPORT_RECEIPT_NO", "Receipt No.");
define("NBILL_LEDGER_REPORT_PAYMENT_NO", "Payment No.");
define("NBILL_LEDGER_REPORT_FROM", "From");
define("NBILL_LEDGER_REPORT_FOR", "For");
define("NBILL_LEDGER_REPORT_AWAITING_RCT_NO", "Awaiting Receipt No.");
define("NBILL_LEDGER_REPORT_AWAITING_PYT_NO", "Awaiting Payment No.");
define("NBILL_LEDGER_REPORT_INVOICE", "Invoice");
define("NBILL_LEDGER_REPORT_TOTAL", "Total for %s (%s transactions)");
define("NBILL_LEDGER_REPORT_EXPAND_ALL", "Expand All");
define("NBILL_LEDGER_REPORT_TOTAL_INCOME", "Income Total (%s transactions)");
define("NBILL_LEDGER_REPORT_PAID_TO", "Paid To");
define("NBILL_LEDGER_REPORT_CREDIT_NOTE", "Credit Note");
define("NBILL_LEDGER_REPORT_CLIENT_REFUND", "Client Refund");
define("NBILL_LEDGER_REPORT_TOTAL_EXPENDITURE", "Expenditure Total (%s transactions)");
define("NBILL_LEDGER_REPORT_PF_EXPANDED", "Printer Friendly (Expanded)");
define("NBILL_LEDGER_REPORT_PF_COLLAPSED", "Printer Friendly (Collapsed)");
define("NBILL_LEDGER_REPORT_PERCENTAGE", "Percentage");
define("NBILL_LEDGER_TX_COUNT", "(%s transactions)");