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
define("INV_CARRIAGE_INTRO", "Dette er valgfritt. Hvis du legger på fraktkostnader på prisen på produktene dine, kan du angi satsene her. Du kan også angi om transporten er MVA-pliktig, og i så fall bruke en annen sats av MVA for transportdelen av fakturaen.");
define("INV_CARRIAGE_COUNTRY", "Land");
define("INV_CARRIAGE_PRICE_PER_UNIT", "Enhetspris");
define("INV_EDIT_CARRIAGE_RATE", "Rediger fraktsatser");
define("INV_NEW_CARRIAGE_RATE", "Ny fraktsats");
define("INV_SERVICE_NAME_REQUIRED", "Fyll inn navnet på denne tjenesten");
define("INV_COUNTRY_REQUIRED", "Velg land hvor denne tjenesten gjelder");
define("INV_CARRIAGE_DETAILS", "Fraktdetaljer");
define("INV_CARRIAGE_CODE", "Kode");
define("INV_NET_PRICE_PER_UNIT", "Nettopris pr. enhet");
define("INV_CARRIAGE_FIXED", "Fastpris?");
define("INV_CARRIAGE_IS_TAXABLE", "Er frakten MVA plikig?");
define("INV_CARRIAGE_TAX_RATE", "MVA-sats om forskjellig");
define("INV_INSTR_CARRIAGE_SERVICE", "Skriv inn et beskrivende navn for tjenesten (Foreksempel 'Ekspress over natten', 'Levering neste dag')");
define("INV_INSTR_CARRIAGE_CODE", "Angi din egen kode for denne tjenesten (valgfritt, men brukes til å sortere leveringsmuligheter alfabetisk).");
define("INV_INSTR_CARRIAGE_COUNTRY", "Velg land der denne tjenesten gjelder.");
define("INV_INSTR_NET_PRICE_PER_UNIT", "Hvis du har betalt fastpris for transport, angir du beløpet her og velge "ja" på Fastpris alternativet nedenfor. Hvis fraktprisen avhenger av produktets størrelse / tyngde eller mengde, skriver du beløpet som representerer den minste fellesnevneren for produktenes fraktavgift. Deretter kan du angi en multiplikator på denne verdien som vil bli brukt til å beregne transportavgifter som vises på fakturaene. Ikke inkluder valutasymbol.");
define("INV_INSTR_CARRIAGE_FIXED", "Hvis du har betalt fastpris per faktura for transport, velger du "ja", og verdien du skrev inn i "Nettopris pr enhet" vil bli brukt som et fast gebyr for hele fakturaen (i stedet for som en enhet). Hvis fraktprisen avhenger av produktets størrelse / tyngde eller mengde, velger du "nei".");
define("INV_INSTR_CARRIAGE_IS_TAXABLE", "Indiker om det skal betales moms av fraktprisen");
define("INV_INSTR_CARRIAGE_TAX_RATE", "Hvis transporten er MVA pålagdt OG avgiften for transport er annerledels enn til vanlig, skriver du inn transportens MVA sats her (i prosent, men uten prosenttegnet %)");
define("INV_CARRIAGE_PRICE_INTRO", "Angi prisen for transport for hver valuta som du vil selge i.");
define("INV_CARRIAGE_ID", "ID");

//Version 1.2.0
define("INV_CARRIAGE_TRACKING_URL", "Transportens nettadresse for sporing");
define("INV_INSTR_CARRIAGE_TRACKING_URL", "Hvis transportøren tillater elektronisk sporing av pakker, angi nettadressen her, og bruk ## (dobbel hash) som plassholder for sporingsnummer. Når du sender pakken kan du angi det riktige sporingsnummeret på ordren. Denne vil da bli slått sammen med nettadressen registrert her, for å generere en lenke på nettsidens brukerside som gjør det mulig for brukeren å spore sin forsendelse (om dette lar seg gjøre i henhold til visningsalternativene).");
?>