<?php
/*
 *    -----------------------------------------------------------------------
 *    Copyright (c) 2006 Rune Rasmussen
 *    License: GNU General Public License
 *    Author: Rune Rasmussen http://www.syntaxerror.no/
 *    Modified by: Rune Rasmussen
 *    $Id: norwegian.php 62 2007-02-01 14:41:29Z rued $
 *    -----------------------------------------------------------------------
 */

// ensure this file is being included by a parent file */
defined("_VALID_MOS") or die("Direct Access to this location is not allowed.");


// admin
define('_ADMIN_EDIT_USER','Rediger bruker');
define('_ADMIN_USERNAME','Brukernavn');
define('_ADMIN_REAL_NAME','Fullt navn');
define('_ADMIN_EMAIL_ADDRESS','E-postadresse');
define('_ADMIN_GROUP','Gruppe');
define('_ADMIN_ENABLED','Aktivert');
define('_ADMIN_USER_GROUP_MANAGEMENT','Bruker- og gruppebehandling');
define('_ADMIN_YES','Ja');
define('_ADMIN_NO','Nei');
define('_ADMIN_DEPT_COMPANY','Avd./Firma');
define('_ADMIN_CONTACT_TYPE','Kontakttype');
define('_ADMIN_ADDRESS','Adresse');
define('_ADMIN_CITY','Sted');
define('_ADMIN_STATE','Fylke');
define('_ADMIN_ZIP_POSTAL','Postnr.');
define('_ADMIN_COUNTRY','Land');
define('_ADMIN_PHONE','Teleforn');
define('_ADMIN_CONTACT_NAME','Kontaktnavn');
define('_ADMIN_EMAIL','E-post');
define('_ADMIN_DESCRIPTION','Beskrivelse');
define('_ADMIN_ADMIN_GROUP','Admin. gruppe');
define('_ADMIN_ADD_COMMENTS','Legg til kommentar');
define('_ADMIN_ATTACH_FILES','Legg til filer');
define('_ADMIN_ID','ID');
define('_ADMIN_TYPE','Type');
define('_ADMIN_PROJECT','Prosjekt');
define('_ADMIN_URGENCY','Viktighet');
define('_ADMIN_SUMMARY','Oppsumering');
define('_ADMIN_AGE','Alder');
define('_ADMIN_STATUS','Status');
define('_ADMIN_CATEGORIES','Kategorier');
define('_ADMIN_CATEGORIES_LIST','Kategoriliste');
define('_ADMIN_NAME','Navn');
define('_ADMIN_CODE','Kode');
define('_ADMIN_ORDER','Sortering');
define('_ADMIN_BACK','Tilbake');
define('_ADMIN_TEXT','Tekst');
define('_ADMIN_SHOW','Vis');
define('_ADMIN_MANAGER','Behandler');
define('_ADMIN_MAIL_LIST','E-postliste');
define('_ADMIN_PLEASE_SELECT','Vennligst velg');
define('_ADMIN_SUBSCRIBE_LIST','Subscribe list');
define('_ADMIN_SELECT','Velg');
define('_ADMIN_UPDATE','Oppdater');
define('_ADMIN_ADD_NEW','Legg til ny');
define('_ADMIN_SEND_REQUEST','Send gjestehenvendelser til');
define('_ADMIN_TIMELOG_DATE','Tidslogg etter dato');
define('_ADMIN_TIMELOG_USER','Tidslogg etter bruker');
define('_ADMIN_OPTIONS','Innstillinger');
define('_ADMIN_SYSTEM_NAME','Systemnavn');
define('_ADMIN_BASE_URL','Grunnadresse for denne installasjonen');
define('_ADMIN_REPLY_EMAIL','Svaradresse for varsler');
define('_ADMIN_LANGUAGE','Språk');
define('_ADMIN_ALLOW_VIEW_ITEM','Tillat anonyme brukere å se oppgaver');
define('_ADMIN_ALLOW_OPEN_ITEM','Tillat anonyme brukere å åpne nye oppgaver');
define('_ADMIN_ANONYMOUSLY','Anonym');
define('_ADMIN_EMAIL','E-post');
define('_ADMIN_DEFAULT_PROJECT_OWNER','Standard prosjekteier');
define('_ADMIN_NO_ONE','Ingen');
define('_ADMIN_SAVE_OPTIONS','Lagre innstillinger');
define('_ADMIN_EDIT_COMMENT','Rediger kommentar');
define('_ADMIN_COMMENT_BY','Kommentar av');
define('_ADMIN_SAVE_COMMENT','Lagre redigert kommentar');
define('_ADMIN_USER_LOCATION','Brukerplassering');
define('_ADMIN_LOCATION','Plassering');
define('_ADMIN_DST','DST');
define('_ADMIN_PROJECT_LIST','Prosjektliste');
define('_ADMIN_SELECT_ALL','Velg alle');
define('_ADMIN_VIEW_PROJECT','Vis prosjekt');
define('_ADMIN_MODIFY_ITEM','Endre oppgave');
define('_ADMIN_CLOSE_ITEM','Lukk oppgave');
define('_ADMIN_DELETE_ITEM','Slett oppgave');
define('_ADMIN_ADD_COMMENT','Legg til kommentar');
define('_ADMIN_ADD_ATTACHMENT','Legg til vedlegg');
define('_ADMIN_SUBSCRIBE','Påmeld');
define('_ADMIN_DETAILS_EDIT','Details/Edit');
define('_ADMIN_CREDIT_HOURS','Credit Hours');
define('_ADMIN_START','Start');
define('_ADMIN_END','End');
define('_ADMIN_DURATION','Duration');
define('_ADMIN_TASK_TOTAL','Task total');
define('_ADMIN_PROJECT_TOTAL','Project total');
define('_ADMIN_TOTAL_USER','Total user');
define('_ADMIN_TOTAL_COMANY','Total company');
define('_ADMIN_PUBLIC','Public');
define('_ADMIN_AGENT','Agent');
define('_ADMIN_DELETE','Delete');
define('_ADMIN_VERSION','Version');
define('_ADMIN_RELEASE_NAME','Release name');
define('_ADMIN_DATE','Date');
define('_ADMIN_DEFINE_TIMELOG_TYPES','Define Timelog Types');
define('_ADMIN_CHANGE','Change');
define('_ADMIN_LAST','Last');
define('_ADMIN_ACTION','Action');
define('_ADMIN_DUE','Due');
define('_ADMIN_CLOSED_ITEMS','Closed items');
define('_ADMIN_NO_CHANGE','DO NOT change the ID values after timelog entries have been made!');
define('_ADMIN_FROM','From');
define('_ADMIN_TO','To');
define('_ADMIN_USER','Bruker');
define('_ADMIN_ALL','All');
define('_ADMIN_TOTAL','Total');
define('_ADMIN_SAVE','Save');
define('_ADMIN_RUN','Run');
define('_ADMIN_ORDER_IN_CATLIST','The order these items will appear in the Category list');
define('_ADMIN_SHOW_IN_CATLIST','Show this item in the Category list');
define('_ADMIN_RECEIVE_NOTIF','This person will receive notifications when a task in this category is opened');
define('_ADMIN_ORDER_IN_ITEMTYPELIST','The order these items will appear in the ItemType list');
define('_ADMIN_SHOW_IN_ITEMTYPELIST','Show this item in the ItemType list');
define('_ADMIN_REMOVE_ITEM','You are about to permanently remove item');
define('_ADMIN_DELETE_ALL','This will delete all comments, attachments and time log entries.');
define('_ADMIN_SURE_TO_DO','Are you sure you want to do this?');
define('_ADMIN_TASKS','Tasks');

