<?php
/**
* Language file for the Transaction Search feature
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

//Backup/Restore
define("NBILL_TX_SEARCH_TITLE", "Transaksjonssøk");
define("NBILL_TX_SEARCH_ID", "Transaksjons-ID");
define("NBILL_TX_SEARCH_SEARCH", "Søk");
define("NBILL_TX_SEARCH_INTRO", "Du kan bruke denne funksjonen til å finne poster (ordre/faktura/inntekter/klienter) som er knyttet til et bestemt transaksjonsnummer. Dette er nyttig der du har en betalingstransaksjon fra en leverandør, og du prøver å knytte det opp med dine egne poster i ". NBILL_BRANDING_NAME.". Angi et referansenummer i boksen nedenfor og klikk på ". NBILL_TX_SEARCH_SEARCH ." for å finne andre relaterte poster.");