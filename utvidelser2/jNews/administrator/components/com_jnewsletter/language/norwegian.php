<?php
defined('_JEXEC') or die('Restricted access');
### Copyright (C) 2006-2010 Joobi Limited. All rights reserved.
### http://www.joobi.co/index.php?option=com_jlinks&controller=redirect&link=single-license

/**
* <p>Norwegian language file.</p>
* @author Foreningen Joomla! i Norge <oversettelser@joomlainorge.no>
* @translators (known): Irma Rustad, Rune Rasmussen and Knut Helstad
* @version $Id: norwegian.php 491 2007-02-01 22:56:07Z divivo $
* @link http://www.joomlainorge.no
*/

#######    NOTE TO TRANSLATORS  #######
# If you wish to translate the language file to your own language, please feel free to do so
# We would apprecaite if you could send you translation to the specified email
# so that other people could benefit from your contribution
# If you feel that the file is too long feel free to do as much as you want and probably
# someone else will be happy to pick up were you stopped.
#  We did our bestt to organize the subject by order of priority so start at the top
# If you update your translation please send you updates to translation@ijoobi.com
# IMPORTANT: make sure respect as much as posible the punctionation and spacing because
# sometimes the word constant are conbined...
# Don't ever remove a define as it will create an error in the code.
# when using apostrophy  '   add a back-slash before like this:  \'  otherwise it will create an error.
# sometimes you will see html tag in the define, please leave it the way it is.

# DONT FORGET if you want to be credited fro your work, make sure to change the credit
# with your name and email if you want people to contact you otherwise leave the email as it is.
# We will use that information to also include you into the About section of the component
# Thank you very much for your contribution translating in your language

### General ###
 //jnewsletter Description
define('_JNEWS_DESC_CORE', 'jNews er en epostliste, nyhetsbrev, \'autoutsendelse\', og oppfølgingsverktøy for å kommunisere med deres brukere og kunder.  ' .
		'jNews, deres kommunikasjonspartner!');
define('_JNEWS_DESC_GPL', 'jNews er en epostliste, nyhetsbrev, \'autoutsendelse\', og oppfølgingsverktøy for å kommunisere med deres brukere og kunder.  ' .
		'jNews, deres kommunikasjonspartner!');
define('_JNEWS_FEATURES', 'jNews, deres kommunikasjonspartner!');

// Type of lists
define('_JNEWS_NEWSLETTER', 'Nyhetsbrev');
define('_JNEWS_AUTORESP', 'Automatisk utsendelse');
define('_JNEWS_AUTORSS', 'Automatisk RSS');
define('_JNEWS_ECARD', 'E-kort');
define('_JNEWS_POSTCARD', 'Postkort');
define('_JNEWS_PERF', 'Ytelse');
define('_JNEWS_COUPON', 'Kupong');
define('_JNEWS_CRON', 'Cron-jobb');
define('_JNEWS_MAILING', 'Utsendelse');
define('_JNEWS_LIST', 'Liste');

 //jnewsletter Menu
define('_JNEWS_MENU_LIST', 'Lister');
define('_JNEWS_MENU_SUBSCRIBERS', 'Abonnenter');
define('_JNEWS_MENU_NEWSLETTERS', 'Nyhetsbrev');
define('_JNEWS_MENU_AUTOS', 'Autoutsendelse');
define('_JNEWS_MENU_COUPONS', 'Kuponger');
define('_JNEWS_MENU_CRONS', 'Cron-jobber');
define('_JNEWS_MENU_AUTORSS', 'Automatisk RSS');
define('_JNEWS_MENU_ECARD', 'E-kort');
define('_JNEWS_MENU_POSTCARDS', 'Postkort');
define('_JNEWS_MENU_PERFS', 'Ytelser');
define('_JNEWS_MENU_TAB_LIST', 'Lister');
define('_JNEWS_MENU_MAILING_TITLE', 'Utsendelser');
define('_JNEWS_MENU_MAILING', 'Utsendelser for ');
define('_JNEWS_MENU_STATS', 'Statistikker');
define('_JNEWS_MENU_STATS_FOR', 'Statistikker for ');
define('_JNEWS_MENU_CONF', 'Konfigurasjon');
define('_JNEWS_MENU_UPDATE', 'Import');
define('_JNEWS_MENU_ABOUT', 'Om');
define('_JNEWS_MENU_LEARN', 'Opplæringssenter');
define('_JNEWS_MENU_MEDIA', 'Mediabehandling');
define('_JNEWS_MENU_HELP', 'Hjelp');
define('_JNEWS_MENU_CPANEL', 'Kontrollpanel');
define('_JNEWS_MENU_IMPORT', 'Import');
define('_JNEWS_MENU_EXPORT', 'Eksport');
define('_JNEWS_MENU_SUB_ALL', 'Meld på alle');
define('_JNEWS_MENU_UNSUB_ALL', 'Meld av alle');
define('_JNEWS_MENU_VIEW_ARCHIVE', 'Arkiv');
define('_JNEWS_MENU_PREVIEW', 'Forhåndsvis');
define('_JNEWS_MENU_SEND', 'Send');
define('_JNEWS_MENU_SEND_TEST', 'Send eposttest');
define('_JNEWS_MENU_SEND_QUEUE', 'Behandle kø');
define('_JNEWS_MENU_VIEW', 'Vis');
define('_JNEWS_MENU_COPY', 'Kopier');
define('_JNEWS_MENU_CRTL_PANEL', 'Kontrollpanel');
define('_JNEWS_MENU_LIST_NEW', 'Opprett liste');
define('_JNEWS_MENU_LIST_EDIT', 'Rediger en liste');
define('_JNEWS_MENU_BACK', 'Tilbake');
define('_JNEWS_MENU_INSTALL', 'Installasjon');
define('_JNEWS_MENU_TAB_SUM', 'Oppsumering');
define('_JNEWS_STATUS', 'Status');
define('_JNEWS_MENU_DEL_QUEUE' , 'Slett');

// messages
define('_JNEWS_ERROR', ' En feil oppstod!');
define('_JNEWS_SUB_ACCESS', 'Tilgangsrettigheter');
define('_JNEWS_DESC_CREDITS', 'Bidragsytere');
define('_JNEWS_DESC_INFO', 'Informasjon');
define('_JNEWS_DESC_HOME', 'Hjemmeside');
define('_JNEWS_DESC_MAILING', 'Distribusjonsliste');
define('_JNEWS_DESC_SUBSCRIBERS', 'Abonnenter');
define('_JNEWS_PUBLISHED', 'Publisert');
define('_JNEWS_UNPUBLISHED', 'Upublisert');
define('_JNEWS_DELETE', 'Slett');
define('_JNEWS_FILTER', 'Filter');
define('_JNEWS_UPDATE', 'Oppdater');
define('_JNEWS_SAVE', 'Lagre');
define('_JNEWS_CANCEL', 'Avbryt');
define('_JNEWS_NAME', 'Navn');
define('_JNEWS_EMAIL', 'Epost');

define('_JNEWS_SELECT', 'Velg');
define('_JNEWS_ALL', 'Alle');
define('_JNEWS_SEND_A', 'Send en ');
define('_JNEWS_SUCCESS_DELETED', ' velykket slettet');
define('_JNEWS_LIST_ADDED', 'Listen ble opprettet');
define('_JNEWS_LIST_COPY', 'Listen ble kopiert');
define('_JNEWS_LIST_UPDATED', 'Listen ble oppdatert');
define('_JNEWS_MAILING_SAVED', 'Brevene er lagret.');
define('_JNEWS_UPDATED_SUCCESSFULLY', 'vellykket oppdatert.');

### Subscribers information ###
//subscribe and unsubscribe info
define('_JNEWS_SUB_INFO', 'Abonnententinformasjon');
define('_JNEWS_VERIFY_INFO', 'Vennligst bekreft lenken du sendte inn, informasjon mangler. ');
define('_JNEWS_INPUT_NAME', 'Navn');
define('_JNEWS_INPUT_EMAIL', 'Epost');
define('_JNEWS_RECEIVE_HTML', 'Motta HTML?');
define('_JNEWS_TIME_ZONE', 'Tidssone');
define('_JNEWS_BLACK_LIST', 'Svarteliste');
define('_JNEWS_REGISTRATION_DATE', 'Registreringsdato');
define('_JNEWS_USER_ID', 'Bruker-id');
define('_JNEWS_DESCRIPTION', 'Beskrivelse');
define('_JNEWS_ACCOUNT_CONFIRMED', 'Deres e-post er nå bekreftet og har blitt aktivert.');
define('_JNEWS_SUB_SUBSCRIBER', 'Abonnent');
define('_JNEWS_SUB_PUBLISHER', 'Utgiver');
define('_JNEWS_SUB_ADMIN', 'Administrator');
define('_JNEWS_REGISTERED', 'Registrert');
define('_JNEWS_SUBSCRIPTIONS', 'Ditt abonnement');
define('_JNEWS_SEND_UNSUBCRIBE', 'Send melding ved avmelding');
define('_JNEWS_SEND_UNSUBCRIBE_TIPS', 'Klikk \'Ja\' for å sende en epost med bekreftelse av avmeldingen.');
define('_JNEWS_SUBSCRIBE_SUBJECT_MESS', 'Vennligst bekreft ditt abonnement. ');
define('_JNEWS_UNSUBSCRIBE_SUBJECT_MESS', 'Bekreftelse på avmelding');
define('_JNEWS_DEFAULT_SUBSCRIBE_MESS', 'Hei [NAME],<br />' .
		'Kun et steg igjen og du abonnerer på denne listen. Vennligst klikk på lenken for bekrefte ditt abonnement.' .
		'<br /><br />[CONFIRM]<br /><br />Kontakt vår nettredaktør om du har noen spørsmål.');
define('_JNEWS_DEFAULT_UNSUBSCRIBE_MESS', 'Dette er en epost for å bekrefte at du ikke lenger abonnerer på vårt nyhetsbrev. Vi takker for følget så langt, og skulle du noen gang ønske å bli abonnent igjen kan du enkelt melde deg på igjen via vår nettside. Kontakt vår nettredaktør om du har noen spørsmål.');
define('_JNEWS_HELLO', 'Hei ');

// jNews subscribers
define('_JNEWS_SIGNUP_DATE', 'Startdato');
define('_JNEWS_CONFIRMED', 'Bekreftet');
define('_JNEWS_SUBSCRIB', 'Abonnér');
define('_JNEWS_HTML', 'HTML-utsendelser');
define('_JNEWS_RESULTS', 'Resultater');
define('_JNEWS_SEL_LIST', 'Velg en liste');
define('_JNEWS_SEL_LIST_TYPE', '- Velg listetype -');	
define('_JNEWS_SUSCRIB_LIST', 'Liste med alle abonnenter');
define('_JNEWS_SUSCRIB_LIST_UNIQUE', 'Abonnenter av: ');
define('_JNEWS_NO_SUSCRIBERS', 'Ingen abonnenter ble funnet i denne listen.');
define('_JNEWS_COMFIRM_SUBSCRIPTION', 'En epostbekreftels er nå sent til deg.  Vennligst sjekk deres epost og klikk på lenken i eposten fra oss for å bekrefte påmeldingen din.<br />' .
		'Du må bekrefte deres epostadresse før abonnementet ditt aktiveres.');
define('_JNEWS_SUCCESS_ADD_LIST', 'Du har nå blitt lagt til i listen.');


 // Subcription info
define('_JNEWS_CONFIRM_LINK', 'Klikk her for å bekrefte ditt abonnement');
define('_JNEWS_UNSUBSCRIBE_LINK', 'Klikk her for å avslutte abonnementet ditt');
define('_JNEWS_UNSUBSCRIBE_MESS', 'deres epostadresse har blitt fjernet fra listen');

define('_JNEWS_QUEUE_SENT_SUCCESS', 'Alle planlagte utsendelser har blitt sent.');
define('_JNEWS_MALING_VIEW', 'Vis alle utsendelser');
define('_JNEWS_UNSUBSCRIBE_MESSAGE', 'Er du sikker på at du ønsker å avslutte abonnementet ditt?');
define('_JNEWS_MOD_SUBSCRIBE', 'Abonnér');
define('_JNEWS_SUBSCRIBE', 'Abonnér');
define('_JNEWS_UNSUBSCRIBE', 'Avslutt abonnement');
define('_JNEWS_VIEW_ARCHIVE', 'Vis arkiv');
define('_JNEWS_SUBSCRIPTION_OR', ' eller klikk her for å oppdatere deres opplysninger');
define('_JNEWS_EMAIL_ALREADY_REGISTERED', 'Denne epostadressen er allerede registrert.');
define('_JNEWS_SUBSCRIBER_DELETED', 'Abonnenten er slettet.');


### UserPanel ###
 //User Menu
define('_UCP_USER_PANEL', 'Brukerkontrollpanel');
define('_UCP_USER_MENU', 'Brukermeny');
define('_UCP_USER_CONTACT', 'Mine abonnementer');
 //jNews Cron Menu
define('_UCP_CRON_MENU', 'Cron-jobber');
define('_UCP_CRON_NEW_MENU', 'Ny Cron-jobb');
define('_UCP_CRON_LIST_MENU', 'List mine Cron-jobber');
 //jNews Coupon Menu
define('_UCP_COUPON_MENU', 'Kuponger');
define('_UCP_COUPON_LIST_MENU', 'Kupongliste');
define('_UCP_COUPON_ADD_MENU', 'Legg til kupong');

### lists ###
// Tabs
define('_JNEWS_LIST_T_GENERAL', 'Beskrivelse');
define('_JNEWS_LIST_T_LAYOUT', 'Utforming');
define('_JNEWS_LIST_T_SUBSCRIPTION', 'Abonnement');
define('_JNEWS_LIST_T_SENDER', 'Utgiverinformasjon');

define('_JNEWS_LIST_TYPE', 'Listetype');
define('_JNEWS_LIST_NAME', 'Listenavn');
define('_JNEWS_LIST_ISSUE', 'Utgavenr.');
define('_JNEWS_LIST_DATE', 'Sendingsdato');
define('_JNEWS_LIST_SUB', 'Nyhetsbrev-mal');
define('_JNEWS_ATTACHED_FILES', 'Vedlagte filer');
define('_JNEWS_SELECT_LIST', 'Velg en liste for å redigere denne.');

// Auto Responder box
define('_JNEWS_AUTORESP_ON', 'Listetype');
define('_JNEWS_AUTO_RESP_OPTION', 'Valg for \'autoutsendelse\'');
define('_JNEWS_AUTO_RESP_FREQ', 'Abonnenter kan velge hyppighet på utsendelser');
define('_JNEWS_AUTO_DELAY', 'Forsinkelse (i dager)');
define('_JNEWS_AUTO_DAY_MIN', 'Minimum hyppighet');
define('_JNEWS_AUTO_DAY_MAX', 'Maksimum hyppighet');
define('_JNEWS_FOLLOW_UP', 'Spesifiser oppfølging av \'autoutsendelse\'');
define('_JNEWS_AUTO_RESP_TIME', 'Abonnenter kan velge tid');
define('_JNEWS_LIST_SENDER', 'Utgiver for liste');

define('_JNEWS_LIST_DESC', 'Listebeskrivelse');
define('_JNEWS_LAYOUT', 'Utforming');
define('_JNEWS_SENDER_NAME', 'Avsendernavn');
define('_JNEWS_SENDER_EMAIL', 'Avsenderadresse');
define('_JNEWS_SENDER_BOUNCE', 'Svaraddress');
define('_JNEWS_LIST_DELAY', 'Forsinkelse');
define('_JNEWS_HTML_MAILING', 'HTML-utsending?');
define('_JNEWS_HTML_MAILING_DESC', '(om du endrer dette må du lagre og så åpne dette skjermbilde på nytt for å se endringer.)');
define('_JNEWS_HIDE_FROM_FRONTEND', 'Skjul på brukersiden?');
define('_JNEWS_SELECT_IMPORT_FILE', 'Velg fil som skal importeres');;
define('_JNEWS_IMPORT_FINISHED', 'Import fullført');
define('_JNEWS_DELETION_OFFILE', 'Sletting av fil');
define('_JNEWS_MANUALLY_DELETE', 'feilet, du må slette filen manuelt');
define('_JNEWS_CANNOT_WRITE_DIR', 'Kan ikke opprette mappe');
define('_JNEWS_NOT_PUBLISHED', 'Kunne ikke sende denne utsendelsen, listen er ikke publisert.');

//  List info box
define('_JNEWS_INFO_LIST_PUB', 'Klikk \'Ja\'for å publisere listen');
define('_JNEWS_INFO_LIST_NAME', 'Fyll inn navn for listen her. Du kan indentifisere listen med dette navnet.');
define('_JNEWS_INFO_LIST_DESC', 'Fyll inn en kort beskrivelse av listen her. Beskrivelsen vil være tilgjengelig for sidens besøkende.');
define('_JNEWS_INFO_LIST_SENDER_NAME', 'Fyll inn navn på avsender av denne utsendelsen. Dette navnet vil være synlig når abonnenter meldinger fra denne listen.');
define('_JNEWS_INFO_LIST_SENDER_EMAIL', 'Fyll inn epostadressen som meldingene vil bli sent fra.');
define('_JNEWS_INFO_LIST_SENDER_BOUNCED', 'Fyll inn epostadressen som brukerne kan svare til. Det anbefales at denne er samme som avsenderadressen, hvis ikke vil søppelpostfiltre kunne gi utsendelsen en søppelrangering.');
define('_JNEWS_INFO_LIST_AUTORESP', 'Velg utsendelsestype for denne listen.<br />' .
		'Nyhetsbrev: normale nyhetsbrev<br />' .
		'Autoutsendelse: lister som sendes automatisk fra nettsiden etter bestemte intervaller.');
