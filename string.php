<?php
    $offset = 0;
    $find='is';
    $find_length = strlen($find);
    $string = 'This is a good things.Try isn\'t it fun?';

    while($position = strpos($string,$find,$offset)) //position 
    {
        echo $find.' at word '.$position.'<br>';
        $offset = $position + $find_length;
    }

    $string_new = substr_replace($string ,'songyi',15 ,6); //first way
    $new_string = str_replace('is','',$string);
    echo $string_new.'<br>'.$new_string.'<br>';

    /*
    $string_shuffled =str_shuffle($string);   -shuffle word

    $half = substr($string_shuffled,0,5);     -random generator 5 word

    strrev($string)    				-reverse string 
    similar_text($string_one,$string_two,$result);  -similarity in percent 
    strlen()

    trim(),ltrim(),rtrim()

    addslashes               			-add slash before symbol

    sort($colors); sort the array in order
    rsort(); decending
    */

    

    $count1 = str_word_count($string);     //0 = word,1 = array,2 = string
    $count2 = str_word_count($string,1);
    echo $count1.'<br>';
    print_r($count2);

    if (preg_match('/is/',$string)) {      //search or matching
        echo '<br>match found.<br>';
    }else {
        echo '<br>no match found.<br>';
    }


?>