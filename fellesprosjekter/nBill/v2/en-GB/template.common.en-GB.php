<?php
/**
* Language file for the default invoice template
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

//Language constants common to all/most types of document template
define("NBILL_PRT_REFERENCE", "Reference:");
define("NBILL_PRT_DATE", "Date:");
define("NBILL_PRT_CLIENT_TAX_REF", "Client Tax Reference:");
define("NBILL_PRT_DESC", "Description");
define("NBILL_PRT_UNIT_PRICE", "Unit Price");
define("NBILL_PRT_QUANTITY", "Quantity");
define("NBILL_PRT_DISCOUNT", "Discount");
define("NBILL_PRT_NET_PRICE", "Net Price");
define("NBILL_PRT_VAT", "VAT");
define("NBILL_PRT_SHIPPING", "Shipping");
define("NBILL_PRT_SHIPPING_VAT", "%s on Shipping");
define("NBILL_PRT_TOTAL", "Total");
define("NBILL_PRT_NET_AMOUNT", "Net Amount:");