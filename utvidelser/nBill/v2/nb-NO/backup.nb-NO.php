<?php
/**
* Language file for nBill
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

//Backup/Restore
define("NBILL_BACKUP_RESTORE_TITLE", "Sikkerhetskopiér eller gjenopprett");
define("NBILL_BACKUP_RESTORE_INTRO", "Bruk denne siden for å lagre en komplett sikkerhetskopi av databasen på din datamaskin, eller for å gjenopprette en tidligere lagret sikkerhetskopi. Du kan velge å lagre eller gjenopprette ALLE databasetabeller (hele databasen) eller bare " . NBILL_BRANDING_NAME . " tabeller.");
define("NBILL_BACKUP_RESTORE_WARNING", "ADVARSEL! Sikkerhetskopien kan inneholde sensitive data. Lagre sikkerhetskopien på en sikker måte. IKKE lagre sikkerhetskopien på serveren.");
define("NBILL_BACKUP", "Sikkerhetskopier");
define("NBILL_RESTORE", "Gjenopprett");
define("NBILL_BACKUP_WHAT", "Klikk på en av linkene for å laste ned sikkerhetskopien. (Avhengig av størrelsen kan det ta litt tid):");
define("NBILL_BACKUP_BILLING", "Last bare ned sikkerhetskopi av " . NBILL_BRANDING_NAME . " tabellene");
define("NBILL_BACKUP_ALL", "Last ned sikkerhetskopi av alle tabeller");
define("NBILL_ERR_NO_TABLES_FOUND", "En feil har oppstått - kunne ikke finne noen tabeller!");
define("NBILL_ERR_STRUCTURE_UNREADABLE", "En feil har oppstått - kunne ikke lese fra databasen din.");
define("NBILL_ERR_NO_DATA", "En feil har oppstått - ingen data funnet.");
define("NBILL_RESTORE_WHAT", "Tabeller å gjenopprette");
define("NBILL_INSTR_RESTORE_WHAT", "Om du skal gjenopprette fra en sikkerhetskopi som inneholder ALLE tabeller, kan du velge å bare gjenopprette " . NBILL_BRANDING_NAME . " tabeller (og beholde resten uberørt), eller å gjenopprette alle tabeller til innholdet i sikkerhetskopien. Om sikkerhetskopien din bare inneholder " . NBILL_BRANDING_NAME . " tabeller, blir bare " . NBILL_BRANDING_NAME . " tabeller gjenopprettet.");
define("NBILL_RESTORE_BILLING", "Gjenopprett bare " . NBILL_BRANDING_NAME . " tabeller");
define("NBILL_RESTORE_ALL", "Gjenopprett alle tabeller");
define("NBILL_BACKUP_FILE", "Sikkerhetskopi");
define("NBILL_INSTR_BACKUP_FILE", "Velg hvor sikkerhetskopien er lagret på din datamaskin");
define("RESTORE_ARE_YOU_SURE", "ADVARSEL! Dette vil slette all nåværende data og legge tilbake data fra sikkerhetskopien. Om noe går galt kan du miste alle data. Brukes på egen risiko! Er du sikker på at du vil fortsette?");
define("NBILL_ERR_NO_DATA_FOUND_IN_FILE", "En feil har oppstått under forsøk på gjenoppretting - ingen data ble funnet i filen! Ingen endringer er gjort.");
define("NBILL_ERR_FILE_NOT_VALID", "Filen du valgte er ikke en gyldig " . NBILL_BRANDING_NAME . " sikkerhetskopi. Ingen endringer er gjort.");
define("NBILL_ERR_VERSION_MISMATCH", "Filen du valgte er fra en tidligere versjon av " . NBILL_BRANDING_NAME . ", og kan ikke gjenopprettes automatisk til denne versjonen. Du må gjøre dette manuelt, se " . NBILL_BRANDING_WEBSITE . " for instruksjoner.");
define("NBILL_ERR_FILE_NOT_FOUND", "Ingen sikkerhetskopi ble funnet. Ingen endringer er gjort.");
define("NBILL_ERR_BACKUP_DB_ERROR", "Følgende feil har oppstått under forsøk på gjenoppretting:\n\n%s\n\nAlle andre poster ble oppdatert med godt resultat.");
define("NBILL_BACKUP_RESTORED", "Gjenoppretting utført OK.");
define("NBILL_RESTORE_STATS", "%s Spørringer utført. Gjenopprettet med sikkerhetskopi fra %s");
define("NBILL_NO_NON_BILLING_PRESENT", "ADVARSEL! Du valgte å gjenopprette ALLE tabeller, men filen du valgte inneholdt " . strtoupper(NBILL_BRANDING_NAME) . " tabellene. Faktureringstabellene ble gjenopprettet, de andre ble ikke rørt.");
define("NBILL_RETURN_TO_BACKUP", "Tilbake til side for sikkerhetskopiering og gjenoppretting");