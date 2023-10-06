<?php
session_start();

require 'connect.php';

$message = '';
if (isset($_SESSION['name_alert'])) {
  $message = 'Updated Successfully';
}

$stu_email = $_SESSION['stu_email'];

$query_for_stu_details = "SELECT UPPER(fname) as ufname, mno, dob, address, gender FROM uinfo where email = '$stu_email'";

$query_stu_info = mysqli_query($conn, $query_for_stu_details);

$stu_info = mysqli_fetch_assoc($query_stu_info);

if (empty($stu_info)) {
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
    <link rel="stylesheet" href="Editprofile.css" />
  </head>
  <style>
    body {
      background: url(vecteezy_molecular-background-of-medical-science-3d-illustration_10742889.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }

    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
  </style>

  <body>
    <header class="nv" style="margin-left: -1rem;
  margin-top: -2rem;
  width: 96.5rem;
  height: 5rem;
  background-color: #003049;">
      <p class="vms" style="
  font-size: 2rem;
  font-family: 'Times New Roman';
  margin-left: 16rem;
  margin-top: 2rem;
  padding: 1.2rem;
  
">VMS | COVID- 19 VACCINE MANAGEMENT SYSTEM FOR INSTITUTION</p>
    </header>
    <nav id="nav2" style="position: static; background-color: #118ab2;
  width: 96.5rem;
  margin-left: -1rem;
  margin-top: 0rem;">
      <ul style="">
        <li><a href="Uhome.php">Home</a></li>
        <li><a href="Editprofile.php">Profile</a></li>
        <li><a href="Slotbook.php">Slot Book</a></li>
        <li><a href="Userfeed.php">Feedback</a></li>
        <li><a href="index.php">Log out</a></li>
      </ul>
    </nav>
    <div class="ep" style=" margin-left: 40rem;
  margin-top: -2rem;
  font-size: 2rem;">
      <p><u>EDIT</u> <u>PROFILE</u></p>
    </div>

    <br />
    <div class="box" style="padding: 4rem 4rem 2rem 0rem; margin-top: rem; height: 28rem;width: 45rem;
  height: 25.6rem;
  border: 2px solid black;
  border-radius: 20px;
  background-color: #003049;

  margin-top: -2rem;
  margin-left: 23rem;">
      <form method="POST">
        <div style="margin-left: 5.5rem;">
          <div class="fullname" style="margin-top: -1rem;">
            <label>
              <div class="f" style="margin-top: 0.5rem;
  color: white;
  font-size: 1.4rem;">FULL NAME</div>
              <br /><br />
              <input type="text" style="margin-top: -23px;
  display: block;
  height: 3.5vh;
  font-size: 1.3rem;
  text-align: ;
  border-radius: 5px;
  padding-left: 0.2rem;" class="fname" name="fname" value="<?php echo $stu_info['ufname']; ?>" required />

            </label>
          </div>

          <br />
          <div class=" mobile" style="margin-left: 370px;
  margin-top: -5.8rem;
}">
            <label>
              <div class="mob" style=" margin-top: -2rem;
  color: white;
  font-size: 1.4rem;">MOBILE NUMBER</div>
              <br /><br />
              <input type="number" name="mno" style=" margin-top: -23px;
  display: block;
  height: 3.5vh;
  font-size: 1.4rem;
  border-radius: 5px;
  padding-left: 0.2rem;" class="mno" value='<?php echo $stu_info['mno']; ?>' required />
            </label>
          </div>

          <br />
          <div class="date" style="  margin-top: 20px;">
            <label>
              <div class="d" style="margin-top: 11px;
  color: white;
  font-size: 1.4rem;">DOB</div>
              <br /><br />
              <input type="date" name="dob" style="margin-top: -23px;
  display: block;
  height: 4.8vh;
  font-size: 1.4rem;
  border-radius: 5px;
  padding-left: 0.2rem;" class="dob" value='<?php echo $stu_info['dob']; ?>' required />
            </label>
          </div>

          <br />
          <div class="address" style="margin-left: 370px;
  margin-top: -104px;">
            <label>
              <div class="ad" style="margin-top: 11px;
  color: white;
  font-size: 1.4rem;">ADDRESS</div>
              <br /><br />
              <input type="text" class="add" style="margin-top: -23px;
  display: block;
  height: 4vh;
  font-size: 1.3rem;
  border-radius: 5px;
  padding-left: 0.2rem;" name="address" value='<?php echo $stu_info['address']; ?>' required />
            </label>
          </div>

          <br />
          <div style=" margin-top: 0rem; font-size: 1.5rem; color: white; font-size: 1.4rem;" class="gender">
            <div class="g" style="margin-top: 30px;">&nbsp;GENDER</div>
            <br />
            <div class="r">
              <?php if ($stu_info['gender'] == 'M' || $stu_info['gender'] == 'm') {

                ?>
                <label> <input type="radio" name="gender" value='<?php echo $stu_info['gender'] ?>' <?php echo 'checked'; ?> required />
                  Male
                </label>
                <label> <input type="radio" name="gender" value='f ' required />
                  Female</label>
                <label> <input type="radio" name="gender" value='o' required />
                  Others</label>

              <?php } else if ($stu_info['gender'] === 'F' || $stu_info['gender'] == 'f') { ?>

                  <label> <input type="radio" name="gender" value='m' required />
                    Male
                  </label>
                  <label> <input type="radio" name="gender" value='<?php echo $stu_info['gender']; ?>' <?php echo 'checked'; ?> required />
                    Female</label>
                  <label> <input type="radio" name="gender" value='o' required />
                    Others</label>

              <?php } else { ?>

                  <label> <input type="radio" name="gender" value='m' required />
                    Male
                  </label>
                  <label> <input type="radio" name="gender" value='f' required />
                    Female</label>
                  <label> <input type="radio" name="gender" value='<?php echo $stu_info['gender']; ?>' <?php echo 'checked'; ?> required />
                    Others</label>

              <?php } ?>

            </div>
          </div>
          <br /><br>
          <div class="Email" style="margin-top: -7rem;">
            <label>
              <div style="margin-top: -4rem;
  margin-left: 23rem;
  color: white;
  font-size: 1.4rem;" class="em">EMAIL</div>
              <br /><br />
              <input type="email" style="margin-top: -23px;
  display: block;
  height: 4vh;
  font-size: 1.3rem;
  border-radius: 5px;
  padding-left: 0.2rem;
  margin-left: 23rem; color: white;" class="email" name="email" value='<?php echo $stu_email; ?>' required disabled />
            </label>
          </div>
        </div>
        <br />

        <div class="button" style="">
          <input type="Submit" name="update" class="rg" style="font-family: Arial, Helvetica, sans-serif;
  align-items: center;
  transition-duration: 0.2s;
  cursor: pointer;
  border-radius: 8px;
  height: 5vh;
  width: 80px;
  background-color: #1186ae;
  color: white;
  font-size: 16px;
  margin-top: 2rem; margin-left: 21rem;" value="Update" />
        </div>
        <br />
    </div>
    <?php


    if (isset($_POST['update'])) {
      $fname = $_POST['fname'];
      $gender = $_POST['gender'];
      $mno = $_POST['mno'];
      $dob = $_POST['dob'];
      $address = $_POST['address'];
      $stu_email = $_SESSION['stu_email'];



      $query = "UPDATE uinfo SET fname = '$fname', gender ='$gender', mno='$mno', dob='$dob', address='$address' WHERE email='$stu_email'";
      // header('Location: Editprofile.php');
    
      if (mysqli_query($conn, $query)) {

        // header('Location: Editprofile.php');
        ?>
        <div style="margin-left: 40.3rem;
        margin-top: -2.4rem;
        color: white;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 1.5rem;"><?php echo $message; ?></div>

        <?php

      }
    }

    unset($_SESSION['name_alert']);

    ?>

    </form>

  </body>

</html>