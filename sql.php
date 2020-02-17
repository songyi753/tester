<?php
     
    include 'sql.inc.php';
    //$mysql_db = 'songyi';  name
    //mysql_select_db($mysql_db);
    //$sql = "INSERT INTO songyi(secondname) VALUES ('John')";

    //if ($conn->query($sql) === TRUE) {
    //   echo "New record created successfully";
    //} else {
    //    echo "Error: " . $sql . "<br>" . $conn->error;
    //}

    //$query = "SELECT 'food','calories' FROM 'food' order by 'id'";
    /*if($query_run = mysql_query($query)){
        while($quert_row = mysql_fetch_assoc($query_run)){
            $food = $query_row['food'];
            $calories = $query_row['calories'];
        }

    SELECT `id`, `name` FROM `names` WHERE `name` LIKE '%s%'

    <form action="sql.php" method="post">
    Name: <input type="text" name="search_name"><br>
    <input type="submit" value="Search">
    </form>
    }*/

    //$charset = $conn -> character_set_name();
    //echo "Default character set is: " . $charset;

    //$sql = "Insert names Values('','gg','game','agnaona')";
    $sql = "SELECT `id`, `name` FROM `names` WHERE `name` LIKE '%s%'";
    $result = mysqli_query($conn, $sql);

    // Fetch all
    //$array = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //print_r($array);\

    //print some
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
        }
    } 
    else {
    echo "0 results";
    }

    $conn->close();
    
?>

