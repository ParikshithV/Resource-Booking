<?php
session_start();

$db = mysqli_connect("localhost", "root", "", "resmng");

// $createBkdb = "CREATE TABLE IF NOT EXISTS `resmng`.`bookingdb` (`username` VARCHAR(50), `email` VARCHAR(50), `dept` VARCHAR(50), `role` VARCHAR(100), `date` VARCHAR(50), `equipment` VARCHAR(100));";
// mysqli_query($db, $createBkdb);

if(isset($_SESSION['uname'])){
  if(isset($_POST['dsel'])){
    $dateIn= $_POST['dsel'];
    echo $dateIn;
    $userEmail = $_SESSION['email'];
    $userDept = $_SESSION['dept'];
    $userRole = $_SESSION['role'];
    $username= $_SESSION['uname'];
    if(isset($_POST['equipment'])){
      $equipSel = $_POST['equipment'];
      $selectedE = "";
      foreach ($equipSel as $sel) {
        $inQty = $sel.'_qty';
        $equipQty = $_POST[$inQty];
        $selectedE = $selectedE."<br>".$sel." (".$equipQty.")";
      }
    }


    echo $selectedE;
    $indata = "INSERT INTO `resmng`.`bookingdb` (username, email, dept, role, date, equipment)
          			  VALUES('$username', '$userEmail', '$userDept', '$userRole', '$dateIn', '$selectedE')";
    mysqli_query($db, $indata);
    header("Location: bookingPg.php");
  }
  else {
    header("Location: bookingPg.php");
  }
}
else {
  header("Location: loginPage.php");
}
?>
