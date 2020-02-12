<?php

    if((isset($_POST['name1']))&&!empty($_POST['name'])) //check
    {
        echo 'works<br>';
    }

    echo "Name is " . $_POST['name1'] . " Email is " . $_POST['email'];

?>