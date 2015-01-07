<?php
// WARNING: The contents of this file are auto-generated.

//Merged from custom/Extension/modules/photo_photo/Ext/Vardefs/sugarfield_codeandcode_c.php

 // created: 2015-01-06 10:35:06
$dictionary['photo_photo']['fields']['codeandcode_c']['labelValue']='codeandcode';
$dictionary['photo_photo']['fields']['codeandcode_c']['enforced']='';
$dictionary['photo_photo']['fields']['codeandcode_c']['dependency']='';

 
//Merged from custom/Extension/modules/photo_photo/Ext/Vardefs/sugarfield_maucolor_street_c.php

 // created: 2015-01-06 10:44:23
$dictionary['photo_photo']['fields']['maucolor_street_c']['group']='maucolor_c';

 
//Merged from custom/Extension/modules/photo_photo/Ext/Vardefs/sugarfield_maucolor_city_c.php

 // created: 2015-01-06 10:44:23
$dictionary['photo_photo']['fields']['maucolor_city_c']['group']='maucolor_c';

 
//Merged from custom/Extension/modules/photo_photo/Ext/Vardefs/sugarfield_maucolor_state_c.php

 // created: 2015-01-06 10:44:24
$dictionary['photo_photo']['fields']['maucolor_state_c']['group']='maucolor_c';

 
//Merged from custom/Extension/modules/photo_photo/Ext/Vardefs/sugarfield_maucolor_postalcode_c.php

 // created: 2015-01-06 10:44:26
$dictionary['photo_photo']['fields']['maucolor_postalcode_c']['group']='maucolor_c';

 
//Merged from custom/Extension/modules/photo_photo/Ext/Vardefs/sugarfield_maucolor_country_c.php

 // created: 2015-01-06 10:44:27
$dictionary['photo_photo']['fields']['maucolor_country_c']['group']='maucolor_c';

 
//Merged from custom/Extension/modules/photo_photo/Ext/Vardefs/sugarfield_ssssd_c.php

 // created: 2015-01-06 10:45:00
$dictionary['photo_photo']['fields']['ssssd_c']['labelValue']='ssssd';
$dictionary['photo_photo']['fields']['ssssd_c']['enforced']='';
$dictionary['photo_photo']['fields']['ssssd_c']['dependency']='';

 
//Merged from custom/Extension/modules/photo_photo/Ext/Vardefs/photo_photo_accounts_1_photo_photo.php

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
