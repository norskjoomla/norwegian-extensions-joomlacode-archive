<?php
defined('_JEXEC') OR defined('_VALID_MOS') OR die('...Direct Access to this location is not allowed...');

/**
* <p>Norwegian language file.</p>
* @author Foreningen Joomla! i Norge, Rune Rasmussen <oversettelser@joomlainorge.no>
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
 //acajoom Description
define('_ACA_DESC_NEWS', 'Acajoom er en epostliste, nyhetsbrev, \'auto respons\', og oppfølgingsverktøy for å kommunisere med deres brukere og kunder.  ' .
		'Acajoom, deres kommunikasjonspartner!');
define('_ACA_FEATURES', 'Acajoom, deres kommunikasjonspartner!');

// Type of lists
define('_ACA_NEWSLETTER', 'Nyhetsbrev');
define('_ACA_AUTORESP', 'Automatisk svar');
define('_ACA_AUTORSS', 'Automatisk RSS');
define('_ACA_ECARD', 'E-kort');
define('_ACA_POSTCARD', 'Postkort');
define('_ACA_PERF', 'Ytelse');
define('_ACA_COUPON', 'Kupong');
define('_ACA_CRON', 'Cron-jobb');
define('_ACA_MAILING', 'Utsendelse');
define('_ACA_LIST', 'Liste');

 //acajoom Menu
define('_ACA_MENU_LIST', 'Lister');
define('_ACA_MENU_SUBSCRIBERS', 'Abonnenter');
define('_ACA_MENU_NEWSLETTERS', 'Nyhetsbrev');
define('_ACA_MENU_AUTOS', '\'Auto respons\'');
define('_ACA_MENU_COUPONS', 'Kuponger');
define('_ACA_MENU_CRONS', 'Cron-jobber');
define('_ACA_MENU_AUTORSS', 'Automatisk RSS');
define('_ACA_MENU_ECARD', 'E-kort');
define('_ACA_MENU_POSTCARDS', 'Postkort');
define('_ACA_MENU_PERFS', 'Ytelser');
define('_ACA_MENU_TAB_LIST', 'Lister');
define('_ACA_MENU_MAILING_TITLE', 'Mailings');
define('_ACA_MENU_MAILING', 'Utsendelser for ');
define('_ACA_MENU_STATS', 'Statistikker');
define('_ACA_MENU_STATS_FOR', 'Statistikker for ');
define('_ACA_MENU_CONF', 'Konfigurasjon');
define('_ACA_MENU_UPDATE', 'Import');
define('_ACA_MENU_ABOUT', 'Om');
define('_ACA_MENU_LEARN', 'Opplæringssenter');
define('_ACA_MENU_MEDIA', 'Mediabehandling');
define('_ACA_MENU_HELP', 'Hjelp');
define('_ACA_MENU_CPANEL', 'Kontrollpanel');
define('_ACA_MENU_IMPORT', 'Import');
define('_ACA_MENU_EXPORT', 'Eksport');
define('_ACA_MENU_SUB_ALL', 'Meld på alle');
define('_ACA_MENU_UNSUB_ALL', 'Meld av alle');
define('_ACA_MENU_VIEW_ARCHIVE', 'Arkiv');
define('_ACA_MENU_PREVIEW', 'Forhåndsvis');
define('_ACA_MENU_SEND', 'Send');
define('_ACA_MENU_SEND_TEST', 'Send eposttest');
define('_ACA_MENU_SEND_QUEUE', 'Behandle kø');
define('_ACA_MENU_VIEW', 'Vis');
define('_ACA_MENU_COPY', 'Kopier');
define('_ACA_MENU_VIEW_STATS', 'Vis statistikker');
define('_ACA_MENU_CRTL_PANEL', 'Kontrollpanel');
define('_ACA_MENU_LIST_NEW', 'Opprett liste');
define('_ACA_MENU_LIST_EDIT', 'Rediger en liste');
define('_ACA_MENU_BACK', 'Tilbake');
define('_ACA_MENU_INSTALL', 'Installasjon');
define('_ACA_MENU_TAB_SUM', 'Oppsumering');
define('_ACA_STATUS', 'Status');

// messages
define('_ACA_ERROR', ' En feil oppstod!');
define('_ACA_SUB_ACCESS', 'Tilgangsrettigheter');
define('_ACA_DESC_CREDITS', 'Bidragsytere');
define('_ACA_DESC_INFO', 'Informasjon');
define('_ACA_DESC_HOME', 'Hjemmeside');
define('_ACA_DESC_MAILING', 'Distrubusjonsliste');
define('_ACA_DESC_SUBSCRIBERS', 'Abonnenter');
define('_ACA_PUBLISHED', 'Publisert');
define('_ACA_UNPUBLISHED', 'Upublisert');
define('_ACA_DELETE', 'Slett');
define('_ACA_FILTER', 'Filter');
define('_ACA_UPDATE', 'Oppdater');
define('_ACA_SAVE', 'Lagre');
define('_ACA_CANCEL', 'Avbryt');
define('_ACA_NAME', 'Navn');
define('_ACA_EMAIL', 'Epost');
define('_ACA_SELECT', 'Velg');
define('_ACA_ALL', 'Alle');
define('_ACA_SEND_A', 'Send en ');
define('_ACA_SUCCESS_DELETED', ' velykket slettet');
define('_ACA_LIST_ADDED', 'Listen ble opprettet');
define('_ACA_LIST_COPY', 'Listen ble kopiert');
define('_ACA_LIST_UPDATED', 'Listen ble oppdatert');
define('_ACA_MAILING_SAVED', 'Brevene er lagret.');
define('_ACA_UPDATED_SUCCESSFULLY', 'vellykket oppdatert.');

### Subscribers information ###
//subscribe and unsubscribe info
define('_ACA_SUB_INFO', 'Abonnententinformasjon');
define('_ACA_VERIFY_INFO', 'Vennligst bekreft lenken du sendte inn, informasjon mangler. ');
define('_ACA_INPUT_NAME', 'Navn');
define('_ACA_INPUT_EMAIL', 'Epost');
define('_ACA_RECEIVE_HTML', 'Motta HTML?');
define('_ACA_TIME_ZONE', 'Tidssone');
define('_ACA_BLACK_LIST', 'Svarteliste');
define('_ACA_REGISTRATION_DATE', 'Registreringsdato');
define('_ACA_USER_ID', 'Bruker-id');
define('_ACA_DESCRIPTION', 'Beskrivelse');
define('_ACA_ACCOUNT_CONFIRMED', 'deres konto har blitt aktivert.');
define('_ACA_SUB_SUBSCRIBER', 'Abonnent');
define('_ACA_SUB_PUBLISHER', 'Utgiver');
define('_ACA_SUB_ADMIN', 'Administrator');
define('_ACA_REGISTERED', 'Registrert');
define('_ACA_SUBSCRIPTIONS', 'Ditt abonnement');
define('_ACA_SEND_UNSUBCRIBE', 'Send melding ved avmelding');
define('_ACA_SEND_UNSUBCRIBE_TIPS', 'Klikk \'Ja\' for å sende en epost med bekreftelse av avmeldingen.');
define('_ACA_SUBSCRIBE_SUBJECT_MESS', 'Vennligst bekreft ditt abonnement. ');
define('_ACA_UNSUBSCRIBE_SUBJECT_MESS', 'Bekreftelse på avmelding');
define('_ACA_DEFAULT_SUBSCRIBE_MESS', 'Hei [NAME],<br />' .
		'Kun et steg igjen og du abonnerer på denne listen. Vennligst klikk på lenken for bekrefte ditt abonnement.' .
		'<br /><br />[CONFIRM]<br /><br />Kontakt vår nettredaktør om du har noen spørsmål.');
define('_ACA_DEFAULT_UNSUBSCRIBE_MESS', 'Dette er en epost for å bekrefte at du ikke lenger abonnerer på vårt nyhetsbrev. Vi beklager deres beslutning, men skulle du noen gang ønske å bli abonnent igjen kan du melde deg på via vår nettside. Kontakt vår nettredaktør om du har noen spørsmål.');

// Acajoom subscribers
define('_ACA_SIGNUP_DATE', 'Startdato');
define('_ACA_CONFIRMED', 'Bekreftet');
define('_ACA_SUBSCRIB', 'Abonnér');
define('_ACA_HTML', 'HTML-utsendelser');
define('_ACA_RESULTS', 'Resultater');
define('_ACA_SEL_LIST', 'Velg en liste');
define('_ACA_SEL_LIST_TYPE', '- Velg listetype -');	
define('_ACA_SUSCRIB_LIST', 'Liste med alle abonnenter');
define('_ACA_SUSCRIB_LIST_UNIQUE', 'Abonnenter av: ');
define('_ACA_NO_SUSCRIBERS', 'Ingen abonnenter ble funnet i denne listen.');
define('_ACA_COMFIRM_SUBSCRIPTION', 'En epostbekreftels er nå sent til deg.  Vennligst sjekk deres epost og klikk på lenken i eposten fra oss.<br />' .
		'Du må bekrefte deres epostadresse før abonnementet ditt aktiveres.');
define('_ACA_SUCCESS_ADD_LIST', 'Du har nå blitt lagt til i listen.');


 // Subcription info
define('_ACA_CONFIRM_LINK', 'Klikk her for å bekrefte ditt abonnement');
define('_ACA_UNSUBSCRIBE_LINK', 'Klikk her for å avslutte abonnementet ditt');
define('_ACA_UNSUBSCRIBE_MESS', 'deres epostadresse har blitt fjernet fra listen');

define('_ACA_QUEUE_SENT_SUCCESS', 'Alle planlagte utsendelser har blitt sent.');
define('_ACA_MALING_VIEW', 'Vis alle utsendelser');
define('_ACA_UNSUBSCRIBE_MESSAGE', 'Er du sikker på at du ønsker å avslutte abonnementet ditt?');
define('_ACA_MOD_SUBSCRIBE', 'Abonnér');
define('_ACA_SUBSCRIBE', 'Abonnér');
define('_ACA_UNSUBSCRIBE', 'Avslutt abonnement');
define('_ACA_VIEW_ARCHIVE', 'Vis arkiv');
define('_ACA_SUBSCRIPTION_OR', ' eller klikk her for å oppdatere deres opplysninger');
define('_ACA_EMAIL_ALREADY_REGISTERED', 'Denne epostadressen er allerede registrert.');
define('_ACA_SUBSCRIBER_DELETED', 'Abonnenten er slettet.');


### UserPanel ###
 //User Menu
define('_UCP_USER_PANEL', 'Brukerkontrollpanel');
define('_UCP_USER_MENU', 'Brukermeny');
define('_UCP_USER_CONTACT', 'Mine abonnementer');
 //Acajoom Cron Menu
define('_UCP_CRON_MENU', 'Cron-jobber');
define('_UCP_CRON_NEW_MENU', 'Ny Cron-jobb');
define('_UCP_CRON_LIST_MENU', 'List mine Cron-jobber');
 //Acajoom Coupon Menu
define('_UCP_COUPON_MENU', 'Kuponger');
define('_UCP_COUPON_LIST_MENU', 'Kupongliste');
define('_UCP_COUPON_ADD_MENU', 'Legg til kupong');

### lists ###
// Tabs
define('_ACA_LIST_T_GENERAL', 'Beskrivelse');
define('_ACA_LIST_T_LAYOUT', 'Utforming');
define('_ACA_LIST_T_SUBSCRIPTION', 'Abonnement');
define('_ACA_LIST_T_SENDER', 'Utgiverinformasjon');

define('_ACA_LIST_TYPE', 'Listetype');
define('_ACA_LIST_NAME', 'Listenavn');
define('_ACA_LIST_ISSUE', 'Utgavenr.');
define('_ACA_LIST_DATE', 'Sendingsdato');
define('_ACA_LIST_SUB', 'Nyhetsbrev-mal');
define('_ACA_ATTACHED_FILES', 'Vedlagte filer');
define('_ACA_SELECT_LIST', 'Velg en liste for å redigere denne.');

// Auto Responder box
define('_ACA_AUTORESP_ON', 'Listetype');
define('_ACA_AUTO_RESP_OPTION', 'Valg for \'auto respons\'');
define('_ACA_AUTO_RESP_FREQ', 'Abonnenter kan velge hyppighet på utsendelser');
define('_ACA_AUTO_DELAY', 'Forsinkelse (i dager)');
define('_ACA_AUTO_DAY_MIN', 'Minimum hyppighet');
define('_ACA_AUTO_DAY_MAX', 'Maksimum hyppighet');
define('_ACA_FOLLOW_UP', 'Spesifiser oppfølging av \'auto respons\'');
define('_ACA_AUTO_RESP_TIME', 'Abonnenter kan velge tid');
define('_ACA_LIST_SENDER', 'Utgiver for liste');

define('_ACA_LIST_DESC', 'Listebeskrivelse');
define('_ACA_LAYOUT', 'Utforming');
define('_ACA_SENDER_NAME', 'Avsendernavn');
define('_ACA_SENDER_EMAIL', 'Avsenderadresse');
define('_ACA_SENDER_BOUNCE', 'Svaraddress');
define('_ACA_LIST_DELAY', 'Forsinkelse');
define('_ACA_HTML_MAILING', 'HTML-utsending?');
define('_ACA_HTML_MAILING_DESC', '(om du endrer dette må du lagre og så åpne dette skjermbilde på nytt for å se endringer.)');
define('_ACA_HIDE_FROM_FRONTEND', 'Skjul på brukersiden?');
define('_ACA_SELECT_IMPORT_FILE', 'Velg fil som skal importeres');;
define('_ACA_IMPORT_FINISHED', 'Import fullført');
define('_ACA_DELETION_OFFILE', 'Sletting av fil');
define('_ACA_MANUALLY_DELETE', 'feilet, du må slette filen manuelt');
define('_ACA_CANNOT_WRITE_DIR', 'Kan ikke opprette mappe');
define('_ACA_NOT_PUBLISHED', 'Kunne ikke sende denne utsendelsen, listen er ikke publisert.');

//  List info box
define('_ACA_INFO_LIST_PUB', 'Klikk \'Ja\'for å publisere listen');
define('_ACA_INFO_LIST_NAME', 'Fyll inn navn for listen her. Du kan indentifisere listen med dette navnet.');
define('_ACA_INFO_LIST_DESC', 'Fyll inn en kort beskrivelse av listen her. Beskrivelsen vil være tilgjengelig for sidens besøkende.');
define('_ACA_INFO_LIST_SENDER_NAME', 'Fyll inn navn på avsender av denne utsendelsen. Dette navnet vil være synlig når abonnenter meldinger fra denne listen.');
define('_ACA_INFO_LIST_SENDER_EMAIL', 'Fyll inn epostadressen som meldingene vil bli sent fra.');
define('_ACA_INFO_LIST_SENDER_BOUNCED', 'Fyll inn epostadressen som brukerne kan svare til. Det anbefales at denne er samme som avsenderadressen, hvis ikke vil søppelpostfiltre kunne gi utsendelsen en søppelrangering.');
define('_ACA_INFO_LIST_AUTORESP', 'Velg utsendelsestype for denne listen.<br />' .
		'Nyhetsbrev: normale nyhetsbrev<br />' .
		'\'Auto respons\': er lister som sendes automatisk fra nettsiden etter bestemte intervaller.');
define('_ACA_INFO_LIST_FREQUENCY', 'Tillat brukerne å velge hvor ofte de mottar utsendelser fra listen. Dette gir brukerne mer fleksibilitet.');
define('_ACA_INFO_LIST_TIME', 'Tillat brukerne å velge dere foretrukne tid på døgnet for mottak av utsendelser.');
define('_ACA_INFO_LIST_MIN_DAY', 'Definer hva som er minimum hyppighet for utsendelser som bruker kan velge å motta.');
define('_ACA_INFO_LIST_DELAY', 'Spesifiser forsinkelse mellom dette \'auto respons\'et og det forrige.');
define('_ACA_INFO_LIST_DATE', 'Spesifiser dato for publisering av listen om du vil forsinke dette. <br /> FORMAT : ÅÅÅÅ-MM-DD HH:MM:SS');
define('_ACA_INFO_LIST_MAX_DAY', 'Definer hva som er maksimum hyppighet for utsendelser som bruker kan velge å motta.');
define('_ACA_INFO_LIST_LAYOUT', 'Fyll inn utforming for listen her. Du kan fylle inn hvilken som helst utforming.');
define('_ACA_INFO_LIST_SUB_MESS', 'Denne meldingen vil bli sent ut til nye abonnementer. Du kan selv angi teksten du ønsker her.');
define('_ACA_INFO_LIST_UNSUB_MESS', 'Denne meldingen vil bli sendt til abonnenten når han eller hun avbestiller sit abonnement. Du kan selv angi teksten du ønsker her.');
define('_ACA_INFO_LIST_HTML', 'Merker av hvis du ønsker å sende epost i HTML format. Abonnenter vil kunne spesifisere om de ønsker å motta epost i  HTML-format, eller bare tekst når man abonnere på en HTML-liste.');
define('_ACA_INFO_LIST_HIDDEN', 'Klikk Ja for å skjule listen fra forsiden, brukere kan ikke abonnere men du har fortsatt muligheten for å sende epost.');
define('_ACA_INFO_LIST_ACA_AUTO_SUB', 'Ønsker du å automatisk legge brukere til i abonnementslisten? <br /> <B> Nye Brukere: </ B> vil registerer alle nye brukere som registrerer seg på nettstedet. <br /> <B> Alle brukere: </ B> vil registrere alle registrerte brukere i databasen. <br /> (alle muligheten støttes av Community Builder)');
define('_ACA_INFO_LIST_ACC_LEVEL', 'Velg tilgangsnivået for forsiden. Dette vil vise eller skjule epost til brukergruppene som ikke har tilgang til det, så de ikke har muligheten til å abonnere på en epostliste.');
define('_ACA_INFO_LIST_ACC_USER_ID', 'Velg tilgangsnivået til brukergruppe du ønsker å tillate redigering. Denne brukergruppen og de over vil være i stand til å redigere epost og sende den ut, enten fra forsiden eller baksiden.');
define('_ACA_INFO_LIST_FOLLOW_UP', 'Hvis du vil at auto-svar skal forflytte seg til en annen etter siste melding, så kan du spesifisere neste her.');
define('_ACA_INFO_LIST_ACA_OWNER', 'Dette er ID for den som opprettet denne listen.');
define('_ACA_INFO_LIST_WARNING', '   Dette valget er kun tilgjengelig når listen er laget.');
define('_ACA_INFO_LIST_SUBJET', ' Emne for epost. Dette er emnet for meldingen abonnenten vil motta.');
define('_ACA_INFO_MAILING_CONTENT', 'Dette er teksten i eposten du vil sende.');
define('_ACA_INFO_MAILING_NOHTML', 'Angi her teksten i eposten du vil sende til abonnenter som velger ikke å motta HTML-utsendelser. <BR/> MERK: Hvis du lar den stå tom så vil Acajoom automatisk konvertere HTML-teksten til ren tekst.');
define('_ACA_INFO_MAILING_VISIBLE', 'Klikk Ja for å vise send epost på forsiden.');
define('_ACA_INSERT_CONTENT', 'Sett inn eksisterende innhold');

// Coupons
define('_ACA_SEND_COUPON_SUCCESS', 'Kupong sendt!');
define('_ACA_CHOOSE_COUPON', 'Velg en kupong');
define('_ACA_TO_USER', ' til denne bruker');

### Cron options
//drop down frequency(CRON)
define('_ACA_FREQ_CH1', 'Hver time');
define('_ACA_FREQ_CH2', 'Hver 6 time');
define('_ACA_FREQ_CH3', 'Hver 12 time');
define('_ACA_FREQ_CH4', 'Daglig');
define('_ACA_FREQ_CH5', 'Ukentlig');
define('_ACA_FREQ_CH6', 'Månedlig');
define('_ACA_FREQ_NONE', 'Ingen');
define('_ACA_FREQ_NEW', 'Ny bruker');
define('_ACA_FREQ_ALL', 'Alle brukere');

//Label CRON form
define('_ACA_LABEL_FREQ', 'Acajoom Cron-jobber?');
define('_ACA_LABEL_FREQ_TIPS', 'Klikk \'Ja\' hvis du vil bruke dette for en Acajoom Cron-jobber, ikke for noen annen Cron-jobb.<br />' .
        'Hvis du klikker \'Ja\' behøver du ikke å spesifisere en Cron-jobbadresse, den bli lagt til automatisk.');
define('_ACA_SITE_URL', 'deres nettadressen');
define('_ACA_CRON_FREQUENCY', 'Hyppighet for Cron-jobb');
define('_ACA_STARTDATE_FREQ', 'Start dato');
define('_ACA_LABELDATE_FREQ', 'Angi dato');
define('_ACA_LABELTIME_FREQ', 'Angi tid');
define('_ACA_CRON_URL', 'Cron-jobb URL');
define('_ACA_CRON_FREQ', 'Hyppighet');
define('_ACA_TITLE_CRONLIST', 'Cron-jobbliste');
define('_NEW_LIST', 'Lag en ny liste');

//title CRON form
define('_ACA_TITLE_FREQ', 'Rediger Cron-jobb');
define('_ACA_CRON_SITE_URL', 'Angi en gyldig nettadresse som starter med http://');

### Mailings ###
define('_ACA_MAILING_ALL', 'Alle utsendelser');
define('_ACA_EDIT_A', 'Editer en ');
define('_ACA_SELCT_MAILING', 'Vennligst velg en epost liste i nedtrekks menyen for å legge til en ny utsendelse.');
define('_ACA_VISIBLE_FRONT', 'Vis på forsiden');

// mailer
define('_ACA_SUBJECT', 'Emne');
define('_ACA_CONTENT', 'Innhold');
define('_ACA_NAMEREP', '[NAME] = Denne vil bli erstattet med navnet som abonnenten la inn, du vil kunne sende mer personlige epost med dette.<br />');
define('_ACA_FIRST_NAME_REP', '[FIRSTNAME] = Denne vil bli erstattet med fornavn som abonnenten la inn.<br />');
define('_ACA_NONHTML', 'Ren tekst versjon');
define('_ACA_ATTACHMENTS', 'Vedlegg');
define('_ACA_SELECT_MULTIPLE', 'Hold Ctrl (eller Com) nede for å velde flere vedlegg.<br />' .
        'Filene som vises i listen over vedlegg finnes i mappen for vedlegg, du kan forandre denne plassen for mappen i \'Konfigurasjonen -> Epost\' for AcaJoom.');
define('_ACA_CONTENT_ITEM', 'Innholdselementer');
define('_ACA_SENDING_EMAIL', 'Sender epost');
define('_ACA_MESSAGE_NOT', 'Meldingen kunne ikke sendes');
define('_ACA_MAILER_ERROR', 'Feil ved utsending');
define('_ACA_MESSAGE_SENT_SUCCESSFULLY', 'Meldingen er sendt');
define('_ACA_SENDING_TOOK', 'Denne utsendelsen tok');
define('_ACA_SECONDS', 'sekunder');
define('_ACA_NO_ADDRESS_ENTERED', 'Ingen epostadresse eller abonnent');
define('_ACA_CHANGE_SUBSCRIPTIONS', 'Endre');
define('_ACA_CHANGE_EMAIL_SUBSCRIPTION', 'Endre ditt abonnement');
define('_ACA_WHICH_EMAIL_TEST', 'Skriv inn epost adresse og navn for test av melding eller velg forhåndsvisning');
define('_ACA_SEND_IN_HTML', 'Send som HTML (for html utsendelser)?');
define('_ACA_VISIBLE', 'Synlig');
define('_ACA_INTRO_ONLY', 'Bare innledning');

// stats
define('_ACA_GLOBALSTATS', 'Total status');
define('_ACA_DETAILED_STATS', 'Enkelt status');
define('_ACA_MAILING_LIST_DETAILS', 'List details');
define('_ACA_SEND_IN_HTML_FORMAT', 'Send som HTML format');
define('_ACA_VIEWS_FROM_HTML', 'Visning (av html sendinger)');
define('_ACA_SEND_IN_TEXT_FORMAT', 'Send som tekst format');
define('_ACA_HTML_READ', 'HTML lest');
define('_ACA_HTML_UNREAD', 'HTML ikke lest');
define('_ACA_TEXT_ONLY_SENT', 'Bare tekst');

// Configuration panel
// main tabs
define('_ACA_MAIL_CONFIG', 'Epost');
define('_ACA_LOGGING_CONFIG', 'Logger og status');
define('_ACA_SUBSCRIBER_CONFIG', 'Abonnenter');
define('_ACA_MISC_CONFIG', 'Diverse');
define('_ACA_MAIL_SETTINGS', 'Epost innstillinger');
define('_ACA_MAILINGS_SETTINGS', 'Sendings innstillinger');
define('_ACA_SUBCRIBERS_SETTINGS', 'Abonnent innstillinger');
define('_ACA_CRON_SETTINGS', 'Cron-jobb innstillinger');
define('_ACA_SENDING_SETTINGS', 'Sende innstillinger');
define('_ACA_STATS_SETTINGS', 'Statistikk innstillinger');
define('_ACA_LOGS_SETTINGS', 'Logge innstillinger');
define('_ACA_MISC_SETTINGS', 'Diverse innstillinger');
// mail settings
define('_ACA_SEND_MAIL_FROM', 'Returadresse>br />(brukes som returadresse for alle deres meldinger)');
define('_ACA_SEND_MAIL_NAME', 'Avsendernavn');
define('_ACA_MAILSENDMETHOD', 'Sendingsmetode');
define('_ACA_SENDMAILPATH', 'Sti til sendmail');
define('_ACA_SMTPHOST', 'SMTP host');
define('_ACA_SMTPAUTHREQUIRED', 'SMTP godkjenning kreves');
define('_ACA_SMTPAUTHREQUIRED_TIPS', 'Velg ja hvis deres SMTP server krever godkjenning');
define('_ACA_SMTPUSERNAME', 'SMTP brukernavn');
define('_ACA_SMTPUSERNAME_TIPS', 'Skriv inn SMTP brukernavn når deres SMTP server krever godkjenning');
define('_ACA_SMTPPASSWORD', 'SMTP passord');
define('_ACA_SMTPPASSWORD_TIPS', 'Skriv inn SMTP passord når deres SMTP server krever godkjenning');
define('_ACA_USE_EMBEDDED', 'Bruk innebygde bilder');
define('_ACA_USE_EMBEDDED_TIPS', 'Velg Ja hvis bildene i det vedlagte innholdet bør være innebygd i epost for html-meldinger, eller nei får å bruke standard bilde lenke som linker til bildene på nettstedet.');
define('_ACA_UPLOAD_PATH', 'Opplasting/vedlegges sti');
define('_ACA_UPLOAD_PATH_TIPS', 'Du kan angi en mappe for opplasting.<br />' .
        'Forsikre deg om at mappen finnes, hvis ikke må du opprette den.');

// subscribers settings
define('_ACA_ALLOW_UNREG', 'Tillat uregistrerte');
define('_ACA_ALLOW_UNREG_TIPS', 'Velg ja for at brukere kan abonnere uten at de er registrerte.');
define('_ACA_REQ_CONFIRM', 'Krever bekreftelse');
define('_ACA_REQ_CONFIRM_TIPS', 'Velg ja for at uregistrerte abonnenter skal bekrefte sin epost adresse.');
define('_ACA_SUB_SETTINGS', 'Abonnement innstillinger');
define('_ACA_SUBMESSAGE', 'Abonnentens epost adresse');
define('_ACA_SUBSCRIBE_LIST', 'Abonner på en liste');

define('_ACA_USABLE_TAGS', 'Merker som kan brukes');
define('_ACA_NAME_AND_CONFIRM', '<b>[CONFIRM]</b> = Dette lager en link som abonnomenten kan bekrefte sitt abonnement. Dette er <strong>påkrevet</strong> for at Acajoom fungere.<br />'
.'<br />[NAME] = Denne vil bli erstattet med navnet som abonnenten la inn, du vill sende en mer personlig epost med dette.<br />'
.'<br />[FIRSTNAME] = Denne vil bli erstattet med fornavn på abonnenten, Fornavn er definert som første ordet i navnet som abonnenten la inn.<br />');
define('_ACA_CONFIRMFROMNAME', 'Bekreftelse fra navn');
define('_ACA_CONFIRMFROMNAME_TIPS', 'Legg inn Fra navn som vises i bekreftelsens meldingen.');
define('_ACA_CONFIRMFROMEMAIL', 'Bekreftelse fra epost adresse');
define('_ACA_CONFIRMFROMEMAIL_TIPS', 'Legg inn epost adressen som vises i bekreftelsens meldingen.');
define('_ACA_CONFIRMBOUNCE', 'Retur adresse');
define('_ACA_CONFIRMBOUNCE_TIPS', 'Legg inn retur epost adressen som vises i bekreftelsens meldingen.');
define('_ACA_HTML_CONFIRM', 'HTML bekreftelse');
define('_ACA_HTML_CONFIRM_TIPS', 'Velg ja hvis bekreftelsens meldingen skal være HTML hvis brukeren tillater HTML.');
define('_ACA_TIME_ZONE_ASK', 'Spør om tidssone');
define('_ACA_TIME_ZONE_TIPS', 'Velg ja hvis du vill spørre brukeren om sin tidssone. Utsendelser sendes basert på tidssonen når dette er aktuelt');

 // Cron Set up
 define('_ACA_AUTO_CONFIG', 'Cron');
define('_ACA_TIME_OFFSET_URL', 'klikk her for å sette opp tidssonen i Joomla! konfigurasjon -> Tjener ');
define('_ACA_TIME_OFFSET_TIPS', 'Sett opp deres servers tidsavvik slik at dato og til et rett');
define('_ACA_TIME_OFFSET', 'Tidsavvik');
define('_ACA_CRON_TITLE', 'Setting up cron function');
define('_ACA_CRON_DESC', '<br />Ved bruke av cron-jobb funksjonen kan du sette opp automatisert oppgave for deres Joomla nettside!<br />' .
        'For å sette opp crontab må du legge til i kontrollpanelet følgende kommando:<br />' .
        '<b>' . ACA_JPATH_LIVE . '/index2.php?option=com_acajoom&act=cron</b> ' .
        '<br /><br />Hvis du trenger hjelp til å sette den opp eller har problemer vennligst kontakt vårt forum <a href="http://www.ijoobi.com" target="_blank">http://www.ijoobi.com</a>');
// sending settings
define('_ACA_PAUSEX', 'Pause på x antall sekunder for angitte antall eposter');
define('_ACA_PAUSEX_TIPS', 'Legg inn antall sekunder Acajoom skal gi SMTP serveren tid til å sende meldinger før neste angitte antall meldinger.');
define('_ACA_EMAIL_BET_PAUSE', 'Antall eposter før pause');
define('_ACA_EMAIL_BET_PAUSE_TIPS', 'Antall eposter som sendes før pause.');
define('_ACA_WAIT_USER_PAUSE', 'Vent på operatør ved pause');
define('_ACA_WAIT_USER_PAUSE_TIPS', 'Om skripet skal vente på operatør i mellom settene med eposter .');
define('_ACA_SCRIPT_TIMEOUT', 'Tidsavbrudd for skripet');
define('_ACA_SCRIPT_TIMEOUT_TIPS', 'Antall minuttet skripet skal ha mulighet kjøre (0 for uendelig).');
// Stats settings
define('_ACA_ENABLE_READ_STATS', 'Aktiver statistikk over leste eposter');
define('_ACA_ENABLE_READ_STATS_TIPS', 'Velg ja hvis du vil logge antall som har lest eposten. Dette er kun mulig for html eposter');
define('_ACA_LOG_VIEWSPERSUB', 'Logg antall lest pr. abonnent');
define('_ACA_LOG_VIEWSPERSUB_TIPS', 'Velg ja for å logge antall leste pr abonnent. Dette er kun mulig for html eposter');
// Logs settings
define('_ACA_DETAILED', 'Detaljerte logger');
define('_ACA_SIMPLE', 'Forenklede logger');
define('_ACA_DIAPLAY_LOG', 'Vis logger');
define('_ACA_DISPLAY_LOG_TIPS', 'Velg ja hvis du vil se loggen under sending.');
define('_ACA_SEND_PERF_DATA', 'Send ut ytelse');
define('_ACA_SEND_PERF_DATA_TIPS', 'Velg Ja hvis du vil tillate Acajoom å sende ut ANONYME rapporter om konfigurasjonen, antall abonnenter på en liste og tiden det tok å sende post. Dette vil gi oss en ide om Acajoom ytelse og vil HJELP OSS å forbedre Acajoom i den fremtidige utviklingen.');
define('_ACA_SEND_AUTO_LOG', 'Sent logg for auto-svar');
define('_ACA_SEND_AUTO_LOG_TIPS', 'Velg Ja hvis du ønsker å sende en epost logg hver gang køen er behandlet. VARSEL: Dette kan resultere i et stort antall eposter.');
define('_ACA_SEND_LOG', 'Sendt logg');
define('_ACA_SEND_LOG_TIPS', 'Hvorvidt en logg av forsendelsen bør bli sendt til epostadressen til brukeren som sendte eposten.');
define('_ACA_SEND_LOGDETAIL', 'Sent logg detaljer');
define('_ACA_SEND_LOGDETAIL_TIPS', 'Detaljert inkluderer suksess eller fiasko for hver abonnent og en oversikt over informasjonen. Eller bare en oversikt.');
define('_ACA_SEND_LOGCLOSED', 'Send logg dersom forbindelse brytes');
define('_ACA_SEND_LOGCLOSED_TIPS', 'Hvis ja vil brukeren som sendte eposten fremdeles få en rapport på epost.');
define('_ACA_SAVE_LOG', 'Lagre logg');
define('_ACA_SAVE_LOG_TIPS', 'Hvorvidt en logg av sendingen bør legges til loggfilen.');
define('_ACA_SAVE_LOGDETAIL', 'Lagre logg med detaljer');
define('_ACA_SAVE_LOGDETAIL_TIPS', 'Detaljert inkluderer suksess eller fiasko for hver abonnent og en oversikt over informasjonen. Eller bare en oversikt.');
define('_ACA_SAVE_LOGFILE', 'Lagre logge fil');
define('_ACA_SAVE_LOGFILE_TIPS', 'Fil som logginformasjon blir lagt til. Denne filen kan bli ganske store.');
define('_ACA_CLEAR_LOG', 'Slett logg');
define('_ACA_CLEAR_LOG_TIPS', 'Tømmer loggfilen.');

### control panel
define('_ACA_CP_LAST_QUEUE', 'Siste fullførte kø');
define('_ACA_CP_TOTAL', 'Totalt');
define('_ACA_MAILING_COPY', 'Utsendelse kopiert ok!');

// Miscellaneous settings
define('_ACA_SHOW_GUIDE', 'Vis veiviser');
define('_ACA_SHOW_GUIDE_TIPS', 'Vis veiviser ved oppstart slik at nye brukere får hjelp til å lage det første nyhetsbrevet, auto-svar og oppsett av Acajoom riktig.');
define('_ACA_AUTOS_ON', 'Bruk Auto-svar');
define('_ACA_AUTOS_ON_TIPS', 'Velg nei hvis du ikke vil bruke Auto-svar, alle Auto-svar valg vil bli deaktivert.');
define('_ACA_NEWS_ON', 'Bruk nyhetsbrev');
define('_ACA_NEWS_ON_TIPS', 'Velg nei hvis du ikke vil bruke nyhetbrev, alle nyhetsbrevsvalg vil bli deaktivert.');
define('_ACA_SHOW_TIPS', 'Vis tips');
define('_ACA_SHOW_TIPS_TIPS', 'Vis tips, for å hjelpe brukere med Acajoom mer effektivt.');
define('_ACA_SHOW_FOOTER', 'Vis bunntekst');
define('_ACA_SHOW_FOOTER_TIPS', 'Hvorvidt copyright notisen skal vises.');
define('_ACA_SHOW_LISTS', 'Vis lister på forsiden');
define('_ACA_SHOW_LISTS_TIPS', 'Når brukeren ikke er registrert vise en liste over listene de kan abonnere på med arkiv-knappen for nyhetsbrev eller bare logginn, slik at de må registrere seg.');
define('_ACA_CONFIG_UPDATED', 'Konfigurasjonen har blitt oppdatert!');
define('_ACA_UPDATE_URL', 'Oppdaterings URL');
define('_ACA_UPDATE_URL_WARNING', 'VARSEL! Endre ikke denne URL med mindre du har blitt bedt om å gjøre det av Acajoom.<br />');
define('_ACA_UPDATE_URL_TIPS', 'For eksempel: http://www.ijoobi.com/update/ (inkludert den avsluttende / )');

// module
define('_ACA_EMAIL_INVALID', 'Den epostadressen du oppga er ugyldig.');
define('_ACA_REGISTER_REQUIRED', 'Vennligst registrer deg på siden før du kan signere for en liste.');

// Access level box
define('_ACA_OWNER', 'Listen er laget av:');
define('_ACA_ACCESS_LEVEL', 'Sett tilgangsnivået for listen');
define('_ACA_ACCESS_LEVEL_OPTION', 'Valg av tilgangsnivå');
define('_ACA_USER_LEVEL_EDIT', 'Sett brukernivå for å redigere en adresseliste (enten fra forsiden og baksiden) ');

//  drop down options
define('_ACA_AUTO_DAY_CH1', 'Daglig');
define('_ACA_AUTO_DAY_CH2', 'Daglig  uten helg');
define('_ACA_AUTO_DAY_CH3', 'Annen vær dag');
define('_ACA_AUTO_DAY_CH4', 'Annen vær dag uten helg');
define('_ACA_AUTO_DAY_CH5', 'Ukentlig');
define('_ACA_AUTO_DAY_CH6', 'Hver andre uke');
define('_ACA_AUTO_DAY_CH7', 'Måntlig');
define('_ACA_AUTO_DAY_CH9', 'Årlig');
define('_ACA_AUTO_OPTION_NONE', 'Ingen');
define('_ACA_AUTO_OPTION_NEW', 'Ny bruker');
define('_ACA_AUTO_OPTION_ALL', 'Alle brukere');

//
define('_ACA_UNSUB_MESSAGE', 'Oppsigelsens epost ');
define('_ACA_UNSUB_SETTINGS', 'Oppsigelsens innstillinger');
define('_ACA_AUTO_ADD_NEW_USERS', 'Skal brukere automatisk bli abonnent?');

// Update and upgrade messages
define('_ACA_NO_UPDATES', 'Det er ingen oppdateringer tilgjengelig.');
define('_ACA_VERSION', 'Acajoom Versjon');
define('_ACA_NEED_UPDATED', 'Filer som trenger å bli oppdatert:');
define('_ACA_NEED_ADDED', 'Filer som må legges til:');
define('_ACA_NEED_REMOVED', 'Filer som må fjernes:');
define('_ACA_FILENAME', 'Filnavn:');
define('_ACA_CURRENT_VERSION', 'Gjeldene versjon:');
define('_ACA_NEWEST_VERSION', 'Nyest versjon:');
define('_ACA_UPDATING', 'Oppdaterer');
define('_ACA_UPDATE_UPDATED_SUCCESSFULLY', 'Filene har blitt oppdatert.');
define('_ACA_UPDATE_FAILED', 'Oppdatering mislykt!');
define('_ACA_ADDING', 'Legge til');
define('_ACA_ADDED_SUCCESSFULLY', 'Lagt til ok.');
define('_ACA_ADDING_FAILED', 'Lagt til mislykktet!');
define('_ACA_REMOVING', 'Fjerne');
define('_ACA_REMOVED_SUCCESSFULLY', 'Fjerne ok.');
define('_ACA_REMOVING_FAILED', 'Fjerning mislykket!');
define('_ACA_INSTALL_DIFFERENT_VERSION', 'Installer en annen versjon');
define('_ACA_CONTENT_ADD', 'Legg til innhold');
define('_ACA_UPGRADE_FROM', 'Importer data (nyhetsbrev og abonnent informasjon) fra ');
define('_ACA_UPGRADE_MESS', 'Det er ingen fare for eksisterende data. <br /> Denne prosessen vil bare importere data til Acajoom databasen.');
define('_ACA_CONTINUE_SENDING', 'Fortsett å sende');

// Acajoom message
define('_ACA_UPGRADE1', 'Du kan enkelt importere brukere og nyhetsbrev fra ');
define('_ACA_UPGRADE2', ' til Acajoom i kontroldpanelet -> import.');
define('_ACA_UPDATE_MESSAGE', 'En ny versjon av Acajoom er tilgjengelig! ');
define('_ACA_UPDATE_MESSAGE_LINK', 'Klikk her for å oppdatere!');
define('_ACA_THANKYOU', 'Takk for at du valgte Acajoom, din kommunikasjons partner!');
define('_ACA_NO_SERVER', 'Oppdaterings serveren var ikke tilgjengelig, vennligst prøv igjen senere.');
define('_ACA_MOD_PUB', 'Acajoom modulen er ikke publisert.');
define('_ACA_MOD_PUB_LINK', 'Klikk her for å publisere den!');
define('_ACA_IMPORT_SUCCESS', 'Velykket importert');
define('_ACA_IMPORT_EXIST', 'abonnent finnes allerede i databasen');

// Acajoom\'s Guide
define('_ACA_GUIDE', '\'s veiviser');
define('_ACA_GUIDE_FIRST_ACA_STEP', '<p>Acajoom har mange flotte funksjoner og denne veiviseren vil veilede deg gjennom fire enkle trinn for å komme i gang med å sende nyhetsbrev og auto-respons!<p />');
define('_ACA_GUIDE_FIRST_ACA_STEP_DESC', 'Først må du legge til en liste. En liste kan være to typer, enten et nyhetsbrev eller en auto-respons.' .
		'  I en liste definerer man alle de ulike parametrene for å aktivere sending av nyhetsbrev eller auto-respons: avsenders navn, utsende, abonnentens velkomstmelding, etc...
<br /><br />Du kan sette opp din første liste her: <a href="index2.php?option=com_acajoom&act=list"> opprette en liste </ a>, og klikk Ny-knappen.');
define('_ACA_GUIDE_FIRST_ACA_STEP_UPGRADE', 'Acajoom gir deg en enkel måte å importere alle data fra en tidligere nyhetsbrevs system på<br />' .
    ' Gå til oppdateringspanelet og velg din forrige nyhetsbrevssystem for å importere alle dine nyhetsbrev og abonnenter.<br /><br />' .
		'<span style="color:#FF5E00;" >VIKTIG: Importen er uten risiko, og påvirker ikke på noen måte dataene i ditt forrige nyhetsbrevs systemet</span><br />' .
 		'Etter importen vil du kunne administrere abonnenter og utsendelser direkte fra Acajoom.<br /><br />');
define('_ACA_GUIDE_SECOND_ACA_STEP', 'Fantastisk din første liste er satt opp! Nå kan du skrive din første %s. Hvis du vil opprette den gå til: ');
define('_ACA_GUIDE_SECOND_ACA_STEP_AUTO', 'Auto-respons administrasjon');
define('_ACA_GUIDE_SECOND_ACA_STEP_NEWS', 'Nyhetsbrev administrasjon');
define('_ACA_GUIDE_SECOND_ACA_STEP_FINAL', ' og velg din %s. <br /> Og så velger du %s i nedtrekksmenyen.  Lag din første forsendelse ved å trykke ny ');

define('_ACA_GUIDE_THRID_ACA_STEP_NEWS', 'Før du sender dit første nyhetsbrevet kan det være lurt å sjekke epostinnstillingene først.  ' .
		'Gå til <a href="index2.php?option=com_acajoom&act=configuration" >konfigurasjonssiden</a> for å kontrollere epostinnstillingene. <br />');
define('_ACA_GUIDE_THRID2_ACA_STEP_NEWS', '<br />Når du er klar gå tilbake til nyhetsbrev menyen, velg din forsendelse og klikk Send');

define('_ACA_GUIDE_THRID_ACA_STEP_AUTOS', 'Før din auto-respons skal bli sendt må du først sette opp en cron-oppgave på serveren din. ' .
        ' Vennligst se Cron fanen i konfigurasjon panel.' .
        ' <a href="index2.php?option=com_acajoom&act=configuration" >klikk her..</a> for å lære hvordan man sette opp en cron-oppgave. <br />');

define('_ACA_GUIDE_MODULE', ' <br />Kontroller også at du har publisert Acajoom modulen slik at folk kan melde seg på nyhetslistene.');

define('_ACA_GUIDE_FOUR_ACA_STEP_NEWS', ' Nå kan du også sette opp en auto-responder.');
define('_ACA_GUIDE_FOUR_ACA_STEP_AUTOS', ' Nå kan du også sette opp et nyhetsbrev.');

define('_ACA_GUIDE_FOUR_ACA_STEP', '<p><br />Gratulerer! Du er nå klar til å effektivt kommunisere med besøkende og brukere. Denne veiviseren vil ende så snart du har oppgitt en annen epostadresse eller du kan slå den av i <a href="index2.php?option=com_acajoom&act=configuration"> konfigurasjon panelet</a>.' .
        '<br /><br />  Hvis du har noen spørsmål mens du bruker Acajoom, kan disse henvises det til ' .
        '<a target="_blank" href="http://www.ijoobi.com/index.php?option=com_content&Itemid=72&view=category&layout=blog&id=29&limit=60" >dokumentasjon</a>. ' .
        ' Du kan også finne mye informasjon om hvordan effektivt kommunisere med dine abonnenter på her <a href="http://www.ijoobi.com/" target="_blank" >www.ijoobi.com</a>.' .
        '<p /><br /><b>Takk for at du valgte Acajoom. Din kommunikasjons partner!</b> ');
define('_ACA_GUIDE_TURNOFF', 'Veiviseren er nå slått av!');
define('_ACA_STEP', 'STEG ');

// Acajoom Install
define('_ACA_INSTALL_CONFIG', 'Acajoom innstillinger');
define('_ACA_INSTALL_SUCCESS', 'Vellykket installert');
define('_ACA_INSTALL_ERROR', 'Installasjonsfeil');
define('_ACA_INSTALL_BOT', 'Acajoom Plugin (Bot)');
define('_ACA_INSTALL_MODULE', 'Acajoom Modul');
//Others
define('_ACA_JAVASCRIPT', '!Varsel! Javascript må være aktivert i nettleseren din.');
define('_ACA_EXPORT_TEXT', 'Eksporten av abonnenter er basert på den listen du valgte. <br />Eksporter abonnenter fra listen');
define('_ACA_IMPORT_TIPS', 'Importer abonnenter. Informasjonen i filen må følgende format: <br />' .
        'Name,email,receiveHTML(0/1),<span style="color: rgb(255, 0, 0);">bekreft(0/1)</span>');
define('_ACA_SUBCRIBER_EXIT', 'er allerede en abonnent');
define('_ACA_GET_STARTED', 'Klikk her for å starte!');

//News since 1.0.1
define('_ACA_WARNING_1011', 'Varsel: 1011: Oppdateringen vil ikke kunne fungere pga. din servers restriksjoner.');
define('_ACA_SEND_MAIL_FROM_TIPS', 'Velg hvilken epostadresse som skal vises som avsender.');
define('_ACA_SEND_MAIL_NAME_TIPS', 'Velg hvilket navn som skal vises som avsender.');
define('_ACA_MAILSENDMETHOD_TIPS', 'Velg hvilke mailfunksjon du vil bruke: PHP mail funksjon, <span>Sendmail</span> eller SMTP Server.');
define('_ACA_SENDMAILPATH_TIPS', 'Dette er den katalogen til epost serveren');
define('_ACA_LIST_T_TEMPLATE', 'Mal');
define('_ACA_NO_MAILING_ENTERED', 'Ingen forsendelse valgt');
define('_ACA_NO_LIST_ENTERED', 'Ingen liste valgt');
define('_ACA_SENT_MAILING', 'Sendte forsendelser');
define('_ACA_SELECT_FILE', 'Vennligst velg en fil for ');
define('_ACA_LIST_IMPORT', 'Velg listen(e) du vil at abonnentene skal bli assosiert med.');
define('_ACA_PB_QUEUE', 'Abonnenten lagt til men problemer å koble ham / henne til listen(e). Kontroller dette manuelt.');
define('_ACA_UPDATE_MESS' , '');
define('_ACA_UPDATE_MESS1', 'Å oppdatere er anbefalt!');
define('_ACA_UPDATE_MESS2', 'Patch og mindre oppdateringer.');
define('_ACA_UPDATE_MESS3', 'Ny utgivelse.');
define('_ACA_UPDATE_MESS5', 'Joomla 1.5 er nødvendig for å oppdatere.');
define('_ACA_UPDATE_IS_AVAIL', ' er tilgjengelig!');
define('_ACA_NO_MAILING_SENT', 'Ingen forsendelse sendt!');
define('_ACA_SHOW_LOGIN', 'Vis logginn');
define('_ACA_SHOW_LOGIN_TIPS', 'Velg Ja for å vise Acajoom logging skjema på forsiden slik at brukere kan registrere seg på nettstedet.');
define('_ACA_LISTS_EDITOR', 'Liste beskrivelses Editor');
define('_ACA_LISTS_EDITOR_TIPS', 'Velg Ja for å bruke en HTML-editor å redigere beskrivelsen av en liste.');
define('_ACA_SUBCRIBERS_VIEW', 'Vis abonnenter');

//News since 1.0.2
define('_ACA_FRONTEND_SETTINGS', 'Innstillinger for forsiden');
define('_ACA_SHOW_LOGOUT', 'Vis logg ut knapp');
define('_ACA_SHOW_LOGOUT_TIPS', 'Velg Ja for å vise en logg ut knapp på forsiden i Acajoom modulen.');

//News since 1.0.3 CB integration
define('_ACA_CONFIG_INTEGRATION', 'Integrasjon');
define('_ACA_CB_INTEGRATION', 'Community Builder Integrasjon');
define('_ACA_INSTALL_PLUGIN', 'Community Builder Plugin (Acajoom Integrasjon) ');
define('_ACA_CB_PLUGIN_NOT_INSTALLED', 'Acajoom Plugin for Community Builder er ikke installert!');
define('_ACA_CB_PLUGIN', 'Lister ved registrering');
define('_ACA_CB_PLUGIN_TIPS', 'Velg Ja for å vise postlister i Community Builders registreringsskjema');
define('_ACA_CB_LISTS', 'ID for lister');
define('_ACA_CB_LISTS_TIPS', 'DETTE ER ET OBLIGATORISK FELT. Skriv inn ID-nummeret til listene du ønsker å tillate brukere å abonnere på atskilt med komma, (0 viser alle listene)');
define('_ACA_CB_INTRO', 'Innlednings tekst');
define('_ACA_CB_INTRO_TIPS', 'Teksten vil vises før oppføringen av listen. VED TOM VISES INGENTING. Du kan bruke HTML-koder for å tilpasse utseendet.');
define('_ACA_CB_SHOW_NAME', 'Vis listens navn');
define('_ACA_CB_SHOW_NAME_TIPS', 'Velg og vise eller ikke vise navnet på listen etter innledningen.');
define('_ACA_CB_LIST_DEFAULT', 'Velg listen som standard');
define('_ACA_CB_LIST_DEFAULT_TIPS', 'Velg om du vil at det skal være krysset av for alle litene som standard.');
define('_ACA_CB_HTML_SHOW', 'Vis motta HTML');
define('_ACA_CB_HTML_SHOW_TIPS', 'Sett Ja for å tillate brukere å bestemme om de ønsker HTML eposter eller ikke. Sett Nei for å motta html som standard.');
define('_ACA_CB_HTML_DEFAULT', 'Motta HTML som standard');
define('_ACA_CB_HTML_DEFAULT_TIPS', 'Angi dette alternativet for å vise standard HTML innstillinger. Hvis Vis motta HTML er satt til Nei vil dette valget bli standard.');

// Since 1.0.4
define('_ACA_BACKUP_FAILED', 'Kunne ikke sikkerhetskopiere filen! Fil ikke erstattet.');
define('_ACA_BACKUP_YOUR_FILES', 'Den gamle versjonen av filene er sikkerhetskopiert til følgende katalog:');
define('_ACA_SERVER_LOCAL_TIME', 'Servers lokale tid');
define('_ACA_SHOW_ARCHIVE', 'Vis arkiv-knappen');
define('_ACA_SHOW_ARCHIVE_TIPS', 'Velg Ja for å vise arkiv-knappen på forsiden på nyhetsbrevslistene');
define('_ACA_LIST_OPT_TAG', 'Tags');
define('_ACA_LIST_OPT_IMG', 'Bilde');
define('_ACA_LIST_OPT_CTT', 'Innhold');
define('_ACA_INPUT_NAME_TIPS', 'Skriv inn ditt fulle navn (fornavn først)');
define('_ACA_INPUT_EMAIL_TIPS', 'Skriv inn din epostadresse (Sørg for at dette er en gyldig epostadresse hvis du ønsker å motta våre utsendelser.)');
define('_ACA_RECEIVE_HTML_TIPS', 'Velg Ja hvis du vil motta HTML utsendelser - Nei for å motta bare tekst utsendelser');
define('_ACA_TIME_ZONE_ASK_TIPS', 'Angi din tidssone.');

// Since 1.0.5
define('_ACA_FILES', 'Filer');
define('_ACA_FILES_UPLOAD', 'Last opp');
define('_ACA_MENU_UPLOAD_IMG', 'Last opp bilder');
define('_ACA_TOO_LARGE', 'Fil størrelsen er for stor. Den maksimale størrelse er');
define('_ACA_MISSING_DIR', 'Mål katalogen katalogen finnes ikke');
define('_ACA_IS_NOT_DIR', 'Mål katalogen finnes ikke eller er en fil.');
define('_ACA_NO_WRITE_PERMS', 'Mål katalogen har ikke skrive tilgang.');
define('_ACA_NO_USER_FILE', 'Du har ikke valgt noen fil for opplasting.');
define('_ACA_E_FAIL_MOVE', 'Flytting av filen ikke mulig.');
define('_ACA_FILE_EXISTS', 'Filen finnes fra før.');
define('_ACA_CANNOT_OVERWRITE', 'Filen finnes fra før og kunne ikke overskrives.');
define('_ACA_NOT_ALLOWED_EXTENSION', 'Filtype ikke tillatt.');
define('_ACA_PARTIAL', 'Filen ble bare delvis opplastet.');
define('_ACA_UPLOAD_ERROR', 'Feil ved opplasting:');
define('DEV_NO_DEF_FILE', 'Filen ble bare delvis opplastet.');

// already exist but modified  added a <br/ on first line and added [SUBSCRIPTIONS] line>
define('_ACA_CONTENTREP', '[SUBSCRIPTIONS] = Dette vil bli erstattet med abonnement linker.' .
        ' Dette er <strong>påkrevet</strong> for at Acajoom skal fungere.<br />' .
        'Hvis du plasserer noe annet innhold i denne boksen, vil det bli vist i alle utsendelser tilhørende denne listen.' .
        ' <br />Legg til abonnentmelding til slutt. Acajoom vil automatisk legge en lenke for abonnenten å endre sin informasjon og en link for å melde seg av listen.');

// since 1.0.6
define('_ACA_NOTIFICATION', 'Melding');  // shortcut for Email notification
define('_ACA_NOTIFICATIONS', 'Meldinger ');
define('_ACA_USE_SEF', 'SEF i utsendelser');
define('_ACA_USE_SEF_TIPS', 'Det anbefales at du velger Nei. Men hvis du vil at nettadressen i utsendelser skal bruke SEF så velg Ja.' .
        ' <br /><b>Lenket vil fungerer for begge alternativer. Nei vli sikre at lenkene i utsendelser vil alltid fungerer selv om du endrer SEF.</b> ');
define('_ACA_ERR_NB', 'Feil #: FEIL');
define('_ACA_ERR_SETTINGS', 'Feilhåndterings innstillinger');
define('_ACA_ERR_SEND', 'Send feilrapport');
define('_ACA_ERR_SEND_TIPS', 'Hvis du ønsker at Acajoom skal bli et bedre produkt vennligst velg JA. Dette vil sende oss en feilrapport. Så du ikke engang trenger å rapportere feil lenger ;-) <br /> <b> INGEN PRIVAT INFORMASJON SENDES </ b>. Vi får ikke vite hvor feilen kommer fra. Vi sender kun informasjon om Acajoom, PHP oppsett og SQL-spørringer. ');
define('_ACA_ERR_SHOW_TIPS', 'Velg Ja for å vise feil nummer på skjermen. Hovedsakelig brukt til feilrettings formål. ');
define('_ACA_ERR_SHOW', 'Vis feil');
define('_ACA_LIST_SHOW_UNSUBCRIBE', 'Vis lenke for avbestilling');
define('_ACA_LIST_SHOW_UNSUBCRIBE_TIPS', 'Velg Ja for å vise lenken til avbestilling nederst på utsendelsen slik at brukeren kan endre sine abonnementer. <br /> Nei deaktivere bunntekst og lenker.');
define('_ACA_UPDATE_INSTALL', '<span style="color: rgb(255, 0, 0);">VIKTIG MELDING! </ Span> <br /> Hvis du oppgraderer fra en tidligere installasjon av Acajoom trenger du å oppgradere din database struktur ved å klikke på følgende knapp (Dine data vil beholdes)');
define('_ACA_UPDATE_INSTALL_BTN', 'Oppgradere tabeller og innstillinger');
define('_ACA_MAILING_MAX_TIME', 'Max kø tid');
define('_ACA_MAILING_MAX_TIME_TIPS', 'Definer maksimaltid for hvert sett av eposter sendt. Anbefalt mellom 30s og 2min.');

// virtuemart integration beta
define('_ACA_VM_INTEGRATION', 'VirtueMart Integrasjon');
define('_ACA_VM_COUPON_NOTIF', 'Rabatt/gavekort ID');
define('_ACA_VM_COUPON_NOTIF_TIPS', 'Oppgi forsendelsens ID du vil bruke til å sende Rabatt/gavekort til dine kunder.');
define('_ACA_VM_NEW_PRODUCT', 'Varsel om nye produkter ID');
define('_ACA_VM_NEW_PRODUCT_TIPS', 'Oppgi forsendelsens ID du vil bruke til å sende Varsel om nye produkter.');

// since 1.0.8
// create forms for subscriptions
define('_ACA_FORM_BUTTON', 'Lag skjema');
define('_ACA_FORM_COPY', 'HTML kode');
define('_ACA_FORM_COPY_TIPS', 'Kopier den genererte HTML-koden til din HTML-side.');
define('_ACA_FORM_LIST_TIPS', 'Velg listen du vil inkludere i skjemaet');
// update messages
define('_ACA_UPDATE_MESS4', 'Det kan ikke oppdateres automatisk.');
define('_ACA_WARNG_REMOTE_FILE', 'Ingen mulighet å hent ekstern fil.');
define('_ACA_ERROR_FETCH', 'Feil ved henting av fil.');

define('_ACA_CHECK', 'Kontroller');
define('_ACA_MORE_INFO', 'Mer informasjon');
define('_ACA_UPDATE_NEW', 'Oppdater til nyere versjon');
define('_ACA_UPGRADE', 'Oppgrader til høyere produkt');
define('_ACA_DOWNDATE', 'Gå tilbake til forrige versjon');
define('_ACA_DOWNGRADE', 'Tilbake til basisprodukt');
define('_ACA_REQUIRE_JOOM', 'Krev Joomla');
define('_ACA_TRY_IT', 'Prøv det!');
define('_ACA_NEWER', 'Nyere');
define('_ACA_OLDER', 'Eldre');
define('_ACA_CURRENT', 'Aktuell ');

// since 1.0.9
define('_ACA_CHECK_COMP', 'Prøv en av de andre komponentene');
define('_ACA_MENU_VIDEO', 'Læringsvideo');
define('_ACA_SCHEDULE_TITLE', 'Innstilling for automatisk tidsplan');
define('_ACA_ISSUE_NB_TIPS', 'Utgave nummer genereres automatisk av systemet');
define('_ACA_SEL_ALL', 'Alle utsendelser');
define('_ACA_SEL_ALL_SUB', 'Alle lister');
define('_ACA_INTRO_ONLY_TIPS', 'Hvis du bare merker denne vil innledningen av artikkelen bli satt inn i epost med en les mer link til hele artikkelen på nettstedet ditt.');
define('_ACA_TAGS_TITLE', 'Innholdsmerke');
define('_ACA_TAGS_TITLE_TIPS', 'Kopier og lim inn denne koden inn i forsendelsen der du vil ha innholdet plassert.');
define('_ACA_PREVIEW_EMAIL_TEST', 'Angi epostadressen for å sende en test');
define('_ACA_PREVIEW_TITLE', 'Forhåndsvisning');
define('_ACA_AUTO_UPDATE', 'Ny oppdateringsvarsel');
define('_ACA_AUTO_UPDATE_TIPS', 'Velg Ja hvis du ønsker å bli varslet om nye oppdateringer for din komponent. <br /> VIKTIG! Vis tips må være på for at denne funksjonen skal fungere.');

// since 1.1.0
define('_ACA_LICENSE', 'Lisensinformasjon');

// since 1.1.1
define('_ACA_NEW', 'Ny');
define('_ACA_SCHEDULE_SETUP', 'For at auto-svar sendes må du konfigurere planleggeren i konfigurasjonen.');
define('_ACA_SCHEDULER', 'Planlegger');
define('_ACA_ACAJOOM_CRON_DESC', 'hvis du ikke har tilgang til cron-oppgave på web området ditt, kan du registrere deg for en gratis Acajoom Cron konto her:');
define('_ACA_CRON_DOCUMENTATION', 'Du finner mer informasjon om oppsettet av Acajoom planlegger på følgende web adresse:');
define('_ACA_CRON_DOC_URL', '<a href="http://www.ijoobi.com/index.php?option=com_content&view=article&id=4249&catid=29&Itemid=72"
 target="_blank">http://www.ijoobi.com/index.php?option=com_content&Itemid=72&view=category&layout=blog&id=29&limit=60</a>');
define( '_ACA_QUEUE_PROCESSED', 'Køen behandlet uten feil...');
define( '_ACA_ERROR_MOVING_UPLOAD', 'Feil ved flytting av importert fil');

//since 1.1.4
define( '_ACA_SCHEDULE_FREQUENCY', 'Planlagt hyppighet');
define( '_ACA_CRON_MAX_FREQ', 'Planlagt maksimal hyppighet');
define( '_ACA_CRON_MAX_FREQ_TIPS', 'Spesifiser maksimal hyppighet for planlagte kjøringer (i minutter). Dette vil begrense planlagte oppgaver selv om cron-jobb er satt opp til å kjøre oftere.');
define( '_ACA_CRON_MAX_EMAIL', 'Maksimum epost per oppgave');
define( '_ACA_CRON_MAX_EMAIL_TIPS', 'Spesifiser maksimalt antall epost som kan sendes per oppgave (0 ubegrenset).');
define( '_ACA_CRON_MINUTES', ' minutter');
define( '_ACA_SHOW_SIGNATURE', 'Vis bunntekst i epost');
define( '_ACA_SHOW_SIGNATURE_TIPS', 'Om du vil reklamere for Acajoom eller ikke i bunnteksten på deres epost.');
define( '_ACA_QUEUE_AUTO_PROCESSED', '\'Auto respons\' ble sendt ...');
define( '_ACA_QUEUE_NEWS_PROCESSED', 'Planlagt nyhetsbrev ble sendt ...');
define( '_ACA_MENU_SYNC_USERS', 'Synkroniser brukere');
define( '_ACA_SYNC_USERS_SUCCESS', 'Synkronisering av brukere var vellykket');

// compatibility with Joomla 15
if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Logg ut');
if (!defined('_CMN_YES')) define( '_CMN_YES', 'Ja');
if (!defined('_CMN_NO')) define( '_CMN_NO', 'Nei');
if (!defined('_HI')) define( '_HI', 'Hei');
if (!defined('_CMN_TOP')) define( '_CMN_TOP', 'Topp');
if (!defined('_CMN_BOTTOM')) define( '_CMN_BOTTOM', 'Bunn');
//if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Logg ut');

// For include title only or full article in content item tab in newsletter edit - p0stman911
define('_ACA_TITLE_ONLY_TIPS', 'OM du velger dette vil bare tittel på artikkel bli satt inn i utsendelsen, som en lenke til artikkelen på nettsiden deres.');
define('_ACA_TITLE_ONLY', 'Bare tittel');
define('_ACA_FULL_ARTICLE_TIPS', 'Om du velger dette vil hele artikkelen bli satt inn i utsendelsen.');
define('_ACA_FULL_ARTICLE', 'Full artikkel');
define('_ACA_CONTENT_ITEM_SELECT_T', 'Velg innhold som skal legge sinn i meldingen.<br />Kopier og lim <b>innholdmerket</b> inn i utsendelsen. Du kan velge å bruke fulltekst, bare ingress eller bare tittel (0, 1, eller 2). ');
define('_ACA_SUBSCRIBE_LIST2', 'Utsendelseliste(r)');

// smart-newsletter function
define('_ACA_AUTONEWS', 'Smarte nyhetsbrev');
define('_ACA_MENU_AUTONEWS', 'Smarte nyhetsbrev');
define('_ACA_AUTO_NEWS_OPTION', 'Innstillinger for \'Smarte nyhetsbrev\'');
define('_ACA_AUTONEWS_FREQ', 'Hyppighet for nyhetsbrev');
define('_ACA_AUTONEWS_FREQ_TIPS', 'Spesifiser hyppighet for hvor ofte du ønsker å send eut \'Smarte nyhetsbrev\'.');
define('_ACA_AUTONEWS_SECTION', 'Artikkelseksjon');
define('_ACA_AUTONEWS_SECTION_TIPS', 'Spesifiser seksjon som artikler skal hentes fra.');
define('_ACA_AUTONEWS_CAT', 'Artikkelkategori');
define('_ACA_AUTONEWS_CAT_TIPS', 'Spesifiser kategori som artikler skal hentes fra.');
define('_ACA_SELECT_SECTION', 'Alle seksjoner');
define('_ACA_SELECT_CAT', 'Alle kategorier');
define('_ACA_AUTO_DAY_CH8', 'Kvartalsvis');
define('_ACA_AUTONEWS_STARTDATE', 'Startdato');
define('_ACA_AUTONEWS_STARTDATE_TIPS', 'Spesifiser datoen for når du vil begynne utsendelser av \'Smarte nyhetsbrev\'.');
define('_ACA_AUTONEWS_TYPE', 'Innholdsvisning');// how we see the content which is included in the newsletter
define('_ACA_AUTONEWS_TYPE_TIPS', 'Full artikkel: vil inkludere hele artikkelen i nyhetsbrevet.<br />' .
		'Bare ingress: vil bare inkludere ingress av artikkelen i nyhetsbrevet.<br/>' .
		'Bare tittel: vil bare inkludere tittel på artikkel i nyhetsbrevet.');
define('_ACA_TAGS_AUTONEWS', '[SMARTNEWSLETTER] = Dette vil bli erstattet med \'Smarte nyhetsbrev\'.');

//since 1.1.3
define('_ACA_MALING_EDIT_VIEW', 'Opprett / Vis utsendelser');
define('_ACA_LICENSE_CONFIG', 'Lisens');
define('_ACA_ENTER_LICENSE', 'Fyll inn lisens');
define('_ACA_ENTER_LICENSE_TIPS', 'Fyll inn ditt lisensnummer og lagre det.');
define('_ACA_LICENSE_SETTING', 'Lisens-innstillinger');
define('_ACA_GOOD_LIC', 'deres lisens er gyldig.');
define('_ACA_NOTSO_GOOD_LIC', 'deres lisens er ikke gyldig: ');
define('_ACA_PLEASE_LIC', 'Vennligst kontakt Acajooms brukerstøtte for å oppgradere deres lisens ( license@ijoobi.com ).');
define('_ACA_DESC_PLUS', 'Acajoom Plus er den første sekvensielle \'auto respons\'-komponenten for Joomla! CMS.  ' . _ACA_FEATURES);
define('_ACA_DESC_PRO', 'Acajoom PRO er det ultimate utsendelsesystemet for Joomla! CMS.  ' . _ACA_FEATURES);

//since 1.1.4
define('_ACA_ENTER_TOKEN', 'Fyll inn token');

define('_ACA_ENTER_TOKEN_TIPS', 'Vennligst fyll inn ditt token-nummer som du mottok på epost når du kjøpte Acajoom. ');

define('_ACA_ACAJOOM_SITE', 'Acajoom-side:');
define('_ACA_MY_SITE', 'Min side:');

define( '_ACA_LICENSE_FORM', ' ' .
 		'Klikk her for å gå til lisensskjemaet.</a>');
define('_ACA_PLEASE_CLEAR_LICENSE', 'Vennligst tøm lisensfeltene og forsøk på nytt.<br />Om problemet vedvarer, ');

define( '_ACA_LICENSE_SUPPORT', 'Om du fortsatt har spørsmål, ' . _ACA_PLEASE_LIC);

define( '_ACA_LICENSE_TWO', 'kan du hente ditt lisensnummer manuelt ved å fylle inn token-nummer og sideadresse (som er uthevet i grønn på toppen av denne siden) i lisensskjemaet. '
			. _ACA_LICENSE_FORM . '<br /><br/>' . _ACA_LICENSE_SUPPORT);

define('_ACA_ENTER_TOKEN_PATIENCE', 'En lisens vil bli generert automatisk etter at du har lagret ditt token-nummer.' .
		' Normalt blir token-nummeret validert innen 2 minutter. Men i enkelte tilfeller kan det likevel ta opp til 15 minutter.<br />' .
		'<br />Sjekk dette kontrollpanelet igjen om noen få minutter.<br /><br />' .
		'Om du ikke mottok et gyldig lisensnummer i løpet av 15 minutter, '. _ACA_LICENSE_TWO);


define( '_ACA_ENTER_NOT_YET', 'Ditt token-nummer har ikke blitt validert ennå.');
define( '_ACA_UPDATE_CLICK_HERE', 'Vennligst besøk <a href="http://www.ijoobi.com" target="_blank">www.ijoobi.com</a> for å laste ned nyeste versjon.');
define( '_ACA_NOTIF_UPDATE', 'Fyll inn deres epostadresse og klikk \'Meld på\' for å motta varsler om nye oppdateringer ');

define('_ACA_THINK_PLUS', 'Om du ønsker mer ut av deres utsendelser, tenk Plus!');
define('_ACA_THINK_PLUS_1', 'Sekvensielle \'auto respons\'');
define('_ACA_THINK_PLUS_2', 'Planlegg levering av deres nyhetsbrev for en forhåndsdefinert dato');
define('_ACA_THINK_PLUS_3', 'Ingen flere serverbegrensninger');
define('_ACA_THINK_PLUS_4', 'og mye mer ...');

//since 1.2.2
define( '_ACA_LIST_ACCESS', 'Listetilgang');
define( '_ACA_INFO_LIST_ACCESS', 'Spesifiser hvilken brukergrupper som kan se og abonnere på denne listen');
define( 'ACA_NO_LIST_PERM', 'Du har ikke høye nok rettigheter for å abonnere på denne listen');

//Archive Configuration
 define('_ACA_MENU_TAB_ARCHIVE', 'Arkiver');
 define('_ACA_MENU_ARCHIVE_ALL', 'Arkiver alle');

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

define('_ACA_ARCHIVE_TITLE', 'Oppsett av automatisk arkivering');
define('_ACA_FREQ_TITLE', 'Hyppighet for arkivering');
define('_ACA_FREQ_TOOL', 'Definer hvor ofte du vil at arkivbehanleren skal arkivere deres nettsides innhold.');
define('_ACA_NB_DAYS', 'Antall dager');
define('_ACA_NB_DAYS_TOOL', 'Dette er det eneste \'Annet\'-valget. Spesifiser antall dager mellom hver arkivering.');
define('_ACA_DATE_TITLE', 'Datotype');
define('_ACA_DATE_TOOL', 'Definer om arkivering skal gjøres etter dato for opprettelse eller redigering.');

define('_ACA_MAINTENANCE_TAB', 'Innstillinger vedlikehold');
define('_ACA_MAINTENANCE_FREQ', 'Hyppighet for vedlikehold');
define( '_ACA_MAINTENANCE_FREQ_TIPS', 'Spesifiser hyppighet for kjøring av vedlikeholdsrutine.');
define( '_ACA_CRON_DAYS', 'time(r)');

define( '_ACA_LIST_NOT_AVAIL', 'Det finnes ingen tilgjengelig liste.');
define( '_ACA_LIST_ADD_TAB', 'Legg til/Rediger');

define( '_ACA_LIST_ACCESS_EDIT', 'Legg til/Rediger tilgang for utsendelse');
define( '_ACA_INFO_LIST_ACCESS_EDIT', 'Spesifiser hvilken brukergrupper som kan legge til eller redigere en ny utsendelse for denne listen.');
define( '_ACA_MAILING_NEW_FRONT', 'Opprett en ny utsendelse');

define('_ACA_AUTO_ARCHIVE', 'Automatisk arkivering');
define('_ACA_MENU_ARCHIVE', 'Automatisk arkivering');

//Extra tags:
define('_ACA_TAGS_ISSUE_NB', '[ISSUENB] = Dette vil bli erstattet med utgivelsenummer for nyhetsbrevet.');
define('_ACA_TAGS_DATE', '[DATE] = Dette vil bli erstattet med dato for utsendelse.');
define('_ACA_TAGS_CB', '[CBTAG:{field_name}] = Dette vil bli erstattet med verdien hentet fra \'Community Builder\'-feltet: f.eks. [CBTAG:firstname] ');
define( '_ACA_MAINTENANCE', 'Joobi Care');

define('_ACA_THINK_PRO', 'Når du har profesjonelle behov bruker du profesjonelle komponenter!');
define('_ACA_THINK_PRO_1', 'Smarte nyhetsbrev');
define('_ACA_THINK_PRO_2', 'Definer tilgang for deres liste');
define('_ACA_THINK_PRO_3', 'Definer hvem som kan legge til/redigere utsendelser');
define('_ACA_THINK_PRO_4', 'Flere merker: legg til dine CB-felter');
define('_ACA_THINK_PRO_5', 'Joomla contents Auto-archive');//usikker på denne
define('_ACA_THINK_PRO_6', 'Optimalisering av database');

define('_ACA_LIC_NOT_YET', 'Din lisens er ikke gyldig ennå. Sjekk lisensfanen i kontrollpanelet.');
define('_ACA_PLEASE_LIC_GREEN', 'Pass på at du gir informasjonen, uthevet i grønt på toppen av siden, til vår brukerstøtte.');

define('_ACA_FOLLOW_LINK', 'Hent din lisens');
define( '_ACA_FOLLOW_LINK_TWO', 'Du kan hente din lisens ved å fylle inn token-nummer og sideadresse (som er uthevet i grønt på toppen av denne siden) i lisensskjeamet. ');
define( '_ACA_ENTER_TOKEN_TIPS2', ' Klikk så på \'Lagre\' i meny oppe til høyre.');
define( '_ACA_ENTER_LIC_NB', 'Fyll inn din lisens');
define( '_ACA_UPGRADE_LICENSE', 'Oppgrader din lisens');
define( '_ACA_UPGRADE_LICENSE_TIPS', 'Om du mottok et token-nummer for å oppgradere din lisens kan du fylle inn denne her, klikke \'Lagre\' og fortsette til nummer <b>2</b> for å hente ditt nye lisensnummer.');

define( '_ACA_MAIL_FORMAT', 'Kodeformat');
define( '_ACA_MAIL_FORMAT_TIPS', 'Hvilket format ønsker du å bruke for koding av dine utsendelser, ren tekst eller MIME');
define( '_ACA_ACAJOOM_CRON_DESC_ALT', 'Om du ikke har tilgang til å behandle cron-jobber på nettside/-server kan du bruke den fritt tilgjengelige jCron-komponenten for å opprette cron-jobber fra din nettside.');

//since 1.3.1
define('_ACA_SHOW_AUTHOR', 'Vis skribentens navn');
define('_ACA_SHOW_AUTHOR_TIPS', 'Velg \'Ja\' om du vil legge til skribentens navn når du legger til artikkel i utsendelse');

//since 1.3.5
define('_ACA_REGWARN_NAME', 'Navnet ditt.');
define('_ACA_REGWARN_MAIL', 'Gyldig epostadresse.');

//since 1.5.6
define('_ACA_ADDEMAILREDLINK_TIPS', 'Om du velger \'Ja\' vil brukerens epostadressen bli lagt til som et parameter på slutten av din adresse for viderekobling (viderskoblingslenken for din modul eller et eksternt AcaJoom-skjema).<br/>Det kan være til nytte om du vil kjøre et spesielt skript på denne siden.');
define('_ACA_ADDEMAILREDLINK', 'Legg til epostadresse på lenke for viderekobling');

//since 1.6.3
define('_ACA_ITEMID', 'Element-id');
define('_ACA_ITEMID_TIPS', 'Denne element-iden vil bli lagt til deres Acajoom-lenker.');

//since 1.6.5
define('_ACA_SHOW_JCALPRO', 'jCalPRO');
define('_ACA_SHOW_JCALPRO_TIPS', 'Vis fanen for jCalPRO <br/>(bare om jCalPRO er installert på deres nettside!)');
define('_ACA_JCALTAGS_TITLE', 'jCalPRO-merke:');
define('_ACA_JCALTAGS_TITLE_TIPS', 'Kopier og lim dette merket inn i utsendelsen, der hvor du vil at begivenhet skal vises.');
define('_ACA_JCALTAGS_DESC', 'Beskrivelse:');
define('_ACA_JCALTAGS_DESC_TIPS', 'Velg \'Ja\' om du ønsker å vise beskrivelsen for begivenhet.');
define('_ACA_JCALTAGS_START', 'Startdato:');
define('_ACA_JCALTAGS_START_TIPS', 'Velg \'Ja\' om du ønsker å vise startdato for begivenhet.');
define('_ACA_JCALTAGS_READMORE', 'Les mer:');
define('_ACA_JCALTAGS_READMORE_TIPS', 'Velg \'Ja\' om du ønsker å vise en <b>les mer lenke</b> for begivenhet.');
define('_ACA_REDIRECTCONFIRMATION', 'Adresse for viderekobling');
define('_ACA_REDIRECTCONFIRMATION_TIPS', 'Om du krever en epostbekreftelse vil brukeren bli bekreftet og viderekoblet til denne adressen om vedkommende klikker på denne lenken.');

//since 2.0.0 compatibility with Joomla 1.5
if(!defined('_CMN_SAVE') and defined('CMN_SAVE')) define('_CMN_SAVE',CMN_SAVE);
if(!defined('_CMN_SAVE')) define('_CMN_SAVE','Lagre');
if(!defined('_NO_ACCOUNT')) define('_NO_ACCOUNT','Ingen konto ennå?');
if(!defined('_CREATE_ACCOUNT')) define('_CREATE_ACCOUNT','Registrer konto');
if(!defined('_NOT_AUTH')) define('_NOT_AUTH','Du har ikke tilgang til dette innholdet.');

//since 3.0.0
define('_ACA_DISABLETOOLTIP', 'Deaktiver verktøytips');
define('_ACA_DISABLETOOLTIP_TIPS', 'Dekativer verktøytips på brukersiden');
define('_ACA_MINISENDMAIL', 'Bruk \'Mini SendMail\'');
define('_ACA_MINISENDMAIL_TIPS', 'Om deres server bruker \'Mini SendMail\', bruk dette valget for å ikke legge til brukerens navn i hodet på eposten.');

//Since 3.1.5
define('_ACA_READMORE','Les mer ...');
define('_ACA_VIEWARCHIVE','Klikk her');

//since 4.0.0
define('_ACA_SHOW_JLINKS','Lenkesporing');
define('_ACA_SHOW_JLINKS_TIPS','Aktiverer integrasjon med jLinks for å muliggjøre lenkesporing for hver enkelt lenke i nyhetsbrev.');

//since 4.1.0
define( '_ACA_MAIL_ENCODING', 'Epostkoding' );
define( '_ACA_MAIL_ENCODING_TIPS', 'Hvilken tegnkoding ønsker du å bruke, UTF-8 (anbefalt) eller ISO-8859-2' );
define( '_ACA_COPY_SUBJECT', 'Kopier emne' );

//Acajoom GPL
define('_ACA_DESC_GPL',_ACA_DESC_NEWS);