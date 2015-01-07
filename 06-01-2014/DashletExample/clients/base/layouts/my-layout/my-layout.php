<?php

$viewdefs['base']['layout']['my-layout'] = array(
    'type' => 'simple',
    'components' => array(
        array(
            'view' => 'my-view',
            
        ),
        array(
            'view' => 'news',
        ),
    ),
    'name' => 'list',
    'span' => 12,
);
