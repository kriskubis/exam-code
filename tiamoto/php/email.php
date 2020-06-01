<?php

if (isset($_POST[´submit´])){
    $email = $_POST[´usermail´];
    $subject = "Test of php function";
    $message = "BLBLBLBLBLBLB";

    mail($email, $subject, $message);
}