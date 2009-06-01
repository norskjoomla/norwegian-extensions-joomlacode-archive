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
define("INV_EXPORT_TARGET", "Mål");
define("IMPORT_USERS_ARE_YOU_SURE", "ADVARSEL! Dette vil lage en ny kundeoppføring for hver bruker som ikke allerede har noen oppføring. Er du sikker på at du ønsker å fortsette?");
define("IMPORT_CSV_ARE_YOU_SURE", "ADVARSEL! Dette vil lage en ny kundeoppføring (eller oppdatere en eksisterende oppføring) for hver oppføring i CSV filen. Er du sikker på at du ønsker å fortsette?");
define("INV_CLIENT_IO_TITLE", "Kunde import/eksport");
define("INV_CLIENT_IO_INTRO", "Du kan lage kundeoppføringer for alle dine eksisterende kunder, eller importere kundelisten din fra en CSV fil. Du kan også eksportere din kundeliste til en CSV fil. For å opprette brukere til dine eksisterende kunder, må du gjøre det enten i selve kundeoppføringen, eller ved å importere en CSV fil (de kan ikke opprettes automatisk fortløpende fordi du trenger å spesifisere et unikt brukernavn og et passord for hver av dem).");
define("INV_IMPORT_CLIENTS_USERS", "Brukere");
define("INV_IMPORT_CLIENTS_CSV", "CSV fil");
define("INV_INSTR_IMPORT_CLIENTS_USERS", "Opprett nye kundeoppføringer basert på nåværende brukeroppføringer (dersom en brukeroppføring allerede finnes for en bruker, vil den ikke bli duplikert.) Superadministratorer er unntatt.");
define("INV_INSTR_IMPORT_CLIENTS_CSV", "Opprett nye kundeoppføringer basert på en CSV fil. %s Vennligst les %s før du benytter denne funksjonen.");
define("INV_IMPORTANT", "VIKTIG: ");
define("INV_IMPORT_CLIENTS_CSV_HELP", "Importer kunde CSV hjelpetekst");
define("INV_IMPORT_CLIENTS_CSV_HELP_TITLE", "Viktig! Vennligst les hele denne teksten før du benytter kund CSV import.");
define("INV_IMPORT_CLIENTS_CSV_HELP_TEXT_1", "Du kan benytte CSV importfunksjon for å raskt fylle kundelisten din med oppføringer som du kan ha eksportert fra et annet program. CSV filen MÅ innkludere kolonnenavnene i den første raden, og bare de kolonnenavnene som er gjenkjent av " . INV_BRANDING_NAME . " vil bli brukt - alle andre kolonner vil bli ignorert. Det har ikke noe å si hvilken rekkefølge kolonnene vises i, og du trenger ikke å bruke alle kolonnene. Likevel, som et minstekrav, må CSV filen inneholde verdier enten for firmanavn eller kontaktvavn (eller begge), ellers vil ikke noe skje. Følgende kolonnenavn vil bli kjenkjent: ");
define("INV_IMPORT_CLIENTS_CSV_HELP_TEXT_2", "Når du importerer en CSV fil, " . INV_BRANDING_NAME . "vil først forsøke å finne en eksisterende kundeoppføring for hver post i CSV filen. Dersom CSV-en inneholder en 'id' kolonne, vil kundeoppføringen med den id-en bli oppdatert. Dersom det ikke er noen 'id' kolonne, men den har en 'e-postadresse' kolonne, og en kunde allerede eksisterer med den e-postadressen, vil kundeoppføringen med den e-postadressen bli oppdatert. Dersom det ikke blir funnet noen eksisterende kundeoppføring, blir en ny kundeoppføring satt inn.");
define("INV_IMPORT_CLIENTS_CSV_HELP_TEXT_3", "Dersom CSV filen inneholder en 'bruker_id' kolonne, vil kundeoppføringen bli assosiert med brukeroppføringen for den bruker-iden. Dersom det ikke er noen 'bruker_id' kolonne, men det er en 'e-postadresse' kolonne, og en eksisterende bruker allerede har samme e-postadresse, vil kundeoppføringen bli assosiert med den brukeren.");
define("INV_IMPORT_CLIENTS_CSV_HELP_TEXT_4", "Dersom det ikke er noen 'bruker_id' kolonne, og ikke noen eksisterende bruker samsvarer med oppføringens e-postadresse men det er en 'brukernavn' kolonne og en 'passord' kolonne, " . INV_BRANDING_NAME . " vil opprette en ny bruker, og assosiere den med kundeoppføringen. Dersom verdien i 'passord' kolonnen er 32 tegn lang og er mulig å dekode i base64 (dvs. bare alfanumerisk), antas det at passordet allerede har MD5-nøkler, og det vil ikke bli kodet igjen. Du kan derfor velge å bruke MD5 kodete passord eller ren tekst passord, og begge skulle bli importert riktig. Det er likevel tryggere å alltid bruke MD5 kodete passord.");
define("INV_IMPORT_CLIENTS_CSV_HELP_TEXT_5", "Dersom en 'land' kolonne er inkludert, må verdien være en 2-tegn ISO kode. Dersom det ikke inkludert noen 'land' kolonne eller verdien er blank, vil kundeoppføringen(e) bli satt til det samme land som den valgte forhandler.");
define("INV_IMPORT_ALL_USERS", "Importer alt");
define("INV_IMPORT_SELECT_USERS", "Velg brukere");
define("INV_IMPORT_CSV", "Importer CSV");
define("INV_EXPORT_CLIENTS_CSV", "CSV Fil");
define("INV_INSTR_EXPORT_CLIENTS_CSV", "Eksporter kundeoppføringer til en CSV fil.");
define("INV_EXPORT_CSV", "Last ned CSV");
define("INV_INSTR_IMPORT_CLIENTS_VENDOR", "Velg en forhandler du ønsker å importere kundeoppføringer fra.");
define("INV_INSTR_EXPORT_CLIENTS_VENDOR", "Velg forhandler du ønsker å eksportere kundeoppføringer for.");
define("INV_IMPORT_CLIENTS_COMPLETE", "%s ny(e) kundeoppføring(er) er opprettet");
define("INV_SELECT_USERS_TITLE", "Velg brukere");
define("INV_USER_ID", "Bruker ID");
define("INV_USER_PERSON_NAME", "Navn");
define("INV_SELECT_USERS_INTRO", "Kryss av boksene inntil brukerne du ønsker å importere (du kan bare ta en side med brukere i gangen - bruk rullemeny i bunn av siden for å spesifisere hvor mange brukere som skal vises per side) og klikk på 'Importer' verktøylinjeknappen over for å opprette kundeoppføringer for de valgte brukerne. Bare de brukerne som ikke allerede har en kundeoppføring for den valgte forhandler vises her.");
define("INV_NO_CLIENTS_FOUND", "Ingen kundeoppføring ble funnet for denne forhandleren - det er ingenting å eksportere!");
define("INV_CLIENT_CSV_IMPORTED", "CSV importering er ferdig.");
define("INV_CLIENT_CSV_IMPORT_NEW_USERS", "%s nye brukere ble opprettet.");
define("INV_CLIENT_CSV_IMPORT_NEW_CLIENTS", "%s kundeoppføringer ble opprettet eller oppdatert");
define("INV_CLIENT_CSV_IMPORT_ERRORS", "ADVARSEL! %s databasefeil oppstod under importeringen. Feilmeldingen(e) vises nedenfor (maks 10 element vises)");
@define("INV_USER_NAME", "Brukernavn");
?>