<?php

include "../../client.php";
$client=new ggClient();
$deneme = $client->getStore();
 print_r ($deneme);



?>