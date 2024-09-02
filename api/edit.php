<?php
include_once "db.php";
foreach ($_POST['id'] as $key => $id) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $DB->del($id);
    } else {
        $row = $DB->find($id);
        if ($table == 'title') {
            $row['sh'] = ($id == $_POST['sh']) ? "1" : "0";
        } else {
            $row['sh'] = (in_array($id, $_POST['sh'])) ? "1" : "0";
        }
        if (isset($row['text'])) {
            $row['text'] = $_POST['text'][$key];
        }
        $DB->save($row);
    }
}
to("../back.php?do=$table");
