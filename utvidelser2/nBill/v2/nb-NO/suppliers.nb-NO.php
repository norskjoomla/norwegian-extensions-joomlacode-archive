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
define("NBILL_SUPPLIER_NAME", "Leverandørnavn");
//define("NBILL_WEBSITE", "Hjemmeside");
//define("NBILL_TELEPHONE", "Telefon");
//define("NBILL_TELEPHONE_2", "Telefon 2");
define("NBILL_USERNAME_PASSWORD_REQUIRED", "Ett brukernavn og passorde er påkrevd for å opprette ny bruker.");
define("NBILL_EDIT_SUPPLIER", "Rediger leverandør");
define("NBILL_NEW_SUPPLIER", "Ny leverandør");
define("NBILL_SUPPLIER_DETAILS", "Leverandørdetaljer");
define("NBILL_SUPPLIER_USER", "Relaterte bruker");
define("NBILL_CREATE_USER", "[Opprett ny bruker]");
//define("NBILL_COMPANY_NAME", "Firmanavn");
//define("NBILL_CONTACT_NAME", "Kontakt navn");
//define("NBILL_ADDRESS_1", "Adresse 1");
//define("NBILL_ADDRESS_2", "Adresse 2");
//define("NBILL_ADDRESS_3", "Adresse 3");
//define("NBILL_TOWN", "Sted/by");
//define("NBILL_STATE", "Fylke");
//define("NBILL_POSTCODE", "Postnummer");
define("NBILL_SUPPLIER_COUNTRY", "Land");
define("NBILL_SUPPLIER_REFERENCE", "Referanse");
//define("NBILL_MOBILE", "Mobiltelefon");
//define("NBILL_FAX", "Faks");
define("NBILL_SUPPLIER_CURRENCY", "Standard valuta");
define("NBILL_INSTR_COMPANY_NAME", "Navn på leverandørselskap");
define("NBILL_INSTR_ADDRESS", "Leverandørs adresse.");
define("NBILL_INSTR_SUPPLIER_COUNTRY", "");
define("NBILL_INSTR_SUPPLIER_REFERENCE", "Din referanse eller kundenummer hos denne leverandøren.");
define("NBILL_INSTR_EMAIL_ADDRESS", "");
define("NBILL_INSTR_WEBSITE", "Bare for din egen referanse.");
define("NBILL_INSTR_TELEPHONE", "");
define("NBILL_INSTR_TELEPHONE_2", "Valgfritt, hvis det er et ekstra telefonnummer du vil lagre.");
define("NBILL_INSTR_MOBILE", "");
define("NBILL_INSTR_FAX", "");
define("NBILL_INSTR_SUPPLIER_CURRENCY", "Valuta som vanligvis skal benyttes på denne leverandøren.");
define("NBILL_SUPPLIER_DELETED", "Leverandør slettet");

//Version 1.2.1
define("NBILL_SUPPLIER_VIEW_PURCHASE_ORDERS", "Se innkjøpsordrer for denne leverandøren");

//Version 1.2.6
define("NBILL_SUPPLIER_ACTION", "Oppgave");
define("NBILL_SUPPLIER_NEW_ORDER", "Opprett ny kjøpsordre på denne leverandøren");

//Version 2.0.0
define("NBILL_SUPPLIER_TAB_SUPPLIER", "Leverandør");
define("NBILL_SUPPLIER_PRIMARY", "Hovedkontakt");
define("NBILL_INSTR_SUPPLIER_PRIMARY", "Velg kontaktperson for faktureringen for denne leverandøren");
define("NBILL_CONTACT_NAME_UNKNOWN", "[Navn ukjent]");
define("NBILL_SUPPLIER_NO_IFRAMES", "Din nettleser støtter ikke integrerte rammer - vennligst klikk på følgende lenk for å redigere denne kontakten: %s");
define("NBILL_SUPPLIER_NEW_CONTACT", "Legg til ny kontakt");
define("NBILL_SUPPLIER_ASSIGN_CONTACT", "Tilordne kontakt");
define("NBILL_SUPPLIER_REMOVE_CONTACT", "Fjern denne kontakten");
define("NBILL_SUPPLIER_DELETE_CONTACT", "Slett denne kontakten");
define("NBILL_SUPPLIER_CONTACT_DELETE_SURE", "Du har valgt PERMANENT å slette %s kontakt (er). Er du sikker på at du vil fortsette?");
define("NBILL_SUPPLIER_CONTACT_FILTER", "Skriv inn navnet eller en del av navnet på kontakten du vil tildele, og klikk på 'Utfør'.");
define("NBILL_SUPPLIER_CONTACT_FILTER_GO", "Utfør");
define("NBILL_SUPPLIER_CONTACT_PERMISSIONS", "Kontaktrettigheter");
define("NBILL_SUPPLIER_UPDATE_PROFILE", "Oppdater leverandørprofil?");
define("NBILL_INSTR_SUPPLIER_UPDATE_PROFILE", "Hvorvidt denne kontakt får lov til å oppdatere leverandørdetaljene (f. eks firmanavn og adresse).");
define("NBILL_SUPPLIER_ACCESS_PURCHASE_ORDERS", "Tilgang innkjøpsordrer");
define("NBILL_INSTR_SUPPLIER_ACCESS_PURCHASE_ORDERS", "Hvorvidt denne kontakten har tilgang til innkjøpsordredetaljene for denne leverandøren.");
define("NBILL_SUPPLIER", "Leverandør");
define("NBILL_SUPPLIER_TAX_REFERENCE", "Skattereferanse");
define("NBILL_INSTR_SUPPLIER_TAX_REFERENCE", "Skriv inn leverandørens skattereferansenummer (dvs. MVA-nummer, eller tilsvarende).");

//Version 2.0.9
define("NBILL_SUPPLIER_USERNAME_ALPHANUM", "Bruk kun bokstaver og nummer i brukernavn");
