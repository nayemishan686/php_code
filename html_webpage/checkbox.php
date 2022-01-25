<?php 
    include_once "function.php";
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
            <h2 class="text-center">Welcome to my senitize form</h2>
            <h3 class="text-center">Nayem Hossain</h3>
        </div>
        
        <p>
            <?php 
                $fname = '';
                $lname = '';
                $checked = '';
                
            ?>
            <?php 
                // single checkbox checking
                if(isset($_POST['check1']) && $_POST['check1']==1){
                    $checked = 'checked';
                }

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
                <input type="checkbox" name="check1" id="check1" value = "1" <?php echo $checked; ?>>
                <label for="check1">Single checkbox</label>
                <br>
                <label class="check2">Multiple checkbox</label><br>

                <input type="checkbox" name="fruit[]" value = "orange" id="check2" <?php echo isFruitChecked('orange') ?> >
                <label for="check2">Orange</label><br>
                <input type="checkbox" name="fruit[]" value = "apple" id="check3" <?php echo isFruitChecked('apple') ?>>
                <label for="check3">Apple</label><br>
                <input type="checkbox" name="fruit[]" value = "lemon" id="check4" <?php echo isFruitChecked('lemon') ?>>
                <label for="check4">Lemon</label><br>
                <input type="checkbox" name="fruit[]" value = "jackfruit" id="check5" <?php echo isFruitChecked('jackfruit') ?>>
                <label for="check5">Jackfruit</label><br>
                <input type="checkbox" name="fruit[]" value = "coconut" id="check6" <?php echo isFruitChecked('coconut') ?>>
                <label for="check6">Coconut</label><br>

                <button class="btn btn-primary mt-3" type="Submit">Submit</button>    
            </form>
        </div>
    </div>





    <!-- Javascript code -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>