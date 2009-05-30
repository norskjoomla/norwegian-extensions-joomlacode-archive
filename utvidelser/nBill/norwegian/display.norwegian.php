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
define("INV_DISPLAY_OPTIONS_TITLE", "Vis valg");
define("INV_DISPLAY_INTRO", "De fleste innstillingene og valg som vises p� forsiden konfigureres her - du velger her hva som skal vises for dine brukere.");
define("INV_DISPLAY_MY_ACCOUNT", "Valg for siden 'Min konto'");
define("INV_DISPLAY_ACCESS_LEVEL", "Vis gjeldende medlemsniv�");
define("INV_DISPLAY_ACCESS_LEVEL_DESC", "Hvorvidt ACL gruppenavn skal vises eller ikke for brukerne.");
define("INV_DISPLAY_PROFILE", "Vis link til profilen");
define("INV_DISPLAY_PROFILE_DESC", "Hvorvidt link til brukerprofilen skal vises eller ikke i hovedmenyen.");
define("INV_DISPLAY_ORDERS", "Vis link til bestillinger");
define("INV_DISPLAY_ORDERS_DESC", "Hvorvidt link til brukerens bestillinger skal vises eller ikke i hovedmenyen.");
define("INV_DISPLAY_INVOICES", "Vis link til faktura");
define("INV_DISPLAY_INVOICES_DESC", "Hvorvidt link til brukerens faktura skal vises eller ikke i hovedmenyen.");
define("INV_DISPLAY_MORE_LINKS", "Du kan legge opp til ytterligere 10 linker som vil bli vist p� hovedmenyen 'Min konto'. Skriv inn linken her i den rekkef�lgen de skal vises p� forsiden.");
define("INV_LINK", "Link");
define("INV_LINK_URL", "Sti");
define("INV_LINK_TEXT", "Link Tekst");
define("INV_LINK_DESC", "Link beskrivelse");
define("INV_DISPLAY_MY_PROFILE", "Valg for siden 'Min profil'");
define("INV_DISPLAY_COMPANY_NAME", "Vis felt med firmanavn");
define("INV_DISPLAY_COMPANY_NAME_DESC", "Hvorvidt bruker selv kan endre firmanavn fra profilsiden.");
define("INV_DISPLAY_CONTACT_NAME", "Vis felt med kontaktnavn");
define("INV_DISPLAY_CONTACT_NAME_DESC", "Hvorvidt bruker selv kan endre kontaktnavn fra profilsiden.");
define("INV_DISPLAY_CONTACT_NAME_INV", "Vis felt 'Vis kontaktnavn p� faktura");
define("INV_DISPLAY_CONTACT_NAME_INV_DESC", "Vis hvorvidt bruker selv kan velge om kontaktnavn skal komme p� fakturaen (om firmanavn ogs� vises) fra profilsiden.");
define("INV_DISPLAY_ADDRESS", "Vis adressefelt");
define("INV_DISPLAY_ADDRESS_DESC", "Hvorvidt bruker selv kan endre adressen fra profilsiden.");
define("INV_DISPLAY_EMAIL", "Vis felt for e-post adresse");
define("INV_DISPLAY_EMAIL_DESC", "Hvorvidt bruker selv kan endre e-post adressen fra profilsiden.");
define("INV_DISPLAY_WEBSITE", "Vis adressefelt for hjemmeside");
define("INV_DISPLAY_WEBSITE_DESC", "Hvorvidt bruker selv kan endre link til hjemmesiden fra profilsiden.");
define("INV_DISPLAY_TELEPHONE", "Vis felt for telefonnr");
define("INV_DISPLAY_TELEPHONE_DESC", "Hvorvidt bruker selv kan endre telefonnr fra profilsiden.");
define("INV_DISPLAY_MOBILE", "Vis felt for mobilnr");
define("INV_DISPLAY_MOBILE_DESC", "Hvorvidt bruker selv kan endre mobilnr fra profilsiden.");
define("INV_DISPLAY_FAX", "Vis felt for faksnr");
define("INV_DISPLAY_FAX_DESC", "Hvorvidt bruker selv kan endre faksnr fra profilsiden.");
define("INV_DISPLAY_TAX_EXEMPT", "Vis felt for kode med skattefritak");
define("INV_DISPLAY_TAX_EXEMPT_DESC", "Hvorvidt bruker selv kan endre kode for skattefritak fra profilsiden.");
define("INV_DISPLAY_CURRENCY", "Vis felt for standard valuta");
define("INV_DISPLAY_CURRENCY_DESC", "Hvorvidt bruker selv kan endre standard valuta fra profilsiden. (blir bare brukt om produktet er prisgitt i den valgte valuta).");
define("INV_DISPLAY_PASSWORD", "Vis felt for passord");
define("INV_DISPLAY_PASSWORD_DESC", "Hvorvidt bruker selv kan endre passord fra profilsiden.");
define("INV_DISPLAY_MY_ORDERS", "Valg for siden 'Mine bestillinger'");
define("INV_DISPLAY_NEW_ORDER_LINK", "Vis link 'Ny bestilling'");
define("INV_DISPLAY_NEW_ORDER_LINK_DESC", "Hvorvidt linken 'Ny bestilling' skal vises eller ikke p� ordreoversikten.");
define("INV_DISPLAY_ORDER_NO", "Vis felt med bestillingsnr (anbefalt)");
define("INV_DISPLAY_ORDER_NO_DESC", "Hvorvidt ordrenr skal vises p� ordreoversikten.");
define("INV_DISPLAY_INVOICE_LINK", "Vis link til faktura");
define("INV_DISPLAY_INVOICE_LINK_DESC", "Hvorvidt en link til faktura skal vises eller ikke for hver ordre (linken vises ved siden av ordrenr, og da m� ordrenr ogs� vises).");
define("INV_DISPLAY_ORDER_DATE", "Vis bestillingsdato");
define("INV_DISPLAY_ORDER_DATE_DESC", "Hvorvidt bestillingsdato skal vises eller ikke i ordroversikten.");
define("INV_DISPLAY_ORDER_EXPIRY_DATE", "Vis utl�psdato");
define("INV_DISPLAY_ORDER_EXPIRY_DATE_DESC", "Hvorvidt utl�psdato p� bestillingen skal vises eller ikke p� ordroversikten.");
define("INV_DISPLAY_PRODUCT", "Vis produktnavn");
define("INV_DISPLAY_PRODUCT_DESC", "Hvorvidt produktnavn som er bestilt skal vises eller ikke p� ordroversikten.");
define("INV_DISPLAY_ORDER_VALUE", "Vis ordrebel�p");
define("INV_DISPLAY_ORDER_VALUE_DESC", "Hvorvidt ordrebel�p skal vises eller ikke p� ordroversikten.");
define("INV_DISPLAY_FREQUENCY", "Vis periodiske betalinger");
define("INV_DISPLAY_FREQUENCY_DESC", "Hvorvidt periodiske betalinger skal vises eller ikke p� ordroversikten.");
define("INV_ALLOW_CANCELLATION", "Tillat annulleringer");
define("INV_ALLOW_CANCELLATION_DESC", "Hvorvidt en bruker kan annullere en bestilling eller ikke (gjelder bare abonnement hvor ordre er satt til automatisk fornyelse, OG periodiske betalinger vises).");
define("INV_DISPLAY_ORDER_STATUS", "Vis ordrestatus");
define("INV_DISPLAY_ORDER_STATUS_DESC", "Hvorvidt ordrestatus skal vises eller ikke p� ordroversikten.");
define("INV_DISPLAY_MY_INVOICES", "Valg for siden 'Min faktura'");
define("INV_DISPLAY_FILTER", "Vis rullegardinliste");
define("INV_DISPLAY_FILTER_DESC", "Hvorvidt rullegardinliste p� ordre skal vises eller ikke for � filtrere faktura.");
define("INV_DISPLAY_DATE_RANGE", "Vis datoomr�de");
define("INV_DISPLAY_DATE_RANGE_DESC", "Hvorvidt bruker kan velge datoomr�de eller ikke for � filtrere fakturalisten (er dette valget satt til 'Nei', vil ALLE faktura for bruker vises p� fakturalisten.");
define("INV_DISPLAY_INVOICE_DATE", "Vis felt for fakturadato");
define("INV_DISPLAY_INVOICE_DATE_DESC", "Hvorvidt fakturadato skal vises eller ikke i fakturalisten.");
define("INV_DISPLAY_FIRST_ITEM", "Vis f�rste detaljen p� fakturafeltet");
define("INV_DISPLAY_FIRST_ITEM_DESC", "Hvorvidt beskrivelsen av f�rste detaljen p� fakturaen skal vises eller ikke p� fakturalisten.");
define("INV_DISPLAY_NET", "Vis felt for netto totalt");
define("INV_DISPLAY_NET_DESC", "Hvorvidt netto totalt skal vises eller ikke p� fakturalisten.");
define("INV_DISPLAY_GROSS", "Vis felt for brutto totalt");
define("INV_DISPLAY_GROSS_DESC", "Hvorvidt brutto totalt skal vises eller ikke p� fakturalisten.");
define("INV_DISPLAY_STATUS", "Vis felt for fakturastatus");
define("INV_DISPLAY_STATUS_DESC", "Hvorvidt fakturastatus skal vises eller ikke (f. eks ikke betalt, betalt, delvis betalt, refundert, eller delvis refundert) p� fakturalisten.");
define("INV_DISPLAY_PAYMENT_LINK", "Vis betalingslink (om gjeldende)");
define("INV_DISPLAY_PAYMENT_LINK_DESC", "Hvorvidt link for online betaling av faktura skal vises eller ikke (gjelder bare om en betalingsl�sning er spesifisert for kunde, og at faktura ikke er betalt).");
define("INV_DISPLAY_PDF", "Vis PDF link for faktura");
define("INV_DISPLAY_PDF_DESC", "Hvorvidt en PDF faktura skal genereres eller ikke (MERK: � produsere PDF faktura kan ta tid og det brukes stor serverressurser, s� bruk det med forsiktighet! PDF linken vises bare om HTML2PS/PDF er installert. Se %s)");
define("INV_DISPLAY_EMAIL_OPTIONS", "Valg for faktura p� e-post");
define("INV_DISPLAY_EMAIL_OPTIONS_DESC", "Hvorvidt kunden skal kunne velge � motta faktura p� e-post eller ikke. Merk: For � hindre visning av valg for fakturavarsling, i tillegg til � sette dette valget til 'Nei', m� du b�de for selger og for hver kunde spesifisere (settes til selgers standard med mindre det overstyres) at faktura ikke skal sendes ut. Dersom kunden mottar faktura p� e-post, m� de kunne velge � ikke ville - eller er du skyldig i � sende massepost).");
define("INV_DISPLAY_PENDING_PAY_LINK", "Tillate betaling for p�g�ende ordre?");
define("INV_DISPLAY_PENDING_PAY_LINK_DESC", "Hvorvidt en knapp for at kunden skal kunne betale p�g�ende ordre skal vises eller ikke (i tilfelle de ikke fullf�rer eller det tidliger har g�tt galt og de �nsker � pr�ve igjen). Gjelder kun om ordrestatus ogs� vises.");
define("INV_DISPLAY_PAYMENT_LINK_THRESHOLD", "Frequency Treshold");
define("INV_DISPLAY_PAYMENT_LINK_THRESHOLD_DESC", "Som standard vil betalingslinken bare vises p� ubetalte faktura for engangsbetalinger. Skal linken vises for ordre med andre betalingsfrekvenser, velg den mest hyppig valget her - alle ordre med den betalingshyppigheten eller med mindre hyppighet, kvalifisert til at betalingslinken vises - om  'Vis betalings link' (over) er satt til 'Ja', og faktura ikke er betalt, og at ordre og faktura innstillingene ikke overstyrer denne verdien.");
if (!defined("INV_ONE_OFF"))
{
	define("INV_ONE_OFF", "Engangsbetaling");
	define("INV_WEEKLY", "Vis alltid");
	define("INV_MONTHLY", "M�nedlig");
	define("INV_FOUR_WEEKLY", "Fjerde uke"); //Version 1.2.0
	define("INV_QUARTERLY", "Kvartalsvis");
	define("INV_SEMI_ANNUALLY", "Halv�rlig");
	define("INV_ANNUALLY", "�rlig");
	define("INV_BIANNUALLY", "Hvert andre �r");
	define("INV_FIVE_YEARLY", "Hvert femte �r");
	define("INV_TEN_YEARLY", "Hvert tiende �r");
}
define("INV_DISPLAY_PATHWAY", "Vis navigeringsstil?");
define("INV_DISPLAY_PATHWAY_DESC", "Hvorvidt navigeringsstil skal vises eller ikke p� toppen av siden n�r en bruker er logget inn.");
define("INV_DISPLAY_USERNAME", "vis felt for brukernavn");
define("INV_DISPLAY_USERNAME_DESC", "Hvorvidt bruker kan endre sitt brukernavn eller ikke");

