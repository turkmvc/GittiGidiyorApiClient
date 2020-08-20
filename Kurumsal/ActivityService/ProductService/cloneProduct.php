<?php

include "../../client.php";
$client=new ggClient();

$deneme = $client->cloneProduct(587955657,85);
 print_r ($deneme);



?>