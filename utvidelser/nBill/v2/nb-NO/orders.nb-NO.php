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

//Orders
define("NBILL_ORDERS_TITLE", "Ordre(r)");
define("NBILL_ORDERS_INTRO", "Dette er en liste over de produkter og tjenester som er assosiert med dine kunder. <strong>Merk:</strong> Hvis du kun ønsker å lage en engangsfaktura kan du gjøre det fra <a href=\"index2.php?option=com_netinvoice&action=invoices\">fakturaoversikten</a>. Hvis du derimot ønsker å opprette en gjentagende faktura (ukentlig eller månedlig) må du lage en ordre her først. Du kan lage faktura(er) for den/de valgte ordre(ne) ved å trykke på 'Generer'-knappen. For å lage faktura for ALLE ordrer kan du bruke knappen som du finner på <a href=\"index2.php?option=com_netinvoice&action=invoices\">fakturaoversikten</a>.");
define("NBILL_ORDER_START_DATE", "Dato");
define("NBILL_ORDER_RELATING_TO", "Relatert til");
define("NBILL_ORDER_NO", "Ordrenummer");
define("NBILL_ORDER_PRODUCT_NAME", "Bestilt produkt");
define("NBILL_CANCELLED", "Kansellert");
define("NBILL_ORDER_NET_PRICE_REQUIRED", "Legg inn nettopris.");
define("NBILL_ORDER_START_DATE_REQUIRED", "Legg inn dato for når ordren ble påbegynt.");
define("NBILL_PAY_FREQUENCY_REQUIRED", "Legg inn betalingsfrekvens.");
define("NBILL_NEXT_DUE_DATE_REQUIRED", "Legg inn dato for neste betaling.");
define("NBILL_EDIT_ORDER", "Rediger ordre");
define("NBILL_NEW_ORDER", "Ny ordre");
define("NBILL_SELECT_PRODUCT", "Velg produkt");
define("NBILL_ORDER_STATUS", "Ordrestatus");
define("NBILL_ORDER_CARRIAGE", "Forsendelsesmåte");
define("NBILL_ORDER_PAYMENT_FREQUENCY", "Betalingsfrekvens");
define("NBILL_ORDER_CURRENCY", "Valuta");
define("NBILL_ORDER_NET_PRICE", "Nettopris");
define("NBILL_ORDER_TAX_AMOUNT", "MVA");
define("NBILL_ORDER_QUANTITY", "Antall");
define("NBILL_ORDER_TOTAL_CARRIAGE", "Frakt");
define("NBILL_ORDER_CARRIAGE_TAX", "MVA på frakt");
define("NBILL_START_DATE", "Startdato");
define("NBILL_END_DATE", "Sluttdato (hvis aktuelt)");
define("NBILL_LAST_DUE_DATE", "Siste forfallsdato");
define("NBILL_NEXT_DUE_DATE", "Neste forfallsdato");
define("NBILL_UNIQUE_INVOICE", "Unik faktura?");
define("NBILL_AUTO_EMAIL_INVOICE", "Send faktura pr. e-post automatisk?");
define("NBILL_ORDER_CANCELLED", "Ordre kansellert?");
define("NBILL_CANCELLATION_REASON", "Årsak til kansellering");
define("NBILL_IS_ONLINE", "Ordre fra nettbutikk?");
define("NBILL_AUTO_RENEW", "Automatisk fornyelse?");
define("NBILL_INSTR_ORDER_NO", "<strong>Merk:</strong> La denne være blank hvis du lager en ny ordre, systemet vil automatisk tildele neste ledige ordrenummer.");
define("NBILL_INSTR_SELECT_PRODUCT", "Velg en kategori eller et produkt fra listen (Du kan overstyre tekst og pris på fakturaen hvis du ønsker det ved å velge 'Fakturadetaljer' under).");
define("NBILL_INSTR_ORDER_STATUS", "Vis ordrestatus.");
define("NBILL_INSTR_ORDER_CARRIAGE", "Velg forsendelse fra listen (Du kan overstyre tekst og fraktpris hvis du ønsker det ved å velge 'Fakturadetaljer' under).");
define("NBILL_INSTR_ORDER_PAYMENT_FREQUENCY", "Oppgi betalingsfrekvens for denne ordren.");
define("NBILL_INSTR_ORDER_CURRENCY", "De(n) valutaen(e) som vises her er de som er definert for dette produktet.");
define("NBILL_INSTR_ORDER_QUANTITY", "Antall bestilt. Nettopris og MVA vil multipliseres med dette tallet. Frakt vil bli multiplisert med antall med mindre det er lagt inn fast frakt pr. ordre. Du kan overstyre fraktpris under hvis du ønsker det.)");
define("NBILL_INSTR_RELATING_TO", "Egen referanse. Kan f.eks. brukes til å angi domenenavn hvis det ISP-tjenester.)");
define("NBILL_INSTR_START_DATE", "Legg inn ordredato. (Merk: Formatet kan være annerledes enn det du angitt i konfigurasjonen. Datoformatet på rapporter vil imidlertid være det samme som i konfigurasjonen.");
define("NBILL_INSTR_END_DATE", "<strong>Merk:</strong> Ikke bruk dette feltet med mindre ordren er relatert til gjentagende fakturering OG tilhørende tjeneste er avbestilt. Faktureaer vil IKKE bli generert etter 'Sluttdato'.");
define("NBILL_INSTR_LAST_DUE_DATE", "Dato for siste betaling.");
define("NBILL_INSTR_NEXT_DUE_DATE", "Forfall. (Hvis dette er en gjentagende betaling vil denne datoen være neste forfall.");
define("NBILL_INSTR_UNIQUE_INVOICE", "Skal faktura for denne ordren holdes separat fra andre ordrer/fakturaer på denne kunden?");
define("NBILL_INSTR_AUTO_EMAIL_INVOICE", "Skal faktura automatisk sendes pr. e-post?");
define("NBILL_INSTR_ORDER_CANCELLED", "Hvis ordren er kansellert kan du angi det her. Årsak kan oppgis hvis du ønsker det. Det vil ikke genereres faktura for kansellerte ordrer. Ikke glem å angi 'Sluttdato' i feltet over.");
define("NBILL_INSTR_CANCELLATION_REASON", "Årsak til kansellering.");
define("NBILL_INSTR_IS_ONLINE", "Er dette en internettordre? (Avgiftsfritt eller ikke avhengig av hvordan du har satt opp systemet.).");
define("NBILL_INSTR_AUTO_RENEW", "Hvis du velger 'Ja' vil 'Neste forfallsdato' oppdateres hver gang det lages en ny faktura. Hvis du velger 'Nei' vil ikke 'Neste forfallsdato' bli oppdatert og det vil ikke bli generert ny faktura automatisk. Ikke velg 'Nei' med mindre du vet hva du gjør.");
define("NBILL_ORDER_INVOICE_INTRO", "Følgende verdier vil komme med på fakuraen(e) som etterfølger denne ordren. Du kan overstyre dette hvis du ønsker det, men vær klar over at ovenstående valg vil bli overstyrt av det du gjør her. Hvis to ordrer faktureres sammen (samlefaktura) og det er lagt inn en fast fraktpris pr. faktura vil ikke fraktprisen bli inkludert. Hvis du vil forsikre deg om at fraktprisen blir lagt til uavhengig av andre ordre på kunden må du velge 'Ja' på 'Unik faktura' ovenfor.");
define("NBILL_ORDER_TOTAL", "Ordretotal");
define("NBILL_GENERATE", "Generer");
define("NBILL_PRODUCT", "Produkt");
define("NBILL_ONE_OFF", "Engangs");
define("NBILL_WEEKLY", "Ukentlig");
define("NBILL_MONTHLY", "Månedlig");
define("NBILL_QUARTERLY", "Kvartalsvis");
define("NBILL_ANNUALLY", "Årlig");
define("NBILL_BIANNUALLY", "Hvert 2. år");
define("NBILL_FIVE_YEARLY", "Hvert 5. år");
define("NBILL_TEN_YEARLY", "Hvert 10. år");
define("NBILL_STATUS_PENDING", "Under behandling");
define("NBILL_STATUS_PROCESSING", "Under behandling");
define("NBILL_STATUS_DISPATCHED", "Sendt");
define("NBILL_STATUS_COMPLETED", "Ferdig");
define("NBILL_STATUS_CANCELLED", "Kansellert");
define("NBILL_EXPIRY_DATE", "Utløpsdato (hvis aktuelt)");
define("NBILL_CANCELLATION_DATE", "Kansellert dato (hvis aktuelt)");
define("NBILL_INSTR_EXPIRY_DATE", "Legg inn dato for når ordren utløper (ingen flere fakturaer vil bli generert etter denne dato). Hvis det er en faktura med forfall på den angitte datoen vil denne bli produsert.");
define("NBILL_INSTR_CANCELLATION_DATE", "<strong>Merk:</strong> Denne skal KUN brukes på gjentagende faktura for en tjeneste som er avbestilt eller kansellert. Det vil ikke bli produsert faktura for ordrer som har en dato her.");
define("NBILL_SHOW_INVOICES_FOR_ORDER", "Vis alle fakturaer for denne ordren.");
define("NBILL_CANNOT_ORDER_SUB_WITHOUT_USER", "FEIL! Du kan ikke bestille et abonnement på denne klienten fordi den ikke er koblet til en bruker ID. Legg en bruker til klienten først og lag deretter abonnementet .");
define("NBILL_ORDER_VOUCHER_CODE", "Verdikupong nr.");
define("NBILL_INSTR_ORDER_VOUCHER_CODE", "Hvis du legger til et verdikupongnr. som tilhører en rabattkode vil rabatten bli trukket fra på hver faktura for denne ordren. Hvis verdikupongnummeret ikke eksisterer vil det bli oversett.");
define("NBILL_ORDER_VOUCHER_DISCOUNT_NOT_SHOWN", "Merk: Eventuelle rabatter oppgitt ovenfor vil ikke vises her. De vil imidlertid bli trukket fra når faktura produseres.");
define("NBILL_ORDER_FORM_FIELD_VALUES", "Order Form Field Values");
define("NBILL_INSTR_ORDER_FORM_FIELD_VALUES", "Verdier oppgitt av brukeren når ordren ble opprettet. Dette vil normalt sett bli automatisk opprettet når ordren opprettes, men du kan overstyre det hvis du ønsker det.");
define("NBILL_CLIENT_REQUIRED", "Velg en klientoppføring.");
define("NBILL_ORDER_PRODUCT_NAME_REQUIRED", "Velg et produkt.");
define("NBILL_ORDER_SHOW_PAYLINK", "Vise betalingslenke?");
define("NBILL_INSTR_ORDER_SHOW_PAYLINK", "Skal 'Betal denne faktura'-lenke ved siden av fakturanummeret for denne ordre?. Hvis du velger å vise lenke her og det finnes flere ordrer på samme faktura må lenken vises på alle ordrene. Den globale innstillingen er avhengig av visningsalternativene du har angitt. Lenken vil kun vises hvis fakturaen ikke er betalt og fakturasummen er større enn '0'.");
define("NBILL_ORDER_PAYLINK_USE_GLOBAL", "Bruk global");
define("NBILL_ORDER_PAYLINK_SHOW", "Vis");
define("NBILL_ORDER_PAYLINK_HIDE", "Skjul");
define("NBILL_ORDER_DISCOUNT_TITLE", "Rabatter i bruk på denne ordre");
define("NBILL_ORDER_DISCOUNT_INTRO", "Alternativt kan du velge at spesifikke rabatter tilgjengelige på denne ordren. Hvis det er flere enn en rabattsats tilgjengelig må du benytte prioritert for å bestemme hvilken som skal beregnes først (en rabatt med prioritet '0' vil bli beregnet før en rabatt med prioritet '1'). Verdier her vil overstyre det som er angitt på de enkelte rabattsatser. Instillinger for rabatter gjøres under 'Rabattside'. Merk: En rabattsats her vil ikke nødvendigvis bli trukket fra på alle fakturaer for denne ordren (f.eks. hvis rabatt ikke gis på gjentagende faktura eller det er en restriksjon på dato).");
define("NBILL_ORDER_DISCOUNT", "Rabatt");
define("NBILL_ORDER_DISCOUNT_ORDERING", "Prioritet");
define("NBILL_ADD_ORDER_DISCOUNT", "Legg til rabatt");
define("NBILL_DELETE_DISCOUNT", "Slett rabatt");
define("NBILL_PLEASE_SELECT_DISCOUNT", "Velg en rabattsats.");
define("NBILL_ORDER_DISCOUNT_DUPLICATION", "Rabatten er allerede lagt til.");
define("NBILL_ORDER_PAYLINK", "Betalingsplan");
define("NBILL_ORDER_PAYLINK_PROMPT", "Hvis du ønsker å lage en ny betalingsplan for denne ordren, f.eks. for å fornye et abonnement eller hvis kundens kredittkort er gått ut på dato), kan du sende følgende lenke til kunden: ");
define("NBILL_ORDER_PAYLINK_WARNING", "ADVARSEL! Klienten må være koblet mot en bruker fordi man må logge inn før man kan betale.");
define("NBILL_SEMI_ANNUALLY", "Halvårlig");

