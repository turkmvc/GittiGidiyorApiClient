<?php

include "../../client.php";
$client=new ggClient();
$deneme = $client->getProducts(0,3,'L',true);
 print_r ($deneme);
//726748564


?>