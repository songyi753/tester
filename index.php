<?php

//value
$num = 'two';
$string ='This is a string';
$test = '11';
$number = 100;
$day ='Tues';
$day .='day';
$date = 11;
$year = 2020;

echo $user_ip = $_SERVER['REMOTE_ADDR'].'<br>'; //show ip address


function Name(){
	echo ' Songyi<br>';
}

function displayDate($day,$year){
	global $date;
	echo $day.' '.$date.' '.$year.'<br>';
}

if($number<>100){   //<> is !=
echo "<strong>Hello bro<br></strong>";    //better
}
else{
print ("Hello bro<br>");
}

echo "My name is ";
Name();
echo " The date is $day $date $year<br>";
displayDate('Monday',2019);

if($test===$date){  //check data type
	echo ' equal.<br>';
}
else{
	echo ' not equal.<br>';
}

switch ($num) {
	case 'one':
		echo ' one<br>';
	break;
	
	case 'two':
	case 'three';
		echo ' two and three<br>';
	break;

	default:
		echo 'number not saved<br>';
	break;
}

include 'form.php'; //can pass variable form the page to here
include_once 'form.php';//included once then will not appear again
//include similar with require

$food = array('healthy'=>array('Pasta'=>300,'Pizza'=>1000),
		'Unhealthy'=>array('Salad'=>150,'Vegetables'=>50));

//print_r($food);
foreach($food as $x =>$y){
	echo $x.'<br>';
	foreach($y as $z=>$a){
		echo $z.' '.$a.' ';
	}
	echo '<br>';
}

echo "<input type=\"text\" name=\"name\" value=\"hi\"><br>";

/*$conn = new mysqli('127.0.0.1', 'root','','hello');// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO songyi(secondname)
VALUES ('John')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
*/

die('error'); //exit();

?>

<input type="text" name="name" value="<?php echo $test; ?>">