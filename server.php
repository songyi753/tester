<?php
    $script_name = $_SERVER['SCRIPT_NAME'];
    $host = $_SERVER['HTTP_HOST'];
    $images = $host.'/images/';

    $redirect_page = 'http:///www.youtube.com/';
    $redirect = true;

    if($redirect){
        header('Location:'.$redirect_page);
    }

?>

<form action="<?php echo $script_name; ?>" method="post">
    <input type="submit" name="submit" value="Submit">
</form>