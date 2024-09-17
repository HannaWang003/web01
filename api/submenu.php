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
if (!empty($_POST['text2'])) {
    foreach ($_POST['text2'] as $idx => $text) {
        if ($text != "" && $_POST['url2'][$idx] != "") {
            $DB->save(['text' => $text, 'url' => $_POST['url2'][$idx], 'big_id' => $_POST['big_id']]);
        }
    }
}
to("../back.php?do=$table");
