<?php
// XHTMLSuite
// $Id$
/**
* @ Package XHTMLSuite
* @ Copyright © 2004, 2005 Bernhard Pfeifer - www.xhtmlsuite.com
* @ All rights reserved
* @ Version $Revision: 1.3 $
**/
DEFINE('_GENERATE_EDITOR','Generer en tekstbehandler til');
DEFINE('_CODE_SNIPPETS','Kodesnutter');
DEFINE('_SPECIAL_TAGS','Spesielle tagger');
DEFINE('_REMOVE_TAG','Fjern tagg');
DEFINE('_CITE_TAG','Cite');
DEFINE('_CODE_TAG','Kode');
DEFINE('_DFN_TAG','Definisjon');
DEFINE('_KBD_TAG','Keyboard Input');
DEFINE('_SAMP_TAG','Eksempeltekst');
DEFINE('_TT_TAG','Teletype');
DEFINE('_VAR_TAG','Variabel');
DEFINE('_URL_WARNING', 'XHTMLSuite Advarsel!\n\nDu kobler ikke til din nettside via den konfigurerte Live Site-adressen.\nSince your browser will try to prevent cross domain script operations, the editor won\'t function properly.\n\nYour actual Live Site URL:\n' . $mosConfig_live_site . ' (this is where you should be)\n\n\nCurrently accessed URL:\nhttp://' . $_SERVER["HTTP_HOST"] . ' (this is where you actually are)\n\n\nDo you want to be redirected to your actual Live Site URL?');
DEFINE('_LOADING_EDITOR', 'Laster tekstbehandler...');
?>