<?php

include "../../client.php";
$client=new ggClient();
$deneme = $client->getProductSpecs(58795565);
 print_r ($deneme);



?>