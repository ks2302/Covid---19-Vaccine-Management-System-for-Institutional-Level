<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Feedback</title>
    <link rel="stylesheet" href="Feedback.css" />
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

    <div>
      <p style="font-size: 4rem; margin-left: 35rem; margin-top: -0.2rem; color: #003049;"><u>FEEDBACK</u></p>
    </div>
    <div class="table">
      <?php
      $dbhost = 'localhost';
      $dbuser = 'root';
      $dbpass = '';
      $db = 'VMS';

      $conn = mysqli_connect($dbhost, $dbuser, '', $db);

      $query = "SELECT * FROM feedback ";
      $data = mysqli_query($conn, $query);

      $total = mysqli_num_rows($data);

      if ($total != 0) { ?>
        <div class="table-wrapper">
          <table class="tab" style="background-color: #003049;
  width: 96.6rem;
  height: 3rem;
  margin-left: -1.1rem;
  margin-top: -2.7rem;
  font-size: 1.4rem;">
            <thead id="th">
              <tr>
                <th class="i" style="font-size: 1.5rem;
  border-right: 1px solid #ffffff;
  color: white;">FID</th>
                <th class="n" style="font-size: 1.5rem;
  border-right: 1px solid #ffffff;
  color: white;">EMAIL</th>
                <th class="g" style="font-size: 1.5rem;
  border-right: 1px solid #ffffff;
  color: white; width: 83%;">FEEDBACK</th>

              </tr>
            </thead>
        </div>
        <?php
        $n = 1;
        while ($result = mysqli_fetch_assoc($data)) {
          echo "<div><tr style='background-color: white;
          
          '>
          <div>
        <td style='text-align:centre;'>" . $n . "</td>
        <td style='text-align:centre;'>" . $result['email'] . "</td>
        <td style='text-align:justify;'>" . $result['fcontent'] . "</td>
        </div>

      </tr>
      </div>
      ";
          $n++;
        }
      }
      // else {
      //   echo "NO record found";
      // }
      
      ?>
      </thead>
      </table>
    </div>



  </body>

</html>