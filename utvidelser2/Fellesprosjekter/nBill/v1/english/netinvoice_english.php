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

global $mosConfig_live_site;

//Installation
define("INV_INSTALL_COMPLETE", INV_BRANDING_NAME . " installation complete.");
define("INV_DB_ERRORS", INV_BRANDING_NAME . " has been installed, but one or more database errors occurred during the installation process. The errors are displayed below.");
define("INV_CANNOT_UPGRADE", "Sorry, you cannot upgrade from a version prior to 1.1.0. Please uninstall this version, install 1.1.0 to upgrade your database, then try upgrading again to this version.");
define("INV_UPGRADED_SUCCESSFULLY", "Your installation of " . INV_BRANDING_NAME . " has been upgraded successfully.");

//Home
define("INV_WELCOME", "Welcome to " . INV_BRANDING_NAME . "!");
define("INV_WELCOME_BETA", "Welcome to " . INV_BRANDING_NAME . " BETA!");
define("INV_HOME_PAGE_TEXT","To get started, click on each menu option above in turn - they are ordered according to the order you need to set things up.  So, start with Configuration->Global Configuration, then set up your currencies, then your vendors, etc. Most pages include helpful comments to guide you through the process. Please refer to %s for documentation and support.");
define("INV_HELP", "Help");

//Licensing
define("INV_LICENSE_INVALID", "Your license key is not valid. It may have expired, or it may not be valid for the domain you are trying to use it on. Please contact " . INV_BRANDING_COMPANY . " for a valid license key on this domain. NOTE: If you enter the wrong license key more than 12 times, you will be locked out! If your key is not working, please contact support.");
define("INV_NEW_LICENSE_KEY", "Paste new license key here:");
define("INV_RETURN_TO_MAIN", "Click here to return to the Home Page");
define("INV_LIC_SERVER_NAME", "Server Name: ");
define("INV_LIC_EXPIRY", "License Expires: ");
define("INV_YOUR_DOMAIN", "Your domain is: ");
define("INV_NO_EXPIRY", "No Expiry");
define("INV_ACCEPT_TERMS", "I have read, fully understood, and agree to the %s");
define("INV_EULA", "End User License Agreement (opens in a new window)");
define("INV_PLEASE_ACCEPT_TERMS", "Sorry, you must check the box to indicate that you accept the End User License Agreement before you can continue.");
define("INV_LOCKED_OUT_TITLE", "Access has been Blocked!");
define("INV_LOCKED_OUT_DESC", "You have tried to access the component using an invalid license key too many times. The component has now been blocked. To unblock it, you need to enter an 'unblock key' below. To get your 'unblock key', please send an e-mail to: " . INV_BRANDING_SUPPORT_EMAIL . ", quoting reference '%s', and your domain name (%s)");
define("INV_UNBLOCK_KEY", "Unblock Key");
define("INV_UNBLOCK_KEY_INVALID", "Sorry, the unblock key you entered is not valid.");
define("INV_LICENSE_EXPIRED", "Your license expired %s");
define("INV_BLACKLISTED", "Your domain name has been blacklisted (typically this would be due to a chargeback after purchase). You are not permitted to continue. If you feel this is in error, please contact us.");

