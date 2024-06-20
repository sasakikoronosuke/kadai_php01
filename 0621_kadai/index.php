<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Tracker</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style2.css">

</head>
<body>
    
    <div class="container">
        <h1>今日のあなたについて教えてください</h1>
        

            <form action="write.php" method="post" class="form">

            <div class="questions">
                <label for="date">今日の日付:</label>
                <input type="date" id="date" name="date" required>
            </div>
            
            
            <div class="questions">
                <label for="name">お名前:</label>
                <input type="text" id="name" name="name" required>
            </div>


            <div class="questions">
                <label for="breakfast">朝食:</label>
                <select id="breakfast" name="breakfast" required>
                    <option value="">選択してください</option>
                    <option value="きちんと食べた">きちんと食べた</option>
                    <option value="簡易的に食べた">簡易的に食べた</option>
                    <option value="食べ過ぎた">食べ過ぎた</option>
                    <option value="食べなかった">食べなかった</option>
                </select><br>
            </div>

            <div class="questions">
                <label for="lunch">昼食:</label>
                <select id="lunch" name="lunch" required>
                    <option value="">選択してください</option>
                    <option value="きちんと食べた">きちんと食べた</option>
                    <option value="簡易的に食べた">簡易的に食べた</option>
                    <option value="食べ過ぎた">食べ過ぎた</option>
                    <option value="食べなかった">食べなかった</option>
                </select><br>
            </div>

            <div class="questions">
                <label for="dinner">夕飯:</label>
                <select id="dinner" name="dinner" required>
                    <option value="">選択してください</option>
                    <option value="きちんと食べた">きちんと食べた</option>
                    <option value="簡易的に食べた">簡易的に食べた</option>
                    <option value="食べ過ぎた">食べ過ぎた</option>
                    <option value="食べなかった">食べなかった</option>
                </select><br>
            </div>

            <div class="questions">
                <label for="sleep">睡眠:</label>
                <select id="sleep" name="sleep" required>
                    <option value="">選択してください</option>
                    <option value="よく眠れた">よく眠れた</option>
                    <option value="少し寝苦しかった">少し寝苦しかった</option>
                    <option value="何度も起きてしまった">何度も起きてしまった</option>
                    <option value="眠れなかった">眠れなかった</option>
                </select><br>
            </div>

            <div class="questions">
                <label>今日の気分は？（複数選択可）</label>
                <div class="feeling">
                    <input type="checkbox" id="feel1" name="feel[]" value="穏やか">
                    <label for="feel1">穏やか</label>
                    <input type="checkbox" id="feel2" name="feel[]" value="楽しい">
                    <label for="feel2">楽しい</label>
                    <input type="checkbox" id="feel3" name="feel[]" value="幸せ">
                    <label for="feel3">幸せ</label>
                    <input type="checkbox" id="feel4" name="feel[]" value="悲しい">
                    <label for="feel4">悲しい</label>
                    <input type="checkbox" id="feel5" name="feel[]" value="イライラ">
                    <label for="feel5">イライラする</label>
                </div>
            </div>


            
            <button type="submit">登録</button>
        </form>
    </div>
    



</body>
</html>