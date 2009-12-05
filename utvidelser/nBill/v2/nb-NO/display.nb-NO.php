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

//Display Options
define("NBILL_DISPLAY_OPTIONS_TITLE", "Vis alternativer");
define("NBILL_DISPLAY_INTRO", "De fleste innstillinger og valg som vises på forsiden konfigureres her - du velger her hva som skal vises for dine brukere.");
define("NBILL_DISPLAY_MY_ACCOUNT", "Alternativer for siden 'Min konto'");
define("NBILL_DISPLAY_ACCESS_LEVEL", "Vis gjeldende medlemsnivå");
define("NBILL_DISPLAY_ACCESS_LEVEL_DESC", "Angir om ACL-gruppenavn skal vises eller ikke for brukerne.");
define("NBILL_DISPLAY_PROFILE", "Vis link til profilen");
define("NBILL_DISPLAY_PROFILE_DESC", "Angir om link til brukerprofilen skal vises eller ikke i hovedmenyen.");
define("NBILL_DISPLAY_ORDERS", "Vis link til bestillinger");
define("NBILL_DISPLAY_ORDERS_DESC", "Angir om link til brukerens bestillinger skal vises eller ikke i hovedmenyen.");
define("NBILL_DISPLAY_INVOICES", "Vis link til faktura");
define("NBILL_DISPLAY_INVOICES_DESC", "Angir om link til brukerens faktura(er) skal vises eller ikke i hovedmenyen.");
define("NBILL_DISPLAY_MORE_LINKS", "Du kan legge til ytterligere 10 linker som vil bli vist på hovedmenyen under 'Min konto'. Skriv inn linkene her i den rekkefølgen de skal vises på forsiden.");
define("NBILL_LINK", "Link");
define("NBILL_LINK_URL", "Sti");
define("NBILL_LINK_TEXT", "Forklarende tekst til link");
define("NBILL_LINK_DESC", "Beskrivelse av link");
define("NBILL_DISPLAY_MY_PROFILE", "Valg for siden 'Min profil'");
define("NBILL_DISPLAY_COMPANY_NAME", "Vis felt med firmanavn");
define("NBILL_DISPLAY_COMPANY_NAME_DESC", "Angir om bruker selv kan endre firmanavn fra profilsiden.");
define("NBILL_DISPLAY_CONTACT_NAME", "Vis felt med kontaktnavn");
define("NBILL_DISPLAY_CONTACT_NAME_DESC", "Angir om bruker selv kan endre kontaktnavn fra profilsiden.");
define("NBILL_DISPLAY_CONTACT_NAME_INV", "Vis feltet 'Vis kontaktnavn på faktura");
define("NBILL_DISPLAY_CONTACT_NAME_NBILL_DESC", "Angir om bruker selv kan velge om kontaktnavn skal komme på fakturaen (hvis firmanavn også vises) fra profilsiden.");
define("NBILL_DISPLAY_ADDRESS", "Vis adressefelt");
define("NBILL_DISPLAY_ADDRESS_DESC", "Angir om bruker selv kan endre adressen fra profilsiden.");
define("NBILL_DISPLAY_EMAIL", "Vis felt for e-post adresse");
define("NBILL_DISPLAY_EMAIL_DESC", "Angir om bruker selv kan endre e-post adressen fra profilsiden.");
define("NBILL_DISPLAY_WEBSITE", "Vis adressefelt for hjemmeside");
define("NBILL_DISPLAY_WEBSITE_DESC", "Angir om bruker selv kan endre link til hjemmesiden fra profilsiden.");
define("NBILL_DISPLAY_TELEPHONE", "Vis felt for telefonnummer");
define("NBILL_DISPLAY_TELEPHONE_DESC", "Hvorvidt bruker selv kan endre telefonnummer fra profilsiden.");
define("NBILL_DISPLAY_MOBILE", "Vis felt for mobilnummer");
define("NBILL_DISPLAY_MOBILE_DESC", "Angir om bruker selv kan endre mobilnummer fra profilsiden.");
define("NBILL_DISPLAY_FAX", "Vis felt for faksnummer");
define("NBILL_DISPLAY_FAX_DESC", "Angir om bruker selv kan endre faksnummer fra profilsiden.");
define("NBILL_DISPLAY_TAX_EXEMPT", "Vis felt for kode med merverdifritak");
define("NBILL_DISPLAY_TAX_EXEMPT_DESC", "Angir om bruker selv kan endre kode for merverdifritak fra profilsiden.");
define("NBILL_DISPLAY_CURRENCY", "Vis felt for standard valuta");
define("NBILL_DISPLAY_CURRENCY_DESC", "Angir om bruker selv kan endre standard valuta fra profilsiden. (Kan bare brukes om produktet er prisgitt i den valgte valuta).");
define("NBILL_DISPLAY_PASSWORD", "Vis felt for passord");
define("NBILL_DISPLAY_PASSWORD_DESC", "Angir om bruker selv kan endre passord fra profilsiden.");
define("NBILL_DISPLAY_MY_ORDERS", "Alternativer for siden 'Mine bestillinger'");
define("NBILL_DISPLAY_NEW_ORDER_LINK", "Vis link 'Ny bestilling'");
define("NBILL_DISPLAY_NEW_ORDER_LINK_DESC", "Angir om linken 'Ny bestilling' skal vises eller ikke på ordreoversikten.");
define("NBILL_DISPLAY_ORDER_NO", "Vis felt med bestillingsnummer (anbefalt)");
define("NBILL_DISPLAY_ORDER_NO_DESC", "Angir om ordrenummer skal vises på ordreoversikten.");
define("NBILL_DISPLAY_INVOICE_LINK", "Vis link til fakturaer");
define("NBILL_DISPLAY_INVOICE_LINK_DESC", "Angir om en link til fakturaer skal vises eller ikke for hver ordre (linken vises ved siden av ordrenummer, og da må ordrenummer også vises).");
define("NBILL_DISPLAY_ORDER_DATE", "Vis bestillingsdato");
define("NBILL_DISPLAY_ORDER_DATE_DESC", "Om bestillingsdato skal vises eller ikke i ordroversikten.");
define("NBILL_DISPLAY_ORDER_EXPIRY_DATE", "Vis utløpsdato");
define("NBILL_DISPLAY_ORDER_EXPIRY_DATE_DESC", "Om utløpsdato på bestillingen skal vises eller ikke på ordroversikten.");
define("NBILL_DISPLAY_PRODUCT", "Vis produktnavn");
define("NBILL_DISPLAY_PRODUCT_DESC", "Angir om produktnavn som er bestilt skal vises eller ikke på ordroversikten.");
define("NBILL_DISPLAY_ORDER_VALUE", "Vis ordrebeløp");
define("NBILL_DISPLAY_ORDER_VALUE_DESC", "Angir om ordrebeløp skal vises eller ikke på ordroversikten.");
define("NBILL_DISPLAY_FREQUENCY", "Vis periodiske betalinger");
define("NBILL_DISPLAY_FREQUENCY_DESC", "Angir om periodiske betalinger skal vises eller ikke på ordroversikten.");
define("NBILL_ALLOW_CANCELLATION", "Tillat annulleringer");
define("NBILL_ALLOW_CANCELLATION_DESC", "Angir om brukeren kan annullere en bestilling eller ikke (gjelder bare abonnement hvor ordre er satt til automatisk fornyelse, OG periodiske betalinger vises).");
define("NBILL_DISPLAY_ORDER_STATUS", "Vis ordrestatus");
define("NBILL_DISPLAY_ORDER_STATUS_DESC", "Angir om ordrestatus skal vises eller ikke på ordroversikten.");
define("NBILL_DISPLAY_MY_INVOICES", "Alternativer for siden 'Min faktura'");
define("NBILL_DISPLAY_FILTER", "Vis rullegardinliste");
define("NBILL_DISPLAY_FILTER_DESC", "Angir om rullegardinliste med ordrer skal vises eller ikke for å filtrere fakturaer.");
define("NBILL_DISPLAY_DATE_RANGE", "Vis datoområde");
define("NBILL_DISPLAY_DATE_RANGE_DESC", "Angir om bruker kan velge datoområde eller ikke for å filtrere fakturalisten (er dette valget satt til 'Nei', vil ALLE fakturaer for bruker vises på fakturalisten.");
define("NBILL_DISPLAY_INVOICE_DATE", "Vis felt for fakturadato");
define("NBILL_DISPLAY_INVOICE_DATE_DESC", "Angir om fakturadato skal vises eller ikke i fakturalisten.");
define("NBILL_DISPLAY_FIRST_ITEM", "Vis første vare på fakturafeltet");
define("NBILL_DISPLAY_FIRST_ITEM_DESC", "Angir om beskrivelse av første vare på fakturaen skal vises eller ikke på fakturalisten.");
define("NBILL_DISPLAY_NET", "Vis felt for netto totalt");
define("NBILL_DISPLAY_NET_DESC", "Angir om netto totalt skal vises eller ikke på fakturalisten.");
define("NBILL_DISPLAY_GROSS", "Vis felt for brutto totalt");
define("NBILL_DISPLAY_GROSS_DESC", "Angir om brutto totalt skal vises eller ikke på fakturalisten.");
define("NBILL_DISPLAY_STATUS", "Vis felt for fakturastatus");
define("NBILL_DISPLAY_STATUS_DESC", "Angir om fakturastatus skal vises eller ikke (f.eks. ikke betalt, betalt, delvis betalt, refundert eller delvis refundert) på fakturalisten.");
define("NBILL_DISPLAY_PAYMENT_LINK", "Vis betalingslink (hvis tilgjengelig)");
define("NBILL_DISPLAY_PAYMENT_LINK_DESC", "Angir om link for online betaling av faktura skal vises eller ikke (gjelder bare om en betalingsløsning er spesifisert for kunde, og at faktura ikke er betalt).");
define("NBILL_DISPLAY_PDF", "Vis PDF-link for faktura");
define("NBILL_DISPLAY_PDF_DESC", "Angir om en PDF-faktura skal genereres eller ikke (MERK: Å produsere PDF faktura kan ta tid og det brukes store serverressurser, så bruk funksjonen med forsiktighet! PDF linken vises bare om HTML2PS/PDF er installert. Se %s)");
define("NBILL_DISPLAY_EMAIL_OPTIONS", "alternativer for faktura på e-post");
define("NBILL_DISPLAY_EMAIL_OPTIONS_DESC", "Angir om kunden skal kunne velge å motta faktura på e-post eller ikke. Merk: For å hindre visning av valg for fakturavarsling, i tillegg til å sette dette valget til 'Nei', må du både for selger og for hver kunde spesifisere (settes til selgers standard med mindre det overstyres) at faktura ikke skal sendes ut. Dersom kunden mottar faktura på e-post, må kunde kunne velge å ikke motta - ellers gjør du deg skyldig å sende ut spam).");
define("NBILL_DISPLAY_PENDING_PAY_LINK", "Tillate betaling for pågående ordre?");
define("NBILL_DISPLAY_PENDING_PAY_LINK_DESC", "Angir om en knapp for at kunden skal kunne betale pågående ordre skal vises eller ikke (i tilfelle kunden ikke fullførte betaling, eller at tidligere betaling har mislyktes og de ønsker å prøve igjen). Gjelder kun om ordrestatus også vises.");
define("NBILL_DISPLAY_PAYMENT_LINK_THRESHOLD", "Hyppighetsterskel");
define("NBILL_DISPLAY_PAYMENT_LINK_THRESHOLD_DESC", "Som standard vil betalingslinken bare vises på ubetalte faktura for engangsbetalinger. Skal linken vises for ordre med andre betalingsfrekvenser, sett det mest hyppige valget her - alle ordre med gitte betalingshyppighet eller med lavere hyppighet, kvalifiserer til at betalingslinken vises - om  'Vis betalingslink' (over) er satt til 'Ja', og faktura ikke er betalt, og at ordre- og fakturainnstillingene ikke overstyrer denne verdien.");
if (!defined("NBILL_ONE_OFF"))
{
	define("NBILL_ONE_OFF", "Engangsbetaling");
	define("NBILL_WEEKLY", "Vis alltid");
	define("NBILL_MONTHLY", "Månedlig");
	define("NBILL_FOUR_WEEKLY", "Hver fjerde uke"); //Version 1.2.0
	define("NBILL_QUARTERLY", "Kvartalsvis");
	define("NBILL_SEMI_ANNUALLY", "Halvårlig");
	define("NBILL_ANNUALLY", "Årlig");
	define("NBILL_BIANNUALLY", "Hvert andre år");
	define("NBILL_FIVE_YEARLY", "Hvert femte år");
	define("NBILL_TEN_YEARLY", "Hvert tiende år");
}
define("NBILL_DISPLAY_PATHWAY", "Vis navigeringssti?");
define("NBILL_DISPLAY_PATHWAY_DESC", "Angir om sti skal vises eller ikke på toppen av siden når en bruker er logget inn.");
define("NBILL_DISPLAY_USERNAME", "Vis felt for brukernavn");
define("NBILL_DISPLAY_USERNAME_DESC", "Angir om bruker kan endre sitt brukernavn eller ikke");

