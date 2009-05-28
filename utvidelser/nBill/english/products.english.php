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

//Products
define("INV_PRODUCTS_TITLE", "Products/Services");
define("INV_PRODUCTS_INTRO", "This is a list of the products or services for which invoices can be generated.");
define("INV_PRODUCT_NAME", "Name");
define("INV_PRODUCT_SKU", "Code/SKU");
define("INV_PRODUCT_PRICES", "Price(s)");
define("INV_EDIT_PRODUCT", "Edit Product or Service");
define("INV_NEW_PRODUCT", "New Product or Service");
define("INV_PRODUCT_DESCRIPTION", "Description");
define("INV_PATH_TO_IMAGE", "Path to Image");
define("INV_IS_FREEBIE", "Free of Charge?");
define("INV_PRODUCT_NAME_REQUIRED", "Please enter a name for this product or service.");
define("INV_PRODUCT_DETAILS", "Product Details");
define("INV_NET_PRICE_ONE_OFF", "Net Price One-off");
define("INV_NET_PRICE_WEEKLY", "Net Price Weekly");
define("INV_NET_PRICE_MONTHLY", "Net Price Monthly");
define("INV_NET_PRICE_QUARTERLY", "Net Price Quarterly");
define("INV_NET_PRICE_ANNUALLY", "Net Price Annually");
define("INV_NET_PRICE_BIANNUALLY", "Net Price Bi-annually");
define("INV_NET_PRICE_FIVE_YEARLY", "Net Price Five-yearly");
define("INV_NET_PRICE_TEN_YEARLY", "Net Price Ten-yearly");
define("INV_IS_TAXABLE", "Taxable?");
define("INV_REQUIRES_CARRIAGE", "Add Carriage Fees?");
define("INV_CARRIAGE_SERVICES", "Carriage Services Available");
define("INV_CARRIAGE_UNITS", "Carriage Units");
define("INV_AUTO_FULFIL", "Auto Fulfil Orders?");
define("INV_IS_DOWNLOADABLE", "Is Downloadable?");
define("INV_DOWNLOAD_LOCATION", "Download Location");
define("INV_NO_OF_DAYS_AVAILABLE", "No. of Days Available");
define("INV_DOWNLOAD_LINK_TEXT", "Download Link Text");
define("INV_INSTR_PRODUCT_SKU", "An 'SKU' or 'Stock Keeping Unit' is a code that you use to uniquely identify this product. You can use whatever code you like.");
define("INV_INSTR_PRODUCT_NAME", "");
define("INV_INSTR_PRODUCT_CATEGORY", "");
define("INV_INSTR_PATH_TO_IMAGE", "This is not currently used, but might be implemented at a later date for use in conjunction with a shopping cart.");
define("INV_INSTR_IS_FREEBIE", "It this product is supplied free of charge, indicate that here, otherwise fill in one or more of the pricing boxes below.");
define("INV_INSTR_NET_PRICE_ONE_OFF", "If this item can be bought outright (rather than paid for on a regular basis), enter the net price here.");
define("INV_INSTR_NET_PRICE_WEEKLY", "If item can be paid for weekly, enter net price per week.");
define("INV_INSTR_NET_PRICE_MONTHLY", "If item can be paid for monthly, enter net price per month.");
define("INV_INSTR_NET_PRICE_QUARTERLY", "If item can be paid for quarterly, enter net price per quarter.");
define("INV_INSTR_NET_PRICE_ANNUALLY", "If item can be paid for annually, enter net price per year.");
define("INV_INSTR_NET_PRICE_BIANNUALLY", "If item can be paid for bi-annually, enter net price per 2 years.");
define("INV_INSTR_NET_PRICE_FIVE_YEARLY", "If item can be paid for five-yearly, enter net price per 5 years.");
define("INV_INSTR_NET_PRICE_TEN_YEARLY", "If item can be paid for ten-yearly, enter net price per 10 years.");
define("INV_INSTR_IS_TAXABLE", "Select 'no' if you always want to omit tax for this item, otherwise, 'yes'.");
define("INV_INSTR_REQUIRES_CARRIAGE", "Whether or not carriage fees need to be added to the price of this item.");
define("INV_INSTR_CARRIAGE_SERVICES_AVAILABLE", "Select the delivery services that can be used with this item, if applicable.");
define("INV_INSTR_CARRIAGE_UNITS", "The defined carriage rate for the selected service will be multiplied by this value to calculate the total carriage cost (typically you would enter a value greater than 1 for heavier items that cost more to ship). Decimal fractions are allowed.");
define("INV_INSTR_AUTO_FULFIL", "Indicate whether all orders for this item are set to a status of 'complete' automatically (eg. for immediate download).");
define("INV_INSTR_IS_DOWNLOADABLE", "Whether or not the client should be able to download this product from their 'My Account' area.");
define("INV_INSTR_DOWNLOAD_LOCATION", "The ABSOLUTE PATH to the download file (eg. /home/username/downloads/mydocument.pdf). This location should NOT be in the public area of your site. (ie. Don't use a folder underneath your public_html or htdocs folder, otherwise anyone will be able to download it without paying!)");
define("INV_INSTR_DOWNLOAD_LINK_TEXT", "Text to display for the download link.");
define("INV_INSTR_NO_OF_DAYS_AVAILABLE", "Number of days that the link(s) for downloading the file(s) should be made available in the client's 'My Account' area.");
define("INV_PRODUCT_PRICE_INTRO", "Enter the price(s) of the product for each currency that you want to sell this product in.");
define("INV_DOWNLOAD_INFO_REQUIRED", "You have specified that this is a downloadable product, but have not specified either the download location or the link text. Please ensure both of these values are completed if you want this product to be downloadable.");
define("INV_DOWNLOAD_LOCATION_2", "Download Location 2");
define("INV_INSTR_DOWNLOAD_LOCATION_2", "The ABSOLUTE PATH to the 2nd download file (you can have up to 3 files, eg. you might want an extra tutorial document to accompany your main product). ");
define("INV_DOWNLOAD_LINK_TEXT_2", "2nd Download Link Text");
define("INV_INSTR_DOWNLOAD_LINK_TEXT_2", "Text to display for the download link for the 2nd file.");
define("INV_DOWNLOAD_LOCATION_3", "Download Location 3");
define("INV_INSTR_DOWNLOAD_LOCATION_3", "The ABSOLUTE PATH to the 3rd download file.");
define("INV_DOWNLOAD_LINK_TEXT_3", "3rd Download Link Text");
define("INV_INSTR_DOWNLOAD_LINK_TEXT_3", "Text to display for the download link for the 3rd file.");
define("INV_IS_USER_SUB", "User Subscription?");
define("INV_INSTR_IS_USER_SUB", "Indicate whether this product represents a user subscription.");
define("INV_SUB_ACCESS_LEVEL", "Access Level User Group");
define("INV_INSTR_SUB_ACCESS_LEVEL", "Access level user group to grant to users who purchase this subscription.");
define("INV_EXPIRY_LEVEL", "Expiry Access Level Group");
define("INV_INSTR_EXPIRY_LEVEL", "What to do with the user privileges when the subscription expires (note: if ordered at a 'one-off' price, the subscription will never expire).");
define("INV_EXPIRY_REDIRECT", "Expiry Redirect");
define("INV_INSTR_EXPIRY_REDIRECT", "URL to redirect to after a subscription expiry is processed (ie. after the user record has been downgraded, blocked, or deleted). 'None' means that no redirect will take place, 'Default' means that " . INV_BRANDING_NAME . " will generate an appropriate message, or you can choose your own URL to redirect to.");
define("INV_REDIRECT_NONE", "None");
define("INV_REDIRECT_DEFAULT", "Default");
define("INV_REDIRECT_URL", "The following URL");
define("INV_EXPIRY_DELETE", "[Delete User]");
define("INV_EXPIRY_BLOCK", "[Block User]");
define("INV_EXPIRY_DOWNGRADE", "Set to %s");
define("INV_ENSURE_MAMBOT_PUBLISHED", "NOTE: As this product is a user subscription, please ensure you have installed and published the account expiry plugin (mambot) - available from " . INV_BRANDING_WEBSITE);
define("INV_ALLOW_GLOBAL_DISCOUNTS", "Allow Global Discounts?");
define("INV_INSTR_ALLOW_GLOBAL_DISCOUNTS", "Indicate whether any global discounts that you have defined are allowed to be applied to orders for this product.");
define("INV_PRODUCT_DISCOUNT_TITLE", "Product-specific Discounts");
define("INV_PRODUCT_DISCOUNT_INTRO", "You can optionally specify that certain discounts are applicable to this Product. If more than one discount is applicable, use the Priority value to indicate which one to evaluate first (a discount with a priority of 0 will be applied before a discount with a priority of 1). Priorities assigned here override any priorities set on the discounts themselves. To control the properties of the discount (eg. amount, whether it is exclusive, etc.), edit the discount record via the discounts page. If you only want the discount to apply if a certain quantity of this product is purchased, you can specify this in the Minimum Quantity field. You can also optionally multiply the amount of a discount by the quantity of items ordered (fixed price product-specific discounts only). If using the quantity as a multiplier, you can also specify an offset that will be subtracted from the multiplier - for example, if you want the discount to apply to the 2nd and subsequent items, but not the first, you would set the offset to 1.");
define("INV_PRODUCT_DISCOUNT", "Discount");
define("INV_PRODUCT_DISCOUNT_PRIORITY", "Priority");
define("INV_PRODUCT_DISCOUNT_QTY", "Minimum Quantity");
define("INV_ADD_PRODUCT_DISCOUNT", "Add Product Discount");
define("INV_DELETE_DISCOUNT", "Delete Product Discount");
define("INV_PLEASE_SELECT_DISCOUNT", "Please select a Discount to add.");
define("INV_PRODUCT_DISCOUNT_DUPLICATION", "This Discount has already been added.");
define("INV_INSTR_PRODUCT_DESCRIPTION", "This is not currently used, but might be implemented at a later date for use in conjunction with a shopping cart.");
define("INV_NET_PRICE_SETUP_FEE", "Setup Fee");
define("INV_INSTR_NET_PRICE_SETUP_FEE", "If you charge a one-off seutp fee in addition to the regular price, specify it here. This fee will only be charged once on the first payment cycle, and is added to the regular price. You can specify a negative value if you want to provide a free or discounted trial for one payment cycle only (subject to this being supported by your payment gateway).");
define("INV_ERR_PRODUCT_IN_USE", "Sorry, one or more products you selected to delete are currently in use on the following order form(s): %s. Please ensure the product(s) are not in use before trying to delete them.");
define("INV_EMAIL_DOWNLOADS", "E-Mail Downloads?");
define("INV_INSTR_EMAIL_DOWNLOADS", "Whether or not to send the file(s) defined above to the client when this product is ordered (this would occur when the order record is created - so if you have 'pending until paid' set to 'yes' on the order form, they won't get the files until they've paid for them).");
define("INV_EMAIL_DOWNLOADS_MESSAGE", "E-Mail Message");
define("INV_INSTR_EMAIL_DOWNLOADS_MESSAGE", "Type in the message that you want to send along with the attached file(s) (only applicable if 'Email Downloads?' is set to 'yes').");
define("INV_NET_PRICE_SEMI_ANNUALLY", "Net Price Semi-annually (6-monthly)");
define("INV_INSTR_NET_PRICE_SEMI_ANNUALLY", "If item can be paid for semi-annually (every 6 months), enter net price per 6 months.");

