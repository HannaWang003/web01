<?php
include_once "db.php";
echo $res = $Admin->count($_POST);
if ($res != 0) {
    $_SESSION['login'] = $_POST['acc'];
}