//Global
define("INV_ALL", "[Show All]");
define("INV_NONE", "[None]");
define("INV_NOTES", "Notes");
define("INV_INSTR_VENDOR_ID", "Select the Vendor with which this record is associated.");
define("INV_INSTR_NOTES", "Notes are for your own comments, reminders, etc. and are not used by the component except to indicate that a record was auto-generated.");
define("INV_MISCELLANEOUS", "Miscellaneous");
define("INV_ROOT", "Root");
define("INV_NOT_APPLICABLE", "Not Applicable");
define("INV_TAX", "Tax");
define("INV_FOR", "for");
define("INV_TO", "to");
define("INV_GO", "Go");
define("INV_DATE_RANGE", "From");
define("INV_ERR_COULD_NOT_GET_NEXT_NO", "The component was unable to identify the next %s number because the database field is currently locked by another process. If the problem persists, you can unlock the %s number field by editing the Vendor record.");
define("INV_ERR_NO_NOT_NUMERIC", "The next %s number for this vendor is not numeric! Please update the vendor record to specify a numeric %s number sequence, or enter the %s number manually.");
define("INV_ERR_NO_NOT_FOUND", "The next %s number for this vendor could not be found! You may have to enter the %s number manually.");
define("INV_PREV", "<< Previous");
define("INV_NEXT", "Next >>");
define("INV_SAVE_CHANGES", "You have made changes to the data on this page but have not saved the record. If you want to save your changes before moving on, click OK. If you want to move on without saving, click on Cancel");  //Don't use apostrophes or speech marks in this text
define("INV_SELECT", "Select");
define("INV_DESELECT", "Deselect");
define("INV_UNKNOWN", "Unknown");
define("INV_NEW", "New");
define("INV_BACK", "Back");
define("INV_NO_EMAIL", "Don't e-mail invoices");
define("INV_EMAIL_INVOICE", "Send invoice to client (html e-mail)");
define("INV_EMAIL_NOTIFICATION", "Send notification to client (plain text e-mail advising client to log into website)");
define("INV_CLOSE_WINDOW", "Close Window");
define("INV_NO_ACTION_TAKEN", "No action taken.");
define("INV_ADMIN_IMAGE", "style=\"height:54px; padding-left: 54px; background-image: url('$mosConfig_live_site/components/com_netinvoice/images/icons/large/%s.gif') !important;background-position:left;background-repeat:no-repeat;\"");
define("INV_NUMERIC_ONLY", "The field `%s` requires a numeric value. Please only enter a number here.");
define("INV_INVALID_DATE_FIELD", "The field `%s` requires a date value. Please enter a date in the format %s.");
define("INV_ERR_SERIOUS_ERROR", "Sorry, an error has occurred. An e-mail containing details of the error has been sent to the appropriate person. Apologies for the inconvenience.");
define("INV_ERR_SERIOUS_ERROR_ADMIN", "Sorry, an error has occurred. An e-mail containing details of the error has been sent to the appropriate person (as defined in Global Configuration page of " . INV_BRANDING_NAME . "). Apologies for the inconvenience.");
define("INV_ERR_SERIOUS_ERROR_NOMAIL", "Sorry, an error has occurred. The component was unable to send an e-mail containing details of the error to the appropriate person. Please contact the owner of this website (%s) to inform them of this error (which has been logged in their database and/or PHP error log). Apologies for the inconvenience.");
define("INV_ERR_SERIOUS_ERROR_NOMAIL_ADMIN", "Sorry, an error has occurred. The component was unable to send an e-mail containing details of the error to the appropriate person (as defined in Global Configuration page of " . INV_BRANDING_NAME . "). As this error occurred in the administrator, details of the error are provided below. Apologies for the inconvenience.");
define("INV_ERR_REPORT_INTRO", "An error has occurred in " . INV_BRANDING_NAME . " (front end)! Details of the error are given below:\n\n");
define("INV_ERR_REPORT_INTRO_ADMIN", "An error has occurred in " . INV_BRANDING_NAME . " (administrator)! Details of the error are given below:\n\n");
define("INV_ID", "ID");
define("INV_PRODUCT_SETUP_FEE", "Setup Fee");
define("INV_PRODUCT_NEGATIVE_SETUP_FEE", "Trial Period Discount");
define("INV_EMAIL_INVOICE_ATTACH", "Send invoice to client as an attachment (plain text e-mail) - Recommended");
define("INV_ERR_MASTER_DB_CONNECT", "Could not connect to the master database!");
define("INV_ERR_MASTER_DB_LOOP", "PROCESS ABORTED! You appear to have a loop of master databases. Please ensure each database is only the master of ONE other database.");
define("INV_ERR_MASTER_DB_TOO_OLD", "A master database belongs to an different version of " . INV_BRANDING_NAME . ". Please ensure all databases are running the same version.");
define("INV_PRINTER_FRIENDLY", "Printer Friendly Version");
define("INV_DATE_PRINTED", "Date Printed: ");
define("INV_ERR_COULD_NOT_CREATE_USER", "WARNING! Although the order form is set to automatically create a user record, it was not possible to create a user for this order. This can happen if the e-mail address field is suppressed (because an e-mail address is required in order to create a new user record).");
define("INV_CSV_DOWNLOAD", "CSV Download");
define("INV_CSV_DOWNLOAD_DESC", "Download this report as a CSV file (which can be opened in a spreadsheet application such as MS Excel, or imported into another application)");
define("INV_EMAIL_DOWNLOADS_SUBJECT", "Downloadable Product(s) Attached - Order no: %s");

