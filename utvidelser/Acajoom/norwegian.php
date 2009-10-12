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
define('_ACA_DESC_NEWS', 'Acajoom is a mailing lists, newsletters, auto-responders, and follow up tool to communication effectively with your users and customers.  ' .
		'Acajoom, Your Communication Partner!');
define('_ACA_FEATURES', 'Acajoom, your communication partner!');

// Type of lists
define('_ACA_NEWSLETTER', 'Nyhetsbrev');
define('_ACA_AUTORESP', 'Automatisk svar');
define('_ACA_AUTORSS', 'Automatisk RSS');
define('_ACA_ECARD', 'E-kort');
define('_ACA_POSTCARD', 'Postkort');
define('_ACA_PERF', 'Ytelse');
define('_ACA_COUPON', 'Kupong');
define('_ACA_CRON', 'Cron-jobb');
define('_ACA_MAILING', 'Mailing');
define('_ACA_LIST', 'Liste');

 //acajoom Menu
define('_ACA_MENU_LIST', 'Lister');
define('_ACA_MENU_SUBSCRIBERS', 'Abonnenter');
define('_ACA_MENU_NEWSLETTERS', 'Nyhetsbrev');
define('_ACA_MENU_AUTOS', 'Automatiske svar');
define('_ACA_MENU_COUPONS', 'Kuponger');
define('_ACA_MENU_CRONS', 'Cron-jobber');
define('_ACA_MENU_AUTORSS', 'Automatisk RSS');
define('_ACA_MENU_ECARD', 'E-kort');
define('_ACA_MENU_POSTCARDS', 'Postkort');
define('_ACA_MENU_PERFS', 'Performances');
define('_ACA_MENU_TAB_LIST', 'Lister');
define('_ACA_MENU_MAILING_TITLE', 'Mailings');
define('_ACA_MENU_MAILING', 'Mailings for ');
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
define('_ACA_MENU_SEND_TEST', 'Send test e-post');
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
define('_ACA_DESC_CREDITS', 'Kreditter');
define('_ACA_DESC_INFO', 'Informasjon');
define('_ACA_DESC_HOME', 'Hjemmeside');
define('_ACA_DESC_MAILING', 'Brevliste');
define('_ACA_DESC_SUBSCRIBERS', 'Abonnenter');
define('_ACA_PUBLISHED', 'Publisert');
define('_ACA_UNPUBLISHED', 'Upublisert');
define('_ACA_DELETE', 'Slett');
define('_ACA_FILTER', 'Filter');
define('_ACA_UPDATE', 'Oppdater');
define('_ACA_SAVE', 'Lagre');
define('_ACA_CANCEL', 'Avbryt');
define('_ACA_NAME', 'Navn');
define('_ACA_EMAIL', 'E-post');
define('_ACA_SELECT', 'Velg');
define('_ACA_ALL', 'Alt');
define('_ACA_SEND_A', 'Send en ');
define('_ACA_SUCCESS_DELETED', ' slettet ok');
define('_ACA_LIST_ADDED', 'Listen ble laget');
define('_ACA_LIST_COPY', 'Listen er kopiert');
define('_ACA_LIST_UPDATED', 'Listen er oppdatert');
define('_ACA_MAILING_SAVED', 'Brevene er lagret.');
define('_ACA_UPDATED_SUCCESSFULLY', 'oppdatert ok.');

### Subscribers information ###
//subscribe and unsubscribe info
define('_ACA_SUB_INFO', 'Abonnentens informasjon');
define('_ACA_VERIFY_INFO', 'Vennligst bekreft lenken du sendte inn, noe informasjon mangler. ');
define('_ACA_INPUT_NAME', 'Navn');
define('_ACA_INPUT_EMAIL', 'E-post');
define('_ACA_RECEIVE_HTML', 'Motta HTML?');
define('_ACA_TIME_ZONE', 'Tidssone');
define('_ACA_BLACK_LIST', 'Svarteliste');
define('_ACA_REGISTRATION_DATE', 'Brukerens registreringsdato');
define('_ACA_USER_ID', 'Bruker-id');
define('_ACA_DESCRIPTION', 'Beskrivelse');
define('_ACA_ACCOUNT_CONFIRMED', 'Din konto har blitt aktivert.');
define('_ACA_SUB_SUBSCRIBER', 'Mottager');
define('_ACA_SUB_PUBLISHER', 'Utgiver');
define('_ACA_SUB_ADMIN', 'Administrator');
define('_ACA_REGISTERED', 'Registrert');
define('_ACA_SUBSCRIPTIONS', 'Ditt abonnement');
define('_ACA_SEND_UNSUBCRIBE', 'Send avmeld melding');
define('_ACA_SEND_UNSUBCRIBE_TIPS', 'Klikk \'Ja\' for å sende en e-post for å bekrefte avmeldingen.');
define('_ACA_SUBSCRIBE_SUBJECT_MESS', 'Vennligst bekreft ditt abonnement. ');
define('_ACA_UNSUBSCRIBE_SUBJECT_MESS', 'Bekreftelse på avmelding');
define('_ACA_DEFAULT_SUBSCRIBE_MESS', 'Hei [NAME],<br />' .
		'Kun et steg igjen og du er nyhetsbrev abonnent. Vennligst klikk på denne lenken for bekrefte ditt abonnement' .
		'<br /><br />[CONFIRM]<br /><br />Har du spørsmål, vennligst kontakt vår nettredaktør.');
define('_ACA_DEFAULT_UNSUBSCRIBE_MESS', 'Dette er en e-post for å bekrefte at du ikke lengre abonnerer på vårt nyhetsbrev. Vi beklager din beslutning og skulle du noen gang ønske å bli abonnent igjen kan du melde deg på via vår nettløsning. Har du spørsmål, vennligst kontakt vår web redaktør.');

// Acajoom subscribers
define('_ACA_SIGNUP_DATE', 'Abonnement startdato');
define('_ACA_CONFIRMED', 'Bekreftet');
define('_ACA_SUBSCRIB', 'Abonner');
define('_ACA_HTML', 'HTML-brev');
define('_ACA_RESULTS', 'Resultater');
define('_ACA_SEL_LIST', 'Velg en liste');
define('_ACA_SEL_LIST_TYPE', '- Velg en type liste -');
define('_ACA_SUSCRIB_LIST', 'Liste med alle abonnenter');
define('_ACA_SUSCRIB_LIST_UNIQUE', 'abonnenter for: ');
define('_ACA_NO_SUSCRIBERS', 'Ingen abonnenter ble funnet for denne listen.');
define('_ACA_COMFIRM_SUBSCRIPTION', 'En e-post for å bekrefte har blitt sent til deg.  Vennligst sjekk din e-post og klikk på linken vi har sent til deg.<br />' .
		'Du må bekrefte din e-post adresse for at abonnementet skal begynne.');
define('_ACA_SUCCESS_ADD_LIST', 'Du har blitt lagt til listen.');


 // Subcription info
define('_ACA_CONFIRM_LINK', 'Klikk her for å bekrefte ditt abonnement');
define('_ACA_UNSUBSCRIBE_LINK', 'Klikk her for å avslutte abonnementet');
define('_ACA_UNSUBSCRIBE_MESS', 'Din e-post har blitt fjernet fra listen');

