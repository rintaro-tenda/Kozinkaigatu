<?php

$memo = [
    'title' => '',
    'content' => '',
    'date' => '',
    'counts' => ''
];

$errors = [];

$title = '登録ページ';
$content = __DIR__ . '/views/new.php';
include __DIR__ . '/views/layout.php';
