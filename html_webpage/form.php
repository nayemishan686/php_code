<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>

    <style>
        body{
            margin: 0px;
            padding: 80px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <h1 class="text-center">
                Welcome in my page
            </h1>
            <h2 class="text-center">First Form</h2>
            <p>
                <!-- This php code use to show user input in upper of form -->
                <?php if (isset($_POST['fname']) && !empty($_POST['fname'])): ?>
                Fname:<?php echo $_POST['fname']; ?> <br>
                <?php endif;?>

                <?php if (isset($_POST['lname']) && !empty($_POST['lname'])): ?>
                Lname:<?php echo $_POST['lname'] ?> <br>
                <?php endif;?>

            </p>
        </div>
    </div>

    <div class="container">
        <div class="row">
        <form action = "" method="post">
            <div class="mb-3">
                <label for="fname">Fname</label>
                <input type="text" id="fname" name="fname" class="form-control">
            </div>
            <div class="mb-3 pt-3">
                <label for="lname">Lname</label>
                <input type="text" id="lname" name="lname" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>

<!--
    label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->






    <!-- Javascript code -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>