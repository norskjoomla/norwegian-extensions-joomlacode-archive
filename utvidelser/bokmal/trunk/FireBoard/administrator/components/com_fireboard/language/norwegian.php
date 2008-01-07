<?php
/**
* @version $Id$
* FireBoard Component
* @package FireBoard
* @Copyright (C) 2006 - 2007 Best Of Joomla All rights reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.bestofjoomla.com
*
* Based on Joomlaboard Component
* @copyright (C) 2000 - 2004 TSMF / Jan de Graaff / All Rights Reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @author TSMF & Jan de Graaff
*
*            Language: Norwegian
*         For version: 1.0.4
*            Encoding: UTF-8
*          Translator:  Birger Kvam(Basert p� Birger J. Nord�lums ver., Supplements by Gunnar Holmstad and Kristian Wengen))
*              E-mail: birg@birgweb.com
* Translation version: FB1.0.3-1.1
**/

// Dont allow direct linking
defined ('_VALID_MOS') or die('Direct Access to this location is not allowed.');

// 1.0.4
DEFINE('_FB_COPY_FILE', 'Kopierer "%src%" til "%dst%"...');
DEFINE('_FB_COPY_OK', 'OK');
DEFINE('_FB_CSS_SAVE', 'Saving css file should be here...file="%file%"');
DEFINE('_FB_UP_ATT_10', 'Attachment table successfully upgraded to the latest 1.0.x series structure!');
DEFINE('_FB_UP_ATT_10_MSG', 'Attachments in messages table successfully upgraded to the latest 1.0.x series structure!');
DEFINE('_FB_TOPIC_MOVED', '---');
DEFINE('_FB_TOPIC_MOVED_LONG', '------------');
DEFINE('_FB_POST_DEL_ERR_CHILD', 'Could not promote children in post hierarchy. Nothing deleted.');
DEFINE('_FB_POST_DEL_ERR_MSG', 'Could not delete the post(s) - nothing else deleted');
DEFINE('_FB_POST_DEL_ERR_TXT', 'Could not delete the texts of the post(s). Update the database manually (mesid=%id%).');
DEFINE('_FB_POST_DEL_ERR_USR', 'Everything deleted, but failed to update user post stats!');
DEFINE('_FB_POST_MOV_ERR_DB', "Severe database error. Update your database manually so the replies to the topic are matched to the new forum as well");
DEFINE('_FB_UNIST_SUCCESS', "FireBoard component was successfully uninstalled!");
DEFINE('_FB_PDF_VERSION', 'FireBoard Forum Component version: %version%');
DEFINE('_FB_PDF_DATE', 'Generated: %date%');
DEFINE('_FB_SEARCH_NOFORUM', 'No forums to search in.');

DEFINE('_FB_ERRORADDUSERS', 'Error adding users:');
DEFINE('_FB_USERSSYNCDELETED', 'Users syncronized; Deleted:');
DEFINE('_FB_USERSSYNCADD', ', add:');
DEFINE('_FB_SYNCUSERPROFILES', 'user profiles.');
DEFINE('_FB_NOPROFILESFORSYNC', 'No profiles found eligible for syncronizing.');
DEFINE('_FB_SYNC_USERS', 'Syncronize Users');
DEFINE('_FB_SYNC_USERS_DESC', 'Sync FireBoard user table with Joomla! user table');
DEFINE('_FB_A_MAIL_ADMIN', 'Email Administrators');
DEFINE('_FB_A_MAIL_ADMIN_DESC',
    'Set to &quot;Yes&quot; if you want email notifications on each new post sent to the enabled system administrator(s).');
DEFINE('_FB_RANKS_EDIT', 'Edit Rank');
DEFINE('_FB_USER_HIDEEMAIL', 'Skjul e-post');
DEFINE('_FB_DT_DATE_FMT','%d.%m.%Y');
DEFINE('_FB_DT_TIME_FMT','%H:%M');
DEFINE('_FB_DT_DATETIME_FMT','%d.%m.%Y %H:%M');
DEFINE('_FB_DT_LDAY_SUN', 'S�ndag');
DEFINE('_FB_DT_LDAY_MON', 'Mandag');
DEFINE('_FB_DT_LDAY_TUE', 'Tirsdag');
DEFINE('_FB_DT_LDAY_WED', 'Onsdag');
DEFINE('_FB_DT_LDAY_THU', 'Torsdag');
DEFINE('_FB_DT_LDAY_FRI', 'Fredag');
DEFINE('_FB_DT_LDAY_SAT', 'L�rdag');
DEFINE('_FB_DT_DAY_SUN', 'S�n');
DEFINE('_FB_DT_DAY_MON', 'Man');
DEFINE('_FB_DT_DAY_TUE', 'Tir');
DEFINE('_FB_DT_DAY_WED', 'Ons');
DEFINE('_FB_DT_DAY_THU', 'Tor');
DEFINE('_FB_DT_DAY_FRI', 'Fre');
DEFINE('_FB_DT_DAY_SAT', 'L�r');
DEFINE('_FB_DT_LMON_JAN', 'Januar');
DEFINE('_FB_DT_LMON_FEB', 'Februar');
DEFINE('_FB_DT_LMON_MAR', 'Mars');
DEFINE('_FB_DT_LMON_APR', 'April');
DEFINE('_FB_DT_LMON_MAY', 'Mai');
DEFINE('_FB_DT_LMON_JUN', 'Juni');
DEFINE('_FB_DT_LMON_JUL', 'Juli');
DEFINE('_FB_DT_LMON_AUG', 'August');
DEFINE('_FB_DT_LMON_SEP', 'September');
DEFINE('_FB_DT_LMON_OCT', 'Oktober');
DEFINE('_FB_DT_LMON_NOV', 'November');
DEFINE('_FB_DT_LMON_DEV', 'Desember');
DEFINE('_FB_DT_MON_JAN', 'Jan');
DEFINE('_FB_DT_MON_FEB', 'Feb');
DEFINE('_FB_DT_MON_MAR', 'Mar');
DEFINE('_FB_DT_MON_APR', 'Apr');
DEFINE('_FB_DT_MON_MAY', 'Mai');
DEFINE('_FB_DT_MON_JUN', 'Jun');
DEFINE('_FB_DT_MON_JUL', 'Jul');
DEFINE('_FB_DT_MON_AUG', 'Aug');
DEFINE('_FB_DT_MON_SEP', 'Sep');
DEFINE('_FB_DT_MON_OCT', 'Oct');
DEFINE('_FB_DT_MON_NOV', 'Nov');
DEFINE('_FB_DT_MON_DEV', 'Des');
DEFINE('_FB_CHILD_BOARD', 'Underforum');
DEFINE('_WHO_ONLINE_GUEST', 'Gjest');
DEFINE('_WHO_ONLINE_MEMBER', 'Medlem');
DEFINE('_FB_IMAGE_PROCESSOR_NONE', 'ingen');
DEFINE('_FB_IMAGE_PROCESSOR', 'Bildebehandler:');
DEFINE('_FB_INSTALL_CLICK_TO_CONTINUE', 'Klikk her for � fortsette ...');
DEFINE('_FB_INSTALL_APPLY', 'Bruk!');
DEFINE('_FB_NO_ACCESS', 'Du har ikke tilgang til dette forumet!');
DEFINE('_FB_TIME_SINCE', '%time% siden');
DEFINE('_FB_DATE_YEARS', '�r');
DEFINE('_FB_DATE_MONTHS', 'm�neder');
DEFINE('_FB_DATE_WEEKS','uker');
DEFINE('_FB_DATE_DAYS', 'dager');
DEFINE('_FB_DATE_HOURS', 'timer');
DEFINE('_FB_DATE_MINUTES', 'minutter');
// 1.0.3
DEFINE('_FB_CONFIRM_REMOVESAMPLEDATA', 'Er du sikker p� at du vil fjerne eksempeldata? Dette kan ikke endres.');
// 1.0.2
DEFINE('_FB_HEADERADD', 'Forumtittel:');
DEFINE('_FB_ADVANCEDDISPINFO', "Forum visning");
DEFINE('_FB_CLASS_SFX', "Forum CSS klasse suffix");
DEFINE('_FB_CLASS_SFXDESC', "CSS suffix lagt til index, showcat, view og tillater ulike design til ulike forum.");
DEFINE('_COM_A_USER_EDIT_TIME', 'Brukers endretid');
DEFINE('_COM_A_USER_EDIT_TIME_DESC', 'Sett til 0 for uendelig tid, eller sett en tid ifra innlegg postet hvor man kan endre innlegg.');

