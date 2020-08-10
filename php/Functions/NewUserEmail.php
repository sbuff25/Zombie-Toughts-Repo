<?php

    function new_user_email_body($email, $first_name, $last_name, $key){
        $body = '';
        $body .= "Dear " . $first_name . " " . $last_name . ",\n";
        $body .= "Welcome to the Montana Repertory Theatre's Zombie Thoughts Website!\n";
        $body .= "In order to confirm your account creation, please click on the following link to set your password:\n\n";
        $body .= 'https://www.montanarepzombiethoughts.com/php/NewUserPassword.php?key=' . $key . '&email='. $email ."&action=setpassword\n\n";
        $body .= "If you do not set your password within 4 days of your account creation, you must ask your administrator to recreate an account for you.\n\n";
        $body .= "Thank you,\n";
        $body .= "Montana Repertory Theatre\n";

        return $body;
    }

    function new_user_email_subject(){
        return "New User - Montana Repertory Theatre Zombie Thoughts";
    }
?>