// details_item
define('_DI_ITEM','Oppgave');
define('_DI_EDIT_ITEM','Endre oppgave');
define('_DI_EDIT_THIS_ITEM','Endre denne oppaven');
define('_DI_OPENED_BY','Åpnet av');
define('_DI_LAST_EDITED_BY','Sist endret av');
define('_DI_ITEM_TYPE','Oppgavetype');
define('_DI_PROJECT','Prosjekt');
define('_DI_STATUS','Status');
define('_DI_SUMMARY','Oppsumering');
define('_DI_OWNER','Eier');
define('_DI_REQUEST_TYPE','Type forespørsel');
define('_DI_NEED_BY','Behøves til');
define('_DI_START_DATE','Startdato');
define('_DI_END_DATE','Stoppdato');
define('_DI_DURATION','Varighet');
define('_DI_VIEW_TASK','Vis oppgave');
define('_DI_ASSIGNED_TO','Tildelt');
define('_DI_OPENED','Åpnet');
define('_DI_ANONYMOUS','Anonym');
define('_DI_URGENCY','Viktighet');
define('_DI_LOGGED_HOURS','Loggede tidsbruk');
define('_DI_ESTIMATED_HOURS','Beregnet tidsbruk');
define('_DI_DETAILS','Detaljer');
define('_DI_UPDATE','Oppdater');
define('_DI_START_TIMER','Start tidslogg');
define('_DI_REOPEN','Gjennåpne');
define('_DI_SAVE_DETAILS','Lagre detaljer');
define('_DI_CANCEL_EDIT','Avbryt endring');
define('_DI_ANONYMOUS_SUBMITTER','Anonym innsender');
define('_DI_COMPLETE','komplett');
define('_DI_CLOSED_BY','Lukket av');
define('_DI_CLOSE_TASK','Lukk oppgave');
define('_DI_ATTACHMENTS','Vedlegg');
define('_DI_TOTAL_TIMELOG','Total tidsbruk');
define('_DI_TOTAL_ELAPSED','Total elapsed');
define('_DI_ELAPSED','Elapsed');
define('_DI_TIMELOG','Tidslogg');
define('_DI_RESOURCES','Resurser');
define('_DI_END','End');
define('_DI_STATUS','Status');
define('_DI_TYPE','Type');
define('_DI_RELATED_TASKS','Relatert oppgave');
define('_DI_EDIT','Endre');
define('_DI_DELETE','Slett');
define('_DI_NO_ONE','Ingen');
define('_DI_USER','Bruker');
define('_DI_COMMENTS','Kommentar');
define('_DI_COMMENT_BY','Kommentert av');
define('_DI_ADD_COMMENT','Legg til kommentar');
define('_DI_EDIT_COMMENT','Endre kommentar');
define('_DI_DELETE_COMMENT','Slett kommentar');
define('_DI_CLOSE','Lukk');
define('_DI_DONE','Utført');
define('_DI_POST_DONE_COMMENT','Should be used by assignee when item is believed to be done');
define('_DI_POST_COMMENT_CLOSE','Owner of task uses this to confirm task is completed');
define('_DI_POST_COMMENT_SENT','This will post the comment and sent email');
define('_DI_FILE_UPLOADED_BY','Fil lastet opp av');
define('_DI_UPLOAD_FILE_ATTACH','Last opp filvedlegg');
define('_DI_DESCRIPTION','Beskrivelse');
define('_DI_ATTACH_DESCR','Beskrivelse av vedlegg');
define('_DI_UPLOAD_NOW','Last opp!');
define('_DI_REMOVE','Fjern');
define('_DI_ADD','Legg til');
define('_DI_ADD_TO_LIST','Legg til liste');
define('_DI_SELECT_PLEASE','Vennligst velg');
define('_DI_ADD_MYSELF_TO_LIST','Legg meg selv til listen');
define('_DI_NO_ITEM','Finnes ingen oppgave med denne id!');
define('_DI_NO_RIGHT_TO_ACCESS','Du har ikke tilgangsrettigheter til denne siden!');
define('_DI_MUST_LOGIN_TO_ACCESS','Du må logge inn for å få tilgang!');
define('_DI_NOTIFY','Varsle');
define('_DI_REALLY_DELETE_COMMENT','Virkelig slette denne kommentaren?');
define('_DI_DELETE_ITEM','Slett oppgave');
define('_DI_NAME','Navn');
define('_DI_LOCATION','Plassering');
define('_DI_TIME','Tid');
define('_DI_USERS','Brukere');
define('_DI_WRONG_INPUT','Feil verdi oppgitt');
define('_DI_NO_ACCESS_TO_ITEM','You not have access to this item');
define('_DI_VIEW_ATTACH','vis');
define('_DI_SAVE_ATTACH','lagre');
define('_DI_VIEW','Vis');
define('_DI_DOWNLOAD','Last ned');
define('_DI_DELETE_TIMELOG','Slett denne tidsloggen');
define('_DI_MUST_PROVIDE_SUMMARY','Du må fylle inn en oppsumering.');
define('_DI_MUST_PROVIDE_EMAIL','Du må fylle inn en e-postadresse.');
define('_DI_MUST_PROVIDE_TASKDETAILS','Du må fylle inn oppgavedetaljer.');
define('_DI_TOTAL','Total');
define('_DI_START','Start');
define('_DI_STARTED','Startet');
define('_DI_STOP','Stopp');
define('_DI_ANONYM_ITEM_FROM','Anonym oppgave fra');
define('_DI_ASSIGNED_TO_ME','Tildelt meg');
define('_DI_TIMELOG1','Tidslogg');
define('_DI_TIMELOG2','Tidslogg');
define('_DI_POST_REOPEN','Klikk om det ikke er gjort');
define('_DI_ADD_ME_RES','Legg meg til som ressurs');

