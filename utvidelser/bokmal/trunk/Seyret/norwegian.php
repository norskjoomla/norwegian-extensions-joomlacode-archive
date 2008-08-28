<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

//Seyret Component v.0.2.6//
/**
* Content code
* @package SEYRET
* @Copyright (C) 2006 Mustafa DINDAR
* @ All rights reserved
* @ seyret Component is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @version 0.2.6
**/	
DEFINE("_COMPONENT_NAME","Seyret-Video system");
DEFINE("_JUMPTO","Gå til");
DEFINE("_VIDEOLISTHEADERPRE","Videoer i \"");
DEFINE("_VIDEOLISTHEADERSUF","\" kategori");
DEFINE("_HIT","Treff");
DEFINE("_VIDEOTITLE","Tittel");
DEFINE("_DETAILS","Beskrivelse");
DEFINE("_RATING","Vurdering");
DEFINE("_NUMBEROFVOTE","Stemmer");
DEFINE("_NOVOTE","Ingen stemmer");
DEFINE("_LOGINFORVOTE","Du må logge deg inn for å stemme!");
DEFINE("_THANKSFORVOTE","Takk for din stemme!");
DEFINE("_WAITAMOMENT","Vent et øyeblikk!");
DEFINE("_TOPLEVEL","Forsidevideo");
DEFINE("_VIDEOGROUPTITLE","Videokategorier");
DEFINE("_CATEGORIES","Kategorier");
DEFINE("_VIDEOS","Videoer");
//DEFINE("_GENERALCONFIG","Generelt");
DEFINE("_EXPANDALL","Utvid alle");
DEFINE("_CLOSEALL","Lukk alle");
DEFINE("_VIDEO_CATEGORIES","Videokategorier");
DEFINE("_VIDEOCAT_CODE","Kategorikode");
DEFINE("_VIDEOCAT_NAME","Kategorinavn");
DEFINE("_VIDEOCAT_PARENT","Overkategori");
DEFINE("_EDIT_CATEGORY","Rediger kategori");
DEFINE("_NEW_CATEGORY","Ny kategori");
DEFINE("_NEWVIDEOCATCOMMENT","Here, you can create new video categories. Please don't forget to select parent category if this is a subcategory.");
DEFINE("_DEVELOPER","Utvikler");
DEFINE("_INFO","Info");
DEFINE("_SEYRETTHANKS","Takk til");
DEFINE("_VERSION_INFO","Versjon");
DEFINE("_COPYRIGHT","Kopirett");
DEFINE("_LICENSE","Lisens");
DEFINE("_YOUTUBEID","YouTube Developer Id");
DEFINE("_YOUTUBEIDINFO","Here you should enter your <b>YouTube Developer ID</b> in order to fully use the component's functionality. The component pulls its video info from YouTube using this ID. If you don't enter this ID, you will manually have to enter all information like thumbnail address, server code, etc.");
DEFINE("_TITLELENGTH","Title Length");
DEFINE("_TITLELENGTHINFO","Please enter the title length to be used in the video listing. You can change this value to find the optimum length, depending on your template.");
DEFINE("_DETAILSLENGTH","Details Length");
DEFINE("_DETAILSLENGTHINFO","Please enter the details length to be used in the video listing. You can change this value to find the optimum length, depending on your template.");
DEFINE("_CONFIG_OK","Configuration saved!");
DEFINE("_CONFIG_ERR","Error: Configuration couldn't be saved!");
DEFINE("_VIDEOWIDTH","Videobredde");
DEFINE("_VIDEOWIDTHINFO","Video width in front end. You can change this value to find the optimum width, depending on your template.");
DEFINE("_VIDEOHEIGHT","Video Height");
DEFINE("_VIDEOHEIGHTINFO","Video height in front page. You can change this value to find the optimum height, depending on your template.");
DEFINE("_VIDEO_LIST","Video liste");
DEFINE("_VTHUMB","Miniatyrbilde");
DEFINE("_VIDEO","Video");
DEFINE("_EDIT_VIDEO","Rediger Video");
DEFINE("_NEW_VIDEO","Ny Video");
DEFINE("_VSERVERTYPE","Server Type");
DEFINE("_VSERVERCODE","Server Code");
DEFINE("_NEWVIDEOCOMMENT","The best way to add a new video is through the front end with admin login. From there, you will only need to enter the video link and the system will automatically retrieve all the video information. In the back end, you will need to manually enter all video information.");
DEFINE("_APPLY","Apply");
DEFINE("_SAVE","Save");
DEFINE("_INPUTLINK","Input Link");

//Version 0.2=============================================================================================

