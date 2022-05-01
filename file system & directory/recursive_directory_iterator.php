<?php
$rdi = new RecursiveDirectoryIterator(getcwd(),RecursiveDirectoryIterator::SKIP_DOTS);
$files = new RecursiveDirectoryIterator($rdi);
foreach ($files as $file){
    echo $file->getPath().DIRECTORY_SEPARATOR.$file->getFileName()."\n";
}