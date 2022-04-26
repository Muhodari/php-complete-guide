<?php
include('DB_connect.php');

$name = $_POST['name'];
$email = $_POST['email'];
$content = $_POST['content'];
$id = $_POST['id'];

$query= mysqli_query($connect," UPDATE users SET name ='$name', email='$email', content='$content' WHERE id = $id ");

if(!$query){
    echo"<h3> Error occured</h3> ";
}
echo"<h3> User Updated suceesfully</h3> ";

header("refresh:1,url=read.php")


?>