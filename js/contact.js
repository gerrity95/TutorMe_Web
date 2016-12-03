// Needed for the contact form

$("#contactForm").submit(function(event){
  // cancels the form submission
  event.preventDefault();
  submitForm();
})


function submitForm()
{
  //Initiate variables with form content

  var name = $("#name").val();
  var email = $("#email").val();
  var name = $("#phone").val();
  var message = $("#message").val();

  $.ajax({
    type: "POST"
    url: "backend/contactform.php"
    data: "name=" + name + "&email=" + email + "&phone" + phone + "&message=" + message, success: function(text) {
      if (text == "success"){
        formSuccess();
      }
    }
  });
}


function formSuccess() {
  $( "#msgSubmit" ).removeClass( "hidden" );
} //This is for printing the 'Message Submitted'
