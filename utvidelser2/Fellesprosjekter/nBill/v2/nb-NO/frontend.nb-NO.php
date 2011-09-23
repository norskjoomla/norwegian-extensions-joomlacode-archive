<?php
/**
* Language file for the website front end features
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

//Front-End
define("NBILL_MAIN_MENU", "Hovedside");
define("NBILL_ABOUT_TAX_EXEMPTION_CODE", "Om ditt firma er lokalisert innen EU, oppgi ditt MVA-nummer.");
define("NBILL_ORDER_NUMBER", "Ordrenummer");
define("NBILL_ORDER_DATE", "Dato");
define("NBILL_PRICE", "Ordredato");
@define("NBILL_PAY_FREQUENCY", "Periodiske betalinger");
define("NBILL_VIEW_INVOICES", "Vis fakturaer");
define("NBILL_VIEW_INVOICES_ALT", "Vis alle fakturaer som har blitt generert for denne ordren");
define("NBILL_NEW_ORDER_INTRO", "Velg produktet du ønsker å bestille fra listen");
define("NBILL_OR_NEW_QUOTE_INTRO", "...eller velg for å be om et tilbud");
define("NBILL_NEW_QUOTE_INTRO", "Velg den type tilbud du vil be om fra listen");
define("NBILL_PLACE_ORDER", "Klikk her for å legge inn en ordre");
define("NBILL_CLIENT_NEW_ORDER", "Legg inn ny ordre");
define("NBILL_CLIENT_NEW_QUOTE", "Be om et nytt tilbud");
define("NBILL_ERR_FORM_NOT_DEFINED", "Du kan ikke få tilgang til dette ordreskjemaet. Det kan ha blitt slettet, det kan finnes krav som må være oppfylt før du kan bestille produktet, eller det kan være begrenset til bestemte brukere. Påse at du er logget inn, og forsøk deretter på nytt. Om du mener du burde ha tilgang til dette ordreskjemaet, og problemet vedvarer, vennligst kontakt en administrator.");
define("NBILL_ERR_MANDATORY_FIELD", "Du må fylle inn alle påkrevde felter (påkrevde felter er merket med en stjerne *)");
define("NBILL_EMAILS_DONT_MATCH", "E-postadressene du skrev stemmer ikke! Sjekk og prøv igjen.");
define("NBILL_EMAIL_NOT_VALID", "E-postadressen du oppga, ser ut til å ikke være gyldig. Prøv igjen.");
define("NBILL_DETAILS_SAVED", "Detaljer lagret.");
define("NBILL_ERR_USER_EXISTS", "Det finnes allerede en bruker med samme brukernavn og/eller e-postadresse. Vennligst velg et unikt brukernavn. Hvis du allerede er registrert bruker, kan du logge deg på før du legger inn en bestilling.");
define("NBILL_ERROR_SAVING_ORDER", "Det oppstod et problem under forsøk på å lagre bestilling til databasen. Bestillingen må legges inn manuelt av administrator");
define("NBILL_ERR_COULD_NOT_SAVE_PENDING_ORDER", "En feil har oppstått, og din bestilling ble ikke lagret. Vi beklager det inntrufne – vennligst ta kontakt med oss.");
define("NBILL_ERR_PENDING_ORDER_NOT_FOUND", "Det ble gjort et forsøk på å laste en pågående bestilling (ordre id: %s), men bestillingen kan ikke lastes. All behandling av denne bestillingen er avbrutt. Det kan være nødvendig at en administrator oppretter brukerkonto, kundekonto,  bestilling og faktura.");
define("NBILL_ERR_NO_PRODUCTS_ORDERED", "Advarsel - et bestillingsskjema er behandlet, men det ble ikke funnet noen produkter - derfor er det ikke opprettet en bestilling.");
define("NBILL_ERR_NO_INVOICE_GENERATED", "Advarsel  - dette bestillingsskjemaet er merket for automatisk opprettelse av faktura, men en faktura kunne ikke lages. Faktura må kanskje opprettes manuelt av en administrator.");
define("NBILL_EMAIL_NEW_PENDING_ORDER", "Ny VENTENDE bestilling - %s");
define("NBILL_EMAIL_PENDING_ORDER_INTRO", "En ny bestilling er plassert på %s, og venter på bekreftet betaling. Når betaling er bekreftet mottatt (eller når en administrator går inn " . NBILL_BRANDING_NAME . " og aktiverer den ventende bestillingen), blir det laget en ordrebekreftelse.");
define("NBILL_EMAIL_NEW_ORDER", "Ny bestilling - %s");
define("NBILL_EMAIL_ORDER_INTRO", "Denne e-posten er for å bekrefte at følgende bestillinger er laget på %s");
define("NBILL_DOWNLOAD", "Last ned");
define("NBILL_ERR_DOWNLOAD_FAILED", "Beklager, filen kunne ikke lastes ned. Dette kan skyldes tidsavbrudd. Logg inn, og prøv igjen.");
define("NBILL_ERR_DOWNLOAD_EXPIRED", "Beklager, filen er ikke lenger tilgjengelig for nedlastning. Dette produktet kan kun lastes ned inntil %s dager etter at bestillingen er gjort.");
define("NBILL_ERR_DOWNLOAD_NOT_FOUND", "Beklager, kunne ikke finne filen. Vennligst kontakt oss.");
define("NBILL_CANCEL_ORDER", "Avbryt bestilling");
define("NBILL_CANCEL_ORDER_INTRO", "I forbindelse med kansellering av denne bestillingen, kan du fortelle oss årsaken til kansellering og bekrefte at du vil angre ved hjelp av skjemaet nedenfor. Hvis du for tiden gjør regelmessige planlagt utbetalinger til oss, vil vi avslutte dine fremtidige utbetalinger dersom det er mulig for oss å gjøre det. Hvis vi ikke har myndighet til å annullere betaling (for eksempel hvis du betaler med autotrekk via din bank), må du selv avslutte dette i din bank.");
define("NBILL_CONFIRM_CANCELLATION", "Jeg bekrefter at jeg ønsker å avslutte bestillingen over.");
define("NBILL_PLEASE_CONFIRM_CANCELLATION", "Du merket ikke av i boksen for å bekrefte at du vil avbryte. Hvis du vil avbryte denne bestillingen, husk å merke av i boksen før du klikker på knappen 'Avbryt bestilling'.");
define("NBILL_ORDER_NOT_FOUND", "Den angitte bestillingen ble ikke funnet.");
define("NBILL_ORDER_CANCELLED_SUCCESS", "Den angitte bestillingen er avbrutt.");
define("NBILL_EMAIL_ORDER_CANCELLED", "Bestilling avbrutt den %s");
define("NBILL_EMAIL_ORDER_CANCELLED_INTRO", "Følgende bestilling på %s er avbrutt av kunden. Kontrollér at alle planlagte periodiske betalinger for denne bestillingen er kansellert. Ingen ytterligere fakturaer vil bli opprettet for denne bestillingen.");
define("NBILL_CONFIRM_PENDING_DELETE", "Den valgte bestillingen er merket som ventende. Dette betyr at den ikke er behandlet. Hvis du avbryter denne bestillingen, vil den bli slettet. Hvis du er sikker på at du vil slette denne ventende bestillingen, klikker du på knappen 'Avbryt bestilling'. Ellers klikker på linken for å gå tilbake til din bestilling uten å slette noe.");
define("NBILL_RETURN_TO_ORDERS", "Tilbake til bestillingslisten");
define("NBILL_INVOICE_STATUS", "Status");
define("NBILL_INVOICE_PART_PAID", "Delbetalt");
define("NBILL_INVOICE_UNPAID", "Ubetalt");
define("NBILL_INVOICE_REFUNDED", "Tilbakebetalt");
define("NBILL_INVOICE_PART_REFUNDED", "Delvis tilbakebetalt");
define("NBILL_UPGRADE_MEMBERSHIP", "Oppgradér medlemskap");
define("NBILL_MY_PROFILE_DESC", "Oppdatér dine personlige detaljer");
define("NBILL_MY_QUOTES_DESC", "En liste over tilbud du har bedt om fra oss.");
define("NBILL_MY_ORDERS_DESC", "En liste over bestillinger du har lagt inn hos oss.");
define("NBILL_MY_INVOICES_DESC", "En liste over fakturaene.");
define("NBILL_UPGRADE_MEMBERSHIP_DESC", "Oppgradér ditt medlemskap for å få tilgang til flere av dette nettstedet funksjoner");
define("NBILL_EXPIRY_DATE_FE", "Utløpsdato");
define("NBILL_EMAIL_CONFIRM", "Bekreft");
define("NBILL_WARN_ORDER_NOT_PROCESSED", "Advarsel - dette bestillingsskjema er behandlet, men ingenting ble bestilt. Derfor blir det ingen synlig ordreoppføring i " . NBILL_BRANDING_NAME . " for denne innsendingen");
define("NBILL_PAY_INVOICE", "Betal denne fakturaen");
define("NBILL_CURRENT_USER_GROUP", "Din nåværende medlemskapsnivå er '%s'.");
define("NBILL_CANNOT_PAY_INVOICE_ONLINE", "Beklager, for øyeblikket kan du ikke betale denne fakturaen online."); //This would probably only be used if someone tries to change the invoice id to pay someone else's invoice
define("NBILL_POST_ERROR", "Beklager, men det oppstod en feil ved innsending av bestillingen. Vennligst kontakt oss for hjelp.");
define("NBILL_WARN_CLIENT_EMAIL_NOT_SENT", "ADVARSEL! Kunden har IKKE fått en e-post som bekrefter denne bestillingen.");
define("NBILL_FORM_TIMEOUT", "Beklager, økten din har utløpt. Logg inn på nytt.");
define("NBILL_NO_FORMS", "Det er ingen bestillingsskjemaer tilgjengelig for deg.");
define("NBILL_PDF_INVOICE", "Vis PDF-faktura");
define("NBILL_PDF_QUOTE", "Vis tilbud i PDF");
define("NBILL_HTML_QUOTE", "Vis tilbud i HTML");
define("NBILL_QUOTE_VIEW_DETAILS", "Se tilbudsdetaljer");
define("NBILL_PENDING_ORDER_PAY_NOW", "Betal nå");
define("NBILL_PENDING_ORDER_NOT_FOUND", "Beklager, enten ble den ventende bestilling ikke funnet, eller ingen betalingskanal var satt opp på bestillingsskjemaet på tidspunktet bestillingen ble foretatt. Det vil ikke være mulig å betale for bestillingen online.");
@define("NBILL_PENDING", "Venter");
define("NBILL_FE_PRODUCT", "Produkt");
define("NBILL_FE_ORDER_STATUS", "Status");
define("NBILL_FE_NEW_ORDER", "Ny ordre");
define("NBILL_FE_NEW_QUOTE", "Be om nytt tilbud");
define("NBILL_FE_QUOTE_NUMBER", "Tilbudsnr.");
define("NBILL_FE_QUOTE_DATE", "Dato");
define("NBILL_FE_QUOTE_FIRST_ITEM", "Første post på tilbudet");
define("NBILL_QUOTE_NEW_NO_DESC", "Nytt tilbud - Under gjennomgang");
define("NBILL_QUOTE_AWAITING_REPLY", "Avvente mer informasjon - %s for å svare");
define("NBILL_FE_QUOTE_TOTAL_NET", "Netto totalt");
define("NBILL_FE_QUOTE_TOTAL_GROSS", "Brutto totalt");
define("NBILL_FE_QUOTE_STATUS", "Status");
define("NBILL_FE_INVOICE_NUMBER", "Fakturanr.");
define("NBILL_FE_INVOICE_DATE", "Dato");
define("NBILL_FE_FIRST_ITEM", "Første punkt på faktura");
define("NBILL_FE_TOTAL_NET", "Netto totalt");
define("NBILL_FE_TOTAL_GROSS", "Brutto totalt");
define("NBILL_FE_TOTAL_OUTSTANDING", "Utestående");
define("NBILL_FE_INVOICE_PAID", "Betalt");
define("NBILL_CHECKED", "Valgte");
define("NBILL_UNCHECKED", "Ikke valgt");
define("NBILL_ORDER_SUMMARY_NET_TOTAL", "Netto totalt");
define("NBILL_ORDER_SUMMARY_TAX_TOTAL", "Avgift");
define("NBILL_ORDER_SUMMARY_SHIPPING_FEES", "Forsendelse avgift");
define("NBILL_ORDER_SUMMARY_SHIPPING_TOTAL", "Forsendelse totalt");
define("NBILL_ORDER_SUMMARY_SHIPPING_TAX", "Forsendelsesavgift");
define("NBILL_ORDER_SUMMARY_AMOUNT_TO_PAY", "Beløp å betale");
define("NBILL_ORDER_SUMMARY_AMOUNT_TO_PAY_TODAY", "Beløp å betale i dag");
define("NBILL_ORDER_SUMMARY_AMOUNT_TO_PAY_REGULAR", "Beløp å betale %s");
define("NBILL_ORDER_SUMMARY_AMOUNT_TO_PAY_REGULAR_INSTALLMENTS", "Beløp å betale: %s %s betalinger av");
define("NBILL_ORDER_SUMMARY_AMOUNT_TO_PAY_REGULAR_THEREAFTER", "Etterfulgt av %s%s betalinger av");
define("NBILL_ORDER_SUMMARY_PAYMENT_PLAN", "Betalingsplan: %s");
define("NBILL_SHIPPING_LIST_FOR", "Forsendelse for %s");
define("NBILL_SHIPPING_LIST", "Velg forsendelse");
define("NBILL_ERR_SELECT_SHIPPING", "Vennligst velg en transporttjeneste fra listen");
define("NBILL_PASSWORD_HELP", "Angi et passord som du må bruke for å logge deg inn på dette nettstedet (slik at du kan få tilgang til dine bestillinger og fakturaer online).");
define("NBILL_PAYMENT_DETAILS", "Betalingsdetaljer:");
define("NBILL_EMAIL_ORDER_PRODUCTS", "Produkter bestilt:");
define("NBILL_EMAIL_TOTAL_ORDER_VALUE", "Total bestillingsverdi: %s");
define("NBILL_DOMAIN_AVAILABLE", "Domenenavn %s er tilgjengelig for øyeblikket.");
define("NBILL_DOMAIN_UNAVAILABLE", "Domenenavn %s er allerede registrert.");
define("NBILL_DOMAIN_RETURNED_NOTHING", "Beklager, vi er ikke i stand til å avgjøre om det valgte domenet er tilgjengelig. Sjekk igjen senere.");
define("NBILL_DOMAIN_NOT_FOUND", "Beklager, domenekomponenten ble ikke funnet. Vi kan ikke fastslå om det valgte domenet er tilgjengelig.");
define("NBILL_DOMAIN_TLD_NOT_SUPPORTED", "Beklager, vi er ikke i stand til å sjekke tilgjengeligheten av domener som slutter med '.%s'.");
define("NBILL_NOT_LOGGED_IN", "Du er ikke logget inn.");
define("NBILL_LOGIN_INTRO", "Tjenesten du har bedt om, krever at du må være logget inn. Fyll inn brukernavn og passord nedenfor for å logge inn - du vil da bli omdirigert til den siden du anmodet.");
define("NBILL_ORDER_RENEW_ORDER_NOT_FOUND", "Beklager, ingen kvalifiserende bestillinger ble funnet - det er ingenting å fornye. Om du mener dette er feil, vennligst kontakt oss.");
define("NBILL_ORDER_RENEW_TITLE", "Forny bestillingen");
define("NBILL_ORDER_RENEW_INTRO", "For å fornye denne bestillingen, sjekk at informasjonen nedenfor er riktig, og klikk på 'Send'.");
define("NBILL_ORDER_PRODUCT", "Produkt");
define("NBILL_ORDER_RENEW_WARNING", "Ikke send inn dette skjemaet hvis du allerede har en periodisk betalingsplan satt opp for denne bestillingen.");
define("NBILL_FILE_TOO_BIG", "Filen du prøvde å laste opp er for stor. Maksimumsstørrelsen er %s KB");
define("NBILL_FILE_TYPE_NOT_ALLOWED", "Du forsøkte å laste opp en fil av feil type. Kun følgende filtyper er tillatt: %s");
define("NBILL_FILE_UPLOAD_FAILED", "Beklager, filen du forsøkte å laste opp kunne ikke lagres. Prøv med et annet filnavn.");
define("NBILL_FE_SECURITY_IMAGE_CHANGE", "[Endre bokstavskode]");
define("NBILL_ERR_SECURITY_IMAGE_WRONG", "Beklager, feil sikkerhetskode. Prøv igjen.");

/* Version 1.1.4 */
//define("NBILL_FORM_NEXT", "Neste >>");
//define("NBILL_FORM_PREV", "<< Tilbake");
define("NBILL_FORM_SUBMIT", "Lagre/Fortsett");
define("NBILL_RENEW_SUBMIT", "Lagre/Fortsett");

