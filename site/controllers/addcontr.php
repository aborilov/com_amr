<?php

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.controller');


class AmrControllerAddcontr extends JController
{
	/**
	 * Method to display the view
	 *
	 * @access    public
	 */


    public function hello(){

        echo "Hello!!!";
        jexit();
    }

}
