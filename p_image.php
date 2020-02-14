<?php
    header('Content-type: image/jpeg');

    $email = 'songyi753@hotmail.com';
    $EMAIL_LENGTH = STRLEN($email);

    $font_size = 4;

    $image_height = ImageFontHeight($font_size);
    $image_width = ImageFOntWidth($font_size)*$EMAIL_LENGTH;

    $image = imagecreate($image_width,$image_height);

    imagecolorallocate($image,255,255,255);
    $font_color = imagecolorallocate($image,0,0,0);

    imagestring($image,$font_size,0,0,$email,$font_color);
    imagejpeg($image);
?>