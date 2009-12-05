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

define("INV_CREDITS_TITLE", "Credit Notes (Refunds)");
define("INV_CREDITS_INTRO", "Whenever you issue a refund, you should also produce an accompanying credit note detailing what the refund was for, and including a tax breakdown, if applicable.");
define("INV_INVOICE_NUMBER_CR", "Credit Note Number");
define("INV_BILLING_NAME_CR", "Payee");
define("INV_INVOICE_DATE_CR", "Credit Date");
define("INV_FIRST_ITEM_CR", "First Item on Credit Note");
define("INV_EDIT_INVOICE_CR", "Edit Credit Note");
define("INV_EMAIL_NOW_CR", "Send this credit note to the client by e-mail now");
define("INV_BILLING_NAME_REQUIRED_CR", "Please enter the payee name");
define("INV_BILLING_ADDRESS_REQUIRED_CR", "Please enter the payee address");
define("INV_NEW_INVOICE_CR", "New Credit Note");
define("INV_INVOICE_DETAILS_CR", "Credit Note Details");
define("INV_INSTR_INVOICE_NUMBER_CR", "<strong>Note:</strong> Leave blank if adding a new credit note - the component will automatically assign the next available credit note number.");
define("INV_INSTR_BILLING_NAME_CR", "The name of the person and/or company being refunded.");
define("INV_BILLING_ADDRESS_CR", "Payee Address");
define("INV_INVOICE_ITEMS_CR", "Credit Note Items");
define("INV_INSTR_INVOICE_PAID_IN_FULL_CR", "<strong>WARNING!</strong> Setting this value from here overrides the normal process of creating an 'Expenditure' item. This is OK if you do not intend to use the expenditure feature, but it is recommended that you mark credit notes as paid by clicking on the red 'X' on the credit note list, rather than setting the value here.");
define("INV_INSTR_VENDOR_NAME_CR", "Enter the name that you want to appear on your credit notes");
define("INV_INSTR_VENDOR_ADDRESS_CR", "Enter the address that you want to appear on your credit notes");
define("INV_EMAIL_INVOICE_SUBJECT_CR", "Credit Note %s from %s");
define("INV_EMAIL_INVOICE_INTRO_CR", "Dear %s,\n\nThe following credit note has been generated for you:");
define("INV_EMAIL_INVOICE_FOOTER_CR", "You can see all of your invoices/credit notes online by logging in at %s. If you no longer wish to receive notification by e-mail, simply log in and click on `My Profile` in the `My Account` area to set your preferences.\n\nRegards,\n%s");
define("INV_EMAIL_INVOICE_ALT_TEXT_CR", "You are seeing this message because your e-mail client does not support HTML messages (or if you are viewing it from within a 'Junk e-mail' folder, the HTML may be suppressed). In order to see your credit note, please either view this e-mail in HTML mode, or login at %s to view your credit note online.");
define("INV_EMAIL_INVOICE_NOTIFICATION_CR", "Dear %s,\n\nThis e-mail is to inform you that a new credit note has been generated for you.\n\n");
define("INV_EMAIL_INVOICE_FOOTER_USERNAME_CR", "You can see all of your invoices/credit notes online by logging in at %s (your username is %s). If you no longer wish to receive notification by e-mail, simply log in and click on `My Profile` in the `My Account` area to set your preferences.\n\nRegards,\n%s");
define("INV_SEND_EMAIL_INTRO_CR", "Please select the type of e-mail to send (HTML or plain text). You may also override the e-mail address, contact name, and message if you wish by specifying your own values here. If you leave these blank, " . INV_BRANDING_NAME . " will attempt to fill in the details using the client record associated with this credit note (if applicable), and the default message text.");
define("INV_EMAIL_SENT_FAILURE_CR", "One or more errors occurred whilst attempting to send e-mail. Please REFRESH THE CREDIT NOTE LIST and then check the e-mail status.");
define("INV_EMAIL_INVOICE_INTRO_ATTACH_CR", "Dear %s,\n\nThe attached credit note has been generated for you.\n\n");
define("INV_EMAIL_ATTACH_CR", "Attach HTML credit note?");

//Version 1.2.6
define("INV_INVOICE_RECORD_LIMIT_WARNING_CR", "WARNING! As there are %s or more clients in your database, only the first %s have been loaded into the above list. If the client you require is not here, please use the 'create new credit note' icon on the client list (the appropriate record will then be selected here automatically).");
?>