<?php
session_start();

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'VMS';


$conn = mysqli_connect($dbhost, $dbuser, '', $db);

if ($_POST['Submit']) {
    $vaccinename = $_POST['vname'];
    $stock = $_POST['stock'];
    $cm = $_POST['country_origin'];

    // $_SESSION['vaccinename'] = $vaccinename;

    $sql = "SELECT * from vaccineinfo where vname= '$vaccinename' ";
    $result = mysqli_query($conn, $sql);
    $present = mysqli_num_rows($result);

    if ($present > 0) {
        $_SESSION['name_alert'] = '1';
        header('Location: VaccineInfo.php');

    } else {
        $query = " INSERT INTO vaccineinfo(vname, stock, country_origin) VALUES (UPPER('$vaccinename') , '$stock', UPPER('$cm'))";

        $data = mysqli_query($conn, $query);

        header('Location: VaccineInfo.php');

    }
}
?>