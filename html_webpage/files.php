 <?php 
    $allowedTypes = array(
        "image/jpg",
        "image/jpeg",
        "image/png"
    );
    if($_FILES["photo"]){
        if(in_array($_FILES["photo"]["type"],$allowedTypes) !== false && $_FILES["photo"]["size"] < 5*1024*1024){
            move_uploaded_file($_FILES["photo"]["tmp_name"], "files/".$_FILES["photo"]["name"]);
        }
    }
 
 
 ?>

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
               
            <?php 
                $fname = '';
                $lname = '';
            ?>
            <?php if(isset($_POST['fname']) && $_POST['fname'] !=''):?>
                <?php $fname = $_POST['fname'];?>
                Fname = <?php echo $fname;?>
            <?php endif;?>
            <br>

            <?php if(isset($_POST['lname']) && $_POST['lname']!=''):?>
                <?php $lname = $_POST['lname'];?>
                Lname = <?php echo $lname;?> 
            <?php endif; ?>


                <pre>
                    <?php print_r($_POST);?>
                    <?php print_r($_FILES);?>
                </pre>

                
            </p>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
        <form action = "" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="fname">Fname</label>
                <input type="text" id="fname" name="fname" class="form-control" value="<?php echo $fname;?>">
            </div>
            <div class="mb-3 pt-3">
                <label for="lname">Lname</label>
                <input type="text" id="lname" name="lname" class="form-control" value="<?php echo $lname;?>">
            </div>
            <div class="pb-3">
                <input type="file" name = "photo" id="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>






    <!-- Javascript code -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>