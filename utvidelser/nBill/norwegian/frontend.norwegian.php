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

//Front-End
define("INV_MAIN_MENU", "Hovedside");
define("INV_ABOUT_TAX_EXEMPTION_CODE", "Om ditt firma er lokalisert innen EU, oppgi ditt MVA-nummer.");
define("INV_ORDER_NUMBER", "Ordrenummer");
define("INV_ORDER_DATE", "Dato");
define("INV_PRICE", "Ordredato");
@define("INV_PAY_FREQUENCY", "Periodiske betalinger");
define("INV_VIEW_INVOICES", "Vis fakturaer");
define("INV_VIEW_INVOICES_ALT", "Vis alle fakturaer som har blitt generert for denne ordren");
define("INV_NEW_ORDER_INTRO", "Velg produktet du ønsker å bestille fra listen");
define("INV_PLACE_ORDER", "Klikk her for å legge inn en ordre");
define("INV_CLIENT_NEW_ORDER", "Legg inn ny ordre");
define("INV_ERR_FORM_NOT_DEFINED", "Du kan ikke få tilgang til dette ordreskjemaet. Det kan ha blitt slettet, det kan finnes krav som må være oppfylt før du kan bestille produktet, eller det kan være begrenset til bestemte brukere. Påse at du er logget inn, og forsøk deretter på nytt. Om du mener du burde ha tilgang til dette ordreskjeamet, og problemet vedvarer, vennligst kontakt en administrator.");
define("INV_FIRST_NAME", "Fornavn");
define("INV_LAST_NAME", "Etternavn");
define("INV_CONFIRM_EMAIL_ADDRESS", "Bekreft e-postadresse");
define("INV_ERR_MANDATORY_FIELD", "Du må fylle inn alle påkrevde felter (påkrevde felter er merket med en stjerne *)");
define("INV_EMAILS_DONT_MATCH", "E-postadressene du skrev stemmer ikke! Sjekk og prøv igjen.");
define("INV_EMAIL_NOT_VALID", "E-postadressen du oppgav ser ut til å ikke være gyldig. Prøv igjen.");
@define("INV_USERNAME", "Brukernavn");
define("INV_PASSWORD", "Passord");
define("INV_USERNAME_HELP", "Angi brukernavn og passord som du vil bruker til å logge deg inn på dette nettstedet (slik at du kan få tilgang til dine bestillinger og fakturaer).");
define("INV_DETAILS_SAVED", "Detaljer lagret.");
define("INV_ERR_USER_EXISTS", "Det finnes allerede en bruker med samme brukernavn og/eller e-postadresse. Vennligst velg et unikt brukernavn, eller hvis du allerede er registrert bruker, kan du logge deg på før du legger inn en bestilling.");
define("INV_ERROR_SAVING_ORDER", "Det oppstod et problem under forsøk på å lagre bestilling til databasen. Bestillingen må legges inn manuelt av Administrator");
define("INV_ERR_COULD_NOT_SAVE_PENDING_ORDER", "En feil har oppstått, og din bestilling ble ikke lagret. Vi beklager det inntrufne – vennligst ta kontakt med oss.");
define("INV_ERR_PENDING_ORDER_NOT_FOUND", "Et forsøk ble gjort for å laste en pågående bestilling (ordre id: %s), men bestillingen kan ikke lastes. All behandling av denne bestillingen er avbrutt, det kan være nødvendig at en administrator oppretter brukerkonto, kundekonto,  bestilling og faktura.");
define("INV_ERR_NO_PRODUCTS_ORDERED", "Advarsel - et bestillingsskjema er behandlet, men det ble ikke funnet noen produkter - derfor er det ikke opprette en bestilling.");
define("INV_ERR_NO_INVOICE_GENERATED", "Advarsel  - dette bestillingsskjemaet er merket for å oppretter faktura automatisk, men en fakturakunne ikke lages. En faktura må kanskje opprettes manuelt av en Administrator.");
define("INV_EMAIL_NEW_PENDING_ORDER", "Ny VENTENDE bestilling - %s");
define("INV_EMAIL_PENDING_ORDER_INTRO", "En ny bestilling er plassert på %s, og venter på bekreftet betaling. Når betaling er bekreftet mottatt (eller når en administrator går inn " . INV_BRANDING_NAME . " og aktiverer den ventende bestillingen), blir det laget en ordrebekreftels.");
define("INV_EMAIL_NEW_ORDER", "Ny bestilling - %s");
define("INV_EMAIL_ORDER_INTRO", "Denne e-post er for å bekrefte at følgende bestillinger er laget på %s");
define("INV_DOWNLOAD", "Last ned");
define("INV_ERR_DOWNLOAD_FAILED", "Beklager, filen kunne ikke lastes ned. Dette kan skyldes tidsavbrudd, logg inn og prøv igjen.");
define("INV_ERR_DOWNLOAD_EXPIRED", "Beklager, filen er ikke lengre tilgjengelig for nedlastning. Dette produktet kan kun lastes ned inntil %s dager etter at bestillingen er gjort.");
define("INV_ERR_DOWNLOAD_NOT_FOUND", "Beklager, kunne ikke finne filen, vennligst kontakt oss.");
define("INV_CANCEL_ORDER", "Avbryt bestilling");
define("INV_CANCEL_ORDER_INTRO", "å kansellere denne bestillingen, kan du fortelle oss årsaken til kansellering og bekrefte at du vil angre ved hjelp av skjemaet nedenfor. Hvis du for øyeblikket gjør regelmessig planlagt utbetalinger til oss, vil vi avslutte dine fremtidige utbetalinger dersom det er mulig for oss å gjøre det. Hvis vi ikke har myndighet til å annullere betaling (for eksempel hvis du betaler med auto trekk via din bank), må du selv avslutte denne i din bank.");
define("INV_CONFIRM_CANCELLATION", "Jeg bekrefter at jeg ønsker å avslutte den ovenstående bestillingen.");
define("INV_PLEASE_CONFIRM_CANCELLATION", "Du merket ikke av i boksen for å bekrefte at du vil avbryte. Hvis du vil avbryte denne bestillingen, husk å merke av i boksen før du klikker på knappen 'Avbryt bestilling'.");
define("INV_ORDER_NOT_FOUND", "Den angitte bestillingen ble ikke funnet.");
define("INV_ORDER_CANCELLED_SUCCESS", "Den angitte bestillingen er avbrutt.");
define("INV_EMAIL_ORDER_CANCELLED", "Bestilling avbrutt den %s");
define("INV_EMAIL_ORDER_CANCELLED_INTRO", "Følgende bestilling på %s er avbrutt av kunden. Kontroller at alle planlagte periodiske betalinger for denne bestillingen er kansellert. Ingen ytterligere fakturaer vil bli produsert for denne bestillingen.");
define("INV_CONFIRM_PENDING_DELETE", "Den valgte bestillingen er merket som ventende. Dette betyr at den ikke er behandlet. Hvis du avbryter denne bestillingen, vil den bli slettet. Hvis du er sikker på at du vil slette denne utestående bestillingen, klikker du på knappen 'Avbryt bestilling'. Ellers klikker på linken for å gå tilbake til din bestilling uten å slette noe.");
define("INV_RETURN_TO_ORDERS", "Tilbake til bestillingslisten");
define("INV_INVOICE_STATUS", "Status");
define("INV_INVOICE_PART_PAID", "Delbetalt");
define("INV_INVOICE_UNPAID", "Ubetalt");
define("INV_INVOICE_REFUNDED", "Tilbakebetalt");
define("INV_INVOICE_PART_REFUNDED", "Delvis tilbakebetalt");
define("INV_UPGRADE_MEMBERSHIP", "Oppgrader medlemskap");
define("INV_MY_PROFILE_DESC", "Oppdater dine personlige detaljer");
define("INV_MY_ORDERS_DESC", "En liste over bestillinger du har lagt inn hos oss.");
define("INV_MY_INVOICES_DESC", "En liste over fakturaene.");
define("INV_UPGRADE_MEMBERSHIP_DESC", "Øk nivået på ditt medlemskap for å få tilgang til mer av dette nettstedet funksjoner");
define("INV_EXPIRY_DATE_FE", "Utløpsdato");
define("INV_CONFIRM_PASSWORD", "Bekreft passord");
define("INV_EMAIL_INVOICE_OPTIONS_FE", "E-post innstillinger");
define("INV_NO_EMAIL_FE", "Ikke send mine fakturaer på e-post");
define("INV_EMAIL_INVOICE_FE", "Send mine fakturaer på e-post (html)");
define("INV_EMAIL_NOTIFICATION_FE", "Send meg en melding når jeg har en ny faktura (e-post som ren tekst");
define("INV_EMAIL_CONFIRM", "Bekreft");
define("INV_WARN_ORDER_NOT_PROCESSED", "Advarsel - dette bestillingsskjema er behandlet, men ingenting ble bestilt. Derfor blir det ingen bestillinger synlig i " . INV_BRANDING_NAME . " for denne innsendingen");
define("INV_PAY_INVOICE_TITLE", "Betaling");
define("INV_PAY_INVOICE", "Betal denne faktura");
define("INV_CURRENT_ACCESS_LEVEL", "Ditt nåværende medlemsnivå er '%s'.");
define("INV_PASSWORDS_DONT_MATCH", "Feil passord! Prøv igjen.");
define("INV_CANNOT_PAY_INVOICE_ONLINE", "Beklager, for øyeblikket kan du ikke betale denne fakturaen online."); //This would probably only be used if someone tries to change the invoice id to pay someone else's invoice
define("INV_POST_ERROR", "Beklager, men det oppstod en feil ved innsending av bestillingen. Vennligst kontakt oss for hjelp.");
define("INV_WARN_CLIENT_EMAIL_NOT_SENT", "ADVARSEL! Kunden har IKKE fått en e-post som bekrefter denne bestillingen.");
define("INV_USER_NAME", "Brukernavn:");
define("INV_USER_PASSWORD", "Passord:");
define("INV_LOGIN", "Logg inn");
define("INV_FORM_TIMEOUT", "Beklager, økten din har utløpt. Logg inn på nytt.");
define("INV_NO_FORMS", "Det er ingen bestillingsskjemaer tilgjengelige for deg.");
define("INV_PDF_INVOICE", "Vis PDF faktura");
define("INV_CALENDAR", "Kalender");
define("INV_CLEAR", "Tilbakestill");
define("INV_DATE_NOT_VALID", "Felte `%s` krever en dato verdi. Angi en dato med dette formatet %s.");
define("INV_PENDING_ORDER_PAY_NOW", "Betal nå");
define("INV_PENDING_ORDER_NOT_FOUND", "Beklager, enten ble den ventende bestilling ikke funnet, eller ingen betalingskanal var satt opp på bestillingsskjemaet på tidspunktet bestillingen ble foretatt. Det vil ikke være mulig å betale for bestillingen online.");
define("INV_ALREADY_REGISTERED", "Allerede registrert? Vennligst logg inn.");
define("INV_NOT_YET_REGISTERED", "Ny bruker? Vennligst fyll inn dine opplysninger nedenfor.");
define("INV_COMPANY_NAME", "Firmanavn");
define("INV_ADDRESS_1", "Adresselinje 1");
define("INV_ADDRESS_2", "Adresselinje 2");
define("INV_ADDRESS_3", "Adresselinje 3");
define("INV_TOWN", "Sted");
define("INV_STATE", "Fylke");
define("INV_POSTCODE", "Postnummer");
define("INV_CLIENT_COUNTRY", "Land");
define("INV_TELEPHONE", "Telefon");
define("INV_CONTACT_NAME", "Kontaktperson");
define("INV_CLIENT_ADD_NAME_TO_INVOICE", "Legge til kontaktperson på fakturaer?");
define("INV_WEBSITE", "Nettside");
define("INV_MOBILE", "Mobil");
define("INV_FAX", "Faks");
define("INV_CLIENT_CURRENCY", "Standard valuta");
@define("INV_PENDING", "Venter");
define("INV_FE_PRODUCT", "Produkt");
define("INV_FE_ORDER_STATUS", "Status");
define("INV_FE_NEW_ORDER", "Ny ordre");
define("INV_INVOICE_NUMBER", "Fakturanr.");
define("INV_INVOICE_DATE", "Dato");
define("INV_FIRST_ITEM", "Første punkt på faktura");
define("INV_TOTAL_NET", "Netto totalt");
define("INV_TOTAL_GROSS", "Brutto totalt");
define("INV_INVOICE_PAID", "Betalt");
define("INV_EMAIL_INVOICE_ATTACH_FE", "Send meg fakturaer som et HTML-vedlegg på e-post som ren tekst (anbefales)");
define("INV_FORM_SUMMARY_INTRO", "Gå gjennom følgende informasjon for å sikre at de er korrekt før du sender inn bestillingen din. Hvis du trenger å gå tilbake og endre noe, klikker du på knappen 'Tilbake'.");
define("INV_CHECKED", "Valgte");
define("INV_UNCHECKED", "Ikke valgt");
define("INV_ORDER_SUMMARY_NET_TOTAL", "Netto totalt");
define("INV_ORDER_SUMMARY_TAX_TOTAL", "Avgift");
define("INV_ORDER_SUMMARY_CARRIAGE_TOTAL", "Forsendelse totalt");
define("INV_ORDER_SUMMARY_CARRIAGE_TAX", "Forsendelses avgift");
define("INV_ORDER_SUMMARY_AMOUNT_TO_PAY", "Beløp å betale");
define("INV_CARRIAGE_LIST_FOR", "Forsendelse for %s");
define("INV_CARRIAGE_LIST", "Forsendelse");
define("INV_ERR_SELECT_CARRIAGE", "Vennligst velg en transporttjeneste fra listen");
define("INV_PASSWORD_HELP", "Angi et passord som du må bruke for å logge deg inn på dette nettstedet (slik at du kan få tilgang til dine bestillinger og fakturaer online).");
define("INV_PAYMENT_DETAILS", "Betalingsdetaljer:");
define("INV_EMAIL_ORDER_PRODUCTS", "Produkter bestilt:");
define("INV_EMAIL_TOTAL_ORDER_VALUE", "Totalt bestillingsverdi: %s");
define("INV_JWHOIS_CHECK", "Sjekk tilgjengelighet");
define("INV_JWHOIS_AVAILABLE", "Domenenavn %s er tilgjengelig for øyeblikket.");
define("INV_JWHOIS_UNAVAILABLE", "Domenenavn %s er allerede registrert.");
define("INV_JWHOIS_RETURNED_NOTHING", "Beklager, Vi er ikke i stand til å avgjøre om det valgte domenet er tilgjengelig. Sjekk igjen senerer.");
define("INV_JWHOIS_NOT_FOUND", "Beklager, J!Whois komponenten ble ikke funnet. Vi kan ikke fastslå om det valgte domenet er tilgjengelig.");
define("INV_JWHOIS_TLD_NOT_SUPPORTED", "Beklager, Vi er ikke i stand til å sjekke tilgjengeligheten av domener som slutter med '.%s'.");
define("INV_CLIENT_REMINDER_EMAILS", "Send meg en påminnelse om bestillinger som forfaller, ordrefornyelser, eller forfalte betalinger (anbefales).");
define("INV_NOT_LOGGED_IN", "Du er ikke logget inn.");
define("INV_LOGIN_INTRO", "Tjenesten du har bedt om krever at du må være logget inn. Fyll inn brukernavn og passord nedenfor for å logge inn - du vil da bli omdirigert til den siden du anmodet.");
define("INV_ORDER_RENEW_ORDER_NOT_FOUND", "Beklager, ingen kvalifiserende bestillinger ble funnet - det er ingen ting å fornye. Om du tror dette er feil, vennligst kontakt oss.");
define("INV_ORDER_RENEW_TITLE", "Forny bestillingen");
define("INV_ORDER_RENEW_INTRO", "For å fornye denne bestillingen, sjekke at informasjonen nedenfor er riktige, og klikk på 'Send'.");
define("INV_ORDER_PRODUCT", "Produkt");
define("INV_ORDER_RENEW_WARNING", "Ikke send inn dette skjemaet hvis du allerede har en periodisk betalingsplan satt opp for denne bestillingen.");
define("INV_FILE_TOO_BIG", "Filen du prøvde å laste opp er for stor. Maksimumsstørrelsen er %s KB");
define("INV_FILE_TYPE_NOT_ALLOWED", "Du forsøkte å laste opp en fil av feil type. Kun følgende filtyper er tillatt: %s");
define("INV_FILE_UPLOAD_FAILED", "Beklager, filen du forsøkte å laste opp kunne ikke lagres. Prøv med et annet filnavn.");
define("INV_FE_SECURITY_IMAGE", "Skriv inn bokstavene du ser:");
define("INV_FE_SECURITY_IMAGE_CHANGE", "[Endre bokstavskode]");
define("INV_ERR_SECURITY_IMAGE_WRONG", "Beklager, feil sikkerhetskode. Prøv igjen.");

