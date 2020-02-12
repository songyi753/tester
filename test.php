<?php
    $host = $_SERVER['HTTP_HOST']; //name from
    $ip_blocked = array('::1','100:100:100:100');
    $http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
    $http_x_forward_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote_addr = $_SERVER['REMOTE_ADDR']; //ip form

    //way to get visitor ip address
    if(!empty($http_client_ip)){
        $ip_address = $http_client_ip;
    }else if(!empty($http_x_forward_for)){
        $ip_address = $http_x_forward_for;
    }else{
        $ip_address = $remote_addr;
    }

?>