DEFINE('_COM_A_USER_EDIT_TIMEGRACE', 'User Edit Grace Time');
DEFINE('_COM_A_USER_EDIT_TIMEGRACE_DESC', 'Standard 600 [sekunder], tillater
lagring av en modifikasjon opp til 600 sekunder etter endre link forsvinner');
DEFINE('_FB_HELPPAGE','Aktiver hjelpeside');
DEFINE('_FB_HELPPAGE_DESC','Hvis satt til &quot;Ja&quot;,vil en link til hjelpesiden bli vist.');
DEFINE('_FB_HELPPAGE_IN_FB','Hvis hjelp i fireboard');
DEFINE('_FB_HELPPAGE_IN_FB_DESC','Hvis satt til &quot;Ja&quot;, en hjelpetekst vil bli inkludert i forumet mens lenken til ekstern hjelp vil ikke fungerer. <b>Notis:</b> Du burde legge til "Help Content ID" .');
DEFINE('_FB_HELPPAGE_CID','Help Content ID');
DEFINE('_FB_HELPPAGE_CID_DESC','Du burde sette <b>"JA"</b> "Vis hjelp i fireboard" konifgurasjon.');
DEFINE('_FB_HELPPAGE_LINK',' Hjelpeside eksterne lenke');
DEFINE('_FB_HELPPAGE_LINK_DESC','Hvis du viser Hjelpeside eksterne lenke, vennligst sett til <b>"NEI"</b> "Vis hjelp i fireboard" konifgurasjon.');
DEFINE('_FB_RULESPAGE','Aktiver regelside');
DEFINE('_FB_RULESPAGE_DESC','Hvis satt til &quot;Ja&quot;, en lenke til forumregler vil bli vist p� forsiden.');
DEFINE('_FB_RULESPAGE_IN_FB','Hvis regler i fireboard');
DEFINE('_FB_RULESPAGE_IN_FB_DESC','Hvis satt til &quot;Ja&quot; regler vil bli limt inn i forumet, og lenken til en ekstern regelside vil bli deaktivert. <b>Notis:</b> Du burde legge til "Rules Content ID" .');
DEFINE('_FB_RULESPAGE_CID','Rules Content ID');
DEFINE('_FB_RULESPAGE_CID_DESC','Du burde sette <b>"JA"</b> "Vis regler i fireboard" konifgurasjon.');
DEFINE('_FB_RULESPAGE_LINK',' Ekstern regelside lenke');
DEFINE('_FB_RULESPAGE_LINK_DESC','Hvis du har lenke til ekstern regelside, vennligst sett til <b>"JA"</b> "Vis regelside i fireboard" setting.');
DEFINE('_FB_AVATAR_GDIMAGE_NOT','GD Library er ikke funnet');
DEFINE('_FB_AVATAR_GDIMAGE_NOT','GD2 Library er ikke funnet');
DEFINE('_FB_GD_INSTALLED','GD er tilgjengelig ');
DEFINE('_FB_GD_NO_VERSION','Kan ikke fastsl� GD versjon');
DEFINE('_FB_GD_NOT_INSTALLED','GD er ikke installert, du kan f� mer info ');
DEFINE('_FB_AVATAR_SMALL_HEIGHT','Lite bilde h�yde :');
DEFINE('_FB_AVATAR_SMALL_WIDTH','Lite bilde h�yde :');
DEFINE('_FB_AVATAR_MEDIUM_HEIGHT','Medium bilde h�yde :');
DEFINE('_FB_AVATAR_MEDUIM_WIDTH','Medium bilde h�yde :');
DEFINE('_FB_AVATAR_LARGE_HEIGHT','Stort bilde h�yde :');
DEFINE('_FB_AVATAR_LARGE_WIDTH','Stort bilde h�yde :');
DEFINE('_FB_AVATAR_QUALITY','Avatar kvalitet');
DEFINE('_FB_WELCOME','Velkommen til FireBoard');
DEFINE('_FB_WELCOME_DESC','Thank you for choosing FireBoard as your board solution. This screen will give you a quick overview of all the various statistics of your board. The links on the left hand side of this screen allow you to control every aspect of your board experience. Each page will have instructions on how to use the tools.');
DEFINE('_FB_STATISTIC','Statistic');
DEFINE('_FB_VALUE','Value');
DEFINE('_GEN_CATEGORY','Kategori');
DEFINE('_GEN_STARTEDBY','Startet av: ');
DEFINE('_GEN_STATS','statistikk');
DEFINE('_STATS_TITLE',' forum - statistikk');
DEFINE('_STATS_GEN_STATS','Generell statistikk');
DEFINE('_STATS_TOTAL_MEMBERS','Medlemmer:');
DEFINE('_STATS_TOTAL_REPLIES','Svar:');
DEFINE('_STATS_TOTAL_TOPICS','Tr�der:');
DEFINE('_STATS_TODAY_TOPICS','Tr�der i dag:');
DEFINE('_STATS_TODAY_REPLIES','Svar i dag:');
DEFINE('_STATS_TOTAL_CATEGORIES','Kategorier:');
DEFINE('_STATS_TOTAL_SECTIONS','Seksjoner:');
DEFINE('_STATS_LATEST_MEMBER','Siste medlem:');
DEFINE('_STATS_YESTERDAY_TOPICS','Tr�der i g�r:');
DEFINE('_STATS_YESTERDAY_REPLIES','Svar i g�r:');
DEFINE('_STATS_POPULAR_PROFILE','10 mest popul�re brukere');
DEFINE('_STATS_TOP_POSTERS','Topp postere');
DEFINE('_STATS_POPULAR_TOPICS','Topp popul�re tr�der');
DEFINE('_COM_A_STATSPAGE','Aktiver statistikk side');
DEFINE('_COM_A_STATSPAGE_DESC','Hvis satt til &quot;Ja&quot;, en lenke vil bli lagt til forumet for � vise statistikk. Denne siden vil vise diverse statistikk om ditt forum. <em>statistikksiden vil alltid v�re tilgjengelig for admin!</em>');
DEFINE('_COM_C_JBSTATS','Forumstatistikk');
DEFINE('_COM_C_JBSTATS_DESC','Forumstatistikk informasjon');
define('_GEN_GENERAL','Generell');
define('_PERM_NO_READ','Du har ikke tilgang til � vise innholdet.');
DEFINE ('_FB_SMILEY_SAVED','Smiley lagret');
DEFINE ('_FB_SMILEY_DELETED','Smiley slettet');
DEFINE ('_FB_CODE_ALLREADY_EXITS','Kode eksisterer allerede');
DEFINE ('_FB_MISSING_PARAMETER','Mangler parametre');
DEFINE ('_FB_RANK_ALLREADY_EXITS','Grad eksisterer allerede');
DEFINE ('_FB_RANK_DELETED','Grad slettet');
DEFINE ('_FB_RANK_SAVED','Grad lagret');
DEFINE ('_FB_DELETE_SELECTED','Slett valgte');
DEFINE ('_FB_MOVE_SELECTED','Flytt valgte');
DEFINE ('_FB_REPORT_LOGGED','IP loggf�rt');
DEFINE ('_FB_GO','G�');
DEFINE('_FB_MAILFULL','Legg ved hele posten i e-posten til abonnenter');
DEFINE('_FB_MAILFULL_DESC','Hvis nei - abonnenter vil kun f� tilsendt tittelen p� tr�den');
DEFINE('_FB_HIDETEXT','Vennligst logg inn for � vise innholdet!');
DEFINE('_BBCODE_HIDE','Skjult tekst: [hide]skjult tekst her[/hide] - skjul tekst for gjester');
DEFINE('_FB_FILEATTACH','Filvedlegg: ');
DEFINE('_FB_FILENAME','Filnavn: ');
DEFINE('_FB_FILESIZE','Filst�rrelse: ');
DEFINE('_FB_MSG_CODE','Kode: ');
DEFINE('_FB_CAPTCHA_ON','Spam beskyttelses system');
DEFINE('_FB_CAPTCHA_DESC','Antispam & antibot CAPTCHA system P�/Av');
DEFINE('_FB_CAPDESC','Tast inn kode');
DEFINE('_FB_CAPERR','Kode er ikke korrekt!');
DEFINE('_FB_COM_A_REPORT', 'Rapporter innlegg');
DEFINE('_FB_COM_A_REPORT_DESC', 'Hvis du vil at brukere kan rapportere innlegg, velg ja.');
DEFINE('_FB_REPORT_MSG', 'Innlegg rapportert');
DEFINE('_FB_REPORT_REASON', 'Grunn');
DEFINE('_FB_REPORT_MESSAGE', 'Din beskjed');
DEFINE('_FB_REPORT_SEND', 'Send rapport');
DEFINE('_FB_REPORT', 'Rapporter til moderator');
DEFINE('_FB_REPORT_RSENDER', 'Rapportsender: ');
DEFINE('_FB_REPORT_RREASON', 'Rapportgrunn: ');
DEFINE('_FB_REPORT_RMESSAGE', 'Rapportbeskjed: ');
DEFINE('_FB_REPORT_POST_POSTER', 'Beskjed forfatter: ');
DEFINE('_FB_REPORT_POST_SUBJECT', 'Beskjed emne: ');
DEFINE('_FB_REPORT_POST_MESSAGE', 'Beskjed: ');
DEFINE('_FB_REPORT_POST_LINK', 'Beskjed lenke: ');
DEFINE('_FB_REPORT_INTRO', 'ble sendt deg en beskjed grunnet');
DEFINE('_FB_REPORT_SUCCESS', 'Rapport ble sendt!');
DEFINE('_FB_EMOTICONS', 'Emoticons');
DEFINE('_FB_EMOTICONS_SMILEY', 'Smiley');
DEFINE('_FB_EMOTICONS_CODE', 'Kode');
DEFINE('_FB_EMOTICONS_URL', 'URL');
DEFINE('_FB_EMOTICONS_EDIT_SMILEY', 'Endre Smiley');
DEFINE('_FB_EMOTICONS_EDIT_SMILIES', 'Endre Smilies');
DEFINE('_FB_EMOTICONS_EMOTICONBAR', 'EmoticonBar');
DEFINE('_FB_EMOTICONS_NEW_SMILEY', 'Ny Smiley');
DEFINE('_FB_EMOTICONS_MORE_SMILIES', 'Flere Smilies');
DEFINE('_FB_EMOTICONS_CLOSE_WINDOW', 'Lukk vindu');
DEFINE('_FB_EMOTICONS_ADDITIONAL_EMOTICONS', 'Additional Emoticons');
DEFINE('_FB_EMOTICONS_PICK_A_SMILEY', 'Velg en smiley');
DEFINE('_FB_MAMBOT_SUPPORT', 'Joomla Mambot Support');
DEFINE('_FB_MAMBOT_SUPPORT_DESC', 'Aktiver Joomla Mambot Support');
DEFINE('_FB_MYPROFILE_PLUGIN_SETTINGS', 'Min Profil Plugin Settings');
DEFINE('_FB_USERNAMECANCHANGE', 'Tilatt endring av brukernavn');
DEFINE('_FB_USERNAMECANCHANGE_DESC', 'Tillatt endring av brukernavn i profilsiden');
DEFINE ('_FB_RECOUNTFORUMS','Tell forumstatistikken p� nytt');
DEFINE ('_FB_RECOUNTFORUMS_DONE','Hele forumstatistikken har blitt telt p� nytt.');
DEFINE ('_FB_EDITING_REASON','�rsak for endring');
DEFINE ('_FB_EDITING_LASTEDIT','Siste endring');
DEFINE ('_FB_BY','Av');
DEFINE ('_FB_REASON','�rsak');
DEFINE('_GEN_GOTOBOTTOM', 'G� til bunnen');
DEFINE('_GEN_GOTOTOP', 'G� til toppen');
DEFINE('_STAT_USER_INFO', 'Brukerinfo');
DEFINE('_USER_SHOWEMAIL', 'Vis e-post');
DEFINE('_USER_SHOWONLINE', 'Vis p�logget');
DEFINE('_FB_HIDDEN_USERS', 'Skjulte brukere');
DEFINE('_FB_SAVE', 'Lagre');
DEFINE('_FB_RESET', 'Reset');
DEFINE('_FB_DEFAULT_GALLERY', 'Standard galleri');
DEFINE('_FB_MYPROFILE_PERSONAL_INFO', 'Personlig info');
DEFINE('_FB_MYPROFILE_SUMMARY', 'Oppsummering');
DEFINE('_FB_MYPROFILE_MYAVATAR', 'Min Avatar');
DEFINE('_FB_MYPROFILE_FORUM_SETTINGS', 'Foruminnstillinger');
DEFINE('_FB_MYPROFILE_LOOK_AND_LAYOUT', 'Visning og mal');
DEFINE('_FB_MYPROFILE_MY_PROFILE_INFO', 'Min Profilinfo');
DEFINE('_FB_MYPROFILE_MY_POSTS', 'Mine innlegg');
DEFINE('_FB_MYPROFILE_MY_SUBSCRIBES', 'Mine abonnementer');
DEFINE('_FB_MYPROFILE_MY_FAVORITES', 'Mine favoritter');
DEFINE('_FB_MYPROFILE_PRIVATE_MESSAGING', 'Private beskjeder');
DEFINE('_FB_MYPROFILE_INBOX', 'Innboks');
DEFINE('_FB_MYPROFILE_NEW_MESSAGE', 'NY beskjed');
DEFINE('_FB_MYPROFILE_OUTBOX', 'Utboks');
DEFINE('_FB_MYPROFILE_TRASH', 'Papirkuv');
DEFINE('_FB_MYPROFILE_SETTINGS', 'Innstillinger');
DEFINE('_FB_MYPROFILE_CONTACTS', 'Kontakter');
DEFINE('_FB_MYPROFILE_BLOCKEDLIST', 'Blokkert liste');
DEFINE('_FB_MYPROFILE_ADDITIONAL_INFO', 'Tilleggsinformasjon');
DEFINE('_FB_MYPROFILE_NAME', 'Navn');
DEFINE('_FB_MYPROFILE_USERNAME', 'Brukernavn');
DEFINE('_FB_MYPROFILE_EMAIL', 'E-post');
DEFINE('_FB_MYPROFILE_USERTYPE', 'Brukertype');
DEFINE('_FB_MYPROFILE_REGISTERDATE', 'Registrert');
DEFINE('_FB_MYPROFILE_LASTVISITDATE', 'Siste bes�ksdato');
DEFINE('_FB_MYPROFILE_POSTS', 'Innlegg');
DEFINE('_FB_MYPROFILE_PROFILEVIEW', 'Profilvisning');
DEFINE('_FB_MYPROFILE_PERSONALTEXT', 'Personlig tekst');
DEFINE('_FB_MYPROFILE_GENDER', 'Kj�nn');
DEFINE('_FB_MYPROFILE_BIRTHDATE', 'Bursdag');
DEFINE('_FB_MYPROFILE_BIRTHDATE_DESC', '�r (YYYY) - M�ned (MM) - Dag (DD)');
DEFINE('_FB_MYPROFILE_LOCATION', 'Sted');
DEFINE('_FB_MYPROFILE_ICQ', 'ICQ');
DEFINE('_FB_MYPROFILE_ICQ_DESC', 'Dette er ditt ICQ nummer.');
DEFINE('_FB_MYPROFILE_AIM', 'AIM');
DEFINE('_FB_MYPROFILE_AIM_DESC', 'Dette er ditt AOL Instant Messenger kallenavn.');
DEFINE('_FB_MYPROFILE_YIM', 'YIM');
DEFINE('_FB_MYPROFILE_YIM_DESC', 'Dette er ditt Yahoo! Instant Messenger kallenavn.');
DEFINE('_FB_MYPROFILE_SKYPE', 'SKYPE');
DEFINE('_FB_MYPROFILE_SKYPE_DESC', 'Dette er din Skype handle.');
DEFINE('_FB_MYPROFILE_GTALK', 'GTALK');
DEFINE('_FB_MYPROFILE_GTALK_DESC', 'Dette er ditt Gtalk kallenavn.');
DEFINE('_FB_MYPROFILE_WEBSITE', 'Nettside');
DEFINE('_FB_MYPROFILE_WEBSITE_NAME', 'Nettside navn');
DEFINE('_FB_MYPROFILE_WEBSITE_NAME_DESC', 'Eksempel: Best of Joomla!');
DEFINE('_FB_MYPROFILE_WEBSITE_URL', 'Website URL');
DEFINE('_FB_MYPROFILE_WEBSITE_URL_DESC', 'Eksempel: www.bestofjoomla.com');
DEFINE('_FB_MYPROFILE_MSN', 'MSN');
DEFINE('_FB_MYPROFILE_MSN_DESC', 'Din MSN messenger e-post adresse.');
DEFINE('_FB_MYPROFILE_SIGNATURE', 'Signatur');
DEFINE('_FB_MYPROFILE_MALE', 'Mann');
DEFINE('_FB_MYPROFILE_FEMALE', 'Kvinne');
DEFINE('_FB_BULKMSG_DELETED', 'Innlegg ble slettet med suksess');
DEFINE('_FB_DATE_YEAR', '�r');
DEFINE('_FB_DATE_MONTH', 'M�ned');
DEFINE('_FB_DATE_WEEK','Uke');
DEFINE('_FB_DATE_DAY', 'Dag');
DEFINE('_FB_DATE_HOUR', 'Time');
DEFINE('_FB_DATE_MINUTE', 'Minutter');
DEFINE('_FB_IN_FORUM', ' i Forum: ');
DEFINE('_FB_FORUM_AT', ' Forum ved: ');
DEFINE('_FB_QMESSAGE_NOTE', 'Vennligst not�r, selv om det ikke vises noen boardkode eller smiley knapper, er de fortsatt brukbare');

// 1.0.1
DEFINE ('_FB_FORUMTOOLS','Forumverkt�y');

//userlist
DEFINE ('_FB_USRL_USERLIST','Liste over brukere');
DEFINE ('_FB_USRL_REGISTERED_USERS','%s har <b>%d</b> Registrerte brukere');
DEFINE ('_FB_USRL_SEARCH_ALERT','Skriv inn en verdi for � gj�re et s�k!');
DEFINE ('_FB_USRL_SEARCH','Finn bruker');
DEFINE ('_FB_USRL_SEARCH_BUTTON','S�k');
DEFINE ('_FB_USRL_LIST_ALL','Fullstendig liste');
DEFINE ('_FB_USRL_NAME','Navn');
DEFINE ('_FB_USRL_USERNAME','Brukernavn');
DEFINE ('_FB_USRL_GROUP','Gruppe');
DEFINE ('_FB_USRL_POSTS','Innlegg');
DEFINE ('_FB_USRL_KARMA','Karma');
DEFINE ('_FB_USRL_HITS','Treff');
DEFINE ('_FB_USRL_EMAIL','Epost');
DEFINE ('_FB_USRL_USERTYPE','Brukertype');
DEFINE ('_FB_USRL_JOIN_DATE','Innmeldingsdato');
DEFINE ('_FB_USRL_LAST_LOGIN','Siste innlogging');
DEFINE ('_FB_USRL_NEVER','Aldri');
DEFINE ('_FB_USRL_ONLINE','Status');
DEFINE ('_FB_USRL_AVATAR','Bilde');
DEFINE ('_FB_USRL_ASC','Stigende');
DEFINE ('_FB_USRL_DESC','Synkende');
DEFINE ('_FB_USRL_DISPLAY_NR','Vis');
DEFINE ('_FB_USRL_DATE_FORMAT','%d.%m.%Y');

DEFINE('_FB_ADMIN_CONFIG_PLUGINS','Plugins');
DEFINE('_FB_ADMIN_CONFIG_USERLIST','Brukerliste');
DEFINE('_FB_ADMIN_CONFIG_USERLIST_ROWS_DESC','Antall rader i brukerliste');
DEFINE('_FB_ADMIN_CONFIG_USERLIST_ROWS','Antall rader i brukerliste');
DEFINE('_FB_ADMIN_CONFIG_USERLIST_USERONLINE','Online Status');
DEFINE('_FB_ADMIN_CONFIG_USERLIST_USERONLINE_DESC','Vis brukernes p�loggingsstatus');

DEFINE('_FB_ADMIN_CONFIG_USERLIST_AVATAR','Vis Avatar');
DEFINE('_FB_ADMIN_CONFIG_USERLIST_USERLIST_AVATAR_DESC','');
DEFINE('_FB_ADMIN_CONFIG_USERLIST_NAME','Vis virkelige navn');
DEFINE('_FB_ADMIN_CONFIG_USERLIST_name_DESC','');
DEFINE('_FB_ADMIN_CONFIG_USERLIST_USERNAME','Vis brukernavn');
DEFINE('_FB_ADMIN_CONFIG_USERLIST_USERNAME_DESC','');
DEFINE('_FB_ADMIN_CONFIG_USERLIST_GROUP','Vis brukergruppe');
DEFINE('_FB_ADMIN_CONFIG_USERLIST_GROUP_DESC','');
DEFINE('_FB_ADMIN_CONFIG_USERLIST_POSTS','Vis antall innlegg');
DEFINE('_FB_ADMIN_CONFIG_USERLIST_POSTS_DESC','');
DEFINE('_FB_ADMIN_CONFIG_USERLIST_KARMA','Vis Karma');
DEFINE('_FB_ADMIN_CONFIG_USERLIST_KARMA_DESC','');
DEFINE('_FB_ADMIN_CONFIG_USERLIST_EMAIL','Vis epost');
DEFINE('_FB_ADMIN_CONFIG_USERLIST_EMAIL_DESC','');
DEFINE('_FB_ADMIN_CONFIG_USERLIST_USERTYPE','Vis brukertype');
DEFINE('_FB_ADMIN_CONFIG_USERLIST_USERTYPE_DESC','');
DEFINE('_FB_ADMIN_CONFIG_USERLIST_JOINDATE','Vis innmeldingsdato');
DEFINE('_FB_ADMIN_CONFIG_USERLIST_JOINDATE_DESC','');
DEFINE('_FB_ADMIN_CONFIG_USERLIST_LASTVISITDATE','Vis siste bes�ksdato');
DEFINE('_FB_ADMIN_CONFIG_USERLIST_LASTVISITDATE_DESC','');
DEFINE('_FB_ADMIN_CONFIG_USERLIST_HITS','Vis profiltreff');
DEFINE('_FB_ADMIN_CONFIG_USERLIST_HITS_DESC','');
DEFINE('_FB_DBWIZ', 'Databasevizard');
DEFINE('_FB_DBMETHOD', 'Velg hvilken metode du vil bruke for � ferdigstille installasjonen:');
DEFINE('_FB_DBCLEAN', 'Ren installasjon');
DEFINE('_FB_DBUPGRADE', 'Oppgrader fra Joomlaboard');
DEFINE('_FB_TOPLEVEL', 'Toppniv� kategori');
DEFINE('_FB_REGISTERED', 'Registrert');
DEFINE('_FB_PUBLICBACKEND', '�pen backend');
DEFINE('_FB_SELECTANITEMTO', 'Velg en for �');
DEFINE('_FB_ERRORSUBS', 'Noe gikk galt n�r du slettet meldingene og abbonentene');
DEFINE('_FB_WARNING', 'Advarsel...');
DEFINE('_FB_CHMOD1', 'Du m� chmodde denne til 766 for � oppdatere filen.');
DEFINE('_FB_YOURCONFIGFILEIS', 'Din config fil er');
DEFINE('_FB_FIREBOARD', 'Fireboard');
DEFINE('_FB_CLEXUS', 'Clexus PM');
DEFINE('_FB_CB', 'Community Builder');
DEFINE('_FB_MYPMS', 'myPMS II Open Source');
DEFINE('_FB_UDDEIM', 'Uddeim');
DEFINE('_FB_JIM', 'JIM');
DEFINE('_FB_MISSUS', 'Missus');
DEFINE('_FB_SELECTTEMPLATE', 'Velg Malside');
DEFINE('_FB_CFNW', 'FATAL FEIL: Du kan ikke skrive til Config filen');
DEFINE('_FB_CFS', 'Konfigurasjonsfil er lagret');
DEFINE('_FB_CFCNBO', 'FATAL FEIL: Filen kunne ikke �pnes.');
DEFINE('_FB_TFINW', 'Du kan ikke skrive til denne filen.');
DEFINE('_FB_FBCFS', 'Fireboard CSS filen er lagret.');
DEFINE('_FB_SELECTMODTO', 'Velg en moderator for �');
DEFINE('_FB_CHOOSEFORUMTOPRUNE', 'Du m� velge et forum for � rydde opp (prune)!');
DEFINE('_FB_DELMSGERROR', 'Sletting av meldinger mislyktes:');
DEFINE('_FB_DELMSGERROR1', 'Sletting av meldingstekst mislyktes:');
DEFINE('_FB_CLEARSUBSFAIL', 'Sletting av abbonenter mislyktes:');
DEFINE('_FB_FORUMPRUNEDFOR', 'Forum ryddet (pruned) for');
DEFINE('_FB_PRUNEDAYS', 'dager');
DEFINE('_FB_PRUNEDELETED', 'Slettet:');
DEFINE('_FB_PRUNETHREADS', 'tr�der');
DEFINE('_FB_ERRORPRUNEUSERS', 'Feil ved rydding (pruning) av brukere:');
DEFINE('_FB_USERSPRUNEDDELETED', 'Brukere oppryddet (pruned); Slettet:');
DEFINE('_FB_PRUNEUSERPROFILES', 'brukerprofiler');
DEFINE('_FB_NOPROFILESFORPRUNNING', 'Ingen profiler tilfredsstilte kravet til opprydding (pruning).');
DEFINE('_FB_TABLESUPGRADED', 'Fireboardtabeller er oppgradert til versjon');
DEFINE('_FB_FORUMCATEGORY', 'Forumkategori');
DEFINE('_FB_SAMPLWARN1', '-- Forsikre deg om at du laster inn eksempeldata i en tom fireboardtabell. Hvis du har lagt inn noe i tabellene vil du ikke kunne installere eksempeldata!');
DEFINE('_FB_FORUM1', 'Forum 1');
DEFINE('_FB_SAMPLEPOST1', 'Eksempelinnlegg 1');
DEFINE('_FB_SAMPLEFORUM11', 'Eksempelforum 1\r\n');
DEFINE('_FB_SAMPLEPOST11', '[b][size=4][color=#FF6600]Eksempelinnlegg[/color][/size][/b]\nGratulerer med ditt nye forum!\n\n[url=http://bestofjoomla.com]- Best of Joomla[/url]');
DEFINE('_FB_SAMPLESUCCESS', 'Eksempeldata er installert');
DEFINE('_FB_SAMPLEREMOVED', 'Eksempeldata er fjernet');
DEFINE('_FB_CBADDED', 'Community Builder profil lagt til');
DEFINE('_FB_IMGDELETED', 'Bilde slettet');
DEFINE('_FB_FILEDELETED', 'Fil slettet');
DEFINE('_FB_NOPARENT', 'Ingen foreldre');
DEFINE('_FB_DIRCOPERR', 'Feil: fil');
DEFINE('_FB_DIRCOPERR1', 'kunne ikke kopieres!\n');
DEFINE('_FB_INSTALL1', '<strong>Fireboard Forum</strong> Komponent <em>til Joomla! CMS</em> <br />&copy; 2006 - 2007 av Best Of Joomla<br>All rights reserved.');
DEFINE('_FB_INSTALL2', 'Overflytting/Installasjon :</code></strong><br /><br /><font color="red"><b>vellykket');
// added by aliyar 
DEFINE('_FB_FORUMPRF_TITLE', 'Profilinstillinger');
DEFINE('_FB_FORUMPRF', 'Profil');
DEFINE('_FB_FORUMPRRDESC', 'Hvis du har Clexus PM eller Community Builder installert kan du konfigurere Fireboard til � bruke deres brukerprofil.');
DEFINE('_FB_USERPROFILE_PROFILE', 'Profil');
DEFINE('_FB_USERPROFILE_PROFILEHITS', '<b>Profilvisning</b>');
DEFINE('_FB_USERPROFILE_MESSAGES', 'Alle forummeldinger');
DEFINE('_FB_USERPROFILE_TOPICS', 'Emne');
DEFINE('_FB_USERPROFILE_STARTBY', 'Startet av');
DEFINE('_FB_USERPROFILE_CATEGORIES', 'Kategorier');
DEFINE('_FB_USERPROFILE_DATE', 'Dato');
DEFINE('_FB_USERPROFILE_HITS', 'Treff');
DEFINE('_FB_USERPROFILE_NOFORUMPOSTS', 'Ingen innlegg');
DEFINE('_FB_TOTALFAVORITE', 'Foretrukket:  ');
DEFINE('_FB_SHOW_CHILD_CATEGORY_COLON', 'Antall kolonner i underforum  ');
DEFINE('_FB_SHOW_CHILD_CATEGORY_COLONDESC', 'Antall kolonner i underforum, formattering under hovedkategorien ');
DEFINE('_FB_SUBSCRIPTIONSCHECKED', 'Abonnement p� innlegg valgt');
DEFINE('_FB_SUBSCRIPTIONSCHECKED_DESC', 'Velg &quot;Ja&quot; hvis du �nsker at Abonnement p� innlegg boks alltid skal v�re valgt');
// Errors (Re-integration from Joomlaboard 1.2)
DEFINE('_FB_ERROR1', 'Kategori / Forum m� ha et navn');
// Forum Configuration (New in Fireboard)
DEFINE('_FB_SHOWSTATS', 'Vis statistikk');
DEFINE('_FB_SHOWSTATSDESC', 'Hvis du vil vise statistikk, velg ja');
DEFINE('_FB_SHOWWHOIS', 'Hvis hvem som er online');
DEFINE('_FB_SHOWWHOISDESC', 'Hvis du �nsker � vise hvem som er online, velg ja');
DEFINE('_FB_STATSGENERAL', 'Vis generell statistikk');
DEFINE('_FB_STATSGENERALDESC', 'Hvis du vil vise generell statistikk, velg ja');
DEFINE('_FB_USERSTATS', 'statistikk popul�re brukere');
DEFINE('_FB_USERSTATSDESC', 'Hvis du vil vise popul�rer brukere statistikk, velg ja');
DEFINE('_FB_USERNUM', 'Antall popul�re brukere');
DEFINE('_FB_USERPOPULAR', 'Vis statistikk for popul�re brukere');
DEFINE('_FB_USERPOPULARDESC', 'Hvis du vil vise popul�re emner, velg ja');
DEFINE('_FB_NUMPOP', 'Antall popul�re emner');
DEFINE('_FB_INFORMATION',
    'Best of Joomla team is proud to announce the release of Fireboard 1.0.0. It is a powerful and stylish forum component for a well deserved content management system, Joomla!. It is initially based on the hard work of Joomlaboard team and most of our praises goes to their team.Some of the main features of Fireboard can be listed as below (in addition to JB&#39;s current features):<br /><br /><ul><li>A much more designer friendly forum system. It is close to SMF templating system having a simpler structue. With very few steps you can modify the total look of the forum. Thanks goes to the great designers in our team.</li><li>Unlimited subcategory system with better administration backend.</li><li>Faster system and better coding experience for 3rd parties.</li><li>The same<br /></li><li>Profilebox at the top of the forum</li><li>Support for popular PM systems, such as ClexusPM and Uddeim</li><li>Basic plugin system (practical rather than perfec)</li><li>Language-defined icon system.<br /></li><li>Sharing image system of other templates. So, choice between templates and image series is possible</li><li>You can add joomla modules inside the forum template itself. Wanted to have banner inside your forum?</li><li>Favourite threads selection and management</li><li>Forum spotlights and highlights</li><li>Forum announcements and its panel</li><li>Latest messages (Tabbed)</li><li>Statistics at bottom</li><li>Who&#39;s online, on what page?</li><li>Category specific image system</li><li>Enhanced pathway</li><li><strong>Joomlaboard import, SMF in plan to be releaed pretty soon</strong></li><li>RSS, PDF output</li><li>Advanced search (under developement)</li><li>Community builder and Clexus PM profile options</li><li>Avatar management : CB and Clexus PM options<br /></li></ul><br />Please keep in mind that this release is not meant to be used on production sites, even though we have tested it through. We are planning to continue to work on this project, as it is used on our several projects, and we would be pleased if you could join us to bring a bridge-free solution to Joomla! forums.<br /><br />This is a collaborative work of several developers and designers that have kindly participated and made this release come true. Here we thank all of them and wish that you enjoy this release!<br /><br />Best of Joomla! team<br /></td></tr></table>');
DEFINE('_FB_INSTRUCTIONS', 'Instruksjoner');
DEFINE('_FB_FINFO', 'Fireboard Forum Informasjon');
DEFINE('_FB_CSSEDITOR', 'Fireboard Template CSS Editor');
DEFINE('_FB_PATH', 'Sti:');
DEFINE('_FB_CSSERROR', 'V�r obs:CSS Template filen m� ha skriverettigheter for � lagre endringer.');
// User Management
DEFINE('_FB_FUM', 'Fireboard kontrollpanel for brukerprofiler');
DEFINE('_FB_SORTID', 'sorter p� brukerID');
DEFINE('_FB_SORTMOD', 'sorter p� moderatorer');
DEFINE('_FB_SORTNAME', 'sorter p� navn');
DEFINE('_FB_VIEW', 'Vis');
DEFINE('_FB_NOUSERSFOUND', 'Ingen brukerprofiler funnet.');
DEFINE('_FB_ADDMOD', 'Legg moderator til');
DEFINE('_FB_NOMODSAV', 'Ingen mulige moderatorer er funnet. Les \'meldingen\' nedenfor.');
DEFINE('_FB_NOTEUS',
    'MELDING: Kun brukere som har moderatorflagget valg i deres Fireboardprofil vises her. For � legge til en moderator gi en bruker et moderatorflagg g� til  <a href="index2.php?option=com_fireboard&task=profiles">Brukeradministrasjon</a> og s�k etter brukeren du �nsker � legge til som moedrator. Velg s� dennes profil og oppdater den. Moderatorflag kan bare settes av en sideadministrator. ');
DEFINE('_FB_PROFFOR', 'Profil for');
DEFINE('_FB_GENPROF', 'Generelle profilvalg');
DEFINE('_FB_PREFVIEW', 'Foretrukket visningstype:');
DEFINE('_FB_PREFOR', 'Foretrukket meldingssortering:');
DEFINE('_FB_ISMOD', 'er moderator:');
DEFINE('_FB_ISADM', '<strong>Ja</strong> (ikke mulig � endre, denne brukeren er en (super)administrator)');
DEFINE('_FB_COLOR', 'Farge');
DEFINE('_FB_UAVATAR', 'Brukeravatar:');
DEFINE('_FB_NS', 'Ikke valgt');
DEFINE('_FB_DELSIG', ' hak av i boksen for � slette denne signaturen');
DEFINE('_FB_DELAV', ' hak av i boksen for � slette denne avataren');
DEFINE('_FB_SUBFOR', 'Abbonement for');
DEFINE('_FB_NOSUBS', 'Ingen abbonement funnet for denne brukeren');
// Forum Administration (Re-integration from Joomlaboard 1.2)
DEFINE('_FB_BASICS', 'Grunnleggende');
DEFINE('_FB_BASICSFORUM', 'Grunnleggende foruminformasjon');
DEFINE('_FB_PARENT', 'Forelder:');
DEFINE('_FB_PARENTDESC',
    'V�r oppmerksom: For � lage en kategori, velg \'Toppniv� kategori\' som en forelder. En kategori fungerer som en container for forum.<br />Et forum kan  <strong>bare</strong> opprettes innenfor en kategori ved � velge en tidligere opprettet kategori som forelderen for forumet.<br /> Meldinger kan  <strong>IKKE</strong> legges inn i en kategori; kun i forum.');
DEFINE('_FB_BASICSFORUMINFO', 'Forum navn og beskrivelse');
DEFINE('_FB_NAMEADD', 'Navn:');
DEFINE('_FB_DESCRIPTIONADD', 'Beskrivelse:');
DEFINE('_FB_ADVANCEDDESC', 'Avansert forumkonfigurasjon');
DEFINE('_FB_ADVANCEDDESCINFO', 'Forum sikkerhet og tilgang');
DEFINE('_FB_LOCKEDDESC', 'Velg &quot;Ja&quot; hvis du �nsker � l�se dette forumet. Ingen bortsett fra moderatorer og administratorer kan legge til nye emner og svar i et l�st forum (eller flytte innlegg til det).');
DEFINE('_FB_LOCKED1', 'L�st:');
DEFINE('_FB_PUBACC', '�pent tilgangsniv�:');
DEFINE('_FB_PUBACCDESC',
    'For � opprettet et ikke-�pent forum kan du spesifisere hvilket minimums brukerniv� som kan se eller g� inn p� forumet her. Standardinstillingen er at minimum brukerniv� er satt til &quot;Alle&quot;.<br /><b>V�r oppmerksom p�</b>: Hvis du forbeholder en hel kategori til en eller flere grupper vil alle forum i denne kategorien bli skjult for alle som ikke er i disse gruppene. Dette vil skje <b>selv om</b> en eller flere av forumene har et lavere tilgangsniv�! Dette gjelder ogs� for moderatorer; du m� legge en moderator til moderatorlisten hvis den ikke har det n�dvendige gruppeniv�et for � set kategorien. <br /> Dette er uavhengig av om kategorien ikke kan bli moderert, moderatorer kan fortsatt legges til moderatorlisten.');
DEFINE('_FB_CGROUPS', 'Inkluder undergrupper:');
DEFINE('_FB_CGROUPSDESC', 'Skal undergrupper bli gitt tilgang ogs�? Hvis satt til &quot;Nei&quot; tilgang til dette forumet er forbeholdt den valgte gruppen');
DEFINE('_FB_ADMINLEVEL', 'Administrators tilgangsniv�:');
DEFINE('_FB_ADMINLEVELDESC',
    'Hvis du lager et forum med restriksjoner mot �pen tilgang s� kan du her spesifiser et ekstra tilgangsniv� for administrator.<br /> Hvis du forbeholder tilgang til forumet til en spesiell Public Frontend brukergruppe og ikke spesifiserer en �pen backendgruppe her, vil ikke administratorer ha mulighet til � se forumet.');
DEFINE('_FB_ADVANCED', 'Avansert');
DEFINE('_FB_CGROUPS1', 'Inkluderer undergrupper:');
DEFINE('_FB_CGROUPS1DESC', 'Skal undergrupper bli gitt tilgang ogs�? Hvis satt til &quot;Nei &quot; s� er tilgang til dette forumet forbeholdt den valgte gruppen');
DEFINE('_FB_REV', 'Vurder innlegg:');
DEFINE('_FB_REVDESC',
    'Sett til &quot;Ja&quot; hvis du �nsker at innlegg skal vurderes av moderatorer f�r de publiseres. Dette har kun betydning i et moderert forum!<br />Hvis du velger dette uten at noen moderatorer er valgt vil sideadministratoren ha eneansvar for godkjnning/sletting av innlagte innlegg, siden disse vil bli satt \'p� vent\'!');
DEFINE('_FB_MOD_NEW', 'Moderering');
DEFINE('_FB_MODNEWDESC', 'Moderering av forumet og forummoderatorer');
DEFINE('_FB_MOD', 'Moderert:');
DEFINE('_FB_MODDESC',
    'Satt til &quot;Ja&quot; hvis du vil ha mulighet til � tilordne moderatorer til dette forumet.<br /><strong>Merk:</strong> Dette betyr ikke at nye innlegg m� bli satt til vurdert f�r de publiseres!<br /> Du m� velge &quot;Vurdering&quot; for det i fanen &quot;Avansert&quot;.<br /><br /> <strong>OBS:</strong> Etter � ha satt Modererering til &quot;Ja&quot; m� du lagre forumkonfigurasjonenen f�r du f�r mulighet til � legge til moderatorer med den nye knappen.');
DEFINE('_FB_MODHEADER', 'Modereringsinstillinger for dette forumet');
DEFINE('_FB_MODSASSIGNED', 'Moderatorer knyttet til dette forumet');
DEFINE('_FB_NOMODS', 'Det er ingen moderator knyttet til dette forumet');
// Some General Strings (Improvement in Fireboard)
DEFINE('_FB_EDIT', 'Endre');
DEFINE('_FB_ADD', 'Legg til');
// Reorder (Re-integration from Joomlaboard 1.2)
DEFINE('_FB_MOVEUP', 'Flytt opp');
DEFINE('_FB_MOVEDOWN', 'Flytt ned');
// Groups - Integration in Fireboard
DEFINE('_FB_ALLREGISTERED', 'Alle registrerte');
DEFINE('_FB_EVERYBODY', 'Alle');
// Removal of hardcoded strings in admin panel (Re-integration from Joomlaboard 1.2)
DEFINE('_FB_REORDER', 'Omorganiser');
DEFINE('_FB_CHECKEDOUT', 'Sjekk ut');
DEFINE('_FB_ADMINACCESS', 'Admin tilgang');
DEFINE('_FB_PUBLICACCESS', 'Allmenn tilgang');
DEFINE('_FB_PUBLISHED', 'Publisert');
DEFINE('_FB_REVIEW', 'Kommenter');
DEFINE('_FB_MODERATED', 'Endret');
DEFINE('_FB_LOCKED', 'L�st');
DEFINE('_FB_CATFOR', 'Kategori / Forum');
DEFINE('_FB_ADMIN', '&nbsp;Fireboard administrasjon');
DEFINE('_FB_CP', '&nbsp;Fireboard Kontrollpanel');
// Configuration page - Headings (Re-integrated from Joomlaboard 1.2)
DEFINE('_COM_A_AVATAR_INTEGRATION', 'Avatarintegrasjon');
DEFINE('_COM_A_RANKS_SETTINGS', 'Rangering');
DEFINE('_COM_A_RANKING_SETTINGS', 'Rangeringsinstillinger');
DEFINE('_COM_A_AVATAR_SETTINGS', 'Avatarinstillinger');
DEFINE('_COM_A_SECURITY_SETTINGS', 'Sikkerhetsinstillinger');
DEFINE('_COM_A_BASIC_SETTINGS', 'Basisinstillinger');
// FIREBOARD 1.0.0
//
DEFINE('_COM_A_FAVORITES','Tillat favoritter');
DEFINE('_COM_A_FAVORITES_DESC','Velg &quot;Ja&quot; dersom du vil tillate registrerte brukere � legge tr�der i sine favoritter ');
DEFINE('_USER_UNFAVORITE_ALL','Marker boksen for � <b><u>fjerne alle tr�d-favoritter</u></b> (inkludert usynlige tr�der - for probleml�sning)');
DEFINE('_VIEW_FAVORITETXT','Lagre som favoritt ');
DEFINE('_USER_UNFAVORITE_YES','Du har slettet tr�den fra dine favoritter');
DEFINE('_POST_FAVORITED_TOPIC','Favoritt er lagret.');
DEFINE('_VIEW_UNFAVORITETXT','Favoritt');
DEFINE('_VIEW_UNSUBSCRIBETXT','Abonner');
DEFINE('_USER_NOFAVORITES','Ingen favoritter');
DEFINE('_POST_SUCCESS_FAVORITE','Din favoritt er lagret.');
DEFINE('_COM_A_MESSAGES_SEARCH','S�keresultat');
DEFINE('_COM_A_MESSAGES_DESC_SEARCH','Innlegg per side i s�keresultater');
DEFINE('_FB_USE_JOOMLA_STYLE','Bruk joomla-stil?');
DEFINE('_FB_USE_JOOMLA_STYLE_DESC','Velg "Ja" dersom du vil bruke stilsettet fra Joomla. (class: f.eks. sectionheader, sectionentry1 ...) ');
DEFINE('_FB_SHOW_CHILD_CATEGORY_ON_LIST','Vis bilde for underkategori');
DEFINE('_FB_SHOW_CHILD_CATEGORY_ON_LIST_DESC','Velg "Ja" dersom du vil vise et lite ikon for underkategorier i kategorilisten din. ');
DEFINE('_FB_SHOW_ANNOUNCEMENT','Vis kunngj�ring');
DEFINE('_FB_SHOW_ANNOUNCEMENT_DESC','Velg "Ja" dersom du vil vise en boks for kunngj�ringer  p� forumets hovedside.');
DEFINE('_FB_SHOW_AVATAR_ON_CAT','Vis brukerbilde i kategorilister?');
DEFINE('_FB_SHOW_AVATAR_ON_CAT_DESC','Velg "Ja" dersom du vil vise brukerbilder i kategorilister.');
DEFINE('_FB_RECENT_POSTS','Innstillinger for "Siste innlegg"');
DEFINE('_FB_SHOW_LATEST_MESSAGES','"Siste innlegg"');
DEFINE('_FB_SHOW_LATEST_MESSAGES_DESC','Velg "Ja" dersom du vil vise en liste over de siste innleggene i forumet');
DEFINE('_FB_NUMBER_OF_LATEST_MESSAGES','Antall "Siste innlegg"');
DEFINE('_FB_NUMBER_OF_LATEST_MESSAGES_DESC','Antall nye innlegg som skal vises i listen');
DEFINE('_FB_COUNT_PER_PAGE_LATEST_MESSAGES','Antall nye innlegg per tab ');
DEFINE('_FB_COUNT_PER_PAGE_LATEST_MESSAGES_DESC','Antall innlegg per enkelt tab');
DEFINE('_FB_LATEST_CATEGORY','Vis kategori');
DEFINE('_FB_LATEST_CATEGORY_DESC','Spesifikk kategoriID som du kan vise med "Siste innlegg" modulen. F.eks:2,3,7 ');
DEFINE('_FB_SHOW_LATEST_SINGLE_SUBJECT','Vis enkelt tr�d');
DEFINE('_FB_SHOW_LATEST_SINGLE_SUBJECT_DESC','Vis en en enkelt tr�d');
DEFINE('_FB_SHOW_LATEST_REPLY_SUBJECT','Vis svar p� tr�d');
DEFINE('_FB_SHOW_LATEST_REPLY_SUBJECT_DESC','Vis svar p� tr�d (Sv:)');
DEFINE('_FB_LATEST_SUBJECT_LENGTH','Lengde');
DEFINE('_FB_LATEST_SUBJECT_LENGTH_DESC','Hvor mye av innlegget som skal vises');
DEFINE('_FB_SHOW_LATEST_DATE','Vis dato');
DEFINE('_FB_SHOW_LATEST_DATE_DESC','Vis n�r innlegget ble skrevet');
DEFINE('_FB_SHOW_LATEST_HITS','Vis treff');
DEFINE('_FB_SHOW_LATEST_HITS_DESC','Vis hvor mange som har lest innlegget');
DEFINE('_FB_SHOW_AUTHOR','Vis forfatter');
DEFINE('_FB_SHOW_AUTHOR_DESC','1=brukernavn, 2=Faktisk navn, 0=ingen');
DEFINE('_FB_STATS','Innstillinger for forumstatistikk ');
DEFINE('_FB_CATIMAGEPATH','Sti til kategoribilder ');
DEFINE('_FB_CATIMAGEPATH_DESC','Sti til kategoribilder. Hvis du velger "category_images/" vil stien v�re "components/com_fireboard/category_images/');
DEFINE('_FB_ANN_MODID','Kunngj�ring Moderator IDer ');
DEFINE('_FB_ANN_MODID_DESC','Legg til IDer for moderasjon av kunngj�ringer. F.eks: 62,63,73 . Kunngj�ringsmoderatorer kan legge til, redigere, eller slette kunngj�ringer.');
//
DEFINE('_FB_FORUM_TOP','Forumkategorier ');
DEFINE('_FB_CHILD_BOARDS','Underkategorier ');
DEFINE('_FB_QUICKMSG','Raskt svar ');
DEFINE('_FB_THREADS_IN_FORUM','Tr�der i forum ');
DEFINE('_FB_FORUM','Kategorier ');
DEFINE('_FB_SPOTS','S�kelys');
DEFINE('_FB_CANCEL','avbryt');
DEFINE('_FB_TOPIC','TR�D: ');
DEFINE('_FB_POWEREDBY','Foruml�sning : ');
// Time Format
DEFINE('_TIME_TODAY','<b>I dag</b> ');
DEFINE('_TIME_YESTERDAY','<b>I g�r</b> ');
//  STARTS HERE!
DEFINE('_FB_WHO_LATEST_POSTS','Siste innlegg');
DEFINE('_FB_WHO_WHOISONLINE','P�logget n�');
DEFINE('_FB_WHO_MAINPAGE','Forum Hoved');
DEFINE('_FB_GUEST','Gjester');
DEFINE('_FB_PATHWAY_VIEWING','visning');
DEFINE('_FB_ATTACH','Vedlegg');
// Favorite
DEFINE('_FB_FAVORITE','Favoritt');
DEFINE('_USER_FAVORITES','Dine favoritter');
DEFINE('_THREAD_UNFAVORITE','Fjern fra favoritter');
// profilebox
DEFINE('_PROFILEBOX_WELCOME','Velkommen');
DEFINE('_PROFILEBOX_SHOW_LATEST_POSTS','Vis nye innlegg');
DEFINE('_PROFILEBOX_SET_MYAVATAR','Mitt bilde');
DEFINE('_PROFILEBOX_MYPROFILE','Min profil');
DEFINE('_PROFILEBOX_SHOW_MYPOSTS','Vis mine innlegg');
DEFINE('_PROFILEBOX_GUEST','Gjest');
DEFINE('_PROFILEBOX_LOGIN','Logg inn');
DEFINE('_PROFILEBOX_REGISTER','Registrer deg');
DEFINE('_PROFILEBOX_LOGOUT','Logg ut');
DEFINE('_PROFILEBOX_LOST_PASSWORD','Glemt passord?');
DEFINE('_PROFILEBOX_PLEASE','Vennligst');
DEFINE('_PROFILEBOX_OR','eller');
// recentposts
DEFINE('_RECENT_RECENT_POSTS','Siste innlegg');
DEFINE('_RECENT_TOPICS','Tr�d');
DEFINE('_RECENT_AUTHOR','Skrevet av');
DEFINE('_RECENT_CATEGORIES','Kategorier');
DEFINE('_RECENT_DATE','Dato');
DEFINE('_RECENT_HITS','Treff');
// announcement

DEFINE('_ANN_ANNOUNCEMENTS', 'Annonsering');
DEFINE('_ANN_ID','ID');
DEFINE('_ANN_DATE','Dato');
DEFINE('_ANN_TITLE','Tittel');
DEFINE('_ANN_SORTTEXT','Sorter tekst');
DEFINE('_ANN_LONGTEXT','Lang tekst');
DEFINE('_ANN_ORDER','Sorter');
DEFINE('_ANN_PUBLISH','Publiser');
DEFINE('_ANN_PUBLISHED','Publisert');
DEFINE('_ANN_UNPUBLISHED','Ikke publisert');
DEFINE('_ANN_EDIT','Rediger');
DEFINE('_ANN_DELETE','Slett');
DEFINE('_ANN_SUCCESS','Suksess');
DEFINE('_ANN_SAVE','Lagre');
DEFINE('_ANN_YES','Ja');
DEFINE('_ANN_NO','Nei');
DEFINE('_ANN_ADD','Legg til ny');
DEFINE('_ANN_SUCCESS_EDIT','Redigering fullf�rt');
DEFINE('_ANN_SUCCESS_ADD','Innlegg fullf�rt');
DEFINE('_ANN_DELETED','Sletting fullf�rt');
DEFINE('_ANN_ERROR','FEIL');
DEFINE('_ANN_READMORE','Les mer...');
DEFINE('_ANN_CPANEL','Kontrollpanel for kunngj�ringer');
DEFINE('_ANN_SHOWDATE','Vis dato');
// Stats
DEFINE('_STAT_FORUMSTATS','Forumstatistikk');
DEFINE('_STAT_GENERAL_STATS','Generell statistikk');
DEFINE('_STAT_TOTAL_USERS','Brukere totalt');
DEFINE('_STAT_LATEST_MEMBERS','Nyeste medlem');
DEFINE('_STAT_PROFILE_INFO','Se profilinfo');
DEFINE('_STAT_TOTAL_MESSAGES','Innlegg totalt');
DEFINE('_STAT_TOTAL_SUBJECTS','Tr�der totalt');
DEFINE('_STAT_TOTAL_CATEGORIES','Kategorier totalt');
DEFINE('_STAT_TOTAL_SECTIONS','Seksjoner totalt');
DEFINE('_STAT_TODAY_OPEN_THREAD','Lest i dag');
DEFINE('_STAT_YESTERDAY_OPEN_THREAD','Lest i g�r');
DEFINE('_STAT_TODAY_TOTAL_ANSWER','Svar totalt i dag');
DEFINE('_STAT_YESTERDAY_TOTAL_ANSWER','Svar totalt i g�r');
DEFINE('_STAT_VIEW_RECENT_POSTS_ON_FORUM','Vis nye innlegg');
DEFINE('_STAT_MORE_ABOUT_STATS','Mer om statistikken');
DEFINE('_STAT_USERLIST','Liste over brukere');
DEFINE('_STAT_TEAMLIST','Moderatorer');
DEFINE('_STATS_FORUM_STATS','Forumstatistikk');
DEFINE('_STAT_POPULAR','Mest leste');
DEFINE('_STAT_POPULAR_USER_TMSG','brukere (Innlegg totalt) ');
DEFINE('_STAT_POPULAR_USER_KGSG','tr�der ');
DEFINE('_STAT_POPULAR_USER_GSG','Brukere (Profilvisninger totalt) ');
//Team List
DEFINE('_MODLIST_ONLINE','Brukere p�logget');
DEFINE('_MODLIST_OFFLINE','Ikke p�logget');
// Whoisonline
DEFINE('_WHO_WHOIS_ONLINE','Hvem er p�logget');
DEFINE('_WHO_ONLINE_NOW','P�logget:');
DEFINE('_WHO_ONLINE_MEMBERS','medlem(mer)');
DEFINE('_WHO_AND','og');
DEFINE('_WHO_ONLINE_GUESTS','gjest(er)');
DEFINE('_WHO_ONLINE_USER','Bruker');
DEFINE('_WHO_ONLINE_TIME','Tid');
DEFINE('_WHO_ONLINE_FUNC','Kj�r');
// Userlist
DEFINE ('_USRL_USERLIST','Brukerliste');
DEFINE ('_USRL_REGISTERED_USERS','%s har <b>%d</b> registrerte brukere');
DEFINE ('_USRL_SEARCH_ALERT','Vennligst skriv inn s�keord!');
DEFINE ('_USRL_SEARCH','Finn bruker');
DEFINE ('_USRL_SEARCH_BUTTON','S�k');
DEFINE ('_USRL_LIST_ALL','List opp alle');
DEFINE ('_USRL_NAME','Navn');
DEFINE ('_USRL_USERNAME','Brukernavn');
DEFINE ('_USRL_EMAIL','E-post');
DEFINE ('_USRL_USERTYPE','Brukertype');
DEFINE ('_USRL_JOIN_DATE','Registrert dato');
DEFINE ('_USRL_LAST_LOGIN','Sist innlogget');
DEFINE ('_USRL_NEVER','Aldri');
DEFINE ('_USRL_BLOCK','Status');
DEFINE ('_USRL_MYPMS2','Mine private beskjeder');
DEFINE ('_USRL_ASC','Stigende');
DEFINE ('_USRL_DESC','Synkende');
DEFINE ('_USRL_DATE_FORMAT','%d.%m.%Y');
DEFINE ('_USRL_TIME_FORMAT','%H:%M');
DEFINE ('_USRL_USEREXTENDED','Detaljer');
DEFINE ('_USRL_COMPROFILER','Profil');
DEFINE ('_USRL_THUMBNAIL','Foto');
DEFINE ('_USRL_READON','vis');
DEFINE ('_USRL_MYPMSPRO','Clexus PM');
DEFINE ('_USRL_MYPMSPRO_SENDPM','Send PM');
DEFINE ('_USRL_JIM','PM');
DEFINE ('_USRL_UDDEIM','PM');
DEFINE ('_USRL_SEARCHRESULT','S�keresultat for');
DEFINE ('_USRL_STATUS','Status');
DEFINE ('_USRL_LISTSETTINGS','Brukerliste innstillinger');
DEFINE ('_USRL_ERROR','FEIL');

//changed in 1.1.4 stable
DEFINE('_COM_A_PMS_TITLE','Privat meldingskomponent');
DEFINE('_COM_A_COMBUILDER_TITLE','Community Builder');
DEFINE('_FORUM_SEARCH','S�kte etter: %s');
DEFINE('_MODERATION_DELETE_MESSAGE','Er du sikke p� at du vil slette denne meldingen? \n\n MERK: Det er IKKE mulig � gjenopprette slettede meldinger!');
DEFINE('_MODERATION_DELETE_SUCCESS','Innlegg slettet');
DEFINE('_COM_A_RANKING','Rangering');
DEFINE('_COM_A_BOT_REFERENCE','Vis botreferanse kart');
DEFINE('_COM_A_MOSBOT','Aktiver diskusjonsbot');
DEFINE('_PREVIEW','forh�ndsvis');
DEFINE('_COM_A_MOSBOT_TITLE','Diskusjonsbot');
DEFINE('_COM_A_MOSBOT_DESC',
 'Diskusjonsboten gj�r det mulig for dine brukere � diskutere artikler p� nettsidene dine. Artikkelens tittel vil bli brukt som tittel p� tr�den.'
.'<br />Dersom tr�den ikke allerede eksisterer, vil en ny bli opprettet. Dersom tr�den allerede eksisterer, blir brukeren vist til tr�den hvor hun/han kan legge inn sitt innlegg.'
.'<br /><strong>Du m� laste ned og installere diskusjonsboten separat.</strong>'
.'<br />G� til <a href="http://www.bestofjoomla.com">Best of Joomla Sidene</a> for mere informasjon.'
.'<br />Etter installasjonen m� du legge til f�lgende bot-kommando i artiklene dine:'
.'<br />{mos_fb_discuss:<em>catid</em>}'
.'<br /><em>catid</em> er den forumskategorien hvor artiklene skal diskuteres. For � finne den rette catid kan du sjekke i forumet '
.'og finne kategoriens ID i URLen i web-browsern din.'
.'<br />Eksempel: Hvis du vil at artikkelen skal diskuteres i et forum med catID 26, b�r Bot-kommandoen se slik ut: {mos_fb_discuss:26}'
.'<br />Dette kan se vanskelig ut, men det gir deg muligheten til � f� artiklene dine diskutert i et matchende forum.' );

//new in 1.1.4 stable
// search.class.php
DEFINE('_FORUM_SEARCHTITLE','S�k');
DEFINE('_FORUM_SEARCHRESULTS','viser %s av %s resultater.');
// Help, FAQ
DEFINE('_COM_FORUM_HELP','FAQ');
// rules.php
DEFINE('_COM_FORUM_RULES','Regler');
DEFINE('_COM_FORUM_RULES_DESC','<ul><li>Rediger denne filen for � legge inn dine regler joomlaroot/administrator/components/com_fireboard/language/english.php</li><li>Regel 2</li><li>Regel 3</li><li>Regel 4</li><li>...</li></ul>');
//smile.class.php
DEFINE('_COM_BOARDCODE','Forumcode');
// moderate_messages.php
DEFINE('_MODERATION_APPROVE_SUCCESS','Innlegg godkjent');
DEFINE('_MODERATION_DELETE_ERROR','FEIL: Kunne ikke slette innlegg');
DEFINE('_MODERATION_APPROVE_ERROR','FEIL: Kunne ikke godkjenne innlegg');
// listcat.php
DEFINE('_GEN_NOFORUMS','Det er ingen forum i denne kategorien!');
//new in 1.1.3 stable
DEFINE('_POST_GHOST_FAILED','Kunne ikke opprette "sp�kelsestr�d" i gammelt forum!');
DEFINE('_POST_MOVE_GHOST','Legg "sp�kelsesmelding" i gammelt forum');
//new in 1.1 Stable
DEFINE('_GEN_FORUM_JUMP','Bytt kategori');
DEFINE('_COM_A_FORUM_JUMP','Aktiver "Bytt kategori"');
DEFINE('_COM_A_FORUM_JUMP_DESC','Dersom du velger &quot;Ja&quot; vil en nedtrekksmeny hvor du kan velge andre kategorier og raskt bytte kategori.');
//new in 1.1 RC1
DEFINE('_GEN_RULES','Regler');
DEFINE('_COM_A_RULESPAGE','Aktiver regelside');
DEFINE('_COM_A_RULESPAGE_DESC',
	'Dersom du velger &quot;Ja&quot; vil en link til en "regel-side"vises i toppen av forumet. Denne siden kan brukes til regler, eller hva du m�tte �nske. Du kan endre innholdet p� denne siden ved � redigere filen rules.php i mappen /joomla_root/components/com_fireboard. <em>s�rg for at du alltid har en backup av denne filen da den vil bli overskrevet ved oppgradering!</em>');
DEFINE('_MOVED_TOPIC','FLYTTET:');
DEFINE('_COM_A_PDF','Aktiver PDF-oppretting');
DEFINE('_COM_A_PDF_DESC',
	'Velg &quot;Ja&quot; dersom brukerne skal ha mulighet til � laste ned et enkelt PDF dokument som inneholder teksten i tr�den.');
DEFINE('_GEN_PDFA','Klikk her for � opprette et PDF-dokument fra denne tr�den (�pnes i et nytt vindu).');
DEFINE('_GEN_PDF', 'Lag Pdf-fil av tr�den');
//new in 1.0.4 stable
DEFINE('_VIEW_PROFILE','Klikk her for � se brukerens profil');
DEFINE('_VIEW_ADDBUDDY','Klikk her for � legge brukeren til i vennelisten din');
DEFINE('_POST_SUCCESS_POSTED','Ditt innlegg er publisert');
DEFINE('_POST_SUCCESS_VIEW','[ G� tilbake til innlegget ]');
DEFINE('_POST_SUCCESS_FORUM','[ G� tilbake til forumet ]');
DEFINE('_RANK_ADMINISTRATOR','Admin');
DEFINE('_RANK_MODERATOR','Moderator');
DEFINE('_SHOW_LASTVISIT','Siden siste bes�k');
DEFINE('_COM_A_BADWORDS_TITLE','Filter for u�nskede ord');
DEFINE('_COM_A_BADWORDS','Bruk filter for u�nskede ord');
DEFINE('_COM_A_BADWORDS_DESC','Velg &quot;Ja&quot; dersom du vil filtrere bort poster som inneholder ord du har definert i "u�nskede ord" konfigurasjonen. For � bruke denne funksjonen m� du ha "u�nskede ord" komponent installert!');
DEFINE('_COM_A_BADWORDS_NOTICE','* Meldingen/innlegget ble slettet fordi det inneholdt et eller flere ord som vi har definert som u�nsket p� vebsidene v�re *');
DEFINE('_COM_A_COMBUILDER_PROFILE','Opprett "community-builder-forum" profil');
DEFINE('_COM_A_COMBUILDER_PROFILE_DESC',
	'Klikk linken for � opprette de n�dvendige felt i Communety Builder brukerprofil. Etter at de er opprettet kan du fritt flytte dem n�r som helst som administrator, men ikke endre navn eller opsjoner. Hvis du sletter dem fra community builder admin, kan du opprette dem igjen ved � bruke denne linken, for�vrig b�r du unng� � klikke denne linken flere ganger!');
DEFINE('_COM_A_COMBUILDER_PROFILE_CLICK','> Klikk her <');
DEFINE('_COM_A_COMBUILDER','Community Builder Brukerprofiler');
DEFINE('_COM_A_COMBUILDER_DESC',
	'Ved � velge &quot;Ja&quot; aktiveres integrasjonen med Community Builder komponenten (www.joomlapolis.com). Alle profil-funksjoner i fireboard forumet vil bli behandlet av Community Builder, ogs� linker til profiler vil referere til brukerprofilen i Community Builder. Dette valget vil overstyre Clexus PM profil-innstillinger dersom begge er satt til &quot;Ja&quot;. Husk � legge til de n�dvendige endringene i innstillingene  for Community Builder database ved � bruke valget nedenfor.');
DEFINE('_COM_A_AVATAR_SRC','Bruk bilde fra');
DEFINE('_COM_A_AVATAR_SRC_DESC',
	'Hvis du har Clexus PM eller Community Builder component installert, kan du konfigurere fireboard til � benytte brukerbildet fra Clexus PM eller Community Builder bruker-profilen. MERK: For Community Builder m� du ha thumbnail opsjonen sl�tt p� fordi forumet bruker thumbnail bruker-bilder, ikke orginalene.');
DEFINE('_COM_A_KARMA','Vis Karma indikator');
DEFINE('_COM_A_KARMA_DESC','Veld &quot;Ja&quot; for � vise brukeren Karma og relaterte knapper (�k / senk) dersom brukerstatistikk er aktivert.');
DEFINE('_COM_A_DISEMOTICONS','Deaktiver emoticons');
DEFINE('_COM_A_DISEMOTICONS_DESC','Velg &quot;Ja&quot; for � deaktivere emoticons (smileys).');
DEFINE('_COM_C_FBCONFIG','fireboard<br/>Konfigurasjon');
DEFINE('_COM_C_FBCONFIGDESC','Konfigurer all funksjonalitet i Fireboard');
DEFINE('_COM_C_FORUM','Forum<br/>Administrasjon');
DEFINE('_COM_C_FORUMDESC','Legg til kategorier/forum, og konfigurer dem');
DEFINE('_COM_C_USER','Bruker<br/>Administrasjon');
DEFINE('_COM_C_USERDESC','Grunnleggende bruker- og brukerprofil-administration');
DEFINE('_COM_C_FILES','Bla gjennom<br/>opplastede filer');
DEFINE('_COM_C_FILESDESC','Bla gjennom, og administrer opplastede filer');
DEFINE('_COM_C_IMAGES','Bla gjennom<br/>opplastede bilder');
DEFINE('_COM_C_IMAGESDESC','Bla gjennom, og administrer opplastede bilder');
DEFINE('_COM_C_CSS','Rediger<br/>CSS Filen');
DEFINE('_COM_C_CSSDESC','Optimer fireboard\'s utseende og f�lelse');
DEFINE('_COM_C_SUPPORT','St�tte og hjelp<br/>Web-sted');
DEFINE('_COM_C_SUPPORTDESC','Koble til Best of Joomla webside (nytt vindu)');
DEFINE('_COM_C_PRUNETAB','Rydd opp i<br/>Forum');
DEFINE('_COM_C_PRUNETABDESC','Fjern gamle tr�der (konfigurerbar)');
DEFINE('_COM_C_PRUNEUSERS','Rydd opp i<br/>Brukere');
DEFINE('_COM_C_PRUNEUSERSDESC','Synkroniser fireboards brukertabell med Joomla! sin brukertabell');
DEFINE('_COM_C_LOADSAMPLE','Legg inn<br/>Eksempeldata');
DEFINE('_COM_C_LOADSAMPLEDESC','For � komme lett i gang: Legg inn eksempeldata i en tom fireboard database');
DEFINE('_COM_C_REMOVESAMPLE', 'Slett sksempeldata');
DEFINE('_COM_C_REMOVESAMPLEDESC', 'Slett eksempeldata ifra din database');
DEFINE('_COM_C_LOADMODPOS','Last modulposisjoner');
DEFINE('_COM_C_LOADMODPOSDESC','Last modulposisjoner for FireBoard Templaten');
DEFINE('_COM_C_UPGRADEDESC','F� din database oppdatert til siste versjon ved en oppdatering');
DEFINE('_COM_C_BACK','Tilbake til fireboard Kontrollpanel');
DEFINE('_SHOW_LAST_SINCE','Aktive tr�der siden siste bes�k:');
DEFINE('_POST_SUCCESS_REQUEST2','Din foresp�rsel er behandlet');
DEFINE('_POST_NO_PUBACCESS3','Klikk her for � registrere deg.');
//==================================================================================================
//Changed in 1.0.4
//please update your local language file with these changes as well
DEFINE('_POST_SUCCESS_DELETE','Innlegget er slettet.');
DEFINE('_POST_SUCCESS_EDIT','Innlegget har blitt redigert.');
DEFINE('_POST_SUCCESS_MOVE','Tr�den er flyttet.');
DEFINE('_POST_SUCCESS_POST','Innlegget er lagret.');
DEFINE('_POST_SUCCESS_SUBSCRIBE','Ditt abonnement er lagret.');
//==================================================================================================
//new in 1.0.3 stable
//Karma
DEFINE('_KARMA','Karma');
DEFINE('_KARMA_SMITE','Negativ');
DEFINE('_KARMA_APPLAUD','Positiv');
DEFINE('_KARMA_BACK','For � komme tilbake til tr�den,');
DEFINE('_KARMA_WAIT','Du kan kun endre en person\'s karma hver sjette time. <br/>Vennligst vent seks timer f�r du endrer noen any persons karma igjen.');
DEFINE('_KARMA_SELF_DECREASE','Vennligst ikke pr�v � endre din egen Karma!');
DEFINE('_KARMA_SELF_INCREASE','Din Karma har blitt senket fordi du pr�vde � �ke den selv!');
DEFINE('_KARMA_DECREASED','Brukerens karma ble senket. Dersom du ikke blir tatt tilbake til tr�den om noen f� �yeblikk,');
DEFINE('_KARMA_INCREASED','Brukerens karma ble �kt. Dersom du ikke blir tatt tilbake til tr�den om noen f� �yeblikk,');
DEFINE('_COM_A_TEMPLATE','Design');
DEFINE('_COM_A_TEMPLATE_DESC','Velg hvilken design du vil bruke.');
DEFINE('_COM_A_TEMPLATE_IMAGE_PATH','Bildesett');
DEFINE('_COM_A_TEMPLATE_IMAGE_PATH_DESC','Velg hvilket bildesett som skal brukes.');
DEFINE('_PREVIEW_CLOSE','Lukk dette vinduet');
//==========================================
//new in 1.0 Stable
DEFINE('_COM_A_POSTSTATSBAR','Bruk statistikkmodul');
DEFINE('_COM_A_POSTSTATSBAR_DESC','Velg &quot;Ja&quot; dersom du vil at antall innlegg brukeren har skrevet skal illustreres grafisk.');
DEFINE('_COM_A_POSTSTATSCOLOR','Fargenummer for grafisk illustrasjon');
DEFINE('_COM_A_POSTSTATSCOLOR_DESC','Angi nummeret for fargen du vil bruke til grafisk illustrasjon av innleggs-statistikk');
DEFINE('_LATEST_REDIRECT',
	'Fireboard-forumet m� (re)etablere dine aksessprivilegier f�r det kan opprette en liste over de nyeste innleggene for deg.\nV�r ikke bekymret, dette er helt normalt etter mer enn 30 minutter uten aktivitet etter innlogging.\nVennligst legg inn ditt s�k om igjen.');
DEFINE('_SMILE_COLOUR','Farge');
DEFINE('_SMILE_SIZE','St�rrelse');
DEFINE('_COLOUR_DEFAULT','Standard');
DEFINE('_COLOUR_RED','R�d');
DEFINE('_COLOUR_PURPLE','Lilla');
DEFINE('_COLOUR_BLUE','Bl�');
DEFINE('_COLOUR_GREEN','Gr�nn');
DEFINE('_COLOUR_YELLOW','Gul');
DEFINE('_COLOUR_ORANGE','Orange');
DEFINE('_COLOUR_DARKBLUE','M�rkebl�');
DEFINE('_COLOUR_BROWN','Brun');
DEFINE('_COLOUR_GOLD','Gull');
DEFINE('_COLOUR_SILVER','S�lv');
DEFINE('_SIZE_NORMAL','Normal');
DEFINE('_SIZE_SMALL','Liten');
DEFINE('_SIZE_VSMALL','Veldig liten');
DEFINE('_SIZE_BIG','Stor');
DEFINE('_SIZE_VBIG','Veldig stor');
DEFINE('_IMAGE_SELECT_FILE','Velg bildefilen du vil legge ved');
DEFINE('_FILE_SELECT_FILE','Velg filen du vil legge ved');
DEFINE('_FILE_NOT_UPLOADED','Filen ble ikke lastet opp. Pr�v � legge inn p� nytt eller rediger innlegget');
DEFINE('_IMAGE_NOT_UPLOADED','bildefilen ble ikke lastet opp. Pr�v � legge inn p� nytt eller rediger innlegget');
DEFINE('_BBCODE_IMGPH','Sett inn [img] plassholder i innlegget for det vedlagte bildet');
DEFINE('_BBCODE_FILEPH','Sett inn [file] plassholder i innlegget for den vedlagte filen');
DEFINE('_POST_ATTACH_IMAGE','[img]');
DEFINE('_POST_ATTACH_FILE','[file]');
DEFINE('_USER_UNSUBSCRIBE_ALL','Marker boksen for � <b><u>fjerne alle tr�d-abonnement</u></b> (inkludert usynlige tr�der - for probleml�sning)');
DEFINE('_LINK_JS_REMOVED','<em>Aktiv link som inneholder JavaScript er fjernet automatisk</em>');
//==========================================
//new in 1.0 RC4
DEFINE('_COM_A_LOOKS','Utseende og "feel"');
DEFINE('_COM_A_USERS','Brukerrelatert');
DEFINE('_COM_A_LENGTHS','Ulike innstillinger for lengde');
DEFINE('_COM_A_SUBJECTLENGTH','Maks. tittel-lengde');
DEFINE('_COM_A_SUBJECTLENGTH_DESC',
	'Maksimal tittel-lengde. Det maksimale antallet som st�ttes av databasen er 255 karakterer. Hvis ditt web-sted er konfigurert til � st�tte multi-byte karaktersett som Unicode, UTF-8 eller ikke-ISO-8599-x m� du gj�re maksimumet mindre ved � bruke denne formelen:<br/><tt>rund_av_nedover(255/(maks. karaktersett byte-st�rrelse per karakter))</tt><br/> Eksempel for UTF-8, hvor maks. karaktersett byte-st�rrelse per karakter er 4 byter: 255/4=63.');
DEFINE('_LATEST_THREADFORUM','Tr�d/Forum');
DEFINE('_LATEST_NUMBER','Nye innlegg');
DEFINE('_COM_A_SHOWNEW','Vis nye innlegg');
DEFINE('_COM_A_SHOWNEW_DESC','Dersom &quot;Ja&quot; er valgt, vil fireboard vise en indikator for forum som har nye innlegg, og hvilke innlegg som er ny siden hans/hennes siste bes�k.');
DEFINE('_COM_A_NEWCHAR','&quot;Ny&quot; indikator');
DEFINE('_COM_A_NEWCHAR_DESC','Her definerer du hva som markerer nye innlegg (F.eks.: &quot;!&quot; eller &quot;NYTT!&quot;)');
DEFINE('_LATEST_AUTHOR','Skrevet av');
DEFINE('_GEN_FORUM_NEWPOST','Nye innlegg');
DEFINE('_GEN_FORUM_NOTNEW','Ingen nye innlegg');
DEFINE('_GEN_UNREAD','Ulest tr�d');
DEFINE('_GEN_NOUNREAD','Lest tr�d');
DEFINE('_GEN_MARK_ALL_FORUMS_READ','Marker alle kategorier som lest');
DEFINE('_GEN_MARK_THIS_FORUM_READ','Marker kategorien som lest');
DEFINE('_GEN_FORUM_MARKED','Alle innleggene i kategorien er markert som leste');
DEFINE('_GEN_ALL_MARKED','Alle innlegg er markert som lest');
DEFINE('_IMAGE_UPLOAD','Bildeopplasting');
DEFINE('_IMAGE_DIMENSIONS','Bildet kan v�re maksimalt (bredde x h�yde - st�rrelse)');
DEFINE('_IMAGE_ERROR_TYPE','Vennligst bare bruk jpeg, gif eller png bildefiler');
DEFINE('_IMAGE_ERROR_EMPTY','Vennligst velg en fil f�r du laster opp');
DEFINE('_IMAGE_ERROR_SIZE','Filen overg�r maksimal st�rrelse satt av administratoren.');
DEFINE('_IMAGE_ERROR_WIDTH','Bildets bredde overg�r maksimal st�rrelse satt av administrator.');
DEFINE('_IMAGE_ERROR_HEIGHT','Bildets h�yde overg�r maksimal st�rrelse satt av administrator.');
DEFINE('_IMAGE_UPLOADED','Ditt bilde ble lastet opp.');
DEFINE('_COM_A_IMAGE','Bilder');
DEFINE('_COM_A_IMGHEIGHT','Maks. bildeh�yde');
DEFINE('_COM_A_IMGWIDTH','Maks. bildebredde');
DEFINE('_COM_A_IMGSIZE','Maks. bildefilst�rrelse <br/><em>i Kilobyte</em>');
DEFINE('_COM_A_IMAGEUPLOAD','Tillat uregistrerte brukere � laste opp bilder');
DEFINE('_COM_A_IMAGEUPLOAD_DESC','Velg &quot;Ja&quot; om du vil at alle (public) skal kunne laste opp bilder.');
DEFINE('_COM_A_IMAGEREGUPLOAD','Tillat registrerte bruker � laste opp bilder');
DEFINE('_COM_A_IMAGEREGUPLOAD_DESC','Velg &quot;Ja&quot; dersom du vil at registrerte og innloggede brukere skal kunne laste opp bilder.<br/> Merk: (Super)administratorer og moderatorer har alltid tilgang til � laste opp bilder.');
  //New since preRC4-II:
DEFINE('_COM_A_UPLOADS','Opplastinger');
DEFINE('_FILE_TYPES','Filen kan v�re av typen - maks. st�rrelse');
DEFINE('_FILE_ERROR_TYPE','Du kan bare laste opp filer av typen:\n');
DEFINE('_FILE_ERROR_EMPTY','Vennligst velg en fil f�r du laster opp');
DEFINE('_FILE_ERROR_SIZE','Filst�rrelsen overskrider maks. st�rrelse satt av Administrator.');
DEFINE('_COM_A_FILE','Filer');
DEFINE('_COM_A_FILEALLOWEDTYPES','Tillatte filtyper');
DEFINE('_COM_A_FILEALLOWEDTYPES_DESC','Her spesifiserer du hvilke filtyper som er tillatt � laste opp. Bruk komma til � skille typene og <strong>sm� bokstaver/tall</strong> uten mellomrom.<br />Eksempel: zip,txt,exe,htm,html');
DEFINE('_COM_A_FILESIZE','Maks. filst�rrelse<br/><em>i Kilobyte</em>');
DEFINE('_COM_A_FILEUPLOAD','Tillat alle � laste opp filer (Public)');
DEFINE('_COM_A_FILEUPLOAD_DESC','Velg &quot;Ja&quot; dersom du vil at alle (public) skal kunne laste opp filer.');
DEFINE('_COM_A_FILEREGUPLOAD','Tillat registrerte brukere � laste opp filer');
DEFINE('_COM_A_FILEREGUPLOAD_DESC','Velg &quot;Ja&quot; dersom du vil at registrerte og innloggede brukere skal kunne laste opp filer.<br/> Note: (Super)administratorer og moderatorer kan alltid laste opp filer.');
DEFINE('_SUBMIT_CANCEL','Ditt innlegg er avbrutt');
DEFINE('_HELP_SUBMIT','Klikk her for � lagre ditt innlegg');
DEFINE('_HELP_PREVIEW','Klikk her for forh�ndsvisning');
DEFINE('_HELP_CANCEL','Klikk her for � avbryte ditt innlegg');
DEFINE('_POST_DELETE_ATT','Kryss av i boksen for � slette alle bilder og vedlegg ogs� (anbefalt).');
   //new since preRC4-III
DEFINE('_COM_A_USER_MARKUP','Vis om innlegget er redigert');
DEFINE('_COM_A_USER_MARKUP_DESC','Velg &quot;Ja&quot; dersom du vil at redigerte innlegg skal markeres som redigert, og n�r redigeringen skjedde.');
DEFINE('_EDIT_BY','Endret av');
DEFINE('_EDIT_AT','den');
DEFINE('_UPLOAD_ERROR_GENERAL','En feil oppstod under opplasting av ditt brukerbilde. Vennligst pr�v igjen, eller gi beskjed til systemadministrator');
DEFINE('_COM_A_IMGB_IMG_BROWSE','Bla gjennom opplastede bilder');
DEFINE('_COM_A_IMGB_FILE_BROWSE','Bla gjennom opplastede filer');
DEFINE('_COM_A_IMGB_TOTAL_IMG','Antall opplastede bilder');
DEFINE('_COM_A_IMGB_TOTAL_FILES','Antall opplastede filer');
DEFINE('_COM_A_IMGB_ENLARGE','Klikk p� bildet for � se dets fulle st�rrelse');
DEFINE('_COM_A_IMGB_DOWNLOAD','Klikk p� filen for � laste den ned');
DEFINE('_COM_A_IMGB_DUMMY_DESC',
	'Opsjonen &quot;Bytt med "dummy"&quot; vil bytte ut det valgte bildet med et "dummy"-bilde.<br /> Dette lar deg fjerne filen uten � "brekke" innlegget.<br /><small><em>Husk at noen ganger m� browseren oppdateres for � se at filen er byttet ut med en "dummy".</em></small>');
DEFINE('_COM_A_IMGB_DUMMY','<h2>N�ve�rende "dummy-bilde"</h2>');
DEFINE('_COM_A_IMGB_REPLACE','Bytt med "dummy"');
DEFINE('_COM_A_IMGB_REMOVE','Fjern helt');
DEFINE('_COM_A_IMGB_NAME','Navn');
DEFINE('_COM_A_IMGB_SIZE','St�rrelse');
DEFINE('_COM_A_IMGB_DIMS','Dimensjoner');
DEFINE('_COM_A_IMGB_CONFIRM','Er du helt sikker p� at du vil fjerne denne filen? \n Sletting av en fil kan gi et misvisende referanseinnlegg');
DEFINE('_COM_A_IMGB_VIEW','�pne innlegg (for redigering)');
DEFINE('_COM_A_IMGB_NO_POST','Intet referanseinnlegg!');
DEFINE('_USER_CHANGE_VIEW','Endringer i disse innstillingene vil vises neste gang du bes�ker forumet.<br /> Hvis du vil endre visningen mens du bruker forumet kan dette gj�res i toppmenyen p� forumet.');
DEFINE('_MOSBOT_DISCUSS_A','Diskuter denne artikkelen i forumet. (');
DEFINE('_MOSBOT_DISCUSS_B',' innlegg)');
DEFINE('_POST_DISCUSS','Denne tr�den gjelder artikkelen');
DEFINE('_COM_A_RSS','Aktiver RSS feed');
DEFINE('_COM_A_RSS_DESC','RSS feed lar brukere laste ned nye innlegg til sin RSS-leser-applikasjon (se <a href="http://www.rssreader.com" target="_blank">rssreader.com</a> for et eksempel).');
DEFINE('_LISTCAT_RSS','f� nye innlegg direkte til ditt skrivebord');
DEFINE('_SEARCH_REDIRECT','fireboard-forumet m� (re)etablere dine aksessprivilegier f�r det kan utf�re ditt s�k.\nDette er helt normalt etter mer enn 30 minutter uten aktivitet.\nVennligst kj�r ditt s�k igjen.');
//====================
//admin.forum.html.php
DEFINE('_COM_A_CONFIG','Konfigurasjon');
DEFINE('_COM_A_DISPLAY','Vis #');
DEFINE('_COM_A_CURRENT_SETTINGS','N�v�rende innstillinger');
DEFINE('_COM_A_EXPLANATION','Forklaring');
DEFINE('_COM_A_BOARD_TITLE','Forumtittel');
DEFINE('_COM_A_BOARD_TITLE_DESC','Forumets navn/tittel');
DEFINE('_COM_A_VIEW_TYPE','Standard visning');
DEFINE('_COM_A_VIEW_TYPE_DESC','Velg mellom tr�dbasert, eller flat visning som standard');
DEFINE('_COM_A_THREADS','Antall tr�der per side i kategori');
DEFINE('_COM_A_THREADS_DESC','Antall tr�der som skal vises per side under kategori f�r link til ny side opprettes');
DEFINE('_COM_A_REGISTERED_ONLY','Kun registrerte brukere');
DEFINE('_COM_A_REG_ONLY_DESC','Velg &quot;Ja&quot; for � la kun registrerte brukere benytte forumet (lese & skrive), Velg &quot;Nei&quot; for � la enhver bes�kende bruke forumet');
DEFINE('_COM_A_PUBWRITE','Publikum kan lese/skrive');
DEFINE('_COM_A_PUBWRITE_DESC','Velg &quot;Ja&quot; for � la alle bes�kende kunne skrive i forumet, Velg &quot;Nei&quot; for � la alle bes�kende kunne lese, mens bare registrerte og innloggede brukere kan skrive');
DEFINE('_COM_A_USER_EDIT','La brukere redigere');
DEFINE('_COM_A_USER_EDIT_DESC','Velg &quot;Ja&quot; for � la registrerte brukere redigere/endre sine egne innlegg.');
DEFINE('_COM_A_MESSAGE','For � lagre endringer i verdiene ovenfor klikker du &quot;Lagre&quot; knappen p� toppen.');
DEFINE('_COM_A_HISTORY','Vis historie');
DEFINE('_COM_A_HISTORY_DESC','Velg &quot;Ja&quot; dersom du vil vise til tidligere innlegg n�r svar/sitat brukes');
DEFINE('_COM_A_SUBSCRIPTIONS','Tillat abonnement');
DEFINE('_COM_A_SUBSCRIPTIONS_DESC','Velg &quot;Ja&quot; dersom du vil la registrerte brukere abonnere p� tr�der og motta mail ved nye innlegg');
DEFINE('_COM_A_HISTLIM','Historie begrensning');
DEFINE('_COM_A_HISTLIM_DESC','Antall innlegg som skal vises i historien');
DEFINE('_COM_A_FLOOD','Flood-beskyttelse');
DEFINE('_COM_A_FLOOD_DESC','Antall sekunder en bruker m� vente mellom hvert innlegg han/hun legger inn. Velg 0 (null) for � sl� Flood-beskyttelse av. MERK: Flood-beskyttelse <em>kan</em> p�virke ytelsen negativt..');
DEFINE('_COM_A_MODERATION','E-post Moderatorer');
DEFINE('_COM_A_MODERATION_DESC',
	'Velg &quot;Ja&quot; dersom du vil at moderatorer skal motta mail ved nye innlegg. Merk: Selv om alle (super)administratorer automatisk har alle Moderator-privilegiene m� du spesifikt angi dem som moderatorer p� de forskjellige forumene for at de skal motta mail ogs�!');
DEFINE('_COM_A_SHOWMAIL','Vis E-post');
DEFINE('_COM_A_SHOWMAIL_DESC','Velg &quot;Nei&quot; dersom du ikke vil vise brukernes E-post-adresser; ikke engang til registrerte brukere.');
DEFINE('_COM_A_AVATAR','Tillat bruker-bilder');
DEFINE('_COM_A_AVATAR_DESC','Velg &quot;Ja&quot; dersom du vil at brukerne skal ha et brukerbilde (avatar) (konfigureres i brukernes profiler)');
DEFINE('_COM_A_AVHEIGHT','Maks. Avatar h�yde');
DEFINE('_COM_A_AVWIDTH','Maks. Avatar bredde');
DEFINE('_COM_A_AVSIZE','Maks. Avatar filst�rrelse<br/><em>i Kilobyte</em>');
DEFINE('_COM_A_USERSTATS','Vis brukerstatistikk');
DEFINE('_COM_A_USERSTATS_DESC','Velg &quot;Ja&quot; for � vise brukerstatistikk som antall innlegg, brukertype (Admin, Moderator, bruker, etc.).');
DEFINE('_COM_A_AVATARUPLOAD','Tillat opplasting av bruker-bilde (Avatar)');
DEFINE('_COM_A_AVATARUPLOAD_DESC','Velg &quot;Ja&quot; dersom du vil at brukerne skal kunne laste opp en avatar.');
DEFINE('_COM_A_AVATARGALLERY','Bruk avatar-galleri');
DEFINE('_COM_A_AVATARGALLERY_DESC','Velg &quot;Ja&quot; dersom du vil gi brukere mulighet til � velge avatar fra et galleri du tilbyr (components/com_fireboard/avatars/gallery).');
DEFINE('_COM_A_RANKING_DESC','Velg &quot;Ja&quot; dersom du vil vise rangeringen registrerte brukere har basert p� antall innlegg de har skrevet.<br/><strong>Merk at du m� aktivere Brukerstatistikk under Avansert taben for � vise den.</strong>');
DEFINE('_COM_A_RANKINGIMAGES','Bruk rangerings-ikoner');
DEFINE('_COM_A_RANKINGIMAGES_DESC',
	'Velg &quot;Ja&quot; dersom du vil vise registrerte brukeres rangering med et ikon (fra components/com_fireboard/ranks). Om du sl�r dette av, vil en tekst for den rangeringen vises. Sjekk dokumentasjonen p� www.bestofjoomla.com for mer informasjon om rangeringsikoner (ranking images)');

//email and stuff
$_COM_A_NOTIFICATION ="Melding om nytt innlegg fra ";
$_COM_A_NOTIFICATION1="Et nytt innlegg er lagt til i en tr�d du abonnerer p� p� ";
$_COM_A_NOTIFICATION2="Du kan administrere dine abonnement vel � klikke p� 'Min profil'-linken p� forumets startside etter at du har logget inn. Du kan ogs� stoppe abonnement p� tr�der i profilen din.";
$_COM_A_NOTIFICATION3="Ikke svar p� denne E-posten, da den er automatisk generert.";
$_COM_A_NOT_MOD1="Et nytt innlegg er lagt til i et forum du er moderator i p� ";
$_COM_A_NOT_MOD2="Vennligst se p� innlegget etter at du har logget inn p� siden.";
DEFINE('_COM_A_NO','Nei');
DEFINE('_COM_A_YES','Ja');
DEFINE('_COM_A_FLAT','Flat');
DEFINE('_COM_A_THREADED','Tr�d');
DEFINE('_COM_A_MESSAGES','Antall innlegg per side i tr�d');
DEFINE('_COM_A_MESSAGES_DESC','Antall innlegg som skal vises per side i tr�d f�r link til ny side opprettes');
   //admin; changes from 0.9 to 0.9.1
DEFINE('_COM_A_USERNAME','Brukernavn');
DEFINE('_COM_A_USERNAME_DESC','Velg &quot;Ja&quot; dersom du vil at brukernavnet (som ved innlogging) skal brukes istedenfor brukerens egentlige navn');
DEFINE('_COM_A_CHANGENAME','Tillat endring av navn');
DEFINE('_COM_A_CHANGENAME_DESC','Velg &quot;Ja&quot; dersom du vil gi registrerte brukere mulighet til � endre sitt navn n�r de skriver et innlegg.');
   //admin; changes 0.9.1 to 0.9.2
DEFINE('_COM_A_BOARD_OFFLINE','Forum nede for vedlikehold!');
DEFINE('_COM_A_BOARD_OFFLINE_DESC','Velg &quot;Ja&quot; dersom du vil ta ned forum-komponenten for vedlikehold. Forumet vil forbli tilgjengelig for (super)administratorer.');
DEFINE('_COM_A_BOARD_OFFLINE_MES','Forum Offline beskjed');
DEFINE('_COM_A_PRUNE','Rydd i Forum');
DEFINE('_COM_A_PRUNE_NAME','Forum � rydde i:');
DEFINE('_COM_A_PRUNE_DESC',
	'Rydde-funksjonen lar deg fjerne tr�der hvor det ikke har blitt skrevet nye innlegg p� det spesifiserte antallet dager. Dette fjerner ikke tr�der som er prioriterte eller l�ste; disse m� fjernes manuelt. Tr�der i l�ste forum vil ikke fjernes.');
DEFINE('_COM_A_PRUNE_NOPOSTS','Fjern tr�der uten nye innlegg i l�pet av de siste ');
DEFINE('_COM_A_PRUNE_DAYS','dager');
DEFINE('_COM_A_PRUNE_USERS','Rydd i Brukere');
DEFINE('_COM_A_PRUNE_USERS_DESC',
	'Denne funksjonen lar deg fjerne brukere ved � sammenligne brukerlisten til fireboard med brukerlisten til joomla siten din. Den vil slette alle fireboard-brukere som har blitt slettet fra brukere i Joomla! <br/>N�r du er sikker p� at du vil fortsette trykker du &quot;Prune&quot; i menyen ovenfor.');
//general
DEFINE('_GEN_ACTION','Handling');
DEFINE('_GEN_AUTHOR','Forfatter');
DEFINE('_GEN_BY','av');
DEFINE('_GEN_CANCEL','Avbryt');
DEFINE('_GEN_CONTINUE','Lagre');
DEFINE('_GEN_DATE','Dato');
DEFINE('_GEN_DELETE','Slett');
DEFINE('_GEN_EDIT','Rediger');
DEFINE('_GEN_EMAIL','E-post');
DEFINE('_GEN_EMOTICONS','Smileys');
DEFINE('_GEN_FLAT','Flat');
DEFINE('_GEN_FLAT_VIEW','Flat visning');
DEFINE('_GEN_FORUMLIST','Forumliste');
DEFINE('_GEN_FORUM','Kategorier');
DEFINE('_GEN_HELP','Hjelp');
DEFINE('_GEN_HITS','Visninger');
DEFINE('_GEN_LAST_POST','Siste innlegg');
DEFINE('_GEN_LATEST_POSTS','Vis nye innlegg');
DEFINE('_GEN_LOCK','L�s');
DEFINE('_GEN_UNLOCK','L�s opp');
DEFINE('_GEN_LOCKED_FORUM','Forumet er l�st');
DEFINE('_GEN_LOCKED_TOPIC','Tr�den er l�st');
DEFINE('_GEN_MESSAGE','Melding');
DEFINE('_GEN_MODERATED','Forumet modereres; innlegg blir godkjent f�r publisering.');
DEFINE('_GEN_MODERATORS','Moderatorer');
DEFINE('_GEN_MOVE','Flytt');
DEFINE('_GEN_NAME','Navn');
DEFINE('_GEN_POST_NEW_TOPIC','Legg inn ny tr�d');
DEFINE('_GEN_POST_REPLY','Legg inn svar');
DEFINE('_GEN_MYPROFILE','Min profil');
DEFINE('_GEN_QUOTE','Sitat');
DEFINE('_GEN_REPLY','Svar');
DEFINE('_GEN_REPLIES','Svar');
DEFINE('_GEN_THREADED','Tr�d');
DEFINE('_GEN_THREADED_VIEW','Tr�dbasert visning');
DEFINE('_GEN_SIGNATURE','Signatur');
DEFINE('_GEN_ISSTICKY','Tr�den er prioritert.');
DEFINE('_GEN_STICKY','Prioritert');
DEFINE('_GEN_UNSTICKY','Ikke prioritert');
DEFINE('_GEN_SUBJECT','Tema');
DEFINE('_GEN_SUBMIT','Lagre');
DEFINE('_GEN_TOPIC','Tr�d');
DEFINE('_GEN_TOPICS','Tr�der');
DEFINE('_GEN_TOPIC_ICON','Tr�d-ikon');
DEFINE('_GEN_SEARCH_BOX','S�k i forumet');
$_GEN_THREADED_VIEW="Tr�dbasert visning";
$_GEN_FLAT_VIEW    ="Flat visning";
//avatar_upload.php
DEFINE('_UPLOAD_UPLOAD','Last opp');
DEFINE('_UPLOAD_DIMENSIONS','Bildefilen kan maksimalt v�re (bredde x h�yde - st�rrelse)');
DEFINE('_UPLOAD_SUBMIT','Legg til ett nytt bruker-bilde (avatar) for opplasting');
DEFINE('_UPLOAD_SELECT_FILE','Velg fil');
DEFINE('_UPLOAD_ERROR_TYPE','Bruk ett av formatene jpeg, gif eller png bilde');
DEFINE('_UPLOAD_ERROR_EMPTY','Vennligst velg en fil f�r du laster opp');
DEFINE('_UPLOAD_ERROR_NAME','Bildefilens navn m� kun best� av alfanumeriske tegn, ikke �, �, og � og ingen mellomrom.');
DEFINE('_UPLOAD_ERROR_SIZE','Bildefilens st�rrelse overstiger maksimal st�rrelse satt av administrator.');
DEFINE('_UPLOAD_ERROR_WIDTH','Bildefilens bredde overstiger maksimal bredde satt av administrator.');
DEFINE('_UPLOAD_ERROR_HEIGHT','Bildefilens h�yde overstiger maksimal h�yde satt av administrator.');
DEFINE('_UPLOAD_ERROR_CHOOSE',"Du valgte ikke et brukerbilde fra galleriet...");
DEFINE('_UPLOAD_UPLOADED','Ditt brukerbilde ble lastet opp.');
DEFINE('_UPLOAD_GALLERY','Velg et bilde fra brukerbilde-galleriet:');
DEFINE('_UPLOAD_CHOOSE','Bekreft valg.');
// listcat.php
DEFINE('_LISTCAT_ADMIN','En administrator m� opprette dem f�rst fra ');
DEFINE('_LISTCAT_DO','De vet hva som m� til ');
DEFINE('_LISTCAT_INFORM','Informer dem, og be dem skynde seg!');
DEFINE('_LISTCAT_NO_CATS','Det er ingen kategorier i forumet enn�.');
DEFINE('_LISTCAT_PANEL','Administrasjonspanelet i Joomla! OS CMS.');
DEFINE('_LISTCAT_PENDING','ventende beskjed(er)');
// moderation.php
DEFINE('_MODERATION_MESSAGES','Det er ingen ventende innlegg i dette forumet.');
// post.php
DEFINE('_POST_ABOUT_TO_DELETE','Du er i ferd med � slette innlegget');
DEFINE('_POST_ABOUT_DELETE','<strong>MERK:</strong><br/>
-hvis du sletter en tr�d (det f�rste innlegget i en tr�d) vil ogs� andre innlegg i tr�den bli slettet!
..vurder om du heller vil slette tekst og forfatter. i innlegget.
<br/>
- alle svarinnlegg vil bli flyttet opp 1 plass i tr�dhierarkiet.');
DEFINE('_POST_CLICK','klikk her');
DEFINE('_POST_ERROR','Kunne ikke finne brukernavn/E-post. Alvorlig ukjent databasefeil');
DEFINE('_POST_ERROR_MESSAGE','En ukjent SQL-feil oppstod og meldingen ble ikke lagt inn. Kontakt administrator dersom problemet fortsetter.');
DEFINE('_POST_ERROR_MESSAGE_OCCURED','En feil oppstod, og innlegget ble ikke oppdatert. Vennligst pr�v igjen. Kontakt administrator dersom problemet fortsetter.');
DEFINE('_POST_ERROR_TOPIC','En feil oppstad ved sletting(ene). Vennligst sjekk feilmeldingen under:');
DEFINE('_POST_FORGOT_NAME','Du glemte � skrive ditt navn. Klikk knappen&#146s for � g� tilbake i nettleseren din og pr�v igjen.');
DEFINE('_POST_FORGOT_SUBJECT','Du glemte � skrive tema. Klikk knappen&#146s for � g� tilbake i nettleseren din og pr�v igjen.');
DEFINE('_POST_FORGOT_MESSAGE','Du glemte � skrive melding. Klikk knappen&#146s for � g� tilbake i nettleseren din og pr�v igjen.');
DEFINE('_POST_INVALID','En ugyldig innleggsID ble forespurt.');
DEFINE('_POST_LOCK_SET','Tr�den er l�st.');
DEFINE('_POST_LOCK_NOT_SET','Tr�den kunne ikke l�ses.');
DEFINE('_POST_LOCK_UNSET','Tr�den er l�st opp.');
DEFINE('_POST_LOCK_NOT_UNSET','Tr�den kunne ikke l�ses opp.');
DEFINE('_POST_MESSAGE','Skriv et nytt innlegg i ');
DEFINE('_POST_MOVE_TOPIC','Flytt denne tr�den til kategorien ');
DEFINE('_POST_NEW','Skriv et nytt innlegg i: ');
DEFINE('_POST_NO_SUBSCRIBED_TOPIC','Ditt abonnement til tr�den kunne ikke behandles.');
DEFINE('_POST_NOTIFIED','Marker denne boksen for � motta varsel ved nye kommentarer i tr�den.');
DEFINE('_POST_STICKY_SET','Prioritering av tr�den er satt.');
DEFINE('_POST_STICKY_NOT_SET','Prioritering av tr�den kunne ikke settes.');
DEFINE('_POST_STICKY_UNSET','Prioritering av tr�den er fjernet.');
DEFINE('_POST_STICKY_NOT_UNSET','Prioritering kunne ikke fjernes.');
DEFINE('_POST_SUBSCRIBE','abonner');
DEFINE('_POST_SUBSCRIBED_TOPIC','Du abonnerer n� p� tr�den.');
DEFINE('_POST_SUCCESS','Ditt innlegg ble lagt inn');
DEFINE('_POST_SUCCES_REVIEW','Ditt innlegg ble lagt inn. Det vil bli gjennomg�tt av en moderator f�r det legges ut p� forumet.');
DEFINE('_POST_SUCCESS_REQUEST','Din foresp�rsel er behandlet. Hvis du ikke blir tatt tilbake til tr�den om et �yeblikk,');
DEFINE('_POST_TOPIC_HISTORY','Tr�d-historie for');
DEFINE('_POST_TOPIC_HISTORY_MAX','Maks. viser de siste');
DEFINE('_POST_TOPIC_HISTORY_LAST','innlegg  -  <i>(siste innlegg f�rst)</i>');
DEFINE('_POST_TOPIC_NOT_MOVED','Din tr�d kunne ikke flyttes. For � komme tilbake til tr�den:');
DEFINE('_POST_TOPIC_FLOOD1','Administratoren av dette forumet har aktiver "Flood-beskyttelse" og har bestemt at du m� vente ');
DEFINE('_POST_TOPIC_FLOOD2',' sekunder f�r du kan legge inn et nytt innlegg.');
DEFINE('_POST_TOPIC_FLOOD3','Vennlist klikk&#146s tilbake-knappen i nettleseren din for � komme tilbake til forumet.');
DEFINE('_POST_EMAIL_NEVER','E-post adressen vil ikke vises p� web-siden.');
DEFINE('_POST_EMAIL_REGISTERED','din E-post adresse vil bare v�re tilgjengelig for registrerte brukere.');
DEFINE('_POST_LOCKED','l�st av administrator.');
DEFINE('_POST_NO_NEW','Nye svar er ikke tillatt.');
DEFINE('_POST_NO_PUBACCESS1','Administratoren har sperret skrivetilgang for bes�kende.');
DEFINE('_POST_NO_PUBACCESS2','Kun innloggede / registrerte brukere<br /> har tillatelse til � skrive i forumet.');
// showcat.php
DEFINE('_SHOWCAT_NO_TOPICS','>> Det er ingen tr�der i denne kategorien enn� <<');
DEFINE('_SHOWCAT_PENDING','ventende innlegg)');
// userprofile.php
DEFINE('_USER_DELETE',' marker denne boksen for � slette din signatur');
DEFINE('_USER_ERROR_A','Du kom til denne siden p.g.a. en feil. Vennligst informer administratoren om hva ');
DEFINE('_USER_ERROR_B','du klikket som sendte deg hit. Han/hun kan rapportere feilen til utviklerne av dette scriptet.');
DEFINE('_USER_ERROR_C','Tusen takk!');
DEFINE('_USER_ERROR_D','Feilnummer som skal inkluderes i din rapport: ');
DEFINE('_USER_GENERAL','Generelle profilinnstillinger');
DEFINE('_USER_MODERATOR','Du er angitt som Moderator for forum');
DEFINE('_USER_MODERATOR_NONE','Ingen forum er tildelt deg for moderering');
DEFINE('_USER_MODERATOR_ADMIN','Administratorer er moderatorer i alle forum.');
DEFINE('_USER_NOSUBSCRIPTIONS','Ingen abonnement ble funnet hos deg');
DEFINE('_USER_PREFERED','Foretrukket visning');
DEFINE('_USER_PROFILE','Profil for ');
DEFINE('_USER_PROFILE_NOT_A','Din profil kunne ');
DEFINE('_USER_PROFILE_NOT_B','ikke');
DEFINE('_USER_PROFILE_NOT_C',' oppdateres.');
DEFINE('_USER_PROFILE_UPDATED','Profilen din er oppdatert.');
DEFINE('_USER_RETURN_A','Dersom du ikke blir f�rt tilbake til profilen din etter et �yeblikk ');
DEFINE('_USER_RETURN_B','klikk her');
DEFINE('_USER_SUBSCRIPTIONS','Dine abonnement');
DEFINE('_USER_UNSUBSCRIBE','Avslutt abonnement');
DEFINE('_USER_UNSUBSCRIBE_A','Du kunne ');
DEFINE('_USER_UNSUBSCRIBE_B','ikke');
DEFINE('_USER_UNSUBSCRIBE_C',' avslutte abonnementet p� tr�den.');
DEFINE('_USER_UNSUBSCRIBE_YES','Du har avsluttet abonnementet p� tr�den.');
DEFINE('_USER_DELETEAV',' merk boksen for � slette ditt bilde');
//New 0.9 to 1.0
DEFINE('_USER_ORDER','Foretrukket rekkef�lge p� innlegg');
DEFINE('_USER_ORDER_DESC','Siste innlegg f�rst');
DEFINE('_USER_ORDER_ASC','F�rste innlegg f�rst');
// view.php
DEFINE('_VIEW_DISABLED','Du m� v�re innlogget for � skrive i forumet.');
DEFINE('_VIEW_POSTED','Skrevet av');
DEFINE('_VIEW_SUBSCRIBE',':: Abonner p� tr�den ::');
DEFINE('_MODERATION_INVALID_ID','En ugyldig innleggsID ble forespurt.');
DEFINE('_VIEW_NO_POSTS','Det er ingen innlegg i dette forumet.');
DEFINE('_VIEW_VISITOR','Bes�kende');
DEFINE('_VIEW_ADMIN','Admin');
DEFINE('_VIEW_USER','Bruker');
DEFINE('_VIEW_MODERATOR','Moderator');
DEFINE('_VIEW_REPLY','Svar p� innlegget');
DEFINE('_VIEW_EDIT','Rediger innlegget');
DEFINE('_VIEW_QUOTE','Siter innlegget i et nytt innlegg');
DEFINE('_VIEW_DELETE','Slett innlegget');
DEFINE('_VIEW_STICKY','Prioriter tr�den');
DEFINE('_VIEW_UNSTICKY','Fjern prioritering av denne tr�den');
DEFINE('_VIEW_LOCK','L�s tr�den');
DEFINE('_VIEW_UNLOCK','L�s opp tr�den');
DEFINE('_VIEW_MOVE','Flytt tr�den til en annen kategori');
DEFINE('_VIEW_SUBSCRIBETXT','Abonner p� tr�den hvis du vil motta mail ved nye innlegg');
//NEW-STRINGS-FOR-TRANSLATING-READY-FOR-SIMPLEBOARD 9.2
DEFINE('_HOME','Startside');
DEFINE('_POSTS','Innlegg:');
DEFINE('_TOPIC_NOT_ALLOWED','Innlegg');
DEFINE('_FORUM_NOT_ALLOWED','Forum');
DEFINE('_FORUM_IS_OFFLINE','Forumet er NEDE for vedlikehold!');
DEFINE('_PAGE','Side: ');
DEFINE('_NO_POSTS','Ingen innlegg');
DEFINE('_CHARS','karakterer maks.');
DEFINE('_HTML_YES','HTML er sperret');
DEFINE('_YOUR_AVATAR','<b>Ditt bilde</b>');
DEFINE('_NON_SELECTED','Ikke valgt enn� <br>');
DEFINE('_SET_NEW_AVATAR','Velg nytt bilde');
DEFINE('_THREAD_UNSUBSCRIBE','Avslutt abonnement');
DEFINE('_SHOW_LAST_POSTS','Aktive tr�der siste');
DEFINE('_SHOW_HOURS','timer');
DEFINE('_SHOW_POSTS','Totalt: ');
DEFINE('_DESCRIPTION_POSTS','De nyeste innleggene i aktive tr�der vises');
DEFINE('_SHOW_4_HOURS','4 timer');
DEFINE('_SHOW_8_HOURS','8 timer');
DEFINE('_SHOW_12_HOURS','12 timer');
DEFINE('_SHOW_24_HOURS','24 timer');
DEFINE('_SHOW_48_HOURS','48 timer');
DEFINE('_SHOW_WEEK','uke');
DEFINE('_POSTED_AT','Skrevet');
DEFINE('_DATETIME','d/m/Y H:i');
DEFINE('_NO_TIMEFRAME_POSTS','Ingen nye innlegg i den tidsrammen du valgte.');
DEFINE('_MESSAGE','Melding');
DEFINE('_NO_SMILIE','ingen');
DEFINE('_FORUM_UNAUTHORIZIED','Dette forumet er kun �pent for innloggede og registrerte brukere.');
DEFINE('_FORUM_UNAUTHORIZIED2','Vennligst logg inn f�rst, dersom du allerede er registrert.');
DEFINE('_MESSAGE_ADMINISTRATION','Moderering');
DEFINE('_MOD_APPROVE','Godkjenn');
DEFINE('_MOD_DELETE','Slett');
//NEW in RC1
DEFINE('_SHOW_LAST','Vis siste innlegg');
DEFINE('_POST_WROTE','skrev');
DEFINE('_COM_A_EMAIL','Forumets E-post adresse');
DEFINE('_COM_A_EMAIL_DESC','Dette er forumets epostadresse. S�rg for at det er en gyldig adresse');
DEFINE('_COM_A_WRAP','Bryt ord lengre enn');
DEFINE('_COM_A_WRAP_DESC',
	'Angi det maksimale antall karakterer ett enkelt ord kan ha. Denne opsjonen lar deg tilpasse hvordan fireboard virker sammen med Joomla-templaten din.<br/> 70 karakterer er antakeligvis maksimum for templater med forh�ndssatt bredde, men du b�r kanskje eksperimentere litt.<br/>URLer, uansett lengde, affiseres ikke av denne opsjonen');
DEFINE('_COM_A_SIGNATURE','Maks. signaturlengde');
DEFINE('_COM_A_SIGNATURE_DESC','Maksimalt antall karakterer for brukerens signatur.');
DEFINE('_SHOWCAT_NOPENDING','Ingen ventende innlegg');
DEFINE('_COM_A_BOARD_OFSET','Tidsforskyvning');
DEFINE('_COM_A_BOARD_OFSET_DESC','Noen forum har vertsskap p� servere i andre tidssoner enn der brukerne befinner seg. Sett tidsforskyvningen fireboard skal bruke i timer. Positive og negative tall kan brukes');
//New in RC2
DEFINE('_COM_A_BASICS','Basis');
DEFINE('_COM_A_FRONTEND','Grensesnitt');
DEFINE('_COM_A_SECURITY','Sikkerhet');
DEFINE('_COM_A_AVATARS','Brukerbilder');
DEFINE('_COM_A_INTEGRATION','Integrasjon');
DEFINE('_COM_A_PMS','Aktiver private meldinger');
DEFINE('_COM_A_PMS_DESC',
	'Velg den riktige komponenten for private meldinger dersom du har installert en slik. Dersom du bruker Clexus PM, vil ogs� ClexusPM profil-opsjoner som ICQ, AIM, Yahoo, MSN og profil-linker, virke dersom dette st�ttes av fireboard-templaten som brukes.');
DEFINE('_VIEW_PMS','Klikk her for � sende en privat melding til denne brukeren');
//new in RC3
DEFINE('_POST_RE','Sv:');
DEFINE('_BBCODE_BOLD','Fete typer: [b]text[/b] ');
DEFINE('_BBCODE_ITALIC','Kursiv: [i]text[/i]');
DEFINE('_BBCODE_UNDERL','Understrek: [u]text[/u]');
DEFINE('_BBCODE_QUOTE','I anf�rselstegn: [quote]text[/quote]');
DEFINE('_BBCODE_CODE','Kode: [code]kode[/code]');
DEFINE('_BBCODE_ULIST','Punktliste: [ul] [li]text[/li] [/ul] - Hint: en liste m� inneholde liste-enheter');
DEFINE('_BBCODE_OLIST','Numerert list: [ol] [li]text[/li] [/ol] - Hint: en liste m� inneholde liste-enheter');
DEFINE('_BBCODE_IMAGE','Bilde: [img size=(01-499)]http://www.google.com/images/web_logo_left.gif[/img]');
DEFINE('_BBCODE_LINK','Link: [url=http://www.nnfa.no/]Dette er en link[/url]');
DEFINE('_BBCODE_CLOSA','Lukk alle tagger');
DEFINE('_BBCODE_CLOSE','Lukk alle �pne bbCode tagger');
DEFINE('_BBCODE_COLOR','Farge: [color=#FF6600]text[/color]');
DEFINE('_BBCODE_SIZE','St�rrelse: [size=1]skriftst�rrelse[/size] - Hint: st�rrelse mellom 1 og 5');
DEFINE('_BBCODE_LITEM','Liste enhet: [li] listeenhet [/li]');
DEFINE('_BBCODE_HINT','bbCode Hjelp - Hint: bbCode kan brukes p� markert tekst!');
DEFINE('_COM_A_TAWIDTH','Tekstomr�de bredde');
DEFINE('_COM_A_TAWIDTH_DESC','Juster bredden p� innlegg/svar omr�det til � passe din template. <br/>Verkt�ylinjen for tr�d-ikoner vil fordeles over to linjer dersom bredden er mindre enn 420 piksler');
DEFINE('_COM_A_TAHEIGHT','Tekstomr�dets h�yde');
DEFINE('_COM_A_TAHEIGHT_DESC','Juster h�yden p� svar/innlegg omr�det til � passe din template');
DEFINE('_COM_A_ASK_EMAIL','Be om E-post');
DEFINE('_COM_A_ASK_EMAIL_DESC','Be om E-post adresse n�r brukere eller bes�kende skriver innlegg. Velg &quot;Nei&quot; dersom du vil deaktivere denne funksjonen. De som skriver innlegg vil ikke bli spurt om E-post adresse.');
//Rank Administration - Dan Syme/IGD
define('_FB_RANKS_MANAGE', 'Grad administrering');
define('_FB_SORTRANKS', 'Sort�r etter grad');

define('_FB_RANKSIMAGE', 'Grad bilde');
define('_FB_RANKS', 'Grad tittel');
define('_FB_RANKS_SPECIAL', 'Spesial');
define('_FB_RANKSMIN', 'Minimum innleggstall');
define('_FB_RANKS_ACTION', 'Handlinger');
define('_FB_NEW_RANK', 'Ny grad');

?>
