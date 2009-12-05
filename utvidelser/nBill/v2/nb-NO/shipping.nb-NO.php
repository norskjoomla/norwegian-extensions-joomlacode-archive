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

//Carriage
define("NBILL_CARRIAGE_TITLE", "Fraktsatser");
define("NBILL_CARRIAGE_INTRO", "Dette er valgfritt. Hvis du legger til fraktkostnader til prisen p� produktene dine, kan du angi satsene her. Du kan ogs� angi om transporten er MVA-pliktig, og i s� fall bruke en annen sats av MVA for transportdelen av fakturaen.");
define("NBILL_CARRIAGE_COUNTRY", "Land");
define("NBILL_CARRIAGE_PRICE_PER_UNIT", "Enhetspris");
define("NBILL_EDIT_CARRIAGE_RATE", "Rediger fraktsatser");
define("NBILL_NEW_CARRIAGE_RATE", "Ny fraktsats");
define("NBILL_SERVICE_NAME_REQUIRED", "Fyll inn navnet p� denne tjenesten");
define("NBILL_COUNTRY_REQUIRED", "Velg land hvor denne tjenesten gjelder");
define("NBILL_CARRIAGE_DETAILS", "Fraktdetaljer");
define("NBILL_CARRIAGE_CODE", "Kode");
define("NBILL_NET_PRICE_PER_UNIT", "Nettopris pr. enhet");
define("NBILL_CARRIAGE_FIXED", "Fastpris?");
define("NBILL_CARRIAGE_IS_TAXABLE", "Er frakten MVA plikig?");
define("NBILL_CARRIAGE_TAX_RATE", "MVA-sats om forskjellig");
define("NBILL_INSTR_CARRIAGE_SERVICE", "Skriv inn et beskrivende navn for tjenesten (For eksempel 'Ekspress over natten', 'Levering neste dag')");
define("NBILL_INSTR_CARRIAGE_CODE", "Angi din egen kode for denne tjenesten (valgfritt, men brukes til � sortere leveringsmuligheter alfabetisk).");
define("NBILL_INSTR_CARRIAGE_COUNTRY", "Velg land der denne tjenesten gjelder.");
define("NBILL_INSTR_NET_PRICE_PER_UNIT", "Hvis du har betalt fastpris for transport, angir du bel�pet her og velger \"Ja\" p� fastpris-alternativet nedenfor. Hvis fraktprisen avhenger av produktets st�rrelse, tyngde eller mengde, skriver du bel�pet som representerer den minste fellesnevneren for produktenes fraktavgift. Deretter kan du angi en multiplikator p� denne verdien som vil bli brukt til � beregne transportavgifter som vises p� fakturaene. Ikke inkluder valutasymbol.");
define("NBILL_INSTR_CARRIAGE_FIXED", "Hvis du har betalt fastpris per faktura for transport, velger du \"Ja\", og verdien du skrev inn i \"Nettopris pr enhet\" vil bli brukt som et fast gebyr for hele fakturaen (i stedet for som en enhet). Hvis fraktprisen avhenger av produktets st�rrelse, tyngde eller mengde, velger du \"Nei\".");
define("NBILL_INSTR_CARRIAGE_IS_TAXABLE", "Indik�r om det skal betales moms av fraktprisen");
define("NBILL_INSTR_CARRIAGE_TAX_RATE", "Hvis transporten er MVA-pliktig OG avgiften for transport er annerledels enn til vanlig, skriver du inn transportens MVA-sats her (i prosent, men uten prosenttegn %)");
define("NBILL_CARRIAGE_PRICE_INTRO", "Angi prisen for transport for hver valuta som du vil selge i.");
define("NBILL_CARRIAGE_ID", "ID");

//Version 1.2.0
define("NBILL_CARRIAGE_TRACKING_URL", "Transportens nettadresse for sporing");
define("NBILL_INSTR_CARRIAGE_TRACKING_URL", "Hvis transport�ren tillater elektronisk sporing av pakker, angi nettadressen her, og bruk ## (dobbel hash) som plassholder for sporingsnummer. N�r du sender pakken kan du angi det riktige sporingsnummeret p� ordren. Denne vil da bli sl�tt sammen med nettadressen registrert her, for � generere en lenke p� nettsidens brukerside som gj�r det mulig for brukeren � spore sin forsendelse (om dette lar seg gj�re i henhold til visningsalternativene).");
?>
