<?php
/**
* @version 1.1.x
* @package nBill
* @copyright (C) 2006-2007 Netshine Software Limited
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

global $mosConfig_live_site;

//Installation
define("INV_INSTALL_COMPLETE", INV_BRANDING_NAME . " installasjonen fullført.");
define("INV_DB_ERRORS", INV_BRANDING_NAME . " ble installert, men en eller flere databasefeil oppsto under installasjonen. Feilene vises nedenfor.");
define("INV_CANNOT_UPGRADE", "Beklager, du kan ikke oppgradere fra en versjon lavere enn 1.1.0. Vennligst avinstaller denne versjonen og installer deretter 1.1.0 for å oppdatere din database, deretter kan du forsøke oppdateringen til denne versjonen igjen.");
define("INV_UPGRADED_SUCCESSFULLY", "Din installasjon av " . INV_BRANDING_NAME . " ble vellykket oppdatert.");

//Home
define("INV_WELCOME", "Velkommen til " . INV_BRANDING_NAME . "!");
define("INV_WELCOME_BETA", "Velkommen til " . INV_BRANDING_NAME . " BETA!");
define("INV_HOME_PAGE_TEXT","For å komme i gang, klikk på hvert av menyvalgene ovenfor etter tur - de er sortert etter rekkefølgen du behøver å klargjøre ting i. Så start med Konfigurasjon->Global konfigurasjon, sett deretter opp dine valutaer, dine selgere osv. De fleste sidene inkluderer nyttige kommentarer som vil guide deg gjennom prosessen. Vennligst gå til %s for dokumentasjon og brukerstøtte.");
define("INV_HELP", "Hjelp");

//Licensing
define("INV_LICENSE_INVALID", "Din lisensnøkkel er ikke gyldig. Den kan ha utløpt, eller er ugyldig for domenet du forsøker å bruke den på. Vennligst kontakt " . INV_BRANDING_COMPANY . " for en gyldig lisensnøkkel for dette domenet. MERK: Om du fyller inn feil lisensnøkkel mer enn 12 ganger vil du bli utestengt! Vennligst kontakt brukerstøtten om din nøkkel ikke virker.");
define("INV_NEW_LICENSE_KEY", "Fyll inn ny lisensnøkkel her:");
define("INV_RETURN_TO_MAIN", "Klikk her for å gå tilbake til din konto");
define("INV_LIC_SERVER_NAME", "Servernavn: ");
define("INV_LIC_EXPIRY", "Lisens utløper: ");
define("INV_YOUR_DOMAIN", "Ditt domene er: ");
define("INV_NO_EXPIRY", "Ingen utløp, du har en livstidslisens");
define("INV_ACCEPT_TERMS", "Jeg har lest, forstått og akseptert %s");
define("INV_EULA", "sluttbrukerlisensen (åpnes i et nytt vindu)");
define("INV_PLEASE_ACCEPT_TERMS", "Beklager, du må krysse av i boksen for å bekrefte at du aksepterer sluttbrukerlisensen  før du kan fortsette.");
define("INV_LOCKED_OUT_TITLE", "Tilgang har blitt blokkert!");
define("INV_LOCKED_OUT_DESC", "Du har forsøkt å få tilgang til komponenten for mange ganger med ugyldig nøkkel, komponenten har derfor blitt blokkert nå. For å låse den opp igjen behøver du en egen nøkkel for dette, til å fylle inn nedenfor. Denne kan du få ved å sende en e-post til: " . INV_BRANDING_SUPPORT_EMAIL . ", og sitere referanse '%s', samt ditt domenenavn (%s)");
define("INV_UNBLOCK_KEY", "Opplåsingsnøkkel");
define("INV_UNBLOCK_KEY_INVALID", "Beklager, denne opplåsingsnøkkelen var ugyldig.");
define("INV_LICENSE_EXPIRED", "Din lisens utløp %s");
define("INV_BLACKLISTED", "Ditt domenenavn har blitt svartelistet (typisk vil dett være på grunn av et tilbaketrekk av betaling, etter bestilling). Du har ikke tillatelse til å fortsette. Vennligst kontakt oss om du mener dette er en feil.");

//Global
define("INV_ALL", "[vis alle]");
define("INV_NONE", "[ingen]");
define("INV_NOTES", "Merknader");
define("INV_INSTR_VENDOR_ID", "Velg selger som denne oppføringen er assosiert med.");
define("INV_INSTR_NOTES", "Merknader er for dine egne kommentarer, påminnelser osv.. De blir ikke brukt av komponenten til annet enn å indikere at en oppføring ble automatisk generert.");
define("INV_MISCELLANEOUS", "Diverse");
define("INV_ROOT", "Rot");
define("INV_NOT_APPLICABLE", "Gjelder ikke");
define("INV_TAX", "MVA");
define("INV_FOR", "for");
define("INV_TO", "til");
define("INV_GO", "Bruk");
define("INV_DATE_RANGE", "Fra");
define("INV_ERR_COULD_NOT_GET_NEXT_NO", "Komponenten kunne ikke identifisere neste %s-nummer ettersom databasefeltet for øyeblikket var låst av en annen prosess. Om problemet vedvarer kan du låse opp %s-nummerfeltet ved å redigere selgeroppføringen.");
define("INV_ERR_NO_NOT_NUMERIC", "Neste %s-nummer for denne selgeren er ikke numerisk. Oppdater selgeroppføringen for å spesifisere en numerisk %s-nummerserie, eller fyll inn %s-nummer manuelt.");
define("INV_ERR_NO_NOT_FOUND", "Neste %s-nummer for denne selgeren ble ikke funnet. Du må kanskje fylle inn %s-nummer manuelt.");
define("INV_PREV", "<< Forrige");
define("INV_NEXT", "Neste >>");
define("INV_SAVE_CHANGES", "Du gjorde endringer til data på denne siden men har ikke lagret. Klikk OK, om du ønsker å lagre før du går videre. Eller klikk Avbryt om du ønsker å gå videre uten å lagre");  //Don't use apostrophes or speech marks in this text
define("INV_SELECT", "Velg");
define("INV_DESELECT", "Fravelg");
define("INV_UNKNOWN", "Ukjent");
define("INV_NEW", "Ny");
define("INV_BACK", "Tilbake");
define("INV_NO_EMAIL", "Ikke send fakturaer i e-post");
define("INV_EMAIL_INVOICE", "Send faktura til kunde (html e-post)");
define("INV_EMAIL_NOTIFICATION", "Send melding til kunde (ren tekste-post med instrukser om å logge på siden)");
define("INV_CLOSE_WINDOW", "Lukk vindu");
define("INV_NO_ACTION_TAKEN", "Ingen handling utført.");
define("INV_ADMIN_IMAGE", "style=\"height:54px; padding-left: 54px; background-image: url('$mosConfig_live_site/components/com_netinvoice/images/icons/large/%s.gif') !important;background-position:left;background-repeat:no-repeat;\"");
define("INV_NUMERIC_ONLY", "Feltet `%s` krever en numerisk verdi, du kan bare fylle inn nummer her.");
define("INV_INVALID_DATE_FIELD", "Feltet `%s` krever en dato. Vennligst skriv inn dato med dette formatet %s.");
define("INV_ERR_SERIOUS_ERROR", "Beklager, men en feil har oppstått. En e-post som beskriver feilen er sendt til administrator. Beklager denne hendelsen.");
define("INV_ERR_SERIOUS_ERROR_ADMIN", "Beklager, men en feil har oppstått. En e-post som beskriver feilen er sendt til administrator (som definert på konfigurasjonssiden  " . INV_BRANDING_NAME . "). Beklager denne hendelsen.");
define("INV_ERR_SERIOUS_ERROR_NOMAIL", "Beklager, men en feil har oppstått. Det ble heller ikke sende en e-post som inneholder opplysninger om feilen til riktig person. Vennligst kontakt eieren av nettstedet (%s) og informer om denne feilen (som er registrert i deres database og / eller PHP feillogg). Beklager denne hendelsen.");
define("INV_ERR_SERIOUS_ERROR_NOMAIL_ADMIN", "Beklager, men en feil har oppstått. Det ble heller ikke sende en e-post som inneholder opplysninger om feilen til riktig person (som definert på konfigurasjonssiden " . INV_BRANDING_NAME . "). Etter som denne feilen oppstod i kontrollpanelet, er detaljer om feilen angitt nedenfor. Beklager denne hendelsen.");
define("INV_ERR_REPORT_INTRO", "En feil har oppstått i " . INV_BRANDING_NAME . " (forsiden)! Detaljer om feilen er angitt nedenfor:\n\n");
define("INV_ERR_REPORT_INTRO_ADMIN", "En feil har oppstått i " . INV_BRANDING_NAME . " (administrasjonen)! Detaljer om feilen er angitt nedenfor:\n\n");
define("INV_ID", "ID");
define("INV_PRODUCT_SETUP_FEE", "Registreringsavgift");
define("INV_PRODUCT_NEGATIVE_SETUP_FEE", "Rabattert prøveperiode");
define("INV_EMAIL_INVOICE_ATTACH", "Send faktura til kunden som et vedlegg (e-post som ren tekst) - Anbefalt");
define("INV_ERR_MASTER_DB_CONNECT", "Kunne ikke koble til hoveddatabasen!");
define("INV_ERR_MASTER_DB_LOOP", "PROCESS ABORTED! Du synes å ha en løkke av hoveddatabaser. Sjekk at det for hver database bare er en hoveddatabase.");
define("INV_ERR_MASTER_DB_TOO_OLD", "Hoveddatabase tilhører en annen versjon av" . INV_BRANDING_NAME . ". Kontroller at alle databaser kjører samme versjon.");
define("INV_PRINTER_FRIENDLY", "Utskriftsvennlig versjon");
define("INV_DATE_PRINTED", "Dato skrevet ut: ");
define("INV_ERR_COULD_NOT_CREATE_USER", "ADVARSEL! Selv om bestillingsskjemaet er satt til automatisk å opprette en bruker, var det ikke mulig å opprette en bruker fra denne bestillingen. Dette kan skje dersom feltet for e-post er blankt (e-postadressen er nødvendig for å legge til en ny bruker).");
define("INV_CSV_DOWNLOAD", "Last ned CSV");
define("INV_CSV_DOWNLOAD_DESC", "Last ned denne rapporten som en CSV fil (som kan åpnes i ett regneark f. eks MS Excel, eller importerer inn i et annen program)");
define("INV_EMAIL_DOWNLOADS_SUBJECT", "Nedlastbare produkt(er) er vedlagt - Bestillingsnummer: %s");

//The following have been moved from other sections (used in more than one place)
define("INV_VENDOR_NAME", "Selgers navn");
define("INV_CLIENT", "Kunde");
define("INV_TAX_EXEMPTION_CODE", "Skattefritakskode");
define("INV_EMAIL_INVOICE_OPTIONS", "Faktura varsel");
define("INV_NOMINAL_LEDGER_CODE", "Hovedbokskode");
define("INV_INSTR_NOMINAL_LEDGER_CODE", "");
define("INV_ENTER_OVERRIDE_DATE", "Skriv inn dato (YYYY/MM/DD) til den dato du vil lage faktura for. Ingen faktura blir generert for bestillinger etter denne dato."); //Need to keep this quite short, as it is used in a javascript prompt which is a fixed size in IE
define("INV_PRODUCT_CATS", "Kategori");
define("INV_INVOICE_DETAILS", "Fakturadetaljer");
define("INV_CARRIAGE_SERVICE", "Transportør");
define("INV_SELECT_CLIENT", "Kunde");
define("INV_INSTR_SELECT_CLIENT", "");
define("INV_VENDOR_ADDRESS", "Selgers adresse");
define("INV_TAX_REFERENCE_DESC", "Avgiftsbeskrivelse");
define("INV_TAX_ABBREVIATION", "Forkortelse");
define("INV_INSTR_TAX_REFERENCE_DESC", "Skriv inn et besk Skriv inn et beskrivende navn på avgiftsnummeret (f. eks 'moms nr.')");
define("INV_INSTR_TAX_ABBREVIATION", "Skriv inn den vanlige forkortelsen for denne typen avgift (F. eks MVA)");
define("INV_TAX_REFERENCE_NO", "Avgift referansenummer");
define("INV_INSTR_TAX_REFERENCE_NO", "Skriv inn ditt firmas avgiftsnr. (f. eks ditt moms nummer), inkludert kommunekode (om gjeldende)");
define("INV_INSTR_TAX_EXEMPTION_CODE", "Hvis en avgift kan bortfalle på produktet pga en kundens moms nummer, eller kunden er en forhandler, oppgi referansen her.");
define("INV_EMAIL_ADDRESS", "E-postadresse");
define("INV_RELATING_TO", "Relatert til");
define("INV_CURRENCY", "Valuta");
define("INV_ORDER_DETAILS", "Ordredetaljer");
define("INV_CLIENT_NAME", "Kundenavn");
define("INV_ADD_INVOICE_ITEM", "Legg til produkt");
define("INV_REMOVE_INVOICE_ITEM", "Fjern produkt");
define("INV_INSTR_CURRENCY", "");
define("INV_INVOICES_GENERATED", "%s fakturaer generert.");
define("INV_REDIRECTED_TO_INVOICE_SUMMARY", "Du er blitt omdirigert til fakturaen oppsummeringsbilde.");
define("INV_PRODUCT_CATEGORY", "Kategorier");
define("INV_INVOICE_GENERATION_ERRORS", "En eller flere feil oppstod under forsøk på å generere fakturaer. Feilmeldingene er oppført nedenfor.");
define("INV_ERR_INVOICE_GENERATION_LOOP", "Generering av fakturaer synes å ha gått i lås. Prosess er stoppet. Den mest sannsynlige årsaken er at sluttdatoen for en bestilling ikke kan beregnes. Kontakt " . INV_BRANDING_COMPANY . " for hjelp.");
define("INV_ERR_COULD_NOT_INSERT_INVOICE_ITEM", "Kan ikke registrere fakturaer i databasen.");
define("INV_ERR_COULD_NOT_INSERT_DISCOUNT_INVOICE_ITEM", "Kan ikke registrere fakturaer i databasen for en rabatt.");
define("INV_MY_ACCOUNT", "Min konto");
define("INV_MY_PROFILE", "Min profil");
define("INV_MY_ORDERS", "Mine ordrer");
define("INV_MY_INVOICES", "Mine fakturaer");
define("INV_SUBMIT", "Lagre");
define("INV_CANCEL", "Avbryt");
define("INV_INVALID_DATE_ENTERED", "Oppgitt dato er ikke gyldig. Dato må fylles inn i følgende format: %s.");

//Main Menu
define("INV_MNU_HOME", "Hjem");
define("INV_MNU_HOME_DESC", "Hovedside");
define("INV_MNU_CONFIG", "Konfigurasjon");
define("INV_MNU_CONFIG_DESC", "Systemkonfigurasjon");
define("INV_MNU_GLOBAL_CONFIG", "Global konfigurasjon");
define("INV_MNU_GLOBAL_CONFIG_DESC", "Hovedinnstillinger for applikasjonen");
define("INV_MNU_VENDOR", "Selgere");
define("INV_MNU_VENDOR_DESC", "Administrer selgere (ditt eget firma/dine egne firmaer)");
define("INV_MNU_QUICK_LINKS", "Hurtiglenker:");
define("INV_MNU_CLIENTS", "Kunder");
define("INV_MNU_CLIENTS_DESC", "Administrer kunder");
define("INV_MNU_PRODUCTS", "Produkter");
define("INV_MNU_PRODUCTS_DESC", "Administrer produkter");
define("INV_MNU_ORDERS", "Ordrer");
define("INV_MNU_ORDERS_DESC", "Administrer ordrer");
define("INV_MNU_INVOICES", "Fakturaer");
define("INV_MNU_INVOICES_DESC", "Administrer fakturaer");
define("INV_MNU_CURRENCIES", "Valutaer");
define("INV_MNU_CURRENCIES_DESC", "Administrer valutaer");
define("INV_MNU_SALES_TAX", "Merverdiavgift (MVA)");
define("INV_MNU_SALES_TAX_DESC", "Administrer mva-sats");
define("INV_MNU_CARRIAGE", "Frakt/Levering");
define("INV_MNU_CARRIAGE_DESC", "Sett opp fraktvalg");
define("INV_MNU_NOMINAL_LEDGER", "Hovedbok");
define("INV_MNU_NOMINAL_LEDGER_DESC", "Administrer kostsenter");
define("INV_MNU_BACKUP_RESTORE", "Sikkerhetskopi/<br />Gjenoppretting");
define("INV_MNU_BACKUP_RESTORE_DESC", "Sikkerhetskopier eller gjenopprett dine data");
define("INV_MNU_BILLING", "Fakturering");
define("INV_MNU_BILLING_DESC", "Administrer kunder, produkter, ordrer og fakturaer");
define("INV_MNU_PRODUCT_CATS", "Produktkategorier");
define("INV_MNU_PRODUCT_CATS_DESC", "Administrer produktkategorier");
define("INV_MNU_CREDIT_NOTES", "Kreditnotaer (Refunderinger)");
define("INV_MNU_CREDIT_NOTES_DESC", "Administrer kreditnotaer");
define("INV_MNU_FRONT_END", "Forside");
define("INV_MNU_FRONT_END_DESC", "Administrer egenskaper relatert til nettsidens forside/brukersider");
define("INV_MNU_ORDER_FORMS", "Ordreskjemaer");
define("INV_MNU_ORDER_FORMS_DESC", "Administrer ordreskjemaer");
define("INV_MNU_GATEWAYS", "Betalingsmoduler");
define("INV_MNU_GATEWAYS_DESC", "Administrer betalingsmoduler");
define("INV_MNU_PENDING_ORDERS", "Ventende ordrer");
define("INV_MNU_PENDING_ORDERS_DESC", "Administrer ventende ordrer");
define("INV_MNU_ACCOUNTING", "Bokføring");
define("INV_MNU_ACCOUNTING_DESC", "Administrer inntekter og utgifter");
define("INV_MNU_INCOME", "Inntekter");
define("INV_MNU_INCOME_DESC", "Administrer inntekter");
define("INV_MNU_EXPENDITURE", "Utgifter");
define("INV_MNU_EXPENDITURE_DESC", "Administrer utgifter");
define("INV_MNU_AUDIT_LOG", "Besøkslogg");
define("INV_MNU_AUDIT_LOG_DESC", "Se besøkslogg");
define("INV_MNU_REPORTS", "Rapporter");
define("INV_MNU_REPORTS_DESC", "Produser rapporter");
define("INV_MNU_JACL_VOUCHER", "ACL oppgrader rabatter");
define("INV_MNU_JACL_VOUCHER_DESC", "Definer kupongkoder for å oppgradere abonnementsnivå");
define("INV_MNU_DISPLAY_OPTIONS", "Visningsvalg");
define("INV_MNU_DISPLAY_OPTIONS_DESC", "Angi hva som skal vises på forsiden/brukersiden");
define("INV_MNU_TAX_SUMMARY", "MVA-rapport");
define("INV_MNU_TAX_SUMMARY_DESC", "Produser mva-rapport for en gitt datoperiode");
define("INV_MNU_EXTENSIONS", "Utvidelser");
define("INV_MNU_EXTENSIONS_DESC", "Tredjeparts utvidelser for " . INV_BRANDING_NAME);
define("INV_MNU_EXTENSIONS_INSTALL", "Installer utvidelser");
define("INV_MNU_EXTENSIONS_INSTALL_DESC", "Installer en tredjeparts utvidelse for " . INV_BRANDING_NAME . ".");
define("INV_MNU_SUPPLIERS", "Leverandører");
define("INV_MNU_SUPPLIERS_DESC", "Administrer leverandører");
define("INV_MNU_EXPENDITURE_LIST", "Utgiftsposter");
define("INV_MNU_EXPENDITURE_LIST_DESC", "Administrer utgiftsposter på betalinger");
define("INV_MNU_DISCOUNTS", "Rabatter");
define("INV_MNU_DISCOUNTS_DESC", "Administrer rabattregler");
define("INV_MNU_IO", "Importer/Eksporter");
define("INV_MNU_IO_DESC", "Importer eller eksporter data");
define("INV_MNU_IO_CLIENTS", "Kunder");
define("INV_MNU_IO_CLIENTS_DESC", "Importer eller eksporter kundeoppføringer");
define("INV_MNU_PAYMENT_LINK", "Generering av betalingslenke");
define("INV_MNU_PAYMENT_LINK_DESC", "Generer en betalingslenke som du kan sende til en kunde");
define("INV_MNU_GATEWAY_FUNCTIONS", "%s funksjoner");
define("INV_MNU_GATEWAY_FUNCTIONS_DESC", "Utvidet funksjonalitet for %s-betalingsmodulen.");
define("INV_MNU_TRANSACTION_REPORT", "Transaksjonsrapport");
define("INV_MNU_TRANSACTION_REPORT_DESC", "List opp alle inntekter/utgifter etter dato, med summering");
define("INV_MNU_LEDGER_REPORT", "Hovedbok");
define("INV_MNU_LEDGER_REPORT_DESC", "Oppsummering hovedbok");
define("INV_MNU_REMINDERS", "Påminnelser");
define("INV_MNU_REMINDERS_DESC", "Konfigurer valg for utsendelse av påminnelser på e-post");

//Account Expiry
define("INV_SUB_EXPIRY_MESSAGE", "<h1>Din brukerkonto har blitt %s</h1><br /><br />Grunnen til dette er at %s<br /><br />Vennligst kontakt oss om du har noen spørsmål rundt dette.");
define("INV_SUB_EXPIRY_BLOCKED", "</strong>blokkert</strong>");
define("INV_SUB_EXPIRY_DELETED", "</strong>slettet</strong>");
define("INV_SUB_EXPIRY_DOWNGRADED", "<strong>nedgradert</strong> til '%s'");
define("INV_SUB_EXPIRY_REASON_CANCELLED", "din ordre på brukerabonnement har blitt annullert.");
define("INV_SUB_EXPIRY_REASON_DELETED", "din ordre på brukerabonnement har blitt slettet.");
define("INV_SUB_EXPIRY_REASON_EXPIRED", "ditt brukerabonnement har utløpt.");
define("INV_SUB_EXPIRY_REASON_NOT_RENEWED", "ditt brukerabonnement har ikke blitt fornyet. Kontakt oss for å fornye ditt abonnement, slik at du kan fortsette å bruke siden med dine tidligere rettigheter.");
define("INV_SUB_EXPIRY_REASON_UNKNOWN", "ukjent. Vennligst kontakt oss om du mener dette er en feil.");
define("INV_CONTINUE", "Klikk her for å fortsette");
define("INV_CONTINUE_HOME", "Klikk her for å returnere til hjemmesiden.");

//Version checking
define("INV_SOFTWARE_OOD", "ADVARSEL! Din kopi av " . INV_BRANDING_NAME . " er utdatert. Du forsøker å kjøre en gammel versjon av " . INV_BRANDING_NAME . " med en nyere versjon av databasen, dette vil føre til programfeil. Vennligst oppdater din programvare (se " . INV_BRANDING_WEBSITE . ").");
define("INV_DATABASE_OOD", "ADVARSEL! Din database må oppdateres. Om dette ikke gjøres vil det resultere i programfeil. %s for å oppdatere nå.");
define("INV_CLICK_HERE", "Klikk her");
define("INV_NEW_VERSION_AVAILABLE", "En ny versjon av " . INV_BRANDING_NAME . " (%s) er nå tilgjengelig.");
define("INV_NEW_VERSION_MANUAL", "Denne versjonen kan ikke installeres automatisk, du må oppdatere manuelt (se dokumentasjon for detaljer)");
define("INV_PATCH_COPY_FAILURES", "Et forsøk ble gjort på installere en oppdateringspakke men følgende filer kunne ikke kopieres. Vennligst last ned pakken fra " . INV_BRANDING_NAME . "-nettsiden og installer manuelt.");
define("INV_PATCH_DB_ERRORS", "Et forsøk ble gjort på å installere en oppdateringspakke men følgende databasefeil oppstod. Du må kanskje laste ned pakken fra " . INV_BRANDING_NAME . "-nettsiden og installere manuelt.");
define("INV_PATCH_FAILED_TO_INSTALL", "Et forsøk ble gjort på å installere en oppdateringspakke men en eller flere feil oppstod. Dette er kanskje på grunn av at dine fil- og mapperettigheter ikke tillater PHP å overskrive filene, eventuelt kan det være problemer med forbindelsen til serveren hvor oppdateringspakken ligger. Vennligst forsøk igjen senere, eller last ned pakken fra " . INV_BRANDING_NAME . "-nettsiden og installer manuelt.");
define("INV_AUTO_UPDATE_DISABLED", "Automatisk oppdatering har blitt deaktivert. For å slå på funksjonen igjen se på siden %sGlobal konfigurasjon%s.");
define("INV_NO_NEW_VERSION_AVAILABLE", "Du har allerede den nyeste versjonen, ingen nyere er tilgjengelig for øyeblikket.");
define("INV_PATCH_INSTALLED", "Din programvare har blitt oppdatert, du kjører nå nyeste versjon.");
define("INV_TO_UPGRADE_NOW", "%s for å oppdatere nå."); //Used in conjunction with INV_CLICK_HERE
define("INV_UNABLE_TO_CHECK_VERSION", "Beklager, en tilkobling til den nettbaserte versjonsjekken kunne ikke opprettes. Dette kan være fordi du ikke har tilgang til internett, eller tjeneren kan være ute av drift for øyeblikket. Vi vet derfor ikke om du kjører nyeste versjon eller ikke. Vennligst forsøk igjen senere, eller sjekk på " . INV_BRANDING_NAME . "-nettsiden.");

//Toolbar
define("INV_TB_NEW", "Ny");
define("INV_TB_EDIT", "Rediger");
define("INV_TB_DELETE", "Slett");
define("INV_TB_SAVE", "Lagre");
define("INV_TB_APPLY", "Bruk");
define("INV_TB_CANCEL", "Avbryt");
define("INV_TB_PREVIEW_HTML", "Forhåndsvis HTML");
define("INV_TB_PREVIEW_PDF", "Forhåndsvis PDF");
define("INV_TB_GENERATE_ALL", "Generer alle");
define("INV_TB_GENERATE", "Generer");
define("INV_TB_ACTIVATE", "Aktiver");
define("INV_TB_SELECT_ITEM_TO_DELETE", "Vennligst velg hva du vil slette fra listen");
define("INV_TB_DELETE_ARE_YOU_SURE", "Er du sikker på at du ønsker å slette valgte elementer?");
define("INV_TB_SELECT_ITEM_TO_EDIT", "Vennligst velg hva du vil redigere fra listen");
define("INV_TB_SELECT_ITEM_TO_GENERATE", "Vennligst velg ordre fra listen som du vil generere faktura for");
define("INV_TB_SELECT_ITEM_TO_PREVIEW", "Vennligst velg hva du vil forhåndsvise fra listen");
define("INV_TB_BACK", "Tilbake");

/***************************/
/* Version 1.1.4
/* Note to translators:
/* Branding constants removed (previously lines 25 to 38)
/* INV_SUB_EXPIRY_MESSAGE on line 236 (in the English file, previously 250) has been amended to use <br /> instead of 

/* INV_ADMIN_IMAGE on line 85 (in the English file, previously 99) has been changed to point to the front-end images folder
/***************************/

