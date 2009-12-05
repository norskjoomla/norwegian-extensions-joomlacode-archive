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
define("NBILL_DISCOUNTS_INTRO", "Her kan du sette opp regler for rabatter p� dine produkter (for hvert produkt eller for alle). Rabatter kan avgrenses p� brukerniv� og/eller rabattkoder, og det kan v�re som prosent eller fast bel�p. Du kan ogs� velge at rabattkoden bare skal kunne brukes en gang, eller at rabatten bare gjelder for en angitt periode.");
define("NBILL_DISCOUNT_NAME", "Rabattnavn");
define("NBILL_DISCOUNT_END_DATE", "Sluttdato");
define("NBILL_DISCOUNT_USER_LEVEL", "Brukerniv�");
define("NBILL_DISCOUNT_PERCENTAGE", "Prosent");
define("NBILL_DISCOUNT_AMOUNT", "Bel�p");
define("NBILL_EDIT_DISCOUNT", "Rediger rabatt");
define("NBILL_ALL_GROUPS", "Alle");
define("NBILL_AND_ABOVE", " og over");
define("NBILL_DISCOUNT_NAME_REQUIRED", "Skriv inn ett navn p� rabatten.");
define("NBILL_NEW_DISCOUNT", "Ny rabatt");
define("NBILL_DISCOUNT_DETAILS", "Rabattdetaljer");
define("NBILL_INSTR_DISCOUNT_NAME", "Skriv en beskrivelse av rabatten, slik at du senere husker hvorfor det er gitt rabatt.");
define("NBILL_DISCOUNT_DISPLAY_NAME", "Vis navn");
define("NBILL_INSTR_DISCOUNT_DISPLAY_NAME", "Tekst som vises p� faktura n�r denne rabatten brukes (er feltet blankt, brukes rabattnavnet).");
define("NBILL_DISCOUNT_TIME_LIMITED", "Tidsperiode?");
define("NBILL_INSTR_DISCOUNT_TIME_LIMITED", "Her angis en periode for n�r denne rabatten gjelder.");
define("NBILL_DISCOUNT_START_DATE", "Stardato");
define("NBILL_INSTR_DISCOUNT_START_DATE", "N�r rabatten skal starte (kan bare brukes bare n�r 'Tidsperiode' er satt til 'JA')");
define("NBILL_INSTR_DISCOUNT_END_DATE", "N�r rabatten skal avsluttes (kan bare brukes bare n�r 'Tidsperiode' er satt til 'JA')");
define("NBILL_DISCOUNT_GLOBAL", "Global?");
define("NBILL_INSTR_DISCOUNT_GLOBAL", "Her angir en om rabatten skal gjelde for alle produkter (sett til 'NEI' og rediger de produktene rabatten skal gjelde for om denne rabatten skal gjelde enkeltprodukter). MERK: Du kan ogs� redigere enkeltprodukter slik at rabatt ikke gjelder om du setter at rabatten skal gjelde for alle produkter.");
define("NBILL_INSTR_DISCOUNT_USER_LEVEL", "Brukergruppe som denne rabatten gjelder for.");
define("NBILL_DISCOUNT_AND_ABOVE", "Og over?");
define("NBILL_INSTR_DISCOUNT_AND_ABOVE", "Her angis det om denne rabatten ogs� gjelder brukere med h�yere adgangsniv�.");
define("NBILL_GUEST", "Guest (ikke logget inn)");
define("NBILL_INSTR_DISCOUNT_PERCENTAGE", "Rabatt i prosent - ikke skriv prosenttegnet. (ved for f.eks. 10%, bare skriv 10)");
define("NBILL_INSTR_DISCOUNT_AMOUNT", "Rabatt som fast bel�p til fradrag (gjelder bare om prosent er satt til 0)");
define("NBILL_DISCOUNT_EXCLUSIVE", "Spesiell?");
define("NBILL_INSTR_DISCOUNT_EXCLUSIVE", "Angi om andre rabatter kan brukes sammen med denne rabatten (n�r mer enn en rabatt er angitt, angi prioritetsverdi for hvilken rabatt som skal brukes ).");
define("NBILL_DISCOUNT_PRIORITY", "Prioritet");
define("NBILL_INSTR_DISCOUNT_PRIORITY", "Skriv inn et tall for � angi prioriteten for denne rabatten om det finnes andre rabatter ogs�. Jo LAVERE tallet er, dess H�YERE prioritet har denne rabatten - en rabatt med prioritet '0' gjelder f�r en rabatt med prioritet '1'. Du kan bruke hvilke som helst tall. Er det to rabatter med samme prioritet vil rabatten bli vilk�rlig.");
define("NBILL_DISCOUNT_VOUCHER", "Rabattkode");
define("NBILL_INSTR_DISCOUNT_VOUCHER", "Skriver du en rabattkode her (f.eks. i samband med en nylansering av produkt), gjelder rabatten KUN om brukeren skriver inn rabattkoden p� bestillingen, eller om rabattkoden blir lagt til av en administrator. MERK: For at dette skal virke, m� du angi p� bestillingsskjemaet at det kan brukes en rabattkode, eller, du kan angi denne rabatten p� en ordre ved � skrive inn rabattkoden p� ordren selv.");
define("NBILL_DISCOUNT_RECURRING", "Gjentagende rabatt?");
define("NBILL_INSTR_DISCOUNT_RECURRING", "Her angis det om rabatten ogs� skal gjelde ved gjentakende betalinger.");
define("NBILL_AVAILABLE", "Tilgjengelig");
define("NBILL_DISCOUNT_AVAILABLE_YES", "Tilgjengelig for nye bestillinger");
define("NBILL_DISCOUNT_AVAILABLE_NO", "Ikke tilgjengelig for nye bestillinger");
define("NBILL_DISCOUNT_AVAILABLE", "Tilgjengelig for nye bestillinger?");
define("NBILL_INSTR_DISCOUNT_AVAILABLE", "Her angis det om denne rabatten skal gjelde for nye bestillinger (eller bare for eksisterende bestillinger med gjentakende betalinger).");
define("NBILL_DISCOUNT_AUTO_DISABLE", "Automatisk deaktiv�r rabatt?");
define("NBILL_INSTR_DISCOUNT_AUTO_DISABLE", "Feltet angir om denne rabatten automatisk skal gj�res utilgjengelig for nye bestillinger n�r den er brukt (for � forhindre at samme rabattkode blir brukt flere ganger).");
define("NBILL_DISCOUNT_PREREQ_PRODUCTS", "Rabatt hvis annet produkt er kj�pt");
define("NBILL_INSTR_DISCOUNT_PREREQ_PRODUCTS", "Feltet angir om brukeren m� ha kj�pt et spesifikt produkt tidligere for � f� denne rabatten. Angi produktet eller produktene som gir forutsetning for rabatt her. Velges det mer enn et produkt, f�r kunde rabatten om ETT av produktene er kj�pt allerede.");
define("NBILL_DISCOUNT_PREREQ_CATS", "Kategorier");
define("NBILL_DISCOUNT_PREREQ_CAT_PROD", "Produkter");
define("NBILL_DISCOUNT_PREREQ_SELECTED_PROD", "Velg produkt(er)");
define("NBILL_DISCOUNT_AMOUNT_REQUIRED", "Velg prosent eller bel�p (for hver valuta).");
define("NBILL_DISCOUNT_DATE_REQUIRED", "Velg b�de start- og sluttdato for denne rabatten, eller sett valget `Tidsperiode` til `Nei`");
define("NBILL_DISCOUNT_MIN_ORDER_VALUE", "Minste bestillingsbel�p");
define("NBILL_INSTR_DISCOUNT_MIN_ORDER_VALUE", "Minstebel�pet en klient m� bestille for (etter at andre rabatter er trukket fra, f�r mva) for � f� denne rabatten.");
define("NBILL_DISCOUNT_CARRIAGE_ONLY", "Forsendelsesrabatt?");
define("NBILL_INSTR_DISCOUNT_CARRIAGE_ONLY", "Om denne rabatten bare gjelder forsendelsen eller ikke.");
define("NBILL_DISCOUNT_WARNING_IN_USE", "ADVARSEL! Denne rabatten brukes n� p� f�lgende bestillinger med gjentakende betalinger. Om du endrer denne rabatten kan fremtidige fakturaer p�virkes for disse bestillingene:");
define("NBILL_DISCOUNT_CANNOT_DELETE", "En eller flere av disse rabattene kan ikke slettes. De er i bruk p� f�lgende bestillinger med gjenst�ende gjentakende betalinger:");
define("NBILL_DISCOUNTS_WARNING_DATE_PLUS_RECURRING", "ADVARSEL! Denne rabatten har b�de en sluttdato og er satt til � gjelde med gjentakende betalinger. Dette er ikke anbefalt, etter som gjentakende betalinger vil fortsette med rabatten etter sluttdato (men ikke fakturaen). Er du sikker p� at du vil lagre?");
	
