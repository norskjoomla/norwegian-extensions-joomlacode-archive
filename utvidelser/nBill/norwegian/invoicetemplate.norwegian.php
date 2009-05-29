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

//Invoicing Template
define("INV_PRT_INVOICE_TITLE", "FAKTURA");
define("INV_PRT_INVOICE_NO", "Fakturanr.:");
define("INV_PRT_REFERENCE", "Referanse:");
define("INV_PRT_DATE", "Fakturadato:");
define("INV_PRT_CLIENT_TAX_REF", "Kundes org.nr.:");
define("INV_PRT_DESC", "Beskrivelse");
define("INV_PRT_UNIT_PRICE", "Stk. pris");
define("INV_PRT_QUANTITY", "Antall");
define("INV_PRT_DISCOUNT", "Rabatt");
define("INV_PRT_NET_PRICE", "Netto");
define("INV_PRT_VAT", "MVA");
define("INV_PRT_CARRIAGE", "Frakt");
define("INV_PRT_CARRIAGE_VAT", "%s på frakt");
define("INV_PRT_TOTAL", "Totalt");
define("INV_PRT_NET_AMOUNT", "Nettobeløp:");
define("INV_PRT_AMOUNT_DUE", "Forfall:");
define("INV_PAYMENT_RECEIVED", "Betaling mottatt med takk");
define("INV_PRT_INVOICE_TITLE_CR", "KREDITNOTA");
define("INV_PRT_INVOICE_NO_CR", "Kreditnotanr.:");
define("INV_PRT_AMOUNT_DUE_CR", "Refundert beløp:");
define("INV_PAYMENT_RECEIVED_CR", "Utbetaling av denne kreditnotaen er behandlet.");
define("INV_REMITTANCE_ADVICE", "Betalingsinformasjon");
define("INV_REMITTANCE_INTRO", "Vennligst legg ved denne betalingsinformasjonen om du sender betaling i posten, slik at vi kan se hva betalingen din gjelder. Takk.");
define("INV_RECEIVED_FROM", "Mottatt fra");
define("INV_PAYMENT_DATE", "Betalingsdato");
define("INV_PAYMENT_METHOD", "Betalingsmåte");
define("INV_PAYMENT_REFERENCE", "Vår referanse");
define("INV_CHEQUE", "Sjekk");
define("INV_DIRECT_DEBIT", "Direktetrekk");
define("INV_STANDING_ORDER", "Ventende ordre");
define("INV_BANK_TRANSFER", "Bankoverføring");
define("INV_CREDIT_CARD", "Kreditt-/Debetkort");
define("INV_ONLINE_AGENCY", "Online");
define("INV_CASH", "Kontant");
define("INV_OTHER", "Annet");
define("INV_IF_NO_SCHEDULE", "Om du ikke allerede har en betalingsplan oppsatt for dette, vennligst");
define("INV_PAY_THIS_INVOICE", "klikk her for å betale denne fakturaen");
?>