//Version 1.2.0
/* NBILL_ORDER_NUMBER on line 26 changed (for plurality) */
define("NBILL_CANNOT_RENEW_PAY_FREQS_DIFFER", "Beklager, disse bestillingene kan ikke fornyes samtidig fordi de har ulik betalingsplan. Du kan kun fornye flere bestillinger samtidig hvis betalingsfrekvensen er den samme for alle.");
define("NBILL_CANNOT_RENEW_AUTO_RENEW_DIFFERS", "Beklager, disse bestillingene kan ikke alle fornyes samtidig fordi minst en er satt til automatisk fornyelse, og minst en er satt til ikke å automatisk fornyes. Du kan kun fornye flere bestillinger samtidig om de alle er satt til automatisk fornyelse eller alle ikke er satt til automatisk fornyelse.");
define("NBILL_CANNOT_RENEW_CURRENCY_DIFFERS", "Beklager, disse bestillingene kan ikke alle fornyes samtidig fordi de har ulike valutaer. Du kan bare fornye flere bestillinger samtidig hvis valuta er den samme for alle. ");
define("NBILL_RENEW", "Forny");
define("NBILL_DUE", "Forfall");
define("NBILL_EXPIRED", "Utløpt");
define("NBILL_SELECT_GATEWAY", "Velg betalingsmåte");
define("NBILL_INVOICE_PAY_NOW", "Betal faktura(er)");
define("NBILL_INVOICE_AMOUNT", "Beløp");
define("NBILL_INVOICE_TOTAL", "Totalt");
if (!defined("_LOST_PASSWORD")) {define("_LOST_PASSWORD", "Glemt passord?");}
define("NBILL_TRACKING", "Sporing");
define("NBILL_TRACK_THIS_PARCEL", "Spor denne sendingen");

