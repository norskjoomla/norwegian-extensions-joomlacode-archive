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
define("NBILL_MAIN_MENU", "Hovedside");
define("NBILL_ABOUT_TAX_EXEMPTION_CODE", "Om ditt firma er lokalisert innen EU, oppgi ditt MVA-nummer.");
define("NBILL_ORDER_NUMBER", "Ordrenummer");
define("NBILL_ORDER_DATE", "Dato");
define("NBILL_PRICE", "Ordredato");
@define("NBILL_PAY_FREQUENCY", "Periodiske betalinger");
define("NBILL_VIEW_INVOICES", "Vis fakturaer");
define("NBILL_VIEW_INVOICES_ALT", "Vis alle fakturaer som har blitt generert for denne ordren");
define("NBILL_NEW_ORDER_INTRO", "Velg produktet du �nsker � bestille fra listen");
define("NBILL_PLACE_ORDER", "Klikk her for � legge inn en ordre");
define("NBILL_CLIENT_NEW_ORDER", "Legg inn ny ordre");
define("NBILL_ERR_FORM_NOT_DEFINED", "Du kan ikke f� tilgang til dette ordreskjemaet. Det kan ha blitt slettet, det kan finnes krav som m� v�re oppfylt f�r du kan bestille produktet, eller det kan v�re begrenset til bestemte brukere. P�se at du er logget inn, og fors�k deretter p� nytt. Om du mener du burde ha tilgang til dette ordreskjeamet, og problemet vedvarer, vennligst kontakt en administrator.");
define("NBILL_FIRST_NAME", "Fornavn");
define("NBILL_LAST_NAME", "Etternavn");
define("NBILL_CONFIRM_EMAIL_ADDRESS", "Bekreft e-postadresse");
define("NBILL_ERR_MANDATORY_FIELD", "Du m� fylle inn alle p�krevde felter (p�krevde felter er merket med en stjerne *)");
define("NBILL_EMAILS_DONT_MATCH", "E-postadressene du skrev stemmer ikke! Sjekk og pr�v igjen.");
define("NBILL_EMAIL_NOT_VALID", "E-postadressen du oppga, ser ut til � ikke v�re gyldig. Pr�v igjen.");
@define("NBILL_USERNAME", "Brukernavn");
define("NBILL_PASSWORD", "Passord");
define("NBILL_USERNAME_HELP", "Angi brukernavn og passord som du vil bruke til � logge deg inn p� dette nettstedet (slik at du kan f� tilgang til dine bestillinger og fakturaer).");
define("NBILL_DETAILS_SAVED", "Detaljer lagret.");
define("NBILL_ERR_USER_EXISTS", "Det finnes allerede en bruker med samme brukernavn og/eller e-postadresse. Vennligst velg et unikt brukernavn. Hvis du allerede er registrert bruker, kan du logge deg p� f�r du legger inn en bestilling.");
define("NBILL_ERROR_SAVING_ORDER", "Det oppstod et problem under fors�k p� � lagre bestilling til databasen. Bestillingen m� legges inn manuelt av administrator");
define("NBILL_ERR_COULD_NOT_SAVE_PENDING_ORDER", "En feil har oppst�tt, og din bestilling ble ikke lagret. Vi beklager det inntrufne � vennligst ta kontakt med oss.");
define("NBILL_ERR_PENDING_ORDER_NOT_FOUND", "Det ble gjort et fors�k p� � laste en p�g�ende bestilling (ordre id: %s), men bestillingen kan ikke lastes. All behandling av denne bestillingen er avbrutt. Det kan v�re n�dvendig at en administrator oppretter brukerkonto, kundekonto,  bestilling og faktura.");
define("NBILL_ERR_NO_PRODUCTS_ORDERED", "Advarsel - et bestillingsskjema er behandlet, men det ble ikke funnet noen produkter - derfor er det ikke opprettet en bestilling.");
define("NBILL_ERR_NO_INVOICE_GENERATED", "Advarsel  - dette bestillingsskjemaet er merket for automatisk opprettelse av faktura, men en faktura kunne ikke lages. Faktura m� kanskje opprettes manuelt av en administrator.");
define("NBILL_EMAIL_NEW_PENDING_ORDER", "Ny VENTENDE bestilling - %s");
define("NBILL_EMAIL_PENDING_ORDER_INTRO", "En ny bestilling er plassert p� %s, og venter p� bekreftet betaling. N�r betaling er bekreftet mottatt (eller n�r en administrator g�r inn " . NBILL_BRANDING_NAME . " og aktiverer den ventende bestillingen), blir det laget en ordrebekreftelse.");
define("NBILL_EMAIL_NEW_ORDER", "Ny bestilling - %s");
define("NBILL_EMAIL_ORDER_INTRO", "Denne e-posten er for � bekrefte at f�lgende bestillinger er laget p� %s");
define("NBILL_DOWNLOAD", "Last ned");
define("NBILL_ERR_DOWNLOAD_FAILED", "Beklager, filen kunne ikke lastes ned. Dette kan skyldes tidsavbrudd. Logg inn, og pr�v igjen.");
define("NBILL_ERR_DOWNLOAD_EXPIRED", "Beklager, filen er ikke lenger tilgjengelig for nedlastning. Dette produktet kan kun lastes ned inntil %s dager etter at bestillingen er gjort.");
define("NBILL_ERR_DOWNLOAD_NOT_FOUND", "Beklager, kunne ikke finne filen. Vennligst kontakt oss.");
define("NBILL_CANCEL_ORDER", "Avbryt bestilling");
define("NBILL_CANCEL_ORDER_INTRO", "I forbindelse med kansellering av denne bestillingen, kan du fortelle oss �rsaken til kansellering og bekrefte at du vil angre ved hjelp av skjemaet nedenfor. Hvis du for tiden gj�r regelmessige planlagt utbetalinger til oss, vil vi avslutte dine fremtidige utbetalinger dersom det er mulig for oss � gj�re det. Hvis vi ikke har myndighet til � annullere betaling (for eksempel hvis du betaler med autotrekk via din bank), m� du selv avslutte dette i din bank.");
define("NBILL_CONFIRM_CANCELLATION", "Jeg bekrefter at jeg �nsker � avslutte bestillingen over.");
define("NBILL_PLEASE_CONFIRM_CANCELLATION", "Du merket ikke av i boksen for � bekrefte at du vil avbryte. Hvis du vil avbryte denne bestillingen, husk � merke av i boksen f�r du klikker p� knappen 'Avbryt bestilling'.");
define("NBILL_ORDER_NOT_FOUND", "Den angitte bestillingen ble ikke funnet.");
define("NBILL_ORDER_CANCELLED_SUCCESS", "Den angitte bestillingen er avbrutt.");
define("NBILL_EMAIL_ORDER_CANCELLED", "Bestilling avbrutt den %s");
define("NBILL_EMAIL_ORDER_CANCELLED_INTRO", "F�lgende bestilling p� %s er avbrutt av kunden. Kontroll�r at alle planlagte periodiske betalinger for denne bestillingen er kansellert. Ingen ytterligere fakturaer vil bli opprettet for denne bestillingen.");
define("NBILL_CONFIRM_PENDING_DELETE", "Den valgte bestillingen er merket som ventende. Dette betyr at den ikke er behandlet. Hvis du avbryter denne bestillingen, vil den bli slettet. Hvis du er sikker p� at du vil slette denne ventende bestillingen, klikker du p� knappen 'Avbryt bestilling'. Ellers klikker p� linken for � g� tilbake til din bestilling uten � slette noe.");
define("NBILL_RETURN_TO_ORDERS", "Tilbake til bestillingslisten");
define("NBILL_INVOICE_STATUS", "Status");
define("NBILL_INVOICE_PART_PAID", "Delbetalt");
define("NBILL_INVOICE_UNPAID", "Ubetalt");
define("NBILL_INVOICE_REFUNDED", "Tilbakebetalt");
define("NBILL_INVOICE_PART_REFUNDED", "Delvis tilbakebetalt");
define("NBILL_UPGRADE_MEMBERSHIP", "Oppgrad�r medlemskap");
define("NBILL_MY_PROFILE_DESC", "Oppdat�r dine personlige detaljer");
define("NBILL_MY_ORDERS_DESC", "En liste over bestillinger du har lagt inn hos oss.");
define("NBILL_MY_INVOICES_DESC", "En liste over fakturaene.");
define("NBILL_UPGRADE_MEMBERSHIP_DESC", "Oppgrad�r ditt medlemskap for � f� tilgang til flere av dette nettstedet funksjoner");
define("NBILL_EXPIRY_DATE_FE", "Utl�psdato");
define("NBILL_CONFIRM_PASSWORD", "Bekreft passord");
define("NBILL_EMAIL_INVOICE_OPTIONS_FE", "E-post-innstillinger");
define("NBILL_NO_EMAIL_FE", "Ikke send mine fakturaer p� e-post");
define("NBILL_EMAIL_INVOICE_FE", "Send mine fakturaer p� e-post (html)");
define("NBILL_EMAIL_NOTIFICATION_FE", "Send meg en melding n�r jeg har en ny faktura (e-post som ren tekst");
define("NBILL_EMAIL_CONFIRM", "Bekreft");
define("NBILL_WARN_ORDER_NOT_PROCESSED", "Advarsel - dette bestillingsskjema er behandlet, men ingenting ble bestilt. Derfor blir det ingen synlig ordreoppf�ring i " . NBILL_BRANDING_NAME . " for denne innsendingen");
define("NBILL_PAY_INVOICE_TITLE", "Betaling");
define("NBILL_PAY_INVOICE", "Betal denne fakturaen");
define("NBILL_CURRENT_ACCESS_LEVEL", "Ditt n�v�rende medlemsniv� er '%s'.");
define("NBILL_PASSWORDS_DONT_MATCH", "Feil passord! Pr�v igjen.");
define("NBILL_CANNOT_PAY_INVOICE_ONLINE", "Beklager, for �yeblikket kan du ikke betale denne fakturaen online."); //This would probably only be used if someone tries to change the invoice id to pay someone else's invoice
define("NBILL_POST_ERROR", "Beklager, men det oppstod en feil ved innsending av bestillingen. Vennligst kontakt oss for hjelp.");
define("NBILL_WARN_CLIENT_EMAIL_NOT_SENT", "ADVARSEL! Kunden har IKKE f�tt en e-post som bekrefter denne bestillingen.");
define("NBILL_USER_NAME", "Brukernavn:");
define("NBILL_USER_PASSWORD", "Passord:");
define("NBILL_LOGIN", "Logg inn");
define("NBILL_FORM_TIMEOUT", "Beklager, �kten din har utl�pt. Logg inn p� nytt.");
define("NBILL_NO_FORMS", "Det er ingen bestillingsskjemaer tilgjengelig for deg.");
define("NBILL_PDF_INVOICE", "Vis PDF-faktura");
define("NBILL_CALENDAR", "Kalender");
define("NBILL_CLEAR", "Tilbakestill");
define("NBILL_DATE_NOT_VALID", "Feltet `%s` krever at dato er utfylt. Angi en dato med formatet %s.");
define("NBILL_PENDING_ORDER_PAY_NOW", "Betal n�");
define("NBILL_PENDING_ORDER_NOT_FOUND", "Beklager, enten ble den ventende bestilling ikke funnet, eller ingen betalingskanal var satt opp p� bestillingsskjemaet p� tidspunktet bestillingen ble foretatt. Det vil ikke v�re mulig � betale for bestillingen online.");
define("NBILL_ALREADY_REGISTERED", "Allerede registrert? Vennligst logg inn.");
define("NBILL_NOT_YET_REGISTERED", "Ny bruker? Vennligst fyll inn dine opplysninger nedenfor.");
define("NBILL_COMPANY_NAME", "Firmanavn");
define("NBILL_ADDRESS_1", "Adresselinje 1");
define("NBILL_ADDRESS_2", "Adresselinje 2");
define("NBILL_ADDRESS_3", "Adresselinje 3");
define("NBILL_TOWN", "Sted");
define("NBILL_STATE", "Fylke");
define("NBILL_POSTCODE", "Postnummer");
define("NBILL_CLIENT_COUNTRY", "Land");
define("NBILL_TELEPHONE", "Telefon");
define("NBILL_CONTACT_NAME", "Kontaktperson");
define("NBILL_CLIENT_ADD_NAME_TO_INVOICE", "Legge til kontaktperson p� fakturaer?");
define("NBILL_WEBSITE", "Nettside");
define("NBILL_MOBILE", "Mobil");
define("NBILL_FAX", "Faks");
define("NBILL_CLIENT_CURRENCY", "Standard valuta");
@define("NBILL_PENDING", "Venter");
define("NBILL_FE_PRODUCT", "Produkt");
define("NBILL_FE_ORDER_STATUS", "Status");
define("NBILL_FE_NEW_ORDER", "Ny ordre");
define("NBILL_INVOICE_NUMBER", "Fakturanr.");
define("NBILL_INVOICE_DATE", "Dato");
define("NBILL_FIRST_ITEM", "F�rste punkt p� faktura");
define("NBILL_TOTAL_NET", "Netto totalt");
define("NBILL_TOTAL_GROSS", "Brutto totalt");
define("NBILL_INVOICE_PAID", "Betalt");
define("NBILL_EMAIL_INVOICE_ATTACH_FE", "Send meg fakturaer som et HTML-vedlegg i e-post med ren tekst (anbefales)");
define("NBILL_FORM_SUMMARY_INTRO", "Vennligst kontroll�r informasjonen nedenfor for � sikre at alt stemmer.<br />Trykk p� 'Tilbake' hvis det er behov for � endre noe. Hvis alt er riktig, trykker du p� 'Lagre/Fortsett'.");
define("NBILL_CHECKED", "Valgte");
define("NBILL_UNCHECKED", "Ikke valgt");
define("NBILL_ORDER_SUMMARY_NET_TOTAL", "Netto totalt");
define("NBILL_ORDER_SUMMARY_TAX_TOTAL", "Avgift");
define("NBILL_ORDER_SUMMARY_CARRIAGE_TOTAL", "Forsendelse totalt");
define("NBILL_ORDER_SUMMARY_CARRIAGE_TAX", "Forsendelsesavgift");
define("NBILL_ORDER_SUMMARY_AMOUNT_TO_PAY", "Bel�p � betale");
define("NBILL_CARRIAGE_LIST_FOR", "Forsendelse for %s");
define("NBILL_CARRIAGE_LIST", "Forsendelse");
define("NBILL_ERR_SELECT_CARRIAGE", "Vennligst velg en transporttjeneste fra listen");
define("NBILL_PASSWORD_HELP", "Angi et passord som du m� bruke for � logge deg inn p� dette nettstedet (slik at du kan f� tilgang til dine bestillinger og fakturaer online).");
define("NBILL_PAYMENT_DETAILS", "Betalingsdetaljer:");
define("NBILL_EMAIL_ORDER_PRODUCTS", "Produkter bestilt:");
define("NBILL_EMAIL_TOTAL_ORDER_VALUE", "Total bestillingsverdi: %s");
define("NBILL_JWHOIS_CHECK", "Sjekk tilgjengelighet");
define("NBILL_JWHOIS_AVAILABLE", "Domenenavn %s er tilgjengelig for �yeblikket.");
define("NBILL_JWHOIS_UNAVAILABLE", "Domenenavn %s er allerede registrert.");
define("NBILL_JWHOIS_RETURNED_NOTHING", "Beklager, vi er ikke i stand til � avgj�re om det valgte domenet er tilgjengelig. Sjekk igjen senere.");
define("NBILL_JWHOIS_NOT_FOUND", "Beklager, J!Whois komponenten ble ikke funnet. Vi kan ikke fastsl� om det valgte domenet er tilgjengelig.");
define("NBILL_JWHOIS_TLD_NOT_SUPPORTED", "Beklager, vi er ikke i stand til � sjekke tilgjengeligheten av domener som slutter med '.%s'.");
define("NBILL_CLIENT_REMINDER_EMAILS", "Send meg en p�minnelse om bestillinger som forfaller, ordrefornyelser, eller forfalte betalinger (anbefales).");
define("NBILL_NOT_LOGGED_IN", "Du er ikke logget inn.");
define("NBILL_LOGIN_INTRO", "Tjenesten du har bedt om, krever at du m� v�re logget inn. Fyll inn brukernavn og passord nedenfor for � logge inn - du vil da bli omdirigert til den siden du anmodet.");
define("NBILL_ORDER_RENEW_ORDER_NOT_FOUND", "Beklager, ingen kvalifiserende bestillinger ble funnet - det er ingenting � fornye. Om du mener dette er feil, vennligst kontakt oss.");
define("NBILL_ORDER_RENEW_TITLE", "Forny bestillingen");
define("NBILL_ORDER_RENEW_INTRO", "For � fornye denne bestillingen, sjekk at informasjonen nedenfor er riktig, og klikk p� 'Send'.");
define("NBILL_ORDER_PRODUCT", "Produkt");
define("NBILL_ORDER_RENEW_WARNING", "Ikke send inn dette skjemaet hvis du allerede har en periodisk betalingsplan satt opp for denne bestillingen.");
define("NBILL_FILE_TOO_BIG", "Filen du pr�vde � laste opp er for stor. Maksimumsst�rrelsen er %s KB");
define("NBILL_FILE_TYPE_NOT_ALLOWED", "Du fors�kte � laste opp en fil av feil type. Kun f�lgende filtyper er tillatt: %s");
define("NBILL_FILE_UPLOAD_FAILED", "Beklager, filen du fors�kte � laste opp kunne ikke lagres. Pr�v med et annet filnavn.");
define("NBILL_FE_SECURITY_IMAGE", "Skriv inn bokstavene du ser:");
define("NBILL_FE_SECURITY_IMAGE_CHANGE", "[Endre bokstavskode]");
define("NBILL_ERR_SECURITY_IMAGE_WRONG", "Beklager, feil sikkerhetskode. Pr�v igjen.");

