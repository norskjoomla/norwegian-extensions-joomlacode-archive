<?php
/**
 * MjazTools Uploader for DOCMan
 * @version      $Id$
 * @package      mjaztools_dmuploader
 * @copyright    Copyright (C) 2007 MjazTools. All rights reserved.
 * @license      GNU/GPL
 */

// Misc.
define( '_DMU_CATEGORY',                    'Kategori' );
define( '_DMU_DESCRIPTION',                 'Beskrivelse' );
define( '_DMU_FILE_UPLOAD',                 'Filopplasting');
define( '_DMU_FILENAME',                    'Filnavn' );
define( '_DMU_KEYWORDS',                    'Nøkkelord' );
define( '_DMU_MB',                          'Mb'); // Megabyte
define( '_DMU_SHORTDESC',                   'Kort beskrivelse' );
define( '_DMU_TERMS_CONDITIONS',            'Betingelser' );
define( '_DMU_TITLE',                       'Tittel' );
define( '_DMU_USERNAME',                    'Brukernavn' );

// E-mail
define( '_DMU_MAIL_THANKS_FOR_UPLOADING',   'Takk for at du lastet opp en fil til' );
define( '_DMU_MAIL_UPLOAD_CONFIRMATION',    'Bekreftelse på opplasting' );
define( '_DMU_MAIL_USER_HAS_UPLOADED',      'En bruker har lastet opp en fil' );
define( '_DMU_MAIL_USER_HAS_UPLOADED_AT',   'En bruker har lastet opp en fil til' );

// Errors
define( '_DMU_ERROR_DOCMAN_INSTALLED',      'DOCMan must be installed and properly configured before using MjazTools Uploader');
define( '_DMU_ERROR_DOCMAN_VERSION',        'You need DOCMan v1.3 RC2 to use MjazTools Uploader. You have DOCMan v');
define( '_DMU_ERROR_FILENAME_CONTAINS_SPACES', 'Filnavn får ikke inneholde mellomrom, vennligst gi de et nytt navn før opplasting.' );
define( '_DMU_ERROR_FILETYPE',              'Denne filtypen er ikke tillatt, du kan bare laste opp en av følgende:');
define( '_DMU_ERROR_GENERAL',               'Generel feil.');
define( '_DMU_ERROR_MOVING_FILE',           'Problem med flytting av opplastet fil.');
define( '_DMU_ERROR_NO_VALID_FILENAME',     'Ingen gyldig filnavn angitt.');
define( '_DMU_ERROR_NO_VALID_FILENAMES',    'Ingen gyldige filnavn angitt.');
define( '_DMU_ERROR_STORING_DATA',          'Feil ved lagring av data.');
define( '_DMU_ERROR_TOO_BIG',               'Filen er for stor, maksimum filstørrelse er');
define( '_DMU_ERROR_UPLOADING',             'Feil ved opplasting av fil. Din fil var sansynligvis for stor, maksimum filstørrelse er');

// Labels
define( '_DMU_LABEL_ALL_FILETYPES',         'Allow all filetypes:');
define( '_DMU_LABEL_AUTO_APPROVE',          'Auto-godkjenn:');
define( '_DMU_LABEL_AUTO_PUBLISH',          'Auto-publiser:');
define( '_DMU_LABEL_CATEGORY',              'Kategori:');
define( '_DMU_LABEL_CONFIRMATION',          'Bekreftelse:');
define( '_DMU_LABEL_DESCRIPTION',           'Beskrivelse:');
define( '_DMU_LABEL_EMAIL_ADMIN',           'E-post til administrator:');
define( '_DMU_LABEL_EMAIL_USER',            'E-post til bruker:');
define( '_DMU_LABEL_FILENAME_RULES',        'Følg filnavnregler i DOCMan');
define( '_DMU_LABEL_FILETYPES',             'Tillatte filtyper:' );
define( '_DMU_LABEL_INTRO_TEXT',            'Innledende tekst:');
define( '_DMU_LABEL_KEYWORDS',              'Nøkkelord:');
define( '_DMU_LABEL_MAX_FILESIZE',          'Maksimum filstørrelse:');
define( '_DMU_LABEL_MUST_AGREE',            'Bruker må akseptere:');
define( '_DMU_LABEL_NAME',                  'Navn:');
define( '_DMU_LABEL_SAVE',                  'Lagre');
define( '_DMU_LABEL_SELECT_FILE',           'Velg fil som skal lastes opp:');
define( '_DMU_LABEL_SHORTDESC',             'Kort beskrivelse:');
define( '_DMU_LABEL_TERMS',                 'Betingelser:');
define( '_DMU_LABEL_UPLOAD_FILE',           'Last opp fil');

