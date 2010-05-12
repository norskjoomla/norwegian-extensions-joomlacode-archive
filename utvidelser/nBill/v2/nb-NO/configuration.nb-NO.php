<?php
/**
* Language file for the Global Configuration page
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

//Configuration
define("NBILL_CONFIG_TITLE", "Konfigurasjon");
define("NBILL_CFG_ERROR_EMAIL", "E-post ved feil");
define("NBILL_CFG_DATE_FORMAT", "Datoformat");
define("NBILL_CFG_LIST_USERS", "Vis brukere på kundesiden");
define("NBILL_CFG_INSTR_ERROR_EMAIL", "Om det oppstår feil med programmet, vil en melding bli sendt til denne e-postadressen. MERK: Meldingen som sendes kan inneholde sensitive konfigurasjonsdata om din nettside eller server. Om feltet er blankt vil det IKKE bli sendt noe melding ved feil. Alle feil blir lagret i databasen (slettes etter 2 uker).");
define("NBILL_CFG_INSTR_DATE_FORMAT", "Fastsette datoformatet som skal brukes på fakturaen (for øyeblikket kan dato bare angis med tall. d=dag, m=måned, Y=år f. eks. NO: \"d/m/Y\"   US: \"m/d/Y\"   Internasjonalt: \"Y/m/d\").");
define("NBILL_CONFIG_UPDATED", "Konfigurasjonen er oppdatert.");
define("NBILL_CFG_INSTR_LIST_USERS", "Hvorvidt du vil vise liste over brukere, som du kan velge fra, som skal vises på kundesiden (så du kan koble kunde og brukerdata). Har du tusenvis av brukere, sett dette til NEI for å laste siden raskere. (Velger du nei, kan du forsatt koble bruker med kunde ved å skrive inn bruker-ID direkte).");
define("NBILL_CFG_DATABASE_FUNCTIONS", "Databasefunksjoner");
define("NBILL_CFG_INSTR_DATABASE_FUNCTIONS", "Komprimer eller slett " . NBILL_BRANDING_NAME . " databasetabellen, eller overføre data fra versjon 1.2.x. Komprimering av tabellene vil slette alle data så du kan starte på nytt igjen (du må angi lisenskoden på nytt). For å kunne slette komponenten fullstendig må du først slette tabellene før du avinstallerer komponenten. IKKE slett tabellene om du skal oppgradere til siste versjon av " . NBILL_BRANDING_NAME . " og beholde dataene! MERK: SLETTING AV TABELLENE GJØR " . strtoupper(NBILL_BRANDING_NAME) . " UBRUKELIG. Etter sletting bør du avinstallere komponenten, da den ikke lenger vil virke! Overføring av data fra versjon 1.2.x vil slette all eksisterende data, kopiere data fra versjon 1.2.x i stedet (dette kan ta noe tid).");
define("NBILL_CFG_CLEAR_TABLES", "Komprimer tabellene");
define("NBILL_CFG_DELETE_TABLES", "Slett tabellene");
define("NBILL_CFG_CONFIRM_CLEAR", "Er du sikker på at du vil slette alle data? De kan IKKE gjenopprettes! (Om du fortsetter må du angi lisenskoden på nytt.)");
define("NBILL_CFG_CONFIRM_DELETE", "ADVARSEL! På denne måten vil " . NBILL_BRANDING_NAME . " ikke virke lenger! Er du sikker på at du vil SLETTE alle " . NBILL_BRANDING_NAME . " tabellene permanent?");
define("NBILL_CFG_TABLES_CLEARED", "Tabellene og alle dine data er slettet. Du må  angi lisenskoden på nytt for å fortsatt kunne bruke " . NBILL_BRANDING_NAME . ".");
define("NBILL_CFG_TABLES_DELETED", "Alle " . NBILL_BRANDING_NAME . " tabellene er slettet. For å fullstendig avinstaller, se %s");
define("NBILL_CFG_UNINSTALLER", "Komponent installasjon");
define("NBILL_CFG_CRON_TOKEN", "CRON autorisasjonskode");
define("NBILL_CFG_INSTR_CRON_TOKEN", "Skriv inn en kode her (ingen skilletegn!) og skriv inn den samme koden slik at CRON-skriptet kan kjøres (f. eks. til daglig automatisk generering av fakturaer ). Dette for å hindre at ikke godkjente skript kjøres på " . NBILL_BRANDING_NAME . ". Se " . NBILL_BRANDING_WEBSITE . " for mer informasjon.");
define("NBILL_CFG_LICENSE_KEY", "Lisenskode");
define("NBILL_CFG_INSTR_LICENSE_KEY", "Ønsker du å oppdatere din lisenskode før den utløper, kan du skrive inne den ny koden her. ADVARSEL! Skriver du feil kode kan dette føre til at du ikke kan bruke " . NBILL_BRANDING_NAME . " lenger! Skriv inn en gyldig lisenskode NØYAKTIG slik den er. Ved å skrive inn lisenskoden, bekrefter du, godtar og forstår %s");
define("NBILL_CFG_EULA", "Avslutt avtalen");
define("NBILL_CFG_VERSION_AUTO_CHECK", "Se etter nye versjoner?");
define("NBILL_CFG_AUTO_UPDATE", "Oppgrader automatisk?");
define("NBILL_CFG_INSTR_VERSION_AUTO_CHECK", "Velg om det automatisk skal eller ikke skal sjekkes for nyere versjoner av programmet når administratorsiden åpnes. Ingen personlige data blir sendt.");
define("NBILL_CFG_INSTR_AUTO_UPDATE", "Velg om du automatisk skal eller ikke skal oppgradere programvaren når nyere versjoner er tilgjengelig. Gjelder bare om 'Se etter nye versjoner' er satt til 'ja'. Er dette valget satt til 'nei', får du bare en påminnelse om at ny versjon er tilgjengelig, men den nye versjonen vil IKKE bli lastet ned og installert.");
define("NBILL_CFG_CHECK_VERSION", "Se etter oppdateringer");
define("NBILL_CFG_INSTR_CHECK_VERSION", "Klikk for å sjekke om en nyere versjon av komponenten finnes.");
define("NBILL_CFG_BTN_CHECK_VERSION", "Sjekk nå");
define("NBILL_CFG_UPDATE_NOW", "Oppgrader komponenten");
define("NBILL_CFG_INSTR_UPDATE_NOW", "Klikk på knappen for å oppgradere til nyeste versjon (hvis tilgjengelig).");
define("NBILL_CFG_BTN_UPDATE_NOW", "Oppgrader nå");

/* Version 1.1.4 */
define("NBILL_CFG_LIST_START_DATE", "Standard startdato for lister");
define("NBILL_CFG_INSTR_LIST_START_DATE", "Indikerer hvordan du vil at systemet skal velge startdato for lister som bruker datoområde (f. eks. ordre, faktura) når ingen dato valgt. ADVARSEL! Velger du f. eks. å vise poster for de siste 5 årene, kan dette føre til at det tar lang tid å vise listen.");
define("NBILL_CFG_START_DATE_CURRENT_ONLY", "Vis bare denne måned");
define("NBILL_CFG_START_DATE_CURRENT_LAST", "Vis denne og forrige måned");
define("NBILL_CFG_START_DATE_QUARTER", "Vis inntil 3 måneder");
define("NBILL_CFG_START_DATE_SEMI", "Vis inntil 6 måneder");
define("NBILL_CFG_START_DATE_YEAR", "Vis inntil ett år");
define("NBILL_CFG_START_DATE_FIVE", "Vis inntil 5 år");
define("NBILL_CFG_START_DATE_ALL", "Vis ALt");

