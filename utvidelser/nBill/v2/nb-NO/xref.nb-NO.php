<?php
/**
* Language file for Cross Reference output in option lists on order forms
* @version 2
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

//Reminder Types
define("NBILL_REMINDER_PAYMENT_DUE", "Forfalt betaling");
define("NBILL_REMINDER_ORDER_EXPIRY", "Utløpt bestilling");
define("NBILL_REMINDER_RENEWAL_DUE", "Fornyelse Forfalt");
define("NBILL_REMINDER_INVOICE_OVERDUE", "Forfalte fakturaer");
define("NBILL_REMINDER_USER_DEFINED", "Bruker definerte");

//Default Start Date
define("NBILL_CFG_LIST_START_DATE", "Standard startdato for lister");
define("NBILL_CFG_INSTR_LIST_START_DATE", "Angi hvordan du vil at systemet skal velge startdato for lister som styres av en datoperiode (f. eks ordre, fakturaer) når ingen dato er valgt. ADVARSEL! Hvis du velger å vise et stort antall poster (f. eks 5 år, eller alle), kan dette forsinke visningen av listene.");
define("NBILL_CFG_START_DATE_CURRENT_ONLY", "Vis bare gjeldende måned");
define("NBILL_CFG_START_DATE_CURRENT_LAST", "Vis nåværende og forrige måned");
define("NBILL_CFG_START_DATE_QUARTER", "Vis inntil 3 måneder");
define("NBILL_CFG_START_DATE_SEMI", "Vis inntil 6 måneder");
define("NBILL_CFG_START_DATE_YEAR", "Vis opp til ett år");
define("NBILL_CFG_START_DATE_FIVE", "Vis opp til 5 år");
define("NBILL_CFG_START_DATE_ALL", "Vis alt");

//Email invoice options
define("NBILL_NO_EMAIL", "Ikke send faktura på e-post");
define("NBILL_EMAIL_INVOICE", "Legge ved faktura i en HTML e-post");
define("NBILL_EMAIL_NOTIFICATION", "Send e-post (som ren tekst og gi beskjed om å logge inn på nettsiden)");
define("NBILL_EMAIL_INVOICE_ATTACH", "Send fakturaen som et vedlegg i en e-post(ren tekst)");
define("NBILL_EMAIL_INVOICE_PDF", "Send faktura som PDF vedlegg i en e-post(ren tekst)");
define("NBILL_EMAIL_TEMPLATE", "Send e-post som HTML (ingen vedlegg)");
define("NBILL_EMAIL_TEMPLATE_ATTACH", "Send e-post som HTML med HTML-vedlegg");
define("NBILL_EMAIL_TEMPLATE_PDF", "Send e-post som HTML med PDF-vedlegg");

//Order status
define("NBILL_STATUS_PENDING", "Under gjennomgang");
define("NBILL_STATUS_PROCESSING", "Behandles");
define("NBILL_STATUS_DISPATCHED", "Sendt ut");
define("NBILL_STATUS_COMPLETED", "Fullført");
define("NBILL_STATUS_CANCELLED", "Annullert");

//Quote status
define("NBILL_STATUS_QUOTE_NEW", "Ny");
define("NBILL_STATUS_QUOTE_QUOTED", "Gitt tilbud");
define("NBILL_STATUS_QUOTE_ON_HOLD", "På vent");
define("NBILL_STATUS_QUOTE_ACCEPTED", "Akseptert");
define("NBILL_STATUS_QUOTE_REJECTED", "Avvist");
define("NBILL_STATUS_QUOTE_PART_ACCEPTED", "Delvis akseptert");

//Payment Frequency
define("NBILL_ONE_OFF", "Engangs");
define("NBILL_WEEKLY", "Ukentlig");
define("NBILL_FOUR_WEEKLY", "Hver 4. uke");
define("NBILL_MONTHLY", "Månedlig");
define("NBILL_QUARTERLY", "Kvartalsvis");
define("NBILL_SEMI_ANNUALLY", "Halvårlig");
define("NBILL_ANNUALLY", "Årlig");
define("NBILL_BIANNUALLY", "Hvert 2. år");
define("NBILL_FIVE_YEARLY", "Hvert 5. år");
define("NBILL_TEN_YEARLY", "Hvert 10. år");

//Plan Type
define("NBILL_UP_FRONT", "Forhåndsbetaling");
define("NBILL_INSTALLMENTS", "Avdrag");
define("NBILL_DEPOSIT_AND_FINAL", "Depositum pluss endelig betaling");
define("NBILL_DEPOSIT_AND_INSTALLMENTS", "Depositum pluss avdrag");
define("NBILL_DEFERRED_AND_FINAL", "Utsatt betaling");
define("NBILL_DEFERRED_AND_INSTALLMENTS", "Utsatt avdrag");
define("NBILL_USER_CONTROLLED", "Bruker kontrollert");

//Payment method
define("NBILL_CASH", "Kontant");
define("NBILL_CHEQUE", "Sjekk");
define("NBILL_CREDIT_CARD", "Kreditt-/Debetkort");
define("NBILL_DIRECT_DEBIT", "Direktetrekk");
define("NBILL_BANK_TRANSFER", "Bankoverføring");
define("NBILL_STANDING_ORDER", "Ventende ordre");
define("NBILL_ONLINE_AGENCY", "Online");
define("NBILL_OTHER", "Annet");

//Field types
define("NBILL_FLD_TEXTBOX", "Tekstboks");
define("NBILL_FLD_DROPDOWN", "Nedtrekkliste");
define("NBILL_FLD_EMAIL", "E-postadresse");
define("NBILL_FLD_RADIOLIST", "Valgliste");
define("NBILL_FLD_CHECKBOX", "Avkryssing");
define("NBILL_FLD_TEXTAREA", "Tekstfelt");
define("NBILL_FLD_DATE", "Dato");
define("NBILL_FLD_NUMERIC", "Numerisk");
define("NBILL_FLD_HIDDEN", "Skjult");
define("NBILL_FLD_LABEL", "Etikett");
define("NBILL_FLD_JAVASCRIPT_BUTTON", "JavaScript-knapp");
define("NBILL_FLD_SUBMIT_BUTTON", "Fullfør-knapp");
define("NBILL_FLD_DOMAIN_LOOKUP", "Domene oppslag");
define("NBILL_FLD_FILE_UPLOAD", "Filopplasting");
define("NBILL_FLD_PASSWORD", "Passord");
define("NBILL_FLD_CAPTCHA", "Sikkerhetsbilde (CAPTCHA)");
define("NBILL_FLD_LOGIN", "Innlogging");
define("NBILL_FLD_SUMMARY", "Oppsummeringstabell");