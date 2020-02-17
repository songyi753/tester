<?php

    echo $_POST['text'];

    $conn = new mysqli('127.0.0.1', 'root','','hello');

    if(isset($_POST['text'])){
        $text = $_POST['text'];
        if(!empty($text)){
            $sql = "Insert gg VALUES('','$text')";
            if($result = mysqli_query($conn, $sql)){
                echo 'Inserted';
            } 
            else{
                echo 'failed';
            }
        }
        else{
            echo 'Fill Something';
        }
    }else{
        echo 'error';
    }
    
    
?>