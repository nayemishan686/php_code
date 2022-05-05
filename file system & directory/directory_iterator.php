<?php
//to show all files and folder in the current directory
$obj = new DirectoryIterator('./');
foreach ($obj as $file) {
    if($file->isDot()){
        continue;
    }
    if($file->isDir()) {
        echo $file->getPathname()." this is directory\n";
    }else{
        echo $file->getPathname()." this is file\n";
    }
}