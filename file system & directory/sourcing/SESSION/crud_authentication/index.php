<?php 
    require_once 'inc/functions.php';
    $info = '';
    $error = $_GET['error'] ?? 0;
    $task = $_GET['task'] ?? 'report';

    if('seed' == $_GET['task']){
        if(!isAdmin()){
            header('Location: /authentication/index.php');
        }
        seed();
        $info = "Seeding is done";
    }

    //code for delete student
    if('delete' == $_GET['task']){
        if(!isAdmin()){
            header( 'location: /authentication/index.php' );
            return;
        }
        $id = sanitizing($_GET['id']);
        if($id>0){
            deleteStudent($id);
            header( 'location: /authentication/index.php?task=report' );
        }
    }


    //code for student data
    $fname = '';
    $lname = '';
    $roll = '';
    if(isset($_POST['submit'])){
    $fname = sanitizing($_POST['fname']);
    $lname = sanitizing($_POST['lname']);
    $roll = sanitizing($_POST['roll']);
    $id = sanitizing($_POST['id']);
    //code for add new student information
    if($id){
        if($fname != '' && $lname != '' && $roll != ''){
            $result = upadateStudent($id, $fname, $lname, $roll);
            if($result){
                header( 'location: /authentication/index.php?task=report' );
            }else{
                $error = 1;
            }

        }
    }else{
        if($fname != '' && $lname != '' && $roll != ''){
            $result = addStudent($fname, $lname, $roll);
            if($result){
                header( 'location: /authentication/index.php?task=report' );
            }else{
                $error = 1;
            }
            
        }
    }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            overflow-y: scroll;
        }
        #main-content {
            min-height: 80vh;
        }
        footer p{
            font-size: 16px;
        }
    </style>
</head>
<body>
    <!-- Start Header Section -->
    <header>
        <div class="container-fluid text-center bg-secondary text-white p-2">
            <div class="row">
                <h2>CRUD Project</h2>
                <h4>This project has been developed by Raw PHP</h4>
            </div>
        </div>
    </header>
    <!-- End Header Section -->
    
    <!-- Start Main-Content Section -->
    <section id="main-content" class="container">
        <section id="nav">
            <?php include_once ('inc/templates/nav.php') ?>
            <hr>

            <!-- Code for seeding report -->
            <?php 
                if($info != ''){
                    echo "<p>$info</p>";
                }
            ?>
        </section>
        <!-- Code for duplicated roll -->
        <?php if(1 == $error):?>
            <section id="duplicate">
                <blockquote>
                    Duplicate Roll Number
                </blockquote>
            </section>
        <?php endif; ?>
        <!-- Code for Generating Reports -->
        <?php if('report' == $task):?>
            <section id="report">
                <?php generateReport(); ?>
            </section>
        <?php endif; ?>
        
        <!-- Code for add new student -->
        <?php if('add' == $task):
            if(!hasPrivilege()){
                header( 'location: /authentication/index.php' );
                return;
            }    
        ?>
            <section id="add-student">
                <form action="/authentication/index.php?task=report" method="POST">
                    <label for="fname">First Name :</label>
                    <input type="text" name="fname" id="fname" placeholder="Enter your first name" class="form-control mt-2 mb-2" value="<?php echo $fname; ?>">
                    <label for="lname">Last Name :</label>
                    <input type="text" name="lname" id="lname" placeholder="Enter your last name" class="form-control mt-2 mb-2" value="<?php echo $lname; ?>">
                    <label for="roll">Roll :</label>
                    <input type="number" name="roll" id="roll" placeholder="Enter your roll number" class="form-control mt-2 mb-2" value="<?php echo $roll; ?>" >
                    <input type="submit" value="Save" name="submit" id="save" class="btn btn-success">
                </form>
            </section>
        <?php endif; ?>

        <!-- Code for editing created student -->
        <?php if('edit' == $task):
            if(!hasPrivilege()){
                header( 'location: /authentication/index.php?task=report');
            }
            $id = sanitizing($_GET['id']);
            $student = getStudent($id);
            if($student):   
            
        ?>
            <section id="edit-student">
                <form  method="POST">
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <label for="fname">First Name :</label>
                    <input type="text" name="fname" id="fname" placeholder="Enter your first name" class="form-control mt-2 mb-2" value="<?php echo $student['fname']; ?>">
                    <label for="lname">Last Name :</label>
                    <input type="text" name="lname" id="lname" placeholder="Enter your last name" class="form-control mt-2 mb-2" value="<?php echo $student['lname']; ?>">
                    <label for="roll">Roll :</label>
                    <input type="number" name="roll" id="roll" placeholder="Enter your roll number" class="form-control mt-2 mb-2" value="<?php echo $student['roll']; ?>" >
                    <input type="submit" value="Update" name="submit" id="save" class="btn btn-success">
                </form>
            </section>
        <?php
        endif; 
        endif; 
     ?>

        
    </section>

    
    <!-- End Main-Content Section -->


    <!-- Start Footer Section -->
    <footer>
        <div class="container-fluid text-center bg-secondary text-white p-1">
            <div class="row">
                <p class="mt-2">Copyright &copy; ALl Rights Reserved Nayem Hossain Ishan.</p>
            </div>
        </div>
    </footer>
    <!-- End Footer Section -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>