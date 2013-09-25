<?php

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view');


class AmrViewAmr extends JView
{
	function display($tpl = null)
	{
        $user = JFactory::getUser();
		$greeting = "Hello";
		$this->assignRef( 'greeting', $greeting );
        $this->assignRef( 'user', $user->name );

		parent::display($tpl);
	}
}
