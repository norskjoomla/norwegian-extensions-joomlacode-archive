<?php
/**
* Language file for the Display Options page
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

//Display Options
define("NBILL_DISPLAY_OPTIONS_TITLE", "Display Options");
define("NBILL_DISPLAY_INTRO", "Most of the options and fields that are displayed through the component's front end are configurable here - you can decide which elements to display to your end users.");
define("NBILL_DISPLAY_MY_ACCOUNT", "My Account page options");
define("NBILL_DISPLAY_USER_GROUP", "Show current membership level");
define("NBILL_DISPLAY_USER_GROUP_DESC", "Whether or not to display the ACL Group name to which the user currently belongs.");
define("NBILL_DISPLAY_PROFILE", "Show link to profile");
define("NBILL_DISPLAY_PROFILE_DESC", "Whether or not to display a link to the user's profile from the main menu of the component front end.");
define("NBILL_DISPLAY_ORDERS", "Show link to orders");
define("NBILL_DISPLAY_ORDERS_DESC", "Whether or not to display a link to the user's order list from the main menu of the component front end.");
define("NBILL_DISPLAY_INVOICES", "Show link to invoices");
define("NBILL_DISPLAY_INVOICES_DESC", "Whether or not to display a link to the user's invoices from the main menu of the component front end.");
define("NBILL_DISPLAY_QUOTES", "Show link to quotes");
define("NBILL_DISPLAY_QUOTES_DESC", "Whether or not to display a link to the user's quotes from the main menu of the component front end.");
define("NBILL_DISPLAY_MORE_LINKS", "You can add up to 10 additional links which will be displayed on the main menu of the 'My Account' page in the component's front end. Enter the link details here in the order you want them displayed.");
define("NBILL_LINK", "Link");
define("NBILL_LINK_URL", "URL");
define("NBILL_LINK_TEXT", "Link Text");
define("NBILL_LINK_DESC", "Link Description");
define("NBILL_DISPLAY_MY_PROFILE", "My Profile page options");
define("NBILL_DISPLAY_COMPANY_NAME", "Show company name field");
define("NBILL_DISPLAY_COMPANY_NAME_DESC", "Whether or not to allow the user to edit their company name on the profile page.");
define("NBILL_DISPLAY_CONTACT_NAME", "Show contact name field");
define("NBILL_DISPLAY_CONTACT_NAME_DESC", "Whether or not to allow the user to edit their contact name on the profile page.");
define("NBILL_DISPLAY_CONTACT_NAME_INV", "Show 'add contact name to invoices' field");
define("NBILL_DISPLAY_CONTACT_NAME_NBILL_DESC", "Whether or not to display the checkbox that allows users to specify whether their contact name should appear on invoices (if a company name is also present).");
define("NBILL_DISPLAY_ADDRESS", "Show address fields");
define("NBILL_DISPLAY_ADDRESS_DESC", "Whether or not to allow users to update their own address details on the profile page.");
define("NBILL_DISPLAY_EMAIL", "Show e-mail address field");
define("NBILL_DISPLAY_EMAIL_DESC", "Whether or not to allow users to update their e-mail address on the profile page.");
define("NBILL_DISPLAY_WEBSITE", "Show website address field");
define("NBILL_DISPLAY_WEBSITE_DESC", "Whether or not to allow users to update their website address on the profile page.");
define("NBILL_DISPLAY_TELEPHONE", "Show telephone number field");
define("NBILL_DISPLAY_TELEPHONE_DESC", "Whether or not to allow users to update their telephone number on the profile page.");
define("NBILL_DISPLAY_MOBILE", "Show mobile (cell) phone number field");
define("NBILL_DISPLAY_MOBILE_DESC", "Whether or not to allow users to update their mobile phone (cell phone) number on the profile page.");
define("NBILL_DISPLAY_FAX", "Show fax number field");
define("NBILL_DISPLAY_FAX_DESC", "Whether or not to allow users to update their fax number on the profile page.");
define("NBILL_DISPLAY_TAX_EXEMPT", "Show tax exemption code field");
define("NBILL_DISPLAY_TAX_EXEMPT_DESC", "Whether or not to allow users to update their tax exemption code on the profile page.");
define("NBILL_DISPLAY_CURRENCY", "Show default currency field");
define("NBILL_DISPLAY_CURRENCY_DESC", "Whether or not to allow users to specify the currency in which they wish to place orders and make payments (only takes effect if the product they order is available in the specified currency).");
define("NBILL_DISPLAY_PASSWORD", "Show password field");
define("NBILL_DISPLAY_PASSWORD_DESC", "Whether or not to allow users to update their password.");
define("NBILL_DISPLAY_MY_ORDERS", "My Orders page options");
define("NBILL_DISPLAY_NEW_ORDER_LINK", "Show 'add new order' link");
define("NBILL_DISPLAY_NEW_ORDER_LINK_DESC", "Whether or not to display a link from the order list page to allow a user to add a new order.");
define("NBILL_DISPLAY_ORDER_NO", "Show order number field (recommended)");
define("NBILL_DISPLAY_ORDER_NO_DESC", "Whether or not to display the order number in the order list.");
define("NBILL_DISPLAY_INVOICE_LINK", "Show link to invoices");
define("NBILL_DISPLAY_INVOICE_LINK_DESC", "Whether or not to include a link to the invoice(s) for each order (link appears next to the order number in the order list, and therefore requires the order number to be displayed).");
define("NBILL_DISPLAY_ORDER_DATE", "Show order date");
define("NBILL_DISPLAY_ORDER_DATE_DESC", "Whether or not to display the order date in the order list.");
define("NBILL_DISPLAY_ORDER_EXPIRY_DATE", "Show expiry date");
define("NBILL_DISPLAY_ORDER_EXPIRY_DATE_DESC", "Whether or not to display the date that the order will expire in the order list.");
define("NBILL_DISPLAY_PRODUCT", "Show product name");
define("NBILL_DISPLAY_PRODUCT_DESC", "Whether or not to display the name of the product ordered in the order list.");
define("NBILL_DISPLAY_ORDER_VALUE", "Show order value");
define("NBILL_DISPLAY_ORDER_VALUE_DESC", "Whether or not to display the order value in the order list.");
define("NBILL_DISPLAY_FREQUENCY", "Show payment frequency");
define("NBILL_DISPLAY_FREQUENCY_DESC", "Whether or not to display the payment frequency in the order list.");
define("NBILL_ALLOW_CANCELLATION", "Allow cancellation");
define("NBILL_ALLOW_CANCELLATION_DESC", "Whether or not the user should be allowed to cancel an order (only applicable if the order requires regular payments, AND order is set to auto-renew, AND payment frequency is displayed).");
define("NBILL_DISPLAY_ORDER_STATUS", "Show order status");
define("NBILL_DISPLAY_ORDER_STATUS_DESC", "Whether or not to display the status of the order in the order list.");
define("NBILL_DISPLAY_MY_INVOICES", "My Invoices page options");
define("NBILL_DISPLAY_FILTER", "Show filter dropdown");
define("NBILL_DISPLAY_FILTER_DESC", "Whether or not to display a dropdown list of orders on which to filter the list of invoices.");
define("NBILL_DISPLAY_DATE_RANGE", "Show date range");
define("NBILL_DISPLAY_DATE_RANGE_DESC", "Whether or not to allow the user to select a range of dates on which to filter the list of records (if this option is set to 'No', ALL records for that user will be shown in the list.");
define("NBILL_DISPLAY_INVOICE_DATE", "Show invoice date field");
define("NBILL_DISPLAY_INVOICE_DATE_DESC", "Whether or not to display the invoice date in the invoice list.");
define("NBILL_DISPLAY_FIRST_ITEM", "Show first item on invoice field");
define("NBILL_DISPLAY_FIRST_ITEM_DESC", "Whether or not to display the description of the first item on the invoice in the invoice list.");
define("NBILL_DISPLAY_NET", "Show net total field");
define("NBILL_DISPLAY_NET_DESC", "Whether or not to display the net total in the invoice list.");
define("NBILL_DISPLAY_GROSS", "Show gross total field");
define("NBILL_DISPLAY_GROSS_DESC", "Whether or not to display the gross total in the invoice list.");
define("NBILL_DISPLAY_OUTSTANDING", "Show total outstanding");
define("NBILL_DISPLAY_OUTSTANDING_DESC", "Whether or not to display the total amount due (if different from gross total - ie. for partially paid invoices)");
define("NBILL_DISPLAY_STATUS", "Show invoice status field");
define("NBILL_DISPLAY_STATUS_DESC", "Whether or not to display the invoice status (ie. whether unpaid, paid, partially paid, refunded, or partially refunded) in the invoice list.");
define("NBILL_DISPLAY_PAYMENT_LINK", "Show payment link (if applicable)");
define("NBILL_DISPLAY_PAYMENT_LINK_DESC", "Whether or not to display a link to allow online payment of the invoice (only applies if a default payment gateway has been specified for the vendor, and the invoice is unpaid).");
define("NBILL_DISPLAY_PDF", "Show PDF Link for Invoices");
define("NBILL_DISPLAY_PDF_DESC", "Whether or not to provide a PDF invoice in the front end (NOTE: PDF generation can be slow and use a lot of server resources, so use with caution! The PDF link will only appear if you have HTML2PS/PDF installed. See %s)");
define("NBILL_DISPLAY_PENDING_PAY_LINK", "Allow payment of pending orders?");
define("NBILL_DISPLAY_PENDING_PAY_LINK_DESC", "Whether or not to display a button that will allow the user to pay for a pending order (in case they backed out or it went wrong previously and they want to try again). Only applicable if the order status is also displayed.");
define("NBILL_DISPLAY_PAYMENT_LINK_THRESHOLD", "Frequency Treshold");
define("NBILL_DISPLAY_PAYMENT_LINK_THRESHOLD_DESC", "By default, a payment link will only appear next to unpaid invoices for 'one-off' orders. If you want to enable the link for orders with other payment frequencies, select the most frequent option here - all orders with that payment frequency, or a less frequent one, will be eligible for a payment link - subject to 'Show Payment Link' (above) being set to 'yes', and invoice being unpaid, and the order record and invoice record not overriding this value.");
/*if (!defined("NBILL_ONE_OFF"))
{
	define("NBILL_ONE_OFF", "One-off");
	define("NBILL_WEEKLY", "Always Show");
	define("NBILL_MONTHLY", "Monthly");
	define("NBILL_FOUR_WEEKLY", "Four-weekly"); //Version 1.2.0
	define("NBILL_QUARTERLY", "Quarterly");
	define("NBILL_SEMI_ANNUALLY", "Semi-annually");
	define("NBILL_ANNUALLY", "Annually");
	define("NBILL_BIANNUALLY", "Biannually");
	define("NBILL_FIVE_YEARLY", "Five Yearly");
	define("NBILL_TEN_YEARLY", "Ten Yearly");
}*/
define("NBILL_DISPLAY_PATHWAY", "Display Pathway?");
define("NBILL_DISPLAY_PATHWAY_DESC", "Whether or not to show a 'breadcrumb trail' at the top of the page when a user has logged in.");
define("NBILL_DISPLAY_USERNAME", "Show user name field");
define("NBILL_DISPLAY_USERNAME_DESC", "Whether or not to allow users to amend their user name");

