<?php
session_start();
if (isset($_SESSION['fname'])) {
  $name_error = $_SESSION['fname'];
  unset($_SESSION['fname']);
}

if (isset($_SESSION['email'])) {
  $email_error = $_SESSION['email'];
  unset($_SESSION['email']);
}
if (isset($_SESSION['mno'])) {
  $phone_error = $_SESSION['mno'];
  unset($_SESSION['mno']);
}
if (isset($_SESSION['password'])) {
  $pass_error = $_SESSION['password'];
  unset($_SESSION['password']);
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Nuser.css" />
    <style>
      body {
        background: url(healthcare-coronavirus-vaccine-arrangement.jpg);
        /* background: url(13313271_v870-tang-36.jpg); */
        background-size: 100%;
      }

      input[type="number"]::-webkit-inner-spin-button,
      input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
    </style>
    <title>USER REGISTRATION</title>
  </head>

  <body>
    <form class="form" action="ureg.php" method="post" style="
        background: linear-gradient(to top left, #50dfffd4, #b3e0e5);
        backdrop-filter: blur(30px); margin-top: 2rem; height:38rem;
      ">
      <div class="form_div">
        <div class="create">
          <div class="acc">
            <h2>Create An Account</h2>
          </div>
        </div>
      </div>
      <br />
      <div class="fullname">
        <label>
          <div class="f">FULL NAME</div>
          <br />
          <input type="text" class="fname" name="fname" required />
        </label>
      </div>
      <small> <?php
      if (isset($name_error)) {
        echo "<div style='font-size: 16px; margin-right: 20rem; color: red; position: fixed; font-weight: bold;'>" . $name_error . "</div>";
      } ?>
      </small>
      <br />
      <div class="mobile">
        <label>
          <div class="mob">MOBILE NUMBER</div>
          <br />
          <input type="number" name="mno" class="mno" required />
        </label>
      </div>
      <small> <?php
      if (isset($phone_error)) {
        echo "<div style='font-size: 16px; margin-left: 23rem; color: red; position: fixed; font-weight: bold;'>" . $phone_error . "</div>";
      } ?>
      </small>
      <br />
      <div class="date">
        <label>
          <div class="d">DOB</div>
          <br />
          <input type="date" name="dob" class="dob" required />
        </label>
      </div>

      <br />
      <div class="address">
        <label>
          <div class="ad">ADDRESS</div>
          <br />
          <input type="text" class="add" name="address" required />
        </label>
      </div>

      <br />
      <div class="gender">
        <div class="g">&nbsp;GENDER</div>
        <br />
        <div class="r">
          <input type="radio" name="gender" value="m" required /> Male
          <input type="radio" name="gender" value="f" required /> Female<input type="radio" name="gender" value="o"
            required />
          Others
        </div>
      </div>
      <br />
      <div class="Email">
        <label>
          <div class="em">EMAIL</div>
          <br />
          <input type="email" class="email" name="email" required />
        </label>
      </div>
      <small> <?php
      if (isset($email_error)) {
        echo "<div style='font-size: 16px; margin-left: 23rem; color: red; position: fixed; font-weight: bold;'>" . $email_error . "</div>";
      } ?>
      </small>
      <br />
      <div class="password">
        <label>
          <div class="p">PASSWORD</div>
          <br />
          <input type="password" class="pword" name="password" required />
        </label>
      </div>
      <br />
      <div class="cpassword">
        <label>
          <div class="cp">CONFIRM PASSWORD</div>
          <br />
          <input type="password" class="cword" name="cpassword" required />
        </label>
      </div>
      <small> <?php
      if (isset($pass_error)) {
        echo "<div style='font-size: 16px; margin-left: 23rem; color: red; position: fixed; font-weight: bold;'>" . $pass_error . "</div>";
      } ?>
      </small>
      <br /><br>
      <div class="button" style="margin-top: 2rem">
        <a href="#"><input type="Submit" name="Register" class="rg" /></a>
      </div>
      <br />
      <div class="sin">
        <p>
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Already have an account?
          <a href="index.php">Login</a>
        </p>
      </div>
      </div>
    </form>
  </body>

</html>