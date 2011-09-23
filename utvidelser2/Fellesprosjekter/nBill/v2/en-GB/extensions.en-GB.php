<?php
/**
* Language file for the nBill Extensions Installer
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

//Extensions
define("NBILL_EXTENSION_INSTALL_WARNING", "WARNING! Only install extensions from trusted sources. An extension can access your entire website!");
define("NBILL_EXTENSION_NO_GATEWAY_FILE", "No file is marked as a payment gateway file");
define("NBILL_EXTENSION_NO_LANGUAGE_FILE", "No file is marked as a language file");
define("NBILL_EXTENSION_INSTALL_NEW", "Install new Extension");
define("NBILL_EXTENSIONS_INSTALLED", "Installed Extensions");
define("NBILL_EXTENSION_NAME", "Extension Name");
define("NBILL_EXTENSION_TYPE", "Type");
define("NBILL_EXTENSION_DATE_CREATED", "Date Created");
define("NBILL_EXTENSION_DATE_INSTALLED", "Date Installed");
define("NBILL_EXTENSION_VERSION", "Version");
define("NBILL_EXTENSION_AUTHOR", "Author");
define("NBILL_EXTENSION_URL", "URL");
define("NBILL_EXTENSION_UNINSTALL", "Uninstall");
define("NBILL_EXTENSION_NOT_REMOVED", "Sorry, " . NBILL_BRANDING_NAME . " was unable to delete the extension '%s'. It will have to be removed manually.");
define("NBILL_EXTENSION_REMOVED", "Extension '%s' uninstalled successfully.");
define("NBILL_UNINSTALL_KEEP_SETTINGS", "Do you want to keep your settings, so you can upgrade the extension (if applicable)? Select `OK` to leave any database settings intact, or `Cancel` to permanently delete this extension.");

//Version 1.2.0
define("NBILL_EXTENSION_NO_INSTALL_FILE", "No install file (*.nbe) was found. This extension cannot be installed. Please make sure you are using the correct version of the extension (extensions written for older versions of " . NBILL_BRANDING_NAME . " might not work with this version)");
define("NBILL_EXTENSION_INVALID_INSTALL_FILE", "The install file (%s) is not a valid nBill extension installation file. This extension cannot be installed.");
define("NBILL_EXTENSION_COULD_NOT_CREATE_DIR", "The installation failed because the following directory could not be created: %s (if this directory already exists, try uninstalling the existing extension first).");
define("NBILL_EXTENSION_COULD_NOT_CREATE_FILE", "The installation failed because the following file could not be created: %s (if this file already exists, try uninstalling the existing extension first).");
define("NBILL_EXTENSION_INSTALLED", "Extension '%s' installed successfully!");
define("NBILL_EXTENSION_RETURN_TO_LIST", "to return to the extension installer");
define("NBILL_EXTENSION_VERSION_INCOMPATIBLE", "The version of " . NBILL_BRANDING_NAME . " that you are using is not compatible with the extension you are trying to install");

//Version 1.2.8
define("NBILL_EXTENSION_DB_ERROR", "The installation might not have completed correctly because the following database error occurred: %s");