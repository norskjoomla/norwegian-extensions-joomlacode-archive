<?php
/**
* Language file for the Nominal Ledger feature
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

//Nominal Ledger
define("NBILL_LEDGER_TITLE", "Nominal Ledger");
define("NBILL_LEDGER_INTRO", "If you keep a nominal ledger (also known as a general ledger or speed types/cost centres) for your transactions, you can define the codes and descriptions here. This is optional - for reporting purposes only.");
define("NBILL_LEDGER_CODE", "Code");
define("NBILL_LEDGER_DESCRIPTION", "Description");
define("NBILL_EDIT_LEDGER_CODE", "Edit Nominal Ledger Code");
define("NBILL_NEW_LEDGER_CODE", "New Nominal Ledger Code");
define("NBILL_LEDGER_CODE_REQUIRED", "Please enter a code");
define("NBILL_LEDGER_DESC_REQUIRED", "Please enter a description");
define("NBILL_LEDGER_CODE_DETAILS", "Ledger Code Details");
define("NBILL_INSTR_LEDGER_CODE", "Typically, a numerical cost centre code.");
define("NBILL_INSTR_LEDGER_DESCRIPTION", "");