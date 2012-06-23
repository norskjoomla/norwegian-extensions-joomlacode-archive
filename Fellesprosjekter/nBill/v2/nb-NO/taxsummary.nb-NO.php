<?php
/**
* Language file for the Tax Summary Report
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

//Tax Summary Report
define("NBILL_TAX_SUMMARY_TITLE", "Avgift oppsummeringsrapport");
define("NBILL_TAX_SUMMARY_INTRO", "Denne rapporten viser totalt avgiftsbeløp som har blitt fakturert for angitte periode. Noen avgiftstyper kan bare bli bokført etter at kunden har betalt for varen. Andre avgifter krever at du bokfører uansett om faktura er betalt eller ikke. Bruk knappen nedenfor for å velge hvilket av disse alternativene du vil bruke, angi perioden og klikk 'Start' for å få totalverdiene. Merk: Hvis du tar med ubetalte fakturaer, vil disse bare være med hvis datoen de ble laget faller innenfor den valgte datoperioden - det er derfor mulig at totalverdiene vil være lavere enn hvis du velger å ikke inkludere ubetalte fakturaer (som vil omfatte all fakturaer under den valgte perioden, selv om fakturaer ble laget før den valgte datoperiode).");
define("NBILL_INCLUDE_UNPAID", "Inkluder ubetalte fakturaer?");
define("NBILL_TAX_BREAKDOWN_INC", "Avgiftsanalyse - Inntekter");
define("NBILL_TAX_BREAKDOWN_EXP", "Avgiftsanalyse - Utgifter");
define("NBILL_TOTAL_TAXABLE", "Total skattbar inntekt");
define("NBILL_TOTAL_TAXABLE_DUE", "Totalt skyldig skattbar inntekt");
define("NBILL_INSTR_TOTAL_TAXABLE", "Dette er det totale beløpet mottatt hvor det skyldes avgift.");
define("NBILL_INSTR_TOTAL_TAXABLE_DUE", "Dette er det totale fakturabeløpet hvor det skyldes avgift.");
define("NBILL_TOTAL_NON_TAXABLE", "Totalt ikke avgiftspliktig inntekt");
define("NBILL_TOTAL_NON_TAXABLE_DUE", "Totalt skyldig ikke avgiftspliktig inntekt");
define("NBILL_INSTR_TOTAL_NON_TAXABLE", "Dette er det totale beløpet mottatt hvor det ikke skyldes avgifter (dette kan inkludere inntekter som ikke er knyttet til eventuelle fakturaer, f.eks. renter fra banken).");
define("NBILL_INSTR_TOTAL_NON_TAXABLE_DUE", "Dette er det totale beløpet fakturert hvor det ikke skyldes avgifter (dette kan inkludere inntekter som ikke er knyttet til eventuelle fakturaer, f.eks. renter fra banken).");
define("NBILL_GROSS_TOTAL", "Brutto totalt");
define("NBILL_INSTR_GROSS_TOTAL", "Samlede inntekter inkludert avgifter");
define("NBILL_INSTR_GROSS_TOTAL_DUE", "Samlede inntekter forfalt til betaling (inkludert avgifter)");
define("NBILL_VAT_RPT_TOTAL_TAX", "Totalt");
define("NBILL_VAT_RPT_TAX_NAME", "Avgift");
define("NBILL_INSTR_VAT_RPT_TOTAL_TAX", "Totalt samlet avgift");
define("NBILL_INSTR_VAT_RPT_TOTAL_TAX_DUE", "Totalt forfalt avgift");
define("NBILL_VAT_RPT_TOTAL_NET", "Netto totalt");
define("NBILL_INSTR_VAT_RPT_TOTAL_NET", "Netto inntekt etter avgifter");
define("NBILL_INSTR_VAT_RPT_TOTAL_NET_DUE", "Netto skyldig inntekt etter avgift");
define("NBILL_VAT_RPT_DISCREPANCIES", "ADVARSEL! Avvik funnet");
define("NBILL_INSTR_VAT_RPT_DISCREPANCIES", "Fakturanumrene som er vist her synes å være manuelt endret slik at netto beløpet og avgifter ikke stemmer med brutto total for minst ett element på fakturaen, eller summen av de enkelte fakturaene ikke stemmer totalt for fakturaene. Dette betyr at tallene over kanskje ikke er riktig. Sjekk summen for hver av verdiene (netto, avgift, transport, transportavgift og brutto) på disse fakturaene og korriger dem hvis nødvendig. Hvis du ikke kan se noe galt med fakturaene, prøver å lagre dem på nytt (dette vil føre til at tallene beregnes på nytt). Hvis du får denne meldingen etter å ha kontrollert og lagret fakturaen(e), kan fakturaen(e) være korrupt og i så fall må du slette dem å opprette dem manuelt (ved å gå til fakturalisten og klikke ’Ny’ på verktøylinjen).");
define("NBILL_EXCLUDED_INCOME_TITLE", "Inntekt");
define("NBILL_EXCLUDED_EXPENDITURE_TITLE", "Utgift");
define("NBILL_TAX_SUMMARY_LIST_EXCLUDED", "Klikk her for en liste over elementer som har blitt utelatt fra rapporten");
define("NBILL_TAX_SUMMARY_EXCLUDED_TITLE", "Avgiftssammendrag utelukkede elementer");
define("NBILL_TAX_SUMMARY_EXCLUDED_INTRO", "Følgende inntekts-/utgiftstyper ble utelatt fra avgiftssammendraget fordi den relevante inntekts-/utgiftstypen viser at de skal ekskluderes. Du kan klikke på noen av de nevnte elementer for å redigere dem (MERK: hovedvinduet vil bli omdirigert til å redigere inntekt eller utgiftselementet - dette vinduet vil bli der det er).");
define("NBILL_TAX_SUMMARY_EXCLUDED_NO_INCOME", "Ingen inntektstyper er utelatt.");
define("NBILL_TAX_SUMMARY_EXCLUDED_NO_EXP", "Ingen utgiftstyper er utelatt.");
define("NBILL_TAX_EXCLUDED_RCT_NO", "Kvitteringsnr.");
define("NBILL_TAX_EXCLUDED_DATE", "Dato");
define("NBILL_TAX_EXCLUDED_RCD_FROM", "Mottatt fra");
define("NBILL_TAX_EXCLUDED_AMOUNT", "Beløp");
define("NBILL_TAX_EXCLUDED_NBILL_NO", "Fakturanr.");
define("NBILL_TAX_EXCLUDED_RCT_UNNUMBERED", "Venter på kvitteringsnr.");
define("NBILL_TAX_EXCLUDED_EDIT_INC", "Rediger inntekt");
define("NBILL_TAX_EXCLUDED_NO_INV", "Ingen fakturanummer");
define("NBILL_TAX_EXCLUDED_PYT_NO", "Betalingsnr.");
define("NBILL_TAX_EXCLUDED_PAID_TO", "Betalt til");
define("NBILL_TAX_EXCLUDED_PYT_FOR", "For");
define("NBILL_TAX_EXCLUDED_PYT_UNNUMBERED", "Venter på betalingsnr.");
define("NBILL_TAX_EXCLUDED_EDIT_EXP", "Rediger utgift");
define("NBILL_TAX_EXCLUDED_WO_NAME", "Faktura navn");
define("NBILL_TAX_EXCLUDED_WO_TOTAL", "Brutto totalt");
define("NBILL_TAX_EXCLUDED_WO_PREVIEW", "Forhåndsvisning");
define("NBILL_WRITE_OFFS_TITLE", "Avskrevene fakturaer");
define("NBILL_TAX_SUMMARY_EXCLUDED_NO_WO", "Ingen avskrevne fakturaer ble utelatt.");
define("NBILL_TOTAL_TAXABLE_PAID", "Total avgiftspliktige utgifter");
define("NBILL_INSTR_TOTAL_TAXABLE_PAID", "Dette er det samlede nettobeløp utbetalt, hvor avgift var skyldig.");
define("NBILL_TOTAL_NON_TAXABLE_PAID", "Totalt utgifter ikke avgiftspliktig");
define("NBILL_INSTR_TOTAL_NON_TAXABLE_PAID", "Dette er det totale beløpet betalt ut hvor ingen avgifter var skyldig.");
define("NBILL_INSTR_GROSS_TOTAL_PAID", "Totale utgifter inkludert avgifter.");
define("NBILL_INSTR_VAT_RPT_TOTAL_TAX_PAID", "Totalt avgifter betalt");
define("NBILL_INSTR_VAT_RPT_TOTAL_NET_PAID", "Netto utgifter");
define("NBILL_TAX_BREAKDOWN_WO", "Avgiftsanalyse - avskrevne fakturaer");
define("NBILL_TOTAL_TAXABLE_DUE_WO", "Totalt avgiftspliktig inntekter avskrevet");
define("NBILL_INSTR_TOTAL_TAXABLE_DUE_WO", "Dette er det totale beløpet fakturert for, men avskrevet, hvor avgifter er forfalt.");
define("NBILL_TOTAL_NON_TAXABLE_DUE_WO", "Totalt ikke avgiftspliktig inntekt avskrevet");
define("NBILL_INSTR_TOTAL_NON_TAXABLE_DUE_WO", "Dette er det totale beløpet fakturert for, men avskrevet, hvor avgifter ikke er forfalt.");
define("NBILL_GROSS_TOTAL_WO", "Brutto totalt");
define("NBILL_INSTR_GROSS_TOTAL_DUE_WO", "Totale inntekter avskrevet, inkludert avgifter.");
define("NBILL_VAT_RPT_TOTAL_TAX_WO", "Totalt");
define("NBILL_VAT_RPT_TAX_NAME_WO", "Avgift");
define("NBILL_INSTR_VAT_RPT_TOTAL_TAX_DUE_WO", "Totale avgifter avskrevet");
define("NBILL_VAT_RPT_TOTAL_NET_WO", "Netto totalt");
define("NBILL_INSTR_VAT_RPT_TOTAL_NET_DUE_WO", "Netto verdi avskrevet etter avgifter");
define("NBILL_VAT_RPT_DISCREPANCIES_WO", "ADVARSEL! Avvik funnet");
define("NBILL_INSTR_VAT_RPT_DISCREPANCIES_WO", "Fakturanumrene som er vist her synes å være manuelt endret slik at netto beløpet og avgifter ikke stemmer med brutto total for minst ett element på fakturaen, eller summen av de enkelte fakturaene ikke stemmer totalt for fakturaene. Dette betyr at tallene over kanskje ikke er riktig. Sjekk summen for hver av verdiene (netto, avgift, transport, transportavgift og brutto) på disse fakturaene og rette dem hvis nødvendig. Hvis du ikke kan se noe galt med fakturaene, prøver å lagre dem på nytt (dette vil føre til at tallene beregnes på nytt). Hvis du får denne meldingen etter å ha kontrollert og lagret fakturaen (e), kan fakturaen (e) være korrupt og i så fall må du slette dem å opprette dem manuelt (ved å gå til fakturalisten og klikke ’Ny’ på verktøylinjen).");
define("NBILL_TAX_SUMMARY", "SUMMARY (Bare relevant for avgifter)");
define("GROSS_PROFIT_LOSS", "Brutto fortjeneste (eller tap)");
define("TAX_PAYABLE_REBATE_DUE", "Total betalbar avgift (eller rabatt skyldig)");
define("NET_PROFIT_LOSS", "Netto fortjeneste (eller tap)");

//Version 1.2.1
define("NBILL_TAX_SUMMARY_DETAILED", "Vis detaljert struktur? (Kan ta tid!)");

//Version 2.0.0
define("NBILL_TAX_SUMMARY_UNNUMBERED_RCT", "Avventer kvitteringsnr..");
define("NBILL_TAX_SUMMARY_UNNUMBERED_PYT", "Avventer betalingsnr.");
define("NBILL_BREAKDOWN_TYPE_1", "Inntekt");
define("NBILL_BREAKDOWN_TYPE_2", "Faktura");
define("NBILL_BREAKDOWN_TYPE_3", "Utgifter");
define("NBILL_BREAKDOWN_TYPE_4", "Kreditnota");
define("NBILL_BREAKDOWN_TYPE", "Type");
define("NBILL_BREAKDOWN_DATE", "Dato");
define("NBILL_BREAKDOWN_REF", "Ref.");
define("NBILL_BREAKDOWN_DESC", "Beskrivelse");
define("NBILL_BREAKDOWN_NET", "Nettobeløp");
define("NBILL_BREAKDOWN_TAX", "Skattebeløp");
define("NBILL_BREAKDOWN_TAX_REF", "Skattereferanse");
define("NBILL_BREAKDOWN_COUNTRY", "Land");
define("NBILL_BREAKDOWN_UNKNOWN", "Ukjent");
define("NBILL_BREAKDOWN_EXP_COLL", "Utvid/Skjul");
define("NBILL_BREAKDOWN_TOTAL_COUNT", "%s element");
define("NBILL_TAX_SUMMARY_PF_EXPANDED", "Utskriftsvennlig (Utvidet)");
define("NBILL_TAX_SUMMARY_PF_COLLAPSED", "Utskriftsvennlig (Minimert)");
define("NBILL_INSTR_VAT_RPT_DISCREPANCIES_CR", "Kreditnotanumrene som er vist her synes å være manuelt endret slik at netto beløpet og avgifter ikke stemmer med brutto total for minst ett element på kredittnotaen, eller summen av de enkelte kredittnotaene ikke stemmer med totalen for kredittnotaene. Dette betyr at tallene over kanskje ikke er riktig. Sjekk summen for hver av verdiene (netto, avgift, forsendelse, transportavgift og brutto) på disse kredittnotaene og rette dem hvis nødvendig. Hvis du ikke kan se noe galt med kredittnotaene, prøver å lagre dem på nytt (dette vil føre til at tallene beregnes på nytt). Hvis du får denne meldingen etter å ha kontrollert og lagret kredittnotaene, kan kredittnotaene være korrupt og i så fall må du slette dem å opprette dem manuelt (ved å gå til kredittnotalisten og klikke ’Ny’ på verktøylinjen).");
define("NBILL_TAX_EXCLUDED_INCOME_TOTAL", "Totalt ekskluderte inntekter (%s elementer)");
define("NBILL_TAX_EXCLUDED_EXPENDITURE_TOTAL", "Totalt ekskluderte utgifter (%s elementer)");