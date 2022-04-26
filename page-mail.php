<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $phone = $_POST['phone'];
    $reason = $_POST['reason'];
    $formcontent = "From" . $name . "\n" . "Message:" . $message . "\n" . "Phone:" . $phone . "\n" . "Reason:" . $reason;
    $recipient = "lukaszrejnsz@op.pl";
    $subject = "Formularz kontaktowy";
    $mailheader = "From:" . $email;
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    header("Location:php echo get_home_url()?mailsend");
}
