<?php 
    session_start();
    require_once 'function.php';
    $username = senitize($_POST['username']);
    $password = senitize($_POST['password']);
    $error = false;
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($username) && ($password)){
        if('admin' == $username && '956f7172d574af630d202995c2e9a8c464a19c60' == sha1($password)){
            $_SESSION['loggedin'] = true;
        }else{
            $error = true;
            $_SESSION['loggedin'] = false;
        }
    }
    if(empty($username || $password)) {
        $required = '<blockquote class = "alert alert-danger">Username and password must need to fill.</blockquote>' ;  
    }
}


    if(isset($_POST['logout'])){
        $_SESSION['loggedin'] = false;
        session_destroy();
    }
    // session_destroy();
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
            <?php else:?>
                <q>Welcome to your dashboard. Happy journey!</q>
            <?php endif; ?>
        </div>
        <div class="row">
            <?php if(false == $_SESSION['loggedin']):?>
                <form action="" class="w-50 m-auto" method="post">
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
                    <button type="submit" name="login" class="btn btn-danger">Submit</button>
                </form>
            <?php else: ?>
                <form action="" class="w-50 m-auto" method="post">
                    <input type="hidden" name="logout">
                    <button type="submit" name="login" class="btn btn-danger">Log Out</button>
                </form>
            <?php endif; ?>
        </div>
        
    </div>

    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>