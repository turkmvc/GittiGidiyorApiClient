<?php

include "../client.php";
$client=new ggClient();
$client->getModifiedCategories();

print_r($client);

?>