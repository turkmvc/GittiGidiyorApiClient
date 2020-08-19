<?php

include "../client.php";
$client=new ggClient();
$deneme = $client->getCategory("b",true);
print_r ($deneme);


?>