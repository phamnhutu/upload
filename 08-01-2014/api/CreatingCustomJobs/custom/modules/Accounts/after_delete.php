<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
    class AfterDelete{
        function doneDelete($bean, $event, $agurment){
            require_once('modules/Cases/Case.php');
            $case = new aCase();
            $case->name = 'New case';
            $case->description = 'ABCD';
            $case->save();
        }
  }
?>
