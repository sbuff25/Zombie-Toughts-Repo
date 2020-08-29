<div class="modal" tabindex="-1" role="dialog" id="MontanaInstitutionForm">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-dark">
            <h5 class="modal-title text-light">Request Access for Zombie Thoughts</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body bg-muted text-dark">
            <form action="index.php" method='POST' class="form-container">
                <h5><b>Contact Information:</b></h5><br>

                <label for='contact_first_name'>Contact's First Name:&nbsp;</label>
                <input name='contact_first_name' placeholder='Enter First Name...' size='20'><br>

                <label for='contact_last_name'>Contact's Last Name:&nbsp;</label>
                <input name='contact_last_name' placeholder='Enter Last Name...' size='20'><br>

                <label for='contact_email'>Contact's Email:&nbsp;</label>
                <input name='contact_email' type='email' placeholder='Enter Email...' size='20'><br>

                <label for='contact_phone'>Contact's Phone Number:&nbsp;</label>
                <input name='contact_phone' type='tel' placeholder='Enter Phone Number...' size='20'><br><br>

                <h5><b>Institution Information:</b></h5><br>

                <label for='institution_name'>Institution's Name:&nbsp;</label>
                <input name='institution_name' placeholder='Enter Name...' size='20'><br>

                <label for='mailing_address'>Institution's Mailing Address:&nbsp;</label>
                <input name='mailing_address' placeholder='Enter Address...' size='20'><br>

                <label for='institution_city'>Institution's City:&nbsp;</label>
                <input name='institution_city' placeholder='Enter City...' size='20'><br>

                <input name='institution_state' value='Montana' hidden>

                <label for='institution_zipcode'>Institution's Zipcode:&nbsp;</label>
                <input name='institution_zipcode' placeholder='Enter Zipcode...' size='20'><br>
              
                <label for='institution_county'>Institution's County:&nbsp;</label><select name='institution_county'><option selected disabled>Select County...</option><option value='Beaverhead'>Beaverhead</option><option value='Big Horn'>Big Horn</option><option value='Blaine'>Blaine</option><option value='Broadwater'>Broadwater</option><option value='Carbon'>Carbon</option><option value='Carter'>Carter</option><option value='Cascade'>Cascade</option><option value='Chouteau'>Chouteau</option><option value='Custer'>Custer</option><option value='Daniels'>Daniels</option><option value='Dawson'>Dawson</option><option value='Deer Lodge'>Deer Lodge</option><option value='Fallon'>Fallon</option><option value='Fergus'>Fergus</option><option value='Flathead'>Flathead</option><option value='Gallatin'>Gallatin</option><option value='Garfield'>Garfield</option><option value='Glacier'>Glacier</option><option value='Golden Valley'>Golden Valley</option><option value='Granite'>Granite</option><option value='Hill'>Hill</option><option value='Jefferson'>Jefferson</option><option value='Judith Basin'>Judith Basin</option><option value='Lake'>Lake</option><option value='Lewis And Clark'>Lewis And Clark</option><option value='Liberty'>Liberty</option><option value='Lincoln'>Lincoln</option><option value='Madison'>Madison</option><option value='McCone'>McCone</option><option value='Meagher'>Meagher</option><option value='Mineral'>Mineral</option><option value='Missoula'>Missoula</option><option value='Musselshell'>Musselshell</option><option value='Park'>Park</option><option value='Petroleum'>Petroleum</option><option value='Phillips'>Phillips</option><option value='Pondera'>Pondera</option><option value='Powder River'>Powder River</option><option value='Powell'>Powell</option><option value='Prairie'>Prairie</option><option value='Ravalli'>Ravalli</option><option value='Richland'>Richland</option><option value='Roosevelt'>Roosevelt</option><option value='Rosebud'>Rosebud</option><option value='Sanders'>Sanders</option><option value='Sheridan'>Sheridan</option><option value='Silver Bow'>Silver Bow</option><option value='Stillwater'>Stillwater</option><option value='Sweet Grass'>Sweet Grass</option><option value='Teton'>Teton</option><option value='Toole'>Toole</option><option value='Treasure'>Treasure</option><option value='Valley'>Valley</option><option value='Wheatland'>Wheatland</option><option value='Wibaux'>Wibaux</option><option value='Yellowstone'>Yellowstone</option><option value='Yellowstone National Park'>Yellowstone National Park</option></select><br>
                
                <button type='submit' name='institutionAccessRequest' class='btn btn-primary'>Submit Request</button>
                
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="OOSForm">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-dark">
            <h5 class="modal-title text-light">Request Access for Zombie Thoughts</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body bg-muted text-dark">
            <form action="index.php" method='POST' class="form-container">
                <label for='ind_or_inst_select'>Please select the option that best describes you:</label>
                <select id='ind_or_inst_select'>
                    <option selected disabled>Select Institution or Individual...</option>
                    <option value='inst'>Institution</option>
                    <option value='ind'>Individual</option>
                </select>
                <br>
                <div id='add_here'>
                </div>
                
                
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>

