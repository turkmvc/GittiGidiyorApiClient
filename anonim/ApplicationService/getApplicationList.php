<?php

include "../client.php";
$client=new ggClient();

$developerId=$client->getDeveloperId();
$result=$client->getApplicationList($developerId);
print_r($result);

?>