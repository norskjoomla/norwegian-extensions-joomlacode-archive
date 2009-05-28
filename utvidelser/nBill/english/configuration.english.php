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

//Configuration
define("INV_CONFIG_TITLE", "Configuration");
define("INV_CFG_ERROR_EMAIL", "Error e-mail");
define("INV_CFG_DATE_FORMAT", "Date Format");
define("INV_CFG_LIST_USERS", "List Users on Client Detail Page");
define("INV_CFG_INSTR_ERROR_EMAIL", "If any program errors occur, a notification will be sent to this address. NOTE: The e-mail containing the error report may contain potentially sensitive configuration information about your website/server. If you leave this blank, no notification will be sent anywhere. All errors are logged to your database regardless (but error records are deleted from the database after 2 weeks).");
define("INV_CFG_INSTR_DATE_FORMAT", "Specify the date format to use on invoices (at present, only numeric date formats are supported. d=day, m=month, Y=year eg. UK: \"d/m/Y\"   US: \"m/d/Y\"   International: \"Y/m/d\").");
define("INV_CONFIG_UPDATED", "The configuration details have been updated.");
define("INV_CFG_INSTR_LIST_USERS", "Whether or not to display a list of users for you to select from on the Client Details page (to allow you to tie up your clients with user records) - if you have tens of thousands of users, set this to no to avoid a long delay while the page loads (if set to no, you can still specify a user record by typing in the user id directly).");
define("INV_CFG_DATABASE_FUNCTIONS", "Database Functions");
define("INV_CFG_INSTR_DATABASE_FUNCTIONS", "Clear down or delete " . INV_BRANDING_NAME . " database tables. Clearing down the tables will delete all of your data, and allow you to start with a clean slate (you will need to re-enter your license key). Delete tables before uninstalling the component to completely remove the component from your system. DO NOT delete the tables if you want to upgrade to the latest version of " . INV_BRANDING_NAME . " and keep your data! NOTE: DELETING THE TABLES WILL MAKE " . strtoupper(INV_BRANDING_NAME) . " INOPERABLE. After deleting, you must uninstall the component as it will no longer work.");
define("INV_CFG_CLEAR_TABLES", "Clear Down Tables");
define("INV_CFG_DELETE_TABLES", "Delete Tables");
define("INV_CFG_CONFIRM_CLEAR", "Are you sure you want to permanently delete all of your data? (if you go ahead, you will need to re-enter your license key)");
define("INV_CFG_CONFIRM_DELETE", "WARNING! This will stop " . INV_BRANDING_NAME . " from working! Are you sure you want to permanently DELETE all of the " . INV_BRANDING_NAME . " tables?");
define("INV_CFG_TABLES_CLEARED", "Tables Cleared. All of your data has been deleted. You will have to re-enter your license key to continue using " . INV_BRANDING_NAME . ".");
define("INV_CFG_TABLES_DELETED", "All " . INV_BRANDING_NAME . " tables have been deleted. To complete uninstallation, please refer to the %s");
define("INV_CFG_UNINSTALLER", "Component Installer");
define("INV_CFG_CRON_TOKEN", "CRON authorisation token");
define("INV_CFG_INSTR_CRON_TOKEN", "Enter any word here (no punctuation please!) and set the same word in your CRON script to give the script authorisation to run (eg. for automatically generating invoices on a daily basis). This is to prevent unauthorised scripts from accessing " . INV_BRANDING_NAME . ". See " . INV_BRANDING_WEBSITE . " for more information.");
define("INV_CFG_LICENSE_KEY", "License Key");
define("INV_CFG_INSTR_LICENSE_KEY", "If you wish to update your license key before it expires, you can enter a new one here. WARNING! If you enter an incorrect value here, it could prevent you from using " . INV_BRANDING_NAME . "! Only enter a valid license key, and copy it EXACTLY. By entering a license key, you are confirming that you understand and accept the %s");
define("INV_CFG_EULA", "End User License Agreement");
define("INV_CFG_VERSION_AUTO_CHECK", "Check for new versions?");
define("INV_CFG_AUTO_UPDATE", "Automatically upgrade?");
define("INV_CFG_INSTR_VERSION_AUTO_CHECK", "Whether or not to automatically check for a new version of the component whenever you load the admin home page. No personal information is sent anywhere.");
define("INV_CFG_INSTR_AUTO_UPDATE", "Whether or not to automatically upgrade your software if possible whenever a new version is released. Only applicable if 'Check for new versions' is set to 'yes'. If this option is set to 'no', you will just be prompted on the home page that a new version is available, but the new version will not be downloaded or installed.");
define("INV_CFG_CHECK_VERSION", "Check for Updates");
define("INV_CFG_INSTR_CHECK_VERSION", "Click the button to check now whether a newer version of the component is available.");
define("INV_CFG_BTN_CHECK_VERSION", "Check Now");
define("INV_CFG_UPDATE_NOW", "Upgrade Component");
define("INV_CFG_INSTR_UPDATE_NOW", "Click the button to upgrade to the latest version now (if applicable).");
define("INV_CFG_BTN_UPDATE_NOW", "Upgrade Now");

/* Version 1.1.4 */
define("INV_CFG_LIST_START_DATE", "Default Start Date for Lists");
define("INV_CFG_INSTR_LIST_START_DATE", "Indicate how you want the system to select the start date for any lists that are governed by a date range (eg. orders, invoices) when no date has been specifically selected. WARNING! If you select to show a large number of records (eg. 5 years, or all), this could slow down the display of the lists.");
define("INV_CFG_START_DATE_CURRENT_ONLY", "Show current month only");
define("INV_CFG_START_DATE_CURRENT_LAST", "Show current and previous month");
define("INV_CFG_START_DATE_QUARTER", "Show up to 3 months");
define("INV_CFG_START_DATE_SEMI", "Show up to 6 months");
define("INV_CFG_START_DATE_YEAR", "Show up to a year");
define("INV_CFG_START_DATE_FIVE", "Show up to 5 years");
define("INV_CFG_START_DATE_ALL", "Show ALL items");

//Version 1.2.1
define("INV_CFG_SWITCH_TO_SSL", "Switch to SSL on login?");
define("INV_CFG_INSTR_SWITCH_TO_SSL", "Whether or not to switch to https after a user logs in using any login box within " . INV_BRANDING_NAME . " (will only affect login boxes that are output by " . INV_BRANDING_NAME . "). WARNING! You must have an SSL certificate installed for this to work, and it may require hacks to your CMS (See article on <a target=\"blank\" href=\"http://www.netshinesoftware.com/security/using-an-ssl-certificate-with-your-joomla-website.html\">Netshine Software website</a>).");

//Version 1.2.3 - Note to translators:
//Line 29 of original English language file amended (INV_CFG_INSTR_DATE_FORMAT) - date formats currently restricted to numeric
?>