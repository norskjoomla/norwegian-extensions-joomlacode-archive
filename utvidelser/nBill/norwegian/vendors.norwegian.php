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

//Vendors
define("INV_VENDOR_INTRO", "Typically, you would just have your own company details listed here. If you run more than one company or are a bookkeeper for several companies, you can add further company details. All invoicing records are held separately for each vendor.");
define("INV_VENDOR_DETAILS", "Vendor Details");
define("INV_NEW_VENDOR", "New Vendor");
define("INV_EDIT_VENDOR", "Edit Vendor Details");
define("INV_VENDORS_TITLE", "Vendors");
define("INV_VENDOR_COUNTRY", "Vendor Country");
define("INV_VENDOR_CURRENCY", "Vendor Currency");
define("INV_VENDOR_OTHER_CURRENCIES", "Other Currencies Allowed");
define("INV_NEXT_INV_NO", "Next Invoice Number");
define("INV_NEXT_ORDER_NO", "Next Order Number");
define("INV_NEXT_RECEIPT_NO", "Next Receipt Number");
define("INV_NEXT_PAYMENT_NO", "Next Payment Number");
define("INV_NEXT_CREDIT_NO", "Next Credit Note Number");
define("INV_DEFAULT_PAYMENT_INSTR", "Default Payment Instructions");
define("INV_DEFAULT_SMALL_PRINT", "Default Small Print");
define("INV_ADMIN_EMAIL", "Admin e-mail");
define("INV_PAPER_SIZE", "Paper Size");
define("INV_CLIENT_ORDERING", "Allow Clients to Place Orders?");
define("INV_PUBLIC_ORDERING", "Allow the public to Place Orders?");
define("INV_SHOW_EMPTY_CATS", "Show Empty Categories?");
define("INV_INSTR_VENDOR_NAME", "Enter the name that you want to appear on your invoices.");
define("INV_INSTR_VENDOR_ADDRESS", "Enter the address that you want to appear on your invoices.");
define("INV_INSTR_VENDOR_COUNTRY", "This will only appear on automatically-generated invoices when the billing address is in a different country.");
define("INV_INSTR_VENDOR_CURRENCY", "Select the native currency for this vendor.");
define("INV_INSTR_VENDOR_OTHER_CURRENCIES", "Specify any other (non-native) currencies that clients of this vendor can place orders and be invoiced in (hold down Ctrl to select multiple items or to de-select items).");
define("INV_INSTR_NEXT_INVOICE_NO", "Enter the next invoice number to be generated (you can have alpha-numeric characters at the start, but the last character must be numeric as this will be incremented automatically).");
define("INV_INSTR_NEXT_ORDER_NO", "Enter the next order number to be generated (you can have alpha-numeric characters at the start, but the last character must be numeric as this will be incremented automatically).");
define("INV_INSTR_NEXT_RECEIPT_NO", "Enter the next receipt number to be generated (you can have alpha-numeric characters at the start, but the last character must be numeric as this will be incremented automatically).");
define("INV_INSTR_NEXT_PAYMENT_NO", "Enter the next payment number to be generated (you can have alpha-numeric characters at the start, but the last character must be numeric as this will be incremented automatically).");
define("INV_INSTR_NEXT_CREDIT_NO", "Enter the next credit note number to be generated (you can have alpha-numeric characters at the start, but the last character must be numeric as this will be incremented automatically).");
define("INV_INSTR_DEFAULT_PAYMENT_INSTR", "Enter your default payment instructions to appear on your invoices (this can be overridden for different countries on the Tax page)");
define("INV_INSTR_DEFAULT_SMALL_PRINT", "Enter your default small print to appear on your invoices (this can be overridden for different countries on the Tax page)");
define("INV_INSTR_ADMIN_EMAIL", "E-Mails sent to clients will appear to come from this address.");
define("INV_INSTR_PAPER_SIZE", "Paper size to use when producing PDFs of the invoices (valid values include A4, A5, Letter, and Legal)");
define("INV_INSTR_CLIENT_ORDERING", "Whether or not the component's front-end should allow logged-in users to place orders ");
define("INV_INSTR_PUBLIC_ORDERING", "Whether or not the component's front-end should allow users who are not logged in to place orders ");
define("INV_INSTR_SHOW_EMPTY_CATS", "If users can place orders through the component's front-end, this setting specifies whether or not to display categories which do not contain any products or child categories");
define("INV_VENDOR_NAME_REQUIRED", "You must provide a name for the vendor.");
define("INV_VENDOR_ADDRESS_REQUIRED", "You must specify the vendor\'s address");
define("INV_VENDOR_COUNTRY_REQUIRED", "You must specify the country of the vendor.");
define("INV_VENDOR_CURRENCY_REQUIRED", "You must specify the currency of the vendor.");
define("INV_VENDOR_EMAIL_REQUIRED", "You must specify the vendor\'s e-mail address.");
define("INV_ERR_CANNOT_DELETE_LAST_VENDOR", "You cannot delete the last Vendor!");
define("INV_INVOICE_NO_LOCKED", "The next invoice number for this vendor is currently locked. This should only happen temporarily whilst invoices are being generated. If the invoice generation process failed and this field has remained locked, you can unlock it by clicking this button:");
define("INV_ORDER_NO_LOCKED", "The next order number for this vendor is currently locked. This should only happen temporarily whilst invoices are being generated. If the invoice generation process failed and this field has remained locked, you can unlock it by clicking this button:");
define("INV_RECEIPT_NO_LOCKED", "The next receipt number for this vendor is currently locked. This should only happen temporarily whilst invoices are being generated. If the invoice generation process failed and this field has remained locked, you can unlock it by clicking this button:");
define("INV_PAYMENT_NO_LOCKED", "The next payment number for this vendor is currently locked. This should only happen temporarily whilst invoices are being generated. If the invoice generation process failed and this field has remained locked, you can unlock it by clicking this button:");
define("INV_UNLOCK", "Unlock");
define("INV_INVOICE_TEMPLATE", "Invoice Template");
define("INV_INSTR_INVOICE_TEMPLATE", "Name of the template to use for producing invoices for this vendor.");
define("INV_INSTR_EMAIL_INVOICE_OPTIONS", "Specify the default invoice notification method when new invoices are generated. These values can be overridden for individual clients. If the default is set to send an e-mail to the client (either a notification or the actual invoice itself), the component front-end will allow the client to opt-out of this. If both the default setting against the vendor record AND the overriding value held against the client record both stipulate that no e-mail should be sent, the user will not be given the option to opt-in. <strong>Note:</strong> If sending automated e-mails, it is highly recommended to ensure that all client records have an associated user record so that they can log into the website front end to set their preferences and view their invoices. <strong>Also Note:</strong> Generating PDFs uses a lot of system resources - it is recommended to avoid this as a default, and only set it for those clients that really want it.");
define("INV_DEFAULT_GATEWAY", "Default Gateway");
define("INV_INSTR_DEFAULT_GATEWAY", "Default payment gateway to use for new order forms and for allowing payment of invoices online (if applicable).");
define("INV_AUTO_CREATE_INCOME", "Auto Create Income Item?");
define("INV_INSTR_AUTO_CREATE_INCOME", "Whether or not the payment gateway should be instructed to automatically create an income record for invoices that are paid online. NOTE: This does not affect orders made using an order form (you can set that on the order form in question), only standalone invoices that are paid online.");
define("INV_SUPPRESS_RECEIPT_NOS", "Generate Receipt Numbers Manually?");
define("INV_INSTR_SUPPRESS_RECEIPT_NOS", "Whether to suppress the generation of receipt numbers when income items are added, and offer a toolbar button to generate receipt numbers for all income items up to a given date instead. This is so that you can have all of your receipt numbers in date order, even if you have a mixture of auto-generated income items from online payments, and manually added income items (eg. for cheques etc. paid directly into your bank account). By setting this to 'yes', an extra toolbar button will appear on the income list page to enable you to populate the receipt numbers up to a given date, when you are ready.");
define("INV_VENDOR_LOGO", "Vendor Logo");
define("INV_INSTR_VENDOR_LOGO", "Upload a .gif image to appear on invoices for this vendor (if supported by the invoice template. Must be .gif, and less than 30k). NOTE: You might need to refresh your browser after uploading a new image, as some browsers (esp. firefox) cache images.");
define("INV_VENDOR_GIF_ONLY", "Sorry, the logo file you uploaded (%s) is not valid.  Only GIF files can be used for vendor logos");
define("INV_VENDOR_GIF_TOO_BIG", "Sorry, the logo file you uploaded was too large.  The maximum size is 30K");
define("INV_DELETE_LOGO", "Delete");
define("INV_VENDOR_DELETE_LOGO_FAILED", INV_BRANDING_NAME . " was unable to delete the logo file. This may be because PHP does not have permission to delete files on your server.");
define("INV_SUPPRESS_PAYMENT_NOS", "Generate Payment Numbers Manually?");
define("INV_INSTR_SUPPRESS_PAYMENT_NOS", "As above, but for payment numbers on the expenditure list.");
define("INV_ADD_REMITTANCE", "Show Remittance Advice?");
define("INV_INSTR_ADD_REMITTANCE", "Whether or not to add a remittance advice slip to the end of invoices.");
define("INV_CREDIT_SMALL_PRINT", "Credit Note Small Print");
define("INV_INSTR_INVOICE_SMALL_PRINT_CR", "Enter any legal disclaimers etc. that you want to appear on credit notes.");
define("INV_MASTER_DB_INTRO", "If you sell products or services using several different websites, each with their own copy of " . INV_BRANDING_NAME . ", but you want to record all of your financial information in just one of those, you can do so using a chain of 'master' databases. IMPORTANT! Please do not use this feature until you have read the documentation (available from the " . INV_BRANDING_NAME . " website), otherwise you could seriously mess up your data!");
define("INV_USE_MASTER_DB", "Use a Master Database?");
define("INV_INSTR_USE_MASTER_DB", "Whether or not to defer generation of numbers for invoices, credit notes, income, and expenditure to a master database (another copy of " . INV_BRANDING_NAME . ").");
define("INV_MASTER_DB_HOST", "Master Host");
define("INV_INSTR_MASTER_DB_HOST", "Host name of master database (eg. if it is another database on the same server, this could be 'localhost').");
define("INV_MASTER_USERNAME", "Master Username");
define("INV_INSTR_MASTER_USERNAME", "Username required to access the master database.");
define("INV_MASTER_PASSWORD", "Master Password");
define("INV_INSTR_MASTER_PASSWORD", "Password required to access the master database.");
define("INV_MASTER_DB_NAME", "Master Database Name");
define("INV_INSTR_MASTER_DB_NAME", "Name of the master database.");
define("INV_MASTER_TABLE_PREFIX", "Master Database Table Prefix");
define("INV_INSTR_MASTER_TABLE_PREFIX", "Table prefix for the master database (typically 'jos_').");
define("INV_MASTER_DB_CANNOT_CONNECT", "Unable to connect to master database.");
define("INV_MASTER_DB_TEST", "Test Connection");
define("INV_MASTER_VENDOR", "Master Vendor");
define("INV_INSTR_MASTER_VENDOR", "Corresponding Vendor record on the master database with which to synchronise");
define("INV_SYNCHRONISE", "Upload to Master Database");
define("INV_INSTR_SYNCHRONISE", "Send invoice, credit note, income, and expenditure data from this database to the master database. This will overwrite any existing data in the master database with the same invoice, credit note, income, or expenditure numbers.");
define("INV_SYNC_ARE_YOU_SURE", "WARNING! This will overwrite data on your master database(s). Click OK to upload the data, or Cancel to abort.");
define("INV_MASTER_DB_TEST_SUCCESS", "Connected to Master Database Successfully");
define("INV_MASTER_DB_NOT_IN_USE", "Cannot update master database - you must set 'Use Master Database' to 'Yes' before trying to upload.");
define("INV_SYNCHRONISATION_ERROR", "An error occurred whilst attempting to upload to the master database. Upload aborted! The error message returned by the database was: %s");
define("INV_SYNCHRONISE_RECORD_COUNT", "%s Record(s) Inserted, and %s Record(s) Updated on the Master Database");
define("INV_SYNCHRONISE_NEED_GEN", "CANNOT CONTINUE! One or more income or expenditure records (either on this database, or on a master database) has not yet been assigned a number. You must generate payment and/or receipt numbers before synchronisation (generating receipt or payment numbers on this database will also generate any outstanding on the master database(s)).");
define("INV_SYNC_UP_TO", "Synchronise records up to and including (yyyy/mm/dd)");
define("INV_SUPPRESS_GENERATION_BUTTONS", "Suppress Generation Buttons?");
define("INV_INSTR_SUPPRESS_GENERATION_BUTTONS", "Whether or not to suppress the display of toolbar buttons to allow payment/receipt number generation. You should ONLY set this to 'yes' if this is a master database, which has a child database on which the number generation should be performed (see master database section, below). If you set a child database to use THIS copy of " . INV_BRANDING_NAME . " as a master, the value will be set to 'yes' automatically. YOU THEREFORE DO NOT USUALLY NEED TO DO ANYTHING WITH THIS SETTING unless you used to have a child database pointing to this one, but no longer do (in which case you would change it from 'yes' to 'no').");
define("INV_ADD_PAYLINK", "Show Payment Link on Invoices?");
define("INV_INSTR_ADD_PAYLINK", "Whether or not to add a link to unpaid invoices generated for this vendor that allow the client to pay the invoice online.");
define("INV_MASTER_DB_SECTION", "Master Database");

//Version 1.2.1 - Note to translators:
//Line 74 of original English language file amended (INV_INSTR_EMAIL_INVOICE_OPTIONS) - additional note added

//Version 1.2.7
define("INV_EMAIL_PDF_AVAILABILITY", " (PDF option will only be available if the <a href=\"http://www.nbill.co.uk/html2ps.html\" target=\"_blank\">HTML2PS/PDF</a> script has been uploaded)");
?>