/* Version 1.1.4 */
define("NBILL_FORM_NEXT", "Neste >>");
define("NBILL_FORM_PREV", "<< Tilbake");
define("NBILL_FORM_SUBMIT", "Lagre/Fortsett");
define("NBILL_RENEW_SUBMIT", "Lagre/Fortsett");

//Version 1.2.0
/* NBILL_ORDER_NUMBER on line 26 changed (for plurality) */
define("NBILL_CANNOT_RENEW_PAY_FREQS_DIFFER", "Beklager, disse bestillingene kan ikke fornyes samtidig fordi de har ulik betalingsplan. Du kan kun fornye flere bestillinger samtidig hvis betalingsfrekvensen er den samme for alle.");
define("NBILL_CANNOT_RENEW_AUTO_RENEW_DIFFERS", "Beklager, disse bestillingene kan ikke alle fornyes samtidig fordi minst en er satt til automatisk fornyelse, og minst en er satt til ikke � automatisk fornyes. Du kan kun fornye flere bestillinger samtidig om de alle er satt til automatisk fornyelse eller alle ikke er satt til automatisk fornyelse.");
define("NBILL_RENEW", "Forny");
define("NBILL_DUE", "Forfall");
define("NBILL_EXPIRED", "Utl�pt");
define("NBILL_SELECT_GATEWAY", "Velg betalingsm�te");
define("NBILL_INVOICE_PAY_NOW", "Betal faktura(er)");
define("NBILL_INVOICE_AMOUNT", "Bel�p");
define("NBILL_INVOICE_TOTAL", "Totalt");
if (!defined("_LOST_PASSWORD")) {define("_LOST_PASSWORD", "Glemt passord?");}
define("NBILL_TRACKING", "Sporing");
define("NBILL_TRACK_THIS_PARCEL", "Spor denne sendingen");

