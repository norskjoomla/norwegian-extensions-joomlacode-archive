<?php
/**
* Language file for the Profile Fields feature
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

define("NBILL_PROFILE_FIELDS_TITLE", "Kundeprofil felt");
define("NBILL_PROFILE_FIELDS_INTRO", "Her kan du definere hvilke felt som skal vises på siden ’Min profil’, og koble de til verdiene på kontakt eller kunde posten. Du kan til og med opprette flere felt som vil bli koblet mot kunde og/eller kontakt poster. Også bestillingsskjemaer og tilbudsskjemaer må be om personlig informasjon som kan brukes automatisk til å lage en kundeprofil og/eller en kontaktpost. Snarere enn å lage feltene selv for hvert skjema, kan du her angi hvilke av de definerte standardprofilfeltene som bør vises på nye skjemaer som standard (de kan fortsatt bli redigert eller fjernet fra skjemaet etterpå).");
define("NBILL_PROFILE_FIELD_REQUIRED", "Obligatorisk?");
define("NBILL_PROFILE_FIELD_PUBLISHED", "Publisert?");
define("NBILL_PROFILE_FIELD_ORDERING", "Sortering");
define("NBILL_PROFILE_FIELD_NOT_REQUIRED", "Ikke obligatorisk");
define("NBILL_EDIT_PROFILE_FIELD", "Rediger felt");
define("NBILL_PROFILE_FIELD_NAME_REQUIRED", "Angi et navn på feltet");
define("NBILL_PROFILE_FIELD_RESERVED_WORD", "Beklager, `%s` er et reservert ord med en spesiell betydning. Vennligst velg et annet navn på dette feltet.");
define("NBILL_PROFILE_FIELD_NAME_NUMERIC", "Beklager, du kan ikke bare bruke tall som feltnavnet –du må legge til minst en bokstav");
define("NBILL_NEW_PROFILE_FIELD", "Nytt felt");
define("NBILL_PROFILE_FIELD_DETAILS", "Feltdetaljer");
define("NBILL_INSTR_PROFILE_FIELD_PUBLISHED", "Hvorvidt å bruke dette feltet på siden ’Min profil’.");
define("NBILL_PROFILE_FIELD_UPDATE_FORMS", "ADVARSEL! Et felt med dette navnet og kunde/kontakt kobling er allerede brukt på ett eller flere skjemaer. Hvis du vil bruke endringene i de tilsvarende feltene på alle eksisterende skjemaer, klikker du OK.");
define("NBILL_PROFILE_FIELD_IN_USE", "I bruk?");
define("NBILL_PROFILE_FIELD_IN_USE_YES", "I bruk");
define("NBILL_PROFILE_FIELD_IN_USE_NO", "Ikke i bruk");
define("NBILL_PROFILE_FIELD_IN_USE_HELP", "Hvorvidt noen felt på eventuelle eksisterende skjemaer har samme navn, klient kobling, og kontakt kobling som dette feltet (og kan derfor bli oppdatert dersom dette feltet er oppdatert).");
define("NBILL_PROFILE_FIELD_SAVE_FAILED", "Beklager, det oppstod et problem under lagring - det er ikke kjent om det ble lagret vellykket eller ikke. Dette kan skyldes et forbigående kommunikasjonsproblem mellom nettleseren og nettserveren. Vennligst prøv igjen.");
define("NBILL_OPTIONS_CANNOT_UNSERIALIZE", "Det oppstod et problem ved overføring av dataene til serveren. Feltet kunne ikke lagres. Ta kontakt med brukerstøtte.");