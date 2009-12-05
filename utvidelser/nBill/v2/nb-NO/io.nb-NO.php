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

//Import/Export
define("NBILL_IMPORT", "Import�r");
define("NBILL_EXPORT", "Eksport�r");
define("NBILL_IMPORT_SOURCE", "Kilde");
define("NBILL_EXPORT_TARGET", "M�l");
define("IMPORT_USERS_ARE_YOU_SURE", "ADVARSEL! Dette vil lage en ny kundeoppf�ring for hver bruker som ikke allerede har noen oppf�ring. Er du sikker p� at du �nsker � fortsette?");
define("IMPORT_CSV_ARE_YOU_SURE", "ADVARSEL! Dette vil lage en ny kundeoppf�ring (eller oppdatere en eksisterende oppf�ring) for hver oppf�ring i CSV-filen. Er du sikker p� at du �nsker � fortsette?");
define("NBILL_CLIENT_IO_TITLE", "Kundeimport/eksport");
define("NBILL_CLIENT_IO_INTRO", "Du kan lage kundeoppf�ringer for alle dine eksisterende kunder, eller importere kundelisten din fra en CSV-fil. Du kan ogs� eksportere din kundeliste til en CSV-fil. For � opprette brukere til dine eksisterende kunder, m� du gj�re dette enten i selve kundeoppf�ringen, eller ved � importere en CSV-fil (brukere kan ikke opprettes automatisk fortl�pende fordi du trenger � spesifisere et unikt brukernavn og et passord for hver av dem).");
define("NBILL_IMPORT_CLIENTS_USERS", "Brukere");
define("NBILL_IMPORT_CLIENTS_CSV", "CSV-fil");
define("NBILL_INSTR_IMPORT_CLIENTS_USERS", "Opprett nye kundeoppf�ringer basert p� n�v�rende brukeroppf�ringer (dersom en brukeroppf�ring allerede finnes for en bruker, vil den ikke bli duplikert.) Superadministratorer er unntatt.");
define("NBILL_INSTR_IMPORT_CLIENTS_CSV", "Opprett nye kundeoppf�ringer basert p� en CSV-fil. %s Vennligst les %s f�r du benytter denne funksjonen.");
define("NBILL_IMPORTANT", "VIKTIG: ");
define("NBILL_IMPORT_CLIENTS_CSV_HELP", "Hjelpetekst for import av kunder fra CSV-fil");
define("NBILL_IMPORT_CLIENTS_CSV_HELP_TITLE", "Viktig! Vennligst les hele denne teksten f�r du importerer kunder fra CSV-fil.");
define("NBILL_IMPORT_CLIENTS_CSV_HELP_TEXT_1", "Du kan bruke funksjonen for � importere fra CSV-fil for � raskt fylle kundelisten din med oppf�ringer som du kan ha eksportert fra et annet program. CSV-filen M� inkludere kolonnenavnene i den f�rste raden, og bare de kolonnenavnene som blir gjenkjent av " . NBILL_BRANDING_NAME . " vil bli brukt - alle andre kolonner vil bli ignorert. Det har ikke noe � si hvilken rekkef�lge kolonnene vises i, og du trenger ikke � bruke alle kolonnene. Et minstekrav er at CSV-filen inneholder verdi for firmanavn, kontaktnavn eller begge. ellers vil ikke noe skje. F�lgende kolonnenavn vil bli gjenkjent: ");
define("NBILL_IMPORT_CLIENTS_CSV_HELP_TEXT_2", "N�r du importerer en CSV-fil, vil " . NBILL_BRANDING_NAME . "f�rst fors�ke � finne en eksisterende kundeoppf�ring for hver post i CSV-filen. Dersom filen inneholder en 'id'-kolonne, vil kundeoppf�ringen med denne id-en bli oppdatert. Dersom det ikke er noen 'id'- kolonne, men den har en kolonne for 'e-postadresse', og en kunde allerede eksisterer med den aktuelle e-postadressen, vil kundeoppf�ringen med denne adressen bli oppdatert. Dersom det ikke blir funnet en kundeoppf�ring, blir en ny kundeoppf�ring satt inn.");
define("NBILL_IMPORT_CLIENTS_CSV_HELP_TEXT_3", "Dersom CSV-filen inneholder en 'bruker_id' kolonne, vil kundeoppf�ringen bli assosiert med brukeroppf�ringen for denne bruker-iden. Dersom det ikke er noen 'bruker_id' kolonne, men det er en 'e-postadresse' kolonne, og en eksisterende bruker allerede har samme e-postadresse, vil kundeoppf�ringen bli assosiert med den aktuelle brukeren.");
define("NBILL_IMPORT_CLIENTS_CSV_HELP_TEXT_4", "Dersom det ikke er noen 'bruker_id' kolonne, og ikke noen eksisterende bruker samsvarer med oppf�ringens e-postadresse men det er en 'brukernavn'-kolonne og en 'passord'-kolonne, vil " . NBILL_BRANDING_NAME . " opprette en ny bruker, og assosiere denne med kundeoppf�ringen. Dersom verdien i 'passord'-kolonnen er 32 tegn lang, og er mulig � dekode i base64 (dvs. bare alfanumerisk), antas det at passordet allerede har MD5-n�kler, og det vil ikke bli kodet p� nytt. Du kan derfor velge � bruke MD5-kodede passord eller rpassord med ren tekst, og begge vil bli importert riktig. Det er likevel tryggere � alltid bruke MD5-kodede passord.");
define("NBILL_IMPORT_CLIENTS_CSV_HELP_TEXT_5", "Hvis det finnes en 'land'-kolonne i CSV-filen, m� verdiene v�re som 2-tegns ISO-kode. Finnes ikke denne kolonnen, eller verdien er blank vil kundeoppf�ringen(e) bli satt til samme land som den valgte forhandleren.");
define("NBILL_IMPORT_ALL_USERS", "Import�r alt");
define("NBILL_IMPORT_SELECT_USERS", "Velg brukere");
define("NBILL_IMPORT_CSV", "Importer CSV-fil");
define("NBILL_EXPORT_CLIENTS_CSV", "CSV-fil");
define("NBILL_INSTR_EXPORT_CLIENTS_CSV", "Eksport�r kundeoppf�ringer til en CSV-fil.");
define("NBILL_EXPORT_CSV", "Last ned CSV-fil");
define("NBILL_INSTR_IMPORT_CLIENTS_VENDOR", "Velg forhandleren du �nsker � importere kundeoppf�ringer fra.");
define("NBILL_INSTR_EXPORT_CLIENTS_VENDOR", "Velg forhandleren du �nsker � eksportere kundeoppf�ringer for.");
define("NBILL_IMPORT_CLIENTS_COMPLETE", "%s ny(e) kundeoppf�ring(er) er opprettet");
define("NBILL_SELECT_USERS_TITLE", "Velg brukere");
define("NBILL_USER_ID", "Bruker-ID");
define("NBILL_USER_PERSON_NAME", "Navn");
define("NBILL_SELECT_USERS_INTRO", "Merk avkryssingsboks for brukere du �nsker � importere (du kan bare ta en side med brukere om gangen - bruk nedtrekksmenyen i bunnen av siden for � angi hvor mange brukere som skal vises per side) og klikk p� knappen 'Importer' over for � opprette kundeoppf�ringer for de valgte brukerne. Bare de brukerne som ikke allerede har en kundeoppf�ring for den valgte forhandler vises her.");
define("NBILL_NO_CLIENTS_FOUND", "Ingen kundeoppf�ringer ble funnet for denne forhandleren - det er ingenting � eksportere!");
define("NBILL_CLIENT_CSV_IMPORTED", "CSV-importering er ferdig.");
define("NBILL_CLIENT_CSV_IMPORT_NEW_USERS", "%s nye brukere ble opprettet.");
define("NBILL_CLIENT_CSV_IMPORT_NEW_CLIENTS", "%s kundeoppf�ringer ble opprettet eller oppdatert");
define("NBILL_CLIENT_CSV_IMPORT_ERRORS", "ADVARSEL! %s databasefeil oppstod under importeringen. Feilmeldingen(e) vises nedenfor (maksimalt 10 element vises)");
@define("NBILL_USER_NAME", "Brukernavn");
?>