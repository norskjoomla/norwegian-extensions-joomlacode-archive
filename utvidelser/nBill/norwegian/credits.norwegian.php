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

define("INV_CREDITS_TITLE", "Kreditnotaer");
define("INV_CREDITS_INTRO", "N�r du har sendt en tilbakebetaling b�r du ogs� lage en medf�lgende kredittnota med informasjon om hva tilbakebetalingen gjelder, inkludert merverdiavgift hvis aktuelt.");
define("INV_INVOICE_NUMBER_CR", "Kredittnummer");
define("INV_BILLING_NAME_CR", "Mottaker");
define("INV_INVOICE_DATE_CR", "Kreditteringsdato");
define("INV_FIRST_ITEM_CR", "F�rste produktlinje p� kredittnota");
define("INV_EDIT_INVOICE_CR", "Rediger kredittnota");
define("INV_EMAIL_NOW_CR", "Send denne kredittnotaen til en kunde via e-post n�");
define("INV_BILLING_NAME_REQUIRED_CR", "Vennligst fyll inn mottakers navn");
define("INV_BILLING_ADDRESS_REQUIRED_CR", "Vennligst fyll inn mottakers adresse");
define("INV_NEW_INVOICE_CR", "Ny kredittnota");
define("INV_INVOICE_DETAILS_CR", "kredittnotadetaljer");
define("INV_INSTR_INVOICE_NUMBER_CR", "<strong>Husk:</strong> La feltet v�re tomt om du legger til en ny kredittnota, komponenten vil automatisk bruke det neste ledige kredittnotaenummeret.");
define("INV_INSTR_BILLING_NAME_CR", "Navn p� person og/eller firma som blir kredittert.");
define("INV_BILLING_ADDRESS_CR", "Mottakers adresse");
define("INV_INVOICE_ITEMS_CR", "Kredittnota-linjer");
define("INV_INSTR_INVOICE_PAID_IN_FULL_CR", "<strong>ADVARSEL!</strong> Denne innstillingen overstyrer den normale prosessen med � lage et 'utgifts' element. Dette er OK om du ikke har tenkt � bruke utgiftsfunksjonen, men det anbefales at du merker kreditnotaer som betales ved � klikke p� den r�de 'X' i kredittlisten, fremfor � sette verdien her.");
define("INV_INSTR_VENDOR_NAME_CR", "Skriv inn navnet som du �nsker skal vises p� dine kredittnotaer");
define("INV_INSTR_VENDOR_ADDRESS_CR", "Skriv inn adressen som du �nsker skal vises p� dine kredittnotaer");
define("INV_EMAIL_INVOICE_SUBJECT_CR", "Kredittnota %s fra %s");
define("INV_EMAIL_INVOICE_INTRO_CR", "Hei %s,\n\nDen medf�lgende kredittnotaen har blitt generert for deg:");
define("INV_EMAIL_INVOICE_FOOTER_CR", "Du kan se alle dine fakturaer/kredittnotaer ved � logge inn p� %s. Hvis du ikke lenger �nsker � motta varsel p� e-post kan du bare logge inn og klikke p� `Min profil` i `Min konto`, hvor du angir dine valg.\n\nHilsen,\n %s");
define("INV_EMAIL_INVOICE_ALT_TEXT_CR", "Du ser denne meldingen fordi din e-postklient st�tter ikke HTML-meldinger (eller om du viser det fra s�ppelpostmappen kan HTML bli stoppet). For � se din kredittnota m� du enten se denne e-posten i HTML-format, eller logg inn p� %s for � se din kredittnota p� nett.");
define("INV_EMAIL_INVOICE_NOTIFICATION_CR", "Hei %s,\n\nDenne e-posten er for � informere deg om at en ny kredittnota er generert for deg.\n\n");
define("INV_EMAIL_INVOICE_FOOTER_USERNAME_CR", "Du kan se alle dine fakturaer/kredittnotater p� nett ved � logge inn p� %s (ditt brukernavn er %s). Hvis du ikke lenger �nsker � motta varsel p� e-post kan du bare logge inn og klikke p� `Min profil` i `Min konto`, hvor du angir dine valg.\n\nHilsen,\n %s");
define("INV_SEND_EMAIL_INTRO_CR", "Vennligst velg en e-posttype som skal sendes (HTML eller ren tekst). Du kan ogs� overstyre e-postadressen, kontaktnavnet og melding ved � spesifiserer dine egne verdier her. Om du lar disse v�re tomme vil " . INV_BRANDING_NAME . " fors�ke � fylle inn detaljene ved � bruke kundeoppf�ringen assosiert med denne kredittnota (dersom anvendelig), sammen med standard meldingstekst.");
define("INV_EMAIL_SENT_FAILURE_CR", "En eller flere feil oppsto under fors�k p� sending av e-post. Vennligst OPPDATER KREDITTNOTALISTEN, og sjekk deretter e-poststatusen.");
define("INV_EMAIL_INVOICE_INTRO_ATTACH_CR", "Hei %s,\n\nDen vedlagte kredittnotaen har blitt generert for deg.\n\n");
define("INV_EMAIL_ATTACH_CR", "Legg ved HTML-kredittnota?");

//Version 1.2.6
define("INV_INVOICE_RECORD_LIMIT_WARNING_CR", "ADVARSEL! Siden det er %s eller flere kunder i databasen har bare de f�rste %s blitt lastet inn i listen ovenfor. Hvis kunden du leter etter ikke er med her kan du bruke 'Opprett ny kredittnota'-ikonet i kundelisten (den aktuelle posten vil da bli valgt her automatisk).");
?>
