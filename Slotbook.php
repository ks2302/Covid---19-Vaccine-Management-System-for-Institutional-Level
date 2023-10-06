<?php
session_start();

// Set the time zone to India
date_default_timezone_set('Asia/Kolkata');

require 'connect.php';

$stu_email = $_SESSION['stu_email'];


// $query_for_user_name = "SELECT fname from uinfo where email = '$stu_email'";
// $query = "SELECT email FROM slotbook where email = '$stu_email'";

$query1 = "SELECT vname FROM vaccineinfo";


// $query_u_name = mysqli_query($conn, $query);

$query_vname = mysqli_query($conn, $query1);

// $u_name = mysqli_fetch_assoc($query_u_name);

$vaccine = mysqli_fetch_all($query_vname, MYSQLI_ASSOC);

// process for single slot book....

$query = "SELECT COUNT(*) AS count FROM slotbook WHERE email = '$stu_email'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$slotCount = $row['count'];

if ($slotCount > 0) { ?>



  <!DOCTYPE html>
  <html lang="en">

    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>User Home</title>
      <link rel="stylesheet" href="Slotbook.css" />
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
      <div class="slot">
        <p><u>SLOT</u> <u>BOOK</u></p>
      </div>
      <br><br>
      <div class="box" style='padding: 2rem 2rem 4rem 2rem;width: 60rem;
    height: 25.6rem;
    border: 2px solid black;
    border-radius: 20px;
    background-color: #003049;
    margin-left: 15rem;
        margin-top: -2rem;'>

        <h2></h2>

        <form action="#" method="post">
          <div class="v" style="margin-left: -7rem;
            margin-top: -3rem;">
            <br />
            <br />
            <label class="vaccinename" style="margin-left: 10.5rem; color:white;
              font-size: 2rem;">DATE :<br /><br /><br>
              <input type="date" class="vname" name="date" style="display: block;
                height: 5vh;
                font-size: 1.7rem;
                border-radius: 5px;
                padding-left: 0.2rem;
                margin-left: 10.4rem;
                margin-top: -4.7rem;" id="dateInput" required /></label>
          </div>
          <div class="stock" style="margin-left: 30rem;
            margin-top: -7.4rem;">
            <br />
            <br />
            <label class="sb" style="color: white;
              font-size: 2rem;
              margin-left: 5.2rem;
            ">TIME SLOT :<br /><br><br>
              <select style=" display: block;
                height: 5vh;
                width : 14rem;
                font-size: 1.5rem;
                border-radius: 5px;
                padding-left: 0.2rem;
                margin-left: 5.4rem;
                margin-top: -4.7rem;" class="sbox" name="stime" required>

                <option value='9AM-12PM'>9AM-12PM</option>
                <option value='2PM-5PM'>2PM-5PM</option>
              </select></label>
          </div>
          <div class="composition" style="margin-left: 4rem;">
            <br />
            <br />

            <label style="color: white;
              font-size: 2rem;
              margin-left: -0.5rem;" class="cm">VACCINE :<br /><br><br>
              <select style=" display: block;
                height: 5vh;
                width : 15rem;
                font-size: 1.5rem;
                border-radius: 5px;
                padding-left: 0.2rem;
                margin-left: -0.5rem;
                margin-top: -4.5rem;" class="comp" name="vname" required>

                <?php foreach ($vaccine as $vac) { ?>
                  <option value='<?php echo $vac['vname']; ?>'><?php echo $vac['vname']; ?></option>

                  <!-- <option value=''> -->
                <?php } ?>
                <!-- </datalist> -->
              </select>
            </label>
          </div>
          <div style=" margin-left: 5rem;
            margin-top: -7.6rem;" class="Email">
            <br />
            <br />
            <label style="color: white;
              font-size: 2rem;
              margin-left: 30.5rem;
              margin-top: 8rem;" class="em">EMAIL :<br /><br>
              <input type="text" style="display: block;
                height: 5vh;
                font-size: 1.7rem;
                border-radius: 5px;
                padding-left: 0.2rem;
                margin-left: 30.5rem;
                margin-top: -2.3rem;
                color: white;" class="email" name="vname" value='<?php echo $stu_email; ?>' required
                disabled /></label>
          </div>
          <div style="margin-left: 4rem;" class="composition">
            <br />
            <br />
            <label style="color: white;
              font-size: 2rem;
              margin-left: -0.5rem;" class="cm">DOSE :<br /><br><br>
              <select style="display: block;
                height: 5vh;
                width : 15rem;
                font-size: 1.5rem;
                border-radius: 5px;
                padding-left: 0.2rem;
                margin-left: -0.5rem;
                margin-top: -4.5rem;" list="dose" class="comp" name="dose" required>

                <option value='FIRST'>FIRST</option>
                <option value='SECOND'>SECOND</option>
              </select></label>
          </div>
          <div style="color: white; font-size: 1.3rem; margin-left: 24rem; margin-top: -4rem; font-family : cursive;">
            <?php echo "Already Booked"; ?>
          </div>
          <div>
            <div style="margin-top: 5.5rem;
              margin-left: 26rem;" class="button">
              <a href="Slotbook.html"><input type="Submit" name="submit" class="vs" /></a>
            </div>
          <?php } else {
  if (isset($_POST['submit'])) {

    // $email = $_POST['email'];



    $stime = $_POST['stime'];
    $date = $_POST['date'];
    $dose = $_POST['dose'];
    $vaccinename = $_POST['vname'];

    $query = " INSERT INTO slotbook(email,stime,date,vname,dose) VALUES ('$stu_email','$stime','$date','$vaccinename','$dose')";
    $data = mysqli_query($conn, $query);

    // $query1 = "UPDATE vaccineinfo set stock = stock  - 1  where vname = '$vaccinename';";
    // $data1 = mysqli_query($conn, $query1);


    if ($data) {
      // header('Location: Slotbook.php');
      $query1 = "UPDATE vaccineinfo set stock = stock  - 1  where vname = '$vaccinename';";
      $data1 = mysqli_query($conn, $query1); ?>

                <div style="color: white; font-size: 1.3rem; margin-left: 22rem; margin-top: -6rem; font-family : cursive;">
                  <?php echo "Slot Booked Successfully"; ?>
                </div>

              <?php } else {
      $alert = "<script>alert('ERROR OCCURED');</script>";
      echo $alert;
    }

  }
}
?>
      </form>
      <?php
      $today = date('Y-m-d');
      echo "<script>document.getElementById('dateInput').setAttribute('min', '$today');</script>";
      ?>

      <!-- <script>
        const today = new Date().toISOString().split("T")[0];
        document.getElementById("dateInput").setAttribute("min", today);
      </script> -->
  </body>

</html>