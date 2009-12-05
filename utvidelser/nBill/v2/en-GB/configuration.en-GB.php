<?php
/**
* Language file for the Global Configuration page
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

//Configuration
define("NBILL_CONFIG_TITLE", "Configuration");
define("NBILL_CFG_ERROR_EMAIL", "Error e-mail");
define("NBILL_CFG_DATE_FORMAT", "Date Format");
define("NBILL_CFG_LIST_USERS", "List Users on Client Detail Page");
define("NBILL_CFG_INSTR_ERROR_EMAIL", "If any program errors occur, a notification will be sent to this address. NOTE: The e-mail containing the error report may contain potentially sensitive configuration information about your website/server. If you leave this blank, no notification will be sent anywhere. All errors are logged to your database regardless (but error records are deleted from the database after 2 weeks).");
define("NBILL_CFG_INSTR_DATE_FORMAT", "Specify the date format to use on invoices (at present, only numeric date formats are supported. d=day, m=month, Y=year eg. UK: \"d/m/Y\"   US: \"m/d/Y\"   International: \"Y/m/d\").");
define("NBILL_CONFIG_UPDATED", "The configuration details have been updated.");
define("NBILL_CFG_INSTR_LIST_USERS", "Whether or not to display a list of users for you to select from on the Client Details page (to allow you to tie up your clients with user records) - if you have tens of thousands of users, set this to no to avoid a long delay while the page loads (if set to no, you can still specify a user record by typing in the user id directly).");
define("NBILL_CFG_DATABASE_FUNCTIONS", "Database Functions");
define("NBILL_CFG_INSTR_DATABASE_FUNCTIONS", "Clear down or delete " . NBILL_BRANDING_NAME . " database tables, or migrate data from version 1.2.x. Clearing down the tables will delete all of your data, and allow you to start with a clean slate (you will need to re-enter your license key). Delete tables before uninstalling the component to completely remove the component from your system. DO NOT delete the tables if you want to upgrade to the latest version of " . NBILL_BRANDING_NAME . " and keep your data! NOTE: DELETING THE TABLES WILL MAKE " . strtoupper(NBILL_BRANDING_NAME) . " INOPERABLE. After deleting, you must uninstall the component as it will no longer work. Migrating data from version 1.2.x will delete all existing data and copy the data from version 1.2.x instead (this might take some time).");
define("NBILL_CFG_CLEAR_TABLES", "Clear Down Tables");
define("NBILL_CFG_DELETE_TABLES", "Delete Tables");
define("NBILL_CFG_CONFIRM_CLEAR", "Are you sure you want to permanently delete all of your data? (if you go ahead, you will need to re-enter your license key)");
define("NBILL_CFG_CONFIRM_DELETE", "WARNING! This will stop " . NBILL_BRANDING_NAME . " from working! Are you sure you want to permanently DELETE all of the " . NBILL_BRANDING_NAME . " tables?");
define("NBILL_CFG_TABLES_CLEARED", "Tables Cleared. All of your data has been deleted. You will have to re-enter your license key to continue using " . NBILL_BRANDING_NAME . ".");
define("NBILL_CFG_TABLES_DELETED", "All " . NBILL_BRANDING_NAME . " tables have been deleted. To complete uninstallation, please refer to the %s");
define("NBILL_CFG_UNINSTALLER", "Component Installer");
define("NBILL_CFG_CRON_TOKEN", "CRON authorisation token");
define("NBILL_CFG_INSTR_CRON_TOKEN", "Enter any word here (no punctuation please!) and set the same word in your CRON script to give the script authorisation to run (eg. for automatically generating invoices on a daily basis). This is to prevent unauthorised scripts from accessing " . NBILL_BRANDING_NAME . ". See " . NBILL_BRANDING_WEBSITE . " for more information.");
define("NBILL_CFG_LICENSE_KEY", "License Key");
define("NBILL_CFG_INSTR_LICENSE_KEY", "If you wish to update your license key before it expires, you can enter a new one here. WARNING! If you enter an incorrect value here, it could prevent you from using " . NBILL_BRANDING_NAME . "! Only enter a valid license key, and copy it EXACTLY. By entering a license key, you are confirming that you understand and accept the %s");
define("NBILL_CFG_EULA", "End User License Agreement");
define("NBILL_CFG_VERSION_AUTO_CHECK", "Check for new versions?");
define("NBILL_CFG_AUTO_UPDATE", "Automatically upgrade?");
define("NBILL_CFG_INSTR_VERSION_AUTO_CHECK", "Whether or not to automatically check for a new version of the component whenever you load the admin home page. No personal information is sent anywhere.");
define("NBILL_CFG_INSTR_AUTO_UPDATE", "Whether or not to automatically upgrade your software if possible whenever a new version is released. Only applicable if 'Check for new versions' is set to 'yes'. If this option is set to 'no', you will just be prompted on the home page that a new version is available, but the new version will not be downloaded or installed.");
define("NBILL_CFG_CHECK_VERSION", "Check for Updates");
define("NBILL_CFG_INSTR_CHECK_VERSION", "Click the button to check now whether a newer version of the component is available.");
define("NBILL_CFG_BTN_CHECK_VERSION", "Check Now");
define("NBILL_CFG_UPDATE_NOW", "Upgrade Component");
define("NBILL_CFG_INSTR_UPDATE_NOW", "Click the button to upgrade to the latest version now (if applicable).");
define("NBILL_CFG_BTN_UPDATE_NOW", "Upgrade Now");

/* Version 1.1.4 */
define("NBILL_CFG_LIST_START_DATE", "Default Start Date for Lists");
define("NBILL_CFG_INSTR_LIST_START_DATE", "Indicate how you want the system to select the start date for any lists that are governed by a date range (eg. orders, invoices) when no date has been specifically selected. WARNING! If you select to show a large number of records (eg. 5 years, or all), this could slow down the display of the lists.");
define("NBILL_CFG_START_DATE_CURRENT_ONLY", "Show current month only");
define("NBILL_CFG_START_DATE_CURRENT_LAST", "Show current and previous month");
define("NBILL_CFG_START_DATE_QUARTER", "Show up to 3 months");
define("NBILL_CFG_START_DATE_SEMI", "Show up to 6 months");
define("NBILL_CFG_START_DATE_YEAR", "Show up to a year");
define("NBILL_CFG_START_DATE_FIVE", "Show up to 5 years");
define("NBILL_CFG_START_DATE_ALL", "Show ALL items");

