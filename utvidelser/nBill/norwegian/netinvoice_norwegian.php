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
define("INV_INSTALL_COMPLETE", INV_BRANDING_NAME . " installasjonen fullf�rt.");
define("INV_DB_ERRORS", INV_BRANDING_NAME . " ble installert, men en eller flere databasefeil oppsto under installasjonen. Feilene vises nedenfor.");
define("INV_CANNOT_UPGRADE", "Beklager, du kan ikke oppgradere fra en versjon lavere enn 1.1.0. Vennligst avinstaller denne versjonen og installer deretter 1.1.0 for � oppdatere din database, deretter kan du fors�ke oppdateringen til denne versjonen igjen.");
define("INV_UPGRADED_SUCCESSFULLY", "Din installasjon av " . INV_BRANDING_NAME . " ble vellykket oppdatert.");

//Home
define("INV_WELCOME", "Velkommen til " . INV_BRANDING_NAME . "!");
define("INV_WELCOME_BETA", "Velkommen til " . INV_BRANDING_NAME . " BETA!");
define("INV_HOME_PAGE_TEXT","For � komme i gang, klikk p� hvert av menyvalgene ovenfor etter tur - de er sortert etter rekkef�lgen du beh�ver � klargj�re ting i. S� start med Konfigurasjon->Global konfigurasjon, sett deretter opp dine valutaer, dine selgere osv. De fleste sidene inkluderer nyttige kommentarer som vil guide deg gjennom prosessen. Vennligst g� til %s for dokumentasjon og brukerst�tte.");
define("INV_HELP", "Hjelp");

//Licensing
define("INV_LICENSE_INVALID", "Din lisensn�kkel er ikke gyldig. Den kan ha utl�pt, eller er ugyldig for domenet du fors�ker � bruke den p�. Vennligst kontakt " . INV_BRANDING_COMPANY . " for en gyldig lisensn�kkel for dette domenet. MERK: Om du fyller inn feil lisensn�kkel mer enn 12 ganger vil du bli utestengt! Vennligst kontakt brukerst�tten om din n�kkel ikke virker.");
define("INV_NEW_LICENSE_KEY", "Fyll inn ny lisensn�kkel her:");
define("INV_RETURN_TO_MAIN", "Klikk her for � g� tilbake til nettsiden");
define("INV_LIC_SERVER_NAME", "Servernavn: ");
define("INV_LIC_EXPIRY", "Lisens utl�per: ");
define("INV_YOUR_DOMAIN", "Ditt domene er: ");
define("INV_NO_EXPIRY", "Ingen utl�p, du har en livstidslisens");
define("INV_ACCEPT_TERMS", "Jeg har lest, forst�tt og akseptert %s");
define("INV_EULA", "sluttbrukerlisensen (�pnes i et nytt vindu)");
define("INV_PLEASE_ACCEPT_TERMS", "Beklager, du m� krysse av i boksen for � bekrefte at du aksepterer sluttbrukerlisensen  f�r du kan fortsette.");
define("INV_LOCKED_OUT_TITLE", "Tilgang har blitt blokkert!");
define("INV_LOCKED_OUT_DESC", "You have tried to access the component using an invalid license key too many times. The component has now been blocked. To unblock it, you need to enter an 'unblock key' below. To get your 'unblock key', please send an e-mail to: " . INV_BRANDING_SUPPORT_EMAIL . ", quoting reference '%s', and your domain name (%s)");
define("INV_UNBLOCK_KEY", "Unblock Key");
define("INV_UNBLOCK_KEY_INVALID", "Sorry, the unblock key you entered is not valid.");
define("INV_LICENSE_EXPIRED", "Your license expired %s");
define("INV_BLACKLISTED", "Your domain name has been blacklisted (typically this would be due to a chargeback after purchase). You are not permitted to continue. If you feel this is in error, please contact us.");

