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

//Carriage
define("INV_CARRIAGE_TITLE", "Fraktsatser");
define("INV_CARRIAGE_INTRO", "Dette er valgfritt. Hvis du legger til fraktkostnader til prisen p� produktene dine, kan du angi satsene her. Du kan ogs� angi om transporten er MVA-pliktig, og i s� fall bruke en annen sats av MVA for transportdelen av fakturaen.");
define("INV_CARRIAGE_COUNTRY", "Land");
define("INV_CARRIAGE_PRICE_PER_UNIT", "Enhetspris");
define("INV_EDIT_CARRIAGE_RATE", "Rediger fraktsatser");
define("INV_NEW_CARRIAGE_RATE", "Ny fraktsats");
define("INV_SERVICE_NAME_REQUIRED", "Fyll inn navnet p� denne tjenesten");
define("INV_COUNTRY_REQUIRED", "Velg land hvor denne tjenesten gjelder");
define("INV_CARRIAGE_DETAILS", "Fraktdetaljer");
define("INV_CARRIAGE_CODE", "Kode");
define("INV_NET_PRICE_PER_UNIT", "Nettopris pr. enhet");
define("INV_CARRIAGE_FIXED", "Fastpris?");
define("INV_CARRIAGE_IS_TAXABLE", "Er frakten MVA plikig?");
define("INV_CARRIAGE_TAX_RATE", "MVA-sats om forskjellig");
define("INV_INSTR_CARRIAGE_SERVICE", "Skriv inn et beskrivende navn for tjenesten (For eksempel 'Ekspress over natten', 'Levering neste dag')");
define("INV_INSTR_CARRIAGE_CODE", "Angi din egen kode for denne tjenesten (valgfritt, men brukes til � sortere leveringsmuligheter alfabetisk).");
define("INV_INSTR_CARRIAGE_COUNTRY", "Velg land der denne tjenesten gjelder.");
define("INV_INSTR_NET_PRICE_PER_UNIT", "Hvis du har betalt fastpris for transport, angir du bel�pet her og velger \"Ja\" p� fastpris-alternativet nedenfor. Hvis fraktprisen avhenger av produktets st�rrelse, tyngde eller mengde, skriver du bel�pet som representerer den minste fellesnevneren for produktenes fraktavgift. Deretter kan du angi en multiplikator p� denne verdien som vil bli brukt til � beregne transportavgifter som vises p� fakturaene. Ikke inkluder valutasymbol.");
define("INV_INSTR_CARRIAGE_FIXED", "Hvis du har betalt fastpris per faktura for transport, velger du \"Ja\", og verdien du skrev inn i \"Nettopris pr enhet\" vil bli brukt som et fast gebyr for hele fakturaen (i stedet for som en enhet). Hvis fraktprisen avhenger av produktets st�rrelse, tyngde eller mengde, velger du \"Nei\".");
define("INV_INSTR_CARRIAGE_IS_TAXABLE", "Indik�r om det skal betales moms av fraktprisen");
define("INV_INSTR_CARRIAGE_TAX_RATE", "Hvis transporten er MVA-pliktig OG avgiften for transport er annerledels enn til vanlig, skriver du inn transportens MVA-sats her (i prosent, men uten prosenttegn %)");
define("INV_CARRIAGE_PRICE_INTRO", "Angi prisen for transport for hver valuta som du vil selge i.");
define("INV_CARRIAGE_ID", "ID");

//Version 1.2.0
define("INV_CARRIAGE_TRACKING_URL", "Transportens nettadresse for sporing");
define("INV_INSTR_CARRIAGE_TRACKING_URL", "Hvis transport�ren tillater elektronisk sporing av pakker, angi nettadressen her, og bruk ## (dobbel hash) som plassholder for sporingsnummer. N�r du sender pakken kan du angi det riktige sporingsnummeret p� ordren. Denne vil da bli sl�tt sammen med nettadressen registrert her, for � generere en lenke p� nettsidens brukerside som gj�r det mulig for brukeren � spore sin forsendelse (om dette lar seg gj�re i henhold til visningsalternativene).");
?>
