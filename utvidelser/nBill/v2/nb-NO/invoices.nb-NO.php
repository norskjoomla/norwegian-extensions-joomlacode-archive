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

//Invoices
define("INV_INVOICES_TITLE", "Fakturaer");
define("INV_INVOICES_INTRO", "Du kan lage faktura for ALLE utest�ende ordre opp til en gitt dato ved � klikke p� knappen 'Lag alle' p� verkt�ylinjen over. Du kan ogs� lage faktura for enkeltordre fra <a href=\"index2.php?option=com_netinvoice&action=orders\">ordrelisten</a>. Alternativt kan du opprette og redigere fakturaer manuelt ved hjelp av knappene 'Ny' og 'Rediger' p� verkt�ylinjen over. Du kan ogs� f� utskriftsvennlige versjoner av disse fakturaene ved � merke av i boksene ved siden av fakturaene du vil skrive ut, og klikke p� 'HTML forh�ndsvisning' eller 'PDF forh�ndsvisning' p� verkt�ylinjen over (PDF er bedre egnet til � skrive ut flere fakturaer p� separate sider, men HTML er raskere og kan inneholde bilder).");
@define("INV_INVOICE_NUMBER", "Fakturanr.");
define("INV_BILLING_NAME", "Fakturanavn");
define("INV_EDIT_INVOICE", "Rediger faktura");
define("INV_NEW_INVOICE", "Ny faktura");
@define("INV_TOTAL_NET", "Netto totalt");
@define("INV_TOTAL_GROSS", "Brutto totalt");
define("INV_PAID_IN_FULL", "Fullt betalt");
@define("INV_INVOICE_PAID", "Betalt");
define("INV_INVOICE_NOT_PAID", "Ikke betalt");
define("INV_GENERATE_ALL", "Lag alle");
define("INV_PRINT", "HTML forh�ndsvisning");
define("INV_PDF", "PDF forh�ndsvisning");
define("INV_BILLING_ADDRESS", "Faktureringsadresse");
define("INV_REFERENCE", "Referanse");
@define("INV_INVOICE_DATE", "Fakturadato");
@define("INV_FIRST_ITEM", "F�rste post p� faktura");
define("INV_INVOICE_ITEMS", "Fakturaposter");
define("INV_INVOICE_ITEM_NAME", "Beskrivelse");
define("INV_INVOICE_ITEM_LEDGER", "Hovedbokskonto");
define("INV_INVOICE_ITEM_NET_PRICE", "Enhetspris");
define("INV_INVOICE_ITEM_QTY", "Antall");
define("INV_INVOICE_ITEM_DISCOUNT_DESC", "Rabattbeskrivelse");
define("INV_INVOICE_ITEM_DISCOUNT_AMOUNT", "Rabattbel�p");
define("INV_INVOICE_ITEM_TOTAL_NET", "Netto pris");
define("INV_INVOICE_ITEM_TAX", "Avgift");
define("INV_INVOICE_ITEM_CARRIAGE_SERVICE", "Transport�r");
define("INV_INVOICE_ITEM_CARRIAGE", "Forsendelse");
define("INV_INVOICE_ITEM_CARRIAGE_TAX", "Avgift p� forsendelsen");
define("INV_INVOICE_ITEM_GROSS", "Brutto pris");
define("INV_NEW_INVOICE_ITEM", "Ny");
define("INV_TOTAL_TAX", "Avgift totalt");
define("INV_TOTAL_CARRIAGE", "Forsendelse totalt");
define("INV_TOTAL_CARRIAGE_TAX", "Avgift p� forsendelse");
define("INV_INVOICE_PAY_INSTR", "Betalingsinstruksjoner");
define("INV_INVOICE_SMALL_PRINT", "Liten skrift");
define("INV_INVOICE_PAID_IN_FULL", "Betalt alt?");
define("INV_INVOICE_PARTIAL_PAYMENT", "Delvis betalt?");
define("INV_INVOICE_REFUND_IN_FULL", "Refundert helt?");
define("INV_INVOICE_PARTIAL_REFUND", "Delvis refundert?");
define("INV_INSTR_INVOICE_NUMBER", "<strong>Merk:</strong> Skal st� tomt hvis du legger til en ny faktura - komponenten vil automatisk tildele neste fakturanummer.");
define("INV_INSTR_BILLING_NAME", "Navnet p� personen og/eller firma som blir fakturert.");
define("INV_INSTR_BILLING_ADDRESS", "");
define("INV_INSTR_REFERENCE", "Din egen referanse-ID for denne klienten eller transaksjon.");
define("INV_INSTR_INVOICE_DATE", "");
define("INV_INSTR_INVOICE_PAY_INSTR", "Detaljer om hvordan kunden kan betale deg (f. eks bankinformasjonen)");
define("INV_INSTR_INVOICE_SMALL_PRINT", "Juridisk informasjonen som kommer p� fakturaen (f. eks renter ved for sen betaling).");
define("INV_INSTR_INVOICE_PAID_IN_FULL", "<strong>ADVARSEL!</strong> Settes denne verdien herfra, overstyrer dette den normale prosessen med � lage en 'inntekt'. Dette er OK hvis du ikke har tenkt � bruke inntektsfunksjonen, men det anbefales at du merker fakturaer som betales ved � klikke p� den r�de 'X' p� fakturalisten, i stedet for � sette verdien her.");
define("INV_INSTR_INVOICE_PARTIAL_PAYMENT", "Om noe, men ikke alt av totalbel�pet er betalt");
define("INV_INSTR_INVOICE_REFUND_IN_FULL", "");
define("INV_INSTR_INVOICE_PARTIAL_REFUND", "Om noe, men ikke hele totalbel�pet bel�pet er refundert");
define("INV_ERR_REDIRECT_BACK", "Faktura er IKKE lagret. Pr�v igjen senere, eller skriv inn fakturanummer manuelt. Du blir omdirigert til den forrige siden - du m� kanskje laste siden p� nytt, men alle data du har lagt inn, er fortsatt intakte.");
define("INV_ERR_VENDOR_NOT_FOUND", "Leverand�r ikke funnet.");
define("INV_ERR_COULD_NOT_CREATE_INVOICE", "Kan ikke sette inn ny fakturapost i databasen.");
define("INV_AUTO_GENERATED_INVOICE", "Automatisk generert faktura");
define("INV_PRINT_PREVIEW_DONE", "Utskriftsvennlig versjon skulle ha �pnet i et nytt vindu. Hvis ikke, pr�v � holde nede 'Ctrl' - mens du klikker p� forh�ndsvisningsknappen, eller deaktiver nettleserens popup-blokkering for dette omr�det. %sKlikk her for � fjerne denne meldingen.%s");
define("INV_ERR_TEMPLATE_NOT_FOUND", "<strong>Fakturamal '%s' ikke funnet!</strong> S�rg for at en gyldig fakturamalfil ligger p� '%s'.");
define("INV_SELECT_VENDOR_FOR_PRINT", "Forh�ndsvisning er bare tilgjengelig n�r en leverand�r er valgt");
define("INV_PDF_NOT_INSTALLED", "PDF-visning ikke tilgjengelig - krever <a target=\"_blank\" href=\"http://" . INV_BRANDING_HTML2PS . "\">HTML2PS</a>");
define("INV_REFUND_DESC", "Kontokreditt");
define("INV_BILLING_NAME_REQUIRED", "Du m� angi et faktureringsnavn.");
define("INV_BILLING_ADDRESS_REQUIRED", "Du m� angi en faktureringsadresse.");
define("INV_ALL_OUTSTANDING", "Vis ALLE ubetalte fakturaer uansett dato");
define("INVOICE_ITEM_CODE", "Varenr.");
define("INV_REFUND", "REFUSJON"); //The SKU for refunds
define("INV_EMAIL_INVOICE_SUBJECT", "Faktura %s fra %s");
define("INV_EMAIL_INVOICE_INTRO", "Hei %s,\n\nF�lgende faktura er vedlagt:");
define("INV_EMAIL_INVOICE_FOOTER", "Du kan se alle dine fakturaer elektronisk ved � logge deg p� %s. Hvis du ikke lenger �nsker � motta fakturaer p� e-post, kan du logge inn og klikke p� `Min profil` p� `Min konto` for � endre dine innstillinger.\n\nOm du valgte � betale direkte p� nett vil du ogs� kunne laste ned en oppdatert faktura fra din konto, som viser kvitteringsnummer og betalingsdato.\n\nHilsen,\n%s");
define("INV_EMAIL_INVOICE_ALT_TEXT", "Du ser denne meldingen fordi din e-postklient ikke st�tter HTML-meldinger (eller hvis du viser den fra 'useri�s e-post'-mappen. HTML kan da ikke vises). For � se fakturaen din, kan du enten vise denne e-posten i HTML-modus, eller logge inn p� %s for � se din faktura online.");
define("INV_EMAIL_INVOICE_NOTIFICATION", "Hei %s,\n\nDenne e-posten er for � informere deg om at en ny faktura er sendt til deg.\n\n");
define("INV_INVOICE_EMAILED", "E-post");
define("INV_EMAIL_FAILED", "Et fors�k ble gjort for � sende en e-post, men det oppstod en feil som hindret den i � bli sendt. Kontroll�r serverkonfigurasjonen for � sikre at serveren er i stand til � sende e-post.");
define("INV_EMAIL_FAILED_NO_ADDRESS", "Et fors�k ble gjort for � sende en e-post, men det ble ikke funnet en e-postadresse til denne kunden.");
define("INV_EMAIL_SENT", "E-post sendt til kunden %s");
define("INV_EMAIL_NOT_DUE", "E-post ble ikke sendt. (Kundens innstillinger tillater ikke faktura via e-post).");
define("INV_EMAIL_NOW", "Send denne fakturaen til kunden via e-post n�");
define("INV_SEND_EMAIL", "Send e-post");
define("INV_SEND_EMAIL_INTRO", "Velg format for e-post (HTML eller ren tekst). Du kan ogs� overstyre meldingsteksten ved � skrive din egen tekst her. Hvis du lar felt st�, " . INV_BRANDING_NAME . " vil standard melding bli brukt.");
define("INV_SEND_EMAIL_MANY_INTRO", "Vennligst velg en e-posttype som skal sendes (HTML eller ren tekst). Du kan ogs� overstyre e-postadressen, kontaktnavnet og melding ved � spesifisere dine egne verdier her. Om du lar disse v�re tomme, vil nBill fors�ke � fylle inn detaljene ved � bruke kundeoppf�ringen assosiert med denne fakturaen (dersom anvendelig), sammen med standard meldingstekst.");
define("INV_EMAIL_OPTIONS", "E-postalternativer");
define("INV_EMAIL_HTML", "Send i HTML format?");
define("INV_EMAIL_CONTACT", "Kontaktnavn");
define("INV_EMAIL_MESSAGE", "Melding");
define("INV_EMAIL_SENT_SUCCESS", "E-post sendt.");
define("INV_EMAIL_SENT_FAILURE", "En eller flere feil oppstod under fors�k p� � sende e-post. Oppdat�r fakturalisten,  og sjekke e-poststatus etterp�.");
define("INV_EMAIL_INVOICE_FOOTER_USERNAME", "Du kan se alle dine fakturaer online ved � logge deg p� %s (ditt brukernavn er %s). Hvis du ikke lenger �nsker � motta fakturaer p� e-post, kan du logge inn og klikke p� `Min profil` p� `Min konto` for � endre dine innstillinger.\n\nHilsen,\n%s");
define("INV_INVOICE_LBL_WRITTEN_OFF", "Avskrevet");
define("INV_INVOICE_WRITTEN_OFF", "Avskrevet?");
define("INV_INSTR_INVOICE_WRITTEN_OFF", "Hvis du har gitt opp h�pet om at denne fakturaen vil bli betalt, og bare �nsker � avskrive den, velger du 'Ja' her og oppgi detaljer nedenfor.");
define("INV_INVOICE_WRITE_OFF_DATE", "Dato avskrevet");
define("INV_INSTR_WRITE_OFF_DATE", "Angi datoen som denne fakturaen ble avskrevet (hvis du har betalt avgift p� dette angir du nedenfor at du �nsker � f� tilbake denne. Avgiftsrapporten vil beregne dette fra aktuell dato).");
define("INV_INVOICE_CLAIM_BACK", "Krev avgiften tilbake?");
define("INV_INSTR_INVOICE_CLAIM_BACK", "Vil du trekker fra avgiftsbel�pet p� denne fakturaen (hvis noen) fra avgiftsrapporten p� avskrivningsdatoen? (Gjelder bare hvis du betaler avgifter f�r faktura er betalt)");
define("INV_WRITTEN_OFF_DATE_REQUIRED", "Angi datoen for n�r denne fakturaen ble avskrevet.");
define("INV_VENDOR", "Leverand�r");
define("INV_INVOICE_TAX_RATE", "Avgiftssats");
define("INV_INVOICE_CARRIAGE_TAX_RATE", "Sats for transportavgift");
define("INV_INSTR_INVOICE_TAX_RATE", "Standarden avgiftssats for � automatisk beregne avgiftsgrunnlag p� denne fakturaen (faktisk avgiftsbel�p kan fortsatt overstyres under)");
define("INV_INSTR_INVOICE_CARRIAGE_TAX_RATE", "Standard avgiftssats for transport, som brukes til automatisk � beregne avgiften p� transport uavhengig av mengde p� denne fakturaen (faktisk avgiftsbel�p kan overstyres under)");
define("INV_EMAIL_INVOICE_INTRO_ATTACH", "Hei %s,\n\nF�lgende faktura er vedlagt.\n\n");
define("INV_EMAIL_ATTACH", "Legg ved faktura som HTML?");
define("INV_INVOICE_VENDOR_NAME_REQUIRED", "Du m� oppgi navn p� leverand�ren.");
define("INV_INVOICE_VENDOR_ADDRESS_REQUIRED", "Du m� angi leverand�rens adresse");
define("INV_INSTR_VENDOR_NAME", "");
define("INV_INSTR_VENDOR_ADDRESS", "");
define("INV_AUTO_INVOICE_INTRO", "%s faktura(er) er opprettet. Dato for opprettelse: %s. Dato og klokkeslett: %s");
define("INV_AUTO_INVOICE_CURRENCY", "Valuta");
define("INV_AUTO_INVOICE_EMAILED", "E-post sendt til kunde?");
define("INV_AUTO_INVOICE_YES", "Ja");
define("INV_AUTO_INVOICE_NO", "Nei");
define("INV_AUTO_INVOICE_SUBJECT", INV_BRANDING_NAME . " automatisk fakturagenerator");
define("INV_AUTO_INVOICE_FAILURE", "FEIL");
define("INV_AUTO_INVOICE_NO_LICENSE", INV_BRANDING_NAME . " sin lisenskode er feil, eller ble ikke funnet");
define("INV_INVOICE_SHOW_PAYLINK", "Vis betalingslink?");
define("INV_INSTR_INVOICE_SHOW_PAYLINK", "Om link 'Betal denne faktura' skal vises eller ikke. Verdien av den globale innstillingen avhenger av ordreantallet - hvis aktuelt - eller, visningsalternativene (du kan angi en fast betalingsfrekvens - se visningsarternativene for mer informasjon). Betalingslinken vises bare hvis fakturaen ikke er betalt og en standard betalingskanal er angitt p� leverand�ren, og brutto totalt p� fakturaen er st�rre enn null.");
define("INV_INVOICE_PAYLINK_USE_GLOBAL", "Bruk global");
define("INV_INVOICE_PAYLINK_SHOW", "Vis");
define("INV_INVOICE_PAYLINK_HIDE", "Skjul");

