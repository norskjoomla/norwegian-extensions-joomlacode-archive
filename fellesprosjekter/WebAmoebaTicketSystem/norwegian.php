<?php
/**
 * FileName: norwegian.php
 * Date: 06/09/2006
 * License: GNU General Public License
 * File Version #: 2
 * WATS Version #: 2.0.4	
 * Translation v1.1.2 by Marius Lauritzen (www.demoner.org)
 * Translation updated and corrected to v2.0.4 by Rune Rasmussen (www.joomlainorge.no)
**/

// NAVIGATION
DEFINE("_WATS_NAV_NEW","Ny henvendelse");
DEFINE("_WATS_NAV_CATEGORY","Kategorier");
DEFINE("_WATS_NAV_TICKET","Nummer");

// USER
DEFINE("_WATS_USER","Bruker");
DEFINE("_WATS_USER_SET","Brukere");
DEFINE("_WATS_USER_NAME","Navn");
DEFINE("_WATS_USER_USERNAME","Brukernavn");
DEFINE("_WATS_USER_GROUP","Gruppe");
DEFINE("_WATS_USER_ORG","Organisasjon");
DEFINE("_WATS_USER_ORG_SELECT","Fyll inn organisasjon");
DEFINE("_WATS_USER_EMAIL","E-post");
DEFINE("_WATS_USER_NEW","Opprett ny bruker");
DEFINE("_WATS_USER_NEW_SELECT","Velg en bruker");
DEFINE("_WATS_USER_NEW_CREATED","Opprettet bruker");
DEFINE("_WATS_USER_NEW_FAILED","Denne brukeren har allerede en hjelpekonto");
DEFINE("_WATS_USER_DELETED","Bruker slettet");
DEFINE("_WATS_USER_EDIT","Rediger bruker");
DEFINE("_WATS_USER_DELETE_REC","Fjern brukers henvendelser (anbefalt)");
DEFINE("_WATS_USER_DELETE_NOTREC","Fjern brukers henvendelser og svar på andre henvendelser (ikke anbefalt)");
DEFINE("_WATS_USER_DELETE","Slett bruker");
DEFINE("_WATS_USER_ADD","Legg til bruker");
DEFINE("_WATS_USER_SELECT","Velg bruker");
DEFINE("_WATS_USER_SET_DESCRIPTION","Behandle brukere");
DEFINE("_WATS_USER_ADD_LIST","Følgende brukere ble lagt til");

// GROUPS
DEFINE("_WATS_GROUP_SELECT","Velg gruppe");

// CATEGORIES
DEFINE("_WATS_CATEGORY","Kategori");

// TICKETS
DEFINE("_WATS_TICKETS_USER_OPEN","Mine åpne henvendelser");
DEFINE("_WATS_TICKETS_USER_CLOSED","Mine avsluttede henvendelser");
DEFINE("_WATS_TICKETS_OPEN","Åpne henvendelser");
DEFINE("_WATS_TICKETS_CLOSED","Lukkede henvendelser");
DEFINE("_WATS_TICKETS_DEAD","Døde henvendelser");
DEFINE("_WATS_TICKETS_OPEN_VIEW","Vis alle åpne henvendelser");
DEFINE("_WATS_TICKETS_CLOSED_VIEW","Vis alle lukkede henvendelser");
DEFINE("_WATS_TICKETS_DEAD_VIEW","Vis alle avsluttede henvendelser");
DEFINE("_WATS_TICKETS_NAME","Emne");
DEFINE("_WATS_TICKETS_POSTS","Poster");
DEFINE("_WATS_TICKETS_DATETIME","Siste post");
DEFINE("_WATS_TICKETS_PAGES","Sider");
DEFINE("_WATS_TICKETS_SUBMIT","Send ny henvendelse");
DEFINE("_WATS_TICKETS_SUBMITING","Sender henvendelse");
DEFINE("_WATS_TICKETS_SUBMITTED","Henvendelse sendt");
DEFINE("_WATS_TICKETS_DESC","Beskrivelse");
DEFINE("_WATS_TICKETS_CLOSE","Lukk henvendelse");
DEFINE("_WATS_TICKETS_CLOSED_COMP","Henvendelse lukket");
DEFINE("_WATS_TICKETS_DELETED_COMP","Henvendelse slettet");
DEFINE("_WATS_TICKETS_PURGED_COMP","Henvendelse fjernet");
DEFINE("_WATS_TICKETS_NONE","ingen henvendelser funnet");
DEFINE("_WATS_TICKETS_FIRSTPOST","startet: ");
DEFINE("_WATS_TICKETS_LASTPOST","postet av: ");
DEFINE("_WATS_TICKETS_REPLY","Svar");
DEFINE("_WATS_TICKETS_REPLY_CLOSE","Svar og lukk");
DEFINE("_WATS_TICKETS_ASSIGN","Tildel henvendelse");
DEFINE("_WATS_TICKETS_ASSIGNEDTO","Tildelt til");
DEFINE("_WATS_TICKETS_ID","Henvendelses-ID");
DEFINE("_WATS_TICKETS_REOPEN","Gjennåpne");
DEFINE("_WATS_TICKETS_REOPEN_REASON","Vennligst oppgi en grunn for hvorfor du ønsker å gjennåpne denne henvendelsen");
DEFINE("_WATS_TICKETS_STATE_ALL","Alle");
DEFINE("_WATS_TICKETS_STATE_PERSONAL","Personlig");
DEFINE("_WATS_TICKETS_STATE_OPEN","Åpne");
DEFINE("_WATS_TICKETS_STATE_CLOSED","Lukkede");
DEFINE("_WATS_TICKETS_STATE_DEAD","Død");
DEFINE("_WATS_TICKETS_PURGE","Fjern døde henvendelser i ");

