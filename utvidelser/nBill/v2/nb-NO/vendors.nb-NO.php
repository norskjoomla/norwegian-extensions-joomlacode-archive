<?php
/**
* Language file for nBill
* @version 1
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

//Vendors
define("NBILL_VENDOR_INTRO", "Typisk, du vil bare ha dine egne firmadetaljer listet her. Dersom du har mer enn et firma, eller en tilbyder for flere firmaer, kan du legge til ytterøigere firmadetaljer. Alle fakturaer, inkludert oppføringer, blir lagret separat for hver leverandør.");
define("NBILL_VENDOR_DETAILS", "Leverandør detaljer");
define("NBILL_NEW_VENDOR", "Ny leverandør");
define("NBILL_EDIT_VENDOR", "Rediger leverandør detaljer");
define("NBILL_VENDORS_TITLE", "Leverandører");
define("NBILL_VENDOR_COUNTRY", "Leverandør land");
define("NBILL_VENDOR_CURRENCY", "Leverandør valuta");
define("NBILL_VENDOR_OTHER_CURRENCIES", "Andre tillatte valutaer");
define("NBILL_NEXT_NBILL_NO", "Neste fakturanummer");
define("NBILL_NEXT_ORDER_NO", "Neste ordrenummer");
define("NBILL_NEXT_RECEIPT_NO", "Neste kvitteringsnummer");
define("NBILL_NEXT_PAYMENT_NO", "Neste betalingsnummer");
define("NBILL_NEXT_CREDIT_NO", "Neste kredittnotanummer");
define("NBILL_DEFAULT_PAYMENT_INSTR", "Standard betalingsbetingelser");
define("NBILL_DEFAULT_SMALL_PRINT", "Standard liten utskrift");
define("NBILL_ADMIN_EMAIL", "Administrator e-post");
define("NBILL_PAPER_SIZE", "Papirstørrelse");
define("NBILL_CLIENT_ORDERING", "Tillat klienter å plassere ordrer?");
define("NBILL_PUBLIC_ORDERING", "Tillat offentlige å plassere ordrer?");
define("NBILL_SHOW_EMPTY_CATS", "Vis tomme kategorier?");
define("NBILL_INSTR_VENDOR_NAME", "Skriv inn navnet som du ønsker på fakturaer.");
define("NBILL_INSTR_VENDOR_ADDRESS", "Skriv inn adressen som du ønsker på fakturaer.");
define("NBILL_INSTR_VENDOR_COUNTRY", "Dette vil kun vises på automatisk genererte fakturarer når fakturadresse er i et annet land.");
define("NBILL_INSTR_VENDOR_CURRENCY", "Velg valuta for denne leverandøren.");
define("NBILL_INSTR_VENDOR_OTHER_CURRENCIES", "Spesifiser annen valuta som kunder av denne leverandøren kan bestille og bli fakturert i (press Ctrl for flere valg, eller for å ta bort allerede markerte valg).");
define("NBILL_INSTR_NEXT_INVOICE_NO", "Legg inn neste fakturanummer som skal genereres (du kan velg alpha-numeriske karakterer i starten, men siste karakter må være numerisk, da denne økes automatisk).");
define("NBILL_INSTR_NEXT_ORDER_NO", "Legg inn neste ordrenummer som skal genereres (du kan velg alpha-numeriske karakterer i starten, men siste karakter må være numerisk, da denne økes automatisk).");
define("NBILL_INSTR_NEXT_RECEIPT_NO", "Legg inn neste kvitteringsnummer som skal genereres (du kan velg alpha-numeriske karakterer i starten, men siste karakter må være numerisk, da denne økes automatisk).");
define("NBILL_INSTR_NEXT_PAYMENT_NO", "Legg inn neste betalingsnummer som skal genereres (du kan velg alpha-numeriske karakterer i starten, men siste karakter må være numerisk, da denne økes automatisk).");
define("NBILL_INSTR_NEXT_CREDIT_NO", "Legg inn neste kredittnotanummer som skal genereres (du kan velg alpha-numeriske karakterer i starten, men siste karakter må være numerisk, da denne økes automatisk).");
define("NBILL_INSTR_DEFAULT_PAYMENT_INSTR", "Legg inn standard betalingsbetingelser som skal vises på fakturaer (dette kan endres for forskjellige land på skattesiden)");
define("NBILL_INSTR_DEFAULT_SMALL_PRINT", "Legg inn standard liten utskrift som skal vises på fakturane (dette kan endres for forskjellige land på skattesiden)");
define("NBILL_INSTR_ADMIN_EMAIL", "E-post sendt til kunder vil se ut som om de blir sendt fra denne adressen.");
define("NBILL_INSTR_PAPER_SIZE", "Format som skal brukes ved konvertering til PDF-faktura (tillatte str. er: A4, A5, Letter og Legal)");
define("NBILL_INSTR_CLIENT_ORDERING", "Om komponentens 'front end' skal gi innloggede brukere rett eller ikke rett til å legge inn ordre ");
define("NBILL_INSTR_PUBLIC_ORDERING", "Om komponentens 'front end' skal gi ikke innloggede brukere rett eller ikke rett til å legge inn ordre ");
define("NBILL_INSTR_SHOW_EMPTY_CATS", "Hvis brukere kan legge inn ordre i komponentens 'front end', avgjør dette valget om det skal vises eller ikke vises kategorier som ikke inneholder produkter eller underkategorier");
define("NBILL_VENDOR_NAME_REQUIRED", "Du må spesifisere på leverandøren.");
define("NBILL_VENDOR_ADDRESS_REQUIRED", "Du må spesifisere leverandørens addresse");
define("NBILL_VENDOR_COUNTRY_REQUIRED", "Du må spesifisere hvilket land leverandøren er i.");
define("NBILL_VENDOR_CURRENCY_REQUIRED", "Du må spesifisere hvilken valuta leverandøren benytter.");
define("NBILL_VENDOR_EMAIL_REQUIRED", "Du må spesifisere leverandørens e-post adresse.");
define("NBILL_ERR_CANNOT_DELETE_LAST_VENDOR", "Du kan ikke slette siste leverandør!");
define("NBILL_INVOICE_NO_LOCKED", "Neste fakturanummer for leverandøren er i øyeblikket låst. Dette skal kun skje midlertidig mens fakturaer blir generert. Hvis fakturagenerering feiler og dette feltet fortsatt er låst, kan du låse opp ved å trykke på denne knappen:");
define("NBILL_ORDER_NO_LOCKED", "Neste ordrenummer for leverandøren er i øyeblikket låst. Dette skal kun skje midlertidig mens fakturaer blir generert. Hvis fakturagenerering feiler og dette feltet fortsatt er låst, kan du låse opp ved å trykke på denne knappen:");
define("NBILL_RECEIPT_NO_LOCKED", "Neste kvitteringsnummer for leverandøren er i øyeblikket låst. Dette skal kun skje midlertidig mens fakturaer blir generert. Hvis fakturagenerering feiler og dette feltet fortsatt er låst, kan du låse opp ved å trykke på denne knappen:");
define("NBILL_PAYMENT_NO_LOCKED", "Neste betalingsnummer for leverandøren er i øyeblikket låst. Dette skal kun skje midlertidig mens fakturaer blir generert. Hvis fakturagenerering feiler og dette feltet fortsatt er låst, kan du låse opp ved å trykke på denne knappen:");
define("NBILL_UNLOCK", "Lås opp");
define("NBILL_INVOICE_TEMPLATE", "Fakturamal");
define("NBILL_INSTR_INVOICE_TEMPLATE", "Navn på mal som skal brukes på fakturaer fra denne leverandøren.");
define("NBILL_INSTR_EMAIL_INVOICE_OPTIONS", "Angi standard fakturavarsel når nye fakturaer er generert. Disse verdiene kan overstyres for individuelle kunder. Hvis standard er satt til å sende en e-post til kunden (enten et varsel eller den faktiske faktureringen), gjør komponent-grensesnittet at klienten må melde deg på dette. Hvis begge standardinnstillingene mot leverandøren posten OG den altoverskyggende verdien holdes mot klienten posten både stiller krav om at ingen e-post skal sendes, vil brukeren ikke bli gitt muligheten til å melde seg. <strong>Merk:</strong> Hvis du sender automatisk e-post, er det sterkt anbefalt å sikre at alle klient-postene har en tilknytting til brukerens post slik at de kan logge seg på nettsiden å angi sine innstillinger og vise sine fakturaer. <strong>Merk også:</strong> Å generere PDF'er tar mye systemressurser - er det anbefalt å unngå dette som standard, og bare for de klienter som virkelig ønsker det.");
define("NBILL_DEFAULT_GATEWAY", "Standard betalingsmåte");
define("NBILL_INSTR_DEFAULT_GATEWAY", "Standard betalingsmåte som brukes for nye ordrer, og for å tillate betaling av fakturaer på nett (hvis det er aktuelt).");
define("NBILL_AUTO_CREATE_INCOME", "Autogenerer inntekt?");
define("NBILL_INSTR_AUTO_CREATE_INCOME", "Om betalingsmåten skal instrueres til å automatisk opprette en inntektspost for fakturaer som er betalt på nettet. MERK: Dette påvirker ikke bestillinger gjort på et bestillingsskjema (du kan sette det på det aktuelle bestillingsskjemaet), bare frittstående fakturaer som er betalt på nett .");
define("NBILL_SUPPRESS_RECEIPT_NOS", "Generer kvitteringsnummer manuelt?");
define("NBILL_INSTR_SUPPRESS_RECEIPT_NOS", "Om man skal eller ikke skal fjerne generering av kvitteringstall når inntektselementer er lagt til, og tilbyr en verktøylinjeknapp for å generere kvittering for alle inntekter eks. opp til en gitt dato i stedet. Dette er slik at du kan ha alle kvitteringstall i dato rekkefølge, selv om du har en blanding av automatisk genererte inntekter fra elektroniske betalinger og manuelt innlagte inntekter eks. (eg. for sjekker ets. som overføres direkte til bankkontoen din). Ved å sette denne til \"Ja\", vil en ekstra verktøylinjeknapp vises på inntektslist-siden slik at du kan fylle ut kvitteringstallene opp til en gitt dato, når du er klar. ");
define("NBILL_VENDOR_LOGO", "Leverandør logo");
define("NBILL_INSTR_VENDOR_LOGO", "Last opp en .gif fil som vises på leverandørens faktura (hvis dette støttes av fakturamal). Må være .gif og mindre enn 30 kb. OBS: Det er mulig du må oppdatere nettleservinduet, etter du har lastet opp et nytt bilde, siden noen nettlesere lagrer bildet i bufferet.");
define("NBILL_VENDOR_GIF_ONLY", "Beklager, filen som du lastet opp (%s) er ikke gyldig.  Kun GIF-filer kan brukes som leverandør-logo");
define("NBILL_VENDOR_GIF_TOO_BIG", "Beklager, filen du lastet opp er for stor. Maks størrelse er 30 kb");
define("NBILL_DELETE_LOGO", "Slett");
define("NBILL_VENDOR_DELETE_LOGO_FAILED", NBILL_BRANDING_NAME . " kunne ikke slette filen. Det kan være fordi PHP ikke har rettigheter til å slette filer på din server.");
define("NBILL_SUPPRESS_PAYMENT_NOS", "Generer betalingsnummer manuelt?");
define("NBILL_INSTR_SUPPRESS_PAYMENT_NOS", "Som over, men for betalingsnummer på utgiftslisten.");
define("NBILL_ADD_REMITTANCE", "Vis remisse råd?");
define("NBILL_INSTR_ADD_REMITTANCE", "Om det skal eller ikke skal legges til en remisse råd slip på slutten av fakturaer.");
define("NBILL_CREDIT_SMALL_PRINT", "Kredittnota (liten skrift)");
define("NBILL_INSTR_INVOICE_SMALL_PRINT_CR", "Angi eventuell juridisk ansvarsfraskrivelser etc. som du vil skal vises på kredittnota.");
define("NBILL_MASTER_DB_INTRO", "Hvis du selger produkter eller arbeid ved bruk av flere nettsider, hver og en med kopi av " . NBILL_BRANDING_NAME . ", men du ønsker å ha all finansinformasjon kun på en av nettsidene, kan du gjøre dette ved å bruke en kjede av hoveddatabaser. VIKTIG! Vennligst ikke bruk denne muligheten før du har lest dokumentasjonen (tiljengelig på " . NBILL_BRANDING_NAME . " nettsiden), ellers er mulighetene tilstede for at du ødelegger dataene!");
define("NBILL_USE_MASTER_DB", "Bruk en primærdatabasen?");
define("NBILL_INSTR_USE_MASTER_DB", "Om man skal utsette generering av tallene for fakturaer, kreditnotaer, inntekter og utgifter til en primærdatabasen, eller ikke (en ny kopi av " . NBILL_BRANDING_NAME . ").");
define("NBILL_MASTER_DB_HOST", "Primærvert");
define("NBILL_INSTR_MASTER_DB_HOST", "Vertsnavn på primærdatabasen (kan være 'localhost' om dette er en database på samme server).");
define("NBILL_MASTER_USERNAME", "Brukernavn");
define("NBILL_INSTR_MASTER_USERNAME", "Brukernavn som behøves for å få adgang til primærdatabasen.");
define("NBILL_MASTER_PASSWORD", "Passord");
define("NBILL_INSTR_MASTER_PASSWORD", "Passord som behøves for å få adgang til primærdatabasen.");
define("NBILL_MASTER_DB_NAME", "Navn på primærdatabasen");
define("NBILL_INSTR_MASTER_DB_NAME", "Navn på primærdatabasen.");
define("NBILL_MASTER_TABLE_PREFIX", "Tabell prefiks for primærdatabasen");
define("NBILL_INSTR_MASTER_TABLE_PREFIX", "Tabell prefiks for primærdatabasen (typisk 'jos_').");
define("NBILL_MASTER_DB_CANNOT_CONNECT", "Kunne ikke koble til primærdatabasen.");
define("NBILL_MASTER_DB_TEST", "Test oppkobling");
define("NBILL_MASTER_VENDOR", "Hovedleverandør");
define("NBILL_INSTR_MASTER_VENDOR", "Korresponderende leverandøroppføring i primærdatabasen med synkronisering");
define("NBILL_SYNCHRONISE", "Last opp til primærdatabase");
define("NBILL_INSTR_SYNCHRONISE", "Send faktura-, kredittnota-, inntekts- og utgiftsdata fra denne databasen til primærdatabasen. Dette vil overskrive eksisterende data i hoveddatabasen med samme faktura-, kredittnota-, inntekts- og utgiftstall .");
define("NBILL_SYNC_ARE_YOU_SURE", "ADVARSEL! Dette vil overskrive data på primærdatabasen (r). Klikk 'OK' for å laste opp data, eller 'Avbryt' for å avbryte.");
define("NBILL_MASTER_DB_TEST_SUCCESS", "Koblet til primærdatabase");
define("NBILL_MASTER_DB_NOT_IN_USE", "Kan ikke oppdatere primærdatabasen - du må sette 'Bruk primærdatabase' til 'Ja' før du forsøker å laste opp.");
define("NBILL_SYNCHRONISATION_ERROR", "Det oppstod en feil mens du prøvde å laste opp til primærdatabasen. Opplasting avbrutt! Feilmeldingen som returneres av databasen var: %s");
define("NBILL_SYNCHRONISE_RECORD_COUNT", "%s oppføring(er) lagt til, og %s oppføring(er) oppdatert i primærdatabasen");
define("NBILL_SYNCHRONISE_NEED_GEN", "KAN IKKE FORTSETTE! En eller flere inntekter eller utgiftsposter (enten på denne databasen, eller på en primærdatabasen) har ennå ikke fått tildelt et nummer. Du må generere betaling og/eller kvitteringstall før synkronisering (generering av kvitterings- eller betalingstall på denne databasen vil også generere eventuelle utestående på primærdatabasen).");
define("NBILL_SYNC_UP_TO", "Synkroniser poster til og med (åååå/mm/dd)");
define("NBILL_SUPPRESS_GENERATION_BUTTONS", "Fjern genererings-knapper?");
define("NBILL_INSTR_SUPPRESS_GENERATION_BUTTONS", "Om å fjerne eller ikke fjerne visning av verktøylinjeknappene for å tillate generering av betalings- og kvitteringsnummer. Du bør bare sette dette til \"Ja\" hvis dette er en primærdatabase som har en underdatabase som nummergenerering bør utføres (se hoeveddatabase avsnittet nedenfor). Hvis du angir en underdatabase til å bruke dette eksemplaret av " . NBILL_BRANDING_NAME . " som en master, vil verdien bli satt til \"Ja\" automatisk. DU GJØR DERFOR VANLIGVIS IKKE NOE MED INNSTILLINGENE med mindre du pleide å ha en underdatabase som peker til denne, men som ikke lenger finnes (da må du endre den fra \"Ja\" til \"Nei\" ).");
define("NBILL_ADD_PAYLINK", "Vis lenke til betaling på fakturaer?");
define("NBILL_INSTR_ADD_PAYLINK", "Om du vil legge til en kobling til ubetalte fakturaer generert for denne leverandøren som tillater kunden å betale fakturaen på nett.");
define("NBILL_MASTER_DB_SECTION", "Primærdatabase");

//Version 1.2.1 - Note to translators:
//Line 74 of original English language file amended (NBILL_INSTR_EMAIL_INVOICE_OPTIONS) - additional note added

//Version 1.2.7
define("NBILL_EMAIL_PDF_AVAILABILITY", " (PDF-alternativet er kun tilgjengelig om <a href=\"http://www.nbill.co.uk/html2ps.html\" target=\"_blank\">HTML2PS/PDF-skriptet</a> er lastet opp)");
?>
