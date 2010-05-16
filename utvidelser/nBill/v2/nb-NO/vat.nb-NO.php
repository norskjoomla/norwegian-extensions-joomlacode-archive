<?php
/**
* Language file for Sales Tax (VAT)
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

//Tax
define("NBILL_TAX_TITLE", "Merverdiavgift");
define("NBILL_TAX_INTRO", "Du kan angi forskjellige skattesatser for kjøpere i ulike land, eller annen skattesone - riktig sats vil automatisk bli brukt avhengig av kundens faktureringsadresse og/eller skattesone.");
define("NBILL_TAX_NAME", "Navn på avgift");
define("NBILL_TAX_COUNTRY", "Land");
define("NBILL_TAX_RATE", "Sats");
define("NBILL_TAX_PAYMENT_INSTR", "Betalingsinstruksjoner");
define("NBILL_TAX_SMALL_PRINT", "Liten skrift");
define("NBILL_TAX_EXEMPT_WITH_REF", "Avgiftsfri med referanse?");
define("NBILL_EDIT_TAX", "Rediger avgift");
define("NBILL_TAX_NAME_REQUIRED", "Du må oppgi et navn på denne avgiften.");
define("NBILL_TAX_COUNTRY_REQUIRED", "Du må angi et land.");
define("NBILL_NEW_TAX", "Ny avgift");
define("NBILL_TAX_DETAILS", "Avgiftsdetaljer");
define("NBILL_TAX_ZONE", "Avgiftssone");
define("NBILL_TAX_ONLINE_EXEMPT", "Avgiftsfritt ved bestilling på nett?");
define("NBILL_INSTR_TAX_NAME", "Skriv inn fullt navn på denne avgiftstypen (f.eks. \"Merverdiavgift\")");
define("NBILL_INSTR_TAX_COUNTRY", "Spesifiser hvilke land denne avgiften gjelder for. I tillegg til de enkelte land er det 2 spesielle oppføringer: \"EU\", som omfatter alle land i EU, og \"Global\" som skal brukes når landet i faktureringsadressen ikke har sin egen avgift.");
define("NBILL_INSTR_TAX_RATE", "Angi avgiften som en prosentverdi (ikke skriv % tegnet)");
define("NBILL_INSTR_TAX_PAYMENT_INSTR", "Eventuelle betalingsbetingelser som oppgis her vil overstyre standard betalingsbetingelser (definert på leverandørside) bare for dette landet.");
define("NBILL_INSTR_TAX_SMALL_PRINT", "Det du angir her vil overstyre det som er defienrt på leverandørsiden (bare for dette landet).");
define("NBILL_INSTR_TAX_EXEMPT_WITH_REF", "Angi om kjøperen ikke skal betale avgift, kjøper har eget avgiftsnummer eller er en videreforhandler (f. eks. for forsyninger fra Storbritannia til EU, eller varer til forhandlere som er fritatt fra salgsskatt i USA).");
define("NBILL_INSTR_TAX_ZONE", "Hvis denne avgiftsats kun gjelder for enkelte kunder (f.eks. i en bestemt stat eller kommune), angi en kode (opptil 5 tegn) for å identifisere denne avgiftssats - og register den samme koden på innstillingene for kunden.");
define("NBILL_INSTR_TAX_ONLINE_EXEMPT", "Hvorvidt nettbestillinger er fritatt fra denne avgiften (typisk for bruk i USA). Hvis ja vil ikke avgiften som normalt faller inn under denne bestillingen avgiften bli. Ved bestillinger fra administratorsiden kan det velges om denne avgiften skal legges til eller ikke.");

//Version 1.2.4
define("NBILL_TAX_RATE_CHANGE_WARNING", "ADVARSEL! Du har valgt å endre denne satsen fra %s til %s, men det er allerede bestillinger med periodiske betalinger som bruker den gamle satsen. Fremtidige fakturaer for disse bestillingene vil fortsatt bli produsert med de gamle satsene dersom bestillingen ikke oppdateres. Endringen har IKKE blitt lagret. Velg nedenfor hvilken handling du vil utføre.");
define("NBILL_TAX_RATE_CHANGE_AUTO_RENEW", "Det er %s ordre som er satt til autofornyelse. Det anbefales at du tillater " . NBILL_BRANDING_NAME . " automatisk justering av nettopris og avgift, slik at bruttobeløpet forblir det samme. På denne måten kan autofornyelser forsette. MERK: Hvis du velger å endre bruttobeløp i stedet (ikke anbefalt), må eksisterende betalinger enten endres eller avbrytes, og settes opp igjen med det nye beløpet.");
define("NBILL_TAX_RATE_CHANGE_MANUAL_RENEW", "Det er %s ordre som er satt til å bli manuelt fornyet. Du har valget mellom å la " . NBILL_BRANDING_NAME . " automatisk justere nettopris og avgift, slik at bruttobeløp forblir det samme, eller til automatisk å justere avgift og bruttobeløp, slik at nettoprisen forblir den samme. Hvis bruttobeløp blir endret, vil neste betaling for hver bestilling være et annet beløp enn tidligere, så ikke bruk dette alternativet hvis kunden har en ordre til autofornyelse satt opp (ikke sannsynlig siden disse bestillingene må fornyes manuelt).");
define("NBILL_TAX_RATE_CHANGE_ACTION_AUTO", "Velg en av følgende handlinger (på ordre med autofornyelse)");
define("NBILL_TAX_RATE_CHANGE_ACTION_MANUAL", "Velg en av følgende handlinger (på ordre med manuell fornyelse)");
define("NBILL_TAX_RATE_CHANGE_UPDATE_NET", "Oppdater nettopris og avgift, bruttobeløp forblir uendret.");
define("NBILL_TAX_RATE_CHANGE_UPDATE_GROSS", "Oppdater bruttopris og avgift, nettobeløp forblir uendret.");
define("NBILL_TAX_RATE_CHANGE_NO_ACTION_AND_CANCEL", "Avbryt og IKKE endre avgiften");
define("NBILL_TAX_RATE_CHANGE_NO_ACTION_AND_SAVE", "Lagre den nye avgiften, men ikke oppdater ordrene");
define("NBILL_TAX_RATE_CHANGE_RECOMMENDED", " (Anbefalt)");
define("NBILL_TAX_RATE_CHANGE_NOT_RECOMMENDED", " (IKKE ANBEFALT!)");
define("NBILL_TAX_RATE_CHANGE_ORDER_DETAILS", "%s å se bestillinger som vil bli berørt av denne endringen.");
define("NBILL_TAX_RATE_CHANGE_ORDERS_INTRO", "Følgende ordre vil bli berørt av denne endringen. MERK: Denne listen inneholder også kansellerte ordrer i tilfelle de blir aktivert igjen. Klikk på ett ordrenr. for å åpne ordren i ett nytt vindu.");
define("NBILL_TAX_AFFECTED_ORDER_NO", "Ordrenr.");
define("NBILL_TAX_AFFECTED_ORDER_COMPANY", "Firma");
define("NBILL_TAX_AFFECTED_ORDER_CONTACT", "Kontakt");
define("NBILL_TAX_AFFECTED_ORDER_PRODUCT", "Produkt");
define("NBILL_TAX_AFFECTED_ORDER_NET", "Nettopris");
define("NBILL_TAX_AFFECTED_ORDER_TAX", "Avgiftsbeløpet");
define("NBILL_TAX_AFFECTED_ORDER_GROSS", "Bruttobeløp");
define("NBILL_TAX_RATE_CHANGE_WARNING_END", "Når du har valgt hva du vil gjøre, klikk enten på 'Bruk' eller 'Lagre' på verktøylinjen. Før du har klikket på enten 'Bruk' eller 'Lagre', skjer det ingen ting.");
define("NBILL_TAX_RATE_CHANGE_SURE", "Denne handlingen påvirker %s ordre. Er du sikker på at du vil fortsette?");
define("NBILL_TAX_RATE_CHANGE_ORDERS_UPDATED", "%s ordre er oppdatert.");
define("NBILL_TAX_RATE_CHANGE_NONE", "Ingen"); //Note for translators: This is 'no' as in 'not any' - ie. 'No Order Records have been updated'
define("NBILL_TAX_RATE_CHANGE_CHECK_PRODUCTS", "Merk: Det kan være lurt å kontrollere prisene på produktene etter endringen på avgiften, spesielt hvis prisene er inkl. avgift");