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

//Payment Gateway
define("NBILL_AUTO_GENERATED_INCOME", "Autogenerert av betalingskanal.");
define("NBILL_GATEWAY_ERROR", NBILL_BRANDING_NAME . " Feilrapport");
define("NBILL_ERR_RECEIPT_NOT_PROCESSED", "En kvittering for %s er mottatt, men kan ikke finne en ordre eller faktura som passer. Hvis du bruker " . NBILL_BRANDING_NAME . " til å avstemme dine transaksjoner, må du kanskje legge inn denne transaksjonen manuelt.");
define("NBILL_GATEWAY_TITLE", "Betalingskanal");
define("NBILL_GATEWAY_INTRO", "Betalingskanalen er for å tillate deg å bruke en online betalingstjeneste for å godta kredittkortbetalinger. For å legge til online betalingstjeneste på ditt bestillingsskjema, må du ha en utvidelse som er laget for " . NBILL_BRANDING_NAME . " og for din tjenesteleverandør for betalingen. For detaljer om tilgjengelige utvidelser, henvises det til " . NBILL_BRANDING_NAME . "  sine nettsider (%s).");
define("NBILL_GATEWAY_NAME", "Navn");
define("NBILL_GATEWAY_DESCRIPTION", "Beskrivelse");
define("NBILL_EDIT_GATEWAY", "Redigér innstillinger");
define("NBILL_ERR_GATEWAY_PROBLEM", "Det er et problem med denne betalingstjenesten. Handlingen du valgte, kunne ikke utføres.");
define("NBILL_GATEWAY_SETTINGS", "Innstillinger for betalingskanal");
define("NBILL_CONFIRM_UNINSTALL_GATEWAY", "ADVARSEL! Dette vil helt avinstallere denne betalingskanalen!");
define("NBILL_ERR_GATEWAY_NOT_REMOVED", "ADVARSEL! Selv om betalingskanalen er slettet fra " . NBILL_BRANDING_NAME . ", kunne ikke alle filene slettes.");
define("NBILL_ERR_GATEWAY_NOT_FOUND", "FEIL: Betalingskanalen tilknyttet dette bestillingsskjema eller denne faktura, ble ikke funnet. Det vil ikke være mulig å betale online på nåværende tidspunkt.");
define("NBILL_GATEWAY_WARNING", NBILL_BRANDING_NAME . " Varselrapport");
define("NBILL_GATEWAY_ERR_ORDER_NOT_FOUND", "Ventende ordrenummer '%s' ble ikke funnet");
define("NBILL_GATEWAY_INSTALL_WARNING", "ADVARSEL! Bare installér betalingstjenester fra pålitelige kilder. Skripter fra betalingskanalen kan få tilgang til hele nettsiden din!");
define("NBILL_GATEWAY_CALLBACK_INFO", "Følgende informasjon viser innholdet i \$_REQUEST og \$_SERVER PHP variablene. En tekniker kan finne denne informasjonen nyttig for å finne ut hvorfor feilen oppstod.\n\n");
define("NBILL_GATEWAY_FILES_MISSING", "ADVARSEL! Tabellene i databasen for '%s' er i databasen, men filene mangler. Dette kan være fordi du har oppgradert " . NBILL_BRANDING_NAME . ". Installer betalingskanalen på nytt ved å klikke 'Ny' på verktøylinjen over (innstillingene dine vil bli bevart), eller slett den (som vil slette alle spor av betalingskanalen).");
define("NBILL_GATEWAY_ERR", "Et problem oppstod under forsøk på å behandle din betaling. Følgende feil oppstod: %s<br /><br />Ta kontakt med oss dersom du trenger hjelp.");
define("NBILL_GATEWAY_SUCCESS", "Takk - din betaling er mottatt.");
define("NBILL_GATEWAY_ERR_AMOUNT_MISMATCH", "FEIL - Beløpet samsvarer ikke (beløpet mottatt var annet enn forventet). Forventet beløp: %s; Mottatt beløp: %s");
define("NBILL_GATEWAY_ERR_DUPLICATE_NOTIFICATION", "FEIL - Dupliserte betalingsvarsel.");


/**************/
/* Version 1.1.4
/* Note to translators: Text amended for NBILL_GATEWAY_ERR (line 42 in the English file).
/**************/

//Version 1.2.0
define("NBILL_GATEWAY_DISPLAY_NAME", "Visningsnavn");
define("NBILL_GATEWAY_PUBLISHED", "Publisert?");
define("NBILL_INSTR_GATEWAY_DISPLAY_NAME", "Brukes i en rullegardinliste for å la brukeren velge en betalingskanal når en ordre fornyes, eller en faktura skal betales. MERK: Når brukeren velger en betalingskanal på et bestillingsskjema, må du angi visningsnavnet i alternativfeltet. Denne innstillingen er bare tilfeller når betalingene gjøres uten å bruke et bestillingsskjema.");
define("NBILL_INSTR_GATEWAY_PUBLISHED", "Hvorvidt denne betalingskanalen skal vises i rullegardinlisten eller ikke så brukeren kan velge betalingskanal. Merk: Dette gjelder bare når det ikke brukes et bestillingsskjema. På et bestillingsskjema må du manuelt definere hvilke betalingskanaler som er tillatt, så disse innstillingene gjelder ikke der (du kan fremdeles bruke en betalingskanal på et bestillingsskjema selv om det ikke er publisert, men det kan ikke brukes til å betale en faktura eller fornye en bestilling, med mindre den er publisert).");
?>