//Version 1.2.1
define("NBILL_FILE_UPLOAD_FAILED_REASON", "Beklager, en fil du fors�kte � laste opp, kunne ikke lagres. F�lgende begrunnelse ble rapportert: ");
define("NBILL_ERR_UPLOAD_ERR_INI_SIZE", "Filen var st�rre enn filst�rrelsesgrensen p�lagt av PHP konfigurasjonsfil (php.ini) p� denne serveren.");
define("NBILL_UPLOAD_ERR_FORM_SIZE", "PHP rapporter at filen var st�rre enn filst�rrelsesgrensen p�lagt av MAX_FILE_SIZE-direktivet (Merk: Denne feilen skjer noen ganger selv om filen er mindre enn grensen. Hvis dette skjer, b�r MAX_FILE_SIZE-direktivet fjernes fra skjemaet).");
define("NBILL_UPLOAD_ERR_PARTIAL", "Opplastingen ble avbrutt, og bare en del av filen ble mottatt.");
define("NBILL_UPLOAD_ERR_NO_FILE", "Opplastingen ble avbrutt, og ingen av dataene i filen ble mottatt.");
define("NBILL_UPLOAD_ERR_NO_TMP_DIR", "PHP kunne ikke finne en midlertidig mappe til � lagre filen i.");
define("NBILL_UPLOAD_ERR_CANT_WRITE", "PHP kunne ikke skrive til den midlertidige mappen for � lagre filen.");
define("NBILL_INVOICE_ALREADY_PAID", "Faktura %s er allerede betalt. Du kan ikke betale den igjen!");
define("NBILL_RETURN_TO_MY_INVOICES", " � g� tilbake til %s");
define("NBILL_CANNOT_RENEW_CANCELLED", "Beklager, du kan ikke fornye en bestilling som er kansellert. Bestill i stedet for p� nytt.");
define("NBILL_EMAIL_INVOICE_PDF_FE", "Send meg fakturaen som et PDF-vedlegg i e-post med ren tekst");