//Global
define("INV_ALL", "[vis alle]");
define("INV_NONE", "[ingen]");
define("INV_NOTES", "Merknader");
define("INV_INSTR_VENDOR_ID", "Velg selger som denne oppf�ringen er assosiert med.");
define("INV_INSTR_NOTES", "Merknader er for dine egne kommentarer, p�minnelser osv.. De blir ikke brukt av komponenten til annet enn � indikere at en oppf�ring ble automatisk generert.");
define("INV_MISCELLANEOUS", "Diverse");
define("INV_ROOT", "Rot");
define("INV_NOT_APPLICABLE", "Gjelder ikke");
define("INV_TAX", "MVA");
define("INV_FOR", "for");
define("INV_TO", "til");
define("INV_GO", "Bruk");
define("INV_DATE_RANGE", "Fra");
define("INV_ERR_COULD_NOT_GET_NEXT_NO", "The component was unable to identify the next %s number because the database field is currently locked by another process. If the problem persists, you can unlock the %s number field by editing the Vendor record.");
define("INV_ERR_NO_NOT_NUMERIC", "The next %s number for this vendor is not numeric! Please update the vendor record to specify a numeric %s number sequence, or enter the %s number manually.");
define("INV_ERR_NO_NOT_FOUND", "The next %s number for this vendor could not be found! You may have to enter the %s number manually.");
define("INV_PREV", "<< Forrige");
define("INV_NEXT", "Neste >>");
define("INV_SAVE_CHANGES", "You have made changes to the data on this page but have not saved the record. If you want to save your changes before moving on, click OK. If you want to move on without saving, click on Cancel");  //Don't use apostrophes or speech marks in this text
define("INV_SELECT", "Velg");
define("INV_DESELECT", "Fravelg");
define("INV_UNKNOWN", "Ukjent");
define("INV_NEW", "Ny");
define("INV_BACK", "Tilbake");
define("INV_NO_EMAIL", "Don't e-mail invoices");
define("INV_EMAIL_INVOICE", "Send invoice to client (html e-mail)");
define("INV_EMAIL_NOTIFICATION", "Send notification to client (plain text e-mail advising client to log into website)");
define("INV_CLOSE_WINDOW", "Close Window");
define("INV_NO_ACTION_TAKEN", "No action taken.");
define("INV_ADMIN_IMAGE", "style=\"height:54px; padding-left: 54px; background-image: url('$mosConfig_live_site/components/com_netinvoice/images/icons/large/%s.gif') !important;background-position:left;background-repeat:no-repeat;\"");
define("INV_NUMERIC_ONLY", "The field `%s` requires a numeric value. Please only enter a number here.");
define("INV_INVALID_DATE_FIELD", "The field `%s` requires a date value. Please enter a date in the format %s.");
define("INV_ERR_SERIOUS_ERROR", "Sorry, an error has occurred. An e-mail containing details of the error has been sent to the appropriate person. Apologies for the inconvenience.");
define("INV_ERR_SERIOUS_ERROR_ADMIN", "Sorry, an error has occurred. An e-mail containing details of the error has been sent to the appropriate person (as defined in Global Configuration page of " . INV_BRANDING_NAME . "). Apologies for the inconvenience.");
define("INV_ERR_SERIOUS_ERROR_NOMAIL", "Sorry, an error has occurred. The component was unable to send an e-mail containing details of the error to the appropriate person. Please contact the owner of this website (%s) to inform them of this error (which has been logged in their database and/or PHP error log). Apologies for the inconvenience.");
define("INV_ERR_SERIOUS_ERROR_NOMAIL_ADMIN", "Sorry, an error has occurred. The component was unable to send an e-mail containing details of the error to the appropriate person (as defined in Global Configuration page of " . INV_BRANDING_NAME . "). As this error occurred in the administrator, details of the error are provided below. Apologies for the inconvenience.");
define("INV_ERR_REPORT_INTRO", "An error has occurred in " . INV_BRANDING_NAME . " (front end)! Details of the error are given below:\n\n");
define("INV_ERR_REPORT_INTRO_ADMIN", "An error has occurred in " . INV_BRANDING_NAME . " (administrator)! Details of the error are given below:\n\n");
define("INV_ID", "ID");
define("INV_PRODUCT_SETUP_FEE", "Setup Fee");
define("INV_PRODUCT_NEGATIVE_SETUP_FEE", "Trial Period Discount");
define("INV_EMAIL_INVOICE_ATTACH", "Send invoice to client as an attachment (plain text e-mail) - Recommended");
define("INV_ERR_MASTER_DB_CONNECT", "Could not connect to the master database!");
define("INV_ERR_MASTER_DB_LOOP", "PROCESS ABORTED! You appear to have a loop of master databases. Please ensure each database is only the master of ONE other database.");
define("INV_ERR_MASTER_DB_TOO_OLD", "A master database belongs to an different version of " . INV_BRANDING_NAME . ". Please ensure all databases are running the same version.");
define("INV_PRINTER_FRIENDLY", "Printer Friendly Version");
define("INV_DATE_PRINTED", "Date Printed: ");
define("INV_ERR_COULD_NOT_CREATE_USER", "WARNING! Although the order form is set to automatically create a user record, it was not possible to create a user for this order. This can happen if the e-mail address field is suppressed (because an e-mail address is required in order to create a new user record).");
define("INV_CSV_DOWNLOAD", "CSV Download");
define("INV_CSV_DOWNLOAD_DESC", "Download this report as a CSV file (which can be opened in a spreadsheet application such as MS Excel, or imported into another application)");
define("INV_EMAIL_DOWNLOADS_SUBJECT", "Downloadable Product(s) Attached - Order no: %s");

