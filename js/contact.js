$("#contactForm").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitForm();
});

function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();

    $.ajax({
        type: "POST",
        url: "backend/contactform.php",
        data: "name=" + name + "&email=" + email + "&message=" + message,
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
