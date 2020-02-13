<?php
    $handle = fopen('names.txt','w');// w r a
    //$handle = fopen('names.txt','a');
    //$handle = fopen('names.txt','r'); or $handle = file('names.txt');
    
    //$datain=fread($handle,filesize($handle));
    fwrite($handle,'Songyi');//append and write
    //explode(',',$datain); - implode(',',$datain);

    //$directory = ''files';
    //$handle = opendir($directory.'/')  open
    //$file = readdir($handle)   read  cancel . and .. if need
    //use <a href="'.$directory.'/'.$file.'">'.$file.' </a>; to perform a hyperlink to the file
    
    //unlink('filetodelete.txt');  delete

    //rename($file,$rand.'.txt');
    fclose($handle);

    //isset and !empty
?>