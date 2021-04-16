<!DOCTYPE html>
<html>
<head>
  <!-- <link href='' rel='stylesheet'> -->
  <link rel="stylesheet" type="text/css" href="resBook.css">
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
<h1>DETAILS:</h1>
<table>
    <tr>
      <th>SERIAL NUMBER</th>
      <th> DEPARTMENT NAME</th>
       <th>EQUIPMENTS REQUIRED</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Gairik Chakraborty</td>
      <td>Mic,Speakers</td>
    </tr>  <br>

 </table><br><br>
 <center>
  <label for="additionals">Other Equipments:</label>
  <textarea id="additionals" name="additionals" rows="2" cols="20">  </textarea>
  </center>
</body>
</html>