/**************/
/* Version 1.1.4
/* Note to translators: Text amended for NBILL_DISPLAY_EMAIL_OPTIONS_DESC (line 106 in the en-GB file).
/**************/

//Version 1.2.0
//Line 116 (four-weekly) added

//Version 1.2.0
define("NBILL_DISPLAY_RENEW_LINK", "Show renewal link");
define("NBILL_DISPLAY_RENEW_LINK_DESC", "Whether or not to show a link that allows the client to renew an order (if auto-renew is off or expiry date has passed only).");
define("NBILL_DISPLAY_RENEW_ADVANCE_LIMIT", "Advanced renewal limit");
define("NBILL_DISPLAY_RENEW_ADVANCE_LIMIT_DESC", "Maximum number of payment cycles in advance a renewal can be made (only applicable if `show renewal link` is set to `yes`. For example, if the payment frequency of an order is monthly, and you enter a value of 3 here, orders that have auto-renew turned off will allow the user to manually renew up to 3 months in advance. If you enter 0 (zero) here, the renewal link will not appear until AFTER the due date.");
define("NBILL_DISPLAY_GATEWAY_CHOICE_ORDER", "Allow choice of gateway");
define("NBILL_DISPLAY_GATEWAY_CHOICE_ORDER_DESC", "Allow user to select which payment gateway to use (if more than one is installed and published) when renewing orders (does not apply to pending orders, as they will use whatever gateway was specified by the order form). If this is set to `no`, the default gateway from the vendor record will be used.");
define("NBILL_DISPLAY_PAY_REQUIRES_LOGIN_ORDER", "Login required for payment");
define("NBILL_DISPLAY_PAY_REQUIRES_LOGIN_ORDER_DESC", "Whether or not user must be logged in before they can pay for a pending order or order renewal.");
define("NBILL_DISPLAY_GATEWAY_CHOICE_INVOICE", "Allow choice of gateway");
define("NBILL_DISPLAY_GATEWAY_CHOICE_INVOICE_DESC", "Allow user to select which payment gateway to use (if more than one is installed and published) when paying an invoice. If this is set to `no`, the default gateway from the vendor record will be used.");
define("NBILL_DISPLAY_PAY_REQUIRES_LOGIN_INVOICE", "Login required for payment");
define("NBILL_DISPLAY_PAY_REQUIRES_LOGIN_INVOICE_DESC", "Whether or not user must be logged in before they can pay an invoice.");
define("NBILL_DISPLAY_PARCEL_TRACKING", "Show parcel tracking link");
define("NBILL_DISPLAY_PARCEL_TRACKING_DESC", "Whether or not to show a link that will allow the user to track their package online (subject to a parcel tracking URL being set on the shipping record and a tracking ID being set on the order record). NOTE: This will ONLY be shown if Status is also shown.");

