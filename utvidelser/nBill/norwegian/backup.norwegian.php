<?php
/**
* @version 1.1.x
* @package nBill
* @copyright (C) 2006-2007 Netshine Software Limited
* @copyright Translation 2009 Joomla! i Norge
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
define("INV_BACKUP_RESTORE_TITLE", "Sikkerhetskopier/Gjenopprett");
define("INV_BACKUP_RESTORE_INTRO", "Bruk denne siden for å lagre en komplett sikkerhetskopi av databasen på din datamaskin, eller for å gjenopprette en tidligere lagret sikkerhetskopi. Du kan velge å lagre eller gjenopprette ALLE databasetabeller (hele databasen) eller bare " . INV_BRANDING_NAME . " tabeller.");
define("INV_BACKUP_RESTORE_WARNING", "ADVARSEL! Sikkerhetskopien kan inneholde sensitive data. Lagre sikkerhetskopien på en sikker måte. IKKE lagre sikkerhetskopien på serveren.");
define("INV_BACKUP", "Sikkerhetskopi");
define("INV_RESTORE", "Gjenopprett");
define("INV_BACKUP_WHAT", "Klikk på en av linkene for å laste ned Sikkerhetskopien (avhengig av størrelsen så kan det ta litt tid):");
define("INV_BACKUP_BILLING", "Last bare ned sikkerhetskopi av " . INV_BRANDING_NAME . " tabellene");
define("INV_BACKUP_ALL", "Last ned sikkerhetskopi av alle tabeller");
define("INV_ERR_NO_TABLES_FOUND", "En feil har oppstått - kunne ikke finne noen tabeller!");
define("INV_ERR_STRUCTURE_UNREADABLE", "En feil har oppstått - kunne ikke lese fra databasen din.");
define("INV_ERR_NO_DATA", "En feil har oppstått - ingen data funnet.");
define("INV_RESTORE_WHAT", "Tabeller å gjenopprette");
define("INV_INSTR_RESTORE_WHAT", "Om du skal gjenopprette fra en sikkerhetskopi som inneholder ALLE tabeller, kan du velge å bare gjenopprette " . INV_BRANDING_NAME . " tabeller (og beholde resten uberørt), eller å gjenopprette alle tabeller til innholde i sikkerhetskopien. Om sikkerhetskopien din bare inneholder " . INV_BRANDING_NAME . " tabeller, så blir bare " . INV_BRANDING_NAME . " tabeller gjenopprette.");
define("INV_RESTORE_BILLING", "Gjenopprett bare " . INV_BRANDING_NAME . " tabeller");
define("INV_RESTORE_ALL", "Gjenopprett alle tabeller");
define("INV_BACKUP_FILE", "Sikkerhetskopi");
define("INV_INSTR_BACKUP_FILE", "Velg hvor sikkerhetskopien er lagret på din datamaskin");
define("RESTORE_ARE_YOU_SURE", "ADVARSEL! Dette vil slette all nåværende data og legge tilbake data fra sikkerhetskopien. Om noe går galt kan du miste all data. Brukes på egen risiko! Er du sikker på at du vil fortsette?");
define("INV_ERR_NO_DATA_FOUND_IN_FILE", "En feil har oppstått ved forsøk på gjenoppretting - ingen data ble funnet i filen! Ingen endringer er utført.");
define("INV_ERR_FILE_NOT_VALID", "Filen du valgte er ikke en gyldig " . INV_BRANDING_NAME . " sikkerhetskopi. Ingen endringer er utført.");
define("INV_ERR_VERSION_MISMATCH", "Filen du valgte er fra en tidligere versjon av " . INV_BRANDING_NAME . ". Og kan ikke gjenopprettes automatisk til denne versjonen. Du må gjøre dette manuelt, se " . INV_BRANDING_WEBSITE . " for instruksjoner.");
define("INV_ERR_FILE_NOT_FOUND", "Ingen sikkerhetskopi ble funnet. Ingen endringer er utført.");
define("INV_ERR_BACKUP_DB_ERROR", "Følgende feil har oppstått under forsøk på gjenoppretting:\n\n%s\n\nAll andre poster ble oppdatert med godt resultat.");
define("INV_BACKUP_RESTORED", "Gjenoppretting utført OK.");
define("INV_RESTORE_STATS", "%s Spørringer utført. Gjenopprettet med sikkerhetskopi fra %s");
define("INV_NO_NON_BILLING_PRESENT", "ADVARSEL! Du valgte å gjenopprette ALLE tabeller, men filen du valgte inneholdte " . strtoupper(INV_BRANDING_NAME) . " tabellene. Faktureringstabellene ble gjenopprettet, alle de andre ble ikke rørt.");
define("INV_RETURN_TO_BACKUP", "Tilbake til side for Sikkerhetskopiering/Gjenoppretting");
?>