DEFINE("_ISTHISFRESHINSTALL","Seyret database tables are not available.<br><strong>Be careful to avoid data loss.</strong><br>");
DEFINE("_IFTHISISFRESHINSTALL","IF THIS IS FRESH INSTALL");
DEFINE("_IFTHISISUNINSTALL","IF YOU WANT TO UNINSTALL COMPONENT");
DEFINE("_THISWILLDROPTABLES","To complete installation, just click on the picture below.");
DEFINE("_INSTALLATTENTION","<strong>In this operation all data tables will be replaced.</strong>."); 
DEFINE("_FRESHINSTALLSUCCESS","Seyret Database Installed Successfully.");
DEFINE("_UNINSTALLEXPL","You have successfully removed all Seyret database tables.<br><br>Don't forget to also uninstall Seyret from the Joomla component manager.");
//DEFINE("_THISISANUPDATEINFO","It looks like you are upgrading the Seyret component.<br><b>Unfortunately, this time we will not protect old Seyret database, so you will lose all video items.<br>We will provide a database upgrade feature in future releases.</b>");
DEFINE("_THISISANUPDATE","UPGRADE");
DEFINE("_JOOMLAALEMMESSAGE","Joomlaholic Board");
DEFINE("_YOUDONTWANTTRACKING","You did not grant permission for message feeding. This means that you will not get any release or security anouncements here. We advice you to open message feeding from the Configuration Panel.");
DEFINE("_VERSIONTRACKINGINFO","<b>Here you can select whether to open Joomlaholic messages or not.<br><br>If you select yes, the system will connect to the Joomlaholic server and automatically retrieve a new Joomlaholic user ID for your site. <br><br>You will then be able to see Joomlaholic messages in your admin panel and will be notified of new versions or security updates.<br><br>Your Joomlaholic user ID will also be used for the video download feature.<br><br>If you choose not to recieve these notifications, the system will not connect to the Joomlaholic servers.<b>");
DEFINE("_PLEASESELECTTRACKINGCHOICE","PLEASE SELECT");
DEFINE("_THEME","Theme");
DEFINE("_THEMEINFO","Please select the Seyret component theme that you want to use in your site.");
DEFINE("_ADDVIDEO","Legg til");
DEFINE("_PENDINGVID","Pending Videos");
DEFINE("_SORTBY","Ordne etter");
DEFINE("_NOSERVERFOUNDREPORTIT","Sorry but we couldn't find any appropriate video server that fits your video link. If you are sure that video link is true, contact your site administrator.");
DEFINE("_ADDEDBY","Lagt inn av");
DEFINE("_ADDEDDATE","Dato");
//DEFINE("_YOUSHOULDLOGINTOADDVIDEO","You should login to add videos.");
DEFINE("_ASCENDING","Nyeste først");
DEFINE("_DESCENDING","Eldste først");
DEFINE("_POPUPVIDEOWIDTH","Popup video width");
DEFINE("_POPUPVIDEOHEIGHT","Popup video height");
DEFINE("_DEFAULTSORTBY","Default video sort");
DEFINE("_DEFAULTSORT","Default sort order");
DEFINE("_POPUPVIDEOWIDTHINFO","Please define the video width for the popup window here. Window dimensions will be 100px greater than the embedded video dimensions.");
DEFINE("_POPUPVIDEOHEIGHTINFO","Please define the video height for the popup window here.");
DEFINE("_DEFAULTSORTBYINFO","Please select default sort-by criteria."); 
DEFINE("_DEFAULTSORTINFO","Please select default sort type, ascending or descending."); 
DEFINE("_THISAREAISONLYFORREGISTEREDUSERS","Only registered users can download videos. Please login or register.");  
//DEFINE("_COPYTHISLINK","Copy link");  
DEFINE("_YOURUSERIDRESTORED","Your user ID was successfully restored!");   
DEFINE("_YOURUSERIDGENERATED","Your user ID was successfully generated!");   
DEFINE("_YOURUSERIDPROBLEM","It looks like there is a problem with your Joomlaholic user ID, so it is purged from the database. This may occur when you move your site. Refresh page to get a new Joomlaholic user ID.");  
DEFINE("_YOUDONTHAVEADMINISTRATORRIGHTS","You don't have administrator or editor permissions! If you do have these permissions and still get this message, you may be having ACL problems. To check pending videos, you may also use the administrator backend.");
DEFINE("_IFPUBLISHED","Publish Status");
DEFINE("_YES","Ja");
DEFINE("_NO","Nei");
DEFINE("_ENABLEDOWNLOADS","Enable Downloads");
DEFINE("_ENABLEDOWNLOADSINFO"," This is a pro version feature. If your Seyret is not pro, download option will not work.");
DEFINE("_JALEMUSERID","Joomlaholic User ID"); 
DEFINE("_JALEMUSERIDINFO","Your site's Joomlaholic user ID. This will be used in all Joomlaholic operations."); 
DEFINE("_DONATIONS","Donations"); 
DEFINE("_DONATIONHEADER","Donations"); 
DEFINE("_YOUHAVENTDONATEDYET","It looks like you have not yet made a donation.");
DEFINE("_YOUHAVENTDONATEDSTEP1","<b>Step-1: </b> Click one of the Paypal logos with your donation amount and go to Paypal Donation Page. In the Paypal page, your Joomlaholic user ID will be included.");
DEFINE("_YOUHAVENTDONATEDSTEP2","<b>Step-2: </b>After you've made a donation, please enter the amount below and click submit. <p><b>This will inform us about your donation.</b>  After your post, video downloads will be enabled automatically until we check our account. If your donation is valid, it will be approved, otherwise it will be rejected and your video download feature will be disabled."); 
DEFINE("_SUBMIT","Submit and enable downloads"); 
DEFINE("_INFORMJOOMLAALEM","Inform Joomlholic About Donation Amount: "); 
DEFINE("_YOURDONATIONAPPROVED","Your donation is approved. You can go on using the download option now. <p>Thank you for your donation."); 
DEFINE("_YOURDONATIONPENDING","Your donation report is pending. You can now go into the Configuration menu to enable the download option. <p>If your donation does not get approved, the download option will again be disabled for your site. <p>Thank you for your donation."); 
DEFINE("_YOURDONATIONREJECTED","Your donation report is rejected. <p>Unfortunately we couldn't approve your donation. <p>If you think this is a mistake, please contact us via email."); 
DEFINE("_UNINSTALL","Uninstall"); 
DEFINE("_CAUTION","Caution"); 
DEFINE("_CAUTIONUNINSTALL2","This operation will permanently remove all Seyret database tables.<p>If you are sure you want to remove the Seyret database tables, click the image below."); 
DEFINE("_CAUTIONUNINSTALL3","This operation will only uninstall the Seyret database tables. After that, you should remove the Seyret Component using the Joomla Component Install/Uninstall Manager to complete uninstallation."); 
DEFINE("_UNINSTALLDATABASESUCCESS","Seyret Database Tables were successfully removed!");
DEFINE("_NOJALEMUSERID","You don't have a valid Joomlaholic user ID!<p>You can not contact Joomlaholic without a valid user ID.<p>Message feeding is probably disabled. You can enable message feeding from the configuration panel.<p>Your user ID will then automatically be generated.");
DEFINE("_MESSAGEFEED","Message Feed"); 
DEFINE("_MESSAGEFEEDINFO","Here you can select the message feed status. If you don't have a Joomlaholic user ID, we'd advice you to get one. If you enable message feeds, you will automatically recieve a user ID for your site. Even if you disable tracking, your user ID will not be deleted. Also, if you completely reinstall Seyret, your old user ID will be restored from the Joomlaholic servers."); 
DEFINE("_ENABLED","Enabled"); 
DEFINE("_DISABLED","Disabled"); 
DEFINE("_VIDEOCOUNTINVLIST","Video #");
DEFINE("_VIDEOCOUNTINVLISTINFO","Here you can define the number of videos that are shown in the video list on the front page.");
DEFINE("_DELETEVIDEOCONFIRMMESSAGE","This video will be deleted permanently. Are you sure?"); 
DEFINE("_DELETETHISVIDEO","Delete this video");
DEFINE("_PUBLISH","Publish");  
//that's enough for 0.2. Let's leave something to 0.3 :)

