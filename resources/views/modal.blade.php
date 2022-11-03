<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="alert">
  <div class="modal-content">
      <div class="modal-header">
      <h1 class="modal-title fs-5" id="exampleModalLabel">Paasword Change</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="{{route('home.changePass')}}">
       @csrf   
          <div class="modal-body">
                  <div class="mb-3">
                      <input type="text" name="old_pass" id="old_pass" class="form-control" placeholder="Old password" required>
                  </div>
                  <div class="mb-3">
                      <input type="text" name="new_pass" id="new_pass" class="form-control" placeholder="New password" required>
                  </div>
                  <div class="mb-3">
                      <input type="text" name="confirm_pass" id="confirm_pass" class="form-control" placeholder="confirm password" required>
                  </div>
                  <div class="mb-3">
                      <p class="text-danger" id="error_pass" hidden>the confirm password is not the same</p>
                  </div>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <input type="submit" value="Save Changes" id="pass_change" class="btn btn-primary">
          </div>
      </form>

  </div>
  </div>
</div>
{{-- modal for opertion --}}
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="opertion_m" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Password change</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
      </button>
      </div>
      <div class="modal-body">
          <p id="msg_request" class="text-success">{{session()->get('opertion')}}</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
      </div>
  </div>
  </div>
</div>
</div>
<script>
$(document).ready(function(){
  var msg=$("#msg_request").html();
  if(msg!=""){
    if(msg!="Password changed successfully"){
      $('#msg_request').removeClass('text-success');
     $('#msg_request').addClass('text-danger');
    }
      $("#opertion_m").modal('show');
  }
  
});</script>