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
define("INV_TX_SEARCH_TITLE", "Transaksjonssøk");
define("INV_TX_SEARCH_ID", "Transaksjons-ID");
define("INV_TX_SEARCH_SEARCH", "Søk");
define("INV_TX_SEARCH_INTRO", "Du kan bruke denne funksjonen til å finne poster (ordre / faktura / inntekter / klienter) som er knyttet til et bestemt transaksjonsreferansenummer. Dette er nyttig der du har en betalingstransaksjon fra din betalingsleverandør, og du prøver å knytte det opp med dine egne poster i ". INV_BRANDING_NAME.". Angi et referansenummer i boksen nedenfor og klikk på ". INV_TX_SEARCH_SEARCH ." for å forsøke å finne andre relaterte poster.");