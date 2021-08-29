<?php

if (isset($_POST['submit'])) {
    echo $name = $_POST['name'];
    echo $subject = $_POST['subject'];
    echo $mailFrom = $_POST['email'];
    echo $message = $_POST['message'];

    $mailTo = "jefferns@mail.uc.edu";
    $headers = "From: ".$mailFrom;
    $txt = "Automated Email from ".$name."at ".$mailFrom.".\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}
?>