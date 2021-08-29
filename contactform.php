<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "jefferns@mail.uc.edu";
    $headers = "From: ".$mailFrom;
    $txt = "Automated Email from ".$name."at ".$mailFrom."\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}
?>