//The following have been moved from other sections (used in more than one place)
define("INV_VENDOR_NAME", "Vendor Name");
define("INV_CLIENT", "Client");
define("INV_TAX_EXEMPTION_CODE", "Tax Exemption Code");
define("INV_EMAIL_INVOICE_OPTIONS", "Invoice Notifications");
define("INV_NOMINAL_LEDGER_CODE", "Nominal Ledger Code");
define("INV_INSTR_NOMINAL_LEDGER_CODE", "");
define("INV_ENTER_OVERRIDE_DATE", "Enter the date (YYYY/MM/DD) up to which you want invoices generated. Any orders which fall due AFTER the date you enter will NOT be generated."); //Need to keep this quite short, as it is used in a javascript prompt which is a fixed size in IE
define("INV_PRODUCT_CATS", "Category");
define("INV_INVOICE_DETAILS", "Invoice Details");
define("INV_CARRIAGE_SERVICE", "Carriage Service");
define("INV_SELECT_CLIENT", "Client");
define("INV_INSTR_SELECT_CLIENT", "");
define("INV_VENDOR_ADDRESS", "Vendor Address");
define("INV_TAX_REFERENCE_DESC", "Tax Reference Description");
define("INV_TAX_ABBREVIATION", "Abbreviation");
define("INV_INSTR_TAX_REFERENCE_DESC", "Enter a descriptive name of your tax reference number (eg. 'VAT Number', 'N&uacute;mero de IVA')");
define("INV_INSTR_TAX_ABBREVIATION", "Enter the commonly used abbreviation for this type of tax (eg. VAT, IVA)");
define("INV_TAX_REFERENCE_NO", "Tax Reference Number");
define("INV_INSTR_TAX_REFERENCE_NO", "Enter your company tax reference number (eg. your VAT number), including country code (if applicable)");
define("INV_INSTR_TAX_EXEMPTION_CODE", "If a tax rate can be omitted on production of the client's VAT number or reseller certification, enter the reference here.");
define("INV_EMAIL_ADDRESS", "E-Mail Address");
define("INV_RELATING_TO", "Relating To");
define("INV_CURRENCY", "Currency");
define("INV_ORDER_DETAILS", "Order Details");
define("INV_CLIENT_NAME", "Client Name");
define("INV_ADD_INVOICE_ITEM", "Add Item");
define("INV_REMOVE_INVOICE_ITEM", "Remove Item");
define("INV_INSTR_CURRENCY", "");
define("INV_INVOICES_GENERATED", "%s Invoice(s) Generated.");
define("INV_REDIRECTED_TO_INVOICE_SUMMARY", "You have been redirected to the invoice summary screen.");
define("INV_PRODUCT_CATEGORY", "Category");
define("INV_INVOICE_GENERATION_ERRORS", "One or more errors occurred whilst attempting to generate invoices. The error messages are listed below.");
define("INV_ERR_INVOICE_GENERATION_LOOP", "The invoice generation script seems to have got itself stuck in a loop. Process therefore terminated after 100 repetitions. Most likely cause is that the end date for an order could not be calculated. Please contact " . INV_BRANDING_COMPANY . " for assistance.");
define("INV_ERR_COULD_NOT_INSERT_INVOICE_ITEM", "Unable to insert invoice item record in the database.");
define("INV_ERR_COULD_NOT_INSERT_DISCOUNT_INVOICE_ITEM", "Unable to insert invoice item record in the database for a discount.");
define("INV_MY_ACCOUNT", "My Account");
define("INV_MY_PROFILE", "My Profile");
define("INV_MY_ORDERS", "My Orders");
define("INV_MY_INVOICES", "My Invoices");
define("INV_SUBMIT", "Submit");
define("INV_CANCEL", "Cancel");
define("INV_INVALID_DATE_ENTERED", "The date entered was not valid. Date must be entered in the format %s.");

