<?php

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view');


class AmrViewAdd extends JView
{
	function display($tpl = null)
	{
        $user = JFactory::getUser();
		$greeting = "Aloha";
		$this->assignRef( 'greeting', $greeting );
        $this->assignRef( 'user', $user->name );

		parent::display($tpl);
	}
}
