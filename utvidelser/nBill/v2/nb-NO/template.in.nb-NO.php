<?php
/**
* Language file for nBill
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

//Invoicing Template
define("NBILL_PRT_INVOICE_TITLE", "FAKTURA");
define("NBILL_PRT_INVOICE_NO", "Fakturanr.:");
define("NBILL_PRT_REFERENCE", "Referanse:");
define("NBILL_PRT_DATE", "Fakturadato:");
define("NBILL_PRT_CLIENT_TAX_REF", "Kundens MVA.nr.:");
define("NBILL_PRT_DESC", "Beskrivelse");
define("NBILL_PRT_UNIT_PRICE", "Stykkpris");
define("NBILL_PRT_QUANTITY", "Antall");
define("NBILL_PRT_DISCOUNT", "Rabatt");
define("NBILL_PRT_NET_PRICE", "Netto");
define("NBILL_PRT_VAT", "MVA");
define("NBILL_PRT_CARRIAGE", "Frakt");
define("NBILL_PRT_CARRIAGE_VAT", "%s på frakt");
define("NBILL_PRT_TOTAL", "Totalt");
define("NBILL_PRT_NET_AMOUNT", "Nettobeløp:");
define("NBILL_PRT_AMOUNT_DUE", "Totalsum:");
define("NBILL_PAYMENT_RECEIVED", "Vi takker for mottatt betaling");
define("NBILL_PRT_INVOICE_TITLE_CR", "KREDITNOTA");
define("NBILL_PRT_INVOICE_NO_CR", "Kreditnotanr.:");
define("NBILL_PRT_AMOUNT_DUE_CR", "Refundert beløp:");
define("NBILL_PAYMENT_RECEIVED_CR", "Utbetaling av denne kreditnotaen er behandlet.");
define("NBILL_REMITTANCE_ADVICE", "Betalingsinformasjon");
define("NBILL_REMITTANCE_INTRO", "Vennligst legg ved denne betalingsinformasjonen om du sender betaling i posten, slik at vi kan se hva betalingen din gjelder. På forhånd takk!");
define("NBILL_RECEIVED_FROM", "Mottatt fra");
define("NBILL_PAYMENT_DATE", "Betalingsdato");
define("NBILL_PAYMENT_METHOD", "Betalingsmåte");
define("NBILL_PAYMENT_REFERENCE", "Vår referanse");
define("NBILL_CHEQUE", "Sjekk");
define("NBILL_DIRECT_DEBIT", "Direktetrekk");
define("NBILL_STANDING_ORDER", "Ventende ordre");
define("NBILL_BANK_TRANSFER", "Bankoverføring");
define("NBILL_CREDIT_CARD", "Kreditt-/Debetkort");
define("NBILL_ONLINE_AGENCY", "Online");
define("NBILL_CASH", "Kontant");
define("NBILL_OTHER", "Annet");
define("NBILL_IF_NO_SCHEDULE", "Om du ønsker å betale denne på en annen måte kan du");
define("NBILL_PAY_THIS_INVOICE", "klikke her for å betale på nett");
?>