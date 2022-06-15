<?php 
$a = "Hello";
echo $a;
$b = "GoodBye";
echo $b;

?>
a
<html>
<head><title>PHP TEST</title></head>
<body>

<?php

$counter_file = 'counter.txt';
$counter_lenght = 8;

$fp = fopen($counter_file, 'r+');

if ($fp){
    if (flock($fp, LOCK_EX)){

        $counter = fgets($fp, $counter_lenght);
        $counter++;

        rewind($fp);

        if (fwrite($fp,  $counter) === FALSE){
            print('ファイル書き込みに失敗しました');
        }

        flock($fp, LOCK_UN);
    }
}

fclose($fp);

print('count:'.$counter);

?>
</body>
</html>
