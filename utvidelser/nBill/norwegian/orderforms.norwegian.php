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

//Order Forms
define("INV_ORDER_FORMS_TITLE", "Bestillingsskjema");
define("INV_ORDER_FORMS_INTRO", "Bestillingsskjemaene gjør at brukerne kan bestille produkter gjennom brukersidene på forsiden (Frontend). Du kan ha hvilke som helst felter i skjemaet, og knytte et eller flere av feltene sammen med ett eller flere produkter (du kan føre til et annet produkt å være organisert, avhengig av verdien en bruker angir for et felt). Når du bruker denne funksjonen for første gang, kan du gå til %s");
define("INV_ORDER_FORMS_DOC_LINK", "Tilgjengelig dokumentasjon");
define("INV_FORM_PUBLISHED", "Publisert?");
define("INV_INSTR_FORM_PUBLISHED", "Vise skjema på nettsiden/brukersidene");
define("INV_FORM_TITLE", "Tittel på skjema");
define("INV_PUBLISHED", "Publisert");
define("INV_EDIT_ORDER_FORM", "Rediger bestillingsskjemaet");
define("INV_NEW_ORDER_FORM", "Nytt bestillingsskjema");
define("INV_FORM_DETAILS", "Skjemadetaljer");
define("INV_ORDER_FORM_INTRO_NEW", "Siden dette er et nytt skjema, kan du angi grunnleggende informasjon nedenfor. Når du har klikket på 'Bruk' (eller 'Lagre' og deretter kommer tilbake til skjemaet for å redigere det) er dette 'feltet' det første (fordi det er det du er mest sannsynlig har behov for å oppdatere/redigere).");
define("INV_ORDER_FORM_INTRO", "");
define("INV_FORM_TAB_DETAILS", "Detaljer");
define("INV_FORM_TAB_FIELDS", "Felter");
define("INV_FORM_TAB_ORDER_VALUES", "Bestilling");
define("INV_FORM_TAB_ADVANCED", "Avansert");
define("INV_INSTR_FORM_TITLE", "Navnet på bestillingsskjema.");
define("INV_FORM_INTRO", "Innledning");
define("INV_INSTR_FORM_INTRO", "Dette er det innledende innholdet som skal vises før skjemafeltene. Bruk dette til å gi instruksjoner om å fylle ut skjemaet.");
define("INV_FORM_FOOTER", "Footer");
define("INV_INSTR_FORM_FOOTER", "Tekst som vises etter skjemafeltene.");
define("INV_FORM_BORDER", "Tabellkantlinje?");
define("INV_INSTR_FORM_BORDER", "Vise en ramme rundt celler i ordreskjemaet.");
define("INV_FORM_LOGGED_IN_ONLY", "Kun innloggede brukere?");
define("INV_INSTR_FORM_LOGGED_IN_ONLY", "Begrens dette bestillingsskjemaet til å kun være tilgjengelig for brukere som har logget inn.");
define("INV_FORM_PREREQ_PRODUCTS", "Forutsatte produkter");
define("INV_INSTR_FORM_PREREQ_PRODUCTS", "Hvis kunden allerede må et bestemt produkt før de kan benytte dette ordreskjemaet (f.eks. i forbindele med en oppgradering), spesifiser dette produktet her. Hvis mer enn et produkt er valgt vil brukeren få tilgang til skjemaet hvis han/hun har et av disse produktene.");
define("INV_FORM_PREREQ_CATS", "Kategorier");
define("INV_FORM_PREREQ_CAT_PROD", "Produkter");
define("INV_FORM_PREREQ_SELECTED_PROD", "Valgte produkt(er)");
define("INV_FORM_EMAIL_CLIENT", "E-post bekreftelse til kunde?");
define("INV_INSTR_FORM_EMAIL_CLIENT", "Skal det sendes e-post bekreftelse når ordreskjemaet er sendt?");
define("INV_FORM_EMAIL_ADMIN_PENDING", "E-post: Ordre på vent til Admin?");
define("INV_INSTR_FORM_EMAIL_ADMIN_PENDING", "Skal det sendes e-post til administrator når det er laget en ny 'Avventende' ordre?");
define("INV_FORM_EMAIL_ADMIN", "Send ordren på e-post til administrator?");
define("INV_INSTR_FORM_EMAIL_ADMIN", "Skal det sendes e-post til administrator når det er laget en ny ordre?");
define("INV_FORM_VALIDATION_CODE", "Valideringskode");
define("INV_INSTR_FORM_VALIDATION_CODE", "PHP-kode som skal evalueres for validering av innsendt ordre. Tildel en verdi til \$error_message for å avvise innsending av ordre. Legg til feltnavn(ene) for de feltene som ikke ble validert til \$fields_in_error[] utvalget slik at disse feltene blir uthevet når skjemaet vises på nytt. Hvis du er usikker på dette kan du la feltet være blankt.");
define("INV_FORM_PROCESS_CODE", "Behandler kode");
define("INV_INSTR_FORM_PROCESS_CODE", "PHP-kode som skal evalueres når ordreskjemaet er oppdatert, men ikke innsendt (f.eks. hvis du har en egen knapp/funksjon for å sjekke et eller annet før ordren kan sendes). Hvis du er usikker på dette kan du la feltet være blankt.");
define("INV_FORM_SUBMIT_CODE", "Send kode");
define("INV_INSTR_FORM_SUBMIT_CODE", "PHP-kode som skal evalueres når ordreskjemaet er sendt inn og valideringen er vellykket. Hvis du er usikker på dette kan du la feltet være blankt.");
define("INV_FORM_PENDING_UNTIL_PAID", "Skal ordren settes på 'Vent' til den er betalt?");
define("INV_INSTR_FORM_PENDING_UNTIL_PAID", "Skal det lages en 'Vente-ordre' når ordreskjemaet er sendt inn? Ordrer på 'Vent' kan aktiveres av administrator eller av en betalingsmodulene (når utvidelsen registrerer godkjent betaling). Anbefalt innstilling er 'Ja' slik at det kun blir registrert poster for betalte varer.");
define("INV_FORM_AUTO_CREATE_ORDERS", "Autogenerering av ordre(r)?");
define("INV_INSTR_FORM_AUTO_CREATE_ORDERS", "Skal det automatisk genereres ordre(r) når ordreskjemaet er registrert? Hvis du har valgt 'Ja' på 'Vente-ordre' vil ikke ordren bli generert før betaling er registrert og godkjent eller når ordren blir aktivert av en administrator.");
define("INV_FORM_AUTO_CREATE_USER", "Autogenerering av bruker?");
define("INV_INSTR_FORM_AUTO_CREATE_USER", "Skal det automatisk opprettes en bruker for kunden når ordreskjemaet aktiveres?. Hvis du har valgt 'Ja' på 'Vente-ordre' vil ikke ordren bli generert før betaling er registrert og godkjent eller når ordren blir aktivert av en administrator.");
define("INV_FORM_AUTO_CREATE_INVOICE", "Autogenerering av faktura?");
define("INV_INSTR_FORM_AUTO_CREATE_INVOICE", "Skal det opprettes en faktura automatisk når ordreskjemaet aktiveres? Hvis du har valgt 'Ja' på 'Vente-ordre' vil ikke ordren bli generert før betaling er registrert og godkjent eller når ordren blir aktivert av en administrator.");
define("INV_FORM_AUTO_CREATE_INCOME", "Autogenerering av bilag?");
define("INV_INSTR_FORM_AUTO_CREATE_INCOME", "Skal det automatisk opprettes et bilag for betalingen når den er registrert? Dette vil kun skje når betalingen er fullført og godkjent.");
define("INV_PAYMENT_GATEWAY", "Betalingsformidler");
define("INV_INSTR_PAYMENT_GATEWAY", "Velg betalingsformidler som kunder skal videresendes til etter at ordreskjemaet er innsendt. (Merk! Dette kan overstyres av en feltliste hvis du ønsker å tilby kunden flere valgmuligheter, eller du kan velge leverandør i ordre-fanen).");
define("INV_ORDER_VALUES_INTRO", "Det er en del parametere som må registreres før det kan genereres en ny ordre. Disse parameterene kan enten settes av administrator ved å skrive de inn under, eller de kan registreres ved hjelp av ordreskjemaet kunden fyller inn. For å bruke parametere fra ordreskjemaet må du spesifisere hvilke felt som skal benyttes til de ulike parameterene 'Felt'-fanen (Velg feltet det gjelder og velg deretter en verdi fra nedtrekklisten). Alternativt kan du velge en verdi i følgende format: ##field_id##, hvor field_id er id-nummeret til feltet som inneholder verdien (se id-kolonnen i feltlisten på 'Felt'-fanen).");
define("INV_FORM_RELATING_TO", "Tilhørende");
define("INV_INSTR_FORM_RELATING_TO", "En fast verdi for hva ordren tilhører eller informasjon som representerer en feltverdi (f.eks. ##23##).");
define("INV_FORM_CARRIAGE_ID", "Transportør ID");
define("INV_INSTR_FORM_CARRIAGE_ID", "En fast verdi for transportøren (ID-nummer som vist på %s), eller informasjon som representerer en feltverdi (f.eks. ##23##).");
define("INV_CARRIAGE_LIST", "Transportør-liste");
define("INV_FORM_TAX_EXEMPTION_CODE", "Kode for avgiftsfritak");
define("INV_INSTR_FORM_TAX_EXEMPTION_CODE", "En fast verdi for avgiftsfritak (lite brukt), eller informasjon som representerer en feltverdi (f.eks. ##23##).");
define("INV_FORM_PAYMENT_FREQUENCY", "Kode for betalingshyppighet");
define("INV_INSTR_FORM_PAYMENT_FREQUENCY", "En fast verdi for betalingshyppighet ('AA'=Engangsbetaling; 'BB'=Ukentlig; 'BX'=Hver fjerde uke; 'CC'=Månedlig; 'DD'=Kvartalsvis; 'DX'=Halvårlig; 'EE'=Årlig; 'FF'=Hvert andre år; 'GG'=Hvert femte år; 'HH'=Hvert tiende år; 'XX'=Ikke i bruk), eller informasjon som representerer en feltverdi (f.eks. ##23##).");
define("INV_FORM_CURRENCY", "Valuta");
define("INV_INSTR_FORM_CURRENCY", "En fast verdi for valuta'en (NOK/EUR/USD), eller informasjon som representerer en feltverdi (f.eks. ##23##). Hvis feltet er tomt vil leverandørens standardverdi for valuta benyttes.");
define("INV_FORM_UNIQUE_INVOICE", "Unik faktura?");
define("INV_INSTR_FORM_UNIQUE_INVOICE", "En fast verdi for å bestemme om ordren skal ha separat faktura (0 for 'Nei' eller 1 for 'Ja'), eller informasjon som representerer en feltverdi (f.eks. ##23##).");
define("INV_FORM_SHOW_SUMMARY", "Vis sammendrag?");
define("INV_INSTR_FORM_SHOW_SUMMARY", "Skal det vises et sammendrag før ordren avsluttes slik at kunden får mulighet til å redigere ordren?");
define("INV_FORM_CAPTURE_CLIENT_DATA", "Innhent kundedata?");
define("INV_INSTR_CAPTURE_CLIENT_DATA", "Skal kundens navn og adresse innhentes? Hvis denne er satt til 'Nei' vil det ikke være mulig å generere faktura eller sende kunden videre til side for betaling. Settes denne verdien til 'Nei' vil det være et rent skjema uten integrasjon med " . INV_BRANDING_NAME . " (passer fint for testversjoner hvor det ikke skal faktureres noe.) ADVARSEL! Hvis du setter denne til 'Nei', men allikevel ønsker å motta e-post med detaljene må du skrive din egen kode for sending av skjema på 'Avansert'-fanen (eksempel-kode er tilgjengelig på " . INV_BRANDING_NAME . " sider).");
define("INV_FORM_AUTO_RENEW", "Automaitsk fornyelse?");
define("INV_INSTR_FORM_AUTO_RENEW", "En fast verdi for å bestemme om ordren skal fornyes automatisk etter at hver betaling, eller informasjon som representerer en feltverdi (f.eks. ##23##). Velg 1 for 'Ja' eller 0 for 'Nei' (hvis denne er satt til '0' vil ordren bli behandlet som kontantordre (engangsbetaling med pris fra aktuell betalingsplan). Det vil ikke bli generert nye fakturaer eller betalinger og kunden må fornye abonnementet manuelt. Bruk påminnelsesfunksjonen hvis du ønsker å sende påminnelse med betalingslenke til kunden når det er på tide med fornyelse."); 
define("INV_FORM_EXPIRY_DATE", "Utløpsdato (%s)");
define("INV_INSTR_FORM_EXPIRY_DATE", "en fast verdi som representerer utløpsdato for ordren eller informasjon som representerer en feltverdi (f.eks. ##23##). Hvis feltet er tomt vil ordren bli liggende permanent. Bruk følgende format; %s. OBS: Ikke alle betalingsløsninger støtter utløpsdato. Hvis den løsningen du bruker ikke støtter dette må du selv kansellere betalingen med PSP. Benytt påminnelsesfunksjonen hvis du ønsker å motta e-post når en ordre utløper.");

