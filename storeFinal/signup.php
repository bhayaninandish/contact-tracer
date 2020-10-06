<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Register</title>
    <link rel="stylesheet" href="formstyle.css" >
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div">
                <form action="signup.php" method="POST">
                   <!-- <h3 class="text-center">Store Registration for Contact Tracer</h3>
-->
                    <?php if(count($errors)>0): ?>
                    <div class="alert alert-danger">
                        <?php foreach($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                    
                    <div class="form-group">
                    <label for="username">Storename</label>
                    <input type="text" name="storename" value="<?php echo $storename; ?>" class="form-control form-control-lg">
                    </div>
                
                    <div class="form-group">
                    <label for="aadhar">Aadhar</label>
                    <input type="text" name="aadhar" value="<?php echo $aadhar; ?>" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="<?php echo $email; ?>" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                    <label for="pnumber">Phone </label>
                    <input type="text" name="pnumber" value="<?php echo $pnumber; ?>" class="form-control form-control-lg">
                    </div>
                
                    <div class="form-group">
                    <label for="address">Address</label>
                    <textarea class="form-control form-control-lg" id="address"  rows="3" name="address" value="<?php echo $address; ?>"></textarea>
                    </div>
  
                    <div class="form-group">
                        <button type="submit" name="signup-btn" class="btn btn-primary btn-block btnlg">Register Store</button>
                    </div>
                
                    
                </form>

            </div>
        </div>
    </div>
</body>
</html>