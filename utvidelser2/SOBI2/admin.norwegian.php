<?php
//The translation is translated, spelled and quatity checked by Petter Sandvik and Mats Fredrik Heigre.
//When a new realese comes, you need to go to www.nyfritid.no/translations to update your translation for this component.
//Do you need other translation, have questions, request or something other, visit our site!
//We proudly presents our translations freely to the world.
//The translation is last updated the 10 of March 2009.
//If you need support, please visit our site.

// No direct access
defined( '_SOBI2_' ) || ( trigger_error("Restricted access", E_USER_ERROR ) && exit() );
define('_SOBI2_ADM_EXPERIMENTAL_OPT', ' ( Eksprimentell )');

# Added (RC 2.9)
define('_SOBI2_INSTALLER_TPL_DELETE_ERROR', 'Kan ikke fjerne noen filer eller kataloger');
define('_SOBI2_INSTALLER_TPL_DELETE_OK', 'Malen %name% har blitt fjernet');
define('_SOBI2_TPL_INSTALLED_OK', 'Malen %name% har blitt innstallert');
define('_SOBI2_CONFIG_TPL_INSTALLED', 'Innstallerte maler');
define('_SOBI2_CONFIG_TPL_PACK_UPLOAD', 'Last opp ny mal pakke');
define('_SOBI2_MENU_TPL_MANAGER', 'Mal behandler');
define('_SOBI2_MENU_TEMPLATES', 'Mal behandler');
define('_SOBI2_CAT_TPL', 'Mal');
define('_SOBI2_CAT_CHOOSE_TPL', 'Overskriv mal');
define('_SOBI2_AVAILABLE_TPL', 'Tilgjengelige maler:');
define('_SOBI2_CAT_CHOOSE_TPL_EXPL', 'Du kan overskrive standard mal og flere standardinnstillingene for denne kategorien.');
define('_SOBI2_CHOOSE_TPL_TO_EDIT', 'Velg en mal for &aring; bruke:');

# Added (RC 2.8.7)
define('_SOBI2_APPLY', 'Godkjenn');

# Added (RC 2.8.5)
define('_SOBI2_DEFAULT_TOOLTIP_TITLE', 'Tips');
define('_SOBI2_CONFIG_ENTRY_NOTIFY_ADMIN_RENEW', 'Varsle administratorer om fornyelse');
define('_SOBI2_CONFIG_ENTRY_NOTIFY_ADMIN_RENEW_EXPL', 'Varsle administratorer viss eier(bruker) har fornyet sin post.');
define('_SOBI2_CONFIG_ENTRY_NOTIFY_AUTHOR_RENEW', 'Send e-post om fornyelse');
define('_SOBI2_CONFIG_ENTRY_NOTIFY_AUTHOR_RENEW_EXPL', 'Send e-post om fornyelse til eier(bruker).');
define('_SOBI2_EMAIL_ON_SUBMIT_OPTGR', 'Legg til oppf&oslash;ring');
define('_SOBI2_EMAIL_ON_UPDATE_OPTGR', 'Legg til oppf&oslash;ring');
define('_SOBI2_EMAIL_ON_APPROVE_OPTGR', 'P&aring; godkjennelses post');
define('_SOBI2_EMAIL_ON_PAYMENT_OPTGR', 'Betal e-post');
define('_SOBI2_EMAIL_ON_RENEW', 'P&aring; Fornyelses post(bruker)');
define('_SOBI2_EMAIL_ON_RENEW_ADMIN', 'P&aring; fornyelses post(admin)');
define('_SOBI2_EMAIL_ON_RENEW_OPTGR', 'P&aring; fornyelses post');
define('_SOBI2_TOOLBAR_GEN_DEB_REP', '<small>System&nbsp;sjekk</small>');
define('_SOBI2_MENU_GEN_DEB_REP', 'System sjekk');
define('_SOBI2_MENU_GEN_SYSCHECK_EXPL', 'Sjekk om alle anbefalinger og behov for SOBI2 er oppn&aring;dd'. _SOBI2_ADM_EXPERIMENTAL_OPT);
define('_SOBI2_TOOLBAR_RECOUNT_NEEDED', 'Det er flere endringer siden antall under-kategorier og oppf&oslash;ringer har blitt reorganisert. Det er kanskje n&oslash;dvendig &aring; reorganisert dem igjen.');
define('_SOBI2_TOOLBAR_RECOUNTED_SOFAR', ' Kategorier reorganisert s&aring; langt');
define('_SOBI2_TOOLBAR_RECOUNT_WAIT', ' Vent. Serveren har tatt pause.');
define('_SOBI2_TOOLBAR_RECOUNT_RESTART', 'Venter. Restarter... ');
define('_SOBI2_TOOLBAR_RECOUNT_DONE', 'Reorganisering ferdig. Reorganiserte: ');
define('_SOBI2_TOOLBAR_RECOUNT_DONE_C', ' Kategorier');
define('_SOBI2_TOOLBAR_RECOUNT_CATS', 'Reorganiser');
define('_SOBI2_RECOUNT_LAST_DATE', 'Sist reorganisert');
define('_SOBI2_TOOLBAR_RECOUNT_CATS_F', 'Reorganiser');
define('_SOBI2_RECOUNT_NOW', 'Reorganiser n&aring;');
define('_SOBI2_RECOUNT_CATS_HEADER', 'Reorganiser under-kategorier og poster i en kategori');
define('_SOBI2_CONFIG_L2CACHE_ON', 'Andre grad av hurtiglager aktivert');
define('_SOBI2_CONFIG_L2CACHE_DV_ON', 'Hurtiglager av detaljert visning (ikke anbefalt)');
define('_SOBI2_CONFIG_L2CACHE_EXPL', '<b>Andre grad av hurtiglager</b> - Tillater hurglagret for hele HTML siden (kategori liste og poster vil bli vist separat).');
define('_SOBI2_CONFIG_L2CACHE_LIFETIME', 'Andre grad av hurtiglagerets Levetid');
define('_SOBI2_CONFIG_L2CACHE_LIFETIME_SECONDS', 'Sekunder');
define('_SOBI2_CONFIG_L2CACHE_STRLEN', 'Maksimal lengde p&aring; streng');
define('_SOBI2_CONFIG_L2CACHE_STRLEN_EXPL', 'Viss du f&aring;r problemer med hurtiglagret, viss deler av siden detter ut, burde du redusere st&oslash;rrelsen.');
define('_SOBI2_CONFIG_L3CACHE_EXPL', '<b>Tredje grad av hurtiglager</b> - Hurtiglagring av attributter. Hurtiglagret vil bli oppdatert for hver visning, viss post/kategori har blitt endret.');
define('_SOBI2_CONFIG_L3CACHE_STRLEN', 'Maksimal lengde p&aring; streng');
define('_SOBI2_CONFIG_L3CACHE_ON', 'Tredje grads hurtiglager er akrivert');
define('_SOBI2_CONFIG_L3CACHE_CLEAR', 'T&oslash;m tredje grads hurtiglager');

# Added (RC 2.8.4)
define('_SOBI2_QFIELD_ALLOW', 'Tillat bruk av \'hurtig endring\'');
define('_SOBI2_QFIELD_ALLOW_ADM', 'For admin');
define('_SOBI2_QFIELD_ALLOW_EXPL', 'Om ja, registrerte brukere vil kunne bruke hurtig endring funksjonen. Med denne funksjonen, er det mulighet for &aring; endre mange egendefinerte felt direkte fra detaljert visning. Ved &aring; dobbel klikke p&aring; felt omr&aring;de. Advarsel: Viss en bruker endrer en post med denne funksjonen, vil ingen e-poster bli sendt!');
define('_SOBI2_CONFIG_ENTRY_RENEWAL', 'Fornyelse');
define('_SOBI2_CONFIG_ENTRY_ALLOW_RENEWAL', 'Tillat fornyelse');
define('_SOBI2_CONFIG_ENTRY_ALLOW_RENEWAL_EXPL', 'Om ja, vil registrerte brukere kunne fornye posten n&aring;r den g&aring;r ut.');
define('_SOBI2_CONFIG_ENTRY_ALLOW_REN_DAYS', 'Dager f&oslash;r posten g&aring;r ut');
define('_SOBI2_CONFIG_ENTRY_ALLOW_REN_DAYS_EXPL', 'Skriv inn hvor mange dager en post skal st&aring;, brukeren m&aring; kunne fornye.');
define('_SOBI2_CONFIG_ENTRY_RENEW_DISCOUNT', 'Rabatt');
define('_SOBI2_CONFIG_ENTRY_RENEW_DISCOUNT_EXPL', 'Skriv inn hvor mange prosent rabatt du &oslash;nsker &aring; gi som standard (0-100).');
define('_SOBI2_CONFIG_ENTRY_RENEW_DAYS', 'Forny for');
define('_SOBI2_CONFIG_ENTRY_RENEW_DAYS_EXPL', 'Velg, for hvor mange dager en bruker kan fornye en post for. Hvis det st&aring;r 0, vil standard antall dager bli brukt.');
define('_SOBI2_CONFIG_DAYS', 'Dager');
define('_SOBI2_CONFIG_ENTRY_RENEWAL_HEADER', 'Fornyelses alternativer');
define('_SOBI2_CONFIG_ENTRY_RENEW_DELETE_FEES', 'Slett gamle innbetalinger');
define('_SOBI2_CONFIG_ENTRY_RENEW_DELETE_FEES_EXPL', 'Om ja, alle valgte regninger fra den totale summen for den siste perioden bli slettet. Hvis ikke er alt summert.');
define('_SOBI2_LISTING_MANAGER_STATUS_FILTER', 'Status: ');
define('_SOBI2_LISTING_MANAGER_STATUS_FILTER_ALL', 'Alle');
define('_SOBI2_LISTING_MANAGER_STATUS_FILTER_UP', 'Avpubliserte');
define('_SOBI2_LISTING_MANAGER_STATUS_FILTER_P', 'Publiserte');
define('_SOBI2_LISTING_MANAGER_STATUS_FILTER_UA', 'Ikke godkjente');
define('_SOBI2_LISTING_MANAGER_STATUS_FILTER_A', 'Godkjente');
define('_SOBI2_LISTING_MANAGER_STATUS_FILTER_E', 'Utg&aring;tte');
define('_SOBI2_REG_MANAGER_SAVE_ERR', 'Kan ikke lagre register fil.  Pr&oslash;v manuelt.');
define('_SOBI2_REG_MANAGER_NEW_PAIR', 'Legg til n&oslash;kkel: ');
define('_SOBI2_REG_MANAGER_ADD_PAIR', 'Legg til n&oslash;kkel');
define('_SOBI2_REG_MANAGER_NEW_SECTION', 'Legg til seksjon:');
define('_SOBI2_REG_MANAGER_ADD_SECTION', 'Legg til seksjon');
define('_SOBI2_REG_MANAGER_WARNING', 'Tilleggs alternativer. Brukes p&aring; eget ansvar! Det kan skje stor skade ved feilbruk.');
define('_SOBI2_MENU_REG_MANAGER', 'Register endring');
define('_SOBI2_MENU_EDIT_FORM_TEMPLATE', 'Legg til post stilsett');
define('_SOBI2_FORM_TEMPLATE_ENABLE', 'Bruk stilsett istede for den standare funksjonen');
define('_SOBI2_FORM_TEMPLATE_ENABLE_EXPL', 'Hvis du vil bruke stilsettet, m&aring; du legge til hver egendefinert felt i stilsettet manuelt.');
define('_SOBI2_CONFIG_DEBUG_TMPL', 'Stilsett statistikk');
define('_SOBI2_CONFIG_GENERAL_EXSEARCH_CAT_FIELS_DEPEND', 'Vis felt kategori');
define('_SOBI2_CONFIG_GENERAL_EXSEARCH_CAT_FIELS_DEPEND_EXPL', 'Vis felt data i s&oslash;ke listen, i den valgte kategorien.');

