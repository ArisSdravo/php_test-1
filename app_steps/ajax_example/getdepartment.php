<?php
    require dirname(__FILE__,2).'/vendor/autoload.php';

    include dirname(__FILE__,2).'/connect.php';
    
    // Uncomment for localhost running
    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__FILE__,2));
    $dotenv->load();

    $MDB_USER = $_ENV['MDB_USER'];
    $MDB_PASS = $_ENV['MDB_PASS'];
    $ATLAS_CLUSTER_SRV = $_ENV['ATLAS_CLUSTER_SRV'];

    $connection = new Connection($MDB_USER, $MDB_PASS, $ATLAS_CLUSTER_SRV);
    $collection = $connection->connect_to_department();
    $data = $collection->find()->toArray();
    
    
    // get the q parameter from URL
    $q = $_REQUEST["q"];

    $hint = "";

    if ($q !== "") {
        $q = strtolower($q);
        $len=strlen($q); //strlen: length of string
        foreach($a as $name) {
          if (stristr($q, substr($name, 0, $len))) {
            // stristr: It searches for the first occurrence of a string inside another string and displays the portion of the latter starting from the first occurrence
            //substr: Return part of a string
            if ($hint === "") {
              $hint = $name;
            } else {
              $hint .= ", $name";
            }
          }
        }
    }

    foreach($data as $value) {
        $hint .= ", $name";
        echo  $value['name']."\n";
    }
?>