//Version 1.2.3
define("NBILL_PENDING_ID", "Ventende ordrenr.");
define("NBILL_EMAIL_IN_USE", "Denne e-postadressen er allerede registrert. Hvis du har glemt passordet, kan du klikke p� lenken for Glemt passord og ett nytt vil bli sendt deg p� e-post.");
define("NBILL_INVALID_USERNAME", "Angi et gyldig brukernavn. Brukernavn skal ikke inneholde mellomrom, ha minst to tegn, best� av av tallene 0-9 og bokstavene a-z eller A-Z");
define("NBILL_USERNAME_IN_USE", "Dette brukernavnet er allerede registrert. Vennligst velg et annet brukernavn, eller hvis du allerede er registrert, logg inn f�rst. Hvis du har glemt passordet, kan du klikke p� lenken for Glemt passord og ett nytt vil bli sendt deg p� e-post.");

//Version 1.2.7
define("NBILL_ORDER_RENEWED_SUCCESS", "Takk, din ordre ble vellykket fornyet."); //Only shown for free product renewals (eg. 100% discount or free non-auto-renewing subscription)
define("NBILL_CANNOT_RENEW_ADVANCE", "Beklager, du kan ikke fornye mer enn %s ganger p� forh�nd.");

//Version 1.2.9
define("NBILL_PROFILE_NAME_REQURED", "Du m� fylle inn enneten et firmanavn, et kontaktnavn, eller begge.");
define("NBILL_PROFILE_COMPANY_REQURED", "Du m� fylle inn et firmanavn");
define("NBILL_PROFILE_CONTACT_REQUIRED", "Du m� fylle inn et kontaktnavn");
define("NBILL_PROFILE_EMAIL_REQUIRED", "Du m� fylle inn en e-postadresse");

//Version 1.2.10
define("NBILL_LOGIN_FAILED", "Innlogging feilet. Vennligst sjekk ditt brukernavn og passord, fors�k deretter � logge inn p� nytt.");
?>
