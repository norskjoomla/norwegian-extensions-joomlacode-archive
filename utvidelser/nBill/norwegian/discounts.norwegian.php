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

//Discounts
define("INV_DISCOUNTS_TITLE", "Rabatter");
define("INV_DISCOUNTS_INTRO", "Her kan du sette opp regler for rabatter på dine produkter (for hvert produkt eller for alle). Rabatter kan avgrenses på brukernivå og/eller rabattkoder, og det kan være som prosent eller fast beløp. Du kan også velge at rabattkoden bare skal kunne brukes en gang, eller at rabatten bare gjelder for en angitt periode.");
define("INV_DISCOUNT_NAME", "Rabattnavn");
define("INV_DISCOUNT_END_DATE", "Sluttdato");
define("INV_DISCOUNT_USER_LEVEL", "Brukernivå");
define("INV_DISCOUNT_PERCENTAGE", "Prosent");
define("INV_DISCOUNT_AMOUNT", "Beløp");
define("INV_EDIT_DISCOUNT", "Rediger rabatt");
define("INV_ALL_GROUPS", "Alle");
define("INV_AND_ABOVE", " og over");
define("INV_DISCOUNT_NAME_REQUIRED", "Skriv inn ett navn på rabatten.");
define("INV_NEW_DISCOUNT", "Ny rabatt");
define("INV_DISCOUNT_DETAILS", "Rabattdetaljer");
define("INV_INSTR_DISCOUNT_NAME", "Skriv en beskrivelse av rabatten, slik at du senere husker hvorfor det er gitt rabatt.");
define("INV_DISCOUNT_DISPLAY_NAME", "Vis navn");
define("INV_INSTR_DISCOUNT_DISPLAY_NAME", "Tekst som vises på faktura når denne rabatten brukes (er feltet blankt, brukes rabattnavnet).");
define("INV_DISCOUNT_TIME_LIMITED", "Tidsperiode?");
define("INV_INSTR_DISCOUNT_TIME_LIMITED", "Her angis en periode for når denne rabatten gjelder.");
define("INV_DISCOUNT_START_DATE", "Stardato");
define("INV_INSTR_DISCOUNT_START_DATE", "Når rabatten skal starte (kan bare brukes bare når 'Tidsperiode' er satt til 'JA')");
define("INV_INSTR_DISCOUNT_END_DATE", "Når rabatten skal avsluttes (kan bare brukes bare når 'Tidsperiode' er satt til 'JA')");
define("INV_DISCOUNT_GLOBAL", "Global?");
define("INV_INSTR_DISCOUNT_GLOBAL", "Her angir en om rabatten skal gjelde for alle produkter (sett til 'NEI' og rediger de produktene rabatten skal gjelde for om denne rabatten skal gjelde enkeltprodukter). MERK: Du kan også redigere enkeltprodukter slik at rabatt ikke gjelder om du setter at rabatten skal gjelde for alle produkter.");
define("INV_INSTR_DISCOUNT_USER_LEVEL", "Brukergruppe som denne rabatten gjelder for.");
define("INV_DISCOUNT_AND_ABOVE", "Og over?");
define("INV_INSTR_DISCOUNT_AND_ABOVE", "Her angis det om denne rabatten også gjelder brukere med høyere adgangsnivå.");
define("INV_GUEST", "Guest (ikke logget inn)");
define("INV_INSTR_DISCOUNT_PERCENTAGE", "Rabatt i prosent - ikke skriv prosenttegnet. (ved for f.eks. 10%, bare skriv 10)");
define("INV_INSTR_DISCOUNT_AMOUNT", "Rabatt som fast beløp til fradrag (gjelder bare om prosent er satt til 0)");
define("INV_DISCOUNT_EXCLUSIVE", "Spesiell?");
define("INV_INSTR_DISCOUNT_EXCLUSIVE", "Angi om andre rabatter kan brukes sammen med denne rabatten (når mer enn en rabatt er angitt, angi prioritetsverdi for hvilken rabatt som skal brukes ).");
define("INV_DISCOUNT_PRIORITY", "Prioritet");
define("INV_INSTR_DISCOUNT_PRIORITY", "Skriv inn et tall for å angi prioriteten for denne rabatten om det finnes andre rabatter også. Jo LAVERE tallet er, dess HØYERE prioritet har denne rabatten - en rabatt med prioritet '0' gjelder før en rabatt med prioritet '1'. Du kan bruke hvilke som helst tall. Er det to rabatter med samme prioritet vil rabatten bli vilkårlig.");
define("INV_DISCOUNT_VOUCHER", "Rabattkode");
define("INV_INSTR_DISCOUNT_VOUCHER", "Skriver du en rabattkode her (f.eks. i samband med en nylansering av produkt), gjelder rabatten KUN om brukeren skriver inn rabattkoden på bestillingen, eller om rabattkoden blir lagt til av en administrator. MERK: For at dette skal virke, må du angi på bestillingsskjemaet at det kan brukes en rabattkode, eller, du kan angi denne rabatten på en ordre ved å skrive inn rabattkoden på ordren selv.");
define("INV_DISCOUNT_RECURRING", "Gjentagende rabatt?");
define("INV_INSTR_DISCOUNT_RECURRING", "Her angis det om rabatten også skal gjelde ved gjentakende betalinger.");
define("INV_AVAILABLE", "Tilgjengelig");
define("INV_DISCOUNT_AVAILABLE_YES", "Tilgjengelig for nye bestillinger");
define("INV_DISCOUNT_AVAILABLE_NO", "Ikke tilgjengelig for nye bestillinger");
define("INV_DISCOUNT_AVAILABLE", "Tilgjengelig for nye bestillinger?");
define("INV_INSTR_DISCOUNT_AVAILABLE", "Her angis det om denne rabatten skal gjelde for nye bestillinger (eller bare for eksisterende bestillinger med gjentakende betalinger).");
define("INV_DISCOUNT_AUTO_DISABLE", "Automatisk deaktivér rabatt?");
define("INV_INSTR_DISCOUNT_AUTO_DISABLE", "Feltet angir om denne rabatten automatisk skal gjøres utilgjengelig for nye bestillinger når den er brukt (for å forhindre at samme rabattkode blir brukt flere ganger).");
define("INV_DISCOUNT_PREREQ_PRODUCTS", "Rabatt hvis annet produkt er kjøpt");
define("INV_INSTR_DISCOUNT_PREREQ_PRODUCTS", "Feltet angir om brukeren må ha kjøpt et spesifikt produkt tidligere for å få denne rabatten. Angi produktet eller produktene som gir forutsetning for rabatt her. Velges det mer enn et produkt, får kunde rabatten om ETT av produktene er kjøpt allerede.");
define("INV_DISCOUNT_PREREQ_CATS", "Kategorier");
define("INV_DISCOUNT_PREREQ_CAT_PROD", "Produkter");
define("INV_DISCOUNT_PREREQ_SELECTED_PROD", "Velg produkt(er)");
define("INV_DISCOUNT_AMOUNT_REQUIRED", "Velg prosent eller beløp (for hver valuta).");
define("INV_DISCOUNT_DATE_REQUIRED", "Velg både start- og sluttdato for denne rabatten, eller sett valget `Tidsperiode` til `Nei`");
define("INV_DISCOUNT_MIN_ORDER_VALUE", "Minste bestillingsbeløp");
define("INV_INSTR_DISCOUNT_MIN_ORDER_VALUE", "Minstebeløpet en klient må bestille for (etter at andre rabatter er trukket fra, før mva) for å få denne rabatten.");
define("INV_DISCOUNT_CARRIAGE_ONLY", "Forsendelsesrabatt?");
define("INV_INSTR_DISCOUNT_CARRIAGE_ONLY", "Om denne rabatten bare gjelder forsendelsen eller ikke.");
define("INV_DISCOUNT_WARNING_IN_USE", "ADVARSEL! Denne rabatten brukes nå på følgende bestillinger med gjentakende betalinger. Om du endrer denne rabatten kan fremtidige fakturaer påvirkes for disse bestillingene:");
define("INV_DISCOUNT_CANNOT_DELETE", "En eller flere av disse rabattene kan ikke slettes. De er i bruk på følgende bestillinger med gjenstående gjentakende betalinger:");
define("INV_DISCOUNTS_WARNING_DATE_PLUS_RECURRING", "ADVARSEL! Denne rabatten har både en sluttdato og er satt til å gjelde med gjentakende betalinger. Dette er ikke anbefalt, etter som gjentakende betalinger vil fortsette med rabatten etter sluttdato (men ikke fakturaen). Er du sikker på at du vil lagre?");
	
