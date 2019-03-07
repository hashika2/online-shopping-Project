<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTO = "heiyanth_se16012@stu.kln.ac.lk"
    $headers = "From: ".$mailFrom;
    $txt = "You have reseved an e-mail from ".$name.".\n\n".$message;


    mail($mailTO, $txt, $headers
    header("Location: index.php?mailsend");
}

?>
