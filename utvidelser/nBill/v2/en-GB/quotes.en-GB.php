<?php
/**
* Language file for Quotes
* @version 1
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

define("NBILL_QUOTES_TITLE", "Quotations");
define("NBILL_QUOTES_INTRO", "You can create custom quotes here for existing or potential clients. Quote records can either be created by an administrator, or automatically when someone fills in a quote request form. When a quote is accepted, an order and/or invoice record can be generated automatically based on the quote.");
define("NBILL_INVOICE_NUMBER_QU", "Quote Number");
define("NBILL_INVOICE_DATE_QU", "Quote Date");
define("NBILL_FIRST_ITEM_QU", "First Item on Quote");
define("NBILL_EDIT_INVOICE_QU", "Edit Quote");
define("NBILL_EMAIL_NOW_QU", "Send this quote to the contact by e-mail now");
define("NBILL_BILLING_NAME_REQUIRED_QU", "Please enter a contact name");
define("NBILL_NEW_INVOICE_QU", "New Quote");
define("NBILL_INVOICE_DETAILS_QU", "Quote Details");
define("NBILL_INSTR_INVOICE_NUMBER_QU", "<strong>Note:</strong> Leave blank if adding a new quote - the component will automatically assign the next available quote number.");
define("NBILL_INSTR_BILLING_NAME_QU", "The name of the person and/or company being quoted.");
define("NBILL_BILLING_NAME_QU", "Client Name");
define("NBILL_BILLING_ADDRESS_QU", "Client Address");
define("NBILL_BILLING_COUNTRY_QU", "Country");
define("NBILL_INVOICE_ITEMS_QU", "Quote Items");
define("NBILL_INSTR_VENDOR_NAME_QU", "Enter the name that you want to appear on your quotes");
define("NBILL_INSTR_VENDOR_ADDRESS_QU", "Enter the address that you want to appear on your quotes");
define("NBILL_INVOICE_RECORD_LIMIT_WARNING_QU", "WARNING! As there are %s or more contacts in your database, only the first %s have been loaded into the above list. If the contact you require is not here, please use the 'create new quote' icon on the contact list (the appropriate record will then be selected here automatically).");
define("NBILL_INVOICE_TOTAL_THIS_PAGE_QU", "Total for all quotes shown on THIS page:");
define("NBILL_INVOICE_TOTAL_ALL_PAGES_QU", "Total for ALL quotes on ALL pages in the selected date range:");
define("NBILL_QUOTE_STATUS", "Quote Status");
define("NBILL_INSTR_QUOTE_STATUS", "NEW means that the client or potential client has requested a quote but you have not yet finalised the price (any items you may add to the quote are not visible to the user). <br />ON HOLD means you are awaiting further information from the client (any items you have added are not visible to the user). <br />QUOTED means you have supplied the price (any items you added to the quote, including the total, are visible to the user). <br />ACCEPTED means the user has accepted the entire quote - typically this would result in one or more order or invoice records being generated. <br />PART ACCEPTED means they have accepted one or more items, but not all items on the quote - typically this would result in one or more order or invoice records being generated.<br />REJECTED means the user has rejected the entire quote.");
define("NBILL_QUOTE_CLIENT_REQUIRED", "Please select a client (or potential client)");
define("NBILL_QUOTE_CORRESPONDENCE", "Quote Correspondence");
define("NBILL_INSTR_QUOTE_CORRESPONDENCE", "The data that was entered by the user on the quote request form (if applicable), as well as any correspondence requesting or supplying further information. Anything entered here is always visible to the user.");
define("NBILL_QUOTE_PAY_FREQ", "Payment Frequency");
define("NBILL_QUOTE_AUTO_RENEW", "Auto Renew?");
define("NBILL_QUOTE_RELATING_TO", "Relating to");
define("NBILL_QUOTE_UNIQUE_INVOICE", "Unique Invoice?");
define("NBILL_QUOTE_ITEM_MANDATORY", "Mandatory Item?");
define("NBILL_QUOTE_ITEM_ACCEPTED", "Item Accepted?");
define("NBILL_QUOTE_SAVED", "The Quote has been saved. ");
define("NBILL_QUOTE_ON_HOLD_MESSAGE_INTRO", "The status of the quote is '" . (defined('NBILL_STATUS_QUOTE_ON_HOLD') ? NBILL_STATUS_QUOTE_ON_HOLD : 'On Hold') . "'. If you would like to send a message to the client requesting further information, please enter your message below and click on send. The message will also be stored on the quote record.");
define("NBILL_QUOTE_QUOTED_MESSAGE_INTRO", "The status of the quote is '" . (defined('NBILL_STATUS_QUOTE_QUOTED') ? NBILL_STATUS_QUOTE_QUOTED : 'Quoted') . "'. If you would like to send the quote to the client now, please enter or amend the message below and click on send.");
define("NBILL_QUOTE_GENERATE_INTRO", "One or more items on this quote are marked as accepted. If you would like to generate order and/or invoice records for these items, please confirm the details below and click on 'Generate'.");
define("NBILL_NO_ACCEPTED_ITEMS", "No quote items are marked as accepted. You cannot generate any orders or invoices for this quote.");
define("NBILL_QUOTE_CREATE_ORDER", "Create Order?");
define("NBILL_QUOTE_CREATE_INVOICE", "Create Invoice?");
define("NBILL_QUOTE_GENERATE_RECORDS", "Generate");
define("NBILL_QUOTE_GENERATE_ABORT", "Abort");
define("NBILL_QUOTE_ORDER_NEXT_DUE", "Next Due Date");
define("NBILL_QUOTE_PAY_TO_ACCEPT", "Payment Required to Accept?");
define("NBILL_INSTR_QUOTE_PAY_TO_ACCEPT", "Whether or not the client must go through the payment process before they are allowed accept any part of the quote. If the selected payment plan (specified above) indicates a deferred payment, no payment will be taken and the relevant order/invoice records will be created immediately, if applicable.");
define("NBILL_QUOTE_AUTO_CREATE_ORDERS", "Auto Create Order(s)?");
define("NBILL_INSTR_QUOTE_AUTO_CREATE_ORDERS", "Whether or not to automatically create order record(s) for each item on the quote that is accepted by the client. If Payment is required to accept the quote (specified above), this will only happen once payment has been confirmed by the payment gateway, or if an administrator generates the record(s).");
define("NBILL_QUOTE_AUTO_CREATE_INVOICES", "Auto Create Invoice(s)?");
define("NBILL_INSTR_QUOTE_AUTO_CREATE_INVOICES", "Whether or not to automatically create invoice record(s) for each item on the quote that is accepted by the client. If Payment is required to accept the quote (specified above), this will only happen once payment has been confirmed by the payment gateway, or if an administrator generates the record(s).");
define("NBILL_QUOTE_AUTO_CREATE_INCOME", "Auto Create Income?");
define("NBILL_INSTR_QUOTE_AUTO_CREATE_INCOME", "Whether or not to automatically create income record(s) for each item on the quote that is accepted and paid for by the client. This will only happen once payment has been confirmed by the payment gateway.");
define("NBILL_QUOTE_RECORDS_GENERATED", "%s Order record(s) and %s Invoice record(s) Generated.");
define("NBILL_QUOTE_RECORDS_GENERATED_ERRORS", "WARNING! The following error(s) occurred: ");
define("NBILL_QUOTE_GENERATE_WARNING_ORDERS", "WARNING! The following order record(s) have already been generated based on this quote: ");
define("NBILL_QUOTE_GENERATE_WARNING_INVOICES", "WARNING! The following invoice record(s) have already been generated based on this quote: ");
define("NBILL_WARNING_QUOTE_ACCEPTED", "WARNING! This quote has already been accepted. Are you sure you want to change it?");
define("NBILL_WARNING_QUOTE_PART_ACCEPTED", "WARNING! This quote has already been partially accepted. Are you sure you want to change it?");