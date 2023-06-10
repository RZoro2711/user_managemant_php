<?php
include("vendor/autoload.php");
// use Helpers\HTTP;
// HTTP::redirect("/index.php", "error=register");

use Helpers\Auth;
Auth::check();


// use Faker\Factory as Faker;
// use Helpers\Auth;
// use Helpers\HTTP;
// use Libs\Database\UsersTable;

// $faker = Faker::create();
// echo $faker->address(); echo "<br>";
// echo $faker->name(); echo "<br>";
// echo $faker->phonenumber(); echo "<br>";
// echo $faker->email(); echo "<br>";

// Auth::check(); echo "<br>";
// HTTP::redirect(); echo "<br>";

// $db = new MySQL;
// $db->connect(); echo "<br>";

// $table = new UsersTable;
// $table->getAll();


// use Libs\Database\MySQL;
// use Libs\Database\UsersTable;
// use Faker\Factory as Faker;

// $faker = Faker::create();
// $table = new UsersTable(new MySQL);

// $table->insert([
//     "name" => $faker->name(),
//     "email" => $faker->email(),
//     "phone" => $faker->phoneNumber(),
//     "address" => $faker->address(),
//     "password" => "password",
// ]);


// print_r($table->getAll());





// $mysql = new MySQL;
// $db = $mysql->connect();

// $result = $db->query("SELECT * FROM roles");
// $rows = $result->fetchAll();
// print_r($rows);