/********************/
/* Version 1.1.4 
/* Note to translators: Text changed on the following constants:
/* INV_INSTR_DISCOUNT_USER_LEVEL, INV_INSTR_DISCOUNT_AND_ABOVE (lines 47 and 49 in the English file)
/********************/

//Version 1.2.1
define("INV_DISCOUNT_RENEWALS", "Legg til fornyelse?");
define("INV_INSTR_DISCOUNT_RENEWALS", "Angir om denne rabatten også skal, eller ikke skal gjelde for eksisterende bestillinger som kvalifiserer til denne rabatten (som tidligere ikke hadde denne gjentagende rabatten) som blir fornyet (gjelder bare for gjentakende betalinger). Om en eksisterende bestilling hadde rabatten (og det er med gjentakende betalinger), vil den fortsatt bli brukt ved fornyelse uavhengig av disse innstillingene.");
define("INV_DISCOUNT_DISQUAL_PRODUCTS", "Diskvalifiserende produkter");
define("INV_INSTR_DISCOUNT_DISQUAL_PRODUCTS", "Brukeren kan IKKE ha kjøpt disse produktene før denne rabatten gjelder, angi produkt(er) de IKKE kan ha her. Velges det mer enn ett produkt, får bruken IKKE rabatt om noen av produktene er kjøpt allerede.");
define("INV_DISCOUNT_DISQUAL_CATS", "Kategorier");
define("INV_DISCOUNT_DISQUAL_CAT_PROD", "Produkter");
define("INV_DISCOUNT_DISQUAL_SELECTED_PROD", "Valgte produkter");

//Version 1.2.7
define("INV_DISCOUNT_RECORD_LIMIT_WARNING", "ADVARSEL! Ettersom det er %s eller flere bestillinger med gjenstående gjentakende betalinger som bruker denne rabatten, vises bare de første %s postene her. Vil du se alle de andre bestillingene klikk på 'Vis alle' (Under).");
define("INV_DISCOUNT_SHOW_ALL", "Vis alle");
?>