//0.2.1 start
DEFINE("_PUBLISHED","Published");  
DEFINE("_UPLOADVIDEO","Upload Video"); 
DEFINE("_UPLOADVIDEOINFORM","<b>*</b>Here you can upload your videos. Please do not upload videos that are not suitable for this site.<br/><b>The system can only handle FLV, MPG, WMV, AVI, MP3 and SWF files, all other file types are automatically rejected by the system.</b>"); 
DEFINE("_UPLOADANDGOTONEXT","Upload and go to the next step"); 
DEFINE("_UPLOADTHUMBNAILINFORM","<b>2-</b> You can upload a thumbnail for your video. Try to upload a thumbnail that represents your video well.<br/><b>Thumbnails can be GIF, JPG or PNG files.</b><br/>Don't forget to check the box below if you do not have a thumbnail for this video."); 
DEFINE("_NOTHUMBNAILFORTHISVIDEO","I will not upload a thumbnail for my video."); 
DEFINE("_COPY","Copy");  
DEFINE("_THISISANUPDATEINFO","It looks like you are upgrading the Seyret component.<br><b>Although yhe upgrade script will not drop your Seyret database tables,<br>we do advice you to backup your database as a security measure.</b>");
DEFINE("_DBVERSION_INFO","Old version"); 
DEFINE("_NEWVERSION_INFO","You will upgrade to version"); 
DEFINE("_PROCEEDUPGRADE","To proceed with the upgrade operation, just click the image below"); 
DEFINE("_UPGRADEATTENTION","If you think that something went wrong after the upgrade, please restore your tables from your backup files and inform us at www.joomlaholic.com"); 
DEFINE("_UPGRADESUCCESS","Seyret was successfully upgraded!");  
DEFINE("_USERSUPLOADVIDEO","Users can upload video");  
DEFINE("_USERSUPLOADVIDEOINFO","Please define your user upload permissions.");  
DEFINE("_VIDEOMAXSIZE","Maximum video size");  
DEFINE("_VIDEOMAXSIZEINFO","Maximum size for user video uploads in <b>MBytes</b>. This value should be an integer. Also pay attention to php.ini upload limits.");  
DEFINE("_THUMBMAXSIZE","Maximum thumbnail size");  
DEFINE("_THUMBMAXSIZEINFO","Maximum size for user thumbnail uploads in <b>MBytes</b>.  This value should be an integer. Also pay attention to php.ini upload limits.");  
DEFINE("_RESIZETHUMBWIDTH","Resize Thumbnail Width"); 
DEFINE("_RESIZETHUMBWIDTHINFO","Uploaded video thumbnails will be resized. This value defines the width of the thumbnail."); 
DEFINE("_EMBEDBOXWIDTH","Embed Box Width"); 
DEFINE("_EMBEDBOXWIDTHINFO","This value defines the width of the embed link box and the copy link box."); 
DEFINE("_ADDVIDEOINFO","Please copy and paste your video links into the inputbox and click the 'Apply' button.<b>Please make sure that the video link is correctly formatted.</b>Click the 'Save' button when ready. For more information, please visit the help page."); 

// please delete or comment  _THISISANUPDATEINFO line on 80
// pay attention, in  line 115 $3 is changed to $7
//0.2.3. end

//====================================================================================
//0.2.4
DEFINE("_ADMANAGEMENT","Ad Management"); 
DEFINE("_TOP","Topp"); 
DEFINE("_ADLINK","Ad Link"); 
DEFINE("_REMOTESERVERFILES","File list on ads server"); 
DEFINE("_NEWADCOMMENT","Select category for the ad. You can also enter a flv link that is not listed in select list."); 
DEFINE("_REMOTESERVERADDRESS","Your remote server ads directory"); 
DEFINE("_AD","Video Ads"); 
DEFINE("_NEW_AD","New Ad"); 
DEFINE("_EDIT_AD","Edit Ad"); 
DEFINE("_PARENT","Parent"); 

//0.2.5
DEFINE("_VIDEOURL","URL");  
DEFINE("_VIDEOEMBEDCODE","Embed"); 
DEFINE("_VOTEIT","Gi vurdering");
DEFINE("_LOGINTOVOTE","Login to vote");
DEFINE("_GENERALCONFIG","General"); //comment line 31
DEFINE("_CONFIG","Configuration"); 
DEFINE("_ADSCONFIG","Ads");
DEFINE("_EXTRAS","Extras");
DEFINE("_WRITEHELP","Write Help");
DEFINE("_SNIPPETS","HTML Snippet");
DEFINE("_WRITEHELPCOMMENT","If you want to use the help system, you can create your own help page.");
DEFINE("_SNIPPETCOMMENT","If you want to use a snippet after the video embed code, you can enter it here.");
DEFINE("_REPORTVIDEOINFORM","Please enter the reason of your report. Our moderators will review your report shortly.");
DEFINE("_VIDEOID","Video ID");
DEFINE("_REPORTEDBY","Reported By");
DEFINE("_REPORTEDDATE","Report Date");
DEFINE("_REPORTCOMMENT","Report Reason");
DEFINE("_REPORTREPLY","Reply");

//line 115,148,150 changed

