<?php
include("../vendor/autoload.php");
use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Faker\Factory as Faker;
// use Faker\Factory as Faker;

$faker = Faker::create();
$table = new UsersTable(new MySQL);

echo "Clearing users table.....<br>";
$table->clear();

echo "Started population users table.....<br>";

for($i=0; $i<5; $i++){
    $table->insert([
            "name" => $faker->name(),
            "email" => $faker->email(),
            "phone" => $faker->phoneNumber(),
            "address" => $faker->address(),
            "password" => "password",
        ]);
}
echo "Done population users table.....<br>";