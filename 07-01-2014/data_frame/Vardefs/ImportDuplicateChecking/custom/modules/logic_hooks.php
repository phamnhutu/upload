<?php
/**
 * Created by PhpStorm.
 * User: phamnhu
 * Date: 1/7/2015
 * Time: 5:07 PM
 */

$hook_version = 1;
$hook_array = Array();

$hook_array['after_entry_point'] = Array();
$hook_array['after_entry_point'][] = Array(
    //Processing index. For sorting the array.
    1,

    //Label. A string value to identify the hook.
    'after_entry_point example',

    //The PHP file where your class is located.
    'custom/modules/logic_hooks_class.php',

    //The class the method is in.
    'logic_hooks_class',

    //The method to call.
    'after_entry_point_method'
);

?>