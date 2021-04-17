<?php
session_start();

$db = mysqli_connect("localhost", "root", "", "resmng");
$createEqdb = "CREATE TABLE IF NOT EXISTS `resmng`.`equipmentdb` (`equip_name` VARCHAR(45), `Status` VARCHAR(10));";
$createBkdb = "CREATE TABLE IF NOT EXISTS `resmng`.`bookingdb` (`username` VARCHAR(50), `date` VARCHAR(50), `equipment` VARCHAR(100));";
mysqli_query($db, $createEqdb);
mysqli_query($db, $createBkdb);

if(isset($_SESSION['uname'])){
  if(isset($_POST['dsel'])){
    $dateIn= $_POST['dsel'];
    echo $dateIn;
    $username= $_SESSION['uname'];
    $equipSel = $_POST['equipment'];
    $selectedE = "";
    foreach ($equipSel as $sel) {
      $selectedE = $selectedE."<br>".$sel;
    }


    echo $selectedE;
    $indata = "INSERT INTO `resmng`.`bookingdb` (username, date, equipment)
          			  VALUES('$username', '$dateIn', '$selectedE')";
    echo "\nINSERT INTO `resmng`.`bookingdb` (username, date, equipment)
          			  VALUES('$username', '$dateIn', '$selectedE')";
    mysqli_query($db, $indata);
    header("Location: bookingPg.php");
  }
  else {
    //header("Location: loginPage.php");
  }
}
else {
  header("Location: loginPage.php");
}
?>
