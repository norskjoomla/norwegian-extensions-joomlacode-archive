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

//Backup/Restore
define("INV_BACKUP_RESTORE_TITLE", "Backup/Restore");
define("INV_BACKUP_RESTORE_INTRO", "Use this page to save a complete backup of your database tables on your computer, or to restore a previously saved backup. You can choose to save or restore ALL of the database tables (your entire database), or just the " . INV_BRANDING_NAME . " tables.");
define("INV_BACKUP_RESTORE_WARNING", "WARNING! Backup files contain potentially sensitive data. Make sure they are stored securely. DO NOT store backup files on your web server.");
define("INV_BACKUP", "Backup");
define("INV_RESTORE", "Restore");
define("INV_BACKUP_WHAT", "Click on one of the following links to download a backup of your database tables (it may take some time, depending on how much data you have):");
define("INV_BACKUP_BILLING", "Download Backup of " . INV_BRANDING_NAME . " Tables Only");
define("INV_BACKUP_ALL", "Download Backup of All Tables");
define("INV_ERR_NO_TABLES_FOUND", "An error occurred whilst attempting to backup your tables - no tables were found! This should never happen!");
define("INV_ERR_STRUCTURE_UNREADABLE", "An error occurred whilst attempting to backup your tables - the database table structure could not be read.");
define("INV_ERR_NO_DATA", "An error occurred whilst attempting to backup your tables - no data was found.");
define("INV_RESTORE_WHAT", "Tables to Restore");
define("INV_INSTR_RESTORE_WHAT", "If you are restoring from a backup which includes ALL database tables, you can choose whether to restore only the " . INV_BRANDING_NAME . " tables (and keep the rest of your site intact), or to restore all tables and revert your entire site to the backed-up version. If your backup file only contains " . INV_BRANDING_NAME . " tables, of course only " . INV_BRANDING_NAME . " tables will be restored.");
define("INV_RESTORE_BILLING", "Restore " . INV_BRANDING_NAME . " Tables Only");
define("INV_RESTORE_ALL", "Restore ALL Tables");
define("INV_BACKUP_FILE", "Backup File");
define("INV_INSTR_BACKUP_FILE", "Select the location of the backup file on your computer");
define("RESTORE_ARE_YOU_SURE", "WARNING! This will erase all of your current data and restore your backed up version. If anything goes wrong you could lose all of your data. Use this feature at your own risk! Are you sure you want to continue?");
define("INV_ERR_NO_DATA_FOUND_IN_FILE", "An error occurred whilst attempting to restore your backup file - no data was found in the file! No action has been taken.");
define("INV_ERR_FILE_NOT_VALID", "The file you specified is not a valid " . INV_BRANDING_NAME . " backup file. No action has been taken.");
define("INV_ERR_VERSION_MISMATCH", "The file you specified was backed up using a different version of " . INV_BRANDING_NAME . ". It cannot automatically be restored into this version. This can be achieved manually however, please see " . INV_BRANDING_WEBSITE . " for instructions.");
define("INV_ERR_FILE_NOT_FOUND", "No backup file was found. No action has been taken.");
define("INV_ERR_BACKUP_DB_ERROR", "The following error(s) occurred whilst attempting to restore the backup:\n\n%s\n\nAll other records were updated successfully.");
define("INV_BACKUP_RESTORED", "Backup Restored Successfully.");
define("INV_RESTORE_STATS", "%s Queries Executed. Restored from backup file dated %s");
define("INV_NO_NON_BILLING_PRESENT", "WARNING! You requested ALL tables to be restored, but the backup file selected only contained " . strtoupper(INV_BRANDING_NAME) . " tables. Billing tables were restored, all other tables were left untouched.");
define("INV_RETURN_TO_BACKUP", "Return to Backup/Restore Page");
?>
