<?php

include "../../client.php";
$client=new ggClient();
$deneme = $client->getProductsByIds([58795565]);
 print_r ($deneme);



?>