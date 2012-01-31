
#
# Localise data for Norwegian Joomla! Pack
#

#
# Localise data for table `#__categories`
#

UPDATE `#__categories` SET `path` = 'ukategorisert', `title` = 'Ukategorisert', `alias` = 'ukategorisert' WHERE `title` = 'Uncategorised';

#
# Localise data for table `#__extensions`
#

UPDATE `#__extensions` SET `params` = '{"administrator":"nb-NO","site":"nb-NO"}' WHERE `name` = 'com_languages';
UPDATE `#__extensions` SET `params` = REPLACE(`params`, '"mode":"1"', '"mode":"2"') WHERE `name` = 'plg_editors_tinymce';
UPDATE `#__extensions` SET `params` = REPLACE(`params`, '"lang_mode":"0","lang_code":"en"', '"lang_mode":"1","lang_code":"nb"') WHERE `name` = 'plg_editors_tinymce';
UPDATE `#__extensions` SET `params` = REPLACE(`params`, '"format_date":"%Y-%m-%d"', '"format_date":"%d-%m-%Y"') WHERE `name` = 'plg_editors_tinymce';

INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`, `client_id`, `enabled`, `access`, `protected`, `manifest_cache`, `params`, `custom_data`, `system_data`, `checked_out`, `checked_out_time`, `ordering`, `state`) VALUES
(10000, 'NorskbokmlNorway', 'language', 'nb-NO', '', 0, 1, 0, 0, '{"legacy":false,"name":"Norsk bokm\\u00e5l (Norway)","type":"language","creationDate":"2012-01-24","author":"Joomla! i Norge","copyright":"Copyright (C) 2005 - 2012 Open Source Matters & Joomla! i Norge. All rights reserved.","authorEmail":"oversettelser@joomlainorge.no","authorUrl":"http:\\/\\/www.joomlainorge.no","version":"2.5.0","description":"Norwegian bokm\\u00e5l site language for Joomla! 2.5","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10001, 'NorskbokmlNorway', 'language', 'nb-NO', '', 1, 1, 0, 0, '{"legacy":false,"name":"Norsk bokm\\u00e5l (Norway)","type":"language","creationDate":"2012-01-24","author":"Joomla! i Norge","copyright":"Copyright (C) 2005 - 2012 Open Source Matters & Joomla! i Norge. All rights reserved.","authorEmail":"oversettelser@joomlainorge.no","authorUrl":"http:\\/\\/www.joomlainorge.no","version":"2.5.0","description":"Norwegian bokm\\u00e5l administrator language for Joomla! 2.5","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10002, 'nb-NO', 'package', 'pkg_nb-NO', '', 0, 1, 1, 0, '{"legacy":false,"name":"Norwegian Bokm\\u00e5l Language Pack incl. TinyMCE","type":"package","creationDate":"2012-01-28","author":"Joomla! i Norge","copyright":"","authorEmail":"oversettelser@joomlainorge.no","authorUrl":"http:\\/\\/www.joomlainorge.no","version":"2.5.0","description":"","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10003, 'TinyMCE - Norsk bokmål', 'file', 'TinyMCE_nb-NO', '', 0, 1, 0, 0, '{"legacy":false,"name":"TinyMCE - Norsk bokm\\u00e5l","type":"file","creationDate":"2012-01-24","author":"Joomla! i Norge","copyright":"(C) 2011 - 2012 Joomla! i Norge","authorEmail":"oversettelser@joomlainorge.no","authorUrl":"http:\\/\\/www.joomlainorge.no","version":"3.4.4","description":"","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0);

#
# Localise data for table `#__finder_terms_common`
#

# TODO

#
# Localise data for table `#__languages`
#

INSERT INTO `#__languages` (`lang_id`, `lang_code`, `title`, `title_native`, `sef`, `image`, `description`, `metakey`, `metadesc`, `sitename`, `published`, `ordering`) VALUES
(2, 'nb-NO', 'Norsk bokmål', 'Norsk bokmål', 'no', 'no', '', '', '', '', 1, 0);

#
# Localise data for table `#__menu`
#

UPDATE `#__menu` SET `menutype` = 'hovedmeny', `title` = 'Hjem', `alias` = 'Hjem' WHERE `id` = 101;

#
# Localise data for table `#__menu_types`
#

UPDATE `#__menu_types` SET `menutype` = 'hovedmeny', `title` = 'Hovedmeny', `description` = 'Hovedmenyen for siden' WHERE `id` = 1;

#
# Localise data for table `#__modules`
#

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

#
# Localise data for table `#__template_styles`
#

UPDATE `#__template_styles` SET `title` = 'Bluestork - Standard' WHERE `id` = 2;
UPDATE `#__template_styles` SET `title` = 'Atomic - Standard' WHERE `id` = 3;
UPDATE `#__template_styles` SET `title` = 'Beez2 - Standard' WHERE `id` = 4;
UPDATE `#__template_styles` SET `title` = 'Hathor - Standard' WHERE `id` = 5;
UPDATE `#__template_styles` SET `title` = 'Beez5 - Standard' WHERE `id` = 6;

#
# Localise data for table `#__usergroups`
#

UPDATE `#__usergroups` SET `title` = 'Offentlig' WHERE `id` = 1;
UPDATE `#__usergroups` SET `title` = 'Registrert' WHERE `id` = 2;
UPDATE `#__usergroups` SET `title` = 'Skribent' WHERE `id` = 3;
UPDATE `#__usergroups` SET `title` = 'Redaktør' WHERE `id` = 4;
UPDATE `#__usergroups` SET `title` = 'Utgiver' WHERE `id` = 5;
UPDATE `#__usergroups` SET `title` = 'Innholdsadministrator' WHERE `id` = 6;
UPDATE `#__usergroups` SET `title` = 'Systemadministrator' WHERE `id` = 7;
UPDATE `#__usergroups` SET `title` = 'Superadministrator' WHERE `id` = 8;

#
# Localise data for table `#__viewlevels`
#

UPDATE `#__viewlevels` SET `title` = 'Offentlig' WHERE `id` = 1;
UPDATE `#__viewlevels` SET `title` = 'Registrert' WHERE `id` = 2;
UPDATE `#__viewlevels` SET `title` = 'Spesiell' WHERE `id` = 3;

# -------------------------------------------------------
