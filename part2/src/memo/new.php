<?php

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メモ帳</title>
</head>

<body>
    <h1>メモ帳</h1>
    <form action="create.php" method="post">
        <div>
            <div>
                <label for="title">メモタイトル</label>
                <input type="text" name="title" id="title">
            </div>
            <div>
                <label for="date">日付</label>
                <input type="date" name="date" id="date">
            </div>
            <div>
                <label for="content">メモ内容</label>
                <textarea type="text" name="content" id="content" rows="10"></textarea>
            </div>
            <label>確認回数</label>
            <div>
                <div>
                    <input type="radio" name="count" id="count1" value="1回目">
                    <label for="count1">1回目</label>
                    <input type="radio" name="count" id="count2" value="2回目">
                    <label for="count2">2回目</label>
                    <input type="radio" name="count" id="count3" value="3回目">
                    <label for="count3">3回目</label>
                </div>
            </div>
            <button type="submit">登録する</button>
        </div>
    </form>
</body>

</html>
