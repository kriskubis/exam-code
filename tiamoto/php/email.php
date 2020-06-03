<?php

if (isset($_POST['submit'])){
    $email = $_POST['mailTo'];
    $subject = "Test of php function";

    $title = $_POST['mailTitle'];
    $street = $_POST['mailStreet'];
    $city = $_POST['mailCity'];
    $postal = $_POST['mailPostal'];
    $intro = $_POST['mailIntro'];
    $why = $_POST['mailWhy'];
    $dont = $_POST['mailDont'];
    $good = $_POST['mailGood'];

    $message = "Here is your information about ".$title." from Guideus 2000.\n\n"
    ."Address:\n".$street."\n".$city."\n".$postal."\n\n"."About:\n".$intro."\n\n"
    ."Why we like it:\n".$why."\n\n"."Cannot miss:\n".$dont."\n\n"."Good to know:\n".$good;
    

    mail($email, $subject, $message);
    echo"Sent";

}
