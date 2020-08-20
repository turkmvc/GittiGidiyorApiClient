<?php

include "../../client.php";
$client=new ggClient();
$deneme = $client->getStockAndPrice([58795565]);
 print_r ($deneme);



?>