/**************/
/* Version 1.1.4
/* Note to translators: Text amended for NBILL_DISPLAY_EMAIL_OPTIONS_DESC (line 106 in the English file).
/**************/

//Version 1.2.0
//Line 116 (four-weekly) added

//Version 1.2.0
define("NBILL_DISPLAY_RENEW_LINK", "Vis link for fornyelse");
define("NBILL_DISPLAY_RENEW_LINK_DESC", "Angir om link 'fornyelse' skal vises eller ikke, slik at kunden kan fornye en ordre (bare om autofornyelse er satt til 'Nei' eller at utløpsdato er passert).");
define("NBILL_DISPLAY_RENEW_ADVANCE_LIMIT", "Avansert fornyelse");
define("NBILL_DISPLAY_RENEW_ADVANCE_LIMIT_DESC", "Maksimum antall betalingssykluser periodiske betalinger kan gjøres på forhånd (gjelder bare om `Vis link for fornyelse` er satt til `Ja`. F.eks. om betalingsfrekvens på en ordre er satt til månedlig, og du skriver 3 her, har ordre med autofornyelse satt til `Nei`, kan kunden manuelt fornye opp til 3 måneder på forskudd. skriver du 0 (null), vises ikke linken før etter utløpsdato.");
define("NBILL_DISPLAY_GATEWAY_CHOICE_ORDER", "Tillat valg av betalingsløsning");
define("NBILL_DISPLAY_GATEWAY_CHOICE_ORDER_DESC", "Tillate bruker å velge hvilken betalingsløsning som skal brukes (bare om mer enn en er installert og publisert) når en ordre skal fornyes (gjelder ikke for pågående ordre, i dette tilfellet brukes den betalingsmåte som ble valgt da ordre ble inngått). Om denne settes til `Nei`, brukes standardverdi for selger.");
define("NBILL_DISPLAY_PAY_REQUIRES_LOGIN_ORDER", "Obligatorisk å logge inn for å betale");
define("NBILL_DISPLAY_PAY_REQUIRES_LOGIN_ORDER_DESC", "Angir om en bruker må være pålogget eller ikke for å betale en pågående ordre eller en fornyelse.");
define("NBILL_DISPLAY_GATEWAY_CHOICE_INVOICE", "Tillat valg av betalingsløsning");
define("NBILL_DISPLAY_GATEWAY_CHOICE_INVOICE_DESC", "Tillate bruker å velge hvilken betalingsløsning som skal brukes (bare om mer enn en er installert og publisert) ved betaling av en faktura. Om denne settes til `Nei`, brukes standardverdi for selger.");
define("NBILL_DISPLAY_PAY_REQUIRES_LOGIN_INVOICE", "Obligatorisk å logge inn for å betale");
define("NBILL_DISPLAY_PAY_REQUIRES_LOGIN_INVOICE_DESC", "Angir om en bruker må være pålogget eller ikke for å betale en faktura.");
define("NBILL_DISPLAY_PARCEL_TRACKING", "Vis link for pakkesporing");
define("NBILL_DISPLAY_PARCEL_TRACKING_DESC", "Angir om link for pakkesporing skal vises eller ikke (forutsatt at en pakkesporingsadresse blir satt på transportposten og at sporings-ID blir satt på ordreposten). MERK: Vises bare om ordrestatus også vises.");

