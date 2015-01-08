<?php
/**
 * Created by PhpStorm.
 * User: phamnhu
 * Date: 1/7/2015
 * Time: 5:06 PM
 */

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    class logic_hooks_class
    {
        function after_entry_point_method($event, $arguments)
        {
            echo "<script>alert('Alert success');</script>";
        }
    }

?>