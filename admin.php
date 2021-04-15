<!DOCTYPE html>
<html>
<head>
  <!-- <link href='' rel='stylesheet'> -->
  <link rel="stylesheet" type="text/css" href="resBook.css">
  <link href='https://fonts.googleapis.com/css?family=Alef' rel='stylesheet'>
  <style>
  body {
      font-family: 'Pacifico';font-size: 14px;
  }

  h2
  {
    text-align: center;
    color:orange;

  }
table {
  border-collapse: separate;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 5px;
  color:black;
  border-radius:8px;
  top:2px;
}

tr:nth-child(odd) {background-color: yellow;}
</style>
</head>
<body>
<div>
        <ul class="navbar">
          <li><a href="index.html">Home</a></li>
          <li><a href="loginPage.php">Login</a></li>
          <li><a href="reg.php">Sign-Up</a></li>
          <li><a href="bookingPg.php">Booking page</a></li>
          <li><a href="admin.php">Admin page</a></li>
        </ul>
    </div>
<h2>View Feedback</h2>


<table>
    <tr>
      <th>Sl.no</th>
      <th>Full Name</th>
       <th>Email ID</th>
       <th>Browsed Dish</th>
      <th>FeedBack</th>
      <th>Rate us</th>
  <?php
  $slno = 0;
  $db = mysqli_connect("localhost", "root", "", "resmng");
  $feedback = "select * from resmng.feedback";
  $result = mysqli_query($db, $feedback);
  while ($row = mysqli_fetch_assoc($result)) {
      $slno = $slno+1;
      echo "<tr><td> ".$slno." </td>";
      echo "<td>".$row['Fullname']."</td>";
      echo "<td>".$row['Email']."</td>";
      echo "<td>".$row['BrowsedDish']."</td>";
      echo "<td>".$row['Feedback']."</td>";
      echo "<td>".$row['RateUs']."</td></tr>";
      echo "<br>";
  }
  ?>
  </table>
</table>

</body>
</html>