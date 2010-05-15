<?php
/**
* Language file for the Reminders feature
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

//Reminders
define("NBILL_REMINDERS_TITLE", "Påminnelser");
define("NBILL_REMINDERS_WARNING", "Denne funksjonen har potensial til å sende e-post til ALLE dine kunder. Vær forsiktig med masseutsendelse!");
define("NBILL_REMINDERS_INTRO", "Dine påminnelser som du vil sende til deg selv eller til dine kunder når utbetalingene forfaller eller ordre skal fornyes, eller er i ferd med å utløpe, eller når fakturaer ikke er betalt. MERK: Disse innstillingene har INGEN effekt med mindre du også har satt opp en planlagt oppgave til å sjekke hva som er forfalt og så sende en e-post. For å gjøre dette vil du vanligvis bruke en CRON-jobb sammen med ett skript, planlagt påminnelse - som er tilgjengelig fra " . NBILL_BRANDING_NAME . " nettside. Vennligst se dokumentasjonen for mer informasjon om hvordan du setter opp en CRON-jobb.");
define("NBILL_REMINDER_NAME", "Påminnelsesnavn");
define("NBILL_EDIT_REMINDER", "Rediger påminnelse");
define("NBILL_REMINDER_TYPE", "Type påminnelse");
define("NBILL_REMINDER_ACTIVE", "Aktiv?");
define("NBILL_REMINDER_ACTIVE_YES", "Aktive");
define("NBILL_REMINDER_ACTIVE_NO", "Inaktiv");
define("NBILL_REMINDER_NAME_REQUIRED", "Skriv inn et navn for å identifisere denne påminnelsen");
define("NBILL_REMINDER_STARTING_FROM", "Fra");
define("NBILL_REMINDER_NUMBER_OF_UNITS", "Antall enheter");
define("NBILL_NEW_REMINDER", "Ny påminnelse");
define("NBILL_REMINDER_DETAILS", "Påminnelsesdetaljer");
define("NBILL_INSTR_REMINDER_NAME", "Skriv inn et navn som gjør det lett å identifisere hva denne påminnelsen gjelder.");
define("NBILL_INSTR_REMINDER_TYPE", "Velg type påminnelse du vil lage.");
define("NBILL_INSTR_REMINDER_ACTIVE", "Hvorvidt det skal sendes e-post for denne påminnelsen?");
define("NBILL_REMINDER_ADMIN", "Administrator?");
define("NBILL_INSTR_REMINDER_ADMIN", "Hvorvidt påminnelsen skal sendes til administrator og ikke til kunden (hvis du ønsker påminnelse sendt til både administrator og kunde, må du sette opp 2 separate påminnelser).");
define("NBILL_INSTR_REMINDER_STARTING_FROM", "Når skal e-post med påminnelser starte? Hvis feltet er tomt vil påminnelse bli sendt uavhengig av dato).");
define("NBILL_REMINDER_NO_OF_UNITS", "Antall enheter");
define("NBILL_INSTR_REMINDER_NO_OF_UNITS", "Angi antall enheter for intervallet mellom hendelsen og påminnelsen (eller i tilfelle av brukerdefinerte påminnelser, intervallet mellom påminnelser). Eks: Intervall på 7 dager. Sett tallet til 7 og enheten til 'Dager'.");
define("NBILL_REMINDER_UNITS", "Enhet");
define("NBILL_INSTR_REMINDER_UNITS", "Velg type enhet for dette intervallet.");
define("NBILL_REMINDER_SEND_AFTER", "Send etter?");
define("NBILL_INSTR_REMINDER_SEND_AFTER", "Hvorvidt det skal det sendes påminnelse etter hendelsen? Vanligvis bare brukt på forfalte fakturaer - dvs. å sende en påminnelse x dager etter forfallsdato på faktura).");
define("NBILL_REMINDER_EMAIL_TEXT", "E-post tekst");
define("NBILL_INSTR_REMINDER_EMAIL_TEXT", "Skriv inn e-postmeldingen du ønsker å sende. Du kan bruke følgende frase: {NAME} = setter inn kundens navn; {VENDOR} = setter inn navn på leverandør; {DATE} = setter inn dato; {INTERVAL} = setter inn antall; {UNITS} = setter inn enhet; {ORDER} = ordredetaljer; {AMOUNT} = utestående beløp  (NB. rabatter vil IKKE bli tatt med); {WEBSITE} = din nettsides adresse; {PAYLINK} = setter inn en lenke til betaling hvis det er aktuelt (fornyelser og forfalte fakturaer bare); {PAYLINK_HTTPS} = samme som 'paylink', men bruker https i starten av nettadressen; {INVOICE} = setter inn fakturanr. (bare for forfalte fakturaer).");
define("NBILL_REMINDER_CLIENT", "Kunde");
define("NBILL_INSTR_REMINDER_CLIENT", "Kunde som påminnelsen skal sendes til (hvis til 'Administrator' - settes innstillingen ovenfor til 'Nei'). ADVARSEL! Hvis dette er satt til 'Gjelder ikke', vil en påminnelse bli sendt til ALLE kundene som har ett forfall. Hvis dette er en 'brukerdefinert' påminnelse, og 'Administrator' innstillingen er satt til 'Nei', må du velge en kunde her, ellers vil ingen påminnelse blir sendt.");
define("NBILL_REMINDER_FILTER", "Filter");
define("NBILL_INSTR_REMINDER_FILTER", "BARE FOR AVANSERTE BRUKERE: Du kan filtrere postene som påminnelsen vil gjelde for ved å legge inn et filter her i form av en SQL-spørring (where-setning). F.eks, å sende påminnelser bare til kunder med bestillinger som har årlige betalings intervaller, Du kan legge inn \" #__nbill_orders.payment_frequency = 'EE' \" her. Databasetabeller som filtrering kan utføres på avhenger av typen påminnelse.");

//Default e-mail text
define("NBILL_REMINDER_PAYMENT_DUE_EMAIL", "Hei {NAME},\n\nDette er en e-post for å meddele at en periodisk betaling for følgende ordre forfaller den {DATE}. Hvis du har angitt en periodisk betaling, vil du automatisk bli belastet med {AMOUNT} (fratrukket eventuelle rabatter om du er kvalifisert til det) på eller rundt forfallsdato.\n\nOrdredetaljer:\n\n{ORDER}\n\nHvis du ikke lenger ønsker å motta disse påminnelsene, må du logge inn på din konto på {WEBSITE}, og endre innstillinger under \"Min konto-> Min profil\".\n\nHilsen,\n{VENDOR}");
define("NBILL_REMINDER_ORDER_EXPIRY_EMAIL", "Hei {NAME},\n\nDette er en e-post for å meddele at følgende ordre utløper {DATE}. Påse at eventuelle betalingsplaner er annullert.\n\nOrdredetaljer:\n\n{ORDER}\n\nHvis du ikke lenger ønsker å motta disse påminnelsene, må du logge inn på din konto på {WEBSITE}, og endre innstillinger under \"Min konto-> Min profil\".\n\nHilsen,\n{VENDOR}.");
define("NBILL_REMINDER_RENEWAL_DUE_EMAIL", "Hei {NAME},\n\nDette er en påminnelse om at abonnementet for følgende ordre forfaller på {DATE}. Hvis du ønsker å fornye, kan du bruke følgende link: {PAYLINK}. Eventuell gjenværende tid på det gamle abonnementet vil bli lagt til på det nye slik at du ikke taper ved å fornye før abonnementet utløper.\n\n{ORDER}\n\nHvis du ikke lenger ønsker å motta disse påminnelsene, må du logge inn på din konto på {WEBSITE}, og endre innstillinger under \"Min konto-> Min profil\".\n\nHilsen,\n{VENDOR}");
define("NBILL_REMINDER_INVOICE_OVERDUE_EMAIL", "Hei {NAME},\n\nDette er en påminnelse om at fakturanummer {INVOICE} for {AMOUNT} har vært utestående i {INTERVAL} {UNITS}, og er derfor nå forfalt. Vennligst betal denne fakturaen så snart som mulig. Hvis du ønsker å betale elektronisk, kan du bruke følgende lenke: {PAYLINK}.\n\nHilsen,\n{VENDOR}.");
define("NBILL_REMINDER_USER_DEFINED_EMAIL", "Ikke glemt: <Skriv inn tekst her!>");
define("NBILL_REMINDER_PAYMENT_DUE_SUBJECT", "Påminnelse: Betaling forfalt");
define("NBILL_REMINDER_ORDER_EXPIRY_SUBJECT", "Påminnelse: Ordre utløpt");
define("NBILL_REMINDER_RENEWAL_DUE_SUBJECT", "Påminnelse: Fornyelse forfalt");
define("NBILL_REMINDER_INVOICE_OVERDUE_SUBJECT", "Påminnelse: Faktura forfalt");
define("NBILL_REMINDER_USER_DEFINED_SUBJECT", "Påminnelse");

//Reminder Types
define("NBILL_REMINDER_PAYMENT_DUE", "Betaling forfalt");
define("NBILL_REMINDER_ORDER_EXPIRY", "Ordre utløpt");
define("NBILL_REMINDER_RENEWAL_DUE", "Fornyelse forfalt");
define("NBILL_REMINDER_INVOICE_OVERDUE", "Faktura forfalt");
define("NBILL_REMINDER_USER_DEFINED", "Brukerdefinert");

//Units
define("NBILL_REMINDER_UNIT_DAYS", "Dager");
define("NBILL_REMINDER_UNIT_WEEKS", "Uker");
define("NBILL_REMINDER_UNIT_MONTHS", "Måneder");

//CRON script
define("NBILL_REMINDER", "Påminnelse");
define("NBILL_REMINDERS_SENT_INTRO", "%s Påminnelser er behandlet av " . NBILL_BRANDING_NAME . ". Tid: %s.\n\n");
define("NBILL_REMINDERS_SENT_SUBJECT", NBILL_BRANDING_NAME . " Planlagt påminnelse");
define("NBILL_REMINDERS_SENT_FAILURE", "FEIL");
define("NBILL_REMINDERS_SENT_NO_LICENSE", NBILL_BRANDING_NAME . " Lisenskoden er feil eller ble ikke funnet");
define("NBILL_REMINDERS_SENT_TO", "sendt til");
define("NBILL_REMINDERS_SENT_FOR","for kunde");
define("NBILL_REMINDERS_SENT_MESSAGE", "MELDING:");
define("NBILL_REMINDER_SENT_ERROR", "ADVARSEL! Det oppstod en feil ved forsøk på å sende denne påminnelsen. Påminnelse er ikke sendt.");
define("NBILL_REMINDER_SENT_ERROR_NO_CLIENT", "ADVARSEL! Det oppstod en feil ved forsøk på å sende denne påminnelsen. Ingen kunder ble funnet. Påminnelse er ikke sendt.");
define("NBILL_REMINDER_ORDER_NO", "Ordrenr.");

//Version 1.2.1
//Note to translators: Text for NBILL_INSTR_REMINDER_EMAIL_TEXT updated to add description of {PAYLINK_HTTPS} (on line 51 of English language file)