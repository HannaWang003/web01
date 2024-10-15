<?php
include_once "db.php";
if (isset($_POST['id'])) {
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
}
if (isset($_POST['text2'], $_POST['url2']) && !empty($_POST['text2'] && $_POST['url2'])) {
    foreach ($_POST['text2'] as $idx => $text) {
        $url = $_POST['url2'][$idx];
        if ($text != "" && $url != "") {

            $DB->save(['text' => $text, 'url' => $url, 'big_id' => $_POST['big_id']]);
        }
    }
}
to("../back.php?do=$do");
