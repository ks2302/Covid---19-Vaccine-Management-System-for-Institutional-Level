<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Info</title>
    <link rel="stylesheet" href="UserInfo.css" />
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
      <h1 class="sinfo" style="font-size: 3rem; margin-left: 32rem;"><u>USER</u> <u>INFORMATION</u></h1>

      <div class="table">
        <?php
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $db = 'VMS';

        $conn = mysqli_connect($dbhost, $dbuser, '', $db);

        $query = "SELECT * FROM uinfo ";
        $data = mysqli_query($conn, $query);

        $total = mysqli_num_rows($data);

        if ($total != 0) { ?>
          <div class="">
            <table class="tab" style>
              <thead id="th">
                <tr>
                  <th class="i" style="width:4%">ID</th>
                  <th class="n">NAME</th>
                  <th class="g">GENDER</th>
                  <th class="m">MOBILE NUMBER</th>
                  <th class="d">DOB</th>
                  <th class="a">ADDRESS</th>
                  <th class="e">EMAIL</th>
                </tr>
              </thead>
          </div>
          <?php
          $n = 1;
          while ($result = mysqli_fetch_assoc($data)) {
            echo "<div><tr style='background-color: white
            '>
            <div>
          <td>" . $n . "</td>
          <td>" . $result['fname'] . "</td>
          <td>" . $result['gender'] . "</td>
          <td>" . $result['mno'] . "</td>
          <td>" . $result['dob'] . "</td>
          <td>" . $result['address'] . "</td>
          <td>" . $result['email'] . "</td>
          </div>

        </tr>
        </div>
        ";
            $n++;
          }
        } else {
          echo "NO record found";
        }

        ?>
        </thead>
        </table>
      </div>
  </body>

</html>