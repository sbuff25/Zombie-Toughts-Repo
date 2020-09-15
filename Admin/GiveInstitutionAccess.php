<?php session_start(); ?>
<?php if(!isset($_SESSION['username']) && !isset($_SESSION['email'])){
        header('location: ./LoginPage');
        exit;

}
include_once('FormCheck.php');
?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zombie Thoughts Project: Admin</title>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="../css.css">
        <link rel="stylesheet" href="../menu.css">
        
        <link rel="stylesheet" href="../scroll_bar.css">
        <link rel="stylesheet" href="../text_animiations.css">


    </head>
    <body>

        <?php
        include_once('Navbar.php');
        ?>
            <br><br><br><br><br>

        <?php include_once('errors.php'); ?>

        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success">
            <p>
            <?php 
                echo $_SESSION['success'];
                unset($_SESSION['success']);
            ?>
            </p>
            </div>
        <?php endif ?>

        <div class='panel panel-default'>
            <div class="panel-heading">Institution Access</div>
            <div class='panel-body center bg-light'>
            <form action="AdminPage" method='POST' class="form-container">
                <h5><b>Contact's Information:</b></h5><br>

                <label for='contact_first_name'>Contact's First Name:&nbsp;</label>
                <input name='contact_first_name' placeholder='Enter First Name...' size='20' value="<?php echo $_POST['cFirstName']; ?>"><br>

                <label for='contact_last_name'>Contact's Last Name:&nbsp;</label>
                <input name='contact_last_name' placeholder='Enter Last Name...' size='20' value="<?php echo $_POST['cLastName']; ?>"><br>

                <label for='contact_email'>Contact's Email:&nbsp;</label>
                <input name='contact_email' type='email' placeholder='Enter Email...' size='20' value="<?php echo $_POST['cEmail']; ?>"><br>

                <label for='contact_phone'>Contact's Phone Number (Format: XXX-XXX-XXXX ):&nbsp;</label>
                <input name='contact_phone' type='tel' placeholder='Enter Phone Number...' size='20' value="<?php echo $_POST['cPhone']; ?>" pattern='[0-9]{3}-[0-9]{3}-[0-9]{4}'><br>

                <label for='contact_ext'>Contact's Extension (if applicable):&nbsp;</label>
                <input name='contact_ext' type='tel' placeholder='Enter Extension Number...' size='20' value="<?php echo $_POST['cExt']; ?>"><br><br>

                <h5><b>Institution's Information:</b></h5><br>

                <label for='institution_name'>Institution's Name:&nbsp;</label>
                <input name='institution_name' placeholder='Enter Name...' size='20' value="<?php echo $_POST['iName']; ?>"><br>

                <label for='mailing_address'>Institution's Mailing Address:&nbsp;</label>
                <input name='mailing_address' placeholder='Enter Address...' size='20' value="<?php echo $_POST['iAddress']; ?>"><br>

                <label for='institution_city'>Institution's City:&nbsp;</label>
                <input name='institution_city' placeholder='Enter City...' size='20' value="<?php echo $_POST['iCity']; ?>"><br>

                <label for='institution_state'>Institution's State:&nbsp;</label>
                <select name='institution_state' name='StateSelect'><option value='Alabama'>Alabama</option><option value='Alaska'>Alaska</option><option value='Arizona'>Arizona</option><option value='Arkansas'>Arkansas</option><option value='California'>California</option><option value='Colorado'>Colorado</option><option value='Connecticut'>Connecticut</option><option value='Delaware'>Delaware</option><option value='Florida'>Florida</option><option value='Georgia'>Georgia</option><option value='Hawaii'>Hawaii</option><option value='Idaho'>Idaho</option><option value='Illinois'>Illinois</option><option value='Indiana'>Indiana</option><option value='Iowa'>Iowa</option><option value='Kansas'>Kansas</option><option value='Kentucky'>Kentucky</option><option value='Louisiana'>Louisiana</option><option value='Maine'>Maine</option><option value='Maryland'>Maryland</option><option value='Massachusetts'>Massachusetts</option><option value='Michigan'>Michigan</option><option value='Minnesota'>Minnesota</option><option value='Mississippi'>Mississippi</option><option value='Missouri'>Missouri</option><option value='Montana' selected>Montana</option><option value='Nebraska'>Nebraska</option><option value='Nevada'>Nevada</option><option value='New Hampshire'>New Hampshire</option><option value='New Jersey'>New Jersey</option><option value='New Mexico'>New Mexico</option><option value='New York'>New York</option><option value='North Carolina'>North Carolina</option><option value='North Dakota'>North Dakota</option><option value='Ohio'>Ohio</option><option value='Oklahoma'>Oklahoma</option><option value='Oregon'>Oregon</option><option value='Pennsylvania'>Pennsylvania</option><option value='Rhode Island'>Rhode Island</option><option value='South Carolina'>South Carolina</option><option value='South Dakota'>South Dakota</option><option value='Tennessee'>Tennessee</option><option value='Texas'>Texas</option><option value='Utah'>Utah</option><option value='Vermont'>Vermont</option><option value='Virginia'>Virginia</option><option value='Washington'>Washington</option><option value='West Virginia'>West Virginia</option><option value='Wisconsin'>Wisconsin</option><option value='Wyoming'>Wyoming</option></select><br>
                <!-- <script>
                    $(function() {
                        
                        $("#MySelect").val(<?php //echo $_POST['iState']; ?>)
                    });
                </script> -->
                <label for='institution_zipcode'>Institution's Zipcode:&nbsp;</label>
                <input name='institution_zipcode' placeholder='Enter Zipcode...' size='20' value="<?php echo $_POST['iZip']; ?>"><br>

                <label for='institution_county'>Institution's County:&nbsp;</label>
                <input name='institution_county' placeholder='Enter County...' size='20' value="<?php echo $_POST['iCounty']; ?>"><br><br>

                <h5><b>Counselor's Information:</b></h5><br>

                <label for='counselor_first_name'>Counselor First Name:&nbsp;</label>
                <input name='counselor_first_name' placeholder='Enter First Name...' size='20'><br>

                <label for='counselor_last_name'>Counselor Last Name:&nbsp;</label>
                <input name='counselor_last_name' placeholder='Enter Last Name...' size='20'><br>

                <label for='counselor_email'>Counselor Email:&nbsp;</label>
                <input name='counselor_email' placeholder='Enter Email...' type='email' size='20'><br>

                <label for='counselor_phone'>Counselor Phone Number (Format: XXX-XXX-XXXX ):&nbsp;</label>
                <input name='counselor_phone' placeholder='Enter Phone Number...' type='tel' size='20' pattern='[0-9]{3}-[0-9]{3}-[0-9]{4}'><br>

                <label for='counselor_office'>Counselor Office Number:&nbsp;</label>
                <input name='counselor_office' placeholder='Enter Office Number...' size='20'><br>

                <label for='counselor_bldg'>Counselor Building:&nbsp;</label>
                <input name='counselor_bldg' placeholder='Enter Building...' size='20'><br><br>

                <h5><b>Other Information:</b></h5><br>

                <label for='student_grade'>Students' Grade Level:&nbsp;</label>
                <select name='student_grade' multiple>
                    <option value='K'>Kindergarten</option>
                    <option value='1'>1st</option>
                    <option value='2'>2nd</option>
                    <option value='3'>3rd</option>
                    <option value='4'>4th</option>
                    <option value='5'>5th</option>
                    <option value='6'>6th</option>
                    <option value='7'>7th</option>
                    <option value='8'>8th</option>
                    <option value='9'>9th</option>
                    <option value='10'>10th</option>
                    <option value='11'>11th</option>
                    <option value='12'>12th</option>
                </select><br>

                <label for='accesses'>Number of students/access codes needed:&nbsp;</label>
                <input name='accesses' placeholder='Enter total...' type='number' min='1' size='20'><br>

            </form>
        </div>
        </div>

        

        <!--Footer-->
        <footer class="center bg-dark">
            <p>Missoula Repertory Theatre &copy; 2020</p>
        </footer>


        <script>

            function generateAccessCode(access_code_type){
                characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                randomString = '';
                for (i = 0; i < 14; i++) { 
                    index = Math.floor(Math.random() * characters.length);
                    randomString += characters[index]; 
                } 
                access_code = '';
                if (access_code_type === "zti"){
                    access_code = 'zti' + randomString;
                }
                else if (access_code_type === "ztI"){
                    access_code = 'ztI' + randomString;
                }
                else if(access_code_type === "ztp"){
                    access_code = 'ztp' + randomString;
                }
                return access_code;
            }
        </script>
    
    </body>
</html>