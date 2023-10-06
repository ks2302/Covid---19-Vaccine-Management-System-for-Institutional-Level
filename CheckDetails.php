<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>User Info</title>
        <link rel="stylesheet" href="CheckDetails.css" />
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
            <h1 class="sinfo"><u>VACCINE</u> <u>DATA</u></h1>

            <div class="table">
                <?php
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = '';
                $db = 'VMS';

                $conn = mysqli_connect($dbhost, $dbuser, '', $db);

                $query = "SELECT * FROM vaccineinfo ";
                $data = mysqli_query($conn, $query);

                $total = mysqli_num_rows($data);

                if ($total != 0) { ?>
                    <div class="">
                        <table class="tab" style>
                            <thead id="th">
                                <tr>
                                    <th class="i" style="width:4%">VID</th>
                                    <th class="n">VACCINE</th>
                                    <th class="g">STOCK</th>
                                    <th class="m">COUNTRY ORIGIN</th>
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
          <td>" . $result['vname'] . "</td>
          <td>" . $result['stock'] . "</td>
          <td>" . $result['country_origin'] . "</td>
          

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