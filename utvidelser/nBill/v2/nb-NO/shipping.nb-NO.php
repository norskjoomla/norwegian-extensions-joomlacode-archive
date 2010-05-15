<?php
/**
* Language file for the Shipping feature.
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

//Shipping
define("NBILL_SHIPPING_TITLE", "Fraktsatser");
define("NBILL_SHIPPING_INTRO", "Dette er valgfritt. Hvis du legger til fraktkostnader til prisen på produktene dine, kan du angi satsene her. Du kan også angi om transporten er MVA-pliktig, og i så fall bruke en annen sats av MVA for transportdelen av fakturaen.");
define("NBILL_SHIPPING_COUNTRY", "Land");
define("NBILL_SHIPPING_PRICE_PER_UNIT", "Enhetspris");
define("NBILL_EDIT_SHIPPING_RATE", "Rediger fraktsatser");
define("NBILL_NEW_SHIPPING_RATE", "Ny fraktsats");
define("NBILL_SERVICE_NAME_REQUIRED", "Fyll inn navnet på denne tjenesten");
define("NBILL_COUNTRY_REQUIRED", "Velg land hvor denne tjenesten gjelder");
define("NBILL_SHIPPING_DETAILS", "Fraktdetaljer");
define("NBILL_SHIPPING_CODE", "Kode");
define("NBILL_NET_PRICE_PER_UNIT", "Nettopris pr. enhet");
define("NBILL_SHIPPING_FIXED", "Fastpris?");
define("NBILL_SHIPPING_IS_TAXABLE", "Er frakten MVA pliktig?");
define("NBILL_SHIPPING_TAX_RATE", "MVA-sats om forskjellig");
define("NBILL_INSTR_SHIPPING_SERVICE", "Skriv inn et beskrivende navn for tjenesten (For eksempel 'Ekspress over natten', 'Levering neste dag')");
define("NBILL_INSTR_SHIPPING_CODE", "Angi din egen kode for denne tjenesten (valgfritt, men brukes til å sortere leveringsmuligheter alfabetisk).");
define("NBILL_INSTR_SHIPPING_COUNTRY", "Velg land der denne tjenesten gjelder.");
define("NBILL_INSTR_NET_PRICE_PER_UNIT", "Hvis du har betalt fastpris for transport, angir du beløpet her og velger \"Ja\" på fastpris-alternativet nedenfor. Hvis fraktprisen avhenger av produktets størrelse, tyngde eller mengde, skriver du beløpet som representerer den minste fellesnevneren for produktenes fraktavgift. Deretter kan du angi en multiplikator på denne verdien som vil bli brukt til å beregne transportavgifter som vises på fakturaene. Ikke inkluder valutasymbol.");
define("NBILL_INSTR_SHIPPING_FIXED", "Hvis du har betalt fastpris per faktura for transport, velger du \"Ja\", og verdien du skrev inn i \"Nettopris pr enhet\" vil bli brukt som et fast gebyr for hele fakturaen (i stedet for som en enhet). Hvis fraktprisen avhenger av produktets størrelse, tyngde eller mengde, velger du \"Nei\".");
define("NBILL_INSTR_SHIPPING_IS_TAXABLE", "Indikér om det skal betales moms av fraktprisen");
define("NBILL_INSTR_SHIPPING_TAX_RATE", "Hvis transporten er MVA-pliktig OG avgiften for transport er annerledes enn til vanlig, skriver du inn transportens MVA-sats her (i prosent, men uten prosenttegn %)");
define("NBILL_SHIPPING_PRICE_INTRO", "Angi prisen for transport for hver valuta som du vil selge i.");
define("NBILL_SHIPPING_ID", "ID");

//Version 1.2.0
define("NBILL_SHIPPING_TRACKING_URL", "Transportens nettadresse for sporing");
define("NBILL_INSTR_SHIPPING_TRACKING_URL", "Hvis transportøren tillater elektronisk sporing av pakker, angi nettadressen her, og bruk ## (dobbel hash) som plassholder for sporingsnummer. Når du sender pakken kan du angi det riktige sporingsnummeret på ordren. Denne vil da bli slått sammen med nettadressen registrert her, for å generere en lenke på nettsidens brukerside som gjør det mulig for brukeren å spore sin forsendelse (om dette lar seg gjøre i henhold til visningsalternativene).");