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

//Expenditure
define("NBILL_EXPENDITURE_TITLE", "Utgifter");
define("NBILL_EXPENDITURE_INTRO", "Her kan du registrere alle dine utgifter dirkete p� riktige kontoer slik at rapporter kan lages.");
define("NBILL_PAYMENT_NO", "Utbetalingsnummer");
define("NBILL_PAYMENT_DATE", "Utbetalingsdato");
define("NBILL_PAID_TO", "Betalt til");
define("NBILL_PAYMENT_AMOUNT", "Bel�p");
define("NBILL_PAYMENT_FOR", "For");
define("NBILL_EXP_LEDGER_BREAKDOWN_MISMATCH", "ADVARSEL! Totalen p� kontoregistreringen samsvarer ikke med bel�pet for utgifter. Klikk OK om du vil fortsette likevel, eller klikk p� Avbryt og endre p� registreringen eller p� utgiftsbel�pet.");
define("NBILL_EDIT_EXPENDITURE", "Rediger utgift");
define("NBILL_NEW_EXPENDITURE", "Ny utgift");
define("NBILL_EXPENDITURE_DETAILS", "Utgiftsdetaljer");
define("NBILL_INCOME_PAYMENT_NO", "Utbetalingsnummer");
define("NBILL_INSTR_PAYMENT_NO", "<strong>Merk:</strong> Skal st� tomt hvis du legger til en ny utgift - komponenten vil automatisk tildele neste utbetalingsnummer.");
define("NBILL_INSTR_SUPPLIER", "Hvis du allerede har definert leverand�ren i leverand�rlista kan du velge her. Hvis dette er et engangstilfelle, kan du  skrive inn leverand�rdetaljer nedenfor.");
define("NBILL_INSTR_SUPPLIER_NAME", "Navn p� firmaet eller personen som betalingen gjelder for.");
define("NBILL_EXPENDITURE_FOR", "For");
define("NBILL_INSTR_EXPENDITURE_FOR", "Beskriv hva betalingen gjelder");
define("NBILL_DATE_PAID", "Dato betalt");
define("NBILL_INSTR_DATE_PAID", "");
define("NBILL_AMOUNT_PAID", "Totalbel�p betalt (inkl. avgifter)");
define("NBILL_INSTR_AMOUNT_PAID", "");
define("NBILL_PAYMENT_REFERENCE", "Betalingsreferanse");
define("NBILL_INSTR_PAYMENT_REFERENCE", "Din referanse til leverand�ren for denne betalingen");
define("NBILL_EXP_TAX_RATE_AND_AMOUNT", "Mva-sats og bel�p");
define("NBILL_INSTR_EXP_TAX_RATE_AND_AMOUNT", "Hvis utgifter inneholder en avgift, kan du angi sats og bel�p her (opptil 3 forskjellige satser per utgiftslinje). Skriv bare avgiften (ikke hele bel�pet som er betalt). Dersom avgift ikke er aktuelt, la feltet st� tomt eller skriv 0 (null).");
define("NBILL_EXP_TAX_RATE", "Sats");
define("NBILL_EXP_TAX_AMOUNT", "Bel�p");
define("NBILL_EXP_TAX_REFERENCE", "Avgiftsreferanse");
define("NBILL_INSTR_EXP_TAX_REFERENCE", "MVA-nummer til denne leverand�ren");
define("NBILL_EXP_NO_SUMMARY", "Ikke ta med p� oppsummeringen?");
define("NBILL_INSTR_EXP_NO_SUMMARY", "Hvis du �nsker at denne utgiftlinjen ikke skal v�re med p� oppsummeringen, setter denne til "ja".");
define("NBILL_EXP_SUPPLIER_NAME_REQUIRED", "Angi hvem betalingen ble gjort til (leverand�rnavn).");
define("NBILL_EXP_WHAT_FOR", "ADVARSEL! Du har ikke angitt hva betalingen gjelder. Klikk OK for � lagre likevel, eller klikk Avbryt for � g� tilbake og skrive hva betalingen gjelder.");
define("NBILL_EXP_NO_AMOUNT", "ADVARSEL! Du har ikke skrevet bel�p. Klikk OK for � lagre likevel, eller klikk Avbryt for � g� tilbake og skrive inn et bel�p.");
define("NBILL_EXP_PAYEE", "Mottaker");
define("NBILL_SELECT_VENDOR_FOR_PAYMENT_NO_GEN", "Utbetalingsnummer lages bare n�r leverand�r er valgt");
define("NBILL_GENERATE_PAYMENTS_UP_TO", "Skriv inn dato (YYYY/MM/DD) og lag utbetalingsnumre fram til denne datoen. Registreringer etter denne datoen vil ikke automatisk bli gitt et utbetalingsnummer.");
define("NBILL_GENERATE_PAYMENT_NOS", "Lag betalingsnummer");
define("NBILL_PAYMENT_NOS_GENERATED", "%s Betalingsnummer laget%s");
define("NBILL_EXP_UNNUMBERED", "Venter p� betalingsnummer");
define("NBILL_RELATED_CREDITS", "Relatert kreditnota eller kreditnotaer");
define("NBILL_INSTR_RELATED_CREDITS", "Hvis denne utgiften er for betaling med en eller flere kreditnotaer, velg kreditnota her (ubetalte kreditnota er listet her).");
define("NBILL_EXP_PAYEE_ADDRESS", "Mottakers adresse");
define("NBILL_INSTR_PAYEE_ADDRESS", "Mottakeradresse til person eller firma");
define("NBILL_GENERATE_MASTER", "ADVARSEL! Dette lager ogs� betalingsnummer til hoveddatabasen(e)!");
?>