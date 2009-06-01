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

//Clients
define("INV_CLIENTS_TITLE", "Kunder");
define("INV_WEBSITE", "Nettside");
define("INV_TELEPHONE", "Telefon");
define("INV_TELEPHONE_2", "Telefon 2");
define("INV_CLIENT_NAME_REQUIRED", "Angi et firmanavn eller et navn på kontaktperson (eller begge deler).");
define("INV_USERNAME_PASSWORD_REQUIRED", "For å opprette en ny bruker, er brukernavn og passord en nødvendighet");
define("INV_EDIT_CLIENT", "Rediger kunde");
define("INV_NEW_CLIENT", "Ny kunde");
define("INV_CLIENT_DETAILS", "Kunde detaljer");
define("INV_CLIENT_USER", "Relatert bruker");
define("INV_CREATE_USER", "[Opprett ny bruker]");
define("INV_COMPANY_NAME", "Firmanavn");
define("INV_CONTACT_NAME", "Kontaktnavn");
define("INV_CLIENT_ADD_NAME_TO_INVOICE", "Legg til kontaktnavn på faktura?");
define("INV_ADDRESS_1", "Adresse 1");
define("INV_ADDRESS_2", "Adresse Line 2");
define("INV_ADDRESS_3", "Adresse Line 3");
define("INV_TOWN", "By");
define("INV_STATE", "Fylke");
define("INV_POSTCODE", "Postnummer");
define("INV_CLIENT_COUNTRY", "Land");
define("INV_CLIENT_REFERENCE", "Kundereferanse");
define("INV_MOBILE", "Mobiltelefon");
define("INV_FAX", "Faks");
define("INV_CLIENT_CURRENCY", "Standard valuta");
define("INV_CLIENT_TAX_ZONE", "Kundens moms");
define("INV_CREDIT_AMOUNT", "Kredittbeløp");
define("INV_CREDIT_TAX_AMOUNT", "Kreditt MVA");
define("INV_CREDIT_LEDGER_CODE", "Kreditt hovedbok-kode");
define("INV_CREDIT_CURRENCY", "Kreditt valuta");
define("INV_CREDIT_DESC", "Kreditt beskrivelse");
define("INV_AUTO_DEDUCT", "Automoatisk trekk");
define("INV_INSTR_COMPANY_NAME", "Navn på kontaktens firma - du kan la dette stå tomt hvis du vil, så lenge du skriver inn et navn under.");
define("INV_INSTR_CONTACT_NAME", "Navnet på din kontaktperson  - du kan la dette stå tomt hvis du vil, så lenge du skriver inn et firmanavn ovenfor.");
define("INV_INSTR_CLIENT_ADD_NAME_TO_INVOICE", "Hvis både firmanavn og kontaktperson er definert, kan du velge om du vil vise navn på fakturaer (hvis bare en er definert, brukes uavhengig verdien av denne innstillingen).");
define("INV_INSTR_ADDRESS", "Angi faktureringsadressen som vises på fakturaene.");
define("INV_INSTR_CLIENT_COUNTRY", "Adresselinjen "/land/" (brukes for å bestemme skattesatsen hvis dette er relevant)");
define("INV_INSTR_CLIENT_USER", "Velg brukerposten for å legge denne klienten til. MERK: Dette vil gi den valgte brukeren tilgang til fakturaer for denne klienten - vær forsiktig!");
define("INV_INSTR_CLIENT_USER_ID", "Angi den numeriske bruker-IDen til brukerposten for å legge denne kunden til (se <a href=\"index2.php?option=com_users&task=view\"> brukeradministrasjonssystemet </ a> - bruker-IDen er det siste elementet på listen til høyre) MERK: Dette vil gi den valgte brukeren tilgang til fakturaer for denne kunden - Vær forsiktig, og vær sikker på at du får riktig bruker id!. Hvis du ønsker å se en liste over brukere og plukke fra den i stedet for å skrive inn bruker-ID-nummeret, kan du sette dette opp på <a href=\"index2.php?option=com_netinvoice&action=configuration\"> konfigurasjonsside </ a>.");
define("INV_INSTR_CLIENT_REFERENCE", "Dette er din referanse som vises på kundens fakturaer - velg noe kort og enkelt som vil hjelpe deg å identifisere unden.");
define("INV_INSTR_EMAIL_ADDRESS", "Dette er e-postadressen som fakturaer skal sendes til (hvis automatisk e-post faktura er valgt for orderen som fakturaen gjelder)");
define("INV_INSTR_WEBSITE", "Kun for din egen referanse.");
define("INV_INSTR_TELEPHONE", "");
define("INV_INSTR_TELEPHONE_2", "Om ønskelig, fyll inn et ekstra telefonnummer.");
define("INV_INSTR_MOBILE", "");
define("INV_INSTR_FAX", "");
define("INV_INSTR_CLIENT_CURRENCY", "Velg en standard valuta som denne kunden skal ha på ordrene.");
define("INV_INSTR_CLIENT_TAX_ZONE", "Hvis du har satt opp forskjellige skattenivåer for ulike skatte-soner, kan du angi skattesone koden for denne kunden.");
define("INV_INSTR_CREDIT_AMOUNT", "Kreditt denne kunden kan ha på kontoen (netto etter skatt).");
define("INV_INSTR_CREDIT_TAX_AMOUNT", "Kreditt hos denne kunden som representerer skatt (for eksempel der hvor det er blitt betalt formye og noe skatt må tilbakebetales).");
define("INV_INSTR_CREDIT_CURRENCY", "Valuta av kredittbeløpet hos denne kunden");
define("INV_INSTR_CREDIT_LEDGER_CODE", "Nominal ledger code against which the credit should be recorded (at the time of refund).");
define("INV_INSTR_CREDIT_DESC", "Beskrivelsen vises på fakturaen når kredittbeløpet trekkes.");
define("INV_INSTR_AUTO_DEDUCT", "Automatisk trekk beløpet fra neste faktura (bare hvis fakturaen er i samme valuta som kredittbeløpet).");
define("INV_CLIENT_DELETED", "Kunden er slettet");
define("INV_ERR_CLIENT_COULD_NOT_CREATE_USER", "Beklager, brukeren ble ikke opprettet!");
define("INV_INSTR_EMAIL_INVOICE_OPTIONS_CLIENT", "Spesifisere fakturavarsel når nye fakturaer genereres for denne kunden. <strong> Merk: </ strong> Hvis du sender automatisk e-post, er det sterkt anbefalt å sikre at alle kunder er tilknyttet brukere slik at de kan logge seg på nettsiden grensesnittkonfigurasjon å angi sine innstillinger og vise sine fakturaer. ");
define("INV_ACTIVE_CLIENTS_ONLY", "Kunder med aktive ordrer");
define("INV_INACTIVE_CLIENTS_ONLY", "Kunder uten aktive ordre");
@define("INV_USERNAME", "Brukernavn");
@define("INV_PASSWORD", "Passord");
define("INV_CLIENT_REMINDER_EMAILS", "Påminnelse på e-post?");
define("INV_INSTR_CLIENT_REMINDER_EMAILS", "Om ikke påminner e-post til denne kunden (hvis aktuelt) - se påminnelser for mer informasjon. ");

//Version 1.2.0
define("INV_CLIENT_UNDER_MAMBOT_CONTROL", "Denne brukerens tilgang til området kontrolleres av programtillegg for brukerabonnement. Du kan klikke på dette ikonet for å fjerne alle restriksjoner på denne brukerens tilgang til nettstedet.");
define("INV_CLIENT_CANCEL_MAMBOT_CONTROL", "Er du sikker på at du vil fjerne denne brukeren fra å bli kontrollert av programtillegg for brukerabonnement? ");
define("INV_CLIENT_MAMBOT_CONTROL_CANCELLED", "Den valgte brukeren kan ikke lenger styres av programtillegg for brukerabonnement ");

//Version 1.2.1
define("INV_CLIENT_VIEW_ORDERS", "Se denne kundens ordrer");

//Version 1.2.6
define("INV_CLIENT_ACTION", "Handling");
define("INV_CLIENT_VIEW_INVOICES", "Vis kundens fakturaer");
define("INV_CLIENT_NEW_ORDER", "Opprett ny bestilling for denne kunden");
define("INV_CLIENT_NEW_INVOICE", "Opprett ny faktura for denne kunden");
define("INV_CLIENT_NEW_REFUND", "Opprett ny kredittnota for denne kunden");
?>