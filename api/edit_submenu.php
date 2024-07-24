<?php
include_once "db.php";
foreach ($_POST['id'] as $idx => $id) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $Menu->del($id);
    } else {
        $row = $Menu->find($id);
        $row['text'] = $_POST['text'][$idx];
        $row['href'] = $_POST['href'][$idx];
        $Menu->save($row);
    }
}
if (!empty($_POST['add_text'])) {
    foreach ($_POST['add_text'] as $idx => $text) {
        $Menu->save(['text' => $text, 'href' => $_POST['add_href'][$idx], 'big_id' => $_POST['big_id']]);
    }
}
to("../back.php?do=menu");