// functions.inc
define('_FUNC_NOTIFICATION_FROM','Notification from');
define('_FUNC_AUTOGEN_MESSAGE_NOT_REPLY','THIS IS AN AUTOMATICALLY GENERATED MESSAGE, DO NOT REPLY');
define('_FUNC_BACK','Tilbake');
define('_FUNC_FORWARD','Fremover');

// index
define('_INDEX_FILTER','Filter');
define('_INDEX_GO','Go');
define('_INDEX_ALL','Alle');
define('_INDEX_NOT_ASSIGNED','Not yet assigned');
define('_INDEX_ALL_CATEGORIES','All Categories');
define('_INDEX_ALL_OPEN_TASKS','All Open Tasks');
define('_INDEX_SORT_BY_COLUMN','Sort by this column');
define('_INDEX_ID','ID');
define('_INDEX_TYPE','Type');
define('_INDEX_PROJECT','Prosjekt');
define('_INDEX_PROJECTS','Prosjekter');
define('_INDEX_URGENCY','Viktighet');
define('_INDEX_SUMMARY','Oppsumering');
define('_INDEX_AGE','Alder');
define('_INDEX_STATUS','Status');
define('_INDEX_PROGRESS','Progress');
define('_INDEX_COMPLETE','complete');
define('_INDEX_PREVIOUS','Forrige');
define('_INDEX_NEXT','Neste');
define('_INDEX_ALL_ITEMS','Alle oppgaver');
define('_INDEX_ASSIGNED_TO_ME','Tildelt meg');
define('_INDEX_OWNED_BY_ME','Eiet av meg');
define('_INDEX_UNASSIGNED','Ikke tildelt');
define('_INDEX_OVERDUE','På overtid:');
define('_INDEX_DUE_TODAY','Utløper i dag:');
define('_INDEX_DUE_THIS_WEEK','Utløper denne uke:');
define('_INDEX_TIMERS_OPEN','Timers open');
define('_INDEX_LAST_COMMENT','Last Comment');
define('_INDEX_ACTION','Handling');
define('_INDEX_LAST','Siste');
define('_INDEX_HRS','Timer');
define('_INDEX_DUE','Utløp');
define('_INDEX_UPDATED_TODAY','Oppdatert i dag');
define('_INDEX_ANONYM','Anonym:');
define('_INDEX_SEARCH_PROJECT','Search this project');
define('_INDEX_CLOSED','Lukket');
define('_INDEX_CLOSED_TODAY','Lukket i dag');
define('_INDEX_DUE_IN_VERSION','Due In Any Version');
define('_INDEX_DUE_IN','Due In');
define('_INDEX_CATEGORY','Category');
define('_INDEX_LAST_EDITED','Last Edited');
define('_INDEX_ASSIGNED_TO','Assign To');
define('_INDEX_OPERATING_SYSTEM','Operating System');
define('_INDEX_REPORTED_IN','Reported In');
define('_INDEX_OPENED_BY','Opened By');
define('_INDEX_COMMENTS','Comments');
define('_INDEX_ATTACHMENTS','Attachments');
define('_INDEX_SHOW','Show');
define('_INDEX_OPEN','Åpen');
define('_INDEX_USER','Bruker');
define('_INDEX_USERS','Users');
define('_INDEX_SEARCH_RESULT','Search result');
define('_INDEX_RESET_SEARCH','Reset the search criteria');
define('_INDEX_ITEM_TYPE','Type');
define('_INDEX_PRIORITY','Priority');
define('_INDEX_DONE_ITEMS','Done items');

