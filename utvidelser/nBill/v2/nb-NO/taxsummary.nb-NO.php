<?php
/**
* @version 1.1.x
* @package nBill
* @copyright (C) 2006-2007 Netshine Software Limited
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

//Tax Summary Report
define("INV_TAX_SUMMARY_TITLE", "Avgift oppsummeringsrapport");
define("INV_TAX_SUMMARY_INTRO", "Denne rapporten viser totalt avgiftsbeløp som har blitt fakturert for angitte periode. Noen avgiftstyper kan bare bli bokført etter at kunden har betalt for varen. Andre avgifter krever at du bokfører uansett om faktura er betalt eller ikke. Bruk knappen nedenfor for å velge hvilket av disse alternativene du vil bruke, angi perioden og klikk 'Start' for å få totalverdiene. Merk: Hvis du tar med ubetalte fakturaer, vil disse bare være med hvis datoen de ble laget faller innenfor den valgte datoperioden - det er derfor mulig at totalverdiene vil være lavere enn hvis du velger å ikke inkludere ubetalte fakturaer (som vil omfatte all fakturaer under den valgte perioden, selv om fakturaer ble laget før den valgte datoperiode).");
define("INV_INCLUDE_UNPAID", "Inkluder ubetalte fakturaer?");
define("INV_TAX_BREAKDOWN_INC", "Avgiftsanalyse - Inntekter");
define("INV_TAX_BREAKDOWN_EXP", "Avgiftsanalyse - Utgifter");
define("INV_TOTAL_TAXABLE", "Total skattbar inntekt");
define("INV_TOTAL_TAXABLE_DUE", "Totalt skyldig skattbar inntekt");
define("INV_INSTR_TOTAL_TAXABLE", "Dette er det totale beløpet mottatt hvor det skyldes avgift.");
define("INV_INSTR_TOTAL_TAXABLE_DUE", "Dette er det totale fakturabeløpet hvor det skyldes avgift.");
define("INV_TOTAL_NON_TAXABLE", "Totalt ikke avgiftspliktig inntekt");
define("INV_TOTAL_NON_TAXABLE_DUE", "Totalt skyldig ikke avgiftspliktig inntekt");
define("INV_INSTR_TOTAL_NON_TAXABLE", "Dette er det totale beløpet mottatt hvor det ikke skyldes avgifter (dette kan inkludere inntekter som ikke er knyttet til eventuelle fakturaer, f.eks. renter fra banken).");
define("INV_INSTR_TOTAL_NON_TAXABLE_DUE", "Dette er det totale beløpet fakturert hvor det ikke skyldes avgifter (dette kan inkludere inntekter som ikke er knyttet til eventuelle fakturaer, f.eks. renter fra banken).");
define("INV_GROSS_TOTAL", "Brutto totalt");
define("INV_INSTR_GROSS_TOTAL", "Samlede inntekter inkludert avgifter");
define("INV_INSTR_GROSS_TOTAL_DUE", "Samlede inntekter forfalt til betaling (inkludert avgifter)");
define("INV_VAT_RPT_TOTAL_TAX", "Totalt");
define("INV_VAT_RPT_TAX_NAME", "Avgift");
define("INV_INSTR_VAT_RPT_TOTAL_TAX", "Totalt samlet avgift");
define("INV_INSTR_VAT_RPT_TOTAL_TAX_DUE", "Totalt forfalt avgift");
define("INV_VAT_RPT_TOTAL_NET", "Netto totalt");
define("INV_INSTR_VAT_RPT_TOTAL_NET", "Netto inntekt etter avgifter");
define("INV_INSTR_VAT_RPT_TOTAL_NET_DUE", "Netto skyldig inntekt etter avgift");
define("INV_VAT_RPT_DISCREPANCIES", "ADVARSEL! Avvik funnet");
define("INV_INSTR_VAT_RPT_DISCREPANCIES", "Fakturanumrene som er vist her synes å være manuelt endret slik at netto beløpet og avgifter ikke stemmer med brutto total for minst ett element på fakturaen, eller summen av de enkelte fakturaene ikke stemmer totalt for fakturaene. Dette betyr at tallene over kanskje ikke er riktig. Sjekk summen for hver av verdiene (netto, avgift, transport, transportavgift og brutto) på disse fakturaene og korriger dem hvis nødvendig. Hvis du ikke kan se noe galt med fakturaene, prøver å lagre dem på nytt (dette vil føre til at tallene beregnes på nytt). Hvis du får denne meldingen etter å ha kontrollert og lagret fakturaen(e), kan fakturaen(e) være korrupt og i så fall må du slette dem å opprette dem manuelt (ved å gå til fakturalisten og klikke ’Ny’ på verktøylinjen).");
define("INV_EXCLUDED_INCOME_TITLE", "Inntekt");
define("INV_EXCLUDED_EXPENDITURE_TITLE", "Utgift");
define("INV_TAX_SUMMARY_LIST_EXCLUDED", "Klikk her for en liste over elementer som har blitt utelatt fra rapporten");
define("INV_TAX_SUMMARY_EXCLUDED_TITLE", "Avgiftssammendrag utelukkede elementer");
define("INV_TAX_SUMMARY_EXCLUDED_INTRO", "Følgende inntekts-/utgiftstyper ble utelatt fra avgiftssammendraget fordi den relevante inntekts-/utgiftstypen viser at de skal ekskluderes. Du kan klikke på noen av de nevnte elementer for å redigere dem (MERK: hovedvinduet vil bli omdirigert til å redigere inntekt eller utgiftselementet - dette vinduet vil bli der det er).");
define("INV_TAX_SUMMARY_EXCLUDED_NO_INCOME", "Ingen inntektstyper er utelatt.");
define("INV_TAX_SUMMARY_EXCLUDED_NO_EXP", "Ingen utgiftstyper er utelatt.");
define("INV_TAX_EXCLUDED_RCT_NO", "Kvitteringsnr.");
define("INV_TAX_EXCLUDED_DATE", "Dato");
define("INV_TAX_EXCLUDED_RCD_FROM", "Mottatt fra");
define("INV_TAX_EXCLUDED_AMOUNT", "Beløp");
define("INV_TAX_EXCLUDED_INV_NO", "Fakturanr.");
define("INV_TAX_EXCLUDED_RCT_UNNUMBERED", "Venter på kvitteringsnr.");
define("INV_TAX_EXCLUDED_EDIT_INC", "Rediger inntekt");
define("INV_TAX_EXCLUDED_NO_INV", "Ingen fakturanummer");
define("INV_TAX_EXCLUDED_PYT_NO", "Betalingsnr.");
define("INV_TAX_EXCLUDED_PAID_TO", "Betalt til");
define("INV_TAX_EXCLUDED_PYT_FOR", "For");
define("INV_TAX_EXCLUDED_PYT_UNNUMBERED", "Venter på betalingsnr.");
define("INV_TAX_EXCLUDED_EDIT_EXP", "Rediger utgift");
define("INV_TAX_EXCLUDED_WO_NAME", "Faktura navn");
define("INV_TAX_EXCLUDED_WO_TOTAL", "Brutto totalt");
define("INV_TAX_EXCLUDED_WO_PREVIEW", "Forhåndsvisning");
define("INV_WRITE_OFFS_TITLE", "Avskrevene fakturaer");
define("INV_TAX_SUMMARY_EXCLUDED_NO_WO", "Ingen avskrevne fakturaer ble utelatt.");
define("INV_TOTAL_TAXABLE_PAID", "Total avgiftspliktige utgifter");
define("INV_INSTR_TOTAL_TAXABLE_PAID", "Dette er det samlede nettobeløp utbetalt, hvor avgift var skyldig.");
define("INV_TOTAL_NON_TAXABLE_PAID", "Totalt utgifter ikke avgiftspliktig");
define("INV_INSTR_TOTAL_NON_TAXABLE_PAID", "Dette er det totale beløpet betalt ut hvor ingen avgifter var skyldig.");
define("INV_INSTR_GROSS_TOTAL_PAID", "Totale utgifter inkludert avgifter.");
define("INV_INSTR_VAT_RPT_TOTAL_TAX_PAID", "Totalt avgifter betalt");
define("INV_INSTR_VAT_RPT_TOTAL_NET_PAID", "Netto utgifter");
define("INV_TAX_BREAKDOWN_WO", "Avgiftsanalyse - avskrevne fakturaer");
define("INV_TOTAL_TAXABLE_DUE_WO", "Totalt avgiftspliktig inntekter avskrevet");
define("INV_INSTR_TOTAL_TAXABLE_DUE_WO", "Dette er det totale beløpet fakturert for, men avskrevet, hvor avgifter er forfalt.");
define("INV_TOTAL_NON_TAXABLE_DUE_WO", "Totalt ikke avgiftspliktig inntekt avskrevet");
define("INV_INSTR_TOTAL_NON_TAXABLE_DUE_WO", "Dette er det totale beløpet fakturert for, men avskrevet, hvor avgifter ikke er forfalt.");
define("INV_GROSS_TOTAL_WO", "Brutto totalt");
define("INV_INSTR_GROSS_TOTAL_DUE_WO", "Totale inntekter avskrevet, inkludert avgifter.");
define("INV_VAT_RPT_TOTAL_TAX_WO", "Totalt");
define("INV_VAT_RPT_TAX_NAME_WO", "Avgift");
define("INV_INSTR_VAT_RPT_TOTAL_TAX_DUE_WO", "Totale avgifter avskrevet");
define("INV_VAT_RPT_TOTAL_NET_WO", "Netto totalt");
define("INV_INSTR_VAT_RPT_TOTAL_NET_DUE_WO", "Netto verdi avskrevet etter avgifter");
define("INV_VAT_RPT_DISCREPANCIES_WO", "ADVARSEL! Avvik funnet");
define("INV_INSTR_VAT_RPT_DISCREPANCIES_WO", "Fakturanumrene som er vist her synes å være manuelt endret slik at netto beløpet og avgifter ikke stemmer med brutto total for minst ett element på fakturaen, eller summen av de enkelte fakturaene ikke stemmer totalt for fakturaene. Dette betyr at tallene over kanskje ikke er riktig. Sjekk summen for hver av verdiene (netto, avgift, transport, transportavgift og brutto) på disse fakturaene og rette dem hvis nødvendig. Hvis du ikke kan se noe galt med fakturaene, prøver å lagre dem på nytt (dette vil føre til at tallene beregnes på nytt). Hvis du får denne meldingen etter å ha kontrollert og lagret fakturaen (e), kan fakturaen (e) være korrupt og i så fall må du slette dem å opprette dem manuelt (ved å gå til fakturalisten og klikke ’Ny’ på verktøylinjen).");
define("INV_TAX_SUMMARY", "SUMMARY (Bare relevant for avgifter)");
define("GROSS_PROFIT_LOSS", "Brutto fortjeneste (eller tap)");
define("TAX_PAYABLE_REBATE_DUE", "Total betalbar avgift (eller rabatt skyldig)");
define("NET_PROFIT_LOSS", "Netto fortjeneste (eller tap)");

//Version 1.2.1
define("INV_TAX_SUMMARY_DETAILED", "Vis detaljert struktur? (Kan ta tid!)");
?>
