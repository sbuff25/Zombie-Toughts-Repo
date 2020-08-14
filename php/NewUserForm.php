<div class="modal" tabindex="-1" role="dialog" id="NewUserForm">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-light">Create New Administrator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-muted text-dark">

                <form action='CreateUser.php' method='POST'>
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
                    </div>
                    <?php include_once('errors.php'); ?>

                    <br>
                    <button type='submit' name='submitNewUser'>Create New Admin</button>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
