<?php
/**
* Language file for the Snapshot Report
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

define("NBILL_SNAPSHOT_TITLE", "Hurtigrapport");
define("NBILL_SNAPSHOT_INTRO", "Denne rapporten viser alle fakturaene som var utestående på en gitt dato (nyttig ved årsavslutning).");
define("NBILL_SNAPSHOT_DATE", "Dato");
define("NBILL_SNAPSHOT_INVOICE_DATE", "Fakturadato");
define("NBILL_SNAPSHOT_INVOICE_NO", "Faktura nr..");
define("NBILL_SNAPSHOT_BILLING_NAME", "Fakturanavn");
define("NBILL_SNAPSHOT_NET_OS", "Netto utest.");
define("NBILL_SNAPSHOT_NET_OS_HELP", "Nettobeløpet utestående for denne fakturaen på valgt dato.");
define("NBILL_SNAPSHOT_TAX_OS", "Skatt utest.");
define("NBILL_SNAPSHOT_TAX_OS_HELP", "Skatt utestående for denne fakturaen på valgt dato.");
define("NBILL_SNAPSHOT_GROSS_OS", "Brutto utest.");
define("NBILL_SNAPSHOT_GROSS_OS_HELP", "Det totale beløp utestående for denne fakturaen på valgt dato (netto pluss mva).");
define("NBILL_SNAPSHOT_INVOICE_TOTAL", "Faktura totalt");
define("NBILL_SNAPSHOT_INVOICE_TOTAL_HELP", "Det totale (brutto) beløp for fakturaen (hvis fakturaen delvis ble betalt, kan dette være høyere enn brutto beløp utestående)");
define("NBILL_SNAPSHOT_PARTIAL", "Delvis");
define("NBILL_SNAPSHOT_PARTIAL_HELP", "Hvorvidt fakturaen var merket som delvis betalt på valgt dato (hvis en hake vises for noen artikkel, kan du klikke på haken for å vise de tilknyttede inntektspostene)");
define("NBILL_SNAPSHOT_LATER_PARTIAL", "Delvis senere?");
define("NBILL_SNAPSHOT_LATER_PARTIAL_HELP", "Hvorvidt fakturaen er markert som delvis betalt (hvis en hake vises for noen artikkel, kan du klikke på haken for å vise de tilknyttede inntektspostene)");
define("NBILL_SNAPSHOT_LATER_PAID", "Senere betalt?");
define("NBILL_SNAPSHOT_LATER_PAID_HELP", "Hvorvidt fakturaen ble markert senere som betalt i sin helhet (hvis en hake vises for noen artikkel, kan du klikke på haken for å vise de tilknyttede inntektspostene)");
define("NBILL_SNAPSHOT_LATER_WO", "Nyere avskrevet?");
define("NBILL_SNAPSHOT_LATER_WO_HELP", "Hvorvidt fakturaen siden har vært avskrevet (avskrevet på eller før valgt dato vil ikke vises på denne rapporten)");
define("NBILL_SNAPSHOT_MARKED_PARTIAL", "Denne fakturaen BLE delvis betalt på eller før valgt dato (Klikk på hake for å se inntektspostene)");
define("NBILL_SNAPSHOT_NOT_MARKED_PARTIAL", "Denne fakturaen ble IKKE delvis betalt på eller før valgt dato");
define("NBILL_SNAPSHOT_MARKED_LATER_PAID", "Denne fakturaen ble betalt i sin helhet etter valgt dato (Klikk på hake for å se inntektspostene)");
define("NBILL_SNAPSHOT_NOT_MARKED_LATER_PAID", "Denne fakturaen ble IKKE betalt i sin helhet etter valgt dato");
define("NBILL_SNAPSHOT_MARKED_LATER_PARTIAL", "Denne fakturaen ble delvis betalt etter valgt dato (Klikk på hake for å se inntektspostene)");
define("NBILL_SNAPSHOT_STILL_MARKED_LATER_PARTIAL", "Denne fakturaen var fremdeles bare delvis betalt etter valgt dato (Klikk på hake for å se inntektspostene)");
define("NBILL_SNAPSHOT_NOT_MARKED_LATER_PARTIAL", "Denne fakturaen ble IKKE delvis betalt etter valgt dato");
define("NBILL_SNAPSHOT_MARKED_LATER_WO", "Denne fakturaen ble avskrevet etter valgt dato");
define("NBILL_SNAPSHOT_NOT_MARKED_LATER_WO", "Denne fakturaen ble IKKE avskrevet etter valgt dato");
define("NBILL_SNAPSHOT_TOTALS", "TOTALER:");
define("NBILL_SNAPSHOT_EDIT_INVOICE", "Rediger faktura");
define("NBILL_SNAPSHOT_VIEW_INVOICE", "Se faktura");
define("NBILL_SNAPSHOT_EDIT_CLIENT", "Rediger kunde");
define("NBILL_SNAPSHOT_COUNT", "(%s Fakturaer)");