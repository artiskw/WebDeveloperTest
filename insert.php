<?php

require('db.php');

if (isset($_POST['submit'])) {

    if (!isset($_POST['terms_and_conditions'])) {
        header('Location: index.php?status=terms-empty');
    } else {
        if(!empty($_POST['email'])) {
            if (substr($_POST['email'], -2) === 'co') {
                header('Location: index.php?status=restricted-country');
            } else {
                $email = $_POST['email'] ;
                $query = "insert into form(email) values('$email')";
                $run = mysqli_query($conn, $query) or die(mysqli_error());
                
                if ($run) {
                    header('Location: index.php?status=success');
                } else {
                    // echo "Form not submitted" ;
                }
            }
        } else {
            header('Location: index.php?status=empty-email');
        }
    }
} ?>