//The following have been moved from other sections (used in more than one place)
define("INV_VENDOR_NAME", "Selgers navn");
define("INV_CLIENT", "Kunde");
define("INV_TAX_EXEMPTION_CODE", "Tax Exemption Code");
define("INV_EMAIL_INVOICE_OPTIONS", "Invoice Notifications");
define("INV_NOMINAL_LEDGER_CODE", "Nominal Ledger Code");
define("INV_INSTR_NOMINAL_LEDGER_CODE", "");
define("INV_ENTER_OVERRIDE_DATE", "Enter the date (YYYY/MM/DD) up to which you want invoices generated. Any orders which fall due AFTER the date you enter will NOT be generated."); //Need to keep this quite short, as it is used in a javascript prompt which is a fixed size in IE
define("INV_PRODUCT_CATS", "Kategori");
define("INV_INVOICE_DETAILS", "Fakturadetaljer");
define("INV_CARRIAGE_SERVICE", "Carriage Service");
define("INV_SELECT_CLIENT", "Kunde");
define("INV_INSTR_SELECT_CLIENT", "");
define("INV_VENDOR_ADDRESS", "Selgers adresse");
define("INV_TAX_REFERENCE_DESC", "Tax Reference Description");
define("INV_TAX_ABBREVIATION", "Abbreviation");
define("INV_INSTR_TAX_REFERENCE_DESC", "Enter a descriptive name of your tax reference number (eg. 'VAT Number', 'N&uacute;mero de IVA')");
define("INV_INSTR_TAX_ABBREVIATION", "Enter the commonly used abbreviation for this type of tax (eg. VAT, IVA)");
define("INV_TAX_REFERENCE_NO", "Tax Reference Number");
define("INV_INSTR_TAX_REFERENCE_NO", "Enter your company tax reference number (eg. your VAT number), including country code (if applicable)");
define("INV_INSTR_TAX_EXEMPTION_CODE", "If a tax rate can be omitted on production of the client's VAT number or reseller certification, enter the reference here.");
define("INV_EMAIL_ADDRESS", "E-postadresse");
define("INV_RELATING_TO", "Relatert til");
define("INV_CURRENCY", "Valuta");
define("INV_ORDER_DETAILS", "Ordredetaljer");
define("INV_CLIENT_NAME", "Kudenavn");
define("INV_ADD_INVOICE_ITEM", "Legg til produkt");
define("INV_REMOVE_INVOICE_ITEM", "Fjern produkt");
define("INV_INSTR_CURRENCY", "");
define("INV_INVOICES_GENERATED", "%s fakturaer generert.");
define("INV_REDIRECTED_TO_INVOICE_SUMMARY", "You have been redirected to the invoice summary screen.");
define("INV_PRODUCT_CATEGORY", "Kategorier");
define("INV_INVOICE_GENERATION_ERRORS", "One or more errors occurred whilst attempting to generate invoices. The error messages are listed below.");
define("INV_ERR_INVOICE_GENERATION_LOOP", "The invoice generation script seems to have got itself stuck in a loop. Process therefore terminated after 100 repetitions. Most likely cause is that the end date for an order could not be calculated. Please contact " . INV_BRANDING_COMPANY . " for assistance.");
define("INV_ERR_COULD_NOT_INSERT_INVOICE_ITEM", "Unable to insert invoice item record in the database.");
define("INV_ERR_COULD_NOT_INSERT_DISCOUNT_INVOICE_ITEM", "Unable to insert invoice item record in the database for a discount.");
define("INV_MY_ACCOUNT", "Min konto");
define("INV_MY_PROFILE", "Min profil");
define("INV_MY_ORDERS", "Mine ordrer");
define("INV_MY_INVOICES", "Mine fakturaer");
define("INV_SUBMIT", "Lagre");
define("INV_CANCEL", "Avbryt");
define("INV_INVALID_DATE_ENTERED", "Oppgitt dato er ikke gyldig. Dato m� fylles inn i f�lgende format: %s.");

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
define("INV_MNU_NOMINAL_LEDGER", "Nominal Ledger");
define("INV_MNU_NOMINAL_LEDGER_DESC", "Administrer Cost Centres");
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
define("INV_MNU_ACCOUNTING", "Bokf�ring");
define("INV_MNU_ACCOUNTING_DESC", "Administrer inntekter og utgifter");
define("INV_MNU_INCOME", "Inntekter");
define("INV_MNU_INCOME_DESC", "Administrer inntekter");
define("INV_MNU_EXPENDITURE", "Utgifter");
define("INV_MNU_EXPENDITURE_DESC", "Administrer utgifter");
define("INV_MNU_AUDIT_LOG", "Audit Log");
define("INV_MNU_AUDIT_LOG_DESC", "View Audit Log Entries");
define("INV_MNU_REPORTS", "Rapporter");
define("INV_MNU_REPORTS_DESC", "Produser rapporter");
define("INV_MNU_JACL_VOUCHER", "ACL Upgrade Vouchers");
define("INV_MNU_JACL_VOUCHER_DESC", "Define voucher codes for user subscription level upgrades");
define("INV_MNU_DISPLAY_OPTIONS", "Visningsvalg");
define("INV_MNU_DISPLAY_OPTIONS_DESC", "Angi hva som skal vises p� forsiden/brukersiden");
define("INV_MNU_TAX_SUMMARY", "MVA-rapport");
define("INV_MNU_TAX_SUMMARY_DESC", "Produser mva-rapport for en gitt datoperiode");
define("INV_MNU_EXTENSIONS", "Utvidelser");
define("INV_MNU_EXTENSIONS_DESC", "Tredjeparts utvidelser for " . INV_BRANDING_NAME);
define("INV_MNU_EXTENSIONS_INSTALL", "Installer utvidelser");
define("INV_MNU_EXTENSIONS_INSTALL_DESC", "Installer en tredjeparts utvidelse for " . INV_BRANDING_NAME . ".");
define("INV_MNU_SUPPLIERS", "Leverand�rer");
define("INV_MNU_SUPPLIERS_DESC", "Administrer leverand�rer");
define("INV_MNU_EXPENDITURE_LIST", "Utgiftsposter");
define("INV_MNU_EXPENDITURE_LIST_DESC", "Administrer utgiftsposter p� betalinger");
define("INV_MNU_DISCOUNTS", "Rabatter");
define("INV_MNU_DISCOUNTS_DESC", "Administrer rabattregler");
define("INV_MNU_IO", "Importer/Eksporter");
define("INV_MNU_IO_DESC", "Importer eller eksporter data");
define("INV_MNU_IO_CLIENTS", "Kunder");
define("INV_MNU_IO_CLIENTS_DESC", "Importer eller eksporter kundeoppf�ringer");
define("INV_MNU_PAYMENT_LINK", "Generering av betalingslenke");
define("INV_MNU_PAYMENT_LINK_DESC", "Generer en betalingslenke som du kan sende til en kunde");
define("INV_MNU_GATEWAY_FUNCTIONS", "%s funksjoner");
define("INV_MNU_GATEWAY_FUNCTIONS_DESC", "Utvidet funksjonalitet for %s-betalingsmodulen.");
define("INV_MNU_TRANSACTION_REPORT", "Transaksjonrapport");
define("INV_MNU_TRANSACTION_REPORT_DESC", "List opp alle inntekter/utgifter etter dato, med summering");
define("INV_MNU_LEDGER_REPORT", "Ledger Report");
define("INV_MNU_LEDGER_REPORT_DESC", "Nominal Ledger Summary");
define("INV_MNU_REMINDERS", "P�minnelser");
define("INV_MNU_REMINDERS_DESC", "Konfigurer valg for utsendelse av p�minnelser p� e-post");

