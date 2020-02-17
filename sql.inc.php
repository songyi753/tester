<?php
    $host = '127.0.0.1';
    $user = 'root';
    $pass = '';
    $db   = 'hello';
    
    class ServerException extends Exception{
        public function showSpecific(){
            return 'Error throw on line '.$this->getLine().' in '.$this->getFile();
        }
    }

    try{
        if(!($conn = new mysqli($host,$user,$pass,$db))){
            throw new ServerException('Could not connect to server');
        }else{
            echo 'connected!';
        }


    }catch(ServerException $ex){
        echo $ex->showSpecific();
    }

    /*
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    */
?>