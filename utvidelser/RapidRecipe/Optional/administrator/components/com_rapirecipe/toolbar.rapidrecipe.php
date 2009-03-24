<?php
//rapid recipe Component//
/**
* @Copyright (C) 2007 Konstantinos Kokkorogiannis
* @ All rights reserved
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @version 1.6.9
**/
defined('_JEXEC') or die('Restricted access');

global $page;

$section= trim(JRequest::getVar('section'));
//require_once( $mainframe->getPath( 'toolbar_html' ) );


switch ($task){
	case 'new':
	case 'add':
	case 'editcategory':
	case 'apply':
	case 'upload':
	case 'config':
	case 'edit':
		switch ($section) {
			case 'recipes':
				TOOLBAR_RAPIDRECIPE::_EDITRECIPE();	
				break;
			case 'lang':
				TOOLBAR_RAPIDRECIPE::_EDIT_SOURCE();	
				break;
			case 'steps':
			case 'comments':
				TOOLBAR_RAPIDRECIPE::_EDIT_COMMENT_STEP();	
				break;
			default:
				TOOLBAR_RAPIDRECIPE::_EDIT();
		}
		break;
		
	case 'save':
	case 'cancel':
		switch ($section) {
			case 'comments':
			case 'steps':
				TOOLBAR_RAPIDRECIPE::_EDITRECIPE();	
				break;
			case 'config':
				TOOLBAR_RAPIDRECIPE::_EXIT();
				break;			
			default:					
				TOOLBAR_RAPIDRECIPE::_DEFAULT();
		}
		break;

	case 'remove':
		switch ($section) {
			case 'comments':
			case 'steps':
				TOOLBAR_RAPIDRECIPE::_EDITRECIPE();	
				break;		
			default:					
				TOOLBAR_RAPIDRECIPE::_DEFAULT();
		}
		break;	
			
	case 'newstep':	
		TOOLBAR_RAPIDRECIPE::_EDIT();
		break;
		
	case 'moveselect':
		TOOLBAR_RAPIDRECIPE::_MOVE();
		break;

	case 'copyselect':
		TOOLBAR_RAPIDRECIPE::_COPY();
		break;

	case 'admintrash':
	case 'restoreconfirm':
		TOOLBAR_RAPIDRECIPE::_TRASH();		
		break;
		
	case '':
		TOOLBAR_RAPIDRECIPE::_EXIT();
		break;		

	default:
		TOOLBAR_RAPIDRECIPE::_DEFAULT();
		break;
}




class TOOLBAR_RAPIDRECIPE {
	/**
	* Draws the menu for Editing an existing category
	* @param int The published state (to display the inverse button)
	*/

	function _EDIT_SOURCE(){
		
		$bar = & JToolBar::getInstance('toolbar');
		$bar->prependButton( 'custom', '<a href="index.php?option=com_rapidrecipe"><img src="components/com_rapidrecipe/rrlogo.png"></a>' );	

		JToolBarHelper::spacer();
		JToolBarHelper::save();
		JToolBarHelper::spacer();
		JToolBarHelper::cancel();
		
	}

	function _TRASH() {
		
		$bar = & JToolBar::getInstance('toolbar');
		$bar->prependButton( 'custom', '<a href="index.php?option=com_rapidrecipe"><img src="components/com_rapidrecipe/rrlogo.png"></a>' );	

		JToolBarHelper::spacer();
		JToolBarHelper::custom('restoreconfirm','restore.png','restore_f2.png','Restore', true);
		JToolBarHelper::spacer();
		JToolBarHelper::custom('deleteconfirm','delete.png','delete_f2.png','Delete', true);
		JToolBarHelper::spacer();
	echo '<td><a class="toolbar" href="index2.php?option=com_rapidrecipe">'. "\n";
	echo '<img src="images/cancel_f2.png" alt="Cancel" align="middle" name="cancel" border="0" />	<br />Cancel</a></td>' . "\n";
		JToolBarHelper::spacer();
		JToolBarHelper::help( 'screen.trashmanager' );
		
	}

