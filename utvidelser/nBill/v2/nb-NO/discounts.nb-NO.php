<?php
/**
* Language file for nBill
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

//Discounts
define("NBILL_DISCOUNTS_TITLE", "Rabatter");
define("NBILL_DISCOUNTS_INTRO", "Her kan du sette opp regler for rabatter på dine produkter (for hvert produkt eller for alle). Rabatter kan avgrenses på brukernivå og/eller rabattkoder, og det kan være som prosent eller fast beløp. Du kan også velge at rabattkoden bare skal kunne brukes en gang, eller at rabatten bare gjelder for en angitt periode.");
define("NBILL_DISCOUNT_NAME", "Rabattnavn");
define("NBILL_DISCOUNT_END_DATE", "Sluttdato");
define("NBILL_DISCOUNT_USER_LEVEL", "Brukernivå");
define("NBILL_DISCOUNT_PERCENTAGE", "Prosent");
define("NBILL_DISCOUNT_AMOUNT", "Beløp");
define("NBILL_EDIT_DISCOUNT", "Rediger rabatt");
define("NBILL_ALL_GROUPS", "Alle");
define("NBILL_AND_ABOVE", " og over");
define("NBILL_DISCOUNT_NAME_REQUIRED", "Skriv inn ett navn på rabatten.");
define("NBILL_NEW_DISCOUNT", "Ny rabatt");
define("NBILL_DISCOUNT_DETAILS", "Rabattdetaljer");
define("NBILL_INSTR_DISCOUNT_NAME", "Skriv en beskrivelse av rabatten, slik at du senere husker hvorfor det er gitt rabatt.");
define("NBILL_DISCOUNT_DISPLAY_NAME", "Vis navn");
define("NBILL_INSTR_DISCOUNT_DISPLAY_NAME", "Tekst som vises på faktura når denne rabatten brukes (er feltet blankt, brukes rabattnavnet).");
define("NBILL_DISCOUNT_TIME_LIMITED", "Tidsperiode?");
define("NBILL_INSTR_DISCOUNT_TIME_LIMITED", "Her angis en periode for når denne rabatten gjelder.");
define("NBILL_DISCOUNT_START_DATE", "Stardato");
define("NBILL_INSTR_DISCOUNT_START_DATE", "Når rabatten skal starte (kan bare brukes bare når 'Tidsperiode' er satt til 'JA')");
define("NBILL_INSTR_DISCOUNT_END_DATE", "Når rabatten skal avsluttes (kan bare brukes bare når 'Tidsperiode' er satt til 'JA')");
define("NBILL_DISCOUNT_GLOBAL", "Global?");
define("NBILL_INSTR_DISCOUNT_GLOBAL", "Her angir en om rabatten skal gjelde for alle produkter (sett til 'NEI' og rediger de produktene rabatten skal gjelde for om denne rabatten skal gjelde enkeltprodukter). MERK: Du kan også redigere enkeltprodukter slik at rabatt ikke gjelder om du setter at rabatten skal gjelde for alle produkter.");
define("NBILL_INSTR_DISCOUNT_USER_LEVEL", "Brukergruppe som denne rabatten gjelder for.");
define("NBILL_DISCOUNT_AND_ABOVE", "Og over?");
define("NBILL_INSTR_DISCOUNT_AND_ABOVE", "Her angis det om denne rabatten også gjelder brukere med høyere adgangsnivå.");
define("NBILL_GUEST", "Guest (ikke logget inn)");
define("NBILL_INSTR_DISCOUNT_PERCENTAGE", "Rabatt i prosent - ikke skriv prosenttegnet. (ved for f.eks. 10%, bare skriv 10)");
define("NBILL_INSTR_DISCOUNT_AMOUNT", "Rabatt som fast beløp til fradrag (gjelder bare om prosent er satt til 0)");
define("NBILL_DISCOUNT_EXCLUSIVE", "Spesiell?");
define("NBILL_INSTR_DISCOUNT_EXCLUSIVE", "Angi om andre rabatter kan brukes sammen med denne rabatten (når mer enn en rabatt er angitt, angi prioritetsverdi for hvilken rabatt som skal brukes ).");
define("NBILL_DISCOUNT_PRIORITY", "Prioritet");
define("NBILL_INSTR_DISCOUNT_PRIORITY", "Skriv inn et tall for å angi prioriteten for denne rabatten om det finnes andre rabatter også. Jo LAVERE tallet er, dess HØYERE prioritet har denne rabatten - en rabatt med prioritet '0' gjelder før en rabatt med prioritet '1'. Du kan bruke hvilke som helst tall. Er det to rabatter med samme prioritet vil rabatten bli vilkårlig.");
define("NBILL_DISCOUNT_VOUCHER", "Rabattkode");
define("NBILL_INSTR_DISCOUNT_VOUCHER", "Skriver du en rabattkode her (f.eks. i samband med en nylansering av produkt), gjelder rabatten KUN om brukeren skriver inn rabattkoden på bestillingen, eller om rabattkoden blir lagt til av en administrator. MERK: For at dette skal virke, må du angi på bestillingsskjemaet at det kan brukes en rabattkode, eller, du kan angi denne rabatten på en ordre ved å skrive inn rabattkoden på ordren selv.");
define("NBILL_DISCOUNT_RECURRING", "Gjentagende rabatt?");
define("NBILL_INSTR_DISCOUNT_RECURRING", "Her angis det om rabatten også skal gjelde ved gjentakende betalinger.");
define("NBILL_AVAILABLE", "Tilgjengelig");
define("NBILL_DISCOUNT_AVAILABLE_YES", "Tilgjengelig for nye bestillinger");
define("NBILL_DISCOUNT_AVAILABLE_NO", "Ikke tilgjengelig for nye bestillinger");
define("NBILL_DISCOUNT_AVAILABLE", "Tilgjengelig for nye bestillinger?");
define("NBILL_INSTR_DISCOUNT_AVAILABLE", "Her angis det om denne rabatten skal gjelde for nye bestillinger (eller bare for eksisterende bestillinger med gjentakende betalinger).");
define("NBILL_DISCOUNT_AUTO_DISABLE", "Automatisk deaktivér rabatt?");
define("NBILL_INSTR_DISCOUNT_AUTO_DISABLE", "Feltet angir om denne rabatten automatisk skal gjøres utilgjengelig for nye bestillinger når den er brukt (for å forhindre at samme rabattkode blir brukt flere ganger).");
define("NBILL_DISCOUNT_PREREQ_PRODUCTS", "Rabatt hvis annet produkt er kjøpt");
define("NBILL_INSTR_DISCOUNT_PREREQ_PRODUCTS", "Feltet angir om brukeren må ha kjøpt et spesifikt produkt tidligere for å få denne rabatten. Angi produktet eller produktene som gir forutsetning for rabatt her. Velges det mer enn et produkt, får kunde rabatten om ETT av produktene er kjøpt allerede.");
define("NBILL_DISCOUNT_PREREQ_CATS", "Kategorier");
define("NBILL_DISCOUNT_PREREQ_CAT_PROD", "Produkter");
define("NBILL_DISCOUNT_PREREQ_SELECTED_PROD", "Velg produkt(er)");
define("NBILL_DISCOUNT_AMOUNT_REQUIRED", "Velg prosent eller beløp (for hver valuta).");
define("NBILL_DISCOUNT_DATE_REQUIRED", "Velg både start- og sluttdato for denne rabatten, eller sett valget `Tidsperiode` til `Nei`");
define("NBILL_DISCOUNT_MIN_ORDER_VALUE", "Minste bestillingsbeløp");
define("NBILL_INSTR_DISCOUNT_MIN_ORDER_VALUE", "Minstebeløpet en klient må bestille for (etter at andre rabatter er trukket fra, før mva) for å få denne rabatten.");
define("NBILL_DISCOUNT_CARRIAGE_ONLY", "Forsendelsesrabatt?");
define("NBILL_INSTR_DISCOUNT_CARRIAGE_ONLY", "Om denne rabatten bare gjelder forsendelsen eller ikke.");
define("NBILL_DISCOUNT_WARNING_IN_USE", "ADVARSEL! Denne rabatten brukes nå på følgende bestillinger med gjentakende betalinger. Om du endrer denne rabatten kan fremtidige fakturaer påvirkes for disse bestillingene:");
define("NBILL_DISCOUNT_CANNOT_DELETE", "En eller flere av disse rabattene kan ikke slettes. De er i bruk på følgende bestillinger med gjenstående gjentakende betalinger:");
define("NBILL_DISCOUNTS_WARNING_DATE_PLUS_RECURRING", "ADVARSEL! Denne rabatten har både en sluttdato og er satt til å gjelde med gjentakende betalinger. Dette er ikke anbefalt, etter som gjentakende betalinger vil fortsette med rabatten etter sluttdato (men ikke fakturaen). Er du sikker på at du vil lagre?");
	
/********************/
/* Version 1.1.4 
/* Note to translators: Text changed on the following constants:
/* NBILL_INSTR_DISCOUNT_USER_LEVEL, NBILL_INSTR_DISCOUNT_AND_ABOVE (lines 47 and 49 in the English file)
/********************/

