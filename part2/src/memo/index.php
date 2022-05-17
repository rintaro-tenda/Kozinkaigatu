<?php
require_once __DIR__ . '/lib/mysqli.php';

function listMemo($link)
{
    $memos = [];
    $sql = 'SELECT title, date, content, counts FROM memo;';
    $results = mysqli_query($link, $sql);

    while ($memo = mysqli_fetch_assoc($results)) {
        $memos[] = $memo;
    }

    mysqli_free_result($results);
    return $memos;
}



$link = dbConnect();
$memo = listMemo($link);

$title = 'メモ一覧';
$content = __DIR__ . '/views/index.php';
include __DIR__ . '/views/layout.php';
