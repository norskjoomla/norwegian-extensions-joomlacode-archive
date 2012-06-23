<?php

/*======================================================================*\
|| #################################################################### ||
|| # ---------------------------------------------------------------- # ||
|| # com_library is a native Library Management Component for Joomla  # ||
|| # This component is not free or public.                            # ||
|| # It's for only our licensed customer			      # ||
|| # If you are not a licensed customer, You are not allowed to use it# ||
|| # Developer: Ulas ALKAN				              # ||
|| # Date: Jan 2009                                                   # ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ------------ OUR COMPONENT IS NOT FREE SOFTWARE ---------------- # ||
|| # www.ulasalkan.com |  www.ulasalkan.com/forum/showthread.php?t=12 # ||
|| #################################################################### ||
\*======================================================================*/

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

//Admin Panel
//yazarlar
DEFINE('_lkn_control_panel','Kontrollpanel');
DEFINE('_lkn_list_writer','Forfattere');
DEFINE('_lkn_writer_name','Fornavn');
DEFINE('_lkn_writer_middle_name','Mellomnavn');
DEFINE('_lkn_writer_last_name','Etternavn');
DEFINE('_lkn_writer_name_desc','Forfatterens fornavn');
DEFINE('_lkn_writer_middle_name_desc','Forfatteren melomnavn');
DEFINE('_lkn_writer_last_desc','Forfatteren etternavn');
DEFINE('_lkn_writer_bio','Informasjon om forfatter');
DEFINE('_lkn_writer_bio_desc','Skriv en kort informasjon om forfatteren');
DEFINE('_lkn_writer_add_new','Opprett forfatter');
DEFINE('_lkn_writer_edit','Rediger opplysninger');
DEFINE('_lkn_writer_details','Forfatteropplysninger');
DEFINE('_lkn_list_writer_full_name','Forfatterens navn');
DEFINE('_lkn_list_writer_full_name_desc','En bok kan være skrever av mer enn en forfatter');
DEFINE('_lkn_writer_book_list','Bøker som er skrevet av denne forfatteren');

//books or articles
DEFINE('_lkn_list_books','Bøker');
DEFINE('_lkn_book_name','Bokens navn');
DEFINE('_lkn_book_name_desc','Skriv inn bokens navn');
DEFINE('_lkn_book_publisher_company','Forlag');
DEFINE('_lkn_book_publisher_company_desc','Velg forlag');
DEFINE('_lkn_book_desc','Kort beskrivelse av boken');
DEFINE('_lkn_book_desc_desc','Mer om denne boken');
DEFINE('_lkn_book_add_new','Opprett ny bok');
DEFINE('_lkn_book_edit','Rediger detaljer om boken');
DEFINE('_lkn_book_details','Detaljer om boken');
DEFINE('_lkn_book_publish_date','Publiseringsår');
DEFINE('_lkn_book_publish_date_desc','Året boken ble utgitt, ikke full dato.');
DEFINE('_lkn_book_language','Språk');
DEFINE('_lkn_book_language_desc','Språket i denne boken');
DEFINE('_lkn_book_link','Lenke');
DEFINE('_lkn_book_link_desc','Er det en relatert lenke til denne boken (F.eks: Forlagets nettsted)');
DEFINE('_lkn_book_link_no','Ingen lenke');
DEFINE('_lkn_book_download_link','Nedlastingslenke');
DEFINE('_lkn_book_download_link_desc','Finnes det en nedlastingslenke for å forhåndsvise et kapittel?');
DEFINE('_lkn_book_isbn','ISBN');
DEFINE('_lkn_book_isbn_desc','ISBN-nummer for denne boken');
DEFINE('_lkn_book_tag','Merker');
DEFINE('_lkn_book_image','Bokbilde');
DEFINE('_lkn_book_image_desc','Disse filene er lagret under /images/stories/com_library. dersom du ønsker å knytte de opp mot denne listen. Last de opp til /joomla-folder/images/stories/com_library-mappen');
DEFINE('_lkn_book_tag_desc','Registrer merker for denne boken. Merker må skrives inn kommaseparert som merke1, merke2, merke3');

