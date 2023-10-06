<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Home</title>
    <link rel="stylesheet" href="Ahome.css" />
    <style>
      body {
        background: url(vecteezy_molecular-background-of-medical-science-3d-illustration_10742889.jpg);
        background-repeat: no-repeat;
        background-size: cover;
      }
    </style>
  </head>

  <body>
    <header class="nv">
      <p class="vms" style="font-size: 2rem;
  font-family: 'Times New Roman';
  color: white; 
  margin-left: 16rem;
  margin-top: 2rem;
  padding: 1.2rem;">VMS | COVID- 19 VACCINE MANAGEMENT SYSTEM FOR INSTITUTION</p>
    </header>
    <nav id="nav2">
      <ul>
        <li><a href="Ahome.php">Home</a></li>
        <li><a href="UserInfo.php">User Info</a></li>
        <li><a href="VaccineInfo.php">Vaccine</a></li>
        <li><a href="Feedback.php">Feedback</a></li>
        <li><a href="adminlogin.php">Log out</a></li>
      </ul>
    </nav>

    <div class="wlcm">
      <p><u>WELCOME</u> <u>ADMIN</u></p>
    </div>
    <div class="count">
      <div class="box">
        <p class="ur">User Registered</p>
        <?php
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $db = 'VMS';


        $conn = mysqli_connect($dbhost, $dbuser, '', $db);


        $query = "SELECT * from uinfo ";
        $data = mysqli_query($conn, $query);

        $row = mysqli_num_rows($data);

        echo "<h1 style=' margin-left: 7rem;
        font-size: 4.2rem; color: whitesmoke; margin-top: -11rem; '>" . $row . '</h1>';

        ?>
      </div>
      <div class="box2">
        <a href="bookinginfo.php" style="text-decoration: none;">
          <p class="sb">Slot Booked</p>
          <?php
          $dbhost = 'localhost';
          $dbuser = 'root';
          $dbpass = '';
          $db = 'VMS';


          $conn = mysqli_connect($dbhost, $dbuser, '', $db);


          $query = "SELECT * from slotbook ";
          $data = mysqli_query($conn, $query);

          $row = mysqli_num_rows($data);

          echo "<h1 style=' margin-left: 7rem;
        font-size: 4.2rem; color: whitesmoke; margin-top: -11rem; '>" . $row . '</h1>';

          ?>
      </div></a>
      <div class="box3">
        <p class="fd">Feedback</p>
        <?php
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $db = 'VMS';


        $conn = mysqli_connect($dbhost, $dbuser, '', $db);


        $query = "SELECT * from feedback ";
        $data = mysqli_query($conn, $query);

        $row = mysqli_num_rows($data);

        echo "<h1 style=' margin-left: 7rem;
        font-size: 4.2rem; color: whitesmoke; margin-top: -11rem; '>" . $row . '</h1>';

        ?>
      </div>
    </div>
  </body>

</html>