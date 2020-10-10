<?php

    /*
    _______________________New User Creation Email_______________________________
    */
    
    function new_user_email_body($email, $first_name, $last_name, $key){
        $body = '';
        $body .= "Dear " . $first_name . " " . $last_name . ",\n";
        $body .= "Welcome to the Montana Repertory Theatre's Zombie Thoughts Website!\n";
        $body .= "In order to confirm your account creation, please click on the following link to set your password:\n\n";
        $body .= 'https://www.montanarepzombiethoughts.com/Admin/NewUserPassword?key=' . $key . '&email='. $email ."&action=setpassword\n\n";
        $body .= "If you do not set your password within 4 days of your account creation, you must ask your administrator to recreate an account for you.\n\n";
        $body .= "Thank you,\n";
        $body .= "Montana Repertory Theatre\n";

        return $body;
    }

    function new_user_email_subject(){
        return "New User - Montana Repertory Theatre Zombie Thoughts";
    }

    /*
    _______________________Zombie Thoughts MT Institution Email_______________________________
    */

    function MT_institution_email_plain_body(){
        $body = '';
        $body .= "Hello!\n";
        $body .= "Thanks for your interest in Montana Repertory Theatre's Production of Zombie Thoughts. Your\n";
        $body .= "information has been passed on to our Educational Outreach Coordinator and someone from\n";
        $body .= "our office will contact you soon. If you don't hear from us within 2 business days, feel free to\n";
        $body .= "e-mail us at ZombieThoughts@MontanaRep.com. You can also contact Teresa Waldorf at 406-243-2854 or\n";
        $body .= "Teresa.Waldorf@umontana.edu if you have questions.\n\n";
        $body .= "Michael Legg\n";
        $body .= "Artistic Director\n";
        $body .= "Montana Repertory Theatre";

        return $body;
    }

    function MT_institution_email_html_body(){
        $body = '';
        $body .= "Hello!<br>";
        $body .= "Thanks for your interest in Montana Repertory Theatre's Production of Zombie Thoughts. Your<br>";
        $body .= "information has been passed on to our Educational Outreach Coordinator and someone from<br>";
        $body .= "our office will contact you soon. If you don't hear from us within 2 business days, feel free to<br>";
        $body .= "e-mail us at ZombieThoughts@MontanaRep.com.<br><br>";
        $body .= "Michael Legg<br>";
        $body .= "Artistic Director<br>";
        $body .= "Montana Repertory Theatre";
        $body .= "</body></html>";

        return $body;
    }

    function MT_Institution_email_subject(){
        return "Montana Repertory Theatre Zombie Thoughts - Access Request Submission";
    }

    /*
    _______________________Zombie Thoughts MT Resident Email_______________________________
    */
    function MT_resident_email_plain_body($code){
        $body = '';
        $body .= "Thanks for your interest in Montana Repertory Theatre's Production of Zombie Thoughts.\n";
        $body .= "Here's your one-time use code to watch the show: ". $code .". You can enter it on the Game screen at\n";
        $body .= "MontanaRepZombieThoughts.com. If you need additional help, or a replacement code, you can\n";
        $body .= "e-mail us at ZombieThoughts@MontanaRep.com. You can also contact Teresa Waldorf at 406-243-2854 or\n";
        $body .= "Teresa.Waldorf@umontana.edu if you have questions.\n\n";
        $body .= "After you watch Zombie Thoughts, be sure to check out the Resources page for more\n";
        $body .= "information, links, and helpful guides to dealing with anxiety and other mental health issues.\n\n";
        $body .= "Michael Legg\n";
        $body .= "Artistic Director\n";
        $body .= "Montana Repertory Theatre";

        return $body;
    }
    function MT_resident_email_html_body($code){
        $body = '';
        $body .= "Thanks for your interest in Montana Repertory Theatre's Production of Zombie Thoughts.<br>";
        $body .= "Here's your one-time use code to watch the show: " . $code . ". You can enter it on the Game screen at<br>";
        $body .= "MontanaRepZombieThoughts.com.  If you need additional help, or a replacement code, you can<br>";
        $body .= "e-mail us at ZombieThoughts@MontanaRep.com.<br><br>";
        $body .= "After you watch Zombie Thoughts, be sure to check out the Resources page for more<br>";
        $body .= "information, links, and helpful guides to dealing with anxiety and other mental health issues.<br><br>";
        $body .= "Michael Legg<br>";
        $body .= "Artistic Director<br>";
        $body .= "Montana Repertory Theatre";
        $body .= "</body></html>";

        return $body;
    }
    function MT_Resident_email_subject(){
        return "Montana Repertory Theatre Zombie Thoughts - Access Code";
    }

    /*
    _______________________Zombie Thoughts OOS Request Email_______________________________
    */

    function OOS_request_email_plain_body(){
        $body = '';
        $body .= "Hello!\n";
        $body .= "Thanks for your interest in Montana Repertory Theatre's Production of Zombie Thoughts.\n";
        $body .= "At present, Zombie Thoughts is only available to individuals and schools located within the state of Montana.\n";
        $body .= "Your information has been passed on to our Educational Outreach Coordinator and someone from our office will be\n";
        $body .= "in touch with you soon to talk about future availability in your area.\n";
        $body .= "If you don't hear from us within 2 business days, feel free to e-mail us at ZombieThoughts@MontanaRep.com.\n";
        $body .= "You can also contact Teresa Waldorf at 406-243-2854 or Teresa.Waldorf@umontana.edu if you have questions.\n\n";
        $body .= "Michael Legg\n";
        $body .= "Artistic Director\n";
        $body .= "Montana Repertory Theatre";

        return $body;
    }

    function OOS_request_email_subject(){
        return "Montana Repertory Theatre - Zombie Thoughts Request";
    }

    /*
    _______________________Zombie Thoughts Code Email_______________________________
    */
    function institution_code_email_plain_body($code, $access_num){
        $body = '';
        $body .= "Thanks for your interest in Montana Repertory Theatre's Production of Zombie Thoughts.\n";
        $body .= "Here's your multi-use code to watch the show: ". $code .". This code is good for " . $access_num . " viewings.\n"; 
        $body .= "Please contact us for additional viewings. You can enter the code on the Game screen at\n";
        $body .= "MontanaRepZombieThoughts.com. Please note that the code is case-sensitive, so be sure to enter lower-case\n"; 
        $body .= "and upper-case letters as indicated.\n\n";
        $body .= "If you have any questions or need additional help, feel free to e-mail us at ZombieThoughts@MontanaRep.com.\n";
        $body .= "You can also contact Teresa Waldorf at 406-243-2854 or Teresa.Waldorf@umontana.edu if you have questions.\n\n";
        $body .= "Michael Legg\n";
        $body .= "Artistic Director\n";
        $body .= "Montana Repertory Theatre";

        return $body;
    }  
    
    function institution_code_email_subject(){
        return "Montana Repertory Theatre - Zombie Thoughts Access Code";
    }

?>