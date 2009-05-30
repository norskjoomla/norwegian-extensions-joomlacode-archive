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

//Extensions
define("INV_EXTENSION_INSTALL_WARNING", "ADVARSEL! Bare innstaller utvidelser fra kilder du stoler på. En utvidelse kan få tilgang til hele webområdet!");
define("INV_EXTENSION_NO_GATEWAY_FILE", "Ingen fil er markert som betalingsmåtefil");
define("INV_EXTENSION_NO_LANGUAGE_FILE", "Ingen fil er markert som språkfil");
define("INV_EXTENSION_INSTALL_NEW", "Innstaller ny utvidelse");
define("INV_EXTENSIONS_INSTALLED", "Innstallerte utvidelser");
define("INV_EXTENSION_NAME", "Utvidelses navn");
define("INV_EXTENSION_TYPE", "Type");
define("INV_EXTENSION_DATE_CREATED", "Opprettet dato");
define("INV_EXTENSION_DATE_INSTALLED", "Innstallert dato");
define("INV_EXTENSION_VERSION", "Versjon");
define("INV_EXTENSION_AUTHOR", "Skribrent");
define("INV_EXTENSION_URL", "Adresse");
define("INV_EXTENSION_UNINSTALL", "Avinnstaller");
define("INV_EXTENSION_NOT_REMOVED", "Beklager, " . INV_BRANDING_NAME . " kunne ikke slette utvidelsen '%s'. Den må fjernes manuelt.");
define("INV_EXTENSION_REMOVED", "Utvidelsen '%s' ble avinnstallert med suksess.");
define("INV_UNINSTALL_KEEP_SETTINGS", "Do you want to keep your settings, so you can upgrade the extension (if applicable)? Select `OK` to leave any database settings intact, or `Cancel` to permanently delete this extension.");

//Version 1.2.0
define("INV_EXTENSION_NO_INSTALL_FILE", "No install file (*.nbe) was found. This extension cannot be installed. Please make sure you are using the correct version of the extension (extensions written for older versions of " . INV_BRANDING_NAME . " might not work with this version)");
define("INV_EXTENSION_INVALID_INSTALL_FILE", "The install file (%s) is not a valid nBill extension installation file. This extension cannot be installed.");
define("INV_EXTENSION_COULD_NOT_CREATE_DIR", "The installation failed because the following directory could not be created: %s (if this directory already exists, try uninstalling the existing extension first).");
define("INV_EXTENSION_COULD_NOT_CREATE_FILE", "The installation failed because the following file could not be created: %s (if this file already exists, try uninstalling the existing extension first).");
define("INV_EXTENSION_INSTALLED", "Extension '%s' installed successfully!");
define("INV_EXTENSION_RETURN_TO_LIST", "to return to the extension installer");
define("INV_EXTENSION_VERSION_INCOMPATIBLE", "The version of " . INV_BRANDING_NAME . " that you are using is not compatible with the extension you are trying to install");

//Version 1.2.8
define("INV_EXTENSION_DB_ERROR", "The installation might not have completed correctly because the following database error occurred: %s");
?>
