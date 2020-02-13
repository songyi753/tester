<?php
    session_start();

    echo $_SESSION['name']; //can use isset to determined logined

    echo $_COOKIE['name'];
?>