define('_JNEWS_INFO_LIST_FREQUENCY', 'Tillat brukerne å velge hvor ofte de mottar utsendelser fra listen. Dette gir brukerne mer fleksibilitet.');
define('_JNEWS_INFO_LIST_TIME', 'Tillat brukerne å velge dere foretrukne tid på døgnet for mottak av utsendelser.');
define('_JNEWS_INFO_LIST_MIN_DAY', 'Definer hva som er minimum hyppighet for utsendelser som bruker kan velge å motta.');
define('_JNEWS_INFO_LIST_DELAY', 'Spesifiser forsinkelse mellom dette \'autoutsendelse\'et og det forrige.');
define('_JNEWS_INFO_LIST_DATE', 'Spesifiser dato for publisering av listen om du vil forsinke dette. <br /> FORMAT : ÅÅÅÅ-MM-DD HH:MM:SS');
define('_JNEWS_INFO_LIST_MAX_DAY', 'Definer hva som er maksimum hyppighet for utsendelser som bruker kan velge å motta.');
define('_JNEWS_INFO_LIST_LAYOUT', 'Fyll inn utforming for listen her. Du kan fylle inn hvilken som helst utforming.');
define('_JNEWS_INFO_LIST_SUB_MESS', 'Denne meldingen vil bli sent ut til nye abonnementer. Du kan selv angi teksten du ønsker her.');
define('_JNEWS_INFO_LIST_UNSUB_MESS', 'Denne meldingen vil bli sendt til abonnenten når han eller hun avbestiller sit abonnement. Du kan selv angi teksten du ønsker her.');
define('_JNEWS_INFO_LIST_HTML', 'Merker av hvis du ønsker å sende epost i HTML format. Abonnenter vil kunne spesifisere om de ønsker å motta epost i  HTML-format, eller bare tekst når man abonnere på en HTML-liste.');
define('_JNEWS_INFO_LIST_HIDDEN', 'Velg \'Ja\' for å skjule listen fra forsiden, brukere kan ikke abonnere men du har fortsatt muligheten for å sende epost.');
define('_JNEWS_INFO_LIST_JNEWS_AUTO_SUB', 'Ønsker du å automatisk legge brukere til i abonnementslisten? <br /> <B> Nye Brukere: </ B> vil registerer alle nye brukere som registrerer seg på nettstedet. <br /> <B> Alle brukere: </ B> vil registrere alle registrerte brukere i databasen. <br /> (alle muligheten støttes av Community Builder)');
define('_JNEWS_INFO_LIST_ACC_LEVEL', 'Velg tilgangsnivået for forsiden. Dette vil vise eller skjule epost til brukergruppene som ikke har tilgang til det, så de ikke har muligheten til å abonnere på en epostliste.');
define('_JNEWS_INFO_LIST_ACC_USER_ID', 'Velg tilgangsnivået til brukergruppe du ønsker å tillate redigering. Denne brukergruppen og de over vil være i stand til å redigere epost og sende den ut, enten fra forsiden eller baksiden.');
define('_JNEWS_INFO_LIST_FOLLOW_UP', 'Om du ønsker at denne autoutsendelsen skal fortsette på en annen liste etter siste melding, kan du spesifisere den neste her.');
define('_JNEWS_INFO_LIST_JNEWS_OWNER', 'Dette er ID for den som opprettet denne listen.');
define('_JNEWS_INFO_LIST_WARNING', 'Dette valget er kun tilgjengelig når listen er laget.');
define('_JNEWS_INFO_LIST_SUBJET', 'Emne for epost. Dette er emnet for meldingen abonnenten vil motta.');
define('_JNEWS_INFO_MAILING_CONTENT', 'Dette er teksten i eposten du vil sende.');
define('_JNEWS_INFO_MAILING_NOHTML', 'Angi her teksten i eposten du vil sende til abonnenter som velger ikke å motta HTML-utsendelser. <BR/> MERK: Hvis du lar den stå tom så vil jNews automatisk konvertere HTML-teksten til ren tekst.');
define('_JNEWS_INFO_MAILING_VISIBLE', 'Velg \'Ja\' for å vise sendte eposter på forsiden.');
define('_JNEWS_INSERT_CONTENT', 'Sett inn eksisterende innhold');

// Coupons
define('_JNEWS_SEND_COUPON_SUCCESS', 'Kupong sendt!');
define('_JNEWS_CHOOSE_COUPON', 'Velg en kupong');
define('_JNEWS_TO_USER', ' til denne bruker');

### Cron options
//drop down frequency(CRON)
define('_JNEWS_FREQ_CH1', 'Hver time');
define('_JNEWS_FREQ_CH2', 'Hver 6 time');
define('_JNEWS_FREQ_CH3', 'Hver 12 time');
define('_JNEWS_FREQ_CH4', 'Daglig');
define('_JNEWS_FREQ_CH5', 'Ukentlig');
define('_JNEWS_FREQ_CH6', 'Månedlig');
define('_JNEWS_FREQ_NONE', 'Ingen');
define('_JNEWS_FREQ_NEW', 'Ny bruker');
define('_JNEWS_FREQ_ALL', 'Alle brukere');

//Label CRON form
define('_JNEWS_LABEL_FREQ', 'jNews Cron-jobber?');
define('_JNEWS_LABEL_FREQ_TIPS', 'Velg \'Ja\' hvis du vil bruke dette for en jNews Cron-jobber, ikke for noen annen Cron-jobb.<br />' .
        'Om du velger \'Ja\' behøver du ikke å spesifisere en Cron-jobbadresse, den bli lagt til automatisk.');
define('_JNEWS_SITE_URL', 'deres nettadressen');
define('_JNEWS_CRON_FREQUENCY', 'Hyppighet for Cron-jobb');
define('_JNEWS_STARTDATE_FREQ', 'Start dato');
define('_JNEWS_LABELDATE_FREQ', 'Angi dato');
define('_JNEWS_LABELTIME_FREQ', 'Angi tid');
define('_JNEWS_CRON_URL', 'Cron-jobb URL');
define('_JNEWS_CRON_FREQ', 'Hyppighet');
define('_JNEWS_TITLE_CRONLIST', 'Cron-jobbliste');
define('_NEW_LIST', 'Lag en ny liste');

//title CRON form
define('_JNEWS_TITLE_FREQ', 'Rediger Cron-jobb');
define('_JNEWS_CRON_SITE_URL', 'Angi en gyldig nettadresse som starter med http://');

### Mailings ###
define('_JNEWS_MAILING_ALL', 'Alle utsendelser');
define('_JNEWS_EDIT_A', 'Editer en ');
define('_JNEWS_SELCT_MAILING', 'Vennligst velg en epost liste i nedtrekksmenyen for å legge til en ny utsendelse.');
define('_JNEWS_VISIBLE_FRONT', 'Vis på forsiden');

// mailer
define('_JNEWS_SUBJECT', 'Emne');
define('_JNEWS_CONTENT', 'Innhold');
define('_JNEWS_NAMEREP', '[NAME] = Denne vil bli erstattet med navnet som abonnenten la inn, du vil kunne sende mer personlige epost med dette.<br />');
define('_JNEWS_FIRST_NAME_REP', '[FIRSTNAME] = Denne vil bli erstattet med fornavn som abonnenten la inn.<br />');
define('_JNEWS_LOADMODINFO', '{module=id} = This will be replaced by the Joomla module where id is equal to id of the joomla module. For example {module=1}.<br /> The modules can only be loaded through the cron task. <br />');
define('_JNEWS_NONHTML', 'Ren tekst versjon');
define('_JNEWS_ATTACHMENTS', 'Vedlegg');
define('_JNEWS_SELECT_MULTIPLE', 'Hold Ctrl (eller Com) nede for å velde flere vedlegg.<br />' .
        'Filene som vises i listen over vedlegg finnes i mappen for vedlegg, du kan forandre denne plassen for mappen i \'Konfigurasjonen -> Epost\' for AcaJoom.');
define('_JNEWS_CONTENT_ITEM', 'Innholdselementer');
define('_JNEWS_SENDING_EMAIL', 'Sender epost');
define('_JNEWS_MESSAGE_NOT', 'Meldingen kunne ikke sendes');
define('_JNEWS_MAILER_ERROR', 'Feil ved utsending');
define('_JNEWS_MESSAGE_SENT_SUCCESSFULLY', 'Meldingen er sendt');
define('_JNEWS_SENDING_TOOK', 'Denne utsendelsen tok');
define('_JNEWS_SECONDS', 'sekunder');
define('_JNEWS_NO_ADDRESS_ENTERED', 'Ingen epostadresse eller abonnent');
define('_JNEWS_CHANGE_SUBSCRIPTIONS', 'Endre');
define('_JNEWS_CHANGE_EMAIL_SUBSCRIPTION', 'Administrer ditt abonnement');
define('_JNEWS_WHICH_EMAIL_TEST', 'Skriv inn epost adresse og navn for test av melding eller velg forhåndsvisning');
define('_JNEWS_SEND_IN_HTML', 'Send som HTML (for html utsendelser)?');
define('_JNEWS_VISIBLE', 'Synlig');
define('_JNEWS_INTRO_ONLY', 'Bare innledning');
define('_JNEWS_TEST' , 'zzzjhentest');

// stats
define('_JNEWS_GLOBALSTATS', 'Total status');
define('_JNEWS_DETAILED_STATS', 'Enkelt status');
define('_JNEWS_MAILING_LIST_DETAILS', 'Listedetaljer');
define('_JNEWS_SEND_IN_HTML_FORMAT', 'Send som HTML-format');
define('_JNEWS_VIEWS_FROM_HTML', 'Visning (av HTML-sendinger)');
define('_JNEWS_SEND_IN_TEXT_FORMAT', 'Send som tekst format');
define('_JNEWS_HTML_READ', 'HTML lest');
define('_JNEWS_HTML_UNREAD', 'HTML ikke lest');
define('_JNEWS_TEXT_ONLY_SENT', 'Bare tekst');

// Configuration panel
// main tabs
define('_JNEWS_MAIL_CONFIG', 'Epost');
define('_JNEWS_LOGGING_CONFIG', 'Logger og status');
define('_JNEWS_SUBSCRIBER_CONFIG', 'Abonnenter');
define('_JNEWS_MISC_CONFIG', 'Diverse');
define('_JNEWS_MAIL_SETTINGS', 'Epost innstillinger');
define('_JNEWS_MAILINGS_SETTINGS', 'Sendingsinnstillinger');
define('_JNEWS_SUBCRIBERS_SETTINGS', 'Abonnentinnstillinger');
define('_JNEWS_CRON_SETTINGS', 'Cron-jobb innstillinger');
define('_JNEWS_SENDING_SETTINGS', 'Sendeinnstillinger');
define('_JNEWS_STATS_SETTINGS', 'Statistikkinnstillinger');
define('_JNEWS_LOGS_SETTINGS', 'Logginnstillinger');
define('_JNEWS_MISC_SETTINGS', 'Diverse innstillinger');
// mail settings
define('_JNEWS_SEND_MAIL_FROM', 'Returadresse<br />(brukes som returadresse for alle deres meldinger)');
define('_JNEWS_SEND_MAIL_NAME', 'Avsendernavn');
define('_JNEWS_MAILSENDMETHOD', 'Sendingsmetode');
define('_JNEWS_SENDMAILPATH', 'Sti til sendmail');
define('_JNEWS_SMTPHOST', 'SMTP host');
define('_JNEWS_SMTPAUTHREQUIRED', 'SMTP godkjenning kreves');
define('_JNEWS_SMTPAUTHREQUIRED_TIPS', 'Velg \'Ja\' hvis deres SMTP-server krever godkjenning');
define('_JNEWS_SMTPUSERNAME', 'SMTP brukernavn');
define('_JNEWS_SMTPUSERNAME_TIPS', 'Skriv inn SMTP-brukernavn når deres SMTP-server krever godkjenning');
define('_JNEWS_SMTPPASSWORD', 'SMTP passord');
define('_JNEWS_SMTPPASSWORD_TIPS', 'Skriv inn SMTP-passord når deres SMTP-server krever godkjenning');
define('_JNEWS_USE_EMBEDDED', 'Bruk innebygde bilder');
define('_JNEWS_USE_EMBEDDED_TIPS', 'Velg \'Ja\' hvis bildene i det vedlagte innholdet bør være innebygd i epost for HTML-meldinger, eller nei får å bruke standard bilde lenke som linker til bildene på nettstedet.');
define('_JNEWS_UPLOAD_PATH', 'Opplasting/vedlegges sti');
define('_JNEWS_UPLOAD_PATH_TIPS', 'Du kan angi en mappe for opplasting.<br />' .
        'Forsikre deg om at mappen finnes, hvis ikke må du opprette den.');

// subscribers settings
define('_JNEWS_ALLOW_UNREG', 'Tillat uregistrerte');
define('_JNEWS_ALLOW_UNREG_TIPS', 'Velg \'Ja\' for at brukere kan abonnere uten at de er registrerte.');
define('_JNEWS_REQ_CONFIRM', 'Krever bekreftelse');
define('_JNEWS_REQ_CONFIRM_TIPS', 'Velg \'Ja\' for at uregistrerte abonnenter skal bekrefte sin epost adresse.');
define('_JNEWS_SUB_SETTINGS', 'Abonnement innstillinger');
define('_JNEWS_SUBMESSAGE', 'Abonnentens epost adresse');
define('_JNEWS_SUBSCRIBE_LIST', 'Abonner på en liste');

define('_JNEWS_USABLE_TAGS', 'Merker som kan brukes');
define('_JNEWS_NAME_AND_CONFIRM', '<b>[CONFIRM]</b> = Dette lager en link som abonnenten kan bekrefte sitt abonnement. Dette er <strong>påkrevet</strong> for at jNews fungere.<br />'
.'<br />[NAME] = Denne vil bli erstattet med navnet som abonnenten la inn, du vill sende en mer personlig epost med dette.<br />'
.'<br />[FIRSTNAME] = Denne vil bli erstattet med fornavn på abonnenten, Fornavn er definert som første ordet i navnet som abonnenten la inn.<br />');
define('_JNEWS_CONFIRMFROMNAME', 'Bekreftelse fra navn');
define('_JNEWS_CONFIRMFROMNAME_TIPS', 'Legg inn Fra navn som vises i bekreftelsens meldingen.');
define('_JNEWS_CONFIRMFROMEMAIL', 'Bekreftelse fra epost adresse');
define('_JNEWS_CONFIRMFROMEMAIL_TIPS', 'Legg inn epost adressen som vises i bekreftelsens meldingen.');
define('_JNEWS_CONFIRMBOUNCE', 'Retur adresse');
define('_JNEWS_CONFIRMBOUNCE_TIPS', 'Legg inn retur epost adressen som vises i bekreftelsens meldingen.');
define('_JNEWS_HTML_CONFIRM', 'HTML-bekreftelse');
define('_JNEWS_HTML_CONFIRM_TIPS', 'Velg \'Ja\' hvis bekreftelsens meldingen skal være HTML hvis brukeren tillater HTML.');
define('_JNEWS_TIME_ZONE_ASK', 'Spør om tidssone');
define('_JNEWS_TIME_ZONE_TIPS', 'Velg \'Ja\' hvis du vill spørre brukeren om sin tidssone. Utsendelser sendes basert på tidssonen når dette er aktuelt');

 // Cron Set up
define('_JNEWS_AUTO_CONFIG', 'Cron');
define('_JNEWS_TIME_OFFSET_URL', 'Klikk her for å sette opp tidssonen i \'Konfigurasjon -> Tjener\' ');
define('_JNEWS_TIME_OFFSET_TIPS', 'Sett opp deres servers tidsavvik slik at dato og til et rett');
define('_JNEWS_TIME_OFFSET', 'Tidsavvik');
define('_JNEWS_CRON_DESC', '<br />Ved bruke av cron-jobb funksjonen kan du sette opp automatisert oppgave for deres Joomlanettside!<br />' .
        'For å sette opp crontab må du legge til i kontrollpanelet følgende kommando:<br />' .
        '<b>' . ACA_JPATH_LIVE . '/index2.php?option=com_jnewsletter&act=cron</b> ' .
        '<br /><br />Hvis du trenger hjelp til å sette den opp eller har problemer vennligst kontakt vårt forum <a href="http://www.ijoobi.com" target="_blank">http://www.ijoobi.com</a>');
