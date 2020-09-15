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
    <?php if (isset($_SESSION['privilege']) && strtolower($_SESSION['privilege']) === "high"){ ?>


        <button type="button" class='btn btn-primary' data-toggle="modal" data-target="#NewUserForm">Create New User</button>
        <br>
        <button type="button" class='btn btn-primary' data-toggle="modal" data-target="#DeleteUserForm">Delete User</button>
        <br>

        <?php include("NewUserForm.php"); ?>
        <?php include("DeleteUserForm.php"); ?>
    <?php } ?>
        <?php include("LinkForm.php"); ?>

        

        <button type="button" class='btn btn-primary' data-toggle="modal" data-target="#LinkForm">Generate Access Link</button>
        <button type="button" class='btn btn-primary disabled'>View Reports</button>
        <a role="button" href='RequestsPage' class='btn btn-primary'>View Zombie Thought Requests</a>

        

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