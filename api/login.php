<?php
include_once "db.php";
if (isset($_POST['acc'], $_POST['pw'])) {
    echo $res = $Admin->find($_POST);
    if ($res > 0) {
        $_SESSION['login'] = $_POST['acc'];
    }
}
