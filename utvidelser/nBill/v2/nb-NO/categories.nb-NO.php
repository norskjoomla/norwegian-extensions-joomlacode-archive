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

//Categories
define("NBILL_CATEGORIES_TITLE", "Kategorier");
define("NBILL_CATEGORY_NAME", "Navn");
define("NBILL_CATEGORY_DESCRIPTION", "Beskrivelse");
define("NBILL_CATEGORY_ORDERING", "Sortering");
define("NBILL_EDIT_CATEGORY", "Rediger kategori");
define("NBILL_NEW_CATEGORY", "Ny kategori");
define("NBILL_ERR_CANNOT_DELETE_CATEGORY", "Én eller flere kategorier du prøvde å slette er ikke tom. Du kan ikke slette en kategori som inneholder produkter eller andre kategorier. Du må enten slette eller flytte de produktene og/eller underkategorien til en annen kategori før du prøver å slette.");
define("NBILL_ERR_CANNOT_DELETE_ROOT_CAT", "Du kan ikke slette hovedkategorien (rot) - det må alltid finnes minst én kategori.");
define("NBILL_CATEGORY_NAME_REQUIRED", "Skriv inn navnet for kategorien");
define("NBILL_CATEGORY_DETAILS", "Kategoridetaljer");
define("NBILL_CATEGORY_PARENT", "Overordnet kategori");
define("NBILL_INSTR_CATEGORY_NAME", "");
define("NBILL_INSTR_CATEGORY_DESCRIPTION", "");
define("NBILL_INSTR_CATEGORY_PARENT", "");