//Version 1.2.1
define("NBILL_DISPLAY_MY_ACCOUNT_HEADER", "Show 'My Account' Heading?");
define("NBILL_DISPLAY_MY_ACCOUNT_HEADER_DESC", "Whether or not to display a heading on each page in the front-end for logged-in users (default text is 'My Account', but you can change this in the language file if you wish)");
define("NBILL_DISPLAY_SUPPRESS_RENEW_IF_CANCELLED", "Suppress renewal if order cancelled");
define("NBILL_DISPLAY_SUPPRESS_RENEW_IF_CANCELLED_DESC", "Whether or not to suppress the renewal link if the order has been cancelled (prevents users from re-instating an order after having cancelled it - only applicable if `show renewal link` is set to `yes`).");
define("NBILL_DISPLAY_SUPPRESS_CANCEL_IF_NOT_AUTO_RENEW", "Suppress cancel if order not auto-renew");
define("NBILL_DISPLAY_SUPPRESS_CANCEL_IF_NOT_AUTO_RENEW_DESC", "Whether or not to suppress the cancel link if the order is not set to auto-renew. Cancelling an order that does not auto-renew has no tangible effect, but if you want to allow your users to cancel such orders anyway (rather than have to explain to them that there is no need to cancel), set this to `no`. Only applicable if `Allow cancellation` is set to `yes`, otherwise the cancel link will not appear anyway.");

