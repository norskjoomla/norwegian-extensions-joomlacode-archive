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

//Clients
define("INV_CLIENTS_TITLE", "Clients");
define("INV_WEBSITE", "Website Address");
define("INV_TELEPHONE", "Telephone");
define("INV_TELEPHONE_2", "2nd Telephone Line");
define("INV_CLIENT_NAME_REQUIRED", "Please enter either a company name or a contact name (or both).");
define("INV_USERNAME_PASSWORD_REQUIRED", "In order to create a new user, a user name and password are required.");
define("INV_EDIT_CLIENT", "Edit Client");
define("INV_NEW_CLIENT", "New Client");
define("INV_CLIENT_DETAILS", "Client Details");
define("INV_CLIENT_USER", "Related User");
define("INV_CREATE_USER", "[Create New User]");
define("INV_COMPANY_NAME", "Company Name");
define("INV_CONTACT_NAME", "Contact Name");
define("INV_CLIENT_ADD_NAME_TO_INVOICE", "Add Contact Name to Invoices?");
define("INV_ADDRESS_1", "Address Line 1");
define("INV_ADDRESS_2", "Address Line 2");
define("INV_ADDRESS_3", "Address Line 3");
define("INV_TOWN", "Town/City");
define("INV_STATE", "State/County/Province");
define("INV_POSTCODE", "Postcode");
define("INV_CLIENT_COUNTRY", "Country");
define("INV_CLIENT_REFERENCE", "Client Reference");
define("INV_MOBILE", "Mobile (Cell) Phone");
define("INV_FAX", "Fax");
define("INV_CLIENT_CURRENCY", "Default Currency");
define("INV_CLIENT_TAX_ZONE", "Client Tax Zone");
define("INV_CREDIT_AMOUNT", "Credit Amount");
define("INV_CREDIT_TAX_AMOUNT", "Credit Tax Amount");
define("INV_CREDIT_LEDGER_CODE", "Credit Ledger Code");
define("INV_CREDIT_CURRENCY", "Credit Currency");
define("INV_CREDIT_DESC", "Credit Description");
define("INV_AUTO_DEDUCT", "Auto-deduct Credit");
define("INV_INSTR_COMPANY_NAME", "Name of the client company - you can leave this blank if you wish, as long as you enter a contact name below.");
define("INV_INSTR_CONTACT_NAME", "Name of the person you deal with - you can leave this blank if you wish, as long as you enter a company name above.");
define("INV_INSTR_CLIENT_ADD_NAME_TO_INVOICE", "If both a company name and a contact name are defined, you can choose whether or not to display the contact name on invoices (if only one is defined, it will be used regardless of the value of this setting).");
define("INV_INSTR_ADDRESS", "Enter the billing address that will appear on invoices.");
define("INV_INSTR_CLIENT_COUNTRY", "Billing address country (used to determine tax rate if applicable)");
define("INV_INSTR_CLIENT_USER", "Select the user record to attach this client to. NOTE: THIS WILL GIVE THE SELECTED USER ACCESS TO INVOICES FOR THIS CLIENT - please be careful!");
define("INV_INSTR_CLIENT_USER_ID", "Enter the NUMERICAL user id of the user record to attach this client to (see the <a href=\"index2.php?option=com_users&task=view\">user management screen</a> - the user id is the last item on the list at the far right) NOTE: THIS WILL GIVE THE SELECTED USER ACCESS TO INVOICES FOR THIS CLIENT - please be careful, and make sure you get the correct user id!. If you want to see a list of users to pick from here instead of having to type in the user id number, please set this up on the <a href=\"index2.php?option=com_netinvoice&action=configuration\">configuration page</a>.");
define("INV_INSTR_CLIENT_REFERENCE", "This is your reference that will appear on this client's invoices - choose something short that will help you identify the client.");
define("INV_INSTR_EMAIL_ADDRESS", "This is the email address to which invoices will be sent (if auto e-mailing invoices is selected for the order to which the invoice relates)");
define("INV_INSTR_WEBSITE", "Just for your own reference.");
define("INV_INSTR_TELEPHONE", "");
define("INV_INSTR_TELEPHONE_2", "Optional, if there is an additional phone number you want to store.");
define("INV_INSTR_MOBILE", "");
define("INV_INSTR_FAX", "");
define("INV_INSTR_CLIENT_CURRENCY", "Select the default currency in which this client will place orders.");
define("INV_INSTR_CLIENT_TAX_ZONE", "If you have set up different tax rates for different tax zones, you can specify the tax zone code to use for this client.");
define("INV_INSTR_CREDIT_AMOUNT", "The amount of any credit this client may have on account (net of tax).");
define("INV_INSTR_CREDIT_TAX_AMOUNT", "The amount of any credit held by this client which represents tax (eg. where an overpayment has been made and some tax needs to be refunded).");
define("INV_INSTR_CREDIT_CURRENCY", "Currency of the credit amount held by this client");
define("INV_INSTR_CREDIT_LEDGER_CODE", "Nominal ledger code against which the credit should be recorded (at the time of refund).");
define("INV_INSTR_CREDIT_DESC", "Description to appear on invoice when credit amount is deducted.");
define("INV_INSTR_AUTO_DEDUCT", "Whether or not to automatically deduct any credit amount from the next invoice due (only if the invoice is in the same currency as the credit amount).");
define("INV_CLIENT_DELETED", "Client Deleted");
define("INV_ERR_CLIENT_COULD_NOT_CREATE_USER", "Sorry, a new User record could not be created!");
define("INV_INSTR_EMAIL_INVOICE_OPTIONS_CLIENT", "Specify the invoice notification method when new invoices are generated for this client. <strong>Note:</strong> If sending automated e-mails, it is highly recommended to ensure that all client records have an associated user record so that they can log into the website front end to set their preferences and view their invoices.");
define("INV_ACTIVE_CLIENTS_ONLY", "Clients with active orders only");
define("INV_INACTIVE_CLIENTS_ONLY", "Clients without active orders only");
@define("INV_USERNAME", "Username");
@define("INV_PASSWORD", "Password");
define("INV_CLIENT_REMINDER_EMAILS", "Reminder E-Mails?");
define("INV_INSTR_CLIENT_REMINDER_EMAILS", "Whether or not to send reminder e-mails to this client (if applicable) - see reminders feature for more information.");

//Version 1.2.0
define("INV_CLIENT_UNDER_MAMBOT_CONTROL", "This user`s access to the site is controlled by the user subscription mambot. You can click on this icon to remove all restrictions on this user`s access to your site.");
define("INV_CLIENT_CANCEL_MAMBOT_CONTROL", "Are you sure you want to remove this user from the control of the user subscription mambot?");
define("INV_CLIENT_MAMBOT_CONTROL_CANCELLED", "The selected user is no longer controlled by the user subscription mambot.");

//Version 1.2.1
define("INV_CLIENT_VIEW_ORDERS", "View Orders for this Client");

//Version 1.2.6
define("INV_CLIENT_ACTION", "Action");
define("INV_CLIENT_VIEW_INVOICES", "View Invoices for this Client");
define("INV_CLIENT_NEW_ORDER", "Create New Order for this Client");
define("INV_CLIENT_NEW_INVOICE", "Create New Invoice for this Client");
define("INV_CLIENT_NEW_REFUND", "Create New Credit Note for this Client");
?>