//0.2.6 -------------------starts
DEFINE("_VIDEOSINALLCATEGORIES","Videoer"); 
DEFINE("_VIDEOCAT","Kategori"); 
DEFINE("_SEARCH","Søk"); 
DEFINE("_DISPLAY","Display"); 
DEFINE("_PERMISSIONS","Permissions"); 
DEFINE("_SYSTEM","System"); 
DEFINE("_USERSCREENNAME","Displayed User Name"); 
DEFINE("_USERSCREENNAMECOMMENT","You can define what name to display: username or real name."); 
DEFINE("_USEREMOTESERVERSUPPORT","Use remote server"); 
DEFINE("_USEREMOTESERVERSUPPORTINFO","You can select remote server support here. This is not a very complete feature. Will be worked on. It is primarily designed for ad usage."); 
DEFINE("_REMOTESERVERADSDIRECTORY","Remote Ads Directory"); 
DEFINE("_REMOTESERVERADSDIRECTORYINFO","Define your remote server ads directory here. Make sure that this address contains the special index.php that comes with this component."); 
DEFINE("_REMOTESERVERVIDEOSDIRECTORY","Remote Videos Directory"); 
DEFINE("_REMOTESERVERVIDEOSDIRECTORYINFO","Define your remote server ads directory here. Make sure that this address contains the special index.php that comes with this component."); 
DEFINE("_REMOTESERVERCHECKSTRING","Remote Check String"); 
DEFINE("_REMOTESERVERCHECKSTRINGINFO","This is a security string that prevents unauthorized directory listings. Change this string in your remote index.php too."); 
DEFINE("_PLEASESELECT","Please select...");
DEFINE("_SUPERADMINRIGHTS","Super Administrator Rights");
DEFINE("_SUPERADMINRIGHTSINFO","Super Administrators have full permissions. There will be no restrictions for them.");
DEFINE("_RIGHTS","Seyret Access Rights");
DEFINE("_CANSEEADMINTOOLBAR","Can see admin toolbar");
DEFINE("_CANSEEREPORTEDVIDESBUTTON","Can see reported videos button");
DEFINE("_CANSEEPENDINGVIDESBUTTON","Can see pending videos button");
DEFINE("_CANSEEADDVIDEOSBUTTON","Can see add videos button");
DEFINE("_CANADDVIDEOS","Can add videos");
DEFINE("_CANSEEUPLOADVIDEOSBUTTON","Can see upload videos button");
DEFINE("_CANUPLOADVIDEOS","Can upload videos");
DEFINE("_CANSEEMYVIDEOSBUTTON","Can see my videos button");
DEFINE("_CANSEEFEATUREDVIDEOSBUTTON","Can see featured videos button");
DEFINE("_CANSEESEARCHVIDEOSBUTTON","Can see search button");
DEFINE("_CANSEEHELPBUTTON","Can see help button");
DEFINE("_CANSEEDELETEVIDEOBUTTON","Can see delete video button");
//DEFINE("_CANDELETEVIDEO","Can delete videos");
// DEFINE("_CANSEEEDITVIDEOBUTTON","Can see edit video button");
// DEFINE("_CANEDITVIDEO","Can edit video");
DEFINE("_CANSEEFULLSCREENBUTTON","Can see full screen button");
DEFINE("_CANSEEDOWNLOADBUTTON","Can see download button");
DEFINE("_CANDOWNLOADVIDEO","Can download video");
DEFINE("_CANSEEREPORTBUTTON","Can see report button");
DEFINE("_CANREPORTVIDEOS","Can report videos");
DEFINE("_CANSEEDIRECTLINKBOX","Can see direct link box");
DEFINE("_CANSEEEMBEDBOX","Can see embed box");
DEFINE("_CANSEEVOTESTARTS","Can see vote stars");
DEFINE("_CANVOTE","Can vote");
DEFINE("_CANSEECOMMENTS","Can see comments");
DEFINE("_SEYRETACL","Seyret Access Permissions");
DEFINE("_EDIT_SEYRETACL","Edit Seyret Access Permissions");
DEFINE("_NEW_SEYRETACL","New Seyret Access Permissions");
DEFINE("_JACLNAME","Joomla Access Level");
DEFINE("_ACLCOMMENT","Please use Joomla Access Level Names with great caution. It is very important to use lower case here, otherwise it will not work correctly. For example, it is Administrator in Joomla ACL but here you should write administrator. You should at least create a 'guest' access level.");
DEFINE("_YOUDONTHAVEPERMISSIONS","You don't have permission for this operation.<p>If you are not logged in, please login to your account and try again.");
DEFINE("_DOWNLOADS","Downloads");
DEFINE("_CANPUBLISHVIDEO","Can publish video");
DEFINE("_VIDEOADDEDSUCCESFULLY","Video was successfully added. ");
DEFINE("_CANSEEVIDEOSERVERDETAILS","Can see video server details");
DEFINE("_AD_VIDEO_LIST","Ad Videos List");
DEFINE("_REMOTESERVERSUPPORTISNOTENABLED","Remote server support is not enabled. Please enable it from the configuration panel.");
DEFINE("_USEAJAXBROWSING","Ajax Browsing");
DEFINE("_USEAJAXBROWSINGINFO","Use Ajax Supported Browsing. Don't forget that this is a beta feature. The default should be yes. If you encounter problems, just disable it.");
DEFINE("_TWOCOLUMNSVIDEOLIST","Multi-column video listing");
DEFINE("_TWOCOLUMNSVIDEOLISTINFO","Multi-column video listing in front page. Select the option that looks best with your theme.");
DEFINE("_MULTICOLUMNCOUNT","Multi-column count");
DEFINE("_MULTICOLUMNCOUNTINFO","If you enable multi-column video listing, please also define the desired column count.");
DEFINE("_YOUHAVENOACCESSRIGHTTOTHISVIDEO","You don't have access right to this video. Please login first. If you're already logged in, then you should upgrade your account. Just click <a href={accesslevelupgradelink_dontchangethis}>here.</a>");
DEFINE("_VIDEOACCESSLEVEL","Video Access Level");
DEFINE("_UPGRADEACCESSLEVELLINK","Access Level Upgrade Link");
DEFINE("_UPGRADEACCESSLEVELLINKINFO","If you are using access levels for your videos, you can enter a link for user access level upgrade. Your users will see this link when they click a video that they don't have access rights to it.");
DEFINE("_ACCESSLEVELCOUNT","Access Level Count");
DEFINE("_ACCESSLEVELCOUNTINFO","If you want to use access levels for your videos, you can configure the maximum number of access levels. Don't forget that, bigger number means higher access levels. If you leave this blank, it means that everybody can access all of your videos.");
DEFINE("_VIDEOCAT_DIR","Category Directory");
DEFINE("_CATEGORYDIRECTORYWILLBEGENERATED","The directory for this category will automatically be generated. All the videos for this category will be placed under this category.");
DEFINE("_LOCALFILESDIRECTORY","Base directory for local files");
DEFINE("_LOCALFILESDIRECTORYINFO","Base directory for local files. Category directories will be created under this directory. Should be in <b>/dir1/dir2</b> format.");
DEFINE("_LOCALVIDEO","Local Video");
DEFINE("_LOCALVIDEOINFO","If you use local video, select the video file and thumbnail.");
DEFINE("_VIDEOCAT_FILELIST","Video List");
DEFINE("_VIDEOCAT_THUMBLIST","Thumbnail List");
DEFINE("_VIDEOSERVER","Video Server");
DEFINE("_VIDEOSERVERINFO","If you add a video from a video server -like youtube, google, etc.- enter the link and click the apply button.");
DEFINE("_SERVERCODES","Server Codes");
DEFINE("_SERVERCODESINFO","If you're editing a video item and aren't sure about the video info, please don't change anything here, otherwise you may cause a component malfunction.");
DEFINE("_ATTRIBUTES","Attributes");
DEFINE("_THISISABACKUPFILE","This is a backup file");
DEFINE("_VIDEOADS","Video Ads");
DEFINE("_IMAGEADS","Image Ads");
DEFINE("_USEIMAGEADSYSTEM","Use Image Ad System");
DEFINE("_IMAGEADDURATION","Image Ad Duration");
DEFINE("_ISDOWNLOADABLE","Downloadable");
DEFINE("_ALLOWURLVALUE","allow_url_fopen");
DEFINE("_ALLOWURLVALUEINFO","Shows your php settings for allow_url_fopen which will be used for reading urls.");
DEFINE("_ON","On");
DEFINE("_OFF","Off");
DEFINE("_CURLLIB","curl Library");
DEFINE("_CURLLIBINFO","If this library is installed, Seyret will by default use it to read url contents.");
DEFINE("_NOTINSTALLED","Not Installed");
DEFINE("_INSTALLED","Installed");
DEFINE("_SEYRETFUNCSTATUS","Seyret Functionality");
DEFINE("_PASSED","Passed");
DEFINE("_FAILED","Failed");
DEFINE("_SEYRETFUNCSTATUSINFO","If the Seyret functionality test fails, it means that both functions to get url content are disabled and you will not be able use Seyret. We'd advice you to contact your hosting provider to enable either allow_url_fopen or curl.");
DEFINE("_IMAGEADDEFAULT","Default Image Ad");
DEFINE("_USEIMAGEADSYSTEMINFO","When yes, image ads will be shown before video starts playing.<b>This will happen only if pro features are enabled.</b>");
DEFINE("_IMAGEADDEFAULTINFO","Default image ad. If no image ad is defined for a category, this ad will be shown as default.");
DEFINE("_IMAGEADDURATIONINFO","Duration of image ads to be shown (in milliseconds).");
DEFINE("_UPLOADEDSUCCESSFULLY","Video is uploaded successfully. Depending on your site's configuration, your video will either be published immediately, or await moderation.");
DEFINE("_ID","ID");
DEFINE("_AD_IMAGE_LIST","Ad Image List");
DEFINE("_NEWIMAGEADCOMMENT","Please enter the full URL of your image ad to be displayed. Also don't forget to select the category. If you define more than one image ad in a category, a random one will be shown on the front page. Please define the URL address to open after ad click.");
DEFINE("_REALNAME","Real Name");
DEFINE("_UNKNOWN","Guest");  
DEFINE("_RESETMYDOWNLOADSTATUS","Click here if you want to reset the video download donation report"); 
DEFINE("_VIDEODOWNLOADOPTION","Video Download Option"); 
DEFINE("_PROSTATUS","Seyret Pro Status"); 
DEFINE("_SEYRETISNOTPRO","Your version of Seyret is not upgraded to pro version. The pro version has some additional options to use Seyret. Details about the pro version can be found at www.joomlaholic.com.<p>Once you upgrade to the pro version, you will continue to use Seyret pro in future versions.");
DEFINE("_MAKEPROBUTTON","Upgrade to Pro"); 
DEFINE("_MAKEMEPRO","Enter the donation amount  "); 
DEFINE("_UPGRADETOPRO","<b>Step-1:</b> Upgrading to pro version requires at least 40 USD to be donated. When you click one of the buttons below, you will automatically be redirected to the Paypal page with all the required info already entered."); 
//DEFINE("_UPGRADETOPROSTEP2","<b>Step-2:</b> This will inform us about your donation. After we approve your pro donation, you immediately can start using the pro version. Approve time will be minimal."); 
DEFINE("_SEYRETPROISPENDING","Your donation report for pro features is awaiting approval. Sorry, we didn't get any information from Paypal about your donation, so your report will have to be approved manually. Please check back shortly. <p>If you think that you've reported by mistake, you can clean your pro donation report by clicking the link below."); 
DEFINE("_RESETMYPROSTATUS","Click here if you want to reset the pro features donation report"); 
DEFINE("_SEYRETPROISAPPROVEDREFRESH","Your donation report is approved. <p>Please refresh this page now."); 
//DEFINE("_COULDNTCONNECTTRYLATER","We couldn't connect to the Joomlaholic server to check its status. Please try again later."); 
DEFINE("_YOUCANRESETIFMISTAKENLY","If you think that you've reported by mistake, you can clean your pro donation report by clicking the link below."); 
DEFINE("_PROAPPROVED","Your pro features donation is approved. Enjoy!");
DEFINE("_NEEDTOUPDATE","Your Seyret pro features definitons are outdated. We strongly advice to update them.");
DEFINE("_UPDATEPROPHP","Click here to update your pro definitions.");
DEFINE("_ITISUPTODATE","Your Seyret pro features definitons are up-to-date. No update nescessary.");
DEFINE("_SEYRETPROISREJECTED","Your report is rejected. Our system shows that you didn't donate for pro version. Your donation report will now be reset to allow you to donate for real. If you think that this is an error, please contact us."); 
DEFINE("_THISISAPROVERSIONFEATURE","Upgrade To Pro");
DEFINE("_GOTODONATIONSPAGETOENABLEPRO","This is a pro version feature. You can enable pro version features from the Donations page.");
DEFINE("_USEVIDEOADSYSTEMINFO","When yes, video ads will be shown before video starts playing.<b>This will happen only if pro features are enabled.</b>");
DEFINE("_USEVIDEOADSYSTEM","Use Video Ad System");
DEFINE("_VIDEOINFOREFRESHED","Video information has been updated.");
DEFINE("_THUMBWIDTHINLIST","Thumb width in video list.");
DEFINE("_THUMBWIDTHINLISTINFO","Thumbnail width in video list. Use only numbers, don not add px.");
DEFINE("_FEATURED","Utvalgte");
DEFINE("_DISCUSSIONONFORUM","Discussion");
DEFINE("_CLICKHERETODISCUSS","Click here to diccuss the video");
DEFINE("_TOPICRE","Re: ");


