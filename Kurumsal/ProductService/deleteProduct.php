<?php

include "../../client.php";
$client=new ggClient();

$deneme = $client->deleteProduct([587955657]);
 print_r ($deneme);



?>