//Fields
define("INV_FORM_FIELDS_INTRO", "Dette er de ulike kontrollverdiene som vises på skjemaet (tekstbokser, nedtrekklister, knapper ol.).");
define("INV_FORM_FIELD_ID", "ID");
define("INV_FORM_FIELD_TYPE", "Type");
define("INV_FORM_FIELD_NAME", "Navn");
define("INV_FORM_FIELD_LABEL", "Etikett");
define("INV_FORM_FIELD_SUFFIX", "Etikett for avkrysningsboks");
define("INV_FORM_FIELD_REQUIRED", "Nødvendig");
define("INV_FORM_FIELD_NOT_REQUIRED", "Ikke nødvendig");
define("INV_FORM_FIELD_ORDERING", "Ordre");
define("INV_FORM_FIELD_PUBLISHED", "Publisert");
define("INV_FORM_FIELD_UNPUBLISHED", "Ikke publisert");
define("INV_FORM_FIELD_MORE", "Mer");
define("INV_FORM_FIELD_EDIT", "Endre...");
define("INV_FORM_FIELD_OPTIONS", "Valg...");
define("INV_FORM_FIELD_DELETE", "Slett");
define("INV_FORM_FIELD_EDIT_FIELD", "Endre felt");
define("INV_FORM_FIELD_EDITING_INTRO", "Legg inn feltverdiene her. Hold musemarkøren over det blå informasjonsikonet for å få hjelp med verdiene.");
define("INV_FORM_FIELD_EDIT_ATTRIBUTES", "HTML-attributter");
define("INV_FORM_FIELD_EDIT_DEFAULT_VALUE", "Standardverdi");
define("INV_FORM_FIELD_EDIT_PRE_FIELD", "For-felt");
define("INV_FORM_FIELD_EDIT_POST_FIELD", "Etter-felt");
define("INV_FORM_FIELD_EDIT_HELP_TEXT", "Hjelpetekst");
define("INV_FORM_FIELD_EDIT_RELATED_PRODUCT_CAT", "Tilhørende produktkategori");
define("INV_FORM_FIELD_EDIT_RELATED_PRODUCT", "Tilhørende produkt");
define("INV_FORM_FIELD_EDIT_VALUE_REQUIRED_FOR_ORDER", "Verdi påkrevd for ordre");
define("INV_FORM_FIELD_HELP_ATTRIBUTES", "Ekstra HTML-attributter (Hvis du ikke vet hva en HTML-attributt er lar du feltet være tomt).");
define("INV_FORM_FIELD_HELP_DEFAULT_VALUE", "");
define("INV_FORM_FIELD_HELP_DEFAULT_VALUE_OPTIONS", "There are specific options defined this field (to change these, click on the `options` button for the field on the main field list). The only values that you will be able to select here are those defined option values (because they will be the only values available to the end user when they are using this form).");
define("INV_FORM_FIELD_HELP_HELP_TEXT", "Enter some text here that will help the end user understand how to fill in this field. Where help text has been defined, an info icon will appear on the form, and the text will be displayed when the user hovers their mouse over it (just like the one you are hovering over now!).");
define("INV_FORM_FIELD_HELP_PRE_FIELD", "Anything you enter here will be output on the form immediately before the field itself. You can use HTML code if you wish.");
define("INV_FORM_FIELD_HELP_POST_FIELD", "Anything you enter here will be output on the form immediately after the field itself. You can use HTML code if you wish.");
define("INV_FORM_FIELD_HELP_RELATED_PRODUCT_CAT", "If you want the selection of a certain value for this field to result in a product being ordered, specify the category of the product here. NOTE: You can also specify different products for different option values using the `Options` button for the field on the main field list.");
define("INV_FORM_FIELD_HELP_RELATED_PRODUCT", "If you want the selection of a certain value for this field to result in a product being ordered, specify the product here. NOTE: You can also specify different products for different option values using the `Options` button for the field on the main field list.");
define("INV_FORM_FIELD_HELP_VALUE_REQUIRED_FOR_ORDER", "If you only want the above product to be ordered in the event that the this field matches a certain value, enter the value here. If you leave this blank AND select a product above, the product will be ordered if ANY value is entered for the field.");
define("INV_FORM_FIELD_HELP_VALUE_REQUIRED_FOR_ORDER_OPTIONS", "If you only want the above product to be ordered in the event that the this field matches a certain value, enter the value here. If you leave this set to `Not Applicable` AND select a product above, the product will be ordered if ANY value is entered for the field.");
define("INV_FORM_FIELD_ORDER_VALUE", "Ordreverdi");
define("INV_FORM_FIELD_HELP_ORDER_VALUE", "Velg ordreverdien her om du ønsker å bruke verdien fra dette feltet som en av ordreverdiene (se også 'Ordre'-fanen på redigeringsbilde for hovedskjema).");
define("INV_FORM_FIELD_EDIT_OPTIONS", "Rediger feltvalg");
define("INV_FORM_FIELD_OPTIONS_INTRO", "Spesifiser valgene som er tilgjengelig for sluttbrukere på dette feltet (Merk! Dette gjelder bare for felttyper som tilbyr flere valg, f.eks. nedtrekk- eller valglister).");
define("INV_OPTION", "Valg");
define("INV_NEW_OPTION", "Ny");
define("INV_OPTION_VALUE", "Verdi");
define("INV_OPTION_DESCRIPTION", "Beskrivelse");
define("INV_OPTION_ORDERING", "Sortering");
define("INV_OPTION_PRODUCT", "Relatert produkt");
define("INV_OPTION_VALUE_HELP", "Dette er verdien som vil bli lagret for feltet om bruker velger dette valget. Dette kan være forskjellig fra tekst eller verdi som vises for brukeren.");
define("INV_OPTION_DESCRIPTION_HELP", "Dette er teksten som vises til brukeren for dette valget.");
define("INV_OPTION_PRODUCT_HELP", "Om valg av av dette valget skal gi ordre på et bestemt produkt kan du spesifisere hvilket her. Velg en kategori fra den første listen, deretter produktet fra den andre.");
define("INV_OPTION_DELETE", "Slett");
define("INV_OPTION_ADD_NEW", "Legg til");
define("INV_FIELD_OPTION_ENTER_VALUE", "Fyll inn en verdi for det nye valget.");
define("INV_FIELD_OPTION_ENTER_DESCRIPTION", "Fyll inn en beskrivelse for det nye valget (dette kan være lik verdien, men behøver ikke nødvendigvis være det).");
define("INV_SAVE_ORDERING", "Lagre sortering");
define("INV_FIELD_ID_HELP", "Den unike identifikatoren for feltet (brukt med innstillingen på 'Ordre'-fanen for å spesifisere hva som skal gjøres med feltverdien).");
define("INV_FIELD_TYPE_HELP", "Type kontroll som skal vises for feltet. Valg- og nedtrekklister lar deg spesifisere et antall valg man kan velge fra. 'E-postadresse'-feltet er bare en tekstboks, men når skjema blir innsendt vil inntastet verdi bli sjekket for å sikre at det er en gyldig e-postadresse.");
define("INV_FIELD_NAME_HELP", "Det unike navnet for kontroll på skjema. Dette får ikke innholde mellomrom eller spesialtegn som tegnsetting. Det blir ikke vist til bruker.");
define("INV_FIELD_LABEL_HELP", "Merket som vises til bruker for denne kontrollen. Vises til venstre for kontrollen.");
define("INV_FIELD_SUFFIX_HELP", "Om feltet er en avkryssing fyller man inn tekst for denne her (denne teksten vises til høyre for avkryssingsfeltet)");
define("INV_FIELD_MORE_HELP", "Klikk på 'Rediger' for å spesifisere flere innstillinger for feltet. 'Valg' er bare tilgjengelig om felttypen krever at fler-valg vises til brukeren (f.eks. for et nedtrekksfelt).");
define("INV_FORM_FIELD_ADD", "Legg til");
define("INV_NEW_FIELD_NAME_REQUIRED", "Fyll inn et navn for det nye feltet.");
define("INV_NEW_FIELD_TYPE_REQUIRED", "Velg hvilken type felt du vil legge til.");
define("INV_FIELD_NAME_NOT_UNIQUE", "Feltnavnet '%s' er ikke unikt. Velg et unikt navn.");
define("INV_FIELD_DEF_MISSING", "Feltets definasjonsoppføring mangler i din database. Dette burde ikke kunne skje, med mindre du har slettet oppføringen direkte i databasen. Kontakt " . INV_BRANDING_COMPANY . " om du behøver brukerstøtte (kun tilgjengelig på engelsk).");