<script>
$("#ind_or_inst_select").on('change', function() {
    $("#add_here").empty();
        if(this.value === "inst"){
            $("<h5><b>Contact Information:</b></h5><br>").appendTo( "#add_here" );

            $("<label for='contact_first_name'>Contact's First Name:&nbsp;</label>").appendTo( "#add_here" );
            $("<input name='contact_first_name' placeholder='Enter First Name...' size='20'><br>").appendTo( "#add_here" );

            $(" <label for='contact_last_name'>Contact's Last Name:&nbsp;</label>").appendTo( "#add_here" );
            $(" <input name='contact_last_name' placeholder='Enter Last Name...' size='20'><br>").appendTo( "#add_here" );

            $(" <label for='contact_email'>Contact's Email:&nbsp;</label>").appendTo( "#add_here" );
            $(" <input name='contact_email' type='email' placeholder='Enter Email...' size='20'><br>").appendTo( "#add_here" );

            $(" <label for='contact_phone'>Contact's Phone Number:&nbsp;</label>").appendTo( "#add_here" );
            $(" <input name='contact_phone' type='tel' placeholder='Enter Phone Number...' size='20' id='phone_num'><br><br>").appendTo( "#add_here" );

            $(function(){
                $('#phone_num').usPhoneFormat({
                format:'(xxx) xxx-xxxx'
            });
            });

            $(" <h5><b>Institution Information:</b></h5><br>").appendTo( "#add_here" );

            $(" <label for='institution_name'>Institution's Name:&nbsp;</label>").appendTo( "#add_here" );
            $(" <input name='institution_name' placeholder='Enter Name...' size='20'><br>").appendTo( "#add_here" );

            $(" <label for='mailing_address'>Institution's Mailing Address:&nbsp;</label>").appendTo( "#add_here" );
            $(" <input name='mailing_address' placeholder='Enter Address...' size='20'><br>").appendTo( "#add_here" );

            $(" <label for='institution_city'>Institution's City:&nbsp;</label>").appendTo( "#add_here" );
            $(" <input name='institution_city' placeholder='Enter City...' size='20'><br>").appendTo( "#add_here" );

            $(" <label for='institution_state'>Institution's State:&nbsp;</label>").appendTo( "#add_here" );
            $(" <select name='institution_state' id='select_state'><option selected disabled>Select State...</option><option value='Alabama'>Alabama</option><option value='Alaska'>Alaska</option><option value='Arizona'>Arizona</option><option value='Arkansas'>Arkansas</option><option value='California'>California</option><option value='Colorado'>Colorado</option><option value='Connecticut'>Connecticut</option><option value='Delaware'>Delaware</option><option value='Florida'>Florida</option><option value='Georgia'>Georgia</option><option value='Hawaii'>Hawaii</option><option value='Idaho'>Idaho</option><option value='Illinois'>Illinois</option><option value='Indiana'>Indiana</option><option value='Iowa'>Iowa</option><option value='Kansas'>Kansas</option><option value='Kentucky'>Kentucky</option><option value='Louisiana'>Louisiana</option><option value='Maine'>Maine</option><option value='Maryland'>Maryland</option><option value='Massachusetts'>Massachusetts</option><option value='Michigan'>Michigan</option><option value='Minnesota'>Minnesota</option><option value='Mississippi'>Mississippi</option><option value='Missouri'>Missouri</option><option value='Nebraska'>Nebraska</option><option value='Nevada'>Nevada</option><option value='New Hampshire'>New Hampshire</option><option value='New Jersey'>New Jersey</option><option value='New Mexico'>New Mexico</option><option value='New York'>New York</option><option value='North Carolina'>North Carolina</option><option value='North Dakota'>North Dakota</option><option value='Ohio'>Ohio</option><option value='Oklahoma'>Oklahoma</option><option value='Oregon'>Oregon</option><option value='Pennsylvania'>Pennsylvania</option><option value='Rhode Island'>Rhode Island</option><option value='South Carolina'>South Carolina</option><option value='South Dakota'>South Dakota</option><option value='Tennessee'>Tennessee</option><option value='Texas'>Texas</option><option value='Utah'>Utah</option><option value='Vermont'>Vermont</option><option value='Virginia'>Virginia</option><option value='Washington'>Washington</option><option value='West Virginia'>West Virginia</option><option value='Wisconsin'>Wisconsin</option><option value='Wyoming'>Wyoming</option></select><br>").appendTo( "#add_here" );

            $(" <label for='institution_zipcode'>Institution's Zipcode:&nbsp;</label>").appendTo( "#add_here" );
            $(" <input name='institution_zipcode' placeholder='Enter Zipcode...' size='20'><br>").appendTo( "#add_here" );
                
            $(" <label for='institution_county'>Institution's County:&nbsp;</label><input name='institution_county' placeholder='Enter County...' size='20'><br><br>").appendTo( "#add_here" );

            $(" <button type='submit' name='institutionAccessRequest' class='btn btn-primary'>Submit Request</button>").appendTo( "#add_here" );
        }
        else{

            $("<label for='first_name'>First Name:&nbsp;</label>").appendTo( "#add_here" );
            $("<input name='first_name' placeholder='Enter First Name...' size='20'><br>").appendTo( "#add_here" );

            $("<label for='last_name'>Last Name:&nbsp;</label>").appendTo( "#add_here" );
            $("<input name='last_name' placeholder='Enter Last Name...' size='20'><br>").appendTo( "#add_here" );

            $("<label for='email'>Email:&nbsp;</label>").appendTo( "#add_here" );
            $("<input name='email' type='email' placeholder='Enter Email...' size='20'><br>").appendTo( "#add_here" );

            $("<label for='phone'>Phone Number:&nbsp;</label>").appendTo( "#add_here" );
            $("<input name='phone' type='tel' placeholder='Enter Phone Number...' size='20' id='phone_num'><br>").appendTo( "#add_here" );

            $(function(){
                $('#phone_num').usPhoneFormat({
                format:'(xxx) xxx-xxxx'
            });
            });
            $("<label for='ext'>Extension Number:&nbsp;</label>").appendTo( "#add_here" );
            $("<input name='ext' placeholder='Enter Extension...' size='20'><br>").appendTo( "#add_here" );

            $("<label for='city'>City:&nbsp;</label>").appendTo( "#add_here" );
            $("<input name='city' placeholder='Enter City...' size='20'><br>").appendTo( "#add_here" );

            $(" <label for='state'>State:&nbsp;</label>").appendTo( "#add_here" );
            $(" <select name='state' id='select_state'><option selected disabled>Select State...</option><option value='Alabama'>Alabama</option><option value='Alaska'>Alaska</option><option value='Arizona'>Arizona</option><option value='Arkansas'>Arkansas</option><option value='California'>California</option><option value='Colorado'>Colorado</option><option value='Connecticut'>Connecticut</option><option value='Delaware'>Delaware</option><option value='Florida'>Florida</option><option value='Georgia'>Georgia</option><option value='Hawaii'>Hawaii</option><option value='Idaho'>Idaho</option><option value='Illinois'>Illinois</option><option value='Indiana'>Indiana</option><option value='Iowa'>Iowa</option><option value='Kansas'>Kansas</option><option value='Kentucky'>Kentucky</option><option value='Louisiana'>Louisiana</option><option value='Maine'>Maine</option><option value='Maryland'>Maryland</option><option value='Massachusetts'>Massachusetts</option><option value='Michigan'>Michigan</option><option value='Minnesota'>Minnesota</option><option value='Mississippi'>Mississippi</option><option value='Missouri'>Missouri</option><option value='Nebraska'>Nebraska</option><option value='Nevada'>Nevada</option><option value='New Hampshire'>New Hampshire</option><option value='New Jersey'>New Jersey</option><option value='New Mexico'>New Mexico</option><option value='New York'>New York</option><option value='North Carolina'>North Carolina</option><option value='North Dakota'>North Dakota</option><option value='Ohio'>Ohio</option><option value='Oklahoma'>Oklahoma</option><option value='Oregon'>Oregon</option><option value='Pennsylvania'>Pennsylvania</option><option value='Rhode Island'>Rhode Island</option><option value='South Carolina'>South Carolina</option><option value='South Dakota'>South Dakota</option><option value='Tennessee'>Tennessee</option><option value='Texas'>Texas</option><option value='Utah'>Utah</option><option value='Vermont'>Vermont</option><option value='Virginia'>Virginia</option><option value='Washington'>Washington</option><option value='West Virginia'>West Virginia</option><option value='Wisconsin'>Wisconsin</option><option value='Wyoming'>Wyoming</option></select><br>").appendTo( "#add_here" );
            
            $("<label for='zipcode'>Zipcode:&nbsp;</label>").appendTo( "#add_here" );
            $("<input name='zipcode' placeholder='Enter Zipcode...' size='20'><br>").appendTo( "#add_here" );

            $("<label for='county'>County:&nbsp;</label>").appendTo( "#add_here" );
            $("<input name='county' placeholder='Enter County...' size='20'><br>").appendTo( "#add_here" );
            $(" <button type='submit' name='individualAccessRequest' class='btn btn-primary'>Submit Request</button>").appendTo( "#add_here" );

        }
});


