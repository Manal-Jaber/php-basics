<?php
$groceries = ["Eggs", "Milk", "Cheese", "Water Pack", "Tissues", "Watermelon"];
echo "Hello Sir, do you have ".$groceries[0].", ".$groceries[1].", and ".$groceries[2]."? Also if you sell fruits can I find a ".$groceries[5]."?";
$groceries2 = array("eggs" => array('balade', 'mazere3'), "milk" =>array('Fresh', 'Taanayel'), "water-pack"=>array('Tanoureen','Reem'));

echo "<br>Hey Sir, Please I need 1 pack of balade eggs and 3 Reem Water Pack.";
echo "<br>Hey Sir, Please I need 1 pack of ".$groceries2["eggs"][0]." eggs and 3 ".$groceries2["water-pack"][1]." Water Pack.";
?>