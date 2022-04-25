<?php
echo "<h4> Multi Dimesnional Array </h4>";

$mutliArray= array(
 "city" =>   array("Gitasha","Kabara","Mikenke","ndondo","Bijombo"),
 "rivers" => array("sanganya","Gwerera","Cingwa","Nyamajambi","Gasaca"),
  "latitude" => array(12,45,65,93,36),
);


echo"<h4> Cities </h4>";
foreach($mutliArray["city"] as $city):

    echo " $city <br>";

endforeach;



echo"<h4> Rivers </h4>";
foreach($mutliArray["rivers"] as $river):

    echo " $river <br>";

endforeach;




echo"<h4> latitude </h4>";
foreach($mutliArray["latitude"] as $latd):

    echo " $latd <br>";

endforeach;



?>