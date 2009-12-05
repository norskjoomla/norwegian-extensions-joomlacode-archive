<?php
/**
* Language file for the Backup/Restore Feature.
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

//Backup/Restore
define("NBILL_BACKUP_RESTORE_TITLE", "Backup/Restore");
define("NBILL_BACKUP_RESTORE_INTRO", "Use this page to save a complete backup of your database tables on your computer, or to restore a previously saved backup. You can choose to save or restore ALL of the database tables (your entire database), or just the " . NBILL_BRANDING_NAME . " tables.");
define("NBILL_BACKUP_RESTORE_WARNING", "WARNING! Backup files contain potentially sensitive data. Make sure they are stored securely. DO NOT store backup files on your web server.");
define("NBILL_BACKUP", "Backup");
define("NBILL_RESTORE", "Restore");
define("NBILL_BACKUP_WHAT", "Click on one of the following links to download a backup of your database tables (it may take some time, depending on how much data you have):");
define("NBILL_BACKUP_BILLING", "Download Backup of " . NBILL_BRANDING_NAME . " Tables Only");
define("NBILL_BACKUP_ALL", "Download Backup of All Tables");
define("NBILL_ERR_NO_TABLES_FOUND", "An error occurred whilst attempting to backup your tables - no tables were found! This should never happen!");
define("NBILL_ERR_STRUCTURE_UNREADABLE", "An error occurred whilst attempting to backup your tables - the database table structure could not be read.");
define("NBILL_ERR_NO_DATA", "An error occurred whilst attempting to backup your tables - no data was found.");
define("NBILL_RESTORE_WHAT", "Tables to Restore");
define("NBILL_INSTR_RESTORE_WHAT", "If you are restoring from a backup which includes ALL database tables, you can choose whether to restore only the " . NBILL_BRANDING_NAME . " tables (and keep the rest of your site intact), or to restore all tables and revert your entire site to the backed-up version. If your backup file only contains " . NBILL_BRANDING_NAME . " tables, of course only " . NBILL_BRANDING_NAME . " tables will be restored.");
define("NBILL_RESTORE_BILLING", "Restore " . NBILL_BRANDING_NAME . " Tables Only");
define("NBILL_RESTORE_ALL", "Restore ALL Tables");
define("NBILL_BACKUP_FILE", "Backup File");
define("NBILL_INSTR_BACKUP_FILE", "Select the location of the backup file on your computer");
define("RESTORE_ARE_YOU_SURE", "WARNING! This will erase all of your current data and restore your backed up version. If anything goes wrong you could lose all of your data. Use this feature at your own risk! Are you sure you want to continue?");
define("NBILL_ERR_NO_DATA_FOUND_IN_FILE", "An error occurred whilst attempting to restore your backup file - no data was found in the file! No action has been taken.");
define("NBILL_ERR_FILE_NOT_VALID", "The file you specified is not a valid " . NBILL_BRANDING_NAME . " backup file. No action has been taken.");
define("NBILL_ERR_VERSION_MISMATCH", "The file you specified was backed up using a different version of " . NBILL_BRANDING_NAME . ". It cannot automatically be restored into this version. This can be achieved manually however, please see " . NBILL_BRANDING_WEBSITE . " for instructions.");
define("NBILL_ERR_FILE_NOT_FOUND", "No backup file was found. No action has been taken.");
define("NBILL_ERR_BACKUP_DB_ERROR", "The following error(s) occurred whilst attempting to restore the backup:\n\n%s\n\nAll other records were updated successfully.");
define("NBILL_BACKUP_RESTORED", "Backup Restored Successfully.");
define("NBILL_RESTORE_STATS", "%s Queries Executed. Restored from backup file dated %s");
define("NBILL_NO_NON_BILLING_PRESENT", "WARNING! You requested ALL tables to be restored, but the backup file selected only contained " . strtoupper(NBILL_BRANDING_NAME) . " tables. Billing tables were restored, all other tables were left untouched.");
define("NBILL_RETURN_TO_BACKUP", "Return to Backup/Restore Page");