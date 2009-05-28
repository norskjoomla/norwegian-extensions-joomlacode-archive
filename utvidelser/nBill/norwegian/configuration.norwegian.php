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

//Configuration
define("INV_CONFIG_TITLE", "Konfigurasjon");
define("INV_CFG_ERROR_EMAIL", "E-post ved feil");
define("INV_CFG_DATE_FORMAT", "Dato format");
define("INV_CFG_LIST_USERS", "Liste opp brukere p� klient siden");
define("INV_CFG_INSTR_ERROR_EMAIL", "Om det oppst�r feil med programmet, vil en melding bli sendt til denne e-postadressen. MERK: Meldingen som sendes kan inneholde sensitive konfigurasjonsdata om din nettside/server. Om feltet er blankt vil det IKKE bli sendt noe melding ved feil. Alle feil blir lagret i databasen (slettes etter 2 uker).");
define("INV_CFG_INSTR_DATE_FORMAT", "Fastsette datoformatet som skal brukes p� fakturaen (for �yeblikket kan dato bare angis med tall. d=dag, m=m�ned, Y=�r f. eks. NO: \"d/m/Y\"   US: \"m/d/Y\"   Internasjonalt: \"Y/m/d\").");
define("INV_CONFIG_UPDATED", "Konfigurasjonen er oppdatert.");
define("INV_CFG_INSTR_LIST_USERS", "Hvorvidt liste over brukere, som du kan velge fra, skal vises p� kliensiden (s� du kan koble klient og brukerdata) - har du tusenvis av bruker, s� sett dette til NEI s� lastes siden raskere (velger du nei, kan du forsatt koble bruker med klient ved � skrive inn bruker ID direkte).");
define("INV_CFG_DATABASE_FUNCTIONS", "Databasefunksjoner");
define("INV_CFG_INSTR_DATABASE_FUNCTIONS", "Komprimer eller slett " . INV_BRANDING_NAME . " tabellene. Komprimering av tabellene vil slette all data s� du kan starte p� nytt igjen (du m� angi lisenskoden p� nytt). For � kunne slette komponenten fullstendig m� du f�rst slette tabellene f�r du avinstallere komponenten. IKKE slett tabellene om du skal oppgradere til siste versjon av " . INV_BRANDING_NAME . " og beholde dataene! MERK: SLETTING AV TABELLENE GJ�R " . strtoupper(INV_BRANDING_NAME) . " UTE AV FUNKJON. Etter sletting b�r du avinstallere komponenten, den virker ikke mer!");
define("INV_CFG_CLEAR_TABLES", "Komprimer tabellene");
define("INV_CFG_DELETE_TABLES", "Slett tabellene");
define("INV_CFG_CONFIRM_CLEAR", "Er du sikker p� at du vil slette all data? Du kan IKKE gjenopprettes! (om du fortsetter m� du angi lisenskoden p� nytt)");
define("INV_CFG_CONFIRM_DELETE", "ADVARSEL! P� denne m�te vil " . INV_BRANDING_NAME . " ikke virke mer! Er du sikker p� at du vil SLETTE alle " . INV_BRANDING_NAME . " tabellene permanent?");
define("INV_CFG_TABLES_CLEARED", "Tabellene slettet. Alle dine data er slettet. Du m� du angi lisenskoden p� nytt for � fortsatt kunne bruke " . INV_BRANDING_NAME . ".");
define("INV_CFG_TABLES_DELETED", "Alle " . INV_BRANDING_NAME . " tabellene er slettet. For � fullstendig avinstaller, se %s");
define("INV_CFG_UNINSTALLER", "Komponent installert");
define("INV_CFG_CRON_TOKEN", "CRON autorisasjons kode");
define("INV_CFG_INSTR_CRON_TOKEN", "Skriv inn en kode her (ingen skilletegn takk!) og skriv inn den samme koden i s� CRON skriptet kan kj�res (f. eks. til daglig automatisk generering av fakturaer ). Dette for � hindre at ikke godkjente skript kj�res p� " . INV_BRANDING_NAME . ". Se " . INV_BRANDING_WEBSITE . " for mer informasjon.");
define("INV_CFG_LICENSE_KEY", "Lisenskode");
define("INV_CFG_INSTR_LICENSE_KEY", "�nsker du � oppdatere din lisenskode f�r den utl�per kan du skrive inne den ny koden her. ADVARSEL! Skriver du feil kode kan de gj�re at du ikke kan bruke " . INV_BRANDING_NAME . "! Skriv inn en gyldig lisenskode og N�YAKTIG slik den er. Ved � skrive inn lisenskoden, bekrefter du, godtar og forst�r %s");
define("INV_CFG_EULA", "Avslutt avtalen");
define("INV_CFG_VERSION_AUTO_CHECK", "Se etter nye versjoner?");
define("INV_CFG_AUTO_UPDATE", "Oppgrader automatisk?");
define("INV_CFG_INSTR_VERSION_AUTO_CHECK", "Om du automatisk skal eller ikke skal sjekke for nyere versjoner hver gang administrator siden. Ingen personlige data blir sendt.");
define("INV_CFG_INSTR_AUTO_UPDATE", "Om du automatisk skal eller ikke skal oppgradere programvaren n�r nyere versjoner er tilgjenelig. Gjelder bare om 'Se etter nye versjoner' er satt til 'ja'. Er dette valget satt til 'nei', f�r du bare en p�minnelse om at ny versjon er tilgjengelig, men den nye versjonen vil IKKE bli lastet ned og installert.");
define("INV_CFG_CHECK_VERSION", "Se etter oppdateringer");
define("INV_CFG_INSTR_CHECK_VERSION", "Klikk p� denne f�r � sjekke om en nyere versjon av komponenten finnes.");
define("INV_CFG_BTN_CHECK_VERSION", "Sjekk n�");
define("INV_CFG_UPDATE_NOW", "Oppgrader komponenten");
define("INV_CFG_INSTR_UPDATE_NOW", "Klikk p� knappen for � oppgradere til nyest versjon (om gjeldende).");
define("INV_CFG_BTN_UPDATE_NOW", "Oppgrader n�");

