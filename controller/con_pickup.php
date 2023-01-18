<?php
include_once "../model/ConDB.php";
include_once "../model/Pickup.php";
$obj_room=new Pickup();
echo $rs2= $obj_room->addPickup($pickup);
?>

<?php
$pickup=array();
$pickup["room"]=$pu_room;
$pickup["time_borrow"]=$pu_time;
$pickup["stu_id_pickUp"]=$$pu_stuid;
print_r($pickup);
?>