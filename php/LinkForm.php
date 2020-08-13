<div class="form-popup" id="LinkForm">
    <form action="account.php" method='POST' class="form-container">
        <h1>Generate Access Link Form:</h1>

        <label for="access_type"><b>Select Link Type</b></label>
        <select name="access_type" id="select_type"> <!-- onselect="addInputToForm('LinkFormElement')"> -->
            <option value='ztI'>Institution Access Code</option>
            <option value='zti'>Individual Access Code</option>
            <option value='ztp'>Preview Access Code</option>
        </select>
        <br>
        <div id='LinkFormElement'>
        </div>

        <button type="submit" name='submitAccessLink'>Generate Link and Send Email</button>
        <button type="submit" onclick="closeForm('LinkForm')">Close</button>
    </form>
</div>