<?php

$img = post('img', 250);
$title = post('title', 45);
$text = post('text', 50);

$success = _exec(
    "insert into ware set
    img=?,
    title=?,
    text=?,
    create_user_id=?
    ",
    'sssi',
    [$img, $title, $text, $_SESSION['id']],
    $count
);

die("$count : $success");
