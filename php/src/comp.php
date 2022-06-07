<html>
  <head>
    <title>
      フルーツ屋さん在庫追加完了ページ
    </title>
  </head>
  <body>
    <h1>
      フルーツ在庫追加完了しました。
    </h1>
    <h2>
      以下の在庫が追加されましたので、<a href="top.php">トップページ</a>に戻ってください。
    </h2>

<?php
  $inputName = $_POST["name"];
  $inputNumber = $_POST["number"];
  $mysqli = new mysqli("mydb","root","password","ec");
  $sql = "INSERT INTO `zaiko` (`id`, `name`, `number`) VALUES (NULL, '$inputName', '$inputNumber');";
  $result = $mysqli->query($sql);

  echo "<u><b>「".$inputName."」</b></u>が、<b><u>「".$inputNumber."個」</u></b>追加されました。";

?>

</body>
</html>
