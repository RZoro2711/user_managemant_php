<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .wrap {
            width: 100%;
            max-width: 400px;
            margin: 40px auto;
        }
 </style>
</head>
<body class="text-center">
    <div class="wrap w-50">
        <h1 class="h3 mb-3">Login</h1>
        
        <?php if(isset($_GET['success'])) : ?>
            <div class="alert alert-info">
                Register Success!
            </div>
        <?php endif ?>

        <?php if(isset($_GET['error'])) : ?>
            <?php if($_GET["error"] === "register") :?>
                <div class="alert alert-warning">
                    Register Fail! Please Try Again.
                </div>
            <?php endif?>
            <?php if($_GET["error"] === "login") :?>
                <div class="alert alert-warning">
                    Email or Passowrd incorrect!
                </div>
            <?php endif?>
            <?php if($_GET["error"] === "suspended") :?>
                <div class="alert alert-warning">
                    Account Suspended!
                </div>
            <?php endif?>
        <?php endif ?>

        
        <form action="_actions/login.php" method="post">
            <input type="email" name="email" placeholder="Enter Your Email" class="form-control mb-2" required>
            <br>
            <input type="password" name="password" placeholder="Enter Your Password" class="form-control mb-2" required>

            <button type="submit" class="w-100 btn btn-lg btn-primary">
                logIn
            </button>
        </form>
        <br>
        <a href="register.php" class="btn btn-primary w-50">Register</a>
    </div>
    
</body>
</html>