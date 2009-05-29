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

//Front-End
define("INV_MAIN_MENU", "Main");
define("INV_ABOUT_TAX_EXEMPTION_CODE", "If your company is based within the EU, please enter your VAT number.");
define("INV_ORDER_NUMBER", "Order Number(s)");
define("INV_ORDER_DATE", "Date");
define("INV_PRICE", "Order Value");
@define("INV_PAY_FREQUENCY", "Payment Frequency");
define("INV_VIEW_INVOICES", "View Invoices");
define("INV_VIEW_INVOICES_ALT", "View all invoices that have been generated for this order");
define("INV_NEW_ORDER_INTRO", "Please select the product you wish to order from the list");
define("INV_PLACE_ORDER", "Click here to place an order");
define("INV_CLIENT_NEW_ORDER", "Add a New Order");
define("INV_ERR_FORM_NOT_DEFINED", "You are not able to access this order form. The form might have been deleted, there may be pre-requisites for ordering this product, or it might only be available to certain users. Please make sure you are logged in, and try again. If you feel you should be able to access this order form and the problem persists, contact a system administrator.");
define("INV_FIRST_NAME", "First Name");
define("INV_LAST_NAME", "Last Name");
define("INV_CONFIRM_EMAIL_ADDRESS", "Confirm E-Mail Address");
define("INV_ERR_MANDATORY_FIELD", "Please supply a value for all mandatory fields (mandatory fields are marked with an asterisk *)");
define("INV_EMAILS_DONT_MATCH", "The email addresses you entered do not match! Please check carefully and try again.");
define("INV_EMAIL_NOT_VALID", "The email address you entered does not appear to be valid. Please try again.");
@define("INV_USERNAME", "User Name");
define("INV_PASSWORD", "Password");
define("INV_USERNAME_HELP", "Please specify a user name and password which you will use to login to this site (to enable you to access your orders and invoices online).");
define("INV_DETAILS_SAVED", "Details Saved.");
define("INV_ERR_USER_EXISTS", "There is already a registered user with that user name and/or e-mail address. Please select a unique user name, or if you are already a registered user, please log in before placing an order.");
define("INV_ERROR_SAVING_ORDER", "There was a problem while attempting to save an order to the database. The order will have to be added manually by an Administrator");
define("INV_ERR_COULD_NOT_SAVE_PENDING_ORDER", "An error has occurred, and your order details could not be saved. We apologise for the inconvenience - please contact us.");
define("INV_ERR_PENDING_ORDER_NOT_FOUND", "An attempt was made to load a pending order (pending order id: %s), but the pending order record could not be loaded. All processing for this order has been aborted - a user record, client record, order, and invoice may need to be manually created by an Administrator.");
define("INV_ERR_NO_PRODUCTS_ORDERED", "Warning - an order form has been processed, but no products were found - therefore, no order has been created for it.");
define("INV_ERR_NO_INVOICE_GENERATED", "Warning - this order form is flagged to automatically create an invoice, but an invoice could not be generated. An invoice may need to be created manually by an Administrator.");
define("INV_EMAIL_NEW_PENDING_ORDER", "New PENDING Order - %s");
define("INV_EMAIL_PENDING_ORDER_INTRO", "A new order has been placed on %s, and is awaiting payment confirmation. When payment confirmation is received (or when an Administrator goes into " . INV_BRANDING_NAME . " and activates the pending order), an order record will be created for it.");
define("INV_EMAIL_NEW_ORDER", "New Order - %s");
define("INV_EMAIL_ORDER_INTRO", "This e-mail is to confirm that following order has been placed on %s");
define("INV_DOWNLOAD", "Download");
define("INV_ERR_DOWNLOAD_FAILED", "Sorry, the file could not be downloaded. This might be due to your session timing out, in which case please login and try again.");
define("INV_ERR_DOWNLOAD_EXPIRED", "Sorry, the file is no longer available for download. This product can only be downloaded for up to %s days after the order was placed.");
define("INV_ERR_DOWNLOAD_NOT_FOUND", "Sorry, the file could not be found! Please contact an administrator.");
define("INV_CANCEL_ORDER", "Cancel Order");
define("INV_CANCEL_ORDER_INTRO", "To cancel this order, please let us know the reason for cancellation and confirm that you wish to cancel using the form below. If you are currently making regularly scheduled payments to us, we will cancel your future payments if it is possible for us to do so. If we do not have authority to cancel your payments (eg. if you pay by bank standing order), please make your own arrangements to cancel the payments.");
define("INV_CONFIRM_CANCELLATION", "I confirm that I wish to cancel the above order.");
define("INV_PLEASE_CONFIRM_CANCELLATION", "You did not check the box to confirm that you want to cancel. If you want to cancel this order, please check the box before clicking on the 'Cancel Order' button.");
define("INV_ORDER_NOT_FOUND", "The specified order could not be found.");
define("INV_ORDER_CANCELLED_SUCCESS", "The Specified Order Has Been Cancelled.");
define("INV_EMAIL_ORDER_CANCELLED", "Order Cancelled on %s");
define("INV_EMAIL_ORDER_CANCELLED_INTRO", "The following order on %s has been cancelled by the client. Please ensure any scheduled recurring payments for this order are also cancelled immediately. No further invoices will be produced for this order.");
define("INV_CONFIRM_PENDING_DELETE", "The selected order is marked as Pending. This means it has not yet been processed. If you cancel this order, it will be permanently deleted. If you are sure you want to permanently delete this pending order, please click on the 'Cancel Order' button below. Otherwise, click on the link to return to your order list without deleting anything.");
define("INV_RETURN_TO_ORDERS", "Return to Order List");
define("INV_INVOICE_STATUS", "Status");
define("INV_INVOICE_PART_PAID", "Part Paid");
define("INV_INVOICE_UNPAID", "Unpaid");
define("INV_INVOICE_REFUNDED", "Refunded");
define("INV_INVOICE_PART_REFUNDED", "Part Refunded");
define("INV_UPGRADE_MEMBERSHIP", "Upgrade Membership");
define("INV_MY_PROFILE_DESC", "Update your personal details");
define("INV_MY_ORDERS_DESC", "A list of the orders you have placed with us.");
define("INV_MY_INVOICES_DESC", "A list of your invoices.");
define("INV_UPGRADE_MEMBERSHIP_DESC", "Increase your membership level to access more of this site's features");
define("INV_EXPIRY_DATE_FE", "Expiry Date");
define("INV_CONFIRM_PASSWORD", "Confirm Password");
define("INV_EMAIL_INVOICE_OPTIONS_FE", "E-Mail Preferences");
define("INV_NO_EMAIL_FE", "Don't e-mail my invoices");
define("INV_EMAIL_INVOICE_FE", "Send my invoices by e-mail (html)");
define("INV_EMAIL_NOTIFICATION_FE", "Send me notification when I have a new invoice (plain text e-mail)");
define("INV_EMAIL_CONFIRM", "Confirm");
define("INV_WARN_ORDER_NOT_PROCESSED", "Warning - this order form has been processed, but nothing was actually ordered. Therefore there will be no order record available in " . INV_BRANDING_NAME . " for this form submission.");
define("INV_PAY_INVOICE_TITLE", "Payment");
define("INV_PAY_INVOICE", "Pay This Invoice");
define("INV_CURRENT_ACCESS_LEVEL", "Your current membership level is '%s'.");
define("INV_PASSWORDS_DONT_MATCH", "The passwords you entered do not match! Please try again.");
define("INV_CANNOT_PAY_INVOICE_ONLINE", "Sorry, you cannot pay this invoice online at the moment."); //This would probably only be used if someone tries to change the invoice id to pay someone else's invoice
define("INV_POST_ERROR", "Sorry, an error occurred whilst posting the form. Please contact us for assistance.");
define("INV_WARN_CLIENT_EMAIL_NOT_SENT", "WARNING! The client has NOT been sent an e-mail confirming this order.");
define("INV_USER_NAME", "User Name:");
define("INV_USER_PASSWORD", "Password:");
define("INV_LOGIN", "Login");
define("INV_FORM_TIMEOUT", "Sorry, your session has timed-out. Please login again.");
define("INV_NO_FORMS", "There are no order forms available to you.");
define("INV_PDF_INVOICE", "Display PDF Invoice");
define("INV_CALENDAR", "Calendar");
define("INV_CLEAR", "Clear");
define("INV_DATE_NOT_VALID", "The field `%s` requires a date value. Please only enter a date here in the format %s.");
define("INV_PENDING_ORDER_PAY_NOW", "Pay Now");
define("INV_PENDING_ORDER_NOT_FOUND", "Sorry, either the pending order record could not be found, or there was no payment gateway set up for the order form at the time the order was placed. It will not be possible to pay for this order online.");
define("INV_ALREADY_REGISTERED", "Already Registered? Please log in.");
define("INV_NOT_YET_REGISTERED", "New Client? Please fill in your details below.");
define("INV_COMPANY_NAME", "Company Name");
define("INV_ADDRESS_1", "Address Line 1");
define("INV_ADDRESS_2", "Address Line 2");
define("INV_ADDRESS_3", "Address Line 3");
define("INV_TOWN", "Town");
define("INV_STATE", "State/County/Province");
define("INV_POSTCODE", "Postcode");
define("INV_CLIENT_COUNTRY", "Country");
define("INV_TELEPHONE", "Telephone");
define("INV_CONTACT_NAME", "Contact Name");
define("INV_CLIENT_ADD_NAME_TO_INVOICE", "Add contact name to invoices?");
define("INV_WEBSITE", "Website");
define("INV_MOBILE", "Mobile");
define("INV_FAX", "Fax");
define("INV_CLIENT_CURRENCY", "Default Currency");
@define("INV_PENDING", "Pending");
define("INV_FE_PRODUCT", "Product");
define("INV_FE_ORDER_STATUS", "Status");
define("INV_FE_NEW_ORDER", "New Order");
define("INV_INVOICE_NUMBER", "Invoice No.");
define("INV_INVOICE_DATE", "Date");
define("INV_FIRST_ITEM", "First Item on Invoice");
define("INV_TOTAL_NET", "Net Total");
define("INV_TOTAL_GROSS", "Gross Total");
define("INV_INVOICE_PAID", "Paid");
define("INV_EMAIL_INVOICE_ATTACH_FE", "Send my invoices as an html attachment to a plain text email (recommended)");
define("INV_FORM_SUMMARY_INTRO", "Please review the following information to ensure it is accurate before submitting your order. If you need to go back and change anything, click on the 'Previous' button.");
define("INV_CHECKED", "Selected");
define("INV_UNCHECKED", "Not Selected");
define("INV_ORDER_SUMMARY_NET_TOTAL", "Net Total");
define("INV_ORDER_SUMMARY_TAX_TOTAL", "Tax");
define("INV_ORDER_SUMMARY_CARRIAGE_TOTAL", "Carriage Total");
define("INV_ORDER_SUMMARY_CARRIAGE_TAX", "Carriage Tax");
define("INV_ORDER_SUMMARY_AMOUNT_TO_PAY", "Amount to pay");
define("INV_CARRIAGE_LIST_FOR", "Carriage for %s");
define("INV_CARRIAGE_LIST", "Carriage");
define("INV_ERR_SELECT_CARRIAGE", "Please select a carriage service from the list");
define("INV_PASSWORD_HELP", "Please specify a password which you will use to login to this site (to enable you to access your orders and invoices online).");
define("INV_PAYMENT_DETAILS", "Payment Details:");
define("INV_EMAIL_ORDER_PRODUCTS", "Product(s) ordered:");
define("INV_EMAIL_TOTAL_ORDER_VALUE", "Total Order Value: %s");
define("INV_JWHOIS_CHECK", "Check Availability");
define("INV_JWHOIS_AVAILABLE", "Domain name %s is currently available.");
define("INV_JWHOIS_UNAVAILABLE", "Domain name %s is already registered.");
define("INV_JWHOIS_RETURNED_NOTHING", "Sorry, we are currently unable to determine whether or not the selected domain is available. Please try again later.");
define("INV_JWHOIS_NOT_FOUND", "Sorry, the J!Whois component could not be found. We cannot determine whether or not the selected domain is available.");
define("INV_JWHOIS_TLD_NOT_SUPPORTED", "Sorry, we are currently unable to check the availability of domains that end with '.%s'.");
define("INV_CLIENT_REMINDER_EMAILS", "Send me reminders about order expiry, order renewal, or payments due (recommended).");
define("INV_NOT_LOGGED_IN", "You are not logged in.");
define("INV_LOGIN_INTRO", "The feature you have requested requires that you be logged in. Please enter your username and password below to login - you will then be redirected to the page you requested.");
define("INV_ORDER_RENEW_ORDER_NOT_FOUND", "Sorry, no qualifying order was found - there is nothing to renew. If you think this is wrong, please contact us.");
define("INV_ORDER_RENEW_TITLE", "Renew Order");
define("INV_ORDER_RENEW_INTRO", "To renew this order, please check that the details below are correct and click on 'Submit'.");
define("INV_ORDER_PRODUCT", "Product");
define("INV_ORDER_RENEW_WARNING", "Please do not submit this form if you already have a recurring payment schedule set up for this order.");
define("INV_FILE_TOO_BIG", "You tried to upload a file that is too large. The maximum size allowed is %s KB");
define("INV_FILE_TYPE_NOT_ALLOWED", "You tried to upload a file of the wrong type. Only the following file types are allowed: %s");
define("INV_FILE_UPLOAD_FAILED", "Sorry, a file you tried to upload could not be saved. Please try with a different file name.");
define("INV_FE_SECURITY_IMAGE", "Please type in the letters you see:");
define("INV_FE_SECURITY_IMAGE_CHANGE", "[Change letter code]");
define("INV_ERR_SECURITY_IMAGE_WRONG", "Sorry, the security image code you entered was incorrect. Please try again.");

