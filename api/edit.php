<?php
include_once "db.php";
if (isset($_FILES['img']['tmp_name']) && !empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../img/{$_FILES['img']['name']}");
    $_POST['img'] = $_FILES['img']['name'];
}
if (isset($_POST['id'])) {
    if (!is_array($_POST['id'])) {
        $DB->save($_POST);
    } else {
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
    }
} else {
    $DB->save($_POST);
}
to("../back.php?do=$do");
