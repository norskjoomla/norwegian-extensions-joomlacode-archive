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
define("INV_IMPORT", "Importer");
define("INV_EXPORT", "Eksporter");
define("INV_IMPORT_SOURCE", "Kilde");
define("INV_EXPORT_TARGET", "M�l");
define("IMPORT_USERS_ARE_YOU_SURE", "ADVARSEL! Dette vil lage en ny kundeoppf�ring for hver bruker som ikke allerede har noen oppf�ring. Er du sikker p� at du �nsker � fortsette?");
define("IMPORT_CSV_ARE_YOU_SURE", "ADVARSEL! Dette vil lage en ny kundeoppf�ring (eller oppdatere en eksisterende oppf�ring) for hver oppf�ring i CSV filen. Er du sikker p� at du �nsker � fortsette?");
define("INV_CLIENT_IO_TITLE", "Kunde import/eksport");
define("INV_CLIENT_IO_INTRO", "Du kan lage kundeoppf�ringer for alle dine eksisterende kunder, eller importere kundelisten din fra en CSV fil. Du kan ogs� eksportere din kundeliste til en CSV fil. For � opprette brukere til dine eksisterende kunder, m� du gj�re det enten i selve kundeoppf�ringen, eller ved � importere en CSV fil (de kan ikke opprettes automatisk fortl�pende fordi du trenger � spesifisere et unikt brukernavn og et passord for hver av dem).");
define("INV_IMPORT_CLIENTS_USERS", "Brukere");
define("INV_IMPORT_CLIENTS_CSV", "CSV fil");
define("INV_INSTR_IMPORT_CLIENTS_USERS", "Opprett nye kundeoppf�ringer basert p� n�v�rende brukeroppf�ringer (dersom en brukeroppf�ring allerede finnes for en bruker, vil den ikke bli duplikert.) Superadministratorer er unntatt.");
define("INV_INSTR_IMPORT_CLIENTS_CSV", "Opprett nye kundeoppf�ringer basert p� en CSV fil. %s Vennligst les %s f�r du benytter denne funksjonen.");
define("INV_IMPORTANT", "VIKTIG: ");
define("INV_IMPORT_CLIENTS_CSV_HELP", "Importer kunde CSV hjelpetekst");
define("INV_IMPORT_CLIENTS_CSV_HELP_TITLE", "Viktig! Vennligst les hele denne teksten f�r du benytter kund CSV import.");
define("INV_IMPORT_CLIENTS_CSV_HELP_TEXT_1", "Du kan benytte CSV importfunksjon for � raskt fylle kundelisten din med oppf�ringer som du kan ha eksportert fra et annet program. CSV filen M� innkludere kolonnenavnene i den f�rste raden, og bare de kolonnenavnene som er gjenkjent av " . INV_BRANDING_NAME . " vil bli brukt - alle andre kolonner vil bli ignorert. Det har ikke noe � si hvilken rekkef�lge kolonnene vises i, og du trenger ikke � bruke alle kolonnene. Likevel, som et minstekrav, m� CSV filen inneholde verdier enten for firmanavn eller kontaktvavn (eller begge), ellers vil ikke noe skje. F�lgende kolonnenavn vil bli kjenkjent: ");
define("INV_IMPORT_CLIENTS_CSV_HELP_TEXT_2", "N�r du importerer en CSV fil, " . INV_BRANDING_NAME . "vil f�rst fors�ke � finne en eksisterende kundeoppf�ring for hver post i CSV filen. Dersom CSV-en inneholder en 'id' kolonne, vil kundeoppf�ringen med den id-en bli oppdatert. Dersom det ikke er noen 'id' kolonne, men den har en 'e-postadresse' kolonne, og en kunde allerede eksisterer med den e-postadressen, vil kundeoppf�ringen med den e-postadressen bli oppdatert. Dersom det ikke blir funnet noen eksisterende kundeoppf�ring, blir en ny kundeoppf�ring satt inn.");
define("INV_IMPORT_CLIENTS_CSV_HELP_TEXT_3", "Dersom CSV filen inneholder en 'bruker_id' kolonne, vil kundeoppf�ringen bli assosiert med brukeroppf�ringen for den bruker-iden. Dersom det ikke er noen 'bruker_id' kolonne, men det er en 'e-postadresse' kolonne, og en eksisterende bruker allerede har samme e-postadresse, vil kundeoppf�ringen bli assosiert med den brukeren.");
define("INV_IMPORT_CLIENTS_CSV_HELP_TEXT_4", "Dersom det ikke er noen 'bruker_id' kolonne, og ikke noen eksisterende bruker samsvarer med oppf�ringens e-postadresse men det er en 'brukernavn' kolonne og en 'passord' kolonne, " . INV_BRANDING_NAME . " vil opprette en ny bruker, og assosiere den med kundeoppf�ringen. Dersom verdien i 'passord' kolonnen er 32 tegn lang og er mulig � dekode i base64 (dvs. bare alfanumerisk), antas det at passordet allerede har MD5-n�kler, og det vil ikke bli kodet igjen. Du kan derfor velge � bruke MD5 kodete passord eller ren tekst passord, og begge skulle bli importert riktig. Det er likevel tryggere � alltid bruke MD5 kodete passord.");
define("INV_IMPORT_CLIENTS_CSV_HELP_TEXT_5", "Dersom en 'land' kolonne er inkludert, m� verdien v�re en 2-tegn ISO kode. Dersom det ikke inkludert noen 'land' kolonne eller verdien er blank, vil kundeoppf�ringen(e) bli satt til det samme land som den valgte forhandler.");
define("INV_IMPORT_ALL_USERS", "Importer alt");
define("INV_IMPORT_SELECT_USERS", "Velg brukere");
define("INV_IMPORT_CSV", "Importer CSV");
define("INV_EXPORT_CLIENTS_CSV", "CSV Fil");
define("INV_INSTR_EXPORT_CLIENTS_CSV", "Eksporter kundeoppf�ringer til en CSV fil.");
define("INV_EXPORT_CSV", "Last ned CSV");
define("INV_INSTR_IMPORT_CLIENTS_VENDOR", "Velg en forhandler du �nsker � importere kundeoppf�ringer fra.");
define("INV_INSTR_EXPORT_CLIENTS_VENDOR", "Velg forhandler du �nsker � eksportere kundeoppf�ringer for.");
define("INV_IMPORT_CLIENTS_COMPLETE", "%s ny(e) kundeoppf�ring(er) er opprettet");
define("INV_SELECT_USERS_TITLE", "Velg brukere");
define("INV_USER_ID", "Bruker ID");
define("INV_USER_PERSON_NAME", "Navn");
define("INV_SELECT_USERS_INTRO", "Kryss av boksene inntil brukerne du �nsker � importere (du kan bare ta en side med brukere i gangen - bruk rullemeny i bunn av siden for � spesifisere hvor mange brukere som skal vises per side) og klikk p� 'Importer' verkt�ylinjeknappen over for � opprette kundeoppf�ringer for de valgte brukerne. Bare de brukerne som ikke allerede har en kundeoppf�ring for den valgte forhandler vises her.");
define("INV_NO_CLIENTS_FOUND", "Ingen kundeoppf�ring ble funnet for denne forhandleren - det er ingenting � eksportere!");
define("INV_CLIENT_CSV_IMPORTED", "CSV importering er ferdig.");
define("INV_CLIENT_CSV_IMPORT_NEW_USERS", "%s nye brukere ble opprettet.");
define("INV_CLIENT_CSV_IMPORT_NEW_CLIENTS", "%s kundeoppf�ringer ble opprettet eller oppdatert");
define("INV_CLIENT_CSV_IMPORT_ERRORS", "ADVARSEL! %s databasefeil oppstod under importeringen. Feilmeldingen(e) vises nedenfor (maks 10 element vises)");
@define("INV_USER_NAME", "Brukernavn");
?>