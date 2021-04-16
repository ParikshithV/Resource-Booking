<!DOCTYPE html>
<html>
<head>
  <!-- <link href='' rel='stylesheet'> -->
  <link rel="stylesheet" type="text/css" href="admin.css">
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
        border-radius:8px;
        top:2px;
      }

      tr:nth-child(odd) {background-color: yellow;}

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
          <li><a href="index.html">Home</a></li>
          <li><a href="loginPage.php">Login</a></li>
          <li><a href="reg.php">Sign-Up</a></li>
          <li><a href="bookingPg.php">Booking page</a></li>
          <li><a href="admin.php">Admin page</a></li>
          <li style="float: right;"><a href="index.html">Logout</a></li>
        </ul>
</div>
<h1 style="text-align: center;">ADMIN DASHBOARD:</h1>
<div class="box1">
  <h3 style="text-align: center;">USERS</h3>
<table>
    <tr>
      <th>SERIAL NO.</th>
      <th>USER NAME</th>
      <th>EMAIL ID</th>
      <th>DEPARTMENT</th>
      <th>ROLE</th>
  <?php
  $slno = 0;
  $db = mysqli_connect("localhost", "root", "", "resmng");
  $feedback = "select * from resmng.users";
  $result = mysqli_query($db, $feedback);
  while ($row = mysqli_fetch_assoc($result)) {
      $slno = $slno+1;
      echo "<tr><td> ".$slno." </td>";
      echo "<td>".$row['username']."</td>";
      echo "<td>".$row['email']."</td>";
      echo "<td>".$row['dept']."</td>";
      echo "<td>".$row['role']."</td>";
      echo "<br>";
  }
  ?>
  </table>
  </div>

  <div class="box">

  <h1 style="text-align: center;">EQUIPMENTS</h1>
<table>
    <tr>
      <th>SERIAL NO.</th>
      <th>EQUIPMENTS SELECTED</th>
      <th>ADDITIONAL COMMENTS</th>
  <?php
  $slno = 0;
  $db = mysqli_connect("localhost", "root", "", "resmng");
  $feedback = "select * from resmng.equipmentdb";
  $result = mysqli_query($db, $feedback);
  while ($row = mysqli_fetch_assoc($result)) {
      $slno = $slno+1;
      echo "<tr><td> ".$slno." </td>";
      echo "<td>".$row['equip_name']."</td>";
      echo "<td>".$row['Status']."</td>";
      echo "<br>";
  }
  ?>
  </table>
  </div>
 
</body>
</html>