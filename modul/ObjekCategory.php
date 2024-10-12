<?php
require_once "Category.php";

$objkCategory = new Category();

$objkCategory->setName("Handphone");
$objkCategory->setExpensive(true);

echo "Name : {$objkCategory->getName()}" . PHP_EOL;
echo "Expensive : {$objkCategory->IsExpensive()}" . PHP_EOL;
 