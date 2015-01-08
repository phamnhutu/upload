<?php

$dictionary['Contact']['indices'][] = array(
    'name' => 'idx_home_phone_cstm',
    'type' => 'index',
    'fields' => array(
        0 => 'phone_home',
    ),
    'source' => 'non-db',
);