<?php
// WARNING: The contents of this file are auto-generated.

//Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_ageone_c.php

 // created: 2015-01-07 09:37:48
$dictionary['Account']['fields']['ageone_c']['labelValue']='ageOne';
$dictionary['Account']['fields']['ageone_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['Account']['fields']['ageone_c']['enforced']='';
$dictionary['Account']['fields']['ageone_c']['dependency']='';

 
//Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_agetwo_c.php

 // created: 2015-01-07 09:38:36
$dictionary['Account']['fields']['agetwo_c']['labelValue']='agetwo';
$dictionary['Account']['fields']['agetwo_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['Account']['fields']['agetwo_c']['enforced']='';
$dictionary['Account']['fields']['agetwo_c']['dependency']='';

 
//Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_agesum_c.php

 // created: 2015-01-07 09:42:55
$dictionary['Account']['fields']['agesum_c']['duplicate_merge_dom_value']=0;
$dictionary['Account']['fields']['agesum_c']['labelValue']='agesum';
$dictionary['Account']['fields']['agesum_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['Account']['fields']['agesum_c']['calculated']='true';
$dictionary['Account']['fields']['agesum_c']['formula']='add($ageone_c,$agesum_c)';
$dictionary['Account']['fields']['agesum_c']['enforced']='true';
$dictionary['Account']['fields']['agesum_c']['dependency']='';

 
//Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_namefile1_c.php

 // created: 2015-01-07 09:49:49
$dictionary['Account']['fields']['namefile1_c']['labelValue']='nameFile1';
$dictionary['Account']['fields']['namefile1_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['Account']['fields']['namefile1_c']['enforced']='';
$dictionary['Account']['fields']['namefile1_c']['dependency']='';

 
//Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_namefile2_c.php

 // created: 2015-01-07 09:50:19
$dictionary['Account']['fields']['namefile2_c']['labelValue']='namefile2';
$dictionary['Account']['fields']['namefile2_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['Account']['fields']['namefile2_c']['enforced']='';
$dictionary['Account']['fields']['namefile2_c']['dependency']='';

 
//Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_namesum_c.php

 // created: 2015-01-07 09:51:14
$dictionary['Account']['fields']['namesum_c']['duplicate_merge_dom_value']=0;
$dictionary['Account']['fields']['namesum_c']['labelValue']='namesum';
$dictionary['Account']['fields']['namesum_c']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['Account']['fields']['namesum_c']['calculated']='true';
$dictionary['Account']['fields']['namesum_c']['formula']='add($namefile1_c,$namefile2_c)';
$dictionary['Account']['fields']['namesum_c']['enforced']='true';
$dictionary['Account']['fields']['namesum_c']['dependency']='';

 
//Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_structor_c.php

 // created: 2015-01-07 10:23:29
$dictionary['Account']['fields']['structor_c']['labelValue']='Structor';
$dictionary['Account']['fields']['structor_c']['visibility_grid']=array (
  'trigger' => 'industry',
  'values' => 
  array (
    '' => 
    array (
    ),
    'Apparel' => 
    array (
    ),
    'Banking' => 
    array (
    ),
    'Biotechnology' => 
    array (
    ),
    'Chemicals' => 
    array (
    ),
    'Communications' => 
    array (
    ),
    'Construction' => 
    array (
    ),
    'Consulting' => 
    array (
    ),
    'Education' => 
    array (
      0 => '1',
      1 => '3',
      2 => '2',
    ),
    'Electronics' => 
    array (
    ),
    'Energy' => 
    array (
    ),
    'Engineering' => 
    array (
      0 => '4',
      1 => '5',
    ),
    'Entertainment' => 
    array (
    ),
    'Environmental' => 
    array (
    ),
    'Finance' => 
    array (
    ),
    'Government' => 
    array (
    ),
    'Healthcare' => 
    array (
    ),
    'Hospitality' => 
    array (
    ),
    'Insurance' => 
    array (
    ),
    'Machinery' => 
    array (
    ),
    'Manufacturing' => 
    array (
    ),
    'Media' => 
    array (
    ),
    'Not For Profit' => 
    array (
    ),
    'Recreation' => 
    array (
    ),
    'Retail' => 
    array (
    ),
    'Shipping' => 
    array (
    ),
    'Technology' => 
    array (
    ),
    'Telecommunications' => 
    array (
    ),
    'Transportation' => 
    array (
    ),
    'Utilities' => 
    array (
    ),
    'Other' => 
    array (
    ),
  ),
);

 