//Account Expiry
define("INV_SUB_EXPIRY_MESSAGE", "Vennligst v�r oppmerksom p� at din brukerkonto har blitt satt til %s. Grunnen til dette er: %s<br /><br />Vennligst kontakt oss om du har noen sp�rsm�l rundt dette.");
define("INV_SUB_EXPIRY_BLOCKED", "BLOKKERT");
define("INV_SUB_EXPIRY_DELETED", "SLETTET");
define("INV_SUB_EXPIRY_DOWNGRADED", "NEDGRADERT til '%s'");
define("INV_SUB_EXPIRY_REASON_CANCELLED", "din ordre p� brukerabonnement har blitt annullert.");
define("INV_SUB_EXPIRY_REASON_DELETED", "din ordre p� brukerabonnement har blitt slettet.");
define("INV_SUB_EXPIRY_REASON_EXPIRED", "ditt brukerabonnement har utl�pt.");
define("INV_SUB_EXPIRY_REASON_NOT_RENEWED", "ditt brukerabonnement har blitt fornyet. Kontakt oss for � fornye ditt abonnement, slik at du kan fortsette � bruke siden med dine tidligere rettigheter.");
define("INV_SUB_EXPIRY_REASON_UNKNOWN", "ukjent. Vennligst kontakt oss om du mener dette dette er en feil.");
define("INV_CONTINUE", "Klikk her for � fortsette");
define("INV_CONTINUE_HOME", "Klikk her for � returnere til hjemmesiden.");

