<?php

include "../client.php";
$client=new ggClient();
$result=$client->createApplication("ASzvDFJ42mPRXphqtmPY",
"test.cevizsoft",
"Pazaryeri Entegrasyonu",
"I",
"W",
"");
print_r($result);

?>