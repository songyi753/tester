<html>
<body>

<?php
    if((isset($_POST['name']))&&!empty($_POST['name']))
    {
        echo 'works';
    }
?>

<form action="submit.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>