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

//Vendors
define("INV_VENDOR_INTRO", "Typisk, du vil bare ha dine egene firma detaljer listet her. Dersom du kj�rer mer enn et firma eller en tilbyder for flere firmaer, kan du legge til flere firma detaljer. Alle fakturaer inkludert oppf�ringer som er holdt separert for hver leverand�r.");
define("INV_VENDOR_DETAILS", "Leverand�r detaljer");
define("INV_NEW_VENDOR", "Ny leverand�r");
define("INV_EDIT_VENDOR", "Rediger leverand�r detaljer");
define("INV_VENDORS_TITLE", "Leverand�rer");
define("INV_VENDOR_COUNTRY", "Levernd�r land");
define("INV_VENDOR_CURRENCY", "Leverand�r valuta");
define("INV_VENDOR_OTHER_CURRENCIES", "Andre tillate valutaer");
define("INV_NEXT_INV_NO", "Neste faktura nummer");
define("INV_NEXT_ORDER_NO", "Neste ordre nummer");
define("INV_NEXT_RECEIPT_NO", "Neste kvitterings nummer");
define("INV_NEXT_PAYMENT_NO", "Neste betalings nummer");
define("INV_NEXT_CREDIT_NO", "Neste kredittnote nummer");
define("INV_DEFAULT_PAYMENT_INSTR", "Standard betalings instrukser");
define("INV_DEFAULT_SMALL_PRINT", "Standard liten utskrift");
define("INV_ADMIN_EMAIL", "Administrator e-post");
define("INV_PAPER_SIZE", "Papir st�rrelse");
define("INV_CLIENT_ORDERING", "Tillat klienter � plassere ordrer?");
define("INV_PUBLIC_ORDERING", "Tillat offentlige � plassere ordrer?");
define("INV_SHOW_EMPTY_CATS", "Vis tomme kategorier?");
define("INV_INSTR_VENDOR_NAME", "Skriv inn navnet som du �nsker at skal st� p� fakturaer.");
define("INV_INSTR_VENDOR_ADDRESS", "Skriv inn adressen som du �nsker at skal st� p� fakturaer.");
define("INV_INSTR_VENDOR_COUNTRY", "Dette vil kun vises p� autogenererte fakturarer n�r fakturadresse er i et annet land.");
define("INV_INSTR_VENDOR_CURRENCY", "Velg valuta for denne leverand�ren.");
define("INV_INSTR_VENDOR_OTHER_CURRENCIES", "Spesifiser annen valuta som kunder av denne leverand�ren kan bestille og bli fakturert i (press Ctrl for flere valg, eller for � ta bort allerede valg).");
define("INV_INSTR_NEXT_INVOICE_NO", "Legg inn neste fakturanummer som skal genereres (Du kan velg alpha-numeriske karakterer i starten, men siste karakter m� v�re numerisk, da denne automatisk vil �kes).");
define("INV_INSTR_NEXT_ORDER_NO", "Legg inn neste ordrenummer som skal genereres (Du kan velg alpha-numeriske karakterer i starten, men siste karakter m� v�re numerisk, da denne automatisk vil �kes).");
define("INV_INSTR_NEXT_RECEIPT_NO", "Legg inn neste kviteringsnummer som skal genereres (Du kan velg alpha-numeriske karakterer i starten, men siste karakter m� v�re numerisk, da denne automatisk vil �kes).");
define("INV_INSTR_NEXT_PAYMENT_NO", "Legg inn neste betalingsnummer som skal genereres (Du kan velg alpha-numeriske karakterer i starten, men siste karakter m� v�re numerisk, da denne automatisk vil �kes).");
define("INV_INSTR_NEXT_CREDIT_NO", "Legg inn neste kreditt notatnummer som skal genereres (Du kan velg alpha-numeriske karakterer i starten, men siste karakter m� v�re numerisk, da denne automatisk vil �kes).");
define("INV_INSTR_DEFAULT_PAYMENT_INSTR", "Legg inn standard betalingsinnstruksjoner som skal vises p� fakturane (dette kan endres for forskjellige land p� skatte siden)");
define("INV_INSTR_DEFAULT_SMALL_PRINT", "Legg inn standard small print som skal vises p� fakturane (dette kan endres for forskjellige land p� skatte siden)");
define("INV_INSTR_ADMIN_EMAIL", "E-post sendt til kunder vil se ut som om de blir sendt fra denne adressen.");
define("INV_INSTR_PAPER_SIZE", "Arkstr. som skal brukes ved konvertering til pdf faktura (kun ark i str. A4, A5, Letter, og Legal)");
define("INV_INSTR_CLIENT_ORDERING", "Om komponentens 'front end' skal gi innloggede brukere rett eller ikke rett til � legge inn ordre ");
define("INV_INSTR_PUBLIC_ORDERING", "Om komponentens 'front end' skal gi ikke innloggede brukere rett eller ikke rett til � legge inn ordre ");
define("INV_INSTR_SHOW_EMPTY_CATS", "Hvis brukere kan legge inn ordre ved komponentens 'front end', avgj�r dette valget om det skal vises eller ikke vises kategorier som ikke inneholder produkter eller underkategorier");
define("INV_VENDOR_NAME_REQUIRED", "Du m� ha et navn for leverand�ren.");
define("INV_VENDOR_ADDRESS_REQUIRED", "Du m� spesifisere leverand�r addresse");
define("INV_VENDOR_COUNTRY_REQUIRED", "Du m� spesifisere leverand�r land .");
define("INV_VENDOR_CURRENCY_REQUIRED", "Du m� spesifisere valutta som leverand�r bruker.");
define("INV_VENDOR_EMAIL_REQUIRED", "Du m� spesifisere leverand�r e-post adresse.");
define("INV_ERR_CANNOT_DELETE_LAST_VENDOR", "Du kan ikke slette siste leverand�r!");
define("INV_INVOICE_NO_LOCKED", "Neste faktura nummer for leverand�ren er l�st for �yeblikket. Dette skal kun skje midlertidig mens fakturaer blir generert. Hvis faktura generering feiler og dette feltet fortsatt er l�st, kan du l�se opp ved � trykke p� denne knappen:");
define("INV_ORDER_NO_LOCKED", "Neste ordre nummer for leverand�ren er l�st for �yeblikket. Dette skal kun skje midlertidig mens fakturaer blir generert. Hvis faktura generering feiler og dette feltet fortsatt er l�st, kan du l�se opp ved � trykke p� denne knappen:");
define("INV_RECEIPT_NO_LOCKED", "Neste kvitterings nummer for leverand�ren er l�st for �yeblikket. Dette skal kun skje midlertidig mens fakturaer blir generert. Hvis faktura generering feiler og dette feltet fortsatt er l�st, kan du l�se opp ved � trykke p� denne knappen:");
define("INV_PAYMENT_NO_LOCKED", "Neste betalings nummer for leverand�ren er l�st for �yeblikket. Dette skal kun skje midlertidig mens fakturaer blir generert. Hvis faktura generering feiler og dette feltet fortsatt er l�st, kan du l�se opp ved � trykke p� denne knappen:");
define("INV_UNLOCK", "Unlock");
define("INV_INVOICE_TEMPLATE", "Faktura mal");
define("INV_INSTR_INVOICE_TEMPLATE", "Navn p� mal som skal brukes for produksjons fakturane fra denne leverand�ren.");
define("INV_INSTR_EMAIL_INVOICE_OPTIONS", "Angi standard faktura varsel n�r nye fakturaer er generert. Disse verdiene kan overstyres for individuelle kunder. Hvis standard er satt til � sende en e-post til kunden (enten et varsel eller den faktiske faktureringen), gj�r komponent-grensesnittet at klienten m� melde deg p� dette. Hvis begge standardinnstillingene mot leverand�ren posten OG den altoverskyggende verdien holdes mot klienten posten b�de stiller krav om at ingen e-post skal sendes, vil brukeren ikke bli gitt muligheten til � melde seg. <strong>Merk:</strong> Hvis du sender automatisk e-post, er det sterkt anbefalt � sikre at alle klient-postene har en tilknytting til brukerens post slik at de kan logge seg p� nettsiden � angi sine innstillinger og vise sine fakturaer. <strong>Merk ogs�:</strong> � generere PDF filer tar mye systemressurser - er det anbefalt � unng� dette som standard, og bare for de klienter som virkelig �nsker det.");
define("INV_DEFAULT_GATEWAY", "Standard betalingsm�te");
define("INV_INSTR_DEFAULT_GATEWAY", "Standard betalingsm�te som brukes for nye ordreskjemaer og for � tillate betaling av fakturaer p� nett (hvis det er aktuelt).");
define("INV_AUTO_CREATE_INCOME", "Auto generer inntekt?");
define("INV_INSTR_AUTO_CREATE_INCOME", "Om betalingsm�ten skal instrueres til � automatisk opprette en inntektspost for fakturaer som er betalt p� nettet. MERK: Dette p�virker ikke bestillinger gjort p� et bestillingsskjema (du kan sette det p� det aktuelle bestillingsskjemaet), bare frittst�ende fakturaer som er betalt p� nett .");
define("INV_SUPPRESS_RECEIPT_NOS", "Generer kvitterings nummer manuelt?");
define("INV_INSTR_SUPPRESS_RECEIPT_NOS", "Om man skal, eller ikke fjerne generering av kvitteringstall n�r inntekts elementer er lagt til, og tilbyr en verkt�ylinjeknapp for � generere kvittering for alle inntekter eks. opp til en gitt dato i stedet. Dette er slik at du kan ha alle kvitteringstall i dato rekkef�lge, selv om du har en blanding av automatisk genererte inntekter fra elektroniske betalinger og manuelt innlagte inntekter eks. (eg. for sjekker ets. som overf�res direkte til bankkontoen din). Ved � sette denne til \"Ja\", vil en ekstra verkt�ylinjeknappen vises p� inntektslist siden slik at du kan fylle ut kvitteringstallene opp til en gitt dato, n�r du er klar. ");
define("INV_VENDOR_LOGO", "Leverand�r logo");
define("INV_INSTR_VENDOR_LOGO", "Last opp en .gif fil som vises p� leverand�rs faktura (hvis dette st�ttes av fakturamal. M� v�re .gif og mindre enn 30k). NOTE: Det er mulig du m� oppdatere nettleservinduet, etter du har lastet opp et nytt bilde, siden noen nettlesere lagrer bildet i bufferet (f.eks.. firefox).");
define("INV_VENDOR_GIF_ONLY", "Beklager, logo fila som du lastet opp (%s) er ikke gyldig.  Kun GIF filer kan brukes som levarand�r logo");
define("INV_VENDOR_GIF_TOO_BIG", "Beklager, logo fila du lastet opp er for stor. Maks str. er 30k");
define("INV_DELETE_LOGO", "Slett");
define("INV_VENDOR_DELETE_LOGO_FAILED", INV_BRANDING_NAME . " kunne ikke slette logo fila. Det kan v�re fordi PHP ikke har rettigheter til � slette filer p� din server.");
define("INV_SUPPRESS_PAYMENT_NOS", "Generer betalings nummer manuelt?");
define("INV_INSTR_SUPPRESS_PAYMENT_NOS", "Som over, men for betalings nummer p� utgiftslista.");
define("INV_ADD_REMITTANCE", "Vis remisse r�d?");
define("INV_INSTR_ADD_REMITTANCE", "Om det skal legges til eller ikke en remisse r�d slip p� slutten av fakturaer.");
define("INV_CREDIT_SMALL_PRINT", "Kreditt Note Small Print");
define("INV_INSTR_INVOICE_SMALL_PRINT_CR", "Angi eventuell juridisk ansvarsfraskrivelser etc. som du vil skal vises p� kredittnota.");
define("INV_MASTER_DB_INTRO", "Hvis du selger produkter eller arbeid ved bruk av flere nettsider, hver og en med kopi av " . INV_BRANDING_NAME . ", men du �nsker ha all finans informasjon kun p� en av nettsidene, kan du gj�re dette ved � bruke en kjede av 'master' databaser. VIKTIG! Vennligst ikke bruk denne muligheten f�r da har lest dokumentasjonen (tiljengelig p� " . INV_BRANDING_NAME . " nettsiden), ellers er mulighetene tilstede for at du �delegger dataene!");
define("INV_USE_MASTER_DB", "Bruk en hoveddatabase?");
define("INV_INSTR_USE_MASTER_DB", "Om man skal utsette generasjon av tallene for fakturaer, kreditnotaer, inntekter og utgifter til en master database, eller ikke (en ny kopi av " . INV_BRANDING_NAME . ").");
define("INV_MASTER_DB_HOST", "Hovedhost");
define("INV_INSTR_MASTER_DB_HOST", "Host navn p� hoveddatabasen (f. eks. om dette er en database p� samme server, dette kan v�re 'localhost').");
define("INV_MASTER_USERNAME", "Hovedbrukernavn");
define("INV_INSTR_MASTER_USERNAME", "Brukernavn som beh�ves for � f� adgang til hoveddatabasen.");
define("INV_MASTER_PASSWORD", "Hovedpassord");
define("INV_INSTR_MASTER_PASSWORD", "Passord som beh�ves for � f� adgang til hoveddatabasen.");
define("INV_MASTER_DB_NAME", "Hoveddatabase navn");
define("INV_INSTR_MASTER_DB_NAME", "Navn p� hoveddatabasen.");
define("INV_MASTER_TABLE_PREFIX", "Hoveddatabase tabell prefiks");
define("INV_INSTR_MASTER_TABLE_PREFIX", "Tabell prefiks for hoveddatabasen (typisk 'jos_').");
define("INV_MASTER_DB_CANNOT_CONNECT", "Kunne ikke koble til hoveddatabasen.");
define("INV_MASTER_DB_TEST", "Test oppkobling");
define("INV_MASTER_VENDOR", "Hovedleverand�r");
define("INV_INSTR_MASTER_VENDOR", "Korresponderende leverand�r oppf�ring i hovedatabasen med synkronisering");
define("INV_SYNCHRONISE", "Last opp til hoveddatabase");
define("INV_INSTR_SYNCHRONISE", "Send faktura, kredittnota, inntekter og utgifts data fra denne databasen til hoveddatabasen. Dette vil overskrive eksisterende data i hoveddatabasen med samme faktura, kredittnota, inntekt eller utgifts tall .");
define("INV_SYNC_ARE_YOU_SURE", "ADVARSEL! Dette vil overskrive data p� master database (r). Klikk OK for � laste opp data, eller Avbryt for � avbryte.");
define("INV_MASTER_DB_TEST_SUCCESS", "Koblet til Hoveddatabase");
define("INV_MASTER_DB_NOT_IN_USE", "Kan ikke oppdatere hoveddatabasen - du m� sette 'bruk hoveddatabase' til 'Ja' f�r du fors�ker � laste opp.");
define("INV_SYNCHRONISATION_ERROR", "Det oppstod en feil mens du pr�ver � laste opp til master database. Opplasting avbrutt! Feilmeldingen som returneres av databasen var: %s");
define("INV_SYNCHRONISE_RECORD_COUNT", "%s Oppf�ring(er) lagt til, og %s Oppf�ring(er) oppdatert i Hoveddatabasen");
define("INV_SYNCHRONISE_NEED_GEN", "KAN IKKE FORTSETTE! En eller flere inntekter eller utgiftsposter (enten p� denne databasen, eller p� en hoveddatabase) har enn� ikke f�tt tildelt et nummer. Du m� generere betaling og/ eller kvitteringstall f�r synkronisering (generering av kvittering eller betalingstall p� denne databasen vil ogs� generere eventuelle utest�ende p� hoveddatabase(ne)).");
define("INV_SYNC_UP_TO", "Synkroniser poster til og med (����/mm/dd)");
define("INV_SUPPRESS_GENERATION_BUTTONS", "Fjern Genererings Knapper?");
define("INV_INSTR_SUPPRESS_GENERATION_BUTTONS", "Om � fjerne, eller ikke fjerne visning av verkt�ylinjeknappene for � tillate betalings/ kvitterings nummer generering. Du b�r bare angi dette til \"Ja\" hvis dette er en hoveddatabase, som har et underdatabase som nummer generering b�r utf�res (se hoeveddatabase avsnittet nedenfor). Hvis du angir en underddatabase til � bruke dette eksemplaret av " . INV_BRANDING_NAME . " som en master, vil verdien bli satt til \"Ja\" automatisk. DU GJ�R DERFOR VANLIGVIS IKKE NOE MED INNSTILLINGENE med mindre du pleide � ha en underdatabase som peker til denne, men som ikke lenger finnes (da m� du endre den fra \"Ja\" til \"Nei\" ).");
define("INV_ADD_PAYLINK", "Vis betalings link p� fakturaer?");
define("INV_INSTR_ADD_PAYLINK", "Om du vil legge til en kobling til ubetalte fakturaer generert for denne leverand�ren som tillater kunden � betale fakturaen p� nett.");
define("INV_MASTER_DB_SECTION", "Hoveddatabase");

//Version 1.2.1 - Note to translators:
//Line 74 of original English language file amended (INV_INSTR_EMAIL_INVOICE_OPTIONS) - additional note added

//Version 1.2.7
define("INV_EMAIL_PDF_AVAILABILITY", " (PDF alternativet er kun tilgjengelig om <a href=\"http://www.nbill.co.uk/html2ps.html\" target=\"_blank\">HTML2PS/PDF</a> skriptet er lastet opp)");
?>
