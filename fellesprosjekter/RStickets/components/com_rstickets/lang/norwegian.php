<?php
/**
* @version 1.0.0
* @package RStickets! 1.0.0
* @copyright (C) 2007-2008 www.rsjoomla.com
* @license Commercial License, http://www.rsjoomla.com/license/rstickets.html
*/

//PRODUCT INFO - DO NOT CHANGE
DEFINE('RST_PRODUCT','RStickets!');
DEFINE('RST_VERSION','1.0.0');
DEFINE('RST_KEY','8TIK5J3908');
DEFINE('RST_COPYRIGHT','&copy;2007-2008 www.rsjoomla.com');
DEFINE('RST_LICENSE','Commercial License');
DEFINE('RST_AUTHOR','<a href="http://www.rsjoomla.com" target="_blank">www.rsjoomla.com</a>');
DEFINE('RST_WEBSITE','http://www.rsjoomla.com/index.php');


//TOOLBAR
DEFINE('RST_BACKEND_TOOLBAR_MAIN','RStickets');
DEFINE('RST_BACKEND_TOOLBAR_SUPPORT','Support');
DEFINE('RST_BACKEND_TOOLBAR_CLOSE','Lukk');
DEFINE('RST_BACKEND_TOOLBAR_SAVE','Lagre');

//CONTROL PANEL
DEFINE('RST_BACKEND_CPANEL_CONFIGURATION_EDIT','Konfigurasjon');
DEFINE('RST_BACKEND_CPANEL_UPDATES_MANAGE','Se etter oppdateringer');
DEFINE('RST_BACKEND_CPANEL_SUPPORT','Support');  
DEFINE('RST_BACKEND_CPANEL_FRONTEND','Brukerside');  
DEFINE('RST_BACKEND_CPANEL_DEPARTMENTS','Avdelinger');  
DEFINE('RST_BACKEND_CPANEL_GROUPS','Grupper');  
DEFINE('RST_BACKEND_CPANEL_STAFF','Personale');
DEFINE('RST_BACKEND_CPANEL_TICKETS','Saker');  

DEFINE('RST_VERSION_TITLE','Installert versjon:');
DEFINE('RST_AUTHOR_TITLE','Opphav:');
DEFINE('RST_CODE_TITLE','Din kode');
DEFINE('RST_REGISTER','Oppdater registrering');
DEFINE('RST_REGISTER_MODIFY','Endre registrering');

//INSTALLER
DEFINE('RST_INSTALLER_TABLES_OK','<font color="green"><b>Vellykket</b></font>, RStickets!-tabellene ble opprettet<br/>');
DEFINE('RST_INSTALLER_XML_OK','');
DEFINE('RST_INSTALLER_PLUGIN_OK','<font color="green"><b>Vellykket</b></font>, %s-programtillegget ble lagt til<br/>');
DEFINE('RST_INSTALLER_MODULE_OK','<font color="green"><b>Vellykket</b></font>, %s-modulen ble lagt til<br/>');
DEFINE('RST_INSTALLER_PERMISSIONS_OK','<font color="green"><b>Vellykket</b></font>, rettigheter  ble endret for mappen %s til %s<br/>');
DEFINE('RST_INSTALLER_DB_OK','<font color="green"><b>Vellykket</b></font>, database oppdatert<br/>');

