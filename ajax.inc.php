<?php
//echo 'hello bois';

//if (isset($_GET['show'])){
//   include $_GET['show'];
//}

//<input type='submit' onclick="window.location='ajax.php?show=ajax.inc.php'">

if(isset($_GET['search_text'])){
    $search_text = $_GET['search_text'];
}

if(!empty($search_text)){
    if($conn = new mysqli('127.0.0.1', 'root','','hello')){

        $sql = "SELECT `name` FROM `names` WHERE `name` LIKE '$search_text%'";
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<a href="anotherpage.php?search_text='.$row["name"].'">' .$row["name"]. "<br>";
            }
        } 
        else {
        echo "0 results";
        }
    }
}
?>