//category
DEFINE('_lkn_list_category','Kategorier');
DEFINE('_lkn_category','Kategori');
DEFINE('_lkn_category_name','Navn på kategori');
DEFINE('_lkn_category_image','Bilde for kategori');
DEFINE('_lkn_category_image_desc','Disse bildene ligger lagret i mappen /images/stories/. Ønsker du flere bilder i listen må disse lastes opp til mappen /images/stories/ folder via ftp.');
DEFINE('_lkn_category_description','Beskrivelse av kategorien');
DEFINE('_lkn_category_detail','Detaljer om kategorien');
DEFINE('_lkn_category_books','Bøker i denne kategorien');
DEFINE('_lkn_category_parent','Overordnet kategori for denne kategorien');
DEFINE('_lkn_category_insert','Opprett kategori');
DEFINE('_lkn_category_edit','Rediger kategori');
DEFINE('_lkn_category_added','Ny kategori ble opprettet');
DEFINE('_lkn_category_detail_front','Bøker i denne kategorien');

//publisher
DEFINE('_lkn_list_publisher','Forlag');
DEFINE('_lkn_publisher_name','Navn på forlaget');
DEFINE('_lkn_publisher_name_desc','Navnet på forlaget');
DEFINE('_lkn_publisher_desc','Beskrivelse av forlaget');
DEFINE('_lkn_publisher_desc_desc','Mer fyldig beskrivelse av forlaget');
DEFINE('_lkn_publisher_add_new','Opprett forlag');
DEFINE('_lkn_publisher_edit','Rediger forlagsdetaljer');
DEFINE('_lkn_publisher_details','Forlagsdetaljer');
DEFINE('_lkn_publisher_book_list','Bøker utgitt av dette forlaget');

//tags
DEFINE('_lkn_list_tags','Merker');
DEFINE('_lkn_tags_tag','Merke');
DEFINE('_lkn_tags_tag_desc','Merket du ønsker å legge til');
DEFINE('_lkn_tags_add_new','Opprett merke');
DEFINE('_lkn_tags_edit','Rediger detaljer for merket');
DEFINE('_lkn_tags_details','Merkedetaljer');
DEFINE('_lkn_tags_book_list','Bøker relatert til dette merket');

DEFINE('_lkn_writer_added','Posten ble registrert');
DEFINE('_lkn_updated','Posten ble oppdatert');
DEFINE('_lkn_delete_info','Posten ble slettet');

