<?php
  session_start();

  if(isset($_POST['userName'])){
    $db = mysqli_connect("localhost", "root", "", "resmng");
    $uname=$_POST['userName'];
    $upswd=$_POST['Password'];
    $login_search = "SELECT username FROM users WHERE username = '$uname'";
    $pswd_match = "SELECT password FROM users WHERE username = '$uname'";
    $userexist = mysqli_query($db, $login_search);
    $user_check = mysqli_fetch_array($userexist);
    if (count($user_check)>0){
      $userpswd = mysqli_query($db, $pswd_match);
      $pswd = mysqli_fetch_array($userpswd);
      if ($upswd == $pswd[0]){
        $_SESSION['uname']=$uname;
        echo "Login successful";
        header("Location: bookingPg.php");
      }
      else{
        echo "Incorrect password";
      }
    }
    else{
      echo "User doesnot exist";
    }
  }
?>
