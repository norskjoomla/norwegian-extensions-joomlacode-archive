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

//Invoicing Template
define("INV_PRT_INVOICE_TITLE", "INVOICE");
define("INV_PRT_INVOICE_NO", "Invoice No:");
define("INV_PRT_REFERENCE", "Reference:");
define("INV_PRT_DATE", "Date:");
define("INV_PRT_CLIENT_TAX_REF", "Client Tax Reference:");
define("INV_PRT_DESC", "Description");
define("INV_PRT_UNIT_PRICE", "Unit Price");
define("INV_PRT_QUANTITY", "Quantity");
define("INV_PRT_DISCOUNT", "Discount");
define("INV_PRT_NET_PRICE", "Net Price");
define("INV_PRT_VAT", "VAT");
define("INV_PRT_CARRIAGE", "Carriage");
define("INV_PRT_CARRIAGE_VAT", "%s on Carriage");
define("INV_PRT_TOTAL", "Total");
define("INV_PRT_NET_AMOUNT", "Net Amount:");
define("INV_PRT_AMOUNT_DUE", "Amount Due:");
define("INV_PAYMENT_RECEIVED", "Payment Received with Thanks");
define("INV_PRT_INVOICE_TITLE_CR", "CREDIT NOTE");
define("INV_PRT_INVOICE_NO_CR", "Credit Note No:");
define("INV_PRT_AMOUNT_DUE_CR", "Amount Refunded:");
define("INV_PAYMENT_RECEIVED_CR", "Payment of this credit note has been processed.");
define("INV_REMITTANCE_ADVICE", "Remittance Advice");
define("INV_REMITTANCE_INTRO", "If sending payment in the mail, please enclose this remittance advice to enable us to identify what your payment is for. Thank you.");
define("INV_RECEIVED_FROM", "Received From");
define("INV_PAYMENT_DATE", "Payment Date");
define("INV_PAYMENT_METHOD", "Method");
define("INV_PAYMENT_REFERENCE", "Our Reference");
define("INV_CHEQUE", "Cheque");
define("INV_DIRECT_DEBIT", "Direct Debit");
define("INV_STANDING_ORDER", "Standing Order");
define("INV_BANK_TRANSFER", "Bank Transfer");
define("INV_CREDIT_CARD", "Credit/Debit Card");
define("INV_ONLINE_AGENCY", "Online");
define("INV_CASH", "Cash");
define("INV_OTHER", "Other");
define("INV_IF_NO_SCHEDULE", "If you do not already have a payment schedule set up for this, please");
define("INV_PAY_THIS_INVOICE", "click here to pay this invoice");
?>
