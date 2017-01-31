<?php
  //include(".backend/connection.php");
 ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
function State() {
  $('#cycleChoice').empty();
  $('#cycleChoice').append("<option>Loading.....</option>");
  $('#subjectChoice').append("<option value='0'>--Select Subject--</option>");
  $.ajax({
    type:"POST",
    url:"backend/cycleSubject_backend.php",
    contentType:"application/json; charset=utf-8",
    dataType:"json",
    success: function(data) {
      $('#cycleChoice').empty();
      $('#cycleChoice').append("<option value='0'>--Select Cycle--</option>");
      $.each(data,function(i, item) {
        $('#cycleChoice').append('<option value="'+ data[i].cycle_id + '">'+ data[i].cycle_name+'</option>');
      });
    },
    complete: function() {
    }
  });
}
function District(sid) {
  $('#subjectChoice').empty();
  $('#subjectChoice').append("<option>Loading.....</option>");
  $.ajax({
    type:"POST",
    url:"backend/subject_backend.php?sid="+sid,
    contentType:"application/json; charset=utf-8",
    dataType:"json",
    success: function(data) {
      $('#subjectChoice').empty();
      $('#subjectChoice').append("<option value='0'>--Select Subject--</option>");
      $.each(data,function(i, item) {
        $('#subjectChoice').append('<option value="'+ data[i].subject_id + '">'+ data[i].subject_name+'</option>');
      });
    },
    complete: function() {
    }
  });
}
$(document).ready(function() {
  State();
  $("#cycleChoice").change(function() {
    var stateid = $("#cycleChoice").val();
    District(stateid);
  });
});
</script>
