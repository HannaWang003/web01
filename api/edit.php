<?php
include_once "db.php";
$table = $_POST['table'];
$DB = ${ucfirst($table)};
unset($_POST['table']);
foreach ($_POST['id'] as $idx => $id) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $DB->del($id);
    } else {
        $row = $DB->find($id);
        if (isset($_POST['text'])) {
            $row['text'] = $_POST['text'][$idx];
        }
        $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
        $DB->save($row);
    }
}
to("../back.php?do=$table");
