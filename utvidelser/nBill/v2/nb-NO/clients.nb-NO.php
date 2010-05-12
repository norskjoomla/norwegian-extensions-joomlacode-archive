<?php
/**
* Language file for Clients
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

//Clients
define("NBILL_CLIENTS_TITLE", "Kunder");
define("NBILL_CLIENT_USER", "Brukernavn");
define("NBILL_WEBSITE", "Nettside");
define("NBILL_TELEPHONE", "Telefon");
define("NBILL_TELEPHONE_2", "Telefon 2");
define("NBILL_USERNAME_PASSWORD_EMAIL_REQUIRED", "Et brukernavn, passord og e-postadresse er påkrevd for å opprette en ny bruker");
define("NBILL_EDIT_CLIENT", "Rediger kunde");
define("NBILL_NEW_CLIENT", "Ny kunde");
define("NBILL_CLIENT_DETAILS", "Kundedetaljer");
define("NBILL_COMPANY_NAME", "Firmanavn");
define("NBILL_CLIENT_ADD_NAME_TO_INVOICE", "Legg til kontaktnavn på faktura?");
define("NBILL_ADDRESS_1", "Adresse 1");
define("NBILL_ADDRESS_2", "Adresse 2");
define("NBILL_ADDRESS_3", "Adresse 3");
define("NBILL_TOWN", "By");
define("NBILL_STATE", "Fylke");
define("NBILL_POSTCODE", "Postnummer");
define("NBILL_CLIENT_COUNTRY", "Land");
define("NBILL_CLIENT_REFERENCE", "Kundereferanse");
define("NBILL_MOBILE", "Mobiltelefon");
define("NBILL_FAX", "Faks");
define("NBILL_CLIENT_CURRENCY", "Standard valuta");
define("NBILL_CLIENT_TAX_ZONE", "Kundens avgiftssone");
define("NBILL_CREDIT_AMOUNT", "Kredittbeløp");
define("NBILL_CREDIT_TAX_AMOUNT", "Kreditt avgiftsbeløp");
define("NBILL_CREDIT_LEDGER_CODE", "Kreditt hovedbokskode");
define("NBILL_CREDIT_CURRENCY", "Kredittvaluta");
define("NBILL_CREDIT_DESC", "Kredittbeskrivelse");
define("NBILL_AUTO_DEDUCT", "Automatisk trekk");
define("NBILL_INSTR_COMPANY_NAME", "Navn på kundens firma");
define("NBILL_INSTR_CLIENT_ADD_NAME_TO_INVOICE", "Hvis både firmanavn og kontaktperson er definert, kan du velge om du vil vise navn på fakturaer (hvis bare en er definert, vil den brukes uavhengig av denne innstillingen).");
define("NBILL_INSTR_ADDRESS", "Angi faktureringsadressen som vises på fakturaene.");
define("NBILL_INSTR_CLIENT_COUNTRY", "Land for fakturaadresse (brukes for å bestemme avgiftssatsen hvis dette er relevant)");
define("NBILL_INSTR_CLIENT_REFERENCE", "Dette er din referanse som vises på kundens fakturaer - velg noe kort og enkelt som vil hjelpe deg å identifisere kunden.");
define("NBILL_INSTR_WEBSITE", "Kun for din egen referanse.");
define("NBILL_INSTR_TELEPHONE", "");
define("NBILL_INSTR_TELEPHONE_2", "Om ønskelig, fyll inn et ekstra telefonnummer.");
define("NBILL_INSTR_MOBILE", "");
define("NBILL_INSTR_FAX", "");
define("NBILL_INSTR_CLIENT_CURRENCY", "Velg en standard valuta som denne kunden skal ha på ordrene.");
define("NBILL_INSTR_CLIENT_TAX_ZONE", "Hvis du har satt opp forskjellige avgiftsnivåer for ulike land, kan du angi avgiftskoden for denne kunden.");
define("NBILL_INSTR_CREDIT_AMOUNT", "Kreditt denne kunden kan ha på kontoen (netto etter avgift).");
define("NBILL_INSTR_CREDIT_TAX_AMOUNT", "Kreditt hos denne kunden som representerer avgift (for eksempel om det er blitt betalt formye og noe avgift må tilbakebetales).");
define("NBILL_INSTR_CREDIT_CURRENCY", "Valuta av kredittbeløpet hos denne kunden");
define("NBILL_INSTR_CREDIT_LEDGER_CODE", "Hovedbokskode som kreditt skal føres mot (ved refundering).");
define("NBILL_INSTR_CREDIT_DESC", "Beskrivelsen vises på fakturaen når kredittbeløpet trekkes.");
define("NBILL_INSTR_AUTO_DEDUCT", "Trekk beløpet automatisk fra neste faktura (bare hvis fakturaen er i samme valuta som kredittbeløpet).");
define("NBILL_CLIENT_DELETED", "Kunden er slettet");
define("NBILL_INSTR_EMAIL_INVOICE_OPTIONS_CLIENT", "Spesifiser fakturavarsel når nye fakturaer genereres for denne kunden. <strong> Merk: </ strong> Hvis du sender automatisk e-post, er det sterkt anbefalt å sikre at alle kunder er tilknyttet brukere slik at de kan logge seg på nettsidens grensesnittkonfigurasjon å angi sine innstillinger og vise sine fakturaer. ");
define("NBILL_ACTIVE_CLIENTS_ONLY", "Kunder med aktive ordrer");
define("NBILL_INACTIVE_CLIENTS_ONLY", "Kunder uten aktive ordrer");
define("NBILL_CLIENT_REMINDER_EMAILS", "Påminnelse på e-post?");
define("NBILL_INSTR_CLIENT_REMINDER_EMAILS", "Hvorvidt det skal sendes påminnelses e-poster til denne kunden (hvis aktuelt) - se funksjonen for påminnelser for mer informasjon.");

//Version 1.2.1
define("NBILL_CLIENT_VIEW_ORDERS", "Se denne kundens ordrer");

//Version 1.2.6
define("NBILL_CLIENT_ACTION", "Handling");
define("NBILL_CLIENT_VIEW_INVOICES", "Vis kundens fakturaer");
define("NBILL_CLIENT_NEW_ORDER", "Opprett ny bestilling for denne kunden");
define("NBILL_CLIENT_NEW_INVOICE", "Opprett ny faktura for denne kunden");
define("NBILL_CLIENT_NEW_REFUND", "Opprett ny kredittnota for denne kunden");

//Version 2.0.0
define("NBILL_CLIENT_TAB_CLIENT", "Kunde");
define("NBILL_CLIENT_PRIMARY", "Hovedkontakt");
define("NBILL_INSTR_CLIENT_PRIMARY", "Velg hvilken kontakt som er hovedkontakt for fakturering for denne kunden");
define("NBILL_CONTACT_NAME_UNKNOWN", "[Navn ukjent]");
define("NBILL_CLIENT_NO_IFRAMES", "Din nettleser støtter ikke integrert ramme - vennligst klikk på følgende lenken for å redigere denne kontakten: %s");
define("NBILL_CLIENT_NEW_CONTACT", "Opprett ny bruker");
define("NBILL_CLIENT_ASSIGN_CONTACT", "Tilordne kontakt");
define("NBILL_CLIENT_REMOVE_CONTACT", "Fjern denne kontakten");
define("NBILL_CLIENT_DELETE_CONTACT", "Slett denne kontakten");
define("NBILL_CLIENT_CONTACT_DELETE_SURE", "Du har valgt PERMANENT Å SLETTE %s kontakt(er). Er du sikker på at du vil fortsette?");
define("NBILL_CLIENT_CONTACT_FILTER", "Skriv inn navnet eller en del av navnet på kontakten du vil tildele, og klikk på 'Utfør'.");
define("NBILL_CLIENT_CONTACT_FILTER_GO", "Utfør");
define("NBILL_CLIENT_CONTACT_PERMISSIONS", "Kontaktens rettigheter");
define("NBILL_CLIENT_UPDATE_PROFILE", "Oppdater kundeprofilen?");
define("NBILL_INSTR_CLIENT_UPDATE_PROFILE", "Hvorvidt denne kontakten kan oppdatere kundedetaljene på profilen eller ikke (f. eks firmanavn og adresse).");
define("NBILL_CLIENT_ACCESS_ORDERS", "Tilgang til bestillinger?");
define("NBILL_INSTR_CLIENT_ACCESS_ORDERS", "Hvorvidt denne kontakten har tilgang til bestillingsdetaljene for denne kunden (inkludert muligheten til å fornye, hvis det er aktuelt).");
define("NBILL_CLIENT_ACCESS_INVOICES", "Tilgang til faktura?");
define("NBILL_INSTR_CLIENT_ACCESS_INVOICES", "Hvorvidt denne kontakten har tilgang til fakturadetaljene for denne kunden.");
define("NBILL_CLIENT_ACCESS_QUOTES", "Tilgang til anbud?");
define("NBILL_INSTR_CLIENT_ACCESS_QUOTES", "Hvorvidt denne kontakten har tilgang til anbudsdetaljene for denne kunden (i tillegg til egne anbud de kan ha bedt om seg selv).");
define("NBILL_CLIENT_ALLOW_OPT_IN", "Tillat å velge påminnelse?");
define("NBILL_INSTR_CLIENT_ALLOW_OPT_IN", "Hvorvidt denne kontakt selv kan velge å motta påminnelse på e-post.");
define("NBILL_CLIENT_CREDIT", "Kundekreditt");
define("NBILL_CREDIT_TAX_RATE", "Skattesats");
define("NBILL_INSTR_CREDIT_TAX_RATE", "Avgiftssats benyttet hvor beløpet av all kreditt for denne kunden inkluderer et avgiftsbeløp (f. eks der det er betalt for mye og en avgift må tilbakebetales).");
define("NBILL_CLIENT_CUSTOM_FIELDS", "Egendefinerte felt");
define("NBILL_CLIENT_NEW_QUOTE", "Opprett nytt anbud for denne kunden");
define("NBILL_CLIENT_VIEW_QUOTES", "Se anbud for denne kunden");