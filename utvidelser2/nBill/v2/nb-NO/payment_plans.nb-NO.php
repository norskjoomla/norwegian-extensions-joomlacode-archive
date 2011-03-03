<?php
/**
* Language file for the Payment Plans feature
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

//Payment Plans
define("NBILL_PAYMENT_PLANS_TITLE", "Betalingsplaner");
define("NBILL_PAYMENT_PLANS_INTRO", "Betalingsplaner lar deg definere om varer med en engangsbetaling frekvens (dvs. noe som ikke er en pågående abonnement) kan betales i flere avdrag, og i så fall, hva reglene er for å gjøre betalinger (f. eks enten det kreves depositum, avdragsfrekvens, osv). Ikke alle betalingsløsninger støtter alle funksjonene for betalingsplaner. Noen betalingsløsninger støtter kanskje ikke betalingsplaner i det hele tatt (f. eks hvis de ikke tillater gjentakende betalinger eller et fast antall avdrag).");
define("NBILL_PAYMENT_PLAN_NAME", "Navn på betalingsplan");
define("NBILL_PAYMENT_PLAN_TYPE", "Type betalingsplan");
define("NBILL_PAYMENT_PLAN_PERCENTAGE", "Prosent depositum");
define("NBILL_EDIT_PAYMENT_PLAN", "Rediger betalingsplan");
define("NBILL_PAYMENT_PLAN_NAME_REQUIRED", "Skriv inn et navn for denne betalingen planen");
define("NBILL_NEW_PAYMENT_PLAN", "Ny betalingsplan");
define("NBILL_PAYMENT_PLAN_DETAILS", "Detaljer betalingsplan");
define("NBILL_INSTR_PAYMENT_PLAN_NAME", "Skriv inn et beskrivende navn for denne betalingsplan som gjør det lett å identifisere hva det er for.");
define("NBILL_PAYMENT_PLAN_TYPE", "Type plan");
define("NBILL_INSTR_PAYMENT_PLAN_TYPE", "Velg type betalingsplan du behøver.<ul><li>'Forhåndsbetale' er standard hvor hele beløpet betales umiddelbart. </li><li>'Avdrag' deler det skyldige beløpet i vanlige betalinger med de intervaller definert under.</li><li>'Depositum, pluss endelig betaling' et fast beløp eller prosentandel umiddelbart og resten når brukeren velger når de skal betale mellomlegget (ingen ytterligere beløp trekkes automatisk).</li><li>'Depositum pluss avdrag' et fast beløp eller prosentandel umiddelbart, og resten delt i vanlige betalinger med intervaller du definerer nedenfor (den umiddelbare betalingen er klassifisert som et avdrag).</li><li>'Utsatt betaling' ingen betaling nå, og venter til brukeren er klar til å betale.</li><li>'Brukerkontrollert' brukeren kan velge hvor mye du skal betale på forhånd (om noe), og gir dem mulighet til å betale resten (i flere delbetalinger ved behov) når de er klare.</li></ul>");
define("NBILL_INSTR_PAYMENT_PLAN_PERCENTAGE", "Prosentvis krav for depositum (dvs. den første innbetalingen) - Ikke ta med prosenttegnet. ( skal du skrive 10 %,skriver du bare 10). Denne innstillingen har ingen virkning med mindre type plan inkluderer et depositum.");
define("NBILL_PAYMENT_PLAN_AMOUNT", "Beløp");
define("NBILL_INSTR_PAYMENT_PLAN_AMOUNT", "Fast beløp som kreves for første innbetaling (dvs. den første betalingen - gjelder bare hvis prosentandelen er 0, og type plan inkluderer et depositum).");
define("NBILL_PAYMENT_PLAN_AMOUNT_REQUIRED", "Angi enten en prosentsats eller et beløp.");
define("NBILL_PAYMENT_PLAN_INSTALLMENT_FREQUENCY", "Avdrag betalingsfrekvens");
define("NBILL_INSTR_PAYMENT_PLAN_INSTALLMENT_FREQUENCY", "Etter den første betalingen, angi hvor ofte avdraget skal betales. Denne innstillingen har ingen virkning med mindre type plan inkluderer avdrag.");
define("NBILL_PAYMENT_PLAN_NO_OF_INSTALLMENTS", "Antall avdrag");
define("NBILL_INSTR_PAYMENT_PLAN_NO_OF_INSTALLMENTS", "Hvor mange avdrag å betale (beløpet for hvert avdrag vil bli beregnet basert på det totale beløpet som gjenstår å betale dividert på antall avdrag du definerer her. Hvis beløpet ikke kan deles inn i eksakt like terminer, vil den første betalingen økes eller redusert tilsvarende). Denne innstillingen har ingen virkning med mindre type plan inkluderer avdrag.");
define("NBILL_PAYMENT_PLAN_DURATION", "Utsettelsesperiode");
define("NBILL_INSTR_PAYMENT_PLAN_DURATION", "Hvis kunden ikke betaler noe på forhånd, kan du angi her hvor lenge du vil utsette den første betalingen for. Med mindre du velger 'ubestemt tid', vil kunden likevel omadresseres for å planlegge sin betaling(er). MERK: Ikke alle betalingsløsninger støtte utsettelser (eller 'prøveversjoner'). Denne innstillingen har ingen virkning med mindre type plan inneholder utsettelsesperiode.");
define("NBILL_PAYMENT_PLAN_CANNOT_DELETE", "Du kan ikke slette en betalingsplan som blir brukt som standard plan for tilbudsforespørsler, ordre eller fakturaer.");
define("NBILL_PAYMENT_PLAN_QUOTE_DEFAULT", "Standard pristilbud");
define("NBILL_INSTR_PAYMENT_PLAN_QUOTE_DEFAULT", "Hvorvidt å gjøre denne betalingsplan til standard for nye pristilbud. Hvis du setter denne til 'ja', vil andre betalingsplan markert som standard bli endret til 'nei'.");
define("NBILL_PAYMENT_PLAN_INVOICE_DEFAULT", "Standard faktura");
define("NBILL_INSTR_PAYMENT_PLAN_INVOICE_DEFAULT", "Hvorvidt å gjøre denne betalingsplan til standard for nye fakturaer. Hvis du setter denne til 'ja', vil andre betalingsplan markert som standard bli endret til 'nei'.");
define("NBILL_PLAN_DEFAULT_YES", "Ja");
define("NBILL_PLAN_DEFAULT_NO", "Nei");
