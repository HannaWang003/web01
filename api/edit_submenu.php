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
        $row['text'] = $_POST['text'][$idx];
        $row['href'] = $_POST['href'][$idx];
        $DB->save($row);
    }
}
if (isset($_POST['add_text'])) {
    foreach ($_POST['add_text'] as $idx => $text) {
        if (!empty($text && $_POST['add_href'][$idx])) {
            $DB->save(['text' => $text, 'href' => $_POST['add_href'][$idx], 'big_id' => $_POST['big_id']]);
        }
    }
}
to("../back.php?do=$table");