/* Version 1.1.4 */
define("INV_FORM_NEXT", "Neste >>");
define("INV_FORM_PREV", "<< Tilbake");
define("INV_FORM_SUBMIT", "Lagre");
define("INV_RENEW_SUBMIT", "Lagre");

//Version 1.2.0
/* INV_ORDER_NUMBER on line 26 changed (for plurality) */
define("INV_CANNOT_RENEW_PAY_FREQS_DIFFER", "Beklager, disse bestillingene kan ikke alle fornyes sammen fordi de har ulik betalings plan. Du kan kun fornye flere bestillinger samtidig hvis betalingsfrekvensen er den samme for alle.");
define("INV_CANNOT_RENEW_AUTO_RENEW_DIFFERS", "Beklager, disse bestillingene kan ikke alle fornyes sammen fordi minst en er satt til automatisk fornyelse, og minst en er satt til ikke å automatisk fornyes. Du kan kun fornye flere bestillinger samtidig om de alle er satt til automatisk fornyelse eller alle ikke er satt til automatisk fornyelse.");
define("INV_RENEW", "Forny");
define("INV_DUE", "Forfall");
define("INV_EXPIRED", "Utløpt");
define("INV_SELECT_GATEWAY", "Velg betalingsmåte");
define("INV_INVOICE_PAY_NOW", "Betal faktura(er)");
define("INV_INVOICE_AMOUNT", "Beløp");
define("INV_INVOICE_TOTAL", "Totalt");
if (!defined("_LOST_PASSWORD")) {define("_LOST_PASSWORD", "Glemt passord?");}
define("INV_TRACKING", "Sporing");
define("INV_TRACK_THIS_PARCEL", "Spor denne sendingen");