DEFINE("_VIDEOINFO","Video Info");
DEFINE("_INPUTFBDISCUSSTOPIC","Subject");
DEFINE("_INPUTFBDISCUSSMESSAGE","Message");
DEFINE("_CATEGORYINFO","Category Info");
DEFINE("_CATEGORYNAME","Title");
DEFINE("_SUBCATEGORIES","Subcategories");
DEFINE("_VIDEOSINCAT","Video count");
DEFINE("_DISCUSSPOSTHEADER","Post a new message");
DEFINE("_SUBMITCOMMENT","Submit");
DEFINE("_LOGINTOWRITECOMMENT","Login to write comment");
DEFINE("_DONTDONATEIFYOUWILLMAKEPRO","If you are planning to upgrade to pro, do not donate for the download option. Pro users already have this feature enabled by default.");
DEFINE("_COMMENTINGSYSTEM","Commenting System");
DEFINE("_JOMCOMMENT","Jom Comment");
DEFINE("_FIREBOARD","Fireboard");
DEFINE("_COMMENTINGSYSTEMINFO","Select the default commenting system.");
DEFINE("_PUBLISHAFTERMODERATED","Will be published after moderating.");
DEFINE("_SHOWVIDEOTOOLTIPS","Show Video Tooltips");
DEFINE("_SHOWVIDEOTOOLTIPSINFO","Select the status of video tooltips here.");
DEFINE("_SHOWCATEGORYTOOLTIPS","Show Category Tooltips");
DEFINE("_SHOWCATEGORYTOOLTIPSINFO","Select the status of category tooltips here.");

