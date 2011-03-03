<?php
/**
* Language file for the all features that rely on AJAX
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
define("NBILL_AJAX_NOT_SUPPORTED", "Beklager, denne funksjonen vil ikke virke ettersom din nettleser ikke støtter AJAX");
define("NBILL_AJAX_PLEASE_WAIT", "Vennligst vent ...");

//Assign contact to client or supplier
define("NBILL_AJAX_NO_RESULTS", "Beklager, ingen treff.");
define("NBILL_AJAX_TOO_MANY", "%s passende oppføringer ble funnet. Bare de første %s blir vist her.");
define("NBILL_AJAX_RESULT_COUNT", "%s passende oppføringer ble funnet.");
define("NBILL_AJAX_NAME", "Navn");
define("NBILL_AJAX_EMAIL", "E-postadresse");
define("NBILL_AJAX_LOCATION", "Sted");
define("NBILL_AJAX_SELECT_CONTACTS", "Merk boks(ene) ved siden av kontakten(e) du ønsker å tildele, og klikk enten på knapp for 'Bruk' eller 'Lagre' på verktøylinjen.");
define("NBILL_AJAX_NAME_UNKNOWN", "[Navn ukjent]");
define("NBILL_AJAX_SELECT", "Velg");