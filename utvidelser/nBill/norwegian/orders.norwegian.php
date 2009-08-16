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
define("INV_ORDERS_TITLE", "Ordre(r)");
define("INV_ORDERS_INTRO", "Dette er en liste over de produkter og tjenester som er assosiert med dine kunder. <strong>Merk:</strong> Hvis du kun �nsker � lage en engangsfaktura kan du gj�re det fra <a href=\"index2.php?option=com_netinvoice&action=invoices\">fakturaoversikten</a>. Hvis du derimot �nsker � opprette en gjentagende faktura (ukentlig eller m�nedlig) m� du lage en ordre her f�rst. Du kan lage faktura(er) for den/de valgte ordre(ne) ved � trykke p� 'Generer'-knappen. For � lage faktura for ALLE ordrer kan du bruke knappen som du finner p� <a href=\"index2.php?option=com_netinvoice&action=invoices\">fakturaoversikten</a>.");
define("INV_ORDER_START_DATE", "Dato");
define("INV_ORDER_RELATING_TO", "Relatert til");
define("INV_ORDER_NO", "Ordrenummer");
define("INV_ORDER_PRODUCT_NAME", "Bestilt produkt");
define("INV_CANCELLED", "Kansellert");
define("INV_ORDER_NET_PRICE_REQUIRED", "Legg inn nettopris.");
define("INV_ORDER_START_DATE_REQUIRED", "Legg inn dato for n�r ordren ble p�begynt.");
define("INV_PAY_FREQUENCY_REQUIRED", "Legg inn betalingsfrekvens.");
define("INV_NEXT_DUE_DATE_REQUIRED", "Legg inn dato for neste betaling.");
define("INV_EDIT_ORDER", "Rediger ordre");
define("INV_NEW_ORDER", "Ny ordre");
define("INV_SELECT_PRODUCT", "Velg produkt");
define("INV_ORDER_STATUS", "Ordrestatus");
define("INV_ORDER_CARRIAGE", "Forsendelsesm�te");
define("INV_ORDER_PAYMENT_FREQUENCY", "Betalingsfrekvens");
define("INV_ORDER_CURRENCY", "Valuta");
define("INV_ORDER_NET_PRICE", "Nettopris");
define("INV_ORDER_TAX_AMOUNT", "MVA");
define("INV_ORDER_QUANTITY", "Antall");
define("INV_ORDER_TOTAL_CARRIAGE", "Frakt");
define("INV_ORDER_CARRIAGE_TAX", "MVA p� frakt");
define("INV_START_DATE", "Startdato");
define("INV_END_DATE", "Sluttdato (hvis aktuelt)");
define("INV_LAST_DUE_DATE", "Siste forfallsdato");
define("INV_NEXT_DUE_DATE", "Neste forfallsdato");
define("INV_UNIQUE_INVOICE", "Unik faktura?");
define("INV_AUTO_EMAIL_INVOICE", "Send faktura pr. e-post automatisk?");
define("INV_ORDER_CANCELLED", "Ordre kansellert?");
define("INV_CANCELLATION_REASON", "�rsak til kansellering");
define("INV_IS_ONLINE", "Ordre fra nettbutikk?");
define("INV_AUTO_RENEW", "Automatisk fornyelse?");
define("INV_INSTR_ORDER_NO", "<strong>Merk:</strong> La denne v�re blank hvis du lager en ny ordre, systemet vil automatisk tildele neste ledige ordrenummer.");
define("INV_INSTR_SELECT_PRODUCT", "Velg en kategori eller et produkt fra listen (Du kan overstyre tekst og pris p� fakturaen hvis du �nsker det ved � velge 'Fakturadetaljer' under).");
define("INV_INSTR_ORDER_STATUS", "Vis ordrestatus.");
define("INV_INSTR_ORDER_CARRIAGE", "Velg forsendelse fra listen (Du kan overstyre tekst og fraktpris hvis du �nsker det ved � velge 'Fakturadetaljer' under).");
define("INV_INSTR_ORDER_PAYMENT_FREQUENCY", "Oppgi betalingsfrekvens for denne ordren.");
define("INV_INSTR_ORDER_CURRENCY", "De(n) valutaen(e) som vises her er de som er definert for dette produktet.");
define("INV_INSTR_ORDER_QUANTITY", "Antall bestilt. Nettopris og MVA vil multipliseres med dette tallet. Frakt vil bli multiplisert med antall med mindre det er lagt inn fast frakt pr. ordre. Du kan overstyre fraktpris under hvis du �nsker det.)");
define("INV_INSTR_RELATING_TO", "Egen referanse. Kan f.eks. brukes til � angi domenenavn hvis det ISP-tjenester.)");
define("INV_INSTR_START_DATE", "Legg inn ordredato. (Merk: Formatet kan v�re annerledes enn det du angitt i konfigurasjonen. Datoformatet p� rapporter vil imidlertid v�re det samme som i konfigurasjonen.");
define("INV_INSTR_END_DATE", "<strong>Merk:</strong> Ikke bruk dette feltet med mindre ordren er relatert til gjentagende fakturering OG tilh�rende tjeneste er avbestilt. Faktureaer vil IKKE bli generert etter 'Sluttdato'.");
define("INV_INSTR_LAST_DUE_DATE", "Dato for siste betaling.");
define("INV_INSTR_NEXT_DUE_DATE", "Forfall. (Hvis dette er en gjentagende betaling vil denne datoen v�re neste forfall.");
define("INV_INSTR_UNIQUE_INVOICE", "Skal faktura for denne ordren holdes separat fra andre ordrer/fakturaer p� denne kunden?");
define("INV_INSTR_AUTO_EMAIL_INVOICE", "Skal faktura automatisk sendes pr. e-post?");
define("INV_INSTR_ORDER_CANCELLED", "Hvis ordren er kansellert kan du angi det her. �rsak kan oppgis hvis du �nsker det. Det vil ikke genereres faktura for kansellerte ordrer. Ikke glem � angi 'Sluttdato' i feltet over.");
define("INV_INSTR_CANCELLATION_REASON", "�rsak til kansellering.");
define("INV_INSTR_IS_ONLINE", "Er dette en internettordre? (Avgiftsfritt eller ikke avhengig av hvordan du har satt opp systemet.).");
define("INV_INSTR_AUTO_RENEW", "Hvis du velger 'Ja' vil 'Neste forfallsdato' oppdateres hver gang det lages en ny faktura. Hvis du velger 'Nei' vil ikke 'Neste forfallsdato' bli oppdatert og det vil ikke bli generert ny faktura automatisk. Ikke velg 'Nei' med mindre du vet hva du gj�r.");
define("INV_ORDER_INVOICE_INTRO", "F�lgende verdier vil komme med p� fakuraen(e) som etterf�lger denne ordren. Du kan overstyre dette hvis du �nsker det, men hver klar over at ovenst�ende valg vil bli overstyrt av det du gj�r her. Hvis to ordrer faktureres sammen (samlefaktura) og det er lagt inn en fast fraktpris pr. faktura vil ikke fraktprisen bli inkludert. Hvis du vil forsikre deg om at fraktprisen blir lagt til uavhengig av andre ordre p� kunden m� du velge 'Ja' p� 'Uni faktura' ovenfor.");
define("INV_ORDER_TOTAL", "Ordretotal");
define("INV_GENERATE", "Generer");
define("INV_PRODUCT", "Produkt");
define("INV_ONE_OFF", "Engangs");
define("INV_WEEKLY", "Ukentlig");
define("INV_MONTHLY", "M�nedlig");
define("INV_QUARTERLY", "Kvartalsvis");
define("INV_ANNUALLY", "�rlig");
define("INV_BIANNUALLY", "Hvert 2. �r");
define("INV_FIVE_YEARLY", "Hvert 5. �r");
define("INV_TEN_YEARLY", "Hvert 10. �r");
define("INV_STATUS_PENDING", "Under behandling");
define("INV_STATUS_PROCESSING", "Under behandling");
define("INV_STATUS_DISPATCHED", "Sendt");
define("INV_STATUS_COMPLETED", "Ferdig");
define("INV_STATUS_CANCELLED", "Kansellert");
define("INV_EXPIRY_DATE", "Utl�psdato (hvis aktuelt)");
define("INV_CANCELLATION_DATE", "Kansellert dato (hvis aktuelt)");
define("INV_INSTR_EXPIRY_DATE", "Legg inn dato for n�r ordren utl�per (ingen flere fakturaer vil bli generert etter denne dato). Hvis det er en faktura med forfall p� den angitte datoen vil denne bli produsert.");
define("INV_INSTR_CANCELLATION_DATE", "<strong>Merk:</strong> Denne skal KUN brukes p� gjentagende faktura for en tjeneste som er avbestilt eller kansellert. Det vil ikke bli produsert faktura for ordrer som har en dato her.");
define("INV_SHOW_INVOICES_FOR_ORDER", "Vis alle fakturaer for denne ordren.");
define("INV_CANNOT_ORDER_SUB_WITHOUT_USER", "FEIL! Du kan ikke bestille et abbonement p� denne klienten fordi den ikke er koblet til en bruker ID. Legg en bruker til klienten f�rst og lag deretter abbonementet.");
define("INV_ORDER_VOUCHER_CODE", "Verdikupong nr.");
define("INV_INSTR_ORDER_VOUCHER_CODE", "Hvis du legger til et verdikupongnr. som tilh�rer en rabattkode vil rabatten bli trukket fra p� hver faktura for denne ordren. Hvis verdikupongnummeret ikke eksisterer vil det bli oversett.");
define("INV_ORDER_VOUCHER_DISCOUNT_NOT_SHOWN", "Merk: Eventuelle rabatter from vil ikke vises her. De vil imidlertid bli trukket fra n�r faktura produseres.");
define("INV_ORDER_FORM_FIELD_VALUES", "Order Form Field Values");
define("INV_INSTR_ORDER_FORM_FIELD_VALUES", "Verdier oppgitt av brukeren n�r ordren ble opprettet. Dette vil normalt sett bli automatisk opprettet n�r ordren opprettes, men du kan overstyre det hvis du �nsker det.");
define("INV_CLIENT_REQUIRED", "Velg en klientoppf�ring.");
define("INV_ORDER_PRODUCT_NAME_REQUIRED", "Velg et produkt.");
define("INV_ORDER_SHOW_PAYLINK", "Vise betalingslenke?");
define("INV_INSTR_ORDER_SHOW_PAYLINK", "Skal 'Betal denne faktura'-lenke ved siden av fakturanummeret for denne ordre?. Hvis du velger � vise lenke her og det finnes flere ordrer p� samme faktura m� lenken vises p� alle ordrene. Den globale innstillingen er avhengig av visningsalternativene du har angitt. Lenken vil kun vises hvis fakturaen ikke er betalt og fakturasummen er st�rre enn '0'.");
define("INV_ORDER_PAYLINK_USE_GLOBAL", "Bruk global");
define("INV_ORDER_PAYLINK_SHOW", "Vis");
define("INV_ORDER_PAYLINK_HIDE", "Skjul");
define("INV_ORDER_DISCOUNT_TITLE", "Rabatter i bruk p� denne ordre");
define("INV_ORDER_DISCOUNT_INTRO", "Alternativt kan du velge at spesifikke rabatter tilgjengelige p� denne ordren. Hvis det er flere enn en rabattsats tilgjengelig m� du benytte prioritert for � bestemme hvilken som skal beregnes f�rst (en rabatt med prioritet '0' vil bli beregnet f�r en rabatt med prioritet '1'). Verdier her vil overstyre det som er angitt p� de enkelte rabattsatser. Instillinger for rabatter gj�res under 'Rabattside'. Merk: En rabattsats her vil ikke n�dvendigvis bli trukket fra p� alle fakturaer for denne ordren (f.eks. hvis rabatt ikke gis p� gjentagende faktura eller det er en restriksjon p� dato).");
define("INV_ORDER_DISCOUNT", "Rabatt");
define("INV_ORDER_DISCOUNT_ORDERING", "Prioritet");
define("INV_ADD_ORDER_DISCOUNT", "Legg til rabatt");
define("INV_DELETE_DISCOUNT", "Slett rabatt");
define("INV_PLEASE_SELECT_DISCOUNT", "Velg en rabattsats.");
define("INV_ORDER_DISCOUNT_DUPLICATION", "Rabatten er allerede lagt til.");
define("INV_ORDER_PAYLINK", "Betalingsplan");
define("INV_ORDER_PAYLINK_PROMPT", "Hvis du �nsker � lage en ny betalingsplan for denne ordren, f.eks. for � fornye et abbonement eller hvis kundens kredittkort er g�tt ut p� dato), kan du sende f�lgende lenke til kunden: ");
define("INV_ORDER_PAYLINK_WARNING", "ADVARSELG! Klienten m� v�re koblet mot en bruker fordi man m� logge inn f�r man kan betale.");
define("INV_SEMI_ANNUALLY", "Halv�rlig");