// Messages
define( '_DMU_MSG_CONFIGURATION_SAVED',     'Konfigurasjon lagret' );
define( '_DMU_MSG_CONTINUE',                'Fortsett' );
define( '_DMU_MSG_FILL_IN_NAME_AND_CAT',    'Du må fylle inn et navn og velge en kategori' );
define( '_DMU_MSG_I_AGREE',                 'Jeg aksepterer' );
define( '_DMU_MSG_I_DONT_AGREE',            'Jeg aksepterer ikke' );
define( '_DMU_MSG_YOU_MUST_AGREE_1',        'Du må akseptere ' ); // You must agree to the terms and conditions before you can continue
define( '_DMU_MSG_YOU_MUST_AGREE_2',        ' før du kan fortsette.' ); // You must agree to the terms and conditions before you can continue

// Tabs
define( '_DMU_TAB_CONFIRM',                 'Bekreftelse');
define( '_DMU_TAB_CHANGELOG',               'Endringslogg');
define( '_DMU_TAB_GENERAL',                 'Generelt');
define( '_DMU_TAB_INTRO',                   'Innledning');
define( '_DMU_TAB_README',                  'Lesmeg');
define( '_DMU_TAB_TERMS',                   'Betingelser');

// Tooltips
define( '_DMU_TOOLTIP_ALL_FILETYPES',       'All fileypes. Overrides the previous field');
define( '_DMU_TOOLTIP_AUTO_APPROVE',        'Automatically approve uploaded documents');
define( '_DMU_TOOLTIP_AUTO_PUBLISH',        'Automatically publish uploaded documents');
define( '_DMU_TOOLTIP_EMAIL_ADMIN',         'Send a notification e-mail to this address or leave blank to disable it.');
define( '_DMU_TOOLTIP_EMAIL_USER',          'Send a confirmation/thank you e-mail to the user.');
define( '_DMU_TOOLTIP_FILENAME_RULES',      'This will change the name of the uploaded file according to the rules (lowercase, filenames with blanks) set in DOCMan-&gt;Configuration-&gt;Upload.');
define( '_DMU_TOOLTIP_FILETYPES',           'Filetypes separated by');
define( '_DMU_TOOLTIP_INFO_CONFIRM',        'Confirmation text, shown after the uploading process is complete.');
define( '_DMU_TOOLTIP_INFO_INTRO',          'You can use the following tags: {max_filesize}, {filetypes}');
define( '_DMU_TOOLTIP_MAX_FILESIZE',        'Maximum filesize for uploads in Mb. *NOTE* The actual upload limit is determined by your PHP configuration.');
define( '_DMU_TOOLTIP_MUST_AGREE',          'The user must agree to these terms before he can continue.');

// UploadProgressMeter
define( '_DMU_PROGMETER_COMPLETE',          'Fullført' );
define( '_DMU_PROGMETER_CONNECTING',        'Kobler til' );
define( '_DMU_PROGMETER_IN_PROGRESS',       'Pågår' );
define( '_DMU_PROGMETER_INTERNAL',          'Opplasting feilet, internal error' );
define( '_DMU_PROGMETER_NO_FILE',           'Opplasting feilet, ingen fil opplastet' );
define( '_DMU_PROGMETER_PARTIAL',           'Opplasting feilet, fil delvis opplastet' );
define( '_DMU_PROGMETER_TOO_BIG',           'Opplasting feilet, fil er for stor' );
define( '_DMU_PROGMETER_UNKNOWN_ERROR',     'Opplasting feilet, ukjent feil' );
define( '_DMU_PROGMETER_UPLOAD_COMPLETE',   'Opplasting fullført' );
