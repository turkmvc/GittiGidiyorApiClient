<?php

include "../client.php";
$client=new ggClient();
$a=$client->getCities(0,3);

print_r($a);

?>