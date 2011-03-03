<?php
/**
 * Events Component for Joomla 1.0.x
 *
 * @version     $Id$
 * @package     Events
 * @copyright   Copyright (C) 2006 JEvents Project Group
 * @licence     http://www.gnu.org/copyleft/gpl.html
 * @link        http://joomlacode.org/gf/project/jevents
 */

defined("_VALID_MOS") or die("Direkte tilgang til denne lokasjonen er forbudt");

//Check
DEFINE("_CAL_LANG_INCLUDED", 1);

// new 1.4.0 [mic]
define("_CAL_LANG_LNG",				"no"); // de|fr|etc... [ DO NOT CHANGE THIS VALUE! ]

// used for colorpicker
define("_CAL_LANG_NO_COLOR",			"Ingen farger");
define("_CAL_LANG_COLOR_PICKER",		"Fargevelger");

// common
define("_CAL_LANG_TIME",				"Tid");
define("_CAL_LANG_CLICK_TO_OPEN_EVENT",	"Klikk for � �pne hendelse");
define("_CAL_LANG_UNPUBLISHED",		"** Ikke publisert **");
define("_CAL_LANG_DESCRIPTION",		"Beskrivelse");
define("_CAL_LANG_EMAIL_TO_AUTHOR",	"E-post til forfatter");
define("_CAL_LANG_MAIL_TO_ADMIN",		"Hendelse avgitt fra [ %s ] av [ %s ]");
define("_CAL_LANG_KEYWORD_NOT_VALID",	"Ikke gyldig n�kkelord");
define("_CAL_LANG_EVENT_CALENDAR",		"Hendelseskalender"); // new 1.4

// modul
define("_CAL_LANG_ERR_NO_MOD_CAL",		"Events Calendar\n<br />Denne modulen trenger Events komponenten");
define("_CAL_LANG_CLICK_TOSWITCH_DAY",	"Se p� dag");
define("_CAL_LANG_CLICK_TOSWITCH_MON",	"Se p� m�ned");
define("_CAL_LANG_CLICK_TOSWITCH_YEAR",	"Se p� �r");
define("_CAL_LANG_CLICK_TOSWITCH_PY",	"Forrige �r");
define("_CAL_LANG_CLICK_TOSWITCH_PM",	"Forrige m�ned");
define("_CAL_LANG_CLICK_TOSWITCH_NM",	"Neste m�ned");
define("_CAL_LANG_CLICK_TOSWITCH_NY",	"Neste �r");

// navTableNext
define("_CAL_LANG_NAV_TN_FIRST_LIST",	"f�rste liste");
define("_CAL_LANG_NAV_TN_PREV_LIST",	"forrige liste");
define("_CAL_LANG_NAV_TN_NEXT_LIST",	"neste liste");
define("_CAL_LANG_NAV_TN_LAST_LIST",	"siste liste");

// calendar monthly display
define("_CAL_LANG_FIRST_SINGLE_DAY_EVENT",		"enkelthendelse");
define("_CAL_LANG_FIRST_DAY_OF_MULTIEVENT",	"F�rste dag av en gjentagende hendelse");
define("_CAL_LANG_LAST_DAY_OF_MULTIEVENT",		"Siste dag av en gjentagende hendelse");
define("_CAL_LANG_MULTIDAY_EVENT",				"Hendelse over flere dager");
/* ++++++ end mic +++++++++++++ */

// Months
DEFINE("_CAL_LANG_JANUARY", "Januar");
DEFINE("_CAL_LANG_FEBRUARY", "Februar");
DEFINE("_CAL_LANG_MARCH", "Mars");
DEFINE("_CAL_LANG_APRIL", "April");
DEFINE("_CAL_LANG_MAY", "Mai");
DEFINE("_CAL_LANG_JUNE", "Juni");
DEFINE("_CAL_LANG_JULY", "Juli");
DEFINE("_CAL_LANG_AUGUST", "August");
DEFINE("_CAL_LANG_SEPTEMBER", "September");
DEFINE("_CAL_LANG_OCTOBER", "Oktober");
DEFINE("_CAL_LANG_NOVEMBER", "November");
DEFINE("_CAL_LANG_DECEMBER", "Desember");

