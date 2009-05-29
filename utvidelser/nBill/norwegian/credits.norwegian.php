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

define("INV_CREDITS_TITLE", "Kreditnotaer (Refusjoner)");
define("INV_CREDITS_INTRO", "Når du har sendt en tilbakebetaling, bør du også lage et medfølgende kredittnotat med informasjon om hva tilbakebetalingen gjelder, inkludert skatt, hvis aktuelt.");
define("INV_INVOICE_NUMBER_CR", "Kredittnote nummer");
define("INV_BILLING_NAME_CR", "Utbetalingsmottaker");
define("INV_INVOICE_DATE_CR", "Kredittdato");
define("INV_FIRST_ITEM_CR", "Første element på kredittnote");
define("INV_EDIT_INVOICE_CR", "Rediger kredittnote");
define("INV_EMAIL_NOW_CR", "Send denne kredittnoten til en klient via e-post nå");
define("INV_BILLING_NAME_REQUIRED_CR", "Vennligst skriv utbetalingsmottakers navn");
define("INV_BILLING_ADDRESS_REQUIRED_CR", "Please enter the payee address");
define("INV_NEW_INVOICE_CR", "Ny kredittnote");
define("INV_INVOICE_DETAILS_CR", "Kredittnote detaljer");
define("INV_INSTR_INVOICE_NUMBER_CR", "<strong>Husk:</strong> La feltet være blant om du legger til et nytt kredittnotat - komponenten vil automatisk legge til det neste tilgjengelige kredittnote nummer.");
define("INV_INSTR_BILLING_NAME_CR", "Navnet på denne personen og/eller firmaet blir refundert.");
define("INV_BILLING_ADDRESS_CR", "Utbetalingsmottakers adresse");
define("INV_INVOICE_ITEMS_CR", "Kredittnote elementer");
define("INV_INSTR_INVOICE_PAID_IN_FULL_CR", "<strong>ADVARSEL!</strong> Denne innstillingen overstyrer den normale prosessen med å lage et 'utgifts' element. Dette er OK hvis du ikke har tenkt å bruke utgifts funksjonen, men det anbefales at du merker kreditnotaer som betales ved å klikke på den røde 'X' på kredittnotatlisten, snarere enn å sette verdien her.");
define("INV_INSTR_VENDOR_NAME_CR", "Skriv inn navnet du ønsker at skal vises på dine kredittnoter");
define("INV_INSTR_VENDOR_ADDRESS_CR", "Skriv inn adressen du ønsker at skal vises på dine kredittnoter");
define("INV_EMAIL_INVOICE_SUBJECT_CR", "Kredittnote %s fra %s");
define("INV_EMAIL_INVOICE_INTRO_CR", "Kjære %s,\n\nDen følgende kredittnoten har blitt generert for deg:");
define("INV_EMAIL_INVOICE_FOOTER_CR", "Du kan se alle dine fakturaer/kreditnotaer ved å logge inn på %s. Hvis du ikke lenger ønsker å motta varsel på e-post, kan du bare logge inn og klikke på «Min profil` i `Min konto` området å angi dine preferanser.\n\nHilsen,\n %s");
define("INV_EMAIL_INVOICE_ALT_TEXT_CR", "Du ser denne meldingen fordi din e-post klient støtter ikke HTML-meldinger (eller om du viser det fra søppelpost mappen, HTML kan da bli suspandert. For å se ditt kredittnotat, vennligst se denne e-posten i HTML format eller logg inn på %s for å se dine kredittnotater på nett.");
define("INV_EMAIL_INVOICE_NOTIFICATION_CR", "Kjere %s,\n\nDenne e-posten skal informere deg om at et nytt kredittnotat er generert for deg.\n\n");
define("INV_EMAIL_INVOICE_FOOTER_USERNAME_CR", "Du kan se alle dine fakturaer/kredittnotater på nett ved å logge inn på %s (ditt brukernavn er %s). Hvis du ikke lenger ønsker å motta varsel på e-post, kan du bare logge inn og klikke på «Min profil` i `Min konto` området å angi dine preferanser.\n\nHilsen,\n %s");
define("INV_SEND_EMAIL_INTRO_CR", "Vennligst velg en e-post type for å sende (HTML eller ren tekst). Du kan også overveie denne e-post adressen, kontakt navn, og dersom du spesifiserer dine egne verdier her. Dersom dette feltet er blankt, " . INV_BRANDING_NAME . " vil det bli fyllt inn detaljer ved å bruke klient post assosiert med dette kredittnotat (dersom akseptert), og standard meldingstekst.");
define("INV_EMAIL_SENT_FAILURE_CR", "En eller flere feil oppsto under sending til e-posten. Vennligst OPPDATER KREDITTNOTAT LISTEN og sjekk e-post statusen.");
define("INV_EMAIL_INVOICE_INTRO_ATTACH_CR", "Kjære %s,\n\nDet vedlagte kredittnotat har blitt generert for deg.\n\n");
define("INV_EMAIL_ATTACH_CR", "Legg ved HTML kredittnote?");

//Version 1.2.6
define("INV_INVOICE_RECORD_LIMIT_WARNING_CR", "ADVARSEL! Siden det er %s eller flere kunder i databasen, bare de første %s har blitt lastet inn i listen ovenfor. Hvis klienten du trenger er ikke her, kan du bruke 'Opprett ny kredittnote'-ikonet på klientlisten (den aktuelle posten vil da bli valgt her automatisk).");
?>
