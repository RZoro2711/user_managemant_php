<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .wrap{
            width:100%;
            max-width: 400px;
            margin:40px auto;
        }
    </style>
</head>
<body>
    <div class="wrap">
        <h1 class="h3 mb-3">Register</h1>
        <form action="_actions/create.php" method="post">
            <input type="text" name="name" id="" class="form-control mb-2" placeholder="Name" required>
            <input type="email" name="email" id="" class="form-control mb-2" placeholder="Email" required>
            <input type="text" name="phone" id="" class="form-control mb-2" placeholder="Phone" required>
            <textarea type="text" name="address" class="form-control mb-2" placeholder="Address" required></textarea>
            <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
            <button type="submit" class="w-100 btn btn-lg btn-primary">Register</button>
        </form>
        <br>
        <a href="index.php" class="btn btn-primary w-25">Login</a>
    </div>
</body>
</html>