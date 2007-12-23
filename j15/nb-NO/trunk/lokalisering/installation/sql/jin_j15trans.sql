-- phpMyAdmin SQL Dump
-- version 2.8.2.4
-- http://www.phpmyadmin.net
-- 
-- Vert: localhost:3306
-- Generert den: 23. Des, 2007 klokka 12:25 PM
-- Tjenerversjon: 5.0.51
-- PHP-Versjon: 5.0.5
-- 
-- Database: `jin_j15trans`
-- 

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_banner`
-- 

CREATE TABLE `jos_banner` (
  `bid` int(11) NOT NULL auto_increment,
  `cid` int(11) NOT NULL default '0',
  `type` varchar(90) NOT NULL default 'banner',
  `name` text NOT NULL,
  `alias` varchar(255) NOT NULL default '',
  `imptotal` int(11) NOT NULL default '0',
  `impmade` int(11) NOT NULL default '0',
  `clicks` int(11) NOT NULL default '0',
  `imageurl` varchar(100) NOT NULL default '',
  `clickurl` varchar(200) NOT NULL default '',
  `date` datetime default NULL,
  `showBanner` tinyint(1) NOT NULL default '0',
  `checked_out` tinyint(1) NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `editor` varchar(150) default NULL,
  `custombannercode` text,
  `catid` int(10) unsigned NOT NULL default '0',
  `description` text NOT NULL,
  `sticky` tinyint(1) unsigned NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  `publish_up` datetime NOT NULL default '0000-00-00 00:00:00',
  `publish_down` datetime NOT NULL default '0000-00-00 00:00:00',
  `tags` text NOT NULL,
  `params` text NOT NULL,
  PRIMARY KEY  (`bid`),
  KEY `viewbanner` (`showBanner`),
  KEY `idx_banner_catid` (`catid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- 
-- Dataark for tabell `jos_banner`
-- 