// Version 1.2.0
define("INV_MNU_STYLESHEET_WARNING", "ADVARSEL! Din Din ADMIN mal laster ikke nBill stilsett. Alt vil se galt ut med mindre du legge til en kode til din admin mal. Se %s.");
define("INV_MNU_STYLESHEET_WARNING_1011", "ADVARSEL! Du bruker en utdatert og USIKKER versjon av Joomla! En sideeffekt av dette er at ADMIN malen ikke laster nBill stilsettet. Alt vil se galt ut med mindre du enten oppgradere Joomla (anbefales), eller legge til en kode i admin mal din. Se %s.");
define("INV_LICENSE_EXPIRES_SOON", "ADVARSEL! Din lisens utløper snart (%s).");
define("INV_LIC_EXP_ANNUAL", " Hvis du ønsker å fornyes for ett år nå uten å miste noe av gjenværende tid på denne lisensen, vennligst logg deg inn på " . INV_BRANDING_WEBSITE . " og fornye din *eksisterende* bestilling (heller enn å bestille en ny).");
define("INV_LIC_EXP_TRIAL", " Hvis du fortsatt ønsker å bruke  " . INV_BRANDING_NAME . " etter denne datoen, kan du kjøpe en lisens på " . INV_BRANDING_WEBSITE);
define("INV_TXN_DETAILS", "Følgende oppføringer ble funnet for angitt transaksjonsnummer");
define("INV_TXN_NOT_FOUND", "Ingen oppføringer ble funnet for angitt transaksjonsnummer.");
define("INV_TXN_CLIENT", "Kunde");
define("INV_TXN_PENDING_ORDER", "Ventende ordre-id");
define("INV_TXN_FORM_TITLE", "Ordreskjema");
define("INV_TXN_DATE", "Dato");
define("INV_TXN_USERNAME", "Bruker");
define("INV_TXN_RELATING_TO", "Relatert til");
define("INV_TXN_AMOUNT", "Beløp");
define("INV_TXN_PRODUCT", "Produktdetaljer");
define("INV_TXN_ORDER_NO", "Ordrenummer");
define("INV_TXN_INVOICE_NO", "Fakturanummer");
define("INV_TXN_RECEIPT_NO", "Kvitteringsnummer");
define("INV_TXN_TYPE_PENDING", "Ventende ordre");
define("INV_TXN_TYPE_ORDER", "Ordrer");
define("INV_TXN_TYPE_INVOICE", "Fakturaer");
define("INV_TXN_TYPE_INCOME", "Inntekt");
define("INV_TXN_RECEIPT_NO_UNKNOWN", "Ikke definert ennå");
define("INV_MNU_TX_SEARCH", "Søk transaksjon");
define("INV_MNU_TX_SEARCH_HELP", "Søk etter oppføringer basert på transaksjonsnummer fra din betalingsformidler");

