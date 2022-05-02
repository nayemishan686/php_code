<?php 
    session_start();
    require_once 'inc/functions.php';
    //$filename = "/opt/lampp/htdocs/Learn With Hasin Hayder/php_code/SESSION/crud_authentication/data/data.txt";
    $username = sanitizing($_POST['username']);
    $password = sanitizing($_POST['password']);
    $error = false;
    $fp = fopen("data/data.txt", "r");

    if ( $username && $password ) {
        $_SESSION['loggedin'] = false;
        $_SESSION['user'] = false;
        $_SESSION['role'] = false;
        while ( $data = fgetcsv( $fp ) ) {
            if ( $data[0] == $username && $data[1] == sha1( $password ) ) {
                $_SESSION['loggedin'] = true;
                $_SESSION['user'] = $username;
                $_SESSION['role'] = $data[2];
                header('location:index.php');
            }
        }
        if(!$_SESSION['loggedin']) {
            $error = true;
        }
    }


    if(isset($_GET['logout'])){
        $_SESSION['loggedin'] = false;
        $_SESSION['user'] = false;
        $_SESSION['role'] = $false;
        session_destroy();
        header('location:index.php');
    }

    //session_destroy();
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Logout System Using Session</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    /* Google fonts link */
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');

    /* Main code for login & logout */
    html, body{
        margin: 0;
        padding: 20px;
        font-size: 16px;
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
    }
    q{
        font-size: 18px;
        margin-bottom: 30px;
        color: #03045e;
    }
    blockquote{
        color: red;
    }
</style>
<body>
    <div class="container">
        <div class="row text-center">
            <h2>Login Panel</h2>
            <?php if(false ==  $_SESSION['loggedin']):?>
                <q>Hi Man. How are you? if you have any conrtol panel of CRUD projects, please Login by your valid username and password</q>
            <?php endif; ?>
        </div>
        <div class="row">
            <?php if(false == $_SESSION['loggedin']):?>
                <form class="w-50 m-auto" method="post">
                    <?php 
                    if($error){
                        echo '<blockquote class = "alert alert-danger">Username or password did not match.</blockquote>' ;  
                    } 
                    echo $required;
                    ?>
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="" placeholder="Enter your username" class="form-control mb-3">
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="" class="form-control mb-3" placeholder="Enter your password" class="form-control">
                    <button type="submit" name="login" class="btn btn-success">Submit</button>
                </form>
            <?php endif; ?>
        </div>
        
    </div>

    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>