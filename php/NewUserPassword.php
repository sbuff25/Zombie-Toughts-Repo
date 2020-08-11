<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zombie Thoughts Project: Admin Login</title>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script defer src="../game.js"></script>
        <link rel="stylesheet" href="../css.css">
        <link rel="stylesheet" href="../menu.css">
        
        <link rel="stylesheet" href="../scroll_bar.css">
        <link rel="stylesheet" href="../text_animiations.css">
        <?php include('FormCheck.php') ?>
        
    

    </head>
    <body>
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

        <div>
            <br><br><br><br>  <!--Delete this line when Spencer begins to style -->
            <h1>Create Account</h1>

            <?php
                include_once('./FormCheck.php');
                if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"]) && ($_GET["action"]=="setpassword") && !isset($_POST["action"])){
                    $key = $_GET["key"];
                    $email = $_GET["email"];
                    $cur_date = date("Y-m-d H:i:s");
                    $sql = "SELECT * FROM TempUser WHERE tempkey='$key' and email='$email'";
                    $query = mysqli_query($database, $sql);
                    $row = mysqli_num_rows($query);
                    if ($row==""){
                        $error .= '<h2>Invalid Link</h2>
                            <p>The link is invalid/expired. Either you did not copy the correct link
                            from the email, or you have already used the key in which case it is 
                            deactivated.</p>
                            <p>Please talk to your administrator, and have him create your account again.</p>';
                    }
                    else {
                        $row = mysqli_fetch_assoc($query);
                        $exp_date = $row['exp_date'];
                        $exp_date = strtotime($exp_date);
                        $exp_date = date('Y-m-d H:i:s', $exp_date);
                        if ($exp_date >= $cur_date){
                        ?>
                            <form method="post" action="NewUserPassword.php">
                                <input type="hidden" name="action" value="setpassword" />
                                <input type="hidden" name="first_name" value="<?php echo $row['first_name'];?>" />
                                <input type="hidden" name="last_name" value="<?php echo $row['last_name'];?>" />
                                <input type="hidden" name="privilege_level" value="<?php echo $row['privilege_level'];?>" />
                                <br>
                                <label>Enter New Username:</label><br />
                                <input name="username" maxlength="15" required />
                                <br>
                                <label>Enter New Password:</label><br />
                                <input type="password" name="password" maxlength="15" required />
                                <br>
                                <label>Re-Enter New Password:</label><br />
                                <input type="password" name="confirm_password" maxlength="15" required/>
                                <br>
                                <input type="hidden" name="email" value="<?php echo $email;?>"/>
                                <input type="submit" value="Create Account"  name='set_new_user'/>
                            </form>
                        <?php
                        }
                        else{
                            $sql = "DELETE FROM TempUser WHERE tempkey='$key' and email='$email'";
                            $query = mysqli_query($database, $sql);
                            $error .= "<h2>Link Expired</h2><br>";
                        }
                    }
                }
                else{
                    $error .= "There was an issue displaying user information";
                }
                echo $error;

            ?>
            <a href="javascript:history.back()" class='button'>Back</a>
        </div>
        

        <!--Footer-->
        <footer class="center bg-dark">
            <p>Missoula Repertory Theatre &copy; 2020</p>
        </footer>

    
    </body>
</html>