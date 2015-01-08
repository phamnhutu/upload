<?php

$hook_version = 1;
$hook_array = Array();

$hook_array['after_login'] = Array();
$hook_array['after_login'][] = Array(1,
    'after_login example',
    'custom/modules/Users/logic_hooks_class.php',
    'logic_hooks_login_class',
    'after_login_method'
);
?>
