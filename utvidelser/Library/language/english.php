<?php

/*======================================================================*\
|| #################################################################### ||
|| # ---------------------------------------------------------------- # ||
|| # com_library is a native Library Management Component for Joomla  # ||
|| # This component is not free or public.							  # ||
|| # It's for only our licensed customer							  # ||
|| # If you are not a licensed customer, You are not allowed to use it# ||
|| # Developer: Ulas ALKAN											  # ||
|| # Date: Jan 2009													  # ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ------------ OUR COMPONENT IS NOT FREE SOFTWARE ---------------- # ||
|| # www.ulasalkan.com |  www.ulasalkan.com/forum/showthread.php?t=12 # ||
|| #################################################################### ||
\*======================================================================*/

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }

//Admin Panel
//yazarlar
DEFINE('_lkn_control_panel','Control Panel');
DEFINE('_lkn_list_writer','List Writers');
DEFINE('_lkn_writer_name','Writer First Name');
DEFINE('_lkn_writer_middle_name','Writer Middle Name');
DEFINE('_lkn_writer_last_name','Writer Last Name');
DEFINE('_lkn_writer_name_desc','The first name of the writer');
DEFINE('_lkn_writer_middle_name_desc','The middle name of the writer');
DEFINE('_lkn_writer_last_desc','The last name of the writer');
DEFINE('_lkn_writer_bio','Information about writer');
DEFINE('_lkn_writer_bio_desc','Write a short information about the writer');
DEFINE('_lkn_writer_add_new','Add new writer');
DEFINE('_lkn_writer_edit','Edit writer details');
DEFINE('_lkn_writer_details','Writer Details');
DEFINE('_lkn_list_writer_full_name','Writer Name');
DEFINE('_lkn_list_writer_full_name_desc','A book can be written by more than one person');
DEFINE('_lkn_writer_book_list','Books which are written by this writer');

//books or articles
DEFINE('_lkn_list_books','List Books');
DEFINE('_lkn_book_name','Book Name');
DEFINE('_lkn_book_name_desc','Write the Book Name');
DEFINE('_lkn_book_publisher_company','Publisher Company');
DEFINE('_lkn_book_publisher_company_desc','Select the Publisher Company');
DEFINE('_lkn_book_desc','Book short description');
DEFINE('_lkn_book_desc_desc','More about the book');
DEFINE('_lkn_book_add_new','Add new book');
DEFINE('_lkn_book_edit','Edit book details');
DEFINE('_lkn_book_details','Book Details');
DEFINE('_lkn_book_publish_date','Publication year');
DEFINE('_lkn_book_publish_date_desc','When this book is published. this publication year. not full date');
DEFINE('_lkn_book_language','Language');
DEFINE('_lkn_book_language_desc','What\'s the language of this book');
DEFINE('_lkn_book_link','Link');
DEFINE('_lkn_book_link_desc','Is there a related link to this book (Example: Publisher company web site)');
DEFINE('_lkn_book_link_no','No link');
DEFINE('_lkn_book_download_link','Download Link');
DEFINE('_lkn_book_download_link_desc','Is there any download link for a preview chapter?');
DEFINE('_lkn_book_isbn','ISBN');
DEFINE('_lkn_book_isbn_desc','ISBN number for this book');
DEFINE('_lkn_book_tag','Tags');
DEFINE('_lkn_book_image','Book Image');
DEFINE('_lkn_book_image_desc','These files are coming from your /images/stories/com_library. if you want add somethink to this list. Please upload it to /joomla-folder/images/stories/com_library folder');
DEFINE('_lkn_book_tag_desc','Enter tags for this book. Tags must be written comma seperated like tag 1, tag 2, tag 3');

