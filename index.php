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

echo $user_ip = $_SERVER['REMOTE_ADDR']; //show ip address

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
//string
$count1 = str_word_count($string);     //0 = word,1 = array,2 = string
$count2 = str_word_count($string,1);
echo $count1.'<br>';
print_r($count2);

/*
$string_shuffled =str_shuffle($string);   -shuffle word

$half = substr($string_shuffled,0,5);     -random generator 5 word

strrev($string)    				-reverse string
similar_text($string_one,$string_two,$result);  -similarity in percent 
strlen()

trim(),ltrim(),rtrim()

addslashes               			-add slash before symbol
*/
if (preg_match('/is/',$string)) {      //search or matching
	echo 'match found.<br>';
}else {
	echo 'no match found.<br>';
}

$food = array('Pasta'=>300,'Pizza'=>1000,'Salad'=>150,'Vegetables'=>50);

print_r($food);

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