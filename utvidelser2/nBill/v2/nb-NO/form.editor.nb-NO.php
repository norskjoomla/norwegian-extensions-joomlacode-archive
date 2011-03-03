<?php
/**
* Language file for the Form Editor
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

define("NBILL_FORM_EDITOR_PREVIEW", "Skjema egenskaper:");
define("NBILL_FORM_EDITOR_PROPERTIES", "Side/feltegenskaper");
define("NBILL_FORM_EDITOR_SNAP", "Fest til rutenett");
define("NBILL_FORM_EDITOR_GRID_SIZE", "Rute størrelse");
define("NBILL_FORM_EDITOR_CANVAS_WIDTH", "Skjema bredde");
define("NBILL_FORM_EDITOR_CANVAS_HEIGHT", "Skjema høyde");
define("NBILL_FORM_EDITOR_MIN_PAGE_WIDTH", "Minimum sidebredde");
define("NBILL_FORM_EDITOR_MIN_PAGE_WIDTH_HELP", "Dette angir horisontal bredde som er tilgjengelig for feltene før de ’bryter linjen’. Dette vil ikke se bra ut, sørg for at du har nok plass til innholdet i skjemaet, eller sette inn et linjeskift i feltet hvis nødvendig. Hvis nettleservinduet endrer størrelse til mindre enn minimum sidebredde, vil innholde i skjemaet være skjult. Dersom bredden er for stor og det er annet innhold til høyre for hoveddelen på området (for eksempel i en modul), kan skjemaet overlappe dette innhold, som kan gjøre det umulig å klikke hyperkoblinger som vises i den. I så fall, gjør minimum sidebredde mindre. Hvis du bruker Internet Explorer, må du lagre skjemaet før endringer gjenspeiles i skjemautformingen.");
define("NBILL_FORM_EDITOR_LABEL_WIDTH", "Kolonnebredde etikett");
define("NBILL_FORM_EDITOR_LABEL_WIDTH_HELP", "Som standard vises feltene med en etikett til venstre og kontrollen til høyre, med kontrollene oppstilt i henhold til etiketten kolonnebredden angir du her. Hvis du vil plassere etikettene annerledes, bare sette `Slå sammen kolonner` til `ja` på feltet, og legge til et eget felt av typen `etiketten` for å fungere som etiketten (også med `slå sammen kolonner` satt til `ja`). Du kan deretter plassere etiketten og kontroll uavhengig av hverandre.");
define("NBILL_FORM_EDITOR_NO_PROPERTIES", "Klikk på et felt i venstre ruten for å se dens egenskaper her.");
define("NBILL_FORM_EDITOR_PROPERTIES_NOT_FOUND", "Ingen egenskaper ble funnet for det valgte feltet.");
define("NBILL_FORM_EDITOR_LOADING", "Laster egenskaper...");
define("NBILL_FORM_EDITOR_TAB_GENERAL", "Generelt");
define("NBILL_FORM_EDITOR_TAB_ADVANCED", "Avansert");
define("NBILL_FORM_EDITOR_TAB_PROCESS", "Behandler");
define("NBILL_FORM_EDITOR_FIELD", "Felt");
define("NBILL_FORM_EDITOR_FIELDS", "Felt");
define("NBILL_FORM_PAGE", "Side %s");
define("NBILL_FORM_NEW_PAGE", "Ny side");
define("NBILL_FORM_FIELD_DEFAULT_LABEL", "Felt %s");
define("NBILL_FORM_EDITOR_PAGE_ACTIONS", "Sidehandlinger:");
define("NBILL_FORM_EDITOR_ADD_FIELD", "Legg til nytt felt");
define("NBILL_FORM_EDITOR_MERGE_BY_DEFAULT", "Slå sammen kolonner");
define("NBILL_FORM_EDITOR_BTN_ADD_FIELD", "Ny");
define("NBILL_FORM_EDITOR_DELETE_FIELDS", "Slett");
define("NBILL_FORM_EDITOR_DELETE_SURE", "Er du sikker på at du vil slette det valgte feltet?");
define("NBILL_FORM_EDITOR_DELETE_SELECT", "Velg ett eller flere felt for å slette!");
define("NBILL_FORM_EDITOR_DELETE_SYSTEM", "Du kan ikke slette systemet felt (forrige/neste/sende knappene)");
define("NBILL_FORM_EDITOR_CLOSE_GAPS", "Lukk mellomrom?");
define("NBILL_FORM_EDITOR_CLOSE_GAPS_HELP", "I tilfelle at en eller flere felt ikke er publisert, og dette alternativet er merket flyttes etterfølgende felt for å lukke gapet ved å plassere dem i posisjon som ville vært okkupert av det forrige feltet (angi i tabulatorindeksen for å bestemme hvilket felt som skal flyttes hvor)");
define("NBILL_FORM_EDITOR_ONLOAD", "Ved åpning Javascript");
define("NBILL_FORM_EDITOR_ONLOAD_HELP", "Hvis du ønsker å kjøre javascript når denne siden lastes, skriv skriptet her.");
define("NBILL_FORM_EDITOR_EXTERNAL_JS_FILES", "Ekstern JS filer");
define("NBILL_FORM_EDITOR_EXTERNAL_JS_FILES_HELP", "Hvis du ønsker å laste inn eksterne javaskriptfiler når denne siden gjengis, skriver inn hele nettadressen til hver fil her (atskilt med et linjeskift hvis det er mer enn én).");
define("NBILL_FORM_EDITOR_PAGE_SUBMIT_CODE", "Send side kode");
define("NBILL_FORM_EDITOR_PAGE_SUBMIT_CODE_HELP", "Skriv inn eventuelle PHP-kode som du ønsker skal utføres når denne siden sendes(dvs. når brukeren beveger seg fra denne siden til neste side). Angi \$abort flagg til sann hvis du ønsker å forlate innsendingssiden og holde brukeren på denne siden.");
define("NBILL_FORM_DELETE_PAGE", "Slett denne siden");
define("NBILL_FORM_DELETE_PAGE_SURE", "Er du sikker på at du vil slette siden %s INKLUDERT alle felt den inneholder?");
define("NBILL_FORM_SELECT_ALL", "Velg alle felt");
define("NBILL_EDIT_PAGE_INTRO", "+ Klikk for å rediger introsiden");
define("NBILL_HIDE_PAGE_INTRO", "- Klikk for å skjule introsiden");
define("NBILL_EDIT_PAGE_FOOTER", "+ Klikk for å rediger bunntekst");
define("NBILL_HIDE_PAGE_FOOTER", "- Klikk for å skjule bunntekst");

//Validation
define("NBILL_ADVANCED_PROPERTY_WARNING", "ADVARSEL! Egenskaper på denne fanen er bare for avanserte brukere. Ikke bruk disse egenskapene med mindre du er kjent med HTML og/eller SQL, ellers kan du lage alvorlig feil på skjemaet ditt!");
define("NBILL_DATE_NOT_VALID", "Feltet `%s` krever en dato verdi. Vennligst angi en dato her i formatet %s.");
define("NBILL_FIELD_NAME_MANDATORY", "Feltnavnet er obligatorisk");
define("NBILL_FIELD_NAME_ALPHA_FIRST", "Det første tegnet i et feltnavn må være en bokstav, ikke et tall");
define("NBILL_FIELD_NAME_NO_SPACES", "Ingen mellomrom er tillatt i feltnavn");
define("NBILL_FIELD_NAME_ALPHANUM", "Bare bokstaver og tall er tillatt i feltnavn");
define("NBILL_FIELD_NAME_PREV_NEXT", "Feltnavnene kan ikke starte med `prev_` eller `next_` da disse navnene er brukt for navigeringsknapper");
define("NBILL_FIELD_NAME_IN_USE_WARNING", "ADVARSEL! Feltnavnet `%s` er allerede i bruk av et annet felt. Selv om dette er tillatt, kan det forårsake uønskede bivirkninger! Er du sikker på at du vil bruke dette navnet?");

//Field Properties
define("NBILL_FORM_FIELD_ID", "ID");
define("NBILL_FORM_FIELD_TYPE", "Type");
define("NBILL_FORM_FIELD_NAME", "Navn");
define("NBILL_FORM_FIELD_PAGE_NO", "Sidetall");
define("NBILL_FORM_FIELD_COORDS", "Koordinater");
define("NBILL_FORM_FIELD_X_POS", "X");
define("NBILL_FORM_FIELD_Y_POS", "Y");
define("NBILL_FORM_FIELD_Z_POS", "Z");
define("NBILL_FORM_FIELD_TAB_ORDER", "Tabulatorindeks");
define("NBILL_FORM_EDITOR_AUTO_TAB", "Auto-tab ved lagring?");
define("NBILL_FORM_FIELD_LABEL", "Etikett");
define("NBILL_FORM_FIELD_SUFFIX", "Etikett avkryssingsboks");
define("NBILL_FORM_FIELD_HORIZONTAL", "Horisontal Valg");
define("NBILL_FORM_FIELD_REQUIRED", "Obligatorisk");
define("NBILL_FORM_FIELD_NOT_REQUIRED", "Ikke nødvendig");
define("NBILL_FORM_FIELD_ORDERING", "Rekkefølge");
define("NBILL_FORM_PUBLISHED", "Publisert");
define("NBILL_FORM_PUBLISHED_ALL", "Synlig for alle");
define("NBILL_FORM_UNPUBLISHED", "Ikke synlig for noen");
define("NBILL_FORM_CLIENTS_ONLY", "Kun synlig for eksisterende kunder");
define("NBILL_FORM_NEW_ONLY", "Kun synlig for nye kunder");
define("NBILL_FORM_FIELD_PUBLISHED_HELP", "Om du vil vise dette feltet i skjemaet på nettstedets brukerside.");
define("NBILL_FORM_FIELD_ATTRIBUTES", "HTML attributter");
define("NBILL_FORM_FIELD_DEFAULT_VALUE", "Standardverdi");
define("NBILL_FORM_FIELD_PRE_FIELD", "Før-felt");
define("NBILL_FORM_FIELD_POST_FIELD", "Etter-felt");
define("NBILL_FORM_FIELD_HELP_TEXT", "Hjelpetekst");
define("NBILL_FORM_FIELD_RELATED_PRODUCT_CAT", "Relatert produktkategori");
define("NBILL_FORM_FIELD_RELATED_PRODUCT", "Relaterte produkter");
define("NBILL_FORM_FIELD_VALUE_REQUIRED_FOR_ORDER", "Verdi kreves for rekkefølge");
define("NBILL_FORM_FIELD_ATTRIBUTES_HELP", "Skriv inn ekstra HTML attributter som du vil legge til HTML-kontrollen - f.eks. style=&quot;width:200px;&quot;.  Du kan også legge til Javaskript hendelser her (hvis du ikke vet hva en HTML-attributt eller Javaskript hendelse er, bare la dette stå tomt).");
define("NBILL_FORM_FIELD_DEFAULT_VALUE_HELP", "Hvis du ønsker å forhåndsutfylle en verdi for dette feltet, angir du verdien her (for å velge en avmerkingsboks, skrive inn ordet `On`). Etikettfelttyper støtte HTML for denne innstillingen. Du kan også utføre PHP koder ved å omgi den i dobbel dollartegn, for eksempel:<br />\$\$return date(&quot;d/m/Y&quot;);\$\$ (ADVARSEL! Fatal feil på PHP koden du skriver inn kan knekke nBill, og du må kanskje endre databasen direkte for å fjerne feilkoden! Kontroller at koden er uten feil før du lagrer!)");
define("NBILL_FORM_FIELD_DEFAULT_VALUE_OPTIONS_HELP", "Det finnes spesifikke valg definert for dette feltet (for å endre disse, klikk på `alternativ` knappen for feltet på hovedfeltlisten). De eneste verdiene som du vil kunne velge her er de definert alternativene (fordi de vil være de eneste verdiene tilgjengelig for sluttbrukeren når de bruker dette skjemaet).");
define("NBILL_FORM_FIELD_HELP_TEXT_HELP", "Du kan skrive inn tekst her som vil hjelpe sluttbrukeren å forstå hvordan du fyller ut dette feltet. Der hjelpeteksten er definert, vil et info ikon vises på skjemaet, og teksten vil vises når brukeren beveger musen over den. MERK: Dette kan være en ’språk konstant’ (typisk representert i store bokstaver) som gjør at verdien vil bli plukket opp fra språkfilen (etter at du har endret verdien, lagre endringene for å se teksten fra språkfil i stedet for ’språk konstanten’ i utformingsvinduet). Alternativt kan du bare skrive den eksakte teksten du ønsker å se.");
define("NBILL_FORM_FIELD_PRE_FIELD_HELP", "Alt du oppgir her vil det komme ut i skjemaet umiddelbart før selve feltet. Du kan bruke HTML-kode dersom du ønsker det.");
define("NBILL_FORM_FIELD_POST_FIELD_HELP", "Alt du oppgir her vil det komme ut i skjemaet umiddelbart etter selve feltet. Du kan bruke HTML-kode dersom du ønsker det.");
define("NBILL_FORM_FIELD_RELATED_PRODUCT_CAT_HELP", "Hvis du vil at valg av en viss verdi for dette feltet til å resultere i et produkt som bestilt, angi kategorien for produktet her. MERK: Du kan også angi forskjellige produkter for forskjellige alternativer ved hjelp av `Alternativ` knappen for feltet på hovedfeltlisten.");
define("NBILL_FORM_FIELD_RELATED_PRODUCT_HELP", "Hvis du vil at valg av en viss verdi for dette feltet til å resultere i et produkt som bestilt, angir du produktet her. MERK: Du kan også angi forskjellige produkter for forskjellige alternativer ved hjelp av `Alternativ` knappen for feltet på hovedfeltlisten.");
define("NBILL_FORM_FIELD_VALUE_REQUIRED_FOR_ORDER_HELP", "Hvis du vil at bare produktet over bestilles i det tilfelle at dette feltet samsvarer med en viss verdi, angir du verdien her. Hvis du lar dette stå tomt, OG velg et produkt ovenfor, vil produktet bestilles for ENHVER verdi som blir angitt for feltet.");
define("NBILL_FORM_FIELD_VALUE_REQUIRED_FOR_ORDER_OPTIONS_HELP", "Hvis du vil at bare produktet over bestilles i det tilfelle at dette feltet samsvarer med en viss verdi, angir du verdien her. Hvis du lar dette være ’Ikke aktuelt` OG velger et produkt ovenfor, vil produktet bestilles for ENHVER verdi som blir angitt for feltet.");
define("NBILL_FORM_FIELD_ORDER_VALUE", "Bestillingsverdi");
define("NBILL_FORM_FIELD_ORDER_VALUE_HELP", "Hvis du vil bruke verdien av dette feltet som en av bestillingsverdiene, velger bestillingsverdien her (se også `Bestillings` fanen på hovedskjemaet i skjemautformingen).");
define("NBILL_FORM_FIELD_ID_HELP", "Den unike identifikatoren for feltet (brukes med innstillingene på `Bestillings` fanen for å spesifisere hva som skal gjøres med feltverdiene).");
define("NBILL_FORM_FIELD_TYPE_HELP", "Type HTML kontroller å vise for dette feltet. Alternativlister og nedtrekksliste lar deg spesifisere en rekke alternativer å velge mellom.  `E-postadresse` feltet er bare en tekstboks, men når skjemaet er sendt blir verdien som er angitt validert for å kontrollere at det er en gyldig e-postadresse.");
define("NBILL_FORM_FIELD_NAME_HELP", "Det unike navn for kontrollen i skjemaet. Den kan ikke ha mellomrom eller spesialtegn som tegnsetting (unntatt understrekingstegn). Det vises ikke til brukeren.");
define("NBILL_FORM_FIELD_PAGE_NO_HELP", "Sidetallet dette feltet vises på (hvis ingen felt vises på en side, blir ikke siden vist på brukersiden).");
define("NBILL_FORM_FIELD_COORDS_HELP", "Styrer plassering av feltet på skjemaet. X definerer hvor mange piksler fra venstre til etiketten for feltet starter, definerer Y hvor mange piksler fra toppen, og Z definerer laget som feltet vil vises (dvs. i det tilfellet det overlapper et annet element, kan du kontrollere hvilke element som vises på toppen).");
define("NBILL_FORM_FIELD_TAB_ORDER_HELP", "Styrer rekkefølgen felt er gjengitt på siden, og derfor i hvilken rekkefølge de fleste nettlesere vil flytte markøren når brukeren trykker tabulatortasten. Det er også brukt til å finne ut hvordan du lukker mellomrom i tilfelle et felt ikke er publisert (hvis aktuelt).");
define("NBILL_FORM_PAGE_TAB_ORDER_HELP", "Sett tabulatorrekkefølgen automatisk for alle felt på denne siden (tilordner en numerisk tabulatorrekkefølge i henhold til posisjonen for hvert felt på siden - fra topp til bunn og fra venstre til høyre). Hvis auto-tab er slått på (under), så trenger du ikke å klikke på denne knappen!");
define("NBILL_FORM_EDITOR_AUTO_TAB_HELP", "Hvorvidt tabulatorrekkefølgen skal regenereres automatisk når skjemaet lagres (anbefales i de fleste tilfeller).");
define("NBILL_AUTO_TAB", "Auto generer...");
define("NBILL_AUTO_TAB_SURE", "Dette vil automatisk sette tabulatorrekkefølgen for hvert felt på DENNE SIDEN i henhold til posisjon på siden.");
define("NBILL_FORM_FIELD_LABEL_HELP", "Etiketten som vises for brukeren for denne kontrollen. Vises til venstre for kontrollen. MERK: Dette kan være en ’språk konstant’ (typisk representert i store bokstaver) som gjør at verdien vil bli plukket opp fra språkfilen (etter at du har endret verdien, lagre endringene for å se teksten fra språkfil i stedet for ’språk konstanten’ i utformingsvinduet). Alternativt kan du bare skrive den eksakte teksten du ønsker å se.");
define("NBILL_FORM_FIELD_SUFFIX_HELP", "Hvis felttypen er en avkryssingsboks, skriver inn teksten for avkryssingsboksen her (denne teksten vises til høyre for selve avkryssingsboksen)");
define("NBILL_FORM_FIELD_HORIZONTAL_HELP", "Hvis felttypen støtter det (vanligvis kun for alternativlister), denne innstillingen bestemmer om valgene vises horisontalt (alle på samme linje) eller vertikalt (der et linjeskift er satt inn mellom hvert valg).");
define("NBILL_FORM_FIELD_MERGE_COLS", "Slå sammen kolonner?");
define("NBILL_FORM_FIELD_MERGE_COLS_HELP", "Hvorvidt etiketten skal slås sammen med selve verdikolonnen ved visning av skjemaet");
define("NBILL_FORM_FIELD_XREF", "Kryss referanse");
define("NBILL_FORM_FIELD_XREF_HELP", "Hvis du vil fylle alternativene for en nedtrekksliste eller en alternativliste basert på verdiene i en databasetabell (i stedet for å definere hvert alternativ manuelt), kan du angi tabellen her. For å legge til din egne kryssreferansetabell, bare opprett en tabell i databasen med prefiks `%snbill_xref_`");
define("NBILL_FORM_FIELD_XREF_SQL", "XRef SQL");
define("NBILL_FORM_FIELD_XREF_SQL_HELP", "Hvis du velger å fylle valgene ved hjelp av den spesielle [SQL List] kryssreferansetabell, kan du skrive inn SQL her for å returnere en liste med navn / verdipar (bruk `kode` og `beskrivelse` som kolonnens alias)");
define("NBILL_FORM_FIELD_CONFIRMATION", "Vis bekreftelse?");
define("NBILL_FORM_FIELD_CONFIRMATION_HELP", "Velg om du vil spørre brukeren om å skrive inn informasjonen en andre gang for å unngå skrivefeil (typisk for e-postadresse eller passordfelt).");
define("NBILL_FORM_FIELD_INCLUDE_ON_FORMS", "Inkluder på skjemaer?");
define("NBILL_FORM_FIELD_INCLUDE_ON_FORMS_HELP", "Velg om du vil inkludere dette feltet på nye bestillingsskjemaer og anbudsskjemaer.");
define("NBILL_FORM_FIELD_SUMMARY", "Vis på oppsummering?");
define("NBILL_FORM_FIELD_SUMMARY_HELP", "Om du vil vise verdien av dette feltet på bestillingens oppsummeringsside");
define("NBILL_FORM_FIELD_SUMMARY_SHOW", "Vis alltid på oppsummeringssiden");
define("NBILL_FORM_FIELD_SUMMARY_NO_SHOW", "Aldri vis på oppsummeringssiden");
define("NBILL_FORM_FIELD_SUMMARY_IF_VALUE", "Bare viser dersom feltet har en verdi");
define("NBILL_FORM_FIELD_CATS", "Relatert produktkategori");
define("NBILL_FORM_FIELD_CATS_HELP", "For å knytte dette feltet med et produkt, velger produktkategori her.");
define("NBILL_FORM_FIELD_PRODUCTS", "Relatert produkt");
define("NBILL_FORM_FIELD_PRODUCTS_HELP", "For å knytte dette feltet til et produkt, velger du produktet her.");
define("NBILL_FORM_FIELD_QTY", "Relatert produktantall");
define("NBILL_FORM_FIELD_QTY_HELP", "Skriv inn antall av det aktuelle produktet for å bestille, eller hvis du vil plukke opp antallet fra verdien som er skrevet i en bestemt felt av brukeren, skriv inn feltet ID omgitt av dobbel nr tegne - f.eks. ##21##");
define("NBILL_FORM_FIELD_OVERRIDE_FREQ", "Overstyre hyppighet?");
define("NBILL_FORM_FIELD_OVERRIDE_FREQ_HELP", "Hvis du setter denne til Ja, vil betalingsfrekvensen for produktene som tildeles dette feltet settes til engangsforeteelse, uavhengig av betalingsfrekvens for resten av skjemaet (dette lar deg ha både engangs og abonnement bestillinger på samme skjema).");
define("NBILL_FORM_FIELD_VALUE_FOR_ORDER", "Verdi som kreves for å bestille");
define("NBILL_FORM_FIELD_VALUE_FOR_ORDER_HELP", "Hvis du vil at bare det tilknyttede produktet skal bestilles hvis verdien som er angitt eller valgt for dette feltet samsvarer med en viss verdi, angir du verdien som skal samsvare her.");
define("NBILL_FORM_FIELD_ENTITY_MAP", "Kundetilordning");
define("NBILL_FORM_FIELD_ENTITY_MAP_HELP", "Hvis du vil at verdien i dette feltet skal brukes til å fylle et tilsvarende felt på kundens post, velg kundefeltet her. Når mer enn ett felt skal samsvare til kundefeltet, vil verdiene bli sammensatt og adskilt av et mellomrom. Der brukeren ikke er den eneste kontakten knyttet til en kunde, eller brukeren tilhører flere enn en kunde, vil dette feltet vises separat fra kontaktdata (en gang for hver kunde).");
define("NBILL_FORM_FIELD_CONTACT_MAP", "Kontakttilordning");
define("NBILL_FORM_FIELD_CONTACT_MAP_HELP", "Hvis du vil at verdien i dette feltet skal brukes til å fylle et tilsvarende felt på kontaktens post, velg du kontaktfeltet her. Når mer enn ett felt skal samsvare til kontaktfeltet, vil verdiene bli sammensatt og adskilt av et mellomrom.");
define("NBILL_CUSTOM_FIELD", "Egendefinert felt");
define("NBILL_FORM_FIELD_OPTIONS", "Alternativer...");
define("NBILL_FORM_FIELD_OPTIONS_HELP", "Kun for nedtrekkslister og alternativlister, klikk på knappen for å åpne en dialogboks som lar deg definere alternativene. Alternativt kan du bruke en kryssreferansetabell for å laste alternativene fra databasen (kun for avanserte brukere - se fanen avanserte egenskaper).");
define("NBILL_FORM_VOUCHER_CODE", "Kode rabattkupong");
define("NBILL_FORM_ORDER_GATEWAY", "Betalingsløsning");
define("NBILL_FORM_RELATING_TO", "Knyttet til");
define("NBILL_FORM_SHIPPING_ID", "Forsendelses ID");
define("NBILL_FORM_TAX_EXEMPTION_CODE", "Avgiftsfritakskode");
define("NBILL_FORM_PAYMENT_FREQUENCY", "Betaling frekvenskode");
define("NBILL_FORM_CURRENCY", "Valuta");
define("NBILL_FORM_UNIQUE_INVOICE", "Unik faktura?");
define("NBILL_FORM_AUTO_RENEW", "Automatisk fornyelse?");
define("NBILL_ORDER_FORM_EXPIRE_AFTER", "Antall fakturerings terminer");
define("NBILL_FORM_EXPIRY_DATE", "Utløpsdato (%s)");
define("NBILL_ERR_FLD_NAME_IS_RESERVED_WORD", "Beklager, `%s` er et reservert ord som brukes av " . NBILL_BRANDING_NAME . " - du kan ikke bruke det som et feltnavn.");

//Options
define("NBILL_OPTIONS_LOADING", "Laster alternativene, vennligst vent...");
define("NBILL_FORM_FIELD_EDIT_OPTIONS", "Rediger Feltalternativene");
define("NBILL_FORM_FIELD_OPTIONS_INTRO", "Angi alternativene som en bruker kan velge for dette feltet (merk: dette gjelder bare for felttyper som tillater flervalg - det vil si nedtrekkslister og alternativlister)");
define("NBILL_OPTION", "Alternativer");
define("NBILL_NEW_OPTION", "Ny");
define("NBILL_OPTION_VALUE", "Verdi");
define("NBILL_OPTION_DESCRIPTION", "Beskrivelse");
define("NBILL_OPTION_ORDERING", "Bestilling");
define("NBILL_OPTION_PRODUCT", "Relaterte produkt");
define("NBILL_OPTION_VALUE_HELP", "Dette er den faktiske verdien som vil bli lagret for feltet hvis brukeren velger dette alternativet. Dette kan være annerledes fra teksten eller verdien som faktisk vises til brukeren.");
define("NBILL_OPTION_DESCRIPTION_HELP", "Dette er teksten som vises til brukeren for dette alternativet.");
define("NBILL_OPTION_PRODUCT_HELP", "Hvis valg av dette alternativet skal føre til et bestemt produkt som skal bestilles, kan du angi hvilket produkt her. Velg en kategori fra den første listen, og det faktiske produktet fra den andre.");
define("NBILL_OPTION_DELETE", "Slett");
define("NBILL_OPTION_ADD_NEW", "Ny");
define("NBILL_FIELD_OPTION_ENTER_VALUE", "Vennligst oppgi verdien til det nye alternativet.");
define("NBILL_FIELD_OPTION_ENTER_DESCRIPTION", "Vennligst skriv inn beskrivelse for det nye alternativet (dette kan være den samme som verdien, men det trenger ikke å være det).");
define("NBILL_SAVE_ORDERING", "Lagre bestilling");
define("NBILL_OPTION_QUANTITY", "Antall");
define("NBILL_OPTION_QUANTITY_HELP", "Skriv inne en statisk verdi for antall som skal bestilles (f. eks `1`), eller et symbol som representerer en feltverdi (f. eks ##23## - der 23 er feltet id). Du kan bruke feltet id for dette feltet hvis du ønsker det. MERK: Gjelder bare hvis du har angitt et beslektet produkt. Dersom tomt, vil verdien settes til 1.");

//Navigation
define("NBILL_FORM_PREV_BUTTON", "Side %s forrige knappen");
define("NBILL_FORM_NEXT_BUTTON", "Side %s Neste/Send knappen");

//Save
define("NBILL_FORM_CANNOT_UNSERIALIZE", "Det oppstod et problem å overføre skjemadata til serveren. Skjemaet kan ikke lagres. Ta kontakt med brukerstøtte.");