//Version 1.2.1
define("NBILL_CFG_SWITCH_TO_SSL", "Bytt til SSL ved innlogging?");
define("NBILL_CFG_INSTR_SWITCH_TO_SSL", "Velg om du skal eller ikke skal bytte til https etter at brukeren har logget inn ved bruk av logg inn fra " . NBILL_BRANDING_NAME . " (vil bare gjelde logg inn fra  " . NBILL_BRANDING_NAME . "). ADVARSEL! Du må ha installert et SSL-sertifikat for at dette skal virke. Det kan hende du må modifisere filer (Se artikkel på <a target=\"blank\" href=\"http://www.netshinesoftware.com/security/using-an-ssl-certificate-with-your-joomla-website.html\">Netshines nettside</a>).");

//Version 1.2.3 - Note to translators:
//Line 29 of original en-GB language file amended (NBILL_CFG_INSTR_DATE_FORMAT) - date formats currently restricted to numeric

//Version 2.0.0
define("NBILL_CFG_NO_TX_ID_SPECIFIED", "Ingen transaksjons-ID ble spesifisert.");
define("NBILL_CFG_ORDER_ASSOCIATED", "Den valgte bestillingen er nå knyttet til denne transaksjonen");
define("NBILL_CFG_PREV_MATCH_DISCARDED", " og den tidligere knytningen valgt av " . NBILL_BRANDING_NAME . " er slettet.");
define("NBILL_CFG_CLOSEST_MATCH_ACCEPTED", "Den nærmeste likheten ble akseptert. ");
define("NBILL_CFG_NO_ACTION", "Ingen handling utført.");
define("NBILL_CFG_ASSOCIATION_REMOVED", "Transaksjonen er ikke lenger forbundet med en bestilling. Fremtidige transaksjoner med denne ID en vil vise en advarsel som igjen ber deg om å velge riktig bestilling.");
define("NBILL_CFG_FORM_TAMPERING", "Skjemaet synes å ha blitt endret (sikkerhetstegnet samsvarer ikke med verdien). Ingen handling er utført.");
define("NBILL_CFG_TX_CHANGE_INTRO", "%s klarte ikke å bestemme hvilken bestilling en transaksjon for %s skal tildeles. Basert på beløp og dato, ble den nærmeste valgt (som standard blir den bestillingen som er mest lik valgt i den første nedtrekkslisten nedenfor). Hvis dette ikke er riktig, må du velge riktig bestilling fra den første nedtrekkslisten. Hvis du er sikker på at den riktige bestillingen ikke er oppført i den første nedtrekkslisten, kan du velge en annen bestilling å knytte denne transaksjonen til, eller velge å ikke knytte transaksjonen til noen bestillinger.");
define("NBILL_CFG_SELECT_ASSOCIATION", "Du kan velge en ordre å knytte denne transaksjonen til, eller velg å ikke knytte transaksjonen til en ordre.");
define("NBILL_CFG_ASSOC_WARNING", "MERK: Velger du en ordre vil alle fremtidige transaksjoner med samme ID-nummer (%s) bli knyttet til denne ordre også.");
define("NBILL_CFG_AMEND_ASSOC_TITLE", "Endre transaksjon tilknytning");
define("NBILL_CFG_INDICATE_ACTION", "Velg hvilke tiltak som skal utføres:");
define("NBILL_CFG_UNALLOCATED", "Tilordne transaksjon til en ledig bestilling:");
define("NBILL_CFG_OTHER_ORDER", "Tilordne transaksjon til en annen bestilling:");
define("NBILL_CFG_NOT_RECOMMENDED", "(anbefales ikke med mindre du er helt sikkert!)");
define("NBILL_CFG_NO_SAVE_ON_DEMO", "Beklager, men du kan ikke lagre konfigurasjonen i demo versjonen.");
define("NBILL_CFG_MIGRATE_1_2", "Overfør fra v1.2.x");
define("NBILL_CFG_FTP_ADDRESS", "FTP adresse");
define("NBILL_CFG_INSTR_FTP_ADDRESS", "Hvis du vil tillate " . NBILL_BRANDING_NAME . " å oppgradere seg selv ved hjelp av FTP (dvs. hvor filene er eid av ditt FTP brukernavn i stedet for at brukeren PHP som det kjører under), skriv inn FTP forbindelsesdetaljene her. Dette er ikke nødvendig hvis serveren kjører suPHP. <strong>MERK: Hvis du bruker Joomla 1.5, bør du sette FTP detaljene i Joomla konfigurasjonen i stedet for her</strong> (så lenge detaljene er riktig, vil de automatisk bli plukket opp av " . NBILL_BRANDING_NAME . " og kan da ikke bli overskrevet her).");
define("NBILL_CFG_FTP_PORT", "FTP Port");
define("NBILL_CFG_INSTR_FTP_PORT", "Porten til bruk ved tilkobling via FTP (standard er 21)");
define("NBILL_CFG_FTP_USERNAME", "FTP brukernavn");
define("NBILL_CFG_INSTR_FTP_USERNAME", "Brukernavnet som skal brukes når du kobler via FTP");
define("NBILL_CFG_FTP_PASSWORD", "FTP passord");
define("NBILL_CFG_INSTR_FTP_PASSWORD", "Passord som skal brukes når du kobler via FTP");
define("NBILL_CFG_FTP_ROOT", "FTP rot mappe");
define("NBILL_CFG_INSTR_FTP_ROOT", "Den fullstendige banen til rotmappen hvor detaljene over gir tilgang. For eksempel, hvis hele banen til nettstedet ditt er /home/user/public_html/cms, FTP-roten vil da typisk være /home/user/. Pass på at du har med en etterfølgende skråstrek, hvis det er aktuelt.");
define("NBILL_CFG_TEST_FTP", "Test kobling");
define("NBILL_CFG_FTP_CONNECT_SUCCESSFUL", "Vellykket FTP tilkobling");
define("NBILL_CFG_FTP_CONNECT_FAILED", "FTP tilkobling mislyktes");
define("NBILL_CFG_FTP_LOGIN_FAILED", "Koblet til FTP server ok, men pålogging mislyktes");
define("NBILL_CFG_FTP_OK_BUT_NBILL_NOT_FOUND", "FTP tilkobling og innlogging var vellykket, men " . NBILL_BRANDING_NAME . " ble ikke funnet på denne plasseringen");
define("NBILL_CFG_FTP_OK_BUT_FILE_NOT_WRITTEN", "FTP tilkobling, innlogging, og navigering i mappene er vellykket, men kunne ikke skrive til filene (det kan være din brannmur blokkerer tilgangen, eller denne brukeren kanskje ikke har skrivetilgang til filene");
define("NBILL_CFG_FTP_WRITE_OK_NO_READ", "FTP tilkobling, innlogging, og navigering i mappene er vellykket, men kan ikke bekrefte at filer kan skrives til - brukeren har kanskje ikke lesetilgang til filene");
define("NBILL_CFG_FTP_TRY_AGAIN", "Vennligst endre FTP forbindelsesdetaljene på denne siden, lagre endringene, og prøv igjen.");