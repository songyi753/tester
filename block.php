<?php
    require 'test.php';

    foreach($ip_blocked as $ip)
    {
        if($ip==$ip_address){
            die('Your ip address '.$ip_address.'has been block.');
        }
    }
?>