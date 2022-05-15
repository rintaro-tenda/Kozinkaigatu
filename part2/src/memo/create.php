<?php
require_once __DIR__ . '/lib/mysqli.php';

function validate($memo)
{
    $errors = [];

    // メモタイトル
    if (!strlen($memo['title'])) {
        $errors['title'] = 'タイトルを入力してください';
    } elseif (strlen($memo['title']) > 255) {
        $errors['title'] = '255文字以内で入力してください';
    }

    // 日付
    $dates = explode('-', $memo['date']);
    if (!strlen($memo['date'])) {
        $errors['date'] = '日付を入力してください';
    } elseif (count($dates) != 3) {
        $errors['date'] = '正しい形式で日付入力してください';
    }

    // メモ内容
    if (!strlen($memo['content'])) {
        $errors['content'] = 'メモを入力してください';
    } elseif (strlen($memo['content']) > 255) {
        $errors['content'] = '255文字以内で入力してください';
    }
    // 閲覧回数
    if (is_null($memo['counts']) === true) {
        $errors['counts'] = '回数を入力してください';
    }


    return $errors;
}

function createMemo($link, $memo)
{
    $sql = <<<EOT
    INSERT INTO memo (
        title,
        date,
        content,
        counts
    ) VALUES (
        "{$memo['title']}",
        "{$memo['date']}",
        "{$memo['content']}",
        "{$memo['counts']}"
    )
    EOT;
    $result = mysqli_query($link, $sql);
    if (!$result) {
        error_log('Error: fail to create review');
        error_log('Debugging Error:' . mysqli_error($link));
    }
}

//  <!-- HTTPメソッドがPOSTだったら -->
if ($_SERVER['REQUEST_METHOD']) {
    //  <!-- POSTされたメモ情報を変数に格納する -->
    $memo = [
        'title' => $_POST['title'],
        'date' => $_POST['date'],
        'content' => $_POST['content'],
        'counts' => $_POST['counts']
    ];
    //  <!-- バリデーションする -->
    $errors = validate($memo);
    if (!$errors) {
        // データベースに接続する
        $link = dbConnect();
        //  <!-- データベースに格納する -->
        createMemo($link, $memo);
        //  <!-- データベースを切断する -->
        mysqli_close($link);
        // リダイレクト
        header("Location: index.php");
    }
    // もしエラーがあれば、以下ページが反映
}
include 'views/new.php';
