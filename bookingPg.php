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
            <li><a href="admin.php">Admin page</a></li>
          </ul>
      </div>

      <form>
        <h2 style="padding-left:15px; padding-top: 5px; text-align: center;">Hall Booking</h2>
        <div>
              <img align="right" src="side.jpg" style="width: 550px; margin-right: 6.5%; margin-top: 2%;">
        </div>
        <div class="bookingfrm">
        <h3>Select booking date:</h3>
          <table class="dateTable">
            <tr>
              <?php
              $date = date_create();
              $nMon = date('F', strtotime('+1 months'));
              $days = date_format($date,"t");
              $nextMonth = date_create(date("Y")."-".date("m", strtotime('+1 months'))."-".date("m"));
              $nextMdays = date_format($nextMonth,"t");
              $count=0;
              $tdate = date("d");
              $tmonth = date("F")." ";
              $nextmonth = date("F", strtotime('+1 months'))." ";
              $tyear = date("Y")." ";
              echo "<th colspan='3'>".$tmonth." ".$tyear."</th>";
              echo "<tr>";
                for ($i=1; $i <= 7; $i++) {
                  if ($i == $tdate) {
                    echo "<td><input type='button' class='date' id='d$i' style='background-color: #69cdff;' onclick='indate()' value='$i'></td>";
                  }
                  elseif ($i < $tdate) {
                    echo "<td><input type='button' class='date' id='d$i' style='background-color: #dedede;' onclick='indate()' value='$i'></td>";
                  }
                  else{
                    echo "<td><input type='button' class='date' id='d$i' onclick='indate()' value='$i'></td>";
                  }
                }
                echo "</tr><tr>";
                for ($i=8; $i <= 14; $i++) {
                  if ($i == $tdate) {
                    echo "<td><input type='button' class='date' id='d$i' style='background-color: #69cdff;' onclick='indate()' value='$i'></td>";
                  }
                  elseif ($i < $tdate) {
                    echo "<td><input type='button' class='date' id='d$i' style='background-color: #dedede;' onclick='indate()' value='$i'></td>";
                  }
                  else{
                    echo "<td><input type='button' class='date' id='d$i' onclick='indate()' value='$i'></td>";
                  }
                }
                echo "</tr><tr>";
                for ($i=15; $i <= 21; $i++) {
                  if ($i == $tdate) {
                    echo "<td><input type='button' class='date' id='d$i' style='background-color: #69cdff;' onclick='indate()' value='$i'></td>";
                  }
                  elseif ($i < $tdate) {
                    echo "<td><input type='button' class='date' id='d$i' style='background-color: #dedede;' onclick='indate()' value='$i'></td>";
                  }
                  else{
                    echo "<td><input type='button' class='date' id='d$i' onclick='indate()' value='$i'></td>";
                  }
                }
                echo "</tr><tr>";
                for ($i=22; $i <= 28; $i++) {
                  if ($i == $tdate) {
                    echo "<td><input type='button' class='date' id='d$i' style='background-color: #69cdff;' onclick='indate()' value='$i'></td>";
                  }
                  elseif ($i < $tdate) {
                    echo "<td><input type='button' class='date' id='d$i' style='background-color: #dedede;' onclick='indate()' value='$i'></td>";
                  }
                  else{
                    echo "<td><input type='button' class='date' id='d$i' onclick='indate()' value='$i'></td>";
                  }
                }
                echo "</tr><tr>";
                for ($i=29; $i <= $days; $i++) {
                  if ($i == $tdate) {
                    echo "<td><input type='button' class='date' id='d$i' style='background-color: #69cdff;' onclick='indate()' value='$i'></td>";
                  }
                  elseif ($i < $tdate) {
                    echo "<td><input type='button' class='date' id='d$i' style='background-color: #dedede;' onclick='indate()' value='$i'></td>";
                  }
                  else{
                    echo "<td><input type='button' class='date' id='d$i' onclick='indate()' value='$i'></td>";
                  }
                }
                echo "</tr>";
              ?>
            </tr>
          </table>
          <!-- Next month cal display -->
          <table class="dateTable">
              <?php
              echo "<th colspan='3'>".$nMon." ".$tyear."</th>";
              echo "<tr>";
                for ($i=1; $i <= 7; $i++) {
                  echo "<td><input type='button' class='date' id='d$i' onclick='indate()' value='$i'></td>";
                }
                echo "</tr><tr>";

                for ($i=8; $i <= 14; $i++) {
                  echo "<td><input type='button' class='date' id='d$i' onclick='indate()' value='$i'></td>";
                }
                echo "</tr><tr>";

               for ($i=15; $i <= 21; $i++) {
                 echo "<td><input type='button' class='date' id='d$i' onclick='indate()' value='$i'></td>";
               }
               echo "</tr><tr>";

               for ($i=22; $i <= 28; $i++) {
                 echo "<td><input type='button' class='date' id='d$i' onclick='indate()' value='$i'></td>";
               }
               echo "</tr><tr>";

               for ($i=29; $i <= $nextMdays; $i++) {
                 echo "<td><input type='button' class='date' id='d$i' onclick='indate()' value='$i'></td>";
               }
               echo "</tr>";

              ?>
            </tr>
          </table>
        <label>Date selected: </label>
        <!-- Display selected date -->
        <br><br>
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