//Main Menu
define("INV_MNU_HOME", "Home");
define("INV_MNU_HOME_DESC", "Main Page");
define("INV_MNU_CONFIG", "Configuration");
define("INV_MNU_CONFIG_DESC", "System Configuration");
define("INV_MNU_GLOBAL_CONFIG", "Global Configuration");
define("INV_MNU_GLOBAL_CONFIG_DESC", "Main Application Settings");
define("INV_MNU_VENDOR", "Vendors");
define("INV_MNU_VENDOR_DESC", "Manage Vendors (your own company/ies)");
define("INV_MNU_QUICK_LINKS", "Quick Links:");
define("INV_MNU_CLIENTS", "Clients");
define("INV_MNU_CLIENTS_DESC", "Manage Clients");
define("INV_MNU_PRODUCTS", "Products");
define("INV_MNU_PRODUCTS_DESC", "Manage Products");
define("INV_MNU_ORDERS", "Orders");
define("INV_MNU_ORDERS_DESC", "Manage Orders");
define("INV_MNU_INVOICES", "Invoices");
define("INV_MNU_INVOICES_DESC", "Manage Invoices");
define("INV_MNU_CURRENCIES", "Currencies");
define("INV_MNU_CURRENCIES_DESC", "Manage Currencies");
define("INV_MNU_SALES_TAX", "Sales Tax (VAT)");
define("INV_MNU_SALES_TAX_DESC", "Manage Tax Rates");
define("INV_MNU_CARRIAGE", "Carriage");
define("INV_MNU_CARRIAGE_DESC", "Setup Shipping Options");
define("INV_MNU_NOMINAL_LEDGER", "Nominal Ledger");
define("INV_MNU_NOMINAL_LEDGER_DESC", "Manage Cost Centres");
define("INV_MNU_BACKUP_RESTORE", "Backup/Restore");
define("INV_MNU_BACKUP_RESTORE_DESC", "Backup or Restore your Data");
define("INV_MNU_BILLING", "Billing");
define("INV_MNU_BILLING_DESC", "Manage Clients, Products, Orders, Invoices");
define("INV_MNU_PRODUCT_CATS", "Product Categories");
define("INV_MNU_PRODUCT_CATS_DESC", "Manage Product Categories");
define("INV_MNU_CREDIT_NOTES", "Credit Notes (Refunds)");
define("INV_MNU_CREDIT_NOTES_DESC", "Manage Credit Notes");
define("INV_MNU_FRONT_END", "Front End");
define("INV_MNU_FRONT_END_DESC", "Manage features relating to website front end");
define("INV_MNU_ORDER_FORMS", "Order Forms");
define("INV_MNU_ORDER_FORMS_DESC", "Manage Order Forms");
define("INV_MNU_GATEWAYS", "Payment Gateways");
define("INV_MNU_GATEWAYS_DESC", "Manage Payment Gateways");
define("INV_MNU_PENDING_ORDERS", "Pending Orders");
define("INV_MNU_PENDING_ORDERS_DESC", "Manage Pending Orders");
define("INV_MNU_ACCOUNTING", "Accounting");
define("INV_MNU_ACCOUNTING_DESC", "Manage Income and Expenditure");
define("INV_MNU_INCOME", "Income");
define("INV_MNU_INCOME_DESC", "Manage Income");
define("INV_MNU_EXPENDITURE", "Expenditure");
define("INV_MNU_EXPENDITURE_DESC", "Manage Expenditure");
define("INV_MNU_AUDIT_LOG", "Audit Log");
define("INV_MNU_AUDIT_LOG_DESC", "View Audit Log Entries");
define("INV_MNU_REPORTS", "Reports");
define("INV_MNU_REPORTS_DESC", "Produce Reports");
define("INV_MNU_JACL_VOUCHER", "ACL Upgrade Vouchers");
define("INV_MNU_JACL_VOUCHER_DESC", "Define voucher codes for user subscription level upgrades");
define("INV_MNU_DISPLAY_OPTIONS", "Display Options");
define("INV_MNU_DISPLAY_OPTIONS_DESC", "Define what options get displayed in the front end");
define("INV_MNU_TAX_SUMMARY", "Tax Summary");
define("INV_MNU_TAX_SUMMARY_DESC", "Produce tax summary report for a given date range");
define("INV_MNU_EXTENSIONS", "Extensions");
define("INV_MNU_EXTENSIONS_DESC", "3rd Party Extensions to " . INV_BRANDING_NAME);
define("INV_MNU_EXTENSIONS_INSTALL", "Extensions Installer");
define("INV_MNU_EXTENSIONS_INSTALL_DESC", "Install a 3rd party extension to " . INV_BRANDING_NAME . ".");
define("INV_MNU_SUPPLIERS", "Suppliers");
define("INV_MNU_SUPPLIERS_DESC", "Manage Suppliers");
define("INV_MNU_EXPENDITURE_LIST", "Expenditure List");
define("INV_MNU_EXPENDITURE_LIST_DESC", "Manage expenditure payment records");
define("INV_MNU_DISCOUNTS", "Discounts");
define("INV_MNU_DISCOUNTS_DESC", "Manage Discount Rules");
define("INV_MNU_IO", "Import/Export");
define("INV_MNU_IO_DESC", "Import or export data");
define("INV_MNU_IO_CLIENTS", "Clients");
define("INV_MNU_IO_CLIENTS_DESC", "Import or export Client records");
define("INV_MNU_PAYMENT_LINK", "Payment Link Generator");
define("INV_MNU_PAYMENT_LINK_DESC", "Generate a hyperlink that will allow you to request payment from a customer");
define("INV_MNU_GATEWAY_FUNCTIONS", "%s Functions");
define("INV_MNU_GATEWAY_FUNCTIONS_DESC", "Extended functions for the %s gateway.");
define("INV_MNU_TRANSACTION_REPORT", "Transaction Statement");
define("INV_MNU_TRANSACTION_REPORT_DESC", "List of all income/expenditure by date, with summary");
define("INV_MNU_LEDGER_REPORT", "Ledger Report");
define("INV_MNU_LEDGER_REPORT_DESC", "Nominal Ledger Summary");
define("INV_MNU_REMINDERS", "Reminders");
define("INV_MNU_REMINDERS_DESC", "Configure the sending of reminder e-mails");

