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

//Orders
define("INV_ORDERS_TITLE", "Orders");
define("INV_ORDERS_INTRO", "This is a list of the products or services that are associated with your clients. <strong>Note:</strong> If you just want to create a one-off invoice, you can do so from the <a href=\"index2.php?option=com_netinvoice&action=invoices\">invoice summary screen</a>. However, if you want to set up a recurring invoice (eg. once a month), you must create an order for it here. You can generate invoices for selected orders using the 'Generate' toolbar button. To generate invoices for ALL outstanding orders, use the button available on the <a href=\"index2.php?option=com_netinvoice&action=invoices\">invoice summary screen</a>.");
define("INV_ORDER_START_DATE", "Date");
define("INV_ORDER_RELATING_TO", "Relating To");
define("INV_ORDER_NO", "Order Number");
define("INV_ORDER_PRODUCT_NAME", "Item Ordered");
define("INV_CANCELLED", "Cancelled");
define("INV_ORDER_NET_PRICE_REQUIRED", "Please enter the net price.");
define("INV_ORDER_START_DATE_REQUIRED", "Please specify the date this order was started.");
define("INV_PAY_FREQUENCY_REQUIRED", "Please specify the payment frequency.");
define("INV_NEXT_DUE_DATE_REQUIRED", "Please specify the next date that payment is due.");
define("INV_EDIT_ORDER", "Edit Order");
define("INV_NEW_ORDER", "New Order");
define("INV_SELECT_PRODUCT", "Select Product");
define("INV_ORDER_STATUS", "Order Status");
define("INV_ORDER_CARRIAGE", "Carriage Service");
define("INV_ORDER_PAYMENT_FREQUENCY", "Payment Frequency");
define("INV_ORDER_CURRENCY", "Currency");
define("INV_ORDER_NET_PRICE", "Net Price");
define("INV_ORDER_TAX_AMOUNT", "Total Tax");
define("INV_ORDER_QUANTITY", "Quantity");
define("INV_ORDER_TOTAL_CARRIAGE", "Total Carriage");
define("INV_ORDER_CARRIAGE_TAX", "Tax on Carriage");
define("INV_START_DATE", "Start Date");
define("INV_END_DATE", "End Date (if applicable)");
define("INV_LAST_DUE_DATE", "Last Due Date");
define("INV_NEXT_DUE_DATE", "Next Due Date");
define("INV_UNIQUE_INVOICE", "Unique Invoice?");
define("INV_AUTO_EMAIL_INVOICE", "Auto E-Mail Invoice?");
define("INV_ORDER_CANCELLED", "Order Cancelled?");
define("INV_CANCELLATION_REASON", "Cancellation Reason");
define("INV_IS_ONLINE", "Online Order?");
define("INV_AUTO_RENEW", "Auto-Renew?");
define("INV_INSTR_ORDER_NO", "<strong>Note:</strong> Leave blank if adding a new order - the component will automatically assign the next available order number.");
define("INV_INSTR_SELECT_PRODUCT", "Select a Category/Product from the lists (you can override the text and price displayed on the invoice if you wish by using the 'Invoice Details' section below).");
define("INV_INSTR_ORDER_STATUS", "Indicate the status of the order.");
define("INV_INSTR_ORDER_CARRIAGE", "Select from the list (you can optionally override the description and amount for carriage in the 'Invoice Details' section below).");
define("INV_INSTR_ORDER_PAYMENT_FREQUENCY", "Indicate the selected payment frequency for this order.");
define("INV_INSTR_ORDER_CURRENCY", "The only currencies that will be listed here are those in which a price has been defined for the selected product.");
define("INV_INSTR_ORDER_QUANTITY", "Enter number of products ordered. Net price and calculated tax will be multiplied by this value. Calculated carriage will be multiplied by this value unless carriage price is fixed per invoice. (You can override tax and carriage amounts below if you wish.)");
define("INV_INSTR_RELATING_TO", "For your own reference (eg. if this order is for website hosting, you could enter the domain name that the hosting account will be used for).");
define("INV_INSTR_START_DATE", "Enter the date this order was made (Note: The date format used here may be different to the date format you specified on the configuration screen. The date format specified in configuration will be used on all reports and invoices though).");
define("INV_INSTR_END_DATE", "<strong>Note:</strong> Only enter a date here if this order relates to a recurring invoice AND the service to which it relates has been cancelled. Invoices will NOT be generated for any orders after the end date.");
define("INV_INSTR_LAST_DUE_DATE", "The date the last payment for this item was due (if applicable)");
define("INV_INSTR_NEXT_DUE_DATE", "The date payment for this item is due (if this is a recurring payment, this will be the date the next payment becomes due - otherwise, just the due date for payment of the order).");
define("INV_INSTR_UNIQUE_INVOICE", "Whether this order's invoice(s) should be kept separate from any other orders for this client.");
define("INV_INSTR_AUTO_EMAIL_INVOICE", "Whether or not to automatically e-mail the client when the invoice for this order is generated.");
define("INV_INSTR_ORDER_CANCELLED", "If this order is cancelled, you can indicate it here, and optionally enter a reason below. No invoices will be generated for cancelled orders. Don't forget to enter the end date above.");
define("INV_INSTR_CANCELLATION_REASON", "Reason for cancellation of this order (for your own information only).");
define("INV_INSTR_IS_ONLINE", "Whether this is an online order (may affect whether tax is applied or not, depending on how you set up your tax rates).");
define("INV_INSTR_AUTO_RENEW", "If you select 'yes', the next due date will be updated every time an invoice is produced. If you select 'no', the next due date will not be updated, and therefore no further invoices will be generated automatically (selecting 'no' effectively makes this a one-off payment regardless of the payment frequency, and is intended for use in circumstances where the client needs to take some action in order to renew).");
define("INV_ORDER_INVOICE_INTRO", "The following values will appear on the invoice(s) generated for this order. You can override the values here by manually typing over them if you need to. However, please be aware that if you make any selections above (eg. change the product selected), your manually overridden values may be lost as these figures will be recalculated. Also, if another order appears on the same invoice, and has a carriage price which is set to a fixed price per invoice, any carriage value shown here will not be included on the invoice (unless this happens to be the order with the fixed carriage price on it). If you want to ensure that the carriage value on this order is charged regardless of any other orders this client may have made, select 'yes' for the 'Unique Invoice' setting above.");
define("INV_ORDER_TOTAL", "Order Total");
define("INV_GENERATE", "Generate");
define("INV_PRODUCT", "Product");
define("INV_ONE_OFF", "One-off");
define("INV_WEEKLY", "Weekly");
define("INV_MONTHLY", "Monthly");
define("INV_QUARTERLY", "Quarterly");
define("INV_ANNUALLY", "Annually");
define("INV_BIANNUALLY", "Biannually");
define("INV_FIVE_YEARLY", "Five Yearly");
define("INV_TEN_YEARLY", "Ten Yearly");
define("INV_STATUS_PENDING", "Under Review");
define("INV_STATUS_PROCESSING", "Processing");
define("INV_STATUS_DISPATCHED", "Dispatched");
define("INV_STATUS_COMPLETED", "Completed");
define("INV_STATUS_CANCELLED", "Cancelled");
define("INV_EXPIRY_DATE", "Expiry Date (if applicable)");
define("INV_CANCELLATION_DATE", "Cancellation Date (if applicable)");
define("INV_INSTR_EXPIRY_DATE", "Enter the date this order will expire (no further invoices will be generated for the order after the expiry date, however if an invoice is due ON the expiry date, it WILL be generated).");
define("INV_INSTR_CANCELLATION_DATE", "<strong>Note:</strong> Only enter a date here if this order relates to a recurring invoice AND the service to which it relates has been cancelled. Invoices will NOT be generated for any orders that have a cancellation date.");
define("INV_SHOW_INVOICES_FOR_ORDER", "Show all invoices for this order");
define("INV_CANNOT_ORDER_SUB_WITHOUT_USER", "ERROR! You cannot order a user subscription for this client because the client does not have an associated user id. Assign a user to the client first, then create the subscription order.");
define("INV_ORDER_VOUCHER_CODE", "Voucher Code");
define("INV_INSTR_ORDER_VOUCHER_CODE", "If you enter a voucher code here which relates to a discount that you have defined, the discount amount will be applied for every invoice that is generated for this order. If the value you enter here does not match a discount record, it will just be ignored.");
define("INV_ORDER_VOUCHER_DISCOUNT_NOT_SHOWN", "NOTE: Any discounts (from either voucher codes or client credit amounts) will not be shown here, but will be applied at the time the invoice is generated.");
define("INV_ORDER_FORM_FIELD_VALUES", "Order Form Field Values");
define("INV_INSTR_ORDER_FORM_FIELD_VALUES", "Values entered by the user on the order form at the time the order was placed (this will usually be populated automatically when an order is created based on a submitted order form, but you can type in your own value if you wish).");
define("INV_CLIENT_REQUIRED", "Please select a Client record.");
define("INV_ORDER_PRODUCT_NAME_REQUIRED", "Please select a product.");
define("INV_ORDER_SHOW_PAYLINK", "Show Payment Link?");
define("INV_INSTR_ORDER_SHOW_PAYLINK", "Whether or not to show a 'Pay This Invoice' link next to invoices for this order. If you select 'Show' here, and there are other orders on the same invoice, they must all allow the payment link to be shown for this to take effect. This setting can be overridden at the invoice level. The value of the global setting depends on the display options (you can set a payment frequency threshold - see the display options screen for more information). The payment link will only be shown if the invoice is unpaid, a default gateway is specified on the vendor record, and the gross total on the invoice is greater than zero.");
define("INV_ORDER_PAYLINK_USE_GLOBAL", "Use Global");
define("INV_ORDER_PAYLINK_SHOW", "Show");
define("INV_ORDER_PAYLINK_HIDE", "Hide");
define("INV_ORDER_DISCOUNT_TITLE", "Discounts used on this order");
define("INV_ORDER_DISCOUNT_INTRO", "You can optionally specify that certain discounts are applicable to this Order. If more than one discount is applicable, use the Priority value to indicate which one to evaluate first (a discount with a priority of 0 will be applied before a discount with a priority of 1). Priorities assigned here override any priorities set on the discounts themselves. To control the properties of the discount (eg. amount, whether it is exclusive, etc.), edit the discount record via the discounts page. NOTE: Just because a discount is present here does not mean it will be applied to all invoices for this order (eg. if the discount definition stipulates that it does not apply to recurring payments or has a date restriction).");
define("INV_ORDER_DISCOUNT", "Discount");
define("INV_ORDER_DISCOUNT_ORDERING", "Priority");
define("INV_ADD_ORDER_DISCOUNT", "Add Discount");
define("INV_DELETE_DISCOUNT", "Delete Discount");
define("INV_PLEASE_SELECT_DISCOUNT", "Please select a Discount to add.");
define("INV_ORDER_DISCOUNT_DUPLICATION", "This Discount has already been added.");
define("INV_ORDER_PAYLINK", "Order Payment Schedule");
define("INV_ORDER_PAYLINK_PROMPT", "If you need to set up a new payment schedule for this order (eg. to renew a subscription [where 'auto-renew' is set to 'no' on the order] or if the client's credit card expired and their original payment schedule was cancelled by the PSP), you can send the following link to the client: ");
define("INV_ORDER_PAYLINK_WARNING", "WARNING! The client record MUST be associated with a user record for this to work, as they will be prompted to login before paying.");
define("INV_SEMI_ANNUALLY", "Semi-annually");

