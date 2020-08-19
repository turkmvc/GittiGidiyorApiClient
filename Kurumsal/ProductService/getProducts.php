<?php

include "../../client.php";
$client=new ggClient();
$deneme = $client->getProducts(0,3,'L',false);
 print_r ($deneme);



?>