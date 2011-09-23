<?php
/**
* Language file for Credit Notes
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

define("NBILL_ORDER_FORMS_TITLE_QUOTE", "Forespørselsskjemaer");
define("NBILL_ORDER_FORMS_INTRO_QUOTE", "Forespørselsskjemaer tillater brukerne og forespørre om tilbud, via brukersiden din. Du kan bruke de feltene du vil på et forespørselsskjemaer, for å samle informasjonen du trenger for å gi en nøyaktig pris. Når et forespørselsskjema sendes inn opprettes en ny tilbudspost. Når du manuelt har lagt til prisen til forespørselen, vil det være tilgjengelig for brukeren til enten å godta eller avvise tilbudet. Hvis de godtar det, vil tilbudsdetaljene bli brukt til å generere en ny bestilling.");
define("NBILL_EDIT_ORDER_FORM_QUOTE", "Rediger forespørselsskjema");
define("NBILL_NEW_ORDER_FORM_QUOTE", "Nytt forespørselsskjema");
define("NBILL_ORDER_FORM_THANK_YOU_REDIRECT_QUOTE", "Forespørsel komplett omadressere");
define("NBILL_INSTR_ORDER_FORM_THANK_YOU_REDIRECT_QUOTE", "Hvis du ønsker å omadressere brukeren til en annen side når et av forespørselsskjemaene er sendt inn i stedet for å vise takkemeldingen definert nedenfor, kan du skrive inn en nettadresse her.");
define("NBILL_INSTR_ORDER_FORM_THANK_YOU_QUOTE", "Hvis brukeren ikke blir omadressert andre steder av viderekoblingsinnstillingen ovenfor, er dette meldingen som vil bli vist ved vellykkede innlevering av forespørselsskjemaer.");
define("NBILL_FORM_DEFAULT_THANK_YOU_QUOTE", "Takk for at du har sendt inn skjema for å få ett tilbud. Dine detaljer har blitt sendt, og vi vil kontakte deg så snart som mulig.");
define("NBILL_INSTR_FORM_EMAIL_CLIENT_QUOTE", "Hvorvidt å sende kunden en bekreftelse på e-post når tilbudsforespørselen er sendt.");
define("NBILL_INSTR_FORM_EMAIL_ADMIN_QUOTE", "Om du vil sende administrator en bekreftelse på e-post når forespørselskjemaet er sendt (ANBEFALES!).");
define("NBILL_INSTR_FORM_AUTO_CREATE_USER_QUOTE", "Om du automatisk vil prøve å opprette en ny bruker når enden nye kontakten sender inn en forespørsel.");
define("NBILL_INSTR_FORM_PREREQ_PRODUCTS_QUOTE", "Hvis brukeren allerede må ha et bestemt produkt før de kan bruke dette forespørselskjemaet, angi nødvendig produkt (er) her. Hvis mer enn ett produkt er valgt, vil brukeren kunne få tilgang til dette forespørselskjemaet hvis de allerede har noen av de angitte produktene.");
define("NBILL_INSTR_FORM_DISQUAL_PRODUCTS_QUOTE", "Hvis brukeren allerede må ha et bestemt produkt før de kan bruke dette forespørselskjemaet, angi nødvendig produkt (er) her. Hvis mer enn ett produkt er valgt, vil brukeren kunne få tilgang til dette forespørselskjemaet hvis de allerede har ET av de angitte produktene. ");
define("NBILL_INSTR_PAYMENT_PLAN_QUOTE", "Betalingsplan å angi til nye tilbudsforespørsler.");
define("NBILL_FORM_PENDING_UNTIL_PAID_QUOTE", "Må betale for å godta?");
define("NBILL_INSTR_FORM_PENDING_UNTIL_PAID_QUOTE", "Hvorvidt kunden må gjennom en betalingsprosess før de får lov til å akseptere tilbudet som er opprettet basert på innlevering av dette forespørselskjemaet. Dette kan manuelt justeres av administratoren, før tilbudet sluttføres.");
define("NBILL_FORM_AUTO_CREATE_ORDERS_QUOTE", "Lag bestilling automatisk når godtatt?");
define("NBILL_INSTR_FORM_AUTO_CREATE_ORDERS_QUOTE", "Om du automatisk vil opprette bestilling(er) for hvert element på forespørselen som er akseptert av kunden (for forespørsel som er opprettet basert på innsending av dette skjemaet). Dette kan manuelt justeres av administratoren, før tilbudet sluttføres.");
define("NBILL_FORM_AUTO_CREATE_INVOICE_QUOTE", "Lag faktura(er) automatisk når godtatt?");
define("NBILL_INSTR_FORM_AUTO_CREATE_INVOICE_QUOTE", "Om du automatisk vil opprette faktura for hvert element på forespørselen som er akseptert av kunden (for forespørsel som er opprettet basert på innsending av dette skjemaet). Dette kan manuelt justeres av administratoren, før tilbudet sluttføres.");
define("NBILL_FORM_AUTO_CREATE_INCOME_QUOTE", "Lag inntekt(er) automatisk når godtatt?");
define("NBILL_INSTR_FORM_AUTO_CREATE_INCOME_QUOTE", "Om du automatisk vil opprette inntekt(er) for hvert element på forespørselen som er betalt og akseptert av kunden (for forespørsel som er opprettet basert på innsending av dette skjemaet). Dette kan manuelt justeres av administratoren, før tilbudet sluttføres.");
define("NBILL_FORM_QUOTE_ALLOW_OFFLINE", "Tillat betaling utenom nettet?");
define("NBILL_INSTR_FORM_QUOTE_ALLOW_OFFLINE", "Om brukeren kan velge å ikke betale via betalingsløsningen (f. eks med en faktura). Dersom ’Må betale for å godta’ er satt til ’ja’, og betalingen er gjort med faktura, må administratoren manuelt endre status på tilbudet til ’Akseptert’ når betalingen er mottatt, slik at bestilling og faktura genereres.");