//category
DEFINE('_lkn_list_category','List Categories');
DEFINE('_lkn_category','Category');
DEFINE('_lkn_category_name','Category Name');
DEFINE('_lkn_category_image','Category Image');
DEFINE('_lkn_category_image_desc','This images are coming from your /images/stories/ folder. if you want to add more to this list. You need to upload them to the /images/stories/ folder with ftp.');
DEFINE('_lkn_category_description','Category Description');
DEFINE('_lkn_category_detail','Category Detail');
DEFINE('_lkn_category_books','Books under this category');
DEFINE('_lkn_category_parent','Parent Category of this category');
DEFINE('_lkn_category_insert','Add new category');
DEFINE('_lkn_category_edit','Edit category');
DEFINE('_lkn_category_added','New category is created');
DEFINE('_lkn_category_detail_front','Books under this category');

//publisher
DEFINE('_lkn_list_publisher','List Publishers');
DEFINE('_lkn_publisher_name','Publisher name');
DEFINE('_lkn_publisher_name_desc','The name of publisher company');
DEFINE('_lkn_publisher_desc','Publisher Company Description');
DEFINE('_lkn_publisher_desc_desc','Write more about publisher company');
DEFINE('_lkn_publisher_add_new','Add new publisher');
DEFINE('_lkn_publisher_edit','Edit publisher details');
DEFINE('_lkn_publisher_details','Publisher Details');
DEFINE('_lkn_publisher_book_list','Books which are published by this company');

//tags
DEFINE('_lkn_list_tags','List Tags');
DEFINE('_lkn_tags_tag','Tag');
DEFINE('_lkn_tags_tag_desc','The tag you want to add');
DEFINE('_lkn_tags_add_new','Add new tag');
DEFINE('_lkn_tags_edit','Edit tag details');
DEFINE('_lkn_tags_details','Tag Details');
DEFINE('_lkn_tags_book_list','Books which are related this tag');

DEFINE('_lkn_writer_added','Record is inserted Suceesfully');
DEFINE('_lkn_updated','Record is updateded successfuly');
DEFINE('_lkn_delete_info','Record is deleted successfuly');

