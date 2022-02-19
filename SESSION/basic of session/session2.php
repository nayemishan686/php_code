<?php 
//pass basic session username
    session_name('first');
    session_start();
    echo $_SESSION['username'];
?>