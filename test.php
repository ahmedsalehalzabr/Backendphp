<?php 

include './connect.php';
$table = "users";
// $name = filterRequest("namerequest");
$data = array( 
"users_name" => "ahmed",
"users_email" => "ahmed@gmail.com",
"users_phone" => "324234",
"users_verfiycod" => "3243243",       
);
$count = insertData($table , $data);