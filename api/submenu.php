<?php
include_once "db.php";
$table = $_GET['table'];
$DB = ${ucfirst($table)};
if (isset($_POST['id'])) {
    foreach ($_POST['id'] as $idx => $id) {
        $row = $DB->find($id);
        $row['text'] = $_POST['text'][$idx];
        $row['href'] = $_POST['href'][$idx];
        $DB->save($row);
    }
}
if (!empty($_POST['addtext']) && !empty($_POST['addhref'])) {
    foreach ($_POST['addtext'] as $idx => $text) {
        $data = [];
        $data['text'] = $text;
        $data['href'] = $_POST['addhref'][$idx];
        $data['big_id'] = $_POST['id'];
        $DB->save($data);
    }
}
to("../back.php?do=$table");