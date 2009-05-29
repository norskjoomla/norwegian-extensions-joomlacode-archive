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

//Tax Summary Report
define("INV_TAX_SUMMARY_TITLE", "Tax Summary Report");
define("INV_TAX_SUMMARY_INTRO", "This report shows the total amount of tax that has been charged for the given date range. Some tax schemes allow you to account for tax only after it has been paid to you by the consumer. Others require you to account for tax on all invoices raised, regardless of whether they have been paid or not. Use the radio button below to indicate which of these options to use, then specify a date range and click on 'Go' to get the totals. Note: if you include unpaid invoices, these will only be included if the date they were raised falls within the selected date range - it is therefore possible for the totals to be lower than if you select not to include unpaid invoices (as that will include all income received during the selected date range, even if the invoices to which they relate were raised before the selected date range).");
define("INV_INCLUDE_UNPAID", "Include Unpaid Invoices?");
define("INV_TAX_BREAKDOWN_INC", "Tax Breakdown - Income");
define("INV_TAX_BREAKDOWN_EXP", "Tax Breakdown - Expenditure");
define("INV_TOTAL_TAXABLE", "Total Taxable Income");
define("INV_TOTAL_TAXABLE_DUE", "Total Taxable Income Due");
define("INV_INSTR_TOTAL_TAXABLE", "This is the total amount received on which tax is due.");
define("INV_INSTR_TOTAL_TAXABLE_DUE", "This is the total amount invoiced for on which tax is due.");
define("INV_TOTAL_NON_TAXABLE", "Total Non-Taxable Income");
define("INV_TOTAL_NON_TAXABLE_DUE", "Total Non-Taxable Income Due");
define("INV_INSTR_TOTAL_NON_TAXABLE", "This is the total amount received on which no tax is due (this may include income that is not related to any invoices raised, eg. bank interest).");
define("INV_INSTR_TOTAL_NON_TAXABLE_DUE", "This is the total amount invoiced for on which no tax is due (this may include income that is not related to any invoices raised, eg. bank interest).");
define("INV_GROSS_TOTAL", "Gross Total");
define("INV_INSTR_GROSS_TOTAL", "Total income including tax");
define("INV_INSTR_GROSS_TOTAL_DUE", "Total income due including tax");
define("INV_VAT_RPT_TOTAL_TAX", "Total");
define("INV_VAT_RPT_TAX_NAME", "Tax");
define("INV_INSTR_VAT_RPT_TOTAL_TAX", "Total tax collected");
define("INV_INSTR_VAT_RPT_TOTAL_TAX_DUE", "Total tax due");
define("INV_VAT_RPT_TOTAL_NET", "Total Net");
define("INV_INSTR_VAT_RPT_TOTAL_NET", "Net income after tax");
define("INV_INSTR_VAT_RPT_TOTAL_NET_DUE", "Net income due after tax");
define("INV_VAT_RPT_DISCREPANCIES", "WARNING! Discrepancies Found");
define("INV_INSTR_VAT_RPT_DISCREPANCIES", "The invoice numbers shown here appear to have been manually altered such that the net amount and tax do not add up to the gross total for at least one item on the invoice, or the sum of the individual invoice items does not match the total for the invoice. This means the above figures may not be correct. Please check the value of each amount (net, tax, carriage, carriage tax, and gross) on these invoices and correct them if necessary. If you cannot see anything wrong with the invoices, just try saving them again (this will cause the figures to be recalculated). If you keep getting this message after having checked and re-saved the invoice(s), the invoice(s) may be corrupt in which case you will need to delete them and re-create them manually (by going to the invoice list, and clicking on the 'new' toolbar button).");
define("INV_EXCLUDED_INCOME_TITLE", "Income");
define("INV_EXCLUDED_EXPENDITURE_TITLE", "Expenditure");
define("INV_TAX_SUMMARY_LIST_EXCLUDED", "Click here for a list of items that have been excluded from this report");
define("INV_TAX_SUMMARY_EXCLUDED_TITLE", "Tax Summary Excluded Items");
define("INV_TAX_SUMMARY_EXCLUDED_INTRO", "The following income/expenditure items were excluded from the Tax Summary report because the relevant income/expenditure records indicate that they should be excluded. You can click on any of the listed items to edit them (NOTE: the main window will be redirected to edit the income or expenditure item - this window will stay where it is).");
define("INV_TAX_SUMMARY_EXCLUDED_NO_INCOME", "No income items were excluded.");
define("INV_TAX_SUMMARY_EXCLUDED_NO_EXP", "No expenditure items were excluded.");
define("INV_TAX_EXCLUDED_RCT_NO", "Receipt No.");
define("INV_TAX_EXCLUDED_DATE", "Date");
define("INV_TAX_EXCLUDED_RCD_FROM", "Received From");
define("INV_TAX_EXCLUDED_AMOUNT", "Amount");
define("INV_TAX_EXCLUDED_INV_NO", "Invoice No.");
define("INV_TAX_EXCLUDED_RCT_UNNUMBERED", "Awaiting Receipt No.");
define("INV_TAX_EXCLUDED_EDIT_INC", "Edit Income");
define("INV_TAX_EXCLUDED_NO_INV", "No Invoice Number");
define("INV_TAX_EXCLUDED_PYT_NO", "Payment No.");
define("INV_TAX_EXCLUDED_PAID_TO", "Paid To");
define("INV_TAX_EXCLUDED_PYT_FOR", "For");
define("INV_TAX_EXCLUDED_PYT_UNNUMBERED", "Awaiting Payment No.");
define("INV_TAX_EXCLUDED_EDIT_EXP", "Edit Expenditure");
define("INV_TAX_EXCLUDED_WO_NAME", "Billing Name");
define("INV_TAX_EXCLUDED_WO_TOTAL", "Gross Total");
define("INV_TAX_EXCLUDED_WO_PREVIEW", "Print Preview");
define("INV_WRITE_OFFS_TITLE", "Written-off Invoices");
define("INV_TAX_SUMMARY_EXCLUDED_NO_WO", "No written-off invoices were excluded.");
define("INV_TOTAL_TAXABLE_PAID", "Total Taxable Expenditure");
define("INV_INSTR_TOTAL_TAXABLE_PAID", "This is the total net amount paid out, on which tax was due.");
define("INV_TOTAL_NON_TAXABLE_PAID", "Total Non-Taxable Expenditure");
define("INV_INSTR_TOTAL_NON_TAXABLE_PAID", "This is the total amount paid out on which no tax was due.");
define("INV_INSTR_GROSS_TOTAL_PAID", "Total expenditure including tax.");
define("INV_INSTR_VAT_RPT_TOTAL_TAX_PAID", "Total tax paid");
define("INV_INSTR_VAT_RPT_TOTAL_NET_PAID", "Net expenditure");
define("INV_TAX_BREAKDOWN_WO", "Tax Breakdown - Written Off Invoices");
define("INV_TOTAL_TAXABLE_DUE_WO", "Total Taxable Income Written Off");
define("INV_INSTR_TOTAL_TAXABLE_DUE_WO", "This is the total amount invoiced for, but written off, on which tax was due.");
define("INV_TOTAL_NON_TAXABLE_DUE_WO", "Total Non-Taxable Income Written Off");
define("INV_INSTR_TOTAL_NON_TAXABLE_DUE_WO", "This is the total amount invoiced for, but written off, on which no tax was due.");
define("INV_GROSS_TOTAL_WO", "Gross Total");
define("INV_INSTR_GROSS_TOTAL_DUE_WO", "Total income written off, including tax.");
define("INV_VAT_RPT_TOTAL_TAX_WO", "Total");
define("INV_VAT_RPT_TAX_NAME_WO", "Tax");
define("INV_INSTR_VAT_RPT_TOTAL_TAX_DUE_WO", "Total tax written off");
define("INV_VAT_RPT_TOTAL_NET_WO", "Total Net");
define("INV_INSTR_VAT_RPT_TOTAL_NET_DUE_WO", "Net amount written off after tax");
define("INV_VAT_RPT_DISCREPANCIES_WO", "WARNING! Discrepancies Found");
define("INV_INSTR_VAT_RPT_DISCREPANCIES_WO", "The invoice numbers shown here appear to have been manually altered such that the net amount and tax do not add up to the gross total for at least one item on the invoice, or the sum of the individual invoice items does not match the total for the invoice. This means the above figures may not be correct. Please check the value of each amount (net, tax, carriage, carriage tax, and gross) on these invoices and correct them if necessary. If you cannot see anything wrong with the invoices, just try saving them again (this will cause the figures to be recalculated). If you keep getting this message after having checked and re-saved the invoice(s), the invoice(s) may be corrupt in which case you will need to delete them and re-create them manually (by going to the invoice list, and clicking on the 'new' toolbar button).");
define("INV_TAX_SUMMARY", "SUMMARY (For tax purposes only)");
define("GROSS_PROFIT_LOSS", "Gross Profit (or Loss)");
define("TAX_PAYABLE_REBATE_DUE", "Total Tax Payable (or Rebate Due)");
define("NET_PROFIT_LOSS", "Net Profit (or Loss)");

//Version 1.2.1
define("INV_TAX_SUMMARY_DETAILED", "Show Detailed Breakdown? (Can be slow!)");
?>
