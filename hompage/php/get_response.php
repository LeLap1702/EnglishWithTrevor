<?php
include "config.php";
?>
<?php

if (isset($_POST["add"])) {
    if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $sql = "INSERT INTO contact(firstname,lastname,email,subject,message) 
        values ('$firstname','$lastname','$email','$subject','$message')";
        if (mysqli_query($conn, $sql)) {
            // echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    } else {
        // echo "Enter full Data";
    }
}
?>
