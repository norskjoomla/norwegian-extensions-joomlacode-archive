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
define("NBILL_INCOME_TITLE", "Inntekt");
define("NBILL_INCOME_INTRO", "Du kan liste alle inntekter her, uansett om du har fakturaer for de eller ikke. Hvis du lister alle inntekter her, kan du bruke denne listen til å sammenligne med din bankutskrift.");
define("NBILL_INCOME_RECEIPT_NO", "Kvitteringsnummer");
define("NBILL_INCOME_DATE", "Dato");
define("NBILL_INCOME_AMOUNT", "Beløp");
define("NBILL_INCOME_INVOICE_NO", "Faktura");
define("NBILL_EDIT_INCOME", "Redigér inntekt");
define("NBILL_NEW_INCOME", "Ny inntekt");
define("NBILL_NO_INVOICE_NO", "Mangler fakturanummer");
define("NBILL_INCOME_DETAILS", "Inntektsdetaljer");
define("NBILL_RELATED_INVOICE", "Relaterte fakturaer");
define("NBILL_RECEIVED_FROM", "Mottatt fra");
define("NBILL_PAYMENT_METHOD", "Betalingsmåte");
define("NBILL_AMOUNT_RECEIVED", "Mottatt beløp");
define("NBILL_DATE_RECEIVED", "Mottatt dato");
define("NBILL_RECEIPT_REFERENCE", "Referanse");
define("NBILL_INSTR_RECEIPT_NO", "<strong>Merk:</strong> La feltet være tomt hvis du legger til ny. Komponenten vil automatisk legge til neste tilgjengelige kvitteringsnummer.");
define("NBILL_INSTR_RELATED_INVOICE", "Hvis denne kvitteringen gjelder for én eller flere fakturaer, velg faktura(er) her (ubetalte fakturaer vises her).");
define("NBILL_INSTR_RECEIVED_FROM", "");
define("NBILL_INSTR_PAYMENT_METHOD", "");
define("NBILL_INSTR_AMOUNT_RECEIVED", "Skriv inn beløpet uten valutasymbol.");
define("NBILL_INSTR_DATE_RECEIVED", "");
define("NBILL_INSTR_RECEIPT_REFERENCE", "Du kan bruke dette feltet til hva du vil, men det er ment brukt for integrasjon mot nettbetalingstjenester. For eksempel kan du lagre nøkkeldata til en separat databasetabell hvor dine automatisete nettransaksjoner blir lagret (for å gjøre det mulig for deg å samkjøre transaksjoner mot inntekter). Hvis du bruker det på denne måten, er det mulig du selv slipper å skrive en verdi selv. Ditt integrasjonsscript skal kunne fylle inn dette automatisk.");
define("NBILL_CASH", "Kontanter");
define("NBILL_CHEQUE", "Sjekk");
define("NBILL_CREDIT_CARD", "Kredittkort");
define("NBILL_DIRECT_DEBIT", "Direktetrekk");
define("NBILL_BANK_TRANSFER", "Bankoverføring");
define("NBILL_STANDING_ORDER", "Fast overførsel");
define("NBILL_ONLINE_AGENCY", "Betalingstjeneste (f.eks. PayPal)");
define("NBILL_OTHER", "Andre");
define("NBILL_RECEIVED_FOR", "Mottatt for");
define("NBILL_INSTR_RECEIVED_FOR", "Indikerer hva betalingen gjelder (hvis den ikke er knyttet opp mot en faktura eller annet)");
define("NBILL_LEDGER_BREAKDOWN", "Hovedbok detaljvisning");
define("NBILL_LEDGER_BREAKDOWN_MISMATCH", "ADVARSEL! Summen av hovedbokdetaljer stemmer ikke med inntektsbeløpet.  Hvis du likevel vil lagre, klikk OK, ellers klikk Avbryt og rett opp hovedbokdetaljene eller mottatt beløp.");
define("NBILL_TAX_RATE_AND_AMOUNT", "Skattesatser og beløp");
define("NBILL_INSTR_TAX_RATE_AND_AMOUNT", "Hvis inntekten inkluderer MVA, kan du spesifisere sats og beløp her (inntil 3 forskjellige satser pr. inntektsenhet). Fyll kun inn summen for faktisk MVA (ikke hele inntekten). Hvis MVA ikke er tilgjengelig, la feltet være tomt eller skriv en null. Hvis det ikke er skatt på inntekten, la det stå blankt eller skriv 0.  Denne informasjonen blir bare brukt til å lage din skatteoversikt hvis du betaler skatt på faktiske mottatte beløp i motsetning til på fakturerte beløp. <strong>VENNLIGST MERK:</strong> Når du velger en faktura fra listen og den består av flere underenheter, kan skattebeløpet synes en anelse for høyt i forhold til satsen.  Dette er fordi skatter for individuelle enheter blir avrundet oppover, og dette er derfor IKKE en feil.");
define("NBILL_NET_RECEIPT", "Nettkvittering");
define("NBILL_INSTR_NET_RECEIPT", "Sum mottatt etter MVA er blitt beregnet.");
define("NBILL_INCOME_TAX_RATE", "MVA-sats");
define("NBILL_INCOME_TAX_AMOUNT", "Beløp");
define("NBILL_SELECT_VENDOR_FOR_RECEIPT_NO_GEN", "Generering av kvitteringsnummer er kun tilgjengelig når en selger er valgt");
define("NBILL_GENERATE_RECEIPTS_UP_TO", "Fyll inn dato (YYYY/MM/DD) du vil generere nummer opp til. Kvitteringer ETTER denne dato vil ikke få tildelt kvitteringsnummer.");
define("NBILL_GENERATE_RECEIPT_NOS", "Generer kvitteringsnummer");
define("NBILL_RECEIPT_NOS_GENERATED", "%s kvitteringsnummer generert%s");
define("NBILL_UNNUMBERED", "Venter på kvitteringsnummer.");
define("NBILL_INCOME_NO_SUMMARY", "Utelat fra skatteutregning?");
define("NBILL_INSTR_INCOME_NO_SUMMARY", "Hvis du vil at denne inntekten skal ignoreres når skatteoversikten blir laget, sett dette valget til 'Ja'.  Eksempelvis i Storbritannia kan det være typer av inntekt som ikke skal inkluderes på selvangivelsen (som f.eks. penger fra en forsikringsutbetaling).  Til vanlig skal inntekten tas med.");
define("NBILL_INCOME_FROM_REQUIRED", "Spesifisér hvem denne inntekten er fra.");
@define("NBILL_GENERATE_MASTER", "ADVARSEL! Dette vil også generere kvitteringsnummer for MASTER databasen(e)!");

//Version 1.2.6
define("NBILL_INCOME_RECORD_LIMIT_WARNING", "ADVARSEL! Siden det er %s eller flere ubetalte fakturaer i din database, har kun de første %s blitt lagt til i listen over. Hvis en faktura du ser etter ikke finnes i listen, kan du enten klikke 'Vis alle' (nedenfor), eller markere den som betalt på fakturalisten (den vil da komme på denne listen automatisk).");

//Version 1.2.7
define("NBILL_INCOME_SHOW_ALL", "Vis alle");
?>
