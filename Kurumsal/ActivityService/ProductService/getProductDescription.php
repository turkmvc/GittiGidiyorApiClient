<?php

include "../../client.php";
$client=new ggClient();
$deneme = $client->getProductDescription(58795565);
 print_r ($deneme);



?>