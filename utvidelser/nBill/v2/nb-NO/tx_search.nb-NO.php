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

//Backup/Restore
define("NBILL_TX_SEARCH_TITLE", "Transaksjonss�k");
define("NBILL_TX_SEARCH_ID", "Transaksjons-ID");
define("NBILL_TX_SEARCH_SEARCH", "S�k");
define("NBILL_TX_SEARCH_INTRO", "Du kan bruke denne funksjonen til � finne poster (ordre/faktura/inntekter/klienter) som er knyttet til et bestemt transaksjonsnummer. Dette er nyttig der du har en betalingstransaksjon fra en leverand�r, og du pr�ver � knytte det opp med dine egne poster i ". NBILL_BRANDING_NAME.". Angi et referansenummer i boksen nedenfor og klikk p� ". NBILL_TX_SEARCH_SEARCH ." for � finne andre relaterte poster.");