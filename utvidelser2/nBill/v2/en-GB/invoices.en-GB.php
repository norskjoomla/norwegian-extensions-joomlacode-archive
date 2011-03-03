<?php
/**
* Language file for Invoices
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

//Invoices
define("NBILL_INVOICES_TITLE", "Invoices");
define("NBILL_INVOICES_INTRO", "You can generate invoices for ALL outstanding orders up to a given date by clicking the 'Generate All' toolbar button above. You can also generate invoices for individual orders from the <a href=\"" . nbf_cms::$interop->admin_page_prefix . "&action=orders\">order summary screen</a>. Alternatively, you can create and edit invoices manually using the 'New' and 'Edit' toolbar buttons above. You can also get printer-friendly versions of these invoices by checking the boxes next to the invoices you want to print, and clicking on the 'HTML Preview' or 'PDF Preview' toolbar buttons.");
define("NBILL_INVOICE_NUMBER", "Invoice Number");
define("NBILL_BILLING_NAME", "Billing Name");
define("NBILL_EDIT_INVOICE", "Edit Invoice");
define("NBILL_NEW_INVOICE", "New Invoice");
define("NBILL_TOTAL_NET", "Net Total");
define("NBILL_TOTAL_GROSS", "Gross Total");
define("NBILL_PAID_IN_FULL", "Paid in Full");
define("NBILL_INVOICE_PAID", "Paid");
define("NBILL_INVOICE_NOT_PAID", "Not Paid");
define("NBILL_GENERATE_ALL", "Generate All");
define("NBILL_PRINT", "HTML Preview");
define("NBILL_PDF", "PDF Preview");
define("NBILL_BILLING_ADDRESS", "Billing Address");
define("NBILL_REFERENCE", "Reference");
define("NBILL_INVOICE_DATE", "Invoice Date");
define("NBILL_FIRST_ITEM", "First Item on Invoice");
define("NBILL_INVOICE_ITEMS", "Invoice Items");
define("NBILL_INVOICE_ITEM_NAME", "Description");
define("NBILL_INVOICE_ITEM_LEDGER", "Nominal Ledger Code");
define("NBILL_INVOICE_ITEM_NET_PRICE", "Unit Price");
define("NBILL_INVOICE_ITEM_QTY", "Quantity");
define("NBILL_INVOICE_ITEM_DISCOUNT_DESC", "Discount Description");
define("NBILL_INVOICE_ITEM_DISCOUNT_AMOUNT", "Discount Amount");
define("NBILL_INVOICE_ITEM_TOTAL_NET", "Net Price");
define("NBILL_INVOICE_ITEM_TAX", "Tax");
define("NBILL_INVOICE_ITEM_SHIPPING_SERVICE", "Shipping Service");
define("NBILL_INVOICE_ITEM_SHIPPING", "Shipping");
define("NBILL_INVOICE_ITEM_SHIPPING_TAX", "Tax on Shipping");
define("NBILL_INVOICE_ITEM_GROSS", "Gross Price");
define("NBILL_NEW_INVOICE_ITEM", "New");
define("NBILL_TOTAL_TAX", "Total Tax");
define("NBILL_TOTAL_SHIPPING", "Total Shipping");
define("NBILL_TOTAL_SHIPPING_TAX", "Tax on Shipping");
define("NBILL_INVOICE_PAY_INSTR", "Payment Instructions");
define("NBILL_INVOICE_SMALL_PRINT", "Small Print");
define("NBILL_INVOICE_PAID_IN_FULL", "Paid in Full?");
define("NBILL_INVOICE_PARTIAL_PAYMENT", "Partially Paid?");
define("NBILL_INVOICE_REFUND_IN_FULL", "Refunded in Full?");
define("NBILL_INVOICE_PARTIAL_REFUND", "Partially Refunded?");
define("NBILL_INSTR_INVOICE_NUMBER", "<strong>Note:</strong> Leave blank if adding a new invoice - the component will automatically assign the next available invoice number.");
define("NBILL_INSTR_BILLING_NAME", "The name of the person and/or company being billed.");
define("NBILL_INSTR_BILLING_ADDRESS", "Include the whole address EXCEPT for the country (this is stored separately, below).");
define("NBILL_INSTR_REFERENCE", "Your own reference id for this client or transaction.");
define("NBILL_INSTR_INVOICE_DATE", "");
define("NBILL_INSTR_INVOICE_PAY_INSTR", "Give details of how the customer can pay you (eg. bank details)");
define("NBILL_INSTR_INVOICE_SMALL_PRINT", "Any legal information you want to display on the invoice (eg. interest charged if payment is late).");
define("NBILL_INSTR_INVOICE_PAID_IN_FULL", "<strong>WARNING!</strong> Setting this value from here overrides the normal process of creating an 'Income' item. This is OK if you do not intend to use the income feature, but it is recommended that you mark invoices as paid by clicking on the red 'X' on the invoice list, rather than setting the value here.");
define("NBILL_INSTR_INVOICE_PARTIAL_PAYMENT", "Whether part but not all of the total has been paid");
define("NBILL_INSTR_INVOICE_REFUND_IN_FULL", "");
define("NBILL_INSTR_INVOICE_PARTIAL_REFUND", "Whether part but not all of the total has been refunded");
define("NBILL_ERR_REDIRECT_BACK", "The invoice has NOT been saved. Please try again later or enter an invoice number manually.  You are being redirected to the previous page - you may have to refresh your browser, but any data you have entered should still be present.");
define("NBILL_ERR_VENDOR_NOT_FOUND", "Vendor not found.");
define("NBILL_ERR_COULD_NOT_CREATE_INVOICE", "Unable to insert new invoice record in the database.");
define("NBILL_AUTO_GENERATED_INVOICE", "Auto-generated Invoice");
define("NBILL_PRINT_PREVIEW_DONE", "Printer friendly version should have opened in a new window. If not, try holding down 'Ctrl' while clicking the print preview button, or de-activate your browser's popup blocker for this site. %sClick here to clear this message.%s");
define("NBILL_ERR_TEMPLATE_NOT_FOUND", "<strong>Invoicing template '%s' not found!</strong> Please ensure a valid invoice template file is located at '%s'.");
define("NBILL_SELECT_VENDOR_FOR_PRINT", "Print preview only available when a vendor is selected");
define("NBILL_PDF_NOT_INSTALLED", "PDF Output not available - requires <a target=\"_blank\" href=\"http://" . NBILL_BRANDING_HTML2PS . "\">HTML2PS</a>");
define("NBILL_REFUND_DESC", "Account Credit");
define("NBILL_BILLING_NAME_REQUIRED", "You must enter a billing name.");
define("NBILL_BILLING_ADDRESS_REQUIRED", "You must enter a billing address.");
define("NBILL_ALL_OUTSTANDING", "Show ALL unpaid invoices regardless of date");
define("NBILL_INVOICE_ITEM_CODE", "SKU");
define("NBILL_REFUND", "REFUND"); //The SKU for refunds

define("NBILL_INVOICE_EMAILED", "E-Mail");
define("NBILL_EMAIL_FAILED", "An attempt was made to send an e-mail, but an error occurred which prevented the e-mail from being sent. Please check your server configuration to ensure it is capable of sending e-mails.");
define("NBILL_EMAIL_FAILED_NO_ADDRESS", "An attempt was made to send an e-mail, but an e-mail address was not supplied and no e-mail address could be located for the customer.");
define("NBILL_EMAIL_SENT", "E-Mail sent to client %s");
define("NBILL_EMAIL_NOT_DUE", "E-Mail not sent (client record indicated no automatic invoices by e-mail).");
define("NBILL_EMAIL_NOW", "Send this invoice to the client by e-mail now");
define("NBILL_SEND_EMAIL", "Send E-Mail");
define("NBILL_EMAIL_OPTIONS", "E-Mail Options");
define("NBILL_INVOICE_LBL_WRITTEN_OFF", "Written Off");
define("NBILL_INVOICE_WRITTEN_OFF", "Written Off?");
define("NBILL_INSTR_INVOICE_WRITTEN_OFF", "If you have given up hope of this invoice ever being paid, and just want to write it off, select 'Yes' here and enter the details below.");
define("NBILL_INVOICE_WRITE_OFF_DATE", "Date Written Off");
define("NBILL_INSTR_WRITE_OFF_DATE", "Enter the date on which this invoice was written off (if you have paid any tax on this and indicate below that you wish to claim it back, the tax summary report will account for the amount on the given date).");
define("NBILL_INVOICE_CLAIM_BACK", "Claim Tax Back?");
define("NBILL_INSTR_INVOICE_CLAIM_BACK", "Do you want to deduct the tax amount of this invoice (if any) from the tax due figure on the tax summary report for the given write-off date? (only applicable if you pay tax on invoices raised before they are paid)");
define("NBILL_WRITTEN_OFF_DATE_REQUIRED", "Please indicate the date on which this invoice was written off.");
define("NBILL_VENDOR", "Vendor");
define("NBILL_INVOICE_TAX_RATE", "Tax Rate");
define("NBILL_INVOICE_SHIPPING_TAX_RATE", "Shipping Tax Rate");
define("NBILL_INSTR_INVOICE_TAX_RATE", "The standard tax rate used to automatically calculate the tax due for this invoice (actual tax amount can still be overridden below)");
define("NBILL_INSTR_INVOICE_SHIPPING_TAX_RATE", "The standard tax rate for shipping, used to automatically calculate the tax due on any shipping amount for this invoice (actual shipping tax amount can still be overridden below)");
define("NBILL_INVOICE_VENDOR_NAME_REQUIRED", "You must provide a name for the vendor.");
define("NBILL_INVOICE_VENDOR_ADDRESS_REQUIRED", "You must specify the vendor\'s address");
define("NBILL_INSTR_VENDOR_NAME", "");
define("NBILL_INSTR_VENDOR_ADDRESS", "");
define("NBILL_AUTO_INVOICE_INTRO", "%s invoice(s) generated. Date used for invoice generation purposes: %s. Date and time of generation: %s");
define("NBILL_AUTO_INVOICE_CURRENCY", "Currency");
define("NBILL_AUTO_INVOICE_EMAILED", "E-Mail Sent to Client?");
define("NBILL_AUTO_INVOICE_YES", "Yes");
define("NBILL_AUTO_INVOICE_NO", "No");
define("NBILL_AUTO_INVOICE_SUBJECT", NBILL_BRANDING_NAME . " Auto Invoice Generator");
define("NBILL_AUTO_INVOICE_FAILURE", "FAILURE");
define("NBILL_AUTO_INVOICE_NO_LICENSE", NBILL_BRANDING_NAME . " License Key Incorrect, or Not Found");
define("NBILL_INVOICE_SHOW_PAYLINK", "Show Payment Link?");
define("NBILL_INSTR_INVOICE_SHOW_PAYLINK", "Whether or not to show a 'Pay This Invoice' link next to the invoice. The value of the global setting depends on the order record(s) - if applicable - otherwise, the display options (you can set a payment frequency threshold - see the display options screen for more information). The payment link will only be shown if the invoice is unpaid, a default gateway is specified on the vendor record, and the gross total on the invoice is greater than zero.");
define("NBILL_INVOICE_PAYLINK_USE_GLOBAL", "Use Global");
define("NBILL_INVOICE_PAYLINK_SHOW", "Show");
define("NBILL_INVOICE_PAYLINK_HIDE", "Hide");

/* Version 1.1.4 */
define("NBILL_INVOICE_ORDER_NO", "Order Number");

