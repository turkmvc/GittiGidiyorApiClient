<?php
     include "../../client.php";
     $client=new ggClient();
     
     $deneme = $client->getSales(0,5,true,'R','A','C','A');
      print_r ($deneme);