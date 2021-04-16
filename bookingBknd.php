<?php
session_start();



$db = mysqli_connect("localhost", "root", "", "resmng");
$createEqdb = "CREATE TABLE IF NOT EXISTS `resmng`.`equipmentdb` (`equip_name` VARCHAR(45), `Status` VARCHAR(10));";
$createBkdb = "CREATE TABLE IF NOT EXISTS `resmng`.`bookingdb` (`equip_name` VARCHAR(45), `Status` VARCHAR(10));";
mysqli_query($db, $createEqdb);

if(isset($_SESSION['uname'])){
  if(isset($_POST['dsel'])){
    $dateIn= $_POST['dsel'];
    $dateIn= $_POST['dsel'];
    $dateIn= $_POST['dsel'];
  }
}
else {
  header("Location: loginPage.php");
}
?>
