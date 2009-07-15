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

//Reminders
define("INV_REMINDERS_TITLE", "Påminnelser");
define("INV_REMINDERS_WARNING", "Denne funksjonen har potensial til å sende e-post til ALLE dine kunder. Vær forsiktig, og bruk skjer på eget ansvar!");
define("INV_REMINDERS_INTRO", "Dine påminnelser som du vil sende til deg selv eller til dine kunder når utbetalingene forfaller eller ordre skal fornyes, eller er i ferd med å utløpe, eller når fakturaer ikke er betalt. MERK: Disse innstillingene har INGEN effekt med mindre du også har satt opp en planlagt oppgave til å sjekke hva som er forfalt og så sende en e-post. For å gjøre dette vil du vanligvis bruke en CRON jobb sammen med ett skript, planlagt påminnelse - som er tilgjengelig fra " . INV_BRANDING_NAME . " nettside. Vennligst se dokumentasjonen for mer informasjon om hvordan du setter opp en CRON jobb.");
define("INV_REMINDER_NAME", "Påminnelsesnavn");
define("INV_EDIT_REMINDER", "Rediger påminnelse");
define("INV_REMINDER_TYPE", "Type påminnelse");
define("INV_REMINDER_ACTIVE", "Aktiv?");
define("INV_REMINDER_ACTIVE_YES", "Aktive");
define("INV_REMINDER_ACTIVE_NO", "Inaktiv");
define("INV_REMINDER_NAME_REQUIRED", "Skriv inn et navn for å identifisere denne påminnelsen");
define("INV_REMINDER_STARTING_FROM", "Fra");
define("INV_REMINDER_NUMBER_OF_UNITS", "Antall enheter");
define("INV_NEW_REMINDER", "Ny påminnelse");
define("INV_REMINDER_DETAILS", "Påminnelsesdetaljer");
define("INV_INSTR_REMINDER_NAME", "Skriv inn et navn som gjør det lett å identifisere hva denne påminnelsen gjelder.");
define("INV_INSTR_REMINDER_TYPE", "Velg type påminnelse du vil lage.");
define("INV_INSTR_REMINDER_ACTIVE", "Hvorvidt om det skal sendes e-post eller ikke for denne påminnelsen.");
define("INV_REMINDER_ADMIN", "Administrator?");
define("INV_INSTR_REMINDER_ADMIN", "Hvorvidt påminnelsen skal sendes til administrator og ikke til kunden (hvis du ønsker påminnelse sendt til både administrator og kunde, må du sette opp 2 separate påminnelser).");
define("INV_INSTR_REMINDER_STARTING_FROM", "Dato for når å begynne å sende påminnelses e-post (hvis tomt, vil påminnelse bli sendt uavhengig av dato).");
define("INV_REMINDER_NO_OF_UNITS", "Antall enheter");
define("INV_INSTR_REMINDER_NO_OF_UNITS", "Angi antall enheter for intervallet mellom hendelsen og påminnelsen (eller i tilfelle av brukerdefinerte påminnelser, intervallet mellom påminnelser). F. eks. til et intervall av 7 dager, er tallet 7 (og enheter er 'Dager').");
define("INV_REMINDER_UNITS", "Enhet");
define("INV_INSTR_REMINDER_UNITS", "Velg type enhet for dette intervallet.");
define("INV_REMINDER_SEND_AFTER", "Send etter?");
define("INV_INSTR_REMINDER_SEND_AFTER", "Hvorvidt å sende påminnelse etter hendelsen eller ikke (vanligvis bare bruket på forfalte fakturaer - dvs. å sende en påminnelse x dager etter forfallsdato på faktura).");
define("INV_REMINDER_EMAIL_TEXT", "E-post tekst");
define("INV_INSTR_REMINDER_EMAIL_TEXT", "Skriv inn e-postmeldingen du ønsker å sende. Du kan bruke følgende frase: {NAME} = setter inn kundens navn; {VENDOR} = setter inn navn på leverandør; {DATE} = setter inn dato; {INTERVAL} = setter inn antall; {UNITS} = setter inn enhet; {ORDER} = ordredetaljer; {AMOUNT} = utestående beløp  (NB. rabatter vil IKKE bli tatt med); {WEBSITE} = din nettsides adresse; {PAYLINK} = setter inn en betalingslink, hvis det er aktuelt (fornyelser og forfalte fakturaer bare); {PAYLINK_HTTPS} = samme som 'paylink', men bruker https i starten av nettadressen; {INVOICE} = setter inn fakturanr. (bare for forfalte fakturaer).");
define("INV_REMINDER_CLIENT", "Kunde");
define("INV_INSTR_REMINDER_CLIENT", "Kunde som påminnelsen skal sendes til (hvis til 'Administrator' - settes innstillingen ovenfor til 'Nei'). ADVARSEL! Hvis dette er satt til 'Gjelder ikke', vil en påminnelse bli sendt til ALLE kundene som har ett forfall. Hvis dette er en 'brukerdefinert' påminnelse, og 'Administrator' innstillingen er satt til 'Nei', må du velge en kunde her, ellers vil ingen påminnelse blir sendt.");
define("INV_REMINDER_FILTER", "Filter");
define("INV_INSTR_REMINDER_FILTER", "BARE FOR AVANSERTE BRUKERE: Du kan filtrere postene som påminnelsen vil gjelde for ved å legge inn et filter her i form av en SQL 'where' setning. F. eks, å sende påminnelser bare til kunder med bestillinger som har årlige betalings intervaller, Du kan legge inn \" #__inv_orders.payment_frequency = 'EE' \" her. Databasetabeller som filtrering kan utføres på avhenger av typen påminnelse.");