/********************/
/* Version 1.1.4 
/* Note to translators: Text changed on the following constants:
/* NBILL_INSTR_DISCOUNT_USER_LEVEL, NBILL_INSTR_DISCOUNT_AND_ABOVE (lines 47 and 49 in the English file)
/********************/

//Version 1.2.1
define("NBILL_DISCOUNT_RENEWALS", "Legg til fornyelse?");
define("NBILL_INSTR_DISCOUNT_RENEWALS", "Angir om denne rabatten ogs� skal, eller ikke skal gjelde for eksisterende bestillinger som kvalifiserer til denne rabatten (som tidligere ikke hadde denne gjentagende rabatten) som blir fornyet (gjelder bare for gjentakende betalinger). Om en eksisterende bestilling hadde rabatten (og det er med gjentakende betalinger), vil den fortsatt bli brukt ved fornyelse uavhengig av disse innstillingene.");
define("NBILL_DISCOUNT_DISQUAL_PRODUCTS", "Diskvalifiserende produkter");
define("NBILL_INSTR_DISCOUNT_DISQUAL_PRODUCTS", "Brukeren kan IKKE ha kj�pt disse produktene f�r denne rabatten gjelder, angi produkt(er) de IKKE kan ha her. Velges det mer enn ett produkt, f�r bruken IKKE rabatt om noen av produktene er kj�pt allerede.");
define("NBILL_DISCOUNT_DISQUAL_CATS", "Kategorier");
define("NBILL_DISCOUNT_DISQUAL_CAT_PROD", "Produkter");
define("NBILL_DISCOUNT_DISQUAL_SELECTED_PROD", "Valgte produkter");

//Version 1.2.7
define("NBILL_DISCOUNT_RECORD_LIMIT_WARNING", "ADVARSEL! Ettersom det er %s eller flere bestillinger med gjenst�ende gjentakende betalinger som bruker denne rabatten, vises bare de f�rste %s postene her. Vil du se alle de andre bestillingene klikk p� 'Vis alle' (Under).");
define("NBILL_DISCOUNT_SHOW_ALL", "Vis alle");
?>
