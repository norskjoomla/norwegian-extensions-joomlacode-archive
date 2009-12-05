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

//Clients
define("NBILL_CLIENTS_TITLE", "Kunder");
define("NBILL_WEBSITE", "Nettside");
define("NBILL_TELEPHONE", "Telefon");
define("NBILL_TELEPHONE_2", "Telefon 2");
define("NBILL_CLIENT_NAME_REQUIRED", "Angi et firmanavn eller et navn p� kontaktperson (eller begge deler).");
define("NBILL_USERNAME_PASSWORD_REQUIRED", "For � opprette en ny bruker, er b�de brukernavn og passord n�dvendig");
define("NBILL_EDIT_CLIENT", "Rediger kunde");
define("NBILL_NEW_CLIENT", "Ny kunde");
define("NBILL_CLIENT_DETAILS", "Kundedetaljer");
define("NBILL_CLIENT_USER", "Relatert bruker");
define("NBILL_CREATE_USER", "[Opprett ny bruker]");
define("NBILL_COMPANY_NAME", "Firmanavn");
define("NBILL_CONTACT_NAME", "Kontaktnavn");
define("NBILL_CLIENT_ADD_NAME_TO_INVOICE", "Legg til kontaktnavn p� faktura?");
define("NBILL_ADDRESS_1", "Adresse 1");
define("NBILL_ADDRESS_2", "Adresse Line 2");
define("NBILL_ADDRESS_3", "Adresse Line 3");
define("NBILL_TOWN", "By");
define("NBILL_STATE", "Fylke");
define("NBILL_POSTCODE", "Postnummer");
define("NBILL_CLIENT_COUNTRY", "Land");
define("NBILL_CLIENT_REFERENCE", "Kundereferanse");
define("NBILL_MOBILE", "Mobiltelefon");
define("NBILL_FAX", "Faks");
define("NBILL_CLIENT_CURRENCY", "Standard valuta");
define("NBILL_CLIENT_TAX_ZONE", "Kundens MVA");
define("NBILL_CREDIT_AMOUNT", "Kredittbel�p");
define("NBILL_CREDIT_TAX_AMOUNT", "Kreditt MVA");
define("NBILL_CREDIT_LEDGER_CODE", "Kreditt hovedbok-kode");
define("NBILL_CREDIT_CURRENCY", "Kredittvaluta");
define("NBILL_CREDIT_DESC", "Kredittbeskrivelse");
define("NBILL_AUTO_DEDUCT", "Automatisk trekk");
define("NBILL_INSTR_COMPANY_NAME", "Navn p� kontaktens firma - du kan la dette st� tomt hvis du vil, s� lenge du skriver inn et navn under.");
define("NBILL_INSTR_CONTACT_NAME", "Navnet p� din kontaktperson  - du kan la dette st� tomt hvis du vil, s� lenge du skriver inn et firmanavn ovenfor.");
define("NBILL_INSTR_CLIENT_ADD_NAME_TO_INVOICE", "Hvis b�de firmanavn og kontaktperson er definert, kan du velge om du vil vise navn p� fakturaer (hvis bare en er definert, brukes uavhengig verdien av denne innstillingen).");
define("NBILL_INSTR_ADDRESS", "Angi faktureringsadressen som vises p� fakturaene.");
define("NBILL_INSTR_CLIENT_COUNTRY", "Adresselinjen \"land\" (brukes for � bestemme avgiftssatsen hvis dette er relevant)");
define("NBILL_INSTR_CLIENT_USER", "Velg brukerposten for � legge denne klienten til. MERK: Dette vil gi den valgte brukeren tilgang til fakturaer for denne klienten - v�r forsiktig!");
define("NBILL_INSTR_CLIENT_USER_ID", "Angi den numeriske bruker-IDen til brukerposten for � legge denne kunden til (se <a href=\"index2.php?option=com_users&task=view\"> brukeradministrasjonssystemet </ a> - bruker-IDen er det siste elementet p� listen til h�yre) MERK: Dette vil gi den valgte brukeren tilgang til fakturaer for denne kunden - V�r forsiktig, og v�r sikker p� at du f�r riktig bruker-ID!. Hvis du �nsker � se en liste over brukere og plukke fra den i stedet for � skrive inn bruker-ID-nummeret, kan du sette dette opp p� <a href=\"index2.php?option=com_netinvoice&action=configuration\"> konfigurasjonsside </ a>.");
define("NBILL_INSTR_CLIENT_REFERENCE", "Dette er din referanse som vises p� kundens fakturaer - velg noe kort og enkelt som vil hjelpe deg � identifisere kunden.");
define("NBILL_INSTR_EMAIL_ADDRESS", "Dette er e-postadressen som fakturaer skal sendes til (hvis automatisk e-postfaktura er valgt for ordren som fakturaen gjelder)");
define("NBILL_INSTR_WEBSITE", "Kun for din egen referanse.");
define("NBILL_INSTR_TELEPHONE", "");
define("NBILL_INSTR_TELEPHONE_2", "Om �nskelig, fyll inn et ekstra telefonnummer.");
define("NBILL_INSTR_MOBILE", "");
define("NBILL_INSTR_FAX", "");
define("NBILL_INSTR_CLIENT_CURRENCY", "Velg en standard valuta som denne kunden skal ha p� ordrene.");
define("NBILL_INSTR_CLIENT_TAX_ZONE", "Hvis du har satt opp forskjellige avgiftsniv�er for ulike land, kan du angi avgiftskoden for denne kunden.");
define("NBILL_INSTR_CREDIT_AMOUNT", "Kreditt denne kunden kan ha p� kontoen (netto etter avgift).");
define("NBILL_INSTR_CREDIT_TAX_AMOUNT", "Kreditt hos denne kunden som representerer avgift (for eksempel om det er blitt betalt formye og noe avgift m� tilbakebetales).");
define("NBILL_INSTR_CREDIT_CURRENCY", "Valuta av kredittbel�pet hos denne kunden");
define("NBILL_INSTR_CREDIT_LEDGER_CODE", "Hovedbok-kode som kreditt skal f�res mot (ved refundering).");
define("NBILL_INSTR_CREDIT_DESC", "Beskrivelsen vises p� fakturaen n�r kredittbel�pet trekkes.");
define("NBILL_INSTR_AUTO_DEDUCT", "Trekk bel�pet automatisk fra neste faktura (bare hvis fakturaen er i samme valuta som kredittbel�pet).");
define("NBILL_CLIENT_DELETED", "Kunden er slettet");
define("NBILL_ERR_CLIENT_COULD_NOT_CREATE_USER", "Beklager, brukeren ble ikke opprettet!");
define("NBILL_INSTR_EMAIL_INVOICE_OPTIONS_CLIENT", "Spesifiser fakturavarsel n�r nye fakturaer genereres for denne kunden. <strong> Merk: </ strong> Hvis du sender automatisk e-post, er det sterkt anbefalt � sikre at alle kunder er tilknyttet brukere slik at de kan logge seg p� nettsidens grensesnittkonfigurasjon � angi sine innstillinger og vise sine fakturaer. ");
define("NBILL_ACTIVE_CLIENTS_ONLY", "Kunder med aktive ordrer");
define("NBILL_INACTIVE_CLIENTS_ONLY", "Kunder uten aktive ordrer");
@define("NBILL_USERNAME", "Brukernavn");
@define("NBILL_PASSWORD", "Passord");
define("NBILL_CLIENT_REMINDER_EMAILS", "P�minnelse p� e-post?");
define("NBILL_INSTR_CLIENT_REMINDER_EMAILS", "Om ikke p�minner e-post til denne kunden (hvis aktuelt) - se p�minnelser for mer informasjon. ");