//Version checking
define("INV_SOFTWARE_OOD", "ADVARSEL! Din kopi av " . INV_BRANDING_NAME . " er utdatert. Du fors�ker � kj�re en gammel versjon av " . INV_BRANDING_NAME . " med en nyere versjon av databasen, dette vil f�re til programfeil. Vennligst oppdater din programvare (se " . INV_BRANDING_WEBSITE . ").");
define("INV_DATABASE_OOD", "ADVARSEL! Din database m� oppdateres. Om dette ikke gj�res vil det resultere i programfeil. %s for � oppdatere n�.");
define("INV_CLICK_HERE", "Klikk her");
define("INV_NEW_VERSION_AVAILABLE", "En ny versjon av " . INV_BRANDING_NAME . " (%s) er n� tilgjengelig.");
define("INV_NEW_VERSION_MANUAL", "Denne versjonen kan ikke installeres automatisk, du m� oppdatere manuelt (se dokumentasjon for detaljer)");
define("INV_PATCH_COPY_FAILURES", "Et fors�k ble gjort p� installere en oppdateringspakke men f�lgende filer kunne ikke kopieres. Vennligst last ned pakken fra " . INV_BRANDING_NAME . "-nettsiden og installer manuelt.");
define("INV_PATCH_DB_ERRORS", "Et fors�k ble gjort p� � installere en oppdateringspakke men f�lgende databasefeil oppstod. Du m� kanskje laste ned pakken fra " . INV_BRANDING_NAME . "-nettsiden og installere manuelt.");
define("INV_PATCH_FAILED_TO_INSTALL", "Et fors�k ble gjort p� � installere en oppdateringspakke men en eller flere feil oppstod. Dette er kanskje p� grunn av at dine fil- og mapperettigheter ikke tillater PHP � overskrive filene, eventuelt kan det v�re problemer med forbindelsen til serveren hvor oppdateringspakken ligger. Vennligst fors�k igjen senere, eller last ned pakken fra " . INV_BRANDING_NAME . "-nettsiden og installer manuelt.");
define("INV_AUTO_UPDATE_DISABLED", "Automatisk oppdatering har blitt deaktivert. For � sl� p� funksjonen igjen se p� siden %sGlobal konfigurasjon%s.");
define("INV_NO_NEW_VERSION_AVAILABLE", "Du har allerede den nyeste versjonen, ingen nyere er tilgjengelig for �yeblikket.");
define("INV_PATCH_INSTALLED", "Din programvare har blitt oppdatert, du kj�rer n� nyeste versjon.");
define("INV_TO_UPGRADE_NOW", "%s for � oppdatere n�."); //Used in conjunction with INV_CLICK_HERE
define("INV_UNABLE_TO_CHECK_VERSION", "Beklager, en tilkobling til den nettbaserte versjonsjekken kunne ikke opprettes. Dette kan v�re fordi du ikke har tilgang til internett, eller tjeneren kan v�re ute av drift for �yeblikket. Vi vet derfor ikke om du kj�rer nyeste versjon eller ikke. Vennligst fors�k igjen senere, eller sjekk p� " . INV_BRANDING_NAME . "-nettsiden.");

