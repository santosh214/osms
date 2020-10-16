<?php 
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="smshs";
// $db_port=3306;

// Create Connection 
$connection=new mysqli($db_host, $db_user,$db_password,$db_name);

// you can use port name or not it's ur choice 
// $connection=new mysqli($db_host, $db_user,$db_password,$db_name, $db_port);

// 
if($connection->connect_error){
    die("Connection Failed");
}
// else{

//     echo "Connect";
// }
?>