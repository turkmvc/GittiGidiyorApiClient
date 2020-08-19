<?php

include "../../client.php";
$client=new ggClient();
$deneme = $client->updatePrice(587955657,"",4.80,false);
 print_r ($deneme);



?>