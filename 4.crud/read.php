<?php

$DB_server_name="localhost";
$DB_user_name="root";
$DB_password = "";
$DB_name="php_study";


$connect = mysqli_connect($DB_server_name,$DB_user_name,$DB_password,$DB_name);

if(!$connect){
    echo "<h3>Error occured can't connect to database</h3>";
}
echo "<h3>connected successfully</h3>";


$query = mysqli_query($connect,"SELECT * FROM users");

while($rows = mysqli_fetch_assoc($query)){

echo  "Name: ".$rows['name'] . " <br>";
echo  "email: ".$rows['email'] . " <br>";
echo  "content: ".$rows['content'] . " <br>";

echo  " <br> <hr>";




}



?>