<?php
include_once "db.php";
echo $res = $DB->find($_POST);
if ($res > 0) {
    $_SESSION['login'] = $_POST['acc'];
}
