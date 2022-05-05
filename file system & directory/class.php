<?php 
class Dir{
    private $directory = [];
    private $files = [];
    function __construct($path) {
        if(is_readable($path)){
            $entries = scandir($path);
            foreach($entries as $entry){
                if('.' != $entry && '..' != $entry){
                    if(is_dir($entry)){
                        array_push($this->directory, $entry);
                    }else{
                        array_push($this->files, $entry);
                    }
                }
            }
        }
    }

    function getDirectories($index){
        if(isset($this->directory[$index])){
            return new Dir($this->directory[$index]);
        }else{
            throw new Exception("Directory index does not exist");
        }
    }
    
    function getDirectory(){
        return $this->directory;
    }

    function getFiles(){
        return $this->files;
    }
}

$obj = new Dir(getcwd());
print_r($obj->getDirectory());
print_r($obj->getFiles());

$show = $obj->getDirectories(12);
print_r($show);