// main
define('_MAIN_FILE_NOT_EXIST','File does not exist.  Contact the Administrator for this project.');
define('_MAIN_ITEM','Item');
define('_MAIN_GO','Go!');
define('_MAIN_ALL_ITEMS','All');
define('_MAIN_ASSIGNED_TO_ME','Assigned To Me');
define('_MAIN_OWNED_BY_ME','Owned by Me');
define('_MAIN_CLOSED_ITEMS','Closed Items');
define('_MAIN_ADD_NEW','Add new');
define('_MAIN_LOGOUT','Logout');
define('_MAIN_OPTIONS','Options');
define('_MAIN_USERS','Users');
define('_MAIN_CATEGORIES','Categories');
define('_MAIN_TIMELOG_TYPES','Timelog types');
define('_MAIN_PROJECTS','Projects');
define('_MAIN_COMPANY','Company');
define('_MAIN_REPORTS','Reports');
define('_MAIN_CLOSED','Closed');
define('_MAIN_ADMIN_MENU','Administrator Menu');
define('_MAIN_ALL_HOME','All');
define('_MAIN_SHOW','Show');
define('_MAIN_ALL_CATEGORIES','All');
define('_MAIN_ALL_ITEMS','All items');
define('_MAIN_ITEMS_ASSIGNED_TO_ME','Items assigned to me');
define('_MAIN_ITEMS_REPORTED_BY_ME','Items reported by me');
define('_MAIN_ITEMS_WATCH','Items I watch');
define('_MAIN_PROJECT','Project:');
define('_MAIN_SHOW_ITEM','Show Item');
define('_MAIN_LOGIN_REQUIRED','Task Hopper - Login required');
define('_MAIN_TASK_HOPPER','Task Hopper');
define('_MAIN_SHOWITEM','Show Item');