//Version 1.2.1
define("NBILL_FILE_UPLOAD_FAILED_REASON", "Beklager, en fil du forsøkte å laste opp, kunne ikke lagres. Følgende begrunnelse ble rapportert: ");
define("NBILL_ERR_UPLOAD_ERR_INI_SIZE", "Filen var større enn filstørrelsesgrensen pålagt av PHP konfigurasjonsfil (php.ini) på denne serveren.");
define("NBILL_UPLOAD_ERR_FORM_SIZE", "PHP rapporter at filen var større enn filstørrelsesgrensen pålagt av MAX_FILE_SIZE-direktivet (Merk: Denne feilen skjer noen ganger selv om filen er mindre enn grensen. Hvis dette skjer, bør MAX_FILE_SIZE-direktivet fjernes fra skjemaet).");
define("NBILL_UPLOAD_ERR_PARTIAL", "Opplastingen ble avbrutt, og bare en del av filen ble mottatt.");
define("NBILL_UPLOAD_ERR_NO_FILE", "Opplastingen ble avbrutt, og ingen av dataene i filen ble mottatt.");
define("NBILL_UPLOAD_ERR_NO_TMP_DIR", "PHP kunne ikke finne en midlertidig mappe til å lagre filen i.");
define("NBILL_UPLOAD_ERR_CANT_WRITE", "PHP kunne ikke skrive til den midlertidige mappen for å lagre filen.");
define("NBILL_INVOICE_ALREADY_PAID", "Faktura %s er allerede betalt. Du kan ikke betale den igjen!");
define("NBILL_RETURN_TO_MY_INVOICES", " å gå tilbake til %s");
define("NBILL_CANNOT_RENEW_CANCELLED", "Beklager, du kan ikke fornye en bestilling som er kansellert. Bestill i stedet for på nytt.");

