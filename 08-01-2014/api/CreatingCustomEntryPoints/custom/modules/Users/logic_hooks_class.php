<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class logic_hooks_login_class
{
    function after_login_method($bean, $event, $arguments)
    {
        //logic
        //echo '<script>alert("'.$bean->name.'")</script>';
        $GLOBALS['log']->fatal( '11111111' );
    }
}
?>
