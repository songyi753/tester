<?php
    class DatabaseConnect{
        public function __construct($db_host,$db_username,$db_password,$db_database){
            if(!($conn = new mysqli($host,$user,$pass,$db))){
                echo 'connect failed';
            }else{
                echo 'connected to '.$db_host;
            }
        }
    }

    
?>