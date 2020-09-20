<div class="modal" tabindex="-1" role="dialog" id="MTIndividualForm">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-dark">
            <h5 class="modal-title text-light">Request Access for Zombie Thoughts</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body bg-muted text-dark">
            <form action="index#game" method='POST' class="form-container">

                <div id="accesscodearea">
                </div>

                <label for='first_name'>First Name:&nbsp;</label>
                <input name='first_name' placeholder='Enter First Name...' size='20' required><br>

                <label for='last_name'>Last Name:&nbsp;</label>
                <input name='last_name' placeholder='Enter Last Name...' size='20' required><br>

                <label for='email'>Email:&nbsp;</label>
                <input name='email' type='email' placeholder='Enter Email...' size='20' required><br>

                <label for='phone'>Phone Number (Format: XXX-XXX-XXXX ):&nbsp;</label>
                <input name='phone' type='tel' placeholder='Enter Phone Number...' size='20' pattern='[0-9]{3}-[0-9]{3}-[0-9]{4}' required><br>

                <label for='address'>Address:&nbsp;</label>
                <input name='address' placeholder='Enter Address...' size='20' required><br>

                <label for='apt_num'>Apartment Number (If applicable):&nbsp;</label>
                <input name='apt_num' placeholder='Enter Address...' size='20' required><br>

                <label for='city'>City:&nbsp;</label>
                <input name='city' placeholder='Enter City...' size='20' required><br>

                <label for='state'>State: <br>Montana</label>
                <input name='state' value='Montana' hidden><br>
                
                <label for='zipcode'>Zipcode:&nbsp;</label>
                <input name='zipcode' placeholder='Enter Zipcode...' size='20'><br>

                <button type='button' id='generateCode' value='zti' class='btn'>Generate Access Code</button>

                <div id='codeDiv'></div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>


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