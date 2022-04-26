<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>

table{
    font-family: Arial, Helvetica, sans-serif; 
}
table,th,td{
    border-collapse:collapse;
    border: 1px solid #ddd;
    padding: 8px;

}

a{
    text-decoration:none;

}


table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}



</style>






</head>
<body>
   <h3>LIST OF USERS</h3>
<a href='form.php'>Add New User</a> <br><br>

<table>

<tr>
<th>Id</th>
<th>Name</th>
<th>email</th>
<th>Content</th>
<th colspan ="2">OPtions</th>
</tr>








<?php

$DB_server_name="localhost";
$DB_user_name="root";
$DB_password = "";
$DB_name="php_study";


$connect = mysqli_connect($DB_server_name,$DB_user_name,$DB_password,$DB_name);

if(!$connect){
    echo "<h3>Error occured can't connect to database</h3>";
}

$query = mysqli_query($connect,"SELECT * FROM users");

while($rows = mysqli_fetch_assoc($query)){

    
echo  "<tr>
<td> ".$rows['id'] . " </td>
<td> ".$rows['name'] . " </td>
 <td> ".$rows['email'] . " </td>".
"<td> ".$rows['content'] . " </td>".
"<td id='delete'><a href ='delete.php?id=".$rows["id"]."'> Delete</a> </td>".
 "<td> <a href ='edit_form.php?id=".$rows["id"]."&name=".$rows["name"]."&email=".$rows["email"].
"&content=".$rows["content"]."'>Edit</a></td> </tr>";








}

?>

</table>

</body>
</html>
