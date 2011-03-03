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
define("INV_CFG_DATE_FORMAT", "Datoformat");
define("INV_CFG_LIST_USERS", "Liste opp brukere på klientsiden");
define("INV_CFG_INSTR_ERROR_EMAIL", "Om det oppstår feil med programmet, vil en melding bli sendt til denne e-postadressen. MERK: Meldingen som sendes kan inneholde sensitive konfigurasjonsdata om din nettside eller server. Om feltet er blankt vil det IKKE bli sendt noe melding ved feil. Alle feil blir lagret i databasen (slettes etter 2 uker).");
define("INV_CFG_INSTR_DATE_FORMAT", "Fastsette datoformatet som skal brukes på fakturaen (for øyeblikket kan dato bare angis med tall. d=dag, m=måned, Y=år f. eks. NO: \"d/m/Y\"   US: \"m/d/Y\"   Internasjonalt: \"Y/m/d\").");
define("INV_CONFIG_UPDATED", "Konfigurasjonen er oppdatert.");
define("INV_CFG_INSTR_LIST_USERS", "Velg om du vil vise liste over brukere, som du kan velge fra, skal vises på kliensiden (så du kan koble klient og brukerdata). Har du tusenvis av brukere, sett dette til NEI for å laste siden raskere. (Velger du nei, kan du forsatt koble bruker med klient ved å skrive inn bruker-ID direkte).");
define("INV_CFG_DATABASE_FUNCTIONS", "Databasefunksjoner");
define("INV_CFG_INSTR_DATABASE_FUNCTIONS", "Komprimér eller slett " . INV_BRANDING_NAME . " tabellene. Komprimering av tabellene vil slette alle data så du kan starte på nytt igjen (du må angi lisenskoden på nytt). For å kunne slette komponenten fullstendig må du først slette tabellene før du avinstallerer komponenten. IKKE slett tabellene om du skal oppgradere til siste versjon av " . INV_BRANDING_NAME . " og beholde dataene! MERK: SLETTING AV TABELLENE GJØR " . strtoupper(INV_BRANDING_NAME) . " UBRUKELIG. Etter sletting bør du avinstallere komponenten, da den ikke lenger vil virke!");
define("INV_CFG_CLEAR_TABLES", "Komprimér tabellene");
define("INV_CFG_DELETE_TABLES", "Slett tabellene");
define("INV_CFG_CONFIRM_CLEAR", "Er du sikker på at du vil slette alle data? De kan IKKE gjenopprettes! (Om du fortsetter må du angi lisenskoden på nytt.)");
define("INV_CFG_CONFIRM_DELETE", "ADVARSEL! På denne måten vil " . INV_BRANDING_NAME . " ikke virke lenger! Er du sikker på at du vil SLETTE alle " . INV_BRANDING_NAME . " tabellene permanent?");
define("INV_CFG_TABLES_CLEARED", "Tabellene og alle dine data er slettet. Du må  angi lisenskoden på nytt for å fortsatt kunne bruke " . INV_BRANDING_NAME . ".");
define("INV_CFG_TABLES_DELETED", "Alle " . INV_BRANDING_NAME . " tabellene er slettet. For å fullstendig avinstaller, se %s");
define("INV_CFG_UNINSTALLER", "Komponent installert");
define("INV_CFG_CRON_TOKEN", "CRON autorisasjons-kode");
define("INV_CFG_INSTR_CRON_TOKEN", "Skriv inn en kode her (ingen skilletegn takk!) og skriv inn den samme koden slik at CRON-skriptet kan kjøres (f. eks. til daglig automatisk generering av fakturaer ). Dette for å hindre at ikke godkjente skript kjøres på " . INV_BRANDING_NAME . ". Se " . INV_BRANDING_WEBSITE . " for mer informasjon.");
define("INV_CFG_LICENSE_KEY", "Lisenskode");
define("INV_CFG_INSTR_LICENSE_KEY", "Ønsker du å oppdatere din lisenskode før den utløper, kan du skrive inne den ny koden her. ADVARSEL! Skriver du feil kode kan dette føre til at du ikke kan bruke " . INV_BRANDING_NAME . " lenger! Skriv inn en gyldig lisenskode NØYAKTIG slik den er. Ved å skrive inn lisenskoden, bekrefter du, godtar og forstår %s");
define("INV_CFG_EULA", "Avslutt avtalen");
define("INV_CFG_VERSION_AUTO_CHECK", "Se etter nye versjoner?");
define("INV_CFG_AUTO_UPDATE", "Oppgrader automatisk?");
define("INV_CFG_INSTR_VERSION_AUTO_CHECK", "Velg om det automatisk skal eller ikke skal sjekkes for nyere versjoner av programmet når administratorsiden åpnes. Ingen personlige data blir sendt.");
define("INV_CFG_INSTR_AUTO_UPDATE", "Velg om du automatisk skal eller ikke skal oppgradere programvaren når nyere versjoner er tilgjenelig. Gjelder bare om 'Se etter nye versjoner' er satt til 'ja'. Er dette valget satt til 'nei', får du bare en påminnelse om at ny versjon er tilgjengelig, men den nye versjonen vil IKKE bli lastet ned og installert.");
define("INV_CFG_CHECK_VERSION", "Se etter oppdateringer");
define("INV_CFG_INSTR_CHECK_VERSION", "Klikk for å sjekke om en nyere versjon av komponenten finnes.");
define("INV_CFG_BTN_CHECK_VERSION", "Sjekk nå");
define("INV_CFG_UPDATE_NOW", "Oppgrader komponenten");
define("INV_CFG_INSTR_UPDATE_NOW", "Klikk på knappen for å oppgradere til nyeste versjon (hvis tilgjengelig).");
define("INV_CFG_BTN_UPDATE_NOW", "Oppgrader nå");