// modify_item
define('_MI_MODIFY','Modify');
define('_MI_NEW_TASK','New Task:');
define('_MI_NEW_TASK_ADDED','Your new ticket has been added.');
define('_MI_WAIT_WHILE_TRANSFER','Please wait while you are transferred...');
define('_MI_FILL_SUMMARY_DETAILS','You need to fill in both the summary and the details.');
define('_MI_GO_BACK','Go back.');
define('_MI_SUMMARY','Summary:');
define('_MI_TASK_TYPE','Ticket Type:');
define('_MI_PROJECT','Project:');
define('_MI_STATUS','Status:');
define('_MI_NEEDED_BY','Needed by:');
define('_MI_START_DATE','Start date:');
define('_MI_URGENCY','Urgency:');
define('_MI_REQUEST_TYPE','Request type:');
define('_MI_DETAILS','Details:');
define('_MI_ITEM_UPDATED','Item has been updated.');
define('_MI_ASSIGN_TO_ME','Assign To Me');
define('_MI_ITEM_DELETED','Item has been deleted');
define('_MI_COMPANY_DELETED','Company has been deleted');
define('_MI_PROJECT_DELETED','Project has been deleted');
define('_MI_ITEM_CLOSED','Item has been closed.');
define('_MI_ITEM_REOPENED','Item has been re-opened.');
define('_MI_COMMENT_ADDED','Comment has been added.');
define('_MI_COMMENT_CLOSED','The item has been closed.');
define('_MI_COMMENT_COMPLETED','The item completed.');
define('_MI_NO_ONE','No-one');
define('_MI_TIMELOG_SAVED','Your timelog saved');
define('_MI_TIMELOG_UPDATED','Your timelog updated');
define('_MI_TIMELOG_CLOSED','Your timelog closed');
define('_MI_ERROR_TIMELOG','The End Date must be bigger than Start Date,please update your End Date');
define('_MI_CLOSE_YOUR_TIMELOG','You can close just your timelog!');
define('_MI_TIMELOG_TIMED_OUT','Your session has timed out. Please log back in, then close the timelog.');
define('_MI_COMMENT_TO_ASSIGNED_TASK','has added a comment to a task that have been assigned:');
define('_MI_COMMENT_TO_TASK','has added the following comment to this task.');
define('_MI_NO_COMMENT','You really should enter a comment before clicking the submit button.');
define('_MI_NO_COMPANY','Please set the company name.');
define('_MI_FILE_UPLOADED','File has been uploaded.');
define('_MI_NO_DESCRIPTION','You didn\'t fill the description.');
define('_MI_DESCRIPTION','Description:');
define('_MI_FILE_UPLOAD_ERROR','There was an error uploading your file. The <i>attachments/</i> already exist.');
define('_MI_CONTACT_ADMIN','Contact the Administrator for this project.');
define('_MI_NO_FILE_DESCR','You didn\'t select a file and/or enter a description.');
define('_MI_USER_UPDATED','User details have been updated');
define('_MI_NO_NAME_EMAIL','You didn\'t fill in both the Real Name and Email Address fields.');
define('_MI_GROUP_UPDATED','Group definition updated.');
define('_MI_GROUP_DESCR','You didn\'t fill in the Group name and description fields.');
define('_MI_NO_FIELDS','Please fill in all fields.');
define('_MI_LIST_UPDATED','List has been updated.');
define('_MI_COMPLETE_FIELD','Please complete the field');
define('_MI_LISTITEM_ADDED','New list item added.');
define('_MI_RELATEDTASK_ADDED','Related task added to list.');
define('_MI_TASK_ON_RELATEDTASKLIST','That task is already on this related task list.');
define('_MI_RELATEDTASK_REMOVED','Related task removed from list.');
define('_MI_USER_ADDED','User added to notification list.');
define('_MI_USER_ON_NOTIFLIST','That user is already on the notification list for that task.');
define('_MI_USER_REMOVED','User removed from notification list.');
define('_MI_COMMENT_SAVED','Updated comment saved.');
define('_MI_ITEM_SAVED','Thank you, your item was saved.');
define('_MI_SELECT_RESOURCE','Please select from resource list!');
define('_MI_RESOURCE_SAVED','The item resources saved');
define('_MI_RESOURCE_DELETED','The selected resource will be deleted');
define('_MI_OPTIONS_SAVED','Global options saved');
define('_MI_COMMENT_DELETED','Comment has been deleted.');
define('_MI_PROJECT_UPDATED','Updated the project preferences');
define('_MI_RETURN_TO_ITMES','return to my items');
define('_MI_USER_LOCATION_UPDATED','User location updated');
define('_MI_COMPANY_SAVED','The Company saved');
define('_MI_COMPANY_UPDATED','The Company updated');
define('_MI_SESSION_EXPIRED','Login Session Lifetime expired, please login');
define('_MI_DUPLICATE','Duplicate entry');
define('_MI_TIMELOG_PAUSED','Your timelog paused');
define('_MI_TIMELOG_CONTINUED','Your timelog continued');

