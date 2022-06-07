<?php
session_start();

$keyword = $_GET["text"];
echo "検索キーワードは、<b><u>「".$keyword."」</u></b><br><br>";
$pdo = new PDO("mysql:dbname=test;host=mydb","root","password");

$stmt = $pdo->prepare("select * from dev where id = ?");
$stmt->bindValue(1,1);
$stmt->execute();

$result = $stmt->fetch();
echo $result["name"];



// $mysqli = new mysqli("mydb","root","password","test");

// $sql = "select * from dev where `category` = '{$keyword}';";
// $result = $mysqli->query($sql);

// while($row = $result->fetch_assoc()){
//   echo $row["id"].":".$row["category"]."->".$row["name"]."<br>";
// }