// Short day names
DEFINE("_CAL_LANG_SUN", "S�n");
DEFINE("_CAL_LANG_MON", "Man");
DEFINE("_CAL_LANG_TUE", "Tir");
DEFINE("_CAL_LANG_WED", "Ons");
DEFINE("_CAL_LANG_THU", "Tor");
DEFINE("_CAL_LANG_FRI", "Fre");
DEFINE("_CAL_LANG_SAT", "L�r");

// Days
DEFINE("_CAL_LANG_SUNDAY", "S�ndag");
DEFINE("_CAL_LANG_MONDAY", "Mandag");
DEFINE("_CAL_LANG_TUESDAY", "Tirsdag");
DEFINE("_CAL_LANG_WEDNESDAY", "Onsdag");
DEFINE("_CAL_LANG_THURSDAY", "Torsdag");
DEFINE("_CAL_LANG_FRIDAY", "Fredag");
DEFINE("_CAL_LANG_SATURDAY", "L�rdag");

// Days lettres
DEFINE("_CAL_LANG_SUNDAYSHORT", "S");
DEFINE("_CAL_LANG_MONDAYSHORT", "M");
DEFINE("_CAL_LANG_TUESDAYSHORT", "T");
DEFINE("_CAL_LANG_WEDNESDAYSHORT", "O");
DEFINE("_CAL_LANG_THURSDAYSHORT", "T");
DEFINE("_CAL_LANG_FRIDAYSHORT", "F");
DEFINE("_CAL_LANG_SATURDAYSHORT", "L");

// Repeat type
DEFINE("_CAL_LANG_ALLDAYS", "Hver dag");
DEFINE("_CAL_LANG_EACHWEEK", "Hver uke");
DEFINE("_CAL_LANG_EACHWEEKPAIR", "Hver partallsuke");
DEFINE("_CAL_LANG_EACHWEEKIMPAIR", "Hver oddetalsuke");
DEFINE("_CAL_LANG_EACHMONTH", "Hver m�ned");
DEFINE("_CAL_LANG_EACHYEAR", "Hvert �r");
DEFINE("_CAL_LANG_ONLYDAYS", "Bare valgte dager");
DEFINE("_CAL_LANG_EACH", "Hver");
DEFINE("_CAL_LANG_EACHOF","av hver");
DEFINE("_CAL_LANG_ENDMONTH", "slutten av m�neden");

// Repeat days
DEFINE("_CAL_LANG_BYDAYNUMBER", "Etter dagnummer");

// User type
DEFINE("_CAL_LANG_ANONYME", "Anonym");

// Post
//PAS D'ACCENTS DANS LES _ACT_
DEFINE("_CAL_LANG_ACT_ADDED", "Takk for ditt bidrag - vi vil kontrollere ditt forslag!"); //NO ACCENT !!
DEFINE("_CAL_LANG_ACT_MODIFIED", "Hendelsen har blitt redigert."); //NO ACCENT !!
DEFINE("_CAL_LANG_ACT_PUBLISHED", "Denne hendelsen har blitt publisert.");  //NEW 1.4
DEFINE("_CAL_LANG_ACT_DELETED", "Denne hendelsen har blitt slettet!"); //NO ACCENT !!
DEFINE("_CAL_LANG_NOPERMISSION", "Du har ikke adgang til denne tjenesten!"); //NO ACCENT !!

DEFINE("_CAL_LANG_MAIL_ADDED", "Nytt bidrag den");
DEFINE("_CAL_LANG_MAIL_MODIFIED", "Ny endring den");

