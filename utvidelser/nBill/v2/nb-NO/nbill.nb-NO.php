<?php
/**
* Language file for General usage in administrator and front-end features
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

//Installation
define("NBILL_INSTALL_COMPLETE", NBILL_BRANDING_NAME . " er ferdig installert.");
define("NBILL_DB_ERRORS", NBILL_BRANDING_NAME . " ble installert, men en eller flere databasefeil oppstod under installasjonen. Feilene vises nedenfor.");
define("NBILL_CANNOT_UPGRADE", "Beklager, du kan ikke oppgradere fra en versjon lavere enn 1.1.0. Vennligst avinstaller denne versjonen og installer deretter 1.1.0 for å oppdatere din database, deretter kan du forsøke å oppgradere til denne versjonen igjen.");
define("NBILL_UPGRADED_SUCCESSFULLY", "Din installasjon av " . NBILL_BRANDING_NAME . " ble vellykket oppgradert.");

//Home
define("NBILL_WELCOME", "Velkommen til " . NBILL_BRANDING_NAME . "!");
define("NBILL_WELCOME_BETA", "Velkommen til " . NBILL_BRANDING_NAME . " BETA!");
define("NBILL_HOME_PAGE_TEXT","For å komme i gang, klikk på hvert av menyvalgene ovenfor etter tur - de er sortert etter rekkefølgen du må å klargjøre ting i.  Start med Konfigurasjon->Global konfigurasjon, sett deretter opp dine valutaer, dine leverandører osv. De fleste sidene inkluderer nyttige kommentarer som vil veilede deg gjennom prosessen. Vennligst gå til %s for dokumentasjon og brukerstøtte.");
define("NBILL_HELP", "Hjelp");

//Licensing
define("NBILL_NO_LICENSE_KEY", "Vennligst skriv inn din lisenskoden.");
define("NBILL_GET_KEY", "<ul><li>Hvis du ikke har en lisens, kan du få en 35 dagers gratis prøveversjon - vennligst %s for å bestille gratis prøveversjon.</li><li>For å kjøpe en årlig eller direkte lisenskode, %s</li><li>Hvis du nettopp har oppgradert nBill eller kopiert nettstedet ditt, og plutselig får du denne skjermen selv om du har en nøkkel, er det mulig at den automatiske oppgraderingen mislyktes, og i så fall, vennligst %s for å få en oppgradert kode.</li></ul>");
define("NBILL_LICENSE_INVALID", "Din lisensnøkkel er ikke gyldig. Den kan ha utløpt, eller er ugyldig for domenet du forsøker å bruke den på. Vennligst kontakt " . NBILL_BRANDING_COMPANY . " for en gyldig lisensnøkkel for dette domenet. MERK: Om du skiver feil lisensnøkkel mer enn 12 ganger, vil du bli utestengt! Vennligst kontakt brukerstøtte om din nøkkel ikke virker.");
define("NBILL_NEW_LICENSE_KEY", "Skriv ny lisensnøkkel her:");
define("NBILL_RETURN_TO_MAIN", "Klikk her for å gå tilbake til din konto");
define("NBILL_LIC_TYPE", "Lisenstype: ");
define("NBILL_LIC_TYPE_T", "Test");
define("NBILL_LIC_TYPE_L", "Lokalt nettserver");
define("NBILL_LIC_TYPE_S", "Enkelt nettsted");
define("NBILL_LIC_TYPE_D", "Hele domene");
define("NBILL_LIC_TYPE_F", "Komplett");
define("NBILL_LIC_DOMAIN", "Domene: ");
define("NBILL_LIC_LIVE_SITE", "Nettsted: ");
define("NBILL_LIC_EXPIRY", "Lisens utløper: ");
define("NBILL_YOUR_DOMAIN", "Ditt domene er: ");
define("NBILL_NO_EXPIRY", "Lisens utløper ikke. Du har en livstidslisens");
define("NBILL_ACCEPT_TERMS", "Jeg har lest, forstått og akseptert %s");
define("NBILL_EULA", "sluttbrukerlisensen (åpnes i et nytt vindu)");
define("NBILL_PLEASE_ACCEPT_TERMS", "Beklager, du må krysse av i boksen for å bekrefte at du aksepterer sluttbrukerlisensen  før du kan fortsette.");
define("NBILL_LOCKED_OUT_TITLE", "Tilgang har blitt blokkert!");
define("NBILL_LOCKED_OUT_DESC", "Du har forsøkt å få tilgang til komponenten for mange ganger med ugyldig nøkkel. Komponenten er derfor blitt blokkert. Vent 10 minutter, og deretter prøve på nytt");
define("NBILL_LICENSE_EXPIRED", "Din lisens utløp %s");
define("NBILL_BLACKLISTED", "Ditt domenenavn har blitt svartelistet (en vanlig grunn til dette kan være at betaling ble kansellert etter bestilling). Du har ikke tillatelse til å fortsette. Vennligst kontakt oss om du mener dette er en feil.");

//Global
define("NBILL_CONTINUE", "Klikk her for å fortsette");
define("NBILL_TRY_AGAIN", "Klikk her for å prøve igjen");
define("NBILL_CONTINUE_HOME", "Klikk her for å gå tilbake til startsiden.");
define("NBILL_ALL", "[vis alle]");
define("NBILL_NONE", "[ingen]");
define("NBILL_NOTES", "Merknader");
define("NBILL_INSTR_VENDOR_ID", "Velg selger som denne oppføringen er assosiert med.");
define("NBILL_INSTR_NOTES", "Merknader er for dine egne kommentarer, påminnelser osv.. De blir ikke brukt av komponenten til annet enn å indikere at en oppføring ble automatisk generert.");
define("NBILL_MISCELLANEOUS", "Diverse");
define("NBILL_ROOT", "Rot");
define("NBILL_NOT_APPLICABLE", "Gjelder ikke");
define("NBILL_TAX", "MVA");
define("NBILL_FOR", "for");
define("NBILL_TO", "til");
define("NBILL_GO", "Bruk");
define("NBILL_DATE_RANGE", "Fra");
define("NBILL_ERR_COULD_NOT_GET_NEXT_NO", "Komponenten kunne ikke identifisere neste %s-nummer fordi databasefeltet for øyeblikket var låst av en annen prosess. Om problemet vedvarer, kan du låse opp %s-nummerfeltet ved å redigere selgeroppføringen.");
define("NBILL_ERR_NO_NOT_NUMERIC", "Neste %s-nummer for denne selgeren er ikke numerisk. Oppdater selgeroppføringen for å spesifisere en numerisk %s-nummerserie, eller fyll inn %s-nummer manuelt.");
define("NBILL_ERR_NO_NOT_FOUND", "Neste %s-nummer for denne selgeren ble ikke funnet. Du må kanskje fylle inn %s-nummer manuelt.");
define("NBILL_PREV", "<< Forrige");
define("NBILL_NEXT", "Neste >>");
define("NBILL_SAVE_CHANGES", "Du har endret data uten å lagre på denne siden. Klikk OK, om du ønsker å lagre før du går videre. Klikk Avbryt om du ønsker å gå videre uten å lagre");  //Don't use apostrophes or speech marks in this text
define("NBILL_SELECT", "Velg");
define("NBILL_DESELECT", "Fjern fra utvalg");
define("NBILL_UNKNOWN", "Ukjent");
define("NBILL_NEW", "Ny");
define("NBILL_BACK", "Tilbake");
define("NBILL_CLOSE_WINDOW", "Lukk vindu");
define("NBILL_NO_ACTION_TAKEN", "Ingen handling utført.");
define("NBILL_ADMIN_IMAGE", "style=\"height:54px; padding-left: 54px; background-image: url('%s/images/icons/large/%s.gif') !important;background-position:left;background-repeat:no-repeat;\"");
define("NBILL_NUMERIC_ONLY", "Feltet `%s` krever en numerisk verdi. Du kan bare skrive inn tall her.");
define("NBILL_INVALID_DATE_FIELD", "Feltet `%s` krever en dato. Vennligst skriv inn dato med dette formatet: %s.");
define("NBILL_ERR_SERIOUS_ERROR", "Beklager, en feil har oppstått. En e-post som beskriver feilen er sendt til administrator. Beklager denne hendelsen.");
define("NBILL_ERR_SERIOUS_ERROR_ADMIN", "Beklager, en feil har oppstått. En e-post som beskriver feilen er sendt til administrator (som definert på konfigurasjonssiden til " . NBILL_BRANDING_NAME . "). Beklager denne hendelsen.");
define("NBILL_ERR_SERIOUS_ERROR_NOMAIL", "Beklager, en feil har oppstått. Komponenten kunne ikke sende en e-post som inneholder opplysninger om feilen til riktig person. Vennligst kontakt eieren av nettstedet (%s), og informer om denne feilen (som er registrert i deres database og/eller PHP-feillogg). Beklager denne hendelsen.");
define("NBILL_ERR_SERIOUS_ERROR_NOMAIL_ADMIN", "Beklager, en feil har oppstått. Komponenten var ikke i stand til å sende en e-post som inneholder opplysninger om feilen til riktig person (som definert på konfigurasjonssiden til " . NBILL_BRANDING_NAME . "). Siden denne feilen oppstod i kontrollpanelet, er detaljer om feilen angitt nedenfor. Beklager denne hendelsen.");
define("NBILL_ERR_REPORT_INTRO", "En feil har oppstått i " . NBILL_BRANDING_NAME . " (forsiden)! Detaljer om feilen er angitt nedenfor:\n\n");
define("NBILL_ERR_REPORT_INTRO_ADMIN", "En feil har oppstått i " . NBILL_BRANDING_NAME . " (administrasjonen)! Detaljer om feilen er angitt nedenfor:\n\n");
define("NBILL_ID", "ID");
define("NBILL_PRODUCT_SETUP_FEE", "Registreringsavgift");
define("NBILL_PRODUCT_NEGATIVE_SETUP_FEE", "Rabattert prøveperiode");
define("NBILL_ERR_MASTER_DB_CONNECT", "Kunne ikke koble til hoveddatabasen!");
define("NBILL_ERR_MASTER_DB_LOOP", "PROSESS BLE STOPPET! Du synes å ha en sløyfe av hoveddatabaser. Sjekk at det for hver database bare er en hoveddatabase.");
define("NBILL_ERR_MASTER_DB_TOO_OLD", "Hoveddatabase tilhører en annen versjon av " . NBILL_BRANDING_NAME . ". Kontroller at alle databaser kjører samme versjon.");
define("NBILL_PRINTER_FRIENDLY", "Utskriftsvennlig versjon");
define("NBILL_DATE_PRINTED", "Dato skrevet ut: ");
define("NBILL_ERR_COULD_NOT_CREATE_USER", "ADVARSEL! Selv om bestillingsskjemaet er satt til automatisk å opprette en bruker, var det ikke mulig å opprette en bruker fra denne bestillingen. Dette kan skje dersom feltet for e-post er blankt. (E-postadressen er nødvendig for å legge til en ny bruker).");
define("NBILL_CSV_DOWNLOAD", "Last ned CSV-fil");
define("NBILL_CSV_DOWNLOAD_DESC", "Last ned denne rapporten som en CSV-fil (som kan åpnes i et regneark f.eks. MS Excel, eller importerer inn i et annet program)");
define("NBILL_EMAIL_DOWNLOADS_SUBJECT", "Nedlastbare produkt(er) er vedlagt - Bestillingsnummer: %s");

//The following have been moved from other sections (used in more than one place)
define("NBILL_VENDOR_NAME", "Leverandørnavn");
define("NBILL_CLIENT", "Kunde");
define("NBILL_EMAIL_INVOICE_OPTIONS", "Fakturavarsel");
define("NBILL_NOMINAL_LEDGER_CODE", "Hovedbokskode");
define("NBILL_INSTR_NOMINAL_LEDGER_CODE", "");
define("NBILL_ENTER_OVERRIDE_DATE", "Skriv inn dato (YYYY/MM/DD) opp til den dato du vil lage fakturaer for. Ingen faktura blir laget for bestillinger etter denne dato."); //Need to keep this quite short, as it is used in a javascript prompt which is a fixed size in IE
define("NBILL_PRODUCT_CATS", "Kategori");
define("NBILL_INVOICE_DETAILS", "Fakturadetaljer");
define("NBILL_SHIPPING_SERVICE", "Transportør");
define("NBILL_SELECT_CLIENT", "Kunde");
define("NBILL_INSTR_SELECT_CLIENT", "");
define("NBILL_VENDOR_ADDRESS", "Leverandøradresse");
define("NBILL_TAX_REFERENCE_DESC", "Avgiftsbeskrivelse");
define("NBILL_TAX_ABBREVIATION", "Forkortelse");
define("NBILL_INSTR_TAX_REFERENCE_DESC", "Skriv inn et beskrivende navn på avgiftsnummeret (f.eks. 'moms nr.')");
define("NBILL_INSTR_TAX_ABBREVIATION", "Skriv inn den vanlige forkortelsen for denne typen avgift (f.eks. MVA)");
define("NBILL_TAX_REFERENCE_NO", "Avgiftsreferansenummer");
define("NBILL_INSTR_TAX_REFERENCE_NO", "Skriv inn ditt firmas avgiftsnr. (f.eks. ditt MVA-nummer), inkludert kommunekode (hvis tilgjengelig)");
define("NBILL_INSTR_TAX_EXEMPTION_CODE", "Hvis en avgift kan bortfalle på produktet grunnet en kundes MVA-nummer, eller kunden er en forhandler, oppgi referansen her.");
define("NBILL_EMAIL_ADDRESS", "E-postadresse");
define("NBILL_RELATING_TO", "Relatert til");
define("NBILL_CURRENCY", "Valuta");
define("NBILL_ORDER_DETAILS", "Ordredetaljer");
define("NBILL_CLIENT_NAME", "Kundenavn");
define("NBILL_ADD_INVOICE_ITEM", "Legg til produkt");
define("NBILL_REMOVE_INVOICE_ITEM", "Fjern produkt");
define("NBILL_INSTR_CURRENCY", "");
define("NBILL_INVOICES_GENERATED", "%s fakturaer generert.");
define("NBILL_REDIRECTED_TO_INVOICE_SUMMARY", "Du er blitt omdirigert til  oversikten for fakturaer.");
define("NBILL_PRODUCT_CATEGORY", "Kategorier");
define("NBILL_INVOICE_GENERATION_ERRORS", "En eller flere feil oppstod under forsøk på å generere fakturaer. Feilmeldingene er oppført nedenfor.");
define("NBILL_ERR_INVOICE_GENERATION_LOOP", "Generering av fakturaer synes å ha gått i lås. Prosess er stoppet. Den mest sannsynlige årsaken er at sluttdatoen for en bestilling ikke kan beregnes. Kontakt " . NBILL_BRANDING_COMPANY . " for hjelp.");
define("NBILL_ERR_COULD_NOT_INSERT_INVOICE_ITEM", "Kan ikke registrere fakturaer i databasen.");
define("NBILL_ERR_COULD_NOT_INSERT_DISCOUNT_INVOICE_ITEM", "Kan ikke registrere fakturaer i databasen for en rabatt.");
define("NBILL_MY_ACCOUNT", "Min konto");
define("NBILL_MY_PROFILE", "Min profil");
define("NBILL_MY_ORDERS", "Mine ordrer");
define("NBILL_MY_INVOICES", "Mine fakturaer");
define("NBILL_MY_QUOTES", "Mine forespørsler");
define("NBILL_SUBMIT", "Lagre");
define("NBILL_CANCEL", "Avbryt");
define("NBILL_INVALID_DATE_ENTERED", "Oppgitt dato er ikke gyldig. Dato må fylles inn i følgende format: %s.");

//Main Menu
define("NBILL_MNU_HOME", "Hjem");
define("NBILL_MNU_HOME_DESC", "Hovedside");
define("NBILL_MNU_CONFIG", "Konfigurasjon");
define("NBILL_MNU_CONFIG_DESC", "Systemkonfigurasjon");
define("NBILL_MNU_GLOBAL_CONFIG", "Global konfigurasjon");
define("NBILL_MNU_GLOBAL_CONFIG_DESC", "Hovedinnstillinger for applikasjonen");
define("NBILL_MNU_VENDOR", "Leverandører");
define("NBILL_MNU_VENDOR_DESC", "Administrer leverandører (ditt eget firma/dine egne firmaer)");
define("NBILL_MNU_QUICK_LINKS", "Hurtiglenker:");
define("NBILL_MNU_CLIENTS", "Kunder");
define("NBILL_MNU_CLIENTS_DESC", "Administrer kunder");
define("NBILL_MNU_PRODUCTS", "Produkter");
define("NBILL_MNU_PRODUCTS_DESC", "Administrer produkter");
define("NBILL_MNU_ORDERS", "Ordrer");
define("NBILL_MNU_ORDERS_DESC", "Administrer ordrer");
define("NBILL_MNU_INVOICES", "Fakturaer");
define("NBILL_MNU_INVOICES_DESC", "Administrer fakturaer");
define("NBILL_MNU_CURRENCIES", "Valutaer");
define("NBILL_MNU_CURRENCIES_DESC", "Administrer valutaer");
define("NBILL_MNU_SALES_TAX", "Merverdiavgift (MVA)");
define("NBILL_MNU_SALES_TAX_DESC", "Administrer avgiftssatser");
define("NBILL_MNU_SHIPPING", "Frakt/Levering");
define("NBILL_MNU_SHIPPING_DESC", "Sett opp fraktvalg");
define("NBILL_MNU_NOMINAL_LEDGER", "Hovedbok");
define("NBILL_MNU_NOMINAL_LEDGER_DESC", "Administrer kostsenter");
define("NBILL_MNU_BACKUP_RESTORE", "Sikkerhetskopi/<br />Gjenoppretting");
define("NBILL_MNU_BACKUP_RESTORE_DESC", "Sikkerhetskopiér eller gjenopprett dine data");
define("NBILL_MNU_BILLING", "Fakturering");
define("NBILL_MNU_BILLING_DESC", "Administrer kunder, produkter, ordrer og fakturaer");
define("NBILL_MNU_PRODUCT_CATS", "Produktkategorier");
define("NBILL_MNU_PRODUCT_CATS_DESC", "Administrer produktkategorier");
define("NBILL_MNU_CREDIT_NOTES", "Kreditnotaer (refunderinger)");
define("NBILL_MNU_CREDIT_NOTES_DESC", "Administrer kreditnotaer");
define("NBILL_MNU_FRONT_END", "Forside");
define("NBILL_MNU_FRONT_END_DESC", "Administrer egenskaper relatert til nettsidens forside/brukersider");
define("NBILL_MNU_ORDER_FORMS", "Ordreskjemaer");
define("NBILL_MNU_ORDER_FORMS_DESC", "Administrer ordreskjemaer");
define("NBILL_MNU_GATEWAYS", "Betalingsmoduler");
define("NBILL_MNU_GATEWAYS_DESC", "Administrer betalingsmoduler");
define("NBILL_MNU_PENDING_ORDERS", "Ventende ordrer");
define("NBILL_MNU_PENDING_ORDERS_DESC", "Administrer ventende ordrer");
define("NBILL_MNU_ACCOUNTING", "Bokføring");
define("NBILL_MNU_ACCOUNTING_DESC", "Administrer inntekter og utgifter");
define("NBILL_MNU_INCOME", "Inntekter");
define("NBILL_MNU_INCOME_DESC", "Administrer inntekter");
define("NBILL_MNU_EXPENDITURE", "Utgifter");
define("NBILL_MNU_EXPENDITURE_DESC", "Administrer utgifter");
define("NBILL_MNU_AUDIT_LOG", "Besøkslogg");
define("NBILL_MNU_AUDIT_LOG_DESC", "Se besøkslogg");
define("NBILL_MNU_REPORTS", "Rapporter");
define("NBILL_MNU_REPORTS_DESC", "Produser rapporter");
define("NBILL_MNU_JACL_VOUCHER", "ACL-oppgrader rabatter");
define("NBILL_MNU_JACL_VOUCHER_DESC", "Definer kupongkoder for å oppgradere abonnementsnivå");
define("NBILL_MNU_DISPLAY_OPTIONS", "Visningsvalg");
define("NBILL_MNU_DISPLAY_OPTIONS_DESC", "Angi hva som skal vises på forsiden/brukersiden");
define("NBILL_MNU_TAX_SUMMARY", "MVA-rapport");
define("NBILL_MNU_TAX_SUMMARY_DESC", "Produser mva-rapport for en gitt datoperiode");
define("NBILL_MNU_EXTENSIONS", "Utvidelser");
define("NBILL_MNU_EXTENSIONS_DESC", "Tredjeparts utvidelser for " . NBILL_BRANDING_NAME);
define("NBILL_MNU_EXTENSIONS_INSTALL", "Installer utvidelser");
define("NBILL_MNU_EXTENSIONS_INSTALL_DESC", "Installer en tredjeparts utvidelse for " . NBILL_BRANDING_NAME . ".");
define("NBILL_MNU_SUPPLIERS", "Leverandører");
define("NBILL_MNU_SUPPLIERS_DESC", "Administrer leverandører");
define("NBILL_MNU_EXPENDITURE_LIST", "Utgiftsposter");
define("NBILL_MNU_EXPENDITURE_LIST_DESC", "Administrer utgiftsposter på betalinger");
define("NBILL_MNU_DISCOUNTS", "Rabatter");
define("NBILL_MNU_DISCOUNTS_DESC", "Administrer rabattregler");
define("NBILL_MNU_IO", "Importer/Eksporter");
define("NBILL_MNU_IO_DESC", "Importer eller eksporter data");
define("NBILL_MNU_IO_CLIENTS", "Kunder");
define("NBILL_MNU_IO_CLIENTS_DESC", "Importer eller eksporter kundeoppføringer");
define("NBILL_MNU_PAYMENT_LINK", "Generering av betalingslenke");
define("NBILL_MNU_PAYMENT_LINK_DESC", "Generer en betalingslenke som du kan sende til en kunde");
define("NBILL_MNU_GATEWAY_FUNCTIONS", "%s funksjoner");
define("NBILL_MNU_GATEWAY_FUNCTIONS_DESC", "Utvidet funksjonalitet for %s-betalingsmodulen.");
define("NBILL_MNU_TRANSACTION_REPORT", "Transaksjonsrapport");
define("NBILL_MNU_TRANSACTION_REPORT_DESC", "List opp alle inntekter/utgifter etter dato, med summering");
define("NBILL_MNU_LEDGER_REPORT", "Hovedbok");
define("NBILL_MNU_LEDGER_REPORT_DESC", "Oppsummering hovedbok");
define("NBILL_MNU_REMINDERS", "Påminnelser");
define("NBILL_MNU_REMINDERS_DESC", "Konfigurer valg for utsendelse av påminnelser på e-post");
define("NBILL_MNU_EMAIL_LOG", "E-postlogg");
define("NBILL_MNU_EMAIL_LOG_HELP", "Vis en liste over alle e-poster sendt av systemet");
define("NBILL_MNU_FAVOURITES", "Favoritter");
define("NBILL_MNU_FAVOURITES_DESC", "Administrere hvilke ikoner som vises på hjemmesiden");

//Account Expiry
define("NBILL_SUB_EXPIRY_MESSAGE", "Vennligst vær oppmerksom på at din brukerkonto har blitt satt til %s. Grunnen til dette er: %s<br /><br />Vennligst kontakt oss om du har noen spørsmål om dette.");
define("NBILL_SUB_EXPIRY_BLOCKED", "</strong>blokkert</strong>");
define("NBILL_SUB_EXPIRY_DELETED", "</strong>slettet</strong>");
define("NBILL_SUB_EXPIRY_DOWNGRADED", "<strong>nedgradert</strong> til '%s'");
define("NBILL_SUB_EXPIRY_REASON_CANCELLED", "din ordre på brukerabonnement er blitt annullert.");
define("NBILL_SUB_EXPIRY_REASON_DELETED", "din ordre på brukerabonnement er blitt slettet.");
define("NBILL_SUB_EXPIRY_REASON_EXPIRED", "ditt brukerabonnement har utløpt.");
define("NBILL_SUB_EXPIRY_REASON_NOT_RENEWED", "ditt brukerabonnement har ikke blitt fornyet. Kontakt oss for å fornye ditt abonnement, slik at du kan fortsette å bruke siden med dine tidligere rettigheter.");
define("NBILL_SUB_EXPIRY_REASON_UNKNOWN", "ukjent. Vennligst kontakt oss om du mener dette er en feil.");

//Version checking
define("NBILL_SOFTWARE_OOD", "ADVARSEL! Din kopi av " . NBILL_BRANDING_NAME . " er utdatert. Du forsøker å kjøre en gammel versjon av " . NBILL_BRANDING_NAME . " med en nyere versjon av databasen. Dette vil føre til programfeil. Vennligst oppdater din programvare (se " . NBILL_BRANDING_WEBSITE . ").");
define("NBILL_DATABASE_OOD", "ADVARSEL! Din database må oppdateres. Om dette ikke gjøres, vil det føre til programfeil. %s for å oppdatere nå.");
define("NBILL_CLICK_HERE", "Klikk her");
define("NBILL_NEW_VERSION_AVAILABLE", "En ny versjon av " . NBILL_BRANDING_NAME . " (%s) er nå tilgjengelig.");
define("NBILL_NEW_VERSION_MANUAL", "Denne versjonen kan ikke installeres automatisk, du må oppdatere manuelt (se dokumentasjon for detaljer)");
define("NBILL_PATCH_COPY_FAILURES", "Et forsøk ble gjort på å installere en oppdateringspakke, men følgende filer kunne ikke kopieres. Vennligst last ned pakken fra " . NBILL_BRANDING_NAME . " sin nettside, og installer manuelt.");
define("NBILL_PATCH_DB_ERRORS", "Et forsøk ble gjort på å installere en oppdateringspakke, men følgende databasefeil oppstod. Du må kanskje laste ned pakken fra " . NBILL_BRANDING_NAME . " sin nettside og installere manuelt.");
define("NBILL_PATCH_FAILED_TO_INSTALL", "Et forsøk ble gjort på å installere en oppdateringspakke, men en eller flere feil oppstod. Dette er kanskje på grunn av at dine fil- og mapperettigheter ikke tillater PHP å overskrive filene, eventuelt kan det være problemer med forbindelsen til serveren hvor oppdateringspakken ligger. Vennligst forsøk igjen senere, eller last ned pakken fra " . NBILL_BRANDING_NAME . " sin nettside, og installer manuelt.");
define("NBILL_AUTO_UPDATE_DISABLED", "Automatisk oppdatering har blitt deaktivert. For å slå på funksjonen igjen, se på siden %sGlobal konfigurasjon%s.");
define("NBILL_NO_NEW_VERSION_AVAILABLE", "Du har allerede den nyeste versjonen. Ingen nyere er tilgjengelig for øyeblikket.");
define("NBILL_PATCH_INSTALLED", "Din programvare har blitt oppdatert. Du bruker nå siste versjon.");
define("NBILL_TO_UPGRADE_NOW", "%s for å oppdatere nå."); //Used in conjunction with NBILL_CLICK_HERE
define("NBILL_UNABLE_TO_CHECK_VERSION", "Beklager, en tilkobling til den nettbaserte versjonsjekken kunne ikke opprettes. Dette kan være fordi du ikke har tilgang til internett, eller tjeneren kan være ute av drift for øyeblikket. Vi vet derfor ikke om du kjører nyeste versjon eller ikke. Vennligst forsøk igjen senere, eller sjekk på " . NBILL_BRANDING_NAME . " sin nettside.");

//Toolbar
define("NBILL_TB_NEW", "Ny");
define("NBILL_TB_EDIT", "Rediger");
define("NBILL_TB_DELETE", "Slett");
define("NBILL_TB_SAVE", "Lagre");
define("NBILL_TB_APPLY", "Bruk");
define("NBILL_TB_CANCEL", "Avbryt");
define("NBILL_TB_PREVIEW_HTML", "Forhåndsvis HTML");
define("NBILL_TB_PREVIEW_PDF", "Forhåndsvis PDF");
define("NBILL_TB_GENERATE_ALL", "Generer alle");
define("NBILL_TB_GENERATE", "Generer");
define("NBILL_TB_ACTIVATE", "Aktiver");
define("NBILL_TB_SELECT_ITEM_TO_DELETE", "Vennligst velg hva du vil slette fra listen");
define("NBILL_TB_DELETE_ARE_YOU_SURE", "Er du sikker på at du ønsker å slette valgte elementer?");
define("NBILL_TB_DELETE_CONTACTS_TOO", " MERK: Dette vil også slette alle relaterte kontakt poster, med mindre de også er brukt andre steder.");
define("NBILL_TB_SELECT_ITEM_TO_EDIT", "Vennligst velg hva du vil redigere fra listen");
define("NBILL_TB_SELECT_ITEM_TO_GENERATE", "Vennligst velg ordre fra listen som du vil generere faktura for");
define("NBILL_TB_SELECT_ITEM_TO_PREVIEW", "Vennligst velg hva du vil forhåndsvise fra listen");
define("NBILL_TB_BACK", "Tilbake");
define("NBILL_TB_SAVE_COPY", "Lagre kopi");
define("NBILL_TB_GENERATE_SAVE_FIRST", "Vil du lagre posten først? (Hvis du klikker `Avbryt` vil du miste eventuelle endringer du har gjort i denne posten)");
define("NBILL_TB_DELETE_OLD", "Slett gammel");
define("NBILL_CLEAR_DOWN_OLD_BEFORE", "Skriv inn dato for å slette all e-post før denne datoen (i formatet yyyy/mm/dd).");
define("NBILL_CLEAR_DOWN_OLD_SURE", "Er du sikker på at du vil slette all e-post før denne datoen?");

/***************************/
/* Version 1.1.4
/* Note to translators:
/* Branding constants removed (previously lines 25 to 38)
/* NBILL_SUB_EXPIRY_MESSAGE on line 236 (in the English file, previously 250) has been amended to use <br /> instead of 

/* NBILL_ADMIN_IMAGE on line 85 (in the English file, previously 99) has been changed to point to the front-end images folder
/***************************/

