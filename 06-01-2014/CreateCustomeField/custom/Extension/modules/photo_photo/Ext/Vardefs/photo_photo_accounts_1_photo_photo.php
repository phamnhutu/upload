<?php
// created: 2015-01-06 10:58:12
$dictionary["photo_photo"]["fields"]["photo_photo_accounts_1"] = array (
  'name' => 'photo_photo_accounts_1',
  'type' => 'link',
  'relationship' => 'photo_photo_accounts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_PHOTO_PHOTO_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'photo_photo_accounts_1accounts_idb',
);
$dictionary["photo_photo"]["fields"]["photo_photo_accounts_1_name"] = array (
  'name' => 'photo_photo_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PHOTO_PHOTO_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'photo_photo_accounts_1accounts_idb',
  'link' => 'photo_photo_accounts_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["photo_photo"]["fields"]["photo_photo_accounts_1accounts_idb"] = array (
  'name' => 'photo_photo_accounts_1accounts_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_PHOTO_PHOTO_ACCOUNTS_1_FROM_ACCOUNTS_TITLE_ID',
  'id_name' => 'photo_photo_accounts_1accounts_idb',
  'link' => 'photo_photo_accounts_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
