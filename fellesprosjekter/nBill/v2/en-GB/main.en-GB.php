<?php
/**
* Language file for the home page
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

define("NBILL_LEDGER_GUESSES", NBILL_BRANDING_NAME . " was unable to accurately calculate the breakdown of net/tax/gross amounts on the nominal ledger records for the following transactions. Please check each of the records listed below and enter the correct tax breakdown figures for the nominal ledger entries.");
define("NBILL_LEDGER_GUESSES_DELETE", "Don't bug me!");
define("NBILL_LEDGER_GUESSES_DELETE_SURE", "Are you sure you want to forget about these innaccurate ledger entries? This will mean your nominal ledger report and tax summary will be INACCURATE for any date ranges involving the listed transactions.");
define("NBILL_PAYMENT_NO", "Payment");
define("NBILL_RECEIPT_NO", "Receipt");
define("NBILL_IE6_NOT_SUPPORTED", "WARNING! Some features of " . NBILL_BRANDING_NAME . " Administrator will not work properly in IE6 (front end features should all work ok though). Please upgrade your browser!");