<?php

include "../client.php";
$client=new ggClient();
$deneme = $client->getCategories(false,false,false);
 print_r ($deneme);



?>