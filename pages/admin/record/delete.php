<?php

$id = get('id', 10);
$utga = get('utga', 100);

try {
    $success = _exec(
        "delete from transaction where id=?",
        'i',
        [$id],
        $count
    );

    $_SESSION['messages'] = ["\"$utga\" утгатай гүйлгээг амжилттай устгалаа. "];
} catch (Exception $e) {
    $_SESSION['errors'] = ["$utga утгатай гүйлгээг устгаж чадсангүй. Та дараа дахин оролдоно уу!"];
} finally {
    if (isset($e)) {
        logError($e);
    }
}

redirect('/user/home');