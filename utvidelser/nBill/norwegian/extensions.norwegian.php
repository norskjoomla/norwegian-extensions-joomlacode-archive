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

//Extensions
define("INV_EXTENSION_INSTALL_WARNING", "ADVARSEL! Bare installer utvidelser fra kilder du stoler på. En utvidelse kan få tilgang til hele nettsiden din!");
define("INV_EXTENSION_NO_GATEWAY_FILE", "Ingen fil er merket som en fil for betalingsmodul");
define("INV_EXTENSION_NO_LANGUAGE_FILE", "Ingen fil er merket som en språkfil");
define("INV_EXTENSION_INSTALL_NEW", "Installér ny utvidelse");
define("INV_EXTENSIONS_INSTALLED", "Installerte utvidelser");
define("INV_EXTENSION_NAME", "Utvidelsens navn");
define("INV_EXTENSION_TYPE", "Type");
define("INV_EXTENSION_DATE_CREATED", "Produksjondato");
define("INV_EXTENSION_DATE_INSTALLED", "Installasjonsdato");
define("INV_EXTENSION_VERSION", "Versjon");
define("INV_EXTENSION_AUTHOR", "Utvikler");
define("INV_EXTENSION_URL", "Nettadresse");
define("INV_EXTENSION_UNINSTALL", "Avinstaller");
define("INV_EXTENSION_NOT_REMOVED", "Beklager, " . INV_BRANDING_NAME . " kunne ikke slette utvidelsen '%s'. Den må fjernes manuelt.");
define("INV_EXTENSION_REMOVED", "Utvidelsen '%s' ble vellykket avinstallert.");
define("INV_UNINSTALL_KEEP_SETTINGS", "Vil du beholde dine innstillinger, slik at du kan oppdatere utvidelsen (om det er aktuelt)? Velg `OK` for å la database være uberørt, eller `Avbryt` for å slette denne utvidelsen for godt.");

//Version 1.2.0
define("INV_EXTENSION_NO_INSTALL_FILE", "Ingen installasjonsfil (*.nbe) ble funnet. Utvidelsen kan ikke installeres. Forsikre deg om at du bruker riktig versjon av utvidelsen (utvidelser skrevet for eldre versjoner av " . INV_BRANDING_NAME . " vil kanskje ikke virke med denne versjonen).");
define("INV_EXTENSION_INVALID_INSTALL_FILE", "Installasjonsfilen (%s) er ikke en gyldig nBill fil. Utvidelsen kan ikke installeres.");
define("INV_EXTENSION_COULD_NOT_CREATE_DIR", "Installasjonen feilet fordi følgende mappe ikke kunne opprettes: %s (om denne mappen allerede eksisterer, forsøk da å avinstallere den eksisterende utvidelsen først).");
define("INV_EXTENSION_COULD_NOT_CREATE_FILE", "Installasjonen feilet fordi følgende fil ikke kunne opprettes: %s (om denne filen allerede eksisterer, forsøk da å avinstallere den eksisterende utvidelsen først).");
define("INV_EXTENSION_INSTALLED", "Utvidelsen '%s' ble vellykket installert!");
define("INV_EXTENSION_RETURN_TO_LIST", "for å returnere til utvidelsesinstallasjonen");
define("INV_EXTENSION_VERSION_INCOMPATIBLE", "Versjonen av " . INV_BRANDING_NAME . " som du bruker er ikke kompatibel med utvidelsen du forsøker å installere");

//Version 1.2.8
define("INV_EXTENSION_DB_ERROR", "Installasjonen ble kanskje ikke vellykket fordi følgende databasefeil oppsto: %s");
?>