// sending settings
define('_JNEWS_PAUSEX', 'Pause på x antall sekunder for angitte antall eposter');
define('_JNEWS_PAUSEX_TIPS', 'Legg inn antall sekunder jNews skal gi SMTP serveren tid til å sende meldinger før neste angitte antall meldinger.');
define('_JNEWS_EMAIL_BET_PAUSE', 'Antall eposter før pause');
define('_JNEWS_EMAIL_BET_PAUSE_TIPS', 'Antall eposter som sendes før pause.');
define('_JNEWS_WAIT_USER_PAUSE', 'Vent på operatør ved pause');
define('_JNEWS_WAIT_USER_PAUSE_TIPS', 'Om skripet skal vente på operatør i mellom settene med eposter .');
define('_JNEWS_SCRIPT_TIMEOUT', 'Tidsavbrudd for skripet');
define('_JNEWS_SCRIPT_TIMEOUT_TIPS', 'Antall minuttet skripet skal ha mulighet kjøre (0 for uendelig).');
// Stats settings
define('_JNEWS_ENABLE_READ_STATS', 'Aktiver statistikk over leste eposter');
define('_JNEWS_ENABLE_READ_STATS_TIPS', 'Velg \'Ja\' hvis du vil logge antall som har lest eposten. Dette er kun mulig for HTML-eposter');
define('_JNEWS_LOG_VIEWSPERSUB', 'Logg antall lest pr. abonnent');
define('_JNEWS_LOG_VIEWSPERSUB_TIPS', 'Velg \'Ja\' for å logge antall leste pr abonnent. Dette er kun mulig for HTML-eposter');
// Logs settings
define('_JNEWS_DETAILED', 'Detaljerte logger');
define('_JNEWS_SIMPLE', 'Forenklede logger');
define('_JNEWS_DIAPLAY_LOG', 'Vis logger');
define('_JNEWS_DISPLAY_LOG_TIPS', 'Velg \'Ja\' hvis du vil se loggen under sending.');
define('_JNEWS_SEND_PERF_DATA', 'Send ut ytelse');
define('_JNEWS_SEND_PERF_DATA_TIPS', 'Velg \'Ja\' hvis du vil tillate jNews å sende ut ANONYME rapporter om konfigurasjonen, antall abonnenter på en liste og tiden det tok å sende post. Dette vil gi oss en ide om jNews ytelse og vil HJELP OSS å forbedre jNews i den fremtidige utviklingen.');
define('_JNEWS_SEND_AUTO_LOG', 'Utsendingslogg for autoutsendelser');
define('_JNEWS_SEND_AUTO_LOG_TIPS', 'Velg \'Ja\' hvis du ønsker å sende en epost logg hver gang køen er behandlet. VARSEL: Dette kan resultere i et stort antall eposter.');
define('_JNEWS_SEND_LOG', 'Sendt logg');
define('_JNEWS_SEND_LOG_TIPS', 'Hvorvidt en logg av forsendelsen bør bli sendt til epostadressen til brukeren som sendte eposten.');
define('_JNEWS_SEND_LOGDETAIL', 'Sent logg detaljer');
define('_JNEWS_SEND_LOGDETAIL_TIPS', 'Detaljert inkluderer suksess eller fiasko for hver abonnent og en oversikt over informasjonen. Eller bare en oversikt.');
define('_JNEWS_SEND_LOGCLOSED', 'Send logg dersom forbindelse brytes');
define('_JNEWS_SEND_LOGCLOSED_TIPS', 'Hvis ja vil brukeren som sendte eposten fremdeles få en rapport på epost.');
define('_JNEWS_SAVE_LOG', 'Lagre logg');
define('_JNEWS_SAVE_LOG_TIPS', 'Hvorvidt en logg av sendingen bør legges til loggfilen.');
define('_JNEWS_SAVE_LOGDETAIL', 'Lagre logg med detaljer');
define('_JNEWS_SAVE_LOGDETAIL_TIPS', 'Detaljert inkluderer suksess eller fiasko for hver abonnent og en oversikt over informasjonen. Eller bare en oversikt.');
define('_JNEWS_SAVE_LOGFILE', 'Lagre logge fil');
define('_JNEWS_SAVE_LOGFILE_TIPS', 'Fil som logginformasjon blir lagt til. Denne filen kan bli ganske store.');
define('_JNEWS_CLEAR_LOG', 'Slett logg');
define('_JNEWS_CLEAR_LOG_TIPS', 'Tømmer loggfilen.');

### control panel
define('_JNEWS_CP_LAST_QUEUE', 'Siste fullførte kø');
define('_JNEWS_CP_TOTAL', 'Totalt');
define('_JNEWS_MAILING_COPY', 'Utsendelse kopiert ok!');

// Miscellaneous settings
define('_JNEWS_SHOW_GUIDE', 'Vis veiviser');
define('_JNEWS_SHOW_GUIDE_TIPS', 'Vis veiviser ved oppstart slik at nye brukere får hjelp til å lage det første nyhetsbrevet, autoutsendelser og oppsett av jNews riktig.');
define('_JNEWS_AUTOS_ON', 'Bruk autoutsendelser');
define('_JNEWS_AUTOS_ON_TIPS', 'Velg \'Nei\' hvis du ikke vil bruke autoutsendelser, alle valg for autoutsendelser vil da bli deaktivert.');
define('_JNEWS_NEWS_ON', 'Bruk nyhetsbrev');
define('_JNEWS_NEWS_ON_TIPS', 'Velg \'Nei\' hvis du ikke vil bruke nyhetbrev, alle nyhetsbrevsvalg vil bli deaktivert.');
define('_JNEWS_SHOW_TIPS', 'Vis tips');
define('_JNEWS_SHOW_TIPS_TIPS', 'Vis tips, for å hjelpe brukere med jNews mer effektivt.');
define('_JNEWS_SHOW_FOOTER', 'Vis bunntekst');
define('_JNEWS_SHOW_FOOTER_TIPS', 'Hvorvidt kopirett skal vises som bunntekst.');
define('_JNEWS_SHOW_LISTS', 'Vis lister på forsiden');
define('_JNEWS_SHOW_LISTS_TIPS', 'Når brukeren ikke er registrert vise en liste over listene de kan abonnere på med arkiv-knappen for nyhetsbrev eller bare logginn, slik at de må registrere seg.');
define('_JNEWS_CONFIG_UPDATED', 'Konfigurasjonen har blitt oppdatert!');
define('_JNEWS_UPDATE_URL', 'Oppdateringsadresse');
define('_JNEWS_UPDATE_URL_WARNING', 'VARSEL! Endre ikke denne URL med mindre du har blitt bedt om å gjøre det av jNews.<br />');
define('_JNEWS_UPDATE_URL_TIPS', 'For eksempel: http://www.ijoobi.com/update/ (inkludert den avsluttende / )');

// module
define('_JNEWS_EMAIL_INVALID', 'Den epostadressen du oppga er ugyldig.');
define('_JNEWS_REGISTER_REQUIRED', 'Vennligst registrer deg på siden før du kan signere for en liste.');

// Access level box
define('_JNEWS_OWNER', 'Listen er laget av:');
define('_JNEWS_ACCESS_LEVEL', 'Sett tilgangsnivået for listen');
define('_JNEWS_ACCESS_LEVEL_OPTION', 'Valg av tilgangsnivå');
define('_JNEWS_USER_LEVEL_EDIT', 'Sett brukernivå for å redigere en adresseliste (enten fra forsiden og baksiden) ');

//  drop down options
define('_JNEWS_AUTO_DAY_CH1', 'Daglig');
define('_JNEWS_AUTO_DAY_CH2', 'Daglig  uten helg');
define('_JNEWS_AUTO_DAY_CH3', 'Annen vær dag');
define('_JNEWS_AUTO_DAY_CH4', 'Annen vær dag uten helg');
define('_JNEWS_AUTO_DAY_CH5', 'Ukentlig');
define('_JNEWS_AUTO_DAY_CH6', 'Hver andre uke');
define('_JNEWS_AUTO_DAY_CH7', 'Måntlig');
define('_JNEWS_AUTO_DAY_CH9', 'Årlig');
define('_JNEWS_AUTO_OPTION_NONE', 'Ingen');
define('_JNEWS_AUTO_OPTION_NEW', 'Ny bruker');
define('_JNEWS_AUTO_OPTION_ALL', 'Alle brukere');

//
define('_JNEWS_UNSUB_MESSAGE', 'Oppsigelsens epost ');
define('_JNEWS_UNSUB_SETTINGS', 'Oppsigelsens innstillinger');
define('_JNEWS_AUTO_ADD_NEW_USERS', 'Skal brukere automatisk bli abonnent?');

// Update and upgrade messages
define('_JNEWS_NO_UPDATES', 'Det er ingen oppdateringer tilgjengelig.');
define('_JNEWS_VERSION', 'jNews Versjon');
define('_JNEWS_NEED_UPDATED', 'Filer som trenger å bli oppdatert:');
define('_JNEWS_NEED_ADDED', 'Filer som må legges til:');
define('_JNEWS_NEED_REMOVED', 'Filer som må fjernes:');
define('_JNEWS_FILENAME', 'Filnavn:');
define('_JNEWS_CURRENT_VERSION', 'Gjeldene versjon:');
define('_JNEWS_NEWEST_VERSION', 'Nyest versjon:');
define('_JNEWS_UPDATING', 'Oppdaterer');
define('_JNEWS_UPDATE_UPDATED_SUCCESSFULLY', 'Filene har blitt oppdatert.');
define('_JNEWS_UPDATE_FAILED', 'Oppdatering mislykt!');
define('_JNEWS_ADDING', 'Legge til');
define('_JNEWS_ADDED_SUCCESSFULLY', 'Lagt til ok.');
define('_JNEWS_ADDING_FAILED', 'Lagt til mislykktet!');
define('_JNEWS_REMOVING', 'Fjerne');
define('_JNEWS_REMOVED_SUCCESSFULLY', 'Fjerne ok.');
define('_JNEWS_REMOVING_FAILED', 'Fjerning mislykket!');
define('_JNEWS_INSTALL_DIFFERENT_VERSION', 'Installer en annen versjon');
define('_JNEWS_CONTENT_ADD', 'Legg til innhold');
define('_JNEWS_UPGRADE_FROM', 'Importer data (nyhetsbrev og abonnent informasjon) fra ');
define('_JNEWS_UPGRADE_MESS', 'Det er ingen fare for eksisterende data. <br /> Denne prosessen vil bare importere data til jNews databasen.');
define('_JNEWS_CONTINUE_SENDING', 'Fortsett å sende');

// jNews message
define('_JNEWS_UPGRADE1', 'Du kan enkelt importere brukere og nyhetsbrev fra ');
define('_JNEWS_UPGRADE2', ' til jNews i kontrolpanelet -> import.');
define('_JNEWS_UPDATE_MESSAGE', 'En ny versjon av jNews er tilgjengelig! ');
define('_JNEWS_UPDATE_MESSAGE_LINK', 'Klikk her for å oppdatere!');
define('_JNEWS_CRON_SETUP', 'In order for the autoresponders to be sent you need to setup a cron task.');
define('_JNEWS_NO_SERVER', 'Oppdateringsserveren var ikke tilgjengelig, vennligst prøv igjen senere.');
define('_JNEWS_MOD_PUB', 'jNews-modulen er ikke publisert.');
define('_JNEWS_MOD_PUB_LINK', 'Klikk her for å publisere den!');
define('_JNEWS_IMPORT_SUCCESS', 'Velykket importert');
define('_JNEWS_IMPORT_EXIST', 'abonnent finnes allerede i databasen');

// jNews\'s Guide
define('_JNEWS_GUIDE', '\'s veiviser');
define('_JNEWS_GUIDE_FIRST_JNEWS_STEP', '<p>jNews har mange flotte funksjoner og denne veiviseren vil veilede deg gjennom fire enkle trinn for å komme i gang med å sende nyhetsbrev og autoutsendelse!<p />');
define('_JNEWS_GUIDE_FIRST_JNEWS_STEP_DESC', 'Først må du legge til en liste. En liste kan være to typer, enten et nyhetsbrev eller en autoutsendelse.' .
		'  I en liste definerer man alle de ulike parametrene for å aktivere sending av nyhetsbrev eller autoutsendelse: avsenders navn, utsende, abonnentens velkomstmelding, etc...
<br /><br />Du kan sette opp din første liste her: <a href="index2.php?option=com_jnewsletter&act=list"> opprette en liste </ a>, og klikk \'Ny\'-knappen.');
define('_JNEWS_GUIDE_FIRST_JNEWS_STEP_UPGRADE', 'jNews gir deg en enkel måte å importere alle data fra en tidligere nyhetsbrevs system på<br />' .
    ' Gå til oppdateringspanelet og velg din forrige nyhetsbrevssystem for å importere alle dine nyhetsbrev og abonnenter.<br /><br />' .
		'<span style="color:#FF5E00;" >VIKTIG: Importen er uten risiko, og påvirker ikke på noen måte dataene i ditt forrige nyhetsbrevs systemet</span><br />' .
 		'Etter importen vil du kunne administrere abonnenter og utsendelser direkte fra jNews.<br /><br />');
define('_JNEWS_GUIDE_SECOND_JNEWS_STEP', 'Fantastisk din første liste er satt opp! Nå kan du skrive din første %s. Hvis du vil opprette den gå til: ');
define('_JNEWS_GUIDE_SECOND_JNEWS_STEP_AUTO', 'Autoutsendelse administrasjon');
define('_JNEWS_GUIDE_SECOND_JNEWS_STEP_NEWS', 'Nyhetsbrev administrasjon');
define('_JNEWS_GUIDE_SECOND_JNEWS_STEP_FINAL', ' og velg din %s. <br /> Og så velger du %s i nedtrekksmenyen.  Lag din første forsendelse ved å trykke ny ');

define('_JNEWS_GUIDE_THRID_JNEWS_STEP_NEWS', 'Før du sender dit første nyhetsbrevet kan det være lurt å sjekke epostinnstillingene først.  ' .
		'Gå til <a href="index2.php?option=com_jnewsletter&act=configuration" >konfigurasjonssiden</a> for å kontrollere epostinnstillingene. <br />');
define('_JNEWS_GUIDE_THRID2_JNEWS_STEP_NEWS', '<br />Når du er klar gå tilbake til nyhetsbrev menyen, velg din forsendelse og klikk \'Send\'');

define('_JNEWS_GUIDE_THRID_JNEWS_STEP_AUTOS', 'Før din autoutsendelse kan bli sendt må du først sette opp en cron-oppgave på serveren din. ' .
        ' Vennligst se Cron fanen i konfigurasjon panel.' .
        ' <a href="index2.php?option=com_jnewsletter&act=configuration" >klikk her..</a> for å lære hvordan man sette opp en cron-jobb. <br />');

define('_JNEWS_GUIDE_MODULE', ' <br />Kontroller også at du har publisert jNews modulen slik at folk kan melde seg på nyhetslistene.');

define('_JNEWS_GUIDE_FOUR_JNEWS_STEP_NEWS', ' Nå kan du også sette opp en auto-responder.');
define('_JNEWS_GUIDE_FOUR_JNEWS_STEP_AUTOS', ' Nå kan du også sette opp et nyhetsbrev.');

define('_JNEWS_GUIDE_FOUR_JNEWS_STEP', '<p><br />Gratulerer! Du er nå klar til å effektivt kommunisere med besøkende og brukere. Denne veiviseren vil ende så snart du har oppgitt en annen epostadresse eller du kan slå den av i <a href="index2.php?option=com_jnewsletter&act=configuration"> konfigurasjonspanelet</a>.' .
        '<br /><br />  Hvis du har noen spørsmål mens du bruker jNews, kan disse henvises det til ' .
        '<a target="_blank" href="http://www.ijoobi.com/index.php?option=com_content&Itemid=72&view=category&layout=blog&id=29&limit=60" >dokumentasjon</a>. ' .
        ' Du kan også finne mye informasjon om hvordan du effektivt kan kommunisere med dine abonnenter her <a href="http://www.ijoobi.com/" target="_blank" >www.ijoobi.com</a>.' .
        '<p /><br /><b>Takk for at du valgte jNews. Din kommunikasjonspartner!</b> ');
define('_JNEWS_GUIDE_TURNOFF', 'Veiviseren er nå slått av!');
define('_JNEWS_STEP', 'STEG ');

// jNews Install
define('_JNEWS_INSTALL_CONFIG', 'jNews innstillinger');
define('_JNEWS_INSTALL_SUCCESS', 'Vellykket installert');
define('_JNEWS_INSTALL_ERROR', 'Installasjonsfeil');
define('_JNEWS_INSTALL_BOT', 'jNews Plugin (Bot)');
define('_JNEWS_INSTALL_MODULE', 'jNews Modul');
//Others
define('_JNEWS_JAVASCRIPT', '!Varsel! Javascript må være aktivert i nettleseren din.');
define('_JNEWS_EXPORT_TEXT', 'Eksporten av abonnenter er basert på den listen du valgte. <br />Eksporter abonnenter fra listen');
define('_JNEWS_IMPORT_TIPS', 'Importer abonnenter. Informasjonen i filen må følgende format: <br />' .
        'Name,email,receiveHTML(0/1),<span style="color: rgb(255, 0, 0);">bekreft(0/1)</span>');
define('_JNEWS_SUBCRIBER_EXIT', 'er allerede en abonnent');
define('_JNEWS_GET_STARTED', 'Klikk her for å starte!');

