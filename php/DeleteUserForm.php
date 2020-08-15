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

                    if($result && mysqli_num_rows($result) >= 1){
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
                                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                            $user_email = $row['email'];
                                            $user_first = $row['first_name'];
                                            $user_last = $row['last_name'];
                                            $user_privilege = $row['privilege_level'];
                                            echo "<tr>";
                                                echo "<td>$user_last</td>";
                                                echo "<td>$user_first</td>";
                                                echo "<td>$user_email</td>";
                                                echo "<td>$user_privilege</td>";
                                                echo "<td id='button_row'><button class='btn btn-warning btn-sm' type='button' id='delete_button' value='{$user_email}'>Delete</button></td>";
                                            echo "</tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </form>
                <?php
                    }
                    else{
                        echo "<h5>There are no other users</h5>";
                    }
                ?>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script>
    $('#delete_button').on('click', function() {
        var email = this.value;
        $('#button_row').empty();
        $( "<button class='btn btn-danger btn-sm' type='submit' name='deleteUser' value='" + email + "'>Confirm</button>" ).appendTo( "#button_row" );
    });
</script>
