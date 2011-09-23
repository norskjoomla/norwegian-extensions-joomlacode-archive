<?php
/**
* Language file for Product Categories
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

//Categories
define("NBILL_CATEGORIES_TITLE", "Categories");
define("NBILL_CATEGORY_NAME", "Name");
define("NBILL_CATEGORY_DESCRIPTION", "Description");
define("NBILL_CATEGORY_ORDERING", "Ordering");
define("NBILL_EDIT_CATEGORY", "Edit Category");
define("NBILL_NEW_CATEGORY", "New Category");
define("NBILL_ERR_CANNOT_DELETE_CATEGORY", "One or more Categories you tried to delete is not empty. You cannot delete a Category which contains Products or other Categories. Please either delete or move the Products and/or child Categories to a different Category before attempting to delete.");
define("NBILL_ERR_CANNOT_DELETE_ROOT_CAT", "You cannot delete the root category - there must always be at least one category present.");
define("NBILL_CATEGORY_NAME_REQUIRED", "Please enter a name for the Category");
define("NBILL_CATEGORY_DETAILS", "Category Details");
define("NBILL_CATEGORY_PARENT", "Parent Category");
define("NBILL_INSTR_CATEGORY_NAME", "");
define("NBILL_INSTR_CATEGORY_DESCRIPTION", "");
define("NBILL_INSTR_CATEGORY_PARENT", "");