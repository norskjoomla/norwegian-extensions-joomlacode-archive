<?php
/**
* Language file for Invoices
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

//Invoices
define("NBILL_INVOICES_TITLE", "Fakturaer");
define("NBILL_INVOICES_INTRO", "Du kan lage faktura for ALLE utestående ordre opp til en gitt dato ved å klikke på knappen 'Lag alle' på verktøylinjen over. Du kan også lage faktura for enkeltordre fra <a href=\"index2.php?option=com_netinvoice&action=orders\">ordrelisten</a>. Alternativt kan du opprette og redigere fakturaer manuelt ved hjelp av knappene 'Ny' og 'Rediger' på verktøylinjen over. Du kan også få utskriftsvennlige versjoner av disse fakturaene ved å merke av i boksene ved siden av fakturaene du vil skrive ut, og klikke på 'HTML forhåndsvisning' eller 'PDF forhåndsvisning' på verktøylinjen over (PDF er bedre egnet til å skrive ut flere fakturaer på separate sider, men HTML er raskere og kan inneholde bilder).");
define("NBILL_INVOICE_NUMBER", "Fakturanr.");
define("NBILL_BILLING_NAME", "Fakturanavn");
define("NBILL_EDIT_INVOICE", "Rediger faktura");
define("NBILL_NEW_INVOICE", "Ny faktura");
define("NBILL_TOTAL_NET", "Netto totalt");
define("NBILL_TOTAL_GROSS", "Brutto totalt");
define("NBILL_PAID_IN_FULL", "Fullt betalt");
define("NBILL_INVOICE_PAID", "Betalt");
define("NBILL_INVOICE_NOT_PAID", "Ikke betalt");
define("NBILL_GENERATE_ALL", "Lag alle");
define("NBILL_PRINT", "HTML forhåndsvisning");
define("NBILL_PDF", "PDF forhåndsvisning");
define("NBILL_BILLING_ADDRESS", "Faktureringsadresse");
define("NBILL_REFERENCE", "Referanse");
define("NBILL_INVOICE_DATE", "Fakturadato");
define("NBILL_FIRST_ITEM", "Første post på faktura");
define("NBILL_INVOICE_ITEMS", "Fakturaposter");
define("NBILL_INVOICE_ITEM_NAME", "Beskrivelse");
define("NBILL_INVOICE_ITEM_LEDGER", "Hovedbokskonto");
define("NBILL_INVOICE_ITEM_NET_PRICE", "Enhetspris");
define("NBILL_INVOICE_ITEM_QTY", "Antall");
define("NBILL_INVOICE_ITEM_DISCOUNT_DESC", "Rabattbeskrivelse");
define("NBILL_INVOICE_ITEM_DISCOUNT_AMOUNT", "Rabattbeløp");
define("NBILL_INVOICE_ITEM_TOTAL_NET", "Netto pris");
define("NBILL_INVOICE_ITEM_TAX", "Avgift");
define("NBILL_INVOICE_ITEM_SHIPPING_SERVICE", "Transportør");
define("NBILL_INVOICE_ITEM_SHIPPING", "Forsendelse");
define("NBILL_INVOICE_ITEM_SHIPPING_TAX", "Avgift på forsendelsen");
define("NBILL_INVOICE_ITEM_GROSS", "Brutto pris");
define("NBILL_NEW_INVOICE_ITEM", "Ny");
define("NBILL_TOTAL_TAX", "Avgift totalt");
define("NBILL_TOTAL_SHIPPING", "Forsendelse totalt");
define("NBILL_TOTAL_SHIPPING_TAX", "Avgift på forsendelse");
define("NBILL_INVOICE_PAY_INSTR", "Betalingsinstruksjoner");
define("NBILL_INVOICE_SMALL_PRINT", "Liten skrift");
define("NBILL_INVOICE_PAID_IN_FULL", "Betalt i sin helhet?");
define("NBILL_INVOICE_PARTIAL_PAYMENT", "Delvis betalt?");
define("NBILL_INVOICE_REFUND_IN_FULL", "Refundert helt?");
define("NBILL_INVOICE_PARTIAL_REFUND", "Delvis refundert?");
define("NBILL_INSTR_INVOICE_NUMBER", "<strong>Merk:</strong> Skal stå tomt hvis du legger til en ny faktura - komponenten vil automatisk tildele neste fakturanummer.");
define("NBILL_INSTR_BILLING_NAME", "Navnet på personen og/eller firma som blir fakturert.");
define("NBILL_INSTR_BILLING_ADDRESS", "Ta med hele adressen UNNTATT land (dette er lagret separat, nedenfor).");
define("NBILL_INSTR_REFERENCE", "Din egen referanse-ID for denne klienten eller transaksjon.");
define("NBILL_INSTR_INVOICE_DATE", "");
define("NBILL_INSTR_INVOICE_PAY_INSTR", "Detaljer om hvordan kunden kan betale deg (f. eks bankinformasjonen)");
define("NBILL_INSTR_INVOICE_SMALL_PRINT", "Juridisk informasjonen som kommer på fakturaen (f. eks renter ved for sen betaling).");
define("NBILL_INSTR_INVOICE_PAID_IN_FULL", "<strong>ADVARSEL!</strong> Settes denne verdien herfra, overstyrer dette den normale prosessen med å lage en 'inntekt'. Dette er OK hvis du ikke har tenkt å bruke inntektsfunksjonen, men det anbefales at du merker fakturaer som betales ved å klikke på den røde 'X' på fakturalisten, i stedet for å sette verdien her.");
define("NBILL_INSTR_INVOICE_PARTIAL_PAYMENT", "Om noe, men ikke alt av totalbeløpet er betalt");
define("NBILL_INSTR_INVOICE_REFUND_IN_FULL", "");
define("NBILL_INSTR_INVOICE_PARTIAL_REFUND", "Om noe, men ikke hele totalbeløpet beløpet er refundert");
define("NBILL_ERR_REDIRECT_BACK", "Faktura er IKKE lagret. Prøv igjen senere, eller skriv inn fakturanummer manuelt. Du blir omdirigert til den forrige siden - du må kanskje laste siden på nytt, men alle data du har lagt inn, er fortsatt intakte.");
define("NBILL_ERR_VENDOR_NOT_FOUND", "Leverandør ikke funnet.");
define("NBILL_ERR_COULD_NOT_CREATE_INVOICE", "Kan ikke sette inn ny fakturapost i databasen.");
define("NBILL_AUTO_GENERATED_INVOICE", "Automatisk generert faktura");
define("NBILL_PRINT_PREVIEW_DONE", "Utskriftsvennlig versjon skulle ha åpnet i et nytt vindu. Hvis ikke, prøv å holde nede 'Ctrl' - mens du klikker på forhåndsvisningsknappen, eller deaktiver nettleserens popup-blokkering for dette området. %sKlikk her for å fjerne denne meldingen.%s");
define("NBILL_ERR_TEMPLATE_NOT_FOUND", "<strong>Fakturamal '%s' ikke funnet!</strong> Sørg for at en gyldig fakturamalfil ligger på '%s'.");
define("NBILL_SELECT_VENDOR_FOR_PRINT", "Forhåndsvisning er bare tilgjengelig når en leverandør er valgt");
define("NBILL_PDF_NOT_INSTALLED", "PDF-visning ikke tilgjengelig - krever <a target=\"_blank\" href=\"http://" . NBILL_BRANDING_HTML2PS . "\">HTML2PS</a>");
define("NBILL_REFUND_DESC", "Kontokreditt");
define("NBILL_BILLING_NAME_REQUIRED", "Du må angi et faktureringsnavn.");
define("NBILL_BILLING_ADDRESS_REQUIRED", "Du må angi en faktureringsadresse.");
define("NBILL_ALL_OUTSTANDING", "Vis ALLE ubetalte fakturaer uansett dato");
define("NBILL_INVOICE_ITEM_CODE", "Varenr.");
define("NBILL_REFUND", "REFUSJON"); //The SKU for refunds

define("NBILL_INVOICE_EMAILED", "E-post");
define("NBILL_EMAIL_FAILED", "Et forsøk ble gjort for å sende en e-post, men det oppstod en feil som hindret den i å bli sendt. Kontrollér serverkonfigurasjonen for å sikre at serveren er i stand til å sende e-post.");
define("NBILL_EMAIL_FAILED_NO_ADDRESS", "Et forsøk ble gjort for å sende en e-post, men det ble ikke funnet en e-postadresse til denne kunden.");
define("NBILL_EMAIL_SENT", "E-post sendt til kunden %s");
define("NBILL_EMAIL_NOT_DUE", "E-post ble ikke sendt. (Kundens innstillinger tillater ikke faktura via e-post).");
define("NBILL_EMAIL_NOW", "Send denne fakturaen til kunden via e-post nå");
define("NBILL_SEND_EMAIL", "Send e-post");
define("NBILL_EMAIL_OPTIONS", "E-postalternativer");
define("NBILL_INVOICE_LBL_WRITTEN_OFF", "Avskrevet");
define("NBILL_INVOICE_WRITTEN_OFF", "Avskrevet?");
define("NBILL_INSTR_INVOICE_WRITTEN_OFF", "Hvis du har gitt opp håpet om at denne fakturaen vil bli betalt, og bare ønsker å avskrive den, velger du 'Ja' her og oppgi detaljer nedenfor.");
define("NBILL_INVOICE_WRITE_OFF_DATE", "Dato avskrevet");
define("NBILL_INSTR_WRITE_OFF_DATE", "Angi datoen som denne fakturaen ble avskrevet (hvis du har betalt avgift på dette angir du nedenfor at du ønsker å få tilbake denne. Avgiftsrapporten vil beregne dette fra aktuell dato).");
define("NBILL_INVOICE_CLAIM_BACK", "Krev avgiften tilbake?");
define("NBILL_INSTR_INVOICE_CLAIM_BACK", "Vil du trekker fra avgiftsbeløpet på denne fakturaen (hvis noen) fra avgiftsrapporten på avskrivningsdatoen? (Gjelder bare hvis du betaler avgifter før faktura er betalt)");
define("NBILL_WRITTEN_OFF_DATE_REQUIRED", "Angi datoen for når denne fakturaen ble avskrevet.");
define("NBILL_VENDOR", "Leverandør");
define("NBILL_INVOICE_TAX_RATE", "Avgiftssats");
define("NBILL_INVOICE_SHIPPING_TAX_RATE", "Sats for transportavgift");
define("NBILL_INSTR_INVOICE_TAX_RATE", "Standarden avgiftssats for å automatisk beregne avgiftsgrunnlag på denne fakturaen (faktisk avgiftsbeløp kan fortsatt overstyres under)");
define("NBILL_INSTR_INVOICE_SHIPPING_TAX_RATE", "Standard avgiftssats for transport, som brukes til automatisk å beregne avgiften på transport uavhengig av mengde på denne fakturaen (faktisk avgiftsbeløp kan overstyres under)");
define("NBILL_INVOICE_VENDOR_NAME_REQUIRED", "Du må oppgi navn på leverandøren.");
define("NBILL_INVOICE_VENDOR_ADDRESS_REQUIRED", "Du må angi leverandørens adresse");
define("NBILL_INSTR_VENDOR_NAME", "");
define("NBILL_INSTR_VENDOR_ADDRESS", "");
define("NBILL_AUTO_INVOICE_INTRO", "%s faktura(er) er opprettet. Dato for opprettelse: %s. Dato og klokkeslett: %s");
define("NBILL_AUTO_INVOICE_CURRENCY", "Valuta");
define("NBILL_AUTO_INVOICE_EMAILED", "E-post sendt til kunde?");
define("NBILL_AUTO_INVOICE_YES", "Ja");
define("NBILL_AUTO_INVOICE_NO", "Nei");
define("NBILL_AUTO_INVOICE_SUBJECT", NBILL_BRANDING_NAME . " automatisk fakturagenerator");
define("NBILL_AUTO_INVOICE_FAILURE", "FEIL");
define("NBILL_AUTO_INVOICE_NO_LICENSE", NBILL_BRANDING_NAME . " sin lisenskode er feil, eller ble ikke funnet");
define("NBILL_INVOICE_SHOW_PAYLINK", "Vis betalingslink?");
define("NBILL_INSTR_INVOICE_SHOW_PAYLINK", "Om lenken 'Betal denne faktura' skal vises eller ikke. Verdien av den globale innstillingen avhenger av ordreantallet - hvis aktuelt - eller, visningsalternativene (du kan angi en fast betalingsfrekvens - se visningsalternativene for mer informasjon). Betalingslinken vises bare hvis fakturaen ikke er betalt og en standard betalingskanal er angitt på leverandøren, og brutto totalt på fakturaen er større enn null.");
define("NBILL_INVOICE_PAYLINK_USE_GLOBAL", "Bruk global");
define("NBILL_INVOICE_PAYLINK_SHOW", "Vis");
define("NBILL_INVOICE_PAYLINK_HIDE", "Skjul");

/* Version 1.1.4 */
define("NBILL_INVOICE_ORDER_NO", "Ordrenr.");

