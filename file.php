<?php

if(file_exists("file.php")){
    echo "the file exists";
} else{
    echo "file does not exists";
}
$mfile=fopen("phpunit.php","r")or die("File not present in path");

    //echo fread($mfile, filesize("file.php"));
   /* while(!feof($mfile)){

        echo fgets($mfile);
        
    }
    fclose($mfile);*/
    $txt = "Rudraksh";
    fwrite($mfile,"\n");
    fwrite($mfile,$txt);
    fwrite($mfile,"\n");
    $txt="Bangalore";
    fwrite($mfile,$txt);
    fclose($mfile);

?>

    