// new_item
define('_NI_NEW_ITEM','Ny oppgave');
define('_NI_CREATE_ITEM','Opprett en ny oppgave');
define('_NI_EMAIL','E-post');
define('_NI_NEEDED_BY','Behøves til');
define('_NI_START_DATE','Startdato');
define('_NI_PROJECT','Prosjekt');
define('_NI_SUMMARY','Oppsummering');
define('_NI_ITEM_TYPE','Oppgavetype');
define('_NI_CATEGORY','Kategori');
define('_NI_STATUS','Status');
define('_NI_ASSIGNED_TO','Tildel til');
define('_NI_NO_ONE','Ingen');
define('_NI_URGENCY','Viktighet');
define('_NI_ESTIMATED','Beregnet');
define('_NI_UPLOAD_FILE','Last opp filvedlegg');
define('_NI_REPORTED_VERSION','Reported Version');
define('_NI_DETAILS','Detaljer');
define('_NI_ATTACH_DESCR','Beskrivelse av vedlegg');
define('_NI_ADD_ITEM','Legg til');
define('_NI_ACTION_NEEDED','Nødvendig handling');
define('_NI_NO_PERMISSION','You don\'t have permission to use this page');
define('_NI_MUST_PROVIDE_SUMMARY','You must provide a summary.');
define('_NI_MUST_PROVIDE_EMAIL','You must provide an email address.');
define('_NI_MUST_PROVIDE_PROJECT','Please select a project');
define('_NI_MUST_PROVIDE_TASKDETAILS','You must provide ticket details.');
define('_NI_SET_TIMELOGTYPE','Please set the Timelog type');
define('_NI_MUST_PROVIDE_REQTYPE','Please set the Action Needed');
define('_NI_MUST_PROVIDE_ITEMTYPE','Please set the item type');
define('_NI_SET_TIMELOGDESC','Please set the Timelog description');

// options
define('_OPTIONS_OPTIONS','Options');
define('_OPTIONS_ALL_OPEN','Alle åpne');
define('_OPTIONS_ASSIGNED_TO_ME','Assign To Me');
define('_OPTIONS_OWNED_BY_ME','Owned by Me');
define('_OPTIONS_ADD_NEW','Add new');
define('_OPTIONS_STARTUP_LIST','Startup List');
define('_OPTIONS_ITEMS_ORDER','Table Items Order by');
define('_OPTIONS_DUEDAYS_PRIORITY','Due Days/Priority');
define('_OPTIONS_ITEM_ID','Item ID');
define('_OPTIONS_PRIORITY_DUEDAYS','Priority/Due Days');
define('_OPTIONS_TIMEZONE_DISPLAY','Timezone Display');
define('_OPTIONS_SERVER_TIME','Server Time');
define('_OPTIONS_LOCAL_TIME','Local Time');
define('_OPTIONS_BOTH','Both');
define('_OPTIONS_PROJECT','Project');
define('_OPTIONS_LINE_PAGE','Line per page');
define('_OPTIONS_SAVE','Save');

