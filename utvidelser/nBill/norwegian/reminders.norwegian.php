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

//Reminders
define("INV_REMINDERS_TITLE", "Reminders");
define("INV_REMINDERS_WARNING", "Warning! This feature has the potential to send e-mails to ALL of your clients. Please be careful, and use at your own risk!");
define("INV_REMINDERS_INTRO", "Record details here of any reminders you want to send to yourself or to clients when payments are due, orders are up for renewal, or about to expire, or when invoices are overdue. PLEASE NOTE: Setting these values will have NO EFFECT UNLESS you have also set up a scheduled task to actually check what is due and fire off the e-mails. To do this, you would typically use a CRON job along with the scheduled reminder script - available from the " . INV_BRANDING_NAME . " website. Please see the documentation for more details on how to set up a CRON job.");
define("INV_REMINDER_NAME", "Reminder Name");
define("INV_EDIT_REMINDER", "Edit Reminder");
define("INV_REMINDER_TYPE", "Reminder Type");
define("INV_REMINDER_ACTIVE", "Active?");
define("INV_REMINDER_ACTIVE_YES", "Active");
define("INV_REMINDER_ACTIVE_NO", "Inactive");
define("INV_REMINDER_NAME_REQUIRED", "Please enter a name to identify this reminder");
define("INV_REMINDER_STARTING_FROM", "Starting From");
define("INV_REMINDER_NUMBER_OF_UNITS", "Number of Units");
define("INV_NEW_REMINDER", "New Reminder");
define("INV_REMINDER_DETAILS", "Reminder Details");
define("INV_INSTR_REMINDER_NAME", "Enter a name that will help you easily identify what this reminder is for.");
define("INV_INSTR_REMINDER_TYPE", "Select the type of reminder you want to set up.");
define("INV_INSTR_REMINDER_ACTIVE", "Whether or not to send e-mails out for this reminder.");
define("INV_REMINDER_ADMIN", "Administrator?");
define("INV_INSTR_REMINDER_ADMIN", "Whether or not to send the reminder e-mail to the administrator rather than the client (if you want a reminder sent to both administrator and client, please set up 2 separate reminder records).");
define("INV_INSTR_REMINDER_STARTING_FROM", "Date from which to begin sending reminder e-mails (if blank, reminders will be sent regardless of date).");
define("INV_REMINDER_NO_OF_UNITS", "Number of Units");
define("INV_INSTR_REMINDER_NO_OF_UNITS", "Enter the number of units for the interval between the event and the reminder (or in the case of user-defined reminders, the interval between reminders). For example, for an interval of 7 days, the number of units is 7 (and the units are 'Days').");
define("INV_REMINDER_UNITS", "Units");
define("INV_INSTR_REMINDER_UNITS", "Select the type of units for the interval.");
define("INV_REMINDER_SEND_AFTER", "Send After?");
define("INV_INSTR_REMINDER_SEND_AFTER", "Whether or not to send the reminder AFTER the event (typically only used for overdue invoices - ie. to send a reminder x days after the invoice date).");
define("INV_REMINDER_EMAIL_TEXT", "E-Mail Text");
define("INV_INSTR_REMINDER_EMAIL_TEXT", "Type in the e-mail message you want to send. You can use the following tokens: {NAME} = inserts client name; {VENDOR} = inserts vendor name; {DATE} = inserts event date; {INTERVAL} = inserts number of units; {UNITS} = inserts type of unit; {ORDER} = order details; {AMOUNT} = amount owing (nb. discounts will NOT be taken into account); {WEBSITE} = your website address; {PAYLINK} = inserts a payment link, if applicable (renewals and overdue invoices only); {PAYLINK_HTTPS} = same as paylink, but uses https at the start of the URL; {INVOICE} = inserts invoice number (overdue invoices only).");
define("INV_REMINDER_CLIENT", "Client");
define("INV_INSTR_REMINDER_CLIENT", "The client to whom the reminder should be sent (if 'Administrator' setting above is set to 'No'). WARNING! If this is set to 'Not Applicable', a reminder will be sent to EVERY client for whom it is due. If this is a 'user-defined' reminder, and the 'Administrator' setting is set to 'no', you MUST select a client here, otherwise no reminder will be sent.");
define("INV_REMINDER_FILTER", "Filter");
define("INV_INSTR_REMINDER_FILTER", "FOR ADVANCED USERS ONLY: You can filter the records to which the reminder will apply by entering a filter here in the format of an SQL 'where' clause. For example, to send payment due reminders only to clients with orders that have annual payment intervals, you could enter \" #__inv_orders.payment_frequency = 'EE' \" here. The database tables on which filtering can be performed depend on the type of reminder.");