// Version 1.2.0
define("NBILL_MNU_STYLESHEET_WARNING", "ADVARSEL! Din ADMIN-mal laster ikke nBill sitt stilsett. Alt vil se galt ut med mindre du legge til en kode til din admin-mal. Se %s.");
define("NBILL_MNU_STYLESHEET_WARNING_1011", "ADVARSEL! Du bruker en utdatert og USIKKER versjon av Joomla! En følge av dette, er at ADMIN-malen ikke laster nBill sitt stilsett. Alt vil se galt ut med mindre du enten oppgradere Joomla (anbefales), eller legger til en kode i admin-malen din. Se %s.");
define("NBILL_LICENSE_EXPIRES_SOON", "ADVARSEL! Din lisens utløper snart (%s).");
define("NBILL_LIC_EXP_ANNUAL", " Hvis du ønsker å fornye for ett år nå uten å miste noe av gjenværende tid på denne lisensen, vennligst logg deg inn på " . NBILL_BRANDING_WEBSITE . " og forny din *eksisterende* bestilling (heller enn å bestille en ny).");
define("NBILL_LIC_EXP_TRIAL", " Hvis du fortsatt ønsker å bruke  " . NBILL_BRANDING_NAME . " etter denne datoen, kan du kjøpe en lisens på " . NBILL_BRANDING_WEBSITE);
define("NBILL_TXN_DETAILS", "Følgende oppføringer ble funnet for angitt transaksjonsnummer");
define("NBILL_TXN_NOT_FOUND", "Ingen oppføringer ble funnet for angitt transaksjonsnummer.");
define("NBILL_TXN_CLIENT", "Kunde");
define("NBILL_TXN_PENDING_ORDER", "Ventende ordre-id");
define("NBILL_TXN_FORM_TITLE", "Ordreskjema");
define("NBILL_TXN_DATE", "Dato");
define("NBILL_TXN_USERNAME", "Bruker");
define("NBILL_TXN_RELATING_TO", "Relatert til");
define("NBILL_TXN_AMOUNT", "Beløp");
define("NBILL_TXN_PRODUCT", "Produktdetaljer");
define("NBILL_TXN_ORDER_NO", "Ordrenummer");
define("NBILL_TXN_INVOICE_NO", "Fakturanummer");
define("NBILL_TXN_RECEIPT_NO", "Kvitteringsnummer");
define("NBILL_TXN_TYPE_PENDING", "Ventende ordre");
define("NBILL_TXN_TYPE_ORDER", "Ordrer");
define("NBILL_TXN_TYPE_INVOICE", "Fakturaer");
define("NBILL_TXN_TYPE_INCOME", "Inntekt");
define("NBILL_TXN_RECEIPT_NO_UNKNOWN", "Ikke definert ennå");
define("NBILL_MNU_TX_SEARCH", "Søk transaksjon");
define("NBILL_MNU_TX_SEARCH_HELP", "Søk etter oppføringer basert på transaksjonsnummer fra din betalingsformidler");

