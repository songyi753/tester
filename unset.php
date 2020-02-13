<?php
    session_start();

    $time=time();

    unset($_SESSION['name']); ///like logout

    //session_destroy(); -unset all

    setcookie('name','songyi',$time-100);
?>