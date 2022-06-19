<?php

if (isset($_POST['submit'])) {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        // send email
        mail(
            "edjek@hotmail.fr",
            $_POST['subject'],
            "message: " . $_POST['message'],
            "MIME-Version: 1.0" . "\r\n" .
            "Content-type:text/html;charset=UTF-8" . "\r\n" .
            "From: " . $_POST['email'] . "\r\n"
        );
        header('Location: ../index.html');

        die();
    }
}
