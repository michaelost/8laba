<?php
header('Content-Type: application/json');
 $db = mysql_connect ("localhost","root","123qweasdzxcv");
 mysql_select_db("laba",$db);
$first = $_POST['first'];
$second = $_POST['second'];
$isfirst= $_POST['isfirst'];
$query = "SELECT * FROM topic WHERE topic_id <> '".$first."' AND topic_id <> '".$second."' ORDER BY RAND() LIMIT 20";
$res  = mysql_query($query,$db);
$result = mysql_fetch_array($res,MYSQL_ASSOC);
echo json_encode($result,true);
?>