
<?php

include "../../client.php";
$client=new ggClient();

$deneme = $client->getCargoInformation(6901443257119);
 print_r ($deneme);



?>