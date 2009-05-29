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

//Income
define("INV_INCOME_TITLE", "Inntekt");
define("INV_INCOME_INTRO", "Du kan liste inntekt her enten du har faktura for den eller ikke. Hvis du lister all inntekt her, kan du bruke denne lista til � sjekke mot kontooversikten fra banken.");
define("INV_INCOME_RECEIPT_NO", "Kvittering nummer");
define("INV_INCOME_DATE", "Dato");
define("INV_INCOME_AMOUNT", "Bel�p");
define("INV_INCOME_INVOICE_NO", "Faktura");
define("INV_EDIT_INCOME", "Endre inntekt");
define("INV_NEW_INCOME", "Ny inntekt");
define("INV_NO_INVOICE_NO", "Intet faktura nummer");
define("INV_INCOME_DETAILS", "Inntekt detaljer");
define("INV_RELATED_INVOICE", "Relaterte fakturaer");
define("INV_RECEIVED_FROM", "Mottatt fra");
define("INV_PAYMENT_METHOD", "Betalingsm�te");
define("INV_AMOUNT_RECEIVED", "Mottatt bel�p");
define("INV_DATE_RECEIVED", "Dato mottatt");
define("INV_RECEIPT_REFERENCE", "Referanse");
define("INV_INSTR_RECEIPT_NO", "<strong>Merk:</strong> La st� tom hvis du legger til en ny kvittering - komponenten vil automatisk bruke neste tilgjengelige kvitteringsnummer.");
define("INV_INSTR_RELATED_INVOICE", "Hvis denne kvitteringen gjelder betaling av en eller flere fakturaer, velg fakturaene her (ubetalte fakturaer blir listet her).");
define("INV_INSTR_RECEIVED_FROM", "");
define("INV_INSTR_PAYMENT_METHOD", "");
define("INV_INSTR_AMOUNT_RECEIVED", "Skriv inn bel�pet uten valutasymbol.");
define("INV_INSTR_DATE_RECEIVED", "");
define("INV_INSTR_RECEIPT_REFERENCE", "Du kan bruke dette feltet til hva du vil, men det er ment � hjelpe ved integrasjon mot en betalingsl�sning.  For eksempel kan du her lagre en n�kkelverdi for en databasetabell som lagrer dine automatiske online transaksjoner (for � knytte disse transaksjonene opp mot din inntektsliste).  Hvis du bruker det p� denne m�ten, m� du neppe skrive inn denne verdien selv.  Ditt integrasjonsskript burde fylle ut dette automatisk.");
define("INV_CASH", "Cash");
define("INV_CHEQUE", "Sjekk");
define("INV_CREDIT_CARD", "Kredittkort/bankkort");
define("INV_DIRECT_DEBIT", "Direkte belastning");
define("INV_BANK_TRANSFER", "Bank overf�rsel");
define("INV_STANDING_ORDER", "Fast overf�rsel");
define("INV_ONLINE_AGENCY", "Betalingsl�sning (f.eks. PayPal)");
define("INV_OTHER", "Annen");
define("INV_RECEIVED_FOR", "Mottatt for");
define("INV_INSTR_RECEIVED_FOR", "Indiker hva betalingen var for (hvis den ikke er knyttet til en faktura - f.eks. renteutgift)");
define("INV_LEDGER_BREAKDOWN", "Hovedbok detaljvisning");
define("INV_LEDGER_BREAKDOWN_MISMATCH", "ADVARSEL! Summen av hovedbok detaljer stemmer ikke med inntektsbel�pet.  Hvis du allikevel vil lagre, klikk OK, ellers klikk Avbryt og rett opp hovedbok detaljene eller mottatt bel�p.");
define("INV_TAX_RATE_AND_AMOUNT", "Skattesatser og bel�p");
define("INV_INSTR_TAX_RATE_AND_AMOUNT", "Hvis inntekten inkluderer en andel av skatt, kan du angi satsen og bel�pet her (opp til 3 satser per stykk).  Angi kun skattebel�pet, ikke full inntekstbel�p.  Hvis det ikke er skatt p� inntekten, la det st� blankt eller skriv 0.  Denne informasjonen blir bare brukt til � lage din skatteoversikt hvis du betaler skatt p� faktiske mottatte bel�p i motsetning til p� fakturerte bel�p. <strong>VENNLIGST MERK:</strong> N�r du velger en faktura fra listen og den best�r av flere underenheter, da kan skattebel�pet synes en anelse for h�yt i forhold til satsen.  Dette er fordi skatter for individuelle enheter blir avrundet oppover, og dette er derfor IKKE en feil.");
define("INV_NET_RECEIPT", "Netto inn");
define("INV_INSTR_NET_RECEIPT", "Bel�pet mottatt etter at skatt er trukket fra.");
define("INV_INCOME_TAX_RATE", "Sats");
define("INV_INCOME_TAX_AMOUNT", "Bel�p");
define("INV_SELECT_VENDOR_FOR_RECEIPT_NO_GEN", "Generering av kvitteringsnummer er kun tilgjengelig n�r en selger er valgt");
define("INV_GENERATE_RECEIPTS_UP_TO", "Skriv inn datoen (YYYY/MM/DD) du vil generere nummer opp til. Kvitteringer ETTER denne datoen vil ikke f� kvitteringsnummer lagd for seg.");
define("INV_GENERATE_RECEIPT_NOS", "Generer kvitteringsnummer");
define("INV_RECEIPT_NOS_GENERATED", "%s Kvitteringsnummer laget%s");
define("INV_UNNUMBERED", "Ikke nummerert enda");
define("INV_INCOME_NO_SUMMARY", "Ikke ta med i skatteoversikten?");
define("INV_INSTR_INCOME_NO_SUMMARY", "Hvis du vil at denne inntekten skal ignoreres n�r skatteoversikten blir lagd, sett dette valget til 'Ja'.  For eksempel i Storbritannia kan det v�re typer av inntekt som ikke skal inkluderes p� selvangivelsen (som f.eks. penger fra en forsikringsutbetaling).  Men vanligvis skal inntekten tas med.");
define("INV_INCOME_FROM_REQUIRED", "Vennligst angi fra hvem denne inntekten ble mottatt.");
@define("INV_GENERATE_MASTER", "ADVARSEL! Dette vil ogs� generere kvitteringsnummer for MASTER databasen(e)!");

//Version 1.2.6
define("INV_INCOME_RECORD_LIMIT_WARNING", "ADVARSEL! Ettersom det er %s eller mer ubetalte fakturaer i databasen, har bare de f�rste %s radene blitt tatt med i listen. Hvis den du ser etter ikke er i listen, kan du enten klikke p� 'Vis alle' nedenfor, eller merke den som betalt p� fakturalisten.  Da vil den automatisk bli valgt her.");

//Version 1.2.7
define("INV_INCOME_SHOW_ALL", "Vis alle");
?>