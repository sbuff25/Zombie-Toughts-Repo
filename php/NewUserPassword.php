<?php
    include('./FormCheck.php');
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
            if ($expDate >= $cur_date){
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
                    <input type="submit" value="set_new_user" />
                </form>
            <?php
            }
            else{
                $error .= "<h2>Link Expired</h2><br>";
            }
        }
    }

?>