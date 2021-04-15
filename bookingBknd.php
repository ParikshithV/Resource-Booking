<?php
session_start();

$db = mysqli_connect("localhost", "root", "", "resmng");
$createEqdb = "CREATE TABLE IF NOT EXISTS `resmng`.`equipmentdb` (`equip_name` VARCHAR(45), `Status` VARCHAR(10));";
mysqli_query($db, $createEqdb);

function indate(){
  
}
?>
