<div class="modal" tabindex="-1" role="dialog" id="DeleteUserForm">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-light">Delete Administrator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-muted text-dark">
                <?php 
                    $email = $_SESSION['email'];
                    $sql="SELECT first_name, last_name, email, privilege_level FROM AdminUser WHERE NOT email='$email'";
                    $result = mysqli_query($database, $sql);

                    if($result){
                        $row = mysqli_fetch_assoc($result);
                ?>
                        <form action='AdminPage.php' method='POST'>
                            <table class='table table-dark table-hover'>
                                <thead>
                                    <tr>
                                        <th>Last Name</th>
                                        <th>First Name</th>
                                        <th>Email</th>
                                        <th>Privilege Level</th>
                                        <th>Delete?</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while($row){
                                            $user_email = $row['email'];
                                            echo "<tr>";
                                                echo "<td>$row['last_name']</td>";
                                                echo "<td>$row['first_name']</td>";
                                                echo "<td>$user_email</td>";
                                                echo "<td>$row['privilege_level']</td>";
                                                echo "<td><button type='button' id='delete_button' value='$user_email'>Delete</button></td>";
                                            echo "</tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </form>
                <?php
                    }
                    else{
                        echo "<h5>There are no new users</h5>";
                    }
                ?>

                <!-- <form action='DeleteUser.php' method='POST'>
                    <div>
                        <label for='email'>Email:</label>
                        <input name='email' type='email' placeholder="<?php echo "Enter New User's Email..."?>" required>
                    </div>
                    <br>
                    <div>
                        <label for='first_name'>First Name:</label>
                        <input name='first_name' placeholder="<?php echo "Enter New User's First Name..."?>" required>
                    </div>
                    <br>
                    <div>
                        <label for='last_name'>Last Name:</label>
                        <input name='last_name' placeholder="<?php echo "Enter New User's Last Name..."?>" required>
                    </div>
                    <label for='privilege'>Select Privilege Level:</label>
                    <select name='privilege'>
                        <option value='low' default>Low</option>
                        <option value='High' default>High</option>
                    </select>
                    <p>High privileged admin users can create and delete users. Low level admin users cannot.</p>
                    <br>
                    <div>
                        <p>An email will be sent to the user to set their password. If the user does not set their password within 7 days, the user will need to be created again.</p>
                    </div> -->
                    <?php //include_once('errors.php'); ?>

                    <!-- <br>
                    <button type='submit' name='submitNewUser'>Create New Admin</button>
                </form> -->
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
