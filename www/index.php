<?php
session_start();

ini_set('display_errors', 1);
define('ROOT', dirname(dirname(__FILE__)));

require ROOT . '/inc/conf.php';
require ROOT . '/inc/db.php';

$page = @$_SERVER['REDIRECT_URL'];

if (empty($page)) {
    require ROOT . '/pages/home.php';
} else {
    $script = ROOT . "/pages$page.php";
    if (file_exists($script)) {
        require $script;
    } else {
        require ROOT . '/pages/404.php';
    }
}

function logError($e)
{
    _exec(
        "insert into error set
        ognoo = now(),
        ip=?,
        error_code=?,
        error=?,
        file=?,
        line=?,
        site='user'
    ",
        'sissi',
        [getIpAddress(), $e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine()],
        $count
    );

    alertAdmin($e->getMessage());
}

function redirect($url)
{
    header("Location: $url");
    exit;
}

function dd($arr, $exit = false)
{
    echo '<pre>';
    print_r($arr);
    if ($exit) {
        exit;
    }
}

function post($name, $length = null)
{
    $value = $_POST[$name];

    $value = addslashes($value);

    if (!is_null($length) && mb_strlen($value) > $length) {
        $value = mb_substr($value, 0, $length);
        // Security alert! DB write, email send
        echo "<br>security alert : $name индекстэй өгөгдөл $length уртаас хэтэрсэн өгөгдөлтэй байна!<br>";
    }

    return $value;
}

function get($name, $length = null)
{
    $value = $_GET[$name];

    $value = addslashes($value);

    if (!is_null($length) && mb_strlen($value) > $length) {
        $value = mb_substr($value, 0, $length);
        // Security alert! DB write, email send
        echo "<br>security alert : $name индекстэй өгөгдөл $length уртаас хэтэрсэн өгөгдөлтэй байна!<br>";
    }

    return $value;
}

function alertAdmin($message)
{
    // email -> sendgrid
    // sms -> skytel web2sms url?phone=99442233&msg=aldaa: $message
}

function formatMoney($value)
{
    if ($value == '0') {
        return '';
    } else {
        $value = number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $value)), 0) . "₮";
        return $value;
    }
}
