<?php
$title = '登録ページ';
$content = __DIR__ . '/views/new.php';
include __DIR__ . '/views/layout.php';
?>
<body>
    <h1>メモ帳</h1>
    <form action="create.php" method="post">
        <?php if (count($errors)) : ?>
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <div>
            <div>
                <label for="title">メモタイトル</label>
                <input type="text" name="title" id="title" value='<?php echo $memo['title'] ?>'>
            </div>
            <div>
                <label for="date">日付</label>
                <input type="date" name="date" id="date">
            </div>
            <div>
                <label for="content">メモ内容</label>
                <textarea type="text" name="content" id="content" rows="10"><?= $memo['content']; ?></textarea>
            </div>
            <label>確認回数</label>
            <div>
                <div>
                    <input type="radio" name="counts" id="count1" value="1回目">
                    <label for="count1">1回目</label>
                    <input type="radio" name="counts" id="count2" value="2回目">
                    <label for="count2">2回目</label>
                    <input type="radio" name="counts" id="count3" value="3回目">
                    <label for="count3">3回目</label>
                </div>
            </div>
            <button type="submit">登録する</button>
        </div>
    </form>
</body>

</html>
