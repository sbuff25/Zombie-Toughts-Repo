<?php
ini_set("include_path", '/home3/yqepxzmy/php:' . ini_get("include_path") );
require_once "Mail.php";

    class SendEmail{

        function __construct($recipient_email, $subject, $body){
            $ini_file = parse_ini_file('/home3/yqepxzmy/email.ini');
            $sender = $ini_file['e'];
            $host = $ini_file['h'];
            $headers = array ('From' => $sender,
                'To' => $recipient,
                'Subject' => $subject);
            $smtp = Mail::factory('smtp',
                array ('host' => $host,
                'auth' => true,
                'username' => $ini_file['u'],
                'password' => $ini_file['p']));
            $mail = $smtp->send($recipient_email, $headers, $body);
            if (PEAR::isError($mail)) {
                echo("<p>" . $mail->getMessage() . "</p>");
            } else {
                echo("<p>Message successfully sent!</p>");
            }
        }
    }

?>

