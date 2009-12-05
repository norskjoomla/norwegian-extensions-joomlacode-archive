<?php
/**
* Language file for nBill
* @version 1
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

//Products
define("NBILL_PRODUCTS_TITLE", "Produkt/Tjeneste");
define("NBILL_PRODUCTS_INTRO", "Dette er en liste over produkter eller tjenester som kan faktureres.");
define("NBILL_PRODUCT_NAME", "Navn");
define("NBILL_PRODUCT_SKU", "Kode/Varenr.");
define("NBILL_PRODUCT_PRICES", "Pris");
define("NBILL_EDIT_PRODUCT", "Rediger produkt eller tjeneste");
define("NBILL_NEW_PRODUCT", "Nytt produkt eller tjeneste");
define("NBILL_PRODUCT_DESCRIPTION", "Beskrivelse");
define("NBILL_PATH_TO_IMAGE", "Adresse til bilde");
define("NBILL_IS_FREEBIE", "Gratis?");
define("NBILL_PRODUCT_NAME_REQUIRED", "Angi et navn for produktet eller tjenesten.");
define("NBILL_PRODUCT_DETAILS", "Produktdetaljer");
define("NBILL_NET_PRICE_ONE_OFF", "Netto pris en gang");
define("NBILL_NET_PRICE_WEEKLY", "Netto pris ukentlig");
define("NBILL_NET_PRICE_MONTHLY", "Netto pris m�nedlig");
define("NBILL_NET_PRICE_QUARTERLY", "Netto pris kvartalsvis");
define("NBILL_NET_PRICE_ANNUALLY", "Netto pris �rlig");
define("NBILL_NET_PRICE_BIANNUALLY", "Netto pris 2-�rig");
define("NBILL_NET_PRICE_FIVE_YEARLY", "Netto pris 5-�rig");
define("NBILL_NET_PRICE_TEN_YEARLY", "Netto pris 10-�rig");
define("NBILL_IS_TAXABLE", "Avgiftspliktig?");
define("NBILL_REQUIRES_CARRIAGE", "Legg til forsendelsesavgift?");
define("NBILL_CARRIAGE_SERVICES", "Forsendelse tilgjengelig");
define("NBILL_CARRIAGE_UNITS", "Forsendelsesenhet");
define("NBILL_AUTO_FULFIL", "Fullf�re ordre automatisk?");
define("NBILL_IS_DOWNLOADABLE", "Er nedlastbar?");
define("NBILL_DOWNLOAD_LOCATION", "Nedlastingssted");
define("NBILL_NO_OF_DAYS_AVAILABLE", "Antall dager tilgjengelig");
define("NBILL_DOWNLOAD_LINK_TEXT", "Tekst p� nedlastningslink");
define("NBILL_INSTR_PRODUCT_SKU", "Et \"varenummer\" er en kode som du bruker til � identifisere dette produktet. Du kan bruke hvilken som helst kode.");
define("NBILL_INSTR_PRODUCT_NAME", "");
define("NBILL_INSTR_PRODUCT_CATEGORY", "");
define("NBILL_INSTR_PATH_TO_IMAGE", "This is not currently used, but might be implemented at a later date for use in conjunction with a shopping cart.");
define("NBILL_INSTR_IS_FREEBIE", "Hvis dette produktet leveres gratis, angi det her, ellers fyller du inn en eller flere av prisboksene nedenfor.");
define("NBILL_INSTR_NET_PRICE_ONE_OFF", "Hvis dette produktet skal kj�pes direkte (snarere enn � betalt for med jevnelige mellomrom), angi nettopris her.");
define("NBILL_INSTR_NET_PRICE_WEEKLY", "Hvis produktet skal betales ukentlig skriver du inn nettopris pr. uke.");
define("NBILL_INSTR_NET_PRICE_MONTHLY", "Hvis produktet skal betales m�nedlig skriver inn nettopris pr. m�ned.");
define("NBILL_INSTR_NET_PRICE_QUARTERLY", "Hvis produktet skal betales kvartalsvis, skriver inn netto pris per kvartal.");
define("NBILL_INSTR_NET_PRICE_ANNUALLY", "Hvis produktet skal betales �rlig skriver du inn nettopris pr. �r.");
define("NBILL_INSTR_NET_PRICE_BIANNUALLY", "Hvis produktet skal betales hvert andre �r skriver du inn nettopris pr. 2 �r.");
define("NBILL_INSTR_NET_PRICE_FIVE_YEARLY", "Hvis produktet skal betales hvert femte �r skriver du inn nettopris pr. 5 �r.");
define("NBILL_INSTR_NET_PRICE_TEN_YEARLY", "Hvis produktet skal betales hvert tiende �r skriver du inn nettopris pr. 10 �r.");
define("NBILL_INSTR_IS_TAXABLE", "Velg 'Nei' hvis du alltid vil utelate skatt for dette produktet, ellers velger du 'ja'.");
define("NBILL_INSTR_REQUIRES_CARRIAGE", "Skal forsendelsesavgift legges til prisen for dette produktet?");
define("NBILL_INSTR_CARRIAGE_SERVICES_AVAILABLE", "Velg leveringstjenester som kan brukes med dette elementet hvis aktuelt.");
define("NBILL_INSTR_CARRIAGE_UNITS", "Den angitte forsendelsesavgift vil bli multiplisert med verdien for den valgte tjenesten for � beregne de totale transportkostnadene (for tyngre varer som koster mer � sende skriv inn en verdi som er st�rre enn 1). Det er tillatt � bruke desimaler.");
define("NBILL_INSTR_AUTO_FULFIL", "Indikere om alle bestillinger for denne artikkelen automatisk skal sattes til status 'Komplett' (f. eks for umiddelbare nedlastinger).");
define("NBILL_INSTR_IS_DOWNLOADABLE", "Hvorvidt kunden skal kunne laste ned dette produktet fra omr�de 'Min konto'.");
define("NBILL_INSTR_DOWNLOAD_LOCATION", "Absolutt sti til nedlastingsfilen (f.eks. http://nettsted/hjem/brukernavn/filer/mittdokument.pdf). Denne plasseringen b�r ikke v�re i den offentlige delen av nettstedet ditt. (Ikke bruk en mappe under din public_html eller htdocs mappe, ellers kan alle laste det ned uten � betale!)");
define("NBILL_INSTR_DOWNLOAD_LINK_TEXT", "Tekst som skal vises som nedlastningslenke.");
define("NBILL_INSTR_NO_OF_DAYS_AVAILABLE", "Antall dager filen(e) skal v�re tilgjengelig for nedlastning p� kundens omr�de �Min konto�");
define("NBILL_PRODUCT_PRICE_INTRO", "Angi prisen(e) p� produktet for hver valuta som du �nsker � selge dette produktet i.");
define("NBILL_DOWNLOAD_INFO_REQUIRED", "Du har angitt at dette er et nedlastbart produkt, men har ikke oppgitt nedlastingslenke og/eller teksten for lenken. Kontroller at begge disse verdiene er angitt dersom du �nsker at dette produktet skal v�re nedlastbart.");
define("NBILL_DOWNLOAD_LOCATION_2", "Nedlastingssted 2");
define("NBILL_INSTR_DOWNLOAD_LOCATION_2", "Absolutt sti til fil nummer 2 (du kan ha opptil 3 filer).");
define("NBILL_DOWNLOAD_LINK_TEXT_2", "Tekst nedlastningslenke (fil 2).");
define("NBILL_INSTR_DOWNLOAD_LINK_TEXT_2", "Tekst som skal vises som nedlastningslenke (fil 2).");
define("NBILL_DOWNLOAD_LOCATION_3", "Nedlastingssted 3");
define("NBILL_INSTR_DOWNLOAD_LOCATION_3", "Absolutt sti til fil nummer 3 (du kan ha opptil 3 filer).");
define("NBILL_DOWNLOAD_LINK_TEXT_3", "Tekst nedlastningslenke (fil 3).");
define("NBILL_INSTR_DOWNLOAD_LINK_TEXT_3", "Tekst som skal vises som nedlastningslenke (fil 3).");
define("NBILL_IS_USER_SUB", "Brukerabonnement?");
define("NBILL_INSTR_IS_USER_SUB", "Vise om dette produktet representerer et brukerabonnement.");
define("NBILL_SUB_ACCESS_LEVEL", "Brukergruppe tilgangsniv�");
define("NBILL_INSTR_SUB_ACCESS_LEVEL", "Brukergruppe tilgangsniv� for brukere som kj�per dette abonnementet.");
define("NBILL_EXPIRY_LEVEL", "Brukergruppe tilgangsniv� utl�per");
define("NBILL_INSTR_EXPIRY_LEVEL", "Hva skal du gj�re med brukerens privilegier n�r abonnement utl�per (OBS: Om kj�pet er en engangsbetaling vil abonnementet aldri utl�pe).");
define("NBILL_EXPIRY_REDIRECT", "Omadressere etter forfall");
define("NBILL_INSTR_EXPIRY_REDIRECT", "Nettadresse � omadressere til etter at et abonnement er utl�pt (dvs. etter at brukeren har blitt nedgradert, blokkert eller slettet). 'Ingen' betyr at ingen omdirigeringen vil skje, 'Standard' betyr at " . NBILL_BRANDING_NAME . " vil lage en passende melding, eller du kan velge din egen nettadresse � viderekoble til.");
define("NBILL_REDIRECT_NONE", "Ingen");
define("NBILL_REDIRECT_DEFAULT", "Standard");
define("NBILL_REDIRECT_URL", "F�lgende nettadresse");
define("NBILL_EXPIRY_DELETE", "[Slett bruker]");
define("NBILL_EXPIRY_BLOCK", "[Sperr bruker]");
define("NBILL_EXPIRY_DOWNGRADE", "Sett til %s");
define("NBILL_ENSURE_MAMBOT_PUBLISHED", "MERK: Siden dette er et abonnement, sjekk at du har installert og publisert tillegget som h�ndterer utl�psabonnement (mambot) - tilgjengelig fra " . NBILL_BRANDING_WEBSITE);
define("NBILL_ALLOW_GLOBAL_DISCOUNTS", "Tillat globale rabatter?");
define("NBILL_INSTR_ALLOW_GLOBAL_DISCOUNTS", "Indikere om global rabatt ogs� gjelder for ordre p� dette produktet.");
define("NBILL_PRODUCT_DISCOUNT_TITLE", "Produktspesifikke rabatter");
define("NBILL_PRODUCT_DISCOUNT_INTRO", "Du kan eventuelt angi at visse rabatter gjelder for disse produktene. Hvis mer enn �n rabatt er aktuelt, bruk prioritetsverdien til � indikere hvilken som skal brukes f�rst (Rabatt med prioritet p� 0 vil bli brukt f�r en rabatt med prioritet p� 1). Prioriteringer tildelt her overstyrer eventuelle prioriteringer satt andre steder. For � kontrollere egenskapene p� rabatten (f.eks. om bel�pet er eksklusivt, etc.), rediger rabatt via rabattsiden. Hvis du bare vil at rabatt skal gjelde n�r et bestemt antall av produktet er kj�pt kan du angi dette i minimumsfeltet. Du kan ogs� eventuelt multiplisere mengden rabatt med mengde bestilt (rabatt bare p� spesifikke fastprisprodukter). Hvis du bruker kvantum som multiplikator kan du ogs� spesifisere en korreksjon som skal trekkes fra multiplikatormetoden (f.eks. hvis du vil at rabatten bare skal gjelde for den 2. og deretter etterf�lgende antall, men ikke for den f�rste settes utlignet til 1).");
define("NBILL_PRODUCT_DISCOUNT", "Rabatt");
define("NBILL_PRODUCT_DISCOUNT_PRIORITY", "Prioritet");
define("NBILL_PRODUCT_DISCOUNT_QTY", "Minimum antall");
define("NBILL_ADD_PRODUCT_DISCOUNT", "Ny produktrabatt");
define("NBILL_DELETE_DISCOUNT", "Slett produktrabatt");
define("NBILL_PLEASE_SELECT_DISCOUNT", "Velg en rabatt � legge til.");
define("NBILL_PRODUCT_DISCOUNT_DUPLICATION", "Denne rabatten finnes allerede.");
define("NBILL_INSTR_PRODUCT_DESCRIPTION", "This is not currently used, but might be implemented at a later date for use in conjunction with a shopping cart.");
define("NBILL_NET_PRICE_SETUP_FEE", "Registreringsavgift");
define("NBILL_INSTR_NET_PRICE_SETUP_FEE", "Om det er en engangs registreringsavgift i tillegg til prisen p� produktene angir du det her. Denne avgiften vil kun bli belastet p� den f�rste betalingen og kommer som tillegg til den vanlige prisen p� produktene. Du kan angi en negativ verdi dersom du �nsker � tilby et gratis eller en rabattert pr�veperiode (dersom dette er st�ttet av din betalingskanal).");
define("NBILL_ERR_PRODUCT_IN_USE", "Beklager, en eller flere produkter du har valgt � slette er i bruk p� f�lgende ordre: %s. S�rg for at produktene ikke er i bruk f�r du sletter de.");
define("NBILL_EMAIL_DOWNLOADS", "E-post nedlastning?");
define("NBILL_INSTR_EMAIL_DOWNLOADS", "Hvorvidt filene definert over skal sendes eller ikke n�r kunden bestiller produktet (dette vil skje n�r bestillingen opprettes - s� hvis du har \"Vent inntil betalt\" satt til \"Ja\" p� bestillingsskjemaet, vil de ikke f� filene f�r de har betalt for de).");
define("NBILL_EMAIL_DOWNLOADS_MESSAGE", "E-post melding");
define("NBILL_INSTR_EMAIL_DOWNLOADS_MESSAGE", "Skriv inn meldingen du vil sende sammen med vedleggene (Gjelder bare hvis \"E-post nedlastning?\" er satt til \"Ja\").");
define("NBILL_NET_PRICE_SEMI_ANNUALLY", "Nettopris halv�rlig (6 m�neder)");
define("NBILL_INSTR_NET_PRICE_SEMI_ANNUALLY", "Hvis produktet kan betales for halv�rlig (hver 6. m�ned), angi nettopris pr. 6 m�neder.");

/****************/
/* Version 1.1.4
/* Note to translators: Text has changed on the following constants:
NBILL_SUB_ACCESS_LEVEL, NBILL_INSTR_SUB_ACCESS_LEVEL, NBILL_EXPIRY_LEVEL (lines 94-96 in the English file)
/***************/	

