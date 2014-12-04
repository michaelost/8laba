<?php
header('Content-Type: application/json');
 $db = mysql_connect ("localhost","root","123qweasdzxcv");
 mysql_select_db("laba",$db);

 $query3 = "SELECT * FROM topic";
$result3 = mysql_query($query3,$db);
/*
$row3 = mysql_fetch_array($result3,MYSQL_ASSOC);
*/

 $mass =array();

for($i = 0; $i<mysql_num_rows($result3);$i++){
$row3 = mysql_fetch_array($result3,MYSQL_ASSOC);
$opa = json_encode($row3);
array_push($mass, $opa);
}
 			 

echo "dadas";
echo $mass[5];
?>