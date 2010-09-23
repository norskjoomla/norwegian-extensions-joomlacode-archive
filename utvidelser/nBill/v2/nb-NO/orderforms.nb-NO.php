<?php
/**
* Language file for the Order Forms feature
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

//Order Forms
define("NBILL_ORDER_FORMS_TITLE", "Bestillingsskjema");
define("NBILL_ORDER_FORMS_INTRO", "Bestillingsskjemaene gjør at brukerne kan bestille produkter gjennom brukersidene på forsiden (Frontend). Du kan ha hvilke som helst felter i skjemaet, og knytte et eller flere av feltene sammen med ett eller flere produkter (du kan føre til et annet produkt å være organisert, avhengig av verdien en bruker angir for et felt). Når du bruker denne funksjonen for første gang, kan du gå til %s");
define("NBILL_ORDER_FORMS_DOC_LINK", "Tilgjengelig dokumentasjon");
define("NBILL_FORM_PUBLISHED", "Publisert?");
define("NBILL_INSTR_FORM_PUBLISHED", "Vise skjema på nettsiden/brukersidene");
define("NBILL_FORM_TITLE", "Tittel på skjema");
define("NBILL_PUBLISHED", "Publisert");
define("NBILL_EDIT_ORDER_FORM", "Rediger bestillingsskjemaet");
define("NBILL_NEW_ORDER_FORM", "Nytt bestillingsskjema");
define("NBILL_FORM_DETAILS", "Skjemadetaljer");
define("NBILL_FORM_TAB_DETAILS", "Detaljer");
define("NBILL_FORM_TAB_FIELDS", "Felter");
define("NBILL_FORM_TAB_ORDER_VALUES", "Bestilling");
define("NBILL_FORM_TAB_ADVANCED", "Avansert");
define("NBILL_INSTR_FORM_TITLE", "Navnet på bestillingsskjema.");
define("NBILL_FORM_LOGGED_IN_ONLY", "Kun innloggede brukere?");
define("NBILL_INSTR_FORM_LOGGED_IN_ONLY", "Begrens dette bestillingsskjemaet til å kun være tilgjengelig for brukere som har logget inn.");
define("NBILL_FORM_PREREQ_PRODUCTS", "Forutsatte produkter");
define("NBILL_INSTR_FORM_PREREQ_PRODUCTS", "Hvis kunden allerede må et bestemt produkt før de kan benytte dette ordreskjemaet (f.eks. i forbindelse med en oppgradering), spesifiser dette produktet her. Hvis mer enn et produkt er valgt vil brukeren få tilgang til skjemaet hvis han/hun har et av disse produktene.");
define("NBILL_FORM_PREREQ_CATS", "Kategorier");
define("NBILL_FORM_PREREQ_CAT_PROD", "Produkter");
define("NBILL_FORM_PREREQ_SELECTED_PROD", "Valgte produkt(er)");
define("NBILL_FORM_EMAIL_CLIENT_PENDING", "E-post: Ordre på vent til kunde?");
define("NBILL_INSTR_FORM_EMAIL_CLIENT_PENDING", "Skal det sendes e-post til kunden når bestillingsskjemaet blir sendt inn (før bestilling er opprettet).");
define("NBILL_FORM_EMAIL_CLIENT", "E-post bekreftelse til kunde?");
define("NBILL_INSTR_FORM_EMAIL_CLIENT", "Skal det sendes e-post bekreftelse når ordreskjemaet er sendt?");
define("NBILL_FORM_EMAIL_ADMIN_PENDING", "E-post: Ordre på vent til Admin?");
define("NBILL_INSTR_FORM_EMAIL_ADMIN_PENDING", "Skal det sendes e-post til administrator når det er laget en ny 'Avventende' ordre?");
define("NBILL_FORM_EMAIL_ADMIN", "Send ordren på e-post til administrator?");
define("NBILL_INSTR_FORM_EMAIL_ADMIN", "Skal det sendes e-post til administrator når det er laget en ny ordre?");
define("NBILL_FORM_VALIDATION_CODE", "Valideringskode");
define("NBILL_INSTR_FORM_VALIDATION_CODE", "PHP-kode som skal evalueres for validering av innsendt ordre. Tildel en verdi til \$error_message for å avvise innsending av ordre. Legg til feltnavn(ene) for de feltene som ikke ble validert til \$fields_in_error[] utvalget slik at disse feltene blir uthevet når skjemaet vises på nytt. Hvis du er usikker på dette kan du la feltet være blankt.");
define("NBILL_FORM_PROCESS_CODE", "Behandler kode");
define("NBILL_INSTR_FORM_PROCESS_CODE", "PHP-kode som skal evalueres når ordreskjemaet er oppdatert, men ikke innsendt (f.eks. hvis du har en egen knapp/funksjon for å sjekke et eller annet før ordren kan sendes). Hvis du er usikker på dette kan du la feltet være blankt.");
define("NBILL_FORM_SUBMIT_CODE", "Send kode");
define("NBILL_INSTR_FORM_SUBMIT_CODE", "PHP-kode som skal evalueres når ordreskjemaet er sendt inn og valideringen er vellykket. Hvis du er usikker på dette kan du la feltet være blankt.");
define("NBILL_FORM_PENDING_UNTIL_PAID", "Skal ordren settes på 'Vent' til den er betalt?");
define("NBILL_INSTR_FORM_PENDING_UNTIL_PAID", "Skal det lages en 'Vente-ordre' når ordreskjemaet er sendt inn? Ordrer på 'Vent' kan aktiveres av administrator eller av en betalingsmodulene (når utvidelsen registrerer godkjent betaling). Anbefalt innstilling er 'Ja' slik at det kun blir registrert poster for betalte varer.");
define("NBILL_FORM_AUTO_CREATE_ORDERS", "Autogenerering av ordre(r)?");
define("NBILL_INSTR_FORM_AUTO_CREATE_ORDERS", "Skal det automatisk genereres ordre(r) når ordreskjemaet er registrert? Hvis du har valgt 'Ja' på 'Vente-ordre' vil ikke ordren bli generert før betaling er registrert og godkjent eller når ordren blir aktivert av en administrator.");
define("NBILL_FORM_AUTO_CREATE_USER", "Autogenerering av bruker?");
define("NBILL_INSTR_FORM_AUTO_CREATE_USER", "Skal det automatisk opprettes en bruker for kunden når ordreskjemaet aktiveres?. Hvis du har valgt 'Ja' på 'Vente-ordre' vil ikke ordren bli generert før betaling er registrert og godkjent eller når ordren blir aktivert av en administrator.");
define("NBILL_FORM_AUTO_CREATE_INVOICE", "Autogenerering av faktura?");
define("NBILL_INSTR_FORM_AUTO_CREATE_INVOICE", "Skal det opprettes en faktura automatisk når ordreskjemaet aktiveres? Hvis du har valgt 'Ja' på 'Vente-ordre' vil ikke ordren bli generert før betaling er registrert og godkjent eller når ordren blir aktivert av en administrator.");
define("NBILL_FORM_AUTO_CREATE_INCOME", "Autogenerering av bilag?");
define("NBILL_INSTR_FORM_AUTO_CREATE_INCOME", "Skal det automatisk opprettes et bilag for betalingen når den er registrert? Dette vil kun skje når betalingen er fullført og godkjent.");
define("NBILL_PAYMENT_GATEWAY", "Betalingsformidler");
define("NBILL_INSTR_PAYMENT_GATEWAY", "Velg betalingsformidler som kunder skal videresendes til etter at ordreskjemaet er innsendt. (Merk! Dette kan overstyres av en feltliste hvis du ønsker å tilby kunden flere valgmuligheter, eller du kan velge leverandør i ordre-fanen).");
define("NBILL_ORDER_VALUES_INTRO", "Det er en del parametere som må registreres før det kan genereres en ny ordre. Disse parametrene kan enten settes av administrator ved å skrive de inn under, eller de kan registreres ved hjelp av ordreskjemaet kunden fyller inn. For å bruke parametere fra ordreskjemaet må du spesifisere hvilke felt som skal benyttes til de ulike parametrene 'Felt'-fanen (Velg feltet det gjelder og velg deretter en verdi fra nedtrekklisten). Alternativt kan du velge en verdi i følgende format: ##field_id##, hvor field_id er id-nummeret til feltet som inneholder verdien (se id-kolonnen i feltlisten på 'Felt'-fanen).");
define("NBILL_FORM_RELATING_TO", "Tilhørende");
define("NBILL_INSTR_FORM_RELATING_TO", "En fast verdi for hva ordren tilhører eller informasjon som representerer en feltverdi (f.eks. ##23##).");
define("NBILL_FORM_SHIPPING_ID", "Transportør ID");
define("NBILL_INSTR_FORM_SHIPPING_ID", "En fast verdi for transportøren (ID-nummer som vist på %s), eller informasjon som representerer en feltverdi (f.eks. ##23##).");
define("NBILL_SHIPPING_LIST", "Transportørliste");
define("NBILL_FORM_TAX_EXEMPTION_CODE", "Kode for avgiftsfritak");
define("NBILL_INSTR_FORM_TAX_EXEMPTION_CODE", "En fast verdi for avgiftsfritak (lite brukt), eller informasjon som representerer en feltverdi (f.eks. ##23##).");
define("NBILL_FORM_PAYMENT_FREQUENCY", "Kode for betalingshyppighet");
define("NBILL_INSTR_FORM_PAYMENT_FREQUENCY", "En fast verdi for betalingshyppighet ('AA'=Engangsbetaling; 'BB'=Ukentlig; 'BX'=Hver fjerde uke; 'CC'=Månedlig; 'DD'=Kvartalsvis; 'DX'=Halvårlig; 'EE'=Årlig; 'FF'=Hvert andre år; 'GG'=Hvert femte år; 'HH'=Hvert tiende år; 'XX'=Ikke i bruk), eller informasjon som representerer en feltverdi (f.eks. ##23##).");
define("NBILL_FORM_CURRENCY", "Valuta");
define("NBILL_INSTR_FORM_CURRENCY", "En fast verdi for valuta'en (NOK/EUR/USD), eller informasjon som representerer en feltverdi (f.eks. ##23##). Hvis feltet er tomt vil leverandørens standardverdi for valuta benyttes.");
define("NBILL_FORM_UNIQUE_INVOICE", "Unik faktura?");
define("NBILL_INSTR_FORM_UNIQUE_INVOICE", "En fast verdi for å bestemme om ordren skal ha separat faktura (0 for 'Nei' eller 1 for 'Ja'), eller informasjon som representerer en feltverdi (f.eks. ##23##).");
define("NBILL_FORM_AUTO_RENEW", "Automatisk fornyelse?");
define("NBILL_INSTR_FORM_AUTO_RENEW", "En fast verdi for å bestemme om ordren skal fornyes automatisk etter at hver betaling, eller informasjon som representerer en feltverdi (f.eks. ##23##). Velg 1 for 'Ja' eller 0 for 'Nei' (hvis denne er satt til '0' vil ordren bli behandlet som kontantordre (engangsbetaling med pris fra aktuell betalingsplan). Det vil ikke bli generert nye fakturaer eller betalinger og kunden må fornye abonnementet manuelt. Bruk påminnelsesfunksjonen hvis du ønsker å sende påminnelse med betalingslenke til kunden når det er på tide med fornyelse."); 
define("NBILL_FORM_EXPIRY_DATE", "Utløpsdato (%s)");
define("NBILL_INSTR_FORM_EXPIRY_DATE", "en fast verdi som representerer utløpsdato for ordren eller informasjon som representerer en feltverdi (f.eks. ##23##). Hvis feltet er tomt vil ordren bli liggende permanent. Bruk følgende format; %s. OBS: Ikke alle betalingsløsninger støtter utløpsdato. Hvis den løsningen du bruker ikke støtter dette må du selv kansellere betalingen med PSP. Benytt påminnelsesfunksjonen hvis du ønsker å motta e-post når en ordre utløper.");
define("NBILL_CREATE_MENU_ITEM", "Opprett menypunkt");
define("NBILL_CREATE_MENU_ITEM_HELP", "Velg en meny (om du har mer enn en), klikk på knappen for å opprette et menypunk som vil lenke til dette ordreskjemaet. Du kan deretter endre plassering, redigere eller slette menypunktet fra menybehandleren.");
define("NBILL_CREATE", "Opprett");
define("NBILL_CREATE_MENU_NAME", "Vennligst skriv inn teksten du vil vise som menypunkt.");
define("NBILL_MENU_ITEM_CREATED", "Menypunkt opprettet.");
define("NBILL_MENU_ITEM_NOT_CREATED", "Beklager, menypunktet kunne ikke opprettes.");
define("NBILL_MENU_ITEM_TO_EDIT", "å redigere menypunktet.");
define("NBILL_FORM_ORDER_GATEWAY", "Betalingsmodul");
define("NBILL_INSTR_FORM_ORDER_GATEWAY", "Enten en fast verdi som betalingsmodulen skal bruke, eller en tagg som representerer verdi i ett felt, (f. eks ##23##).  Verdien som eventuelt er angitt her oversyrer verdien angitt på fanen 'Detaljer'.");
define("NBILL_FORM_SHOW_LOGIN_BOX", "Vis innlogging?");
define("NBILL_INSTR_FORM_SHOW_LOGIN_BOX", "Om du vil vise innloggingsboksen hvis bruker ikke er innlogget.");
define("NBILL_FORM_ADMIN_EMAIL_ADDR", "Administrators e-postadresse");
define("NBILL_INSTR_FORM_ADMIN_EMAIL_ADDR", "E-postadressen til administrator hvis forskjellig fra leverandørens e-postadresse (la stå tom for å bruke leverandørens e-postadresse)");
define("NBILL_FORM_FIELD_MERGED", "Kolonner sammenslåtte");
define("NBILL_FORM_FIELD_NOT_MERGED", "Kolonner ikke sammenslåtte");
define("NBILL_ERR_FLD_NAME_IS_RESERVED_WORD", "Beklager, '%s' er et reservert ord som brukes av " . NBILL_BRANDING_NAME . " - du kan ikke bruke det som et feltnavn.");
define("NBILL_FORM_AUTO_HANDLE_SHIPPING", "Automatisk forsendelse?");
define("NBILL_INSTR_FORM_AUTO_HANDLE_SHIPPING", "Om du automatisk vil velge og bruke den mest hensiktsmessige forsendelsessats, eller tilby brukerne å velge hvis mer enn én sats kan benyttes (NB: Å tilby brukeren et valg virker bare hvis det er en oppsummering feltet på skjemaet).");
define("NBILL_FORM_USE_EMAIL_ADDRESS", "Bruk e-postadressen din som brukernavn?");
define("NBILL_INSTR_FORM_USE_EMAIL_ADDRESS", "Om du vil bruke e-postadressen som brukernavn for nye brukere når dette skjemaet brukes (altså ikke kreve at brukeren velge et brukernavn). Brukernavnet vil bli hentet fra felt med kontakten e-postadresse som er koblet til dette feltet, med mindre annet felt er koblet til brukernavnet (i så fall, har ikke denne innstillingen noen virkning). ADVARSEL! Det kan hende at du må modifisere CMS til å tillate bindestrek i brukernavn, og for å øke brukernavnfeltets lengde. Se " . NBILL_BRANDING_NAME . " dokumentasjon for mer informasjon.");

//Order tab
define("NBILL_FORM_VOUCHER_CODE", "Rabattkode");
define("NBILL_INSTR_FORM_VOUCHER_CODE", "Enten en fast verdi som skal gjelde for rabattkupong, eller en tagg som representerer verdien i ett felt, (f. eks ##23##).");

//Advanced tab
define("NBILL_ORDER_CREATION_CODE", "Ordre opprettelseskode");
define("NBILL_INSTR_ORDER_CREATION_CODE", "PHP koden for å vurdere når en ordre blir opprettet eller behandlet for denne bestillingen (Kun hvis `Venter inntil betalt` er satt til `ja`, vil dette først skje etter at betalingen er mottatt, eller den ventende ordre aktiveres av en administrator). Denne koden vil bli kalt en gang for hver bestilling som blir opprettet (en ordre vil bli opprettet for hvert ulike produkt) - bruk \$product_id variabelen for å identifisere hvilket produkt som ordreposten opprettets for, og \$client_id identifisere kunden. Bestillings ID er også tilgjengelig i \$order_id. Du bør ikke være avhengig av at andre data blir tilgjengelig (f.eks hvis du har behov kunde data, hent den fra databasen, ikke fra \$_POST verdier). Hvis det støttes av betalingsløsningen, vil koden også brukes for hver periodiske betaling (hvis handlingen er i forhold til en periodisk betaling, blir variabelen \$recurring satt til sant - så du kan med forbehold hoppe over bruk av koden til gjentakende betalinger om nødvendig). Hvis det er helt ’gresk’ for deg, bare la dette stå tomt.");
define("NBILL_ORDER_FORM_TITLE_REQUIRED", "Vennligst skriv inn en tittel for dette skjemaet.");
define("NBILL_FORM_DISQUAL_PRODUCTS", "Diskvalifiserende produkter");
define("NBILL_FORM_DISQUAL_CATS", "Kategorier");
define("NBILL_FORM_DISQUAL_CAT_PROD", "Produkter");
define("NBILL_FORM_DISQUAL_SELECTED_PROD", "Valgte produkt(er)");
define("NBILL_INSTR_FORM_DISQUAL_PRODUCTS", "Hvis brukeren allerede har et bestemt produkt så kan de ikke bruke dette bestillingsskjemaet (f. eks hvis de allerede har det og er kun tillatt ett, slik som for brukerabonnement), angi diskvalifiserende produkt (er) her. Hvis mer enn ett produkt er valgt, vil ikke brukeren kunne få tilgang til denne bestillingen skjemaet hvis de allerede har noen av diskvalifiserende produktene.");
define("NBILL_JAVASCRIPT_FUNCTIONS", "JavaScript-funksjoner");
define("NBILL_INSTR_JAVASCRIPT_FUNCTIONS", "Legg inn eventuelle javascript som du vil settes inn i &lt;head&gt; delen. Vennligst ikke ta med &lt;script&gt; koder - bare selve funksjonsdefinisjonen.");
define("NBILL_UPLOAD_PATH", "Opplastningssti");
define("NBILL_INSTR_UPLOAD_PATH", "Angi hele stien der du vil lagre filer som blir lastet opp av brukere (mappen må være skrivbar for PHP brukeren som den kjører under). Når du har angitt en gyldig, skrivbar sti, må du klikke på enten ’Bruk’ eller ’Lagre’ før filopplastingsfeltet blir tilgjengelig for bruk på dette skjemaet.");
define("NBILL_UPLOAD_MAX_SIZE", "Maks filstørrelse for opplastning");
define("NBILL_INSTR_UPLOAD_MAX_SIZE", "Angi den maksimale filstørrelsen (i kilobyte) som kan lastes opp.");
define("NBILL_UPLOAD_ALLOWED_TYPES", "Tillatte filtyper");
define("NBILL_INSTR_UPLOAD_ALLOWED_TYPES", "Skriv inn de forskjellige tillatte filtypene adskilt med tegnet ’|’ (f. eks. Jpg |. Bmp |. Gif). La stå tomt slik at en hvilken som helst filtype kan lastes opp.");
define("NBILL_ATTACH_TO_EMAIL", "Legg ved e-posten til administrator?");
define("NBILL_INSTR_ATTACH_TO_EMAIL", "Hvorvidt å legge ved opplastede filer når bekreftelses e-post blir sendt til administrator (hvis aktuelt).");

//Version 1.2.0
define("NBILL_ORDER_FORM_LINK", "Du kan lenke til dette ordreskjemaet med følgende adresse: %s");
define("NBILL_ORDER_FORM_LINK_PREPOP", "Merk: Du kan også forhåndsutfylle felt i skjemaet ditt ved å legge til nettadresseparametere. For eksempel, hvis du har et felt på skjemaet som heter 'message', kan du legge til &quot;&amp;message=Hei%20verden&quot; (uten anførselstegn) på slutten av nettadressen ovenfor til å forhåndsutfylle dette feltet med verdien 'Hei verden'. Dette kan være nyttig for eksempel der det er flere produkter som kan bestilles på skjemaet, og du vil forhåndsvelge produktet som skal bestilles avhengig av hvilken artikkel lenken vises i.");
define("NBILL_ORDER_FORM_THANK_YOU", "Takketekst");
define("NBILL_INSTR_ORDER_FORM_THANK_YOU", "Hvis brukeren ikke blir omadressert andre steder av betalingsløsningen (eller av din egen innstilling ovenfor), dette er meldingen som vil bli vist på vellykkede innlevering av bestillingsskjemaet.");
define("NBILL_FORM_DEFAULT_THANK_YOU", "Takk for din ordre.");
define("NBILL_ORDER_FORM_DUPLICATE_PRODUCTS", "ADVARSEL! Du har tildelt et produkt til et felt to ganger på bestillingsskjemaet, fremhevet nedenfor. Dette vil resultere i at produktet blir bestilt to ganger. Du bør bare tilordne et produkt til enten  redigeringsfeltet ELLER til alternativ gruppen, ikke begge deler.");

//Version 1.2.1
define("NBILL_ORDER_FORM_FIELD_RESERVED_WORD", "Beklager, '%s' er et reservert ord med en spesiell betydning. Du må velge et annet navn for dette feltet.");
define("NBILL_ORDER_FORM_THANK_YOU_REDIRECT", "Viderekobling, fullført ordre");
define("NBILL_INSTR_ORDER_FORM_THANK_YOU_REDIRECT", "Om du vil viderekoble brukeren til en annen side en takketeksten nedenfor når ordren er bekreftet kan du fylle inn en adresse her. MERK: Dette vil ikke ha noen effekt om betalingsmodulen bruker egen viderkobling.");
define("NBILL_ORDER_FORM_EXPIRE_AFTER", "Antall betalingsterminer");
define("NBILL_INSTR_ORDER_FORM_EXPIRE_AFTER", "Hvis du automatisk vil beregne utløpsdatoen for bestillingen basert på et visst antall betalingsterminer, angi antall betalinger her, eller la stå tom hvis du ikke ønsker å automatisk beregne en utløpsdato. For eksempel vil fakturering månedlig i 6 måneder så opphøre, angi betalingen frekvensen til månedlig, og skriv 6 her. For å angi antall faktureringsterminer fra et felt, skriver du inn feltet ID omgitt av dobbel-hash, f. eks. ##23##");

//Version 1.2.5 - Note to translators
//Line 203 of original English language file amended (there is no longer a quantity setting on the order tab, so if the value is left blank it now just defaults to 1)

//Version 2.0.0
define("NBILL_FORM_EDITOR_INTRO", "Dra og slipp for å posisjonere felt, og/eller bruker opp-og ned-pilene øverst til høyre. Hold nede Ctrl eller Shift for å velge mer enn ett felt eller opphev valgte felt. Klikk på et felt for å redigere de tilhørende egenskapene (i panelet til høyre). Når skjemaet vises i ditt nettsteds brukerside, kan kanskje skjemaet bli påvirket av stilsett i malen, så det kan kanskje se litt annerledes ut på brukersiden enn her (du bør ta hensyn til dette og f. eks. ved å legge inn ekstra mellomrom). Det er svært viktig å kontrollere hvordan skjemaet ser ut i en rekke forskjellige nettlesere!");
define("NBILL_FORM_ORDERING", "Bestille");
define("NBILL_FORM_DEFAULT_TITLE", "Skjema %s");
define("NBILL_FORM_SAVE_FAILED", "Beklager, det oppstod et problem mens skjemaet ble lagret - det er ikke sikkert skjemaet ble lagret. Dette kan skyldes et forbigående kommunikasjonsproblem mellom nettleseren og nettserveren. Vennligst prøv igjen.");
define("NBILL_ORDER_FORM_LINK_PREPOP_ORDER_SUFFIX", " Dette kan være nyttig for eksempel der det er flere produkter som kan bestilles på skjemaet, og du vil forhåndsvelge produktet som skal bestilles avhengig av hvilken artikkel lenken vises i.");
define("NBILL_PAYMENT_PLAN", "Betalingsplan");
define("NBILL_INSTR_PAYMENT_PLAN", "Hvis et engangsbeløp har forfalt til betaling, velge hvilke betalingsplan som skal brukes (NB: ikke alle betalingsløsninger støtter betalingsplaner)");
define("NBILL_ORDER_FORM_PRE_CALCULATE", "Kode for forhåndsberegning");
define("NBILL_INSTR_ORDER_FORM_PRE_CALCULATE", "PHP-kode å kjøre rett før bestillingens totaler beregnes (på alle summeringsfelt så vel som etter at skjemaet er sendt inn). Du kan manipulere \$ordre matrisen og påvirke bestillingens totale sluttsum, og dermed kontrollere hvor mye som skal betales. Hvis det ikke gir mening for deg, bare la dette stå tomt.");
define("NBILL_ORDER_FORM_POST_CALCULATE", "Kode for etterberegning");
define("NBILL_INSTR_ORDER_FORM_POST_CALCULATE", "PHP-koden å kjøre umiddelbart etter at bestillingens totaler er beregnet (på alle summeringsfelt så vel som etter at skjemaet er sendt inn). Du kan manipulere \$standard_totals objekt for å endre hvor mye som skal betales (bruk med forsiktighet, da det beregnede beløp fortsatt vil bli brukt til den resulterende fakturaen(e) - i de fleste tilfeller er det bedre å bruke forhåndsberegningen ). Hvis det ikke gir mening for deg, bare la dette stå tomt.");

//Verison 2.0.2
define("NBILL_FORM_LEGACY_RENDERER", "Bruk bakoverkompatibel");
define("NBILL_INSTR_FORM_LEGACY_RENDERER", "Hvis du setter denne til å `ja`, vil feltene bli gjengitt i en tabell i stedet for å være absolutt posisjonert. Dette kan bety at feltene ikke blir plasseres nøyaktig der du sette dem i redigeringsprogrammet, men det vil se mye nærmere slik det ville ha dukket opp i tidligere versjoner av " . NBILL_BRANDING_NAME . ". Der hvor skjemaene er overført fra en tidligere versjon, kan det trengs modifisering før de vises riktig. Ved å sette dette alternativet til `ja`, er de neppe behov for modifisering. Uavhengig av dette, om du har problemer med visning av skjemaet kan du kanskje prøve å sette denne til `Ja`, men generelt er det best å sette dette til `Nei`.");
define("NBILL_FORM_LEGACY_TABLE_BORDER", "Bakoverkompatible kantlinjer?");
define("NBILL_INSTR_FORM_LEGACY_TABLE_BORDER", "I tidligere versjoner av " . NBILL_BRANDING_NAME . ", kunne du angi at tabellen som inneholdt feltene kunne ha kantlinjer. Dette ser i grunnet ikke bra ut, og var sannsynligvis en dårlig idé, men alternativet er tatt med her til glede for dem som går fra en tidligere versjon og ønsker å beholde den. Dette alternativet vil kun tre i kraft dersom `Bruk bakoverkompatibilitet` er satt til `ja`.");
define("NBILL_FORM_LEGACY_RENDERER_WARNING", "ADVARSEL! Dette skjemaet bruker bakoverkompatibilitet, slik at det er ikke sikkert feltene vises nøyaktig slik du definerer dem her, men bør ligne på hvordan de gjorde i tidligere versjoner av " . NBILL_BRANDING_NAME . ". Du kan slå av eller på bakoverkompatibilitet på fanene ’Detaljer’ nedenfor.");

//Version 2.0.9
define("NBILL_ORDER_FORM_UNMAPPED", "WARNING! You have specified that the form(s) highlighted below should automatically create order records, but none of the fields on the form are mapped to any client values. You need to either: 1) Make the form available to logged-in users only (so no mapping is required); 2) Change the form to NOT automatically create order records (not usually recommended unless you have some custom code to make the form do something else) or 3) Map one or more fields to a client value (on the processing tab of the field properties pane).");
