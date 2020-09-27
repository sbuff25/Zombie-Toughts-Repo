<div class="modal" tabindex="-1" role="dialog" id="MTIndividualForm">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-dark">
            <h4 class="modal-title text-light">Request Access for Zombie Thoughts</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body bg-muted text-dark">
            <form action="index#game" method='POST' class="form-container">

                <div id="accesscodearea">
                </div>

                <!-- <label for='first_name'>First Name:&nbsp;</label>
                <input name='first_name' placeholder='Enter First Name...' size='20' required><br>

                <label for='last_name'>Last Name:&nbsp;</label>
                <input name='last_name' placeholder='Enter Last Name...' size='20' required><br> -->

                <label for='email'>Email:&nbsp;</label>
                <input name='email' type='email' placeholder='Enter Email...' size='20' required><br>


                <label for='institution_county'>County:&nbsp;</label><select name='county' required><option selected disabled>Select County...</option><option value='Beaverhead'>Beaverhead</option><option value='Big Horn'>Big Horn</option><option value='Blaine'>Blaine</option><option value='Broadwater'>Broadwater</option><option value='Carbon'>Carbon</option><option value='Carter'>Carter</option><option value='Cascade'>Cascade</option><option value='Chouteau'>Chouteau</option><option value='Custer'>Custer</option><option value='Daniels'>Daniels</option><option value='Dawson'>Dawson</option><option value='Deer Lodge'>Deer Lodge</option><option value='Fallon'>Fallon</option><option value='Fergus'>Fergus</option><option value='Flathead'>Flathead</option><option value='Gallatin'>Gallatin</option><option value='Garfield'>Garfield</option><option value='Glacier'>Glacier</option><option value='Golden Valley'>Golden Valley</option><option value='Granite'>Granite</option><option value='Hill'>Hill</option><option value='Jefferson'>Jefferson</option><option value='Judith Basin'>Judith Basin</option><option value='Lake'>Lake</option><option value='Lewis And Clark'>Lewis And Clark</option><option value='Liberty'>Liberty</option><option value='Lincoln'>Lincoln</option><option value='Madison'>Madison</option><option value='McCone'>McCone</option><option value='Meagher'>Meagher</option><option value='Mineral'>Mineral</option><option value='Missoula'>Missoula</option><option value='Musselshell'>Musselshell</option><option value='Park'>Park</option><option value='Petroleum'>Petroleum</option><option value='Phillips'>Phillips</option><option value='Pondera'>Pondera</option><option value='Powder River'>Powder River</option><option value='Powell'>Powell</option><option value='Prairie'>Prairie</option><option value='Ravalli'>Ravalli</option><option value='Richland'>Richland</option><option value='Roosevelt'>Roosevelt</option><option value='Rosebud'>Rosebud</option><option value='Sanders'>Sanders</option><option value='Sheridan'>Sheridan</option><option value='Silver Bow'>Silver Bow</option><option value='Stillwater'>Stillwater</option><option value='Sweet Grass'>Sweet Grass</option><option value='Teton'>Teton</option><option value='Toole'>Toole</option><option value='Treasure'>Treasure</option><option value='Valley'>Valley</option><option value='Wheatland'>Wheatland</option><option value='Wibaux'>Wibaux</option><option value='Yellowstone'>Yellowstone</option><option value='Yellowstone National Park'>Yellowstone National Park</option></select><br>
                

                <!-- <label for='phone'>Phone Number (Format: XXX-XXX-XXXX ):&nbsp;</label>
                <input name='phone' type='tel' placeholder='Enter Phone Number...' size='20' pattern='[0-9]{3}-[0-9]{3}-[0-9]{4}' required><br>

                <label for='address'>Address:&nbsp;</label>
                <input name='address' placeholder='Enter Address...' size='20' required><br>

                <label for='apt_num'>Apartment Number (If applicable):&nbsp;</label>
                <input name='apt_num' placeholder='Enter Address...' size='20' required><br>

                <label for='city'>City:&nbsp;</label>
                <input name='city' placeholder='Enter City...' size='20' required><br>
                -->

                <label for='state'>State: <br><p>Montana</p></label>
                <input name='state' value='Montana' hidden><br>
                
                <!--
                <label for='zipcode'>Zipcode:&nbsp;</label>
                <input name='zipcode' placeholder='Enter Zipcode...' size='20'><br> -->

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
        $("<h2 class='codeGenText'>Code Generated</h2>" ).appendTo( "#codeDiv" );
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