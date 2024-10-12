<?php 
require_once "Location.php";

// Membuat Objek
$obj1 = new Location(); // Error karenan class abstract tdak bisa dibuat sebagai object
$obj2 = new City(); // 
echo $obj2->pkl();


?>