// Presentation
DEFINE("_CAL_LANG_BY", "av");
DEFINE("_CAL_LANG_FROM", "Fra");
DEFINE("_CAL_LANG_TO", "Til");
DEFINE("_CAL_LANG_ARCHIVE", "Arkiv");
DEFINE("_CAL_LANG_WEEK", "uken");
DEFINE("_CAL_LANG_NO_EVENTS", "Ingen hendelser");
DEFINE("_CAL_LANG_NO_EVENTFOR", "Ingen hendelser for");
DEFINE("_CAL_LANG_NO_EVENTFORTHE", "Ingen hendelsen for den");
DEFINE("_CAL_LANG_THIS_DAY", "Denne dag");
DEFINE("_CAL_LANG_THIS_MONTH", "Denne m�ned");
DEFINE("_CAL_LANG_LAST_MONTH", "Forrige m�ned");
DEFINE("_CAL_LANG_NEXT_MONTH", "Neste m�ned");
DEFINE("_CAL_LANG_EVENTSFOR", "Hendelser for");
DEFINE("_CAL_LANG_SEARCHRESULTS", "S�keresultater for n�kkelord"); // new 1.4
DEFINE("_CAL_LANG_EVENTSFORTHE", "Hendelser for den");
DEFINE("_CAL_LANG_REP_DAY", "dag");
DEFINE("_CAL_LANG_REP_WEEK", "uke");
DEFINE("_CAL_LANG_REP_WEEKPAIR", "partallsuke");
DEFINE("_CAL_LANG_REP_WEEKIMPAIR", "oddetallsuke");
DEFINE("_CAL_LANG_REP_MONTH", "m�ned");
DEFINE("_CAL_LANG_REP_YEAR", "�r");
DEFINE("_CAL_LANG_REP_NOEVENTSELECTED", "Velg en hendelse");

// Navigation
DEFINE("_CAL_LANG_VIEWTODAY", "Vis idag");
DEFINE("_CAL_LANG_VIEWTOCOME", "Kommende denne m�ned");
DEFINE("_CAL_LANG_VIEWBYDAY", "Vis etter dag");
DEFINE("_CAL_LANG_VIEWBYCAT", "Vis etter kategori");
DEFINE("_CAL_LANG_VIEWBYMONTH", "Vis etter m�ned");
DEFINE("_CAL_LANG_VIEWBYYEAR", "Vis etter �r");
DEFINE("_CAL_LANG_VIEWBYWEEK", "Vis etter uke");
DEFINE("_CAL_LANG_JUMPTO", "Hopp til spesifikk m�ned");  // New 1.4
DEFINE("_CAL_LANG_BACK", "Tilbake");
DEFINE("_CAL_LANG_CLOSE", "Steng");
DEFINE("_CAL_LANG_PREVIOUSDAY", "Forrige dag");
DEFINE("_CAL_LANG_PREVIOUSWEEK", "Forrige uke");
DEFINE("_CAL_LANG_PREVIOUSMONTH", "Forrige m�ned");
DEFINE("_CAL_LANG_PREVIOUSYEAR", "Forrige �r");
DEFINE("_CAL_LANG_NEXTDAY", "Neste dag");
DEFINE("_CAL_LANG_NEXTWEEK", "Neste uke");
DEFINE("_CAL_LANG_NEXTMONTH", "Neste m�ned");
DEFINE("_CAL_LANG_NEXTYEAR", "Neste �r");

DEFINE("_CAL_LANG_ADMINPANEL", "Administrasjonspanel");
DEFINE("_CAL_LANG_ADDEVENT", "Legg til ny hendelse");
DEFINE("_CAL_LANG_MYEVENTS", "Mine hendelser");
DEFINE("_CAL_LANG_DELETE", "Slett");
DEFINE("_CAL_LANG_MODIFY", "Rediger");

// Form
DEFINE("_CAL_LANG_HELP", "Hjelp");

DEFINE("_CAL_LANG_CAL_TITLE", "Hendelser");
DEFINE("_CAL_LANG_ADD_TITLE", "Ny");
DEFINE("_CAL_LANG_MODIFY_TITLE", "Rediger");

