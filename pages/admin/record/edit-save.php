<?php
$id = get('id', 10);
$title = post('title', 45);
$text = post('text', 300);
$image = post('image', 300);

try {
    $success = _exec(
        "update transaction set
           title=?,
            text=?,
           image=?,
            update_user_id=?,
            update_time=now()
            where id=?
        ",
        'sss',
        [$title, $text, $image, $_SESSION['id'], $id],
        $count
    );

    $_SESSION['messages'] = ["\"$title\" утгатай гүйлгээг амжилттай өөрчиллөө. "];
} catch (Exception $e) {
    $_SESSION['errors'] = ["Системийн алдаа гарлаа. Та дараа дахин оролдоно уу"];
    // echo "Алдаа: " . $e->getMessage() . ' : ' . $e->getFile() . ' : ' . $e->getLine() . ' : Code ' . $e->getCode();
} finally {
    if (isset($e)) {
        logError($e);
    }
}

redirect('/user/home');