/* Version 1.1.4 */
define("INV_INVOICE_ORDER_NO", "Ordrenr.");

//Version 1.2.0
define("INV_INVOICE_LOOKUP_SKU", "Sl� opp varenr.");

//Version 1.2.0 SP2
define("INV_PAYLINK", "Betalingslink");
define("INV_INVOICE_SELECT_PRODUCT", "Velg produkt");

//Version 1.2.1
define("INV_INVOICE_SHOW_ALL", "Vis alle");
define("INV_INVOICE_SHOW_ALL_UNPAID", "Vis bare ubetalte");
define("INV_INVOICE_SHOW_RESET", "Tilbakestill datoperioden");
define("INV_SHOW_INCOME_RECORDS", "Vis relaterte inntektsposter");
define("INV_SHOW_EXPENDITURE_RECORDS", "Vis relaterte utgiftsposter");
define("INV_SHOW_ORDER_RECORDS", "Vis relaterte ordreposter");
define("INV_EMAIL_ATTACH_OPTIONS", "Vedlegg");
define("INV_EMAIL_ATTACH_HTML", "HTML");
define("INV_EMAIL_ATTACH_PDF", "PDF");
define("INV_EMAIL_ATTACH_NONE", "Ingen");
define("INV_EMAIL_NOT_DUE_ADHOC", "E-post ble ikke sendt (ad hoc-faktura blir ikke automatisk sendt p� e-post).");

//Version 1.2.6
define("INV_INVOICE_RECORD_LIMIT_WARNING", "ADVARSEL! Det er %s eller flere kunder i databasen. Bare de %s f�rste postene vises i listen over. Hvis kunden du trenger er ikke her, kan du enten klikke p� \"Vis alle\" (nedenfor), eller velge \"Opprett ny faktura\"-ikonet p� kundelisten (den aktuelle posten vil da automatisk bli valgt her).");
?>