//Version 1.2.0
define("NBILL_INVOICE_LOOKUP_SKU", "Slå opp varenr.");

//Version 1.2.0 SP2
define("NBILL_PAYLINK", "Betalingslenke");
define("NBILL_INVOICE_SELECT_PRODUCT", "Velg produkt");

//Version 1.2.1
define("NBILL_INVOICE_SHOW_ALL", "Vis alle");
define("NBILL_INVOICE_SHOW_ALL_UNPAID", "Vis bare ubetalte");
define("NBILL_INVOICE_SHOW_RESET", "Tilbakestill datoperioden");
define("NBILL_SHOW_INCOME_RECORDS", "Vis relaterte inntektsposter");
define("NBILL_SHOW_EXPENDITURE_RECORDS", "Vis relaterte utgiftsposter");
define("NBILL_SHOW_ORDER_RECORDS", "Vis relaterte ordreposter");
define("NBILL_EMAIL_ATTACH_OPTIONS", "Vedlegg");
define("NBILL_EMAIL_ATTACH_HTML", "HTML");
define("NBILL_EMAIL_ATTACH_PDF", "PDF");
define("NBILL_EMAIL_ATTACH_NONE", "Ingen");
define("NBILL_EMAIL_NOT_DUE_ADHOC", "E-post ble ikke sendt (ad hoc-faktura blir ikke automatisk sendt på e-post).");

