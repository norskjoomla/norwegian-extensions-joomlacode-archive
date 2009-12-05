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

//Expenditure
define("INV_EXPENDITURE_TITLE", "Expenditure");
define("INV_EXPENDITURE_INTRO", "You can record all of your expenses here, and include any tax breakdowns and nominal ledger breakdowns which can then be used in producing reports.");
define("INV_PAYMENT_NO", "Payment Number");
define("INV_PAYMENT_DATE", "Payment Date");
define("INV_PAID_TO", "Paid To");
define("INV_PAYMENT_AMOUNT", "Amount");
define("INV_PAYMENT_FOR", "For");
define("INV_EXP_LEDGER_BREAKDOWN_MISMATCH", "WARNING! The nominal ledger breakdown total does not match the amount of the expenditure. To go ahead and save anyway, click OK, otherwise click on Cancel and amend the nominal ledger breakdown or amount paid.");
define("INV_EDIT_EXPENDITURE", "Edit Expenditure");
define("INV_NEW_EXPENDITURE", "New Expenditure");
define("INV_EXPENDITURE_DETAILS", "Expenditure Details");
define("INV_INCOME_PAYMENT_NO", "Payment Number");
define("INV_INSTR_PAYMENT_NO", "<strong>Note:</strong> Leave blank if adding a new expenditure item - the component will automatically assign the next available payment number.");
define("INV_INSTR_SUPPLIER", "If you have already defined the supplier in the supplier list, you can select them here. If this is a one-off supply, you can just type in the supplier details below.");
define("INV_INSTR_SUPPLIER_NAME", "The company or person to whom payment was made.");
define("INV_EXPENDITURE_FOR", "For");
define("INV_INSTR_EXPENDITURE_FOR", "Describe what the payment was for");
define("INV_DATE_PAID", "Date Paid");
define("INV_INSTR_DATE_PAID", "");
define("INV_AMOUNT_PAID", "Total Amount Paid (including tax)");
define("INV_INSTR_AMOUNT_PAID", "");
define("INV_PAYMENT_REFERENCE", "Payment Reference");
define("INV_INSTR_PAYMENT_REFERENCE", "Your reference with the supplier for this payment");
define("INV_EXP_TAX_RATE_AND_AMOUNT", "Tax Rates and Amounts");
define("INV_INSTR_EXP_TAX_RATE_AND_AMOUNT", "If the expenditure includes an element of tax, you can specify the rate and amount here (up to 3 different rates per expenditure item). Enter the amount of actual tax only (not the full amount of the payment). If tax is not applicable, leave it blank or enter zero. This information is used in preparing your tax summary report.");
define("INV_EXP_TAX_RATE", "Rate");
define("INV_EXP_TAX_AMOUNT", "Amount");
define("INV_EXP_TAX_REFERENCE", "Tax Reference");
define("INV_INSTR_EXP_TAX_REFERENCE", "VAT Number or Sales Tax reference number of this supplier");
define("INV_EXP_NO_SUMMARY", "Omit From Tax Summary?");
define("INV_INSTR_EXP_NO_SUMMARY", "If you want this expenditure item to be ignored when producing the tax summary report, set this to 'yes'. For example, in the UK, some expenditure may not get included on your tax return (such as salaries). Most expenditure should be included on the tax summary though.");
define("INV_EXP_SUPPLIER_NAME_REQUIRED", "Please specify to whom the payment was made (supplier name).");
define("INV_EXP_WHAT_FOR", "WARNING! You have not entered what the payment was for. To go ahead and save anyway, click OK, or to go back and enter a value, click Cancel.");
define("INV_EXP_NO_AMOUNT", "WARNING! You have not entered an amount. To go ahead and save anyway, click OK, or to go back and enter a value, click Cancel.");
define("INV_EXP_PAYEE", "Payee");
define("INV_SELECT_VENDOR_FOR_PAYMENT_NO_GEN", "Payment No. Generation only available when vendor selected");
define("INV_GENERATE_PAYMENTS_UP_TO", "Enter the date (YYYY/MM/DD) up to which you want to generate numbers. Any items AFTER this date will not be given payment numbers.");
define("INV_GENERATE_PAYMENT_NOS", "Generate Payment Numbers");
define("INV_PAYMENT_NOS_GENERATED", "%s Payment Numbers Generated%s");
define("INV_EXP_UNNUMBERED", "Awaiting Payment No.");
define("INV_RELATED_CREDITS", "Related Credit Note(s)");
define("INV_INSTR_RELATED_CREDITS", "If this expenditure is in payment of one or more credit notes, select the credit note(s) here (unpaid credit notes are listed here).");
define("INV_EXP_PAYEE_ADDRESS", "Payee Address");
define("INV_INSTR_PAYEE_ADDRESS", "Address of person or company to whom payment was made");
define("INV_GENERATE_MASTER", "WARNING! This will also generate payment numbers for the MASTER database(s)!");
?>