INSERT INTO `jos_banner` (`bid`, `cid`, `type`, `name`, `alias`, `imptotal`, `impmade`, `clicks`, `imageurl`, `clickurl`, `date`, `showBanner`, `checked_out`, `checked_out_time`, `editor`, `custombannercode`, `catid`, `description`, `sticky`, `ordering`, `publish_up`, `publish_down`, `tags`, `params`) VALUES (1, 1, 'banner', 'OSM 1', 'osm-1', 0, 43, 0, 'osmbanner1.png', 'http://www.opensourcematters.org', '2004-07-07 15:31:29', 1, 0, '0000-00-00 00:00:00', '', '', 13, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(2, 1, 'banner', 'OSM 2', 'osm-2', 0, 49, 0, 'osmbanner2.png', 'http://www.opensourcematters.org', '2004-07-07 15:31:29', 1, 0, '0000-00-00 00:00:00', '', '', 13, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(3, 1, '', 'Joomla!', 'joomla', 0, 282, 0, '', 'http://www.joomla.org', '2007-12-15 22:14:25', 1, 0, '0000-00-00 00:00:00', '', '<a href="{CLICKURL}?phpMyAdmin=y7ydHO5glGkaIDcSVlIgptpeLd2" target="_blank">{NAME}</a>\r\n<br/>\r\nJoomla! er den mest populære og brukte publiseringsløsningen som er laget i åpen kildekode.', 14, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(4, 1, '', 'JoomlaCode', 'joomlacode', 0, 282, 0, '', 'http://joomlacode.org', '2007-12-15 22:07:44', 1, 0, '0000-00-00 00:00:00', '', '<a href="{CLICKURL}?phpMyAdmin=y7ydHO5glGkaIDcSVlIgptpeLd2" target="_blank">{NAME}</a>\r\n<br/>\r\nJoomlaCode, utvikling og distubusjon gjort enkelt.', 14, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(5, 1, '', 'Joomla! Extensions', 'joomla-extensions', 0, 277, 0, '', 'http://extensions.joomla.org', '2007-12-15 22:13:25', 1, 0, '0000-00-00 00:00:00', '', '<a href="{CLICKURL}?phpMyAdmin=y7ydHO5glGkaIDcSVlIgptpeLd2" target="_blank">{NAME}</a>\r\n<br/>\r\nKomponenter, moduler. programtillegg og språk i store mengder.', 14, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(6, 1, '', 'Joomla! Shop', 'joomla-shop', 0, 277, 0, '', 'http://shop.joomla.org', '2007-12-15 22:09:15', 1, 0, '0000-00-00 00:00:00', '', '<a href="{CLICKURL}?phpMyAdmin=y7ydHO5glGkaIDcSVlIgptpeLd2" target="_blank">{NAME}</a>\r\n<br/>\r\nFor alle dine Joomla!-gaveartikler.', 14, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(7, 1, '', 'Joomla! Promo Shop', 'joomla-promo-shop', 0, 520, 5, 'shop-ad.jpg', 'http://shop.joomla.org', '2007-09-19 17:26:24', 1, 0, '0000-00-00 00:00:00', '', '', 33, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(8, 1, '', 'Joomla! Promo Books', 'joomla-promo-books', 0, 547, 3, 'shop-ad-books.jpg', 'http://shop.joomla.org/index.php?option=com_wrapper&Itemid=8', '2007-09-19 17:28:01', 1, 0, '0000-00-00 00:00:00', '', '', 33, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '');

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_bannerclient`
-- 

CREATE TABLE `jos_bannerclient` (
  `cid` int(11) NOT NULL auto_increment,
  `name` text NOT NULL,
  `contact` text NOT NULL,
  `email` varchar(255) NOT NULL default '',
  `extrainfo` text NOT NULL,
  `checked_out` tinyint(1) NOT NULL default '0',
  `checked_out_time` time default NULL,
  `editor` varchar(150) default NULL,
  PRIMARY KEY  (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Dataark for tabell `jos_bannerclient`
-- 

INSERT INTO `jos_bannerclient` (`cid`, `name`, `contact`, `email`, `extrainfo`, `checked_out`, `checked_out_time`, `editor`) VALUES (1, 'Open Source Matters', 'Administrator', 'admin@opensourcematters.org', '', 0, '00:00:00', NULL),
(2, 'Foreningen Joomla! i Norge', 'Styreleder', 'epost@epost.com', '', 0, '00:00:00', '');

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_bannertrack`
-- 

CREATE TABLE `jos_bannertrack` (
  `track_date` date NOT NULL,
  `track_type` int(10) unsigned NOT NULL,
  `banner_id` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dataark for tabell `jos_bannertrack`
-- 


-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_categories`
-- 

CREATE TABLE `jos_categories` (
  `id` int(11) NOT NULL auto_increment,
  `parent_id` int(11) NOT NULL default '0',
  `title` text NOT NULL,
  `name` text NOT NULL,
  `alias` varchar(255) NOT NULL default '',
  `image` varchar(255) NOT NULL default '',
  `section` varchar(150) NOT NULL default '',
  `image_position` varchar(90) NOT NULL default '',
  `description` text NOT NULL,
  `published` tinyint(1) NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `editor` varchar(150) default NULL,
  `ordering` int(11) NOT NULL default '0',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `count` int(11) NOT NULL default '0',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `cat_idx` (`section`,`published`,`access`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

-- 
-- Dataark for tabell `jos_categories`
-- 

INSERT INTO `jos_categories` (`id`, `parent_id`, `title`, `name`, `alias`, `image`, `section`, `image_position`, `description`, `published`, `checked_out`, `checked_out_time`, `editor`, `ordering`, `access`, `count`, `params`) VALUES (1, 0, 'Siste nytt', '', 'siste-nytt', 'taking_notes.jpg', '1', 'left', 'Siste nytt fra Joomla!-laget', 1, 0, '0000-00-00 00:00:00', '', 1, 0, 1, ''),
(2, 0, 'Joomla! -lenker', '', 'joomla-lenker', 'clock.jpg', 'com_weblinks', 'left', '<p>Et utvalg av linker relatert til Joomla!-prosjektet.</p>', 1, 0, '0000-00-00 00:00:00', NULL, 1, 0, 0, ''),
(3, 0, 'Nyhetsmeldinger', '', 'nyhetsmelding', '', '1', 'left', '', 1, 0, '0000-00-00 00:00:00', '', 2, 0, 0, ''),
(4, 0, 'Joomla!', '', 'joomla', '', 'com_newsfeeds', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 2, 0, 0, ''),
(5, 0, 'Næringsliv, generelt', '', 'næringsliv-generelt', '', 'com_newsfeeds', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 1, 0, 0, ''),
(6, 0, 'Linux', '', 'linux', '', 'com_newsfeeds', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 6, 0, 0, ''),
(7, 0, 'Internett', '', 'internett', '', 'com_newsfeeds', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 7, 0, 0, ''),
(12, 0, 'Kontakter', '', 'kontakter', '', 'com_contact_details', 'left', 'Kontaktdetaljer for denne nettsiden', 1, 0, '0000-00-00 00:00:00', NULL, 0, 0, 0, ''),
(13, 0, 'Joomla!', '', 'joomla', '', 'com_banner', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 0, 0, 0, ''),
(14, 0, 'Text Ads', '', 'text-ads', '', 'com_banner', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 0, 0, 0, ''),
(15, 0, 'Features', '', 'features', '', 'com_content', 'left', '', 0, 0, '0000-00-00 00:00:00', NULL, 6, 0, 0, ''),
(17, 0, 'Benefits', '', 'benefits', '', 'com_content', 'left', '', 0, 0, '0000-00-00 00:00:00', NULL, 4, 0, 0, ''),
(18, 0, 'Platforms', '', 'platforms', '', 'com_content', 'left', '', 0, 0, '0000-00-00 00:00:00', NULL, 3, 0, 0, ''),
(19, 0, 'Andre resurser', '', 'andre-resurser', '', 'com_weblinks', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 2, 0, 0, ''),
(29, 0, 'Publiseringsløsningen', '', 'publiseringsløsningen', '', '4', 'left', 'Informasjon om programvaren bak Joomla!', 1, 0, '0000-00-00 00:00:00', NULL, 2, 0, 0, ''),
(28, 0, 'Nåværende brukere', '', 'nåværende-brukere', '', '3', 'left', 'Spørsmål som brukere som vil migrere til Joomla! 1.5 sannsynligvis vil spørre om.', 1, 0, '0000-00-00 00:00:00', NULL, 2, 0, 0, ''),
(25, 0, 'Prosjektet', '', 'prosjektet', '', '4', 'left', 'Generelle fakta om Joomla!', 1, 0, '0000-00-00 00:00:00', NULL, 1, 0, 0, ''),
(27, 0, 'Ny med Joomla!', '', 'ny-med-joomla', '', '3', 'left', 'Spørsmål for nye brukere av Joomla!', 1, 0, '0000-00-00 00:00:00', NULL, 3, 0, 0, ''),
(30, 0, 'Samfunnet', '', 'samfunnet', '', '4', 'left', 'Om de millioner av brukere av Joomla!, og nettsidene.', 1, 0, '0000-00-00 00:00:00', NULL, 3, 0, 0, ''),
(31, 0, 'Generelt', '', 'generelt', '', '3', 'left', 'Generelle spørsmål om publiseringsløsningen Joomla! CMS', 1, 0, '0000-00-00 00:00:00', NULL, 1, 0, 0, ''),
(32, 0, 'Språk', '', 'språk', '', '3', 'left', 'Spørsmål relatert til lokalisering og språk', 1, 0, '0000-00-00 00:00:00', NULL, 4, 0, 0, ''),
(33, 0, 'Joomla! reklame', '', 'joomla-reklame', '', 'com_banner', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 1, 0, 0, '');

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_components`
-- 

CREATE TABLE `jos_components` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(150) NOT NULL default '',
  `link` varchar(255) NOT NULL default '',
  `menuid` int(11) unsigned NOT NULL default '0',
  `parent` int(11) unsigned NOT NULL default '0',
  `admin_menu_link` varchar(255) NOT NULL default '',
  `admin_menu_alt` text NOT NULL,
  `option` varchar(50) NOT NULL default '',
  `ordering` int(11) NOT NULL default '0',
  `admin_menu_img` varchar(255) NOT NULL default '',
  `iscore` tinyint(4) NOT NULL default '0',
  `params` text NOT NULL,
  `enabled` tinyint(4) NOT NULL default '1',
  PRIMARY KEY  (`id`),
  KEY `parent_option` (`parent`,`option`(32))
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

-- 
-- Dataark for tabell `jos_components`
-- 

INSERT INTO `jos_components` (`id`, `name`, `link`, `menuid`, `parent`, `admin_menu_link`, `admin_menu_alt`, `option`, `ordering`, `admin_menu_img`, `iscore`, `params`, `enabled`) VALUES (1, 'Banners', '', 0, 0, '', 'Banner Management', 'com_banners', 0, 'js/ThemeOffice/component.png', 0, 'track_impressions=0\ntrack_clicks=0\ntag_prefix=\n\n', 1),
(2, 'Banners', '', 0, 1, 'option=com_banners', 'Active Banners', 'com_banners', 1, 'js/ThemeOffice/edit.png', 0, '', 1),
(3, 'Clients', '', 0, 1, 'option=com_banners&c=client', 'Manage Clients', 'com_banners', 2, 'js/ThemeOffice/categories.png', 0, '', 1),
(4, 'Web Links', 'option=com_weblinks', 0, 0, '', 'Manage Weblinks', 'com_weblinks', 0, 'js/ThemeOffice/component.png', 0, 'show_comp_description=1\ncomp_description=\nshow_link_hits=1\nshow_link_description=1\nshow_other_cats=1\nshow_headings=1\nshow_page_title=1\nlink_target=0\nlink_icons=\n\n', 1),
(5, 'Links', '', 0, 4, 'option=com_weblinks', 'View existing weblinks', 'com_weblinks', 1, 'js/ThemeOffice/edit.png', 0, '', 1),
(6, 'Categories', '', 0, 4, 'option=com_categories&section=com_weblinks', 'Manage weblink categories', '', 2, 'js/ThemeOffice/categories.png', 0, '', 1),
(7, 'Contacts', 'option=com_contact', 0, 0, '', 'Edit contact details', 'com_contact', 0, 'js/ThemeOffice/component.png', 1, 'contact_icons=0\nicon_address=\nicon_email=\nicon_telephone=\nicon_fax=\nicon_misc=\nshow_headings=1\nshow_position=1\nshow_email=0\nshow_telephone=1\nshow_mobile=1\nshow_fax=1\nbannedEmail=\nbannedSubject=\nbannedText=\nsession=1\ncustomReply=0\n\n', 1),
(8, 'Contacts', '', 0, 7, 'option=com_contact', 'Edit contact details', 'com_contact', 0, 'js/ThemeOffice/edit.png', 1, '', 1),
(9, 'Categories', '', 0, 7, 'option=com_categories&section=com_contact_details', 'Manage contact categories', '', 2, 'js/ThemeOffice/categories.png', 1, '', 1),
(10, 'Polls', 'option=com_poll', 0, 0, 'option=com_poll', 'Manage Polls', 'com_poll', 0, 'js/ThemeOffice/component.png', 0, '', 1),
(11, 'News Feeds', 'option=com_newsfeeds', 0, 0, '', 'News Feeds Management', 'com_newsfeeds', 0, 'js/ThemeOffice/component.png', 0, '', 1),
(12, 'Feeds', '', 0, 11, 'option=com_newsfeeds', 'Manage News Feeds', 'com_newsfeeds', 1, 'js/ThemeOffice/edit.png', 0, '', 1),
(13, 'Categories', '', 0, 11, 'option=com_categories&section=com_newsfeeds', 'Manage Categories', '', 2, 'js/ThemeOffice/categories.png', 0, '', 1),
(14, 'User', 'option=com_user', 0, 0, '', '', 'com_user', 0, '', 1, '', 1),
(15, 'Search', 'option=com_search', 0, 0, 'option=com_search', 'Search Statistics', 'com_search', 0, 'js/ThemeOffice/component.png', 1, 'enabled=0\n\n', 1),
(16, 'Categories', '', 0, 1, 'option=com_categories&section=com_banner', 'Categories', '', 3, '', 1, '', 1),
(17, 'Wrapper', 'option=com_wrapper', 0, 0, '', 'Wrapper', 'com_wrapper', 0, '', 1, '', 1),
(18, 'Mail To', '', 0, 0, '', '', 'com_mailto', 0, '', 1, '', 1),
(19, 'Media Manager', '', 0, 0, 'option=com_media', 'Media Manager', 'com_media', 0, '', 1, 'upload_extensions=bmp,csv,doc,epg,gif,ico,jpg,odg,odp,ods,odt,pdf,png,ppt,swf,txt,xcf,xls,BMP,CSV,DOC,EPG,GIF,ICO,JPG,ODG,ODP,ODS,ODT,PDF,PNG,PPT,SWF,TXT,XCF,XLS\nupload_maxsize=10000000\nfile_path=images\nimage_path=images/stories\nrestrict_uploads=1\ncheck_mime=1\nimage_extensions=bmp,gif,jpg,png\nignore_extensions=\nupload_mime=image/jpeg,image/gif,image/png,image/bmp,application/x-shockwave-flash,application/msword,application/excel,application/pdf,application/powerpoint,text/plain,application/x-zip\nupload_mime_illegal=text/html\n\n', 1),
(20, 'Articles', 'option=com_content', 0, 0, '', '', 'com_content', 0, '', 1, 'show_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=0\n\n', 1),
(21, 'Configuration Manager', '', 0, 0, '', 'Configuration', 'com_config', 0, '', 1, '', 1),
(22, 'Installation Manager', '', 0, 0, '', 'Installer', 'com_installer', 0, '', 1, '', 1),
(23, 'Language Manager', '', 0, 0, '', 'Languages', 'com_languages', 0, '', 1, 'site=nb-NO\nadministrator=nb-NO\n\n', 1),
(24, 'Mass mail', '', 0, 0, '', 'Mass Mail', 'com_massmail', 0, '', 1, 'mailSubjectPrefix=\nmailBodySuffix=\n\n', 1),
(25, 'Menu Editor', '', 0, 0, '', 'Menu Editor', 'com_menus', 0, '', 1, '', 1),
(27, 'Messaging', '', 0, 0, '', 'Messages', 'com_messages', 0, '', 1, '', 1),
(28, 'Modules Manager', '', 0, 0, '', 'Modules', 'com_modules', 0, '', 1, '', 1),
(29, 'Plugin Manager', '', 0, 0, '', 'Plugins', 'com_plugins', 0, '', 1, '', 1),
(30, 'Template Manager', '', 0, 0, '', 'Templates', 'com_templates', 0, '', 1, '', 1),
(31, 'User Manager', '', 0, 0, '', 'Users', 'com_users', 0, '', 1, 'allowUserRegistration=1\nnew_usertype=Registered\nuseractivation=1\nfrontend_userparams=1\n\n', 1),
(32, 'Cache Manager', '', 0, 0, '', 'Cache', 'com_cache', 0, '', 1, '', 1),
(33, 'Control Panel', '', 0, 0, '', 'Control Panel', 'com_cpanel', 0, '', 1, '', 1),
(34, 'Translation Manager', 'option=com_translationsmanager', 0, 0, 'option=com_translationsmanager', 'Translation Manager', 'com_translationsmanager', 0, 'class:language', 0, '', 1);

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_contact_details`
-- 

CREATE TABLE `jos_contact_details` (
  `id` int(11) NOT NULL auto_increment,
  `name` text NOT NULL,
  `alias` varchar(255) NOT NULL default '',
  `con_position` text,
  `address` text,
  `suburb` text,
  `state` text,
  `country` text,
  `postcode` varchar(255) default NULL,
  `telephone` varchar(255) default NULL,
  `fax` varchar(255) default NULL,
  `misc` mediumtext,
  `image` varchar(255) default NULL,
  `imagepos` varchar(60) default NULL,
  `email_to` varchar(255) default NULL,
  `default_con` tinyint(1) unsigned NOT NULL default '0',
  `published` tinyint(1) unsigned NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL default '0',
  `params` text NOT NULL,
  `user_id` int(11) NOT NULL default '0',
  `catid` int(11) NOT NULL default '0',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `mobile` varchar(255) NOT NULL default '',
  `webpage` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `catid` (`catid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Dataark for tabell `jos_contact_details`
-- 

INSERT INTO `jos_contact_details` (`id`, `name`, `alias`, `con_position`, `address`, `suburb`, `state`, `country`, `postcode`, `telephone`, `fax`, `misc`, `image`, `imagepos`, `email_to`, `default_con`, `published`, `checked_out`, `checked_out_time`, `ordering`, `params`, `user_id`, `catid`, `access`, `mobile`, `webpage`) VALUES (1, 'Navn', 'navn', 'Stilling', 'Adresse', 'Poststed', 'Fylke', 'Land', 'Postnummer', 'Telefon', 'Faks', 'Ekstra informasjon', 'powered_by.png', 'top', 'email@email.no', 0, 1, 0, '0000-00-00 00:00:00', 1, 'show_name=1\nshow_position=1\nshow_email=0\nshow_street_address=1\nshow_suburb=1\nshow_state=1\nshow_postcode=1\nshow_country=1\nshow_telephone=1\nshow_mobile=1\nshow_fax=1\nshow_webpage=1\nshow_misc=1\nshow_image=1\nallow_vcard=0\ncontact_icons=0\nicon_address=\nicon_email=\nicon_telephone=\nicon_mobile=\nicon_fax=\nicon_misc=\nshow_email_form=1\nemail_description=1\nshow_email_copy=1\nbanned_email=\nbanned_subject=\nbanned_text=', 0, 12, 0, 'Mobiltelefon', 'http://Hjemmeside');

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_content`
-- 

CREATE TABLE `jos_content` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` text NOT NULL,
  `alias` varchar(255) NOT NULL default '',
  `title_alias` text NOT NULL,
  `introtext` mediumtext NOT NULL,
  `fulltext` mediumtext NOT NULL,
  `state` tinyint(3) NOT NULL default '0',
  `sectionid` int(11) unsigned NOT NULL default '0',
  `mask` int(11) unsigned NOT NULL default '0',
  `catid` int(11) unsigned NOT NULL default '0',
  `created` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) unsigned NOT NULL default '0',
  `created_by_alias` text NOT NULL,
  `modified` datetime NOT NULL default '0000-00-00 00:00:00',
  `modified_by` int(11) unsigned NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `publish_up` datetime NOT NULL default '0000-00-00 00:00:00',
  `publish_down` datetime NOT NULL default '0000-00-00 00:00:00',
  `images` text NOT NULL,
  `urls` text NOT NULL,
  `attribs` text NOT NULL,
  `version` int(11) unsigned NOT NULL default '1',
  `parentid` int(11) unsigned NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  `metakey` text NOT NULL,
  `metadesc` text NOT NULL,
  `access` int(11) unsigned NOT NULL default '0',
  `hits` int(11) unsigned NOT NULL default '0',
  `metadata` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `idx_section` (`sectionid`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`),
  KEY `idx_state` (`state`),
  KEY `idx_catid` (`catid`),
  KEY `idx_createdby` (`created_by`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

-- 
-- Dataark for tabell `jos_content`
-- 

INSERT INTO `jos_content` (`id`, `title`, `alias`, `title_alias`, `introtext`, `fulltext`, `state`, `sectionid`, `mask`, `catid`, `created`, `created_by`, `created_by_alias`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `publish_up`, `publish_down`, `images`, `urls`, `attribs`, `version`, `parentid`, `ordering`, `metakey`, `metadesc`, `access`, `hits`, `metadata`) VALUES (1, 'Velkommen til Joomla!', 'velkommen-til-joomla', '', '<div align="left"><strong>Joomla! er en fri åpen kildekodeløsning og innholdspubliseringssystem designet for rask opprettelse av gode interaktive og flerspråklige nettside, nettbaserte samfunn, mediaportaler, blogger og netthandels-applikasjoner. <br /></strong></div><p><strong><br /></strong><img src="images/stories/powered_by.png" border="0" alt="Joomla! Logo" title="Example Caption" hspace="6" width="165" height="68" align="left" />Joomla! tilbyr et lettbrukt grafisk brukersystem som forenkler behandling og publisering av store volum med innhold, inkludert HTML, dokumenter og rik media. Joomla! blir brukt av organisasjoner i alle størrelser for åpne nettsider, intern-nett og ekstern-nett - og blir støttet av et samfunn bestående av flere tusen brukere.</p>', 'Med et fullt dokumentert bibliotek av utviklingsressurser kan Joomla! tilpasses et hvert behov for en nettside, inkludert presentasjon, utseende, administrasjon samt en hurtig integrering av tredjeparts programvare. Joomla! er rik på arvegods og har flere ganger blitt kronet som kongen av innholdspubliseringssystemer. Nå, med mere kraft under panseret, skifter Joomla! gir og gir programutviklere mer kraft samtidig som brukeropplevelsen blir mer vennlig. For dem som alltid har ønsket økte utvidelsesmuligheter, blir dette oppfylt med Joomla! 1.5. <p>&nbsp;</p><p>Et nytt rammeverk, grundig reproduksjon og et svært aktivt utviklingsteam bringer frem spenningen over "neste generasjons innholdspubliseringssystem" til fingerspissene. Enten du er en systemutvikler eller helt "grønn", kan Joomla! ta det til et neste nivå av innholdspublisering. "Mer enn et innholdspubliseringssystem" som en ny kategori er en tanke vi har lekt med. Fordi nye Joomla! API har slik en utrolig kraft og fleksibilitet, har du frihet til å velge den retning du måtte ønske i dine kreative tanker og Joomla! kan hjelpe deg til å komme dit så mye enklere enn før.</p><p>Tenker du nettpublisering? Tenk Joomla!</p>', 1, 1, 0, 1, '2006-10-12 20:00:00', 65, 'Rune og Bjørnar', '2007-12-22 23:37:24', 64, 0, '0000-00-00 00:00:00', '2006-01-03 16:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 39, 0, 1, '', '', 0, 125, 'robots=\nauthor='),
(2, 'Notis 1', 'notis-1', '', '<p>Joomla! gjør det enkelt å publisere en nettside, uansett type. Enten du ønsker å sette opp en ren reklameside eller skal bygge et stort og omfattende onlinesamfunn, kan Joomla!, på kort tid, sette opp en helt ny nettside samt legge til ekstra funksjonalitet etterhvert som behovet måtte melde seg. De hundretalls utvidelsene som finnes tilgjengelig lar deg levere tjenester som øker din rekkevidde på internett.</p>', '', 1, 1, 0, 3, '2004-08-10 14:30:34', 64, '', '2007-12-18 01:37:52', 64, 0, '0000-00-00 00:00:00', '2004-08-09 18:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 11, 0, 3, '', '', 0, 1, 'robots=\nauthor='),
(3, 'Notis 2', 'notis-2', '', '<p>En viktig forutsetning for en levende nettside er hyppige oppdateringer! Joomla! gjør det enkelt å legge til artikler, innhold, bilder, videoer etc. Redaktører for nettstedet kan editere og administrere innhold enkelt ved å klikke på linker. Administratorer for nettstedet kan også editere innhold gjennom et grafisk kontrollpanel, som gir dem full kontroll over nettstedet.</p>', '', 1, 1, 0, 3, '2004-08-10 04:30:34', 64, '', '2007-12-18 01:38:13', 64, 0, '0000-00-00 00:00:00', '2004-08-09 12:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 9, 0, 4, '', '', 0, 0, 'robots=\nauthor='),
(4, 'Notis 3', 'notis-3', '', '<p>Med et bibliotek på mange hundre fritt nedlastbare <a href="http://extensions.joomla.org" title="The Joomla! Extensions Directory">Utvidelser</a> kan du legge til det du måtte ønske av funksjonalitet for å utvikle nettstedet. Ikke vent, se gjennom biblioteket av <a href="http://extensions.joomla.org/" target="_blank">Joomla! Utvidelser</a> i dag.</p>', '', 1, 1, 0, 3, '2004-08-10 16:30:34', 64, '', '2007-12-22 16:34:22', 64, 0, '0000-00-00 00:00:00', '2004-08-09 20:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 12, 0, 5, '', '', 0, 1, 'robots=\nauthor='),
(5, 'Joomla! lisensretningslinjer ', 'joomla-lisensretningslinjer', 'joomla-license-guidelines', '<p>Denne nettsiden er utgitt i <a href="http://www.joomla.org/"><font color="#810081">Joomla!</font></a> Programvaren og nettstedsmal som er i bruk er opphavsbeskyttet 2005-2007 <a href="http://www.opensourcematters.org/"><font color="#0000ff">Open Source Matters</font></a>. Annet innhold og data, inkludert det som er lagt inn i på nettstedet og nettstedsmaler lagt inn etter installasjon, er opphavsbeskyttet av respektive opphavseier.</p><p>Ønsker du og videreformidle, kopiere eller modifisere Joomla!, så er du velkommen til det med vilkår for <a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0.html#SEC1"><font color="#0000ff">GNU General Public License</font></a>. Er du ukjent med denne lisensen kan du lese <a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0.html#SEC4"><font color="#0000ff">''How To Apply These Terms To Your Program''</font></a> og <a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0-faq.html"><font color="#0000ff">''GNU General Public License FAQ/OSS''</font></a></p><p>Joomla! dokumentasjonen er utgitt under betingelsene <a href="http://creativecommons.org/licenses/by-nc-sa/2.5/" title="Creative Commons "><font color="#0000ff">Creative Commons Attribution-Non-Commercial-Share-Alike License 2.5</font></a> eller de spesifikke lisenser fra respektive opphavseiere.</p><p>Joomla! lisensen har alltid vært GPL.</p>', '', 1, 4, 0, 25, '2004-08-20 14:11:07', 66, '', '2007-12-21 09:35:39', 66, 0, '0000-00-00 00:00:00', '2004-08-19 10:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 9, 0, 2, '', '', 0, 127, 'robots=\nauthor='),
(6, 'Vi er frivillige', 'vi-er-frivillige', '', '<p>Joomla! kjerneteam som består av frivillige utviklere, designere, administrative ledere har sammen med ett stort antall arbeidsgrupper bestående av engasjerte medlemmer ført Joomla! til nye høyder i dens korte liv. Dette velsmurte maskineriet er ofte prøvd kopiert, men aldri blitt overgått. Joomla! har noen fantastisk talentfulle personer som snakker varmt om åpen kildekode som industristandard. Joomla! 1.5 har tatt ett stort sprang og representerer den mest spennende utgivelsen i Joomla!''s historie.</p>', '<p>Prosjektet har en fin blanding av utviklere fra velkjente Andrew Eddie (banebryter med Mambo''s tidligere suksess) til de fersk, unge som Johan Janssens og Louis Landry. Denne dynamiske trio har vært ryggraden i prosjektet ved bringe andre nye talenter inn i prosjektet. I prosjekter med åpen kildekoder spøkes det om "buss" faktor. Prosjekter som ikke sprer utviklingen er ansett som "mindre friske", om deres enslige hovedutvikler skulle treffe en buss!</p>', 1, 1, 0, 1, '2004-07-07 15:54:06', 66, '', '2007-12-20 21:42:20', 66, 0, '0000-00-00 00:00:00', '2004-07-07 05:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 13, 0, 2, '', '', 0, 64, 'robots=\nauthor='),
(7, 'Stick to the code!', 'stick-to-the-code', '', 'To ensure this code release, Wilco Jansen resorted to sending rum to joint lead-developer Johan Janssens. Johan, who''s had a penchant for rum ever since the first "Pirate''s of the Caribbean" movie screened, took the bait, mixed it with Cola, and here we are with our latest 1.5 release. It looks like pirate talk will figure quite a lot in future Joomla! development! ', '<strong><br />Translation for you real pirates:<br /></strong><br />First Mate Wilco resorted t'' sendin'' rum t'' joint Capt''n Johan. Johan, who''s had a penchant for rum ever since t'' first "Pirate''s o'' t'' Caribbean" movie screened, took t'' bait, mixed it with molasses, and here we be with our latest 1.5 release. It looks like pirate talk will figure quite a lot in future Joomla! development!', 1, 1, 0, 1, '2004-07-07 14:00:00', 62, '', '2007-12-23 00:53:50', 64, 0, '0000-00-00 00:00:00', '2004-07-07 14:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 15, 0, 3, '', '', 0, 65, 'robots=\nauthor='),
(8, 'The Legend of Buca di Beppo', 'the-legend-of-buca-di-beppo', '', '<p>The legend of Buca di Beppo involves a covert meeting of key developers in a Mafia-style restaurant in the United States.  ''Bucas'' has on more than one occasion been the catalyst for key (and in some cases considered insurmountable) development ''humps'' being overcome.</p><p>With copius amounts of food and wine flowing, the creative juices of coders seem to work keener, faster, and problems are solved. Louis Landry famously agreed that living near a Bucas could actually lead to faster development cycles.</p><p>Mmmm. A restaurant with photos of famous Mafia films like <em>The Godfather</em> and violin cases leaning against the booths.  Makes you wonder, doesn''t it?  </p><p>If Joomla! was a commercial venture, we''re sure management would actually consider building a Bucas inside the building!</p><p>Masterchief meet Bugsy Landry. </p>', '', 1, 1, 0, 1, '2004-04-12 09:54:06', 62, '', '2007-11-08 12:14:09', 62, 0, '0000-00-00 00:00:00', '2004-07-06 22:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 6, 0, 4, '', '', 0, 13, 'robots=\nauthor='),
(9, 'En million smil', 'en-million-smil', '', '<p>Joomla! teamet har en million gode grunner til å smile av Joomla! 1.5. I sin nåværende tilstand har den blitt lastet ned mer enn en million ganger, og tar den til en enestående popularitet. Den nye koden er en nesten fullstendig omskrivning av den gamle koden. Brukeropplevelse er fortsatt særdeles god, og for utviklerne er API en drøm. En ordentlig struktur for ekte PHP arkitektur søker det beste i det beste</p><p>Er du en tidligere Mambo bruker eller en 1.0 Joomla! bruker, 1.5 er fremtiden for CMSs av mange grunner. Den er mer kraftfull, mer fleksibel, sikrere og mer intuitiv. Våre utviklere og brukergrensesnitt designere har jobbet utallig timer for å gjøre dette til den mest spennende utgivelse av publiseringssystemer.</p><p>Kom igjen! få din gratis kopi av Joomla! i dag og spre budskapet om dette toneangivende prosjekt programmet.</p>', '', 1, 1, 0, 1, '2004-07-07 13:54:06', 66, '', '2007-12-20 00:01:43', 66, 0, '0000-00-00 00:00:00', '2004-07-07 02:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 7, 0, 5, '', '', 0, 24, 'robots=\nauthor='),
(10, 'Hvordan tilpasser jeg Joomla! til andre språk?', 'hvordan-tilpasser-jeg-joomla-til-andre-sprak', '', '<h4>Generelt</h4><p>I Joomla 1.5 kan alle grensesnitt få tilpasset språk. Dette gjelder selve installasjonen, administrasjonssiden (kontrollpanelet<strong>)</strong> og forsiden på nettstedet.</p><p>Installasjons av Joomla! 1.5 kan gjøre på mange språk, også norsk. Standard språk etter installasjonen er engelsk, både administrasjonssiden og forsiden på nettstedet. De forskjellige språk kan installeres separat etter at installasjonen av Joomla! 1.5 er utført. Se under for snarvei til de forskjellige språkfiler.</p>', '<p>De nasjonale oversettelsesteamene for Joomla! 1.5 har kanskje gitt ut en språktilpasset installasjonspakke på sitt språk. Der både administrasjonssiden,  forsiden på nettstedet og eksempel data er oversatt. Disse språktilpassete installasjonene finner du på sidene til oversettelsesteamet på <a href="http://joomlacode.org" title="The Joomla! Code Repository">JoomlaCode</a>.</p><h4> Hvordan installere språkfiler?</h4><ul><li>Last ned språkfilene for administrasjon og nettstedet.</li><li>Installer hver fil separat ved å velge menyen Utvidelser -&gt; Installer / Avinstaller og f. eks Last opp fil & installer</li><li>Velg Språk på menyen Utvidelser og velg Nettsted eller Systemadministrator. Velg språk og sett dette som standard på verktøymenyen.</li></ul><h4>  Hvordan velger jeg språk?</h4><ul><li>Standard språk kan velges uavhengig for Nettsted og Systemadministrator.</li><li>I tillegg kan brukere velge sitt foretrukne språk for både Nettsted og Systemadministrator. Dette endres etter ny logg inn.</li><li>Når du logger inn på administrator siden kan språk også velges for den enkelt sesjon.</li></ul><h4> Hvor kan jeg finne språkfiler og språktilpasset installasjonspakker?</h4><p><em>Joomla! 1.5 er ny og det er ikke sikkert at tilpasset språkfiler og utgivelse er fullstendig.</em></p><ul><li><a href="http://joomlacode.org/gf/project/jtranslation/" target="_blank" title="Accredited Translations"><u><font color="#810081">Joomla! offisielt godkjent oversettelses prosjekt</font></u></a> - Dette er fellesområdet for språkfiler som medlemmer av Joomla! oversettelsesteam har utviklet.</li><li><a href="http://extensions.joomla.org/component/option,com_mtree/task,listcats/cat_id,1837/Itemid,35/" target="_blank" title="Translations"><font color="#810081"><u>Joomla! side for utvidelse - oversettelser</u></font></a></li><li><a href="http://dev.joomla.org/content/view/42/66/" target="_blank" title="Translation Work Group Teams"><u><font color="#810081">Liste over oversettelsesteam og nettsteder til oversettelsesteamene for Joomla! 1.5</font></u></a></li></ul><p>&nbsp;</p>', 1, 3, 0, 32, '2006-10-01 04:06:37', 66, '', '2007-12-18 10:34:55', 65, 0, '0000-00-00 00:00:00', '2006-09-30 01:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 17, 0, 5, '', '', 0, 29, 'robots=\nauthor='),
(11, 'Hvordan oppgradere jeg til Joomla! 1.5?', 'hvordan-oppgradere-jeg-til-joomla-15', '', '<p>&nbsp;</p><p>Joomla! 1.5 har ikke en veiviser som oppgraderer fra tidligere versjoner. Konvertering av ett nettsted til Joomla! 1.5 krever at det opprettes en helt nytt nettsted med Joomla! 1.5 og deretter flytter innholde fra det gamle nettstedet til det nye. Flytting av innholdet er ikke en-til-en prosess, men innebære konverteringer og modifiseringer av innholde fra det gamle nettstedet.</p><p>Det er to måter å utføre overføringen på:</p>', '<div><ul><li>En metode for automatisk flytting er gjort tilgjengelig ved bruk av en flytte komponent som lager en kopi av det gamle nettstedet (Mambo 4.5.x opp til Joomla! 1.0.x) og en smart import installasjon i Joomla! 1.5 installasjonen som utfører nødvendige konverteringer og modifiseringer under installasjonsprosessen.</li><li>Flytting kan utføres manuelt. Dette omfatte eksport av nødvendige tabeller, manuell konverteringer og modifiseringer og så import til det nye nettstedet etter det er installert.</li></ul></div><h2><strong>Automatisk flytting</strong></h2><p>Dette er en prosess i to steg med bruk at to verktøy. Det første er en flytte komponent med navnet <font face="courier new,courier">com_migrator</font>. Denne komponenten er laget av Harald Baer og bygger på hans <strong>eBackup </strong>komponent. Komponenten må installerer på det gamle nettstedet og denne lager den nødvendige kopien for eksport av data fra det gamle nettstedet. Det andre verktøyet er en del av Joomla! 1.5 installasjonsprosessen. Den eksporterte kopien lastes til det nye nettstedet og konverteringer og modifiseringer utføres fortløpende.</p><h3><u>Steg 1 - Bruk av com_migrator for eksport av data fra gamle nettstedet</u></h3><ul><li>Installer komponenten <font face="courier new,courier">com_migrator </font>på det <strong>gamle</strong> nettstedet. Komponenten finner du på <a href="http://joomlacode.org/gf/project/pasamioprojects/frs/" target="_blank"><u><font color="#810081">JoomlaCode developers forge</font></u></a>.</li><li>Velg komponenten på komponent menyen i kontrollpanelet.</li><li>Klikk på <strong>Dump it</strong> ikonet. Tre <em>gzipped </em>eksport skript vil bli laget. Det første er en komplett sikkerhetskopi av det gamle nettstedet. Det andre er alt innhold som skal importeres til den nye nettstedet. Det tredje er en sikkerhetskopi av 3PD komponent tabellene.</li><li>Klikk på nedlastningsikonet for de filen som skal eksporteres og lagre de lokalt.</li><li>Flere sett filer kan lages.</li><li>Filene for eksport er ikke modifisert på noen måte og den originale kodingen er bevart. Dette gjør at verktøyet <font face="courier new,courier">com_migrator</font> anbefales for manuell flytting også. </li></ul><p>&nbsp;</p><h3><u>Steg 2 - Bruk av flyttehjelpemiddelet for import og konvertering under installasjon av Joomla! 1.5:</u></h3><p>NB: Denne funksjonen bruker <em><font face="courier new,courier">iconv </font></em>funksjonen i PHP til å konverter. Er ikke <font face="courier new,courier"><em>iconv </em></font>i bruke vil du få en advarsel.</p><ul><li>I steg 6 - Velg Last migreringsskript i avsnitt Last inn eksempeldata, gjenopprett en sikkerhetskopi eller migrer på konfigurasjonssiden.</li><li>Skriv inn tabellprefiks som er brukt på gammel side. F. eks ''jos_'' eller ''side2_'' som er normale verdier.</li><li>Velg koding fra nedtrekksmenyen. Dette bør være kodingen brukt på det gamle nettstedet. (_ISO innstilling angitt i språkfil, eller som vist i nettleser - info/koding/kilde).</li><li>Klikk på <strong>Bla gjennom</strong> og velge filen som ble eksportert fra det gamle nettstedet og klikk på <strong>Last opp og kjør.</strong></li><li>En melding som bekrefter at opplasting er vellykket eller en liste med feil vises.</li><li>Fyll inn de andre nødvendige opplysningene på konfigurasjonssiden, så som sidenavn og admin detaljer og fortsett med neste steg. (Admin detaljene vil bli ignorert, data fra det gamle nettstedet vil bli brukt. Brukernavn og passord fra det gamle nettstedet må brukes)</li></ul>', 1, 3, 0, 28, '2006-10-01 16:27:52', 66, '', '2007-12-21 09:31:48', 66, 0, '0000-00-00 00:00:00', '2006-09-30 08:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 20, 0, 3, '', '', 0, 23, 'robots=\nauthor='),
(12, 'Hvorfor bruker Joomla! karaktersettet UTF-8?', 'hvorfor-bruker-joomla-karaktersettet-utf-8', '', '<p>Vel..... Hva med å slippe problemer med tilpasninger til umulige karaktersett for alltid?</p><p>Har du noen ganger hatt behov for å vise innholdet på en side eller et nettsted i flere språk, og det hele ender opp i Svorsk?</p><p>Med UTF-8 (en variant av Unicode) kan tegn (bokstavformer) av nær alle språk vises med ett enkelt karaktersett.</p>', '', 1, 3, 0, 31, '2006-10-05 03:11:29', 64, '', '2007-12-16 00:12:10', 64, 0, '0000-00-00 00:00:00', '2006-10-03 12:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 9, 0, 8, '', '', 0, 30, 'robots=\nauthor='),
(13, 'Hva har skjedd med lokale innstillinger?', 'hva-har-skjedd-med-lokale-innstillinger', '', 'Disse er nå definert i språkfilen [<em>land</em>].xml som metadata på språkinnstillinger. Har du problemer med f. eks dato, som ikke vises i ditt språk må du sjekke/redigere det som er skrevet i tag for lokal innstilling. NB! Det er mulig med flere lokale innstillinger, men at tjeneren vanligvis velger den første som blir gjenkjent.', '', 1, 3, 0, 28, '2006-10-06 20:47:35', 66, '', '2007-12-17 13:38:40', 66, 0, '0000-00-00 00:00:00', '2006-10-05 18:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 9, 0, 2, '', '', 0, 13, 'robots=\nauthor='),
(14, 'Hva er FTP-funksjonen til?', 'hva-er-ftp-funksjonen-til', '', '<p>FTP-funksjonen tillater filbehandling (for eksempel installasjon av utvidelser eller oppdatering av hovedkonfigurasjonsfilen) uten å endre alle filer og foldere til ''Skrivbar''. Dette har hittil vært en utfordring på Linux og andre Unixbaserte plattformer, med tanke på filrettigheter. Dette gjør en sideadministrators liv svært mye enklere, og øker også sikkerheten på hjemmesiden betraktelig.</p><p>Du kan sjekke skriverettighetene på relevante mapper ved å klikke på <strong>Hjelp-&gt;Systeminfo</strong> og velg <strong>Mapperettigheter</strong>. Når FTP-funksjonen er aktivisert vil Joomla! fungere selv om alle mappene er markert røde.</p><p>MERK: Det er ikke nødvendig å aktivisere FTP-funksjonen ved kjøring på en Windowsserver.</p>', '', 1, 3, 0, 31, '2006-10-07 01:27:49', 64, '', '2007-12-18 22:48:16', 65, 0, '0000-00-00 00:00:00', '2006-10-06 00:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 12, 0, 6, '', '', 0, 39, 'robots=\nauthor='),
(15, 'Virker Joomla! 1.5 dersom PHP Sikkerhetsmodus er aktivert?', 'virker-joomla15-dersom-php-sikkerhetsmodus-er-aktivert', '', '<p>Svaret er ja. Dette er en stor sikkerhetsforbedring.</p><p>Sikkerhetsmodus begrenser PHP til bare å kunne kjøre filer eller filer i foldere med samme eier som PHP vanligvis bruker (dette er som regel ''apache''). Siden filene normalt er opprettet av et Joomla! program eller via FTP-tilgang, vil kombinasjonen av filbehandling og FTP-laget tillate Joomla! å kjøre i PHP sikkerhetsmodus.</p>', '', 1, 3, 0, 31, '2006-10-07 03:28:35', 64, '', '2007-12-15 18:53:35', 64, 0, '0000-00-00 00:00:00', '2006-10-05 22:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 11, 0, 4, '', '', 0, 7, 'robots=\nauthor='),
(16, 'Bare et vindu! Hvordan oppretter jeg «Les mer ...»?', 'bare-et-vindu-hvordan-oppretter-jeg-les-mer', '', '<p>Dette gjøres nå ved å sette inn en <strong>«Les mer...»</strong> -tagg (knappen er lokalisert under tekstbehandlings-feltet) en stiplet linje blir synlig i tekstfeltet og viser splitt-lokaliseringen for <em>«Les mer ...</em>». Et nytt programtillegg tar seg av resten.</p><p>Det er også verdt å nevne at dette ikke vil ha en negativ effekt på migrert innhold, den nye funksjonen er nemlig fullt ut bakover-kompatibel.</p>', '', 1, 3, 0, 28, '2006-10-06 21:29:28', 65, '', '2007-12-15 19:10:50', 65, 0, '0000-00-00 00:00:00', '2006-10-05 21:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 13, 0, 4, '', '', 0, 36, 'robots=\nauthor='),
(17, 'Min MySQL-database støtter ikke UTF-8. Medfører dette problemer?', 'min-mysql-database-støtter-ikke-UTF-8medfører-dette-problemer', '', '<p>Nei, dette er uproblematisk. Versjoner av MySQL tidligere enn 4.1 har ikke innebygget støtte for UTF-8. Imidlertid har Joomla! 1.5 innebygget funksjonalitet for bakoverkompabilitet og er i stand til å bruke UTF-8 på gamle databaser. Installasjonsprosessen ivaretar slike instillinger, og det er ikke nødvendig med tilpasninger i databasen (karaktersett, collation, eller andre innstillinger).</p><p>&nbsp;</p>', '', 1, 3, 0, 31, '2006-10-07 15:30:37', 64, '', '2007-12-16 00:00:26', 64, 0, '0000-00-00 00:00:00', '2006-10-06 02:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 13, 0, 7, '', '', 0, 8, 'robots=\nauthor='),
(18, 'Joomla! Egenskaper', 'joomla-egenskaper', '', '<h4><font color="#ff6600">Joomla! egenskaper:</font></h4><ul><li>Ren databasedrevet nettsidemotor </li><li>Fullt editerbare og styrbare nyhets-, produkts- og sørvisseksjoner </li><li>Nye seksjoner kan legges til av bidragsytere </li><li>Muligheter for å skreddersy hele layouten, inkludert venstre, senter og høyre menyboks </li><li>Opplasting av bilder via nettleseren til ditt eget bibliotek for bruk hvor som helst på nettstedet </li><li>Dynamisk forum-/avstemning-robot for rask fremstilling av resultater </li><li>Kjører på Linux, FreeBSD, MacOSX server, Solaris og AIX ', '</li></ul><h4>Utvidet administrering:</h4><ul><li>Bytt rekkefølgen på objekter som nyheter, OBSer, artikler, osv. </li><li>Generator for tilfeldig rekkefølge på notiser </li><li>Modul for ekstern publisering av nyheter, artikler, OBSer og linker </li><li>Objekthieraki - lag så mange seksjoner, departement, divisjoner og sider som du måtte ønske </li><li>Bildearkiv - lagre alle dine PNGs, PDFs, DOCs, XLSs, GIFs, og JPEGs online for enkel bruk </li><li>Automatisk stifinner. Plassere et bilde og la Joomla! lage linken </li><li>Nyhetsmaterbehandler. Velg mellom over 360 nyhetsmatere (RSS) rundt om i verden </li><li>Funksjonalitet for å "varsle en venn" og printing av alle nyheter og artikler </li><li>Innebygd teksteditor på høyde med ethvert enkelt program for enkel prosessering av tekst </li><li>Brukertilpasset utseende for nettstedet</li><li>Spørreundersøkelser og avstemninger - legg til forskjellige spørringer på hver side </li><li>Skreddersydde moduler. Last ned og installere skreddersydde moduler for å krydre nettsiden </li><li>Malbehandler. Last ned maler for nettsiden og installere dem på få sekunder </li><li>Forhåndsvisning av utseende. Se hvorden nettsiden ser ut før den publiseres </li><li>Bannerbehandler. Tjen penger på nettstedet</li></ul>', 1, 4, 0, 29, '2006-10-09 13:32:45', 64, '', '2007-12-22 23:30:50', 64, 0, '0000-00-00 00:00:00', '2006-10-07 20:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 18, 0, 4, '', '', 0, 61, 'robots=\nauthor='),
(19, 'Joomla! oversikt', 'joomla-oversikt', '', '<p>Er du ny på nettpubliseringssystemer så vil du finne at Joomla! er en avansert løsning på dine nettbehov. Det er en robust nettdriftsløsning, med uendelig muligheter for skreddersydde utvidelser for dine publiseringsbehov. Ofte er dette løsningen for mindre foretak eller hjemmebrukere som ønsker profesjonell utseende som er enkelt og ta i bruk og benytte. <em>Vi tilfredsstiller behovene</em>.</p><p>Så hva er haken ved dette? Hvor mye koster systemet?</p><p>Det er gode nyheter ... og enda flere gode nyheter! Joomla! 1.5 er gratis, den er frigitt som åpen kildekode - GNU/General Public License v 2.0 . Har du investert i ett kommersielt alternativ ville det ikke vært igjen noe annet enn møll i lommeboka di, og skulle du lagt til ny funksjonalitet ville du sannsynligvis måtte pantsette huset hver gang du ønsket noe nytt!</p><p>Joomla! endrer alt dette...<br />Joomla! er forskjellig fra de normale modellene for publiseringsverktøy. Det er ikke vanskelig. Joomla! er utviklet for enhver, og  hvem som helst kan utvikle det videre. Det er beregnet til å virke (først og fremst) sammen med andre åpne kildekoder, så som PHP, MySQL, og Apache.</p><p>Er det lett og installere og administrere, og er den pålitelig?</p><p>Når systemet er oppe og kjøre trenger verken brukere eller administrator av systemet å kunne HTML for å betjen Joomla! </p><p>For å få det perfekte nettsted med den funksjonalitet som du ønsker kan det ta litt ekstra tid og innsats. Med den hjelp fra Joomla! fellesskapet som er tilgjengelig og når det nesten daglig blir publisert nye utvidelser fra de mange aktive tredje parts utviklerne til 1.5, er det sannsynlig noe som passer for deg. Eller du kan utvikler din egen utvidelse og gjøre denne tilgjengelig for fellesskapet.</p>', '', 1, 4, 0, 29, '2006-10-09 15:49:20', 66, '', '2007-12-19 20:57:14', 66, 0, '0000-00-00 00:00:00', '2006-10-07 18:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 17, 0, 2, '', '', 0, 181, 'robots=\nauthor='),
(20, 'Brukerstøtte og dokumentasjon', 'brukerstøtte-og-dokumentasjon ', '', '<h1>Brukerstøtte</h1><p>Brukerstøtte for Joomla! CMS finnes på flere plasser. Den beste plassen og starte er på den offisielle <a href="http://help.joomla.org/" target="_blank"><font color="#0000ff">h</font></a><a href="http://help.joomla.org/" target="_blank"><font color="#0000ff">jelpe siden. </font></a>Her finner du hjelp og informasjon som regelmessig blir oppdatert etter hvert som Joomla! utvikles. Det kommer stadig mer!</p><p>Og så må ikke hjelpesystemet som er i CMS glemmes. På toppmenyen i administrasjonspanelet er det en hjelpeknapp som gir deg forklaringer på det meste.</p><p>En annen fremragende plass er på <a href="http://forum.joomla.org/" target="_blank"><font color="#810081">Forum<u>.</u></font></a> På Joomla! Forum finner du hjelp og kan få hjelp fra forum medlemmer eller fra Joomla! kjerne og arbeidsgruppemedlemmer. Forumet inneholder mengder med informasjon, FAQ/OSS, om alt som du ønsker av support.</p><p>To andre ressursenhet for support er <a href="http://dev.joomla.org/" target="_blank"><font color="#0000ff">Joomla! Developer Network</font></a> (JDN) og <a href="http://extensions.joomla.org/" target="_blank"><font color="#810081">Joomla! Extensions Directory</font></a> (JED). JDN gir f. eks teknisk informasjon for erfarne utviklere likedan for de som er nye på Joomla! og utviklingsarbeid generelt. JED er ikke en hjelpeside i ordes forstand, men har mange av utvidelsene som du trenger for å utvikle nettstedet ditt.</p><p>Joomla! kjernegruppe skriver jevnlig i bloggen om programmeringsteknikker brukt i Joomla! sikkerhetsbegivenheter og mye annet. Du kan også bli varslet med e-post når en ny blogg er skrevet.</p><h1>Dokumentasjon</h1><p>Joomla! dokumentasjon finnes selvsagt på <a href="http://help.joomla.org/" target="_blank"><font color="#0000ff">hjelpe siden.</font></a> Du finner hjelp på slik som installasjonsveiledning, bruker og administrasjonshåndbok, ofte spurte spørsmål og mye mer. Teamet på brukerdokumentasjon bestyrer dokumentasjonen vedrørende den praktiske bruk av Joomla. Teamet på utviklingsdokumentasjon er kraften bak beskrivelsen av hvordan Joomla! virker fra grunnen av og hvordan du selv kan lage utvidelser og egne nettstedsmaler og mye mer.</p><p>I tillegg til dokumentasjonen skrevet av Joomla! dokumentasjonsgrupper er det også skrevet bøker om Joomla! En liste på disse bøkene finnes på <a href="http://help.joomla.org/content/section/44/254/" target="_blank"><font color="#0000ff">Joomla! Bookshelf</font></a></p><p>&nbsp;</p><h1><a class="urlextern" href="http://forum.joomla.org/index.php/board,391.0.html" target="_blank" title="http://forum.joomla.org/index.php/board,59.0.html" onclick="return svchk()"></a>Ønsker du og hjelpe?</h1><p>Ønsker du og hjelpe til med dokumentasjon for Joomla! kan du skrive ett innlegg på <a href="http://forum.joomla.org/index.php/board,62.0.html" title="The Joomla! User Documentation Forums"><u><font color="#0000ff">User Documentation Forum</font></u></a> eller <a href="http://forum.joomla.org/index.php/board,60.0.html" title="The Joomla! Developer Documentation Forum"><u><font color="#0000ff">Developer Documentation Forum</font></u></a> og legge inn dine detaljer.</p>', '', 1, 4, 0, 25, '2006-10-09 20:33:57', 66, '', '2007-12-19 13:45:52', 66, 0, '0000-00-00 00:00:00', '2006-10-07 22:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 19, 0, 1, '', '', 0, 12, 'robots=\nauthor='),
(21, 'Joomla! Fakta', 'joomla-fakta', '', '<p>Here are some interesting facts about Joomla!</p><p>Her er noen interessante fakta om Joomla!</p><ul><li><span>Over 140 000 aktive registrerte brukere på </span><span><a href="http://forums.joomla.org">Official Joomla! community forum</a> og enda flere på de mange nasjonale forumsidene.</span> </li><li><span>over 1 000 000 postinger i over over 200 000 emnegrupper.</span></li><li>over 1 200 postinger pr dag.</li><li>vokser med rundt 150 nye deltagere for hver dag!</li><li><span>1168 projekter på JoomlaCode (<a href="http://joomlacode.org/">joomlacode.org</a>). Alle i åpen kildekode for utvidelser fra tredjeparts utviklere.</span></li><li><span>Nesten 1 900 000 nedlastinger av Joomla! siden overgangen til JoomlaCode i mars 2007.</span></li><li><span>Over 2 200 programutvidelser for Joomla! er registrert på <a href="http://extensions.joomla.org" title="http://extensions.joomla.org">Joomla! Extension Directory</a> </span></li><li><span>Joomla.org overstiger 2 TB trafikk på nettet, i måneden.</span></li><li><span>Alexa rapporten [november 2007]: Joomla.org er på 690. plass over de mest besøkte nettstedene i verden.</span></li></ul>', '', 1, 4, 0, 30, '2006-10-10 00:46:37', 64, '', '2007-12-22 23:38:31', 64, 0, '0000-00-00 00:00:00', '2006-10-07 22:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 17, 0, 1, '', '', 0, 50, 'robots=\nauthor='),
(22, 'Hva er nytt i Joomla! 1.5?', 'hva-er-nytt-i-joomla-15', '', '<p>Som ved tidligere utgivelser, gir Joomla! en samlet og enkel struktur for å vise nettsider av alle typer. For å følge den tekniske utviklingen av Internett, krevdes det en vesentlig omorganisering av Joomla!-kjernens funksjonalitet og vi brukte denne muligheten til å forenkle mange av utfordringene som er i dagens brukergrensesnitt. Joomla! har mange nye trekk.</p>', '<p>&nbsp;</p><p style="margin-bottom: 0in">&nbsp;</p><p> Målet med utgivelse av Joomla! 1.5 er:</p><ul><li><p>Betraktelig forbedret anvendelighet, påvirkelighet og målområdet langt utover den originale Mambo forankringen.</p></li><li><p>Utvide tilgjengelighet for å støtte internasjonalisering, dobbeltbyte-tegn og høyre-til-venste støtte for språkene arabisk, farsi og hebraisk blant annet.</p></li><li><p>Utvide integrasjonen med eksterne applikasjoner gjennom nettjenere og ekstern verifikasjon slik som Lightweight Directory Access Protocol (LDAP).</p></li><li><p>Forsterket yteevne, nettstedsmaler og presentasjonsmuligheter for å støtte tilgjengelighetsstandarder og levere innhold til hvilket som helst bestemmelsessted.</p></li><li><p>Oppnå mer utholdelig og fleksibel struktur for utviklere av komponenter og utvidelser.</p></li><li><p>Være bakoverkompatibel med tidligere versjoner av komponenter, maler, moduler og andre utvidelser.</p></li></ul>', 1, 4, 0, 29, '2006-10-12 06:13:58', 66, '', '2007-12-23 00:05:06', 64, 0, '0000-00-00 00:00:00', '2006-10-11 03:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 13, 0, 1, '', '', 0, 123, 'robots=\nauthor='),
(23, 'Operativsystemer og åpen standard', 'operativsystemer-og-åpen-standard', '', '<p class="MsoNormal">&nbsp;</p><p>Joomla! kjører på alle operativsystemer inkludert Windows, de flest Linux versjoner, flere Unix versjoner og Apple OS/X. Joomla! er avhengig av PHP og databasen MySQL for å levere dynamisk innhold.</p><p>Minimums kravene er:</p><ul><li>Apache 1.x, 2.x og høyere</li><li>PHP 4.3 og høyere</li><li>MySQL 3.23 og høyere</li></ul><p>Den vil også kjøre på alternative tjener så som Windows IIS - så lenge PHP og MySQL støttes. Men dette krever tilleggskonfigurasjon for at installasjon av Joomla! standard skal lykkes og kunne kjøres.</p>', '', 1, 4, 0, 25, '2006-10-11 08:22:14', 66, '', '2007-12-19 12:04:58', 66, 0, '0000-00-00 00:00:00', '2006-10-10 12:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 9, 0, 3, '', '', 0, 18, 'robots=\nauthor='),
(24, 'Innholdsutforming', 'innholdsutforming', '', '<p>Joomla! tilbyr stor fleksibilitet på måten innholde utformes på. Enten du bruker Joomla! som blogg, nyheter eller som ett nettsted for ett firma, så vil du finne flere utforminger for å vise informasjon. Du kan også endre utformingen dynamisk avhenge av dine innstillinger. Joomla! kaller hvordan siden vises som <strong>utforming</strong>. Bruk rettledning under for å forstå hvilke utforminger som er tilgjengelig og hvordan du kan bruke de.</p><h2>Innhold</h2><p>Joomla! gjør det særdeles lett å legge til og vise innholdet. Alt innhold plasseres der hvor taggen for hovedfeltet er lokalisert i din nettstedsmal.. Det er tre hovedtyper av utforming i Joomla!, og alle kan tilpasses via parametre. Parametre og visningen settes i menyen du velger for å vise innholdet. Ved å lage et menypunkt velges utformingen og hvordan innholdet skal vises.</p><h3>Blogg utforming</h3><p>Blogg utformingen viser en liste over alle artikler for den valgte blogg typen (seksjon eller kategori) i hovedfeltet  i din nettstedsmal. Den viser ssom tandard tittel og introduksjon for hver artikkel i den valgte kategori og/eller seksjon. Du kan tilpasse utformingen via bruk av innstillinger og parametre, (se artikkel parametre). Dette utføres fra menyen og ikke fra seksjonsbehandleren!</p><h3>Arkiv blogg utforming</h3><p>En blogg arkiv utforming gir en liknende liste over artikler som en normal blogg utforming. Men vil legge til to nedtrekkslister på toppen, en liste for måned og en liste for år pluss et søkefelt for å søke i alle arkiverte artikler for en spesifikt måned og år.</p><h3>Listeutforming</h3><p>Listeutforming vil ganske enkelt vise alle titlene i en seksjon eller kategori i tabellform. Ingen introduksjonstekst vises, bare tittelen. Du kan velge hvor mange titler som skal vises i denne tabellens parametre. Listeutforming har også en filterseksjon så brukerne kan ordne, filtrere og velge hvor mange titler som skal vises på en side. (opp til 50)</p><h2>Wrapper</h2><p>En Wrapper gjør at du kan ha en ekstern nettside i din Joomla! side. Innholde i Wrapper vises der hvor taggen for hovedfeltet er lokalisert i din nettstedsmal og muliggjør visning av deres innhold som en del av ditt nettsted. En wrapper vil plassere en integrert ramme i innholdseksjonen på ditt nettsted og omgir denne med nettstedets standard menyer så det vises på samme måte som en artikkel ville blitt vist.</p><h2>Innholdsparametre</h2><p>Parametrene for hver utforming finnes på høyre side av tekstboksen i konfigurasjonen av menypunktene. Tilgjengelige parametre avhenger i overveiende grad av hvilke utforming som skal konfigureres. </p>', '', 1, 4, 0, 29, '2006-10-13 12:33:10', 66, '', '2007-12-18 22:58:09', 66, 0, '0000-00-00 00:00:00', '2006-10-11 20:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 18, 0, 5, '', '', 0, 100, 'robots=\nauthor='),
(25, 'Hva kreves for å installere og kjøre Joomla! 1.5?', 'hva-kreves-for-å-installere-og-kjøre-joomla-15', '', '<p>Joomla! kjører på PHP pre-prosessor. PHP er utgitt i mange utgaver og for mange operativsystem. I tillegg til PHP trenger du en webserver. Joomla! er optimalisert for å kjøre på en Apache webserver, men kan kjøre for andre typer webservere som for eksempel Microsoft IIS. Det kreves bare litt tilleggskonfigurering av PHP og MySQL. Joomla! er også avhengig av en database, og denne kan for tiden kun kjøres på MySQL.</p><p>Mange vet av egen erfaring at det ikke er spesielt lett å installere en Apache Webserver, og det blir enda vanskeligere når man skal legge til MySQL, PHP og Perl. XAMPP, WAMP og MAMP er distribusjoner som er enkle å istallere, og som inneholder Apache, MySQL, PHP samt Perl for Windows, Mac OSX og Linux operativsystem. Slike pakker er for lokale installasjoner (localhost) og kan bare installeres på egne servere.<br />Minimumskravene til en installasjon av Joomla! 1.5:</p><ul><li>Apache 1.x or 2.x</li><li>PHP 4.3 or up</li><li>MySQL 3.23 or up</li></ul><p>Kontroller siste utgave av minimumskrav på "<a href="http://help.joomla.org" title="Joomla! Help Site">Joomla! Help Site</a>" og "<a href="http://forum.joomla.org" title="The Joomla! Community Forums">forum</a>".</p>', '', 1, 3, 0, 31, '2006-10-11 02:42:31', 64, '', '2007-12-15 19:15:02', 64, 0, '0000-00-00 00:00:00', '2006-10-10 08:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 7, 0, 5, '', '', 0, 35, 'robots=\nauthor=');
INSERT INTO `jos_content` (`id`, `title`, `alias`, `title_alias`, `introtext`, `fulltext`, `state`, `sectionid`, `mask`, `catid`, `created`, `created_by`, `created_by_alias`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `publish_up`, `publish_down`, `images`, `urls`, `attribs`, `version`, `parentid`, `ordering`, `metakey`, `metadesc`, `access`, `hits`, `metadata`) VALUES (26, 'Utvidelser', 'utvidelser', '', '<p>"Ut av boksen" gjør Joomla! alt som skal til av håndtering og organisering av innhold, slik at websiden din virkelig "rocker". Men for mange brukere ligger styrken i Joomla! innebygget i rammeverket til applikasjonen, som gjør det mulig for programutviklere rundt hele kloden å skape kraftige tilleggsmoduler kalt <strong>Utvidelser</strong>. En utvidelse brukes til å legge til funksjonalitet som ikke ligger innebygget i basiskoden til Joomla!. Her er et lite utvalg av de mange hundre tilgjengelige utvidelsene:</p><ul><li>Dynamiske skjemaer</li><li>Forretningsmessige eller organisasjonsmessige kataloger</li><li>Dokumentstyring</li><li>Foto- og multimediagallerier</li><li>Netthandel</li><li>Applikasjoner for diskusjonsforum og pratekanaler </li><li>Kalendere</li><li>E-post nyhetsbrev</li><li>Datainnsamling og rapportering</li><li>Reklamebanner</li><li>Betalte abonnementsløsninger</li><li>og mye, mye mer</li></ul><p>Du finner mer informasjon på <a href="http://extensions.joomla.org" target="_blank" title="Joomla! Extensions Directory">Joomla! Extensions Directory</a>. Forbered deg på et forbausende stort antall spennende arbeider utført av fra våre aktive programutviklere.</p><p>En guide til Utvidelser finner du på:<br /><a href="http://extensions.joomla.org/content/view/15/63/%20" target="_blank" title="Guide to the Joomla! Extension site">http://extensions.joomla.org/content/view/15/63/ </a></p><h3>Typer av utvidelser</h3><p>Joomla! inneholder 5 typer utvidelser:</p><ul><li>Komponenter</li><li>Moduler</li><li>Maler</li><li>Plugins</li><li>Språkpakker</li></ul><p>You can read more about the specifics of these using the links in the Article Index - a Table of Contents (yet another useful feature of Joomla!) - at the top right or by clicking on the <strong>Next </strong>link below.</p><hr title="Components" class="system-pagebreak" /><h3><img src="images/stories/ext_com.png" border="0" alt="Component - Joomla! Extension Directory" title="Component - Joomla! Extension Directory" width="17" height="17" /> Komponenter</h3><p>A Component is the largest and most complex of the Extension types. Components are like mini-applications that render the main body of the page. An analogy that might make the relationship easier to understand would be that Joomla! is a book and all the Components are chapters in the book. The core Article Component (<font face="courier new,courier">com_content</font>), for example, is the mini-application that handles all core Article rendering just as the core registration Component (<font face="courier new,courier">com_user</font>) is the mini-application that handles User registration.</p><p>Many of Joomla!''s core features are provided by the use of default Components such as:</p><ul><li>Contacts</li><li>Front Page</li><li>News Feeds</li><li>Banners</li><li>Mass Mail</li><li>Polls</li></ul><p>A Component will manage data, set displays, provide functions, and in general can perform any operation that does not fall under the general functions of the core code.</p><p>Components work hand in hand with Modules and Plugins to provide a rich variety of content display and functionality aside from the standard Article and content display. They make it possible to completely transform Joomla! and greatly expand its capabilities.</p><hr title="Modules" class="system-pagebreak" /><h3><img src="images/stories/ext_mod.png" border="0" alt="Module - Joomla! Extension Directory" title="Module - Joomla! Extension Directory" width="17" height="17" /> Moduler</h3><p>A more lightweight and flexible Extension used for page rendering is a Module. Modules are used for small bits of the page that are generally less complex and able to be seen across different Components. To continue in our book analogy, a Module can be looked at as a footnote or header block, or perhaps an image/caption block that can be rendered on a particular page. Obviously you can have a footnote on any page but not all pages will have them. Footnotes also might appear regardless of which chapter you are reading. Simlarly Modules can be rendered regardless of which Component you have loaded.</p><p>Modules are like little mini-applets that can be placed anywhere on your site. They work in conjunction with Components in some cases and in others are complete stand alone snippets of code used to display some data from the database such as Articles (Newsflash) Modules are usually used to output data but they can also be interactive form items to input data for example the Login Module or Polls.</p><p>Modules can be assigned to Module positions which are defined in your Template and in the back-end using the Module Manager and editing the Module Position settings. For example, "left" and "right" are common for a 3 column layout. </p><h4>Displaying Modules</h4><p>Each Module is assigned to a Module position on your site. If you wish it to display in two different locations you must copy the Module and assign the copy to display at the new location. You can also set which Menu Items (and thus pages) a Module will display on, you can select all Menu Items or you can pick and choose by holding down the control key and selecting multiple locations one by one in the Modules [Edit] screen</p><p>Note: Your Main Menu is a Module! When you create a new Menu in the Menu Manager you are actually copying the Main Menu Module (<font face="courier new,courier">mod_mainmenu</font>) code and giving it the name of your new Menu. When you copy a Module you do not copy all of its parameters, you simply allow Joomla! to use the same code with two separate settings.</p><h4>Newsflash Example</h4><p>Newsflash is a Module which will display Articles from your site in an assignable Module position. It can be used and configured to display one Category, all Categories, or to randomly choose Articles to highlight to Users. It will display as much of an Article as you set, and will show a <em>Read more...</em> link to take the User to the full Article.</p><p>The Newsflash Component is particularly useful for things like Site News or to show the latest Article added to your Web site.</p><hr title="Plugins" class="system-pagebreak" /><h3><img src="images/stories/ext_plugin.png" border="0" alt="Plugin - Joomla! Extension Directory" title="Plugin - Joomla! Extension Directory" width="17" height="17" /> Plugins</h3><p>One of the more advanced Extensions for Joomla! is the Plugin. In previous versions of Joomla! Plugins were known as Mambots. Aside from changing their name their functionality has been expanded. A Plugin is a section of code that runs when a pre-defined event happens within Joomla!. Editors are Plugins, for example, that execute when the Joomla! event <font face="courier new,courier">onGetEditorArea</font> occurs. Using a Plugin allows a developer to change the way their code behaves depending upon which Plugins are installed to react to an event.</p><hr title="Languages" class="system-pagebreak" /><h3><img src="images/stories/ext_lang.png" border="0" alt="Language - Joomla! Extensions Directory" title="Language - Joomla! Extensions Directory" width="17" height="17" /> Språkpakker</h3><p>New to Joomla! 1.5 and perhaps the most basic and critical Extension is a Language. Joomla! is released with multiple Installation Languages but the base Site and Administrator are packaged in just the one Language <strong>en-GB</strong> - being English with GB spelling for example. To include all the translations currently available would bloat the core package and make it unmanageable for uploading purposes. The Language files enable all the User interfaces both Front-end and Back-end to be presented in the local preferred language. Note these packs do not have any impact on the actual content such as Articles. </p><p>More information on languages is available from the Joomla! help site: Language Packs and Localised Releases<br /><a href="http://help.joomla.org/content/view/1651/243/" target="_blank" title="Joomla! help site: Language Packs and Localised Releases">http://help.joomla.org/content/view/1651/243/</a></p>', '', 1, 4, 0, 29, '2006-10-11 12:00:00', 64, '', '2007-12-15 00:43:38', 64, 0, '0000-00-00 00:00:00', '2006-10-11 04:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 27, 0, 3, 'About Joomla!, General, Extensions', '', 0, 139, 'robots=\nauthor='),
(27, 'Joomla! Fellesskapet', 'joomla-fellesskapet', '', '<p><strong>Har du et spørsmål?</strong> <br />Med mer enn 140.000 medlemmer er forum på <a href="http://forum.joomla.org/" target="_blank"><font color="#0000ff">forum.joomla.org</font></a> en stor ressurs for både nye og erfarne brukere. Kom igjen! Spør ditt vanskeligste spørsmål, fellesskapet venter på ditt Joomla! nettsted!</p><p><strong>Ønsker du og vise frem din nye Joomla! nettside?</strong> <br />Kom igjen! Vi har en egen seksjon dedikert for fremvisning på vårt forum.</p><p><strong>Ønsker du og delta?<br /></strong>Tror du det er morsom å jobbe med Joomla! bare vent til du er i gang. Vi er lidenskapelig interessert i å hjelpe Joomla!-brukere til å bli en del av vårt aktive fellesskap, og det er mange måter du kan hjelpe til å videreutvikle Joomla!:</p><ul><li>Send inn nyheter om Joomla! Vi administrerer alle Joomla!-relaterte nyheter på vår <a href="http://news.joomla.org" title="Joomla! News Portal"><font color="#0000ff">nyhetsportal</font></a>. Har du nyheter som du ønsker å dele med andre, send inn en historie, artikkel eller kunngjøring eller les dem <a href="http://www.joomla.org/component/option,com_submissions/Itemid,75" title="Submit News"><font color="#0000ff">her</font></a>.</li><li>Rapportere feil eller anmode om endinger på vår <a href="http://joomlacode.org/gf/project/joomla/tracker/" title="Joomla! developement trackers"><font color="#0000ff">sporingslogg</font></a>. Les om hvordan vi ønsker at <a href="http://dev.joomla.org/content/view/1450/89/"><font color="#0000ff">feil rapporteres</font></a>,</li><li>Send inn oppdateringer ved endringer. Les om hvordan <a href="http://dev.joomla.org/content/view/14/55/"><font color="#0000ff">sende inn oppdateringer</font></a>. </li><li>Del dine ideer på hvordan forbedre Joomla! på <a href="http://forum.joomla.org/index.php/board,126.0.html" title="Joomla! development forums"><font color="#0000ff">utviklingsforum</font></a>.  Vi er alltid åpen for forslag, skjønt vi er skeptisk til store endringer uten forslag til hvordan dette bør gjøres.</li><li>Bli med i noen av <a href="http://dev.joomla.org/content/view/13/53/" title="Joomla! working groups"><font color="#0000ff">Joomla! arbeidsgrupper</font></a> og ta med din personlige erfaring til fellesskapet. Mer om de forskjellige arbeidsgruppene finner du på <a href="http://dev.joomla.org/content/view/13/53/" title="Joomla! working groups"><font color="#0000ff">Arbeidsgruppefordelingen</font></a>.</li></ul><p>Dette skulle være det du trenger å vite for å bli med i Joomla!-fellesskapet.  </p>', '', 1, 4, 0, 30, '2006-10-13 04:50:48', 66, '', '2007-12-22 23:49:40', 64, 0, '0000-00-00 00:00:00', '2006-10-11 14:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 17, 0, 2, '', '', 0, 70, 'robots=\nauthor='),
(28, 'Hvordan installeres Joomla! 1.5?', 'hvordan-installeres-joomla-15', '', '<p>Installering av Joomla! 1.5 er svært enkelt, forutsatt at du har satt opp en nettside, og denne kan nås med webleseren din. </p><p>Last ned Joomla! 1.5, pakk ut filene og last disse opp til folderen som skal tjene som nettside for installasjonen. Start webleseren og skriv inn adressen til nettsiden, trykk enter og installasjonen vil da starte.</p><p>Alle detaljer rundt installasjonsprosessen finner du i "<a href="http://help.joomla.org/content/category/48/268/302" title="Joomla! 1.5 Installation Manual">Installation Manual</a>" på "<a href="http://help.joomla.org" title="Joomla! Help Site">Joomla! Help Site</a>". Her kan du også laste ned komplette veiledninger i PDF-format. </p>', '', 1, 3, 0, 31, '2006-10-11 07:10:59', 64, '', '2007-12-15 18:23:23', 64, 0, '0000-00-00 00:00:00', '2006-10-10 12:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 8, 0, 3, '', '', 0, 5, 'robots=\nauthor='),
(29, 'Hva er hensikten med å velge koding ved installasjon?', 'hva-er-hensikten-med-å-velge-koding-ved-installasjon', '', '<p>Valget koding bestemmes hvordan sortering i databasen blir. I språk som har spesielle tegne, som Norge (Æ, Ø og Å) avgjøres kodingen sorteringen. Vet du ikke hvilken kode du skal velge, velg "utf8_general_ci". De andre kodingene er unntakstilfeller med hensyn til den generelle kodingen. Er ikke norsk listet som en kode, velg "utf8_general_ci" </p>', '', 1, 3, 0, 32, '2006-10-11 09:11:38', 66, '', '2007-12-17 12:37:07', 66, 0, '0000-00-00 00:00:00', '2006-10-10 14:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 7, 0, 4, '', '', 0, 11, 'robots=\nauthor='),
(30, 'Hvilke språk støttes av Joomla!', 'hvilke-språk-støttes-av-joomla', '', '<p>I installasjonspakken er det lagt inn støtte for en stor samling av språkpakker. For tiden støttes følgende språk: arabisk, bulgarsk, tjekkisk, dansk, tysk, greskt, spansk, finsk, fransk, hebraisk, devanagari (India), kroatisk, ungarsk, italiensk, malaysk, norsk (bokmål), nederlansk, portugisisk (Brasil), portugisisk (Portugal), romask, russisk, serbisk, svensk, thai, og flere kommer til hele tiden.<br />Som standard installeres engelsk på administrasjonsdelen og nettstedet. Du kan laste ned tilleggsspråk fra <a href="http://extensions.joomla.org" title="Joomla! Extensions Directory"><font color="#0000ff">Joomla!Extensions Directory</font></a>. I tillegg tilbys også komplette lokale (nasjonale) varienter av hele installasjonspakken. Se etter linker til lokale språk og installasjonspakker på <a href="http://help.joomla.org/content/view/1651/62/" target="blank_" title="Joomla! help site for links"><font color="#810081">Joomla! Help Site for links</font></a>.</p>', '', 1, 3, 0, 32, '2006-10-11 03:12:18', 64, '', '2007-12-16 00:53:43', 64, 0, '0000-00-00 00:00:00', '2006-10-10 08:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 6, 0, 2, '', '', 0, 10, 'robots=\nauthor='),
(31, 'Er det nyttig og installere eksempel data?', 'er_det_nyttig_og_installere_eksempel_data', '', 'Tja, du leser det akkurat nå! Det kommer an på hva du vil oppnå. Er du ny på Joomla! og ikke har en anelse på hvordan alt henger sammen, er det lurt å installere eksempel data.', '', 1, 3, 0, 27, '2006-10-11 13:12:55', 66, '', '2007-12-17 14:32:22', 66, 0, '0000-00-00 00:00:00', '2006-10-10 14:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 8, 0, 3, '', '', 0, 4, 'robots=\nauthor='),
(32, 'Hvor er det statiske innholdet?', 'where-is-the-static-content', '', '<p>I Joomla! versjoner før 1.5 var det forskjellige prosesser for å lage artikkel med statiske innhold og normalt innhold. Nå er dette samme prosess, mens begge typer artikler finnes fortsatt. De har endret navn til artikler for artikkelinnhold og usorterte artikler for statiske innhold.</p><p>Skal du lage en statiske artikkel, lag en ny artikkel på samme måte som normal artikkel, men isteden for å velge en spesifikk seksjon og kategori, velg usortert både på seksjon og kategori på nedtrekksmenyene.</p>', '', 1, 3, 0, 28, '2006-10-11 05:13:33', 66, '', '2007-12-17 14:20:50', 66, 0, '0000-00-00 00:00:00', '2006-10-10 10:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 9, 0, 6, '', '', 0, 6, 'robots=\nauthor='),
(33, 'Hva menes med en ukategorisert artikkel?', 'hva-menes-med-en-ukategorisert-artikkel', '', '<p>De fleste artikler knytte til en seksjon eller kategori. I noen tilfeller vet man imidlertid ikke hvor man skal plassere artikkelen og markerer i stedet innholdet som <em>ukatagorisert</em> seksjon/kategori. Artikler som markeres som <em>ukategorisert</em> blir behandlet som statisk innhold.</p>', '', 1, 3, 0, 31, '2006-10-11 17:14:11', 64, '', '2007-12-14 23:42:16', 64, 0, '0000-00-00 00:00:00', '2006-10-10 15:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 10, 0, 2, '', '', 0, 11, 'robots=\nauthor='),
(34, 'Blir bilder og spesielle tegn gjengitt i PDF?', 'blir-bilder-og-spesielle-tegn-gjengitt-i-pdf', '', '<p>Ja! I versjoner før Joomla 1.5 ble bare teksten i artikkelen gjengitt i PDF. Med den nye PDF gjengivelsen blir hele artikkelen inkludert bilder presenterer i PDF. Også UTF-8 tekst og bokstaver fra alle språk blir presenterer i PDF. De bestemte skrifttypene må være installert, dette skjer automatisk når en språkpakke blir installert.</p>', '', 1, 3, 0, 32, '2006-10-11 23:14:57', 66, '', '2007-12-17 12:36:33', 66, 0, '0000-00-00 00:00:00', '2006-10-10 20:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 10, 0, 3, '', '', 0, 13, 'robots=\nauthor='),
(35, 'Er det mulig å endre typen på et menyelement?', 'er-det-mulig-å-endre-typen-på-et-menyelement', '', '<p>Svaret er ja. Du kan endre typen på et menyelement til hva du måtte ønske, selv etter at menyen har blitt laget.</p><p>If, for instance, you want to change the Blog Section of a Menu link, go to the Control Panel-&gt;Menus Menu-&gt;[menuname]-&gt;Menu Item Manager and edit the Menu Item. Select the <strong>Change Type</strong> button and choose the new style of Menu Item Type from the available list. Thereafter, alter the Details and Parameters to reconfigure the display for the new selection as you require it.</p>', '', 1, 3, 0, 31, '2006-10-11 09:15:36', 64, '', '2007-12-15 17:25:08', 64, 0, '0000-00-00 00:00:00', '2006-10-10 14:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 11, 0, 1, '', '', 0, 17, 'robots=\nauthor='),
(36, 'Hvor ble det av installeringene?', 'hvor-ble-det-av-installeringene', '', 'Den forbedrete installasjonen finnes på menyen Utvidelser. I versjoner før Joomla! 1.5 måtte du velge hvilken utvidelsestype som skulle installeres. I Joomla! 1.5 velger du bare filen som skal installeres og Joomla! gjør alt for deg!', '', 1, 3, 0, 28, '2006-10-11 05:16:20', 66, '', '2007-12-17 12:35:58', 66, 0, '0000-00-00 00:00:00', '2006-10-10 10:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 9, 0, 1, '', '', 0, 9, 'robots=\nauthor='),
(37, 'Hvor ble det av Mambots?', 'hvor-ble-det-av-mambots', '', '<p>Mambots har endret navn til programtillegg (Plugins).</p><p>Mambots ble introdusert i Mambo og tilbøy muligheten for programtillegg for å manipulerer innholdet. I Joomla 1.5 har programtilleggene en bredere mulighet enn i Mambots. Programtilleggene er i stand til å utvide funksjonaliteten i Joomla.</p>', '', 1, 3, 0, 28, '2006-10-11 13:17:00', 66, '', '2007-12-17 15:37:40', 66, 0, '0000-00-00 00:00:00', '2006-10-10 15:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 9, 0, 5, '', '', 0, 9, 'robots=\nauthor='),
(38, 'Jeg har installert Joomla! med norsk oppsett, men administrasjonsdelen er forsatt engelsk.', 'jeg-har-installert-joomla-med-norsk-oppsett-men-administrasjonsdelen-er-forsatt-engelsk', '', '<p>Flere forskjellige språk er nå tilgjengelige for administrasjonsdelen, men blir ikke installert sammen med hovedinstallasjonen. Dersom du ønsker å installere et annet språk i administrasjonsdelen kan du laste ned den aktuelle språkpakken og installere denne under menyen <strong>Utvidelser -&gt; Installer /Avinstaller</strong>. Deretter velges menyen <strong>Utvidelser -&gt; Språk -&gt; Systemadministrator.</strong> Her velges standardspråk, og språket skiftes da umiddelbart.</p><p>Brukere med tilgang til administrasjonsdelen kan velge eget oppsett for språk under personlige detaljer. Dette er også mulig for språket på nettstedet. </p><p>For å laste ned tilgjengelige språkpakker for administrasjonsdelen, gå til <a href="http://help.joomla.org/content/view/1651/62/" target="blank_" title="Help Site">hjelpesiden</a>.</p>', '', 1, 3, 0, 32, '2006-10-11 21:18:14', 64, '', '2007-12-16 00:54:25', 64, 0, '0000-00-00 00:00:00', '2006-10-10 23:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 14, 0, 1, '', '', 0, 27, 'robots=\nauthor='),
(39, 'Hvordan fjernes en artikkel?', 'hvordan-fjernes-en-artikkel', '', '<p>For å slette en artikkel fullstendig, velg den artikkelen som skal slettes og klikk på Papirkurv på verktøymenyen. Neste, velg Papirkurv på menyen Innhold og velg artikkelen, klikk slett på verktøymenyen. Etter sletting av artikkelen er det ikke mulig å gjenopprette artikkelen, den er blitt slette fra databasen.</p>', '', 1, 3, 0, 27, '2006-10-11 13:19:01', 66, '', '2007-12-17 15:24:06', 66, 0, '0000-00-00 00:00:00', '2006-10-10 15:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 9, 0, 2, '', '', 0, 8, 'robots=\nauthor='),
(40, 'Hva er forskjellen mellom arkiver og slette en artikkel?', 'Hva-er-forskjellen-mellom-arkiver-og-slette-en-artikkel', '', '<p>Når du <em>arkiverer</em> en artikkel, endres status på artikkelen og den fjernes som publisert artikkel. Artikkelen er fortsatt tilgjengelig fra kontrollpanelet og kan publiseres igjen. Slettede artikler er bare ett steg fra og permanent bli slettet. De er fortsatt tilgjengelig inntil de blir fjernet fra papirkurven. Du bør bruke arkivering om du betrakte artikkelen som betydningsfull, men ikke aktuell. Papirkurven brukes når du ønsker å slette innholde fullstendig fra siden og fra fremtidige søk.</p>', '', 1, 3, 0, 27, '2006-10-11 11:19:43', 66, '', '2007-12-17 14:51:46', 66, 0, '0000-00-00 00:00:00', '2006-10-10 12:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 11, 0, 1, '', '', 0, 7, 'robots=\nauthor='),
(41, 'Notis 5', 'notis-5', '', '<p>Joomla! 1.5 - "Opplev friheten"!. Det har aldri vært enklere å lage egne dynamiske nettsider. Administer alle typer innhold med et av det beste CMS-administrasjonsverktøyet som finnes, og i omtrent alle språk du måtte snakke.</p>', '', 1, 1, 0, 3, '2006-10-12 04:17:31', 64, '', '2007-12-18 01:37:13', 64, 0, '0000-00-00 00:00:00', '2006-10-11 10:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 7, 0, 2, '', '', 0, 12, 'robots=\nauthor='),
(42, 'Notis 4', 'notis-4', '', '<p>I går gikk alle servere i USA til generalstreik, med krav om mere RAM og bedre CPU-kapasitet. En talsmaskin for serverne uttalte i en pressemelding på en Joomla!-drevet nyhetskanal at behovet for mere RAM kommer som følge av at en korttenkt programmerer sørget for å øke kravet til bus-hastigheten for "frontend"-løsninger drastisk. I fremtiden vil "bussene" bli pålagt å sette ned hastigheten i hovedkortet som de kjører på.</p>', '', 1, 1, 0, 3, '2006-10-12 08:25:50', 64, '', '2007-12-18 01:36:48', 64, 0, '0000-00-00 00:00:00', '2006-10-11 14:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 9, 0, 1, '', '', 0, 15, 'robots=\nauthor='),
(43, 'Eksempelsider og menylinker', 'eksempelsider-og-menylinker', '', '<p>Denne siden gir et eksempel på <em>ukategorisert</em> innhold, som ikke tilhører en seksjon eller kategori. I venstre kolonne er det en ny meny som viser samme innhold, presentert i 4 forskjellige sideoppsett.</p><ul><li>Seksjonsblogg</li><li>Seksjonstabell</li><li>Kategoriblogg</li><li>Kategoritabell</li></ul><p>Klikk på linkene i menyen på <strong>eksempelsidene</strong> for se noen av mulighetene for presentasjon av forskjellig typer av innhold som er tilgjengelig i standardinstallasjonen av Joomla!.</p><p>Dette inkluderer komponenter og individuelle artikler. Alle disse linkene, eller menytypene, er kontrollert ved hjelp av <strong>Menyer -&gt; [menynavn] -&gt; Behandler for menypunkt.</strong></p>', '', 1, 0, 0, 0, '2006-10-12 17:26:52', 64, '', '2007-12-15 15:38:33', 64, 0, '0000-00-00 00:00:00', '2006-10-11 18:00:00', '0000-00-00 00:00:00', '', '', 'show_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_vote=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nlanguage=\nkeyref=\nreadmore=', 11, 0, 1, 'Uncategorized, Uncategorized, Example Pages and Menu Links', '', 0, 70, 'robots=\nauthor=');

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_content_frontpage`
-- 

CREATE TABLE `jos_content_frontpage` (
  `content_id` int(11) NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  PRIMARY KEY  (`content_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dataark for tabell `jos_content_frontpage`
-- 

INSERT INTO `jos_content_frontpage` (`content_id`, `ordering`) VALUES (6, 2),
(14, 4),
(7, 3),
(1, 1),
(16, 5);

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_content_rating`
-- 

CREATE TABLE `jos_content_rating` (
  `content_id` int(11) NOT NULL default '0',
  `rating_sum` int(11) unsigned NOT NULL default '0',
  `rating_count` int(11) unsigned NOT NULL default '0',
  `lastip` varchar(150) NOT NULL default '',
  PRIMARY KEY  (`content_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dataark for tabell `jos_content_rating`
-- 


-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_core_acl_aro`
-- 

CREATE TABLE `jos_core_acl_aro` (
  `id` int(11) NOT NULL auto_increment,
  `section_value` varchar(240) NOT NULL default '0',
  `value` varchar(240) NOT NULL default '',
  `order_value` int(11) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `hidden` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `__section_value_value_aro` (`section_value`(100),`value`(100)),
  KEY `jos_gacl_hidden_aro` (`hidden`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

-- 
-- Dataark for tabell `jos_core_acl_aro`
-- 

INSERT INTO `jos_core_acl_aro` (`id`, `section_value`, `value`, `order_value`, `name`, `hidden`) VALUES (10, 'users', '62', 0, 'Administrator', 0),
(11, 'users', '63', 0, 'Jens-Christian Skibakk', 0),
(12, 'users', '64', 0, 'Bjørnar Markussen', 0),
(13, 'users', '65', 0, 'Rune Rasmussen', 0),
(14, 'users', '66', 0, 'Roar Jystad', 0);

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_core_acl_aro_groups`
-- 

CREATE TABLE `jos_core_acl_aro_groups` (
  `id` int(11) NOT NULL auto_increment,
  `parent_id` int(11) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `lft` int(11) NOT NULL default '0',
  `rgt` int(11) NOT NULL default '0',
  `value` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `jos_gacl_parent_id_aro_groups` (`parent_id`),
  KEY `jos_gacl_lft_rgt_aro_groups` (`lft`,`rgt`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

-- 
-- Dataark for tabell `jos_core_acl_aro_groups`
-- 

INSERT INTO `jos_core_acl_aro_groups` (`id`, `parent_id`, `name`, `lft`, `rgt`, `value`) VALUES (17, 0, 'ROOT', 1, 22, 'ROOT'),
(28, 17, 'USERS', 2, 21, 'USERS'),
(29, 28, 'Public Frontend', 3, 12, 'Public Frontend'),
(18, 29, 'Registered', 4, 11, 'Registered'),
(19, 18, 'Author', 5, 10, 'Author'),
(20, 19, 'Editor', 6, 9, 'Editor'),
(21, 20, 'Publisher', 7, 8, 'Publisher'),
(30, 28, 'Public Backend', 13, 20, 'Public Backend'),
(23, 30, 'Manager', 14, 19, 'Manager'),
(24, 23, 'Administrator', 15, 18, 'Administrator'),
(25, 24, 'Super Administrator', 16, 17, 'Super Administrator');

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_core_acl_aro_map`
-- 

CREATE TABLE `jos_core_acl_aro_map` (
  `acl_id` int(11) NOT NULL default '0',
  `section_value` varchar(230) NOT NULL default '0',
  `value` varchar(100) NOT NULL,
  PRIMARY KEY  (`acl_id`,`section_value`,`value`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dataark for tabell `jos_core_acl_aro_map`
-- 


-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_core_acl_aro_sections`
-- 

CREATE TABLE `jos_core_acl_aro_sections` (
  `section_id` int(11) NOT NULL auto_increment,
  `value` varchar(230) NOT NULL default '',
  `order_value` int(11) NOT NULL default '0',
  `name` varchar(230) NOT NULL default '',
  `hidden` int(11) NOT NULL default '0',
  PRIMARY KEY  (`section_id`),
  UNIQUE KEY `jos_gacl_value_aro_sections` (`value`),
  KEY `jos_gacl_hidden_aro_sections` (`hidden`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- 
-- Dataark for tabell `jos_core_acl_aro_sections`
-- 

INSERT INTO `jos_core_acl_aro_sections` (`section_id`, `value`, `order_value`, `name`, `hidden`) VALUES (10, 'users', 1, 'Users', 0);

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_core_acl_groups_aro_map`
-- 

CREATE TABLE `jos_core_acl_groups_aro_map` (
  `group_id` int(11) NOT NULL default '0',
  `section_value` varchar(240) NOT NULL default '',
  `aro_id` int(11) NOT NULL default '0',
  UNIQUE KEY `group_id_aro_id_groups_aro_map` (`group_id`,`section_value`,`aro_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dataark for tabell `jos_core_acl_groups_aro_map`
-- 

INSERT INTO `jos_core_acl_groups_aro_map` (`group_id`, `section_value`, `aro_id`) VALUES (25, '', 10),
(25, '', 11),
(25, '', 12),
(25, '', 13),
(25, '', 14);

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_core_log_items`
-- 

CREATE TABLE `jos_core_log_items` (
  `time_stamp` date NOT NULL default '0000-00-00',
  `item_table` varchar(50) NOT NULL default '',
  `item_id` int(11) unsigned NOT NULL default '0',
  `hits` int(11) unsigned NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dataark for tabell `jos_core_log_items`
-- 


-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_core_log_searches`
-- 

CREATE TABLE `jos_core_log_searches` (
  `search_term` text NOT NULL,
  `hits` int(11) unsigned NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dataark for tabell `jos_core_log_searches`
-- 


-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_groups`
-- 

CREATE TABLE `jos_groups` (
  `id` tinyint(3) unsigned NOT NULL default '0',
  `name` varchar(150) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dataark for tabell `jos_groups`
-- 

INSERT INTO `jos_groups` (`id`, `name`) VALUES (0, 'Public'),
(1, 'Registered'),
(2, 'Special');

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_menu`
-- 

CREATE TABLE `jos_menu` (
  `id` int(11) NOT NULL auto_increment,
  `menutype` varchar(225) default NULL,
  `name` text,
  `alias` varchar(255) NOT NULL default '',
  `link` text,
  `type` varchar(150) NOT NULL default '',
  `published` tinyint(1) NOT NULL default '0',
  `parent` int(11) unsigned NOT NULL default '0',
  `componentid` int(11) unsigned NOT NULL default '0',
  `sublevel` int(11) default '0',
  `ordering` int(11) default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `pollid` int(11) NOT NULL default '0',
  `browserNav` tinyint(4) default '0',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `utaccess` tinyint(3) unsigned NOT NULL default '0',
  `params` text NOT NULL,
  `lft` int(11) unsigned NOT NULL default '0',
  `rgt` int(11) unsigned NOT NULL default '0',
  `home` int(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `componentid` (`componentid`,`menutype`,`published`,`access`),
  KEY `menutype` (`menutype`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

-- 
-- Dataark for tabell `jos_menu`
-- 

INSERT INTO `jos_menu` (`id`, `menutype`, `name`, `alias`, `link`, `type`, `published`, `parent`, `componentid`, `sublevel`, `ordering`, `checked_out`, `checked_out_time`, `pollid`, `browserNav`, `access`, `utaccess`, `params`, `lft`, `rgt`, `home`) VALUES (1, 'mainmenu', 'Hjem', 'hjem', 'index.php?option=com_content&view=frontpage', 'component', 1, 0, 20, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 3, 'num_leading_articles=1\nnum_intro_articles=4\nnum_columns=2\nnum_links=4\norderby_pri=\norderby_sec=front\nshow_pagination=2\nshow_pagination_results=1\nshow_feed_link=1\nshow_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=Velkommen til forsiden\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 1),
(2, 'mainmenu', 'Joomla! -lisens', 'joomla-lisens', 'index.php?option=com_content&view=article&id=5', 'component', 1, 0, 20, 0, 3, 62, '2007-12-14 23:53:38', 0, 0, 0, 0, 'show_noauth=0\nshow_title=\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(41, 'mainmenu', 'FAQ / OSS', 'faq', 'index.php?option=com_content&view=section&id=3', 'component', 1, 0, 20, 0, 5, 62, '2007-12-14 23:15:32', 0, 0, 0, 0, 'show_description=0\nshow_description_image=0\nshow_categories=1\nshow_empty_categories=0\nshow_cat_num_articles=1\nshow_category_description=1\norderby=\nshow_feed_link=1\nshow_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(11, 'othermenu', 'Joomla! -hjemmeside', 'joomla-hjemmeside', 'http://www.joomla.org', 'url', 1, 0, 0, 0, 3, 62, '2007-12-14 22:31:07', 0, 0, 0, 3, 'menu_image=-1\n\n', 0, 0, 0),
(12, 'othermenu', 'Joomla! -forumene', 'joomla-forumene', 'http://forum.joomla.org', 'url', 1, 0, 0, 0, 4, 0, '0000-00-00 00:00:00', 0, 0, 0, 3, 'menu_image=-1\n\n', 0, 0, 0),
(13, 'othermenu', 'Joomla! -hjelp', 'joomla-hjelp', 'http://help.joomla.org', 'url', 1, 0, 0, 0, 5, 0, '0000-00-00 00:00:00', 0, 0, 0, 3, 'menu_image=-1\n\n', 0, 0, 0),
(14, 'othermenu', 'OSM -hjemmeside', 'osm-hjemmeside', 'http://www.opensourcematters.org', 'url', 1, 0, 0, 0, 6, 0, '0000-00-00 00:00:00', 0, 0, 0, 4, 'menu_image=-1\n\n', 0, 0, 0),
(15, 'othermenu', 'Administrasjon', 'administrasjon', 'administrator/', 'url', 1, 0, 0, 0, 7, 0, '0000-00-00 00:00:00', 0, 0, 0, 3, 'menu_image=-1\n\n', 0, 0, 0),
(18, 'topmenu', 'Nyheter', 'nyheter', 'index.php?option=com_newsfeeds&view=newsfeed&id=1&feedid=1', 'component', 1, 0, 11, 0, 3, 0, '0000-00-00 00:00:00', 0, 0, 0, 3, 'show_headings=1\nshow_name=1\nshow_articles=1\nshow_link=1\nshow_cat_description=1\nshow_cat_items=1\nshow_feed_image=1\nshow_feed_description=1\nshow_item_description=1\nfeed_word_count=0\npage_title=Nyheter\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(20, 'usermenu', 'Dine detaljer', 'dine-detaljer', 'index.php?option=com_user&view=user&task=edit', 'component', 1, 0, 14, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 1, 3, 'page_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(24, 'usermenu', 'Logg ut', 'logg-ut', 'index.php?option=com_user&view=login', 'component', 1, 0, 14, 0, 4, 0, '0000-00-00 00:00:00', 0, 0, 1, 3, 'show_login_title=1\nheader_login=\nlogin=\nlogin_message=0\ndescription_login=0\ndescription_login_text=\nimage_login=\nimage_login_align=right\nshow_logout_title=1\nheader_logout=\nlogout=\nlogout_message=1\ndescription_logout=1\ndescription_logout_text=\nimage_logout=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(38, 'keyconcepts', 'Innholdsutforminger', 'innholdsutforminger', 'index.php?option=com_content&view=article&id=24', 'component', 1, 0, 20, 0, 2, 64, '2007-12-22 23:57:40', 0, 0, 0, 0, 'show_noauth=0\nshow_title=\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(27, 'mainmenu', 'Joomla! -overblikk', 'joomla-overblikk', 'index.php?option=com_content&view=article&id=19', 'component', 1, 0, 20, 0, 2, 62, '2007-12-14 23:53:17', 0, 0, 0, 0, 'show_noauth=0\nshow_title=\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(28, 'topmenu', 'Om Joomla!', 'om-joomla', 'index.php?option=com_content&view=article&id=25', 'component', 1, 0, 20, 0, 1, 62, '2007-12-14 23:54:14', 0, 0, 0, 0, 'show_noauth=0\nshow_title=\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(29, 'topmenu', 'Egenskaper', 'egenskaper', 'index.php?option=com_content&view=article&id=22', 'component', 1, 0, 20, 0, 2, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_noauth=0\nshow_title=\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(30, 'topmenu', 'Samfunnet', 'samfunnet', 'index.php?option=com_content&view=article&id=27', 'component', 1, 0, 20, 0, 4, 65, '2007-12-15 22:19:24', 0, 0, 0, 0, 'show_noauth=0\nshow_title=\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(34, 'mainmenu', 'Hva er nytt i 1.5?', 'hva-er-nytt-i-1-5', 'index.php?option=com_content&view=article&id=22', 'component', 1, 27, 20, 1, 1, 64, '2007-12-15 17:15:47', 0, 0, 0, 0, 'show_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(40, 'keyconcepts', 'Utvidelser', 'utvidelser', 'index.php?option=com_content&view=article&id=26', 'component', 1, 0, 20, 0, 1, 64, '2007-12-22 23:57:29', 0, 0, 0, 0, 'show_noauth=0\nshow_title=\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(37, 'mainmenu', 'Mer om Joomla!', 'mer-om-joomla', 'index.php?option=com_content&view=section&id=4', 'component', 1, 0, 20, 0, 4, 62, '2007-12-14 23:53:46', 0, 0, 0, 0, 'show_description=0\nshow_description_image=0\nshow_categories=1\nshow_empty_categories=0\nshow_cat_num_articles=1\nshow_category_description=1\norderby=\nshow_feed_link=1\nshow_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(43, 'keyconcepts', 'Eksempelsider', 'eksempelsider', 'index.php?option=com_content&view=article&id=43', 'component', 1, 0, 20, 0, 3, 64, '2007-12-22 23:57:59', 0, 0, 0, 0, 'show_noauth=0\nshow_title=\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(44, 'ExamplePages', 'Seksjonsblogg', 'seksjonsblogg', 'index.php?option=com_content&view=section&layout=blog&id=3', 'component', 1, 0, 20, 0, 1, 64, '2007-12-15 16:26:37', 0, 0, 0, 0, 'show_description=0\nshow_description_image=0\nnum_leading_articles=1\nnum_intro_articles=4\nnum_columns=2\nnum_links=4\norderby_pri=\norderby_sec=\nshow_pagination=2\nshow_pagination_results=1\nshow_feed_link=1\nshow_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=Eksempel på utforming av seksjonsblogg (FAQ-seksjon)\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(45, 'ExamplePages', 'Seksjonstabell', 'seksjonstabell', 'index.php?option=com_content&view=section&id=3', 'component', 1, 0, 20, 0, 2, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_description=0\nshow_description_image=0\nshow_categories=1\nshow_empty_categories=0\nshow_cat_num_articles=1\nshow_category_description=1\norderby=\nshow_feed_link=1\nshow_noauth=0\nshow_title=1\nlink_titles=\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=Eksempel på utforming av tabellblogg (FAQ-seksjon)\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(46, 'ExamplePages', 'Kategoriblogg', 'kategoriblogg', 'index.php?option=com_content&view=category&layout=blog&id=31', 'component', 1, 0, 20, 0, 3, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_description=0\nshow_description_image=0\nnum_leading_articles=1\nnum_intro_articles=4\nnum_columns=2\nnum_links=4\norderby_pri=\norderby_sec=\nshow_pagination=2\nshow_pagination_results=1\nshow_feed_link=1\nshow_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=Eksempel på utforming av kategoriblogg (FAQer/Generell kategori)\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(47, 'ExamplePages', 'Kategoritabell', 'kategoritabell', 'index.php?option=com_content&view=category&id=32', 'component', 1, 0, 20, 0, 4, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_headings=1\nshow_date=0\ndate_format=\nfilter=1\nfilter_type=title\norderby_sec=\nshow_pagination=1\nshow_pagination_limit=1\nshow_feed_link=1\nshow_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=Eksempel på utforming av kategoritabell  (FAQer/Språkkategori)\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(48, 'mainmenu', 'Nettlenker', 'nettlenker', 'index.php?option=com_weblinks&view=categories', 'component', 1, 0, 4, 0, 7, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'image=-1\nimage_align=right\nshow_feed_link=1\nshow_comp_description=1\ncomp_description=\nshow_link_hits=1\nshow_link_description=1\nshow_other_cats=1\nshow_headings=1\ntarget=\nlink_icons=\npage_title=Nettlenker\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(49, 'mainmenu', 'Nyhetsmatinger', 'nyhetsmatinger', 'index.php?option=com_newsfeeds&view=categories', 'component', 1, 0, 11, 0, 8, 64, '2007-12-22 23:58:56', 0, 0, 0, 0, 'show_limit=1\nshow_comp_description=1\ncomp_description=\nimage=-1\nimage_align=right\nshow_headings=1\nshow_name=1\nshow_articles=1\nshow_link=1\nshow_cat_description=1\nshow_cat_items=1\nshow_feed_image=1\nshow_feed_description=1\nshow_item_description=1\nfeed_word_count=0\npage_title=Nyhetsmatinger\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(50, 'mainmenu', 'Nyhetene', 'nyhetene', 'index.php?option=com_content&view=category&layout=blog&id=1', 'component', 1, 0, 20, 0, 6, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'show_description=0\nshow_description_image=0\nnum_leading_articles=1\nnum_intro_articles=4\nnum_columns=2\nnum_links=4\norderby_pri=\norderby_sec=\nshow_pagination=2\nshow_pagination_results=1\nshow_feed_link=1\nshow_noauth=0\nshow_title=1\nlink_titles=0\nshow_intro=1\nshow_section=0\nlink_section=0\nshow_category=0\nlink_category=0\nshow_author=1\nshow_create_date=1\nshow_modify_date=1\nshow_item_navigation=0\nshow_readmore=1\nshow_vote=0\nshow_icons=1\nshow_pdf_icon=1\nshow_print_icon=1\nshow_email_icon=1\nshow_hits=1\nfeed_summary=\npage_title=Nyhetene\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(51, 'usermenu', 'Legg til artikkel', 'legg-til-artikkel', 'index.php?option=com_content&view=article&layout=form', 'component', 1, 0, 20, 0, 2, 0, '0000-00-00 00:00:00', 0, 0, 2, 0, 'show_noauth=\nshow_title=\nlink_titles=\nshow_intro=\nshow_section=\nlink_section=\nshow_category=\nlink_category=\nshow_author=\nshow_create_date=\nshow_modify_date=\nshow_item_navigation=\nshow_readmore=\nshow_vote=\nshow_icons=\nshow_pdf_icon=\nshow_print_icon=\nshow_email_icon=\nshow_hits=\nfeed_summary=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(52, 'usermenu', 'Legg til nettlenke', 'legg-til-nettlenke', 'index.php?option=com_weblinks&view=weblink&layout=form', 'component', 1, 0, 4, 0, 3, 0, '0000-00-00 00:00:00', 0, 0, 2, 0, 'show_comp_description=\ncomp_description=\nshow_link_hits=\nshow_link_description=\nshow_other_cats=\nshow_headings=\ntarget=\nlink_icons=\npage_title=\nshow_page_title=1\npageclass_sfx=\nmenu_image=-1\nsecure=0\n\n', 0, 0, 0),
(53, 'othermenu', 'Joomla! i Norge', 'joomla-i-norge', 'http://www.joomlainorge.no/', 'url', 1, 0, 0, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0),
(54, 'othermenu', 'Norske språkfiler', 'norske-språkfiler', 'http://filer.joomlainorge.no/', 'url', 1, 0, 0, 0, 2, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\n\n', 0, 0, 0);

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_menu_types`
-- 

CREATE TABLE `jos_menu_types` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `menutype` varchar(225) NOT NULL default '',
  `title` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `menutype` (`menutype`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- Dataark for tabell `jos_menu_types`
-- 

INSERT INTO `jos_menu_types` (`id`, `menutype`, `title`, `description`) VALUES (1, 'mainmenu', 'Hovedmeny', 'Hovedmenyen for siden'),
(2, 'usermenu', 'Brukermeny', 'En meny for innloggede brukere'),
(3, 'topmenu', 'Toppmeny', 'Navigering i toppen av siden'),
(4, 'othermenu', 'Resurser', 'Ekstralenker'),
(5, 'ExamplePages', 'Eksempelsider', 'Eksempelsider'),
(6, 'keyconcepts', 'Nøkkelkonsepter', 'Her beskrives noe viktig informasjon for nye brukere.');

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_messages`
-- 

CREATE TABLE `jos_messages` (
  `message_id` int(10) unsigned NOT NULL auto_increment,
  `user_id_from` int(10) unsigned NOT NULL default '0',
  `user_id_to` int(10) unsigned NOT NULL default '0',
  `folder_id` int(10) unsigned NOT NULL default '0',
  `date_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `state` int(11) NOT NULL default '0',
  `priority` int(1) unsigned NOT NULL default '0',
  `subject` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY  (`message_id`),
  KEY `useridto_state` (`user_id_to`,`state`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dataark for tabell `jos_messages`
-- 


-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_messages_cfg`
-- 

CREATE TABLE `jos_messages_cfg` (
  `user_id` int(10) unsigned NOT NULL default '0',
  `cfg_name` text NOT NULL,
  `cfg_value` text NOT NULL,
  UNIQUE KEY `idx_user_var_name` (`user_id`,`cfg_name`(100))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dataark for tabell `jos_messages_cfg`
-- 


-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_migration_backlinks`
-- 

CREATE TABLE `jos_migration_backlinks` (
  `itemid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `url` text NOT NULL,
  `sefurl` text NOT NULL,
  `newurl` text NOT NULL,
  PRIMARY KEY  (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dataark for tabell `jos_migration_backlinks`
-- 


-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_modules`
-- 

CREATE TABLE `jos_modules` (
  `id` int(11) NOT NULL auto_increment,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `ordering` int(11) NOT NULL default '0',
  `position` varchar(150) default NULL,
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `published` tinyint(1) NOT NULL default '0',
  `module` varchar(150) default NULL,
  `numnews` int(11) NOT NULL default '0',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `showtitle` tinyint(3) unsigned NOT NULL default '1',
  `params` text NOT NULL,
  `iscore` tinyint(4) NOT NULL default '0',
  `client_id` tinyint(4) NOT NULL default '0',
  `control` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `published` (`published`,`access`),
  KEY `newsfeeds` (`module`,`published`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

-- 
-- Dataark for tabell `jos_modules`
-- 

INSERT INTO `jos_modules` (`id`, `title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`, `control`) VALUES (1, 'Hovedmeny', '', 0, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_mainmenu', 0, 0, 1, 'menutype=mainmenu\nmenu_style=list\nstartLevel=0\nendLevel=0\nshowAllChildren=0\nwindow_open=\nshow_whitespace=0\ncache=1\ntag_id=\nclass_sfx=\nmoduleclass_sfx=_menu\nmaxdepth=10\nmenu_images=0\nmenu_images_align=0\nexpand_menu=0\nactivate_parent=0\nfull_active_id=0\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=\nspacer=\nend_spacer=\n\n', 1, 0, ''),
(2, 'Innlogging', '', 0, 'login', 0, '0000-00-00 00:00:00', 1, 'mod_login', 0, 0, 1, 'cache=0\nusesecure=0\n\n', 1, 1, ''),
(3, 'Populær', '', 3, 'cpanel', 64, '2007-12-15 16:27:42', 1, 'mod_popular', 0, 2, 1, 'cache=0\n\n', 0, 1, ''),
(4, 'Nyeste artikler', '', 4, 'cpanel', 0, '0000-00-00 00:00:00', 1, 'mod_latest', 0, 2, 1, 'ordering=c_dsc\nuser_id=0\ncache=0\n\n', 0, 1, ''),
(5, 'Menystatistikker', '', 5, 'cpanel', 64, '2007-12-15 16:27:58', 1, 'mod_stats', 0, 2, 1, 'cache=1\n\n', 0, 1, ''),
(6, 'Uleste meldinger', '', 0, 'header', 0, '0000-00-00 00:00:00', 1, 'mod_unread', 0, 2, 1, 'cache=0\n\n', 1, 1, ''),
(7, 'Besøkende', '', 2, 'header', 0, '0000-00-00 00:00:00', 1, 'mod_online', 0, 2, 1, 'cache=0\n\n', 1, 1, ''),
(8, 'Verktøylinje', '', 0, 'toolbar', 0, '0000-00-00 00:00:00', 1, 'mod_toolbar', 0, 2, 1, 'cache=0\n\n', 1, 1, ''),
(9, 'Hurtigikoner', '', 0, 'icon', 64, '2007-12-15 16:28:54', 1, 'mod_quickicon', 0, 2, 1, 'cache=1\n\n', 1, 1, ''),
(10, 'Påloggede brukere', '', 2, 'cpanel', 64, '2007-12-15 16:27:07', 1, 'mod_logged', 0, 2, 1, 'cache=0\n\n', 0, 1, ''),
(11, 'Bunntekst', '', 0, 'footer', 0, '0000-00-00 00:00:00', 1, 'mod_footer', 0, 0, 1, 'cache=1\n\n', 1, 1, ''),
(12, 'Admin-meny', '', 0, 'menu', 0, '0000-00-00 00:00:00', 1, 'mod_menu', 0, 2, 1, 'cache=1\n\n', 0, 1, ''),
(13, 'Admin-undermeny', '', 0, 'submenu', 0, '0000-00-00 00:00:00', 1, 'mod_submenu', 0, 2, 1, 'cache=0\n\n', 0, 1, ''),
(14, 'Brukerstatus', '', 0, 'status', 0, '0000-00-00 00:00:00', 1, 'mod_status', 0, 2, 1, 'cache=0\n\n', 0, 1, ''),
(15, 'Tittel', '', 0, 'title', 0, '0000-00-00 00:00:00', 1, 'mod_title', 0, 2, 1, 'cache=0\n\n', 0, 1, ''),
(16, 'Spørreundersøkelser', '', 0, 'right', 0, '0000-00-00 00:00:00', 1, 'mod_poll', 0, 0, 1, 'id=14\nmoduleclass_sfx=\ncache=1\ncache_time=900\n\n', 0, 0, ''),
(17, 'Brukermeny', '', 4, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_mainmenu', 0, 1, 1, 'menutype=usermenu\nmenu_style=list\nstartLevel=0\nendLevel=0\nshowAllChildren=0\nwindow_open=\nshow_whitespace=0\ncache=1\ntag_id=\nclass_sfx=\nmoduleclass_sfx=_menu\nmaxdepth=10\nmenu_images=0\nmenu_images_align=0\nexpand_menu=0\nactivate_parent=0\nfull_active_id=0\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=\nspacer=\nend_spacer=\n\n', 1, 0, ''),
(18, 'Brukerkonto', '', 8, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_login', 0, 0, 1, 'cache=0\nmoduleclass_sfx=\npretext=\nposttext=\nlogin=\nlogout=\ngreeting=1\nname=0\nusesecure=0\n\n', 1, 0, ''),
(19, 'Siste nytt', '', 0, 'user1', 0, '0000-00-00 00:00:00', 1, 'mod_latestnews', 0, 0, 1, 'count=5\nordering=c_dsc\nuser_id=0\nshow_front=1\nsecid=\ncatid=\nmoduleclass_sfx=\ncache=1\ncache_time=900\n\n', 1, 0, ''),
(20, 'Statistikker', '', 6, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_stats', 0, 0, 1, 'serverinfo=1\nsiteinfo=1\ncounter=1\nincrease=0\nmoduleclass_sfx=\ncache=0\ncache_time=900\n\n', 0, 0, ''),
(21, 'Besøkende', '', 0, 'right', 0, '0000-00-00 00:00:00', 1, 'mod_whosonline', 0, 0, 1, 'cache=0\nshowmode=0\nmoduleclass_sfx=\n\n', 0, 0, ''),
(22, 'Mest populær', '', 0, 'user2', 0, '0000-00-00 00:00:00', 1, 'mod_mostread', 0, 0, 1, 'moduleclass_sfx=\nshow_front=1\ncount=5\ncatid=\nsecid=\ncache=1\ncache_time=900\n\n', 0, 0, ''),
(23, 'Arkiv', '', 9, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_archive', 0, 0, 1, 'count=10\nmoduleclass_sfx=\ncache=1\n\n', 1, 0, ''),
(24, 'Seksjoner', '', 10, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_sections', 0, 0, 1, 'count=5\nmoduleclass_sfx=\ncache=1\ncache_time=900\n\n', 1, 0, ''),
(25, 'Nyhetsmelding', '', 0, 'top', 0, '0000-00-00 00:00:00', 1, 'mod_newsflash', 0, 0, 1, 'catid=3\nlayout=default\nimage=0\nlink_titles=\nreadmore=0\nitem_title=0\nitems=\nmoduleclass_sfx=\ncache=0\ncache_time=900\n\n', 0, 0, ''),
(26, 'Relaterte artikler', '', 11, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_related_items', 0, 0, 1, 'showDate=0\nmoduleclass_sfx=\ncache=0\ncache_time=900\n\n', 0, 0, ''),
(27, 'Søk', '', 0, 'user4', 0, '0000-00-00 00:00:00', 1, 'mod_search', 0, 0, 0, 'moduleclass_sfx=\nwidth=20\ntext=\nbutton=\nbutton_pos=right\nimagebutton=\nbutton_text=\ncache=1\ncache_time=900\n\n', 0, 0, ''),
(28, 'Tilfeldig bilde', '', 0, 'right', 0, '0000-00-00 00:00:00', 1, 'mod_random_image', 0, 0, 1, 'type=jpg\nfolder=\nlink=\nwidth=\nheight=\nmoduleclass_sfx=\ncache=0\ncache_time=900\n\n', 0, 0, ''),
(29, 'Toppmeny', '', 0, 'user3', 0, '0000-00-00 00:00:00', 1, 'mod_mainmenu', 0, 0, 0, 'menutype=topmenu\nmenu_style=list_flat\nstartLevel=0\nendLevel=0\nshowAllChildren=0\nwindow_open=\nshow_whitespace=0\ncache=1\ntag_id=\nclass_sfx=-nav\nmoduleclass_sfx=\nmaxdepth=10\nactivate_parent=0\nfull_active_id=0\nindent_image=0\nindent_image1=-1\nindent_image2=-1\nindent_image3=-1\nindent_image4=-1\nindent_image5=-1\nindent_image6=-1\nspacer=\nend_spacer=\n\n', 1, 0, ''),
(30, 'Bannere', '', 0, 'footer', 0, '0000-00-00 00:00:00', 1, 'mod_banners', 0, 0, 0, 'target=1\ncount=1\ncid=1\ncatid=33\ntag_search=0\nordering=random\nheader_text=\nfooter_text=\nmoduleclass_sfx=\ncache=1\ncache_time=15\n\n', 1, 0, ''),
(31, 'Resurser', '', 2, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_mainmenu', 0, 0, 1, 'menutype=othermenu\nmenu_style=list\nstartLevel=0\nendLevel=0\nshowAllChildren=0\nwindow_open=\nshow_whitespace=0\ncache=1\ntag_id=\nclass_sfx=\nmoduleclass_sfx=_menu\nmaxdepth=10\nmenu_images=0\nmenu_images_align=0\nexpand_menu=0\nactivate_parent=0\nfull_active_id=0\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=\nspacer=\nend_spacer=\n\n', 0, 0, ''),
(32, 'Wrapper', '', 12, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_wrapper', 0, 0, 1, '', 0, 0, ''),
(33, 'Bunnfelt', '', 2, 'footer', 0, '0000-00-00 00:00:00', 1, 'mod_footer', 0, 0, 0, 'cache=1\n\n', 1, 0, ''),
(34, 'Nyhetsvisning', '', 13, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_feed', 0, 0, 1, 'moduleclass_sfx=\nrssurl=\nrssrtl=0\nrsstitle=1\nrssdesc=1\nrssimage=1\nrssitems=3\nrssitemdesc=1\nword_count=0\ncache=0\ncache_time=900\n\n', 1, 0, ''),
(35, 'Brødsmuler', '', 0, 'breadcrumb', 64, '2007-12-15 16:29:20', 1, 'mod_breadcrumbs', 0, 0, 1, 'showHome=1\nhomeText=Hjem\nseparator=\nmoduleclass_sfx=\ncache=0\ncache_time=900\n\n', 1, 0, ''),
(36, 'Nyhetsmating', '', 0, 'syndicate', 0, '0000-00-00 00:00:00', 1, 'mod_syndicate', 0, 0, 0, 'cache=0\ntext=Feed Entries\nformat=rss\nmoduleclass_sfx=\n\n', 1, 0, ''),
(37, 'Resurser', '', 7, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_mainmenu', 0, 0, 1, 'menutype=othermenu\nmenu_style=list\nstartLevel=0\nendLevel=0\nshowAllChildren=0\nwindow_open=\nshow_whitespace=0\ncache=1\ntag_id=\nclass_sfx=\nmoduleclass_sfx=_menu\nmaxdepth=10\nmenu_images=0\nmenu_images_align=0\nexpand_menu=0\nactivate_parent=0\nfull_active_id=0\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=\nspacer=\nend_spacer=\n\n', 0, 0, ''),
(38, 'Annonser', '', 3, 'right', 0, '0000-00-00 00:00:00', 1, 'mod_banners', 0, 0, 1, 'target=1\ncount=4\ncid=0\ncatid=14\ntag_search=0\nordering=0\nheader_text=Utvalgte lenker:\nfooter_text=<a href="http://www.joomla.org">Annonser fra Joomla!</a>\nmoduleclass_sfx=_text\ncache=0\ncache_time=900\n\n', 0, 0, ''),
(39, 'Eksempelsider', '', 5, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_mainmenu', 0, 0, 1, 'menutype=ExamplePages\nmenu_style=list_flat\nstartLevel=0\nendLevel=0\nshowAllChildren=0\nwindow_open=\nshow_whitespace=0\ncache=1\ntag_id=\nclass_sfx=\nmoduleclass_sfx=_menu\nmaxdepth=10\nmenu_images=0\nmenu_images_align=0\nexpand_menu=0\nactivate_parent=0\nfull_active_id=0\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=\nspacer=\nend_spacer=\n\n', 0, 0, ''),
(40, 'Nøkkelkonsepter', '', 3, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_mainmenu', 0, 0, 1, 'menutype=keyconcepts\nmenu_style=list\nstartLevel=0\nendLevel=0\nshowAllChildren=0\nwindow_open=\nshow_whitespace=0\ncache=1\ntag_id=\nclass_sfx=\nmoduleclass_sfx=_menu\nmaxdepth=10\nmenu_images=0\nmenu_images_align=0\nexpand_menu=0\nactivate_parent=0\nfull_active_id=0\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=\nspacer=\nend_spacer=\n\n', 0, 0, ''),
(41, 'Velkommen til Joomla!', '<div style="padding: 5px"><br />Gratulerer med valget av Joomla! som ditt nyhetspubliseringssystem. Vi håper vårt program kan bidra til å hjelpe deg å utvikle et vellykket nettsted, og kanskje du på et senere tidspunkt også kan bidra med noe tilbake til prosjektet. <p>For å gjøre starten på bruk av Joomla! så enkel som mulig, har vi laget endel pekere til dokumentasjon, vanlige spørsmål samt hjelp med sikkerhet på serverinstallasjonen. En grei plass å starte er "<a href="http://forum.joomla.org/index.php/topic,47524.0.html" target="_blank">Absolute Beginners Guide to Joomla!</a>".</p><p>For vanlige spørsmål og problemstillinger vil det være greit å ta en kikk på området "<a href="http://help.joomla.org/component/option,com_easyfaq/Itemid,268/" target="_blank">Frequently Asked Questions (FAQ)</a>" for å finne svar. Dersom du setter deg fast på et spesielt område i administrasjonsdelen av Joomla! (der du befinner deg for øyeblikket), prøv hjelpknappen på verktøylinjen. Denne hjelpknappen vil du finne på de aller fleste områdene. Dette vil lede deg til en hjelpeside som omhandler det aktuelle området på vår "<a href="http://help.joomla.org" target="_blank">Help Site</a>". Dersom du fortsatt har spørsmål kan du logge deg inn på vårt "<a href="http://forum.joomla.org" target="_blank">forum</a>" som sannsynligvis er den største hjelperessursen for Joomla! på internett. Her vil du finne svar på de fleste spørsmål omkring Joomla!. Bruk søkefunksjonen før du stiller spørsmål i forumet.</p><p>Sikkerhet er høyt prioritert av oss og derfor ønsker vi at du registrerer deg for mottak av meldinger fra "<a href="http://forum.joomla.org/index.php/board,8.0.html" target="_blank">announcement forum</a>" (klikk på "Notify"-knappen) slik at du kan motta informasjon om nye utgivelser av Joomla! Du bør også lese gjennom "<a href="http://help.joomla.org/component/option,com_easyfaq/task,view/id,167/Itemid,268/" target="_blank">Joomla! Administrator''s Security Checklist</a>" og regelmessig sjekke artikler på "<a href="http://forum.joomla.org/index.php/board,267.0.html" target="_blank">security forum</a>".</p><p>Vi ønsker med dette at du får mye glede av Joomla! og håper at vi ser deg i "<a href="http://forum.joomla.org" target="_blank"><font color="#0000ff">forumet</font></a>" sammen med de hundretusener av andre bidragsytere.</p><p>Hilsen Joomla! teamet.<img src="../plugins/editors/tinymce/jscripts/tiny_mce/plugins/emotions/images/smiley-smile.gif" border="0" alt="Smile" title="Smile" /></p><p>P.S.: For å fjerne denne artiklen sletter du "Velkommen til Joomla!"-modulen under <strong>Utvidelser -&gt; Moduler</strong> i administrasjonsdelen. Her er en <a href="index.php?option=com_modules&client=1&phpMyAdmin=y7ydHO5glGkaIDcSVlIgptpeLd2">link</a> til dette skjermbildet.</p></div>', 0, 'cpanel', 0, '0000-00-00 00:00:00', 1, 'mod_custom', 0, 2, 1, 'moduleclass_sfx=\n\n', 1, 1, '');

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_modules_menu`
-- 

CREATE TABLE `jos_modules_menu` (
  `moduleid` int(11) NOT NULL default '0',
  `menuid` int(11) NOT NULL default '0',
  PRIMARY KEY  (`moduleid`,`menuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dataark for tabell `jos_modules_menu`
-- 

INSERT INTO `jos_modules_menu` (`moduleid`, `menuid`) VALUES (1, 0),
(16, 1),
(17, 0),
(18, 1),
(19, 1),
(19, 2),
(19, 27),
(21, 1),
(22, 1),
(22, 2),
(22, 27),
(25, 0),
(27, 0),
(29, 0),
(30, 0),
(31, 1),
(32, 0),
(33, 0),
(34, 0),
(35, 0),
(36, 0),
(38, 1),
(39, 43),
(39, 44),
(39, 45),
(39, 46),
(39, 47),
(40, 0),
(42, 0);

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_newsfeeds`
-- 

CREATE TABLE `jos_newsfeeds` (
  `catid` int(11) NOT NULL default '0',
  `id` int(11) NOT NULL auto_increment,
  `name` text NOT NULL,
  `alias` varchar(255) NOT NULL default '',
  `link` text NOT NULL,
  `filename` varchar(200) default NULL,
  `published` tinyint(1) NOT NULL default '0',
  `numarticles` int(11) unsigned NOT NULL default '1',
  `cache_time` int(11) unsigned NOT NULL default '3600',
  `checked_out` tinyint(3) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL default '0',
  `rtl` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `published` (`published`),
  KEY `catid` (`catid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- 
-- Dataark for tabell `jos_newsfeeds`
-- 

INSERT INTO `jos_newsfeeds` (`catid`, `id`, `name`, `alias`, `link`, `filename`, `published`, `numarticles`, `cache_time`, `checked_out`, `checked_out_time`, `ordering`, `rtl`) VALUES (4, 1, 'Joomla! - Offisielle nyheter', 'joomla-offisielle-nyheter', 'http://www.joomla.org/index.php?option=com_rss_xtd&feed=RSS2.0&type=com_frontpage&Itemid=1', '', 1, 5, 3600, 0, '0000-00-00 00:00:00', 8, 0),
(4, 2, 'Joomla! - Samfunnsnytt', 'joomla-samfunnsnytt', 'http://www.joomla.org/index.php?option=com_rss_xtd&feed=RSS2.0&type=com_content&task=blogcategory&id=0&Itemid=33', '', 1, 5, 3600, 0, '0000-00-00 00:00:00', 9, 0),
(6, 3, 'Linux Today', 'linux-today', 'http://linuxtoday.com/backend/my-netscape.rdf', '', 1, 3, 3600, 0, '0000-00-00 00:00:00', 1, 0),
(5, 4, 'Nyheter fra næringslivet', 'nyheter-fra-næringslivet', 'http://headlines.internet.com/internetnews/bus-news/news.rss', '', 1, 3, 3600, 0, '0000-00-00 00:00:00', 2, 0),
(7, 5, 'Utviklernyheter', 'utviklernyheter', 'http://headlines.internet.com/internetnews/wd-news/news.rss', '', 1, 3, 3600, 0, '0000-00-00 00:00:00', 3, 0),
(6, 6, 'Linux Central: Nye produkter', 'linux-central-nye-produkter', 'http://linuxcentral.com/backend/lcnew.rdf', '', 1, 3, 3600, 0, '0000-00-00 00:00:00', 4, 0),
(6, 7, 'Linux Central: Bestselgere', 'linux-central-bestselgere', 'http://linuxcentral.com/backend/lcbestns.rdf', '', 1, 3, 3600, 0, '0000-00-00 00:00:00', 5, 0),
(6, 8, 'Linux Central: Daglige tilbud', 'linux-central-daglige-tilbud', 'http://linuxcentral.com/backend/lcspecialns.rdf', '', 1, 3, 3600, 0, '0000-00-00 00:00:00', 6, 0);

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_plugins`
-- 

CREATE TABLE `jos_plugins` (
  `id` int(11) NOT NULL auto_increment,
  `name` text NOT NULL,
  `element` text NOT NULL,
  `folder` varchar(100) NOT NULL default '',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  `published` tinyint(3) NOT NULL default '0',
  `iscore` tinyint(3) NOT NULL default '0',
  `client_id` tinyint(3) NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `idx_folder` (`published`,`client_id`,`access`,`folder`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

-- 
-- Dataark for tabell `jos_plugins`
-- 

INSERT INTO `jos_plugins` (`id`, `name`, `element`, `folder`, `access`, `ordering`, `published`, `iscore`, `client_id`, `checked_out`, `checked_out_time`, `params`) VALUES (1, 'Autentisering - Joomla', 'joomla', 'authentication', 0, 1, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(2, 'Autentisering - LDAP', 'ldap', 'authentication', 0, 2, 0, 1, 0, 0, '0000-00-00 00:00:00', 'host=\nport=389\nuse_ldapV3=0\nnegotiate_tls=0\nno_referrals=0\nauth_method=bind\nbase_dn=\nsearch_string=\nusers_dn=\nusername=\npassword=\nldap_fullname=fullName\nldap_email=mail\nldap_uid=uid\n\n'),
(3, 'Autentisering - GMail', 'gmail', 'authentication', 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', ''),
(4, 'Autentisering - OpenID', 'openid', 'authentication', 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', ''),
(5, 'Bruker - Joomla!', 'joomla', 'user', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', 'autoregister=1\n\n'),
(6, 'Søk - Innhold', 'content', 'search', 0, 1, 1, 1, 0, 0, '0000-00-00 00:00:00', 'search_limit=50\nsearch_content=1\nsearch_uncategorised=1\nsearch_archived=1\n\n'),
(7, 'Søk - Kontakter', 'contacts', 'search', 0, 3, 1, 1, 0, 0, '0000-00-00 00:00:00', 'search_limit=50\n\n'),
(8, 'Søk - Kategorier', 'categories', 'search', 0, 4, 1, 0, 0, 0, '0000-00-00 00:00:00', 'search_limit=50\n\n'),
(9, 'Søk - Seksjoner', 'sections', 'search', 0, 5, 1, 0, 0, 0, '0000-00-00 00:00:00', 'search_limit=50\n\n'),
(10, 'Søk - Nyhetsmatinger', 'newsfeeds', 'search', 0, 6, 1, 0, 0, 0, '0000-00-00 00:00:00', 'search_limit=50\n\n'),
(11, 'Søk - Nettlenker', 'weblinks', 'search', 0, 2, 1, 1, 0, 0, '0000-00-00 00:00:00', 'search_limit=50\n\n'),
(12, 'Innhold - Sideskift', 'pagebreak', 'content', 0, 10000, 1, 1, 0, 0, '0000-00-00 00:00:00', 'enabled=1\ntitle=1\nmultipage_toc=1\nshowall=1\n\n'),
(13, 'Innhold - SEF', 'sef', 'content', 0, 3, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
(14, 'Innhold - Vurdering', 'vote', 'content', 0, 4, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(15, 'Innhold - E-postmaskering', 'emailcloak', 'content', 0, 5, 1, 0, 0, 0, '0000-00-00 00:00:00', 'mode=1\n\n'),
(16, 'Innhold - Code Hightlighter (GeSHi)', 'geshi', 'content', 0, 5, 0, 0, 0, 0, '0000-00-00 00:00:00', ''),
(17, 'Innhold - Last modul', 'loadmodule', 'content', 0, 6, 1, 0, 0, 0, '0000-00-00 00:00:00', 'enabled=1\nstyle=0\n\n'),
(18, 'Innhold - Sidenavigering', 'pagenavigation', 'content', 0, 2, 1, 1, 0, 0, '0000-00-00 00:00:00', 'position=1\n\n'),
(19, 'Tekstbehandler - Ingen tekstbehandler', 'none', 'editors', 0, 0, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(20, 'Tekstbehandler - TinyMCE 2.0', 'tinymce', 'editors', 0, 0, 1, 1, 0, 0, '0000-00-00 00:00:00', 'theme=advanced\ncleanup_startup=0\ncleanup_entities=1\nautosave=0\ncompressed=0\nrelative_urls=1\ntext_direction=ltr\nlang_mode=0\nlang_code=en\ninvalid_elements=applet\ncontent_css=1\ncontent_css_custom=\nnewlines=0\nextended_elements=\ntoolbar=top\nhr=1\nsmilies=1\ntable=1\nstyle=1\nlayer=1\nxhtmlxtras=0\ntemplate=0\ndirectionality=1\nfullscreen=1\nhtml_height=550\nhtml_width=750\npreview=1\nelement_path=0\ninsertdate=1\nformat_date=%Y-%m-%d\ninserttime=1\nformat_time=%H:%M:%S\n\n'),
(21, 'Tekstbehandler - XStandard Lite 2.0', 'xstandard', 'editors', 0, 0, 1, 1, 0, 0, '0000-00-00 00:00:00', 'mode=wysiwyg\nwrap=0\n\n'),
(22, 'Tekstbehandlerknapp - Bilde', 'image', 'editors-xtd', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
(23, ' Tekstbehandlerknapp - Sideskift', 'pagebreak', 'editors-xtd', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
(24, ' Tekstbehandlerknapp - Les mer', 'readmore', 'editors-xtd', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
(25, 'XML-RPC - Joomla', 'joomla', 'xmlrpc', 0, 7, 0, 1, 0, 0, '0000-00-00 00:00:00', ''),
(26, 'XML-RPC - Blogger API', 'blogger', 'xmlrpc', 0, 7, 0, 1, 0, 0, '0000-00-00 00:00:00', 'catid=1\nsectionid=0\n\n'),
(28, 'System - Feilsøk', 'debug', 'system', 0, 1, 1, 0, 0, 0, '0000-00-00 00:00:00', 'queries=1\nmemory=1\nlanguage=1\n\n'),
(29, 'System - Legacy', 'legacy', 'system', 0, 2, 0, 1, 0, 0, '0000-00-00 00:00:00', 'route=0\n\n'),
(30, 'System - Mellomlager', 'cache', 'system', 0, 0, 0, 1, 0, 0, '0000-00-00 00:00:00', 'browsercache=0\ncachetime=15\n\n'),
(31, 'System - Logg', 'log', 'system', 0, 0, 0, 1, 0, 0, '0000-00-00 00:00:00', ''),
(32, 'System - Husk meg', 'remember', 'system', 0, 5, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(33, 'System - Backlink', 'backlink', 'system', 0, 6, 0, 1, 0, 0, '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_poll_data`
-- 

CREATE TABLE `jos_poll_data` (
  `id` int(11) NOT NULL auto_increment,
  `pollid` int(11) NOT NULL default '0',
  `text` text NOT NULL,
  `hits` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `pollid` (`pollid`,`text`(1))
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

-- 
-- Dataark for tabell `jos_poll_data`
-- 

INSERT INTO `jos_poll_data` (`id`, `pollid`, `text`, `hits`) VALUES (1, 14, 'Samfunnsider', 2),
(2, 14, 'Merkevaresider', 3),
(3, 14, 'Netthandel', 1),
(4, 14, 'Blogger', 0),
(5, 14, 'Intranett', 0),
(6, 14, 'Foto- og mediasider', 2),
(7, 14, 'Alle ovenfor', 3),
(8, 14, '', 0),
(9, 14, '', 0),
(10, 14, '', 0),
(11, 14, '', 0),
(12, 14, '', 0);

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_poll_date`
-- 

CREATE TABLE `jos_poll_date` (
  `id` bigint(20) NOT NULL auto_increment,
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  `vote_id` int(11) NOT NULL default '0',
  `poll_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `poll_id` (`poll_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- 
-- Dataark for tabell `jos_poll_date`
-- 

INSERT INTO `jos_poll_date` (`id`, `date`, `vote_id`, `poll_id`) VALUES (1, '2006-10-09 13:01:58', 1, 14),
(2, '2006-10-10 15:19:43', 7, 14),
(3, '2006-10-11 11:08:16', 7, 14),
(4, '2006-10-11 15:02:26', 2, 14),
(5, '2006-10-11 15:43:03', 7, 14),
(6, '2006-10-11 15:43:38', 7, 14),
(7, '2006-10-12 00:51:13', 2, 14),
(8, '2007-05-10 19:12:29', 3, 14),
(9, '2007-05-14 14:18:00', 6, 14),
(10, '2007-06-10 15:20:29', 6, 14),
(11, '2007-07-03 12:37:53', 2, 14);

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_poll_menu`
-- 

CREATE TABLE `jos_poll_menu` (
  `pollid` int(11) NOT NULL default '0',
  `menuid` int(11) NOT NULL default '0',
  PRIMARY KEY  (`pollid`,`menuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dataark for tabell `jos_poll_menu`
-- 


-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_polls`
-- 

CREATE TABLE `jos_polls` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` text NOT NULL,
  `alias` varchar(255) NOT NULL default '',
  `voters` int(9) NOT NULL default '0',
  `checked_out` int(11) NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `published` tinyint(1) NOT NULL default '0',
  `access` int(11) NOT NULL default '0',
  `lag` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

-- 
-- Dataark for tabell `jos_polls`
-- 

INSERT INTO `jos_polls` (`id`, `title`, `alias`, `voters`, `checked_out`, `checked_out_time`, `published`, `access`, `lag`) VALUES (14, 'Joomla! blir brukt til?', 'joomla-blir-brukt-til', 11, 0, '0000-00-00 00:00:00', 1, 0, 86400);

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_sections`
-- 

CREATE TABLE `jos_sections` (
  `id` int(11) NOT NULL auto_increment,
  `title` text NOT NULL,
  `name` text NOT NULL,
  `alias` varchar(255) NOT NULL default '',
  `image` text NOT NULL,
  `scope` varchar(50) NOT NULL default '',
  `image_position` varchar(90) NOT NULL default '',
  `description` text NOT NULL,
  `published` tinyint(1) NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL default '0',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `count` int(11) NOT NULL default '0',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `idx_scope` (`scope`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Dataark for tabell `jos_sections`
-- 

INSERT INTO `jos_sections` (`id`, `title`, `name`, `alias`, `image`, `scope`, `image_position`, `description`, `published`, `checked_out`, `checked_out_time`, `ordering`, `access`, `count`, `params`) VALUES (1, 'Nyheter', '', 'nyheter', 'articles.jpg', 'content', 'right', 'Velg en nyhetsgruppe fra listen nedenfor, velg deretter en nyhet som du ønsker å lese.', 1, 0, '0000-00-00 00:00:00', 3, 0, 6, ''),
(3, 'OSSer', '', 'oss-er', 'key.jpg', 'content', 'left', 'Velg en av våre OSS-grupper fra listen nedenfor, velg deretter en OSS som du ønsker å lese. Om du har et spørsmål som ikke blir besvart her er du velkommen til å kontakte oss.', 1, 0, '0000-00-00 00:00:00', 5, 0, 30, ''),
(4, 'Om Joomla!', '', 'om-joomla', '', 'content', 'left', '', 1, 0, '0000-00-00 00:00:00', 2, 0, 20, '');

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_session`
-- 

CREATE TABLE `jos_session` (
  `username` varchar(150) default '',
  `time` varchar(14) default '',
  `session_id` varchar(200) NOT NULL default '0',
  `guest` tinyint(4) default '1',
  `userid` int(11) default '0',
  `usertype` varchar(150) default '',
  `gid` tinyint(3) unsigned NOT NULL default '0',
  `client_id` tinyint(3) unsigned NOT NULL default '0',
  `data` longtext,
  PRIMARY KEY  (`session_id`(64)),
  KEY `whosonline` (`guest`,`usertype`),
  KEY `userid` (`userid`),
  KEY `time` (`time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dataark for tabell `jos_session`
-- 

INSERT INTO `jos_session` (`username`, `time`, `session_id`, `guest`, `userid`, `usertype`, `gid`, `client_id`, `data`) VALUES ('', '1198409118', 'rrqkmuokcfel2kg0pmkskjsvs5', 1, 0, '', 0, 0, '__default|a:8:{s:15:"session.counter";i:1;s:19:"session.timer.start";i:1198409118;s:18:"session.timer.last";i:1198409118;s:17:"session.timer.now";i:1198409118;s:22:"session.client.browser";s:72:"Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)";s:8:"registry";O:9:"JRegistry":3:{s:17:"_defaultNameSpace";s:7:"session";s:9:"_registry";a:1:{s:7:"session";a:1:{s:4:"data";O:8:"stdClass":0:{}}}s:7:"_errors";a:0:{}}s:4:"user";O:5:"JUser":19:{s:2:"id";i:0;s:4:"name";N;s:8:"username";N;s:5:"email";N;s:8:"password";N;s:14:"password_clear";s:0:"";s:8:"usertype";N;s:5:"block";N;s:9:"sendEmail";i:0;s:3:"gid";i:0;s:12:"registerDate";N;s:13:"lastvisitDate";N;s:10:"activation";N;s:6:"params";N;s:3:"aid";i:0;s:5:"guest";i:1;s:7:"_params";O:10:"JParameter":7:{s:4:"_raw";s:0:"";s:4:"_xml";N;s:9:"_elements";a:0:{}s:12:"_elementPath";a:1:{i:0;s:109:"/var/www/vhosts/joomlainorge.no/httpdocs/subdomains/oversettelser/j15/libraries/joomla/html/parameter/element";}s:17:"_defaultNameSpace";s:8:"_default";s:9:"_registry";a:1:{s:8:"_default";a:1:{s:4:"data";O:8:"stdClass":0:{}}}s:7:"_errors";a:0:{}}s:9:"_errorMsg";N;s:7:"_errors";a:0:{}}s:13:"session.token";s:32:"20bebdf0e6f95520a745a087681da24f";}'),
('', '1198406021', 'jj470vgu84eh1s9jd620gp0c31', 1, 0, '', 0, 0, '__default|a:7:{s:15:"session.counter";i:1;s:19:"session.timer.start";i:1198406021;s:18:"session.timer.last";i:1198406021;s:17:"session.timer.now";i:1198406021;s:22:"session.client.browser";s:72:"Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)";s:8:"registry";O:9:"JRegistry":3:{s:17:"_defaultNameSpace";s:7:"session";s:9:"_registry";a:1:{s:7:"session";a:1:{s:4:"data";O:8:"stdClass":0:{}}}s:7:"_errors";a:0:{}}s:4:"user";O:5:"JUser":19:{s:2:"id";i:0;s:4:"name";N;s:8:"username";N;s:5:"email";N;s:8:"password";N;s:14:"password_clear";s:0:"";s:8:"usertype";N;s:5:"block";N;s:9:"sendEmail";i:0;s:3:"gid";i:0;s:12:"registerDate";N;s:13:"lastvisitDate";N;s:10:"activation";N;s:6:"params";N;s:3:"aid";i:0;s:5:"guest";i:1;s:7:"_params";O:10:"JParameter":7:{s:4:"_raw";s:0:"";s:4:"_xml";N;s:9:"_elements";a:0:{}s:12:"_elementPath";a:1:{i:0;s:109:"/var/www/vhosts/joomlainorge.no/httpdocs/subdomains/oversettelser/j15/libraries/joomla/html/parameter/element";}s:17:"_defaultNameSpace";s:8:"_default";s:9:"_registry";a:1:{s:8:"_default";a:1:{s:4:"data";O:8:"stdClass":0:{}}}s:7:"_errors";a:0:{}}s:9:"_errorMsg";N;s:7:"_errors";a:0:{}}}'),
('', '1198407931', 'm6juilg7d1pn9jifnlvaaacsp0', 1, 0, '', 0, 0, '__default|a:7:{s:15:"session.counter";i:1;s:19:"session.timer.start";i:1198407931;s:18:"session.timer.last";i:1198407931;s:17:"session.timer.now";i:1198407931;s:22:"session.client.browser";s:72:"Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)";s:8:"registry";O:9:"JRegistry":3:{s:17:"_defaultNameSpace";s:7:"session";s:9:"_registry";a:1:{s:7:"session";a:1:{s:4:"data";O:8:"stdClass":0:{}}}s:7:"_errors";a:0:{}}s:4:"user";O:5:"JUser":19:{s:2:"id";i:0;s:4:"name";N;s:8:"username";N;s:5:"email";N;s:8:"password";N;s:14:"password_clear";s:0:"";s:8:"usertype";N;s:5:"block";N;s:9:"sendEmail";i:0;s:3:"gid";i:0;s:12:"registerDate";N;s:13:"lastvisitDate";N;s:10:"activation";N;s:6:"params";N;s:3:"aid";i:0;s:5:"guest";i:1;s:7:"_params";O:10:"JParameter":7:{s:4:"_raw";s:0:"";s:4:"_xml";N;s:9:"_elements";a:0:{}s:12:"_elementPath";a:1:{i:0;s:109:"/var/www/vhosts/joomlainorge.no/httpdocs/subdomains/oversettelser/j15/libraries/joomla/html/parameter/element";}s:17:"_defaultNameSpace";s:8:"_default";s:9:"_registry";a:1:{s:8:"_default";a:1:{s:4:"data";O:8:"stdClass":0:{}}}s:7:"_errors";a:0:{}}s:9:"_errorMsg";N;s:7:"_errors";a:0:{}}}'),
('', '1198408765', 'thm2qo64kdv1gh6kvjl2l5d5v3', 1, 0, '', 0, 0, '__default|a:8:{s:15:"session.counter";i:1;s:19:"session.timer.start";i:1198408765;s:18:"session.timer.last";i:1198408765;s:17:"session.timer.now";i:1198408765;s:22:"session.client.browser";s:83:"Mozilla/5.0 (compatible; Yahoo! Slurp; http://help.yahoo.com/help/us/ysearch/slurp)";s:8:"registry";O:9:"JRegistry":3:{s:17:"_defaultNameSpace";s:7:"session";s:9:"_registry";a:1:{s:7:"session";a:1:{s:4:"data";O:8:"stdClass":0:{}}}s:7:"_errors";a:0:{}}s:4:"user";O:5:"JUser":19:{s:2:"id";i:0;s:4:"name";N;s:8:"username";N;s:5:"email";N;s:8:"password";N;s:14:"password_clear";s:0:"";s:8:"usertype";N;s:5:"block";N;s:9:"sendEmail";i:0;s:3:"gid";i:0;s:12:"registerDate";N;s:13:"lastvisitDate";N;s:10:"activation";N;s:6:"params";N;s:3:"aid";i:0;s:5:"guest";i:1;s:7:"_params";O:10:"JParameter":7:{s:4:"_raw";s:0:"";s:4:"_xml";N;s:9:"_elements";a:0:{}s:12:"_elementPath";a:1:{i:0;s:109:"/var/www/vhosts/joomlainorge.no/httpdocs/subdomains/oversettelser/j15/libraries/joomla/html/parameter/element";}s:17:"_defaultNameSpace";s:8:"_default";s:9:"_registry";a:1:{s:8:"_default";a:1:{s:4:"data";O:8:"stdClass":0:{}}}s:7:"_errors";a:0:{}}s:9:"_errorMsg";N;s:7:"_errors";a:0:{}}s:13:"session.token";s:32:"445c54877e32bf206e5ffa04b7c58b55";}');

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_stats_agents`
-- 

CREATE TABLE `jos_stats_agents` (
  `agent` varchar(255) NOT NULL default '',
  `type` tinyint(1) unsigned NOT NULL default '0',
  `hits` int(11) unsigned NOT NULL default '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dataark for tabell `jos_stats_agents`
-- 


-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_templates_menu`
-- 

CREATE TABLE `jos_templates_menu` (
  `template` text NOT NULL,
  `menuid` int(11) NOT NULL default '0',
  `client_id` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`menuid`,`client_id`,`template`(255))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dataark for tabell `jos_templates_menu`
-- 

INSERT INTO `jos_templates_menu` (`template`, `menuid`, `client_id`) VALUES ('rhuk_milkyway', 0, 0),
('khepri', 0, 1);

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_users`
-- 

CREATE TABLE `jos_users` (
  `id` int(11) NOT NULL auto_increment,
  `name` text NOT NULL,
  `username` varchar(150) NOT NULL default '',
  `email` varchar(100) NOT NULL default '',
  `password` varchar(100) NOT NULL default '',
  `usertype` varchar(75) NOT NULL default '',
  `block` tinyint(4) NOT NULL default '0',
  `sendEmail` tinyint(4) default '0',
  `gid` tinyint(3) unsigned NOT NULL default '1',
  `registerDate` datetime NOT NULL default '0000-00-00 00:00:00',
  `lastvisitDate` datetime NOT NULL default '0000-00-00 00:00:00',
  `activation` varchar(100) NOT NULL default '',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `usertype` (`usertype`),
  KEY `idx_name` (`name`(255)),
  KEY `gid_block` (`gid`,`block`),
  KEY `username` (`username`),
  KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8 AUTO_INCREMENT=67 ;

-- 
-- Dataark for tabell `jos_users`
-- 

INSERT INTO `jos_users` (`id`, `name`, `username`, `email`, `password`, `usertype`, `block`, `sendEmail`, `gid`, `registerDate`, `lastvisitDate`, `activation`, `params`) VALUES (62, 'Administrator', 'admin', 'webmaster@joomlainorge.no', '8e7c3f365f7052e26dff26c0f89b1358:gv0rqiKrjFa3mZbsSyUyOIP843qhAD0e', 'Super Administrator', 0, 1, 25, '2007-12-13 12:57:04', '2007-12-15 19:09:41', '', 'admin_language=\nlanguage=\neditor=\nhelpsite=\ntimezone=0\n\n'),
(63, 'Jens-Christian Skibakk', 'jenscski', 'jens.christian@skibakk.no', '464f556a6d08de04f76d109bb51b9faf:Maaq3w0aapYm1lstItIdmQaMkxV3d5AP', 'Super Administrator', 0, 0, 25, '2007-12-14 07:41:19', '2007-12-14 12:57:02', '', 'admin_language=\nlanguage=\neditor=\nhelpsite=\ntimezone=0\n\n'),
(64, 'Bjørnar Markussen', 'bmark', 'bmark@broadpark.no', '165a3710b164a684eb8d539514725b4d:gKRBJSATSxqjlsAjZdGXqmEg56iiruSO', 'Super Administrator', 0, 0, 25, '2007-12-14 19:55:01', '2007-12-23 01:00:31', '', 'admin_language=nb-NO\nlanguage=nb-NO\neditor=tinymce\nhelpsite=\ntimezone=1\n\n'),
(65, 'Rune Rasmussen', 'rued', 'rra@syntaxerror.no', '4d35ff154148e0d270128cfcaeac6be3:ByJnFLWNCOM8c235GNm11Xa81ootHXPn', 'Super Administrator', 0, 0, 25, '2007-12-15 19:09:37', '2007-12-22 01:55:17', '', 'admin_language=\nlanguage=\neditor=\nhelpsite=\ntimezone=0\n\n'),
(66, 'Roar Jystad', 'Roar', 'roar.jystad@hotmail.com', '57769e31df1658397574451b2b29b16b:7VfoNZjN43zKh0BU5DtcUbKdWNMBqm5t', 'Super Administrator', 0, 0, 25, '2007-12-16 22:42:56', '2007-12-21 09:40:04', '', 'admin_language=\nlanguage=\neditor=\nhelpsite=\ntimezone=0\n\n');

-- --------------------------------------------------------

-- 
-- Tabellstruktur for tabell `jos_weblinks`
-- 

CREATE TABLE `jos_weblinks` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `catid` int(11) NOT NULL default '0',
  `sid` int(11) NOT NULL default '0',
  `title` text NOT NULL,
  `alias` varchar(255) NOT NULL default '',
  `url` varchar(250) NOT NULL default '',
  `description` text NOT NULL,
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  `hits` int(11) NOT NULL default '0',
  `published` tinyint(1) NOT NULL default '0',
  `checked_out` int(11) NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL default '0',
  `archived` tinyint(1) NOT NULL default '0',
  `approved` tinyint(1) NOT NULL default '1',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `catid` (`catid`,`published`,`archived`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- Dataark for tabell `jos_weblinks`
-- 

INSERT INTO `jos_weblinks` (`id`, `catid`, `sid`, `title`, `alias`, `url`, `description`, `date`, `hits`, `published`, `checked_out`, `checked_out_time`, `ordering`, `archived`, `approved`, `params`) VALUES (1, 2, 0, 'Joomla!', 'joomla', 'http://www.joomla.org', 'Hjemmesiden til Joomla!', '2007-12-14 21:27:19', 4, 1, 0, '0000-00-00 00:00:00', 1, 0, 1, 'target=0\n\n'),
(2, 2, 0, 'php.net', 'php', 'http://www.php.net', 'Språket som Joomla! er programmert i', '2007-12-14 21:27:53', 6, 1, 0, '0000-00-00 00:00:00', 4, 0, 1, 'target=0\n\n'),
(3, 2, 0, 'MySQL', 'mysql', 'http://www.mysql.com', 'Databasen som Joomla! bruker', '2007-12-14 21:28:12', 1, 1, 0, '0000-00-00 00:00:00', 6, 0, 1, 'target=0\n\n'),
(4, 2, 0, 'OpenSourceMatters', 'opensourcematters', 'http://www.opensourcematters.org', 'Hjemmesiden til OSM', '2007-12-14 21:27:31', 11, 1, 0, '0000-00-00 00:00:00', 3, 0, 1, 'target=0\n\n'),
(5, 2, 0, 'Joomla! -forumene', 'joomla-forumene', 'http://forum.joomla.org', 'Joomla! -forumene', '2007-12-14 21:27:58', 4, 1, 0, '0000-00-00 00:00:00', 5, 0, 1, 'target=0\n\n'),
(6, 2, 0, 'Ohloh Tracking of Joomla!', 'ohloh-tracking-of-joomla', 'http://www.ohloh.net/projects/20', 'Objektive rapporter fra Ohloh om Joomla!s utviklingsaktivitet. Joomla! har noen stjerneutviklere med seriøse «kudos».', '2007-12-14 21:29:35', 1, 1, 0, '0000-00-00 00:00:00', 7, 0, 1, 'target=0\n\n'),
(7, 2, 0, 'Joomla! i Norge', 'joomla-i-norge', 'http://www.joomlainorge.no/', 'Den norske brukerforeningen for Joomla! i Norge, som har gitt deg din norske utgave av Joomla!', '2007-12-14 21:27:03', 0, 1, 0, '0000-00-00 00:00:00', 2, 0, 1, 'target=0\n\n');
