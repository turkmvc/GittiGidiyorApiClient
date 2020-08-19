<?php

include "../client.php";
$client=new ggClient();
$client-> getModifiedCities();

print_r($client);

?>