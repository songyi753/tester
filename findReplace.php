<?php

    $offset = 0;

    if((isset($_POST['text']))&&(isset($_POST['search']))&&(isset($_POST['replace']))) //check
    {
        $text = $_POST['text'];
        $search = $_POST['search'];
        $replace = $_POST['replace'];

        $find_length = strlen($search);

        if((!empty($text))&&(!empty($search))&&(!empty($replace))){
            while($position = strpos($text,$search,$offset)) //position 
            {
                $offset = $position + $find_length;
                $text =substr_replace($text,$replace,$position,$find_length);
            }
            echo $text;
        }else{
            echo 'please fill in all fields.';
        }
    }

?>


<form action="findReplace.php" method="post">
    <textarea name="text" rows="6" cols="30"></textarea><br>
    Search for:<br>
    <input type="text" name="search"><br>
    replace with:<br>
    <input type="text" name="replace"><br>
<input type="submit">
</form>