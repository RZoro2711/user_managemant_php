<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;


$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$password = $_POST["password"];

$table = new UsersTable(new MySQL);

$id = $table->insert([
    "name" =>$name,
    "email" =>$email,
    "phone" =>$phone,
    "address" =>$address,
    "password" =>$password,
]);

if($id){
    HTTP::redirect("/index.php", "success=register");
}else{
    HTTP::redirect("/index.php", "error=register");
    
}