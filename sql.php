<?php
    $conn = new mysqli('127.0.0.1', 'root','','hello');// Check connection
    //or  mysql_connect('127.0.0.1','root','');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    //$mysql_db = 'songyi';  name
    //mysql_select_db($mysql_db);
    //$sql = "INSERT INTO songyi(secondname) VALUES ('John')";

    //if ($conn->query($sql) === TRUE) {
    //   echo "New record created successfully";
    //} else {
    //    echo "Error: " . $sql . "<br>" . $conn->error;
    //}

    $query = "SELECT 'food','calories' FROM 'food' order by 'id'";
    if($query_run = mysql_query($query)){
        while($quert_row = mysql_fetch_assoc($query_run)){
            $food = $query_row['food'];
            $calories = $query_row['calories'];
        }
    }

    $conn->close();
    
?>