<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Request a Grind</h4>
      </div>
      <div class="modal-body">
        <form style="" action="" method="POST" role="form" id="requestGrind">
          <div class="row">
            <div class="form-group col-xs-6">
              <label for="firstname" class="h4 general_text">Name *</label>
              <input name="name" class="form-control" type="text" value="<?php echo $get_firstname; echo " "; echo $get_surname; ?>">
            </div>


            <div class="form-group col-xs-6">
              <label for="firstname" class="h4 general_text">Email *</label>
              <input name="email" class="form-control" type="text" placeholder="Enter Email...">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-xs-6">
              <label for="firstname" class="h4 general_text">Date *</label>
              <input name="date" class="form-control" type="text" placeholder="Enter date...">
            </div>

            <div class="form-group col-xs-6">
              <label for="firstname" class="h4 general_text">Time *</label>
              <input name="time" class="form-control" type="text" placeholder="Enter Time...">
            </div>
          </div>
          <!-- Optional, put in a message box where the student can tell the tutor a little about themselves and the problem they are having -->

          <div id="msgSubmit" class="h3 text-center hidden"></div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Submit</button>
      </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
