<html>
  <head>
    <title>フルーツ屋さん在庫管理ページ</title>
  </head>
  <body>
    <h1>フルーツ在庫管理ページ</h1>
    <h2><a href="input.php">在庫追加はこちらから</a></h2>
    <?php
    $mysqli = new mysqli("mydb","root","password","ec");

    $sql = "select * from zaiko ORDER BY `number` DESC;";
    $result = $mysqli->query($sql);

    echo '<table border=2 style="border-collapse:collapse;">';
    echo '<tr>
            <th>在庫ID</th>
            <th>商品名</th>
            <th>個数</th>
          </tr>';
    while($row = $result->fetch_assoc()){
      echo '<tr>
              <td>'.$row["id"].'</td>
              <td>'.$row["name"].'</td>
              <td>'.$row["number"].'</td>
            </tr>';
    }
    ?>
    </table>
  </body>
</html>