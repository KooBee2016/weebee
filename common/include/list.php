<html>

<body>
<h1>阪神</h1>

<?php

$server   = "mysql008.phy.lolipop.jp";              // 実際の接続値に置き換える
$user     = "LAA0291239";                           // 実際の接続値に置き換える
$pass     = "syutaisei";                            // 実際の接続値に置き換える
$database = "LAA0291239-weebee1212";



try{
	$dbh = new PDO("mysql:host=" . $server . "; dbname=".$database, $user, $pass );
	$dbh->query('SET NAMES utf8');
	$data=$dbh->query("select * from 6fes2015;");

	foreach($data as $fes){
		echo $fes["id"]."<br>";
		echo $fes["gender"]."<br>";
		echo $fes["name"]."<br>";
		echo $fes["department"]."<br>";
		echo $fes["grade"]."<br>";
		echo $fes["circle"]."<br>";
	}
}
catch(PDOException $e){
    echo "error occured.<br>";
    var_dump($e->getMessage());
}


?>

</body>


<?php

try {
    // MySQLサーバへ接続
    // $dbh = new PDO($dns, $dns_id, $dns_pw, array(PDO::ATTR_EMULATE_PREPARES => false));

    $dbh = new PDO("mysql:host=" . $server . "; dbname=".$database, $user, $pass );
    $dbh->query('SET NAMES utf8');
    $dbh->query("insert into 6fes2015 (gender,name,department,grade,circle) values ('$gender','$name','$department','$grade','$circle')");
 
}         
catch(PDOException $e){
    echo "error occured.<br>";
    var_dump($e->getMessage());
}

?>

</html>