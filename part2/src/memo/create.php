<?php

    //  <!-- HTTPメソッドがPOSTだったら -->
if ($_SERVER['REQUEST_METHOD']) {

    //  <!-- POSTされたメモ情報を変数に格納する -->
    $memo = [
        'title' => $_POST['name'],
        'date' => $_POST['date'],
        'content' => $_POST['content'],
        'count' => $_POST['count']
    ];
    //  <!-- バリデーションする -->

    // データベースに接続する
    //  <!-- データベースに格納する -->

    //  <!-- データベースを切断する -->
}
