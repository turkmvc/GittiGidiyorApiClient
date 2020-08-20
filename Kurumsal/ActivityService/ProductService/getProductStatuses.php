<?php

include "../../client.php";
$client=new ggClient();
$deneme = $client->getProductStatuses([58795565]);
 print_r ($deneme);



?>