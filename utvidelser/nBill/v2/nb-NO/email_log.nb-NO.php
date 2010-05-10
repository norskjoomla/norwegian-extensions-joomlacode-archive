<?php
/**
* Language file for the E-mail log
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

define("NBILL_EMAIL_LOG_TITLE", "E-postlogg");
define("NBILL_EMAIL_LOG_INTRO", "Denne loggen inneholder en post for hver e-post systemet har forsøkt å sende (ikke e-post administrator). Postene blir lagret opp til maksimalt ett år, men du kan slette gamle oppføringer før dette hvis du ønsker det. Klikk på et emne for vise e-postmeldingen.");
define("NBILL_EMAIL_LOG_DATE", "Dato");
define("NBILL_EMAIL_LOG_STATUS", "Statusfilter");
define("NBILL_EMAIL_LOG_ITEM_STATUS", "Status");
define("NBILL_EMAIL_LOG_SHOW_ALL", "Vis alle");
define("NBILL_EMAIL_LOG_SHOW_SUCCESS", "Bare vellykkete");
define("NBILL_EMAIL_LOG_SHOW_FAILURE", "Bare feilet");
define("NBILL_EMAIL_LOG_TYPE", "Type");
define("NBILL_EMAIL_LOG_SHOW_PENDING", "Bare ventende bestillinger");
define("NBILL_EMAIL_LOG_SHOW_ORDERS", "Bare bestillinger");
define("NBILL_EMAIL_LOG_SHOW_QUOTES", "Bare forespørsler");
define("NBILL_EMAIL_LOG_SHOW_INVOICES", "Bare fakturaer");
define("NBILL_EMAIL_LOG_RECORD", "Relaterte poster");
define("NBILL_EMAIL_LOG_PENDING", "Ventende bestillinger");
define("NBILL_EMAIL_LOG_ORDER", "Bestillinger");
define("NBILL_EMAIL_LOG_QUOTE", "Forespørsler");
define("NBILL_EMAIL_LOG_INVOICE", "Fakturaer");
define("NBILL_EMAIL_LOG_UNKNOWN", "Ukjent");
define("NBILL_EMAIL_LOG_RECORD_DELETED", "(Post slettet)");
define("NBILL_EMAIL_LOG_TO", "Til");
define("NBILL_EMAIL_LOG_CC", "Kopi");
define("NBILL_EMAIL_LOG_BCC", "Blind kopi");
define("NBILL_EMAIL_LOG_SUBJECT", "Emne");
define("NBILL_EMAIL_LOG_NO_SUBJECT", "[Ingen emne]");
define("NBILL_EMAIL_LOG_NO_DETAILS", "E-postdetaljer kan ikke lastes fra databasen");
define("NBILL_EMAIL_LOG_OLD_DELETED", "%s gamle e-post(er) slettet.");
