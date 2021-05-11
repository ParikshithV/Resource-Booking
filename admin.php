<!DOCTYPE html>
<html>
<head>
  <!-- <link href='' rel='stylesheet'> -->
  <link rel="stylesheet" type="text/css" href="admin.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Alef' rel='stylesheet'>
  <style>
      body
      {
          font-family: 'Pacifico';font-size: 14px;
      }
      h2
        {
          text-align: center;
          color:orange;

        }
      table
      {
        border-collapse: separate;
        width: 100%;
      }

      th, td
      {
        text-align: left;
        padding: 5px;
        color:black;
        top:2px;
      }

      tr:nth-child(odd) {background-color: lightyellow;}

      table, th, td
      {
        border: 1px solid black;
        border-collapse: collapse;
      }
  </style>
</head>
<body class="bg">
<div>
        <ul class="navbar">
          <li><a href="index.php">Home</a></li>
          <li><a href="loginPage.php">Login</a></li>
          <li><a href="reg.php">Sign-Up</a></li>
          <li><a href="bookingPg.php">Booking page</a></li>
          <li><a href="admin.php">Admin page</a></li>
          <li style="float: right;"><a href="logout.php">Logout</a></li>
        </ul>
</div>
<h1 style="text-align: center;">ADMIN DASHBOARD:</h1>
<?php
  $db = mysqli_connect("localhost", "root", "", "resmng");
  session_start();
?>

<center><div>
  <div class="box1">
    <div align="center">
      <h3 style="text-align: center;">MANAGING EQUIPMENTS:</h3>
      <form action="admin.php" method="post">
        <label><h3> Add Equipment: </h3></label>
        <input type="text" name="addEquip" required pattern="^\S+$" title="Shouldn't include whitespaces but can include underscore">
        <input type="submit" class="btn"><br>
      </form>
    </div><br>
    <hr>
    <div align="center">
      <form action="admin.php" method="post">
      <h3>Delete Equipments: </h3>
      <?php
        $getEquip = "select * from `resmng`.`equipments`;";
        $equipments = mysqli_query($db, $getEquip);
        while ($row = mysqli_fetch_assoc($equipments)) {
          echo '<input type="radio" name="equipment" value="'.$row['equipment_name'].'">';
          echo '<label>'.$row['equipment_name'].'</label><br>';
        }
        echo '<br><input type="submit">';
      ?>
      </form>
    </div>
</div>

<div class="box1">
<h1 style="text-align: center;">BOOKINGS</h1>
<table>
    <tr>
      <th>SERIAL NO.</th>
      <th>USERNAME</th>
      <th>EMAIL</th>
      <th>DEPT.</th>
      <th>ROLE</th>
      <th>DATE</th>
      <th>EQIPMENT</th>
  <?php
  $slno = 0;
  $db = mysqli_connect("localhost", "root", "", "resmng");
  $feedback = "select * from resmng.bookingdb";
  $result = mysqli_query($db, $feedback);
  while ($row = mysqli_fetch_assoc($result)) {
      $slno = $slno+1;
      echo "<tr><td> ".$slno." </td>";
      echo "<td>".$row['username']."</td>";
      echo "<td>".$row['email']."</td>";
      echo "<td>".$row['dept']."</td>";
      echo "<td>".$row['role']."</td>";
      echo "<td>".$row['date']."</td>";
      echo "<td>".$row['equipment']."</td>";
  }
  ?>

  </table>
</div>

<div class="box1">
<h1 style="text-align: center;">USERS</h1>
<table>
    <tr>
      <th>SERIAL NO.</th>
      <th>USER NAME</th>
      <th>EMAIL ID</th>
      <th>DEPARTMENT</th>
      <th>ROLE</th>
  <?php
  $slno = 0;

  $createEqip = "CREATE TABLE IF NOT EXISTS `resmng`.`equipments` (equipment_name VARCHAR(50));";
  mysqli_query($db, $createEqip);

  if(isset($_POST['equipment'])){
    $delEquip = $_POST['equipment'];
    $outEquip = "DELETE FROM `resmng`.`equipments` WHERE equipment_name = '$delEquip'";
    mysqli_query($db, $outEquip);
    header("Location: admin.php");
  }

  if(isset($_POST['addEquip'])){
    $addEquip = $_POST['addEquip'];
    $inEquip = "INSERT INTO `resmng`.`equipments` VALUES ('$addEquip')";
    mysqli_query($db, $inEquip);
    header("Location: admin.php");
  }

  $feedback = "select * from resmng.users";
  $result = mysqli_query($db, $feedback);
  while ($row = mysqli_fetch_assoc($result)) {
      $slno = $slno+1;
      echo "<tr><td> ".$slno." </td>";
      echo "<td>".$row['username']."</td>";
      echo "<td>".$row['email']."</td>";
      echo "<td>".$row['dept']."</td>";
      echo "<td>".$row['role']."</td>";
  }
  ?>
  </table>
</div>

</div></center>
  <?php
  if(isset($_SESSION['admin'])){
    //Do nothing
  }
  else{
    header("Location: loginPage.php");
  }
  ?>
</body>
</html>
