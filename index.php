<?php
session_start();

unset($_SESSION['stu_email']);

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
    <link rel="stylesheet" href="index.css" />
    <style>
      body {
        background: url(healthcare-coronavirus-vaccine-arrangement.jpg);
        background-size: 100%;
      }

      .class:hover {
        color: white;
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24),
          0 17px 50px 0 rgba(0, 0, 0, 0.19);
      }

      /* p {
        color: #bde5f8;
        font-size: 1.2rem;
        margin-left: 14rem;
        font-family: cursive;
      } */
    </style>
  </head>

  <body>
    <form action="uconnect.php" method="post" style="
        margin-right: 10rem;
        display: flex;
        height: 80vh;
        align-items: center;
        justify-content: center;
      ">
      <div class="v" style="margin-left: 11rem; position: fixed;">
        <p>VMS | COVID- 19 VACCINE MANAGEMENT SYSTEM FOR INSTITUTION</p>
      </div>

      <form action="#" class="form">
        <div class="Box" style="box-shadow: 25px 25px 25px #216481d4; margin-left: -34rem">
          <p style='color: black;
        font-size: 1rem;
        margin-left: 1rem;
        margin-top: -1rem;
        font-family: cursive;'><?php echo $message; ?></p>

          <div class="Sign">
            <h2>User Sign in</h2>
          </div>
          <div>
            <input type="email" placeholder="Email" name="email" required style="
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
            <input type="password" placeholder="Password" name="password" required style="
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
            <a href="Uhome.php"><input type="submit" class="submit" value="submit" name="submit" /></a>
          </div>
          <br />
          <div style="font-size: 1.3rem">
            Admin Login &nbsp;
            <a href="adminlogin.php"><input type="button" value="Login" class="class" style="
                  align-items: center;
                  transition-duration: 0.2s;
                  cursor: pointer;
                  border-radius: 8px;
                  height: 3.5vh;
                  width: 60px;
                  background-color: rgb(12, 12, 75);
                  color: white;
                  font-size: 12px;
                  box-shadow: 20px;
                " /></a>
          </div>
          <br />
          <div style="font-size: 1.4rem">
            <p style="margin-top: -15px">
              New User? <a href="NewUserRegis.php">Register here!</a>
            </p>
          </div>
        </div>
      </form>
    </form>
    <?php unset($_SESSION['name_alert']); ?>
    <div class="copy">
      <p>Copyright © 2023 COVID-19_VMS. All Rights Reserved</p>
    </div>

  </body>

</html>