//Field Types
define("INV_FLD_TEXTBOX", "Tekstboks");
define("INV_FLD_DROPDOWN", "Nedtrekkliste");
define("INV_FLD_EMAIL", "E-postadresse");
define("INV_FLD_RADIOLIST", "Valgliste");
define("INV_FLD_CHECKBOX", "Avkryssing");
define("INV_FLD_TEXTAREA", "Tekstfelt");
define("INV_FLD_DATE", "Dato");
define("INV_FLD_HIDDEN", "Skjult");
define("INV_FLD_LABEL", "Merke");
define("INV_FLD_JAVASCRIPT_BUTTON", "JavaScript-knapp");
define("INV_FLD_SUBMIT_BUTTON", "Fullfør-knapp");
define("INV_FLD_JWHOIS_LOOKUP", "J!Whois-oppslag");
define("INV_FLD_FILE_UPLOAD", "Filopplasting"); 

define("INV_FORM_VOUCHER_CODE", "Rabattkode");
define("INV_INSTR_FORM_VOUCHER_CODE", "Either a static value for the discount voucher to apply, or a token representing a field value (eg. ##23##).");
define("INV_FORM_ORDER_GATEWAY", "Betalingsmodul");
define("INV_INSTR_FORM_ORDER_GATEWAY", "Either a static value for the payment gateway to use, or a token representing a field value (eg. ##23##). The value here defaults to the value entered on the 'Details' tab, and if amended here, overrides that value.");
define("INV_FORM_CLIENT_DATA_INTRO", "Client Data Intro");
define("INV_INSTR_FORM_CLIENT_DATA_INTRO", "Introductory text to display on the client data capture page (if the user is not logged in, and the 'single page' option below is set to 'no', the order form will first display a login/registration page which captures the basic client details - the rest of the order form will appear on a 2nd page. This field specifies what to display on the first page, but the content will not be displayed if 'single page' is set to 'yes').");
define("INV_FORM_SINGLE_PAGE", "En enkelt side?");
define("INV_INSTR_FORM_SINGLE_PAGE", "Whether to merge client data capture with the rest of the form so that it only ever shows a single page (if 'yes', the client data intro text (above) will NOT be displayed - only the main form introduction (below) will be shown).");
define("INV_FORM_SHOW_LOGIN_BOX", "Vis innlogging?");
define("INV_INSTR_FORM_SHOW_LOGIN_BOX", "Whether or not to display a login box if the user is not logged in.");
define("INV_CREATE_MENU_ITEM", "Opprett menypunkt");
define("INV_CREATE_MENU_ITEM_HELP", "Velg en meny (om du har mer enn en), klikk på knappen for å opprette et menypunk som vil lenke til dette ordreskjemaet. Du kan deretter endre plassering, redigere eller slette menypunktet fra menybehandleren.");
define("INV_CREATE", "Opprett");
define("INV_CREATE_MENU_NAME", "Please enter the text you want to display for the menu item link.");
define("INV_MENU_ITEM_CREATED", "Menu Item Created Successfully.");
define("INV_MENU_ITEM_NOT_CREATED", "Sorry, the Menu Item could not be created.");
define("INV_MENU_ITEM_TO_EDIT", "to edit the Menu Item.");
define("INV_ORDER_CREATION_CODE", "Order Creation Code");
define("INV_INSTR_ORDER_CREATION_CODE", "PHP code to evaluate when an order is created or processed for this order form (if `Pending until paid` is set to `yes`, this will only happen after payment has been received, or the pending order is activated by an administrator). This code will be called once for each order that is created (one order will be created for each different product) - use the \$product_id variable to identify which product an order record is being created for, and \$client_id to identify the client record. The order ID is also available in \$order_id. You should not rely on any other data being available (eg. if you need the client data, get it from the database, not the \$_POST values). If supported by the payment gateway, the code will also be called on each recurring payment (if the call is in relation to a recurring payment, the variable \$recurring will be set to true - so you can conditionally skip code execution for recurring payments if required). If that doesn't make sense to you, just leave this blank.");
define("INV_ORDER_FORM_TITLE_REQUIRED", "Please enter a title for this form.");
define("INV_FORM_FIELD_EDIT_RELATED_PRODUCT_QUANTITY", "Related Product Quantity");
define("INV_FORM_FIELD_HELP_RELATED_PRODUCT_QUANTITY", "Either a static value for the quantity of items to order (eg. `1`), or a token representing a field value (eg. ##23## - where 23 is the internal field id). You can use the field id for this field if you wish. NOTE: Only applicable if you have specified a related product. If left blank, the value will default to 1.");
define("INV_OPTION_QUANTITY", "Qty");
define("INV_OPTION_QUANTITY_HELP", "Either a static value for the quantity of items to order (eg. `1`), or a token representing a field value (eg. ##23## - where 23 is the internal field id). You can use the field id for this field if you wish. NOTE: Only applicable if you have specified a related product. If left blank, the value will be taken from the `Order` tab on the main form editor (and if that is also blank, it will default to 1).");
define("INV_FORM_DISQUAL_PRODUCTS", "Disqualifying Products");
define("INV_FORM_DISQUAL_CATS", "Kategorier");
define("INV_FORM_DISQUAL_CAT_PROD", "Produkter");
define("INV_FORM_DISQUAL_SELECTED_PROD", "Valgte produkt(er)");
define("INV_INSTR_FORM_DISQUAL_PRODUCTS", "If the user must NOT already have a certain product before they can use this order form (eg. if they already have it and are only allowed one, such as for user subscriptions), specify the disqualifying product(s) here. If more than one product is selected, the user will NOT be able to access this order form if they already have ANY one of the disqualifying products.");
define("INV_FLD_NUMERIC", "Numerisk");
define("INV_FORM_ADMIN_EMAIL_ADDR", "Admins e-postadresse");
define("INV_INSTR_FORM_ADMIN_EMAIL_ADDR", "E-Mail address of administrator if different from vendor email address (leave blank to use vendor email)");
define("INV_FORM_FIELD_MERGE", "Merge Cols");
define("INV_FORM_FIELD_MERGED", "Columns merged");
define("INV_FORM_FIELD_NOT_MERGED", "Columns not merged");
define("INV_MERGE_COLS_HELP", "Whether or not to merge the label column with the value column when displaying the form (typically for use with field type `label`)");
define("INV_ERR_FLD_NAME_IS_RESERVED_WORD", "Sorry, '%s' is a reserved word that is used by " . INV_BRANDING_NAME . " - you cannot use it as a field name.");
define("INV_FORM_AUTO_HANDLE_CARRIAGE", "Automatically Handle Carriage?");
define("INV_INSTR_FORM_AUTO_HANDLE_CARRIAGE", "Whether or not to automatically select and apply the most appropriate carriage rate(s), or offer the relevant choices to the user if more than one rate could be applied.");
define("INV_FORM_USE_EMAIL_ADDRESS", "Use E-Mail Address as Username?");
define("INV_INSTR_FORM_USE_EMAIL_ADDRESS", "Whether or not to use the e-mail address as the username for new users created by this form (thus not requiring the user to select a username). WARNING! This requires a hack to a core file to allow hyphens in usernames, and to increase the username field length. See " . INV_BRANDING_NAME . " documentation for more information.");
define("INV_JAVASCRIPT_FUNCTIONS", "Javascript Functions");
define("INV_INSTR_JAVASCRIPT_FUNCTIONS", "Enter any Javascript that you want to be inserted into the &lt;head&gt; section. Please do not include the &lt;script&gt; tags - just the actual function definitions.");
define("INV_UPLOAD_PATH", "Upload Path");
define("INV_INSTR_UPLOAD_PATH", "Enter the full path name where you want to store files that are uploaded by users (folder must be writeable by the user that PHP runs under). After you have entered a valid, writeable path here, you must click on either 'Apply' or 'Save' before the file upload field type will become available for use on this form.");
define("INV_UPLOAD_MAX_SIZE", "Upload Max File Size");
define("INV_INSTR_UPLOAD_MAX_SIZE", "Enter the maximum file size (in Kilobytes) that can be uploaded.");
define("INV_UPLOAD_ALLOWED_TYPES", "Allowed File Types");
define("INV_INSTR_UPLOAD_ALLOWED_TYPES", "Enter a pipe (|) delimited list of field types that are allowed to be uploaded (eg. .jpg|.bmp|.gif). Leave blank to allow any file type to be uploaded.");
define("INV_ATTACH_TO_EMAIL", "Attach to Admin E-Mail?");
define("INV_INSTR_ATTACH_TO_EMAIL", "Whether or not to attach uploaded files to the confirmation e-mail that gets sent to the administrator (if applicable).");
define("INV_SECURITY_IMAGE", "Use Security Image?");
define("INV_INSTR_SECURITY_IMAGE", "Whether or not to display a CAPTCHA style security image to prevent spamming (requires the PHP GD and truetype library to be installed on your web server).");