// contact_type
define('_CONTACT_CLIENTS','Clients');
define('_CONTACT_DEPARTMENTS','Departments');
define('_CONTACT_STORES','Stores');
define('_CONTACT_DIVISIONS','Divisions');
define('_CONTACT_GROUPS','Groups');

// itemstatus_type
define('_IS_NEW','Ny');
define('_IS_ACKNOWLEDGED','Acknowledged');
define('_IS_SCHEDULED','Scheduled');
define('_IS_IN_PROCESS','Påbegynt');
define('_IS_DONE','Utført');
define('_IS_CANCELLED','Kanselert');
define('_IS_CLOSED','Lukket');
define('_IS_NEW_CODE','NEW');
define('_IS_ACK_CODE','ACK');
define('_IS_SCH_CODE','SCH');
define('_IS_INP_CODE','INP');
define('_IS_DON_CODE','DON');
define('_IS_CAN_CODE','CAN');
define('_IS_CLO_CODE','CLO');

// projectstatus_type
define('_PS_PLANNING','Planlegges');
define('_PS_ACTIVE','Aktiv');
define('_PS_COMPLETED','Fullført');
define('_PS_ONHOLD','På vent');
define('_PS_DONE','Utført');
define('_PS_CANCELLED','Kanselert');

// request_type
define('_REQUEST_INFORMATION_ONLY','information only');
define('_REQUEST_SCHEDULE_START','schedule to start');
define('_REQUEST_REQUEST_QUOTE','request for quote');
define('_REQUEST_REQUEST_INFO','request for information');
define('_REQUEST_REQUEST_SCHEDULE','request for schedule');

define('_REQUEST_INF_ONLY','IFO');
define('_REQUEST_STS_CODE','STS');
define('_REQUEST_RFQ_CODE','RFQ');
define('_REQUEST_RFI_CODE','RFI');
define('_REQUEST_RTS_CODE','RTS');

// responses_type
define('_RESPONSES_DATE_TIME','Date/Time');
define('_RESPONSES_RESPONSE_BY','Response By');
define('_RESPONSES_MESSAGE','Message');

// timelog_type
define('_TIMELOG_DEVELOPMENT','Utvikling');
define('_TIMELOG_DOCUMENTING','Dokumentering');
define('_TIMELOG_CUSTOM_SUPPORT','Kundestøtte');
define('_TIMELOG_BUG_FIX','Feilfik');
define('_TIMELOG_OTHER','Annet');

// urgency_type
define('_URGENCY_LOW','1-Lav');
define('_URGENCY_MEDIUM','2-Medium');
define('_URGENCY_HIGH','3-Høy');
define('_URGENCY_URGENT','4-Viktig');
define('_URGENCY_CRITICAL','5-Kritisk');

//download
define('_BACK','Back');
define('_DOWNLOAD_ERROR','Error in download operation');
define('_NO_FILE','File not exist error- contact Your system administrator');