//configuration
DEFINE('_lkn_config_general_settings','General Settings');
DEFINE('_lkn_config_design_settings','Design Settings');
DEFINE('_lkn_config_design_category_header','Category Pages Header');
DEFINE('_lkn_config_design_category_header_desc','This codes will be placed at the top of category detail pages');
DEFINE('_lkn_config_design_home_header','Component Home Header');
DEFINE('_lkn_config_design_home_header_desc','This codes will be placed at the top of component home page');
DEFINE('_lkn_config_design_books_details_header','Book Detail Pages Header');
DEFINE('_lkn_config_design_books_details_header_desc','This codes will be placed at the top of book detail pages');
DEFINE('_lkn_config_design_publisher_details','Publisher Detail Pages Header');
DEFINE('_lkn_config_design_publisher_details_desc','This codes will be placed at the top of publisher detail pages');
DEFINE('_lkn_config_design_writer_details','Writer Detail Pages Header');
DEFINE('_lkn_config_design_writer_details_desc','This codes will be placed at the top of writer detail pages');
DEFINE('_lkn_config_design_tags','Tag Detail Pages');
DEFINE('_lkn_config_design_tags_desc','This codes will be placed at the top of tag detail pages');
DEFINE('_lkn_config','Configuration');
DEFINE('_lkn_config_date_format','Date Format, Default : %d.%m.%Y %H:%M:%S');
DEFINE('_lkn_config_date_format_desc','You can use PHP formatting strings. Please refer to PHP documentation <a href="http://de.php.net/strftime" target="_blank">here</a>. Leave it empty to use default formatting.');
DEFINE('_lkn_config_records_per_page','Records on pages');
DEFINE('_lkn_config_records_per_page_desc','maximum number of the records on one page');
DEFINE('_lkn_config_language','Language');
DEFINE('_lkn_config_language_desc','Component language');
DEFINE('_lkn_config_is_not_writeable','FATAL ERROR: Config File Not writeable');
DEFINE('_lkn_config_file_saved','Configuration file saved');
DEFINE('_lkn_config_file_isnot_saved_permissions','Failed to change the permissions of the config file');
DEFINE('_lkn_config_file_isnot_saved','Failed to create and write config file in');
DEFINE('_lkn_config_debug','Debug Mode');
DEFINE('_lkn_config_debug_desc','Debug Mode will allow you to see your configuration settings.');
DEFINE('_lkn_config_sort','Sort Entries by');
DEFINE('_lkn_config_sort_desc','This will allow you to choose the sorting of books');
DEFINE('_lkn_config_sort_title_ascending','title ascending');
DEFINE('_lkn_config_sort_title_descending','title descending');
DEFINE('_lkn_config_sort_date_ascending','date ascending');
DEFINE('_lkn_config_sort_date_ascending','date descending');
DEFINE('_lkn_config_seo_settings','SEO settings');
DEFINE('_lkn_config_seo_default_title','Default Title');
DEFINE('_lkn_config_seo_default_title_desc','Default Title will be used on component home page');
DEFINE('_lkn_config_seo_default_keywords','Default Keywords');
DEFINE('_lkn_config_seo_default_keywords_desc','Default Keywords will be used on component home page');
DEFINE('_lkn_config_seo_default_description','Default Description');
DEFINE('_lkn_config_seo_default_description_desc','Default Description will be used on component home page');
DEFINE('_lkn_config_search_settings','Search Settings');
DEFINE('_lkn_config_search_where','Search Criteria');
DEFINE('_lkn_config_search_where_desc','Keyword must be at the beginning of the word (for example, CAR would match CARS but not SCAR)');
DEFINE('_lkn_config_seo_title','Title');
DEFINE('_lkn_config_seo_keywords','Keywords');
DEFINE('_lkn_config_seo_description','Default Description');
DEFINE('_lkn_config_seo_desc','These settings will effect category detail pages, publisher detail pages, book detail pages, tag detail pages.The tags you can use is explained below.<br />
<strong>{title}</strong>:  name of the current page. examples: * <u>on category pages</u>, it will be the name of the category.<br />
* <u>on publisher detail pages</u>, it will be the name of the publisher company.<br />
* <u>on tag detail pages</u>, it will be the name of the tag.<br />
<strong>{default-title}</strong>: the default title of your component which you can change above<br />
<strong>{default-keywords}</strong>: the default keywords of your component which you can change above<br />
<strong>{default-description}</strong>: the default description of your component which you can change above<br />
<strong>{joomla-site-name}</strong>: the your site name which you can change from your joomla global configuration
');
DEFINE('_lkn_config_fields','Field Configuration');
DEFINE('_lkn_config_show_book_name','Show Book Name');
DEFINE('_lkn_config_show_book_image','Show Book Image');
DEFINE('_lkn_config_show_publisher_name','Show Publisher Name');
DEFINE('_lkn_config_show_category_name','Show Category Name');
DEFINE('_lkn_config_show_book_short_desc','Show Book Short Description');
DEFINE('_lkn_config_show_publication_date','Show Publication Year');
DEFINE('_lkn_config_show_language','Show Book Language');
DEFINE('_lkn_config_show_link','Show Link');
DEFINE('_lkn_config_show_download_link','Show Book Download Link');
DEFINE('_lkn_config_show_isbn','Show Book ISBN');
DEFINE('_lkn_config_show_writers','Show Book Writers');
DEFINE('_lkn_config_show_tags','Show Book Tags');


//genel
DEFINE('_lkn_id','ID');
DEFINE('_lkn_date_added','Date Added');
DEFINE('_lkn_submit','Submit');
DEFINE('_lkn_update','Update');
DEFINE('_lkn_update_details','Update Details');
DEFINE('_lkn_delete','Delete');
DEFINE('_lkn_go_back','Go Back');
DEFINE('_lkn_edit','Edit');
DEFINE('_lkn_cancel','Cancel');
DEFINE('_lkn_publish','Publish');
DEFINE('_lkn_publish_x','Unpublish');
DEFINE('_lkn_published','Published');
DEFINE('_lkn_published_need_approval','Need Approval');
DEFINE('_lkn_library_management','Library Management');
DEFINE('_lkn_library_info','Information');
DEFINE('_lkn_library_support','Support');
DEFINE('_lkn_library_credits','Credits');
DEFINE('_lkn_details','Details');
DEFINE('_lkn_no','No');
DEFINE('_lkn_yes','Yes');
DEFINE('_lkn_filter','Filter');
DEFINE('_lkn_go','Go');
DEFINE('_lkn_reset','Reset');
DEFINE('_lkn_select_state','--Select State--');
DEFINE('_lkn_license','Terms & Conditions');

//errors
DEFINE('_lkn_error_book_name_forget','You must write the book name');
DEFINE('_lkn_error_book_writer_forget','You must select at least one writer');
DEFINE('_lkn_error_book_language_forget','You must write the language of the book');
DEFINE('_lkn_error_book_publisher_forget','You must select the publisher company');
DEFINE('_lkn_error_writer_name','You must write the writer name');
DEFINE('_lkn_error_writer_surname','You must write the writer surname');
DEFINE('_lkn_error_publisher_name','You must write the name of the company');
DEFINE('_lkn_error_category_name','You must write the name of the category');
DEFINE('_lkn_error_tag_name','You must write the tag');
DEFINE('_lkn_error_date_field','You must write the corrent date field');
DEFINE('_lkn_error_date_field','You must write Records on pages value for the paging');
DEFINE('_lkn_error_category_update_parent_self','Wrong parent category assign');
DEFINE('_lkn_check_book_details','I can not understand which book you want to see the details');
DEFINE('_lkn_check_writer_details','I can not understand which writer you want to see the details');
DEFINE('_lkn_check_tag_details','I can not understand which tag you want to see the details');
DEFINE('_lkn_check_publisher_details','I can not understand which publisher you want to see the details');
DEFINE('_lkn_check_category_details','I can not understand which category you want to see the details');
DEFINE('_lkn_error_delete_check','Record(s) with {ID} IDs is(/are) not deleted because of active books.');

DEFINE('_lkn_paging_first','&lsaquo; First');
DEFINE('_lkn_paging_pervious','&lt;');
DEFINE('_lkn_paging_next','&gt;');
DEFINE('_lkn_paging_last','Last &rsaquo;');


//debug
DEFINE('_lkn_debug_query_used','Query List');
DEFINE('_lkn_debug_query','Query');
DEFINE('_lkn_debug_query_no','No query has been executed for this page');
DEFINE('_lkn_debug_config_values','Configuration Values');

//front
DEFINE('_lkn_front_home','Home');
DEFINE('_lkn_front_book','Book'); //single.
DEFINE('_lkn_front_books','Books'); //PLURAL.
DEFINE('_lkn_front_tag','Tag'); //single.
DEFINE('_lkn_front_tags','Tags'); //PLURAL.
DEFINE('_lkn_front_publisher','Publisher'); //single.
DEFINE('_lkn_front_writer','Writer'); //single.
DEFINE('_lkn_front_writers','Writers'); //PLURAL.
DEFINE('_lkn_front_submit_book','Submit New Book');
DEFINE('_lkn_front_book_count','Book Count');

//search
DEFINE('_lkn_search_book_name','Book Name');
DEFINE('_lkn_search_publish_year','Year');
DEFINE('_lkn_search_subject','Subject');
DEFINE('_lkn_search_all','All');
DEFINE('_lkn_search_search','Search');
DEFINE('_lkn_search_advanced','Advanced Search');
DEFINE('_lkn_search_no_book','There is no results for your search criteria. Please change your search criteria and try it again');
?>