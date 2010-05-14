<?php
/**
* Language file for Pending Orders
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

//Pending Orders
define("NBILL_PENDING", "Venter");
define("NBILL_ACTIVATE_PENDING_ORDER", "Aktiver ventende");
define("NBILL_ACTIVATE_ARE_YOU_SURE", "ADVARSEL! Dette vil opprette en ny ordre og den ventende ordren vil bli slettet. Hvis relatert bestillingsskjema er satt til automatisk oppretting av bruker og/eller faktura, vil disse også bli generert. Er du sikker på at du vil fortsette?");
define("NBILL_SELECT_PENDING_ORDER", "Vennligst gjør et valg fra listen for å aktivere");
define("NBILL_PENDING_ORDER", "Ventende ordre(r)");
define("NBILL_PENDING_TITLE", "Ventende ordre(r)");
define("NBILL_PENDING_INTRO", "Dette er bestillinger som ble mottatt via nettsiden men der betalingen ennå ikke er bekreftet. Bestillinger vil kun være ventende hvis bestillingsskjemaet er satt til å vente på bekreftet betaling. Hvis den installerte betalingskanalen oppdager betaling for en ventende ordre vil ordren automatisk bli opprettet. Hvis betalingen er gjort på annen måte, eller hvis du vil aktivere en bestilling uten å ha mottatt betaling, kan du gjøre det ved hjelp av aktivere verktøylinjeknappen.");
define("NBILL_PENDING_ORDER_ID", "Ordre ID");
define("NBILL_PENDING_ORDER_FORM", "Ordreskjema");
define("NBILL_PENDING_ORDER_DATE", "Dato");
define("NBILL_PENDING_ORDER_VALUE", "Total ordreverdi");
define("NBILL_SHOW_PENDING_ORDER", "Vis detaljer for ventende ordre");
define("NBILL_PENDING_ORDER_DETAILS", "Ventende ordredetaljer");
define("NBILL_QUANTITY", "Antall");
define("NBILL_OTHER_DATA", "Andre data");
define("NBILL_ORDERS_ACTIVATED", "Valgte ordre ble aktivert");
@define("NBILL_USERNAME", "Brukernavn");
@define("NBILL_PAY_FREQUENCY", "Betalingsfrekvens");

//Version 1.2.0
define("NBILL_PENDING_RESUME_LINK", "Hvis du har aktivert innbetaling av bestillinger uten å være logget inn kan følgende lenke brukes til å gjenoppta den pågående bestillingen (dvs. å gjøre betaling).");