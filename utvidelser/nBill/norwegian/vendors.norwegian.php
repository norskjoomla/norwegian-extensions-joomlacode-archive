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

//Vendors
define("INV_VENDOR_INTRO", "Typisk, du vil bare ha dine egene firma detaljer listet her. Dersom du kjører mer enn et firma eller en tilbyder for flere firmaer, kan du legge til flere firma detaljer. Alle fakturaer inkludert oppføringer som er holdt separert for hver leverandør.");
define("INV_VENDOR_DETAILS", "Leverandør detaljer");
define("INV_NEW_VENDOR", "Ny leverandør");
define("INV_EDIT_VENDOR", "Rediger leverandør detaljer");
define("INV_VENDORS_TITLE", "Leverandører");
define("INV_VENDOR_COUNTRY", "Leverndør land");
define("INV_VENDOR_CURRENCY", "Leverandør valuta");
define("INV_VENDOR_OTHER_CURRENCIES", "Andre tillate valutaer");
define("INV_NEXT_INV_NO", "Neste faktura nummer");
define("INV_NEXT_ORDER_NO", "Neste ordre nummer");
define("INV_NEXT_RECEIPT_NO", "Neste kvitterings nummer");
define("INV_NEXT_PAYMENT_NO", "Neste betalings nummer");
define("INV_NEXT_CREDIT_NO", "Neste kredittnote nummer");
define("INV_DEFAULT_PAYMENT_INSTR", "Standard betalings instrukser");
define("INV_DEFAULT_SMALL_PRINT", "Standard liten utskrift");
define("INV_ADMIN_EMAIL", "Administrator e-post");
define("INV_PAPER_SIZE", "Papir størrelse");
define("INV_CLIENT_ORDERING", "Tillat klienter å plassere ordrer?");
define("INV_PUBLIC_ORDERING", "Tillat offentlige å plassere ordrer?");
define("INV_SHOW_EMPTY_CATS", "Vis tomme kategorier?");
define("INV_INSTR_VENDOR_NAME", "Skriv inn navnet som du ønsker at skal stå på fakturaer.");
define("INV_INSTR_VENDOR_ADDRESS", "Skriv inn adressen som du ønsker at skal stå på fakturaer.");
define("INV_INSTR_VENDOR_COUNTRY", "This will only appear on automatically-generated invoices when the billing address is in a different country.");
define("INV_INSTR_VENDOR_CURRENCY", "Select the native currency for this vendor.");
define("INV_INSTR_VENDOR_OTHER_CURRENCIES", "Specify any other (non-native) currencies that clients of this vendor can place orders and be invoiced in (hold down Ctrl to select multiple items or to de-select items).");
define("INV_INSTR_NEXT_INVOICE_NO", "Enter the next invoice number to be generated (you can have alpha-numeric characters at the start, but the last character must be numeric as this will be incremented automatically).");
define("INV_INSTR_NEXT_ORDER_NO", "Enter the next order number to be generated (you can have alpha-numeric characters at the start, but the last character must be numeric as this will be incremented automatically).");
define("INV_INSTR_NEXT_RECEIPT_NO", "Enter the next receipt number to be generated (you can have alpha-numeric characters at the start, but the last character must be numeric as this will be incremented automatically).");
define("INV_INSTR_NEXT_PAYMENT_NO", "Enter the next payment number to be generated (you can have alpha-numeric characters at the start, but the last character must be numeric as this will be incremented automatically).");
define("INV_INSTR_NEXT_CREDIT_NO", "Enter the next credit note number to be generated (you can have alpha-numeric characters at the start, but the last character must be numeric as this will be incremented automatically).");
define("INV_INSTR_DEFAULT_PAYMENT_INSTR", "Enter your default payment instructions to appear on your invoices (this can be overridden for different countries on the Tax page)");
define("INV_INSTR_DEFAULT_SMALL_PRINT", "Enter your default small print to appear on your invoices (this can be overridden for different countries on the Tax page)");
define("INV_INSTR_ADMIN_EMAIL", "E-Mails sent to clients will appear to come from this address.");
define("INV_INSTR_PAPER_SIZE", "Paper size to use when producing PDFs of the invoices (valid values include A4, A5, Letter, and Legal)");
define("INV_INSTR_CLIENT_ORDERING", "Whether or not the component's front-end should allow logged-in users to place orders ");
define("INV_INSTR_PUBLIC_ORDERING", "Whether or not the component's front-end should allow users who are not logged in to place orders ");
define("INV_INSTR_SHOW_EMPTY_CATS", "If users can place orders through the component's front-end, this setting specifies whether or not to display categories which do not contain any products or child categories");
define("INV_VENDOR_NAME_REQUIRED", "You must provide a name for the vendor.");
define("INV_VENDOR_ADDRESS_REQUIRED", "You must specify the vendor\'s address");
define("INV_VENDOR_COUNTRY_REQUIRED", "You must specify the country of the vendor.");
define("INV_VENDOR_CURRENCY_REQUIRED", "You must specify the currency of the vendor.");
define("INV_VENDOR_EMAIL_REQUIRED", "You must specify the vendor\'s e-mail address.");
define("INV_ERR_CANNOT_DELETE_LAST_VENDOR", "You cannot delete the last Vendor!");
define("INV_INVOICE_NO_LOCKED", "The next invoice number for this vendor is currently locked. This should only happen temporarily whilst invoices are being generated. If the invoice generation process failed and this field has remained locked, you can unlock it by clicking this button:");
define("INV_ORDER_NO_LOCKED", "The next order number for this vendor is currently locked. This should only happen temporarily whilst invoices are being generated. If the invoice generation process failed and this field has remained locked, you can unlock it by clicking this button:");
define("INV_RECEIPT_NO_LOCKED", "The next receipt number for this vendor is currently locked. This should only happen temporarily whilst invoices are being generated. If the invoice generation process failed and this field has remained locked, you can unlock it by clicking this button:");
define("INV_PAYMENT_NO_LOCKED", "The next payment number for this vendor is currently locked. This should only happen temporarily whilst invoices are being generated. If the invoice generation process failed and this field has remained locked, you can unlock it by clicking this button:");
define("INV_UNLOCK", "Unlock");
define("INV_INVOICE_TEMPLATE", "Faktura mal");
define("INV_INSTR_INVOICE_TEMPLATE", "Name of the template to use for producing invoices for this vendor.");
define("INV_INSTR_EMAIL_INVOICE_OPTIONS", "Angi standard faktura varsel når nye fakturaer er generert. Disse verdiene kan overstyres for individuelle kunder. Hvis standard er satt til å sende en e-post til kunden (enten et varsel eller den faktiske faktureringen), gjør komponent-grensesnittet at klienten må melde deg på dette. Hvis begge standardinnstillingene mot leverandøren posten OG den altoverskyggende verdien holdes mot klienten posten både stiller krav om at ingen e-post skal sendes, vil brukeren ikke bli gitt muligheten til å melde seg. <strong>Merk:</strong> Hvis du sender automatisk e-post, er det sterkt anbefalt å sikre at alle klient-postene har en tilknytting til brukerens post slik at de kan logge seg på nettsiden å angi sine innstillinger og vise sine fakturaer. <strong>Merk også:</strong> Å generere PDF filer tar mye systemressurser - er det anbefalt å unngå dette som standard, og bare for de klienter som virkelig ønsker det.");
define("INV_DEFAULT_GATEWAY", "Standard betalingsmåte");
define("INV_INSTR_DEFAULT_GATEWAY", "Default payment gateway to use for new order forms and for allowing payment of invoices online (if applicable).");
define("INV_AUTO_CREATE_INCOME", "Auto Create Income Item?");
define("INV_INSTR_AUTO_CREATE_INCOME", "Whether or not the payment gateway should be instructed to automatically create an income record for invoices that are paid online. NOTE: This does not affect orders made using an order form (you can set that on the order form in question), only standalone invoices that are paid online.");
define("INV_SUPPRESS_RECEIPT_NOS", "Generate Receipt Numbers Manually?");
define("INV_INSTR_SUPPRESS_RECEIPT_NOS", "Whether to suppress the generation of receipt numbers when income items are added, and offer a toolbar button to generate receipt numbers for all income items up to a given date instead. This is so that you can have all of your receipt numbers in date order, even if you have a mixture of auto-generated income items from online payments, and manually added income items (eg. for cheques etc. paid directly into your bank account). By setting this to 'yes', an extra toolbar button will appear on the income list page to enable you to populate the receipt numbers up to a given date, when you are ready.");
define("INV_VENDOR_LOGO", "Leverandør logo");
define("INV_INSTR_VENDOR_LOGO", "Upload a .gif image to appear on invoices for this vendor (if supported by the invoice template. Must be .gif, and less than 30k). NOTE: You might need to refresh your browser after uploading a new image, as some browsers (esp. firefox) cache images.");
define("INV_VENDOR_GIF_ONLY", "Sorry, the logo file you uploaded (%s) is not valid.  Only GIF files can be used for vendor logos");
define("INV_VENDOR_GIF_TOO_BIG", "Sorry, the logo file you uploaded was too large.  The maximum size is 30K");
define("INV_DELETE_LOGO", "Slett");
define("INV_VENDOR_DELETE_LOGO_FAILED", INV_BRANDING_NAME . " was unable to delete the logo file. This may be because PHP does not have permission to delete files on your server.");
define("INV_SUPPRESS_PAYMENT_NOS", "Generer betalings nummer manuelt?");
define("INV_INSTR_SUPPRESS_PAYMENT_NOS", "As above, but for payment numbers on the expenditure list.");
define("INV_ADD_REMITTANCE", "Show Remittance Advice?");
define("INV_INSTR_ADD_REMITTANCE", "Whether or not to add a remittance advice slip to the end of invoices.");
define("INV_CREDIT_SMALL_PRINT", "Credit Note Small Print");
define("INV_INSTR_INVOICE_SMALL_PRINT_CR", "Enter any legal disclaimers etc. that you want to appear on credit notes.");
define("INV_MASTER_DB_INTRO", "If you sell products or services using several different websites, each with their own copy of " . INV_BRANDING_NAME . ", but you want to record all of your financial information in just one of those, you can do so using a chain of 'master' databases. IMPORTANT! Please do not use this feature until you have read the documentation (available from the " . INV_BRANDING_NAME . " website), otherwise you could seriously mess up your data!");
define("INV_USE_MASTER_DB", "Bruk en hoveddatabase?");
define("INV_INSTR_USE_MASTER_DB", "Whether or not to defer generation of numbers for invoices, credit notes, income, and expenditure to a master database (another copy of " . INV_BRANDING_NAME . ").");
define("INV_MASTER_DB_HOST", "Hovedhost");
define("INV_INSTR_MASTER_DB_HOST", "Host navn på hoveddatabasen (f. eks. om dette er en database på samme server, dette kan være 'localhost').");
define("INV_MASTER_USERNAME", "Hovedbrukernavn");
define("INV_INSTR_MASTER_USERNAME", "Brukernavn som behøves for å få adgang til hoveddatabasen.");
define("INV_MASTER_PASSWORD", "Hovedpassord");
define("INV_INSTR_MASTER_PASSWORD", "Passord som behøves for å få adgang til hoveddatabasen.");
define("INV_MASTER_DB_NAME", "Hoveddatabase navn");
define("INV_INSTR_MASTER_DB_NAME", "Navn på hoveddatabasen.");
define("INV_MASTER_TABLE_PREFIX", "Hoveddatabase tabell prefiks");
define("INV_INSTR_MASTER_TABLE_PREFIX", "Tabell prefiks for hoveddatabasen (typisk 'jos_').");
define("INV_MASTER_DB_CANNOT_CONNECT", "Kunne ikke koble til hoveddatabasen.");
define("INV_MASTER_DB_TEST", "Test oppkobling");
define("INV_MASTER_VENDOR", "Hovedleverandør");
define("INV_INSTR_MASTER_VENDOR", "Korresponderende leverandør oppføring i hovedatabasen med synkronisering");
define("INV_SYNCHRONISE", "Last opp til hoveddatabase");
define("INV_INSTR_SYNCHRONISE", "Send invoice, credit note, income, and expenditure data from this database to the master database. This will overwrite any existing data in the master database with the same invoice, credit note, income, or expenditure numbers.");
define("INV_SYNC_ARE_YOU_SURE", "WARNING! This will overwrite data on your master database(s). Click OK to upload the data, or Cancel to abort.");
define("INV_MASTER_DB_TEST_SUCCESS", "Connected to Master Database Successfully");
define("INV_MASTER_DB_NOT_IN_USE", "Cannot update master database - you must set 'Use Master Database' to 'Yes' before trying to upload.");
define("INV_SYNCHRONISATION_ERROR", "An error occurred whilst attempting to upload to the master database. Upload aborted! The error message returned by the database was: %s");
define("INV_SYNCHRONISE_RECORD_COUNT", "%s Record(s) Inserted, and %s Record(s) Updated on the Master Database");
define("INV_SYNCHRONISE_NEED_GEN", "CANNOT CONTINUE! One or more income or expenditure records (either on this database, or on a master database) has not yet been assigned a number. You must generate payment and/or receipt numbers before synchronisation (generating receipt or payment numbers on this database will also generate any outstanding on the master database(s)).");
define("INV_SYNC_UP_TO", "Synchronise records up to and including (yyyy/mm/dd)");
define("INV_SUPPRESS_GENERATION_BUTTONS", "Suppress Generation Buttons?");
define("INV_INSTR_SUPPRESS_GENERATION_BUTTONS", "Whether or not to suppress the display of toolbar buttons to allow payment/receipt number generation. You should ONLY set this to 'yes' if this is a master database, which has a child database on which the number generation should be performed (see master database section, below). If you set a child database to use THIS copy of " . INV_BRANDING_NAME . " as a master, the value will be set to 'yes' automatically. YOU THEREFORE DO NOT USUALLY NEED TO DO ANYTHING WITH THIS SETTING unless you used to have a child database pointing to this one, but no longer do (in which case you would change it from 'yes' to 'no').");
define("INV_ADD_PAYLINK", "Vi sbetalings link på fakturaer?");
define("INV_INSTR_ADD_PAYLINK", "Om du vil legge til en kobling til ubetalte fakturaer generert for denne leverandøren som tillater kunden å betale fakturaen på nett.");
define("INV_MASTER_DB_SECTION", "Hoveddatabase");

//Version 1.2.1 - Note to translators:
//Line 74 of original English language file amended (INV_INSTR_EMAIL_INVOICE_OPTIONS) - additional note added

//Version 1.2.7
define("INV_EMAIL_PDF_AVAILABILITY", " (PDF alternativet er kun tilgjengelig om <a href=\"http://www.nbill.co.uk/html2ps.html\" target=\"_blank\">HTML2PS/PDF</a> skriptet er lastet opp)");
?>
