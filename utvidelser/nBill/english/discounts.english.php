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

//Discounts
define("INV_DISCOUNTS_TITLE", "Discounts");
define("INV_DISCOUNTS_INTRO", "You can set up discount rules here which can be applied to your products (either individually, or as a whole). Discounts can be restricted by user level and/or voucher code, and can be implemented as percentages or fixed amounts. You can also choose to automatically disable a voucher-based discount after it has been used to prevent it being used again, and specify date ranges during which your discounts are applicable.");
define("INV_DISCOUNT_NAME", "Discount Name");
define("INV_DISCOUNT_END_DATE", "End Date");
define("INV_DISCOUNT_USER_LEVEL", "User Level");
define("INV_DISCOUNT_PERCENTAGE", "Percentage");
define("INV_DISCOUNT_AMOUNT", "Amount");
define("INV_EDIT_DISCOUNT", "Edit Discount");
define("INV_ALL_GROUPS", "All");
define("INV_AND_ABOVE", " and above");
define("INV_DISCOUNT_NAME_REQUIRED", "Please enter a name for this discount.");
define("INV_NEW_DISCOUNT", "New Discount");
define("INV_DISCOUNT_DETAILS", "Discount Details");
define("INV_INSTR_DISCOUNT_NAME", "Enter a descriptive name for this discount that will help you easily identify what it is for.");
define("INV_DISCOUNT_DISPLAY_NAME", "Display Name");
define("INV_INSTR_DISCOUNT_DISPLAY_NAME", "Text to display on invoices when this discount is used (if blank, the discount name, above, will be used).");
define("INV_DISCOUNT_TIME_LIMITED", "Time-limited?");
define("INV_INSTR_DISCOUNT_TIME_LIMITED", "Whether or not to apply a date range during which this discount will be applicable.");
define("INV_DISCOUNT_START_DATE", "Start Date");
define("INV_INSTR_DISCOUNT_START_DATE", "When to start applying this discount (only applicable if 'Time Limited' is set to 'yes')");
define("INV_INSTR_DISCOUNT_END_DATE", "When to stop applying this discount (only applicable if 'Time Limited' is set to 'yes')");
define("INV_DISCOUNT_GLOBAL", "Global?");
define("INV_INSTR_DISCOUNT_GLOBAL", "Whether to apply this discount to all products (set to 'no', and edit individual product records to apply the discount only to certain products). NOTE: You can also exclude global discounts for a particular product by editing the product record.");
define("INV_INSTR_DISCOUNT_USER_LEVEL", "Access level user group of users who are allowed this discount.");
define("INV_DISCOUNT_AND_ABOVE", "And Above?");
define("INV_INSTR_DISCOUNT_AND_ABOVE", "Whether users with a higher access level group than the above are also allowed this discount.");
define("INV_GUEST", "Guest (not logged in)");
define("INV_INSTR_DISCOUNT_PERCENTAGE", "Percentage discount to apply - don't include the percent sign. (eg. for 10%, just enter 10)");
define("INV_INSTR_DISCOUNT_AMOUNT", "Fixed amount to discount (only applies if percentage is 0)");
define("INV_DISCOUNT_EXCLUSIVE", "Exclusive?");
define("INV_INSTR_DISCOUNT_EXCLUSIVE", "Whether to prohibit the use of any other discount if this discount is being used (where more than one discount is applicable, use the priority value to indicate which one to use).");
define("INV_DISCOUNT_PRIORITY", "Priority");
define("INV_INSTR_DISCOUNT_PRIORITY", "Enter a number to indicate the priority of this discount if more than one discount is applicable. The LOWER the number you enter here, the HIGHER the priority of the discount - so a discount with a priority of '0' will be applied before a discount with a priority of '1'. You can use whatever numbers you want. If 2 discounts have the same priority, the ordering will be arbitrary.");
define("INV_DISCOUNT_VOUCHER", "Voucher");
define("INV_INSTR_DISCOUNT_VOUCHER", "If you specify a voucher code here (eg. for a specific promotion), the discount will ONLY be applied if the user enters the voucher code on the order form or if the voucher code is added to the order by an administrator. NOTE: For this to work, you must also specify on the order form that you want to allow a voucher code to be entered, OR, you can use this to assign a discount to an individual order by entering the voucher code on the order record yourself.");
define("INV_DISCOUNT_RECURRING", "Recurring Discount?");
define("INV_INSTR_DISCOUNT_RECURRING", "Whether the discount should also be applied to repeat payments.");
define("INV_AVAILABLE", "Available");
define("INV_DISCOUNT_AVAILABLE_YES", "Available for new orders");
define("INV_DISCOUNT_AVAILABLE_NO", "Not available for new orders");
define("INV_DISCOUNT_AVAILABLE", "Available for New Orders?");
define("INV_INSTR_DISCOUNT_AVAILABLE", "Whether this discount is available for new orders (or only for existing orders with recurring payments).");
define("INV_DISCOUNT_AUTO_DISABLE", "Auto-Disable Discount?");
define("INV_INSTR_DISCOUNT_AUTO_DISABLE", "Whether to automatically make this discount unavailable for new orders when it has been used (to prevent the same voucher code being used twice).");
define("INV_DISCOUNT_PREREQ_PRODUCTS", "Prerequisite Products");
define("INV_INSTR_DISCOUNT_PREREQ_PRODUCTS", "If the user must already have a certain product before they qualify for this discount, specify the prerequisite product(s) here. If more than one product is selected, the discount will be granted if they already have ANY one of the prerequisite products.");
define("INV_DISCOUNT_PREREQ_CATS", "Categories");
define("INV_DISCOUNT_PREREQ_CAT_PROD", "Products");
define("INV_DISCOUNT_PREREQ_SELECTED_PROD", "Selected Product(s)");
define("INV_DISCOUNT_AMOUNT_REQUIRED", "Please specify either a percentage or an amount (for each currency).");
define("INV_DISCOUNT_DATE_REQUIRED", "Please either specify both a start and end date for this discount, or set the `Time-limited` option to `no`");
define("INV_DISCOUNT_MIN_ORDER_VALUE", "Minimum Order Value");
define("INV_INSTR_DISCOUNT_MIN_ORDER_VALUE", "Minimum value that client must order (in one go, after any other discounts have been applied, but net of tax) in order to qualify for this discount.");
define("INV_DISCOUNT_CARRIAGE_ONLY", "Carriage Discount?");
define("INV_INSTR_DISCOUNT_CARRIAGE_ONLY", "Whether or not this discount only relates to the carriage fees.");
define("INV_DISCOUNT_WARNING_IN_USE", "WARNING! This discount is currently being used by the following order(s) with a recurring payment frequency. If you edit the rules of this discount, it could affect future invoices for these orders:");
define("INV_DISCOUNT_CANNOT_DELETE", "One or more discounts selected for deletion cannot be deleted because they are being used by the following order(s) with a recurring payment frequency:");
define("INV_DISCOUNTS_WARNING_DATE_PLUS_RECURRING", "WARNING! This discount has both an end date AND is set to be applied to recurring payments. This is not recommended, as the payment schedule will continue with the discounted amount even after then end date (but invoices won`t). Are you sure you want to save?");
	
