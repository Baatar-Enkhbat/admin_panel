<?php
// phone, userpassword хүлээж авна
$email = post('email', 15);
$password = post('userpassword', 12);

// Алдааг хадгалах массив үүсгэнэ
$errors = [];

// Хэрэв phone password алдаатай бол алдааг session-д бичээд логин хуудас руу үсэргэнэ
if (strlen($email) < 4) {
    $errors[] = "Eメールを確認し、正しく入力してください。";
}

if (strlen($password) < 4) {
    $errors[] = "パスワードを確認し、正しく入力してください。";
}

if (sizeof($errors) > 0) {
    $_SESSION['errors'] = $errors;
    redirect('/admin');
}

// Базаас ийм утас нууц үгтэй хүний мэдээллийг татна
_selectRow(
    "select id, name, email, phone from users where email=? and pass=?",
    'ss',
    [$email, $password],
    $id, $name, $email, $phone
);

/* Хэрэв мэдээлэл ирсэн байвал
1) session эхлүүлнэ
2) session-д хэрэглэгчийн мэдээллийг бичнэ
3) home хуудас руу үсэргэнэ
 */
if (!empty($name)) {
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $name;
    $_SESSION['phone'] = $phone;
    $_SESSION['email'] = $email;
    $_SESSION['type'] = 'user';
    redirect('/admin-panel');
} else {
    $_SESSION['errors'] = ["パスワード又はEメールが違います。"];
    redirect('/admin');
}
