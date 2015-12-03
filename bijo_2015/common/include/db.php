<?php
$server   = "mysql008.phy.lolipop.jp";              // 実際の接続値に置き換える
$user     = "LAA0291239";                           // 実際の接続値に置き換える
$pass     = "syutaisei";                            // 実際の接続値に置き換える
$database = "LAA0291239-weebee1212";                // 実際の接続値に置き換える
 

?>

<?php

try {
    // MySQLサーバへ接続
    // $dbh = new PDO($dns, $dns_id, $dns_pw, array(PDO::ATTR_EMULATE_PREPARES => false));

    $dbh = new PDO("mysql:host=" . $server . "; dbname=".$database, $user, $pass );
    $dbh->query('SET NAMES utf8');
 
}         
catch(PDOException $e){
    echo "error occured.<br>";
    var_dump($e->getMessage());
}

?>