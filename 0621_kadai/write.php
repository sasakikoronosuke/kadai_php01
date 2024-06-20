<?php


// データ受信
$date = $_POST['date'];
$name = $_POST['name'];
$lunch = $_POST['lunch'];
$breakfast = $_POST['breakfast'];
$dinner = $_POST['dinner'];
$sleep = $_POST['sleep'];
$feel = isset($_POST["feel"]) ? implode(", ", $_POST["feel"]) : ''; 
$c = ",";

$data = $date.$c.$name.$c.$lunch.$c.$breakfast.$c.$dinner.$c.$sleep.$c.$feel;

// ファイルへの書き込み
$file = fopen("data/data.csv","a");
fwrite($file, $data."\n");
fclose($file);



// file_put_contents('data/data.txt', $data, FILE_APPEND)

?>


<html>

<head>
    <meta charset="utf-8">
    <title>登録しました★</title>
</head>

<body>

<!-- 以下は動いているかの確認用 -->
   
<!-- ここまで確認用、後でコメントアウト -->

    <h1>お疲れ様でした。</h1>
    <h2>今日の様子を登録しました。</h2>

    <p>お名前： <?= $name ?> </p>
    <p>日付： <?= $date ?> </p>
    <p>昼食： <?= $lunch ?> </p>
    <p>朝食： <?= $breakfast ?> </p>
    <p>夕飯： <?= $dinner ?> </p>
    <p>気分： <?= $feel ?> </p>

    <ul>
        <li><a href="read.php">過去データを確認する</a></li>
    </ul>
</body>

</html>
