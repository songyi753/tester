<?php
    // require to connect to mailserver
    $to = 'songyi753@hotmail.com';
    $subject = 'This is mail';
    $body = 'Testing';
    $headers = 'From: yizailover1@gmail.com';

    if(mail($to,$subject,$body,$headers)){
        echo 'Sent';

    }else{
        echo ' error';
    }
?>