/* Version 1.1.4 */
define("NBILL_NO_DATE_ENTERED", "Ugyldig dato. Ingen oppdatering er utført.");

/* Version 1.1.4 SP1 */
define("NBILL_ORDER_WARNING_QTY_ZERO", "Advarsel! Antall er oppgitt til '0'. Dette betyr at ordreverdien også vil bli '0'. Ønsker du å fortsette?");

// Version 1.2.0
define("NBILL_FOUR_WEEKLY", "Hver 4. uke");

//Version 1.2.0
define("NBILL_ORDER_ORDER_VALUE", "Nettoverdi");
define("NBILL_ORDER_ORDER_VALUE_HELP", "Dette er ordreverdien før MVA., frakt og eventuelle rabatter.");
define("NBILL_ORDER_TRACKING_ID", "Sporingsnummer");
define("NBILL_INSTR_ORDER_TRACKING_ID", "Hvis du har satt opp URL for sporingsnummer korrekt kan du legge inn en ID her som sammen med URL'en vil generere en lenke. Denne lenken kan da benyttes av kunden for å spore pakken (avhengig av innstillingene du har gjort).");

//Version 1.2.1
define("NBILL_ORDER_SHOW_ALL", "Vis alle");
define("NBILL_ORDER_SHOW_RESET", "Nullstill dato");

//Version 1.2.6
define("NBILL_ORDERS_RECORD_LIMIT_WARNING", "ADVARSEL! Siden det er mer enn %s kunder i databasen vil bare de %s oppføringene vises i listne over. Hvis kunde ikke vises her kan du enten trykke 'Vis alle' eller velge 'Lag ny ordre' fra kundelisten.");
?>
