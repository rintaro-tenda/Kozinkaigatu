<?php
include 'views/new.php';

$title = '登録ページ';
$content = __DIR__ . '/views/new.php';
include __DIR__ . '/views/layout.php';
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メモ一覧</title>
</head>

<body>
    <h1>メモ一覧</h1>
    <a href="new.php">メモを書く</a>
    <main>
        <?php foreach ($memo as $memos) : ?>
            <dev>
                <section>
                    <h2><?php print $memos['title']?></h2>
                    <div>
                        記録日 : <?php echo $memos['date']?>年&nbsp; | &nbsp;
                        記録回数 : <?php echo $memos['counts']?>
                    </div>
                </section>
            </dev>
        <?php endforeach?>
    </main>
</body>

</html>