//Version 1.2.0 SP1
define("NBILL_ERR_COULD_NOT_CREATE_USER_REASON", "ADVARSEL! Selv om bestillingsskjemaet er satt til automatisk å opprette en bruker, var det ikke mulig å opprette en brukerkonto for denne bestillingen. Følgende feil ble rapportert: %s");

//Version 1.2.1
define("NBILL_TEMP_NOT_WRITABLE", "Midlertidig PHP-mappe ble ikke funnet eller er ikke skrivbar ('%s') - fakturavedlegg kunne ikke lagres.");
define("NBILL_NO_WRITE_ACCESS", "PHP har ikke skrivetilgang til filen %s - fakturavedlegg kunne ikke lagres.");
define("NBILL_INVALID_CHARS_IN_FIELD", "%s inneholder ugyldige tegn. Bruk kun alfanumeriske tegn i dette feltet.");
define("NBILL_INVALID_CHARS_USERNAME", "Brukernavn");
define("NBILL_USERNAME_EXISTS", "Beklager, dette brukernavnet er allerede i bruk.");
define("NBILL_USER_EMAIL_EXISTS", "Beklager, denne e-postadressen er fortsatt i bruk.");
define("NBILL_EMAIL_INVALID", "E-postadressen du oppga er ikke gyldig.");
define("NBILL_NO", "Nei");
define("NBILL_YES", "Ja");

