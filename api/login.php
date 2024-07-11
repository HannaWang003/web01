<?php
include_once "db.php";
echo $res = $Admin->count(['acc' => $_POST['acc'], 'pw' => $_POST['pw']]);
if ($res != 0) {
    $_SESSION['admin'] = $_POST['acc'];
}