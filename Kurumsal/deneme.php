<?php
include 'baglan.php';
// define variables and set to empty values
$json = file_get_contents('http://localhost/gittigidiyor/Kurumsal/ProductService/InsertProduct.php');

// Decode the JSON string into an object
$obj = json_decode($json);

// In the case of this input, do key and array lookups to get the values
var_dump($obj->results[0]->formatted_address);
?>