define('_ACA_QUEUE_SENT_SUCCESS', 'Alle planlagte brev har blitt sent.');
define('_ACA_MALING_VIEW', 'Vis alle utsendelser');
define('_ACA_UNSUBSCRIBE_MESSAGE', 'Er du sikker på at du ønsker å avslutte abonnementet?');
define('_ACA_MOD_SUBSCRIBE', 'Abonner');
define('_ACA_SUBSCRIBE', 'Abonner');
define('_ACA_UNSUBSCRIBE', 'Avslutt abonnement');
define('_ACA_VIEW_ARCHIVE', 'Vis arkiv');
define('_ACA_SUBSCRIPTION_OR', ' eller klikk her for å oppdatere dine opplysninger');
define('_ACA_EMAIL_ALREADY_REGISTERED', 'Denne e-post adressen har allerede blitt registrert. ');
define('_ACA_SUBSCRIBER_DELETED', 'Abonnenten er slettet.');


### UserPanel ###
 //User Menu
define('_UCP_USER_PANEL', 'Bruker kontrollpanel');
define('_UCP_USER_MENU', 'Brukermeny');
define('_UCP_USER_CONTACT', 'Mine abonnement');
 //Acajoom Cron Menu
define('_UCP_CRON_MENU', 'Cron-jobber');
define('_UCP_CRON_NEW_MENU', 'Ny Cron-jobb');
define('_UCP_CRON_LIST_MENU', 'List mine Cron-jobber');
 //Acajoom Coupon Menu
define('_UCP_COUPON_MENU', 'Kuponger');
define('_UCP_COUPON_LIST_MENU', 'List of Coupons');
define('_UCP_COUPON_ADD_MENU', 'Add a Coupon');

### lists ###
// Tabs
define('_ACA_LIST_T_GENERAL', 'Beskrivelse');
define('_ACA_LIST_T_LAYOUT', 'Oppsett');
define('_ACA_LIST_T_SUBSCRIPTION', 'Abonnement');
define('_ACA_LIST_T_SENDER', 'Sender informasjon');

define('_ACA_LIST_TYPE', 'Type liste');
define('_ACA_LIST_NAME', 'Listenavn');
define('_ACA_LIST_ISSUE', 'Utgavenr.');
define('_ACA_LIST_DATE', 'Sendingsdato');
define('_ACA_LIST_SUB', 'Nyhetsbrev-mal');
define('_ACA_ATTACHED_FILES', 'Tilknyttede filer');
define('_ACA_SELECT_LIST', 'Vennligst velg en liste for å forandre den!');

// Auto Responder box
define('_ACA_AUTORESP_ON', 'Type of list');
define('_ACA_AUTO_RESP_OPTION', 'Auto-responder options');
define('_ACA_AUTO_RESP_FREQ', 'Subscribers can choose frequency');
define('_ACA_AUTO_DELAY', 'Delay (in days)');
define('_ACA_AUTO_DAY_MIN', 'Minimum frequency');
define('_ACA_AUTO_DAY_MAX', 'Maximum frequency');
define('_ACA_FOLLOW_UP', 'Specify follow up auto-responder');
define('_ACA_AUTO_RESP_TIME', 'Subscribers can choose time');
define('_ACA_LIST_SENDER', 'List sender');

define('_ACA_LIST_DESC', 'List description');
define('_ACA_LAYOUT', 'Layout');
define('_ACA_SENDER_NAME', 'Sender name');
define('_ACA_SENDER_EMAIL', 'Sender email');
define('_ACA_SENDER_BOUNCE', 'Sender bounce address');
define('_ACA_LIST_DELAY', 'Delay');
define('_ACA_HTML_MAILING', 'HTML mailing?');
define('_ACA_HTML_MAILING_DESC', '(if you change this, you\'ll have to save and return to this screen to see the changes.)');
define('_ACA_HIDE_FROM_FRONTEND', 'Hide from frontend?');
define('_ACA_SELECT_IMPORT_FILE', 'Select a file to import');;
define('_ACA_IMPORT_FINISHED', 'Import finished');
define('_ACA_DELETION_OFFILE', 'Deletion of file');
define('_ACA_MANUALLY_DELETE', 'failed, you should manually delete the file');
define('_ACA_CANNOT_WRITE_DIR', 'Cannot write directory');
define('_ACA_NOT_PUBLISHED', 'Could not sent the mailing, the list is not published.');

//  List info box
define('_ACA_INFO_LIST_PUB', 'Click Yes to publish the list');
define('_ACA_INFO_LIST_NAME', 'Enter the name of your list here. You can identify the list with this name.');
define('_ACA_INFO_LIST_DESC', 'Enter a brief description of your list here. This description will be visible to visitors at your site.');
define('_ACA_INFO_LIST_SENDER_NAME', 'Enter the name of the sender of the mailing. This name will be visible when subscribers receive messages from this list.');
define('_ACA_INFO_LIST_SENDER_EMAIL', 'Enter the email address from which the messages will be sent.');
define('_ACA_INFO_LIST_SENDER_BOUNCED', 'Enter the email address where users can reply to. It\'s highly recommended to be the same as the sender email, since spam filters will give your message a higher spam ranking if they are different.');
define('_ACA_INFO_LIST_AUTORESP', 'Choose the type of mailings for this list. <br />' .
		'Newsletter: normal newsletter<br />' .
		'Auto-responder: an auto-responder is a list which is sent automatically through the website at regular intervals.');
define('_ACA_INFO_LIST_FREQUENCY', 'Enable the users to choose how often they receive the list.  It gives more flexibility to the user.');
define('_ACA_INFO_LIST_TIME', 'Let the user choose their preferred time of the day to receive the list.');
define('_ACA_INFO_LIST_MIN_DAY', 'Define what is the minimum frequency a user can choose to receive the list');
define('_ACA_INFO_LIST_DELAY', 'Specify the delay between this auto-responder and the previous one.');
define('_ACA_INFO_LIST_DATE', 'Specify the date to publish the news list if you want to delay the publishing. <br /> FORMAT : YYYY-MM-DD HH:MM:SS');
define('_ACA_INFO_LIST_MAX_DAY', 'Define what is the maximum frequency a user can choose to receive the list');
define('_ACA_INFO_LIST_LAYOUT', 'Enter the layout of your mailing list here. You can enter any layout for your mailing here.');
define('_ACA_INFO_LIST_SUB_MESS', 'This message will be send to the subscriber when he or she first registers. You can define any text you like in here.');
define('_ACA_INFO_LIST_UNSUB_MESS', 'Denne meldingen vil bli sendt til abonnenten når han eller hun avbestiller sit abonoment. Du kan definere hvilken som helst melding her..');
define('_ACA_INFO_LIST_HTML', 'Merker av hvis du ønsker å sende epost i HTML format. Abonnenter vil kunne spesifisere om de ønsker å motta epost i  HTML format, eller bare tekst når man abonnere på en HTML epost-liste.');
define('_ACA_INFO_LIST_HIDDEN', 'Klikk Ja for å skjule listen fra forsiden, brukere kan ikke abonnere men du har fortsatt muligheten for å sende epost.');
define('_ACA_INFO_LIST_ACA_AUTO_SUB', 'Ønsker du å automatisk legge brukere til i abonnementslisten? <br /> <B> Nye Brukere: </ B> vil registerer alle nye brukere som registrerer seg på nettstedet. <br /> <B> Alle brukere: </ B> vil registrere alle registrerte brukere i databasen. <br /> (alle muligheten støttes av Community Builder)');
define('_ACA_INFO_LIST_ACC_LEVEL', 'Velg tilgangsnivået for forsiden. Dette vil vise eller skjule epost til brukergruppene som ikke har tilgang til det, så de ikke har muligheten til å abonnere på en epostliste.');
define('_ACA_INFO_LIST_ACC_USER_ID', 'Velg tilgangsnivået til brukergruppe du ønsker å tillate redigering. Denne brukergruppen og de over vil være i stand til å redigere e-post og sende den ut, enten fra forsiden eller baksiden.');
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
define('_ACA_LABEL_FREQ_TIPS', 'Klikk Ja hvis du vil bruke dette for en Acajoom Cron-jobber, ikke for noen annen cron-jobb.<br />' .
        'Hvis du klikker Ja, du trenger ikke å spesifisere en Cron-jobb adresse, den bli lagt til automatisk.');