//Version 1.2.3
define("NBILL_OFFLINE", "Frakoblet");
// Note to translators:
//Line 90 of original English language file amended (NBILL_ERR_SERIOUS_ERROR_NOMAIL) - if database not available, full error reports are now logged to the PHP error log

//Version 1.2.4
define("NBILL_INSTALL_ERROR", "Beklager, det ser ut som om nBill ikke ble installert riktig. Forsøk å avinstallere og så installere på nytt igjen. Om dette ikke hjelper, bør du ta en kikk på feilsøkingsseksjonen i dokumentasjonen på <a href=\"http://" . NBILL_BRANDING_DOCUMENTATION . "\">" . NBILL_BRANDING_DOCUMENTATION . "</a>.<br /><br /><a href=\"index2.php\">Returner til kontrollpanelet</a>");

//Version 1.2.9
define("NBILL_RENEW_NOW", "Klikk her for å fornye nå");

//Version 2.0.0
define("NBILL_PAGE_START", "<< Start");
define("NBILL_PAGE_PREVIOUS", "< Forrige");
define("NBILL_PAGE_NEXT", "Neste >");
define("NBILL_PAGE_END", "Siste >>");
define("NBILL_DISPLAY", "Vis: ");
define("NBILL_RESULTS_PER_PAGE", "resultater per side.");
define("NBILL_RESULTS_SHOWING", "For tiden vises poster %s til %s (av %s)");
define("NBILL_TB_SELECT_ITEM_TO_IMPORT", "Vennligst gjør et valg fra listen til å importere");
define("NBILL_NOT_IN_DEMO_MODE", NBILL_NOT_IN_DEMO_MODE);
define("NBILL_MOVE_UP", "Flytt opp");
define("NBILL_MOVE_DOWN", "Flytt ned");
define("NBILL_MIGRATE", NBILL_BRANDING_NAME . " har oppdaget at det finnes tabeller for " . NBILL_BRANDING_NAME . " 1.2.x i databasen. <a href=\"%s\" onclick=\"%s\">%s</a> for å overføre disse dataene inn i " . NBILL_BRANDING_NAME . " %s<br /><br /><span style=\"color:#ff0000\">MERK:</span> > Det kan ta lang tid å overføre dataene.");
define("NBILL_MIGRATE_DELETE_WARNING", "ADVARSEL! Dette vil slette alle data som er lagret i " . NBILL_BRANDING_NAME . " %s. Det vil ikke påvirke dataene lagret i den gamle " . NBILL_BRANDING_NAME . " 1.2.x tabellene.");
define("NBILL_MIGRATE_NO_UPGRADE_SCRIPT", "Overføring mislyktes. Overføringsskriptet %s ble ikke funnet. Ingen handling utført.");
define("NBILL_MIGRATE_SUCCESS", "Overføring av data vellykket. Kjør en %s for å sjekke integriteten til data (en avviksrapporten er en ny funksjon som ser etter eventuelle feil eller uoverensstemmelser i postene).");
define("NBILL_MIGRATE_SUCCESS_WITH_GUESSES", "Data overføring var vellykket, MEN, " . NBILL_BRANDING_NAME . " måtte anta fordelingen av skatt for hovedboken på en eller flere transaksjoner. De berørte transaksjonene er oppført på hjemmesiden (de vil bli listet hver gang du går til hjemmesiden inntil du har bekrefte dem). I tillegg til å kontrollere denne listen, kan du kjøre en %s for å sjekke integriteten til data (en avviksrapporten er en ny funksjon som ser etter eventuelle feil eller uoverensstemmelser i postene).");
define("NBILL_MIGRATE_DB_ERRORS", "Overføring ble forsøkt utført, men en eller flere databasefeil oppstod. Feilene vises nedenfor (feilmelding kan være avkortet hvis de er veldig lange).");
define("NBILL_MIGRATE_BAIL_OUT", "Overføringen ble midlertidig stoppet fordi tiden det har tatt å behandle overføringen er nær tidsgrensen for PHP. Ikke alle data er overført ennå. For å fortsette med overføringen, vennligst %s.");
define("NBILL_CFG_MIGRATE_DATA", "Starter overføring (Trinn 1 av 5)");
define("NBILL_CFG_MIGRATE_ADDRESS", "Overfører adresser og avgiftsdata (Trinn 2 av 5)");
define("NBILL_CFG_MIGRATE_TXS", "Overfører transaksjonsdata (Trinn 3 av 5)");
define("NBILL_CFG_MIGRATE_LEDGER", "Overfører regnskapsdata (Trinn 4 av 5)");
define("NBILL_CFG_MIGRATE_FINISH", "Avslutter overføring (Trinn 5 av 5)");
define("NBILL_MIGRATE_ABORT", "Avbryt");
define("NBILL_MIGRATE_ABORT_SURE", "Er du sikker på at du vil avbryte overføringsprosessen? Det er ikke sikkert all data er blitt overført fra din gamle installasjon hvis du gjør det, og dette kan føre til uforutsigbar atferd og at programmet feiler.");
define("NBILL_MIGRATE_ABORTING", "Avbryter...");
define("NBILL_MIGRATE_ABORTED", "Overføring av data avbrutt");
define("NBILL_MIGRATE_RETRY", "Overføringsprosessen ikke ble fullført. For å prøve igjen fra der den stoppet, <a href=\"#\" onclick=\"%s;return false;\">Klikk her</a>.");
define("NBILL_MNU_SNAPSHOT", "Øyeblikksrapport");
define("NBILL_MNU_SNAPSHOT_HELP", "Vis detaljer om inntekter, utgifter, og beløp skyldig per en gitt dato");
define("NBILL_MNU_ANOMALY", "Avviksrapport");
define("NBILL_MNU_ANOMALY_HELP", "Vis detaljer om poster som synes å være utenom det vanlige");
define("NBILL_MNU_RECONCILE", "Avstemming");
define("NBILL_MNU_RECONCILE_HELP", "Avstemme nBill transaksjonene med kontoutskriftene fra banken");
define("NBILL_MNU_CONTACTS", "Kontakter");
define("NBILL_MNU_CONTACTS_HELP", "Administrere kontakter (personer som kan bli kunder, leverandører, begge, eller ingen)");
define("NBILL_MNU_POTENTIAL_CLIENTS", "Potensielle kunder");
define("NBILL_MNU_POTENTIAL_CLIENTS_HELP", "Administrere Potensielle kunder");
define("NBILL_MNU_PROFILE_FIELDS", "Kundeprofil");
define("NBILL_MNU_PROFILE_FIELDS_HELP", "Definer kjerneprofilfeltene som vises som standard på hvert skjema (kan også tilpasses i hvert enkelt skjema individuelt).");
define("NBILL_MNU_QUOTE_REQUEST", "Prisforespørselskjemaer");
define("NBILL_MNU_QUOTE_REQUEST_HELP", "Administrere prisforespørselskjemaer");
define("NBILL_MNU_QUOTES", "Prisforespørsel");
define("NBILL_MNU_QUOTES_HELP", "Administrere prisforespørsler");
define("NBILL_MNU_PAYMENT_PLANS", "Betalingsplaner");
define("NBILL_MNU_PAYMENT_PLANS_HELP", "Administrere betalingsplaner");
define("NBILL_MNU_HELP", "Hjelp");
define("NBILL_MNU_HELP_DESC", "Informasjon om " . NBILL_BRANDING_NAME);
define("NBILL_MNU_HELP_ABOUT", "Om");
define("NBILL_MNU_HELP_ABOUT_DESC", "Opphavsrett og versjonsinformasjon");
define("NBILL_MNU_HELP_DOCUMENTATION", "Brukerhåndbok");
define("NBILL_MNU_HELP_DOCUMENTATION_DESC", "Les den elektroniske dokumentasjonen");
define("NBILL_MNU_HELP_REGISTRATION", "Registrering");
define("NBILL_MNU_HELP_REGISTRATION_DESC", "Skriv inn en ny lisensnøkkel");
define("NBILL_MNU_HELP_SUPPORT", "Brukerstøtte");
define("NBILL_MNU_HELP_SUPPORT_DESC", "Få ekstra hjelp");
define("NBILL_SQL_LIST", "[SQL liste]");
define("NBILL_TB_UNPUBLISH_ON_FORMS", "Hvis du også ønsker å avpublisere (ikke slette) tilsvarende feltet på alle eksisterende skjemaer, klikker du OK. Hvis du vil slette feltet uten å påvirke de eksisterende skjemaene, klikker du Avbryt.");
define("NBILL_TB_PROMOTE", "Forfremme");
define("NBILL_TB_SELECT_ITEM_TO_PROMOTE", "Velg den potensielle kunden du vil fremheve fra listen");
define("NBILL_TB_PROMOTE_ARE_YOU_SURE", "Er du sikker på at du vil fremheve de(n) valgte posten(e) for kunden(e)? (Denne operasjonen kan ikke gjøres om)");
define("NBILL_TB_RESET", "Tilbakestille");
define("NBILL_TB_RESET_ARE_YOU_SURE", "Dette vil tilbakestille dine favoritter til standardinnstillingene. Er du sikker på at du vil fortsette?");
define("NBILL_TB_PRINTER_FRIENDLY", "Utskriftsvennlig");
define("NBILL_IFRAMES_REQUIRED", "Din nettleser støtter ikke integrerte rammer. Vennligst slå på støtte for integrerte rammer eller bruke en annen nettleser.");
define("NBILL_COPY_OF", "Kopi av ");
define("NBILL_GZIP_WARNING", "ADVARSEL! Denne funksjonen vil ikke fungere riktig når du har gzip sidekomprimering slått på. Vennligst slå av gzip komprimering i global konfigurasjon på ditt nettsted.");
define("NBILL_GZIP_WARNING_URL", "ADVARSEL! Denne funksjonen vil ikke fungere riktig når du har gzip sidekomprimering slått på. Vennligst slå av gzip komprimering på din <a href=\"%s\">CMS konfigurasjon</a>.");
define("NBILL_UNKNOWN_EMAIL_ERROR", "Feilårsaken ble ikke rapportert av nettstedet ditt. Kontroller at du bruker gyldig e-postadresser (fra og til), og at serveren er i stand til å sende e-post.");
define("NBILL_LOST_PASSWORD", "Glemt passord?");
define("NBILL_SECURITY_IMAGE_CHANGE", "[Endre bokstavkode]");
define("NBILL_FORM_PREVIOUS", "&lt;&lt; Forrige");
define("NBILL_FORM_NEXT", "Neste &gt;&gt;");
define("NBILL_FORM_SUMMARY_INTRO", "Les følgende informasjon for å sikre at den er korrekt før du sender inn bestillingen. Hvis du trenger å gå tilbake og endre noe, klikker du på knappen `Forrige`.");
define("NBILL_TAX_EXEMPTION_CODE", "Avgiftsfritakskode");
define("NBILL_UPGRADE_FAILED_NO_FILE_LIST", "Oppgradering mislyktes: Kunne ikke hente liste over endrede filer (ikke tilkoblet, eller fikk ikke svar tilbake");
define("NBILL_UPGRADE_FAILED_CONNECTED_NO_FILE_LIST", "Oppgradering mislyktes: Kunne ikke hente liste over endrede filer (tilkoblet, men fikk ugyldig svar tilbake)");
define("NBILL_UPGRADE_FAILED_MESSAGE", "Oppgradering mislyktes: Kunne ikke hente liste over endrede filer. Følgende feil ble returnert:");
define("NBILL_UPGRADE_FAILED_INVALID_FILE_LIST", "Oppgradering mislyktes: Liste over hentede filer kunne ikke bekreftes.");
define("NBILL_UPGRADE_FAILED_FILE_LIST_HASH_WRONG", "Oppgradering mislyktes: Koden for listen over hentede filer samsvarte ikke med verdien på listen. Med andre ord kan ikke oppgraderingen bekreftes som betyr at den kan ha blitt endret.");
define("NBILL_UPGRADE_FAILED_WRONG_FILE_COUNT", "Oppgradering mislyktes: Listen med filer inneholder feil antall filer (%s i stedet for de forventede %s).");
define("NBILL_UPGRADE_FILE_FAILED_WRONG_FILE_HASH", "Koden på filen samsvarer ikke med koden i kodefilen.");

