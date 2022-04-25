<?php



echo" <h5> Constants </h5>";

#once declared it and assigned a value it can't be overwritten

// $drc = "Congo My Nation";
define("drc","Kitasha");
#this initialization won't work since there is previous initiazation of the drc to kitasha

define("drc","Musanze"); // comes with the warning that the varible drc has been created before

echo drc;
echo "<br><br>";
echo"I love ".drc;
echo "<br><br>";
echo "You are Beutiful ".drc;
echo"<br><br>";
echo "I will cherish".drc ."<br><br>";




?>