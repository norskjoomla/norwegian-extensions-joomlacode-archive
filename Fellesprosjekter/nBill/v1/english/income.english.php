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

//Income
define("INV_INCOME_TITLE", "Income");
define("INV_INCOME_INTRO", "You can list any income here, whether you have invoices for it or not. If you list all of your income here, you can use this list to reconcile against your bank statement.");
define("INV_INCOME_RECEIPT_NO", "Receipt Number");
define("INV_INCOME_DATE", "Date");
define("INV_INCOME_AMOUNT", "Amount");
define("INV_INCOME_INVOICE_NO", "Invoice");
define("INV_EDIT_INCOME", "Edit Income");
define("INV_NEW_INCOME", "New Income");
define("INV_NO_INVOICE_NO", "No Invoice Number");
define("INV_INCOME_DETAILS", "Income Details");
define("INV_RELATED_INVOICE", "Related Invoice(s)");
define("INV_RECEIVED_FROM", "Received From");
define("INV_PAYMENT_METHOD", "Payment Method");
define("INV_AMOUNT_RECEIVED", "Amount Received");
define("INV_DATE_RECEIVED", "Date Received");
define("INV_RECEIPT_REFERENCE", "Reference");
define("INV_INSTR_RECEIPT_NO", "<strong>Note:</strong> Leave blank if adding a new item - the component will automatically assign the next available receipt number.");
define("INV_INSTR_RELATED_INVOICE", "If this receipt is in payment of one or more invoices, select the invoice(s) here (unpaid invoices are listed here).");
define("INV_INSTR_RECEIVED_FROM", "");
define("INV_INSTR_PAYMENT_METHOD", "");
define("INV_INSTR_AMOUNT_RECEIVED", "Enter the amount without a currency symbol.");
define("INV_INSTR_DATE_RECEIVED", "");
define("INV_INSTR_RECEIPT_REFERENCE", "You can use this field for whatever you like, but it is intended to allow integration with an online payment agency. For example, you could store the key value for a separate database table in which your automated online transactions are stored (to allow you to tie up automated online transactions with your income list). If you use it in this way, it is unlikely you will need to type in a value yourself - your integration script should populate it automatically for you.");
define("INV_CASH", "Cash");
define("INV_CHEQUE", "Cheque");
define("INV_CREDIT_CARD", "Credit/Debit Card");
define("INV_DIRECT_DEBIT", "Direct Debit");
define("INV_BANK_TRANSFER", "Bank Transfer");
define("INV_STANDING_ORDER", "Standing Order");
define("INV_ONLINE_AGENCY", "Online Agency (eg. PayPal)");
define("INV_OTHER", "Other");
define("INV_RECEIVED_FOR", "Received For");
define("INV_INSTR_RECEIVED_FOR", "Indicate what the payment was for (if it does not relate to an invoice - eg. bank interest)");
define("INV_LEDGER_BREAKDOWN", "Nominal Ledger Breakdown");
define("INV_LEDGER_BREAKDOWN_MISMATCH", "WARNING! The nominal ledger breakdown total does not match the amount of the income. To go ahead and save anyway, click OK, otherwise click on Cancel and amend the nominal ledger breakdown or amount received.");
define("INV_TAX_RATE_AND_AMOUNT", "Tax Rates and Amounts");
define("INV_INSTR_TAX_RATE_AND_AMOUNT", "If the income includes an element of tax, you can specify the rate and amount here (up to 3 different rates per income item). Enter the amount of actual tax only (not the full amount of income). If tax is not applicable, leave it blank or enter zero. This information is used in preparing your tax summary report ONLY if you pay tax on amounts received rather than amounts invoiced. <strong>PLEASE NOTE:</strong> When you select an invoice from the list, if the invoice has several items on it, the tax amount(s) might appear to be fractionally too high for the given rate. However, this is due to the tax for individual items on the invoice being rounded up, and it is therefore NOT an error.");
define("INV_NET_RECEIPT", "Net Receipt");
define("INV_INSTR_NET_RECEIPT", "Amount received after tax has been deducted.");
define("INV_INCOME_TAX_RATE", "Rate");
define("INV_INCOME_TAX_AMOUNT", "Amount");
define("INV_SELECT_VENDOR_FOR_RECEIPT_NO_GEN", "Receipt No. Generation only available when vendor selected");
define("INV_GENERATE_RECEIPTS_UP_TO", "Enter the date (YYYY/MM/DD) up to which you want to generate numbers. Any items AFTER this date will not be given receipt numbers.");
define("INV_GENERATE_RECEIPT_NOS", "Generate Receipt Numbers");
define("INV_RECEIPT_NOS_GENERATED", "%s Receipt Numbers Generated%s");
define("INV_UNNUMBERED", "Awaiting Receipt No.");
define("INV_INCOME_NO_SUMMARY", "Omit From Tax Summary?");
define("INV_INSTR_INCOME_NO_SUMMARY", "If you want this income item to be ignored when producing the tax summary report, set this to 'yes'. For example, in the UK, some income may not get included on your tax return (such as money from insurance claims). Most income should be included on the tax summary though.");
define("INV_INCOME_FROM_REQUIRED", "Please specify from whom this income was received.");
@define("INV_GENERATE_MASTER", "WARNING! This will also generate receipt numbers for the MASTER database(s)!");

//Version 1.2.6
define("INV_INCOME_RECORD_LIMIT_WARNING", "WARNING! As there are %s or more unpaid invoices in your database, only the first %s records have been loaded into the above list. If the item you require is not here, you can either click on 'Show All' (below), or mark it as paid on the invoice list (it will then be selected here automatically).");

//Version 1.2.7
define("INV_INCOME_SHOW_ALL", "Show All");
?>
