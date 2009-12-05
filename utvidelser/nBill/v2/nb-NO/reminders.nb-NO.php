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
define("NBILL_REMINDERS_TITLE", "P�minnelser");
define("NBILL_REMINDERS_WARNING", "Denne funksjonen har potensial til � sende e-post til ALLE dine kunder. V�r forsiktig med masseutsendelse!");
define("NBILL_REMINDERS_INTRO", "Dine p�minnelser som du vil sende til deg selv eller til dine kunder n�r utbetalingene forfaller eller ordre skal fornyes, eller er i ferd med � utl�pe, eller n�r fakturaer ikke er betalt. MERK: Disse innstillingene har INGEN effekt med mindre du ogs� har satt opp en planlagt oppgave til � sjekke hva som er forfalt og s� sende en e-post. For � gj�re dette vil du vanligvis bruke en CRON-jobb sammen med ett skript, planlagt p�minnelse - som er tilgjengelig fra " . NBILL_BRANDING_NAME . " nettside. Vennligst se dokumentasjonen for mer informasjon om hvordan du setter opp en CRON-jobb.");
define("NBILL_REMINDER_NAME", "P�minnelsesnavn");
define("NBILL_EDIT_REMINDER", "Rediger p�minnelse");
define("NBILL_REMINDER_TYPE", "Type p�minnelse");
define("NBILL_REMINDER_ACTIVE", "Aktiv?");
define("NBILL_REMINDER_ACTIVE_YES", "Aktive");
define("NBILL_REMINDER_ACTIVE_NO", "Inaktiv");
define("NBILL_REMINDER_NAME_REQUIRED", "Skriv inn et navn for � identifisere denne p�minnelsen");
define("NBILL_REMINDER_STARTING_FROM", "Fra");
define("NBILL_REMINDER_NUMBER_OF_UNITS", "Antall enheter");
define("NBILL_NEW_REMINDER", "Ny p�minnelse");
define("NBILL_REMINDER_DETAILS", "P�minnelsesdetaljer");
define("NBILL_INSTR_REMINDER_NAME", "Skriv inn et navn som gj�r det lett � identifisere hva denne p�minnelsen gjelder.");
define("NBILL_INSTR_REMINDER_TYPE", "Velg type p�minnelse du vil lage.");
define("NBILL_INSTR_REMINDER_ACTIVE", "Skal sendes e-post for denne p�minnelsen?");
define("NBILL_REMINDER_ADMIN", "Administrator?");
define("NBILL_INSTR_REMINDER_ADMIN", "Hvorvidt p�minnelsen skal sendes til administrator og ikke til kunden (hvis du �nsker p�minnelse sendt til b�de administrator og kunde, m� du sette opp 2 separate p�minnelser).");
define("NBILL_INSTR_REMINDER_STARTING_FROM", "N�r skal e-post med p�minnelser starte? Hvis feltet er tomt vil p�minnelse bli sendt uavhengig av dato).");
define("NBILL_REMINDER_NO_OF_UNITS", "Antall enheter");
define("NBILL_INSTR_REMINDER_NO_OF_UNITS", "Angi antall enheter for intervallet mellom hendelsen og p�minnelsen (eller i tilfelle av brukerdefinerte p�minnelser, intervallet mellom p�minnelser). Eks: Intervall p� 7 dager. Sett tallet til 7 og enheten til 'Dager'.");
define("NBILL_REMINDER_UNITS", "Enhet");
define("NBILL_INSTR_REMINDER_UNITS", "Velg type enhet for dette intervallet.");
define("NBILL_REMINDER_SEND_AFTER", "Send etter?");
define("NBILL_INSTR_REMINDER_SEND_AFTER", "Skal det sendes p�minnelse etter hendelsen? Vanligvis bare brukt p� forfalte fakturaer - dvs. � sende en p�minnelse x dager etter forfallsdato p� faktura).");
define("NBILL_REMINDER_EMAIL_TEXT", "E-post tekst");
define("NBILL_INSTR_REMINDER_EMAIL_TEXT", "Skriv inn e-postmeldingen du �nsker � sende. Du kan bruke f�lgende frase: {NAME} = setter inn kundens navn; {VENDOR} = setter inn navn p� leverand�r; {DATE} = setter inn dato; {INTERVAL} = setter inn antall; {UNITS} = setter inn enhet; {ORDER} = ordredetaljer; {AMOUNT} = utest�ende bel�p  (NB. rabatter vil IKKE bli tatt med); {WEBSITE} = din nettsides adresse; {PAYLINK} = setter inn en lenke til betaling hvis det er aktuelt (fornyelser og forfalte fakturaer bare); {PAYLINK_HTTPS} = samme som 'paylink', men bruker https i starten av nettadressen; {INVOICE} = setter inn fakturanr. (bare for forfalte fakturaer).");
define("NBILL_REMINDER_CLIENT", "Kunde");
define("NBILL_INSTR_REMINDER_CLIENT", "Kunde som p�minnelsen skal sendes til (hvis til 'Administrator' - settes innstillingen ovenfor til 'Nei'). ADVARSEL! Hvis dette er satt til 'Gjelder ikke', vil en p�minnelse bli sendt til ALLE kundene som har ett forfall. Hvis dette er en 'brukerdefinert' p�minnelse, og 'Administrator' innstillingen er satt til 'Nei', m� du velge en kunde her, ellers vil ingen p�minnelse blir sendt.");
define("NBILL_REMINDER_FILTER", "Filter");
define("NBILL_INSTR_REMINDER_FILTER", "BARE FOR AVANSERTE BRUKERE: Du kan filtrere postene som p�minnelsen vil gjelde for ved � legge inn et filter her i form av en SQL-sp�rring (where-setning). F.eks, � sende p�minnelser bare til kunder med bestillinger som har �rlige betalings intervaller, Du kan legge inn \" #__inv_orders.payment_frequency = 'EE' \" her. Databasetabeller som filtrering kan utf�res p� avhenger av typen p�minnelse.");

