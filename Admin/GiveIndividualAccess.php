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
            <div class="panel-heading"><h1>Institution Access</h1></div>
            <div class='panel-body center bg-light'>
            <form action="AdminPage" method='POST' class="form-container">
            <h5><b>Individual's Information:</b></h5><br>

                <label for='first_name'>Individual's First Name: </label>
                <input name='first_name' placeholder='Enter First Name...' size='20'><br>

                <label for='last_name'>Individual's Last Name: </label>
                <input name='last_name' placeholder='Enter Last Name...' size='20'><br>

                <label for='email'>Individual's Email: </label>
                <input name='email' type='email' placeholder='Enter Email...' size='20'><br>

                <label for='phone'>Individual's Phone Number: </label>
                <input name='phone' type='tel' placeholder='Enter Last Name...' size='20'><br>

                <label for='address'>Individual's Address: </label>
                <input name='address' placeholder='Enter Address...' size='20'><br>

                <label for='apt_num'>Individual's Apartment Number (if applicable): </label>
                <input name='apt_num' placeholder='Enter Apartment Number...' size='20'><br>

                <label for='city'>Individual's City: </label>
                <input name='city' placeholder='Enter City...' size='20'><br>

                <label for='state'>Individual's State: </label>
                <select name='state'><option value='Alabama'>Alabama</option><option value='Alaska'>Alaska</option><option value='Arizona'>Arizona</option><option value='Arkansas'>Arkansas</option><option value='California'>California</option><option value='Colorado'>Colorado</option><option value='Connecticut'>Connecticut</option><option value='Delaware'>Delaware</option><option value='Florida'>Florida</option><option value='Georgia'>Georgia</option><option value='Hawaii'>Hawaii</option><option value='Idaho'>Idaho</option><option value='Illinois'>Illinois</option><option value='Indiana'>Indiana</option><option value='Iowa'>Iowa</option><option value='Kansas'>Kansas</option><option value='Kentucky'>Kentucky</option><option value='Louisiana'>Louisiana</option><option value='Maine'>Maine</option><option value='Maryland'>Maryland</option><option value='Massachusetts'>Massachusetts</option><option value='Michigan'>Michigan</option><option value='Minnesota'>Minnesota</option><option value='Mississippi'>Mississippi</option><option value='Missouri'>Missouri</option><option value='Montana' selected>Montana</option><option value='Nebraska'>Nebraska</option><option value='Nevada'>Nevada</option><option value='New Hampshire'>New Hampshire</option><option value='New Jersey'>New Jersey</option><option value='New Mexico'>New Mexico</option><option value='New York'>New York</option><option value='North Carolina'>North Carolina</option><option value='North Dakota'>North Dakota</option><option value='Ohio'>Ohio</option><option value='Oklahoma'>Oklahoma</option><option value='Oregon'>Oregon</option><option value='Pennsylvania'>Pennsylvania</option><option value='Rhode Island'>Rhode Island</option><option value='South Carolina'>South Carolina</option><option value='South Dakota'>South Dakota</option><option value='Tennessee'>Tennessee</option><option value='Texas'>Texas</option><option value='Utah'>Utah</option><option value='Vermont'>Vermont</option><option value='Virginia'>Virginia</option><option value='Washington'>Washington</option><option value='West Virginia'>West Virginia</option><option value='Wisconsin'>Wisconsin</option><option value='Wyoming'>Wyoming</option></select><br>

                <label for='zipcode'>Individual's Zipcode: </label>
                <input name='zipcode' placeholder='Enter Zipcode...' size='20'><br>

                <label for='end_date'>Code Expiration Date: </label>
                <input name='end_date' type='date'><br>

                date = new Date();
                time = date.getHours() + ':' + date.getMinutes();
                <input name='end_time' type='time' value='" + time + "' hidden><br>


                <button type='button' id='generateCode' value='ztI'>Generate Access Code</button>

                <div id='codeDiv'></div>

            </form>
        </div>
        </div>

        

        <!--Footer-->
        <footer class="center bg-dark">
            <p>Missoula Repertory Theatre &copy; 2020</p>
        </footer>


        <script>
            $('#generateCode').on('click', function() {
                $('#generateCode').remove();

                code = generateAccessCode(this.value);
                ("<input name='generate_code' value='" + code + "' hidden>" ).appendTo( "#codeDiv" );
                ("<h2>Code Generated</h2>" ).appendTo( "#codeDiv" );
                ("<button class='btn btn-primary' type='submit' name='submitIndAccess'>Submit</button>" ).appendTo( "#codeDiv" );
            });
            

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