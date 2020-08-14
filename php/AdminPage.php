<?php //if(!isset($_SESSION['username']) && !isset($_SESSION['email'])){
       // header('location: ../index.php');

//}?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">

        <?php
            if (session_status() == PHP_SESSION_NONE) {
                header_remove();
                session_start();
            }
        ?>
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
    include_once('FormCheck.php');
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['email']);
        unset($_SESSION['username']);
        unset($_SESSION['first_name']);
        unset($_SESSION['last_name']);
        header_remove();
        header("location: ../index.php");
        } 
    ?>

        <div id="progressbar"></div>
        <div id="scrollPath"></div>

        <nav class="navbar">
            <ul class="nav_links">
                <li>
                    <a href="../index.php">home</a>
                </li>
            </ul>
            <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
            </div>
        </nav>
        <br><br><br><br><br>
        <?php //if (strcmp($_SESSION['privilege'], "high") === 0){ ?>

            <button>Create New User</button>
            <br>
            <button>Delete User</button>
            <br>

        <?php //} ?>
        <?php include("LinkForm.php"); ?>

        <button type="button" class='btn btn-primary' data-toggle="modal" data-target="#LinkForm">Generate Access Link</button>

        

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

            $('#select_type').on('change', function() {
                $('#LinkFormElement').empty();
                
                // Generate code and add to form 
                code = generateAccessCode(this.value);
                $( "<input name='generate_code' value='" + code + "' hidden>" ).appendTo( "#LinkFormElement" );

                if(this.value === "zti"){
                    $( "<label for='first_name'>Individual's First Name: </label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='first_name' placeholder='Enter First Name...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='last_name'>Individual's Last Name: </label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='last_name' placeholder='Enter Last Name...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='email'>Individual's Email: </label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='email' type='email' placeholder='Enter Email...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='phone'>Individual's Phone Number: </label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='phone' type='tel' placeholder='Enter Last Name...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='address'>Individual's Address: </label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='address' placeholder='Enter Address...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='apt_num'>Individual's Apartment Number (if applicable): </label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='apt_num' placeholder='Enter Apartment Number...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='city'>Individual's City: </label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='city' placeholder='Enter City...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='state'>Individual's State: </label>" ).appendTo( "#LinkFormElement" );
                    $( "<select name='state'><option value='Alabama'>Alabama</option><option value='Alaska'>Alaska</option><option value='Arizona'>Arizona</option><option value='Arkansas'>Arkansas</option><option value='California'>California</option><option value='Colorado'>Colorado</option><option value='Connecticut'>Connecticut</option><option value='Delaware'>Delaware</option><option value='Florida'>Florida</option><option value='Georgia'>Georgia</option><option value='Hawaii'>Hawaii</option><option value='Idaho'>Idaho</option><option value='Illinois'>Illinois</option><option value='Indiana'>Indiana</option><option value='Iowa'>Iowa</option><option value='Kansas'>Kansas</option><option value='Kentucky'>Kentucky</option><option value='Louisiana'>Louisiana</option><option value='Maine'>Maine</option><option value='Maryland'>Maryland</option><option value='Massachusetts'>Massachusetts</option><option value='Michigan'>Michigan</option><option value='Minnesota'>Minnesota</option><option value='Mississippi'>Mississippi</option><option value='Missouri'>Missouri</option><option value='Montana' selected>Montana</option><option value='Nebraska'>Nebraska</option><option value='Nevada'>Nevada</option><option value='New Hampshire'>New Hampshire</option><option value='New Jersey'>New Jersey</option><option value='New Mexico'>New Mexico</option><option value='New York'>New York</option><option value='North Carolina'>North Carolina</option><option value='North Dakota'>North Dakota</option><option value='Ohio'>Ohio</option><option value='Oklahoma'>Oklahoma</option><option value='Oregon'>Oregon</option><option value='Pennsylvania'>Pennsylvania</option><option value='Rhode Island'>Rhode Island</option><option value='South Carolina'>South Carolina</option><option value='South Dakota'>South Dakota</option><option value='Tennessee'>Tennessee</option><option value='Texas'>Texas</option><option value='Utah'>Utah</option><option value='Vermont'>Vermont</option><option value='Virginia'>Virginia</option><option value='Washington'>Washington</option><option value='West Virginia'>West Virginia</option><option value='Wisconsin'>Wisconsin</option><option value='Wyoming'>Wyoming</option></select><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='zipcode'>Individual's Zipcode: </label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='zipcode' placeholder='Enter Zipcode...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='end_date'>Expiration Date: </label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='end_date' type='date'><br>" ).appendTo( "#LinkFormElement" );

                    date = new Date();
                    time = date.getHours() + ':' + date.getMinutes();
                    $( "<input name='end_time' type='time' value='" + time + "' hidden><br>" ).appendTo( "#LinkFormElement" );


                }
                else if(this.value === "ztI"){
                    $( "<h5>Contact's Information:</h5>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='contact_first_name'>Contact's First Name:&nbsp;</label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='contact_first_name' placeholder='Enter First Name...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='contact_last_name'>Contact's Last Name:&nbsp;</label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='contact_last_name' placeholder='Enter Last Name...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='contact_email'>Contact's Email:&nbsp;</label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='contact_email' type='email' placeholder='Enter Email...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='contact_phone'>Contact's Phone Number:&nbsp;</label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='contact_phone' type='tel' placeholder='Enter Last Name...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='institution_name'>Institution's Name:&nbsp;</label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='institution_name' placeholder='Enter Name...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='mailing_address'>Institution's Mailing Address:&nbsp;</label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='mailing_address' placeholder='Enter Address...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='institution_city'>Institution's City:&nbsp;</label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='institution_city' placeholder='Enter City...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='institution_state'>Institution's State:&nbsp;</label>" ).appendTo( "#LinkFormElement" );
                    $( "<select name='institution_state'><option value='Alabama'>Alabama</option><option value='Alaska'>Alaska</option><option value='Arizona'>Arizona</option><option value='Arkansas'>Arkansas</option><option value='California'>California</option><option value='Colorado'>Colorado</option><option value='Connecticut'>Connecticut</option><option value='Delaware'>Delaware</option><option value='Florida'>Florida</option><option value='Georgia'>Georgia</option><option value='Hawaii'>Hawaii</option><option value='Idaho'>Idaho</option><option value='Illinois'>Illinois</option><option value='Indiana'>Indiana</option><option value='Iowa'>Iowa</option><option value='Kansas'>Kansas</option><option value='Kentucky'>Kentucky</option><option value='Louisiana'>Louisiana</option><option value='Maine'>Maine</option><option value='Maryland'>Maryland</option><option value='Massachusetts'>Massachusetts</option><option value='Michigan'>Michigan</option><option value='Minnesota'>Minnesota</option><option value='Mississippi'>Mississippi</option><option value='Missouri'>Missouri</option><option value='Montana' selected>Montana</option><option value='Nebraska'>Nebraska</option><option value='Nevada'>Nevada</option><option value='New Hampshire'>New Hampshire</option><option value='New Jersey'>New Jersey</option><option value='New Mexico'>New Mexico</option><option value='New York'>New York</option><option value='North Carolina'>North Carolina</option><option value='North Dakota'>North Dakota</option><option value='Ohio'>Ohio</option><option value='Oklahoma'>Oklahoma</option><option value='Oregon'>Oregon</option><option value='Pennsylvania'>Pennsylvania</option><option value='Rhode Island'>Rhode Island</option><option value='South Carolina'>South Carolina</option><option value='South Dakota'>South Dakota</option><option value='Tennessee'>Tennessee</option><option value='Texas'>Texas</option><option value='Utah'>Utah</option><option value='Vermont'>Vermont</option><option value='Virginia'>Virginia</option><option value='Washington'>Washington</option><option value='West Virginia'>West Virginia</option><option value='Wisconsin'>Wisconsin</option><option value='Wyoming'>Wyoming</option></select><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='institution_zipcode'>Institution's Zipcode:&nbsp;</label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='institution_zipcode' placeholder='Enter Zipcode...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='institution_county'>Institution's County:&nbsp;</label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='institution_county' placeholder='Enter County...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='end_date'>Expiration Date:&nbsp;</label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='end_date' type='date'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='counselor_first_name'>Counselor First Name:&nbsp;</label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='counselor_first_name' placeholder='Enter First Name...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='counselor_last_name'>Counselor Last Name:&nbsp;</label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='counselor_last_name' placeholder='Enter Last Name...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='counselor_email'>Counselor Email:&nbsp;</label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='counselor_email' placeholder='Enter Email...' type='email' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='counselor_phone'>Counselor Phone Number:&nbsp;</label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='counselor_phone' placeholder='Enter Phone Number...' type='tel' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='counselor_office'>Counselor Office Number:&nbsp;</label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='counselor_office' placeholder='Enter Office Number...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='counselor_bldg'>Counselor Building:&nbsp;</label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='counselor_bldg' placeholder='Enter Building...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='student_grade'>Students\' Grade Level:&nbsp;</label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='student_grade' placeholder='Enter Grade...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='accesses'>Students\' Total Number of code uses:&nbsp;</label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='accesses' placeholder='Enter total...' type='number' min='1' size='20'><br>" ).appendTo( "#LinkFormElement" );
                }

                else if(this.value === "ztp"){
                    $( "<label for='first_name'>Individual's First Name: </label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='first_name' placeholder='Enter First Name...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='last_name'>Individual's Last Name: </label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='last_name' placeholder='Enter Last Name...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='email'>Individual's Email: </label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='email' type='email' placeholder='Enter Email...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    $( "<label for='phone'>Individual's Phone Number: </label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='phone' type='tel' placeholder='Enter Last Name...' size='20'><br>" ).appendTo( "#LinkFormElement" );

                    
                    $( "<label for='end_date'>Expiration Date: </label>" ).appendTo( "#LinkFormElement" );
                    $( "<input name='end_date' type='date'><br>" ).appendTo( "#LinkFormElement" );

                    date = new Date();
                    time = date.getHours() + ':' + date.getMinutes();
                    $( "<input name='end_time' type='time' value='" + time + "' hidden><br>" ).appendTo( "#LinkFormElement" );
                }

                $( "<button type='submit' name='submitAccessLink' class='btn btn-primary p-2'>Generate Access Code and Send Email</button>" ).appendTo( "#LinkFormElement" );
                
            });
        </script>
    
    </body>
</html>