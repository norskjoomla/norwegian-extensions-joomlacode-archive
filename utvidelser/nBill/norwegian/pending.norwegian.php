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

//Pending Orders
define("INV_PENDING", "Venter");
define("INV_ACTIVATE_PENDING_ORDER", "Aktiver venting");
define("INV_ACTIVATE_ARE_YOU_SURE", "ADVARSEL! Dette vil opprette en ny bestillingspost, og ventende posten vil bli slettet. Hvis relatert bestillingsskjema setter automatisk oppretting av en brukerpost og / eller faktura, disse vil også bli generert. Er du sikker på at du vil fortsette?");
define("INV_SELECT_PENDING_ORDER", "Vennligst gjør et valg fra listen for å aktivere");
define("INV_PENDING_ORDER", "Ventende ordrer");
define("INV_PENDING_TITLE", "Ventende ordrer");
define("INV_PENDING_INTRO", "Dette er bestillingene som ble mottatt via nettsiden, men der betalingen er ennå ikke bekreftet. Bestillinger vil kun bli avholdt i påvente av at hvis bestillingsskjemaet som de fastslår at de bør holdes før betalingen er bekreftet. Hvis den installerte betalingsprosessoren i forlengelse oppdager en betaling for en ventende rekkefølge, vil rekkefølgen vil bli opprettet automatisk. Hvis betalingen er gjort på en annen måte, eller hvis du vil aktivere en bestilling uten å ha mottatt betaling, kan du gjøre det ved hjelp av aktivere verktøylinjeknappen.");
define("INV_PENDING_ORDER_ID", "Ordre ID");
define("INV_PENDING_ORDER_FORM", "Ordre skjema");
define("INV_PENDING_ORDER_DATE", "Dato");
define("INV_PENDING_ORDER_VALUE", "Total ordreverdi");
define("INV_SHOW_PENDING_ORDER", "Vis ventende ordredetaljer");
define("INV_PENDING_ORDER_DETAILS", "Ventende ordredetaljer");
define("INV_QUANTITY", "Antall");
define("INV_OTHER_DATA", "Andre data");
define("INV_ORDERS_ACTIVATED", "Valgte ordre ble lagt til venting");
@define("INV_USERNAME", "Brukernavn");
@define("INV_PAY_FREQUENCY", "Betalings frekvens");

//Version 1.2.0
define("INV_PENDING_RESUME_LINK", "Hvis du har aktivert innbetaling av bestillinger uten å være logget inn (på visningsalternativene siden), kan følgende link brukes til å gjenoppta denne utestående pålegg (f.eks. å gjøre betaling).");
?>