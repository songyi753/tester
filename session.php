<?php
    session_start();

    $time=time();

    $_SESSION['name']='Songyi';

    setcookie('name','songyi',$time+100);//key,value,second
?>