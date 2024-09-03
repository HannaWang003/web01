<?php
include_once "db.php";
if (isset($_POST['text'])) {
    foreach ($_POST['id'] as $key => $id) {
        if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
            $Menu->del($id);
        } else {
            $Menu->save(['id' => $id, 'text' => $_POST['text'][$key], 'url' => $_POST['url'][$key]]);
        }
    }
}
if (!empty($_POST['text2'])) {
    foreach ($_POST['text2'] as $key => $text) {
        $Menu->save(['text' => $text, 'url' => $_POST['url2'][$key], 'big_id' => $_POST['big_id']]);
    }
}
to("../back.php?do=menu");
