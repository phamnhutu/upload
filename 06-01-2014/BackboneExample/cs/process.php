<?php
	$link = mysql_connect('localhost', 'root', '19911991');
	if (!$link) {
		die('Could not connect: ' . mysql_error());
	}			
	$db_selected = mysql_select_db('project', $link);
	if (!$db_selected) {
		die ('Can\'t use foo : ' . mysql_error());
	}
	$item = mysql_query('SELECT * FROM users');
	while ($row = mysql_fetch_assoc($item)) {
    $arr[] = array( "id"=>$row["id"] , "name" => $row["name"],"status"=>"complete");    
	}
	echo json_encode(  $arr );
	
	if( isset( $_SERVER['REQUEST_METHOD'] ) && $_SERVER['REQUEST_METHOD'] == 'DELETE' ){		
		$id = substr( $_SERVER['PATH_INFO'], 1, 1 );
		//delete
		//mysql_query( "DELETE FROM users where id = $id" );
	}
	if( isset( $_SERVER['REQUEST_METHOD'] ) && $_SERVER['REQUEST_METHOD'] == 'PUT' ){
		$id = substr( $_SERVER['PATH_INFO'], 1, 1 );
		//update
	}
	if( isset( $_SERVER['REQUEST_METHOD'] ) && $_SERVER['REQUEST_METHOD'] == 'POST' ){
		//Create record		
		print_r( $_POST );
		//mysql_query( "INSERT FROM users `name` = id = $id" );
	}
?>