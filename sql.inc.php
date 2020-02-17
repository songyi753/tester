<?php
    $host = '127.0.0.1';
    $user = 'root';
    $pass = '';
    $db   = 'hello';
    
    class ServerException extends Exception{}

    try{
        if(!($conn = new mysqli($host,$user,$pass,$db))){
            throw new ServerException('Could not connect to server');
        }else{
            echo 'connected!';
        }


    }catch(ServerException $ex){
        echo 'Error: '.$ex->getMessage();
    }

    /*
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    */
?>