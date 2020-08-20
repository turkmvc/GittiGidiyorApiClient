<?php
     include "../../client.php";
     $client=new ggClient();
     
     $deneme = $client->getSale(587955657);
      print_r ($deneme);
