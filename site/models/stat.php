<?php
/**
 * Hello Модель для "Hello" Компонета
 *
 */


// Check to ensure this file is included in Joomla!
defined ('_JEXEC') or die();

jimport( 'joomla.application.component.model' );


class AmrModelStat extends JModel
{

    function getGreeting()
    {
        return 'Hello, World!';
    }
}
?>