//Toolbar
define("INV_TB_NEW", "Ny");
define("INV_TB_EDIT", "Rediger");
define("INV_TB_DELETE", "Slett");
define("INV_TB_SAVE", "Lagre");
define("INV_TB_APPLY", "Bruk");
define("INV_TB_CANCEL", "Avbryt");
define("INV_TB_PREVIEW_HTML", "Forh�ndsvis HTML");
define("INV_TB_PREVIEW_PDF", "Forh�ndsvis PDF");
define("INV_TB_GENERATE_ALL", "Generer alle");
define("INV_TB_GENERATE", "Generer");
define("INV_TB_ACTIVATE", "Aktiver");
define("INV_TB_SELECT_ITEM_TO_DELETE", "Vennligst velg hva du vil slette fra listen");
define("INV_TB_DELETE_ARE_YOU_SURE", "Er du sikker p� at du �nsker � slette valgte elementer?");
define("INV_TB_SELECT_ITEM_TO_EDIT", "Vennligst velg hva du vil redigere fra listen");
define("INV_TB_SELECT_ITEM_TO_GENERATE", "Vennligst velg ordren du generere faktura for fra listen");
define("INV_TB_SELECT_ITEM_TO_PREVIEW", "Vennligst velg hva du vil forh�ndsvise fra listen");
define("INV_TB_BACK", "Tilbake");

/***************************/
/* Version 1.1.4
/* Note to translators:
/* Branding constants removed (previously lines 25 to 38)
/* INV_SUB_EXPIRY_MESSAGE on line 236 (in the English file, previously 250) has been amended to use <br /> instead of 

/* INV_ADMIN_IMAGE on line 85 (in the English file, previously 99) has been changed to point to the front-end images folder
/***************************/