//Account Expiry
define("INV_SUB_EXPIRY_MESSAGE", "Please Note: your user record has been %s. The reason for this is: %s<br /><br />If you have any queries about this, please contact us.");
define("INV_SUB_EXPIRY_BLOCKED", "BLOCKED");
define("INV_SUB_EXPIRY_DELETED", "DELETED");
define("INV_SUB_EXPIRY_DOWNGRADED", "DOWNGRADED to '%s'");
define("INV_SUB_EXPIRY_REASON_CANCELLED", "your user subscription order has been cancelled.");
define("INV_SUB_EXPIRY_REASON_DELETED", "your user subscription order has been deleted.");
define("INV_SUB_EXPIRY_REASON_EXPIRED", "your user subscription order has exceeded its fixed expiry date.");
define("INV_SUB_EXPIRY_REASON_NOT_RENEWED", "your user subscription order has not been renewed. To continue accessing this site with your previous user privileges, please contact us to renew your subscription.");
define("INV_SUB_EXPIRY_REASON_UNKNOWN", "unknown. Please contact us if you feel this is in error.");
define("INV_CONTINUE", "Click here to continue");
define("INV_CONTINUE_HOME", "Click here to return to the home page.");

//Version checking
define("INV_SOFTWARE_OOD", "WARNING! Your copy of " . INV_BRANDING_NAME . " is out of date. You are attempting to run an old version of " . INV_BRANDING_NAME . " with a newer version of the database. This will result in program errors - please upgrade your software (see " . INV_BRANDING_WEBSITE . ").");
define("INV_DATABASE_OOD", "WARNING! Your database needs to be upgraded. Failure to do so will result in program errors. %s to upgrade now.");
define("INV_CLICK_HERE", "Click Here");
define("INV_NEW_VERSION_AVAILABLE", "A new version of " . INV_BRANDING_NAME . " (%s) is now available.");
define("INV_NEW_VERSION_MANUAL", "This version cannot be installed automatically - you need to upgrade manually (see documentation for details)");
define("INV_PATCH_COPY_FAILURES", "An attempt was made to install a patch, but the following files could not be copied. Please download the patch from the " . INV_BRANDING_NAME . " website and re-install it manually.");
define("INV_PATCH_DB_ERRORS", "An attempt was made to install a patch, but the following database error(s) occurred. You may need to download the patch from the " . INV_BRANDING_NAME . " website and re-install it manually.");
define("INV_PATCH_FAILED_TO_INSTALL", "An attempt was made to install a patch, but one or more errors occurred. This is probably because your file or folder permissions do not allow PHP to overwrite the files. Alternatively, it could be that a connection to the server where the patch file is located could not be established. Please either try again later, or download the patch from the " . INV_BRANDING_NAME . " website and re-install it manually.");
define("INV_AUTO_UPDATE_DISABLED", "Automatic updates have been disabled - to turn automatic updates on again, refer to the %sGlobal Configuration%s page.");
define("INV_NO_NEW_VERSION_AVAILABLE", "You already have the latest version - no new version is available at present.");
define("INV_PATCH_INSTALLED", "Your software has been upgraded. You are now running the latest version.");
define("INV_TO_UPGRADE_NOW", "%s to upgrade now."); //Used in conjunction with INV_CLICK_HERE
define("INV_UNABLE_TO_CHECK_VERSION", "Sorry, a connection to the online version checker could not be established. This might be because you do not have access to the internet, or the server might be down. It is not known whether or not you are running the latest version. Please try again later, or check the " . INV_BRANDING_NAME . " website.");

