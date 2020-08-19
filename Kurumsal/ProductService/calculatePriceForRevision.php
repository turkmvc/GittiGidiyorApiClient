<?php

include "../../client.php";
$client=new ggClient();

$deneme = $client->calculatePriceForRevision(587955657);
 print_r ($deneme);



?>