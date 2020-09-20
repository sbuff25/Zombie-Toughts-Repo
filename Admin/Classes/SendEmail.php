<?php
ini_set("include_path", '/home3/yqepxzmy/php:' . ini_get("include_path") );
require_once "Mail.php";

    class SendEmail{

        function __construct($recipient_email, $subject, $body, $errors, $success_msg, $error_msg){
            $ini_file = parse_ini_file('/home3/yqepxzmy/email.ini');
            $sender = $ini_file['e'];
            $host = $ini_file['h'];
            $headers = array (
                'From' => $sender,
                'To' => $recipient,
                'Subject' => $subject);
            $smtp = Mail::factory('smtp',
                array (
                'host' => $host,
                'port' => $ini_file['po'],
                'auth' => true,
                'username' => $ini_file['u'],
                'password' => $ini_file['p']));
            $mail = $smtp->send($recipient_email, $headers, $body);
            if (PEAR::isError($mail)) {
                array_push($errors, $mail->getMessage());
                array_push($errors, $error_msg);
                // echo("<p>" . $mail->getMessage() . "</p>");
            } else {
                $_SESSION['success'] = $success_msg;
                // echo("<p>Message successfully sent!</p>");
            }
        }
    }

?>


