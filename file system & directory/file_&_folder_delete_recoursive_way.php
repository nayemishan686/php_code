<?php
mkdir("testin/d1/d2/d3",0777,true);
file_put_contents("testin/f.txt","Hello World");
file_put_contents("testin/d1/f.txt","Hello World");
file_put_contents("testin/d1/d2/f.txt","Hello World");
file_put_contents("testin/d1/d2/d3/f.txt","Hello World");
sleep(10);

deleteDir("testin");

function deleteDir($path) {
    if(!is_readable($path)){
        return;
    }
    $fileInFath = scandir($path);
    if(count(scandir($path)) > 2) {
        foreach($fileInFath as $file){
            if("." != $file && ".." != $file){
                $filefath = $path."/".$file;
                if(is_dir($filefath)){
                    deleteDir($filefath);
                }else{
                    unlink($filefath);
                }
            }
        }
    }
    rmdir($path);
}