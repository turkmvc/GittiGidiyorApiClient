<?php

include "../../client.php";
$client=new ggClient();
$deneme = $client->updateStock(587955657,"",200,false);
 print_r ($deneme);



?>