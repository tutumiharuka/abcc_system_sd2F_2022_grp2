<?php

$pdo = new PDO('mysql:host=mysql209.phy.lolipop.lan;dbname=LAA1418471-gamedb;charset=utf8','LAA1418471','password');
//     //DB接続
// $pdo = new PDO('mysql:host=localhost;dbname=webdb;charset=utf8','webuser','abccsd2');
$sql = "SELECT * FROM shohins";
$games = $pdo->query($sql);
foreach($games as $row){
     echo $row['shohin_name']."<br>";
     echo "---------------------------------------------------------------<br>";
}

?>