$("#requestGrind").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitForm();
});

function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var date = $("#date").val();
    var time = $("#time").val();
    //var message = $("#message").val();

    $.ajax({
        type: "POST",
        url: "TutorMe_Web/forms/emails/grind_request_email.php",
        data: "name=" + name + "&email=" + email + "&date" + date + "&time" + time,
        success : function(text){
            if (text == "success"){
                $("#contactForm")[0].reset();
                formSuccess();
            } else {
              formError();
            }
        }
    });
}
function formSuccess(){

    var msgClasses = "h3 text-center";
    var msg = "Message Submitted!";

    $( "#msgSubmit" ).removeClass().addClass(msgClasses).text(msg);
}

function formError(){

    var msgClasses = "h3 text-center";
    var msg = "Message not sent.";

    $( "#msgSubmit" ).removeClass().addClass(msgClasses).text(msg);
}