//configuration
DEFINE('_lkn_config_general_settings','Generelle innst.');
DEFINE('_lkn_config_design_settings','Designinnst.');
DEFINE('_lkn_config_design_category_header','Topptekst kategori');
DEFINE('_lkn_config_design_category_header_desc','Denne beskrivelsen vil bli plassert på topp av siden som beskriver kategorien.');
DEFINE('_lkn_config_design_home_header','Topptekst komponent');
DEFINE('_lkn_config_design_home_header_desc','Denne beskrivelsen vil bli plassert på topp av komponentens hjemmeside');
DEFINE('_lkn_config_design_books_details_header','Topptekst bokbeskrivelse');
DEFINE('_lkn_config_design_books_details_header_desc','Denne beskrivelsen vil bli plassert på topp av siden som beskriver boken');
DEFINE('_lkn_config_design_publisher_details','Topptekst forlagsbeskrivelse');
DEFINE('_lkn_config_design_publisher_details_desc','Denne beskrivelsen vil bli plassert på topp av siden som beskriver forlaget');
DEFINE('_lkn_config_design_writer_details','Topptekst forfattere');
DEFINE('_lkn_config_design_writer_details_desc','Denne beskrivelsen vil bli plassert på topp av siden som beskriver forfatter');
DEFINE('_lkn_config_design_tags','Topptekst merker');
DEFINE('_lkn_config_design_tags_desc','Denne beskrivelsen vil bli plassert på topp av siden som beskriver merket');
DEFINE('_lkn_config','Konfigurasjon');
DEFINE('_lkn_config_date_format','Datoformat, standard : %d.%m.%Y %H:%M:%S');
DEFINE('_lkn_config_date_format_desc','Du kan benytte PHP-formateringsstrenger. Referer til PHP-dokumentasjon <a href="http://de.php.net/strftime" target="_blank">here</a>. La det stå tomt for standard formatering.');
DEFINE('_lkn_config_records_per_page','Poster pr. side');
DEFINE('_lkn_config_records_per_page_desc','Maks. antall poster pr. side');
DEFINE('_lkn_config_language','Språk');
DEFINE('_lkn_config_language_desc','Komponentens språk');
DEFINE('_lkn_config_is_not_writeable','FATAL FEIL: Konfigurasjonsfil ikke skrivbar');
DEFINE('_lkn_config_file_saved','Konfigurasjonsfil lagret');
DEFINE('_lkn_config_file_isnot_saved_permissions','Feilet i å endre tillatelser på konfigurasjonsfilen');
DEFINE('_lkn_config_file_isnot_saved','Feilet i å opprette og skrive til konfigurasjonsfilen i');
DEFINE('_lkn_config_debug','Feilsøkingsmodus');
DEFINE('_lkn_config_debug_desc','Feilsøkingsmodus lar deg se innstillingene i konfigurasjonen.');
DEFINE('_lkn_config_sort','Sorter poster etter');
DEFINE('_lkn_config_sort_desc','Dette lar deg velge sortering av bøkene');
DEFINE('_lkn_config_sort_title_ascending','Tittel stigende');
DEFINE('_lkn_config_sort_title_descending','Tittel synkende');
DEFINE('_lkn_config_sort_date_ascending','Dato stigende');
DEFINE('_lkn_config_sort_date_ascending','Dato synkende');
DEFINE('_lkn_config_seo_settings','SEO-innstillinger');
DEFINE('_lkn_config_seo_default_title','Standard tittel');
DEFINE('_lkn_config_seo_default_title_desc','Standard tittel benyttes på komponentens hjemmeside');
DEFINE('_lkn_config_seo_default_keywords','Standard  nøkkelord');
DEFINE('_lkn_config_seo_default_keywords_desc','Standard nøkkelord benyttes på komponentens hjemmeside');
DEFINE('_lkn_config_seo_default_description','Standard beskrivelse');
DEFINE('_lkn_config_seo_default_description_desc','Standard beskrivelse benyttes på komponentens hjemmeside');
DEFINE('_lkn_config_search_settings','Søkeinnstillinger');
DEFINE('_lkn_config_search_where','Søkekriterier');
DEFINE('_lkn_config_search_where_desc','Nøkkelord må være begynnelsen på et ord (for example, CAR would match CARS but not SCAR)');
DEFINE('_lkn_config_seo_title','Tittel');
DEFINE('_lkn_config_seo_keywords','Nøkkelord');
DEFINE('_lkn_config_seo_description','Standard beskrivelse');
DEFINE('_lkn_config_seo_desc','These settings will effect category detail pages, publisher detail pages, book detail pages, tag detail pages.The tags you can use is explained below.<br />
<strong>{title}</strong>:  name of the current page. examples: * <u>on category pages</u>, it will be the name of the category.<br />
* <u>on publisher detail pages</u>, it will be the name of the publisher company.<br />
* <u>on tag detail pages</u>, it will be the name of the tag.<br />
<strong>{default-title}</strong>: the default title of your component which you can change above<br />
<strong>{default-keywords}</strong>: the default keywords of your component which you can change above<br />
<strong>{default-description}</strong>: the default description of your component which you can change above<br />
<strong>{joomla-site-name}</strong>: the your site name which you can change from your joomla global configuration
');
DEFINE('_lkn_config_fields','Feltkonfigurasjon');
DEFINE('_lkn_config_show_book_name','Vis bokens navn');
DEFINE('_lkn_config_show_book_image','Vis bokens bilde');
DEFINE('_lkn_config_show_publisher_name','Vis navn på forlag');
DEFINE('_lkn_config_show_category_name','Vis kategori');
DEFINE('_lkn_config_show_book_short_desc','Vis kort beskrivelse av boken');
DEFINE('_lkn_config_show_publication_date','Vis år for publisering');
DEFINE('_lkn_config_show_language','Vis bokens språk');
DEFINE('_lkn_config_show_link','Vis lenke');
DEFINE('_lkn_config_show_download_link','Vis nedlastingelenke for boken');
DEFINE('_lkn_config_show_isbn','Vis bokens ISBN');
DEFINE('_lkn_config_show_writers','Vis forfattere');
DEFINE('_lkn_config_show_tags','Vis bokens merker');


//genel
DEFINE('_lkn_id','ID');
DEFINE('_lkn_date_added','Dato lagt til');
DEFINE('_lkn_submit','Send');
DEFINE('_lkn_update','Oppdater');
DEFINE('_lkn_update_details','Oppdater detaljer');
DEFINE('_lkn_delete','Slett');
DEFINE('_lkn_go_back','Gå tilbake');
DEFINE('_lkn_edit','Rediger');
DEFINE('_lkn_cancel','Avbryt');
DEFINE('_lkn_publish','Publiser');
DEFINE('_lkn_publish_x','Avpubliser');
DEFINE('_lkn_published','Publisert');
DEFINE('_lkn_published_need_approval','Trenger godkjenning');
DEFINE('_lkn_library_management','Bibliotekadm.');
DEFINE('_lkn_library_info','Informasjon');
DEFINE('_lkn_library_support','Support');
DEFINE('_lkn_library_credits','Krediteres');
DEFINE('_lkn_details','Detaljer');
DEFINE('_lkn_no','Nei');
DEFINE('_lkn_yes','Ja');
DEFINE('_lkn_filter','Filter');
DEFINE('_lkn_go','Start');
DEFINE('_lkn_reset','Reset');
DEFINE('_lkn_select_state','--Velg status--');
DEFINE('_lkn_license','Vilkår og betingelser');

//errors
DEFINE('_lkn_error_book_name_forget','Du må skrive inn bokens navn');
DEFINE('_lkn_error_book_writer_forget','Du må velge minst en forfatter');
DEFINE('_lkn_error_book_language_forget','Du må skrive inn språk for boken');
DEFINE('_lkn_error_book_publisher_forget','Du må velge forlag');
DEFINE('_lkn_error_writer_name','Du må skrive inn forfatterens navn');
DEFINE('_lkn_error_writer_surname','Du må skrive inn forfatterens etternavn');
DEFINE('_lkn_error_publisher_name','Du må skrive inn navn på forlaget');
DEFINE('_lkn_error_category_name','Du må skrive inn navn på kategorien');
DEFINE('_lkn_error_tag_name','Du må skrive inn merke');
DEFINE('_lkn_error_date_field','Du må registrere en gyldig dato');
DEFINE('_lkn_error_date_field','Du må registrere en verdi for antall poster pr. side for at siden skal vises');
DEFINE('_lkn_error_category_update_parent_self','Feil overordnet kategori benyttet');
DEFINE('_lkn_check_book_details','Jeg forstår ikke hvilken bok du ønsker å se detaljene for');
DEFINE('_lkn_check_writer_details','Jeg forstår ikke hvilken forfatter du bønsker å se detaljene for');
DEFINE('_lkn_check_tag_details','Jeg forstår ikke hvilket merke du bønsker å se detaljene for');
DEFINE('_lkn_check_publisher_details','Jeg forstår ikke hvilket forlag du bønsker å se detaljene for');
DEFINE('_lkn_check_category_details','Jeg forstår ikke hvilken kategori du bønsker å se detaljene for');
DEFINE('_lkn_error_delete_check','Post(ene) med {ID} IDs kan ikke slettes pga. aktive bøker.');

DEFINE('_lkn_paging_first','&lsaquo; Første');
DEFINE('_lkn_paging_pervious','&lt;');
DEFINE('_lkn_paging_next','&gt;');
DEFINE('_lkn_paging_last','Siste &rsaquo;');


//debug
DEFINE('_lkn_debug_query_used','Spørringer');
DEFINE('_lkn_debug_query','Spørring');
DEFINE('_lkn_debug_query_no','Ingen spørring utført for denne siden');
DEFINE('_lkn_debug_config_values','Konfigurasjonsverdier');

//front
DEFINE('_lkn_front_home','Hjem');
DEFINE('_lkn_front_book','Bok'); //single.
DEFINE('_lkn_front_books','Bøker'); //PLURAL.
DEFINE('_lkn_front_tag','Merke'); //single.
DEFINE('_lkn_front_tags','Merker'); //PLURAL.
DEFINE('_lkn_front_publisher','Forlag'); //single.
DEFINE('_lkn_front_writer','Forfatter'); //single.
DEFINE('_lkn_front_writers','Forfattere'); //PLURAL.
DEFINE('_lkn_front_submit_book','Registrer ny bok');
DEFINE('_lkn_front_book_count','Ant.bøker');

//search
DEFINE('_lkn_search_book_name','Bokens navn');
DEFINE('_lkn_search_publish_year','År');
DEFINE('_lkn_search_subject','Emne');
DEFINE('_lkn_search_all','Alle');
DEFINE('_lkn_search_search','Søk');
DEFINE('_lkn_search_advanced','Avansert søk');
DEFINE('_lkn_search_no_book','Søkekriteriene ga ingen treff. Oppgi nye søkekriterier og prøv igjen.');
?>