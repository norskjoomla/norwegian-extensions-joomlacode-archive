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

//Backup/Restore
define("INV_TX_SEARCH_TITLE", "Transaction Search");
define("INV_TX_SEARCH_ID", "Transaction ID");
define("INV_TX_SEARCH_SEARCH", "Search");
define("INV_TX_SEARCH_INTRO", "You can use this feature to attempt to find records (orders/invoices/income/clients) that relate to a particular transaction reference number. This is useful where you have a transaction on a statement with your payment service provider, and you are trying to tie it up with your own records in " . INV_BRANDING_NAME . ". Enter a reference number in the box below and click on '" . INV_TX_SEARCH_SEARCH . "' to attempt to locate any related records.");