//Version 1.2.0
define("INV_ORDER_FORM_LINK", "You can link to this order form from your website content using the following URL: %s");
define("INV_ORDER_FORM_LINK_PREPOP", "Note: You can also pre-populate fields on your form by adding URL parameters. For example, if you have a field on your form called 'message', you could add &quot;&amp;message=hello%20world&quot; (without the quotes) to the end of the above URL to pre-populate that field with the value 'hello world'. This could be useful for example where there are several products that can be ordered on the form, and you want to pre-select the product to order depending on which article the link appears in.");
define("INV_ORDER_FORM_THANK_YOU", "Thank You Message");
define("INV_INSTR_ORDER_FORM_THANK_YOU", "If the user is not redirected elsewhere by the payment gateway (or by your own redirect setting, above), this is the message that will be displayed on successful submission of the order form.");
define("INV_FORM_DEFAULT_THANK_YOU", "Thank you for your order.");
define("INV_ORDER_FORM_DUPLICATE_PRODUCTS", "WARNING! You have assigned a product to a field TWICE on the order form(s) highlighted below. This will result in the product being ordered twice. You should only assign a product on EITHER the edit field popup OR the options popup, not both.");
define("INV_ORDER_FORM_PRE_SUBMIT", "Pre-Submit Code");
define("INV_INSTR_ORDER_FORM_PRE_SUBMIT", "PHP code to evaluate after the form is submitted by the user, but before it is processed by " . INV_BRANDING_NAME . " (allows you to modify the values of any of the fields before the amounts are calculated). If that doesn't make sense to you, just leave this blank.");