/* Version 1.1.4 */
define("INV_FORM_NEXT", "Next >>");
define("INV_FORM_PREV", "<< Previous");
define("INV_FORM_SUBMIT", "Submit");
define("INV_RENEW_SUBMIT", "Submit");

//Version 1.2.0
/* INV_ORDER_NUMBER on line 26 changed (for plurality) */
define("INV_CANNOT_RENEW_PAY_FREQS_DIFFER", "Sorry, these orders cannot all be renewed together because they have different payment frequencies. You can only renew multiple orders simultaneously if the payment frequency is the same for each.");
define("INV_CANNOT_RENEW_AUTO_RENEW_DIFFERS", "Sorry, these orders cannot all be renewed together because at least one is set to auto-renew, and at least one is set not to auto-renew. You can only renew multiple orders simultaneously if they are all set to auto-renew, or all set not to auto-renew.");
define("INV_RENEW", "Renew");
define("INV_DUE", "Due");
define("INV_EXPIRED", "Expired");
define("INV_SELECT_GATEWAY", "Choose Payment Method");
define("INV_INVOICE_PAY_NOW", "Pay Invoice(s)");
define("INV_INVOICE_AMOUNT", "Amount");
define("INV_INVOICE_TOTAL", "Total");
if (!defined("_LOST_PASSWORD")) {define("_LOST_PASSWORD", "Lost Password?");}
define("INV_TRACKING", "Tracking");
define("INV_TRACK_THIS_PARCEL", "Track this Shipment");

