<?php
/**
* Language file for Quotes
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

define("NBILL_QUOTES_TITLE", "Prisforespørsel");
define("NBILL_QUOTES_INTRO", "Du kan opprette egendefinerte prisforespørsler for eksisterende eller potensielle kunder. Prisforespørsler kan enten opprettet av en administrator, eller automatisk når noen fyller inn et prisforespørselsskjema. Når en prisforespørsel er akseptert, kan bestilling og/eller faktura genereres automatisk basert på prisforespørselen.");
define("NBILL_INVOICE_NUMBER_QU", "Forespørsels nr");
define("NBILL_INVOICE_DATE_QU", "Forespørsels dato");
define("NBILL_FIRST_ITEM_QU", "Første post på forespørsel");
define("NBILL_EDIT_INVOICE_QU", "Rediger forespørsel");
define("NBILL_EMAIL_NOW_QU", "Send denne forespørselen til kontakten via e-post nå");
define("NBILL_BILLING_NAME_REQUIRED_QU", "Vennligst skriv inn et kontaktnavn");
define("NBILL_NEW_INVOICE_QU", "Ny prisforespørsel");
define("NBILL_INVOICE_DETAILS_QU", "Forespørselsdetaljer");
define("NBILL_INSTR_INVOICE_NUMBER_QU", "<strong>Merk:</strong> La stå tom hvis du legger til en ny prisforespørsel - komponenten vil automatisk tildele neste tilgjengelige nummer.");
define("NBILL_INSTR_BILLING_NAME_QU", "Navnet på personen og/eller selskapet blir forespurt.");
define("NBILL_BILLING_NAME_QU", "Kundenavn");
define("NBILL_BILLING_ADDRESS_QU", "Kundeadresse");
define("NBILL_BILLING_COUNTRY_QU", "Land");
define("NBILL_INVOICE_ITEMS_QU", "Tilbudsartikler");
define("NBILL_INSTR_VENDOR_NAME_QU", "Skriv inn navnet som skal vises på forespørselen");
define("NBILL_INSTR_VENDOR_ADDRESS_QU", "Skriv inn adressen som skal vises på forespørselen");
define("NBILL_INVOICE_RECORD_LIMIT_WARNING_QU", "ADVARSEL! Etter som det er %s eller flere kontakter i databasen, vises bare de første %s i listen ovenfor. Hvis kontakten ikke er her, kan du bruke ikonet ’Opprette nytt tilbud’ i kontaktlisten (den aktuelle posten vil da automatisk bli valgt her).");
define("NBILL_INVOICE_TOTAL_THIS_PAGE_QU", "Totalt for alle forespørsler vises på DENNE siden:");
define("NBILL_INVOICE_TOTAL_ALL_PAGES_QU", "Totalt for ALLE forespørsler på ALLE sider for den valgte tidsperioden:");
define("NBILL_QUOTE_STATUS", "Status");
define("NBILL_INSTR_QUOTE_STATUS", "NY betyr at kunden eller en potensiell kunde har bedt om et tilbud, men du har ennå ikke sluttført prisen (de produkter du har lagt til forespørselen er ikke synlig for brukeren). <br />PÅ HOLD betyr at du venter på ytterligere informasjon fra kunden(de produkter du har lagt til forespørselen er ikke synlig for brukeren). <br />GITT TILBUD betyr at du har gitt pris (de produkter du har lagt til forespørselen, inkludert totalprisen, er synlig for brukeren). <br />AKSEPTERT betyr at brukeren har akseptert hele tilbudet - typisk ville dette resultere i at en eller flere bestillinger eller fakturaer blir opprettet. <br /> DELVIS AKSEPTERT betyr at de har akseptert en eller flere artikler, men ikke alle artiklene på tilbudet - typisk ville dette resultere i at en eller flere bestillinger eller fakturaer blir opprettet. <br />FORKASTET betyr at brukeren har avvist hele tilbudet.");
define("NBILL_QUOTE_CLIENT_REQUIRED", "Velg en kunde (eller potensielle kunder)");
define("NBILL_QUOTE_CORRESPONDENCE", "Korrespondanse");
define("NBILL_INSTR_QUOTE_CORRESPONDENCE", "Opplysninger som ble angitt av brukeren på forespørselsskjemaet, samt eventuelle korrespondanse eller ytterligere informasjon. Alt angitt her er alltid synlig for brukeren.");
define("NBILL_QUOTE_PAY_FREQ", "Betalingsfrekvens");
define("NBILL_QUOTE_AUTO_RENEW", "Automatisk fornyelse?");
define("NBILL_QUOTE_RELATING_TO", "Knyttet til");
define("NBILL_QUOTE_UNIQUE_INVOICE", "Unik faktura?");
define("NBILL_QUOTE_ITEM_MANDATORY", "Obligatorisk artikkel?");
define("NBILL_QUOTE_ITEM_ACCEPTED", "Artikkel godtatt?");
define("NBILL_QUOTE_SAVED", "Tilbudet er lagret. ");
define("NBILL_QUOTE_ON_HOLD_MESSAGE_INTRO", "Status på tilbudet er '" . (defined('NBILL_STATUS_QUOTE_ON_HOLD') ? NBILL_STATUS_QUOTE_ON_HOLD : 'PÅ HOLD') . "'. Hvis du ønsker å sende en melding til kunden og be om ytterligere informasjon, vennligst skriv inn din beskjed nedenfor og klikk på send. Meldingen vil bli lagret på tilbudet.");
define("NBILL_QUOTE_QUOTED_MESSAGE_INTRO", "Status på tilbudet er '" . (defined('NBILL_STATUS_QUOTE_QUOTED') ? NBILL_STATUS_QUOTE_QUOTED : 'GITT TILBUD') . "'. Hvis du ønsker å sende tilbudet til kunden, vennligst skriv eller endre meldingen under og klikk på send.");
define("NBILL_QUOTE_GENERATE_INTRO", "En eller flere artikler på dette tilbudet er markert som akseptert. Dersom du ønsker å generere en bestilling og/eller faktura for disse artiklene, bekrefte opplysningene nedenfor og klikk på ’Generer’.");
define("NBILL_NO_ACCEPTED_ITEMS", "Ingen artikler er merket som akseptert. Du kan ikke generere bestillinger eller fakturaer for dette tilbudet.");
define("NBILL_QUOTE_CREATE_ORDER", "Lag bestilling?");
define("NBILL_QUOTE_CREATE_INVOICE", "Lag faktura?");
define("NBILL_QUOTE_GENERATE_RECORDS", "Generer");
define("NBILL_QUOTE_GENERATE_ABORT", "Avbryt");
define("NBILL_QUOTE_ORDER_NEXT_DUE", "Neste forfallsdato");
define("NBILL_QUOTE_PAY_TO_ACCEPT", "Krever betaling for å godtat?");
define("NBILL_INSTR_QUOTE_PAY_TO_ACCEPT", "Hvorvidt kunden må gå til betalingsprosessen før de får lov å akseptere tilbudet. Hvis den valgte betalingsplan (spesifisert ovenfor) indikerer en utsatt betaling, kreves ingen betaling og de aktuelle ordre/faktura postene vil bli opprettet umiddelbart, hvis det er aktuelt.");
define("NBILL_QUOTE_AUTO_CREATE_ORDERS", "Lag bestilling(er) automatisk?");
define("NBILL_INSTR_QUOTE_AUTO_CREATE_ORDERS", "Om du automatisk vil opprette en bestilling for hver artikkel på tilbudet som er akseptert av kunden. Hvis en betaling er nødvendig for å akseptere tilbudet (spesifisert ovenfor), vil dette bare skjer når betalingen er bekreftet av betalingsløsningen, eller hvis en administrator genererer posten(e).");
define("NBILL_QUOTE_AUTO_CREATE_INVOICES", "Lag faktura(er) automatisk?");
define("NBILL_INSTR_QUOTE_AUTO_CREATE_INVOICES", "Om du automatisk vil opprette en faktura for hver artikkel på tilbudet som er akseptert av kunden. Hvis en betaling er nødvendig for å akseptere tilbudet (spesifisert ovenfor), vil dette bare skjer når betalingen er bekreftet av betalingsløsningen, eller hvis en administrator genererer posten(e).");
define("NBILL_QUOTE_AUTO_CREATE_INCOME", "Lag inntekt(er)automatisk?");
define("NBILL_INSTR_QUOTE_AUTO_CREATE_INCOME", "Om du automatisk vil opprette inntekt(er) for hver artikkel på tilbudet som er akseptert og betalt av kunden. Dette skjer bare når betalingen er bekreftet av betalingsløsningen.");
define("NBILL_QUOTE_RECORDS_GENERATED", "%s Bestilling(er) og %s faktura(er) generert.");
define("NBILL_QUOTE_RECORDS_GENERATED_ERRORS", "ADVARSEL! Følgende feil oppstod: ");
define("NBILL_QUOTE_GENERATE_WARNING_ORDERS", "ADVARSEL! Følgende ordreposter er allerede blitt generert basert på dette tilbudet: ");
define("NBILL_QUOTE_GENERATE_WARNING_INVOICES", "ADVARSEL! Følgende fakturaposter er allerede blitt generert basert på dette tilbudet: ");
define("NBILL_WARNING_QUOTE_ACCEPTED", "ADVARSEL! Dette tilbudet er allerede akseptert. Er du sikker på at du vil endre det?");
define("NBILL_WARNING_QUOTE_PART_ACCEPTED", "ADVARSEL! Dette tilbudet er allerede delvis akseptert. Er du sikker på at du vil endre det?");