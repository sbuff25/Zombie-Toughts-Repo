<?php 

require_once("./Classes/Database.php");


    $errors = array();
    if (isset($_POST['submitCode'])) {
        $code = mysqli_real_escape_string($database, $_POST['accessCode']);
        if(strlen($code) < 17 || strlen($code) > 17){
            array_push($errors, "Please check your access code to ensure that it was entered correctly. It is case-sensitive.");
        }
        if(substr($code, 0, 3) === "zti" && strlen($code) === 17){
            $stmt = $database->prepare("SELECT * FROM IndividualAccessCode WHERE code=?");
            $stmt->bind_param("s", $code);
            $stmt->execute();

        }
        elseif(substr($code, 0, 3) === "ztI" && strlen($code) === 17){
            $stmt = $database->prepare("SELECT counselor_first_name, counselor_last_name, counselor_email, counselor_phone, counselor_office_number, counselor_bldg, total_number_of_accesses FROM InstitutionAccessCode WHERE code=?");
            $stmt->bind_param("s", $code);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows === 1){
                $row = $result->fetch_assoc();
                if(int($row['total_number_of_accesses']) <= 0){
                    array_push($errors, "The code you have entered has passed its access limit. If you are a student, please contact your teacher.");
                }

            }
            else{

                array_push($errors, "Please check your access code to ensure that it was entered correctly. It is case-sensitive.");

            }

        }
        elseif(substr($code, 0, 3) === "ztp" && strlen($code) === 17){
            $stmt = $database->prepare("SELECT * FROM PreviewAccessCode WHERE code=?");
            $stmt->bind_param("s", $code);
            $stmt->execute();

        }
        else{
            array_push($errors, "Please check your access code to ensure that it was entered correctly. It is case-sensitive.");
        }

        if(count($errors) === 0){
            $_SESSION['code'] = $code;
        }
        
    }
?>