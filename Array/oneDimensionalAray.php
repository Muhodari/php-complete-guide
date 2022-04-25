<?php

// Numeric arrays
echo "<h4>Numeric array</h4>";

$MyArray = array("Sagamba",45,"Welcome Friend",54.8768,"let's all fly");
 
echo"<ul>";
foreach($MyArray as $element):
    echo" <li> $element </li> ";
endforeach;
echo"</ul>";

echo $MyArray[2];


# associative array


echo "<h4>Associative array</h4>";

$AssociativeArray = array(
    "name"=>"Sagamba",
    "age"=>20,
    "location"=>"Musanze"
);

echo"<ul>";
foreach($AssociativeArray as $element):
    echo" <li> $element </li> ";
endforeach;
echo"</ul>";

echo $AssociativeArray['name'];


?>