//Version 1.2.1
define("INV_ORDER_FORM_FIELD_RESERVED_WORD", "Sorry, `%s` is a reserved word with a special meaning. Please select a different name for this field.");
define("INV_ORDER_FORM_THANK_YOU_REDIRECT", "Order Complete Redirect");
define("INV_INSTR_ORDER_FORM_THANK_YOU_REDIRECT", "If you want to redirect the user to another page when an order is submitted instead of displaying the thank you message defined below, please enter a URL here. NOTE: This will have no effect if the payment gateway performs its own redirect.");
define("INV_ORDER_FORM_EXPIRE_AFTER", "Number of Billing Cycles");
define("INV_INSTR_ORDER_FORM_EXPIRE_AFTER", "If you want to automatically calculate the expiry date for the order based on a certain number of payment cycles, enter the number of payments here, or leave blank if you don't want to automatically calculate an expiry date. For example, to bill monthly for 6 months then stop, set the payment frequency to monthly, and enter 6 here. To pick up the number of billing cycles from a field, enter the field ID surrounded by double-hashes, eg. ##23##");

//Version 1.2.5 - Note to translators
//Line 203 of original English language file amended (there is no longer a quantity setting on the order tab, so if the value is left blank it now just defaults to 1)

//Version 1.2.6
define("INV_FLD_PASSWORD", "Passord");
?>