//Version 1.2.0
define("NBILL_INVOICE_LOOKUP_SKU", "Lookup SKU");

//Version 1.2.0 SP2
define("NBILL_PAYLINK", "Payment Link");
define("NBILL_INVOICE_SELECT_PRODUCT", "Select Product");

//Version 1.2.1
define("NBILL_INVOICE_SHOW_ALL", "Show All");
define("NBILL_INVOICE_SHOW_ALL_UNPAID", "Show Unpaid Only");
define("NBILL_INVOICE_SHOW_RESET", "Reset Date Range");
define("NBILL_SHOW_INCOME_RECORDS", "Show Related Income Record(s)");
define("NBILL_SHOW_EXPENDITURE_RECORDS", "Show Related Expenditure Record(s)");
define("NBILL_SHOW_ORDER_RECORDS", "Show Related Order Record(s)");
define("NBILL_EMAIL_ATTACH_OPTIONS", "Attachment");
define("NBILL_EMAIL_ATTACH_HTML", "HTML");
define("NBILL_EMAIL_ATTACH_PDF", "PDF");
define("NBILL_EMAIL_ATTACH_NONE", "None");
define("NBILL_EMAIL_NOT_DUE_ADHOC", "E-Mail not sent (ad-hoc items are not emailed automatically).");

