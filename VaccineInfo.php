<?php
session_start();

// unset($_SESSION['vaccinename']);

$message = '';
if (isset($_SESSION['name_alert'])) {
  $message = 'Vaccine Name Already Exists !!';
}
?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vaccine Info</title>
    <link rel="stylesheet" href="VaccineInfo.css" />
  </head>
  <style>
    body {
      background: url(vecteezy_molecular-background-of-medical-science-3d-illustration_10742889.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }

    h2 {
      color: #BDE5F8;
      font-size: 1.2rem;
      margin-left: 14rem;
      font-family: cursive;
      margin-top: -1rem;
    }
  </style>

  <body>
    <form action="VaccineInf.php" method="post">
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
      <div class="vaccine" style="margin-left: 35rem; font-size: 3rem;">
        <p><u>ADD</u> <u>VACCINE</u></p>
      </div>
      <form action="VaccineInf.php" method="post">



        <div class="box" style='padding: 2rem 2rem 4rem 2rem;
        margin-top: -2rem; height: 28rem;'>

          <h2><?php echo $message; ?></h2>

          <form action="#" method="post">
            <div class="v" style="">
              <br />
              <br />
              <label class="vaccinename">VACCINE NAME &nbsp;:<br /><br />
                <input type="text" class="vname" name="vname" required /></label>
            </div>
            <div class="stock" style="margin-top: 1rem;">
              <br />
              <br />
              <label class="sb">STOCK :<br />
                <input type="tel" class="sbox" name="stock" required style="text-align: left;" /></label>
            </div>
            <div class="composition" style=" margin-top: 1rem;">
              <br />
              <br />
              <label class="cm" style="margin-left: -1.5rem;">COUNTRY ORIGIN :<br />
                <input type="text" class="comp" name="country_origin" required /></label>
            </div>
            <div style="">
              <div class="button">
                <a href="VaccineInfo.php"><input type="Submit" name="Submit" class="vs"
                    style="margin-top: -2rem;" /></a>
              </div>

              <?php unset($_SESSION['name_alert']); ?>

          </form>
          <br><br>
          <div class="button1" style="margin-top: -1rem;">
            Update &nbsp;Details&nbsp;&nbsp;&nbsp;&nbsp; <a href="Update_vaccine.php"><input type="button" class="b1"
                value="Update" name="update" /></a>

          </div>

          <br>
          <div class="button1">
            Check &nbsp;&nbsp;Details&nbsp;&nbsp;&nbsp;&nbsp; <a href="CheckDetails.php"><input type="button" style="font-family: Arial, Helvetica, sans-serif;
  align-items: center;
  transition-duration: 0.2s;
  cursor: pointer;
  border-radius: 8px;
  height: 5vh;
  width: 80px;
  background-color: #1186ae;
  color: white;
  font-size: 16px;
  margin-top: -3rem;
  margin-left: 0.2rem;" value="Check" name="check" /></a>

          </div>
        </div>
        </div>

      </form>

      </div>
  </body>

</html>