//Version 1.2.0
define("NBILL_NET_PRICE_FOUR_WEEKLY", "Nettopris pr. fire uker");
define("NBILL_INSTR_NET_PRICE_FOUR_WEEKLY", "Hvis produktet kan betales for hver 4. uke skriver du nettopris pr. fire uker.");

/**************/
/* Version 1.2.1 
/* Note to translators: Text has changed on the following constants:
/* NBILL_PRODUCT_DISCOUNT_INTRO, NBILL_PRODUCT_DISCOUNT_QTY (lines 103 and 106 in the English file)
/**************/
define("NBILL_PRODUCT_UPDATE_EXISTING_ORDERS", "�n eller flere eksisterende ordre som er fornyet manuelt ble funnet for dette produktet.Klikk \"OK\" hvis du vil oppdatere prisene p� eksisterende bestilling(er).");
define("NBILL_EXISTING_ORDERS_UPDATED", "%s ordre(r) er oppdatert.");
define("NBILL_PRODUCT_DOWNLOADABLE_TOKENS", "Du kan bruke f�lgende frase for � lage \"likelydende\" filnavn: ##ordre_no##, ##ordre_id##, ##kunde_id##. Eks: Hvis du oppretter en fil for hver bestilling kan du bruke et filnavn som \"/hjem/brukernavn/fil##ordre_no##.txt\" - ##ordre_no## frasen vil bli erstattet av det faktiske bestillingsnummeret. Samme prinsipp kan brukes p� alle 3 nedlastningslenkene.");
define("NBILL_PRODUCT_DISCOUNT_MULTIPLY", "Multipliser med antallet?");
define("NBILL_PRODUCT_DISCOUNT_OFFSET", "Forskj�vet");
?>
