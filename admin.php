<?php
    include("vendor/autoload.php");
    use Libs\Database\MySQL;
    use Libs\Database\UsersTable;
    use Helpers\Auth;

    $auth = Auth::check();

    $table = new UsersTable(new MySQL);

    $users = $table->getAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="navbar navbar-dark navbar-expands bg-primary">
        <div class="container ">
            <a href="#" class="navbar-brand">Admin</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="_actions/logout.php" class="btn btn-outline-light">Log out</a></li>
            </ul>
        </div>
    </div>
        <div class="container">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
                <?php foreach($users as $user) :?>
                    <tr>
                        <td><?=$user->id?></td>
                        <td><?=$user->name?></td>
                        <td><?=$user->email?></td>
                        <td><?=$user->phone?></td>
                        <td>
                            <?php if($user->value === 1) : ?>
                                <span class="badge bg-secondary">
                            <?php elseif($user->value === 2) : ?>
                                <span class="badge bg-info">
                            <?php elseif($user->value === 3) : ?>
                                <span class="badge bg-success">
                            <?php endif ?>
                                <?=$user->role ?>
                            </span>
                        </td>
                        <td>
                            <div class="btn-group dropdown">
                                <?php if($auth->value >= 3): ?>
                                    <a href="#" class="btn btn-outline-secondary btn-sm" data-bs-toggle="dropdown">Change Role</a>
                                    <div class="dropdown-menu dropdown-menu-dark">
                                        <a href="_actions/role.php?id=<?=$user->id?>&role=1" class="dropdown-item">User</a>
                                        <a href="_actions/role.php?id=<?=$user->id?>&role=2" class="dropdown-item">Editor</a>
                                        <a href="_actions/role.php?id=<?=$user->id?>&role=3" class="dropdown-item">Admin</a>
                                    </div>
                                <?php endif ?>


                                <?php if($auth->value >= 2): ?>
                                    <?php if($user->suspended) :?>
                                        <a href="_actions/unsuspend.php?id=<?= $user->id?>" 
                                        class="btn btn-warning btn-sm">Unban</a>
                                    <?php else :?>
                                        <a href="_actions/suspend.php?id=<?= $user->id?>" 
                                        class="btn btn-outline-warning btn-sm">Ban</a>
                                    <?php endif ?>
                                <?php endif ?>

                                <?php if($auth->value >= 3):?>
                                    <a href="_actions/delete.php?id=<?= $user->id?>"
                                    class="btn btn-outline-danger btn-sm">Del</a>
                                <?php endif ?>
                                
                            </div>
                        </td>  
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>