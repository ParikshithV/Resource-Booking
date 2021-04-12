<html>
  <head>
    <meta charset="utf-8">
    <title>Hall Boking</title>
    <link rel="stylesheet" href="resBook.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet"> -->
    <script src="funcs.js"></script>
  </head>

  <body class="bg">
      <div>
          <ul class="navbar">
            <li><a href="index.html">Home</a></li>
            <li><a href="loginPage.php">Login</a></li>
            <li><a href="reg.php">Sign-Up</a></li>
            <li><a href="bookingPg.php">Booking page</a></li>
          </ul>
      </div>
        <form>
        <h2 style="padding-left:15px; padding-top: 5px; text-align: center;">Hall Booking</h2>
        <div class="bookingfrm">
        <h3>Select date of booking:</h3>
          <label>Select booking date:</label>
          <table class="dateTable">
            <tr>
              <?php
              $count=0;
              $tdate = date("d");
              echo "<tr>";
                for ($i=1; $i <= 7; $i++) {
                  if ($i == $tdate) {
                    echo "<td class='date' id='d$i' style='background-color: #69cdff;'>".$i."</td>";
                  }
                  elseif ($i < $tdate) {
                    echo "<td class='date' id='d$i' style='background-color: #dedede;'>".$i."</td>";
                  }
                  else{
                    echo "<td class='date' id='d$i'>".$i."</td>";
                  }
                }
                echo "</tr><tr>";
                for ($i=8; $i <= 14; $i++) {
                  if ($i == $tdate) {
                    echo "<td class='date' id='d$i' style='background-color: #69cdff;'>".$i."</td>";
                  }
                  elseif ($i < $tdate) {
                    echo "<td class='date' id='d$i' style='background-color: #dedede;'>".$i."</td>";
                  }
                  else{
                    echo "<td class='date' id='d$i'>".$i."</td>";
                  }
                }
                echo "</tr><tr>";
                for ($i=15; $i <= 21; $i++) {
                  if ($i == $tdate) {
                    echo "<td class='date' id='d$i' style='background-color: #69cdff;'>".$i."</td>";
                  }
                  elseif ($i < $tdate) {
                    echo "<td class='date' id='d$i' style='background-color: #dedede;'>".$i."</td>";
                  }
                  else{
                    echo "<td class='date' id='d$i'>".$i."</td>";
                  }
                }
                echo "</tr><tr>";
                for ($i=22; $i <= 28; $i++) {
                  if ($i == $tdate) {
                    echo "<td class='date' id='d$i' style='background-color: #69cdff;'>".$i."</td>";
                  }
                  elseif ($i < $tdate) {
                    echo "<td class='date' id='d$i' style='background-color: #dedede;'>".$i."</td>";
                  }
                  else{
                    echo "<td class='date' id='d$i'>".$i."</td>";
                  }
                }
                echo "</tr><tr>";
                for ($i=29; $i <= 31; $i++) {
                  if ($i == $tdate) {
                    echo "<td class='date' id='d$i' style='background-color: #69cdff;'>".$i."</td>";
                  }
                  elseif ($i < $tdate) {
                    echo "<td class='date' id='d$i' style='background-color: #dedede;'>".$i."</td>";
                  }
                  else{
                    echo "<td class='date' id='d$i'>".$i."</td>";
                  }
                }
                echo "</tr>";
              ?>
            </tr>
          </table>
        <br>

        <label>Select equipment needed:</label><br>
        <input type="checkbox" id="equipment1">
        <label>Hand mic</label><br>
        <input type="checkbox" id="equipment2">
        <label>Audio console</label><br>
        <input type="checkbox" id="equipment3">
        <label>Speakers</label><br>
        <input type="checkbox" id="equipment4">
        <label>Projector</label><br>

        <br><br>
        <label>Additional comments:</label><br>
        <textarea class="txtbx2" name="adsdCom" rows="5" cols="35"></textarea><br>

        <input type="button" style="margin-top: 5px" class="btn" value="Check booking" onclick="submitFunc()">

        </form>
      </div>
    </body>
</html>