//News since 1.0.1
define('_JNEWS_WARNING_1011', 'Varsel: 1011: Oppdateringen vil ikke kunne fungere pga. din servers restriksjoner.');
define('_JNEWS_SEND_MAIL_FROM_TIPS', 'Velg hvilken epostadresse som skal vises som avsender.');
define('_JNEWS_SEND_MAIL_NAME_TIPS', 'Velg hvilket navn som skal vises som avsender.');
define('_JNEWS_MAILSENDMETHOD_TIPS', 'Velg hvilke epostfunksjon du vil bruke: PHP mail funksjon, <span>Sendmail</span> eller SMTP Server.');
define('_JNEWS_SENDMAILPATH_TIPS', 'Dette er den katalogen til epost serveren');
define('_JNEWS_LIST_T_TEMPLATE', 'Mal');
define('_JNEWS_NO_MAILING_ENTERED', 'Ingen forsendelse valgt');
define('_JNEWS_NO_LIST_ENTERED', 'Ingen liste valgt');
define('_JNEWS_SENT_MAILING', 'Sendte forsendelser');
define('_JNEWS_SELECT_FILE', 'Vennligst velg en fil for ');
define('_JNEWS_LIST_IMPORT', 'Velg listen(e) du vil at abonnentene skal bli assosiert med.');
define('_JNEWS_PB_QUEUE', 'Abonnenten lagt til men problemer å koble ham / henne til listen(e). Kontroller dette manuelt.');
define('_JNEWS_UPDATE_MESS' , '');
define('_JNEWS_UPDATE_MESS1', 'Å oppdatere er anbefalt!');
define('_JNEWS_UPDATE_MESS2', 'Patch og mindre oppdateringer.');
define('_JNEWS_UPDATE_MESS3', 'Ny utgivelse.');
define('_JNEWS_UPDATE_MESS5', 'Joomla 1.5 må oppdateres.');
define('_JNEWS_UPDATE_IS_AVAIL', ' er tilgjengelig!');
define('_JNEWS_NO_MAILING_SENT', 'Ingen forsendelse sendt!');
define('_JNEWS_SHOW_LOGIN', 'Vis innlogging');
define('_JNEWS_SHOW_LOGIN_TIPS', 'Velg \'Ja\' for å vise jNews logging skjema på forsiden slik at brukere kan registrere seg på nettstedet.');
define('_JNEWS_LISTS_EDITOR', 'Liste beskrivelses Editor');
define('_JNEWS_LISTS_EDITOR_TIPS', 'Velg \'Ja\' for å bruke en HTML-editor å redigere beskrivelsen av en liste.');
define('_JNEWS_SUBCRIBERS_VIEW', 'Vis abonnenter');

//News since 1.0.2
define('_JNEWS_FRONTEND_SETTINGS', 'Innstillinger for forsiden');
define('_JNEWS_SHOW_LOGOUT', 'Vis \'Logg ut\'-knapp');
define('_JNEWS_SHOW_LOGOUT_TIPS', 'Velg \'Ja\' for å vise en \'Logg ut\'-knapp på forsiden i jNews-modulen.');

//News since 1.0.3 CB integration
define('_JNEWS_CONFIG_INTEGRATION', 'Integrasjon');
define('_JNEWS_CB_INTEGRATION', 'Community Builder Integrasjon');
define('_JNEWS_INSTALL_PLUGIN', 'Community Builder Plugin (jNews Integrasjon) ');
define('_JNEWS_CB_PLUGIN_NOT_INSTALLED', 'jNews Plugin for Community Builder er ikke installert!');
define('_JNEWS_CB_PLUGIN', 'Lister ved registrering');
define('_JNEWS_CB_PLUGIN_TIPS', 'Velg \'Ja\' for å vise postlister i Community Builders registreringsskjema');
define('_JNEWS_CB_LISTS', 'ID for lister');
define('_JNEWS_CB_LISTS_TIPS', 'DETTE ER ET OBLIGATORISK FELT. Skriv inn ID-nummeret til listene du ønsker å tillate brukere å abonnere på atskilt med komma, (0 viser alle listene)');
define('_JNEWS_CB_INTRO', 'Innlednings tekst');
define('_JNEWS_CB_INTRO_TIPS', 'Teksten vil vises før oppføringen av listen. VED TOM VISES INGENTING. Du kan bruke HTML-koder for å tilpasse utseendet.');
define('_JNEWS_CB_SHOW_NAME', 'Vis listens navn');
define('_JNEWS_CB_SHOW_NAME_TIPS', 'Velg og vise eller ikke vise navnet på listen etter innledningen.');
define('_JNEWS_CB_LIST_DEFAULT', 'Velg listen som standard');
define('_JNEWS_CB_LIST_DEFAULT_TIPS', 'Velg om du vil at det skal være krysset av for alle litene som standard.');
define('_JNEWS_CB_HTML_SHOW', 'Vis motta HTML');
define('_JNEWS_CB_HTML_SHOW_TIPS', 'Sett Ja for å tillate brukere å bestemme om de ønsker HTML eposter eller ikke. Sett Nei for å motta html som standard.');
define('_JNEWS_CB_HTML_DEFAULT', 'Motta HTML som standard');
define('_JNEWS_CB_HTML_DEFAULT_TIPS', 'Angi dette alternativet for å vise standard HTML innstillinger. Hvis Vis motta HTML er satt til Nei vil dette valget bli standard.');

// Since 1.0.4
define('_JNEWS_BACKUP_FAILED', 'Kunne ikke sikkerhetskopiere filen! Fil ikke erstattet.');
define('_JNEWS_BACKUP_YOUR_FILES', 'Den gamle versjonen av filene er sikkerhetskopiert til følgende katalog:');
define('_JNEWS_SERVER_LOCAL_TIME', 'Servers lokale tid');
define('_JNEWS_SHOW_ARCHIVE', 'Vis arkiv-knappen');
define('_JNEWS_SHOW_ARCHIVE_TIPS', 'Velg \'Ja\' for å vise arkiv-knappen på forsiden på nyhetsbrevslistene');
define('_JNEWS_LIST_OPT_TAG', 'Merker');
define('_JNEWS_LIST_OPT_IMG', 'Bilde');
define('_JNEWS_LIST_OPT_CTT', 'Innhold');
define('_JNEWS_IP_TIPS', 'Abonnentens IP');
define('_JNEWS_INPUT_NAME_TIPS', 'Skriv inn ditt fulle navn (fornavn først)');
define('_JNEWS_INPUT_EMAIL_TIPS', 'Skriv inn din epostadresse (Sørg for at dette er en gyldig epostadresse hvis du ønsker å motta våre utsendelser.)');
define('_JNEWS_RECEIVE_HTML_TIPS', 'Velg \'Ja\' hvis du vil motta HTML utsendelser - Nei for å motta bare tekst utsendelser');
define('_JNEWS_TIME_ZONE_ASK_TIPS', 'Angi din tidssone.');

// Since 1.0.5
define('_JNEWS_FILES', 'Filer');
define('_JNEWS_FILES_UPLOAD', 'Last opp');
define('_JNEWS_MENU_UPLOAD_IMG', 'Last opp bilder');
define('_JNEWS_TOO_LARGE', 'Fil størrelsen er for stor. Den maksimale størrelse er');
define('_JNEWS_MISSING_DIR', 'Mål katalogen katalogen finnes ikke');
define('_JNEWS_IS_NOT_DIR', 'Mål katalogen finnes ikke eller er en fil.');
define('_JNEWS_NO_WRITE_PERMS', 'Mål katalogen har ikke skrive tilgang.');
define('_JNEWS_NO_USER_FILE', 'Du har ikke valgt noen fil for opplasting.');
define('_JNEWS_E_FAIL_MOVE', 'Flytting av filen ikke mulig.');
define('_JNEWS_FILE_EXISTS', 'Filen finnes fra før.');
define('_JNEWS_CANNOT_OVERWRITE', 'Filen finnes fra før og kunne ikke overskrives.');
define('_JNEWS_NOT_ALLOWED_EXTENSION', 'Filtype ikke tillatt.');
define('_JNEWS_PARTIAL', 'Filen ble bare delvis opplastet.');
define('_JNEWS_UPLOAD_ERROR', 'Feil ved opplasting:');
define('DEV_NO_DEF_FILE', 'Filen ble bare delvis opplastet.');

// already exist but modified  added a <br/ on first line and added [SUBSCRIPTIONS] line>
define('_JNEWS_CONTENTREP', '[SUBSCRIPTIONS] = Dette vil bli erstattet med abonnement linker.' .
        ' Dette er <strong>påkrevet</strong> for at jNews skal fungere.<br />' .
        'Hvis du plasserer noe annet innhold i denne boksen, vil det bli vist i alle utsendelser tilhørende denne listen.' .
        ' <br />Legg til abonnentmelding til slutt. jNews vil automatisk legge en lenke for abonnenten å endre sin informasjon og en link for å melde seg av listen.');

// since 1.0.6
define('_JNEWS_NOTIFICATION', 'Melding');  // shortcut for Email notification
define('_JNEWS_NOTIFICATIONS', 'Meldinger ');
define('_JNEWS_USE_SEF', 'SEF i utsendelser');
define('_JNEWS_USE_SEF_TIPS', 'Det anbefales at du velger \'Nei\'. Men hvis du vil at nettadressen i utsendelser skal bruke SEF så Velg \'Ja\'.' .
        ' <br /><b>Lenket vil fungerer for begge alternativer. Nei vli sikre at lenkene i utsendelser vil alltid fungerer selv om du endrer SEF.</b> ');
define('_JNEWS_ERR_NB', 'Feil #: FEIL');
define('_JNEWS_ERR_SETTINGS', 'Feilhåndterings innstillinger');
define('_JNEWS_ERR_SEND', 'Send feilrapport');
define('_JNEWS_ERR_SEND_TIPS', 'Hvis du ønsker at jNews skal bli et bedre produkt vennligst Velg \'Ja\'. Dette vil sende oss en feilrapport. Så du ikke engang trenger å rapportere feil lenger ;-) <br /> <b> INGEN PRIVAT INFORMASJON SENDES </ b>. Vi får ikke vite hvor feilen kommer fra. Vi sender kun informasjon om jNews, PHP oppsett og SQL-spørringer. ');
define('_JNEWS_ERR_SHOW_TIPS', 'Velg \'Ja\' for å vise feil nummer på skjermen. Hovedsakelig brukt til feilrettings formål. ');
define('_JNEWS_ERR_SHOW', 'Vis feil');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE', 'Vis lenke for avbestilling');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE_TIPS', 'Velg \'Ja\' for å vise lenken til avbestilling nederst på utsendelsen slik at brukeren kan endre sine abonnementer. <br /> Nei deaktivere bunntekst og lenker.');
define('_JNEWS_UPDATE_INSTALL', '<span style="color: rgb(255, 0, 0);">VIKTIG MELDING! </ Span> <br /> Hvis du oppgraderer fra en tidligere installasjon av jNews trenger du å oppgradere din database struktur ved å klikke på følgende knapp (Dine data vil beholdes)');
define('_JNEWS_UPDATE_INSTALL_BTN', 'Oppgradere tabeller og innstillinger');
define('_JNEWS_MAILING_MAX_TIME', 'Max kø tid');
define('_JNEWS_MAILING_MAX_TIME_TIPS', 'Definer maksimaltid for hvert sett av eposter sendt. Anbefalt mellom 30s og 2min.');

// virtuemart integration beta
define('_JNEWS_VM_INTEGRATION', 'VirtueMart Integrasjon');
define('_JNEWS_VM_COUPON_NOTIF', 'Rabatt/gavekort ID');
define('_JNEWS_VM_COUPON_NOTIF_TIPS', 'Oppgi forsendelsens ID du vil bruke til å sende Rabatt/gavekort til dine kunder.');
define('_JNEWS_VM_NEW_PRODUCT', 'Varsel om nye produkter ID');
define('_JNEWS_VM_NEW_PRODUCT_TIPS', 'Oppgi forsendelsens ID du vil bruke til å sende Varsel om nye produkter.');

// since 1.0.8
// create forms for subscriptions
define('_JNEWS_FORM_BUTTON', 'Lag skjema');
define('_JNEWS_FORM_COPY', 'HTML kode');
define('_JNEWS_FORM_COPY_TIPS', 'Kopier den genererte HTML-koden til din HTML-side.');
define('_JNEWS_FORM_LIST_TIPS', 'Velg listen du vil inkludere i skjemaet');
// update messages
define('_JNEWS_UPDATE_MESS4', 'Det kan ikke oppdateres automatisk.');
define('_JNEWS_WARNG_REMOTE_FILE', 'Ingen mulighet å hent ekstern fil.');
define('_JNEWS_ERROR_FETCH', 'Feil ved henting av fil.');

define('_JNEWS_CHECK', 'Kontroller');
define('_JNEWS_MORE_INFO', 'Mer informasjon');
define('_JNEWS_UPDATE_NEW', 'Oppdater til nyere versjon');
define('_JNEWS_UPGRADE', 'Oppgrader til høyere produkt');
define('_JNEWS_DOWNDATE', 'Gå tilbake til forrige versjon');
define('_JNEWS_DOWNGRADE', 'Tilbake til basisprodukt');
define('_JNEWS_REQUIRE_JOOM', 'Krev Joomla');
define('_JNEWS_TRY_IT', 'Prøv det!');
define('_JNEWS_NEWER', 'Nyere');
define('_JNEWS_OLDER', 'Eldre');
define('_JNEWS_CURRENT', 'Aktuell ');

// since 1.0.9
define('_JNEWS_CHECK_COMP', 'Prøv en av de andre komponentene');
define('_JNEWS_MENU_VIDEO', 'Opplæringsvideo');
define('_JNEWS_SCHEDULE_TITLE', 'Innstilling for automatisk tidsplan');
define('_JNEWS_ISSUE_NB_TIPS', 'Utgave nummer genereres automatisk av systemet');
define('_JNEWS_SEL_ALL', 'Alle utsendelser');
define('_JNEWS_SEL_ALL_SUB', 'Alle lister');
define('_JNEWS_INTRO_ONLY_TIPS', 'Hvis du bare merker denne vil innledningen av artikkelen bli satt inn i epost med en les mer link til hele artikkelen på nettstedet ditt.');
define('_JNEWS_TAGS_TITLE', 'Innholdsmerke');
define('_JNEWS_TAGS_TITLE_TIPS', 'Kopier og lim inn denne koden inn i forsendelsen der du vil ha innholdet plassert.');
define('_JNEWS_PREVIEW_EMAIL_TEST', 'Angi epostadressen for å sende en test');
define('_JNEWS_PREVIEW_TITLE', 'Forhåndsvisning');
define('_JNEWS_AUTO_UPDATE', 'Ny oppdateringsvarsel');
define('_JNEWS_AUTO_UPDATE_TIPS', 'Velg \'Ja\' hvis du ønsker å bli varslet om nye oppdateringer for din komponent. <br /> VIKTIG! Vis tips må være på for at denne funksjonen skal fungere.');

// since 1.1.0
define('_JNEWS_LICENSE', 'Lisensinformasjon');