//Version 1.2.0
define("NBILL_CLIENT_UNDER_MAMBOT_CONTROL", "Denne brukerens tilgang til omr�det kontrolleres av programtillegg for brukerabonnement. Du kan klikke p� dette ikonet for � fjerne alle restriksjoner p� denne brukerens tilgang til nettstedet.");
define("NBILL_CLIENT_CANCEL_MAMBOT_CONTROL", "Er du sikker p� at du vil fjerne denne brukeren fra � bli kontrollert av programtillegg for brukerabonnement? ");
define("NBILL_CLIENT_MAMBOT_CONTROL_CANCELLED", "Den valgte brukeren kan ikke lenger styres av programtillegg for brukerabonnement ");

//Version 1.2.1
define("NBILL_CLIENT_VIEW_ORDERS", "Se denne kundens ordrer");

//Version 1.2.6
define("NBILL_CLIENT_ACTION", "Handling");
define("NBILL_CLIENT_VIEW_INVOICES", "Vis kundens fakturaer");
define("NBILL_CLIENT_NEW_ORDER", "Opprett ny bestilling for denne kunden");
define("NBILL_CLIENT_NEW_INVOICE", "Opprett ny faktura for denne kunden");
define("NBILL_CLIENT_NEW_REFUND", "Opprett ny kredittnota for denne kunden");
?>