/**************/
/* Version 1.1.4
/* Note to translators: Text amended for INV_DISPLAY_EMAIL_OPTIONS_DESC (line 106 in the English file).
/**************/

//Version 1.2.0
//Line 116 (four-weekly) added

//Version 1.2.0
define("INV_DISPLAY_RENEW_LINK", "Vis link for fornyelse");
define("INV_DISPLAY_RENEW_LINK_DESC", "Hvorvidt link 'fornyelse' skal vises eller ikke s� kunden kan fornye en ordre (bare om autofornyelse er satt til 'Nei' eller at utl�psdato er passert).");
define("INV_DISPLAY_RENEW_ADVANCE_LIMIT", "Avansert fornyelse");
define("INV_DISPLAY_RENEW_ADVANCE_LIMIT_DESC", "Maksimum antall betalingssykluser en periodiske betalinger kan betales (gjelder bare om `Vis link for fornyelse` er satt til `Ja`. F. eks om betalingsfrekvens p� en ordre er satt til m�nedlig, og du skriver 3 her, har ordre med autofornyelse satt til `Nei`, kan kunden manuelt fornye opp til 3 m�neder p� forskudd. skriver du 0 (null), vises ikke linken f�r etter utl�psdato.");
define("INV_DISPLAY_GATEWAY_CHOICE_ORDER", "Tillat valg av betalingsl�sning");
define("INV_DISPLAY_GATEWAY_CHOICE_ORDER_DESC", "Tillate bruker � velge hvilken betalingsl�sning som skal brukes (bare om mer enn en er installert og publisert) n�r en ordre skal fornyes (gjelder ikke for p�g�ende ordre, de bruker betalingsm�te som ble valgt n�r ordre ble inng�tt). Om denne settes til `Nei`, brukes standardverdi for selger.");
define("INV_DISPLAY_PAY_REQUIRES_LOGIN_ORDER", "Obligatorisk � logg inn for � betalet");
define("INV_DISPLAY_PAY_REQUIRES_LOGIN_ORDER_DESC", "Hvorvidt en bruker m� v�re logget inn eller ikke for � betale en p�g�ende ordre eller en fornyelse.");
define("INV_DISPLAY_GATEWAY_CHOICE_INVOICE", "Tillat valg av betalingsl�sning");
define("INV_DISPLAY_GATEWAY_CHOICE_INVOICE_DESC", "Tillate bruker � velge hvilken betalingsl�sning som skal brukes (bare om mer enn en er installert og publisert) ved bataling av en faktura. Om denne settes til `Nei`, brukes standardverdi for selger.");
define("INV_DISPLAY_PAY_REQUIRES_LOGIN_INVOICE", "Obligatorisk � logg inn for � betale");
define("INV_DISPLAY_PAY_REQUIRES_LOGIN_INVOICE_DESC", "Hvorvidt en bruker m� v�re logget inn eller ikke for � betale en faktura.");
define("INV_DISPLAY_PARCEL_TRACKING", "Vis link for pakkesporing");
define("INV_DISPLAY_PARCEL_TRACKING_DESC", "Hvorvidt link for pakkesporing skal vises eller ikke (underlagt at en pakkesporingsadressen blir satt p� transportposten og sporing ID blir satt p� ordreposten). MERK: Vises bare om ordrestatus ogs� vises.");

