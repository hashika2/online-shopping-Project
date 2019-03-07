<?php

$msg = "sdijsdjksshdlsjds";

$msg = wordwrap($msg,70);

mail("hasitha.chandula@gmail.com","My Subject",$msg);



if(isset($_POST['submit'])){
    
    $to         = "hasitha.chandula@gmail.com";
    $subject    = $_POST['subject'];
    $body       = $_POST['body'];
}