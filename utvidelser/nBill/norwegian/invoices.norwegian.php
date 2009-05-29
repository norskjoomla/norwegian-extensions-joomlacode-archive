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

//Invoices
define("INV_INVOICES_TITLE", "Invoices");
define("INV_INVOICES_INTRO", "You can generate invoices for ALL outstanding orders up to a given date by clicking the 'Generate All' toolbar button above. You can also generate invoices for individual orders from the <a href=\"index2.php?option=com_netinvoice&action=orders\">order summary screen</a>. Alternatively, you can create and edit invoices manually using the 'New' and 'Edit' toolbar buttons above. You can also get printer-friendly versions of these invoices by checking the boxes next to the invoices you want to print, and clicking on the 'HTML Preview' or 'PDF Preview' toolbar buttons (PDF is better suited to printing multiple invoices on separate pages, but HTML is quicker and can include images).");
@define("INV_INVOICE_NUMBER", "Invoice Number");
define("INV_BILLING_NAME", "Billing Name");
define("INV_EDIT_INVOICE", "Edit Invoice");
define("INV_NEW_INVOICE", "New Invoice");
@define("INV_TOTAL_NET", "Net Total");
@define("INV_TOTAL_GROSS", "Gross Total");
define("INV_PAID_IN_FULL", "Paid in Full");
@define("INV_INVOICE_PAID", "Paid");
define("INV_INVOICE_NOT_PAID", "Not Paid");
define("INV_GENERATE_ALL", "Generate All");
define("INV_PRINT", "HTML Preview");
define("INV_PDF", "PDF Preview");
define("INV_BILLING_ADDRESS", "Billing Address");
define("INV_REFERENCE", "Reference");
@define("INV_INVOICE_DATE", "Invoice Date");
@define("INV_FIRST_ITEM", "First Item on Invoice");
define("INV_INVOICE_ITEMS", "Invoice Items");
define("INV_INVOICE_ITEM_NAME", "Description");
define("INV_INVOICE_ITEM_LEDGER", "Nominal Ledger Code");
define("INV_INVOICE_ITEM_NET_PRICE", "Unit Price");
define("INV_INVOICE_ITEM_QTY", "Quantity");
define("INV_INVOICE_ITEM_DISCOUNT_DESC", "Discount Description");
define("INV_INVOICE_ITEM_DISCOUNT_AMOUNT", "Discount Amount");
define("INV_INVOICE_ITEM_TOTAL_NET", "Net Price");
define("INV_INVOICE_ITEM_TAX", "Tax");
define("INV_INVOICE_ITEM_CARRIAGE_SERVICE", "Carriage Service");
define("INV_INVOICE_ITEM_CARRIAGE", "Carriage");
define("INV_INVOICE_ITEM_CARRIAGE_TAX", "Tax on Carriage");
define("INV_INVOICE_ITEM_GROSS", "Gross Price");
define("INV_NEW_INVOICE_ITEM", "New");
define("INV_TOTAL_TAX", "Total Tax");
define("INV_TOTAL_CARRIAGE", "Total Carriage");
define("INV_TOTAL_CARRIAGE_TAX", "Tax on Carriage");
define("INV_INVOICE_PAY_INSTR", "Payment Instructions");
define("INV_INVOICE_SMALL_PRINT", "Small Print");
define("INV_INVOICE_PAID_IN_FULL", "Paid in Full?");
define("INV_INVOICE_PARTIAL_PAYMENT", "Partially Paid?");
define("INV_INVOICE_REFUND_IN_FULL", "Refunded in Full?");
define("INV_INVOICE_PARTIAL_REFUND", "Partially Refunded?");
define("INV_INSTR_INVOICE_NUMBER", "<strong>Note:</strong> Leave blank if adding a new invoice - the component will automatically assign the next available invoice number.");
define("INV_INSTR_BILLING_NAME", "The name of the person and/or company being billed.");
define("INV_INSTR_BILLING_ADDRESS", "");
define("INV_INSTR_REFERENCE", "Your own reference id for this client or transaction.");
define("INV_INSTR_INVOICE_DATE", "");
define("INV_INSTR_INVOICE_PAY_INSTR", "Give details of how the customer can pay you (eg. bank details)");
define("INV_INSTR_INVOICE_SMALL_PRINT", "Any legal information you want to display on the invoice (eg. interest charged if payment is late).");
define("INV_INSTR_INVOICE_PAID_IN_FULL", "<strong>WARNING!</strong> Setting this value from here overrides the normal process of creating an 'Income' item. This is OK if you do not intend to use the income feature, but it is recommended that you mark invoices as paid by clicking on the red 'X' on the invoice list, rather than setting the value here.");
define("INV_INSTR_INVOICE_PARTIAL_PAYMENT", "Whether part but not all of the total has been paid");
define("INV_INSTR_INVOICE_REFUND_IN_FULL", "");
define("INV_INSTR_INVOICE_PARTIAL_REFUND", "Whether part but not all of the total has been refunded");
define("INV_ERR_REDIRECT_BACK", "The invoice has NOT been saved. Please try again later or enter an invoice number manually.  You are being redirected to the previous page - you may have to refresh your browser, but any data you have entered should still be present.");
define("INV_ERR_VENDOR_NOT_FOUND", "Vendor not found.");
define("INV_ERR_COULD_NOT_CREATE_INVOICE", "Unable to insert new invoice record in the database.");
define("INV_AUTO_GENERATED_INVOICE", "Auto-generated Invoice");
define("INV_PRINT_PREVIEW_DONE", "Printer friendly version should have opened in a new window. If not, try holding down 'Ctrl' while clicking the print preview button, or de-activate your browser's popup blocker for this site. %sClick here to clear this message.%s");
define("INV_ERR_TEMPLATE_NOT_FOUND", "<strong>Invoicing template '%s' not found!</strong> Please ensure a valid invoice template file is located at '%s'.");
define("INV_SELECT_VENDOR_FOR_PRINT", "Print preview only available when a vendor is selected");
define("INV_PDF_NOT_INSTALLED", "PDF Output not available - requires <a target=\"_blank\" href=\"http://" . INV_BRANDING_HTML2PS . "\">HTML2PS</a>");
define("INV_REFUND_DESC", "Account Credit");
define("INV_BILLING_NAME_REQUIRED", "You must enter a billing name.");
define("INV_BILLING_ADDRESS_REQUIRED", "You must enter a billing address.");
define("INV_ALL_OUTSTANDING", "Show ALL unpaid invoices regardless of date");
define("INVOICE_ITEM_CODE", "SKU");
define("INV_REFUND", "REFUND"); //The SKU for refunds
define("INV_EMAIL_INVOICE_SUBJECT", "Invoice %s from %s");
define("INV_EMAIL_INVOICE_INTRO", "Dear %s,\n\nThe following invoice has been generated for you:");
define("INV_EMAIL_INVOICE_FOOTER", "You can see all of your invoices online by logging in at %s. If you no longer wish to receive your invoices by e-mail, simply log in and click on `My Profile` in the `My Account` area to set your preferences.\n\nRegards,\n%s");
define("INV_EMAIL_INVOICE_ALT_TEXT", "You are seeing this message because your e-mail client does not support HTML messages (or if you are viewing it from within a 'Junk e-mail' folder, the HTML may be suppressed). In order to see your invoice, please either view this e-mail in HTML mode, or login at %s to view your invoice online.");
define("INV_EMAIL_INVOICE_NOTIFICATION", "Dear %s,\n\nThis e-mail is to inform you that a new invoice has been generated for you.\n\n");
define("INV_INVOICE_EMAILED", "E-Mail");
define("INV_EMAIL_FAILED", "An attempt was made to send an e-mail, but an error occurred which prevented the e-mail from being sent. Please check your server configuration to ensure it is capable of sending e-mails.");
define("INV_EMAIL_FAILED_NO_ADDRESS", "An attempt was made to send an e-mail, but an e-mail address was not supplied and no e-mail address could be located for the customer.");
define("INV_EMAIL_SENT", "E-Mail sent to client %s");
define("INV_EMAIL_NOT_DUE", "E-Mail not sent (client record indicated no automatic invoices by e-mail).");
define("INV_EMAIL_NOW", "Send this invoice to the client by e-mail now");
define("INV_SEND_EMAIL", "Send E-Mail");
define("INV_SEND_EMAIL_INTRO", "Please select the type of e-mail to send (HTML or plain text). You may also override the e-mail address, contact name, and message if you wish by specifying your own values here. If you leave these blank, " . INV_BRANDING_NAME . " will attempt to fill in the details using the client record associated with this invoice (if applicable), and the default message text.");
define("INV_SEND_EMAIL_MANY_INTRO", "Please select the type of e-mail to send (HTML or plain text). You may also override the message if you wish by specifying your own message here. If you leave it blank, " . INV_BRANDING_NAME . " will use the default e-mail message.");
define("INV_EMAIL_OPTIONS", "E-Mail Options");
define("INV_EMAIL_HTML", "Send in HTML format?");
define("INV_EMAIL_CONTACT", "Contact Name");
define("INV_EMAIL_MESSAGE", "Custom Message");
define("INV_EMAIL_SENT_SUCCESS", "E-Mail(s) Sent Successfully.");
define("INV_EMAIL_SENT_FAILURE", "One or more errors occurred whilst attempting to send e-mail. Please REFRESH THE INVOICE LIST and then check the e-mail status.");
define("INV_EMAIL_INVOICE_FOOTER_USERNAME", "You can see all of your invoices online by logging in at %s (your username is %s). If you no longer wish to receive your invoices by e-mail, simply log in and click on `My Profile` in the `My Account` area to set your preferences.\n\nRegards,\n%s");
define("INV_INVOICE_LBL_WRITTEN_OFF", "Written Off");
define("INV_INVOICE_WRITTEN_OFF", "Written Off?");
define("INV_INSTR_INVOICE_WRITTEN_OFF", "If you have given up hope of this invoice ever being paid, and just want to write it off, select 'Yes' here and enter the details below.");
define("INV_INVOICE_WRITE_OFF_DATE", "Date Written Off");
define("INV_INSTR_WRITE_OFF_DATE", "Enter the date on which this invoice was written off (if you have paid any tax on this and indicate below that you wish to claim it back, the tax summary report will account for the amount on the given date).");
define("INV_INVOICE_CLAIM_BACK", "Claim Tax Back?");
define("INV_INSTR_INVOICE_CLAIM_BACK", "Do you want to deduct the tax amount of this invoice (if any) from the tax due figure on the tax summary report for the given write-off date? (only applicable if you pay tax on invoices raised before they are paid)");
define("INV_WRITTEN_OFF_DATE_REQUIRED", "Please indicate the date on which this invoice was written off.");
define("INV_VENDOR", "Vendor");
define("INV_INVOICE_TAX_RATE", "Tax Rate");
define("INV_INVOICE_CARRIAGE_TAX_RATE", "Carriage Tax Rate");
define("INV_INSTR_INVOICE_TAX_RATE", "The standard tax rate used to automatically calculate the tax due for this invoice (actual tax amount can still be overridden below)");
define("INV_INSTR_INVOICE_CARRIAGE_TAX_RATE", "The standard tax rate for carriage, used to automatically calculate the tax due on any carriage amount for this invoice (actual carriage tax amount can still be overridden below)");
define("INV_EMAIL_INVOICE_INTRO_ATTACH", "Dear %s,\n\nThe attached invoice has been generated for you.\n\n");
define("INV_EMAIL_ATTACH", "Attach HTML invoice?");
define("INV_INVOICE_VENDOR_NAME_REQUIRED", "You must provide a name for the vendor.");
define("INV_INVOICE_VENDOR_ADDRESS_REQUIRED", "You must specify the vendor\'s address");
define("INV_INSTR_VENDOR_NAME", "");
define("INV_INSTR_VENDOR_ADDRESS", "");
define("INV_AUTO_INVOICE_INTRO", "%s invoice(s) generated. Date used for invoice generation purposes: %s. Date and time of generation: %s");
define("INV_AUTO_INVOICE_CURRENCY", "Currency");
define("INV_AUTO_INVOICE_EMAILED", "E-Mail Sent to Client?");
define("INV_AUTO_INVOICE_YES", "Yes");
define("INV_AUTO_INVOICE_NO", "No");
define("INV_AUTO_INVOICE_SUBJECT", INV_BRANDING_NAME . " Auto Invoice Generator");
define("INV_AUTO_INVOICE_FAILURE", "FAILURE");
define("INV_AUTO_INVOICE_NO_LICENSE", INV_BRANDING_NAME . " License Key Incorrect, or Not Found");
define("INV_INVOICE_SHOW_PAYLINK", "Show Payment Link?");
define("INV_INSTR_INVOICE_SHOW_PAYLINK", "Whether or not to show a 'Pay This Invoice' link next to the invoice. The value of the global setting depends on the order record(s) - if applicable - otherwise, the display options (you can set a payment frequency threshold - see the display options screen for more information). The payment link will only be shown if the invoice is unpaid, a default gateway is specified on the vendor record, and the gross total on the invoice is greater than zero.");
define("INV_INVOICE_PAYLINK_USE_GLOBAL", "Use Global");
define("INV_INVOICE_PAYLINK_SHOW", "Show");
define("INV_INVOICE_PAYLINK_HIDE", "Hide");

