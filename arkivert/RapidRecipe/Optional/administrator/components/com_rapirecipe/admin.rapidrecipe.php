<?php
//rapid recipe Component//
/**
* @Copyright (C) 2008 Konstantinos Kokkorogiannis
* @ All rights reserved
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @version 1.7.3
**/


/** ensure this file is being included by a parent file */
defined('_JEXEC') or die('Restricted access');
require_once( $mainframe->getPath( 'class' ) );

rrloadlang();

global $mosConfig_absolute_path;
// ensure user has access to this function

rr_updatedb();
 
$document =& JFactory::getDocument();
//$document->addStyleSheet('components/com_rapidrecipe/admin.css'); 


$task 	= trim( strtolower(JRequest::getVar('task') ) );

// Set up the number for the paginator
$paginator= trim( JRequest::getVar('paginator') );
if (is_numeric($paginator)) {
	define('_adm_rec_per_page',$paginator);
} else {
	define('_adm_rec_per_page',10);
} 	

$page= trim(JRequest::getVar('page') );
if (is_numeric($page)) {
	define('_page',$page);
} else {
	define('_page',1);
} 	

define('_search',trim(JRequest::getVar('search') ));
define('_category_id',trim(JRequest::getVar('category_id')));

if (isset($_REQUEST['cid'])) {
	$cid 			= $_REQUEST['cid'];	
} else {
	$cid 			= array();
}

$section= trim(JRequest::getVar('section'));
$order= JRequest::getVar('order');

$id= trim( intval(JRequest::getVar('id')));
$category_id= trim( intval(JRequest::getVar('category_id')));
$parent_id= trim( intval(JRequest::getVar('parent_id')));

$image= trim( JRequest::getVar('image'));
$published= trim( JRequest::getVar('published'));

$database = & JFactory::getDBO();

if (count($cid)==0) {
	$cid[0]=$id;
}

//echo "the task is $task <br>";

switch ($task) {
//general
case 'saveorder':
	rr_saveorder($section, $cid);
	break;

case 'publish':
	rr_publish($section, $order, $cid, 1);
		switch ($section) {	
			case 'recipes':
				rr_UpdateCountCategoriesImidiateRecipes();
				rr_UpdateCountCategoriesAllRecipes();
				rr_adminrecipes();
				break;
			case 'categories':
				rr_admincategories();
				break;	
		}
	break;

case 'unpublish':
	rr_publish($section, $order, $cid, 0);
		switch ($section) {	
			case 'recipes':
				rr_UpdateCountCategoriesImidiateRecipes();
				rr_UpdateCountCategoriesAllRecipes();
				rr_adminrecipes();
				break;
			case 'categories':
				rr_admincategories();
				break;	
		}		
	break;
	
case 'deleteconfirm':
case 'remove':
	rr_remove($section, $order, $cid);
	rr_UpdateCountCategoriesImidiateRecipes();
	rr_UpdateCountCategoriesAllRecipes();
	break;


case 'edit':
	$id = $cid[0];
	switch ($section) {
		case 'categories':
		rr_editaddcategory($id);
		break;

		case 'recipes':
		rr_editaddrecipe($id);
		break;

		case 'steps':
		$id= trim( JRequest::getVar('id', '' ) );
		rr_editaddstep('edit', $id);
		break;		

		case 'comments':
		rr_editcomment($id);
		break;	
		
		case 'lang':		
		rr_editlang();
		break;
		
	}
	break;

case 'add':
	switch ($section) {
		case 'categories':
		$category_id = rr_editaddcategory();
		break;
		case 'recipes':
		$recipe_id = rr_editaddrecipe('');
		break;

	}
	break;

// this creates new step
case 'newstep':
	$id = rr_saveaddrecipe();
	rr_editaddstep('add','',$id);
	break;
	
case 'save':

	$id = $cid[0];
	switch ($section) {
		case 'categories':
		rr_saveaddcategory($id);
		$mainframe->redirect( 'index2.php?option=com_rapidrecipe&task=admincategories' );
		break;

		case 'recipes':
		rr_saveaddrecipe();
		$mainframe->redirect( 'index2.php?option=com_rapidrecipe&task=adminrecipes');
		break;
		
		case 'steps':
		rr_saveaddstep();
		$mainframe->redirect( 'index2.php?option=com_rapidrecipe&task=edit&id=' . $parent_id . '&hidemainmenu=1&section=recipes&page=' . $page);
		break;	
		
		case 'config':
		rr_saveconfigALL();
		$mainframe->redirect( 'index2.php?option=com_rapidrecipe');
		break;
		
		case 'comments':
		$recipe_id = rr_savecomment($id);
		$mainframe->redirect( 'index2.php?option=com_rapidrecipe&task=edit&id=' . $recipe_id . '&hidemainmenu=1&section=recipes&page=' . $page);	
		break;			

	}
	break;

case 'upload':
case 'apply':
	$id = $cid[0];
	switch ($section) {
		case 'categories':
		$id = rr_saveaddcategory($id);
		rr_editaddcategory($id);
		break;

		case 'recipes':
		$id = rr_saveaddrecipe();
		rr_editaddrecipe($id);
		break;

		case 'config':
		rr_saveconfigALL();
		$mainframe->redirect('index2.php?option=com_rapidrecipe&task=config', 'Configuration saved');
		break;

		case 'steps':
		$id = rr_saveaddstep();
		rr_editaddstep('edit', $id);
		break;

		case 'comments':
		$recipe_id = rr_savecomment($id);
		rr_editcomment($id);	
		break;	
	}
	break;
	
case 'ingredients':
	$id = rr_saveaddrecipe();
	$mainframe->redirect( "index2.php?option=com_ingredients&task=editrecipe&id=" . $id );
	break;

case 'cancel':
	switch ($section) {
		case 'categories':
		rr_admincategories();
		break;
		case 'recipes':
		rr_adminrecipes();
		break;
		case 'steps':
		rr_editaddrecipe($parent_id);
		break;
		case 'comments':
		$parent_id_row= rr_getonerow('Select recipe_id from #__rr_comment where comment_id= ' . mysql_real_escape_string($cid[0]) );
		rr_editaddrecipe($parent_id_row->recipe_id);
		break;
		case 'config':
		rr_echomenu();
	}
	break;


case 'admincategories':
	rr_admincategories();
	break;
case 'adminrecipes':
	rr_adminrecipes();
	break;
case 'config':
	rr_config();
	break;
case 'feature':
	switch ($section) {
		case 'categories':
			rr_runSQL('UPDATE #__rr_categories SET in_featured=1 where category_id=' . $database->getEscaped($id));			
			rr_admincategories();
		break;
		case 'recipes':	
			rr_save_config ($database->getEscaped($id) , 'featured_recipe');	
			$rr_conf['featured_recipe'] = $database->getEscaped($id);
			rr_adminrecipes();
		break;
	}
	break;		
case 'unfeature':
	rr_runSQL('UPDATE #__rr_categories SET in_featured=0 where category_id=' . $database->getEscaped($id));			
	rr_admincategories();
	break;
case 'admintrash':
	rr_adminrtrash();
	break;	
case 'restoreconfirm':
	rr_restoretrash($cid);
	rr_adminrtrash();
	break;


case 'updatedb':
	$rr_version = $rr_conf['rr_version'];
	if ($rr_version<'1.7.3') {	
		if ($rr_version<'1.7.1') {
			if ($rr_version<'1.6.9') {
				if ($rr_version<'1.6.8') {
					//changes for 1.6.8
					rr_save_config('0','email_recipe_author_on_comment');		
					rr_save_config('0','fav_show_cats');		
					rr_save_config('0','add_recipe_intro_to_meta_tag_description');	
					rr_save_config('0','featured_only_with_image');	
					
					//add the new field for the videos
					$query = 'ALTER TABLE `#__rr_recipes` ADD `video_embed_code` TEXT NOT NULL';		
					rr_runSQL ($query);
				}			
				rr_save_config('1','at_a_glance_links');		
				rr_save_config('1','rr_comment_field_available');
			}
			
			
			$query = 'ALTER TABLE `#__rr_recipes` ADD `metakey` TEXT NOT NULL ,
						ADD `metadesc` TEXT NOT NULL ;';
			//new configuration value
			$rr_conf['show_ordering_options_in_recipe_listing'] = '0';
						
			//take care of the version			
		}
		$rr_conf['rr_version'] = '1.7.3';
		rr_save_config('1.7.3','rr_version');			
		
	}
	$mainframe->redirect( "index2.php?option=com_rapidrecipe&mosmsg=Upgrade completed" );
		
	break;
	
default:
	rr_echomenu();
}

function rr_updatedb() {
	global $rr_conf;
	$rr_version = $rr_conf['rr_version'];
	if ($rr_version<'1.7.3') {		
		if ($rr_version<'1.7.1') {
			if ($rr_version<'1.6.9') {
				if ($rr_version<'1.6.8') {
					//changes for 1.6.8
					rr_save_config('0','email_recipe_author_on_comment');		
					rr_save_config('0','fav_show_cats');		
					rr_save_config('0','add_recipe_intro_to_meta_tag_description');	
					rr_save_config('0','featured_only_with_image');	
					
					//add the new field for the videos
					$query = 'ALTER TABLE `#__rr_recipes` ADD `video_embed_code` TEXT NOT NULL';		
					rr_runSQL ($query);
				}			
				rr_save_config('1','at_a_glance_links');		
				rr_save_config('1','rr_comment_field_available');
			}
			rr_save_config('1','use_back_editor');
			
			$query = 'ALTER TABLE `#__rr_recipes` ADD `metakey` TEXT NOT NULL ,
						ADD `metadesc` TEXT NOT NULL ;';
			rr_runSQL ($query);
		
		}
		$rr_conf['rr_version'] = '1.7.3';
		rr_save_config('1.7.3','rr_version');			
	}
	//$mainframe->redirect( "index2.php?option=com_rapidrecipe&mosmsg=Upgrade completed" );

}


function rr_cb($fieldname,$value) {
	global $rr_conf;
	echo '<input type="checkbox" name="' . $fieldname . '"';
	if ($value) {
		echo ' checked="checked" ';	
	}
	echo ' value="1">' . "\n";
}

function rr_radio($fieldname,$value,$def='') {
	global $rr_conf;
	echo '<input type="radio" name="' . $fieldname . '" value="0"';
	if ((!$value) || (($def==0) && ($value==''))) {
		echo ' checked="checked" ';	
	}
	echo 'class="inputbox" />' .JText::_( 'No' )  ;	
	echo '<input type="radio" name="' . $fieldname . '" value="1"';
	if (($value) || (($def==1) && ($value==''))) {
		echo ' checked="checked" ';	
	}
	echo 'class="inputbox" />' . JText::_( 'Yes' );
}


function rr_echomenu() {
	global $rr_conf;
?>
	<form action="index2.php" method="post" name="adminForm">
		<input type="hidden" name="option" value="com_rapidrecipe" />
		<input type="hidden" name="boxchecked" value="" />
		<input type="hidden" name="task" value="" />
	</form>
	
	<table  class="adminform"  width="150">
		<tr>
			<td>
				<div style="float:left;">
					<div class="icon">
						<a href="index2.php?option=com_rapidrecipe&task=admincategories">
							<img src="components/com_rapidrecipe/rrcategories.png" alt="Category Manager" align="middle" name="image" border="0" />
							<?php echo _RR_MENU_CATEGORY_MANAGER; ?>
						</a>
					</div>
				</div>
			</td>
			<td>
				<div style="float:left;">
					<div class="icon">
						<a href="index2.php?option=com_rapidrecipe&task=adminrecipes">
							<img src="components/com_rapidrecipe/rradmin.png" alt="Recipes Administration" align="middle" name="image" border="0" />
							<?php echo _RR_MENU_RECIPES_ADMINISTRATION; ?>
						</a>
					</div>
				</div>
			</td>
			<td>
				<div style="float:left;">
					<div class="icon">
						Din versjon er <?php echo $rr_conf['rr_version'] ?><br/>
						Sjekk hva <a href="http://www.rapid-source.com/info/general-info/latest-product-version.html" target="_blank">nyeste versjon er</a>.<br/><br />
					</div>
				</div>
			</td>

		</tr>
		<tr>
			<td>
				<div style="float:left;">
					<div class="icon">
						<a href="index2.php?option=com_rapidrecipe&task=config">
							<img src="components/com_rapidrecipe/rrconfig.png" alt="Component General Configuration" align="middle" name="image" border="0" />
							<?php echo _RR_MENU_GENERAL_CONFIGURATION; ?>
						</a>
					</div>
				</div>
			</td>
			<td>
				<div style="float:left;">
					<div class="icon">
						<a href="index2.php?option=com_rapidrecipe&task=admintrash">
							<img src="components/com_rapidrecipe/rrtrash.png" alt="Category Manager" align="middle" name="image" border="0" />
							<?php echo _RR_TRASH_MANAGER; ?>
						</a>
					</div>
				</div>
			</td>
			<td>
				<div style="float:left;">
					<div class="icon">
						Har du et forslag?<br /> Hjelp oss med å lage den bedre <a href="mailto:suggestions@rapid-source.com?subject=Suggestions for rapid recipe">ved å sende dine forslag</a>. <br /><br />
						Opplever du problemer? <br /> Vi vil hjelpe deg om du åpner en sak i vårt <a href="http://support.rapid-source.com/smarterticket/">supportsystem</a>			
					</div>
				</div>
			</td>

		</tr>

	</table>
<?php

}



########################################################################
########################################################################
#################       TRASH MANAGER			       #################
########################################################################
########################################################################


function rr_restoretrash($cid) {
	global $rr_conf;
	$database = & JFactory::getDBO();
	$cnt = count($cid);
	for ($i = 0; $i < $cnt; $i++) {
		$query = 'UPDATE #__rr_recipes SET deleted = 0 WHERE recipe_id =' . $database->getEscaped($cid[$i]);
		rr_runSQL ($query);
	}	
	
}

