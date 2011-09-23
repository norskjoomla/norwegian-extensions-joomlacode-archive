<?php
/**
* Language file for text that appears in E-Mails.
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

//General
define("NBILL_EM_GREETING", "Kjære %s,");
define("NBILL_EM_REGARDS", "Hilsen,");
define("NBILL_CLIENT_GENERIC", "Kunde");
define("NBILL_EM_EXISTING_CLIENT", "%s (Eksisterende kunde)");

//Invoices
define("NBILL_EM_INVOICE_SUBJECT", "Faktura %s fra %s");
define("NBILL_EMAIL_INVOICE_INTRO", "Send faktura på e-post til kunden");
define("NBILL_EM_NEW_INVOICE", "Ny faktura");
define("NBILL_EM_EMBEDDED_INVOICE_INTRO", "Følgende fakturaen er generert for deg:");
define("NBILL_EM_NEW_INVOICE_PAR_1", "Denne e-posten er for å informere deg om at en ny faktura er generert for deg.");
define("NBILL_EM_NEW_INVOICE_PAR_1_ATTACHED", "Den vedlagte fakturaen er generert for deg.");
define("NBILL_EM_NEW_INVOICE_PAR_2", "Du kan se alle dine fakturaer online ved å logge inn på %s. Hvis du ikke lenger ønsker å motta fakturaer via e-post, logge deg inn og klikk på `Min profil` i `Min konto` for å angi dine preferanser.");
define("NBILL_EM_NEW_INVOICE_PAR_2_USERNAME", "Du kan se alle dine fakturaer online ved å logge inn på %s (ditt brukernavn er %s). Hvis du ikke lenger ønsker å motta fakturaer via e-post, logge deg inn og klikk på `Min profil` i `Min konto` for å angi dine preferanser.");

//Credit notes
define("NBILL_EM_CREDIT_SUBJECT", "Kreditnota %s fra %s");
define("NBILL_EMAIL_CREDIT_INTRO", "Send kreditnota på e-post til kunden");
define("NBILL_EM_NEW_CREDIT", "Ny kreditnota");
define("NBILL_EM_EMBEDDED_CREDIT_INTRO", "Følgende kreditnota er generert for deg:");
define("NBILL_EM_NEW_CREDIT_PAR_1", "Denne e-posten er for å informere deg om at en ny kreditnota er generert for deg.");
define("NBILL_EM_NEW_CREDIT_PAR_1_ATTACHED", "Den vedlagte kreditnota er generert for deg.");
define("NBILL_EM_NEW_CREDIT_PAR_2", "Du kan se alle dine kreditnotaer online ved å logge inn på %s.");
define("NBILL_EM_NEW_CREDIT_PAR_2_USERNAME", "Du kan se alle dine kreditnotaer online ved å logge inn på %s (ditt brukernavn er %s).");

//Quotes
define("NBILL_EM_QUOTE_SUBJECT", "Forespørsel %s fra %s");
define("NBILL_EM_QUOTE_ON_HOLD_SUBJECT", "Din forespørsel %s - Anmodning om ytterligere informasjon fra %s");
define("NBILL_EMAIL_QUOTE_INTRO", "Send forespørsel på e-post til kunden.");
define("NBILL_EM_NEW_QUOTE", "Ny forespørsel");
define("NBILL_EM_EMBEDDED_QUOTE_INTRO", "Følgende tilbud er generert for deg:");
define("NBILL_EM_NEW_QUOTE_PAR_1", "Takk for at du ber om et tilbud.  Hvis du vil se dine forespørsler online og godta, delvis godta eller avvise det, kan du gå til: %s.");
define("NBILL_EM_NEW_QUOTE_PAR_1_ATTACHED", "Takk for din forespørsel. Vedlagt er vårt tilbud i samsvar med din forespørsel. Hvis du vil se dette tilbudet på nettet og eventuelt godta, delvis godta eller avvise det, kan du gå til: %s.");
define("NBILL_EM_NEW_QUOTE_PAR_2", "Du kan se alle dine forespørsler online ved å logge inn på %s.");
define("NBILL_EM_NEW_QUOTE_PAR_2_USERNAME", "Du kan se alle dine forespørsler online ved å logge inn på %s (ditt brukernavn er %s).");
define("NBILL_EM_NEW_QUOTE_PAR_3", "IKKE SVAR DIREKTE PÅ DENNE E-POSTEN - Ønsker du å svare, kan du gå til %s (dette for at svaret skal bli registrert på tilbudsdokumentet).");
define("NBILL_EM_NEW_QUOTE_CORRESPONDENCE_INTRO", "Dette tilbudet er basert på følgende korrespondanse:");
define("NBILL_EM_NEW_QUOTE_REQUEST", "Tilbudsbekreftelse av forespørsel");
define("NBILL_EM_NEW_QUOTE_REQUEST_SUBJECT", "Nye tilbudsforespørsel: %s - %s (%s)");
define("NBILL_EM_NEW_QUOTE_REQUEST_PAR_1", "Denne e-post er for å bekrefte at følgende detaljer har blitt sendt for å be om et tilbud på %s. Vi vil vurdere dine ønsker og kontakte deg med vårt svar så snart som mulig.");
define("NBILL_EM_NEW_QUOTE_REQUEST_ADMIN", "Administrator melding - Prisforespørsel fra bruker %s");

//Pending Orders
define("NBILL_EM_NEW_PENDING", "Ventende bestillingsbekreftelser");
define("NBILL_EM_NEW_PENDING_SUBJECT", "Nye ventende bestillinger: %s - %s (%s)");
define("NBILL_EM_NEW_PENDING_PAR_1", "Denne e-posten er for å bekrefte at denne bestillingen foreløpig er plassert på %s. Denne bestillingen vil ikke bli behandlet før vi har mottatt betaling eller ordren aktiveres manuelt av oss.");
define("NBILL_EM_NEW_PENDING_ADMIN", "Administrator melding - ventende ordre for bruker %s");

//Orders
define("NBILL_EM_NEW_ORDER", "Ordrebekreftelse");
define("NBILL_EM_NEW_ORDER_SUBJECT", "Ny bestilling: %s - %s (%s)");
define("NBILL_EM_NEW_ORDER_PAR_1", "Denne e-posten er for å bekrefte at følgende bestilling er bekreftet på %s.");
define("NBILL_EM_NEW_ORDER_ADMIN", "Administrator melding - Ny bestilling fra bruker %s");

/****************************************************************
* You will probably not need to modify anything below this line *
****************************************************************/

