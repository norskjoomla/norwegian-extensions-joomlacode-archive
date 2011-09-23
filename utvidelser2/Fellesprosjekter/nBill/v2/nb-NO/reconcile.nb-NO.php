<?php
/**
* Language file for the Reconciliation Feature.
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

//Reconcile
define("NBILL_REC_TITLE", "Avstemming");
define("NBILL_REC_INTRO", "Om du bruker " . NBILL_BRANDING_NAME . " for all din bokføring, er det anbefalt at du avstemmer dine transaksjoner i " . NBILL_BRANDING_NAME . " med din(e) bankkonto(er) hver måned. Du kan bruke denne funksjonen til å anmerke differansene, og for å forsikre at balansen er som forventet. Selv om det er anbefalt å gjøre avstemming hver måned kan du bruke hvilken som helst tidsperiode du måtte ønske - så lenge det ikke er noen huller i avstemmingene.");
define("NBILL_REC_CURRENCY", "Valuta");
define("NBILL_REC_NAME", "Navn");
define("NBILL_REC_DATE_FROM", "Fra");
define("NBILL_REC_DATE_TO", "Til");
define("NBILL_REC_CORRECTED_BOOK_BALANCE", "Korrigert regnskapsbalanse");
define("NBILL_REC_CORRECTED_BANK_BALANCE", "Korrigert bankbalanse");
define("NBILL_REC_RECONCILED", "Avstemt?");
define("NBILL_REC_RECONCILED_YES", "Avstaemt");
define("NBILL_REC_RECONCILED_NO", "IKKE avstemt");
define("NBILL_REC_EDIT_RECONCILIATION", "Rediger avstemming");
define("NBILL_REC_SHOW_ALL", "Vis alle");
define("NBILL_REC_SHOW_RESET", "Tilbakestill datoperiode");