//Version 1.2.1
define("NBILL_DISPLAY_MY_ACCOUNT_HEADER", "Vis overskriften 'Min konto'?");
define("NBILL_DISPLAY_MY_ACCOUNT_HEADER_DESC", "Angir om en overskrift skal vises på hver siden når bruker er logget inn på forsiden.(Standard tekst er 'Min konto'.) Om du ønsker, kan dette endres i språkfilen)");
define("NBILL_DISPLAY_SUPPRESS_RENEW_IF_CANCELLED", "Stanse fornyelse dersom bestillingen kanselleres");
define("NBILL_DISPLAY_SUPPRESS_RENEW_IF_CANCELLED_DESC", "Angir om fornyelse-linken skal eller ikke skal vises om en ordre er kansellert (forhindrer at bruker gjennomfører en ordre etter at den er kansellert - gjelder bare når `Vis fornyelseslinke` er satt til `Ja`).");
define("NBILL_DISPLAY_SUPPRESS_CANCEL_IF_NOT_AUTO_RENEW", "Skjul avbryt om ordre ikke fornyes automatisk");
define("NBILL_DISPLAY_SUPPRESS_CANCEL_IF_NOT_AUTO_RENEW_DESC", "Angir om avbryt-linken skal skjules eller ikke for ordre som ikke er satt til automatisk fornyelse. Kansellering av en bestilling som ikke automatisk fornyes har ingen effekt, men hvis du vil tillate brukerne å avbryte slike ordrer uansett (snarere enn å forklare dem at det ikke er nødvendig å avbryte), sett dette til `nei`. Gjelder bare hvis `Tillat annulleringer` er satt til `Ja`, ellers vil ikke avbryt-linken vises uansett.");

//Version 1.2.3 - Note to translators:
//Line 114 of original English language file amended (NBILL_WEEKLY) - changed to 'Always Show' for clarity

//Version 1.2.9
define("NBILL_DISPLAY_NBILL_SHOW_DATE_RANGE", "Vis datoperiode på fakturaer?");
define("NBILL_DISPLAY_NBILL_SHOW_DATE_RANGE_DESC", "Om man skal vise eller ikke, datoperiode på produktlinja på fakturaer for abonnementer/gjentagende betalinger (MERK: dette påvirker bare generering av fakturaer. Eksisterende fakturaer vil ikke endres når du endrer denne innstillingen. Om du velger 'nei' vil ikke datoperioden bli angitt på fakturaene, slik at du kan få problemer med å identifisere gjeldende periode for fakturaene.");
define("NBILL_DISPLAY_ADD_OPTION_TO_FORM_ACTION", "Add option parameter to form submission URL?");
define("NBILL_DISPLAY_ADD_OPTION_TO_FORM_ACTION_DESC", "There are 2 ways of submitting forms (ie. with or without the option parameter in the URL). In most cases, both methods will work, but some templates and some SEF URL components are fussy. If you find any form submissions are just redirecting to your home page or a blank page, try changing the value of this setting.");
?>