/* Version 1.1.4 */
define("INV_NO_DATE_ENTERED", "A valid date was not entered. No action taken.");

/* Version 1.1.4 SP1 */
define("INV_ORDER_WARNING_QTY_ZERO", "WARNING! The quantity is currently set to zero. This means the order value will also be zero. Are you sure you want to continue?");

// Version 1.2.0
define("INV_FOUR_WEEKLY", "Four-weekly");

//Version 1.2.0
define("INV_ORDER_ORDER_VALUE", "Net Value");
define("INV_ORDER_ORDER_VALUE_HELP", "This is the total value of the order BEFORE tax, discounts, and carriage fees are applied.");
define("INV_ORDER_TRACKING_ID", "Parcel Tracking ID");
define("INV_INSTR_ORDER_TRACKING_ID", "If you have a parcel tracking URL set up on the appropriate carriage record, you can assign a tracking ID here that will be combined with that URL to create a link in the website front-end to allow a user to track their package online (subject to this being allowed by the rules specified on the display options page).");

//Version 1.2.1
define("INV_ORDER_SHOW_ALL", "Show All");
define("INV_ORDER_SHOW_RESET", "Reset Date Range");

//Version 1.2.6
define("INV_ORDERS_RECORD_LIMIT_WARNING", "WARNING! As there are %s or more clients in your database, only the first %s records have been loaded into the above list. If the client you require is not here, you can either click on 'Show All' (below), or select the 'create new order' icon on the client list (the appropriate record will then be selected here automatically).");
?>