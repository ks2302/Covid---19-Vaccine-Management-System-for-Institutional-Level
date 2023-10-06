<?php

session_start();

require 'connect.php';

$stu_email = $_SESSION['stu_email'];


$query_for_user_name = "SELECT SUBSTRING_INDEX(UPPER(fname), ' ', 1) AS first_name FROM uinfo where email = '$stu_email'";

$query_u_name = mysqli_query($conn, $query_for_user_name);

$u_name = mysqli_fetch_assoc($query_u_name);

if (empty($u_name)) {

  echo "Student data is not available";
}

?>



<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Home</title>
    <link rel="stylesheet" href="Uhome.css" />
  </head>
  <style>
    body {
      background: url(vecteezy_molecular-background-of-medical-science-3d-illustration_10742889.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>

  <body>
    <header class="nv">
      <p class="vms" style="margin-left: 16rem;">VMS | COVID- 19 VACCINE MANAGEMENT SYSTEM FOR INSTITUTION</p>
    </header>
    <nav id="nav2">
      <ul>
        <li><a href="Uhome.php">Home</a></li>
        <li><a href="Editprofile.php">Profile</a></li>
        <li><a href="Slotbook.php">Slot Book</a></li>
        <li><a href="Userfeed.php">Feedback</a></li>
        <li><a href="index.php">Log out</a></li>
      </ul>
    </nav>
    <div class="wlcm" style="font-size: 4rem; margin-left: 27rem; margin-top: -4rem">
      <p><u>WELCOME</u> <u><?php echo $u_name['first_name']; ?><u></p>
    </div>

  </body>

</html>