<?php

use App\Customer;
use App\Invoice;

require_once __DIR__ . '/../vendor/autoload.php';

declare(strict_types=1);

enum Status { 
    case Loading;
    case Error;
    case Success;
};

$status = Status::Success;

$transaction = new Transaction(null, "poop");

$transaction->getAmount();

/** @var string */
$name = "larry";

for ($i = 0; $i < strlen($name); $i++){
echo"$i";
}

$foods = array("apple", "orange", "banana", "coconut");

$object = array (
"name"=> "larry",
"age"=> 36,
"country"=> "Belgium",
"job"=> "developer"
);

echo $object["job"];

$object["name"] = "hannah";

array_pop($object);
array_shift($object);
$keys = array_keys($object);

foreach($keys as $key => $value) {
    echo "{$key} {$value}";
}

foreach($foods as $food){
    echo"$food";
};

$sayHello = fn(string $hello): string => $hello;

echo $sayHello("larry");

/** @var float */
$gpa = 2.5;


$sanitize = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS)

?>

<!DOCTYPE html>

<script get="GET"></script>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="index.php" method="get">
<button>{{$gpa}}</button>
</form>

</body>
</html>