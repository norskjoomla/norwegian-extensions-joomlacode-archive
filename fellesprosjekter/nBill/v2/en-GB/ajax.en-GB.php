<?php
/**
* Language file for the all features that rely on AJAX
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

//General
define("NBILL_AJAX_NOT_SUPPORTED", "Sorry, this feature will not work as your browser does not support AJAX");
define("NBILL_AJAX_PLEASE_WAIT", "Please Wait...");

//Assign contact to client or supplier
define("NBILL_AJAX_NO_RESULTS", "Sorry, no results were found");
define("NBILL_AJAX_TOO_MANY", "%s matching records were found. Only the first %s are shown here.");
define("NBILL_AJAX_RESULT_COUNT", "%s matching records were found.");
define("NBILL_AJAX_NAME", "Name");
define("NBILL_AJAX_EMAIL", "E-Mail Address");
define("NBILL_AJAX_LOCATION", "Location");
define("NBILL_AJAX_SELECT_CONTACTS", "Check the box(es) next to the Contact(s) you want to assign, and click on either the 'Apply' or 'Save' toolbar button.");
define("NBILL_AJAX_NAME_UNKNOWN", "[Name Unknown]");
define("NBILL_AJAX_SELECT", "Select");