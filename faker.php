<?php 
require_once __DIR__ . "/vendor/autoload.php";    
$faker = \Faker\Factory::create();
echo $faker->email . PHP_EOL;

