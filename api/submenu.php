<?php
include_once "db.php";
foreach ($_POST['id'] as $idx => $id) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $Menu->del($id);
    } else {
        $row = $Menu->find($id);
        $row['text'] = $_POST['text'][$idx];
        $row['url'] = $_POST['url'][$idx];
        $Menu->save($row);
    }
}
if (isset($_POST['add_text'])) {
    foreach ($_POST['add_text'] as $idx => $text) {
        if ($text != "") {
            $data = [];
            $data['text'] = $text;
            $data['url'] = $_POST['add_url'][$idx];
            $data['big_id'] = $_GET['id'];
            $Menu->save($data);
        }
    }
}
to("../back.php?do=menu");
