<?php
    session_start();
    $_SESSION['secure']=rand(1000,9999);
?>

<img src="captcha.php" /><br>

<?php
    echo $_SESSION['secure'];    
?>