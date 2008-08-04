<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : norwegian.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* Translation is based on old language file for VM 1.0.
* New translation and cleanup for v1.1 by Odd-Eirik Eriksen (abc@abc-konsult.no) and Rune Rasmussen (syntaxerror.no).
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
global $VM_LANG;
$langvars = array (
	'CHARSET' => 'ISO-8859-1',
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'Fornavn',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'Etternavn',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => 'Mellomnavn',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'Firmanavn',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'Adresse 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'Adresse 2',
	'PHPSHOP_USER_FORM_CITY' => 'By',
	'PHPSHOP_USER_FORM_STATE' => 'Fylke',
	'PHPSHOP_USER_FORM_ZIP' => 'Postnr',
	'PHPSHOP_USER_FORM_COUNTRY' => 'Land',
	'PHPSHOP_USER_FORM_PHONE' => 'Telefon',
	'PHPSHOP_USER_FORM_PHONE2' => 'Mobil',
	'PHPSHOP_USER_FORM_FAX' => 'Faks',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'Aktive',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Konfigurer leveringsm�te',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'Stort bilde',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'Last opp bilde',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Butikknavn',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Butikk firmanavn',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'Adresse 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'Adresse 2',
	'PHPSHOP_STORE_FORM_CITY' => 'Sted',
	'PHPSHOP_STORE_FORM_STATE' => 'Fylke',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'Land',
	'PHPSHOP_STORE_FORM_ZIP' => 'Postnr',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'Valuta',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Etternavn',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'Fornavn',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => 'Mellomnavn',
	'PHPSHOP_STORE_FORM_TITLE' => 'Tittel',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'Tlf 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'Tlf 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'Beskrivelse',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'Betalingsmetoder',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Navn',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'Kode',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Kundegruppe',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Betalingstype',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'Skjema betalingsm�ter',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'Navn betaingsm�te',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Kundegruppe',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'Rabatt',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'Kode',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'list opp bestillinger',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'Type betalingsm�te',
	'PHPSHOP_PAYMENT_FORM_CC' => 'Kredittkort',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'Bruk betalingssystem',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'Bankoverf�ring',
	'PHPSHOP_PAYMENT_FORM_AO' => 'Kun adresse',
	'PHPSHOP_STATISTIC_STATISTICS' => 'Statistikk',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'Kunder',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'Aktive produkter',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'Ikke aktive produkter',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Nye ordrer',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Nye kunder',
	'PHPSHOP_CREDITCARD_NAME' => 'Kredittkort navn',
	'PHPSHOP_CREDITCARD_CODE' => 'Kredittkort kode',
	'PHPSHOP_YOUR_STORE' => 'Din butikk',
	'PHPSHOP_CONTROL_PANEL' => 'Kontrollpanel',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'Vis/endre passord/transaksjonsn�kkel',
	'PHPSHOP_TYPE_PASSWORD' => 'Skriv ditt passord her',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'Gjeldende transaksjonsn�kkel',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'Transaksjonsn�klene ble endret.',
	'VM_PAYMENT_CLASS_NAME' => 'Payment class name',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(e.g. <strong>ps_netbanx</strong>) :<br />
default: ps_payment<br />
<i>Leave blank if you\'re not sure what to fill in!</i>',
	'VM_PAYMENT_EXTRAINFO' => 'Ekstra betalingsinformasjon',
	'VM_PAYMENT_EXTRAINFO_TIP' => 'Vises p� ordrebekreftelsessiden. Kan v�re: HTML-kode fra din leverand�r av betalingsl�sning, informasjon til kunden osv.',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'Godkjente kredittkort',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'Rabatten kan omgj�res til et gebyr ved � bruke en negativ verdi (eksempel: <strong>-2.00</strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'Maksimalt rabattbel�p',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'Minimum rabattbel�p',
	'VM_PAYMENT_FORM_FORMBASED' => 'HTML-skjemabasert (f.eks. PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'Order Export Module List',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'Navn',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'Beskrivelse',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'Liste over godkjente valutaer',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'Denne listen definerer hvilke valutaer som kan brukes til betaling i din nettbutikk. <strong>Merk:</strong> Alle valgte valutaer kan brukes ved betaling! Om du ikke vil godta flere valutaer velger du kun norske kroner (forh�ndsvalgt).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'Export Module Form',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Export Module Name',
	'VM_EXPORT_MODULE_FORM_DESC' => 'Beskrivelse',
	'VM_EXPORT_CLASS_NAME' => 'Export Class Name',
	'VM_EXPORT_CLASS_NAME_TIP' => '(e.g. <strong>ps_orders_csv</strong>) :<br /> default: ps_xmlexport<br /> <i>Leave blank if you\'re not sure what to fill in!</i>',
	'VM_EXPORT_CONFIG' => 'Export Extra Configuration',
	'VM_EXPORT_CONFIG_TIP' => 'Define Export configuration for user-defined export modules or define additional configuration. Code must be valid PHP-Code.',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'Navn',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'Versjon',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'Skrevet av',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'Format for butikkadresse',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'You can use the following placeholders here',
	'PHPSHOP_STORE_DATE_FORMAT' => 'Butikkens datoformat',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'Feil: Betalingsmetode-ID ble ikke gitt.',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Konfigurer forsendelsesmodul',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Could not instantiate Class {shipping_module}'
); $VM_LANG->initModule( 'store', $langvars );
?>