define('_ACA_SITE_URL', 'Din webadressen');
define('_ACA_CRON_FREQUENCY', 'Cron-jobb frekvens');
define('_ACA_STARTDATE_FREQ', 'Start dato');
define('_ACA_LABELDATE_FREQ', 'Angi dato');
define('_ACA_LABELTIME_FREQ', 'Angi tid');
define('_ACA_CRON_URL', 'Cron-jobb URL');
define('_ACA_CRON_FREQ', 'Frekvens');
define('_ACA_TITLE_CRONLIST', 'Cron-jobb liste');
define('_NEW_LIST', 'Lag en ny liste');

//title CRON form
define('_ACA_TITLE_FREQ', 'Editer Cron-jobb');
define('_ACA_CRON_SITE_URL', 'Angi en gyldig nettadresse starter med http://');

### Mailings ###
define('_ACA_MAILING_ALL', 'Alle utsendelser');
define('_ACA_EDIT_A', 'Editer en ');
define('_ACA_SELCT_MAILING', 'Vennligst velg en epost liste i nedtrekks menyen for å legge til en ny utsendelse.');
define('_ACA_VISIBLE_FRONT', 'Vis på forsiden');

// mailer
define('_ACA_SUBJECT', 'Emne');
define('_ACA_CONTENT', 'Innhold');
define('_ACA_NAMEREP', '[NAME] = Denne vil bli erstattet med navnet som abonnenten la inn, du vill sende en mer personlig epost med dette.<br />');
define('_ACA_FIRST_NAME_REP', '[FIRSTNAME] = Denne vil bli erstattet med fornavn som abonnenten la inn.<br />');
define('_ACA_NONHTML', 'Ren tekst versjon');
define('_ACA_ATTACHMENTS', 'Vedlegg');
define('_ACA_SELECT_MULTIPLE', 'Hold Ctrl (eller Com) nede for å velde flere vedlegg.<br />' .
        'Filene som vises i listen over vedlegg finnes i mappen for vedlegg, du kan forandre denne plassen for mappen i konfigurasjonen->epost for AcaJoom.');
define('_ACA_CONTENT_ITEM', 'Innholdselementer');
define('_ACA_SENDING_EMAIL', 'Sender epost');
define('_ACA_MESSAGE_NOT', 'Meldingen kunne ikke sendes');
define('_ACA_MAILER_ERROR', 'Feil ved utsending');
define('_ACA_MESSAGE_SENT_SUCCESSFULLY', 'Meldingen er sendt');
define('_ACA_SENDING_TOOK', 'Denne utsendelsen tok');
define('_ACA_SECONDS', 'sekunder');
define('_ACA_NO_ADDRESS_ENTERED', 'Ingen epost adresse eller abonnent');
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
define('_ACA_SEND_MAIL_FROM', 'Fra epost');
define('_ACA_SEND_MAIL_NAME', 'Fra navn');
define('_ACA_MAILSENDMETHOD', 'Sendingsmetode');
define('_ACA_SENDMAILPATH', 'Sti for send epost');
define('_ACA_SMTPHOST', 'SMTP host');
define('_ACA_SMTPAUTHREQUIRED', 'SMTP godkjenning kreves');
define('_ACA_SMTPAUTHREQUIRED_TIPS', 'Velg ja hvis din SMTP server krever godkjenning');
define('_ACA_SMTPUSERNAME', 'SMTP brukernavn');
define('_ACA_SMTPUSERNAME_TIPS', 'Skriv inn SMTP brukernavn når din SMTP server krever godkjenning');
define('_ACA_SMTPPASSWORD', 'SMTP passord');
define('_ACA_SMTPPASSWORD_TIPS', 'Skriv inn SMTP passord når din SMTP server krever godkjenning');
define('_ACA_USE_EMBEDDED', 'Bruk innebygde bilder');
define('_ACA_USE_EMBEDDED_TIPS', 'Velg Ja hvis bildene i det vedlagte innholdet bør være innebygd i e-post for html-meldinger, eller nei får å bruke standard bilde lenke som linker til bildene på nettstedet.');
define('_ACA_UPLOAD_PATH', 'Opplasting/vedlegges sti');
define('_ACA_UPLOAD_PATH_TIPS', 'Du kan angi en mappe for opplasting.<br />' .
        'Forsikre deg om at mappen finnes, hvis ikke må du opprette den.');

// subscribers settings
define('_ACA_ALLOW_UNREG', 'Tillat avbestilling');
define('_ACA_ALLOW_UNREG_TIPS', 'Velg ja for at brukere kan abonnere uten at de er registrerte.');
define('_ACA_REQ_CONFIRM', 'Krever bekreftelse');
define('_ACA_REQ_CONFIRM_TIPS', 'Velg ja for at uregistrerte abonnenter skal bekrefte sin epost adresse.');
define('_ACA_SUB_SETTINGS', 'Abonnement innstillinger');
define('_ACA_SUBMESSAGE', 'Abonnentens epost adresse');
define('_ACA_SUBSCRIBE_LIST', 'Abonner på en liste');