//Version 1.2.1
define("INV_FILE_UPLOAD_FAILED_REASON", "Sorry, a file you tried to upload could not be saved. The following reason was reported: ");
define("INV_ERR_UPLOAD_ERR_INI_SIZE", "The file was larger than file size limit imposed by the PHP configuration file (php.ini) on this server.");
define("INV_UPLOAD_ERR_FORM_SIZE", "PHP reports that the file was larger than file size limit imposed by the MAX_FILE_SIZE directive (Note: This error sometimes occurs even if the file is smaller than the limit. If this is happening, the site owner should remove the MAX_FILE_SIZE directive from the form).");
define("INV_UPLOAD_ERR_PARTIAL", "The upload was interrupted and only part of the file was received.");
define("INV_UPLOAD_ERR_NO_FILE", "The upload was interrupted, and none of the data in the file was received.");
define("INV_UPLOAD_ERR_NO_TMP_DIR", "PHP was unable to locate a temporary directory in which to save the file.");
define("INV_UPLOAD_ERR_CANT_WRITE", "PHP was unable to write to the temporary directory to save the file.");
define("INV_INVOICE_ALREADY_PAID", "Invoice %s has already been paid. You cannot pay it again!");
define("INV_RETURN_TO_MY_INVOICES", " to return to %s");
define("INV_CANNOT_RENEW_CANCELLED", "Sorry, you cannot renew an order that has been cancelled. Please place a new order instead.");
define("INV_EMAIL_INVOICE_PDF_FE", "Send my invoice as a PDF attachment to a plain text e-mail");

//Version 1.2.3
define("INV_PENDING_ID", "Pending Order ID");
define("INV_EMAIL_IN_USE", "This e-mail address is already registered. If you have forgotten your password, please click on the lost password link to get a new one emailed to you").
define("INV_INVALID_USERNAME", "Please enter a valid username.  No spaces, more than 2 characters and containing only the characters 0-9, a-z, or A-Z");
define("INV_USERNAME_IN_USE", "This username is already registered. Please choose another username, or if you are already registered, login first. If you have forgotten your password, please click on the lost password link to get a new one emailed to you.");

//Version 1.2.7
define("INV_ORDER_RENEWED_SUCCESS", "Thank you, your order was renewed successfully."); //Only shown for free product renewals (eg. 100% discount or free non-auto-renewing subscription)
define("INV_CANNOT_RENEW_ADVANCE", "Sorry, you cannot renew more than %s time(s) in advance.");
?>
