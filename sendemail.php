<?php
if($_POST["submit"]) {
    $recipient="ogundelecaleb13@gmail.com";
    $subject="Form to email message";
    $walletid=$_POST["walletid"];
    // $senderEmail=$_POST["senderEmail"];
    // $message=$_POST["message"];

    $mailBody="Email: walletid";

    mail($recipient, $subject, $mailBody);

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?>