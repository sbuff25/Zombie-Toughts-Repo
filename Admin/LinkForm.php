<div class="modal" tabindex="-1" role="dialog" id="LinkForm">
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
                <label for="access_type" class='text-dark'><b>Select Link Type</b></label>
                <select name="access_type" id="select_type">
                    <option selected disabled>Select A Code Type...</option>
                    <option value='ztI'>Institution Access Code</option>
                    <option value='zti'>Individual Access Code</option>
                    <option value='ztp'>Preview Access Code</option>
                </select>
                <br>
                <hr>
                <br>
                <div id='LinkFormElement'>
                </div>

            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>
