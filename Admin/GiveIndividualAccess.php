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
            <div class="panel-heading"><h1>Out-of-State Individual Access</h1></div>
            <div class='panel-body center bg-light'>
            <form action="AdminPage" method='POST' class="form-container">

                <label for='first_name'>Individual's First Name: </label>
                <input name='first_name' placeholder='Enter First Name...' size='20' value="<?php echo $_POST['first_name']; ?>"><br>

                <label for='last_name'>Individual's Last Name: </label>
                <input name='last_name' placeholder='Enter Last Name...' size='20' value="<?php echo $_POST['last_name']; ?>"><br>

                <label for='email'>Individual's Email: </label>
                <input name='email' type='email' placeholder='Enter Email...' size='20' value="<?php echo $_POST['email']; ?>"><br>

                <label for='phone'>Individual's Phone Number: </label>
                <input name='phone' type='tel' placeholder='Enter Phone Number...' size='20' value="<?php echo $_POST['phone']; ?>"><br>

                <label for='address'>Individual's Address: </label>
                <input name='address' placeholder='Enter Address...' size='20' value="<?php echo $_POST['address']; ?>"><br>

                <label for='apt_num'>Individual's Apartment Number (if applicable): </label>
                <input name='apt_num' placeholder='Enter Apartment Number...' size='20' value="<?php echo $_POST['apt_num']; ?>"><br>

                <label for='city'>Individual's City: </label>
                <input name='city' placeholder='Enter City...' size='20' value="<?php echo $_POST['city']; ?>"><br>

                <label for='state'>Individual's State: </label>
                <?php $state = $_POST['state']; ?>
                <select name='state'><option value='Alabama' <?php echo($state == 'Alabama' ? ' selected="selected"' : '');?>>Alabama</option><option value='Alaska' <?php echo($state == 'Alaska' ? ' selected="selected"' : '');?>>Alaska</option><option value='Arizona' <?php echo($state == 'Arizona' ? ' selected="selected"' : '');?>>Arizona</option><option value='Arkansas' <?php echo($state == 'Arkansas' ? ' selected="selected"' : '');?>>Arkansas</option><option value='California' <?php echo($state == 'California' ? ' selected="selected"' : '');?>>California</option><option value='Colorado' <?php echo($state == 'Colorado' ? ' selected="selected"' : '');?>>Colorado</option><option value='Connecticut' <?php echo($state == 'Connecticut' ? ' selected="selected"' : '');?>>Connecticut</option><option value='Delaware' <?php echo($state == 'Delaware' ? ' selected="selected"' : '');?>>Delaware</option><option value='District of Columbia' <?php echo($state == 'District of Columbia' ? ' selected="selected"' : '');?>>District of Columbia</option><option value='Florida' <?php echo($state == 'Florida' ? ' selected="selected"' : '');?>>Florida</option><option value='Georgia' <?php echo($state == 'Georgia' ? ' selected="selected"' : '');?>>Georgia</option><option value='Hawaii' <?php echo($state == 'Hawaii' ? ' selected="selected"' : '');?>>Hawaii</option><option value='Idaho' <?php echo($state == 'Idaho' ? ' selected="selected"' : '');?>>Idaho</option><option value='Illinois' <?php echo($state == 'Illinois' ? ' selected="selected"' : '');?>>Illinois</option><option value='Indiana' <?php echo($state == 'Indiana' ? ' selected="selected"' : '');?>>Indiana</option><option value='Iowa' <?php echo($state == 'Iowa' ? ' selected="selected"' : '');?>>Iowa</option><option value='Kansas' <?php echo($state == 'Kansas' ? ' selected="selected"' : '');?>>Kansas</option><option value='Kentucky' <?php echo($state == 'Kentucky' ? ' selected="selected"' : '');?>>Kentucky</option><option value='Louisiana' <?php echo($state == 'Louisiana' ? ' selected="selected"' : '');?>>Louisiana</option><option value='Maine' <?php echo($state == 'Maine' ? ' selected="selected"' : '');?>>Maine</option><option value='Maryland' <?php echo($state == 'Maryland' ? ' selected="selected"' : '');?>>Maryland</option><option value='Massachusetts' <?php echo($state == 'Massachusetts' ? ' selected="selected"' : '');?>>Massachusetts</option><option value='Michigan' <?php echo($state == 'Michigan' ? ' selected="selected"' : '');?>>Michigan</option><option value='Minnesota' <?php echo($state == 'Minnesota' ? ' selected="selected"' : '');?>>Minnesota</option><option value='Mississippi' <?php echo($state == 'Mississippi' ? ' selected="selected"' : '');?>>Mississippi</option><option value='Missouri' <?php echo($state == 'Missouri' ? ' selected="selected"' : '');?>>Missouri</option><option value='Montana' <?php echo($state == 'Montana' ? ' selected="selected"' : '');?>>Montana</option><option value='Nebraska' <?php echo($state == 'Nebraska' ? ' selected="selected"' : '');?>>Nebraska</option><option value='Nevada' <?php echo($state == 'Nevada' ? ' selected="selected"' : '');?>>Nevada</option><option value='New Hampshire' <?php echo($state == 'New Hampshire' ? ' selected="selected"' : '');?>>New Hampshire</option><option value='New Jersey' <?php echo($state == 'New Jersey' ? ' selected="selected"' : '');?>>New Jersey</option><option value='New Mexico' <?php echo($state == 'New Mexico' ? ' selected="selected"' : '');?>>New Mexico</option><option value='New York' <?php echo($state == 'New York' ? ' selected="selected"' : '');?>>New York</option><option value='North Carolina' <?php echo($state == 'North Carolina' ? ' selected="selected"' : '');?>>North Carolina</option><option value='North Dakota' <?php echo($state == 'North Dakota' ? ' selected="selected"' : '');?>>North Dakota</option><option value='Ohio' <?php echo($state == 'Ohio' ? ' selected="selected"' : '');?>>Ohio</option><option value='Oklahoma' <?php echo($state == 'Oklahoma' ? ' selected="selected"' : '');?>>Oklahoma</option><option value='Oregon' <?php echo($state == 'Oregon' ? ' selected="selected"' : '');?>>Oregon</option><option value='Pennsylvania' <?php echo($state == 'Pennsylvania' ? ' selected="selected"' : '');?>>Pennsylvania</option><option value='Rhode Island' <?php echo($state == 'Rhode Island' ? ' selected="selected"' : '');?>>Rhode Island</option><option value='South Carolina' <?php echo($state == 'South Carolina' ? ' selected="selected"' : '');?>>South Carolina</option><option value='South Dakota' <?php echo($state == 'South Dakota' ? ' selected="selected"' : '');?>>South Dakota</option><option value='Tennessee' <?php echo($state == 'Tennessee' ? ' selected="selected"' : '');?>>Tennessee</option><option value='Texas' <?php echo($state == 'Texas' ? ' selected="selected"' : '');?>>Texas</option><option value='Utah' <?php echo($state == 'Utah' ? ' selected="selected"' : '');?>>Utah</option><option value='Vermont' <?php echo($state == 'Vermont' ? ' selected="selected"' : '');?>>Vermont</option><option value='Virginia' <?php echo($state == 'Virginia' ? ' selected="selected"' : '');?>>Virginia</option><option value='Washington' <?php echo($state == 'Washington' ? ' selected="selected"' : '');?>>Washington</option><option value='West Virginia' <?php echo($state == 'West Virginia' ? ' selected="selected"' : '');?>>West Virginia</option><option value='Wisconsin' <?php echo($state == 'Wisconsin' ? ' selected="selected"' : '');?>>Wisconsin</option><option value='Wyoming' <?php echo($state == 'Wyoming' ? ' selected="selected"' : '');?>>Wyoming</option></select>
                <br>

                <label for='zipcode'>Individual's Zipcode: </label>
                <input name='zipcode' placeholder='Enter Zipcode...' size='20'><br>

                <label for='end_date'>Code Expiration Date: </label>
                <input name='end_date' type='date'><br>

                <label for='end_date'>Code Expiration Time: </label>
                <?php echo time(); ?>
                <input name='end_date' type='time' value="<?php echo time(); ?>" ><br>


                <button type='button' id='generateCode' value='zti'>Generate Access Code</button>

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
                $("<input name='generate_code' value='" + code + "' hidden>" ).appendTo( "#codeDiv" );
                $("<h2>Code Generated</h2>" ).appendTo( "#codeDiv" );
                $("<button class='btn btn-primary' type='submit' name='submitIndAccess'>Submit</button>" ).appendTo( "#codeDiv" );
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