DEFINE('RST_INSTALLER_TABLES_ERROR','<font color="red"><b>Error</b></font>, RStickets! Tables Were not created properly:<br/>%s<br/>');
DEFINE('RST_INSTALLER_PLUGIN_ERROR','<font color="red"><b>Error</b></font>, Could not add plugin. Error:<br/>%s<br/>');
DEFINE('RST_INSTALLER_XML_ERROR','<font color="red"><b>Error</b></font>, Could not add xml file. Error:<br/>%s<br/>');
DEFINE('RST_INSTALLER_MODULE_ERROR','<font color="red"><b>Error</b></font>, Could not add module. Error:<br/>%s<br/>');
DEFINE('RST_INSTALLER_PERMISSIONS_ERROR','<font color="red"><b>Error</b></font>, Permissions could not be changed for %s. Please set them manually to %s<br/>');
DEFINE('RST_INSTALLER_DB_ERROR','<font color="red"><b>Error</b></font>, Database could not be Updated:<br/>%s<br/>');
DEFINE('RST_INSTALLER_WELCOME','<b>RStickets! 1.0.0 Component for Joomla!</b><br/>
&copy; 2007-2008 by <a href="http://www.rsjoomla.com" target="_blank">http://www.rsjoomla.com</a><br/>
All rights reserved.
<br/><br/>
This Joomla! Component has been released under a <a href="http://www.rsjoomla.com/license/rstickets.html" target="_blank">Commercial License</a>.<br/>
<br/><br/>

<b>Visit <a href="http://www.rsjoomla.com/index.php/Customer-Support.html" target="_blank">http://www.rsjoomla.com/index.php/Customer-Support.html</a> - for common issues, tech support, user manual, additional downloads and up to date knowledge base articles related to RStickets!.</b><br/><br/>

Thank you for using RStickets!.
<br/><br/>
The rsjoomla.com team.
<br/><br/>');


//MAIN SCREEN

DEFINE('RST_CODE_TRYOUT','After typing your license code please follow the <a href="?option=com_rstickets&task=updates.manage">updates procedure</a> in order to remove the tryout link');

DEFINE('RST_FRONTEND_THANKYOU','The form has been submitted successfully. Thank you!');
DEFINE('RST_FRONTEND_THANKYOU_BUTTON','<br/><input type="button" name="continue" value="Continue" onclick="%s"/>');

//UPDATES

DEFINE('RST_BACKEND_UPDATESMANAGE_INSTRUCTIONS','<h2>Updates Instructions</h2>
<ul>
	<li>Whenever we release a new update, you are able to download it directly from this screen. Save the file on your computer, then click on Browse, and then install the update.</li>
</ul>');
DEFINE("RST_BACKEND_UPDATESMANAGE_BUTTON","Update");
DEFINE('RST_BACKEND_UPDATECHECK_OK','Vellykket');
DEFINE('RST_BACKEND_UPDATECHECK_NOINSTALL','Please select a valid file.');
DEFINE('RST_BACKEND_UPDATECHECK_BADFILE','The file you selected is not valid.');
DEFINE('RST_BACKEND_UPDATECHECK_STATUSRSTBACKUP','Backup loaded.');
DEFINE('RST_BACKEND_UPDATECHECK_STATUSRSTUPDATE','The component was updated.');
DEFINE('RST_BACKEND_UPDATECHECK_STATUSRSTPLUGIN','Plugin loaded.');

DEFINE('RST_BACKEND_UPDATESMANAGE_UPDATE_TITLE','Upload Package File');
DEFINE('RST_BACKEND_UPDATESMANAGE_UPDATE_FILE','Package File:');
DEFINE('RST_BACKEND_UPDATESMANAGE_WRITABLE','(<font color="green"><b>WRITABLE</b></font>)');
DEFINE('RST_BACKEND_UPDATESMANAGE_NOTWRITABLE','(<font color="red"><b>NOT WRITABLE</b></font>)');
DEFINE('RST_BACKEND_UPDATESMANAGE_PERMISSIONS','Please set writable permissions to the folders above and their enclosed items. You must use your ftp client and set permissions to 777 in order to make the folders writable.');



// en_US
// DEFINE THE LANGUAGE CONSTANTS
DEFINE('RST_TITLE','RSjoomla! brukerstøtte');

// EMAIL TEMPLATES
// THE TOP EMAIL TEMPLATE - INCLUDED WITH EVERY EMAIL SENT BY THE TICKETING SYSTEM
DEFINE('RST_TEMPLATE_TOP','<html><head><title>RSTickets! brukerstøtte</title></head><body>');
// THE BOTTOM EMAIL TEMPLATE - INCLUDED WITH EVERY EMAIL SENT BY THE TICKETING SYSTEM
DEFINE('RST_TEMPLATE_BOTTOM','</body></html>');
// NEW USER EMAIL TEMPLATE
// {username} - The new user's username
// {password} - His passsword
// these variables are automatically replaced by the script
DEFINE('RST_NEW_USER','<p>Her er dine brukeropplysninger for vårt system:</p>
		<p>Brukernavn: <strong>{username}</strong></p>
		<p>Passord: <strong>{password}</strong></p>
		<p>Vær oppmerksom på at dette er ditt midlertidige passord, du kan logge på og endre det når du ønsker.</p>
		<p>Du kan logge på <br/><br/>
		  <a href="{live_site}/index.php?option=com_rstickets">vår brukerstøtte</a><br/>, 
		  og gå til <a href="{live_site}/index.php?option=com_rstickets&page=my_tickets">\"Mine saker\"</a> for å se status på disse.</p>');
// NEW USER EMAIL SUBJECT
DEFINE('RST_NEW_USER_SUBJECT','Your account');
// NEW TICKET ADDED -> THE EMAIL TEMPLATE THE CUSTOMER WILL RECEIVE
// {fullname} - The customer's full name
// {message} - The ticket body
// these variables are automatically replaced by the script
DEFINE('RST_ADD_TICKET_CUSTOMER','{reply_above}<br />Vennligst ikke svar på denne e-posten.<br /><br />Hei {fullname},<br/>
		  en ny sak er blitt opprettet. Logg inn på <br/><br/>
		  <a href="{live_site}/index.php?option=com_rstickets">vår brukerstøtte</a> <br/><br/>
		  og gå til <a href="{live_site}/index.php?option=com_rstickets&page=my_tickets">\"Mine saker\"</a> for å se status på din henvendelse.
		  <p>----------------------------------------------</p>'.
		  '<p>Dette er en kopi av din henvendelse.</p>
		  <p>------------------------------</p>
		  <p>{fullname}:<br />{message}</p>
		  <p>------------------------------</p>');

// NEW TICKET ADDED -> THE EMAIL TEMPLATE THE STAFF WILL RECEIVE
// {fullname} - The customer's full name
// {message} - The ticket body
// these variables are automatically replaced by the script
DEFINE('RST_ADD_TICKET_STAFF','{reply_above}<br />Vennligst ikke svar på denne e-posten.<br /><p>Dette er en ny henvendelse fra {fullname}. Logg inn på <br/><br/>
		   <a href="{live_site}/index.php?option=com_rstickets">vår brukerstøtte</a> <br/><br/>
		  og gå til <a href="{live_site}/index.php?option=com_rstickets&page=my_tickets">\"Mine saker\"</a> for å se status og eventuelt behandle denne.</p>
		  <p>------------------------------</p>
		  <p>{fullname}:<br />{message}</p>
		  <p>------------------------------</p>');

// NEW REPLY ADDED -> THE EMAIL TEMPLATE THE CUSTOMER WILL RECEIVE
// {fullname} - The staff's full name
// {message} - The reply body
// these variables are automatically replaced by the script  
DEFINE('RST_ADD_TICKET_REPLY_CUSTOMER','{reply_above}<br />Please do not reply to this email.<br /><p>This is a new reply from {fullname}. Please do not reply to this email. Please log in to <br/><br/>
		  <a href="{live_site}/index.php?option=com_rstickets">Our Support Center</a> <br/><br/>
		  and go to <a href="{live_site}/index.php?option=com_rstickets&page=my_tickets">My Tickets</a> in order to view the status of your support request.</p>
		<p>------------------------------</p>
		<p>{fullname}:<br />{message}</p>
		<p>------------------------------</p>');

// NEW REPLY ADDED -> THE EMAIL TEMPLATE THE STAFF WILL RECEIVE
// {fullname} - The customer's full name
// {message} - The reply body
// these variables are automatically replaced by the script  
DEFINE('RST_ADD_TICKET_REPLY_STAFF','{reply_above}<br />Please reply above this line.<br /><p>This is a new reply from {fullname}. Please do not reply to this email. Please log in to <br/><br/>
		  <a href="{live_site}/index.php?option=com_rstickets">Our Support Center</a> <br/><br/>
		  and go to <a href="{live_site}/index.php?option=com_rstickets&page=my_tickets">My Tickets</a> in order to view the status of your support request.</p>
		<p>------------------------------</p>
		<p>{fullname}:<br />{message}</p>
		<p>------------------------------</p>');
		
// NOTIFY A CUSTOMER IF HIS TICKET WENT INTO OVERDUE STATUS
// THIS HAPPENS IF AUTOCLOSE IS CONFIGURED
// THE EMAIL TEMPLATE SUBJECT
// {email_interval} - The number of days passed since customer's last reply
// these variables are automatically replaced by the script  
DEFINE('RST_NOTIFICATION_EMAIL_SUBJECT','Your ticket had no activity for {email_interval} days');
// THE EMAIL TEMPLATE
// {subject} - The ticket's subject
// {email_interval} - The number of days passed since customer's last reply
// {close_interval) - The number of days left until the ticket is autoclosed
// these variables are automatically replaced by the script  
DEFINE('RST_NOTIFICATION_EMAIL','<p>Your ticket with subject &quot;{subject}&quot; had no activity for {email_interval} days.</p>
		<p>It will be automatically closed in {close_interval} days if no additional action is performed.</p>
		Please log in to <br/><br/>
		  <a href="{live_site}/index.php?option=com_rstickets">Our Support Center</a> <br/><br/>
		  and go to <a href="{live_site}/index.php?option=com_rstickets&page=my_tickets">My Tickets</a> in order to view the status of your support request.');
// REJECT AN EMAIL IF CURRENT SETTINGS DON'T ALLOW IT (ACCEPT EMAILS FROM: REGISTERED USERS OR NOBODY)
// {accept} - Accept tickets by email setting
// these variables are automatically replaced by the script  
DEFINE('RST_REJECT_EMAIL','<p>Your ticket has been rejected because current settings don\'t allow opening a ticket by e-mail.</p>
		<p>Currently we accept tickets from: {accept}</p>
		Please log in to <br/><br/>
		  <a href="{live_site}/index.php?option=com_rstickets">Our Support Center</a> <br/><br/>
		  and go to <a href="{live_site}/index.php?option=com_rstickets&page=add_ticket">Submit Ticket</a> to submit a new ticket.');
		
// BUTTON TEXTS
DEFINE('BTN_LOGIN','Logg inn');
DEFINE('BTN_LOGOUT','Logg ut');
DEFINE('BTN_BACK','Tilbake');
DEFINE('BTN_SEARCH','Søk');
DEFINE('BTN_SAVE_SEARCH','Lagre søk');
DEFINE('BTN_DELETE','Slett');
DEFINE('BTN_EDIT','Rediger');
DEFINE('BTN_SUBMIT','Bruk');
DEFINE('BTN_UPDATE_SETTINGS','Oppdater innstillinger');
DEFINE('BTN_UPDATE','Oppdater');
DEFINE('BTN_CLOSE','Lukk');
DEFINE('BTN_FILTER','Filter');
DEFINE('BTN_RESET_SEARCH_FILTERS','Tilbakestill søkefiltre');
DEFINE('BTN_NEW_CUSTOM_FIELD','Legg til nytt egendefinert felt');
DEFINE('BTN_CLICK_REPLY','Klikk her for å svare');
DEFINE('BTN_CLICK_ATTACHMENT','Klikk her for å se vedlegg');
DEFINE('BTN_NOTIFY','Send påminnelse');
DEFINE('BTN_ADD_NOTE','Legg til notat');
DEFINE('BTN_VIEW_NOTE','Vis notat');
DEFINE('BTN_TEST_EMAIL_SETTINGS','Test gjeldende e-postinnstillinger');
DEFINE('BTN_MOVE_TICKET','Flytt');
DEFINE('BTN_BUY_PLUGIN','Get this plugin');
DEFINE('BTN_INSTALL','Install');

// ARRAYS
global $status_array_lang, $priority_array_lang, $day_array_lang, $month_array_lang;

DEFINE('LBL_ANY','alle');
// STATUS
DEFINE('LBL_OPEN','åpen');
DEFINE('LBL_ONHOLD','venter');
DEFINE('LBL_CLOSED','lukket');
// PRIORITY
DEFINE('LBL_LOW','lav');
DEFINE('LBL_NORMAL','normal');
DEFINE('LBL_HIGH','høy');
// DATE
DEFINE('LBL_MONDAY','Mandag');
DEFINE('LBL_TUESDAY','Tirsdag');
DEFINE('LBL_WEDNESDAY','Onsdag');
DEFINE('LBL_THURSDAY','Torsdag');
DEFINE('LBL_FRIDAY','Fredag');
DEFINE('LBL_SATURDAY','Lørdag');
DEFINE('LBL_SUNDAY','Søndag');

DEFINE('LBL_JANUARY','Januar');
DEFINE('LBL_FEBRUARY','Februar');
DEFINE('LBL_MARCH','Mars');
DEFINE('LBL_APRIL','April');
DEFINE('LBL_MAY','Mai');
DEFINE('LBL_JUNE','Juni');
DEFINE('LBL_JULY','Juli');
DEFINE('LBL_AUGUST','August');
DEFINE('LBL_SEPTEMBER','September');
DEFINE('LBL_OCTOBER','Oktober');
DEFINE('LBL_NOVEMBER','November');
DEFINE('LBL_DECEMBER','Desember');

$status_array_lang = array('any' => LBL_ANY, 'open' => LBL_OPEN, 'on-hold' => LBL_ONHOLD, 'closed' => LBL_CLOSED);
$priority_array_lang = array('any' => LBL_ANY, 'low' => LBL_LOW, 'normal' => LBL_NORMAL, 'high' => LBL_HIGH);
$day_array_lang = array('1' => LBL_MONDAY, '2' => LBL_TUESDAY, '3' => LBL_WEDNESDAY, '4' => LBL_THURSDAY, '5' => LBL_FRIDAY, '6' => LBL_SATURDAY, '0' => LBL_SUNDAY); // w
$month_array_lang = array('1' => LBL_JANUARY, '2' => LBL_FEBRUARY, '3' => LBL_MARCH, '4' => LBL_APRIL, '5' => LBL_MAY, '6' => LBL_JUNE, '7' => LBL_JULY, '8' => LBL_AUGUST, '9' => LBL_SEPTEMBER, '10' => LBL_OCTOBER, '11' => LBL_NOVEMBER, '12' => LBL_DECEMBER); // n

// LABEL TEXTS
DEFINE('LBL_USERNAME','Brukernavn: ');
DEFINE('LBL_PASSWORD','Passord: ');
DEFINE('LBL_LOGIN_OK','Velkommen tilbake');
DEFINE('LBL_SUBMIT_TICKET','Legg inn ny sak');
DEFINE('LBL_MANAGE_DEPARTMENTS','Avdelinger');
DEFINE('LBL_MANAGE_GROUPS','Grupper');
DEFINE('LBL_MANAGE_STAFF','Personell');
DEFINE('LBL_MY_TICKETS','Mine saker');
DEFINE('LBL_TICKETS','Saker');
DEFINE('LBL_SETTINGS','Innstillinger');
DEFINE('LBL_CAPTCHA','CAPTCHA');
DEFINE('LBL_NO_CAPTCHA','CAPTCHA er deaktivert fordi GD library ble ikke funnet i din PHP-installasjon.');
DEFINE('LBL_ANTISPAM_ICASE','Write the code <br /> (case insensitive)');
DEFINE('LBL_ANTISPAM_CASE','Write the code <br /> (case sensitive)');
DEFINE('LBL_TICKETS_LISTINGS','Saksopplisting');
DEFINE('LBL_DATE_SETTINGS','Datoformat');
DEFINE('LBL_AUTOCLOSE_SETTINGS','Autolukk');
DEFINE('LBL_PLUGINS','Programtillegg');
DEFINE('LBL_REPLY_ABOVE','Messages will be parsed above this line');
DEFINE('LBL_AUTOCLOSE_MESSAGE','To turn off the autoclose feature, please set both autoclose days to 0.');
DEFINE('LBL_AUTOCLOSE_CRON_INTERVAL','Check for tickets marked for autoclosing every (minutes)');
DEFINE('LBL_AUTOCLOSE_EMAIL_INTERVAL','Days a ticket should go into autoclose status');
DEFINE('LBL_AUTOCLOSE_INTERVAL','Days a ticket should be autoclosed (after notification is sent)');
DEFINE('LBL_CRON_TYPE','Cron Type');
DEFINE('LBL_CRON_TYPE_MANUAL','Manual (cron task)');
DEFINE('LBL_CRON_TYPE_AUTOMATIC','Automatic (handled by script)');
DEFINE('LBL_CRON_INTERVAL','Cron Check Interval (minutes)');
DEFINE('LBL_ACCEPT_NEW_TICKETS','Accepting new tickets by e-mail from');
DEFINE('LBL_ASSIGN_TO_DEPARTMENT','New tickets are assigned to this department');
DEFINE('LBL_SERVER_PORT','Server Port');
DEFINE('LBL_SERVER_ADDRESS','Server Address');
DEFINE('LBL_SERVER_PROTOCOL','Email Protocol');
DEFINE('LBL_SERVER_SECURITY','Use a secure connection (SSL) ?');
DEFINE('LBL_STAFF_FRONTEND','Staff Frontend');
DEFINE('LBL_CUSTOMER_FRONTEND','Customer Frontend');
DEFINE('LBL_DATE_TIME','Dato');
DEFINE('LBL_SELECT_DEPARTMENT','Velg en avdeling');
DEFINE('LBL_SUBJECT','Tittel');
DEFINE('LBL_MESSAGE','Melding');
DEFINE('LBL_SUBMIT_NEW_TICKET','Send inn ny sak');
DEFINE('LBL_YOUR_EMAIL','Din e-postadresse');
DEFINE('LBL_YOUR_FULLNAME','Ditt fulle navn');
DEFINE('LBL_DEPARTMENT','Avdeling');
DEFINE('LBL_DEPARTMENTS','Avdelinger');
DEFINE('LBL_DEPARTMENTS_DESC','<em>Hold Ctrl-tasten nede for å velge flere avdelinger<em>');
DEFINE('LBL_GROUPS','Grupper');
DEFINE('LBL_PLEASE_DEPARTMENT','Velg en avdeling');
DEFINE('LBL_CUSTOM_FIELDS','Brukerdefinerte felter');
DEFINE('LBL_PRIORITY','Prioritet');
DEFINE('LBL_STATUS','Status');
DEFINE('LBL_TICKET_CODE','Saksnummer');
DEFINE('LBL_ATTACHMENT','Vedlegg');
DEFINE('LBL_ATTACHMENT_EXT','<em>Bare .zip-filer</em>');
DEFINE('LBL_ADVANCED_SEARCH','Avansert søk');
DEFINE('LBL_ADVANCED_SEARCH_IN_TICKETS','Avansert søk i saker');
DEFINE('LBL_ADVANCED_SEARCH_IN_MY_TICKETS','Avansert søk i mine saker');
DEFINE('LBL_SEARCH_BY_USERS','Søk etter brukere');
DEFINE('LBL_SEARCH_BY_TICKET_PROPERTIES','Søk etter saksegenskaper');
DEFINE('LBL_SEARCH_BY_DATE_RANGE','Søk etter datoområde');
DEFINE('LBL_FROM','Fra');
DEFINE('LBL_TO','Til');
DEFINE('LBL_STAFF_USERNAME',"Staff's Username");
DEFINE('LBL_STAFF_FULLNAME',"Staff's Fullname");
DEFINE('LBL_STAFF_EMAIL',"Staff's E-mail");
DEFINE('LBL_CUSTOMER_USERNAME',"Customer's Username");
DEFINE('LBL_CUSTOMER_FULLNAME',"Customer's Fullname");
DEFINE('LBL_CUSTOMER_EMAIL',"Customer's E-mail");

DEFINE('LBL_NEW_DEPARTMENT','Ny avdeling');
DEFINE('LBL_NEW_STAFF','Nytt personell');
DEFINE('LBL_NEW_GROUP','Ny gruppe');
DEFINE('LBL_EDIT_DEPARTMENT','Edit an existing department');
DEFINE('LBL_DEPARTMENT_PROPERTIES','Department properties');
DEFINE('LBL_EDIT_GROUP','Edit an existing group');
DEFINE('LBL_EDIT_STAFF','Edit an existing staff member');
DEFINE('LBL_GROUP_PROPERTIES','Group properties');
DEFINE('LBL_STAFF_PROPERTIES','Staff member properties');
DEFINE('LBL_NAME','Navn');
DEFINE('LBL_FULLNAME','Fullt navn');
DEFINE('LBL_GENERAL','Generelt');
DEFINE('LBL_LICENSE','Lisensnummer');
DEFINE('LBL_RSTICKETS_LINK','Vis RStickets!-lenke i bunntekst');
DEFINE('LBL_RSTICKETS_SHOW_MENU','Vis RStickets!-menyen');
DEFINE('LBL_RSTICKETS_ADD_TICKETS','Motta saker fra');
DEFINE('LBL_RSTICKETS_MYSQL_UTF8','Bruk UTF-8 MySQL-tilkobling');
DEFINE('LBL_TIMEZONE','Tidssone');
DEFINE('LBL_TIMEZONE_NOT_SET','Tidsone ikke angitt');
DEFINE('LBL_TIMEZONE_CURRENT','Gjeldende tid');
DEFINE('LBL_STAFF_OPEN_TICKETS','Tillat personell å åpne saker på vegne av seg selv, eller annet personell.');
DEFINE('LBL_EMAIL','E-post');
DEFINE('LBL_GROUP','Gruppe');
DEFINE('LBL_STAFF','Personell');
DEFINE('LBL_CUSTOMER','Bruker');
DEFINE('LBL_PERMISSIONS','Rettigheter');
DEFINE('LBL_CAPTION','Caption');
DEFINE('LBL_TYPE','Type');
DEFINE('LBL_VALUES','Verdier');
DEFINE('LBL_REQUIRED','Påkrevd');
DEFINE('LBL_ACTIONS','Valg');
DEFINE('LBL_PREFIX','Prefiks');
DEFINE('LBL_TICKET_ASSIGNMENT_TYPE','Ticket assignment type');
DEFINE('LBL_TICKET_GENERATION_RULE','Ticket generation rule');
DEFINE('LBL_CUSTOMER_RECEIVES','Customer receives tickets by email');
DEFINE('LBL_STAFF_RECEIVES','Staff receives tickets by email');
DEFINE('LBL_DEPARTMENT_NEW_TICKET_NOTIFY','Notify the following email addresses when a new ticket arrives (each email on a new line)');
DEFINE('LBL_FILE_UPLOAD','Upload files enabled for');
DEFINE('LBL_FILE_UPLOAD_EXTENSIONS','Allowed extensions (each extension on a new line)<br /><b style="color: red">Please note that allowing extensions such as php to be uploaded you compromise your server security!</b>');
DEFINE('LBL_EVERYONE','Alle');
DEFINE('LBL_REGISTERED','Kun registrerte brukere');
DEFINE('LBL_NOBODY','Ingen');
DEFINE('LBL_YES','Ja');
DEFINE('LBL_NO','Nei');
DEFINE('LBL_SURE','Er du sikker?');

DEFINE('LBL_BULK_CHANGE','Bulk Change');
DEFINE('LBL_BULK_DELETE','Bulk Delete');
DEFINE('LBL_DELETE_SELECTED','Slett valgte');
DEFINE('LBL_PAGE','Side');
DEFINE('LBL_ASSIGN','Tildel');
DEFINE('LBL_UNASSIGNED','Ikke tildelt');
DEFINE('LBL_UNCHANGED','Uendret');
DEFINE('LBL_VIEWING_TICKET','Viser saker');
DEFINE('LBL_PRINTABLE_VERSION','Utskriftsversjon');
DEFINE('LBL_PRINT','Skriv ut');
DEFINE('LBL_MOVE_TICKET','Flytt sak til ');
DEFINE('LBL_MOVING_TICKET','Flytter sak ');
DEFINE('LBL_ADD_NEW_REPLY','Legg til nytt svar');
DEFINE('LBL_MESSAGES_HISTORY','Meldingshistorie');
DEFINE('LBL_WROTE','skrev:');
DEFINE('LBL_REPLIES_CLOSED','Svar er lukket.');

DEFINE('LBL_HIDE_CLOSED_TICKETS','Skjul lukkede saker');
DEFINE('LBL_SHOW_CLOSED_TICKETS','Vis lukkede saker');

DEFINE('LBL_SHOW_UNASSIGNED_TICKETS','Vis bare saker som ikke er tildelt noen');
DEFINE('LBL_SHOW_ALL_TICKETS','Vis alle saker');

DEFINE('LBL_CAN_ADD_TICKET','Can add ticket');
DEFINE('LBL_CAN_ADD_TICKET_USERS','Can add ticket on behalf of users');
DEFINE('LBL_CAN_ADD_TICKET_STAFF','Can add ticket on behalf of other staff members');
DEFINE('LBL_CAN_UPDATE_TICKET','Can update ticket');
DEFINE('LBL_CAN_DELETE_TICKET','Can delete ticket');
DEFINE('LBL_CAN_ANSWER_TICKET','Can add ticket replies');
DEFINE('LBL_CAN_DELETE_TICKET_REPLIES','Can delete ticket replies');
DEFINE('LBL_CAN_UPDATE_TICKET_REPLIES','Can update ticket replies');
DEFINE('LBL_CAN_ASSIGN_TICKETS','Can assign tickets');
DEFINE('LBL_CAN_CHANGE_TICKET_STATUS','Can change ticket status');
DEFINE('LBL_CAN_SEE_UNALLOCATED_TICKETS','Can see unallocated tickets');
DEFINE('LBL_CAN_SEE_OTHER_TICKETS','Can see other tickets');
DEFINE('LBL_CAN_MOVE_TICKET','Can move ticket from one department to another');

DEFINE('LBL_NO_DEPARTMENTS','Det finnes ingen avdelinger');
DEFINE('LBL_NO_GROUPS','Det finnes ingen grupper');
DEFINE('LBL_NO_DEPARTMENTS_STAFF_USERS','Kan ikke legge til ny avdeling uten noen tilgjengelige brukere, grupper eller avdelinger.');
DEFINE('LBL_NO_CUSTOM_FIELDS','Det finnes ingen brukerdefinerte felter');
DEFINE('LBL_NO_STAFF','Det finnes ingen personell');
DEFINE('LBL_NO_TICKETS','Det finnes ingen saker');
DEFINE('LBL_NO_USERS','Det finnes ingen registrerte brukere');

DEFINE('LBL_MOVE_TICKET_DESCRIPTION','Please complete all required fields below in order to move this ticket from one department to another.');
DEFINE('LBL_MOVE_TICKET_WARNING','<b>Warning</b>: By moving this ticket you will lose a) any custom fields attached to it and b) the ticket code. Please make sure you know what you are doing.');
DEFINE('LBL_PLEASE_SELECT','Please select ...');
DEFINE('LBL_PREDEFINED_SEARCHES','Predefined Searches');
DEFINE('LBL_NO_PREDEFINED_SEARCHES','There are no predefined searches defined.');
DEFINE('LBL_MANAGE_SEARCHES','Behandle søk');
DEFINE('LBL_PREDEFINED_DEFAULT_SEARCH','Make this my default ticket listing when I login.');
DEFINE('LBL_PREDEFINED_SEARCH_TICKETS','Predefined Searches in Tickets');
DEFINE('LBL_PREDEFINED_SEARCH_MY_TICKETS','Predefined Searches in My Tickets');
DEFINE('LBL_SEARCH_NAME','Søkenavn');
DEFINE('LBL_DEFAULT_SEARCH','Standard søk?');

DEFINE('LBL_ENABLED','Enabled');
DEFINE('LBL_GENERATE_DOTS','Generate Dots');
DEFINE('LBL_GENERATE_LINES','Generate Lines');
DEFINE('LBL_CHARACTERS','Characters');
DEFINE('LBL_CASE_SENSITIVE','Case Sensitive');

DEFINE('LBL_BUY_PLUGIN_CRON','The <a href="http://www.rsjoomla.com/index.php/component/option,com_rshelp/task,payment.redirect/cid,12/custom_sess,{custom_sess}/" target="_blank">RStickets! - Cron Plugin</a> allows you to extend RStickets! functionality by accepting and parsing tickets sent through e-mail.
<ul>
<li><strong>Features</strong></li>
<li>Receive tickets by e-mail from all or only registered clients</li>
<li>Parse ticket replies by e-mail</li>
<li>POP3/IMAP support</li>
<li>Automatic or manual execution</li>
<li>Automatically assign tickets to a specific department</li>
</ul>
<a href="http://www.rsjoomla.com/index.php/component/option,com_rshelp/task,payment.redirect/cid,12/custom_sess,{custom_sess}/" target="_blank">Get the plugin by clicking here</a>.');

DEFINE('LBL_DESCRIPTION','Description');
DEFINE('LBL_INSTALL_PLUGIN','Upload a plugin package and install:');

// ERRORS
DEFINE('ERROR_1',"Username & password can't be blank");
DEFINE('ERROR_2',"Can't login twice");
DEFINE('ERROR_3','The username &amp; password you provided do not match.');
DEFINE('ERROR_4','There is already a department with this name or prefix. Please select a unique name for your department.');
DEFINE('ERROR_5','There is already a group with this name. Please select a unique name for your group.');
DEFINE('ERROR_6','You must select a department.');
DEFINE('ERROR_7','You must write a subject.');
DEFINE('ERROR_8','You must write a message.');
DEFINE('ERROR_9','You must write your email address.');
DEFINE('ERROR_10','You must write your full name.');
DEFINE('ERROR_11','Required fields in <b>bold</b> are mandatory.');
DEFINE('ERROR_13',"You can't delete this department because it already has tickets and/or staff members.");
DEFINE('ERROR_14',"You can't delete this group because it already has staff members.");
DEFINE('ERROR_15',"You can't delete this staff member because it already has tickets assigned.");
DEFINE('ERROR_16',"You can't delete this custom field because there are already tickets with this field configured.");
DEFINE('ERROR_17','This ticket is already closed.');
DEFINE('ERROR_18','Please type a valid email address.');
DEFINE('ERROR_19','Please specify a valid port range (1-65535).');
DEFINE('ERROR_20','Please specify the interval in minutes (1-1440).');
DEFINE('ERROR_21',"Please enter email server's address");
DEFINE('ERROR_22','Please enter the username you use to access your email');
DEFINE('ERROR_23','Please enter the password you use to access your email');
DEFINE('ERROR_24','Please enter the full name you want to show up when sending an automatic email');
DEFINE('ERROR_25','Please select at least 1 department');
DEFINE('ERROR_26','Please select an user');
DEFINE('ERROR_27','Please select a group');
DEFINE('ERROR_28','The uploaded file is not a .zip valid file.');
DEFINE('ERROR_29',"The autoclose checking should be at done least 10 minutes apart to ensure the server won't overload.");
DEFINE('ERROR_30','Please select another department; current source and destination departments are the same.');
DEFINE('ERROR_31','CAPTCHA should be at least 3 characters long.');
DEFINE('ERROR_32','The code you entered is invalid. Please retry.');
DEFINE('ERROR_33','File uploading has failed. Press the "Submit" button again to submit the information without uploading any files.');
DEFINE('ERROR_34','Please check that '.RST_FRONTEND_ABS_PATH.'/files/ is a directory and is writable (CHMOD 777) !');
DEFINE('ERROR_ADDTICKET','You have to login to submit a ticket.');

// SUCCESS
DEFINE('OK_1000','Your department has been successfully added.');
DEFINE('OK_1001','Your department has been modified.');
DEFINE('OK_1002','Your department has been removed.');
DEFINE('OK_1003','Your group has been successfully added.');
DEFINE('OK_1004','Your group has been modified.');
DEFINE('OK_1005','Your group has been removed.');
DEFINE('OK_1006','Your staff member has been successfully added.');
DEFINE('OK_1007','Your staff member has been modified.');
DEFINE('OK_1008','Your staff member has been removed.');
DEFINE('OK_1009','Your settings have been succesfully updated');
DEFINE('OK_1010','Your ticket has been succesfully submitted.');
DEFINE('OK_1011','Your search results are being displayed below.');
DEFINE('OK_1012','Your search filters have been removed.');
DEFINE('OK_1013','Your tickets have been updated.');
DEFINE('OK_1014','Your tickets have been deleted.');
DEFINE('OK_1015','This ticket has been successfully closed.');
DEFINE('OK_1017','Your custom fields have been updated.');
DEFINE('OK_1018','Your ticket has been updated.');
DEFINE('OK_1019','Your reply has been added.');
DEFINE('OK_1020','Your ticket has been deleted.');
DEFINE('OK_1021','Your reply has been deleted.');
DEFINE('OK_1022','Your reply has been updated.');
DEFINE('OK_1023','Lukkede saker <strong>vises</strong>.');
DEFINE('OK_1024','Lukkede saker er <strong>skjult</strong>.');
DEFINE('OK_1025','Brukeren har blitt varslet.');
DEFINE('OK_1026','Bare saker som ikke er tildelt noen vises.');
DEFINE('OK_1027','Alle saker vises.');
DEFINE('OK_1028','Din sak ble vellykket flyttet til angitt avdeling.');
DEFINE('OK_1029','Ditt forhåndsdefinerte søk er lagret.');
DEFINE('OK_1030','Ditt forhåndsdefinerte søk er fjernet.');
?>
