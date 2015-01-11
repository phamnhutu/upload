<?php

$url = "http://localhost/training2/service/v4_1/rest.php";
$username = "admin";
$password = "123456";

//function to make cURL request
function call($method, $parameters, $url)
{
    ob_start();
    $curl_request = curl_init();

    curl_setopt($curl_request, CURLOPT_URL, $url);
    curl_setopt($curl_request, CURLOPT_POST, 1);
    curl_setopt($curl_request, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
    curl_setopt($curl_request, CURLOPT_HEADER, 1);
    curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_request, CURLOPT_FOLLOWLOCATION, 0);

    $jsonEncodedData = json_encode($parameters);

    $post = array(
        "method" => $method,
        "input_type" => "JSON",
        "response_type" => "JSON",
        "rest_data" => $jsonEncodedData
    );

    curl_setopt($curl_request, CURLOPT_POSTFIELDS, $post);
    $result = curl_exec($curl_request);
    curl_close($curl_request);

    $result = explode("\r\n\r\n", $result, 2);
    $response = json_decode($result[1]);
    ob_end_flush();

    return $response;
}

//login ------------------------------
$login_parameters = array(
    "user_auth" => array(
        "user_name" => $username,
        "password" => md5($password),
        "version" => "1"
    ),
    "application_name" => "RestTest",
    "name_value_list" => array(),
);

$login_result = call("login", $login_parameters, $url);

echo "<pre>";
//print_r($login_result);
echo "</pre>";

//get session id
$session_id = $login_result->id;
//echo $session_id;

/*$search_by_module_parameters = array(
    //Session id
    "session" => $session_id,

    //The string to search for.
    'search_string' => 'Hammer',

    //The list of modules to query.
    'modules' => array(
        'Accounts',
    ),

    //The record offset from which to start.
    'offset' => 0,

    //The maximum number of records to return.
    'max_results' => 2,

    //Filters records by the assigned user ID.
    //Leave this empty if no filter should be applied.
    'id' => '',

    //An array of fields to return.
    //If empty the default return fields will be from the active listviewdefs.
    'select_fields' => array(
        'id',
        'name',
        'account_type',
        'phone_office',
        'assigned_user_name',
    ),

    //If the search is to only search modules participating in the unified search.
    //Unified search is the SugarCRM Global Search alternative to Full-Text Search.
    'unified_search_only' => false,

    //If only records marked as favorites should be returned.
    'favorites' => false
);

$search_by_module_result = call('search_by_module', $search_by_module_parameters, $url);

echo '<pre>';
print_r($search_by_module_result);
echo '</pre>';*/

//get list of records --------------------------------
$get_entry_list_parameters = array(

    //session id
    'session' => $session_id,

    //The name of the module from which to retrieve records
    'module_name' => 'Accounts',

    //The SQL WHERE clause without the word "where".
    'query' => "Accounts.name like  '%CMC%'",
    //The SQL ORDER BY clause without the phrase "order by".
    'order_by' => "name",

    //The record offset from which to start.
    'offset' => '0',

    //Optional. A list of fields to include in the results.
    'select_fields' => array(
        'id',
        'name',
        'title',
    ),

    /*
    A list of link names and the fields to be returned for each link name.
    Example: 'link_name_to_fields_array' => array(array('name' => 'email_addresses', 'value' => array('id', 'email_address', 'opt_out', 'primary_address')))
    */
    'link_name_to_fields_array' => array(
    ),

    //The maximum number of results to return.
    'max_results' => '10',

    //To exclude deleted records
    'deleted' => '0',

    //If only records marked as favorites should be returned.
    'Favorites' => false,
);

$get_entry_list_result = call('get_entry_list', $get_entry_list_parameters, $url);

echo '<pre>';
print_r($get_entry_list_result);
echo '</pre>';
?>