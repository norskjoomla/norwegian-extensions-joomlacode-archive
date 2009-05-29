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

//Pending Orders
define("INV_PENDING", "Pending");
define("INV_ACTIVATE_PENDING_ORDER", "Activate Pending");
define("INV_ACTIVATE_ARE_YOU_SURE", "WARNING! This will create a new order record, and the pending record will be deleted. If the related order form stipulates automatic creation of a user record and/or invoice, these will also be generated. Are you sure you want to continue?");
define("INV_SELECT_PENDING_ORDER", "Please make a selection from the list to activate");
define("INV_PENDING_ORDER", "Pending Order");
define("INV_PENDING_TITLE", "Pending Orders");
define("INV_PENDING_INTRO", "These are orders that were received through the website front-end, but for which payment has not yet been confirmed. Orders will only be held in this pending file if the order form to which they relate stipulates that they should be held until payment is confirmed. If the installed payment gateway extension detects a payment for a pending order, the order will be created automatically. If payment has been made by some other means, or if you want to activate an order without having received payment, you may do so using the activate toolbar button.");
define("INV_PENDING_ORDER_ID", "Order ID");
define("INV_PENDING_ORDER_FORM", "Order Form");
define("INV_PENDING_ORDER_DATE", "Date");
define("INV_PENDING_ORDER_VALUE", "Total Order Value");
define("INV_SHOW_PENDING_ORDER", "Show Pending Order Details");
define("INV_PENDING_ORDER_DETAILS", "Pending Order Details");
define("INV_QUANTITY", "Quantity");
define("INV_OTHER_DATA", "Other Data");
define("INV_ORDERS_ACTIVATED", "Selected Pending Orders Activated");
@define("INV_USERNAME", "Username");
@define("INV_PAY_FREQUENCY", "Payment Frequency");

//Version 1.2.0
define("INV_PENDING_RESUME_LINK", "If you have enabled the payment of orders without being logged in (on the display options page), the following link can be used to resume this pending order (ie. to make payment).");
?>