//Version 1.2.1
define("INV_FILE_UPLOAD_FAILED_REASON", "Beklager, en fil du forsøkte å laste opp kunne ikke lagres. Følgende begrunnelse ble rapportert: ");
define("INV_ERR_UPLOAD_ERR_INI_SIZE", "Filen var større enn filstørrelsesgrensen pålagt av PHP konfigurasjonsfil (php.ini) på denne serveren.");
define("INV_UPLOAD_ERR_FORM_SIZE", "PHP rapporter at filen var større enn filstørrelsesgrensen pålagt av MAX_FILE_SIZE direktivet (Merk: Denne feilen skjer noen ganger selv om filen er mindre enn grensen. Hvis dette skjer, bør MAX_FILE_SIZE direktivet fjernes fra skjemaet).");
define("INV_UPLOAD_ERR_PARTIAL", "Opplastingen ble avbrutt, og bare en del av filen ble mottatt.");
define("INV_UPLOAD_ERR_NO_FILE", "Opplastingen ble avbrutt, og ingen av dataene i filen ble mottatt.");
define("INV_UPLOAD_ERR_NO_TMP_DIR", "PHP kunne ikke finne en midlertidig mappe for å lagre filen.");
define("INV_UPLOAD_ERR_CANT_WRITE", "PHP kunne ikke skrive til den midlertidige mappen for å lagre filen.");
define("INV_INVOICE_ALREADY_PAID", "Faktura %s er allerede betalt. Du kan ikke betale det igjen!");
define("INV_RETURN_TO_MY_INVOICES", " å gå tilbake til %s");
define("INV_CANNOT_RENEW_CANCELLED", "Beklager, du kan ikke fornye en bestilling som er kansellert. Bestill i stedet på nytt.");
define("INV_EMAIL_INVOICE_PDF_FE", "Send meg fakturaen som et PDF-vedlegg med e-postformat som ren tekst");

//Version 1.2.3
define("INV_PENDING_ID", "Ventende ordrenr.");
define("INV_EMAIL_IN_USE", "Denne e-postadressen er allerede registrert. Hvis du har glemt passordet, kan du klikke på lenken for Glemt passord og ett nytt vil bli sendt deg på e-post.");
define("INV_INVALID_USERNAME", "Angi et gyldig brukernavn. Ingen mellomrom, mer enn 2 tegn og inneholder bare tegnene 0-9, a-z eller A-Z");
define("INV_USERNAME_IN_USE", "Dette brukernavnet er allerede registrert. Vennligst velg et annet brukernavn, eller hvis du allerede er registrert, logg inn først. Hvis du har glemt passordet, kan du klikke på lenken for Glemt passord og ett nytt vil bli sendt deg på e-post.");

//Version 1.2.7
define("INV_ORDER_RENEWED_SUCCESS", "Takk, din ordre ble vellykket fornyet."); //Only shown for free product renewals (eg. 100% discount or free non-auto-renewing subscription)
define("INV_CANNOT_RENEW_ADVANCE", "Beklager, du kan ikke fornye mer enn %s ganger på forhånd.");
?>