//Version 1.2.1
define("INV_DISPLAY_MY_ACCOUNT_HEADER", "Vis overskriften 'Min konto'?");
define("INV_DISPLAY_MY_ACCOUNT_HEADER_DESC", "Hvorvidt en overskrift skal vises p� hver siden n�r bruker er logget inn p� forsiden.(standard tekst er 'Min konto', om du �nsker kan du endre dette i spr�kfilen)");
define("INV_DISPLAY_SUPPRESS_RENEW_IF_CANCELLED", "Stanse fornyelse dersom bestillingen kanselleres");
define("INV_DISPLAY_SUPPRESS_RENEW_IF_CANCELLED_DESC", "Hvorvidt � vise fornyelse linken eller ikke om en ordre er kansellert (forhindrer at bruker gjennomf�rer en ordre etter at den er kansellert - gjelder bare n�r `Vis fornyelseslinke` er satt til `Ja`).");
define("INV_DISPLAY_SUPPRESS_CANCEL_IF_NOT_AUTO_RENEW", "Skjul avbryt om ordre ikke fornyes automatisk");
define("INV_DISPLAY_SUPPRESS_CANCEL_IF_NOT_AUTO_RENEW_DESC", "Hvorvidt avbryt linken skal skjuler eller ikke for ordre som ikke er satt til automatisk fornyelse. Kansellere en bestilling som ikke automatisk fornyes har ingen, men hvis du vil tillate brukerne � avbryte slike ordrer uansett (snarere enn � forklare dem at det ikke er n�dvendig � avbryte), sett dette til `nei`. Gjelder bare hvis `Tillat annulleringer` er satt til `Ja`, ellers vil ikke avbryt linken vises uansett.");

//Version 1.2.3 - Note to translators:
//Line 114 of original English language file amended (INV_WEEKLY) - changed to 'Always Show' for clarity
?>
