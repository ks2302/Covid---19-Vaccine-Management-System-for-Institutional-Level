<?php
session_start();

require 'connect.php';

$stu_email = $_SESSION['stu_email'];

// $query_for_user_name = "SELECT fname from uinfo where email = '$stu_email'";
$query_for_user_name = "SELECT email FROM uinfo where email = '$stu_email'";

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
    <link rel="stylesheet" href="Userfeedback.css" />
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

    <div class="fb">
      <p><u>FEEDBACK</u></p>
    </div>
    <div class="container">
      <form action="#" method="post">
        <div class="ip1">
          <input type="email" id="email" value="<?php echo $stu_email; ?>" name="email" required disabled
            style="color: white; text-align: center" />
        </div>
        <br />

        <br />
        <br />
        <div class="type">
          <label>
            <h4>Type Your Feedback Here...</h4>
            <textarea name="fcontent" required></textarea>
          </label>
          <div class="1p2">
            <input type="submit" value="Send" id="button" name="submit" />
          </div>
        </div>
        <?php
        if (isset($_POST['submit'])) {

          // $email = $_POST['email'];
        


          $content = $_POST['fcontent'];

          $query = " INSERT INTO feedback(email,fcontent) VALUES ('$stu_email','$content')";

          $data = mysqli_query($conn, $query);

          if ($data) {
            header('Location: Userfeed.php');

          } else {
            $alert = "<script>alert('ERROR OCCURED');</script>";
            echo $alert;
          }
        }
        ?>
      </form>
    </div>

  </body>

</html>