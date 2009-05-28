<?php
/**
* @version 1.1.x
* @package nBill
* @copyright (C) 2006-2007 Netshine Software Limited
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

//Carriage
define("INV_CARRIAGE_TITLE", "Carriage Rates");
define("INV_CARRIAGE_INTRO", "This is optional. If you add carriage costs onto the price of your products, you can specify the rates here. You can also specify whether carriage is taxable, and if so, apply a different rate of tax for the carriage portion of the invoice.");
define("INV_CARRIAGE_COUNTRY", "Country");
define("INV_CARRIAGE_PRICE_PER_UNIT", "Unit Price");
define("INV_EDIT_CARRIAGE_RATE", "Edit Carriage Rate");
define("INV_NEW_CARRIAGE_RATE", "New Carriage Rate");
define("INV_SERVICE_NAME_REQUIRED", "Please enter the name of this service");
define("INV_COUNTRY_REQUIRED", "Please select the country to which this service applies");
define("INV_CARRIAGE_DETAILS", "Carriage Details)");
define("INV_CARRIAGE_CODE", "Code");
define("INV_NET_PRICE_PER_UNIT", "Net Price per Unit");
define("INV_CARRIAGE_FIXED", "Fixed Price Carriage?");
define("INV_CARRIAGE_IS_TAXABLE", "Is Carriage Taxable?");
define("INV_CARRIAGE_TAX_RATE", "Tax Rate if Different");
define("INV_INSTR_CARRIAGE_SERVICE", "Enter a descriptive name for the service (eg. 'First Class', 'Recorded Delivery')");
define("INV_INSTR_CARRIAGE_CODE", "Enter your own short code for this service (optional, but if present is used to sort the delivery options alphabetically).");
define("INV_INSTR_CARRIAGE_COUNTRY", "Select the country to which this service applies.");
define("INV_INSTR_NET_PRICE_PER_UNIT", "If you charge a fixed price per invoice for carriage, enter that amount here and select 'yes' to the fixed price option below. If your carriage costs depend on the product size/weight/quantity, enter the amount in figures that represents the smallest common denominator for your products' carriage fees. You can then specify a multiplier of this value on a per-product basis which will be used to calculate the carriage fees that appear on invoices. Do not include a currency symbol.");
define("INV_INSTR_CARRIAGE_FIXED", "If you charge a fixed price per invoice for carriage, select 'yes', and the value you entered in 'Net Price per Unit' will be applied as a fixed fee to the whole invoice (instead of as a unit price). If your carriage costs depend on the product size/weight/quantity, select 'no'.");
define("INV_INSTR_CARRIAGE_IS_TAXABLE", "Indicate whether value-added tax is to be charged for carriage amounts.");
define("INV_INSTR_CARRIAGE_TAX_RATE", "If carriage is taxable AND the tax for carriage is charged at a different rate to normal, enter the carriage tax rate here (as a percentage, but without the % sign)");
define("INV_CARRIAGE_PRICE_INTRO", "Enter the price of the carriage for each currency that you want to sell in.");
define("INV_CARRIAGE_ID", "ID");

//Version 1.2.0
define("INV_CARRIAGE_TRACKING_URL", "Carriage Tracking URL");
define("INV_INSTR_CARRIAGE_TRACKING_URL", "If the courier allows online tracking of parcels, enter the URL here, and use ## (double hash) as a placeholder for the tracking ID. When you ship the package, you can enter the actual tracking ID on the order record. This will then be combined with the URL recorded here to generate a link in the website front-end that will allow the user to track their goods (subject to this being allowed within the display options).");
?>
