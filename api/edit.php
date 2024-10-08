<?php
include_once "db.php";
if (isset($_POST['id'])) {
    foreach ($_POST['id'] as $idx => $id) {
        if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
            $DB->del($id);
        } else {
            $row = $DB->find($id);
            if (isset($_POST['sh'])) {
                $row['sh'] = (in_array($id, $_POST['sh'])) ? 1 : 0;
            }
            if (isset($_POST['text'])) {
                $row['text'] = $_POST['text'][$idx];
            }
            if (isset($_POST['acc'])) {
                $row['acc'] = $_POST['acc'][$idx];
            }
            if (isset($_POST['pw'])) {
                $row['pw'] = $_POST['pw'][$idx];
            }
            if (isset($_POST['url'])) {
                $row['url'] = $_POST['url'][$idx];
            }
            $DB->save($row);
        }
    }
} else {
    $DB->save($_POST);
}
to("../back.php?do=$do");