// timezone
define('_TZ_ENIWETOK_KWAJALEIN','(GMT -12:00) Eniwetok, Kwajalein');
define('_TZ_MIDWAY_ISLAND_SAMOA','(GMT -11:00) Midway Island, Samoa');
define('_TZ_HAWAII','(GMT -10:00) Hawaii');
define('_TZ_ALASKA','(GMT -9:00) Alaska');
define('_TZ_PACIFIC_TIME','(GMT -8:00) Pacific Time (US & Canada)');
define('_TZ_MOUNTAIN_TIME','(GMT -7:00) Mountain Time (US & Canada)');
define('_TZ_CENTRAL_TIME','(GMT -6:00) Central Time (US & Canada)');
define('_TZ_EASTERN_TIME','(GMT -5:00) Eastern Time (US & Canada)');
define('_TZ_ATLANTIC_TIME','(GMT -4:00) Atlantic Time (Canada)');
define('_TZ_NEWFOUNDLAND','(GMT -3:30) Newfoundland');
define('_TZ_BRAZIL_BUENOS_AIRES','(GMT -3:00) Brazil, Buenos Aires');
define('_TZ_MID_ATLANTIC','(GMT -2:00) Mid-Atlantic');
define('_TZ_AZORES_CAPE_VERDE_ISLANDS','(GMT -1:00) Azores, Cape Verde Islands');
define('_TZ_WET_CASABLANCA','(GMT) Western Europe Time, Casablanca');
define('_TZ_CET','(GMT +1:00) CET(Central Europe Time)');
define('_TZ_EET','(GMT +2:00) EET(Eastern Europe Time)');
define('_TZ_BAGHDAD_KUWAIT_RIYADH','(GMT +3:00) Baghdad, Kuwait, Riyadh');
define('_TZ_TEHRAN','(GMT +3:30) Tehran');
define('_TZ_ABU_DHABI_MUSCAT','(GMT +4:00) Abu Dhabi, Muscat');
define('_TZ_KABUL','(GMT +4:30) Kabul');
define('_TZ_EKATERINBURG_ISLAMABAD','(GMT +5:00) Ekaterinburg, Islamabad');
define('_TZ_BOMBAY_CALCUTTA','(GMT +5:30) Bombay, Calcutta');
define('_TZ_ALMATY_DHAKA_COLOMBO','(GMT +6:00) Almaty, Dhaka, Colombo');
define('_TZ_BANGKOK_HANOI','(GMT +7:00) Bangkok, Hanoi');
define('_TZ_BEIJING_PERTH','(GMT +8:00) Beijing, Perth');
define('_TZ_TOKYO_SEOUL_OSAKA','(GMT +9:00) Tokyo, Seoul, Osaka');
define('_TZ_ADELAIDE_DARWIN','(GMT +9:30) Adelaide, Darwin');
define('_TZ_EAST_AUSTRALIAN_STANDARD','(GMT +10:00) (East Australian Standard)');
define('_TZ_MAGADAN_SOLOMON_ISLANDS','(GMT +11:00) Magadan, Solomon Islands');
define('_TZ_AUCKLAND_WELLINGTON','(GMT +12:00) Auckland, Wellington');

// modules/mod_thsearch
define('_ITEM','Oppgave');
define('_GO','Gå til');

// modules/mod_thonline
define('_NO_ONLINE_USERS','Ingen brukere pålogget');

// modules/mod_thopper
define('_YOU_ARE_ADMIN','Du er admin');
define('_ADD_NEW','Legg til');
define('_ALL_OPEN','Alle åpne');
define('_ASSIGNED_TO_ME','Tildelt meg');
define('_OWNED_BY_ME','Eiet av meg');
define('_CHANGED_TODAY','Endret i dag');
define('_CLOSED_TODAY','Lukket i dag');
define('_DONE','Fullført');
define('_TIMERS_OPEN','Tidslogg åpen');
define('_UNASSIGNED','Ikke tildelte');
define('_OPTIONS','Innstillinger');
define('_NOT_FOUND_ITEMS','Not found items');
define('_COMPANY_REPORT','Company Report');
define('_MY_TIMELOG',' Mine tidslogger');

//delete
define('_DEL_YES','Yes');
define('_DEL_SURE','Are you sure to do?');
define('_DEL_ITEM','Do you want to DELETE item ');
define('_DEL_COMPANY','Do you want to DELETE company ');
define('_DEL_INFO','This will delete all comments/attachments/timelog for this item!');
define('_DEL_INFO_COMPANY','This will delete all projects/items/comments/attachments/timelog for this company!');
define('_DEL_PROJECT','Do you want to DELETE project ');
define('_DEL_INFO_PROJECT','This will delete all items/comments/attachments/timelog for this project!');

define('_NO_TIMELOG','Ingen åpne tidslogger');
// -- General
define('_FROM','Fra');
define('_TO','Til');
define('_PROJECT','Prosjekt');
define('_RUN','Kjør');
define('_ALL','Alle');
define('_NOT_DEFINED','Ikke definert');
define('_NOT_FOUND_TL','Not found timelog');
define('_EXPORT','Eksporter');
define('_EXPORT_HTML','Eksporter til html-fil');

define('_CONTINUE','Fortsett');//
define('_PAUSE','Pause');
define('_CLEAR','Tøm');
?>