//Version 1.2.0 SP1
define("INV_ERR_COULD_NOT_CREATE_USER_REASON", "ADVARSEL! Selv om bestillingsskjemaet er satt til automatisk å opprette en bruker, var det ikke mulig å opprette en brukerkonto for denne bestillingen. Følgende feil ble rapportert: %s");

//Version 1.2.1
define("INV_CANNOT_UPGRADE_120", "Beklager, du kan ikke oppgradere fra en versjon før 1.2.0. Du må avinstallere denne versjonen, installerer versjon 1.2.0 for å oppgradere databasen, og deretter prøve å oppgradere til denne versjonen.");
define("INV_TEMP_NOT_WRITABLE", "Midlertidig PHP mappen ble ikke funnet eller ikke skrivbar ('%s') - fakturavedlegg kunne ikke lagres.");
define("INV_NO_WRITE_ACCESS", "PHP har ikke skrivetilgang til filen %s - fakturavedlegg kunne ikke lagres.");
define("INV_INVALID_CHARS_IN_FIELD", "%s inneholder ugyldige tegn. Bruk kun alfanumeriske tegn i dette feltet.");
define("INV_INVALID_CHARS_USERNAME", "Brukernavn");
define("INV_USERNAME_EXISTS", "Beklager, dette brukernavnet er allerede i bruk.");
define("INV_USER_EMAIL_EXISTS", "Beklager, denne e-postadressen er fortsatt i bruk.");
define("INV_EMAIL_INVALID", "E-postadressen du oppgav er ikke gyldig.");
define("INV_EMAIL_INVOICE_PDF", "Send faktura til kunde som et PDF vedlegg (e-post i ren tekst)");
define("INV_NO", "Nei");
define("INV_YES", "Ja");

