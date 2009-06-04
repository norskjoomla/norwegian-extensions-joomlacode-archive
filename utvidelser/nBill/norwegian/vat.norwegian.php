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

//Tax
define("INV_TAX_TITLE", "Merverdiavgift / Omsetningsavgift");
define("INV_TAX_INTRO", "Du kan angi forskjellige skattsatser for kj�perne i ulike land, eller annen skattsone - riktig sats vil automatisk bli brukt avhengig av kundens faktureringsadresse og / eller skattesone.");
define("INV_TAX_NAME", "Navn p� avgift");
define("INV_TAX_COUNTRY", "Land");
define("INV_TAX_RATE", "Sats");
define("INV_TAX_PAYMENT_INSTR", "Betalingsinstruksjoner");
define("INV_TAX_SMALL_PRINT", "Liten skrift");
define("INV_TAX_EXEMPT_WITH_REF", "Avgiftsfri med referanse?");
define("INV_EDIT_TAX", "Rediger avgift");
define("INV_TAX_NAME_REQUIRED", "Du m� oppgi et navn p� denne avgiften.");
define("INV_TAX_COUNTRY_REQUIRED", "Du m� angi et land.");
define("INV_NEW_TAX", "Ny avgift");
define("INV_TAX_DETAILS", "Avgiftsdetaljer");
define("INV_TAX_ZONE", "Avgiftssone");
define("INV_TAX_ONLINE_EXEMPT", "Avgiftsfritt ved online bestilling?");
define("INV_INSTR_TAX_NAME", "Skriv inn fullt navn p� denne avgiftstype (f.eks. \"Merverdiavgift\")");
define("INV_INSTR_TAX_COUNTRY", "Spesifiser hvilke land denne avgiften gjelder for. I tillegg til de enkelte land er det 2 spesielle oppf�ringer: \"EU\", som omfatter alle land i EU, og  \"Global\" som skal brukes n�r landet i faktureringsadressen ikke har sin egen avgift.");
define("INV_INSTR_TAX_RATE", "Angi avgiften som en prosentverdi (ikke skriv % tegnet)");
define("INV_INSTR_TAX_PAYMENT_INSTR", "Eventuelle betalingsinstruksjoner du oppgir her vil overstyre standard betalingsinstruksjonene (definert p� leverand�rside) bare for dette landet.");
define("INV_INSTR_TAX_SMALL_PRINT", "Eventuelle liten skrift du oppgir her vil overstyre standard liten skrift (definert p� leverand�rside) bare for dette landet.");
define("INV_INSTR_TAX_EXEMPT_WITH_REF", "Angi om kj�peren ikke skal betale avgift, kj�per har eget avgiftsnummer eller er en videreforhandler (f. eks. for forsyninger laget fra Storbritannia til EU, eller varer til forhandlere som er fritatt fra salgsskatt i USA).");
define("INV_INSTR_TAX_ZONE", "Hvis denne avgiftsats kun gjelder for enkelte kunder (f. eks. i en bestemt stat eller kommune), angi en kode (opptil 5 tegn) for � identifisere denne avgiftssats - og register den samme koden p� kundens innstillinger.");
define("INV_INSTR_TAX_ONLINE_EXEMPT", "Hvorvidt online bestillinger er fritatt fra denne avgiften (typisk for bruk i USA). Hvis ja, bestillinger som normalt faller inn under denne avgiften, vil ikke avgiften bli lagt til p� bestillingen. Ved bestillinger fra administratorsiden kan det velge om denne avgiften skal legges til eller ikke.");