DEFINE("_INTEGRATION","Integration");
DEFINE("_FIREBOARDCATEGORYFORDISCUSS","FB Discuss Category");
DEFINE("_FIREBOARDCATEGORYFORDISCUSSINFO","If you want to use Fireboard plugin only for commenting, leave this field at 0. If you want to use it as a discussion plugin, enter the Fireboard category number.");
DEFINE("_LEAVEVIDEOLINK","Add backlink to video");
DEFINE("_LEAVEVIDEOLINKINFO","Add backlink to video in the first post of fireboard discuss thread.");
DEFINE("_YOUAREUSINGPRO","Your Seyret is PRO Version");
DEFINE("_GOTODONATIONSPAGE","To upgrade your definitons, please go to the Donations Page");
DEFINE("_NOTPROWANTTOUPGRADE","You are not using Seyret Pro version.<br>To upgrade, go to the Donations menu. Upgrading will take only three minutes to complete.");
 

DEFINE("_IMAGEAD","Image Ads");
DEFINE("_CLICKLINK","Click Link");
DEFINE("_LOCALADSDIRECTORY","Local Ads Directory");
DEFINE("_LOCALADSDIRECTORYINFO","If you want to use local video ads, please define the local ad directory.");
DEFINE("_RSSCHANNELTITLEPRE","Siste videoer i ");
DEFINE("_RSSCHANNELTITLEPOST","Kategori");
// DEFINE("_RSSLATESTVIDEOSCATDESCPRE","Denne feeden innholder de siste videoer");
// DEFINE("_RSSLATESTVIDEOSCATDESCPOST","nettsted");

DEFINE("_CLISKHERETOSTART","Click here to start");
DEFINE("_DISABLEPRO","Disable Pro Features");
DEFINE("_DISABLEPROINFO","If you encounter problems with the pro features, -like video server changes- you can disable pro functions temporarily until the problem is solved.");



DEFINE("_TAGS","Emneord");
DEFINE("_DIAGNOSTICS","Diagnostics");
DEFINE("_FILESYSTEM","File System"); 
DEFINE("_TEHERAREOWNERSHIPPROBLEMS","There are file ownership problems on your system. You may encounter some problems uploading videos. If errors occur, try giving 0777 rights to problematic directories. If you don't have any problems, we'd stongly suggest to limit the rights to 0755");  
DEFINE("_THEREAREMISSINGFILES","There are some missing folders in the seyretfiles directory tree. Because of file ownership problems, they are not created automatically. You will encounter several problems with Seyret. Try the FTP layer below to solve this problem.");  
DEFINE("_MISSING","MISSING");
DEFINE("_FTPSERVER","FTP Server");
DEFINE("_FTPUSERNAME","FTP Username");
DEFINE("_FTPPASSWORD","FTP Password");
DEFINE("_JOOMLAROOT","Joomla Root");
DEFINE("_TRYFTP","Try FTP");
DEFINE("_NEEDFTP_LAYER","FTP Account Details");
DEFINE("_FTPSERVERINFO","Enter FTP server for this site. Like ftp.example.com");
DEFINE("_FTPUSERNAMEINFO","Enter your FTP username");
DEFINE("_FTPPASSWORDINFO","Enter FTP password");
DEFINE("_JOOMLAROOTINFO","Main directory for your Joomla installation. Be careful with this value. This is not the fully qualified path to your home directory. It is relative to your FTP home. May be like /www  or  /httpdocs");
DEFINE("_THEREARENOPROBLEMS","There are no problems with the Seyret file system on your site.");
DEFINE("_DIRECTORY","Directory"); 
DEFINE("_OWNER","Owner"); 
DEFINE("_ACCESS","Access"); 
DEFINE("_RESULT","Result"); 
DEFINE("_CONNECTION","Connection");
DEFINE("_CACHE","Cache");
DEFINE("_CLEARVIDEOCACHE","Click here to clear the video cache");

DEFINE("_GOOGLECONNECTCHECK","Google Connect");
DEFINE("_CONNECTED","Connected");
DEFINE("_GOOGLECONNECTCHECKINFO","This is a test for your server connection ability.");

// 0.2.7 	*** added by Balaam ***
DEFINE("_NORIGHTS","You do not appear to have sufficient rights to access this feature.<br/>Please contact your system administrator or webmaster.");

