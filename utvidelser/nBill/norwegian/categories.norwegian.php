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

//Categories
define("INV_CATEGORIES_TITLE", "Categories");
define("INV_CATEGORY_NAME", "Name");
define("INV_CATEGORY_DESCRIPTION", "Description");
define("INV_CATEGORY_ORDERING", "Ordering");
define("INV_EDIT_CATEGORY", "Edit Category");
define("INV_NEW_CATEGORY", "New Category");
define("INV_ERR_CANNOT_DELETE_CATEGORY", "One or more Categories you tried to delete is not empty. You cannot delete a Category which contains Products or other Categories. Please either delete or move the Products and/or child Categories to a different Category before attempting to delete.");
define("INV_ERR_CANNOT_DELETE_ROOT_CAT", "You cannot delete the root category - there must always be at least one category present.");
define("INV_CATEGORY_NAME_REQUIRED", "Please enter a name for the Category");
define("INV_CATEGORY_DETAILS", "Category Details");
define("INV_CATEGORY_PARENT", "Parent Category");
define("INV_INSTR_CATEGORY_NAME", "");
define("INV_INSTR_CATEGORY_DESCRIPTION", "");
define("INV_INSTR_CATEGORY_PARENT", "");
?>
