<?php

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.controller');


class AmrController extends JController
{
	/**
	 * Method to display the view
	 *
	 * @access    public
	 */
	function display()
	{
		parent::display();
	}

    public function hello(){

        echo "Hello";
        jexit();
    }

}
