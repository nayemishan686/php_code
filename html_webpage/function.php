<?php 

    //all kind of checkboxe checked function
    function isChecked($inputName, $value){
        if(isset($_POST[$inputName]) && is_array($_POST[$inputName]) && in_array($value, $_POST[$inputName])) {
            echo 'checked';
        }
    }

    //only fruits checked function can use this function
    function isFruitChecked($value){
        if(isset($_POST['fruit']) && is_array($_POST['fruit']) && in_array($value, $_POST['fruit'])){
            echo 'checked';
        }
    }


?>