</script>


<!-- <script>
    $("#select_state').on('change', function() {
        $("#countyDiv').empty();
        if(this.value === "Montana"){
            $( "<label for='institution_county'>Institution's County:&nbsp;</label><select name='institution_county'><option selected disabled>Select County...</option><option value='Beaverhead'>Beaverhead</option><option value='Big Horn'>Big Horn</option><option value='Blaine'>Blaine</option><option value='Broadwater'>Broadwater</option><option value='Carbon'>Carbon</option><option value='Carter'>Carter</option><option value='Cascade'>Cascade</option><option value='Chouteau'>Chouteau</option><option value='Custer'>Custer</option><option value='Daniels'>Daniels</option><option value='Dawson'>Dawson</option><option value='Deer Lodge'>Deer Lodge</option><option value='Fallon'>Fallon</option><option value='Fergus'>Fergus</option><option value='Flathead'>Flathead</option><option value='Gallatin'>Gallatin</option><option value='Garfield'>Garfield</option><option value='Glacier'>Glacier</option><option value='Golden Valley'>Golden Valley</option><option value='Granite'>Granite</option><option value='Hill'>Hill</option><option value='Jefferson'>Jefferson</option><option value='Judith Basin'>Judith Basin</option><option value='Lake'>Lake</option><option value='Lewis And Clark'>Lewis And Clark</option><option value='Liberty'>Liberty</option><option value='Lincoln'>Lincoln</option><option value='Madison'>Madison</option><option value='McCone'>McCone</option><option value='Meagher'>Meagher</option><option value='Mineral'>Mineral</option><option value='Missoula'>Missoula</option><option value='Musselshell'>Musselshell</option><option value='Park'>Park</option><option value='Petroleum'>Petroleum</option><option value='Phillips'>Phillips</option><option value='Pondera'>Pondera</option><option value='Powder River'>Powder River</option><option value='Powell'>Powell</option><option value='Prairie'>Prairie</option><option value='Ravalli'>Ravalli</option><option value='Richland'>Richland</option><option value='Roosevelt'>Roosevelt</option><option value='Rosebud'>Rosebud</option><option value='Sanders'>Sanders</option><option value='Sheridan'>Sheridan</option><option value='Silver Bow'>Silver Bow</option><option value='Stillwater'>Stillwater</option><option value='Sweet Grass'>Sweet Grass</option><option value='Teton'>Teton</option><option value='Toole'>Toole</option><option value='Treasure'>Treasure</option><option value='Valley'>Valley</option><option value='Wheatland'>Wheatland</option><option value='Wibaux'>Wibaux</option><option value='Yellowstone'>Yellowstone</option><option value='Yellowstone National Park'>Yellowstone National Park</option></select><br>").appendTo( "#countyDiv" );
        }
        else{
            $( "<label for='institution_county'>Institution's County:&nbsp;</label><input name='institution_county' placeholder='Enter County...' size='20'><br><br>" ).appendTo( "#countyDiv" );
        }
        
    });
</script> -->