<?php
ini_set("include_path", '/home3/yqepxzmy/php:' . ini_get("include_path") );
require_once "Mail.php";
require_once "Mail/mime.php";

    class SendImageEmail{

        function __construct($recipient_email, $subject, $ptBody, $htmlBody, $errors, $success_msg, $error_msg){
            $ini_file = parse_ini_file('/home3/yqepxzmy/email.ini');
            $sender = $ini_file['e'];
            $host = $ini_file['h'];
            $headers = array (
                'From' => $sender,
                'To' => $recipient,
                'Subject' => $subject);

            // Image Section
            // Image paths
            $mtrep = "mtrep";
            $atg = "ATG";
            $blackfoot = "blackfoot";
            $chc = "chc";
            $dpwf = "dpwf";
            $mac = "mac";
            $mt_cultural_trust = "mt_cultural_trust";
            $mt_pbs = "mt_pbs";
            $projectTomorrow = "projectTomorrow";
            $pshp = "pshp";
            $umt = "umt";
            $shubert = "shubert";
            $uwmc = "uwmc";



            $mime = new Mail_mime("\r\n");

            // Attach images
            $mime->addHTMLImage("../../images/Title_Animation/MT_Rep_Logo.png", "image/gif", "", true, $mtrep);
            $mime->addHTMLImage("../../Sponsor_Logos_PNG/ATG-Cognizant.png", "image/gif", "", true, $atg);
            $mime->addHTMLImage("../../Sponsor_Logos_PNG/blackfoot-givingback.png", "image/gif", "", true, $blackfoot);
            $mime->addHTMLImage("../../Sponsor_Logos_PNG/CHC.png", "image/gif", "", true, $chc);
            $mime->addHTMLImage("../../Sponsor_Logos_PNG/DPWF.png", "image/gif", "", true, $dpwf);
            $mime->addHTMLImage("../../Sponsor_Logos_PNG/MAC.png", "image/gif", "", true, $mac);
            $mime->addHTMLImage("../../Sponsor_Logos_PNG/montana-cultural-trust.png", "image/gif", "", true, $mt_cultural_trust);
            $mime->addHTMLImage("../../Sponsor_Logos_PNG/MontanaPBS.png", "image/gif", "", true, $mt_pbs);
            $mime->addHTMLImage("../../Sponsor_Logos_PNG/ProjectTomorrowMT.png", "image/gif", "", true, $projectTomorrow);
            $mime->addHTMLImage("../../Sponsor_Logos_PNG/PSHP.png", "image/gif", "", true, $pshp);
            $mime->addHTMLImage("../../Sponsor_Logos_PNG/RedLogoCondensed.png", "image/gif", "", true, $umt);
            $mime->addHTMLImage("../../Sponsor_Logos_PNG/shubert-foundation_2.png", "image/gif", "", true, $shubert);
            $mime->addHTMLImage("../../Sponsor_Logos_PNG/UWMC_sm.png", "image/gif", "", true, $uwmc);

            $html_email =   '<html>
                                <body>
                                    <img src="mtrep:'. $mtrep .'" alt="Montana Repertory Theatre">
                                    <img src="atg:'. $atg .'" alt="ATG">
                                    <img src="blackfoot:'. $blackfoot .'" alt="Blackfoot - Giving Back">
                                    <img src="chc:'. $chc .'" alt="Curry Health Center">
                                    <img src="dpwf:'. $dpwf .'" alt="Dennis & Phyllis Washington Foundation">
                                    <img src="mac:'. $mac .'" alt="Montana Arts Council">
                                    <img src="mt_cultural_trust:'. $mt_cultural_trust .'" alt="Montana Cultural Trust">
                                    <img src="mt_pbs:'. $mt_pbs .'" alt="Montana PBS">
                                    <img src="projectTomorrow:'. $projectTomorrow .'" alt="Project Tomorrow Montana">
                                    <img src="pshp:'. $pshp .'" alt="Pacific Source Health Plans">
                                    <img src="umt:'. $umt .'" alt="University of Montana">
                                    <img src="shubert:'. $shubert .'" alt="The Shubert Foundation">
                                    <img src="uwmc:'. $uwmc .'" alt="United Way of Missoula County">';
            $html_email .= $htmlBody;
            $plain_text = $ptBody;

            
            $mime->setTXTBody($plain_text);
            $mime->setHTMLBody($html_email);
            $body = $mime->get();


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