//Version 1.2.1
define("NBILL_DISCOUNT_RENEWALS", "Legg til fornyelse?");
define("NBILL_INSTR_DISCOUNT_RENEWALS", "Angir om denne rabatten også skal, eller ikke skal gjelde for eksisterende bestillinger som kvalifiserer til denne rabatten (som tidligere ikke hadde denne gjentagende rabatten) som blir fornyet (gjelder bare for gjentakende betalinger). Om en eksisterende bestilling hadde rabatten (og det er med gjentakende betalinger), vil den fortsatt bli brukt ved fornyelse uavhengig av disse innstillingene.");
define("NBILL_DISCOUNT_DISQUAL_PRODUCTS", "Diskvalifiserende produkter");
define("NBILL_INSTR_DISCOUNT_DISQUAL_PRODUCTS", "Brukeren kan IKKE ha kjøpt disse produktene før denne rabatten gjelder, angi produkt(er) de IKKE kan ha her. Velges det mer enn ett produkt, får bruken IKKE rabatt om noen av produktene er kjøpt allerede.");
define("NBILL_DISCOUNT_DISQUAL_CATS", "Kategorier");
define("NBILL_DISCOUNT_DISQUAL_CAT_PROD", "Produkter");
define("NBILL_DISCOUNT_DISQUAL_SELECTED_PROD", "Valgte produkter");

//Version 1.2.7
define("NBILL_DISCOUNT_RECORD_LIMIT_WARNING", "ADVARSEL! Ettersom det er %s eller flere bestillinger med gjenstående gjentakende betalinger som bruker denne rabatten, vises bare de første %s postene her. Vil du se alle de andre bestillingene klikk på 'Vis alle' (Under).");
define("NBILL_DISCOUNT_SHOW_ALL", "Vis alle");
?>
