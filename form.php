<html>
<body>

<?php
    if((isset($_POST['name']))&&!empty($_POST['name']))
    {
        echo 'works';
    }

    //upload img
    //<form action="submit.php" method="post" enctype=multipart/form-data"></form>
    //$_FILES['FILE']['NAME']; NAME ,size ,type , tmp_name , error
    //$location = 'form/'  folder name
    //move_uploaded_file($tmp_name,$location.$name);upload
    //set type only
    //$extension =substr($name,strpos($name,'.')+1);
    //$type = $_FILES['FILE']['type'];
    //(extension=='jpg' or 'jpeg') and ($type ='image/jpeg' or 'jpg')
?>

<form action="submit.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>