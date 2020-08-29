<div class="modal" tabindex="-1" role="dialog" id="InstitutionForm">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-dark">
            <h5 class="modal-title text-light">Generate Access Link Form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body bg-muted text-dark">
            <form action="AdminPage" method='POST' class="form-container">
                <h5><b>Contact's Information:</b></h5><br>

                <label for='contact_first_name'>Contact's First Name:&nbsp;</label>
                <input name='contact_first_name' placeholder='Enter First Name...' size='20'><br>

                <label for='contact_last_name'>Contact's Last Name:&nbsp;</label>
                <input name='contact_last_name' placeholder='Enter Last Name...' size='20'><br>

                <label for='contact_email'>Contact's Email:&nbsp;</label>
                <input name='contact_email' type='email' placeholder='Enter Email...' size='20'><br>

                <label for='contact_phone'>Contact's Phone Number:&nbsp;</label>
                <input name='contact_phone' type='tel' placeholder='Enter Phone Number...' size='20'><br><br>

                <h5><b>Institution's Information:</b></h5><br>

                <label for='institution_name'>Institution's Name:&nbsp;</label>
                <input name='institution_name' placeholder='Enter Name...' size='20'><br>

                <label for='mailing_address'>Institution's Mailing Address:&nbsp;</label>
                <input name='mailing_address' placeholder='Enter Address...' size='20'><br>

                <label for='institution_city'>Institution's City:&nbsp;</label>
                <input name='institution_city' placeholder='Enter City...' size='20'><br>

                <label for='institution_state'>Institution's State:&nbsp;</label>
                <select name='institution_state'><option value='Alabama'>Alabama</option><option value='Alaska'>Alaska</option><option value='Arizona'>Arizona</option><option value='Arkansas'>Arkansas</option><option value='California'>California</option><option value='Colorado'>Colorado</option><option value='Connecticut'>Connecticut</option><option value='Delaware'>Delaware</option><option value='Florida'>Florida</option><option value='Georgia'>Georgia</option><option value='Hawaii'>Hawaii</option><option value='Idaho'>Idaho</option><option value='Illinois'>Illinois</option><option value='Indiana'>Indiana</option><option value='Iowa'>Iowa</option><option value='Kansas'>Kansas</option><option value='Kentucky'>Kentucky</option><option value='Louisiana'>Louisiana</option><option value='Maine'>Maine</option><option value='Maryland'>Maryland</option><option value='Massachusetts'>Massachusetts</option><option value='Michigan'>Michigan</option><option value='Minnesota'>Minnesota</option><option value='Mississippi'>Mississippi</option><option value='Missouri'>Missouri</option><option value='Montana' selected>Montana</option><option value='Nebraska'>Nebraska</option><option value='Nevada'>Nevada</option><option value='New Hampshire'>New Hampshire</option><option value='New Jersey'>New Jersey</option><option value='New Mexico'>New Mexico</option><option value='New York'>New York</option><option value='North Carolina'>North Carolina</option><option value='North Dakota'>North Dakota</option><option value='Ohio'>Ohio</option><option value='Oklahoma'>Oklahoma</option><option value='Oregon'>Oregon</option><option value='Pennsylvania'>Pennsylvania</option><option value='Rhode Island'>Rhode Island</option><option value='South Carolina'>South Carolina</option><option value='South Dakota'>South Dakota</option><option value='Tennessee'>Tennessee</option><option value='Texas'>Texas</option><option value='Utah'>Utah</option><option value='Vermont'>Vermont</option><option value='Virginia'>Virginia</option><option value='Washington'>Washington</option><option value='West Virginia'>West Virginia</option><option value='Wisconsin'>Wisconsin</option><option value='Wyoming'>Wyoming</option></select><br>

                <label for='institution_zipcode'>Institution's Zipcode:&nbsp;</label>
                <input name='institution_zipcode' placeholder='Enter Zipcode...' size='20'><br>

                <label for='institution_county'>Institution's County:&nbsp;</label>
                <input name='institution_county' placeholder='Enter County...' size='20'><br><br>

                <h5><b>Counselor's Information:</b></h5><br>

                <label for='counselor_first_name'>Counselor First Name:&nbsp;</label>
                <input name='counselor_first_name' placeholder='Enter First Name...' size='20'><br>

                <label for='counselor_last_name'>Counselor Last Name:&nbsp;</label>
                <input name='counselor_last_name' placeholder='Enter Last Name...' size='20'><br>

                <label for='counselor_email'>Counselor Email:&nbsp;</label>
                <input name='counselor_email' placeholder='Enter Email...' type='email' size='20'><br>

                <label for='counselor_phone'>Counselor Phone Number:&nbsp;</label>
                <input name='counselor_phone' placeholder='Enter Phone Number...' type='tel' size='20'><br>

                <label for='counselor_office'>Counselor Office Number:&nbsp;</label>
                <input name='counselor_office' placeholder='Enter Office Number...' size='20'><br>

                <label for='counselor_bldg'>Counselor Building:&nbsp;</label>
                <input name='counselor_bldg' placeholder='Enter Building...' size='20'><br><br>

                <h5><b>Other Information:</b></h5><br>

                <label for='student_grade'>Students' Grade Level:&nbsp;</label>
                <select name='student_grade' multiple>
                    <option value='K'>Kindergarten</option>
                    <option value='1'>1st</option>
                    <option value='2'>2nd</option>
                    <option value='3'>3rd</option>
                    <option value='4'>4th</option>
                    <option value='5'>5th</option>
                    <option value='6'>6th</option>
                    <option value='7'>7th</option>
                    <option value='8'>8th</option>
                    <option value='9'>9th</option>
                    <option value='10'>10th</option>
                    <option value='11'>11th</option>
                    <option value='12'>12th</option>
                </select><br>

                <label for='accesses'>Number of students/access codes needed:&nbsp;</label>
                <input name='accesses' placeholder='Enter total...' type='number' min='1' size='20'><br>

            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>