//Default e-mail text
define("INV_REMINDER_PAYMENT_DUE_EMAIL", "Hei {NAME},\n\nDette er en e-post for å meddele at en periodisk betaling for følgende ordre forfaller den {DATE}. Hvis du har angitt en periodisk betaling, vil du automatisk bli belastet med {AMOUNT} (fratrukket eventuelle rabatter om du er kvalifisert til det) på eller rundt forfallsdato.\n\nOrdredetaljer:\n\n{ORDER}\n\nHvis du ikke lenger ønsker å motta disse påminnelsene, må du logge inn på din konto på {WEBSITE}, og endre innstillinger under \"Min konto-> Min profil\".\n\nHilsen,\n{VENDOR}");
define("INV_REMINDER_ORDER_EXPIRY_EMAIL", "Hei {NAME},\n\nDette er en e-post for å meddele at følgende ordre utløper {DATE}. Påse at eventuelle betalingsplaner er annullert.\n\nOrdredetaljer:\n\n{ORDER}\n\nHvis du ikke lenger ønsker å motta disse påminnelsene, må du logge inn på din konto på {WEBSITE}, og endre innstillinger under \"Min konto-> Min profil\".\n\nHilsen,\n{VENDOR}.");
define("INV_REMINDER_RENEWAL_DUE_EMAIL", "Hei {NAME},\n\nDette er en påminnelse om at abonnementet for følgende ordre forfaller på {DATE}. Hvis du ønsker å fornye, kan du bruke følgende link: {PAYLINK}. Eventuell gjenværende tid på det gamle abonnementet vil bli lagt til på det nye slik at du ikke taper ved å fornye tidligere.\n\n{ORDER}\n\nHvis du ikke lenger ønsker å motta disse påminnelsene, må du logge inn på din konto på {WEBSITE}, og endre innstillinger under \"Min konto-> Min profil\".\n\nHilsen,\n{VENDOR}");
define("INV_REMINDER_INVOICE_OVERDUE_EMAIL", "Hei {NAME},\n\nDette er en påminnelse om at fakturanummer {INVOICE} for {AMOUNT} har vært utestående for {INTERVAL} {UNITS}, og er derfor nå forfalt. Vennligst betal denne fakturaen så snart som mulig. Hvis du ønsker å betale elektronisk, kan du bruke følgende link: {PAYLINK}.\n\nHilsen,\n{VENDOR}.");
define("INV_REMINDER_USER_DEFINED_EMAIL", "Ikke glemt: <Skriv inn tekst her!>");
define("INV_REMINDER_PAYMENT_DUE_SUBJECT", "Påminnelse: Betaling forfalt");
define("INV_REMINDER_ORDER_EXPIRY_SUBJECT", "Påminnelse: Ordre utløpt");
define("INV_REMINDER_RENEWAL_DUE_SUBJECT", "Påminnelse: Fornyelse forfalt");
define("INV_REMINDER_INVOICE_OVERDUE_SUBJECT", "Påminnelse: Faktura forfalt");
define("INV_REMINDER_USER_DEFINED_SUBJECT", "Påminnelse");

//Reminder Types
define("INV_REMINDER_PAYMENT_DUE", "Betaling forfalt");
define("INV_REMINDER_ORDER_EXPIRY", "Ordre utløpt");
define("INV_REMINDER_RENEWAL_DUE", "Fornyelse forfalt");
define("INV_REMINDER_INVOICE_OVERDUE", "Faktura forfalt");
define("INV_REMINDER_USER_DEFINED", "Brukerdefinert");

//Units
define("INV_REMINDER_UNIT_DAYS", "Dager");
define("INV_REMINDER_UNIT_WEEKS", "Uker");
define("INV_REMINDER_UNIT_MONTHS", "Måneder");

//CRON script
define("INV_REMINDER", "Påminnelse");
define("INV_REMINDERS_SENT_INTRO", "%s Påminnelser er behandlet av " . INV_BRANDING_NAME . ". Tid: %s.\n\n");
define("INV_REMINDERS_SENT_SUBJECT", INV_BRANDING_NAME . " Planlagt påminnelse");
define("INV_REMINDERS_SENT_FAILURE", "FEIL");
define("INV_REMINDERS_SENT_NO_LICENSE", INV_BRANDING_NAME . " Lisenskode feil eller ikke funnet");
define("INV_REMINDERS_SENT_TO", "sendt til");
define("INV_REMINDERS_SENT_FOR","for kunde");
define("INV_REMINDERS_SENT_MESSAGE", "MELDING:");
define("INV_REMINDER_SENT_ERROR", "ADVARSEL! Det oppstod en feil ved forsøk på å sende denne påminnelsen. Påminnelse ikke sendt.");
define("INV_REMINDER_SENT_ERROR_NO_CLIENT", "ADVARSEL! Det oppstod en feil ved forsøk på å sende denne påminnelsen. Ingen kunde poster ble funnet. Påminnelse ikke sendt.");
define("INV_REMINDER_ORDER_NO", "Ordrenr.");

//Version 1.2.1
//Note to translators: Text for INV_INSTR_REMINDER_EMAIL_TEXT updated to add description of {PAYLINK_HTTPS} (on line 51 of English language file)
?>
