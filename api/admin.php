<?php
include_once "db.php";
foreach ($_POST['id'] as $idx => $id) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $DB->del($id);
    } else {
        $row = $DB->find($id);
        $row['acc'] = $_POST['acc'][$idx];
        $row['pw'] = $_POST['pw'][$idx];
        $DB->save($row);
    }
}
to("../back.php?do=$table");