//Controls
define("NBILL_FIELD_CALENDAR", "Kalender");
define("NBILL_FIELD_CALENDAR_CLEAR", "Tøm");
define("NBILL_DOMAIN_CHECK", "Sjekk tilgjengelighet");
define("NBILL_SECURITY_IMAGE", "Vennligst skriv inn bokstavene du ser:");
define("NBILL_USER_NAME", "Brukernavn:");
define("NBILL_USER_PASSWORD", "Passord:");
define("NBILL_LOGIN", "Logg inn");
define("NBILL_ALREADY_REGISTERED", "Allerede registrert? Vennligst logg inn");
define("NBILL_NOT_YET_REGISTERED", "Ny kunde? Vennligst fyll inn dine opplysninger her.");
define("NBILL_SUMMARY_NOTHING_TO_SHOW_ADMIN", "Det er ingen oppsummering å vise. Hvis dette feltet nettopp er blitt lagt til, må du klikke på Lagre eller Bruk før noe vil bli vist her.");
define("NBILL_SUMMARY_ORDER_DETAILS", "Bestillingsdetaljer");
define("NBILL_SUMMARY_INVOICE_DETAILS", "Fakturadetaljer");
define("NBILL_SUMMARY_QUOTE_DETAILS", "Tilbudsdetaljer");
define("NBILL_SUMMARY_QUOTE_REQUEST_DETAILS", "Detaljer prisforespørsel");
