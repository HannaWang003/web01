<?php
include_once "db.php";
foreach ($_POST['id'] as $key => $id) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $Menu->del($id);
    } else {
        $sh = (in_array($id, $_POST['sh'])) ? 1 : 0;
        $Menu->save(['id' => $id, 'text' => $_POST['text'][$key], 'url' => $_POST['url'][$key], 'sh' => $sh]);
    }
}
to("../back.php?do=menu");
