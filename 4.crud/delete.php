<?php
include('DB_connect.php');


$id = $_GET['id'];
$query = mysqli_query($connect," DELETE FROM users where id =$id ");
if(!$query){
    echo" <h3>Error occured</h3>";
}

echo" <h3>user Deleted sucessfully</h3>";
header("refresh:1,url=read.php");


?>