// Version 1.2.0
define("INV_MNU_STYLESHEET_WARNING", "WARNING! Your ADMIN template is not loading the nBill stylesheet. Everything will look wrong unless you add some code to your admin template. See %s.");
define("INV_MNU_STYLESHEET_WARNING_1011", "WARNING! You are using an OLD and INSECURE version of Joomla! A side-effect of this is that your ADMIN template is not loading the nBill stylesheet. Everything will look wrong unless you either upgrade Joomla (recommended), or add some code to your admin template. See %s.");
define("INV_LICENSE_EXPIRES_SOON", "WARNING! Your license key expires soon (%s).");
define("INV_LIC_EXP_ANNUAL", " If you wish to renew for another year now without losing any of the remaining time on this license key, please login at " . INV_BRANDING_WEBSITE . " and renew your *existing* order (rather than placing a new order).");
define("INV_LIC_EXP_TRIAL", " If you want to continue using " . INV_BRANDING_NAME . " after this date, please purchase a license key at " . INV_BRANDING_WEBSITE);
define("INV_TXN_DETAILS", "F�lgende oppf�ringer ble funnet for angitt transaksjonsnummer");
define("INV_TXN_NOT_FOUND", "Ingen oppf�ringer ble funnet for angitt transaksjonsnummer.");
define("INV_TXN_CLIENT", "Kunde");
define("INV_TXN_PENDING_ORDER", "Ventende ordre-id");
define("INV_TXN_FORM_TITLE", "Ordreskjema");
define("INV_TXN_DATE", "Dato");
define("INV_TXN_USERNAME", "Bruker");
define("INV_TXN_RELATING_TO", "Relatert til");
define("INV_TXN_AMOUNT", "Bel�p");
define("INV_TXN_PRODUCT", "Produktdetaljer");
define("INV_TXN_ORDER_NO", "Ordrenummer");
define("INV_TXN_INVOICE_NO", "Fakturanummer");
define("INV_TXN_RECEIPT_NO", "Kvitteringsnummer");
define("INV_TXN_TYPE_PENDING", "Ventende ordre");
define("INV_TXN_TYPE_ORDER", "Ordrer");
define("INV_TXN_TYPE_INVOICE", "Fakturaer");
define("INV_TXN_TYPE_INCOME", "Inntekt");
define("INV_TXN_RECEIPT_NO_UNKNOWN", "Ikke definert enn�");
define("INV_MNU_TX_SEARCH", "S�k transaksjon");
define("INV_MNU_TX_SEARCH_HELP", "S�k etter oppf�ringer basert p� transaksjonsnummer fra din betalingsformidler");

//Version 1.2.0 SP1
define("INV_ERR_COULD_NOT_CREATE_USER_REASON", "WARNING! Although the order form is set to automatically create a user record, it was not possible to create a user for this order. The following error was reported: %s");

//Version 1.2.1
define("INV_CANNOT_UPGRADE_120", "Sorry, you cannot upgrade from a version prior to 1.2.0. Please uninstall this version, install 1.2.0 to upgrade your database, then try upgrading again to this version.");
define("INV_TEMP_NOT_WRITABLE", "PHP Temp directory not found or not writable ('%s') - invoice attachment could not be saved.");
define("INV_NO_WRITE_ACCESS", "PHP does not have write access to the file %s - invoice attachment could not be saved.");
define("INV_INVALID_CHARS_IN_FIELD", "%s contains invalid characters. Please only use alphanumeric characters for this field.");
define("INV_INVALID_CHARS_USERNAME", "Brukernavn");
define("INV_USERNAME_EXISTS", "Beklager, dette brukernavnet er allerede i bruk.");
define("INV_USER_EMAIL_EXISTS", "Beklager, denne e-postadressen er fortsatt i bruk.");
define("INV_EMAIL_INVALID", "E-postadressen du oppgav er ikke gyldig.");
define("INV_EMAIL_INVOICE_PDF", "Send faktura til kunde som et PDF-vedlegg (e-post i ren tekst)");
define("INV_NO", "Nei");
define("INV_YES", "Ja");

//Version 1.2.3
define("INV_OFFLINE", "Frakoblet");
// Note to translators:
//Line 90 of original English language file amended (INV_ERR_SERIOUS_ERROR_NOMAIL) - if database not available, full error reports are now logged to the PHP error log

//Version 1.2.4
define("INV_INSTALL_ERROR", "Sorry, it looks like nBill failed to install correctly! Please try uninstalling and re-installing. If that does not help, please refer to the troubleshooting section of the documentation at <a href=\"http://www.nbill.co.uk/documentation/\">www.nbill.co.uk/documentation</a>.<br /><br /><a href=\"index2.php\">Return to Home Page</a>");

//Version 1.2.5
define("INV_LICENSE_NOT_WORKING", "<strong>NOTE: If your license key will not work, please refer to the troubleshooting section of the documentation: <a href=\"http://www.nbill.co.uk/documentation/index.php?page=license-key-is-not-accepted.html\" target=\"_blank\">http://www.nbill.co.uk/documentation/index.php?page=license-key-is-not-accepted.html</a>. If you still cannot get it working after trying everything listed there, please raise a support ticket (we will need super administrator access to your site to investigate the problem).</strong>");
?>