//0.2.7.7 starts
DEFINE("_CONVERSION","Conversion");
DEFINE("_FFMPEGPATH","FFMPEG Path");
DEFINE("_FFMPEGPATHINFO","Enter the path for ffmpeg. ");
DEFINE("_VIDEOCONVERSION","FLV Conversion");
DEFINE("_ENABLEFLVCONVERSION","Enable FLV Conversion");
DEFINE("_ENABLEFLVCONVERSIONINFO","This option will work with only Seyret PRO. If you encounter any problems with flv conversion or if you don't have a strong server, you can disable flv conversion.");
DEFINE("_ENABLEAUTOMATICTHUMBNAILEXTRACTION","Enable thumbnail extraction");
DEFINE("_ENABLEAUTOMATICTHUMBNAILEXTRACTIONINFO","This option will work with only Seyret PRO. If you encounter any problems with thumbnail extraction, you can disable it.");
DEFINE("_INSTANTVIDEOPROCESS","Instant Video Conversion Process");
DEFINE("_INSTANTVIDEOPROCESSINFO","If you select yes, uploaded videos will be processed just after upload. If you select no, they will not be processes. Uploaded videos will be saved and will be added to conversion queue. Administrator will convert them.");
DEFINE("_INSTANTTHUMBPROCESS","Instant Thumbnail Extraction");
DEFINE("_INSTANTTHUMBPROCESSINFO","If you select yes, thumbnails for your uploaded videos will be extracted instantly. We advice this feature, so that your users will be able to select their thumbnail for their video.");
DEFINE("_VIDEODIMENSIONS","FLV Dimensions");
DEFINE("_VIDEODIMENSIONSINFO","Set your flv dimensions here. Don't forget that, bigger dimensions will result big file size. So try to set the optimum size for your needs and server.");
DEFINE("_AUDIOBITRATE","Audio Bitrate");
DEFINE("_AUDIOBITRATEINFO","Define audio bitrate for generated flv files.  Default is 64");
DEFINE("_AUDIOSAMPLINGFREQUENCY","Audio Sampling Frequency");
DEFINE("_AUDIOSAMPLINGFREQUENCYINFO","Define audio sampling frequency for generated flv files. Default is 44100.");
DEFINE("_VIDEOFRAMERATE","Video Frame Rate");
DEFINE("_VIDEOFRAMERATEINFO","Set video frame rate. Default is 25");
DEFINE("_VIDEOBITRATE","Video Bitrate");
DEFINE("_VIDEOBITRATEINFO","Set video bitrate. Default is 200");
DEFINE("_THUMBNAILEXRACTION","Thumbnail Extraction");
DEFINE("_THUMBNAILDIMENSIONS","Thumbnail Dimensions");
DEFINE("_THUMBNAILDIMENSIONSINFO","Set thumbnail dimensions here.");
DEFINE("_THUMBNAILDIMENSIONSBIG","Big Thumbnail Dimensions");
DEFINE("_THUMBNAILDIMENSIONSBIGINFO","There will be a big thumbnail extracted. This will be used for flash player preview image.");
DEFINE("_SCREENSHOTSECOND","Get image on second");
DEFINE("_SCREENSHOTSECONDINFO","Set the default time to extract the thumbnal image. On some videos using 00:00:00 will result a black image, so default is 00:00:05");
DEFINE("_UNPROCESSEDFILEINFO","There is an unprocessed video upload on your account. If you want to share it, you should complete publishing process. If you don't go on, your uploaded video will be deleted after time limit.");
DEFINE("_UPLOADEDFILENAME","File Name");
DEFINE("_UPLOADEDDATE","Upload Date");
DEFINE("_SELECTVIDEOSTOUPLOAD","Select Videos");
DEFINE("_SELECTVIDEOSTOUPLOADINFO","Select videos that you want to upload. After you select, it will be added to upload queue.");
DEFINE("_SELECTTHUMBSTOUPLOAD","Select Thumbnail");
DEFINE("_SELECTTHUMBSTOUPLOADINFO","You can upload a thumbnail for your video. Try to upload a thumbnail that represents your video well.");
DEFINE("_BROWSEFILES","Browse Files");
DEFINE("_UPLOADINGFILE","Uploading ...");
//DEFINE("_UPLOADCOMPLETE","Completed!");
DEFINE("_REMOVEFROMQUEUE","Remove from queue");
DEFINE("_VIDEOFILES","Video Files");
DEFINE("_MAXFILESIZEEXCEEDS","This file exceeds permitted maximum file size.");
DEFINE("_MAXIMUM","Max");
DEFINE("_UPLOADQUEUE","Upload Queue");
DEFINE("_UPLOADQUEUEINFO","Check the selected files and start uploading.");
DEFINE("_STARTUPLOAD","Start Upload");
DEFINE("_INPROCESSPLEASEWAIT","Please wait, upload result is being checked...");
DEFINE("_TERMSOFUSEINFO","Please read terms of use carefully.");
DEFINE("_TERMSOFUSE","TERMS OF USE");
DEFINE("_ACCEPTTERMSOFUSE","I've read terms of use and accept all of them.");
DEFINE("_DENYTERMSOFUSE","I don't accept terms of use. I want to uninstall.");
DEFINE("_DENYCONFIRMINFO","If you don't accept terms of use, you should uninstall Seyret completely.<br>If you select uninstalling here, all database tables will be removed.");
DEFINE("_DENYCONFIRM","CONFIRM");
DEFINE("_ILLREADTERMSAGAIN","I want to read terms of use again.");
DEFINE("_ILLUNINSTALL","I'm sure, I want to uninstall completely.");
DEFINE("_NOCOMMENT","No comment");
DEFINE("_CANSEEEDITVIDEOBUTTON","Can see edit button for all videos");
DEFINE("_CANEDITANYVIDEO","Can edit all videos");
DEFINE("_CANEDITOWNVIDEO","Can edit own videos");
DEFINE("_CANDELETEANYVIDEO","Can delete all videos");
DEFINE("_CANDELETEOWNVIDEO","Can delete own videos");
DEFINE("_USEJOOMLAEDITOR","Use Joomla editor");
DEFINE("_USEJOOMLAEDITORINFO","If you choose yes, on video input process, joomla html editor will be used for video details area. On some editors, this may cause security problem.");
DEFINE("_RSSCHANNELTITLEALLCATEGORIES","Latest Videos in all categories");
DEFINE("_RSSCHANNELTITLEHIGHESTRATEDPRE","Highest Rated Videos in");
DEFINE("_RSSCHANNELTITLEHIGHESTRATEDPOST","Category");
DEFINE("_RSSCHANNELTITLEALLCATEGORIESHIGHESTRATED","Highest Rated Videos in all categories");
DEFINE("_RSSVIDEOSCATDESCPRE","This feed contains the videos from");
DEFINE("_RSSVIDEOSCATDESCPOST","site");
DEFINE("_GENERATERSSFEEDINFO","Please select feed type and your feed options below. Feed link will be updated automatically when you change options.");

DEFINE("_ALLCATEGORIES","All Categories");


DEFINE("_VIDEOUPLOADISSUCCESS","Your file is successfully uploaded.");
DEFINE("_VIDEOCONVERTSUCCESS","Your video is successfully processed.");
DEFINE("_VIDEOCONVERTPOSTPONED","Your video will be processed by admin soon.");
DEFINE("_VIDEOCONVERTNOTSET","Video conversion is not set on this server.");




DEFINE("_UPLOADCONTROL","Upload Check");
DEFINE("_CONVERSIONCHECK","Video Conversion");
DEFINE("_THUMBNAILCHECK","Thumbnail Extraction");
DEFINE("_GETTINGINPUTFORM","Getting Input Form");
DEFINE("_PLEASEFILLTHEDETAILSBELOW","Please enter the following details about your video.");


DEFINE("_THUMBNAILSEXTRACTED","Thumbnails are generated.");
DEFINE("_THUMBNAILSEXTRACTIONBYADMIN","Thumbnails will be generated by admin later.");
DEFINE("_NOTHUMBNAILSEXTRACT","Thumbnails will not be generated by system.");

DEFINE("_DONTEXTRACT","Don't extract");

 
DEFINE("_PLEASESELECTTHUMBNAIL","Please select a thumbnail for your video");

DEFINE("_SIZEEXCEEDSERVERCONF","Upload failed. Your video size exceeds server configuration maximum size.");
DEFINE("_SIZEEXCEEDCOMPONENTCONF","Upload failed. Your video size exceeds component configuration maximum size.");
DEFINE("_PARTIALUPLOADERROR","The video was only partially uploaded. Try again please.");
DEFINE("_UNSUPPORTEDFILETYPE","Unsupported file type.");
DEFINE("_THEFILEISBIGGERPOSTMAXSIZE","File is larger than server maximum post size.");


