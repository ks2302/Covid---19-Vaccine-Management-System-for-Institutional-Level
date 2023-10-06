<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'VMS';

$conn = mysqli_connect($dbhost, $dbuser, '', $db);
// if (isset($_POST['submit'])) {
//     var_dump('submit');
// }
if (isset($_POST['submit'])) {
    $vaccinename = $_POST['vname'];
    // $stock = $_POST['stock'];

    $Select = "SELECT stock FROM vaccineinfo WHERE vname = '$vaccinename'";

    $query = mysqli_query($conn, $Select);
    $total = mysqli_num_rows($query);

    if ($total != 0) {


        $result = mysqli_fetch_assoc($query);

        echo $result['stock'];
    } else {
        header('Location: Update_vaccine.php');
    }
}
?>