//Version 1.2.3 - Note to translators:
//Line 114 of original en-GB language file amended (NBILL_WEEKLY) - changed to 'Always Show' for clarity

//Version 1.2.9
define("NBILL_DISPLAY_INV_SHOW_DATE_RANGE", "Show date range on invoices?");
define("NBILL_DISPLAY_INV_SHOW_DATE_RANGE_DESC", "Whether or not to display the date range in the invoice item descriptions for invoices relating to recurring payments (NOTE: this affects invoice generation only. Existing invoices will not change when you change this setting. If you set this to 'no', the date range will not be recorded on the invoice, so you might have trouble identifying the period the invoice was for.");
define("NBILL_DISPLAY_ADD_OPTION_TO_FORM_ACTION", "Add option parameter to form submission URL?");
define("NBILL_DISPLAY_ADD_OPTION_TO_FORM_ACTION_DESC", "There are 2 ways of submitting forms (ie. with or without the option parameter in the URL). In most cases, both methods will work, but some templates and some SEF URL components are fussy. If you find any form submissions are just redirecting to your home page or a blank page, try changing the value of this setting.");

//Version 2.0.1
define("NBILL_DISPLAY_MY_PROFILE_HELP", "You can control what is displayed on the My Profile page by using the %s feature");
define("NBILL_DISPLAY_MY_PROFILE_HELP_FIELDS", "Client Profile Fields");
define("NBILL_DISPLAY_MY_QUOTES", "My Quotes page options");
define("NBILL_DISPLAY_NEW_QUOTE_LINK", "Show 'request new quote' link");
define("NBILL_DISPLAY_NEW_QUOTE_LINK_DESC", "Whether or not to display a link from the quote list page to allow a user to request a new quote.");
define("NBILL_DISPLAY_QUOTE_DATE", "Show quote date field");
define("NBILL_DISPLAY_QUOTE_DATE_DESC", "Whether or not to display the quote date in the quote list.");
define("NBILL_DISPLAY_QUOTE_FIRST_ITEM", "Show first item on quote field");
define("NBILL_DISPLAY_QUOTE_FIRST_ITEM_DESC", "Whether or not to display the description of the first item on the quote in the quote list.");
define("NBILL_DISPLAY_QUOTE_NET", "Show net total field");
define("NBILL_DISPLAY_QUOTE_NET_DESC", "Whether or not to display the net total in the quote list.");
define("NBILL_DISPLAY_QUOTE_GROSS", "Show gross total field");
define("NBILL_DISPLAY_QUOTE_GROSS_DESC", "Whether or not to display the gross total in the quote list.");
define("NBILL_DISPLAY_QUOTE_STATUS", "Show quote status field");
define("NBILL_DISPLAY_QUOTE_STATUS_DESC", "Whether or not to display the quote status (ie. new, on hold, quoted, accepted, or part accepted) in the quote list (rejected quotes do not appear on the list).");
define("NBILL_DISPLAY_GATEWAY_CHOICE_QUOTE", "Allow choice of gateway");
define("NBILL_DISPLAY_GATEWAY_CHOICE_QUOTE_DESC", "Allow user to select which payment gateway to use (if more than one is installed and published) when paying for an accepted quote. If this is set to `no`, the default gateway from the vendor record will be used.");