DEFINE("_NOTUPLOADEDERROR","Video file was not uploaded. Please try again.");
DEFINE("_SEYRETDATE","Date");
DEFINE("_SEYRETMENU","SEYRET MENU");
DEFINE("_PROUPDATEERROR","Pro definitions couldn't be updated. Probably you are having a problem with write permissions.");
DEFINE("_FORMOREINFORMATIONABOUTPRO","You can find some information about pro version on our wiki. Please click here.");
DEFINE("_COULDNTCONNECTTRYLATER","We couldn't connect to the Joomlaholic server to check your Seyret status. Please try again later."); 
DEFINE("_VIDEOLINK","Video Link"); 

DEFINE("_SHOWORIGINALVIDEOLINK","Show Original Video Link"); 
DEFINE("_SHOWORIGINALVIDEOLINKINFO","Select yes to show a link to the original location of video beneath the embedded player."); 
DEFINE("_ORIGINALVIDEOISHERE","Click here to see original video."); 

DEFINE("_FFMPEGPREEXEC","Execute before ffmpeg"); 
DEFINE("_FFMPEGPREEXECINFO","If you are on a shared hosting and you've compiled ffmpeg yourself, you may need to execute some environment definitions to include libraries. If ffmpeg is installed by your hosting company, leave this value blank."); 

DEFINE("_CACHEDIRISMISSINGPLEASECREATE","Following cache folder could not be created by system. Please create it manually and give appropriate read/write permissions."); 

DEFINE("_ERRORREPORTING","Error Reporting");
DEFINE("_ERRORREPORTINGINFO","You can define your system error reporting policy here.");
DEFINE("_NOERRORREPORT","Don't report any errors");
DEFINE("_SHOWERRORSEXCEPTNOTICES","Show all errors except notices");
DEFINE("_SHOWERRORSINCLUDINGNOTICES","Show all errors including notices");
DEFINE("_PLAYTIME","Playtime");
DEFINE("_SECONDS","Seconds");

DEFINE("_STARTBATCHCONVERSION","Start Batch Conversion");
DEFINE("_BATCHCONVERSIONINFO","You can convert all non-flv videos to flv and extract thumbnails. Please select conversion options here.");
DEFINE("_DONTEXTRACTTHUMBNAIL","Don't extract thumbnails.");
DEFINE("_EXTRACTALLTHUMBNAILS","Extract all thumbnails for non-flv videos.");
DEFINE("_EXTRACTONLYMISSINGTHUMBNAILS","Extract thumbnails for non-flv videos if thumbnail is missing.");
DEFINE("_DONTCONERTTOFLV","Don't convert to flv. If you only want to extract thumbnails, check this.");
DEFINE("_FORCEREENCODEOLDFLV","Force reencoding uploaded flv videos with your settings.");
DEFINE("_DELETEORIGINALFILE","Delete original non-flv video from server after conversion.");
DEFINE("_DEFAULTTIMETOSNAPSHOT","Default time to take snapshot for video in seconds.");
DEFINE("_CONVERSIONVIDEOCOUNT","Video count to convert this time.");



DEFINE("_UPLOADCOMPLETE","Please wait, getting form!");
DEFINE("_RIGHTCLICKANDSAVE","Right click and save...");

DEFINE("_FIREBOARDCONFIGERROR","There is an error with your Fireboard installation. Fireboard Configuration File cannot be found. Please check your Fireboard installation.");
DEFINE("_ABOUTTHISVIDEO","About this video");
DEFINE("_FFMPEGNOTFOUND","Error: Converter tool not found. Please contact administrator.");
DEFINE("_MENCODERNOTFOUND","Error: Converter tool not found. Please contact administrator.");
DEFINE("_INPUTFILENOTFOUND","Error: Input file not found. Please contact administrator.");

//--------------------------------------------


DEFINE("_APPLIEDVIDEOLINK","Video Link");
DEFINE("_TAGLIST","Tags");
DEFINE("_VIDEODESCRIPTION","Description");
DEFINE("_CATEGORYLISTSELECT","Category");
DEFINE("_SERVERTYPE","Server Type");
DEFINE("_SERVERCODE","Server Code");
DEFINE("_THUMBNAIL","Thumbnail");
DEFINE("_ADDEDDATE2","Added");
DEFINE("_PUBLISHSELECT","Publish Status");
DEFINE("_SUBMITDETAILSCLICK","Details");

DEFINE("_FEATUREDVIDEOS","Utvalgte");
DEFINE("_LATESTVIDEOS","Nyeste");
DEFINE("_HIGHESTRATEDVIDEOS","Best vurdert");
DEFINE("_MOSTDISCUSSEDVIDEOS","Most Discussed");
DEFINE("_MOSTVIEWEDVIDEOS","Mest sett");
DEFINE("_READMORE","More");
DEFINE("_LESS","Less");
DEFINE("_INCATEGORY","Category");
DEFINE("_INCHANNEL","Channel");
DEFINE("_DISPLAYSTYLE","Display");
DEFINE("_CATIDS","Category Ids");

DEFINE("_SEARCHVIDEOS","Search Videos"); 
DEFINE("_SMALLSTATISTICSPRE","Total "); 
DEFINE("_SMALLSTATISTICSPOST"," videos");  
DEFINE("_VIDEOSINCATEGORYPRE","Videos in ");  
DEFINE("_VIDEOSINCATEGORYPOST"," category");   
DEFINE("_GUEST"," Guest");

DEFINE("_JOINED"," Joined");
DEFINE("_OWNEDVIDEOSCOUNT"," Videos");
DEFINE("_THISVIDEOINFORMATION","This Video");
DEFINE("_THISVIDEOINFORMATIONMORE","Other Information");
DEFINE("_SUBSCRIBETHISCHANNEL","Subscribe this channel");
DEFINE("_DIRECTURL"," URL");
DEFINE("_EMBED"," Embed");

DEFINE("_FULLSCREENBTN","Full Screen");
DEFINE("_DOWNLOADBTN","Download");
DEFINE("_REPORTBTN","Report");
DEFINE("_DELETEBTN","Delete");
DEFINE("_EDITBTN","Edit");
DEFINE("_REFRESHBTN","Refresh");


DEFINE("_CATEGORIESQUICKLIST","Quick List");
//-----------------------


//Line 469


//These lines are for 0.2.8 not in 0.2.7. please don't ask. just working

DEFINE("_VIDEOINPLAYLIST","Videoer:");



?>
