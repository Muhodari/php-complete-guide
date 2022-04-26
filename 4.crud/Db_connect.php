<?php
$DB_server ="localhost";
$DB_user_name="root";
$DB_user_password="";
$DB_name = "php_study";


$connect = mysqli_connect($DB_server,$DB_user_name,$DB_user_password,$DB_name);

if(!$connect){
    echo "<h3>Error occured can't connect </h3>"; 
}



?>