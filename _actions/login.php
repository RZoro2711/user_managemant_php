<?php
include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;

$email = $_POST["email"];
$password = $_POST["password"];

$table = new UsersTable(new MySQL);
$user = $table->findByEmailAndPassword($email, $password);
// echo $password;

if($user){
    if($user->suspended){
        HTTP::redirect("/index.php", "error=suspended");
    }

    session_start();
    $_SESSION["user"] = $user;
    HTTP::redirect("/profile.php");
}
HTTP::redirect("/index.php", "error=login");