//Version 1.2.1
define("NBILL_CFG_SWITCH_TO_SSL", "Switch to SSL on login?");
define("NBILL_CFG_INSTR_SWITCH_TO_SSL", "Whether or not to switch to https after a user logs in using any login box within " . NBILL_BRANDING_NAME . " (will only affect login boxes that are output by " . NBILL_BRANDING_NAME . "). WARNING! You must have an SSL certificate installed for this to work, and it may require hacks to your CMS (See article on <a target=\"blank\" href=\"http://www.netshinesoftware.com/security/using-an-ssl-certificate-with-your-joomla-website.html\">Netshine Software website</a>).");

//Version 1.2.3 - Note to translators:
//Line 29 of original en-GB language file amended (NBILL_CFG_INSTR_DATE_FORMAT) - date formats currently restricted to numeric

//Version 2.0.0
define("NBILL_CFG_NO_TX_ID_SPECIFIED", "No transaction ID was specified.");
define("NBILL_CFG_ORDER_ASSOCIATED", "The selected order is now associated with this transaction");
define("NBILL_CFG_PREV_MATCH_DISCARDED", " and the match previously selected by " . NBILL_BRANDING_NAME . " has been discarded.");
define("NBILL_CFG_CLOSEST_MATCH_ACCEPTED", "The closest match was accepted. ");
define("NBILL_CFG_NO_ACTION", "No action taken.");
define("NBILL_CFG_ASSOCIATION_REMOVED", "The transaction is no longer associated with any order. Future transactions with this ID will generate a warning prompting you to select the correct order again.");
define("NBILL_CFG_FORM_TAMPERING", "The form seems to have been tampered with (security hash does not match values). No action has been taken.");
define("NBILL_CFG_TX_CHANGE_INTRO", "%s was unable to determine which order a transaction for %s should be allocated to. Based on the amount and date, the closest match was selected (this match is shown selected in the first dropdown list below by default). If this is not correct, please select the correct order from the first dropdown list. If you are certain that the correct order is not listed in the first dropdown list, you may select another order with which to associate this transaction, or opt not to associate the transaction with any order.");
define("NBILL_CFG_SELECT_ASSOCIATION", "You may select an order with which to associate this transaction, or opt not to associate the transaction with any order.");
define("NBILL_CFG_ASSOC_WARNING", "NOTE: Selecting an order will cause all future transactions with the same ID number (%s) to be assigned to that order as well.");
define("NBILL_CFG_AMEND_ASSOC_TITLE", "Amend Order Transaction Association");
define("NBILL_CFG_INDICATE_ACTION", "Indicate what action to take:");
define("NBILL_CFG_UNALLOCATED", "Assign transaction to an unallocated order:");
define("NBILL_CFG_OTHER_ORDER", "Assign transaction to another order:");
define("NBILL_CFG_NOT_RECOMMENDED", "(not recommended unless you are absolutely certain!)");
define("NBILL_CFG_NO_SAVE_ON_DEMO", "Sorry, you cannot save the global configuration page on the demo version.");
define("NBILL_CFG_MIGRATE_1_2", "Migrate from v1.2.x");
define("NBILL_CFG_FTP_ADDRESS", "FTP Address");
define("NBILL_CFG_INSTR_FTP_ADDRESS", "If you want to allow " . NBILL_BRANDING_NAME . " to upgrade itself using FTP (ie. where the files are owned by your FTP username rather than the user PHP runs under), enter the FTP connection details here. This is not necessary if your server is running suPHP. <strong>NOTE: If you use Joomla 1.5, you should set the FTP details in the Joomla configuration page instead of here</strong> (as long as the details are valid, they will be picked up by " . NBILL_BRANDING_NAME . " automatically, and cannot then be overwritten here).");
define("NBILL_CFG_FTP_PORT", "FTP Port");
define("NBILL_CFG_INSTR_FTP_PORT", "The port to use when connecting via FTP (default is 21)");
define("NBILL_CFG_FTP_USERNAME", "FTP Username");
define("NBILL_CFG_INSTR_FTP_USERNAME", "The username to use when connecting via FTP");
define("NBILL_CFG_FTP_PASSWORD", "FTP Password");
define("NBILL_CFG_INSTR_FTP_PASSWORD", "The password to use when connecting via FTP");
define("NBILL_CFG_FTP_ROOT", "FTP Root Folder");
define("NBILL_CFG_INSTR_FTP_ROOT", "The full path to the root folder where the above credentials allow access. For example, if the full path to your website is /home/user/public_html/cms, the FTP root would typically be /home/user/. Make sure you include a trailing slash, if applicable.");
define("NBILL_CFG_TEST_FTP", "Test Connection");
define("NBILL_CFG_FTP_CONNECT_SUCCESSFUL", "FTP Connection Successful");
define("NBILL_CFG_FTP_CONNECT_FAILED", "FTP Connection Failed");
define("NBILL_CFG_FTP_LOGIN_FAILED", "Connected to FTP server ok, but login failed");
define("NBILL_CFG_FTP_OK_BUT_NBILL_NOT_FOUND", "FTP Connection and login was successful, but " . NBILL_BRANDING_NAME . " was not found at that location");
define("NBILL_CFG_FTP_OK_BUT_FILE_NOT_WRITTEN", "FTP Connection, login, and folder navigation successful, but unable to write to the files (it could be your firewall blocking access, or this user might not have write access to the files");
define("NBILL_CFG_FTP_WRITE_OK_NO_READ", "FTP Connection, login, and folder navigation successful, but unable to verify that files can be written to successfully - the user might not have read access to the files");
define("NBILL_CFG_FTP_TRY_AGAIN", "Please amend the FTP connection details on this page, save the changes, and try again.");