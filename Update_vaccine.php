<?php
session_start();

require 'connect.php';

// $message = '';
// if (isset($_SESSION['name_alert'])) {
//   $message = 'Stock Updated Successfully';
// }
?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vaccine Details</title>
    <link rel="stylesheet" href="Update_vaccine.css" />
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
        <li><a href="Ahome.php">Home</a></li>
        <li><a href="UserInfo.php">User Info</a></li>
        <li><a href="VaccineInfo.php">Vaccine</a></li>
        <li><a href="Feedback.php">Feedback</a></li>
        <li><a href="adminlogin.php">Log out</a></li>
      </ul>
    </nav>
    <div class="vaccine" style="margin-left: 35rem;">
      <p><u>UPDATE</u> <u>STOCK</u></p>
    </div>


    <form action="#" method="post">
      <div class="">
        <div class="v">
          <label class="vaccinename">VACCINE NAME &nbsp;:<br /><br />
            <input type="search" placeholder="Search" class="vname" name="vname" /></label>
        </div>
        <div class="sub" style="">
          <input type="submit" class="submit" name="submit" value=""
            style="height: 2.4rem;width: 1.6rem; padding: 1rem 0rem 0rem 2.5rem;">

          <div style="font-size: 2rem; margin-left: 2.7rem; margin-top: -2.4rem;"> <ion-icon style="margin-left: -36px;
  color: whitesmoke;" name="search-outline">
            </ion-icon></div>
        </div>
    </form>



    </div>

    </div>
    <div style="margin-left: 35rem; font-size: 2rem; margin-top: 3rem">
      <?php


      if (isset($_POST['submit'])) {

        if (filter_has_var(INPUT_POST, 'vname')) {
          $vaccinename = $_POST['vname'];
          $_SESSION['vaccine_name'] = $vaccinename;
        } else {
          echo "Vaccinename is not set";
        }

        // $vaccinename = $_POST['vname'];
      
        $Select = "SELECT stock FROM vaccineinfo WHERE vname = '$vaccinename'";

        $query = mysqli_query($conn, $Select);
        $total = mysqli_num_rows($query);

        if ($total != 0) {


          $result = mysqli_fetch_assoc($query);
          // $_SESSION['re'] = $result;
          // $result1 = $_SESSION['result'];
      
          $label = "STOCK :"; ?>

          <form action="#" method="POST">
            <?php
            echo "<div style=''><label style='color: white;
          font-size: 2rem;
          margin-left: 20rem;'></div>" . $label . '</label>';

            echo '<input type="tel" name ="stock" value="' . $result['stock'] . '" style="-webkit-appearance: none;
          margin-left: 10rem; width: 6rem;
          text-align: center;
          display: block;
  height: 5vh;
  font-size: 1.7rem;
  border-radius: 5px 5px 5px 5px;
  padding-left: 0.2rem 0px;
  margin-top: -2.5rem;
  
  ">';

            echo '<input type="submit" 
          value="Update" name="update" style="font-family: Arial, Helvetica, sans-serif;
          align-items: center;
          transition-duration: 0.2s;
          cursor: pointer;
          border-radius: 8px;
          height: 5vh;
          width: 80px;
          background-color: #003049;
          color: white;
          font-size: 16px;
          margin-top: 4rem;
          margin-left: 6rem" 
         />';

        } else {
          header('Location: Update_vaccine.php');

        }
      }

      ?>
    </div>
    <?php if (isset($_POST['update'])) {


      $stock = $_POST['stock'];

      // $vaccine_name = $_SESSION['vaccinename'];
      // $message = '';
      // if (isset($_SESSION['name_alert'])) {
      //   $message = 'Stock Updated Successfully';
      // }
    
      $query1 = " UPDATE vaccineinfo SET stock = stock + '$stock' where vname = '" . $_SESSION['vaccine_name'] . "' ";
      // var_dump($vaccinename);
      $data = mysqli_query($conn, $query1);
      // $popup = mysqli_num_rows($data);
    
      // if ($popup > 0) {
      //   $_SESSION['name_alert'] = '1';
      //   echo $message;
      if ($data) {
        echo "<div style='font-size: 2rem;margin-left: 37rem; font-family: cursive;
color: navy blue;
        '>updated succesfully</div>";
        // header('Location: Update_vaccine.php');
      } else {
        echo "not inserted";
      }

      // unset($_SESSION['name_alert']);
    }
    ?>

    </form>
  </body>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>