//Default e-mail text
define("INV_REMINDER_PAYMENT_DUE_EMAIL", "Dear {NAME},\n\nThis is a courtesy e-mail to let you know that a recurring payment for the following order is due on {DATE}. If you have set up a recurring payment schedule, you will be automatically debited with {AMOUNT} (less any discounts for which you qualify, if applicable) on or around the due date.\n\nOrder Details:\n\n{ORDER}\n\nIf you no longer wish to receive these reminders, please login to your account at {WEBSITE}, and set your preferences under 'My Account->My Profile'.\n\nRegards,\n{VENDOR}");
define("INV_REMINDER_ORDER_EXPIRY_EMAIL", "Dear {NAME},\n\nThis is a courtesy e-mail to let you know that the following order will expire on {DATE}. Please ensure any regular payment schedule is cancelled.\n\nOrder Details:\n\n{ORDER}\n\nIf you no longer wish to receive these reminders, please login to your account at {WEBSITE}, and set your preferences under 'My Account->My Profile'.\n\nRegards,\n{VENDOR}.");
define("INV_REMINDER_RENEWAL_DUE_EMAIL", "Dear {NAME},\n\nThis is a reminder that your subscription for the following order is due for renewal on {DATE}. If you would like to renew, please use the following link: {PAYLINK}. Any remaining time on your old subscription will be added to the new one so you will not lose out by renewing early.\n\n{ORDER}\n\nIf you no longer wish to receive these reminders, please login to your account at {WEBSITE}, and set your preferences under 'My Account->My Profile'.\n\nRegards,\n{VENDOR}");
define("INV_REMINDER_INVOICE_OVERDUE_EMAIL", "Dear {NAME},\n\nThis is a reminder that invoice number {INVOICE} for {AMOUNT} has been outstanding for {INTERVAL} {UNITS}, and is therefore now overdue. Please arrange to pay this invoice as soon as possible. If you would like to pay online, you can use the following link: {PAYLINK}.\n\nRegards,\n{VENDOR}.");
define("INV_REMINDER_USER_DEFINED_EMAIL", "Don't forget: <Enter reminder text here!>");
define("INV_REMINDER_PAYMENT_DUE_SUBJECT", "Reminder: Payment Due");
define("INV_REMINDER_ORDER_EXPIRY_SUBJECT", "Reminder: Order Expiry");
define("INV_REMINDER_RENEWAL_DUE_SUBJECT", "Reminder: Renewal Due");
define("INV_REMINDER_INVOICE_OVERDUE_SUBJECT", "Reminder: Invoice Overdue");
define("INV_REMINDER_USER_DEFINED_SUBJECT", "Reminder");

//Reminder Types
define("INV_REMINDER_PAYMENT_DUE", "Payment Due");
define("INV_REMINDER_ORDER_EXPIRY", "Order Expiry");
define("INV_REMINDER_RENEWAL_DUE", "Renewal Due");
define("INV_REMINDER_INVOICE_OVERDUE", "Invoice Overdue");
define("INV_REMINDER_USER_DEFINED", "User-defined");

//Units
define("INV_REMINDER_UNIT_DAYS", "Days");
define("INV_REMINDER_UNIT_WEEKS", "Weeks");
define("INV_REMINDER_UNIT_MONTHS", "Months");

//CRON script
define("INV_REMINDER", "Reminder");
define("INV_REMINDERS_SENT_INTRO", "%s Reminders have been processed by " . INV_BRANDING_NAME . ". Timestamp: %s.\n\n");
define("INV_REMINDERS_SENT_SUBJECT", INV_BRANDING_NAME . " Scheduled Reminders");
define("INV_REMINDERS_SENT_FAILURE", "FAILURE");
define("INV_REMINDERS_SENT_NO_LICENSE", INV_BRANDING_NAME . " License Key Incorrect, or Not Found");
define("INV_REMINDERS_SENT_TO", "sent to");
define("INV_REMINDERS_SENT_FOR","for client");
define("INV_REMINDERS_SENT_MESSAGE", "MESSAGE:");
define("INV_REMINDER_SENT_ERROR", "WARNING! An error occurred whilst attempting to send this reminder. Reminder not sent.");
define("INV_REMINDER_SENT_ERROR_NO_CLIENT", "WARNING! An error occurred whilst attempting to send this reminder. No client record was found. Reminder not sent.");
define("INV_REMINDER_ORDER_NO", "Order No.");

//Version 1.2.1
//Note to translators: Text for INV_INSTR_REMINDER_EMAIL_TEXT updated to add description of {PAYLINK_HTTPS} (on line 51 of English language file)
?>
