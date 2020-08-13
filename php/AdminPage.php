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
        <script defer src="../game.js"></script>

        <link rel="stylesheet" href="../css.css">
        <link rel="stylesheet" href="../menu.css">
        
        <link rel="stylesheet" href="../scroll_bar.css">
        <link rel="stylesheet" href="../text_animiations.css">


    </head>
    <body>

    <?php if (isset($_GET['logout'])) {
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
        <header class="showcase" id="home">
            <section id="home">
                <img src="./images/Title_Animation/Title_Animation.png" alt="" id="title_animi">
                <img src="./images/Title_Animation/Author_Animation.png" alt="" id="author_animi">
                <img src="./images/Title_Animation/MT_Rep_Logo.png" alt="" id="mt_rep_logo">
            </section>
        
        </header>
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
                    index = rand(0, strlen(characters) - 1); 
                    randomString += characters[index]; 
                } 
                access_code = '';
                if (strcmp(access_code_type, "individual")){
                    access_code = 'zti' + randomString;
                }
                elseif (strcmp(access_code_type, "institution")){
                    access_code = 'ztI' + randomString;
                }
                elseif(strcmp($access_code_type, "preview")){
                    access_code = 'ztp' + randomString;
                }
                return access_code;
            }
            const code = generateAccessCode();

            $('#select_type').on('change', function() {
                $('#LinkFormElement').empty();
                if(this.value === "zti"){
                    // $( "<input name='generate_code' value='" + code + "'>" ).appendTo( "#LinkFormElement" );
                    $( "<label for='first_name'>Individual's First Name:</label>" ).appendTo( "#LinkFormElement" );
                    $( "<label for='last_name'>Individual's Last Name:</label>" ).appendTo( "#LinkFormElement" );
                    $( "<label for='email'>Individual's Email:</label>" ).appendTo( "#LinkFormElement" );
                    $( "<label for='phone'>Individual's Phone Number:</label>" ).appendTo( "#LinkFormElement" );
                    $( "<label for='address'>Individual's Address:</label>" ).appendTo( "#LinkFormElement" );
                    $( "<label for='apt_num'>Individual's Apartment Number (if applicable):</label>" ).appendTo( "#LinkFormElement" );
                    $( "<label for='city'>Individual's City:</label>" ).appendTo( "#LinkFormElement" );
                    $( "<label for='state'>Individual's State:</label>" ).appendTo( "#LinkFormElement" );
                    $( "<label for='zipcode'>Individual's Zipcode:</label>" ).appendTo( "#LinkFormElement" );
                    $( "<label for='end_date'>Expiration Date:</label>" ).appendTo( "#LinkFormElement" );
                }
                if(this.value === "ztI"){
                    $( "<p>Test</p>" ).appendTo( "#LinkFormElement" );
                }
                if(this.value === "ztp"){
                    $( "<p>Test</p>" ).appendTo( "#LinkFormElement" );
                }
                
            });
        </script>
    
    </body>
</html>