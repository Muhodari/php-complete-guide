<?php

$name =$_POST["name"];
$email =$_POST["email"];
$content =$_POST["content"];


/* echo $name;
echo "<br>";
echo $email;
echo "<br>";

ECHO $content;
*/


$DB_server = "localhost";
$DB_name = "php_study";
$DB_user_name = "root";
$DB_user_password = "";


$connect = mysqli_connect($DB_server,$DB_user_name,$DB_user_password,$DB_name);
if(!$connect){
    echo mysqli_error();
}

$query = mysqli_query($connect,"INSERT INTO users(name,email,content) values ('$name','$email','$content')");

if($query){
    echo "<h3>User created successfully </h3>";
    header("refresh:1, url=read.php");
}


?>