/****************/
/* Version 1.1.4
/* Note to translators: Text has changed on the following constants:
INV_SUB_ACCESS_LEVEL, INV_INSTR_SUB_ACCESS_LEVEL, INV_EXPIRY_LEVEL (lines 94-96 in the English file)
/***************/	

//Version 1.2.0
define("INV_NET_PRICE_FOUR_WEEKLY", "Net Price Four-weekly");
define("INV_INSTR_NET_PRICE_FOUR_WEEKLY", "If item can be paid for four weekly, enter net price per four weeks.");

/**************/
/* Version 1.2.1 
/* Note to translators: Text has changed on the following constants:
/* INV_PRODUCT_DISCOUNT_INTRO, INV_PRODUCT_DISCOUNT_QTY (lines 103 and 106 in the English file)
/**************/
define("INV_PRODUCT_UPDATE_EXISTING_ORDERS", "One or more existing orders that are renewed manually were found for this product. Click `OK` if you want to update the prices on the existing order(s).");
define("INV_EXISTING_ORDERS_UPDATED", "%s existing order(s) updated.");
define("INV_PRODUCT_DOWNLOADABLE_TOKENS", "You can use any of the following tokens to dynamically generate the file name: ##order_no##, ##order_id##, ##client_id##. For example, if you create an individual file for each order, you can use a file name like \"/home/username/file##order_no##.txt\" - the ##order_no## token will then be replaced with the actual order number. The same principle can be applied to any of the 3 download links.");
define("INV_PRODUCT_DISCOUNT_MULTIPLY", "Multiply by Quantity?");
define("INV_PRODUCT_DISCOUNT_OFFSET", "Offset");
?>