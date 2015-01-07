<?php
// created: 2015-01-06 10:58:12
$dictionary["photo_photo_accounts_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'photo_photo_accounts_1' => 
    array (
      'lhs_module' => 'photo_photo',
      'lhs_table' => 'photo_photo',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'photo_photo_accounts_1_c',
      'join_key_lhs' => 'photo_photo_accounts_1photo_photo_ida',
      'join_key_rhs' => 'photo_photo_accounts_1accounts_idb',
    ),
  ),
  'table' => 'photo_photo_accounts_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'photo_photo_accounts_1photo_photo_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'photo_photo_accounts_1accounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'photo_photo_accounts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'photo_photo_accounts_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'photo_photo_accounts_1photo_photo_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'photo_photo_accounts_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'photo_photo_accounts_1accounts_idb',
      ),
    ),
  ),
);