	function _EDIT() {
		global $id;
		
		$bar = & JToolBar::getInstance('toolbar');
		$bar->prependButton( 'custom', '<a href="index.php?option=com_rapidrecipe"><img src="components/com_rapidrecipe/rrlogo.png"></a>' );	
		JToolBarHelper::spacer();
		JToolBarHelper::save();
		JToolBarHelper::spacer();
		JToolBarHelper::apply();
		JToolBarHelper::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			JToolBarHelper::cancel( 'cancel', 'Close' );
		} else {
			JToolBarHelper::cancel();
		}
		JToolBarHelper::spacer();
		JToolBarHelper::help( 'screen.categories.edit' );
		
	}

	function _EDIT_COMMENT_STEP() {
		global $id;
		
		$bar = & JToolBar::getInstance('toolbar');
		$bar->prependButton( 'custom', '<a href="index.php?option=com_rapidrecipe"><img src="components/com_rapidrecipe/rrlogo.png"></a>' );			
		JToolBarHelper::spacer();
		JToolBarHelper::save();
		JToolBarHelper::spacer();
		JToolBarHelper::apply();
		JToolBarHelper::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			JToolBarHelper::cancel( 'cancel', 'Close' );
		} else {
			JToolBarHelper::cancel();
		}
		JToolBarHelper::spacer();
		
		$bar->appendButton( 'custom', '<a class="toolbar" href="' . "javascript:if (confirm('Are you sure you want to delete the comment? If you say yes, the vote will also be deleted. If you want to keep the vote, just delete the review and press save.')){ submitbutton('remove');}" . '"><img src="images/delete_f2.png" alt="Delete" align="middle" name="remove" border="0" />	
					<br />Delete</a>' );


		//JToolBarHelper::deleteList();
		JToolBarHelper::spacer();
		JToolBarHelper::help( 'screen.categories.edit' );
		
	}

	function _EXIT() {
		global $id;

		
	}

	
	function _EDITRECIPE() {
		global $id;
		
		$bar = & JToolBar::getInstance('toolbar');

		$bar->prependButton( 'custom', '<a href="index.php?option=com_rapidrecipe"><img src="components/com_rapidrecipe/rrlogo.png"></a>' );	
		JToolBarHelper::spacer();
		JToolBarHelper::addNewX("newstep", "New Step");
		JToolBarHelper::spacer();
		JToolBarHelper::save();
		JToolBarHelper::spacer();
		JToolBarHelper::apply();
		JToolBarHelper::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			JToolBarHelper::cancel( 'cancel', 'Close' );
		} else {
			JToolBarHelper::cancel();
		}
		JToolBarHelper::spacer();
		JToolBarHelper::help( 'screen.categories.edit' );
		
	}



	function _DEFAULT(){
		$section= trim(JRequest::getVar('section'));


		
		$bar = & JToolBar::getInstance('toolbar');
		$bar->prependButton( 'custom', '<a href="index.php?option=com_rapidrecipe"><img src="components/com_rapidrecipe/rrlogo.png"></a>' );	
	
		
		JToolBarHelper::spacer();
		JToolBarHelper::publishList();
		JToolBarHelper::spacer();
		JToolBarHelper::unpublishList();
		JToolBarHelper::spacer();
		JToolBarHelper::addNewX();
		JToolBarHelper::spacer();
		if ( $section == 'content' || ( $section > 0 ) ) {
			JToolBarHelper::customX( 'moveselect', 'move.png', 'move_f2.png', 'Move', true );
			JToolBarHelper::spacer();
			JToolBarHelper::customX( 'copyselect', 'copy.png', 'copy_f2.png', 'Copy', true );
			JToolBarHelper::spacer();
		}
		JToolBarHelper::editListX();
		JToolBarHelper::spacer();
		JToolBarHelper::deleteList();
		JToolBarHelper::spacer();
		JToolBarHelper::help( 'screen.categories' );
		
	}
}
?>