/* Version 1.1.4 */
define("INV_CFG_LIST_START_DATE", "Standard startdatolister");
define("INV_CFG_INSTR_LIST_START_DATE", "Indikerer hvordan du vil at systemet skal velge startdato for lister som bruke datoomr�de (f. eks. ordre, faktura) n�r ingen dato valgt. ADVARSEL! Velger du f. eks � vise poster for de siste 5 �rene kan dette gj�re at det tar tid � vise listen.");
define("INV_CFG_START_DATE_CURRENT_ONLY", "Vis bare denne m�ned");
define("INV_CFG_START_DATE_CURRENT_LAST", "Vis denne og forrige m�ned");
define("INV_CFG_START_DATE_QUARTER", "Vis opp til 3 m�neder");
define("INV_CFG_START_DATE_SEMI", "Vis opp til 6 m�neder");
define("INV_CFG_START_DATE_YEAR", "Vis opp til ett �r");
define("INV_CFG_START_DATE_FIVE", "Vis opp til 5 �r");
define("INV_CFG_START_DATE_ALL", "Vis ALLE postene");

//Version 1.2.1
define("INV_CFG_SWITCH_TO_SSL", "Bytt til SSL ved innlogging?");
define("INV_CFG_INSTR_SWITCH_TO_SSL", "Om du skal eller ikke skal bytte til https etter at brukeren har logget inn ved bruk av logg inn fra " . INV_BRANDING_NAME . " (vil bare gjelde logg inn fra  " . INV_BRANDING_NAME . "). ADVARSEL! Du m� ha installert et SSL sertifikat for at dette skal virke. og det kan hende du m� modifisere filer (Se artikkel p� <a target=\"blank\" href=\"http://www.netshinesoftware.com/security/using-an-ssl-certificate-with-your-joomla-website.html\">Netshine Software website</a>).");

//Version 1.2.3 - Note to translators:
//Line 29 of original English language file amended (INV_CFG_INSTR_DATE_FORMAT) - date formats currently restricted to numeric
?>
