<?php
include("../vendor/autoload.php");
use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;

$id = $_GET["id"];
$role = $_GET["role"];

$table = new UsersTable(new MySQL);
$result =  $table->changeRole($id, $role);

if($result){
    HTTP::redirect("/admin.php");
}else{
    HTTP::redirect("/admin.php?error=suspend");
}