<?php

    $to = "doofyjax@gmail.com";
    $from = $_REQUEST['phone'];
    $headers = "From: $from";
  

    $fields = array();
    $fields{"phone"} = "phone";
  

    

    $body = "You have a message from the Lipa Msanii:\r\n"; 

    foreach($fields as $a => $b){$body .= $b." : ".$_REQUEST[$a]."\r\n"; }


    $send = mail($to, $headers);

?>