/* Version 1.1.4 */
define("INV_INVOICE_ORDER_NO", "Order Number");

//Version 1.2.0
define("INV_INVOICE_LOOKUP_SKU", "Lookup SKU");

//Version 1.2.0 SP2
define("INV_PAYLINK", "Payment Link");
define("INV_INVOICE_SELECT_PRODUCT", "Select Product");

//Version 1.2.1
define("INV_INVOICE_SHOW_ALL", "Show All");
define("INV_INVOICE_SHOW_ALL_UNPAID", "Show Unpaid Only");
define("INV_INVOICE_SHOW_RESET", "Reset Date Range");
define("INV_SHOW_INCOME_RECORDS", "Show Related Income Record(s)");
define("INV_SHOW_EXPENDITURE_RECORDS", "Show Related Expenditure Record(s)");
define("INV_SHOW_ORDER_RECORDS", "Show Related Order Record(s)");
define("INV_EMAIL_ATTACH_OPTIONS", "Attachment");
define("INV_EMAIL_ATTACH_HTML", "HTML");
define("INV_EMAIL_ATTACH_PDF", "PDF");
define("INV_EMAIL_ATTACH_NONE", "None");
define("INV_EMAIL_NOT_DUE_ADHOC", "E-Mail not sent (ad-hoc invoices are not emailed automatically).");

//Version 1.2.6
define("INV_INVOICE_RECORD_LIMIT_WARNING", "WARNING! As there %s or more clients in your database, only the first %s records have been loaded into the above list. If the client you require is not here, you can either click on 'Show All' (below), or select the 'create new invoice' icon on the client list (the appropriate record will then be selected here automatically).");
?>
