<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : norwegian.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translator soeren
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
	'CHARSET' => 'UTF-8',
	'PHPSHOP_NO_CUSTOMER' => 'Du er enda ikke registrert som kunde. Vennligst fyll inn fakturainformasjon.',
	'PHPSHOP_THANKYOU' => 'Takk for bestillingen.',
	'PHPSHOP_EMAIL_SENDTO' => 'Bekreftelse har blitt sendt p� e-post til',
	'PHPSHOP_CHECKOUT_NEXT' => 'Neste',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => 'Fakturainformasjon',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => 'Firma',
	'PHPSHOP_CHECKOUT_CONF_NAME' => 'Navn',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => 'Adresse',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'E-post',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => 'Leveringsinformasjon',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => 'Firma',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => 'Navn',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => 'Adresse',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => 'Telefon',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => 'Faks',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => 'Betalingsm�te',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => 'p�krevd informasjon n�r kredittkort er valgt',
	'PHPSHOP_PAYPAL_THANKYOU' => 'Takk for din betaling.',
	'PHPSHOP_PAYPAL_ERROR' => 'En feil har oppst�tt under betalingstransaksjonen. Statusen p� din ordre kan ikke oppdateres.',
	'PHPSHOP_THANKYOU_SUCCESS' => 'Din ordre er sendt!',
	'VM_CHECKOUT_TITLE_TAG' => 'Bestilling: Steg %s av %s',
	'VM_CHECKOUT_ORDERIDNOTSET' => 'Ordre-ID er ikke angitt eller er tom!',
	'VM_CHECKOUT_FAILURE' => 'Bestillingen feilet',
	'VM_CHECKOUT_SUCCESS' => 'Bestillingen er vellykket gjennomf�rt',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_1' => 'Denne siden ligger p� nettbutikkens nettsted.',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_2' => 'The gateway execute the page on the website, and the shows the result SSL Encrypted.',
	'VM_CHECKOUT_CCV_CODE' => 'Credit Card Validation Code',
	'VM_CHECKOUT_CCV_CODE_TIPTITLE' => 'What\'s the Credit Card Validation Code?',
	'VM_CHECKOUT_MD5_FAILED' => 'MD5 Check failed',
	'VM_CHECKOUT_ORDERNOTFOUND' => 'Kunne ikke finne ordren',
	'VM_CHECKOUT_PBS_APPROVED_ORDERCOMMENT' => '
                The Payment Transaction was approved by PBS. \n
                The Transaction has received the following Transaction Number:\n\n
                Transaction Number: {transactionnumber}\n',
	'VM_CHECKOUT_PBS_NOTAPPROVED_ORDERCOMMENT' => '
                The Payment Transaction was not approved by PBS. \n
                The Transaction has received the following Transaction Number:\n\n
                Transaction Number: {transactionnumber}\n',
	'VM_CHECKOUT_DD_ERROR_0' => 'Merchant/forretningsnummer ugyldig',
	'VM_CHECKOUT_DD_ERROR_1' => 'Ugyldig kredittkortnummer',
	'VM_CHECKOUT_DD_ERROR_2' => 'Ugyldig bel�p',
	'VM_CHECKOUT_DD_ERROR_3' => 'Ordrenummer mangler eller er ugyldig',
	'VM_CHECKOUT_DD_ERROR_4' => 'PBS afvisning - (Oftest - ugyldig kortdata, sp?rret kort osv...)',
	'VM_CHECKOUT_DD_ERROR_5' => 'Intern server fejl hos DanDomain eller PBS',
	'VM_CHECKOUT_DD_ERROR_6' => 'E-dankort ikke tilladt. Kontakt DanDomain',
	'VM_CHECKOUT_DD_ERROR_DEFAULT' => 'System fejl',
	'VM_CHECKOUT_FP_ERROR_1' => 'Error: Transaction declined',
	'VM_CHECKOUT_FP_ERROR_2' => 'Error: Transaction declined',
	'VM_CHECKOUT_FP_ERROR_3' => 'Error: wrong number format',
	'VM_CHECKOUT_FP_ERROR_4' => 'Error: illegal transaction',
	'VM_CHECKOUT_FP_ERROR_5' => 'Error: no answer',
	'VM_CHECKOUT_FP_ERROR_6' => 'Error_system_failure',
	'VM_CHECKOUT_FP_ERROR_7' => 'Error: Card expired',
	'VM_CHECKOUT_FP_ERROR_8' => 'Error: Communication Failure',
	'VM_CHECKOUT_FP_ERROR_9' => 'Error: Internal Failure',
	'VM_CHECKOUT_FP_ERROR_10' => 'Error: Card not registered',
	'VM_CHECKOUT_FP_ERROR_DEFAULT' => 'Error: unknown Error',
	'VM_CHECKOUT_WF_ERROR_1' => 'Transaktionen blev ikke godkendt',
	'VM_CHECKOUT_WF_ERROR_2' => 'Mulig snyd',
	'VM_CHECKOUT_WF_ERROR_3' => 'Kommunikations fejl',
	'VM_CHECKOUT_WF_ERROR_4' => 'Kort udlobet',
	'VM_CHECKOUT_WF_ERROR_5' => 'Intern feil',
	'VM_CHECKOUT_WF_ERROR_6' => 'Invalid Transaktion',
	'VM_CHECKOUT_WF_ERROR_7' => 'System feil',
	'VM_CHECKOUT_WF_ERROR_8' => 'Forkert forretningsnummer',
	'VM_CHECKOUT_WF_ERROR_9' => 'Kortet eksistere ikke',
	'VM_CHECKOUT_WF_ERROR_10' => 'Kort l�ngen er for kort.',
	'VM_CHECKOUT_WF_ERROR_11' => 'Transaktion kan ikke gennemfores igennem denne terminal',
	'VM_CHECKOUT_WF_ERROR_12' => 'Kortejeren har ikke rettigheder til at gennemfore denne transaktion.',
	'VM_CHECKOUT_WF_ERROR_13' => 'Kortnummeret eksistere ikke',
	'VM_CHECKOUT_WF_ERROR_14' => 'Error unknown'
); $VM_LANG->initModule( 'checkout', $langvars );
?>
