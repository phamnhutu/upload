<?php

include_once("include/workflow/alert_utils.php");
include_once("include/workflow/action_utils.php");
include_once("include/workflow/time_utils.php");
include_once("include/workflow/trigger_utils.php");
//BEGIN WFLOW PLUGINS
include_once("include/workflow/custom_utils.php");
//END WFLOW PLUGINS
	class Accounts_workflow {
	function process_wflow_triggers(& $focus){
		include("custom/modules/Accounts/workflow/triggers_array.php");
		include("custom/modules/Accounts/workflow/alerts_array.php");
		include("custom/modules/Accounts/workflow/actions_array.php");
		include("custom/modules/Accounts/workflow/plugins_array.php");
		
 if( ( !($focus->fetched_row['website'] ==  '' )) && 
 (isset($focus->website) && $focus->website ==  '')){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['78402157_d3c6_2d61_c08e_54adff00f469'])){
		$triggeredWorkflows['78402157_d3c6_2d61_c08e_54adff00f469'] = true;
		 process_workflow_actions($focus, $action_meta_array['Accounts0_action0']); 
 	$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && is_array($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Accounts'] = isset($_SESSION['WORKFLOW_ALERTS']['Accounts']) && is_array($_SESSION['WORKFLOW_ALERTS']['Accounts']) ? $_SESSION['WORKFLOW_ALERTS']['Accounts'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Accounts'] = array_merge($_SESSION['WORKFLOW_ALERTS']['Accounts'],array ());	}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 


	//end function process_wflow_triggers
	}

	//end class
	}

?>