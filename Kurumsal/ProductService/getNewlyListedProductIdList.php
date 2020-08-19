<?php

include "../../client.php";
$client=new ggClient();

$deneme = $client->getNewlyListedProductIdList(0,10,true);
 print_r ($deneme);



?>