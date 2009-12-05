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

define("NBILL_CREDITS_TITLE", "Kreditnotaer");
define("NBILL_CREDITS_INTRO", "Når du har sendt en tilbakebetaling bør du også lage en medfølgende kreditnota med informasjon om hva tilbakebetalingen gjelder, inkludert merverdiavgift hvis aktuelt.");
define("NBILL_INVOICE_NUMBER_CR", "Kreditnotanummer");
define("NBILL_BILLING_NAME_CR", "Mottaker");
define("NBILL_INVOICE_DATE_CR", "Krediteringsdato");
define("NBILL_FIRST_ITEM_CR", "Første produktlinje på kreditnota");
define("NBILL_EDIT_INVOICE_CR", "Rediger kreditnota");
define("NBILL_EMAIL_NOW_CR", "Send denne kreditnotaen til en kunde via e-post nå");
define("NBILL_BILLING_NAME_REQUIRED_CR", "Vennligst fyll inn mottakers navn");
define("NBILL_BILLING_ADDRESS_REQUIRED_CR", "Vennligst fyll inn mottakers adresse");
define("NBILL_NEW_INVOICE_CR", "Ny kreditnota");
define("NBILL_INVOICE_DETAILS_CR", "kreditnotadetaljer");
define("NBILL_INSTR_INVOICE_NUMBER_CR", "<strong>Husk:</strong> La feltet være tomt om du legger til en ny kreditnota, komponenten vil automatisk bruke det neste ledige kreditnotaenummeret.");
define("NBILL_INSTR_BILLING_NAME_CR", "Navn på person og/eller firma som blir kreditert.");
define("NBILL_BILLING_ADDRESS_CR", "Mottakers adresse");
define("NBILL_INVOICE_ITEMS_CR", "Kreditnota-linjer");
define("NBILL_INSTR_INVOICE_PAID_IN_FULL_CR", "<strong>ADVARSEL!</strong> Denne innstillingen overstyrer den normale prosessen med å lage et 'utgifts' element. Dette er OK om du ikke har tenkt å bruke utgiftsfunksjonen, men det anbefales at du merker kreditnotaer som betales ved å klikke på den røde 'X' i kredittlisten, fremfor å sette verdien her.");
define("NBILL_INSTR_VENDOR_NAME_CR", "Skriv inn navnet som du ønsker skal vises på dine kreditnotaer");
define("NBILL_INSTR_VENDOR_ADDRESS_CR", "Skriv inn adressen som du ønsker skal vises på dine kreditnotaer");
define("NBILL_EMAIL_INVOICE_SUBJECT_CR", "Kreditnota %s fra %s");
define("NBILL_EMAIL_INVOICE_INTRO_CR", "Hei %s,\n\nDen medfølgende kreditnotaen har blitt generert for deg:");
define("NBILL_EMAIL_INVOICE_FOOTER_CR", "Du kan se alle dine fakturaer/kreditnotaer ved å logge inn på %s. Hvis du ikke lenger ønsker å motta varsel på e-post, kan du bare logge inn og klikke på `Min profil` i `Min konto`, hvor du angir dine valg.\n\nHilsen,\n %s");
define("NBILL_EMAIL_INVOICE_ALT_TEXT_CR", "Du ser denne meldingen fordi din e-postklient ikke støtter HTML-meldinger (viser du meldingen fra søppelpostmappen kan HTML bli stoppet). For å se din kreditnota må du enten se denne e-posten i HTML-format, eller logge inn på %s for å se din kreditnota på nett.");
define("NBILL_EMAIL_INVOICE_NOTIFICATION_CR", "Hei %s,\n\nDenne e-posten er for å informere deg om at en ny kreditnota er generert for deg.\n\n");
define("NBILL_EMAIL_INVOICE_FOOTER_USERNAME_CR", "Du kan se alle dine fakturaer/kreditnotater på nett ved å logge inn på %s (ditt brukernavn er %s). Hvis du ikke lenger ønsker å motta varsel på e-post, kan du logge inn og klikke på `Min profil` i `Min konto`, hvor du angir dine valg.\n\nHilsen,\n %s");
define("NBILL_SEND_EMAIL_INTRO_CR", "Vennligst velg en e-posttype som skal sendes (HTML eller ren tekst). Du kan også overstyre e-postadressen, kontaktnavnet og melding ved å spesifisere dine egne verdier her. Om du lar disse være tomme, vil " . NBILL_BRANDING_NAME . " forsøke å fylle inn detaljene ved å bruke kundeoppføringen assosiert med denne kreditnotaen (dersom anvendelig), sammen med standard meldingstekst.");
define("NBILL_EMAIL_SENT_FAILURE_CR", "En eller flere feil oppstod under forsøk på sending av e-post. Vennligst OPPDATER KREDITNOTALISTEN, og sjekk deretter e-poststatusen.");
define("NBILL_EMAIL_INVOICE_INTRO_ATTACH_CR", "Hei %s,\n\nDen vedlagte kreditnotaen har blitt generert for deg.\n\n");
define("NBILL_EMAIL_ATTACH_CR", "Legg ved HTML-kreditnota?");

//Version 1.2.6
define("NBILL_INVOICE_RECORD_LIMIT_WARNING_CR", "ADVARSEL! Siden det er %s eller flere kunder i databasen, har bare de første %s blitt lastet inn i listen ovenfor. Hvis kunden du leter etter ikke er med her, kan du bruke 'Opprett ny kreditnota'-ikonet i kundelisten (den aktuelle posten vil da bli valgt her automatisk).");
?>
