<div class="container">
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modify</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <form class="form" action="/action_page.php">

        <!-- Modal body -->
        <div class="modal-body">  
            <div class="form-group">
              <div class="col-sm-12 form-inline">
                <label class="control-label col-sm-4" for="pwd">NIC</label>              
                <input type="text" name="nicModal" placeholder="nic" title="enter the nic" pattern="[0-9]{9}[V]{1}" required="" size="40" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-12 form-inline">
                <label class="control-label col-sm-4" for="pwd">Telephone</label>
                <input type="text" name="telephoneModal" placeholder="telephone" title="enter the telephone" pattern="[0-9]{5,}" required="" size="40" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-12 form-inline">
                <label class="control-label col-sm-4" for="pwd">Mobile</label>
                <input type="text" name="mobileModal" placeholder="mobile" title="enter the mobile" pattern="[0-9]{5,}" required="" size="40" class="form-control">
              </div>
            </div> 

            <div class="form-group">
              <div class="col-sm-12 form-inline">
                <label class="control-label col-sm-4" for="pwd">Email</label>
                <input type="email" name="emailModal" placeholder="email" title="enter the email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="" size="40" class="form-control">
              </div>
            </div>
          </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" data-dismiss="modal" name="update">Update</button>
          <button type="submit" class="btn btn-danger" data-dismiss="modal" name="delete">Delete</button>          
        </div>

        </form>
        
      </div>
    </div>
  </div>
  
</div>