<?php

include "../../client.php";
$client=new ggClient();
$deneme = $client->relistProducts([58795565]);
 print_r ($deneme);



?>