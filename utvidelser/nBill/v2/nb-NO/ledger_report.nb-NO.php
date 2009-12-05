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

define("NBILL_LEDGER_REPORT_TITLE", "Hovedboksrapport");
define("NBILL_LEDGER_REPORT_INTRO", "Denne rapporten viser en oversikt over inntekter og utgifter mot hver hovedbokskode. Du kan utvide hver hovedbokskode for å se de enkelte elementer som utgjør totalen. 'Saldo-kolonnen' refererer bare til netto resultat for gitt datoperiode, og har intet forhold til saldoen på bankkontoen din!");
define("NBILL_LEDGER_REPORT_INCOME", "Resultat");
define("NBILL_LEDGER_REPORT_EXPENDITURE", "Utgifter");
define("NBILL_LEDGER_REPORT_NOMINAL_CODE", "Hovedbokskode");
define("NBILL_LEDGER_REPORT_AMOUNT", "Antall");
define("NBILL_LEDGER_REPORT_DATE", "Dato");
define("NBILL_LEDGER_REPORT_RECEIPT_NO", "Kvitteringsnummer");
define("NBILL_LEDGER_REPORT_PAYMENT_NO", "Betalingsnummer");
define("NBILL_LEDGER_REPORT_FROM", "Fra");
define("NBILL_LEDGER_REPORT_FOR", "For");
define("NBILL_LEDGER_REPORT_AWAITING_RCT_NO", "Venter på kvitteringsnummer");
define("NBILL_LEDGER_REPORT_AWAITING_PYT_NO", "Venter på betalingsnummer.");
define("NBILL_LEDGER_REPORT_INVOICE", "Faktura");
define("NBILL_LEDGER_REPORT_TOTAL", "Totalt for %s");
define("NBILL_LEDGER_REPORT_EXPAND_ALL", "Utvid alle");
define("NBILL_LEDGER_REPORT_TOTAL_INCOME", "Totalt resultat");
define("NBILL_LEDGER_REPORT_PAID_TO", "Betal til");
define("NBILL_LEDGER_REPORT_CREDIT_NOTE", "Kredittnota");
define("NBILL_LEDGER_REPORT_CLIENT_REFUND", "Tilbakebetaling");
define("NBILL_LEDGER_REPORT_TOTAL_EXPENDITURE", "Utgifter totalt");
define("NBILL_LEDGER_REPORT_PF_EXPANDED", "Utskriftsvennlig (Utvidet)");
define("NBILL_LEDGER_REPORT_PF_COLLAPSED", "Utskriftsvennlig (Innskrenket)");
define("NBILL_LEDGER_REPORT_PERCENTAGE", "Prosentvis");
?>