# Added (RC 2.8.3)
define('_SOBI2_MENU_PLUGINS_DATATABLES', 'Databasetabell for utvidelser');
define('_SOBI2_PLUGINS_DATATABLES_NAME', 'Tabell navn');
define('_SOBI2_PLUGINS_DATATABLES_PNAME', 'Utvidelses navn');
define('_SOBI2_PLUGINS_DATATABLES_INFO', 'Informasjon');
define('_SOBI2_PLUGINS_DATATABLES_ROWS', 'Rader');
define('_SOBI2_PLUGINS_DATATABLES_CREATED', 'Laget');
define('_SOBI2_PLUGINS_DATATABLES_UPD', 'Oppdatert');
define('_JS_SOBI2_PLUGINS_DATATABLE_DELETE', '&Oslash;nsker du virkelig &aring; slette denne tabellen? \nAlle data vil bli slettet! ');
define('_SOBI2_PLUGINS_DATATABLE_DELETED', 'Tabellen har blitt fjernet');
define('_SOBI2_MENU_TEMPLATES_AND_CSS', 'Stilsett');
define('_SOBI2_CONFIG_GENERAL_SHOW_SUBCATS_UNDER_CAT', 'Vis underkategori liste');
define('_SOBI2_CONFIG_GENERAL_SHOW_SUBCATS_UNDER_CAT_EXPL', 'Vis en liste med underkategorier i Yahoo stil.');
define('_SOBI2_CONFIG_GENERAL_SHOW_NUMBER_SUBCATS', 'Antall under-kategorier');
define('_SOBI2_CONFIG_GENERAL_SORT_SUBCATS_BY', 'Sorter under-kategorier med');
define('_SOBI2_FIELD_USE_WYSIWYG_EXPL', 'Velg om TinyMCE tekstbehandler skal brukes i Ny/Endre post innsendingen. Vill bare fungere viss tekstomr&aring;de er valgt felt type. <strong>ET WYSIWYG FELT M&Aring; BLI SATT SOM N&Oslash;DVENDIG!!</strong>');

# Added (RC 2.8.2)
define('_SOBI2_ABOUT_ADDONS', 'Utvidelser');
define('_SOBI2_ABOUT_PBY', 'Laget av');
define('_SOBI2_ABOUT_NEWS', 'Nyheter');
define('_SOBI2_ABOUT_PBY_SHOW', 'Vis "Laget av" Link');
define('_SOBI2_ABOUT_PBY_SUPPORT', '<br /><strong>Fjener du "Laget av" fra komponenten, er det rimelig &aring; donere for det. </ Strong><br /><br />Utvikle og opprettholde SOBI2 er mye arbeid som skal gj&oslash;res tilstrekkelig. <br /> Klikk p&aring; donere knappen nedenfor for &aring; donere via PayPal. <br /><br /><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=sigsiu%2enet%40sigsiu%2enet&item_name=SOBI%202&item_number=SOBI2-CAB&no_shipping=2&lc=US&no_note=1&tax=0&currency_code=EUR&bn=PP%2dDonationsBF&charset=UTF%2d8" title="Donate for SOBI2" target="_blank"<img src ="components/com_sobi2/images/donate_button.png "alt =" Donér for SOBI2 via Paypal" border="0"/></a><br /><br />Takk.<br /><br />');
define('_SOBI2_ABOUT_PBY_JS_SUPPORT', "Ikke glem &aring; doner!");
define('_SOBI2_CODEPRESS_TOGGLE', 'Tekstbehandler for stilsett');

# Added (RC 2.8.1)
define('_SOBI2_FPERMS_HEADER', 'Fil system');
define('_SOBI2_FPERMS_ON', 'Endre fil/mappe rettigheter<br/>Har du problemer med rettighetene til SOBI2, sett denne til \'Nei\' og sette rettigheter manuelt');
define('_SOBI2_FPERMS_FMOD', 'Fil rettigheter');
define('_SOBI2_FPERMS_DMOD', 'Mappe rettigheter');
define('_SOBI2_FPERMS_WRITABLE', 'skrivbar');
define('_SOBI2_FPERMS_NWRITABLE', 'ikke skrivbar');
define('_SOBI2_CURRENT_FPERMS_HEADER', 'Mappe rettigheter');
define('_SOBI2_FIELDLIST_CSV_LIST', 'Legg til CSV attributter liste');
define('_SOBI2_FIELDLIST_CSV_LIST_EXPL', 'Du kan legge til CSV (med komma mellom) list of options and values in this form: <ul><li>Only field options: <b>option 1; option 2; option 3;</b></li><li>Field options with values: <b>option_1:Option 1; option_2:Option 2; option_3:Option 3;</b></li></ul>');
define('_SOBI2_FIELDLIST_CSV_SAVE', 'Lagre CSV listen');
define('_SOBI2_FIELDLIST_CSV_SAVE_EXPL', 'Lagre CSV lista istede for de andre alternativene.');

