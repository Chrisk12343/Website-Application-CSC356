<?php 
$db_username = "root";
$db_password = "rick2018";
$db_servername = "localhost";
$db_name = "newdata";
$db_port = "3306";//3307 is default port for mariandb; 3306 is the port for mysql

$db_conn = mysqli_connect(hostname: $db_servername, username: $db_username, password: $db_password, database: $db_name );

if(!$db_conn){
    echo"connection failed.";
}
//if this statment is true then the connection failed

//echo"db connection included"
//echos if the db connection is included





?>