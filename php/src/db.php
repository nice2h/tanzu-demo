<?php
$mysqli = new mysqli("mydb","root","password","test");
$sql = "select * from dev";
$result = $mysqli->query($sql);
while($row = $result->fetch_assoc()){
  echo $row["id"].":".$row["category"]."->".$row["name"]."<br>";
}