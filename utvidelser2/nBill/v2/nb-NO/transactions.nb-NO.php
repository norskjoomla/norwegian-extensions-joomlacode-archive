<?php
/**
* Language file for the Transaction Report
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

define("NBILL_TRANSACTIONS_TITLE", "Transaksjonsforklaring ");
define("NBILL_TRANSACTIONS_INTRO", "Dette er en liste over alle inntekter og utgifter som er registrert for den angitte perioden. Ingen inntekter eller utgifter blir ekskludert, men denne rapporten inkluderer ikke eventuelle ubetalte fakturaer.");
define("NBILL_TR_INCOME", "Resultat");
define("NBILL_TR_EXPENDITURE", "Utgifter");
define("NBILL_TR_ITEM_NO", "Nummer");
define("NBILL_TR_RECEIPT", "Mot");
define("NBILL_TR_PAYMENT", "Bet");
define("NBILL_TR_DATE", "Dato");
define("NBILL_TR_FROM_TO", "Fra/til");
define("NBILL_TR_FOR", "For");
define("NBILL_TR_INVOICE", "Faktura");
define("NBILL_TR_CREDIT_NOTE", "Kredittnota");
define("NBILL_TR_LEDGER", "Hovedbok");
define("NBILL_TR_NET_AMOUNT", "Netto");
define("NBILL_TR_TAX", "Avgift");
define("NBILL_TR_TOTAL", "Totalt (%s transaksjoner)");
define("NBILL_TR_BALANCE", "Balanse");
define("NBILL_TR_AWAITING_RCT_NO", "Venter på kvitteringsnummer.");
define("NBILL_TR_AWAITING_PYT_NO", "Venter på betalingsnummer.");
define("NBILL_TR_CLIENT_REFUND", "Kundens refusjon");

//Version 2.0.0
define("NBILL_TR_NET_INCOME", "Netto inn");
define("NBILL_TR_TAX_INCOME", "Skatt inn");
define("NBILL_TR_NET_EXPENDITURE", "Netto ut");
define("NBILL_TR_TAX_EXPENDITURE", "Skatt ut");