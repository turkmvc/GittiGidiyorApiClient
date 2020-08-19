<?php

include "../../client.php";
$client=new ggClient();
$deneme = $client->updateProductVariants(58795565);
 print_r ($deneme);



?>