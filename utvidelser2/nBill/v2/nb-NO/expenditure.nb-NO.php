<?php
/**
* Language file for the Expenditure feature
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

//Expenditure
define("NBILL_EXPENDITURE_TITLE", "Utgifter");
define("NBILL_EXPENDITURE_INTRO", "Her kan du registrere alle dine utgifter dirkete på riktige kontoer slik at rapporter kan lages.");
define("NBILL_PAYMENT_NO", "Utbetalingsnummer");
define("NBILL_PAYMENT_DATE", "Utbetalingsdato");
define("NBILL_PAID_TO", "Betalt til");
define("NBILL_PAYMENT_AMOUNT", "Beløp");
define("NBILL_PAYMENT_FOR", "For");
define("NBILL_EXP_LEDGER_BREAKDOWN_MISMATCH", "ADVARSEL! Totalen på kontoregistreringen samsvarer ikke med beløpet for utgifter. Klikk OK om du vil fortsette likevel, eller klikk på Avbryt og endre på registreringen eller på utgiftsbeløpet.");
define("NBILL_EDIT_EXPENDITURE", "Rediger utgift");
define("NBILL_NEW_EXPENDITURE", "Ny utgift");
define("NBILL_EXPENDITURE_DETAILS", "Utgiftsdetaljer");
define("NBILL_INCOME_PAYMENT_NO", "Utbetalingsnummer");
define("NBILL_INSTR_PAYMENT_NO", "<strong>Merk:</strong> Skal stå tomt hvis du legger til en ny utgift - komponenten vil automatisk tildele neste utbetalingsnummer.");
define("NBILL_INSTR_SUPPLIER", "Hvis du allerede har definert leverandøren i leverandørlista kan du velge her. Hvis dette er et engangstilfelle, kan du skrive inn leverandørdetaljer nedenfor.");
define("NBILL_INSTR_SUPPLIER_NAME", "Navn på firmaet eller personen som betalingen gjelder for.");
define("NBILL_EXPENDITURE_FOR", "For");
define("NBILL_INSTR_EXPENDITURE_FOR", "Beskriv hva betalingen gjelder");
define("NBILL_DATE_PAID", "Dato betalt");
define("NBILL_INSTR_DATE_PAID", "");
define("NBILL_AMOUNT_PAID", "Totalbeløp betalt (inkl. avgifter)");
define("NBILL_INSTR_AMOUNT_PAID", "");
define("NBILL_PAYMENT_REFERENCE", "Betalingsreferanse");
define("NBILL_INSTR_PAYMENT_REFERENCE", "Din referanse til leverandøren for denne betalingen");
define("NBILL_EXP_TAX_RATE_AND_AMOUNT", "Mva-sats og beløp");
define("NBILL_INSTR_EXP_TAX_RATE_AND_AMOUNT", "Hvis utgifter inneholder en avgift, kan du angi sats og beløp her (opptil 3 forskjellige satser per utgiftslinje). Skriv bare avgiften (ikke hele beløpet som er betalt). Dersom avgift ikke er aktuelt, la feltet stå tomt eller skriv 0 (null).");
define("NBILL_EXP_TAX_RATE", "Sats");
define("NBILL_EXP_TAX_AMOUNT", "Beløp");
define("NBILL_EXP_TAX_REFERENCE", "Avgiftsreferanse");
define("NBILL_INSTR_EXP_TAX_REFERENCE", "MVA-nummer til denne leverandøren");
define("NBILL_EXP_NO_SUMMARY", "Ikke ta med på oppsummeringen?");
define("NBILL_INSTR_EXP_NO_SUMMARY", "Hvis du ønsker at denne utgiftlinjen ikke skal være med på oppsummeringen, setter denne til 'ja'.");
define("NBILL_EXP_SUPPLIER_NAME_REQUIRED", "Angi hvem betalingen ble gjort til (leverandørnavn).");
define("NBILL_EXP_WHAT_FOR", "ADVARSEL! Du har ikke angitt hva betalingen gjelder. Klikk OK for å lagre likevel, eller klikk Avbryt for å gå tilbake og skrive hva betalingen gjelder.");
define("NBILL_EXP_NO_AMOUNT", "ADVARSEL! Du har ikke skrevet beløp. Klikk OK for å lagre likevel, eller klikk Avbryt for å gå tilbake og skrive inn et beløp.");
define("NBILL_EXP_PAYEE", "Mottaker");
define("NBILL_SELECT_VENDOR_FOR_PAYMENT_NO_GEN", "Utbetalingsnummer lages bare når leverandør er valgt");
define("NBILL_GENERATE_PAYMENTS_UP_TO", "Skriv inn dato (YYYY/MM/DD) og lag utbetalingsnumre fram til denne datoen. Registreringer etter denne datoen vil ikke automatisk bli gitt et utbetalingsnummer.");
define("NBILL_GENERATE_PAYMENT_NOS", "Lag betalingsnummer");
define("NBILL_PAYMENT_NOS_GENERATED", "%s Betalingsnummer laget%s");
define("NBILL_EXP_UNNUMBERED", "Venter på betalingsnummer");
define("NBILL_RELATED_CREDITS", "Relatert kreditnota eller kreditnotaer");
define("NBILL_INSTR_RELATED_CREDITS", "Hvis denne utgiften er for betaling med en eller flere kreditnotaer, velg kreditnota her (ubetalte kreditnota er listet her).");
define("NBILL_EXP_PAYEE_ADDRESS", "Mottakers adresse");
define("NBILL_INSTR_PAYEE_ADDRESS", "Mottakeradresse til person eller firma");
@define("NBILL_GENERATE_MASTER", "ADVARSEL! Dette lager også betalingsnummer til hoveddatabasen(e)!");

//Version 2.0.0
define("NBILL_EXPENDITURE_LEDGER_NET_AMOUNT", "Netto:");
define("NBILL_EXPENDITURE_LEDGER_TAX_RATE", "Skattesats:");
define("NBILL_EXPENDITURE_LEDGER_TAX_AMOUNT", "Avgift:");
define("NBILL_EXPENDITURE_LEDGER_GROSS_AMOUNT", "Brutto:");
define("NBILL_EXPENDITURE_LEDGER_GUESSED", "PLEASE NOTE: MERK: Fordelingen av netto, skatt, og brutto beløp for den hovedbokens oppføringer tilknyttet denne posten er beregnet mens date er overført fra en tidligere versjon av " . NBILL_BRANDING_NAME . ". Vennligst sjekk og korrigere tallene i den røde boksen nedenfor, og lagre denne posten.");
define("NBILL_EXPENDITURE_LEDGER_PLEASE_CHECK", "Sjekk disse tallene og endre om nødvendig.");
define("NBILL_PAYEE_COUNTRY", "Utbetalingsmottakers land");
define("NBILL_INSTR_PAYEE_COUNTRY", "");
define("NBILL_EXPENDITURE_RECORD_LIMIT_WARNING", "ADVARSEL! Etter som det er %s eller mer ubetalt kredittnotater i databasen, blir bare de første %s postene vist i listen ovenfor. Hvis kredittnotaten du trenger ikke er her, kan du enten klikke på 'Vis alle' (nedenfor), eller merke den som betalt på kredittnotatlisten (de vil da automatisk bli valgt her).");
define("NBILL_EXPENDITURE_SHOW_ALL", "Vis alle");