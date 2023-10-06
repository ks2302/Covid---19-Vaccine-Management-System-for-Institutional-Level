<?php
session_start();

require 'connect.php';


if (isset($_POST['submit'])) {

   $username = $_POST['email'];

   $_SESSION['stu_email'] = $username;

   $enteredpassword = $_POST['password'];

   $query1 = "SELECT * FROM uinfo WHERE email = '$username' AND password = '$enteredpassword' ";

   $result1 = mysqli_query($conn, $query1);
   $present1 = mysqli_num_rows($result1);

   $expectedpassword = $_GET['password'];

   $query2 = "SELECT * FROM uinfo where password = '$expectedpassword'";

   $result2 = mysqli_query($conn, $query2);
   $present2 = mysqli_num_rows($result2);

   if ($present1 != $present2) {

      header('Location: Uhome.php');

   } else {

      $_SESSION['name_alert'] = '1';
      header('Location: index.php');

   }

}
?>