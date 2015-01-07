<?php
//Connect database
$con = mysql_connect('localhost', 'root', '19911991') or die(mysql_error());
mysql_select_db('project') or die(mysql_error());
require '../Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim(array(
    'debug' => true
));

$app->get('/', function() {
   $sql    = "SELECT * FROM students";
   $result = mysql_query($sql) or die(mysql_error());
   $json   = array();
   while($row = mysql_fetch_assoc($result)) {
      $json[] = array(
         'id'   => $row['per_id'],
         'age'  => $row['per_age'],
         'name' => $row['per_name'],
		 'classname'=> $row['per_classname'],
      );
   }
   echo json_encode($json);
});

$app->get('/students/:id', function($id) {
   $sql          = "SELECT * FROM students WHERE per_id = " . $id;
   $result       = mysql_query($sql);

   $row          = mysql_fetch_assoc($result);

   $json['age']  = $row['per_age'];
   $json['name'] = $row['per_name'];
   $json['classname'] = $row['per_classname'];

   echo json_encode($json);
});

$app->post('/students', function() use ($app) {

   $data = $app->request()->getBody();
   $data = json_decode($data, true);	
   $name = $data['name'];
   $age  = $data['age'];
   $class = $data['classname'];
   $sql  = "INSERT INTO students(per_name, per_classname, per_age) VALUES('{$name}','{$class}', {$age})";
   mysql_query($sql) or die(mysql_error());
   $json = array(
      'code'   => 1,
      'status' => '',
      'name'   => $name,
	  'classname'    => $class,
      'age'    => $age,
   );
   echo json_encode($json);
});

$app->put('/students/:id', function($id) use ($app) {
   $json = array(
      'code'    => 0,
      'message' => 'error'
   );
   $data = $app->request()->getBody();
   $data = json_decode($data, true);
   $name = $data['name'];
   $age  = $data['age'];
   $classname  = $data['classname'];

   $sql  = "UPDATE students SET per_name = '{$name}',per_classname = '{$classname}', per_age = $age WHERE per_id = $id";
   $result = mysql_query($sql);

   if($result) {
     $json['code'] = 1;
   }

   exit(json_encode($json));
});

$app->delete('/students/:id', function($id) use ($app) {
   $json = array('code' => 0);
   $sql = "DELETE FROM students WHERE per_id = $id";
   $result = mysql_query($sql);
   if($result) {
      $json['code'] = 1;
   }
   exit(json_encode($json));
});

$app->run();


mysql_close($con);