# Added (RC 2.8.0)
define("_SOBI2_CALENDAR_LANG", "nb");
define("_SOBI2_CALENDAR_FORMAT", "dd-mm-y");
define('_SOBI2_FIELD_COLS_EXPL', 'Antall kolonner i feltet. Bare gyldig dersom tekstomr&aring;de er valgt felt type, eller dersom et stort omr&aring;de for en linket media fil eller nummer av kolonner i checkboks gruppen.');
define('_SOBI2_FIELD_PREFERRED_SIZE_EXPL', 'St&oslash;rrelse for inputboksen eller valg liste. Bare gyldig dersom inputboks eller valg liste er felt type.');
define('_SOBI2_TOOLBAR_ADD_NEW_CAT', 'Legg til kategori');
define('_SOBI2_TOOLBAR_ADD_NEW_ITEM', 'Legg til post');
define('_SOBI2_CHECKBOX_YES', 'Ja');
define('_SOBI2_CHECKBOX_NO', 'Nei');
define('_SOBI2_CONFIG_GENERAL_FORCE_MENUID', 'Unik meny ID');
define('_SOBI2_CONFIG_GENERAL_FORCE_MENUID_EXPL', 'Om ja, for hver SOBI2 adresse(www) en unik meny ide vill bli brukt. Eller s&aring; vil den n&aring;v&aelig;rende iden bli brukt.');
define('_SOBI2_FIELD_ADM_ONLY', 'Administrative felt');
define('_SOBI2_FIELD_ADM_ONLY_EXPL', 'Bare for administrator, kun administrator via bak enden vil kunne endre og se dette feltet.');
define('_SOBI2_ALLOW_FE_ENTRIES', 'Tillat &aring; legge til poster');
define('_SOBI2_TOOLBAR_ADD_CATS_SERIE', 'Legg til mange kategorier');
define('_SOBI2_ADD_CATS_SERIE_NAMES', 'Sett inn et semikolon som separator i listen over kategorier');
define('_SOBI2_ADD_CATS_SERIE_NAMES_EXPL', 'Sett inn et semikolon som separator i listen over kategori navn, introtekster og kategori ikoner for &aring; legge til mange kategorier p&aring; en gang. The category name, introteksten og ikonent m&aring; separeres med et komma.<br/><strong>Kategoriene vil bli lagt til i den forh&aring;ndsvalgte kategorien.</strong><br/><br/>Eksempler:<br />Bare med kategori navn: kategori navn 1; kategori navn 2; kategori navn 3;<br />Kategori navn og introtekster og/eller kategori ikoner: kategori navn 1 : introtekst 1; kategori navn 2 : introtekst 2; kategori navn 3 : introtekst 3 : ikon.png;<br />Bare kategori navn og ikon: kategori navn :: ikon.png; ');
define('_SOBI2_LANG_REMOVED', 'Spr&aring;k fjernet');
define('_SOBI2_LANG_REM_ERROR', 'Spr&aring;ket ble fjernet, men en feil oppsto');
define('_SOBI2_LANG_NOT_REM_ERROR', 'Spr&aring;ket ble ikke Fjernet');
define('_SOBI2_LANG_FOR_VER', 'For versjon');
define('_SOBI2_CONFIG_LANGMAN_LIST_CREATED', 'Laget den');
define('_SOBI2_CONFIG_LANGMAN_INSTALLED_LANGS', 'Innstallerte spr&aring;k');
define('_SOBI2_CONFIG_LANG_PACK_UPLOAD', 'Last opp ny spr&aring;k pakke');
define('_SOBI2_CONFIG_LANGMAN_XML_PARSE_ERROR_NO_FILE', 'XML innstallasjons fil finnes ikke i denne ZIP pakken');
define('_SOBI2_CONFIG_GENERAL_SHOW_DESCRIPTION_ON_SEARCHPAGE', 'Vis beskrivelsen av komponenten p&aring; s&oslash;kesiden');
define('_SOBI2_CONFIG_PAYMENTS_PAY_PAL_RETURL', 'Tilbake adresse(www)');
define('_SOBI2_CONFIG_PAYMENTS_PAY_PAL_RETURL_EXPL', 'Adressen(www) til brukeren vil bli endret etter at betalingen ble laget.');
define('_SOBI2_CONFIG_PAYMENTS_CURRENCY_TEXT', 'Kode');
define('_SOBI2_CONFIG_GENERAL_EXSEARCH_CATCONT_HEIGHT', 'Kategori h&oslash;yde');
define('_SOBI2_CONFIG_GENERAL_EXSEARCH_CATCONT_HEIGHT_EXPL', 'Hvis du bruker vis/skjul utvidet s&oslash;k-knappen, m&aring; du definere kategorier beholder h&oslash;yde. merke til at h&oslash;yden m&aring; v&aelig;re store nok til &aring; inneholde s&aring; mange kombinasjonsbokser som St&oslash;rste dybde av underkategori struktur. En kombinasjonsboks har ca. 25 px (avhenger av CMS malen).');
define('_SOBI2_CONFIG_GENERAL_EXSEARCH_SEQUENCE', 'Rekkef&oslash;lge');
define('_SOBI2_CONFIG_GENERAL_EXSEARCH_SEQUENCE_FIELD_FIRST', 'Egendefinerte felt f&oslash;rst');
define('_SOBI2_CONFIG_GENERAL_EXSEARCH_SEQUENCE_CAT_FIRST', 'Kategorier f&oslash;rst');
define('_SOBI2_CONFIG_GENERAL_EXSEARCH_SEQUENCE_EXPL', 'Velg organisering av kategorier og egendefinerte felt i avansert s&oslash;k.');
define('_SOBI2_CONFIG_ENTRY_WS_HEADER', 'S&oslash;ke innstillinger');
define('_SOBI2_CONFIG_ENTRY_WS_FIELDS_ASSIGMENT', 'Felter');
define('_SOBI2_CONFIG_SYSTEM_MAILS', 'System e-poster');
define('_SOBI2_CONFIG_SYSTEM_MAILS_ADM_MAIL_USERS', 'Send system e-poster til');
define('_SOBI2_CONFIG_SYSTEM_MAILS_ADM_MAIL_USERS_EXPL', 'Velg hviljken brukergruppe som skal f&aring; informasjons e-postene.');
define('_SOBI2_CONFIG_SYSTEM_MAILS_USER_MAIL', 'Bruk samme som klient e-post');
define('_SOBI2_CONFIG_SYSTEM_MAILS_USER_MAIL_EXPL', 'Fra hvor skal klient e-post adressene bli hentet? Velg mellom SOBI2 eller CMS bruker ordning. Notis, dersom adressen blir hentet fra CMS bruker ordning, &aring; legge til poster m&aring; v&aelig;re tillat bare for registrerte brukere.');
define('_SOBI2_CONFIG_SYSTEM_MAILS_USER_MAIL_SOBI', 'Adresser skrevet inn i SOBI2 poster');
define('_SOBI2_CONFIG_SYSTEM_MAILS_USER_MAIL_CMS', 'Adresser som ble brukt under registrering');
define('_SOBI2_CONFIG_SYSTEM_MAILS_USER_FID', 'Felt hvor e-post adresser er lagret');
define('_SOBI2_CONFIG_SYSTEM_MAILS_USER_FID_EXPL', 'Velg hvordan e-postene skal bli lagret. Bare gyldig dersom e-post adresser fra SOBI2 blir brukt.');
define('_SOBI2_ALL_LISTING_NON_FREE_OPT', 'Total kostnad');
define('_SOBI2_CONFIG_SEARCH_OPT', 'S&oslash;ke alternativer');
define('_SOBI2_CONFIG_GENERAL_EXSEARCH_USE_SLIDER', 'Vis link til avansert s&oslash;k');
define('_SOBI2_CONFIG_GENERAL_EXSEARCH_USE_SLIDER_EXPL', 'Om ja, en knapp for &aring; vis/skjul avanserte s&oslash;ke alternativer.');
define('_SOBI2_CONFIG_GENERAL_EXSEARCH_SLIDER_FADE_ON_START', 'Fjern ved kj&oslash;ring');
define('_SOBI2_CONFIG_GENERAL_EXSEARCH_SLIDER_FADE_ON_START_EXPL', 'Om ja, det avanserte s&oslash;ke alternativene er skult i begynnelsen (bare viss avansert s&oslash;k er aktivert).');
define('_SOBI2_CONFIG_GENERAL_EXSEARCH_SLIDER_FADE_AFTER_SEARCH', 'Fjern ved s&oslash;king');
define('_SOBI2_CONFIG_GENERAL_EXSEARCH_SLIDER_FADE_AFTER_SEARCH_EXPL', 'Om ja, det avanserte s&oslash;ke alternativene vil bli skjult etter s&oslash;k (bare viss avansert s&oslash;k er aktivert).');
define('_SOBI2_LISTING_MANAGER_SEARCH_ONLY_START', 'Bare poster som starter med');
define('_SOBI2_CONFIG_GENERAL_SHOW_ALPHA', 'Vis alfabet linjen');
define('_SOBI2_FORM_JS_CAT_NO_PARENT_CAT', 'Du kan ikke legge til en post til en kategori som har underkategorier. Velg en av underkategoriene.');
define('_SOBI2_FIELDLIST_SELECT', '&nbsp;---- velg ----&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
define('_SOBI2_FIELDLIST_LIST_OF_VALUES', 'Listen er forh&aring;ndsdefinert for valg liste/checkboks gruppe');
define('_SOBI2_FIELDLIST_NEW_VALUE_PAIR', 'Legg til nytt par av bokser');
define('_SOBI2_FIELDLIST_OPT_NAME', 'Alternativ navn');
define('_SOBI2_FIELDLIST_OPT_VALUE', 'Alternativ tekst');
define('_SOBI2_FIELDLIST_DELETE_VALUE_PAIR', 'Fjern bokspar');
define('_SOBI2_FIELDLIST_SORT_VALUES', 'Sorterings alternativer');
define('_SOBI2_FIELDLIST_SORT_VALUES_EXPL', 'Sorterings alternativet er for &aring; legge til en post fra alfabet indeksen eller ikke.');
define('_SOBI2_FIELDLIST_ADD_SELECT_LABEL', 'Velg');
define('_SOBI2_FIELDLIST_ADD_SELECT_LABEL_EXPL', 'Velg om alternativ alternativ med teksten "Velg" skal bli vist.');
define('_SOBI2_SAVE_IMG_TO_BIG', 'Bilde opplastningen feilet! Bildet tok for stor plass. Fil st&oslash;rrelsen er: ');
define('_SOBI2_EF_MAX_FILE_SIZE', ' Fil st&oslash;rrelsen kan ikke v&aelig;re st&oslash;rre enn ');
define('_SOBI2_EF_KB_FILE_SIZE', ' kB');

# Added 24.07.2007 (RC 2.7.4)
define('_SOBI2_MENU_EULA', 'Sluttbruker lisens');
define('_SOBI2_CONFIG_GENERAL_USE_EXSEARCH', 'Bruk utvidet s&oslash;k');
define('_SOBI2_CONFIG_GENERAL_USE_EXSEARCH_EXPL', 'Bruk utvidet s&oslash;k i stedet for den normalt s&oslash;k. Dette gj&oslash;r det mulig for bes&oslash;kende &aring; s&oslash;ke i en bestemt kategori.');
define('_SOBI2_CONFIG_ENTRY_GMAPS_NOTICE', 'Google Maps (geografiske kordinater er n&oslash;dvendig for hver post)');

# Added 8.06.2007 (RC 2.7.2)
define('_SOBI2_CONFIG_GENERAL_USE_ATREE', 'Bruk SigsiuTree');
define('_SOBI2_CONFIG_GENERAL_USE_ATREE_EXPL', 'Bruk SigsiuTree istede for det standard dTree. Dette er nyttig hvis du har en rekke kategorier og nettleser gir opp p&aring; analyse av JavaScript kode.');
define('_SOBI2_CONFIG_GENERAL_ATREE_IMAGES', 'SigsiuTree Bilder');

# Added 18.05.2007 (RC 2.7.1)
define('_SOBI2_CONFIG_CUSTOM_FIELD_CUSTOM_CODE', 'Tekst kode');
define('_SOBI2_CONFIG_CUSTOM_FIELD_CUSTOM_CODE_EXPL', '
I tekst kode feltet blir normal tekst m/HTML kodene bli vist i "legg til/rediger oppf&oslash;ring form". S&aring; du kan til legge til noen beskrivelse tekster.<br/><br/><strong> Tekstene vil kun vises i Legg til oppf&oslash;ring. Ingenting vil bli lagret i Databasen!</ Strong><br/><br/>
Sett inn tekst koden i tekstboksen. Det vil bli vist i stedet for en normal feltet. Du kan bruke f&oslash;lgende plassholdere: <br/>
<ul>
<li> (componentName) - vil bli erstattet med SOBI2 navn (justerbart i Generell konfigurasjon - Komponent Navn) </li>
<li> (sitename) - vil bli erstattet med din sides navn </li>
<li> (sobi2Lang) - vil bli erstattet med det valgte spr&aring;ket </li>
<li> (valuta) - vil bli erstattet med valuta (justerbart i Betalingsalternativer - valutasymbol) </li>
<li> (entryExpirationTime) - vil bli erstattet med antall dager for publisering </li>
<li> (imgLabel) - vil bli erstattet med bildet etiketten (justerbart i Post-konfigurasjon - Image Label) </li>
<li> (priceForImg) - vil bli erstattet med prisen for bildet (justerbart i Post-konfigurasjon - Pris for bilde) </li>
<li> (icoLabel) - vil bli erstattet med ikonet etiketten (justerbart i Post-konfigurasjon - symbol Label) </li>
<li> (priceForIco) - vil bli erstattet med prisen p&aring; ikonet (justerbart i Post-konfigurasjon - Pris for symbol) </li>
<li> (bankData) - vil bli erstattet med banken data info for utbetalinger </li>
<li> (payPalMail) - vil bli erstattet med e-postadresse for PayPal (justerbart i Betalingsalternativer - E-post adresse til PayPal) </li>
<li> (payPalUrl) - vil bli erstattet med PayPal webadresse (justerbart i Betalingsalternativer - Paypal Adresse(www)) </li>
<li> (paymentReference) - vil bli erstattet med betaling referanse (justerbart i Betalingsalternativer - Betaling Referanse) </li>
<li> (basicPrice) - vil bli erstattet med avgift for grunnleggende oppf&oslash;ring (justerbart i Entry-konfigurasjon - Avgift for Minimal Post) </li>
<li> (basicPriceLabel) - vil bli erstattet med tittelen for grunnleggende oppf&oslash;ring (justerbart i Entry-konfigurasjon - Tittel for grunnleggende Post) </li>
<li> (googleApiKey) - vil bli erstattet med Google API-n&oslash;kkel (justerbart i Vis konfigurasjon - Google Maps - API-n&oslash;kkel) </li>
</ul>
');

# Added 17.04.2007 (RC 2.7.0)
define('_SOBI2_CONFIG_CACHE_DESCRIPTION_TEXT', 'Hurtiglager alternativer');
define('_SOBI2_CONFIG_CACHE_ON', 'Hurtiglager aktivert');
define('_SOBI2_CONFIG_CACHE_LIFETIME', 'Tid i hurtiglager');
define('_SOBI2_CONFIG_CACHE_LIFETIME_EXPL', '	
Hurtiglager levetid kan bli satt til en sv&aelig;rt h&oslash;y verdi fordi bufferen vil bli oppdatert hver gang noe blir endret. For eksempel, hvis brukeren har redigert hans oppf&oslash;ring eller admin har endret konfigurasjon.');
define('_SOBI2_CONFIG_CACHE_LIFETIME_SEC', 'Sekunder');
define('_SOBI2_CONFIG_CACHE_LIFETIME_MIN', 'Minutter');
define('_SOBI2_CONFIG_CACHE_LIFETIME_HOURS', 'Timer');
define('_SOBI2_CONFIG_CACHE_LIFETIME_DAYS', 'Dager');
define('_SOBI2_CONFIG_CACHE_EMPTY', 'T&oslash;m&nbsp;hurtiglager');
define('_SOBI2_CONFIG_CACHE_REMOVED', 'Hurtiglager t&oslash;mt');
define('_SOBI2_CONFIG_CACHE_DIR', 'Hurtiglager mappe');
define('_SOBI2_CONFIG_CACHE_DIR_EXPL', 'Hvor det skal lagres. For en absolutt sti, plasseringen adresse har til &aring; starte med /. Eller om adressen er i forhold til CMS roten.');
define('_SOBI2_CONFIG_PAYMENTS_PAY_PAL_URL', 'Paypal adresse(www)');
define('_SOBI2_CONFIG_PAYMENTS_PAY_PAL_URL_EXPL', 'Du kan endre m&aring;let PayPal adresse(www) her. For eksempel hvis du &oslash;nsker &aring; bruke Paypal sandboks modus. Standard skal v&aelig;re https://www.paypal.com/cgi-bin/webscr');
define('_SOBI2_MENU_EDIT_VC_TEMPLATE', 'Kategori visnings stilsett');
define('_SOBI2_VC_TEMPLATE_ENABLE', 'Bruk stilsett istede for standard funksjonen');
define('_SOBI2_VC_TEMPLATE_ENABLE_EXPL', 'Hvis du vil bruke stilsettet, m&aring; du legge til noen nye egendefinerte feltet i malen manuelt. Ny linje innstillingen fra felt er uten virkning hvis V-Card stilsettet er brukt.');
define('_SOBI2_CONFIG_GENERAL_USE_RSS', 'Aktiver RSS');

# Added 16.02.2007 (RC 2.6.1)
define('_SOBI2_MENU_ERRLOG', 'Feilmeldinger');
define('_SOBI2_ERRLOG_FILE_SIZE', 'Feilmeldings filens st&oslash;rrelse: ');
define('_SOBI2_ERRLOG_FILE_TOO_BIG', '<big>Feilmeldingsfilen er veldig stor (over 500 kB). Det kan gj&oslash;re at nettleseren din eller serveren henger.</big>');
define('_SOBI2_ERRLOG_FILE_SHOW', 'Vis filen uansett');
define('_SOBI2_ERRLOG_FILE_DOWNLOAD_FULL', 'Last ned feilmeldingsfil');
define('_SOBI2_ERRLOG_FILE_DELETE', 'Slett');
define('_SOBI2_ERRLOG_FILE_DOWNLOAD', 'Last ned');
define('_SOBI2_ERRLOG_NO_FILE', '<big>Kunne ikke &aring;pne feilmeldingsfilen. Enten s&aring; er det ingen feil eller s&aring; kunne ikke SOBI2 generere feilmeldingsfil</big>');
define('_SOBI2_ERRLOG_FILE_DELETED', 'Feilmeldingsfil Slettet');
define('_SOBI2_ERRLOG_FILE_NOT_DELETED', 'Kunne ikke slette feilmeldingsfilen ');
define('_SOBI2_ERR_NOTICE', 'PHP varsel - Inen panikk. Det kan hjelpe deg/oss for &aring; finne feilen dersom noe er galt');
define('_SOBI2_ERR_WARNING', 'PHP advarsel - Fortall oss om advarselen p&aring; SOBI2 forumet');
define('_SOBI2_ERR_ERROR', 'PHP feil - Kritisk feil, informer oss om dette p&aring; SOBI2 forumet');
define('_SOBI2_ERR_INTERN', 'Intern SOBI2 Feil -  Denne informasjonen er nyttig for &aring; finne grunnen til at noe g&aring;r galt');
define('_SOBI2_CONFIG_DEBUG_DESCRIPTION_TEXT', 'Feils&oslash;kings og logg alternativer');
define('_SOBI2_CONFIG_DEBUG_LEVEL', 'Feis&oslash;kings grad');
define('_SOBI2_CONFIG_DEBUG_SHOW_ERR', 'Vis feil');
define('_SOBI2_CONFIG_DEBUG_LEVEL_0', 'Ingen');
define('_SOBI2_CONFIG_DEBUG_LEVEL_7', 'Bare kritiske feil');
define('_SOBI2_CONFIG_DEBUG_LEVEL_8', 'Feil & advarsler (anbefalt)');
define('_SOBI2_CONFIG_DEBUG_LEVEL_9', 'Alle feil, advarsler & varsler');

# Added 19.11.06 (RC 2.5.7)
define('_SOBI2_FIELD_VIDEO', 'linket media fil');
define('_SOBI2_BASE_ENTRY_FEES', 'Betal for en minimal post');
define('_SOBI2_BASE_ENTRY_FEES_EXPL', 'La feltet v&aelig;re tomt eller skriv inn 0 viss den minimale post typen er gratis.');
define('_SOBI2_BASE_ENTRY_FEES_LABEL', 'Tittel for en minimal post');
define('_SOBI2_BASE_ENTRY_FEES_LABEL_EXPL', 'Tittelen vil bli vist i betalings sammendraget.');
define('_SOBI2_FIELD_IS_URL_EXPL', 'Velg om feltet skal v&aelig;re for en adresse(www), en e-post adresse, et bilde eller en linket mediafil, video etc.');
define('_SOBI2_FIELD_ROWS_EXPL', 'Antall av rader for feltet. Bare gyldig dersom tekstomr&aring;de er valgt felt type, eller et stort omr&aring;de for en linked media fil.');

# Added 28.10.06 (RC 2.5)
define('_SOBI2_FIELD_IMG', 'bilde');
define('_SOBI2_LISTING_FILTER', 'Filter: ');
define('_SOBI2_CONFIG_ENTRY_ALLOW_BACKGROUND', 'Tillat &aring; velge bakgrunn');
define('_SOBI2_CONFIG_ENTRY_ALLOW_BACKGROUND_EXPL', 'Tillat brukere &aring; endre bagrunn for poster.');
define('_SOBI2_CONFIG_VIEW_ALLOW_ANO', 'Uregistrerte brukere kan se detaljert visning');
define('_SOBI2_CONFIG_VIEW_ALLOW_ANO_EXPL', 'Tillat uregistrerte brukere &aring; se detaljert visning.');
define('_SOBI2_PLUGIN_ENABLED', 'Utivdelse aktivert');
define('_SOBI2_PLUGIN_DISABLED', 'Utivdelse deaktivert');
define('_SOBI2_PLUGINS_INSTALLER_PI_DELETE_FILES_ERROR', 'Kan ikke fjerne noen filer og mapper');
define('_SOBI2_PLUGINS_INSTALLER_PI_DELETE_ERROR', 'Kan ikke fjerne utvidelses data fra databasen');
define('_SOBI2_PLUGINS_INSTALLER_PI_DROP_ERROR', 'Kan ikke fjerne tabellene i databasen for utvidelsen');
define('_SOBI2_PLUGINS_INSTALLER_PI_NOT_FOUND', 'Kan ikke finne tabellene for utvidelsen i databasen');
define('_SOBI2_PLUGINS_INSTALLER_REMOVED', ' Utvidelsen ble avinnstallert med suksess');
define('_SOBI2_PLUGINS_INSTALLER_PID_MISSING', ' gj&oslash;r et valg fra lista');
define('_SOBI2_PLUGINS_INSTALLER_COPY_ERROR', 'Feil under kopiering av filer');
define('_SOBI2_PLUGINS_INSTALLER_INSTALLED', ' Utvidelsen ble innstallert med suksess');
define('_SOBI2_PLUGINS_INSTALLER_ERROR', 'Feil under innstallering av ny utvidelse');
define('_SOBI2_PLUGINS_INSTALLER_ALLREADY_EXISTST', 'En utvidelse med dette navnet er allerede innstallert');
define('_SOBI2_PLUGINS_ENABLED', 'Aktivert');
define('_SOBI2_PLUGINS_POSITION', 'Posisjon');
define('_SOBI2_PLUGINS_INIT_FILE', 'Ini fil');
define('_SOBI2_PLUGINS_AUTHOR', 'Bruker');
define('_SOBI2_PLUGINS_AUTHOR_URL', 'Bruker nettside');
define('_SOBI2_PLUGINS_VER', 'Versjon');
define('_SOBI2_CONFIG_PLUGINS_INSTALLED_PLUGINS', 'Innstallerte utvidelser');
define('_SOBI2_CONFIG_PLUGINS_INSTALL_NEW', 'Innstaller utvidelse');
define('_SOBI2_CONFIG_PLUGINS_UPLOAD', 'Last opp utvidelses pakke');
define('_SOBI2_MENU_PLUGINS_HEADER', 'Utvidelser');
define('_SOBI2_MENU_PLUGINS_MANAGER', 'Utvidelse');
define('_SOBI2_PLUGIN_HEADER', 'Utvidelse');

# Added 10.10.2006 (RC 2)
define('_SOBI2_MENU_EDIT_TEMPLATE', 'Stilsett for detaljert visning');
define('_SOBI2_CONFIG_GENERAL_SHOW_COUNTER', 'Antall kategorier og underkategorier');
define('_SOBI2_CONFIG_GENERAL_SHOW_COUNTER_EXPL', 'Vis antall av poster og underkategorier under kategorien i kategori listen.');
define('_SOBI2_CONFIG_ENTRY_ALLOW_ADDING_TO_PARENT', 'Tillat &aring; legge poster i flere kategorier');
define('_SOBI2_CONFIG_ENTRY_ALLOW_ADDING_TO_PARENT_EXPL', 'Tillat &aring; legge poster i kategorier som har underkategorier');
define('_SOBI2_MENU_VER_CHECKER', 'Versjon');
define('_SOBI2_CONFIG_CHECK_VER', 'Sjekk hvilken versjon du har av SOBI2');
define('_SOBI2_CONFIG_ACT_VER', 'Din versjon er: ');
define('_SOBI2_CONFIG_VER_CHECK', 'Sjekk for nyere versjon');
define('_SOBI2_CONFIG_VER_CHECK_ERROR', 'Kunne ikke kontakte server.  Pr&oslash;v igjen senere!');
define('_SOBI2_MENU_EMAILS', 'E-Post stilsett');
define('_SOBI2_CONFIG_MAIL_LINK_MARKERS', 'Plassholder beskrivelse');
define('_SOBI2_CONFIG_MAIL_ABOUT_MARKERS', 'F&oslash;lgende plassholdere kan bli brukt i e-post: ' .
'<ul>' .
'<li>{sobi} - SOBI2 navn (kan endres i generell konfigurasjon - komponent navn)</li>' .
'<li>{sitename} - sidenavn</li>' .
'<li>{user} - brukernavn</li>' .
'<li>{id} - SOBI2 id</li>' .
'<li>{title} - Post tittel</li>' .
'<li>{link_details} - Detaljert visning</li>' .
'<li>{link_edit} - Endre funksjonen</li>' .
'<li>{expiration_date} - Dato n&aring;r posten utg&aring;r</li>' .
'<li>{expiration_time} - Antall dager til at posten utg&aring;r</li>' .
'<li>{selected_options}  - Ikke gratise felt (bare for betalings e-poster)</li>' .
'<li>{total}  - Ikke gratise felt totelt (bare for betalings e-psoter)</li>' .
'<li>{paypal_url}  - PayPal adresse(www) (bare for betalings e-psoter)</li>' .
'<li>{bank_data}  - Bank data (bare for betalings e-psoter)</li>' .
'</ul>' .
'I tillegg kan du bruke hvert felt navn som plassholder. For eksempel: {field_email} Vil bli vist i e-post i field_email. Sammen med e-post adressen.');
define('_SOBI2_CONFIG_EMAILS', 'E-post tekster');
define('_SOBI2_CONFIG_FOOTER', 'E-post dignatur');
define('_SOBI2_CONFIG_FOOTER_EXPL', 'Denne teksten vil bli lagt til i alle e-poster.');
define('_SOBI2_PLEASE_WAIT', ' vent ... ');
define('_SOBI2_READY', 'Klar: ');
define('_SOBI2_SELECT_OPTION_TO_EDIT', 'Velg e-post stilsett for &aring; endre: ');
define('_SOBI2_EMAIL_ON_SUBMIT', 'Ved ny post (bruker)');
define('_SOBI2_EMAIL_ON_UPDATE', 'Ved endring av post (bruker)');
define('_SOBI2_EMAIL_ON_APPROVE', 'Ved godkjennelse av post (bruker)');
define('_SOBI2_EMAIL_ON_PAYMENT', 'Betalings e-post (bruker)');
define('_SOBI2_EMAIL_ON_SUBMIT_ADMIN', 'Ved ny post (admin)');
define('_SOBI2_EMAIL_ON_UPDATE_ADMIN', 'Ved endring av post (admin)');
define('_SOBI2_EMAIL_ON_PAYMENT_ADMIN', 'Betalings e-post (admin)');
define('_SOBI2_EMAIL_TEXT', 'E-post tekst: ');
define('_SOBI2_EMAIL_TITLE', 'E-post emne: ');
define('_SOBI2_CONFIG_MAIL_LANG_EXPL', 'Velg spr&aring;k for &aring; endre i feltene.');
define('_SOBI2_CONFIG_MAIL_LANG', 'Velg spr&aring;k ');
define('_SOBI2_CONFIG_ENTRY_NOTIFY_ADMIN_PAYMENT_EXPL', 'Send e-post til admin dersom en ny post med ikke gratise alternativer ble lagt til.');

# Added 02.10.2006 (RC 1)
define('_SOBI2_CONFIG_ENTRY_NOTIFY_ADMIN_PAYMENT', 'Send betalings e-poster til admin');
define('_SOBI2_CONFIG_FIELDS_EDIT_TO_CHANGE', 'Du m&aring; endre feltet for &aring; endre dette alternativet');
define('_SOBI2_CONFIG_FIELDS_CANNOT_BE_CHANGE', 'Dette alternativet kan ikke bli endret');
define('_SOBI2_CONFIG_ENTRY_GMAPS_ON', 'Vis Google Maps');
define('_SOBI2_CONFIG_ENTRY_GMAPS_ON_EXPL', 'Vis/skjul kartet (trenger Google Api Kode)');
define('_SOBI2_CONFIG_ENTRY_GMAPS_API', 'API kode');
define('_SOBI2_CONFIG_ENTRY_GMAPS_API_EXPL', 'Google Maps Api kode for siden');
define('_SOBI2_CONFIG_ENTRY_GMAPS_W', 'Kart bredde');
define('_SOBI2_CONFIG_ENTRY_GMAPS_W_EXPL', 'Kartets bredde er i pixler.');
define('_SOBI2_CONFIG_ENTRY_GMAPS_H', 'Kart h&oslash;yde');
define('_SOBI2_CONFIG_ENTRY_GMAPS_H_EXPL', 'Kartets h&oslash;yde er i pixler.');
define('_SOBI2_CONFIG_ENTRY_GMAPS_LAT', 'Breddegrad');
define('_SOBI2_CONFIG_ENTRY_GMAPS_LAT_EXPL', 'Velg feltet for hvor breddegraden er lagret.');
define('_SOBI2_CONFIG_ENTRY_GMAPS_LON', 'H&oslash;ydegrad');
define('_SOBI2_CONFIG_ENTRY_GMAPS_LON_EXPL', 'Velg feltet hvor h&oslash;ydegraden er lagret.');
define('_SOBI2_CONFIG_ENTRY_GMAPS_BUBBLE', 'Informasjons boble');
define('_SOBI2_CONFIG_ENTRY_GMAPS_BUBBLE_EXPL', '&Aring;pner informasjons boblen i \'hent mapper\' skjemaet.');
define('_SOBI2_CONFIG_ENTRY_GMAPS_BUBBLE_DISABLE', 'Deaktiver informasjons boblen');
define('_SOBI2_CONFIG_ENTRY_GMAPS_BUBBLE_EN_WAIT', 'Aktiver, men bare vis boblem viss mark&oslash;ren blir klikket p&aring;');
define('_SOBI2_CONFIG_ENTRY_GMAPS_BUBBLE_EN_OPEN', 'Aktiver og &aring;pen boblen n&aring;r kartet er lastet');
define('_SOBI2_CONFIG_ENTRY_GMAPS_ZOOM', 'Forst&oslash;rrelses grad');
define('_SOBI2_CONFIG_ENTRY_GMAPS_ZOOM_EXPL', 'Forst&oslash;rrelses grad for kartet.');

# Added 26.09.2006 (Beta 2.2)
define('_SOBI2_CONFIG_SECIMG_USING_FAILED', 'Din server har ikke st&oslash;tte for en funksjon som er n&oslash;dvendig for &aring; lage sikkerhets bilde, derfor er denne funksjonen deaktivert.');

# Added 23.09.2006 (Beta 2.1)
define('_SOBI2_CONFIG_ENTRY_MAX_FILE_SIZE', 'Maksimal st&oslash;rrelse p&aring; opplastede filer');
define('_SOBI2_CONFIG_ENTRY_FILE_SIZE_BYTES', 'kB');

# Added 18.09.2006
define('_SOBI2_MENU_LANG_MANAGER', 'Spr&aring;k');
define('_SOBI2_CONFIG_LANGMAN_INSTALL_NEW', 'Innstaller ny spr&aring;k pakke');
define('_SOBI2_CONFIG_LANGMAN_INSTALL_BT', 'Innstaller');
define('_SOBI2_CONFIG_LANGMAN_NO_FILE', 'Feil: Finner ikke innstallasjons pakke. Innstallering avbrutt.');
define('_SOBI2_CONFIG_LANGMAN_FILE_EXT_ERROR', 'Feil: Ikke en st&oslash;ttet filtype. Innstallering avbrutt.');
define('_SOBI2_CONFIG_LANGMAN_FILE_UPLOAD_ERROR', 'Feil: Kunne ikke kopiere pakke til innstallasjons mappe. Innstallering avbrutt.');
define('_SOBI2_CONFIG_LANGMAN_FILE_EXTRACT_ERROR', 'Feil: Kunne ikke pakke ut innstallasjons pakke. Innstallering avbrutt.');
define('_SOBI2_CONFIG_LANGMAN_XML_PARSE_ERROR', 'Feil: Kunne ikke lese XML filen. Innstallering avbrutt.');
define('_SOBI2_CONFIG_LANGMAN_FP_FILE_COPY_ERROR', 'Feil: Kunne ikke kopiere spr&aring;k fil for forsiden. Innstallering avbrutt.');
define('_SOBI2_CONFIG_LANGMAN_BE_FILE_COPY_ERROR', 'Ingen spr&aring;k fil for administrasjonsdel. ');
define('_SOBI2_CONFIG_LANGMAN_LABELS_MISSING_ERROR', 'Advarsel: Det mangler noen strenger i spr&aring;k pakken. ');
define('_SOBI2_CONFIG_LANGMAN_ALL_LABELS_INSTALLED', 'Nytt spr&aring;k innstallert.');
define('_SOBI2_CONFIG_LANGMAN_NOT_ALL_LABELS_INSTALLED', 'Advarsel: Noe tekst mangler. ');

# Added 14.09.2006
define('_SOBI2_CONFIG_ENTRY_NOTIFY_ADMIN_EDIT', 'Informer administratorer om endringer');
define('_SOBI2_CONFIG_ENTRY_NOTIFY_ADMIN_EDIT_EXPL', 'Informer administratorene viss en bruker har endret en post.');
define('_SOBI2_CONFIG_ENTRY_NOTIFY_AUTHOR_NEW', 'Send bekreftelses e-post');
define('_SOBI2_CONFIG_ENTRY_NOTIFY_AUTHOR_NEW_EXPL', 'Send bekreftelses e-post ved en ny post til brukeren.');
define('_SOBI2_CONFIG_ENTRY_NOTIFY_AUTHOR_EDIT', 'Send bekreftelses e-post om endringer');
define('_SOBI2_CONFIG_ENTRY_NOTIFY_AUTHOR_EDIT_EXPL', 'Send bekreftelses e-post om endringer til brukeren. Ingen e-post vill bli sendt administrator viss endringene ikke var over bak enden for CMSet.');
define('_SOBI2_CONFIG_ENTRY_NOTIFY_AUTHOR_APPROVED', 'Send bekreftelses e-post om godkjennelse');
define('_SOBI2_CONFIG_ENTRY_NOTIFY_AUTHOR_APPROVED_EXPL', 'Informer brukeren viss posten har blitt godkjennt.');

# General labels
define('_SOBI2_SEND_L', 'Send');
define('_SOBI2_YES_U', 'Ja');
define('_SOBI2_NO_U', 'Nei');
define('_SOBI2_ADD_U', 'Legg til');
define('_SOBI2_ALL_U', 'Alle');
define('_SOBI2_CATEGORY_L', 'kategori');
define('_SOBI2_CATEGORY_H', 'Kategori');
define('_SOBI2_CATEGORIES_L', 'kategorier');
define('_SOBI2_CATEGORIES_H', 'Kategorier');
define('_SOBI2_IS_FREE_L', 'gratis');
define('_SOBI2_IS_NOT_FREE_L', 'koster');
define('_SOBI2_COST_L', 'Koster penger');
define('_SOBI2_NOT_AUTH', 'Du har ikke rettigheter for &aring; se denne siden');
define('_SOBI2_SELECT', 'velg');
define('_SOBI2_SEARCH_H', 'S&oslash;k');
define('_SOBI2_ADD_NEW_ENTRY', 'Legg til ny post');
define('_SOBI2_NUMBER_H', 'Nummer');
define('_SOBI2_NEVER_U', 'Aldri');
define('_SOBI2_PUBLISHED', 'Publisert');
define('_SOBI2_CONFIRMED', 'Godkjent');
define('_SOBI2_APPROVED', 'Godkjent');
define('_SOBI2_REORDER', 'Reorganiser');
define('_SOBI2_ORDER', 'Posisjon');
define('_SOBI2_GUEST', 'Gjest');
define('_SOBI2_LANGUAGE_L', 'spr&aring;k');
define('_SOBI2_CANCEL', 'Avbryt');
define('_SOBI2_SAVE', 'Lagre');
define('_SOBI2_IMAGE_U', 'Bilde');
define('_SOBI2_IMAGES_U', 'Bilder');
define('_SOBI2_META_U', 'Meta Informasjon');
define('_SOBI2_PUBLISHING_U', 'Publiserer');
define('_SOBI2_MOVE_UP', 'Flytt opp');
define('_SOBI2_MOVE_DOWN', 'Flytt ned');
define('_SOBI2_MENU', 'Meny');
define('_SOBI2_SAVING_ERROR', 'Intern feil n&aring;r du lagret. Pr&oslash;v igjen.');
define('_SOBI2_GENERAL_FILE_ERROR', 'Kunne ikke &aring;pne ');
define('_SOBI2_DAYS_L', 'dager');

# Menu
define('_SOBI2_MENU_LISTING_AND_CATS', 'Poster og kategorier');
define('_SOBI2_MENU_AWAITING_APPR', 'Venter p&aring; publisering');
define('_SOBI2_MENU_CONFIG', 'Konfigurasjon');
define('_SOBI2_MENU_GENERAL_CONFIG', 'Generell konfigurasjon');
define('_SOBI2_MENU_GENERAL_NEW_ENTRIES_CONFIG', 'Post konfigurasjon');
define('_SOBI2_MENU_GENERAL_NEW_VIEW_CONFIG', 'Vis konfigurasjon');
define('_SOBI2_MENU_FIELDS_DATA', 'Felter og informasjon');
define('_SOBI2_MENU_EDIT_CSS', 'CSS fil');
define('_SOBI2_MENU_ABOUT', 'Om');
define('_SOBI2_MENU_UNINSTALL_SOBI', 'Avinnstaller');
define('_SOBI2_MENU_ABOUT_SOBI', 'Om SOBI2');

# Tabs
define('_SOBI2_TABHR_CATS', 'Kategorier');
define('_SOBI2_TABHR_ITEMS', 'Poster');

# Category Manager
define('_SOBI2_CATS_MANAGER', 'Kategori');
define('_SOBI2_CAT_NAME', 'Kategori navn');
define('_SOBI2_CAT_INTROTEXT', 'Beskrivelsestekst');
define('_SOBI2_CAT_INTROTEXT_EXPL', 'Kort beskrivelse av aktegorien. Som ogs&aring; blir lagt til meta. Ikke skriv HTML eller lag nye linjer.');
define('_SOBI2_CAT_DESCRIPTION', 'Kategori beskrivelse');
define('_SOBI2_NO_CATS_IN_CAT', '<h3>&nbsp; &nbsp; Ingen underkategorier i denne kategorien</h3>');

# Entry Manager
define('_SOBI2_LISTING_MANAGER', 'Post');
define('_SOBI2_NO_ITEMS_IN_CAT', '<h3>&nbsp; &nbsp; Ingen poster i denne kategorien</h3>');
define('_SOBI2_LISTING_TITLE', 'Post Tittel');
define('_SOBI2_LISTING_ADDED', 'Laget');
define('_SOBI2_NEW_ORDERING_SAVED', 'Ny organisering lagret');
define('_SOBI2_UNAPPROVED_MANAGER', 'Avpubliserte poster');
define('_SOBI2_NO_ITEMS_AW_APP', '<h3>Ingen poster venter p&aring; publisering</h3>');
define('_SOBI2_LISTING_OWNER', 'Bruker');
define('_SOBI2_LISTING_OWNER_TYPE', 'Brukergruppe');
define('_SOBI2_LISTING_UPDATING_USER', 'Sist modifisert av');
define('_SOBI2_LISTING_ALL_ENTRIES', 'Alle poster');

# Toolbar
define('_SOBI2_TOOLBAR_EDIT', 'Endre');
define('_SOBI2_TOOLBAR_ADD_NEW', 'Legg til ny: ');
define('_SOBI2_TOOLBAR_REMOVE', 'Fjern');
define('_SOBI2_TOOLBAR_REMOVE_EXPL', 'Fjener post fra denne kategorien');
define('_SOBI2_TOOLBAR_DEL', 'Slett');
define('_SOBI2_TOOLBAR_DEL_EXPL', 'Sletter postering permanent');
define('_SOBI2_TOOLBAR_MOVE', 'Flytt');
define('_SOBI2_TOOLBAR_COPY', 'Kopier');
define('_SOBI2_TOOLBAR_PUBLISH', 'Publiser');
define('_SOBI2_TOOLBAR_UNPUBLISH', 'Avpubliser');
define('_SOBI2_TOOLBAR_APPROVE', 'Godkjenn');
define('_SOBI2_TOOLBAR_UNAPPROVE', 'Avgodkjenn');
define('_SOBI2_TOOLBAR_CONFIRMED', 'Godkjennt');
define('_SOBI2_TOOLBAR_UNCONFIRMED', 'Ikke godkjennt');
define('_SOBI2_SAVE_DUPLICATE_ENTRY', 'En med samme navn eksisterer allerede.');
define('_SOBI2_SAVE_NOT_ALLOWED_IMG_EXT', 'Den opplastede filen har ikke en tillat filtype og ble derfor ikke lagt til.');
define('_SOBI2_SAVE_UPLOAD_IMG_FILED', 'Bilde opplastningen fielet! ');
define('_SOBI2_SAVE_UPLOAD_IMG_OK', 'Bildeble lastet opp! ');
define('_SOBI2_SAVE_UPLOAD_ICO_OK', 'Ikonble lastet opp! ');
define('_SOBI2_SAVE_UPLOAD_IMG_FAILED', 'Bilde opplastning feilet! ');
define('_SOBI2_SAVE_UPLOAD_ICO_FAILED', 'Ikon opplastning feilet! ');
define('_SOBI2_SAVE_NOT_ALL_REQ_FIELDS_FILLED', 'Ikke alle n&oslash;dvendige felter er fyllt ut!');
define('_SOBI2_SAVE_ICON_FEES', 'Ikon');
define('_SOBI2_SAVE_IMAGE_FEES', 'Logo');
define('_SOBI2_CHANGES_SAVED', 'Alle endringer ble lagret');
define('_SOBI2_ITEM_REMOVED_FROM_CAT', 'Poster fjernet fra denne kategorien');
define('_SOBI2_CANNOT_REMOVE_CAT', 'Kategorien kunne ikke fjernes. En kategori kan bare bli slettet');
define('_SOBI2_CAT_DELETED', 'Kategorier slettet');
define('_SOBI2_ITEM_DELETED', 'Poster slettet');
define('_SOBI2_ITEM_MOVE', 'Flytt poster');
define('_SOBI2_ITEM_COPY', 'Kopier poster');
define('_SOBI2_ITEMS_MOVED', 'Alle postene ble flyttet');
define('_SOBI2_NOT_ALL_ITEMS_MOVED', 'Ikke alle postene kunne bli flyttet. Noen poster er allerede i destinasjons kategorien');
define('_SOBI2_ITEMS_COPIED', 'Alle postene ble kopiert');
define('_SOBI2_NOT_ALL_ITEMS_COPIED', 'Ikke alle postene kunne bli kopiert. Noen poster er allerede i destinasjons kategorien');
define('_SOBI2_ITEMS_TO_MOVE', 'Poster som ble flyttet:');
define('_SOBI2_ITEMS_TO_COPY', 'Poster som ble kopiert:');
define('_SOBI2_SELECT_TARGER_CAT', 'Velg destinasjons kategori');
define('_SOBI2_CATS_MOVED', 'Alle kategoriene ble flyttet');
define('_SOBI2_NOT_ALL_CATS_MOVED', 'Ikke alle kategoriene kunne flyttes');
define('_SOBI2_CAT_COPY', 'Kopier kategorier');
define('_SOBI2_CATS_TO_COPY', 'Kategorier som ble kopiert:');
define('_SOBI2_CAT_COPY_ITEMS_TOO', 'Kopier poster ogs&aring;');
define('_SOBI2_CAT_MOVE', 'Flytt kategorier');
define('_SOBI2_CATS_TO_MOVE', 'Kategorier som ble flyttet:');
define('_SOBI2_CATS_COPIED', 'Alle kategoriene ble kopiert');
define('_SOBI2_NOT_ALL_CATS_COPIED', 'Ikke alle kategoriene kunne bli kopiert.');

# Editing entry
define('_SOBI2_FORM_TITLE_ADD_NEW_ENTRY', 'Legg til post');
define('_SOBI2_FORM_TITLE_EDIT_ENTRY', 'Endre post');
define('_SOBI2_FORM_ENTRY_DETAILS', 'Post detaljer');
define('_SOBI2_FORM_IMG_LABEL', 'Logo');
define('_SOBI2_FORM_IMG_EXPL', 'Dette bildet vil bli vist i detalj visning');
define('_SOBI2_FORM_YOUR_IMG_LABEL', 'Firma logo: ');
define('_SOBI2_FORM_IMG_CHANGE_LABEL', 'Endre logo: ');
define('_SOBI2_FORM_IMG_REMOVE_LABEL', 'Fjern logo');
define('_SOBI2_FORM_ICO_LABEL', 'Ikon for kategori visning');
define('_SOBI2_FORM_ICO_EXPL', 'Dette bildet vil bli vist i kategori visning.');
define('_SOBI2_FORM_YOUR_ICO_LABEL', 'Ikon: ');
define('_SOBI2_FORM_ICO_CHANGE_LABEL', 'Endre ikon: ');
define('_SOBI2_FORM_ICO_REMOVE_LABEL', 'Fjern ikon');
define('_SOBI2_FORM_SAFETY_CODE', 'Sikkerhets kode');
define('_SOBI2_FORM_NOT_FREE_OPTION', 'Dette feltet er ikke gratis.');
define('_SOBI2_FORM_SELECT_CATEGORY', 'Velg kategorier for posten');
define('_SOBI2_FORM_CAT_1', 'F&oslash;rste kategori');
define('_SOBI2_FORM_PRICE_IS', 'Kostnaden er');
define('_SOBI2_FORM_FIELD_REQ_MARK', ' * ');
define('_SOBI2_FORM_FIELD_REQ_INFO', 'Alle felter markert med '._SOBI2_FORM_FIELD_REQ_MARK.' er p&aring;krevd.');
define('_SOBI2_FORM_META_KEYS_LABEL', 'Skriv inn meta n&oslash;kkelord, separert med komma: ');
define('_SOBI2_FORM_META_KEYS_EXPL', 'Oppskrevede ord vil bli brukt for s&oslash;ke motorer');
define('_SOBI2_FORM_META_DESC_LABEL', 'Skriv inn meta beskrivelse: ');
define('_SOBI2_FORM_META_DESC_EXPL', 'Beskrivelsen vil bli brukt for s&oslash;ke motorer');
define('_SOBI2_FORM_JS_SELECT_CAT', ' velg kategori f&oslash;rst');
define('_SOBI2_FORM_JS_ACC_ENTRY_RULES', 'Du m&aring; akseptere Regler for Bruk f&oslash;rst');
define('_SOBI2_FORM_JS_ALL_REQUIRED_FIELDS', 'Fyll ut alle n&oslash;dvendige felt');
define('_SOBI2_FORM_JS_CAT_ALLREADY_ADDED', 'Denne kategorien er allerede lagt til');
define('_SOBI2_LISTING_EXPIRES', 'G&aring;r ut den');
define('_SOBI2_UPDATED_AT', 'Sist modifisert den');
define('_SOBI2_HITS', 'Visninger');
define('_SOBI2_HITS_RESET', 'Tilbakestill antall visninger');
define('_SOBI2_SELECTED_CATS', 'Valgte kategorier');
define('_SOBI2_EDITING_LISTING', 'Endrer post');
define('_SOBI2_CHANGES_SAVED', 'Alle endringer ble lagret');
define('_SOBI2_LISTING_CHECKED_OUT', 'Denne posten blir endret av en annen bruker');
define('_SOBI2_FORM_ENTRY_TITLE', 'Post tittel'._SOBI2_FORM_FIELD_REQ_MARK);
define('_SOBI2_FORM_CAN_ADD_TO_NR_CATS', "Du kan legge posten i {$config->maxCatsForEntry} kategori(er)");
define('_SOBI2_FORM_SELECTED_CAT_DESC', _SOBI2_CATEGORY_H.' Beskrivelse:');
define('_SOBI2_FORM_ADD_CAT_BT', _SOBI2_ADD_U.' '._SOBI2_CATEGORY_L);
define('_SOBI2_FORM_REMOVE_CAT_BT','Fjern '._SOBI2_CATEGORY_L);

# Editing category
define('_SOBI2_CAT_DETAILS', 'Kategori detaljer');
define('_SOBI2_IMAGE_POS', 'Bilde posisjon');
define('_SOBI2_ICON', 'Ikon');
define('_SOBI2_CAT_ICON_EXPL', 'Ikon er et lite bilde som vil bli vist i kategori visning');
define('_SOBI2_PREVIEW', 'Bilde forh&aring;ndsvisning');
define('_SOBI2_CAT_WITHOUT_NAME', 'Kategorien m&aring; ha et navn');
define('_SOBI2_CAT_WITHOUT_PARENT', ' velg parent kategori');
define('_SOBI2_CATEGORY_CHECKED_OUT', 'Denne kategorien blir endret av en annen administrator n&aring;');
define('_SOBI2_ADD_NEW_CAT', 'Legg til kategori');
define('_SOBI2_SELECTED_PARENT_ID', 'Kategori ID');
define('_SOBI2_NOT_ALL_CHANGES_SAVED', 'Alle endringene kunne ikke lagres');
define('_SOBI2_PARENT_CAT', 'Parent kategori');
define('_SOBI2_SELECT_PARENT_CAT', 'Velg en kategori');
define('_SOBI2_EDITING_CAT', 'Kategorien blir endret');

# Fields manager
define('_SOBI2_FIELDS_MANAGER', 'Egendefinerte felt');
define('_SOBI2_FIELD_NAME', 'Felt navn');
define('_SOBI2_FIELD_NAME_EXPL', 'Unikt navn p&aring; feltet.');
define('_SOBI2_FIELD_LABEL', 'Felt navn');
define('_SOBI2_FIELD_LABEL_EXPL', 'Tekst for feltet. Vist i Ny/Endre Post Skjemaet, og Kategori/Detaljert visnign.');
define('_SOBI2_FIELD_TYPE', 'Felt type');
define('_SOBI2_FIELD_TYPE_EXPL', 'Velg type for feltet.');
define('_SOBI2_FIELD_FREE', 'Gratis');
define('_SOBI2_FIELD_FREE_EXPL', 'Velg om dette feltet skal koste penger eller ikke.');
define('_SOBI2_FIELD_ENABLED', 'Publisert');
define('_SOBI2_FIELD_ENABLED_EXPL', 'Velg om dette feltet skal publiseres eller ikke.');
define('_SOBI2_FIELD_REQUIRED', 'N&oslash;dvendig');
define('_SOBI2_FIELD_REQUIRED_EXPL', 'Velg om dette feltet er n&oslash;dvendig.');
define('_SOBI2_FIELD_IN_VCARD', 'Vis i kategori visning');
define('_SOBI2_FIELD_IN_DETAILS', 'Vis i detaljert visning');
define('_SOBI2_ALL_FIELDS_NAMES', 'Felt navn i ');
define('_SOBI2_ALL_FIELDS_NAMES2', '. &Oslash;nsker du &aring; endre tekst for et annet spr&aring;k, vennligst endre spr&aring;k for SOBI2.');
define('_SOBI2_FIELD_CONSTANT', 'Slettbar');
define('_SOBI2_FIELD_NOT_FREE', 'Ikke Gratis');
define('_SOBI2_FIELD_DISABLED', 'Avpublisert');
define('_SOBI2_FIELD_NOT_REQUIRED', 'Ikke n&oslash;dvendig');
define('_SOBI2_TOOLBAR_ADD_NEW_FIELD', 'Legg til');
define('_SOBI2_FIELD_CHECKED_OUT', 'Dette feltet blir endret av en annen administrator n&aring;');
define('_SOBI2_FIELD_DETAILS', 'Felt detaljer');
define('_SOBI2_FIELD_HELP', 'Beskrivelse');
define('_SOBI2_FIELD_NOT_EDITABLE_EXPL', 'Forh&aring;ndsbestemt. Derfor er noen alternativer deaktiverte.');
define('_SOBI2_FIELD_CSS_CLASS', 'CSS klasse');
define('_SOBI2_FIELD_CSS_CLASS_EXPL', 'CSS klasse brukt for ny/endre post skjemaet.<br />CSS klasene for kategori og detaljert visning vill bli alget atomatisk ved bruk av dette felt navnet.<br />For kategori visning: span.sobi2Listing_field_xxx<br />For detaljert visning: span#sobi2Details_field_xxx');
define('_SOBI2_FIELD_PREFERRED_SIZE', 'Forh&aring;ndsbestemt St&oslash;rrelse');
define('_SOBI2_FIELD_MAX_LENGTH', 'Maksimal lengde');
define('_SOBI2_FIELD_MAX_LENGTH_EXPL', 'Maksimalt antall tegn. Bare gyldig dersom inputboks er valgt felt type.');
define('_SOBI2_FIELD_PAYMENT', 'Kostnad');
define('_SOBI2_FIELD_PAYMENT_EXPL', 'For dette feltet koster det penger &aring; bruke.');
define('_SOBI2_FIELD_DISPLAYING', 'Vis felt');
define('_SOBI2_FIELD_DISPLAYING_EXPL', 'Velg hvord dette feltet skal vises. Velg skjult dersom det ikke skal vises noe sted.');
define('_SOBI2_FIELD_DO_NOT_DISPLAY', 'Skjult');
define('_SOBI2_FIELD_IS_URL', 'Adresse(www) felt');
define('_SOBI2_FIELD_IN_NEW_LINE', 'Legg til linje');
define('_SOBI2_FIELD_IN_NEW_LINE_EXPL', 'En ny linje vil bli lagt til i starten av dette feltet.');
define('_SOBI2_FIELD_WITH_LABEL', 'Vis navn');
define('_SOBI2_FIELD_WITH_LABEL_EXPL', 'Teksten vil bli vist i kateogri og detaljert visning.');
define('_SOBI2_FIELD_IN_SEARCH', 'S&oslash;ke metode');
define('_SOBI2_FIELD_IN_SEARCH_EXPL', 'S&oslash;k for feltet i generellt s&oslash;k eller velger bokser. Dersom ingen er valgt, s&aring; blir det ikke s&oslash;kt for dette feltet.');
define('_SOBI2_FIELD_SEARCH_SELECT_BOX', 'Velg boks');
define('_SOBI2_FIELD_SEARCH_SEARCH_IN', 'Generelt s&oslash;k');
define('_SOBI2_FIELD_DESCRIPTION', 'Felt beskrivelse');
define('_SOBI2_FIELD_DESCRIPTION_EXPL', 'Viss beskrivelse for feltet er skrevet inn, vil det bli vist i Ny/Endre Post Skjemaet som et tips p&aring; et informasjons symbol.');
define('_SOBI2_FIELD_WITHOUT_NAME', 'Feltet m&aring; ha et navn');
define('_SOBI2_FIELD_USE_WYSIWYG', 'Bruk WYSIWYG Tekstbehandler');
define('_SOBI2_FIELD_ROWS', 'Rader');
define('_SOBI2_FIELD_COLS', 'Kolonner');
define('_SOBI2_ADD_NEW_FIELD', 'Legg til felt');
define('_SOBI2_FIELD_NAME_DUPLICAT', 'Et felt med samme navn eksisterer allerede. Et nytt navn ble generert automatisk. Sjekk navnet.');
define('_SOBI2_FIELDS_DELETED', 'Felt slettet');
define('_SOBI2_NOT_ALL_FIELDS_DELETED', 'Alle feltene kunne ikke bli slettet');

# Configuration
define('_SOBI2_CONFIG', 'Konfigurasjon');
define('_SOBI2_CONFIG_GEN', 'Generell');
define('_SOBI2_CONFIG_GEN_OPTION', 'Generelle alternativer');
define('_SOBI2_CONFIG_COMPONENT_NAME', 'Komponent navn');
define('_SOBI2_CONFIG_COMPONENT_NAME_EXPL', 'Vill bli vist i SOBI2 meny som en komponent link. Vil bli lagt til i meta tagget etc.');
define('_SOBI2_CONFIG_FRONTPAGE', 'Hovedsiden');
define('_SOBI2_CONFIG_GENERAL_SHOW_DESCRIPTION', 'Vis beskrivelse av komponenten');
define('_SOBI2_CONFIG_GENERAL_SHOW_DESCRIPTION_TEXT', 'Beskrivelse av komponenten');
define('_SOBI2_CONFIG_GENERAL_IMG_FOR_DESCRIPTION', 'Bilde for beskrivelse');
define('_SOBI2_CONFIG_LANGUAGE', 'Spr&aring;k');
define('_SOBI2_CONFIG_LANGUAGE_EXPL', 'Sett som standard viss du vil bruke CMSets standard spr&aring;k.');
define('_SOBI2_CONFIG_GENERAL_SHOW_HP_LINK', 'Vis komponent link');
define('_SOBI2_CONFIG_GENERAL_SHOW_NEW_ENTRY_LINK', 'Vis "Legg til post"');
define('_SOBI2_CONFIG_GENERAL_SHOW_SEARCH_LINK', 'Vis "S&oslash;k"');
define('_SOBI2_CONFIG_GENERAL_SHOW_LISTING_ON_FP', 'Vis poster p&aring; hovedsiden');
define('_SOBI2_CONFIG_GENERAL_SHOW_LISTING_ON_FP_EXPL', 'Om ja, alle poster vill bli vist p&aring; den f&oslash;rste siden av SOBI2 komponent (Generell Visning)');
define('_SOBI2_CONFIG_GENERAL_SHOW_ENTRIES_IN_LINE', 'Antall poster p&aring; en linje');
define('_SOBI2_CONFIG_GENERAL_SHOW_LINES_IN_SITE', 'Antall linjer p&aring; en side');
define('_SOBI2_CONFIG_GENERAL_SHOW_CAT_LISTING_ON_FP', 'Vis kategorier p&aring; hovedsiden');
define('_SOBI2_CONFIG_GENERAL_SHOW_CAT_LISTING_ON_FP_EXPL', 'Om ja, alle kategorier vill bli vist p&aring; den f&oslash;rste siden SOBI2 komponenten (Generell Visning).');
define('_SOBI2_CONFIG_GENERAL_SHOW_CATS_IN_LINE', 'Antall kategorier p&aring; en enkelt linje');
define('_SOBI2_CONFIG_GENERAL_SHOW_FROM_SUBCATS', 'Vis poster i underkategorier');
define('_SOBI2_CONFIG_GENERAL_SHOW_FROM_SUBCATS_EXPL', 'Om ja, alle poster i underkategoriene vil bli vist under hovedkategorien.');
define('_SOBI2_CONFIG_GENERAL_SHOW_ICO_IN_VC', 'Vis ikonet i kategori visning');
define('_SOBI2_CONFIG_GENERAL_SHOW_LOGO_IN_VC', 'Vis bildet i kategori visning');
define('_SOBI2_CONFIG_GENERAL_USE_META', 'Bruk meta tagger');
define('_SOBI2_CONFIG_GENERAL_USE_META_EXPL', 'Tillat bruker &aring; legge til meta tagger.');
define('_SOBI2_CONFIG_GENERAL_SHOW_CAT_INFO', 'Vis beskrivelse av kategorien');
DEFINE('_SOBI2_CONFIG_GENERAL_SORT_TITLE_ASC', 'Tittel synkende');
DEFINE('_SOBI2_CONFIG_GENERAL_SORT_TITLE_DESC','Tittel stigende');
DEFINE('_SOBI2_CONFIG_GENERAL_SORT_ADDED_ASC', 'Lagt til synkende');
DEFINE('_SOBI2_CONFIG_GENERAL_SORT_ADDED_DESC','Lagt til stigende');
DEFINE('_SOBI2_CONFIG_GENERAL_SORT_HITS_ASC',  'Visninger synkende');
DEFINE('_SOBI2_CONFIG_GENERAL_SORT_HITS_DESC', 'Visninger stigende');
DEFINE('_SOBI2_CONFIG_GENERAL_SORT_NAME_ASC', 'Navn synkende');
DEFINE('_SOBI2_CONFIG_GENERAL_SORT_NAME_DESC','Navn stigende');
DEFINE('_SOBI2_CONFIG_GENERAL_SORT_COUNT_ASC', 'Kommune synkende');
DEFINE('_SOBI2_CONFIG_GENERAL_SORT_COUNT_DESC','Kommune stigende');
DEFINE('_SOBI2_CONFIG_GENERAL_SORT_ORDER_ASC', 'Ordning synkende');
DEFINE('_SOBI2_CONFIG_GENERAL_SORT_ORDER_DESC','Ordning stigende');
define('_SOBI2_CONFIG_GENERAL_PERMS','Endre rettigheter');
define('_SOBI2_CONFIG_GENERAL_PERMS_EDIT', 'Endre rettigheter');
define('_SOBI2_CONFIG_GENERAL_PERMS_DEL', 'Slett rettigheter');
define('_SOBI2_CONFIG_GENERAL_PERMS_DEL_EXPL','Velg viss brukeren skal kunne slette eller bare avpublisere egene poster.');
define('_SOBI2_CONFIG_GENERAL_PERMS_UNPUBLISH_', 'Avpubliser rettigheter');
define('_SOBI2_CONFIG_GENERAL_SORT_LISTING_BY', 'Sorter etter');
define('_SOBI2_CONFIG_GENERAL_SORT_CATS_BY', 'Kategori');
define('_SOBI2_CONFIG_FIELDS', 'Felt');
define('_SOBI2_CONFIG_FIELDS_DESC', 'Felt konfigurasjon (tittel, bilde og ikon)');
define('_SOBI2_CONFIG_ENTRY_T_LABEL', 'Tittel teskst');
define('_SOBI2_CONFIG_ENTRY_T_LABEL_EXPL', 'Tekst for det f&oslash;rste feltet i ny/endre post skjemaet (post tittel).');
define('_SOBI2_CONFIG_ENTRY_T_LENGTH', 'Lengde av tittel feltet');
define('_SOBI2_CONFIG_ENTRY_T_LENGTH_EXPL', 'Lengde av den f&oslash;rste feltet i ny/endre post skjemaet (post tittel)');
define('_SOBI2_CONFIG_ENTRY_ALLOW_MULTI', 'Tillat Flere Titler');
define('_SOBI2_CONFIG_ENTRY_ALLOW_MULTI_EXPL', 'Tillat mer enn en post med samme tittel');
define('_SOBI2_CONFIG_ENTRY_ALLOW_IMG', 'Tillat &aring; legge til bilder');
define('_SOBI2_CONFIG_ENTRY_ALLOW_ICO', 'Tillat &aring; legge til ikoner');
define('_SOBI2_CONFIG_ENTRY_RESIZE_IMG', 'Gi bilder st&oslash;rrelsen');
define('_SOBI2_CONFIG_ENTRY_RESIZE_IMG_EXPL', 'Velg maksimal h&oslash;yde og bredde for et bilde. Viss det opplastede bildet er st&oslash;rre vil det f&aring; en mindre st&oslash;rrelse.');
define('_SOBI2_CONFIG_ENTRY_W', 'Bredde: ');
define('_SOBI2_CONFIG_ENTRY_H', 'H&oslash;yde: ');
define('_SOBI2_CONFIG_ENTRY_RESIZE_ICO', 'Gj&oslash;r ikonets dt&oslash;rrelse om til');
define('_SOBI2_CONFIG_ENTRY_RESIZE_ICO_EXPL', 'Sett maksimal h&oslash;yde og bredde for ikon. Viss det opplastede ikonet er st&oslash;rre, vill det bli gjort mindre.');
define('_SOBI2_CONFIG_ENTRY_ALLOW_NOT_FREE', 'Ja, men ikke gratis ');
define('_SOBI2_CONFIG_ENTRY_IMG_LABEL', 'Bilde yekst');
define('_SOBI2_CONFIG_ENTRY_IMG_LABEL_EXPL', 'Tekst for bildet i ny/endre post skjemaet.');
define('_SOBI2_CONFIG_ENTRY_PRICE_IMG', 'Kostnad for nilde');
define('_SOBI2_CONFIG_ENTRY_PRICE_ICO', 'Kostnad for ikon');
define('_SOBI2_CONFIG_ENTRY_ICO_LABEL', 'Ikon label');
define('_SOBI2_CONFIG_ENTRY_ICO_LABEL_EXPL', 'Tekst for det lille bildet i ny/endre post skjemaet. Det lille bildet vil bli etter standard konfigurasjon bli vist bare i kategori visning.');
define('_SOBI2_CONFIG_ENTRY_2_CAT', 'Post i to kategorier');
define('_SOBI2_CONFIG_ENTRY_2_CAT_PRICE', 'Kostnad for post i to kategorier');
define('_SOBI2_CONFIG_ENTRY_3_CAT', 'Post i tre kategorier');
define('_SOBI2_CONFIG_ENTRY_3_CAT_PRICE', 'Kostnad for post i tre kategorier');
define('_SOBI2_CONFIG_ENTRY_4_CAT', 'Post i fire kategorier');
define('_SOBI2_CONFIG_ENTRY_4_CAT_PRICE', 'Kostnad for post i fire kategorier');
define('_SOBI2_CONFIG_ENTRY_5_CAT', 'Post i fem kategorier');
define('_SOBI2_CONFIG_ENTRY_5_CAT_PRICE', 'Kostnad for post i fem kategorier');
define('_SOBI2_CONFIG_ENTRY_SAFETY', 'Sikkerhet');
define('_SOBI2_CONFIG_ENTRY_SAFETY_OPTIONS', 'Sikkerhets alternativer');
define('_SOBI2_CONFIG_ENTRY_ALLOW_ANO', 'Tillat anonyme poster');
define('_SOBI2_CONFIG_ENTRY_ALLOW_ANO_EXPL', 'Tillat yregistrerte brukere &aring; poste.');
define('_SOBI2_CONFIG_ENTRY_AUTOPUBLISH', 'Publiser poster automatisk');
define('_SOBI2_CONFIG_ENTRY_AUTOPUBLISH_EXPL', 'En ny post vil bli publisert uten godkjennelse fra en administrator.');
define('_SOBI2_CONFIG_ENTRY_NOTIFY_ADMIN', 'Varsle administratorer');
define('_SOBI2_CONFIG_ENTRY_NOTIFY_ADMIN_EXPL', 'Varsle administratorer ved nye poster.');
define('_SOBI2_CONFIG_ENTRY_UP_TO_CATS '. 'Antall kategorier');
define('_SOBI2_CONFIG_GENERAL_PERMS_UNPUBLISH', 'Avpubliser');
define('_SOBI2_CONFIG_GENERAL_BACKGROUNDS','Bakgrunn');
define('_SOBI2_CONFIG_GENERAL_BACKGROUNDS_AND_BORDERS','Bakgrunns og ramme farge innstillinger');
define('_SOBI2_CONFIG_GENERAL_BORDERS','Ramme farge');
define('_SOBI2_CONFIG_GENERAL_BORDER_EXPL','Ramme farge til kategori og detaljert visning');
define('_SOBI2_CONFIG_GENERAL_BACKGROUND','Bakgrunnsbilde');
define('_SOBI2_CONFIG_GENERAL_BACKGROUND_EXPL','Bakgrunnsbilde til kategori og detaljert visning');
define('_SOBI2_CONFIG_ENTRY_EXP_TIME', 'Stopp publisering etter');
define('_SOBI2_CONFIG_ENTRY_EXP_TIME_EXPL', 'Hvor mange dager en post blir publisert. Skriv inn 0 eller la feltet v&aelig;re tomt viss posten aldri skal avpubliseres.');
define('_SOBI_CONFIG_ENTRY_USE_SEC_IMG', 'Bruk sikkerhetskode');
define('_SOBI_CONFIG_ENTRY_SEC_IMG', 'Sikkerhets kode');
define('_SOBI_CONFIG_ENTRY_USE_SEC_IMG_EXPL', 'Aktiver funksjon for at roboter skal hente meta informasjon.');
define('_SOBI_CONFIG_ENTRY_SEC_IMG_FONTCOLOR', 'Skrift farge');
define('_SOBI_CONFIG_ENTRY_SEC_IMG_LINECOLOR', 'Gitter farge');
define('_SOBI_CONFIG_ENTRY_SEC_IMG_BGCOLOR', 'Bakgrunns farge');
define('_SOBI_CONFIG_ENTRY_SEC_IMG_BORDERCOLOR', 'Ramme farge');
define('_SOBI_CONFIG_ENTRY_ACCEPT_RULES', 'Regler for bruk');
define('_SOBI_CONFIG_ENTRY_NEED_TO_ACCEPT_RULES', 'Brukeren m&aring; akseptere regler for bruk');
define('_SOBI_CONFIG_ENTRY_NEED_TO_ACCEPT_RULES_EXPL', 'Velg om brukeren m&aring; akseptere betingelsene og reglene for bruk for &aring; legge inn en post.');
define('_SOBI_CONFIG_ENTRY_ENTRY_RULES_LABEL_1', 'Tekst for betingelsene og reglene for bruk del 1');
define('_SOBI_CONFIG_ENTRY_ENTRY_RULES_URL', 'Link til regler for bruk');
define('_SOBI_CONFIG_ENTRY_ENTRY_RULES_TXT', 'Tekst for linken til betingelene og reglene for bruk');
define('_SOBI_CONFIG_ENTRY_ENTRY_RULES_LABEL_2', 'Tekst for betingelsene og reglene del 2');
define('_SOBI_CONFIG_ENTRY_ENTRY_RULES_LABELS_EXPL', '<h4>Forh&aring;ndsvisning: &nbsp;&nbsp;&nbsp;&nbsp;<span class="editlinktip">' .
sobiHTML::toolTip(addslashes(_SOBI_CONFIG_ENTRY_ENTRY_RULES_LABEL_1),addslashes(_SOBI_CONFIG_ENTRY_ENTRY_RULES_LABEL_1),'','','Jeg aksepterer', '#',0 )
.'</span>&nbsp;&nbsp;<span class="editlinktip"><a href="#">' .
sobiHTML::toolTip(addslashes(_SOBI_CONFIG_ENTRY_ENTRY_RULES_URL),addslashes(_SOBI_CONFIG_ENTRY_ENTRY_RULES_TXT),'','','betingelsene og reglene', '#',0 )
.'</a></span>&nbsp;&nbsp;<span class="editlinktip">' .
sobiHTML::toolTip(addslashes(_SOBI_CONFIG_ENTRY_ENTRY_RULES_LABEL_2),addslashes(_SOBI_CONFIG_ENTRY_ENTRY_RULES_LABEL_2),'','','for denne siden', '#',0 )
.'</h4>');
define('_SOBI2_CONFIG_VIEW_OPTIONS', 'Konfigurering av detaljert visning');
define('_SOBI2_CONFIG_VIEW_OPTIONS_ICO', 'Vis ikon i detalj visning');
define('_SOBI2_CONFIG_VIEW_OPTIONS_ICO_EXPL', 'Om ja, det lille bildet (ikonet) vill bli vist i detalj visning.');
define('_SOBI2_CONFIG_VIEW_OPTIONS_IMG', 'Vis bilde i detalj visning');
define('_SOBI2_CONFIG_VIEW_OPTIONS_IMG_EXPL', 'Om ja, vil det store bildet vises i detalj visning.');
define('_SOBI2_CONFIG_VIEW_OPTIONS_ADDED_DATE', 'Vis post dato');
define('_SOBI2_CONFIG_VIEW_OPTIONS_HITS', 'Vis visninger');
define('_SOBI2_CONFIG_VIEW_OPTIONS_WAY_SEARCH', 'Vis link til siden');
define('_SOBI2_CONFIG_VIEW_OPTIONS_WAY_SEARCH_URL', 'Adresse(www) til side');
define('_SOBI2_CONFIG_VIEW_OPTIONS_WAY_SEARCH_LABEL', 'Link tekst');
define('_SOBI2_CONFIG_VIEW_OPTIONS_WAY_SEARCH_LABEL_EXPL', 'Hvordan linken skal vises. For eksempel: Vis Routing. Sett inn bilder i en img-tagg.');
define('_SOBI2_CONFIG_VIEW_OPTIONS_WAY_SEARCH_URL_VAR_EXPL', 'En adresse til Google Maps kan se slik ut:' .
'<div align="left">http://route.com/index.php?tocity=samplecity&toplz=12345&tostreet=sample%20street%2099</div><br />' .
'F&oslash;lgende variabler er tilgjengelige:' .
'<ul>' .
'<li>GATE - gate</li>' .
'<li>POSTNUMMER - postnummer</li>' .
'<li>STED - sted</li>' .
'<li>LAND - land</li>' .
'<li>KOMMUNE - kommune</li>' .
'<li>FYLKE - fylke</li>' .
'</ul>' .
'For &aring; f&aring; en adresse(www) slik som over, m&aring; linken v&aelig;re slik som den under:' .
'<div align="left">http://route.com/index.php?tocity=CITY&toplz=ZIPCODE&tostreet=STREET</div>');
define('_SOBI2_CONFIG_PAYMENTS_OPTIONS', 'Betalings alternativer');
define('_SOBI2_CONFIG_PAYMENTS_CURRENCY', 'Symbol');
define('_SOBI2_CONFIG_PAYMENTS_CURRENCY_SEPARATOR', 'Separator');
define('_SOBI2_CONFIG_PAYMENTS_CURRENCY_SEPARATOR_EXPL', 'Skulle v&aelig;rt komma eller punktum. For eksempel 50.90 NOK eller 50,90 NOK');
define('_SOBI2_CONFIG_PAYMENTS_TITLE', 'Betalings referanse');
define('_SOBI2_CONFIG_PAYMENTS_TITLE_EXPL', 'Tekst vill bli brukt for bank overf&oslash;ring referanse eller PayPal betalings referanse. SOBI2 ID nummer vill bli tilf&oslash;yd.');
define('_SOBI2_CONFIG_PAYMENTS_BANK_TRANSFER', 'Bank/eSjekk overf&oslash;rings alternativer');
define('_SOBI2_CONFIG_PAYMENTS_USE_BANK_TRANSFER', 'Bruk bank/eSjekk overf&oslash;ring');
define('_SOBI2_CONFIG_PAYMENTS_USE_BANK_TRANSFER_EXPL', 'Om ja, kan bruker betale via bank/eSjekk overf&oslash;ring. Bank konto/eSjekk data er vist i sammendrag av siden eller sendes via e-post.');
define('_SOBI2_CONFIG_PAYMENTS_USE_BANK_TRANSFER_YES_OVER_EMAIL', 'Ja, men send bank konto/eSjekk data via e-post');
define('_SOBI2_CONFIG_PAYMENTS_USE_BANK_TRANSFER_YES_ON_PAGE', 'Ja, og vis bank konto/eSjekk data i sammendrag av siden');
define('_SOBI2_CONFIG_PAYMENTS_BANK_DATA', 'Bank Konto/eSjekk Informasjon');
define('_SOBI2_CONFIG_PAYMENTS_BANK_DATA_EXPL', 'Skriv inn bankkonto nr. eller eSejkk informasjon her');
define('_SOBI2_CONFIG_PAYMENTS_PAY_PAL', 'PayPal Alternativer');
define('_SOBI2_CONFIG_PAYMENTS_USE_PAY_PAL', 'Bruk PayPal');
define('_SOBI2_CONFIG_PAYMENTS_USE_PAY_PAL_EXPL', 'Om ja, kan bruker betale via PayPal.');
define('_SOBI2_CONFIG_PAYMENTS_PAY_PAL_EMAIL', 'E-post adresse');
define('_SOBI2_GENERAL_FILE_IS', ' filen er: ');
define('_SOBI2_GENERAL_FILE_WRITABLE', '<span style="color: rgb(0, 128, 0); font-weight: bold;">Skrivbar</span>');
define('_SOBI2_GENERAL_FILE_UNWRITABLE', '<span style="color: rgb(255, 0, 0); font-weight: bold;">Ikke skrivbar</span>');
define('_SOBI2_GENERAL_DO_FILE_UNWRITABLE', 'Gj&oslash;r filen ikke-skrivbar etter at du har lagret');
define('_SOBI2_GENERAL_DO_FILE_WRITABLE', 'Gj&oslash;r filen skrvbar');
define('_SOBI2_UNINSTALL_DB_TXT', '<div style="text-align:left">' .
'<h2>SOBI2 Avinnstallering</h2>' .
'Det er to m&aring;ter &aring; avinnstallere p&aring;:<br />' .
'<ul>' .
'  <li>Bare komponenten: i dette alternativet, vil bare komponenten bli' .
' avinnstalert. Postene i databasen blir bevart.' .
' Dette alternativet er ment for oppdatering. ' .
' For &aring; avinnstallere SOBI2 komponenten trenger du &aring;' .
' bruke standard innstallerer/avinnstallerer for CMSet.<br /></li>' .
'  <li>Komplett avinnstallering: For &aring; gj&oslash;re det m&aring; du fjerne tabellene i ' .
' databasen f&oslash;rst. Etter det, kan du avinnstallere komponenten' .
' bruker standard innstallerer/avinnstallerer for CMSet.' .
' </li>' .
'</ul>' .
'</div>');
define('_SOBI2_UNINSTALL_DB_LINK', 'Fjern database tabellene');
define('_SOBI2_UNINSTALL_DB_CONFIRM', 'Er du sikker p&aring; at du &oslash;nsker &aring; fjerne database tabellene?');
define('_SOBI2_DB_REMOVED_MSG', 'Database tabellene ble fjernet med suksess. Avinnstaller komponenten n&aring;.');
define('_SOBI2_DB_REMOVE_ERROR_MSG', 'Tabellene kunne ikke fjernes. Fjern dem manuelt og avinnstaller komponenten.');
?>