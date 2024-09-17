<?php
include_once "db.php";
foreach ($_POST['id'] as $idx => $id) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $DB->del($id);
    } else {
        $row = $DB->find($id);
        $row['text'] = $_POST['text'][$idx];
        $row['url'] = $_POST['url'][$idx];
        $DB->save($row);
    }
}
to("../back.php?do=$table");