DEFINE("_CAL_LANG_REPEAT_DISABLED", "XXXXHendelses repetisjon er bare mulig vis sluttdato er etter startdato.  Forandre sluttdato f�r du konfigurerer gjentakende hendelser."); // New for 1.4
DEFINE("_CAL_LANG_EVENT_TITLE", "Tittel");
DEFINE("_CAL_LANG_EVENT_COLOR", "Farge");
DEFINE("_CAL_LANG_EVENT_CATCOLOR", "Bruk kategorifarge");
DEFINE("_CAL_LANG_EVENT_CATEGORY", "Kategorier");
DEFINE("_CAL_LANG_EVENT_CHOOSE_CATEG", "Velg en kategori");
DEFINE("_CAL_LANG_EVENT_ACTIVITY", "Aktivitet");
DEFINE("_CAL_LANG_EVENT_URLMAIL_INFO", "For � legge til en nettadresse eller en E-POST, skriv <u>http://www.mysite.com</u> eller <u>mailto:my@mail.com</u>");
DEFINE("_CAL_LANG_EVENT_ADRESSE", "Sted");
DEFINE("_CAL_LANG_EVENT_CONTACT", "Kontakt");
DEFINE("_CAL_LANG_EVENT_EXTRA", "Ekstra informasjon");
DEFINE("_CAL_LANG_EVENT_AUTHOR_ALIAS", "Forfatter (alias)");
DEFINE("_CAL_LANG_EVENT_STARTDATE", "Startdato");
DEFINE("_CAL_LANG_EVENT_ENDDATE", "Sluttdato");
DEFINE("_CAL_LANG_EVENT_STARTHOURS", "Starttid");
DEFINE("_CAL_LANG_EVENT_ENDHOURS", "Slutttid");
DEFINE("_CAL_LANG_EVENT_STARTTIME", "Starttid");
DEFINE("_CAL_LANG_EVENT_ENDTIME", "Slutttid");
DEFINE("_CAL_LANG_PUB_INFO", "Publiseringsinformasjon");
DEFINE("_CAL_LANG_EVENT_REPEATTYPE", "Gjentagelsestype");
DEFINE("_CAL_LANG_EVENT_REPEATDAY", "Gjenta dag");
DEFINE("_CAL_LANG_EVENT_CHOOSE_WEEKDAYS", "Dager i uken");
DEFINE("_CAL_LANG_EVENT_PER", "pr.");
DEFINE("_CAL_LANG_EVENT_WEEKOPT", "Uke(r) i en m�ned, gjenta uketype");

DEFINE("_CAL_LANG_SUBMITPREVIEW", "Forh�ndsvis");
DEFINE("_CAL_LANG_SUBMITCANCEL", "Avbryt");
DEFINE("_CAL_LANG_SUBMITSAVE", "Lagre");

DEFINE("_CAL_LANG_E_WARNWEEKS", "Velg en uke.");
DEFINE("_CAL_LANG_E_WARNDAYS", "Velg en dag.");

// Admin
DEFINE("_CAL_LANG_EVENT_ALLCAT", "Alle kategorier");
DEFINE("_CAL_LANG_EVENT_ACCESSLEVEL", "Adgangsniv�");
DEFINE("_CAL_LANG_EVENT_HITS", "Treff");
DEFINE("_CAL_LANG_EVENT_STATE", "Status");
DEFINE("_CAL_LANG_EVENT_CREATED", "Opprettet");
DEFINE("_CAL_LANG_EVENT_NEWEVENT", "Ny hendelse");
DEFINE("_CAL_LANG_EVENT_MODIFIED", "Sist endret");
DEFINE("_CAL_LANG_EVENT_NOTMODIFIED", "Ikke endret");

// dmcd aug 22/04  new warning alert for no specified activity in event entry
DEFINE("_CAL_LANG_WARNACTIVITY", "Noe aktivitet\\nm� skrives.");

DEFINE("_CAL_LEGEND_ALL_CATEGORIES", "Alle kategorier ...");  // new for 1.4
DEFINE("_CAL_LEGEND_ALL_CATEGORIES_DESC", "Vis hendelser fra alle kategorier");  // new for 1.4

DEFINE("_CAL_LANG_FORM_HELP_COLOR", <<<END
        <tr>
		  <td width="110" align="left" valign="top">
            <b>Farger</b>
          </td>
          <td>Velg farge som du vil ha som bakgrunn i m�nedskalenderen.  Dette er gyldig vis kategorivisning er valgt,
		  kategorifarge vil bli brukt som standard (definert av administrator) ,
		  'Fargevelger' vil bli inaktiv.</td>
        </tr>
END
);

DEFINE("_CAL_LANG_FORM_HELP",  <<<END
    	<tr>
          <td align="left"><b>Dato</b></td>
          <td>Velg startdato og sluttdato for hendelsen.</td>
        </tr>
    	<tr>
          <td align="left" valign="top"><b>Klokkeslett</b></td>
          <td>Velg klokkeslett for hendelsen.  Formatet er <span style='color:blue;font-weight:bold;'>hh:mm {am|pm}</span>.<br/>Det kan velges b�de 12 og 24 timers visning av klokkeslett.<br/><br/><b><i><span style='color:red;'>(Nytt)</span></i> Merk</b> for <span style='color:red;font-weight:bold;'>endagshendelser som varer forbi midnatt</span>.  F.eks. En hendelse starter kl 19:00 og varer til 3:00 neste dag, da <b>M�</b> startdato og sluttdato v�re&nbsp;
		   samme dato, datoene b�r settes til startdato.</td>
        </tr>
END
);

