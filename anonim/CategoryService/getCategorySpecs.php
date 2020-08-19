<?php

include "../client.php";
$client=new ggClient();
$client->getCategorySpecs("sgf");

print_r($client);

?>