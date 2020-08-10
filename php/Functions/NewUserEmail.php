<?php

    function new_user_email_body($email, $first_name, $last_name, $key){
        $body = '';
        $body .= '<p>Dear ' . $first_name . ' ' . $last_name ',</p>';
        $body .= "<p>Welcome to the Montana Repertory Theatre\'s Zombie Thoughts Website!</p>";
        $body .= "<p>In order to confirm your account creation, please click on the following link to set your password:";
        $body .= "<a href='https://www.montanarepzombiethoughts.com/php/NewUserPassword.php?key=" . $key . "&email=". $email ."&action=setpassword' target='_blank''>https://www.montanarepzombiethoughts.com/php/NewUserPassword.php?key=" . $key . "&email=". $email ."&action=setpassword</a></p>";
        $body .= "<p>If you do not set your password within 4 days of your account creation, you must ask your administrator to recreate an account for you.</p>";
        $body .= "<p>Thank you,</p>";
        $body .= "<p>Montana Repertory Theatre</p>";

        return $body;
    }

    function new_user_email_subject(){
        return "New User - Montana Repertory Theatre Zombie Thoughts";
    }
?>