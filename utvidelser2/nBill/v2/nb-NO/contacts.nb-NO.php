<?php
/**
* Language file for Contacts
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

//Contacts
define("NBILL_CONTACTS_TITLE", "Kontakter");
define("NBILL_WEBSITE", "Nettside");
define("NBILL_TELEPHONE", "Telefon 1");
define("NBILL_TELEPHONE_2", "Telefon 2");
define("NBILL_USERNAME_PASSWORD_REQUIRED", "Brukernavn, passord og e-postadresse er påkrevd for å opprette en ny bruker.");
define("NBILL_EDIT_CONTACT", "Rediger kontakter");
define("NBILL_NEW_CONTACT", "Ny kontakt");
define("NBILL_CONTACT_DETAILS", "Kontaktdetaljer");
define("NBILL_CONTACT_USER", "Lenket til bruker");
define("NBILL_CREATE_USER", "[Opprett ny bruker]");
define("NBILL_CONTACT_NAME", "Navn");
define("NBILL_CONTACT_ADD_NAME_TO_INVOICE", "Legg kontaktnavn til fakturaer?");
define("NBILL_ADDRESS_1", "Adresselinje 1");
define("NBILL_ADDRESS_2", "Adresselinje 2");
define("NBILL_ADDRESS_3", "Adresselinje 3");
define("NBILL_TOWN", "Sted");
define("NBILL_STATE", "Fylke");
define("NBILL_POSTCODE", "Postnummer");
define("NBILL_CONTACT_COUNTRY", "Land");
define("NBILL_MOBILE", "Mobil");
define("NBILL_FAX", "Faks");
define("NBILL_INSTR_CONTACT_NAME", "Navnet på personen du handler med - du kan la dette stå tomt hvis du vil.");
define("NBILL_INSTR_ADDRESS", "Alternativt kan du skrive inn adressen til denne kontakten (den brukes bare for å opprette kunden eller leverandøradressen hvis en kunde eller leverandør er generert basert på denne kontakten).");
define("NBILL_INSTR_CONTACT_COUNTRY", "");
define("NBILL_INSTR_CONTACT_USER", "Velg bruker som denne kontakten skal lenkes til. MERK: Dette vil gi den valgte brukeren TILGANG TIL POSTER (f. eks FAKTURAER/ORDRER) FOR DENNE KONTAKTEN - vær forsiktig!");
define("NBILL_INSTR_CONTACT_USER_ID", "Skriv inn brukerens numeriske ID for å lenke til denne kontakten(se <a href=\"index2.php?option=com_users&task=view\">Brukeradministrasjon</a> - brukerens ID er det siste elementet på listen helt til høyre) MERK: DETTE VIL GI DEN VALGTE BRUKER TILGANG TIL FAKTURAER FOR DENNE KONTAKTEN - være forsiktig!, og vær siker på at du skriver riktig bruker-id!. Hvis du vil se en liste over brukere å velge fra her i stedet for å måtte taste inn bruker-ID, kan du sette dette opp på <a href=\"" . nbf_cms::$interop->admin_page_prefix . "&action=configuration\">konfigurasjonssiden</a>.");
define("NBILL_INSTR_CONTACT_REFERENCE", "Dette er din referanse som vil vises på denne kontakten faktura - velg noe kort som vil hjelpe deg med å identifisere kontakten.");
define("NBILL_INSTR_EMAIL_ADDRESS", "Dette er e-postadressen som fakturaer skal sendes til(hvis relevant)");
define("NBILL_INSTR_WEBSITE", "For din egen referanse.");
define("NBILL_INSTR_TELEPHONE", "");
define("NBILL_INSTR_TELEPHONE_2", "Valgfritt, hvis det er et ekstra telefonnummer du vil lagre.");
define("NBILL_INSTR_MOBILE", "");
define("NBILL_INSTR_FAX", "");
define("NBILL_CONTACT_DELETED", "Kontakt slettet");
define("NBILL_ERR_CONTACT_COULD_NOT_CREATE_USER", "Beklager, en ny bruker kunne ikke opprettes!");
@define("NBILL_USERNAME", "Brukernavn");
@define("NBILL_PASSWORD", "Passord");

//Version 1.2.0
define("NBILL_CONTACT_UNDER_MAMBOT_CONTROL", "Denne brukeren `s tilgang til området er kontrollert av brukeren abonnementet. Du kan klikke på dette ikonet for å fjerne alle restriksjoner på denne brukeren `s tilgang til nettstedet.");
define("NBILL_CONTACT_CANCEL_MAMBOT_CONTROL", "Er du sikker på at du vil fjerne denne brukeren fra abonnementet som kontrollerer brukeren?");
define("NBILL_CONTACT_MAMBOT_CONTROL_CANCELLED", "Den valgte brukeren er ikke lenger styrt av brukerabonnementet.");

//Version 2.0.0
define("NBILL_CONTACT", "Kontakt");
define("NBILL_CONTACT_INTRO", "Når et navn eller en adresse registreres i nBill, blir de lagret som en kontakt. Kontakter kan tildeles til en klient og/eller leverandør. Samme kontakt kan være både klient og leverandør, og kunder og leverandører kan ha mer enn én kontakt tildelt dem (selv om bare en er 'primær' kontakt).");
define("NBILL_EMAIL_ADDRESS_2", "Alternativ e-postadresse");
define("NBILL_INSTR_EMAIL_ADDRESS_2", "Dersom du ønsker å registrere mer enn én e-postadresse for denne kontakten, kan du angi den andre her (for din egen referanse).");
define("NBILL_CONTACT_NAME_UNKNOWN", "[Navn ukjent]");
define("NBILL_CONTACT_ENTITY", "Klient/leverandør");
define("NBILL_CONTACT_SHOW_CLIENTS", "Vis klient(er)");
define("NBILL_CONTACT_SHOW_SUPPLIERS", "Vis leverandør(er)");
define("NBILL_CONTACT_ID", "ID");
define("NBILL_CONTACT_CUSTOM_FIELDS", "Egendefinerte felt");
define("NBILL_CONTACT_COPY_ADDRESS_FROM_CLIENT", "Kopier adresse");
define("NBILL_CONTACT_COPY_ADDRESS_HELP", "Klikk på denne knappen for å kopiere adressen fra hovedkunde eller leverandør");
define("NBILL_CONTACT_EMAIL_IN_USE", "E-postadressen `%s1`  er allerede i bruk av en annen kontakt (%s2). Du må enten angi en unik e-postadresse, eller bruke eksisterende kontakt.");
