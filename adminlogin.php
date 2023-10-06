<?php
session_start();
$message = '';
if (isset($_SESSION['name_alert'])) {
  $message = 'Incorrect Email and Password !!';
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vaccine Management System</title>
    <link rel="stylesheet" href="alogin.css" />
    <style>
      body {
        background: url(healthcare-coronavirus-vaccine-arrangement.jpg);
        background-size: 100%;
      }
    </style>
  </head>

  <body>
    <form action="alogin.php" method="post" style="
        margin-right: 10rem;
        display: flex;
        height: 80vh;
        align-items: center;
        justify-content: center;
      ">
      <div class="v" style="margin-left: 11rem;position: fixed">
        <p>VMS | COVID- 19 VACCINE MANAGEMENT SYSTEM FOR INSTITUTION</p>
      </div>

      <form>
        <div class="Box"
          style="box-shadow: 25px 25px 25px #216481d4; margin-top: 7rem ; height=20rem ;margin-left: -34rem">

          <p style='color: black;
        font-size: 1rem;
        margin-left: 1rem;
        margin-top: -0.6rem;
        font-family: cursive;'><?php echo $message; ?></p>

          <div class="Sign">
            <h2>Admin Login</h2>
          </div>
          <div>
            <input type="email" placeholder="Email" name="aemail" required style="
                display: block;
                height: 4.5vh;
                text-align: center;
                font-size: medium;
                border-radius: 8px;
                padding-left: 0.2rem;
              " />
          </div>
          <br />
          <div>
            <input type="password" placeholder="Password" name="apass" required style="
                display: block;
                height: 4.5vh;
                text-align: center;
                font-size: medium;
                border-radius: 8px;
                padding-left: 0.2rem;
              " class="pass" />
          </div>
          <br />
          <div>
            <a href="Ahome.php"><input type="submit" class="submit" name="login" /></a>
          </div>
      </form>
    </form>
    <div style="font-size: 1.4rem;
  margin-top: -15px;">
      User Login&nbsp;&nbsp;&nbsp;<a href="index.php"><input type="button" class="login" value="GO" /></a>
    </div>
    </form>
    </form>

    <?php unset($_SESSION['name_alert']); ?>

    <div style='position: fixed' ;>
      <p style='font-size: 1rem;
margin-top: 33.6rem;
  margin-right: -60rem;
  margin-left: 10rem;'>Copyright © 2023 COVID-19_VMS. All Rights Reserved</p>
    </div>

  </body>

</html>