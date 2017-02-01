$("#PasswordReset").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitForm();
});

function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();

    $.ajax({
        type: "POST",
        url: "backend/PasswordReset.php",
        data: "name=" + name + "&email=" + email,
        success : function(text){
            if (text == "success"){
                $("#PasswordReset")[0].reset();
                formSuccess();
            } else {
              formError();
            }
        }
    });
}
function formSuccess(){

    var msgClasses = "h3 text-center";
    var msg = "We have emailed you a new password";

    $( "#msgSubmit" ).removeClass().addClass(msgClasses).text(msg);
}

function formError(){

    var msgClasses = "h3 text-center";
    var msg = "Please Enter a valid email address";

    $( "#msgSubmit" ).removeClass().addClass(msgClasses).text(msg);
}
