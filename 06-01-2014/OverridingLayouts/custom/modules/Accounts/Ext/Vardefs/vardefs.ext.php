<?php
// WARNING: The contents of this file are auto-generated.

//Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_wewefwef_c.php

 // created: 2015-01-06 10:17:11
$dictionary['Account']['fields']['wewefwef_c']['labelValue']='Select color';
$dictionary['Account']['fields']['wewefwef_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['Account']['fields']['wewefwef_c']['enforced']='';
$dictionary['Account']['fields']['wewefwef_c']['dependency']='';

 
//Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_color_c.php

 // created: 2015-01-06 10:30:11
$dictionary['Account']['fields']['color_c']['labelValue']='color';
$dictionary['Account']['fields']['color_c']['enforced']='';
$dictionary['Account']['fields']['color_c']['dependency']='';

 
//Merged from custom/Extension/modules/Accounts/Ext/Vardefs/photo_photo_accounts_1_Accounts.php

// created: 2015-01-06 10:58:12
$dictionary["Account"]["fields"]["photo_photo_accounts_1"] = array (
  'name' => 'photo_photo_accounts_1',
  'type' => 'link',
  'relationship' => 'photo_photo_accounts_1',
  'source' => 'non-db',
  'module' => 'photo_photo',
  'bean_name' => 'photo_photo',
  'vname' => 'LBL_PHOTO_PHOTO_ACCOUNTS_1_FROM_PHOTO_PHOTO_TITLE',
  'id_name' => 'photo_photo_accounts_1photo_photo_ida',
);
$dictionary["Account"]["fields"]["photo_photo_accounts_1_name"] = array (
  'name' => 'photo_photo_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PHOTO_PHOTO_ACCOUNTS_1_FROM_PHOTO_PHOTO_TITLE',
  'save' => true,
  'id_name' => 'photo_photo_accounts_1photo_photo_ida',
  'link' => 'photo_photo_accounts_1',
  'table' => 'photo_photo',
  'module' => 'photo_photo',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["photo_photo_accounts_1photo_photo_ida"] = array (
  'name' => 'photo_photo_accounts_1photo_photo_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_PHOTO_PHOTO_ACCOUNTS_1_FROM_PHOTO_PHOTO_TITLE_ID',
  'id_name' => 'photo_photo_accounts_1photo_photo_ida',
  'link' => 'photo_photo_accounts_1',
  'table' => 'photo_photo',
  'module' => 'photo_photo',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
