<?php
/**
* Language file for nBill
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

define("NBILL_ANOMALY_TITLE", "Avviksrapport");
define("NBILL_ANOMALY_PF", "Utskriftsvennlig versjon");
define("NBILL_ANOMALY_INTRO", "Denne rapporten viser poster som det synes å være avvik med, slik at du kan se nærmere på i tilfelle en feil har blitt gjort. Det trenger ikke å være noe feil med postene selv om de vises på denne rapporten - bare at det potensielt kan være et problem. Hvis du har mye data, kan det ta litt tid for" . NBILL_BRANDING_NAME . " å sjekke gjennom det hele, så du bør kanskje innskrenke datoperiode eller elementene som skal sjekkes. Enkelte elementer kan være oppført mer enn én gang, da en enkelt feilverdi kan føre til en rekke ulike problemer.");
define("NBILL_ANOMALY_CRITERIA", "Søkekriterier");
define("NBILL_ANOMALY_CRITERIA_HELP", "Vennligst oppgi et datointervall, og velg de sjekkene du vil utføre:");
define("NBILL_ANOMALY_DATE_RANGE", "Datointerval:");
define("NBILL_ANOMALY_ALL", "Alle");
define("NBILL_ANOMALY_RANGE", "Angitt dato");
define("NBILL_ANOMALY_CHECKS", "Se etter...");
define("NBILL_ANOMALY_CHECK_1", "Manglende Inntekt/Utgiftsposter");
define("NBILL_ANOMALY_CHECK_1_HELP", "Se etter eventuelle fakturaer eller kredittnotat som er markert som betalt i sin helhet eller delvis betalt, men som det ikke er funnet tilsvarende inntekt eller utgiftsposter.");
define("NBILL_ANOMALY_CHECK_1_WHAT", "Disse fakturaene eller kreditnotaer er merket som betalt i sin helhet eller delvis betalt, men det er ingen inntekts eller utgiftsposter knyttet til dem. Dette kan være ok hvis du ikke bruker inntekt eller utgiftsfunksjonen i nBill. I de fleste tilfeller selv hvis en betaling er mottatt eller sendt, bør det finnes en inntekt eller utgiftspost for det. Hvis du trenger å legge til en ny inntekt eller utgiftspost, redigere fakturaen eller kredittnotat og sett 'betales fullt ut' og 'delvis betalt' til 'nei', og deretter opprette en ny inntekt eller utgiftspost (faktura eller kredittnotat bør deretter vises i listen, slik at du kan velge den, og den vil bli markert som betalt på nytt når du lagrer inntekt eller utgiftsposten).");
define("NBILL_ANOMALY_CHECK_2", "Utilstrekkelig Inntekts/Utgiftsposter");
define("NBILL_ANOMALY_CHECK_2_HELP", "Se etter eventuelle fakturaer eller kredittnotater som er markert som betalt i sin helhet, men som den tilknyttede inntekt eller utgiftsposten ikke stemmer overens med summen av faktura eller kreditnota.");
define("NBILL_ANOMALY_CHECK_2_WHAT", "Disse fakturaene eller kreditnotaer er merket som betalt i sin helhet, men summen av alle inntekter eller utgiftsposter knyttet til dem er mindre enn summen av faktura eller kreditnota, som viser at full betaling ikke synes å ha blitt gjort. For å løse denne konflikten, kontroller om en inntekt eller utgiftspost er til stede, men ikke er knyttet til faktura eller kredittnota, eller om en ny inntekt eller utgiftspost må opprettes, eller om fakturaen eller kreditnota bør merkes som ubetalt eller delvis betalt i stedet for betalt i sin helhet.");
define("NBILL_ANOMALY_CHECK_3", "Betalt for mye");
define("NBILL_ANOMALY_CHECK_3_HELP", "Ser etter eventuelle inntekt eller utgiftsposter som viser beløpet mottatt eller betalt for å være større enn summen av tilknyttede fakturaer eller kreditnotaer");
define("NBILL_ANOMALY_CHECK_3_WHAT", "Disse fakturaene eller kreditnotaer har inntekt eller utgiftsposter knyttet til dem som til sammen er mer enn summen av faktura eller kreditnota. Dette tyder på det er betalt for mye på elementet, i så fall bør det utføres en tilbakebetaling. Alternativt kan det være at du har dupliserte inntekt eller utgiftsposter, og da må du kanskje slette dem eller merke dem som ugyldig (dvs. sette beløpet til null og angi faktureringsnavnet som UGYLDIG) for å unngå feil i rapport totaler.");
define("NBILL_ANOMALY_CHECK_4", "Skattesats mangler");
define("NBILL_ANOMALY_CHECK_4_HELP", "Ser etter eventuelle inntekt eller utgiftsposter som viser en skattesats på 0 % (null), men som inneholder et skattebeløp større enn null.");
define("NBILL_ANOMALY_CHECK_4_WHAT", "De inntekt eller utgiftsposter oppført her viser et skattebeløp, men gjeldende skattesats er satt til null. Du må redigere posten og angi riktig skattesatsen i prosent. Vær oppmerksom på at inntekt og utgiftsposter kan ha opptil tre forskjellige skattesatser og tilsvarende beløp, så hvis mer enn ett avgiftsbeløp vises, må hver post ha en tilsvarende skattesats for avgiftsbeløpet.");
define("NBILL_ANOMALY_CHECK_5", "Ulik skattesats");
define("NBILL_ANOMALY_CHECK_5_HELP", "Ser etter eventuelle inntekt eller utgiftsposter der skattesatsen ikke samsvarer med skattesats på tilknyttede fakturaer eller kreditnotaer.");
define("NBILL_ANOMALY_CHECK_5_WHAT", "De inntekter eller utgiftsposter listet her har en skattesats som avviker fra den skattesats angitt på tilknyttete faktura eller kreditnota. Vennligst sjekk som satsen er riktig, og enten endre faktura/kreditnota eller inntekter/utgifter, slik at de er like.");
define("NBILL_ANOMALY_CHECK_6", "Avgiftsbeløp mangler");
define("NBILL_ANOMALY_CHECK_6_HELP", "Ser etter eventuelle inntekt eller utgiftsposter som ikke viser skatt, men hvor tilknyttet fakturaer eller kreditnotaer tilsier at det skulle ha vært skatt.");
define("NBILL_ANOMALY_CHECK_6_WHAT", "De inntekt eller utgiftsposter listet her viser et avgiftsbeløp på null, men tilknyttede fakturaer eller kredittnotater indikerer at skatt bør inkluderes. Sjekk om skatt skal legges til inntekt eller utgiftsposten, eller om skattebeløpet bør fjernes fra fakturaen (e) eller kredittnote (r).");
define("NBILL_ANOMALY_CHECK_7", "Ulike avgiftsbeløpet");
define("NBILL_ANOMALY_CHECK_7_HELP", "Ser etter eventuelle inntekt eller utgiftsposter der det totale skattebeløpet ikke er likestilt til den gitte prosentandel av totalen, eller hvor skattebeløpet ikke tilsvarer det som vises på eventuelle tilknyttede fakturaer eller kreditnotaer.");
define("NBILL_ANOMALY_CHECK_7_WHAT", "Postene som er oppført her viser et skattebeløp som ikke synes å likestilles til skattesats for varen. Dette kan være ok, for eksempel hvis varen består av både skattepliktige og ikke skattepliktige elementer, eller hvis totalen består av et stort antall elementer (som kan resultere i at skatten blir rundet opp for hvert element), eller hvis du har mottatt en refusjon av merverdiavgift, og hele beløpet består av MVA til en viss sats (i så fall, vil skattebeløpet være 100 % av inntektsbeløpet, selv om skattesatsen er lavere enn 100 %). Også, kan noen bruke ulike metoder for beregning av skatt, f.eks. ved å trekke fra en rabatt fra bruttobeløp i stedet for fra nettobeløpet, som også kan føre til at skatten synes å være feil. I de fleste tilfeller så skal skatt holdt opp mot hver post være likestille til prosentsats brukt - hvis ikke, må du kanskje endre enten skattesats eller skattebeløpet slik at de passer.");
define("NBILL_ANOMALY_CHECK_8", "Avvik på hovedbokbeløpet");
define("NBILL_ANOMALY_CHECK_8_HELP", "Ser etter eventuelle inntekts eller utgiftsposter der summen av hovedboksammenstilling ikke samsvarer med totalsummen for posten.");
define("NBILL_ANOMALY_CHECK_8_WHAT", "Total netto skatt eller brutto beløp tildelt til hovedbokskontoen for de oppførte transaksjonene samsvarer ikke med netto skatt eller brutto beløp for transaksjonen. Dette tyder på at hovedbokens oppbygning er feil og vil føre til unøyaktige rapporter. Rediger disse postene for å sikre at samlet netto skatt, og brutto beløp tildelt hovedbokskontoen er lik netto skatt, og brutto verdi av inntekt eller utgifter.");
define("NBILL_ANOMALY_CHECK_9", "Datoavvik");
define("NBILL_ANOMALY_CHECK_9_HELP", "Ser etter eventuelle inntekts eller utgiftsposter hvor dato er mer enn 31 dager før dato på faktura eller kreditnota de er knyttet til, eller er datert et år eller mer etter dato på faktura eller kreditnota (i tilfelle feil år ble skrev ved en feil – noe som er lett å gjøre i januar!).");
define("NBILL_ANOMALY_CHECK_9_WHAT", "Inntekts eller utgiftsposter knyttet til fakturaer eller kreditnotaer listet opp her er enten datert en måned eller mer tidligere enn fakturaen eller kredittnota de er knytet til, eller et år eller mer etter. Hvis ikke disse elementene virkelig ble betalt en måned eller mer på forhånd, eller et år eller mer for sent, har du sannsynligvis skrevet inn feil dato på inntekts eller utgiftspostene.");
define("NBILL_ANOMALY_SEARCH", "Søk etter avvik");
define("NBILL_ANOMALY_RESULTS", "Søkeresultater - avvik");
define("NBILL_ANOMALY_NONE_FOUND", "Ingen avvik ble funnet med denne sjekken");
define("NBILL_ANOMALY_INVOICE_NO", "Fakturanr.");
define("NBILL_ANOMALY_DESC", "Navn/beskrivelse");
define("NBILL_ANOMALY_DATE", "Dato");
define("NBILL_ANOMALY_INVOICE_NET", "Netto faktura");
define("NBILL_ANOMALY_INVOICE_TAX", "Avgift faktura");
define("NBILL_ANOMALY_INVOICE_GROSS", "Brutto faktura");
define("NBILL_ANOMALY_CR_NO", "Kreditnota nr.");
define("NBILL_ANOMALY_CR_NET", "Netto kreditnota");
define("NBILL_ANOMALY_CR_TAX", "Avgift kreditnota");
define("NBILL_ANOMALY_CR_GROSS", "Brutto kreditnota");
define("NBILL_ANOMALY_MARKED_PAID", "Markert betalt?");
define("NBILL_ANOMALY_MARKED_PARTIAL", "Markert delvis betalt?");
define("NBILL_ANOMALY_PAID_YES", "Merket som betalt i sin helhet");
define("NBILL_ANOMALY_PAID_NO", "Ikke merket som betalt i sin helhet");
define("NBILL_ANOMALY_PARTIAL_YES", "Merket som delvis betalt");
define("NBILL_ANOMALY_PARTIAL_NO", "Ikke merket som delvis betalt");
define("NBILL_ANOMALY_AMOUNT_EXPECTED", "Forventet beløp");
define("NBILL_ANOMALY_AMOUNT_RECEIVED", "Mottatt beløp");
define("NBILL_ANOMALY_AMOUNT_PAID", "Beløp betalt");
define("NBILL_ANOMALY_ACTION", "Utfør");
define("NBILL_ANOMALY_VIEW_INCOME", "Se inntekter");
define("NBILL_ANOMALY_VIEW_EXPENDITURE", "Se utgifter");
define("NBILL_ANOMALY_RECEIPT_NO", "Kvitteringsnr.");
define("NBILL_ANOMALY_PAYMENT_NO", "Betalingsnr.");
define("NBILL_ANOMALY_INCOME_NET", "Netto inntekter");
define("NBILL_ANOMALY_INCOME_TAX", "Avgift inntekter");
define("NBILL_ANOMALY_INCOME_GROSS", "Brutto inntekt");
define("NBILL_ANOMALY_EXP_NET", "Netto utgifter");
define("NBILL_ANOMALY_EXP_TAX", "Avgift utgifter");
define("NBILL_ANOMALY_EXP_GROSS", "Brutto utgifter");
define("NBILL_AWAITING_IN", "Venter på kvitteringsnr.");
define("NBILL_AWAITING_EX", "Venter på utbetalingsnr.");
define("NBILL_ANOMALY_LEDGER_NET", "Netto totalt hovedbok");
define("NBILL_ANOMALY_LEDGER_TAX", "Avgifter totalt hovedbok");
define("NBILL_ANOMALY_LEDGER_GROSS", "Brutto totalt hovedbok");
define("NBILL_ANOMALY_INVOICE_DATE", "Fakturadato");
define("NBILL_ANOMALY_CR_DATE", "Dato kreditnota");
define("NBILL_ANOMALY_PAYMENT_DATE", "Dato betalt");