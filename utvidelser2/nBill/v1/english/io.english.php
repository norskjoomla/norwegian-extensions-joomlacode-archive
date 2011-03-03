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

//Import/Export
define("INV_IMPORT", "Import");
define("INV_EXPORT", "Export");
define("INV_IMPORT_SOURCE", "Source");
define("INV_EXPORT_TARGET", "Target");
define("IMPORT_USERS_ARE_YOU_SURE", "WARNING! This will create a new client record for every user that does not already have a client record. Are you sure you want to continue?");
define("IMPORT_CSV_ARE_YOU_SURE", "WARNING! This will create a new client record (or update an existing record) for every record in the CSV file. Are you sure you want to continue?");
define("INV_CLIENT_IO_TITLE", "Client Import/Export");
define("INV_CLIENT_IO_INTRO", "You can create Client records for all of your existing users, or import your client list from a CSV file. You can also export your client list to a CSV file. To create users for your existing clients, you have to do so either in the client record itself, or by importing a CSV file (they cannot be created automatically en-masse because you need to specify a unique username and a password for each one).");
define("INV_IMPORT_CLIENTS_USERS", "Users");
define("INV_IMPORT_CLIENTS_CSV", "CSV File");
define("INV_INSTR_IMPORT_CLIENTS_USERS", "Create new client records based on current user records (if a client record already exists for a user, it will not be duplicated). Super Administrators are excluded.");
define("INV_INSTR_IMPORT_CLIENTS_CSV", "Create new client records based on a CSV file. %s Please read the %s before using this feature.");
define("INV_IMPORTANT", "IMPORTANT: ");
define("INV_IMPORT_CLIENTS_CSV_HELP", "Client CSV Import Help Text");
define("INV_IMPORT_CLIENTS_CSV_HELP_TITLE", "Important! Please read all of this text before using client CSV import.");
define("INV_IMPORT_CLIENTS_CSV_HELP_TEXT_1", "You can use the import CSV feature to quickly populate your client list with records that you may have exported from another program. The CSV file MUST include the column names in the first row, and only those column names that are recognised by " . INV_BRANDING_NAME . " will be used - any other columns will be ignored. It does not matter what order the columns appear in, and you do not have to use all of the columns. As a minimum though, the CSV file must contain values for either the company name or contact name (or both), otherwise no action will be taken. The following column names will be recognised: ");
define("INV_IMPORT_CLIENTS_CSV_HELP_TEXT_2", "When you import a CSV file, " . INV_BRANDING_NAME . " will first try to locate an existing client record for each entry in the CSV file. If the CSV includes an 'id' column, the client record with that id will be updated. If there is no 'id' column, but there is an 'email_address' column, and a client already exists with that e-mail address, the client record with that e-mail address will be updated. If no existing client record is found, a new client record will be inserted.");
define("INV_IMPORT_CLIENTS_CSV_HELP_TEXT_3", "If the CSV file includes a 'user_id' column, the client record will be associated with the user record for that user id. If there is no 'user_id' column, but there is an 'email_address' column, and an existing user already has the same e-mail address, the client record will be associated with that user.");
define("INV_IMPORT_CLIENTS_CSV_HELP_TEXT_4", "If there is no 'user_id' column, and no existing user matches the record's e-mail address but there is a 'username' column and a 'password' column, " . INV_BRANDING_NAME . " will create a new user, and associate it with the client record. If the value in the 'password' column is 32 characters long and is capable of being base64 decoded (ie. it is alpha-numeric only), it will be assumed that the password is already MD5 hashed, and it will not be hashed again. You can therefore choose to use MD5 hashed passwords or plain-text passwords, and both should be imported ok. It is safer to always use MD5 hashed passwords though.");
define("INV_IMPORT_CLIENTS_CSV_HELP_TEXT_5", "If a 'country' column is included, the value must be a valid 2-character ISO code. If no 'country' column is included, or the value is blank, the client record(s) will be set to the same country as the selected vendor.");
define("INV_IMPORT_ALL_USERS", "Import All");
define("INV_IMPORT_SELECT_USERS", "Select Users");
define("INV_IMPORT_CSV", "Import CSV");
define("INV_EXPORT_CLIENTS_CSV", "CSV File");
define("INV_INSTR_EXPORT_CLIENTS_CSV", "Export client records to a CSV file.");
define("INV_EXPORT_CSV", "Download CSV");
define("INV_INSTR_IMPORT_CLIENTS_VENDOR", "Select the vendor for whom you want to import client records.");
define("INV_INSTR_EXPORT_CLIENTS_VENDOR", "Select the vendor for whom you want to export client records.");
define("INV_IMPORT_CLIENTS_COMPLETE", "%s new client record(s) created");
define("INV_SELECT_USERS_TITLE", "Select Users");
define("INV_USER_ID", "User ID");
define("INV_USER_PERSON_NAME", "Name");
define("INV_SELECT_USERS_INTRO", "Check the boxes next to the users you want to import (you can only do one page worth of users at a time - use the dropdown at the bottom of the page to specify how many users to display per page) and click in the 'Import' toolbar button above to create Client records for the selected users. Only those users who do not already have a client record for the selected vendor are displayed here.");
define("INV_NO_CLIENTS_FOUND", "No Client records were found for this vendor - there is nothing to export!");
define("INV_CLIENT_CSV_IMPORTED", "CSV Import Complete.");
define("INV_CLIENT_CSV_IMPORT_NEW_USERS", "%s new Users were created.");
define("INV_CLIENT_CSV_IMPORT_NEW_CLIENTS", "%s Client records were created or updated.");
define("INV_CLIENT_CSV_IMPORT_ERRORS", "WARNING! %s database error(s) occurred during the import. The error message(s) are shown below (maximum 10 entries shown)");
@define("INV_USER_NAME", "User Name");
?>
