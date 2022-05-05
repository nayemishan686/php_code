<?php 
    //for session name
    session_name('first');
    //To start the session
    session_start([
        //for set cookies lifetime
        'cookie_lifetime' => 60
    ]);
    //To store a value in the session by a key
    $_SESSION['username'] = "Nayem";
    $_SESSION['password'] = "Ishan";

    //To remve username
    //unset($_SESSION['username']);

    //to remove full session
    //session_unset();

    echo $_SESSION['username'];
    echo "<br>";
    echo $_SESSION['password'];

    

    //code for destroy the session
    // session_destroy();



?>