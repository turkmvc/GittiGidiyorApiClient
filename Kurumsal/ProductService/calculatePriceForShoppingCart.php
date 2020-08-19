<?php

include "../../client.php";
$client=new ggClient();

$deneme = $client->calculatePriceForShoppingCart([587955657]);
 print_r ($deneme);



?>