DEFINE("_CAL_LANG_FORM_HELP_EXTENDED",  <<<END
        <tr>
    	  <td align="left" valign="top" nowrap><b>Repeterende hendelser</b></td>
  	  	<td colspan="2"></td>
  		</tr>
  		<tr>
    	  <td colspan="2" align="left" valign="top">
	    	<table width="100%" border="0" cellspacing="2">
              <tr>
                <td width="60" align="left" valign="top"><u>Etter dag</u></td>
                <td width="110" align="left" valign="top" class="frm_td_bydays">
                  <font color="#000000">Hver dag<br/><i>(standard)</i></font>
                </td>
                <td align="left" valign="top" class="frm_td_bydays">
                  <font color="#000000">Velg denne for en hendelse som ikke repeteres. En ny hendelse for hver dag som er spesifisert med startdato og sluttdato</font>
                </td>
              </tr>
              <tr>
                <td width="60" rowspan="3" align="left" valign="top"><u>Etter uke</u></td>
                <td width="110" align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                    En gang pr. uke
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                  Gir mulighet til � velge ukedag for repeterende hendelser
                  <table border="0" width="100%" height="100%"><tr><td><b>Dagsnummer</b> for repeterende hendelser skriv 10/../2007</td></tr><tr><td><b>Dagsnavn</b> for repeterende hendelser, skriv hver Mandag</td></tr></table>
                  </font>
                </td>
              </tr>
              <tr>
                <td width="110" align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                    Flere ukedager pr. uke
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">Velg hvilke dager hendelsen blir synlig.</font>
                </td>
              </tr>
              <tr>
                <td width="110" align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000"><i>Uke i m�ned # <br>For 'En dag pr. uke' og 'Flere dager pr. uke' se valg ovenfor</i></font></td>
                  <td align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                  <table border="0" width="100%" height="100%">
                    <tr><td><b>Uke 1 :</b> f�rste uke i m�neden</td></tr>
                    <tr><td><b>Uke 2 :</b> andre uke i m�neden</td></tr>
                    <tr><td><b>Uke 3 :</b> tredje uke i m�neden</td></tr>
                    <tr><td><b>Uke 4 :</b> fjerde uke i m�neden</td></tr>
                    <tr><td><b>Uke 5 :</b> femte uke i m�neden(hvis m�neden har 5 uker)</td></tr>
                   </table>
                 </font>
                </td>
              </tr>
              <tr>
                <td width="60" rowspan="2" align="left" valign="top"><u>Etter m�ned</u></td>
                <td width="110" align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">En gang pr. m�ned</font></td>
                <td align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">
                     En repeterende dag pr. m�ned
                     <table border="0" width="100%" height="100%"><tr><td><b>Dagsnummer</b> for repetering skriv hvert nummer p� dag 10/../2007</td></tr><tr><td><b>Dagsnavn</b> for repetering skriv hver dag</td></tr></table>

                  </font>
                </td>
              </tr>
              <tr>
                <td width="110" align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">
                  Slutten av hver m�ned
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">
				   Hendelsen er siste dag hver m�ned uavhengig av dagsnummeret, hvis siste dagen
		er mellom startdato og sluttdato.
                  </font>
                </td>
              </tr>
              <tr>
                <td width="60" rowspan="2" align="left" valign="top"><u>Etter �r</u></td>
                <td width="110" align="left" valign="top" class="frm_td_byyear">
                  <font color="#000000">
                  En gang pr. �r
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_byyear">
                  <font color="#000000">
                  Velger en enkelt dag hvert �r
                  <table border="0" width="100%" height="100%"><tr><td><b>Dagsnummer</b> for repetering skriv hvert nummer p� dag 10/../2007</td></tr><tr><td><b>Dagsnavn</b> for repetering skriv hver dag</td></tr></table>
                  </font>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <!-- END REPEAT -->
END
);
	
?>
