<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class logic_hooks_class
{
    function after_delete_method($bean, $event, $arguments)
    {


//Save
        $GLOBALS['log']->fatar($bean);


    }

    function before_save_method($bean, $event, $arguments)
    {
        //logic
        $bean->name = 'CMC '.$bean->name;
        //$bean->name =  $bean->keyid_c.$bean->name;
    }

    function after_save_method($bean, $event, $arguments)
    {
        $bean->keyconcac_c =  $bean->keyid_c.$bean->name;
        $bean->db->query('update accounts_cstm set keyconcac_c = "'.$bean->keyconcac_c.'" where id_c = "'.$bean->id_c.'"');
    }
}

?>
