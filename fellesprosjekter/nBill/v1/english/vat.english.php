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

//Tax
define("INV_TAX_TITLE", "Value Added Tax / Sales Tax");
define("INV_TAX_INTRO", "You can specify different tax rates for buyers in different countries, or different tax zones - the correct rate will automatically be applied depending on the client's billing address and/or tax zone.");
define("INV_TAX_NAME", "Name of Tax");
define("INV_TAX_COUNTRY", "Country");
define("INV_TAX_RATE", "Rate");
define("INV_TAX_PAYMENT_INSTR", "Payment Instructions");
define("INV_TAX_SMALL_PRINT", "Small Print");
define("INV_TAX_EXEMPT_WITH_REF", "Exempt With Tax Reference?");
define("INV_EDIT_TAX", "Edit Tax");
define("INV_TAX_NAME_REQUIRED", "You must provide a name for this tax record.");
define("INV_TAX_COUNTRY_REQUIRED", "You must specify a country.");
define("INV_NEW_TAX", "New Tax Record");
define("INV_TAX_DETAILS", "Tax Details");
define("INV_TAX_ZONE", "Tax Zone");
define("INV_TAX_ONLINE_EXEMPT", "Online Orders Exempt?");
define("INV_INSTR_TAX_NAME", "Enter the full name of this type of tax (eg. \"Value Added Tax\", \"Imposto Sobre o Valor Acrescentado\")");
define("INV_INSTR_TAX_COUNTRY", "Specify which country this tax rate applies to.  In addition to the individual countries there are 2 special entries: \"European Union\", which includes all EU countries, and \"Worldwide\" which is a default to be applied whenever the country of the billing address does not have its own tax record.");
define("INV_INSTR_TAX_RATE", "Enter the rate of tax as a percentage value (don't include the % sign)");
define("INV_INSTR_TAX_PAYMENT_INSTR", "Any payment instructions you enter here will override the default payment instructions (defined on the Vendor page) for this country only.");
define("INV_INSTR_TAX_SMALL_PRINT", "Any small print you enter here will override the default small print (defined on the Vendor page) for this country only.");
define("INV_INSTR_TAX_EXEMPT_WITH_REF", "Specify whether to omit tax if the buyer is able to provide their own tax reference number or reseller certification (eg. for supplies made from the UK to the EU, or supplies made to resellers who are exempt from sales tax in ths US).");
define("INV_INSTR_TAX_ZONE", "If this tax rate only applies to certain clients (eg. those within a particular state or municipality), enter a code (up to 5 characters) to identify this rate of tax - and record the same code against the client's record.");
define("INV_INSTR_TAX_ONLINE_EXEMPT", "Whether or not online orders are exempt from this tax (typically for use in the US). If 'yes', any orders made through the component's front end that would normally fall under this tax rate, will not have tax applied. Administrators entering orders in the back end can choose whether or not to apply this tax rate.");

//Version 1.2.4
define("INV_TAX_RATE_CHANGE_WARNING", "WARNING! You have selected to change this tax rate from %s to %s, but there are already orders with recurring payment frequencies that are using the old rate. Future invoices for these orders will continue to be produced at the old rate if the order records are not updated. Your change has NOT yet been saved. Please select what action to take below.");
define("INV_TAX_RATE_CHANGE_AUTO_RENEW", "There are %s order records set to auto-renew. It is recommended that you allow " . INV_BRANDING_NAME . " to automatically adjust the net price and tax so that the gross amount stays the same - that way, any recurring payment schedule can stay in force. PLEASE NOTE: If you select to change the gross amount instead (not recommended), any existing payment schedules will need to be either amended, or cancelled and set up again for the new amount.");
define("INV_TAX_RATE_CHANGE_MANUAL_RENEW", "There are %s order records set to be renewed manually. You have a choice between allowing " . INV_BRANDING_NAME . " to automatically adjust the net price and tax so that the gross amount stays the same, or to automatically adjust the tax and gross amount so that the net price remains the same. If the gross amount is changed, naturally the next payment for each order will be for a different amount than previously, so do not use this option if the client has a recurring payment schedule set up (not likely as these orders are renewed manually).");
define("INV_TAX_RATE_CHANGE_ACTION_AUTO", "Please Select One of the Following Actions (for auto-renew orders)");
define("INV_TAX_RATE_CHANGE_ACTION_MANUAL", "Please Select One of the Following Actions (for manual renewal orders)");
define("INV_TAX_RATE_CHANGE_UPDATE_NET", "Update net price and tax, keep gross amount the same");
define("INV_TAX_RATE_CHANGE_UPDATE_GROSS", "Update gross price and tax, keep net amount the same");
define("INV_TAX_RATE_CHANGE_NO_ACTION_AND_CANCEL", "Take no action, and cancel the change of tax rate");
define("INV_TAX_RATE_CHANGE_NO_ACTION_AND_SAVE", "Take no action, but go ahead and save the tax rate change anyway");
define("INV_TAX_RATE_CHANGE_RECOMMENDED", " (Recommended)");
define("INV_TAX_RATE_CHANGE_NOT_RECOMMENDED", " (NOT RECOMMENDED!)");
define("INV_TAX_RATE_CHANGE_ORDER_DETAILS", "%s to see the orders that will be affected by this change.");
define("INV_TAX_RATE_CHANGE_ORDERS_INTRO", "The following order records will be affected by this change. NOTE: This list includes cancelled orders in case they are ever re-activated in future. Click on an order number to open the order record in a new window.");
define("INV_TAX_AFFECTED_ORDER_NO", "Order Number");
define("INV_TAX_AFFECTED_ORDER_COMPANY", "Company");
define("INV_TAX_AFFECTED_ORDER_CONTACT", "Contact");
define("INV_TAX_AFFECTED_ORDER_PRODUCT", "Product");
define("INV_TAX_AFFECTED_ORDER_NET", "Net Price");
define("INV_TAX_AFFECTED_ORDER_TAX", "Tax Amount");
define("INV_TAX_AFFECTED_ORDER_GROSS", "Gross Amount");
define("INV_TAX_RATE_CHANGE_WARNING_END", "When you have selected what action to take, above, please click on either the 'Apply' or 'Save' toolbar button. Until you click on one either 'Apply' or 'Save', your requested change will NOT be implemented.");
define("INV_TAX_RATE_CHANGE_SURE", "This action will affect a total of %s orders. Are you sure you want to continue?");
define("INV_TAX_RATE_CHANGE_ORDERS_UPDATED", "%s Order Records have been updated.");
define("INV_TAX_RATE_CHANGE_NONE", "No"); //Note for translators: This is 'no' as in 'not any' - ie. 'No Order Records have been updated'
define("INV_TAX_RATE_CHANGE_CHECK_PRODUCTS", "NOTE: It might also be a good idea to review your product prices and check they are still valid following the tax rate change, particularly if you charge all customers inclusive of tax.");
?>