function rr_adminrtrash () {
	global $rr_conf;

	$trashall = rr_GetTrash();
	$cnt = count($trashall);
	$cntminus1 = $cnt-1;

	
?>
	<script language="Javascript" src="<?php echo $mosConfig_live_site; ?>/joomla/includes/js/overlib_mini.js"></script>
	<div id="overDiv" style="position:absolute; visibility:hidden; z-index:10000;"></div>
	<form action="index2.php" method="post" name="adminForm">
	<input type="hidden" name="option" value="com_rapidrecipe" />
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="task" value="admintrash" />		
	<input type="hidden" name="section" value="trash" />
	<input type="hidden" name="chosen" value="" />
	<input type="hidden" name="hidemainmenu" value="0" />
	<table class="adminheading">
		<tr>
			<th class="edit" rowspan="2" nowrap>
                            <?php echo _RR_TRASH_MANAGER; ?>
			</th>

		<tr>
	</table>

		<table class="adminlist">
		<tr>
			<th width="10" align="left">#</th>
			<th width="20"><input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo $cnt; ?>);" /></th>
			<th class="title">
                            <?php echo _RR_TRASH_REC_NAME; ?>
                        </th>
			<th width="5%" nowrap>
                            <?php echo _RR_RECIPE_ID; ?>
                        </th>
		</tr>
		
<?php	
	if (count($trashall)) {
		$i=1;
		foreach ($trashall as $trash) {
			$id = $trash-> recipe_id;
			$row= "row" . ($i % 2); 
			$cb = $i-1;
			echo '<tr class="' . $row . '">'. "\n";
			echo '<td>'  . $i . "</td> \n";
			echo '<td><input type="checkbox" id="cb' . $cb . '" name="cid[]" value="' . $id . '" onclick="isChecked(this.checked);" /></td>'. "\n";
			echo '<td>' . $trash-> title  . "</td>\n";
			echo '<td align="center">' . $id . '</td>'. "\n";	
			echo '</tr>';
			$i++;
		}
	} else {
		echo '<tr><td colspan="4">'. _RR_TRASH_NO_TRASH .'</td></tr>';
	}
	echo '</table>';


}


########################################################################
########################################################################
#################       CONFIGURATION			       #################
########################################################################
########################################################################