// since 1.1.1
define('_JNEWS_NEW', 'Ny');
define('_JNEWS_SCHEDULE_SETUP', 'For at autoutsendelser sendes må du konfigurere planleggeren i konfigurasjonen.');
define('_JNEWS_SCHEDULER', 'Planlegger');
define('_JNEWS_ACAJOOM_CRON_DESC', 'hvis du ikke har tilgang til cron-oppgave på web området ditt, kan du registrere deg for en gratis jNews Cron konto her:');
define('_JNEWS_CRON_DOCUMENTATION', 'Du finner mer informasjon om oppsettet av jNews planlegger på følgende web adresse:');
define('_JNEWS_CRON_DOC_URL', '<a href="http://www.ijoobi.com/index.php?option=com_content&view=article&id=4249&catid=29&Itemid=72"
 target="_blank">http://www.ijoobi.com/index.php?option=com_content&Itemid=72&view=category&layout=blog&id=29&limit=60</a>');
define( '_JNEWS_QUEUE_PROCESSED', 'Køen behandlet uten feil...');
define( '_JNEWS_ERROR_MOVING_UPLOAD', 'Feil ved flytting av importert fil');

//since 1.1.4
define( '_JNEWS_SCHEDULE_FREQUENCY', 'Planlagt hyppighet');
define( '_JNEWS_CRON_MAX_FREQ', 'Planlagt maksimal hyppighet');
define( '_JNEWS_CRON_MAX_FREQ_TIPS', 'Spesifiser maksimal hyppighet for planlagte kjøringer (i minutter). Dette vil begrense planlagte oppgaver selv om cron-jobb er satt opp til å kjøre oftere.');
define( '_JNEWS_CRON_MAX_EMAIL', 'Maksimum epost per oppgave');
define( '_JNEWS_CRON_MAX_EMAIL_TIPS', 'Spesifiser maksimalt antall epost som kan sendes per oppgave (0 ubegrenset).');
define( '_JNEWS_CRON_MINUTES', ' minutter');
define( '_JNEWS_SHOW_SIGNATURE', 'Vis bunntekst i epost');
define( '_JNEWS_SHOW_SIGNATURE_TIPS', 'Om du vil reklamere for jNews eller ikke i bunnteksten på deres epost.');
define( '_JNEWS_QUEUE_AUTO_PROCESSED', 'Autoutsendelse ble sendt ...');
define( '_JNEWS_QUEUE_NEWS_PROCESSED', 'Planlagt nyhetsbrev ble sendt ...');
define( '_JNEWS_MENU_SYNC_USERS', 'Synkroniser brukere');
define( '_JNEWS_SYNC_USERS_SUCCESS', 'Synkronisering av brukere var vellykket');

// compatibility with Joomla 15
if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Logg ut');
if (!defined('_CMN_YES')) define( '_CMN_YES', 'Ja');
if (!defined('_CMN_NO')) define( '_CMN_NO', 'Nei');
if (!defined('_HI')) define( '_HI', 'Hei');
if (!defined('_CMN_TOP')) define( '_CMN_TOP', 'Topp');
if (!defined('_CMN_BOTTOM')) define( '_CMN_BOTTOM', 'Bunn');
//if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Logg ut');

// For include title only or full article in content item tab in newsletter edit - p0stman911
define('_JNEWS_TITLE_ONLY_TIPS', 'Om du velger dette vil bare tittel på artikkel bli satt inn i utsendelsen, som en lenke til artikkelen på nettsiden deres.');
define('_JNEWS_TITLE_ONLY', 'Bare tittel');
define('_JNEWS_FULL_ARTICLE_TIPS', 'Om du velger dette vil hele artikkelen bli satt inn i utsendelsen.');
define('_JNEWS_FULL_ARTICLE', 'Full artikkel');
define('_JNEWS_CONTENT_ITEM_SELECT_T', 'Velg innhold som skal legge sinn i meldingen.<br />Kopier og lim <b>innholdmerket</b> inn i utsendelsen. Du kan velge å bruke fulltekst, bare ingress eller bare tittel (0, 1, eller 2). ');
define('_JNEWS_SUBSCRIBE_LIST2', 'Tilgjengelige nyhetsbrevlister');

// For sorting in content tab by date, section or category
define('_JNEWS_CONTENT_ITEM_SORT', 'Sorter etter: ');
define('_JNEWS_SORT_DATE' , 'Dato');
define('_JNEWS_SORT_DATE_TIPS' , 'Om du velger denne vil innholdet bli sortert etter opprettelsesdato');
define('_JNEWS_SORT_SECTION' , 'Seksjon');
define('_JNEWS_SORT_SECTION_TIPS' , 'Om du velger denne vil innholdet bli sortert etter tilhørende seksjon');
define('_JNEWS_SORT_CATEGORY' , 'Kategori');
define('_JNEWS_SORT_CATEGORY_TIPS' , 'Om du velger dette vil innholdet bli sortert etter tilgørende kategori');
define('_JNEWS_SORT_BUTTON' , 'Sorter');

// smart-newsletter function
define('_JNEWS_AUTONEWS', 'Smarte nyhetsbrev');
define('_JNEWS_MENU_AUTONEWS', 'Smarte nyhetsbrev');
define('_JNEWS_AUTO_NEWS_OPTION', 'Innstillinger for \'Smarte nyhetsbrev\'');
define('_JNEWS_AUTONEWS_FREQ', 'Hyppighet for nyhetsbrev');
define('_JNEWS_AUTONEWS_FREQ_TIPS', 'Spesifiser hyppighet for hvor ofte du ønsker å send eut \'Smarte nyhetsbrev\'.');
define('_JNEWS_AUTONEWS_SECTION', 'Artikkelseksjon');
define('_JNEWS_AUTONEWS_SECTION_TIPS', 'Spesifiser seksjon som artikler skal hentes fra.');
define('_JNEWS_AUTONEWS_CAT', 'Artikkelkategori');
define('_JNEWS_AUTONEWS_CAT_TIPS', 'Spesifiser kategori som artikler skal hentes fra.');
define('_JNEWS_SELECT_SECTION', 'Alle seksjoner');
define('_JNEWS_SELECT_CAT', 'Alle kategorier');
define('_JNEWS_AUTO_DAY_CH8', 'Kvartalsvis');
define('_JNEWS_AUTONEWS_STARTDATE', 'Startdato');
define('_JNEWS_AUTONEWS_STARTDATE_TIPS', 'Spesifiser datoen for når du vil begynne utsendelser av \'Smarte nyhetsbrev\'.');
define('_JNEWS_AUTONEWS_TYPE', 'Innholdsvisning');// how we see the content which is included in the newsletter
define('_JNEWS_AUTONEWS_TYPE_TIPS', 'Full artikkel: vil inkludere hele artikkelen i nyhetsbrevet.<br />' .
		'Bare ingress: vil bare inkludere ingress av artikkelen i nyhetsbrevet.<br/>' .
		'Bare tittel: vil bare inkludere tittel på artikkel i nyhetsbrevet.');
define('_JNEWS_TAGS_AUTONEWS', '[SMARTNEWSLETTER] = Dette vil bli erstattet med \'Smarte nyhetsbrev\'.');

//since 1.1.3
define('_JNEWS_MALING_EDIT_VIEW', 'Opprett / Vis utsendelser');
define('_JNEWS_LICENSE_CONFIG', 'Lisens');
define('_JNEWS_ENTER_LICENSE', 'Fyll inn lisens');
define('_JNEWS_ENTER_LICENSE_TIPS', 'Fyll inn ditt lisensnummer og lagre det.');
define('_JNEWS_LICENSE_SETTING', 'Lisens-innstillinger');
define('_JNEWS_GOOD_LIC', 'Deres lisens er gyldig.');
define('_JNEWS_NOTSO_GOOD_LIC', 'Deres lisens er ikke gyldig: ');
define('_JNEWS_PLEASE_LIC', 'Vennligst kontakt jNewss brukerstøtte for å oppgradere deres lisens ( license@ijoobi.com ).');
define('_JNEWS_DESC_PLUS', 'jNews Plus er den første sekvensielle \'autoutsendelse\'-komponenten for Joomla! CMS.  ' . _JNEWS_FEATURES);
define('_JNEWS_DESC_PRO', 'jNews PRO er det ultimate utsendelsesystemet for Joomla! CMS.  ' . _JNEWS_FEATURES);

//since 1.1.4
define('_JNEWS_ENTER_TOKEN', 'Fyll inn token');

define('_JNEWS_ENTER_TOKEN_TIPS', 'Vennligst fyll inn ditt token-nummer som du mottok på epost når du kjøpte jNews. ');

define('_JNEWS_ACAJOOM_SITE', 'jNews-side:');
define('_JNEWS_MY_SITE', 'Min side:');

define( '_JNEWS_LICENSE_FORM', ' ' .
 		'Klikk her for å gå til lisensskjemaet.</a>');
define('_JNEWS_PLEASE_CLEAR_LICENSE', 'Vennligst tøm lisensfeltene og forsøk på nytt.<br />Om problemet vedvarer, ');

define( '_JNEWS_LICENSE_SUPPORT', 'Om du fortsatt har spørsmål, ' . _JNEWS_PLEASE_LIC);

define( '_JNEWS_LICENSE_TWO', 'kan du hente ditt lisensnummer manuelt ved å fylle inn token-nummer og sideadresse (som er uthevet i grønn på toppen av denne siden) i lisensskjemaet. '
			. _JNEWS_LICENSE_FORM . '<br /><br/>' . _JNEWS_LICENSE_SUPPORT);

define('_JNEWS_ENTER_TOKEN_PATIENCE', 'En lisens vil bli generert automatisk etter at du har lagret ditt token-nummer.' .
		' Normalt blir token-nummeret validert innen 2 minutter. Men i enkelte tilfeller kan det likevel ta opp til 15 minutter.<br />' .
		'<br />Sjekk dette kontrollpanelet igjen om noen få minutter.<br /><br />' .
		'Om du ikke mottok et gyldig lisensnummer i løpet av 15 minutter, '. _JNEWS_LICENSE_TWO);


define( '_JNEWS_ENTER_NOT_YET', 'Ditt token-nummer har ikke blitt validert ennå.');
define( '_JNEWS_UPDATE_CLICK_HERE', 'Vennligst besøk <a href="http://www.ijoobi.com" target="_blank">www.ijoobi.com</a> for å laste ned nyeste versjon.');
define( '_JNEWS_NOTIF_UPDATE', 'Fyll inn deres epostadresse og klikk \'Meld på\' for å motta varsler om nye oppdateringer ');

define('_JNEWS_THINK_PLUS', 'Om du ønsker mer ut av deres utsendelser, tenk Plus!');
define('_JNEWS_THINK_PLUS_1', 'Sekvensielle \'autoutsendelse\'');
define('_JNEWS_THINK_PLUS_2', 'Planlegg levering av deres nyhetsbrev for en forhåndsdefinert dato');
define('_JNEWS_THINK_PLUS_3', 'Ingen flere serverbegrensninger');
define('_JNEWS_THINK_PLUS_4', 'og mye mer ...');

//since 1.2.2
define( '_JNEWS_LIST_ACCESS', 'Listetilgang');
define( '_JNEWS_INFO_LIST_ACCESS', 'Spesifiser hvilken brukergrupper som kan se og abonnere på denne listen');
define( 'ACA_NO_LIST_PERM', 'Du har ikke høye nok rettigheter for å abonnere på denne listen');

//Archive Configuration
 define('_JNEWS_MENU_TAB_ARCHIVE', 'Arkiver');
 define('_JNEWS_MENU_ARCHIVE_ALL', 'Arkiver alle');

//Archive Lists
 define('_FREQ_OPT_0', 'Ingen');
 define('_FREQ_OPT_1', 'Hver uke');
 define('_FREQ_OPT_2', 'Hver andre uke');
 define('_FREQ_OPT_3', 'Hver måned');
 define('_FREQ_OPT_4', 'Hvert kvartal');
 define('_FREQ_OPT_5', 'Hvert år');
 define('_FREQ_OPT_6', 'Annet');

define('_DATE_OPT_1', 'Opprettet');
define('_DATE_OPT_2', 'Endret');

define('_JNEWS_ARCHIVE_TITLE', 'Oppsett av automatisk arkivering');
define('_JNEWS_FREQ_TITLE', 'Hyppighet for arkivering');
define('_JNEWS_FREQ_TOOL', 'Definer hvor ofte du vil at arkivbehanleren skal arkivere deres nettsides innhold.');
define('_JNEWS_NB_DAYS', 'Antall dager');
define('_JNEWS_NB_DAYS_TOOL', 'Dette er det eneste \'Annet\'-valget. Spesifiser antall dager mellom hver arkivering.');
define('_JNEWS_DATE_TITLE', 'Datotype');
define('_JNEWS_DATE_TOOL', 'Definer om arkivering skal gjøres etter dato for opprettelse eller redigering.');

define('_JNEWS_MAINTENANCE_TAB', 'Innstillinger vedlikehold');
define('_JNEWS_MAINTENANCE_FREQ', 'Hyppighet for vedlikehold');
define( '_JNEWS_MAINTENANCE_FREQ_TIPS', 'Spesifiser hyppighet for kjøring av vedlikeholdsrutine.');
define( '_JNEWS_CRON_DAYS', 'time(r)');

define( '_JNEWS_LIST_NOT_AVAIL', 'Det finnes ingen tilgjengelig liste.');
define( '_JNEWS_LIST_ADD_TAB', 'Legg til/Rediger');

define( '_JNEWS_LIST_ACCESS_EDIT', 'Legg til/Rediger tilgang for utsendelse');
define( '_JNEWS_INFO_LIST_ACCESS_EDIT', 'Spesifiser hvilken brukergrupper som kan legge til eller redigere en ny utsendelse for denne listen.');
define( '_JNEWS_MAILING_NEW_FRONT', 'Opprett en ny utsendelse');

define('_JNEWS_AUTO_ARCHIVE', 'Automatisk arkivering');
define('_JNEWS_MENU_ARCHIVE', 'Automatisk arkivering');

//Extra tags:
define('_JNEWS_TAGS_ISSUE_NB', '[ISSUENB] = Dette vil bli erstattet med utgivelsenummer for nyhetsbrevet.');
define('_JNEWS_TAGS_DATE', '[DATE] = Dette vil bli erstattet med dato for utsendelse.');
define('_JNEWS_TAGS_CB', '[CBTAG:{field_name}] = Dette vil bli erstattet med verdien hentet fra \'Community Builder\'-feltet: f.eks. [CBTAG:firstname] ');
define( '_JNEWS_MAINTENANCE', 'Joobi Care');

define('_JNEWS_THINK_PRO', 'Når du har profesjonelle behov bruker du profesjonelle komponenter!');
define('_JNEWS_THINK_PRO_1', 'Smarte nyhetsbrev');
define('_JNEWS_THINK_PRO_2', 'Definer tilgang for deres liste');
define('_JNEWS_THINK_PRO_3', 'Definer hvem som kan legge til/redigere utsendelser');
define('_JNEWS_THINK_PRO_4', 'Flere merker: legg til dine CB-felter');
define('_JNEWS_THINK_PRO_5', 'Joomla contents Auto-archive');//usikker på denne
define('_JNEWS_THINK_PRO_6', 'Optimalisering av database');

define('_JNEWS_LIC_NOT_YET', 'Din lisens er ikke gyldig ennå. Sjekk lisensfanen i kontrollpanelet.');
define('_JNEWS_PLEASE_LIC_GREEN', 'Pass på at du gir informasjonen, uthevet i grønt på toppen av siden, til vår brukerstøtte.');

define('_JNEWS_FOLLOW_LINK', 'Hent din lisens');
define( '_JNEWS_FOLLOW_LINK_TWO', 'Du kan hente din lisens ved å fylle inn token-nummer og sideadresse (som er uthevet i grønt på toppen av denne siden) i lisensskjeamet. ');
define( '_JNEWS_ENTER_TOKEN_TIPS2', ' Klikk så på \'Lagre\' i meny oppe til høyre.');
define( '_JNEWS_ENTER_LIC_NB', 'Fyll inn din lisens');
define( '_JNEWS_UPGRADE_LICENSE', 'Oppgrader din lisens');
define( '_JNEWS_UPGRADE_LICENSE_TIPS', 'Om du mottok et token-nummer for å oppgradere din lisens kan du fylle inn denne her, klikke \'Lagre\' og fortsette til nummer <b>2</b> for å hente ditt nye lisensnummer.');

define( '_JNEWS_MAIL_FORMAT', 'Kodeformat');
define( '_JNEWS_MAIL_FORMAT_TIPS', 'Hvilket format ønsker du å bruke for koding av dine utsendelser, ren tekst eller MIME');
define( '_JNEWS_ACAJOOM_CRON_DESC_ALT', 'Om du ikke har tilgang til å behandle cron-jobber på nettside/-server kan du bruke den fritt tilgjengelige jCron-komponenten for å opprette cron-jobber fra din nettside.');

//since 1.3.1
define('_JNEWS_SHOW_AUTHOR', 'Vis skribentens navn');
define('_JNEWS_SHOW_AUTHOR_TIPS', 'Velg \'Ja\' om du vil legge til skribentens navn når du legger til artikkel i utsendelse');

//since 1.3.5
define('_JNEWS_REGWARN_NAME', 'Navnet ditt.');
define('_JNEWS_REGWARN_MAIL', 'Gyldig epostadresse.');

//since 1.5.6
define('_JNEWS_ADDEMAILREDLINK_TIPS', 'Om du velger \'Ja\' vil brukerens epostadressen bli lagt til som et parameter på slutten av din adresse for viderekobling (viderskoblingslenken for din modul eller et eksternt AcaJoom-skjema).<br/>Det kan være til nytte om du vil kjøre et spesielt skript på denne siden.');
define('_JNEWS_ADDEMAILREDLINK', 'Legg til epostadresse på lenke for viderekobling');

//since 1.6.3
define('_JNEWS_ITEMID', 'Element-id');
define('_JNEWS_ITEMID_TIPS', 'Denne element-iden vil bli lagt til deres jNews-lenker.');

//since 1.6.5
define('_JNEWS_SHOW_JCALPRO', 'jCalPRO');
define('_JNEWS_SHOW_JCALPRO_TIPS', 'Vis fanen for jCalPRO <br/>(bare om jCalPRO er installert på deres nettside!)');
define('_JNEWS_JCALTAGS_TITLE', 'jCalPRO-merke:');
define('_JNEWS_JCALTAGS_TITLE_TIPS', 'Kopier og lim dette merket inn i utsendelsen, der hvor du vil at begivenhet skal vises.');
define('_JNEWS_JCALTAGS_DESC', 'Beskrivelse:');
define('_JNEWS_JCALTAGS_DESC_TIPS', 'Velg \'Ja\' om du ønsker å vise beskrivelsen for begivenhet.');
define('_JNEWS_JCALTAGS_START', 'Startdato:');
define('_JNEWS_JCALTAGS_START_TIPS', 'Velg \'Ja\' om du ønsker å vise startdato for begivenhet.');
define('_JNEWS_JCALTAGS_READMORE', 'Les mer:');
define('_JNEWS_JCALTAGS_READMORE_TIPS', 'Velg \'Ja\' om du ønsker å vise en <b>les mer lenke</b> for begivenhet.');
define('_JNEWS_REDIRECTCONFIRMATION', 'Adresse for viderekobling');
define('_JNEWS_REDIRECTCONFIRMATION_TIPS', 'Om du krever en epostbekreftelse vil brukeren bli bekreftet og viderekoblet til denne adressen om vedkommende klikker på denne lenken.');

//since 2.0.0 compatibility with Joomla 1.5
if(!defined('_CMN_SAVE') and defined('CMN_SAVE')) define('_CMN_SAVE',CMN_SAVE);
if(!defined('_CMN_SAVE')) define('_CMN_SAVE','Lagre');
if(!defined('_NO_ACCOUNT')) define('_NO_ACCOUNT','Ingen konto ennå?');
if(!defined('_CREATE_ACCOUNT')) define('_CREATE_ACCOUNT','Registrer konto');
if(!defined('_NOT_AUTH')) define('_NOT_AUTH','Du har ikke tilgang til dette innholdet.');

//since 3.0.0
define('_JNEWS_DISABLETOOLTIP', 'Deaktiver verktøytips');
define('_JNEWS_DISABLETOOLTIP_TIPS', 'Dekativer verktøytips på brukersiden');
define('_JNEWS_MINISENDMAIL', 'Bruk \'Mini SendMail\'');
define('_JNEWS_MINISENDMAIL_TIPS', 'Om deres server bruker \'Mini SendMail\', bruk dette valget for å ikke legge til brukerens navn i hodet på eposten.');
define('_JNEWS_CONTENT_ORDERING' , 'Innholdsortering');
define('_JNEWS_CONTENT_ORDERING_TIPS' , 'Dette vil sortere innholdet i ditt innholdstillegg');


//Since 3.1.5
define('_JNEWS_READMORE','Les mer ...');
define('_JNEWS_VIEWARCHIVE','Klikk her');

//since 4.0.0
define('_JNEWS_SHOW_JLINKS','Lenkesporing');
define('_JNEWS_SHOW_JLINKS_TIPS','Aktiverer integrasjon med jLinks for å muliggjøre lenkesporing for hver enkelt lenke i nyhetsbrev.');

//since 4.1.0
define( '_JNEWS_MAIL_ENCODING', 'Epostkoding' );
define( '_JNEWS_MAIL_ENCODING_TIPS', 'Hvilken tegnkoding ønsker du å bruke, UTF-8 (anbefalt) eller ISO-8859-2' );
define( '_JNEWS_COPY_SUBJECT', 'Kopier emne' );

//since 5.0.0
//mary for columns
define('_JNEWS_MCOLUMN1','Kolonne 1');//$GLOBALS[ACA.'column1_name']);
define('_JNEWS_MCOLUMN2','Kolonne 2');//$GLOBALS[ACA.'column2_name']);
define('_JNEWS_MCOLUMN3','Kolonne 3');//$GLOBALS[ACA.'column3_name']);
define('_JNEWS_MCOLUMN4','Kolonne 4');//$GLOBALS[ACA.'column4_name']);
define('_JNEWS_MCOLUMN5','Kolonne 5');//$GLOBALS[ACA.'column5_name']);
//fieldset for column configuration
define('_JNEWS_COLUMN','Brukerdefinerte kolonner');
define('_JNEWS_COLUMN1','Vis kolonne 1');
define('_JNEWS_COLUMN2','Vis kolonne 2');
define('_JNEWS_COLUMN3','Vis kolonne 3');
define('_JNEWS_COLUMN4','Vis kolonne 4');
define('_JNEWS_COLUMN5','Vis kolonne 5');
define('_JNEWS_COL1_NAME', 'Kolonne 1 navn');
define('_JNEWS_COL2_NAME', 'Kolonne 2 navn');
define('_JNEWS_COL3_NAME', 'Kolonne 3 navn');
define('_JNEWS_COL4_NAME', 'Kolonne 4 navn');
define('_JNEWS_COL5_NAME', 'Kolonne 5 navn');
//define('_JNEWS_COL1_TIPS','Enter the alias name of column 1 to be shown in the subscribers module');
define('_JNEWS_SHOW_COLUMN1_TIPS','Vis/Skjul denne kolonnen i din abonnementsliste');
define('_JNEWS_SHOW_COLUMN2_TIPS','Vis/Skjul denne kolonnen i din abonnementsliste');
define('_JNEWS_SHOW_COLUMN3_TIPS','Vis/Skjul denne kolonnen i din abonnementsliste');
define('_JNEWS_SHOW_COLUMN4_TIPS','Vis/Skjul denne kolonnen i din abonnementsliste');
define('_JNEWS_SHOW_COLUMN5_TIPS','Vis/Skjul denne kolonnen i din abonnementsliste');
define('_JNEWS_INPUT_COLUMN1','Kolonne 1');//$GLOBALS[ACA.'column1_name']);
define('_JNEWS_INPUT_COLUMN2','Kolonne 2');//$GLOBALS[ACA.'column2_name']);
define('_JNEWS_INPUT_COLUMN3','Kolonne 3');//$GLOBALS[ACA.'column3_name']);
define('_JNEWS_INPUT_COLUMN4','Kolonne 4');//$GLOBALS[ACA.'column4_name']);
define('_JNEWS_INPUT_COLUMN5','Kolonne 5');//$GLOBALS[ACA.'column5_name']);
define('_JNEWS_INPUT_COLUMN1_TIPS','Angi din kolonne 1');
define('_JNEWS_INPUT_COLUMN2_TIPS','Angi din kolonne 2');
define('_JNEWS_INPUT_COLUMN3_TIPS','Angi din kolonne 3');
define('_JNEWS_INPUT_COLUMN4_TIPS','Angi din kolonne 4');
define('_JNEWS_INPUT_COLUMN5_TIPS','Angi din kolonne 5');
define('_JNEWS_COLUMN1_REP', '[COLUMN1] = Dette vil bli erstattet med din brukerdefinerte kolonne 1');
define('_JNEWS_COLUMN2_REP', '[COLUMN2] = Dette vil bli erstattet med din brukerdefinerte kolonne 2');
define('_JNEWS_COLUMN3_REP', '[COLUMN3] = Dette vil bli erstattet med din brukerdefinerte kolonne 3');
define('_JNEWS_COLUMN4_REP', '[COLUMN4] = Dette vil bli erstattet med din brukerdefinerte kolonne 4');
define('_JNEWS_COLUMN5_REP', '[COLUMN5] = Dette vil bli erstattet med din brukerdefinerte kolonne 5');
define('_JNEWS_REGWARN_COLUMN1','Du må angi din');
define('_JNEWS_REGWARN_COLUMN2','Du må angi din');
define('_JNEWS_REGWARN_COLUMN3','Du må angi din');
define('_JNEWS_REGWARN_COLUMN4','Du må angi din');
define('_JNEWS_REGWARN_COLUMN5','Du må angi din');
//end of columns
//url
define('_JNEWS_URL_PASS','Passord');
define('_JNEWS_URL_PASS_TIPS','Angi passord for å muliggjøre påmelding gjennom nettadresse. Append the catcher variable password in the URL.<br>(For Plus og PRO vil denne koden bli brukt for bildebekreftelse.)');
define('_JNEWS_URL_MES','Du har ikke tilgang til påmelding via nettadresse.<br>Passorded er feil.<br>Vennligst meld deg på via abonnementsmodulen eller brukersiden.');
define('_JNEWS_URL_PASS_WARN','(Om du endrer dette passordet i PRO må du endre det skjulte passordet i ditt eksterne skjema også.)');
define('_JNEWS_ENABLE_CAPTCHA', 'Aktiver bildebekreftelse');
define('_JNEWS_ENABLE_CAPTCHA_TIPS','Aktiver funksjonalitet for bildebekreftelse, i abonnementsmodul og påmeldinger via eksternt skjema i PRO.');
//url
// subscription notification
define('_JNEWS_SUBSCRIPTION_NOTIFY','Send varsel om påmelding');
define('_JNEWS_SUBSCRIPTION_NOTIFY_TIPS','Administrator vil motta varsel om påmeldinger via \'jNews Subscribers Module\'. Varselet vil bli sendt til: ');
define('_JNEWS_SUBSCRIPTION_NOTIFY_MSG1','Et varsel om påmelding har blitt sendt til administratoren.');
define('_JNEWS_SUBSCRIPTION_NOTIFY_MSG2','Ingen varsel om påmelding ble sendt.');
define('_JNEWS_SUBSCRIPTION_NOTIFY_ERR','Varsel om påmelding kunne ikke sendes til administratoren.');
//subscription notification messages
//for captcha
define('_JNEWS_CAPTCHA_CAPTION','Bildekode: ');
define('JNEWS_WRONG_CAPTCHA_ENTERED','<p style=\'text-align: justify;\'><b>Bildekode er feil, eller informasjon du har angitt er ugyldig.</b><br>(Bildebekreftelsen er nødvendig for å forhindre automatisk påmelding av roboter, for å verifisere at registreringen er gjort av en virkelig person.)<br><br><b><font color=#ff0000>Din påmelding ble ikke lagret.</font></b><br><br>Påse at du angir riktig informasjon og kode, og klikk deretter <b>Meld på</b>-knappen.<br><br>Vi beklager eventuelle ulemper, og takker for din forståelse.</p><br>');
define('_JNEWS_REGWARN_CAPTCHA','Fyll inn bildekoden.');
define('_JNEWS_SUB_ERR','<br>Feil ved påmelding.');

//since 6.0.0
define('_JNEWS_MOOTOOLS_BTNTEXT' , 'Meld på her');
define('_JNEWS_QUEUE_SUBJECT','Emne');
define('_JNEWS_QUEUE_EMAIL','E-post');
define('_JNEWS_QUEUE_PRIOR','Prioritet');
define('_JNEWS_QUEUE_ATT','Forsøk');
define('_JNEWS_QUEUE_DEL', 'Slett');
define('_JNEWS_PROCESS_Q','Behandle kø');
define('_JNEWS_CLEAN_Q','Tøm kø');
define('_JNEWS_SENDDATE','Send dato');
define('_JNEWS_MAILING_Q','Alle utsendelser i kø');
define('_JNEWS_MENU_QUEUE', 'Kø');
define('_JNEWS_MENU_TEMPLATES','Maler');
define('_JNEWS_MENU_TAB_QUEUE' , 'Kø');
define('_JNEWS_Q_PROCESS' , 'Kø-konfigurasjon');
define('_JNEWS_MAX_Q','Maksimum antall eposter per utsendelsebolk');
define('_JNEWS_SUBS_LIST_LABEL' , 'Dette nyhetsbrevet vil bli sendt til alle abonnenter i følgende valgte lister:');
define('_JNEWS_SUBS_LIST_CAMPAIGN' , 'Denne autoutsendelsen vil bli sendt til abonnenter i følgende valgte autoutsendelser:');
define('_JNEWS_SUBS_LIST_RECEIVE', 'Motta' );
define('_JNEWS_SUBS_LIST_TOALL', 'Velg alle' );
define('_JNEWS_SUBS_LIST_TONONE', 'Ingen' );
define('_JNEWS_LIST_COLOR','Farge');
define('_JNEWS_LIST_COLOR_TIP','Velg farge for din liste. Det kan være nyttig for statistikker.');
define('_JNEWS_MENU_NEW', 'Ny');
define('_JNEWS_MENU_EDIT', 'Rediger');
define('_JNEWS_MENU_APPLY', 'Bruk');
define('_JNEWS_MENU_CANCEL', 'Avbryt');
define('_JNEWS_MENU_TEMPLATE', 'Maler');
define('_JNEWS_HTML_VERSION', 'HTML-versjon');
define('_JNEWS_NONHTML_VERSION', 'Ren tekstversjon');
define('_JNEWS_TAG_NAME_DESC' , 'Dette vil bli erstattet med navnet som abonnenten har angitt. Du vil kunne sende "personlige" eposter ved å bruke dette.');
define('_JNEWS_TAG_FNAME_DESC' , 'Dette vil bli erstattet med fornavnet som abonnenten har angitt.');
define('_JNEWS_TAG_ISSUENB_DESC' , 'Dette vil bli erstatet med utgivelsenummer for nyhetsbrevet.');
define('_JNEWS_TAG_DATE_DESC' , 'Dette vil bli erstattet med utsendelsedatoen.');
define('_JNEWS_TAG_CBNAME' , '[CBTAG:{field_name}]');
define('_JNEWS_TAG_CBNAME_DESC' , 'Dette vil bli erstattet med verdi hentet fra \'Community Builder\'-feltet. F.eks. [CBTAG:firstname] ');
define('_JNEWS_TAG_LOADMODINFO_DESC' , 'Dette vil bli erstatte med en Joomla-modulen hvor id er lik id for Joomla-modulen. F.eks. {module=1}.<br />Modulen kan bare lastes gjennom cron-jobb.<br /> ');
define('_JNEWS_DATETIME' , 'Dato og tid');
define('_JNEWS_TEMPLATE_COPY' , '_kopi');
define('_JNEWS_TEMPLATE_DEFAULT_NODEL' , 'Du kan ikke slette en standard mal!');
define('_JNEWS_TEMPLATE_DEFAULT_SUCCS' , 'Malen ble satt som standard!');
define('_JNEWS_TEMPLATE' , 'Mal');
define('_JNEWS_TEMPLATES' , 'Maler');
define('_JNEWS_AR' , 'Autoutsendelse');
define('_JNEWS_SELCT_MAILINGLIST', 'Velg en liste i \'Liste\'-fanen for å legge til en utsendelse.');
define('_JNEWS_SELCT_MAILINGCAMPAIGN', 'Velg en kampanje i \'Liste\'-fanen for å legge til en utsendelse.');
define('_JNEWS_TEMPLATE_AVAIL', 'Alle tilgjengelige maler');
define('_JNEWS_TEMPLATE_NAME', 'Navn');
define('_JNEWS_TEMPLATE_NAME_T', 'Angi navn for malen.');
define('_JNEWS_TEMPLATE_NAMEKEY', 'Navnenøkkel');
define('_JNEWS_TEMPLATE_NAMEKEY_T', 'Angi navnenøkkel for malen.');
define('_JNEWS_TEMPLATE_DESC', 'Beskrivelse');
define('_JNEWS_TEMPLATE_DEFAULT', 'Standard');
define('_JNEWS_TEMPLATE_DEFAULT_T', 'Velg \'Ja\' for å angi som standard mal.');
define('_JNEWS_TEMPLATE_PUBLISH', 'Publiser');
define('_JNEWS_TEMPLATE_PUBLISH_T', 'Velg \'Ja\' for å publisere malen.');
define('_JNEWS_TEMPLATE_BG', 'Bakgrunnfarge');
define('_JNEWS_TEMPLATE_BG_T', 'Velg farge for bakgrunn i malen.');
define('_JNEWS_TEMPLATE_UPLOAD', 'Last opp miniatyrbilde');
define('_JNEWS_TEMPLATE_UPLOAD_T', 'Last opp et miniatyrbilde for malen.');
define('_JNEWS_TEMPLATE_DESC_T', 'Fyll inn beskrivelse for malen.');
define('_JNEWS_TEMPLATE_STYLE_TH1', 'Tittel h1');
define('_JNEWS_TEMPLATE_STYLE_TH2', 'Tittel h2');
define('_JNEWS_TEMPLATE_STYLE_TH3', 'Tittel h3');
define('_JNEWS_TEMPLATE_STYLE_TH4', 'Tittel h4');
define('_JNEWS_TEMPLATE_STYLE_UNSUB', 'Stil for avmeldingslenke');
define('_JNEWS_TEMPLATE_STYLE_SUB', 'Stil for endringslenke');
define('_JNEWS_TEMPLATE_STYLE_CONTENT', 'Stil for innholdsområdet');
define('_JNEWS_TEMPLATE_STYLE_CHEAD', 'Stil for innholdstittel');
define('_JNEWS_TEMPLATE_STYLE_CREADMORE', 'Stil for \'Les mer\'-lenke');
define('_JNEWS_TEMPLATE_STYLE_VONLINE', 'Stil for \'Vis i nettleser\'-lenke');
define('_JNEWS_TEMPLATE_STYLE_NEW', 'Legg til ny stil');
define('_JNEWS_TEMPLATE_STYLE_NEWC', 'Navn på CSS-klasse');
define('_JNEWS_TEMPLATE_STYLE_NEWAPPLIED', 'CSS som vil bli lagt til klassen.');

//statistics & reports
define('_JNEWS_REPORTS_SUBS', 'Subscribers Reports');
define('_JNEWS_REPORTS_MAIL', 'Mailing Reports');
define('_JNEWS_REPORTS_LIST', 'List Reports');
define('_JNEWS_LIST_SUBCRIBERS', 'No. of Subscribers');
define('_JNEWS_LIST_UNSUBSCRIBERS', 'No. of Unsubscribers');
define('_JNEWS_LIST_CONFIRMED', 'No. of Confirmed Emails');
define('_JNEWS_LIST_UNCONFIRMED', 'No. of Unconfirmed Emails');
define('_JNEWS_LIST_SUB_DATE', 'Subscribed Date');
define('_JNEWS_MAILING_SEND_DATE','Send Date');
define('_JNEWS_MAILING_SUBJECT', 'Subject');
define('_JNEWS_MAILING_SENT_HTML','Sent in HTML');
define('_JNEWS_MAILING_SENT_TEXT','Sent in Text');
define('_JNEWS_MAILING_FAILED', 'Send Fails');
define('_JNEWS_MAILING_PENDING', 'Mail Pending');
define('_JNEWS_MAILING_BOUNCES','Bounces');
define('_JNEWS_MAILING_SENT', 'Total Sent');
//Mailing Reports
define('_JNEWS_MAIL_GRAPH', 'Graf');
define('_JNEWS_MAIL_DETAILS', 'Detaljer');
define('_JNEWS_MAIL_DETAILS_READ', 'HTML-visninger');
define('_JNEWS_MAIL_DETAILS_UNREAD', 'Ulest HTML');
define('_JNEWS_MAIL_DETAILS_TEXT', 'Kun ren tekst');

//stats filters
define('_JNEWS_GROUP_PREDEFINED_DATE','Predefined Date');		//legend
define('_JNEWS_GROUP_SPECIFIED_DATE','Specified Date');
define('_JNEWS_LABEL_SET_INTERVAL', 'Set Interval');		//labels
define('_JNEWS_LABEL_DATE_RANGE','Date Range');
define('_JNEWS_LABEL_CURRENT_SERVER_TIME', 'Current Server Time');
define('_JNEWS_LABEL_REPORT_TYPE','Report Type');
define('_JNEWS_INTERVAL_DAILY','Daily');					//intervals
define('_JNEWS_INTERVAL_WEEKLY','Weekly');
define('_JNEWS_INTERVAL_MONTHLY', 'Monthly');
define('_JNEWS_INTERVAL_YEARLY','Yearly');
define('_JNEWS_DEFINED_RANGE_YESTERDAY','Yesterday');		//predefined range
define('_JNEWS_DEFINED_RANGE_TODAY', 'Today');
define('_JNEWS_DEFINED_RANGE_THIS_WEEK','This Week');
define('_JNEWS_DEFINED_RANGE_LAST_WEEK','Last Week');
define('_JNEWS_DEFINED_RANGE_LAST_TWO_WEEK','Last 2 Weeks');
define('_JNEWS_DEFINED_RANGE_THIS_MONTH','This Month');
define('_JNEWS_DEFINED_RANGE_LAST_MONTH','Last Month');
define('_JNEWS_DEFINED_RANGE_THIS_YEAR','This Year');
define('_JNEWS_DEFINED_RANGE_LAST_YEAR','Last Year');
define('_JNEWS_DEFINED_RANGE_TWO_YEARS_AGO','2 Years Ago');
define('_JNEWS_DEFINED_RANGE_3_YEARS_AGO','3 Years Ago');
define('_JNEWS_BUTTON_REFRESH','Refresh');				//buttons
define('_JNEWS_BUTTON_GENERATE','Generate');
define('_JNEWS_BUTTON_RESET', 'Reset');
define('_JNEWS_SPECIFIED_DATE_START','Start');			//specified date
define('_JNEWS_SPECIFIED_DATE_END','End');
define('_JNEWS_REPORT_LISTING','Listing');
define('_JNEWS_REPORT_GRAPH','Graph');
define('_JNEWS_REPORT_EXPORT','Export');
define('-JNEWS_SUBSCRIBERS_ALL_USERS', 'All Users');		//subscribers
define('_JNEWS_SUBSCRIBERS_REGISTERED', 'Registered');
define('_JNEWS_SUBSCRIBERS-GUESTS','Guests');
define('_JNEWS_REPORT_WARN_MESSAGE', 'Incomplete Date Selection in Specified Fieldset!');

//stats export
define('_JNEWS_STATS_EXPORT', 'Export');
define('_JNEWS_EXPORT_WARN_MESSAGE', 'No Data to be Exported');
define('_JNEWS_GRAPH_WARN_MESSAGE', 'No Data to be Displayed');
define('_JNEWS_REPORT_HEADER', 'Report');
define('_JNEWS_REPORT_HEADER_TO', 'to');
define('_JNEWS_PIE_PROCESS_WARN_MESSAGE', 'No Data for Mailing Process');
define('_JNEWS_PIE_FORMAT_WARN_MESSAGE', 'No Data for HTML/Text Format');

//stats graph labels
define('_JNEWS_GRAPH_LBL_HTML', 'HTML');
define('_JNEWS_GRAPH_LBL_TEXT', 'TEXT');
define('_JNEWS_GRAPH_TITLE_FORMAT', 'HTML/TEXT Format');
define('_JNEWS_GRAPH_PIE_TITLE_MAIL', 'Mailing Process');
define('_JNEWS_PIE_SUBS', 'Subscribers');
define('_JNEWS_PIE_UNSUBS', 'Unsubscribers');
define('_JNEWS_PIE_UNCONFIRMED', 'Unconfirmed');
define('_JNEWS_PIE_CONFIRMED', 'Confirmed');
define('_JNEWS_MAILING_SUBJECT_HEADER', 'Subject');


//Wizards
define('_JNEWS_WIZARD', 'Wizard');
define('_JNEWS_CHECKLISTFOUND', 'Please create your list first and be sure that it is published.');

define('_JNEWS_CHECKCAMPAIGNFOUND', 'Please create your campaign(list) first and be sure that it is published.');
define('_JNEWS_TEMPLATE_ALERT_NAMEKEY', 'Template must have a namekey!');
define('_JNEWS_LIST_GUIDE', '<strong>List Management:</strong> <br/>'.
       '<ul><li>The first thing you have to do to start with jNews is to create your list.</li>'.
       '<li>You will be able to subscribe users to this list and send one or more Newsletters.</li>'.
       '<li>You can specify here the basic information of the list including your <i><u>Sender Information</u></i>.</li>'.
       '<li>And be able to specify users or group of users who can subscribe to that list.</li>'.
       '<li>For <i>Plus</i> and <i>Pro</i> version you can specify what group of user or user who can add or edit mailings for this list.</li>'.
       '<li>For <i>Pro</i> version you have the option to send <i><u>Unsubscription</u></i> and <i><u>Subscription Notification</u></i> to the owner of the list or the admin of the site.</li></ul>');
define('_JNEWS_SUBSCRIBERS_GUIDE', '<strong>Subscriber Management:</strong> </br>' .
	    '<ul><li><strong>During Creation: </strong></li><br>'.
        '<ul><li>You can proceed here adding your subscribers.</li>'.
        '<li>Specify your <i><u>Subscriber Information</i></u></li>'.
        '<li>And select which <i><u>List</u></i> you want your subscriber to subscribe to, provided that you have created list.</li>'.
        '<li>You can Confirm your added subscriber to receive your newsletters.</li>'.
        '<li>You can also allow your subscriber to recieve the HTML format of your newsletter.</li>'.
        '<li><i><u>IP</u></i> field is added to automatically detect the IP of your subscriber from the frontend of your site. </li></ul></ul>'.
        '<ul><li><strong>Export Button</strong></li>' .
        '<ul><li>This allows you to <i><u>Export</u></i> your subscribers from all your lists or selected lists.</li></ul></ul>' .
        '<ul><li><strong>Import Button</strong></li>' .
        '<ul><li>This allows you to <i><u>Import</u></i> your subscribers to all your lists or selected lists.</li></ul></ul>');
define('_JNEWS_NEWSLETTER_GUIDE', '<strong>Newsletter Management:</strong> <br/>'.
        '<ul><li>Provided that you have created List(s) you can now proceed creating your <i><u>Newsletters</u></i>.</li>'.
        '<li>For the <i><u>Plus</u></i> version you can create <i><u>Scheduled Newsletter</u></i> and also <i><u>Autoresponder</u></i> or <i><u>Auto-responder</u></i> type of mailing.</li>'.
        '<li>For <i><u>PRO</u></i> you have the functionality with <i><u>Smart-Newsletter</u></i>, which takes your <i>latest created</i>, <i>modified</i> and <i>published articles</i> of your site.</li></ul>'.
        '<ul><li><strong>During Creation:</strong></li>'.
		'<ul><li><i><u>Newsletter Content Area</u></i> -> where you put all the contents of your Newsletter.</li>'.
		'<li><i><u>List Tab</u></i> -> the area where you can send the newsletter to one or more Lists.</li>'.
		'<li><i><u>Sender Tab</u></i> -> the area of the Sender Information Settings of your Newsletter.</li>'.
		'<li><i><u>Content Tab</u></i> -> the area where you can look for the contents of your site and specify which article to insert into your Newsletter.</li>'.
        '<li><i><u>Attachments</u></i> -> Newsletter Attachement Information area.</li></ul></ul>' .
        '<ul><li><strong>Unpublished Button</strong></li>' .
        '<ul><li>Enables you to unpublished your newsletter.</li></ul></ul>' .
        '<ul><li><strong>Preview Button</strong></li>' .
        '<ul><li>Preview the content and format of your newsletter.</li></ul></ul>' .
        '<ul><li><strong>Send Button</strong></li>' .
        '<ul><li>Enables you to manually send the newsletter to your list of subscribers.</li></ul></ul>' .
        '<ul><li><i>Note: You can only edit an unpublished newsletter.</i></li></ul>');
define('_JNEWS_AUTORESPONDER_GUIDE', '<strong>Autoresponder Management:</strong><br/>'.
		  '<ul><li>Provided that you have created <i><u>Auto-responder</u></i> type of list you can proceed creating your <i><u>Autoresponder</u></i>.</li>'.
		  '<li>During the creation process you can specify the <i><u>Number of Delays</u></i> for your autoresponder, after the previous one has been processed.</li>' .
		  '<li> The process is more or less the same on how to create your newsletter.</li></ul>');
define('_JNEWS_SMARTNEWSLETTER_GUIDE', '<strong>Smart-Newsletter Management:</strong> <br/>' .
		 '<ul><li>Provided that you have created <i>list(s)</i> and <i>latest created</i>, <i>modified</i> and <i>published article</i> on your site you can proceed creating <i><u>SmartNewsletter</u></i>.</li>'.
         '<li>The creation process is more or less the same with Newsletter Creation.</li>' .
         '<li>From the <i><u>Smart-Newsletter Tab</u></i> during creation you can specify your settings for the processing of your Smart-Newsletters.</li>');
define('_JNEWS_TEMPLATES_GUIDE', '<strong>Template Management:</strong><br><ul><li>Templates can be very useful in creating newsletter.</li>' .
		'<li>This view will allow you to create Templates for your newsletters</li>' .
		'<li><i><u>Default Template</u></i> will be applied to the newly created newsletter.</li>' .
		'<li><i><u>Inline CSS</u></i> of the template will be applied/inherited to the created newsletter.</li>' .
		'<li>You can also choose a <i><u>Background Color</u></i> that will be a background of the newsletter.</li>' .
		'<li>Note: Only newly created newsletter will get the html of the default template</li></ul>' .
		'<ul><strong>Default Button</strong>'.
		'<ul><li>Inorder to make your Template as the default template to be used in your newsletter you just need to click on this button.</li></ul></ul>');
define('_JNEWS_QUEUE_GUIDE','<strong>Queue Management:</strong><br/> ' .
		'<ul><li>This view enables you to see your <i><u>Queued Mailings</u></i>.' .
		'<li>These are your <i><u>Scheduled Newsletters</i></u>, <i><u>Autoresponders</i></u> and <i><u>Smart-Newsletters</i></u></li>'.
        '<li>The <i><u>Process Queue Button</i></u> will allow you to proces your queued mailings manually by just clicking the said button.</li>' .
        '<li>The <i><u>Reset S.N. Counter Button</i></u> will allow you to reset the <i>next send date</i> or <i>generated date</i> of your Smart-Newsletter.</li>' .
        '<li>The <i><u>Empty Queue Button</i></u> will allow you to clean the whole queue.</li></ul>');
define('_JNEWS_ABOUT_GUIDE','JNEWSLETTER');
define('_JNEWS_IMPORT_GUIDE','<strong>Import Management:</strong><br/>'.
         '<ul><li>Here you can import your subscribers to all your lists or to select lists.</li>'.
         '<li>By following the link given below, you can proceed importing your subscribers.</li>'.
         '<li><i>Note: You need to create first your lists before importing your subscribers.</i></li></ul>');
define('_JNEWS_CONFIGURATION_GUIDE','<strong>Configuration:</strong><br/>'.
        '<ul>All the jnewsletter configuration settings can be done in this area.<br/><br/>'.
	    '<strong>Mail Tab:</strong>'.
	    '<ul><li>The area where you can define the Mail Settings and Sending Settings of jNews depending on your server requirements.</li></ul>'.
	    '<br/><strong>Subscribers Tab:</strong>'.
	    '<ul><li>The area where we can define the subscription settings both from the backend and frontend of your site.</li></ul>'.
	    '<br/><strong>Scheduler Tab:</strong>'.
	    '<ul><li>The area where we can specify the Scheduler Frequency so do with Maintenance Settings on the sending of your mailings.</li>
         <li>The Information entered on this area depends also on your server requirements or server limitation.</li></ul>'.
	    '<br/><strong>Logs & Stats Tab:</strong>'.
	    '<ul><li>The area to specify the Statistics Settings and Logs Settings.</li></ul>'.
	    '<br/><strong>Archive Tab:</strong>'.
	    '<ul><li>This is mainly used for the auto archive frequency.</li></ul>'.
	    '<br/><strong>Miscellaneous Tab:</strong>'.
	    '<ul><li>All the other settings and preferences can be found here.</li></ul>'.
	    '<br/><strong>Queue Tab:</strong>'.
	    '<ul><li>Mainly used for the Queue Management View (available for Plus and Pro Version).</li></ul>'.
	    '<br/><strong>License Tab:</strong>'.
	    '<ul><li>The area where we can validate the license by just following the steps presented.</li></ul></ul>');
define('_JNEWS_EMPTY_Q','Empty Queue');
define('_JNEWS_RESET_SN','Reset S.N. Counter');
define('_JNEWS_Q_M1','There are no emails in the queue.');
define('_JNEWS_INSTALL_CLICKSTART', 'Click here to get started!');
define('_JNEWS_INSTALL_DESC', 'Thank you for choosing jNews.<br><br>
jNews is a mailing lists, newsletters, auto-responders and follow up tool for communicating effectively with your users and customers.');
define('_JNEWS_INSTALL_ERRORN' , 'If you have error during the installation process, please refer to our');
define('_JNEWS_INSTALL_DOC' , 'documentation here.');
define('_JNEWS_INSTALL_SUCC' , 'Successfuly Installed.');
define('_JNEWS_INSTALL_STATUS_CONFIG' , 'jNews Configuration:');
define('_JNEWS_INSTALL_STATUS_PLUGIN' , 'jNews Plugin(Bot):');
define('_JNEWS_INSTALL_STATUS_MOD' , 'jNews Module:');
define('_JNEWS_INSTALL_UPDATES' , 'jNews Updates');
define('_JNEWS_STATS_GUIDE', '<strong>Mailing Reports: </strong><br/>'.
		'<ul> <li>It will generate a list of mailings sent based on the given date range. </li> ' .
		'<li>It will count the following: <ul><li> the no. of mails sent in HTML & Text Format,</li>' .
			'<li> no. of how many viewed the mails in HTML format, </li>' .
			'<li>how many mail sent that are failed, </li><li>still on-process (pending), ' .
			'</li><li>email bounced,</li> <li>and the total sent is the no. of emails sent on each mailing.</li> </ul></li></ul>'.
		'<strong>List Reports:</strong> <br/>'.
		'<ul> <li>It will generate a listing of List Names based on the date of subscriptions on a given date range. </li>' .
			'<li>It will list the following:  <ul><li>total no. of subscribers who made a subscription </li> ' .
			'<li>total no. of subscribers who unsubscribed, </li>' .
			'<li>total no. of confirmed and unconfirmed subscribers on each list type. </li>  </ul></li></ul>'.
		'<strong>Subscribers Report:</strong> <br/>'.
		'<ul> <li>It will generate a report on the total no. of subscribers on a given date range.</li> </ul>'.
		'<strong>How to Export the Report into CSV File:</strong>'.
		'<ul> <li>On each Reports (Mailing, List and Subscribers), an export icon is found at the upper right of each tab.</li>'.
		'<li>Click the export icon to export the file.</li></ul>'
		);
define('_JNEWS_TEMPLATE_ALIAS' , 'Alias');
define('_JNEWS_SEARCH' , 'Search');
define('_JNEWS_SEARCH_GO' , 'Go');
define('_JNEWS_SEARCH_RESET' , 'Reset');
define('_JNEWS_SENDER_LIST_INFO', 'Click to select sender from list' );
define('_JNEWS_FILTER_MAILING' , 'Select a Mailing ');
define('_JNEWS_MESSAGE_QUEUE' , 'All Mailings in the Queue ');
define('_JNEWS_FILTER_LIST' , 'Select Type');
define('_JNEWS_MAILING_TAG' , 'Tag');
define('_JNEWS_MAILING_TAGINSERT' , 'Insert');
define('_JNEWS_MAILING_TAG_INSTRUCT' , '<p>Select the desired tag to be added and click insert.<br> Note: <i>Make sure to place the cursor in the text editor where you want to insert.</i></p>');
define('_JNEWS_COLUMN1_DESC', 'This will be replaced by your user defined column 1');
define('_JNEWS_COLUMN2_DESC', 'This will be replaced by your user defined column 2');
define('_JNEWS_COLUMN3_DESC', 'This will be replaced by your user defined column 3');
define('_JNEWS_COLUMN4_DESC', 'This will be replaced by your user defined column 4');
define('_JNEWS_COLUMN5_DESC', 'This will be replaced by your user defined column 5');
define('_JNEWS_TAG_SUBSCRIPTION', '[SUBSCRIPTIONS]');
define('_JNEWS_TAG_UNSUBSCRIBE', '[UNSUBSCRIBE]');
define('_JNEWS_TAG_SUBSCRIPTION_DESC', 'This will be replaced by the defined constant "_JNEWS_CHANGE_EMAIL_SUBSCRIPTION" in the translation.');
define('_JNEWS_TAG_UNSUBSCRIBE_DESC', 'This will be replaced by the defined constant "_JNEWS_UNSUBSCRIBE" in the translation.');
define('_JNEWS_TAG_VIEWONLINETXT', '{viewonline:vis nyhetsbrevet i din nettleser}');
define('_JNEWS_TAG_VIEWONLINE', 'vis nyhetsbrevet i din nettleser');
define('_JNEWS_TAG_VIEWONLINE_DESC', 'This will be replaced by either the default text or what you put in the "text here" with a link.');

//since 1.1.0
define('_JNEWS_SHOW_CRON','Aktiver joobi-cron');

define('_JNEWS_SHOW_CRON_TIPS','Enables the cron set up upon the installation of jNews.<br>This cron was set up in http://www.joobi.co and will be triggered every 15 minutes');
define('_JNEWS_CRON_FSETTINGS' , 'Cron Settings');

define('_JNEWS_INSTALL_ACAUPDATEMSG' , 'Do you want to import your database from Acajoom to jNews?');
define('_JNEWS_INSTALL_ACAUPDATEBTN' , 'Import Acajoom Data');
define('_JNEWS_INSTALL_ACAUPDATENOTE' , 'NOTE : This will transfer data stored from Acajoom tables to jNews tables.');

define('_JNEWS_MAILING_UPDATED' , 'Mailings successfully imported.');
define('_JNEWS_DETAIL_UPDATED' , 'Stats Details successfully imported');
define('_JNEWS_GLOBAL_UPDATED' , 'Stats Globals successfully imported');
define('_JNEWS_SUBSCRIBER_UPDATED' , 'Subscribers successfully imported');
define('_JNEWS_QUEUE_UPDATED' , 'Queues successfully imported');
define('_JNEWS_LISTSUBSCRIBER_UPDATED' , 'List Subscribers successfully imported');

define('_JNEWS_LIST_UPDATED_FAILED' , 'No Lists successfully imported');
define('_JNEWS_MAILING_UPDATED_FAILED' , 'No Mailings successfully imported');
define('_JNEWS_DETAIL_UPDATED_FAILED' , 'No Detailed Statistics successfully imported');
define('_JNEWS_GLOBAL_UPDATED_FAILED' , 'No Global Statistics successfully imported');
define('_JNEWS_SUBSCRIBER_UPDATED_FAILED' , 'No Subscribers successfully imported');
define('_JNEWS_QUEUE_UPDATED_FAILED' , 'No records successfully imported to Queue');
define('_JNEWS_LISTSUBSCRIBER_UPDATED_FAILED' , 'No records successfully imported to List Subscribers');

define('_JNEWS_LEGEND' , 'Legend');
define('_JNEWS_NOTVISIBLE', 'Not Visible');
define('_JNEWS_SCHEDULED', 'Scheduled');
define('_JNEWS_SUBSCRIBERS_UNREGISTERED', 'Unregistered');
define('_JNEWS_TEMPLATE_UPLOAD_SUCCESS', 'Successfully uploaded template' );
define('_JNEWS_TEMPLATE_UPLOAD_FAIL', 'Fail to upload template' );
define('_JNEWS_UPLOAD_ZIP_INVALID', 'Can only upload templates in zip files' );
define('_JNEWS_CUSTOMCSS', 'Input your Custom CSS here');
define('_JNEWS_TEMPLATE_ALERT', 'Template name and alias are required!');

//since 2.2.0
define('_JNEWS_UNSUB_NOTIFYMSG','Send Unsubscribe Notification');
define('_JNEWS_SEND_UNSUBNOTIFY_TIPS', 'Click Yes to send an unsubscribe notification message.');
define('_JNEWS_UNSUB_ADMINMESSAGE', 'Unsubscribe Notification Message');
define('_JNEWS_INFO_AMIN_UNSUB_NOTIFY', 'This message will be send to the Admin when a subscriber unsubscribes to one or many lists. Any message can be entered here.');

//templates
define('_JNEWS_CSS_TOGGLESTYLE','Toggle Styling');
define('_JNEWS_EXTERNALCSS_LINK','Add External CSS Link');
define('_JNEWS_EXTERNALCSS_PROCESS','Process');
define('_JNEWS_TEMP_COMBINECLASS','Combined class selector');
define('_JNEWS_COMBINECLASS_SUPPORT','is not supported');
define('_JNEWS_TEMP_COMBINECLASS_IN','in');
define('_JNEWS_TEMP_HTMLTAG','Found html tag ');
define('_JNEWS_TEMP_CONTDEV','You may contact developer for it to be added');
define('_JNEWS_TEMP_COMBCLASSPSEUDO','Combined pseudo-class selector');
define('_JNEWS_TEMP_COMBCLASSEID','or element id');

//Menus
define('_JNEWS_MENU_LIVE_SUPPORT','Brukerstøtte - Live');

//Tags
define ('_JNEWS_SMART_TAG', 'This will be replaced by the latest created, modified and published article when you create a Smart-Newsletter type of mailing.');

//Toobar Menus
define('_JNEWS_DONEW_SUBSCRIBERB', 'Navn og epost er påkrevd!');

//since 3.1.0
define('_JNEWS_IP', 'IP');
define('_JNEWS_MENU_STATS_REPORTS', 'Rapporter &amp; Statistikker');
define('_JNEWS_LIST_T_ADMIN_NOTIFICATION' , 'Administratorvarsel');
define('_JNEWS_MENU_REFRESH_STATS' , 'Oppfrisk');
define('_JNEWS_MENU_GENERATE_STATS' , 'Generer');

//since 3.2.0
define('_JNEWS_LIST_T_LIST' , 'Liste');
define('_JNEWS_UNSUBSCRIBE_ADMIN_NOTIFICATION', 'This is a notification email that a user unsubscribes to one of the lists.');

//Tagging
define('_JNEWS_TAG_MODNAME' , 'Modulnavn');
define('_JNEWS_TAG_MODTYPE' , 'Type');
define('_JNEWS_TAG_MODPOSITION' , 'Posisjon');
define('_JNEWS_TAG_ACL' , 'Tilgangsnivå');
define('_JNEWS_TAG_SPECIAL' , 'Spesiell');
define('_JNEWS_TAG_PUBLIC' , 'Offentlig');
define('_JNEWS_TAG_ARTICLESECTION' , 'Seksjon');
define('_JNEWS_TAG_ARTICLECATEGORY' , 'Kategori');
define('_JNEWS_TAGMENU_MODULE' , 'Joomla-modul');
define('_JNEWS_TAGMENU_AUTOCONTENT' , 'Autoinnhold');
define('_JNEWS_TAGMENU_SUBSCRIPTION' , 'Abonnement');
define('_JNEWS_TAGMENU_USERS' , 'Brukere');
define('_JNEWS_TAGMENU_DATETIME' , 'Dato/Tid');
define('_JNEWS_TAGMENU_WEBSITE' , 'Sidelenker');
define('_JNEWS_TAGMENU_CONTENT' , 'Innhold');
define('_JNEWS_TAGPICKLIST_ORDERING' , 'Sortering');
define('_JNEWS_TAGPICKLIST_ORDERINGTIP' , 'Select the way you want your articles to be ordered.');
define('_JNEWS_TAGPICKLIST_CREATED' , 'Opprettet (Nyeste først)');
define('_JNEWS_TAGPICKLIST_TITLE' , 'Tittel');
define('_JNEWS_TAGPICKLIST_Order' , 'Sorter');

define('_JNEWS_SELECT_MAILING', 'Please select a mail to edit!');
define('_JNEWS_DELETE_MAILING', 'Please select a mail to delete!');
define('_JNEWS_COPY_MAILING', 'Please select a mail to copy!');
define('_JNEWS_TAG_CONFIRM_DESC', 'This will be replaced by the defined constant "_JNEWS_CONFIRM_SUBSCRIPTION" in the translation with the confirmation link.');
define('_JNEWS_TEMPLATE_SAVED', 'Template successfully saved.');
define('_JNEWS_SUBSCRIPTION_NOT_AVAIL_LIST', 'You are trying to subscribe to a listid that does not exist.');

//since 4.0.0
define('_JNEWS_MENU_TAG' , 'Merker');
define('_JNEWS_TAG_EMAIL_DESC', 'This will be replaced by the email of the subscriber.');
define('_JNEWS_TAG_FWDTOFRIEND', 'Forward to a friend.');
define('_JNEWS_TAGTITLE_SITE', 'Site Links');
define('_JNEWS_TAGTITLE_CONTENT', 'Joomla Contents');
define('_JNEWS_TAGTITLE_AUTOCONTENT', 'Automatic Joomla Contents');
define('_JNEWS_TAGTITLE_MOD', 'Joomla Modules');
define('_JNEWS_TAGCAPTION_ALL', 'ALL');
define('_JNEWS_SUCCESS_COPIED' , ' successfully copied.');
define('_JNEWS_TAGCAPTION_ALLSECCAT' , 'ALL SECTIONS AND CATEGORIES');
define('_JNEWS_FWD_MYDETAILS' , 'My Details');
define('_JNEWS_FWD_WANTTO' , 'I want to forward this email to');
define('_JNEWS_FWD_MESSAGE' , 'Enter a message');
define('_JNEWS_FWD_MESSAGEHID' , 'This email was forwarded to you by');
define('_JNEWS_FWD_SENDEMAIL' , 'Send Email');
define('_JNEWS_FWD_ADDFIELD' , 'Add another friend.');

define('_JNEWS_NEWSLETTER_ARCHIVE', 'Nyhetsbrevarkiv');
define('_JNEWS_FWDTOFRIEND_ALRT_UNAME', 'Please enter your name.');
define('_JNEWS_FWDTOFRIEND_ALRT_UEMAIL', 'Please enter your valid e-mail address.');
define('_JNEWS_FWDTOFRIEND_ALRT_FNAME', 'Please enter your friend\'s name.');
define('_JNEWS_FWDTOFRIEND_ALRT_FEMAIL', 'Please enter a valid e-mail address of your friend.');
define('_JNEWS_FWDTOFRIEND_SUCCESS', 'Mailing successfully forwarded to ');
define('_JNEWS_FWDTOFRIEND_FAILED', 'Mailing not successfully forwarded to ');
define('_JNEWS_TAGSITE_TAGTIP', 'Click Insert to add the tag in the newsletter.');
define('_JNEWS_TAGSITE_CAPTION', 'Tag Caption');
define('_JNEWS_TAGSITE_CAPTIONTIP', 'Change the tag caption or text here.');
define('_JNEWS_TAGSMART_ALERT_SELECT', 'Please select your Automatic Content to be added in your newsletter!');
define('_JNEWS_ARLIST', 'Auto-responders');
define('_JNEWS_NEW_SUBSCRIBER', 'Subscriber Succesfully Saved.');
define('_JNEWS_EDIT_AR', 'Edit an Auto-responder');
define('_JNEWS_ARINFO_LIST_DELAY', 'Specify the delay(in days) of this autoresponder from the date of subscription.');
define('_JNEWS_SUBS_LIST', 'This Auto-responder will be attached to the following selected lists:');
define('_JNEWS_SUBS_LIST2', 'Attach lists');
define('_JNEWS_SUBS_LIST_TIPS', 'Attach this auto-responder to the following lists . If a user subscribes to these lists they will also be subscribed to the autoresponder. ');
define('_JNEWS_PRIORD_LISTTYPE','Prioritized list type');
define('_JNEWS_PRIORD_LISTTYPE_TIPS', 'Prioritize either the list type or auto-responder type in the subscription of the lists.');
define('_JNEWS_PRIORD_SUBS','Prioritized subscription');
define('_JNEWS_PRIORD_SUBS_TIPS', 'Prioritize either the subscription or unsubscription to a list or just do nothing to the existing subscriptions.<br/><b>Ignore Changes</b>: We do nothing to the change subscriptions of auto-responder irregardless being unsubscribed or subscribed when a change of subscription is also done to the list where the auto-responder is being attached.<br/><b>Subscription</b>: We force subscribe users to the auto-responders that is being attached to the subscribed list.<br/><b>Unsubscription</b>: We unsubscribe the user to the attached auto-responder even if the user subscribed to the list where the autoresponder is attached.');
define('_JNEWS_REMAIN_SUBS','Ignore Changes');
define('_JNEWS_UNSUBS','Unsubscription');
define('_JNEWS_SUBSCRIPTION_AR','Abonnement på autoutsendelser');
define('_JNEWS_SUBSCRIPTION_LIST','Abonnement på nyhetsbrev');
define('_JNEWS_YOUR_CRON', 'Your Cron url: ');
define('_JNEWS_LAUNCH_CRON', 'Launch Cron');

define('_JNEWS_SAFEUNSUBSCRIBE', 'Safe Unsubscribe');
define('_JNEWS_INVIUNPUB', 'The lists you subscribed are either in invisible status or unpublished.<br> Only the admin of the site can unsubscribe you from those lists as of now.');
define('_JNEWS_UNSUBSTOLISTS_MESSAGE','Are you sure you want to unsubscribe from these lists?');
define('_JNEWS_SELECT_ALLLISTS','Click to select all List');
define('_JNEWS_SELECT_ALLLAUTOR','Click to select all Auto-responder');
define('_JNEWS_UNSUBSLINK_TIP','Select yes if you prefer to show unsubscribe link on mailings');
define('_JNEWS_CHANGESUBSLINK_TIP','Select yes if you prefer to show subscription link on mailings for subscriber to change his subscription');
define('JNEWS_AUTOMATIC_CRON', 'An automatic cron is created upon the installation of jNews.<br/>This cron was automatically set up in www.joobi.co. This cron has the frequency of 15 minutes.');
define('_JNEWS_IMPORTSUB_TIPS','Import subscribers. The information in the file need to be to the following format: <b>Name, email, receiveHTML(1/0), <span style="color: rgb(255, 0, 0);">confirmed(1/0)</span></b>');
define('_JNEWS_NOSMARTTAG', 'The smartnewsletter doesn\'t contain a [SMARTNEWSLETTER] tag yet. Please insert the tag in the content.');
define('_JNEWS_DELETEBTN','Delete Queue');
define('_JNEWS_MENU_STOPQ','Stop Queue');
define('_JNEWS_MENU_STARTQ','Start Queue');
define('_JNEWS_MAILING_QUEUE_DELETED', 'The queue entry have been successfully deleted for this mailing.');
define('_JNEWS_QUEUE_SETTING','Queue Setting');
define('_JNEWS_QUEUESTATS_ON','On');
define('_JNEWS_QUEUESTATS_OF','Off');
define('_JNEWS_QUEUESTATS_TIPS','Turn On if you want the Process Queue to start or Off if you want it to stop.');
define('_JNEWS_MENU_STARTQ_MSG','The processing of queue has been started.');
define('_JNEWS_MENU_STOPQ_MSG','The processing of queue has been stopped.');
define('_JNEWS_QUEUESTATS_NOTIFY','The queue has been stopped if you want to continue proccessing it, you need to ');
define('_JNEWS_NEW_SUB','jNews Subscription');

//since
define('_JNEWS_NEW_URL_PASS_TIPS','Enter the password to be able to add a subscriber via url. Append the catcher variable passwordA in the URL.');
define('_JNEWS_CRON_PASSWORD', 'Cron-passord');
define('_JNEWS_USE_CRON_PASS', 'Use Password for Cron');

//since 4.2.0
define('_JNEWS_QUEUE_STATUS','Kø-status');
define('_JNEWS_SMTPPORT','SMTP-port');
define('_JNEWS_SMARTQUEUE','Smart-kø');
define('_JNEWS_SMARTQ_ON','På');
define('_JNEWS_SMARTQ_OF','Av');
define('_JNEWS_SMARTQ_TIPS','Turn On if you want to enable the Smart processing of queue which will overcome your server limitation.');
define('_JNEWS_SUB_INFO_FIELDS', 'Show More Subscriber Info');
define('_JNEWS_SUB_INFO_FIELDS_TIPS', 'Show IP ,Register Date, User id and Black List fields in the subscriber form in the frontend');
define('_JNEWS_JSUB', 'Frontend Management');
define('_JNEWS_JSUB_TIPS', 'Choose if only the owner of the list or the super admin can only edit and create/view newsletters in the frontend. A user can own a list if he is subscribed via jSubscription');
define('_JNEWS_BYOWNER', 'Etter eier');
define('_JNEWS_LIST_ACESS', 'Etter listetilgang');
define('_JNEWS_CAPTCHA_WARN', 'Cannot create Captcha Image either you do not have php GD Library installed or php GD Library has not been loaded with TFF support <br>Check your phpinfo() or you can turn off the Enable Captcha option from ');
define('_JNEWS_CAPTCHA_LINK','jNews Configuration under Subscriber Tab');
define('_JNEWS_MORE_TEMPLATES','More Templates');

//Since 5.0.0
define('_JNEWS_TAGMENU_K2CONTENT', 'K2-innhold');
define('_JNEWS_TAGMENU_VMPRODUCTS', 'Virtuemart-produkter');
define('_JNEWS_TEMPLATE_AVLB','Tilgjengelighet');
define('_JNEWS_TEMPLATE_INS','Installert');
define('_JNEWS_TEMPLATE_DWN','Last ned');
define('_JNEWS_TEMPLATE_FDWN','Fri nedlasting');
define('_JNEWS_TEMPLATE_IMG','Bilde');
define('_JNEWS_SUBS_INFO','You do not have subscription record to any mailing lists so it is not possible to unsubscribe here.');
define ('_JNEWS_UNSUBS_STATUS','You are already unsubscribe to the list.');
define('_JNEWS_CAPTCHAW', 'Captcha Width');
define('_JNEWS_CAPTCHAW_TIPS', 'Define the width of the captcha in the subscriber module');
define('_JNEWS_CAPTCHAH', 'Captcha Height');
define('_JNEWS_CAPTCHAH_TIPS', 'Define the height of the captcha in the subscriber module');
define('_JNEWS_CAPTCHA_MSG', 'Kindly enter the correct captcha code.');
define('_JNEWS_MCRYPT_MESSAGE', 'The captcha has been turned on without the mcrypt library enabled.<br>Kindly enable the mcrypt extension in your php.ini.<br>You may also want to disable captcha in ');

//Since 5.1.0
define('_JNEWS_FORCED_HTML', 'Send kun i HTML?');
define('_JNEWS_FORCED_HTML_TIP','Yes if you want to force only html mailing will be sent to your subscribers.');