//MAIL
DEFINE("_WATS_MAIL_TICKET","Henvendelse innsendt av: ");
DEFINE("_WATS_MAIL_REPLY","Svar sendt av: ");

//MISC
DEFINE("_WATS_MISC_DELETE_VERIFY","Slett meg?");
DEFINE("_WATS_MISC_GO","Fullfør");

//ERRORS
DEFINE("_WATS_ERROR","En feil har oppstått");
DEFINE("_WATS_ERROR_ACCESS","Du har ikke rettighetene som trengs for å fullføre denne handlingen");
DEFINE("_WATS_ERROR_NOUSER","Du har ikke tillatelse til å se denne resursen.<br>Du må logge inn eller be om en konto fra våre administratorer.");
DEFINE("_WATS_ERROR_NODATA","Du har ikke fylt ut skjemaet riktig, vennligst prøv igjen.");
DEFINE("_WATS_ERROR_NOT_FOUND","Element ikke funnet");

//BBCODE
DEFINE("_WATS_BB_HELP","<p><i>Bruk 'taggene' nedenfor til å formatere din tekst:</i></p> 
<table width='100%'border='0'cellspacing='5'cellpadding='0'> 
  <tr valign='top'> 
    <td><b>fet</b></td> 
    <td><b>[b]</b>fet<b>[/b]</b></td> 
  </tr> 
  <tr valign='top'> 
    <td><i>kursiv</i> </td> 
    <td><b>[i]</b>kursiv<b>[/i]</b></td> 
  </tr> 
  <tr valign='top'> 
    <td> <u>understreket</u></td> 
    <td><b>[u]</b>understreket<b>[/u]</b></td> 
  </tr> 
  <tr valign='top'> 
    <td>kode</td> 
    <td><b>[code]</b>value='123';<b>[/code] </b></td> 
  </tr> 
  <tr valign='top'> 
    <td><font size='+2'>Størrelse</font></td> 
    <td><b>[size=25]</b>STOR<b>[/size]</b></td> 
  </tr> 
  <tr valign='top'> 
    <td><font color='#FF0000'>Rød</font></td> 
    <td><b>[color=red]</b>Rød<b> [/color]</b></td> 
  </tr> 
  <tr valign='top'> 
    <td style='cursor: pointer; color: #0000FF;'><u>Nettlenke</u></td> 
    <td><b>[url=http://webamoeba.co.uk]Nettlenke/url]</b></td> 
  </tr> 
  <tr valign='top'> 
    <td style='cursor: pointer; color: #0000FF;'><u>E-post</u></td> 
    <td><b>[email=bbcode@webamoeba.co.uk]E-post/email]</b></td> 
  </tr> 
</table> ");
?>