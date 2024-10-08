<?php
include_once "db.php";
if (isset($_POST['text2'])) {
    foreach ($_POST['text2'] as $idx => $text) {
        if ($text != "" && $_POST['url2'][$idx] != "") {
            $tmp = [
                "text" => $text,
                "url" => $_POST['url2'][$idx],
                "big_id" => $_POST['big_id']
            ];
            $DB->save($tmp);
        }
    }
}
if (isset($_POST['id'])) {
    foreach ($_POST['id'] as $idx => $id) {
        if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
            $DB->del($id);
        } else {
            $row = $DB->find($id);
            if (isset($_POST['sh'])) {
                $row['sh'] = (in_array($id, $_POST['sh'])) ? 1 : 0;
            }
            $row['text'] = $_POST['text'][$idx];
            $row['url'] = $_POST['url'][$idx];
            $DB->save($row);
        }
    }
}
to("../back.php?do=$do");
