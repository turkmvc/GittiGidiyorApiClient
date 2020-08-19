

<?php

include "../../client.php";
$client=new ggClient();

$deneme = $client->sendCargoInformation(314740020001,12345,"mng","Türkiye","www.mngcargo.com","S");
 print_r ($deneme);



?>