<?php 
    function senitize($dataValues){
        $dataValues = trim($dataValues);
        $dataValues = stripslashes($dataValues);
        $dataValues =  htmlspecialchars($dataValues);
        return $dataValues;
    }
?>