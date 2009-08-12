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
define("INV_TAX_SUMMARY_INTRO", "Denne rapporten viser totalt avgiftsbel�p som har blitt fakturert for angitte periode. Noen avgiftstyper kan bare bli bokf�rt etter at kunden har betalt for varen. Andre avgifter krever at du bokf�rer uansett om faktura er betalt eller ikke. Bruk knappen nedenfor for � velge hvilket av disse alternativene du vil bruke, angi perioden og klikk 'Start' for � f� totalverdiene. Merk: Hvis du tar med ubetalte fakturaer, vil disse bare v�re med hvis datoen de ble laget faller innenfor den valgte datoperioden - det er derfor mulig at totalverdiene vil v�re lavere enn hvis du velger � ikke inkludere ubetalte fakturaer (som vil omfatte all fakturaer under den valgte perioden, selv om fakturaer ble laget f�r den valgte datoperiode).");
define("INV_INCLUDE_UNPAID", "Inkluder ubetalte fakturaer?");
define("INV_TAX_BREAKDOWN_INC", "Avgiftsanalyse - Inntekter");
define("INV_TAX_BREAKDOWN_EXP", "Avgiftsanalyse - Utgifter");
define("INV_TOTAL_TAXABLE", "Total skattbar inntekt");
define("INV_TOTAL_TAXABLE_DUE", "Totalt skyldig skattbar inntekt");
define("INV_INSTR_TOTAL_TAXABLE", "Dette er det totale bel�pet mottatt hvor det skyldes avgift.");
define("INV_INSTR_TOTAL_TAXABLE_DUE", "Dette er det totale fakturabel�pet hvor det skyldes avgift.");
define("INV_TOTAL_NON_TAXABLE", "Totalt ikke avgiftspliktig inntekt");
define("INV_TOTAL_NON_TAXABLE_DUE", "Totalt skyldig ikke avgiftspliktig inntekt");
define("INV_INSTR_TOTAL_NON_TAXABLE", "Dette er det totale bel�pet mottatt hvor det ikke skyldes avgifter (dette kan inkludere inntekter som ikke er knyttet til eventuelle fakturaer, f.eks. renter fra banken).");
define("INV_INSTR_TOTAL_NON_TAXABLE_DUE", "Dette er det totale bel�pet fakturert hvor det ikke skyldes avgifter (dette kan inkludere inntekter som ikke er knyttet til eventuelle fakturaer, f.eks. renter fra banken).");
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
define("INV_INSTR_VAT_RPT_DISCREPANCIES", "Fakturanumrene som er vist her synes � v�re manuelt endret slik at netto bel�pet og avgifter ikke stemmer med brutto total for minst ett element p� fakturaen, eller summen av de enkelte fakturaene ikke stemmer totalt for fakturaene. Dette betyr at tallene over kanskje ikke er riktig. Sjekk summen for hver av verdiene (netto, avgift, transport, transportavgift og brutto) p� disse fakturaene og korriger dem hvis n�dvendig. Hvis du ikke kan se noe galt med fakturaene, pr�ver � lagre dem p� nytt (dette vil f�re til at tallene beregnes p� nytt). Hvis du f�r denne meldingen etter � ha kontrollert og lagret fakturaen(e), kan fakturaen(e) v�re korrupt og i s� fall m� du slette dem � opprette dem manuelt (ved � g� til fakturalisten og klikke �Ny� p� verkt�ylinjen).");
define("INV_EXCLUDED_INCOME_TITLE", "Inntekt");
define("INV_EXCLUDED_EXPENDITURE_TITLE", "Utgift");
define("INV_TAX_SUMMARY_LIST_EXCLUDED", "Klikk her for en liste over elementer som har blitt utelatt fra rapporten");
define("INV_TAX_SUMMARY_EXCLUDED_TITLE", "Avgiftssammendrag utelukkede elementer");
define("INV_TAX_SUMMARY_EXCLUDED_INTRO", "F�lgende inntekts-/utgiftstyper ble utelatt fra avgiftssammendraget fordi den relevante inntekts-/utgiftstypen viser at de skal ekskluderes. Du kan klikke p� noen av de nevnte elementer for � redigere dem (MERK: hovedvinduet vil bli omdirigert til � redigere inntekt eller utgiftselementet - dette vinduet vil bli der det er).");
define("INV_TAX_SUMMARY_EXCLUDED_NO_INCOME", "Ingen inntektstyper er utelatt.");
define("INV_TAX_SUMMARY_EXCLUDED_NO_EXP", "Ingen utgiftstyper er utelatt.");
define("INV_TAX_EXCLUDED_RCT_NO", "Kvitteringsnr.");
define("INV_TAX_EXCLUDED_DATE", "Dato");
define("INV_TAX_EXCLUDED_RCD_FROM", "Mottatt fra");
define("INV_TAX_EXCLUDED_AMOUNT", "Bel�p");
define("INV_TAX_EXCLUDED_INV_NO", "Fakturanr.");
define("INV_TAX_EXCLUDED_RCT_UNNUMBERED", "Venter p� kvitteringsnr.");
define("INV_TAX_EXCLUDED_EDIT_INC", "Rediger inntekt");
define("INV_TAX_EXCLUDED_NO_INV", "Ingen fakturanummer");
define("INV_TAX_EXCLUDED_PYT_NO", "Betalingsnr.");
define("INV_TAX_EXCLUDED_PAID_TO", "Betalt til");
define("INV_TAX_EXCLUDED_PYT_FOR", "For");
define("INV_TAX_EXCLUDED_PYT_UNNUMBERED", "Venter p� betalingsnr.");
define("INV_TAX_EXCLUDED_EDIT_EXP", "Rediger utgift");
define("INV_TAX_EXCLUDED_WO_NAME", "Faktura navn");
define("INV_TAX_EXCLUDED_WO_TOTAL", "Brutto totalt");
define("INV_TAX_EXCLUDED_WO_PREVIEW", "Forh�ndsvisning");
define("INV_WRITE_OFFS_TITLE", "Avskrevene fakturaer");
define("INV_TAX_SUMMARY_EXCLUDED_NO_WO", "Ingen avskrevne fakturaer ble utelatt.");
define("INV_TOTAL_TAXABLE_PAID", "Total avgiftspliktige utgifter");
define("INV_INSTR_TOTAL_TAXABLE_PAID", "Dette er det samlede nettobel�p utbetalt, hvor avgift var skyldig.");
define("INV_TOTAL_NON_TAXABLE_PAID", "Totalt utgifter ikke avgiftspliktig");
define("INV_INSTR_TOTAL_NON_TAXABLE_PAID", "Dette er det totale bel�pet betalt ut hvor ingen avgifter var skyldig.");
define("INV_INSTR_GROSS_TOTAL_PAID", "Totale utgifter inkludert avgifter.");
define("INV_INSTR_VAT_RPT_TOTAL_TAX_PAID", "Totalt avgifter betalt");
define("INV_INSTR_VAT_RPT_TOTAL_NET_PAID", "Netto utgifter");
define("INV_TAX_BREAKDOWN_WO", "Avgiftsanalyse - avskrevne fakturaer");
define("INV_TOTAL_TAXABLE_DUE_WO", "Totalt avgiftspliktig inntekter avskrevet");
define("INV_INSTR_TOTAL_TAXABLE_DUE_WO", "Dette er det totale bel�pet fakturert for, men avskrevet, hvor avgifter er forfalt.");
define("INV_TOTAL_NON_TAXABLE_DUE_WO", "Totalt ikke avgiftspliktig inntekt avskrevet");
define("INV_INSTR_TOTAL_NON_TAXABLE_DUE_WO", "Dette er det totale bel�pet fakturert for, men avskrevet, hvor avgifter ikke er forfalt.");
define("INV_GROSS_TOTAL_WO", "Brutto totalt");
define("INV_INSTR_GROSS_TOTAL_DUE_WO", "Totale inntekter avskrevet, inkludert avgifter.");
define("INV_VAT_RPT_TOTAL_TAX_WO", "Totalt");
define("INV_VAT_RPT_TAX_NAME_WO", "Avgift");
define("INV_INSTR_VAT_RPT_TOTAL_TAX_DUE_WO", "Totale avgifter avskrevet");
define("INV_VAT_RPT_TOTAL_NET_WO", "Netto totalt");
define("INV_INSTR_VAT_RPT_TOTAL_NET_DUE_WO", "Netto verdi avskrevet etter avgifter");
define("INV_VAT_RPT_DISCREPANCIES_WO", "ADVARSEL! Avvik funnet");
define("INV_INSTR_VAT_RPT_DISCREPANCIES_WO", "Fakturanumrene som er vist her synes � v�re manuelt endret slik at netto bel�pet og avgifter ikke stemmer med brutto total for minst ett element p� fakturaen, eller summen av de enkelte fakturaene ikke stemmer totalt for fakturaene. Dette betyr at tallene over kanskje ikke er riktig. Sjekk summen for hver av verdiene (netto, avgift, transport, transportavgift og brutto) p� disse fakturaene og rette dem hvis n�dvendig. Hvis du ikke kan se noe galt med fakturaene, pr�ver � lagre dem p� nytt (dette vil f�re til at tallene beregnes p� nytt). Hvis du f�r denne meldingen etter � ha kontrollert og lagret fakturaen (e), kan fakturaen (e) v�re korrupt og i s� fall m� du slette dem � opprette dem manuelt (ved � g� til fakturalisten og klikke �Ny� p� verkt�ylinjen).");
define("INV_TAX_SUMMARY", "SUMMARY (Bare relevant for avgifter)");
define("GROSS_PROFIT_LOSS", "Brutto fortjeneste (eller tap)");
define("TAX_PAYABLE_REBATE_DUE", "Total betalbar avgift (eller rabatt skyldig)");
define("NET_PROFIT_LOSS", "Netto fortjeneste (eller tap)");

//Version 1.2.1
define("INV_TAX_SUMMARY_DETAILED", "Vis detaljert struktur? (Kan ta tid!)");
?>
