<?php
function copyDir($source, $destination){
    $source = rtrim($source,"/");
    $destination = rtrim($destination,"/");

    if(!file_exists($destination)){
        mkdir($destination);
    }  
    foreach(scandir(__DIR__ .$source) as $file){
        if("." != $file && ".." != $file){
        $sourcePath = $source . "/" . $file;
        $destinationPath = $destination . "/" . $file;

        if(is_dir($sourcePath)){
            copyDir($sourcePath, $destination);
        }elseif(is_file($sourcePath)){
            copy($sourcePath, $destination);
        }
    }
    }
}


$source = getcwd()."sourcing/SESSION";
$destination = getcwd()."targeting/SESSION";

copyDir($source, $destination);