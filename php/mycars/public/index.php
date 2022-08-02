<?php 

require '../vendor/autoload.php';

use App\Models\Car;
use App\Models\CarRepository;
use App\Models\DbConnect;


$dbconnect = new DbConnect();
$carRepo = new CarRepository($dbconnect);

/*
$c = new Car();
$c->id = 2;
$c->name = "Tesla";
$c->release = "2022-06-02";
$carRepo->insert($c);*/


sleep(1);



$result = $carRepo->selectAll();

echo '<pre>' . var_export($result, true);

echo '<br>';
echo 'Hello';