//Version 1.2.6
define("NBILL_INVOICE_RECORD_LIMIT_WARNING", "WARNING! As there %s or more clients in your database, only the first %s records have been loaded into the above list. If the client you require is not here, you can either click on 'Show All' (below), or select the 'create new invoice' icon on the client list (the appropriate record will then be selected here automatically).");

//Version 2.0.0
define("NBILL_INVOICE_TOTAL_THIS_PAGE", "Total for all invoices shown on THIS page (including written off amounts):");
define("NBILL_INVOICE_TOTAL_ALL_PAGES", "Total for ALL invoices on ALL pages in the selected date range (including written off amounts):");
define("NBILL_INVOICE_ITEM_TAX_RATE", "Tax Rate (%)");
define("NBILL_INVOICE_ITEM_SHIPPING_TAX_RATE", "Shipping Tax Rate (%)");
define("NBILL_BILLING_COUNTRY", "Billing Country");
define("NBILL_INSTR_BILLING_COUNTRY", "");
define("NBILL_INVOICE_HTML_HIDE", "Hide HTML");
define("NBILL_INVOICE_HTML_SHOW", "Show HTML");
@define("NBILL_PAYMENT_PLAN", "Payment Plan");
@define("NBILL_INSTR_PAYMENT_PLAN", "If a one-off amount is due, select which payment plan to implement (NOTE: not all payment gateways support payment plans)");
define("NBILL_INVOICE_PAY_STATUS", "Paid?");
define("NBILL_DOCUMENT_FILE_NOT_FOUND", "File %s not found.");
define("NBILL_DOCUMENT_FILE_UPLOADS", "Uploaded File");
define("NBILL_INSTR_DOCUMENT_FILE_UPLOADS", "File that was uploaded by the client when they submitted the quote request form that was used to create this record.");
define("NBILL_INVOICE_UNDER_PAYMENT_SCHEDULE", "A payment schedule has been set up for this invoice which should cause it to be paid in full after all of the installments have been paid. The client will therefore not be given the option to pay this invoice (otherwise it could become overpaid). If you want to lift this restriction and allow the invoice to be paid (for example, if the recurring payment schedule for the installments has failed or been cancelled), you can click on the following button, then click on either the APPLY or SAVE toolbar button.");
define("NBILL_INVOICE_REMOVE_GATEWAY_TXN_ID_SURE", "Are you sure you want to allow the user to pay this invoice? If so, make sure the existing recurring payment schedule has been cancelled with the payment service provider.");
define("NBILL_INVOICE_REMOVE_GATEWAY_TXN_ID", "Remove Payment Schedule Association");
define("NBILL_INVOICE_GATEWAY_TXN_ID_REMOVED", "Payment Schedule Association Removed");