/********************/
/* Version 1.1.4 
/* Note to translators: Text changed on the following constants:
/* INV_INSTR_DISCOUNT_USER_LEVEL, INV_INSTR_DISCOUNT_AND_ABOVE (lines 47 and 49 in the English file)
/********************/

//Version 1.2.1
define("INV_DISCOUNT_RENEWALS", "Add to Renewals?");
define("INV_INSTR_DISCOUNT_RENEWALS", "Whether or not to add this discount when existing qualifying orders (that did not previously have this discount) are renewed (applicable to recurring discounts only). If an existing order already had this discount assigned to it (and it is a recurring discount), it will continue to be used for renewals regardless of this setting.");
define("INV_DISCOUNT_DISQUAL_PRODUCTS", "Disqualifying Products");
define("INV_INSTR_DISCOUNT_DISQUAL_PRODUCTS", "If the user must NOT already have a certain product before they qualify for this discount, specify the disqualifying product(s) here. If more than one product is selected, the discount will be denied if they already have ANY one of the disqualifying products.");
define("INV_DISCOUNT_DISQUAL_CATS", "Categories");
define("INV_DISCOUNT_DISQUAL_CAT_PROD", "Products");
define("INV_DISCOUNT_DISQUAL_SELECTED_PROD", "Selected Product(s)");

//Version 1.2.7
define("INV_DISCOUNT_RECORD_LIMIT_WARNING", "WARNING! As there are %s or more orders with a recurring payment frequency using this discount, only the first %s records have been displayed here. If you want to see all of the orders, click on 'Show All' (below).");
define("INV_DISCOUNT_SHOW_ALL", "Show All");
?>