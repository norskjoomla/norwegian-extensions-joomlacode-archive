# $Id$
#
# Localise data for Full Norwegian Joomla! Distro
# Please ensure that the used ID in queries are matching those in joomla.sql
#
# If merged with joomla.sql/joomla_backward.sql or sample_data.sql,
# put at the bottom of joomla.sql/joomla_backwards.sql, and on top of the sample_data.sql
#
# -------------------------------------------------------

--
-- Localise data for table `#__categories`
--

-- Translate title etc. on all Uncategorised categories to suit your language
UPDATE `#__categories` SET `path` = 'ukategorisert', `title` = 'Ukategorisert', `alias` = 'ukategorisert' WHERE `title` = 'Uncategorised';

--
-- Localise data for table `#__extensions`
--

-- Set default core language to your language, for both admin and site
UPDATE `#__extensions` SET `params` = '{"administrator":"nb-NO","site":"nb-NO"}' WHERE `name` = 'com_languages';

-- Set TinyMCE to Extended Mode - OPTIONAL
UPDATE `#__extensions` SET `params` = REPLACE(`params`, '"mode":"1"', '"mode":"2"') WHERE `name` = 'plg_editors_tinymce';

-- Set TinyMCE Automatic Language Selection to Yes - OPTIONAL
-- Note! You should only use Automatic Language Selection if you have all the installed core languages also in TinyMCE
UPDATE `#__extensions` SET `params` = REPLACE(`params`, '"lang_mode":"0"', '"lang_mode":"1"') WHERE `name` = 'plg_editors_tinymce';

-- Set TinyMCE Language Code as default
UPDATE `#__extensions` SET `params` = REPLACE(`params`, '"lang_code":"en"', '"lang_code":"nb"') WHERE `name` = 'plg_editors_tinymce';

-- Set your date format in TinyMCE
UPDATE `#__extensions` SET `params` = REPLACE(`params`, '"format_date":"%Y-%m-%d"', '"format_date":"%d-%m-%Y"') WHERE `name` = 'plg_editors_tinymce';

-- Add your language packs data
-- Note! Remember to add the Manifest files to the right Maifests folder (administrator/manifests/..)
INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`, `client_id`, `enabled`, `access`, `protected`, `manifest_cache`, `params`, `custom_data`, `system_data`, `checked_out`, `checked_out_time`, `ordering`, `state`) VALUES
(10000, 'NorskbokmlNorway', 'language', 'nb-NO', '', 0, 1, 0, 0, '{"legacy":false,"name":"Norsk bokm\\u00e5l (Norway)","type":"language","creationDate":"2012-02-02","author":"Joomla! i Norge","copyright":"Copyright (C) 2005 - 2012 Open Source Matters & Joomla! i Norge. All rights reserved.","authorEmail":"oversettelser@joomlainorge.no","authorUrl":"http:\\/\\/www.joomlainorge.no","version":"2.5.1","description":"Norwegian bokm\\u00e5l site language for Joomla! 2.5","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10001, 'NorskbokmlNorway', 'language', 'nb-NO', '', 1, 1, 0, 0, '{"legacy":false,"name":"Norsk bokm\\u00e5l (Norway)","type":"language","creationDate":"2012-02-02","author":"Joomla! i Norge","copyright":"Copyright (C) 2005 - 2012 Open Source Matters & Joomla! i Norge. All rights reserved.","authorEmail":"oversettelser@joomlainorge.no","authorUrl":"http:\\/\\/www.joomlainorge.no","version":"2.5.1","description":"Norwegian bokm\\u00e5l administrator language for Joomla! 2.5","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10002, 'nb-NO', 'package', 'pkg_nb-NO', '', 0, 1, 1, 0, '{"legacy":false,"name":"Norwegian Bokm\\u00e5l Language Pack incl. TinyMCE","type":"package","creationDate":"2012-02-02","author":"Joomla! i Norge","copyright":"","authorEmail":"oversettelser@joomlainorge.no","authorUrl":"http:\\/\\/www.joomlainorge.no","version":"2.5.1","description":"","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10003, 'TinyMCE - Norsk bokmål', 'file', 'TinyMCE_nb-NO', '', 0, 1, 0, 0, '{"legacy":false,"name":"TinyMCE - Norsk bokm\\u00e5l","type":"file","creationDate":"2012-01-24","author":"Joomla! i Norge","copyright":"(C) 2011 - 2012 Joomla! i Norge","authorEmail":"oversettelser@joomlainorge.no","authorUrl":"http:\\/\\/www.joomlainorge.no","version":"3.4.4","description":"","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0);

--
-- Localise data for table `#__finder_terms_common`
--

-- Add Common Terms for your language - OPTIONAL
-- Look at joomla.sql for more examples on terms
REPLACE INTO `#__finder_terms_common` (`term`, `language`) VALUES
('og', 'nb'),
('i', 'nb'),
('på', 'nb'),
('den', 'nb');