/* Version 1.1.4 */
define("INV_CFG_LIST_START_DATE", "Standard startdatolister");
define("INV_CFG_INSTR_LIST_START_DATE", "Indikerer hvordan du vil at systemet skal velge startdato for lister som bruker datoområde (f. eks. ordre, faktura) når ingen dato valgt. ADVARSEL! Velger du f. eks. å vise poster for de siste 5 årene, kan dette føre til at det tar lang tid å vise listen.");
define("INV_CFG_START_DATE_CURRENT_ONLY", "Vis bare denne måned");
define("INV_CFG_START_DATE_CURRENT_LAST", "Vis denne og forrige måned");
define("INV_CFG_START_DATE_QUARTER", "Vis inntil 3 måneder");
define("INV_CFG_START_DATE_SEMI", "Vis inntil 6 måneder");
define("INV_CFG_START_DATE_YEAR", "Vis inntil ett år");
define("INV_CFG_START_DATE_FIVE", "Vis inntil 5 år");
define("INV_CFG_START_DATE_ALL", "Vis ALLE postene");

//Version 1.2.1
define("INV_CFG_SWITCH_TO_SSL", "Bytt til SSL ved innlogging?");
define("INV_CFG_INSTR_SWITCH_TO_SSL", "Velg om du skal eller ikke skal bytte til https etter at brukeren har logget inn ved bruk av logg inn fra " . INV_BRANDING_NAME . " (vil bare gjelde logg inn fra  " . INV_BRANDING_NAME . "). ADVARSEL! Du må ha installert et SSL-sertifikat for at dette skal virke. Det kan hende du må modifisere filer (Se artikkel på <a target=\"blank\" href=\"http://www.netshinesoftware.com/security/using-an-ssl-certificate-with-your-joomla-website.html\">Netshine Software website</a>).");

//Version 1.2.3 - Note to translators:
//Line 29 of original English language file amended (INV_CFG_INSTR_DATE_FORMAT) - date formats currently restricted to numeric
?>
