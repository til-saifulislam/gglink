<div class="modal fade bd-example-modal-lg" id="createModel" tabindex="-1" role="dialog" aria-labelledby="createModel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
  <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createModel">New Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="" enctype="multipart/form-data">
          @csrf
      <div class="modal-body">
        
          <div class="form-group">
              <label for="recipient-name" class="col-form-label">First Name:</label>
              <input type="text" name="txtFirstName" class="form-control" autofocus>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Last Name:</label>
              <input type="text" name="txtLastName" class="form-control">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Email:</label>
              <input type="email" name="txtEmail" class="form-control">
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> Close</button>
        <button type="button" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>