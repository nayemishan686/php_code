<?php 
//to see current working path
echo getcwd();

//to see current working directory file and folder name
//there has to option to see 1.scandir 2.readdir&opendir
$entries = scandir(getcwd());
print_r($entries);

//to see which is  file and folder in current working directory
foreach ($entries as $entry){
    if("." != $entry && ".." != $entry){
        if(is_dir($entry)){
            echo "[d] {$entry} \n";
        }else{
            echo "[f] {$entry} \n";
        }
    }
}

//to see how many directory has in this working directory
function countDir($directory){
    $count = 0;
    $entries = scandir($directory);
    foreach($entries as $entry){
        if("." != $entry && ".." != $entry){
            if(is_dir($entry)){
                $count++;
            }
        }
    }

    return $count;
}
echo countDir(getcwd());
echo PHP_EOL;

//to see how many file has in this working directory
function countFile($filename){
    $count = 0;
    $entries = scandir($filename);
    foreach($entries as $entry){
        if("." != $entry && ".." != $entry){
            if(is_dir($entry)){
            
            }else{
                $count++;
            }
        }
    }
    return $count;
}

echo countFile(getcwd()); 
echo PHP_EOL;

//use opendir for seeing current working directory
$entries = opendir(getcwd());
while(false !== ($entry = readdir($entries))){
    echo $entry ."\n";
}

