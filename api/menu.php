<?php
include_once "db.php";
if (isset($_POST['id'])) {
    foreach ($_POST['id'] as $idx => $id) {
        if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
            $DB->del($id);
        } else {
            $row = $DB->find($id);
            $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
            $row['text'] = $_POST['text'][$idx];
            $row['url'] = $_POST['url'][$idx];
            $DB->save($row);
        }
    }
} else {

    $DB->save($_POST);
}
to("../back.php?do=$do");
