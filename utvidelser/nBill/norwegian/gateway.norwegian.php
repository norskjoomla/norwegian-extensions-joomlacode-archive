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
define("INV_AUTO_GENERATED_INCOME", "Autogenerert av betalingskanal.");
define("INV_GATEWAY_ERROR", INV_BRANDING_NAME . " Feilrapport");
define("INV_ERR_RECEIPT_NOT_PROCESSED", "En kvittering for %s er mottatt, men kan ikke finne en ordre eller faktura som passer. Hvis du bruker " . INV_BRANDING_NAME . " til � avstemme dine transaksjoner m� du kanskje legge inn denne transaksjonen manuelt.");
define("INV_GATEWAY_TITLE", "Betalingskanal");
define("INV_GATEWAY_INTRO", "Betalingskanalen er for � tillate deg � bruke en online betalingstjeneste for � godta kredittkortbetalinger. For � legge til online betalingstjeneste p� ditt bestillingsskjema, m� du ha en utvidelse som er laget for " . INV_BRANDING_NAME . " og for din tjenesteleverand�r for betalingen. For detaljer om tilgjengelige utvidelse, henvises det til " . INV_BRANDING_NAME . " nettsider (%s).");
define("INV_GATEWAY_NAME", "Navn");
define("INV_GATEWAY_DESCRIPTION", "Beskrivelse");
define("INV_EDIT_GATEWAY", "Rediger innstillinger");
define("INV_ERR_GATEWAY_PROBLEM", "Det er et problem med denne betalingstjenesten. Handlingen du valgte kunne ikke utf�res.");
define("INV_GATEWAY_SETTINGS", "Innstillinger for betalingskanal");
define("INV_CONFIRM_UNINSTALL_GATEWAY", "ADVARSEL! Dette vil helt avinstallere denne betalingskanalen!");
define("INV_ERR_GATEWAY_NOT_REMOVED", "ADVARSEL! Selv om betalingskanalen er slettet fra " . INV_BRANDING_NAME . ", kunne ikke alle filene slettes.");
define("INV_ERR_GATEWAY_NOT_FOUND", "FEIL: Betalingskanalen tilknyttet dette bestillingsskjema eller faktura ble ikke funnet. Det vil ikke v�re mulig � betale online p� n�v�rende tidspunkt.");
define("INV_GATEWAY_WARNING", INV_BRANDING_NAME . " Varselrapport");
define("INV_GATEWAY_ERR_ORDER_NOT_FOUND", "Ventende ordre ID '%s' ble ikke funnet");
define("INV_GATEWAY_INSTALL_WARNING", "ADVARSEL! Bare installer betalingstjenester fra p�litelige kilder. Skripter fra betalingskanalen kan ha tilgang til hele nettsiden din!");
define("INV_GATEWAY_CALLBACK_INFO", "F�lgende informasjon viser innholdet i \$_REQUEST og \$_SERVER PHP variablene. En tekniker kan finne denne informasjonen nyttig for � finne ut hvorfor feilen oppst�r.\n\n");
define("INV_GATEWAY_FILES_MISSING", "ADVARSEL! Tabellene i databasen for '%s' er i databasen, men filene mangler. Dette kan v�re fordi du har oppgradert " . INV_BRANDING_NAME . ". Installer betalingskanalen p� nytt ved � klikke 'Ny' p� verkt�ylinjen over (innstillingene dine vil bli bevart), eller slett den (som vil slette alle spor av betalingskanalen).");
define("INV_GATEWAY_ERR", "Et problem oppstod under fors�k p� � behandle din betaling. F�lgende feil oppstod: %s<br /><br />Ta kontakt med oss dersom du trenger hjelp.");
define("INV_GATEWAY_SUCCESS", "Takk - din betaling er mottatt.");
define("INV_GATEWAY_ERR_AMOUNT_MISMATCH", "FEIL - Bel�pet samsvarer ikke (bel�pet mottatt var annerledes enn forventet). Forventet bel�p: %s; Mottatt bel�p: %s");
define("INV_GATEWAY_ERR_DUPLICATE_NOTIFICATION", "FEIL - Dupliserte betalingsvarsel.");


/**************/
/* Version 1.1.4
/* Note to translators: Text amended for INV_GATEWAY_ERR (line 42 in the English file).
/**************/

//Version 1.2.0
define("INV_GATEWAY_DISPLAY_NAME", "Vis nanv");
define("INV_GATEWAY_PUBLISHED", "Publisert?");
define("INV_INSTR_GATEWAY_DISPLAY_NAME", "Brukes i en rullegardinliste for � la brukeren velge en betalingskanal n�r en ordre fornyes eller en faktura skal betales. MERK: N�r brukeren velger en betalingskanal p� et bestillingsskjema, m� du angi visningsnavnet i alternativfeltet. Denne innstillingen er bare n�r betalingene gj�res uten � bruke et bestillingsskjema.");
define("INV_INSTR_GATEWAY_PUBLISHED", "Hvorvidt denne betalingskanalen skal vises i rullegardinlisten eller ikke s� brukeren kan velge betalingskanal. Merk: Dette gjelder bare n�r det ikke brukes et bestillingsskjema. P� et bestillingsskjema, m� du manuelt definere hvilke betalingskanaler som er tillatt, s� disse innstillingene gjelder ikke der (du kan fremdeles bruke en betalingskanal p� et bestillingsskjema selv om det ikke er publisert, men det kan ikke brukes til � betale en faktura eller fornye en bestilling, med mindre den er publisert).");
?>