define('_ACA_USABLE_TAGS', 'Tag som kan brukes');
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
define('_ACA_TIME_OFFSET_URL', 'klikk her for å sette opp tidssonen i Joomla! konfigurasjon -> Tjener ');
define('_ACA_TIME_OFFSET_TIPS', 'Sett opp din servers tidssone slik at dato og til et rett');
define('_ACA_TIME_OFFSET', 'Tidssone ');
define('_ACA_CRON_TITLE', 'Setting up cron function');
define('_ACA_CRON_DESC', '<br />Ved bruke av cron-jobb funksjonen kan du sette opp automatisert oppgave for din Joomla nettside!<br />' .
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
define('_ACA_SEND_AUTO_LOG_TIPS', 'Velg Ja hvis du ønsker å sende en e-post logg hver gang køen er behandlet. VARSEL: Dette kan resultere i et stort antall e-poster.');
define('_ACA_SEND_LOG', 'Sendt logg');
define('_ACA_SEND_LOG_TIPS', 'Hvorvidt en logg av forsendelsen bør bli sendt til e-postadressen til brukeren som sendte e-posten.');
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

// Update and upgrade messages
define('_ACA_NO_UPDATES', 'There are currently no update available.');
define('_ACA_VERSION', 'Acajoom Version');
define('_ACA_NEED_UPDATED', 'Files that need to be updated:');
define('_ACA_NEED_ADDED', 'Files that need to be added:');
define('_ACA_NEED_REMOVED', 'Files that need to be removed:');
define('_ACA_FILENAME', 'Filename:');
define('_ACA_CURRENT_VERSION', 'Current version:');
define('_ACA_NEWEST_VERSION', 'Newest version:');
define('_ACA_UPDATING', 'Updating');
define('_ACA_UPDATE_UPDATED_SUCCESSFULLY', 'The files have been updated successfully.');
define('_ACA_UPDATE_FAILED', 'Update failed!');
define('_ACA_ADDING', 'Adding');
define('_ACA_ADDED_SUCCESSFULLY', 'Added successfully.');
define('_ACA_ADDING_FAILED', 'Adding failed!');
define('_ACA_REMOVING', 'Removing');
define('_ACA_REMOVED_SUCCESSFULLY', 'Removed successfully.');
define('_ACA_REMOVING_FAILED', 'Removing failed!');
define('_ACA_INSTALL_DIFFERENT_VERSION', 'Install a different version');
define('_ACA_CONTENT_ADD', 'Add content');
define('_ACA_UPGRADE_FROM', 'Import data (newsletters and subscribers\' information) from ');
define('_ACA_UPGRADE_MESS', 'There are no risk to your existing data. <br /> This process will simply import the data to the Acajoom database.');
define('_ACA_CONTINUE_SENDING', 'Continue sending');

// Acajoom message
define('_ACA_UPGRADE1', 'You can easily import your users and newsletters from ');
define('_ACA_UPGRADE2', ' to Acajoom in the updates panel.');
define('_ACA_UPDATE_MESSAGE', 'A new version of Acajoom is available! ');
define('_ACA_UPDATE_MESSAGE_LINK', 'Click here to update!');
define('_ACA_THANKYOU', 'Thank you for choosing Acajoom, Your communication partner!');
define('_ACA_NO_SERVER', 'Update Server not available, please check back later.');
define('_ACA_MOD_PUB', 'Acajoom module is not published.');
define('_ACA_MOD_PUB_LINK', 'Click here to publish it!');
define('_ACA_IMPORT_SUCCESS', 'successfully imported');
define('_ACA_IMPORT_EXIST', 'subscriber already in database');

// Acajoom\'s Guide
define('_ACA_GUIDE', '\'s Wizard');
define('_ACA_GUIDE_FIRST_ACA_STEP', '<p>Acajoom has many great features and this wizard will guide you through a four easy steps process to get you started sending your newsletters and auto-responders!<p />');
define('_ACA_GUIDE_FIRST_ACA_STEP_DESC', 'First, you need to add a list.  A list could be of two types, either a newsletter or an auto-responder.' .
		'  In the list you define all the different parameters to enable the sending of your newsletters or auto-responders: sender name, layout, subscribers\' welcome message, etc...
<br /><br />You can set up your first list  here: <a href="index2.php?option=com_acajoom&act=list" >create a list</a> and click the New button.');
define('_ACA_GUIDE_FIRST_ACA_STEP_UPGRADE', 'Acajoom provides you with an easy way to import all data from a previous newsletter system.<br />' .
		' Go to the Updates panel and choose your previous newsletter system to import the all your newsletters and subscribers.<br /><br />' .
		'<span style="color:#FF5E00;" >IMPORTANT: the import is risk FREE and doesn\'t affect in any way the data of your previous newsletter system</span><br />' .
		'After the import you will be able to manage your subscribers and mailings directly from Acajoom.<br /><br />');
define('_ACA_GUIDE_SECOND_ACA_STEP', 'Great your first list is setup!  You can now write your first %s.  To create it go to: ');
define('_ACA_GUIDE_SECOND_ACA_STEP_AUTO', 'Auto-responder Management');
define('_ACA_GUIDE_SECOND_ACA_STEP_NEWS', 'Newsletter Management');
define('_ACA_GUIDE_SECOND_ACA_STEP_FINAL', ' and select your %s. <br /> Then choose your %s in the drop down list.  Create your first mailing by clicking New ');

define('_ACA_GUIDE_THRID_ACA_STEP_NEWS', 'Before you send your first newsletter you may want to check the mail configuration.  ' .
		'Go to the <a href="index2.php?option=com_acajoom&act=configuration" >configuration page</a> to verify the mail settings. <br />');
define('_ACA_GUIDE_THRID2_ACA_STEP_NEWS', '<br />When you are ready go back to the Newsletters menu, select your mailing and click Send');

define('_ACA_GUIDE_THRID_ACA_STEP_AUTOS', 'For your auto-responders to be sent you first need to set up a cron task on your server. ' .
		' Please refer to the Cron tab in the configuration panel.' .
		' <a href="index2.php?option=com_acajoom&act=configuration" >click here</a> to learn about setting up a cron task. <br />');

define('_ACA_GUIDE_MODULE', ' <br />Make also sure that you have published Acajoom module so that people can sign up for the list.');

define('_ACA_GUIDE_FOUR_ACA_STEP_NEWS', ' You can now also set up an auto-responder.');
define('_ACA_GUIDE_FOUR_ACA_STEP_AUTOS', ' You can now also set up a newsletter.');

define('_ACA_GUIDE_FOUR_ACA_STEP', '<p><br />Voila! You are ready to effectively communicate with you visitors and users. This wizard will end as soon as you have entered a second mailing or you can turn it off in the <a href="index2.php?option=com_acajoom&act=configuration" >configuration panel</a>.' .
		'<br /><br />  If you have any question while using Acajoom, please refer to the ' .
		'<a target="_blank" href="http://www.ijoobi.com/index.php?option=com_content&Itemid=72&view=category&layout=blog&id=29&limit=60" >documentation</a>. ' .
		' You will also find lots of information on how to communicate effectively with your subscribers on <a href="http://www.ijoobi.com/" target="_blank" >www.ijoobi.com</a>.' .
		'<p /><br /><b>Thank you for using Acajoom. Your Communication Partner!</b> ');
define('_ACA_GUIDE_TURNOFF', 'The wizard is now being turned off!');
define('_ACA_STEP', 'STEP ');

// Acajoom Install
define('_ACA_INSTALL_CONFIG', 'Acajoom Configuration');
define('_ACA_INSTALL_SUCCESS', 'Succesful Install');
define('_ACA_INSTALL_ERROR', 'Installation Error');
define('_ACA_INSTALL_BOT', 'Acajoom Plugin (Bot)');
define('_ACA_INSTALL_MODULE', 'Acajoom Module');
//Others
define('_ACA_JAVASCRIPT', '!Warning! Javascript must be enabled for proper operation.');
define('_ACA_EXPORT_TEXT', 'The subscribers exported is based on the list you have chosen. <br />Export subscribers for list');
define('_ACA_IMPORT_TIPS', 'Import subscribers. The information in the file need to be to the following format: <br />' .
		'Name,email,receiveHTML(0/1),<span style="color: rgb(255, 0, 0);">confirmed(0/1)</span>');
define('_ACA_SUBCRIBER_EXIT', 'is already a subscriber');
define('_ACA_GET_STARTED', 'Click here to get started!');

//News since 1.0.1
define('_ACA_WARNING_1011', 'Warning: 1011: Update will not work because of your server restrictions.');
define('_ACA_SEND_MAIL_FROM_TIPS', 'Choose which email address will show as the sender.');
define('_ACA_SEND_MAIL_NAME_TIPS', 'Choose what name will show as the sender.');
define('_ACA_MAILSENDMETHOD_TIPS', 'Choose which mailer you wish to use: PHP mail function, <span>Sendmail</span> or SMTP Server.');
define('_ACA_SENDMAILPATH_TIPS', 'This is the directory of the Mail server');
define('_ACA_LIST_T_TEMPLATE', 'Template');
define('_ACA_NO_MAILING_ENTERED', 'No mailing provided');
define('_ACA_NO_LIST_ENTERED', 'No list provided');
define('_ACA_SENT_MAILING', 'Sent mailings');
define('_ACA_SELECT_FILE', 'Please select a file to ');
define('_ACA_LIST_IMPORT', 'Check the list(s) you want the subscribers to be associated with.');
define('_ACA_PB_QUEUE', 'Subscriber inserted but problem to connect him/her to the list(s). Please check manually.');
define('_ACA_UPDATE_MESS' , '');
define('_ACA_UPDATE_MESS1', 'Update Highly recommanded!');
define('_ACA_UPDATE_MESS2', 'Patch and small fixes.');
define('_ACA_UPDATE_MESS3', 'New release.');
define('_ACA_UPDATE_MESS5', 'Joomla 1.5 is required to update.');
define('_ACA_UPDATE_IS_AVAIL', ' is available!');
define('_ACA_NO_MAILING_SENT', 'No mailing sent!');
define('_ACA_SHOW_LOGIN', 'Show login form');
define('_ACA_SHOW_LOGIN_TIPS', 'Select Yes to show a login form in the front-end Acajoom control panel so that user can register to the website.');
define('_ACA_LISTS_EDITOR', 'List Description Editor');
define('_ACA_LISTS_EDITOR_TIPS', 'Select Yes to use an HTML editor to edit the list description field.');
define('_ACA_SUBCRIBERS_VIEW', 'View subscribers');

//News since 1.0.2
define('_ACA_FRONTEND_SETTINGS', 'Front-end Settings');
define('_ACA_SHOW_LOGOUT', 'Show logout button');
define('_ACA_SHOW_LOGOUT_TIPS', 'Select Yes to show a logout button in the front-end Acajoom control panel.');

//News since 1.0.3 CB integration
define('_ACA_CONFIG_INTEGRATION', 'Integration');
define('_ACA_CB_INTEGRATION', 'Community Builder Integration');
define('_ACA_INSTALL_PLUGIN', 'Community Builder Plugin (Acajoom Integration) ');
define('_ACA_CB_PLUGIN_NOT_INSTALLED', 'Acajoom Plugin for Community Builder is not yet installed!');
define('_ACA_CB_PLUGIN', 'Lists at registration');
define('_ACA_CB_PLUGIN_TIPS', 'Select Yes to show the mailing lists in the community builder registration form');
define('_ACA_CB_LISTS', 'List IDs');
define('_ACA_CB_LISTS_TIPS', 'THIS IS A REQUIRED FIELD. Enter the id number of the lists you wish to allow users to subscribe to seperated by a comma ,  (0 show all the lists)');
define('_ACA_CB_INTRO', 'Introduction text');
define('_ACA_CB_INTRO_TIPS', 'A text that appear will appear before the listing. LEAVE BLANK TO NOT SHOW NOTHING.  You can use HTML tags to customize the look and feel.');
define('_ACA_CB_SHOW_NAME', 'Show List Name');
define('_ACA_CB_SHOW_NAME_TIPS', 'Select whether or not to show the name of the list after the introduction.');
define('_ACA_CB_LIST_DEFAULT', 'Check list by default');
define('_ACA_CB_LIST_DEFAULT_TIPS', 'Select whether or not to you want the check box for each list checked by default.');
define('_ACA_CB_HTML_SHOW', 'Show Receive HTML');
define('_ACA_CB_HTML_SHOW_TIPS', 'Set to Yes to allow users to decide whether they want HTML emails or not. Set to No to use default receive html.');
define('_ACA_CB_HTML_DEFAULT', 'Default Receive HTML');
define('_ACA_CB_HTML_DEFAULT_TIPS', 'Set this option to show the default html mailing configuration. If the Show Receive HTML is set to No then this option will be the default.');

// Since 1.0.4
define('_ACA_BACKUP_FAILED', 'Could not backup the file! File not replaced.');
define('_ACA_BACKUP_YOUR_FILES', 'The old version of the files have been backed up into the following directory:');
define('_ACA_SERVER_LOCAL_TIME', 'Server local time');
define('_ACA_SHOW_ARCHIVE', 'Show archive button');
define('_ACA_SHOW_ARCHIVE_TIPS', 'Select YES to show the archive button in the front end on the Newsletter listing');
define('_ACA_LIST_OPT_TAG', 'Tags');
define('_ACA_LIST_OPT_IMG', 'Images');
define('_ACA_LIST_OPT_CTT', 'Content');
define('_ACA_INPUT_NAME_TIPS', 'Enter your full name (firstname first)');
define('_ACA_INPUT_EMAIL_TIPS', 'Enter your email address (Make sure this is a valid email address if you want to receive our mailings.)');
define('_ACA_RECEIVE_HTML_TIPS', 'Choose Yes if you want to receive HTML mailings - No to receive Text only mailings');
define('_ACA_TIME_ZONE_ASK_TIPS', 'Specify your time zone.');

// Since 1.0.5
define('_ACA_FILES', 'Files');
define('_ACA_FILES_UPLOAD', 'Upload');
define('_ACA_MENU_UPLOAD_IMG', 'Upload Images');
define('_ACA_TOO_LARGE', 'File size too large. The maximum permitted size is');
define('_ACA_MISSING_DIR', 'Destination directory doesn\'t exist');
define('_ACA_IS_NOT_DIR', 'The destination directory doesn\'t exist or is a regular file.');
define('_ACA_NO_WRITE_PERMS', 'The destination directory doesn\'t have write perms.');
define('_ACA_NO_USER_FILE', 'You haven\'t selected any file for uploading.');
define('_ACA_E_FAIL_MOVE', 'Impossible to move the file.');
define('_ACA_FILE_EXISTS', 'The destination file already exists.');
define('_ACA_CANNOT_OVERWRITE', 'The destination file already exists and could not be overwritten.');
define('_ACA_NOT_ALLOWED_EXTENSION', 'File extension not permitted.');
define('_ACA_PARTIAL', 'The file was only partially uploaded.');
define('_ACA_UPLOAD_ERROR', 'Upload error:');
define('DEV_NO_DEF_FILE', 'The file was only partially uploaded.');

// already exist but modified  added a <br/ on first line and added [SUBSCRIPTIONS] line>
define('_ACA_CONTENTREP', '[SUBSCRIPTIONS] = This will be replaced with the subscription links.' .
		' This is <strong>required</strong> to make Acajoom work properly.<br />' .
		'If you place any other content in this box it will be display in all mailings corresponding to this list.' .
		' <br />Add your subscription message at the end.  Acajoom will automatically add a link for the subscriber to change their information and a link to unsubscribe from the list.');

// since 1.0.6
define('_ACA_NOTIFICATION', 'Notification');  // shortcut for Email notification
define('_ACA_NOTIFICATIONS', 'Notifications');
define('_ACA_USE_SEF', 'SEF in mailings');
define('_ACA_USE_SEF_TIPS', 'It is recommended that you choose No.  However if you want the URL included in your mailings to use SEF then choose Yes.' .
		' <br /><b>The links will works the same for either options.  No will insure that the links in the mailings will always works even if you change your SEF.</b> ');
define('_ACA_ERR_NB', 'Error #: ERR');
define('_ACA_ERR_SETTINGS', 'Error handeling settings');
define('_ACA_ERR_SEND', 'Send error report');
define('_ACA_ERR_SEND_TIPS', 'If you want Acajoom be a better product please select YES.  This will send us an error report.  So you even dont need to report bugs anymore ;-) <br /> <b>NO PRIVATE INFORMATION IS SENT</b>.  We dont even know from what website the error is coming from. We send only information about Acajoom, the PHP setup and SQL queries. ');
define('_ACA_ERR_SHOW_TIPS', 'Choose Yes to show error number on the screen.  Mainly used for debuging purpose. ');
define('_ACA_ERR_SHOW', 'Show errors');
define('_ACA_LIST_SHOW_UNSUBCRIBE', 'Show unsubscribe links');
define('_ACA_LIST_SHOW_UNSUBCRIBE_TIPS', 'Select Yes to show the unsubscribe links at the bottom of the mailings for users to change their subscriptions. <br /> No disable the footer and links.');
define('_ACA_UPDATE_INSTALL', '<span style="color: rgb(255, 0, 0);">IMPORTANT NOTICE!</span> <br />If you are upgrading from a previous Acajoom install you need to upgrade your database structure by clicking on the following button (Your data will stay in integrity)');
define('_ACA_UPDATE_INSTALL_BTN', 'Upgrade tables and configuration');
define('_ACA_MAILING_MAX_TIME', 'Max queue time');
define('_ACA_MAILING_MAX_TIME_TIPS', 'Define the maximum time for each set of emails sent by the queue. Recommanded between 30s and 2mins.');

// virtuemart integration beta
define('_ACA_VM_INTEGRATION', 'VirtueMart Integration');
define('_ACA_VM_COUPON_NOTIF', 'Coupon notification ID');
define('_ACA_VM_COUPON_NOTIF_TIPS', 'Specify the ID number of the mailing you want to use to send coupons to your shoppers.');
define('_ACA_VM_NEW_PRODUCT', 'New products notification ID');
define('_ACA_VM_NEW_PRODUCT_TIPS', 'Specify the ID number of the mailing you want to use to send new products notification.');

// since 1.0.8
// create forms for subscriptions
define('_ACA_FORM_BUTTON', 'Create form');
define('_ACA_FORM_COPY', 'HTML code');
define('_ACA_FORM_COPY_TIPS', 'Copy the generated HTML code into your HTML page.');
define('_ACA_FORM_LIST_TIPS', 'Select the list you want to include in the form');
// update messages
define('_ACA_UPDATE_MESS4', 'It can\'t be updated automatically.');
define('_ACA_WARNG_REMOTE_FILE', 'No way to get remote file.');
define('_ACA_ERROR_FETCH', 'Error fetching file.');

define('_ACA_CHECK', 'Check');
define('_ACA_MORE_INFO', 'More info');
define('_ACA_UPDATE_NEW', 'Update to newer version');
define('_ACA_UPGRADE', 'Upgrade to higher product');
define('_ACA_DOWNDATE', 'Roll back to previous version');
define('_ACA_DOWNGRADE', 'Back to basic product');
define('_ACA_REQUIRE_JOOM', 'Require Joomla');
define('_ACA_TRY_IT', 'Try it!');
define('_ACA_NEWER', 'Newer');
define('_ACA_OLDER', 'Older');
define('_ACA_CURRENT', 'Current');

// since 1.0.9
define('_ACA_CHECK_COMP', 'Try one of the other components');
define('_ACA_MENU_VIDEO', 'Video tutorials');
define('_ACA_SCHEDULE_TITLE', 'Automatic schedule function setting');
define('_ACA_ISSUE_NB_TIPS', 'Issue number generated automatically by the system');
define('_ACA_SEL_ALL', 'All mailings');
define('_ACA_SEL_ALL_SUB', 'All lists');
define('_ACA_INTRO_ONLY_TIPS', 'If you check this box only the introduction of the article will be inserted into the mailing with a read more link to the complete article on your site.');
define('_ACA_TAGS_TITLE', 'Content tag');
define('_ACA_TAGS_TITLE_TIPS', 'Copy and paste this tag into the mailing where you want to have the content to be placed.');
define('_ACA_PREVIEW_EMAIL_TEST', 'Indicate the email address to send a test to');
define('_ACA_PREVIEW_TITLE', 'Preview');
define('_ACA_AUTO_UPDATE', 'New update notification');
define('_ACA_AUTO_UPDATE_TIPS', 'Select Yes if you want to be notified of new updates for your component. <br />IMPORTANT!! Show tips needs to be on for this function to work.');

// since 1.1.0
define('_ACA_LICENSE', 'License Information');

// since 1.1.1
define('_ACA_NEW', 'New');
define('_ACA_SCHEDULE_SETUP', 'In order for the autoresponders to be sent you need to setup scheduler in the configuration.');
define('_ACA_SCHEDULER', 'Scheduler');
define('_ACA_ACAJOOM_CRON_DESC', 'if you do not have access to a cron task manager on your website, you can register for a Free Acajoom Cron account at:');
define('_ACA_CRON_DOCUMENTATION', 'You can find further information on setting up the Acajoom Scheduler at the following url:');
define('_ACA_CRON_DOC_URL', '<a href="http://www.ijoobi.com/index.php?option=com_content&view=article&id=4249&catid=29&Itemid=72"
 target="_blank">http://www.ijoobi.com/index.php?option=com_content&Itemid=72&view=category&layout=blog&id=29&limit=60</a>');
define( '_ACA_QUEUE_PROCESSED', 'Queue processed succefully...');
define( '_ACA_ERROR_MOVING_UPLOAD', 'Error moving imported file');

//since 1.1.4
define( '_ACA_SCHEDULE_FREQUENCY', 'Scheduler frequency');
define( '_ACA_CRON_MAX_FREQ', 'Scheduler max frequency');
define( '_ACA_CRON_MAX_FREQ_TIPS', 'Specify the maximum frequency the scheduler can run ( in minutes ).  This will limit the scheduler even if the cron task is set up more frequently.');
define( '_ACA_CRON_MAX_EMAIL', 'Maximum emails per task');
define( '_ACA_CRON_MAX_EMAIL_TIPS', 'Specify the maximum number of emails sent per task (0 unlimited).');
define( '_ACA_CRON_MINUTES', ' minutes');
define( '_ACA_SHOW_SIGNATURE', 'Show email footer');
define( '_ACA_SHOW_SIGNATURE_TIPS', 'Whether or not you want to promote Acajoom in the footer of the emails.');
define( '_ACA_QUEUE_AUTO_PROCESSED', 'Auto-responders processed successfully...');
define( '_ACA_QUEUE_NEWS_PROCESSED', 'Scheduled newsletters processed successfully...');
define( '_ACA_MENU_SYNC_USERS', 'Sync Users');
define( '_ACA_SYNC_USERS_SUCCESS', 'Users Synchronization Successful!');

// compatibility with Joomla 15
if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Logout');
if (!defined('_CMN_YES')) define( '_CMN_YES', 'Yes');
if (!defined('_CMN_NO')) define( '_CMN_NO', 'No');
if (!defined('_HI')) define( '_HI', 'Hi');
if (!defined('_CMN_TOP')) define( '_CMN_TOP', 'Top');
if (!defined('_CMN_BOTTOM')) define( '_CMN_BOTTOM', 'Bottom');
//if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Logout');

// For include title only or full article in content item tab in newsletter edit - p0stman911
define('_ACA_TITLE_ONLY_TIPS', 'If you select this only the title of the article will be inserted into the mailing as a link to the complete article on your site.');
define('_ACA_TITLE_ONLY', 'Title Only');
define('_ACA_FULL_ARTICLE_TIPS', 'If you select this the complete article will be inserted into the mailing');
define('_ACA_FULL_ARTICLE', 'Full Article');
define('_ACA_CONTENT_ITEM_SELECT_T', 'Select a content item to append to the message. <br />Copy and paste the <b>content tag</b> into the mailing.  You can choose to have the full text, intro only, or title only with (0, 1, or 2 respectively). ');
define('_ACA_SUBSCRIBE_LIST2', 'Mailing list(s)');

// smart-newsletter function
define('_ACA_AUTONEWS', 'Smart-Newsletter');
define('_ACA_MENU_AUTONEWS', 'Smart-Newsletters');
define('_ACA_AUTO_NEWS_OPTION', 'Smart-Newsletter options');
define('_ACA_AUTONEWS_FREQ', 'Newsletter Frequency');
define('_ACA_AUTONEWS_FREQ_TIPS', 'Specify the frequency at which you want to send the smart-newsletter.');
define('_ACA_AUTONEWS_SECTION', 'Article Section');
define('_ACA_AUTONEWS_SECTION_TIPS', 'Specify the section you want to choose the articles from.');
define('_ACA_AUTONEWS_CAT', 'Article Category');
define('_ACA_AUTONEWS_CAT_TIPS', 'Specify the category you want to choose the articles from (All for all article in that section).');
define('_ACA_SELECT_SECTION', 'All Sections');
define('_ACA_SELECT_CAT', 'All Categories');
define('_ACA_AUTO_DAY_CH8', 'Quaterly');
define('_ACA_AUTONEWS_STARTDATE', 'Start date');
define('_ACA_AUTONEWS_STARTDATE_TIPS', 'Specify the date you want to start sending the Smart Newsletter.');
define('_ACA_AUTONEWS_TYPE', 'Content rendering');// how we see the content which is included in the newsletter
define('_ACA_AUTONEWS_TYPE_TIPS', 'Full Article: will include the entire article in the newsletter.<br />' .
		'Intro only: will include only the introduction of the article in the newsletter.<br/>' .
		'Title only: will include only the title of the article in the newsletter.');
define('_ACA_TAGS_AUTONEWS', '[SMARTNEWSLETTER] = This will be replaced by the Smart-newsletter.');

//since 1.1.3
define('_ACA_MALING_EDIT_VIEW', 'Create / View Mailings');
define('_ACA_LICENSE_CONFIG', 'License');
define('_ACA_ENTER_LICENSE', 'Enter license');
define('_ACA_ENTER_LICENSE_TIPS', 'Enter your license number and save it.');
define('_ACA_LICENSE_SETTING', 'License settings');
define('_ACA_GOOD_LIC', 'Your license is valid.');
define('_ACA_NOTSO_GOOD_LIC', 'Your license is not valid: ');
define('_ACA_PLEASE_LIC', 'Please contact Acajoom support to upgrade your license ( license@ijoobi.com ).');
define('_ACA_DESC_PLUS', 'Acajoom Plus is the first sequencial auto-responders for Joomla CMS.  ' . _ACA_FEATURES);
define('_ACA_DESC_PRO', 'Acajoom PRO the ultimate mailing system for Joomla CMS.  ' . _ACA_FEATURES);

//since 1.1.4
define('_ACA_ENTER_TOKEN', 'Enter token');

define('_ACA_ENTER_TOKEN_TIPS', 'Please enter your token number you received by email when you purchased Acajoom. ');

define('_ACA_ACAJOOM_SITE', 'Acajoom site:');
define('_ACA_MY_SITE', 'My site:');

define( '_ACA_LICENSE_FORM', ' ' .
 		'Click here to go to the license form.</a>');
define('_ACA_PLEASE_CLEAR_LICENSE', 'Please clear the license field so it is empty and try again.<br />  If the problem persists, ');

define( '_ACA_LICENSE_SUPPORT', 'If you still have questions, ' . _ACA_PLEASE_LIC);

define( '_ACA_LICENSE_TWO', 'you can get your license manual by entering the token number and site URL (which is highlighted in green at the top of this page) in the License form. '
			. _ACA_LICENSE_FORM . '<br /><br/>' . _ACA_LICENSE_SUPPORT);

define('_ACA_ENTER_TOKEN_PATIENCE', 'After saving your token a license will be generated automatically. ' .
		' Usually the token is validated in 2 minutes.  However, in some cases it can take up to 15 minutes.<br />' .
		'<br />Check back this control panel in few minutes.  <br /><br />' .
		'If you didn\'t receive a valid license key in 15 minutes, '. _ACA_LICENSE_TWO);


define( '_ACA_ENTER_NOT_YET', 'Your token has not yet been validated.');
define( '_ACA_UPDATE_CLICK_HERE', 'Pleae visit <a href="http://www.ijoobi.com" target="_blank">www.ijoobi.com</a> to download the newest version.');
define( '_ACA_NOTIF_UPDATE', 'To be notified of new updates enter your email address and click subscribe ');

define('_ACA_THINK_PLUS', 'If you want more out of your mailing system think Plus!');
define('_ACA_THINK_PLUS_1', 'Sequential auto-responders');
define('_ACA_THINK_PLUS_2', 'Schedule the delivery of your newsletter for a predefined date');
define('_ACA_THINK_PLUS_3', 'No more server limitation');
define('_ACA_THINK_PLUS_4', 'and much more...');

//since 1.2.2
define( '_ACA_LIST_ACCESS', 'List Access');
define( '_ACA_INFO_LIST_ACCESS', 'Specify what group of users can view and subscribe to this list');
define( 'ACA_NO_LIST_PERM', 'You don\'t have enough permission to subscribe to this list');

//Archive Configuration
 define('_ACA_MENU_TAB_ARCHIVE', 'Archive');
 define('_ACA_MENU_ARCHIVE_ALL', 'Archive All');

//Archive Lists
 define('_FREQ_OPT_0', 'None');
 define('_FREQ_OPT_1', 'Every Week');
 define('_FREQ_OPT_2', 'Every 2 Weeks');
 define('_FREQ_OPT_3', 'Every Month');
 define('_FREQ_OPT_4', 'Every Quarter');
 define('_FREQ_OPT_5', 'Every Year');
 define('_FREQ_OPT_6', 'Other');

define('_DATE_OPT_1', 'Created date');
define('_DATE_OPT_2', 'Modified date');

define('_ACA_ARCHIVE_TITLE', 'Setting up auto-archive frequency');
define('_ACA_FREQ_TITLE', 'Archive frequency');
define('_ACA_FREQ_TOOL', 'Define how often you want the Archive Manager to arhive your website content.');
define('_ACA_NB_DAYS', 'Number of days');
define('_ACA_NB_DAYS_TOOL', 'This is only for the Other option! Please specify the number of days between each Archive.');
define('_ACA_DATE_TITLE', 'Date type');
define('_ACA_DATE_TOOL', 'Define if the archived should be done on the created date or modified date.');

define('_ACA_MAINTENANCE_TAB', 'Maintenance settings');
define('_ACA_MAINTENANCE_FREQ', 'Maintenance frequency');
define( '_ACA_MAINTENANCE_FREQ_TIPS', 'Specify the frequency at which you want the maintenance routine to run.');
define( '_ACA_CRON_DAYS', 'hour(s)');

define( '_ACA_LIST_NOT_AVAIL', 'There is no list available.');
define( '_ACA_LIST_ADD_TAB', 'Add/Edit');

define( '_ACA_LIST_ACCESS_EDIT', 'Mailing Add/Edit Access');
define( '_ACA_INFO_LIST_ACCESS_EDIT', 'Specify what group of users can add or edit a new mailing for this list');
define( '_ACA_MAILING_NEW_FRONT', 'Createa New Mailing');

define('_ACA_AUTO_ARCHIVE', 'Auto-Archive');
define('_ACA_MENU_ARCHIVE', 'Auto-Archive');

//Extra tags:
define('_ACA_TAGS_ISSUE_NB', '[ISSUENB] = This will be replaced by the issue number of  the newsletter.');
define('_ACA_TAGS_DATE', '[DATE] = This will be replaced by the sent date.');
define('_ACA_TAGS_CB', '[CBTAG:{field_name}] = This will be replaced by the value taken from the Community Builder field: eg. [CBTAG:firstname] ');
define( '_ACA_MAINTENANCE', 'Joobi Care');

define('_ACA_THINK_PRO', 'When you have professional needs, you use professional components!');
define('_ACA_THINK_PRO_1', 'Smart-Newsletters');
define('_ACA_THINK_PRO_2', 'Define access level for your list');
define('_ACA_THINK_PRO_3', 'Define who can edit/add mailings');
define('_ACA_THINK_PRO_4', 'More tags: add your CB fields');
define('_ACA_THINK_PRO_5', 'Joomla contents Auto-archive');
define('_ACA_THINK_PRO_6', 'Database optimization');

define('_ACA_LIC_NOT_YET', 'Your license is not yet valid.  Please check the license Tab in the configuration panel.');
define('_ACA_PLEASE_LIC_GREEN', 'Make sure to provide the green information at the top of the tab to our support team.');

define('_ACA_FOLLOW_LINK', 'Get Your License');
define( '_ACA_FOLLOW_LINK_TWO', 'You can get your license by entering the token number and site URL (which is highlighted in green at the top of this page) in the License form. ');
define( '_ACA_ENTER_TOKEN_TIPS2', ' Then click on Apply button in the top right menu.');
define( '_ACA_ENTER_LIC_NB', 'Enter your License');
define( '_ACA_UPGRADE_LICENSE', 'Upgrade Your License');
define( '_ACA_UPGRADE_LICENSE_TIPS', 'If you received a token to upgrade your license please enter it here, click Apply and proceed to number <b>2</b> to get your new license number.');

define( '_ACA_MAIL_FORMAT', 'Encoding format');
define( '_ACA_MAIL_FORMAT_TIPS', 'What format do you want to use for encoding your mailings, Text only or MIME');
define( '_ACA_ACAJOOM_CRON_DESC_ALT', 'If you do not have access to a cron task manager on your website, you can use the Free jCron component to create a cron task from your website.');

//since 1.3.1
define('_ACA_SHOW_AUTHOR', 'Show Author\'s Name');
define('_ACA_SHOW_AUTHOR_TIPS', 'Select Yes if you want to add the name of the author when you add an article in the Mailing');

//since 1.3.5
define('_ACA_REGWARN_NAME', 'Navnet ditt.');
define('_ACA_REGWARN_MAIL', 'Gyldig e-postadresse.');

//since 1.5.6
define('_ACA_ADDEMAILREDLINK_TIPS', 'If you select Yes, the e-mail of the user will be added as a parameter at the end of your redirect URL (the redirect link for your module or for an external Acajoom form).<br/>That can be usefull if you want to execute a special script in your redirect page.');
define('_ACA_ADDEMAILREDLINK', 'Add e-mail to the redirect link');

//since 1.6.3
define('_ACA_ITEMID', 'ItemId');
define('_ACA_ITEMID_TIPS', 'This ItemId will be added to your Acajoom links.');

//since 1.6.5
define('_ACA_SHOW_JCALPRO', 'jCalPRO');
define('_ACA_SHOW_JCALPRO_TIPS', 'Show the integration tab for jCalPRO <br/>(only if jCalPRO is installed on your website!)');
define('_ACA_JCALTAGS_TITLE', 'jCalPRO Tag:');
define('_ACA_JCALTAGS_TITLE_TIPS', 'Copy and paste this tag into the mailing where you want to have the event to be placed.');
define('_ACA_JCALTAGS_DESC', 'Description:');
define('_ACA_JCALTAGS_DESC_TIPS', 'Select Yes if you want to insert the description of the event');
define('_ACA_JCALTAGS_START', 'Start date:');
define('_ACA_JCALTAGS_START_TIPS', 'Select Yes if you want to insert the start date of the event');
define('_ACA_JCALTAGS_READMORE', 'Read more:');
define('_ACA_JCALTAGS_READMORE_TIPS', 'Select Yes if you want to insert a <b>read more link</b> for this event');
define('_ACA_REDIRECTCONFIRMATION', 'Redirect URL');
define('_ACA_REDIRECTCONFIRMATION_TIPS', 'If you require a confirmation e-mail, the user will be confirmed and redirected to this URL if he clicks on the confirmation link.');

//since 2.0.0 compatibility with Joomla 1.5
if(!defined('_CMN_SAVE') and defined('CMN_SAVE')) define('_CMN_SAVE',CMN_SAVE);
if(!defined('_CMN_SAVE')) define('_CMN_SAVE','Lagre');
if(!defined('_NO_ACCOUNT')) define('_NO_ACCOUNT','Ingen konto ennå?');
if(!defined('_CREATE_ACCOUNT')) define('_CREATE_ACCOUNT','Registrer');
if(!defined('_NOT_AUTH')) define('_NOT_AUTH','Du har ikke tilgang til dette innholdet.');

//since 3.0.0
define('_ACA_DISABLETOOLTIP', 'Disable Tooltip');
define('_ACA_DISABLETOOLTIP_TIPS', 'Disable the tooltip on the frontend');
define('_ACA_MINISENDMAIL', 'Use Mini SendMail');
define('_ACA_MINISENDMAIL_TIPS', 'If your server use Mini SendMail, select this option to don\'t add the name of the user in the header of the e-mail');

//Since 3.1.5
define('_ACA_READMORE','Les mer ...');
define('_ACA_VIEWARCHIVE','Klikk her');

//since 4.0.0
define('_ACA_SHOW_JLINKS','Lenkesporing');
define('_ACA_SHOW_JLINKS_TIPS','Enables the integration with jLinks to be able to do link tracking for each links in the newsletter.');

//since 4.1.0
define( '_ACA_MAIL_ENCODING', 'E-postkoding' );
define( '_ACA_MAIL_ENCODING_TIPS', 'Hvilken tegnkoding ønsker du å bruke, UTF-8 (anbefalt) eller ISO-8859-2' );
define( '_ACA_COPY_SUBJECT', 'Kopier emne' );
