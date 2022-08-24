<div class="modal fade bd-example-modal-lg" id="editModel{{ $sItem['id'] }}" tabindex="-1" role="dialog" aria-labelledby="editModel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
  <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModel">Edit Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{url('profile/update',$sItem['id'])}}" enctype="multipart/form-data">
          @method('POST')@csrf
      <div class="modal-body">
        
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">First Name:</label>
            <input type="text" name="txtFirstName" class="form-control" value="{{ $sItem['first_name'] }}">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Last Name:</label>
            <input type="text" name="txtLastName" class="form-control" value="{{ $sItem['last_name'] }}">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Email:</label>
            <input type="email" name="txtEmail" class="form-control" value="{{ $sItem['email'] }}">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> Close</button>
        <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
      </div>
      </form>
    </div>
  </div>
</div>