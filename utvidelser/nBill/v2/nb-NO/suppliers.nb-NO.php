<?php
/**
* Language file for nBill
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

//Suppliers
define("NBILL_SUPPLIERS_TITLE", "Leverandører");
define("NBILL_SUPPLIERS_INTRO", "Vanlig informasjon fra leverandører som du foretar regelmessige betalinger til. Dette sparer deg fra å skrive inn detaljene på utgiftslisten hver gang du betaler en faktura. For engangsbetalinger trenger du ikke å opprette en leverandørpost - du kan bare skrive inn opplysninger på utgiftslisten.");
define("NBILL_SUPPLIER", "Leverandør");
define("NBILL_SUPPLIER_NAME", "Leverandørnavn");
define("NBILL_SUPPLIER_EMAIL_ADDRESS", "E-post adresse");
define("NBILL_INSTR_SUPPLIER_EMAIL_ADDRESS", "For din egen referanse - " . NBILL_BRANDING_NAME . " det vil ikke bli sendt e-post til denne adressen.");
define("NBILL_SUPPLIER_WEBSITE", "Hjemmeside");
define("NBILL_SUPPLIER_TELEPHONE", "Telefon");
define("NBILL_EDIT_SUPPLIER", "Rediger leverandør");
define("NBILL_SUPPLIER_NAME_REQUIRED", "Vennligst skriv inn enten et firmanavn og/eller et kontaktnavn.");
define("NBILL_NEW_SUPPLIER", "Ny leverandør");
define("NBILL_SUPPLIER_DETAILS", "Leverandørdetaljer");
define("NBILL_SUPPLIER_COUNTRY", "Land");
define("NBILL_INSTR_SUPPLIER_COUNTRY", "");
define("NBILL_SUPPLIER_REFERENCE", "Referanse");
define("NBILL_INSTR_SUPPLIER_REFERENCE", "Din referanse eller kundenummer hos denne leverandøren.");
define("NBILL_TAX_REFERENCE", "Avgiftsreferanse");
define("NBILL_INSTR_TAX_REFERENCE", "Leverandørens organisasjonsnr.");
define("NBILL_SUPPLIER_CURRENCY", "Standard valuta");
define("NBILL_INSTR_SUPPLIER_CURRENCY", "Valuta som vanligvis skal benyttes på denne leverandøren");
define("NBILL_INSTR_SUPPLIER_ADDRESS", "Leverandørs adresse.");
define("NBILL_SUPPLIER_ADDRESS_1", "Adresse 1");
define("NBILL_SUPPLIER_ADDRESS_2", "Adresse 2");
define("NBILL_SUPPLIER_ADDRESS_3", "Adresse 3");
define("NBILL_SUPPLIER_TOWN", "Sted/by");
define("NBILL_SUPPLIER_STATE", "Fylke");
define("NBILL_SUPPLIER_POSTCODE", "Postnummer");
?>