<?php

require 'connect.php';

if (($_POST['submit'])) {

    $email = $_POST['email'];



    $content = $_POST['fcontent'];

    $query = " INSERT INTO feedback(email,fcontent) VALUES ('$content')";

    $data = mysqli_query($conn, $query);

    if ($data) {
        header('Location: Userfeed.php');

    } else {
        $alert = "<script>alert('ERROR OCCURED');</script>";
        echo $alert;
    }
}
?>