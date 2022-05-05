<?php 

    //to make a directory in same path
    //mkdir("testin");


    //to make some directory in recursively
    //mkdir("testing/d1/d2/d3",0777,true);


    //to open and delete directory
    // mkdir("testin");
    // sleep(3);
    // rmdir("testin");

    //to open and delete directory with files
    mkdir("testin");
    file_put_contents("testin/d1.txt","Hello World");
    sleep(3);
    // unlin(k("testin/d1.txt");
    // rmdir("testin");
    
    deleteDir(getcwd().'/'.'testin');

    //fuction generate to creat directory and file also delete them
    function deleteDir($path){
        $filesInFath = scandir($path);
        if(count(scandir($path))>2){
            foreach($filesInFath as $file){
                if("." != $file && ".." != $file){
                    $filepath = $path."/".$file;
                    unlink($filepath);
                }
            }
        }
        rmdir($path);
    }
?>