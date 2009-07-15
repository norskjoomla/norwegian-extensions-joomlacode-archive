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
define("INV_INCOME_INTRO", "Du kan liste alle inntekter her, uansett om du har fakturaer for de eller ikke. Hvis du lister alle inntekter her, kan du bruke denne listen til � sammenligne med din bankutskrift.");
define("INV_INCOME_RECEIPT_NO", "Kvitteringsnummer");
define("INV_INCOME_DATE", "Dato");
define("INV_INCOME_AMOUNT", "Bel�p");
define("INV_INCOME_INVOICE_NO", "Faktura");
define("INV_EDIT_INCOME", "Redig�r inntekt");
define("INV_NEW_INCOME", "Ny inntekt");
define("INV_NO_INVOICE_NO", "Mangler fakturanummer");
define("INV_INCOME_DETAILS", "Inntektsdetaljer");
define("INV_RELATED_INVOICE", "Relaterte fakturaer");
define("INV_RECEIVED_FROM", "Mottatt fra");
define("INV_PAYMENT_METHOD", "Betalingsm�te");
define("INV_AMOUNT_RECEIVED", "Mottatt bel�p");
define("INV_DATE_RECEIVED", "Mottatt dato");
define("INV_RECEIPT_REFERENCE", "Referanse");
define("INV_INSTR_RECEIPT_NO", "<strong>Merk:</strong> La s� �pent hvis du legger til ny. Komponenten vil automatisk legge til neste tilgjengelige kvitteringsnummer.");
define("INV_INSTR_RELATED_INVOICE", "Hvis denne kvitteringen gjelder for �n eller flere fakturaer, velg faktura(er) her (ubetalte fakturaer er vises her).");
define("INV_INSTR_RECEIVED_FROM", "");
define("INV_INSTR_PAYMENT_METHOD", "");
define("INV_INSTR_AMOUNT_RECEIVED", "Skriv inn bel�pet uten valutasymbol.");
define("INV_INSTR_DATE_RECEIVED", "");
define("INV_INSTR_RECEIPT_REFERENCE", "Du kan bruke dette feltet til hva du vil, men det er ment brukt for integrasjon mot nettbetalingstjenester. For eksempel kan du lagre n�kkeldata til en separat databasetabell hvor dine automatisete nettransaksjoner blir lagret (for � gj�re det mulig for deg � samkj�re transaksjoner mot inntekter). Hvis du bruker det p� denne m�ten, er det mulig du selv slipper � skrive en verdi selv. Ditt integrasjonsscript skal kunne fylle inn dette automatisk.");
define("INV_CASH", "Kontanter");
define("INV_CHEQUE", "Sjekk");
define("INV_CREDIT_CARD", "Kredittkort");
define("INV_DIRECT_DEBIT", "Direktetrekk");
define("INV_BANK_TRANSFER", "Bankoverf�ring");
define("INV_STANDING_ORDER", "Fast overf�rsel");
define("INV_ONLINE_AGENCY", "Betalingstjeneste (f.eks. PayPal)");
define("INV_OTHER", "Andre");
define("INV_RECEIVED_FOR", "Mottatt for");
define("INV_INSTR_RECEIVED_FOR", "Indikerer hva betalingen gjelder (hvis den ikke er knyttet opp mot en faktura eller annet)");
define("INV_LEDGER_BREAKDOWN", "Hovedbok detaljvisning");
define("INV_LEDGER_BREAKDOWN_MISMATCH", "ADVARSEL! Summen av hovedbok detaljer stemmer ikke med inntektsbel�pet.  Hvis du allikevel vil lagre, klikk OK, ellers klikk Avbryt og rett opp hovedbok detaljene eller mottatt bel�p.");
define("INV_TAX_RATE_AND_AMOUNT", "Skattesatser og bel�p");
define("INV_INSTR_TAX_RATE_AND_AMOUNT", "Hvis inntekten inkluderer MVA kan du spesifisere sats og bel�p her (inntil 3 foskjellige satser pr. inntektsenhet). Fyll kun inn summen for faktisk MVA (ikke hele inntekten). Hvis MVA ikke er tilgjengelig, la feltet v�re tomt eller skriv en null. Hvis det ikke er skatt p� inntekten, la det st� blankt eller skriv 0.  Denne informasjonen blir bare brukt til � lage din skatteoversikt hvis du betaler skatt p� faktiske mottatte bel�p i motsetning til p� fakturerte bel�p. <strong>VENNLIGST MERK:</strong> N�r du velger en faktura fra listen og den best�r av flere underenheter, da kan skattebel�pet synes en anelse for h�yt i forhold til satsen.  Dette er fordi skatter for individuelle enheter blir avrundet oppover, og dette er derfor IKKE en feil.");
define("INV_NET_RECEIPT", "Nettkvittering");
define("INV_INSTR_NET_RECEIPT", "Sum mottatt etter moms er blitt beregnet.");
define("INV_INCOME_TAX_RATE", "MVA-sats");
define("INV_INCOME_TAX_AMOUNT", "Bel�p");
define("INV_SELECT_VENDOR_FOR_RECEIPT_NO_GEN", "Generering av kvitteringsnummer er kun tilgjengelig n�r en selger er valgt");
define("INV_GENERATE_RECEIPTS_UP_TO", "Fyll inn dato (YYYY/MM/DD) du vil generere nummer opp til. Kvitteringer ETTER denne dato vil ikke f� tildelt kvitteringsnummer.");
define("INV_GENERATE_RECEIPT_NOS", "Generer kvitteringsnummer");
define("INV_RECEIPT_NOS_GENERATED", "%s kvitteringsnummer generert%s");
define("INV_UNNUMBERED", "Venter p� kvitteringsnummer.");
define("INV_INCOME_NO_SUMMARY", "Utelat fra skatteutregning?");
define("INV_INSTR_INCOME_NO_SUMMARY", "Hvis du vil at denne inntekten skal ignoreres n�r skatteoversikten blir laget, sett dette valget til 'Ja'.  For eksempel i Storbritannia kan det v�re typer av inntekt som ikke skal inkluderes p� selvangivelsen (som f.eks. penger fra en forsikringsutbetaling).  Men vanligvis skal inntekten tas med.");
define("INV_INCOME_FROM_REQUIRED", "Spesifis�r hvem denne inntekten er fra.");
@define("INV_GENERATE_MASTER", "ADVARSEL! Dette vil ogs� generere kvitteringsnummer for MASTER databasen(e)!");

//Version 1.2.6
define("INV_INCOME_RECORD_LIMIT_WARNING", "ADVARSEL! Siden det er %s eller flere ubetalte fakturaer i din database, har kun de f�rste %s blitt lagt til i listen over. Hvis en faktura du ser etter ikke finnes i listen, kan du enten klikk 'Hvis alle' (nedenfor), eller markere den som betalt p� fakturalisten (den vil da komme p� denne listen automatisk).");

//Version 1.2.7
define("INV_INCOME_SHOW_ALL", "Vis alle");
?>
