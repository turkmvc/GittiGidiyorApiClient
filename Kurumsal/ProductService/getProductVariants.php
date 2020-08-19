<?php

include "../../client.php";
$client=new ggClient();
$deneme = $client->getProductVariants(587955657);
 print_r ($deneme);



?>