--
-- Localise data for table `#__languages`
--

-- Add your Content Language - OPTIONAL
-- Really only needed for Multilingual sites, but it does no harm to add it
-- You can truncate the table first, and insert your content language with lang_id and ordering 1
TRUNCATE `#__languages`;
INSERT INTO `#__languages` (`lang_id`, `lang_code`, `title`, `title_native`, `sef`, `image`, `description`, `metakey`, `metadesc`, `sitename`, `published`, `ordering`) VALUES
(1, 'nb-NO', 'Norsk bokmål', 'Norsk bokmål', 'no', 'no', '', '', '', '', 1, 1),
(2, 'en-GB', 'English (UK)', 'English (UK)', 'en', 'en', '', '', '', '', 1, 0);

--
-- Localise data for table `#__menu`
--

-- Translate title etc. on the Home Menu Item to suit your language
UPDATE `#__menu` SET `menutype` = 'hovedmeny', `title` = 'Hjem', `alias` = 'Hjem' WHERE `id` = 101;

--
-- Localise data for table `#__menu_types`
--

-- Translate title etc. on the Main Menu to suit your language
UPDATE `#__menu_types` SET `menutype` = 'hovedmeny', `title` = 'Hovedmeny', `description` = 'Hovedmenyen for siden' WHERE `id` = 1;

--
-- Localise data for table `#__modules`
--

-- Translate title etc. on the Modules to suit your language
UPDATE `#__modules` SET `title` = 'Hovedmeny', `params` = REPLACE(`params`, '"menutype":"mainmenu"', '"menutype":"hovedmeny"') WHERE `id` = 1;
UPDATE `#__modules` SET `title` = 'Innloggingsskjema' WHERE `id` = 2;
UPDATE `#__modules` SET `title` = 'Populære artikler' WHERE `id` = 3;
UPDATE `#__modules` SET `title` = 'Nyeste artikler' WHERE `id` = 4;
UPDATE `#__modules` SET `title` = 'Verktøylinje' WHERE `id` = 8;
UPDATE `#__modules` SET `title` = 'Hurtigknapper' WHERE `id` = 9;
UPDATE `#__modules` SET `title` = 'Innloggede brukere' WHERE `id` = 10;
UPDATE `#__modules` SET `title` = 'Administratormeny' WHERE `id` = 12;
UPDATE `#__modules` SET `title` = 'Administrator-undermeny' WHERE `id` = 13;
UPDATE `#__modules` SET `title` = 'Brukerstatus' WHERE `id` = 14;
UPDATE `#__modules` SET `title` = 'Tittel' WHERE `id` = 15;
UPDATE `#__modules` SET `title` = 'Brukerkonto' WHERE `id` = 16;
UPDATE `#__modules` SET `title` = 'Brødsmuler', `params` = REPLACE(`params`, '"homeText":"Home"', '"homeText":"Hjem"') WHERE `id` = 17;
UPDATE `#__modules` SET `title` = 'Flerspråklig status' WHERE `id` = 79;

--
-- Localise data for table `#__template_styles`
--

-- Translate title on the Templates to suit your language
UPDATE `#__template_styles` SET `title` = 'Bluestork - Standard' WHERE `id` = 2;
UPDATE `#__template_styles` SET `title` = 'Atomic - Standard' WHERE `id` = 3;
UPDATE `#__template_styles` SET `title` = 'Beez2 - Standard' WHERE `id` = 4;
UPDATE `#__template_styles` SET `title` = 'Hathor - Standard' WHERE `id` = 5;
UPDATE `#__template_styles` SET `title` = 'Beez5 - Standard' WHERE `id` = 6;

--
-- Localise data for table `#__usergroups`
--

-- Translate title on the User Groups to suit your language
UPDATE `#__usergroups` SET `title` = 'Offentlig' WHERE `id` = 1;
UPDATE `#__usergroups` SET `title` = 'Registrert' WHERE `id` = 2;
UPDATE `#__usergroups` SET `title` = 'Skribent' WHERE `id` = 3;
UPDATE `#__usergroups` SET `title` = 'Redaktør' WHERE `id` = 4;
UPDATE `#__usergroups` SET `title` = 'Utgiver' WHERE `id` = 5;
UPDATE `#__usergroups` SET `title` = 'Innholdsadministrator' WHERE `id` = 6;
UPDATE `#__usergroups` SET `title` = 'Systemadministrator' WHERE `id` = 7;
UPDATE `#__usergroups` SET `title` = 'Superadministrator' WHERE `id` = 8;

--
-- Localise data for table `#__viewlevels`
--

-- Translate title on the Viewing Access Levels to suit your language
UPDATE `#__viewlevels` SET `title` = 'Offentlig' WHERE `id` = 1;
UPDATE `#__viewlevels` SET `title` = 'Registrert' WHERE `id` = 2;
UPDATE `#__viewlevels` SET `title` = 'Spesiell' WHERE `id` = 3;