//Default e-mail text
define("NBILL_REMINDER_PAYMENT_DUE_EMAIL", "Hei {NAME},\n\nDette er en e-post for � meddele at en periodisk betaling for f�lgende ordre forfaller den {DATE}. Hvis du har angitt en periodisk betaling, vil du automatisk bli belastet med {AMOUNT} (fratrukket eventuelle rabatter om du er kvalifisert til det) p� eller rundt forfallsdato.\n\nOrdredetaljer:\n\n{ORDER}\n\nHvis du ikke lenger �nsker � motta disse p�minnelsene, m� du logge inn p� din konto p� {WEBSITE}, og endre innstillinger under \"Min konto-> Min profil\".\n\nHilsen,\n{VENDOR}");
define("NBILL_REMINDER_ORDER_EXPIRY_EMAIL", "Hei {NAME},\n\nDette er en e-post for � meddele at f�lgende ordre utl�per {DATE}. P�se at eventuelle betalingsplaner er annullert.\n\nOrdredetaljer:\n\n{ORDER}\n\nHvis du ikke lenger �nsker � motta disse p�minnelsene, m� du logge inn p� din konto p� {WEBSITE}, og endre innstillinger under \"Min konto-> Min profil\".\n\nHilsen,\n{VENDOR}.");
define("NBILL_REMINDER_RENEWAL_DUE_EMAIL", "Hei {NAME},\n\nDette er en p�minnelse om at abonnementet for f�lgende ordre forfaller p� {DATE}. Hvis du �nsker � fornye, kan du bruke f�lgende link: {PAYLINK}. Eventuell gjenv�rende tid p� det gamle abonnementet vil bli lagt til p� det nye slik at du ikke taper ved � fornye f�r abonnementet utl�per.\n\n{ORDER}\n\nHvis du ikke lenger �nsker � motta disse p�minnelsene, m� du logge inn p� din konto p� {WEBSITE}, og endre innstillinger under \"Min konto-> Min profil\".\n\nHilsen,\n{VENDOR}");
define("NBILL_REMINDER_INVOICE_OVERDUE_EMAIL", "Hei {NAME},\n\nDette er en p�minnelse om at fakturanummer {INVOICE} for {AMOUNT} har v�rt utest�ende i {INTERVAL} {UNITS}, og er derfor n� forfalt. Vennligst betal denne fakturaen s� snart som mulig. Hvis du �nsker � betale elektronisk, kan du bruke f�lgende lenke: {PAYLINK}.\n\nHilsen,\n{VENDOR}.");
define("NBILL_REMINDER_USER_DEFINED_EMAIL", "Ikke glemt: <Skriv inn tekst her!>");
define("NBILL_REMINDER_PAYMENT_DUE_SUBJECT", "P�minnelse: Betaling forfalt");
define("NBILL_REMINDER_ORDER_EXPIRY_SUBJECT", "P�minnelse: Ordre utl�pt");
define("NBILL_REMINDER_RENEWAL_DUE_SUBJECT", "P�minnelse: Fornyelse forfalt");
define("NBILL_REMINDER_INVOICE_OVERDUE_SUBJECT", "P�minnelse: Faktura forfalt");
define("NBILL_REMINDER_USER_DEFINED_SUBJECT", "P�minnelse");

//Reminder Types
define("NBILL_REMINDER_PAYMENT_DUE", "Betaling forfalt");
define("NBILL_REMINDER_ORDER_EXPIRY", "Ordre utl�pt");
define("NBILL_REMINDER_RENEWAL_DUE", "Fornyelse forfalt");
define("NBILL_REMINDER_INVOICE_OVERDUE", "Faktura forfalt");
define("NBILL_REMINDER_USER_DEFINED", "Brukerdefinert");

//Units
define("NBILL_REMINDER_UNIT_DAYS", "Dager");
define("NBILL_REMINDER_UNIT_WEEKS", "Uker");
define("NBILL_REMINDER_UNIT_MONTHS", "M�neder");

//CRON script
define("NBILL_REMINDER", "P�minnelse");
define("NBILL_REMINDERS_SENT_INTRO", "%s P�minnelser er behandlet av " . NBILL_BRANDING_NAME . ". Tid: %s.\n\n");
define("NBILL_REMINDERS_SENT_SUBJECT", NBILL_BRANDING_NAME . " Planlagt p�minnelse");
define("NBILL_REMINDERS_SENT_FAILURE", "FEIL");
define("NBILL_REMINDERS_SENT_NO_LICENSE", NBILL_BRANDING_NAME . " Lisenskoden er feil eller ble ikke funnet");
define("NBILL_REMINDERS_SENT_TO", "sendt til");
define("NBILL_REMINDERS_SENT_FOR","for kunde");
define("NBILL_REMINDERS_SENT_MESSAGE", "MELDING:");
define("NBILL_REMINDER_SENT_ERROR", "ADVARSEL! Det oppstod en feil ved fors�k p� � sende denne p�minnelsen. P�minnelse er ikke sendt.");
define("NBILL_REMINDER_SENT_ERROR_NO_CLIENT", "ADVARSEL! Det oppstod en feil ved fors�k p� � sende denne p�minnelsen. Ingen kunde poster ble funnet. P�minnelse er ikke sendt.");
define("NBILL_REMINDER_ORDER_NO", "Ordrenr.");

//Version 1.2.1
//Note to translators: Text for NBILL_INSTR_REMINDER_EMAIL_TEXT updated to add description of {PAYLINK_HTTPS} (on line 51 of English language file)
?>
