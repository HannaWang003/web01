<?php
include_once "db.php";
$res = $Admin->count(['acc' => $_POST['acc'], 'pw' => $_POST['pw']]);
if ($res > 0) {
    $_SESSION['admin'] = $_POST['acc'];
    to("../back.php");
} else {
    to("../index.php?do=admin&error=帳號或密碼錯誤");
}