function rr_config() {
	global $mosConfig_absolute_path, $rr_conf;	
	$database = & JFactory::getDBO();


	jimport('joomla.html.pane');
	$pane =& JPane::getInstance('sliders');
	echo $pane->startPane( 'pane' );

	//$tabs = new mosTabs(1);

	//Set the administrator user selection
	$admins = rr_GetAdmins();
	
	//set the javascript for changing the logo. And set up the list of images for the logo
	$logojavascript = "onchange=\"javascript:if (document.forms[0].logo_image.options[selectedIndex].value!='') {document.imagelib.src='../images/stories/' + document.forms[0].logo_image.options[selectedIndex].value} else {document.imagelib.src='../images/blank.png'}\"";
	$conf_logo_image = $rr_conf['logo_image'];
	//$lists['logo_image'] = mosAdminMenus::Images( 'logo_image', $conf_logo_image, $logojavascript, '/images/stories/' );
			
?>	

	<script language="javascript" type="text/javascript">
		function rr_ChooseSelectedImage(srcListName,targetField,imgToChange,base_path ) {
			var form = eval( 'document.adminForm' );
			var srcList = eval( 'form.' + srcListName );
			var tgtField = eval( 'form.' + targetField );
			var trgImage = eval( "document." + imgToChange );

			var fileName = srcList.options[srcList.selectedIndex].text;
			var fileName2 = srcList.options[srcList.selectedIndex].value;
			if (fileName.length == 0 || fileName2.length == 0) {
				trgImage.src = 'images/blank.gif';
				tgtField.value = '';
			} else {
				trgImage.src = base_path + '/' + fileName2;
				tgtField.value = fileName2;	
			}
		}	
	</script>

	<form action="index2.php" method="post" name="adminForm" enctype="multipart/form-data" >
		<input type="hidden" name="option" value="com_rapidrecipe" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="task" value="adminrecipes" />		
		<input type="hidden" name="section" value="config" />
		<input type="hidden" name="chosen" value="" />
		<input type="hidden" name="hidemainmenu" value="0"> 

<table cellpadding="1" cellspacing="1" border="0" width="100%">
	<tr>
		<td width="250">
			<table class="adminheading">
				<tr>
					<th nowrap class="config">
                                            <?php echo _RR_CONF_REC; ?>
                                        </th>
				</tr>
			</table>
		</td>
	<tr>
		<td>	
			

<?php
		echo $pane->startPanel( _RR_RECIPES, 'display-page' );	
		//$tabs->startTab(_RR_RECIPES,"display-page");
?>

	<table class="adminform">

		<tr>
			<td valign="top" width="300">
                        <?php echo _RR_CONF_ADM; ?>
                        </td>
			<td>
				<select name="admin_user_id" class="inputbox">
					<?php
					foreach ($admins as $adm) {
						$currec = $adm->id;
						$selected = '';
						if ($currec== $rr_conf['admin_user_id']) {
							$selected = ' selected="selected" ';
						}
						echo '<option value="' . $adm->id . '" ' .$selected . '>' . $adm->username . '</option>';
					}
					?>
				</select>
			</td>
		</tr>				

		<tr>
			<td valign="top" width="300">
                        <?php echo _RR_CONF_IMAGE_WIDTH; ?>
            </td>
			<td> <input class="text_area" type="text" name="recipe_img_size" value="<?php echo $rr_conf['recipe_img_size']; ?>" size="5" maxlength="5" title="The image size in the recipes listing" /></td>
		</tr>

		<tr>
			<td valign="top">
                        <?php echo _RR_CONF_STEP_IMAGE_WIDTH; ?>
                        </td>
			<td> <input class="text_area" type="text" name="step_img_width" value="<?php echo $rr_conf['step_img_width']; ?>" size="5" maxlength="5" title="The image size of the step images in the recipes" /></td>
		</tr>

		<tr>
			<td valign="top">
                        Overide order in recipes with alphabetical (yes: alphabetical, no: order)?
                        </td>
			<td>
				<?php echo JHTML::_( 'select.booleanlist', 'overide_order_for_alphabetical', '', $rr_conf['overide_order_for_alphabetical'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>
			</td>
		</tr>		

		<tr>
			<td valign="top">
                        Show extra ordering options? (newest and rating)?
                        </td>
			<td>
				<?php echo JHTML::_( 'select.booleanlist', 'show_ordering_options_in_recipe_listing', '', $rr_conf['show_ordering_options_in_recipe_listing'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>
			</td>
		</tr>	
		
		<tr>
			<td valign="top">
                        Hide recipe steps from all unregisted users?
                        </td>
			<td>
				<?php echo JHTML::_( 'select.booleanlist', 'hide_content_from_unregistered', '', $rr_conf['hide_content_from_unregistered'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>
			</td>
		</tr>


		<tr>
			<td valign="top">
                        Recipe menu (print, email, favourites etc) should be icons?
                        </td>
			<td>			
				<?php echo JHTML::_( 'select.booleanlist', 'rr_use_icons', '', $rr_conf['rr_use_icons'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>

			</td>
		</tr>

		<tr>
			<td valign="top">
                        <?php echo _RR_CONF_NAVIGATION; ?>
                        </td>
			<td>
				<?php echo JHTML::_( 'select.booleanlist', 'menu_in_recipe_page', '', $rr_conf['menu_in_recipe_page'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>

			</td>
		</tr>

		<tr>
			<td valign="top">
                        Show Recipe creation date
                        </td>
			<td>
				<?php echo JHTML::_( 'select.booleanlist', 'show_recipe_date', '', $rr_conf['show_recipe_date'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>

			</td>
		</tr>		

		<tr>
			<td valign="top">
                        Show Recipe Author
                        </td>
			<td>
				<?php echo JHTML::_( 'select.booleanlist', 'show_recipe_author', '', $rr_conf['show_recipe_author'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>

			</td>
		</tr>	

		<tr>
			<td valign="top">
                        Show Recipe Rating
                        </td>
			<td>
				<?php echo JHTML::_( 'select.booleanlist', 'show_recipe_rating', '', $rr_conf['show_recipe_rating'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>

			</td>
		</tr>
		
		<tr>
			<td valign="top">
                        Recipe Template
                        </td>
			<td>
					<?php
						$recipe_template[] = JHTML::_( 'select.option', '1', 'Style 1' );
						$recipe_template[] = JHTML::_( 'select.option', '2', 'Style 2' );
						$recipe_template[] = JHTML::_( 'select.option', '3', 'Style 3' );
						echo JHTML::_( 'select.genericlist', $recipe_template, 'recipe_template', '', 'value', 'text', $rr_conf['recipe_template'] );
					?>
			</td>
		</tr>


		<tr>
			<td valign="top">
                        Admin User Group
                        </td>
			<td>
<?php 
	//make the options for the groups
	$database->setQuery( "SELECT id, name
							FROM #__core_acl_aro_groups
							WHERE name != 'ROOT'
							AND name != 'USERS'
							AND lft >3 ");
	$qresult = $database->loadObjectList();
  	//$groups = array();

	//foreach ($qresult as $group) {
	//	$groups[] = JHTML::_( 'select.option', '1', 'Original with old css' );
  	//	$groups[] = mosHTML::makeOption( $group->group_id, $group->name );	
  	//}	
	echo JHTML::_( 'select.genericlist', $qresult, 'admin_group', '', 'id', 'name', $rr_conf['admin_group'] );


    //$list['admin_group'] = mosHTML::selectList( $groups, 'admin_group', "" , 'value', 'text',  $rr_conf['admin_group'] );	
	//echo $list['admin_group'];
?>

			</td>
		</tr>

		<tr>
			<td valign="top">
                            Use editor in front end?
                            </td>
			<td>
				<?php echo JHTML::_( 'select.booleanlist', 'use_front_editor', '', $rr_conf['use_front_editor'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>

			</td>
		</tr>

		<tr>
			<td valign="top">
				In recipes restricted to registered users, should we hide the ingredients?
			</td>
			<td>
				<?php echo JHTML::_( 'select.booleanlist', 'user_restriction_hides_ingredients', '', $rr_conf['user_restriction_hides_ingredients'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>

			</td>
		</tr>		
		
		<tr>
			<td valign="top">
				The categories in "At a glance" box, should be links?
			</td>
			<td>
				<?php echo JHTML::_( 'select.booleanlist', 'at_a_glance_links', '', $rr_conf['at_a_glance_links'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>

			</td>
		</tr>	

		<tr>
			<td valign="top">
                            Use editor in Back end?
                            </td>
			<td>
				<?php echo JHTML::_( 'select.booleanlist', 'use_back_editor', '', $rr_conf['use_back_editor'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>

			</td>
		</tr>		
		
		
	</table>
		
<?php
		echo $pane->endPanel();
		echo $pane->startPanel( _RR_CATEGORIES, 'category-page' );	
?>
	<table>
		<tr>
			<td>
				<table class="adminform">
					<tr>
						<td valign="top" width="300">
                                                    <?php echo _RR_CONF_CAT_IMAGE_WIDTH; ?>
                                                </td>
						<td> <input class="text_area" type="text" name="category_img_width" value="<?php echo $rr_conf['category_img_width']; ?>" size="5" maxlength="5" title="The image size of the categories listing" /></td>
					</tr>

					<tr>
						<td valign="top">
                                                    <?php echo _RR_CONF_CAT_LOGO; ?>
                                                </td>
						<td>
							<?php echo JHTML::_( 'select.booleanlist', 'site_logo_in_category_page', '', $rr_conf['site_logo_in_category_page'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>

						</td>
					</tr>
			
					<tr>
						<td valign="top">
                                                    <?php echo _RR_CONF_PAGES; ?>
                                                </td>
						<td> <input class="text_area" type="text" name="logo_height" value="<?php echo $rr_conf['logo_height']; ?>" size="5" maxlength="5" title="The height of the logos for the categories pages" /></td>
					</tr>

					<tr>
						<td valign="top">
                                                    <?php echo _RR_CONF_BACKBUTTON; ?>
                                                </td>
						<td>
							<?php 
								$categories_back_button[] = JHTML::_( 'select.option', '2', JText::_( 'Use Global' ) );
								$categories_back_button[] = JHTML::_( 'select.option', '0', JText::_( 'Hide' ) );
								$categories_back_button[] = JHTML::_( 'select.option', '1', JText::_( 'Show' ));
								echo JHTML::_( 'select.genericlist', $categories_back_button, 'categories_back_button', '', 'value', 'text', $rr_conf['categories_back_button'] );
							?>
						</td>
					</tr>

					<tr>
						<td valign="top">
                                                    <?php echo _RR_CONF_NAV_POSITION; ?>
                                                </td>
						<td>
							<?php echo JHTML::_( 'select.booleanlist', 'menu_in_categories_page', '', $rr_conf['menu_in_categories_page'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>

						</td>
					</tr>

					<tr>
						<td valign="top">
							In category listings, show the subcategory names? (If you set to no, it will show a link for a page with the subcategories)
						</td>
						<td>
							<?php echo JHTML::_( 'select.booleanlist', 'show_subcategory_names', '', $rr_conf['show_subcategory_names'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>
						</td>
					</tr>
					
					<tr>
						<td valign="top">
                            <?php echo _RR_CONF_LOGO_IMAGE; ?> "images/stories/rapidrecipe/" ):
                        </td>
						<td>
<?php
	$jscript = 'onClick="rr_ChooseSelectedImage' . "('logoimagefiles','logo_image','logo_selected_image', '../images/stories/rapidrecipe')" . '"';
	echo JHTML::_( 'list.images', 'logoimagefiles', '', $jscript , '/images/stories/rapidrecipe/' ); 
?>

						</td>
					</tr>
					<tr>
						<td valign="top">
                                                 
                        </td>
						<td>
							<img name="logo_selected_image" src="../images/stories/rapidrecipe/<?php echo $rr_conf['logo_image']; ?>">
							<input type="hidden" name="logo_image" value="<?php echo $rr_conf['logo_image']; ?>" />

						</td>
					</tr>			

					<tr>
						<td valign="top">
						</td>
						<td>
							<?php
								$jscript = 'onClick="rr_ChooseSelectedImage' . "('imagefiles','logo_image','selected_image', '../images/stories/rapidrecipe')" . '"';

								//if the image is not png or jpg, then we have a problem creating the thumbnail. So lets just show it
								$imgstr = '../images/stories/rapidrecipe/' . $conf_logo_image;		
						
							//echo JHTML::_( 'list.images', 'imagefiles', $imgstr, $jscript , '/images/stories/rapidrecipe/' ); 
							
							?>
						</td>
					</tr>

				</table>
			</td>
		</tr>
	</table>
<?php
		echo $pane->endPanel();
		echo $pane->startPanel( _RR_CONF_VOTES,"vote-page" );
?>

	<table>
		<tr>
			<td valign="top">
                        Comment is required in order for user to vote?
            </td>
			<td>
				<?php echo JHTML::_( 'select.booleanlist', 'rr_comment_required_to_vote', '', $rr_conf['rr_comment_required_to_vote'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>

			</td>
		</tr>

		<tr>
			<td valign="top">
                        Comment field is available?
            </td>
			<td>
				<?php echo JHTML::_( 'select.booleanlist', 'rr_comment_field_available', '', $rr_conf['rr_comment_field_available'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>

			</td>
		</tr>		
		
		<tr>
			<td valign="top">
                        Vote is required in order for user to comment?
                        </td>
			<td>
				<?php echo JHTML::_( 'select.booleanlist', 'rr_vote_required_to_comment', '', $rr_conf['rr_vote_required_to_comment'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>

			</td>
		</tr>
		
		<tr>
			<td valign="top">
                        Email recipe author on comments on their recipe?
            </td>
			<td>
				<?php echo JHTML::_( 'select.booleanlist', 'email_recipe_author_on_comment', '', $rr_conf['email_recipe_author_on_comment'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>
			</td>
		</tr>	
		
		<tr>
			<td>
				<table class="adminform">
					<tr>
						<td valign="top">
                                                    <?php echo _RR_CONF_VOTE_NR; ?>
                                                </td>
						<td> <input class="text_area" type="text" name="votes" value="<?php echo _votes; ?>" size="5" maxlength="5" title="The image size in the recipes listing" /></td>
					</tr>
					<tr>
						<td valign="top">
                                                    <?php echo _RR_CONF_VOTE_IMAGE; ?>
                                                </td>
						<td>
<?php
	$jscript = 'onClick="rr_ChooseSelectedImage' . "('imagefiles','votes_image','selected_image', '../images/stories/rapidrecipe')" . '"';
	echo JHTML::_( 'list.images', 'imagefiles', '', $jscript , '/images/stories/rapidrecipe/' ); 
?>

						</td>
					</tr>
					<tr>
						<td valign="top">
                                                 
                        </td>
						<td>
							<img name="selected_image" src="../images/stories/rapidrecipe/<?php echo $rr_conf['votes_image']; ?>">
							<input type="hidden" name="votes_image" value="<?php echo $rr_conf['votes_image']; ?>" />

						</td>
					</tr>					
					
					
				</table>
			</td>
		</tr>
	</table>
			
<?php
		echo $pane->endPanel();
		echo $pane->startPanel( _RR_CONF_FEATURED,"featured-page" );

?>

		<table class="adminform">
			<tr>
				<td valign="top">
                                    <?php echo _RR_CONF_FEATURE_HOME; ?>
                                </td>
				<td>
					<?php echo JHTML::_( 'select.booleanlist', 'featured_in_front_page', '', $rr_conf['featured_in_front_page'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>

				</td>
			</tr>

			<tr>
				<td valign="top">
                                    <?php echo _RR_CONF_FEATURE_WAY; ?>
                                </td>
				<td>
					<?php
						//Set which type we have for the featured recipe module
						$feature_select_type= $rr_conf['feature_select_type'];
						if ($feature_select_type==1) {
							$fe1=' checked="checked" ';
						} elseif ($feature_select_type==2) {
							$fe2=' checked="checked" ';
						} elseif ($feature_select_type==3) {
							$fe3=' checked="checked" ';
						} elseif ($feature_select_type==4) {
							$fe4=' checked="checked" ';
						}
					?>
					<input type="radio" name="feature_select_type" value="1" <?php echo $fe1 ?> class="inputbox" /><?php echo _RR_CONF_FEATURE_TYPE_RANDOM; ?>
					<input type="radio" name="feature_select_type" value="2" <?php echo $fe2 ?> class="inputbox" /><?php echo _RR_CONF_FEATURE_TYPE_DAY; ?>
					<input type="radio" name="feature_select_type" value="3" <?php echo $fe3 ?> class="inputbox" /><?php echo _RR_CONF_FEATURE_TYPE_WEEK; ?>
					<input type="radio" name="feature_select_type" value="4" <?php echo $fe4 ?> class="inputbox" /><?php echo _RR_CONF_FEATURE_TYPE_MANUAL; ?>
				</td>
			</tr>

			<tr>
				<td valign="top">
					Select ONLY recipes with image for the Featured recipe?
				</td>
				<td>
					<?php echo JHTML::_( 'select.booleanlist', 'featured_only_with_image', '', $rr_conf['featured_only_with_image'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>
				</td>
			</tr>
			
		</table>
<?php
		echo $pane->endPanel();
		echo $pane->startPanel('Favourite',"fav-page");
?>	
		<table class="adminform">

			<tr>
				<td valign="top">
					Group favourite recipes per category (requires more queries to the database, therefore loads slower).
				</td>
				<td>
					<?php echo JHTML::_( 'select.booleanlist', 'fav_show_cats', '', $rr_conf['fav_show_cats'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>
				</td>
			</tr>									
					
		</table>		
<?php
		echo $pane->endPanel();
		echo $pane->startPanel('SEO',"seo-page");

?>	
		<table class="adminform">

			<tr>
				<td valign="top">
					Add first level categories to meta tags?
				</td>
				<td>
					<?php echo JHTML::_( 'select.booleanlist', 'first_level_categories_metatag', '', $rr_conf['first_level_categories_metatag'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>

				</td>
			</tr>

			<tr>
				<td valign="top">
					Add child level categories to meta tags?
				</td>
				<td>
					<?php echo JHTML::_( 'select.booleanlist', 'child_level_categories_metatag', '', $rr_conf['child_level_categories_metatag'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>

				</td>
			</tr>		

			<tr>
				<td valign="top">
					Append the recipe intro text in the page description meta tag?
				</td>
				<td>
					<?php echo JHTML::_( 'select.booleanlist', 'add_recipe_intro_to_meta_tag_description', '', $rr_conf['add_recipe_intro_to_meta_tag_description'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>

				</td>
			</tr>	
			
		
		</table>		
<?php
		echo $pane->endPanel();
		echo $pane->startPanel(JText::_( 'Search' ),"featured-page");

?>	
		<table class="adminform">
			<tr>
				<td valign="top">
					Use checkbox categories in the advanced search page<br /> (if you click "no", then drop down select boxes will be used)
				</td>
				<td>
					<?php echo JHTML::_( 'select.booleanlist', 'check_box_search', '', $rr_conf['check_box_search'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>

				</td>
			</tr>

			<tr>
				<td valign="top">
					In the drop down menus search form, show the drop down of the initial letters of recipes?
				</td>
				<td>
					<?php echo JHTML::_( 'select.booleanlist', 'letter_search_drop_down', '', $rr_conf['letter_search_drop_down'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>

				</td>
			</tr>	

			<tr>
				<td valign="top">
					Show the search form in the search results page?
				</td>
				<td>
					<?php echo JHTML::_( 'select.booleanlist', 'search_form_in_results', '', $rr_conf['search_form_in_results'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>

				</td>
			</tr>
			<tr>
				<td valign="top">
					Show the free text field in the search form?
				</td>
				<td>
					<?php echo JHTML::_( 'select.booleanlist', 'free_text_during_advanced_search', '', $rr_conf['free_text_during_advanced_search'], JText::_( 'Yes' ), JText::_( 'No' ) ); ?>

				</td>
			</tr>										
					
		</table>
		
<?php	
		echo $pane->endPanel();
		echo $pane->endPane();
?>	
						
		</td>
	</tr>
</table>							

<?php

}

function rr_saveconfigALL() {
	global $rr_conf;
	$allConfig = array(
		'votes_image'=> trim( JRequest::getVar('votes_image', '' ) ),
		'votes'=> trim( JRequest::getVar('votes', '' ) ),
		'recipe_img_size'=> trim( JRequest::getVar('recipe_img_size', '' ) ),
		'logo_height'=> trim( JRequest::getVar('logo_height', '' ) ),
		'category_img_width'=> trim( JRequest::getVar('category_img_width', '' ) ),
		'author_in_info_box'=> trim( JRequest::getVar('author_in_info_box', '' ) ),
		'menu_in_recipe_page'=> trim( JRequest::getVar('menu_in_recipe_page', '' ) ),
		'menu_in_categories_page'=> trim( JRequest::getVar('menu_in_categories_page', '' ) ),
		'step_img_width'=> trim( JRequest::getVar('step_img_width', '' ) ),
		'logo_image'=> trim( JRequest::getVar('logo_image', '' ) ),
		'feature_select_type'=> trim( JRequest::getVar('feature_select_type', '' ) ),
		'categories_back_button'=> trim( JRequest::getVar('categories_back_button', '' ) ),
		'admin_user_id'=> trim( JRequest::getVar('admin_user_id', '' ) ),
		'site_logo_in_category_page'=> trim( JRequest::getVar('site_logo_in_category_page', '' ) ),
		'featured_in_front_page'=> trim( JRequest::getVar('featured_in_front_page', '' ) ),
		'admin_group'=> trim( JRequest::getVar('admin_group', '' ) ),
		'rr_use_icons'=> trim( JRequest::getVar('rr_use_icons', '' ) ),
		'rr_comment_required_to_vote'=> trim( JRequest::getVar('rr_comment_required_to_vote', '' ) ),
		'rr_comment_field_available'=> trim( JRequest::getVar('rr_comment_field_available', '' ) ),		
		'rr_vote_required_to_comment'=> trim( JRequest::getVar('rr_vote_required_to_comment', '' ) ),
		'recipe_template'=> trim( JRequest::getVar('recipe_template', '' ) ),	
		'hide_content_from_unregistered'=> trim( JRequest::getVar('hide_content_from_unregistered', '' ) ),	
		'overide_order_for_alphabetical'=> trim( JRequest::getVar('overide_order_for_alphabetical', '' ) ),			
		'use_front_editor'=> trim( JRequest::getVar('use_front_editor', '' ) ),		
		'search_form_in_results'=> trim( JRequest::getVar('search_form_in_results', '' ) ),
		'free_text_during_advanced_search'=> trim( JRequest::getVar('free_text_during_advanced_search', '' ) ),
		'check_box_search'=> trim( JRequest::getVar('check_box_search', '' ) ),
		'letter_search_drop_down'=> trim( JRequest::getVar('letter_search_drop_down', '' ) ),
		'child_level_categories_metatag'=> trim( JRequest::getVar('child_level_categories_metatag', '' ) ),
		'first_level_categories_metatag'=> trim( JRequest::getVar('first_level_categories_metatag', '' ) ),
		'show_subcategory_names'=> trim( JRequest::getVar('show_subcategory_names', '' ) ),
		'show_recipe_date'=> trim( JRequest::getVar('show_recipe_date', '' ) ),
		'show_recipe_author'=> trim( JRequest::getVar('show_recipe_author', '' ) ),
		'show_recipe_rating'=> trim( JRequest::getVar('show_recipe_rating', '' ) ),
		'user_restriction_hides_ingredients'=> trim( JRequest::getVar('user_restriction_hides_ingredients', '' ) ),
		'email_recipe_author_on_comment'=> trim( JRequest::getVar('email_recipe_author_on_comment', '' ) ),
		'fav_show_cats'=> trim( JRequest::getVar('fav_show_cats', '' ) ),
		'add_recipe_intro_to_meta_tag_description'=> trim( JRequest::getVar('add_recipe_intro_to_meta_tag_description', '' ) ),
		'featured_only_with_image'=> trim( JRequest::getVar('featured_only_with_image', '' ) ),
		'at_a_glance_links'=> trim( JRequest::getVar('at_a_glance_links', '' ) ),
		'show_ordering_options_in_recipe_listing'=> trim( JRequest::getVar('show_ordering_options_in_recipe_listing', '' )),
		'use_back_editor'=> trim( JRequest::getVar('use_back_editor', '' ))	
	);
	
	//print_r ($allConfig);
	
	array_walk($allConfig, "rr_save_config");
	echo '<div class="message">'. _RR_CHANGES_COMMITED . '</div>';
}


########################################################################
########################################################################
#################       RECIPES 				       #################
########################################################################
########################################################################

function rr_saveaddrecipe() {
	global $mosConfig_absolute_path, $rr_conf;
	$database = & JFactory::getDBO();
	
	$user =& JFactory::getUser();
	$user_id = $user->get('id');
	
	$catid = array();
	$catid = JRequest::getVar('catid', 0 );
	
	$id = intval( JRequest::getVar('id', 0 ) );

	//find out the latest ordering
	$qresult = rr_getonerow('Select max(ordering) as maxordering from #__rr_recipes');
	$newordering = $qresult->maxordering + 1;

	if ($user->get('usertype') == 'Super Administrator') {
		$created_by = intval( JRequest::getVar('created_by', 0 ) );
		
		//check if user id exists and it is a non deleted user
		$user_exists_row = rr_getonerow('SELECT id from #__users WHERE id= ' . $created_by . ' AND block=0' );
		$user_exists = $user_exists_row->id;
		if (!$user_exists) {
			$created_by = 0;
		}
		//echo "the user exists has $user_exists <br>";
	}	

	if ($id>0) {    //it is an edit
		$existingItem =new mosRecipe($database);
		$existingItem->load($id);
		$newordering = $existingItem->ordering;
		if ($created_by) {
			$user_id = $created_by;	
		} else {
			$user_id = $existingItem->created_by;
		}	
		$createddate = $existingItem->created;
	}			

	if ($created_by) {
		$user_id = $created_by;	
	}	
	
	$item =new mosRecipe($database);			
	
	if (!$item->bind( $_POST )) {
		echo "<script> alert('".$item->getError()."'); window.history.go(-1); </script>\n";
		exit();
	}
	
	//check if it has an id (so it is an edit)
	if ($id>0) {
		//echo "<script> alert('We have an id'); </script>\n";
		$item->recipe_id=$id;
		$item->created = $createddate;
	} else {
		$item->created = date('Y-m-d H:i:s');		
	}
	$item->ordering=$newordering;
	$item->created_by=$user_id;
	
	//get rid of the apostrophe bug
	$item->title =JRequest::getVar('title', '', 'post', 'string', JREQUEST_ALLOWRAW);
	if (! $rr_conf['use_back_editor']) {
		$item->ingredients = rr_ConvertTextToList(htmlspecialchars($item->ingredients), 'rr_method_list',0); 
		$item->steps = rr_ConvertTextToList(htmlspecialchars($item->steps), 'rr_method_list',1);	
	} else {
		$item->ingredients =JRequest::getVar('ingredients', '', 'post', 'string', JREQUEST_ALLOWRAW);
		$item->steps = JRequest::getVar('steps', '', 'post', 'string', JREQUEST_ALLOWRAW);
	}
	$item->introtext =JRequest::getVar('introtext', '', 'post', 'string', JREQUEST_ALLOWRAW);
	$item->recipecomment = JRequest::getVar('recipecomment', '', 'post', 'string', JREQUEST_ALLOWRAW);
	
	

	if (!$item->check()) {
		echo "<script> alert('".$item->getError()."'); window.history.go(-1); </script>\n";
		exit();
	}
	if (!$item->store()) {
		echo "<script> alert('".$item->getError()."'); window.history.go(-1); </script>\n";
		exit();
	}

	$id =$item->recipe_id;
	
	$item->image = rr_recipe_image_upload ($id);
	if (!$item->store()) {
		echo "<script> alert('".$item->getError()."'); window.history.go(-1); </script>\n";
		exit();
	}		

	rr_saveRecipiesCategories($id, $catid);		
	return $id;

}

function rr_editaddrecipe($recipeid='') {
	global $mosConfig_absolute_path, $rr_conf;
	$database = & JFactory::getDBO();
	$editor =& JFactory::getEditor();

	$recipe = array();
	$author_data = array();
	$reccategoriesobject = array();
	if ($recipeid) {
		$recipe = rr_getonerow('SELECT * from #__rr_recipes WHERE recipe_id= ' . $database->getEscaped($recipeid) . ' AND deleted=0' );
		$recipe_id = $recipe->recipe_id;
		$author_data = rr_getonerow('Select name, username, email from #__users WHERE id=' .  $recipe->created_by);
		$reccategoriesobject = rr_GetRecipesCategories($recipeid);
	}

	
	$dest_dir = JPATH_ROOT.DS.'images'.DS.'stories'.DS.'rapidrecipe'.DS. "th";
	if (!file_exists($dest_dir)) {
		jimport( 'joomla.filesystem.folder' );
		JFolder::create( $dest_dir );
	}	
	
	if ((!$rr_conf['use_back_editor']) && ($recipeid)) {
		$recipe->introtext		= strip_tags($recipe->introtext);	
		$recipe->ingredients	= strip_tags($recipe->ingredients);	
		$recipe->steps			= strip_tags($recipe->steps);	
		$recipe->recipecomment	= strip_tags($recipe->recipecomment);
	}
	
	//Create an array with the categories of this recipe. To be used later
	$reccategories = array();
	if (count($reccategoriesobject)) {
		foreach ($reccategoriesobject as $reccat) {
			array_push($reccategories, $reccat->category_id);
		}
	}
	
	if ($recipe->published) {
		$pub1 = ' checked="checked" ';
		$pub0 = '';	
	} else {
		$pub1 = '';
		$pub0 = ' checked="checked" ';	
	}		

	$portionstype= $recipe->portionstype;
	if ($portionstype=='1') {
		$makes = ' selected="selected" ';
		$serves = '';	
	} elseif ($portionstype=='2') {
		$makes = '';
		$serves = ' selected="selected" ';
	}

?>
			<script language="javascript" type="text/javascript">
		function submitbutton(pressbutton, section) {
			var form = document.adminForm;

<?php
		if (!$rr_conf['use_back_editor']) {
?>
			// do field validation
			var text = <?php echo $editor->getContent( 'introtext' ); ?>
			var text = <?php echo $editor->getContent( 'ingredients' ); ?>
			var text = <?php echo $editor->getContent( 'recipecomment' ); ?>
<?php
		}
?>
			if (pressbutton == 'cancel') {
				submitform( pressbutton );
				return;
			}

			if ( form.title.value == "" ) {
				alert( "<?php echo _RR_SELECT_TITLE; ?>" );
				return;
			}

			if ( pressbutton == "apply" ) {
				form.hidemainmenu.value=1;
			}

			if ( pressbutton == "upload" ) {
				form.hidemainmenu.value=1;
			}


		<?php
		echo $editor->save( 'introtext' );
		echo $editor->save( 'ingredients' );
		echo $editor->save( 'recipecomment' );
		echo $editor->save( 'steps' );
		?>			

		submitform(pressbutton);
		}

		function rr_ChooseSelectedImage(srcListName,targetField,imgToChange,base_path ) {
			var form = eval( 'document.adminForm' );
			var srcList = eval( 'form.' + srcListName );
			var tgtField = eval( 'form.' + targetField );
			var trgImage = eval( "document." + imgToChange );

			var fileName = srcList.options[srcList.selectedIndex].text;
			var fileName2 = srcList.options[srcList.selectedIndex].value;
			if (fileName.length == 0 || fileName2.length == 0) {
				trgImage.src = 'images/blank.gif';
				tgtField.value = '';
			} else {
				trgImage.src = base_path + '/' + fileName2;
				tgtField.value = fileName2;	
			}
		}

		function rr_ChooseNoImage( targetField,imgToChange) {
			var form = eval( 'document.adminForm' );
			var tgtField = eval( 'form.' + targetField );
			var trgImage = eval( "document." + imgToChange );

			trgImage.src = 'images/blank.gif';
			tgtField.value = '';
		}

		</script>

		<form action="index2.php" method="post" name="adminForm" enctype="multipart/form-data" >
		<input type="hidden" name="option" value="com_rapidrecipe" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="task" value="adminrecipes" />		
		<input type="hidden" name="section" value="recipes" />
		<input type="hidden" name="chosen" value="" />
		<input type="hidden" name="hidemainmenu" value="0"> 
		<input type="hidden" name="paginator" value="<?php echo _adm_rec_per_page; ?>" />
		<input type="hidden" name="category_id" value="<?php echo _category_id; ?>" />
		<input type="hidden" name="page" value="<?php echo _page; ?>"> 
		<input type="hidden" name="search" value="<?php echo _search; ?>"> 
		<input type="hidden" name="id" value="<?php echo $recipe->recipe_id; ?>"> 
		<table class="adminheading">
		<tr>
			<th class="recipes">
				<?php echo _RR_RECIPE; ?>:
				<small><?php echo JText::_( 'Edit' ); ?></small>
			</th>
		</tr>
		</table>

		<table width="100%">

		<tr>
			<td valign="top" width="60%">
				<table class="adminform">
				<tr>
					<th colspan="3">
					    <?php echo _RR_RECIPE_DETAILS; ?>
					</th>
				<tr>
				<tr>
					<td>
					    <?php echo _RR_RECIPE_TITLE; ?>
					</td>
					<td colspan="2">
					<input class="text_area" type="text" name="title" value="<?php echo $recipe->title; ?>" size="50" maxlength="250" title="A short name to appear in menus" />
					</td>
				</tr>
										
				<tr>
					<td>
					    <?php echo JText::_( 'Published' ); ?>:
					</td>
					<td>				
						<input type="radio" name="published" value="0" <?php echo $pub0; ?> class="inputbox" /><?php echo JText::_( 'no' ); ?>
						<input type="radio" name="published" value="1" <?php echo $pub1; ?> class="inputbox" /><?php echo JText::_( 'yes' ); ?>
					</td>
				</tr>

				<tr>
					<td>
					    <?php echo _RR_CREATED_BY; ?>: 
					</td>
					<td>				
						<?php echo '<a href="mailto:' . $author_data->email . '?subject=' . _RR_RECIPES . ': ' . $recipe->title. '">' . $author_data->username . '</a>' ; ?>
<?php
	$user =& JFactory::getUser();
	$user_id = $user->get('id');
	if ($user->get('usertype') == 'Super Administrator') {
	
?>
						- 
						<span style="color:red"> 
							Overide with user id: 
							<input type="input" name="created_by" value="<?php echo $recipe->created_by; ?>" />
							(will be saved only if the user id exists)
						</span>				
<?php
	}
?>
					</td>
				</tr>

				<tr>
					<td>
					    <?php echo _RR_RECIPE_YIELD; ?>
					</td>
					<td>
						<select name="portionstype">		
							<option value="1" <?php echo $makes . '>' . _RR_MAKES; ?>
							<option value="2" <?php echo $serves. '>' . _RR_SERVES; ?>
						</select>																
						<input type="text_area" name="portions" value="<?php echo $recipe->portions; ?>" size="35" maxlength="150" />
					</td>
				</tr>

				<tr>
					<td valign="top">
					    <?php echo _RR_DESCRIPTION; ?>
					</td>
					<td colspan="2">
<?php  	
						if ($rr_conf['use_back_editor']) {
							echo $editor->display( 'introtext',$recipe->introtext  ,  '400', '200', '79', '15' ); 
						} else {
?>
						<textarea name="introtext" rows="5" cols="60"><?php echo $recipe-> introtext; ?></textarea>		
<?php
						}	
?>
					</td>
				</tr>

				<tr>
					<td valign="top">
				            <?php echo _RR_INGREDIENTS; ?>
					</td>
					<td colspan="2">
<?php
						if ($rr_conf['use_back_editor']) {
							echo $editor->display( 'ingredients',$recipe->ingredients  ,  '400', '200', '79', '15' );
						} else {
?>
						<textarea name="ingredients" rows="5" cols="60"><?php echo $recipe-> ingredients; ?></textarea>		
<?php
						}	
?>


					</td>
				</tr>

				<tr>
					<td valign="top">
				    <?php echo _RR_STEPS; ?>
					</td>
					<td colspan="2">
<?php  	
						if ($rr_conf['use_back_editor']) {
							echo $editor->display( 'steps',$recipe->steps  ,  '400', '200', '79', '15' ); 
						} else {
?>
						<textarea name="steps" rows="5" cols="60"><?php echo $recipe-> steps; ?></textarea>		
<?php
						}	
?>					
					</td>
				</tr>


				<tr>
					<td valign="top">
					    <?php echo _RR_RECIPE_COMMENT; ?>
					</td>
					<td colspan="2">
<?php  	
						if ($rr_conf['use_back_editor']) {
							echo $editor->display( 'recipecomment',$recipe->recipecomment  ,  '400', '200', '79', '15' ); 
						} else {
?>
						<textarea name="recipecomment" rows="5" cols="60"><?php echo $recipe-> recipecomment; ?></textarea>		
<?php
						}	
?>
					</td>
				</tr>

				<tr>
					<td valign="top">
					    Embed video code
					</td>
					<td colspan="2">
						<textarea name="video_embed_code" rows="5" cols="60"><?php echo $recipe-> video_embed_code; ?></textarea>
					</td>
				</tr>				

				<tr>
					<td valign="top">
					    Meta Description
					</td>
					<td colspan="2">
						<textarea name="metadesc" rows="5" cols="60"><?php echo $recipe-> metadesc; ?></textarea>
					</td>
				</tr>	

				<tr>
					<td valign="top">
					    Meta keywords
					</td>
					<td colspan="2">
						<textarea name="metakey" rows="5" cols="60"><?php echo $recipe-> metakey; ?></textarea>
					</td>
				</tr>	
				
				<tr>
					<td valign="top">
					    <?php echo _RR_RECIPE_IMAGE; ?>
					</td>
					<td colspan="2">
<?php
	$jscript = 'onClick="rr_ChooseSelectedImage' . "('imagefiles','image','selected_image', '../images/stories/rapidrecipe')" . '"';

	//if the image is not png or jpg, then we have a problem creating the thumbnail. So lets just show it
	if ((substr($recipe->image,-4)==".jpg") || (substr($recipe->image,-4)==".png")) {	
		$imgstr = '../images/stories/rapidrecipe/th/' . $recipe->image;
	} else {
		$imgstr = '../images/stories/rapidrecipe/' . $recipe->image;		
	}							
?>
					<?php echo JHTML::_( 'list.images', 'imagefiles', '', $jscript , '/images/stories/rapidrecipe/' ); ?>

					<img name="selected_image" src="<?php echo $imgstr; ?>">
					<input type="hidden" name="image" value="<?php echo $recipe->image; ?>" /><br />

					<?php echo _RR_ADD_UPLOAD; ?><br />
					<input class="inputbox" type="file" name="upload" id="upload" size="30">
					</td>
				</tr>

				<tr>
					<td valign="top">
					    <?php echo _RR_USER_GROUP; ?>
					</td>
					<td colspan="2">
<?php 
	//make the options for the groups
	$database->setQuery( "SELECT id as value, name as text
							FROM #__groups");
	$qresult = $database->loadObjectList();
	$list['user_group'] =  JHTML::_( 'select.genericlist', $qresult, 'user_group','','value', 'text',$recipe->user_group );
	
	echo $list['user_group'];
		
?>
					</td>
				</tr>

				</table>
			</td>
			<td valign="top">
				<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td>
							<?php  rr_admincomments ($recipe->recipe_id); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php  rr_adminsteps ($recipe->recipe_id); ?>
						</td>
					</tr>	
					<tr>
						<td valign="top">		
							<?php  rr_echoCategoryTreeCheckboxAdd($reccategories); ?>
						</td>
					</tr>
				</table>						


			</td>
		</tr>
	</table>
	
<?php	
}



function rr_adminrecipes () {
	global $rr_conf;
	
	$searchstr = trim(JRequest::getVar('search') );
	$page= intval(JRequest::getVar('page') );
	
	$showpublished= trim( JRequest::getVar('showpublished', '' ) );
	$parent_id = _category_id;
	//get the full number of recipes for this criteria, without paging
	$allcnt = rr_CountRecipiessAll($showpublished, $searchstr, $parent_id);
	
	//get the recipes for this page
	$recipes = rr_GetRecipiessAll($showpublished, $searchstr, $parent_id, $page);
	$cnt = count($recipes);
	$cntminus1 = $cnt-1;

	$featured_recipe = $rr_conf['featured_recipe'];
?>
	<script language="Javascript" src="http://localhost/joomla/includes/js/overlib_mini.js"></script>
	<div id="overDiv" style="position:absolute; visibility:hidden; z-index:10000;"></div>
	<form action="index2.php" method="post" name="adminForm">
	<input type="hidden" name="option" value="com_rapidrecipe" />
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="task" value="adminrecipes" />		
	<input type="hidden" name="section" value="recipes" />
	<input type="hidden" name="chosen" value="" />
	<input type="hidden" name="paginator" value="<?php echo _adm_rec_per_page; ?>" />
	<input type="hidden" name="category_id" value="<?php echo _category_id; ?>" />
	<input type="hidden" name="page" value="<?php echo _page; ?>"> 
	<input type="hidden" name="search" value="<?php echo _search; ?>"> 
	<input type="hidden" name="hidemainmenu" value="0" />
	<table class="adminheading">
		<tr>
			<th class="edit" rowspan="2" nowrap>
				<?php echo _RR_RECIPE_MANAGER; 
					$pagecatid = _category_id;
					if ($parent_id > 0) {
						$categorytitle = rr_getonerow("SELECT title FROM #__rr_categories WHERE category_id=". $pagecatid );
						echo ': <small> ' . $categorytitle-> title . '</small>';						
					}
				?>
			</th>
	
<?php
		
			$all_pages = ceil($allcnt / _adm_rec_per_page);
			echo '<td style="padding-right:20px">'. JText::_( 'Show' ) . ' '.'<input type="text" name="paginator" value="' . _adm_rec_per_page . '" size="3" onchange="document.adminForm.page.value=1;document.adminForm.submit();">'. _RR_RECIPE_RECORD. '</td>';

			if ($all_pages>1) {
		
				$page_to_go = _page-3;
				if ($page_to_go<1) {
					$page_to_go=1;
				} else {   //show the first page, since we are to more than the 6th
					$pglink = 'index2.php?option=com_rapidrecipe&task=adminrecipes&page=1&paginator=' . _adm_rec_per_page . '&search=' . _search . '&category_id=' . _category_id;			
					echo '<td><a href="' . $pglink . '"> 1 </a></td> <td> ... </td>';	
				}
					
				while (($page_to_go<=$all_pages) && ((_page+3)>$page_to_go)) {
					//show previous page and first page
					if (_page!=$page_to_go) {
						$pglink = 'index2.php?option=com_rapidrecipe&task=adminrecipes&page=' . $page_to_go . '&paginator=' . _adm_rec_per_page . '&search=' . _search . '&category_id=' . _category_id;			
						echo '<td><a href="' . $pglink . '"> ' . $page_to_go .' </a></td>';
					} else {
						//show current page
						echo '<td>' . _page .' </td>';
					}
					$page_to_go++;
				}
			
				if ($page_to_go<$all_pages) {
					echo "<td> ... </td>";
				}
				
				$last_shown_page = $page_to_go-1;
				if ($last_shown_page<$all_pages) { //show the last page
					$pglink = 'index2.php?option=com_rapidrecipe&task=adminrecipes&page=' . $all_pages . '&paginator=' . _adm_rec_per_page . '&search=' . _search . '&category_id=' . _category_id;			
					echo '<td><a href="' . $pglink . '"> ' . $all_pages . ' </a></td>';	
				}			
			}

?>					
			<td align="left">
			</td>		
			<td align="right"  style="padding-left:20px">
			    <?php echo JText::_( 'Search' ); ?>
			</td>
			<td>
			<input type="text" name="search" value="<?php echo _search; ?>" class="text_area" onChange="document.adminForm.page.value=1;document.adminForm.submit();" />
<?php 
	if ((_search!='') || ($parent_id!=0) || ($showpublished!='')) { 
		echo '<a href="index2.php?option=com_rapidrecipe&task=adminrecipes&paginator=' . _adm_rec_per_page .'">' . _RR_SHOW_ALL .'</a>';
	}
?>
			</td>
			<td align="right"  style="padding-left:20px">
			<a href="index2.php?option=com_rapidrecipe&task=adminrecipes&showpublished=0&paginator=<?php echo _adm_rec_per_page; ?>"><?php echo _RR_SHOW_UNPUBLISHED; ?></a>
			</td>

		<tr>
	</table>

		<table class="adminlist">
		<tr>
			<th width="10" align="left">#</th>
			<th width="20"><input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo $cnt; ?>);" /></th>
			<th class="title"><?php echo _RR_RECIPE_TITLE; ?> </th>
			<th width="10%"><?php echo _RR_CREATED_BY; ?> </th>
			<th width="8%"><?php echo _RR_FEATURE_RECIPE; ?> </th>
			<th width="10%"><?php echo JText::_( 'Published' ); ?> </th>
			<th width="2%"><?php echo JText::_( 'Order' ); ?> </th>
			<th width="1%"><a href="javascript: saveorder( <?php echo $cntminus1; ?> )"><img src="images/filesave.png" border="0" width="16" height="16" alt="Save Order" /></a></th>
			<th width="5%" nowrap><?php echo _RR_RECIPE_ID; ?> </th>
		</tr>


		
<?php	
	
	$i=1;
	$cb=0;  //the number for the cb
	//start from a different number if a page is here
	if ($allcnt>$cnt) {
		$i=((_page-1) * _adm_rec_per_page)+1;
	}

	foreach ($recipes as $recipe) {
		$id = $recipe-> recipe_id;
		$row= "row" . ($i % 2); 
		echo '<tr class="' . $row . '">'. "\n";
		echo '<td>'  . $i . "</td> \n";
		echo '<td><input type="checkbox" id="cb' . $cb . '" name="cid[]" value="' . $id . '" onclick="isChecked(this.checked);" /></td>'. "\n";
		echo '<td><a href="index2.php?option=com_rapidrecipe&task=edit&id='. $id . '&hidemainmenu=1&section=recipes&page=' . _page . '&paginator=' . _adm_rec_per_page . '&search=' . _search .'&category_id=' . _category_id .'">' . $recipe-> title  . "</a></td>\n";
		echo '<td align="center">' . $recipe->username . "</td>\n";
		echo '<td align="center">' . "\n";
		if ($featured_recipe == $id) {
			echo '<img src="images/tick.png" width="12" height="12" border="0" alt="Featured" /></td>'. "\n";
		} else {
			echo '<a href="index2.php?option=com_rapidrecipe&task=feature&id='. $id . '&section=recipes&search=' . _search . '&category_id=' . $parent_id . '&page=' . _page . '&showpublished=' . $showpublished . '"><img src="images/publish_x.png" width="12" height="12" border="0" alt="No" /></a></td>'. "\n";
		}

		echo '<td align="center">' . "\n";
		if ($recipe->published) {
			echo '<a href="index2.php?option=com_rapidrecipe&task=unpublish&id='. $id . '&section=recipes&search=' . _search . '&category_id=' . $parent_id . '&page=' . _page . '&showpublished=' . $showpublished . '"><img src="images/publish_g.png" width="12" height="12" border="0" alt="Published" /></a></td>'. "\n";
		} else {
			echo '<a href="index2.php?option=com_rapidrecipe&task=publish&id='. $id . '&section=recipes&search=' . _search . '&category_id=' . $parent_id . '&page=' . _page . '&showpublished=' . $showpublished . '"><img src="images/publish_x.png" width="12" height="12" border="0" alt="No" /></a></td>'. "\n";
		}

		echo '<td align="center" colspan="2"><input type="text" name="order[]" size="5" value="' . $recipe-> ordering . '" class="text_area" style="text-align: center" /></td>'. "\n";
		echo '<td align="center">' . $id . '</td>'. "\n";
		
		
		$i++;
		$cb++;
	}

	echo '</table>';
	
?>
	<table class="adminheading">
		<tr>
			<th class="edit" rowspan="2" nowrap>
				<?php echo _RR_SEARCH_CATEGORY; ?>
			</th>
		</tr>
	</table>
<?php
rr_echoCategoryTree('recipes');
}

########################################################################
########################################################################
#################           COMMENTS 			       #################
########################################################################
########################################################################


function rr_admincomments ($recipe_id) {
	global $mosConfig_live_site, $rr_conf;

	if ($recipe_id) {
		$comments = rr_GetCommentsAll($recipe_id);	
		if (count($comments)) {

	?>

			<table class="adminlist">
			<tr>
				<th width="10" align="left">#</th>
				<th class="title"><?php echo _RR_COMMENT_TEXT; ?></th>
				<th class="title">Vote</th>
				<th class="title">User</th>
			</tr>
			
	<?php	
		
			$i=1;
			foreach ($comments as $com) {
				$id = $com-> comment_id;
				$row= "row" . ($i % 2); 
				$cb = $i-1;
				echo '<tr class="' . $row . '">'. "\n";
				echo '<td>'  . $i . "</td> \n";
				echo '<td><a href="index2.php?option=com_rapidrecipe&task=edit&id='. $id . '&hidemainmenu=1&section=comments&page=' . _page . '&paginator=' . _adm_rec_per_page . '&search=' . _search .'&category_id=' . _category_id .'">EDIT: ' . $com-> comment  . "</a></td>\n";
				echo '<td>' . $com->vote  . "</td>\n";
				echo '<td>' . $com->username  . "</a></td>\n";
				echo '</tr>' . "\n";		
				$i++;
			}

			echo '</table>';
		
		}
	}
}

function rr_savecomment($id) {
	global $rr_conf;
	$comment= trim( JRequest::getVar('comment', '' ) );
	$database = & JFactory::getDBO();
	//echo "$id, $comment, $parent_id <br>";
	rr_runSQL("UPDATE #__rr_comment set comment='" . $database->getEscaped($comment) . "'  where comment_id=" . $database->getEscaped($id));
	echo '<div class="message">'. _RR_CHANGES_COMMITED .'</div>';
	$parent_id_row= rr_getonerow('Select recipe_id from #__rr_comment where comment_id= ' . $database->getEscaped($id) );		
	return $parent_id_row->recipe_id;
}




function rr_editcomment($id) {
	global $mosConfig_absolute_path, $rr_conf;
	$database = & JFactory::getDBO();
	$comment = rr_getonerow('Select * from #__rr_comment where comment_id= ' . $database->getEscaped($id) );

?>
			<script language="javascript" type="text/javascript">
		function submitbutton(pressbutton, section) {
			var form = document.adminForm;
			if (pressbutton == 'cancel') {
				submitform( pressbutton );
				return;
			}

			if ( pressbutton == "apply" ) {
				form.hidemainmenu.value=1;
			}

		submitform(pressbutton);
		}
		</script>

		<form action="index2.php" method="post" name="adminForm" enctype="multipart/form-data" >
		<input type="hidden" name="option" value="com_rapidrecipe" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="task" value="adminrecipes" />		
		<input type="hidden" name="section" value="comments" />
		<input type="hidden" name="chosen" value="" />
		<input type="hidden" name="paginator" value="<?php echo _adm_rec_per_page; ?>" />
		<input type="hidden" name="category_id" value="<?php echo _category_id; ?>" />
		<input type="hidden" name="page" value="<?php echo _page; ?>"> 
		<input type="hidden" name="search" value="<?php echo _search; ?>"> 
		<input type="hidden" name="parent_id" value="<?php echo $comment->recipe_id ?>" />
		<input type="hidden" name="hidemainmenu" value="0"> 

		<input type="hidden" name="id" value="<?php echo $id; ?>"> 
		<table class="adminheading">
		<tr>
			<th class="reviews">
			    <?php echo _RR_USER_REVIEW; ?>:
			     <small><?php echo JText::_( 'Edit' ); ?></small>
			</th>
		</tr>
		</table>

		<table class="adminform">
			<tr>
				<td>
				    <?php echo _RR_CONF_VOTES; ?>:
				</td>
				<td>
					<?php echo $comment->vote; ?>
				</td>
			</tr>
			<tr>
				<td>
				    <?php echo _RR_COMMENT_TEXT; ?>:
				</td>
				<td>
					<textarea name="comment" rows="10" cols="79"><?php echo $comment->comment; ?></textarea>
				</td>
			</tr>
		</table>
	
<?php	
}
########################################################################
########################################################################
#################           STEPS 				       #################
########################################################################
########################################################################


function rr_adminsteps ($recipe_id) {
	global $rr_conf;

	if ($recipe_id) {
  		$steps = rr_GetStepsAll($recipe_id);
  	}


  if (count($steps)) {

?>

		<table class="adminlist">
		<tr>
			<th width="10" align="left">#</th>
			<th class="title"><?php echo _RR_STEP_DESCRIPTION; ?></th>
			<th width="5%"><?php echo JText::_( 'Order' ); ?></th>
			<th width="5%"><?php echo _RR_STEP_ID; ?></th>
		</tr>
		
<?php	
	
	$i=1;
	foreach ($steps as $step) {
		$id = $step-> step_id;
		$row= "row" . ($i % 2); 
		$cb = $i-1;
		$link = 'index2.php?option=com_rapidrecipe&task=edit&id='. $id . '&hidemainmenu=1&section=steps&page=' . _page . '&paginator=' . _adm_rec_per_page . '&search=' . _search .'&category_id=' . _category_id;
		
		echo '<tr class="' . $row . '">'. "\n";
		echo '<td><a href="' . $link .'">'  . $i . "</a></td> \n";
		echo '<td><a href="' . $link .'">' . $step-> description  . "</a></td>\n";
		echo '<td align="center" >' . $step-> ordering . '</td>'. "\n";
		echo '<td align="center">' . $id . '</td>'. "\n";
		
		$i++;
	}

	echo '</table>';
	
  }
}

function rr_saveaddstep() {
	global $rr_conf;
	$database = & JFactory::getDBO();
	$id = JRequest::getVar('id', '' );
	$description= $database->getEscaped(JRequest::getVar('description', '', 'POST', 'STRING', JREQUEST_ALLOWRAW ));
	$parent_id= intval( JRequest::getVar('parent_id', '' ) );
	$image = rr_recipe_image_upload ($parent_id);
	
	if ($id>0) {
		rr_runSQL("UPDATE #__rr_steps set description='" . $description . "' , image ='" . $image . "' where step_id=" . $id);
		echo '<div class="message">'. _RR_CHANGES_COMMITED .'</div>';
	} else {

		//find out the latest orderingnr for categories
		$qresult = rr_getonerow('Select max(ordering) as maxordering from #__rr_steps');
		$newordering = $qresult->maxordering + 1;

		$query = 'INSERT INTO `#__rr_steps` ( recipe_id, description, image, ordering) 
		VALUES ('. $database->getEscaped($parent_id) .", '" . $description . "', '" . $database->getEscaped($image) . "', " . $database->getEscaped($newordering) .");"; 
		//echo "$query <br>";
		rr_runSQL( $query);
		echo '<div class="message">' . _RR_STEP_ADDED .'</div>';
		$laststepline = rr_getonerow('Select max(step_id) as step_id from #__rr_steps');
		$id =$laststepline->step_id;	
	}			
	return $id;

}



function rr_editaddstep($type='', $id='', $recipe_id='') {
	global $mosConfig_absolute_path, $rr_conf;
	$database = & JFactory::getDBO();
	$editor =& JFactory::getEditor();	
	if ($type=="add") {
		if (!$recipe_id) {
			$recipe_id = JRequest::getVar('id', '' );
		}
	} else {	
		$step_id = $id;
		$step = rr_getonerow('Select * from #__rr_steps where step_id= ' . $database->getEscaped($step_id) );
		$recipe_id = $step->recipe_id;
	}


?>
			<script language="javascript" type="text/javascript">

		function rr_ChooseSelectedImage(srcListName,targetField,imgToChange,base_path ) {
			var form = eval( 'document.adminForm' );
			var srcList = eval( 'form.' + srcListName );
			var tgtField = eval( 'form.' + targetField );
			var trgImage = eval( "document." + imgToChange );
			

			var fileName = srcList.options[srcList.selectedIndex].text;
			var fileName2 = srcList.options[srcList.selectedIndex].value;
			if (fileName.length == 0 || fileName2.length == 0) {
				trgImage.src = 'images/blank.gif';
				tgtField.value = '';
			} else {
				trgImage.src = base_path + '/' + fileName2;
				tgtField.value = fileName2;	
			}
		}	

		function submitbutton(pressbutton, section) {
			var form = document.adminForm;
			if (pressbutton == 'cancel') {
				submitform( pressbutton );
				return;
			}

			if ( form.title.value == "" ) {
				alert( "<?php echo _RR_SELECT_DESCRIPTION; ?>" );
				return;
			}

			if ( pressbutton == "apply" ) {
				form.hidemainmenu.value=1;
			}

			if ( pressbutton == "upload" ) {
				form.hidemainmenu.value=1;
			}
			
		<?php echo $editor->save( 'description' ); ?>
		
		submitform(pressbutton);
		}
		</script>

		<form action="index2.php" method="post" name="adminForm" enctype="multipart/form-data" >
		<input type="hidden" name="option" value="com_rapidrecipe" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="task" value="adminsteps" />		
		<input type="hidden" name="section" value="steps" />
		<input type="hidden" name="chosen" value="" />
		<input type="hidden" name="paginator" value="<?php echo _adm_rec_per_page; ?>" />
		<input type="hidden" name="category_id" value="<?php echo _category_id; ?>" />			
		<input type="hidden" name="page" value="<?php echo _page; ?>"> 
		<input type="hidden" name="search" value="<?php echo _search; ?>"> 
		<input type="hidden" name="parent_id" value="<?php echo $recipe_id ?>" />
		<input type="hidden" name="hidemainmenu" value="0"> 

		<input type="hidden" name="id" value="<?php echo $step->step_id; ?>"> 
		<table class="adminheading">
		<tr>
			<th class="steps">
			    <?php echo _RR_RECIPE_STEP; ?>
                            <small><?php echo JText::_('Edit'); ?></small>
			</th>
		</tr>
		</table>

		<table width="100%">

		<tr>
			<td valign="top" width="60%">
				<table class="adminform">
				<tr>
					<th colspan="3">
					    <?php echo _RR_STEP_DETAILS; ?>
					</th>
				<tr>

				<tr>
					<td valign="top">
					    <?php echo _RR_DESCRIPTION; ?>
					</td>
					<td colspan="2">
					
<?php  	echo $editor->display( 'description' , $step->description, '400', '200', '79', '15' ); ?>
					</td>
				</tr>

				<tr>
					<td valign="top">
					    <?php echo _RR_STEP_IMAGE; ?>
					</td>
					<td colspan="2">

<?php
	$jscript = 'onClick="rr_ChooseSelectedImage' . "('imagefiles','image','step_image', '../images/stories/rapidrecipe')" . '"';
	echo JHTML::_( 'list.images', 'imagefiles', '', $jscript , '/images/stories/rapidrecipe/' ); 
?>
						<img name="step_image" src="../images/stories/rapidrecipe/<?php echo $step->image; ?>" width="150">
						<input type="hidden" name="image" value="<?php echo $step->image; ?>" />

					</td>
				</tr>
				</table>
			</td>

		</tr>
	</table>
	</form>
	
<?php	
}


########################################################################
########################################################################
#################       CATEGORIES 				       #################
########################################################################
########################################################################


function rr_saveaddcategory($id) {
	global $rr_conf;
	$database = & JFactory::getDBO();
	$uploaded_file = rr_img_upload('cat');
	if ($uploaded_file) {
		$image = $uploaded_file;
	} else {
		$image		= trim( JRequest::getVar('image', '' ) );	
	}
	
	$title		= trim( JRequest::getVar('title', '' ) );
	$description= trim( JRequest::getVar('description', '', 'POST', 'STRING', JREQUEST_ALLOWRAW ) );
	$published	= trim( JRequest::getVar('published', '' ) );
	$parent_id	= trim( JRequest::getVar('parent_id', '' ) );

	//Category parameters:
	$in_nav_module= trim( JRequest::getVar('in_nav_module', '' ) );
	$in_glance_box= trim( JRequest::getVar('in_glance_box', '' ) );
	$in_front_page= trim( JRequest::getVar('in_front_page', '' ) );
	$in_featured= trim( JRequest::getVar('in_featured', '' ) );
	$pagetitle_overide= trim( JRequest::getVar('pagetitle_overide', '' ) );

	if ($id>0) {
		rr_runSQL("UPDATE #__rr_categories set 
				title='" . $database->getEscaped($title) . "' , 
				description='" . $database->getEscaped($description) . "' , 
				image ='" . $database->getEscaped($image) . "' , 
				published =" . $database->getEscaped($published) . ", 
				parent_id =" . $database->getEscaped($parent_id) . " ,  
				in_nav_module=" . $database->getEscaped($in_nav_module) . " ,
				in_glance_box= " . $database->getEscaped($in_glance_box) . " ,
				in_featured= " . $database->getEscaped($in_featured) . " ,
				pagetitle_overide= '" . $database->getEscaped($pagetitle_overide) . "' ,
				in_front_page= " . $database->getEscaped($in_front_page) . " 	 
			where category_id=" . $id);
		echo '<div class="message">'. _RR_CHANGES_COMMITED .'</div>';
	} else {

		//find out the latest orderingnr for categories
		$qresult = rr_getonerow('Select max(ordering) as maxordering from #__rr_categories');
		$newordering = $qresult->maxordering + 1;		

		$query = "INSERT INTO `#__rr_categories` ( 
			title, 
			description, 
			image, 
			published, 
			ordering, 
			parent_id, 
			in_nav_module, 
			in_glance_box,
			in_featured,
			pagetitle_overide,
			in_front_page ) 
		VALUES ('". $database->getEscaped($title) ."', '" . 
		$description . "', '" . 
		$database->getEscaped($image) . "'," . 
		$database->getEscaped($published) ." , " . 
		$database->getEscaped($newordering) .", " . 
		$database->getEscaped($parent_id) .", " . 
		$database->getEscaped($in_nav_module) . ", " . 
		$database->getEscaped($in_glance_box) . ", " . 
		$database->getEscaped($in_featured) . ", '" . 
		$database->getEscaped($pagetitle_overide) . "', " . 
		$database->getEscaped($in_front_page) . ");"; 
		
		rr_runSQL( $query);
		echo '<div class="message">' . _RR_CATEGORY . ' "' . $title . '" ' .  _RR_ADDED_DATABASE . '</div>';
		$lastcategoryline = rr_getonerow('Select max(category_id) as category_id from #__rr_categories');
		$id =$lastcategoryline->category_id;	
	}			
	
	rr_normalisecategoriesALL();
	return $id;

}





function rr_admincategories () {
	global $mosConfig_live_site, $rr_conf;
	
	$parentid = intval(JRequest::getVar('parentid', '' ));
	if ($parentid==0) {
		$rrcategories = rr_GetCategoriesAllAdmin(0);
	} else {
		$rrcategories = rr_GetCategoriesAllAdmin(0,$parentid);
	}
	$cnt = count($rrcategories);
	$cntminus1 = $cnt-1;
	
	$rrcatwithchildren = rr_GetCategoriesWithChildren();
	
?>
	<script language="Javascript" src="<?php echo $mosConfig_live_site; ?>/joomla/includes/js/overlib_mini.js"></script>
	<div id="overDiv" style="position:absolute; visibility:hidden; z-index:10000;"></div>
	<form action="index2.php" method="post" name="adminForm">
	<input type="hidden" name="option" value="com_rapidrecipe" />
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="task" value="admincategories" />		
	<input type="hidden" name="section" value="categories" />
	<input type="hidden" name="chosen" value="" />
	<input type="hidden" name="hidemainmenu" value="0" />
	<table class="adminheading">
		<tr>
			<th class="edit" rowspan="2" nowrap>
				<?php echo _RR_CATEGORY_MANAGER; ?>
			</th>
			<td>
				<select name="parentid" class="inputbox" size="1" onchange="document.adminForm.submit();">
<?php
		echo '<option value="0" >  -' .  JText::_( 'Search' ) . '- ' . "\n";
		echo '<option value="toplevel" >' . _RR_CAT_TOPLEVEL . "\n";
		echo '<option value="frontpage" >' . _RR_CAT_FRONTPAGE  . "\n";
		foreach ($rrcatwithchildren as $category) {
			$curcatid = $category->category_id;
			$selected = "";
			if ($curcatid == $parentid) {
				$selected = ' selected="selected" ';
			}
			echo '<option value="'. $curcatid . '" ' .  $selected . '> ' . $category->title  . "\n";				
		};
?>
				</select>								
			</td>

		<tr>
	</table>

		<table class="adminlist">
		<tr>
			<th width="10" align="left">#</th>
			<th width="20"><input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo $cnt; ?>);" /></th>
			<th class="title"><?php echo _RR_CATEGORY_NAME; ?></th>
			<th width="10%"><?php echo JText::_( 'Published' ); ?></th>
			<th width="2%"><?php echo JText::_( 'Order' ); ?></th>
			<th width="1%"><a href="javascript: saveorder( <?php echo $cntminus1; ?> )"><img src="images/filesave.png" border="0" width="16" height="16" alt="Save Order" /></a></th>
			<th width="20"><?php echo _RR_CONF_FEATURED; ?></th>
			<th width="5%" nowrap><?php echo _RR_CATEGORY_ID; ?></th>
			<th width="10%"># <?php echo _RR_SUBCATEGORIES; ?></th>
			<th width="10%"># <?php echo _RR_RECIPES; ?></th>
		</tr>



<?php	
	
	$i=1;
	foreach ($rrcategories as $category) {
		$id = $category-> category_id;
		$row= "row" . ($i % 2); 
		$cb = $i-1;
		echo '<tr class="' . $row . '">'. "\n";
		echo '<td>'  . $i . "</td> \n";
		echo '<td><input type="checkbox" id="cb' . $cb . '" name="cid[]" value="' . $id . '" onclick="isChecked(this.checked);" /></td>'. "\n";
		echo '<td><a href="index2.php?option=com_rapidrecipe&task=edit&id='. $id . '&hidemainmenu=1&section=categories">' . $category-> title  . "</a></td>\n";
		echo '<td align="center">' . "\n";

		if ($category->published) {
			echo '<a href="index2.php?option=com_rapidrecipe&task=unpublish&id='. $id . '&section=categories"><img src="images/publish_g.png" width="12" height="12" border="0" alt="Published" /></a></td>'. "\n";
		} else {
			echo '<a href="index2.php?option=com_rapidrecipe&task=publish&id='. $id . '&section=categories"><img src="images/publish_x.png" width="12" height="12" border="0" alt="No" /></a></td>'. "\n";
		}

		echo '<td align="center" colspan="2"><input type="text" name="order[]" size="5" value="' . $category-> ordering . '" class="text_area" style="text-align: center" /></td>'. "\n";

		echo '<td align="center">' . "\n";
		if ($category->in_featured) {
			echo '<a href="index2.php?option=com_rapidrecipe&task=unfeature&id='. $id . '&section=categories"><img src="images/publish_g.png" width="12" height="12" border="0" alt="Featured" /></a></td>'. "\n";
		} else {
			echo '<a href="index2.php?option=com_rapidrecipe&task=feature&id='. $id . '&section=categories"><img src="images/publish_x.png" width="12" height="12" border="0" alt="UnFeatured" /></a></td>'. "\n";
		}

		echo '<td align="center">' . $category-> category_id . '</td>'. "\n";
		
		//$subsrow = rr_getonerow('SELECT count(*) as cnt FROM #__rr_categories WHERE parent_id=' . mysql_real_escape_string($id));
		
		if ($category-> child_categories) {
			echo '<td align="center"><a href="index2.php?option=com_rapidrecipe&task=admincategories&parentid=' . $id . '">' . $category-> child_categories . '</a></td>'. "\n";			
		} else {
			echo '<td align="center">' . $category-> child_categories . '</td>'. "\n";			
		}			
		//$subsrow = rr_getonerow('SELECT count(*) as cnt FROM #__rr_recipecategory WHERE category_id=' . mysql_real_escape_string($id));
		if ($category-> child_imidiate_recipes) {
			echo '<td align="center"><a href="index2.php?option=com_rapidrecipe&task=adminrecipes&category_id=' . $id . '">' . $category-> child_imidiate_recipes . '</td>'. "\n";	
		} else {
			echo '<td align="center">' . $category-> child_imidiate_recipes . '</td>'. "\n";			
		}		
		$i++;
	}

	echo '</table>';
	
?>
	<table class="adminheading">
		<tr>
			<th class="edit" rowspan="2" nowrap>
				<?php echo _RR_CATEGORY_TREE; ?>
			</th>
		</tr>
	</table>
<?php
rr_echoCategoryTree();

}

#########################################################
#########################################################

function rr_GetChildCategoriesAdmin ($category_id) {
	global $rr_conf;
	$database = & JFactory::getDBO();
	$query = 'SELECT category_id, title, description, child_imidiate_recipes, child_categories, child_all_recipes  
		FROM #__rr_categories WHERE parent_id=' . $database->getEscaped($category_id) . ' ORDER BY ordering';
	$database->setQuery( $query );
	return $database->loadObjectList();
}


function rr_echoSubCategoryTree ($category_id, $section) {
	global $rr_conf;
	//Get the imediate child categories	
	$childcategories = rr_GetChildCategoriesAdmin($category_id);
	$cntC = count($childcategories);

	//If it has children categories, count theirs,
	if ($cntC>0) {
		echo "   <ul> \n";	
		foreach ($childcategories as $childcat) {
			if ($section=="recipes") {
				$link = 'index2.php?option=com_rapidrecipe&task=adminrecipes&category_id='. $childcat->category_id . '&section=recipes';						
				if ($childcat->child_all_recipes) {
					echo '      <li><a href="' . $link . '">' . $childcat->title ."</a></li>". "\n";
				}
			} else {
				$link = 'index2.php?option=com_rapidrecipe&task=edit&id='. $childcat->category_id . '&hidemainmenu=1&section=categories';
				echo '      <li><a href="' . $link . '">' . $childcat->title ."</a></li>". "\n";
			}

			rr_echoSubCategoryTree($childcat->category_id, $section);
		}
		echo "   </ul> \n";							
	}
}


function rr_echoCategoryTree ($section='categories') {
	global $rr_conf;
	
	$toplevel = rr_GetCategoriesAllAdmin(0,'toplevel');
	echo '<table align="left"><tr><td>' . "\n";
	echo '<ul>' . "\n";	
	foreach ($toplevel as $maincat) {
		if ($section=="recipes") {
			$link = 'index2.php?option=com_rapidrecipe&task=adminrecipes&category_id='. $maincat->category_id . '&section=recipes';
			if ($maincat->child_all_recipes) {
				echo '   <li><a href="' . $link . '">' . $maincat->title ."</a></li>". "\n";
			}	
		} else {
			$link = 'index2.php?option=com_rapidrecipe&task=edit&id='. $maincat->category_id . '&hidemainmenu=1&section=categories';			
			echo '   <li><a href="' . $link . '">' . $maincat->title ."</a></li>". "\n";
		}

		rr_echoSubCategoryTree ($maincat->category_id, $section);
		echo "</li> \n";
	}
	echo '</ul>' . "\n";
	echo '</td></tr></table>' . "\n";	
}	


#########################################################
#########################################################


function rr_editaddcategory($category_id='') {
	global $mosConfig_absolute_path, $rr_conf;
	$database = & JFactory::getDBO();
	$editor =& JFactory::getEditor();
    $rrcategories = rr_GetCategoriesAllAdmin(0,'',$category_id);
	$category = rr_getonerow('Select * from #__rr_categories where category_id= ' . $database->getEscaped($category_id) );
	$category_id = $category->category_id;
	$parentid=$category->parent_id;


?>
			<script language="javascript" type="text/javascript">
		function submitbutton(pressbutton, section) {
			var form = document.adminForm;
			if (pressbutton == 'cancel') {
				submitform( pressbutton );
				return;
			}

			if ( form.title.value == "" ) {
				alert( "<?php echo _RR_SELECT_TITLE; ?>" );
				return;
			}

			if ( pressbutton == "apply" ) {
				form.hidemainmenu.value=1;
			}

			if ( pressbutton == "upload" ) {
				form.hidemainmenu.value=1;
			}
		<?php echo $editor->save( 'description' ); ?>	
		
		submitform(pressbutton);
		}
		
		function rr_ChooseSelectedImage(srcListName,targetField,imgToChange,base_path ) {
			var form = eval( 'document.adminForm' );
			var srcList = eval( 'form.' + srcListName );
			var tgtField = eval( 'form.' + targetField );
			var trgImage = eval( "document." + imgToChange );

			var fileName = srcList.options[srcList.selectedIndex].text;
			var fileName2 = srcList.options[srcList.selectedIndex].value;
			if (fileName.length == 0 || fileName2.length == 0) {
				trgImage.src = 'images/blank.gif';
				tgtField.value = '';
			} else {
				trgImage.src = base_path + '/' + fileName2;
				tgtField.value = fileName2;	
			}
		}		
		
		</script>

		<form action="index2.php" method="post" name="adminForm" enctype="multipart/form-data" >
		<input type="hidden" name="option" value="com_rapidrecipe" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="task" value="admincategories" />		
		<input type="hidden" name="section" value="categories" />
		<input type="hidden" name="chosen" value="" />
		<input type="hidden" name="hidemainmenu" value="0"> 
		<input type="hidden" name="id" value="<?php echo $category->category_id; ?>"> 
		<table class="adminheading">
		<tr>
			<th class="categories">
			    <?php echo _RR_RECIPE_CATEGORY; ?>
                            <small><?php echo JText::_( 'Edit' ); ?></small>
			</th>
		</tr>
		</table>

		<table width="100%">

		<tr>
			<td valign="top" width="60%">
				<table class="adminform">
				<tr>
					<th colspan="3">
					    <?php echo _RR_CATEGORY_DETAILS; ?>
					</th>
				</tr>
				<tr>

					<td>
					    <?php echo _RR_CATEGORY_TITLE; ?>
					</td>
					<td colspan="2">
					<input class="text_area" type="text" name="title" value="<?php echo $category->title; ?>" size="50" maxlength="50" title="A short name to appear in menus" />
					</td>
				</tr>
					

				<tr>

					<td>
					    <?php echo _RR_PARENT_CATEGORY; ?>
					</td>
					<td colspan="2">
					<select name="parent_id">		
					<option value="0">				
<?php
		foreach ($rrcategories as $parcategory) {
			$curcatid = $parcategory->category_id;
			if ($category_id!=$curcatid) {		
				$selected = "";
				if ($curcatid == $parentid) {
					$selected = ' selected="selected" ';
				}
				echo '<option value="'. $curcatid . '" ' .  $selected . '> ' . $parcategory->title  . "\n";	
			}
		}
?>
					</select>
					</td>
				</tr>					
					
				<tr>
					<td>
					    <?php echo JText::_( 'Published' ); ?>:
					</td>
					<td>				
						<?php rr_radio('published', $category->published,1); ?>
					</td>
				</tr>
				<tr>
					<td>
					    <?php echo _RR_CAT_NAV_APPEAR; ?>
					</td>
					<td>	
						<?php rr_radio('in_nav_module',$category->in_nav_module,1); ?>			
					</td>
				</tr>
				<tr>
					<td>
					    <?php echo _RR_CAT_GLANCE_APPEAR; ?>
					</td>
					<td>
						<?php rr_radio('in_glance_box',$category->in_glance_box,1); ?>	
					</td>
				</tr>					

				<tr>
					<td>
					    <?php echo _RR_CAT_HOME_APPEAR; ?>
					</td>
					<td>
						<?php rr_radio('in_front_page',$category->in_front_page,1); ?>	
					</td>
				</tr>	

				<tr>
					<td>
					    <?php echo _RR_CAT_FEATURED_APPEAR; ?>
					</td>
					<td>
						<?php rr_radio('in_featured',$category->in_featured,1); ?>	
					</td>
				</tr>

				<tr>
					<td valign="top">
					    <?php echo _RR_DESCRIPTION; ?>
					</td>
					<td colspan="2">
<?php  	echo $editor->display( 'description' , $category->description, '400', '200', '79', '15' ); ?>
					</td>
				</tr>

				<tr>

					<td>
					    Overide page title (SEO)
					</td>
					<td colspan="2">
					<input class="text_area" type="text" name="pagetitle_overide" value="<?php echo $category->pagetitle_overide; ?>" size="50" maxlength="50" title="A page title overide for SEO reasons. It will default to the category name if you leave it blank." />
					</td>
				</tr>				
				
				<tr>
					<td valign="top">
					   <?php echo _RR_CATEGORY_IMAGE; ?>
					</td>
					<td colspan="2">
					<img name="selected_image" src="../images/stories/rapidrecipe/th/<?php echo $category->image; ?>">
					<input type="hidden" name="image" value="<?php echo $category->image; ?>" />
					</td>
				</tr>
				</table>
			</td>
			<td height="100%" valign="top">

<?php
	$jscript = 'onClick="rr_ChooseSelectedImage' . "('imagefiles','image','selected_image', '../images/stories/rapidrecipe')" . '"';

	//if the image is not png or jpg, then we have a problem creating the thumbnail. So lets just show it
	if ((substr($recipe->image,-4)==".jpg") ||(substr($recipe->image,-4)==".png")) {	
		$imgstr = '../images/stories/rapidrecipe/th/' . $recipe->image;
	} else {
		$imgstr = '../images/stories/rapidrecipe/' . $recipe->image;		
	}							
?>
					<?php echo JHTML::_( 'list.images', 'imagefiles', '', $jscript , '/images/stories/rapidrecipe/' ); ?>

			<table class="adminform">
				<tr>  
					<th><?php echo _RR_UPLOAD_IMAGE; ?></th>
				<tr>
				<tr>
					<td><?php echo _RR_IMAGE_SAVE_LOCATION; ?> ("/images/stories/rapidrecipe")<br>
						<input class="inputbox" type="file" name="upload" id="upload" size="30"><br>
							<?php echo _RR_IMAGE_MAXSIZE; ?><br>
					</td>
				</tr>
			</table>					

			</td>
		</tr>
	</table>
	
<?php	
}



########################################################################
########################################################################
#################       CATEGORIES 	END			       #################
########################################################################
########################################################################

function rr_recipe_image_upload ($recipe_id) {
	global $rr_conf;
	
	//upload the image if any
	$uploaded_file = rr_img_upload($recipe_id);
	
	$uploaded_file= basename ($uploaded_file);
	
	
	if ($uploaded_file) {
		$uploaded_file= basename ($uploaded_file);
		$imagestr= $uploaded_file;
	} else {
		$imagestr = trim( JRequest::getVar('image', '' ) );

		//check and create the images rapidrecipe directory.
		$path = JPATH_ROOT.DS. 'images'.DS.'stories'.DS.'rapidrecipe';
		if (!file_exists($path)) {
			JFolder::create($path, 0777);
		}

		//check and create the thumbnails directory
		$path = JPATH_ROOT.DS. 'images'.DS.'stories'.DS.'rapidrecipe'.DS.'th';
		if (!file_exists($path)) {
			JFolder::create($path, 0777);
		}

	
		//check if it has a thumbnail
		$original = JPATH_BASE.DS . 'images'.DS.'stories'.DS.'rapidrecipe'.DS. $imagestr;
		$th = JPATH_BASE.DS . 'images'.DS.'stories'.DS.'rapidrecipe'.DS.'th'.DS.$imagestr;
		if (!file_exists($th)) {
			if ((substr($original,-4)==".jpg") ||(substr($original,-4)==".png")) {
				//create the thumbnail
				//echo "$dest_dir.$file_uploaded , $dest_dir_th.$file_uploaded <br>";
				$thumbnail_width = _recipe_img_size;
				rr_resize_image($original, $th, $thumbnail_width , 'gd2', 75);
			}				
		}
	}		
	return $imagestr;
}



function rr_publish($section, $order, $cid, $published) {
	global $rr_conf;
	$database = & JFactory::getDBO();
	switch ($section) {	
		case 'categories':
			$table = "#__rr_categories";
			$field = "category_id";
			break;
		case 'recipes':
			$table = "#__rr_recipes";
			$field = "recipe_id";
			break;
	}				
	$cnt = count($cid);
	for ($i = 0; $i < $cnt; $i++) {
		$query = "UPDATE " . $table . " SET published = " . $published . " WHERE " . $field . "=" . $database->getEscaped($cid[$i]);
		rr_runSQL ($query);
	}
}


function rr_remove($section, $order, $cid) {
	global $rr_conf;
	$database = & JFactory::getDBO();
	$cnt = count($cid);
	switch ($section) {	
		case 'categories':
			for ($i = 0; $i < $cnt; $i++) {
				$selsubs = rr_getonerow('SELECT count(subcategory_id) AS cntsub from #__rr_subcategories WHERE category_id=' . $database->getEscaped($cid[$i]));	
				$cntsub = $selsubs->cntsub;
				if ($cntsub > 0) {
					$catitle = rr_getonerow('SELECT title from #__rr_categories WHERE category_id=' . $database->getEscaped($cid[$i]));	
					$title= $catitle->title;
					echo '<div class="message">' ._RR_CATEGORY . "' . $title . '" . _RR_CANNOT_REMOVE . '</div>';
				} else {
					$query = 'DELETE FROM #__rr_categories  WHERE category_id =' . $database->getEscaped($cid[$i]);
					rr_runSQL ($query);
				}
			}
			rr_admincategories();
			break;

		case 'recipes':
			for ($i = 0; $i < $cnt; $i++) {
				rr_runSQL ('UPDATE #__rr_recipes SET deleted=1 WHERE recipe_id =' . $database->getEscaped($cid[$i]));
			}
			rr_UpdateCountCategoriesImidiateRecipes();
			rr_adminrecipes();
			break;

		case 'trash':
			for ($i = 0; $i < $cnt; $i++) {
				rr_runSQL ('DELETE FROM #__rr_recipes WHERE recipe_id =' . $database->getEscaped($cid[$i]));
			}
			rr_adminrtrash();
			break;

		case 'comments':
			$parent_id_row= rr_getonerow('Select recipe_id from #__rr_comment where comment_id= ' . $database->getEscaped($cid[0]) );
			rr_runSQL("DELETE FROM #__rr_comment where comment_id=" . $database->getEscaped($cid[0]));
			echo '<div class="message">' ._RR_REMOVE_REVIEW . '</div>';
			rr_editaddrecipe($parent_id_row->recipe_id);
			break;

		case 'steps':
			$parent_id_row= rr_getonerow('Select recipe_id from #__rr_steps where step_id= ' . $database->getEscaped($cid[0]) );
			rr_runSQL("DELETE FROM #__rr_steps where step_id=" . $database->getEscaped($cid[0]));
			echo '<div class="message">' ._RR_REMOVE_STEP . '</div>';
			rr_editaddrecipe($parent_id_row->recipe_id);
			break;

	}				
}


function rr_saveorder($section, $cid) {
	global $rr_conf;
	$database = & JFactory::getDBO();	
	$order= JRequest::getVar('order', '' );
	switch ($section) {	
		case 'categories':
			$cnt = count($cid);
			for ($i = 0; $i < $cnt; $i++) {
				$query = "UPDATE #__rr_categories 
						SET ordering = " . $database->getEscaped($order[$i]) . " 
						WHERE category_id=" . $database->getEscaped($cid[$i]);
				rr_runSQL ($query);
			}
			rr_admincategories();
			break;
		case 'recipes':
			$cnt = count($cid);			
			for ($i = 0; $i < $cnt; $i++) {
				$query = "UPDATE #__rr_recipes 
				SET ordering = " . $database->getEscaped($order[$i]) . " WHERE recipe_id=" . $database->getEscaped($cid[$i]);
				rr_runSQL ($query);
			}
			rr_adminrecipes();
			break;

	}
					
}

#############################
// DATABASE RELATED FUNCTIONS
#############################

	



function rr_GetRecipiessAll($published='', $search='',$parentid=0, $page='') {
	global $rr_conf;
	$database = & JFactory::getDBO();
	$query = 'SELECT c.*, u.username
				FROM #__rr_recipes as c, #__users as u 
				WHERE c.deleted=0
					AND c.created_by=u.id';
	if ($published!='') {
		$query .= ' AND c.published = ' . $published;
	}
	
	if ($parentid!=0) {
		$qst = rr_ChildRecipeListALLqst ($parentid);
		
		$query .= ' AND (' . $qst . ') ';	
	} 
	if ($search!='') {
		$query .= " AND c.title like  '%" . $database->getEscaped($search) . "%' " ;
	}		


	$query .= ' ORDER BY c.ordering';
	if ($page!='') {
		$start=(($page-1) * _adm_rec_per_page);	
	} else {
		$start=0;
	}	
	$query .= " LIMIT $start , " . _adm_rec_per_page ;	
	
	$database->setQuery( $query );	
	//echo $query . "<br>";
	return $database->loadObjectList();
}

function rr_CountRecipiessAll($published='', $search='',$parentid=0) {
	global $rr_conf;
	$database = & JFactory::getDBO();	
	
	$query = 'SELECT count(*)
				FROM #__rr_recipes as c
				WHERE c.deleted=0';
	if ($published!='') {
		$query .= ' AND c.published = ' . $published;
	}
	
	if ($parentid!=0) {
		$qst = rr_ChildRecipeListALLqst ($parentid);
		
		$query .= ' AND (' . $qst . ') ';	
	} 
	if ($search!='') {
		$query .= " AND c.title like  '%" . $database->getEscaped($search) . "%' " ;
	}		


	$query .= ' ORDER BY c.ordering';	
	
	$database->setQuery( $query );	
	//echo $query;
	return $database->loadResult();
}


function rr_GetCategoriesAllAdmin($onlypublished=0, $parentid='', $nochildcategory='') {
	global $rr_conf;
	$database = & JFactory::getDBO();
	$query = 'SELECT *
				FROM #__rr_categories as c WHERE 1';
	if ($onlypublished) {
		$query .= ' AND c.published = 1';
	}

	if ($nochildcategory!='') {
		$childcats = rr_GetChildCategoriesALLAdmin($nochildcategory);
		if (count($childcats)) {
			foreach ($childcats as $child) {
				$query .= ' AND c.category_id <> ' . $child;
			}
		}
	}
		
	
	if ($parentid=='toplevel') {
		$query .= ' AND c.parent_id = 0';	
	} else if ($parentid=='frontpage') {
		$query .= ' AND c.in_front_page = 1';	
	} else if ($parentid>0) {
		$query .= ' AND c.parent_id = ' . $database->getEscaped($parentid);
	}		

	$query .= ' ORDER BY c.ordering';
	$database->setQuery( $query );
	
	//echo $query;
	return $database->loadObjectList();
}

function rr_GetStepsAll($recipe_id) {
	global $rr_conf;
	$database = & JFactory::getDBO();
	$query = 'SELECT * FROM #__rr_steps WHERE recipe_id=' . $database->getEscaped($recipe_id) . ' ORDER BY ordering';
	$database->setQuery( $query );
	return $database->loadObjectList();
}

function rr_GetCategoriesWithChildren() {
	global $rr_conf;
	$database = & JFactory::getDBO();
	$query = 'SELECT r1.category_id, r1.title FROM #__rr_categories r1, #__rr_categories r2  
				WHERE r1.category_id = r2.parent_id
				GROUP BY r1.category_id, r1.title';
	$database->setQuery( $query );
	//echo $query;
	return $database->loadObjectList();
}

function rr_CategoryHasChildRecipiesAdmin ($category_id) {
	global $rr_conf;
	//Get the imediate child categories	
	$childcategories = rr_GetChildCategoriesAdmin($category_id);
	$cntC = count($childcategories);	
	$res=0;
	if (rr_CategoryHasImidiateChildRecipies($category_id)) {
		$res=1;	
	} else {
		//If it has children categories, count theirs,
		if ($cntC>0) {
			foreach ($childcategories as $childcat) {
				$cnt_child_imidiate_recipes = $childcat->child_imidiate_recipes;
				if ($cnt_child_imidiate_recipes) {
					$res=1;	
				}
				if (rr_CategoryHasChildRecipiesAdmin ($childcat->category_id)) {
					$res=1;	
				}
			}
		}
	}
	return $res;
}



function rr_GetChildRecipiesALLAdmin ($category_id) {
	global $rr_conf;
	
	//Get the imediate child categories	
	$childcategories = rr_GetChildCategoriesAdmin($category_id);
	$cntC = count($childcategories);
	
	$AllChildCategories = array();
	$catRecipies = rr_GetChildRecipiesAdmin($category_id);
	foreach ($catRecipies as $catRes) {
		array_push($AllChildCategories, $catRes->recipe_id);
	}

	//If it has children categories, count theirs,
	if ($cntC>0) {
		foreach ($childcategories as $childcat) {
			$ThisCatRecipies = rr_GetChildRecipiesALLAdmin($childcat->category_id);
			foreach ($ThisCatRecipies as $catRes) {
				array_push($AllChildCategories, $catRes);
			}
		}			
	}
	
	return $AllChildCategories;
}

function rr_GetChildRecipiesAdmin ($category_id) {
	global $rr_conf;
	$database = & JFactory::getDBO();
	
	$query = "SELECT c.recipe_id
				FROM #__rr_recipecategory c
 				WHERE c.category_id=" . $category_id;
	$database->setQuery( $query );
	//echo $query . "<br> \n";
	return $database->loadObjectList();
}

function rr_ChildRecipeListALLqst ($category_id) {
	global $rr_conf;
	
	$reclist= rr_GetChildRecipiesALLAdmin ($category_id);
	$qst = "";
	$i=0;
	foreach ($reclist as $rec) {
		if ($i) {
			$qst .= " OR ";
		}
		$qst .= " recipe_id = " . $rec . " ";
		$i ++;
	}

	return $qst;	

}

function rr_GetChildCategoriesALLAdmin ($category_id) {
	global $rr_conf;
	
	//Get the imediate child categories	
	$childcategories = rr_GetChildCategoriesAdmin($category_id);
	$cntC = count($childcategories);
	$catArray = array();
	
	//If it has children categories, get theirs,
	if ($cntC>0) {
		foreach ($childcategories as $childcat) {
			
			// put the immidiate child categories in the list
			array_push($catArray, $childcat->category_id);
			
			//and now get those childrens children (our grandchild categories)
			$grdchild = rr_GetChildCategoriesALLAdmin($childcat->category_id);

			//and now lets put add those to our original
			$catArray = array_merge($catArray, $grdchild);
		}			
	}
	return $catArray;
}

function rr_GetAdmins () {
	global $rr_conf;
	$database = & JFactory::getDBO();
	
	$query = "SELECT a.id, a.name AS username
			FROM #__users AS a
			WHERE a.usertype = 'Super Administrator'
					OR a.usertype = 'Administrator'";
	$database->setQuery( $query );
	//echo $query . "<br> \n";
	return $database->loadObjectList();
}


function rr_GetTrash () {
	global $rr_conf;
	$database = & JFactory::getDBO();
	
	$query = "SELECT title, recipe_id
			FROM #__rr_recipes
			WHERE deleted = 1";
	$database->setQuery( $query );
	//echo $query . "<br> \n";
	return $database->loadObjectList();
}

########################################
// End of database related functions
########################################






########################################
// start of javascript serving functions
########################################


function rr_echoimageselector($targetfield='image', $targetimage='selected_image', $showupload=1){
	global $mosConfig_live_site, $rr_conf;

	// calls function to read image from directory
	$pathA 		= $mosConfig_absolute_path .'/images/stories';
	$pathL 		= $mosConfig_live_site .'/images/stories';
	$images 	= array();
	$folders 	= array();
	$folders[] 	= mosHTML::makeOption( '/' );
	mosAdminMenus::ReadImages( $pathA, '/', $folders, $images );
	// list of folders in images/stories/
	$lists['folders'] 			= mosAdminMenus::GetImageFolders( $folders, $pathL );	
	// list of images in specfic folder in images/stories/
	$lists['imagefiles']		= mosAdminMenus::GetImages( $images, $pathL );

	echo '<table class="adminform">' . " \n";
	echo '		<tr>
					<th>' . _RR_SELECT_IMAGE . '
					</th>
				<tr>';
	echo "<tr><td>\n";
	echo $lists['folders'];
	echo "</td></tr> \n";
	echo "<tr><td> \n";
	echo $lists['imagefiles'];
	echo "</td></tr> \n";
	echo "<tr><td> \n";
	echo '<img name="view_imagefiles" src="../images/M_images/blank.png" width="100" />';
	echo "</td></tr> \n";
	echo "<tr><td> \n";
	echo '<input class="button" type="button" value="' . _RR_CHOOSE_BUTTON . '" onClick="rr_ChooseSelectedImage' .
	"('adminForm','imagefiles','" . $targetfield . "','" . $targetimage . "', '" . $pathL . "')" . '">' . "\n"; 
	echo '<input class="button" type="button" value="' . _RR_NOIMAGE_BUTTON .'" onClick="rr_ChooseNoImage' .
	"('adminForm','" . $targetfield . "','" . $targetimage . "')" . '">' . "\n"; 
	echo "</td></tr> \n";
	echo "</table>\n";	
	if ($showupload) {
		echo '<table class="adminform">' . " \n";
		echo '		<tr>  <th>' . _RR_UPLOAD_IMAGE .'</th><tr>';
		echo '<tr><td>' . _RR_IMAGE_SAVE_LOCATION . '"/images/stories/rapidrecipe")<br><input class="inputbox" type="file" name="upload" id="upload" size="30"><br>' . _RR_IMAGE_MAXSIZE  . "\n";
		echo '<br><input class="button" type="submit" value="' . _RR_UPLOAD_BUTTON . '" name="fileupload" onclick="' . "javascript:submitbutton('upload')" . ';"/></td></tr>' . "\n";
		echo '</table>'. "\n";
	}
	
	
	// echo the javascript that keeps the image files
?>
		<script language="javascript" type="text/javascript">
		<!--

/**
* Adds a select item(s) from one list to another
*/
  function rr_ChooseSelectedImage( frmName, srcListName,targetField,imgToChange,base_path ) {
	var form = eval( 'document.' + frmName );
	var srcList = eval( 'form.' + srcListName );
	var tgtField = eval( 'form.' + targetField );
	var trgImage = eval( "document." + imgToChange );

	var fileName = srcList.options[srcList.selectedIndex].text;
	var fileName2 = srcList.options[srcList.selectedIndex].value;
	if (fileName.length == 0 || fileName2.length == 0) {
		trgImage.src = 'images/blank.gif';
		tgtField.value = '';
	} else {
		trgImage.src = base_path + '/' + fileName2;
		tgtField.value = fileName2;	
	}
  }

  function rr_ChooseNoImage( frmName,targetField,imgToChange) {
	var form = eval( 'document.' + frmName );
	var tgtField = eval( 'form.' + targetField );
	var trgImage = eval( "document." + imgToChange );

	trgImage.src = 'images/blank.gif';
	tgtField.value = '';
  }

<?php
		echo "var folderimages = new Array;";
	
		$i = 0;
		foreach ($images as $k=>$items) {
			foreach ($items as $v) {
				echo "folderimages[".$i++."] = new Array( '$k','".addslashes( $v->value )."','".addslashes( $v->text )."' );\n\t\t";
			}
		}
		echo "\n" .'		//-->
		</script>';
		
}

########################################
// End of javascript serving functions
########################################

?>
