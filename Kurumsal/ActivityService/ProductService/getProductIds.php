<?php

include "../../client.php";
$client=new ggClient();
$deneme = $client->getProductIds(0,5,[587955657]);
 print_r ($deneme);



?>