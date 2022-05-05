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
            <h2 class="text-center">Welcome to my senitize form</h2>
            <h3 class="text-center">Nayem Hossain</h3>
        </div>
        
        <p>
            <?php 
                $fname = '';
                $lname = '';
            ?>
            <?php if(isset($_POST['fname']) && !empty($_POST['fname'])){
                $fname = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING);
            } ?>
            <?php if(isset($_POST['fname']) && !empty($_POST['fname'])){
               $lname = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_STRING);
            } ?>   
        </p>
        <p>
            Fname: <?php echo $fname; ?> <br>
            Lname: <?php echo $lname; ?> <br>
        </p>
    </div>

    <div class="container">
        <div class="row">
            <form action="" method="post">
                <div class="mb-3">
                <label for="fname">First name:</label>
                <input type="text" name="fname" id="fname" class="form-control" value="<?php echo $fname; ?>">
                </div>
                <div class="mt-3">
                <label for="lname">Last name:</label>
                <input type="text" name="lname" id="lname" class="form-control" value="<?php echo $lname; ?>">
                </div>
                <button class="btn btn-primary mt-3" type="Submit">Submit</button>
            </form>
        </div>
    </div>





    <!-- Javascript code -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>