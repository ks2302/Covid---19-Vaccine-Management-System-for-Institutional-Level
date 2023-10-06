<?php
session_start();

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'VMS';

$conn = mysqli_connect($dbhost, $dbuser, '', $db);


if (isset($_POST['login'])) {

    $aname = $_POST['aemail'];
    $enteredpass = $_POST['apass'];

    $query1 = "SELECT * FROM alogin WHERE aemail = '$aname' AND apass = '$enteredpass' ";

    $result1 = mysqli_query($conn, $query1);
    $present1 = mysqli_num_rows($result1);

    $expectedpass = $_GET['apass'];

    $query2 = "SELECT * FROM alogin where apass = '$expectedpass' ";

    $result2 = mysqli_query($conn, $query2);
    $present2 = mysqli_num_rows($result2);

    if ($present1 != $present2) {

        header('Location: Ahome.php');

    } else {

        $_SESSION['name_alert'] = '1';
        header('Location: adminlogin.php');

    }

}
?>