//Version 1.2.3
define("INV_OFFLINE", "Faktura"); //Used as value for offline payments
// Note to translators:
//Line 90 of original English language file amended (INV_ERR_SERIOUS_ERROR_NOMAIL) - if database not available, full error reports are now logged to the PHP error log

//Version 1.2.4
define("INV_INSTALL_ERROR", "Beklager, det ser ut som nBill ikke ble installert helt riktig. Forsøk å avinstallere og så installere på nytt igjen. Om det ikke hjelper bør du ta en kikk på feilsøkingsseksjonen i dokumentasjonen på <a href=\"http://www.nbill.co.uk/documentation/\">www.nbill.co.uk/documentation</a>.<br /><br /><a href=\"index2.php\">Returner til kontrollpanelet</a>");

//Version 1.2.5
define("INV_LICENSE_NOT_WORKING", "<strong>MERK: Om din lisensnøkkel ikke vil virke bør du ta en kikk på feilsøkingsseksjonen i dokumentasjonen på: <a href=\"http://www.nbill.co.uk/documentation/index.php?page=license-key-is-not-accepted.html\" target=\"_blank\">http://www.nbill.co.uk/documentation/index.php?page=license-key-is-not-accepted.html</a>. Om du fortsatt ikke får det til å virke, etter å ha forsøkt alt som er listet her, kan du opprette en supportsak (vi vil behøve tilgang til din side som superadministrator for å kunne feilsøke).</strong>");

//Version 1.2.9
define("INV_RENEW_NOW", "Klikk her for å fornye nå");
?>
