<?php
/**
* Language file for nBill
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

//Extensions
define("NBILL_EXTENSION_INSTALL_WARNING", "ADVARSEL! Bare installer utvidelser fra kilder du stoler på. En utvidelse kan få tilgang til hele nettsiden din!");
define("NBILL_EXTENSION_NO_GATEWAY_FILE", "Ingen fil er merket som en fil for betalingsmodul");
define("NBILL_EXTENSION_NO_LANGUAGE_FILE", "Ingen fil er merket som en språkfil");
define("NBILL_EXTENSION_INSTALL_NEW", "Installér ny utvidelse");
define("NBILL_EXTENSIONS_INSTALLED", "Installerte utvidelser");
define("NBILL_EXTENSION_NAME", "Utvidelsens navn");
define("NBILL_EXTENSION_TYPE", "Type");
define("NBILL_EXTENSION_DATE_CREATED", "Dato");
define("NBILL_EXTENSION_DATE_INSTALLED", "Installasjonsdato");
define("NBILL_EXTENSION_VERSION", "Versjon");
define("NBILL_EXTENSION_AUTHOR", "Utvikler");
define("NBILL_EXTENSION_URL", "Nettadresse");
define("NBILL_EXTENSION_UNINSTALL", "Avinstallér");
define("NBILL_EXTENSION_NOT_REMOVED", "Beklager, " . NBILL_BRANDING_NAME . " kunne ikke slette utvidelsen '%s'. Den må fjernes manuelt.");
define("NBILL_EXTENSION_REMOVED", "Utvidelsen '%s' ble vellykket avinstallert.");
define("NBILL_UNINSTALL_KEEP_SETTINGS", "Vil du beholde dine innstillinger, slik at du kan oppdatere utvidelsen (om det er aktuelt)? Velg `OK` for å la database være uberørt, eller `Avbryt` for å slette denne utvidelsen for godt.");

//Version 1.2.0
define("NBILL_EXTENSION_NO_INSTALL_FILE", "Ingen installasjonsfil (*.nbe) ble funnet. Utvidelsen kan ikke installeres. Forsikre deg om at du bruker riktig versjon av utvidelsen (utvidelser skrevet for eldre versjoner av " . NBILL_BRANDING_NAME . " vil kanskje ikke virke med denne versjonen).");
define("NBILL_EXTENSION_INVALID_INSTALL_FILE", "Installasjonsfilen (%s) er ikke en gyldig nBill fil. Utvidelsen kan ikke installeres.");
define("NBILL_EXTENSION_COULD_NOT_CREATE_DIR", "Installasjonen feilet fordi følgende mappe ikke kunne opprettes: %s (hvis denne mappen allerede eksisterer, forsøk da å avinstallere den eksisterende utvidelsen først).");
define("NBILL_EXTENSION_COULD_NOT_CREATE_FILE", "Installasjonen feilet fordi følgende fil ikke kunne opprettes: %s (hvis denne filen allerede eksisterer, forsøk da å avinstallere den eksisterende utvidelsen først).");
define("NBILL_EXTENSION_INSTALLED", "Utvidelsen '%s' ble vellykket installert!");
define("NBILL_EXTENSION_RETURN_TO_LIST", "for å returnere til utvidelsesinstallasjonen");
define("NBILL_EXTENSION_VERSION_INCOMPATIBLE", "Versjonen av " . NBILL_BRANDING_NAME . " som du bruker, er ikke kompatibel med utvidelsen du forsøker å installere");

//Version 1.2.8
define("NBILL_EXTENSION_DB_ERROR", "Installasjonen var kanskje ikke vellykket fordi følgende databasefeil oppstod: %s");