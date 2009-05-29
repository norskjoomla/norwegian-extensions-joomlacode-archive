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
define("INV_CREDITS_INTRO", "N�r du har sendt en tilbakebetaling, b�r du ogs� lage et medf�lgende kredittnotat med informasjon om hva tilbakebetalingen gjelder, inkludert skatt, hvis aktuelt.");
define("INV_INVOICE_NUMBER_CR", "Kredittnote nummer");
define("INV_BILLING_NAME_CR", "Utbetalingsmottaker");
define("INV_INVOICE_DATE_CR", "Kredittdato");
define("INV_FIRST_ITEM_CR", "F�rste element p� kredittnote");
define("INV_EDIT_INVOICE_CR", "Rediger kredittnote");
define("INV_EMAIL_NOW_CR", "Send denne kredittnoten til en klient via e-post n�");
define("INV_BILLING_NAME_REQUIRED_CR", "Vennligst skriv utbetalingsmottakers navn");
define("INV_BILLING_ADDRESS_REQUIRED_CR", "Please enter the payee address");
define("INV_NEW_INVOICE_CR", "Ny kredittnote");
define("INV_INVOICE_DETAILS_CR", "Kredittnote detaljer");
define("INV_INSTR_INVOICE_NUMBER_CR", "<strong>Husk:</strong> La feltet v�re blant om du legger til et nytt kredittnotat - komponenten vil automatisk legge til det neste tilgjengelige kredittnote nummer.");
define("INV_INSTR_BILLING_NAME_CR", "Navnet p� denne personen og/eller firmaet blir refundert.");
define("INV_BILLING_ADDRESS_CR", "Utbetalingsmottakers adresse");
define("INV_INVOICE_ITEMS_CR", "Kredittnote elementer");
define("INV_INSTR_INVOICE_PAID_IN_FULL_CR", "<strong>ADVARSEL!</strong> Denne innstillingen overstyrer den normale prosessen med � lage et 'utgifts' element. Dette er OK hvis du ikke har tenkt � bruke utgifts funksjonen, men det anbefales at du merker kreditnotaer som betales ved � klikke p� den r�de 'X' p� kredittnotatlisten, snarere enn � sette verdien her.");
define("INV_INSTR_VENDOR_NAME_CR", "Skriv inn navnet du �nsker at skal vises p� dine kredittnoter");
define("INV_INSTR_VENDOR_ADDRESS_CR", "Skriv inn adressen du �nsker at skal vises p� dine kredittnoter");
define("INV_EMAIL_INVOICE_SUBJECT_CR", "Kredittnote %s fra %s");
define("INV_EMAIL_INVOICE_INTRO_CR", "Kj�re %s,\n\nDen f�lgende kredittnoten har blitt generert for deg:");
define("INV_EMAIL_INVOICE_FOOTER_CR", "Du kan se alle dine fakturaer/kreditnotaer ved � logge inn p� %s. Hvis du ikke lenger �nsker � motta varsel p� e-post, kan du bare logge inn og klikke p� �Min profil` i `Min konto` omr�det � angi dine preferanser.\n\nHilsen,\n %s");
define("INV_EMAIL_INVOICE_ALT_TEXT_CR", "Du ser denne meldingen fordi din e-post klient st�tter ikke HTML-meldinger (eller om du viser det fra s�ppelpost mappen, HTML kan da bli suspandert. For � se ditt kredittnotat, vennligst se denne e-posten i HTML format eller logg inn p� %s for � se dine kredittnotater p� nett.");
define("INV_EMAIL_INVOICE_NOTIFICATION_CR", "Kjere %s,\n\nDenne e-posten skal informere deg om at et nytt kredittnotat er generert for deg.\n\n");
define("INV_EMAIL_INVOICE_FOOTER_USERNAME_CR", "Du kan se alle dine fakturaer/kredittnotater p� nett ved � logge inn p� %s (ditt brukernavn er %s). Hvis du ikke lenger �nsker � motta varsel p� e-post, kan du bare logge inn og klikke p� �Min profil` i `Min konto` omr�det � angi dine preferanser.\n\nHilsen,\n %s");
define("INV_SEND_EMAIL_INTRO_CR", "Vennligst velg en e-post type for � sende (HTML eller ren tekst). Du kan ogs� overveie denne e-post adressen, kontakt navn, og dersom du spesifiserer dine egne verdier her. Dersom dette feltet er blankt, " . INV_BRANDING_NAME . " vil det bli fyllt inn detaljer ved � bruke klient post assosiert med dette kredittnotat (dersom akseptert), og standard meldingstekst.");
define("INV_EMAIL_SENT_FAILURE_CR", "En eller flere feil oppsto under sending til e-posten. Vennligst OPPDATER KREDITTNOTAT LISTEN og sjekk e-post statusen.");
define("INV_EMAIL_INVOICE_INTRO_ATTACH_CR", "Kj�re %s,\n\nDet vedlagte kredittnotat har blitt generert for deg.\n\n");
define("INV_EMAIL_ATTACH_CR", "Legg ved HTML kredittnote?");

//Version 1.2.6
define("INV_INVOICE_RECORD_LIMIT_WARNING_CR", "ADVARSEL! Siden det er %s eller flere kunder i databasen, bare de f�rste %s har blitt lastet inn i listen ovenfor. Hvis klienten du trenger er ikke her, kan du bruke 'Opprett ny kredittnote'-ikonet p� klientlisten (den aktuelle posten vil da bli valgt her automatisk).");
?>
