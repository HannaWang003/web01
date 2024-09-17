<?php
include_once "db.php";
foreach ($_POST['id'] as $idx => $id) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $DB->del($id);
    } else {
        $row = $DB->find($id);
        if ($table == "title") {
            $row['sh'] = ($row['id'] == $_POST['sh']) ? 1 : 0;
        } else {
            $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
        }
        if (isset($_POST['text'])) {
            $row['text'] = $_POST['text'][$idx];
        }
        $DB->save($row);
    }
}
to("../back.php?do=$table");
