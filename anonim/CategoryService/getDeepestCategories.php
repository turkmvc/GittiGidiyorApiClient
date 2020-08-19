<?php

include "../client.php";
$client=new ggClient();
$client->getProducts();

print_r($client);

?>