//Version 1.2.6
define("NBILL_INVOICE_RECORD_LIMIT_WARNING", "ADVARSEL! Det er %s eller flere kunder i databasen. Bare de %s første postene vises i listen over. Hvis kunden du trenger er ikke her, kan du enten klikke på \"Vis alle\" (nedenfor), eller velge \"Opprett ny faktura\"-ikonet på kundelisten (den aktuelle posten vil da automatisk bli valgt her).");

//Version 2.0.0
define("NBILL_INVOICE_TOTAL_THIS_PAGE", "Totalt for alle fakturaer som vises på DENNE siden (herunder avskrevet beløp):");
define("NBILL_INVOICE_TOTAL_ALL_PAGES", "Totalt for alle fakturaer på alle sider i den valgte tidsperioden (herunder avskrevet beløp):");
define("NBILL_INVOICE_ITEM_TAX_RATE", "Skattesats (%)");
define("NBILL_INVOICE_ITEM_SHIPPING_TAX_RATE", "Forsendelses avgift (%)");
define("NBILL_BILLING_COUNTRY", "Faktureringsland");
define("NBILL_INSTR_BILLING_COUNTRY", "");
define("NBILL_INVOICE_HTML_HIDE", "Skjul HTML");
define("NBILL_INVOICE_HTML_SHOW", "Vis HTML");
@define("NBILL_PAYMENT_PLAN", "Betalingsplan");
@define("NBILL_INSTR_PAYMENT_PLAN", "Hvis et engangsbeløp er forfalt til betaling, velge hvilke betalingsplan å implementere (NB: ikke alle betalingsløsninger støtte betalingsplaner)");
define("NBILL_INVOICE_PAY_STATUS", "Betalt?");
define("NBILL_DOCUMENT_FILE_NOT_FOUND", "Fil %s ikke funnet.");
define("NBILL_DOCUMENT_FILE_UPLOADS", "Opplastet fil");
define("NBILL_INSTR_DOCUMENT_FILE_UPLOADS", "Filen som ble lastet opp av kunden når de leverte tilbudsforespørselen ble brukt til å lage denne posten.");
define("NBILL_INVOICE_UNDER_PAYMENT_SCHEDULE", "En betalingsplan er satt opp for denne fakturaen som bør føre til at den er betalt i sin helhet etter at alle avdrag er betalt. Kunden vil derfor ikke bli gitt mulighet til å betale denne fakturaen (ellers blir det betalt for mye). Hvis du ønsker å at fakturaen skal betales (for eksempel hvis betalingsplanen for terminene har feilet eller er kansellert), kan du klikke på følgende knapp, klikk deretter enten på knappen ’Bruk’ eller ’Lagre’ på verktøylinjen.");
define("NBILL_INVOICE_REMOVE_GATEWAY_TXN_ID_SURE", "Er du sikker på at du vil tillate brukeren å betale denne fakturaen? I så fall må du kontrollere at eksisterende periodisk betalingsplanen er kansellert med betalingstjenesteleverandøren.");
define("NBILL_INVOICE_REMOVE_GATEWAY_TXN_ID", "Slett tilhørende betalingsplan");
define("NBILL_INVOICE_GATEWAY_TXN_ID_REMOVED", "Tilhørende betalingsplan slettet");