//Version 1.2.4
define("INV_TAX_RATE_CHANGE_WARNING", "ADVARSEL! Du har valgt � endre denne satsen fra %s til %s, men det er allerede bestillinger med periodisk betalinger som bruker den gamle satsen. Fremtidige fakturaer for disse bestillingene vil fortsatt bli produsert med de gamle satsene dersom bestillingen ikke oppdateres. Endringen har IKKE blitt lagret. Velg nedenfor hvilken handling du vil utf�re.");
define("INV_TAX_RATE_CHANGE_AUTO_RENEW", "Det er %s ordre som er satt til autofornyelse. Det anbefales at du tillater " . INV_BRANDING_NAME . " automatisk justerer netto pris og avgift, slik at brutto bel�p forblir det samme - p� den m�ten kan autofornyelser forsette. MERK: Hvis du velger � endre brutto bel�p i stedet � (ikke anbefalt), m� eksisterende betalinger enten endres eller avbrytes, og settes opp igjen p� det nye bel�pet.");
define("INV_TAX_RATE_CHANGE_MANUAL_RENEW", "Det er %s ordre som er satt til � manuelt bli fornyet. Du har valget mellom � la " . INV_BRANDING_NAME . " automatisk justere netto pris og avgift, slik at brutto bel�p forblir det samme, eller til automatisk � justere avgift og brutto bel�p, slik at netto prisen forblir den samme. Hvis brutto bel�p blir endret, vil neste betaling for hver bestilling v�re et annet bel�p enn tidligere, s� ikke bruk dette alternativet hvis kunden har en ordre til autofornyelse satt opp (ikke sannsynlig siden disse bestillingene m� fornyes manuelt).");
define("INV_TAX_RATE_CHANGE_ACTION_AUTO", "Velg ett av f�lgende handlinger (p� ordre med autofornyelse)");
define("INV_TAX_RATE_CHANGE_ACTION_MANUAL", "Velg ett av f�lgende handlinger (p� ordre med manuell fornyelse)");
define("INV_TAX_RATE_CHANGE_UPDATE_NET", "Oppdater netto pris og avgift, bruttobel�p samme som f�r");
define("INV_TAX_RATE_CHANGE_UPDATE_GROSS", "Oppdater brutto pris og avgift, nettobel�p samme som f�r");
define("INV_TAX_RATE_CHANGE_NO_ACTION_AND_CANCEL", "Avbryt og IKKE endre avgiften");
define("INV_TAX_RATE_CHANGE_NO_ACTION_AND_SAVE", "Lagre den nye avgiften, men ikke oppdater ordrene");
define("INV_TAX_RATE_CHANGE_RECOMMENDED", " (Anbefalt)");
define("INV_TAX_RATE_CHANGE_NOT_RECOMMENDED", " (IKKE ANBEFALT!)");
define("INV_TAX_RATE_CHANGE_ORDER_DETAILS", "%s � se bestillinger som vil bli ber�rt av denne endringen.");
define("INV_TAX_RATE_CHANGE_ORDERS_INTRO", "F�lgende ordre vil bli ber�rt av denne endringen. MERK: Denne listen inneholder ogs� kansellerte ordrer i tilfelle de blir aktivert igjen. Klikk p� ett ordrenr. for � �pne ordren i ett nytt vindu.");
define("INV_TAX_AFFECTED_ORDER_NO", "Ordrenr.");
define("INV_TAX_AFFECTED_ORDER_COMPANY", "Firma");
define("INV_TAX_AFFECTED_ORDER_CONTACT", "Kontakt");
define("INV_TAX_AFFECTED_ORDER_PRODUCT", "Produkt");
define("INV_TAX_AFFECTED_ORDER_NET", "Nettopris");
define("INV_TAX_AFFECTED_ORDER_TAX", "Avgiftsbel�pet");
define("INV_TAX_AFFECTED_ORDER_GROSS", "Bruttobel�p");
define("INV_TAX_RATE_CHANGE_WARNING_END", "N�r du har valgt hva du vil gj�re, klikk enten p� "Bruk" eller "Lagre" p� verkt�ylinjen. F�r du har klikket p� enten "Bruk" eller "Lagre", skjer det ingen ting.");
define("INV_TAX_RATE_CHANGE_SURE", "Denne handlingen p�virker %s ordre. Er du sikker p� at du vil fortsette?");
define("INV_TAX_RATE_CHANGE_ORDERS_UPDATED", "%s ordre er oppdatert.");
define("INV_TAX_RATE_CHANGE_NONE", "Ingen"); //Note for translators: This is 'no' as in 'not any' - ie. 'No Order Records have been updated'
define("INV_TAX_RATE_CHANGE_CHECK_PRODUCTS", "Merk: Det kan v�re lurt � kontrollere prisene p� produktene etter endringen p� avgiften, spesielt hvis prisene er inkl avgift");
?>