//Toolbar
define("INV_TB_NEW", "New");
define("INV_TB_EDIT", "Edit");
define("INV_TB_DELETE", "Delete");
define("INV_TB_SAVE", "Save");
define("INV_TB_APPLY", "Apply");
define("INV_TB_CANCEL", "Cancel");
define("INV_TB_PREVIEW_HTML", "Preview HTML");
define("INV_TB_PREVIEW_PDF", "Preview PDF");
define("INV_TB_GENERATE_ALL", "Generate All");
define("INV_TB_GENERATE", "Generate");
define("INV_TB_ACTIVATE", "Activate");
define("INV_TB_SELECT_ITEM_TO_DELETE", "Please select the item(s) you want to delete from the list");
define("INV_TB_DELETE_ARE_YOU_SURE", "Are you sure you want to delete selected item(s)?");
define("INV_TB_SELECT_ITEM_TO_EDIT", "Please select the item you want to edit from the list");
define("INV_TB_SELECT_ITEM_TO_GENERATE", "Please select the order you want to generate invoices for from the list");
define("INV_TB_SELECT_ITEM_TO_PREVIEW", "Please select the item you want to preview from the list");
define("INV_TB_BACK", "Back");

/***************************/
/* Version 1.1.4
/* Note to translators:
/* Branding constants removed (previously lines 25 to 38)
/* INV_SUB_EXPIRY_MESSAGE on line 236 (in the English file, previously 250) has been amended to use <br /> instead of 

/* INV_ADMIN_IMAGE on line 85 (in the English file, previously 99) has been changed to point to the front-end images folder
/***************************/

