<?php
/**
* Language file for the data Import/Export features
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

//Import/Export
define("NBILL_IMPORT", "Importer");
define("NBILL_EXPORT", "Eksporter");
define("NBILL_IMPORT_SOURCE", "Kilde");
define("NBILL_EXPORT_TARGET", "Mål");
define("IMPORT_USERS_ARE_YOU_SURE", "ADVARSEL! Dette vil lage en ny kundeoppføring for hver bruker som ikke allerede har noen oppføring. Er du sikker på at du ønsker å fortsette?");
define("IMPORT_CSV_ARE_YOU_SURE", "ADVARSEL! Dette vil lage en ny kundeoppføring (eller oppdatere en eksisterende oppføring) for hver oppføring i CSV-filen. Er du sikker på at du ønsker å fortsette?");
define("NBILL_CLIENT_IO_TITLE", "Kunde import/eksport");
define("NBILL_CLIENT_IO_INTRO", "Du kan lage kundeoppføringer for alle dine eksisterende kunder, eller importere kundelisten din fra en CSV-fil. Du kan også eksportere din kundeliste til en CSV-fil. For å opprette brukere til dine eksisterende kunder, må du gjøre dette enten i selve kundeoppføringen, eller ved å importere en CSV-fil (brukere kan ikke opprettes automatisk fortløpende fordi du trenger å spesifisere et unikt brukernavn og et passord for hver av dem).");
define("NBILL_IMPORT_CLIENTS_USERS", "Brukere");
define("NBILL_IMPORT_CLIENTS_CSV", "CSV-fil");
define("NBILL_INSTR_IMPORT_CLIENTS_USERS", "Opprett nye kundeoppføringer basert på nåværende brukeroppføringer (dersom en brukeroppføring allerede finnes for en bruker, vil den ikke bli duplikert.) Superadministratorer er unntatt.");
define("NBILL_INSTR_IMPORT_CLIENTS_CSV", "Opprett nye kundeoppføringer basert på en CSV-fil. %s Vennligst les %s før du benytter denne funksjonen.");
define("NBILL_IMPORTANT", "VIKTIG: ");
define("NBILL_IMPORT_CLIENTS_CSV_HELP", "Hjelpetekst for import av kunder fra CSV-fil");
define("NBILL_IMPORT_CLIENTS_CSV_HELP_TITLE", "Viktig! Vennligst les hele denne teksten før du importerer kunder fra CSV-fil.");
define("NBILL_IMPORT_CLIENTS_CSV_HELP_TEXT_1", "Du kan bruke funksjonen for å importere fra CSV-fil for å raskt fylle kundelisten din med oppføringer som du kan ha eksportert fra et annet program. CSV-filen MÅ inkludere kolonnenavnene i den første raden, og bare de kolonnenavnene som blir gjenkjent av " . NBILL_BRANDING_NAME . " vil bli brukt - alle andre kolonner vil bli ignorert. Det har ikke noe å si hvilken rekkefølge kolonnene vises i, og du trenger ikke å bruke alle kolonnene. Et minstekrav er at CSV-filen inneholder verdi for firmanavn, kontaktnavn eller begge. Ellers vil ikke noe skje. Følgende kolonnenavn vil bli gjenkjent: ");
define("NBILL_IMPORT_CLIENTS_CSV_HELP_TEXT_2", "Når du importerer en CSV-fil, vil " . NBILL_BRANDING_NAME . "først forsøke å finne en eksisterende kundeoppføring for hver post i CSV-filen. Dersom filen inneholder en 'id'-kolonne, vil kundeoppføringen med denne id-en bli oppdatert. Dersom det ikke er noen 'id'- kolonne, men den har en kolonne for 'e-postadresse', og en kunde allerede eksisterer med den aktuelle e-postadressen, vil kundeoppføringen med denne adressen bli oppdatert. Dersom det ikke blir funnet en kundeoppføring, blir en ny kundeoppføring satt inn.");
define("NBILL_IMPORT_CLIENTS_CSV_HELP_TEXT_3", "Dersom CSV-filen inneholder en 'bruker_id' kolonne, vil kundeoppføringen bli assosiert med brukeroppføringen for denne bruker-iden. Dersom det ikke er noen 'bruker_id' kolonne, men det er en 'e-postadresse' kolonne, og en eksisterende bruker allerede har samme e-postadresse, vil kundeoppføringen bli assosiert med den aktuelle brukeren.");
define("NBILL_IMPORT_CLIENTS_CSV_HELP_TEXT_4", "Dersom det ikke er noen 'bruker_id' kolonne, og ikke noen eksisterende bruker samsvarer med oppføringens e-postadresse men det er en 'brukernavn'-kolonne og en 'passord'-kolonne, vil " . NBILL_BRANDING_NAME . " opprette en ny bruker, og assosiere denne med kundeoppføringen. Dersom verdien i 'passord'-kolonnen er 32 tegn lang, og er mulig å dekode i base64 (dvs. bare alfanumerisk), antas det at passordet allerede har MD5-nøkler, og det vil ikke bli kodet på nytt. Du kan derfor velge å bruke MD5-kodede passord eller rpassord med ren tekst, og begge vil bli importert riktig. Det er likevel tryggere å alltid bruke MD5-kodede passord.");
define("NBILL_IMPORT_CLIENTS_CSV_HELP_TEXT_5", "Hvis det finnes en 'land'-kolonne i CSV-filen, må verdiene være som 2-tegns ISO-kode. Finnes ikke denne kolonnen, eller verdien er blank vil kundeoppføringen(e) bli satt til samme land som den valgte forhandleren.");
define("NBILL_IMPORT_ALL_USERS", "Importer alt");
define("NBILL_IMPORT_SELECT_USERS", "Velg brukere");
define("NBILL_IMPORT_CSV", "Importer CSV-fil");
define("NBILL_EXPORT_CLIENTS_CSV", "CSV-fil");
define("NBILL_INSTR_EXPORT_CLIENTS_CSV", "Eksportér kundeoppføringer til en CSV-fil.");
define("NBILL_EXPORT_CSV", "Last ned CSV-fil");
define("NBILL_INSTR_IMPORT_CLIENTS_VENDOR", "Velg forhandleren du ønsker å importere kundeoppføringer fra.");
define("NBILL_INSTR_EXPORT_CLIENTS_VENDOR", "Velg forhandleren du ønsker å eksportere kundeoppføringer for.");
define("NBILL_IMPORT_CLIENTS_COMPLETE", "%s ny(e) kundeoppføring(er) er opprettet");
define("NBILL_SELECT_USERS_TITLE", "Velg brukere");
define("NBILL_USER_ID", "Bruker-ID");
define("NBILL_USER_PERSON_NAME", "Navn");
define("NBILL_SELECT_USERS_INTRO", "Merk avkryssingsboks for brukere du ønsker å importere (du kan bare ta en side med brukere om gangen - bruk nedtrekksmenyen i bunnen av siden for å angi hvor mange brukere som skal vises per side) og klikk på knappen 'Importer' over for å opprette kundeoppføringer for de valgte brukerne. Bare de brukerne som ikke allerede har en kundeoppføring for den valgte forhandler vises her.");
define("NBILL_NO_CLIENTS_FOUND", "Ingen kundeoppføringer ble funnet for denne forhandleren - det er ingenting å eksportere!");
define("NBILL_CLIENT_CSV_IMPORTED", "CSV-importering er ferdig.");
define("NBILL_CLIENT_CSV_IMPORT_NEW_USERS", "%s nye brukere ble opprettet.");
define("NBILL_CLIENT_CSV_IMPORT_NEW_CLIENTS", "%s kundeoppføringer ble opprettet eller oppdatert");
define("NBILL_CLIENT_CSV_IMPORT_ERRORS", "ADVARSEL! %s databasefeil oppstod under importeringen. Feilmeldingen(e) vises nedenfor (maksimalt 10 element vises)");
@define("NBILL_USER_NAME", "Brukernavn");