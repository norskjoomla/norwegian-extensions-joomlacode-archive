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
define("NBILL_REC_TITLE", "Reconciliation");
define("NBILL_REC_INTRO", "If you use " . NBILL_BRANDING_NAME . " for all of your bookkeeping, it is strongly recommended to reconcile your transaction records in " . NBILL_BRANDING_NAME . " with your bank statement(s) each month. You can use this feature to record the differences between the two, and to ensure that your balance is as expected. Although the default and recommended policy is to perform a reconciliation once a month, you can use any time period you like as long as there are no gaps between reconciliations.");
define("NBILL_REC_CURRENCY", "Currency");
define("NBILL_REC_NAME", "Name");
define("NBILL_REC_DATE_FROM", "From");
define("NBILL_REC_DATE_TO", "To");
define("NBILL_REC_CORRECTED_BOOK_BALANCE", "Corrected Book Balance");
define("NBILL_REC_CORRECTED_BANK_BALANCE", "Corrected Bank Balance");
define("NBILL_REC_RECONCILED", "Reconciled?");
define("NBILL_REC_RECONCILED_YES", "Reconciled");
define("NBILL_REC_RECONCILED_NO", "NOT Reconciled");
define("NBILL_REC_EDIT_RECONCILIATION", "Edit Reconciliation");
define("NBILL_REC_SHOW_ALL", "Show All");
define("NBILL_REC_SHOW_RESET", "Reset Date Range");