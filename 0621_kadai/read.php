<?php

// ファイルの読み込み
$openFile = fopen("data/data.csv","r");

// html上段
echo '
    <div class="display_wrap">
        <h1>過去の自分を振り返ろう</h1>
        <div class="item_wrap">
';

while($arr = fgetcsv($openFile)){


    echo '
        <div class="item">
            <p class="sname">日付:'.$arr[0].'</p>
            <p>名前:'.$arr[1].'</p>
            <p>朝食:'.$arr[2].'</p>
            <p>昼食:'.$arr[3].'</p>
            <p>夕食:'.$arr[4].'</p>
            <p>睡眠:'.$arr[5].'</p>
            <p>今日の気分:'.$arr[6].'</p>
        </div>
    ';

};

echo '
        </div>
    </div>
';

fclose($openFile);

?>