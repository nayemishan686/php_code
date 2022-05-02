<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <p class="mt-3 text-center">
            <a href="/authentication/index.php?task=report" class="btn btn-primary">All Student</a>
        <?php if(isAdmin() || isEditor()): ?>
            <a href="/authentication/index.php?task=add" class="btn btn-primary">Add Student</a>
        <?php endif; ?>
        <?php if(isAdmin()) : ?>
            <a href="/authentication/index.php?task=seed" class="btn btn-primary">Seed</a>
        <?php endif; ?>
    </p>


    <div class="float-end">
		<?php
		if ( ! $_SESSION['loggedin'] ):
			?>
            <a href="/authentication/auth.php" class="btn btn-info">Log In</a>
		<?php
		else:
			?>
            <a href="/authentication/auth.php?logout=true" class="btn btn-danger">Log Out (<?php echo $_SESSION['role'];?>)</a>
		<?php
		endif;
		?>
       
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