// Version 1.2.0
define("INV_MNU_STYLESHEET_WARNING", "WARNING! Your ADMIN template is not loading the nBill stylesheet. Everything will look wrong unless you add some code to your admin template. See %s.");
define("INV_MNU_STYLESHEET_WARNING_1011", "WARNING! You are using an OLD and INSECURE version of Joomla! A side-effect of this is that your ADMIN template is not loading the nBill stylesheet. Everything will look wrong unless you either upgrade Joomla (recommended), or add some code to your admin template. See %s.");
define("INV_LICENSE_EXPIRES_SOON", "WARNING! Your license key expires soon (%s).");
define("INV_LIC_EXP_ANNUAL", " If you wish to renew for another year now without losing any of the remaining time on this license key, please login at " . INV_BRANDING_WEBSITE . " and renew your *existing* order (rather than placing a new order).");
define("INV_LIC_EXP_TRIAL", " If you want to continue using " . INV_BRANDING_NAME . " after this date, please purchase a license key at " . INV_BRANDING_WEBSITE);
define("INV_TXN_DETAILS", "The following records were found for the given transaction ID");
define("INV_TXN_NOT_FOUND", "No records were found for the given transaction ID.");
define("INV_TXN_CLIENT", "Client");
define("INV_TXN_PENDING_ORDER", "Pending Order ID");
define("INV_TXN_FORM_TITLE", "Order Form");
define("INV_TXN_DATE", "Date");
define("INV_TXN_USERNAME", "User");
define("INV_TXN_RELATING_TO", "Relating To");
define("INV_TXN_AMOUNT", "Amount");
define("INV_TXN_PRODUCT", "Product Details");
define("INV_TXN_ORDER_NO", "Order Number");
define("INV_TXN_INVOICE_NO", "Invoice Number");
define("INV_TXN_RECEIPT_NO", "Receipt Number");
define("INV_TXN_TYPE_PENDING", "Pending Order");
define("INV_TXN_TYPE_ORDER", "Orders");
define("INV_TXN_TYPE_INVOICE", "Invoices");
define("INV_TXN_TYPE_INCOME", "Income");
define("INV_TXN_RECEIPT_NO_UNKNOWN", "Not Yet Defined");
define("INV_MNU_TX_SEARCH", "Transaction Search");
define("INV_MNU_TX_SEARCH_HELP", "Attempt to locate records based on a transaction ID held by your Payment Service Provider");

//Version 1.2.0 SP1
define("INV_ERR_COULD_NOT_CREATE_USER_REASON", "WARNING! Although the order form is set to automatically create a user record, it was not possible to create a user for this order. The following error was reported: %s");

//Version 1.2.1
define("INV_CANNOT_UPGRADE_120", "Sorry, you cannot upgrade from a version prior to 1.2.0. Please uninstall this version, install 1.2.0 to upgrade your database, then try upgrading again to this version.");
define("INV_TEMP_NOT_WRITABLE", "PHP Temp directory not found or not writable ('%s') - invoice attachment could not be saved.");
define("INV_NO_WRITE_ACCESS", "PHP does not have write access to the file %s - invoice attachment could not be saved.");
define("INV_INVALID_CHARS_IN_FIELD", "%s contains invalid characters. Please only use alphanumeric characters for this field.");
define("INV_INVALID_CHARS_USERNAME", "Username");
define("INV_USERNAME_EXISTS", "Sorry, this Username is already in use.");
define("INV_USER_EMAIL_EXISTS", "Sorry, this e-mail address is already in use.");
define("INV_EMAIL_INVALID", "The e-mail address you entered is not valid.");
define("INV_EMAIL_INVOICE_PDF", "Send invoice to client as a PDF attachment (plain text e-mail)");
define("INV_NO", "No");
define("INV_YES", "Yes");

//Version 1.2.3
define("INV_OFFLINE", "Offline");
// Note to translators:
//Line 90 of original English language file amended (INV_ERR_SERIOUS_ERROR_NOMAIL) - if database not available, full error reports are now logged to the PHP error log

//Version 1.2.4
define("INV_INSTALL_ERROR", "Sorry, it looks like nBill failed to install correctly! Please try uninstalling and re-installing. If that does not help, please refer to the troubleshooting section of the documentation at <a href=\"http://www.nbill.co.uk/documentation/\">www.nbill.co.uk/documentation</a>.<br /><br /><a href=\"index2.php\">Return to Home Page</a>");

//Version 1.2.5
define("INV_LICENSE_NOT_WORKING", "<strong>NOTE: If your license key will not work, please refer to the troubleshooting section of the documentation: <a href=\"http://www.nbill.co.uk/documentation/index.php?page=license-key-is-not-accepted.html\" target=\"_blank\">http://www.nbill.co.uk/documentation/index.php?page=license-key-is-not-accepted.html</a>. If you still cannot get it working after trying everything listed there, please raise a support ticket (we will need super administrator access to your site to investigate the problem).</strong>");

//Version 1.2.9
define("INV_RENEW_NOW", "Click here to RENEW NOW");
?>