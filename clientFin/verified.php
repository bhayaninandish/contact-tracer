<?php 
require_once "controllers/authController.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css" >
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div mt-5">
                
                <h3>Welcome to contact tracer <?php echo $email; ?></h3>
                <a href="index.php"><button class="btn btn-primary btn-block btn-lg" >Customer is registered</button></a>
                
                
                

            </div>
        </div>
    </div>
</body>
</html>