/* Version 1.1.4 */
define("INV_NO_DATE_ENTERED", "Ugyldig dato. Ingen oppdatering er utf�rt.");

/* Version 1.1.4 SP1 */
define("INV_ORDER_WARNING_QTY_ZERO", "Advarsel! Antall er oppgitt til '0'. Dette betyr at ordreverdien ogs� vil bli '0'. �nsker du � fortsette?");

// Version 1.2.0
define("INV_FOUR_WEEKLY", "Hver 4. uke");

//Version 1.2.0
define("INV_ORDER_ORDER_VALUE", "Nettoverdi");
define("INV_ORDER_ORDER_VALUE_HELP", "Dette er ordreverdien f�r MVA., frakt og eventuelle rabatter.");
define("INV_ORDER_TRACKING_ID", "Sporingsnummer");
define("INV_INSTR_ORDER_TRACKING_ID", "Hvis du har satt opp URL for sporingsnummer korrekt kan du legge inn en ID her som sammen med URL'en vil generere en lenke. Denne lenken kan da benyttes av kunden for � spore pakken (avhengig av innstillingene du har gjort).");

//Version 1.2.1
define("INV_ORDER_SHOW_ALL", "Vis alle");
define("INV_ORDER_SHOW_RESET", "Nullstill dato");

//Version 1.2.6
define("INV_ORDERS_RECORD_LIMIT_WARNING", "ADVARSEL! Siden det er mer enn %s kunder i databasen vil bare de %s oppf�ringene vises i listne over. Hvis kunde ikke vises her kan du enten trykke 'Vis alle' eller velge 'Lag ny ordre' fra kundelisten.");
?>
