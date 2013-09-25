<?php

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view');


class AmrViewAmr extends JView
{
	function display($tpl = null)
	{
		$greeting = "Hello, World!";
		$this->assignRef( 'greeting', $greeting );

		parent::display($tpl);
	}
}