//Version 1.2.3
define("NBILL_PENDING_ID", "Ventende ordrenr.");
define("NBILL_EMAIL_IN_USE", "Denne e-postadressen er allerede registrert. Hvis du har glemt passordet, kan du klikke på lenken for Glemt passord og ett nytt vil bli sendt deg på e-post.");
define("NBILL_INVALID_USERNAME", "Angi et gyldig brukernavn. Brukernavn kan ikke inneholde mellomrom, ha minst to tegn, bestå av tallene 0-9 og bokstavene a-z eller A-Z");
define("NBILL_USERNAME_IN_USE", "Dette brukernavnet er allerede registrert. Vennligst velg et annet brukernavn, eller hvis du allerede er registrert, logg inn først. Hvis du har glemt passordet, kan du klikke på lenken for Glemt passord og ett nytt vil bli sendt deg på e-post.");

//Version 1.2.7
define("NBILL_ORDER_RENEWED_SUCCESS", "Takk, din ordre ble vellykket fornyet."); //Only shown for free product renewals (eg. 100% discount or free non-auto-renewing subscription)
define("NBILL_CANNOT_RENEW_ADVANCE", "Beklager, du kan ikke fornye mer enn %s ganger på forhånd.");

//Version 2.0.1
define("NBILL_VALUES_DONT_MATCH", "Verdiene du skrev inn i det markerte feltene nedenfor stemmer ikke! Vennligst prøv igjen.");
define("NBILL_LOGIN_FAILED", "Innlogging feilet. Vennligst sjekk ditt brukernavn og passord, forsøk deretter å logge inn på nytt.");
define("NBILL_FORM_SHIPPING_INTRO", "<p>Velg en forsendelse.</p>");
define("NBILL_RECALCULATE", "Beregn på nytt");
define("NBILL_USER_SELECT_CLIENT", "Velg en kunde:");
define("NBILL_INVOICE_SUMMARY_TOTALS_TITLE", "Fakturasammendrag");
define("NBILL_QUOTE_SUMMARY_TOTALS_TITLE", "Tilbudssammendrag");
define("NBILL_ORDER_SUMMARY_TOTALS_TITLE", "Bestillingssammendrag");
define("NBILL_UPLOAD_ERR_FILE_EXISTS", "Kan ikke generere et unikt filnavn for å lagre filen.");
define("NBILL_UPLOAD_PATH_NOT_WRITABLE", "PHP kunne ikke skrive til opplastingsmappen for å lagre filen.");
define("NBILL_UPLOAD_COPY_FAILED", "Kunne ikke kopiere filen fra midlertidig mappe til opplastingsmappen.");
define("NBILL_FILE_DELETE", "Slett fil");
define("NBILL_PAY_INVOICE_TITLE", "Betal faktura(er)");
define("NBILL_PAY_INVOICE_INTRO", "For å betale fakturaen(e) nedenfor, vennligst sjekk at opplysningene er korrekte og klikk på 'Send'.");
define("NBILL_INVOICE_INSTALLMENTS_ALREADY_RUNNING", "Du allerede har en periodisk betalingsplan satt opp for denne fakturaen %s for å betale den i avdrag. for å betale den i avdrag. På grunn av dette kan du ikke betale fakturaen manuelt, det ville resultere i at du betaler for mye. Hvis den eksisterende periodiske betalingsplan har feilet eller blitt kansellert, kontakte oss slik at vi kan rette på dette slik at du kan betaler fakturaen.");
define("NBILL_INVOICE_CURRENCY_MISMATCH", "De valgte fakturaene er ikke i samme valuta. Du kan ikke betale fakturaer for ulike valutaer i en enkelt transaksjon - vennligst betale hver av disse for seg.");
define("NBILL_QUOTE_REQUEST_NO_QUOTE_NO_EMAIL", "Beklager, det var et problem ved behandling av din forespørsel. Systemet kunne ikke opprette et nytt tilbudsdokument, eller sende e-postbekreftelse. Vennligst kontakt oss.");
define("NBILL_QUOTE_REQUEST_QUOTE_NO_EMAIL", "Takk, din forespørsel ble registrert i systemet vårt, men det var et problem å sende bekreftelse per e-post. Hvis du har skrevet inn feil e-postadresse, kan du kontakte oss slik at vi kan oppdatere våre registre.");
define("NBILL_QUOTE_REQUEST_EMAIL_NO_QUOTE", "Tilbudsdokumentet kan ikke lagres. Opprett et nytt tilbud manuelt.");
define("NBILL_FE_QUOTE_INTRO", "Klikk på et tilbudsnr. for å godta eller forkaste hele eller deler av tilbudet, eller for å sende oss mer informasjon.");
define("NBILL_FE_QUOTE_TITLE", "Tilbud %s, datert %s. Tilbudsstatus: %s.");
define("NBILL_FE_QUOTE_SHOW_CORRE", "Vis tidligere korrespondanse");
define("NBILL_FE_QUOTE_HIDE_CORRE", "Skjul tidligere korrespondanse");
define("NBILL_FE_QUOTE_REPLY_INTRO", "Vennligst send skjemaet nedenfor hvis du ønsker å svare eller legge til ytterligere informasjon til dette tilbudet.");
define("NBILL_FE_QUOTE_EMAIL_DEFAULT_SUBJECT", "Re: Tilbudsnr. %s");
define("NBILL_FE_QUOTE_ITEM_MANDATORY", "(Obligatorisk)");
define("NBILL_QUOTE_ITEM_ACCEPTED_ACTION", "Godta/Avslå");
define("NBILL_QUOTE_CLICK_TO_ACCEPT", "Klikk for å godta dette elementet");
define("NBILL_QUOTE_CLICK_TO_REJECT", "Klikk for å avvise dette elementet");
define("NBILL_QUOTE_SUBMIT_WARNING", "Advarsel: Ved å sende inn dette skjemaet, inngår du en juridisk bindende avtale om å kjøpe de produktene som er merket som godkjent.");
define("NBILL_QUOTE_ACCEPT_ALL_WARNING", "Advarsel: Ved å sende inn dette skjemaet, inngår du en juridisk bindende avtale om å kjøpe alle varene som er oppført.");
define("NBILL_QUOTE_REJECT_ALL", "Avvis alle");
define("NBILL_QUOTE_REJECT", "Avvis");
define("NBILL_QUOTE_REJECT_WARNING", "Er du sikker på at du vil avvise dette tilbudet?");
define("NBILL_QUOTE_ACCEPT_ALL", "Godta alle");
define("NBILL_QUOTE_ACCEPT_SELECTED", "Bekreft valgene");
define("NBILL_QUOTE_REJECTED_SUCCESSFULLY", "Du har nå avvist dette tilbudet. Takk for at du gav oss beskjed.");
define("NBILL_QUOTE_PART_REJECTED_SUCCESSFULLY", "Du har avvist de utestående elementene på dette tilbudet. Takk for at du gav oss beskjed.");
define("NBILL_QUOTE_REJECTED_SUBJECT", "Tilbud avvist den %s");
define("NBILL_QUOTE_REJECTED_MESSAGE", "Dette er bare for å informere deg om at tilbudsnummer %s har blitt avvist av kunden. Beklager at det ikke ble noe av dette!");
define("NBILL_QUOTE_ACCEPTED_SUCCESSFULLY", "Takk - du har akseptert dette tilbudet.");
define("NBILL_QUOTE_ACCEPTED_INVOICE_GENERATED", " En ny faktura er generert til deg.");
define("NBILL_QUOTE_NOTHING_NEW", "Ingen nye elementer ble akseptert. Ingen handling er utført.");
define("NBILL_QUOTE_AWAITING_PAYMENT", "ADVARSEL! Du har akseptert en eller flere tilbuds elementer, men har ennå ikke betalt for dem alle. Følgende akseptert(e) tilbud kan ikke utføres før betalingen er bekreftet: ");
define("NBILL_QUOTE_AWAITING_ACTION", "Tilbud %s: <a href=\"%s\">Betal nå</a> | <a href=\"%s\">Avvis tilbud</a> | <a href=\"%s\">Se tilbudsdetaljene</a>");
define("NBILL_CANNOT_PAY_QUOTE_ONLINE", "Beklager, du kan ikke betale for dette tilbudet på nettet for øyeblikket."); //Never likely to happen, unless someone is trying to hack!
define("NBILL_PAY_QUOTE_TITLE", "Betal for tilbudene");
define("NBILL_PAY_QUOTE_INTRO", "For å betale for det aksepterte tilbudsbeløpene nevnt nedenfor, vennligst sjekk at opplysningene er korrekte og klikk på 'Send'.");
define("NBILL_PAY_QUOTE_INTRO_ADDITIONAL_PAYMENT_REQD", "Merk, på grunn av ulike betalingsintervaller involvert i dette tilbudet, må en ekstra betaling utføres etter dette. Du vil bli bedt om å gjøre ytterligere en innbetaling etter at denne er fullført.");
