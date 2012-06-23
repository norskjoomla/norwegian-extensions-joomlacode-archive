<?php
/**
* @version 1.1.x
* @package nBill
* @copyright (C) 2006-2007 Netshine Software Limited
* @copyright Translation 2009 Joomla! i Norge
* @license Commercial
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

//Pending Orders
define("INV_PENDING", "Venter");
define("INV_ACTIVATE_PENDING_ORDER", "Aktiv�r venting");
define("INV_ACTIVATE_ARE_YOU_SURE", "ADVARSEL! Dette vil opprette en ny ordre og den ventende ordren vil bli slettet. Hvis relatert bestillingsskjema er satt til automatisk oppretting av bruker og/eller faktura, vil disse ogs� bli generert. Er du sikker p� at du vil fortsette?");
define("INV_SELECT_PENDING_ORDER", "Vennligst gj�r et valg fra listen for � aktivere");
define("INV_PENDING_ORDER", "Ventende ordre(r)");
define("INV_PENDING_TITLE", "Ventende ordre(r)");
define("INV_PENDING_INTRO", "Dette er bestillinger som ble mottatt via nettsiden men der betalingen enn� ikke er bekreftet. Bestillinger vil kun v�re ventende hvis bestillingsskjemaet er satt til � vente p� bekreftet betaling. Hvis den installerte betalingskanalen oppdager betaling for en ventende ordre vil ordren automatisk bli opprettet. Hvis betalingen er gjort p� annen m�te, eller hvis du vil aktivere en bestilling uten � ha mottatt betaling, kan du gj�re det ved hjelp av aktivere verkt�ylinjeknappen.");
define("INV_PENDING_ORDER_ID", "Ordre ID");
define("INV_PENDING_ORDER_FORM", "Ordreskjema");
define("INV_PENDING_ORDER_DATE", "Dato");
define("INV_PENDING_ORDER_VALUE", "Total ordreverdi");
define("INV_SHOW_PENDING_ORDER", "Vis detaljer for ventende ordre");
define("INV_PENDING_ORDER_DETAILS", "Ventende ordredetaljer");
define("INV_QUANTITY", "Antall");
define("INV_OTHER_DATA", "Andre data");
define("INV_ORDERS_ACTIVATED", "Valgte ordre ble aktivert");
@define("INV_USERNAME", "Brukernavn");
@define("INV_PAY_FREQUENCY", "Betalingsfrekvens");

//Version 1.2.0
define("INV_PENDING_RESUME_LINK", "Hvis du har aktivert innbetaling av bestillinger uten � v�re logget inn kan f�lgende lenke brukes til � gjenoppta den p�g�ende bestillingen (dvs. � gj�re betaling).");
?>