<form action="" method="post">
    <input type="text" name="email" value="Email" />
    <input type="submit" value="Send details to embassy" />
    <input type="hidden" name="button_pressed" value="1" />
</form>

<?php

if(isset($_POST['button_pressed']))
{
    $to = $_POST['email'];
    $subject = 'Welcome to TutorMe';
    $message = 'Welcome to TutorMe. Lets get started.';
    $headers = 'From: tutormeire@gmail.com' . "\r\n" .
        'Reply-To: From: tutormeire@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    echo 'Email Sent.';
}

?>