//Admin
define("NBILL_EMAIL_MESSAGE_FROM", "Fra");
define("NBILL_EMAIL_MESSAGE_TO", "Til");
define("NBILL_EMAIL_MESSAGE_CC", "Kopi til");
define("NBILL_EMAIL_MESSAGE_BCC", "Blindkopi til");
define("NBILL_EMAIL_MESSAGE_SUBJECT", "Emne");
define("NBILL_EMAIL_INCLUDE_DOCUMENT", "Inkluder selve dokumentet?");
define("NBILL_EMAIL_MESSAGE_ATTACH", "Legg ved HTML dokument til meldingen");
define("NBILL_EMAIL_MESSAGE_ATTACH_PDF", "Legg ved PDF dokument til meldingen");
define("NBILL_EMAIL_MESSAGE_NO_ATTACH", "Ikke legg ved dokumentet til melding");
define("NBILL_EMAIL_MESSAGE_EMBED", "Legge inn dokumentet i meldingen");
define("NBILL_EMAIL_MESSAGE_USE_TEMPLATE", "Bruk HTML-mal?");
define("NBILL_EMAIL_MESSAGE_TIMESTAMP", "Melding sendt %s");
define("NBILL_QUOTE_SHOW_HISTORY", "Inkluder meldingshistorien?");
define("NBILL_EMAIL_MESSAGE", "Melding:");
define("NBILL_EMAIL_SEND", "Send");
define("NBILL_EMAIL_CANCEL", "Avbryt");

//Results
define("NBILL_EMAIL_QUOTE_DOC_SENT", "Melding lagt til tilbudet og e-posten sendt");
define("NBILL_EMAIL_QUOTE_DOC_NOT_SENT", "ADVARSEL! Meldingen ble lagt til tilbudet, men e-posten ble ikke sendt. Vennligst send e-posten manuelt.");
define("NBILL_EMAIL_NO_RECIPIENT", "Ingen mottaker var oppgitt, så ingen e-post ble sendt.");
define("NBILL_EMAIL_NO_MESSAGE", "Ingen melding ble skrevet inn, så ingen e-post ble sendt");
define("NBILL_EMAIL_DOC_SENT", "Melding sendt");
define("NBILL_EMAIL_DOC_NOT_SENT", "Meldingen kunne ikke sendes.");
define("NBILL_EMAIL_DOC_NOT_SENT_UNKNOWN", "Vennligst sjekk e-post konfigurasjonsinnstillingen, og at alle 'fra' og 'til' e-postadressene er gyldige.");
define("NBILL_EMAIL_SEND_INTERRUPTED", "Tilkoblingen til serveren ble avbrutt mens du forsøker å sende e-post. Vennligst sjekk e-postloggen for å kontrollere om e-posten ble sendt.");